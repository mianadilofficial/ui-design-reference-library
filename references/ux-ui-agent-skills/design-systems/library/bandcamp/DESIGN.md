---
version: alpha
name: Bandcamp
category: "Music & Audio"
description: "Bandcamp (bandcamp.com): a pale blue-grey #ecf3f4 canvas with #222222 text set in the system's Helvetica Neue (Arial fallback) — 32px/500 headline, 16px/24px body, dense 12px catalog text. Actions are near-black #222222 buttons with white labels and a 4px radius; genre pills are #333333 with a 16px radius; the logo blue is #0cacd7. Dark #222222 bands and a #333333 footer break the light page."

colors:
  primary: "#0cacd7"
  canvas: "#ecf3f4"
  page-white: "#ffffff"
  ink: "#222222"
  ink-secondary: "#222222b8"
  ink-inverse: "#ffffff"
  ink-footer: "#f8f8f8"
  ink-disabled: "#767676"
  button-dark: "#222222"
  surface-dark: "#222222"
  surface-footer: "#333333"
  pill: "#333333"
  fill-subtle: "#22222214"
  fill-inverse-24: "#ffffff29"
  fill-inverse-8: "#ffffff14"
  border: "#22222252"
  border-field: "#cccccc"
  sale-green: "#008000"
  artist-blue: "#0687f5"
  blue-dark: "#007c9e"
  error: "#e50a0a"
  grey-light: "#e6e6e6"

typography:
  display:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 44.8px
  display-mobile:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
  heading:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
  form-title:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 32px
  body:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-large:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  pill:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  ui:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21.9996px
  button:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  catalog:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20.0004px
  meta:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 20px
  micro:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 10px
    fontWeight: 400
    letterSpacing: 0.4px

rounded:
  none: 0px
  field: 3px
  button: 4px
  chip: 8px
  pill: 16px
  circle: 50%

spacing:
  xxs: 4px
  xs: 6px
  sm: 8px
  md: 14px
  lg: 16px
  xl: 32px
  xxl: 60px
  section: 64px
  menubar: 53px

components:
  button-primary:
    backgroundColor: "{colors.button-dark}"
    textColor: "{colors.ink-inverse}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 10px
    height: 36px
  button-large:
    backgroundColor: "{colors.button-dark}"
    textColor: "{colors.ink-inverse}"
    typography: "{typography.button-large}"
    rounded: "{rounded.button}"
    padding: 0px 32px
    height: 44px
  button-outlined-inverse:
    backgroundColor: transparent
    textColor: "{colors.ink-inverse}"
    border: "1px solid #ffffff"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 10px
    height: 32px
  header-link:
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    height: 53px
  header-link-hover:
    backgroundColor: "{colors.fill-subtle}"
    textDecoration: underline
  genre-pill:
    backgroundColor: "{colors.pill}"
    textColor: "{colors.ink-inverse}"
    border: "1px solid #333333"
    typography: "{typography.pill}"
    rounded: "{rounded.pill}"
    padding: 1px 16px
    height: 32px
  filter-chip:
    backgroundColor: "{colors.button-dark}"
    textColor: "{colors.ink-inverse}"
    typography: "{typography.ui}"
    rounded: "{rounded.chip}"
    padding: 1px 16px
    height: 36px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    textDecoration: underline
  search-input:
    backgroundColor: "{colors.fill-subtle}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    rounded: "{rounded.field}"
    padding: 5px 10px 5px 38px
    height: 36px
  text-input:
    backgroundColor: "{colors.page-white}"
    textColor: "#333333"
    border: "1px solid #cccccc"
    fontSize: 16px
    padding: 0px 10px
    height: 35px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-footer}"
    typography: "{typography.ui}"
---

## Overview

Bandcamp's homepage reads like a record shop's notice board. The page sits on a pale, slightly cool blue-grey
`#ecf3f4` (the site's own `--blue100`), text is a soft black `#222222`, and the only type family is whatever
Helvetica Neue the visitor's system provides, falling back to Arial. There are no web fonts: the measured page loaded
none.

The hero is not a photo but a sentence: "Fans have paid artists **$1.81 billion** using Bandcamp, and yesterday alone
bought **68,441** records." The figures are knocked out in white on `#222222` blocks, like label-maker tape, and the
sentence is flanked by hand-drawn black four-point sparkles. Below it, "Bandcamp Daily" presents editorial: one large
collage image with a 24px headline, a dek and a byline, plus a right rail of three smaller stories separated by hairlines.

Then the page flips: a full-bleed `#222222` band headed by a scrolling "NEW! NEW! NEW!" marquee in cyan italic
lettering, containing "Playlists in fan collections" — fanned stacks of album covers with circular play buttons,
followed by white titles and descriptions. The page returns to `#ecf3f4` for "Bandcamp Radio" and ends with a `#333333`
footer.

Everything is text-forward and dense. Catalog text is 12px, metadata 11px. Album art does the color work; the UI
itself is monochrome. The Bandcamp blue `#0cacd7` (`--bandcamp-blue`) is the logo color and appears as a filled band on
the login/signup pages, but buttons are near-black.

**Key Characteristics:**
- Canvas `#ecf3f4`, ink `#222222`, secondary ink `#222222b8` (72%)
- Helvetica Neue, Arial, sans-serif — system type only
- Hero headline 32px / 500 / 44.8px, sentence case
- Primary buttons `#222222` with white labels, 4px radius (36px or 44px tall)
- Genre pills `#333333`, 16px radius, 32px tall, 16px text
- Header links get a `#22222214` fill and an underline on hover
- Dark `#222222` content bands and a `#333333` footer
- Logo blue `#0cacd7`

## Colors

### Brand
- **Bandcamp blue** `#0cacd7` (`primary`): `--bandcamp-blue` / `--blue400`; the logo mark and the colored band on the
  login and signup pages. Not used for buttons on the measured pages.
- **Blue dark** `#007c9e` (`--blue500`) and **artist blue** `#0687f5` (`--artist-blue`) are additional blues in the token set.

### Surfaces
- **Canvas** `#ecf3f4`: homepage body and header background.
- **Page white** `#ffffff`: `--page-background-color`; the discover, login and signup pages use white.
- **Surface dark** `#222222`: the "Playlists in fan collections" band and the inverted number blocks in the hero.
- **Surface footer** `#333333`: the footer and the genre pills.
- **Fill subtle** `#22222214` (8% of `#222`): the header search field, hover fills, image placeholders
  (`--menubar-search-input-background-color`, `--image-background-color`).
- **Grey light** `#e6e6e6` (`--gray200`): large tile placeholders on the discover page.
- **Inverse fills** `#ffffff29` (24%) and `#ffffff14` (8%) on dark bands.

### Text
- **Ink** `#222222`: all primary text (`--page-text-color`, `--bc-link-color`).
- **Ink secondary** `#222222b8`: descriptions and bylines (`--page-text-color-secondary`, 72%).
- **Ink inverse** `#ffffff` on dark bands; **ink footer** `#f8f8f8`.
- **Ink disabled** `#767676` (`--disabled-text-color`).
- **Sale green** `#008000`: measured in the live "Sold for $7 · 28 seconds ago" sales ticker.

### Borders
- **Border** `#22222252` (32%, `--border-color`) for hairlines; **border field** `#cccccc` on login/signup inputs.

### Semantic
- **Error** `#e50a0a` (`--text-color-error`, `--red500`).

## Typography

### Font Family
`"Helvetica Neue", Arial, sans-serif` everywhere on bandcamp.com. No `@font-face` was loaded on the homepage; the only
family in the stylesheet corpus besides it is Roboto (third-party sign-in UI). Artist pages (e.g. an album page) can
switch to their own theme fonts — Georgia was measured on one.

### Hierarchy

| Token | Size | Weight | Line height | Use |
|---|---|---|---|---|
| display | 32px | 500 | 44.8px | Hero sentence |
| display-mobile | 24px | 500 | 36px | Hero sentence at 390px |
| heading | 24px | 500 | 36px | Section titles ("Bandcamp Daily", "Playlists in fan collections") |
| form-title | 20px | 500 | 32px | "Log in", "Sign Up for an Artist Account" |
| body | 16px | 400 | 24px | Base body |
| button-large | 16px | 500 | 16px | 44px buttons ("Go to album", "View more results") |
| pill | 16px | 400 | 16px | Genre pills |
| ui | 14px | 400 | 21.9996px | Header, links, paragraphs on discover |
| button | 14px | 400 | 14px | 36px buttons ("Sign up") |
| catalog | 12px | 400 | 20.0004px | Story deks, playlist descriptions (the most-read size) |
| meta | 11px | 400 | 20px | Sales ticker |
| micro | 10px | 400 | — (0.4px tracking) | Small labels |

Weight 700 accounts for 1,350 measured characters on the homepage (the playlist titles in the capture are bold); weight 500 is used for headings.
The site's scale tokens are `--bc-font-size-100` (.75rem = 12px) through `--bc-font-size-900` (3.25rem = 52px), with
`--bc-font-size-300: 1rem`, `--bc-font-size-500: 1.5rem`, `--bc-font-size-700: 2rem` and matching
`--bc-line-height-*` ratios (e.g. `--bc-line-height-700: 1.4em` → 44.8px on 32px).

### Principles
- No display face: hierarchy is size and weight 500 only.
- Sentence case everywhere; no uppercase tracking.
- Dense 12px for catalog copy, 14px for UI, 16px for body.

### Note on Font Substitutes
Helvetica Neue is not served by Bandcamp; it renders only where the visitor has it installed. Bandcamp falls back to Arial and then
the system sans-serif; use the same stack rather than a web-font look-alike.

## Layout

### Spacing System
Measured gaps cluster at 4px, 6px, 8px, 14px, 16px, 32px and 60px; paddings at 8px, 16px, 32px and 64px.
The menubar is `--bc-menubar-height: 53px` (the header measured 106px including the category row);
`--body-text-width: 700px` caps reading width.

### Grid & Container
- Header row: logo, a 312px search field, then "Sign up" and "Log in" on the right; a second row centers category
  links with line icons (Digital music, Vinyl, Compact discs, Cassettes, T-shirts, Gift cards, Editorial, Radio).
- Bandcamp Daily: a wide lead story (about two-thirds) and a narrow right rail of three stacked stories divided by
  1px rules.
- Playlists: four columns of fanned cover stacks.

### Whitespace Philosophy
Generous space above the hero and between sections; tight inside lists. Text blocks are left-aligned, with "Explore more
editorial" / "Learn more about playlists" underlined links aligned right on each section header.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| Flat | none | Almost everything |
| Hairline lift | `rgba(0, 0, 0, 0.1) 0px 1px 1px 0px` | Small cards/covers (10 elements) |
| Raised | `rgba(0, 0, 0, 0.06) 0px 1px 2px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px` | One floating element |

Depth comes from the dark bands and the stacked album-cover collages, not shadows.

## Shapes

| Token | Value | Use |
|---|---|---|
| none | 0px | Sections, images, header links |
| field | 3px | Search field |
| button | 4px | Buttons, outlined buttons |
| chip | 8px | Discover filter chips ("all genres") |
| pill | 16px | Genre pills (32px tall → fully rounded ends) |
| circle | 50% | Play buttons, avatars |

## Components

### Buttons

**Primary** — "Sign up"
- Background `#222222`, text `#ffffff`, Helvetica Neue 14px / 400, line-height 14px
- Padding 0px 10px, height 36px, radius 4px

**Large** — "Go to album", "View more results" (discover)
- Background `#222222`, text `#ffffff`, 16px / 500
- Padding 0px 32px, height 44px, radius 4px

**Outlined inverse** — "Listen now" on dark bands
- Transparent, 1px solid `#ffffff` border, white 14px text, padding 0px 10px, height 32px, radius 4px

### Header links
"Sign up", "Log in" and category links: `#222222` 14px text, no fill; on hover a `#22222214` fill appears and the label
underlines (measured).

### Genre pills
- Background `#333333`, 1px `#333333` border, white 16px / 400 text
- Padding 1px 16px, height 32px, radius 16px

### Filter chips (discover)
- Background `#222222`, white 14px text, padding 1px 16px, height 36px, radius 8px

### Links
`#222222` text, underlined section links ("Explore more editorial"); hover toggles underline.

### Inputs
- **Header search**: background `#22222214`, 14px `#222222` text, padding 5px 10px 5px 38px (magnifier icon at left),
  height 36px, radius 3px, placeholder "Search and discover music".
- **Login/signup field**: background `#ffffff`, 1px solid `#cccccc`, text `#333333` 16px, padding 0px 10px, height 35px.

### Editorial cards
Image on top (no radius), date in 12px, headline 24px / 500, dek 14px, byline in secondary ink.

### Playlist cards
Fanned stack of five covers with a circular play button bottom-left, title 14px bold white, track count and duration,
12px description, curator avatar + name.

### Footer
`#333333` background, `#f8f8f8` text, 14px, with a "Bandcamp Daily — your guide to the world of Bandcamp" block.

## Design System Architecture

Bandcamp publishes **no public design system**, token package or UI guideline. The only official brand resource is the
[Buttons/Logos](https://bandcamp.com/buttons) download page linked from [About](https://bandcamp.com/about), which offers
logo and button artwork without color values or rules. Searches are listed in `SOURCES.json`. What follows is the
de-facto system measurable in bandcamp.com's CSS.

### Token architecture (observed `:root` custom properties)
1. **Primitive palette** — numbered ramps: `--gray100: #f8f8f8` … `--gray700: #222`, `--blue100: #ecf3f4` …
   `--blue600: #056277`, `--green100`–`--green600`, `--red100`–`--red600`, `--yellow100`–`--yellow600`,
   `--orange500/600`, `--parchment100`–`--parchment600`; alpha ramps `--transparency-dark-8` … `-72` and
   `--transparency-light-8` … `-72` (all derived from `#222` / white).
2. **Semantic** — `--page-background-color`, `--page-text-color`, `--page-text-color-secondary`,
   `--default-foreground-color`, `--border-color`, `--border-color-subtle`, `--border-color-strong`,
   `--disabled-text-color`, `--inverted-background-color`, `--elevated-background-color-1` … `-4`, `--mark-background-color`.
3. **Component** — prefixed `--g-button-*`: `--g-button-primary-bg: #222`, `--g-button-primary-fg: #fff`,
   `--g-button-primary-hover-bg: #333`, `--g-button-primary-active-bg: #5a5a5a`,
   `--g-button-default-hover-bg: rgb(34 34 34 / 8%)`; plus `--menubar-search-input-background-color`.
Buttons carry a `g-button` class (measured on the discover page's "Go to album": `buy-button buy-tralbum-button g-button`).

### Theming
The `--elevated-background-color-1…4` and `--inverted-*` tokens suggest theme layering, but no dark-mode switch was
observed on bandcamp.com. Artist and label pages are themed per artist (custom background, text and link colors and
fonts — the measured album page used `#575757` text, Georgia and a black header block).

### Type & spacing systems
Type: a 100–900 size scale in rem (`--bc-font-size-*`) with per-step line-height ratios and three weights
(`--bc-font-weight-regular: 400`, `-medium: 500`, `-bold: 700`). No spacing tokens are exposed; measured spacing is listed above.

### Component model
Observable components: g-button (primary/default), menubar with search, category bar, editorial cards, playlist cards,
genre pills, filter chips, radio player, footer.

### Accessibility
A "Skip to content" link is the first element on the page. No published contrast or focus policy was found.

### Delivery
No npm package, Figma kit or versioning is public.

## Do's and Don'ts

### Do
- Use `#ecf3f4` as the page and header background on the homepage; white on utility pages.
- Set everything in `"Helvetica Neue", Arial, sans-serif`.
- Keep buttons `#222222` with white labels and a 4px radius.
- Use weight 500 for headings, 700 for bold item titles, 400 for everything else.
- Let album art and editorial collages supply color.
- Use underlined text links for "more" actions.
- Use full-bleed `#222222` bands to separate collection content.

### Don't
- Don't color buttons with the logo blue.
- Don't load a custom web font.
- Don't round images or cards.
- Don't add heavy shadows.
- Don't uppercase headings.
- Don't invent hover fills beyond the measured `#22222214`.

## Responsive Behavior

### Measured at 390px
- Hero sentence drops from 32px / 44.8px to 24px / 36px, weight 500 kept.
- Section headings stay 24px / 500 / 36px.
- Text sizes present: 12px, 14px, 16px, 24px, 20px, 10px.

### Touch targets
Buttons 36px and 44px tall; pills 32px; header search 36px.

### Collapsing strategy
Layout collapse at narrow widths was not measured beyond the 390px values above.

## Iteration Guide

1. Canvas `#ecf3f4`, text `#222222`, Helvetica Neue / Arial.
2. Header: logo (blue `#0cacd7` mark), 36px `#22222214` search (3px radius), Sign up / Log in text links.
3. Category row with icons, 14px.
4. Hero sentence 32px / 500 with `#222222` knocked-out number blocks.
5. Editorial grid with 24px / 500 headlines and 12px deks.
6. Full-bleed `#222222` band with white text, `#333333` pills (16px radius) and white-outlined 4px buttons.
7. `#333333` footer with `#f8f8f8` text.
8. Use `#222222` 4px buttons for actions; hover on links = underline + `#22222214` fill.

### Quick Reference
```
canvas #ecf3f4 · white #ffffff · ink #222222 · secondary #222222b8
dark band #222222 · footer #333333 · logo blue #0cacd7
font: "Helvetica Neue", Arial, sans-serif
hero 32px/500/44.8px · heading 24px/500/36px · body 16px/24px · catalog 12px
button: #222222 · 4px · 0 10px · 36px (large: 0 32px · 44px, 16px/500)
pill: #333333 · 16px radius · 1px 16px · 32px
```
