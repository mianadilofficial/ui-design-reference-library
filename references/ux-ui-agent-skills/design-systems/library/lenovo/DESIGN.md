---
version: alpha
name: Lenovo
category: "Consumer Electronics"
description: 'Lenovo US home page measured live: white canvas with #ededed footer, Lenovo purple #7a126b buttons at 8px radius (hover #4d144a), Montserrat 600 headlines at 56px, Noto Sans body, Lato nav, and the Lenovo red #e1251b logo.'
colors:
  canvas: '#ffffff'
  page-largest: '#ededed'
  ink: '#171717'
  primary: '#7a126b'
  on-primary: '#ffffff'
  surface-pale-purple: '#f1e1ed'
  ink-2: '#000000'
  ink-plum: '#1e0013'
  ink-gray: '#3a3a3a'
  ink-6: '#333333'
  hairline: '#e4e4e4'
  primary-hover: '#4d144a'
  card-bg: '#eaeef5'
  lenovo-red: '#e1251b'
typography:
  display:
    fontFamily: Montserrat, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 56px
    fontWeight: 600
    lineHeight: 56px
    letterSpacing: '-1.4px'
  display-mobile:
    fontFamily: Montserrat, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 34px
    fontWeight: 600
    lineHeight: 40.8px
    letterSpacing: '-0.34px'
  heading:
    fontFamily: Montserrat, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
    letterSpacing: '-0.4px'
  body:
    fontFamily: '"Noto Sans", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
  button:
    fontFamily: Montserrat, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 25.6px
  nav:
    fontFamily: Lato
    fontSize: 14px
    fontWeight: 400
  button-secondary:
    fontFamily: Montserrat, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22.4px
  input:
    fontFamily: Lato
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 12px
  xl: 16px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.canvas}'
    typography: '{typography.button}'
    rounded: '{rounded.sm}'
    padding: 13px 24px
    height: 40px
  button-primary-hover:
    backgroundColor: '{colors.primary-hover}'
  button-secondary:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.canvas}'
    typography: '{typography.button-secondary}'
    rounded: '{rounded.sm}'
    padding: 0px 12px
    height: 40px
  link:
    textColor: '{colors.ink-2}'
    typography: '{typography.nav}'
  nav:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.ink-2}'
  nav-link:
    textColor: '{colors.ink-2}'
    typography: '{typography.nav}'
  text-input:
    textColor: '{colors.ink-2}'
    typography: '{typography.input}'
    padding: 0px 0px 0px 10px
    height: 22px
  card:
    backgroundColor: '{colors.card-bg}'
    textColor: '{colors.ink-2}'
    rounded: '{rounded.sm}'
    padding: 24px 16px
  footer:
    backgroundColor: '{colors.page-largest}'
    textColor: '{colors.ink-2}'
---

## Overview

Lenovo's US home page (the measured URL resolved to `https://www.lenovo.com/us/en/`) is a corporate commerce front page in a clean, bright, Montserrat-led style. The capture opens with a thin gray utility bar ("Lenovo Pro Business Store"), a header with the red Lenovo logo block, a wide rounded search field ("What are you looking for today?"), "Sign In / Create Account", a wish and cart icon, and a text nav: Artificial Intelligence, Products, Business Solutions, Support, About Lenovo, Deals. A pale-blue promo bar below announces business-member savings. The hero is a pale-purple panel headed "Lenovo Innovation World '26" and "A New Vision for AI", a short paragraph, a purple "Learn more" button and a large violet-and-red architectural photograph with carousel arrows and a progress line.

Below, a row of seven product-category icons (PCs & Tablets, Servers & Storage, Services, Monitors, Accessories & Software, Support, Deals) leads into "Discover How Lenovo Can Help You", a rounded pink-to-lilac panel holding nine white pill-shaped topic buttons ("Safeguard against cyber threats", "Save on Lenovo products", "Increase workforce productivity" and others). A third section, "Powering Global Events & Partnerships", lists "Lenovo Tech World @ CES", "Lenovo & Formula 1®" and "Lenovo & FIFA" with arrows. In the capture some of these images had not loaded and show their alt text.

A floating product promo card with a black "Shop Now" pill and a feedback tab at the left edge appear over the page; they are transient overlays and are not documented as brand UI. The voice is direct and benefit-led.

## Colors

All values are from `web/data/extracted/lenovo.json`; most also appear as named variables in the site's root custom properties.

- **Canvas `#ffffff`**: header, content and card backgrounds. The largest area color is **page-largest `#ededed`** (weight 2742, `--pale-gray-3`), the footer background.
- **Ink `#171717`**: body text (3306 characters), declared as `--font-color`. Headings use **`#000000`** (2591 characters) and an aubergine **`#1e0013`** (`ink-plum`, 2394 characters, declared `--black`) on some headings such as "Powering Global Events & Partnerships".
- **Primary `#7a126b`**: Lenovo purple, the fill of every measured button ("Learn more", "Start Over", "Join Free", "Discover Hybrid AI Solutions"), declared `--med-purple`. **Primary-hover `#4d144a`** is the measured hover fill (`--dark-purple`).
- **On-primary `#ffffff`**: label text on purple buttons.
- **Surface-pale-purple `#f1e1ed`**: the hero panel background (area weight 794, `--pale-purple`).
- **Card background `#eaeef5`** (`--pale-blue`) and **`#f2f5f9`**: card and band tints.
- **Ink-gray `#3a3a3a`** and **`#333333`**: secondary text.
- **Hairline `#e4e4e4`**: the most-used border color (9 uses, `--pale-gray-2`).
- **Lenovo red `#e1251b`**: the logo block color, declared `--lenovo-red`.

The site also declares a wider palette in root variables: `--med-blue: #294E95` (also the link color), `--dark-blue: #11184F`, `--light-blue: #C9D0F0`, `--dark-red: #64131E`, `--med-red: #871C23`, `--alert-red: #B8322E`, `--dark-orange: #C73D00`, `--pale-orange: #F8E9DE`, `--dark-green: #285D50`, `--pale-green: #E5F0ED` and `--light-purple: #D9C1D8`.

## Typography

Three families: **Noto Sans** for most text (6753 characters, weights 400 and 700), **Montserrat** for headlines and buttons (3054 characters, 400 and 700 loaded), and **Lato** (180 characters) for nav links and inputs. Fallbacks are Helvetica Neue Light, Helvetica Neue, Helvetica, Arial and sans-serif.

| Token | Size / line-height | Weight | Letter-spacing |
|---|---|---|---|
| `display` | 56px / 56px | 600 | -1.4px |
| `display-mobile` | 34px / 40.8px | 600 | -0.34px |
| `heading` | 40px / 48px | 600 | -0.4px |
| `body` | 18px / 21.6px | 400 | none |
| `button` | 16px / 25.6px | 700 | none |
| `button-secondary` | 16px / 22.4px | 600 | none |
| `nav` | 14px | 400 | Lato |
| `input` | 16px / 24px | 400 | Lato |

Sizes by character count: 16px (4447), 18px (2317), 12.8px (1082), 20px (756), 24px (472), 12px (272). Weights: 400 (6064), 600 (2447), 500 (1011), 700 (465). Tracking tightens on large type: 16px with -0.16px, 18px with -0.2px, 40px with -0.4px, 24px with -1px. Headlines are Title Case.

## Layout

The page is a vertical stack of bands within a content container: header, promo bar, hero, icon row, rounded feature panel, partner grid, footer (1051px tall). Total page height measured 7912px. The category icons are evenly spaced in one row and the hero is split into text at the left and image at the right, as shown in the capture.

Spacing tokens: 2px, 4px, 5px, 6px, 8px, 10px, 12px, 13px, 14px and 16px. Gap frequencies: 16px (234 uses), 24px (78), 8px (64), 40px (38), 13px (14), 32px (12). Padding: 24px (139), 5px (135), 16px (121), 12px (11), 48px (9). The primary button uses padding `13px 24px`.

## Elevation & Depth

Depth is mostly flat. Measured shadows: `rgb(204, 204, 204) 0px 0px 4px 0px` (one use) and `rgb(204, 204, 204) 0px -2px 0px 0px inset` (one use, a bottom-edge inset line), plus an inset spread of `rgba(0, 0, 0, 0) 0px 0px 0px 1000px inset` used twice. Border colors: `#e4e4e4` (9), `#6d656f` (7), `#ffffff` (3), `#bcbcbc` (2), `#171717` and `#cccccc` (one each). Separation relies on tinted bands and the pale gradient panel.

## Shapes

Radii measured: 12px (71 elements), 8px (65), 4px (23), 50% (7), 16px (3) and a one-sided `10px 0px 0px 10px` (the search field's left corners). Tokens: `xs: 4px`, `sm: 8px`, `md: 10px`, `lg: 12px`, `xl: 16px`, `pill: 9999px`. Buttons and cards use 8px; larger panels and chips use 12px; the hero image and the feature panel are rounded in the capture.

## Components

**Primary button (`button-primary`)**: `#7a126b` fill, white text, Montserrat 700 at 16px / 25.6px, radius 8px, padding `13px 24px`, height 40px. Hover: `#4d144a` fill (measured on "Learn More" and "Read Press Release").

**Secondary button (`button-secondary`)**: same purple fill, Montserrat 600 16px / 22.4px, radius 8px, padding `0px 12px`, height 40px.

**Outlined chip**: white fill, black text, 16px weight 600, radius 8px, padding 16px, height 58px; measured on "Safeguard against cyber threats".

**Nav / nav-link**: white background, black Lato text at 14px.

**Text input**: black Lato 16px / 24px, padding `0px 0px 0px 10px`, height 22px; the search field's left corners round at 10px.

**Card (`card`)**: `#eaeef5` background, `#000000` text, 8px radius, padding `24px 16px`.

**Footer (`footer`)**: `#ededed` background, black text.

## Design System Architecture

No public design system or brand guideline is linked on the measured page, and fetching lenovo.com with WebFetch returned HTTP 403 (recorded in SOURCES.json), so no official source is cited beyond the site's own shipped CSS (https://www.lenovo.com/us/en/). The de-facto system is a set of named root custom properties: a semantic color palette (`--med-purple`, `--dark-purple`, `--pale-purple`, `--pale-gray-1` to `--pale-gray-5`, `--lenovo-red`, `--alert-red`, `--link-color`, `--font-color`, `--bg-color`, `--fore-color`), with a "light / med / dark / pale" naming scheme per hue (red, orange, green, blue, purple). Typography and spacing are not exposed as variables in the measurement.

## Do's and Don'ts

Do:
- Use `#7a126b` for buttons and `#4d144a` on hover.
- Use Montserrat 600 with tight negative tracking for headlines.
- Keep body text in Noto Sans at 16px to 18px.
- Use 8px radius for buttons and cards, 12px for panels.
- Tint bands with `#f1e1ed` and `#eaeef5`.

Don't:
- Do not use the red `#e1251b` for actions; it is the logo color.
- Do not treat the promo popup or feedback tab as design components.
- Do not use heavy shadows; measured shadows are `#cccccc` hairlines.
- Do not use pure black buttons for primary actions.

## Responsive Behavior

The 390px mobile pass recorded: h1 34px / 40.8px (desktop 56px / 56px), h2 28px / 36.4px with -0.7px tracking (desktop 40px / 48px), body 16px / 22.4px (desktop 18px / 21.6px), the primary button 32px high (desktop 40px) with the same padding, and a nav block 269px high (desktop 160px). Menu form and column counts at that width are not measured.

## Iteration Guide

1. Set `canvas` `#ffffff`, `ink` `#171717`, `primary` `#7a126b`, `primary-hover` `#4d144a`.
2. Headlines: Montserrat 600 at 56px / 56px, -1.4px tracking; sections at 40px / 48px.
3. Buttons: radius 8px, padding `13px 24px`, height 40px.
4. Use the measured spacing steps (8px, 16px, 24px, 40px).
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=lenovo --url=https://www.lenovo.com/us/en/ --force --no-motion` before changing any value, then `node web/scripts/verify-designs.mjs --slug=lenovo`.
