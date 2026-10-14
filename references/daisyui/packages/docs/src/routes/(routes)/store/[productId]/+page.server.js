import { compile } from "mdsvex"
import { error } from "@sveltejs/kit"
import { getStoreProductData } from "$lib/server/content/store.js"

export async function load({ params }) {
  const data = await getStoreProductData(params.productId)
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
      banner: data.product.banner && (await md(data.product.banner)),
    },
    relatedProducts: data.relatedProducts,
    tech: data.tech,
    faq: data.faq,
  }
}
