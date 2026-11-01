---
version: alpha
name: Tengile MalaMala Collection
category: "Food & Beverage"
description: "Luxury safari collection in Greater Kruger and Sabi Sand: warm bone canvas #f5eee9, deep olive ink #373f1d, moss green #5c6e21 footer, PP Fragment light display at 106.667px/220 over Inter 14-16px, square corners with 2px and 4px radii, no shadows."
colors:
  canvas: "#f5eee9"
  ink: "#373f1d"
  primary: "#5c6e21"
  surface-sand: "#e3e1d4"
  surface-white: "#fbf8f6"
  ink-muted: "#a5a593"
  moss-button: "#788843"
typography:
  display:
    fontFamily: "\"PP Fragment\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 106.667px
    fontWeight: 220
    lineHeight: 96px
    letterSpacing: "-2.13333px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"PP Fragment\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 48.75px
    fontWeight: 220
    lineHeight: 43.875px
    letterSpacing: "-0.975px"
    textTransform: uppercase
  heading:
    fontFamily: "\"PP Fragment\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 310
    lineHeight: 36.8px
  subheading:
    fontFamily: "\"PP Fragment\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 310
    lineHeight: 24px
  body:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.16px"
  nav:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: "-0.14px"
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
  md: 14px
  lg: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 7.11px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14.22px
  s8: 16px
  s9: 17.78px
  s10: 20px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.canvas}"
    padding: 14.2222px 0px 4px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 12px
  button-mobile:
    backgroundColor: "{colors.moss-button}"
    textColor: "{colors.surface-white}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 12px
    height: 40px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface-sand}"
---

## Overview

Tengile MalaMala Collection (https://tengilemalamala.com/, page title "Luxury Safari Experiences in Greater Kruger & Sabi Sand") presents two lodges and three camps along the Sand River in Mpumalanga, South Africa. The page is a long editorial scroll, 10,761px tall at a 1280px viewport. It opens on a full-bleed photographic hero of a guide crouching in grass, with the headline "UNMATCHED ABUNDANCE" set in huge, thin, uppercase serif letters staggered across two lines, a short offer line ("A rare opportunity for you to experience and protect one of Africa's most iconic wildernesses.") and an "Explore Collection" link with an arrow box. A dashed green and mustard strip divides the hero from the cream body.

Below, the voice is calm and conservation-led: large serif statements, narrow Inter captions, and tall photographs of elephants, a leopard, wild dogs, lodges and staff. Sections are labelled with tiny uppercase tags (for example "UNMATCHED ABUNDANCE", "ACCOMMODATION", "LODGES", "CAMPS", "OUR STORY", "CONSERVATION", "COMMUNITY"). The page closes on a moss-green footer. A cookie banner (Settings, Decline All, Accept All) appears over the hero in the capture; it is a consent control and is not documented as brand UI.

## Colors

The page is a warm neutral with one green family. `canvas` is bone `#f5eee9`, the body background; `ink` is deep olive `#373f1d`, which carries 3,184 of the measured text characters, and the body element computes exactly that pair. `primary` is moss `#5c6e21`: it fills the footer (measured background `#5c6e21`, weight 1667) and colors the large editorial statements (weight 598 characters). Sand `#e3e1d4` is the largest measured background by area (9,730) and is the footer text color and the nav hover color. `#fbf8f6` is an off-white used for text over photography and as a small fill; `#a5a593` is a muted taupe that appears as a border color and in 32 characters of text.

The nav sits over the hero in `#f5eee9`. On hover the nav links ("ENQUIRE", "MENU") shift to `#e3e1d4` and the "Explore Collection" link flips from `#373f1d` to `#f5eee9`, with no background change recorded. In the 390px mobile pass the extractor found a 40px-high "EXPLORE" button filled `#788843` with `#fbf8f6` text and a 4px radius; that is the only filled button measured, so it is kept as `moss-button`. The desktop pass detected no primary CTA.

## Typography

Two families. PP Fragment (a variable face, weights measured at 220 and 310) is the voice of the brand: the h1 "UNMATCHED ABUNDANCE" at 106.667px/96px weight 220, uppercase, letter-spacing -2.13333px; h2 statements at 32px/36.8px weight 310; h3 card titles ("Tengile River Lodge") at 20px/24px weight 310. Inter (400 and 500) handles reading and UI: body at 16px/20px weight 400 with -0.16px tracking, nav and buttons at 14px/14px weight 500 uppercase with -0.14px tracking, captions at 12px. Other measured sizes are 18px, 40px and 42.6667px (the large green statements). All Inter tracking is slightly negative, about -0.01em. On mobile the h1 is 48.75px/43.875px and the h2 28px/32.2px; body stays at 16px.

Both families are served by the site, so no substitution is needed; the fallback stack in the CSS is "Helvetica Neue", Helvetica, Arial, sans-serif.

## Layout

The grid is a 1440-based fluid system: the root variable `--size` is `1440`, and several measured gaps and paddings are fractional (14.2222px, 28.4444px, 35.5556px, 71.1111px, 88.8889px, 142.222px), consistent with values scaled from a 1440 design width. The h1 spans 1252px of the 1280px viewport. Copy blocks are asymmetric: a narrow 308px caption column on the left, a wide 619px statement column on the right. Photographs run full-height in staggered columns. The accommodation and camps sections lay out up to 5 card columns on desktop (measured `maxCardColumns: 5`). The footer is 502px high and lists EXPLORE, About, Accommodation, Experiences, Conservation and Partner.

## Elevation & Depth

Flat. The extraction recorded no box-shadows; hover states report `boxShadow: none`. Depth comes from full-bleed photography, text laid over images in `#f5eee9`, and the tonal step between bone canvas, sand and moss. The footer uses `clip-path: inset(0px)`, which is a reveal mechanism rather than a shadow. Keep surfaces unshadowed.

## Shapes

Radii measured by frequency: 2px (25 elements), 4px (9), 24px (6), 50% (4) and 14px (2). The CSS corpus also lists 12px, 60px and 100px, but 100px and 50% are not tied to a measured button. The mobile "EXPLORE" button is 4px. Images and the header/footers compute to 0px. Treat the system as square with small 2-4px softening on controls and circular masks for small round elements.

## Components

**Navigation.** A 32px-high transparent header over the hero with "ENQUIRE" at the left and "MENU" at the right, 14px uppercase Inter weight 500 in `#f5eee9`; the links are 38px high (84px wide for ENQUIRE) with 12px padding. A centered wordmark (TENGILE MALAMALA COLLECTION) sits at the top of the capture.

**Hero link.** "Explore Collection" in 14px weight 500, -0.28px tracking, sentence case, paired with a small arrow box; it is 24px high.

**Cards.** Lodge and camp cards are a photograph, a 20px PP Fragment title and a short caption; cards carry the canvas background and 4px radius token. **Footer.** Moss `#5c6e21` with sand `#e3e1d4` uppercase links. **Mobile button.** The "EXPLORE" menu button described above. Form inputs were present in the first capture but not in the final one, so they are not documented.

## Design System Architecture

No public design system or brand guideline was found; the site links to no design-system documentation, and the pages opened were the home page only. The de-facto system is fluid scaling: `--size: 1440` plus `--lvh` and `--svh` viewport-height variables on `:root`, no color variables, and a Plyr video-player font variable in the CSS corpus (`var(--plyr-font-family)`). Colors are literal hexes applied by role (canvas, ink, moss, sand). Type is a two-family pairing with fractional values tuned to the design width.

## Do's and Don'ts

Do pair a thin uppercase PP Fragment headline with plain Inter captions. Do set long statements in `#5c6e21` or `#373f1d` on bone. Do let photography carry the weight, with generous empty space between blocks. Do keep corners at 0px, 2px or 4px.

Don't add drop shadows or gradients. Don't use bright saturated colors outside the green family. Don't treat the cookie banner or its buttons as brand components. Don't set body copy in the display face or the display in weights above 310.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 drops to 48.75px/43.875px and stays uppercase weight 220 (358px wide), h2 to 28px, body remains 16px/20px in a 358px column, and the nav keeps 2 visible header links with a menu toggle labelled "Open menu" visible. The full-width "EXPLORE" button is 358px by 40px. Other breakpoints were not measured.

## Iteration Guide

1. Set the page `#f5eee9` with text `#373f1d`; footer `#5c6e21` with `#e3e1d4`.
2. Use PP Fragment 220 for the headline and 310 for statements; Inter 400/500 for the rest.
3. Build the asymmetric two-column copy blocks with tall photographs.
4. Add the sand `#e3e1d4` hover tone to nav links.
5. Keep radii at 2px or 4px and add no shadows.
6. Re-measure rooms, rates and booking pages before documenting them; only the home page was opened.
