---
version: alpha
name: Arc'teryx
category: "Fashion & Apparel"
description: "Arc'teryx Canada home page (arcteryx.com/ca/en), measured — white #ffffff canvas, #1a1a1a black for copy, input and footer, full-bleed outdoor photography with Elan ITC Pro 32px uppercase titles, Helvetica Now Display 16px/400 body with 0.32px tracking, ghost buttons with #b2b2b2 borders, #f5f5f5 41px search pill."
colors:
  canvas: "#ffffff"
  ink: "#1a1a1a"
  primary: "#f5f5f5"
  on-primary: "#595959"
  black: "#000000"
  grey-medium: "#666666"
  grey-inactive: "#b2b2b2"
  utility-bar: "#000000cc"
  grey-background: "#e9e9e9"
typography:
  display:
    fontFamily: elan-itc-pro, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
    textTransform: uppercase
  display-mobile:
    fontFamily: elan-itc-pro, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 28px
    textTransform: uppercase
  subheading:
    fontFamily: helvetica-now-display, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 37.8px
  footer-title:
    fontFamily: "\"Elan ITC Pro Updated\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
    letterSpacing: 0.32px
    textTransform: uppercase
  body:
    fontFamily: helvetica-now-display, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.32px
  button:
    fontFamily: "\"Helvetica Now Display\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.32px
  button-secondary:
    fontFamily: helvetica-now-display, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 19.2px
    letterSpacing: 0.32px
rounded:
  xs: 4px
  sm: 41px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 38px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 8px
    height: 32px
  button-ghost:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 4px 24px
    height: 44px
    borderColor: "{colors.grey-inactive}"
  button-ghost-hover:
    borderColor: "{colors.canvas}"
  button-inactive:
    backgroundColor: "{colors.grey-inactive}"
    textColor: "{colors.grey-medium}"
    typography: "{typography.button-secondary}"
    padding: 4px 24px
    height: 44px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  utility-bar:
    backgroundColor: "{colors.utility-bar}"
    textColor: "{colors.canvas}"
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    padding: 0px 45px 0px 15px
    height: 52px
    borderColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

# Arc'teryx

## Overview

This file describes the Arc'teryx Canada home page at `https://arcteryx.com/ca/en` (title: "Outdoor Clothing, Technical Outerwear, & Accessories | Arc'teryx Canada", `lang="en-CA"`), measured at 1,280px and 390px.

The page is an image-first outdoor brand site. A thin black utility bar at the top holds ARC'TERYX, OUTLET, RESALE and TRADE-IN on the left, "Shop new arrivals | Free shipping & returns" in the centre and Find a store, the Canadian flag with EN, and help on the right. Beneath it a white header panel floats inset over the hero photograph, with the Arc'teryx archaeopteryx logo, the main links (Women, Men, Footwear, Equipment, Veilance, Discover), a pale grey search pill and account and bag icons. The hero is a blue-toned, full-bleed image of a skier's powder cloud with the uppercase title "SPEAK IN TURNS", the line "The iconic Sidewinder jacket is back" and two outlined buttons, "Shop women's" and "Shop men's". The page continues with two half-width photo tiles (a brown hood under "BESTSELLERS / UNCOMPROMISING OUTERWEAR" and a portrait under "VEILANCE / New Winter Arrivals"), a white three-column product story section ("The updated Sabre Jacket", "The new Postour Boot", "The updated Covert family") with underlined text links, two more half-width tiles (Arc'teryx Academy and ReBIRD Trade-in, "MAKE WAY FOR WINTER"), a white strip of three programme logos (ReBIRD, Walk Gently, System A) and a `#1a1a1a` footer headed "LEAVE IT BETTER".

The photography is cold, natural and athletic — snow, cloud, mountaineers in wind, close-ups of technical fabric. Copy is short and factual ("Experience peak weather protection and temperature regulation", "Insulated two-in-one boot and slipper for post-tour recovery").

## Colors

- **Canvas `#ffffff`** — the page background and white content sections (4,891 area units). Declared as `--colour-white`.
- **Ink `#1a1a1a`** — Arc'teryx black: the footer, the newsletter input and copy on white (314 characters). Declared as `--colour-black: #1A1A1A` and aliased as `--colour-copy`.
- **Black `#000000`** — the top utility bar band and product story headings (261 characters).
- **Primary `#f5f5f5`** — the light fill of the header search pill, the only filled control the extractor found in the first viewport, with **on-primary `#595959`** text. The brand does not use a coloured action; its calls to action are outlined (see Components).
- **Grey medium `#666666`** — `--colour-grey-medium`; text on the inactive newsletter button.
- **Grey inactive `#b2b2b2`** — `--colour-grey-inactive`: the border of every ghost button over photos (6 borders) and the fill of the not-yet-enabled SIGN ME UP button.
- **Utility bar `#000000cc`** — the translucent black of the header's top bar.
- **Grey background `#e9e9e9`** — `--colour-grey-background`; on mobile it fills the 40px band below the utility bar.

White is the most-read text colour (1,393 characters) because most copy sits over photographs or the dark footer. The CSS also declares a functional palette — `--colour-blue-2: #5b9dd9` (focus), `--colour-red-3: #990000` (warning), `--colour-green-3: #227733` (success), `--colour-yellow-2: #ab934f` and tints of each — which is not used on the visible home page.

## Typography

Loaded fonts: **helvetica-now-display** 400 and 700, and **elan-itc-pro** 400, declared as `--font-helvetica` and `--font-elan`. Helvetica Now Display sets 1,849 characters; Elan ITC Pro 114 (plus 15 in "Elan ITC Pro Updated" in the footer).

- **Display — Elan ITC Pro 32px / 400 / 32px, uppercase.** Campaign titles over photos: SPEAK IN TURNS, UNCOMPROMISING OUTERWEAR, MAKE WAY FOR WINTER. Elan is a flared, slightly calligraphic serif-sans.
- **Subheading — Helvetica Now Display 28px / 400 / 37.8px.** Product story titles on white.
- **Footer title — Elan ITC Pro Updated 18px / 400 / 21.6px, uppercase, 0.32px tracking.** "LEAVE IT BETTER" and footer column heads.
- **Body — Helvetica Now Display 16px / 400 / 24px, 0.32px tracking.** 16px carries 1,320 characters.
- **Button — 16px / 400** (search) and **button secondary — 16px / 700 / 19.2px** (ghost and newsletter buttons).

Every size has a small positive tracking: 0.32px at 12px, 16px, 18px and 32px; 0.28px at 14px; 0.36px at 18px. Weights are 400 (1,739 characters) and 700 (251) only.

**Substitutes:** Helvetica Now Display is a Monotype commercial face (Helvetica or Arial is the declared fallback). Elan ITC Pro is a commercial ITC face; no free equivalent is declared in the CSS beyond `sans-serif`.

## Layout

The desktop page measured 4,764px tall. Bands: utility bar (40px, black), hero media (545px), a 71px `#466c8b` slate-blue band, two half-width photo tiles (843px), the white two-to-three column product story section (1,013px), another photo row (842px), a white three-column programme strip (990px) and the `#1a1a1a` footer (420px band, four columns). The widest card grid has four columns (footer). Gaps are frequent and regular: 8px (54), 16px (39), 10px (22), 24px (17), 32px (10). Photo tiles sit edge to edge with a thin white gutter; product stories have an outer margin. The desktop header shows 12 visible links.

## Elevation & Depth

Flat. The only measured shadow is `rgb(26, 26, 26) 0px 0px 0px 1280px` on one element — a full-page dark fill used as an overlay, not an elevation shadow. The floating white header panel separates from the hero by colour and inset alone. Depth on the page comes from photography and the outlined buttons sitting on it.

## Shapes

Two radii were measured: 41px on two elements (the search pill and its button) and 4px on one (the inset header panel). Buttons, inputs, photo tiles and the footer are square.

## Components

- **Ghost button** — the main call to action over photos: transparent fill, white Helvetica Now Display 16px/700 label, `1px solid #b2b2b2` border, `4px 24px` padding, 44px tall. Measured hover: the border turns white `#ffffff`.
- **Text link button** — on white sections, "Shop men's" / "Women's" are black labels with an underline rule beneath.
- **Search pill (button-primary)** — `#f5f5f5` fill, `#595959` 16px/400 label, 41px radius, 32px tall, `0 8px` padding.
- **Newsletter input** — `#1a1a1a` fill, white text, `1px solid #ffffff` border, 52px tall, `0 45px 0 15px` padding.
- **Inactive button** — SIGN ME UP: `#b2b2b2` fill, `#666666` 16px/700 label, 44px tall.
- **Utility bar** — 40px, translucent black, white 12–16px links.
- **Footer** — `#1a1a1a`, logo and "LEAVE IT BETTER", four link columns (HELP, MY ACCOUNT, SHOP MORE, ABOUT US), newsletter row, social and app links.

## Design System Architecture

No public Arc'teryx design system or brand-guideline page was opened: `https://arcteryx.com/ca/en/brand` returned HTTP 404. The shipped CSS exposes a two-layer token system in 111 `:root` variables. Layer one is raw palette: `--colour-black`, `--colour-white`, `--colour-grey-*` (dark #333333, medium #666666, medium-accessible #767676, inactive #b2b2b2, pinline #cccccc, background #e9e9e9, item-background #fafafa) and numbered ramps `--colour-blue-1..3`, `--colour-red-1..3`, `--colour-green-1..3`, `--colour-yellow-1..3`. Layer two is semantic aliases pointing at layer one — `--colour-copy`, `--focus-blue`, `--warning-red`, `--success-green`, `--caution-yellow`, `--inactive-state-grey`, `--pinline-grey`, `--background-*`. Spacing uses responsive pairs named by desktop and mobile values (`--desk10-mobile6: 6rem`, `--desk-mobile05: 0.5rem`, `--space-l: var(--desk3-mobile2)`). Gradients are declared for active and hover states (`--gradient-active`, `--gradient-hover`) and focus as `--focus-visible: 0.2rem solid #5b9dd9`.

## Do's and Don'ts

**Do**
- Lead with full-bleed outdoor photography and place uppercase Elan titles on it.
- Use outlined ghost buttons with `#b2b2b2` borders that turn white on hover.
- Set all running text in Helvetica Now Display with 0.32px tracking.
- Use `#1a1a1a`, not pure black, for the footer and dark inputs.
- Keep buttons square; reserve the 41px pill for search.

**Don't**
- Don't introduce a coloured primary button.
- Don't use the functional reds, greens or yellows as decoration.
- Don't add drop shadows to cards or images.
- Don't set long text in Elan ITC Pro.

## Responsive Behavior

Measured at 390px: the header is 80px tall with a visible menu toggle labelled "Open Navigation" and 8 visible header links; its text is 12px/400/18px. A 40px `#e9e9e9` band appears under the 40px black utility bar. Display titles shrink from 32px to Elan 28px/400/28px. The product story titles drop from 28px to 24px. Recorded mobile bands: hero media (562px), a `#c5c5c5` band (288px), a two-column media band (1,012px), the white product story section in one column (814px), a single-column media band (1,300px), a white single-column section (1,755px) and the `#1a1a1a` footer (380px). The widest mobile grid has three columns. Mobile font sizes by frequency: 16px, 12px, 14px, 24px, 28px, 12.8px, 22px, 20px, 18px. Breakpoint widths: not measured.

## Iteration Guide

1. Start with a white canvas, `#1a1a1a` text and Helvetica Now Display 16px/400 with 0.32px tracking.
2. Add the 40px translucent black utility bar and a white inset header with a `#f5f5f5` 41px search pill.
3. Make the hero a full-bleed photograph with an uppercase Elan 32px title and two ghost buttons.
4. Follow with half-width photo tiles, each with a title, a short line and ghost buttons.
5. Add a white three-column product story section with 28px titles and underlined text links.
6. Close with a `#1a1a1a` footer headed in uppercase Elan 18px.
7. Take any new colour from the `--colour-*` palette in the shipped CSS.
