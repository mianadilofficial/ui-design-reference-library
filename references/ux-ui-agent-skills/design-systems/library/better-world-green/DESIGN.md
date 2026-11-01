---
version: alpha
name: Better World Green
category: "Thai Brands"
description: "Corporate site of Better World Green Public Company Limited (BWG), an industrial-waste management group. Sarabun 300 body and Kanit buttons, coral #f4524d Read-more buttons with 5px radius, deep forest-green sections #20311a and #3d5730 against white, translucent 10px-radius form inputs."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#f4524d"
  on-primary: "#ffffff"
  forest-deep: "#20311a"
  forest: "#3d5730"
  ink-black: "#000000"
  ink-dark: "#222222"
  mint: "#b1e8d6"
  text-input-bg: "#ffffff80"
  text-input-text: "#1a2916"
  footer-bg: "#d9d9d9"
typography:
  display:
    fontFamily: Sarabun, sans-serif
    fontSize: 28px
    fontWeight: 300
    lineHeight: 36px
  subheading:
    fontFamily: Sarabun, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: 1.44px
    textTransform: uppercase
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 25px
  button:
    fontFamily: Kanit
    fontSize: 14px
    fontWeight: 300
  input:
    fontFamily: Sarabun, sans-serif
    fontSize: 13px
    fontWeight: 500
    textTransform: uppercase
rounded:
  xs: 1px
  sm: 2px
  md: 5px
  lg: 10px
  xl: 50px
  pill: 9999px
spacing:
  s1: 5px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 14px
  s6: 15px
  s7: 17px
  s8: 20px
  s9: 25px
  s10: 26px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 14px 20px
    height: 51px
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 15px
    height: 51px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.forest-deep}"
---

## Overview

Better World Green (BWG) is measured on its English home page, `https://bwg.co.th/en/`, titled "Home - Better World Green Public Company Limited." The site speaks about industrial-waste management: the capture shows a full-width image slider whose first slide advertises a laboratory testing service ("Laboratory Testing Services — Accurate, Reliable, International Standard" with a mobile lab truck), then a dark green company-introduction block with a Thai heading "บริษัท เบตเตอร์ เวิลด์ กรีน จำกัด (มหาชน)" next to an aerial photograph of a waste-treatment site, then a second slider of service cards numbered 01 to 06 (consulting, laboratory operation, transport and others) and a "ธุรกิจในเครือ" (affiliated businesses) row of four tall poster-style cards, each with an "Enter to Site" link-out.

The overall mood is institutional and environmental: a deep forest green dominates the lower page, the hero photography is bright and slightly washed, and the only warm accent is a coral button. Copy is bilingual — Thai paragraphs with an English company line above them — and the footer carries "Copyright © 2018 Better World Green Pub Co., Ltd".

## Colors

White `canvas` #ffffff covers the largest painted area, but most of the home page below the slider is a set of dark greens: `forest-deep` #20311a (second-largest area), `forest` #3d5730 (third), and nearby shades #33402d, #3c5232 and #3e5831 that the generator did not keep as tokens. Text on these panels is white; text on white is `ink` #333333 (the most-read color, 2,077 characters) with `ink-black` #000000 (1,187) and `ink-dark` #222222 (430). `mint` #b1e8d6 is the text color of the navigation entries (116 characters) and tints the header link row over the slider.

`primary` #f4524d is the fill of the "Read more" buttons with white `on-primary` text; it is the single warm accent and appears on very little area (17 units against thousands for the greens). The search/contact input uses a half-transparent white fill `text-input-bg` #ffffff80 with `text-input-text` #1a2916, and the footer bar uses `footer-bg` #d9d9d9 with `forest-deep` text. The stylesheet also exposes plugin variables such as `--mec-color-skin` #37b34a and a cyan #40d9f1 from an events-calendar plugin, and generic Bootstrap-like state colors; none of them was measured on the visible page and they are not brand tokens here.

## Typography

Two families split the work. Sarabun (weights 300 and 500) sets running text and headings — 4,153 measured characters — and Kanit (weights 300, 400 and 700) sets buttons, the footer line and menu entries — 1,479 characters. Roboto appears for 46 characters.

Scale: `display` 28px / 36px, Sarabun 300, white, for the company-name heading; `subheading` 36px / 36px, Sarabun 400, uppercase, letter-spacing 1.44px, for the "ธุรกิจในเครือ" section title; `body` 16px / 25px, Sarabun 300; `button` Kanit 14px, weight 300; `input` Sarabun 13px, weight 500, uppercase. The most frequent sizes by character count are 16px (3,638) and 14px (1,214), then 22px (430). The default weight is light: 3,872 characters at 300 against 1,233 at 400, 446 at 500 and 127 at 700.

## Layout

The desktop capture is 1280px wide with a scroll height of 4,930px. The page stacks full-bleed bands: hero slider, a two-column introduction (text left, aerial photo right, flush to the viewport edges), a green carousel band with a centered card and neighbours partially visible, and a centered section title above four portrait cards. Content columns inside bands are roughly half the viewport for the introduction block; the width of the introduction body paragraph measured 512px. Frequent paddings are 5px (56), 25px (55), 15px (23) and 10px (16); large vertical spacing values of 55 to 64px also occur. The footer is a thin 46px strip.

## Elevation & Depth

The measured on-screen shadow set is minimal: one 5px grey glow `rgb(128, 128, 128) 0px 0px 5px 0px`. The slider and cards read as raised through photography and rounded corners rather than shadows. The stylesheet declares additional soft shadows (for example `0 2px 3px rgba(0, 0, 0, 0.05)` and `0 0 50px 1px rgba(0, 0, 0, 0.1)`), which belong to plugin or theme code and were not observed on screen.

## Shapes

Radii observed on screen: 50% (8 elements, circular slider arrows and the logo), 5px (`md`, buttons), 10px (`lg`, the input and the slider cards), 1px, 2px and 50px. The "Read more" button is 5px; the translucent input is 10px; the service-card slider shows rounded rectangles in the capture. Poster cards in the affiliated-business row also have rounded corners.

## Components

**Primary button** — coral fill, white Kanit 300 14px label ("Read more"), padding 14px 20px, 51px tall, 108px wide in the measurement, 5px radius.

**Text input** — fill #ffffff80, text #1a2916 in Sarabun 500 13px uppercase, 15px padding, 51px tall, 10px radius, 468px wide.

**Slider arrows** — dark circular buttons at the left and right edges of the hero slider (50% radius).

**Navigation** — one row of Kanit menu entries in `mint` over the hero (about BWG, our businesses, sustainable development, products, investor relations, news, careers, contact) with a language flag at the end.

**Footer** — 46px strip in `footer-bg` with 13px Kanit 300 copyright text in `forest-deep`.

## Design System Architecture

No public design system, brand guideline or press kit was found: the homepage HTML links none and no search was run. The site is a WordPress build with a slider plugin (the loaded fonts include `revicons`), Font Awesome 7 and an events-calendar plugin; its root variables are plugin defaults (`--color-*`, `--mec-*`, `--wp--preset--*`) rather than a brand token set. The de-facto system is therefore the computed styles recorded here: two Google fonts (Sarabun, Kanit), a forest-green band palette, a single coral action color and a short radius list.

## Do's and Don'ts

Do build pages as full-width bands in `forest-deep` and `forest` with white text, using `ink` #333333 on white bands. Do reserve `primary` coral for buttons. Do keep Sarabun light (300) for reading text and Kanit for buttons. Do use real operational photography (laboratory, trucks, treatment sites).

Don't use the plugin cyan or `--mec-color-skin` green as brand colors. Don't add heavy drop shadows; the measured on-screen shadow is a single 5px grey glow. Don't set the uppercase transform on Thai headings, which in the measurement only applies to the "ธุรกิจในเครือ" subheading and the input.

## Responsive Behavior

Measured at a 390px viewport: the heading stays 28px / 36px (wrapping to 72px height in a 312px column), the body stays 16px / 25px (the intro text block measures 900px tall at 312px wide), and the "Read more" button is unchanged at 14px with 14px 20px padding, 51px high, 5px radius. The most frequent mobile font sizes are 16px (3,632), 22px (430) and 28px (51). The mobile pass found no navigation element, so how the menu collapses was not measured; slider behavior at mobile width was not measured either.

## Iteration Guide

Start from the frontmatter tokens. For a new section, choose a `forest-deep` or `forest` band, a 28px Sarabun 300 heading in white, 16px body and, if an action is needed, one coral Read-more button. Use `mint` only for navigation text. Measure any new component (cards, tabs, footers beyond the strip) before documenting it; hover, focus and dark-mode states were not captured for this site (the hover probe returned no entries), so none are described here.
