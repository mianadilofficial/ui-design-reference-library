import { getSkillsListData } from "$lib/server/content/skills.js"

export async function load() {
  return getSkillsListData()
}
