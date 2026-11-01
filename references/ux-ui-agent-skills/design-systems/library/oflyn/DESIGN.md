---
version: alpha
name: "Oflyn"
category: "Fashion & Apparel"
description: "Oflyn French streetwear boutique (oflyn.fr) measured live: pure black #000000 canvas, white #ffffff type with 8% white #ffffff14 button fills, fluid Neue grotesk at 13.952px and 25.8987px statements, abc uppercase labels, 4px radius chips and grey studio product photography."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#ffffff"
  surface-raised: "#141414"
  ink-soft: "#ffffff99"
  ink-faint: "#ffffff80"
  ink-on-light: "#00000099"
  ink-dim: "#ffffff66"
  hairline: "#ffffff14"
  button-primary-border: "#ffffff26"
typography:
  display:
    fontFamily: Neue, grotesk
    fontSize: 13.952px
    fontWeight: 500
    lineHeight: 12.5568px
  display-mobile:
    fontFamily: abc
    fontSize: 18.8032px
    fontWeight: 400
    lineHeight: 28.2048px
    textTransform: uppercase
  heading:
    fontFamily: abc
    fontSize: 13.952px
    fontWeight: 400
    lineHeight: 20.928px
    textTransform: uppercase
  body:
    fontFamily: Neue, grotesk
    fontSize: 25.8987px
    fontWeight: 500
    lineHeight: 38.848px
rounded:
  xs: 3px
  sm: 4px
  pill: 9999px
spacing:
  s1: 1.33px
  s2: 2.67px
  s3: 3.33px
  s4: 4px
  s5: 5.33px
  s6: 8px
  s7: 10.67px
  s8: 13.33px
  s9: 14.67px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.sm}"
    padding: 3.33333px 13.3333px 3.33333px 3.33333px
    height: 49px
    borderColor: "{colors.button-primary-border}"
  button-secondary:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.sm}"
    padding: 8px
    height: 31px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
    padding: 21.3333px 46.6667px 0px
  nav-link:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.sm}"
    padding: 8px
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink-faint}"
---

# Oflyn

## Overview

The measured page is https://oflyn.fr/ (title "OFLYN | Boutique Indépendante - Streetwear Haut de Gamme – Oflyn", lang fr), 478 visible elements: the home page of an independent French streetwear label. The whole page sits on pure black. At the very top is a thin announcement bar, "LIVRAISON OFFERTE À PARTIR DE 160€", with a "Français / English" switch at the right. Under it three small translucent chips (Boutique, Notre histoire, Lookbook) sit at the left, the heart-shaped logo mark is centred, and a "SAC / 0" cart chip with a bag icon sits at the right. The hero is a full-width video band (a flat grey frame in the capture) followed by a monospaced caption strip: "0FLYN", "MEMORY", "COLLECTION", "2026", with a "Voir la video" chip with an expand icon. A "Dernière collection" chip with a tiny thumbnail floats in the black area, then a large white statement: "Mode durable exclusive, conçue et personnalisée en France pour ceux qui privilégient la qualité et l'authenticité plutôt que la production de masse."

Then "NOUVELLE COLLECTION" in uppercase with a "Tous nos articles" chip, and a three-column grid of product cards on light grey backgrounds (a black hoodie "Hoodie", socks "Nouveau / Chaussettes", a black T-shirt "T-shirt") each with a monospaced name (FRAGMENT, REMAINS, QUIET REMORSE), a price (120€, 12€, 44€), a corner arrow button and small round colour swatches. An editorial block "ÉLÉGANCE ET AUTHENTICITÉ" over a full-bleed group photograph with a "Qui sommes-nous" chip follows.

The opened page text confirms a "memory collection 2026" video banner, products priced 120€, 44€, 12€ and 35€, and the language switch. The tone is minimal, premium and understated; calls to action are small, quiet chips.

## Colors

The page is black with white at several opacities. Background area: `#000000` (6766), `#ffffff14` (110), `#ffffff` (50), `#ffffff0d` (7), `#0000000f` (5), `#ffffff26` (4), `#141414` (0). Text by characters: `#ffffff` (546), `#000000` (322, text on light product images and chips), `#ffffff99` (89), `#ffffff80` (39), `#00000099` (16), `#ffffff66` (15).

- `canvas` #000000 and `ink` / `primary` / `on-primary` #ffffff.
- `hairline` #ffffff14: the 8% white fill of every chip and button; `button-primary-border` #ffffff26 is the 15% white 1px border.
- `ink-soft` #ffffff99, `ink-faint` #ffffff80, `ink-dim` #ffffff66: 60%, 50% and 40% white for secondary text such as the caption strip and prices.
- `ink-on-light` #00000099: 60% black text on light surfaces.
- `surface-raised` #141414: a near-black raised surface (zero area weight in the measurement).

The root declares 108 variables, among them `--black-2: #151515`, `--white-15: rgba(255, 255, 255, .15)`, `--white-40: rgba(255, 255, 255, .4)`, `--black-05: rgba(0, 0, 0, .05)`; the palette is built from black and white with alpha steps. The only saturated color in the capture is the product's own blue (a blue T-shirt in the group photograph and small blue swatch dots), which is product color, not interface color.

## Typography

Three families were measured: Neue (a grotesk, 528 characters; the loaded fonts list `Neue`, `abc` and `grotesk`), abc (325 characters, rendered in the capture as a monospaced face for uppercase labels, names and prices) and ui-sans-serif (174, a system default). Weights: 500 (528 chars) and 400 (499). Sizes are fluid, which is why they are not round: 13.952px (575 chars), 10.6667px (253), 25.8987px (145), 11.2853px (30), 12.5653px (24). The root holds clamp-based size variables such as `--font-12`, `--size-18` and `--font-28`, and `--base-font-size: 16`.

- `display` Neue 13.952px / 12.5568px, weight 500: nav chips, buttons ("Boutique", "Dernière collection").
- `heading` abc 13.952px / 20.928px, weight 400, uppercase: "NOUVELLE COLLECTION".
- `body` Neue 25.8987px / 38.848px, weight 500: the brand statement.
- `display-mobile` abc 18.8032px / 28.2048px, weight 400, uppercase: the 390px h1 ("0FLYN") and h2.

## Layout

The layout is an edge-to-edge black page with a content width bounded by hairline rules (a thin 1px line above each section label). Nav chips pad `21.3333px 46.6667px 0px` at the container; measured paddings: 8px (66 uses), 10.6667px (9), 46.6667px (7), 16px (3), 21.3333px (2), 3.33333px (2), 26.6667px (1). The product grid is three equal columns with a small gap; cards have a photo area with a label chip in its top-left corner and a text row below with the name at the left and an arrow chip at the right.

## Elevation & Depth

No shadows were measured. Separation comes from 8% and 15% white fills and borders on a black page, hairline rules and photographic grey panels. Hover on the product link "Hoodie" changes the text from white to black (rgb(0, 0, 0)) per the measured hover pair.

## Shapes

Radii: 4px (48 elements: chips, cards, photo panels), 9999px (20: round swatches and icon buttons) and 3px (1). Tokens: `xs` 3px, `sm` 4px, `pill` 9999px. Chips are small rounded rectangles, not capsules.

## Components

- **button-primary** (chip): 8% white fill #ffffff14, white 13.952px weight-500 label, 1px #ffffff26 border, 4px radius, 49px high in the measured "Dernière collection" chip, padding 3.33333px 13.3333px 3.33333px 3.33333px (to fit a small thumbnail at the left).
- **button-secondary / nav-link**: the same translucent chip at 31px high with 8px padding ("Boutique", "Notre histoire", "Lookbook", "Tous nos articles").
- **cart chip**: "SAC / 0" with a bag icon, same chip style.
- **product card**: grey photo panel, label chips (Hoodie, Chaussettes), monospaced name and price, arrow chip, round swatches.
- **footer**: text in 50% white (`{colors.ink-faint}`).

## Design System Architecture

No public brand guideline or design system link was found on https://oflyn.fr/; the opened page links to sales conditions, returns, privacy and contact pages. The de-facto system is a CSS variable layer of 108 entries: Tailwind ring variables (`--tw-ring-*`), black and white alpha steps (`--white-15`, `--white-40`, `--black-05`, `--black-2`), fluid size variables (`--font-12`, `--font-28`, `--size-10`, `--size-18`, `--size-60`, `--size-75`, `--size-93`) and `--base-font-size: 16`. Source: `web/data/extracted/oflyn.json`.

## Do's and Don'ts

- Do keep the page black with white at 100%, 60%, 50% and 40% for hierarchy.
- Do make every control a translucent chip: 8% white fill, 15% white border, 4px radius.
- Do set names, prices and section labels in the uppercase monospaced abc face.
- Don't use saturated interface colors; the blue appears only in product photography.
- Don't add shadows.
- Don't use capsule shapes for chips; they are 4px rounded rectangles (circles are for swatches and icon buttons).

## Responsive Behavior

The 390px pass measured the h1 ("0FLYN") and the h2 ("NOUVELLE COLLECTION") at 18.8032px / 28.2048px in abc, weight 400, uppercase (13.952px for the h2 on desktop). Navigation arrangement, product grid columns and breakpoints are not measured.

## Iteration Guide

1. Black canvas, white ink, translucent white chips.
2. Neue 500 for chips and statement, abc uppercase for labels and prices.
3. 4px-radius chips, 1px hairline rules.
4. Studio product photography on light grey with a label chip in the corner.
5. Gate: `node web/scripts/verify-designs.mjs --slug=oflyn`.

### Content and imagery notes

Product imagery is shot in a studio against a flat mid-grey backdrop: a model in a black hooded sweatshirt with a small embroidered mark, a black sock in its cream paper band printed with the logo, and a model in a black T-shirt wearing a cross necklace. The editorial section uses a group portrait of four people in black and blue clothing and bucket hats against a pale wall, softly blurred at the edges. The logo is a heart-like monogram of calligraphic strokes, repeated on garments and packaging, and the footer carries policy links and an email. Microcopy is in French with English labels for product types (Hoodie, T-shirt), and prices are given in euros with the euro sign after the number.
