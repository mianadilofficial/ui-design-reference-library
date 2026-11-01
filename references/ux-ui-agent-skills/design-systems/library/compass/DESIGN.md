---
version: alpha
name: Compass
category: "Real Estate & PropTech"
description: Compass (compass.com), the US real-estate brokerage, ships a monochrome system — black (#000000) pill CTAs and white (#ffffff) pages, full-bleed home photography, a self-hosted "Compass Serif" for hero display lines (48px/600 hero, 50px/400 section titles) over a self-hosted "Compass Sans" UI face (16px/400 body, 500 for buttons), Open Sans 12px for listing-card metadata, 9999px pill buttons, square 0px search tabs and 8px listing cards, all driven by --cx-* and --colorIntent-* CSS custom properties on an 8px base unit.

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  ink-body: "#171717"
  ink-deep: "#242424"
  ink-subtle: "#6c6c6c"
  neutral-deep: "#333333"
  surface-hover: "#f4f4f4"
  surface-tab: "#e8e8e8"
  border: "#dadada"
  border-strong: "#adadad"
  text-disabled: "#8d8d8d"
  on-dark-subtle: "#c9c9c9"
  scrim: "#00000099"
  critical: "#ae0917"
  success: "#3aac6f"
  highlight: "#ffbf00"
  interactive-blue: "#0064e5"
  listing-open-house: "#0049a8"
  listing-pending: "#d16614"

typography:
  display-hero:
    fontFamily: '"Compass Serif", Times, "Times New Roman", serif'
    fontSize: 48px
    fontWeight: 600
    lineHeight: 72px
  display-section:
    fontFamily: '"Compass Serif", Times, "Times New Roman", serif'
    fontSize: 50px
    fontWeight: 400
    lineHeight: 65px
  display-section-mobile:
    fontFamily: '"Compass Serif", Times, "Times New Roman", serif'
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44px
  display-hero-mobile:
    fontFamily: '"Compass Serif", Times, "Times New Roman", serif'
    fontSize: 28px
    fontWeight: 600
    lineHeight: 42px
  header-1:
    fontFamily: '"Compass Sans", Helvetica, Arial, sans-serif'
    fontSize: 36px
    fontWeight: 500
    lineHeight: 1.3
  header-3:
    fontFamily: '"Compass Sans", Helvetica, Arial, sans-serif'
    fontSize: 28px
    fontWeight: 500
    lineHeight: 1.3
  header-4:
    fontFamily: '"Compass Sans", Helvetica, Arial, sans-serif'
    fontSize: 24px
    fontWeight: 500
  results-title:
    fontFamily: '"Compass Sans", Helvetica, Arial, sans-serif'
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
  subheader-2:
    fontFamily: '"Compass Sans", Helvetica, Arial, sans-serif'
    fontSize: 18px
    fontWeight: 500
  button-lg:
    fontFamily: '"Compass Sans", Helvetica, Arial, sans-serif'
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
  body:
    fontFamily: '"Compass Sans", Helvetica, Arial, sans-serif'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: '"Compass Sans", Helvetica, Arial, sans-serif'
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20.8px
  body-sm:
    fontFamily: '"Compass Sans", Helvetica, Arial, sans-serif'
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  button-sm:
    fontFamily: '"Compass Sans", Helvetica, Arial, sans-serif'
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.2px
  caption-1:
    fontFamily: '"Open Sans", Helvetica, Arial, sans-serif'
    fontSize: 12px
    fontWeight: 400
    lineHeight: 1.3
  caption-1-strong:
    fontFamily: '"Open Sans", Helvetica, Arial, sans-serif'
    fontSize: 12px
    fontWeight: 600
    lineHeight: 1.3
  caption-2:
    fontFamily: '"Open Sans", Helvetica, Arial, sans-serif'
    fontSize: 10px
    fontWeight: 400
    lineHeight: 1.5

rounded:
  none: 0px
  sm: 4px
  card: 8px
  pill-selection: 19px
  hero-pill: 36px
  pill: 9999px

spacing:
  xs: 4px
  1x: 8px
  tab-x: 10px
  btn: 12px
  2x: 16px
  section-gap: 20px
  3x: 24px
  4x: 32px
  band: 40px
  band-lg: 48px
  section: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 47px
    border: "1px solid #000000"
  button-primary-sm:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 6px 16px
    height: 32px
    border: "1px solid #000000"
  button-inverse:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 47px
    border: "1px solid #ffffff"
  button-inverse-hover:
    opacity: 0.8
  button-hero-search:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.hero-pill}"
    padding: 12px 24px
    height: 53px
    border: "1px solid #ffffff"
  button-hero-search-hover:
    borderColor: "{colors.border}"
    opacity: 0.8
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-body}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 39px
    border: "1px solid #adadad"
  search-tab-active:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-deep}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.none}"
    padding: 8px
    height: 32px
    width: 80px
  search-tab:
    backgroundColor: "{colors.surface-tab}"
    textColor: "{colors.ink-deep}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.none}"
    padding: 8px
    height: 32px
    width: 80px
  search-tab-hover:
    backgroundColor: "{colors.surface-hover}"
    textColor: "{colors.ink}"
    borderColor: "{colors.ink}"
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-body}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 8px
    height: 48px
  nav:
    backgroundColor: transparent
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    height: 47px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    padding: 0px 24px 0px 16px
    height: 47px
  nav-link-hover:
    backgroundColor: "{colors.surface-hover}"
    textColor: "{colors.ink}"
  listing-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-body}"
    typography: "{typography.body}"
    rounded: "{rounded.card}"
    padding: 0px
    width: 312px
    height: 317px
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 3px 4px -1px, rgba(0, 0, 0, 0.14) 0px 2px 1px 0px, rgba(0, 0, 0, 0.06) 0px -1px 1px 0px"
  link:
    textColor: "{colors.ink-deep}"
    typography: "{typography.body-sm}"
    textDecoration: underline
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

Compass presents itself as a quiet, photography-first luxury brokerage. The homepage capture opens on a full-bleed
architectural photograph (a white shingle-style house against a deep evening-blue sky) that covers the full viewport
width, with the navigation laid transparently over it in white `{typography.body}` text. The hero headline
"See It First™ on Compass" is set in **Compass Serif** at 48px / weight 600 (`{typography.display-hero}`), with a
"Find more homes." sub-line in Compass Sans beneath it, then a square-cornered search widget: three 80px tabs
(Buy / Rent / Sell) sitting on top of a 48px white input with a black square search button on its right edge.

Below the hero, the page is a plain white (`{colors.canvas}` — `#ffffff`) canvas carrying a stack of full-width
"bands": a photographic promo card with a serif 50px title (`{typography.display-section}`) and a white
`36px`-radius pill ("Start your search"); a black (`#000000`) partner band ("Know your buying power…") with a
white pill CTA; a split before/after photo next to a black text panel ("Compass Concierge"); a 3×2 grid of
neighborhood photo tiles with underlined white labels; then a black pill "View More Neighborhoods" and a
four-column list of underlined city links.

The palette is almost entirely achromatic. Black is the action color (`{colors.primary}`), white is the page,
greys from `#171717` to `#f4f4f4` carry text and surfaces. Colour enters only through photography and through
a handful of functional tokens in the site's own CSS (critical red `#ae0917`, success green `#3aac6f`,
highlight yellow `#ffbf00`, interactive blue `#0064e5`, listing-status hues).

**Key Characteristics:**
- Monochrome UI: black pill buttons, white surfaces, grey hairlines; colour comes from the photography.
- Two in-house typefaces served as webfonts: "Compass Serif" (display, 400 and 600) and "Compass Sans" (UI, 400/500/700).
- Open Sans 12px for dense listing metadata (search results), per the site's `--cx-font-caption1Family` token.
- Pills everywhere for CTAs (`9999px`), but the search widget and its tabs are hard-edged (`0px`).
- Listing cards are the only rounded-rectangle containers: `8px` radius with a three-layer soft shadow.
- Hover is subtle: pills drop to `opacity: 0.8`; tabs and nav items flip to `#f4f4f4` with black text.
- A strict 8px base unit (`--cx-baseUnit: 8px`) with named 1x–4x spacing steps.

## Colors

> **Source pages:** homepage `https://www.compass.com/` and search results `https://www.compass.com/homes-for-sale/new-york-ny/`
> (both measured with the extractor). Token names in parentheses are the site's own CSS custom properties.

### Brand & Action
- **Black** (`{colors.primary}` — `#000000`): filled pill CTAs ("View More Neighborhoods", "Save Search"), the hero
  search button, the partner and Concierge bands. Also `--cx-color-actionable` and `--colorIntent-indicatorBackground`.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): label colour on black; also nav text over the hero photo.
- **Neutral Deep** (`{colors.neutral-deep}` — `#333333`): `--colorIntent-actionPressed` / `--cx-color-grey100`; the pressed state of black actions.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): the page background (`--colorIntent-background`).
- **Surface Hover** (`{colors.surface-hover}` — `#f4f4f4`): hover fill of nav items and search tabs (`--cx-color-grey20`, `--colorIntent-actionableInvertedBackgroundHover`).
- **Surface Tab** (`{colors.surface-tab}` — `#e8e8e8`): the inactive search tab fill (`--cx-color-grey30`, `--cx-color-selectedBackground`).
- **Scrim** (`{colors.scrim}` — `#00000099`): a 60% black overlay measured over hero/tile photography.

### Text
- **Ink** (`{colors.ink}` — `#000000`): body text colour on the homepage (`body` computed colour), footer text, section headings on white.
- **Ink Body** (`{colors.ink-body}` — `#171717`): `--colorIntent-textBody` / `--colorIntent-textTitle`; listing-card text and search input text.
- **Ink Deep** (`{colors.ink-deep}` — `#242424`): search-tab labels and `--colorIntent-textLink`.
- **Ink Subtle** (`{colors.ink-subtle}` — `#6c6c6c`): `--cx-color-textSubtle`; secondary listing text on the search page.
- **Text Disabled** (`{colors.text-disabled}` — `#8d8d8d`): `--colorIntent-formElementTextDisabled`.
- **On Dark Subtle** (`{colors.on-dark-subtle}` — `#c9c9c9`): `--cx-color-onDarkTextSubtle`.

### Lines
- **Border** (`{colors.border}` — `#dadada`): `--cx-color-border` / `--colorIntent-formElementBorder`; also the hover border of the white hero pill.
- **Border Strong** (`{colors.border-strong}` — `#adadad`): 1px outline of the secondary pill ("Get early access") on the search page.

### Semantic & Status (from the site's CSS tokens)
- **Critical** (`{colors.critical}` — `#ae0917`): `--cx-color-critical`, `--colorIntent-textError`.
- **Success** (`{colors.success}` — `#3aac6f`): `--cx-color-success`.
- **Highlight** (`{colors.highlight}` — `#ffbf00`): `--colorIntent-backgroundHighlighted`, saved map pins.
- **Interactive Blue** (`{colors.interactive-blue}` — `#0064e5`): `--cx-color-blue80`; the `0 0 2px 2px #0064e5` focus ring in the stylesheet and `--cx-color-onDarkLink`.
- **Listing Open House** (`{colors.listing-open-house}` — `#0049a8`) and **Listing Pending** (`{colors.listing-pending}` — `#d16614`): listing-status tokens (`--cx-color-listingOpenHouse`, `--cx-color-listingPending`).

## Typography

### Font Family
The site loads four faces (measured `document.fonts`): **Compass Sans** 400/500 (700 on the search page),
**Compass Serif** 400/600, plus **Open Sans** 400/600 and Roboto 400 on the search page. Compass Sans carries
almost all text (4,595 weighted characters vs 69 for Compass Serif on the homepage). Compass Serif is reserved for
the hero and section display lines. Open Sans appears where the site's tokens call for "legible" small text
(`--cx-font-familyLegible: "Open Sans",Helvetica,Arial,sans-serif`), i.e. listing-card captions.

### Hierarchy

| Token | Family | Size | Weight | Line height | Use |
|---|---|---|---|---|---|
| `{typography.display-section}` | Compass Serif | 50px | 400 | 65px | Promo band title |
| `{typography.display-hero}` | Compass Serif | 48px | 600 | 72px | Homepage h1 |
| `{typography.display-section-mobile}` | Compass Serif | 40px | 400 | 44px | Promo band title at 390px |
| `{typography.header-1}` | Compass Sans | 36px | 500 | 1.3 | `--cx-font-sizeHeader1` |
| `{typography.display-hero-mobile}` | Compass Serif | 28px | 600 | 42px | h1 at 390px |
| `{typography.header-3}` | Compass Sans | 28px | 500 | 1.3 | `--cx-font-sizeHeader3` |
| `{typography.header-4}` | Compass Sans | 24px | 500 | — | `--cx-font-header4Size` |
| `{typography.results-title}` | Compass Sans | 24px | 500 | 36px | Search results h1 |
| `{typography.subheader-2}` | Compass Sans | 18px | 500 | — | `--cx-font-subheader2Size` |
| `{typography.button-lg}` | Compass Sans | 18px | 500 | 27px | "Start your search" pill |
| `{typography.body}` | Compass Sans | 16px | 400 | 24px | Body, nav, footer |
| `{typography.button}` | Compass Sans | 16px | 500 | 20.8px | Pill labels |
| `{typography.body-sm}` | Compass Sans | 14px | 400 | 18.2px | Paragraph copy, disclaimers |
| `{typography.button-sm}` | Compass Sans | 14px | 500 | 18.2px | Search tabs, compact pill |
| `{typography.caption-1}` | Open Sans | 12px | 400 | 1.3 | Listing metadata |
| `{typography.caption-1-strong}` | Open Sans | 12px | 600 | 1.3 | Listing metadata emphasis |
| `{typography.caption-2}` | Open Sans | 10px | 400 | 1.5 | Fine print |

Line heights written as unitless ratios (1.3, 1.5) are the site's own `--cx-font-*LineHeight` and shorthand tokens
(e.g. `--cx-font-shorthandXs: 400 12px/1.3 "Open Sans"`). Pixel line heights are computed values measured on elements.
Where neither was measured, the field is omitted. No letter-spacing is applied on the homepage (all `normal`).

### Principles
- **Serif for the promise, sans for the product.** Only marketing headlines use Compass Serif; every control,
  label and listing uses Compass Sans or Open Sans.
- **Weight 500 is the emphasis weight** (`--cx-font-weightMedium: 500`): buttons, tabs, headers.
- **Body is 16px/24px**, paragraphs inside bands drop to 14px/18.2px.
- **Tracking stays `normal`** on the homepage; do not add negative letter-spacing to the serif.

### Note on Font Substitutes
Compass Sans and Compass Serif are served from Compass's own stylesheet as `@font-face` families; no public
Compass source we found names their designer or offers them for licence. The declared fallbacks in the site's
own stacks are `Helvetica, Arial, sans-serif` and `Times, "Times New Roman", serif` — use those stacks verbatim
when the brand faces are unavailable. (Any closer-looking third-party typeface would be our choice, not Compass's.)

## Layout

### Spacing System
- **Base unit:** `--cx-baseUnit: 8px`, with named steps `--cx-spacing-1x: 8px`, `--cx-spacing-2x: 16px`,
  `--cx-spacing-3x: 24px`, `--cx-spacing-4x: 32px` and `--cx-spacing-gutter: 24px`.
- **Tokens:** `{spacing.xs}` 4px · `{spacing.1x}` 8px · `{spacing.tab-x}` 10px · `{spacing.btn}` 12px · `{spacing.2x}` 16px ·
  `{spacing.section-gap}` 20px · `{spacing.3x}` 24px · `{spacing.4x}` 32px · `{spacing.band}` 40px · `{spacing.band-lg}` 48px · `{spacing.section}` 64px.
- **Measured paddings (homepage, by frequency):** 24px, 8px, 10px, 16px, 40px, 12px, 64px, 48px.
- **Measured gaps:** 24px, 20px, 64px. Search results: 4px (dominant), 10px, 16px, 24px.

### Grid & Container
- The site declares `--cx-fixedPageWidth: 1170px`, `--cx-fixedElementWidth: 770px`, `--containerWidth--lg: 888px`
  and `--containerWidth--xxl: 1560px`.
- In the 1280px capture, all bands below the hero share the same left/right inset; the hero photo and the
  nav run full-bleed.
- Neighborhood tiles form a 3-column grid; city links form a 4-column list.
- Search results: listing cards measured at 312×317px in a multi-column grid next to a map.

### Whitespace Philosophy
Bands are separated by generous white gaps (the capture shows roughly equal spacing between each band), and
each band is a single idea: one headline, one sentence, one pill. Density goes up only on the search page,
where 12px Open Sans and 4px gaps pack listing data tightly.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | All homepage bands, buttons, tabs, input |
| 1 | `rgba(0, 0, 0, 0.4) 0px 1px 2px 0px` (search page) / `--cx-dropShadow: 0 1px 2px #0006` | Small floating chrome |
| 2 | `rgba(0, 0, 0, 0.1) 0px 3px 4px -1px, rgba(0, 0, 0, 0.14) 0px 2px 1px 0px, rgba(0, 0, 0, 0.06) 0px -1px 1px 0px` | Listing cards |
| 3 | `--cx-popover-shadow: 0px 0px 8px 2px #0003` | Popovers |
| 4 | `rgba(0, 0, 0, 0.2) 0px 11px 15px -7px, rgba(0, 0, 0, 0.14) 0px 24px 38px 3px, rgba(0, 0, 0, 0.12) 0px 9px 46px 8px` | Modal-level surface (search page) |

### Decorative Depth
Depth on the marketing page comes from photography and from black bands, not from shadows. A 60% black scrim
(`#00000099`) is measured over photographic areas so white text stays legible.

### Focus
The stylesheet defines `--cx-focus-shadow: 0px 0px 3px #000` and a blue ring `0 0 2px 2px #0064e5`
(`0 0 2px 2px var(--cx-color-interactive)`).

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Search tabs, search input, search button, nav items, bands |
| `{rounded.sm}` | 4px | `--cx-borderRadius` / `--cx-spacing-borderRadius`; small controls |
| `{rounded.card}` | 8px | Listing cards and photo bands |
| `{rounded.pill-selection}` | 19px | `--cx-pillSelection-borderRadius` (32px-tall selection pills) |
| `{rounded.hero-pill}` | 36px | "Start your search" (53px tall, reads as a pill) |
| `{rounded.pill}` | 9999px | All black/white CTA pills |

No clip-paths, skews or notches were measured. The only non-rectangular shape in the UI is the pill.

### Photography Geometry
Photography is full-bleed in the hero, then inset in rectangular bands; neighborhood tiles are short landscape
crops with the place name underlined in white at the lower left.

## Components

### Buttons

**`button-primary`** — black pill.
- Background `{colors.primary}` (#000000), text `{colors.on-primary}`, `{typography.button}` (16px/500),
  padding 12px 24px, height 47px, radius `{rounded.pill}` 9999px, border 1px solid #000000.
- Measured on "View More Neighborhoods" (with a trailing → arrow icon).

**`button-primary-sm`** — compact black pill ("Save Search" on search results).
- 14px/500 (`{typography.button-sm}`), padding 6px 16px, height 32px, radius 9999px.

**`button-inverse`** — white pill on black or photo bands ("See What I Qualify For", "Learn More").
- Background `{colors.canvas}`, text `{colors.primary}`, 16px/500, padding 12px 24px, height 47px, border 1px solid #ffffff.
- Hover (`button-inverse-hover`): `opacity` 1 → 0.8 (measured).

**`button-hero-search`** — "Start your search".
- White, black 18px/500 text (`{typography.button-lg}`), padding 12px 24px, height 53px, radius 36px.
- Hover: border #ffffff → #dadada and opacity 0.8 (measured).

**`button-secondary`** — outlined pill ("Get early access", search page).
- White background, `{colors.ink-body}` text, 1px solid #adadad, padding 8px 16px, height 39px, radius 9999px.

### Search Widget
**`search-tab-active` / `search-tab`** — 80×32px tabs, 14px/500 labels in `#242424`, padding 8px, radius 0.
Active tab is white; inactive tabs are `#e8e8e8`. Hover (measured): background → `#f4f4f4`, text and border → `#000000`.

**`search-input`** — white, `#171717` 16px text, padding 8px, height 48px, radius 0, placeholder
"City, Neighborhood, Address, School, ZIP, Agent, MLS #". A black square search button with a white magnifier
abuts it on the right (capture).

### Navigation
**`nav`** — transparent header, 47px tall (`--navHeight: 48px` in CSS), white 16px/400 links over the hero image,
COMPASS wordmark left, links right ("Buy, Rent, Sell, Compass Exclusives ⌄, New Development ⌄, Agents ⌄"),
a thin divider, then "Register/Sign In".
- Link padding 0 24px 0 16px. Hover (measured): background `#f4f4f4`, text `#000000`.
- On the search page the same header renders `#171717` text on white.

### Cards
**`listing-card`** — search results.
- White, `#171717` text, radius 8px, padding 0 (photo bleeds to edges), 312×317px, Level 2 shadow.
- Content (measured text): photo carousel counter ("1/13"), uppercase badge ("SEE IT FIRST", "COMPASS COMING SOON"),
  price ("$675,000"), bed/bath counts, address — metadata in Open Sans 12px.

### Links
**`link`** — city and neighborhood links are underlined; text link colour token is `--colorIntent-textLink: #242424`
with `--cx-color-linkActive: #000`.

### Footer
**`footer`** — white background, black 16px text, multi-column link groups ("Company: About Us, Team, Sales Leadership,
Investors, Join as an …"). Measured 1067px tall on the homepage.

## Design System Architecture

Compass has **no public design system**, brand portal or token package that we could find. Searches run:
"Compass real estate design system "Compass Sans" typeface", "Compass brokerage brand guidelines logo color typography press kit",
"compass.com "cx" UI kit design system npm", "Compass real estate rebrand logo wordmark designer Compass Serif custom font";
the newsroom (https://www.compass.com/newsroom/) was opened and has no media kit or brand-asset link.
Everything below is the de-facto system readable from the live CSS custom properties on https://www.compass.com/.

- **Token architecture (as shipped in CSS):** two visible tiers.
  - Primitive palette with a `--cx-color-` prefix and numeric ramps: `--cx-color-grey10` … `--cx-color-grey120`,
    `--cx-color-blue30` … `--cx-color-blue120`, `--cx-color-red20` … `--cx-color-red90`, plus named hues
    (`--cx-color-citrus`, `--cx-color-mint`, `--cx-color-aqua`).
  - Role tokens also under `--cx-color-` (`--cx-color-actionable`, `--cx-color-textSubtle`, `--cx-color-borderFocused`,
    `--cx-color-onDarkTextStrong`) and a fully semantic `--colorIntent-` layer named surface→element→property→state:
    `--colorIntent-actionableFilledBackgroundHover`, `--colorIntent-formElementBorderActive`,
    `--colorIntent-tableRowTextSelected`, `--colorIntent-mapPinBackgroundActive`.
  - Component-scoped tokens: `--cx-btn-sidePadding--sm: 16px`, `--cx-btn-sidePadding--xs: 8px`,
    `--cx-pillSelection-height: 32px`, `--cx-token-borderRadius: 2em`, `--cx-react-table-rowStripe: #f4f4f4`.
- **Theming:** the CSS carries explicit on-dark tokens (`--cx-color-onDarkLink`, `--cx-color-onDarkTextSubtle`,
  `--colorIntent-textBrightBackgroundDark`) rather than a switched dark mode; no dark-mode media query or theme
  class was observed in our measurement.
- **Type system:** named roles header1–4, subheader1–2, title1–2, body1–2, callout, caption1–2, each split into
  Family/Size/Weight/LineHeight variables (e.g. `--cx-font-sizeHeader1: 36px`, `--cx-font-header1Weight: 500`,
  `--cx-font-header1LineHeight: 1.3`) and shorthand font tokens (`--cx-font-shorthandBody: 400 16px/1.5 "Compass Sans",…`).
  A parallel t-shirt scale exists (`--cx-font-sizeXs: 12px`, `--cx-font-sizeSm: 14px`, `--cx-font-sizeLg: 18px`,
  `--cx-font-size2xl: 24px`, `--cx-font-size6xl: 50px`, `--cx-font-size8xl: 72px`).
- **Spacing & grid:** `--cx-baseUnit: 8px` with `--cx-spacing-1x…4x`; widths `--cx-fixedPageWidth: 1170px`;
  breakpoints exposed as numbers `--cx-mq-mobile: 360`, `--cx-mq-smallMobile: 320`.
- **Component model (inferred only from token names, not documented):** button, pill selection, token/chip,
  avatar, flyout menu, popover, check block, form field with dropdown caret, react-table, map pin, indicator badge.
- **Accessibility:** no published rules. The CSS ships focus treatments (`--cx-focus-shadow: 0px 0px 3px #000`,
  blue `0 0 2px 2px #0064e5` ring).
- **Delivery:** not public; tokens are delivered as CSS custom properties on `:root`. Motion tokens:
  `--cx-transitionProperty: border-color,background,box-shadow,color,fill`, `--cx-transitionTimingFn: cubic-bezier(0.6,0.02,0.4,1)`.

## Do's and Don'ts

### Do
- Use black `#000000` pills for the one primary action per band; switch to the white inverse pill on black or photo bands.
- Set hero and promo headlines in Compass Serif (48px/600 hero, 50px/400 section) and everything else in Compass Sans.
- Keep the search widget square: 0px tabs, 0px input, black square submit button.
- Let photography supply colour; keep UI chrome black, white and grey.
- Use 8px-radius cards with the three-layer shadow only for listings.
- Use Open Sans 12px for dense listing metadata, as the site does.
- Hover pills by fading to 0.8 opacity; hover tabs and nav items to `#f4f4f4` with black text.

### Don't
- Don't introduce a coloured brand accent for buttons — the action colour is black.
- Don't round the search tabs or input.
- Don't put Compass Serif on buttons, labels or listing data.
- Don't add letter-spacing; tracking is `normal` throughout.
- Don't add drop shadows to marketing bands; depth there is photographic.
- Don't use the status colours (`#ae0917`, `#3aac6f`, `#ffbf00`, `#0064e5`) decoratively.

## Responsive Behavior

### Breakpoints
The site exposes `--cx-mq-mobile: 360` and `--cx-mq-smallMobile: 320`. We measured at 1280px and 390px.

| Width | Measured change |
|---|---|
| 1280px | h1 48px/600 (72px line), section title 50px/400 (65px), nav 16px |
| 390px | h1 28px/600 (42px line), section title 40px/400 (44px), nav text 14px/21px, first CTA is the white "See What I Qualify For" pill |

### Touch Targets
Measured CTA heights: 47px (standard pills), 53px (hero pill), 48px (search input), 39px (secondary pill),
32px (search tabs and compact pill).

### Collapsing Strategy
- Headline sizes step down (48→28, 50→40) while weights stay the same.
- Mobile body copy remains 14px/18.2px (measured).
- The mobile type distribution is dominated by 14px text (most-read size at 390px).

### Image Behavior
Hero photography stays full-bleed at both widths; the white wordmark and text sit over a dark scrim.

## Iteration Guide

1. Start every screen with white `{colors.canvas}` and black `{colors.ink}`; add photography before adding colour.
2. One black `button-primary` per band; on dark/photo bands use `button-inverse`.
3. Headlines: `{typography.display-hero}` for the page's h1, `{typography.display-section}` for promo bands; drop to the `-mobile` tokens at 390px.
4. Controls: `{typography.button}` (16px/500) for pills, `{typography.button-sm}` (14px/500) for tabs and compact pills.
5. Listings: `listing-card` with `{rounded.card}` 8px and the Level 2 shadow, metadata in `{typography.caption-1}`.
6. Spacing on the 8px grid: 8 / 16 / 24 / 32, with 40 / 48 / 64 for bands.
7. Reuse the site's semantic token names (`--colorIntent-*`) when naming new tokens.
8. Verify any new value against a live Compass page before adding it to this file.
