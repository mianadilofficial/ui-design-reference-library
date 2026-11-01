---
version: alpha
name: Siam Gas
category: "Thai Brands"
description: "Corporate site of Siamgas and Petrochemicals PCL. (shown as Siam Gas Group): a light-gray #eaeaea canvas, flat Siam-blue #0071bb label bars with white 16px bold Helvetica Neue caps, red #ff0000 accents, Arial 13.3333px body copy and square 0px corners."
colors:
  canvas: "#eaeaea"
  page-largest: "#ffffff"
  on-primary: "#ffffff"
  ink: "#4d4d4d"
  primary: "#0071bb"
  accent-red: "#ff0000"
  neutral-light: "#cccccc"
  navy: "#143852"
  link: "#0000ff"
  nav-text: "#555555"
typography:
  display:
    fontFamily: Helvetica, sans-serif
    fontSize: 23px
    fontWeight: 400
    lineHeight: 27.6px
    letterSpacing: "-1.725px"
    textTransform: uppercase
  body:
    fontFamily: Arial, san-serif
    fontSize: 13.3333px
    fontWeight: 400
    lineHeight: 19.5px
  button:
    fontFamily: "\"Helvetica Neue\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 19.5px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 5px
  none: 0px
spacing:
  s1: 5px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 14px
  s6: 16px
  s7: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 5px
    height: 30px
  button-primary-hover:
    textColor: "{colors.accent-red}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px
    height: 40px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
    padding: 10px 0px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.accent-red}"
    rounded: "{rounded.none}"
    padding: 0px 20px
---

## Overview

Siam Gas (siamgas.com, page title "Siam Gas") is the corporate site of Siamgas and Petrochemicals PCL., a company whose own homepage copy describes it as a leading LPG distributor in Thailand and East Asia operating in five countries. The measured design is a late-2000s style WordPress corporate page: a 980px content column centred on a light-gray `#eaeaea` canvas, a white header carrying the red-and-blue Siam Gas Group logo, a hero photograph of a long over-water loading pier, and a grid of photo tiles that each end in a flat blue label bar. The mood is utilitarian and informational rather than promotional. There is no display typeface, no gradient, no pill shape and almost no shadow; the single strong gesture is the repeated solid `#0071bb` bar with white capital letters beneath every image.

The capture shows a tribute pop-up (a black-and-white memorial portrait in a modal) over the first load. The extractor recorded it as a hidden consent overlay ("scrim pum-4913"), and the tokens in this file come from a second extraction taken with that overlay hidden. The pop-up, its close button and the language drop-down in the top-right corner are not brand UI and are not documented as components.

Tone of voice in the microcopy is plain corporate English: "WELCOME TO OUR FAMILY", "Business Structure", "Products and Services", "Careers", "News and Activities", "Promotions", "Smile Rewards", "Corporate Video", "Company's Profile". Headings are uppercase except where a tile label is set in sentence case. News items are datelined in the form "22 May-2020 | ..." and end with a "read more" text link.

## Colors

The palette is small and every value below was measured on the live homepage.

- **Canvas `#eaeaea`** is the page background behind the content column; it is also the largest on-screen color in the capture. White `#ffffff` (`page-largest`) is the header and the promo-card surface and the color of text placed on blue bars (`on-primary`).
- **Ink `#4d4d4d`** is the most-read text color (1,087 characters on the page) and is used for the h1 and body paragraphs. It is also the footer background, which makes the footer a dark-gray slab with light text.
- **Primary `#0071bb`** is the fill of every call-to-action bar: "Corporate Video", "Business Structure", "Products and Services", "Careers", "News and Activities", "Promotions". It is also the color of the thin rule under the header and the nav tabs in the capture.
- **Accent red `#ff0000`** appears in the footer column headings ("ABOUT US", "HEAD OFFICE"), in a thick band at the top of the footer, in two 1px borders (one around the Promotions card), and as the hover color of every blue bar: on hover the label text and border change from white to `#ff0000` while the fill stays `#0071bb`. The logo wordmark is also red.
- **Navy `#143852`** and **neutral light `#cccccc`** are measured text colors (navy appears as a child color of the body and nav; `#cccccc` on 24 characters). **Nav text `#555555`** is the header text color of the navigation container.
- **Link `#0000ff`** is the computed color of the "read more" link. It is the pure-blue value the browser reported for that element and it is not part of the blue-bar system; it is documented as measured, not as a chosen brand color.

The stylesheet corpus also contains WordPress core preset colors such as `#0693e3`, `#9b51e0` and `#fcb900` (exposed as `--wp--preset--color--*` variables). These ship with the WordPress theme and were not seen in the rendered homepage, so they are not part of the brand palette.

## Typography

The typography is system sans-serif throughout. No brand typeface is loaded for text: the loaded-font list reports "Open Sans 400" and "FontAwesome", but the characters on the page are measured as Arial (1,197 characters), Helvetica Neue (267) and Helvetica (112).

- **Display** is `Helvetica, sans-serif` at 23px, weight 400, line-height 27.6px, letter-spacing -1.725px (a tight negative tracking of -0.075em), uppercase. It is used once, for the h1 "WELCOME TO OUR FAMILY". A second heading size, 18px with -1.35px tracking, is used for news-item titles such as "SIGNING CEREMONY" and "CSR ACTIVITY".
- **Body** is `Arial, san-serif` at 13.3333px, weight 400, line-height 19.5px. The family string carries the misspelling "san-serif" exactly as shipped, so the fallback is effectively the browser default.
- **Button** is `"Helvetica Neue", Arial, Helvetica, sans-serif` at 16px, weight 700, line-height 19.5px. The "Corporate Video" bar is uppercase; the other tile labels are sentence case.
- **Nav and footer** use 11px (1.1px tracking, uppercase, 30px line-height) for the header tabs and 12px (1px tracking, uppercase) for footer headings.

Only two weights occur: 400 (1,480 characters) and 700 (107). The measured size scale is 11, 12, 13.3333, 14, 16, 18 and 23px.

### Font substitutes

The fonts are system fonts, so no substitute is needed. On a machine without Helvetica Neue the declared fallbacks Arial, Helvetica and sans-serif apply.

## Layout

The page is a fixed 980px column (header, nav, hero, footer all measure 980px wide) centred in a 1280px-wide desktop viewport; the full desktop page height is 1629px. The hero image fills the column. Below it the content splits into a left column about 627px wide (h1 and an intro paragraph, then a three-up row of photo tiles and a second row) and a right column with two stacked 314px-wide image bars: "Corporate Video" and "Company's Profile".

The extraction measured a maximum of three card columns on desktop and seven visible header links. Spacing values recorded on the page are 5, 7, 8, 10, 14, 16 and 20px; paddings of 10px (15 occurrences) and 14px (6) dominate, and the only recorded flex gap is 8px. Each tile is an image on top with a blue label bar underneath, aligned so that bars in a row share one baseline.

## Elevation & Depth

Depth is almost absent. The only box-shadow recorded in the frequency pass is `rgba(0, 0, 0, 0.05) 0px 10px 20px 0px`, a faint shadow on a single element (which element was not recorded). Tiles, bars and the footer are flat. Separation comes from color blocks: white header over gray canvas, blue bars over photos, dark-gray footer under a red band. Round shadowed badges (the five circular category icons over the hero) appear in the capture with a soft shadow, but their box-shadow was not recorded as a measured value, so no shadow token is declared for them.

## Shapes

Corners are square. Both the primary bar and the secondary bar have `borderRadius: 0px`, as do the nav, link and footer. The measured radii are 2px (two elements), a 5px top-corner radius used on the header tabs (`5px 5px 0px 0px`) and a bottom-corner radius of 8px (`0px 0px 8px 8px`) on a single element. The circular icon badges over the hero are visibly round in the capture; the radius value was not recorded, so none is declared. Borders are rare: `#ff0000` at 1px on two elements and a very light `#1438521a` on one.

## Components

- **Button primary (label bar).** Fill `#0071bb`, text white, 16px/700 Helvetica Neue uppercase, padding 5px, height 30px, radius 0px; measured on the 314px-wide "Corporate Video" bar. On hover the text and border change to `#ff0000`; fill, size and shadow are unchanged (measured hover state).
- **Button secondary (tile bar).** Same fill, text and type as the primary bar, padding 10px, height 40px; measured at 192px wide on the three tile bars and 410px / 188px on "News and Activities" and "Promotions".
- **Link.** The inline "read more" link is `#0000ff` at body size, 13.3333px Arial, 61px wide.
- **Navigation.** A header container with `#555555` text, 10px vertical padding, 980px wide and 93px high on desktop. Seven links are visible: the home glyph, About Us, Products & Services, News & Media, Investors, Career, Contact Us, set as small uppercase tabs with blue fill and white text in the capture.
- **Footer.** A 980px-wide block with `#4d4d4d` background, 0px 20px padding, red `#ff0000` uppercase 12px column headings and white or light-gray link text, under a solid red band. Contact details (address, telephone and fax) are plain text.
- **Not documented as brand UI:** the tribute modal and its close button, and the language selector.

## Design System Architecture

No public design system, brand guideline or token package was found: the homepage links to company pages, not to design documentation, and no brand-guidelines page was opened. The de-facto system is a WordPress theme. The root custom properties are WordPress core ones (`--wp--preset--color--*`, `--wp--preset--font-size--large: 36px`, `--wp--preset--font-size--small: 13px`, `--wp--preset--spacing--30` to `--70`, `--wp--preset--shadow--*`, `--wp-admin-theme-color*`), which come from the platform rather than from Siam Gas. The brand layer is the hand-written stylesheet: one blue `#0071bb` for bars, one red `#ff0000` for hover and footer accents, system fonts and 0px radii. Source of measurements: the homepage at https://www.siamgas.com/ as captured by the repository extractor.

## Do's and Don'ts

- Do use `#0071bb` bars with white 16px bold labels as the single call-to-action pattern, and keep corners at 0px.
- Do pair every tile photo with a bar of the same width directly beneath it.
- Do set the h1 in uppercase Helvetica 23px with -1.725px tracking and keep body copy at 13.3333px Arial in `#4d4d4d`.
- Do reserve `#ff0000` for hover, the footer band and footer headings, and borders on highlighted cards.
- Don't introduce rounded buttons, gradients or heavy shadows; none were measured.
- Don't treat the tribute pop-up, close button or language selector as brand components.
- Don't use the WordPress preset colors (`#0693e3`, `#9b51e0`, `#fcb900`) as brand colors.
- Don't copy the "san-serif" typo in new work; the shipped value is recorded here only because it was measured.

## Responsive Behavior

Measured on a 360px-wide mobile pass: the h1 stays 23px with -1.725px tracking, body text stays 13.3333px/19.5px, and the primary bar ("Business Structure") spans the full 360px width at 40px height with 10px padding. The mobile pass recorded one visible header link (desktop: seven) and one card column (desktop: three). No menu-toggle button was detected on mobile (`menuToggleVisible: false`), so how the remaining links are reached is not measured. The mobile nav container measured 375px wide and 102px high. Breakpoints and any tablet behavior are not measured.

## Iteration Guide

1. Start from the tokens in the frontmatter; do not alter measured values without a new extraction.
2. Build a page as: white header, gray `#eaeaea` canvas, 980px column, photo tiles with `#0071bb` bars beneath.
3. Keep headings uppercase and tight (-1.725px) at 23px; keep body at 13.3333px.
4. Add `#ff0000` only as hover text/border color on bars, footer headings and the footer band.
5. If a pop-up or tribute overlay appears in a new capture, re-run `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase3-thai.json --only=siamgas --force` and regenerate tokens before documenting colors.
6. Run `node web/scripts/verify-designs.mjs --slug=siamgas` until it passes.
