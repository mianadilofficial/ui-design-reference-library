---
version: alpha
name: Gulf Development
category: "Thai Brands"
description: "Gulf Development Public Company Limited homepage (gulf.co.th/en/home): Poppins at 16px body and 57px light-weight hero headlines, deep navy #004370 with footer navy #003050, a leaf green #6ab96f for stat figures, #f5f7fa panels, pill-shaped 40px language chip and curved section edges over full-bleed photography."
colors:
  canvas: "#ffffff"
  ink: "#272c2d"
  primary: "#004370"
  surface-panel: "#f5f7fa"
  navy-deep: "#003050"
  on-dark-soft: "#ffffffb3"
  on-dark-muted: "#ffffff80"
  hairline: "#c4dced"
  green-stat: "#6ab96f"
  ink-muted: "#858e92"
typography:
  display:
    fontFamily: Poppins, sans-serif
    fontSize: 57px
    fontWeight: 400
    lineHeight: 68.4px
  display-mobile:
    fontFamily: Poppins, sans-serif
    fontSize: 36.2438px
    fontWeight: 400
    lineHeight: 43.4925px
  body:
    fontFamily: Poppins, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Poppins, sans-serif
    fontSize: 19px
    fontWeight: 400
    lineHeight: 28.5px
  button-secondary:
    fontFamily: Poppins, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
    textTransform: uppercase
rounded:
  sm: 40px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 64px
components:
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    height: 32px
    borderColor: "{colors.hairline}"
  button-secondary-hover:
    textColor: "{colors.primary}"
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.navy-deep}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 24px 0px 16px
    boxShadow: rgba(0, 0, 0, 0.02) 0px 3px 6px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.navy-deep}"
    textColor: "{colors.canvas}"
    padding: 64px 0px 24px
---

## Overview

Gulf Development (page title "Gulf Development"; footer "Gulf Development Public Company Limited", wordmark "GULF") presents itself on its English homepage as "Thailand's leading conglomerate". The measured page is long (9,643px at 1280px wide) and photographic: a full-bleed hero video-style photograph of a dam spillway with the centered white headline "Expanding our business beyond energy" and the sub-line "We are committed to building a strong foundation for a sustainable future"; a white curved edge that rises into the first content section; four navy-headed columns for the Energy, Port and Logistics, Digital and Telecommunication businesses, each with a white circular icon and large green figures ("24,625 MW", "292 Kilometers", "150 MW", "46 Million"); then further full-bleed photographic sections starting with "Energy Business".

The mood is confident and corporate: generous white space, lightweight large type, navy and green, and curved section dividers. A stock-price ticker in the header (the extractor captured text such as "60.50 THB") is live data, not design, and no value from it is used here. A cookie dialog sits over the hero in the capture ("Accept All", "Change Preferences"); it is not documented as brand UI.

## Colors

- **Canvas `#ffffff`** is the largest background area (weight 2,165); **panel `#f5f7fa`** is the second (1,472) and fills alternate sections.
- **Ink `#272c2d`** is the most-read text color (821 characters) and matches the stylesheet variable `--grey-900`.
- **Primary navy `#004370`** is the color of headings such as "Thailand's leading conglomerate", of header text and the language chip, and of column headers; it matches `--blue-500`.
- **Navy deep `#003050`** is the footer background (518 area weight) and the "Explore More" link color; it matches `--blue-700`.
- **Green `#6ab96f`** (66 characters) colors the highlighted word "leading" and the large statistics; the root variables hold a green scale (`--green-300: #9BD09F`, `--green-600: #60A865`, `--green-800: #3A663D`, `--green-900: #2D4E2F`).
- **On-dark tints** `#ffffffb3` and `#ffffff80` are 70% and 50% white text on navy; **hairline `#c4dced`** is the 1px border of the language chip; **muted ink `#858e92`** is a secondary gray text (60 characters).

Also declared at the root: a gray scale (`--grey-300: #D2DADE`, `--grey-400: #C9D3D7`, `--grey-500: #BCC8CD`, `--grey-600: #ABB6BB`), `--light-blue: #E8F5FF`, `--orange-500: #FF8058`, and a Bootstrap `--success: #28a745`. These were not isolated on the rendered page, so only the measured ones are tokens.

## Typography

A single family, **Poppins** (weights 400 and 500 loaded), carries all 2,335 measured characters; icons use Font Awesome 6 Pro and icomoon. The scale is 10.5, 14, 15, 16, 19, 23, 40, 48 and 57px, with 16px most common (1,045 characters) then 14px (667).

- **Display** 57px/400/68.4px, centered white hero headline; mobile 36.2438px/43.4925px.
- **Body** 16px/400/24px; the body element itself is 15px/500.
- **Nav** 19px/400/28.5px in `#272c2d` for the menu links.
- **Button** 15px/400/22.5px uppercase for the language chip.
- Section titles at 40px and 48px, the 23px mid-heading used in column headers, and the large green statistics are measured sizes; the exact mapping of each of 23, 40 and 48px to a component was not recorded.

Weights: 400 (1,727 characters) and 500. No letter-spacing was recorded.

### Font substitutes

Poppins is an open Google Fonts family; the declared fallback is `sans-serif`.

## Layout

The header is white, 1280px by about 103px, with 24px top and 16px bottom padding and the root variable `--header-height: 102.75px`. Body sections use a container; the intro paragraph measured 920px wide and the hero h2 672px wide. The business section is four equal columns (the first row of the capture), each with a navy header block, a circular white icon, and stacked statistic groups separated by hairlines. Alternate sections change background from white to `#f5f7fa` to full-bleed photography. Spacing values: 1, 6, 8, 12, 15, 16, 20, 24, 32 and 64px; the footer pads 64px 0px 24px. The root also declares `--breakpoint-md: 768px`, `--breakpoint-xxl: 1640px` and `--hybrid-column-space: 15px`.

## Elevation & Depth

Shadows are faint: the header carries `rgba(0, 0, 0, 0.02) 0px 3px 6px 0px`; the cookie dialog `rgba(0, 0, 0, 0.1) 0px 4px 20px 0px` (a consent control, not brand UI). The business columns in the capture have a soft edge glow whose value was not isolated. Depth otherwise comes from curved white section edges overlapping photography and from navy blocks against white.

## Shapes

The language chip measures radius 40px (64px by 32px); the stylesheet also exposes a pill value in the token set. Column headers and photographic sections have square corners with curved top edges produced by large arcs, whose values were not recorded. Circular white icon holders appear in the capture; their radius was not recorded.

## Components

- **Language chip.** Navy `#004370` uppercase 15px label, transparent fill, 1px solid `#c4dced`, radius 40px, 64x32px; on hover the border becomes `#004370` (measured).
- **Explore More link.** `#003050` text at 16px with a small navy circular chevron icon; on the dark sections the same link is white.
- **Header and nav.** White bar, navy text; nav links 19px `#272c2d`; hover color shifts on links were measured as a green border tone on "About GULF" (the border of the hovered link changed to a green value) while text stayed `#004370`.
- **Business column.** Navy header with white 23px-class title, white circular icon holder, statistic text in `#272c2d` with figures in `#6ab96f`.
- **Footer.** `#003050` background, white text, 64px top padding, 402px tall at desktop.
- **Not documented as brand UI:** the cookie dialog and its buttons, the stock ticker.

## Design System Architecture

No public design system or brand guideline was found; the homepage was opened and links to corporate content only, and no search was run. The de-facto system is a variable-based stylesheet: scales named `--blue-300` to `--blue-700`, `--green-300` to `--green-900`, `--grey-300` to `--grey-900`, plus `--light-blue`, `--orange-500`, `--header-height`, `--hybrid-column-space` and Swiper's `--swiper-navigation-size: 44px`. The brand layer is therefore a blue scale with `--blue-500: #004370` as primary, a green scale for highlights, Poppins, and curved section edges. Source: https://www.gulf.co.th/en/home as captured by the repository extractor.

## Do's and Don'ts

- Do use `#004370` for headings and `#003050` for the footer, with `#272c2d` body text on white or `#f5f7fa`.
- Do highlight single words and big statistics in `#6ab96f`.
- Do set Poppins at 400 for large display text; the hero headline is 57px at weight 400, not bold.
- Do separate sections with curved edges and full-bleed photography.
- Don't treat the cookie dialog or stock ticker as design components.
- Don't use pure black text; the measured ink is `#272c2d`.
- Don't use Bootstrap `#28a745` for success or highlights; the highlight color is `#6ab96f`.

## Responsive Behavior

Measured on a 390px mobile pass: the hero headline scales from 57px to 36.2438px (line-height 43.4925px) and its box measured 360px wide by 131px high; body text stays 16px/24px; the header measured 390px by 58px with 16px vertical padding and the same faint shadow; other mobile sizes recorded are 19.4562px, 31.8px and 27.85px (their desktop counterparts were not matched one to one). Menu-toggle behavior and column rearrangement were not measured.

## Iteration Guide

1. Use the frontmatter tokens as measured; extend only from new extractions.
2. White canvas, navy `#004370` headings, `#272c2d` text, green `#6ab96f` only for emphasis and numbers.
3. Hero: centered white 57px Poppins 400 over a photograph; sub-line at 16px-class size.
4. Use curved section edges and `#f5f7fa` alternate panels.
5. Run `node web/scripts/verify-designs.mjs --slug=gulf` until it passes.
