import { describe, expect, test } from "bun:test"
import { toComponentIndexDto } from "./componentIndex.js"
import {
  createVideoRepository,
  getVideoRouteId,
  normalizeVideo,
  toVideoDetailDto,
  toVideoListDto,
} from "./videoRepository.js"

const rawVideos = [
  {
    id: "Second_ID",
    etag: "unused-etag",
    kind: "youtube#video",
    snippet: {
      title: "Second & New Video!",
      description: "Second description",
      channelTitle: "Second channel",
      publishedAt: "2026-01-01T00:00:00Z",
      categoryId: "27",
      thumbnails: {
        default: { url: "default.webp" },
        medium: { url: "medium.webp" },
        high: { url: "second.webp", width: 480, height: 360 },
      },
    },
    status: {
      embeddable: true,
      privacyStatus: "public",
      license: "youtube",
      publicStatsViewable: true,
    },
  },
  {
    id: "first-id",
    snippet: {
      title: "First video",
      description: "First description",
      channelTitle: "First channel",
      thumbnails: {
        high: { url: "first.webp" },
      },
    },
    status: {
      embeddable: false,
    },
  },
]

function jsonResponse(body) {
  return {
    ok: true,
    status: 200,
    async json() {
      return body
    },
  }
}

describe("video route data", () => {
  test("projects exact list and detail DTO fields", () => {
    const video = normalizeVideo(rawVideos[0])

    expect(toVideoListDto(video)).toEqual({
      id: "Second_ID",
      snippet: {
        title: "Second & New Video!",
        channelTitle: "Second channel",
        thumbnails: {
          high: { url: "second.webp" },
        },
      },
      status: { embeddable: true },
    })
    expect(toVideoDetailDto(video)).toEqual({
      id: "Second_ID",
      snippet: {
        title: "Second & New Video!",
        description: "Second description",
      },
    })
    expect(getVideoRouteId(video)).toBe("second-new-video-secondid")
  })

  test("preserves catalog order and shares one cached request", async () => {
    let requests = 0
    const repository = createVideoRepository({
      endpoint: "https://example.test/videos.json",
      cache: true,
      fetcher: async () => {
        requests += 1
        return jsonResponse(rawVideos)
      },
    })

    const [videos, detail] = await Promise.all([
      repository.list(),
      repository.detail("second-new-video-secondid"),
    ])

    expect(requests).toBe(1)
    expect(videos.map(({ id }) => id)).toEqual(["Second_ID", "first-id"])
    expect(detail).toEqual({
      embeddable: true,
      video: {
        id: "Second_ID",
        snippet: {
          title: "Second & New Video!",
          description: "Second description",
        },
      },
    })
    expect(await repository.detail("missing-video")).toBeNull()
    expect(requests).toBe(1)
  })

  test("clears a failed cached request so a later load can retry", async () => {
    let requests = 0
    const repository = createVideoRepository({
      endpoint: "https://example.test/videos.json",
      cache: true,
      fetcher: async () => {
        requests += 1
        if (requests === 1) {
          return { ok: false, status: 503 }
        }
        return jsonResponse(rawVideos)
      },
    })

    await expect(repository.list()).rejects.toThrow("HTTP 503")
    expect((await repository.list()).map(({ id }) => id)).toEqual(["Second_ID", "first-id"])
    expect(requests).toBe(2)
  })
})

test("component index projects only fields consumed by the page", () => {
  expect(
    toComponentIndexDto(
      {
        title: "Button",
        desc: "Buttons allow users to take actions.",
        classnames: ["btn"],
        browser: "https://example.test",
      },
      "button",
    ),
  ).toEqual({
    slug: "button",
    title: "Button",
    desc: "Buttons allow users to take actions.",
  })
})
