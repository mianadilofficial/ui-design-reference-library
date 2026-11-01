---
version: alpha
name: "Muuto"
category: "Home & Furniture"
description: "Muuto (muuto.com), the Scandinavian furniture brand, measured live: EuclidFlex headlines up to 170px with tight negative tracking, Spectral serif body text, a white canvas with a brown #4f3d3a hero, story cards in #2c4c45, #22283e and #620303, square corners and no shadows."
colors:
  canvas: "#ffffff"
  ink: "#111111"
  primary: "#227650"
  surface-2: "#e6f4ff"
  surface-3: "#f6ed6c"
  ink-2: "#c5dbf3"
  ink-3: "#eafce9"
  ink-4: "#a9bd9d"
  ink-6: "#685d20"
  hairline: "#86868626"
  hero-brown: "#4f3d3a"
  story-green: "#2c4c45"
  story-navy: "#22283e"
  story-red: "#620303"
  button-secondary-text: "#dee2a1"
  footer-border: "#0000001a"
typography:
  display:
    fontFamily: EuclidFlex, Helvetica, Arial, sans-serif
    fontSize: 170px
    fontWeight: 500
    lineHeight: 170px
    letterSpacing: "-6.8px"
  display-mobile:
    fontFamily: EuclidFlex, Helvetica, Arial, sans-serif
    fontSize: 70px
    fontWeight: 500
    lineHeight: 70px
    letterSpacing: "-2.8px"
  subheading:
    fontFamily: EuclidFlex, Helvetica, Arial, sans-serif
    fontSize: 35px
    fontWeight: 500
    lineHeight: 33.25px
    letterSpacing: "-1.225px"
  body:
    fontFamily: Spectral, serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  nav:
    fontFamily: EuclidFlex, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23px
    letterSpacing: "-0.32px"
  link:
    fontFamily: EuclidFlex, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.2px
    letterSpacing: "-0.32px"
  input:
    fontFamily: EuclidFlex, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: "-0.5px"
rounded:
  xs: 60px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 9px
  s6: 9.01px
  s7: 10px
  s8: 11px
  s9: 16px
  s10: 18px
components:
  button-secondary:
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.link}"
    padding: 9px 20px
    height: 38px
    borderColor: "{colors.button-secondary-text}"
  link:
    textColor: "{colors.ink-2}"
    typography: "{typography.link}"
    padding: 9px 0px
  nav:
    textColor: "{colors.ink}"
    padding: 11px 20px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 5px 10px
    height: 38px
    borderColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 18px 0px 0px
    borderColor: "{colors.footer-border}"
---

# Muuto

## Overview

Muuto is a Scandinavian furniture and lighting brand. The measured page is the home page at https://www.muuto.com/ (document title "MUUTO.COM"), 8,283px tall at 1280px width. It reads as a magazine layout in a shop: a slim white header with a black bold "MUUTO" wordmark, three large uppercase category links (Products, Designers, Stories) and a row of small utility links (Professionals, Partner Login, Sustainability, About) plus location and search icons. Below it a full-width brown hero shows the words "Explore our sofas" in an enormous pale-blue sans-serif that overlaps two photographs: a room with a sage sofa under an attic ceiling at left and a small green sofa at lower right, with a vertical label "SOFA EXPERIENCE" and a pause control.

After the hero the page returns to white. The "Our sofa collection" section shows a four-column strip of product tiles separated by hairlines, each with a cut-out product photograph on white, a small "News" tag on two of them, and an uppercase product name (Coltre Modular Sofa 3-Seater Configurations, Outline Sofa 3-Seater, Outline Soft Sofa 2-Seater, Rest Sofa Chaise Longue), followed by a centred "+ VIEW ALL SOFAS (4)" link. Next comes a row of three tall "Inside with" story cards: a lifestyle photograph above a solid color block (forest green, navy, deep red) with a large title ("Inside with — Josefine Vibe", "Inside with — Michael Schneider", "Inside with the Karstad family") and serif excerpts.

The visual identity is editorial: oversized, tightly tracked sans headlines, quiet serif reading text, warm-grey and saturated deep-color blocks, and interiors photographed with people in them. Microcopy is short and lower-case in the headlines and uppercase for navigation and product names.

## Colors

The canvas is white, #ffffff (`canvas`), the largest measured background (area weight 7,955). Text is near-black #111111 (`ink`), measured on 1,204 characters, with #282828 on 173 characters and pure black on 35.

Large color fields come from the hero and story blocks. The hero is a warm dark brown, #4f3d3a (`hero-brown`, area weight 1,095), carrying the pale blue headline #c5dbf3 (`ink-2`, 534 characters). A light blue #e6f4ff (`surface-2`, weight 1,442) and a yellow #f6ed6c (`surface-3`, weight 1,411) are further section fields. The three story cards use forest green #2c4c45 (`story-green`), midnight navy #22283e (`story-navy`) and deep red #620303 (`story-red`), each with its own text color: pale mint #eafce9 (`ink-3`) and sage #a9bd9d (`ink-4`) on green, a button text color #dee2a1 (`button-secondary-text`) on the dark cards, a brighter green #227650 (`primary`) and olive #685d20 (`ink-6`) as text on the lighter variants. A small green #b7d692 (area weight 5) is the background of the "News" tag.

Muuto has no single brand accent: color is assigned per story or per product, and the extractor found no filled primary button, so `primary` records the measured green #227650, used as a text color on 382 characters and as a 1px border color. Hairlines are translucent: #86868626 (`hairline`) separates the product tiles and #0000001a (`footer-border`) lines the footer.

## Typography

Two families split the work. "EuclidFlex" (with Helvetica, Arial and generic sans-serif behind it) sets headlines, navigation, product names, buttons and inputs; "Spectral" (serif) sets body copy and story excerpts. By character count Spectral is 2,153 and EuclidFlex 1,719. Weights are 400 (2,638) and 500 (1,234) only.

Measured roles:
- `display`: EuclidFlex at 170px, weight 500, line-height 170px, letter-spacing -6.8px (the hero "Explore our sofas").
- `display-mobile`: 70px, weight 500, line-height 70px, letter-spacing -2.8px.
- `subheading`: 35px, weight 500, line-height 33.25px, letter-spacing -1.225px (story titles and the section title).
- `body`: Spectral at 16px, weight 400, line-height 19.2px.
- `nav`: EuclidFlex at 16px, weight 400, line-height 23px, letter-spacing -0.32px.
- `link`: 14px, weight 500, line-height 18.2px, letter-spacing -0.32px.
- `input`: 14px, weight 400, line-height 14px, letter-spacing -0.5px.

By character count, sizes are 16px (2,168), 24px (430), 20px (353), 26px (179), 12.8px (171), 14px (142) and 12px (133); display sizes are 170px (89 characters), 89.6px (31) and 40px (35). The body root role measured 20px uppercase weight 500 with -1px tracking for the main category links. Tracking is always negative on the sans: the larger the type, the tighter, about -4% of the size at 170px. Headlines are sentence case; navigation, product names and category links are uppercase.

## Layout

The page is a sequence of full-bleed bands inside a 17px outer gutter (root variables `--grid-outer-padding: 17px`, `--family-gutter-spacing: 17px`, `--padding-unit: 1.0625rem`). The header is compact. The hero is a single canvas where the headline, two photographs and controls overlap on the brown field and the words step diagonally across the page. The product strip is a four-column grid with `--row-size: 4` and thin dividers between tiles, edge to edge. The story row is three equal columns of image over color block, with a small gap.

Paddings by weight are 20px (28), 30px (17), 8px (8), 4px (6), 9px (4) and 64px (3), with 80px and 160px used for section separation. The spacing tokens list 4, 5, 7, 8, 9, 9.01, 10, 11, 16 and 18px; a spot-card spacing of 16px is declared as a variable. The overall density is open: large white margins above the collection title and between sections, tight tile interiors.

## Elevation & Depth

There is no elevation. No box shadows were measured. Separation is by hairlines (#86868626), by solid color fields (brown, green, navy, red) and by overlap of photographs on the hero field. A modal backdrop variable (`rgba(0, 0, 0, .5)`) exists in the CSS for overlays but is not part of the page surface.

## Shapes

The geometry is rectangular. Photographs, tiles, story cards, the outline button, input and footer all compute no radius. The only measured radii are 60px (six elements) and 50% (five elements) on elements that were not individually identified; the capture shows circular and pill controls such as the hero pause button. `rounded.xs` is 60px and `rounded.pill` is 9999px. Cutout sofa photographs sit on white with no frame.

## Components

**Outline button** (`button-secondary`): "Read more" on the dark story cards: transparent fill, 14px weight 500 label in #dee2a1, 1px #dee2a1 border, padding 9px 20px, height 38px, square corners.

**Link** (`link`): small uppercase or sentence-case text links in #c5dbf3, 14px weight 500, padding 9px 0 (for example "Explore" on the hero).

**Navigation** (`nav`, `nav-link`): large uppercase category links at 20px, weight 500, -1px tracking in #111111 with padding 11px 20px 0px, and small utility links at 16px and 12px beside them.

**Text input** (`text-input`): the search field, transparent, #111111 text at 14px, padding 5px 10px, height 38px, a 1px #111111 border, square corners.

**Product tile**: white tile with a cut-out photograph, an uppercase product name and, on new items, a small green "News" tag; tiles are divided by hairlines and have no radius or shadow.

**Story card**: a lifestyle photograph above a solid color block (#2c4c45, #22283e, #620303) holding a 35px EuclidFlex title and Spectral excerpts at 16px in a tinted text color.

**Footer** (`footer`): white background, #111111 text, 12px weight 500 uppercase headings (PRODUCTS, then seating, sofas, tables, shelving and more), 18px top padding and a #0000001a top border.

## Design System Architecture

No public Muuto design system or brand-guideline page was found linked from the home page, and none was opened for this document. The de-facto system is visible in the shipped CSS as component-scoped custom properties: `--main-menu-bg-color: #fff`, `--search-bar-text-color: #282828`, `--message-box-bg-color: #ebf0e8`, `--product-tile-bg-color-hover: #cfccc8`, `--contact-banner-tile-text-color: #282828`, `--toolbox-border-color`, `--spot-card-spacing: 16px`, `--article-card-padding: 1rem`, `--swiper-navigation-size: 30px` and a `--row-size` grid variable. The names show a component-driven stylesheet (menu, search bar, product tile, spot card, article card, contact banner, reconfigurator) with the type and color assigned per component. Source reviewed: https://www.muuto.com/ only.

## Do's and Don'ts

Do pair EuclidFlex headlines (weight 500, negative tracking) with Spectral body text at 16px.

Do let one deep color block per story (green, navy, red) carry the card, with a matching tinted text color.

Do use hairlines, not shadows, to separate tiles, and keep corners square.

Do set category and product names in uppercase and headlines in sentence case.

Don't introduce a single bright accent button; the measured system has outline buttons and color-per-story.

Don't add drop shadows or rounded corners to tiles and cards.

Don't set display type with positive tracking; the measured sans always uses negative letter-spacing.

## Responsive Behavior

Only the 390px mobile pass was recorded. In it the hero heading is 70px, weight 500, line-height 70px (with -2.8px tracking in `display-mobile`), in #c5dbf3; paragraph text is 14px, weight 400, line-height 16.8px, in #c5dbf3 (width 285px); and the menu block measures 36px, weight 500, line-height 37.8px, uppercase category links in #111111. Character counts by size on mobile are led by 14px (2,117), 16px (889) and 20px (790). Breakpoints, column counts for the product strip and story cards, and header behavior on mobile were not measured.

## Iteration Guide

1. Start from `canvas` #ffffff, `ink` #111111, `hero-brown` #4f3d3a, `ink-2` #c5dbf3 and the three story colors.
2. Use EuclidFlex 500 with negative tracking for headlines (170px hero, 35px titles) and Spectral 16px for text.
3. Build the order: header, brown hero with overlapping photographs and giant headline, four-up product strip with hairlines, three story cards on color blocks, footer.
4. Keep radii at 0px except circular controls and have no shadows.
5. Run `node web/scripts/verify-designs.mjs --slug=muuto` after edits.
6. Leave out anything not in the frontmatter or `web/data/extracted/muuto.json`.
