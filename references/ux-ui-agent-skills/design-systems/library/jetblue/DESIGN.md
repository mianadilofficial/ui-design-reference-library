---
version: alpha
name: JetBlue
category: "Airlines"
description: "JetBlue's booking site (jetblue.com) on a white #ffffff canvas with #f6f6f6 bands, set entirely in the in-house served face jbklarheit (book 400, semibold 600, extrabold 800). Action colour is the pure blue #0000aa (--color-primary) that darkens to navy #000080 on hover; headlines run in core blue #00205b and #000064, body copy in #212121. Shapes are soft: 24px promo cards, 12px category cards, full 9999px pill buttons, and a signature search button that is square on the left and pill-rounded on the right (0px 9999px 9999px 0px)."

colors:
  primary: "#0000aa"
  primary-hover: "#000080"
  primary-pressed: "#000064"
  secondary: "#2323ff"
  core-blue: "#00205b"
  heading-navy: "#000064"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  surface-low: "#f6f6f6"
  surface-blue: "#f5f7fa"
  container-hover: "#e6e6e6"
  skeleton: "#dbdbdb"
  ink: "#212121"
  ink-black: "#000000"
  ink-muted: "#6e6c6d"
  hairline: "#e6e6e6"
  outline-strong: "#8c8c8c"
  border-sky: "#8fd3ff"
  primary-container: "#cce8ff"
  accent-aqua: "#00e1ff"
  accent-orange: "#e45104"
  status-negative: "#d50f0f"
  status-positive: "#438443"
  status-info: "#0068f0"
  promo-violet: "#dc7bff"
  trueblue-orange: "#ff8200"
  trueblue-royal: "#0033a0"

typography:
  display-promo:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 60px
    fontWeight: 800
    lineHeight: 66px
    letterSpacing: -2.4px
  display-promo-mobile:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 32px
    fontWeight: 800
    lineHeight: 37.76px
    letterSpacing: -1.2px
  heading-section:
    fontFamily: "jbklarheit, arial"
    fontSize: 32px
    fontWeight: 800
    lineHeight: 40px
    letterSpacing: -0.8px
  heading-section-mobile:
    fontFamily: "jbklarheit, arial"
    fontSize: 24px
    fontWeight: 800
    lineHeight: 28px
    letterSpacing: -0.3px
  heading-section-loose:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 32px
    fontWeight: 800
    lineHeight: 48px
  title-tile:
    fontFamily: "jbklarheit, arial"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28px
    letterSpacing: -0.3px
  title-category:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 36px
  body-promo:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 27.94px
  body-promo-mobile:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.92px
  body:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  footer-heading:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 800
    lineHeight: 24px
  button:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  button-pill:
    fontFamily: "jbklarheit, arial"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 0.1px
  button-small:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  label-strong:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 800
    lineHeight: 21px
  link-small:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  caption:
    fontFamily: "jbklarheit, \"jbklarheit Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px

rounded:
  none: 0px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 16px
  image: 20px
  3xl: 24px
  pill: 9999px

spacing:
  unit: 4px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 20px
  2xl: 24px
  3xl: 32px
  4xl: 40px
  5xl: 80px

components:
  button-primary-search:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: 0px 9999px 9999px 0px
    padding: 16px 24px
    height: 56px
  button-primary-search-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-pill:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-pill}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 48px
  button-secondary-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.pill}"
    border: "1px solid #8c8c8c"
    padding: 14px 24px
    height: 50px
  button-secondary-outlined-hover:
    backgroundColor: "{colors.container-hover}"
    textColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  link-on-photo:
    textColor: "{colors.accent-aqua}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 24px 8px 8px 16px
    height: 54px
  card-promo:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.3xl}"
    border: "1px solid #e6e6e6"
    padding: 8px 8px 20px
  card-category:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.core-blue}"
    typography: "{typography.title-category}"
    rounded: "{rounded.xl}"
    border: "1px solid #8fd3ff"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    padding: 0px 16px
    height: 56px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.link-small}"
---

## Overview

JetBlue's site is a booking tool first and a magazine second. The top of the homepage is a full-width
photographic hero (aerial landscapes in the capture) carrying a white booking widget: trip-type and
passenger dropdowns, From/To fields, a "Use TrueBlue points" checkbox and the single strongest element
on the page, the **Search flights** button in pure blue `#0000aa`.

Below the fold the page becomes a stack of rounded promotional blocks on white `#ffffff`: a
full-bleed photo banner with a 60px extrabold white headline ("Earn 70,000 bonus TrueBlue points."),
two side-by-side image cards with blue pill buttons, an email sign-up strip, and a grey `#f6f6f6`
band with package categories.

The palette is almost monochrome blue. There are at least five blues in active use, each with a job:
`#0000aa` for actions and links, `#000080` for hover, `#000064` and `#00205b` for headlines,
`#00e1ff` for links that sit on photography. Body copy is a soft black `#212121`, never pure black.

Type is one family, `jbklarheit`, served by JetBlue itself in three files (book, semi, xbold). The
voice is set by weight contrast: 800 for headlines, 600 for card titles, 400 for running text.
Headlines use negative tracking (-0.8px at 32px, -2.4px at 60px).

Shapes are friendly and rounded but not bubbly: 24px on promo cards, 20px on the images inside them,
12px on category cards, full pills on buttons. The one non-symmetric shape — the search button that
is square on the left (where it docks against the input row) and pill-rounded on the right — is the
most recognisable detail of the whole interface.

Microcopy is short and conversational: "Today's travel offers", "Don't let another deal takeoff
without you.", "So many ways to JetBlue.", "Pre-qualify now ›", "Save now ↗". Arrows (› and ↗) are
part of link labels.

**Key characteristics**
- One served typeface, `jbklarheit`, weights 400 / 600 / 700 / 800.
- Pure saturated blue `#0000aa` as the only action colour on the homepage.
- Headline blues `#00205b` (core blue) and `#000064`, not the action blue.
- White canvas, `#f6f6f6` band sections, 1px `#e6e6e6` card borders.
- Pill buttons (`9999px` / `999px`) and 24px card corners.
- Photography is large, saturated, and cropped inside rounded containers.
- A Tailwind-style token layer (`--color-*`, `--radius-*`, `--text-*`) is exposed on `:root`.

## Colors

All hexes below were measured on https://www.jetblue.com/ (computed styles or the site's own
`:root` custom properties). Token names in parentheses are JetBlue's own CSS variable names.

### Brand & Accent
- **Primary** `#0000aa` (`--color-primary` → `--color-blue-20`): Search flights button, pill CTAs,
  nav links, footer links, booking-widget labels. Most-read text colour on the page by character count.
- **Primary hover** `#000080` (`--color-state-primary-hover` → `--color-blue-10`, declared as `navy`):
  measured as the Search flights background on hover and the outlined button text on hover.
- **Primary pressed** `#000064` (`--color-state-primary-pressed` → `--color-blue-5`). Also used as a
  headline colour (tile titles, email strip title).
- **Secondary** `#2323ff` (`--color-secondary` → `--color-blue-40`): declared in the token layer; not
  seen on a homepage element.
- **Core blue** `#00205b` (`--color-core-blue`): the "Today's travel offers" h2 and category card titles.
- **Accent aqua** `#00e1ff` (`--color-accent-secondary` → `--color-aqua-80`): links on top of
  photography, e.g. "Pre-qualify now ›".
- **Accent orange** `#e45104` (`--color-accent` → `--color-orange-55`): declared accent; hover
  `--color-orange-50` and pressed `--color-orange-40` are defined as states.
- **Promo violet** `#dc7bff` (`--color-promo-violet`): declared promotional colour.

### Surface
- **Canvas** `#ffffff`: the body background and the dominant colour in the capture.
- **Surface low** `#f6f6f6` (`--color-neutral-95`): band sections and the utility bar behind the
  "JetBlue / JetBlue Vacations / travel" brand switcher.
- **Surface blue** `#f5f7fa` (`--color-surface` → `--color-blue-98`).
- **Container hover** `#e6e6e6` (`--color-state-surface-container-hover` → `--color-neutral-90`):
  measured as the outlined button background on hover.
- **Skeleton** `#dbdbdb` (`--color-neutral-85`): image placeholders and loading skeletons.
- **Primary container** `#cce8ff` (`--color-primary-container` → `--color-blue-90`).

### Text
- **Ink** `#212121` (`--color-on-surface` → `--color-neutral-10`): body copy and input text.
- **Ink black** `#000000`: card body text inherited from `body`.
- **Ink muted** `#6e6c6d` (`--color-neutral-50`): floating input labels ("From"), captions, legal lines.
- **On primary** `#ffffff`.

### Borders
- **Hairline** `#e6e6e6` (`--color-outline` → `--color-neutral-90`): promo card borders, swap button ring.
- **Outline strong** `#8c8c8c` (`--color-neutral-60`): outlined button border.
- **Border sky** `#8fd3ff` (`--color-blue-80`): package category card border.

### Semantic
- **Negative** `#d50f0f` (`--color-status-negative` → `--color-red-50`).
- **Positive** `#438443` (`--color-status-positive` → `--color-green-50`).
- **Info** `#0068f0` (`--color-status-info` → `--color-blue-50`).
- **Attention** is `--color-yellow-85`, declared as the keyword `gold`.

### Legacy page colours (TrueBlue)
The `/trueblue` page (measured in `jetblue--trueblue.json`) still runs an older template: royal blue
`#0033a0` links, an orange `#ff8200` "Join TrueBlue for free" button with a 12px radius, body text
`#303234`. These are recorded so the difference is visible; new work should follow the homepage tokens.

## Typography

### Font Family
- **jbklarheit** with fallback stack `"jbklarheit Fallback", ui-sans-serif, system-ui, sans-serif`
  (`--font-sans`). Some promo modules declare `jbklarheit, arial` instead.
- Loaded faces (`document.fonts`): `jbklarheit` 400, 500–600 and 700–1000 ranges, plus
  `esklarheitgrotesk` 400/700 used by older modules.
- The preloaded files are named `klarheit_book`, `klarheit_semi` and `klarheit_xbold`.
- Weight tokens on `:root`: `--font-weight-normal 400`, `--font-weight-semibold 600`,
  `--font-weight-bold 700`, `--font-weight-extrabold 800`.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Where |
|---|---|---|---|---|---|
| display-promo | 60px | 800 | 66px | -2.4px | photo banner headline |
| display-promo-mobile | 32px | 800 | 37.76px | -1.2px | same at 390px |
| heading-section | 32px | 800 | 40px | -0.8px | "Today's travel offers" |
| heading-section-mobile | 24px | 800 | 28px | -0.3px | same at 390px |
| heading-section-loose | 32px | 800 | 48px | normal | "Packages, trip deals and more" |
| title-tile | 24px | 600 | 28px | -0.3px | promo card titles |
| title-category | 24px | 600 | 36px | normal | package category cards |
| body-promo | 22px | 400 | 27.94px | normal | banner paragraph (white) |
| body-promo-mobile | 14px | 400 | 17.92px | normal | same at 390px |
| body | 16px | 400 | 24px | normal | running text, inputs |
| footer-heading | 16px | 800 | 24px | normal | "Get To Know Us" |
| button | 16px | 700 | 24px | normal | Search flights |
| button-pill | 16px | 600 | 24px | 0.1px | "Book now", "Save now ↗" |
| button-small | 14px | 700 | 20px | normal | "Explore more flights" |
| label-strong | 14px | 800 | 21px | normal | "Round trip", "1 Adult" |
| link-small | 14px | 400 | 24px | normal | footer links |
| caption | 12px | 400 | 18px | normal | legal / external-link notes |

The site also declares a named type scale on `:root`: `--text-display-xl 5rem`,
`--text-display-l 3.625rem`, `--text-display-m 2.75rem`, `--text-title-l 2rem`,
`--text-title-m 1.5rem`, `--text-title-s 1.25rem`, `--text-subtitle-l 1.125rem`,
`--text-subtitle-m 1rem`, `--text-body 1rem`, `--text-label .875rem`, `--text-caption .75rem`.
Only the sizes in the table above were measured on rendered elements.

### Principles
- Weight does the hierarchy work; colour changes only between action blue and headline blues.
- Large type tightens: -0.8px at 32px, -2.4px at 60px; small pill labels open up to +0.1px.
- Line heights are fixed px values (24px body, 28px/40px headings), not unitless ratios.
- Sentence case everywhere, including buttons ("Search flights", "Book now").

### Note on Font Substitutes
`jbklarheit` is served only by JetBlue and is not offered for download. The file names reference
"klarheit"; Extraset (https://extraset.ch/) sells a retail family called ES Klarheit Grotesk under a
commercial licence, but JetBlue has not published where its face comes from, so treat that only as
the closest licensable option. If neither is available, fall back to the declared stack
(`ui-sans-serif, system-ui, sans-serif`) and keep the measured weights and tracking.

## Layout

### Spacing System
- Base unit `--spacing: .25rem` (4px), Tailwind-style multiples.
- Most frequent gaps: 8px, 4px, 24px, 16px, 12px, 20px.
- Most frequent paddings: 16px, 8px, 24px, 12px, 40px, 32px, 80px.
- Promo cards pad 8px 8px 20px (image sits 8px from the card edge; text block below).
- The header has 0px 16px side padding and is 56px tall.

### Grid & Container
- Desktop measurement viewport 1280px; content width 1200px (the h2 box measured 1200px wide),
  giving 40px side margins.
- Promo cards run two-up at 588px each with a 24px gutter.
- Package categories run three-up at 384px.
- Container tokens on `:root` include `--container-md 28rem`, `--container-3xl 48rem`,
  `--container-4xl 56rem`.

### Whitespace Philosophy
Generous vertical gaps between modules (the capture shows roughly a card-height of white between the
hero and the offers heading), dense content inside modules. The booking widget is compact; marketing
modules breathe.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| level-1 | `none` (`--shadow-elevation-level-1`) | flat cards rely on 1px borders |
| level-2 edge down | `0px 3px 7px #0000001a` | sticky edges |
| level-2 edge up | `0px -3px 7px #0000001a` | bottom bars |
| level-3 | `0px 4px 25px #00000026` | overlays, dropdowns |
| measured | `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px` | 3 elements |
| measured | `rgba(0, 0, 0, 0.15) 0px 4px 12px 0px` | 1 element |

Depth is mostly expressed with borders and image cropping, not shadows. Promo cards are flat white
with a 1px `#e6e6e6` border; category cards use a 1px `#8fd3ff` sky border.

### Decorative Depth
Full-bleed photographs inside rounded containers (24px) create the sense of depth; text on photos is
plain white with no scrim visible in the capture.

## Shapes

### Border Radius Scale
| Token | Value | JetBlue variable | Use |
|---|---|---|---|
| none | 0px | `--radius-none`, `--radius-input-text` | text inputs |
| sm | 4px | `--radius-sm`, `--radius-input-checkbox` | checkboxes |
| md | 6px | `--radius-md`, `--radius-offer-block` | offer blocks, segmented control |
| lg | 8px | `--radius-lg`, `--radius-input-select-list-box` | select list box |
| xl | 12px | `--radius-xl`, `--radius-modal`, `--radius-feature-card` | modals, category cards |
| 2xl | 16px | `--radius-2xl`, `--radius-dropdown` | dropdowns |
| image | 20px | — | images inside promo cards |
| 3xl | 24px | `--radius-3xl`, `--radius-promo-block` | promo cards, photo banner |
| pill | 9999px | `--radius-full`, `--radius-button`, `--radius-chips`, `--radius-badge` | buttons, chips, badges |

Pill CTAs inside Dynamic Yield promo modules are written as `999px`; both render as full pills.

### Asymmetric shapes
- **Search flights**: `border-radius: 0px 9999px 9999px 0px` — flat left edge, round right edge.
- **Submit search** (icon-only variant): `0px 12px 12px 0px`, 56×56.
- Swap origin/destination: a 24×24 circle with a 1px `#e6e6e6` ring.

### Photography Geometry
Landscape crops (the promo card image measured 570×306 with a 20px radius). Imagery is aerial nature
scenes, cabin lifestyle shots, beach and hiking scenes — bright daylight, saturated blue/green.

## Components

### Buttons
- **button-primary-search** — `#0000aa` background, `#ffffff` 16px/700 label, padding 16px 24px,
  height 56px, radius `0px 9999px 9999px 0px`. Hover: background `#000080`.
- **button-primary-pill** — `#0000aa` background, `#ffffff` 16px/600 label with 0.1px tracking,
  padding 12px 20px, height 48px, full pill. Used for "Book now" / "Save now ↗" on promo cards.
- **button-secondary-outlined** — `#ffffff` background, `#0000aa` 14px/700 label, 1px solid
  `#8c8c8c` border, padding 14px 24px, height 50px, full pill. Hover: background `#e6e6e6`, label
  `#000080`, border unchanged.
- On photography the banner uses a white pill with a blue label ("Pre-qualify now ↗") in the capture.

### Cards & Containers
- **card-promo** — white, 1px `#e6e6e6` border, 24px radius, padding 8px 8px 20px; image 20px radius;
  title 24px/600 `#000064`; grey 16px body copy in the capture (exact colour of that paragraph not isolated); pill button at the bottom.
- **card-category** — white, 1px `#8fd3ff` border, 12px radius, 384px wide; title 24px/600/36px
  `#00205b`.
- **Photo banner** — full-width image inside a 24px-radius container, 60px/800 white headline,
  22px/400 white body, white pill button.
- **Email strip** — bordered white container, envelope icon, 24px/600 `#000064` title, 16px body,
  "Sign up now ›" link at right.

### Inputs & Forms
- **text-input** — 54px tall, padding 24px 8px 8px 16px (room for a floating label), transparent/white
  background, text `#212121` 16px/24px, radius 0 (`--radius-input-text: 0px`).
- Floating label: 16px/400 `#6e6c6d` ("From", "To").
- Trip-type and passenger triggers: 14px/800 `#0000aa` text with a chevron.
- Checkbox radius 4px (`--radius-input-checkbox`).

### Navigation
- Utility bar on `#f6f6f6` with three brand tabs (JetBlue, JetBlue Vacations, travel), 40px tall,
  padding 8px 24px; the active tab is `#f6f6f6`, others transparent.
- Main header: white, 56px tall, padding 0px 16px; logo left; "Book", "My Trips", "Travel Info",
  "TrueBlue" in `#0000aa` 16px with chevrons; "Sign in" with a person icon at right.
- A full-width `#0000aa` announcement bar sits under the header.

### Footer
- White footer; column headings 16px/800 `#000080` ("Get To Know Us"); links 14px/400/24px `#0000aa`.
- "Download the JetBlue app" and "See help topics" links in 14px/800.
- Caption line 12px/400/18px `#6e6c6d` ("Indicates link opens an external site").

### Signature Components
- The booking widget docked over the hero photograph, ending in the half-pill Search flights button.
- "Use TrueBlue points" checkbox inside the widget — loyalty is part of search.
- A vertical "Give Feedback" tab fixed to the right edge (visible in the capture).

## Design System Architecture

JetBlue publishes **no public design system**: no documentation site, component inventory, npm token
package or Figma kit was found (searches recorded in `SOURCES.json`). Prophet's case study
(https://prophet.com/case-studies/jetblue) describes the brand work only in general terms ("an
enhancement of their colour, type and imagery. A system that gave the brand flex and the ability to
play"), and the 2023 livery announcement
(https://www.aviationpros.com/airlines/press-release/53063389/jetblue-jetblue-introduces-its-boldest-bluest-plane-ever)
calls it the "first brand refresh in a decade" with a "digital-first appearance". Everything below is the
de-facto system measured on the live site.

### Token architecture
The homepage `:root` exposes 361 custom properties in clear tiers:
- **Primitives**: numbered ramps — `--color-blue-5 #000064`, `--color-blue-20 #00a`,
  `--color-blue-40 #2323ff`, `--color-blue-90 #cce8ff`, `--color-neutral-10 #212121`,
  `--color-neutral-95 #f6f6f6`, plus orange, aqua, red, green, yellow, mint, indigo ramps.
- **Semantic roles** (Material-3-like naming): `--color-primary`, `--color-on-primary`,
  `--color-primary-container`, `--color-surface`, `--color-surface-container-low`,
  `--color-on-surface`, `--color-outline`, `--color-status-negative`.
- **State tokens**: `--color-state-primary-hover`, `--color-state-primary-pressed`,
  `--color-state-surface-container-hover`, `--color-state-accent-pressed`.
- **Usage aliases**: `--color-background-*`, `--color-foreground-*`, `--color-border-*`,
  `--color-foreground-icon-*` that point to semantic roles.
- **Component tokens**: radii per component — `--radius-button`, `--radius-chips`, `--radius-modal`,
  `--radius-dropdown`, `--radius-promo-block`, `--radius-input-text`, `--radius-datepicker`.

### Theming
Only one (light) theme is exposed; no dark-mode or high-contrast variables or classes were found in
the extraction. Tokens are switched through CSS custom properties on `:root`.

### Type & spacing systems
- 4px base (`--spacing: .25rem`), Tailwind utility classes in markup (`text-title-m`,
  `font-semibold`, `whitespace-normal`, `text-foreground-primary-variant!`).
- Named type scale `--text-display-xl` … `--text-caption` (see Typography).
- Breakpoints: `--breakpoint-md 48em`, `--breakpoint-lg 64em`, `--breakpoint-xl 80em`.

### Component model
Measured components: half-pill search button, pill CTA, outlined pill, floating-label input,
dropdown triggers, checkbox, promo card, category card, photo banner, email strip, header, footer.
Component radii are named in tokens (button, chips, badge, modal, dropdown, datepicker,
segmented-control, flag-card, offer-block, nav-block), which indicates those components exist in the
codebase; only the measured ones are specified here.

### Accessibility
No published rules. Observed: a "Skip to main content" link; a visually hidden h1; a focus box-shadow
in the CSS corpus `0 0 0 1px #fff,0 0 0 2px #000,0 0 0 3px #fff` and an inset ring
`inset 0 0 0 2px var(--color-core-blue),inset 0 0 0 4px var(--color-white)`. Primary `#0000aa` on
white has a very high contrast ratio.

### Delivery
The site is a Next.js app (fonts and CSS under `/_next/static/`) styled with Tailwind v4-style variables
(`--tw-*`). Promo modules are injected by Dynamic Yield (`dy-promo__*` classes) and use their own
`jbklarheit, arial` declarations. Older pages (`/trueblue`) use a separate template with `JbKlarheit`.

## Do's and Don'ts

### Do
- Use `#0000aa` for every primary action and link; darken to `#000080` on hover.
- Set headlines in `#00205b` or `#000064` at weight 800/600 with negative tracking.
- Keep body text `#212121` 16px/24px.
- Use full pills for buttons and 24px corners for promo cards.
- Dock the primary search button to the right of the input row with the `0px 9999px 9999px 0px` shape.
- Put photography inside rounded containers with an 8px inset.
- Use sentence case and arrows (› ↗) in link labels.

### Don't
- Don't introduce a second action colour on the homepage (orange `#ff8200` belongs to the legacy
  TrueBlue template).
- Don't use pure black for body text.
- Don't round text inputs — `--radius-input-text` is 0px.
- Don't add drop shadows to cards; use the 1px `#e6e6e6` border.
- Don't use the action blue `#0000aa` for large headlines.
- Don't mix in a second typeface.

## Responsive Behavior

### Breakpoints
| Name | Value |
|---|---|
| md | 48em (768px) |
| lg | 64em (1024px) |
| xl | 80em (1280px) |

### Touch Targets
- Search flights 56px tall; pill CTAs 48px; outlined pill 50px; header 56px.

### Collapsing Strategy
- At 390px the section heading drops from 32px/800/40px to 24px/800/28px (-0.3px tracking).
- The promo banner headline drops from 60px to 32px (37.76px line height, -1.2px tracking); its
  paragraph from 22px to 14px (17.92px line height).
- The Search flights button becomes full-width (294px at 390px) with a full `9999px` pill radius.
- Tile titles stay 24px/600.

### Image Behavior
Photos keep their rounded containers and crop to fill; the hero photograph stays behind the booking
widget.

## Iteration Guide

1. Start every screen on `#ffffff` with `jbklarheit` 16px/24px `#212121` body text.
2. Add the action layer in `#0000aa` only; hover `#000080`, pressed `#000064`.
3. Headline at 32px/800/40px `#00205b`, -0.8px; marketing banner at 60px/800/66px white, -2.4px.
4. Card: white, 1px `#e6e6e6`, 24px radius, 8px 8px 20px padding, 20px-radius image.
5. Buttons: pill 12px 20px (48px) or outlined pill 14px 24px (50px) with `#8c8c8c` border.
6. Inputs: 54px tall, 24px 8px 8px 16px padding, floating 16px `#6e6c6d` label, no radius.
7. Check at 390px: 24px section headings, 32px banner headline, full-width search button.
8. Never invent tints: use the `--color-*` ramps listed above.
