import { getStoreListData } from "$lib/server/content/store.js"

export async function load() {
  return getStoreListData()
}
