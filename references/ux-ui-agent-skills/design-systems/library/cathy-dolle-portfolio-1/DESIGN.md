---
version: alpha
name: Cathy Dolle
category: "Portfolio"
description: "Cathy Dolle (cathydolle.com), interactive designer portfolio: pure #ffffff canvas with #000000 text, a single neuemontreal typeface at 11px in 400 and 500 uppercase, a 12-project list and slider over grayscale 3D imagery, square corners, no shadows."
colors:
  canvas: "#ffffff"
  page-body: "#000000"
  ink: "#000000"
  primary: "#000000"
  on-dark: "#ffffff"
typography:
  display:
    fontFamily: neuemontreal, "neuemontreal Fallback"
    fontSize: 11px
    fontWeight: 500
    lineHeight: 16.5px
    textTransform: uppercase
  subheading:
    fontFamily: neuemontreal, "neuemontreal Fallback"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 12.1px
  body:
    fontFamily: neuemontreal, "neuemontreal Fallback"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 12.1px
  footer-label:
    fontFamily: neuemontreal, "neuemontreal Fallback"
    fontSize: 11px
    fontWeight: 500
    lineHeight: 11px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 7.11px
  s2: 16px
  s3: 40px
  s4: 80px
components:
  nav:
    textColor: "{colors.page-body}"
    typography: "{typography.display}"
    padding: 7.11111px
    height: 31px
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.display}"
  footer:
    textColor: "{colors.page-body}"
    typography: "{typography.footer-label}"
    padding: 7.11111px
    height: 25px
  contact-link:
    textColor: "{colors.page-body}"
    typography: "{typography.footer-label}"
    rounded: "{rounded.none}"
---

## Overview

The home page of Cathy Dolle (https://www.cathydolle.com/, document title "Cathy DOLLE - Interactive Designer", language en) is a portfolio built as a single full-viewport screen rather than a scrolling page: the measured page is 1280px wide and exactly 800px tall, with only 73 visible elements. The extraction records the h1 as the logo link "CATHY DOLLE" and an h3 reading "DESIGNER & CODER". An about paragraph in the page begins "Cathy Dolle (B.1999, FR+VN) is a designer and front-end deve" (the record truncates it at 60 characters, so the rest is not quoted here).

The composition in the capture is symmetrical and spacious. A thin header runs across the top: "CATHY DOLLE" at the left, a "LIST / SLIDER" view toggle in the left-center, and "ABOUT", a small cat-face icon, "SHOP" and "PLAYGROUND" at the right. Twelve numbered project names fill the viewport in two columns, 01 to 06 on the left and 07 to 12 on the right-aligned side, separated by wide empty white space. In the center runs a narrow vertical strip of imagery: grayscale studio renders of a sculpted black figure, a brushed-metal watch face and a black spiked bag, stacked as hard-edged rectangles of different widths. The single word "CONTACT" sits at the bottom right. In the capture the active project (01/ ARD) is black and the others are a light gray.

The page copy is minimal: the interface text is English, the legal links found on the shop page are French ("MENTIONS LÉGALES", "CGV"), and the project titles are proper names (ARD, Pierre Cathala, Lucky Losers, Yeng, .Raw, KLSR, Jean khamkwan, Jess Dalton, Services Continu, Folio Template, Prada Beauty, Rue Saint Abel). The style is gallery-like: no color, no decoration, no buttons with fills. The imagery supplies all contrast and all the visual interest.

## Colors

The palette is two colors. Measured background by area: `#ffffff` only (weight 1024). Measured text colors by character count: `#000000` (563 characters) and `#ffffff` (12 characters). The only border color measured is `#ffffff` (1 occurrence); it belongs to a small square with a thin white outline that sits over the central image in the capture. The hover record for the CONTACT link also reports a border color of `rgb(229, 231, 235)`, which has no visible effect in the capture and is not tokenised.

- **Canvas `#ffffff`**: the only measured page background. The body element reports `#000000` as its own background value, but the area measurement and the capture show a white page, so canvas is white.
- **Ink `#000000`**: all functional text (logo, nav, list entries, contact). The extractor's `page-body` role is the same black. There is no chromatic brand color. `primary` is kept as `#000000` because black is the only action and emphasis color measured; no button, fill or accent hue was found.
- **On dark `#ffffff`**: the 12 white characters measured; the element holding them is not recorded.

The theme's root declares `--background: #ffffff` and `--foreground: #171717`; measured text is `#000000`, so the declared foreground is not what renders. In the capture the inactive project names and index numbers are a light gray; the measurement lists no gray text color, and how that gray is produced (color or opacity) is not recorded. No gradient, tint or alert color was measured.

The imagery in the capture sits in a similar range: renders in black, charcoal and silver on pale gray backdrops. That is an art-direction observation from the capture, not a measured value.

## Typography

A single family carries every measured character (575): `neuemontreal`, with a `neuemontreal Fallback` face declared alongside it. Loaded weights are 400 normal and 500 normal. Every measured size is 11px (575 of 575 characters), at weight 400 for 376 characters and 500 for 199 characters. There is no italic, no second family and no display scale.

- **Display (h1, nav):** 11px, weight 500, line-height 16.5px, `text-transform: uppercase`.
- **Subheading (h3 "DESIGNER & CODER"):** 11px, weight 400, line-height 12.1px.
- **Body (about paragraph):** 11px, weight 400, line-height 12.1px; measured box 311px wide and 60px tall at desktop.
- **Footer label (CONTACT):** 11px, weight 500, line-height 11px, uppercase.

Hierarchy is made by weight (400 versus 500), case (uppercase labels versus mixed-case about copy), position and gray level, not by size. No letter-spacing was measured on any text (the letter-spacing frequency list is empty). The mixed-case project names in the page text appear in uppercase in the capture, consistent with the uppercase transform on the list.

Font substitutes: the family is declared only as `neuemontreal`; no foundry page was opened, so no licence or alternative is documented here. If the face is missing, use a neutral grotesque at 11px with two weights (400 and 500) and uppercase labels.

## Layout

The page is a fixed-height viewport composition: scroll height equals the 800px viewport. The structure measured and seen in the capture is a 31px header (padding 7.11111px, full 1280px width), a body of two text columns and a central image strip, and a 25px footer (padding 7.11111px) carrying "CONTACT". In the capture the twelve entries form six evenly spaced rows, with the index number and the name set on one line.

Measured spacing is almost entirely one value: gaps of 7.11111px (36 occurrences), 40px (2) and 16px (2); paddings of 7.11111px (19), 16px (1) and 80px (1). The 7.11px unit is the header and footer padding and the main gap. The generated spacing tokens are 7.11px, 16px, 40px and 80px.

The central strip holds rectangles that touch each other without gutters; the images are different widths with straight edges. At the left and right of the strip the lists are separated from the images by white space rather than rules. The header uses a three-zone pattern: identity at left, view controls (LIST / SLIDER) next, navigation at right.

There are two other pages in the same shell. The /shop page shows four loader images, the labels "OPEN PROJECT" and "Click to randomize", and the footer links "MENTIONS LÉGALES", "CGV" and "Contact", and it lists no products or prices. The /playground page shows "OPEN PROJECT" and the instruction "USE YOUR ARROW TO MOVE AROUND". Both share the header (Cathy Dolle, about, Shop, Playground) and the mailto Contact link.

## Elevation & Depth

There is no elevation. The desktop pass measured no box shadows (the shadow frequency list is empty) and the CSS corpus lists only `none`. The Tailwind-style variables on the root (`--tw-shadow: 0 0 #0000`, `--tw-ring-shadow: 0 0 #0000`, `--tw-ring-offset-width: 0px`) are zero defaults, and `--tw-ring-color` is declared as `rgb(59 130 246/0.5)` without being rendered.

Depth in the capture comes from the photographs: soft gray backdrops, glossy black objects and a brushed-metal surface. The layers are separated by hard edges. The measured hover feedback (the CONTACT link, see Components) is a text underline, not a lift or a shadow. A small square with a 1px white border appears over the central image in the capture; it has no recorded shadow.

## Shapes

Every measured shape is a rectangle. The border-radius frequency list is empty, the CSS corpus has no radii, and the hover record reports `borderRadius: 0px`, so the only rounded token is `none: 0px`. Images in the strip are cropped to rectangles of different widths; text has no containers, chips or pills.

The recurring shape motifs are the thin horizontal header, the stacked image rectangles and the tiny outlined square. The capture shows a small cat-face icon beside "SHOP"; separately, the page's Shop link contains an image with the alt text "Séparateur", served from the Sanity image CDN.

## Components

**Header / nav.** Height 31px, padding 7.11111px, 11px uppercase text in weight 500, black on white; items: CATHY DOLLE (a link to /), ABOUT (plain text, no URL on the page), SHOP (/shop, preceded by a decorative separator image), PLAYGROUND (/playground). The LIST and SLIDER toggle sits in the header zone in the capture; the active mode is black and the inactive mode is gray.

**Project list.** Twelve entries formatted as "NN/" followed by the project name, uppercase, in two columns. The active entry (01/ ARD in the capture) is black; the others are gray. The label "OPEN PROJECT" appears in the page text of the home, /shop and /playground pages.

**Image strip.** Rectangles of grayscale photographic renders stacked vertically in the center; the capture also shows a small square marker with a 1px `#ffffff` border over the image.

**Footer / contact link.** The footer is 25px tall with 7.11111px padding. "CONTACT" is an anchor with a `mailto:cathy.dolle@live.fr` target. Measured hover: the text color stays `#000000`, the border color is `rgb(229, 231, 235)`, the background stays transparent and the `text-decoration` changes from `none` to `underline`; height is 11px and radius 0px.

No buttons with fills, inputs, cards or badges were measured; the extractor found no primary CTA, no link role, no input and no cards on the home page.

## Design System Architecture

No public design system, brand guidelines or colophon is published: the home page, /shop and /playground (all opened) contain no link or text about a design system, brand guidelines, typeface credits or a colophon. The de-facto system is minimal.

The root variables are Tailwind-prefixed (`--tw-*`, listed above) plus `--background: #ffffff` and `--foreground: #171717`. The CSS corpus names three font-family values (`neuemontreal`, `neuemontreal Fallback`, and `ui-sans-serif` and `ui-monospace`) and no custom spacing, radius or color scale. Type, color and spacing are therefore effectively a single scale: one family, one size, two weights, black on white, and a 7.11111px base spacing unit. The portfolio content (images) is served from the Sanity image CDN (`cdn.sanity.io`, project path `7npwh62g`), as recorded in the Shop separator image link. Contact is a plain `mailto:` link.

## Do's and Don'ts

**Do**
- Keep the page white with black 11px uppercase text; use weight (400 versus 500) and gray level for hierarchy.
- Let the imagery carry the color and contrast; keep surrounding UI monochrome.
- Use square corners and no shadows; separate layers with hard edges and white space.
- Number projects as "NN/" followed by the name, and offer both LIST and SLIDER views.
- Make hover feedback a simple underline on text links.

**Don't**
- Don't add accent colors, filled buttons or rounded containers; none were measured.
- Don't introduce a second typeface or a larger type scale; all 575 measured characters are 11px neuemontreal.
- Don't treat the declared `--foreground: #171717` as the text color; measured text is `#000000`.
- Don't scroll: the page height equals the 800px viewport.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured at 390px: all text is still 11px (402 characters); the h1 "CATHY DOLLE" is 11px with weight 500 and line-height 16.5px and its box is 119px wide (205px at desktop); the header is 33px tall and 390px wide with 8.32px padding (31px tall with 7.11111px padding at desktop); the recorded header text lists CATHY DOLLE, SHOP and PLAYGROUND (ABOUT is not in the mobile header text, while desktop lists CATHY DOLLE, ABOUT, SHOP, PLAYGROUND); the about paragraph box is 183px wide and 109px tall (311px by 60px at desktop).

No CTA was detected at 390px. How the two project columns, the center image strip and the LIST/SLIDER toggle are arranged at 390px, and any breakpoint widths, were not measured.

## Iteration Guide

1. Start with `#ffffff` canvas and `#000000` text. Do not add a chromatic color.
2. Set everything in `neuemontreal` at 11px: weight 500 uppercase for navigation and labels (line-height 16.5px), weight 400 for running text (line-height 12.1px).
3. Build a 31px header with 7.11111px padding: identity left, view toggle next, navigation right; place a 25px footer with a single `CONTACT` mailto link and underline on hover.
4. Lay out project names as a numbered list (`01/ ARD`) in two columns around a central strip of hard-edged image rectangles; show the active item in black and the others in gray.
5. Keep corners square and surfaces flat; no shadows.
6. At 390px keep the same 11px type, with a 33px header and 8.32px padding.
