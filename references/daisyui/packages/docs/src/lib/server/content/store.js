import { PUBLIC_DAISYUI_API_PATH } from "$env/static/public"
import {
  getCatalogIds,
  getRelatedProducts,
  loadOrderedCatalog,
  toStoreCardProduct,
} from "./catalog.js"
import { ContentFetchError, createBuildMemo, createBuildMemoByKey, fetchYaml } from "./fetchYaml.js"

const getStoreManifest = createBuildMemo(() =>
  fetchYaml(`${PUBLIC_DAISYUI_API_PATH}/data/store.yaml`, { label: "store manifest" }),
)

const loadStoreProduct = createBuildMemoByKey((id) =>
  fetchYaml(`${PUBLIC_DAISYUI_API_PATH}/data/store/${encodeURIComponent(id)}.yaml`, {
    label: `store product ${id}`,
  }),
)

const getStoreProducts = createBuildMemo(async () => {
  const manifest = await getStoreManifest()
  return loadOrderedCatalog(manifest, getStoreProduct, { label: "store" })
})

export async function getStoreProduct(id) {
  try {
    return await loadStoreProduct(String(id))
  } catch (error) {
    if (error instanceof ContentFetchError && error.status === 404) {
      return null
    }
    throw error
  }
}

export async function getStoreProductIds() {
  return getCatalogIds(await getStoreManifest(), { label: "store" })
}

export async function getStoreListData() {
  const [manifest, products] = await Promise.all([getStoreManifest(), getStoreProducts()])

  return {
    tech: manifest.tech ?? {},
    techFilters: manifest.techFilters ?? [],
    products,
    futureProducts: manifest.futureProducts ?? [],
  }
}

export async function getStoreProductData(id) {
  const [manifest, product, products] = await Promise.all([
    getStoreManifest(),
    getStoreProduct(id),
    getStoreProducts(),
  ])

  if (!product) {
    return null
  }

  const normalizedProduct = { ...product, _key: String(id) }

  return {
    product: normalizedProduct,
    relatedProducts: getRelatedProducts(normalizedProduct, products).map(toStoreCardProduct),
    tech: manifest.tech ?? {},
    faq: manifest.faq ?? [],
  }
}

export { getStoreManifest, getStoreProducts }
