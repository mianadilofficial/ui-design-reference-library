import { describe, expect, test } from "bun:test"
import {
  getCatalogIds,
  getRelatedProducts,
  loadOrderedCatalog,
  toStoreCardProduct,
} from "./catalog.js"

describe("catalog contracts", () => {
  test("validates and normalizes ordered ids", () => {
    expect(getCatalogIds({ productOrder: ["first", 2] }, { label: "fixture" })).toEqual([
      "first",
      "2",
    ])
    expect(() => getCatalogIds({}, { label: "fixture" })).toThrow("non-empty productOrder")
  })

  test("loads every ordered item and attaches its canonical key", async () => {
    const items = await loadOrderedCatalog(
      { productOrder: ["second", "first"] },
      async (id) => ({ title: id.toUpperCase() }),
      { label: "fixture" },
    )

    expect(items).toEqual([
      { title: "SECOND", _key: "second" },
      { title: "FIRST", _key: "first" },
    ])
  })

  test("fails instead of silently emitting an incomplete catalog", async () => {
    await expect(
      loadOrderedCatalog(
        { productOrder: ["present", "missing"] },
        async (id) => (id === "present" ? { title: id } : null),
        { label: "fixture" },
      ),
    ).rejects.toThrow("Missing fixture item: missing")
  })
})

describe("related product compatibility", () => {
  const current = { _key: "current", tags: ["dashboard", "react"] }
  const products = [
    current,
    { _key: "exact", tags: ["react", "dashboard"] },
    { _key: "overlap", tags: ["react"] },
    { _key: "other", tags: ["vue"] },
  ]

  test("preserves exact-match-first ordering and removes duplicates", () => {
    expect(getRelatedProducts(current, products).map((product) => product._key)).toEqual([
      "exact",
      "overlap",
    ])
  })

  test("returns no suggestions when the current product has no tags", () => {
    expect(getRelatedProducts({ _key: "current" }, products)).toEqual([])
  })

  test("projects exactly the fields consumed by StoreProduct", () => {
    expect(
      toStoreCardProduct({
        _key: "related",
        title: "Related product",
        media: [
          { type: "image", sm: "small.webp", lg: "large.webp", width: 1200 },
          { type: "video", url: "demo.mp4" },
        ],
        badge: { class: "badge-success", icon: "check", text: "New", internal: true },
        originalprice: 99,
        displayprice: 79,
        from_price: 70,
        to_price: 90,
        price: 79,
        displaypricenote: "one-time",
        sections: [{ title: "must not leak" }],
        desc: "must not leak",
      }),
    ).toEqual({
      _key: "related",
      title: "Related product",
      media: [{ type: "image", sm: "small.webp", lg: "large.webp" }],
      badge: { class: "badge-success", icon: "check", text: "New" },
      originalprice: 99,
      displayprice: 79,
      from_price: 70,
      to_price: 90,
      price: 79,
      displaypricenote: "one-time",
    })
  })
})
