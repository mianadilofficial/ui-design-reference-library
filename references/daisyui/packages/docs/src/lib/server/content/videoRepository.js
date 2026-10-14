import { slugify } from "../../util.js"

export function normalizeVideo(video) {
  return {
    id: video.id,
    snippet: {
      title: video.snippet.title,
      description: video.snippet.description,
      channelTitle: video.snippet.channelTitle,
      thumbnails: {
        high: {
          url: video.snippet.thumbnails.high.url,
        },
      },
    },
    status: {
      embeddable: video.status.embeddable,
    },
  }
}

export function toVideoListDto(video) {
  return {
    id: video.id,
    snippet: {
      title: video.snippet.title,
      channelTitle: video.snippet.channelTitle,
      thumbnails: {
        high: {
          url: video.snippet.thumbnails.high.url,
        },
      },
    },
    status: {
      embeddable: video.status.embeddable,
    },
  }
}

export function toVideoDetailDto(video) {
  return {
    id: video.id,
    snippet: {
      title: video.snippet.title,
      description: video.snippet.description,
    },
  }
}

export function getVideoRouteId(video) {
  return `${slugify(video.snippet.title)}-${slugify(video.id)}`
}

export function createVideoRepository({ endpoint, fetcher, cache }) {
  let catalogPromise

  async function fetchCatalog() {
    const response = await fetcher(endpoint)
    if (!response.ok) {
      throw new Error(`Failed to fetch videos: HTTP ${response.status}`)
    }

    const videos = await response.json()
    if (!Array.isArray(videos)) {
      throw new TypeError("Failed to fetch videos: expected an array")
    }

    return videos.map(normalizeVideo)
  }

  function getCatalog() {
    if (!cache) {
      return fetchCatalog()
    }

    if (!catalogPromise) {
      const request = fetchCatalog().catch((error) => {
        if (catalogPromise === request) {
          catalogPromise = undefined
        }
        throw error
      })
      catalogPromise = request
    }

    return catalogPromise
  }

  return {
    async list() {
      const videos = await getCatalog()
      return videos.map(toVideoListDto)
    },

    async detail(routeId) {
      const videos = await getCatalog()
      const video = videos.find((item) => getVideoRouteId(item) === routeId)

      if (!video) {
        return null
      }

      return {
        embeddable: video.status.embeddable,
        video: toVideoDetailDto(video),
      }
    },
  }
}
