---
version: alpha
name: Adobe
category: "Product & SaaS"
description: "Adobe.com marketing home: white #ffffff canvas with full-bleed dark product photography, pure black #000000 ink, Adobe Clean body type and Adobe Clean Display Black 900 headlines at 80px/76px with -3.2px tracking, #f3f3f3 rounded 16px cards, 999px pill buttons, and Adobe red #eb1000 reserved for the logo mark."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-card: "#f3f3f3"
  surface-inverse: "#000000"
  ink-muted: "#000000a3"
  brand-red: "#eb1000"
  hover-wash: "#e9e9e9"
  focus-ring: "#507bff"
typography:
  display:
    fontFamily: "\"Adobe Clean Display Black\", \"Adobe Clean Display\", adobe-clean-display, \"Arial Bold Adjusted\", sans-serif"
    fontSize: 80px
    fontWeight: 900
    lineHeight: 76px
    letterSpacing: "-3.2px"
  display-mobile:
    fontFamily: "\"Adobe Clean Display Black\", \"Adobe Clean Display\", adobe-clean-display, \"Arial Bold Adjusted\", sans-serif"
    fontSize: 40px
    fontWeight: 900
    lineHeight: 40px
  heading:
    fontFamily: "\"Adobe Clean Display Black\", \"Adobe Clean Display\", adobe-clean-display, \"Arial Bold Adjusted\", sans-serif"
    fontSize: 56px
    fontWeight: 900
    letterSpacing: "-1.68px"
  heading-sm:
    fontFamily: "\"Adobe Clean Display Black\", \"Adobe Clean Display\", adobe-clean-display, \"Arial Bold Adjusted\", sans-serif"
    fontSize: 24px
    fontWeight: 900
    letterSpacing: "-0.96px"
  subheading:
    fontFamily: "\"Adobe Clean\", adobe-clean, \"Trebuchet MS\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
  body:
    fontFamily: "\"Adobe Clean\", adobe-clean, \"Trebuchet MS\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"Adobe Clean\", adobe-clean, \"Trebuchet MS\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 5.01px
  md: 8px
  lg: 16px
  xl: 32px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 24px
components:
  button-pill-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 6px 16px 8px
    height: 40px
    borderColor: "{colors.canvas}"
  link-tile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 12px 12px 16px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.surface-inverse}"
    textColor: "{colors.canvas}"
    padding: 128px 0px 0px
---

# Adobe

## Overview

This file documents the adobe.com home page (measured at `https://www.adobe.com/`, page title "Adobe: Creative, marketing and document management solutions"). The page is a long, image-led marketing surface: a full-bleed hero carousel of dark, cinematic product photography ("Create at the highest level.", "All the best models, all in one place.", "Get work done. Faster.", "Orchestrate customer experiences with AI.") with white type set over it, followed by a white band of rounded grey product cards ("Everything you need to make anything."), an "Explore what's new." feature grid, a testimonial carousel, and finally a black product directory ("Tools that work for you.") that runs straight into a black footer.

The brand voice of the system is monochrome. Black and white do almost all of the work; colour arrives through photography and through the small product app icons (Photoshop, Acrobat, Premiere, Firefly, Illustrator). The Adobe red `#eb1000` is measured as a background on only 4 units of area — it is the logo tile and the small red product-icon chips, not a CTA colour. Headlines are very heavy (Adobe Clean Display Black, weight 900) and tightly tracked; body copy is Adobe Clean at 20px/24px. Microcopy is short and imperative: "Free trial", "See all plans", "Learn more", "See all products", "Sign in".

## Colors

Measured text colours by character count are `#ffffff` (3302 — white type over the hero and the black lower half), `#000000` (1235) and `#000000a3` (288, black at 64% for secondary lines). Backgrounds by area are `#ffffff` (4029), `#000000` (3504), `#ffffff14` (756, a translucent white wash on dark tiles), `#f3f3f3` (726) and `#00000070` (80, a dark translucent glass behind the hero quick-links).

- **canvas `#ffffff`** — the body background and the white middle band.
- **ink `#000000`** — all text on light surfaces; also `--s2a-color-content-default: #000` in the site's root variables.
- **primary `#000000` / on-primary `#ffffff`** — the generator found no saturated action colour; the site's own variables pair `--s2a-color-button-content-primary-solid-default: #fff` with black outlined content (`--s2a-color-button-content-primary-outlined-default: #000`), so the action language is black/white.
- **surface-card `#f3f3f3`** — the product cards in "Everything you need to make anything."
- **surface-inverse `#000000`** — the "Tools that work for you" band and the footer.
- **ink-muted `#000000a3`** — secondary lines; the root variable `--s2a-color-transparent-black-64` holds the same value.
- **brand-red `#eb1000`** — `--s2a-color-brand-adobe-red`, `--s2a-color-content-brand` and `--s2a-color-background-brand` all resolve to it. Use it for the logo mark only.
- **hover-wash `#e9e9e9`** — the background the "Sign in" button takes on keyboard focus.
- **focus-ring `#507bff`** — the measured 2px solid focus outline on "Sign in".

## Typography

Two families are loaded: `adobe-clean` (400, 400 italic, 700, 700 italic) and `adobe-clean-display` (900), plus an "Arial Bold Adjusted" 900 metric fallback. Adobe Clean carries 4071 measured characters; Adobe Clean Display Black carries 754. Adobe Clean is Adobe's proprietary typeface; the shipped fallbacks are "Trebuchet MS" for body and "Arial Bold Adjusted" for display, and those are the substitutes to use when Adobe Clean is unavailable.

- **display** — 80px / 76px, weight 900, letter-spacing -3.2px. Hero headlines and the large "76%" statistic.
- **heading** — 56px, weight 900, -1.68px. Section heads such as "Everything you need to make anything." The 900 weight is measured: 900 accounts for exactly the characters set at 80px, 56px and 24px.
- **heading-sm** — 24px, weight 900, -0.96px. Card and feature titles.
- **subheading** — 16px / 20px, weight 700. Card titles like "Generate stunning content easily."
- **body** — 20px / 24px, weight 400. Hero supporting copy.
- **nav** — 14px / 20px, weight 700. Navigation, pill buttons, link tiles.

The size distribution is 16px (2245 chars), 20px (1234), 14px (473), 56px (328), 24px (253), 80px (173), 12px (119). Weights: 400, 700, 900 only.

## Layout

The desktop capture is 1280px wide and 6908px tall. The extractor read the whole page as one media-filled band with content running from x=107 to x=1256 and up to 5 card columns. The site's variables declare `--grid-margin-width: 8.333%`, `--grid-gutter: 8px` and `--grid-max-width: 1920px`; 8.333% of 1280 is the measured ~107px left edge. Section spacing variables run from `--s2a-section-spacing-5xs: 8px` to `--s2a-section-spacing-5xl: 240px`, and the footer is padded 128px on top (`--s2a-section-spacing-4xl: 128px`).

Gaps are dominated by 8px (101 occurrences) and 15px (39), then 16px, 12px, 32px and 24px. The most common padding is 24px. The hero quick-link row is five equal tiles; the product card row is a horizontal scroller of tall (583px) cards; the black product directory is a 3-column grid of dark tiles.

## Elevation & Depth

There is almost no shadow. The only measured box-shadow is `rgba(255, 255, 255, 0.11) 0px 0px 0px 1px inset` — a hairline inner stroke on the translucent hero quick-link tiles. Depth comes from layering instead: `#00000070` glass over photography, `#ffffff14` washes on the black band, and the light-to-dark section switch. Cards sit flat on `#f3f3f3` with no border.

## Shapes

Measured radii: 16px (26 elements — cards), 999px (12 — pills), 8px (5 — link tiles), 4px (5), 5.008px (1), 50% (1 — round carousel arrows) and one `32px 32px 0px 0px` top-rounded panel. The root variables expose a full radius scale (`--s2a-border-radius-2xs: 4px` up to `--s2a-border-radius-xl: 32px`, `--s2a-border-radius-round: 999px`). Rule: buttons are pills, small tiles 8px, cards 16px, large panels 32px.

## Components

- **button-pill-light** — "Free trial" / "Sign in": `#ffffff` fill, `#000000` text, 14px/700 Adobe Clean, 999px radius, padding 6px 16px 8px, 40px tall, 1px solid `#ffffff` border. Measured hover on "Free trial": background becomes `rgba(255, 255, 255, 0.64)`.
- **link-tile** — hero quick-links ("Creativity and design", "Content creation", "PDF and document essentials", "Adobe for Business", "Students and teachers"): 8px radius, padding 12px 12px 16px, 94px tall. At rest they are `rgba(0, 0, 0, 0.44)` glass with white text and the inset hairline; on hover they flip to white fill, black text and a black border.
- **card** — `#f3f3f3`, 16px radius, 249px wide by 583px tall, image on top, bold title and grey description below. On hover the measured card inverts to `#000000` fill with white text.
- **nav** — 80px header, 14px/700 links, Adobe logo left, "Sign in" pill right.
- **footer** — black, white text, 128px top padding, link columns grouped by audience ("For individuals & small business", "For medium & large business", "For organizations", "Support", "Contact", "Adobe").

## Design System Architecture

Adobe's public design system is Spectrum (https://spectrum.adobe.com/), which describes itself as "the system behind Adobe experiences, a shared language for turning ideas into products", built from "foundations, tokens, patterns, and guidance". The adobe.com page itself ships a token layer with the `--s2a-` prefix (about 400 root variables: `--s2a-color-*`, `--s2a-font-size-*`, `--s2a-border-radius-*`, `--s2a-section-spacing-*`, `--s2a-typography-*`) and a separate `--feds-` prefix for the global navigation (`--feds-color-hamburger`, `--feds-gutter`). The variable names expose semantic layers (`content-default`, `background-brand`, `button-background-primary-transparent-on-light-hover`) above primitive scales (`blue-800`, `red-1200`, `gray-50`). The Spectrum site does not document what the `s2a` prefix stands for, so this file does not expand it.

## Do's and Don'ts

- Do keep the page black and white; let photography and product icons provide colour.
- Do set headlines in Adobe Clean Display Black 900 with negative tracking (-3.2px at 80px, -1.68px at 56px).
- Do use 999px pills for buttons and 16px for cards.
- Do invert on hover: grey card to black, glass tile to white.
- Don't use `#eb1000` as a button or link colour; it is the brand mark.
- Don't add drop shadows; the only measured shadow is a 1px inset hairline.
- Don't set body copy in the display face.

## Responsive Behavior

Measured at 390px: the hero headline drops from 80px/76px to 40px/40px (letter-spacing normal), hero body copy from 20px/24px to 16px/20px. The mobile header shows 1 visible link and a menu toggle labelled "Navigation menu" (desktop: 2 visible header links and a "Products" toggle). Mobile font sizes by character count are 16px, 14px, 32px, 18px, 40px and 12px — so the 56px section heads measure 32px and the 24px titles measure 18px. On mobile the extractor's primary CTA was a hero link tile ("Content creation") at 8px radius, 46px tall. Grid column counts per breakpoint were not measured.

## Iteration Guide

1. Start with `canvas`, `ink` and `surface-inverse`; most sections are one of the two.
2. Build the hero as a full-bleed photo with white display type and a white pill CTA.
3. Use `card` for product rows and `link-tile` for quick-links, with the measured hover inversions.
4. Check every headline uses weight 900 and the measured tracking.
5. Place `brand-red` only in the logo; if a red feels needed elsewhere, re-measure a page that uses it first.
