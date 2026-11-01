---
version: alpha
name: Van Cleef & Arpels
category: "Luxury"
description: "Van Cleef & Arpels (vancleefarpels.com, US English home) is a white and #f5f5f5 high-jewelry site with Janson Text serif headings at 45px, Maison Neue Book body at 16px, uppercase 13px labels with 1.5px tracking, black ink, hairline #dddddd rules and no button fills."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#000000"
  primary: "#000000"
  surface-grey: "#929292"
  surface-3: "#222222"
  ink-3: "#111111"
  ink-4: "#757575"
  ink-6: "#7d7d7d"
  ink-olive: "#788c40"
  hairline: "#dddddd"
  nav-bg: "#00000066"
  nav-text: "#666666"
  text-input-text: "#454545"
typography:
  display:
    fontFamily: "\"Janson Text\", Times, \"Times New Roman\", serif"
    fontSize: 45px
    fontWeight: 400
    lineHeight: 55px
  display-mobile:
    fontFamily: "\"Janson Text\", Times, \"Times New Roman\", serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 35px
  subheading:
    fontFamily: "\"Janson Text\", Times, \"Times New Roman\", serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25px
  body:
    fontFamily: "\"Maison Neue Book\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 30px
  nav:
    fontFamily: "\"Maison Neue Book\""
    fontSize: 13px
    fontWeight: 400
  input:
    fontFamily: "\"Maison Neue\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
spacing:
  s1: 4px
  s2: 5px
  s3: 10px
  s4: 14px
  s5: 15px
  s6: 20px
  s7: 38px
  s8: 40px
  s9: 60px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.nav-text}"
    padding: 0px 60px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 5px 0px
    height: 31px
  footer:
    textColor: "{colors.surface-3}"
    borderColor: "{colors.hairline}"
---

## Overview

The measured page is the US English home of Maison Van Cleef & Arpels, `https://www.vancleefarpels.com/us/en/home.html` (title "Maison Van Cleef & Arpels – Jewelry and High Jewelry, place Vendôme in Paris since 1906"). The home page is an editorial sequence of full-width stories rather than a shop grid. A pale grey gradient hero shows a ballerina clip jewel with the headline "The curtain rises on Ballet Précieux" in a serif, the line "High Jewelry and dance meet in a delicate spectacle" and a small underlined link, "ADMIRE THEIR GRACE". The header floats over it: a menu icon and "SEARCH" at left, the centered serif logotype "Van Cleef & Arpels", and at right the locale "US - $", a store pin, a phone, an account icon and a bag.

Below, a split module places a product carousel on white (a watch with the title "Lady Arpels Ballerine Enchantée Or Rose watch" and its materials, "Rose Gold, White Gold, Diamond, Enamel") next to a photograph of the watch on a wrist. A black band follows, "Supporting contemporary dance", with a photograph of dancers and the link "DISCOVER THE INITIATIVE", then a cream band, "A long-standing inspiration", with a brooch photograph and the link "MAKE A PAS DE DEUX". The DOM also lists an h2 "Paris, Tokyo, New York, ..." and a newsletter block ("THE VAN CLEEF & ARPELS NEWSLETTER").

The capture also contains a thin notification bar ("Information successfully saved."); it is a system message and is not documented as brand UI.

Copy is poetic and brief; actions are text links in small letterspaced capitals, never boxed buttons. The mood is ballet, atelier and light.

## Colors

The page is white `#ffffff`; the largest measured background area is a light grey `#f5f5f5` (4,210 weight). Text is black `#000000` (1,033 characters), with `#222222` (510), `#111111` (389; used for headline and body paragraph), mid greys `#757575` (197) and `#7d7d7d` (38), `#666666` (12; the header text over the hero, with a `#00000066` header fill) and `#454545` for input text. White `#ffffff` text (193 characters) is used on the dark photographic bands. Hairlines are `#dddddd` (2 occurrences), with `#e6e6e6` and `#222222` once each.

Backgrounds `#929292` and `#222222` were measured at zero area weight (colors present in the stylesheet or hidden). An olive `#788c40` appears on 33 characters of text; its element was not identified in the capture, so it is kept only as `ink-olive` and not used in a component. The stylesheet also contains a blue `#016fd0` border and a Swiper default `#007aff` (`--swiper-theme-color`); both are a payment widget and a carousel library default, and are not brand colors.

The cream and black bands visible in the capture come from photographic or full-bleed backgrounds that the area measurement did not record as CSS fills, so their values are not tokens.

## Typography

Three families: **Maison Neue Book** (1,470 characters; body, links and navigation), **Janson Text** (473; headings and product titles, with a `Times, "Times New Roman", serif` fallback) and **Maison Neue** (462; labels and inputs with `"Helvetica Neue", Helvetica, Arial, sans-serif` fallback).

- Display: Janson Text 400, 45px / 55px (hero line and the h2); 30px / 35px on the mobile pass.
- Product title: Janson Text 18px / 25px (the h3).
- Body: Maison Neue Book 16px / 30px (paragraphs, 642 characters), `#111111`.
- Label and navigation: 13px uppercase with 1.5px tracking (579 characters; 138 more at 13px with 1px tracking); nav links 13px without tracking.
- Small: 12px with 1.5px tracking, 10px with 1px tracking, 18px with 2px tracking.
- Other sizes seen: 26px, 40.5px, 35px, 14px.

Weights are 400 (2,380 characters) and 700 (25). The characteristic detail is wide tracking on small uppercase Maison Neue labels (1.5px at 13px, about 11.5%), against the unadjusted serif headings.

## Layout

Stories are full-width bands that alternate image and text halves: the text half centers its heading, paragraph and link; the image half bleeds to the edge. The header is a 60px-padded bar (`0px 60px`). The paragraph box measures 560px wide and the h1 box 560px by 55px, so text columns are narrow and centered in their half.

Paddings measured: 10px (29 occurrences), 15px (29), 20px (15), 60px (11), 5px (10), 40px (2) and 170px (1), plus 4px, 14px and 38px once each. Gaps were not recorded. The input measures 560px wide and 31px high with `5px 0px` padding and no visible box (underline style).

## Elevation & Depth

No shadows were measured (`boxShadows` is empty). The only layering is the transparent header over the hero (a `#00000066` fill was measured on the nav element) and the notification bar excluded above. Depth comes from the photographs of jewels with soft grey gradients, and from alternating white, `#f5f5f5`, cream and black bands, not from CSS elevation.

## Shapes

One radius was measured, 4px on a single element whose identity was not recorded; all other rounding is absent from the measured record. Corners in the capture are square on bands, images and links. Jewelry photography and the carousel dots (small circles in the capture) provide the only curved shapes.

## Components

- **Text link**: uppercase Maison Neue 13px with 1.5px tracking and a thin underline ("ADMIRE THEIR GRACE", "DISCOVER THE INITIATIVE", "MAKE A PAS DE DEUX"); hover on the SEARCH control changes text from `#666666` to `#222222` and border color from `#222222` to `#7d7d7d`.
- **Header**: transparent-to-`#00000066` bar, 13px uppercase items, serif logotype, icons for stores, phone, account and bag.
- **Product title**: Janson Text 18px / 25px with a small materials line below.
- **Carousel**: dot pagination below; slide arrows come from the Swiper library (`--swiper-navigation-size: 44px`).
- **Search / newsletter input**: 560px wide, 31px high, 13px Maison Neue, `#454545` text, `5px 0px` padding.
- **Footer**: `#222222` text, `#dddddd` hairline, uppercase 13px headings.
- **Primary button**: none detected (`ctaCandidates` is empty), so no button token is declared.

## Design System Architecture

No public or official Van Cleef & Arpels design system was found, and none was searched for. The stylesheet exposes almost no variables: `--notification-bar-height: 0px` (the layout offset for the system message bar) and the Swiper defaults `--swiper-theme-color: #007aff` and `--swiper-navigation-size: 44px`. The identity is therefore carried in rendered rules: a black and white palette, the licensed Janson Text and Maison Neue families, wide-tracked 13px uppercase labels and generous 10px, 15px, 20px and 60px paddings. Source: `https://www.vancleefarpels.com/us/en/home.html`, measured into `web/data/extracted/van-cleef-and-arpels.json`.

## Do's and Don'ts

Do:
- Use black on white, with `#f5f5f5` as the quiet alternate band.
- Set headlines in Janson Text 400 at 45px and body in Maison Neue Book 16px with 30px line-height.
- Make actions underlined 13px uppercase links with 1.5px tracking.
- Pair each story with a single photograph that bleeds to the edge.

Don't:
- Don't use filled or outlined buttons; none were measured.
- Don't use the carousel widget's `#007aff` or the payment widget's `#016fd0` as brand colors.
- Don't add shadows; none were measured.
- Don't document the system notification bar as brand UI.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 and h2 measure 30px (from 45px), body text 14px (from 16px), navigation text 13px in Maison Neue Book with black `#000000` text, and the mobile table lists 25px (180 characters), 20px, 27px and 26px. Menu, column and carousel behavior on mobile were not measured.

## Iteration Guide

1. White canvas with `#f5f5f5` alternate bands and black text.
2. Janson Text 45px headline, Maison Neue Book 16px / 30px body.
3. One underlined 13px uppercase link per story, tracking 1.5px.
4. Full-bleed photography beside centered text.
5. Hairlines `#dddddd` for rules; no shadows, no boxes.
6. Re-run `node web/scripts/verify-designs.mjs --slug=van-cleef-and-arpels` after any rename.
