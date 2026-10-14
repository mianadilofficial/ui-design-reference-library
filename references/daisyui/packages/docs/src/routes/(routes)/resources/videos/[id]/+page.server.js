import { error } from "@sveltejs/kit"
import { videoRepository } from "$lib/server/content/videos.js"

export async function load({ params }) {
  const result = await videoRepository.detail(params.id)

  if (!result) {
    throw error(404, "Video not found")
  }

  if (result.embeddable === false) {
    throw error(404, "Not found")
  }

  return {
    video: result.video,
  }
}
