---
version: alpha
name: Plasmic
category: "Developer Tools & IDEs"
description: "Plasmic's plasmic.app marketing site: white #ffffff canvas alternating with near-black violet #060317 sections, Inter throughout (80px/600 hero at -3px tracking), black #0d0d12 pill buttons with #ededec labels, a purple-pink-coral-orange gradient (#8636f8, #f020b3, #f8475e, #ff9421) on highlighted headline words, and 21px-radius translucent dark cards with #343337 borders."
colors:
  canvas: "#ffffff"
  ink: "#0d0d12"
  ink-nav: "#0c0c11"
  ink-muted: "#666c7f"
  primary: "#0d0d12"
  on-primary: "#ededec"
  surface-dark: "#060317"
  footer-bg: "#030210"
  ink-on-dark: "#ffffffb3"
  ink-on-dark-muted: "#ffffff99"
  accent-pink: "#f44b88"
  accent-purple: "#7f4afd"
  gradient-purple: "#8636f8"
  gradient-magenta: "#f020b3"
  gradient-coral: "#f8475e"
  gradient-orange: "#ff9421"
  hairline-violet: "#8636f840"
  nav-hover: "#eceff3"
  nav-bg: "#ffffffcc"
  card-bg: "#ffffff05"
  card-border: "#343337"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 80px
    fontWeight: 600
    lineHeight: 88px
    letterSpacing: "-3px"
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 48px
    fontWeight: 600
    lineHeight: 56px
    letterSpacing: "-1px"
  heading:
    fontFamily: Inter, sans-serif
    fontSize: 72px
    fontWeight: 600
    lineHeight: 80px
    letterSpacing: "-2%"
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 56px
    letterSpacing: "-2%"
  body:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-1%"
  button:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-2%"
  button-small:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
    letterSpacing: "-2%"
  card-title:
    fontFamily: Inter, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 36px
    letterSpacing: "-0.2px"
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.14px"
rounded:
  xs: 4px
  sm: 6px
  md: 16px
  lg: 20px
  xl: 21px
  2xl: 24px
  3xl: 32px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 21px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 1px
    height: 50px
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.pill}"
    padding: 1px
    height: 39px
  link:
    textColor: "{colors.accent-pink}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
    height: 100px
  nav-link-hover:
    backgroundColor: "{colors.nav-hover}"
    rounded: "{rounded.pill}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
---

# Plasmic — plasmic.app

## Overview

Plasmic's home page (https://www.plasmic.app, title "Plasmic | Build powerful apps fast— without the limits") markets an open-source visual builder that plugs into existing codebases. It is a long page (12,916px measured) that alternates bright white sections with deep, near-black violet ones, tied together by one signature device: a purple → magenta → coral → orange gradient applied to key words in headlines ("visual builder", "blazingly fast", "love", "custom UIs").

The capture opens with a translucent white header (rainbow-arc logo, Product, Solutions, Marketplace, Resources, Pricing, a GitHub icon, Sign In and a black **Sign Up** pill). The centred hero headline "The visual builder for your tech stack" is set in Inter 80px semibold with -3px tracking, over a soft pastel glow. A black **Get started free** pill sits under a two-line description, followed by a screenshot of the Plasmic editor building a sneaker storefront and a row of outlined use-case chips (Internal tools, Customer portals, SaaS apps…). Then: a "Loved by teams around the world" logo grid, a "HOW IT WORKS" section with toggle chips (Connect / Drag & Drop) and an integrations card with lines fanning out to Airtable, Zapier, Supabase, Vercel, Contentful and Shopify, a dark `#060317` "Design experiences your users will love" section with floating editor UI fragments and a light beam, a white "Bridge the gap between teams" area, a dark "Scale without limits" grid of six translucent feature cards, a masonry "Our customers [U+2665] us" wall, and a dark closing CTA with footer.

The microcopy is confident developer-marketing: "Ship incredibly fast.", "Build outside the box with Plasmic", "NO CREDIT CARD NEEDED".

## Colors

All values are measured in `web/data/extracted/plasmic.json`.

- **Canvas `#ffffff`** — the light sections (56% of capture pixels); **ink `#0d0d12`** — headline and body text on white; **ink nav `#0c0c11`** — header text; **ink muted `#666c7f`** — secondary text.
- **Primary `#0d0d12`** — every main CTA is a black pill with **`#ededec`** label text. On dark sections the CTA inverts to a white pill ("Get started") or a gradient-bordered dark pill.
- **Surface dark `#060317`** and **footer bg `#030210`** — the near-black violet sections; text on them is **`#ffffffb3`** (70% white) and **`#ffffff99`** (60% white), with headings in pure white.
- **Gradient stops** — `#8636f8` purple, `#f020b3` magenta, `#f8475e` coral, `#ff9421` orange: the stops of the 81.31° linear gradient measured on the Sign Up button background and used for gradient headline words and button outlines.
- **Accent pink `#f44b88`** and **accent purple `#7f4afd`** — small eyebrow/link text accents ("THE WALL OF LOVE", "HOW IT WORKS").
- **Hairline violet `#8636f840`** — 25%-alpha purple borders on eyebrow chips; **card border `#343337`** and **card bg `#ffffff05`** — the dark translucent cards.
- **Nav hover `#eceff3`** — header item hover fill; **nav bg `#ffffffcc`** — the 80%-white translucent header.

## Typography

The site uses **Inter** only (400, 500, 600), with slightly negative tracking everywhere.

- **Display** — 80px / 88px, 600, -3px.
- **Heading** — 72px / 80px, 600, -2% ("Build experiences blazingly fast").
- **Subheading** — 48px / 56px, 500, -2% ("Connect to any data source").
- **Card title** — 20px / 36px, 500, -0.2px.
- **Body** — 16px / 24px, 400, -1%.
- **Button** — 16px / 24px, 500, -2%; small button 14px / 21px.
- **Nav** — 14px / 20px, 500, -0.14px.
- Eyebrows are uppercase 12px with 1.44px tracking inside small rounded chips.

Measured sizes by character count: 16px, 20px, 14px, 12px, 48px, 72px, 24px, 13px, 80px. Inter is open-source; no substitute is needed.

## Layout

At 1280px the hero spans x = 264 to x = 1247, centred. The measured band sequence is: white hero (626px), media strip (214px), pale `#f7fdff` "How it works" band (2,044px), dark `#060318` design band (1,746px), white "Bridge the gap" band (4,216px, 2 columns), dark `#0a0a0f` "Scale without limits" band (1,418px), white testimonials (1,668px) and a dark 6-column footer (984px). Dark bands have rounded top corners where they meet white. Gaps cluster at 16px, 24px, 4px, 8px and 25px; paddings at 8px, 16px, 20px and 12px, with 72px and 64px section paddings.

## Elevation & Depth

Light sections use a soft layered shadow on chips and small cards: `rgba(54, 57, 74, 0.06) 0px 2px 4px 0px, rgba(164, 172, 185, 0.16) 0px 1px 2px 0px, rgba(18, 55, 105, 0.08) 0px 0px 0px 1px`. A deeper `rgba(0, 0, 0, 0.22) 0px 8px 32px -8px, rgba(0, 0, 0, 0.14) 0px 8px 20px -16px` lifts floating panels. Dark sections rely on translucent fills (`#ffffff05` with a `radial-gradient` highlight from the top-left), 1px `#343337` borders, pastel glows and light-beam imagery rather than shadows.

## Shapes

Everything interactive is a **pill** (999px, the most frequent radius): CTAs, header items on hover, chips and toggles. Cards are rounded **21px** (`rounded.xl`) on dark feature cards, **16px** and **24px** on light cards and the integrations panel, **20px** and **32px** on larger containers. Small inner elements use 4px and 6px.

## Components

- **Primary button** — black `#0d0d12` pill, `#ededec` Inter 16px weight 500, 50px tall, with 1px padding and a measured linear-gradient background-image layer; on dark sections the capture shows the gradient as a thin outline ("Get started").
- **Small button** — the same pill at 39px with 14px text (Sign Up); hover keeps the black fill.
- **Header** — 100px tall, `#ffffffcc` translucent; items hover to an `#eceff3` pill.
- **Eyebrow chip** — small pill with a `#8636f840` border and 12px uppercase tracked text.
- **Toggle chips** — outlined pills, the active one with a shadow ("Connect", "Drag & Drop").
- **Dark feature card** — `#ffffff05` fill with radial highlight, 1px `#343337` border, 21px radius, UI illustration on top, 20px white title and 60–70% white description.
- **Testimonial card** — white, light shadow, quote, avatar, name and role.

## Design System Architecture

Plasmic publishes no brand guidelines page (https://www.plasmic.app/brand returned 404) and its GitHub org (https://github.com/plasmicapp) shows no design-system or brand-asset repository among the listed repos; the product itself (https://github.com/plasmicapp/plasmic, "Visual builder for React") is the system. The footer carries a "Made in Plasmic" badge, and the shipped CSS uses Plasmic-generated names — `var(--token-68H-GV-_0)` style token variables and `--mixin-…_font-family` mixins — rather than hand-written root variables (`rootVars` is empty at `:root`). The de-facto system is therefore the values above: Inter at three weights, a black pill CTA, the four-stop gradient, and pill/21px radii.

## Do's and Don'ts

**Do**
- Use Inter with negative tracking; headlines at 600, subheads at 500.
- Make CTAs black `#0d0d12` pills with `#ededec` text on white, and white pills on dark sections.
- Reserve the `#8636f8` → `#f020b3` → `#f8475e` → `#ff9421` gradient for one or two highlighted headline words and for button borders.
- Alternate white and `#060317` sections, rounding the dark section corners.
- Keep dark cards translucent with 1px `#343337` borders.

**Don't**
- Don't fill large areas with the gradient; it is an accent.
- Don't use square buttons; every control is a pill.
- Don't use pure black for dark sections; they are violet-tinted.
- Don't add heavy shadows on dark backgrounds.

## Responsive Behavior

The 390px mobile pass recorded the hero headline at 48px / 56px with -1px tracking (text color `#272835`), the section heading at 44px / 52px, body text staying at 16px / 24px, two visible header links with no menu toggle detected, and a maximum of 2 card columns. Mobile content spans x = 24 to x = 366. Mobile font sizes by frequency: 16px, 14px, 12px, 40px, 44px, 20px, 13px, 48px. The stylesheet declares breakpoints mostly at max-width 768px, plus 640px and 750px. Other reflow behavior was not measured.

## Iteration Guide

1. Start with white `#ffffff` and `#0d0d12` Inter text.
2. Centre an 80px / 88px semibold headline at -3px tracking with one gradient-filled phrase.
3. Add a 50px black pill CTA with `#ededec` 16px weight-500 text.
4. Follow with a product screenshot on a soft pastel glow and outlined pill chips.
5. Switch to a `#060317` band for feature showcases, using 21px-radius translucent cards with `#343337` borders.
6. Measure anything not in the frontmatter before adding it.
