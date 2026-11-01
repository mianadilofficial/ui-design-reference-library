---
version: alpha
name: Hungry Tiger
category: "Food & Beverage"
description: "Hungry Tiger (eathungrytiger.com) measured: a fire-roasted Indian sauce brand on a #823513 brown canvas with #faae33 saffron text and pill buttons, a #402011 dark-brown label color, Salmond 700 uppercase display type up to 189.44px with negative tracking, Graphikx 500 nav, and no shadows."
colors:
  canvas: "#823513"
  ink: "#faae33"
  primary: "#faae33"
  on-primary: "#402011"
  surface-deep: "#281006"
  ink-faint: "#f7ac3240"
  text-input-border: "#40201159"
typography:
  display:
    fontFamily: Salmond, Arial, sans-serif
    fontSize: 189.44px
    fontWeight: 700
    lineHeight: 151.552px
    letterSpacing: "-3.7888px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Salmond, Arial, sans-serif
    fontSize: 54.99px
    fontWeight: 700
    lineHeight: 43.992px
    letterSpacing: "-1.0998px"
    textTransform: uppercase
  heading:
    fontFamily: Salmond, Arial, sans-serif
    fontSize: 115.2px
    fontWeight: 700
    lineHeight: 103.68px
    letterSpacing: "-1.8432px"
    textTransform: uppercase
  subheading:
    fontFamily: Salmond, Arial, sans-serif
    fontSize: 57.6px
    fontWeight: 700
    lineHeight: 51.84px
    letterSpacing: "-0.288px"
    textTransform: uppercase
  button:
    fontFamily: Salmond, Arial, sans-serif
    fontSize: 10.24px
    fontWeight: 700
    lineHeight: 10.24px
    letterSpacing: "-0.2048px"
    textTransform: uppercase
  nav:
    fontFamily: Graphikx, Arial, sans-serif
    fontSize: 11.52px
    fontWeight: 500
    lineHeight: 14.976px
    letterSpacing: 0.1152px
    textTransform: uppercase
  link:
    fontFamily: Salmond, Arial, sans-serif
    fontSize: 10.24px
    fontWeight: 500
    lineHeight: 10.24px
    letterSpacing: "-0.2048px"
    textTransform: uppercase
  input:
    fontFamily: Salmond, Arial, sans-serif
    fontSize: 10.88px
    fontWeight: 500
    lineHeight: 15.5428px
    letterSpacing: 0.1088px
    textTransform: uppercase
rounded:
  xs: 5px
  sm: 6px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15.55px
  s9: 16px
  s10: 17.92px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 20px 32px 16px
    height: 46px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.on-primary}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 0px 15.552px
  text-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    rounded: "{rounded.pill}"
    padding: 16px 16px 12px 20px
    height: 54px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
---

## Overview

Hungry Tiger sells "Bold Indian Sauces Made for Real Life" (the measured page title) and the home page is a single-product poster. The first screen is a saturated brown field printed with a faint botanical pattern; a tiger-head logo sits centred in the header; the 189.44px headline "BOLD FLAVOR" runs edge to edge between two dotted rules; a small line above it reads "FIRE ROASTED INDIAN SAUCE"; below is the product name "TIKKA MASALA" and a photographed 12 FL OZ (355 mL) jar with a dark-brown label that repeats the tiger mark. A short paragraph at bottom-left ("BOLD FLAVORS FROM THE KITCHENS OF INDIA. CRAFTED FOR THOSE WHO CRAVE MORE.") and a "BUY NOW" pill complete the composition. Two round yellow icon buttons (a jar and a basket) sit at bottom right.

Further down the page, the capture shows large uninterrupted #823513 areas with the ghosted heading "A NEW ANGLE OF FLAVOR" and a note "DISCOVER HOW OUR CREAMY TOMATO BLEND AND AUTHENTIC SPICES ELEVATE EVERY MEAL." The page is 13799px tall on desktop and uses sections for "WHAT'S INSIDE", recipes, a game and contact, according to the nav (SAUCE, ABOUT, RECIPES, GAME, CONTACT, BUY NOW). The voice is short, capitalised and sensory: product name, flavour descriptors and a single call to action, with no long paragraphs anywhere in the measured text.

## Colors

The palette is exactly three declared colours, exposed as root variables: `--dark-brown: #402011`, `--brown: #823513` and `--primary: #faae33`.

- **Canvas** `#823513` is the dominant background (3790 area-weighted units).
- **Ink and primary** `#faae33` is both the main text colour (1076 characters) and the fill of every button, nav pill and the product-page icon circles (3738 area units as a background).
- **On-primary** `#402011` is the label colour on yellow buttons and the most-read text colour overall (1462 characters), used for small captions and nav text; it is also the card fill.
- **Surface deep** `#281006` appears as a very dark background (1987 units), consistent with the jar label and dark sections.
- **Ink faint** `#f7ac3240` is a translucent yellow used for 18 characters of ghosted text.
- A black-alpha overlay `#00000024` (1180 units) and a pink-red `#d1255c` (16 units) appear in the background data; the pink is not used for UI roles and is not promoted to a token.
- Input border is `#40201159` (translucent dark brown); other borders are `#faae33` (10) and `#402011` (3).

The system is therefore a two-colour print palette (saffron on rust) with a dark brown for ink-on-yellow.

## Typography

Two families are loaded: **Salmond** (weights 700 and 500) for display, buttons, links and inputs, and **Graphikx** (500) for the navigation. Both fall back to Arial and sans-serif.

| Role | Measured |
|---|---|
| Display (h1) | Salmond 700, 189.44px, line-height 151.552px, letter-spacing -3.7888px, uppercase; mobile 54.99px / 43.992px / -1.0998px |
| Heading (h2) | 115.2px / 103.68px, -1.8432px, uppercase; mobile 50.7px |
| Subheading (h3) | 57.6px / 51.84px, -0.288px, uppercase |
| Button | Salmond 700, 10.24px / 10.24px, -0.2048px, uppercase |
| Nav | Graphikx 500, 11.52px / 14.976px, +0.1152px, uppercase |
| Link | Salmond 500, 10.24px, -0.2048px, uppercase |
| Input | Salmond 500, 10.88px / 15.5428px, +0.1088px, uppercase |

Everything is uppercase. The type scale is extreme: the three display tiers are 189.44, 115.2 and 57.6px while body-like text sits at 10.24-11.52px (by character count 10.24px dominates with 1584 characters, then 10.88px and 11.52px). The extractor detected no separate paragraph role; the page body element itself computes Graphikx 500 at 11.52px with line-height 14.976px and letter-spacing 0.1152px, and that is recorded in the nav row above. Weights by characters: 500 (2145), 700 (386), 400 (25).

## Layout

The desktop viewport is 1280px. The header is 82px high with pill navigation on the left (SAUCE, ABOUT, RECIPES, GAME), the logo centred and CONTACT plus BUY NOW on the right. Below it a row of dots acts as a rule. The hero is centred and symmetrical, with the product jar on the central axis and small copy blocks pinned to the lower left and lower right. Spacing values are small: 2, 4, 6, 8, 10, 12, 14, 15.55, 16 and 17.92px, so large type sits in tight containers and the whitespace comes from the vast brown field rather than gutters.

## Elevation & Depth

Flat, and deliberately so: the measured shadow list is empty and no layered cards, drop shadows or blurs appear in the data, which keeps the poster look intact and means a reproduction should not add elevation of any kind.

Flat. No box shadows were measured (the list is empty). Depth comes from the photographed jar, the ghosted tone-on-tone headings (`#f7ac3240` yellow on brown) and the faint botanical texture in the background.

## Shapes

Buttons, nav links and inputs are fully rounded pills: measured radii include 1024px, 1088px, 1152px and 960px for pill elements (rounded to the `pill` token 9999px) and 100% for circular icon buttons (17 elements). Cards use 6px, and 5px appears on 3 elements (tokens `sm` and `xs`). The shape language is soft and chunky, matching the heavy letterforms.

## Components

- **Button primary**: `#faae33` fill, `#402011` text, Salmond 700 10.24px uppercase, padding 20px 32px 16px, height 46px, pill radius. Hover (measured on nav links) keeps colours and drops opacity to 0.80005.
- **Nav link pill**: same yellow fill and dark-brown text, Graphikx 500 11.52px, padding 0 15.552px, height 48px.
- **Icon button**: yellow circle with a dark-brown jar or basket glyph.
- **Text input**: Salmond 500 10.88px uppercase, pill radius, padding 16px 16px 12px 20px, height 54px, 1px border `#40201159`.
- **Card**: `#402011` fill, yellow text, 6px radius, 307px tall in the measurement.
- **Link**: Salmond 500 10.24px uppercase (for example PRIVACY POLICY), colour `#402011`.

## Design System Architecture

The stylesheet corpus lists a `webflow-icons` font family, which is the only platform trace measured. No public design-system or brand-guideline page was linked from the home page and none was searched. The de-facto system is the three root variables (`--dark-brown`, `--brown`, `--primary`), two self-hosted fonts and a single pill component shape. Source: https://www.eathungrytiger.com/ (measured).

## Do's and Don'ts

- Do use saffron `#faae33` on rust `#823513` for display type and dark brown `#402011` on yellow for labels.
- Do set all text uppercase and tighten display tracking (-3.7888px at 189.44px).
- Do make every button a pill or circle.
- Don't add shadows or additional hues; the pink `#d1255c` seen in background data is not a UI colour.
- Don't set body copy in mixed case or in a serif; none was measured.
- Don't enlarge small caption sizes; the measured text hovers between 10.24px and 11.52px.

## Responsive Behavior

Measured at 390px: h1 54.99px / 43.992px with -1.0998px tracking, h2 50.7px, the primary button 14.82px Salmond 700 with the same padding (20px 32px 16px), and the header text reads "MENU" and "BUY NOW" at 15.21px Graphikx 500 with height 80px. Mobile text sizes by characters: 13.65px (943), 12.87px (609), 14.43px (302), 15.6px (196), 50.7px (144). Other mobile layout behavior was not measured.

## Iteration Guide

1. Start with `canvas` #823513 and `ink` #faae33; print the product name in Salmond 700 uppercase at the display size.
2. Put yellow pill buttons with `#402011` text everywhere an action exists.
3. Keep small copy at 10.24-11.52px uppercase.
4. Add ghosted headings with `ink-faint` (#f7ac3240).
5. Use the dark `surface-deep` (#281006) for dense areas.
6. Verify all values against the frontmatter; do not introduce shadows or gradients.
