---
version: alpha
name: Volvo Cars
category: "Automotive"
description: "Volvo Car USA's home page: white #ffffff and #fafafa surfaces, black #000000 headings and #5e5e5e secondary text, black and white 9999px pill buttons 48px tall, sand #f7f3f0 model bands, a single blue accent #0b2ded, and one typeface, Volvo Centum, from 12px/0.24px disclaimers to a 320px 'For Life.' footer statement."
colors:
  canvas: "#ffffff"
  background-secondary: "#fafafa"
  ink: "#000000"
  ink-secondary: "#5e5e5e"
  ink-muted: "#969696"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-sand: "#f7f3f0"
  surface-sand-strong: "#e7e3e0"
  surface-gray: "#e3e3e3"
  divider: "#efefef"
  ornament: "#0000001f"
  hover-fill: "#d6d6d6"
  accent-blue: "#0b2ded"
  safety-orange: "#fc6408"
  feedback-red: "#cd2314"
  feedback-green: "#04771d"
typography:
  display:
    fontFamily: "\"Volvo Centum\", \"Helvetica Neue\", Helvetica, \"Noto Sans\", \"Segoe UI\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56px
  display-mobile:
    fontFamily: "\"Volvo Centum\", \"Helvetica Neue\", Helvetica, \"Noto Sans\", \"Segoe UI\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  statement:
    fontFamily: "\"Volvo Centum\", \"Helvetica Neue\", Helvetica, \"Noto Sans\", \"Segoe UI\", Arial, sans-serif"
    fontSize: 320px
    fontWeight: 400
  section-title:
    fontFamily: "\"Volvo Centum\", \"Helvetica Neue\", Helvetica, \"Noto Sans\", \"Segoe UI\", Arial, sans-serif"
    fontSize: 28px
    fontWeight: 400
  heading:
    fontFamily: "\"Volvo Centum\", \"Helvetica Neue\", Helvetica, \"Noto Sans\", \"Segoe UI\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 30px
  body-large:
    fontFamily: "\"Volvo Centum\", \"Helvetica Neue\", Helvetica, \"Noto Sans\", \"Segoe UI\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: "\"Volvo Centum\", \"Helvetica Neue\", Helvetica, \"Noto Sans\", \"Segoe UI\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20.004px
    letterSpacing: 0.24px
  button:
    fontFamily: "\"Volvo Centum\", \"Helvetica Neue\", Helvetica, \"Noto Sans\", \"Segoe UI\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
  sm: 4px
  md: 8px
  lg: 16px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 28px
  s7: 32px
  s8: 42px
  s9: 48px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 48px
  button-inverted:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 48px
  button-inverted-hover:
    backgroundColor: "{colors.hover-fill}"
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
  shortcut-tile:
    backgroundColor: "{colors.background-secondary}"
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    height: 118px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
---

## Overview

The measured page is Volvo Car USA's home page (finalUrl `https://www.volvocars.com/us/`, title "Volvo Car USA | Luxury SUVs, Plug-In Hybrids & Electric Cars"). It is the most restrained page in this group: a white 72px header with the spaced VOLVO wordmark at left, four centred links (Models, Shopping, Owners, Electric), and "Find a retailer", an account icon and search at right.

The hero is a full-bleed photograph (in the capture, three Volvo SUVs parked in front of a modern timber house at dusk) with a small eyebrow ("Holiday Sales Event"), a 48px headline "Now with Volvo Friends and Family Pricing*" in white, and two pill buttons: a white filled "View special offers" and a transparent outlined "Inventory". Under the hero, four shortcut tiles (Build & price, New inventory, Special offers, Help me choose) each give a 20px semibold title, a 12px line of grey copy and a chevron.

The rest of the page alternates large photography with quiet text. Two model teasers (the 2026 XC90 and the all-new EX60) have one-line captions and underlined "Explore" links. A sand-coloured model carousel shows "XC90 / Gas (mild hybrid) | SUV / Starting at $62,445 MSRP" with a black "Explore" pill, a side-profile car image, a progress bar and "Compare models". A value statement ("Freedom to move in a personal, sustainable, and safe way.") introduces three photo cards (Living electric, Safety, Sustainability). Split image-and-text blocks cover Certified by Volvo and a Costco member offer, followed by several dense paragraphs of financing disclaimers. The black footer opens with "Stay in the loop. Get updated on all things Volvo." and a white "Keep me updated" pill, lists link columns, and ends with the giant white statement "For Life."

The tone is Scandinavian calm: no gradients, no shadows, no decoration, one typeface, black/white/grey with warm sand neutrals.

## Colors

The page ships Volvo's tokens as `--v-color-*` custom properties.

- **canvas `#ffffff`** (`--v-color-background-primary`): the main page background.
- **background-secondary `#fafafa`** (`--v-color-background-secondary`): the shortcut tiles and other secondary surfaces; the second-largest background area.
- **ink `#000000`** (`--v-color-foreground-primary`): headings, tile titles and button text on white.
- **ink-secondary `#5e5e5e`** (`--v-color-foreground-secondary`): the most-read text color, because the long disclaimers and tile descriptions use it.
- **ink-muted `#969696`**: lighter grey text measured on 560 characters (the token set's tertiary is `#787878`).
- **primary `#000000`** (`--v-color-surface-neutral`): the filled "Explore" pill on light backgrounds and the footer surface. **on-primary `#ffffff`** is its text.
- **surface-sand `#f7f3f0`** and **surface-sand-strong `#e7e3e0`**: the warm neutrals behind the model carousel.
- **surface-gray `#e3e3e3`** (`--v-color-surface-gray`) and **divider `#efefef`**: greys for rules and placeholders.
- **ornament `#0000001f`** (`--v-color-ornament-primary`): the 12% black hairline used as the tile border.
- **hover-fill `#d6d6d6`**: the measured hover fill of the white "View special offers" pill.
- **accent-blue `#0b2ded`** (`--v-color-foreground-accent-blue`): the only chromatic accent, used sparingly (eight units of measured area).
- **safety-orange `#fc6408`** (`--v-color-surface-accent-safety`), **feedback-red `#cd2314`** and **feedback-green `#04771d`**: system accents from the token set, not visible on the home page.

## Typography

There is one family: **Volvo Centum**, the brand's own typeface, loaded as a variable font at weights 380 and 570 (computed as 400 and 600). It sets all 6387 measured characters, with "Helvetica Neue", Helvetica, Noto Sans, Segoe UI and Arial as the declared fallbacks.

- **display**: 48px/56px, weight 400, for the hero headline (`--v-font-heading-1-size` clamps between 2rem and 3.5rem).
- **section-title**: 28px, weight 400, for statements and model names ("Freedom to move…", "XC90").
- **heading**: 20px/30px, weight 600, for shortcut-tile titles (`--v-font-emphasis-weight: 600`).
- **body-large** and **button**: 16px/24px, weight 400.
- **body**: 12px/20.004px with 0.24px letter-spacing, the most frequent size (4057 characters), used for descriptions and disclaimers (`--v-font-12-size: .75rem`, line height 1.667).
- **statement**: 320px, weight 400, the "For Life." footer signature.

A 56px size also appears (49 characters). Hierarchy uses size, not weight: only two weights exist and 600 is reserved for small titles. The `--v-font-statement-*` tokens define fluid display sizes from 2.25rem up to 16rem with a line height of `calc(1em + .5rem)`.

## Layout

At 1280px the measured page is 6147px tall. Bands: a 72px white header; a 542px media hero with text starting at x=80; an 823px white band (shortcut tiles and model teasers) with content from x=20 to x=1221 in two columns; a 722px media model band; a 2428px white band in up to three columns; and a 1560px dark footer band. The token set expresses the page gutter as `--v-space-pageoffset`, clamped between 1rem and 4rem, and a 12-column grid (`--v-size-grid-column`), with a maximum text measure of 70ch (`--v-size-contentmax`).

Spacing is generous and mostly multiples of 4: the most frequent gaps are 8px, 16px, 4px and 24px, and the most frequent padding is 24px (19 uses), with 64px for large sections. The fluid space tokens (`--v-space-xs` 0.5–1.25rem, `--v-space-md` 1.5–3rem, `--v-space-lg` 2–3.5rem, `--v-space-l` 3–4.5rem, `--v-space-2xl` 4–8rem) scale with the viewport.

## Elevation & Depth

The page is flat. The only measured shadow is `rgb(255, 255, 255) 0px 0px 0px 1px inset`, a 1px white inner ring; in the capture the only outlined control is the "Inventory" pill on the hero. The token set defines a single `--v-effect-shadow-default` built from four very faint layers (1–5% black), not used on the home page. Depth comes entirely from photography and from switching between white, `#fafafa`, sand and black surfaces. A scrim token (`--v-color-ornament-scrim: #171717a3`) exists for overlays.

## Shapes

Two shapes dominate: square and pill. `--v-shape-default` is 0px and `--v-shape-emphasis` is 9999px, and on the home page the only measured radius is 9999px (nine uses, all buttons). Tiles, photos, cards and bands are square-cornered. The radius scale also defines `--v-radius-sm` 4px, `--v-radius-md` 8px and `--v-radius-lg` 16px for components not on this page. Carousel arrows are drawn as circles in the capture.

## Components

- **Primary pill** ("Explore"): black `#000000` fill, white Volvo Centum 16px/24px label, 9999px radius, `0px 24px` padding, 48px tall.
- **Inverted pill** ("View special offers", "Keep me updated"): white fill, black label, same size and radius. Hover changes the fill to `#d6d6d6`; keyboard focus draws a 2px solid white outline offset by 2px.
- **Outlined pill** ("Inventory" on the hero): transparent with a thin white outline in the capture.
- **Shortcut tile**: `#fafafa` square tile 118px tall with a 12% black border, a 20px/600 title, 12px grey copy and a chevron; hover darkens the background slightly.
- **Text link**: black 12–16px text with an underline ("Explore XC90", "Compare models").
- **Model carousel**: sand background, 28px model name and powertrain, price line, black pill, progress bar and circular arrows.
- **Footer**: black, large white two-line headline, link columns, legal row, and the 320px "For Life." statement.

## Design System Architecture

Volvo Cars publishes no design-system documentation that could be opened for this page: the GitHub organisation (https://github.com/volvo-cars) lists no public design-system or token repository among the repositories shown, and the npm package page for `@volvo-cars/css` returned HTTP 403. The shipped CSS shows the system directly through 152 `--v-*` custom properties: semantic colours by role (`--v-color-background-*`, `--v-color-foreground-*`, `--v-color-surface-*`, `--v-color-ornament-*`, and interaction states `--v-color-state-*` at subtle 4%, medium 12% and strong 20% alpha), fluid type tokens (`--v-font-heading-1-size`, `--v-font-statement-1-size` using `round(down, clamp(...), 2px)`), fluid spacing, shape tokens (`--v-shape-default`, `--v-shape-emphasis`), radii, border widths, an easing curve (`--v-transition-easing-regular: cubic-bezier(.45, 0, .4, 1)`) and grid sizing. Rebuild with semantic role tokens and fluid clamps rather than fixed breakpoints.

## Do's and Don'ts

**Do**
- Use Volvo Centum only, at 400 for almost everything and 600 for small titles.
- Use black and white pills (9999px, 48px tall) as the only button shape; keep everything else square.
- Let photography carry the page, with short captions and generous white space.
- Use `#5e5e5e` for descriptions and 12px/0.24px for small print.
- Reserve `#0b2ded` blue for rare accents.

**Don't**
- Don't add shadows, gradients or rounded cards.
- Don't use bold display headlines; the hero is weight 400.
- Don't introduce extra brand colours; the palette is black, white, greys and sand.

## Responsive Behavior

The extractor's mobile pass recorded: the hero h1 drops from 48px/56px to 32px/40px; the tile title h2 drops from 20px/30px to 16px/24px (weight 600); 12px body and 16px buttons are unchanged; the footer statement measures 101.4px instead of 320px; the "Keep me updated" white pill remains the primary CTA. Header links visible: 0, menu toggle visible: false, on both desktop and mobile passes. Mobile bands are a 71px header, a 470px hero, then long white and media bands with content between x=17 and x=358. The extraction counted up to six card columns in both passes.

The stylesheet's breakpoints are mostly `min-width 480px` (94 rules), `min-width 1024px` (90), `max-width 479.84px` (60) and `max-width 1023.84px` (46), with a few at 1600px. Type and space scale fluidly via the clamp tokens listed above.

## Iteration Guide

1. Start with white `#ffffff` and `#fafafa`, black ink and `#5e5e5e` secondary text.
2. Set all type in Volvo Centum; use the fluid heading and statement tokens for large sizes.
3. Use only 48px pills for actions: black on light surfaces, white on photos and on the black footer.
4. Keep tiles, cards and photos square; use a 12% black hairline where a border is needed.
5. Add warm sand surfaces for product carousels.
6. Measure model pages before adding tokens for configurators, specs tables or forms.
