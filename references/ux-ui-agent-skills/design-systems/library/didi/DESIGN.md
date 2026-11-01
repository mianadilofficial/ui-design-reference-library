---
version: alpha
name: DiDi Global
category: "Logistics & Mobility"
description: "DiDi Global's official home page (didiglobal.com): light #f8f8f8 and white screens with grey #666666 text, DiDi orange #ff7f41 for links and a circular outlined 'Learn More' button, Aspira Regular type with generous tracking (47px/54px at 2.6px), a circular hero image mask, flat and shadow-free."
colors:
  canvas: "#f8f8f8"
  page-largest: "#ffffff"
  ink: "#666666"
  ink-strong: "#333333"
  ink-secondary: "#adadad"
  ink-muted: "#858585"
  ink-faint: "#b3b3b3"
  nav-text: "#dedede"
  primary: "#ff7f41"
  on-primary: "#ffffff"
  surface-3: "#f5f5f5"
  surface-4: "#f0f0f0"
  surface-dark: "#1a1919"
  hairline: "#ececec"
typography:
  display:
    fontFamily: "\"Aspira Regular\", sans-serif"
    fontSize: 47px
    fontWeight: 400
    lineHeight: 54px
    letterSpacing: 2.6px
  display-mobile:
    fontFamily: "\"Aspira Regular\", sans-serif"
    fontSize: 26.91px
    fontWeight: 400
    lineHeight: 31.4847px
    letterSpacing: 2.1px
  section-title:
    fontFamily: "\"Aspira Regular\", sans-serif"
    fontSize: 27px
    fontWeight: 400
    lineHeight: 37px
  heading:
    fontFamily: "\"Aspira Regular\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
  body-news:
    fontFamily: "\"Aspira Regular\", sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.72px
    letterSpacing: 0.3px
  body:
    fontFamily: DFPKingGothicGB-Regular, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: "\"Aspira Regular\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.54px
    letterSpacing: 0.8px
  meta:
    fontFamily: "\"Aspira Regular\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.32px
    letterSpacing: 1px
  nav:
    fontFamily: "\"Aspira Regular\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 38px
rounded:
  pill: 9999px
spacing:
  s1: 20px
  s2: 46.84px
  s3: 65px
  s4: 73.84px
  s5: 90px
  s6: 101.06px
  s7: 115.19px
  s8: 134.64px
components:
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.body}"
  link-accent:
    textColor: "{colors.primary}"
    typography: "{typography.meta}"
  circle-button:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.nav-text}"
    padding: 20px 0px 0px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
---

## Overview

This file documents the English home page of DiDi Global, https://www.didiglobal.com/ (page title "Homepage - DiDi official website"; the document is a script-rendered single-page site whose static HTML carries only Chinese SEO keywords and the title "首页-滴滴官网"). It has a language switch (EN / 中文), a three-bar menu icon and the DiDi logo at top left, and full-screen "pages" that change as the user scrolls: a hero with the headline "MORE THAN A JOURNEY" in white, a news screen, and a footer with "Customer Service Hotline".

The measured capture is the news screen. On a pale `#f8f8f8` field a large circular crop of a photograph (a passenger inside a vehicle, an autonomous-driving theme) sits in the centre. To its left is a featured headline ("DiDi Autonomous Driving Launches Global Expansion, with Pilot Program in the UAE Planned This Year"), a date "2026 / 04 / 15" and a circular orange-outlined arrow button beside "Learn More"; to its right a stack of three smaller news items, each with a headline, a date and an orange "Learn More" link.

Voice is concise corporate news English with slash-separated dates ("2026 / 04 / 15"). Type is light and wide-tracked. Imagery is cinematic photography masked into a circle, a motif repeated by the round buttons and the 50% radius elements.

Role notes. The extractor found no filled button, so `primary` is the orange `#ff7f41` used for "Learn More" and the circle outline. The scrim `#00000033` it detected as a card is an image overlay and is not tokenised. Hidden Chinese keyword text at the top of the markup is not visible design.

## Colors

Measured on the desktop pass. Backgrounds by area: `#ffffff` (6144), `#f8f8f8` (1024), `#f5f5f5` (1024), `#f0f0f0` (811), `#333333` (698), `#1a1919` (590), a `#00000033` overlay (205) and `#d4c39e` (4). Text by characters: `#adadad` (645), `#ffffff` (297), `#666666` (274), `#858585` (262), `#333333` (114), `#b3b3b3` (42), `#ff7f41` (30), `#9b9b9b` (14).

- `canvas` `#f8f8f8`: the screen background in the capture; `page-largest` `#ffffff` the largest area. `surface-3` `#f5f5f5` and `surface-4` `#f0f0f0` are successive light bands.
- `ink` `#666666`: headlines and "Learn More" labels in the news screen. `ink-strong` `#333333`: section titles such as "NEWS" and link colours. `ink-secondary` `#adadad` (footer headings such as "Customer Service Hotline"), `ink-muted` `#858585`, `ink-faint` `#b3b3b3` (dates).
- `primary` `#ff7f41`: "Learn More" links and the circular button outline.
- `surface-dark` `#1a1919` and `#333333` areas: dark footer and hero regions; text on them is white or `#dedede` (`nav-text`).
- `hairline` `#ececec`: a divider colour measured in the CSS.

No `:root` variables are declared; colours are literal values in the CSS.

## Typography

Three faces: Aspira Regular (English), DFPKingGothicGB-Regular (Chinese and footer legal text) and AVGARDN (2 characters). Aspira is 1531 characters, DFP King Gothic 147. Only weight 400 is used (1680 of 1680 characters).

Probed roles: the hero headline "MORE THAN A JOURNEY" is 47px/54px at 2.6px letter-spacing in white (26.91px/31.4847px at 2.1px on mobile); "NEWS" is 27px/37px in `#333333`; "Customer Service Hotline" is 18px/18px in `#adadad`; news headlines are 13px/18.72px at 0.3px in `#666666`; the "Learn More" next to the circle is 14px/22.54px at 0.8px; dates are 12px/19.32px at 1px in `#b3b3b3`; the small orange links are 12px/19.32px; the language toggle is 14px in `#dedede`; footer legal text is DFP King Gothic 13px/20px in white; nav links measure 12px/38px.

Sizes by characters: 13px (764), 12px (334), 14px (301), 22px (130), 16px (62), 18px (44), 47px (18), 27px (16). Aspira is a commercial face served by the site; the stack falls back to generic `sans-serif`.

## Layout

Each screen is full viewport. The news screen is a three-column composition: featured item at left (text block about a fifth of the width), circular image in the centre, three stacked items at right. The header is a transparent strip with logo, EN / 中文 and a menu icon; the measured header box is 65px tall with a 20px top padding. The page measures 800px tall at the 1280px viewport (the screens change by script rather than scrolling the document). Measured paddings include 46.8438px, 293.359px, 134.641px, 453.109px and 160.391px, which are positioning offsets for the centred composition.

## Elevation & Depth

Flat. No box-shadow was measured. Depth comes from the circular photograph against the pale field, full-bleed dark photographic hero screens, and a `#00000033` overlay region.

## Shapes

Circles dominate: `50%` radius appears 17 times (the central photo mask and the arrow button among them), recorded as `pill`. Text blocks and bands are square. No other radius was measured.

## Components

Circular arrow button. A round button with a thin orange `#ff7f41` outline and a small chevron, followed by "Learn More" in 14px/0.8px `#666666`.

News item (right column). 13px/18.72px headline in `#666666`, a date line in `#b3b3b3` at 12px with 1px tracking, and an orange 12px "Learn More" link aligned right.

Featured item (left). A larger headline in the same face, a date and the circular button.

Header. A transparent strip over each screen: logo at left; "EN" (active, `#dedede`) and "中文"; three-bar menu icon at the right.

Footer. Dark `#1a1919` or `#333333` region with `#adadad` 18px headings and white 13px legal text, including the copyright "© 2012-2026 Beijing Xiaoju Technology Co, Ltd." and licence line.

Hero screen. In the markup and the probes the first screen is a photographic or video stage with the white headline "MORE THAN A JOURNEY" in `h3.en-font` at 47px, uppercase in the source copy and tracked at 2.6px; its box measures 379px wide and 108px tall on desktop, and the hero text sits on dark imagery rather than the pale field.

Footer legal block. White 13px DFP King Gothic lines on the dark footer carry the copyright and licence numbers; they are plain text links without underline styling measured.

## Design System Architecture

No public design system or brand guideline was found: the opened page's static HTML contains only the title and hidden Chinese keywords, and the rendered page links none. No `:root` custom properties were measured, so the de-facto system is literal CSS values with class names such as `font-clamp`, `en-font`, `en-tag active`, `tit-ch`, `check-more`, `fl` and `fr`. Source: https://www.didiglobal.com/ as measured.

## Do's and Don'ts

Do mask hero photography into a circle and echo the circle in buttons.

Do keep text light (weight 400) with wide tracking on large headlines (2.6px at 47px).

Do use orange `#ff7f41` only for links and the circular button outline.

Do keep backgrounds in the pale grey ramp (`#ffffff`, `#f8f8f8`, `#f5f5f5`, `#f0f0f0`) with dark `#1a1919` for the footer.

Don't add shadows or heavy weights; none were measured.

Don't tokenise the photo overlay as a card.

Don't use Chinese fonts for English headlines.

Don't invent a filled button; none was found.

## Responsive Behavior

Measured at 390px: the headline is 26.91px/31.4847px with 2.1px tracking (box 272px wide and 63px tall, with 59.28px left padding); body text role is 12px in `#333333`; the nav is 13px/20px in white, 49px tall. Mobile sizes by characters: 11.31px (766), 14.43px (230), 12px (194), 19.5px (52), 26.91px (18), 18.72px (16). Layout reflow of the circular composition was not measured.

## Iteration Guide

1. Pale grey screens, `#666666` text, orange `#ff7f41` accents only.
2. Aspira 400: 47px headline with 2.6px tracking, 27px section titles, 13px news text, 12px meta.
3. Mask the hero photo into a circle and use 1px orange circle buttons.
4. Keep everything flat.
5. Re-measure the hero and footer screens before documenting them in more detail.
