---
version: alpha
name: KAZZ Magazine
category: "Thai Brands"
description: "KAZZ Magazine (kazz-magazine.com), a Thai entertainment and fashion news site on the tagDiv Newspaper WordPress theme: white page (#ffffff) with near-black text (#111111), grey excerpts (#767676), dark charcoal category chips (#363636) and a blue accent (#5d74ad); Roboto 21px headlines, Open Sans body, Ruda 700 uppercase menu. Square corners, no shadows, dense three-tier news grid."
colors:
  canvas: "#ffffff"
  ink: "#111111"
  primary: "#363636"
  on-primary: "#ffffff"
  surface-dark: "#3f3f3f"
  surface-light: "#e9e9e9"
  ink-muted: "#767676"
  ink-black: "#000000"
  ink-faint: "#cccccc"
  hairline: "#dcdcdc"
  link: "#5d74ad"
  theme-cyan: "#4db2ec"
typography:
  display:
    fontFamily: Ruda
    fontSize: 18px
    fontWeight: 700
    lineHeight: 48px
    textTransform: uppercase
  display-mobile:
    fontFamily: Roboto, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 25px
  button:
    fontFamily: Roboto, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17px
  link:
    fontFamily: Verdana, "system-ui", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 9px
  s8: 12px
  s9: 14px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7px 12px 4px
    height: 28px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7px 12px 4px
    height: 28px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
---

## Overview

The measured page is the home page of KAZZ Magazine (`https://kazz-magazine.com/`, title "KAZZ Magazine", language `th`), a Thai-language digital magazine covering entertainment, fashion, celebrity news and events. It is a content-dense news portal: a thin black top bar carrying the Thai date ("วันศุกร์, ตุลาคม 9, 2026") and social icons (Facebook, Instagram, X, YouTube); the large KAZZ logotype in black capitals on white; a horizontal menu in uppercase ("HOME, NEWS, FASHION, BEHIND, LIFESTYLE, GALLERY, HOROSCOPE, SHOP, ABOUT") with a search icon; and a promotional banner for the current issue ("KAZZ MAGAZINE ISSUE.211") that shows six cover images on a pale-blue bubble background.

Below the banner is a classic two-column news layout. The main column holds module blocks introduced by a small tab label with a rule underneath: "UPDATE" (blue tab), "Behind The Scenes" and "Scoop" (dark charcoal tabs). Each block combines large lead stories (image, Thai headline, author, date, excerpt) with smaller thumbnail rows. The right column holds an ad placeholder and a "RECOMMEND" list of thumbnails with short headlines and dates. The page is 5317px tall with 718 visible elements. Text is mixed Thai and English: Thai headlines with English brand and product names ("Vaseline®", "CAMPER X ISSEY MIYAKE", "GELBOYS"). The voice is press-release-adjacent and celebratory, with imagery of idols, actors and fashion.

A small blue back-to-top button is visible at the right edge of the capture; it is a utility control and is not documented as brand UI.

## Colors

- **Canvas `#ffffff`** (area 6023): the page background.
- **Ink `#111111`**: the main text color (2752 characters; `--td_text_color: #111`), used for headlines.
- **Ink muted `#767676`** (1978 characters): excerpts, dates and bylines.
- **Primary `#363636`**: the fill of the category chips "Behind The Scenes", "ENTERTAINMENT", "RECOMMEND", "PR NEWS", "GOSSIP" and "Scoop", with white 14px labels. A slightly different `#3f3f3f` (area 303) fills the larger dark blocks, such as the top bar area and overlays.
- **Surface light `#e9e9e9`**: grey placeholders (the ad box and pagination buttons).
- **Link `#5d74ad`**: the "UPDATE" tab and link blue; and a theme cyan **`#4db2ec`** (`--td_theme_color`) that appears in the background-area survey.
- **Ink black `#000000`**: the logo and menu text; **ink faint `#cccccc`** and **hairline `#dcdcdc`** (12 border occurrences) for rules.
- White `#ffffff` text (999 characters) sits on the dark top bar, chips and image overlays; the `#000000b3` overlay (area 8) darkens image captions.

The WordPress block-editor preset colors in the root (for example `--wp--preset--color--vivid-cyan-blue: #0693e3`, `--wp--preset--color--vivid-purple: #9b51e0`) are platform defaults and are not brand colors. The other theme variables are `--td_black: #222` and `--td_grid_border_color: #ededed`.

## Typography

Three families share the page: **Roboto** (3404 characters; headlines at 21px weight 400, chips at 14px), **Open Sans** (2469; excerpts and metadata; loaded at 400, 600 and 700) and **Ruda** (55 characters; the uppercase menu at 18px weight 700). The theme variables name them as `--td_default_google_font_2: 'Roboto', sans-serif` and `--td_default_google_font_1: 'Open Sans', 'Open Sans Regular', sans-serif`. The "newspaper" icon font and `flexslider-icon` are loaded for icons.

- Headline: Roboto 21px, weight 400, line-height 25px, color `#111111` (the same on desktop and mobile).
- Menu: Ruda 18px, weight 700, uppercase, black.
- Chip / button: Roboto 14px, weight 400, line-height 17px.
- Link: 14px, line-height 24px, Verdana first in the measured stack.
- Meta (author, date): 11px bold names and dates, 13px excerpts.

Size ladder by characters: 14px (2031), 13px (1678), 21px (956), 11px (645), 26px (532, lead headlines), 16px, 18px, 12px, 10px. The WordPress presets also define 11px, 15px, 32px and 50px sizes.

Font substitutes: all families are web fonts (Roboto, Open Sans, Ruda) with generic `sans-serif` fallbacks; Thai glyph fallback was not measured.

## Layout

The theme's grid is a roughly 1100px container (nav starts near 80px in a 960px capture; exact width not measured) with a main column of about two thirds and a sidebar. Module headings are tabs: a small filled rectangle with white uppercase text sitting on a full-width 1px rule. Lead stories are two-up image cards (about 240px images in the capture) followed by two-column list rows of thumbnail plus headline. A full-width overlay story for "Behind The Scenes" places a "NEWS" label and a white headline over a bottom gradient on the image. Measured spacing: 2, 3, 4, 5, 6, 7, 9, 12, 14 and 20px; WordPress spacing presets include 0.67rem, 1.5rem and 3.38rem.

## Elevation & Depth

`boxShadows` is empty for rendered elements; the WordPress presets define `6px 6px 9px rgba(0, 0, 0, 0.2)` (natural) and an outlined shadow, but nothing measured uses them. In the capture the ad placeholder shows a soft lower shadow and the issue banner cover images have slight shadows; these were not measured and no values are given. Separation relies on 1px `#dcdcdc` rules and the dark tab chips.

## Shapes

Every measured element has a 0px radius (`borderRadii` is empty): chips, buttons, tabs, pagination squares and images are rectangular. This is a flat, editorial, utilitarian shape language.

## Components

- **Category chip / button**: `#363636` fill, white Roboto 14px label, padding 7px 12px 4px, 28px tall, 0px radius.
- **Module tab**: small chip with the module name sitting on a full-width rule (blue for "UPDATE", dark for the others).
- **Lead card**: image, Roboto 21px headline, author name in bold 11px, date, a comment count box, and a 13px excerpt in `#767676`.
- **List row**: small thumbnail left, 14px headline right, date below.
- **Pagination**: two square arrow buttons with light-grey borders.
- **Top bar**: black strip with the date and four social icons.
- **Menu**: uppercase Ruda 18px items with dropdown carets for NEWS, SHOP and ABOUT; the active item has an underline.

## Design System Architecture

No public design-system or brand-guideline page was linked from the pages opened. The site runs the "Newspaper" WordPress theme by tagDiv (the markup includes "Newspaper by tagDiv.com 2025", theme version 12.7.1 in asset URLs, and `td_standard_pack` styles). Brand styling is therefore the theme's design tokens: `--td_text_color #111`, `--td_black #222`, `--td_grid_border_color #ededed`, `--td_theme_color #4db2ec`, the two Google font variables and the block-editor `--wp--preset--*` values. There are no site-specific named colors beyond these.

## Do's and Don'ts

Do:
- Keep the page white with `#111111` headlines and `#767676` secondary text.
- Use `#363636` rectangles with white labels for categories, and a blue tab for the lead module.
- Mix Roboto for headlines with Open Sans for excerpts and Ruda for the uppercase menu.
- Keep all corners square and use 1px rules instead of shadows.

Don't:
- Do not use WordPress preset colors (vivid cyan, purple, pink) as brand colors.
- Do not add rounded buttons or shadows.
- Do not document the back-to-top button as brand UI.

## Responsive Behavior

Measured on the 390px mobile pass: the headline stays Roboto 21px weight 400; chips stay 14px with padding 7px 12px 4px; the size ladder is 14px (2018 characters), 13px (1678), 21px (956), 11px (621), 18px (550), 16px, 10px and 12px. Menu collapse, column stacking and image resizing on mobile were not measured.

## Iteration Guide

1. White canvas, `#111111` Roboto 21px headlines, `#767676` Open Sans excerpts.
2. Category chips `#363636` with white 14px labels; one blue `#5d74ad` tab for the lead module.
3. Uppercase Ruda 700 menu at 18px under a large black logotype.
4. Two-up lead cards followed by thumbnail rows; a "RECOMMEND" sidebar list.
5. Verify with `node web/scripts/verify-designs.mjs --slug=kazz-magazine`.
