---
version: alpha
name: Nubank
category: "Banking & Insurance"
description: "Nubank (Nu) corporate site nu.com: Nu Purple #8d0de3 and its deeper steps #5d0599, #3f026a and #1e002f, used as the dominant page field (#8d0de3 covers the largest area) with white #ffffff text, set against warm cream bands (#f3efe6, #fffef6, #f8dcc6) and white sections. Type is the proprietary Nu Sans family, served as nuSansDisplaySemibold for 88px/83.6px hero titles with -3px tracking, nuSansDisplayMedium for 24-52px headings and nuSansRegular 20px/28px for body. Buttons are full pills (1000px radius, 56px tall, 16px 32px padding, 18px/600 with +0.5px tracking); cards use 12-16px corners."

colors:
  primary: "#8d0de3"
  primary-deep: "#5d0599"
  primary-darker: "#3f026a"
  primary-darkest: "#1e002f"
  primary-hovered: "#490b75"
  primary-pressed: "#320850"
  lavender: "#c291fe"
  lavender-light: "#d6b9fe"
  on-primary: "#ffffff"
  canvas: "#8d0de3"
  ink: "#ffffff"
  surface-white: "#ffffff"
  ink-on-light: "#000000"
  ink-soft: "#27272a"
  ink-muted: "#52525d"
  ink-disabled: "#a2a2a2"
  cream: "#f3efe6"
  ivory: "#fffef6"
  peach: "#f8dcc6"
  sand: "#e5d8bd"
  gold-sand: "#efd49c"
  periwinkle: "#96b0fd"
  scrim: "#00000080"
  neutral-high: "#f4f4f4"
  border-default: "#e4e4e4"
  success: "#0c7a3a"
  error: "#d01d1c"
  attention: "#9b5a00"

typography:
  display-xxl:
    fontFamily: "nuSansDisplaySemibold, \"nuSansDisplaySemibold Fallback\", arial, helvetica"
    fontSize: 116px
    fontWeight: 600
    lineHeight: 104.4px
    letterSpacing: -3.5px
  display-hero:
    fontFamily: "nuSansDisplaySemibold, \"nuSansDisplaySemibold Fallback\", arial, helvetica"
    fontSize: 88px
    fontWeight: 600
    lineHeight: 83.6px
    letterSpacing: -3px
  display-xl:
    fontFamily: "nuSansDisplaySemibold, \"nuSansDisplaySemibold Fallback\", arial, helvetica"
    fontSize: 80px
    fontWeight: 600
    lineHeight: 80px
    letterSpacing: -2px
  heading-xl:
    fontFamily: "nuSansDisplayMedium, \"nuSansDisplayMedium Fallback\", arial, helvetica"
    fontSize: 52px
    fontWeight: 500
    lineHeight: 57.2px
    letterSpacing: -1px
  heading-lg:
    fontFamily: "nuSansDisplayMedium, \"nuSansDisplayMedium Fallback\", arial, helvetica"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: -0.5px
  heading-md:
    fontFamily: "nuSansDisplayMedium, \"nuSansDisplayMedium Fallback\", arial, helvetica"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
  body-lg:
    fontFamily: "nuSansRegular, \"nuSansRegular Fallback\", arial, helvetica"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: -0.5px
  label-strong:
    fontFamily: "nuSansSemibold, \"nuSansSemibold Fallback\", arial, helvetica"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 25.2px
  body:
    fontFamily: "nuSansRegular, \"nuSansRegular Fallback\", arial, helvetica"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  body-medium:
    fontFamily: "nuSansMedium, \"nuSansMedium Fallback\", arial, helvetica"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
    letterSpacing: -0.5px
  small:
    fontFamily: "nuSansRegular, \"nuSansRegular Fallback\", arial, helvetica"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.9px
  button:
    fontFamily: "nuSansSemibold, \"nuSansSemibold Fallback\", arial, helvetica"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 21.6px
    letterSpacing: 0.5px
  button-sm:
    fontFamily: "nuSansSemibold, \"nuSansSemibold Fallback\", arial, helvetica"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 19.2px
  nav-item:
    fontFamily: "nuSansSemibold, \"nuSansSemibold Fallback\", arial, helvetica"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 20px
  mobile-h1:
    fontFamily: "nuSansDisplaySemibold, \"nuSansDisplaySemibold Fallback\", arial, helvetica"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 45.6px
    letterSpacing: -1.5px
  mobile-body:
    fontFamily: "nuSansRegular, \"nuSansRegular Fallback\", arial, helvetica"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: -0.5px

rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 16px
  pill: 1000px

spacing:
  s4: 4px
  s8: 8px
  s12: 12px
  s16: 16px
  s20: 20px
  s24: 24px
  s32: 32px
  s40: 40px
  s48: 48px
  s60: 60px
  s64: 64px
  s80: 80px
  s112: 112px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 32px
    height: 56px
  button-deep:
    backgroundColor: "{colors.primary-deep}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 32px
    height: 56px
  button-white:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 32px
    height: 56px
  button-outline-purple:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.primary}"
    borderColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 32px
    height: 56px
  button-outline-white:
    textColor: "{colors.on-primary}"
    borderColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 52px
  nav:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.primary-darkest}"
    typography: "{typography.nav-item}"
    height: 56px
  nav-item-hover:
    textColor: "{colors.primary}"
  text-input:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-soft}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 20px 24px 4px
    height: 55px
  value-card:
    backgroundColor: "{colors.primary-deep}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading-md}"
    rounded: "{rounded.lg}"
    padding: 32px
  testimonial-card:
    backgroundColor: "{colors.primary-deep}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading-md}"
    rounded: "{rounded.xl}"
    padding: 40px 40px 32px
  news-card:
    backgroundColor: "{colors.cream}"
    textColor: "{colors.ink-on-light}"
    typography: "{typography.heading-md}"
    rounded: "{rounded.xl}"
    padding: 40px 24px 32px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.primary-darkest}"
    textColor: "{colors.ink-disabled}"
    typography: "{typography.small}"
    padding: 64px 40px
---

## Overview

The assigned URL (https://international.nubank.com.br/) redirects to Nu's corporate "About Nu" page, https://nu.com/en/about, which is what was measured (1280px viewport). Nubank is the consumer brand. Nu Holdings ("Nu") is the group, and the page uses "Nu" throughout ("Welcome to Nu", "Nu for consumers", "Nubank Brazil").

The page opens with a slim 56px white header:
- the purple lowercase "nu" logo at left
- three 20px semibold items (Careers ▾, Press ▾, Investor relations) in near-black purple `#1e002f`, turning Nu Purple `#8d0de3` on hover
- a search icon and an "EN ▾" language switcher at right

Below it, a full-bleed video still (a woman speaking in a modern office, with a purple-lit screen behind her) carries "Welcome to Nu" in white `display-hero` (88px/83.6px, -3px tracking) at bottom left, and an outlined white "▶ Watch the video" pill at bottom right.

Then the color work begins:
- **Peach band** `#f8dcc6`: "The largest digital bank in Latin America" in 40px `#1e002f` with two paragraphs of 20px/28px body copy, beside a painterly illustration of a purple hang glider over green hills with "140M customers trust Nu" in 80px purple display type.
- **Purple band** `#8d0de3` ("We keep costs low…" in 80px white display).
- **Deep purple** `#5d0599` value cards (Culture, …) and testimonial cards.
- **Periwinkle** `#96b0fd` and **cream/sand** (`#f3efe6`, `#e5d8bd`, `#efd49c`) bands.
- A newsroom row of `#f3efe6` news cards and a newsletter form.
- A `#1e002f` footer with an 80px cream statement ("Your money, set free. Your world, boundless.").

**Key Characteristics:**
- Purple is the brand: `#8d0de3` for buttons, links, hover states and large bands, with `#5d0599`, `#3f026a` and `#1e002f` as deeper steps.
- Warm counter-palette of cream, peach, sand and gold instead of grays.
- Proprietary Nu Sans in two optical sizes: Display (headlines, tight negative tracking) and Text (body).
- Full-pill buttons (`--radii-full 1000px`), 56px tall (`--sizes-buttonSize 56px`), with semibold 18px labels tracked +0.5px.
- Large type scale: 116px and 88px display with -3.5px / -3px tracking.
- Rich, painterly illustration and candid people photography.

## Colors

> Sources: computed styles on https://nu.com/en/about plus the site's own CSS custom properties (Chakra-style `--colors-*` tokens, names in parentheses).

### Brand & Accent
- **Nu Purple** (`{colors.primary}` `#8d0de3`, `--colors-brand-core-60`, `--colors-brand-primary-40`, `--colors-surfaces-states-enabled`): Primary buttons, links, nav hover, the logo (`--colors-surfaces-headerLogo #8D0DE3`), and the largest painted band (3,268 weighted px²).
- **Deep Purple** (`{colors.primary-deep}` `#5d0599`, `--colors-brand-primary-50`): "Search" and "Subscribe" buttons, value and testimonial cards.
- **Darker Purple** (`{colors.primary-darker}` `#3f026a`, `--colors-brand-primary-60`).
- **Darkest Purple** (`{colors.primary-darkest}` `#1e002f`, `--colors-brand-primary-80`): Nav text, headings on light bands, the footer field.
- **Hovered / Pressed** (`{colors.primary-hovered}` `#490b75`, `--colors-surfaces-states-hovered`; `{colors.primary-pressed}` `#320850`, `--colors-surfaces-states-pressedActive`): The system's state tokens.
- **Lavender** (`{colors.lavender}` `#c291fe`, `--colors-brand-primary-25`) and **Lavender Light** (`{colors.lavender-light}` `#d6b9fe`, `--colors-brand-primary-10`): Accent text on dark purple ("Nu for consumers").

### Surface
- **Canvas** (`{colors.canvas}` `#8d0de3`): The background the viewer sees most. Nu Purple covers the largest painted area of the page (3,268 weighted px² in the extraction, about half of the captured first 2,400px). The document `<body>` itself is white.
- **Surface white** (`{colors.surface-white}` `#ffffff`, `--colors-surfaces-default`): Header, newsletter and other light sections.
- **Cream** (`{colors.cream}` `#f3efe6`, `--colors-brand-accent-40` / `--colors-brand-secondary-120`): News cards and bands.
- **Ivory** (`{colors.ivory}` `#fffef6`, `--colors-brand-accent-20`).
- **Peach** (`{colors.peach}` `#f8dcc6`, `--colors-brand-secondary-100`): The "largest digital bank" band.
- **Sand** (`{colors.sand}` `#e5d8bd`, `--colors-brand-accent-50`) and **Gold Sand** (`{colors.gold-sand}` `#efd49c`, `--colors-brand-secondary-140`).
- **Periwinkle** (`{colors.periwinkle}` `#96b0fd`, `--colors-brand-spot-60`).
- **Scrim** (`{colors.scrim}` `#00000080`): Overlay over the hero video.
- **Neutral high** (`{colors.neutral-high}` `#f4f4f4`, `--colors-backgroundColors-high`); **Border default** (`{colors.border-default}` `#e4e4e4`, `--colors-bordersColors-default`).

### Text
- **Ink** (`{colors.ink}` `#ffffff`, `--colors-content-inverse`): The most-read text color by characters (2,263), because most copy sits on purple, video or dark bands.
- **Ink on light** (`{colors.ink-on-light}` `#000000`, `--colors-content-primary`): Body paragraphs on peach, cream and white bands (the measured `bodyText`).
- **Ink soft** (`{colors.ink-soft}` `#27272a`, `--colors-brand-system-70`): Long-form paragraphs and input text.
- **Ink muted** (`{colors.ink-muted}` `#52525d`, `--colors-brand-system-60`): Dates and metadata.
- **Disabled / footer** (`{colors.ink-disabled}` `#a2a2a2`, `--colors-content-states-disabled`): Footer legal text.
- **On primary** (`{colors.on-primary}` `#ffffff`): Button labels on purple.

### Semantic
From the site's tokens: success `{colors.success}` `#0c7a3a` (`--colors-content-feedback-success`), attention `{colors.attention}` `#9b5a00` (`--colors-content-feedback-attention`), error `{colors.error}` `#d01d1c` (`--colors-feedback-red-50`). The focus border token is `--colors-bordersColors-accentFocus #8D0DE3`.

## Typography

### Font Family
**Nu Sans** is "our first proprietary type family" (Nubank blog, https://blog.nubank.com.br/nu-sans/). The post says it was developed over 14 months and is "a living system of 32 weight and width variations". It is split into two optical sizes: **Nu Sans Display**, "for titles and impact messages", and **Nu Sans Text**, "designed specifically for large volumes of text". The site serves each weight as its own family:
- `nuSansDisplaySemibold` (600) and `nuSansDisplayMedium` (500): headlines (`--fonts-title`, `--fonts-titleTwo`)
- `nuSansRegular` (400): body (`--fonts-primary`)
- `nuSansMedium` (500): `--fonts-secondary`
- `nuSansSemibold` (600): buttons, nav, labels (`--fonts-tertiary`)
- also declared: `nuSansBold`, italics, `nuSansDisplayLight`, `nuSansDisplayRegular`
- also present: `graphikRegular` / `graphikMedium` (`--font-nubank-regular` / `--font-nubank-medium`), still declared but not used in the rendered text
- icons: `nubankIcons`

Each stack ends in `arial, helvetica`.

### Hierarchy (measured)

| Token | Family | Size | Weight | Line height | Tracking | Example |
|---|---|---|---|---|---|---|
| `display-xxl` | nuSansDisplaySemibold | 116px | 600 | 104.4px | -3.5px | "Hear directly from our customers" (`#5d0599`) |
| `display-hero` | nuSansDisplaySemibold | 88px | 600 | 83.6px | -3px | h1 "Welcome to Nu" |
| `display-xl` | nuSansDisplaySemibold | 80px | 600 | 80px | -2px | "140M customers trust Nu", "We keep costs low" |
| `heading-xl` | nuSansDisplayMedium | 52px | 500 | 57.2px | -1px | "We're a global team…", "From the Newsroom" |
| `heading-lg` | nuSansDisplayMedium | 40px | 500 | 48px | -0.5px | "The largest digital bank in Latin America" |
| `heading-md` | nuSansDisplayMedium | 24px | 500 | 28.8px | — | card titles, testimonial quotes |
| `body-lg` | nuSansRegular | 20px | 400 | 28px | -0.5px | intro paragraphs (`bodyText`) |
| `label-strong` | nuSansSemibold | 18px | 600 | 25.2px | — | "Nubank Brazil", "Nu for consumers" |
| `body` | nuSansRegular | 16px | 400 | 22.4px | — | long paragraphs |
| `body-medium` | nuSansMedium | 16px | 500 | 22.4px | -0.5px | testimonial names |
| `small` | nuSansRegular | 14px | 400 | 18.9px | — | footer legal |
| `button` | nuSansSemibold | 18px | 600 | 21.6px | 0.5px | pill labels |
| `button-sm` | nuSansSemibold | 16px | 600 | 19.2px | — | "Watch the video" |
| `nav-item` | nuSansSemibold | 20px | 600 | 20px | — | Careers / Press / Investor relations |
| `mobile-h1` | nuSansDisplaySemibold | 48px | 600 | 45.6px | -1.5px | h1 at 390px |
| `mobile-body` | nuSansRegular | 18px | 400 | 25.2px | -0.5px | `bodyText` at 390px |

### Principles
- Display lines are set tighter than solid (line height 0.9–1.0) with heavy negative tracking. Nu's tracking tokens: `--letterSpacings-tiny 0.5px`, `-small -0.5px`, `-medium -1px`, `-xMedium -1.5px`, `-large -2px`, `-xLarge -2.5px`, `-xxLarge -3px`, `-huge -3.5px`.
- Button labels are the only place with positive tracking (+0.5px).
- Line-height tokens run from `--lineHeights-90` to `--lineHeights-140` in 5% steps.
- Sizes follow a "x" scale where xN = 2N px (`--fontSizes-x8 16px`, `x10 20px`, `x12 24px`, `x20 40px`, `x26 52px`, `x40 80px`, `x44 88px`).

### Note on Font Substitutes
Nu Sans is proprietary: the Nubank blog says it is exclusive and acts as "a digital signature", which makes it harder to imitate. No public download exists. The served fallback is `arial, helvetica`. When substituting, keep the measured sizes, tracking and the 500/600 weight split between Display and Text.

## Layout

### Spacing System
- Nu's space tokens follow the same "x" scale (xN = 4N px), e.g. `--space-x15 60px`, `--space-x38 152px`, `--space-x82 328px`.
- Measured gaps: 8px (27), 24px (22), 16px (12), 4px (8), 32px (8), 60px (8), 40px (6), 12px (6), 64px (5), 48px (4), 112px (2).
- Measured paddings: 40px (45), 32px (15), 24px (11), 12px (10), 8px (9), 16px (8), 48px (7), 20px (7).

### Grid & Container
- Content width is 1200px (the footer measures 1200px) inside 40px side padding.
- Two-column splits on light bands: the text column measures about 513px wide (h2 and intro paragraphs).
- Breakpoints: `--breakpoints-xs 375px`, `sm 576px`, `md 768px`, `lgPlus 1100px`, `xl 1280px`, `xxxl 1536px`, `xxxxl 1600px`.

### Whitespace Philosophy
Bands are tall and saturated: each section is a full-width color field (peach, purple, periwinkle, cream) with generous 40–64px inner padding. Color changes between bands do the separating.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | flat color bands | sections |
| 1 | `0 0 30px rgba(0, 0, 0, 0.07)` (CSS) | soft floating elements |
| 2 | `0 40px 20px -20px rgba(0, 0, 0, 0.2)` / `0 32px 68px rgb(0 0 0 / .3)` (CSS) | modals, media |
| scrim | `#00000080` | hero video overlay |

No shadows were measured on homepage cards; they are flat color blocks.

### Decorative Depth
Illustrations carry the depth: layered, painterly hills, clouds and sky with a purple hang glider, in the brand palette (purple, lavender, peach, green).

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | small chips, social icons (`--radii-small`) |
| `{rounded.sm}` | 4px | `--radii-cardSmall` |
| `{rounded.md}` | 8px | inputs, selects, `--radii-cardMedium` |
| `{rounded.lg}` | 12px | value cards (`--radii-cardLarge`), language menu |
| `{rounded.xl}` | 16px | news and testimonial cards (`--radii-cardLargeDesktop`) |
| `{rounded.pill}` | 1000px | all buttons (`--radii-full`) |

The radius tokens are responsive: `--radii-cardLargeMobile 12px` vs `--radii-cardLargeDesktop 16px`, and `--radii-largeMobile 10px` vs `--radii-largeDesktop 24px`.

### Photography Geometry
The hero video is full-bleed with square edges. The illustration panels sit square-cornered beside text.

## Components

### Buttons
- **Primary** (`button-primary`): `#8d0de3`, white 18px/600 label with +0.5px tracking, 1000px radius, padding `16px 32px`, 56px tall ("Explore careers at Nu", "More News", "Accept All").
- **Deep** (`button-deep`): same shape in `#5d0599` ("Subscribe"; "Search" is 48px tall).
- **White** (`button-white`): white fill, `#8d0de3` text ("Check out Nu for Consumers", on purple bands).
- **Outline purple** (`button-outline-purple`): white fill, 1px `#8d0de3` border, `#8d0de3` text, padding `12px 32px` ("Reject All").
- **Outline white** (`button-outline-white`): transparent, 2px white border, 16px/600 label, padding `12px 24px`, 52px ("▶ Watch the video" over video).
- **Icon circle**: 44px circular `#8d0de3` icon buttons; a translucent `#8e0de54d` variant also exists.
- State tokens from CSS: hovered `#490b75`, pressed `#320850`, disabled surface `#e4e4e4` with disabled text `#a2a2a2`.

### Cards & Containers
- **Value card** (`value-card`): `#5d0599`, radius 12px, padding 32px, 24px white title ("Culture") and 16px white text.
- **Testimonial card** (`testimonial-card`): `#5d0599`, radius 16px, padding `40px 40px 32px`, a large quotation mark (40px), 24px/500 quote, 16px/500 name with -0.5px tracking.
- **News card** (`news-card`): `#f3efe6`, radius 16px, padding `40px 24px 32px`, category ("Company", 16px/600 `#3f026a`), date (16px `#52525d`) and a 24px/500 headline.

### Inputs & Forms
- **Text input** (`text-input`): newsletter email field, white, radius 8px, 2px border, padding `20px 24px 4px` (room for a floating "Email" label), 55px tall, 16px/22.4px `#27272a` text.
- **Select** ("Job type"): same 8px radius, 2px border, 56px tall, padding `12px 24px 12px 20px`.
- **Search field**: borderless 20px/28px input with -0.5px tracking.

### Navigation
- **Header** (`nav`): 56px (`--sizes-headerHeightDesktopSlim 55px` token), white, 20px/600 items in `#1e002f`. Hover changes the text to `#8d0de3` (measured), with no underline or background.
- **Language menu**: 12px-radius button with 1px `#8d0de3` border, padding `8px 16px`.

### Links
Inline links are `#8d0de3` semibold (16px/600 "Nu's Global Privacy Notice"; 18px "Privacy Policy").

### Signature Components
- **Brand statement footer** (`footer`): `#1e002f` field with padding `64px 40px`, an 80px `#f3efe6` display statement, then `#a2a2a2` 14px/18.9px legal text, social icons and the language switcher.
- **Stat illustration**: very large purple display numerals integrated into a painted landscape ("140M customers trust Nu").

## Design System Architecture

Nubank runs an internal design system that is not publicly documented. Official Nu engineering posts describe it:
- "Nubank's Design System standardizes components, making it easier for engineers to build consistent and scalable features. The Design System also embeds analytics" (https://building.nu.com/platform-engineering-observability-and-scaling-mobile-development/).
- "Backend Driven Content also complies with Nu's Design System. So, every screen or flow built using BDC, is correctly following Nu's Design System patterns and standards" (https://building.nu.com/server-driven-ui-framework-at-nubank/). BDC is Nu's server-driven UI framework built on Flutter components.

The typeface layer is documented in the Nubank blog (https://blog.nubank.com.br/nu-sans/): two optical sizes (Display / Text), 32 weight and width variations, "acessibilidade como requisito mandatório" (accessibility as a mandatory requirement), tabular numerals, and bold weights that occupy the same width as lighter ones so layouts don't shift. The token layer below is read from the live CSS of https://nu.com/en/about.

- **Token architecture.**
  - *Primitives*: `--colors-brand-core-{10…100}` (purple ramp, e.g. `--colors-brand-core-60 #8D0DE3`), `--colors-brand-primary-*`, `--colors-brand-secondary-*` (warm creams and golds), `--colors-brand-spot-*` (illustration accents such as `#96b0fd`, `#85d1bd`), `--colors-brand-ultravioleta-*`, `--colors-brand-pj-*` (the PJ/business palette), `--colors-neutrals-*`, `--colors-feedback-*`, `--colors-solid-*`.
  - *Semantic*: `--colors-content-*` (`primary`, `secondary`, `inverse`, `linkHover #3E1874`, `states-disabled #A2A2A2`, `feedback-success #0C7A3A`), `--colors-surfaces-*` (`default`, `highest`, `states-enabled #8D0DE3`, `states-hovered #490B75`, `states-pressedActive #320850`), `--colors-bordersColors-*` (`default #E4E4E4`, `accentFocus #8D0DE3`), `--colors-backgroundColors-*`.
  - *Scale tokens*: `--space-x*`, `--fontSizes-x*`, `--radii-*` (with Mobile / Tablet / Desktop variants), `--letterSpacings-*`, `--lineHeights-*`, `--sizes-*` (`buttonSize 56px`, header heights), `--breakpoints-*`.
- **Theming.** Tokens follow the Chakra UI CSS-variable convention (`--chakra-ring-color`, `--chakra-space-x-reverse` are present). Theming is by token values and per-breakpoint radius tokens. Separate brand palettes (core purple, PJ business purple, ultravioleta for premium) sit in the same token set. No dark-mode switch was observed on the corporate site.
- **Type & spacing.** "x" multipliers (space xN = 4N px, font xN = 2N px). Named tracking steps from +0.5px to -16px. Display/Text optical sizes map to `--fonts-title` / `--fonts-titleTwo` vs `--fonts-primary` / `--fonts-secondary` / `--fonts-tertiary`.
- **Component model.** Observed on the web: pill buttons (filled purple, deep purple, white, outline purple, outline white, icon circle), cards (value, testimonial, news), floating-label inputs, selects and a header with dropdown menus. In the app, components come from the Design System and are assembled by BDC (server-driven UI).
- **Accessibility.** Nu Sans was designed with accessibility as a mandatory requirement and to reduce ambiguity between characters (blog). On the web: 56px button height (`--sizes-buttonSize`), a focus border token `#8D0DE3`, and a disabled text token `#A2A2A2`.
- **Delivery.** Mobile is a monorepo with Flutter, Kotlin, Swift and Java and 2,000+ engineers (building.nu.com). No public npm package or Figma kit was found.

## Do's and Don'ts

### Do
- Use Nu Purple `#8d0de3` for primary actions and big brand bands; use `#5d0599` / `#1e002f` for depth.
- Pair purple with warm creams and peach (`#f3efe6`, `#f8dcc6`, `#efd49c`), not cool grays.
- Set headlines in Nu Sans Display with strong negative tracking (-3px at 88px, -2px at 80px, -1px at 52px).
- Make buttons 56px pills with 18px/600 labels tracked +0.5px.
- Use 16px radius on news and testimonial cards, 12px on compact value cards.
- Let full-width color bands separate sections.

### Don't
- Don't use square or slightly-rounded buttons; Nu buttons are always full pills.
- Don't use positive tracking on headlines or negative tracking on button labels.
- Don't introduce blue as an action color; `#96b0fd` periwinkle is an illustration/band accent.
- Don't set text in the still-declared Graphik faces; every rendered string on the page is Nu Sans.
- Don't put `#8d0de3` text on `#5d0599` surfaces; use white or lavender `#c291fe` there.

## Responsive Behavior

### Breakpoints
`--breakpoints-xs 375px`, `sm 576px`, `md 768px`, `lgPlus 1100px`, `xl 1280px`, `xxxl 1536px`, `xxxxl 1600px`.

At 390px (measured):
- The h1 goes from 88px/83.6px/-3px to 48px/45.6px/-1.5px.
- The h2 goes to 28px/33.6px/-0.5px.
- Body text goes to 18px/25.2px/-0.5px.
- The most-set mobile sizes are 22px, 18px, 16px, 14px, 32px, 40px, 28px and 64px.

### Touch Targets
Buttons keep the 56px height. The mobile slim header is 48px (`--sizes-headerHeightMobileSlim 48px`).

### Collapsing Strategy
- Card rows reflow to fewer columns.

### Image Behavior
The hero video re-crops around the speaker. Illustrations scale within their panels.

## Iteration Guide

1. Page field: Nu Purple `#8d0de3` with white text for the brand bands; white `#ffffff` for header and form sections.
2. White 56px header: purple "nu" logo, 20px/600 `#1e002f` items, hover `#8d0de3`.
3. Hero: full-bleed photo or video with `#00000080` scrim, 88px/83.6px/-3px white Nu Sans Display title, outlined white pill.
4. Alternate full-width bands: peach `#f8dcc6`, purple `#8d0de3`, deep purple `#5d0599`, periwinkle `#96b0fd`, cream `#f3efe6`.
5. Headings 40–52px nuSansDisplayMedium; body 20px/28px/-0.5px nuSansRegular.
6. Buttons: 56px pills, `16px 32px`, 18px/600/+0.5px; purple, deep purple or white depending on the band.
7. Cards: value (12px, `#5d0599`, 32px padding), testimonial (16px, `#5d0599`), news (16px, `#f3efe6`).
8. Footer: `#1e002f`, 80px cream statement, 14px `#a2a2a2` legal text.
