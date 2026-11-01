---
version: alpha
name: Manager Online (MGR Online)
category: "Thai Brands"
description: "Manager Online (ผู้จัดการออนไลน์, MGR Online) Thai news portal measured at mgronline.com: dense white and #f1f1f1 canvas, #333333 body ink, #ff0000 red accents, black video bands, C-Font family at 14px body and 25.2px section headings, 10px-radius dark headline cards over photos."
colors:
  canvas: "#ffffff"
  page-body: "#f1f1f1"
  ink: "#333333"
  primary: "#ff0000"
  surface-2: "#000000"
  surface-3: "#e7e8e1"
  ink-3: "#cacaca"
  ink-4: "#ffffffcc"
  ink-5: "#555555"
  ink-6: "#656565"
  hairline: "#cccccc"
  link: "#337ab7"
  card-bg: "#333738"
  footer-border: "#0000001a"
typography:
  display:
    fontFamily: C-Font-Normal
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24.2px
  heading:
    fontFamily: C-Font-Extra-Bold
    fontSize: 25.2px
    fontWeight: 400
    lineHeight: 30.8px
  link:
    fontFamily: C-Font-Normal
    fontSize: 0px
    fontWeight: 400
    lineHeight: 0px
rounded:
  xs: 2px
  sm: 4px
  md: 7px
  lg: 10px
  xl: 12px
  2xl: 14px
  3xl: 20px
  4xl: 30px
  pill: 9999px
spacing:
  s1: 0.8px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 7px
  s8: 8px
  s9: 9px
  s10: 10px
components:
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
  nav-link:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.link}"
    typography: "{typography.display}"
    padding: 5px 10px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-5}"
    padding: 15px 20px 35px
    borderColor: "{colors.footer-border}"
---

# Manager Online (MGR Online)

## Overview

This file documents the home page measured at `https://mgronline.com/`, titled "ข่าววันนี้ ข่าวล่าสุด ข่าวการเมือง เศรษฐกิจ บันเทิง กีฬา | ผู้จัดการออนไลน์", language `th`. It is a Thai news portal: a masthead with the MGR Online logo, a search field and login, a top strip of sister publications, a block of lead stories with photo thumbnails and headline overlays, a "NEWS1" video block on a red and black band with sub-programs (World Talk, คนเคาะข่าว, ถอนหมุดข่าว, ข่าวลึกปมลับ, News Story, News Hour), sponsored cards, a row of category pills, and long category sections stacked down a page about 8,300px tall.

The first capture of this page was taken while a royal tribute overlay and a cookie notice were on screen, with the page dimmed. The page was re-measured with the batch extractor (`--no-motion`) and the tokens regenerated; the file describes that second measurement. The tribute overlay, the cookie banner ("MGR Online ใช้คุกกี้ ... รับทราบ" with a red confirm button), the back-to-top and the in-page ad slots are not brand UI and are not tokenized.

The character is density and speed. Almost every pixel is a headline, a thumbnail or a view counter. Color is mostly neutral: white `{colors.canvas}`, a light grey `{colors.page-body}` #f1f1f1, black bands `{colors.surface-2}` and a warm grey `{colors.surface-3}` #e7e8e1. Red is the signal color: `{colors.primary}` #ff0000, plus a darker red (#c51716, background area weight 330) behind the NEWS1 block.

## Colors

- `{colors.canvas}` #ffffff: main surface (area weight 13,758).
- `{colors.page-body}` #f1f1f1: page background behind the content column.
- `{colors.surface-2}` #000000: black video and header bands (weight 4,610).
- `{colors.surface-3}` #e7e8e1: warm light grey panels (weight 1,858).
- `{colors.card-bg}` #333738: dark headline card fill.
- `{colors.ink}` #333333: body text (most-read, 8,217 characters).
- `{colors.ink-3}` #cacaca: light text on dark bands (1,754 characters). `{colors.ink-4}` #ffffffcc: translucent white text on dark. `{colors.ink-5}` #555555 and `{colors.ink-6}` #656565: secondary text.
- `{colors.primary}` #ff0000: measured text color (22 characters), used for emphasis; it is the only pure red measured.
- `{colors.link}` #337ab7: link and navigation text color. This hex is also the Bootstrap 3 default link color; on this site it is measured as the real navigation color, but it should not be read as a deliberate brand choice.
- `{colors.hairline}` #cccccc and `{colors.footer-border}` #0000001a: borders.

The extraction also saw many photo-derived backgrounds (browns, slate greys) from image overlays; those are content, not tokens.

## Typography

Three faces are loaded with the site's own names: `C-Font-Normal` (9,648 characters), `C-Font-Bold` (2,454) and `C-Font-Extra-Bold` (1,083). All are declared at weight 400 and the weight is carried by the family name, not by `font-weight`. Icon fonts Glyphicons Halflings, FontAwesome and jw-icons are also loaded. No foundry or license page was found, so no substitute is claimed.

Sizes by characters: 14px (9,491), 16.8px (2,583), 22.4px (704), 25.2px (115), 11px (92), 12.6px (50), 10px (47), 21px (36), 16.1px, 18.9px, 28px and 10.5px. The base is `{typography.display}`: C-Font-Normal 14px on a 24.2px line. Section headings use `{typography.heading}`: C-Font-Extra-Bold 25.2px on a 30.8px line (for example "World Talk"). The `link` role measured 0px because the main link is a wrapper around images. There is no letter-spacing measured.

## Layout

The desktop measurement is 1280px wide. A centered content column on the `{colors.page-body}` background holds the sections; the lead area shows three large photo cards with overlaid headlines, a second row of four portrait thumbnails with white text cards beneath, and a right-hand ad. Below, rows of four equal cards with a view counter chip at the lower right of each photo recur. The NEWS1 block is a two-column band: a red column with the logo and a black player on the left, a black column with a two-by-two grid of programs on the right; the programs row below uses a dark grey band.

Measured paddings by frequency: 5px (212), 15px (151), 4px (129), 3px (92), 10px (68), 6px, 7px, 2px, 8px. The spacing tokens run from `{spacing.s1}` 0.8px through `{spacing.s10}` 10px. The footer is padded `15px 20px 35px`.

## Elevation & Depth

Almost flat. The one repeated shadow is `0 6px 12px` at 30% black (11 elements), used on floating panels; a single `0 1px 12px 3px` at 30% black appears once. Depth otherwise comes from color blocks: black and dark-grey bands against white, and dark semi-transparent gradients on photos behind white headline text. Cards use a 10px radius with no border measured in this pass.

## Shapes

Radii measured: 10px (163 elements), 4px (83), `10px 10px 0 0` (44; photo tops), 50% (17; round avatars and icons), 20px (11), 7px, 12px (10 each), 14px (6), 2px and a few single-corner values. Tokens: `{rounded.lg}` 10px for cards, `{rounded.sm}` 4px, `{rounded.md}` 7px, `{rounded.xl}` 12px, `{rounded.2xl}` 14px, `{rounded.3xl}` 20px, `{rounded.4xl}` 30px, `{rounded.pill}` 9999px for category pills. Corners are modest: cards read as slightly softened rectangles, pills as the exception.

## Components

- **Headline card** (`card`): `{colors.card-bg}` fill, white text, 10px radius; headline over a photo, with a view-count chip.
- **Navigation** (`nav`, `nav-link`): black bar, `{colors.link}` text, 14px, padding `5px 10px`, 45px tall.
- **Link** (`link`): `{colors.link}`.
- **Category pills**: rounded pill chips below the video block; the first (ข่าววันนี้) is red, others blue; they are described from the capture only, with no measured token.
- **Footer** (`footer`): white fill, `{colors.ink-5}` text, `15px 20px 35px` padding, `{colors.footer-border}` border.

No primary button was detected in this pass (the candidate list was empty), so none is declared. In the earlier overlay-affected pass the extractor saw a 30px-tall red "ค้นหาขั้นสูง" button; it is not carried here because that pass was contaminated.

## Design System Architecture

No public design system or brand guideline was found. The home page contains no links to brand, guideline, press or GitHub pages, and `/about` and `/aboutus` returned HTTP 403 and a 404 page. The de-facto system is a Bootstrap 3 base (Glyphicons, the `#337ab7` link color) with a large namespaced set of CSS custom properties prefixed `--c-` (for example `--c-font-l-hover-color-d` #23527C, `--c-bg-color-gray-7` rgba(0,0,0,0.192), `--c-article-item-*`, `--c-page-not-found-btn-font-size` 16px). Component styles are therefore parameterized per module (article item, thumbnail, stats) rather than shared tokens.

## Do's and Don'ts

- Do keep headlines in C-Font-Bold or Extra-Bold, 14px for list headlines and 25.2px for section titles.
- Do use black and dark-grey bands to group video content against the white news column.
- Do use 10px radius for cards and pills for categories.
- Do keep view counters small (11px) and aligned to the photo corner.
- Don't document the tribute overlay, cookie banner, ad slots or sponsored cards as brand UI.
- Don't set weight with `font-weight`; the site switches family instead.
- Don't treat #337ab7 as a chosen brand blue without confirmation.
- Don't add heavy shadows; only one panel shadow was measured.

## Responsive Behavior

At the 390px mobile pass the section heading stays 25.2px/30.8px, body text stays 14px, and character-weighted sizes are 14px (7,915), 16.8px (3,081), 22.4px (280) and 25.2px (115). The navigation measured 45px tall and 140px wide at that width. Breakpoints, column counts and hide/show rules were not measured here.

## Iteration Guide

1. Start with `{colors.canvas}` content on `{colors.page-body}` and `{colors.ink}` text at 14px.
2. Put video or featured content on `{colors.surface-2}` bands with `{colors.ink-3}` text.
3. Use `{typography.heading}` for section titles and `{rounded.lg}` for cards.
4. Reserve `{colors.primary}` for emphasis; confirm any button color by measuring a page where one exists.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=mgronline --force --no-motion` after changes, and avoid capturing during tribute overlays.
