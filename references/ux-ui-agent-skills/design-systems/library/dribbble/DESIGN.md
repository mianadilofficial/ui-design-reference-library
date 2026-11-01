---
version: alpha
name: Dribbble
category: "Agencies & Studios"
description: "Dribbble's live design language — a white (#ffffff) gallery canvas with near-black indigo ink #0d0c22, pill-shaped (9999px) ink buttons that lift to #3d3d4e on hover, and the signature Dribbble pink #ea4c89 reserved for search, Pro upsells and badges. Every word is set in GitHub's open-source Mona Sans (hero 52px/600, UI 14px/500), shots sit in a three-column grid of 12px-radius thumbnails, and the component layer is Shoelace web components re-themed with --sl-color-primary set to pink."

colors:
  primary: "#ea4c89"
  primary-hover: "#f76aa0"
  primary-focus: "#e44a85"
  primary-tint: "#ea4c891a"
  ink: "#0d0c22"
  ink-hover: "#3d3d4e"
  ink-deep: "#060318"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  text-body: "#3a3546"
  text-secondary: "#524b63"
  text-muted: "#6e6d7a"
  text-subtle: "#7b7194"
  text-quiet: "#655c7a"
  surface-search: "#f3f3f6"
  surface-placeholder: "#ecebf0"
  surface-hover: "#faf9fb"
  surface-soft: "#f8f8fc"
  hairline: "#e7e7e9"
  hairline-hover: "#dbdbde"
  input-border: "#dbdadee6"
  border-warm: "#d8d6d5"
  border-warm-hover: "#a1a1a1"
  grey-400: "#9e9ea7"

typography:
  display-hero:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 52px
    fontWeight: 600
    lineHeight: 62.4px
  display-hero-mobile:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 27px
    fontWeight: 600
    lineHeight: 32.4px
  display-pro:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 57.6px
    letterSpacing: -0.2px
  display-pro-mobile:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 38.4px
    letterSpacing: -0.2px
  heading-landing:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 42px
    fontWeight: 600
    lineHeight: 42px
  heading-lg:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 41.6px
  heading-md:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 29px
  heading-sm:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 700
  body:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  body-sm:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 19.6px
  body-sm-regular:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  shot-meta:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 17px
  nav-link:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 30px
  button-lg:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
  button-md:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
  button-sm:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 600
    lineHeight: 13px
  button-mobile:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 700
    lineHeight: 13px
  button-xs:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 12px
  chip:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
  stat:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
  input:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  search:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 28px
  badge-pro:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 9px
    fontWeight: 800
    lineHeight: 20px
  badge-micro:
    fontFamily: "\"Mona Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 8px
    fontWeight: 700
    lineHeight: 8px

rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  pill: 9999px
  pill-computed: 1e+07px
  circle: 50%

spacing:
  xxs: 4px
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  xxl: 32px
  grid-gap: 36px
  nav-gutter: 40px
  page-gutter: 72px

components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 49px
    border: "1px solid #0d0c22"
  button-primary-hover:
    backgroundColor: "{colors.ink-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 49px
    border: "1px solid #3d3d4e"
  button-nav-login:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 48px
  button-pink:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 47px
  button-pink-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 47px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-xs}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 32px
    border: "1px solid #e7e7e9"
  button-secondary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-xs}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 32px
    border: "1px solid #dbdbde"
  button-outlined-pro:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-deep}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 47px
    border: "1px solid #d8d6d5"
  tag-chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.chip}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 31px
    border: "1px solid #e7e7e9"
  tag-chip-hover:
    backgroundColor: "{colors.surface-hover}"
    textColor: "{colors.ink}"
    typography: "{typography.chip}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 31px
  filter-dropdown:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.chip}"
    rounded: "{rounded.sm}"
    height: 35px
    border: "1px solid #dbdadee6"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 47px
    border: "1px solid #dbdadee6"
  search-bar:
    backgroundColor: "{colors.surface-search}"
    textColor: "{colors.ink-deep}"
    typography: "{typography.search}"
    rounded: "{rounded.pill}"
    padding: 0px 8px 0px 0px
    height: 56px
  shot-card:
    backgroundColor: "{colors.surface-placeholder}"
    textColor: "{colors.ink}"
    typography: "{typography.shot-meta}"
    rounded: "{rounded.md}"
  plan-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-deep}"
    typography: "{typography.body-sm-regular}"
    rounded: "{rounded.lg}"
    padding: 24px
  badge-pro:
    backgroundColor: "{colors.surface-placeholder}"
    textColor: "{colors.text-secondary}"
    typography: "{typography.badge-pro}"
    rounded: "{rounded.xs}"
    padding: 0px 5px
  badge-pink:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.badge-micro}"
    rounded: "{rounded.md}"
    padding: 5px 10px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-deep}"
    typography: "{typography.nav-link}"
    padding: 0px 16px
    height: 30px
  nav-link-hover:
    textColor: "{colors.text-subtle}"
    typography: "{typography.nav-link}"
  link-legal:
    textColor: "{colors.text-subtle}"
    typography: "{typography.stat}"
  link-legal-hover:
    textColor: "{colors.text-secondary}"
    typography: "{typography.stat}"
---

## Overview

Dribbble is a portfolio community and talent marketplace, and its interface is built to get out of the way of
the work. The homepage measured at 1280px is almost entirely white (`#ffffff` covers the overwhelming majority of
painted area) and almost entirely one typeface: Mona Sans accounts for every measured character on the page. The
colour of the UI is carried by the shots themselves — orange fintech mockups, violet icon sets, beige mascots,
monochrome branding boards — so the chrome stays in a narrow band of cool, slightly violet greys.

The ink is not black. Body and heading text is `#0d0c22`, a deep indigo-black, and the navigation uses an even
darker `#060318`. Secondary greys are tinted the same way (`#3a3546`, `#524b63`, `#6e6d7a`, `#7b7194`), which
gives the page a faintly purple, inky temperature instead of a neutral grey one.

The famous Dribbble pink, `#ea4c89`, is used sparingly and deliberately: the circular search button, the
highlighted rotating word in the hero headline ("web design / mobile design / motion…"), the "Most Popular" Pro
plan, uppercase "NEW" badges and the focus treatment. The main call to action is **not** pink — it is an ink pill
("Start Your Project Brief", "Log in", "Continue"). Pink means "Dribbble brand / upgrade", ink means "do the thing".

Key characteristics:
- White canvas, indigo-black ink `#0d0c22`, violet-grey secondary text.
- Pills everywhere: buttons, tag chips and the search bar are fully rounded (computed `1e+07px`).
- Mona Sans, weights 400–800 in use; hero 52px/600, interface text 14px/500.
- Shots in a three-column grid of 12px-radius thumbnails separated by 36px gaps, 72px page gutters.
- Hover is quiet: ink buttons lighten to `#3d3d4e`, chips tint to `#faf9fb`, nav links fade to `#7b7194`.
- Photographic / artwork-led — no illustrations of its own in the chrome, the community's work is the decoration.

Microcopy is direct and commercial: "Work with the world's best in web design", "Start Your Project Brief",
"Get more leads, win more work", "Get 20% off your first payment … Use code WELCOME20". Sentence case for body,
Title Case on primary buttons.

## Colors

### Brand & Accent
- **Dribbble Pink** (`#ea4c89`, `primary`): search button, hero highlight word, Pro "Get Started" button, `.badge2`
  badges, featured plan border. Shoelace token `--sl-color-primary-500` is set to `rgb(234 76 137)` on `:root`.
- **Pink Hover** (`#f76aa0`, `primary-hover`): measured hover background of the pink Pro button.
- **Pink Focus** (`#e44a85`, `primary-focus`): `--sl-color-primary-600` / `--sl-focus-ring-color` (`rgb(228 74 133)`).
- **Pink Tint** (`#ea4c891a`, `primary-tint`): the 10% pink used in the stylesheet's `0 0 0 4px rgba(234,76,137,0.1)` focus halo.

### Ink & Buttons
- **Ink** (`#0d0c22`, `ink`): most-read text colour on the homepage and the fill of the primary pill button.
- **Ink Hover** (`#3d3d4e`, `ink-hover`): hover fill and border of ink pills (also root var `--btn-border-color-hover`).
- **Ink Deep** (`#060318`, `ink-deep`): navigation links, search text, Pro page headings, dark Pro button.

### Text
- **Body** (`#3a3546`, `text-body`): secondary paragraph copy; the dominant text colour on long-form landing pages.
- **Secondary** (`#524b63`, `text-secondary`): Pro badge text, hover colour of legal links.
- **Muted** (`#6e6d7a`, `text-muted`): FAQ body copy on /pro, hover fill of the dark Pro button.
- **Subtle** (`#7b7194`, `text-subtle`): nav link hover (root var `--site-nav-link-hover-color`), legal links.
- **Quiet** (`#655c7a`, `text-quiet`): nav dropdown descriptions.

### Surface
- **Canvas** (`#ffffff`): page background, cards, chips, inputs.
- **Search Surface** (`#f3f3f6`): the 56px pill behind the home search field.
- **Placeholder** (`#ecebf0`): background of `drb-thumbnail` while an image loads; light Pro badge fill.
- **Hover Surface** (`#faf9fb`): chip and avatar-link hover fill.
- **Soft Band** (`#f8f8fc`): second most common background on /pro.
- **Grey 400** (`#9e9ea7`): avatar/image placeholder blocks in the hero collage.

### Borders
- **Hairline** (`#e7e7e9`): outlined pill buttons and tag chips.
- **Hairline Hover** (`#dbdbde`): outlined pill hover border.
- **Input Border** (`#dbdadee6`): login text input and the "Popular" filter dropdown.
- **Warm Border** (`#d8d6d5`) → **hover** (`#a1a1a1`): outlined "Get Started" on the Pro pricing cards.

### Semantic
The `:root` also carries Shoelace's success / warning / danger scales (e.g. `--sl-color-success-600:
hsl(142.1 76.2% 36.3%)`, `--sl-color-danger-600: hsl(0 72.2% 50.6%)`), but none of them is visible on the pages
measured, so no semantic colour tokens are declared here.

## Typography

### Font Family
Every measured element resolves to `"Mona Sans", "Helvetica Neue", Helvetica, Arial, sans-serif`. The browser
reports one loaded face, `Mona Sans 200 900 normal` — the variable font. Mona Sans is GitHub's open-source
grotesque made with Degarism, licensed SIL OFL 1.1, with weight 200–900, width 75–125%, italic and optical-size
axes ([github/mona-sans](https://github.com/github/mona-sans)). The Dribbble wordmark itself is a logo, not a font.

### Hierarchy

| Token | Size | Weight | Line height | Where |
|---|---|---|---|---|
| display-hero | 52px | 600 | 62.4px | Homepage h1 "Work with the world's best in …" |
| display-hero-mobile | 27px | 600 | 32.4px | Homepage h1 at 390px |
| display-pro | 48px | 600 | 57.6px, -0.2px | /pro h1 "Get more leads, win more work" |
| display-pro-mobile | 32px | 600 | 38.4px, -0.2px | /pro h1 at 390px |
| heading-landing | 42px | 600 | 42px | SEO landing h1 (/ux-ui-design-agency) |
| heading-lg | 32px | 600 | 41.6px | /pro h2 ("FAQ") |
| heading-md | 24px | 700 | 29px | Login "Welcome back" |
| heading-sm | 22px | 700 | — | Landing h2 sections |
| body | 16px | 400 | 28px | Document default |
| body-sm | 14px | 500 | 19.6px | Promo copy, the dominant UI size |
| body-sm-regular | 14px | 400 | 19.6px | FAQ answers on /pro |
| shot-meta | 14px | 500 | 17px | Shot titles and designer names |
| nav-link | 14px | 600 | 30px | Top nav "Explore", "Hire Talent" |
| button-lg | 14px | 700 | 14px | Hero CTA, Pro CTAs |
| button-md | 14px | 600 | 14px | Log in, Continue |
| button-sm | 13px | 600 | 13px | Landing-page CTAs |
| button-mobile | 13px | 700 | 13px | Hero CTA at 390px |
| button-xs | 12px | 700 | 12px | Outlined "Get Started" |
| chip | 12px | 400 | 12px | Popular tag chips |
| stat | 12px | 500 | 12px | Like / view counts |
| input | 16px | 400 | 16px | Login text input |
| search | 14px | 400 | 28px | Home search field |
| badge-pro | 9px | 800 | 20px | "PRO" badge, uppercase |
| badge-micro | 8px | 700 | 8px | `.badge2` "NEW", uppercase |

### Principles
- 14px is the workhorse: it carries 1,652 of 2,313 measured characters on the homepage.
- Medium (500) is the default reading weight, not 400; 600 for headings and nav, 700 for buttons, 800 only for the tiny PRO badge.
- Headlines are semibold and tight (line-height 1.2 on display, 1.0 on landing h1). Only the /pro display uses
  negative tracking (-0.2px); everything else is `letter-spacing: normal`.
- Uppercase is reserved for micro badges (8–9px).

### Note on Font Substitutes
No substitute is needed: Mona Sans is free under the SIL Open Font License from
[github/mona-sans](https://github.com/github/mona-sans). If it cannot be loaded, the site's own fallback stack is
`"Helvetica Neue", Helvetica, Arial, sans-serif`.

## Layout

### Spacing System
Measured gaps cluster at 8px (by far the most frequent), 4px, 12px, 6px and 16px; paddings at 12px, 16px, 24px
and 72px. The token set is therefore: 4 / 6 / 8 / 12 / 16 / 24 / 32px, plus three layout values — 36px grid gap,
40px nav gutter (`--site-nav-gutter: 40px`) and 72px page gutter (`--banner-gutter: 72px`, `.container2` padding
`0 72px`). Shoelace's spacing scale (`--sl-spacing-x-small .5rem` … `--sl-spacing-4x-large 4.5rem`) is also on `:root`.

### Grid & Container
- `.shot2-item-grid.container2--large-fill`: full-width, `padding: 0 72px`, three equal columns (≈355px each at
  1280px) with a 36px gap.
- Each `.shot2-item` is a thumbnail (4:3, 355×266) plus an 8px gap to a single metadata row (avatar, name, PRO badge,
  likes, views).
- Nav height token `--site-nav-height: 92px`; search height `--site-nav-search-height: 56px`.

### Whitespace Philosophy
Dense but orderly. The shot grid is tight (36px) so the eye scans a wall of work; whitespace is spent above the fold,
where the hero pairs a large two-line headline with a rounded product collage, then a single ink pill CTA.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| Flat | none | Almost everything — cards, buttons, thumbnails |
| Hairline lift | `rgba(6, 3, 24, 0.01) 0px 4px 4px 0px` | "Popular" filter dropdown (hover: 0.03) |
| Chip shadow | `rgba(0, 0, 0, 0.14) 0px 3px 6px 0px` | Floating designer chip on the hero collage |
| Floating | `rgba(123, 123, 198, 0.25) 0px 12px 20px 0px, rgba(0, 0, 0, 0.08) 0px 2px 3px 0px` | Violet-tinted hero floating element |
| Focus halo | `0 0 0 4px rgba(234,76,137,0.1)` | Pink focus glow (stylesheet) |

Depth is expressed by tint, not shadow: hovering surfaces lighten or darken a step rather than lift.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| xs | 4px | PRO badge |
| sm | 8px | Login input, filter dropdown, hero collage thumbnails |
| md | 12px | Shot thumbnails, search input, `.badge2` |
| lg | 16px | Pro plan cards |
| xl | 24px | Hero collage container |
| pill | 9999px | All buttons, tag chips, search bar |
| pill-computed | 1e+07px | The exact computed value the browser reports for those pills (stylesheet declares `9999999px`); identical rendering to `pill` |
| circle | 50% | Avatars, round pink search button |

### Imagery Geometry
Shots are always 4:3 crops with 12px corners, never bordered, never shadowed. Avatars are circles. The hero
collage uses a 24px-radius container with smaller 8px tiles framed by a 2px white border.

## Components

### Buttons
- **Primary (ink pill)**: `#0d0c22` fill, white 14px/700 text, `1px solid #0d0c22`, padding `0 24px`, 49px tall,
  pill. Hover → `#3d3d4e` fill and border. "Log in" and "Continue" are the same pill at 14px/600, 48px.
- **Pink pill**: `#ea4c89`, white 14px/700, padding `0 16px`, 47px, pill; hover → `#f76aa0`. Used for the Pro
  "Most Popular" plan and "Join the waitlist".
- **Secondary (outlined pill)**: white, `#0d0c22` 12px/700 text, `1px solid #e7e7e9`, padding `0 16px`, 32px; hover
  border → `#dbdbde`.
- **Outlined Pro pill**: white, `#060318` 14px/700, `1px solid #d8d6d5`, 47px; hover border `#a1a1a1`.
- **Dark Pro pill**: `#060318` fill, white text; hover fill `#6e6d7a`.
- Mobile: hero CTA becomes 13px/700, 40px tall, padding `0 20px`.

### Cards & Containers
- **Shot card** (`.shot2-item`): `drb-thumbnail` with `#ecebf0` placeholder, 12px radius, overlay title 14px/500
  white on hover, below it designer name 14px/500 `#0d0c22`, PRO badge, like/view counts 12px/500.
- **Plan card** (/pro): white, 16px radius, padding 24px (24px 24px 32px on featured), featured plan outlined in pink.

### Inputs & Forms
- **Text input** (login): white, 16px/400 `#0d0c22`, `1px solid #dbdadee6`, 8px radius, padding `0 16px`, 47px.
- **Search bar** (home): `.site-nav-search__wrapper` `#f3f3f6` pill 56px tall, Algolia Autocomplete input 14px/400
  `#060318` with 24px left padding, round pink submit button on the right.
- **Filter dropdown** ("Popular"): white, 8px radius, `1px solid #dbdadee6`, 35px tall; hover border `#9e9ea7` at 70%.

### Navigation
Logo left, four mega-menu triggers ("Explore", "Hire Talent", "Get Hired", "Community") at 14px/600 `#060318`
with `0 16px` padding, "Sign up" text link and ink "Log in" pill on the right. Hover fades links to `#7b7194`.
Dropdowns are white panels with icon + bold title + `#655c7a` description rows.

### Pills, Tags, and Chips
"Popular:" tag chips — white, 12px/400 `#0d0c22`, `1px solid #e7e7e9`, padding `0 16px`, 31px, pill; hover fill
`#faf9fb`.

### Badges
- **PRO**: `#ecebf0` fill, `#524b63` 9px/800 uppercase, 4px radius, padding `0 5px`, 20px tall (dark "PRO+" variant in capture).
- **Pink badge** (`.badge2`): `#ea4c89`, white 8px/700 uppercase, 12px radius, padding `5px 10px`.

### Signature Components
- Rotating hero word in pink inside a semibold black headline.
- Promo banner pill with a "Get Started" outlined chip and close [U+2715].
- Shots / Designers toggle tabs (`drb-toggle-tabs`) above the search bar.

### Footer
The homepage uses infinite scroll (`drb-infinite-scroll`); no footer element was reached in measurement, so no
footer tokens are declared.

## Design System Architecture

**Dribbble publishes no public design system.** The [media kit](https://dribbble.com/media-kit) covers only logo
downloads and usage rules, and the [2020 redesign story](https://dribbble.com/stories/2020/03/16/a-brand-new-dribbble)
says the site moved to "a uniform design system" and "a more streamlined color palette" without publishing tokens.
Searches for a Dribbble design-system site, GitHub token package or brand-colour page found nothing (queries in
SOURCES.json). What follows is the de-facto system, measured on the live site.

### Token architecture
Two token layers live on `:root`:
1. **Shoelace tokens (primitive + semantic)** — the open-source [Shoelace](https://shoelace.style/tokens/color)
   web-component library's `--sl-*` custom properties. Naming is `--sl-color-{name}-{50..950}`; theme tokens are
   `primary`, `success`, `warning`, `danger`, `neutral`. Dribbble re-themes the primary scale to its pink:
   `--sl-color-primary-500: rgb(234 76 137)`, `--sl-color-primary-600: rgb(228 74 133)`, `--sl-color-primary-800:
   rgb(155 50 91)`, and `--sl-input-border-color-focus: rgb(234 76 137)`. A dedicated `shoelace-overrides-*.css`
   bundle is loaded from `cdn.dribbble.com/assets/vite/assets/`.
2. **Dribbble component tokens** — short, un-prefixed variables: `--btn-bg-color: #0d0c22`, `--btn-text-color: #fff`,
   `--btn-border-color-hover: #3d3d4e`, `--btn-height: 40px`, `--btn-font-size: 13px`, `--btn-icon-size: 16px`,
   `--site-nav-height: 92px`, `--site-nav-gutter: 40px`, `--site-nav-link-hover-color: #7b7194`, `--banner-gutter: 72px`.
Third-party widgets bring their own namespaces: `--aa-*` (Algolia Autocomplete search), `--iti-*` (intl-tel-input).

### Theming
Shoelace scopes its light theme to `:root` and enables dark mode with a `.sl-theme-dark` class on `<html>`
([Shoelace themes](https://shoelace.style/getting-started/themes)). Dribbble ships only the light theme on the pages
measured; no dark mode, density mode or brand sub-theme was observed.

### Type & spacing systems
One family (Mona Sans variable). Sizes are hand-picked per surface rather than a modular ratio: 52 / 48 / 42 / 32 /
24 / 22 / 16 / 14 / 13 / 12 / 9 / 8px. Spacing inherits Shoelace's rem scale
([spacing tokens](https://shoelace.style/tokens/spacing): `--sl-spacing-x-small .5rem` = 8px …
`--sl-spacing-4x-large 4.5rem` = 72px), and 8px is the most frequent measured gap.

### Component model
Components are native **custom elements with a `drb-` prefix**, counted on the homepage: `drb-thumbnail`,
`drb-avatar`, `drb-shot-like`, `drb-shot-metadata`, `drb-tooltip`, `drb-dropdown`, `drb-dropdown-option`,
`drb-toggle-tabs`, `drb-infinite-scroll`, `drb-ab-test`. Styling uses BEM classes with a version suffix —
`.shot2-item`, `.shot2-item-thumbnail__title`, `.shot2-item-details__user-name`, `.container2--large-fill`,
`.badge2`, `.pro-badge--light` — signalling a second-generation component set running alongside legacy CSS
(`mini-master-async-*.css`). Buttons come in ink, pink, outlined and dark variants at 32 / 40 / 47–49px heights.

### Accessibility
Shoelace's focus ring tokens are kept: `--sl-focus-ring-width: 3px`, `--sl-focus-ring-offset: 1px`, colour =
primary-600 ([Shoelace focus tokens](https://shoelace.style/tokens/more)) — on Dribbble that resolves to pink
`rgb(228 74 133)`. Shot links carry visually-hidden `.accessibility-text` labels ("View …"). No published contrast
or touch-target policy exists. Note that pink `#ea4c89` with white text is a low-contrast pairing — keep it for
large/bold button labels only, as the site does.

### Delivery
Front-end assets are built with Vite (`/assets/vite/assets/application-*.js`) and served from `cdn.dribbble.com`.
No npm package, Figma kit or versioned release of the system is public.

## Do's and Don'ts

### Do
- Use `#0d0c22` ink pills for the primary action; lighten to `#3d3d4e` on hover.
- Keep pink `#ea4c89` for brand moments: search, Pro upgrades, badges, a highlighted headline word.
- Set everything in Mona Sans with 14px/500 as the default UI text.
- Round every button, chip and search field to a full pill.
- Present work as 4:3 thumbnails with 12px corners, three columns, 36px gaps, 72px gutters.
- Use violet-tinted greys (`#3a3546`, `#6e6d7a`, `#7b7194`) for secondary text.
- Signal hover with tint changes, not shadows.

### Don't
- Don't make the main CTA pink — the site's primary buttons are ink.
- Don't use pure black `#000000` for text; the ink is indigo-black.
- Don't add borders or drop shadows to shot thumbnails.
- Don't use square-cornered buttons; the only non-pill controls are the 8px input and dropdown.
- Don't mix in a second typeface for headings.
- Don't decorate the chrome with illustration — the community's shots are the visuals.

## Responsive Behavior

### Breakpoints
Measured at 1280px (desktop) and 390px (mobile). Exact CSS breakpoints were not extracted.

| Element | 1280px | 390px |
|---|---|---|
| Hero h1 | 52px / 600 / 62.4px | 27px / 600 / 32.4px |
| /pro h1 | 48px / 600 / 57.6px | 32px / 600 / 38.4px |
| Landing h1 | 42px / 600 / 42px | 32px / 600 / 42px |
| Hero CTA | 14px/700, 49px, `0 24px` | 13px/700, 40px, `0 20px` |
| UI text | 14px | 14px |

### Touch Targets
Primary pills are 47–49px on desktop and 40px on mobile; chips are 31px and outlined pills 32px — below 44px, so
give chips extra spacing on touch layouts.

### Collapsing Strategy
Mobile layout of the shot grid, nav and hero collage was not measured.

### Image Behavior
Thumbnails keep their 4:3 ratio and 12px radius at every width; `drb-thumbnail` shows `#ecebf0` until the image loads.

## Iteration Guide

1. Start with `canvas #ffffff`, `ink #0d0c22`, Mona Sans, and the pill radius — that alone reads as Dribbble.
2. Add the shot grid: 3 × 4:3 thumbnails, 12px radius, 36px gap, 72px side padding, 8px to the meta row.
3. Build the ink pill (`0 24px`, 48px, 14px/600–700) and its `#3d3d4e` hover before any other button.
4. Introduce pink `#ea4c89` in no more than one or two places per screen.
5. Use the 14px/500 body size for nearly all UI copy; reserve 52px/600 for a single hero headline.
6. Outline secondary pills with `#e7e7e9`; tint chip hovers to `#faf9fb`.
7. Check every value against this file — if a component is not listed here, it was not measured; don't invent it.
