---
version: alpha
name: "digitalists"
category: "Agencies & Studios"
description: "digitalists is a Vienna and Eisenstadt WordPress agency whose German site pairs a saturated lemon-yellow canvas (#f1e500) with pure black type, PP Neue Montreal 400/700, PP Fraktion Mono uppercase labels, 7px-radius black and yellow buttons and flat, shadow-free color fields."
colors:
  canvas: "#f1e500"
  ink: "#000000"
  primary: "#f1e500"
  on-primary: "#000000"
  surface-white: "#ffffff"
  copy-yellow: "#e6e4c7"
  hairline: "#d9d9d9"
  primary-deep: "#f2d500"
  secondary-deep: "#038786"
  secondary: "#3AC3B6"
  secondary-light: "#84D8D0"
  success: "#2FB65D"
  warning: "#FB9905"
  error: "#C32349"
  gray-50: "#212121"
  gray-40: "#313131"
  gray-30: "#6d6d6d"
  gray-10: "#f0f0f0"
  swatch-orange: "#ff5c02"
  swatch-green: "#06ff0a"
  swatch-cyan: "#00f5ff"
  swatch-blue: "#1307ff"
  swatch-purple: "#cb00fe"
  swatch-pink: "#ff024f"
typography:
  display:
    fontFamily: "\"PP Neue Montreal\""
    fontSize: 57.6px
    fontWeight: 700
    lineHeight: 63.36px
  display-mobile:
    fontFamily: "\"PP Neue Montreal\""
    fontSize: 48px
    fontWeight: 700
    lineHeight: 52.8px
  heading:
    fontFamily: "\"PP Fraktion Mono\""
    fontSize: 13px
    fontWeight: 400
    lineHeight: 14.3px
    textTransform: uppercase
  subheading:
    fontFamily: "\"PP Neue Montreal\""
    fontSize: 22.4px
    fontWeight: 700
    lineHeight: 24.64px
  body:
    fontFamily: "\"PP Neue Montreal\""
    fontSize: 15px
    fontWeight: 400
    lineHeight: 19.5px
  button:
    fontFamily: "\"PP Neue Montreal\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
    textTransform: uppercase
  nav:
    fontFamily: "\"PP Neue Montreal\""
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16.9px
  button-secondary:
    fontFamily: "\"PP Neue Montreal\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
    textTransform: uppercase
  input:
    fontFamily: "\"PP Neue Montreal\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
rounded:
  xs: 2px
  sm: 5px
  md: 7px
  lg: 10px
  xl: 20px
  2xl: 40px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 11px
  s10: 15px
  header-height: 60px
  block-margin-desktop: 80px
  block-margin-mobile: 50px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 11px 30px 11px 15px
    height: 42px
    borderColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.surface-white}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 11px 30px 11px 15px
    height: 40px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.copy-yellow}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 1px 2px
    height: 50px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 20px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.surface-white}"
---

# digitalists

## Overview

digitalists is a WordPress agency and web design studio serving Vienna, Lower Austria and Burgenland, with an office in Eisenstadt; the page title reads "digitalists | WordPress Agentur & Webdesign Wien, NÖ & Burgenland" and the document language is German. The home page measured at `https://digitalists.at/` presents eight service lines: Branding & Design, Websites & E-Commerce, Online Marketing, Plattformen & Entwicklung, KI & Automatisierung, Strategie & Betreuung, Tracking & Analyse and Print. The main navigation lists Home, Lösungen, Leistungen, Cases, Über uns, Blog, FAQs and Kontakt, with a black "Jetzt anfragen" button beside it.

The visual identity is a saturated lemon yellow, `#f1e500`, used as the page canvas and covering by far the largest background area in the extraction, set against pure black type and a near-black footer. Everything else is restrained: white, a single light grey hairline (`#d9d9d9`), and a warm cream (`#e6e4c7`) for copy on dark panels. The personality comes from type and microcopy rather than from color variety: a geometric grotesque (PP Neue Montreal) carries nearly every character, a monospace (PP Fraktion Mono) labels sections in uppercase, and a third hand-lettered face named "wasted" appears on a service tag. The voice is playful and direct. The nav bar carries the mono line "HELLO WORLD, WELCOME HOME!", the about page says "kein 0815", and a pug mascot named Trudi appears in the illustration set according to the pages opened.

The capture shows a full-bleed hero photograph of a stylized painted figure in an underground station with the white headline "Agentur" over it, followed by large flat yellow fields, a light-grey service panel with an oversized "Projekte" statistic, and project thumbnails. Per the fetched pages, imagery mixes photography, graphic tiles, illustrated characters and campaign case thumbnails for clients such as UNICEF and TU Wien.

## Colors

The palette is measured from the live page and from the site's own `:root` custom properties, which name a primary, a secondary and a gray ramp. Canvas and primary are the same yellow because the generated primary action fill is yellow on the black footer form.

- **Canvas / primary `#f1e500`**: the page background and the fill of the footer "Abschicken" button. The site declares `--primary-2` and `--primary-3` as this value and `--primary-1` as a slightly deeper yellow, `#f2d500` (token `primary-deep`).
- **Ink `#000000`**: the most-read text color and the fill of the dark buttons in the header and service panels.
- **On-primary `#000000`**: black text on the yellow button.
- **Surface white `#ffffff`**: nav bar, footer text and the white hero headline.
- **Copy yellow `#e6e4c7`**: the site's `--copy-yellow`; body copy and the h3 in the footer form on the black panel.
- **Hairline `#d9d9d9`**: the most frequent border color, equal to the site's `--gray-20`.
- **Gray ramp**: `#212121`, `#313131`, `#6d6d6d`, `#f0f0f0` (`--gray-50`, `--gray-40`, `--gray-30`, `--gray-10`).
- **Secondary teal**: `#84D8D0`, `#3AC3B6`, `#038786` (`--secondary-1` to `--secondary-3`), declared in the root variables. The extraction does not record them painted on an element, so their use on the page is not measured.
- **Status colors**: success `#2FB65D`, warning `#FB9905`, error `#C32349`, declared in the root variables; not measured on screen.
- **Swatch strip**: six saturated colors, `#ff5c02`, `#06ff0a`, `#00f5ff`, `#1307ff`, `#cb00fe`, `#ff024f`, appear in the measured background list with near-zero area. They match the small row of colored squares beside the logo in the capture header.

Browser-default link blue seen on the "TL;TR" link in the capture is a user-agent color and is not a brand color.

## Typography

Three families are loaded: PP Neue Montreal, PP Fraktion Mono and "wasted". PP Neue Montreal, from the foundry Pangram Pangram, was designed by Mat Desjardins and Francesca Bolognini with Demande Spéciale, first released in 2018; the foundry page I opened lists 36 styles, a trial option and licences from $40. It carries 5,545 measured characters, far ahead of the mono (283) and the "wasted" face (294).

- **Display** 57.6px / 63.36px, weight 700: the white "Agentur" h1 on the hero. On the 390px mobile pass it measures 48px / 52.8px (`display-mobile`).
- **Heading** 13px / 14.3px, PP Fraktion Mono, weight 400, uppercase: section labels such as "LEISTUNGEN".
- **Subheading** 22.4px / 24.64px, weight 700: the footer form title "Schreibe uns eine Nachricht".
- **Body** 15px / 19.5px, weight 400.
- **Button** 14px / 18.2px uppercase; **button-secondary** 12px / 15.6px uppercase for the header CTA.
- **Nav** 13px / 16.9px; **input** 16px / 18.4px.

The extraction's character-weighted size list also contains runs at 163.2px, 137.6px and 83.2px: these are the oversized statistic and section words in the capture, and their exact family and weight were not recorded, so they are not tokens. Weights in use are only 400 and 700. No letter-spacing was recorded. PP Neue Montreal is a licensed commercial font; if it is unavailable, pick a neo-grotesque sans that offers 400 and 700 and recheck line-height against the measured 63.36px display line.

## Layout

The desktop pass measured a 1280px viewport and a 9,026px page height. The site declares `--site-header-height: 60px` and a block rhythm of `--block-margin-bottom-desktop: 80px` (mobile `50px`), exposed here as the `header-height`, `block-margin-desktop` and `block-margin-mobile` spacing tokens. The most frequent gaps are 20px (29 uses), 30px, 40px and 10px; frequent paddings are 8px, 15px, 20px, 11px and 50px.

Composition from the capture: a full-bleed photo hero, then large unbroken yellow fields, then a three-column service panel on a light-grey band. The left column is the vertical service list set at body size, the center is an oversized word or number, and the right is a short paragraph followed by a black "Mehr zu …" button. A mono "LEISTUNGEN ÜBERSPRINGEN" skip label and a row of small dot-matrix glyphs sit under the panel. The footer is a 1280 × 506px black block with white mono text: an address block starting "KONTAKT Hauptstraße 21, 7000 Eisenstadt", a message form and a newsletter field.

The header is a floating white bar measuring 730 × 40px that contains a house icon with the mono greeting, the dropdown items "Lösungen" and "Leistungen", "Cases", and the black CTA; the logo, a search icon and a language link sit outside the bar on the photo.

## Elevation & Depth

Depth is flat. No box shadow was measured on any rendered element (the extraction's shadow list is empty). Separation comes from three devices: full-bleed color fields (yellow, grey, black), a 1px border in the same color as the fill on every button, and the photograph itself, which sits behind the translucent header bar. The stylesheet corpus contains `0 1px 5px #00000026`, which belongs to the Borlabs cookie dialog, and the WordPress block-editor presets (`6px 6px 0px rgb(0, 0, 0)` and others) are declared as defaults without being measured on elements, so none of these are brand shadows.

## Shapes

One corner radius dominates: 7px, measured on 64 elements, including every button and the card token. Smaller 2px corners appear on 18 elements, 5px and 10px once each, 20px on three, and 40px on ten. Four elements use a 50% circle and the stylesheet declares 9999px pills. Input fields measured at 0px radius with 1px 2px padding and a 50px height. Dividers use the 1px `#d9d9d9` hairline. The small square glyph inside the dark CTA, visible in the capture, is a hard-cornered black square rather than a rounded icon.

## Components

- **Primary button** (`button-primary`): yellow `#f1e500` fill, black text, 14px uppercase PP Neue Montreal, 7px radius, padding `11px 30px 11px 15px`, 42px high, 1px border in the fill color. It is measured on the footer form ("ABSCHICKEN") and its mobile twin "ANMELDEN" is 350 × 40px.
- **Secondary button** (`button-secondary`): black `#000000` fill, white text, 12px uppercase, 7px radius, same asymmetric padding, 40px high, 150px wide for "JETZT ANFRAGEN". Service panels use the same black treatment at 14px for "MEHR ZU BRANDING & DESIGN" and similar labels, 42px high.
- **Nav link**: 13px, black, no underline at rest; on hover the measured state adds an underline with color and background unchanged.
- **Nav bar**: white `#ffffff` bar, 730 × 40px.
- **Text input**: 16px, 50px high, 1px 2px padding.
- **Card**: yellow canvas fill, black text, 7px radius, 20px padding.
- **Footer**: black fill, white mono text, 13px.
- **Link on dark**: `#e6e4c7` at body size.

A consent dialog from the Borlabs Cookie plugin (classes prefixed `brlbs`) was present and hidden before measuring; it is plugin UI and is not documented as brand UI.

## Design System Architecture

No public design system, brand guideline or press kit exists for digitalists: I opened `https://digitalists.at/` and `https://digitalists.at/ueber-uns/`, and neither links to one; the about page lists a "Branding & CI" service but publishes no guidelines. The de-facto system is a WordPress theme with custom properties on `:root`: `--primary-1..3`, `--secondary-1..3`, `--success`, `--warning`, `--error`, `--gray-10` to `--gray-50`, `--copy-yellow`, `--border-yellow` (a `color-mix` of primary-2 with black), `--site-header-height`, `--breadcrumbs-height` and the two block-margin variables. About 47 `--wp--preset--*` variables are WordPress defaults, and 156 `--dialog-*` plus 51 `--brlbs-*` variables belong to the cookie plugin; none of those are brand tokens. Typeface source: PP Neue Montreal is sold by Pangram Pangram (`https://pangrampangram.com/products/neue-montreal`); the other two families were not traced to a foundry page.

## Do's and Don'ts

- Do keep yellow `#f1e500` as the single dominant surface and put black `#000000` type on it; reserve white for the hero headline over photography.
- Do use PP Neue Montreal at 400 and 700 only, with mono PP Fraktion Mono uppercase for 13px section labels.
- Do give every button the 7px radius and the asymmetric `11px 30px 11px 15px` padding, with the 1px border matching the fill.
- Do keep playful German microcopy ("Hello World. Welcome home.", "Ihr habt genug von 0815?").
- Don't add drop shadows; none are measured.
- Don't use the teal, status or swatch colors as large surfaces; the extraction records no on-screen use of the teal and status values.
- Don't treat the cookie dialog, the WordPress preset gradients or the browser-blue link as part of the brand.
- Don't pair yellow text with yellow canvas: the only yellow button is placed on the black footer.

## Responsive Behavior

The extraction's mobile pass at 390px recorded: h1 "Agentur" at 48px / 52.8px (down from 57.6px / 63.36px on desktop), the first h2 "Branding & Design" at 28px / 30.8px, body text unchanged at 15px / 19.5px, the "ANMELDEN" button at 14px / 16.1px spanning 350px by 40px, and a navigation element 350 × 598px whose text starts "Lösungen, Leistungen, Cases" at 20px / 26px. The root variables declare the block margin falling from 80px to 50px on mobile. Breakpoints, the exact menu mechanism, grid column counts and tablet behavior were not measured.

## Iteration Guide

1. Start from the canvas: set `#f1e500`, ink `#000000`, and load PP Neue Montreal 400/700 before anything else.
2. Build the header as a white 40px bar with a mono greeting, dropdown links at 13px and one black 12px uppercase CTA.
3. Lay out a photo hero with a 57.6px bold white headline, then alternate flat yellow fields with grey and black bands.
4. Use the 80px block margin on desktop and 50px on mobile; keep component gaps in the measured 10 / 20 / 30 / 40px steps.
5. Add accents only from the declared palette and verify any new color against the extraction before shipping.
6. Re-run `node web/scripts/verify-designs.mjs --slug=digitalists-1` after edits; values must stay traceable to the measurements.
