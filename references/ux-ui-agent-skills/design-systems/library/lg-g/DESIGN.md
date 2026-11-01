---
version: alpha
name: LG USA
category: "Consumer Electronics"
description: "LG Electronics USA (lg.com/us) is a retail storefront on LG Warm Grey #f0ece4 and #e6e1d6, with LGEI Headline 40px headings, LGEI Text 14–20px body, a #ea1917 red pill button (32px radius, soft rgba(27,26,30,0.15) shadow) that inverts to white on hover, and 24px-radius white product cards."
colors:
  canvas: "#f0ece4"
  page-largest: "#e6e1d6"
  ink: "#000000"
  ink-muted: "#646464"
  ink-soft: "#1b1a1e"
  primary: "#ea1917"
  on-primary: "#ffffff"
  surface-card: "#ffffff"
  charcoal: "#333333"
  brand-active-red: "#fd312e"
  brand-heritage-red: "#a50034"
typography:
  display:
    fontFamily: "\"LGEI Headline\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 43.2px
    letterSpacing: "-0.4px"
  display-mobile:
    fontFamily: "\"LGEI Headline\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 33.04px
  heading:
    fontFamily: "\"LGEI Headline\", sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 43.2px
    letterSpacing: "-0.4px"
  price:
    fontFamily: "\"LGEI Text\", sans-serif"
    fontSize: 28px
    fontWeight: 600
  card-label:
    fontFamily: "\"LGEI Text\", sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-0.4px"
  tab:
    fontFamily: "\"LGEI Text\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    letterSpacing: "-0.36px"
  body:
    fontFamily: "\"LGEI Text\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.32px
  button:
    fontFamily: "\"LGEI Text\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  nav:
    fontFamily: "\"LGEI Text\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 24px
  xl: 32px
  2xl: 40px
  pill: 9999px
spacing:
  s1: 1.6px
  s2: 3.2px
  s3: 4px
  s4: 4.8px
  s5: 6.4px
  s6: 8px
  s7: 11px
  s8: 12px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 12px 16px
    height: 42px
    borderColor: "{colors.primary}"
    boxShadow: rgba(27, 26, 30, 0.15) 0px 2px 10px 0px
  button-primary-hover:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    borderColor: "{colors.ink}"
    boxShadow: rgba(27, 26, 30, 0.15) 0px 4px 20px 0px
  category-card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.card-label}"
    rounded: "{rounded.lg}"
    height: 230px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  utility-bar:
    backgroundColor: "{colors.charcoal}"
    textColor: "{colors.on-primary}"
  footer:
    backgroundColor: "{colors.charcoal}"
    textColor: "{colors.on-primary}"
---

## Overview

lg.com redirects US visitors to **lg.com/us** ("LG Electronics & Home Appliances | Shop Now | LG USA"), the brand's direct-to-consumer store. The page measured at 1280px is 10,935px tall and is almost entirely commerce: a flash-sale strip, a rotating hero carousel of offers, a row of category cards, a tabbed deals grid, an "LG Expert" promotion, a product recommendation grid with prices, tabbed showcases for appliances, TVs and monitors, a "benefits of shopping LG.com" row, a "Life's Good with LG" row and a long legal-disclaimer block before a dark footer.

The visual identity follows LG's current global brand ("Emotionally Intelligent" forms, per LG's own design-system page): a warm off-white ground (**Warm Grey `#f0ece4`**, which is LG's published neutral), black type, a bright red action colour and generously rounded shapes — 24px cards, 32px pill buttons and circular controls. Two proprietary fonts carry the type: **LGEI Headline** for headings and **LGEI Text** for everything else.

Product photography is clean and lifestyle-based (appliances in warm kitchens, TVs in living rooms, monitors on gaming desks), cut into rounded tiles. Marketing copy is short and price-led ("Get up to 35% off select UltraGear™ plus up to $170 eGift Card", "FLASH SALE").

## Colors

- **Canvas `#f0ece4`** — the body background. LG's Color & Gradient page publishes the same value as **Warm Grey** ("#F0ECE4, R240 G236 B228, PMS Cool Gray 1 C").
- **Sand `#e6e1d6`** (`page-largest`) — the largest measured background area: category strip and the lower showcase section.
- **Red `#ea1917`** (`primary`) — every measured primary button ("Shop Now", "View All Deals", "Start Chat") and 12 borders. This is the rendered US-store red; it differs from the brand palette's published **Active Red `#fd312e`** and **Heritage Red `#a50034`** (recorded as `brand-*` tokens from LG's guideline page, not seen rendered on this page).
- **White `#ffffff`** — category and product cards, and the hover state of the red button.
- **Black `#000000`** (`ink`) — the most-read text colour (6,304 characters).
- **Grey `#646464`** (`ink-muted`) — secondary text (1,473 characters), e.g. product specs.
- **Charcoal `#333333`** — the top utility bar and the footer.
- **Near-black `#1b1a1e`** — a small text and background colour; also the base of the shadow colour `rgba(27, 26, 30, …)` and of `#1b1a1e80` borders.
- Translucent layers: `#ffffff80` (second-largest background area), `#00000080` and `#cbc8c280` — overlays on the hero carousel and product imagery.

## Typography

Two proprietary families, both loaded from the site: **LGEI Headline** (500, 700) and **LGEI Text** (400, 500, 700). LG's Typography page describes LG EI Headline as "the display typeface for high-impact moments" and LG EI Text as the face that "replaces the LG Smart UI font as our body and UI typeface", each published in Light, Regular, Semibold and Bold. The declared fallback is a generic `sans-serif`.

| Role | Family | Size / line-height | Weight | Tracking |
| --- | --- | --- | --- | --- |
| Section heading (h1, centered) | LGEI Headline | 40px / 43.2px | 700 | -0.4px |
| Hero / promo heading (h2) | LGEI Headline | 40px / 43.2px | 500 | -0.4px |
| Price | LGEI Text | 28px | 600 | — |
| Category card label | LGEI Text | 20px / 24px | 500 | -0.4px |
| Tab / sub-heading | LGEI Text | 18px | 500 | -0.36px |
| Header navigation | LGEI Text | 18px / 24px | 500 | normal |
| Button | LGEI Text | 16px / 16px | 700 | normal |
| Body | LGEI Text | 14px / 19.32px | 400 | -0.24px (dominant 14px tracking) |

By character count LGEI Text carries 10,440 characters against 619 for LGEI Headline: the headline face is reserved for the 40px headings only. Tracking is slightly negative at almost every size (14px/-0.24px, 18px/-0.36px, 20px/-0.4px, 40px/-0.4px); only 12px text is positive (+0.12px).

## Layout

The 1280px page runs content from about x=40 to x=1240, with hero and promo copy starting at x=64. Gaps are overwhelmingly 8px (284) and 16px (168); paddings are 24px (131), 3.2px, 16px, 12px and 8px, with 64px and 160px for larger blocks.

Sequence measured:

1. Charcoal utility bar (60px) with promotional text and account links.
2. Header (81px) on Warm Grey: LG logo, Shop, Parts & Accessories, Support, Business, a ZIP code (90210), search and cart.
3. Hero carousel (480px): offer copy at left (x=64–576) in 40px/500 headings, a red "Shop Now" pill, product imagery at right; pagination dots and a pause control below.
4. Sand strip of benefit links (72px).
5. "Shop top appliances and electronics" — centered 40px/700 heading over a horizontal row of white 24px-radius category cards (TVs, Refrigerators, Monitors, Laundry, Cooking, Laptops), each 230px tall.
6. "Discover LG Deals" — red pill "View All Deals", a tab row (Top Deals, Kitchen, Laundry, TV & Audio, Laptops & Monitors, Vacuum & A/C) and a bento grid of deal tiles.
7. Black "Shop with an LG Expert" band (320px) with a red "Start Chat" button.
8. "Recommended for you" — product cards with badges, ratings, 28px/600 prices and red buttons; then tabbed showcases ("Home appliances you can count on", "Take your home entertainment to new heights", "Work hard, play more…").
9. "Explore the benefits of shopping LG.com", "Life's Good with LG", "For LG Owners" service icons, a long legal block, and the charcoal footer with link columns.

## Elevation & Depth

One resting shadow is measured: `rgba(27, 26, 30, 0.15) 0px 2px 10px 0px` on the red buttons (8 elements). On hover it grows to `rgba(27, 26, 30, 0.15) 0px 4px 20px 0px` while the button inverts to white. Cards are flat white on Warm Grey. The translucent white (`#ffffff80`) and black (`#00000080`) layers create soft overlays on imagery and carousel controls rather than shadows.

## Shapes

Rounding is the signature. Measured radii: **24px** (42 elements — category, deal and product cards), **50%** (35 — circular carousel arrows, pagination, icon buttons), **32px** (27 — pill buttons), 8px (10), 4px (6), 5px (6), 40px (1). LG's Design System page says its "Emotionally Intelligent forms are derived directly from the rounded, friendly shapes of LG products" and lists core forms of square, circle, stadium, hourglass and crescent; on this page the stadium (32px pill on a 42px button) and circle are the forms in use.

## Components

- **Primary button** — `#ea1917` fill and 1px border, white LGEI Text 16px/700, padding 12px 16px, 42px tall, 32px radius, shadow `rgba(27,26,30,0.15) 0 2px 10px`. Measured hover: white fill, black text, black border, shadow `0 4px 20px`.
- **Category card** — white, 24px radius, 190px wide and 230px tall, product image above a 20px/500 black label with -0.4px tracking.
- **Deal / product card** — white, 24px radius, badge, product image, title, rating, 28px/600 price and a red button.
- **Tabs** — 18px/500 labels with -0.36px tracking.
- **Carousel controls** — circular (50%) arrows and dots.
- **Header** — Warm Grey, black 18px/500 links; at desktop 3 header links are counted visible plus a search control.
- **Utility bar and footer** — Charcoal `#333333` with white text.

## Design System Architecture

LG publishes its brand system at https://www.lg.com/global/our-brand under "Our identity", with pages for Logo, Color & Gradient, Photography, Typography, Slogan, Voice, Design System and Brand Assets.

- **Color** (https://www.lg.com/global/our-identity/color/): Active Red `#FD312E`, Heritage Red `#A50034`, Warm Grey `#F0ECE4`, White, Black; "At our core, LG has always been a red brand"; an "Adaptable Color System" with defined colorway ratios and four signature gradients (white-to-pink, pink-to-red, red-to-pink, Heritage Red-to-black).
- **Typography** (https://www.lg.com/global/our-identity/typography/): LG EI Headline and LG EI Text, Light/Regular/Semibold/Bold.
- **Design System** (https://www.lg.com/global/our-identity/design-system/): "Inspired by the Shapes of LG Products" — Core State (simple geometric forms at rest) and Connected State (fluid forms responding to scroll and hover); Hero, Connect and Focus layout modes; an "EI Lens" circular form linking content to imagery. The page publishes no token values.

The US store exposes no CSS custom properties (zero root variables measured); its rendered values (red `#ea1917`, 24/32px radii, 8/16px gaps) are the de-facto implementation.

## Do's and Don'ts

**Do**
- Use Warm Grey `#f0ece4` as the page ground and white for cards.
- Use LGEI Headline only for 40px headings and LGEI Text for everything else, with slightly negative tracking.
- Use the red pill button (32px radius, 42px tall) for every purchase action, inverting to white with a black border on hover.
- Round cards at 24px and controls as circles.
- Keep headings centered above grids and left-aligned in hero offers.

**Don't**
- Don't use sharp corners on cards or buttons.
- Don't set body text in LGEI Headline.
- Don't use red for text blocks or large backgrounds; it is the action colour.
- Don't replace Warm Grey with pure white as the page background.
- Don't add heavy shadows; the only resting shadow is `0 2px 10px` at 15% opacity.

## Responsive Behavior

Measured at 390px:

- The header shows 1 link and a menu toggle (desktop: 3 links plus a toggle labelled "Search").
- Headings drop from 40px to 28px/33.04px (700 for section headings, 500 for hero headings), with letter-spacing `normal` instead of -0.4px.
- Body stays at 14px/19.32px; the red button keeps its 32px radius, 16px/700 label and shadow.
- The utility bar measured 96px tall (60px on desktop); the hero carousel measured 161px of text area followed by image bands.
- Content runs from x=16 to x=374 in most bands; the recommended-products band spans x=2 to x=388.
- The footer measured 623px tall (279px on desktop).

Intermediate breakpoints were not measured.

## Iteration Guide

1. Start with `#f0ece4`, black LGEI Text 14px/19.32px, and white 24px-radius cards with 8px or 16px gaps.
2. Head each section with a centered 40px/700 LGEI Headline title (-0.4px tracking); 28px on mobile.
3. Give each offer one red `#ea1917` pill button with the measured shadow and hover inversion.
4. Present categories as a row of equal white cards (image above a 20px/500 label) and products with a 28px/600 price.
5. Use circular controls for carousels and filters.
6. Draw any additional colour from LG's published palette (Active Red, Heritage Red, Warm Grey, white, black) and its four gradients; check the rendered value before shipping.
