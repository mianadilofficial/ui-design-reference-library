---
version: alpha
name: Finland Toolbox
category: "Design Systems"
description: "Finland Toolbox is a materials library by the Finland Promotion Board, set in Finlandica with uppercase bold headings, a single deep blue #002ea2 for buttons, links and underlined fields, near-black #060a14 text, a #f0f1f2 grey filter panel on white, and square (0px radius) controls throughout."

colors:
  canvas: "#ffffff"
  page-largest: "#f0f1f2"
  ink: "#060a14"
  primary: "#002ea2"
  on-primary: "#ffffff"
  ink-muted: "#6e717b"
typography:
  display:
    fontFamily: Finlandica, "Segoe UI", sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 36px
    textTransform: uppercase
  display-mobile:
    fontFamily: Finlandica, "Segoe UI", sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
    textTransform: uppercase
  subheading:
    fontFamily: Finlandica, "Segoe UI", sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 22.05px
  body:
    fontFamily: Finlandica, "Segoe UI", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: Finlandica, "Segoe UI", sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 24.5px
    textTransform: uppercase
  input:
    fontFamily: Finlandica, "Segoe UI", sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 3.6px
  s2: 4px
  s3: 5.24px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 12px 6px
    height: 45px
    borderColor: "{colors.primary}"
  button-primary-hover:
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 4px
    height: 55px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    padding: 0px 40px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 35px
---

# Finland Toolbox

## Overview

Finland Toolbox (toolbox.finland.fi) is, in its own words, where you find "Everything you need to spread the word about Finland". The site's accessibility statement says it is published by the Finland Promotion Board, operated on behalf of the Ministry for Foreign Affairs of Finland. It is not a design-system documentation site: it is a searchable library of downloadable marketing materials (presentations, videos, publications, logos and patterns), and its navigation lists Finland in Stories, Finland in Images, Finland Works for Companies, Theme Calendar 2026 and Research & Strategy, plus a "Find materials for sharing" and a "Background resources" menu in the header.

The captured page has four zones. First, a white header with the wordmark "FINLAND TOOLBOX" in stacked blue capitals at left, two dropdown menus, and a quick-search field with a blue underline and a magnifier icon at right. Second, a row of four feature tiles: a flat blue panel reading "WELCOME TO FINLAND TOOLBOX" over a photograph, and three photo tiles (a teacher with children, cyclists, a technology image) each with a bold blue linked title and a short grey-black teaser. Third, a pale grey panel titled "BROWSE MATERIALS" holding a keyword field and four dropdown filters (All categories, All formats, All tags, All languages) with a blue SEARCH button and a white "MORE FILTERS" button. Fourth, a counter ("Showing 12 of 493 results"), a grid/list view toggle, and a four-column grid of material cards, each with a thumbnail on a dotted-grid background, a bold blue title, a short description, one or more blue download buttons labelled by format (PDF, PPTX, MP4), grey hashtags and an "Edited" date.

The voice is practical and promotional: titles such as "10 Degrees of Finnish Sauna" and "10 Patterns of Finnish Design" follow a numbered-list format, while button labels state the file type ("DOWNLOAD. FILE FORMAT").

## Colors

The palette is tiny and measured from the live page. The canvas is white, `#ffffff`. Ink is `#060a14`, a blue-black used for most reading text. The single brand color is `#002ea2`, a deep cobalt blue used for the wordmark, navigation, headings, links, button fills, the underlines of the search and filter fields, and the flat welcome tile. Muted text, such as the "Showing 12 of 493 results" line, hashtags and dates, is `#6e717b`. The filter panel and the dotted card backdrops use `#f0f1f2`, the largest non-white area on the page. One additional pale cyan, `#c3f1f5`, appears on category chips such as "FUNCTIONALITY AND WELLBEING"; it is also published in the site's WordPress preset variables as `blue-light`, next to `primary` `#002EA2` and `black` `#060A14`. White text on `#002ea2` is the only inversion.

Other swatches in the page's root variables (vivid purple, amber, orange, the default WordPress gradient set) are core WordPress block-editor presets and do not appear in the capture, so they are not part of this system.

## Typography

The page loads one family, Finlandica, in two weights, 400 and 700, with Segoe UI and generic sans-serif as fallbacks. The h1-level display style is 32px at weight 700 with a 36px line height, set in uppercase; on a 390px viewport it is 24px with a 32px line height, also uppercase. Subheadings, such as card titles, are 18px, weight 700, with a 22.05px line height. Body copy is 14px on a 21px line height at weight 400. Buttons are 14px, bold, uppercase, with a 24.5px line height. Text inputs are 16px, weight 400. Navigation links reuse the bold display face. The effect is a compact, humanist, slightly condensed editorial look; large uppercase bold blue headings are the site's loudest typographic gesture.

## Layout

A full-width white page captured at 1280px. The header is a single row with 40px horizontal padding on the navigation. Feature tiles and the material grid are four equal columns; the grey filter panel spans the full column width with generous inner padding, and its four filters sit on one row. Measured spacing values are small: 3.6, 4, 5.24, 6, 8, 10, 12, 14, 16 and 24px, which matches the dense card interiors. Between sections, spacing is visibly larger than between elements within a card, so the page reads as a grid of separate, evenly spaced blocks.

## Elevation & Depth

Flat. There are no box shadows on the captured elements. Hierarchy comes from fills (blue buttons, grey panel, white page), underlines (the blue bottom borders on fields) and the dotted-grid texture behind card thumbnails, which gives each card a printed-sheet feel. Imagery is photographic; several tiles in the capture are blue-toned.

## Shapes

Corners are square. The measured button radius is 0px, and inputs, navigation and cards follow the same rule. The generic pill token (9999px) is kept in the frontmatter for completeness but is not used by buttons. Chips are small rectangles. The only rounded things are photographic content.

## Components

**Primary button.** `#002ea2` fill with a `#002ea2` border, white 14px bold uppercase label, padding 8px 12px 6px, height 45px, radius 0. On hover the label color turns to the blue (the measured hover state changes text color to `#002ea2`), the fill in that state was not recorded.

**Download button.** Same blue block with a small download icon before an uppercase format label (PDF, PPTX, "VERTICAL (MP4)"); several can stack on one card.

**Secondary/large button.** Measured at 55px tall with 0px 4px padding in the same blue and white.

**Navigation.** Blue bold labels with a small chevron for dropdowns; horizontal padding 40px.

**Text input.** White field, 16px text in `#060a14`, 8px 16px padding, 35px height, with a blue bottom rule rather than a full outline.

**Material card.** Thumbnail on a dotted `#f0f1f2` background, bold blue title, grey description, button row, hashtag line in `#6e717b`, edit date.

## Design System Architecture

No public design-system documentation was found for this site. The configured design-system URL for this entry, https://toolbox.finland.fi, is the site itself, not a documentation site, so no values were taken from any separate source. The Brand Identity & Guidelines page on the toolbox (https://toolbox.finland.fi/brand-identity-and-guidelines/) lists downloadable logo files (RGB and CMYK versions of a logo with FINLAND in capitals in a deep blue), four patterns for the Suomi-Finland visual identity, and a PDF on the use of the logo; its page text gives no hex codes or typeface names, so none are attributed to it.

The de-facto system is WordPress: the page's root variables are `--wp--preset--*` presets, among them custom entries `--wp--preset--color--primary` (`#002EA2`), `--wp--preset--color--black` (`#060A14`), `--wp--preset--color--blue-light` (`#C3F1F5`), `--wp--preset--color--red` (`#FE717B`), `--wp--preset--color--green` (`#A4D67A`) and light variants, which suggests a theme.json-style palette. Typography and spacing are theme-defined rather than published as tokens.

## Do's and Don'ts

Do use `#002ea2` as the only action and heading color and white on it for labels. Do keep corners at 0px. Do set display and nav text in uppercase bold Finlandica. Do label download buttons with the file format. Do use `#f0f1f2` for large neutral panels.

Don't round buttons or inputs. Don't add shadows. Don't use the WordPress default gradients or the vivid presets. Don't use `#c3f1f5` outside small category chips. Don't set body copy in blue; reading text is `#060a14` and secondary text `#6e717b`.

## Responsive Behavior

The only measured mobile change is the display heading, which falls from 32px/36px to 24px/32px at 390px, still uppercase and bold. How the four-column grids reflow was not measured, so no breakpoint values are given here.

## Iteration Guide

Begin with a white page and `#060a14` text. Add `#002ea2` for the wordmark, links and buttons, and nothing else saturated. Put filters or other tools on a `#f0f1f2` panel with blue-underlined fields. When adding a card, follow the existing order: thumbnail, bold blue title, grey description, blue button(s), hashtags, date. Keep all radii at 0px and all button labels uppercase and short.
