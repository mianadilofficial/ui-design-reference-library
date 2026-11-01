---
version: alpha
name: Nintendo
category: "Gaming"
description: "Nintendo of America's nintendo.com (US) storefront and marketing site: a bright white #ffffff canvas, #484848 grey ink, and Nintendo Red #e60012 owning every filled CTA, link hover, footer link and the racetrack logo tile. Every text role is set in Geologica Variable (OFL, by Monokrom) at only two weights, 300 and 600, with font-variation-settings \"CRSV\" 1. Primary buttons are 48px-tall 8px-radius red rectangles (0px 24px padding, 18px/600 labels); cards are white with 1px #dadada borders and 12px radii; small #4b5cce pill tags label offers."
colors:
  primary: "#e60012"
  primary-hover: "#ac000d"
  primary-light: "#fde6e7"
  on-primary: "#ffffff"
  secondary: "#3946a0"
  secondary-hover: "#2a3477"
  secondary-light: "#bdc3e8"
  canvas: "#ffffff"
  bg-accent: "#f8f8f8"
  light-gray-3: "#efefef"
  line: "#dadada"
  light-gray-1: "#c8c8c8"
  dark-gray-4: "#969696"
  ink-mute: "#727272"
  ink: "#484848"
  ink-strong: "#242424"
  black: "#000000"
  scrim-dark: "#00000099"
  tag-blue: "#4b5cce"
  tag-violet: "#9531b9"
  tag-green: "#2d8513"
  alert-success-bg: "#e1f7d6"
  alert-warning-bg: "#fffbb1"
  alert-warning-icon: "#bea000"
  alert-attention-bg: "#e8ebfc"
  product-cream: "#faf7dc"
typography:
  h1-large:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 38px
    fontWeight: 600
    lineHeight: 51.3px
  h1-small:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 28px
    fontWeight: 600
    lineHeight: 37.8px
  h1-mobile:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 21px
    fontWeight: 600
    lineHeight: 29.4px
  h2:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 21px
    fontWeight: 600
    lineHeight: 29.4px
  promo-lg:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  h3:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 25.2px
  button-lg:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 25.2px
  title:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22.4px
  button-md:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22.4px
  body:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 22.4px
  button-outline:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  body-mobile:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 19.6px
  label-sm:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 14px
    fontWeight: 600
  tag:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 19px
  legal:
    fontFamily: "\"Geologica Variable\", -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 16.8px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  round: 16px
  search: 20px
  pill-btn: 48px
  circle: 50%
spacing:
  s2: 2px
  s4: 4px
  s8: 8px
  s12: 12px
  s16: 16px
  s20: 20px
  s24: 24px
  s32: 32px
  s40: 40px
  s48: 48px
  s64: 64px
  s96: 96px
  s128: 128px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.md}"
    padding: 0px 24px
    height: 48px
  button-primary-mobile:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.sm}"
    padding: 0px 24px
    height: 48px
  button-pill-shortcut:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.pill-btn}"
    padding: 0px 16px
    height: 40px
  button-secondary:
    backgroundColor: "transparent"
    textColor: "{colors.primary}"
    border: "1px solid #e60012"
    typography: "{typography.button-outline}"
    rounded: "{rounded.search}"
    padding: 6px 12px
    height: 30px
  button-search:
    backgroundColor: "{colors.bg-accent}"
    textColor: "{colors.ink}"
    typography: "{typography.label-sm}"
    rounded: "{rounded.search}"
    padding: 8px 12px
    height: 32px
  button-search-hover:
    textColor: "{colors.primary}"
  chip-platform:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid #dadada"
    rounded: "{rounded.md}"
    height: 44px
  chip-platform-hover:
    backgroundColor: "{colors.bg-accent}"
  tag-description:
    backgroundColor: "{colors.tag-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.tag}"
    rounded: "{rounded.lg}"
    padding: 0px 8px
    height: 19px
  card-product:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid #dadada"
    typography: "{typography.title}"
    rounded: "{rounded.lg}"
    padding: 16px 0px 0px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    textDecoration: underline
    rounded: "{rounded.xs}"
  link-hover:
    textColor: "{colors.primary-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 60px
  nav-link-hover:
    textColor: "{colors.primary}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.title}"
  footer-legal-bar:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.on-primary}"
    typography: "{typography.legal}"
---

## Overview

Nintendo's US site (`www.nintendo.com/us/`) is a games catalog first and a brand billboard second. The measured
page is overwhelmingly white: `{colors.canvas}` `#ffffff` is the body background, the header background and the
background of every product card, and the capture shows it filling everything between full-bleed key art. Against that
white, a single saturated red does almost all of the signalling work — Nintendo Red `{colors.primary}` `#e60012`.

Red appears in exactly the places a shopper acts: the racetrack "Nintendo" logo tile at top-left of the header, the
filled "Learn more" / "Start shopping" / "See all news articles" buttons, the outlined "Log in / Sign up" pill, every
nav label on hover, all footer link labels, the full-width red band that holds the footer logo, the red rule beside each
platform label on product cards, and the red halves of composite promo banners (Nintendo Today!, Nintendo Store,
Gaming systems). Everything else is a ladder of neutral greys.

Text is a warm-neutral mid grey, never black: `{colors.ink}` `#484848` carries 8,096 of the ~10,000 measured characters
on the homepage, and the site's own token for it is `--theme-colors-text-standard: #484848`. Headlines on store pages
step darker to `{colors.ink-strong}` `#242424`; secondary text drops to `{colors.ink-mute}` `#727272`.

The single typeface is **Geologica Variable** (served by nintendo.com from Google's open-source Geologica family), used
at only two weights: 300 (`--theme-font-weight-light`) for running text and 600 (`--theme-font-weight-bold`) for every
headline, button, card title and link label. A global `font-variation-settings: "CRSV" 1` turns on Geologica's cursive
axis, which gives letters like `a`, `l` and `y` their softer, rounded endings — a large part of why the site feels
friendly rather than corporate.

Imagery does the emotional work. The hero is an edge-to-edge game key-art panel (Fire Emblem: Fortune's Weave in the
capture) with the Nintendo Switch 2 red badge pinned top-left, followed by a thumbnail strip of video/screenshot chips,
an ESRB rating block, and then content shelves: "Featured" (a horizontally scrolling row of product cards), "Nintendo
Today!", "Online store", "Gaming systems". Each shelf has a 28px/600 grey heading, a large rounded banner, a 21px
promo sentence and a red button on the right.

**Key Characteristics:**
- White canvas `#ffffff`, grey ink `#484848`, one action color `#e60012`.
- Geologica Variable everywhere, weights 300 and 600 only, `"CRSV" 1` cursive axis on.
- Primary buttons are red rectangles: 48px tall, 8px radius, `0px 24px` padding, 18px/600 white label.
- Product cards: white, 1px `#dadada` border, 12px radius on the image top and card bottom, 16px content inset.
- Small blue `#4b5cce` pill tags ("Pre-purchase now", "Learn more", "Pre-order now") on cards.
- Neutral hover language: nav labels, the search button and the logo turn red on hover; inline links turn `#ac000d`.
- Full-bleed key art and composite red/photo promo banners provide all color besides red.

## Colors

> Source: `desktop.rootVars` of `www.nintendo.com/us/` — the site ships a complete theme as CSS custom properties
> (`--theme-name: "Nintendo Light Theme"`, `--theme-slug: nintendo-light-theme`). Token names below quote those
> variables; every hex is measured.

### Brand & Accent
- **Nintendo Red** (`{colors.primary}` — `#e60012`): `--theme-color-primary`, `--theme-colors-button-background-primary`,
  `--theme-colors-text-link`, `--theme-colors-ui-accent`, `--theme-colors-icon-primary`, `--theme-colors-alert-errorIcon`.
  Filled CTAs, outlined CTA stroke and label, logo tile, footer logo band, footer links, nav hover.
- **Primary Hover** (`{colors.primary-hover}` — `#ac000d`): `--theme-color-primaryHover` and
  `--theme-colors-button-background-primaryHover`. Measured as the hover color of underlined inline text links
  ("Restrictions apply", "fun rewards") on the store pages.
- **Primary Light** (`{colors.primary-light}` — `#fde6e7`): `--theme-color-primaryLight`, a pale red tint.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): `--theme-colors-button-content-primary`, label on red.
- **Secondary** (`{colors.secondary}` — `#3946a0`): `--theme-color-secondary`, also `--theme-color-focus`,
  `--theme-colors-button-background-secondary` and `--theme-colors-button-stroke-quaternary`. An indigo used for focus
  and for secondary/quaternary buttons; it was not seen as a filled button on the measured pages (a `#3946a0` fill
  appears in a small area on the games page).
- **Secondary Hover** (`{colors.secondary-hover}` — `#2a3477`) and **Secondary Light** (`{colors.secondary-light}` —
  `#bdc3e8`): `--theme-color-secondaryHover`, `--theme-color-secondaryLight`.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): `--theme-colors-ui-bgMain`. Body, header, cards, footer link area.
- **Background Accent** (`{colors.bg-accent}` — `#f8f8f8`): `--theme-colors-ui-bgAccent` / `--theme-color-lightGray4`.
  Search button fill; platform chip hover fill.
- **Light Gray 3** (`{colors.light-gray-3}` — `#efefef`): `--theme-color-lightGray3`; the games page filter panel and
  `--theme-colors-button-background-quaternaryHover`.
- **Line** (`{colors.line}` — `#dadada`): `--theme-colors-ui-line` / `--theme-color-lightGray2`. Card borders, the
  horizontal rules between homepage shelves, platform-chip borders, and `--theme-colors-button-background-disabled`.
- **Light Gray 1** (`{colors.light-gray-1}` — `#c8c8c8`): `--theme-color-lightGray1`; the grey carousel-arrow panel
  at the right edge of the Featured shelf (second-largest background area on the homepage).
- **Ink Strong** (`{colors.ink-strong}` — `#242424`): `--theme-color-darkGray1`; footer legal bar.
- **Scrim** (`{colors.scrim-dark}` — `#00000099`): `--theme-scrim-dark: rgba(0,0,0,.6)`; translucent cards over
  product key art.
- **Product Cream** (`{colors.product-cream}` — `#faf7dc`): measured on the Tears of the Kingdom product page as the
  heading/body text color over its dark themed sections — product pages adopt per-game palettes.

### Text
- **Ink** (`{colors.ink}` — `#484848`): `--theme-colors-text-standard`, `--theme-color-darkGray2`. Body, headings, nav.
- **Ink Strong** (`{colors.ink-strong}` — `#242424`): store-page h1/h2 ("Games", "Explore by genre").
- **Ink Mute** (`{colors.ink-mute}` — `#727272`): `--theme-color-darkGray3`; secondary text (495 chars on home).
- **Dark Gray 4** (`{colors.dark-gray-4}` — `#969696`): `--theme-color-darkGray4`; used in 1px box-shadow outlines.
- **Black** (`{colors.black}` — `#000000`): `--theme-color-black`.

### Semantic (alerts and tags)
- **Tag Blue** (`{colors.tag-blue}` — `#4b5cce`): `--theme-colors-descriptionTag-blue`; the card offer tags.
- **Tag Violet** (`{colors.tag-violet}` — `#9531b9`) and **Tag Green** (`{colors.tag-green}` — `#2d8513`):
  `--theme-colors-descriptionTag-violet`, `--theme-colors-descriptionTag-green` (green is also
  `--theme-colors-alert-successIcon`). Tag red and tag charcoal reuse `#e60012` and `#484848`.
- **Success Bg** (`{colors.alert-success-bg}` — `#e1f7d6`), **Warning Bg** (`{colors.alert-warning-bg}` — `#fffbb1`),
  **Warning Icon** (`{colors.alert-warning-icon}` — `#bea000`), **Attention Bg** (`{colors.alert-attention-bg}` —
  `#e8ebfc`, icon `#3946a0`): the `--theme-colors-alert-*` set. Alert text is `--theme-colors-alert-text: #484848`.
  These alert tokens are defined in the site CSS; no alert was visible on the measured pages.

## Typography

### Font Family
Every element on every measured page computes to `"Geologica Variable", -apple-system, "system-ui", sans-serif`
(the theme variable reads `--theme-font-family: "Geologica Variable",-apple-system,"BlinkMacSystemFont",sans-serif`).
The loaded face is `Geologica Variable 100 900 normal`. Geologica is an open-source family (SIL OFL) by Monokrom,
Sindre Bremnes and Frode Helland, on Google Fonts since 2023-04-12, with axes CRSV 0–1, SHRP 0–100, slnt −12–0 and
wght 100–900 ([google/fonts METADATA](https://raw.githubusercontent.com/google/fonts/main/ofl/geologica/METADATA.pb)).

nintendo.com sets `font-variation-settings: "CRSV" 1` on body (`--theme-font-variation-settings`). Reproduce it —
without the cursive axis Geologica looks noticeably more rigid than the live site.

Weights: only **300** and **600** are used for content (`--theme-font-weight-light`, `--theme-font-weight-bold`).
The one exception measured is the outlined "Log in / Sign up" button at 400. Rich-text emphasis is done with child
`<strong>`/`<span>` at 600 inside 300 paragraphs (e.g. the 21px promo sentences and the footer link labels).
The global `--theme-font-lineHeight` is 1.4: body and small text measure 1.4 × size (16 → 22.4px, 12 → 16.8px),
while the 28px and 38px headings measure 1.35 × size (37.8px, 51.3px).

### Hierarchy

| Token | Size | Weight | Line height | Measured on | Theme variable |
|---|---|---|---|---|---|
| `{typography.h1-large}` | 38px | 600 | 51.3px | Games page h1 "Games" | `--theme-font-size-h1LDesktop` 2.375rem |
| `{typography.h1-small}` | 28px | 600 | 37.8px | Homepage h1/h2, shelf headings ("Featured") | `--theme-font-size-h1SDesktop` 1.75rem |
| `{typography.h1-mobile}` | 21px | 600 | 29.4px | Homepage h1 at 390px | `--theme-font-size-h1SMobile` 1.3125rem |
| `{typography.h2}` | 21px | 600 | 29.4px | Promo sentences, platform shelf labels | `--theme-font-size-h2Desktop` 1.3125rem |
| `{typography.promo-lg}` | 20px | 600 | 28px | Store promo copy | — |
| `{typography.h3}` | 18px | 600 | 25.2px | Product-page h3, footer column headings | `--theme-font-size-h3Desktop` 1.125rem |
| `{typography.button-lg}` | 18px | 600 | 25.2px | Primary red button label | — |
| `{typography.title}` | 16px | 600 | 22.4px | Card titles (h3), footer link labels | `--theme-font-size-titleDesktop` 1rem |
| `{typography.button-md}` | 16px | 600 | 22.4px | Pill shortcut buttons, mobile CTA | — |
| `{typography.body}` | 16px | 300 | 22.4px | Body paragraphs, nav, links | `--theme-font-size-bodyDesktop` 1rem |
| `{typography.button-outline}` | 16px | 400 | 16px | "Log in / Sign up" | — |
| `{typography.body-mobile}` | 14px | 300 | 19.6px | Body at 390px | `--theme-font-size-bodyMobile` 0.875rem |
| `{typography.label-sm}` | 14px | 600 | — | Search button label | `--theme-font-size-captionDesktop` 0.875rem |
| `{typography.tag}` | 12px | 600 | 19px | Description tags | — |
| `{typography.legal}` | 12px | 300 | 16.8px | Legal copy, footer copyright | `--theme-font-size-legalDesktop` 0.75rem |

The hidden homepage h1 ("Nintendo.com home") is visually hidden with `clip-path: inset(50%)` but computes to the same
28px/600 as the visible shelf headings, so `{typography.h1-small}` covers it.

### Principles
- **Two weights, no more.** Headlines and actions at 600, reading text at 300. Don't introduce 400/500/700.
- **Grey, not black.** Text is `#484848`; only store-page headings step to `#242424`.
- **No tracking, no uppercase.** Letter-spacing computes to `normal` everywhere; text-transform is `none`; buttons
  are sentence case ("Start shopping", "Learn more").
- **Size steps are small.** The scale is 12 / 14 / 16 / 18 / 21 / 28 / 38 — headings rely on weight and white space
  more than size.

### Note on Font Substitutes
Geologica is not proprietary: it is free under the OFL and available from Google Fonts / Fontsource as "Geologica".
Load it directly with the CRSV axis enabled. The site's own fallback stack is `-apple-system, BlinkMacSystemFont,
sans-serif`.

## Layout

### Spacing System
The theme exposes a rem-based spacing scale named by pixel value (`--theme-spacing-2` … `--theme-spacing-128`):
2, 4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 44, 48, 64, 80, 96, 112, 128px. The frontmatter keeps the steps that recur
in measured gaps/paddings:

- `{spacing.s2}` 2px · `{spacing.s4}` 4px · `{spacing.s8}` 8px · `{spacing.s12}` 12px · `{spacing.s16}` 16px ·
  `{spacing.s20}` 20px · `{spacing.s24}` 24px · `{spacing.s32}` 32px · `{spacing.s40}` 40px · `{spacing.s48}` 48px ·
  `{spacing.s64}` 64px · `{spacing.s96}` 96px · `{spacing.s128}` 128px.
- Most frequent padding: 16px (328 weighted hits) — card content inset and gutters.
- Most frequent gap: 32px (between cards in a shelf), then 8px, 16px, 12px.

### Grid & Container
- `--theme-page-maxWidth: 90rem` (1440px) for full pages and `--theme-page-slimMaxWidth: 71.5rem` (1144px) for slim
  content; the games page h2 measures exactly 1144px wide.
- In the 1280px capture, the hero key art runs edge to edge; shelf content sits in an inset column (shelf headings
  start ~51px in at 960px capture scale).
- Featured shelf: four ~262px product cards visible with a fifth peeking and a grey `#c8c8c8` arrow panel on the right —
  a horizontal carousel rather than a wrapping grid.
- Promo shelves: one wide rounded banner (red block + art), then a two-column row — 21px/600 promo text left,
  red button right — then optional 12px legal copy.

### Whitespace Philosophy
Shelves are separated by thin `#dadada` rules and generous vertical space; inside a shelf, elements are close
(heading → banner → text). The density is that of a store: many items per screen, but each product card has air
around its image.

## Elevation & Depth

| Level | Treatment (measured) | Use |
|---|---|---|
| 0 | none | Almost everything: cards use a 1px `#dadada` border, not a shadow |
| 1 | `rgba(0, 0, 0, 0.07) 0px 2px 8px 0px` | Small floating UI on all store pages |
| 2 | `rgba(72, 72, 72, 0.15) 0px 4px 16px 0px` | Homepage raised elements (12 weighted hits) |
| 2-alt | `rgba(0, 0, 0, 0.1) 0px 4px 16px 0px` | Store page variant |

Depth otherwise comes from imagery: key art, translucent `#00000099` cards over game art on product pages, and the
`--theme-scrim-dark` / `--theme-scrim-light` (`rgba(0,0,0,.6)` / `hsla(0,0%,100%,.6)`) overlays.

### Motion
The theme publishes motion tokens as CSS variables: `--theme-movement-duration: 200ms`, `--theme-movement-easing:
ease-in-out`, `--theme-movement-delay: 25ms`, and spring presets such as
`--theme-animation-horizontal-standardBounce-stiffness: 284` / `-damping: 19`. It also declares
`--theme-animation-button-hover-scaleX: 1.05` and `--theme-animation-button-tap-scaleX: 0.99`. In a hover probe on the
homepage "Start shopping" button the computed `transform` stayed `none` and the background stayed `#e60012`, so the
scale preset was not observed in effect there.

## Shapes

### Border Radius Scale

| Token | Value | Measured use |
|---|---|---|
| `{rounded.xs}` | 4px | Inline text links (focus box), small elements |
| `{rounded.sm}` | 6px | Primary CTA at mobile width (`--border-radius-small` 0.375rem) |
| `{rounded.md}` | 8px | Primary CTA on desktop (`--border-radius` 0.5rem), platform chips |
| `{rounded.lg}` | 12px | Product cards (`12px 12px 0 0` image, `0 0 12px 12px` body), promo banners, tags |
| `{rounded.round}` | 16px | `--theme-borderRadiusRound` 1rem |
| `{rounded.search}` | 20px | Search button and outlined "Log in / Sign up" |
| `{rounded.pill-btn}` | 48px | Games-page shortcut buttons (40px tall → fully rounded) |
| `{rounded.circle}` | 50% | Circular thumbnails/controls on product pages |

### Other shape details
- Platform labels on product cards ("Nintendo Switch 2") carry a red left rule; the measured `0px 2px 2px 0px` radius
  belongs to that small bar.
- The Nintendo Store banner uses a jagged, zig-zag edge between its red block and the hatched grey icon area (visible
  in the capture; it is artwork, not a CSS clip-path).
- The header logo is a red rectangle tile flush with the top-left corner, holding the white racetrack wordmark.

## Components

### Buttons

**`button-primary`** — the red action button.
- Background `{colors.primary}` `#e60012`, label `{colors.on-primary}` `#ffffff`, `{typography.button-lg}` 18px/600,
  padding `0px 24px`, height 48px, radius `{rounded.md}` 8px, no border, no shadow.
- Hover (probed): background stays `#e60012`, transform stays `none`. The theme defines
  `--theme-colors-button-background-primaryHover: #ac000d`, but it was not observed on this button.
- At 390px: `button-primary-mobile` — 16px/600 label, radius `{rounded.sm}` 6px, height 48px, full width (358px).

**`button-pill-shortcut`** — games-page category shortcuts ("New releases", "Coming soon", "Best sellers").
- `{colors.primary}` fill, white `{typography.button-md}` 16px/600, padding `0px 16px`, height 40px, radius 48px.

**`button-secondary`** — the outlined "Log in / Sign up" button in the header (the theme's "tertiary" button:
`--theme-colors-button-background-tertiary: #fff`, `--theme-colors-button-content-tertiary: #e60012`,
`--theme-colors-button-stroke-tertiary: #e60012`).
- Transparent fill, `{colors.primary}` text and 1px `#e60012` border, `{typography.button-outline}` 16px/400/16px,
  padding `6px 12px`, height 30px, radius `{rounded.search}` 20px, with a red person icon before the label.

**`button-search`** — header search trigger.
- `{colors.bg-accent}` `#f8f8f8` fill, `{colors.ink}` text, `{typography.label-sm}` 14px/600, padding `8px 12px`,
  height 32px, radius 20px. Hover: text and icon turn `{colors.primary}`, fill unchanged.

### Chips & Tags

**`tag-description`** — offer tags on product cards.
- `{colors.tag-blue}` `#4b5cce` fill, white `{typography.tag}` 12px/600/19px, padding `0px 8px`, height 19px,
  radius `{rounded.lg}` 12px. Sentence-case labels: "Pre-purchase now", "Learn more", "Pre-order now".
- Theme variants: violet `#9531b9`, green `#2d8513`, red `#e60012`, charcoal `#484848`, all with white text
  (`--theme-colors-descriptionTag-text: #fff`).

**`chip-platform`** — platform selector on product pages ("Nintendo Switch 2", "Upgrade Pack").
- White fill, `{colors.ink}` text, 1px `#dadada` border, radius 8px, height 44px. Hover: fill `#f8f8f8`.

### Cards

**`card-product`** — the Featured shelf card.
- White, 1px `{colors.line}` `#dadada` border; image area radius `12px 12px 0 0`, body radius `0 0 12px 12px`.
- Body padding `16px 0px 0px` (text inset ~12px horizontally in the capture); title `{typography.title}` 16px/600
  `#484848`, clamped to two lines with an ellipsis; then a `tag-description`; then the platform label in 12px with a
  red left rule.
- Card width measured at 262px; 32px gap between cards.

**Promo banner** — the large rounded (12px) banners of "Nintendo Today!", "Online store" and "Gaming systems":
red `#e60012` block with white type or icons on one side, art or a hatched grey pattern on the other.

### Navigation

**`nav`** — white header, 60px tall (`--theme-nav-desktop-height: 59px` plus the rule), logo tile 132px wide
(`--theme-nav-desktop-logo-width`).
- Left: red logo tile, then "Explore", "Shop", "Support" as 16px/300 `#484848` labels each with a red icon.
- Right: search button, wishlist heart, cart, outlined login, US flag locale.
- Hover (measured): label color and border color go `#484848` → `#e60012`; background unchanged.

### Links

**`link`** — inline links in body copy are `#484848`, `{typography.body}`, underlined, radius 4px.
- Hover (measured on store pages): color → `{colors.primary-hover}` `#ac000d`, underline kept.

### Footer

**`footer`** — three bands (probed):
1. A full-width `#e60012` band with the white racetrack logo centered.
2. A white link area in four columns separated by thin vertical rules: column headings 18px/600 `#484848`
   ("About Nintendo", "Shop", "Orders", "Support", "Parents", "Privacy", "Community", "Documents and policies"),
   links 16px/600 `#e60012` (anchor 300, label span 600), social icons in grey, CARU COPPA badge right.
3. A `{colors.ink-strong}` `#242424` legal bar: `{typography.legal}` 12px/300 white copyright left, "Contact us",
   "Website feedback", "Terms of Use" and the locale switcher right.

## Design System Architecture

Nintendo publishes **no public design system**: no documentation site, token package or Figma kit was found in four
searches (recorded in SOURCES.json). The only first-party statement located is a Nintendo of America job posting
(relisted at [jobs.anitab.org](https://jobs.anitab.org/companies/nintendo-of-america/jobs/77713501-engineer-ux-ntd))
for an engineer who "Develops the React component library and evangelizes it to the broader organization" and
"Ensures the component library follows company guidelines and is WCAG 2.0 compliant." So an internal React component
library exists, with WCAG 2.0 as its stated accessibility target; its name, inventory and packaging are not public.

What is measurable is the theme that www.nintendo.com ships as CSS custom properties on `:root`:

- **Theme identity.** `--theme-name: "Nintendo Light Theme"`, `--theme-slug: nintendo-light-theme`,
  `--theme-description: "This is the default theme used on nintendo.com"`, `--theme-category: "General"`,
  `--theme-status: approved`. The naming implies the theme is one of several selectable themes; only this light theme
  was observed.
- **Token tiers.** A primitive layer (`--theme-color-primary`, `--theme-color-darkGray1…4`,
  `--theme-color-lightGray1…4`, `--theme-color-secondary`) and a semantic/component layer that points roles at those
  values (`--theme-colors-text-standard`, `--theme-colors-ui-line`, `--theme-colors-ui-bgAccent`,
  `--theme-colors-button-background-primary`, `--theme-colors-button-content-tertiary`,
  `--theme-colors-descriptionTag-blue`, `--theme-colors-alert-warningBg`). Naming is
  `--theme-{group}-{category}-{role}{State}` in camelCase (`primaryHover`, `quaternarySelected`, `ghostFocus`).
- **Button variants** visible in the token names: primary, secondary, tertiary, quaternary, ghost, disabled —
  each with background / content / stroke slots and Hover/Selected/Focus states.
- **Type system.** Size tokens per role and breakpoint: `h1L`, `h1S`, `h2`, `h3`, `h4`, `title`, `body`, `caption`,
  `legal`, each with `Desktop` and `Mobile` values (e.g. `--theme-font-size-h1SDesktop: 1.75rem`,
  `--theme-font-size-h1SMobile: 1.3125rem`); one line height (`--theme-font-lineHeight: 1.4`); two weights.
- **Spacing.** rem steps named by pixel value: `--theme-spacing-4: 0.25rem` … `--theme-spacing-128: 8rem`
  (mostly a 4px grid).
- **Motion.** Spring presets (`standardBounce`, `fastBounce`, `gentleBounce`, `standardEase`, `fastEase`) for
  horizontal and vertical movement, each with `-type: spring`, `-stiffness`, `-damping`, plus button hover/tap
  scale tokens.
- **Accessibility signals.** `--theme-color-focus: #3946a0` (indigo focus color distinct from the red brand),
  visually hidden but present h1 per page, "Skip to main content" link as the first body text.
- **Delivery.** Not public. The site also loads a third-party chat widget whose `--quiq-*` variables share `:root`;
  they are not part of the Nintendo theme.

## Do's and Don'ts

### Do
- Use `#ffffff` as the page and card background and `#484848` for text.
- Reserve `#e60012` for actions and brand moments: filled buttons, outlined login, footer links, logo tile, hover.
- Set all type in Geologica Variable with `font-variation-settings: "CRSV" 1`, at 300 or 600 only.
- Build primary buttons exactly: 48px tall, 8px radius, `0px 24px`, 18px/600 white on red.
- Give product cards a 1px `#dadada` border and 12px corners, with the image flush to the top.
- Use blue `#4b5cce` 12px/600 pill tags for offer states on cards.
- Turn nav labels and icon buttons red on hover; turn underlined inline links `#ac000d`.
- Let key art run full-bleed; let product pages adopt the game's own palette (e.g. `#faf7dc` on Zelda).

### Don't
- Don't use pure black text or a dark page theme for the main site.
- Don't add a second accent color for CTAs; indigo `#3946a0` is for focus and secondary roles.
- Don't use 400/500/700 weights for content or add letter-spacing / uppercase to buttons.
- Don't put drop shadows on cards; borders do the separation.
- Don't round primary rectangular buttons into pills on desktop — only the 40px games-page shortcuts are fully round.
- Don't set body text larger than 16px or headings larger than 38px; the scale is compact.

## Responsive Behavior

### Breakpoints
Exact breakpoints were not measured; the extraction compares 1280px desktop against a 390px mobile viewport.

| Property | Desktop (1280px) | Mobile (390px) |
|---|---|---|
| h1 | 28px / 600 / 37.8px | 21px / 600 / 29.4px |
| Hero h2 | 28px / 600 | 18px / 600 / 25.2px (white over art) |
| Body | 16px / 300 / 22.4px | 14px / 300 / 19.6px |
| Primary CTA | 18px label, 8px radius, 48px tall, auto width | 16px label, 6px radius, 48px tall, 358px (full width) |
| Header | 60px, full nav | 46px, logo + icons |
| Most-used text size | 16px | 14px; legal drops to 10px (`--theme-font-size-legalMobile` 0.625rem) |

### Touch Targets
Primary CTAs keep their 48px height on mobile. The header search button (32px) and login pill (30px) are below
44px on desktop.

### Collapsing Strategy
- Theme type tokens switch from `*Desktop` to `*Mobile` values (h1S 1.75 → 1.3125rem, body 1 → 0.875rem).
- On mobile the hero headline sits in white over the key art instead of grey below it.
- CTAs go full width; product shelves remain horizontal scrollers.

### Image Behavior
Hero key art is cropped edge-to-edge at every width; card images keep a fixed aspect inside the 12px-radius top.

## Iteration Guide

1. Start with tokens: white canvas, `#484848` ink, `#e60012` primary, `#dadada` lines, Geologica Variable 300/600.
2. Build `button-primary` first and check it against the measurements: 48px, 8px radius, `0px 24px`, 18px/600.
3. Build `card-product` next (border, 12px corners, 16px title, blue tag, red-ruled platform label).
4. Compose shelves: 28px/600 heading, rounded banner, 21px/600 promo line, red button right, `#dadada` rule between.
5. Add hover states only as measured: nav red, search red text, links `#ac000d`, platform chips `#f8f8f8`.
6. When a value is not listed here, it was not measured — measure the live page rather than inventing one.
7. Keep the theme variable names (`--theme-colors-*`, `--theme-spacing-*`) when exporting to CSS so the system maps
   one-to-one onto nintendo.com's own tokens.
