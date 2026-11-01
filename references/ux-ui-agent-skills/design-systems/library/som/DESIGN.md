---
version: alpha
name: "SŌM"
category: "Food & Beverage"
description: "SOM (SŌM) is a Belgian functional-elixir brand whose site sets ABC Diatype and ABC Diatype Mono on white (#ffffff) and near-black (#0e0f11), with an orange-red accent (#ff3a1f), 4px-radius uppercase mono buttons, frosted translucent cards over blurred dark photography and a 14px mono UI scale."
colors:
  canvas: "#ffffff"
  ink: "#0e0f11"
  primary: "#ffffff"
  on-primary: "#0e0f11"
  surface-3: "#fbfbfb"
  ink-3: "#ffffff99"
  ink-4: "#0e0f1199"
  ink-5: "#16191c99"
  ink-6: "#ffe6dc"
  hairline: "#ffffff29"
  accent: "#ff3a1f"
  text-input-border: "#ececec"
typography:
  display:
    fontFamily: "\"ABC Diatype\", system-ui, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 29.44px
    letterSpacing: "-1.76px"
  body:
    fontFamily: "\"ABC Diatype\", system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  button:
    fontFamily: "\"ABC Diatype Mono\", ui-monospace, monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.42px"
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 9px
  s5: 10.62px
  s6: 11px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 21px 14px
    height: 62px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 21px 14px
    height: 62px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 24px
    height: 74px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 20px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-4}"
---

# SŌM

## Overview

SŌM (drinksom.eu) sells a functional elixir. The page title is "SŌM | Bio-Active Rituals for the Modern Human" and the 1280px home page is 7912px tall. A full-height dark hero holds a blurred, motion-smeared photograph of a bottle behind a left text column ("NEW! SŌM POWER ELIXIR", the h1 "Power. Focus. Presence. In one daily shot.", a sentence "Functional elixirs for modern living. Inspired by tradition. Designed for today." and a white "GET YOUR POWER →" button) and a frosted glass card on the right labeled "THE INTENT / SŌM TEAM" with a quoted founder note and the footer line "FUNCTIONAL ELIXIR NO. 1 / EST. BELGIUM, 2026". A saturated orange-red announcement bar on top reads "MEET THE SŌM POWER. SUBSCRIBE TO YOUR WEEKLY RITUAL" with a CLOSE control.

Below the hero a white product section shows the box and shot bottle on the left and a purchase panel on the right: rating "4.8[U+2605] BASED ON 80+ VERIFIED REVIEWS", the product name "SŌM Power Elixir", a quantity selector (7-DAY €4.49/DAY, 28-DAY €3.99/DAY), a "CHOOSE YOUR RITUAL" pair of radio cards (Subscribe, with a SAVE 10% badge in the accent color, €31.46 against a struck-through €34.95; One-time purchase, €34.95) and a black "PROCEED TO CHECKOUT +" button with the price. A second dark photographic section, "WHAT SŌM GIVES YOU / Elixirs that gives you clear mind, steady energy, and no crash", offers pill-tabs for benefits (MENTAL CLARITY, FATIGUE CONTROL, STABLE ENERGY, STRESS BALANCE, COGNITIVE FOCUS) inside another frosted card.

The voice mixes wellness language with a technical, lab-instrument look: lowercase-friendly sans for statements, uppercase monospace for labels, prices and controls. Dark atmospheric photography alternates with clean white retail sections.

## Colors

- **Canvas `#ffffff`** is the largest background (8259 weight) and the product and footer sections.
- **Ink `#0e0f11`** is a near-black used for text on white (2290 characters), the dark sections (2162 weight) and the secondary and checkout buttons.
- **Primary `#ffffff`** with **on-primary `#0e0f11`**: the measured primary call-to-action "GET YOUR POWER" is a white button with near-black text on the dark hero.
- **Accent `#ff3a1f`** is the orange-red measured as a background (28 weight, the announcement bar and SAVE 10% badge) and border color (2 uses); the stylesheet names it `--som-orange-accent`. It was not in the generated tokens and is added from the extraction.
- **Surface-3 `#fbfbfb`** is a faint off-white section background (1837 weight). **`#ffffffb2`** (1365 weight) is a translucent white surface.
- **Hairline `#ffffff29`** is the border and fill of frosted cards over photography (20 border uses); **`#ffffff1a`** (185 weight) is a lighter glass fill.
- **Text-input border `#ececec`** is the stylesheet's `--color-som-stroke` and the measured light borders (10 uses).
- **Ink-3 `#ffffff99`, ink-4 `#0e0f1199`, ink-5 `#16191c99`, ink-6 `#ffe6dc`** are translucent or tinted text colors; `#ffe6dc` is a pale peach used for 51 characters.

A cookie-consent overlay (class "fixed inset-0 z-[100] …") was detected and hidden during measurement; none of its styling is documented here.

## Typography

Two families named ABC Diatype and ABC Diatype Mono are loaded: **ABC Diatype** at weights 400 and 500 (3539 characters) and **ABC Diatype Mono** at weight 400 (1909 characters). The stylesheet also declares Druk Wide and Druk display faces as variables (`--font-druk-wide`, `--font-druk`) that were not in the measured text.

| Role | Family | Size / line-height | Weight | Tracking |
|---|---|---|---|---|
| display (h1, also product h2 at 32px) | ABC Diatype | 32px / 29.44px | 500 | -1.76px |
| body | ABC Diatype | 16px / 19.2px | 400 | normal |
| button, nav, labels, inputs | ABC Diatype Mono | 14px / 20px (nav 16.24px) | 400, uppercase | -0.42px |

The size ladder by characters: 20px (2208), 14px (1647), 16px (849), 32px (194), 29.44px (163), 10px (143), 12px (119), 28px (72). Tracking tightens with size: -0.42px at 14px, -0.4px or -0.8px at 20px, -1.28px at 32px and -1.76px at 29.44px. Statement headings are mixed case; labels, nav, prices and buttons are uppercase mono.

## Layout

Header is 74px tall and sits over the hero in white text: a left cluster ("+ SHOP", "+ THE STORY", "+ PARTNERS", RITUALS, THE LAB), a centered globe-and-wordmark logo, and right items ACCOUNT, CART (0) and a white "SHOP SŌM POWER →" button. The product section is two columns, an image column and a purchase column about 728px wide. Gaps measured: 4px (37), 12px (36), 20px (34), 6px (25), 16px (24), 8px, 32px and 24px; paddings: 14px (40), 6px, 80px (10), 16px, 21px, 36px, 24px, 20px. The footer is 1080px tall with uppercase mono links (EXPLORE, SHOP, RITUALS, THE LAB, IMPACT …) in `#0e0f1199`.

## Elevation & Depth

One box shadow was measured: `rgba(0, 0, 0, 0.8) 0px 0px 2px 1px` on a single element. Otherwise depth is made with translucency: frosted cards (`#ffffff29` fill with a 1px `#ffffff29` border and 4px radius) over blurred photography, a soft ground shadow drawn in the product image, and strong contrast between white and `#0e0f11` sections.

## Shapes

Radii measured: 4px (33 elements), pill 9999px (31), 2px (7) and 6px (1). Buttons, inputs and cards use 4px; quantity selector tabs and benefit tabs are pills; radio cards are 4px with an accent-colored 1px border when selected (measured border `#ff3a1f`).

## Components

- **button-primary**: white fill, `#0e0f11` text, ABC Diatype Mono 14px uppercase, 4px radius, 21px 14px padding, 62px tall ("GET YOUR POWER →").
- **button-secondary**: `#0e0f11` fill, white text, same type and shape, 62px tall ("VIEW INGREDIENT FACTS"); the checkout button uses the same dark style with the price on the right.
- **option card**: white fill, 1px `#ececec` border, 4px radius, 48px tall ("One-time purchase €34.95"); on hover the measured border changes to a translucent orange (oklab color at 0.4 alpha).
- **text-input**: white fill, `#0e0f11` text, 1px `#ececec` border, 4px radius, 0px 24px padding, 74px tall, uppercase mono.
- **frosted card**: `#ffffff29` fill, 1px `#ffffff29` border, 4px radius, 20px padding, white text.
- **nav and links**: white mono 14px labels with +/- prefixes on the hero; link "EXPLORE ELIXIR" is underlined mono in ink.
- **announcement bar**: accent `#ff3a1f` with small white uppercase text and a CLOSE control.

## Design System Architecture

No public design system, brand guideline or press kit link was found in the home page HTML (the only brand-related href is a 3D bottle model file, `/object/SOM_bottle_v4_compressed.glb`). The de-facto system is Tailwind-based: the stylesheet exposes Tailwind variables (`--color-white`, `--color-blue-500`, `--font-sans`, `--font-weight-semibold`) alongside custom brand variables `--color-som-stroke: #ececec`, `--som-orange-accent: #ff3a1f`, `--font-diatype`, `--font-diatype-mono`, `--font-druk` and `--font-druk-wide`. Reference: https://www.drinksom.eu/

## Do's and Don'ts

- Do set controls, labels and prices in ABC Diatype Mono 14px uppercase with -0.42px tracking.
- Do use white and `#0e0f11` as the two surfaces; use `#ff3a1f` only for the announcement bar, discount badge and selected state.
- Do put frosted `#ffffff29` cards over dark photography.
- Do not use pill radii on cards or inputs; those are 4px.
- Do not use the cookie-consent overlay style as a brand pattern.
- Do not add heavy drop shadows; one thin shadow was measured on the whole page.

## Responsive Behavior

The 390px mobile pass recorded: the h1 stays 32px/500 with tracking -1.28px (down from -1.76px); body drops from 16px to 14px with a 16.8px line-height; the primary button keeps 14px mono type but its padding becomes 18px 14px and its height 56px, at 358px wide. The mobile size ladder is 16px (2759 characters), 14px, 12px, 20px, 18px, 32px, 24px and 28px. Nav and column layout on mobile were not measured.

## Iteration Guide

1. Alternate white `#ffffff` retail sections with `#0e0f11` photographic sections.
2. Use Diatype for statements and Diatype Mono uppercase for everything functional.
3. Keep corners at 4px, pills only for tabs.
4. Reserve `#ff3a1f` for announcement, badge and selected-state borders.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=som --url=https://www.drinksom.eu/ --force --no-motion` after site changes.
