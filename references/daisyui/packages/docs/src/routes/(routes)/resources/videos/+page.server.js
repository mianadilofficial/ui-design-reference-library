import { videoRepository } from "$lib/server/content/videos.js"

export async function load() {
  return {
    videos: await videoRepository.list(),
  }
}
