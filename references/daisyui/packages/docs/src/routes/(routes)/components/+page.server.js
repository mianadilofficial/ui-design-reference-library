import { dirname } from "node:path"
import { toComponentIndexDto } from "$lib/server/content/componentIndex.js"

export async function load() {
  const components = await Promise.all(
    Object.entries(import.meta.glob("./*/+page.md")).map(async ([path, resolver]) => {
      const { metadata } = await resolver()
      const slug = dirname(path).split("/").pop()
      return toComponentIndexDto(metadata, slug)
    }),
  )

  return {
    components,
  }
}
