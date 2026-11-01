---
version: alpha
name: Anantara Hotels & Resorts
category: "Thai Brands"
description: "Anantara Hotels & Resorts: warm sand canvas #f9f5f3, taupe accent #a48e82, charcoal text #4a4a4a, Raleway ultra-light 100-weight display at 50px with Oswald letterspaced uppercase buttons, 2px corners, luxury resort portfolio."
colors:
  canvas: "#f9f5f3"
  ink: "#4a4a4a"
  primary: "#a48e82"
  on-primary: "#ffffff"
  surface-sand: "#ede8e6"
  ink-muted: "#999999"
  on-dark-soft: "#ffffffe6"
  hairline: "#707070"
typography:
  display:
    fontFamily: Raleway, Helvetica, Arial, sans-serif
    fontSize: 50px
    fontWeight: 100
    lineHeight: 62.5px
    letterSpacing: 1px
  subheading:
    fontFamily: Oswald, "Arial Narrow", sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 3px
    textTransform: uppercase
  body:
    fontFamily: Raleway, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
  button:
    fontFamily: Oswald, "Arial Narrow", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 4.2px
    textTransform: uppercase
  nav:
    fontFamily: Raleway, Helvetica, Arial, sans-serif
    fontSize: 11.2px
    fontWeight: 700
    lineHeight: 16.8px
    textTransform: uppercase
  input:
    fontFamily: Raleway, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: 0.7px
rounded:
  xs: 2px
  sm: 4px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 9px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 21px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 9px 20px
    height: 60px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 9px 20px
    height: 39px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    padding: 3px
  nav:
    textColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    padding: 3px
  text-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    padding: 10px
    height: 50px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
---

## Overview

Anantara's English home page (anantara.com/en) is a destination directory for a worldwide hotel and resort collection. The measured page is 1280px wide and 5662px tall. The first screen is a full-bleed photographic hero under a dark header strip that carries a row of language links (Thai, Simplified Chinese, Japanese, Arabic, German, Spanish, French, Italian, Hebrew, Korean, Dutch, Portuguese, Russian, Vietnamese), a centered logo, "My Booking", "Log in", "Sign up", a "Book now" button and a menu row. Below it a sand-colored panel headed "Begin your journey in..." lists every country, city and property in four columns. The remainder alternates full-bleed photography (sunset over a river lodge, a Maldives sailing scene, a Vespa in Italy, manta rays) with sand-colored text bands, and ends in a charcoal footer.

The character is calm and unhurried: very light display type, wide letter-spacing on small uppercase labels, muted taupe as the only accent, and photography doing most of the emotional work. The capture also shows a cookie-consent dialog over the hero. That dialog is a third-party consent layer and is not documented here as brand UI; the tokens in this file come from the page behind it (the extractor reports the canvas confirmed against capture pixels).

## Colors

The palette is small and warm. `canvas` is {colors.canvas} (#f9f5f3), the sand background that carries about 8900 units of measured area weight, the largest of any background. `surface-sand` ({colors.surface-sand}, #ede8e6) is a slightly deeper sand used for secondary bands. `ink` ({colors.ink}, #4a4a4a) is the most-read text color on the page, and the same value is the footer background. `primary` ({colors.primary}, #a48e82) is a taupe that fills the "View all hotels and resorts" button, the country labels in the destination list and the large "Begin your journey in..." heading. `on-primary` is white. `ink-muted` is #999999 for quiet captions, `on-dark-soft` is a 90% white (#ffffffe6) used for text over photography, and `hairline` is #707070, the border color of the text input.

Other measured values are present in the page CSS but not promoted to tokens: the stylesheet declares `--textLinkColor: #a48e82` (the same taupe), `--button-default-hover-bg-color: #7f8288` for button hover, and per-property accent variables such as `--mn_naladhu_color`. A black (#000000) and a translucent charcoal (#323232f2) appear as backgrounds; the latter belongs to the consent dialog.

## Typography

Two families are loaded: Raleway (weights 100, 300, 600, 700 reported by the font loader) and Oswald 400. Raleway carries 4994 measured characters and Oswald 338.

- `display`: Raleway 100 at 50px with 62.5px line height and 1px letter spacing, in taupe. On this page it is the "Begin your journey in..." heading (the extractor took the largest hero text, an h2, because the page has no visible h1).
- `subheading`: Oswald 400, 12px, 18px line height, 3px tracking, uppercase, charcoal ("ANANTARA SIGNATURE EXPERIENCES").
- `body`: Raleway 400 at 16px.
- `button`: Oswald 400, 14px, 21px line height, 4.2px letter spacing, uppercase.
- `nav`: Raleway 700, 11.2px, 16.8px line height, uppercase.
- `input`: Raleway 300, 14px, 24px line height, 0.7px tracking.

Raleway and Oswald are both open-source families, so no substitute is needed. The generic fallbacks measured in the stack are Helvetica, Arial and "Arial Narrow".

## Layout

The page is a single 1280px-wide column of full-width bands. The destination panel is a four-column list; the extractor measured a maximum of 5 card columns on desktop. Spacing values measured on the page are small and irregular (3, 5, 9, 10, 12, 15, 16, 20, 21 and 25px); there is no single base unit. Photography bands run edge to edge, with centered white text and a single button laid over the image. The signature-experience grid is a two-by-two mosaic of full-bleed photos, and a social grid of nine square photos follows.

## Elevation & Depth

Depth is almost entirely photographic. The page CSS contains a few shadows: `0 -1px 0 transparent, 0 0 2px rgba(0,0,0,.12), 0 2px 4px rgba(0,0,0,.24)` (11 uses), `0 15px 19px 1px rgba(0,0,0,.15)` (5 uses), and Bootstrap-style inset shadows (`inset 0 1px 1px rgba(0,0,0,0.075)`, 8 uses). Most elements (31 declarations) use no shadow. Surfaces are separated by flat color changes between sand, deeper sand and charcoal.

## Shapes

Corners are nearly square. The primary button uses {rounded.xs} (2px). The CSS corpus also contains 4px (49 uses, the most common), 3px, 6px, 10px and 80px radii, and the token set keeps `sm` at 4px and `pill` at 9999px. Hairline borders in the input use 1px solid #707070. Images are rectangular and edge to edge.

## Components

- `button-primary`: taupe fill {colors.primary}, white text, Oswald uppercase with 4.2px tracking, 2px radius, padding 9px 20px, 60px tall (measured on "View all hotels and resorts").
- `button-secondary`: same fill and type, 39px tall, 2px radius.
- `text-input`: 50px tall, 10px padding, 1px #707070 border, Raleway 300 at 14px.
- `nav-link` / `link`: Raleway 700, 11.2px uppercase, white on the dark header strip.
- `footer`: charcoal {colors.ink} background with white text.

The other visible patterns are the destination list (a taupe uppercase country label, a bold city line and indented property links with a chevron), the 10/10 Exclusives promotion with left and right arrows and pagination dots, and the "Minor DISCOVERY" loyalty band. These are described qualitatively; no per-element sizes were measured for them.

## Design System Architecture

No public design system or brand-guidelines page was found linked from the home page that was opened, so this file describes the de-facto system. The page ships its own CSS with named custom properties: `--button-default-bgcolor`, `--button-default-textcolor`, `--button-default-hover-bg-color`, `--button-revert-*` (an outline variant that is transparent with a taupe border) and `--button-text-size: 12px`, plus `--textColor`, `--titleColor`, `--textLinkColor` and `--white`. The root also declares property-level brand colors such as `--mn_navy`, `--an`, `--av`, `--nc`, `--nh`, `--oaks` and `--ti`, which indicates that the shared stylesheet serves multiple brands of the same group; only the taupe and charcoal values are measured on this home page. Breakpoints in the CSS corpus include min-width 1025px, max-width 1024px, max-width 766px and min-width 767px.

## Do's and Don'ts

- Do use the light Raleway 100 weight only for large display headings; the measured size is 50px.
- Do set buttons and small labels in Oswald uppercase with wide tracking (3px to 4.2px).
- Do keep corners at 2px on buttons.
- Do let photography carry sections and keep text over images white.
- Don't introduce a second accent next to taupe #a48e82 on the home page.
- Don't use heavy shadows; the page relies on flat sand and charcoal surfaces.
- Don't treat the consent dialog, language strip or scrim as part of the brand component set.

## Responsive Behavior

Not measured. The extractor's 390px mobile pass returned an access-denied page ("Sorry, you have been blocked") rather than the real home page, so no mobile typography, navigation or layout values are recorded for the page. The only responsive evidence is the list of media-query breakpoints found in the desktop CSS (1025px, 1024px, 766px, 767px, 768px); what changes at each breakpoint was not measured.

## Iteration Guide

1. Start from the sand canvas {colors.canvas} and charcoal ink {colors.ink}; add taupe {colors.primary} only for buttons, labels and the one large heading.
2. Copy the button exactly: Oswald 14px, 4.2px tracking, uppercase, 2px radius, 9px 20px padding.
3. Set display headings in Raleway 100 at 50px / 62.5px with 1px tracking.
4. Re-measure on the mobile page with a non-blocked session before writing any mobile rule.
5. Run `node web/scripts/verify-designs.mjs --slug=anantara` after any token rename.
