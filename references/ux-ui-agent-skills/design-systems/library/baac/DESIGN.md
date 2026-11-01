---
version: alpha
name: BAAC
category: "Thai Brands"
description: "The English homepage of BAAC, Thailand's Bank for Agriculture and Agricultural Cooperatives: sage #e8e7dd bands, a #26770e farm-green header and pill buttons with #fdffe5 text, futura-100-thai headlines at 700 weight (64px hero, 48px titles), #043026 forest footer with 40px top corners, and full-bleed farmland photography."
colors:
  canvas: "#e8e7dd"
  page-body: "#ffffff"
  ink: "#333333"
  primary: "#26770e"
  on-primary: "#fdffe5"
  surface-sage: "#e0e1d1"
  surface-black: "#000000"
  surface-forest: "#0e3f2e"
  surface-brown: "#5c4033"
  ink-brand: "#2e4205"
  ink-lime: "#cfd487"
  accent-gold: "#deae28"
  hairline: "#0000001a"
  footer-bg: "#043026"
typography:
  display:
    fontFamily: futura-100-thai, sans-serif
    fontSize: 64px
    fontWeight: 700
    lineHeight: 76.8px
    letterSpacing: 5%
  display-mobile:
    fontFamily: futura-100-thai, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
    letterSpacing: 0%
  heading:
    fontFamily: futura-100-thai, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 57.6px
    letterSpacing: 0%
  subheading:
    fontFamily: futura-100-thai, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 30px
  body:
    fontFamily: futura-100-thai, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
  button:
    fontFamily: futura-100-thai, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: futura-100-thai, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  card-link:
    fontFamily: futura-100-thai, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  footer-phone:
    fontFamily: futura-100-thai, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 20px
  2xl: 24px
  3xl: 40px
  4xl: 99px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 21px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 24px 40px
    height: 72px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 23px 40px
    height: 70px
  button-outline:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 23px 40px
    height: 70px
    boxShadow: rgb(38, 119, 14) 0px 0px 0px 1px inset
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    height: 133px
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.card-link}"
    rounded: "{rounded.lg}"
    padding: 40px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(10, 13, 18, 0.04) 0px 2px 2px -1px
  phone-pill:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink-brand}"
    typography: "{typography.footer-phone}"
    rounded: "{rounded.4xl}"
    padding: 5px 18px
    height: 46px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.3xl}"
    padding: 108px 0px 30px
    height: 647px
---

## Overview

BAAC is Thailand's state-owned Bank for Agriculture and Agricultural Cooperatives (page title "Bank for Agriculture and Agricultural Cooperatives | BAAC"; this is the English site, https://www.baac.or.th/en/). The measured page is 9287px tall at 1280px wide with 650 visible elements. It reads as a rural-development brand rather than a bank: the page is organised around full-bleed photographs of farmland and farmers, cream and sage bands, a warm green, and soft rounded shapes.

From the top: a 133px green (`#26770e`) header with a font-size control (a minus, an "A" and a plus), an EN / TH switch, the BAAC emblem, a menu (About, Products & Services, Performance, Sustainability, Global Partnerships, News & Activities) and social icons. The hero is an aerial photograph of farmland with a harvester; the headline "Bank for Agriculture and Agricultural Cooperatives" is set in pale lime (`#cfd487`) 64px bold, followed by copy about "more than six decades" of service and a "Discover Our Story" cue. A sage band follows with a green eyebrow "Vision", the 48px dark-olive heading "Sustainable Rural Development Bank" in quotation marks, an outlined pill "Explore Vision & Mission" and a wide photograph of two men in a rice field. Then a full-bleed close-up photograph with white overlay copy and a green pill "Let's Get to Know", the section "Moving Toward the Essence of Agriculture, Beyond Financial Services" with four rounded image cards (Affordable financing Support, Modern Agricultural Technology, Knowledge & Market Access, Product Value Enhancement), a script-lettered "The Way We Are" and "Once you experience it, you'll love BAAC." with the green pill "Experience BAAC", product photography, news cards, a performance-report block with a "Download PDF" link, a sustainability panel, an awards panel and a forest-green footer. The voice is formal and mission-driven, warm toward farmers; one tagline ("you'll love BAAC") is conversational.

The shipped capture first showed a royal-mourning tribute dialog and a dark scrim over the page; after the re-run required for such overlays the extractor reported `consentOverlaysHidden: scrim royal-mourning-2026, container-bottom`. The tribute and the scrim are not brand UI and are not documented; neither is the "Ask N'Jamsai" chat widget.

## Colors

- **Canvas `#e8e7dd`** (5147 area units; `--color-bg-alt` and `--color-divider`) is the sage-cream band color; **page body `#ffffff`** is the root fill and the card fill; **surface sage `#e0e1d1`** (1276) is a slightly deeper band. **Surface black `#000000`** (1037 units) is a measured background area that the extractor did not tie to a visible element.
- **Primary `#26770e`** is the farm green: the header fill, the fill of "Experience BAAC" and "Let's Get to Know", the outline and text of "Explore More", and the eyebrow label (159 characters). In the stylesheet it is `--color-secondary` and `--color-text-secondary-brand`. **On-primary `#fdffe5`** (1219 characters) is the cream text on green and the fill of the footer phone pill.
- **Ink `#333333`** (1496 characters) is body text. **Ink brand `#2e4205`** (330; `--color-text-brand`, also `--color-primary` in the stylesheet) is the dark olive of headings on sage. **Ink lime `#cfd487`** (43) is the hero headline. **Accent gold `#deae28`** (23; `--color-complement`) is the script lettering "The Way We Are".
- **Dark greens and brown**: footer `#043026` (828 units), forest `#0e3f2e` (941) and brown `#5c4033` (823) are measured backgrounds on the photographic panels and footer.
- **Hairline `#0000001a`** (10% black) is the 1px card border.

## Typography

One family, **futura-100-thai** (3287 characters; weights 400, 500, 600, 700 loaded; a `futura-100-thai-book` face is declared as `--font-futura-book`), serves Thai and Latin. Weights by character: 600 (1258), 500 (1153), 400 (485), 700 (391).

- **Display**: 64px / 76.8px, 700, letter-spacing `5%` (hero). Mobile pass: 32px / 38.4px, `0%`.
- **Heading**: 48px / 57.6px, 700, `0%` (section titles such as "Sustainable Rural Development Bank").
- **Subheading**: 20px / 30px, 600 (service-card titles). **Body**: 18px / 27px, 500. **Button**: 16px / 24px, 600. **Nav**: 16px / 19.2px, 400. **Card link**: 14px / 21px, 600. **Footer phone**: 24px / 36px, 700.
- Sizes by character: 18px (778), 20px (473), 16px (436), 14px (379), 13px (310), 48px (304), 24px (282), 12px (194), 64px (47), 40px (47), 32px (33).

The stylesheet declares `--font-body`, `--font-display`, `--font-futura` (all futura-100-thai) and a `--text-xs` .75rem to `--text-6xl` 3.75rem ladder. A geometric sans with a Thai companion is the closest substitute class.

## Layout

A full-width vertical stack of photographic bands and cream sections. The header is 133px tall; the sage bands hold centered text columns (eyebrow, heading, copy, pill button); the four service cards sit in one row; news items are image cards in a row; the footer is 647px tall with top corners rounded to 40px and `108px 0px 30px` padding, holding the phone pill, link groups (About; Products & Services; Sustainability; Global Partnerships; News & Activities; Contact), social icons and legal links (Terms and Conditions, Privacy Notice, Privacy Policy, Website Security Policy, Disclaimer, Copyright). Measured paddings: 24px (12 uses), 16px (11), 40px (11), 10px (9), 120px (6), 36px and 45px on card text; gaps 24px (14), 4px (13), 16px (13), 12px (10), 8px (8). Density is low: one message per band, large photographs.

## Elevation & Depth

Soft, green-tinted shadows. The most common is `rgba(14, 63, 46, 0.1) 0px 2px 12px 0px` (64 elements); cards use `rgba(10, 13, 18, 0.04) 0px 2px 2px -1px` (4); two elements carry a cream inset glow, `rgb(253, 255, 229) 0px 6px 20px 0px inset`, and one panel measures a three-layer stack ending in `rgba(10, 13, 18, 0.08) 0px 12px 16px -4px`. The stylesheet declares `--shadow-xs` `0px 0px 2px 0px #0003` and `--shadow-md` `0px 0px 20px 0px #00000040`. Photography with text overlays provides most of the depth.

## Shapes

Generous and soft. Measured radii: `12px` (64 elements), `20px` (8), `99px` (6) and `999px` (3) pills, `50%` (6, round icon buttons), `16px` (4, cards), the footer `40px 40px 0px 0px`, a hero bottom edge `0px 0px 40px 40px`, and singles at `4px`, `8px` and `24px`. The stylesheet maps radii to `--radius-xs` 8px, `--radius-sm` 10px, `--radius-md` 20px, `--radius-lg` 40px and `--radius-xl` 100px. Buttons are fully rounded pills.

## Components

- **Button primary ("Experience BAAC")**: `#26770e` fill, `#fdffe5` text, 16px/600, radius `999px`, padding `24px 40px`, 72px tall and 211px wide. "Let's Get to Know" is the same pattern at 70px tall and 235px wide (radius 99px, `#ffffff` text).
- **Button outline ("Explore More", "Explore Vision & Mission")**: transparent, `#26770e` text, a 1px green outline (`1px solid #26770e` or an inset `rgb(38, 119, 14) 0px 0px 0px 1px` shadow), radius 99px to 999px, padding `23px 40px` to `24px 40px`, 70 to 74px tall, 184px to 265px wide.
- **Header**: green `#26770e`, 133px tall, cream `#fdffe5` text, 18px/600 for the menu.
- **Card (menu panel)**: white, radius 16px, `1px solid #0000001a`, padding 40px, 320px wide, 14px/600 list links.
- **Phone pill**: `#fdffe5` fill, `#2e4205` text, 24px/700, radius 99px, padding `5px 18px`, 46px tall, 277px wide, with an inset `rgb(235, 235, 235)` 1px ring.
- **Footer**: `#043026`, cream text, 647px tall.
- **Service cards**: four rounded image cards with a bottom title in cream text (20px/600, padding `36px 45px`).

## Design System Architecture

BAAC's English homepage links no brand or CI guidelines, logo downloads, press kit, design system or accessibility statement: the page opened at https://www.baac.or.th/en/ offers navigation, news, an annual report, social links and legal pages only, and the emblem appears as an image. The de-facto system is the shipped stylesheet, a Tailwind-style theme of 181 `:root` properties: a teal-green `--color-primary-50` to `-900` ramp (`#f2fcf9`, `#e6f3f0`, `#cce7e1`, `#99cfc3`, `#66b7a5`, `#339f87`, `#07503f`, `#064032`, `#043026`, `#032019`), a `--color-secondary-*` green ramp (`-100` `#e6f6ee` to `-900` `#004221`) with the plain `--color-secondary` `#26770e`, a `--color-complement-*` gold ramp (`-100` `#f9f4e6` to `-900` `#4d3a04`, `--color-complement` `#deae28`), `--color-accent-*` creams (`#eff7ea`, `#d7e9c3`, `#e1e0d2`, `--color-accent-dark` `#003e2f`), neutrals, semantic text colors (`--color-text-brand` `#2e4205`, `--color-text-primary` `#333`, `--color-text-tertiary` `#999`), status colors (`--color-success`, `--color-error`, `--color-warning`, `--color-info`), `--radius-*`, `--shadow-*`, `--spacing-*px` and `--container-*` sizes. The visible green is the secondary scale, not the primary ramp.

## Do's and Don'ts

- Do use farm green `#26770e` with cream `#fdffe5` text for header, primary buttons and the eyebrow label.
- Do alternate sage `#e8e7dd` bands with full-bleed farmland photographs.
- Do keep headlines in futura-100-thai 700; use dark olive `#2e4205` on sage and lime `#cfd487` over photographs.
- Do make buttons pills with 24px/40px padding, 70 to 72px tall; outline the secondary action in green.
- Don't document the royal-mourning tribute, its scrim, the cookie container or the chat widget as brand UI.
- Don't use hard corners; the smallest measured radius on actions is 99px.
- Don't use gold `#deae28` for UI; it appears on script lettering only (23 characters).
- Don't add heavy shadows; the measured shadows are 10% green tints and 4% neutrals.

## Responsive Behavior

Measured in the 390px mobile pass: the hero headline is 32px / 38.4px at 700 with `0%` tracking (64px / 76.8px, `5%` on desktop) in a 358px-wide, 154px-tall box; the h2 is 24px / 28.8px (48px / 57.6px); body text is 14px / 21px, 500 in a 328px box (18px / 27px); the primary button is 14px / 21px, 600, padding `12px 32px`, 45px tall and 178px wide (72px and 211px on desktop); the header is 72px tall (133px on desktop). Breakpoints, the card grid and the menu behavior at narrow widths were not measured.

## Iteration Guide

1. Set the palette: sage `#e8e7dd` bands, white cards, green `#26770e` with cream `#fdffe5`, dark olive `#2e4205` headings, forest `#043026` footer.
2. Use futura-100-thai only: 700 for 64 and 48px headings, 600 for 20px card titles and 16px buttons, 500 for 18px body.
3. Build buttons as pills (999px), padding `24px 40px`.
4. Keep photography full-bleed and rounded cards at 16px with a 1px `#0000001a` border.
5. Re-run `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=baac --force --no-motion` after any change in the overlays, then `node web/scripts/verify-designs.mjs --slug=baac`.
