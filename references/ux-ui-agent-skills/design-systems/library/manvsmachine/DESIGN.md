---
version: alpha
name: ManvsMachine
category: "Agencies & Studios"
description: "ManvsMachine (mvsm.com) shows its film and design work as an edge-to-edge mosaic of video tiles on a pale grey #f4f4f4 canvas, with every word in one face, Universus Sans: 36px/400 white project titles (-0.2px tracking) over the footage, 20px/400 #231f20 chrome text, a #656763 secondary grey, square 0px corners and no shadows."
colors:
  canvas: "#f4f4f4"
  page-largest: "#ffffff"
  ink: "#231f20"
  primary: "#231f20"
  ink-muted: "#656763"
  on-media: "#ffffff"
  tile-placeholder: "#0000000d"
  header-band: "#eaebe7"
  grid-band: "#f1f1f0"
typography:
  display:
    fontFamily: UniversusSans, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-0.2px"
  display-mobile:
    fontFamily: UniversusSans, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.14px"
  body:
    fontFamily: UniversusSans, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: "-0.2px"
  body-mobile:
    fontFamily: UniversusSans, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: "-0.14px"
rounded:
  none: 0px
spacing:
  s1: 11.25px
  s2: 16.25px
  s3: 19px
  s4: 40px
  s5: 48px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
    padding: 48px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  project-tile:
    backgroundColor: "{colors.tile-placeholder}"
    textColor: "{colors.on-media}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
---

# ManvsMachine

## Overview

ManvsMachine (mvsm.com, page title "ManvsMachine") signs itself "ManvsMachine™ — Design & Direction Co." Its Info panel, which opens over the home page, says: "We are a multi-dimensional creative company specialised in the fields of design, film and visual arts. Our London and Los Angeles studios work closely with the world's leading brands and agencies to produce award-winning creative content." The panel lists the London studio (The Old Stables, Norway Wharf, Hertford Rd, N1), the Los Angeles studio (The Lilypad, Gilroy St), representation in the UK and USA, and the copyright line "© ManvsMachine 2015 - 2026".

The home page is the portfolio and almost nothing else. The capture shows a thin header — "ManvsMachine™ — Design & Direction Co." at left, "Work", "Info" and an Instagram icon at right — then a large empty pale-grey area and a dense mosaic of project tiles running to the bottom. Tiles are video stills or loops filling rectangles of different widths, packed in rows of two or three with thin gaps. Each tile carries its title in white at the top left, written as "Project for Client": "Gilga Farm for Moncler", "Trade Every Play for Robinhood", "Affinity for Canva", "Images 2.0 for OpenAI", "Mustang GTD for Ford", "Air Max Day for Nike", "Film4 for Channel4". One hovered tile shows two small controls, "▷ Quick View" and "Full Project".

The art direction is all in the work: high-end CGI, product photography and live action, from a bright green Canva illustration to dark automotive and theatrical scenes. The site's own layer is quiet grey and near-black.

## Colors

- **Canvas `#f4f4f4`** — the body background, a light neutral grey.
- **Page-largest `#ffffff`** — measured as a background in the area ranking; white also appears as the on-media text colour.
- **Ink `#231f20`** — a warm near-black used for every piece of chrome text: the wordmark line, "Work", "Info", the loading text. It is also the action colour (**primary**), because the site has no buttons; on hover, the "Work" and "Info" links gain a #231f20 border.
- **Ink-muted `#656763`** — a grey recorded among the body's child text colours.
- **On-media `#ffffff`** — the project titles over the footage (819 of 875 measured characters are white).
- **Tile-placeholder `#0000000d`** — black at 5% alpha, the largest measured background area, behind each tile's media; the lower tiles in the capture that have not loaded show as these pale blocks.
- **Header-band `#eaebe7`** and **grid-band `#f1f1f0`** — the dominant fills of the top band (where the header sits on `header-gradient-alt.png`, a gradient background image) and of the band containing the grid, as sampled by the extractor.

There is no brand accent colour. The capture's strong colours — Canva green, Renault orange, Squarespace blue — belong to the client projects.

## Typography

One family, **Universus Sans** (`UniversusSans, sans-serif`), self-hosted at https://mvsm.com/fonts/universus-sans/ in three cuts: `UniversusSans-Regular.woff2` (400), `UniversusSans-Medium.woff2` (500) and `UniversusSans-Bold.woff2` (700). Nearly all measured text is weight 400; 500 appears on two characters only.

- **Display** — the tile titles (h1 elements): 36px/400, line-height 40px, letter-spacing -0.2px, white.
- **Body** — header text, nav links and paragraphs: 20px/400, line-height 28px, letter-spacing -0.2px, #231f20. The "ManvsMachine™" wordmark link is tracked tighter at -0.4px.
- **Mobile** — titles 21px/400/24px with -0.14px; body 14px/400/19.6px with -0.14px.

Measured desktop sizes are only 20px, 36px and a 5px superscript (the ™, at -0.05px). The type is set in sentence case with no uppercase and no italics, and tracking is slightly negative at every size. Hierarchy is created by size and by placement over imagery rather than by weight.

Substitutes: none are named by the site. The shipped fallback is the generic `sans-serif`.

## Layout

At 1280px the header band's content spans x = 51 to 1185 and the grid band x = 48 to 1232. The header has 48px top and bottom padding (`nav` padding 48px 0px). Below it a tall empty area separates the header from the first row of tiles in the capture.

The grid is a justified mosaic: rows of two or three tiles of unequal widths, all the same height within a row, separated by thin gaps. `maxCardColumns` is 2 in the extractor's count; the capture shows rows of two and three. Inside each tile the title starts at the top-left corner, inset by the measured paddings 11.25px and 16.25px (18 elements each). Other measured paddings are 48px, 40px and 19px. No flex or grid gap values were recorded.

The page is dense and image-led: no section headings, no descriptions, no footer content in the measured viewport; the copyright and Info panel live in an overlay.

## Elevation & Depth

None. No box-shadow and no border colour are measured. Tiles sit flush on the grey canvas with only the gap between them. The header uses a gradient background image (`header-gradient-alt.png`) rather than a shadow, and the Info panel and project player open as page overlays (the extractor hid `info js-info` and `page-overlay page-overlay_slider page-overlay_project-cont` to measure the page). White titles sit directly on the footage with no scrim recorded.

## Shapes

Square throughout. `borderRadii` in the extraction is empty — every element computes 0px — so the only radius token is `none: 0px`. Tiles are hard-edged rectangles of varying widths. The only icons in the chrome are the Instagram glyph in the header and the small play triangle and book glyph on the hovered tile's "Quick View" and "Full Project" controls.

## Components

- **Header** — wordmark line "ManvsMachine™ — Design & Direction Co." left, "Work", "Info" and an Instagram icon right; 20px/400 #231f20; 48px vertical padding. Hover adds a #231f20 border to the links.
- **Project tile** — video or still filling the tile, #0000000d placeholder, white 36px/400 title in two lines ("Project" / "for Client") at top left. On hover the capture shows "▷ Quick View" and "Full Project" controls at the bottom of the tile.
- **Info overlay** — the studio statement, social links (Twitter, Instagram, Vimeo), contact emails, studio addresses with map links, representation, jobs and legal links.
- **Loading text** — "Loading..." in body style, the measured body paragraph while the grid fills.

## Design System Architecture

No public ManvsMachine design system, brand guidelines or press kit was found. The pages opened were the home page https://mvsm.com/ (including its Info overlay content) and https://mvsm.com/info, which returned HTTP 404 because Info is an overlay, not a page. The site declares no CSS custom properties (`rootVars` is empty).

The de-facto system is very small: one typeface family in three weights, two text sizes (20px and 36px) with negative tracking, one text colour for chrome (#231f20), white for titles over media, a grey canvas and a square tile grid. The CSS breakpoints are scattered single-purpose queries rather than a scale: `max-width` 425, 600, 767 and 896px and `min-width` 400, 426, 480, 550, 600, 768, 897, 980, 1024, 1060, 1140, 1160, 1200, 1264, 1360 and 1580px.

## Do's and Don'ts

**Do**
- Make the work the interface: full-bleed footage in a tight rectangular mosaic.
- Title tiles "Project for Client" in white, top left, 36px/400 with -0.2px tracking.
- Keep chrome text to 20px/400 #231f20 on a #f4f4f4 canvas.
- Use one typeface (Universus Sans) and negative letter-spacing at every size.
- Keep the header to the wordmark line plus "Work", "Info" and one social icon.

**Don't**
- Don't round corners or add shadows to tiles.
- Don't add an accent colour; client imagery carries colour.
- Don't add descriptions or tags under tiles on the home page.
- Don't use bold weights for titles; 400 is the working weight.
- Don't put the studio info on the main page; it lives in the Info overlay.

## Responsive Behavior

Measured at 390px wide:

- Tile titles become 21px/400/24px with -0.14px letter-spacing (desktop 36px/40px/-0.2px).
- Body text becomes 14px/400/19.6px with -0.14px (desktop 20px/28px/-0.2px).
- The header has 32px vertical padding (desktop 48px) and a #f4f4f4 background, 148px tall.
- Content spans x = 20 to 370.
- The grid shows 1 column (`maxCardColumns` 1).
- 4 header links remain visible and no menu toggle is shown.

Widths between 390px and 1280px were not measured.

## Iteration Guide

1. Set a #f4f4f4 page with #231f20 text in Universus Sans 400 at 20px/28px, -0.2px tracking.
2. Build a header with the wordmark line on the left and "Work", "Info", one icon on the right, 48px vertical padding.
3. Lay projects out as a justified mosaic of square-cornered video tiles in rows of two or three with thin gaps.
4. Put white 36px/40px titles at each tile's top left, inset 11.25–16.25px, phrased "Project for Client".
5. Fill tiles with #0000000d while media loads.
6. Keep studio details, contacts and legal in an overlay.
7. On mobile, one column, 21px titles and 14px body.
