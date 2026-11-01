---
version: alpha
name: Lexus
category: "Automotive"
description: 'Lexus USA home page measured live: white canvas with black bands, black text, square 0px buttons (white EXPLORE and BUILD at 50px height), the nobel typeface at 300 to 700 weights, gray #adadad and #707070 secondary text and a #b6a171 gold accent.'
colors:
  canvas: '#ffffff'
  page-largest: '#000000'
  ink: '#000000'
  primary: '#ffffff'
  on-primary: '#000000'
  surface-light: '#f5f5f5'
  ink-light: '#adadad'
  ink-muted: '#707070'
  accent-gold: '#b6a171'
typography:
  display:
    fontFamily: nobel
    fontSize: 38.4px
    fontWeight: 300
    lineHeight: 42.24px
  display-mobile:
    fontFamily: nobel
    fontSize: 32px
    fontWeight: 300
    lineHeight: 35.2px
  body:
    fontFamily: nobel
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: nobel-bold
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.52px
  nav:
    fontFamily: nobel
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.64px
  link:
    fontFamily: nobel
    fontSize: 13px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: 1.3px
rounded:
  xs: 20px
  sm: 24px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.page-largest}'
    typography: '{typography.button}'
    rounded: '{rounded.none}'
    padding: 0px 30px
    height: 50px
    borderColor: '{colors.canvas}'
  button-primary-hover:
    textColor: '{colors.canvas}'
  button-secondary:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.page-largest}'
    typography: '{typography.button}'
    rounded: '{rounded.none}'
    padding: 0px 30px
    height: 50px
    borderColor: '{colors.canvas}'
  link:
    textColor: '{colors.page-largest}'
    typography: '{typography.link}'
    rounded: '{rounded.none}'
    padding: 0px 0px 1px
  nav:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.page-largest}'
    rounded: '{rounded.none}'
    padding: 0px 32px
  nav-link:
    textColor: '{colors.page-largest}'
    typography: '{typography.nav}'
    rounded: '{rounded.none}'
    padding: 0px 10px 0px 0px
  text-input:
    textColor: '{colors.canvas}'
    typography: '{typography.body}'
    rounded: '{rounded.none}'
    padding: 1px 2px
    height: 50px
---

## Overview

Lexus USA's home page (measured at `https://www.lexus.com/`, page title "Lexus | Experience Amazing.") is a restrained, car-first showroom. The capture shows a full-width carousel hero with a red 2027 Lexus IS on a dark pavement, round white arrow buttons and three dash-shaped slide indicators, then a black caption bar reading "The 2027 Lexus IS" with two square white buttons, "EXPLORE" and "BUILD". A centered thin-weight heading "Meet the models" sits above category tabs: SUV (8), SEDAN (2), HYBRID & ELECTRIC (8), PERFORMANCE (5) and ALL (10), each with a small circled count. A sticky sub-navigation bar with the Lexus emblem carries "Models", "Shop", "Find a Dealer" and "My Lexus". Beneath it a model carousel shows cut-out vehicle photographs (a gray-beige SUV and an olive LX) with the model name "LX", the powertrain labels "Gas" and "Performance Hybrid", a "VIEW OFFERS" link, and a black filled "EXPLORE" button next to an outlined "BUILD" button. A light-gray "Shopping tools" band lists SHOP, BUILD, OFFERS, FIND A DEALER and more with line icons, and a final campaign block reads "The 2027 NX. Arriving Winter 2026." over a large photograph.

The tone is calm and premium: light-weight headings, wide empty margins, small tracked uppercase actions, and photography doing the expressive work. A cookie consent panel ("Welcome to Lexus!") overlays the lower right of the capture; it is a consent control and is not documented as brand UI.

## Colors

Values are from `web/data/extracted/lexus.json`.

- **Canvas `#ffffff`**: the page background (area weight 1321).
- **Page-largest `#000000`**: the largest background area (1499), the black caption bars and carousel bands. The most-read text color is the same black, **ink `#000000`** (2044 characters).
- **Primary `#ffffff`** with **on-primary `#000000`**: the measured call-to-action fill is white with black text, as in the "EXPLORE" and "BUILD" buttons over the black bar. Elsewhere the same actions are black with white text or outlined in black.
- **Surface-light `#f5f5f5`**: the "Shopping tools" band (weight 415).
- **Ink-light `#adadad`** (1070 characters) and **ink-muted `#707070`** (742): secondary text levels. `#707070` is also a border color (one use).
- **Accent-gold `#b6a171`**: a gold text color on 59 characters.
- A scrim `#22222259` appears in three background uses.

The site CSS ships a large token sheet (a Tailwind-style palette with names like `--colors-slate-700` and `--colors-teal-200`, plus semantic names like `--color-text-default: #000` and `--color-subnavigation-border-focus: rgba(0, 0, 0, 0.6)`). Those palette entries are framework defaults and are not tokenized here; the interface itself is strictly black, white and gray.

## Typography

One typeface family, **nobel**, loaded as `nobel` at weights 300, 400, 500 and 700, plus `nobel-book` (759 characters) and `nobel-bold` (64 characters); a few characters use `Nobel` and `tcomSans`. Headlines use the light 300 weight.

| Token | Size / line-height | Weight | Letter-spacing |
|---|---|---|---|
| `display` | 38.4px / 42.24px | 300 | none |
| `display-mobile` | 32px / 35.2px | 300 | none |
| `body` | 16px / 22.4px | 400 | none |
| `button` | 13px / 18px (nobel-bold) | 400 | 0.52px |
| `nav` | 16px / 24px | 500 | 0.64px |
| `link` | 13px / 18px | 700 | 1.3px |

By character count the sizes are 11px (1424), 16px (959), 10px (779), 19.6px (515), 13px (354) and 38.4px (77). Weights: 400 (3262), 300 (526), 500 (375), 700 (134). Small sizes are opened with letter-spacing: 11px with 0.44px (1201 characters), 10px with 1px (704), 11px with 1.1px (223) and 13px with 1.3px (203). The capture shows labels such as "EXPLORE", "BUILD" and "VIEW OFFERS" in tracked capitals.

## Layout

The page is a stack of full-width bands: a hero carousel (full bleed), a black caption bar, a centered "Meet the models" section with a content width narrower than the viewport, a sticky sub-navigation, a model carousel with centered text, a gray tools band and another full-bleed campaign image. Page height measured 5574px. The nav bar is 60px high with padding `0px 32px`. A sub-navigation with a dropdown pattern is declared in the CSS (`--color-subnavigation-dropdown-border: rgba(0, 0, 0, 0.3)`).

Spacing tokens: 1px, 4px, 5px, 6px, 7px, 8px, 10px, 12px, 15px and 16px. Gap frequencies: 16px (32), 10px (24), 8px (17), 12px (14), 4px (14), 6px (10). Padding: 16px (21), 8px (13), 4px (12), 24px (10), 15px (8), 6px (7). The CSS defines a rem spacing scale (`--spacing-1: .25rem`, `--spacing-4: 1rem`, `--spacing-12: 4.5rem`, `--spacing-96: 24rem`).

## Elevation & Depth

Depth is nearly absent. One shadow was measured: `rgba(0, 0, 0, 0.2) 2.81px 3.934px 8.43px 1.124px`, a soft offset shadow (one use). Borders: `#ffffff` (5 uses), `#000000` (2), `#707070` and `#efefef` (one each). Layering comes from black and white bands and full-bleed photography.

## Shapes

Buttons are square: `rounded.none: 0px` is used by the primary and secondary buttons, nav, link and input. Other radii measured: 24px (6 elements), 20px (6), 50% (2), 932px (2) and 9999px (2); tokens `xs: 20px`, `sm: 24px`, `pill: 9999px`. Round shapes in the capture are the carousel arrow buttons and count badges; the Lexus emblem is an ellipse.

## Components

**Primary button (`button-primary`)**: white `#ffffff` fill, black text, nobel-bold 13px / 18px with 0.52px tracking, 0px radius, padding `0px 30px`, height 50px, white border. Hover (measured): text turns white and the fill becomes transparent with a white border, so it inverts to an outline on the black bar. Labels: "EXPLORE", "BUILD".

**Secondary button (`button-secondary`)**: same measurements, label "BUILD". On the white section the capture shows a black filled "EXPLORE" (the third candidate in the extraction: black fill, white text, weight 700) and an outlined "BUILD".

**Link (`link`)**: 13px weight 700 with 1.3px tracking, padding `0px 0px 1px`, such as "LEARN MORE" and "VIEW OFFERS".

**Nav (`nav`, `nav-link`)**: white background, black text at 16px weight 500 with 0.64px tracking, 60px high, padding `0px 32px`; nav links padded `0px 10px 0px 0px`.

**Text input**: white text on a dark field, 16px, height 50px, padding `1px 2px`, 0px radius.

**Tabs**: category tabs with an underline for the active tab and circled counts, visible in the capture.

## Design System Architecture

No public design system or brand guideline is linked from lexus.com: the page fetch returned only the title "Lexus | Experience Amazing.", so no official source is cited beyond the site itself (https://www.lexus.com/). The shipped CSS exposes a token layer in root custom properties with Tailwind-like naming: `--colors-*`, `--spacing-*` (rem), `--radii-*` (for example `--radii-xs: .125rem`, `--radii-md: .375rem`, `--radii-2xl: 1rem`, `--radii-3xl: 1.5rem`), `--blurs-*`, `--breakpoints-md: 768px`, `--font-weights-*`, `--letter-spacings-tight: -.025em` and `--letter-spacings-wide: .025em`, plus semantic component tokens such as `--color-text-default` and `--color-select-option-selected-background: #f0f0f0`. The measured rendering uses only a small subset of that sheet.

## Do's and Don'ts

Do:
- Use pure black `#000000` and white `#ffffff` for surfaces and actions.
- Use square buttons, 50px high with 30px horizontal padding.
- Set headlines in nobel weight 300.
- Track small uppercase labels at 0.52px to 1.3px.
- Let vehicle photography fill bands edge to edge.

Don't:
- Do not round the action buttons; the measured radius is 0px.
- Do not use the framework palette values from the CSS variables as brand colors.
- Do not apply the gold `#b6a171` to large areas; it is a small text accent.
- Do not treat the cookie consent panel as brand UI.

## Responsive Behavior

The 390px mobile pass recorded: h1 and h2 at 32px / 35.2px weight 300 (desktop 38.4px / 42.24px), body 16px / 22.4px (unchanged), the primary button with padding `0px 10px` (desktop `0px 30px`) and height 50px, and a nav block 60px high, 11px / 14px with 0.44px tracking and padding `0px 20px`, containing "My Lexus". The CSS declares a `--breakpoints-md` of 768px; menu form and carousel behavior at 390px are not measured.

## Iteration Guide

1. Set `canvas` `#ffffff`, `ink` `#000000`, secondary text `#707070`, band `#f5f5f5`.
2. Use nobel 300 at 38.4px / 42.24px for section headings and 16px / 22.4px for text.
3. Build buttons at 0px radius, 50px high, padding `0px 30px`, 13px labels with 0.52px tracking.
4. Invert buttons on hover (fill to transparent, text to white) on black bands.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=lexus --force --no-motion` before changing any value, then `node web/scripts/verify-designs.mjs --slug=lexus`.
