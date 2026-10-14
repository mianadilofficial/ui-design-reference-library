import { describe, expect, test } from "bun:test"
import {
  getAlternativeLibraryKeys,
  getAlternativeRouteEntries,
  getCanonicalCompareSlugs,
  getCompareRouteEntries,
  projectCompareRouteData,
  validateCompareManifest,
} from "./comparisonData.js"

const manifest = {
  attributeRules: {
    components: "higher",
  },
  data: {
    bootstrap: {
      name: "Bootstrap",
      logo: "<svg>bootstrap</svg>",
      intro: "Bootstrap intro",
      attributes: { components: { value: 80, desc: "Components" } },
    },
    daisyui: {
      name: "daisyUI",
      logo: "<svg>daisyui</svg>",
      intro: "daisyUI intro",
      attributes: { components: { value: 65, desc: "Components" } },
    },
    material: {
      name: "Material UI",
      logo: "<svg>material</svg>",
      intro: "Material intro",
      attributes: { components: { value: 70, desc: "Components" } },
    },
  },
}

describe("comparison route projection", () => {
  test("preserves complete selected records and projects the ordered library collection", () => {
    const data = projectCompareRouteData(manifest, "material-vs-bootstrap")

    expect(data).toEqual({
      first: { ...manifest.data.material, key: "material" },
      second: { ...manifest.data.bootstrap, key: "bootstrap" },
      attributeRules: manifest.attributeRules,
      libraries: [
        { key: "bootstrap", name: "Bootstrap" },
        { key: "daisyui", name: "daisyUI", logo: "<svg>daisyui</svg>" },
        { key: "material", name: "Material UI" },
      ],
    })
    expect(data.first.intro).toBe("Material intro")
    expect(data.second.intro).toBe("Bootstrap intro")
  })

  test("rejects malformed, identical, inherited, and unknown route keys before projection", () => {
    expect(projectCompareRouteData(manifest, "bootstrap")).toBeNull()
    expect(projectCompareRouteData(manifest, "bootstrap-vs-bootstrap")).toBeNull()
    expect(projectCompareRouteData(manifest, "bootstrap-vs-material-vs-daisyui")).toBeNull()
    expect(projectCompareRouteData(manifest, "toString-vs-bootstrap")).toBeNull()
    expect(projectCompareRouteData(manifest, "unknown-vs-bootstrap")).toBeNull()
  })

  test("fails an invalid manifest instead of disguising it as a missing route", () => {
    expect(() =>
      projectCompareRouteData({ data: {}, attributeRules: {} }, "unknown-vs-bootstrap"),
    ).toThrow("at least two libraries")
  })
})

describe("comparison entries", () => {
  test("keeps every ordered route permutation", () => {
    expect(getCompareRouteEntries(manifest)).toEqual([
      { item: "bootstrap-vs-daisyui" },
      { item: "bootstrap-vs-material" },
      { item: "daisyui-vs-bootstrap" },
      { item: "daisyui-vs-material" },
      { item: "material-vs-bootstrap" },
      { item: "material-vs-daisyui" },
    ])
  })

  test("preserves the existing canonical sitemap order", () => {
    expect(getCanonicalCompareSlugs(manifest)).toEqual([
      "bootstrap-vs-daisyui",
      "bootstrap-vs-material",
      "daisyui-vs-material",
    ])
  })

  test("keeps alternative entries and sitemap keys in manifest order", () => {
    expect(getAlternativeRouteEntries(manifest)).toEqual([
      { library: "bootstrap" },
      { library: "material" },
    ])
    expect(getAlternativeLibraryKeys(manifest)).toEqual(["bootstrap", "material"])
  })
})

describe("comparison manifest validation", () => {
  test("returns a valid manifest without cloning it", () => {
    expect(validateCompareManifest(manifest)).toBe(manifest)
  })

  test("fails manifests that could silently truncate routes or payloads", () => {
    expect(() => validateCompareManifest(null)).toThrow("must be an object")
    expect(() => validateCompareManifest({ data: manifest.data })).toThrow("attributeRules")
    expect(() => validateCompareManifest({ data: {}, attributeRules: {} })).toThrow(
      "at least two libraries",
    )
    expect(() =>
      validateCompareManifest({
        data: {
          one: { name: "One", logo: "one", attributes: {} },
          two: { name: "Two", logo: "two", attributes: {} },
        },
        attributeRules: {},
      }),
    ).toThrow("must contain daisyui")
    expect(() =>
      validateCompareManifest({
        data: {
          daisyui: { name: "daisyUI", logo: "daisy", attributes: {} },
          broken: { name: "Broken", logo: "broken" },
        },
        attributeRules: {},
      }),
    ).toThrow("must contain an attributes object")
  })
})
