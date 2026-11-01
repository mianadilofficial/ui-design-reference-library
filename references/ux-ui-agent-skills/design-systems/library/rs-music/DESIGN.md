---
version: alpha
name: RS Music
category: "Thai Brands"
description: "RS Music (rsmusicth.com), Thai label site \"RS MUSIC IS BACK!\": black pages with white Kanit uppercase headings, magenta #e708ff accents and buttons (2px radius, 44px high), purple #8601ff hover, release cards with magenta category chips and a 4-up artist photo grid."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#e708ff"
  on-primary: "#ffffff"
  surface-purple: "#833ca3"
  surface-white: "#ffffff"
  surface-gray: "#bbbbbb"
  ink-muted: "#bebebe"
  ink-soft: "#e4e4e4"
  accent-pink: "#ff27fd"
  link-hover: "#8601ff"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 67.2px
    textTransform: uppercase
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 38px
    fontWeight: 300
    lineHeight: 53.2px
    textTransform: uppercase
  heading:
    fontFamily: Kanit, sans-serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 67.2px
    textTransform: uppercase
  subheading:
    fontFamily: Kanit, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 33.6px
    textTransform: uppercase
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  button:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
    textTransform: uppercase
  nav:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
rounded:
  xs: 2px
  pill: 9999px
spacing:
  s1: 4px
  s2: 7.2px
  s3: 10px
  s4: 13px
  s5: 14.4px
  s6: 15px
  s7: 16px
  s8: 23px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 40px
    height: 44px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  link-hover:
    textColor: "{colors.link-hover}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 13px 10px
---

# RS Music

## Overview

The measured page is https://www.rsmusicth.com/ (title "RS Music – RS MUSIC IS BACK!"), the web home of RS Music, the label arm of the RS group in Thailand. It is a dark entertainment portal. A black header bar holds the white-and-black RS MUSIC logo at the left, six links in the middle (Home, About RS Music, Artist, News, Music Video, Contact Us) with a magenta underline on the active item, and a row of five white social icons at the right; a thin magenta line runs across the very top. Below sit a full-width slider (the captured slide is a girl-group single, with streaming-service logos along its lower edge and chevron arrows at both sides), a black "LATEST NEWS" section with three article cards and a "VIEW MORE" outlined button, a white band holding a magenta "เพิ่มเติม" ("more") button, and a black "OUR ARTIST" section with a row of four full-height portrait photographs.

The mood is pop-music nightlife: black ground, saturated magenta, glossy portraits. Section titles are two-tone: the first word in white, the last word in magenta ("LATEST **NEWS**", "OUR **ARTIST**"), each followed by a short centered magenta rule. Article titles are in Thai and English mixed. The page is built on WordPress with Elementor, judging from the loaded icon fonts "eicons" and "Font Awesome 5 Brands" in the extraction.

## Colors

Painted area is dominated by dark fills: #833ca3 (6301 weight), #000000 (5845), #bbbbbb (4201), and the near-blacks #1a1a1a, #2a2a2a and #0e0e0e. `canvas` is set to #000000, the section background in the capture; the document body itself measured #ffffff (now `surface-white`), which shows in the white band holding the magenta button. `surface-purple` #833ca3 and `surface-gray` #bbbbbb are measured fills with no role assigned beyond their area weight.

The action color is magenta `primary` #e708ff: it fills the secondary-role button ("เพิ่มเติม"), borders the "VIEW MORE" outline button, colors 209 characters of link text and the second word of section headings, and is the border color on 9 elements. The extractor's own primary pick, #1da1f2 (a Twitter-blue circle with an 80px size), belongs to a social-icon widget and is dropped; the extractor's `ink` pick #21759b is the WordPress default link blue (15 characters) and is dropped. `ink` is set to #ffffff, the most frequent text color (683 characters), because the body copy and headings sit on black. `ink-muted` #bebebe (156 characters) and `ink-soft` #e4e4e4 (36) are lighter gray text; `accent-pink` #ff27fd (17 characters) is a second magenta text color. `link-hover` #8601ff (rgb(134, 1, 255)) is the measured hover color of the social links, which also drop to 0.9 opacity.

## Typography

Kanit carries almost everything (1113 characters), loaded at 300, 400, 500 and 700; Kanit is a Thai-and-Latin sans, which is why Thai release titles and English headings share one family. Montserrat appears on 15 characters (a theme default, weight 700) and Roboto 500 is also loaded.

Measured roles: `display` is Kanit 500, 48px / 67.2px, uppercase (the h1 "RS MUSIC"); `heading` is Kanit 300, 48px / 67.2px, uppercase ("LATEST NEWS"); `subheading` is Kanit 500, 24px / 33.6px, uppercase; `body` is Kanit 400, 18px / 25.2px (the copyright line "©2023 rsmusicth.com All Rights Reserved | Cookie Policy"); `button` is Kanit 500, 16px / 22.4px, uppercase; `nav` is Kanit 400, 16px / 22.4px. Size counts by character: 24px (527), 16px (361), 20px (74), 48px (45), 18px (39), 40px (37), 12px (18). Weights: 500 (553), 400 (527), 700 (28), 300 (20). The light-weight 300 against the medium 500 on the same 48px size is what makes the "LATEST NEWS" two-tone heading. On the 390px mobile pass the display size is 38px / 53.2px at weight 300, uppercase.

## Layout

The header is a single 48px-high nav row (links padded `13px 10px`, the Home link 62px wide). The hero slider is full width. News cards sit three across in a container about 1140px wide (the h2 measured 1140px wide, the h1 1120px), each with a landscape image, a magenta category chip at the image's top-right ("BRIQ", "CONCERT"), a two-line title and a date line at 12px ("6 August 2025"). The artist grid is four equal columns of portrait photos with no gutter. Paddings measured: 10px (39 uses), 50px (30), 16px (9), 13px (6), 15px, 40px and 80px; gaps of 30px and 35px.

## Elevation & Depth

Depth is quiet. Box shadows measured: `rgba(0, 0, 0, 0.15) 0px 0px 10px 0px` (3 uses) and `rgba(0, 0, 0, 0.2) 0px 0px 1px 1px` (1 use). On black sections shadows would be invisible, so hierarchy comes from color: white and magenta on black, bordered outline buttons (1px #e708ff), and the photography itself. Overlay chips (magenta on the card image) provide the only layering inside a card.

## Shapes

Radii measured: 50% (5 uses), 10% (5 uses) and 2px (4 uses). The 2px value (`xs`) is the button radius: magenta rectangles with almost square corners. 50% and 10% are percentage radii on social and icon elements; the token file keeps a `pill` 9999px for the circular case. Cards, chips and photographs show square corners in the capture.

## Components

**Primary button**: magenta #e708ff fill, white Kanit 500 16px uppercase text, `10px 40px` padding, 44px high, 2px radius, 1px #e708ff border (the "เพิ่มเติม" button).

**Outline button**: "VIEW MORE" on black, a 1px magenta border with magenta uppercase text and the same 2px corner.

**Nav link**: white Kanit 400 16px, `13px 10px` padding, 48px high, magenta underline on the active page.

**Links**: magenta #e708ff, Kanit 400 16px; hover turns the color to #8601ff.

**Category chip**: small magenta rectangle with white capitals, placed over card images.

**Card**: image, bold title, small date; no border and no radius.

**Footer**: Kanit 18px white text on a dark fill: "©2023 rsmusicth.com All Rights Reserved | Cookie Policy".

## Design System Architecture

No public RS Music design system, brand-guideline page or token package was opened for this brief, so there is no official source to cite. The shipped CSS shows a WordPress and Elementor build: 29 root variables, including the Bootstrap-style palette names (`--light` #f8f9fa, `--yellow` #ffc107, `--indigo` #6610f2, `--green` #28a745, `--pink` #e83e8c, `--purple` #6f42c1) and a `--font-family-sans-serif` system stack. Those variables are theme defaults and are not used by the measured page; the brand look is carried by literal values: black, white, magenta #e708ff and the single Kanit family.

## Do's and Don'ts

- Do set headings in Kanit, uppercase, with the last word in magenta #e708ff.
- Do use magenta for buttons, links and category chips on black or white.
- Do keep button corners at 2px and button height at 44px.
- Do show artists as an edge-to-edge row of portrait photographs.
- Do use #8601ff for link hover.
- Don't use the Twitter blue #1da1f2 or WordPress blue #21759b as brand colors.
- Don't add rounded corners to cards or buttons.
- Don't use the Bootstrap-style theme variables for new UI.

## Responsive Behavior

A 390px mobile pass was recorded. The first heading role (an h2 acting as the h1) is Kanit 300, 38px / 53.2px, uppercase, white. Mobile character counts by size are 24px (460), 16px (263), 18px (88), 20px (71), 38px (37), 40px (37), 23px (37) and 12px (18). Column counts, navigation and breakpoints were not measured.

## Iteration Guide

1. Start with a black canvas, white Kanit text and magenta #e708ff actions; use white only for the band behind the "more" button.
2. Set headings Kanit uppercase 48px / 67.2px (500 for the h1, 300 for section titles) and body Kanit 18px / 25.2px.
3. Build buttons at 44px high, `10px 40px` padding and 2px radius; hover links to #8601ff.
4. Use a four-up portrait grid for artists and magenta chips for card categories.
5. Gate: `node web/scripts/verify-designs.mjs --slug=rs-music`.
