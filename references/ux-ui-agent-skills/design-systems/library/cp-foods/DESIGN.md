---
version: alpha
name: CPF (Charoen Pokphand Foods)
category: "Thai Brands"
description: "CPF (Charoen Pokphand Foods, cpfworldwide.com/th/home) measured at 1280px: Thai DB Heavent faces in light/regular/medium, green #008b43 section bars and headings, white pill outline buttons with 50px radius, a #f2f2f2 canvas with #f9f9f9 cards, and 30px/45px body copy."
colors:
  canvas: "#f2f2f2"
  page-body: "#ffffff"
  ink: "#555555"
  primary: "#008b43"
  surface-3: "#f9f9f9"
  ink-2: "#777777"
  ink-3: "#333333"
  ink-5: "#999999"
  ink-6: "#000000"
  link: "#28a745"
  text-input-text: "#495057"
  text-input-border: "#ced4da"
  link-hover: "#19692c"
  surface-4: "#f1f1f1"
  surface-light: "#f8f9fa"
typography:
  display:
    fontFamily: db_heaventlight
    fontSize: 58px
    fontWeight: 700
    lineHeight: 46.4px
  heading:
    fontFamily: db_heaventmed
    fontSize: 48px
    fontWeight: 500
    lineHeight: 57.6px
  body:
    fontFamily: db_heaventregular
    fontSize: 30px
    fontWeight: 400
    lineHeight: 45px
  nav:
    fontFamily: db_heaventregular
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
  button-secondary:
    fontFamily: db_heaventlight
    fontSize: 30px
    fontWeight: 400
    lineHeight: 48px
  input:
    fontFamily: "\"PSL Text Pro\""
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px
rounded:
  xs: 2.5px
  sm: 20px
  md: 50px
spacing:
  s1: 5px
  s2: 10px
  s3: 12.5px
  s4: 15px
  s5: 16.41px
  s6: 20px
  s7: 30px
  s8: 55px
  s9: 68px
  s10: 75px
components:
  button-secondary:
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 0px 30px
    height: 50px
    borderColor: "{colors.page-body}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.page-body}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 5px 35px 5px 20px
    height: 45px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-6}"
---

## Overview

This file documents the Thai home page of CPF (Charoen Pokphand Foods Public Company Limited), measured at `https://www.cpfworldwide.com/th/home`. The queued URL `https://www.cpfworldwide.com/en` redirected there, so the measured site is the Thai-language version (page `lang="th"`, title "CPF ครัวของโลก ขับเคลื่อนด้วยเทคโนโลยีทางการเกษตรสมัยใหม่"). The measurement hid a modal (`dialog myModal`), a cookie bar, a "mourning-intro-page" layer and a modal backdrop; none of those are documented as brand UI.

The page opens with a full-bleed photograph of a mother feeding a child, a centred quoted headline "ครัวของโลก" ("the kitchen of the world") in white, and two outlined white pill buttons ("วิสัยทัศน์" and "สำหรับบุคลากร"). A white-on-photo header carries the CPF logo, eight Thai links and a language and search control. Below it comes a green `#008b43` bar titled "Sustainability VDO" with a close icon, a video-news row with a hashtag link in green, a strip of four green-outlined sustainability badges, a three-column photographic card row ("ซีพีเอฟกับความยั่งยืน", "นักลงทุนสัมพันธ์", "ธุรกิจ") with green headings, a "ข่าวประชาสัมพันธ์" press list with dates and a pill "ดูข่าวทั้งหมด" button, a dark financial-data banner ("ข้อมูลบริษัทโดยสรุป ปี 2566" at 70px) and a multi-column footer with social icons and a company address.

The voice is institutional and Thai: formal headings, long-form descriptive card copy, and a single green brand colour used for headings, links and borders.

## Colors

- **canvas `#f2f2f2`**: the page and footer background tone; area weight 660 against white's 4438.
- **page-body `#ffffff`**: the largest background by area, used for the content band, the header's measured background and white button text and borders.
- **surface-3 `#f9f9f9`**, **surface-4 `#f1f1f1`**, **surface-light `#f8f9fa`**: the alternating card and band greys. Weights 442, 221 and 200.
- **primary `#008b43`**: the CPF green. It fills the "Sustainability VDO" bar (112 area weight), sets the card headings ("ซีพีเอฟกับความยั่งยืน") at 48px and appears as a border colour on the badge outlines.
- **link `#28a745`**: link colour of the hashtag links, measured 59 characters; on hover it measures `rgb(25, 105, 44)`, recorded as **link-hover `#19692c`**. This value coincides with Bootstrap's `--success`, which the page also declares as a root variable, so treat it as the page's link green rather than a second brand colour.
- **ink `#555555`** (437 characters), **ink-2 `#777777`** (339), **ink-3 `#333333`** (214), **ink-5 `#999999`** (169), **ink-6 `#000000`** (132): the grey text ramp, with `#212529` (102) on the news row.
- **text-input-text `#495057`** and **text-input-border `#ced4da`**: the language select styling.

The generated tokens also held `#007bff` as a navigation-link colour. That is a Bootstrap default link blue (the page also reports `--indigo`, `--pink`, `--yellow` and other Bootstrap variables), not a brand colour, and was dropped.

## Typography

CPF's page is set in the DB Heavent family, loaded as separate faces rather than weights: `db_heaventlight`, `db_heaventregular`, `db_heaventmed`, `db_heaventmed_ext` and `db_heaventbold`, each at weight 400, plus `PSL Text Pro` for the language select and FontAwesome for icons. By character count: regular 747, light 526, med 358, med_ext 94, bold 28. DB Heavent is a commercial Thai typeface; no substitute was measured on the page.

| Role | Face | Size | Weight | Line height |
|---|---|---|---|---|
| display (hero quote) | db_heaventlight | 58px | 700 | 46.4px |
| heading ("Sustainability VDO") | db_heaventmed | 48px | 500 | 57.6px |
| body (news row) | db_heaventregular | 30px | 400 | 45px |
| button-secondary | db_heaventlight | 30px | 400 | 48px |
| nav (small control) | db_heaventregular | 10px | 400 | 15px |
| input | PSL Text Pro | 22px | 400 | 33px |

The header links measure 16px on a 48px line in `db_heaventmed_ext`. Most-read sizes by characters: 24px (440), 22px (339), 30px (213), 36px (213), 16px (94), 18px (91), 48px (79), 28px (77). Larger display sizes appear at 70px (27 characters, the data banner) and 72px (17). Weight is almost always 400 (1705 characters) because the weight is carried by the font file; the h1 reports 700.

## Layout

The page is a vertical stack of bands: a 79px header band over a 561px hero, the 89px green bar, a 645px video-news band on `#fefefe`, the 338px badge strip, a 1028px band on `#f9f9f9` holding the three cards, a 307px banner, and a 516px `#f2f2f2` footer band. The three feature cards sit edge to edge in a full-width row with photographs on top and text beneath. The measured card-grid maximum is four columns on desktop. Paddings: 15px (43 elements), 30px (15), 10px (10), 16.4062px (8), 5px (3), plus single values of 55px to 100px.

## Elevation & Depth

No box-shadow was measured (the list is empty). The root variables declare an `--aa-panel-shadow` belonging to the search-autocomplete widget; it is not a page token. Depth comes from photography, from flat colour bands, and from the white pill outlines laid over the hero image.

## Shapes

Measured radii: 50px (3 elements), 20px (2) and 2.5px (1). The 50px radius is the pill shape of the hero buttons, the "See more" and "ดูข่าวทั้งหมด" pills; 20px is the language select (`rounded.sm`); 2.5px is a minor value. Cards and bands compute 0px.

## Components

**button-secondary (outlined pill).** Transparent fill, white 30px db_heaventlight label, `1px solid #ffffff` border, radius 50px, padding `0px 30px`, height 50px ("วิสัยทัศน์" measures 136px wide). On the white content area the same pill shape is drawn with a green border and green text ("ดูข่าวทั้งหมด", "See more"); the extractor measured borders in `#008b43` and `#28a745` on single elements. No filled primary button was detected.

**link.** `#28a745` at 30px db_heaventregular; hover darkens to `#19692c`.

**nav.** The header is measured as 68px tall with white text; 16px links at a 48px line. A language control shows "THAI" and a search icon.

**text-input.** The language select: 22px PSL Text Pro, `#495057` text, `1px solid #ced4da`, 20px radius, padding `5px 35px 5px 20px`, 45px tall, 260px wide.

**Cards.** The three feature cards have a photograph, a 48px green heading and a short description; the hover state measured on card links keeps text `#008b43` and changes the Bootstrap focus border from `rgb(0, 123, 255)` to `rgb(0, 86, 179)`, which is a framework artefact.

**footer.** `#f2f2f2` band with black `#000000` column headings, grey sub-links, social icons, a company address and a language select.

## Design System Architecture

No public CPF design system or brand-guideline link was found; no search was run. The page is built on Bootstrap 4: root variables include `--breakpoint-xl: 1200px`, `--success: #28a745`, `--light: #f8f9fa`, `--gray-dark: #343a40`, and the CSS declares `min-width 768px` (374 rules), `min-width 576px` (176), `min-width 1200px` (132) and `min-width 992px` (121) breakpoints. The brand layer is the DB Heavent font set and the green `#008b43`. An Algolia-style autocomplete (`--aa-*` variables) supplies the search panel.

## Do's and Don'ts

- Do use `#008b43` for headings, section bars and outlines, and keep the grey text ramp `#555555` to `#999999` for body copy.
- Do shape secondary actions as pills with a 50px radius and a 1px border.
- Do set Thai text at generous line height: body 30px on 45px.
- Do alternate `#ffffff`, `#f9f9f9` and `#f2f2f2` bands rather than using shadows.
- Don't use Bootstrap's `#007bff` blue or its focus border colours as brand colours.
- Don't document the modal, cookie bar, mourning layer or autocomplete panel as brand UI.
- Don't add shadows; none were measured.

## Responsive Behavior

Measured at 390px: the header shows 2 visible links with no menu toggle detected, the card grid reports a maximum of 2 columns, and the h1 and body measure 58px and 30px, the same as desktop, because the mobile pass reported identical sizes. Shipped CSS breakpoints include `max-width 767.98px` (517 rules), `max-width 991.98px` (132), `max-width 575.98px` (110) and `max-width 425px` (66). Behaviour of individual components at other widths is not measured.

## Iteration Guide

1. Start with a full-bleed photographic hero, a quoted DB Heavent headline in white and two outlined 50px pills.
2. Introduce each section with a `primary` green bar or a 48px green heading in `db_heaventmed`.
3. Lay out three edge-to-edge cards on `surface-3`, headings in green and body in `ink`.
4. Use `link` `#28a745` with a `#19692c` hover for inline links.
5. End with a `canvas` footer with black column headings.
6. If you need a filled button, focus ring or tablet layout, measure it first; none is recorded here.
