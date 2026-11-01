---
version: alpha
name: "NIPA Cloud"
category: "Thai Brands"
description: "NIPA Cloud, a Thai sovereign cloud provider: navy #232c65 headings on a #fefefe canvas, magenta #e91e76 buttons with 8px corners, Prompt and Sarabun type (64px hero, 18px body), white 12px-radius cards with #dfdfdf borders and a named type scale."
colors:
  canvas: "#fefefe"
  page-body: "#ffffff"
  surface: "#fefeff"
  ink: "#221122"
  primary: "#e91e76"
  on-primary: "#fefeff"
  navy: "#232c65"
  ink-muted: "#868686"
  ink-grey: "#595959"
  hairline: "#dfdfdf"
  lavender: "#f4f3ff"
  text-input-border: "#c8c8c8"
  navy-deep: "#1a214c"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 64px
    fontWeight: 600
  display-mobile:
    fontFamily: Prompt, sans-serif
    fontSize: 36px
    fontWeight: 600
    lineHeight: 54px
  heading:
    fontFamily: Prompt, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 35px
  button:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 500
  nav:
    fontFamily: Prompt, sans-serif
    fontSize: 12px
    fontWeight: 400
  input:
    fontFamily: Prompt, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 11px
  xl: 12px
  2xl: 16px
  3xl: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 22px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 44px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.surface}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 38px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.surface}"
  nav-link:
    textColor: "{colors.lavender}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 0px 0px 8px
    height: 44px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.lavender}"
    textColor: "{colors.navy}"
    rounded: "{rounded.3xl}"
    padding: 16px
    borderColor: "{colors.surface}"
  footer:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.surface}"
---

## Overview

The measured page is https://nipa.cloud/ (title "Nipa Cloud - Thailand Local Cloud Provider", language `en`), the English home page of NIPA Cloud, a Thai cloud infrastructure provider. The opened page describes it as a Thailand-based sovereign cloud whose resources are all in Thailand and owned by a Thai company, with CSA STAR and ISO certifications, "Up to 99.99%" uptime, lifetime free domestic bandwidth, 24/7 local support, four availability zones, AMD EPYC processors and PDPA-compliant data handling. The scroll height is 5294px at 1280px wide. A scrim-style overlay was hidden before measurement, and a floating chat button visible in the capture is not documented as brand UI.

Reading the capture top to bottom: a deep-navy announcement strip with a pink "Highlight" tag, a case-study message and utility links (Documentation, Contact Us, Careers, language toggle); a white header with the "nipa.cloud" logotype (a pink-and-navy N), nav items (Products, Pricing, Company, Services, Solutions, Case Studies, Partner, Blog, Podcast, Tutorials) and a navy "Portal" button; a hero with a lavender gradient and Bangkok skyline, the headline "Not Just a Cloud in Thailand / We are THAILAND'S CLOUD" in navy with the key phrase in a navy-to-magenta gradient, the tagline "Sovereign | Secure | Scalable", a solid pink "Start Free Trial" button and an outlined pink "Contact Sales" button, and a frosted feature grid (True Thai Sovereign, Global Standards, Up to 99.99% Uptime, Free Domestic Bandwidth, 24/7 Local Support, 4 Availability Zones); a "Why Nipa Cloud ?" section with six white bordered cards with small icon tiles; and an "Explore Our Products" panel in deep navy containing white grouped tables for Value Added Services, PaaS, Hybrid Connectivity and IaaS with product illustrations.

The tone is confident, technical and national-pride oriented, with a bright magenta accent over a navy base.

## Colors

- **Canvas `#fefefe`** is the page color (1094 units); **surface `#fefeff`** (2471) is the largest measured background area and the card fill; `page-body #ffffff` is the body background.
- **Navy `#232c65`** is the brand base: h1 and h2 color, the header strip, the secondary button fill, the footer and the hover base (336 text characters). A deeper navy `#1a214c` (848 units) is the dark product-panel field.
- **Primary `#e91e76`** is the magenta action color: the "Start Free Trial" button fill and border, outlined button text and the gradient headline accent (109 characters).
- **On-primary `#fefeff`** is text on navy and magenta (1035 characters).
- **Ink `#221122`** is body text (965 characters); `#868686` and `#595959` are secondary greys (396 and 196).
- **Lavender `#f4f3ff`** fills the icon-tile cards and nav-link text on navy; **hairline `#dfdfdf`** borders cards (24 uses); **input border `#c8c8c8`**.

## Typography

Two families: **Prompt** (300 to 700; 2237 weighted characters) for headings, nav, buttons and inputs, and **Sarabun** (300, 400; 949 characters) for paragraph and footer text. The h1 is Prompt 600 at 64px (36px / 54px on the 390px pass); card titles (h2) are 14px / 600 / 20px (12px / 18px on mobile); sub-headings are 18px / 500 / 28px; body paragraphs are Sarabun 18px / 400 / 35px; buttons are 16px / 500; navigation is 12px; inputs are 14px / 400 / 20px. The site's root variables define a named scale: `--Scale-Headline-1: 48px` (line height 72px), `--Scale-Headline-2: 32px` (48px), `--Scale-Sub-Headline: 24px` (36px), `--Scale-Title-1: 24px`, `--Scale-Title-2: 18px` (28px), `--Scale-Body-1: 16px` (24px), `--Scale-Body-2: 14px` (20px) and `--Scale-Caption: 12px` (18px), with all letter spacings 0.

## Layout

The page is a centered container with a wide gutter, building sections from three-column card grids (six cards in two rows) and grouped table panels. Measured gaps: 8px (53 uses), 12px, 4px, 24px, 16px, 6px, 95px and 60px; paddings: 12px (104 uses), 16px (101), 8px (48), 24px, 7px and 64px. The hero is a two-column overlap of copy and an artwork image with a rounded dark blob shape.

## Elevation & Depth

Shadows are few: `rgba(0, 0, 0, 0.25) 0px 4px 4px 0px` and its inset variant, and `rgba(197, 199, 211, 0.8) 1px 1px 4px 0px`. Cards rely on 1px `#dfdfdf` borders instead, and the hero uses a lavender gradient and a translucent frosted feature card (`#f4f3ff` with a white border).

## Shapes

Radii are a small scale: 4px (78 elements, inputs and small tiles), 8px (29, buttons), 12px (27, cards), 6px, 11px, 16px, and top-rounded `12px 12px 0px 0px` and `8px 8px 0px 0px` panels. The lavender frosted card is 24px. The tokens keep 4, 6, 8, 11, 12, 16, 24 and pill.

## Components

- **button-primary**: `#e91e76` fill and border, `#fefeff` Prompt 16px / 500, 8px radius, `0 16px` padding, 44px tall; hover inverts to a white fill with magenta text.
- **button-secondary**: `#232c65` fill, white text, 8px radius, 38px tall ("Portal"); hover fill measured as `rgb(101, 112, 185)`.
- **outlined link**: magenta text with a 1px magenta border ("Contact Sales").
- **nav**: `#232c65` utility strip, `#f4f3ff` 12px links.
- **text-input**: `#fefeff` fill, 4px radius, 1px `#c8c8c8` border, 44px tall.
- **card**: white fill, 12px radius, 1px `#dfdfdf` border, 16px padding; the frosted feature card is `#f4f3ff`, 24px radius.
- **footer**: `#232c65` with white 12px Sarabun 300 text.

## Content and Voice

Copy is bilingual in spirit: the English page is written for Thai businesses and keeps national identity at the center ("Not Just a Cloud in Thailand", "We are THAILAND'S CLOUD", "True Thai Sovereign"). Claims are short noun phrases paired with figures: "Up to 99.99% Uptime", "Free Domestic Bandwidth", "24/7 Local Support", "4 Availability Zones". The feature cards describe benefits in a single line each (cloud solutions to empower Thai businesses, lifetime free unlimited domestic bandwidth, AMD EPYC high-performance CPU, PDPA compliance and digital sovereignty, multiple availability zones, a self-service portal with on-demand payment). The products panel names offerings by tier (Value Added Services, PaaS, Hybrid Connectivity, IaaS) and by product code in parentheses, such as NIPA Cloud Space (NCS), NIPA Cloud Enterprise (NCE) and NIPA Cloud Hybrid (NCH).

## Design System Architecture

No public design system or brand guideline is linked: the opened page https://nipa.cloud lists products, pricing, trust and security, a blog, documentation and legal pages, and no brand or design-system page. The shipped CSS exposes a named type scale in root variables (`--Scale-*`, `--Line-Height-*`, `--Letter-Spacing-*`, from Headline-1 down to Caption) together with Tailwind `--tw-*` variables and the Swiper carousel variables. The measured sizes in the typography tokens (64px h1 aside) correspond to these named variables: 18px body-adjacent text is `Scale-Title-2`, 14px is `Scale-Body-2` and 12px is `Scale-Caption`.

## Do's and Don'ts

- Do use navy `#232c65` for headings and structure, and magenta `#e91e76` only for action.
- Do pair Prompt for headings and UI with Sarabun for long paragraphs.
- Do use 8px radius for buttons, 12px for cards and 4px for inputs.
- Do use 1px `#dfdfdf` borders and white cards on a near-white canvas.
- Don't add other accent colors; the swiper default `#007aff` is a carousel variable, not a brand color.
- Don't document the floating chat control or scrim as brand UI.
- Don't use heavy shadows.

## Responsive Behavior

The 390px mobile pass recorded the h1 at 36px / 54px (weight 600), the card h2 at 12px / 18px and the Sarabun body unchanged at 18px / 35px. The header collapse, card grid reflow and table panels were not measured, and no breakpoints were captured.

## Iteration Guide

1. Canvas `#fefefe`, ink `#221122`, headings navy `#232c65`.
2. One magenta `#e91e76` button per view, 8px radius, 44px tall; secondary actions navy or magenta outline.
3. Cards white with a 12px radius and a `#dfdfdf` border; icon tiles in `#f4f3ff`.
4. Prompt 600 at 64px for the hero, Sarabun 18px / 35px for paragraphs.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=nipa-cloud --url=https://nipa.cloud --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=nipa-cloud`.
