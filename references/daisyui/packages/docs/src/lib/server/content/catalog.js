export function getCatalogIds(manifest, { label = "catalog", orderKey = "productOrder" } = {}) {
  if (!manifest || typeof manifest !== "object" || Array.isArray(manifest)) {
    throw new TypeError(`${label} manifest must be an object`)
  }

  const ids = manifest[orderKey]
  if (!Array.isArray(ids) || ids.length === 0) {
    throw new TypeError(`${label} manifest must contain a non-empty ${orderKey} array`)
  }

  if (ids.some((id) => typeof id !== "string" && typeof id !== "number")) {
    throw new TypeError(`${label} ${orderKey} values must be strings or numbers`)
  }

  return ids.map(String)
}

export async function loadOrderedCatalog(manifest, loadItem, options) {
  const ids = getCatalogIds(manifest, options)
  const items = await Promise.all(ids.map((id) => loadItem(id)))

  const missingIndex = items.findIndex((item) => !item)
  if (missingIndex !== -1) {
    throw new Error(`Missing ${options?.label ?? "catalog"} item: ${ids[missingIndex]}`)
  }

  return items.map((item, index) => ({ ...item, _key: ids[index] }))
}

function hasAllSameTags(first, second) {
  return (
    first.tags &&
    second.tags &&
    first.tags.length === second.tags.length &&
    first.tags.every((tag) => second.tags.includes(tag))
  )
}

export function getRelatedProducts(product, products, limit = 2) {
  if (!product?.tags || !Array.isArray(products) || limit <= 0) {
    return []
  }

  const exactMatches = products.filter(
    (candidate) => candidate._key !== product._key && hasAllSameTags(product, candidate),
  )
  const overlappingMatches = products.filter(
    (candidate) =>
      candidate._key !== product._key &&
      candidate.tags &&
      candidate.tags.some((tag) => product.tags.includes(tag)),
  )

  return [...exactMatches, ...overlappingMatches]
    .filter(
      (candidate, index, candidates) =>
        index === candidates.findIndex((item) => item._key === candidate._key),
    )
    .slice(0, limit)
}

export function toStoreCardProduct(product) {
  return {
    _key: product._key,
    title: product.title,
    media: (product.media ?? [])
      .filter((media) => media.type === "image")
      .map((media) => ({ type: media.type, sm: media.sm, lg: media.lg })),
    badge: product.badge
      ? {
          class: product.badge.class,
          icon: product.badge.icon,
          text: product.badge.text,
        }
      : undefined,
    originalprice: product.originalprice,
    displayprice: product.displayprice,
    from_price: product.from_price,
    to_price: product.to_price,
    price: product.price,
    displaypricenote: product.displaypricenote,
  }
}
