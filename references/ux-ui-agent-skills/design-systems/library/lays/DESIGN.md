---
version: alpha
name: Lay's
category: "Food & Beverage"
description: 'Lay''s US snack site measured live: Lay''s yellow #ffda03 canvas, cream #f0ede1 recipe band, red #e61a22 pill actions, flavor-coded product tiles, and the custom Lays and LaysExtraBold families with 16px and 50% rounding.'
colors:
  canvas: '#ffda03'
  ink: '#000000'
  primary: '#e61a22'
  on-primary: '#ffffff'
  surface-cream: '#f0ede1'
  surface-yellow: '#fcd802'
  primary-hover: '#00000040'
  button-primary-bg: '#0000001a'
  flavor-green: '#01a25c'
  flavor-purple: '#91308d'
  flavor-orange: '#eb6627'
  flavor-night: '#070f12'
typography:
  display:
    fontFamily: LaysExtraBold, sans-serif
    fontSize: 46.6666px
    fontWeight: 400
    lineHeight: 46.6666px
  display-mobile:
    fontFamily: LaysExtraBold, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
  heading:
    fontFamily: Lays, sans-serif
    fontSize: 16px
    fontWeight: 700
  subheading:
    fontFamily: Lays, sans-serif
    fontSize: 12.48px
    fontWeight: 700
  body:
    fontFamily: Lays, sans-serif
    fontSize: 10.6667px
    fontWeight: 400
  button:
    fontFamily: LaysExtraBold, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 1.33px
  sm: 16px
  pill: 9999px
spacing:
  s1: 2.67px
  s2: 4px
  s3: 6.67px
  s4: 7.5px
  s5: 8px
  s6: 10px
  s7: 13.33px
  s8: 16px
  s9: 22.67px
  s10: 26.67px
components:
  button-primary:
    backgroundColor: '{colors.button-primary-bg}'
    textColor: '{colors.on-primary}'
    typography: '{typography.button}'
    rounded: '{rounded.sm}'
    padding: 6.66666px 22.6667px
    height: 31px
    borderColor: '{colors.on-primary}'
    boxShadow: rgba(0, 0, 0, 0.15) 0px 2px 6px 0px inset, rgba(255, 255, 255, 0.6) 0px -2px 6px 0px inset
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-primary-hover:
    backgroundColor: '{colors.primary-hover}'
  nav:
    textColor: '{colors.on-primary}'
  footer:
    backgroundColor: '{colors.surface-cream}'
    textColor: '{colors.ink}'
    padding: 66.6666px 0px
---

## Overview

Lay's is the Frito-Lay potato-chip brand, and its US site (the measured page resolved to `https://www.lays.com/`) is an upbeat, product-first showcase. The opened page leads with "Real Potatoes. Real Flavor. Real Joy.", with a hero photograph captioned "Always made with real potatoes". The capture shows a golden field, wooden potato crates stamped with the Lay's logo and a yellow Classic bag, with a curved dark cut-out below it that holds the logo at the left and a round red menu button at the right.

Below the hero the page is organized into four named sections, "Featured Products", "Products", "Recipes" and "Get Social". Featured Products is a dark band with a single bag in a red starburst and a "Discover More" pill. Products is a horizontal carousel of bags, each on a solid color tile (green, yellow, teal, orange, red). Recipes sits on a cream band with large photographic cards ("LAY'S Wavy Chile Queso Hash Brown Casserole", "LAY'S Beef Quesadilla", "LAY'S Wavy Corn & Onion Dip") and a red "View All Recipes" pill. A yellow and white "Real Potatoes. Real Flavor." banner follows. Header navigation is Products, Recipes, Farmer Stories and Where to Buy; the footer carries FAQ, Terms of Use, Privacy Policy, Accessibility Statement, About Our Ads and Contact Us, and the copyright reads Frito-Lay North America, Inc.

The tone of voice is friendly, wholesome and simple, stressing real ingredients and shareable snacking. Imagery is food photography and product packshots; the color is supplied mostly by packaging and tile backgrounds.

## Colors

All values are from `web/data/extracted/lays.json`.

- **Canvas `#ffda03`**: Lay's yellow, the largest background by area (weight 6718). A second, nearly identical yellow `#fcd802` (token `surface-yellow`, weight 2240) is also present.
- **Cream `#f0ede1`** (`surface-cream`): the recipe band and the footer background (footer measured `#f0ede1`).
- **Ink `#000000`**: main text color (241 characters), used on yellow and cream; display headings in the capture ("Products", "Recipes") are black.
- **Primary `#e61a22`**: the brand red. It is measured as a text color (36 characters) and appears 29 times in the site CSS corpus. In the capture it is the fill of the pill buttons ("Discover More", "View All Recipes") and the round menu button. The generator's original primary, `#0000ee`, is the browser's default link color and is not a brand color, so it was reassigned; the role of red as a fill is taken from the capture, not from a measured background.
- **On-primary `#ffffff`**: white label text (271 characters measured).
- **Button fill `#0000001a`** (`button-primary-bg`): the measured background of the "Where to Buy" button, a 10 percent black overlay; on hover it deepens (`primary-hover` `#00000040`).
- **Flavor tiles**: `#01a25c` green, `#91308d` purple, `#eb6627` orange and `#070f12` near-black, each measured at area weight 922 as product tile backgrounds.

Link and nav text in the extraction measured `#0000ee` (966 characters), which is the user-agent default for unstyled anchors; it is excluded.

## Typography

Two custom families: **Lays** (1165 characters, weight 400 and 700) for body, headings and labels, and **LaysExtraBold** (349 characters) for display and button text. Both fall back to generic sans-serif. Both are loaded as web fonts ("Lays 400 normal" and "LaysExtraBold 400 normal").

| Token | Size | Weight | Notes |
|---|---|---|---|
| `display` | 46.6666px / 46.6666px | 400 | LaysExtraBold, h1 role |
| `display-mobile` | 40px / 40px | 400 | mobile h1 role |
| `heading` | 16px | 700 | Lays, h2 role |
| `subheading` | 12.48px | 700 | Lays, h3 role (product names) |
| `body` | 10.6667px | 400 | Lays, body role |
| `button` | 16px / 16px | 400 | LaysExtraBold |

The most-used size by characters is 12.48px (924), then 18.6667px (141), 16px (130), 10.6667px (124), 13.3333px (93) and 46.6666px (41). The fractional px values are the computed values reported by the browser. Weights: 700 (948 characters), 400 (530), 900 (36). No letter-spacing was measured. The capture shows very heavy, rounded display headings in black ("Products", "Recipes") and tight, bold product names in white on photos. The display font is a proprietary face; no substitute is documented by the brand.

## Layout

The page is a stack of full-width bands, each with its own background: photograph, dark `#070f12` band, color-tile carousel, cream recipe band, yellow banner, cream footer. The measured spacing tokens are 2.67px, 4px, 6.67px, 7.5px, 8px, 10px, 13.33px, 16px, 22.67px and 26.67px. The padding table shows 13.3333px (17 uses), 6.66666px (12), 22.6667px (8) and 7.5px (8), with 66.6666px padding on the footer. Gaps measured: 4px and 16px (four each), 10px and 26.6667px (two each). The recipe grid mixes one large card on the left and stacked cards on the right, plus a column that is still fading in at capture time.

## Elevation & Depth

Depth comes from layered photography, the curved hero cut-out and full-color tile backgrounds. One box shadow was measured, on the "Where to Buy" button: `rgba(0, 0, 0, 0.15) 0px 2px 6px 0px inset, rgba(255, 255, 255, 0.6) 0px -2px 6px 0px inset`, a pair of inset shadows that give the pill a pressed, glossy look. One border color was measured, `#ffffff`, on that same button. Cards in the recipe grid show no measured shadow.

## Shapes

Measured radii: 50% (21 elements), 16px (8) and 1.33333px (3). The tokens are `xs: 1.33px`, `sm: 16px` and `pill: 9999px`. Buttons use 16px; round icon buttons and carousel arrows use 50%. The hero ends in a large curved edge shaped like an arc. Recipe and tile corners are visually near-square in the capture, matching the tiny 1.33px radius.

## Components

**Primary button (`button-primary`)**: fill `#0000001a`, white `#ffffff` text, LaysExtraBold 16px/16px, radius 16px, padding `6.66666px 22.6667px`, height 31px, white border, with the two inset shadows above. Label: "Where to Buy". Hover probe: the fill goes from `rgba(0, 0, 0, 0.1)` to a darker black overlay (token `primary-hover` `#00000040`).

**Red pill action**: "Discover More" and "View All Recipes" appear in the capture as red pills with white bold text; their numbers were not separately measured.

**Nav**: white text, 16px / 16px; the header measured 97px high. Items: Products, Recipes, Farmer Stories, Where to Buy.

**Product tile**: a bag packshot on a solid flavor color (green, yellow, teal, orange, red) in a horizontal carousel with round arrow buttons.

**Recipe card**: photograph with white bold title bottom-left and a small round yellow arrow button at bottom-right.

**Footer**: cream `#f0ede1` background, black text, 13.3333px size, padding `66.6666px 0px`, 290px tall.

A cookie banner (`cc-window`) was hidden during measurement and is not brand UI.

## Design System Architecture

No public brand guideline or design system is linked from lays.com: the opened page links only to site sections and social profiles, so no official source exists to cite beyond the site itself (https://www.lays.com/). The de-facto system is a pair of custom fonts, a yellow canvas with a cream secondary surface, flavor-coded tile colors and pill buttons. The only root variables measured are `--swiper-theme-color: #007aff`, `--swiper-navigation-size: 44px` and `--scrollbar-width`, which belong to the Swiper carousel library and the page scrollbar, not to brand tokens. `#007aff` is not a brand color.

## Do's and Don'ts

Do:
- Use `#ffda03` as the main ground and `#f0ede1` for recipe and footer bands.
- Use red `#e61a22` with white text for primary pills.
- Give each flavor its own saturated tile color.
- Set display headings in heavy black LaysExtraBold.
- Keep copy upbeat and ingredient-led.

Don't:
- Do not use `#0000ee` or `#007aff` for links or accents.
- Do not use blue in the interface; flavor tiles are the only extra colors.
- Do not add dense text; the page relies on photography and short labels.
- Do not use shadows beyond the inset pair on the glossy button.

## Responsive Behavior

The 390px mobile pass recorded: h1 40px / 40px (desktop 46.6666px), h2 24px at weight 700 (desktop 16px), body text 16px (desktop 10.6667px), and a nav block measured 115px high with 40px / 40px text. Menu form, grid columns and carousel behavior at that width are not measured.

## Iteration Guide

1. Set `canvas` `#ffda03`, `ink` `#000000`, `primary` `#e61a22`, `on-primary` `#ffffff`.
2. Use LaysExtraBold for display (46.6666px) and buttons (16px), Lays 700 for headings and product names.
3. Use 16px radius for buttons and 50% for round controls.
4. Give each product a tile in one of the measured flavor colors.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=lays --url=https://www.lays.com/ --force --no-motion` before changing any value, then `node web/scripts/verify-designs.mjs --slug=lays`.
