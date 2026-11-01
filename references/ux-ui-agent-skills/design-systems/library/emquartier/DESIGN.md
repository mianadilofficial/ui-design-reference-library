---
version: alpha
name: The EmQuartier
category: "Thai Brands"
description: "The EmQuartier (emquartier.co.th), a Bangkok fashion and lifestyle destination: black, white and silver #8e8f97 with editorial photography, termina wide uppercase at 80px/76px plus DB Adman X Thai body at 24px/28px, and 50px-radius outlined pill buttons."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-silver: "#c1c1c5"
  button-secondary-border: "#8e8f97"
typography:
  display:
    fontFamily: termina, "DB Adman X", sans-serif
    fontSize: 80px
    fontWeight: 600
    lineHeight: 76px
  display-mobile:
    fontFamily: termina, "DB Adman X", sans-serif
    fontSize: 44px
    fontWeight: 600
    lineHeight: 41.8px
  subheading:
    fontFamily: termina, "DB Adman X", sans-serif
    fontSize: 50px
    fontWeight: 700
    lineHeight: 50px
  body:
    fontFamily: "\"DB Adman X\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: "\"DB Adman X\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: termina, "DB Adman X", sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 18px
  button-secondary:
    fontFamily: termina, "DB Adman X", sans-serif
    fontSize: 10px
    fontWeight: 600
    lineHeight: 50px
rounded:
  xs: 5.6px
  sm: 6.4px
  md: 40px
  lg: 50px
  xl: 100px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 24px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 0px 28px
    height: 50px
    borderColor: "{colors.button-secondary-border}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
    padding: 10px 50px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.canvas}"
    padding: 120px 0px 60px
---

## Overview

emquartier.co.th is the Thai-language home page of The EmQuartier, a Bangkok shopping destination (page title "Home - Emquartier", lang th). The page is a fashion-magazine experience rather than a store directory. The first screen is a triptych of tall editorial photographs (a denim handbag with gold embellishment, a model in a leopard coat seated on a peach quilted bed, a stylized doll figure) behind a huge chrome-effect "EMQUARTIER" wordmark with a metallic "Q". A floating white capsule holds the small wordmark and a black "MENU" pill. Below, a black band reads the quoted tagline "THE EXTRAORDINARY LIFE" in wide uppercase, followed by Thai copy describing the project as a new dimension of an extraordinary lifestyle, a destination "on more than 250,000 square meters" comprising a shopping center, offices and event and seminar venues with a pleasant garden.

The next section is headed "FASHION CAPITAL" in 80px wide uppercase beside a Thai paragraph about fashion and lifestyle brands, then an offset, staggered masonry of portrait brand tiles on a black-to-grey gradient: tiles are captioned with a brand name and a building ("Massimo Dutti, MF / Building A", "Golden Goose, MF / Building B", "Gentle Monster"). A "VIEW ALL BRAND" outlined pill invites more. The footer is a black-to-silver gradient with section labels such as PROMOTION, HAPPENING, FASHION CAPITAL and BEAUTY & WELLNESS.

A cookie notice in Thai (with an "ยอมรับ" accept button, a close icon and links to the cookie and privacy policies) overlays the first screen. It is a consent control, not brand UI, and is excluded from the tokens and component list.

## Colors

The palette is black, white and silver. Measured backgrounds: black #000000 for the tagline and section grounds, white #ffffff, and the silver-grey that the CSS declares as `--color-silver-100` (rgb 142, 143, 151, measured as the outline color #8e8f97 of the "VIEW ALL BRAND" button) and the footer gradient end. Text is white on black sections and black on white; a lighter silver #c1c1c5 (`--color-silver-50`) is used for secondary text, and `--color-silver-40` is #cccccf. The page's primary action color is black: the outlined brand button has black text and the MENU pill is black with white text, so `primary` is set to measured black (#000000) rather than the grey of the cookie button the extractor picked as its first CTA (#8f929b, dropped). The photographs carry the chroma: peach, denim blue, lilac and tan.

## Typography

Two families: `termina` (loaded at 400, 600 and 700) for headings and labels, and DB Adman X (300, bold and normal) for Thai and body copy, declared as `--font-heading` (termina, DB Adman X, sans-serif) and `--font-body` (DB Adman X, sans-serif). Kanit is also loaded and measured on the cookie button only. Measured styles: display 80px/76px at 600 (FASHION CAPITAL), subheading 50px/50px at 700 (THE EXTRAORDINARY LIFE), body 24px/28px at 400 (Thai paragraphs), nav 20px at 400, link 18px at 600, and the outlined button label 10px at 600 with 50px line-height. Variables also declare `--font-size-h2` 58px, `--font-size-h3` 50px, `--font-size-h6` 20px, `--font-size-md` 18px, `--font-size-sm` 16px, `--font-size-xs` 14px, `--font-size-3xs` 10px, and weights `--weight-light` 300 and `--weight-semi` 600. The Latin display face is a wide geometric grotesque in uppercase; DB Adman X is a Thai typeface from the DB family and termina is a commercial face, so fallbacks should be a wide geometric sans and a Thai-capable humanist sans.

## Layout

Page height is 7,420px at 1280px wide with 629 visible elements. The grid is edge-to-edge: `--container-default` and `--container-width` are 100% with `--container-padding` of 50px. The brand section uses a staggered two-to-three column masonry of portrait tiles with different vertical offsets; text sits left and a paragraph right in the FASHION CAPITAL row. Spacing variables are a named scale: 3xs 5px, 2xs 10px, xs 16px, sm 20px, 2sm 24px, md 30px, lg 40px, 2lg 50px, xl 60px, 2xl 80px, 3xl 100px, 4xl 120px, with negative counterparts used for overlaps. Measured gaps: 5px, 16px, 10px, 30px, 50px, 40px, 20px, 24px.

## Elevation & Depth

Shadows measured: rgba(0, 0, 0, 0.2) 0 0 6px and rgba(0, 0, 0, 0.15) 0 0 10px, used softly. Depth is mostly photographic layering: the chrome wordmark floats over the triptych; text is overlaid on image tiles; sections transition through vertical gradients (black to grey, and in the footer black to silver).

## Shapes

Radii: 50px (outlined "VIEW ALL BRAND" pill, 50px high), 100px, 40px, 50% (round icons), 6.4px and 5.6px (small controls such as the cookie button). The CSS declares `--border-radius` 5px and `--border-radius-x2` 10px, and `--button-height` 50px and `--input-height` 56px. Brand tiles in the capture are square-cornered photographs.

## Components

Outlined button "VIEW ALL BRAND": transparent fill, 1px solid #8e8f97, black 10px termina semibold label, 50px radius, 0 28px padding, 50px height. Menu: a white capsule with the wordmark and a black pill reading MENU with a hamburger icon (nav role: white 20px DB Adman X, 10px 50px padding, 70px height on desktop). Brand tile: a portrait photograph with the brand name and building label in white at lower left. Footer: a gradient block with uppercase section labels in termina 12px semibold. The cookie notice and its buttons are excluded.

## Design System Architecture

No public design system or brand guideline was found; none was opened. The site is WordPress-based (WordPress `--wp--preset--*` variables are present) and ships a named variable system in `:root` (172 variables): colors (`--color-white`, `--color-silver-40`, `--color-silver-50-rgb`, `--color-silver-100-rgb`, `--color-black-rgb`), fonts (`--font-heading`, `--font-body`), a font-size ladder, a spacing ladder and button, input and radius sizes. A Fancybox-style `--f-button-*` set and a Swiper theme color (#007aff) are third-party and are not brand tokens.

## Do's and Don'ts

Do set wide uppercase termina for labels and headings and DB Adman X for Thai copy. Do use black, white and silver, and let editorial photography carry color. Do use full-pill outlined buttons. Do use the named spacing ladder.

Don't treat the cookie notice or its grey accept button as a brand control. Don't use the Swiper blue #007aff. Don't use saturated brand colors; none is measured. Don't set Thai in the Latin display face.

## Responsive Behavior

Measured at 390px: the display style falls to 44px/41.8px at 600, body stays 24px/28px, and the nav role is a 390px-wide header, 20px at 400, padding 10px 20px, 70px high. Other mobile behavior (tile columns, footer layout, hover) was not measured.

## Iteration Guide

New sections should alternate black and white grounds, with 80px termina headings over 24px DB Adman X copy. Use the 50px outlined pill for secondary actions and `--spacing-*` values for rhythm. Keep imagery editorial and large. Measure before adding any state or color.

## Microcopy and Language

Navigation and section labels are English uppercase (MENU, VIEW ALL BRAND, FASHION CAPITAL, PROMOTION, HAPPENING, BEAUTY & WELLNESS), while descriptive paragraphs and consent text are Thai. This split is visible on every screen: the Latin text is set in the wide termina face and the Thai in DB Adman X, so each script gets its own typeface. Quoted slogans are set in straight double quotes ("THE EXTRAORDINARY LIFE"). Brand tiles use a two-line caption: brand name, then a short location code of the form "MF / Building A" or "MF / Building B". Paragraphs are short, three or four lines at 24px/28px, and end without calls to action; the actions are the outlined button and the menu. The Thai root language attribute (th) is declared on the page.
