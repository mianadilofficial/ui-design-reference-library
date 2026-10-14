import { describe, expect, test } from "bun:test"
import {
  SEARCH_CSV_FIELDS,
  parseSearchCsv,
  serializeSearchCsv,
  serializeSearchCsvRow,
} from "./searchCsv.js"

describe("search CSV serialization", () => {
  test("writes the schema header first and preserves result order", () => {
    const rows = [
      { title: "Components", url: "/components/", classnames: "" },
      { title: "Button", url: "/components/button/", classnames: "btn" },
    ]

    const csv = serializeSearchCsv(rows)

    expect(csv.split("\n")[0]).toBe(SEARCH_CSV_FIELDS.join(","))
    expect(parseSearchCsv(csv)).toEqual(rows)
  })

  test("quotes commas, embedded newlines, and double quotes", () => {
    const row = {
      title: 'Button, "primary"\nvariant',
      url: '/components/button/?label="primary,large"',
      classnames: 'btn "btn-primary"\nactive',
    }

    const csv = serializeSearchCsv([row])

    expect(serializeSearchCsvRow(row)).toBe(
      '"Button, ""primary""\nvariant","/components/button/?label=""primary,large""","btn ""btn-primary""\nactive"',
    )
    expect(parseSearchCsv(csv)).toEqual([row])
  })
})

describe("search CSV parsing", () => {
  test("never returns the schema header as a search result", () => {
    const results = parseSearchCsv(
      [
        "title,url,classnames",
        "Store,/store/",
        '"Theme, generator",/theme-generator/,theme-controller',
      ].join("\r\n"),
    )

    expect(results).toEqual([
      { title: "Store", url: "/store/", classnames: "" },
      {
        title: "Theme, generator",
        url: "/theme-generator/",
        classnames: "theme-controller",
      },
    ])
    expect(results).not.toContainEqual({
      title: "title",
      url: "url",
      classnames: "classnames",
    })
  })

  test("supports the existing headerless initial-results CSV", () => {
    expect(
      parseSearchCsv("Components,/components/\nButton,/components/button/", { hasHeader: false }),
    ).toEqual([
      { title: "Components", url: "/components/", classnames: "" },
      { title: "Button", url: "/components/button/", classnames: "" },
    ])
  })

  test("supports a rolling deployment with the legacy misplaced header", () => {
    expect(
      parseSearchCsv(
        "Components,/components/\ntitle,url,classnames\nButton,/components/button/,btn",
        {
          hasHeader: "auto",
        },
      ),
    ).toEqual([
      { title: "Components", url: "/components/", classnames: "" },
      { title: "Button", url: "/components/button/", classnames: "btn" },
    ])
  })

  test("rejects malformed headers and unterminated quoted values", () => {
    expect(() => parseSearchCsv("Components,/components/")).toThrow("Invalid search CSV header")
    expect(() => parseSearchCsv('title,url,classnames\n"Button,/components/button/,btn')).toThrow(
      "unterminated quoted value",
    )
  })
})
