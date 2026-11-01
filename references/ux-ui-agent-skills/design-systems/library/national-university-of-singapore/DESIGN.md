---
version: alpha
name: National University of Singapore
category: "Education"
description: "NUS homepage nus.edu.sg: white canvas with Roboto at weights 200 to 400, NUS orange #ef7c00 for hover and accents, navy #003062 footer, blue panel #376ba5, 40px light headings, 14px body, radii 5px and 6px, soft 0 0 10px 16% card shadow."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#ef7c00"
  surface-navy: "#003062"
  surface-blue: "#376ba5"
  surface-light: "#f8f8f8"
  ink-2: "#555555"
  ink-4: "#616161"
  ink-5: "#999999"
  footer-border: "#003d7c"
  accent-orange: "#f27c36"
typography:
  display:
    fontFamily: Roboto, Arial, sans-serif
    fontSize: 40px
    fontWeight: 200
    lineHeight: 44px
  subheading:
    fontFamily: Roboto, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 22px
  body:
    fontFamily: Roboto, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: Roboto, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 5px
  sm: 6px
spacing:
  s1: 6px
  s2: 10px
  s3: 12px
  s4: 15px
  s5: 18px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 37px
  s10: 38px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 6px 18px
    height: 38px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink-2}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-5}"
    padding: 20px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.canvas}"
    borderColor: "{colors.footer-border}"
---

## Overview

nus.edu.sg is the homepage of the National University of Singapore. The measured page is 1280px wide and 4,794px tall with 263 visible elements. The footer text names "National University of Singapore, 21 Lower Kent Ridge Road". The page title is "NUS - National University of Singapore".

On the capture the page reads as a calm, white, image-led university portal. A utility strip at the top right lists Email, Canvas, Library, Student, Staff and Alumni in grey; the NUS shield-and-wordmark logo sits at the left. A second, light-grey strip holds the main navigation (Home, Admissions, Education, Research, Sustainability, News, Giving, About) with the active item "Home" in blue and underlined in orange, and a search icon at the right. Below, a full-bleed hero shows a climber on an indoor wall beside a rankings message ("NUS World 15th, Asia 3rd, THE World University Rankings 2027"), set in navy and orange display type.

The next band, "NUS Highlights", centres a 40px light heading with a two-line intro, then two toggle buttons labelled Featured (filled orange with white text) and News (outlined, orange text). Beneath is a 2 by 2 grid of story tiles: a wide photograph on top, a title, a short summary led by an orange chevron, and a small italic orange category tag at the lower right (Education, Research, Impact). A "President's Welcome" band follows with a blue panel (`#376ba5`) set against a portrait. A square blue back-to-top button is visible on the right; it is a page control and not documented as brand UI.

Voice is institutional but warm: "Learn how our transformative education and multidisciplinary research have nurtured effective global leaders". Photography is documentary and varied: field trips, laboratory macro shots, group portraits and executives.

## Colors

Measured text colors by character count: `#333333` (775), `#555555` (708), `#ffffff` (690), `#616161` (247), `#999999` (236), `#ef7c00` (32), `#003d7c` (4), `#f27c36` (4). Background colors by area: `#ffffff` (5,764), `#003062` (687), `#376ba5` (138), `#f8f8f8` (64), `#f27c36` (7).

- **Canvas `#ffffff`** with `#f8f8f8` for the light navigation strip.
- **Ink `#333333`** for headings, **`#555555`** for links and summaries, **`#616161`** and **`#999999`** for secondary text; `#999999` is the nav link color at rest.
- **NUS orange `#ef7c00`** is the hover color for the utility links (Email, Canvas, Library, Student, Staff, Alumni all change from `rgb(153, 153, 153)` to `rgb(239, 124, 0)`). It is the generated `primary`.
- **Accent orange `#f27c36`** is the fill and border of the Featured toggle (measured as a background area and as a border color on 2 elements) and the color of the News label.
- **Navy `#003062`** is the footer background with white text and a 1px `#003d7c` border.
- **Blue `#376ba5`** is the large panel in the President's Welcome band.

Main navigation links turn from `#999999` to black on hover (measured). The page also defines Bootstrap 5 custom properties on `:root` (for example `--bs-yellow: #ffc107`, `--bs-info: #0dcaf0`, `--bs-success: #198754`); these are framework defaults and are not used as brand tokens.

## Typography

Roboto is the single family (2,696 characters). Loaded faces are Roboto 300 and 400, with FontAwesome for icons. Weights by character count: 400 (1,777), 200 (775) and 300 (144). Sizes: 14px (1,317), 18px (749), 20px (407), 12px (91), 40px (58), 16px (42) and 12.25px (32).

| Role | Size | Weight | Line height | Color |
| --- | --- | --- | --- | --- |
| display (h2 "NUS Highlights") | 40px | 200 | 44px | `#333333` |
| subheading | 20px | 400 | 22px | not isolated |
| body (summaries, nav) | 14px | 400 | 20px | `#555555` |
| button label | 16px | 400 | 24px | `#ffffff` |

The featured headline is deliberately thin: weight 200 at 40px. Footer text is 18px at weight 400 with a 19.8px line height. Hierarchy comes from size and weight, never from a second family.

## Layout

The measured container for headings is 904px wide in the centred bands, and the tile grid fills roughly 860px in the capture; the hero is full-bleed. Paddings recorded: 12px (18 elements), 15px (15), 20px (11), 10px (9), 30px (7), 48px (5), 60px (5), 38px (4), 24px (4), then 6px, 18px, 37px, 40px and one 120px. The header block has `padding: 20px 0px`; summaries carry a 38px left indent to clear the orange chevron.

The page flows as utility strip, nav strip, full-bleed hero, centred intro with toggle buttons, a 2 by 2 tile grid sharing one outer shadow, then a welcome band and footer.

## Elevation & Depth

One shadow was measured: `rgba(0, 0, 0, 0.16) 0px 0px 10px 0px` (declared twice), applied to the tile grid. Everything else is flat. Borders measured: white (3), `#f27c36` (2) and `#003d7c` (2).

## Shapes

Radii are 5px (5 elements) and 6px (5 elements). The white-outline hero button uses 5px; the toggle buttons and small controls use the 5px / 6px steps. Tiles and images are square-cornered.

## Components

- **Utility links and nav links.** Roboto 14px, `#999999`; utility links go orange on hover and nav links go black.
- **Hero button.** "Learn more": white 16px text, 1px white border, 5px radius, `6px 18px` padding, 38px high, on the image.
- **Toggle buttons.** Featured is filled `#f27c36` with white text and an icon, News is outlined with orange text. Their exact radius, padding and pixel sizes were not isolated beyond the shared 5px / 6px radii.
- **Story tile.** Photograph, 20px title, 14px summary with a left orange chevron, italic orange tag at the lower right.
- **Welcome panel.** Blue `#376ba5` block with white text beside a portrait.
- **Footer.** Navy `#003062`, white text, 1px `#003d7c` border.

The measured tile summaries use a background image, `gt-arrow.png`, as the orange chevron rather than a text glyph; this is why the summary block carries 38px of left padding. The footer measures 18px type, so it reads larger than the 14px body copy above it. In the hero, the ranking figures are artwork supplied inside the banner image, so their sizes and colors are not part of the measured text tokens. The Featured and News pair sits as two side-by-side buttons above the tile grid; what they do on click was not measured.

## Design System Architecture

The page loads Bootstrap 5 (the extraction shows `--bs-*` custom properties including `--bs-border-color: #dee2e6`) with Roboto and FontAwesome. No public brand or design-system page was found linked from the homepage: the homepage HTML was fetched and searched for brand, identity, guideline and styleguide links, and none were present. Brand tokens therefore come from rendered values, not from published guidelines. Images and icons live under `/images/default-source/corporate/homepage/`, which indicates a CMS-managed site, but no further structure was measured.

## Do's and Don'ts

Do:
- Use Roboto at weight 200 for large centred headings and weight 400 for everything else.
- Use orange (`#ef7c00` for hover, `#f27c36` for fills) as the one warm accent against navy `#003062`.
- Keep tiles flat with a single soft 10px, 16% black shadow around the grid.
- Keep radii at 5px or 6px.

Don't:
- Don't use the Bootstrap defaults (`#ffc107`, `#0dcaf0`, `#198754`) as NUS colors.
- Don't document the blue back-to-top button as brand UI.
- Don't add a second typeface.

## Responsive Behavior

On the mobile pass the h2 stays 40px, weight 200, 44px high, now 360px wide. Body text stays 14px with a 20px line height; the summary block is 326px wide, 120px high, with 38px left padding. No hero button was recorded on mobile. Breakpoints and navigation collapse were not measured.

## Iteration Guide

1. Set white canvas, `#333333` headings, `#555555` body and a `#003062` footer.
2. Use `#ef7c00` as hover accent and `#f27c36` for filled toggles.
3. Build tiles from image, 20px title, 14px summary, orange chevron and tag.
4. Keep radii to 5px and 6px.
5. Measure any new page with `node web/scripts/extract-tokens.mjs --slug=national-university-of-singapore--<page> --url=<url> --force --no-motion` before adding tokens.
