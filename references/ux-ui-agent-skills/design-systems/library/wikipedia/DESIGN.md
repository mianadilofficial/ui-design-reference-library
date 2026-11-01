---
version: alpha
name: Wikipedia
category: "Government & Nonprofit"
description: "The wikipedia.org portal is a white, centred, text-first page built on Wikimedia's Codex tokens — the system sans stack (-apple-system, Segoe UI, Roboto, Inter, Helvetica, Arial) at 13–16px, a Linux Libertine serif h1 at 32px/700, progressive blue #3366cc links and search button (hover #3056a9), #202122 base text with #54595d subtle text, #f8f9fa interactive-subtle fills, #a2a9b1 borders and a 2px base radius."

colors:
  primary: "#3366cc"
  primary-hover: "#3056a9"
  primary-active: "#233566"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#202122"
  ink-subtle: "#54595d"
  ink-hover: "#404244"
  placeholder: "#72777d"
  surface-subtle: "#f8f9fa"
  surface-interactive: "#eaecf0"
  surface-interactive-hover: "#dadde3"
  progressive-subtle: "#e8eeff"
  border-base: "#a2a9b1"
  border-subtle: "#c8ccd1"
  visited: "#6a60b0"
  destructive: "#bf3c2c"
  success: "#177860"
  warning: "#886425"

typography:
  wordmark-heading:
    fontFamily: "\"Linux Libertine\", \"Hoefler Text\", Georgia, \"Times New Roman\", Times, serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 33px
  slogan:
    fontFamily: "\"Linux Libertine\", \"Hoefler Text\", Georgia, \"Times New Roman\", Times, serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 33px
  language-name:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Inter, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  input:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Inter, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  base:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Inter, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Inter, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
  small:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Inter, Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  count:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Inter, Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20.8px

rounded:
  sharp: 0px
  base: 2px
  circle: 50%
  pill: 9999px

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  xxl: 32px
  xxxl: 48px
  huge: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.language-name}"
    rounded: 0px 2px 2px 0px
    padding: 8px 16px
    height: 44px
    border: "1px solid {colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    border: "1px solid {colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.base}"
    padding: 6px 12px
    height: 36px
    border: "1px solid {colors.border-base}"
  button-secondary-hover:
    backgroundColor: "{colors.canvas}"
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: 2px 0px 0px 2px
    padding: 8px 64px 8px 12px
    height: 44px
    border: "1px solid {colors.primary}"
    boxShadow: "inset 0 0 0 1px #3366cc"
  language-link:
    textColor: "{colors.primary}"
    typography: "{typography.language-name}"
    rounded: "{rounded.base}"
  language-link-hover:
    backgroundColor: "{colors.surface-interactive}"
  project-link:
    textColor: "{colors.primary}"
    typography: "{typography.base}"
  project-link-hover:
    backgroundColor: "{colors.surface-interactive}"
  text-link-hover:
    textDecoration: underline
  app-promo:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink-subtle}"
    typography: "{typography.small}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.small}"
    padding: 41.6px 12.8px 0px
---

## Overview

wikipedia.org is not a marketing page — it is a language switchboard. The portal is a single, centred,
almost entirely typographic composition on pure white (`{colors.canvas}` — `#ffffff`): the "WIKIPEDIA"
wordmark with "The Free Encyclopedia" beneath it, the grey jigsaw-globe logo in the middle, ten top
languages orbiting the globe in two columns, a search field with a blue search button, a "Read Wikipedia
in your language" button, then a footer of Wikimedia sister projects with their colour icons.

The visual language is that of Wikimedia's Codex design system, whose tokens are present on the page as
`:root` custom properties (`--color-base`, `--color-progressive`, `--background-color-interactive-subtle`,
`--border-radius-base` …). That means the look is defined by a small, sober set of decisions:

- text is near-black `#202122` (`--color-base`) and a cool grey `#54595d` (`--color-subtle`);
- everything clickable is "progressive" blue `#3366cc` (`--color-progressive`, written `#36c` in the tokens);
- surfaces are white or the faint grey `#f8f9fa` (`--background-color-interactive-subtle`);
- borders are `#a2a9b1` (`--border-color-base`) and corners are 2px (`--border-radius-base`).

There is no photography, no gradient, no shadow at rest, no hero. The only illustrations are the
puzzle globe and the sister-project logos. Density is high but the page is short (1,100px tall at desktop);
almost all text is 13–16px.

**Key Characteristics:**
- System font stack for UI (`-apple-system, "system-ui", "Segoe UI", Roboto, Inter, Helvetica, Arial, sans-serif`) — no web font download for UI text.
- A serif (`"Linux Libertine"`, then Hoefler Text, Georgia, Times) only for the wordmark heading and slogan.
- Progressive blue `#3366cc` is the single accent; hover darkens it to `#3056a9`, active to `#233566`.
- Most text is small: 13px is the most-used size by characters, 14px is the body default.
- 2px radius everywhere it is not 0.
- Hover on links is a `#eaecf0` background wash, not an underline (except plain text links, which gain an underline).

## Colors

> **Source:** measured on https://www.wikipedia.org (desktop 1280px); names are the Codex decision tokens
> documented at https://doc.wikimedia.org/codex/latest/design-tokens/color.html and present in the page's `:root`.

### Accent (progressive)
- **Progressive** (`{colors.primary}` — `#3366cc`): `--color-progressive`, `--background-color-progressive`, `--border-color-progressive`. Language names, sister-project titles, the search button fill, the search field border, the "Read Wikipedia in your language" label.
- **Progressive hover** (`{colors.primary-hover}` — `#3056a9`): `--background-color-progressive--hover`; measured on the Search button hover.
- **Progressive active** (`{colors.primary-active}` — `#233566`): `--color-progressive--active`.
- **Progressive subtle** (`{colors.progressive-subtle}` — `#e8eeff`): `--background-color-progressive-subtle` for selected/subtle progressive surfaces.
- **On progressive** (`{colors.on-primary}` — `#ffffff`): icon/text on the blue button.

### Text
- **Base** (`{colors.ink}` — `#202122`): `--color-base`. Body default, h1, footer copy.
- **Subtle** (`{colors.ink-subtle}` — `#54595d`): `--color-subtle`. Article counts, project taglines, licence line. It is the most-read text colour on the portal by character count (724 chars) because the page is mostly captions.
- **Base hover** (`{colors.ink-hover}` — `#404244`): `--color-base--hover`.
- **Placeholder** (`{colors.placeholder}` — `#72777d`): `--color-placeholder`.
- **Visited** (`{colors.visited}` — `#6a60b0`): `--color-visited`.

### Surfaces
- **Canvas** (`{colors.canvas}` — `#ffffff`): `--background-color-base`, the page.
- **Interactive subtle** (`{colors.surface-subtle}` — `#f8f9fa`): the language-list button and the "Download Wikipedia for Android or iOS" box.
- **Interactive** (`{colors.surface-interactive}` — `#eaecf0`): measured hover background of language and project links.
- **Interactive hover** (`{colors.surface-interactive-hover}` — `#dadde3`): `--background-color-interactive--hover`.

### Borders
- **Base** (`{colors.border-base}` — `#a2a9b1`): `--border-color-base`; the language-list button border.
- **Subtle** (`{colors.border-subtle}` — `#c8ccd1`): `--border-color-subtle`; also measured as a background on the page.

### Status (Codex decision tokens, not rendered on the portal)
- **Destructive / error** (`{colors.destructive}` — `#bf3c2c`)
- **Success** (`{colors.success}` — `#177860`)
- **Warning** (`{colors.warning}` — `#886425`)

## Typography

### Font Families
- **UI:** the Codex system-sans stack, served as `-apple-system, "system-ui", "Segoe UI", Roboto, Inter, Helvetica, Arial, sans-serif`. No @font-face is loaded — the reader's OS font renders the page (San Francisco on Apple devices, Segoe UI on Windows, Roboto on Android).
- **Heading / wordmark:** `"Linux Libertine", "Hoefler Text", Georgia, "Times New Roman", Times, serif` on the h1 and slogan. Codex's own `--font-family-serif` is `"Linux Libertine","Georgia","Times","Source Serif 4",serif`.
- The visible "WIKIPEDIA" wordmark itself is an image; the h1 text sits with it.

### Hierarchy (measured)

| Token | Family | Size / line | Weight | Use |
|---|---|---|---|---|
| `{typography.wordmark-heading}` | Linux Libertine | 32px / 33px | 700 | h1 "Wikipedia" (mobile: 32px / 25px) |
| `{typography.slogan}` | Linux Libertine | 15px / 33px | 400 | "The Free Encyclopedia" |
| `{typography.language-name}` | system sans | 16px / 24px | 700 | Language names around the globe |
| `{typography.input}` | system sans | 16px / 25.6px | 400 | Search field text |
| `{typography.base}` | system sans | 14px / 21px | 400 | Body default, sister-project titles |
| `{typography.button}` | system sans | 14px / 14px | 700 | "Read Wikipedia in your language" |
| `{typography.small}` | system sans | 13px / 19.5px | 400 | Footer copy, taglines, licence |
| `{typography.count}` | system sans | 13px / 20.8px | 400 | "7,245,000+ articles" |

Sizes measured on the page by characters: 13px (907), 14px (163), 16px (70), 15px (21), 32px (9).

### Principles
- Weights are only 400 and 700.
- No letter-spacing and no text-transform anywhere (all measured `normal` / `none`).
- Serif is reserved for identity; never use it for UI controls.
- Language names are always shown in their own script (日本語, Русский, 中文) — typography must cover CJK, Cyrillic and Latin with the system stack.

### Note on Font Substitutes
There is nothing proprietary to substitute: the UI uses the visitor's system font, and Linux Libertine is
a free, open-source serif. If Linux Libertine is unavailable, the page's own fallbacks (Hoefler Text,
Georgia, Times New Roman) apply; Codex lists Source Serif 4 as a further fallback.

## Layout

### Structure (from the capture)
1. Wordmark + slogan, centred at the top.
2. A central puzzle globe with ten language links arranged left and right of it in two columns of five, each a bold 16px blue name over a 13px grey count.
3. Search: a 394px-wide input joined to a 56px-wide blue button, both 44px tall, with an "EN" language selector inside the input's right padding.
4. A centred "Read Wikipedia in your language" button with horizontal rules running out on both sides.
5. A full-width rule, then the footer: Wikimedia Foundation note + app download box on the left, a 3×5 grid of sister projects (icon + blue title + grey tagline) on the right.
6. A final rule and a one-line licence / Terms of Use / Privacy Policy footer.

### Spacing
The page's `:root` exposes the Codex spacing scale (`--spacing-12` 2px, `--spacing-25` 4px, `--spacing-50`
8px, `--spacing-75` 12px, `--spacing-100` 16px, `--spacing-150` 24px, `--spacing-200` 32px,
`--spacing-300` 48px, `--spacing-400` 64px), mapped here as `{spacing.xxs}`–`{spacing.huge}`.
Measured paddings on the portal itself are em-based: 13px (most frequent), 8px, 60px, 12.8px, 12px, 6px,
41.6px (footer top).

### Container
The central block is narrow (the language nav measures 546px wide at desktop); the footer spans the full
width with a 12.8px side padding.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Everything at rest |
| Inset ring | `inset 0 0 0 1px #3366cc` + 1px `#3366cc` border | Search field (measured as rendered on load) |
| Codex drop (available) | `--box-shadow-medium: 0 4px 4px 0 rgba(0,0,0,0.06),0 0 8px 0 rgba(0,0,0,0.06)` | Menus and popovers in Codex; not visible on the portal at rest |

Depth on the portal is only rules and the `#f8f9fa` fill of the app box and language button.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.sharp}` | 0px | Rules, project links, layout boxes (`--border-radius-sharp`) |
| `{rounded.base}` | 2px | Buttons, language links (`--border-radius-base`) |
| `{rounded.circle}` | 50% | `--border-radius-circle` (avatars/icons in Codex) |
| `{rounded.pill}` | 9999px | `--border-radius-pill` (Codex chips; not on the portal) |

The joined search control splits the 2px radius: input `2px 0px 0px 2px`, button `0px 2px 2px 0px`.

## Components

### Search

**`search-input`**
- White field, 16px/25.6px `#202122` text, padding `8px 64px 8px 12px` (the right padding houses the language selector), 44px tall, radius `2px 0px 0px 2px`.
- Border 1px `#3366cc` plus `inset 0 0 0 1px #3366cc` — the Codex progressive focus ring (2px total).

**`button-primary`** — the Search button.
- `{colors.primary}` fill, white magnifier icon, padding `8px 16px`, 44px tall, radius `0px 2px 2px 0px`, 1px `#3366cc` border.
- Hover (measured): background and border `{colors.primary-hover}` `#3056a9`.

### Buttons

**`button-secondary`** — "Read Wikipedia in your language".
- `{colors.surface-subtle}` `#f8f9fa` fill, `{colors.primary}` 14px/14px bold label with a translate icon and a chevron, 1px `#a2a9b1` border, padding `6px 12px`, 36px tall, 2px radius.
- Hover (measured): background becomes `#ffffff`; border and text stay.

### Links

**`language-link`** — the ten featured languages.
- Block link, 2px radius, name 16px/24px 700 `#3366cc`, count 13px/20.8px 400 `#54595d`.
- Hover (measured): background `#eaecf0`, no underline.

**`project-link`** — sister projects (Commons, Wikivoyage, Wiktionary, Wikibooks, Wikidata, Wikiversity, Wikiquote, MediaWiki, Wikisource, Wikispecies, Wikifunctions, Meta-Wiki).
- Icon left, title 14px/21px 400 `#3366cc`, tagline 13px/19.5px `#54595d`.
- Hover (measured): `#eaecf0` background.

**`text-link-hover`** — inline links ("You can support our work with a donation", "Download Wikipedia for Android or iOS") gain an underline on hover (measured).

### Footer

**`app-promo`** — "Download Wikipedia for Android or iOS" box: `#f8f9fa` background, Wikipedia "W" tile, bold blue heading link, 13px grey copy, black Google Play / App Store badges.

**`footer`** — 13px/19.5px text, padding `41.6px 12.8px 0px`, licence line in `#54595d` with blue links separated by "•".

## Design System Architecture

Wikipedia's interface is built with **Codex**, the Wikimedia design system
(https://doc.wikimedia.org/codex/latest/). The portal's `:root` carries Codex's CSS custom properties
directly.

### Token architecture
Codex has three tiers
([definition and structure](https://doc.wikimedia.org/codex/latest/design-tokens/definition-and-structure.html)):
1. **Option tokens** — "context-agnostic … primitive visual foundations", raw values with generic names like `color.blue700`, stored in `themes/wikimedia-ui.json`.
2. **Decision tokens** — "design decisions that can be reused to style system components", in `application.json`. Live examples on the portal: `--color-base`, `--color-subtle`, `--color-progressive--hover`, `--background-color-interactive-subtle`, `--border-color-base`, `--border-radius-base`, `--box-shadow-medium`, `--min-size-interactive-touch`.
3. **Component tokens** — for styles "that cannot be covered by shared decision tokens", in `components.json` (live example: `--min-size-toggle-switch-grip`).

Naming is `{property}-{category}-{variant}--{state}`: `background-color-progressive--hover`,
`border-color-progressive--active`, `color-destructive--visited--active`.

### Theming
Modes ("such as dark or high-contrast") override decision tokens while reusing the same option tokens;
the colour page notes tokens "automatically adapt to dark mode when used instead of raw hex codes"
([color tokens](https://doc.wikimedia.org/codex/latest/design-tokens/color.html)).

### Type & spacing
- Font stacks: system sans, Linux Libertine serif, Menlo monospace; sizes `x-small` 0.75rem → `xxx-large` 1.75rem; weights hairline 100 → bold 700; `line-height-content` 1.625 ([font tokens](https://doc.wikimedia.org/codex/latest/design-tokens/font.html)).
- Spacing tokens are named by percentage of 16px: `spacing-25` 4px, `spacing-50` 8px, `spacing-100` 16px, `spacing-200` 32px, `spacing-400` 64px.
- Interaction size tokens: `--min-size-interactive-pointer: 32px`, `--min-size-interactive-touch: 44px` (both in the live `:root`).

### Component model
Two kinds of components: "fully interactive components built with Vue 3" and "CSS-only components"
([components overview](https://doc.wikimedia.org/codex/latest/components/overview.html)). Inventory:
Button, ButtonGroup, MenuButton, ToggleButton, ToggleButtonGroup; Checkbox, ChipInput, Combobox, Field,
Label, Lookup, MultiselectLookup, Radio, Select, TextArea, TextInput, ToggleSwitch; Accordion, Card,
Dialog, Menu, MenuItem, Popover, Table, Tooltip; InfoChip, Message, ProgressBar, ProgressIndicator, Toast;
Icon, Image, Thumbnail; Link, Tabs, Tab; SearchInput, TypeaheadSearch.

### Accessibility
Codex aims to satisfy "all level AA success criteria" of WCAG, requires 4.5:1 text contrast (3:1 large),
uses "a strong outline to indicate keyboard focus state", and ensures minimum touch target sizes
([accessibility](https://doc.wikimedia.org/codex/latest/style-guide/accessibility.html)).

### Delivery
npm packages `@wikimedia/codex`, `@wikimedia/codex-icons` and `@wikimedia/codex-design-tokens`; tokens in
CSS custom properties, Less, SCSS, ES6 and JSON; a Codex Figma library; and native MediaWiki integration
([token overview](https://doc.wikimedia.org/codex/latest/design-tokens/overview.html)).

## Do's and Don'ts

### Do
- Use `#3366cc` for every link and the single primary action; darken to `#3056a9` on hover.
- Keep text at 13–16px in the system stack; reserve Linux Libertine for the wordmark heading.
- Use `#54595d` for secondary captions (counts, taglines) under a blue `#3366cc` title.
- Use `#eaecf0` background washes for hover on block links.
- Keep corners at 2px and borders at `#a2a9b1`.
- Show content in its native script and let the system font render it.

### Don't
- Don't add imagery, gradients or shadows to the portal.
- Don't introduce a brand web font for UI text.
- Don't round controls more than 2px.
- Don't use colour other than progressive blue for interaction.
- Don't use bold for body copy — 700 is for language names and buttons only.
- Don't set text below 13px.

## Responsive Behavior

### Measured at 390px
- h1 stays 32px but tightens to 25px line height.
- The language list nav narrows to 364px and its base text drops to 13px/19.5px.
- Body caption text stays 13px/19.5px; the language button stays 305px wide, 36px tall.

### Collapsing strategy
Only the values above were measured at 390px; the mobile arrangement of the language ring and the
sister-project grid was not captured, so it is not specified here.

### Touch targets
Codex defines `--min-size-interactive-pointer: 32px` and `--min-size-interactive-touch: 44px`; the search
field and button are 44px tall.

## Iteration Guide

1. Start from white `#ffffff`, `#202122` text, the system sans stack at 14px/21px.
2. Make every link and the primary action `#3366cc`; hover `#3056a9`; active `#233566`.
3. Secondary text `#54595d` at 13px.
4. Buttons: 2px radius, 1px `#a2a9b1` border on `#f8f9fa` for neutral, solid `#3366cc` for progressive.
5. Inputs: 44px tall; focus = 1px `#3366cc` border + `inset 0 0 0 1px #3366cc`.
6. Use Codex token names (`--color-progressive`, `--background-color-interactive-subtle`) rather than raw hexes so dark mode works.
7. Keep it flat and typographic.
