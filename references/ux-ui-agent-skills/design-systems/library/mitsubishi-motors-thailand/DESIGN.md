---
version: alpha
name: Mitsubishi Motors Thailand
category: "Thai Brands"
description: "Mitsubishi Motors Thailand (mitsubishi-motors.co.th/en) measured: black and white stage with anthracite #686d71 text, MMC-Bold at 63.008px for hero lines, MMC-Regular 16px body, tracked uppercase 14px outlined buttons with no radius, brand reds #ed0000 and #bd0000 from the site's own variables."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#686d71"
  primary: "#686d71"
  surface-2: "#f6f6f6"
  ink-4: "#bfc2c4"
  brand-red: "#ed0000"
  brand-red-dark: "#bd0000"
  surface-concrete: "#e3e5e6"
typography:
  display:
    fontFamily: MMC-Bold, Arial, Helvetica, Verdana, sans-serif
    fontSize: 63.008px
    fontWeight: 400
    lineHeight: 70px
  display-mobile:
    fontFamily: MMC-Bold, Arial, Helvetica, Verdana, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 36px
  heading:
    fontFamily: MMC-Medium, Arial, Helvetica, Verdana, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 2px
    textTransform: uppercase
  subheading:
    fontFamily: MMC-Bold, Arial, Helvetica, Verdana, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.008px
  body:
    fontFamily: MMC-Regular, Arial, Helvetica, Verdana, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  link:
    fontFamily: MMC-Bold, Arial, Helvetica, Verdana, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 3px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 5px
  s2: 10px
  s3: 12px
  s4: 13px
  s5: 15px
  s6: 20px
  s7: 25px
  s8: 30px
  s9: 32px
  s10: 36px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 12px 36px
    height: 48px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 12px 36px
    borderColor: "{colors.canvas}"
  nav:
    textColor: "{colors.page-largest}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
---

# Mitsubishi Motors Thailand

## Overview

This file documents the page measured at `https://www.mitsubishi-motors.co.th/en?rd=true`, titled "Mitsubishi Motors Thailand | Drive your Ambition", language `en-TH`. It is the English home page of the Thai Mitsubishi Motors site. The top bar is a dark charcoal strip with the centered Mitsubishi Motors logo (red three-diamond emblem, the wordmark and the slogan "Drive your Ambition") and a hamburger menu at the right. Below it is a full-bleed hero for the "ALL NEW PAJERO": a dark brown studio photograph of the SUV, the headline "Thailand Specification Highlights Is Ready", the line "Get a closer look at the ALL NEW PAJERO for Thailand, and keep up with the latest news and updates", and an outlined button "DISCOVER MORE DETAILS". A black quick-action strip under the hero offers four icon actions: REQUEST QUOTATION, TEST DRIVE, DOWNLOAD BROCHURE and CONFIGURE. A white model carousel follows (XPANDER HEV "From THB 939,000", XPANDER CROSS HEV "From THB 969,000", TRITON "From THB 614,000") with thin line arrows. A split feature shows "All-New XFORCE HEV Wins Thailand Car of The Year 2025" with a red award poster at the left and copy plus a "MORE INFORMATION" outlined button at the right. A three-tile photo row begins below it.

The visual language is automotive and confident: black and white fields, warm studio-lit vehicle photography, an extra-bold wide display face for model names, tracked uppercase for buttons and labels, and no rounded corners. A floating green LINE chat bubble appears at the right edge; it is a third-party widget and is not brand UI.

## Colors

The page exposes the company's own palette as `--mmc-*` variables at root. Used tokens:

- `{colors.page-largest}` #000000 (`--mmc-black`): black bands, header strip and footer (area weight 2,541), plus a translucent black (#0000008a, 1,152) that darkens the hero photograph.
- `{colors.canvas}` #ffffff (`--mmc-white`): white sections and button outlines on dark.
- `{colors.surface-2}` #f6f6f6 (`--mmc-off-white`): off-white panels (273).
- `{colors.ink}` #686d71 (`--mmc-anthracite-grey`, also `--mmc-text-grey`, `--mmc-dark-grey` and `--mmc-tone-grey`): the body text color (1,320 characters). It is also assigned to `{colors.primary}` since no filled action color was detected.
- `{colors.ink-4}` #bfc2c4 (`--mmc-cold-grey`, also the button grey variables): light grey text (571 characters).
- `{colors.surface-concrete}` #e3e5e6 (`--mmc-concrete-grey`): disabled and divider grey.
- `{colors.brand-red}` #ed0000 (`--mmc-red`) and `{colors.brand-red-dark}` #bd0000 (`--mmc-dark-red`): the company reds, as published in the site's CSS variables. Their use on the page is through the red logo emblem and award artwork; no interface component was measured in red.

Pure white text (999 characters) and black text (775 characters) carry headlines on photographs and white sections.

## Typography

Four custom faces are loaded: `MMC-Regular` (2,892 characters), `MMC-Bold` (555), `MMC-Medium` (217) and `MMC-Regular-TH` for Thai text. All are declared at weight 400; weight is encoded in the family name. Fallbacks are Arial, Helvetica, Verdana and sans-serif. No foundry or license page was opened.

Tokens: `{typography.display}` MMC-Bold 63.008px/70px (hero lines; 32px/36px on mobile as `{typography.display-mobile}`); `{typography.subheading}` MMC-Bold 16px/25.008px; `{typography.body}` MMC-Regular 16px/28px; `{typography.heading}` MMC-Medium 12px/16px with 2px letter-spacing, uppercase (eyebrows such as "DYNAMIC SHIELD DESIGN"); `{typography.link}` MMC-Bold 14px/20px with 3px letter-spacing, uppercase (buttons). Sizes by characters: 16px (1,495), 20px (791), 14px (621), 12px (275), 42px (189), 21.008px, 36px, 21px, 63.008px (42), 28px. All text is weight 400 by CSS.

## Layout

The page is built from full-width bands: header strip, hero with the quick-action strip attached to its bottom, a white model-carousel band, a half-and-half feature (image left, text right, each 50% of the width), and an edge-to-edge three-tile image row. Text blocks are centered in the hero and left-aligned in the split feature. The quick-action strip divides its width into four equal cells with icon above label. Spacing tokens: `{spacing.s1}` 5px, 10px, 12px, 13px, 15px, 20px, 25px, 30px, 32px and `{spacing.s10}` 36px. Paddings by frequency: 20px (26), 10px (8), 12px (6), 36px (6), 15px (6), 32px, 40px, 30px, 80px (4), 100px, 48px. The outlined buttons have `12px 36px` padding.

## Elevation & Depth

No box shadows were measured. Depth is purely tonal: black strips over photographs, a darkening overlay on the hero image (translucent black) and the contrast between white and black bands. Carousel vehicle images sit on white with their own soft ground shadow inside the photograph, not as an interface shadow.

## Shapes

The extraction recorded no border radius: `desktop.frequencies.borderRadii` is empty, so every rendered element computes 0px, and the token is `{rounded.none}` 0px. Buttons are rectangles with a 2px solid outline; cards, images and bands are square-cornered. This matches the capture, which shows hard rectangular outlines on both outlined buttons.

## Components

- **Outlined button** (`button-secondary`, `link`): transparent fill, 2px solid white border on dark photography (and a dark border in the white feature section), 14px MMC-Bold uppercase with 3px letter-spacing, 48px tall, `12px 36px` padding, 0 radius ("DISCOVER MORE DETAILS", "MORE INFORMATION").
- **Quick-action strip**: black band with four equal icon-over-label cells in the same tracked uppercase style; the labels are REQUEST QUOTATION, TEST DRIVE, DOWNLOAD BROCHURE, CONFIGURE.
- **Navigation** (`nav`, `nav-link`): dark top strip with a hamburger at the right, white 16px/28px link text in the menu; on mobile the nav block shows "OPEN MENU" and is 100px tall at 390px wide.
- **Model carousel item**: car image, bold model name in uppercase 14px to 16px, a grey "From THB ..." price line, line arrows at both sides.
- **Footer** (`footer`): black fill, white text.

No filled primary button was detected; none is declared.

## Design System Architecture

No public design system or brand guideline was found; the home page links to about-us, heritage, philosophy, innovation, concept-cars, contact and careers pages, none of which is a brand guide, and none was read in full. The de-facto system is a set of namespaced CSS custom properties at root: `--mmc-black`, `--mmc-white`, `--mmc-off-white`, `--mmc-red`, `--mmc-dark-red`, `--mmc-anthracite-grey`, `--mmc-cold-grey`, `--mmc-concrete-grey`, with aliases such as `--mmc-text-grey`, `--mmc-button-grey`, `--mmc-light-grey`, `--mmc-disabled-grey` pointing at them, and layout variables like `--xl-min` (120). The four MMC font files complete the system.

## Do's and Don'ts

- Do use black and white bands, with `{colors.ink}` anthracite for body text.
- Do set model names and hero lines in MMC-Bold and body in MMC-Regular.
- Do use tracked uppercase (3px for buttons, 2px for eyebrows).
- Do use 2px outlined rectangular buttons with no radius.
- Don't round corners; the measured radius is 0px.
- Don't use the reds as large interface fills; the measured pages use them in the emblem and artwork only.
- Don't add shadows; none were measured.
- Don't document the LINE chat bubble as brand UI.

## Responsive Behavior

At 390px wide the h1 ("Thailand Specification Highlights Is Ready") is 32px/36px (`{typography.display-mobile}`) in a 350px-wide, 72px-tall block; the eyebrow h2 is 12px/16px; body text is 16px/28px in anthracite; the nav block reads "OPEN MENU" at 28px/60px, 100px tall. Character-weighted sizes: 16px (1,484), 20px (802), 15px (377), 14px (233), 12px (226), 28px (198), 18px, 24px, 10px, 32px. Breakpoints and carousel and grid changes were not measured.

## Iteration Guide

1. Choose black or white bands and set text with `{colors.ink}` or `{colors.canvas}`.
2. Use `{typography.display}` and `{typography.link}` for hero and buttons.
3. Build buttons as 2px outlines with `{rounded.none}`.
4. Keep `{colors.brand-red}` for emblem-level brand marks only.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase3-thai.json --only=mitsubishi-motors-thailand --force --no-motion` before changing values.
