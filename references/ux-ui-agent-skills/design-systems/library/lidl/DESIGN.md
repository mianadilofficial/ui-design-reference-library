---
version: alpha
name: Lidl
category: "Retail & E-commerce"
description: 'Lidl US home page measured live: white canvas, #353b42 text, Lidl blue #0050aa pill buttons (hover #002466), Lidl yellow #fff000 secondary buttons (hover #ffc400), dark #1e2124 labels and the proprietary LidlFontPro family at 16px, 26px and 29px.'
colors:
  canvas: '#ffffff'
  ink: '#353b42'
  primary: '#0050aa'
  on-primary: '#ffffff'
  surface-dark: '#1e2124'
  ink-pale-blue: '#f0f7ff'
  ink-muted: '#636d79'
  accent-yellow: '#fff000'
  hairline: '#8c96a1'
  accent-yellow-hover: '#ffc400'
  primary-hover: '#002466'
  price-red: '#e60a14'
typography:
  display:
    fontFamily: LidlFontPro
    fontSize: 29px
    fontWeight: 700
    lineHeight: 36px
  heading:
    fontFamily: LidlFontPro
    fontSize: 26px
    fontWeight: 700
    lineHeight: 31.2px
  body:
    fontFamily: LidlFontPro, font-fallback, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: LidlFontPro
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
  link:
    fontFamily: LidlFontPro
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
  button-secondary:
    fontFamily: LidlFontPro
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  input:
    fontFamily: LidlFontPro, "Trebuchet MS", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20.7px
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 26px
  xl: 74.89px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 96px
  s10: 128px
components:
  button-primary:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.canvas}'
    typography: '{typography.button}'
    rounded: '{rounded.pill}'
    padding: 8px 16px
    height: 44px
  button-primary-hover:
    backgroundColor: '{colors.primary-hover}'
    textColor: '{colors.canvas}'
  button-secondary:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.canvas}'
    typography: '{typography.button-secondary}'
    rounded: '{rounded.sm}'
    padding: 8px 16px
    height: 42px
    borderColor: '{colors.primary}'
  link:
    textColor: '{colors.surface-dark}'
    typography: '{typography.link}'
  nav:
    textColor: '{colors.canvas}'
  nav-link:
    typography: '{typography.body}'
  text-input:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.primary}'
    typography: '{typography.input}'
    rounded: '{rounded.lg}'
    padding: 0px 36px 0px 16px
    height: 48px
    borderColor: '{colors.hairline}'
  card:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.ink}'
    rounded: '{rounded.md}'
    boxShadow: rgba(0, 0, 0, 0.15) 0px 2px 4px 0px
  footer:
    textColor: '{colors.primary}'
  button-yellow:
    backgroundColor: '{colors.accent-yellow}'
    textColor: '{colors.surface-dark}'
    typography: '{typography.button}'
    rounded: '{rounded.pill}'
    padding: 8px 16px
    height: 44px
  button-yellow-hover:
    backgroundColor: '{colors.accent-yellow-hover}'
    textColor: '{colors.surface-dark}'
---

## Overview

Lidl US (the measured page resolved to `https://www.lidl.com/`) is a promotional grocery and general-merchandise storefront under the tagline "More to Value." The capture opens with a white strip holding the square Lidl logo (a blue field with a yellow disc and red ring), a pale-blue store-selector pill ("Select your Lidl store for special offers l...") and three small icons. A solid Lidl-blue `#0050aa` band follows with "Sign In / Register" and the prompt "Take advantage of the benefits." in yellow, plus a wide white rounded search field ("What are you searching for?"). Below it a row of seven large colored circles with white line icons names the main departments: Food & Wine (green), Kitchen & Household (gray), DIY & Garden (dark green), Sports & Leisure (orange), Home & Living (beige), Fashion & Lifestyle (red) and Baby, Kids & Toys (blue).

A full-width orange seasonal banner reads "Fall Treats Coupons - Claim daily in-app rewards through 10/13." with a blue "Learn More" pill. "Weekly Deals" is a centered heading above a two-segment control ("Current Week" filled blue, "Coming Up" outlined) and a grid of eight tall promo cards, each on its own saturated background (blue, red, cream, purple, orange, sky blue), each with a white "Starting Wednesday, 10/7" tag, a yellow heavy headline, a product photograph, a discount badge and a giant yellow price. A blue "Show more" pill follows, then "Your Weekly Ad" with a "Select your store" button and a thumbnail of the printed circular. The footer lists Newsletter, Trustbar, About Us and Store Finder groups.

The voice is promotional, price-led and friendly: seasonal themes (fall, Halloween, Greek week, National Seafood Month), value and "Lidl Plus" savings.

## Colors

Values are from `web/data/extracted/lidl.json`; most match the site's `--ods-` root variables.

- **Canvas `#ffffff`**: the largest background area (weight 8515).
- **Ink `#353b42`**: the body and heading text (831 characters), the h1 and h2 color.
- **Primary `#0050aa`**: Lidl blue, the fill of the header band (area 170), the "View Now", "Learn More", "Current Week" and "Show more" buttons, the search text color and the footer link color. **On-primary `#ffffff`**. **Primary-hover `#002466`**: the measured hover fill of every blue button (`rgb(0, 80, 170)` to `rgb(0, 36, 102)`), declared as `--ods-color-surface-interaction-primary-hover`.
- **Accent-yellow `#fff000`**: Lidl yellow, a button fill with dark text (the mobile "View Now" button) and yellow headline and price text on promo cards (31 characters in this color). **Accent-yellow-hover `#ffc400`**: the hover fill of that yellow button, with `#1e2124` text.
- **Surface-dark `#1e2124`**: near-black, the second-largest background (579) and the nav-label color (439 characters).
- **Ink-pale-blue `#f0f7ff`** (126 characters), **ink-muted `#636d79`** (49, the inactive "Coming Up" tab text) and **hairline `#8c96a1`** (border, 2 uses).
- **Price red `#e60a14`**: declared as `--ods-color-text-surface-price`.
- **Light gray `#f1f2f4`**: a card or band background (area 108); **scrim `#00000073`** (5 uses).

Promo-card backgrounds change by campaign and are photography or graphics, not tokens. The browser-default link color `#0000ee` appeared on nav links and has been dropped.

## Typography

**LidlFontPro** carries almost everything (1791 characters), with **LidlFontCondPro** (48 characters, weights 400 and 700) for condensed price or label text and a decorative `lidl-cake-font-082019` also loaded. System fallbacks follow (`font-fallback`, system-ui, Segoe UI, Roboto and others).

| Token | Size / line-height | Weight | Where |
|---|---|---|---|
| `display` | 29px / 36px | 700 | h1 "Weekly Deals" |
| `heading` | 26px / 31.2px | 700 | h2 "Your Weekly Ad" |
| `body` | 16px / 22.4px | 400 | paragraph text |
| `button` | 16px / 20px | 600 | pill buttons |
| `button-secondary` | 16px / 24px | 500 | segmented control |
| `link` | 14px / 16px | 500 | department labels |
| `input` | 18px / 20.7px | 400 | search field |

By character count: 16px (1281), 11px (300), 14px (158), 18px (45), 29px (30), 26px (14). Weights: 400 (819), 600 (636), 500 (319), 700 (65). No letter-spacing was measured. The giant prices and yellow headlines on promo cards are part of the card artwork.

## Layout

The page is a stack of bands: logo strip, blue sign-in and search band (header block 166px high), department circles, full-bleed banner carousel, Weekly Deals grid, weekly-ad section, footer (609px). The deal grid is a set of equal-size tall cards in rows, and the departments are evenly spaced circles centered on the page, as visible in the capture. Page height measured 3637px.

Spacing tokens: 1px, 3px, 4px, 8px, 12px, 16px, 24px, 32px, 96px and 128px. Gaps: 8px (64 uses), 4px (28), 16px (10), 24px (6), 12px (4), 32px (2). Padding: 8px (93), 16px (33), 1px (26), 32px (18), 4px (15), 96px (8).

## Elevation & Depth

Shadows are light and short: `rgba(0, 0, 0, 0.15) 0px 2px 4px 0px` (2 uses, the card token), `rgba(0, 0, 0, 0.1) 0px -2px 4px 0px` (1) and `rgba(0, 0, 0, 0.15) 0px 3px 3px 0px` (1). A zero-size red inset shadow `rgb(255, 0, 0) 0px 0px 0px 0px inset` was also measured once and has no visible effect. Borders: `#8c96a1` (2), `#dde0e3`, `#0050aa`, `#ffffff` (one each). The blue band, colored promo cards and a dark gradient at the bottom of each card provide most of the layering.

## Shapes

Radii measured: 999px (21 elements), 8px (13), 4px (13), 10px (2), 26px (1) and 74.89px (1). Tokens: `xs: 4px`, `sm: 8px`, `md: 10px`, `lg: 26px`, `xl: 74.89px`, `pill: 9999px`. Buttons ("View Now", "Learn More", "Show more") are full pills; the segmented control has 8px outer corners on its end segments (`8px 0px 0px 8px` and `0px 8px 8px 0px`); the search input uses 26px; promo cards and badges use 4px to 10px; department icons are circles.

## Components

**Primary button (`button-primary`)**: `#0050aa` fill, white text, LidlFontPro 600 at 16px / 20px, 999px radius (pill), padding `8px 16px`, height 44px. Hover: `#002466`.

**Yellow button (`button-yellow`)**: `#fff000` fill, `#1e2124` text, same dimensions; hover `#ffc400`. It appears in the 390px pass for "View Now".

**Secondary / segmented button (`button-secondary`)**: blue fill, white text, 16px weight 500, 42px high, padding `8px 16px`, 8px outer corners; the inactive segment is white with `#636d79` text.

**Text input (`text-input`)**: white fill, `#0050aa` text, 18px, radius 26px, padding `0px 36px 0px 16px`, height 48px, border `#8c96a1`, with a magnifier icon.

**Card (`card`)**: white, 10px radius, shadow `rgba(0, 0, 0, 0.15) 0px 2px 4px 0px`.

**Link (`link`)**: `#1e2124` text at 14px / 16px weight 500 (department labels).

**Footer (`footer`)**: `#0050aa` text, 609px tall.

## Design System Architecture

No brand guideline or design-system documentation is linked from lidl.com: the opened page references only versioned logo and image asset paths, so no official source exists to cite beyond the site itself (https://www.lidl.com/). The shipped CSS exposes a token layer of about 400 root variables with an `--ods-` prefix, named by role and state: for example `--ods-color-surface-interaction-primary-hover: #002466`, `--ods-color-surface-interaction-rating-active: #ffc400`, `--ods-color-text-surface-price: #e60a14`, `--ods-color-text-surface-accent-secondary: #a84700`, `--ods-color-surface-white: #fff`, and typography, component-size and price tokens (`--ods-minimum-width-button-secondary-s: 4.5rem`, `--ods-mobile-price-m-without-pointer: 700`, `--ods-mobile-body-footnote-base: 500`). Interaction states (default, hover, focus, pressed, active) are enumerated per surface.

## Do's and Don'ts

Do:
- Use `#0050aa` for primary actions and `#002466` on hover.
- Use pill (999px) buttons, 44px high, padding `8px 16px`.
- Use `#fff000` yellow with dark `#1e2124` text for emphasis and secondary actions.
- Keep text in LidlFontPro at 16px for body and 26px to 29px for headings.
- Put prices big and in yellow or red on saturated card backgrounds.

Don't:
- Do not use `#0000ee` for links.
- Do not set yellow text on white; yellow is for dark or saturated grounds.
- Do not use heavy shadows; the measured ones are 3px to 4px blurs.
- Do not add decorative fonts to body copy.

## Responsive Behavior

The 390px mobile pass recorded: h1 unchanged at 29px / 36px, h2 24px / 28.8px (desktop 26px / 31.2px), body text 16px / 22.4px, the first call to action as a yellow `#fff000` pill with `#1e2124` text (desktop blue), and a header block 278px high (desktop 166px). Column counts and menu form at that width are not measured.

## Iteration Guide

1. Set `canvas` `#ffffff`, `ink` `#353b42`, `primary` `#0050aa`, `accent-yellow` `#fff000`.
2. Set h1 at 29px / 36px weight 700 and body at 16px / 22.4px in LidlFontPro.
3. Build buttons as pills, 44px high, padding `8px 16px`, hover `#002466` or `#ffc400`.
4. Use the measured spacing steps (4px, 8px, 16px, 24px, 32px).
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=lidl --url=https://www.lidl.com/ --force --no-motion` before changing any value, then `node web/scripts/verify-designs.mjs --slug=lidl`.
