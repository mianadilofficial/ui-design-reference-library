import { getInstallRouteData } from "$lib/server/content/frameworks.js"

export async function load({ url }) {
  return getInstallRouteData(url.pathname)
}
