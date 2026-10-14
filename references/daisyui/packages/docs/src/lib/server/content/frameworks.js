import { PUBLIC_DAISYUI_API_PATH } from "$env/static/public"
import { createBuildMemo, fetchYaml } from "./fetchYaml.js"
import { projectInstallRouteData, projectMarketingFrameworkRouteData } from "./frameworkData.js"

const TESTIMONIALS_URL = "https://img.daisyui.com/generated/testimonials.json"

const getFrameworks = createBuildMemo(async () => {
  const frameworks = await fetchYaml(`${PUBLIC_DAISYUI_API_PATH}/data/frameworks.yaml`, {
    label: "frameworks",
  })

  if (!Array.isArray(frameworks)) {
    throw new TypeError("Frameworks data must be an array")
  }

  return frameworks
})

const getTestimonials = createBuildMemo(async () => {
  const response = await fetch(TESTIMONIALS_URL, {
    signal: AbortSignal.timeout(15_000),
  })

  if (!response.ok) {
    throw new Error(`Failed to fetch testimonials: HTTP ${response.status}`)
  }

  const testimonials = await response.json()
  if (!testimonials || !Array.isArray(testimonials.testimonials)) {
    throw new TypeError("Testimonials data must contain a testimonials array")
  }

  return testimonials
})

export async function getInstallRouteData(pathname) {
  return projectInstallRouteData(await getFrameworks(), pathname)
}

export async function getMarketingFrameworkRouteData(pathname) {
  const [frameworks, testimonials] = await Promise.all([getFrameworks(), getTestimonials()])
  return projectMarketingFrameworkRouteData(frameworks, testimonials, pathname)
}

export { getFrameworks, getTestimonials }
