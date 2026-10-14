import { PUBLIC_DAISYUI_API_PATH } from "$env/static/public"
import { getCatalogIds, loadOrderedCatalog } from "./catalog.js"
import { ContentFetchError, createBuildMemo, createBuildMemoByKey, fetchYaml } from "./fetchYaml.js"

const getSkillsManifest = createBuildMemo(() =>
  fetchYaml(`${PUBLIC_DAISYUI_API_PATH}/data/skills.yaml`, { label: "skills manifest" }),
)

const loadSkillProduct = createBuildMemoByKey((id) =>
  fetchYaml(`${PUBLIC_DAISYUI_API_PATH}/data/skills/${encodeURIComponent(id)}.yaml`, {
    label: `skill product ${id}`,
  }),
)

const getSkillProducts = createBuildMemo(async () => {
  const manifest = await getSkillsManifest()
  return loadOrderedCatalog(manifest, getSkillProduct, { label: "skills" })
})

export async function getSkillProduct(id) {
  try {
    return await loadSkillProduct(String(id))
  } catch (error) {
    if (error instanceof ContentFetchError && error.status === 404) {
      return null
    }
    throw error
  }
}

export async function getSkillProductIds() {
  return getCatalogIds(await getSkillsManifest(), { label: "skills" })
}

export async function getSkillsListData() {
  return {
    products: await getSkillProducts(),
  }
}

export async function getSkillProductData(id) {
  const [manifest, product] = await Promise.all([getSkillsManifest(), getSkillProduct(id)])

  if (!product) {
    return null
  }

  return {
    product: { ...product, _key: String(id) },
    faq: manifest.faq,
  }
}

export { getSkillProducts, getSkillsManifest }
