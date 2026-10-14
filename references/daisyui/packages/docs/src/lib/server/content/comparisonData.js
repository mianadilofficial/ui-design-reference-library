function isRecord(value) {
  return value !== null && typeof value === "object" && !Array.isArray(value)
}

export function validateCompareManifest(manifest) {
  if (!isRecord(manifest)) {
    throw new TypeError("Comparison manifest must be an object")
  }

  if (!isRecord(manifest.data)) {
    throw new TypeError("Comparison manifest must contain a data object")
  }

  if (!isRecord(manifest.attributeRules)) {
    throw new TypeError("Comparison manifest must contain an attributeRules object")
  }

  const libraryKeys = Object.keys(manifest.data)
  if (libraryKeys.length < 2) {
    throw new TypeError("Comparison manifest must contain at least two libraries")
  }

  if (!Object.hasOwn(manifest.data, "daisyui")) {
    throw new TypeError("Comparison manifest must contain daisyui data")
  }

  for (const key of libraryKeys) {
    const library = manifest.data[key]

    if (!isRecord(library)) {
      throw new TypeError(`Comparison library '${key}' must be an object`)
    }

    if (typeof library.name !== "string" || typeof library.logo !== "string") {
      throw new TypeError(`Comparison library '${key}' must contain a name and logo`)
    }

    if (!isRecord(library.attributes)) {
      throw new TypeError(`Comparison library '${key}' must contain an attributes object`)
    }
  }

  return manifest
}

export function getComparisonLibraryKeys(manifest) {
  return Object.keys(validateCompareManifest(manifest).data)
}

export function projectCompareRouteData(manifest, item) {
  const validatedManifest = validateCompareManifest(manifest)
  const parts = typeof item === "string" ? item.split("-vs-") : []

  if (parts.length !== 2) {
    return null
  }

  const [firstKey, secondKey] = parts
  if (
    firstKey === secondKey ||
    !Object.hasOwn(validatedManifest.data, firstKey) ||
    !Object.hasOwn(validatedManifest.data, secondKey)
  ) {
    return null
  }

  const first = validatedManifest.data[firstKey]
  const second = validatedManifest.data[secondKey]
  const libraries = Object.entries(validatedManifest.data).map(([key, library]) => ({
    key,
    name: library.name,
    ...(key === "daisyui" ? { logo: library.logo } : {}),
  }))

  return {
    first: { ...first, key: firstKey },
    second: { ...second, key: secondKey },
    attributeRules: validatedManifest.attributeRules,
    libraries,
  }
}

export function getCompareRouteEntries(manifest) {
  const libraryKeys = getComparisonLibraryKeys(manifest)

  return libraryKeys.flatMap((firstKey) =>
    libraryKeys
      .filter((secondKey) => firstKey !== secondKey)
      .map((secondKey) => ({ item: `${firstKey}-vs-${secondKey}` })),
  )
}

export function getCanonicalCompareSlugs(manifest) {
  const libraryKeys = getComparisonLibraryKeys(manifest)
  const slugs = libraryKeys.flatMap((firstKey) =>
    libraryKeys
      .filter((secondKey) => firstKey !== secondKey)
      .map((secondKey) => {
        const [smaller, larger] = [firstKey, secondKey].sort()
        return `${smaller}-vs-${larger}`
      }),
  )

  return Array.from(new Set(slugs))
}

export function getAlternativeRouteEntries(manifest) {
  return getComparisonLibraryKeys(manifest)
    .filter((key) => key !== "daisyui")
    .map((library) => ({ library }))
}

export function getAlternativeLibraryKeys(manifest) {
  return getAlternativeRouteEntries(manifest).map(({ library }) => library)
}
