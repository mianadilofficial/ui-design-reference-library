---
version: alpha
name: Terminal Industries
category: "Tech & AI"
description: "Terminal Yard Operating System site: white canvas, deep green ink #052424, lime #abff02 action fill, SuisseIntl for headings and body with Geist Mono 11px caps buttons, 8px button radius, 24px cards in #f0f0f0 and a full-bleed dusk truck hero."
colors:
  canvas: "#ffffff"
  ink: "#052424"
  primary: "#abff02"
  on-primary: "#052424"
  ink-body-gray: "#1f1f1f"
  ink-light: "#dddddd"
  ink-soft: "#052424b3"
  ink-on-dark-muted: "#ffffff99"
  hairline: "#c2c2c2"
  primary-hover: "#abff021b"
  link-bg: "#ffffff26"
  card-bg: "#f0f0f0"
  card-text: "#7f7f7f"
  accent-orange: "#fb6b3c"
typography:
  display:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 14px
    fontWeight: 450
    lineHeight: 14px
    letterSpacing: 0.42px
  display-mobile:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
    letterSpacing: "-0.4602px"
  heading:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 73.3312px
    fontWeight: 400
    lineHeight: 69.6646px
    letterSpacing: "-1.46667px"
  subheading:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 20.0064px
    fontWeight: 400
    lineHeight: 29.2093px
    letterSpacing: "-0.4px"
  body:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: 0.36px
  button:
    fontFamily: "\"Geist Mono\", monospace"
    fontSize: 11px
    fontWeight: 600
    lineHeight: 13.2px
    letterSpacing: 1.5px
  nav:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 10px
  md: 12px
  lg: 14px
  xl: 20px
  2xl: 24px
  3xl: 100px
spacing:
  s1: 1px
  s2: 4px
  s3: 6.67px
  s4: 8px
  s5: 12px
  s6: 13.34px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 18.6624px
    height: 42px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.ink-light}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 18.6624px
    height: 42px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 25px 50px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink-soft}"
    typography: "{typography.nav}"
    padding: 4px 0px 12px
    height: 38px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.card-text}"
    rounded: "{rounded.2xl}"
    padding: 40px
---

## Overview

Terminal Industries (https://terminal-industries.com/, titled "Terminal Yard Operating System | The New Industry Standard in Yard Operations") sells a yard operating system for logistics yards. The home page is 15,066px tall at 1280px wide and opens on a cinematic full-bleed photograph: a tractor-trailer silhouetted against an orange dusk sky, with a floating translucent navigation bar on top. The large statement that follows reads "We have reinvented the future of logistics through the yard." with a lime highlight color inside the headline (the h2 has `#ffffff` and `#abff02` child colors). A mono "SCROLL TO EXPLORE" label sits at the top of the page. Further down, numbered cards ("01 FAST START", "Fix One Problem in the Yard") and body lines such as "Build your Yard Operating System one application at a time." sell a modular product.

The look is industrial-technical: a near-black green, one electric lime, light gray surfaces, monospaced uppercase labels and very tight large sans headlines. The lower part of the capture is blank white; those sections were below the lazy-loaded fold and are not described beyond what the extraction measured.

## Colors

`canvas` is white `#ffffff` (largest measured background area, 8,964); `ink` is dark green `#052424` (`--c-dark-green`), used for 1,675 text characters on light sections and as the fill behind the lime. The action color is lime `#abff02` (`--c-lime`), the background of the "EXPLORE PRODUCT" button with `#052424` text. White `#ffffff` carries the most text (2,253 characters) because the hero and dark bands are text-on-photo or on green.

Supporting values: `#f0f0f0` (`--c-dirty-white`) fills cards; `#7f7f7f` (`--c-dark-gray`) is card text; `#c2c2c2` (`--c-light-gray`) is the hairline and a border color; `#ddd` (`--c-light-light-gray`) fills the secondary "CONTACT US" button; `#1f1f1f` is body text in 1,019 characters; `#454742` (`--c-gray`) and `#fb6b3c` (`--c-orange`) are declared in the root variables, with the orange not measured on any rendered element. Translucents recorded include `#052424b3` (70% ink), `#ffffff99`, `#ffffff26` (the nav link fill) and `#0000004d` over photography.

Hover behaviour was measured: "EXPLORE PRODUCT" goes from fill `#abff02` and text `#052424` to a faint lime wash (`rgba(171,255,2,0.106)`) with lime text and border; "REQUEST DEMO" goes from white to `rgba(255,255,255,0.23)` with lime text; "CONTACT US" goes from `#ddd` to `rgba(221,221,221,0.37)` with lime text.

## Typography

SuisseIntl is the primary face (`--font-primary`), with weights 400, 450, 500 and 600 loaded. Geist Mono (400 and 600, `--font-mono`) is the technical voice. The CSS corpus also references Poppins, IBM Plex Serif and Inter; these belong to third-party widgets (the root variable `--salespeak-font-family` is `'Poppins', sans-serif`) and were not measured on brand elements.

Measured scale: h2 hero statement 73.3312px/69.6646px weight 400, tracking -1.46667px; 70px headline at -3.6px; 46px at -0.46px; 30.6688px at -0.613333px; h3 20.0064px/29.2093px at -0.4px; body 18px/25.2px at +0.36px; nav 14px weight 450 at +0.42px (16px on the mobile pass at -0.4602px). Buttons and card labels are Geist Mono 11px weight 600 at 1.5px tracking; the card number labels are 13px with 2.34px tracking, uppercase. Headline tracking is strongly negative and label tracking strongly positive.

SuisseIntl is a commercial typeface; Inter or Helvetica Neue approximates it. Geist Mono is open source.

## Layout

The navigation is a floating rounded bar centered in the page: logo "Terminal" at left, then System, Markets, Featured, Resources, About, a phone icon button and three buttons (EXPLORE PRODUCT, REQUEST DEMO, CONTACT US), each 94px wide by 42px high. Content sections use wide margins; the hero statement is an 800px-wide block. Cards are 332px wide by 569px high with 40px padding. Measured gaps cluster at 8px, 12px, 32px and 48px, and paddings at 14px (68 elements), 40px, 70px, 80px and 96px. The product section lays out numbered modules as a horizontal run of cards.

## Elevation & Depth

No box-shadows were measured. Depth is photographic (dusk hero, dark overlay `#0000004d`) and tonal (white to `#f0f0f0` cards to `#052424` bands). The floating nav is separated from the hero by a translucent fill rather than a shadow. The primary button has a `beforeShape` pseudo-element in `#052424` translated 44.375px down, which is the hover wipe; it is a fill animation, not a shadow.

## Shapes

Radius is a consistent 8px for buttons and nav controls (24 elements), 24px for cards, with 12px, 14px, 20px and a 100px pill used occasionally. The CSS corpus holds 8px 103 times, 4px 18 times and 6px 15 times. The datepicker variable `--dp-border-radius` is 4px, but that belongs to a third-party form widget.

## Components

**Primary button.** Lime `#abff02`, text `#052424`, Geist Mono 11px weight 600, 1.5px tracking, 8px radius, padding `8px 18.6624px`, 42px high; the label wraps on two lines (EXPLORE / PRODUCT). **Secondary buttons.** "REQUEST DEMO" on white and "CONTACT US" on `#ddd`, same size and radius. **Nav link.** SuisseIntl 16px, white, with chevrons on menu items. **Card.** `#f0f0f0`, 24px radius, 40px padding, Geist Mono 13px uppercase label, an h3 at 20px and gray `#7f7f7f` text. **Mobile submit.** The mobile pass found a "SUBMIT" button in `#f0f0f0` with `#052424` text, Geist Mono 13px weight 600, 2.34px tracking, uppercase.

## Content & Voice

Copy is short and declarative, written for logistics operators. Headlines state an outcome ("We have reinvented the future of logistics through the yard."), card titles are imperative ("Fix One Problem in the Yard"), and the supporting line sells incremental adoption ("Build your Yard Operating System one application at a time."). Card labels are numbered and uppercase ("01 FAST START") and list the modules in the yard flow, starting with gate and security. Navigation labels are single words (System, Markets, Featured, Resources, About), and the three calls to action are the verbs EXPLORE, REQUEST and CONTACT. Photography is dusk-lit hardware, a truck rather than people or dashboards, and the monospace labels give the page an instrument-panel tone. The measured text mix is 6,259 characters of SuisseIntl against 296 of Geist Mono, so mono is an accent, never body copy.

## Design System Architecture

No public design system or brand guideline was found; the site pages opened expose none. The de-facto system is a set of named CSS variables on `:root`: colors (`--c-lime`, `--c-dark-green`, `--c-dirty-white`, `--c-dark-gray`, `--c-light-gray`, `--c-light-light-gray`, `--c-gray`, `--c-orange`, `--c-black`, `--c-white`) with alpha ladders (`--c-dark-green-05/-15/-20`, `--c-white-15/-20/-30/-40`), plus `--font-primary` and `--font-mono`. The `--dp-*` variables are from a datepicker library and `nuxt-devtools` variables show the site is built with Nuxt. Tailwind ring variables are present.

## Do's and Don'ts

Do use lime only for the primary action and highlights inside dark headlines. Do set buttons in Geist Mono 11px uppercase at 1.5px tracking. Do use deep green rather than black for text. Do keep headlines at weight 400 with tight negative tracking.

Don't add shadows. Don't use lime as large background areas other than buttons. Don't use the third-party widget fonts (Poppins, IBM Plex Serif, Inter) or datepicker colors for brand UI. Don't round buttons beyond 8px.

## Responsive Behavior

Mobile pass at 390px, measured: the hero h2 becomes 58px/55.1px (351px wide), the nav item size 16px weight 500, body stays 18px/25.2px in a 350px column (202px tall), and the mobile CTA seen is the SUBMIT button. The extractor did not record a menu-toggle label for this page. Other breakpoints are not measured.

## Iteration Guide

1. White canvas, `#052424` ink, lime `#abff02` for the single primary action.
2. Headlines in SuisseIntl 400 at tight negative tracking; labels in Geist Mono.
3. Build the floating nav bar with three 42px buttons (lime, white, `#ddd`) and 8px radius.
4. Cards `#f0f0f0`, 24px radius, 40px padding.
5. Implement hover as lime-on-translucent, not a darker fill.
6. Re-measure sections below the fold before documenting them; the capture did not render them.
