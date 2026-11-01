---
version: alpha
name: Squarespace
category: "Product & SaaS"
description: "Squarespace's home page is a near-monochrome, photography-led page on black #000000 with white sections: Clarkson sans throughout (60px/300 display at -3.6px tracking, 15px/21px body), Clarkson Serif for 26px card titles, square-ish white 'GET STARTED →' buttons with 4px radius and uppercase 14px/500 labels that hover to #dddddd, and #2f2f2f product cards with 8px corners."
colors:
  canvas: "#ffffff"
  page-body: "#000000"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-card: "#2f2f2f"
  ink-muted: "#898989"
  hover-grey: "#dddddd"
  field-on-dark: "#ffffff33"
typography:
  display:
    fontFamily: Clarkson, Helvetica, sans-serif
    fontSize: 60px
    fontWeight: 300
    lineHeight: 62.4px
    letterSpacing: "-3.6px"
  display-mobile:
    fontFamily: Clarkson, Helvetica, sans-serif
    fontSize: 42.4066px
    fontWeight: 300
    lineHeight: 44.1028px
    letterSpacing: "-2.54439px"
  heading:
    fontFamily: Clarkson, Helvetica, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 38.88px
    letterSpacing: "-1.44px"
  serif-title:
    fontFamily: "\"Clarkson Serif\", Helvetica, sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 28.08px
    letterSpacing: "-0.52px"
  card-title:
    fontFamily: Clarkson, Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-0.2px"
  body:
    fontFamily: Clarkson, Helvetica, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: "-0.015px"
  button:
    fontFamily: Clarkson, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
    textTransform: uppercase
  input:
    fontFamily: sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
rounded:
  xs: 4px
  sm: 8px
  md: 30px
  lg: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 23px
  s7: 24px
  s8: 28px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 23px 28px
    height: 60px
  button-primary-hover:
    backgroundColor: "{colors.hover-grey}"
  carousel-card:
    textColor: "{colors.canvas}"
    typography: "{typography.serif-title}"
    rounded: "{rounded.sm}"
    padding: 32px
  nav:
    backgroundColor: "{colors.page-body}"
    typography: "{typography.button}"
    padding: 0px 40px
  text-input:
    backgroundColor: "{colors.field-on-dark}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    height: 62px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.canvas}"
    typography: "{typography.card-title}"
    rounded: "{rounded.sm}"
    padding: 24px
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    padding: 0px 40px
---

# Squarespace

## Overview

Squarespace is a website builder, and its home page behaves like one of its own templates: almost entirely black and white, with photography and product screenshots supplying all the colour. The measured page (squarespace.com, 1280px wide, 7222px tall) has a black body `#000000`; a single white chapter sits in the middle ("Grow your business", "Everything you need on one platform").

At the top, an 80px black navigation bar holds the Squarespace logo (the interlocking ribbon mark and wordmark) at left, uppercase dropdowns (PRODUCTS, SOLUTIONS, RESOURCES) in the centre and "LOG IN" plus a white "GET STARTED" button at right. The hero is a full-bleed warm photograph of a man reading in low light, overlaid by a centred light-weight headline "A website makes it real", a white "GET STARTED →" button and the note "Start for free. No credit card required." A carousel of template previews ("Academic Lessons", a portfolio, a lifestyle store) sits along the bottom of the hero, followed by three big white statistics (14M+, $36B+, 200+) on black.

The white chapter introduces a tab row (Services, Online Store, Invoicing, Scheduling, Donations, Memberships, Blog, Portfolio) over a horizontal carousel of image cards titled in a serif ("Sell products", "Invoice clients"), and then a left-aligned "Everything you need on one platform" with a carousel of dark `#2f2f2f` product cards (Website Editing, Design Intelligence, Business Email, Domains, Extensions, Payments, Capital). The page returns to black for an AI section ("Getting started has never been easier with AI"), a domain-search field, a "Trusted by 14 million entrepreneurs worldwide" section, a "Made with Squarespace" showcase, an accordion (How to build a website, Frequently asked questions, 24/7 Support), and a final particle-sphere call to action "Start your free website trial today".

The voice is confident and minimal: "A website makes it real", "GET STARTED", "No credit card required."

## Colors

Measured from the rendered page (`web/data/extracted/squarespace.json`); the site's root variables list the same greys.

- **page-body `#000000`** — the body background and largest area (12638); `--primitive-black`.
- **canvas `#ffffff`** — the white chapter, the white buttons and most text (white text is the most-read colour, 13757 characters, because most of the page is black); `--primitive-white`.
- **ink `#000000`** — text on the white chapter (headlines and body).
- **primary `#ffffff` / on-primary `#000000`** — the "GET STARTED" button is white with black text on every dark section.
- **hover-grey `#dddddd`** — the button's hover fill, measured by the hover probe; `--color-gray-200`.
- **surface-card `#2f2f2f`** — dark product cards in the white section (889 by area).
- **ink-muted `#898989`** — secondary text (993 characters); `--color-gray-500`.
- **field-on-dark `#ffffff33`** — 20% white fill of the domain search field on black.

The root variables also declare `--color-gray-800: #5a5a5a`, `--color-gray-900: #1a1a1a`, translucent shades (`--color-shade-t-white-50: #ffffff14`, `--color-shade-t-black-100: #0000000d`), a focus colour `--color-focus: #087bb5` and accent colours `--color-blue: #0072f0`, `--color-pink: #ff9898`, `--color-red: #db3642`. The focus probe measured a `2px solid rgb(8, 123, 181)` outline with 3px offset on the skip link. None of the accents was measured as rendered UI on the home page. Squarespace's logo guidelines say to keep the logo "black and white".

## Typography

Two related families, both loaded by the site:

- **Clarkson** (weights 300, 400, 500) — 14919 measured characters: everything from the hero to the footer. Stack: `Clarkson, Helvetica, sans-serif`.
- **Clarkson Serif** (300, 400) — 273 characters, used only for the carousel card titles and the footer's "A website makes it real" line.

Measured roles:

- **display** — Clarkson 60px / 300 / 62.4px with -3.6px tracking (-0.06em): the hero headline and the statistics. A 70px size with -3.5px tracking also appears (30 characters).
- **heading** — 36px / 400 / 38.88px, -1.44px (-0.04em): section titles ("Grow your business", "Find the perfect domain for your website").
- **serif-title** — Clarkson Serif 26px / 400 / 28.08px, -0.52px: carousel card titles ("Sell products").
- **card-title** — 20px / 500 / 24px, -0.2px: product card titles ("Squarespace Payments").
- **body** — 15px / 400 / 21px, -0.015px: the overwhelming majority of text (11705 characters). Small text runs at 12px and 13px.
- **button** — 14px / 500 / 14px, uppercase: buttons and navigation links.

Weights are 400 (14049 characters), 500 (1078) and 300 (65, the display lines). Large type is light and very tightly tracked; small UI type is medium and uppercase.

**Substitute:** Clarkson is served by the site; its declared fallback is Helvetica.

## Layout

The CSS declares `--global-nav-height: 80px` and `--grid-gutter-width: 40px`, and the header and footer both measured `0px 40px` padding. The white "Everything you need" section measured content from x=40 to x=1240 (full width minus 40px gutters); centred sections are narrower (the domain-search section measured content between x=350 and x=930, with a 580px-wide search field). The statistics row is three columns.

Carousels are the main layout device: template previews in the hero, image cards under the tabs, and dark product cards, each with arrows and dot indicators. Spacing values: gaps of 12px (50), 8px (46), 40px (19) and 16px; paddings of 32px (50), 24px (23), 40px (18), with 120px and 160px for section padding.

## Elevation & Depth

No box shadows were measured anywhere on the page. Depth comes from photography (the dim hero portrait, warm still lifes in the carousel cards), from layering product screenshots over images, and from the contrast between black and white chapters. The closing call to action uses a sphere of white particles on black as its only decorative graphic.

## Shapes

- **8px (sm)** — the dominant radius (38 uses): carousel cards, product cards and the search field.
- **4px (xs)** — buttons. The "GET STARTED" button is nearly square-cornered.
- **100px**, **50%** and **100%** — circular arrow controls and avatar circles (the overlapping customer avatars above "Trusted by 14 million").
- **30px (md)** — measured on two elements.

## Components

**Primary button** — white `#ffffff`, black uppercase 14px/500 Clarkson label followed by an arrow ("GET STARTED →"), 4px radius, `23px 28px` padding, 60px tall. Hover: `#dddddd`. The header version is the same white button in compact form.

**Navigation** — black, 80px tall, uppercase 14px/500 links with dropdown chevrons, "LOG IN" as text and "GET STARTED" as a white button.

**Tab row** — small text tabs over the image carousel; the capture shows the selected tab ("Online Store") on a light rounded background.

**Carousel card** — full-bleed photograph, 8px radius, 32px padding, a white Clarkson Serif 26px title and a short description, with a product screenshot overlaid and an arrow at the bottom right.

**Product card** — `#2f2f2f`, 8px radius, 24px padding, white 20px/500 title, a short description and an image; 270px wide and 366px tall.

**Domain search** — 580px wide, 62px tall field with a 20% white fill on black, 8px radius, white 16px text and an arrow button.

**Accordion** — large white rows ("How to build a website") separated by hairlines with a plus icon at right.

**Footer** — black, the serif tagline at left, four link columns (Products, Solutions, From Squarespace, Company), an ICANN accreditation badge and language selector.

## Design System Architecture

Squarespace publishes brand rules at https://www.squarespace.com/brand-guidelines (usage of brand assets) and https://www.squarespace.com/logo-guidelines ("Keep 'em black and white", clear space, no alteration, white or single-colour backgrounds), and links an external brand site "Squarespace Foundations" at https://brand.squarespace.com/ with sections for Logo, Typography and Color. The content of those sections did not render in the fetched pages, so no type or colour values from it are used here.

On the shipped site the system is small and explicit: 20 root custom properties, split into primitives (`--primitive-white`, `--primitive-black`), a grey ramp (`--color-gray-200`, `-500`, `-800`, `-900`), translucent shades (`--color-shade-t-white-*`, `--color-shade-t-black-*`), a few accents and focus colours, and layout constants (`--global-nav-height: 80px`, `--grid-gutter-width: 40px`, `--promo-banner-height: 48px`). Class names such as `global-navigation__logo--desktop` follow BEM.

## Do's and Don'ts

**Do**
- Keep the interface black and white; let photography and template screenshots bring colour.
- Use Clarkson Light with heavy negative tracking (-0.06em) for display lines, and Clarkson Serif only for occasional card titles.
- Make the main button white with an uppercase label and an arrow, 4px radius.
- Use carousels with arrows and dots for groups of templates or features.
- Keep 40px page gutters.

**Don't**
- Don't add brand accent colours to buttons or headlines; the accent variables were not rendered on the page.
- Don't use shadows; none were measured.
- Don't round buttons into pills.
- Don't put the logo in colour; the logo guidelines restrict it to black and white.
- Don't use bold weights for headlines.

## Responsive Behavior

From the extractor's 390px pass: the hero headline measured 42.4066px / 300 with a 44.1028px line height and -2.54439px tracking (the same -0.06em ratio as desktop); body text stayed at 15px / 21px; the "GET STARTED" button kept its 166px × 60px size and 4px radius. The header measured 68px tall with `0px 16px` padding (80px and 40px on desktop). The extractor recorded 2 visible header links at 390px (4 on desktop). An 18px size appeared in the mobile pass (898 characters) that was not among the desktop sizes. Breakpoint widths were not measured.

## Iteration Guide

1. Start on black `#000000`; plan one white chapter for product detail.
2. Hero: full-bleed photograph, centred Clarkson 60px/300 headline at -3.6px, white 4px-radius button.
3. Body copy: Clarkson 15px/21px; muted text `#898989`.
4. Cards: 8px radius, photography or `#2f2f2f`, 20px/500 titles or 26px Clarkson Serif titles.
5. Keep to the root greys (`#dddddd`, `#898989`, `#5a5a5a`, `#1a1a1a`) before adding any hue.
6. Run `node web/scripts/verify-designs.mjs --slug=squarespace` after changes.
