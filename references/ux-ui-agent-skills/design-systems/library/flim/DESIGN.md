---
version: alpha
name: Flim
category: "Tech & AI"
description: "Flim, an AI search engine for film stills: white and #f5f5f5 canvas on a visible grid, near-black #141414 ink and buttons, Swizzy sans at 19.6px, PP Neue Montreal Mono 12px uppercase labels, a 113.569px wordmark, rounded image tiles and a pill search bar."
colors:
  cobalt: "#0440e2"
  sci-fi-teal: "#0ec0b1"
  samba-yellow: "#fecc33"
  giallo-pink: "#ec24c8"
  psychological-red: "#a30805"
  accent-green: "#30a81d"
  canvas: "#ffffff"
  canvas-grey: "#f5f5f5"
  ink: "#141414"
  primary: "#141414"
  on-primary: "#ffffff"
  accent-orange: "#ff8400"
typography:
  display:
    fontFamily: Swizzy, Arial, sans-serif
    fontSize: 38px
    fontWeight: 700
    lineHeight: 44px
  heading:
    fontFamily: "\"PP Neue Montreal Mono\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
    letterSpacing: 0.72px
    textTransform: uppercase
  body:
    fontFamily: Swizzy, Arial, sans-serif
    fontSize: 19.6px
    fontWeight: 500
    lineHeight: 21.56px
    letterSpacing: "-0.392px"
  button-secondary:
    fontFamily: "\"PP Neue Montreal Mono\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 0.84px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 8px
  md: 15.9px
  lg: 16px
  xl: 22.71px
  2xl: 64px
  3xl: 160px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 9.59px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 18.72px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.sm}"
    padding: 8px 20px 8px 8px
    height: 68px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    height: 56px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    padding: 6px 0px 6px 14px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    height: 56px
  card:
    backgroundColor: "{colors.canvas-grey}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
  footer:
    textColor: "{colors.ink}"
    padding: 128px 0px 0px
---

## Overview
Flim (flim.ai, titled "Flim | AI search engine for film stills and visual references") is a product site for a visual-reference search tool aimed at art directors and storytellers. The capture is light and gridded. A thin top bar lists HOME, PRODUCT, PRICING, FLIM FOR TEAMS and BLOG in small uppercase mono type, with LOG-IN and a filled SIGN-UP at the right. The hero is split: a giant black "Flim" wordmark at the left, and at the right the line "The Creative Sidekick / Made for Art directors. / Built for Storytellers." with a black SIGN UP NOW button that carries a small yellow-and-black icon tile. Beneath it a light-grey field printed with a fine square grid holds film-still thumbnails in dark rounded tiles floating at different sizes around a wide rounded search pill (placeholder text QUIET MOME, a white SEARCH ⌘/ button). The page continues with a "TRUSTED BY THE BRANDS SHAPING CULTURE" logo row (Anomaly, Zalando, BETC, Canada, Logitech and others), a "WHAT IS FLIM" statement with inline yellow circle and green arrow glyphs, and a framed screenshot of the product interface. The voice is confident and compact: "A new language of visual expression."

## Colors
The page is white (#ffffff) and a light grey #f5f5f5 (which covers the largest measured area); ink and the primary button are the same near-black, #141414, and white text sits on it (273 of the 1,491 measured characters). The yellow glyph circle and the orange (#ff8400) and green (#30a81d) areas appear in the page; the orange and green are measured background areas. The stylesheet defines a large named palette organised by film genre: cobalt #0440e2, sci-fi teal #0ec0b1, samba yellow #fecc33, giallo pink #ec24c8 and psychological red #a30805. The capture shows only the yellow, green and orange in use. A semi-transparent #1414141a is used for thin dividers and #ffffff1a for overlays. The brand reads as monochrome with small saturated flashes.

## Typography
Two families are in use. Swizzy (weights 400, 500 and 700) is a sans for the wordmark, statements and body: the measured h1 element is 38px at weight 700 with a 44px line height, and the dominant body style is 19.6px at weight 500 with a 21.56px line height and -0.392px letter spacing; the visible large wordmark and statements are set at larger sizes (113.569px on 131 characters, 43.6px on 126 characters and 25.6px). PP Neue Montreal Mono (weight 400) sets labels, navigation, buttons and the search field: the heading/label style is 12px uppercase with a 12px line height and 0.72px letter spacing, and the secondary button and input style is 14px uppercase with 0.84px letter spacing. On a 390px viewport the body text measured 13.4812px and the largest size 49px. The stylesheet stores typography as named variables with fluid `min()/max()/calc()` sizes tied to viewport width, for example the heading h1 letter spacing is -.02em.

Font substitutes: Swizzy and PP Neue Montreal Mono are loaded by the site. PP Neue Montreal Mono is a commercial face; the fallback in the measured stack is Arial and `sans-serif`, and any monospaced face with similar wide tracking stands in for labels.

## Layout
The page measured 1280px wide and 10,949px tall with 2,274 visible elements. The nav is 58px high and 1095px wide with items distributed across the bar. The hero separates the wordmark and the pitch left and right, then the grid field forms a full-width stage whose cells show a square pattern behind floating images. Below, sections are centred with wide empty margins (padding of 100px was measured on 84 elements), logos sit in a single row, and the product screenshot is a rounded container with a 16px radius. Gaps measured are 24px (21), 4px, 8px, 12px and 52px; paddings include 24px, 22.7137px, 6px, 8px and 20px.

## Elevation & Depth
The page has no layered chrome in the measured state: no modals, popovers or sticky panels were recorded, and the capture shows content only at one depth plus the floating thumbnails.
The surface is flat. The only shadow in the CSS corpus is a thin ring `0 0 0 1px #0000001a,0 1px 3px #0000001a`; elsewhere shadows are `none`. Depth is suggested by images floating on the grid field at different sizes, by the dark tiles against light grey, and by the rounded framed screenshot against white.

## Shapes
Rounded rectangles and pills dominate. The search bar is a long pill (the 160px radius measured on 11 elements), the thumbnails and screenshot frame use 16px, the sign-up button uses 8px, small tags and the nav SIGN-UP chip use 4px, and 50% is measured on 23 circular elements (icons, dots). Other measured values are 64px and 22.7137px.

## Components
- **Primary button (SIGN UP NOW):** #141414 fill, white PP Neue Montreal Mono 12px uppercase text, 8px radius, 68px high, 8px 20px 8px 8px padding to hold a leading icon tile.
- **Search bar:** a wide light-grey pill with the placeholder in 14px mono uppercase and a white SEARCH ⌘/ button inside, 56px high, 255px input width.
- **Nav:** mono 12px uppercase links, 58px high; SIGN-UP is a small black chip with a 4px radius.
- **Image tile:** a dark rounded rectangle holding a grayscale film still, placed at varied sizes on the grid.
- **Logo row:** brand logos in black on white.
- **Statement block:** centred 43.6px Swizzy text at weight 500 with inline coloured glyphs.
- **Footer:** 128px top padding, 1,188px high, with the line "Made for Designers. Built for Storytellers." at 43.6px and a newsletter block.

## Design System Architecture
No public or official design-system documentation for Flim was opened for this entry, and no brand-guideline link was seen on the pages measured. The shipped CSS lists a `webflow-icons` font and a thorough variable system: typography variables are namespaced (`--_typography---heading--h1--font-family`, `--_typography---ui--mono--s--font-family`, `--_typography---body--l--font-weight`), themes are named (`--_theme---cobalt`, `--_theme---tag-background`, `--_theme---brand-2`), and the palette is grouped by film genre (`--sci-fi--teal`, `--giallo--pink`, `--samba--yellow`, `--psychological--red`, `--noir--grey-500`). Measured source: https://flim.ai/ (extraction of 2026-10-09).

## Do's and Don'ts
- Do keep surfaces white and #f5f5f5 with #141414 for ink and buttons.
- Do set labels in uppercase mono and statements in Swizzy.
- Do show grayscale film stills in rounded tiles over a fine grid.
- Do let one saturated glyph (yellow circle, green arrow) punctuate a statement.
- Don't add drop shadows; the measured shadows are `none` except a 1px ring.
- Don't use the mono face for long text; it is used for 12px and 14px labels.

## Responsive Behavior
The 390px mobile pass measured the h1 at 38px with a 44px line height, the SIGN UP NOW button at 143px wide and 48px high with the #141414 fill, body text at 13.4812px with a 14.8294px line height and 366px width, and most-read sizes of 13.4812px, 12px, 49px, 23.575px, 16.7px and 11.2188px. The stylesheet's fluid size formulas are clamped between a minimum and maximum pixel value. How the grid stage and nav reflow and where breakpoints are was not measured.

## Iteration Guide
1. Start from white, #f5f5f5 and #141414.
2. Use a fine grid on the stage section and place grayscale stills in 16px-radius tiles.
3. Use PP Neue Montreal Mono 12px uppercase with 0.72px tracking for labels and buttons.
4. Set statements in Swizzy 500 with slight negative tracking.
5. Draw the search field as a long pill with a white button inside.
6. Take any accent color from the stylesheet's genre palette.
