import { load as loadYaml } from "js-yaml"

export class ContentFetchError extends Error {
  constructor(message, { cause, status, url } = {}) {
    super(message, { cause })
    this.name = "ContentFetchError"
    this.status = status
    this.url = url
  }
}

export async function fetchYaml(
  url,
  { fetcher = fetch, label = "content", timeoutMs = 15_000 } = {},
) {
  let response

  try {
    response = await fetcher(url, {
      signal: AbortSignal.timeout(timeoutMs),
    })
  } catch (cause) {
    throw new ContentFetchError(`Could not fetch ${label}`, { cause, url })
  }

  if (!response.ok) {
    throw new ContentFetchError(`Could not fetch ${label}: HTTP ${response.status}`, {
      status: response.status,
      url,
    })
  }

  try {
    return loadYaml(await response.text())
  } catch (cause) {
    throw new ContentFetchError(`Could not parse ${label}`, { cause, url })
  }
}

export function createBuildMemo(loader, { enabled = process.env.NODE_ENV === "production" } = {}) {
  let productionPromise

  return function loadMemoized() {
    if (!enabled) {
      return loader()
    }

    if (!productionPromise) {
      productionPromise = loader().catch((error) => {
        productionPromise = undefined
        throw error
      })
    }

    return productionPromise
  }
}

export function createBuildMemoByKey(
  loader,
  { enabled = process.env.NODE_ENV === "production" } = {},
) {
  const productionPromises = new Map()

  return function loadMemoized(key) {
    if (!enabled) {
      return loader(key)
    }

    if (!productionPromises.has(key)) {
      productionPromises.set(
        key,
        loader(key).catch((error) => {
          productionPromises.delete(key)
          throw error
        }),
      )
    }

    return productionPromises.get(key)
  }
}
