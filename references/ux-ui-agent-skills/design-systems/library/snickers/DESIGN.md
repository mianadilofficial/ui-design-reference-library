---
version: alpha
name: Snickers
category: "Food & Beverage"
description: "SNICKERS official site: white canvas #ffffff alternating with chocolate-brown #3c1400 bands, indigo #21008c pill buttons (30px radius, 61px high), campaign display type at 64px with 0.7px tracking, Drupal-hosted primary, secondary and headline typefaces, and product-photography-led sections."
colors:
  canvas: "#ffffff"
  ink: "#3c1400"
  primary: "#21008c"
  on-primary: "#ffffff"
  surface-brown: "#3c1400"
  surface-light: "#ffffff"
  surface-grey: "#e5e5e5"
  hairline: "#c4c4c4"
typography:
  display:
    fontFamily: DrupalPrimaryTypefaceFont, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 64px
    letterSpacing: 0.7px
  display-mobile:
    fontFamily: DrupalPrimaryTypefaceFont, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: 0.48px
  heading:
    fontFamily: DrupalHeadlineCampaignFont, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 64px
    fontWeight: 300
    lineHeight: 64px
    letterSpacing: 0.7px
  subheading:
    fontFamily: DrupalPrimaryTypefaceFont, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 26.4px
    letterSpacing: 0.7px
  body:
    fontFamily: DrupalSecondaryTypefaceFont, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 35.2px
    letterSpacing: 0.7px
  button:
    fontFamily: DrupalSecondaryTypefaceFont, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: 0.7px
  nav:
    fontFamily: DrupalPrimaryTypefaceFont, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: 0.7px
rounded:
  xs: 10px
  sm: 20px
  md: 30px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 15px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 61px
  button-light:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 18px 50px 17px 20px
    height: 60px
    boxShadow: rgba(0, 0, 0, 0.1) 1px 1px 10px 0px
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 0px 10px
    height: 54px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.1) 1px 1px 10px 0px
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.canvas}"
---

## Overview

SNICKERS is Mars's chocolate-bar brand, measured at snickers.com (page title "SNICKERS® Official Website | Chocolate Bars, Recipes and More"). The measured h1 is "I'M SNICKERS ALMOND. HAVE WE MET?" and the page body copy opens with "Just when you thought SNICKERS couldn't get any cooler." The site is a campaign-style brand page: alternating chocolate-brown and white sections, each led by a bar photograph, a short shouted headline and one pill button.

In the capture, the header (dark brown) holds the italic blue-and-red SNICKERS logo beside an NFL shield with the line "OFFICIAL CHOCOLATE SPONSOR OF THE NFL", a nav row (OUR PRODUCTS, NFL, ICE CREAM, HI-PROTEIN, RECIPES, ABOUT) and a utility row (WHERE TO BUY, CONTACT & HELP, SIGN UP, SEARCH). A hero video band follows ("WHY? YOU'RE NOT YOU WHEN YOU'RE HUNGRY." with a "SEE THE LINEUP." button), then a brown product introduction ("HELLO." / "I'M SNICKERS ALMOND. HAVE WE MET?" and a red "LET'S GO." pill), a white "TIME TO PLAY FAVORITES." section with a red underline bar and three product tiles (Snickers Originals, Almond, Ice Cream, each with an indigo "PICK ME." pill), a "LET'S CHILL." ice-cream band, a "MINI SIZE. MAJOR FLAVOR." band, a "FUEL UP" hi-protein collage, a recipe feature, a "VISIT US ON SOCIAL" carousel and an indigo footer with the logo, region select and legal links.

A birthday age-gate modal ("HOLD UP. Enter your birthday and you're free to go. We know you're hungry.") with a translucent black scrim (#00000099) was present in the capture; it is a gate and not brand UI, and is not documented as tokens. The voice is cheeky and conversational: short imperatives and puns in all caps ("PICK ME.", "LET'S GO.").

## Colors

Backgrounds by area: #ffffff (3937), #3c1400 (2600), #00000099 (1024, the age-gate scrim, excluded), #e5e5e5 (857), #f2f2f2 (280), #21008c (13). Text by characters: #ffffff (1830, on dark sections), #3c1400 (311, on light sections), #21008c (12), and #0000ee (28, the browser default link color, excluded).

- **canvas #ffffff** and **surface-light #ffffff**: light sections and the white button.
- **surface-brown #3c1400**: the deep chocolate section color; also the dark text color **ink #3c1400** on white.
- **primary #21008c**: indigo, the measured fill of the SUBMIT and "SEE THE LINEUP." style buttons (rgb(33, 0, 140) in the hover probe) and the footer band; **on-primary #ffffff** is its label. On hover the button fill becomes rgba(33, 0, 140, 0.54) with chocolate-brown text and border.
- **surface-grey #e5e5e5**: light grey section (also the --c-background-section variable), **hairline #c4c4c4** borders.

The generated tokens had assigned primary to the white SELECT REGION footer control; that is replaced by the measured indigo fill, which drives the actual call-to-action buttons. The red of the "LET'S GO." pill and logo was not measured as an element fill in the extraction and is not tokenized. The stylesheet defines campaign variables such as --c-subcolor-1 #e02466, --c-alert #ad0404, --c-quick-link-color #007aff and --c-player #F00; none of them was verified as a rendered brand surface.

## Typography

Loaded fonts: DrupalHeadlineCampaignFont (weights 100, 400, 900), DrupalPrimaryTypefaceFont (400, 900) and DrupalSecondaryTypefaceFont. These are the brand's own faces served under generic names, so the family names carry no further public information. Measured characters: secondary 1012, primary 562, helvetica 499 (the cookie or gate layer) and headline 108. If the faces are unavailable, use a condensed bold grotesque for headlines and a neutral sans for body.

Sizes by characters: 14px (843), 12px (389), 10px (205), 18px (186), 16px (173), 64px (166), 22px (106), 28px (57), 24px (48), 40px (8). Weights: 400 (1823), 500 (177), 700 (124), 300 (57). Tracking is 0.7px at most sizes and 1.6px at 14px and 10px small labels.

- **display** primary face 64px / 64px, weight 500, 0.7px.
- **display-mobile** 40px / 40px, 0.48px.
- **heading** campaign headline face 64px weight 300.
- **subheading** 24px weight 700 / 26.4px.
- **body** secondary face 22px / 35.2px.
- **button** 18px / 25.2px.
- **nav** 14px / 22.4px.

## Layout

The desktop page is 1280px wide and 5643px tall, built from full-width bands. Each band centres a short headline and either one large image or a three-column set of product tiles on an even grid. The product intro uses a two-column split with the bar image on the left and copy on the right. Small labels ("HELLO.", "LET'S CHILL.", "WHY?") sit above headlines as eyebrows. A short red bar divider sits under section titles.

Paddings: 10px (15), 16px (14), 20px (13), 40px (7), 18px (4), 15px (4), 30px (4), 60px (4), then 310px (3) and 560px (1) for centred content columns, 80px (2). Gaps: 10px (5), 20px (2), 30px (1).

## Elevation & Depth

Two shadows are measured: rgba(0, 0, 0, 0.1) 1px 1px 10px 0px (3 uses, buttons and cards) and rgba(0, 0, 0, 0.4) 0px 4px 10px 0px (the skip-to-content link). The rest of the depth is photographic: large bar photographs, caramel and chocolate close-ups and overlapping packaging. Borders: #c4c4c4 (2) and #ffffff (1).

## Shapes

Radii: 10px (44), 30px (15), 50% (4), 20px (2), 0px 0px 10px 10px (1). Buttons are pills with a 30px radius; cards and tiles use 10px or 20px; circular controls (carousel arrows, the pause button) are 50%. The stylesheet also declares --v-button-border-radius 0px and --v-card-border-radius 0px, but the rendered values above are what the page actually uses.

## Components

**Primary pill button.** Indigo #21008c fill, white label, 30px radius, 61px high; examples "SUBMIT" and "PICK ME.". Hover swaps to a translucent indigo with chocolate text.

**Light pill button.** White, #3c1400 label at 18px, 30px radius, padding 18px 50px 17px 20px, 60px high, shadow rgba(0, 0, 0, 0.1) 1px 1px 10px; measured on the footer region selector ("SELECT REGION").

**Outline pill.** Transparent with a 2px white border, 14px label, 54px high, 157px wide ("SEE ALL").

**Product tile.** A brown square with a graphic red-and-blue "S" shard and a bar photo, a two-line name and an indigo pill.

**Section title.** Centred all-caps campaign headline with a short red underline.

## Design System Architecture

No public design-system or brand-guideline page was found, and the site links to none; research was limited to the measured page. The shipped CSS shows a Drupal-themed system: root variables with the --c-* (colors), --v-* (typefaces and radii) and --esw* (a third-party widget) prefixes, three Drupal-named font faces and a Swiper carousel (--swiper-navigation-size 44px). Tokens in this file come from the measured computed styles.

## Do's and Don'ts

- Do alternate white and #3c1400 bands, with one shouted headline each.
- Do use indigo #21008c pills (30px radius) for actions.
- Do pair every product with large photography and an all-caps name.
- Do use playful two-word imperatives for buttons.
- Don't use #0000ee or any browser-default link blue.
- Don't document the age-gate modal, its scrim or the chat widget as brand UI.
- Don't use square buttons; the measured style is a pill.

## Responsive Behavior

Mobile measurements: h1 40px (350px wide), h2 40px (campaign face), body 18px, the SELECT REGION button 16px (350px wide), nav 14px. Mobile font sizes by characters: 12px (885), 14px (513), 10px (205), 20px (170), 40px (156), 16px (140), 18px (55), 22px (51), 29px (18). Breakpoints and layout reflow were not measured.

## Iteration Guide

1. Start with a #3c1400 band, white all-caps campaign headline at 64px (40px on mobile) and 0.7px tracking.
2. Place one bar image beside the headline and one pill button.
3. Alternate with white sections for product choices: three tiles, each with an indigo "PICK ME." pill.
4. Keep radii at 10px for tiles and 30px for buttons.
5. Close with an indigo footer.
6. Gate: node web/scripts/verify-designs.mjs --slug=snickers.
