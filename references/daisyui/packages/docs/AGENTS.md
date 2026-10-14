# Instructions for developing daisyUI docs

- This is the source code of daisyUI docs website. The website is built with SvelteKit 2 and Svelte 5
- We only use Svelte 5 syntax and features (not Svelte 4)
- For interactivity we use Svelte Runes
- Use Context7 MCP server if you have questions about SvelteKit or Svelte syntax
- When writing markup, use daisyUI components and classes as described in the daisyUI docs.

## Translation

### File structure

- Translation files are JSON files in `packages/docs/src/translation/`.
- Files are split by language and route chunk using this pattern:
  - `<language>.<chunk>.json`
  - Example: `en.common.json`, `en.docs.json`, `fa.components.json`, `zh_hans.home.json`
- The first part is the language code. For example: `en`, `de`, `es`, `zh_hant`, etc.
- The second part is the translation chunk. Current chunks are:
  - `common`: shared strings used across routes, layouts, nav, footer, and common UI
  - `home`: homepage strings for `/`
  - `docs`: docs pages under `/docs` and `packages/docs/src/routes/(routes)/docs/`
  - `components`: component pages under `/components` and `packages/docs/src/routes/(routes)/components/`
  - `other`: pages that do not belong to home, docs, or components
- Route chunks are selected in `packages/docs/src/lib/i18n.svelte.js`. The site loads `common` plus the current route chunk.
- `packages/docs/src/lib/scripts/addTranslations.js` uses the source file path to choose the English translation file when extracting new strings.

### Keeping translation files in sync

- Respect the existing chunked file structure. Do not create a new translation file shape unless the i18n loader is intentionally changed too.
- Every language must keep the same set of keys for the same chunk. If you add, remove, or rename a key in one `<language>.<chunk>.json` file, make the same key change in all other language files for that chunk.
- To edit an existing string, find the key in the matching English file first, then update that same key in every language file with the same chunk suffix.
- To add a new translatable string from a source file, put the key in the English file selected by the page path, then add the same key to every language file in that chunk.
- Pick the translation file by path:
  - `packages/docs/src/routes/(routes)/+page.svelte` or `+page.md` -> `*.home.json`
  - `packages/docs/src/routes/(routes)/docs/...` -> `*.docs.json`
  - `packages/docs/src/routes/(routes)/components/...` -> `*.components.json`
  - shared layout, nav, footer, reusable UI strings -> `*.common.json`
  - any other route or page -> `*.other.json`
- If a string is reused across multiple route chunks, prefer `common` only when it is genuinely shared UI or navigation text. Otherwise keep it in the route chunk where it appears.
- Keep JSON valid and preserve the same key text exactly across languages. The values change per language; the keys do not.
- Keep placeholders and markup intact in translated values, including `{{variable}}`, backticked code terms, HTML tags, links, entities, punctuation needed by code examples, and class names.
- Do not leave a key only in English unless the change is intentionally incomplete and clearly called out. Missing keys fall back to English at runtime, but translation files should still be synchronized.

### Translation rules

- "daisyUI" must be written exactly as "daisyUI", with the first letter lowercase "d", and the "UI" part uppercase.
- Do not translate if there's a comment saying don't translate a specific section
- Keep package names and code identifiers exactly as written. For example, the npm package name `daisyui` stays lowercase because it is a package name.
- Do not translate technical terms of programming, development, web design, or design systems.
- Do not translate text inside fenced code blocks, inline backticks, `<code>...</code>`, command names, package names, file names, file paths, URLs, CSS variables, selectors, attributes, values, Svelte expressions, or keyboard shortcuts.
- Do not translate daisyUI component names or class names.
- Do not translate brand names, trademarks, product names, library names, framework names, or tool names.
- Do not translate daisyUI color names.
- Preserve Markdown and HTML structure exactly in translated values. Keep the same tags, attributes, entities, link URLs, link targets, and link relationship attributes; translate only the visible prose when it is not a protected name or code token.
- Do not introduce, remove, reorder, or rewrite markup. If the source represents something like `<li>` as code or escaped text, keep it as code or escaped text instead of turning it into a real HTML tag.
- Preserve interpolation and placeholder syntax exactly, including `{{variable}}` placeholders and Svelte-style expressions such as `{data.themes.length}`.
- For language metadata in `*.common.json`, keep `__code` as the short uppercase language code and `__direction` as either `ltr` or `rtl`; translate `__name` only to the language's native display name.
- Do not translate the content from these paths:
  - packages/docs/src/routes/(routes)/docs/upgrade
  - packages/docs/src/routes/(routes)/docs/v5
  - packages/docs/src/routes/(routes)/(marketing)
  - packages/docs/src/routes/(routes)/blog
  - packages/docs/src/routes/(routes)/store
  - packages/docs/src/lib/scripts
  - CHANGELOG.md
