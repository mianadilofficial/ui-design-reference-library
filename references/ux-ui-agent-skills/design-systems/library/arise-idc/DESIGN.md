---
version: alpha
name: Arise IDC
category: "Thai Brands"
description: "Arise IDC: Thailand's AI hyperscale data center provider; white canvas with #f8f8f8 bands, black buttons with 6px radius, gold-magenta-red gradient (#ffca00, #ff0099, #ff0000), brandFont 500-weight type at 50px display, 16px-radius white service cards."
colors:
  canvas: "#ffffff"
  ink: "#5f6369"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-soft: "#f8f8f8"
  surface-mute: "#f2f2f2"
  ink-faint: "#929292"
  button-primary-border: "#7f7f7f"
  brand-gold: "#ffca00"
  brand-magenta: "#ff0099"
  brand-red: "#ff0000"
  focus-ring: "#fe0058"
typography:
  display:
    fontFamily: brandFont, "brandFont Fallback", system-ui, sans-serif
    fontSize: 50px
    fontWeight: 500
    lineHeight: 62.5px
    letterSpacing: "-1.25px"
  display-mobile:
    fontFamily: brandFont, "brandFont Fallback", system-ui, sans-serif
    fontSize: 31.2px
    fontWeight: 500
    lineHeight: 39px
    letterSpacing: "-0.78px"
  heading:
    fontFamily: brandFont, "brandFont Fallback", system-ui, sans-serif
    fontSize: 34px
    fontWeight: 500
    lineHeight: 42.5px
  subheading:
    fontFamily: brandFont, "brandFont Fallback", system-ui, sans-serif
    fontSize: 24.867px
    fontWeight: 500
    lineHeight: 31.0837px
  body:
    fontFamily: brandFont, "brandFont Fallback", system-ui, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.06px
  nav:
    fontFamily: brandFont, "brandFont Fallback", system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 6px
  md: 16px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 7px
  s4: 12px
  s5: 16px
  s6: 18px
  s7: 24px
  s8: 28px
  s9: 32px
  s10: 36px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 38px
    borderColor: "{colors.button-primary-border}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.md}"
    padding: 28px 18px 24px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.05) 0px 2px 10px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    borderColor: "{colors.surface-mute}"
---

## Overview

ariseidc.com is the English home of Arise IDC ("Arise IDC (formerly True IDC)"), described on its title bar as "Thailand's AI hyperscale data center and multi-cloud provider". The measured page is 1280px wide and 7058px tall. The header (72px, `--header-h`) holds the logo, a menu (Services with a caret, About us, Newsroom), an EN/TH language switch and a "Contact us" button filled with a gold-to-magenta-to-red gradient. The hero is a dark photograph of a city at dusk with the white headline "Thailand's Largest AI Hyperscale Data Center Provider", followed by a row of big statistic numerals in the gradient colors (1GW "Largest power capacity", 99.99% "SLA Guarantee", 1000+ "Trusted customer", 100+ "Certified experts"). Next: "Comprehensive Technological Capabilities" as four white service cards with small gradient line icons and a black arrow button each; "AI Hyperscale Data Centers Across Prime Hubs" on white; a full-bleed gradient map panel with dotted geography and site labels (BKN1, BKN2, BKC1, BKG2, BKE1, ECC1, ECS1) over a huge condensed "STRATEGICALLY POSITIONED" word; compliance badges; a "Seamless Multi-Cloud Services" block with partner logos; a testimonial; a sustainability photo band; a news row; a closing "Ready to Scale Your Digital Infrastructure?" panel; and a footer.

At capture time a dark memorial/tribute modal with a portrait, Thai text and an "Enter Website" button covered the hero. That modal and its black scrim are not part of the brand system and nothing in this file is derived from them. The page's bottom consent bar was hidden by the extractor (`consentOverlaysHidden`).

## Colors

The page is almost monochrome with a single gradient accent. `canvas` is {colors.canvas} (#ffffff, weight 2045), `surface-soft` is #f8f8f8 (1662), `surface-mute` is #f2f2f2 (703), and `primary` ({colors.primary}, #000000, 668) is the fill of black buttons with white {colors.on-primary} text and a 1px #7f7f7f border (`button-primary-border`). Text is `ink` #5f6369 for paragraphs (2759 characters), #000000 for headings (2546), white on photography (548) and `ink-faint` #929292 for minor labels.

The accent is a gradient measured on the "Contact us" button: `linear-gradient(134.68deg, rgb(255, 202, 0) 2%, rgb(255, 0, 153) 31.9%, rgb(255, 0, 0) 100%)`. Its stops are recorded as `brand-gold` (#ffca00), `brand-magenta` (#ff0099) and `brand-red` (#ff0000). `focus-ring` (#fe0058) is the declared `--focus-ring` value. The CSS also contains orange and pink tints (#ff773f, #ff3080, #ff0598, #ff004c, #ff7a3d, #ff5f51) in the gradient overlays; they are listed in the CSS corpus and not promoted to tokens.

## Typography

Two web fonts are declared: "brandFont" (400, 500 and 400 italic), exposed as `--font-graphik`, and "displayFont" (400), exposed as `--font-bebas`; each has a metrics fallback. brandFont carries 5836 measured characters and displayFont 51 (the huge condensed "STRATEGICALLY POSITIONED" word).

- `display` (h1): brandFont 500, 50px, 62.5px line height, -1.25px tracking.
- `heading` (h2): brandFont 500, 34px, 42.5px line height.
- `subheading`: brandFont 500, 25.272px, 31.59px line height (service card titles measure 24.867px in the h3 role).
- `body`: brandFont 500, 14px, 18.06px line height.
- `nav`: brandFont 400, 16px, 24px line height.

The sizes by character weight are 14px (1687), 18.56px (1575), 16px, 12px, 24px, 30px and 34px. Medium weight (500) is used for body text as well as headings, which gives the page a uniform, firm texture. The variable names suggest the family names Graphik and Bebas but the loaded face names are brandFont and displayFont, so those are the names used here.

## Layout

The container is wide and left-aligned: the heading sits at the left edge and a short paragraph sits at the right edge of the same row ("AI Hyperscale Data Centers..." block). Service cards are four equal columns with 28px 18px 24px padding. The header is 72px tall; the hero uses `--first-screen-hero-min: 378px` and `--first-screen-peek: 40px` so the statistics row peeks into the first screen. Spacing values measured: 3, 4, 7, 12, 16, 18, 24, 28, 32 and 36px.

## Elevation & Depth

Cards have a very light shadow, `rgba(0, 0, 0, 0.05) 0px 2px 10px 0px`, on a white surface over #f8f8f8. Other shadow declarations are Tailwind ring placeholders. The gradient map panel and the sustainability photo give the page its only strong planes.

## Shapes

Buttons use {rounded.sm} (6px, measured on "Enter Website" and "Explore Service", 38px tall); cards use {rounded.md} (16px); small arrow buttons in the cards are rounded squares; the CSS corpus lists 2px, 4px, 6px, 8px, 15px, 16px, 24px and 9999px radii, one use each. The gradient map panel and photo bands are full-bleed rectangles.

## Components

- `button-primary`: {colors.primary} fill, white 14px / weight 500 text, 6px radius, 38px tall, padding 0px 16px, 1px #7f7f7f border (measured on "Explore Service").
- Gradient button ("Contact us"): the measured gradient above behind white 14px text.
- `card`: white, 16px radius, padding 28px 18px 24px, the 10px soft shadow; a gradient line icon, a 25px title, a gray 12-13px description and a black arrow button at the bottom.
- `nav` / `nav-link`: white bar, black 16px links, with a caret on Services.
- `footer`: white background with a #f2f2f2 border and black text.

## Design System Architecture

No public design-system or brand-guideline link was found on the opened page. It is a Next.js and Tailwind build (`--tw-*` variables, a `_next/image` logo `logo-arise-idc-v2.webp`). Its custom properties name the type (`--font-graphik`, `--font-bebas`), motion (`--ease-signature: cubic-bezier(.22, 1, .36, 1)`), layout (`--header-h: 72px`, `--first-screen-hero-min: 378px`, `--first-screen-peek: 40px`), `--focus-ring: #FE0058` and `--edge-fill: #FFFFFF`. Source: [ariseidc.com](https://www.ariseidc.com/).

## Content and Imagery

The imagery is infrastructure-oriented: dusk city skyline photography in the hero and the closing panel, a dotted-world-style map rendered in white dots on the gradient panel with white site codes, partner and certification logos on white tiles (Alibaba Cloud, AWS, Google Cloud, Huawei, Microsoft, Tencent Cloud and an Arise IDC cloud mark), an aerial forest photograph under the sustainability quote, and event photographs in the news row. Microcopy is plain and technical: capability names ("Data Center and Colocation Service", "Connectivity Service", "Cloud Service", "Cloud Operation Center as a Service"), numbers with units (1GW, 99.99%), and short sentences about power, latency and compliance. Statistics are the one place where the gradient is applied to type.

## Do's and Don'ts

- Do keep the page white, #f8f8f8 and black with #5f6369 paragraph text.
- Do reserve the gold-magenta-red gradient for the contact call to action, statistics and the map panel.
- Do use black 6px-radius buttons with a 1px #7f7f7f border.
- Do set cards at 16px radius with the light 10px shadow.
- Don't use the memorial overlay's black scrim or its button as brand UI.
- Don't use flat orange or pink fills in place of the gradient.
- Don't use bold weights; the system tops out at 500.

## Responsive Behavior

Measured at 390px: the h1 is 31.2px with 39px line height and -0.78px tracking, the h2 is 22.62px with 28.275px line height, and body text is 14px on 18.06px line height in #5f6369. Menu collapse behavior and the four-column card row at that width were not measured.

## Iteration Guide

1. White and #f8f8f8 grounds, #000000 headings, #5f6369 paragraphs.
2. brandFont 500 at 50px/62.5px (-1.25px tracking) for hero, 34px/42.5px for section titles.
3. Black buttons 38px tall, 6px radius; the gradient for the single contact CTA.
4. Cards 16px radius with a 10px 5% shadow.
5. Run `node web/scripts/verify-designs.mjs --slug=arise-idc` after edits.
