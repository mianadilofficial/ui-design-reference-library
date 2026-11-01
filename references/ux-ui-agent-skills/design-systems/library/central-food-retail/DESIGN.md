---
version: alpha
name: Tops
category: "Thai Brands"
description: "Tops is the corporate site of the Thai supermarket chain TOPS, part of Central Retail. It pairs a pure white canvas and black ink with the brand's signature red #ff1301, a CPN typeface used at 16px/700 for body and 32px/700 for headlines, full-bleed store photography under a dark scrim, and almost no rounding (1.75px) apart from circular carousel dots."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ff1301"
  on-image: "#ffffff"
  surface-footer: "#d8d8d8"
  ink-muted: "#afafaf"
  hairline: "#a5a3a3"
typography:
  display:
    fontFamily: CPN
    fontSize: 32px
    fontWeight: 700
  body:
    fontFamily: CPN, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 19.2px
  nav:
    fontFamily: CPN, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: CPN, sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 36px
rounded:
  xs: 1.75px
  pill: 9999px
spacing:
  s1: 10px
  s2: 12px
  s3: 16px
  s4: 20px
  s5: 21.5px
  s6: 27px
  s7: 30px
  s8: 32px
  s9: 40px
  s10: 60px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    padding: 30px 60px
---

## Overview

The measured page is https://corporate.tops.co.th/, titled "Home - Tops". It is the corporate (not shopping) site of TOPS, which describes itself in the hero line as "a part of Central Retail Corporation Public Company Limited, a leading retail and wholesale business in Thailand". The page says TOPS operates a food retail business from premium supermarkets to convenience stores and specialty stores, with omnichannel and quick-commerce services, across "over 700 outlets" in Thailand. The company's about page states a vision of being recognized as an innovative and exciting supermarket delivering quality food and wine at great value with friendly service.

The visual character is that of a corporate brochure rather than a store: a full-width photograph of a TOPS store front fills the first screen, a short centered paragraph introduces the company, and then a "Group Business" section presents the store formats as tall photographic columns. The formats shown are Tops Food Hall, Tops, Tops daily and Tops online, followed by a carousel of related brands: Tops Vita, Tops Care, PET 'N ME and Matsumoto Kiyoshi. The red of the Tops logo is the one chromatic constant; everything else is white, black and photography.

There are no popups in the measured capture. The language switch (EN | TH) and a MENU control live in the top-right of the header over the hero.

## Colors

Colour on this site works as a signature rather than a system: one saturated red, one black, one white, and a light grey for the base of the page. Photography supplies every other hue, from the blue sky and silver cladding of the hero to the coloured plates of partner brands.

The palette is deliberately small.

- **Primary `#ff1301`** is the Tops red. It is measured as a text colour on the page and matches the red of the logo in the capture and of the Tops daily and Tops online tiles. Use it for brand marks and key accents.
- **Canvas `#ffffff`** covers most of the page area, and **ink `#000000`** is the main dark text colour for the section copy and the "Read more" links.
- **`on-image` `#ffffff`** is the dominant text colour by character count, because the hero line and the tile captions sit on photography beneath a dark translucent overlay (`#00000066` was measured as a background layer).
- **`surface-footer` `#d8d8d8`** is the light grey footer band, **`ink-muted` `#afafaf`** a quiet text grey and **`hairline` `#a5a3a3`** the border colour.

The page also ships Bootstrap and WordPress variables (for example Bootstrap's blue primary and warning yellow); those are framework defaults, not brand colours, and are not used as tokens.

## Typography

The main typeface is **CPN**, a face the site loads itself in weights 300, 400 and 700; **Nunito** in 400 and 700 is also loaded. No source naming CPN's designer was found on the pages opened, so no foundry is claimed here. For substitutes in Thai and Latin text use a neutral humanist sans such as Prompt or Noto Sans Thai.

The measured scale: the hero headline is 32px at weight 700 in white; body and tile descriptions are 16px, weight 700, on a 19.2px line; navigation entries are 16px at weight 400 on 24px; and the call-out links such as "Read more about TOPS" are 24px light (weight 300) on a 36px line. Section headings such as "Group Business" are visibly larger and bold in the capture. Bold weights are used heavily for such a small size, which gives the corporate copy a firm, signage-like feel.

## Layout

Layout follows a fixed gutter of 60px at the sides of the header (21.5px by 60px header padding) and footer (30px by 60px). The spacing ladder measured on the site is 10, 12, 16, 20, 21.5, 27, 30, 32, 40 and 60px, with 16px and 20px by far the most common paddings. The page is about 5650px tall at a 1280px viewport.

Structure from top to bottom: a transparent header over a full-bleed hero photograph; a centered intro paragraph with a "Read more about TOPS" arrow link; a "Group Business" heading with an "Other Business" link on the opposite side; four full-height photographic columns edge to edge; and a swipeable row of brand tiles with pagination dots. A faint pattern of crosses behind the intro paragraph echoes the brand mark.

## Elevation & Depth

Depth is created by photography and overlays rather than shadows. The header is transparent over a dark scrim on the hero; the only measured box shadow is a soft sideways shadow of 15px blur. A pop-up shadow variable also exists in the stylesheet for overlays. Surfaces are flat.

## Shapes

Corners are almost square: the only non-zero rounding measured on layout elements is `xs` 1.75px, and circles (`pill`) appear only as the carousel pagination dots and similar controls (measured as 50% radius). Photographic columns and brand tiles are rectangular and abut one another.

## Components

- **Header:** logo at the left, EN and TH language links and a MENU toggle at the right, white text over the hero.
- **Intro link:** 24px light black text with an arrow glyph, centered.
- **Format tiles:** full-height photo columns with a white logo lockup over the lower part of the image.
- **Brand carousel:** square-ish colour photo tiles with a coloured logo plate overlapping the bottom edge, and dots below.
- **Footer:** `surface-footer` grey band, `ink` text, 30px by 60px padding.

No filled button is present on the measured page, so none is declared as a token.

## Design System Architecture

No public design system or brand guideline for TOPS was found on the pages opened (https://corporate.tops.co.th/ and https://corporate.tops.co.th/about-tops/ describe the business but give no typeface or colour guidance). The de-facto system is a WordPress theme using Bootstrap 5 variables, WordPress preset variables, Font Awesome 6 and Swiper for the carousel, with custom size variables such as `--font-28` and `--font-120`. Brand identity lives in the logo, the red and the photography rather than in a published token set.

## Do's and Don'ts

- Do let full-bleed store photography carry the page and keep the chrome white and black.
- Do use `primary` `#ff1301` sparingly for brand marks.
- Do put white `on-image` text only on a darkened photograph.
- Do keep corners at 1.75px or square.
- Don't introduce rounded cards or drop shadows.
- Don't use Bootstrap's default blue for links or buttons.
- Don't set long paragraphs in weight 700; the measured body weight suits short captions.

## Responsive Behavior

The extractor measured a mobile viewport as well as the 1280px desktop. The MENU control is present on desktop; the mobile header was not measured. The format tiles and brand carousel are swipe-based (Swiper), so additional tiles are reached by swiping and the pagination dots rather than by wrapping into a long grid. Type sizes in the measurement stay at 16px for navigation and body.

## Iteration Guide

1. Start with `canvas`, `ink` and `primary`; add `surface-footer` only for the footer.
2. Use CPN (or a neutral Thai-capable sans) at 16px bold for captions and 32px bold for hero lines.
3. Lead every section with real photography and a short sentence; avoid illustration.
4. Keep radii at `xs` or square, and use `pill` only for dots.
5. Re-run `node web/scripts/verify-designs.mjs --slug=central-food-retail` after changes.
