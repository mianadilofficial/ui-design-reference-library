---
version: alpha
name: "Lusano"
category: "Architecture & Interiors"
description: "Lusano (lusano.com, heirloom-quality furniture, Los Angeles): single typeface EB Garamond at 14.6286px weight 400 in roman and italic, off-white canvas #f7f4ef with deep brown ink #4a2214, a five-step brown ladder, 4.57px radius, a pixel-grid infinite gallery."
colors:
  canvas: "#f7f4ef"
  ink: "#4a2214"
  primary: "#4a2214"
  surface-2: "#d7c6b3"
  surface-3: "#ff0000"
  link-bg: "#bc9b7c"
typography:
  display:
    fontFamily: "\"EB Garamond\", serif"
    fontSize: 14.6286px
    fontWeight: 400
  display-mobile:
    fontFamily: "\"EB Garamond\", serif"
    fontSize: 16.64px
    fontWeight: 400
rounded:
  xs: 4.57px
spacing:
  s1: 6.4px
  s2: 8.23px
  s3: 9.14px
  s4: 27.43px
  s5: 73.14px
components:
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
---

## Overview

Lusano's site (title "Lusano | Heirloom-Quality Furniture") is an experimental furniture gallery rather than a conventional storefront. In the capture the wordmark "Lusano" sits at the top-left, a rounded translucent beige pill in the centre holds a menu icon and the italic current page name "Home", and at the top-right a clock and city read "20:51 Los Angeles". The page behind is an off-white field covered in a fine grid of thin lines, with a single dark-wood ladder-shaped shelf photographed against a plaster wall, in the lower right. At the bottom centre is a category filter in italic, "All / Shop / Live / Eat / Work" (the unselected items are faded), and at the bottom left a zoom readout "50%", with "[ + | - ]" zoom controls at the centre. The document records an inner scroller about 160018px long, so the page is a very large pannable canvas of products and the capture shows only a small part of it.

The navigation list in the page markup numbers its entries (01) Home, (02) Products, (03) About, (04) Lifestyle. Some text elements on the measured page, including the largest measured text block, contain placeholder "Lorem ipsum dolor sit amet" copy, which is recorded as measured text and not as brand voice. The tone of the visible interface is quiet and architectural: there are no buttons, shadows or photographs of rooms in view, only small italic serif labels and furniture photographed against plaster.

The measured data also shows how much of the interface is typographic. Of the 188 characters of text counted on the home view, every one is EB Garamond at weight 400 (a further 2 characters are Arial), and every one is the same brown (#4a2214). The restraint is the design: the page is made of one typeface, one text color, five browns and an off-white, with a numbered index ((01) to (04)) borrowed from print catalogues and a live clock tied to Los Angeles that anchors the studio's location.

## Colors

The theme is expressed in five browns and one off-white, all published in :root. --offwhite is #f7f4ef (the canvas, the body background, and the theme background --theme-bg), --brown is #4a2214 (ink, theme foreground --theme-fg, and the theme's inverted background), --brown-2 #6f402d, --brown-3 #88583c, --brown-4 #bc9b7c and --brown-5 #d7c6b3. The same values lead the measured background areas: #4a2214 (5796), #d7c6b3 (5313), #bc9b7c (4856), #6f402d (4433), #f7f4ef (3076) and #88583c (1353), and a translucent #4a221426 (4) used for the grid lines. All measured text is #4a2214 (168 characters).

A pure red, #ff0000, also measured a large background area (5047). It is not visible in the capture and no source for it was found on the page, so it is retained under the neutral name surface-3 as a measured value and is not used by any component. The --swiper-theme-color #007aff in :root is a carousel library default and is not a brand color.

- Canvas #f7f4ef; ink and primary #4a2214.
- surface-2 #d7c6b3 (brown-5); link-bg #bc9b7c (brown-4).
- surface-3 #ff0000 (measured, not visible in the capture).

## Typography

Only EB Garamond is used (186 characters), in roman and italic at weight 400. The measured sizes are 14.6286px (92 characters), 10.9714px (73) and 12.8px (23). The display and body text style is 14.6286px at weight 400 with a normal line-height; the mobile pass reads 16.64px. The header list uses 10.9714px, and its line-height equals its size (10.9714px). There is no letter-spacing, no uppercase transform and no weight other than 400 anywhere; hierarchy is created with italic versus roman and with opacity, so that the inactive filter entries in the capture are lighter. Because all text is small, the page reads as a catalogue index.

## Layout

The page is built on a variable system declared in :root: --page-gutter 1.5rem, --gutter 2.1rem, --section-spacing 12rem, product-page column widths (--product-page-left-width 25vw, --product-page-center-width 36vw, --product-page-right-width 19vw), --product-page-ui-top-padding 5.7rem and image aspect ratios (--product-portrait-aspect 0.9083969466, --product-landscape-aspect 1.487394958). The home view is a freely pannable grid canvas. Fixed UI is placed at the edges: the wordmark left, the clock right, a pill at the top centre, filters and zoom at the bottom. Measured gaps and paddings are 6.4px, 8.23px, 9.14px, 27.43px and 73.14px.

The measured home view is 2400px tall at the 1280px viewport, but the inner scroller is 160018px, which is why a single capture shows mostly empty grid. Spacing tokens in the generated set (6.4px, 8.23px, 9.14px, 27.43px and 73.14px) are small relative to the 12rem section spacing declared in the variables, which confirms that the home view is built on gutters and large empty margins rather than on tight component padding.

## Elevation & Depth

No shadows or borders were measured. The grid lines are a 15 percent brown (#4a221426), and the beige header pill is a flat translucent fill. Photographs sit directly on the grid, so depth comes only from the photographs' own lighting.

## Shapes

One radius is measured, 4.57143px (weight 3), on the header pill and small controls. Photographs and the grid are square. Nothing in the measured data is fully round: there are no circular buttons, avatars or pills with a 9999px radius, so the generated token set contains the single value xs (4.57px) and no pill token. The rounded corner is therefore a very light softening of the header control and not a visual motif of the brand.

## Components

- **Wordmark**: "Lusano" in EB Garamond at the base size, top-left.
- **Header pill**: translucent beige fill, 4.57px radius, a menu icon and the current page name in italic.
- **Nav list**: numbered entries "(01) Home, (02) Products, (03) About, (04) Lifestyle", 10.9714px, color #4a2214.
- **Link**: #bc9b7c background token, #4a2214 text, base type size.
- **Clock and city**: right-aligned text "20:51 Los Angeles".
- **Filter**: slash-separated italic items; the active item is darker.
- **Zoom control**: "50%" readout and "[ + | - ]" controls.
- **Product tile**: photograph set directly on the grid with no frame.

## Design System Architecture

No public Lusano design system or brand guideline was found on the pages opened. The page's own CSS publishes a compact token set in :root: five browns (--brown to --brown-5), --offwhite, --black, theme aliases (--theme-fg, --theme-bg, --theme-fg-invert, --theme-bg-invert) that swap foreground and background, gutters (--page-gutter, --gutter), --section-spacing and product-page layout variables. The theme aliases let a section invert the palette by swapping brown and off-white. Source page: https://www.lusano.com/.

## Do's and Don'ts

- Do keep a single typeface, EB Garamond 400, with italic for state and emphasis.
- Do use only the five browns and the off-white as interface colors.
- Do show furniture alone against plaster-toned backgrounds on a fine grid.
- Do keep text small (about 11 to 15px) and unadorned.
- Don't add buttons with fills, shadows or bold type; none are measured.
- Don't use the Swiper blue or the unexplained #ff0000 as interface colors.
- Don't treat the lorem ipsum text as brand copy.

## Responsive Behavior

The 390px mobile pass measured the main text at 16.64px in #4a2214 (versus 14.6286px at desktop) and the navigation list at 12.48px (versus 10.9714px). The mobile nav text lists Home, Products, About and Lifestyle with the same numbering. Layout reflow, grid size, image sizes and breakpoints were not measured.

## Iteration Guide

1. Start from #f7f4ef and #4a2214; derive tints from the brown ladder.
2. Use EB Garamond 400 at about 14.6286px for everything; italic for state.
3. Fix UI to the screen edges and let furniture photographs sit on a fine grid.
4. Use the theme aliases to invert sections.
5. Verify: node web/scripts/verify-designs.mjs --slug=lusano.
