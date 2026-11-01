---
version: alpha
name: Emotion
category: "CSS-in-JS"
description: "Emotion's docs site (emotion.sh) is a Bootstrap-style white page with #212529 text in a system-ui stack, a pink brand (#d26ac2 wordmark, #c43bad links), #282936 dark code blocks in SFMono and hotpink #ff69b4 live-preview panels."

colors:
  canvas: "#ffffff"
  ink: "#212529"
  ink-muted: "#adb5bd"
  ink-search: "#969faf"
  primary: "#d26ac2"
  link: "#c43bad"
  hotpink: "#ff69b4"
  rule-pink: "#eac3e4"
  surface-nav: "#f8f9fa"
  surface-code: "#282936"
  code-ink: "#cccccc"
  syntax-pink: "#ff79c6"
  syntax-orange: "#ffb86c"
  syntax-yellow: "#f1fa8c"
  hairline: "#d2d2d2"
  ink-hover: "#1c1e21"
  code-inline-bg: "#753f8312"
  banner: "#000000"

typography:
  display:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  display-mobile:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 27.85px
    fontWeight: 700
    lineHeight: 33.42px
  logo:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 33.6px
  heading:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
  nav:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  code:
    fontFamily: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px

rounded:
  xs: 3px
  sm: 4px
  md: 7px
  lg: 8px
  xl: 40px

spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 14px
  s6: 24px
  s7: 32px

components:
  search-button:
    backgroundColor: "{colors.surface-nav}"
    textColor: "{colors.ink-search}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 0px 8px
    height: 36px
    borderColor: "{colors.hairline}"
  search-button-hover:
    textColor: "{colors.ink-hover}"
  header:
    backgroundColor: "{colors.surface-nav}"
    textColor: "{colors.ink}"
    padding: 4px 0px 0px
    height: 53px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.075) 0px 2px 4px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  code-block:
    backgroundColor: "{colors.surface-code}"
    textColor: "{colors.code-ink}"
    typography: "{typography.code}"
    rounded: "{rounded.md}"
    padding: 14px
  code-inline:
    backgroundColor: "{colors.code-inline-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.code}"
    rounded: "{rounded.sm}"
    padding: 4px
  live-preview:
    backgroundColor: "{colors.hotpink}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 32px
---

## Overview

Emotion is a CSS-in-JS library; its documentation site at emotion.sh is the only visual surface that represents it, so this file describes that docs site. It is a classic documentation layout: a thin fixed top bar with the pink "Emotion" wordmark and mascot, a wide reading column on a white page (`{colors.canvas}`), and a persistent right-hand sidebar listing every docs section. Hierarchy is plain — bold system-ui headings, regular 16px body text at a generous 27.2px line height, and pink links.

The color story is a single pink family applied to text. The wordmark and the active top-nav link are `{colors.primary}` (`#d26ac2`); body links and the active sidebar entry are a darker pink, `{colors.link}` (`#c43bad`), for readability; a pale pink rule (`{colors.rule-pink}` `#eac3e4`) separates the intro from the body. Code is the visual counterweight: dark `{colors.surface-code}` (`#282936`) blocks with a Dracula-like syntax palette (pink, orange, yellow, green) next to live previews that render on a hotpink (`{colors.hotpink}` `#ff69b4`) panel — the same `hotpink` the docs use in their own theming example (`colors: { primary: 'hotpink' }`).

The page opens with a full-width black banner reading "STOP WAR IN UKRAINE" with flag emoji. It is a campaign banner rather than part of the brand system, but it is the first thing in the capture and is measured as a `#000000` area.

**Key Characteristics:**
- System font stack, not a custom typeface — the docs site renders in `system-ui` with Segoe UI, Roboto, Helvetica Neue and others as fallbacks.
- One hue (pink) for wordmark, links and active states; everything else is neutral Bootstrap-style grey (`{colors.ink}` `#212529`).
- Dark code blocks (`{colors.surface-code}`) with 7px corners, SFMono-Regular at 14px.
- Live editable previews: code on the left (dark), result on the right (white or hotpink), with a muted "(Edit code to see changes)" caption.
- A right sidebar with section headings (Getting Started, Advanced, Tooling, Packages, Posts) in 20px bold.
- DocSearch search pill with a ⌘K hint in the sidebar.
- The "[U+1F469 U+200D U+1F3A4]" emoji-style mascot illustration next to the wordmark; the repository README names the singer emoji as the mascot.

### Imagery and Voice

- **Mascot.** A pink-haired singer illustration at the left of the header; the GitHub README for the project uses the [U+1F469 U+200D U+1F3A4] emoji for the brand.
- **Voice.** Developer-to-developer: "Emotion is a library designed for writing css styles with JavaScript." Bullets are short, factual feature claims ("Requires no additional setup, babel plugin, or other config changes").
- **Code as imagery.** Instead of marketing visuals the page uses annotated code/preview pairs; the sample content is deliberately simple ("Hover to change color.").
- **Ads.** A small sponsored-ad slot (design.dev newsletter, "ADS VIA CARBON") sits above the search in the right column.

### Capture Observations

- The page background is white; the right sidebar is separated by a thin vertical pink-tinted rule.
- The top bar is a light grey (`{colors.surface-nav}` `#f8f9fa`) strip with a 1px `{colors.hairline}` bottom border and a faint shadow.
- The active sidebar link is pink, weight 600, with a small pink marker bar on the left edge of the list.
- Inline code (`@emotion/css`) sits on a faint purple-tinted chip.

### Documentation Structure (from the capture)

The right-hand navigation groups the docs into four labelled sections plus news:

| Group | Entries seen in the capture |
|---|---|
| Getting Started | Introduction, Install, The css Prop, Styled Components, Composition, Object Styles, Nested Selectors, Media Queries, Global Styles, Package Summaries |
| Advanced | Best Practices, Keyframes, Server Side Rendering, Attaching Props, Theming, Labels, Class Names, CacheProvider, Performance, For Library Authors |
| Tooling | Babel Plugin, Babel Macros, Source Maps, Snapshot Testing, TypeScript, eslint-plugin-react |
| Packages | @emotion/react, @emotion/styled, @emotion/cache, @emotion/css, @emotion/babel-plugin, @emotion/eslint-plugin, @emotion/server, @emotion/jest, @emotion/native, @emotion/primitives, @emotion/babel-preset-css-prop |
| Posts | Emotion 11, Migrating to Emotion 10 |

The introduction page itself follows a fixed rhythm: title with a pink "Edit this page" link (with a pencil emoji) at the right, a three-line summary, a pink rule, a one-line orientation sentence, then two sections (Framework Agnostic, React). Each section has the same four beats: install command in a dark block, package link, bullet list of properties, and a live code + preview pair.

### Live Preview Anatomy

- **Left pane.** The `code-block` at full block height (about 419px in the measured example), 14px monospace, with pink keywords (`import`, `render`), yellow strings and orange values.
- **Right pane.** A white result area with a centered demo box; in the intro samples the box is `{colors.hotpink}` with 32px padding, 24px text and a 4px radius, because that is what the sample code declares.
- **Caption.** A small muted line, "(Edit code to see changes)", bottom-right of the result pane in `{colors.ink-muted}`.
- **Outer frame.** A thin light border with 8px outer radius on the left pane's left corners and the right pane's right corners.

### Content Patterns

- **Install commands** are the first thing in each package section, always in a dark block with the `npm i` prefix in green.
- **Package names** are inline code chips, followed by a link in `{colors.link}` ("documentation").
- **Bullets** use plain discs at the first level and open circles at the second; text wraps within the 832px column.
- **Section headings** inside the page are in the display family at bold weight, smaller than the page h1.

## Colors

> **Source pages:** `emotion.sh/docs/introduction` (measured with the extractor and with direct computed-style probes). The docs site declares Bootstrap-style root variables (`--bs-body-bg: #fff`, `--bs-gray`, etc.) and DocSearch variables, which are the origin of several neutrals below.

### Brand & Accent
- **Primary** (`{colors.primary}` — `#d26ac2`): Wordmark, top-nav link and the site's DocSearch primary color (`--docsearch-primary-color: #D26AC2`).
- **Link** (`{colors.link}` — `#c43bad`): Body links, active sidebar item.
- **Hotpink** (`{colors.hotpink}` — `#ff69b4`): Background of the live-preview result panel; the documented theming example uses the CSS color name `hotpink`.
- **Rule Pink** (`{colors.rule-pink}` — `#eac3e4`): The horizontal rule below the page intro.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): Page and preview background.
- **Surface Nav** (`{colors.surface-nav}` — `#f8f9fa`): Top bar and search pill fill.
- **Surface Code** (`{colors.surface-code}` — `#282936`): Code blocks and the editor half of live previews.
- **Code Inline Bg** (`{colors.code-inline-bg}` — `#753f8312`): A 7% tint of purple behind inline code.
- **Banner** (`{colors.banner}` — `#000000`): The campaign banner above the header.
- **Hairline** (`{colors.hairline}` — `#d2d2d2`): Header bottom border and the search pill border.

### Text
- **Ink** (`{colors.ink}` — `#212529`): Headings and body text (Bootstrap's body color, published as `--bs-body-color-rgb: 33,37,41`).
- **Ink Muted** (`{colors.ink-muted}` — `#adb5bd`): Captions such as "(Edit code to see changes)".
- **Ink Search** (`{colors.ink-search}` — `#969faf`): Search-pill label (`--docsearch-muted-color`).
- **Ink Hover** (`{colors.ink-hover}` — `#1c1e21`): Search-pill hover text (`--docsearch-text-color`).
- **Code Ink** (`{colors.code-ink}` — `#cccccc`): Default text in code blocks.

### Syntax
- **Syntax Pink** (`{colors.syntax-pink}` — `#ff79c6`), **Syntax Orange** (`{colors.syntax-orange}` — `#ffb86c`), **Syntax Yellow** (`{colors.syntax-yellow}` — `#f1fa8c`): keywords, values and strings in code blocks. Green keywords in the capture (for `npm`) are also present but not tokenized here.

## Typography

### Font Family
- **UI and body:** the system stack `system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif` plus emoji fallbacks. Nothing is loaded as a web font (the extractor reports no loaded fonts).
- **Code:** `SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace` — the stack the site publishes as `--bs-font-monospace`.

### Hierarchy

| Token | Size | Weight | Line height | Use |
|---|---|---|---|---|
| `{typography.display}` | 40px | 700 | 48px | Page h1 ("Introduction") |
| `{typography.display-mobile}` | 27.85px | 700 | 33.42px | h1 at 390px viewport |
| `{typography.logo}` | 28px | 700 | 33.6px | "Emotion" wordmark text |
| `{typography.heading}` | 20px | 700 | 24px | Sidebar section headings |
| `{typography.body}` | 16px | 400 | 27.2px | Paragraphs and list items |
| `{typography.nav}` | 16px | 400 | 24px | Top-nav and sidebar links |
| `{typography.button}` | 16px | 500 | 24px | Search pill label |
| `{typography.code}` | 14px | 400 | 21px | Code blocks and inline code |

### Principles
- **Plain hierarchy.** Only two weights are used for structure: 700 for headings, 400 for text; 500–600 mark links and the active sidebar item.
- **Loose body leading.** 27.2px on 16px (1.7) makes long documentation paragraphs easy to scan.
- **Monospace is first-class.** Inline code is weight 500 at 14px with a faint purple chip, and code blocks use 14px/21px.

### Note on Font Substitutes
No proprietary type is used; the system stack resolves to San Francisco on Apple devices and Segoe UI on Windows.

## Layout

- **Structure.** Header (53px tall), a main reading column about 832px wide (measured on the main element), and a right-hand sidebar column about 187px wide for navigation.
- **Reading column.** Single column of text, code blocks and live previews all at the same 832px width; live previews split into two halves (code and result).
- **Sidebar.** Section headings at 20px bold with links in 16px and 36px-tall rows (6px vertical padding).
- **Spacing scale.** `{spacing.s1}` 4px, `{spacing.s3}` 8px, `{spacing.s4}` 10px, `{spacing.s5}` 14px, `{spacing.s6}` 24px, `{spacing.s7}` 32px. Code blocks use 14px padding; inline code 4px; the preview demo 32px.
- **Header.** Mascot and wordmark left; links Docs, Community, GitHub, Slack and "v10 Docs" right-aligned; the active link has a pink underline.

## Elevation & Depth

Almost flat. The only measured shadow is the header's: `rgba(0, 0, 0, 0.075) 0px 2px 4px 0px`, with a 1px `{colors.hairline}` bottom border. Code blocks, previews and chips rely on fill contrast (dark block, pink panel, faint purple chip) rather than shadow; the live-preview wrapper has a thin light border.

## Shapes

- `{rounded.xs}` 3px — small chips.
- `{rounded.sm}` 4px — inline code and the pink demo box.
- `{rounded.md}` 7px — dark code blocks (`pre`).
- `{rounded.lg}` 8px — the outer corners of the live-preview container (measured as `8px 0px 0px 8px` and `0px 8px 8px 0px` on its two halves).
- `{rounded.xl}` 40px — the DocSearch pill.

## Components

### Search
- **search-button** — `{colors.surface-nav}` fill, `{colors.ink-search}` label, `{typography.button}`, `{rounded.xl}` pill, 36px high, 1px `{colors.hairline}` border, `0px 8px` padding, with a ⌘K keycap. On hover the text becomes `{colors.ink-hover}`. This is the only button-like control on the page; the site has no filled call-to-action.

### Header and Navigation
- **header** — `{colors.surface-nav}`, 53px high, 1px `{colors.hairline}` bottom border and the soft shadow above.
- **nav-link** — `{colors.primary}` text at `{typography.nav}`; the active link carries an underline in the same pink.
- **Sidebar link** — `{colors.ink}` regular; active item is `{colors.link}` at weight 600.

### Links
- **link** — `{colors.link}` at body size, weight 500 inside paragraphs.

### Code
- **code-block** — `{colors.surface-code}` fill, `{colors.code-ink}` text, `{typography.code}`, `{rounded.md}`, 14px padding.
- **code-inline** — `{colors.code-inline-bg}` chip, `{colors.ink}` text at weight 500, `{rounded.sm}`, 4px padding.
- **live-preview** — a two-pane block: dark editor on the left, result on the right; the result in the capture is a `{colors.hotpink}` box with `{colors.ink}` text and a "(Edit code to see changes)" caption in `{colors.ink-muted}`.

### States (measured)

| Element | Default | Active / hover |
|---|---|---|
| Sidebar link | `{colors.ink}`, weight 400 | active: `{colors.link}`, weight 600 |
| Top-nav link | `{colors.primary}`, no underline unless current | current: pink underline |
| Search pill | `{colors.ink-search}` text on `{colors.surface-nav}` | `{colors.ink-hover}` text |
| Inline link | `{colors.link}`, weight 500 | not measured |

### Accessibility Notes

- Body text `{colors.ink}` on `{colors.canvas}` is a very high contrast pair; muted caption text `{colors.ink-muted}` on white is much lower and is used only for incidental captions.
- Code text `{colors.code-ink}` on `{colors.surface-code}` is a high-contrast light-on-dark pair.
- Link color is carried by hue only in running text, so keep the weight 500 that the docs apply to distinguish links from body copy.
- The black banner uses large white text, so it remains legible at a glance.

## Design System Architecture

Emotion publishes no design system for its documentation site; it publishes a styling library, and the site is built with it.

- **Library docs.** The [introduction](https://emotion.sh/docs/introduction) describes two methods: framework-agnostic `@emotion/css` and React-focused `@emotion/react`, both supporting string and object styles, with source maps, labels and testing utilities.
- **Theming.** The [theming guide](https://emotion.sh/docs/theming) documents `ThemeProvider` and `useTheme` and uses a theme object `{ colors: { primary: 'hotpink' } }` as its example; this is the library's pattern for a consumer's design tokens, not a published token set for the site.
- **Site source.** The [`site` directory](https://github.com/emotion-js/emotion/tree/main/site) of the GitHub repository contains the website (Next.js, with `components`, `pages`, `util` folders); its README notes that code blocks marked `// @live` render a preview.
- **De-facto tokens.** The rendered site exposes Bootstrap-style root variables (`--bs-body-bg`, `--bs-gray-*`, `--bs-font-monospace`) and DocSearch variables (`--docsearch-primary-color`, `--docsearch-muted-color`, `--docsearch-text-color`), which supply the neutrals and the pink brand value listed above.
- **License and branding.** The [repository](https://github.com/emotion-js/emotion) is MIT-licensed and uses a [U+1F469 U+200D U+1F3A4] mascot.

## Do's and Don'ts

**Do**
- Keep pages white with `{colors.ink}` text and let pink (`{colors.primary}`, `{colors.link}`) mark only links and active states.
- Show code in `{colors.surface-code}` blocks at `{rounded.md}` with `{typography.code}`.
- Use `{typography.body}` leading (27.2px on 16px) for documentation prose.
- Put live examples next to their code, with the result on a light or hotpink panel.
- Use the system font stack so the site feels native on each platform.

**Don't**
- Do not use the lighter brand pink `{colors.primary}` for long body links on white; the docs use the darker `{colors.link}` there.
- Do not add a filled primary button style; the site has none.
- Do not add heavy shadows; the header's 2px/4px shadow is the only one.
- Do not mix many hues; apart from pink, only the code syntax palette introduces color.
- Do not introduce a custom web font; type is system-ui and the SFMono code stack.

## Responsive Behavior

- **Mobile h1.** 40px/48px becomes 27.85px/33.42px at a 390px viewport (`{typography.display-mobile}`).
- **Content width.** The measured desktop reading column is 832px with a 187px sidebar; the sidebar's behavior at narrow widths was not measured.
- **Live previews.** Code and result panes are side by side on desktop; their stacking on small screens was not measured.
- **Touch targets.** Sidebar rows are 36px high; the search pill is 36px high.

## Iteration Guide

1. Start with a white `{colors.canvas}` page, `{colors.ink}` text and `{typography.body}`.
2. Add the header: `{colors.surface-nav}` fill, hairline bottom border, wordmark in `{colors.primary}`.
3. Use `{colors.link}` for in-text links and active sidebar items; keep everything else neutral.
4. Present examples as `code-block` + `live-preview` pairs with the sample result on `{colors.hotpink}`.
5. Use `{typography.heading}` for sidebar group titles and `{typography.display}` once per page.
6. Check contrast: `{colors.primary}` is for large text and the wordmark; use `{colors.link}` for 16px links.
7. Keep code at 14px/21px in the SFMono stack, with inline code on the faint purple chip.
