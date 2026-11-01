---
version: alpha
name: Razer
category: "Gaming"
description: "Razer's US storefront is a pure-black (#000000) gaming catalogue lit by one neon green, #44d62c, used on 3px-radius uppercase Titillium Web CTAs; RazerF5 headlines at 40px/700 uppercase, Roboto 16px body in #bbbbbb, and a #111111 footer."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#44d62c"
  on-primary: "#000000"
  surface-footer: "#111111"
  surface-raised: "#222222"
  ink-muted: "#999999"
  ink-soft: "#bbbbbb"
  ink-light: "#eeeeee"
  primary-hover: "#73e161"
  ghost-fill: "#00000080"
typography:
  display:
    fontFamily: RazerF5, Arial, Helvetica, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 44px
    textTransform: uppercase
  display-mobile:
    fontFamily: RazerF5, Arial, Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 35.2px
    textTransform: uppercase
  body:
    fontFamily: Roboto, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"Titillium Web\", RazerF5, Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
    textTransform: uppercase
  nav:
    fontFamily: Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 10px
  2xl: 12px
  3xl: 48px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 4.9px
  s4: 5.6px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 11.5px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ghost-fill}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    border: "2px solid #44d62c"
    padding: 0px 16px
    height: 44px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-soft}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
---

# Razer

## Overview

Razer's home page (measured at https://www.razer.com/, title "Razer United States | For Gamers. By Gamers.") is a dark retail catalogue. The page body is pure black `#000000`, and nearly every band in the 4,065px-tall desktop scroll keeps that black. Product photography carries the colour: a headset, mice, controllers, a gaming chair and laptops, all shot against black or deep-green backdrops with Razer's own green glow (RGB lighting) showing in the image.

The single brand colour on the interface is the green `#44d62c`. The site's own custom properties name it twice: `--cx-color-primary: #44d62c` and `--cx-g-color-success: #44d62c`. It fills the "LEARN MORE" buttons, outlines the "BUY" buttons and colours the footer tagline "FOR GAMERS. BY GAMERS.™". Everything else is a ladder of greys on black.

The tone is short and declarative, set in capitals: "RAZER BARRACUDA V2 PRO", "MULTI-PLATFORM AUDIO FREEDOM", "WE PLAY TO WIN", "SHOP WITH THE UNFAIR ADVANTAGE". Each hero names a product and adds one short tagline, followed by a pair of actions. The mid-page "WE PLAY TO WIN" block is the only long copy: a two-line paragraph about twenty years of esports hardware, set over a team photo of five players in black-and-green jerseys.

The capture contains a cookie-consent dialog ("We value your privacy") over the first hero. It is not brand UI, and the dialog's #333333 card, its shadow and its "Cookie Policy" link have been left out of the tokens.

## Colors

- **Canvas `#000000`.** Body background and the largest measured area by far (11,466 area units, against 1,071 for the next).
- **Ink `#ffffff`.** The most-read text colour (1,539 characters): headlines, product names and footer column links. The site names it `--razer-color-body-titles: #fff`.
- **Primary `#44d62c`.** Razer green. It fills the primary CTA and is the border and text colour of the secondary "BUY" button. Text on the green is black: **on-primary `#000000`**.
- **Primary hover `#73e161`.** Measured fill of "LEARN MORE" after hover, a lighter tint of the green.
- **Ghost fill `#00000080`.** The "BUY" button's half-transparent black fill, which lets the hero image show through.
- **Surface footer `#111111`.** The footer band (y 3693, 372px tall on desktop).
- **Surface raised `#222222`.** The third-largest background. The site also declares `--cx-color-background: #222` and `--dark: #222`. On mobile the top band (the location selector) is `#222222`.
- **Ink soft `#bbbbbb`.** Body paragraphs and the header's base text colour.
- **Ink muted `#999999`.** The second most-read colour (497 characters), used in the footer; matches the declared `--cx-color-text: #999`.
- **Ink light `#eeeeee`.** Secondary nav text; declared as `--cx-g-color-light: #eee`.

A `#555555` strip (43px tall on desktop) holds the shipping notice "All orders over US$99 will enjoy free standard shipping…". Status colours are declared but not seen on the home page: `--danger: #c8323c` and `--cx-g-color-warning: #ffc107`.

## Typography

Three families are loaded and measured:

- **RazerF5**, the proprietary display face (files `RazerF5.woff`, `RazerF5SemiBold.woff` and `RazerF5Light.woff`, served from razer.com/assets/fonts). Hero product names use **display**: 40px, weight 700, 44px line height, uppercase. Section titles drop to 32px ("WE PLAY TO WIN") and 28px (carousel titles such as "INTRODUCING THE WOLVERINE V4 LINE"). RazerF5 accounts for 773 measured characters.
- **Roboto**, the workhorse (1,921 characters). **Body** is 16px/20px weight 400 in `#bbbbbb`. The **nav** token records Roboto 16px/24px; footer links run at 12px/18px.
- **Titillium Web 700** is used only for buttons: 16px, 16px line height, uppercase, with RazerF5 as the first fallback.

The measured size scale is 12, 14, 16, 18, 24, 28, 32 and 40px. Weights are 400 for reading text and 700 for headlines and buttons, with some 500. RazerF5 is not publicly licensed. As a stand-in, a squared, technical sans in bold uppercase keeps the character; Titillium Web itself is free on Google Fonts and matches the buttons exactly.

## Layout

The desktop pass was measured at 1280px wide. The site declares `--cx-page-width-max: 1140px`, and the "WE PLAY TO WIN" paragraph measures exactly 1140px wide. Heroes are centred: the Barracuda headline block spans x 399–881, with the title, tagline and button pair stacked on one centre axis above the product image.

The page runs as a sequence of full-bleed bands. In order: a 61px black header; the grey shipping strip; the product hero; a video or image band; "WE PLAY TO WIN" over a green-tinted team photo (`#134d0e` band behind four product tiles); a 700px rotating hero carousel ("RAZER BASILISK V4 PRO", "RAZER NAGA V3 PRO" and others); a horizontally scrolling row of 28px-titled promo cards; a row of three image tiles ("SHOP WITH THE UNFAIR ADVANTAGE", "ONLY AT RAZER", "RAZER LAPTOP GUIDE"); and the footer. Carousels show dot pagination, previous and next arrows, and a round green pause button.

Measured gaps include 8px, 19.2px and 24px; the most frequent paddings are 16px, 12px and 6px. The footer has five link columns (Shop, Explore, Support, Company, Follow Us) and the green tagline on the right.

## Elevation & Depth

The home page has almost no shadows. The only box shadow measured, `rgba(172, 171, 171, 0.3) 0px -1px 10px 0px`, belongs to the cookie dialog and is excluded. Depth comes from light instead: product renders glow green against black, and the bands step between `#000000`, `#111111` and `#222222`. The product tiles in the team-photo band are black panels with thin borders over the photo. The "BUY" button's `#00000080` fill is the one place where transparency layers UI over imagery.

## Shapes

The geometry is mostly hard-edged. Buttons use **3px** (`rounded.sm`), the most frequent radius (15 elements). Product tiles and cards use 10px and 12px. 48px appears on three elements, and 50% (`pill`) on the circular play and pause buttons. 2px, 4px and 6px each appear once or twice. Headings and bands have no rounding at all. The overall effect is engineered and squared, softened only enough to read as a button.

## Components

- **Primary button.** `#44d62c` fill, black uppercase Titillium Web 16px/700 text, 3px radius, 0 16px padding, 44px tall ("LEARN MORE" measures 126px wide). Hover lightens the fill to `#73e161` and keeps the text black.
- **Secondary button.** "BUY": the same type, size and radius, with green text, a `2px solid #44d62c` border and the half-transparent `#00000080` fill. Its measured hover fill is `rgb(18, 47, 13)`, a dark green wash.
- **Header.** A 61px black bar: logo at the left, ten visible text links (Store, PC, Console, Mobile, Furniture & Lifestyle, Gold & Silver, Community, Razer AI, Support), then search and cart icons. Header text is `#bbbbbb` with `#eeeeee` and white children.
- **Shipping strip.** A `#555555` band with a single centred line and an underlined "Shop Now >" link.
- **Product tile.** A black panel with an isolated product image and an uppercase name ("RAZER DEATHADDER V4 PRO").
- **Carousel controls.** Circular green play and pause buttons, dot pagination, chevron arrows.
- **Footer.** `#111111`, white 12px links in five columns, `#999999` secondary text, the green tagline, social icons in outlined circles, and a bottom row with copyright, legal links and "United States | Change Location".

## Design System Architecture

Razer publishes no public design system or brand guidelines. The About page (https://www.razer.com/about-razer) links to a newsroom and https://developer.razer.com, but to no brand or design resources. The de facto system can be read from the shipped CSS. The page exposes 400 custom properties in three families. `--cx-*` storefront variables carry the brand palette (`--cx-color-primary: #44d62c`, `--cx-color-text: #999`, `--cx-color-background: #222`, `--cx-page-width-max: 1140px`, `--cx-buttons-border-radius: 2rem`). `--mat-*` variables theme form fields, dialogs and buttons in a dark scheme (for example `--mat-slide-toggle-selected-handle-color: #44d62c`). A small newer set (`--color-component-button-primary-text-…`, `--typography-weight-highimp: 600`) follows a component/state naming pattern. Breakpoints are declared as `--breakpoint-lg: 1200px` and `--breakpoint-xl: 1400px`. Fonts come from razer.com/assets/fonts (RazerF5 family plus a `phoenix-icons` icon font) and Google Fonts (Roboto, Titillium Web).

## Do's and Don'ts

**Do**
- Keep the canvas pure black and let product photography supply the light.
- Use `#44d62c` sparingly, on actions and the tagline, so it reads as a signal.
- Set headlines in uppercase RazerF5 (or a squared bold stand-in) at 40px, with a short uppercase tagline below.
- Pair a solid green "LEARN MORE" with an outlined green "BUY" of identical size and 3px radius.
- Use the grey ladder (`#ffffff`, `#eeeeee`, `#bbbbbb`, `#999999`) for hierarchy instead of new colours.

**Don't**
- Don't put white text on the green; the measured on-primary is black.
- Don't add drop shadows or rounded, bubbly cards; the system is flat and nearly square.
- Don't introduce a second accent hue; the declared blues and purples (`--secondary-blue`, `--secondary-purple`) do not appear on the home page.
- Don't treat the cookie dialog's `#333333` card as a component.

## Responsive Behavior

Measured at 390px wide. The hero headline drops from 40px to **32px/35.2px** (display-mobile) and wraps to two lines ("RAZER BARRACUDA / V2 PRO"). Body text stays 16px/20px, now 358px wide. The primary button keeps its desktop spec: 44px tall, 126px wide, 3px radius. Only one header link was measured as visible (`headerLinksVisible: 1`), and the mobile capture shows a menu icon, logo, search and cart in the header. On mobile the page opens with a `#222222` location-selector band ("Switch to Thailand") ahead of the header. The mobile capture shows the footer's Shop, Explore, Support and Company headings as rows with plus icons. Their open state was not measured. Breakpoint values in use beyond the declared `--breakpoint-lg` and `--breakpoint-xl` were not measured.

## Iteration Guide

1. Start from black `#000000`, white headlines and `#bbbbbb` Roboto body text.
2. Add one action colour, `#44d62c`, with black text and a `#73e161` hover.
3. Build heroes on one centre axis: uppercase 40px title, uppercase tagline, two 44px buttons, then a large product image.
4. Separate sections with full-bleed photography and the `#111111`/`#222222` surfaces, not borders or shadows.
5. Hold radii at 3px for controls and 10–12px for tiles; use circles only for media controls.
6. Check every new screen against the capture: if green covers more than the actions and an accent line, pull it back.
