---
version: alpha
name: "Specialized"
category: "Sports & Fitness"
description: "Specialized's retail site uses DINPro bold 48px/60px headlines with -1px tracking on white (#ffffff) and charcoal ink (#252525), grey-white (#f8f8f8) 4px-radius buttons, 8px to 10px rounded product and campaign cards, a metal grey ramp and black footer with Specialized red (#da291c) in the stylesheet."
colors:
  canvas: "#ffffff"
  ink: "#252525"
  primary: "#f8f8f8"
  on-primary: "#2c2c2c"
  surface-2: "#f1f1f1"
  surface-3: "#000000"
  button-secondary-bg: "#00000066"
  nav-border: "#dcdcdc"
  brand-red: "#da291c"
  error: "#9b2219"
  in-stock: "#82b536"
typography:
  display:
    fontFamily: DINPro, Helvetica, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 60px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: DINPro, Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-1px"
  body:
    fontFamily: DINPro, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.25px"
  button:
    fontFamily: DINPro, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 700
  input:
    fontFamily: DINPro, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
rounded:
  xs: 4px
  sm: 8px
  md: 10px
spacing:
  s1: 8px
  s2: 9px
  s3: 12px
  s4: 14px
  s5: 16px
  s6: 24px
  s7: 48px
  s8: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 48px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 24px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    borderColor: "{colors.nav-border}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  text-input:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 9px 14px
    height: 56px
    borderColor: "{colors.on-primary}"
  card:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    textColor: "{colors.primary}"
---

# Specialized

## Overview

Specialized (specialized.com/us/en, titled "Made for riders, by riders. | Specialized.com") is a bicycle and gear retailer. The measured page is 4923px tall at 1280px wide. A black utility bar ("Rider-First Warranties", Support Center, Find A Store, a store-location link) sits above a white 54px header with the italic SPECIALIZED wordmark at left, centered bold links (Bikes, Gear, Special Offers) and small search, cart and account icons at right. The hero is a full-bleed forest-trail photograph with the white headline "Turbo Levo", the line "Where Super Meets Natural", a sentence ("Over 3,000 riders have given Levo a 5-star review…") and two 48px buttons (a light "Test Ride Levo" and a translucent-dark outlined "Shop Levo"). A privacy dialog overlays the capture; it is consent UI and is not documented as brand design.

Below the hero: "New Arrivals", a horizontal carousel of dark photo cards with white titles ("Built for Legends LTD Collection", "S-Works Diverge 4", "Tarmac SL9 Lineup") and small circular arrow chips; a two-up "Shop Bikes" and "Shop Gear" pair of large photo cards; "New Colors", a carousel of product cards on a pale grey `#f1f1f1` tile with the model name, spec line and price ("Tarmac SL9 Expert / SRAM Force AXS / $6,999.99"); "Made in Racing", photo cards with race headlines; a full-width dark photograph section "OUR PURPOSE / Pedal the Planet Forward" with an "Explore Sustainability" button; three dark stat cards ("Over 50 Years of Innovation", "8000+ Stores Worldwide", "Rider-First Warranties") and a black footer with link columns (Shop, Support, Resources, About), a newsletter field with an arrow button, social icons and app-store badges.

The voice is confident, product-led and short: noun-phrase titles, spec lines in small grey type, and prices. Photography is dark, high-contrast and studio-lit for products, with natural-light action shots for riding.

## Colors

- **Canvas `#ffffff`**: the dominant background (8928 weight).
- **Ink `#252525`**: the most-read dark text (1401 characters); `#2c2c2c` (846 characters) is the nearly identical on-primary charcoal used on buttons, inputs and the header nav.
- **Primary `#f8f8f8`**: the fill of the measured primary button and the light text on dark photography (3501 characters, the most-read text color overall because hero, card and footer text is light on dark).
- **Surface-2 `#f1f1f1`**: the product-tile and sunken background (1836 weight; stylesheet `--theme-sunken-bg`, `--color-metal-100`). **Surface-3 `#000000`** (964 weight): the black footer and utility bar.
- **Button-secondary-bg `#00000066`**: the translucent black behind the "Shop Levo" button.
- **Nav-border `#dcdcdc`**: the 1px header rule (`--theme-primary-border`).
- **Brand red `#da291c`** (`--color-brand-red`) and **error `#9b2219`** (`--theme-error-text`), **in-stock green `#82b536`** (`--theme-stock-in-stock`): stylesheet values; they were not seen on measured home-page elements.

The stylesheet also holds a metal grey ramp (`--color-metal-100` `#f1f1f1`, 300 `#b8b8b8`, 400 `#989898`, 500 `#7c7c7c`, 600 `#656565`, 700 `#525252`, 800 `#464646`, 900 `#3d3d3d`, 1000 `#1e1e1e`) and decorative hue ramps named denim, salsa, supernova, lavender, guacamole, pacific, hibiscus, emerald and pumpkin. The browser-default link color `#0000ee` appeared in the generated tokens on unstyled anchors and is dropped.

## Typography

**DINPro** (weights 400, 500, 700; 6225 characters) is the brand face with Helvetica (195 characters) as the fallback, in a stack "DINPro, Helvetica, sans-serif". Letter-spacing is slightly negative on every size except small uppercase labels.

| Role | Size / line-height | Weight | Tracking |
|---|---|---|---|
| display (hero title) | 48px / 60px | 700 | -1px |
| h2 ("New Arrivals") | 32px / 40px | 700 | -0.5px |
| body | 16px / 24px | 400 | -0.25px |
| button | 16px | 700 | normal |
| nav | 16px / 18px | 700 | normal |
| footer links | 14px / 21px | 400, capitalize | -0.25px |
| input | 14px / 14px | 400 | normal |
| display-mobile | 32px / 40px | 700 | -1px |

The size ladder by characters is 16px (3765), 32px (1161), 12px (968), 14px (224), 24px (207), 10px (69), 18px (16) and 48px (10). Small labels at 12px use 1px tracking on 109 characters. The stylesheet defines a named scale: `--font-size-min` 10px, `xs` 12px, `md-plus` 32px, `lg` 40px, `lg-plus` 44px, `2xl` 56px, `3xl` 64px and `4xl` 72px.

## Layout

The header is 54px high with a 1px `#dcdcdc` bottom border; the footer is 689px tall. Content sits in a 1232px-wide inner width (the h2 block measures 1232px) with 24px card padding (219 uses) and gaps of 16px (9), 8px (8), 48px (2) and 12px (2). Cards are 397px and 372px squares in the measurements. Breakpoints defined in the stylesheet are `--bp-small` 480px, `--bp-medium` 768px, `--bp-medium-large` 844px, `--bp-menu` 900px, `--bp-large` 1056px, `--bp-facet` 1160px and `--bp-nav-small-desktop` 1200px. Spacing variables include 40px, 48px, 56px, 72px and 80px steps.

## Elevation & Depth

Two shadows were measured, each once: `rgba(0, 0, 0, 0.08) 0px 16px 32px 0px` and `rgba(0, 0, 0, 0.3) 0px 32px 68px 0px` (the soft large shadow is the type used by floating dialogs). The stylesheet defines `--theme-card-shadow: #19191933`. Cards otherwise rely on dark photography or a `#f1f1f1` tile against white.

## Shapes

Radii measured: 4px (57 elements: buttons, links), 10px (51: campaign photo cards), 8px (33: product tiles, inputs) and a split `8px 0px 0px 8px` and `0px 8px 8px 0px` pair (the newsletter input and its button). The stylesheet names `--radius-sm` 4px, `--radius-md` 8px and `--radius-lg` 16px. Round arrow chips on cards are circular.

## Components

- **button-primary**: `#f8f8f8` fill, `#2c2c2c` bold 16px text, 4px radius, 0px 16px padding, 48px tall ("Test Ride Levo", 137px wide).
- **button-secondary**: `#00000066` fill, `#f8f8f8` text and 1px `#f8f8f8` border, same shape ("Shop Levo", 108px wide).
- **text-input**: `#2c2c2c` fill, white 14px text, 1px `#2c2c2c` border, 8px left corners, 9px 14px padding, 56px tall (newsletter).
- **card**: `#f1f1f1` tile with 8px radius (397px square) holding a product image; campaign cards are 10px-radius dark photographs with 24px padding and white bold titles.
- **nav**: white 54px bar, bold 16px `#2c2c2c` links, 1px `#dcdcdc` border.
- **footer**: black with `#f8f8f8` 14px capitalized links.
- **location dialog**: white 4px-class panel with two outlined full-width buttons ("Continue Browsing United States", "Switch to Thailand (Thailand)") whose hover state raised the fill from 40% to 70% white and darkened the border; shown in an earlier capture, not brand UI.

## Design System Architecture

No public design system or brand guideline link was found on the home page (the footer links are shopping, support and corporate pages). The shipped stylesheet is a token system in CSS variables with two layers: primitives (`--color-metal-*`, `--color-brand-white`, `--color-brand-black`, `--color-brand-red`, hue ramps, `--spacing-large-*`, `--font-size-*`, `--radius-*`, `--bp-*`) and semantic themes (`--theme-primary-fill: #2c2c2c`, `--theme-secondary-bg: #989898`, `--theme-tertiary-bg: #f1f1f1`, `--theme-lifted-bg: #f8f8f8`, `--theme-input-fill-default: #f8f8f8`, `--theme-selector-*`, `--theme-toast-*`, `--theme-stock-*`, `--theme-modal-overlay: #000`). Reference: https://www.specialized.com/us/en

## Do's and Don'ts

- Do use DINPro 700 for headlines at -1px tracking and 400 for body at -0.25px.
- Do use charcoal `#252525` and `#2c2c2c` rather than pure black for text on white.
- Do give buttons 4px corners, 48px height and 16px side padding; use 8px for tiles and 10px for campaign cards.
- Do alternate white and `#f1f1f1` product tiles, and put white text on dark photography.
- Don't treat the privacy dialog, cookie banner or location prompt as brand components.
- Don't use `#0000ee` for links; it is the browser default.

## Responsive Behavior

The 390px mobile pass measured: the display heading is 32px/40px at 700 with -1px tracking (151px wide for "Turbo Levo"); body text stays 16px/24px with -0.25px tracking (358px wide); the mobile size ladder is 16px (3434 characters), 12px (2593), 32px (1169), 14px (889), 20px (672), 10px (515), 24px (339) and 18px (16). The stylesheet declares breakpoints at 480, 768, 844, 900, 1056, 1160 and 1200px, and a `--bp-menu` of 900px; what changes at each breakpoint was not measured.

## Iteration Guide

1. Build on white with `#252525` text; use `#f1f1f1` for product tiles and black for the footer.
2. Use DINPro 700 at 48px, 32px and 16px for headline, section and button text.
3. Keep corner radii to 4px, 8px and 10px.
4. Overlay white text on dark photography; use `#f8f8f8` buttons on images.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=specialized --force --no-motion` after site changes.
