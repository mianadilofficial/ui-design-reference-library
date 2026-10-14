import { getMarketingFrameworkRouteData } from "$lib/server/content/frameworks.js"

export async function load({ url }) {
  return getMarketingFrameworkRouteData(url.pathname)
}
