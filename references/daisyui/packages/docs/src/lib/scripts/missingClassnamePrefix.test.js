import { expect, test } from "bun:test"
import { existsSync, readdirSync, readFileSync } from "node:fs"
import { dirname, join, resolve } from "node:path"
import { fileURLToPath } from "node:url"

const scriptDir = dirname(fileURLToPath(import.meta.url))
const docsRoot = resolve(scriptDir, "../../..")
const repoRoot = resolve(docsRoot, "../..")

// Helper function to recursively get all files matching a pattern
function getFiles(dir, pattern) {
  let results = []
  if (!existsSync(dir)) {
    console.error(`Directory not found: ${dir}`)
    return results
  }
  const list = readdirSync(dir, { withFileTypes: true })
  list.forEach((file) => {
    if (file.isDirectory()) {
      results = results.concat(getFiles(join(dir, file.name), pattern))
    } else if (pattern.test(file.name)) {
      results.push(join(dir, file.name))
    }
  })
  return results
}

// Step 1: Find all class.json files and extract class names
const classJsonFiles = getFiles(join(repoRoot, "packages/daisyui/components"), /class\.json$/)

let classList = []

classJsonFiles.forEach((file) => {
  const content = JSON.parse(readFileSync(file, "utf-8"))
  classList = classList.concat(content)
})

// Step 2: Find all .md files and extract HTML/JSX code blocks
const mdFiles = getFiles(join(docsRoot, "src/routes/(routes)/components"), /\+page\.md$/)

let codeBlocks = []

mdFiles.forEach((file) => {
  const content = readFileSync(file, "utf-8")
  const htmlCodeBlocks = content.match(/```html([\s\S]*?)```/g) || []
  const jsxCodeBlocks = content.match(/```jsx([\s\S]*?)```/g) || []
  htmlCodeBlocks.forEach((block) => codeBlocks.push({ file, block }))
  jsxCodeBlocks.forEach((block) => codeBlocks.push({ file, block }))
})

// Step 3: Check if class names in classList are prefixed with $$ in class or className attributes
test("Finds generated class metadata and component documentation", () => {
  expect(classJsonFiles.length).toBeGreaterThan(0)
  expect(classList.length).toBeGreaterThan(0)
  expect(mdFiles.length).toBeGreaterThan(0)
  expect(codeBlocks.length).toBeGreaterThan(0)
})

test("Class names should be prefixed with $$ in code blocks", () => {
  codeBlocks.forEach(({ file, block }) => {
    classList.forEach((className) => {
      const escapedClassName = className.replace(/[.*+?^${}()|[\]\\]/g, "\\$&")
      const regex = new RegExp(`class(Name)?="([^"]*\\b${escapedClassName}\\b[^"]*)"`, "g")
      const matches = block.match(regex) || []
      matches.forEach((match) => {
        const classAttr = match.split("=")[1].replace(/"/g, "")
        const classNames = classAttr.split(/\s+/)
        classNames.forEach((cls) => {
          if (cls === className) {
            console.error(`File: ${file}`)
            console.error(`Block: ${block}`)
            console.error(`Match: ${match}`)
            throw new Error(`Class name "${className}" is not prefixed with "$$" in file: ${file}`)
          }
        })
      })
    })
  })
})
