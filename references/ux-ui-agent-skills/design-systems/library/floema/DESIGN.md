---
version: alpha
name: Floema
category: "Retail & E-commerce"
description: "Floema (sustainable urban signage and equipment): warm ivory #f2efea canvas, stone-brown #241f21 ink and buttons, flour-yellow #e9e778 footer, Zimula typeface with tight negative tracking (53.36px display, 14.67px body), white pill navigation, and floating product thumbnails."
colors:
  urban-coral: "#f76c46"
  golf-celadon: "#bacfa3"
  forest-green: "#042d2b"
  nature-kraft: "#c6af88"
  red: "#ff004d"
  creme: "#f4efd7"
  vista-blue: "#85a1c5"
  canvas: "#f2efea"
  ink: "#241f21"
  primary: "#241f21"
  on-primary: "#ebe7df"
  surface-yellow: "#e9e778"
  ink-muted: "#988f8b"
  surface-white: "#ffffff"
  ink-translucent: "#241f2180"
  hairline: "#241f211a"
typography:
  display:
    fontFamily: Zimula
    fontSize: 53.36px
    fontWeight: 400
    lineHeight: 56.028px
    letterSpacing: "-2.1344px"
  display-mobile:
    fontFamily: Zimula
    fontSize: 32px
    fontWeight: 400
    lineHeight: 33.6px
    letterSpacing: "-1.28px"
  heading:
    fontFamily: Zimula
    fontSize: 47.8px
    fontWeight: 400
    lineHeight: 52.58px
    letterSpacing: "-1.912px"
  body:
    fontFamily: Zimula
    fontSize: 14.67px
    fontWeight: 400
    lineHeight: 20.538px
    letterSpacing: "-0.2934px"
  button:
    fontFamily: Zimula
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
    letterSpacing: "-0.24px"
    textTransform: uppercase
  input:
    fontFamily: Zimula
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: "-0.32px"
rounded:
  xs: 8px
  sm: 12px
  md: 18px
  lg: 30px
  xl: 31.84px
  2xl: 40px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 11.9px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12.78px 16px
    height: 42px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 22px
  card:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.surface-yellow}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 86.03px 0px 0px
---

## Overview
Floema (floema.com/en, titled "Floema® — Spaces for people, made for life.") is the English site of a manufacturer of sustainable signage, furniture and equipment for public and urban spaces; its footer lists headquarters at Terras Velhas, s/n, Alcabideque, 3150-211 Conde. The capture opens on a warm ivory field where a cloud of small product thumbnails (street furniture, signage, a coral tile, a pale green tile) floats around the centred headline "Spaces for people, made for life." in a soft grotesque with tight tracking. At the top right the navigation is a row of white pill chips (PRODUCTS, ABOUT, SUSTAINABILITY, JOURNAL) with a language switch (EN) and a search icon at the left of the group. A pale yellow round chat or link control sits at the left edge and is not documented as brand UI. Below the hero, a full-bleed photograph of a city square with hotel facades is dimmed under a dark tint and carries a coral "Urban" tag, the headline "Signage, furniture, and equipment for welcoming urban spaces", a white pill button "SEE URBAN PRODUCTS", a numbered label (01, Made to Last), a "Scroll to Explore" cue and a white card offering the "Urban Catalogue" with a Download Now link. The measured page is 13,229px tall. The voice is calm and values-led ("Going beyond the expected is our calling").

## Colors
The palette is warm and earthy. The canvas is ivory #f2efea (the stylesheet's `--color-brightIvory50`) and ink is a stone brown #241f21 (`--color-stoneBrown800`), which is also the primary button fill, carrying text in a lighter ivory #ebe7df. The largest measured background area belongs to flour yellow, #e9e778, which fills the footer and appears as text on dark panels (421 characters). Supporting colors: #988f8b for captions, white #ffffff for cards and nav chips, a translucent #241f2180 for muted text and #241f211a for hairline borders. The stylesheet defines a full named palette: red #ff004d, creme #f4efd7, bright-ivory steps (#f9f8f6, #f2efea, #ebe7df, #e4ded3, #d2cdc4, #beb9b0), stone-brown steps (#e2dede, #c3bcbb, #988f8b, #7a716d, #524945, #241f21), forest green #042d2b, nature kraft #c6af88, urban coral #f76c46, golf celadon #bacfa3 and replastic vista blue #85a1c5. Coral appears on the Urban tag; celadon appears in a thumbnail tile.

## Typography
A single family, Zimula, is used at weight 400 throughout (1,977 measured characters). Its character comes from scale and tracking: every style carries negative letter spacing. The display style is 53.36px with a 56.028px line height and -2.1344px tracking; the section heading is 47.8px with a 52.58px line height and -1.912px tracking; body is 14.67px with a 20.538px line height and -0.2934px tracking; buttons are 12px uppercase with a 16.8px line height and -0.24px tracking; and the input is 16px with a 22.4px line height and -0.32px tracking. On a 390px viewport the headline measured 32px with a 33.6px line height and -1.28px tracking. Common character sizes are 14px (481), 14.67px (313), 17.78px (282), 12px (235), 47.8px and 53.36px.

Font substitutes: Zimula is a face loaded by the site, with `inherit`, Helvetica and `sans-serif` appearing as fallbacks in the stylesheet. A soft, slightly condensed grotesque with the same negative tracking is the nearest stand-in.

## Layout
The page measured 1280px wide and 13,229px tall. The first screen is exactly 800px high (the header block), with the headline centred and thumbnails scattered around it at varied sizes; subsequent sections are full-bleed bands. The footer is 1,211px high with 86.03px of top padding and lists headquarters details. Measured gaps are 6px, 5px, 12px, 4px, 23.79px, 32px and 16px, and paddings are 11.895px (52 uses), 12px, 10px, 17.455px and 16px. Cards and chips keep compact internal padding while the sections around them are generously spaced.

## Elevation & Depth
Shadows are soft and used sparingly: the CSS corpus lists `0 6px 12px #0000001a` and `0 12px 40px #0000001f`, though none was recorded on the measured visible cards. The capture shows depth by layering: white pills and the catalogue card float over photography, and a dark tint lowers the photograph so white text reads. Thumbnails float over the ivory background without shadow.

## Shapes
Shapes are mixed. Buttons measured 0px radius in the extraction (the EXPLORE button), while the visible nav items and the SEE URBAN PRODUCTS button are pill shaped, and cards measure 12px. The radius list in the page is 12px (17 elements), 30px (10), 100% and 50% (circles), 8px, 31.84px and 18px. The thumbnails are small rectangles with square or slightly rounded corners, and the catalogue card is a white 12px-radius card.

## Components
- **Primary button (EXPLORE):** #241f21 fill, #ebe7df text, Zimula 12px uppercase with -0.24px tracking, 42px high, 12.78px 16px padding, square corners in the measurement.
- **Navigation chips:** white pills with 12px uppercase text, in a group at the top right; a search icon and EN switch beside them.
- **Hero CTA (SEE URBAN PRODUCTS):** a white pill with dark text, with a round white handle at its left.
- **Tag:** a coral pill (Urban) with a small icon.
- **Catalogue card:** a white 12px-radius card with a title, a Download Now link with icon and a cover thumbnail in coral.
- **Text input:** 16px text, 22px high, 539px wide, no visible border in the measurement.
- **Footer:** flour-yellow #e9e778 fill with #241f21 text, headquarters address and link columns.

## Design System Architecture
No public or official design-system documentation for Floema was opened for this entry, and no brand-guideline link appeared on the pages measured. The shipped CSS exposes a clearly named token layer on the root element: `--body-backgroundColor`, `--color-black`, `--color-white`, `--color-red`, `--color-creme`, `--color-flourYellow`, the ivory scale (`--color-brightIvory25` to `400`), the stone-brown scale (`--color-stoneBrown100` to `800`), `--color-forestGreen600`, `--color-natureKraft`, `--color-urbanCoral`, `--color-golfCeladon` and `--color-replasticVistaBlue`, plus viewport helpers (`--computed-100vh`). Measured source: https://floema.com/en (extraction of 2026-10-09).

## Do's and Don'ts
- Do build on ivory #f2efea with stone-brown #241f21 ink and use flour yellow #e9e778 for the footer and accent panels.
- Do set all text in Zimula with negative tracking at every size.
- Do show products as small thumbnails floating around the headline, and project photography with a dark tint.
- Do use white pill chips for navigation.
- Don't add a second typeface; the page is Zimula only.
- Don't use coral or celadon as page surfaces; they mark tags and thumbnails.
- Don't treat the chat-like round control at the left edge as brand UI.

## Responsive Behavior
The 390px mobile pass measured the headline at 32px with a 33.6px line height and 270px width, the EXPLORE button at 114px wide and 39px high, body text at 14px with a 19.6px line height and 296px width, the first block at 844px high, and most-read sizes of 14px, 16px, 30px, 12px, 32px and 28px. How the navigation chips, the thumbnail cloud and the bands rearrange at other widths was not measured, and no breakpoints were recorded.

## Iteration Guide
1. Set the page on ivory #f2efea with #241f21 text.
2. Set the headline in Zimula 53.36px (32px on mobile) with -2.1344px tracking.
3. Use white pills for navigation and a dark #241f21 button for EXPLORE.
4. Put photography full-bleed with a dark tint under white text, and use a coral tag for the category.
5. End with a flour-yellow footer.
6. Use the named ivory and stone-brown steps for any additional neutrals.
