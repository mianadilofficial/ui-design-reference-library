import { error } from "@sveltejs/kit"
import { getComparePageData, getCompareRouteEntries } from "$lib/server/content/comparisons.js"

export async function entries() {
  return getCompareRouteEntries()
}

export async function load({ params }) {
  const data = await getComparePageData(params.item)

  if (!data) {
    throw error(404, "Not found")
  }

  return data
}
