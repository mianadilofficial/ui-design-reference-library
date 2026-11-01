---
version: alpha
name: CORSAIR
category: "Gaming"
description: "CORSAIR's global storefront is a Pitch Black (#000000) catalogue with Bright Yellow #ece81a used only for square-cornered (0px) CTAs; Saira Expanded Light headlines at 64px/300, Saira 14px body, Anthracite #191919 hairlines and 2px-radius form fields."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ece81a"
  on-primary: "#000000"
  surface-deep: "#0c0d0d"
  surface-strip: "#262626"
  ink-soft: "#bebebe"
  ink-muted: "#878787"
  anthracite: "#191919"
  logo-grey: "#c1c6c8"
  text-input-bg: "#1e1e1e"
  text-input-border: "#bfbfbf"
typography:
  display:
    fontFamily: "\"Saira Expanded\", sans-serif"
    fontSize: 64px
    fontWeight: 300
    lineHeight: 72px
  display-mobile:
    fontFamily: "\"Saira Expanded\", sans-serif"
    fontSize: 32px
    fontWeight: 300
    lineHeight: 36px
  headline:
    fontFamily: "\"Saira Expanded\", sans-serif"
    fontSize: 48px
    fontWeight: 300
    lineHeight: 51.84px
    letterSpacing: 2px
  label:
    fontFamily: Saira, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  body:
    fontFamily: Saira, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.35px
  body-lg:
    fontFamily: Saira, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 2.5px
  none: 0px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 25px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
    padding: 12px 32px
    height: 44px
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.xs}"
    border: "1px solid #ffffff"
    padding: 0px 8px
    height: 50px
    textTransform: uppercase
    letterSpacing: 0.8px
  promo-title:
    textColor: "{colors.ink}"
    typography: "{typography.headline}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 0px 8px
    height: 50px
    borderColor: "{colors.text-input-border}"
  announcement-bar:
    backgroundColor: "{colors.surface-strip}"
    textColor: "{colors.ink}"
    height: 40px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-lg}"
    padding: 16px 0px 0px
---

# CORSAIR

## Overview

CORSAIR's global site (measured at https://www.corsair.com/ww/en, title "CORSAIR | PC Components | Gaming Gear") sells PC parts and gaming peripherals on an all-black page. The body background, the header and the footer are all `#000000`, the brand's "Pitch Black", which its own brand book calls the "Main dark background color." Above that black sits one functional accent: **Bright Yellow `#ece81a`**. The brand book prescribes "Minimal use of yellow as functional color for navigation, highlights and call to actions", and the home page follows the rule. Yellow appears only on the "LEARN MORE" and "SHOP NOW" buttons, the "LEARN MORE" link in the top announcement bar, the "CORSAIR EXPLORER >" link and the carousel arrows.

The art direction relies on dramatic, lit product photography. A glowing RGB microphone ("VOXARA") opens the page against a dark, glittering surface. Two half-width promos follow (a mouse for "AIMLABS PRO" and a white keyboard for "GALLEON 100 SD"), then a ten-tile "SHOP BY CATEGORY" grid of cases, PCs, memory, keyboards, headsets, power supplies, coolers, mice, fans and furniture. Two more lifestyle promos come next ("MIAMI IS CALLING", "XENEON EDGE"), then a three-card "GUIDES, TIPS & TRICKS" blog row and the footer.

The voice is terse and uppercase: product names set wide and light, one tagline line ("YOUR VOICE IS YOUR ANCHOR", "NOW AVAILABLE IN WHITE"), one yellow button. Category tiles carry a double-slash prefix ("// CASES", "// COOLERS"), a motif the brand book uses in its own section labels ("BRAND // TAGLINE", "LOGO // VERSIONS").

The capture shows a cookie banner over the lower left of the hero. Its `#515151` card, `#e9e43b` text link and 18px shadow are consent UI and are not part of the tokens.

## Colors

The brand book (CORSAIR Brand Book Lite, Version 15, January 21 2026) publishes the palette; the measured values match it.

- **Canvas `#000000`.** Pitch Black, the largest measured background (10,106 area units) and the footer fill.
- **Primary `#ece81a`.** Bright Yellow (brand book: sRGB 236/232/26, PANTONE 395 C). The site also declares it as `--dark-bg-btn-primary: #ece81a`. Text on it is **on-primary `#000000`**.
- **Ink `#ffffff`.** Pure White, by far the most-read text colour (2,102 characters): headlines, taglines, tile labels, footer.
- **Anthracite `#191919`.** The brand book's Anthracite (sRGB 25/25/25) and the most frequent measured border colour, used for hairlines.
- **Surface deep `#0c0d0d`.** The second-largest background, behind the category tiles and blog cards.
- **Surface strip `#262626`.** The 40px announcement bar at the very top ("Get 1-month Aimlabs PRO trial with select purchases.").
- **Ink soft `#bebebe`.** Secondary text (309 characters), set at 14px with 0.96px tracking.
- **Ink muted `#878787`.** Small 12px labels with 1.2px tracking, such as the "BLOG" eyebrow on guide cards.
- **Logo grey `#c1c6c8`.** The fill of the header wordmark SVG, which the brand book lists as "Light Grey" (PANTONE 428).
- **Text input `#1e1e1e` / border `#bfbfbf`.** The footer's email field.

The brand book lists further greys (Dark Grey `#373638`, Vivid Grey `#5f626b`, Mid Grey `#8c8c8e`, Bright Grey `#d4d8da`) that were not measured on the home page; they are not tokens here.

## Typography

The brand book specifies **Saira** (Google Fonts, by Omnibus-Type) and its **Saira Expanded** width as the brand typefaces. The site loads exactly these two: Saira at weights 300 and 600, and Saira Expanded at weight 300.

- **Display.** Saira Expanded 64px, weight 300, 72px line height: the hero product name "VOXARA". The light weight at expanded width gives the airy, technical look.
- **Headline.** Saira Expanded 48px/300 with 2px tracking for promo titles ("AIMLABS PRO", "SHOP BY CATEGORY", "GUIDES, TIPS & TRICKS").
- **Label.** Saira 14px/600, 20px line height, for button text and small headings such as "CORSAIR: EXPLORER" and the "BLOG" eyebrow.
- **Body.** Saira 14px/400, 20px line height, 0.35px tracking.
- **Body large.** Saira 16px/24px, used in the footer's newsletter copy (measured there with 0.45px tracking).

Other measured sizes are 12, 12.8, 13.12, 14.4, 17, 18, 20 and 21px. Weights are 400 (dominant), 600, 300 and 500. Saira is free and open-licensed, so no substitute is needed.

## Layout

Measured at 1280px wide. The site's declared grid is `--grid-cols: 4`, `--grid-cols--md: 6` and `--grid-cols--lg: 12`. Gutters are `--grid-spacing: 1.6rem`, and container padding steps through `--container-padding: 1.6rem`, `--container-padding--md: 3.2rem` and `--container-padding--lg: 6.4rem`. Content spans roughly x 14–1204 in the main bands.

The page rhythm, from the capture:
1. Announcement bar (40px, `#262626`) with arrows, centred copy, "SUPPORT" and a globe icon on the right.
2. Header: wordmark at the left, three centred mega-menu triggers (PRODUCTS, GUIDES, SOFTWARE), search and account icons at the right.
3. Full-width hero image with the centred product name, tagline and a yellow button, plus a pause control.
4. Two side-by-side promo panels of equal width.
5. "SHOP BY CATEGORY": two rows of five dark tiles with the product image on top, then the label and an arrow.
6. Two side-by-side lifestyle promos.
7. "GUIDES, TIPS & TRICKS": three equal blog cards.
8. Footer: newsletter block at the left, four link columns (SHOP, EXPLORE, CORSAIR, SUPPORT), social icons, legal row.

The most frequent measured gaps are 4px and 48px, and the most frequent paddings are 4px, 8px, 16px and 24px. Sections are separated by generous black space, not by rules.

## Elevation & Depth

The page is flat: aside from the excluded cookie banner, the only box shadows measured are transparent placeholders (`rgba(0, 0, 0, 0)`). Depth comes from photography and lighting, which the brand book describes as "dramatic lighting… casting sharp contrasts and illuminating the vivid colors of the virtual world". The tonal steps are minimal: black canvas, `#0c0d0d` tiles, `#191919` hairlines, `#262626` for the announcement strip. Category tiles read as slightly lifted panels only because their fill is a shade lighter than the canvas.

## Shapes

The geometry is square. The primary yellow button has a **0px** radius. Only four radius values were measured on the whole page: 2px (six elements, including the email input and the outlined "SIGN UP" button), 2.5px (the cookie card), and one 9999px pill. Tiles, promo panels and blog cards have hard corners. The arrow glyphs and the "//" prefixes supply the angular detail; circles appear only in the social icons and the round carousel arrows.

## Components

- **Primary button.** `#ece81a` fill, black Saira 14px/600 text in capitals ("LEARN MORE", "SHOP NOW"), 12px 32px padding, 44px tall, 0px radius. The "LEARN MORE" instance measures 153px wide.
- **Outline button.** The footer's "SIGN UP": black fill, white uppercase Saira 14px/600 with 0.8px tracking, `1px solid #ffffff` border, 2px radius, 50px tall, 185px wide.
- **Email input.** `#1e1e1e` fill, `#bfbfbf` 1px border, 2px radius, 50px tall, 0 8px padding, white 14px text, placeholder "Email Address".
- **Promo panel.** A full-bleed image with a centred Saira Expanded 48px light title, a white uppercase tagline and a yellow button.
- **Category tile.** A dark panel with the product photo on top, then a bottom row with a "// NAME" label in white Saira semibold and a right arrow.
- **Guide card.** An image on top, a `#878787` "BLOG" eyebrow, then a white title on a dark panel.
- **Announcement bar.** 40px, `#262626`, white 12–13px copy with a yellow "LEARN MORE" link and chevron arrows.
- **Footer.** Black, a grey logo, white column headings with tracking, white link lists, outlined social icons, and a legal row separated by pipes.

## Design System Architecture

CORSAIR publishes a brand book rather than a UI component library: the "CORSAIR Brand Guide" PDF linked from https://corsair.com/newsroom/company-logos (file https://cwsmgmt.corsair.com/press/CORSAIR_Brand_Book_LITEv15c.pdf). It defines the tagline "Worlds Ahead", horizontal and vertical logo versions, clear-space rules, white-on-dark and black-on-light logo usage, a nine-colour profile (Bright Yellow, Pitch Black, Anthracite, Dark/Vivid/Mid/Light/Bright Grey, Pure White), the Saira and Saira Expanded families, and a photo style. The same page offers logo files as PNG, EPS and AI. On the website, the system shows up as plain CSS custom properties (107 on `:root`), named by role (`--dark-bg-btn-primary`, `--pitch-black: #000`, `--charcoal: #111`, `--t1: #fff`) and by grid (`--grid-cols--lg: 12`, `--container-padding--lg: 6.4rem`), alongside utility-class variables (`--tw-ring-color`, `--tw-shadow-colored`) and carousel variables (`--swiper-theme-color`).

## Do's and Don'ts

**Do**
- Keep Pitch Black as the main background and let lit product photography supply the colour.
- Use Bright Yellow `#ece81a` only for actions, navigation highlights and the tagline, as the brand book instructs.
- Set product names in Saira Expanded Light at large sizes, and UI text in Saira.
- Keep buttons and tiles square; reserve 2px radii for form fields and outline buttons.
- Use the "//" prefix and right arrows for category and section labels.

**Don't**
- Don't put white text on yellow; the measured on-primary is black.
- Don't use yellow as a background field or for large type.
- Don't add drop shadows or glows to the logo; the brand book forbids effects, outlines, gradients and recolouring.
- Don't introduce rounded cards or pill buttons.
- Don't use the cookie banner's `#515151` grey as a surface.

## Responsive Behavior

Measured at 390px wide. The hero product name drops from 64px to **32px/36px** Saira Expanded Light (display-mobile). Promo titles measure 24px on mobile ("AIMLABS PRO", "SHOP BY CATEGORY"). The primary button keeps its desktop spec: 44px tall, 12px 32px padding, 0px radius. Only one header link was measured as visible (`headerLinksVisible: 1`), and a menu toggle labelled "Menu" was measured as visible. The mobile capture shows the two half-width promos as full-width panels one after another. It shows the category grid as a single-row carousel with round previous/next arrows (the next arrow in yellow), and the guide cards one per row. The footer's link columns appear two per row in the capture. Exact breakpoint widths were not measured; the declared grid tokens (`--grid-cols`, `--grid-cols--md`, `--grid-cols--lg`) name three tiers, but their media queries were not recorded.

## Iteration Guide

1. Start with `#000000`, white Saira text and a single `#ece81a` 0px-radius button with black 14px/600 caps.
2. Set hero titles in Saira Expanded 300 at 64px (32px on mobile), with one uppercase tagline beneath.
3. Build sections from full-bleed photography and `#0c0d0d` tiles; separate them with black space and `#191919` hairlines.
4. Label categories as "// NAME" with a trailing arrow.
5. Before shipping, count the yellow: if it appears anywhere other than actions, links and highlights, remove it.
6. Check logo usage against the brand book: white on black, never effects, respect clear space.
