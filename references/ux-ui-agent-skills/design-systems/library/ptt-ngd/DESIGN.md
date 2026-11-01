---
version: alpha
name: PTT NGD
category: "Thai Brands"
description: "Corporate site of PTT Natural Gas Distribution Co., Ltd. in PSL Kanda Thai display faces (112px uppercase headline) and 13px Tahoma body on white, with a dark translucent #323232ab numbered header, yellow #f3eb0a section accents, sky-blue #26aae2 text and #dddddd form fields."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#f3eb0a"
  surface: "#a6a5ab"
  surface-header: "#323232ab"
  ink-grey: "#666666"
  ink-near-black: "#111111"
  ink-blue: "#26aae2"
  ink-blue-dark: "#0f75bd"
  ink-light: "#dad9dc"
  input-bg: "#dddddd"
typography:
  display:
    fontFamily: psl_kandaextra_proregular
    fontSize: 112px
    fontWeight: 700
    lineHeight: 28px
    textTransform: uppercase
  display-mobile:
    fontFamily: psl_kandaextra_proregular
    fontSize: 60px
    fontWeight: 700
    lineHeight: 24px
    textTransform: uppercase
  body:
    fontFamily: Tahoma
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.5714px
  input:
    fontFamily: Arial
    fontSize: 13.3333px
    fontWeight: 400
rounded:
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 10px
  s6: 25px
  s7: 40px
  s8: 50px
  s9: 55px
  s10: 60px
components:
  text-input:
    backgroundColor: "{colors.input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 5px
    height: 36px
---

## Overview

PTT NGD is the content home page (`https://www.pttngd.co.th/content/`) of **PTT Natural Gas Distribution Co., Ltd.** (page title "PTT NGD"). The page copy opens with the headline "PTT NGD OPERATES ITS BUSINESS BY DISTRIBUTING NATURAL GAS" and a block of English text about the company's mission ("Keeping highest attention to client requirements – CUSTOMERS") and a complaint, request and opinion channel. The footer and contact details give a head-office address on Vibhavadi-Rangsit Road, Bangkok, with phone (66) 2 140 1500 and an emergency hotline; the page's own footer states copyright 2015 and browser support for Chrome, Firefox, Safari, Edge and Internet Explorer 10/11, which is consistent with the dated, table-and-script feel of the markup.

The first screen is a tall hero slider whose current slide, in the capture, is a black-and-white memorial portrait slide with Thai tribute text and a "MORE" outline button; slider dots at the top (the active dot yellow) mark four slides. That tribute slide is temporary content and not part of the brand system, and the page's grayscale filter was removed for measurement (`grayscale(0.01)` recorded). Across the top runs a header strip with a white logo tab at the left (house icon plus the "ptt NGD" mark with a blue and red drop) and six numbered menu items on a dark translucent bar: 01 NEWS & ACTIVITIES, 02 ABOUT PTT NGD, 03 PRODUCTS & SERVICES, 04 SSHE, 05 PROCUREMENT, 06 MEMBER LOGIN, followed by square icon buttons (search, menu, a US flag for language). Two side tabs at the right edge read CONTACT and CAREER. Under the slider, two coloured tiles sit side by side (a teal "CSR Activities" tile and an orange "Customer Relation News" tile, each with a "More" tag), then a strip of six photographs of field work, control rooms and award photos. The white content area below holds the headline in a large condensed face and a narrow text column, then an NGD "We Care" banner.

Voice: bilingual numbered navigation, uppercase English section titles, long plain-English paragraphs.

## Colors

`canvas` is #ffffff and `ink` #000000 (1453 characters, the most-read colour). `ink-grey` #666666 (813 characters) is secondary text and `ink-near-black` #111111 (488) the heading text. `surface` #a6a5ab (192 weight) is a grey area behind the slider and `surface-header` #323232ab (53 weight) is the translucent dark header strip, with a similar #323232c4 as a second layer. `ink-light` #dad9dc (158 characters) is the light text on dark areas. `ink-blue` #26aae2 (180 characters) and `ink-blue-dark` #0f75bd (33) are the two blues measured as text; they sit with the blue of the NGD logo drawn in the banner image, but the stylesheet colours were not traced to individual selectors, so they are recorded as measured text colours only.

`primary` #f3eb0a is a yellow measured in the page's own inline styles: the "PROVINCE, DISTRICT" section sub-heading is coloured #f3eb0a and a yellow marker uses #faf709. It is the system's accent for emphasis on dark panels. `input-bg` #dddddd is the background of the form fields (5 area weight). The teal and orange tiles are visible in the capture but their fills were not recorded as measured values, so no token is claimed for them.

## Typography

The brand display faces are PSL Kanda fonts loaded as web fonts: `psl_kandaextra_proregular` (headline, 50 characters), `psl_kanda_probold` (634 characters, subheads) and `psl_kanda_proregular` (124). Body copy is Tahoma (2988 characters, 13px) and form controls are Arial (14 characters). These are Thai-capable condensed faces for headings with a system sans for text.

Measured scale: `display` 112px / 28px at weight 700, uppercase (the "PTT NGD" headline; the line-height is smaller than the font size); `display-mobile` 60px / 24px at 700 at 390px; `body` 13px / 18.5714px at 400; `input` 13.3333px Arial. Other measured sizes: 20px (490 characters), 36px (86), 40px (83), 38px (61), 11px (53, the small nav captions), 28px and 72px; the numerals in the header menu are large with tiny captions beside them, and one 33px run has 2px letter-spacing. Weight 400 carries 3251 characters, 700 carries 552.

## Layout

The page is 1280px wide and 4793px tall. The hero slider fills the first screen and a header strip overlays its top edge. The white content area is a narrow left-aligned column (the text column in the capture is far narrower than the page) beneath a headline. Measured paddings: 10px (5 uses), 3px (4), 40px (4), 5px, 25px and 63.4531px. The six-photo strip sits directly under the tiles at full width. The mobile pass reports up to 7 card columns.

## Elevation & Depth

No box shadows were measured on the page. Depth comes from translucent dark layers (#323232ab and #323232c4) over imagery and from the slider's black-textured backdrop.

## Shapes

The only measured radius is 50% (10 uses), used for round dots and icon markers (the slider dots and the coloured circular markers). Tiles, photographs, tabs and buttons are square; the "MORE" button is a thin-outlined rectangle. The token `pill` records the circular case.

## Components

**Numbered header menu.** Dark translucent bar, large light numerals 01-06 with 11px uppercase captions, thin vertical dividers.

**Icon buttons.** Square dark buttons with white search, menu and flag icons.

**Side tabs.** CONTACT and CAREER at the right edge, white icon above a small uppercase label on a dark tab.

**Hero slider.** Full-width slides, dots at the top (active dot yellow), outlined "MORE" button over the artwork.

**Info tiles.** Two adjacent rectangular tiles with a line icon, a bold title, a small subtitle and a "More" tag in the corner.

**Text input.** `input-bg` #dddddd, black Arial 13.3333px text, 5px padding, 36px tall.

**Headline block.** Large uppercase condensed headline in dark grey (#333333 measured on the h1) above smaller uppercase lines and a 13px Tahoma paragraph column.

## Design System Architecture

No public design system or brand guideline page is linked or found on the page read (https://www.pttngd.co.th/content/). The stylesheet declares no root custom properties (the extraction recorded none), the CSS is a component stylesheet referenced as `../css/component.css`, and the page uses inline colour styles for some accents (for example #f3eb0a and #faf709). The site is therefore a hand-written, page-level style system: PSL Kanda headlines, Tahoma text, dark translucent chrome and image tiles.

## Do's and Don'ts

- Do set headlines in the PSL Kanda faces, uppercase, and body copy in 13px Tahoma with 18.5714px line-height.
- Do keep chrome dark and translucent (#323232ab) over photography, with numerals leading the menu.
- Do use the yellow #f3eb0a only as an accent on dark panels.
- Don't present the memorial slide, its grayscale treatment or its "MORE" button as brand UI.
- Don't add shadows or radii other than circles; none were measured.
- Don't assume values for the teal and orange tiles; they were not measured.

## Responsive Behavior

Measured at 390px: the headline is 60px / 24px at weight 700 (uppercase), the body paragraph stays 13px / 18.5714px and the mobile pass reports 0 header links visible, no visible menu-toggle button and a maximum of 7 card columns. The behaviour of the hero, tiles and photo strip at that width was not measured.

## Iteration Guide

1. Keep canvas white, text black and grey, chrome #323232ab.
2. Headline: PSL Kanda extra, 112px, uppercase; body Tahoma 13px / 18.5714px.
3. Use yellow #f3eb0a as the single warm accent on dark.
4. Re-measure per section if tile fills or logo blues are needed as tokens.
5. Run `node web/scripts/verify-designs.mjs --slug=ptt-ngd` after edits.
