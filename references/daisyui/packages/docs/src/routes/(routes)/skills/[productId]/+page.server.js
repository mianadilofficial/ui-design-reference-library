import { compile } from "mdsvex"
import { error } from "@sveltejs/kit"
import { getSkillProductData } from "$lib/server/content/skills.js"

export async function load({ params }) {
  const data = await getSkillProductData(params.productId)
  if (!data) {
    throw error(404, "Product not found")
  }

  async function md(markdown) {
    const compiledMd = await compile(markdown, {
      smartypants: false,
    })
    return compiledMd.code
  }

  return {
    product: {
      ...data.product,
      desc: data.product.desc && (await md(data.product.desc)),
    },
    faq: data.faq,
  }
}
