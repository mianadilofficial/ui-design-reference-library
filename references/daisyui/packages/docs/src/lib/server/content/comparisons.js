import { PUBLIC_DAISYUI_API_PATH } from "$env/static/public"
import {
  getAlternativeLibraryKeys,
  getAlternativeRouteEntries as projectAlternativeRouteEntries,
  getCanonicalCompareSlugs,
  getCompareRouteEntries as projectCompareRouteEntries,
  projectCompareRouteData,
  validateCompareManifest,
} from "./comparisonData.js"
import { createBuildMemo, fetchYaml } from "./fetchYaml.js"

export const getCompareManifest = createBuildMemo(async () => {
  const manifest = await fetchYaml(`${PUBLIC_DAISYUI_API_PATH}/data/compare.yaml`, {
    label: "comparison manifest",
  })

  return validateCompareManifest(manifest)
})

export async function getComparePageData(item) {
  return projectCompareRouteData(await getCompareManifest(), item)
}

export async function getCompareRouteEntries() {
  return projectCompareRouteEntries(await getCompareManifest())
}

export async function getAlternativeRouteEntries() {
  return projectAlternativeRouteEntries(await getCompareManifest())
}

export async function getComparisonSitemapData() {
  const manifest = await getCompareManifest()

  return {
    comparePages: getCanonicalCompareSlugs(manifest),
    alternativeLibraries: getAlternativeLibraryKeys(manifest),
  }
}
