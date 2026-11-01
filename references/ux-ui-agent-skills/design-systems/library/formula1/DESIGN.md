---
version: alpha
name: Formula 1
category: "Sports & Fitness"
description: "Formula 1's formula1.com — a news-and-video sports surface built on a carbon #15151e hero band, a white #ffffff content canvas with warm #f7f4f1 story cards, and one racing red #e10600 for pill CTAs (1000px radius). Headlines use the proprietary Formula1 face at 900 in uppercase (32px desktop / 24px mobile); everything else is Titillium Web 400/600/700 at 16–17px with #1c1c25 ink and #606066 meta text; cards are 8px-rounded."

colors:
  primary: "#e10600"
  primary-hover: "#ca0500"
  on-primary: "#ffffff"
  canvas: "#15151e"
  surface-white: "#ffffff"
  canvas-soft: "#f3f3f4"
  surface-warm: "#f7f4f1"
  surface-tertiary-hover: "#edebe9"
  carbon: "#15151e"
  carbon-1: "#1c1c25"
  carbon-2: "#303037"
  carbon-3: "#47464c"
  black: "#000000"
  black-hover: "#333333"
  ink: "#ffffff"
  ink-on-light: "#1c1c25"
  ink-strong: "#000000"
  ink-muted: "#606066"
  ink-on-dark: "#ffffff"
  nav-text: "#e0dedc"
  hairline: "#e0dedc"
  grey-hover: "#aaaaaa"
  link-hover: "#5e5e63"
  negative: "#e91711"
  positive: "#1a8930"

typography:
  display-xl:
    fontFamily: "Formula1, \"Titillium Web\", sans-serif"
    fontSize: 32px
    fontWeight: 900
    lineHeight: 38px
  display-mobile:
    fontFamily: "Formula1, \"Titillium Web\", sans-serif"
    fontSize: 24px
    fontWeight: 900
    lineHeight: 28px
  page-title:
    fontFamily: "Formula1, \"Titillium Web\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38px
  page-title-mobile:
    fontFamily: "Formula1, \"Titillium Web\", sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28px
  story-headline:
    fontFamily: "Formula1, \"Titillium Web\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
  nav-link:
    fontFamily: "Formula1, \"Titillium Web\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  eyebrow:
    fontFamily: "Formula1, \"Titillium Web\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  body-lg:
    fontFamily: "\"Titillium Web\", sans-serif"
    fontSize: 17px
    fontWeight: 600
    lineHeight: 24px
  card-title:
    fontFamily: "\"Titillium Web\", sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 24px
  link-strong:
    fontFamily: "\"Titillium Web\", sans-serif"
    fontSize: 17px
    fontWeight: 700
    lineHeight: 24px
  body-md:
    fontFamily: "\"Titillium Web\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  body-mobile:
    fontFamily: "\"Titillium Web\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
  table-cell:
    fontFamily: "\"Titillium Web\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  button:
    fontFamily: "\"Titillium Web\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16px
  table-head:
    fontFamily: "\"Titillium Web\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16px
  caption:
    fontFamily: "\"Titillium Web\", sans-serif"
    fontSize: 12px
    fontWeight: 400

rounded:
  xs: 2px
  sm: 4px
  md: 8px
  pill: 9999px
  circle: 50%

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  xxl: 32px
  section: 48px
  huge: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 6px 16px
    height: 28px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-lg:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 32px
  button-black:
    backgroundColor: "{colors.black}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 6px 16px
    height: 28px
  button-black-hover:
    backgroundColor: "{colors.black-hover}"
  button-outlined:
    backgroundColor: "transparent"
    textColor: "{colors.ink-strong}"
    typography: "{typography.link-strong}"
    rounded: "{rounded.pill}"
    border: "2px solid #000000"
    padding: 8px 16px
    height: 44px
  chip-outlined-filter:
    textColor: "{colors.ink-strong}"
    typography: "{typography.link-strong}"
    rounded: "{rounded.pill}"
    border: "2px solid #000000"
    padding: 10px 28px
    height: 44px
  chip-glass:
    backgroundColor: "#ffffff1a"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 12px
    height: 32px
  nav-bar:
    backgroundColor: "{colors.carbon}"
    textColor: "{colors.nav-text}"
    typography: "{typography.nav-link}"
    height: 64px
  nav-link:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.nav-link}"
  link-tab:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body-md}"
    padding: 8px 24px
  link-tab-hover:
    textColor: "{colors.link-hover}"
  card-story:
    backgroundColor: "{colors.surface-warm}"
    textColor: "{colors.ink-on-light}"
    typography: "{typography.card-title}"
    rounded: "{rounded.md}"
  card-feature-dark:
    backgroundColor: "{colors.black}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.story-headline}"
    rounded: "{rounded.md}"
  card-app-promo:
    backgroundColor: "#0000000a"
    textColor: "{colors.ink-on-light}"
    rounded: "{rounded.md}"
    padding: 24px
  results-table-head:
    textColor: "{colors.ink-muted}"
    typography: "{typography.table-head}"
    padding: 16px 48px 16px 4px
  results-table-cell:
    textColor: "{colors.ink-strong}"
    typography: "{typography.table-cell}"
    padding: 16px 48px 16px 4px
    borderBottom: "1px solid #e0dedc"
  footer:
    backgroundColor: "{colors.carbon-1}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.body-md}"
---

## Overview

formula1.com is a sports-media surface first and a brand surface second. The homepage opens on a dark carbon band (`{colors.carbon}` — `#15151e`, `--f1rd-colour-surface-neutral-surface-neutral-10`) holding a session countdown strip, a row of glass-pill filter chips, a large photographic lead story and a stack of side stories. Below the "MUST WATCH" video rail the page switches to a white canvas (`{colors.surface-white}` — `#ffffff`) where the "EDITOR'S PICKS" grid sits as warm off-white cards (`{colors.surface-warm}` — `#f7f4f1`).

Colour is almost entirely neutral. The single chromatic brand signal is racing red (`{colors.primary}` — `#e10600`), used on the filled pill CTAs (Subscribe), on the logo, and on small "UNLOCKED" premium badges. Team liveries in the photography and team accent colours inside data views carry the rest of the colour; the UI chrome never competes with them.

Typography is a two-family system. Section headers ("MUST WATCH", "EDITOR'S PICKS", "2027 CALENDAR") are set in the proprietary **Formula1** face at weight 900 in uppercase, 32px — the heavy, extended, slanted-feel display that matches the logo. Story headlines over photographs use Formula1 at 400 (24px). Everything that is read — standfirsts, card titles, tables, buttons — is **Titillium Web** at 400/600/700.

**Key Characteristics:**
- Dark-to-light page rhythm: carbon `#15151e` hero and video rail, then white `#ffffff` editorial grid, then a footer that steps `#1c1c25` → `#303037` → `#47464c` band by band.
- One red: `#e10600` on pill CTAs only, hovering to `#ca0500`.
- Every button is a pill (`border-radius: 1000px` measured; declared as `{rounded.pill}`).
- Story cards are 8px-rounded (`{rounded.md}`), either photo-over-black (`#000000`) with white Formula1 headline, or image-top on `#f7f4f1` with Titillium 17px/400 title.
- Formula1 900 uppercase for section headers; Titillium Web for everything people read.
- No box shadows anywhere in the measured UI — depth comes from tone steps and photography.

## Colors

> **Source pages:** home (`/`), results (`/en/results/2025/races`). Token names in parentheses are the site's own CSS custom properties from `:root`.

### Brand & Accent
- **Racing Red** (`{colors.primary}` — `#e10600`): Filled pill CTAs (Subscribe, Skip to content), premium badges, logo red. The only saturated UI colour.
- **Racing Red Hover** (`{colors.primary-hover}` — `#ca0500`): Measured hover background of the Subscribe pill.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): Label colour on red and black pills.

### Surface
- **Canvas** (`{colors.canvas}` — `#15151e`, `surface-neutral-10`): The carbon page base — the largest painted area in the live capture (hero band and video rail).
- **Surface White** (`{colors.surface-white}` — `#ffffff`, `surface-neutral-1`): The white editorial grid band below the video rail.
- **Canvas Soft** (`{colors.canvas-soft}` — `#f3f3f4`, `surface-neutral-2`): The `<body>` background, visible between bands.
- **Surface Warm** (`{colors.surface-warm}` — `#f7f4f1`, `surface-neutral-3`): Editor's Picks story cards and the results page body area.
- **Surface Tertiary Hover** (`{colors.surface-tertiary-hover}` — `#edebe9`, `--f1rd-colour-button-tertiary-hover`): Tertiary button hover (token, from `:root`).
- **Carbon** (`{colors.carbon}` — `#15151e`, `surface-neutral-10`): Hero band, nav bar, Must Watch rail.
- **Carbon 1 / 2 / 3** (`#1c1c25`, `#303037` = `surface-neutral-9`, `#47464c` = `surface-neutral-8`): The three footer bands, measured top to bottom.
- **Black** (`{colors.black}` — `#000000`, `surface-neutral-11`): Photo story card fill, Sign In pill.
- **Black Hover** (`{colors.black-hover}` — `#333333`): Measured hover background of the Sign In pill.

### Text
- **Ink** (`{colors.ink}` — `#ffffff`, `text-1`): Primary text colour on the carbon page base.
- **Ink on Light** (`{colors.ink-on-light}` — `#1c1c25`, `--f1rd-colour-text-text-4`): Body text on light surfaces.
- **Ink Strong** (`{colors.ink-strong}` — `#000000`, `text-5`): Table cells, outlined buttons, tab links.
- **Ink Muted** (`{colors.ink-muted}` — `#606066`, `text-3` / `--f1rd-colour-system-neutral`): Table headers, metadata, inactive sub-nav.
- **Ink on Dark** (`{colors.ink-on-dark}` — `#ffffff`, `text-1`): All text in the carbon bands — the most-read colour on the homepage by character count.
- **Nav Text** (`{colors.nav-text}` — `#e0dedc`, `surface-neutral-4`): The nav container colour on carbon.
- **Link Hover** (`{colors.link-hover}` — `#5e5e63`): Measured hover colour of results-page tab links.
- **Grey Hover** (`{colors.grey-hover}` — `#aaaaaa`, `--f1rd-colour-button-secondary-hover` / `button-tonal-hover`).

### Lines
- **Hairline** (`{colors.hairline}` — `#e0dedc`): 1px row rule under every results-table row (probe-measured); also `--f1rd-colour-button-tonal-default`.

### Semantic
- **Negative** (`{colors.negative}` — `#e91711`, `--f1rd-colour-system-negative`).
- **Positive** (`{colors.positive}` — `#1a8930`, `--f1rd-colour-system-positive`).
These come from the site's `:root` variables; they were not seen rendered on the measured pages.

## Typography

### Font Family

Two families ship on every page (from the loaded-font list):
- **Formula1** — weights 400, 500 and 900. The stylesheet also declares `Formula1Wide` and `Formula1Digits` faces. It is the official F1 header face; the F1 guidelines page states: "Our header typefaces and fonts are protected by copyright which is owned by the Formula 1 companies, and cannot be used under any circumstances without an express written license" ([F1 Guidelines](https://www.formula1.com/en/information/guidelines.4EOKE9RRqevL4niTK9kWyt)).
- **Titillium Web** — weights 400, 600, 700. Open-source; it carries the most characters on the page (2,336 weighted chars vs 935 for Formula1).

Partner/brand modules additionally load `Apax TAG Heuer` and `KH Interference F1`; these belong to sponsor widgets (timing clock, etc.) and are not part of the core UI type system.

### Hierarchy

| Token | Family | Size | Weight | Line height | Use |
|---|---|---|---|---|---|
| `{typography.display-xl}` | Formula1 | 32px | 900 | 38px | Section headers, uppercase ("MUST WATCH") |
| `{typography.display-mobile}` | Formula1 | 24px | 900 | 28px | Same headers at 390px |
| `{typography.page-title}` | Formula1 | 32px | 500 | 38px | Page h1, uppercase ("2025 RACE RESULTS") |
| `{typography.page-title-mobile}` | Formula1 | 24px | 500 | 28px | Page h1 at 390px |
| `{typography.story-headline}` | Formula1 | 24px | 400 | 28px | Headline over photo cards |
| `{typography.nav-link}` | Formula1 | 14px | 400 | 14px | Primary nav (Schedule, Results…) |
| `{typography.eyebrow}` | Formula1 | 12px | 400 | 16px | Uppercase micro labels |
| `{typography.body-lg}` | Titillium Web | 17px | 600 | 24px | Standfirsts / video titles |
| `{typography.card-title}` | Titillium Web | 17px | 400 | 24px | Editor's Picks card titles |
| `{typography.link-strong}` | Titillium Web | 17px | 700 | 24px | "View All", outlined buttons |
| `{typography.body-md}` | Titillium Web | 16px | 400 | 16px | Base body, tab links |
| `{typography.body-mobile}` | Titillium Web | 16px | 600 | 20px | Standfirst at 390px, hero side captions |
| `{typography.table-cell}` | Titillium Web | 16px | 600 | 24px | Results table cells |
| `{typography.button}` | Titillium Web | 14px | 700 | 16px | Pill button labels |
| `{typography.table-head}` | Titillium Web | 14px | 600 | 16px | Results table header, uppercase |
| `{typography.caption}` | Titillium Web | 12px | 400 | — | Meta, timestamps |

### Principles
- **Uppercase for Formula1 headers.** Measured `text-transform: uppercase` on h1/h2. Never set Formula1 900 in sentence case.
- **No tracking adjustments.** The letter-spacing table was empty: every measured element uses `normal`.
- **Weight 600 is the reading weight.** Titillium 600 has the largest share of characters (1,550), ahead of 400 (1,295).
- **17px for editorial, 16px for UI.** 17px is the most-used size by characters on desktop; at 390px the standfirst drops to 16px.

### Note on Font Substitutes
Formula1 is proprietary and may not be used without a licence (see guidelines link above). There is no officially named substitute. Titillium Web is already the site's own text face and is open-source; for a non-official build use Titillium Web 700 uppercase for headers and accept that the extended, heavy Formula1 silhouette will be lost. The guidelines also warn that Titillium "should not be used in any manner to create an unauthorised association with the Championship".

## Layout

### Spacing System
- Most-used gaps: 8px (133), 16px (84), 24px (50), 4px (45); paddings: 16px (99), 8px (95), 4px (60), 6px (40).
- **Tokens:** `{spacing.xxs}` 2px · `{spacing.xs}` 4px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.xl}` 24px · `{spacing.xxl}` 32px · `{spacing.section}` 48px · `{spacing.huge}` 64px.
- `:root` also exposes `--cell-spacing: 8px` and `--cell-padding: 8px`.
- Results-table cells use `16px 48px 16px 4px` padding — generous right padding, almost none on the left.

### Grid & Container
- In the capture the content column runs at ~1170px inside the 1280px viewport (footer inner block measured 1169px wide).
- Hero: one large lead story (~2/3 width) with a column of two stacked side stories; beneath it a 4-up row of thumbnail + headline links.
- Must Watch: horizontal rail of 16:9 video thumbnails, 4 visible with a fifth cut off at the right edge, arrow controls next to "View All".
- Editor's Picks: mixed-size bento — a large photo card (~1/2), two narrow image-top cards, then a second row that mirrors it.

### Whitespace Philosophy
Dense, news-paced. Cards sit 16–24px apart; section headers sit directly above their rails with no decorative space. Breathing room comes from the switch between dark and light bands rather than from large margins.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | Every measured surface (box-shadow table is empty) |
| 1 | Tone step | Card `#f7f4f1` on `#ffffff`; footer bands `#1c1c25` → `#303037` → `#47464c` |
| 2 | Translucent glass | `#ffffff1a` chips on carbon; `#0000000a` app-promo card |
| 3 | Photography with dark gradient | Lead story and photo cards — headline set in white over the darkened lower edge |

F1 does not use drop shadows for hierarchy. When something must lift, it changes tone or sits on a photo.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | Tiny badges |
| `{rounded.sm}` | 4px | Thumbnail corners, small badges |
| `{rounded.md}` | 8px | All story cards, feedback tile, app promo |
| `{rounded.pill}` | 9999px (site ships `1000px`) | Every button and chip |
| `{rounded.circle}` | 50% | Driver avatars, round icon buttons (play, arrows) |

### Shape language
Buttons are full pills — never rectangles. Cards are soft 8px rectangles. The logo and Formula1 face supply the speed/slant; UI shapes stay neutral. No clip-paths or skews were measured.

## Components

### Buttons

**`button-primary`** — header Subscribe pill.
- Background `{colors.primary}` `#e10600`, text `{colors.on-primary}`, `{typography.button}` (Titillium Web 14px/700, line-height 16px), padding `6px 16px`, height 28px, radius `{rounded.pill}`.
- Hover `button-primary-hover`: background `{colors.primary-hover}` `#ca0500` (measured).

**`button-primary-lg`** — same red pill at 32px height with `8px 16px` padding (measured on the focus-visible skip link, same styling family).

**`button-black`** — Sign In pill: `{colors.black}` background, white text, `6px 16px`, 28px tall. Hover → `{colors.black-hover}` `#333333`.

**`button-outlined`** — "View full standings": transparent, `2px solid #000000` border, black text in `{typography.link-strong}` (17px/700/24px), padding `8px 16px`, 44px tall, pill.

**`chip-outlined-filter`** — results filter ("All"): same 2px black outline, 17px/700, padding `10px 28px`, 44px tall.

**`chip-glass`** — "Live Timing", "New to F1?" on carbon: background `#ffffff1a`, white 14px/700, padding `8px 12px`, 32px tall, pill.

Ghost buttons ("Race Series", year selector) have a transparent background that hovers to black at 10% opacity (`color(srgb 0 0 0 / 0.1)` measured).

### Cards & Containers

**`card-story`** — Editor's Picks image-top card: `{colors.surface-warm}` `#f7f4f1` fill, `{rounded.md}` 8px, image flush on top, title in `{typography.card-title}` (17px/400/24px) `#1c1c25`. Optional red "UNLOCKED" badge above the title.

**`card-feature-dark`** — photo story: `#000000` base, 8px radius, full-bleed photograph, headline in `{typography.story-headline}` (Formula1 24px/400/28px) white at the bottom.

**`card-app-promo`** — results page footer promo: `#0000000a` fill, 8px radius, 24px padding.

### Data

**`results-table-head`** — `<th>`: Titillium 14px/600, line-height 16px, uppercase, `{colors.ink-muted}` `#606066`, padding `16px 48px 16px 4px`, 49px tall. No header background.

**`results-table-cell`** — `<td>`: Titillium 16px/600, line-height 24px, `#000000`, same padding, 1px `#e0dedc` bottom rule, rows 57–58px tall. No zebra striping, no vertical rules.

### Navigation

**`nav-bar`** — 64px tall carbon band. Logo left, Formula1 14px/400 white links (Schedule, Results, Standings, Drivers, Teams, F1 Unlocked) with generous spacing, hamburger and FIA mark right. Above it a slim light utility bar holds "Race Series" dropdown, uppercase shop links (AUTHENTICS, STORE, TICKETS…), F1 TV logo and the Sign In + Subscribe pills.

**`link-tab`** — results sub-nav tab: Titillium 16px/400 black, padding `8px 24px`, 42px tall; hover → `#5e5e63`. Inactive tabs (Drivers, Teams, Awards) render `#606066` and hover to near-black.

### Footer

**`footer`** — a stack of full-width bands: partners strip on `#1c1c25` (259px), then `#303037`, then `#47464c`. White text, Titillium 16px base, "View all" in 17px/700.

### Signature Components
- **Session countdown strip** — under the nav: flag + "Singapore", "FP1" in Formula1 and a `24H 09M 38S` countdown, with a sponsor clock and "MY TIME / TRACK TIME" on the right.
- **Glass filter chips** — News / Videos chips on the carbon hero.
- **Video thumbnails** — circular play icon bottom-left, duration bottom-right, title below in Titillium 17px/600.

## Design System Architecture

**No public design system, token package or brand portal was found** (searches recorded in `SOURCES.json`). The only official brand document is the [F1 Guidelines page](https://www.formula1.com/en/information/guidelines.4EOKE9RRqevL4niTK9kWyt), which covers legal use of marks and fonts, not UI tokens. What follows is the de-facto system visible in the site's own CSS.

### Token architecture (from `:root`)
The site exposes a prefixed custom-property set, `--f1rd-colour-*`, with a clear naming pattern `--f1rd-colour-{category}-{role}-{step}`:
- Surfaces as a numbered neutral ramp: `--f1rd-colour-surface-neutral-surface-neutral-1` (`#fff`) through `-11` (`#000`), e.g. `-2` `#f3f3f4`, `-3` `#f7f4f1`, `-4` `#e0dedc`, `-8` `#47464c`, `-9` `#303037`, `-10` `#15151e`.
- Transparent surface variants: `--f1rd-colour-surface-neutral-transparent-80-surface-neutral-1` (`hsla(0,0%,100%,.8)`), `…-transparent-0-surface-neutral-10`.
- Text roles: `--f1rd-colour-text-text-1` (`#fff`) … `text-5` (`#000`); `text-3` `#606066`, `text-4` `#1c1c25`.
- Button roles: `--f1rd-colour-button-secondary-default` (`#000`), `--f1rd-colour-button-secondary-hover` (`#aaa`), `--f1rd-colour-button-tonal-default` (`#e0dedc`), `--f1rd-colour-button-tertiary-hover` (`#edebe9`).
- System: `--f1rd-colour-system-negative` (`#e91711`), `-positive` (`#1a8930`), `-neutral` (`#606066`).
- Accents: `--f1rd-colour-accent-hot-red-20` (`#f6b4b2`), `--f1rd-colour-accent-sector-purple-70` (`#5300a6`) / `-80` (`#370969`) — "sector purple" is the timing colour vocabulary.
So the tiers are: primitive neutral ramp → semantic text/button/system roles. The red `#e10600` is not exposed as a `:root` variable; it appears in the stylesheets 16 times as a literal.

### Theming
No light/dark switch was observed. Both "themes" coexist on one page: carbon bands use the high end of the neutral ramp with `text-1`, light bands use the low end with `text-4`/`text-5`.

### Type & spacing
Two families (Formula1 for display, Titillium Web for text). Spacing is a 4px-based set dominated by 8/16/24. Tailwind runtime variables (`--tw-ring-*`, `--tw-shadow`) are present in `:root` (Tailwind CSS runtime variables).

### Component inventory (observed, not documented)
Pill buttons (red, black, outlined, glass, ghost), story cards (light, photo), video rail, results table, tab links, countdown strip, footer bands.

### Accessibility
A "Skip to content" link exists as the first focusable element (red pill). No published contrast or focus rules were found.

### Delivery
No npm package, Figma kit or versioned library is published.

## Do's and Don'ts

### Do
- Reserve `#e10600` for filled pill CTAs and premium badges; hover it to `#ca0500`.
- Set section headers in Formula1 900 uppercase, 32px/38px on desktop and 24px/28px on mobile.
- Use Titillium Web 600 for reading text and 700 for button labels.
- Make every button a full pill.
- Alternate carbon `#15151e` and white `#ffffff` bands; put story cards on `#f7f4f1`.
- Let photography carry colour — team liveries, crowds, cars.
- Keep tables open: no fills, a single 1px `#e0dedc` row rule, uppercase `#606066` 14px/600 headers.

### Don't
- Don't add drop shadows; the measured UI has none.
- Don't use red as a background for large areas or for text.
- Don't apply letter-spacing — all text measured at `normal`.
- Don't use Formula1 for body copy or tables.
- Don't square off buttons or round cards beyond 8px.
- Don't use the Formula1 face, logo or marks without a licence (official guidelines).

## Responsive Behavior

### Breakpoints

| Viewport | Measured change |
|---|---|
| 1280px | Section header 32px/38px; standfirst 17px/24px 600; nav 64px tall |
| 390px | Section header 24px/28px; page h1 24px/28px; standfirst 16px/20px 600; nav bar 54px tall |

### Touch Targets
- Header pills are 28–32px tall; outlined buttons and filter chips 44px tall.
- Results rows are 57–58px tall.

### Collapsing Strategy
- Primary nav collapses to a hamburger on mobile (nav container measured 54px tall).
- Most-used mobile size becomes 16px (1,407 chars) — 17px editorial text drops to 16px.
- Rails remain horizontally scrollable.

### Image Behavior
Lead and feature stories are photo-led at full card width; headlines overlay the bottom of the image in white, so images need a dark lower edge.

## Iteration Guide

1. Start from carbon `{colors.carbon}` and white `{colors.surface-white}` bands; add `{colors.surface-warm}` cards.
2. Use `{typography.display-xl}` uppercase for every section header.
3. One red pill (`button-primary`) per header; everything else black, outlined or glass.
4. Card radius `{rounded.md}` 8px; button radius `{rounded.pill}`.
5. Body text `{typography.body-lg}` / `{typography.card-title}` in `{colors.ink-on-light}` on light, `{colors.ink}` on dark.
6. Tables: `results-table-head` + `results-table-cell`, no fills.
7. Check mobile: header to 24px, standfirst to 16px/20px.
