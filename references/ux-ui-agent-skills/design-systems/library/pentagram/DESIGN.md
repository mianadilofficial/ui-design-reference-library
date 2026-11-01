---
version: alpha
name: Pentagram
category: "Agencies & Studios"
description: "Pentagram's site is an achromatic gallery catalog: a #ffffff canvas alternating with #222222 and #000000 bands, all text set in Optimo's Plain (served as \"Plain, Arial, sans-serif\") at weight 400 with 500 reserved for the wordmark and filter chips. Ink is #1a1a1a, secondary text #767676, display type 52px with -1.04px tracking. The only interactive fill is a translucent #00000012 chip with a 4px radius; imagery is square-cornered and carries all of the color."

colors:
  primary: "#1a1a1a"
  ink: "#1a1a1a"
  ink-muted: "#767676"
  ink-footer: "#8c8c8c"
  gray-600: "#666666"
  gray-800: "#333333"
  neutral-850: "#282828"
  canvas: "#ffffff"
  on-dark: "#ffffff"
  on-dark-muted: "#ffffff8f"
  ink-alpha-muted: "#0000008f"
  dark: "#222222"
  black: "#000000"
  gray-100: "#e3e4e5"
  gray-050: "#f5f5f5"
  chip-fill: "#00000012"
  chip-fill-on-dark: "#ffffff1f"
  hero-overlay: "#e8e8e8cc"
  hero-overlay-hover: "#e8e8e8e6"
  red-500: "#e52222"

typography:
  wordmark:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 19px
    fontWeight: 500
    lineHeight: 25px
    letterSpacing: normal
  wordmark-mobile:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 17px
    fontWeight: 500
    lineHeight: 25px
    letterSpacing: normal
  display:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 52px
    fontWeight: 400
    lineHeight: 54.6px
    letterSpacing: -1.04px
  display-mobile:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 1.05
    letterSpacing: -0.02em
  heading:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 1.2
    letterSpacing: -0.32px
  heading-mobile:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 1.2
    letterSpacing: -0.01em
  search-input:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: -0.32px
  nav:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 19px
    fontWeight: 400
    lineHeight: 25px
    letterSpacing: normal
  nav-mobile:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25px
    letterSpacing: normal
  chip:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 19px
    fontWeight: 500
    lineHeight: 1
    letterSpacing: normal
  chip-mobile:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 17px
    fontWeight: 500
    lineHeight: 1
    letterSpacing: normal
  body:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0
  caption:
    fontFamily: "Plain, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16.25px
    letterSpacing: 0

rounded:
  none: 0px
  chip: 4px
  container: 8px
  pill: 9999px

spacing:
  spacing-1: 4px
  spacing-2: 8px
  spacing-3: 12px
  spacing-5: 16px
  spacing-6: 24px
  spacing-7: 32px
  spacing-8: 40px
  spacing-9: 48px
  spacing-10: 64px
  spacing-11: 96px
  spacing-12: 128px
  header: 60px
  inner-gutter: 12px

components:
  button-primary:
    backgroundColor: "{colors.chip-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.chip}"
    rounded: "{rounded.chip}"
    padding: 6px 8px
    height: 28px
  button-primary-mobile:
    backgroundColor: "{colors.chip-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.chip-mobile}"
    rounded: "{rounded.chip}"
    padding: 9px 8px
    height: 34px
  button-secondary:
    backgroundColor: "{colors.chip-fill-on-dark}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body}"
    rounded: "{rounded.chip}"
    padding: 7px 8px 7px 12px
    height: 34px
  button-overlay:
    backgroundColor: "{colors.hero-overlay}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.chip}"
    padding: 8px 8px 8px 12px
    height: 36px
  button-overlay-hover:
    backgroundColor: "{colors.hero-overlay-hover}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.chip}"
    padding: 8px 8px 8px 12px
    height: 36px
  button-load-more-mobile:
    backgroundColor: "{colors.chip-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.chip}"
    padding: 16.5px 8px 18.5px 12px
    height: 55px
  tag:
    backgroundColor: "{colors.chip-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.caption}"
    rounded: "{rounded.chip}"
    height: 24px
  filter-tab:
    backgroundColor: "transparent"
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px
  filter-tab-hover:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px
  link:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    height: "{spacing.header}"
    padding: 0px 24px
  text-input:
    backgroundColor: "{colors.dark}"
    textColor: "{colors.on-dark}"
    typography: "{typography.search-input}"
    rounded: "{rounded.none}"
    height: 60px
    padding: 0px
  card:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px
  rail-container:
    backgroundColor: "{colors.black}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body}"
    rounded: "{rounded.container}"
    padding: 24px
  band-dark:
    backgroundColor: "{colors.dark}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 48px 24px
  footer:
    backgroundColor: "{colors.black}"
    textColor: "{colors.ink-footer}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px
---

## Overview

Pentagram's homepage behaves like the catalogue of a museum whose only colour comes from the objects on the walls. The interface itself is strictly achromatic: a white `{colors.canvas}` (`#ffffff`) page, a near-black `{colors.dark}` (`#222222`) band for editorial "stories", and a pure `{colors.black}` (`#000000`) for the image rail and the long news/work feed at the foot of the page. By measured area, `#222222` is the single largest background on the page (it beats white), so this is a site that spends as much time in the dark as in the light.

Everything typographic is set in **Plain**, François Rappo's 2013 grotesk published by the Swiss foundry Optimo, served as `Plain, Arial, sans-serif` (the site's own `--plain` token is `Plain, Arial, Sans-Serif`). Only one face file (`Plain 400 normal`) was observed loading; weight 400 carries 99.5% of all characters. Weight 500 is reserved for the "Pentagram" wordmark-heading and for the filter chips in the hero sentence. There are no icons beyond a search glass and a small chevron, no badges, no gradients drawn by CSS, and no filled brand-coloured button anywhere.

The single interactive "fill" on the page is a translucent chip: `{colors.chip-fill}` (`#00000012`, i.e. black at ~7% alpha) with a `{rounded.chip}` 4px radius, used for the dropdown-like words in the hero sentence "We design **Brand Identity ▾** for **Technology ▾**". On dark bands its sibling is `{colors.chip-fill-on-dark}` (`#ffffff1f`). That's the whole button system.

**Key Characteristics:**
- Achromatic UI, chromatic work: project photography and identities supply 100% of the colour.
- One typeface (Plain) at one weight (400) for virtually everything; 500 only for the wordmark and chips.
- Display type at 52px / 54.6px with -1.04px tracking (-0.02em) — large, flat, quiet, never bold.
- Secondary text in `{colors.ink-muted}` `#767676` is the most-used text colour by character count — descriptions outweigh titles.
- Square-cornered imagery; the only radii are 4px chips, an 8px dark rail container and 9999px carousel dots.
- Bands alternate white → `#222222` → white → `#000000`, each band a different "room" of the gallery.
- Full-bleed hero carousel (~549px tall at 1280px) with the active project caption bottom-left and dot pagination bottom-right.

### Art Direction (from the 1280px capture)
- **Hero**: a rendered 3D scene for the current featured project (Isomorphic Labs — chartreuse cubes floating over a pale mint gradient, the client's logotype set in outlined boxes). The hero image is the client's world, not Pentagram's; the site's own chrome over it is limited to the translucent sentence panel, a white caption and dots.
- **Story band**: studio product photography on seamless coloured sweeps — pale grey, warm grey, terracotta, white — each object centred with lots of air. Four tiles read as a set because their backgrounds are all flat and mid-key.
- **Latest projects**: unrelated work placed side by side without normalising — a pale cream identity study with a magenta/halftone mark next to a multicolour hand-drawn NYT illustration. The juxtaposition is the point; never harmonise client imagery to a site palette.
- **Density**: one idea per band. Each band carries a heading, at most one paragraph, and a row or grid of work.
- **Motion cues**: the hero and rail are carousels (Swiper); the hero sentence chips open dropdowns. There is no decorative scroll animation evident in the capture.

### Voice & Microcopy
- Labels are plain nouns: "Work", "About", "News", "Contact", "Archive", "Show more", "See latest projects".
- The hero sentence is the only first-person line: "We design Brand Identity for Technology" — a Mad-Libs filter built from discipline × sector chips.
- Project descriptions are one factual sentence ("Containers and product design for the global skincare brand …", "Industrial design of an innovative new device for making chai …"), truncated rather than shortened.
- Long-form copy in story bands is essayistic and historical (naming partners and past work), set in a narrow column.

## Colors

> **Source:** live homepage `https://www.pentagram.com/` measured at 1280px and 390px (computed styles, area- and character-weighted frequencies, and the site's own `:root` custom properties). Token names below reuse the site's own variable names where they exist (`--gray-900`, `--gray-550`, `--dark`, `--neutral-850`, `--red-500`).

### Brand & Accent
- **Primary / Ink** (`{colors.primary}` — `#1a1a1a`): Pentagram has no chromatic accent. The "action" colour is the same near-black ink used for titles and the label inside the filter chips (`--gray-900` `#1A1A1A`). `primary` is set to it deliberately; do not substitute a hue.
- **Red 500** (`{colors.red-500}` — `#e52222`): The only chromatic token declared in `:root` (`--red-500`). It was not observed on any visible homepage element; treat it as a reserved alert/error colour, never decoration.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): Page background and nav bar.
- **Dark** (`{colors.dark}` — `#222222`): The editorial "story" band (e.g. "The Secret Life of Things") and the search overlay. Largest background by area on the page. Site token `--dark` / `--gray-850`.
- **Black** (`{colors.black}` — `#000000`): The rounded image rail inside the dark band, and the footer/news feed.
- **Neutral 850** (`{colors.neutral-850}` — `#282828`): Declared surface token for dark UI layers (`--neutral-850`).
- **Gray 100** (`{colors.gray-100}` — `#e3e4e5`): Light-grey placeholder/image-well background; fourth-largest background by area.
- **Gray 050** (`{colors.gray-050}` — `#f5f5f5`): Lightest declared grey (`--gray-050`).
- **Hero Overlay** (`{colors.hero-overlay}` — `#e8e8e8cc`): Translucent light grey (80% alpha) behind the "We design … for …" sentence that floats over the hero image.
- **Chip Fill** (`{colors.chip-fill}` — `#00000012`): Fill of the filter chips on light surfaces.
- **Chip Fill on Dark** (`{colors.chip-fill-on-dark}` — `#ffffff1f`): Fill of the "Show more" button on `#222222`.
- **Gray 800** (`{colors.gray-800}` — `#333333`): The only measured border colour (hairlines on dark surfaces).

### Text
- **Ink** (`{colors.ink}` — `#1a1a1a`): Titles, nav, wordmark, project names on white.
- **Ink Muted** (`{colors.ink-muted}` — `#767676`): Project descriptions, "See latest projects", inactive filter tabs. Most-used text colour by characters (`--gray-550`).
- **Gray 600** (`{colors.gray-600}` — `#666666`): Declared mid grey (`--gray-600`), frequent in CSS.
- **Ink Footer** (`{colors.ink-footer}` — `#8c8c8c`): Default text colour on the black footer/news feed (`--gray-450`).
- **On Dark** (`{colors.on-dark}` — `#ffffff`): Headlines, body copy and project titles on `#222222` / `#000000`.
- **On Dark Muted** (`{colors.on-dark-muted}` — `#ffffff8f`): Project descriptions on dark (white at 56% alpha). Second-most-used text colour by characters.
- **Ink Alpha Muted** (`{colors.ink-alpha-muted}` — `#0000008f`): The light-surface twin of on-dark-muted (black at 56% alpha).

### Semantic
No success/warning/info palette is exposed on the marketing site. `{colors.red-500}` is the only semantic candidate and is unconfirmed in use.

## Typography

### Font Family

**Plain** — designed by François Rappo, published by Optimo (Geneva) in 2013; a commercial, proprietary typeface. The site self-hosts it via `@font-face { font-family: "Plain" }` and references it through the `--plain` variable (`Plain, Arial, Sans-Serif`). Every `--f-*-font-family` role token (`heading-1` … `heading-5`, `display-1`, `body-1`, `body-2`, `caption`, `number`, `shop-cart`) points at `var(--plain)`.

The site also enables `font-feature-settings: "case" on` on every type role (case-sensitive forms, so punctuation and arrows align to capitals) and antialiased/grayscale font smoothing. Reproduce both.

Secondary stacks are declared but not used on the homepage: `--serif` (Iowan Old Style, Apple Garamond, Baskerville, Times New Roman …) and `--mono` (ui-monospace, Menlo, Consolas …).

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 52px | 400 | 54.6px | -1.04px | Story band headline ("The Secret Life of Things") |
| `{typography.display-mobile}` | 36px | 400 | 1.05 | -0.02em | Same headline at 390px |
| `{typography.heading}` | 32px | 400 | 1.2 | -0.32px | Section/feed headings |
| `{typography.heading-mobile}` | 24px | 400 | 1.2 | -0.01em | Same at 390px |
| `{typography.search-input}` | 32px | 400 | 60px | -0.32px | Search overlay field |
| `{typography.wordmark}` | 19px | 500 | 25px | normal | "Pentagram" h1 wordmark in the nav |
| `{typography.wordmark-mobile}` | 17px | 500 | 25px | normal | Wordmark at 390px |
| `{typography.nav}` | 19px | 400 | 25px | normal | Nav links, base body element, link blocks |
| `{typography.nav-mobile}` | 17px | 400 | 25px | normal | Nav at 390px |
| `{typography.chip}` | 19px | 500 | 1 | normal | Filter chips in the hero sentence |
| `{typography.chip-mobile}` | 17px | 500 | 1 | normal | Chips at 390px |
| `{typography.body}` | 16px | 400 | 20px | 0 | Paragraphs, project titles + descriptions, "Show more" |
| `{typography.caption}` | 13px | 400 | 16.25px | 0 | Dates, small meta (`--f-caption`, `--f-body-2`, `--f-number` = 13px) |

16px carries 88% of all characters on the page; 13px is a distant second. The type scale is shallow on purpose: big jumps (16 → 32 → 52) with nothing decorative in between.

### Principles
- **Regular weight is the voice.** Headlines at 52px are still weight 400. Never bold a heading; at most use 500 for a label-sized element.
- **Negative tracking only on display sizes.** 52px uses -1.04px (-0.02em) and 32px uses -0.32px (-0.01em). Body and captions are at 0.
- **Tight leading.** Display at 1.05 (54.6px on 52px), headings at 1.2, body at 1.25 (20px on 16px). Paragraphs read as dense grey blocks, like a printed catalogue.
- **Title in ink, description in grey.** Every project tile is a two-line pair: name in `{colors.ink}` (or `{colors.on-dark}`), description in `{colors.ink-muted}` (or `{colors.on-dark-muted}`), same size, same weight. Hierarchy comes from colour, not size.
- **`"case" on` everywhere.**

### Note on Font Substitutes
Plain is a commercial Optimo face with no free distribution. The site's own fallback is **Arial** — that is what the browser shows before Plain loads, and it is the officially declared second family. For a closer licensed match, Typewolf lists **Graphik** and **Sailec** as comparable grotesks. Keep weight 400, `"case" on`, and the same negative tracking on display sizes; do not substitute a geometric face like Futura, whose round "o" breaks Plain's neutral grotesk texture.

## Layout

### Spacing System
- **Tokens (site's own `--spacing-spacing-*`)**: `{spacing.spacing-1}` 4px · `{spacing.spacing-2}` 8px · `{spacing.spacing-3}` 12px · `{spacing.spacing-5}` 16px · `{spacing.spacing-6}` 24px · `{spacing.spacing-7}` 32px · `{spacing.spacing-8}` 40px · `{spacing.spacing-9}` 48px · `{spacing.spacing-10}` 64px · `{spacing.spacing-11}` 96px · `{spacing.spacing-12}` 128px. (The site's `spacing-3` and `spacing-4` are both 12px.)
- **Header height**: `{spacing.header}` 60px (`--spacing-header: 3.75rem`).
- **Measured gaps**: 8px dominates (chip rows, title/description pairs), then 12px (grid gutter, `--inner-gutter`), 48px, and 96px (between major blocks).
- **Measured paddings**: 8px and 4px (chips, small UI), 24px (page gutter, rail container), 48px (band top/bottom).

### Grid & Container
- Full-width layout, no centred max-width container at 1280px. Content sits on a 24px page gutter (the capture shows the wordmark, headline and grid all starting 24px from the left edge).
- Columns are separated by a 12px gutter (`--inner-gutter: 12px`). The project grid below "See latest projects" is an asymmetric two-column arrangement: a narrow tile (~1/3 width) beside a wide tile (~2/3 width), each image a different aspect ratio.
- The story band's intro paragraph is constrained to ~506px wide even though the headline runs ~796px — long copy is kept to a narrow measure.
- The image rail inside the story band shows four equal portrait tiles (roughly 3:4) at 12px gutters inside an 8px-radius black container with 24px padding.

### Interior Pages (measured: `/work`, `/work/mit-technology-review`)
- **Work index**: page title "Work" in `{typography.display}` (52px) top-left, then "Showing the latest 40 projects" in 16px `#767676`, then rows of three equal tiles at 12px gutters, occasionally broken by a wide 2/3 + 1/3 row. Rows are separated by roughly 96px.
- **Project page**: quoted title ("‘MIT Technology Review’") at 52px, a one-sentence summary at 16px, a row of `tag` chips, and `button-overlay` "About the project +" at the right. Below, full-width media blocks sit on `{colors.gray-100}` `#e3e4e5` panels (the largest background by area on that page) separated by 12–24px gaps; no radius, no shadow. The case study shows the client's own type specimens and covers as flat images.

### Page Rhythm (top of homepage, 1280px)
1. Nav — 60px, white.
2. Hero carousel — full bleed, ~549px.
3. White gap — ~96px.
4. Story band — `#222222`, 48px top padding, 52px headline, ~506px paragraph, black 8px-radius rail of four tiles.
5. White — centred "See latest projects ↓", then the asymmetric two-column project grid.
6. Footer/news feed — `#000000`, ~1650px tall.

### Whitespace Philosophy
Generous vertical air between bands (a ~96px white gap separates the hero from the dark story band), but very tight horizontal and inline spacing within a block: 8px between title and description, 12px between tiles. The result is gallery-like — dense clusters of objects separated by large empty walls.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | Everything on the homepage (no box-shadow was measured on any visible element) |
| 1 | Colour stepping: `#ffffff` → `#222222` → `#000000` | The only depth cue between sections and containers |
| 2 | Translucent fill: `#e8e8e8cc` over imagery | The hero sentence overlay |

The CSS corpus does contain `0 32px 68px rgb(0 0 0 / .3)` and `0 -1px 10px 0 #acabab4d`, but neither was observed on a visible homepage element; the element carrying them was not identified. Do not use shadows for cards or buttons.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | All imagery, project tiles, nav, inputs, bands |
| `{rounded.chip}` | 4px | Filter chips and "Show more" — the most-used radius |
| `{rounded.container}` | 8px | The black image-rail container inside the dark story band |
| `{rounded.pill}` | 9999px | Hero carousel pagination dots only |

### Photography Geometry
Project images are always square-cornered, edge-to-edge in their tile, with no border and no shadow. Aspect ratios are not normalised: the latest-projects grid mixes a wide landscape crop (YouMe Kyoto Triennale) with a near-square editorial illustration (NYT "In Defense of the Detour"). Product photography sits on flat studio backgrounds (grey, terracotta, white) that become the de facto colour palette of the page.

## Components

### Buttons

**`button-primary`** — filter chip (the measured primary CTA).
- Background `{colors.chip-fill}` `#00000012`, text `{colors.ink}` `#1a1a1a`, type `{typography.chip}` (19px / 500), padding 6px 8px, height 28px, radius `{rounded.chip}` 4px, no border, no shadow.
- Followed by a small chevron (▾) glyph. Used inline inside a sentence: "We design [Brand Identity ▾] for [Technology ▾]", options such as "Signage & Environmental Graphics", "Industrial/Product Design", "Data Driven Experiences", "Motion Graphics & Film".
- At 390px (`button-primary-mobile`): 17px / 500, padding 9px 8px, height 34px.
- Hover state of the chip itself was not captured by the measurement run; do not invent one. The nearest measured hover for a filled chip-family button is `button-overlay` below.

**`button-overlay`** / **`button-overlay-hover`** — "About the project +" on project pages (measured on `/work/mit-technology-review`).
- Background `{colors.hero-overlay}` `#e8e8e8cc`, text `{colors.ink}`, `{typography.body}` (16px / 400 / 20px), padding 8px 8px 8px 12px, height 36px, radius 4px, followed by a "+" glyph. Right-aligned opposite the project summary.
- Hover (measured): background becomes `{colors.hero-overlay-hover}` `#e8e8e8e6` (alpha 0.8 → 0.9). Text unchanged. This is the only measured hover on a filled button: a tiny opacity step, no colour change.

**`button-load-more-mobile`** — "Load more" at the end of the `/work` grid at 390px (measured).
- Background `{colors.chip-fill}`, text `{colors.ink}`, `{typography.body}`, padding 16.5px 8px 18.5px 12px, height 55px, full content width (366px), radius 4px.

**`tag`** — discipline/sector tags under a project title (e.g. "Brand Identity", "Publications", "Technology"; "Arts & Culture" under a grid tile).
- Background `{colors.chip-fill}`, `{typography.caption}` (13px / 16.25px), height 24px, radius 4px, laid out in a row with 8px gaps. The anchor's computed colour is `{colors.ink}` `#1a1a1a`; in the capture the labels read lighter, so verify the inner span colour before relying on it.

**`button-secondary`** — "Show more" on a dark band.
- Background `{colors.chip-fill-on-dark}` `#ffffff1f`, text `{colors.on-dark}` `#ffffff`, type `{typography.body}` (16px / 400 / 20px), padding 7px 8px 7px 12px, height 34px, radius `{rounded.chip}` 4px.

**`filter-tab`** / **`filter-tab-hover`** — the "Everyone / Arts & Culture / Civic & Public …" sector filters.
- Rest: text `{colors.ink-muted}` `#767676`, border colour `#767676`, transparent background.
- Hover (measured): text and border both shift to `{colors.ink}` `#1a1a1a`. No background change, no underline, no shadow. This grey-to-ink shift is the site's measured hover language.

### Cards & Containers

**`card`** — project tile (measured on `/work`: tile title is an `h3` at 16px / 400 / 20px, `#1a1a1a`).
- No background, no radius, no padding: an image followed by two lines of `{typography.body}`: the project name in `{colors.ink}` and a one-line description in `{colors.ink-muted}`, truncated with an ellipsis after two lines.
- On dark: name in `{colors.on-dark}`, description in `{colors.on-dark-muted}` `#ffffff8f`.

**`rail-container`** — the black carousel shelf inside a story band.
- Background `{colors.black}`, radius `{rounded.container}` 8px, padding 24px, four tiles at 12px gutters.

**`band-dark`** — editorial story band.
- Background `{colors.dark}` `#222222`, full bleed, headline in `{typography.display}` white, intro paragraph `{typography.body}` white at ~506px measure, followed by a `rail-container`.

### Inputs & Forms

**`text-input`** — the search overlay field.
- Background `{colors.dark}`, text `{colors.on-dark}`, type `{typography.search-input}` (32px, 60px line-height, -0.32px), height 60px, no border, no radius, no padding — a single huge line of type on a dark sheet.

### Navigation

**`nav`** — top header.
- Height 60px, background `{colors.canvas}`, text `{colors.ink}` in `{typography.nav}` (19px / 400). The "Pentagram" wordmark (an `h1`, 19px / 500) sits left; on the right, "Work · About · News · Contact", a search magnifier, and "Archive", spaced ~24px apart. No underline, no active pill.
- On interior pages (captures of `/work` and a project page) the current section stays `{colors.ink}` while the other items render grey (consistent with `{colors.ink-muted}` `#767676`); on the homepage all items are ink.

**`link`** — inline and block links.
- Text `{colors.ink}`, `{typography.nav}` 19px, no underline, no decoration change. Whole project tiles are links.

### Signature Components

**Hero carousel** — full-bleed slideshow ~549px tall. A translucent `{colors.hero-overlay}` panel holds the "We design … for …" sentence with two chips. The active project's name and a one-sentence description sit bottom-left in white `{typography.body}`; pagination is a row of small white 9999px dots bottom-right, the active dot opaque and the rest translucent.

**"See latest projects ↓"** — a centred `{colors.ink-muted}` label with a small down arrow, introducing the feed; the only centred element on the page.

**`footer`** — a long black feed (≈1650px at desktop).
- Background `{colors.black}`, default text `{colors.ink-footer}` `#8c8c8c`, `{typography.body}`; news items show a 13px date ("Oct 06, 2026"), title in white, and description in `{colors.on-dark-muted}`.

## Design System Architecture

Pentagram publishes **no public design system**, brand portal, press kit, token package or Figma kit. Searches for "Pentagram design system github tokens", "Pentagram brand guidelines press kit logo", and site-relaunch/typeface queries (logged in `SOURCES.json`) found none, and the site's [about page](https://www.pentagram.com/about) links to nothing of the kind. What follows is the **de-facto system** read directly from the live stylesheet ([`/build/main/assets/index-Bex603M2.css`](https://www.pentagram.com/build/main/assets/index-Bex603M2.css), fetched 2026-10-07; the hash in the filename changes on deploy) and the homepage HTML.

### Tooling lineage (inferred, not credited)
- The homepage's inline head script defines a `window.A17` namespace (`window.A17=o`, used for browser feature flags). The site's custom properties use the same names that AREA 17's open-source [`@area17/a17-tailwind-plugins`](https://github.com/area17/tailwind-plugins) document — the [Setup plugin](https://area17.github.io/tailwind-plugins/Setup.html) (`--breakpoint`, `--container-width`, `--inner-gutter`, `--outer-gutter`, `--grid-columns`) and the [Typography plugin](https://area17.github.io/tailwind-plugins/Typography.html) (`.f-{typeset}` classes, `--f-{typeset}-{property}` variables, including the `---bold-weight` triple dash). Pentagram does not publicly credit who built the site; no attribution is made here.
- Tailwind is present (`--tw-ring-color`, `--tw-ring-shadow`, `dark:` utilities), with BEM-ish component classes on top in camelCase blocks: `header__logo`, `header__navItems`, `homeFilters__chip`, `homeSlider__overlay`, `footer__legal`.

### Token architecture
Two tiers, both plain CSS custom properties on `:root`; there is no separate semantic or component tier.
- **Primitives — colour.** A 50-step grey ramp `--gray-050` `#F5F5F5` … `--gray-550` `#767676` … `--gray-850` `#222222`, `--gray-900` `#1A1A1A`, `--gray-950` `#0D0D0D`, plus `--white`, `--black`, `--dark` (`#222222`), `--neutral-850` (`#282828`) and a single hue, `--red-500` `#E52222`. Colour tokens in this file reuse these names where they match (`gray-100`, `gray-050`, `neutral-850`, `red-500`).
- **Typesets.** Ten named sets, each a bundle of family/size/weight/line-height/letter-spacing/feature-settings: `f-display-1`, `f-heading-1` … `f-heading-5`, `f-body-1`, `f-body-2`, `f-caption`, `f-number`, `f-shop-cart`. All families resolve to `--plain: Plain, Arial, Sans-Serif`; every set turns on `font-feature-settings: "case" on` (case-sensitive forms).
- **Spacing.** `--spacing-spacing-1` … `--spacing-spacing-12` plus `--spacing-header: 3.75rem` (60px, the header height in this file).
- **Layout.** `--grid-columns`, `--inner-gutter`, `--outer-gutter`, `--container-width`, and `--grid-column-bg: rgba(127, 255, 255, .25)` (the cyan of a developer grid overlay, never shown to users).

### Theming
- **Single light theme.** There is no dark/high-contrast mode switch: the stylesheet contains one `prefers-color-scheme: dark` block holding only a handful of stray Tailwind `dark:` utilities (e.g. `.dark:stroke-gray-600`), not a theme. Dark surfaces (`#222222`, `#000000`) are **section bands**, chosen per module, not a mode.
- No brand themes or density modes. Switching is purely by media query on `:root`.

### Type & spacing systems
Breakpoints (from the `:root` media blocks): `xs` < 600px, `sm` ≥ 600px, `md` ≥ 800px, `lg` ≥ 1040px, `xl` ≥ 1800px, `xxl` ≥ 1920px. Component CSS additionally uses `1600px` and `(hover: hover) and (pointer: fine)` queries.

| Token | xs | sm ≥600 | md ≥800 | lg ≥1040 |
|---|---|---|---|---|
| `--f-display-1-font-size` | 3.625rem | 4.5625rem | 5.75rem (weight 350) | 8.1875rem (−.04em, lh 1) |
| `--f-heading-1-font-size` | 2.25rem | 2.5625rem | 2.875rem | 3.25rem (−.02em) |
| `--f-heading-2-font-size` | 2rem | 2.5625rem | 2.875rem (weight 375) | 4.0625rem |
| `--f-heading-4-font-size` | 1.5rem | — | 1.75rem | 2rem |
| `--f-body-1-font-size` | 1rem | — | — | — |
| `--f-body-2-font-size` | .8125rem | — | — | 1rem |

So the 52px / −1.04px / 54.6px `display` token in this file is `f-heading-1` at `lg` (3.25rem, −.02em, 1.05), and the 36px mobile size is `f-heading-1` at `xs` (2.25rem). Weights below 400 (`375`, `350`) exist in the typesets but the only face loaded on the measured page is `Plain 400 normal`; do not rely on them. Body copy never scales: `f-body-1` stays 1rem / 1.25.

The spacing scale is responsive rather than modular: at `xs` it runs 4 / 8 / 12 / 12 / 16 / 24 / 32 / 40 / 48 / 64 / 96 / 128px (`spacing-3` and `spacing-4` are both .75rem); at `md` steps 4–12 grow (e.g. `spacing-12` 10rem) and at `lg` steps 7–12 grow again (`spacing-7` 3rem … `spacing-12` 12.25rem). The `spacing` group in this file records the `xs` values that the measured pages actually render.

Grid: 6 columns at `xs`, 12 from `sm` up. `--inner-gutter` 12px (16px from `xl`); `--outer-gutter` 12 → 16 (md) → 24 (lg) → 32px (xl); `--container-width` is `unset` (fluid) until `xl`, where it caps at 1792px.

### Component model
No documented component inventory exists. The de-facto inventory, from BEM block names in the stylesheet and the measured pages: header (logo, nav items, hamburger `ham__*`), home filters (`homeFilters__chip`, caption, chevron), home slider (overlay, tagline, navigator, previous/next), carousel (Swiper-based; ships `--swiper-theme-color` and the `swiper-icons` font), project tiles, calendar items (`calendarItem__date`, `__desc`), A–Z filter (`abc__filter`), work slideshow, footer (columns, tools, legal). States are limited to hover (gated behind `(hover: hover)` media queries) and the active-nav ink/grey swap; there are no documented sizes or variants beyond the mobile chip/padding change described under Components.

### Accessibility
No published accessibility standard. Observable facts: `--gray-550` `#767676` is the lightest grey used for running text on white (4.54:1, the classic AA threshold value); several site components reset focus with `:focus{outline:0;box-shadow:none}`, and the only `:focus-visible` rule in the stylesheet (2px solid white, 3px offset) belongs to the third-party CookieYes consent banner. The only `prefers-reduced-motion` rule is also in the consent banner CSS. If you rebuild this system, add a visible focus style yourself — the brand's site does not supply one to copy.

### Delivery
Nothing is distributed: no npm package, no public repo, no Figma library, no versioning. The system exists only as the compiled, content-hashed bundle (`/build/main/assets/index-*.css`) served with the site, with images from `pentagram-production.imgix.net`.

## Do's and Don'ts

### Do
- Keep the interface achromatic; let photography provide every hue.
- Set everything in Plain (fallback Arial) at weight 400, with `font-feature-settings: "case" on`.
- Use `#1a1a1a` for ink on white and `#767676` for descriptions; on dark use `#ffffff` and `#ffffff8f`.
- Alternate full-bleed bands: white `#ffffff`, `#222222`, black `#000000`.
- Use the translucent 4px chip (`#00000012` / `#ffffff1f`) as the only button shape.
- Pair every image with a two-line caption (name + description) at the same 16px size.
- Keep imagery square-cornered and shadowless.

### Don't
- Don't introduce a brand accent colour for buttons or links — the site has none.
- Don't bold headlines; 52px stays at 400 with -1.04px tracking.
- Don't add drop shadows, gradients, borders or rounded corners to project tiles.
- Don't use pills for buttons; 9999px is only for carousel dots.
- Don't centre body content — only the "See latest projects" label is centred.
- Don't use `#e52222` decoratively; it is a reserved token.
- Don't underline links or add icons beyond search and the chevron.

## Responsive Behavior

### Breakpoints

| Name | Width | Key Changes |
|---|---|---|
| Desktop | 1280px (measured) | 19px nav/wordmark, 52px display, 32px headings, four-tile rail, two-column project grid |
| Mobile | 390px (measured) | Header text shrinks to the wordmark only (17px / 500); display 36px; headings 24px; chips 17px with 34px height; body stays 16px |

The site declares `--grid-columns: 6` with `--outer-gutter` and `--inner-gutter` of 12px at its `xs` breakpoint; body copy remains 16px / 20px at every width.

### Touch Targets
- Chips grow from 28px to 34px tall on mobile (padding 6px → 9px vertically) while keeping the 4px radius.
- "Show more" is 34px tall at all sizes.

### Collapsing Strategy
- Display headline 52px → 36px; section headings 32px → 24px; wordmark/nav 19px → 17px.
- The intro paragraph spans 366px at 390px width (12px outer gutters, matching `--outer-gutter`), up from a ~506px measure inside a 1280px page.
- The rail and hero are Swiper carousels (the site ships Swiper's `swiper-icons` font and `--swiper-theme-color`), so they remain swipeable rows at narrow widths rather than reflowing into a grid. Mobile layout of the project grid was not captured; verify before assuming a stacking rule.

### Image Behavior
On desktop, images keep their native aspect ratio within their column (the latest-projects grid mixes landscape and near-square crops); no fixed card ratio is imposed there. The story rail is the exception: its four tiles share one portrait ratio.

## Iteration Guide

1. Start every screen as white `#ffffff` with `#1a1a1a` Plain 400 text and nothing else; add colour only through images.
2. Reference tokens by name (`{colors.ink}`, `{typography.display}`, `{rounded.chip}`).
3. Build hierarchy with colour (ink vs `#767676`) before size; before weight never.
4. When a section needs emphasis, change the band colour (`#222222`, `#000000`) rather than adding a card or shadow.
5. Only buttons and chips get a radius (4px); containers on dark may get 8px.
6. Check every display size has negative tracking (-0.02em at 52px/36px, -0.01em at 32px/24px) and every body size has 0.
7. Verify `font-feature-settings: "case" on` is applied globally.
