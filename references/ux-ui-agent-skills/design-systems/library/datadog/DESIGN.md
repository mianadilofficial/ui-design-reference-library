---
version: alpha
name: Datadog
category: "Product & SaaS"
description: "Datadog (datadoghq.com), the observability and security platform: NationalWeb type at 68px/600 on white, brand purple #632ca6 (official Datadog Purple) with an #8000ff accent, 4px-radius uppercase CTAs, a #110617 dark-purple footer, black product sections, and a 3D tilted product dashboard under a centered hero."
colors:
  canvas: "#ffffff"
  page-largest: "#110617"
  ink: "#212529"
  primary: "#632ca6"
  on-primary: "#ffffff"
  primary-hover: "#7700ff"
  accent-purple: "#8000ff"
  surface-black: "#000000"
  surface-light: "#f6f6f6"
  ink-on-dark: "#e2e2e2"
  ink-muted: "#969696"
  ink-nav: "#555555"
typography:
  display:
    fontFamily: NationalWeb, Helvetica, Arial, sans-serif
    fontSize: 68px
    fontWeight: 600
    lineHeight: 68px
  display-mobile:
    fontFamily: NationalWeb, Helvetica, Arial, sans-serif
    fontSize: 38px
    fontWeight: 600
    lineHeight: 42px
  heading:
    fontFamily: NationalWeb, Helvetica, Arial, sans-serif
    fontSize: 36px
    fontWeight: 600
    lineHeight: 40px
    letterSpacing: "-0.36px"
  body:
    fontFamily: NationalWeb, Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 300
    lineHeight: 30px
  button:
    fontFamily: NationalWeb, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: 0.08px
    textTransform: uppercase
  button-secondary:
    fontFamily: NationalWeb, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: 2%
    textTransform: uppercase
  input:
    fontFamily: NationalWeb, Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 49px
  mono-label:
    fontFamily: RobotoMono-Regular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.32px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 4px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 8.5px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 54px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-outlined:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    border: "1px solid #632ca6"
    padding: 14px 24px 16px
    height: 54px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.accent-purple}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 4px 12px
    height: 30px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.button-secondary}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 0px 10px
    height: 49px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
    typography: "{typography.mono-label}"
    padding: 0px 0px 16px
---

## Overview

Datadog's home page (https://www.datadoghq.com/, title "Cloud Monitoring as a Service | Datadog") is a long marketing scroll of 5,685px at 1280px wide that moves from a white hero to purple promotional bands, a black "Products" section and a very dark purple footer (#110617). A thin purple banner at the very top carries "Datadog named a Leader in the Gartner® Magic Quadrant™ for Observability Platforms." Below it a white header holds uppercase links at the left (PRODUCT, CUSTOMERS, PRICING, SOLUTIONS, DOCS), the vertical Datadog logo (the purple dog mascot above the word DATADOG) centered, and at the right ABOUT, BLOG, LOGIN, a search icon and an outlined "GET STARTED FREE" button.

The hero is centered: the h1 "AI-Powered Observability and Security" at 68px/600 in #212529, the line "See inside any stack, any app, at any scale, anywhere." in light 22px type, and two buttons side by side, a filled purple "FREE TRIAL" and an outlined purple "SEE THE PLATFORM" with a play triangle. Under them a tilted, isometric product dashboard (red and green metric tiles, hexagon maps, charts) floats with a soft shadow. A small uppercase line, "THOUSANDS OF CUSTOMERS LOVE & TRUST DATADOG", sits over a grid of six logos (LG, itaú, OpenAI, FICO, Midjourney, perplexity).

The next bands are promotional: a split block with an event photograph at the left and a purple gradient panel at the right ("DASH 2026 — That's a wrap!" with a "LEARN MORE" link), and a full-width purple band with 3D glossy blocks for "2026 GARTNER® MAGIC QUADRANT™ - Datadog has been named a leader in the 2026 Gartner® Magic Quadrant™ for Observability Platforms" with an outlined "READ THE FULL REPORT" button. Then the black "Products" section with an accordion list (Infrastructure, with "From overview to deep details, fast" and "Learn more"), a product screenshot at right, and later "Defend against AI-powered attacks", a report promo, "Careers Join Our Pack" and the footer callout "TRY DATADOG TODAY: Autonomous observability and security. Start with a free trial".

The voice is confident and technical, with short noun-phrase headlines and plain verbs for calls to action ("Free trial", "See the platform", "Learn more").

## Colors

| Token | Value | Evidence |
|---|---|---|
| `canvas` | #ffffff | Body background (weight 396) |
| `page-largest` | #110617 | Largest background by area (weight 1803); footer; root variable `--bs-dark-purple` |
| `ink` | #212529 | h1 and body color (819 characters); `--bs-body-color` |
| `primary` | #632ca6 | CTA fill; official "Datadog Purple for Logo" (see below); `--bs-purple` |
| `on-primary` | #ffffff | Button text (1,657 characters of white text) |
| `primary-hover` | #7700ff | Hover fill of the CTA; link hover color `--bs-link-hover-color: #70f` |
| `accent-purple` | #8000ff | Secondary pill text (23 characters); official "Backgrounds & Accents Purple" |
| `surface-black` | #000000 | Product section background (weight 978) |
| `surface-light` | #f6f6f6 | Light gray band (weight 532); `--bs-gray-lightest` |
| `ink-on-dark` | #e2e2e2 | Text on dark bands (1,727 characters) |
| `ink-muted` | #969696 | Text on 97 characters |
| `ink-nav` | #555555 | Navigation link color; `--bs-gray-dark` |

Datadog's own Logos & Press Kit page (https://www.datadoghq.com/about/resources/, opened) lists two brand purples: "Datadog Purple for Logo" PMS Violet C, HEX #632CA6, RGB 99/44/166, and "Backgrounds & Accents Purple" PMS 266C, HEX #8000FF, RGB 128/0/255. Both appear in the measured site: #632ca6 as the button fill and #8000ff as secondary-pill text. The kit says the mascot "Bits" should always be white on a purple background, purple on white, or white on neutral or dark backgrounds, and that the logo must not be inverted, recolored, boxed, outlined or given a gradient.

Hover behavior measured: nav links change from #555555 to #632ca6 or #7700ff; FREE TRIAL changes from #632ca6 to #7700ff; SEE THE PLATFORM changes from #632ca6 text on transparent to white text on #7700ff; the header button "GET STARTED FREE" changes from #555555 on white to white on a transparent background. The promotional bands use purple-to-blue gradients whose stops were not measured.

## Typography

NationalWeb carries the interface (4,521 characters) with RobotoMono-Regular for small uppercase footer labels (17 characters). The CSS also declares Noto Sans (JP, TC and variable), Calibre, Simplon Mono and an icon font. Weights loaded for NationalWeb: 300, 400 italic, 300 italic, 600 and 700.

| Token | Size / line-height | Weight | Tracking | Use |
|---|---|---|---|---|
| `display` | 68px / 68px | 600 | none | h1 (1146px wide) |
| `display-mobile` | 38px / 42px | 600 | none | Mobile h1 |
| `heading` | 36px / 40px | 600 | -0.36px | Band headings (h2) |
| `body` | 22px / 30px | 300 | none | Hero sub-line and paragraphs |
| `button` | 18px / 18px | 700 | 0.08px | Primary and outlined CTAs, uppercase |
| `button-secondary` | 14px / 20px | 600 | 2% | Small pills, uppercase |
| `input` | 32px / 49px | 300 | none | Search input |
| `mono-label` | 16px / 20px | 400 | 0.32px | Footer labels, uppercase |

Sizes by character count: 14px (1,750), 22px (1,066), 18px (882), 16px (374), 36px (286), 20px (82), 32px (54), 68px (37). Weights: 300 (3,343 characters), 700 (788), 600 (390), 400 (17). Light 300 for reading text against 600 for headlines and 700 for buttons gives the page its contrast. Navigation and button labels are uppercase.

## Layout

The page body has 129px of top padding for the banner and header. Content sits in a centered column; the hero h1 spans 1,146px. Sections alternate full-bleed bands (white, purple gradient, black, dark purple) with split layouts of media and text. Logos form a 3-by-2 grid; the product section is a two-column accordion plus screenshot. The footer is 1,408px tall.

Measured gaps: 4px (28 elements), 6px (21), 40px (19), 20px (7), 8px (7), 16px (7), 12px (2), 30px (2), 68px (1), 32px (1). Paddings: 15px (22), 8.5px (10), 8px (10), 20px (10), 24px (4), 2px (4), 28px (3), 16px (3), 5px (2), 12px (2).

## Elevation & Depth

Only one box shadow was measured, `rgba(0, 0, 0, 0.07) 0px 0px 8px 8px`, on one element. The stylesheet declares more: `0 4px 10px rgba(0,0,0,.2)`, `0 8px 12px rgba(0,0,0,.1)`, `0 8px 20px rgba(0,0,0,.25)`, `0 8px 10px 0 rgba(0,0,0,7%)` and Bootstrap's `0 0.5rem 1rem rgba(0, 0, 0, 0.15)`. Depth in the capture is mostly imagery: the tilted dashboard has its own soft shadow, the promotional bands use gradients and 3D blocks, and the black and dark-purple sections create contrast.

## Shapes

Measured radii: 4px (6 elements), 800px (1, the pill) and 3px (1). Buttons use 4px; the small secondary pill uses a fully rounded radius (800px). The stylesheet lists radii from 1px to 500px and 9999px. The root variables follow Bootstrap's scale (`--bs-border-radius: 0.375rem`, `--bs-border-radius-lg: 0.3rem`, `--bs-border-radius-pill: 50rem`). Photographs and promo panels are rectangles.

## Components

**Primary button.** "FREE TRIAL": #632ca6 fill, white NationalWeb 18px/700 uppercase with 0.08px tracking, 4px radius, padding 16px 24px, 54px tall and 226px wide; hover #7700ff.

**Outlined button.** "SEE THE PLATFORM": transparent, #632ca6 text and `1px solid #632ca6`, 4px radius, padding 14px 24px 16px, 54px tall; hover turns it to white on #7700ff.

**Secondary pill.** "START WITH A FREE TRIAL": white fill, #8000ff text, 14px/600 with 2% tracking, padding 4px 12px, 30px tall and 199px wide, fully rounded.

**Header.** White bar with uppercase links in #555555 (hover purple), centered vertical logo, a search icon and the "GET STARTED FREE" button (44px tall, 4px radius).

**Search input.** 49px tall, 1,156px wide, NationalWeb 32px/300, padding 0 10px.

**Learn-more link.** White bold 18px "Learn more" with a chevron (99px wide) on dark sections.

**Footer.** #110617, "TRY DATADOG TODAY" callout in RobotoMono 16px uppercase, followed by link columns (Product, Resources, Blog, About, Legal) and the line "© Datadog 2026".

## Design System Architecture

Datadog publishes a Logos & Press Kit at https://www.datadoghq.com/about/resources/ (opened) with the company-name rule ("Datadog" as one word), logo variants, usage don'ts, two brand purples and downloadable logo and press assets; it specifies no typefaces. No public design-system site was found on the home page.

The shipped CSS is a Bootstrap 5 theme with brand overrides. Root variables include `--bs-purple: #632ca6`, `--bs-dark-purple: #110617`, `--bs-purple-heart: #5636b8`, `--bs-link-color: #70f`, `--bs-body-color: #212529`, `--bs-body-font-weight: 300`, gray steps (`--bs-gray-lightest: #f6f6f6`, `--bs-gray-lighter: #eeeeee`, `--bs-gray-light: #c7c7c7`, `--bs-gray: #888888`, `--bs-gray-dark: #555555`, `--bs-gray-darker: #333333`) and product colors (`--bs-serverless-yellow: #fab207`, `--bs-lavender: #c86dd7`, `--bs-speaker-8: #d119b3`, `--bs-hwh-5: #a91892`). Tailwind ring variables also appear (`--tw-ring-color`). Hover-state colors are re-declared per component rather than through tokens.

## Do's and Don'ts

**Do**
- Use #632ca6 for the primary CTA and logo, #8000ff for accents and secondary text, and #7700ff for hover.
- Set headlines in NationalWeb 600, body in weight 300, buttons in 700 uppercase.
- Keep buttons at a 4px radius and pair a filled purple button with an outlined one.
- Follow the press kit: write "Datadog" as one word; keep the mascot white on purple, purple on white, or white on neutral or dark backgrounds.
- Alternate white, purple, black and #110617 bands.

**Don't**
- Don't invert, recolor, box, outline or add a gradient to the logo (press kit).
- Don't write "DataDog" or "Data Dog".
- Don't use Bootstrap's default primary blue (#0d6efd) or the Tailwind ring blue as brand colors.
- Don't set body copy heavier than 300 at 22px.

## Responsive Behavior

The extractor re-loaded the page at 390px. Measured: h1 38px / 42px (360px wide, 126px tall; desktop 68px / 68px, 1146px by 68px); h2 28px / 32px (360px by 128px; desktop 36px / 40px); body 20px / 28px (360px by 196px; desktop 22px / 30px); the primary CTA is 16px/700 with padding 12px 20px, 42px tall and 360px wide (18px type, 54px tall and 226px wide on desktop), so it spans the content width at that size. The header role measured 893px tall at 390px and includes the hero text. Mobile character counts by size: 20px (1,653), 16px (325), 28px (226), 18px (86), 24px (60), 38px (37). Breakpoints, media queries and the layout of the logo grid, bands and mega-menu at 390px are not measured.

## Iteration Guide

1. Start with the tokens: #ffffff canvas, #212529 ink, #632ca6 primary, #7700ff hover, #110617 dark purple, NationalWeb 300/600/700.
2. Build the top banner, the three-part header and the centered hero with the two CTAs and the tilted dashboard image.
3. Add the logo grid, then the purple promotional bands, the black products accordion and the #110617 footer.
4. Check logo usage against https://www.datadoghq.com/about/resources/.
5. Run `node web/scripts/verify-designs.mjs --slug=datadog` after any token edit.
