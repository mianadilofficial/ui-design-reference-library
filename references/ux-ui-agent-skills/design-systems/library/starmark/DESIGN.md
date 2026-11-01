---
version: alpha
name: STARMARK
category: "Thai Brands"
description: "STARMARK is a Thai kitchen and wardrobe furniture manufacturer whose Wix-built site is a quiet white gallery. It uses a #ffffff canvas, mid-grey #606060 body ink, near-black #242323 accents, a #282828 hairline, square corners with no rounding, and a mix of Avenir LT Light 14px body, DIN Neuzeit Grotesk 22px and a Thai display face at 35px."
colors:
  canvas: "#ffffff"
  ink: "#606060"
  primary: "#605e5e"
  ink-strong: "#242323"
  ink-soft: "#303030"
  ink-muted: "#909090"
  surface-dark: "#2f2e2e"
  on-dark: "#ffffff"
  hairline: "#282828"
typography:
  display:
    fontFamily: dinneuzeitgroteskltw01-_812426, sans-serif
    fontSize: 22px
    fontWeight: 400
  heading:
    fontFamily: wfont_c5e540_7ca8e9afeb804a20a7879c9274755082, wf_7ca8e9afeb804a20a7879c927, orig_db_gill_siam_x
    fontSize: 35px
    fontWeight: 400
  body:
    fontFamily: avenir-lt-w01_35-light1475496, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
rounded:
  none: 0px
spacing:
  s1: 5px
  s2: 10px
  s3: 14px
components:
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-dark}"
---

## Overview

The measured page is https://www.starmark.co.th/ (title "หน้าหลัก | STARMARK"). STARMARK is, per its own site, a Thai furniture manufacturer and importer: formally STARMARK Manufacturing Co., Ltd. (บจก.สตาร์มาร์ค แมนูแฟคเชอร์ริ่ง), making pantry and Thai kitchen sets, ready-made kitchens, concrete-finish kitchen cabinets, wardrobes and dressing rooms, bathroom vanity cabinets and decorative interior films. The about page says the company began in 1982 as a design firm, has a factory of about 80,600 square metres in Samut Sakhon with over 1,000 employees, and sells through more than 100 showrooms nationwide, including Home Pro stores, authorized dealers and online marketplaces.

The home page is built as a restrained showroom catalogue. The capture shows a header with the coloured faceted-hexagon logo beside the STARMARK wordmark, social icons for Facebook, Instagram and LINE, two phone numbers labelled for after-sales service (บริการหลังการขาย) and sales (ฝ่ายขาย), and a TH | EN language switch. Beneath it a thin horizontal rule separates a right-aligned text menu: หน้าหลัก (Home), เกี่ยวกับเรา (About us), สินค้า (Products), ผลงาน (Portfolio) and ติดต่อ (Contact). A video hero with a centered play icon follows, then a centered Thai headline inviting visitors to see products at the STARMARK showroom at Design Village, Bang Na, then a section titled "สินค้าแนะนำ" (Recommended products) with two photo cards captioned ชุดครัวแพนทรี่ (pantry kitchen set) and ห้องแต่งตัว และตู้เสื้อผ้า (dressing room and wardrobes).

Whitespace is generous and the interface is tonal grey; the product photography, which shows bright, cream and warm-toned interiors, supplies all of the warmth.

## Colors

The measured text colours are almost all greys, ordered here by how much they are read.

- **`ink` `#606060`** is the most-read text colour on the white page (phone numbers, headline, captions). **`primary` `#605e5e`** is a near-identical grey measured on a small number of characters; the site has no filled button, so there is no separate action colour. It is declared only so the system has a named anchor.
- **`ink-strong` `#242323`** and **`ink-soft` `#303030`** are the darker greys used for the current menu item and some headings, and **`ink-muted` `#909090`** is the fainter menu items and secondary labels.
- **`canvas` `#ffffff`** is the page background, and **`surface-dark` `#2f2e2e`** is a dark background area measured on the page, on which **`on-dark` `#ffffff`** text is set (it is the most frequent text colour by characters).
- **`hairline` `#282828`** is the colour of the thin dividing rules and the vertical stroke ornaments.

The Wix theme also publishes a palette in its root variables (including red `237,28,36`, blue `0,136,203` and yellow `255,203,5`); they appear in the logo mark and are not used for interface colour in the capture, so they are not carried into the tokens. Colours here are therefore a monochrome grey set, with the logo as the only chromatic mark.

## Typography

The site mixes several licensed web fonts delivered through Wix. Measured by characters read, the main body face is **Avenir LT Light** (loaded as avenir-lt-w01_35-light) at 14px weight 400 on a 19.6px line, with Avenir LT Heavy also loaded. Phone numbers and short display text use **DIN Neuzeit Grotesk** at 22px (`display`). The Thai headline face is a Wix-hosted font whose stack ends in "orig_db_gill_siam_x" at 35px (`heading`), which renders the large centered Thai titles. Helvetica Light, Arial and Questrial are also loaded for small items.

Nearly all type is weight 400 (the only 700 usage is a handful of characters), so hierarchy comes from size and grey value, not weight. The theme's own style variables define 24px, 60px and 100px DIN Neuzeit heading styles and a 16px Helvetica Light body style; only the sizes listed in the tokens were verified on the rendered page.

Substitutes: for Thai, Prompt or Sarabun are close in tone; for the Latin face use a light geometric sans like Avenir Next Light or Nunito Sans Light.

## Layout

The page is a single centered column about 6290px tall at a 1280px viewport. Sections are separated by large empty gaps and by thin vertical rules (a short vertical line sits above each section title) rather than boxes or background bands. Product cards are shown two across with equal width and a caption beneath; the card block is narrower than the full page width, centered with wide side margins. The measured spacing is 5px, 10px and 14px, used for the small gaps in the header and icon rows; large separations come from Wix section heights, not from a spacing scale.

## Elevation & Depth

The overall impression is a printed brochure: paper-white ground, thin printed rules, and photographs set directly on the page with no frames.

Depth is flat. One soft shadow (0 0 20px at 0.2 alpha black) exists on the page, and otherwise surfaces are separated by whitespace and hairlines. There are no cards with elevation.

## Shapes

All measured radii are zero: images, cards and the video frame are sharp rectangles, and the only round shape visible is the play-icon circle over the hero video. Use `none` 0px everywhere.

## Components

- **Header:** logo left; social icons and two phone numbers with small labels at right; TH | EN switch; then a hairline and a right-aligned text menu with the current page darker.
- **Video hero:** full-width rectangular frame with a centered outlined play icon.
- **Section title:** centered 35px Thai heading in grey beneath a short vertical rule.
- **Product card:** a photograph with a centered small caption, two per row.
- **Dark surface:** a `surface-dark` area carrying `on-dark` text, measured on the page (white is the most frequent text colour by characters).

No button component appears on the measured page, so none is declared.

## Design System Architecture

STARMARK has no public design system or brand guideline in the pages opened (https://www.starmark.co.th/ and https://www.starmark.co.th/about describe the business only). The site is built on Wix, and its de-facto system is the Wix theme: root variables named `--color_0` to `--color_60`, `--font_2` to `--font_10`, and semantic `--wst-*` aliases such as `--wst-font-style-body-large`, `--wst-color-line` and `--wst-button-color-text-primary` that point at that numbered palette and font list.

## Do's and Don'ts

- Do keep the page white, the text grey and the photography warm and bright.
- Do separate sections with whitespace and thin vertical rules.
- Do use square corners.
- Don't add colour fills or gradients; the only chromatic mark is the logo.
- Don't use heavy weights to build hierarchy; use size and grey value.
- Don't introduce rounded buttons; the site has none.
- Don't use the browser's default link blue for menu links.

## Responsive Behavior

The extractor measured both a 1280px desktop and a mobile viewport. Because the site is Wix-built, its sections reflow within the platform's responsive layout. The type sizes listed in the tokens are those measured on the desktop page; no mobile-specific type values are asserted here.

## Iteration Guide

1. Use `canvas` white and `ink` grey; reserve `ink-strong` for the current item.
2. Set Thai headlines at the `heading` size and everything else at `body`.
3. Present products as large, evenly lit photographs, two per row, with a short centered caption.
4. Keep every corner square and every divider a hairline.
5. Re-run `node web/scripts/verify-designs.mjs --slug=starmark` after any change.
