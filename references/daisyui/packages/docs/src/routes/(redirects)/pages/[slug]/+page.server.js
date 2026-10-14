export const ssr = false

import { error, redirect } from "@sveltejs/kit"
import { marketingLegacyRedirects } from "$lib/data/marketingPages.js"

export function entries() {
  return Object.keys(marketingLegacyRedirects).map((slug) => ({ slug }))
}

export function load({ params }) {
  const destination = marketingLegacyRedirects[params.slug]

  if (!destination) error(404, "Not found")

  redirect(301, destination)
}
