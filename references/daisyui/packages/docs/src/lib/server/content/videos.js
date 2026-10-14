import { dev } from "$app/environment"
import { PUBLIC_DAISYUI_API_PATH } from "$env/static/public"
import { createVideoRepository } from "./videoRepository.js"

export const videoRepository = createVideoRepository({
  endpoint: `${PUBLIC_DAISYUI_API_PATH}/api/youtube.json`,
  fetcher: globalThis.fetch,
  cache: !dev,
})
