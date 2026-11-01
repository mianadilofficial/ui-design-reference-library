---
version: alpha
name: Damso
category: "Retail & E-commerce"
description: "Damso.com is the artist Damso's site built as a retro media-player interface: a white (#ffffff) product browser with a dark #212121 click wheel, a Finder-style /world page with a #074edd selection label, and a black /billetterie event list, all in tiny uppercase grotesk (700, 10.6666px) with 1.59px-7.11px corners."
colors:
  canvas: "#ffffff"
  canvas-dark: "#000000"
  ink: "#000000"
  primary: "#000000"
  ink-on-dark: "#ffffff"
  ink-light: "#d0d0d0"
  nav-link-text: "#828282"
  surface-wheel: "#212121"
  surface-wheel-center: "#343434"
  surface-panel: "#4c484899"
  selection-blue: "#074edd"
  border-input: "#ffffff33"
  hover-dim: "#3e3d3c"
typography:
  display:
    fontFamily: grotesk, "grotesk Fallback", sans-serif
    fontSize: 10.6666px
    fontWeight: 700
    lineHeight: 15.9998px
    textTransform: uppercase
  display-mobile:
    fontFamily: grotesk, "grotesk Fallback", sans-serif
    fontSize: 10.8836px
    fontWeight: 700
    lineHeight: 16.3254px
    textTransform: uppercase
  label:
    fontFamily: grotesk, "grotesk Fallback", sans-serif
    fontSize: 9.77768px
    fontWeight: 700
    lineHeight: 14.6665px
  caption:
    fontFamily: grotesk, "grotesk Fallback", sans-serif
    fontSize: 8.8888px
    fontWeight: 500
    lineHeight: 13.3332px
    textTransform: uppercase
  input:
    fontFamily: grotesk, "grotesk Fallback", sans-serif
    fontSize: 10.6666px
    fontWeight: 400
    lineHeight: 15.9998px
rounded:
  xs: 1.59px
  sm: 3.56px
  md: 3.56px
  lg: 7.11px
  pill: 9999px
spacing:
  s1: 0.89px
  s2: 5.33px
  s3: 6.22px
  s4: 7.11px
  s5: 8.89px
  s6: 10.67px
  s7: 14.22px
  s8: 17.78px
components:
  nav:
    textColor: "{colors.ink}"
    padding: 8.8888px
    height: 62px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.display}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    height: 199px
    width: 199px
  click-wheel:
    backgroundColor: "{colors.surface-wheel}"
    textColor: "{colors.ink-light}"
    rounded: "{rounded.pill}"
  click-wheel-center:
    backgroundColor: "{colors.surface-wheel-center}"
    rounded: "{rounded.pill}"
  event-panel:
    backgroundColor: "{colors.surface-panel}"
    textColor: "{colors.ink-on-dark}"
    rounded: "{rounded.lg}"
    padding: 17.7776px 17.7776px 186.665px
  search-input:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    border: "1px solid #ffffff33"
    padding: 0px 10.6666px 0px 42.6662px
    height: 44px
  selected-label:
    backgroundColor: "{colors.selection-blue}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.label}"
---

## Overview

Damso.com (document title "Damso.com - Damso", language fr-fr, meta description "Simple aperçu de mon univers.") is the artist's own site, and it is built as a retro portable-music-player interface rather than a conventional shop. The page title of one embedded icon is literally "iPod battery icon", and every page ends with a circular click wheel at bottom center labelled "MENU" with rewind and fast-forward glyphs. Three pages were measured: the home page (https://damso.com/), /world and /billetterie, each a single 800px-tall viewport on a 1280px desktop pass.

The home page is white. A black rectangle with the white wordmark "DAMSO.COM" (an SVG logo, 62px by 27px as rendered) sits top left, and the name of the product currently in focus, "T-SHIRT BĒYĀH TOUR BLANC", sits top right in small black capitals. In the middle a horizontal row of merchandise photographs (a black cap, a gray cap, a white short-sleeved shirt with "BEYAH TOUR" printed on it, a white tank top and a black item) is arranged with the focused shirt at center and the neighbors smaller toward the edges. Below, the dark click wheel (#212121) with a #343434 center button holds the "MENU" label. The server markup lists the navigation labels Shop, World, Tournée, a cart count "0" and "menu"; Shop links to /, World to /world and Tournée to /billetterie. These labels are in the page text but are not visible in the home capture, which shows only the product name and the wheel.

/world re-imagines a desktop file browser: a pale folder icon whose selected label "r-e-m:_episode_0_bts_©arthur_catton" is white text on a #074edd blue highlight, and two thumbnail files named "beyah_merch.mp4" and "note_pour_la_nation.txt". A gray "WORLD" tag and a battery icon appear top right, and the click wheel is light gray on this page.

/billetterie is the opposite: a black page with a central dark panel (#4c484899 measured) containing an "EVENTS" tag, a bordered search field with a magnifier icon and the placeholder "Rechercher par ville", and a list of dated events such as "NORT SUR ERDRE - LA NUIT DE L'ERDRE / 3 juil. 2026", "SAINT-NOLFF - FÊTE DU BRUIT / 11 juil. 2026", "LE BARCARÈS - LES DÉFERLANTES / 13 juil. 2026" and "DOUR - FESTIVAL DE DOUR / 18 juil. 2026", with the first row highlighted and the last faded. The voice is French, terse and lower-case in the file names, uppercase in the interface.

## Colors

The palette is deliberately neutral: black, white and a few grays, with one saturated blue for selection.

| Token | Value | Evidence |
|---|---|---|
| `canvas` | #ffffff | Page background on / and /world (area weight 79 on the home page) |
| `canvas-dark` | #000000 | Page background on /billetterie (area weight 1024) |
| `ink` / `primary` | #000000 | Text on 24 characters of the home page; no filled button was detected, so primary equals ink |
| `ink-on-dark` | #ffffff | Text on dark pages (292 characters on /billetterie) and on the blue selection label |
| `ink-light` | #d0d0d0 | The "MENU" label color before hover on the dark wheel; also a background (weight 5) on /world |
| `nav-link-text` | #828282 | Color of the navigation link element |
| `surface-wheel` | #212121 | Click wheel on the home page (area weight 3) |
| `surface-wheel-center` | #343434 | Center button of the wheel (area weight 4) |
| `surface-panel` | #4c484899 | Event panel background on /billetterie (area weight 366) |
| `selection-blue` | #074edd | Selected file label on /world (area weight 4) |
| `border-input` | #ffffff33 | Search field border on /billetterie |
| `hover-dim` | #3e3d3c | "MENU" color after hover on the light wheel of /world |

Measured hover states: on the home page and /billetterie the "MENU" label changes from #d0d0d0 to #ffffff; on /world it changes from #828282 to #3e3d3c. The shipped CSS also contains #eb5757, #ff0000 and #ff00004d (red), #ededed, #cacaca, #dfdfdf, #242424 and #1a1a1a; their use on screen was not measured. #cacaca is a measured border color on /world.

Contrast changes by page, not by element: the dark wheel and the black events page use white and light-gray text; the white pages use black and mid-gray. The blue #074edd is the only saturated color measured.

## Typography

One family carries everything: a custom face referenced in CSS as `grotesk` with a `grotesk Fallback` companion. The page loads three font files named Scto_Grotesk_A_Regular, Scto_Grotesk_A_Medium and Scto_Grotesk_A_Bold (woff2, served from /_next/static/media/), which map to weights 400, 500 and 700. On the home page it covers all 45 measured characters.

| Token | Size / line-height | Weight | Measured use |
|---|---|---|---|
| `display` | 10.6666px / 15.9998px | 700 | Product name and nav-level text, uppercase |
| `display-mobile` | 10.8836px / 16.3254px | 700 | The same role at the mobile pass |
| `label` | 9.77768px / 14.6665px | 700 | Selected file label on /world; small labels on the home page |
| `caption` | 8.8888px / 13.3332px | 500 | Uppercase small text (17 characters on the home page, 22 on /world) |
| `input` | 10.6666px / 15.9998px | 400 | Search field text on /billetterie |

All type is tiny: the largest measured size on any of the three pages is 10.6666px (375 characters on /billetterie, 24 on the home page), with 9.77768px and 8.8888px below it. The fractional pixel values are as computed by the browser. Weight 700 covers 44 of the 45 home-page characters; weight 500 appears on /billetterie (194 characters) and 400 on 188 characters there. No letter-spacing was recorded on any page.

There are no headings or paragraphs in the measured pages. Hierarchy is made by weight (700 against 500 and 400), by color (white or black against gray) and by position. Event rows on /billetterie are uppercase for the title and sentence case for the venue line, with the date right-aligned in the same row.

If the licensed font files are unavailable, any neutral grotesque sans-serif with weights 400, 500 and 700 can stand in; no substitute was measured against the site.

## Layout

Every page is a single 800px-tall viewport (the extraction's scroll height is 800 on all three). The header is a 62px-tall, full-width strip with 8.8888px padding that holds the logo at left and, on the right, a text label or tag. The click wheel sits at the bottom center of the viewport at the same position in all three desktop captures. The main content sits in the space between: a horizontal product coverflow on the home page, a sparse scattered set of file icons on /world, and a 468px-wide, 782px-tall panel on /billetterie.

The home card role measured a 199px square white box with a 1.58749px radius. The events panel is 468px wide and 782px tall with padding 17.7776px 17.7776px 186.665px; the search field inside it is 432px wide and 44px tall with left padding 42.6662px (room for the magnifier icon) and right padding 10.6666px.

Measured spacing: paddings of 8.8888px (6 elements on the home page), 5.33328px (5), 14.2221px (3), 6.22216px (3), 17.7776px (1), 0.88888px (1), 7.11104px (1) and 10.6666px (1); gaps of 14.2221px (2) and 17.7776px (2). On /billetterie a 21.3331px and a 3.55552px gap also appear. Density is very low: most of each viewport is empty white or black, and the interface relies on one focused object.

## Elevation & Depth

No box shadow was measured on any of the three pages: the box-shadow list is empty on each, and the shipped CSS declares only Tailwind-style ring and shadow variables that all resolve to `0 0 #0000`. Depth is expressed by tone: a dark wheel against a white page, a lighter dark panel (#4c484899) over black on /billetterie, and a faded last row in the event list. In the captures the wheel carries a subtle vertical gradient, which was not measured as a token.

The focus style was measured: a focused link gets `outline: 2px solid rgb(0, 0, 0)` with a 4px offset (the unfocused state records a 3px outline with style none).

## Shapes

Radii are small, plus one circle. Home page: 3.55552px (11 elements), 3.35544e+07px (8 elements, the circular wheel and button shapes), 7.11104px (2), 1.58749px (2) and 3.55524px (2). /world adds 1.77776px (7 elements). On /billetterie the search field and the event panel both use 7.11104px.

The click wheel and its center button are full circles (the 3.35544e+07px radius). The logo is a sharp black rectangle with no radius. The "WORLD" and "EVENTS" tags are small rounded rectangles in the captures, and the selected file label is a small rounded rectangle in blue.

The `--radius-xs` variable (.125rem) measured as 1.58749px, so 1rem on this page resolves to about 12.7px at the 1280px pass.

## Components

**Navigation strip.** 62px tall, 1280px wide on desktop (390px on mobile), 8.8888px padding (9.06969px on mobile), uppercase grotesk at 10.6666px/700. The link element measured 62px by 27px (the logo) and color #828282.

**Click wheel.** A circle with a rewind glyph at left, a fast-forward glyph at right, "MENU" at top and a round center button. On the home page and /billetterie it is dark (#212121 with a #343434 center); on /world it is light gray in the capture. "MENU" is a button 28px tall with no border radius that changes color on hover.

**Product item.** A photograph on white with no frame; the focused product is centered and larger than its neighbors, and its name is printed at top right.

**File item.** A thumbnail or folder icon with a lowercase filename below it; the selected item shows a #074edd label with white 9.77768px/700 text.

**Tags.** Small gray pills reading "WORLD" and "EVENTS" in the header or panel; a battery icon sits beside the "WORLD" tag.

**Search field.** 44px tall, 432px wide, 7.11104px radius, `1px solid #ffffff33` border, white 10.6666px/400 text, magnifier icon at left, placeholder "Rechercher par ville".

**Event row.** Uppercase title in light text at left, date at right ("3 juil. 2026"), and a sentence-case venue line beneath; the selected row has a lighter translucent fill.

## Design System Architecture

No public design system, token package or brand guideline was found: the home page opened (via WebFetch and curl) shows only logo, navigation links and images, with no link to guidelines or a press kit. The de-facto system is in the shipped code at https://damso.com/.

The site is built from files served under /_next/static/ (chunks and a turbopack runtime chunk). Its CSS exposes Tailwind-style theme variables: `--radius-xs: .125rem`, `--radius-lg: .5rem`, `--font-weight-light` (300), `--font-weight-normal` (400), `--font-weight-medium` (500), `--font-weight-bold` (700), `--tracking-tight` (-.025em), `--tracking-wide` (.025em), `--tracking-wider` (.05em), `--leading-tight` (1.25), `--leading-snug` (1.375), `--blur-2xl` (40px), `--default-transition-timing-function: cubic-bezier(.4,0,.2,1)` and the `--tw-*` ring, shadow and gradient variables. A custom animation variable is defined as `--animate-fade-in-scale: fade-in-scale .3s cubic-bezier(.16,1.08,.38,.98) forwards`. Fonts are referenced as `--font-grotesk` and the default mono stack is `ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace`.

Images, including the logo SVG, are served from a /cdn/ path with a content-hash filename (for example a 198x85 SVG logo). No component-library files or documentation were found in the opened pages; the recurring pieces are the click wheel, the file-browser view and the list screen.

## Do's and Don'ts

**Do**
- Keep all type tiny and uppercase for interface text: 10.6666px/700 for names, 9.77768px/700 for labels, 8.8888px/500 for captions.
- Put the click wheel at bottom center on every page and keep it a perfect circle with a circular center button.
- Switch the whole page between white (#ffffff) and black (#000000) by section: shop and world on white, tickets on black.
- Use #074edd only for the selected-item highlight in the file browser.
- Write file-like names in lowercase with underscores and extensions (beyah_merch.mp4, note_pour_la_nation.txt).
- Use French microcopy ("Rechercher par ville", "juil.").

**Don't**
- Don't add drop shadows; none were measured on any page.
- Don't introduce headings or body paragraphs larger than 10.6666px; no larger size was measured.
- Don't round the logo or product photos; the logo is a sharp rectangle and the product images carry no frame.
- Don't use brand colors from the shipped CSS (#eb5757, #ff0000) in the interface; no measured element showed them.

## Responsive Behavior

The extractor re-loaded the home page at 390px and recorded the h1 and nav roles; /world and /billetterie also have a mobile layout record and mobile captures.

Measured at 390px: the home-page product name is 10.8836px/16.3254px weight 700 (158px wide, against 155px on desktop), and the header is 390px wide and 62px tall with 9.06969px padding. Home-page mobile sizes by character count are 10.8836px (24), 9.06969px (17) and 9.97666px (4). On /world the mobile h2 is 9.97666px/14.965px weight 700 (167px wide). On /billetterie the mobile sizes are 10.8836px (375 characters), 9.06969px (23) and 9.97666px (4). The mobile layout record for /world and /billetterie reports `headerLinksVisible: 1`, `menuToggleVisible: false` and `maxCardColumns: 4`.

In the mobile captures: /world shows the three items as a vertical list with a thumbnail or folder icon at left, the filename beside it and a thin separator line between rows, with the click wheel at bottom center; /billetterie shows the event panel across the full screen width with the search field, the event rows and the click wheel below. The home-page mobile capture was not taken; the coverflow at mobile width is not measured. Breakpoints and media queries are not measured.

## Iteration Guide

1. Start with the neutral tokens: #ffffff canvas, #000000 ink, #ffffff on black pages, #d0d0d0 for the wheel label, and #074edd for selection.
2. Build the 62px header and the bottom-centered click wheel first; these are constant across pages.
3. Compose each page as one focused object: a product coverflow, a file browser or an event list screen.
4. Set all text from the three measured sizes (10.6666px, 9.77768px, 8.8888px) and the three weights (700, 500, 400).
5. Measure any new page with `node web/scripts/extract-tokens.mjs --slug=damso--<page> --url=https://damso.com/<page> --force --no-motion` before adding tokens; the shop and world views differ in background from the tickets view.
6. Run `node web/scripts/verify-designs.mjs --slug=damso` after any token edit.
