---
version: alpha
name: Bangkok Aviation Fuel Services (BAFS)
category: "Thai Brands"
description: "Bangkok Aviation Fuel Services (bafsthai.com), Thailand's aviation refuelling operator: a navy #1a4683 and white corporate site with Urbanist headlines (a 440px uppercase BAFS masked-photo wordmark, 60px light titles), Roboto and Sarabun body text, 24px-radius navy pill buttons and pale #f3f8fd bands."
colors:
  canvas: "#ffffff"
  ink: "#04050b"
  primary: "#1a4683"
  on-primary: "#ffffff"
  surface-blue: "#f3f8fd"
  surface-grey: "#f3f3f3"
  ink-muted: "#919191"
  ink-body: "#4c4c4c"
  accent-sky: "#76b4e4"
  accent-teal: "#1a8373"
  navy-deep: "#0e2647"
  blue-mid: "#2989d2"
  gold: "#e5a144"
  red: "#ed1c25"
typography:
  display:
    fontFamily: Urbanist, "Noto Sans Thai", sans-serif
    fontSize: 440px
    fontWeight: 800
    lineHeight: 341px
    textTransform: uppercase
  display-mobile:
    fontFamily: Urbanist, "Noto Sans Thai", sans-serif
    fontSize: 162px
    fontWeight: 800
    lineHeight: 125.55px
    textTransform: uppercase
  heading:
    fontFamily: Urbanist, "Noto Sans Thai", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  subheading:
    fontFamily: Urbanist, "Noto Sans Thai", sans-serif
    fontSize: 60px
    fontWeight: 400
    lineHeight: 75px
  body:
    fontFamily: Roboto, Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Urbanist, "Noto Sans Thai", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
    textTransform: uppercase
  language-toggle:
    fontFamily: Urbanist, "Noto Sans Thai", sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
rounded:
  xs: 3.8px
  sm: 4px
  md: 4.8px
  lg: 15px
  xl: 18px
  2xl: 24px
  pill: 9999px
spacing:
  s1: 0.8px
  s2: 4px
  s3: 8px
  s4: 14px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 14px 24px
    height: 49px
  language-toggle:
    textColor: "{colors.on-primary}"
    typography: "{typography.language-toggle}"
    rounded: "{rounded.lg}"
    padding: 2.4px 28px 2.4px 8px
    height: 31px
    borderColor: "{colors.on-primary}"
  nav:
    textColor: "{colors.on-primary}"
    height: 90px
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink}"
    height: 367px
---

## Overview

Bangkok Aviation Fuel Services Public Company Limited (BAFS) supplies and handles aviation fuel at Thai airports; its site at bafsthai.com is a corporate and investor portal in English and Thai. The footer reads "Copyright © 2026 Bangkok Aviation Fuel Services Public Company Limited", and the three business lines on the home page are Aviation Business, Utilities and Power Business and Business Services. The page is a calm, photographic corporate site: dark navy and white fields, large light-weight English headlines, and a row of pill buttons.

The measured home page opens on a navy hero. A two-row header sits over it: a top row with "JOIN BAFS", "Contact", an outlined "English" language selector and a circular search button, and a main row with the BAFS logo (a red wing mark in a grey-bordered square) and the navigation About Us, Businesses, Corporate Governance, Sustainability, Management System, BAFS Group Academy, Investor Relations and News and Media. In the hero a small "Our Purpose" label (16px, weight 600) sits above the 60px light statement "Uplift and Power the World to a New Height", and beneath them the word BAFS is set at 440px in uppercase Urbanist 800 with a photograph of fuel tanks clipped into the letterforms (`background-clip: text`, the image `herobanner.jpg`). An announcement image popup (a Thai-language invitation to a shareholder meeting) covered the capture; it is a dismissible overlay and is not documented as brand UI.

Below the hero the page is a long vertical series of bands that alternate white and a pale blue (#f3f8fd): an introduction ("Through advanced technology, service competency, and ongoing collaboration with experts in the aviation refuelling industry, BAFS has implemented a highly efficient aviation refuelling system."), full-bleed photographic business sections each titled in large white light type ("Aviation Business") with a "LEARN MORE" button, a Message From President section, an Investor Corner (Financial Highlights, "Opportunity Day Q3/2026", Latest Documents), Latest Updates and news cards with "Read More" and "View All" actions, a "Road to Net Zero" row with Environment, Social and Governance cards, BAFS Group Academy, Join Us, partner logo strips, News Subscription, Get Direction and Head Office blocks, and a light-grey footer. In the capture, two tall bands are blank, which is the page state at capture time.

The voice is formal, institutional English: abstract nouns, program names (Road to Net Zero, BAFS Group Academy) and short capitalized button labels.

## Colors

A navy and sky-blue corporate palette on white, with a fuller ramp published in the CSS.

- **canvas #ffffff** — page background of content bands.
- **ink #04050b** — the near-black text color (982 characters), declared as `--neutral-500`.
- **primary #1a4683 / on-primary #ffffff** — the navy of the primary button and the largest colored background area (2072 units, the hero field); white text on it.
- **surface-blue #f3f8fd** — the pale blue alternating band (1844 units), `--blue-100`.
- **surface-grey #f3f3f3** — the footer fill (475 units) and the most common border color (28 measured), `--neutral-100`.
- **ink-muted #919191** (367 characters, `--neutral-300`) and **ink-body #4c4c4c** (193 characters) — secondary and paragraph text.
- **accent-sky #76b4e4** — 71 characters of text and 243 units of background, `--blue-500`.
- **accent-teal #1a8373** — 243 units of background; **navy-deep #0e2647** (`--navy-700`), **blue-mid #2989d2** (`--blue-600`), **gold #e5a144** (`--gold-500`) and **red #ed1c25** (`--red-500`) — declared ramp values, usage not measured on the home page.

White is the most-read text color (1156 characters) because the hero and photographic sections carry white type. Two framework values appear in the CSS and are not brand colors: Bootstrap's blue #007bff (the default link and `.btn-primary` color, measured on the nav anchors) and its green and amber alert colors.

## Typography

Two families. **Urbanist** (400, 600 and 800, with **Noto Sans Thai** as the Thai companion) is used for headlines, navigation and buttons (2145 characters measured); **Roboto** (300, 400, 700; 681 characters) with **Sarabun** as the Thai companion is used for paragraphs. The fonts are requested from Google Fonts, per the page's own `<link>` (Noto Sans Thai 400/600/800, Roboto, Sarabun). Font Awesome 6 and an icomoon font supply icons.

- **display — Urbanist 800, 440px / 341px, uppercase.** The BAFS hero wordmark; text color #04050b is replaced visually by the clipped photograph.
- **display-mobile — Urbanist 800, 162px / 125.55px, uppercase.** The same wordmark in the 390px pass.
- **subheading — Urbanist 400, 60px / 75px.** The hero statement and photographic section titles such as "Aviation Business".
- **heading — Urbanist 600, 16px / 24px.** Small eyebrow labels ("Our Purpose").
- **body — Roboto 400, 16px / 24px.** Paragraphs in #4c4c4c; Thai and English share the stack.
- **button — Urbanist 600, 14px / 21px, uppercase.** Button labels.
- **language-toggle — Urbanist 400, 15px / 22.5px.** The "English" selector.

Sizes by character count are 16px (1501), 23.222px (336), 14px (326), 15px (142), 18px (107), 19.2098px (101), 28px (65) and 34px (53). Weights are 400 (2328), 600 (441), 500 (23), 700 (22), 800 (11) and 300 (1).

## Layout

The desktop page measured 1280px wide and 10464px tall. The header is 90px tall and the footer 367px. The page is a column of full-width bands with a centered content container; hero text blocks are 1110px wide. The CSS root declares Bootstrap's grid breakpoints (`--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`, `--breakpoint-xxl: 1640px`) and `--hybrid-column-space: 15px`. Measured paddings are 15px (51 elements), 8px (13), 16px (13), 0.8px (13), 64px (12), 32px (10), 14px (9) and 40px (7).

Content alternates between text-led white or pale-blue bands and full-bleed photographic bands with centered white titles. Card grids (activities, press releases, Road to Net Zero) sit inside the container.

## Elevation & Depth

Soft and light. The only shadow measured on the home page is `rgba(0, 0, 0, 0.08) 0px 3px 6px 0px` (5 elements). The stylesheet declares more (`0 3px 6px #00000014`, `0 3px 10px #00000029`, `0 10px 10px #00000029` and Material-style layered shadows), but which elements use them was not measured. Depth otherwise comes from photographic backgrounds with a darkening overlay, color-field changes (#ffffff, #f3f8fd, navy) and 1px #f3f3f3 borders.

## Shapes

Buttons are pills with a 24px radius at a 49px height (4 elements); the language selector uses 15px; cards and tags use 18px (3 elements), 4px (16) and 4.8px; round elements (50%, 23 elements) include the search button, carousel arrows and avatars; one element has `3.8px 3.8px 0px 0px`. The 9999px pill value is declared in the generated token set.

## Components

**Primary button.** Navy #1a4683, white label, Urbanist 600 at 14px / 21px uppercase, radius 24px, padding `14px 24px`, height 49px, width 145px ("LEARN MORE", "VIEW ALL"). In the 390px pass the same button measures 45px tall with `12px 20px` padding.

**Language selector.** Transparent, 1px #ffffff border, white "English" with a globe icon and chevron, 15px / 22.5px, radius 15px, padding `2.4px 28px 2.4px 8px`, height 31px, width 115px.

**Header.** 90px, white text over the hero; a circular outlined search button at the right; a top utility row and a main navigation row. The measured nav anchors carry the Bootstrap link color; their visible text is white in the capture.

**Hero.** Navy field with an eyebrow, the 60px statement and the 440px clipped-image wordmark.

**Photographic business band.** Full-bleed photograph (an aircraft tail and wing in the capture) with a centered white title and a "LEARN MORE" button.

**News cards.** Activity and press-release cards with "Read More" and "View All" actions; spacing and sizes were not mapped individually.

**Footer.** #f3f3f3 field, 367px tall, with a "News Subscription" block (heading text "News Subscription", "Subscribe to our newsletter to receive up..."), Follow Us, legal links (Terms and Conditions, PDPA Policy, Cookie Policy, Sitemap) and the copyright line.

Hover and focus states were not captured (`hover` is empty).

## Design System Architecture

No public design system or brand guideline is published for BAFS. The home page https://www.bafsthai.com/en/home was opened; it states "No brand guidelines, logo or CI download, press kit, or design system link" appears (the logo is an embedded SVG at `/assets/images/logo/logo-bafs.svg`).

The de-facto system is a Bootstrap-based site: the stylesheet bundle is `/assets/node.f2492.css`, `/assets/vendor.ddbe9.css` and `/assets/app.c0cf4.css`, the root exposes Bootstrap's variables (`--light`, `--success`, `--warning`, `--info`, `--breakpoint-*`) and a custom color ramp named by hue and step: `--navy-300/400/700/900`, `--blue-100` to `--blue-900`, `--green-200` to `--green-900`, `--gold-500`, `--red-500` to `--red-900` and `--neutral-100/300/500`. The site's own component classes extend Bootstrap's (the unmodified `.btn-primary` is #007bff, which the measured navy button overrides). Media queries in the app stylesheet: `max-width: 767.98px` (733 rules), `1639.98px` (557), `991.98px` (381), `1640px` (269) and `1199.98px` (238).

## Do's and Don'ts

- Do use navy #1a4683 for primary actions with white uppercase 14px / 600 labels and a 24px radius.
- Do set English headlines in Urbanist (400 for large statements, 600 for labels, 800 for the wordmark) and paragraphs in Roboto with Sarabun for Thai.
- Do alternate white, pale-blue #f3f8fd and full-bleed photographic bands.
- Do keep the footer light grey #f3f3f3 with dark #04050b text.
- Do clip photography into very large uppercase wordmark letters for hero impact.
- Don't use Bootstrap's #007bff for brand actions.
- Don't use the announcement popup, consent banners or the lightbox scrim as brand UI.
- Don't add heavy shadows; the measured shadow is 0.08 opacity.
- Don't use sharp corners on buttons; the measured radius is 24px.

## Responsive Behavior

Measured at the 390px mobile pass: the BAFS wordmark drops from 440px to 162px (line height 125.55px, weight 800, uppercase); the "Our Purpose" eyebrow stays 16px / 24px weight 600; paragraph text stays 16px / 24px in #4c4c4c (96px tall, 360px wide); the primary button measures 45px by 145px with `12px 20px` padding; the header measures 71px by 390px with a 14px / 21px "English" selector. The most common mobile sizes are 16px (1584 characters), 19.7683px (385), 14px (333), 17.2561px (117), 39.2378px (57), 32px (53), 20px (36) and 20.7104px (27).

The app stylesheet declares its main breakpoints at 767.98px, 991.98px, 1199.98px and 1640px. How the navigation, bands and cards reflow at mobile widths was not measured, and no mobile capture image exists.

## Iteration Guide

1. Start with #ffffff, #f3f8fd and #f3f3f3 surfaces, #04050b text and the navy #1a4683 as the action color.
2. Use Urbanist for headlines and buttons, Roboto (with Sarabun for Thai) for paragraphs.
3. Build the hero as a navy field with a 60px light statement and a giant uppercase wordmark clipped to a photo.
4. Make buttons 49px-tall navy pills with 24px radius and uppercase 14px labels.
5. Use full-bleed photographic bands with centered white 60px titles.
6. Re-measure hover, focus, mobile reflow and the unrendered bands before documenting them.
7. Gate with `node web/scripts/verify-designs.mjs --slug=bangkok-aviation-fuel-services-pcl`.
