---
version: alpha
name: Vogue
category: "News & Publishing"
description: "Vogue's US home page vogue.com measured live — a white #ffffff editorial grid with black #000000 type and square black SUBSCRIBE NOW buttons, #636363 bylines, a #f8f8f8 promo strip and a black footer, set almost entirely in Vogue Avant Garde (32px/600 lead headline, 22px uppercase section heads with +1.6px tracking, 13px/600 buttons with +1.1px) plus Adobe Garamond Pro for serif accents."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  primary-hover: "#1f201f"
  surface-subtle: "#f8f8f8"
  nav-hover: "#fbfbfb"
  ink-grey: "#636363"
  ink-light: "#cbcbcb"
  ink-charcoal: "#1f1f1f"
  ink-soft: "#1a1a1a"
  hairline: "#e0e0e0"
typography:
  display:
    fontFamily: "\"Vogue Avant Garde\", Tajawal, Helvetica, \"sans-serif\""
    fontSize: 32px
    fontWeight: 600
    lineHeight: 40px
  heading:
    fontFamily: "\"Vogue Avant Garde\", Tajawal, Helvetica, \"sans-serif\""
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 1.6px
    textTransform: uppercase
  card-title:
    fontFamily: "\"Vogue Avant Garde\", Tajawal, Helvetica, \"sans-serif\""
    fontSize: 18px
    fontWeight: 600
    letterSpacing: "-0.2px"
  promo:
    fontFamily: "\"Vogue Avant Garde\", Tajawal, Helvetica, \"sans-serif\""
    fontSize: 17px
    fontWeight: 400
    lineHeight: 24px
  serif-dek:
    fontFamily: "\"Adobe Garamond Pro\", \"Times New Roman\", Times, \"serif\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  body:
    fontFamily: "\"Vogue Avant Garde\", Tajawal, Helvetica, \"sans-serif\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-0.2px"
  button:
    fontFamily: "\"Vogue Avant Garde\", Tajawal, Helvetica, \"sans-serif\""
    fontSize: 13px
    fontWeight: 600
    lineHeight: 15px
    letterSpacing: 1.1px
    textTransform: uppercase
  nav:
    fontFamily: "\"Vogue Avant Garde\", Tajawal, Helvetica, \"sans-serif\""
    fontSize: 13px
    fontWeight: 500
    lineHeight: 15px
    letterSpacing: 0.6px
  footer:
    fontFamily: "\"Vogue Avant Garde\", Tajawal, Helvetica, \"sans-serif\""
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: "-0.1px"
rounded:
  none: 0px
  xs: 4px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 18px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
  s11: 64px
  s12: 120px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "2px solid #000000"
    padding: 0px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  story-link:
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
  story-link-hover:
    textColor: "{colors.ink}"
    textDecoration: underline
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-link-hover:
    backgroundColor: "{colors.nav-hover}"
  edition-select:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    border: "1px solid #1f1f1f"
    padding: 12px 16px
    height: 46px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer}"
    rounded: "{rounded.none}"
---

## Overview

This is the US edition of Vogue at `https://www.vogue.com/` ("Vogue: Fashion, Beauty, Celebrity, Fashion Shows | Vogue"), measured live on 2026-10-17 at 1280px (10,494px tall) and in a mobile pass. It is a dense editorial front page: black type on white, square black buttons, uppercase tracked section labels and a grid of fashion photography, interrupted by advertising slots.

The header stacks a thin top bar ("Your All Access Pass", "GET THE APP", a black "SUBSCRIBE" button, search and account) above the black VOGUE logotype (SVG, 124 × 32px) and a row of uppercase section links — FASHION, RUNWAY, SHOPPING, BEAUTY, CULTURE, LIVING, VOGUE BUSINESS. Below the first ad slot a #f8f8f8 promo strip shows a magazine cover, "Get the October issue guaranteed" and a black "SUBSCRIBE NOW" button.

The lead package is a three-column collage: stacked story cards at the left, a large central portrait with the lead headline "Anna Wintour on Irving Penn and Vogue Portraits, a New, Two-Volume Chronicle of History as It Happened" centred under it, and a narrow list of numbered or kicker-labelled stories at the right. Then come titled packages — CELEBRITY STYLE, TEEN VOGUE, MUST READ, SHOP THE EDITS, EDITOR WISH LIST, LATEST VIDEOS, LATEST STORIES — each with a centred uppercase heading, four-across image rows (some with carousel arrows and "1 / 2" counters) and story titles with small uppercase kickers and bylines. A black footer closes the page.

Advertising blocks (the "The markets. The migrations." banner, a Christie's Asian Art Week ad, a freelance-hiring ad) appear between packages; they are not part of Vogue's design and are excluded.

## Colors

- **canvas #ffffff** — page and grid background; 63% of the capture.
- **ink #000000** — the most-read text colour (4,762 characters) for headlines, kickers and navigation; also the footer fill (weight 2,133).
- **primary #000000** — the fill of SUBSCRIBE NOW, DOWNLOAD NOW and NEXT PAGE buttons, each with a 2px black border. The SUBSCRIBE hover changes the fill to **primary-hover #1f201f**.
- **on-primary #ffffff** — button labels and footer text (504 characters).
- **surface-subtle #f8f8f8** — the subscription promo strip and light panels (weight 620).
- **nav-hover #fbfbfb** — header links gain this near-white fill on hover.
- **ink-grey #636363** — bylines and the copyright line (359 characters).
- **ink-light #cbcbcb** — secondary footer text (125 characters).
- **ink-charcoal #1f1f1f** and **ink-soft #1a1a1a** — near-black text variants.
- **hairline #e0e0e0** — the most frequent border colour (dividers between list items).

There is no accent colour in the measured UI. The CSS contains #2941e1 (31 declarations) and a consent-manager variable layer (`--fides-overlay-*`); neither belongs to Vogue's visible design.

## Typography

**Vogue Avant Garde** carries 5,808 of the 5,853 measured characters (loaded at 400 and 600, fallback Tajawal, Helvetica, sans-serif). **Adobe Garamond Pro** (400 and 700 loaded) sets 45 characters at 20px / 30px — serif accents such as the italic title inside the lead headline. The CSS also declares FB Didot, which was not measured on home-page text.

- **display** 32px / 40px, 600 — the lead headline.
- **heading** 22px / 24px, 400, +1.6px, uppercase — package titles ("CELEBRITY STYLE").
- **card-title** 18px, 600, -0.2px — story headlines; 18px with -0.2px is the most-read size and spacing (2,863 characters), and 600 the most-read weight (4,706).
- **promo** 17px / 24px, 400 — the promo strip line.
- **serif-dek** Adobe Garamond Pro 20px / 30px.
- **button** 13px / 15px, 600, +1.1px, uppercase.
- **nav** 13px / 15px, 500, +0.6px — header links.
- **footer** 13px / 18px, 400, -0.1px.
- **body** 12px / 16px, 400, -0.2px — the copyright and small text.

Kickers use 12px with +2px tracking (605 characters) and bylines 12px with +1.4px (333). Vogue Avant Garde and Adobe Garamond Pro are licensed webfonts; a geometric sans in the Avant Garde tradition and an old-style Garamond are the closest open substitutes.

## Layout

Content spans almost the full width (x=8 to x=1278) inside a white band 11,068px tall, followed by an 866px black footer (content x=64 to x=1216). Packages are four columns at most; the lead package is three unequal columns. Headings are centred above their rows, some with carousel counters and arrows at the right.

Measured spacing: gaps of 8px (most frequent, 142 elements), 32px (35), 16px, 24px, 48px and 56px; paddings of 16px (82), 8px, 64px (16), 12px and 120px. Story rows sit 32px apart.

## Elevation & Depth

None measured: no box shadows on rendered elements. The design is flat print-like layout; depth comes only from photography. The CSS declares `0px -3px 30px rgba(0,0,0,.4)` 62 times, which did not render on visible elements.

## Shapes

Square: buttons, images, cards and the edition selector compute 0px radius. Two exceptions were measured: 50% on 27 elements (round avatars and round carousel arrows are visible in the capture) and 4px on 10 elements. Borders are 2px black on buttons and 1px #e0e0e0 between list items.

## Components

- **Black button (button-primary)** — "SUBSCRIBE NOW", "DOWNLOAD NOW", "NEXT PAGE": #000000 fill and 2px border, white 13px/600 uppercase label with +1.1px tracking, 0 16px padding, 48px high, square. Hover fill #1f201f.
- **Header** — top utility bar, centred VOGUE logotype, uppercase 13px section links; links take a #fbfbfb fill on hover; a "Menu" toggle is visible.
- **Story card** — image, small uppercase kicker (12px, +2px), 18px/600 headline, uppercase byline in #636363; headlines underline on hover.
- **Package heading** — centred 22px uppercase with +1.6px tracking, optional "1 / 2" counter and arrows.
- **Promo strip** — #f8f8f8 band with cover image, 17px line and the black button.
- **Edition select** — "United States" button in the black footer: white 16px text, 1px solid #1f1f1f, 12px 16px padding, 46px.
- **Footer** — black, 13px white text, link columns and the copyright line.

## Design System Architecture

No public design system for Vogue was linked from the home page, and no official guideline was opened. The page markup shows it is served by Condé Nast's "verso" platform (asset paths under `/verso/static/vogue-global/`, `cnt_platform: verso`, component class names such as `SummaryCollage…` and `MultiPackageRow…` with hashed styled-component suffixes). The 400 root variables on the page are mostly a third-party consent manager's (`--fides-overlay-*`); Vogue's own colours and type are compiled into component styles rather than exposed as variables. Breakpoints in the CSS: 480px, 569/570px, 599px, 720px, 768px, 1024px and 1280px.

## Do's and Don'ts

**Do**
- Keep pages white with black type; let photography provide colour.
- Use square black buttons with tracked uppercase 13px labels.
- Title packages in 22px uppercase with +1.6px tracking, centred.
- Set story headlines at 18px/600 with slight negative tracking.
- Use Adobe Garamond Pro only for occasional serif accents.

**Don't**
- Don't add an accent colour; none was measured.
- Don't round buttons or images (avatars and arrow buttons excepted).
- Don't add shadows.
- Don't treat ad creative or consent-manager styles as Vogue design.
- Don't mix more than the two measured families.

## Responsive Behavior

From the mobile pass (content between x=24 and x=366):

- The lead headline drops from 32px to 24px; package headings drop from 22px to 20px, keeping +1.6px tracking.
- 16px becomes the most-read size (3,387 characters), replacing 18px on desktop.
- The black SUBSCRIBE NOW button is unchanged (13px/600, 48px, 0 16px).
- The header block measures 206px on mobile (406px on desktop) with a visible "Menu" toggle and four header links visible (12 on desktop).
- The page is one white band of 16,000px; the extractor recorded at most two card columns on mobile versus four on desktop.

Hover on touch devices was not measured.

## Iteration Guide

1. White canvas, black type, black footer.
2. Header: utility bar, logotype, uppercase `nav` links.
3. Lead: three-column collage with a `display` headline under the central image.
4. Packages: centred `heading`, four-across rows of story cards (`card-title`, kicker, byline).
5. Actions: `button-primary` black, square.
6. Check `web/data/extracted/vogue.json` before adding values; ignore `--fides-*` variables and ad colours.
