---
version: alpha
name: SoftBank
category: "Telecom"
description: "SoftBank Corp. global English home (softbank.jp/en): white canvas with #ecf0f4 news band, text #424242 in Helvetica at 16px, bright blue #357eec pill button (50px radius, 60px high) and a #3b87fb service nav band, 30px-radius tilted card carousel and photo news tiles."
colors:
  canvas: "#ffffff"
  ink: "#424242"
  primary: "#357eec"
  on-primary: "#ffffff"
  surface-mist: "#ecf0f4"
  surface-blue: "#3b87fb"
  ink-black: "#000000"
  ink-grey: "#606060"
  ink-mid: "#555555"
  ink-on-blue: "#ffffffcc"
  footer-bg: "#e1e1e6"
typography:
  display:
    fontFamily: Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  heading:
    fontFamily: Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 50px
  button:
    fontFamily: Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 60px
rounded:
  xs: 4px
  sm: 5px
  md: 10px
  lg: 16px
  xl: 20px
  2xl: 30px
  3xl: 50px
  4xl: 52px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 160px
    height: 60px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    boxShadow: rgba(0, 0, 0, 0.3) 0px 4px 12px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
---

## Overview

SoftBank is the global English home of SoftBank Corp., the Japanese telecom and technology group, measured at softbank.jp/en (page title "SoftBank"). The measured h1 is the small navigation label "Mobile", and the body text begins with a news item, "SoftBank Corp., Hitotsubashi University and NIPR Achieve Wor...". The page is a corporate portal: it routes visitors to the group's services and to news rather than selling a single product.

In the capture, a centred header shows the SoftBank mark (two grey bars) beside a serif "SoftBank" wordmark. Directly beneath is a horizontal carousel of slightly tilted, rounded cards with soft shadows: "NET ZERO" (Toward zero greenhouse gas emissions, including the supply chain), "SoftBank News" (Explore how AI, 5G/6G and other new technologies may impact our lives), "Vision and Strategy" (Information Revolution, Happiness for everyone) and "UTX". A pause button and dots sit below. A bright blue band follows with seven round image icons and labels (Mobile, Y!mobile, LINEMO, Internet, Energy, Business, About Us) and three translucent pills (My SoftBank, Support, Shop), plus a small JAPANESE language link. Then a "Special" section with one feature card ("Special Event for Enterprises, hosted by SoftBank Corp., SB OAI Japan GK, SoftBank Group Corp. and OpenAI"), a #ecf0f4 "SoftBank News" section with a mosaic of photo tiles with captions, tag chips (Smartphones, Explainers, SoftBank HAWKS, Basketball, IoT, VR, 5G, AI) and a "See more" pill button.

The voice is neutral, informational English with short headings.

## Colors

Backgrounds by area: #ffffff (4190), #ffffffbf (1505, translucent white), #ecf0f4 (1288), #3b87fb (422), #e1e1e6 (314), #357eec (47), #ffffff1a (28), #969696 (22), #424242 (2). Text by characters: #424242 (8641), #000000 (445), #ffffff (149), #606060 (52), #555555 (37), #ffffffcc (8), and #0000ee (8, a browser default link color, excluded).

- **canvas #ffffff**: the page.
- **ink #424242**: nearly all text; **ink-black #000000**, **ink-grey #606060** and **ink-mid #555555** are secondary values.
- **primary #357eec**: the fill of the "See more" pill (60px high, 392px wide) with **on-primary #ffffff** text.
- **surface-blue #3b87fb**: the service-navigation band; **ink-on-blue #ffffffcc** is the translucent white label color on it.
- **surface-mist #ecf0f4**: the news section background; **footer-bg #e1e1e6**: a light grey background.

The CSS corpus also lists #eeeeee (25), #3f3f3f (24), #333333 (24), #0080f4 (22), #ed141f (14) and #d91900 (13); the red values were not measured as rendered fills, so no role is assigned to them. The root defines --swiper-theme-color #007aff, a carousel library default, which is excluded.

## Typography

No web fonts are loaded (loadedFonts is empty). All 9340 measured characters use Helvetica, with Arial and generic sans-serif as fallbacks, so the page renders in the system Helvetica or Arial. The logo wordmark is a graphic, not text.

Sizes by characters: 16px (9126), 11px (90), 12px (53), 14px (38), 40px (33). Weights: 400 (9269), 700 (49), 500 (22). No letter spacing was measured. Section headings ("Special", "SoftBank News") are 40px weight 700 on a 50px line; everything else is 16px.

- **heading** 40px / 50px, weight 700.
- **display** 16px / 20.8px, weight 400 (the measured h1 role is the small "Mobile" label, so the generated display token is 16px).
- **button** 16px weight 700 / 60px line height.

## Layout

The desktop page is 1280px wide and 3893px tall. Sections stack as full-width bands: carousel, blue service band, white Special section, grey-blue news band. Content is centred; news tiles form a masonry-like mosaic of uneven widths in two rows that extend beyond the viewport as a horizontal scroller.

Paddings: 20px (91), 8px (90), 12px (9), 16px (9), 10px (7), 30px (7), 40px (5), 80px (3), 160px (2), and the CTA uses 0px 160px. Gaps: 5px (22), 12px (6), 6px (6), 4px (4), 2px, 10px and 8px (2 each).

## Elevation & Depth

One shadow is measured, rgba(0, 0, 0, 0.3) 0px 4px 12px 0px, on the tilted carousel cards (the card token). No borders were measured. Depth also comes from the card tilt (a clip path with skewed corners), photographs and the translucent white layers (#ffffffbf, #ffffff1a).

## Shapes

Radii: 30px (91 uses), 16px (36), 50% (25), 10px (8), 20px (4), 52px (3), 5px (3), 50px (2), 16px 16px 0px 0px (1), 4px (1). The 30px radius rounds photo tiles and service icons' tiles; the 50px radius rounds the CTA pill; the 52px radius rounds the translucent My SoftBank pill (37px high); 50% makes the service icons circular. Tilted carousel cards use a custom clip path with 16px corners.

## Components

**Primary pill.** #357eec fill, white 16px weight-700 label, 50px radius, 60px high, padding 0px 160px (392px wide) ("See more").

**Translucent pill.** White text on rgba(255, 255, 255, 0.1) that becomes 0.2 on hover, 52px radius, 37px high ("My SoftBank", "Support", "Shop").

**Service icon.** A circular photograph or logo with a label underneath, on the blue band.

**Carousel card.** A tilted rounded card with a soft 0 4px 12px shadow and a blue chevron button.

**News tile.** A photo with a caption bar of white translucent background, 30px radius.

**Tag chip.** A small white rounded chip with a 16px label.

## Design System Architecture

No public design-system page was found and the page links to none; research was limited to the measured page. The system visible in the shipped CSS is minimal: no root variables beyond the Swiper carousel's (--swiper-theme-color, --swiper-navigation-size 44px), no loaded fonts, and absolute pixel values. Tokens in this file are computed-style measurements.

## Do's and Don'ts

- Do keep text at 16px #424242 Helvetica with 40px bold section headings.
- Do use #357eec for the single main button and #3b87fb for the service band.
- Do round media with 30px radii and buttons with 50px.
- Do use translucent white pills on blue.
- Don't use #0000ee or the Swiper default blue #007aff.
- Don't add heavy shadows; one soft shadow is used.
- Don't treat the pause and scroll-to-top controls as brand UI.

## Responsive Behavior

Mobile measurements: h1 16px (47px wide), h2 40px (990px wide), body 16px (950px wide), the primary CTA 16px (392px wide). Mobile font sizes by characters equal the desktop set (16px, 11px, 12px, 14px, 40px). The measured widths exceed a phone viewport, so no reliable reflow behavior was recorded; layout changes at breakpoints are not measured.

## Iteration Guide

1. Start with a white page, Helvetica 16px #424242 and 40px bold section titles.
2. Add a carousel of tilted 16px-corner cards with a 0 4px 12px shadow.
3. Put services on a #3b87fb band as circular icons and translucent pills.
4. Build news as 30px-radius photo tiles on #ecf0f4 with white caption bars.
5. Use one #357eec pill button per section.
6. Gate: node web/scripts/verify-designs.mjs --slug=softbank.

## Additional Measurement Notes

The desktop pass reports 677 visible elements, an English document language and no loaded web fonts. The spacing scale in the frontmatter runs from 2px to 16px and mirrors the small gaps inside chips, icon labels and pills, while the 80px and 160px paddings belong to section blocks and the wide call-to-action. When extending the system, reuse the pill radii, the one soft shadow, the translucent white layers on blue, and the plain Helvetica text style, and add new content as further rounded photo tiles or tag chips rather than as new component types.
