---
version: alpha
name: House of Corto
category: "Retail & E-commerce"
description: "House of Corto (houseofcorto.com), furniture by Jessica Mille, measured live: warm #f2efe7 canvas, forest green #2b3e0d ink, olive #63692b, lilac #c7b1da menu, canada-type-gibson 900 uppercase micro-labels at 9.6px, square corners and a borderless photo grid of chairs and tables."
colors:
  canvas: "#f2efe7"
  ink: "#2b3e0d"
  primary: "#63692b"
  surface-3: "#3e4f17"
  ink-3: "#c7b1da"
typography:
  display:
    fontFamily: canada-type-gibson, sans-serif
    fontSize: 9.6px
    fontWeight: 900
    lineHeight: 9.6px
    letterSpacing: 0.64px
    textTransform: uppercase
  display-mobile:
    fontFamily: canada-type-gibson, sans-serif
    fontSize: 12px
    fontWeight: 900
    lineHeight: 12px
    letterSpacing: 0.8px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 5.12px
  s2: 16px
  s3: 24px
  s4: 64px
  s5: 128px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink-3}"
  nav-link:
    textColor: "{colors.ink-3}"
    typography: "{typography.display}"
---

## Overview
House of Corto (https://www.houseofcorto.com/, title "House of Corto — Furniture by Jessica Mille", lang `en`) is a furniture designer's catalogue site. The capture is a single 1280 by 800px viewport: a warm off-white canvas with an irregular, borderless grid of tall product photographs showing sculptural wooden chairs, tables and stools in Parisian-style interiors with herringbone floors and panelled walls. Every image has a two-part micro-caption beneath it, with the product type at the left (SEAT, TABLE) in olive and the product name at the right (ALICE, LOVE, COEUR, MUSHROOM, PERLE, ASHANTI, LOLA) in dark green.

A fixed top navigation overlays the grid: COLLECTION and LA MAISON at the left in lilac, the CORTO wordmark in a thin, widely spaced serif-like logotype at the centre, and CONTACT and BAG (0) at the right in dark green. A small view switch in the bottom centre toggles between a grid layout and a single-column layout. The site is almost entirely image-led; text is deliberately tiny, uppercase and heavy, which makes the photography the only large element.

## Colors
The palette is declared as root variables and used sparingly:
- **Canvas** `#f2efe7` (`--white-bg`): the warm page background.
- **Ink** `#2b3e0d` (`--green-main`): the product names, CONTACT and BAG; also the largest background in the extraction (215) because of the footer-like colour areas.
- **Primary** `#63692b` (`--lightlight-green`): the olive of the product-type captions (256 characters). No filled call-to-action was detected, so this olive is the primary accent.
- **Light green** `#3e4f17` (`--light-green`) and **dark green** `#1d2a09` (`--dark-green`): deeper surface tones present in the CSS and measured as backgrounds.
- **Lilac** `#c7b1da` (`--purple`): the COLLECTION and LA MAISON menu links (30 characters) over the images.
- **Beige** `#d8cfb6` (`--beige`): the hover colour of the COLLECTION link (measured rgb(216, 207, 182)).
- **Yellow** `#b98531` (`--yellow`) and **red** `#521414` (`--red`) are declared but not measured on the visible page.
The Swiper default `#007aff` is a library variable, not a brand colour.

## Typography
One family is used throughout: "canada-type-gibson" (a Canada Type typeface, loaded in weights 300, 400, 500, 600, 700 and 900), plus "canora-frente" at weight 400 (loaded for the logotype). Every measured character (642) is weight 900 and uppercase.

- **display**: canada-type-gibson 9.6px / 900, line-height 9.6px, letter-spacing 0.64px, uppercase (menu links).
- **display-mobile**: 12px / 900, line-height 12px, letter-spacing 0.8px, uppercase (MENU, CLOSE, BAG on mobile).
- Captions are even smaller: 6.4px (612 characters in the measured size list) in the same heavy uppercase.

Letter-spacing is a constant proportion (0.0667em) at both sizes. The type is deliberately tiny; hierarchy comes from colour (olive for category, dark green for name, lilac for menu), not size. A fallback of `sans-serif` is declared after the Gibson family.

## Layout
The home page is a loose five-column grid of equal-width portrait images with large irregular gaps; rows are offset so that the left and right columns are cropped by the viewport edges, giving the sense of a scrolling wall. The page's scroll height in the desktop pass is only 800px, so the grid is presented as an interactive field rather than a long document. The nav row is 53px tall. Spacing tokens are 5.12px, 16px, 24px, 64px and 128px, matching the small caption offsets and the wide gutters between pictures.

## Elevation & Depth
No box shadows were measured and no overlapping cards exist. The only layering is the translucent navigation over the photograph grid and the small white view-switch control at the bottom centre. Depth is entirely photographic: warm light and wooden surfaces in the product shots.

## Shapes
The extraction recorded no border radius on any element (the radius list is empty), so every rendered element computes 0px: images, the view-switch control and any buttons are sharp-edged rectangles. The product silhouettes, with rounded backs, ovals and stacked spheres, supply the only curves on the page.

## Components
- **navigation**: lilac `#c7b1da` links at the left (COLLECTION, LA MAISON), dark-green links at the right (CONTACT, BAG with count), all 9.6px uppercase 900 with 0.64px tracking. COLLECTION shifts to beige on hover.
- **product caption**: two-column micro-label under each image, type in olive and name in dark green.
- **view switch**: a small two-button square control (grid and single-column icons) at the bottom centre, dark-green fill on the active option.
- **link**: `#2b3e0d`, 9.6px uppercase.
- **logotype**: the CORTO wordmark with spaced thin letters and small ornaments above it.
No forms, filled buttons or card containers were detected.

## Design System Architecture
No public design system or brand guideline was found. The de-facto system is visible in 12 root variables: `--white-bg`, `--green-main`, `--dark-green`, `--light-green`, `--lightlight-green`, `--purple`, `--beige`, `--yellow`, `--red`, `--black` and `--transparent`, plus the Swiper theme colour. Colours are therefore named by hue and used as a closed palette of greens, lilac, beige and a warm off-white. Type is one family, one weight and one size band; spacing is a power-of-two ladder (16, 24, 64, 128px plus 5.12px).

## Do's and Don'ts
- Do let photography occupy the page and keep text to tiny uppercase labels.
- Do use `#f2efe7` as the canvas and `#2b3e0d` for names and links.
- Do set all text in canada-type-gibson 900 with positive tracking.
- Do keep corners square.
- Don't add buttons with fills, rounded corners or shadows; none exist on the site.
- Don't enlarge captions into headlines; scale is deliberately flat.
- Don't use the Swiper `#007aff` colour.

## Responsive Behavior
The mobile pass at 390px measured the navigation block as 390px wide and 45px tall, with the first heading "MENU" at 12px / 900 (versus 9.6px on desktop) and the nav text "MENU, CLOSE, BAG 0". Caption size becomes 8px (612 characters) versus 6.4px on desktop. Image grid behaviour on mobile is not measured.

## Iteration Guide
1. Fill the page with `#f2efe7` and portrait photographs on an irregular grid.
2. Label each image with a tiny uppercase pair: type in `#63692b`, name in `#2b3e0d`.
3. Overlay a nav in 9.6px uppercase 900 with 0.64px letter spacing.
4. Keep every corner square and every shadow absent.
5. Provide a grid and single-column toggle at the bottom centre.

## Notes for Rebuilding
The measured values define a very small vocabulary, which makes accuracy depend on restraint. The same two sizes (9.6px and 6.4px on desktop, 12px and 8px on mobile) carry every piece of text, and weight 900 is the only weight that renders, even though weights 300 to 700 are loaded for the family. The menu colour is the one place where the palette becomes surprising: lilac `#c7b1da` over the images on the left and dark green on the right, so the two halves of the navigation are distinguished by colour alone. The hover state measured on COLLECTION changes both text colour and border colour from lilac to beige `#d8cfb6`, with no change of background, decoration, shadow or opacity.

The page's four measured background colours (`#2b3e0d`, `#63692b`, `#3e4f17`, `#1d2a09`) are all greens and carry the largest area weights in the extraction, while the capture itself shows the warm `#f2efe7` canvas; where those green areas appear on the page was not recorded, so they are listed here as measured values only. The page scroll height is 800px, matching a single screen of imagery, and the extraction found no headings other than the navigation labels, no paragraphs and no form fields.
