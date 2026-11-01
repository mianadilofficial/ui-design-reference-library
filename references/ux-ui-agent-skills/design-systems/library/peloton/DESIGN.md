---
version: alpha
name: Peloton
category: "Sports & Fitness"
description: "Peloton's onepeloton.com retail system as measured — Inter (variable 100–900) throughout, near-black ink #181a1d with grey #65666a secondary copy, a cool off-white #f5f7f9 page surface alternating with white #ffffff, one Peloton Red #df1c2f (hover #d00c2a) for purchase CTAs, and fully rounded pill buttons whose radius is half their 56/48/40px height."

colors:
  primary: "#df1c2f"
  primary-hover: "#d00c2a"
  on-primary: "#ffffff"
  canvas: "#f5f7f9"
  canvas-white: "#ffffff"
  surface-pale: "#f7f7f7"
  track: "#e4e6e7"
  black: "#000000"
  surface-dark: "#222529"
  ink: "#181a1d"
  ink-secondary: "#65666a"
  ink-tertiary: "#2b2d31"
  ink-on-dark-muted: "#a8acb1"
  input-border: "#888b93"
  overlay: "#000000bf"

typography:
  display-xl:
    fontFamily: "Inter, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 62.4px
    letterSpacing: -0.2px
  display-lg:
    fontFamily: "Inter, sans-serif"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 46.8px
    letterSpacing: -0.2px
  display-md:
    fontFamily: "Inter, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 41.6px
    letterSpacing: -0.2px
  display-mobile:
    fontFamily: "Inter, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 41.6px
    letterSpacing: -0.2px
  heading-lg:
    fontFamily: "Inter, sans-serif"
    fontSize: 26px
    fontWeight: 600
    lineHeight: 33.8px
    letterSpacing: -0.2px
  lead:
    fontFamily: "Inter, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28.6px
    letterSpacing: -0.66px
  body-lg:
    fontFamily: "Inter, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  title-sm:
    fontFamily: "Inter, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 23.4px
  body:
    fontFamily: "Inter, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-light:
    fontFamily: "Inter, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 27px
  body-strong:
    fontFamily: "Inter, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  button:
    fontFamily: "Inter, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20.8px
  nav-link:
    fontFamily: "Inter, sans-serif"
    fontSize: 16px
    fontWeight: 400
  tab:
    fontFamily: "Inter, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 23.996px
  footer-heading:
    fontFamily: "Inter, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.996px
  input:
    fontFamily: "Inter, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 0.35px
  fine-print:
    fontFamily: "Inter, sans-serif"
    fontSize: 13px
    fontWeight: 300
    lineHeight: 20px
  caption:
    fontFamily: "Inter, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.996px
  legal:
    fontFamily: "Inter, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 18px
    letterSpacing: 0.3px
  micro:
    fontFamily: "Inter, sans-serif"
    fontSize: 11px
    fontWeight: 300
    lineHeight: 20px
  label-xs:
    fontFamily: "Inter, sans-serif"
    fontSize: 10px
    fontWeight: 400

rounded:
  xs: 2px
  submit: 3px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  card: 18px
  button-sm: 20px
  button-md: 24px
  button-lg: 28px
  segment: 48px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  button-x: 22px
  lg: 24px
  xl: 32px
  xxl: 40px
  3xl: 48px
  4xl: 64px
  section: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button-lg}"
    border: "2px solid #df1c2f"
    padding: 0px 22px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    border: "2px solid #d00c2a"
  button-primary-md:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button-md}"
    padding: 0px 22px
    height: 48px
  button-primary-sm:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button-sm}"
    padding: 0px 22px
    height: 40px
  button-on-media:
    backgroundColor: "{colors.canvas-white}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button-lg}"
    border: "2px solid #ffffff"
    padding: 0px 22px
    height: 56px
  button-on-media-hover:
    backgroundColor: "{colors.canvas}"
    border: "2px solid #f5f7f9"
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button-md}"
    border: "2px solid #181a1d"
    padding: 0px 22px
    height: 48px
  button-dark-hover:
    backgroundColor: "{colors.ink-secondary}"
    border: "2px solid #65666a"
  button-outlined:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "2px solid #181a1d"
    padding: 24px
    height: 56px
  button-submit:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.submit}"
    border: "2px solid #181a1d"
    padding: 0px 22px
    height: 50px
  button-submit-hover:
    backgroundColor: "{colors.ink-secondary}"
  text-input:
    backgroundColor: "{colors.canvas-white}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    border: "1px solid #888b93"
    padding: 14px 12px 0px
    height: 50px
  segmented-control:
    backgroundColor: "{colors.track}"
    rounded: "{rounded.segment}"
    border: "1px solid #e4e6e7"
    height: 58px
  segmented-control-item:
    textColor: "{colors.ink}"
    typography: "{typography.tab}"
    rounded: "{rounded.segment}"
    padding: 16px 24px
    height: 56px
  card-product:
    backgroundColor: "{colors.canvas-white}"
    textColor: "{colors.ink}"
    typography: "{typography.title-sm}"
    rounded: "{rounded.card}"
    padding: 16px
    width: 207px
    height: 247px
  card-testimonial:
    backgroundColor: "{colors.surface-dark}"
    rounded: "{rounded.xl}"
    boxShadow: rgba(0, 0, 0, 0.38) 0px 24px 40px 12px
    width: 384px
    height: 317px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
  footer:
    backgroundColor: "{colors.canvas-white}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.footer-heading}"
---

## Overview

onepeloton.com is a hardware retail site built like a product showroom. The homepage (desktop, 1280px) opens on a full-bleed hero video of the Peloton Tread with a 48px white Inter headline ("Meet the next generation of Treads"), a 26px subhead and two white pill buttons. Directly below the hero a horizontal rail of white product cards ("The Peloton lineup": Tread Flex, Tread Vision, Tread+ Vision, Bike+, Bike, Row+) overlaps the video edge. The page then alternates between a cool off-white surface (`{colors.canvas}` — `#f5f7f9`, the largest background area on the page) and pure white (`{colors.canvas-white}`), each band carrying one centred headline, one large product render or athlete photograph, a sentence of copy and one pill CTA.

On first visit a centred white modal ("Select your country preferences") sits over a 75%-black overlay (`{colors.overlay}` — `#000000bf`); its "Update Preferences" button is the same red pill as the site's purchase buttons, so the very first thing a visitor sees is the brand's red CTA.

Colour is extremely disciplined. Text is near-black `{colors.ink}` `#181a1d` (the most-read text colour) with grey `{colors.ink-secondary}` `#65666a` for secondary copy and footer links. The single chromatic colour is **Peloton Red** `{colors.primary}` `#df1c2f`, used for "Shop Bike" / "Shop now" purchase CTAs and the country-modal confirm button; on the homepage the hero and product bands instead use white pills over media and near-black pills on light surfaces. Dark surfaces (`{colors.surface-dark}` `#222529`) appear only as testimonial cards and a financing band.

Type is **Inter** everywhere (one variable font, weights 100–900 loaded), set in a narrow range of weights: 300 for light body/fine print, 400 for reading copy, 500 for buttons and small titles, 600 for every headline. All headlines from 26px to 48px carry the same -0.2px tracking.

**Key Characteristics:**
- Inter only; headlines 600 with -0.2px tracking; buttons 500; body 300/400.
- Pill buttons whose radius is exactly half their height: 56px → 28px, 48px → 24px, 40px → 20px, all with `0px 22px` horizontal padding and a 2px border in the fill colour.
- One red (`#df1c2f`) for purchase; near-black (`#181a1d`) and white pills for everything else.
- Hover darkens red (`#d00c2a`), greys dark buttons (`#65666a`) and tints white buttons to `#f5f7f9` — no shadows, no transforms.
- Cool off-white `#f5f7f9` vs white `#ffffff` banding instead of borders or dividers.
- Product renders on seamless light backgrounds; lifestyle photography of athletes mid-workout; full-bleed hero video.

## Colors

> **Source pages:** homepage `https://www.onepeloton.com/` (extraction `peloton.json` + probes), product page `https://www.onepeloton.com/bike` (extraction `peloton--bike.json`).

### Brand & Accent
- **Peloton Red** (`{colors.primary}` — `#df1c2f`): Fill and 2px border of "Shop Bike" (56px), "Shop now" (48px and 40px) and "Update Preferences". The brand's only accent hue on the measured pages.
- **Red Hover** (`{colors.primary-hover}` — `#d00c2a`): Background and border on hover (measured on "Update Preferences").
- **On Primary** (`{colors.on-primary}` — `#ffffff`): Label on red and on near-black buttons.

### Surface
- **Canvas** (`{colors.canvas}` — `#f5f7f9`): The largest background area on the homepage (product-toggle band, lineup band) and the hover fill of the white on-media pill. The capture is 36% this colour.
- **Canvas White** (`{colors.canvas-white}` — `#ffffff`): Body background, product cards, footer, "Running, your way." band, white on-media pill.
- **Surface Pale** (`{colors.surface-pale}` — `#f7f7f7`): Another light band measured by area on the homepage.
- **Track** (`{colors.track}` — `#e4e6e7`): Fill and 1px border of the segmented product toggle (Tread Flex / Tread Vision / Tread+ Vision).
- **Black** (`{colors.black}` — `#000000`): Third-largest background area on the homepage (hero/media bands); some headings ("Running, your way.").
- **Surface Dark** (`{colors.surface-dark}` — `#222529`): Testimonial cards on `/bike`; footer column headings use it as text colour.
- **Overlay** (`{colors.overlay}` — `#000000bf`): Scrim behind the country-preference modal.

### Text
- **Ink** (`{colors.ink}` — `#181a1d`): Default text, headlines on light, dark button fill.
- **Ink Secondary** (`{colors.ink-secondary}` — `#65666a`): Supporting paragraphs ("Whatever you're feeling…"), footer links, captions ("Featuring Becs Gentry"), dark-button hover fill. The most-read colour on `/bike`.
- **Ink Tertiary** (`{colors.ink-tertiary}` — `#2b2d31`): Unselected items in the segmented toggle.
- **Ink on Dark Muted** (`{colors.ink-on-dark-muted}` — `#a8acb1`): Secondary copy on the dark financing band ("Running, cycling, strength, yoga, Pilates…").
- **Input Border** (`{colors.input-border}` — `#888b93`): 1px border of the newsletter email field.

### Semantic
No success/error/warning colours are visible on the measured pages and no official palette documents them; none are declared.

## Typography

### Font Family
**Inter** is the only family rendered (all 7,952 measured characters on the homepage). It is loaded as a single variable face covering weights 100–900, normal and italic. The site's stylesheets also declare a `brandon-grotesque` `@font-face`, but no measured element uses it.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Measured on |
|---|---|---|---|---|---|
| `{typography.display-xl}` | 48px | 600 | 62.4px | -0.2px | hero h1, "Running, your way." |
| `{typography.display-lg}` | 36px | 600 | 46.8px | -0.2px | "Instructors for every you", "Premium fitness, flexible terms" |
| `{typography.display-md}` | 32px | 600 | 41.6px | -0.2px | "Three new Treads. Endless ways to move." |
| `{typography.display-mobile}` | 32px | 600 | 41.6px | -0.2px | hero h1 at 390px |
| `{typography.heading-lg}` | 26px | 600 | 33.8px | -0.2px | hero subhead, testimonial quote |
| `{typography.lead}` | 22px | 400 | 28.6px | -0.66px | "powered by Peloton IQ" (Peloton IQ at 600) |
| `{typography.body-lg}` | 18px | 400 | 27px | normal | product-band description |
| `{typography.title-sm}` | 18px | 500 | 23.4px | normal | product-card names, nav group titles, newsletter heading |
| `{typography.body}` | 16px | 400 | 24px | normal | section copy |
| `{typography.body-light}` | 16px | 300 | 27px | normal | body default |
| `{typography.body-strong}` | 16px | 600 | 24px | normal | testimonial attribution |
| `{typography.button}` | 16px | 500 | 20.8px | normal | all pill buttons |
| `{typography.nav-link}` | 16px | 400 | normal | normal | top-nav category buttons |
| `{typography.tab}` | 14px | 600 | 23.996px | normal | segmented-control items |
| `{typography.footer-heading}` | 14px | 400 | 23.996px | normal | footer column titles |
| `{typography.input}` | 14px | 400 | 21px | 0.35px | email field label |
| `{typography.fine-print}` | 13px | 300 | 20px | normal | footnotes ("¹Peloton All-Access Membership required…") |
| `{typography.caption}` | 12px | 400 | 15.996px | normal | card captions |
| `{typography.legal}` | 12px | 300 | 18px | 0.3px | newsletter consent copy |
| `{typography.micro}` | 11px | 300 | 20px | normal | safety notes |
| `{typography.label-xs}` | 10px | 400 | normal | normal | "Select an option" field label |

### Principles
- **600 is the only headline weight.** Every h1 from 26px to 48px is 600 with -0.2px tracking.
- **Buttons are 500.** All pill labels are 16px/500/20.8px regardless of button size.
- **Grey for secondary copy, not lighter weight alone.** Supporting paragraphs drop to `#65666a`; footnotes use weight 300 in `#181a1d`.
- **Small text gets positive tracking.** 16px fine copy on dark at 0.4px, 14px input labels at 0.35px, 12px consent copy at 0.3px; display copy tightens to -0.2px; the 22px "powered by" lockup tightens to -0.66px.

### Note on Font Substitutes
Inter, by Rasmus Andersson, is released under the SIL Open Font License 1.1 ([github.com/rsms/inter](https://github.com/rsms/inter)) and is the face actually served; no substitute is needed — load Inter (variable) directly.

## Layout

### Spacing System
- **Measured gaps** (homepage): 12px is the most frequent (82 elements), then 16px, 8px, 24px, 40px, 32px, 64px, 4px. On `/bike`: 16px, 8px, 24px, 48px.
- **Measured paddings**: 8px (most frequent), 24px, 16px, 80px (section padding), 40px, 22px (button sides), 48px, 12px, 32px.
- **Tokens**: `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 12px · `{spacing.md}` 16px · `{spacing.button-x}` 22px · `{spacing.lg}` 24px · `{spacing.xl}` 32px · `{spacing.xxl}` 40px · `{spacing.3xl}` 48px · `{spacing.4xl}` 64px · `{spacing.section}` 80px.

### Grid & Container
- Footnotes and the main content column measure 1184px wide inside the 1280px viewport (48px side margins); the `/bike` nav strip measures 1200px.
- The product lineup is a horizontal rail of 207 × 247px white cards that bleeds past the right edge (six visible at 1280px).
- Product bands are single-column and centred: headline → segmented toggle → product render → "Unfold / Fold" toggle → copy → CTA.
- `/bike` uses a horizontal feature carousel (three image cards with title + description, "1 of 4" pager with circular arrow buttons) and a four-step underlined tab row ("Builds your plan", "Estimates your performance", …).

### Whitespace Philosophy
Each band holds one idea and gives the product render most of the vertical space; 80px section padding and centred stacks keep the page calm and showroom-like.

## Elevation & Depth

| Level | Treatment | Where |
|---|---|---|
| 0 | none (buttons report `rgba(0,0,0,0) 0 0 0 0`) | All pills, inputs, product cards |
| 1 | `rgba(0, 0, 0, 0.04) 0px 4px 8px 0px` | One homepage element |
| 2 | `rgba(0, 0, 0, 0.05) 0px 16px 40px 4px` | Three homepage elements |
| 3 | `rgba(0, 0, 0, 0.38) 0px 24px 40px 12px` | Dark testimonial cards on `/bike` (`{components.card-testimonial}`) |
| Scrim | `#000000bf` overlay | Country-preference modal backdrop |

Depth comes mostly from photography and the surface banding (`#f5f7f9` vs `#ffffff`); shadows are soft and rare.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | Newsletter email input |
| `{rounded.submit}` | 3px | Newsletter "Submit" button |
| `{rounded.sm}` | 6px | Most frequent radius on the homepage |
| `{rounded.md}` | 8px | Measured on homepage and `/bike` |
| `{rounded.lg}` | 12px | Most frequent radius on `/bike` |
| `{rounded.xl}` | 16px | Testimonial cards |
| `{rounded.card}` | 18px | Product lineup cards |
| `{rounded.button-sm}` | 20px | 40px-tall pills |
| `{rounded.button-md}` | 24px | 48px-tall pills |
| `{rounded.button-lg}` | 28px | 56px-tall pills (primary CTA) |
| `{rounded.segment}` | 48px | Segmented toggle track and items |
| `{rounded.pill}` | 9999px | Outlined pill ("Discover all classes" measures 204px radius) |

Circular icon buttons (carousel arrows, product-card arrows) use `50%` (48 elements on the homepage).

### Geometry
Everything interactive is fully rounded; only the form controls in the newsletter footer (2px input, 3px Submit) are near-square — a visible exception to the pill system.

## Components

### Buttons

**`button-primary`** — "Shop Bike", "Update Preferences".
- Background `{colors.primary}` `#df1c2f`, label `{colors.on-primary}`, `{typography.button}` (Inter 16px/500/20.8px), radius `{rounded.button-lg}` 28px, border 2px solid `#df1c2f`, padding 0 22px, height 56px.
- Hover `button-primary-hover`: background and border `#d00c2a`. Box-shadow stays transparent.
- Size variants: `button-primary-md` (48px tall, 24px radius — "Shop now" in content) and `button-primary-sm` (40px tall, 20px radius — "Shop now" in the sticky product bar).

**`button-on-media`** — "Shop Tread Flex" / "Shop Tread Vision" over the hero video.
- Background white, label `{colors.ink}`, 2px white border, 28px radius, 56px tall, padding 0 22px.
- Hover `button-on-media-hover`: background and border `#f5f7f9`.

**`button-dark`** — "Explore Tread Flex" on light bands.
- Background `{colors.ink}` `#181a1d`, label white, 2px `#181a1d` border, 24px radius, 48px tall.
- Hover `button-dark-hover`: background and border `{colors.ink-secondary}` `#65666a`.

**`button-outlined`** — "Discover all classes", "Discover Peloton IQ".
- Transparent, label `{colors.ink}`, 2px solid `#181a1d` border, fully rounded, 56px tall.

**`button-submit`** — newsletter "Submit".
- Background `#181a1d`, label white, radius `{rounded.submit}` 3px, 50px tall, padding 0 22px. Hover background `#65666a`.

### Inputs & Forms

**`text-input`** — newsletter email ("Your email*").
- Background white, text `{colors.ink}`, `{typography.input}` (14px/400/21px, 0.35px), 1px solid `{colors.input-border}` `#888b93`, radius 2px, padding 14px 12px 0 (room for a floating label), height 50px, width 275px.
- The country modal uses a select with a 10px "Select an option" label above a 14px value, plus a flag and chevron.

### Segmented Control

**`segmented-control`** — product switcher (Tread Flex / Tread Vision / Tread+ Vision).
- Track `{colors.track}` `#e4e6e7` with 1px `#e4e6e7` border, radius 48px, 58px tall.
- **`segmented-control-item`**: `{typography.tab}` (14px/600), padding 16px 24px, radius 48px, 56px tall. Selected item text `#181a1d`; unselected `#2b2d31`. The capture shows the selected item as a white pill inside the grey track.

### Cards

**`card-product`** — lineup rail.
- White, radius 18px, padding 16px, 207 × 247px. Product render on a light seamless background on top, then name in `{typography.title-sm}` (18px/500) with a circular chevron-arrow icon at the right.

**`card-testimonial`** — `/bike` member stories.
- `{colors.surface-dark}` `#222529`, radius 16px, shadow `rgba(0, 0, 0, 0.38) 0px 24px 40px 12px`, 384 × 317px, photograph with white 16px/600 name and 16px/400 product line.

### Navigation
**`nav-link`** — top nav category buttons (Bikes, Treads, Row, Apps, Accessories, Deals) are 16px/400 with a small chevron; "Apparel" is a plain link at 16px/300. Account and cart icons sit at the right. The captures show the bar as a black strip with the letter-spaced PELOTON wordmark at the left. `/bike` adds a sticky product sub-nav (product name, "Overview" link, red "Shop now" pill at the right).

### Footer
**`footer`** — white, 989px tall. Column titles 14px/400 in `#222529` ("Shop and Learn"), links 14px/400 in `{colors.ink-secondary}`. A newsletter block ("Sign up to get the latest", 18px/500) holds the email input, consent copy (12px/300, 0.3px) and the 3px-radius Submit button. Bottom row: "United States ($ USD)" 14px/500 and 12px legal links.

### Country Modal
White box centred over the `#000000bf` scrim; title 16px/700, a short explanatory paragraph, select field, full-width red `button-primary` "Update Preferences" (280px wide), "Currency: $ USD" in 12px (label 700, value 300).

## Design System Architecture

**Peloton publishes no public design system, token package or component library for its website.** Searches for an official design system, brand guidelines, press kit, GitHub/npm tokens and the brand typeface found no public documentation (queries in `SOURCES.json`). The official brand resource that exists is gated: Peloton's business site ([business.onepeloton.com/tools](https://business.onepeloton.com/tools)) says "Request access to Peloton Brand Portal for marketing resources including product imagery and flyers" and links to `brandportal.onepeloton.com`, which requires an account. The old commercial marketing-guidelines PDF URL now redirects to the business homepage. `press.onepeloton.com` redirects to the retail homepage.

What follows is the **de-facto system measurable on onepeloton.com**:

- **Token architecture**: no Peloton-named CSS custom properties are exposed on `:root`. The only custom properties present belong to the third-party consent manager (`--fides-overlay-primary-color: #181a1d`, `--fides-overlay-font-family: Inter, sans-serif`, `--fides-overlay-button-border-radius: 6px`), configured to match the site ink and font. Site styles are computed per component (class names are generated), so the token layer is not public.
- **Theming**: a single light theme; dark areas are section/card colours (`#000000`, `#222529`), not a theme switch. No dark mode was observed.
- **Type & spacing systems**: one family (Inter) in a 10–48px range; headlines share -0.2px tracking; spacing values cluster on multiples of 4 and 8 (4, 8, 12, 16, 24, 32, 40, 48, 64, 80px) with a 22px button side padding as the exception.
- **Component model (observed)**: pill buttons in three heights (56/48/40px) × three fills (red, near-black, white) + outlined; segmented control; product card; testimonial card; carousel with circular arrow buttons and "1 of 4" pager; underlined step tabs; floating-label input; modal.
- **Accessibility (observed)**: a "Skip to main content" link (16px/700, white background, `8px 16px` padding) is the first focusable element; primary buttons are 40–56px tall; body ink `#181a1d` on `#f5f7f9`/`#ffffff`. No published accessibility standard was found.
- **Delivery**: no npm package, public Figma kit or versioning information found.

## Do's and Don'ts

### Do
- Use `{colors.primary}` `#df1c2f` only for purchase/confirm actions ("Shop Bike", "Shop now", "Update Preferences").
- Make every button a pill whose radius is half its height (56/28, 48/24, 40/20) with 0 22px side padding and a 2px same-colour border.
- Set every headline in Inter 600 with -0.2px tracking; buttons in Inter 16px/500.
- Alternate `#f5f7f9` and `#ffffff` bands to separate sections.
- Use `#65666a` for secondary paragraphs and footer links.
- Darken on hover: red → `#d00c2a`, near-black → `#65666a`, white → `#f5f7f9`.

### Don't
- Don't introduce a second accent colour — the measured pages have none.
- Don't add drop shadows to buttons or product cards.
- Don't set headlines in 700/800; the system tops out at 600 for display.
- Don't use square buttons outside the newsletter form.
- Don't place red buttons on red or on busy media; on video the system uses the white pill.

## Responsive Behavior

### Breakpoints
Exact breakpoints were not measured; comparison is 1280px vs 390px.

| Element | 1280px | 390px |
|---|---|---|
| Hero h1 | 48px/600/62.4px | 32px/600/41.6px (`{typography.display-mobile}`) |
| Most-used text size | 13px (footnotes), then 16px | 13px, then 14px |
| Display sizes present | 48, 36, 32, 26px | 32, 28, 26, 22px |
| Product card heading | 18px/500 | 16px/500/20.8px |
| Primary CTA | 56px red pill | 56px red pill (country modal); `/bike` content CTA 48px |

### Touch Targets
Pill buttons are 40–56px tall at all widths; the segmented control items are 56px tall.

### Collapsing Strategy
- The hero h1 steps from 48px to 32px; the mobile size table contains 32, 28, 26 and 22px display sizes where desktop has 48, 36, 32 and 26px (the per-element mapping beyond the h1 was not measured).
- The product lineup stays a horizontal scroll rail.
- Body copy moves from 16px to 14px as the most common reading size.

### Image Behavior
Hero is a full-bleed video with white text and white pills on top; product renders sit on seamless light backgrounds that match the band colour.

## Iteration Guide

1. Start with Inter only, ink `#181a1d` on `#f5f7f9` / `#ffffff` bands.
2. Choose the button by context: red `{components.button-primary}` to buy, white `{components.button-on-media}` over video, near-black `{components.button-dark}` on light bands, outlined for "Discover…" links.
3. Keep radius = height / 2 for every pill (`{rounded.button-lg}` 28px at 56px, `{rounded.button-md}` 24px at 48px, `{rounded.button-sm}` 20px at 40px).
4. Headlines 600 with -0.2px tracking at 48/36/32/26px; copy 18px or 16px/400; footnotes 13px/300.
5. Use 80px section padding and 12–24px internal gaps.
6. Hover states come from the measured pairs only (`#d00c2a`, `#65666a`, `#f5f7f9`).
7. Do not invent semantic colours; none are published or measured.
