---
version: alpha
name: ApeChain
category: "Tech & AI"
description: "ApeChain: electric blue #0054fa hero, pale sky canvas #e2f0ff, midnight #030a21 page band, manuka condensed uppercase display (120px hero), DM Sans body 16px, DM Mono 12px uppercase buttons with 16px radius and gradient outlines."
colors:
  canvas: "#e2f0ff"
  page-body: "#030a21"
  ink: "#000000"
  primary: "#0054fa"
  on-primary: "#000000"
  on-dark: "#ffffff"
  button-ghost-fill: "#0000001a"
typography:
  display:
    fontFamily: manuka, "manuka Fallback"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 35.84px
    textTransform: uppercase
  heading:
    fontFamily: manuka, "manuka Fallback"
    fontSize: 26px
    fontWeight: 500
    lineHeight: 20.41px
    textTransform: uppercase
  body:
    fontFamily: dmSans, "dmSans Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
    letterSpacing: 0.24px
  button:
    fontFamily: "\"DM Mono\", \"DM Mono Fallback\""
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
    letterSpacing: 1.2px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 8px
  md: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 15px
  s6: 16px
  s7: 24px
  s8: 28.44px
  s9: 32px
  s10: 44px
components:
  button-primary:
    backgroundColor: "{colors.button-ghost-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 42px
  button-primary-hover:
    textColor: "{colors.on-dark}"
  button-secondary:
    backgroundColor: "{colors.button-ghost-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 42px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
  nav:
    backgroundColor: "{colors.button-ghost-fill}"
    textColor: "{colors.on-dark}"
    padding: 24px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    textColor: "{colors.on-dark}"
---

## Overview

apechain.com is the home of ApeChain, a blockchain ecosystem; the measured page is 1280px wide and 4110px tall. The header holds a boxed uppercase logotype at left and a four-item condensed menu (EXPLORE, LEARN, BUILD, BRIDGE; the active item is brighter). The first screen is a saturated electric-blue field with a huge white condensed word ("BRIDGE") and a faint contour-line pattern; below it a dark blurred image band; then a pale-blue section titled "ApeChain Spotlight — WHERE DAPPS SHINE & YOU WIN" with explanatory paragraphs, two outlined buttons (GET STARTED, GO SPOTLIGHT) and a tilted dark card for a featured app (Clutch Markets); then an "ApeChain Apps" grid of dark rounded app cards with category chips (GAMES, INTELLECTUAL PROPERTY, COLLECTIBLES, FINANCE, INFRASTRUCTURE) and a "SEE ALL APPS" link. The app list on the page links to /apps/otherside, /apps/camelot, /apps/made-by-apes, /apps/ape-portal, /apps/clutch-market and others.

The tone is loud and playful-technical: oversized condensed type, saturated blue, mono micro-labels, and emoji in the body copy. Web3 jargon appears in uppercase mono labels while longer copy is set in a friendly sans.

## Colors

Three surfaces alternate. `page-body` ({colors.page-body}, #030a21) is a deep navy that covers the most area (weight 5120); `canvas` ({colors.canvas}, #e2f0ff) is a pale sky blue (4338); and `primary` ({colors.primary}, #0054fa) is the electric blue of the hero (1201) and of the accent text (236 characters). Text is `ink` #000000 on the pale canvas (916 characters) and `on-dark` #ffffff on navy and blue (1107 characters). Buttons are transparent-black fills at 10% (`button-ghost-fill`, #0000001a) with black text, which turns white on hover (measured: "GET STARTED" goes from rgb(0,0,0) to rgb(255,255,255), and the border follows). A white-at-30% overlay (#ffffff4d) is also measured for chips.

The page uses full-spectrum gradients as outlines around buttons and cards (pink-to-blue strokes appear in the capture), but only the solid colors above are measured as values, so the gradient hues are not listed.

## Typography

Three families are loaded: "manuka" (rendered as a tall condensed face in the capture), "dmSans" (400 and 700) and "DM Mono" (400), each with a "Fallback" metrics face.

- `display`: manuka 400, 32px, 35.84px line height, uppercase (the h1 text on the measured page).
- `heading`: manuka 500, 26px, 20.41px line height, uppercase.
- `body`: dmSans 400, 16px, 20.8px line height, 0.24px letter spacing.
- `button`: DM Mono 500, 12px, 12px line height, 1.2px letter spacing, uppercase.

By characters, DM Mono carries 924, manuka 720 and dmSans 615. By size, 12px dominates (963), then 16px (576), then 120px (508, the oversized hero word), 48px (141), 26px and 32px. The 120px and 48px sizes are measured but not part of the token set. The font files are the site's own; no external substitute is documented.

## Layout

The page uses a six-column grid (`--container-nb-columns: 6`) with a gutter of 0.5rem, container margin of 6.153846vw and a container max width of 87.6923vw; column width is computed from the viewport. Section widths therefore scale with the viewport rather than snapping at fixed widths. The app grid is a mosaic of tall and square cards of varied size that bleeds off the right edge. Spacing values measured: 1, 5, 6, 8, 15, 16, 24, 28.44, 32 and 44px.

## Elevation & Depth

No real shadows: the 8 non-"none" declarations are Tailwind ring placeholders that resolve to nothing. Depth is made with color planes, a tilted 3D-looking featured card, translucent overlays and blurred imagery, and by dark rounded cards sitting on the pale-blue canvas.

## Shapes

Buttons use {rounded.md} (16px, measured on "GET STARTED" and "GO SPOTLIGHT", 42px tall). Cards and chips use 12px, 8px, 6px, 5px and 2px radii (CSS corpus counts: 16px ×10, 12px ×8, 2px ×8, 9999px ×7). The boxed logotype and the "ApeChain Spotlight" label are rectangular with a thin outline in the capture. Pill chips are fully rounded.

## Components

- `button-primary` / `button-secondary`: {colors.button-ghost-fill} fill, black DM Mono 12px uppercase text with 1.2px tracking, 16px radius, 42px tall, outlined with a gradient stroke in the capture; white text on hover.
- `link`: DM Mono uppercase in {colors.ink}.
- `nav`: transparent-black fill over the blue hero, white text, 24px padding; `nav-link` in dmSans.
- App card: dark navy photographic tile with a category chip at top left, a condensed uppercase title and a mono subtitle.
- `footer`: white text.

## Design System Architecture

No public design-system or brand-guideline page was linked from the home page's anchors (it links to /apps and per-app pages). The site is a Next.js and Tailwind build (`--tw-*`) with Sanity-hosted images (cdn.sanity.io). Its layout variables define the grid (`--container-gutter-width`, `--container-margin`, `--container-nb-columns`), and custom cursors are declared (`--cursor`, `--cursor-pointer`, `--cursor-move`). Source: [apechain.com](https://apechain.com/).

## Content and Imagery

The page is built around app discovery. Each app card carries a category chip (GAMES, INTELLECTUAL PROPERTY, COLLECTIBLES, FINANCE, INFRASTRUCTURE), a title such as OTHERSIDE, MADE BY APES, APE EXPRESS, CAMELOT, APE PORTAL, BLEVER or CLUTCH MARKETS, and a one-line mono description (for example "WEB3-ENABLED VIRTUAL WORLDS ON APECHAIN"). The featured card shows a neon-lit logo on a dark tilted panel. The spotlight copy is conversational and uses an emoji at the end of the call to action ("Ready to make your mark?"). Photography is rendered 3D art and game stills rather than people or product shots, and imagery is blurred or tilted to create depth.

## Page Rhythm

Vertical sections change plane at every step: electric blue with a contour pattern, a dark blurred band, pale sky blue, then the app grid. Each section opens with one oversized or boxed label (the giant word, the boxed "ApeChain Spotlight" tag, the "ApeChain Apps" heading with a small icon) followed by body copy at 16px on a 20.8px line height. Calls to action come in pairs of equal outlined buttons rather than one filled button and one ghost, and the app grid reuses the same 16px corner language as the buttons so the whole page reads as one family of rounded rectangles on three flat planes.

## Interaction

The hover records show the two spotlight buttons keep a 42px height and 16px radius while flipping color from black text on a 10% black fill to white text and a white border. No other hover states were recorded, and focus states were not measured. The site declares custom cursor images for default, pointer and move states.

## Do's and Don'ts

- Do set display words in uppercase condensed manuka and make hero words very large.
- Do set controls and labels in DM Mono at 12px with 1.2px tracking.
- Do alternate navy, pale blue and electric blue planes.
- Do give buttons 16px corners and a ghost 10% black fill.
- Don't use soft drop shadows; depth is tonal.
- Don't set long copy in the condensed face; paragraphs are DM Sans.
- Don't add colors beyond the three planes and black or white text.

## Responsive Behavior

Measured at 390px: body copy is 14px on an 18.2px line height in black, and the h2 "EXPLORE" measures 64px (50.24px line height, manuka 500). The extractor's mobile h1 matches the desktop 32px. Navigation behavior and the card grid at narrow width were not measured.

## Iteration Guide

1. Pick the plane: #030a21 (dark), #e2f0ff (light) or #0054fa (hero).
2. Display in manuka uppercase; paragraphs in DM Sans 16px/20.8px.
3. Buttons: DM Mono 12px uppercase, 1.2px tracking, 16px radius, 42px tall.
4. Use oversized words for page headers.
5. Run `node web/scripts/verify-designs.mjs --slug=apechain` after edits.
