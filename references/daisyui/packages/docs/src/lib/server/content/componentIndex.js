export function toComponentIndexDto(metadata, slug) {
  return {
    slug,
    title: metadata.title,
    desc: metadata.desc,
  }
}
