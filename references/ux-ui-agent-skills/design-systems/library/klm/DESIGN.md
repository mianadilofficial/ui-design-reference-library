---
version: alpha
name: KLM Royal Dutch Airlines
category: "Airlines"
description: "KLM's web system (Air France-KLM \"Aero\" design system) as shipped on klm.com — a warm sand canvas #f5f1ed, deep navy #002746 text and footer, action blue #0070c2 hovering to #005496, pale-blue tonal buttons #d0e7f6 with 12px radius and 1.25px tracking, white 24px-radius cards, and the custom KLM Universal Sans in Display (headlines, 500) and Text (body, 400) cuts."

colors:
  primary: "#0070c2"
  primary-hover: "#005496"
  canvas: "#f5f1ed"
  ink: "#002746"
  ink-inverse: "#d0e7f6"
  text-default: "#002746"
  text-strong: "#001527"
  text-secondary: "#565250"
  text-neutral-800: "#3e3b3a"
  text-disabled: "#797471"
  surface: "#ffffff"
  surface-inverse: "#002746"
  surface-hover-warm: "#ebe2db"
  surface-hover-light: "#fbf7f3"
  surface-info: "#ebf3f8"
  primary-50: "#eaf4fb"
  tonal: "#d0e7f6"
  tonal-hover: "#a5d5ef"
  klm-blue: "#00a1de"
  blue-700: "#003d6d"
  border-strong: "#99948f"
  border-subtle: "#d4ccc6"
  error: "#d10031"
  loyalty-flying-blue: "#0800b9"

typography:
  display-h1:
    fontFamily: "\"Universal Sans Display\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 40px
  heading-1-mobile:
    fontFamily: "\"Universal Sans Display\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 32px
  heading-2:
    fontFamily: "\"Universal Sans Display\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
  heading-card:
    fontFamily: "\"Universal Sans Display\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
  heading-3:
    fontFamily: "\"Universal Sans Display\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 26px
  logo-heading:
    fontFamily: "UniversalSansTextRegular, -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: 0.25px
  body-lg:
    fontFamily: "\"Universal Sans Text\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  body:
    fontFamily: "\"Universal Sans Text\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-sm:
    fontFamily: "\"Universal Sans Text\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
  caption:
    fontFamily: "\"Universal Sans Text\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: "UniversalSansTextRegular, -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 1.25px

rounded:
  hairline: 2px
  sm: 4px
  md: 12px
  lg: 16px
  xl: 24px
  xxl: 32px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 32px
  xxl: 40px
  section-sm: 64px
  section: 80px

components:
  button-primary:
    backgroundColor: "{colors.tonal}"
    textColor: "{colors.text-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px
    height: 48px
    boxShadow: "rgba(0, 0, 0, 0) 0px 0px 0px 0px"
  button-primary-hover:
    backgroundColor: "{colors.tonal-hover}"
    boxShadow: none
  button-secondary:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.text-default}"
    rounded: "{rounded.md}"
    height: 48px
  button-secondary-hover:
    backgroundColor: "{colors.surface-hover-warm}"
  link-card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.primary}"
    borderColor: "{colors.border-subtle}"
    rounded: "{rounded.md}"
    height: 60px
  link-card-hover:
    backgroundColor: "{colors.surface-hover-light}"
    textColor: "{colors.primary-hover}"
    borderColor: "{colors.text-disabled}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  link-hover:
    textColor: "{colors.primary-hover}"
  nav-tab:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.primary}"
    rounded: "{rounded.md}"
    height: 50px
  nav-tab-hover:
    backgroundColor: "{colors.surface-hover-warm}"
    textColor: "{colors.primary-hover}"
  card:
    backgroundColor: "{colors.surface}"
    rounded: "{rounded.xl}"
    padding: 24px
    boxShadow: "rgba(0, 0, 0, 0.08) 0px 0px 0px 0px"
  card-promo-dark:
    backgroundColor: "{colors.surface-inverse}"
    textColor: "{colors.surface}"
    titleTypography: "{typography.heading-card}"
    rounded: "{rounded.xl}"
    padding: 24px
  popover-info:
    backgroundColor: "{colors.surface-info}"
    textColor: "{colors.text-default}"
    rounded: "{rounded.hairline}"
    boxShadow: "rgba(0, 0, 0, 0.24) 0px 4px 4px 0px, rgba(0, 0, 0, 0.12) 0px 0px 4px 0px"
  footer:
    backgroundColor: "{colors.surface-inverse}"
    textColor: "{colors.ink-inverse}"
    headingColor: "{colors.surface}"
    typography: "{typography.body-sm}"
    topBorderColor: "{colors.klm-blue}"
  footer-link-hover:
    textDecoration: underline
  feedback-tab:
    backgroundColor: "{colors.klm-blue}"
    textColor: "{colors.surface}"
    rounded: "3px 3px 0px 0px"
---

## Overview

KLM's website is calm, warm and service-first. The page sits on a sand-coloured canvas
(`#f5f1ed`, the Aero token `--aero-color-background-default`), not on white. White is
reserved for things you can act on or read in a block: the header, the booking widget,
cards and link-cards. A deep navy (`#002746`, `--aero-color-text-default`, the `ink` token) carries body
copy, headlines and the full-bleed footer.

The captured homepage (klm.com geo-redirected to klm.co.th) shows, top to bottom:

- a white header with the KLM crown logo plus "Royal Dutch Airlines" wordmark in KLM blue,
  utility actions (search, "Thailand - EN", "Log in") and the primary tabs
  Book / My Trip / Check-in / Flying Blue / Information, with an underline under the
  active tab;
- a full-width photograph (Dutch windmills over tulip fields) with a dark navy promo
  card ("Enjoy the beauty of Amsterdam", 24px radius) floating over its right edge;
- a pale-blue information popover ("You've landed on the KLM Thailand website");
- a white booking panel with large rounded corners overlapping the photo;
- a centred section headline ("Your next adventure awaits", 36px) above a segmented
  toggle (Flights / Promo rewards) and an inline-select sentence ("Discover our best
  Economy Class deals departing from Bangkok");
- a split newsletter card (white text half, photographic half) with a pale-blue
  "Sign up now" button;
- a navy footer with a thin KLM-blue top stripe, five link columns twice over, app-store
  badges, and a white legal strip at the very bottom.

The mood is "helpful airline": no gradients, no drop-shadow theatrics, generous
whitespace, photography of destinations, and medium-weight (500) display type that
never shouts.

Measured from: `web/data/extracted/klm.json` (homepage), plus two extra pages measured
with the same extractor — `klm--home` (klm.co.th homepage, booking widget loaded) and
`klm--flyingblue` (https://www.klm.co.th/information/flying-blue, a content page with a
real h1, h2, h3, cards and a link-card).

## Colors

### Brand & Action

- **Action blue** `#0070c2` (`colors.primary`) — `--aero-color-primary-500`,
  `--aero-color-text-link-default`, `--aero-color-background-brand`,
  `--aero-color-text-brand`. Used for nav tabs, links, the logo wordmark text and the
  booking search button.
- **Action blue hover** `#005496` (`colors.primary-hover`) — measured on hover of every
  nav tab ("Book", "My Trip", "Check-in", "Flying Blue") and of every Flying Blue page
  link. Also `--aero-color-blue-600`.
- **KLM Blue** `#00a1de` (`colors.klm-blue`) — the logo blue. The official Aero colour
  page says this brand colour is for "logo and visuals only". On the site it appears as
  the footer's top stripe, the vertical "Feedback" tab and border accents — never as
  a text or button colour.
- **Blue 700** `#003d6d` — `--aero-color-blue-700` /
  `--aero-color-text-action-tertiary-hover`.

### Surface

- **Canvas** `#f5f1ed` — the page background (body bg and largest-area bg on every
  measured page). It is the warm sand tone visible behind all sections.
- **Surface** `#ffffff` — header, booking widget, cards, link-cards, legal strip.
- **Surface inverse** `#002746` — the footer and the dark promo card over the hero.
- **Warm hover** `#ebe2db` (`--aero-color-neutral-200`) — the hover background of
  header buttons and nav tabs.
- **Light hover** `#fbf7f3` (`--aero-color-surface-action-secondary-hover`) — hover
  background of the white link-card.
- **Info surface** `#ebf3f8` — the country-redirect popover.
- **Primary 50** `#eaf4fb` (`--aero-color-primary-50`) — a very pale blue measured as
  a background on the loaded homepage.
- **Tonal** `#d0e7f6` — the pale-blue fill of "Sign up now" / "Explore all deals".
- **Tonal hover** `#a5d5ef` (`--aero-color-blue-200`) — the same buttons on hover.

### Text

- **`colors.ink` `#002746`** (= **Text default**, `--aero-color-text-default`) — the
  body ink on the sand canvas and white cards: headlines and body paragraphs on light
  surfaces. Footer column titles are white on navy.
- **`colors.ink-inverse` `#d0e7f6`** — by measured character count this pale blue is the
  most-read text colour on the homepage, because the very long footer link lists
  (Customer service, Travel guides, Top destinations, Trending routes …) are set in it
  on navy. It is unreadable on the sand canvas; use it only on `#002746`.
- **Text strong** `#001527` (`--aero-color-primary-900`) — label colour on tonal
  buttons.
- **Text secondary** `#565250` — small print such as "* The displayed prices are for
  one adult" (12px).
- **Neutral 800** `#3e3b3a` (`--aero-color-neutral-800`).
- **Disabled** `#797471` (`--aero-color-text-disabled`) — also the hover border of the
  link-card.

### Borders

- **Border strong** `#99948f` (`--aero-color-border-strong`) — most frequent border.
- **Border subtle / disabled** `#d4ccc6` (`--aero-color-border-disabled`) — link-card
  outline at rest.

### Semantic

- **Error** `#d10031` — present in the site CSS (Angular Material form-field error
  tokens `--mat-form-field-filled-error-active-indicator-color`) and listed as Red 500
  ("Error states") on the official Aero colour page.
- **Flying Blue loyalty** `#0800b9` (`--aero-color-brand-loyalty-one`) — reserved for
  the Flying Blue programme.

### Note on palette versions

The public Aero colour page (Original theme) lists Primary 500 as `#0077cd` and Primary
900 as `#072b45`. The live site's `--aero-*` variables ship `#0070c2` and `#002746`
instead (both palettes coexist in the CSS: `#0077cd` still appears in Angular Material
slider/toggle tokens). The live site wins; use the `--aero-*` values above.

## Typography

### Font Family

KLM uses its own typeface, **KLM Universal Sans**, in two cuts, per the official Aero
typography page: **Display** for headlines and **Text** for body copy, in Regular,
Medium and Bold. The served `@font-face` families are:

- `"Universal Sans Display"` (loaded at weight 500) — all headings.
- `"Universal Sans Text"` (400 / 500 / 600) — body, links, nav, footer.
- `UniversalSansTextRegular`, `UniversalSansTextBold`, `UniversalSansDisplay` (300 / 500)
  — legacy single-weight families still used by some widgets (the logo h1, the tonal
  buttons).

Fallback stack served by the site and documented by Aero:
`-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif`.

### Hierarchy

| Token | Family | Size | Weight | Line height | Where measured |
|---|---|---|---|---|---|
| display-h1 | Universal Sans Display | 36px | 500 | 40px | Flying Blue h1; homepage section title size |
| heading-1-mobile | Universal Sans Display | 28px | 500 | 32px | Flying Blue h1 at 390px |
| heading-2 | Universal Sans Display | 24px | 500 | 36px | "About Flying Blue" |
| heading-card | Universal Sans Display | 20px | 500 | 28px | "Enjoy the beauty of Amsterdam" |
| heading-3 | Universal Sans Display | 18px | 500 | 26px | "Discover Flying Blue" |
| logo-heading | UniversalSansTextRegular | 20px | 500 | 32px, 0.25px tracking | the homepage h1 (logo wrapper) |
| body-lg | Universal Sans Text | 18px | 400 | 26px | Flying Blue intro paragraph |
| body | Universal Sans Text | 16px | 400 | 24px | links, nav, footer root |
| body-sm | Universal Sans Text | 14px | 400 | — | most-read size (footer lists) |
| caption | Universal Sans Text | 12px | 400 | 18px | price disclaimer |
| button | UniversalSansTextRegular | 14px | 500 | 24px, 1.25px tracking | "Sign up now" |

### Principles

- Headlines are **medium (500)**, never bold, on this site — even the 36px page titles.
- Sizes follow the Aero tokens: `--aero-font-size-100` = 16px × .875 (14px),
  `--aero-font-size-150` = 16px, `--aero-font-size-200` = 16px × 1.125 (18px),
  `--aero-body-xl-regular-font-size` = 16px × 1.25 (20px).
- The official typography page states titles follow a major-third scale and body copy a
  minor-third scale, aligned to a 4px baseline grid, with body line height around 150%.
- Tracking is normal everywhere except the tonal button label (1.25px) and the logo
  heading (0.25px).
- No uppercase transforms were measured.

### Note on Font Substitutes

KLM Universal Sans is proprietary (custom-made for KLM per the Aero typography page) and
is not publicly licensed. When it is unavailable, use the site's own fallback stack
(`-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif`); that is the only
substitute KLM itself specifies. Keep weights at 400 (text) and 500 (headings) so the
quiet tone survives.

## Layout

### Spacing System

- Aero spacing is "based on 8px increments with additional 4px increments for smaller
  sizes", and every dimension should align to a 4px baseline grid (official spacing
  page).
- Live tokens: `--aero-space-100` 4px, `--aero-space-200` 8px, `--aero-space-250` 12px,
  `--aero-space-300` 16px, `--aero-space-md` 24px, `--aero-space-lg` 32px,
  `--aero-space-600` 40px, `--aero-space-700` 48px, `--aero-space-800` 64px,
  `--aero-space-900` 80px; base unit `--bwc-base-unit` 8px.
- Most frequent measured paddings: 4px, 12px, 16px, 24px, 8px; gaps: 10px, 12px, 24px,
  4px, 80px.

### Grid & Container

- Content on content pages sits in a centred column about 960px wide (the Flying Blue
  page body spans 120px → 840px in the 960px capture of a 1280px viewport).
- The official layout page describes a maximum of 12 percentage-based columns with fixed
  gutters and margins that change per breakpoint; it does not publish the numbers on the
  overview page, so none are declared here.
- Card rows: 2-up for feature cards, 3-up for secondary cards, 3-up for "Read more
  about" link tiles.

### Whitespace Philosophy

Sections are separated by large sand gaps (80px is a measured gap). Inside white blocks
the rhythm is 24px padding. The header is dense; everything below it breathes.

## Elevation & Depth

Aero defines five elevation levels (0–4) on its official elevation page: level 0 for
buttons, inputs, links, tabs; level 1 for cards and panels; level 2 for hover states and
tooltips; level 3 for calendars, dropdowns, header and toasts; level 4 only for dialogs.
"B" variants flip the y-offset for bottom sheets and bottom navigation.

Measured shadows on the live site:

- `--aero-box-shadow-level-2`: `0px 3px 8px 0px rgba(0, 0, 0, .16)`.
- `--aero-box-shadow-level-4`: `0px 8px 16px 4px rgba(0, 0, 0, .16)`.
- Cards at rest: `rgba(0, 0, 0, 0.08) 0px 0px 0px 0px` — effectively flat; cards separate
  from the canvas by colour (white on sand), not by shadow.
- Info popover: `rgba(0, 0, 0, 0.24) 0px 4px 4px 0px, rgba(0, 0, 0, 0.12) 0px 0px 4px 0px`.
- Tonal button: `rgba(0, 0, 0, 0) 0px 0px 0px 0px` at rest, `none` on hover.

Depth comes mostly from overlap: the booking panel overlaps the hero photo; the navy
promo card overlaps the photo's right edge.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| hairline | 2px | info popover |
| sm | 4px | small controls |
| md | 12px | buttons, header buttons, nav tabs, link-cards (most frequent) |
| lg | 16px | segmented toggle / panels |
| xl | 24px | content cards, dark promo card (`--aero-border-radius-400`) |
| xxl | 32px | large panels (`--aero-border-radius-500`) |
| pill | 9999px | a 999px pill measured on the homepage; circles use 50% |

Asymmetric radii measured: `12px 0px 0px 12px` / `0px 12px 12px 0px` (joined input
pairs), `24px 24px 0px 0px` (card image tops on Flying Blue), `24px 24px 24px 0px`, and
`3px 3px 0px 0px` on the rotated Feedback tab.

The official Aero button page says "All Buttons use a 4px corner radius"; the live site
renders its buttons at 12px. The live site wins.

### Photography Geometry

Photos are full-bleed in the hero and clipped to the card radius (24px top corners) in
cards. No skew, notch or clip-path shapes were measured.

## Components

### Buttons

- **button-primary (tonal)** — measured "Sign up now" and "Explore all deals":
  bg `#d0e7f6`, text `#001527`, `UniversalSansTextRegular` 14px / 500, line height 24px,
  letter-spacing 1.25px, padding 12px, height 48px, radius 12px.
  Hover: bg `#a5d5ef`, shadow none.
- **button-secondary (header button)** — "Thailand - EN", "Log in": bg `#ffffff`, text
  `#002746`, radius 12px, height 48px. Hover: bg `#ebe2db`.
- The booking widget's search button is a solid action-blue (`#0070c2`) block on the
  right of the panel (seen in the capture while loading); its exact padding was not
  measured, so it is not declared.
- Aero documents four button variants — Primary, Secondary, Tertiary (outlined) and
  Text — and says a primary button "should be applied just once on a page".

### Cards & Containers

- **card** — white `#ffffff`, radius 24px, padding 24px, flat. Image on top (24px top
  corners), title in heading-3 (18px/500) in navy, description in 16px.
- **card-promo-dark** — bg `#002746`, white text, 24px radius, 24px padding, heading-card
  20px/500/28px title, "Book now →" text link aligned right.
- **link-card** — "Go to my Flying Blue account": white, 1px border `#d4ccc6`, radius
  12px, height 60px, user icon left, arrow right, text `#0070c2`. Hover: bg `#fbf7f3`,
  text `#005496`, border `#797471`.
- **popover-info** — bg `#ebf3f8`, text `#002746`, radius 2px, two-layer shadow, close
  "×" top-right.

### Inputs & Forms

The booking widget fields render as `#ebe2db`-tinted skeleton blocks in the capture
while loading; no populated text field was measured, so no text-input token is
declared. Aero documents the Text Field as outlined with rounded corners, a label
outside the container, optional hint text and leading/trailing icons.

### Navigation

- Header: white, logo left, utility buttons right.
- **nav-tab** — Book / My Trip / Check-in / Flying Blue / Information: text `#0070c2`,
  white bg, height 50px, radius 12px; hover text `#005496` on `#ebe2db`. The active tab
  carries a blue underline bar (visible in both captures).
- Breadcrumb on content pages: underlined "Information" link, chevron, current page in
  navy.

### Footer

- bg `#002746`, a thin `#00a1de` stripe on top.
- Column titles in white; links in `#d0e7f6`; hover adds `underline` (measured).
- Five columns: Customer service, About KLM, Deals, More KLM, Download the app; then
  Related websites, Travel guides, Top destinations, Popular countries, Trending routes.
- White legal bar below: Legal information | Privacy statement | Accessibility
  statement | © KLM | Cookie settings, separated by thin vertical rules.

### Signature Components

- **Segmented toggle** — "Flights / Promo rewards": a sand-tinted rounded track with the
  selected option as a white raised pill in action blue.
- **Inline select sentence** — "Discover our best **Economy ▾** Class deals departing
  from **Bangkok ▾**".
- **Feedback tab** — vertical tab fixed to the right edge, bg `#00a1de`, white text,
  radius `3px 3px 0px 0px`.

## Design System Architecture

KLM builds its web product on **Aero**, the shared design system of Air France and KLM.
Aero "provides reusable components and guidelines to help teams create consistent,
on-brand digital experiences for Air France and KLM", and is being applied to "Blueweb
first" (the booking website) before other touchpoints
([About Aero](https://design.klm.com/latest/about-aero/about-aero-cx5D0r0V)).

### Token architecture

- The public colour page organises a **primitive palette** by family and shade number
  (Primary 100/300/500/800/900, Grey, Blue, Green, Red, Yellow, Neutral) plus opacity
  tokens such as "Opacity / Black 08"
  ([Colour – Original theme](https://design.klm.com/latest/foundation/colour/original-theme-gEcw2EQQ)).
- The live CSS exposes the tiers as custom properties prefixed `--aero-`:
  - primitives: `--aero-color-blue-600`, `--aero-color-neutral-200`,
    `--aero-color-primary-500`, `--aero-space-300`, `--aero-border-radius-400`;
  - semantic: `--aero-color-background-default`, `--aero-color-text-default`,
    `--aero-color-text-link-default`, `--aero-color-border-strong`,
    `--aero-color-surface-action-secondary-hover`,
    `--aero-color-text-action-secondary-critical-pressed`;
  - typography composites: `--aero-body-m-regular-font-family`,
    `--aero-headline-m-font-weight`, `--aero-display-s-font-size`;
  - elevation: `--aero-box-shadow-level-2`, `--aero-box-shadow-level-4`.
- Domain tokens exist for airline concepts: `--aero-color-airport-ams-one`,
  `--aero-color-surface-cabin-step-four`, `--aero-color-brand-loyalty-tier-100`,
  `--aero-color-text-la-premiere-default`.
- Older `--bwc-*` tokens (`--bwc-base-unit`, `--bwc-palette-primary-900`) and Angular
  Material `--mat-*` tokens are shipped alongside.

### Theming

- The official colour section lists an **Original theme** and a **Dark theme**
  ([Colour](https://design.klm.com/latest/foundation/colour/original-theme-gEcw2EQQ)).
- The Storybook linked from the typography page selects a stylesheet via a
  `selectedStylesheetID:kl` global, i.e. brand stylesheets are swapped per brand
  ([Typography – Web](https://design.klm.com/latest/foundation/typography/web-KLhF9Llz)).
- No dark mode was observed on klm.com itself.

### Type & spacing systems

- Typeface: KLM Universal Sans, Display + Text, Regular/Medium/Bold; titles on a
  major-third scale, body on a minor-third scale, 4px baseline grid, ~150% body line
  height ([Typography overview](https://design.klm.com/latest/foundation/typography/overview-EDtalZdW)).
- Spacing: 8px increments with 4px for small sizes; align to the 4px grid; avoid fixed
  dimensions ([Spacing](https://design.klm.com/latest/foundation/spacing-XnRBxesX)).
- Layout: up to 12 percentage-width columns, fixed gutters/margins per breakpoint
  ([Layout](https://design.klm.com/latest/foundation/layout/overview-jq56Dufp)).
- Elevation: levels 0–4 plus 2B/3B
  ([Elevation](https://design.klm.com/latest/foundation/elevation-JHKgQFcq)).

### Component model

Official inventory
([Components](https://design.klm.com/latest/components/component-overview-GnbpkJ8C)):
Badge, Breadcrumb, Button, Bottom Sheet, Card, Carousel, Checkbox, Chip, Content image,
Datepicker, Dialog, Expansion panel, Flight Segment, Footer, Hero Image Inspirational,
Highlight block, Inline Select, Label, Link, Loader, Logo Header, Menu, Multi-list, Nav
list, Next Best Action, Notification, Paginator, Progress bar, Progress spinner, Radio,
Select, Side Panel, Slider, Snackbar, Status Label (Flight Status), Stepper, Table, Tabs,
Text Field, Toggle, Tooltip, Tree, Video player.

- Button: Primary, Secondary, Tertiary (outlined), Text; one primary per page
  ([Button](https://design.klm.com/latest/components/button/overview-r2ecqcsn)).
- Text Field: Text Field and Text Area; anatomy = label, hint, leading icon, input text,
  trailing icon/clear button, assistive icon
  ([Text Field](https://design.klm.com/latest/components/text-field/overview-VuuublqB)).

### Accessibility

- Aero aims for WCAG AA
  ([Accessibility](https://design.klm.com/latest/accessibility/accessibility/overview-Fq5vZIH9)).
- Text contrast at least 4.5:1, large text (19px bold or 24px regular) at least 3:1
  ([Colour](https://design.klm.com/latest/foundation/colour/original-theme-gEcw2EQQ)).
- Measured live: `--aero-outline-width-default` 2px (focus outline width); Material touch
  targets `--mat-fab-small-touch-target-size` 48px; buttons are 48px tall.

### Delivery

- Documentation site: design.klm.com (versioned under `/latest/`).
- Storybook: storybook.klm.com, linked from the typography page.
- The web implementation on klm.com is Angular (Angular Material `--mat-*` tokens are
  present in the shipped CSS). No public npm package, Figma community kit or GitHub
  repository was found in the documentation pages opened.

## Do's and Don'ts

### Do

- Put pages on the sand canvas `#f5f1ed`; use white only for blocks.
- Set running text in `#002746` on light surfaces and `#d0e7f6`/white on navy.
- Use `#0070c2` for links and nav, `#005496` for their hover.
- Use the tonal button (`#d0e7f6`, 12px radius, 48px tall, 1.25px tracking) for
  in-content calls to action.
- Use Universal Sans Display at weight 500 for every heading.
- Round cards at 24px and controls at 12px.
- Keep cards flat; let colour separate them from the canvas.
- Use real destination photography, bright and daylight.
- Keep KLM Blue `#00a1de` for the logo and small brand accents.
- Snap spacing to 4px / 8px steps.

### Don't

- Don't use pure white as the page background.
- Don't use `#00a1de` as a text or button colour.
- Don't set headlines in bold or uppercase.
- Don't add heavy shadows to cards at rest.
- Don't use the old `#0077cd` palette from the public colour page; ship the live values.
- Don't use `#d0e7f6` text on the sand or white surfaces — it is a footer-on-navy colour.
- Don't invent gradient backgrounds; none were measured.
- Don't mix more than one solid primary action per page.

## Responsive Behavior

### Breakpoints

Measured at 1280px (desktop) and 390px (mobile). Aero's layout page states gutters and
margins change per breakpoint range but the overview does not list values, so no
breakpoint numbers are declared.

### Type at 390px

- Content-page h1 drops from 36px/40px to 28px/32px (`heading-1-mobile`).
- The most-read size on mobile is 16px; 18px, 14px, 12px, 20px, 28px and 22px also occur.
- Header height measured 56px on mobile (122px on desktop including the tab row).

### Touch Targets

Buttons and header controls are 48px tall; nav tabs 50px; link-cards 60px.

### Collapsing Strategy

Mobile tab row and card row layout were not measured.

### Image Behavior

Hero photography stays full-bleed; card images keep their 24px top corners.

## Iteration Guide

1. Start with canvas `#f5f1ed`, a white header and a navy `#002746` footer with a
   `#00a1de` top stripe.
2. Set body copy in Universal Sans Text 16px/24px `ink` `#002746`.
3. Set headings in Universal Sans Display 500: 36/40, 24/36, 18/26.
4. Build cards: white, 24px radius, 24px padding, no shadow.
5. Add tonal buttons: `#d0e7f6` on `#001527`, 12px radius, 12px padding, 48px height,
   hover `#a5d5ef`.
6. Links and nav in `#0070c2`, hover `#005496`; nav hover bg `#ebe2db`.
7. Footer link lists in `ink-inverse` `#d0e7f6` 14px, underline on hover.
8. Compare against the capture: if anything looks bolder, shinier or whiter than KLM,
   remove it.
9. When a component is not listed here, check design.klm.com before inventing it.
