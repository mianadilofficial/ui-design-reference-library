---
version: alpha
name: "Thai PBS"
category: "Thai Brands"
description: "Thailand's public broadcaster news portal: DB Helvethaica X and thongterm at weight 500, #fefefe canvas, burnt orange #cc3802 primary, rust #a12c0b links, 3px chips, 100px utility pills and dark flood-coverage bands."
colors:
  canvas: "#fefefe"
  ink: "#a12c0b"
  primary: "#cc3802"
  on-primary: "#ffffff"
  surface-2: "#101010"
  surface-3: "#000000"
  ink-secondary: "#fafafa"
  ink-5: "#d3d3d3"
  ink-6: "#535353"
  button-secondary-bg: "#0000000d"
  button-secondary-text: "#272727"
  button-secondary-border: "#00000017"
  nav-bg: "#ffffffd1"
  card-bg: "#00000040"
typography:
  display:
    fontFamily: db_helvethaica_x_custom, thongterm, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 23.76px
    fontWeight: 500
    lineHeight: 38.016px
    letterSpacing: 0.5px
  display-mobile:
    fontFamily: db_helvethaica_x_custom, thongterm, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28.8px
    letterSpacing: 0.5px
  heading:
    fontFamily: db_helvethaica_x_custom, thongterm, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 39.6px
    fontWeight: 500
    lineHeight: 71.28px
  body:
    fontFamily: db_helvethaica_x_custom, thongterm, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 15.84px
    fontWeight: 500
    lineHeight: 25.344px
  nav:
    fontFamily: db_helvethaica_x_custom, thongterm, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 15.84px
    fontWeight: 400
  link:
    fontFamily: db_helvethaica_x_custom, thongterm, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 13.86px
    fontWeight: 400
    lineHeight: 22.176px
  button-secondary:
    fontFamily: db_helvethaica_x_custom, thongterm, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 14.85px
    fontWeight: 500
    lineHeight: 23.76px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 7px
  xl: 8px
  2xl: 32px
  3xl: 50px
  4xl: 100px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    height: 41px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.4xl}"
    padding: 0px 16px
    height: 30px
    borderColor: "{colors.button-secondary-border}"
    boxShadow: rgba(255, 255, 255, 0.7) 0px 0px 10px 0px inset, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.button-secondary-text}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.xl}"
    padding: 8px 16px
  footer:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

## Overview

Thai PBS (ไทยพีบีเอส, tagline "สื่อของทุกคน", "media for everyone") is Thailand's public broadcaster. The measured page is its Thai-language home at thaipbs.or.th/home. It is a news portal: a thin black memorial banner across the very top (a temporary tribute strip, not a brand component), a rounded utility row with Menu, Settings, Search and Log-in pills around a centred Thai PBS logo, a main navigation (หน้าหลัก, ข่าว, รายการ, ชมสด, Now, เว็บไซต์เครือ, น้ำท่วม, องค์กร, English), a trending-topics strip, a large mosaic of news cards, a dark brown special-coverage band for the flood situation, banner ads, and a long list of headlines and themed sections.

The identity is built from a burnt orange-red (#cc3802) used for the primary "ดูทั้งหมด" (view all) action, a deeper rust (#a12c0b) for link and navigation text, and a near-white canvas (#fefefe). Photography carries the page: every story has a 16:9 image and category chips in assorted colors (news, decode, Active, Podcast, Kids, World). Corners are small (3px dominates the page) with a few pill-shaped controls. The tone is editorial and information-dense, but softer than a tabloid news site because of the warm palette and rounded utility controls.

## Colors

The canvas is #fefefe. Body text is dark gray: #272727 is the measured text color on the page body, #101010 is used for card paragraph text, and #535353 for navigation icons and secondary content. Headlines sitting over imagery are white (#ffffff) and #fafafa; #d3d3d3 is a light gray used for secondary text on dark surfaces.

The brand accent is #cc3802, which is the measured primary button fill, with white (#ffffff) text. The root variables of the site also name hover color #cc3802 for pagination text. A darker rust, #a12c0b, is the navigation link and text-link color. Dark surfaces are #101010 and #000000 (the video player and the large feature tile) and a very dark brown band in the flood coverage section. The root variables include an "internationalOrange600" of #ff5100 and a CTA shadow in orange (rgba(255, 107, 10, .3)), which tie the orange family together; those two were not isolated as token values.

Translucent tokens: nav background #ffffffd1, secondary button background #0000000d with border #00000017, and card overlay #00000040 for text cards over imagery.

- Primary action: #cc3802 with #ffffff text.
- Links and nav labels: #a12c0b.
- Text: #272727 on #fefefe.
- Do not treat the memorial banner's black and gray as brand colors.

## Typography

The font stack is db_helvethaica_x_custom, then thongterm, then the system sans stack (-apple-system, system-ui, Segoe UI, Roboto and others, down to sans-serif). Loaded faces are db_helvethaica_x_custom 400, 500 and 700, and thongterm 400 and 700. DB Helvethaica X is a Thai-and-Latin face; thongterm is the Thai PBS companion face. No foundry page was opened, so no substitute is documented.

Measured sizes: the story-card title (h1 role) is 23.76px, weight 500, line height 38.016px, letter spacing 0.5px; at the 390px mobile pass it is 18px with 28.8px line height. The section banner heading (h2) is 39.6px, weight 500, line height 71.28px; on mobile it is 24px with 38.4px line height. Body text is 15.84px at weight 500 with line height 25.344px. Navigation labels are 15.84px at weight 400. Text links are 13.86px, weight 400, line height 22.176px. Secondary (pill) buttons are 14.85px, weight 500, line height 23.76px. Weight 500 is the default for readable text, which gives Thai text a slightly firm look.

## Layout

The page is a vertically stacked sequence of full-width bands. The top region sits on a light surface: a hero story card at left (about two thirds of the width) with a stack of smaller video cards on the right, and a row of five equal story cards beneath. Cards show image first, a small colored category chip, a time stamp ("ชั่วโมงที่แล้ว") and then a two-to-three-line Thai headline. A trending bar of hashtags in the rust color precedes the mosaic. The flood coverage band flips to a dark brown full-bleed background with a centred white heading, a live timeline card on the left and a grid of story cards on the right. Wide ad banners sit between sections. Spacing values measured on the page are 1px, 2px, 4px, 6px, 7px, 8px, 10px, 12px, 14px and 16px.

## Elevation & Depth

Shadows are soft and sparse. Pill buttons carry an inset white glow with a hairline shadow (rgba(255, 255, 255, 0.7) 0px 0px 10px 0px inset, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px). Larger containers use rgba(0, 0, 0, 0.1) 0px 4px 20px 0px, rgba(0, 0, 0, 0.05) 0px 2px 10px 0px or rgba(0, 0, 0, 0.02) 0px 0px 5px 0px. Depth in the layout comes more from contrast between the light page and the dark feature bands than from shadows; the navigation bar is a translucent white (#ffffffd1).

## Shapes

Measured radii: 3px (the dominant value, used on chips and cards), 4px, 5px, 7px, 8px, 32px, 50px, 100px, 50% and 9999px, plus partial radii such as 8px 8px 0px 0px and 0px 0px 12px 12px. The primary "view all" button is square (0px). Utility pills (Menu, Settings, Search, Log-in) use 100px, a full pill. Circular 50% shapes are used for carousel and pause controls. Cards use 8px (card token) and the large feature panels use 32px.

## Components

- Primary button: #cc3802 fill, #ffffff text, 15.84px weight 500, height 41px, 0px radius.
- Secondary pill button: #0000000d fill, #272727 text, 14.85px weight 500, height 30px, padding 0px 16px, 100px radius, border #00000017, with the inset glow shadow above.
- Text link: #a12c0b, 13.86px.
- Navigation: translucent #ffffffd1 bar; links #a12c0b at 15.84px weight 400.
- Story card overlay: #00000040 fill, #fafafa text, 8px radius, padding 8px 16px.
- Category chip: small 3px-radius label in a category color (colors vary per section and were not individually extracted).
- Footer: text color #cc3802 as measured.

## Design System Architecture

No public design system or brand guideline link was found on the home page. The page's root variables expose an internal theme: names such as --themeColors-navContent (#535353), --themeColors-navSearchBarIconColor, --themeColors-paginationTextHover (#cc3802), --fontFamily-dbHelvethaicaX, --colors-codGray900 (#1a1a1a), --colors-internationalOrange600 (#ff5100) and --colors-overlayDarkest (rgba(0, 0, 0, .9)). This indicates a themed, variable-driven build with named color scales. A third-party cookie consent widget contributes separate --cc-* variables that are not part of the brand palette.

## Do's and Don'ts

- Do use #cc3802 for the primary action and #a12c0b for text links and navigation.
- Do set Thai text in DB Helvethaica X at weight 500 with generous line height (about 1.6x).
- Do pair every story with a photograph and a small category chip.
- Do use pill buttons (100px radius) for utility actions and 3px radius for chips.
- Don't treat the memorial banner, cookie widget or banner ads as brand components.
- Don't use heavy drop shadows; the site uses soft, low-opacity ones.
- Don't switch to pure white; the canvas is #fefefe.

## Responsive Behavior

Measured at the 390px mobile pass: the story-card title is 18px with a 28.8px line height in a 342px box; the section heading is 24px with a 38.4px line height in a 358px box; paragraph text is 16px with a 25.6px line height; the primary button text is 14px with a 22.4px line height in a 326px-wide box. Breakpoints, menu behavior and column changes were not measured.

## Iteration Guide

1. Set canvas #fefefe, text #272727, link #a12c0b and accent #cc3802.
2. Use the DB Helvethaica X stack with the system sans fallback; titles at weight 500.
3. Use 3px radius on chips, 8px on cards, 100px on utility pills.
4. Put dark brown or black bands behind special coverage and keep headlines white.
5. Hover and dark-theme behavior were not measured; measure first. Re-extract with `--batch=web/data/batches/phase2.json --only=thaipbs --force --no-motion` after site changes.
