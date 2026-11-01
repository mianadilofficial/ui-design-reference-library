---
version: alpha
name: "Sowieso Wero"
category: "Retail & E-commerce"
description: "Sowieso Wero is the merchant-facing Wero landing page for the iDEAL-to-Wero transition: GT Walsheim Wero at 139.935px/800 on a butter-yellow canvas (#fff48d), near-black ink (#1d1c1c), white pill buttons with hard 0 6px 0 offset shadows, 1px ink outlines, tilted cards and pink-orange-purple gradients."
colors:
  canvas: "#fff48d"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#1d1c1c"
  ink-3: "#ffffff40"
  accent-pink: "#fd74fd"
typography:
  display:
    fontFamily: "\"GT Walsheim Wero\", \"sans-serif\""
    fontSize: 139.935px
    fontWeight: 800
    lineHeight: 118.945px
    letterSpacing: "-3.66608px"
  display-mobile:
    fontFamily: "\"GT Walsheim Wero\", \"sans-serif\""
    fontSize: 56.4077px
    fontWeight: 800
    lineHeight: 47.9465px
    letterSpacing: "-3.66608px"
  heading:
    fontFamily: "\"GT Walsheim Wero\", \"sans-serif\""
    fontSize: 92.7184px
    fontWeight: 800
    lineHeight: 78.8107px
    letterSpacing: "-2.209px"
  subheading:
    fontFamily: "\"GT Walsheim Wero\", \"sans-serif\""
    fontSize: 47.5728px
    fontWeight: 800
    lineHeight: 42.8155px
    letterSpacing: "-1.41px"
    textTransform: uppercase
  body:
    fontFamily: "\"GT Walsheim Wero\", \"sans-serif\""
    fontSize: 18.343px
    fontWeight: 500
    lineHeight: 24.7631px
  button:
    fontFamily: "\"GT Walsheim Wero\", \"sans-serif\""
    fontSize: 18px
    fontWeight: 500
    lineHeight: 23.4px
  link:
    fontFamily: "\"GT Walsheim Wero\", \"sans-serif\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 30px
  2xl: 40px
  pill: 9999px
spacing:
  s1: 2.5px
  s2: 7px
  s3: 10px
  s4: 12px
  s5: 13px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 25px
  s10: 26px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 0px 13px 0px 26px
    height: 66px
    borderColor: "{colors.on-primary}"
    boxShadow: rgb(29, 28, 28) 0px 6px 0px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 7px
    height: 60px
    borderColor: "{colors.on-primary}"
    boxShadow: rgb(29, 28, 28) 0px 8px 0px 0px
  nav:
    textColor: "{colors.on-primary}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  card:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.md}"
    borderColor: "{colors.on-primary}"
    boxShadow: rgb(29, 28, 28) 0px 8px 0px 0px
    transform: matrix(0.99103, 0.13364, -0.13364, 0.99103, 0, 0)
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    padding: 0px 0px 158.576px
---

# Sowieso Wero

## Overview

Sowieso Wero (sowieso.wero-wallet.eu/nl-en/merchant, titled "Sowieso Wero - B2B") is the business-facing campaign page that tells merchants how iDEAL is becoming Wero, the European payment wallet. The page is 13602px tall at 1280px wide. A centered header carries the iDEAL logo, a thin divider and the "wero" wordmark. The hero is a pink-to-orange-to-yellow gradient with a huge three-line headline "iDEAL IS BECOMING WERO" in a heavy rounded geometric sans, two illustrated hands (coral and violet gradients with black outlines) cupping the type, a round green-mint badge "NOW IN PHASE 1" at the upper right and a white pill button "Scroll and discover what this means" with a small circular arrow.

After the hero the page turns to a flat butter-yellow ground. A floating navigation capsule offers "What is it? / When? / FAQ / Your PSP Partners" under the line "But what is it actually?", with a FAQ pill at the left and an NL / EN language switch at the right. A tilted white FAQ card ("iDEAL IS GETTING BETTER: PREPARE FOR WERO") floats in the page. Further down an eyebrow "Ambition without borders. Sowieso." leads into the h2 "iDEAL IS BECOMING WERO: THE NEW EUROPEAN PAYMENT SYSTEM" with body copy ("We're going international, baby! With a new platform and the backing of all the banks, we're ready for the future as a payment system…") beside an isometric 3D puzzle graphic in mint, cyan, orange and pink gradients. Process cards follow ("PHASE 1: CO-BRANDING AND TECHNICAL TRA…", "PHASE 2: THE ROLLOUT OF WERO"), then a yellow footer with "ALWAYS AVAILABLE WITH OUR PSP PARTNERS".

The voice is cheerful, casual and direct for a financial product: exclamations, second-person, short sentences. The look is playful neo-brutalist: thick black outlines, hard bottom shadows, tilted elements and gradient illustrations on a flat yellow ground.

## Colors

- **Canvas `#fff48d`**: butter yellow, the ground of the page below the hero and the footer fill (1486 weight); **`#ffffff`** (4204 weight) is the white of cards, pills and the FAQ panel.
- **Ink `#000000`**: the most-read text color (5585 characters); **on-primary `#1d1c1c`** is the soft black used for headlines, button text, outlines and shadows (1760 characters, 54 border uses). The two are close but measured separately.
- **Primary `#ffffff`**: the measured primary button fill is white, outlined in `#1d1c1c`, with `#1d1c1c` text. The brand's energy sits in the yellow ground, not in a colored button.
- **Ink-3 `#ffffff40`**: translucent white text (10 characters).
- **Accent pink `#fd74fd`**: a measured saturated pink area (31 weight) used in illustration and gradient areas.
- A black area (`#000000`, 548 weight) is also measured as a background area (the element was not identified).

The generated tokens also held `#0000ee`, the browser's default unvisited-link color on unstyled anchors; it is not a Wero color and is dropped. The stylesheet declares Swiper's `--swiper-theme-color: #007aff`, a carousel-library default and not a brand value.

## Typography

One proprietary family, **GT Walsheim Wero**, carries every measured character (7363) in weights 400 (4850 characters), 500 (2250), 700 (19) and 800 (244).

| Role | Size / line-height | Weight | Tracking |
|---|---|---|---|
| display (hero h1) | 139.935px / 118.945px | 800 | -3.66608px |
| heading (h2) | 92.7184px / 78.8107px | 800 | -2.209px |
| subheading (uppercase) | 47.5728px / 42.8155px | 800 | -1.41px |
| body | 18.343px / 24.7631px | 500 | normal |
| button | 18px / 23.4px | 500 | normal |
| link | 16px / 18.4px | 400 | normal |
| display-mobile | 56.4077px / 47.9465px | 800 | -3.66608px |

The size ladder by characters is 16px (5703), 13.3325px (684), 18.343px (649), 18px (83), 25.3325px (73), 47.1585px (53), 47px (52) and 38.6662px (29). Display lines are set with line-height below the font size (118.945px on 139.935px) so lines nest tightly. Large sizes carry strong negative tracking; small sizes carry none. The sizes are decimals because they scale fluidly with the viewport, which the stylesheet's `--max-width: 1920` and `--max-columns: 16` variables suggest as the layout frame (the exact scaling rule was not recorded).

## Layout

The stylesheet declares a 16-column maximum grid (`--max-columns: 16`) and a 1920px maximum width. The 1280px page centers content in a narrow reading column for copy (body text blocks about 344px to 900px wide in the measurements) and uses large open areas of yellow between sections. The header is 89px tall. Gaps: 13px (12), 10px, 20px, 30px, 15px, 60px; paddings: 30px (43 uses), 26px, 7px, 25px, 58.576px, 106.149px. The footer is 1144px tall with 158.576px bottom padding. Elements frequently overlap and tilt (the FAQ card and puzzle illustration), so the layout is composed rather than strictly column-aligned.

## Elevation & Depth

Depth is made of hard, unblurred offset shadows in the ink color rather than soft blurs: `rgb(29, 28, 28) 0px 3px 0px 0px` on 22 elements, `0px 6px 0px 0px` on 6, `0px 8px 0px 0px` on 5 and `0px 4px 0px 0px` on 2. One soft shadow `rgba(0, 0, 0, 0.15) 0px 4px 16px 0px` is measured once. Every outlined control uses a 1px `#1d1c1c` border (54 border uses) plus one of the hard shadows, which makes pills read as raised keys.

## Shapes

Radii measured: 50% (30 elements: round icon buttons and badges), 5px (8), 6px (8), 40px (7: large pills), 30px (3), 3px (2) and 4px (1). The generated scale is xs 3px, sm 4px, md 5px, lg 6px, xl 30px, 2xl 40px and pill 9999px. Cards are 5px, small chips 6px, the main CTA 40px and icon buttons circles. The cards are rotated: the measured card transform is matrix(0.99103, 0.13364, -0.13364, 0.99103, 0, 0).

## Components

- **button-primary**: white fill, `#1d1c1c` text, GT Walsheim Wero 18px/500, 40px radius, padding 0px 13px 0px 26px, 66px tall, 1px `#1d1c1c` border and a `0px 6px 0px 0px` hard shadow ("Scroll and discover what this means", 384px wide, with a round arrow chip at the right).
- **button-secondary (icon)**: 60px circle, 1px `#1d1c1c` border, 7px padding, hard shadow `0px 8px 0px 0px`; play and mute controls use a `#fff48d` fill.
- **card**: 5px radius, 1px `#1d1c1c` border, shadow `0px 8px 0px 0px`, bold 20px heading with a numeral ("1 PHASE 1: …"), tilted.
- **nav capsule**: white pill with a 1px ink outline and hard shadow, containing the section links; the active language chip (EN) is filled yellow.
- **footer**: yellow `#fff48d` fill with 47px/800 uppercase headings.
- **badge**: round mint-gradient circle with "NOW IN PHASE 1".

## Design System Architecture

No public design system or brand guideline page was found in the home page links; the brand Wero is a larger European payment initiative, but this page's own CSS declares only three custom properties (`--swiper-theme-color`, `--swiper-navigation-size: 44px`, `--max-columns`, `--max-width`). The de-facto system is therefore compiled values: one custom typeface ("GT Walsheim Wero"), yellow and soft-black, hard-shadow outlines and gradient illustration. Reference: https://sowieso.wero-wallet.eu/nl-en/merchant

## Do's and Don'ts

- Do set headlines in GT Walsheim Wero 800 with strong negative tracking and tight line-height.
- Do outline controls with 1px `#1d1c1c` and add a hard offset shadow of 3px to 8px in the same color.
- Do keep the ground flat `#fff48d` and let gradients live in illustration only.
- Do speak casually and directly to merchants.
- Don't use soft blur shadows for controls; one soft shadow exists on the whole page.
- Don't use `#0000ee` or Swiper's `#007aff` for links or accents.

## Responsive Behavior

The 390px mobile pass measured: the display headline falls to 56.4077px/47.9465px (305px wide, three lines, 144px tall) while keeping -3.66608px tracking; body text becomes 16.0388px/21.6524px (328px wide); the primary button keeps its structure. The mobile size ladder is 16px (5685), 16.6401px (684), 16.0388px (649), 14px (87), 34.71px (73), 29.3009px (53), 47px (40), 39px (29), 56.4077px (20) and 42.9px (15). Navigation and illustration behavior on mobile were not measured.

## Iteration Guide

1. Begin with the `#fff48d` ground, `#1d1c1c` type and white components.
2. Style every control as an outlined shape with a hard `0 Npx 0 0` shadow.
3. Use 800 weight for display type with tracking near -2.6% of the size and nested line-height.
4. Add playful tilt to cards; use gradient illustration for emphasis.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=sowieso-wero --url=https://sowieso.wero-wallet.eu/nl-en/merchant --force --no-motion` after site changes.
