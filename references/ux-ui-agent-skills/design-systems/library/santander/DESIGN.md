---
version: alpha
name: Santander
category: "Banking & Insurance"
description: "Santander Group corporate site at santander.com/en. White canvas, brand red #ec0000, proprietary Santander Headline and MicroText fonts with a 48px hero headline, a 47px Online Banking button with 4px corners, pale blue statistic tiles and a #f7f7f7 footer."
colors:
  canvas: "#ffffff"
  page-largest: "#fbfdfd"
  ink: "#000000"
  primary: "#ec0000"
  surface-2: "#767676"
  surface-3: "#f6fafc"
  ink-3: "#727272"
  ink-4: "#444444"
  ink-6: "#333a42"
  nav-link-bg: "#0000004d"
  footer-bg: "#f7f7f7"
typography:
  display:
    fontFamily: SantanderHeadline-Regular
    fontSize: 48px
    fontWeight: 400
    lineHeight: 60px
  heading:
    fontFamily: SantanderHeadline-Regular
    fontSize: 18px
    fontWeight: 500
    lineHeight: 18px
    textTransform: uppercase
  body:
    fontFamily: SantanderMicroText-Regular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  link:
    fontFamily: SantanderMicroText-Regular
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17px
  button-secondary:
    fontFamily: SantanderHeadline-Bold
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23px
    letterSpacing: 1.6px
    textTransform: uppercase
  input:
    fontFamily: SantanderMicroText-Regular
    fontSize: 24px
    fontWeight: 300
    lineHeight: 34px
rounded:
  xs: 4px
  sm: 34.5px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 11px 70px 11px 32px
    height: 47px
  link:
    textColor: "{colors.ink-4}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    backgroundColor: "{colors.nav-link-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 15px 0px 15px 16px
    height: 62px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-6}"
---

# Santander

## Overview
The measured page is https://www.santander.com/en/home, titled "Santander Corporate Website": the group's corporate home rather than a retail banking site. It is 1280px wide and 6610px tall at measurement. A thin top strip reads "Are you looking for your online banking?" with a red "ONLINE BANKING" button and a dropdown chevron. Under it the white Santander flame-and-wordmark logo sits at the left of a transparent header with About us, Our approach, Shareholders and investors, Press room and Careers, and a share-price ticker at the right. The hero is a full-bleed photograph (a rocky coastline in the capture) with a small label "STEPPING INSIDE", a 48px white headline, a red "FIND OUT MORE" button and carousel dots; a vertical rail of white icons (menu on a red square, search, language, chart, share) is pinned at the left. Below the hero, a statement "We're a retail bank with a global presence" sits next to a 2 by 2 grid of statistic tiles: a solid red tile with "182 mn customers in Europe and the Americas*", and pale blue tiles for 30 years of education support, 185,279 employees and 3.5 mn shareholders. A "Press room" section with a short red underline follows, with two large photo cards, a "PRESS ROOM" link with a long arrow, and a "Public Policy & Research Centre" photo banner.

## Colors
Santander red `#ec0000` is the one brand color: the Online Banking button, the 1px borders (`#ec0000` appears three times as a border color), the active menu square, statistic highlight tile, arrow links and the short rule under section titles. The button hover measured as `rgb(204, 0, 0)` (`#cc0000`). Neutrals: `#000000` ink, `#444444` article copy, `#333a42` footer text, `#727272` and `#767676` for muted content. Surfaces: `#ffffff` canvas, `#fbfdfd` as the largest-area near-white, `#f6fafc` pale blue-grey tiles and `#f7f7f7` for the footer. The sole non-red border is `#deedf2`, a pale blue used on stat tiles, with a soft shadow `rgba(155, 195, 211, 0.2) 0px 0px 16px 0px` in the same hue. The nav-link hover layer is `#0000004d`.

## Typography
Santander ships its own faces, all measured as loaded fonts: SantanderHeadline-Regular and SantanderHeadline-Bold for headlines and buttons, and the SantanderMicroText family (Regular, Bold, Italic, Light) for text; `icomoon` is the icon font. The hero headline is Headline-Regular 48px on a 60px line height; the small kicker "STEPPING INSIDE" is 18px uppercase at weight 500; the Online Banking button is Headline-Bold 16px uppercase with 1.6px letter spacing; body copy is MicroText-Regular 16px (28px line height in cards, 24px on the body element); small links are 12px on 17px; the search input is MicroText 24px at weight 300. The size ladder by characters: 16px (3597), 14, 20, 30, 32, 24, 26, 11 and 48px. Footer headings use Headline-Bold 16px uppercase.

## Layout
The home runs on wide bands inside generous left and right gutters of about 85px in the capture, with the hero edge to edge. The statistics grid is two columns of tiles; press cards are two columns with a large photograph above a pale panel containing a bold 21px to 24px title and copy. The footer is 927px tall on `#f7f7f7`, with "USEFUL LINKS" and columns for local banks, asset management and consumer finance. Spacing values measured: 4, 5, 6, 8, 10, 11, 12, 15, 16 and 20px; the Online Banking button pads 11px 70px 11px 32px.

## Imagery and Voice
Imagery is editorial photography at large scale: a wave-battered volcanic coastline with a low building row in the hero, an illuminated map of Europe with glowing red nodes for a payments story, a glass-fronted building among olive trees, and a crowd shot behind the policy and research banner. Photographs are cropped wide and carry no frames. The voice is institutional and factual: "We're a retail bank with a global presence", figures with an asterisk and a footnote "*Data as of June 2026", press releases labelled with a source line such as "PRESS RELEASES · GETNET" and a date in day/month/year form. Calls to action are short uppercase phrases (FIND OUT MORE, ABOUT US, PRESS ROOM), always followed by a thin arrow, and article cards state the topic, the date and a two-line summary. The header also shows a live share-price ticker with the "MAD" exchange code, a figure in euros and a percentage change in red.

## Elevation & Depth
Almost flat. The only measured shadow is the pale blue glow `rgba(155, 195, 211, 0.2) 0px 0px 16px 0px`. Depth is built with full-bleed photography, a dark translucent scrim under hero text and the solid red tile that stands out from pale tiles.

## Shapes
Radii measured: 34.5px (8 elements, round-ish icon and chip shapes), 100% (6 circular controls), 4px, and two asymmetric button corners, `4px 0px 0px 4px` on the Online Banking button and `0px 4px 4px 0px` on the adjoining chevron button. Cards and tiles compute square.

## Components
**Online Banking button:** `#ec0000` fill, white Headline-Bold 16px uppercase, 1.6px tracking, 47px high, padding 11px 70px 11px 32px, left corners 4px, paired with a chevron button with right corners 4px; hover darkens to `#cc0000`. No primary-button role was detected by the extractor, so the red action is recorded as `button-secondary`. **Nav link:** MicroText 16px, hover layer `#0000004d`. **Search input:** white, 24px weight 300, 62px high, 16px left padding. **Statistic tile:** a number at about 24px with "mn" suffix and a 12px caption, on `#f6fafc` or solid red with white text. **Text link:** red 12px uppercase with a thin long arrow. **Footer:** `#f7f7f7` background with `#333a42` uppercase headings.

## Design System Architecture
No public design system or brand guideline was opened; `_research` records `none: true`. No root CSS custom properties were measured (`rootVars` is empty). The de-facto system is a set of self-hosted brand font files and one red, applied by class. Source: https://www.santander.com/en/home measured into web/data/extracted/santander.json.

## Do's and Don'ts
- Do use `#ec0000` as the sole accent; reserve it for the Online Banking action, key tile and links.
- Do set headlines in Santander Headline and text in Santander MicroText.
- Do put large photography under white headline text in the hero.
- Do keep corners square on cards and tiles and 4px on buttons.
- Don't add a second brand color; the pale blue is a surface and border only.
- Don't use heavy shadows; the one shadow is a 0.2-opacity blue glow.
- Don't use the icon font `icomoon` as a text face.

## Responsive Behavior
The 390px mobile pass recorded the menu control as a 38px icomoon "Menu" glyph with 6px padding (50px high), the h2 kicker staying 18px uppercase, and body copy dropping to 14px on a 24px line height with color `#444444`. Card stacking, header layout, hero height and hidden elements on mobile are not measured.

## Iteration Guide
1. Canvas `#ffffff`, ink `#000000`, brand red `#ec0000`, hover `#cc0000`.
2. Headline 48px/60px Headline-Regular; body 16px MicroText; buttons Headline-Bold 16px uppercase with 1.6px tracking.
3. Statistic tiles: one solid red, the rest `#f6fafc` with the pale blue glow.
4. Section titles with a short red rule below and a thin arrow link at the end.
5. Footer `#f7f7f7` with `#333a42` headings.
6. Run `node web/scripts/verify-designs.mjs --slug=santander`.
