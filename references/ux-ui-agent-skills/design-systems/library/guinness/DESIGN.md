---
version: alpha
name: Guinness
category: "Food & Beverage"
description: "Guinness's global site guinness.com/en measured live — a near-black #0a0406 stout-dark page with white #ffffff and cream #f1e4d7 text, harp gold #b9965b for the square SIGN UP button and Find Out More links, a white footer with #171717 text, tall condensed Knockout 50 headlines (88px with +5.632px tracking) over Gotham body copy at 16px/24px, and 0px corners."
colors:
  canvas: "#0a0406"
  ink: "#ffffff"
  primary: "#b9965b"
  on-primary: "#0a0406"
  surface-black: "#000000"
  surface-footer: "#ffffff"
  ink-cream: "#f1e4d7"
  ink-grey: "#525252"
  ink-footer: "#171717"
  hairline: "#737373"
typography:
  display:
    fontFamily: knockout50, "knockout50 Fallback"
    fontSize: 88px
    fontWeight: 400
    lineHeight: 88px
    letterSpacing: 5.632px
  display-mobile:
    fontFamily: knockout50, "knockout50 Fallback"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: 2.56px
  title:
    fontFamily: knockout50, "knockout50 Fallback"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: 2.56px
  heading:
    fontFamily: knockout50, "knockout50 Fallback"
    fontSize: 44px
    fontWeight: 300
    lineHeight: 44px
    letterSpacing: 2.112px
  heading-mobile:
    fontFamily: knockout50, "knockout50 Fallback"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: 1.152px
  body:
    fontFamily: gothamA, "gothamA Fallback", gothamB, "gothamB Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: knockout50, "knockout50 Fallback"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 1.5px
    textTransform: uppercase
  footer-heading:
    fontFamily: gothamA, "gothamA Fallback", gothamB, "gothamB Fallback", sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  input:
    fontFamily: gothamA, "gothamA Fallback", gothamB, "gothamB Fallback", sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
  s8: 64px
  s9: 80px
  s10: 144px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 32px
    height: 56px
  link-gold:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
    height: 120px
  country-select:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-grey}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 8px 40px 8px 12px
    height: 33px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-footer}"
    typography: "{typography.footer-heading}"
    padding: 64px 0px
---

## Overview

This is the global English Guinness site at `https://www.guinness.com/en` ("The World of Guinness: Beers, Experiences & More"), measured live on 2026-10-17 at 1280px (6,285px tall) and in a mobile pass. It is a brand-experience site for the stout (the footer reads "© Diageo 2026"): one continuous dark page, almost the colour of the beer itself, with huge condensed white headlines, warm photography of pints and places, and gold used as the single accent — the gold of the harp.

A transparent 120px header floats over the hero with the gold harp-and-wordmark logo (SVG, 80 × 67px) at the left and search and menu icons at the right ("Menu Icon Click to open Menu"; one header link visible). The hero headline reads "SETTLE INTO THE WORLD OF GUINNESS. OVER 260 YEARS IN THE MAKING." at 88px, followed by "ADORED ON ALL FOUR CORNERS OF THE EARTH" at 44px light.

The page then runs as one media band (4,955px) of modules on near-black: "Our Beers", a horizontal carousel of beer photographs (Guinness Clear, Draught, 0.0, Hop House 13, Foreign Extra) with a large "GUINNESS DRAUGHT" title, a one-line description and gold "View This Beer ›" and "All Beers ›" links; then "Experience — Guinness at Home", "Our Craft — The Story of Guinness", "Experience — Guinness Storehouse" and "Our Craft — Regenerative Farming", each pairing a large photograph with a 64px title overlapping the image and a short paragraph with a gold "Find Out More ›" link. A "Subscribe — Keep updated with all things Guinness" block with the gold "SIGN UP" button precedes a white footer with six link columns (Beers, Our Craft, Experiences, Sport, Sustainability, Shop), a country selector and responsible-drinking legal lines.

The measured capture also shows the legal-drinking-age gate (rendered in Thai for the measuring location) and its dark scrim over the hero. That gate is not brand UI; its translucent scrim colours (#0a0a0acc, #0a0406cc) are excluded from the tokens.

## Colors

- **canvas #0a0406** — the page body, a warm near-black with a hint of red-brown; the largest painted area (weight 6,272) and 30% of the capture.
- **ink #ffffff** — headlines and body copy on the dark page (2,104 characters).
- **ink-cream #f1e4d7** — a warm cream used for 239 characters of body text, softening long paragraphs against the dark.
- **primary #b9965b** — harp gold. It fills the "SIGN UP" button and colours the "View This Beer", "All Beers" and "Find Out More" links (75 characters); it also appears as a child colour in the hero headline.
- **on-primary #0a0406** — the dark label on the gold button.
- **surface-black #000000** — pure black areas (weight 362).
- **surface-footer #ffffff** — the white footer (weight 1,503) and the country select.
- **ink-footer #171717** — footer column headings; **ink-grey #525252** — footer links and the select text (593 characters).
- **hairline #737373** — the most frequent border colour (select outline, dividers).

The CSS also contains framework defaults (`--tw-ring-color: #3b82f680`, `--swiper-theme-color: #007aff`); they are not brand colours.

## Typography

Three families carry the brand, all served as webfonts from `/_next/static/media/`:

- **Knockout 50** (`--font-knockout-50`) — a tall condensed sans for headlines and the button, always in capitals by content. **display** 88px / 88px with +5.632px tracking (h1); **title** 64px / 72px, +2.56px (module titles such as "GUINNESS DRAUGHT", "THE STORY OF GUINNESS"); **heading** 44px / 44px at weight 300, +2.112px (h2); **button** 20px / 24px, +1.5px, uppercase.
- **Knockout 30** (`--font-knockout-30`) — a narrower cut for small eyebrow labels ("OUR BEERS", "EXPERIENCE", "OUR CRAFT"), 20px with +2.4px tracking (61 characters).
- **Gotham** (`--font-gotham-a`, `--font-gotham-b`; Book and Bold files) — the reading face: **body** 16px / 24px (the most-read size, 1,993 characters), gold links at 16px with +1.5px tracking, **footer-heading** 16px / 700, and **input** 12px / 16px.

Instrument Sans was also measured on 266 characters at 10.5px (+0.2px); the element it styles was not identified, so it is not a token. Knockout and Gotham are licensed webfonts here; open substitutes are a tall condensed grotesk such as Oswald or Bebas Neue for Knockout and Montserrat for Gotham.

## Layout

Content sits between x=64 and x=1216 on desktop. Modules are asymmetric: a large photograph occupies most of the width, the 64px title overlaps the photo's lower-left corner, and a short text column (about 300px wide; the measured paragraph is 304px) sits at the opposite side with its gold link. The beer carousel runs edge-to-edge, cards cropped at both sides. The footer is a six-column link grid with the select and social icons at the right.

Measured paddings: 16px (most frequent), 40px, 64px and 32px, with 80px and 144px on large blocks; gaps: 16px, 12px, 4px, 32px, 28px. Spacing tokens use those measured values.

## Elevation & Depth

Depth comes from photography and darkness, not shadows. Images fade into the near-black canvas and headlines overlap them. The only measured shadows are a Tailwind-style `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px` and a white-and-blue focus ring (`rgb(255, 255, 255) 0px 0px 0px 2px, rgb(60, 131, 246) 0px 0px 0px 4px`), each on a single element. The page has no card elevation.

## Shapes

Square. The gold button, images, carousel cards, select and footer all compute 0px radius. A few small elements measured 2px, 4px, 5px and 9999px radii; the extraction does not identify them and the age gate was on screen, so they are not tokens. The chevron "›" after links and the carousel arrows are the only recurring graphic marks besides the harp.

## Components

- **Gold button (button-primary)** — "SIGN UP": #b9965b fill, #0a0406 Knockout 50 20px label with +1.5px tracking, 16px 32px padding, 56px high, square.
- **Gold text link** — "View This Beer ›", "All Beers ›", "Find Out More ›": Gotham 16px with +1.5px tracking in #b9965b, followed by a chevron.
- **Header** — transparent, 120px, harp logo left, search and menu icons right.
- **Beer carousel** — full-bleed row of tall product photographs, with the active beer's title (64px) and description beneath and white arrow controls at the right.
- **Editorial module** — eyebrow (Knockout 30, 20px), photo, overlapping 64px title, cream/white paragraph and gold link.
- **Country select** — white field, 12px Gotham #525252, 8px 40px 8px 12px padding, 33px high, chevron icon at the right.
- **Footer** — white, Gotham 16px/700 column headings in #171717, links in #525252, legal lines and partner logos (Guinness Storehouse, Guinness Webstore) at the bottom.

## Design System Architecture

No public design system or brand guideline for Guinness was linked from the home page (link scan of https://www.guinness.com/en found only font files). The shipped site is a Next.js build (`/_next/static/`) styled with Tailwind (the `--tw-*` variables) and Swiper for carousels (`--swiper-navigation-size: 44px`). Brand typography is exposed as font variables: `--font-knockout-30`, `--font-knockout-50`, `--font-gotham-a`, `--font-gotham-b` and `--font-noto-sans-kr` (for Korean), each with a metric-matched "Fallback" face generated by Next.js font optimisation. Colours are not exposed as variables; they are compiled into utilities. Breakpoints follow Tailwind steps — 640px, 768px, 1024px, 1280px, 1440px — plus a few custom queries (425px, 896px).

## Do's and Don'ts

**Do**
- Keep the page in stout-dark #0a0406 with white and cream type.
- Use #b9965b gold only for the primary action and inline links.
- Set headlines in Knockout 50 capitals with generous positive tracking (about 6% of the size).
- Overlap titles onto photography; let images bleed to the page edge.
- Read long text in Gotham 16px / 24px.

**Don't**
- Don't round the button or the images.
- Don't introduce a second accent colour; Tailwind blue and Swiper blue in the CSS are defaults.
- Don't use the age-gate scrim or its controls as components.
- Don't set headlines in mixed case or in Gotham.
- Don't put dark text on the dark canvas; the footer switches to a white ground for dark text.

## Responsive Behavior

From the mobile pass (content between x=32 and x=374):

- The h1 drops from 88px / 88px (+5.632px) to 40px / 40px (+2.56px).
- The h2 drops from 44px / 44px (+2.112px) to 24px / 24px (+1.152px), still weight 300.
- Eyebrows ("OUR BEERS", "STOUT") drop from 20px to 16px.
- Body copy stays 16px / 24px; the gold "SIGN UP" button is unchanged (20px, 16px 32px, 56px).
- The menu toggle is visible on both desktop and mobile with one header link visible; the main media band grows to 6,673px.

Hover states were not recorded on desktop or mobile.

## Iteration Guide

1. Start with `canvas` #0a0406, a transparent header and a white `display` headline.
2. Add modules: eyebrow in Knockout 30, photo, `title` overlapping the photo, `body` paragraph in white or `ink-cream`, gold link.
3. Use `button-primary` gold for the one conversion action per screen (sign-up, buy).
4. Finish with a white footer, `footer-heading` column heads and `ink-grey` links.
5. Keep every corner square.
6. Re-measure with the age gate dismissed before adding tokens; check `web/data/extracted/guinness.json`.
