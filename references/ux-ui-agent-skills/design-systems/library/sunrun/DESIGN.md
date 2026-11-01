---
version: alpha
name: Sunrun
category: "Energy & Climate"
description: "Sunrun's site: warm cream #fffbf0 / #fffcf5 pages alternating with near-black #070911 and #000000 bands, navy #1f2647 pill buttons (800px radius, hover #49517d) and white pills on photography (hover #d4d5da), the commercial Roobert typeface at 500 for headlines (56px h1, -1.12px) and 400 for body, pale-blue #c3dbff text on dark, 16px and 24px rounded cards."

colors:
  primary: "#1f2647"
  primary-hover: "#49517d"
  on-primary: "#ffffff"
  canvas: "#fffbf0"
  cream-alt: "#fffcf5"
  white: "#ffffff"
  white-pill-hover: "#d4d5da"
  dark: "#070911"
  black: "#000000"
  testimonial-surface: "#22263a"
  dark-2: "#0c0e1b"
  ink: "#000000"
  text-default: "#000000de"
  text-muted: "#6f6d68"
  text-on-dark-muted: "#d0ccc3"
  pale-blue: "#c3dbff"
  link-navy-muted: "#49517d"
  ghost-navy-hover: "#1f26471a"
  field-border: "#0000004d"
  field-border-on-dark: "#ffffff4d"
  highlight-yellow: "#fff59b"

typography:
  h1:
    fontFamily: "Roobert, sans-serif"
    fontSize: 56px
    fontWeight: 500
    lineHeight: 61.6px
    letterSpacing: -1.12px
  h1-mobile:
    fontFamily: "Roobert, sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
    letterSpacing: -0.8px
  h2:
    fontFamily: "Roobert, sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
    letterSpacing: -0.8px
  h3:
    fontFamily: "Roobert, sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 30.8px
    letterSpacing: -0.56px
  footer-heading:
    fontFamily: "Roobert, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 26.4px
    letterSpacing: -0.48px
  h4:
    fontFamily: "Roobert, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: -0.4px
  body-lg:
    fontFamily: "Roobert, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: -0.4px
  h5:
    fontFamily: "Roobert, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 21.6px
    letterSpacing: -0.36px
  body:
    fontFamily: "Roobert, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: -0.32px
  button:
    fontFamily: "Roobert, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: -0.32px
  body-sm:
    fontFamily: "Roobert, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: -0.28px
  utility-link:
    fontFamily: "Roobert, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16.8px
    letterSpacing: -0.28px
  eyebrow:
    fontFamily: "Roobert, sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16.8px
    letterSpacing: 0.56px
  input:
    fontFamily: "Arial"
    fontSize: 16px
    fontWeight: 400

rounded:
  none: 0px
  input: 8px
  card: 16px
  card-lg: 24px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 40px
  section: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 18px 24px
    height: 60px
  button-white:
    backgroundColor: "{colors.white}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 18px 24px
    height: 60px
  button-white-hover:
    backgroundColor: "{colors.white-pill-hover}"
  button-outline:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "1px solid #1f2647"
    padding: 18px 24px
    height: 62px
  button-outline-small:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "1px solid #1f2647"
    padding: 8px 16px
    height: 42px
  button-outline-hover:
    backgroundColor: "{colors.ghost-navy-hover}"
    textColor: "{colors.link-navy-muted}"
  utility-link:
    textColor: "{colors.link-navy-muted}"
    typography: "{typography.utility-link}"
  utility-link-hover:
    textColor: "{colors.primary}"
    textDecoration: underline
  eyebrow:
    textColor: "{colors.text-muted}"
    typography: "{typography.eyebrow}"
    textTransform: uppercase
  lead-form-card:
    backgroundColor: "{colors.cream-alt}"
    textColor: "{colors.text-default}"
    rounded: "{rounded.card-lg}"
    padding: 40px
    boxShadow: "rgba(0, 0, 0, 0.08) 0px 39.2533px 39.2533px 0px"
  text-input:
    backgroundColor: "{colors.white}"
    textColor: "{colors.black}"
    typography: "{typography.input}"
    rounded: "{rounded.input}"
    border: "1px solid #0000004d"
    padding: 16px
    height: 56px
  text-input-on-dark:
    backgroundColor: "{colors.dark}"
    textColor: "{colors.white}"
    typography: "{typography.input}"
    rounded: "{rounded.input}"
    border: "1px solid #ffffff4d"
    padding: 16px
    height: 56px
  feature-card:
    rounded: "{rounded.card-lg}"
    typography: "{typography.h3}"
    height: 374px
  award-card:
    rounded: "{rounded.card}"
  testimonial-card:
    backgroundColor: "{colors.testimonial-surface}"
    textColor: "{colors.pale-blue}"
    rounded: "{rounded.card}"
  footer:
    backgroundColor: "{colors.dark}"
    textColor: "{colors.pale-blue}"
    typography: "{typography.footer-heading}"
    padding: 64px 0px
---

## Overview

Sunrun's website presents residential solar and battery storage with a calm, premium, editorial tone: warm
cream pages, navy pill buttons, near-black storytelling bands, and a single geometric typeface (Roobert) at
medium weight with slightly tight tracking. Measured pages: the homepage https://www.sunrun.com/ and the plans
page https://www.sunrun.com/solar-plans-and-services (desktop 1280px, mobile 390px).

What the capture shows (top 2400px at 1280px):

1. A cream utility bar: location picker left ("Enter your location"), a two-line customer notice centred
   ("Sunrun Customers: Add battery storage to your current system. See if you qualify."), phone number and
   "Login" right — all in muted navy `#49517d`.
2. A white-cream main nav: the lowercase Sunrun wordmark left, four centred links (Plans & Pricing, Products,
   Company, Learn), and a small navy pill "Get a quote" right.
3. A full-bleed photograph of a home's porch at dusk with a white 56px/500 headline in three lines ("America's
   #1 Home Storage & Solar Power. / Price. Quality. Confidence."), a 20px muted cream subline and a large
   white pill "Get a quote".
4. A dark cookie notice card (16px radius) with an outlined "Manage preferences" pill.
5. An awards row on cream: four 16px-radius cards with a soft sky gradient top and a badge (Fortune 1000,
   Consumer Affairs, TIME, Good Housekeeping), each followed by a 20px/500 caption.
6. A `#070911`-dark band "Easy Process. Better Technology. Happy Customers." with a `#22263a` testimonial
   card (five pale-blue stars, a 40px quote in pale blue), and white circular arrow buttons.
7. A cream split section: a dark 24px-radius photo card left; right a grey uppercase eyebrow "PLANS & PRICING",
   a 40px headline "Sunrun Subscription Plan", 14px grey copy, a feature list with sun icons and an outlined
   navy pill "Compare plans".

Character: confident and quiet; photography of real homes in golden light; generous whitespace; geometric
type; pills for every action.

## Colors

### Brand & Accent

- `primary` `#1f2647` — deep navy; fill of the header "Get a quote" pill, text of white pills and outlined pills.
- `primary-hover` `#49517d` — measured hover fill of the navy pill; also the colour of utility links.
- `on-primary` `#ffffff`.
- `white-pill-hover` `#d4d5da` — measured hover fill of the white hero pill.
- `ghost-navy-hover` `#1f26471a` — measured hover background of outlined pills (10% navy).
- `pale-blue` `#c3dbff` — testimonial text, stars and footer headings on dark.
- `highlight-yellow` `#fff59b` — small highlight fill on the plans page.

### Surface

- `canvas` `#fffbf0` — cream page sections (largest-area background, and the colour that fills most of the
  capture).
- `cream-alt` `#fffcf5` — the second cream (lead form card, alternating sections).
- `white` `#ffffff` — body background, inputs, white pills.
- `dark` `#070911` — footer and storytelling bands; `black` `#000000` — the hero photo container.
- `testimonial-surface` `#22263a`, `dark-2` `#0c0e1b` — cards on the dark band.

### Text

- `ink` `#000000` — headlines and feature text on cream (`primaryTextColor` class; 610 homepage characters).
  White `#ffffff` is actually the most-read colour on the homepage (849 characters) because hero, testimonial and
  footer copy sits on dark/photo backgrounds — it is the text colour for those bands, not for the cream canvas.
- `text-default` `#000000de` — 87% black, the inherited body colour.
- `text-muted` `#6f6d68` — body copy and eyebrows on cream (the most-read colour on the plans page, 1,330 chars).
- `text-on-dark-muted` `#d0ccc3` — the hero subline (`accentTextColor` class).
- `link-navy-muted` `#49517d` — utility bar links.

### Semantic

No error / success colours were measured or found in an official source; none are declared.

## Typography

### Font Family

- **Roobert** — "a mono-linear, geometric sans-serif typeface" by Martin Vácha (Displaay Type Foundry, 2017),
  sold commercially ([displaay.net](https://displaay.net/typeface/roobert)). The site loads Roobert 400, 500,
  600 and 700 (homepage) and uses only `Roobert, sans-serif` as its stack.
- Form fields render in the browser's `Arial` (inputs do not inherit Roobert).

### Hierarchy

| Token | Size / line | Weight | Tracking | Class / where |
|---|---|---|---|---|
| h1 | 56px / 61.6px | 500 | -1.12px | `Global-h1`, hero |
| h2 | 40px / 44px | 500 | -0.8px | `Global-h2`, section titles, testimonial quote |
| h3 | 28px / 30.8px | 500 | -0.56px | `Global-h3`, plan names, feature cards |
| footer-heading | 24px / 26.4px | 500 | -0.48px | `GlobalFooter-t1Item` |
| h4 | 20px / 24px | 500 | -0.4px | `Global-h4`, award captions |
| body-lg | 20px / 26px | 400 | -0.4px | `Global-bodyLg`, hero subline |
| h5 | 18px / 21.6px | 500 | -0.36px | `Global-h5`, feature list |
| body | 16px / 22.4px | 400 | -0.32px | `Global-body`, paragraphs |
| button | 16px / 24px | 500 | -0.32px | All pills |
| body-sm | 14px / 19.6px | 400 | -0.28px | Legal, plan descriptions |
| utility-link | 14px / 16.8px | 500 | -0.28px | Utility bar |
| eyebrow | 12px / 16.8px | 600 | +0.56px | `Global-eyebrow`, uppercase |

Mobile (390px): h1 40px / 44px (-0.8px); legal text 14px → 12px. Top mobile sizes: 14px, 18px, 16px, 24px,
32px, 12px, 40px.

### Principles

- Every size carries -2% tracking (56 → -1.12, 40 → -0.8, 16 → -0.32, 14 → -0.28); only the uppercase eyebrow
  is tracked positive (+0.56px).
- Headlines are always 500, never bold; 600 only for eyebrows.
- Headline line-height is 1.1; body 1.3–1.4.

### Note on Font Substitutes

Roobert is a commercial Displaay font. The site declares only `sans-serif` as fallback, so no brand-chosen
substitute exists; any geometric sans used in its place will change the look and is not specified here.

## Layout

### Spacing System

Homepage gaps: 40px (30), 12px, 16px, 8px, 24px, 18px. Paddings: 8px (21), 16px (21), 12px (19), 64px (8),
40px (6), 18px, 48px, 24px. Plans page paddings: 8px, 16px, 24px, 12px, 40px, 64px.

- 8px / 12px / 16px inside controls; 24px horizontal pill padding.
- 40px gaps between grid columns and inside the lead form card.
- 64px vertical section and footer padding.

### Grid & Container

- 1280px viewport with content aligned to a ~1152px column (the legal paragraph measures 1152px wide;
  64px side gutters).
- Awards: four equal cards in a row. Split sections: image card (~480px) + text column.

### Whitespace Philosophy

Sections breathe with 64px+ vertical padding; text columns are narrow; cream sections alternate with dark
bands to pace the story.

## Elevation & Depth

- The only measured shadow is on the plans-page lead form card:
  `rgba(0, 0, 0, 0.08) 0px 39.2533px 39.2533px 0px` — a very soft, long drop.
- The stylesheet also has `0px 10px 20px rgba(0, 0, 0, 0.25)` and a `var(--Paper-shadow)` reference, not seen on
  the measured screens.
- Otherwise flat: depth comes from photography and dark/cream alternation.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Bands, hero |
| input | 8px | Text inputs |
| card | 16px | Award cards, testimonial card, cookie card |
| card-lg | 24px | Feature photo cards, lead form card |
| pill | 9999px | All buttons (computed as 800px) |

Tabs on the plans page use `16px 16px 0px 0px` and `0px 0px 16px 16px` paired halves. Circular arrow
buttons use 50%. No clip-paths or skews.

### Photography Geometry

Full-bleed hero; elsewhere photographs sit in 24px-radius cards; award badges sit in 16px cards with a sky
gradient.

## Components

### Buttons

- **button-primary** — `#1f2647`, white Roobert 16px/500 (line 24px, -0.32px), pill, padding 8px 16px,
  40px tall (header). Hover → `#49517d` (measured).
- **button-primary-large** — same colours, padding 18px 24px, 60px tall (plans page form submit).
- **button-white** — `#ffffff` with `#1f2647` text, padding 18px 24px, 60px (hero "Get a quote").
  Hover → `#d4d5da` (measured).
- **button-outline** — transparent, `1px solid #1f2647`, navy text, 18px 24px, 62px ("Compare plans").
- **button-outline-small** — 8px 16px, 42px ("Learn more", "Get a quote" on the plans page).
  Hover → background `rgba(31, 38, 71, 0.1)`, text `#49517d` (measured).

### Cards & Containers

- **award-card** — 16px radius, sky-gradient image area, 20px/500 caption below.
- **testimonial-card** — `#22263a`, 16px radius, pale-blue stars and 40px/500 quote.
- **feature-card** — 24px radius photo card, 374px tall, `rgba(0, 0, 0, 0.8)` overlay with a 28px/500 title.
- **lead-form-card** — `#fffcf5`, 24px radius, 40px padding, soft 39px drop shadow (plans page).

### Inputs & Forms

- **text-input** — white, black Arial 16px, `1px solid #0000004d`, 8px radius, padding 16px, 56px tall.
- **text-input-on-dark** — `#070911` with white text, `1px solid #ffffff4d` (footer).

### Navigation

- Utility bar links: 14px/500 `#49517d`; hover → `#1f2647` (or `#000000` for the location picker) plus
  underline (measured).
- Main nav: centred text links and the small navy "Get a quote" pill (4px 12px padding in the responsive header variant).

### Pills, Tags, and Chips

- **eyebrow** — 12px/600 uppercase, +0.56px tracking, `#6f6d68`, above section titles.

### Signature Components

- **Footer** — `#070911`, 64px vertical padding, first-tier links as 24px/500 pale-blue headings
  ("Products", "Plans & Pricing", "Learn", "Company", "Investors").
- **Highlight testimonial carousel** — dark band, centred card, circular white arrow buttons and dot pagination.

## Design System Architecture

Sunrun publishes **no public design system, token package or brand-guideline document**. Searches for
"Sunrun rebrand Roobert typeface brand identity agency" and "Sunrun brand guidelines logo colors press kit
newsroom" found only a December 5, 2016 press release
([pv-magazine-usa.com](https://pv-magazine-usa.com/press-releases/sunrun-introduces-new-branding-to-reflect-expanded-services/))
announcing a BSSP-created logo, "The Sunrun Brilliant Home" — it specifies no colours or typefaces and predates the
current wordmark. What follows is observed on the live site.

- **Stack (observed).** The served HTML is a Next.js app (`_next/static`, `__NEXT_DATA__`) whose markup carries
  `Mui`-prefixed class names and emotion-generated classes (`css-1bmsd0d-Global-h1`).
- **Token architecture (observed).** Only two CSS custom properties exist at the root
  (`--swiper-theme-color`, `--header-height`), so tokens are compiled into emotion styles, not exposed as
  variables. The naming visible in class labels is a global type scale — `Global-h1`, `Global-h2`, `Global-h3`,
  `Global-h4`, `Global-h5`, `Global-bodyLg`, `Global-body`, `Global-eyebrow` — plus semantic colour utilities
  `primaryTextColor` and `accentTextColor`.
- **Component model (observed).** Component-scoped labels: `Button-button` (with `Button-responsiveSize…` and a
  `light` modifier), `FeatureLink-card`, `FeatureItems-featureContainer`, `HighlightTestimonial-quote`,
  `GlobalFooter-t1Item`, `Eyebrow-eyebrow`, `Cart-emptyCartText`.
- **Theming (observed).** Light (cream) and dark (`#070911`) section treatments switch text via
  `primaryTextColor` / `accentTextColor`; no user-facing dark mode.
- **Type & spacing (observed).** One family; a -2% tracking rule across the scale; 8 / 12 / 16 / 24 / 40 / 64px spacing.
- **Accessibility (observed).** A "Skip to content" link is the first element; pills are 40–62px tall. No
  published policy found.
- **Delivery.** No npm package, Figma kit or versioning is public.
- **Typeface source.** Roobert — Displaay ([displaay.net/typeface/roobert](https://displaay.net/typeface/roobert)).

## Do's and Don'ts

### Do

- Use cream `#fffbf0` / `#fffcf5` for light sections and `#070911` for dark bands.
- Make every button a pill; navy `#1f2647` on light, white on photography.
- Set headlines in Roobert 500 with -2% tracking and a 1.1 line-height.
- Use `#6f6d68` for running copy on cream and `#c3dbff` for text on dark.
- Put photography in 24px-radius cards; badges in 16px cards.
- Use uppercase 12px/600 eyebrows above section titles.

### Don't

- Don't use pure white for whole pages — the light sections are cream.
- Don't use bold 700 headlines or positive tracking on headlines.
- Don't square off buttons or use 8px radius for anything except inputs.
- Don't introduce a bright "solar" accent colour; the system is navy, cream and black.
- Don't add heavy shadows.

## Responsive Behavior

### Breakpoints

Measured at 1280px and 390px. At 390px: h1 56px → 40px (44px line, -0.8px); white hero pill keeps 18px 24px
padding and 60px height; legal copy 14px → 12px.

### Touch Targets

All pills are ≥40px tall; hero and form pills 60–62px.

### Collapsing Strategy


### Image Behavior

Hero photography stays full-bleed; card imagery scales within 24px-radius frames.

## Iteration Guide

1. Cream page, cream utility bar with `#49517d` links, nav with a small navy pill.
2. Full-bleed home photograph with a white 56px/500 headline (-1.12px) and a white 60px pill.
3. Cream awards row: four 16px cards with 20px/500 captions.
4. Dark `#070911` band with a `#22263a` testimonial card in pale blue `#c3dbff`.
5. Split section: 24px photo card + eyebrow + 40px h2 + outlined navy pill.
6. Footer `#070911` with 24px/500 pale-blue link headings.
7. Re-run `node web/scripts/verify-designs.mjs --slug=sunrun`.
