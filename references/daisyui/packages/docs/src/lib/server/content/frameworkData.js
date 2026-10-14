const INSTALL_ROOT_PATH = "/docs/install/"
const MARKETING_ROUTE_PATTERN = /^\/([^/]+)-(?:component-library|tailwind-css|ui-library)\/$/
const MARKETING_INSTALL_SLUG_ALIASES = {
  svelte: "sveltekit",
}

export function toInstallFrameworkDto(framework) {
  return {
    name: framework.name,
    logo: framework.logo,
    desc: framework.desc,
    site: framework.site,
    github: framework.github,
  }
}

export function toMarketingFrameworkDto(framework) {
  return {
    name: framework.name,
    logo: framework.logo,
  }
}

export function projectInstallRouteData(frameworks, pathname) {
  if (pathname === INSTALL_ROOT_PATH) {
    return { frameworks }
  }

  const framework = frameworks.find((item) => item.path === pathname)

  return {
    framework: framework ? toInstallFrameworkDto(framework) : null,
  }
}

export function findMarketingFramework(frameworks, pathname) {
  const match = pathname.match(MARKETING_ROUTE_PATTERN)
  if (!match) {
    return null
  }

  const routeSlug = match[1]
  const installSlug = MARKETING_INSTALL_SLUG_ALIASES[routeSlug] ?? routeSlug
  const installPath = `${INSTALL_ROOT_PATH}${installSlug}/`

  return frameworks.find((item) => item.path === installPath) ?? null
}

export function projectMarketingFrameworkRouteData(frameworks, testimonials, pathname) {
  const framework = findMarketingFramework(frameworks, pathname)
  if (!framework) {
    throw new Error(`No framework found for marketing route: ${pathname}`)
  }

  return {
    testimonials,
    frameworksData: [toMarketingFrameworkDto(framework)],
  }
}
