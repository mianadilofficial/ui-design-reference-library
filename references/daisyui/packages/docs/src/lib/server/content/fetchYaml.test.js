import { describe, expect, test } from "bun:test"
import { ContentFetchError, createBuildMemo, createBuildMemoByKey, fetchYaml } from "./fetchYaml.js"

const response = (body, { ok = true, status = 200 } = {}) => ({
  ok,
  status,
  async text() {
    return body
  },
})

describe("server content fetching", () => {
  test("parses YAML and passes a bounded timeout signal", async () => {
    let requestOptions
    const result = await fetchYaml("https://example.test/catalog.yaml", {
      fetcher: async (_url, options) => {
        requestOptions = options
        return response("productOrder:\n  - first\n")
      },
      label: "fixture catalog",
      timeoutMs: 1_000,
    })

    expect(result).toEqual({ productOrder: ["first"] })
    expect(requestOptions.signal).toBeInstanceOf(AbortSignal)
  })

  test("preserves HTTP status for loader-level 404 handling", async () => {
    const request = fetchYaml("https://example.test/missing.yaml", {
      fetcher: async () => response("missing", { ok: false, status: 404 }),
      label: "fixture product",
    })

    await expect(request).rejects.toBeInstanceOf(ContentFetchError)
    await expect(request).rejects.toMatchObject({ status: 404 })
  })
})

describe("build memoization", () => {
  test("shares an in-flight request and retries after rejection", async () => {
    let calls = 0
    const load = createBuildMemo(
      async () => {
        calls += 1
        if (calls === 1) throw new Error("temporary failure")
        return "ready"
      },
      { enabled: true },
    )

    await expect(load()).rejects.toThrow("temporary failure")
    expect(await Promise.all([load(), load()])).toEqual(["ready", "ready"])
    expect(calls).toBe(2)
  })

  test("caches independently by key", async () => {
    let calls = 0
    const load = createBuildMemoByKey(
      async (key) => {
        calls += 1
        return key.toUpperCase()
      },
      { enabled: true },
    )

    expect(await Promise.all([load("one"), load("one"), load("two")])).toEqual([
      "ONE",
      "ONE",
      "TWO",
    ])
    expect(calls).toBe(2)
  })
})
