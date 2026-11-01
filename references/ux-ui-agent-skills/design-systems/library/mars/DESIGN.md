---
version: alpha
name: Mars, Incorporated
category: "Food & Beverage"
description: "Mars, Incorporated global corporate site: Mars blue #0000a0 headlines and square buttons on white, mint green #00d7b9 and yellow #ffdc00 feature bands, #3c3c3c body copy in the proprietary MarsCentra family (Extrabold 56px display, 16px/28px body) with 8px-radius brand tiles."
colors:
  canvas: "#ffffff"
  ink: "#0000a0"
  primary: "#0000a0"
  on-primary: "#ffffff"
  surface-steel: "#3f729b"
  surface-gray: "#f4f4f4"
  ink-body: "#3c3c3c"
  accent-green: "#00d7b9"
  accent-yellow: "#ffdc00"
typography:
  display:
    fontFamily: MarsCentra-Extrabold, sans-serif
    fontSize: 56px
    fontWeight: 400
    lineHeight: 62px
  display-mobile:
    fontFamily: MarsCentra-Extrabold, sans-serif
    fontSize: 35px
    fontWeight: 400
    lineHeight: 41px
  heading:
    fontFamily: MarsCentra-Extrabold, sans-serif
    fontSize: 45px
    fontWeight: 400
    lineHeight: 52px
  body:
    fontFamily: MarsCentra, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: MarsCentra-Bold, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button-secondary:
    fontFamily: MarsCentra-Bold, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  none: 0px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7.5px
  s6: 9px
  s7: 10px
  s8: 13px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 4px 14px 3px
    height: 34px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 15px 0px
    height: 54px
  nav:
    textColor: "{colors.ink-body}"
    rounded: "{rounded.none}"
    padding: 48px 0px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.accent-green}"
    rounded: "{rounded.none}"
---

## Overview

This is the global corporate site of Mars, Incorporated (`https://www.mars.com/`, title "Global Petcare, Food & Nutrition, and Snacking Brands | Mars, Incorporated", measured 1280px wide and 7724px tall). It is a confident, corporate-editorial page. At capture time the top shows a mint-green notice bar ("We've updated our Privacy Statement, effective September 28, 2026." with a "Learn more" link and a close icon), a utility row (Contact Us, Media Inquiries, Careers, and a blue "Global" locale button), then the white main header: the blue "MARS" wordmark, four nav items (All About Mars, Our Brands, Sustainability Plan, News & Stories) and a search icon.

The hero is a five-slide carousel with square pagination boxes. One slide pairs the Mr. Peanut-style mascot and the M&M'S characters on a pale gradient with a dark photograph panel carrying the headline "Mars to invest $2 billion into U.S. manufacturing through 2026" in white bold type. Under it a row of rounded square brand logo tiles (Cesar, Cheez-It, CocoaVia, Dove, Eclipse, Hotel Chocolat, KIND, Kellogg's, M&M'S, Mars) with arrow controls, then an "Our brands" block in blue with a centered paragraph and a blue "Explore our brands" button. A full-bleed mint band ("Our leaders share their views on tackling today's challenges") holds two overlapping executive portraits at left and copy at right with a blue button. A white "Sustainable in a Generation" block pairs copy and a "Learn more" button with a rainforest photograph offset against a yellow rectangle.

The voice is plain and values-led. Headlines are sentence-case and bold; paragraphs are short and speak of "Associates", "Purpose" and "families". Colors come straight from the brand: blue, mint, yellow.

## Colors

The page exposes its palette as `--ssa-color-palette-*` variables, and the measured values match:

- **Mars blue `#0000a0`** (`--ssa-color-palette-mars-blue`, rgba(0,0,160,1)): the primary brand color. It is the heading color, the fill of the solid buttons (Global, Explore our brands, Hear from our leaders, Learn more) and the footer background; as a background it covers the most area (11925 weight). Tokens `ink` and `primary` both hold it.
- **White `#ffffff`**: canvas and text on blue (2390 character-weight).
- **Ink-body `#3c3c3c`** (`--ssa-color-palette-dark-grey`, also the default font color): paragraph text.
- **Accent-green `#00d7b9`** (`--ssa-color-palette-mars-green`): notice bar, the mint feature band, and the button hover fill.
- **Accent-yellow `#ffdc00`** (`--ssa-color-palette-mars-yellow`): the rectangle behind the sustainability photograph.
- **Surface-steel `#3f729b`**: a measured background area (2502 weight) whose element was not identified, kept as a measured value.
- **Surface-gray `#f4f4f4`** (`--ssa-color-palette-background-gray`): a light panel background.

The variables also declare spicy red rgba(255,60,20,1), Mars Petcare red rgba(255,20,20,1), electric pink rgba(255,50,160,1), zesty orange rgba(255,130,0,1), sky blue rgba(0,220,250,1), Mars Food green rgba(97,160,32,1), deep purple rgba(150,0,255,1), Mars Wrigley amber rgba(230,160,0,1), fresh green rgba(166,219,0,1), Mars Edge blue rgba(0,153,255,1) and light gray rgba(163,163,163,1). These are sub-brand palette entries that exist in the stylesheet; the measured home page does not use them in UI, so they are not tokens.

Hover (measured on "Explore our brands"): fill changes from `#0000a0` to `#00d7b9` and text from white to `#0000a0`, with the border going from white to `#0000a0`.

## Typography

The proprietary **MarsCentra** family has three loaded faces, referenced by font stacks `--ssa-font-stacks-marscentra` (regular), `--ssa-font-stacks-marscentrano1-bold` and `--ssa-font-stacks-marscentrano1-extrabold`; all fall back to `sans-serif`. Weights are encoded in the family names, so computed `font-weight` is 400 everywhere. Icon fonts `icomoon` and `fontawesome-5-juicer` are also loaded.

- **Display** (MarsCentra-Extrabold, 56px / 62px): the hero headline on the dark photo panel; 35px / 41px in the mobile pass.
- **Heading** (Extrabold, 45px / 52px): section titles like "Our brands", in blue.
- **Body** (MarsCentra regular, 16px / 28px, `#3c3c3c`): paragraphs. The base font size variable is 16px.
- **Button** (MarsCentra-Bold, 14px / 21px) in the header locale button; **button-secondary** (Bold, 16px / 24px) in the large content buttons (54px tall).

MarsCentra is licensed to Mars; if unavailable, the declared fallback is the generic sans-serif.

## Layout

The page is full-bleed bands. Content gutters are defined by variables: `--ssa-responsive-grid-settings-outer-gutter` 1.5625rem, inner gutter 0.9375rem, boxed-width outer gutter 0.9375rem, with width `auto` and boxed width `none` (no max-width container). The brand carousel sits between the hero and the "Our brands" block; feature bands alternate white and mint, each split roughly into an image half and a text half. Measured spacing steps are 3, 4, 5, 6, 7.5, 9, 10, 13, 14 and 15px. The header has a 48px top padding for the nav block.

## Elevation & Depth

Three shadow values were measured: `rgba(0, 0, 0, 0.1) 0px 0px 16px 0px` (64 elements, the soft halo around brand tiles), `rgb(234, 234, 234) 0px 0px 5px 1px` (64 elements, a hairline-glow outline) and `rgb(217, 217, 217) 0px 4px 16px 0px` (6 elements, a dropped card shadow). Otherwise depth comes from flat color bands and from overlapping photographs (the two portraits and the offset yellow block).

## Shapes

Buttons are square: the measured radius is 0px on every solid button, nav and footer element. Brand tiles and image cards use `8px` (128 elements) and a few elements use `50%` (8 elements, round controls). The tokens are `none 0px`, `xs 8px` and `pill 9999px`.

## Components

- **Primary button** (header "Global"): `#0000a0` fill, white MarsCentra-Bold 14px, 0px radius, 34px tall, padding `4px 14px 3px`.
- **Content button** ("Explore our brands", "Learn more"): same blue fill, white Bold 16px, 0px radius, 54px tall (50px in the hover measurement), vertical padding 15px.
- **Brand tile**: square-ish 8px-radius logo card with a soft 16px shadow, in a horizontally scrolling carousel with square arrow buttons.
- **Hero carousel**: five square pagination markers, headline in white on a dark photograph.
- **Notice bar**: mint `#00d7b9` bar with blue text and a close icon.
- **Navigation**: bold 14px labels, `#3c3c3c` text, with blue for the active/primary controls.
- **Footer**: blue background, mint text.

## Design System Architecture

No public design-system site was opened, but the page exposes its own: the `--ssa-*` custom property set (28 root variables) defines the palette (including sub-brand colors), the font stacks, the default font settings (`--ssa-default-font-settings-font-family`, `--ssa-default-font-settings-color`), the base unit (`--ssa-base-unit-settings-font-size: 16px`) and the responsive grid gutters. The `ssa` prefix is as shipped; what it stands for was not determined. The home page was the only page opened and no design-system or brand-guideline link was seen.

## Do's and Don'ts

Do:
- Use Mars blue `#0000a0` for headlines and solid buttons, white text on it.
- Use mint `#00d7b9` for feature bands and hover fills, yellow `#ffdc00` as a small offset accent.
- Keep buttons square (0px radius) and brand tiles at 8px.
- Set headlines in MarsCentra Extrabold and body in regular at 16px / 28px.

Don't:
- Don't round the primary buttons.
- Don't use sub-brand palette entries (Petcare red, Wrigley amber) as general UI colors.
- Don't put paragraph text in blue; body text is `#3c3c3c`.
- Don't treat the notice bar as a navigation color; it is a temporary message.

## Responsive Behavior

The mobile pass recorded display size and font-size frequencies only: the hero headline measured 35px / 41px (desktop 56px / 62px). Mobile font-size weights were led by 16px (2928), 20px (815), 35px (642), 14px (509), 30px (276) and 18px (89). Mobile layout, menu and carousel behavior, and breakpoints are not measured.

## Iteration Guide

1. Set the canvas white, headlines Mars blue `#0000a0`, body `#3c3c3c` at 16px / 28px.
2. Build solid blue square buttons with white Bold labels; on hover swap to `#00d7b9` fill with blue text.
3. Alternate white and mint `#00d7b9` bands, each with a photograph and a text half.
4. Present brands as 8px-radius logo tiles with the soft 16px shadow.
5. Measure any state not listed here before documenting it.
