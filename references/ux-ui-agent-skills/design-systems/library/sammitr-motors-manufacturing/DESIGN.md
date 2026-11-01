---
version: alpha
name: Sammitr Motors Manufacturing PLC
category: "Thai Brands"
description: "Corporate site of Sammitr Motor Manufacturing PLC, a Thai logistics-transport and automotive-parts maker. White canvas, a saturated red #ed1b25 nav bar and accents, Athiti display headings at 40.8px/600 over Roboto 16px body, pill-shaped 99px secondary buttons and a charcoal #2c2c2c footer."
colors:
  canvas: "#ffffff"
  ink: "#111111"
  primary: "#ed1b25"
  on-primary: "#ffffff"
  surface-muted: "#f2f2f2"
  ink-muted: "#666666d9"
  ink-soft: "#f1f1f1"
  ink-subtle: "#999999"
  ink-black: "#000000"
  hairline: "#0000000d"
  link: "#ed1b24"
  button-text: "#666666"
  nav-bg: "#ffffffe6"
  footer-bg: "#2c2c2c"
typography:
  display:
    fontFamily: Athiti, sans-serif
    fontSize: 40.8px
    fontWeight: 600
    lineHeight: 53.04px
  display-mobile:
    fontFamily: Athiti, sans-serif
    fontSize: 33.6px
    fontWeight: 600
    lineHeight: 43.68px
  heading:
    fontFamily: Athiti, sans-serif
    fontSize: 30.72px
    fontWeight: 600
    lineHeight: 39.936px
  subheading:
    fontFamily: Athiti, sans-serif
    fontSize: 36.8px
    fontWeight: 400
    lineHeight: 51.52px
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: Athiti, sans-serif
    fontSize: 12.8px
    fontWeight: 600
    lineHeight: 20.48px
    letterSpacing: 0.384px
    textTransform: uppercase
  nav:
    fontFamily: Roboto, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 32px
    textTransform: uppercase
rounded:
  xs: 2px
  md: 99px
  pill: 9999px
spacing:
  s1: 10px
  s2: 14px
  s3: 15px
  s4: 15.36px
  s7: 20px
  s8: 24px
  s9: 35px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.button-text}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 15.36px
    height: 33px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.12) 0px 1px 3px -2px, rgba(0, 0, 0, 0.24) 0px 1px 2px 0px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
---

# Sammitr Motors Manufacturing PLC

## Overview
The measured page is the English home of Sammitr Motor Manufacturing PLC at https://www.sammitr.com/en/home/. The capture shows a white page under a red horizontal navigation band. The hero is a full-width photograph of a fleet of white box trucks and tippers under a blue cloudy sky, with the company name in red capitals and the line "Leader in Logistics Transport Solutions and Automotive Business" beneath it. Below the hero a centered heading, "Sammitr Product", introduces a stack of large photographic tiles: a full-width logistics trailer tile, a two-up pair of tiles for parts and OEM work, a two-up pair for ground support equipment and the SMM Pro truck dealership, and a full-width steel canopy tile. The tone is industrial and plain: product categories are named in sentence case on top of the photographs, and the page makes no attempt at lifestyle imagery. Red is the single brand color; everything else is white, light grey or charcoal.

A cookie consent banner with an orange-red button (#ff4326) sits over the lower hero in the capture. It is a third-party consent control, not brand UI, so its color and Arial button type are not documented as tokens here. The primary-role override recorded in SOURCES.json points to the "READ MORE" pill instead.

## Colors
The brand color is red. The site declares one root variable, `--primary-color: #ed1b25`, and the same value fills the navigation band and the product tiles' gradient starts. It is recorded as `primary`. A near-identical `#ed1b24` colors inline links and is kept as `link`. Text is `#111111` for headings on white, a translucent grey `#666666d9` for the header utility text, `#999999` for subdued copy, and `#f1f1f1` for body text laid over photography and dark bands. Surfaces are `#ffffff` (canvas, the dominant area), `#f2f2f2` for light panels, and `#2c2c2c` for the footer. The header background is white at 90 percent opacity (`#ffffffe6`). The only border color measured is `#0000000d`, a barely visible hairline used on the pill button. The cookie button's `#ff4326` also appears in the extraction but is excluded, as noted above.

## Typography
Two families carry the brand. Athiti (400, 500, 600 and 700 loaded) is used for headings and buttons: the page h1 "Sammitr Product" is 40.8px at weight 600 with a 53.04px line height, the h2 is 30.72px at 600, and the h3 tile titles are 36.8px at 400. Roboto 400 is the body face at 16px on a 25.6px line height. The navigation links are measured at 32px Roboto 700 uppercase in the nav-link role, while the visible header utility links are 12.8px Athiti 600 uppercase with 0.256px tracking. Buttons use Athiti 12.8px at 600 with 0.384px letter spacing, uppercase. Tahoma is the declared body-element family at 14.5px; Dancing Script and the icon font `fl-icons` are also loaded. Thai text on the page falls back through Athiti and the `kanit` family, which appears in the character-frequency measurement. On mobile the h1 is 33.6px with a 43.68px line height and the h2 is 23.04px.

## Layout
The measured desktop page is 1280px wide and 3689px tall. The structure is a header with logo and language switch, a red nav band, a hero, then a centered content column of image tiles. Tiles alternate between full-width and half-width, with generous vertical gaps. Spacing values measured on the site include 10px, 14px, 15px, 15.36px, 17px, 19.2px, 20px, 24px, 35px and 50px. Content sections are separated by tile edges rather than rules. The footer is a dark band `#2c2c2c` with white text at weight 300.

## Imagery and Voice
Photography is literal and product-first: trucks lined up in a yard, an industrial robot arm on a red set, a welding fixture, a ground support tug beside an aircraft, a dealership forecourt and pickup trucks with steel canopies. Tile photographs are tinted with red or grey washes so white overlay titles stay readable. Microcopy is short and nominal ("Parts and Spare Parts", "OEM", "Steel Canopy and Accessories"), in English on the measured page with Thai alongside in the cookie notice and language switch. The company tagline appears both in the hero and in the footer.

## Elevation & Depth
Depth is minimal. The pill button carries a two-layer soft shadow, `rgba(0, 0, 0, 0.12) 0px 1px 3px -2px, rgba(0, 0, 0, 0.24) 0px 1px 2px 0px`. Other measured shadows are a diffuse `rgba(0, 0, 0, 0.15) 1px 1px 10px 0px` and `rgb(128, 128, 128) 0px 0px 5px 0px`. The sticky-looking header is translucent white rather than shadowed. Tiles are flat photographs with text overlays.

## Shapes
Measured radii are 2px, 6px, 99px and 999px. The 6px value belongs to the cookie button and is not carried into the tokens. The brand's visible shape language is the 99px pill used by the "READ MORE" button, plus a 9999px full-pill token for fully rounded controls; everything else (tiles, nav band, footer) computes square corners.

## Components
**Button (primary role override):** the white pill "READ MORE" with `#666666` Athiti 12.8px uppercase text, 15.36px horizontal padding, 33px height, a `#0000000d` 1px border and the soft shadow above. **Navigation:** a white translucent header with language links (Thai and English) and a red band of uppercase items with dropdown chevrons: Sammitr, Sammitr Product, Service Centers and Spare Parts, Promotion and News, Career, Contact. Measured hover on a red-band item changes the background from transparent to `rgb(190, 7, 16)`; utility links change text from `rgba(102, 102, 102, 0.85)` to `rgba(17, 17, 17, 0.85)`. **Product tiles:** photo backgrounds with a title in Athiti 400 white at the lower left. **Footer:** charcoal with the company name and tagline.

## Design System Architecture
No public design system or brand guideline was found; the research record lists only the pages that were opened. The de-facto system is a WordPress-style theme: the root variable `--primary-color` is the only custom property measured, and the icon font `fl-icons` plus Dancing Script come from the theme's loaded fonts. Typography is assigned per role (Athiti for headings and buttons, Roboto for body). Source of measurement: https://www.sammitr.com/en/home/ via web/data/extracted/sammitr-motors-manufacturing.json.

## Do's and Don'ts
- Do use `#ed1b25` as the single accent for navigation, headings highlights and tiles.
- Do pair Athiti 600 headings with Roboto 16px body text.
- Do keep buttons as small uppercase pills with a hairline border.
- Do let photography of vehicles and equipment carry the page.
- Don't use the cookie banner's `#ff4326` as a brand color.
- Don't add radii other than the square default and the 99px pill.
- Don't invent a dark theme; none was measured.

## Responsive Behavior
Only the 390px mobile pass was measured. It recorded a menu toggle visible (`menuToggleVisible: true`), two header links visible and a maximum of two card columns. The mobile header is 70px tall, white at 90 percent opacity, with 16px Roboto text in `#333333`. The h1 drops to 33.6px and the h2 to 23.04px; body text stays 16px on a 25.6px line height and the "READ MORE" pill keeps its 99px radius. Product tile titles measure 20.9px on mobile. Tablet breakpoints, hover behaviour on touch and any other breakpoints are not measured.

## Iteration Guide
1. Start from canvas `#ffffff`, ink `#111111`, accent `#ed1b25`.
2. Set headings in Athiti 600 (40.8px for page titles) and body in Roboto 16px/25.6px.
3. Build buttons as 33px-high pills, radius 99px, text `#666666`, 12.8px uppercase, hairline `#0000000d`.
4. Use a red nav band with white uppercase labels and a darker `rgb(190, 7, 16)` hover.
5. Fill content with edge-to-edge photographic tiles with white overlay titles, and close with a `#2c2c2c` footer.
6. Verify with `node web/scripts/verify-designs.mjs --slug=sammitr-motors-manufacturing`.
