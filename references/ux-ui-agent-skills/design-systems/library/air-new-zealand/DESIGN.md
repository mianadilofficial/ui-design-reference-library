---
version: alpha
name: Air New Zealand
category: "Airlines"
description: "Air New Zealand's web system, built on its 'Unison' design system — black #000000 header and footer around white content, teal #008392 for actions and links (hover #00626e), Air New Zealand Sans (Klim's Söhne) at 17px/400 for body with 700 headings, the hero typeface Newzald Black Italic (served as 'airnewzald') for headlines and fares, a #262429 booking panel with #19181b fields, 8px action radius and round 222px fare roundels."

colors:
  primary: "#008392"
  primary-hover: "#00626e"
  teal-on-dark: "#2dbfd0"
  teal-on-dark-hover: "#4bd0e0"
  teal-highlight: "#4cd6e6"
  canvas: "#ffffff"
  ink: "#000000"
  header: "#000000"
  panel: "#262429"
  field: "#19181b"
  field-border: "#4f4d56"
  on-dark: "#ffffff"
  on-panel: "#f8f7f8"
  ink-muted: "#767676"
  ink-subtle: "#898989"
  grey-50: "#bebcc2"
  grey-60: "#64616b"
  grey-40: "#d7d7db"
  grey-30: "#ededee"
  search-border: "#bbbbbb"
  roundel: "#000000e0"
  roundel-hover: "#000000c7"
  koru-purple: "#440099"
  new-tag: "#981d97"
  error: "#d4002b"
  success: "#007f2a"
  loyalty-gold: "#e5c98a"

typography:
  h1:
    fontFamily: "\"Air New Zealand Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 52.8px
  h1-mobile:
    fontFamily: "\"Air New Zealand Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 41px
    fontWeight: 700
    lineHeight: 49.2px
  hero-headline:
    fontFamily: "airnewzald, \"Air New Zealand Sans\", Georgia, serif"
    fontSize: 50.16px
    fontWeight: 700
    lineHeight: 50.16px
    letterSpacing: -0.88px
  fare-price:
    fontFamily: "airnewzald, \"Air New Zealand Sans\", Georgia, serif"
    fontSize: 74.1px
    fontWeight: 700
    lineHeight: 74.1px
    letterSpacing: -1.3px
  fare-title:
    fontFamily: "airnewzald, \"Air New Zealand Sans\", Georgia, serif"
    fontSize: 30.78px
    fontWeight: 700
    lineHeight: 30.78px
    letterSpacing: -0.54px
  heading-lg:
    fontFamily: "\"Air New Zealand Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 27px
    fontWeight: 700
    lineHeight: 32.4px
  heading-lg-light:
    fontFamily: "\"Air New Zealand Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 27px
    fontWeight: 400
    lineHeight: 40.5px
  heading-md:
    fontFamily: "\"Air New Zealand Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 26.4px
  panel-title:
    fontFamily: "\"Air New Zealand Sans\", airNewZealandSans, \"Helvetica Neue\", Arial"
    fontSize: 20.928px
    fontWeight: 500
    lineHeight: 26.7878px
  body:
    fontFamily: "\"Air New Zealand Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25.5px
  body-tight:
    fontFamily: "\"Air New Zealand Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 20.4px
  body-bold:
    fontFamily: "\"Air New Zealand Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 17px
    fontWeight: 700
    lineHeight: 22.1px
  button:
    fontFamily: "\"Air New Zealand Sans\", airNewZealandSans, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16.96px
    fontWeight: 400
    lineHeight: 20.352px
  button-signup:
    fontFamily: "\"Air New Zealand Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 22.1px
  panel-link:
    fontFamily: "\"Air New Zealand Sans\", airNewZealandSans, \"Helvetica Neue\", Arial"
    fontSize: 16.96px
    fontWeight: 400
    lineHeight: 21.7088px
  label:
    fontFamily: "\"Air New Zealand Sans\", airNewZealandSans, \"Helvetica Neue\", Arial"
    fontSize: 15.04px
    fontWeight: 500
    lineHeight: 18.048px
  small:
    fontFamily: "\"Air New Zealand Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 19.5px
  caption:
    fontFamily: "\"Air New Zealand Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  micro:
    fontFamily: "\"Air New Zealand Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 11.2px
    fontWeight: 400
    lineHeight: 16.8px

rounded:
  xs: 3px
  sm: 4px
  action-small: 6px
  action: 8px
  focus: 10px
  lg: 12px
  bubble: 100px
  circle: 50%

spacing:
  base25: 2px
  base50: 4px
  base75: 6px
  base100: 8px
  base125: 10px
  base150: 12px
  base200: 16px
  base250: 20px
  base300: 24px
  base400: 32px
  base500: 40px
  base600: 48px
  base800: 64px
  base1000: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-dark}"
    borderColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.action}"
    padding: 10px 16px
    height: 48px
  button-signup:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button-signup}"
    rounded: "{rounded.sm}"
    padding: 10px 20px
    height: 44px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  link-hover:
    textColor: "{colors.primary-hover}"
    typography: "{typography.body}"
  link-on-dark:
    textColor: "{colors.teal-on-dark}"
    typography: "{typography.panel-link}"
  link-on-dark-hover:
    textColor: "{colors.teal-on-dark-hover}"
    typography: "{typography.panel-link}"
  booking-panel:
    backgroundColor: "{colors.panel}"
    textColor: "{colors.on-panel}"
    typography: "{typography.panel-title}"
  field-on-dark:
    backgroundColor: "{colors.field}"
    textColor: "{colors.on-panel}"
    borderColor: "{colors.field-border}"
    typography: "{typography.button}"
    rounded: "{rounded.action-small}"
    padding: 12px
    height: 48px
  search-input:
    textColor: "{colors.on-dark}"
    borderColor: "{colors.search-border}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 5px 5px 5px 40px
    height: 38px
  fare-roundel:
    backgroundColor: "{colors.roundel}"
    textColor: "{colors.on-dark}"
    typography: "{typography.fare-title}"
    rounded: "{rounded.circle}"
    padding: 20px 5px 0px
    height: 222px
  fare-roundel-hover:
    backgroundColor: "{colors.roundel-hover}"
    textColor: "{colors.on-dark}"
    rounded: "{rounded.circle}"
  card-story:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-tight}"
  nav:
    backgroundColor: "{colors.header}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body}"
    padding: 0px 20px
    height: 100px
  nav-link-hover:
    textColor: "{colors.teal-highlight}"
  footer:
    backgroundColor: "{colors.header}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body}"
    padding: 0px 80px
---

## Overview

Air New Zealand's homepage is a black frame around a postcard. The capture shows a pure-black header —
the italic AIR NEW ZEALAND logotype with the koru, a menu row (Plan · Book · Fly · Koru · Help), an
outlined search box and teal utility links (Manage Booking · Check In · Sign in). Below it a
full-bleed landscape — Aoraki/Mount Cook's glaciers and golden tussock — carries the headline
"It's prime time for a trip" in a heavy serif italic, a countdown ("Hurry, Sale ends in: 28:10:00"),
and four translucent black **fare roundels** ("Los Angeles to Auckland, from $915*") that look like
stamped travel badges. A charcoal "Book your trip" panel overlaps the photo bottom: a segmented
Return / One-way / Multi-city control, dark fields and a teal "Continue" button.

Under the hero the page is white, editorial and black-on-white: photo cards (a Business Premier
seat, an Expedia hotel, a vineyard lunch, the Koru purple promo) with 22px bold titles, 17px copy and
underlined teal "See more" links; a "Sign up to Special Offers" strip; "We're here to help" with
line icons; then a black footer.

The typography is the signature. Klim Type Foundry, which drew the logotype, describes the palette:
"Air New Zealand Sans (Söhne) with Newzald Black Italic functioning as a 'hero' typeface across all
communication channels, used for a single word or phrase"
([Klim — The Air New Zealand logotype](https://klim.co.nz/blog/airnz/)). On the site Newzald appears
as the `airnewzald` 700-italic face in the hero headline and the fare roundels; everything else is
Söhne-based Air New Zealand Sans.

**Key Characteristics:**
- Black (`#000000`) header and footer; white content; ink `#000000`.
- One action colour: teal `#008392` (Unison `teal80`) for buttons and links; hover `#00626e`.
- Lighter teals (`#2dbfd0`, `#4cd6e6`) for links and hover on dark surfaces.
- Hero serif italic (`airnewzald` 700) with negative tracking for headlines and prices.
- 17px body (not 16) — Air New Zealand Sans 400, 1.5 line height.
- Round, translucent fare roundels (222px, `rgba(0,0,0,.88)`).
- Charcoal booking panel `#262429` with `#19181b` fields and `#4f4d56` borders.
- `--unison-*` token system: colour ramps, fluid type with `clamp()`, semantic spacing, radii by role.

## Colors

> Source: `web/data/extracted/air-new-zealand.json` (https://www.airnewzealand.com/). Names in brackets are the site's own `--unison-*` variables.

### Action
- **Teal** (`{colors.primary}` — `#008392`, `--unison-colors-teal80`): Continue, Sign up, "See more" links (153 chars).
- **Teal Hover** (`{colors.primary-hover}` — `#00626e`): measured hover of "See more".
- **Teal on dark** (`{colors.teal-on-dark}` — `#2dbfd0`, `--unison-colors-teal50`): panel links "Manage booking ↗", "Check-in ↗"; hover `#4bd0e0` (`--unison-colors-teal40`, measured).
- **Teal highlight** (`{colors.teal-highlight}` — `#4cd6e6`): measured hover of header nav links; "See More" in roundels.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`, 7,930 area).
- **Header / footer** (`{colors.header}` — `#000000`, `--unison-colors-koru-black`).
- **Panel** (`{colors.panel}` — `#262429`, `--unison-colors-black80`): booking panel.
- **Field** (`{colors.field}` — `#19181b`, `--unison-colors-black90`), border `#4f4d56` (`--unison-colors-black70`).
- **Roundel** (`{colors.roundel}` — `rgba(0,0,0,.88)` → `#000000e0`); hover `rgba(0,0,0,.78)` → `#000000c7` (measured).

### Text
- **Ink** (`{colors.ink}` — `#000000`): 1,827 chars, the most-read colour.
- **On dark** `#ffffff`; **on panel** `#f8f7f8` (`--unison-colors-black20`).
- **Muted** `#767676` (image credits), **subtle** `#898989` (copyright), `#bebcc2` (`black50`).
- **"New" tag** `#981d97` (measured on "New" label).

### Neutral ramp (`--unison-colors-black*`)
`black10 #FFFFFF` · `black20 #F8F7F8` · `black30 #EDEDEE` · `black40 #D7D7DB` · `black50 #BEBCC2` · `black60 #64616B` · `black70 #4F4D56` · `black80 #262429` · `black90 #19181B` · `black100 #000000` — note the numbering runs light → dark and every grey leans faintly violet.

### Semantic & loyalty
- Error `#d4002b` (`red80`), success `#007f2a` (`green90`).
- Koru purple `#440099` (`--unison-colors-loyalty-club`), gold `#e5c98a` (`--unison-colors-loyalty-gold`); also `koru-bronze #D38244`, `koru-silver #C5D1E3`, `koru-gold #D4BD75`, `koru-platinum #A39383`.

## Typography

### Font Family
- **Air New Zealand Sans** — served as `"Air New Zealand Sans"` (regular, 500, 700); default stack `--unison-fonts-default-font-stack: "Air New Zealand Sans", "airNewZealandSans", "Helvetica Neue", Arial`. Klim identifies it as Söhne.
- **airnewzald** — the hero face (loaded `700 italic`), i.e. Newzald Black Italic per Klim.
- Locale stacks for zh-Hans, zh-Hant (TW/HK) and ja are tokenised (`--unison-fonts-ja-font-stack` …).

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Measured on |
|---|---|---|---|---|---|---|
| `{typography.fare-price}` | airnewzald | 74.1px | 700 | 74.1px | -1.3px | "$915" |
| `{typography.hero-headline}` | airnewzald | 50.16px | 700 | 50.16px | -0.88px | "It's prime time for a trip" (span) |
| `{typography.h1}` | ANZ Sans | 44px | 700 | 52.8px | — | h1 element (desktop) |
| `{typography.h1-mobile}` | ANZ Sans | 41px | 700 | 49.2px | — | h1 at 390px |
| `{typography.fare-title}` | airnewzald | 30.78px | 700 | 30.78px | -0.54px | "Los Angeles to Auckland" |
| `{typography.heading-lg}` | ANZ Sans | 27px | 700 | 32.4px | — | "We're here to help" |
| `{typography.heading-lg-light}` | ANZ Sans | 27px | 400 | 40.5px | — | "Sign up to Special Offers" |
| `{typography.heading-md}` | ANZ Sans | 22px | 700 | 26.4px | — | card titles |
| `{typography.panel-title}` | ANZ Sans | 20.928px | 500 | 26.7878px | — | "Book your trip" |
| `{typography.body}` | ANZ Sans | 17px | 400 | 25.5px | — | body root (2,165 chars) |
| `{typography.body-tight}` | ANZ Sans | 17px | 400 | 20.4px | — | card copy |
| `{typography.body-bold}` | ANZ Sans | 17px | 700 | 22.1px | — | menu titles |
| `{typography.button}` | ANZ Sans | 16.96px | 400 | 20.352px | — | Continue |
| `{typography.panel-link}` | ANZ Sans | 16.96px | 400 | 21.7088px | — | panel links |
| `{typography.label}` | ANZ Sans | 15.04px | 500 | 18.048px | — | field labels ("From") |
| `{typography.small}` | ANZ Sans | 15px | 400 | 19.5px | — | nav sub-items |
| `{typography.caption}` | ANZ Sans | 13px | 400 | 19.5px | — | photo caption "Mount Cook National Park." |
| `{typography.micro}` | ANZ Sans | 11.2px | 400 | 16.8px | — | roundel fine print |

The h1 element computes to Air New Zealand Sans 44px/700; its visible text is an inner span in
`airnewzald` 50.16px/700 italic, which is what the eye reads.

### Principles
- Newzald (airnewzald) only for the "hero" moment — one headline, the fare numbers — with tight negative tracking (~-1.75%).
- Sans headings are bold (700) at 22/27px; body is 17px regular.
- Fluid Unison type scale: `--unison-font-size-md: 1.06rem` (16.96px — the 16.96px values above), `--unison-font-size-lg: clamp(1.22rem, …, 1.33rem)`, `--unison-font-size-xl`, `-xxl`, `-mega`, `-giga`, `-ultra`, `-titan: clamp(2.83rem, calc(1.99rem + 3.41vw), 5.07rem)`.
- Line-height tokens are percentages: `--unison-line-height-l0: 120%` … `l8: 152%`.

### Note on Font Substitutes
Air New Zealand Sans is a custom build of **Söhne** (Klim Type Foundry, commercial — [klim.co.nz/fonts/soehne](https://klim.co.nz/fonts/soehne/)), and
the hero face is **Newzald** (also Klim). Licensing either from Klim is the faithful option. The
site's own fallback is `"Helvetica Neue", Arial`; for the hero use a black-weight serif italic only
as a placeholder, keeping the negative tracking.

## Layout

### Spacing System
Unison spacing primitives are named by percent of an 8px base: `--unison-spaces-base25: 2px`,
`base50: 4px`, `base75: 6px`, `base100: 8px`, `base125: 10px`, `base150: 12px`, `base175: 14px`,
`base200: 16px`, `base225: 18px`, `base250: 20px`, `base300: 24px`, `base400: 32px`, `base500: 40px`,
`base600: 48px`, `base700: 56px`, `base800: 64px`, `base1000: 80px`, `base1200: 96px`, `base1600: 128px`.
Semantic spacing is fluid and grouped by relationship — `connect`, `divide`, `break` — for
`inline`, `stack`, `inset-hoz`, `inset-vert`, `gap`, `offset` (e.g.
`--unison-semantic-spaces-stack-break: clamp(1.5rem, calc(0.57rem + 3.81vw), 4rem)`).

- Measured paddings: 20px (21), 80px (9), 12px (8), 10px (7), 5px, 40px, 16px, 6px, 8px.
- Measured gaps: 4px, 8px, 24px.

### Grid & Container
- Layout max widths: `--unison-layout-max-width-sm: 700px`, `-md: 900px`, `-lg: 1152px`.
- Breakpoints: mobile 0, tablet 768px, desktop 1024px, desktop-large 1280px.
- Story cards: 3-column grid (~272px images); help: 3 columns with icons; footer padded 0 80px.
- Form control width token `--unison-layout-form-control-width: 21em`.

### Whitespace Philosophy
The hero is dense and immersive (photo + roundels + panel); content below is calm, aligned on a
narrow 3-column grid, with modest vertical spacing.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | cards, footer |
| 1 | `rgba(25,24,27,.04) 0 6px 18px, rgba(25,24,27,.05) 0 4px 10px, rgba(25,24,27,.04) 0 1px 2px` | floating panels (measured once) |
| Translucency | `rgba(0,0,0,.88)` roundels over photography | fare badges |
| Focus | `0 0 0 2px #008392, 0 2.8px 7px 0 rgba(0,0,0,.25)` (light) / `0 0 0 2px #4cd6e6, …` (dark) | keyboard focus (CSS corpus) |

Focus radii are tokenised one step larger than the element (`--unison-border-radius-action-medium-element: 8px` → `-focus: 10px`).

## Shapes

### Border Radius Scale

| Token | Value | Unison alias |
|---|---|---|
| `{rounded.xs}` | 3px | header search input |
| `{rounded.sm}` | 4px | Sign up button |
| `{rounded.action-small}` | 6px | `--unison-border-radius-action-small-element`, `-checkbox`; dark fields |
| `{rounded.action}` | 8px | `-action-medium-element`, `-action-large-element`, `-field`, `-card`, `-alert`; Continue |
| `{rounded.focus}` | 10px | `-action-medium-focus`, `-action-large-focus` |
| `{rounded.lg}` | 12px | chat bubble (`12px 12px 12px 0`) |
| `{rounded.bubble}` | 100px | "Need some help?" pill |
| `{rounded.circle}` | 50% | fare roundels, icons |

### Photography Geometry
New Zealand landscapes (alpine, tussock, coast), food and wine, cabin interiors; story images are
square-cornered rectangles above their text; the hero is full-bleed with a small location caption
("Mount Cook National Park.") in 13px white at bottom-left.

## Components

### Buttons
**`button-primary`** — "Continue": teal `#008392` with 1px teal border, white 16.96px/400, padding 10px 16px, 48px tall, 8px radius.
**`button-signup`** — "Sign up": teal, 17px/400/22.1px, padding 10px 20px, 44px, 4px radius (mobile: 12px 24px, 48px, full width).
**Segmented control** — Return / One-way / Multi-city: dark track, selected segment white with dark text, 15.04px labels.

### Links
**`link`** — teal `#008392`, underlined, hover `#00626e`. **`link-on-dark`** — `#2dbfd0` with ↗ icon, hover `#4bd0e0`.

### Inputs & Forms
**`field-on-dark`** — `#19181b`, 1px `#4f4d56`, 6px radius, padding 12px, 48px, 16.96px text; label 15.04px/500 `#f8f7f8` above. Swap icon in teal between From and To.
**`search-input`** — header search: transparent on black, 1px `#bbbbbb`, 3px radius, 38px, padding-left 40px for the magnifier icon.

### Booking panel
**`booking-panel`** — `#262429` panel overlapping the hero, title "Book your trip" 20.928px/500, links top-right, hairline divider, form below.

### Fare roundel
**`fare-roundel`** — 222px circle, `rgba(0,0,0,.88)`, padding 20px 5px 0; airnewzald title 30.78px, "from $" + 74.1px price, 11.2px fine print, teal "See More"; hover lightens to `rgba(0,0,0,.78)`.

### Cards
**`card-story`** — image, 22px/700 title, 17px/20.4px copy, teal underlined link; optional purple "New" tag.

### Navigation
**`nav`** — black, 100px, padding 0 20px; logotype; menu items 16px white, hover `#4cd6e6`; right: search + teal links. Mobile 56px.
**Chat** — "Need some help?" white pill bubble (`100px` radius) with the Oscar bot avatar.

### Footer
**`footer`** — black, white 17px text, padding 0 80px, region selector "United States USD", link columns.

## Design System Architecture

Air New Zealand's design system is called **Unison**. The airline's own
[Accessibility Plan (2024)](https://p-airnz.com/cms/assets/PDFs/2024-air-nz-accessibility-plan-short-version.pdf)
states: "We have a design system called Unison, which holds a collection of components and design
principles for consistent design across all channels. Within Unison, the Digital Design chapter have
clear accessibility principles - these mainly cover visual accessibility (colour, font size, screen
reading etc)". The Unison documentation itself is not public; the token layer below is read from the
live `:root` (205 `--unison-*` variables).

**Token architecture.**
- *Primitives*: colour ramps by hue in steps of 10 — `--unison-colors-teal10 … teal100` (`teal80: #008392`, `teal50: #2DBFD0`), `black10 … black100`, `violet`, `red`, `orange`, `green`, plus campaign ramps (`gas-green*`, `gas-pink*`) and alpha ramps (`--unison-colors-black-alpha80: #000000B2`, `white-alpha*`).
- *Brand/loyalty*: `--unison-colors-koru-black`, `koru-gold`, `koru-platinum`, `loyalty-club: #440099`, `loyalty-elite`, `loyalty-ep1`.
- *Type*: `--unison-font-size-xs … titan` (fluid `clamp()`), `--unison-font-weight-regular/medium/semi-bold/bold`, `--unison-line-height-l0 … l8`.
- *Space*: `--unison-spaces-base*` primitives and fluid `--unison-semantic-spaces-{inline|stack|inset-hoz|inset-vert|gap|offset}-{connect|divide|break}`.
- *Shape by role*: `--unison-border-radius-field`, `-card`, `-alert`, `-checkbox`, `-action-{small|medium|large}-{element|focus}`.
- *Layout & z-index*: `--unison-layout-max-width-{sm|md|lg}`, `--unison-breakpoints-*`, `--unison-z-index-z-index-{modal|popover|toast|notification}`.
Naming: `--unison-{category}-{name}{step}` for primitives, `--unison-semantic-{category}-{context}-{relationship}` for semantics.

**Theming.** Light content with dark chrome; components switch to "on-dark" teal variants
(`teal50/40/30`) on black and charcoal surfaces. No dark-mode switch was found.

**Type & spacing.** Fluid type and spacing via `clamp()` keyed to viewport width; 8px base.

**Component model (observed).** Buttons (action small/medium/large), fields, checkbox, segmented
control, booking panel, fare roundel, cards, alerts, chat bubble, header with mega-menu, footer.

**Accessibility (official).** Commitment "to achieve WCAG AA across all products"; keyboard
operability; "focus must always be clearly visible"; form fields "clearly labelled"; "Use the Unison
colour combinations documented in colour in use"; "Colour alone must not be used as the only means of
conveying information"; pages "must pass accessibility validation, e.g. using Lighthouse". The CSS
implements a 2px teal focus ring with a 10px focus radius.

**Delivery.** CSS custom properties prefixed `--unison-`; web fonts self-hosted (`Air New Zealand Sans`,
`airnewzald`, icon fonts `vlookicon`, `airpoints-*`); no public npm or Figma kit.

## Do's and Don'ts

### Do
- Frame pages with a black header and footer; keep content white with black text.
- Use teal `#008392` for every action and link; hover `#00626e`; use `#2dbfd0`/`#4cd6e6` on dark.
- Reserve airnewzald (Newzald Black Italic) for one hero phrase and fare numbers, with negative tracking.
- Set body at 17px/25.5px; sans headings at 700.
- Use Unison role radii: 8px actions/cards, 6px small controls, 10px focus.
- Keep the 2px teal focus ring.

### Don't
- Don't use Newzald for paragraphs or UI labels.
- Don't use teal for large background fields — it's an action colour.
- Don't round cards with large radii; story images are square.
- Don't convey status by colour alone (official rule).
- Don't introduce non-Unison greys; the ramp is violet-tinted.

## Responsive Behavior

### Breakpoints
`--unison-breakpoints-mobile-min-width: 0px`, `tablet: 768px`, `desktop: 1024px`, `desktop-large: 1280px`.

| Element | Desktop (1280) | Mobile (390) |
|---|---|---|
| Header | 100px | 56px |
| h1 | 44px/700/52.8px | 41px/700/49.2px |
| Sign up button | 10px 20px, 44px | 12px 24px, 48px, full width |

### Touch Targets
48px Continue and fields; Sign up 48px on mobile.

### Collapsing Strategy
- Mobile behaviour of fare roundels and the booking panel was not measured.
- Story grid 3 → 1 column.
- Mobile sizes measured: 17, 20, 10.24, 22.8, 12, 15, 15.04, 16.96, 24, 13, 46.74, 11.2px — the fluid `clamp()` scale produces fractional sizes.

### Image Behavior
Hero landscape crops to keep the subject behind the headline; credits remain bottom-left.

## Iteration Guide

1. Black header, full-bleed NZ landscape, hero line in airnewzald 700 italic with -0.88px tracking.
2. Add the charcoal `#262429` booking panel with `#19181b` fields and a teal 8px button.
3. Use `--unison-*` names when emitting CSS; pick spacing from `base*` steps.
4. Content: 22px/700 titles, 17px copy, teal underlined links.
5. Verify hovers: teal → `#00626e`; nav → `#4cd6e6`; roundel → `rgba(0,0,0,.78)`.
6. Re-run `node web/scripts/verify-designs.mjs --slug=air-new-zealand` after edits.
