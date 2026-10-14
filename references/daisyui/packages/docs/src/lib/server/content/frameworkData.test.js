import { describe, expect, test } from "bun:test"
import {
  findMarketingFramework,
  projectInstallRouteData,
  projectMarketingFrameworkRouteData,
} from "./frameworkData.js"

const frameworks = [
  {
    name: "React",
    path: "/docs/install/react/",
    logo: "<svg>react</svg>",
    desc: "React description",
    site: "https://react.dev",
    github: "https://github.com/facebook/react",
    unused: "not part of a child DTO",
  },
  {
    name: "SvelteKit",
    path: "/docs/install/sveltekit/",
    logo: "<svg>svelte</svg>",
    desc: "SvelteKit description",
    site: "https://svelte.dev",
    github: "https://github.com/sveltejs/kit",
  },
  {
    name: "Vue",
    path: "/docs/install/vue/",
    logo: "<svg>vue</svg>",
    desc: "Vue description",
    site: "https://vuejs.org",
    github: "https://github.com/vuejs/core",
  },
]

describe("install route data", () => {
  test("keeps the complete ordered collection on the install index", () => {
    const data = projectInstallRouteData(frameworks, "/docs/install/")

    expect(data).toEqual({ frameworks })
    expect(data.frameworks).toBe(frameworks)
  })

  test("projects exactly one matching child framework", () => {
    expect(projectInstallRouteData(frameworks, "/docs/install/react/")).toEqual({
      framework: {
        name: "React",
        logo: "<svg>react</svg>",
        desc: "React description",
        site: "https://react.dev",
        github: "https://github.com/facebook/react",
      },
    })
  })

  test("uses exact path matching and returns no banner data for an unknown child", () => {
    expect(projectInstallRouteData(frameworks, "/docs/install/react/extra/")).toEqual({
      framework: null,
    })
  })
})

describe("marketing framework route data", () => {
  test("matches every marketing route family to the install path", () => {
    expect(findMarketingFramework(frameworks, "/react-component-library/")?.name).toBe("React")
    expect(findMarketingFramework(frameworks, "/react-tailwind-css/")?.name).toBe("React")
    expect(findMarketingFramework(frameworks, "/react-ui-library/")?.name).toBe("React")
  })

  test("preserves the svelte route alias for the SvelteKit framework", () => {
    expect(findMarketingFramework(frameworks, "/svelte-component-library/")?.name).toBe("SvelteKit")
  })

  test("returns one compact framework while preserving the complete testimonial object", () => {
    const testimonials = {
      generated_at: "fixture-version",
      sprite: { imagesPerRow: 2, rows: 2, avatarSize: 72 },
      testimonials: [
        { id: "one", name: "One" },
        { id: "two", name: "Two" },
        { id: "three", name: "Three" },
      ],
    }

    const data = projectMarketingFrameworkRouteData(frameworks, testimonials, "/vue-tailwind-css/")

    expect(data).toEqual({
      testimonials,
      frameworksData: [{ name: "Vue", logo: "<svg>vue</svg>" }],
    })
    expect(data.testimonials).toBe(testimonials)
    expect(data.testimonials.testimonials).toHaveLength(3)
  })

  test("fails instead of publishing a route without its expected framework", () => {
    expect(() =>
      projectMarketingFrameworkRouteData(frameworks, { testimonials: [] }, "/unknown-ui-library/"),
    ).toThrow("No framework found")
  })
})
