---
version: alpha
name: Shopify Supply (Performance Pack)
category: "Retail & E-commerce"
description: "Shopify Supply, Performance Pack (shopify.supply): the Shopify merch store as a dark black #000000 storefront with bone-white #eeece2 text, an italic Condor 40px/40px uppercase headline, Fraktion monospace labels, Inter-Variable body at 16px/24px, a #6fc992 green accent and fully round (pill) controls."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#6fc992"
  surface-off-black: "#1d1e1e"
  ink-bone: "#eeece2"
  ink-off-white: "#f4f4f4"
typography:
  display:
    fontFamily: Condor, ui-sans-serif, system-ui, sans-serif
    fontSize: 40px
    fontWeight: 450
    lineHeight: 40px
    letterSpacing: 1px
    textTransform: uppercase
  display-mobile:
    fontFamily: Condor, ui-sans-serif, system-ui, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.6px
    textTransform: uppercase
  body:
    fontFamily: Inter-Variable, ui-sans-serif, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Inter-Variable, ui-sans-serif, system-ui, sans-serif
    fontSize: 18px
    fontWeight: 450
    lineHeight: 24px
  link:
    fontFamily: Fraktion, "Courier New", system-ui, monospace
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
components:
  link:
    textColor: "{colors.ink-bone}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-bone}"
  nav-link:
    textColor: "{colors.ink-bone}"
    typography: "{typography.nav}"
---

## Overview

Shopify Supply (https://shopify.supply/performance-pack, which resolves to https://shopify.supply/collections/performance-pack; page title "Performance Pack") is Shopify's own merchandise store. Its footer describes Supply as a store "designed for the commerce community" built on Hydrogen and Oxygen, Shopify's headless commerce framework and hosting. The page is an apparel collection called Performance Pack, with a scrolling announcement ticker ("Enjoy FREE shipping with every single order."), a black header with Shop, About, the "shopify supply" logo, Search, Account and Cart, and a hero in which two huge italic words, "PERFORMANCE PACK", overlap a tilted stack of photographs of people in the apparel. Small monospace captions frame the hero ("SHOPIFY SUPPLY", "APPAREL COLLECTION", "HIGH-PERFORMANCE MERCH BUILT FOR BUILDERS", "EXPLORE THE LATEST DROP IN OUR 3D SHOP POWERED BY SHOPIFY", "SCROLL >>>"). A small round badge at bottom left reads "SHOP IN 2D".

The measured page is 1,280px wide; the hero view is 823px tall. The background is black with a faint grid and noise texture and diagonal lighter bands. Products listed below the hero (The MVP Crew, $45; Sprint Quarter Zip, $50; Shopify Moves Hat; Velocity Long Sleeve Tee; Power Moves Duffel; Front Runner Tee; Power On Tee; Commerce Champion Tee; Launch Pads) appear in alternating feature blocks with detail lines such as "Premium french terry cotton, 3D embroidery" and a Quick View option. Copy voice is short, energetic and sporty ("drop", "power", "sprint", "front runner") addressed to "builders".

## Colors

- **Canvas / black #000000.** The header and hero background (1,053 area weight) and the colour of the most distinctive background; the `canvas` token is #ffffff (the root body background), while the largest rendered area is black.
- **Off-black #1d1e1e.** `--color-off-black`, a secondary panel colour (328 area weight).
- **Bone white #eeece2.** `--color-dark-theme-white`, text on dark: nav links, hero headline and product links (579 characters).
- **White #ffffff.** Body copy on dark (686 characters) and 1px borders (15 uses).
- **Off-white #f4f4f4.** `--color-off-white` (94 characters).
- **Aloe green #6fc992.** The measured accent: 220 area weight as a background and 30 characters of text. It is the only chromatic colour in the rendered hero and is used for the "SHOP IN 2D" badge ring and glow. Named `primary` by the generator.
- **Published brand palette, unmeasured on rendered elements.** `--color-aloe #4bfe85`, `--color-aloe-light #c1fbd4`, `--color-lime #d0f224`, `--color-lime-light #eefab3`, `--color-sapphire #405edd`, `--color-sapphire-light #92a7ff`, `--color-royal #6482ff`, `--color-orchid #da9dff`, `--color-orchid-light #ecceff`, `--color-cream #fffbf2`, `--color-dark-gray #3d3f40`, `--color-middle-gray #999`, `--color-light-gray #ccc`, `--color-state-error #ef523d`. These are declared in the page's stylesheet, not shown in the measured screen.
- **Borders.** #ffffff (15 uses) and #999999 (2).
- **Glow.** A 30px green glow `rgba(193, 251, 212, 0.8) 0px 0px 30px 2px` (9 uses), which equals the aloe-light value at 80% opacity.

## Typography

The family set is large; three are rendered: **Condor** (headline, italic, 357 characters), **Fraktion** (monospace captions, `Fraktion, "Courier New", system-ui, monospace`, 582 characters) and **Inter-Variable** (UI and body, 593 characters). The stylesheet also declares GT-Standard-Regular, Grtsk-Bold-Tera, Grtsk-SemiBold-Giga, Mondwest, Pixter-Architect, Action-Condensed and Silverspoon-Light, which are not in the measured text. Condor, Fraktion and the others are commercial or foundry faces; Inter is open source.

- **Display:** Condor, 40px / 40px, weight 450, letter spacing 1px, uppercase (the tagline "PREMIUM FRENCH TERRY COTTON"); the giant hero words are 153.6px with -3.84px tracking and a second size of 115.2px. Mobile display: 24px / 24px, weight 400, 0.6px tracking.
- **Body:** Inter-Variable 16px / 24px, weight 400.
- **Nav:** Inter-Variable 18px / 24px, weight 450.
- **Link and product labels:** Fraktion 16px / 24px, weight 400.
- **Published type scale:** `--text-dsp: 6.25rem` (letter spacing -.045em, weight 800), `--text-h1: 2.5rem`, `--text-h2: 2.25rem`, `--text-h3: 2rem`, `--text-h4: 1.625rem`, `--text-h5: 1.375rem`, `--text-h6: 1.125rem`, `--text-button: 1.125rem` (weight 420, line height 1.375rem), `--text-body-sm: .875rem`, `--text-ticker: 2rem` (weight 800).

Sizes by character count: 16px (644), 12px (232), 40px (214), 14px (210), 26px (128, 0.65px tracking), 18px (89), 115.2px (11), 153.6px (4). Weights 400 (1,292) and 450 (240).

## Layout

A sticky announcement ticker runs along the top, then a 70px-tall black header with three zones: Shop and About at the left, the logo centered, Search, Account and Cart at the right. The hero sits on a grid-lines texture with captions in the three corners and the overlapping headline in the centre. Measured gaps: 32px (16 uses), 24px (12), 40px (4), 8px (4), 10% and 15%. Paddings: 12px (18), 16px (13), 4px (7), 24px (6), 32px, 40px. The spacing tokens are 4, 8, 12, 16, 24, 32 and 40px.

## Elevation & Depth

The only measured shadow is the aloe glow: `rgba(193, 251, 212, 0.8) 0px 0px 30px 2px` (nine elements). Depth otherwise comes from layering: the tilted photo stack overlaps the headline, diagonal bands, grid lines and film-grain texture over black. The stylesheet also has an inset shadow `inset -5px -5px 250px #ffffff05` (2 uses).

## Shapes

Every measured radius (23 elements) is `3.35544e+07px`, the computed value for fully rounded (pill) shapes; the token is `pill: 9999px`. The published scale is `--radius-sm: .25rem`, `--radius-md: .375rem`, `--radius-lg: .5rem`, `--radius-xl: .75rem` but those radii were not measured on rendered elements. Photographs in the hero are tilted rectangles with a white 1px border.

## Components

- **Nav link.** Inter-Variable 18px/24px, weight 450, #eeece2 on black, 51px wide for "About".
- **Header.** 70px tall, black background, #eeece2 text.
- **Product link.** Fraktion 16px/24px in #eeece2, such as "The MVP Crew USD$45.00" (213px by 76px).
- **Round badge.** "SHOP IN 2D", fully rounded, with the aloe ring and glow.
- **Ticker.** Repeating announcement with a flame emoji.

No filled button was detected (`ctaCandidates` is empty).

## Design System Architecture

No separate public design-system documentation was found on the page opened (https://shopify.supply/collections/performance-pack), and no search was run. The storefront is built with Tailwind-style utilities (`--tw-*` variables) and publishes a clear token layer in its root: named colours (`--color-aloe`, `--color-lime`, `--color-sapphire`, `--color-orchid`, `--color-royal`, `--color-cream`, `--color-off-black`, `--color-off-white`, `--color-dark-theme-white`, `--color-state-error`), a semantic type scale (`--text-dsp` to `--text-h6`, `--text-button`, `--text-body-*`, `--text-ticker`), per-style weights and tracking, and font-family variables for each face. The page footer links to Hydrogen (hydrogen.shopify.dev) and Oxygen (shopify.dev), which are the framework and hosting that build the store; those links were seen on the page but not followed.

## Do's and Don'ts

- Do use black backgrounds, #eeece2 text and one green accent for the glow and badges.
- Do set the headline in Condor uppercase italic at hero scale with tight negative tracking.
- Do use Fraktion monospace uppercase for captions and product labels.
- Do use fully rounded (pill) shapes for small controls.
- Don't use the unmeasured palette colours (lime, sapphire, orchid) as if they were shown on this page.
- Don't introduce a drop shadow; the glow is the one shadow.
- Don't use the Swiper theme colour `black` or Tailwind ring `#fff` as brand colours.

## Responsive Behavior

The mobile pass measured: the display line "PERFORMANCE PACK" at 24px / 24px, weight 400, 0.6px tracking (desktop 40px / 40px weight 450, 1px), body text at 16px / 24px unchanged, no primary CTA, and the sizes by characters 16px (575), 12px (267), 14px (176), 24px (128), 18px (63), 42.9px (11), 54.6px (4). Menu layout and breakpoints were not measured.

## Iteration Guide

1. Black canvas with grain and grid, bone-white #eeece2 text.
2. Condor uppercase italic hero words, Fraktion mono captions, Inter-Variable for UI.
3. One accent: aloe green glow on round badges.
4. Overlap tilted photographs with the headline.
5. Run `node web/scripts/verify-designs.mjs --slug=shopify-supply-performance-pack` after edits.
