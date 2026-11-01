---
version: alpha
name: AIM — AI Modernism of Kharkiv
category: "Fashion & Apparel"
description: "AIM — AI Modernism of Kharkiv (Obys Agency project): warm paper #e7e4df, ink #141414, Khtekatrial 72.832px display and 12.16px labels, hairline rules, no radius, no shadow, opacity-only hovers."
colors:
  canvas: "#e7e4df"
  page-largest: "#111111"
  ink: "#141414"
  primary: "#141414"
typography:
  display:
    fontFamily: Khtekatrial, sans-serif
    fontSize: 72.832px
    fontWeight: 500
    lineHeight: 66.6146px
    letterSpacing: "-2.18496px"
  display-mobile:
    fontFamily: Khtekatrial, sans-serif
    fontSize: 37.44px
    fontWeight: 500
    lineHeight: 34.2439px
    letterSpacing: "-1.1232px"
  subheading:
    fontFamily: Khtekatrial, sans-serif
    fontSize: 12.16px
    fontWeight: 400
    lineHeight: 11.2914px
rounded:
  none: 0px
spacing:
  s1: 2.69px
  s2: 12.42px
  s3: 38.4px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    padding: 0px 0px 0px 2.688px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 12.416px 12.416px 0px
    transform: matrix(1, 0, 0, 1, 0, -39.4109)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    padding: 0px 0px 0px 2.688px
---

# AIM — AI Modernism of Kharkiv

## Overview
"AIM— AI Modernism Of Kharkiv [Ukraine]" is an editorial web project published by Obys Agency (the footer line of the capture reads "Obys Agency ©2025" and the host is aim.obys.agency). The measured frame is a 1280 by 800 viewport: a warm off-white page (`{colors.canvas}` #e7e4df) filled at the top by a gigantic black wordmark of the letters A, I and M cut into heavy geometric blocks that run edge to edge, with a black bar beneath it. Under the bar is a one-line meta row ("AI Modernism of Kharkiv [Ukraine]", "Index / Experiment / About", "[Gallery]", "Obys Agency ©2025") separated by thin black rules, and below that a two-column area: on the left a list of "Modernists" (E01 Anatol Petrytskiy, E02 Vasyl Ermilov, E03 Oleksandr Khvostenko-Khvostov, E04 Borys Kosarev, E05 Vadym Meller), on the right a 72px tight headline "AIM— AI Modernism Of Kharkiv" and a "Scroll to Explore" cue with a down arrow.

The look is Swiss-modernist and archival: a single sans family, black on warm paper, thin hairline rules, bracketed labels and index numbers. There is no color beyond the two neutrals, and no imagery in the first viewport other than the typographic mark. Attempts to open the live page with a fetch tool returned HTTP 403, so everything here comes from the extractor's measurements and capture only. The project, its copy and its credits beyond what the capture shows were not read.

## Colors
Three values measured by painted area: #111111 (1,024 weight, the black wordmark and bar), #e7e4df (608, the paper canvas) and #141414 (52, thin rules and small blocks). Text is a single color, `{colors.ink}` #141414 (325 characters, all of the text). The shipped root variables name them: `--page-color--black: #141414`, `--page-color--white: #e7e4df`, and `--grey: #7b7b7b`. `{colors.primary}` is #141414 (the generator assigned it to the link text, as the page has no button), and `{colors.page-largest}` #111111 is the largest painted block. #7b7b7b is published but no element measured in it.

## Typography
One family, **Khtekatrial** (weights 400 and 500), a custom-named face loaded by the page. Measurements:
- `display` 72.832px / 500 / 66.6146px, letter-spacing -2.18496px: the "AIM—" h2 (the extractor took it as the h1; the page uses h2 elements for the headline).
- `display-mobile` 37.44px / 500 / 34.2439px, letter-spacing -1.1232px: the same headline on the 390px pass.
- `subheading` 12.16px / 400 / 11.2914px: every small label, navigation link, the Modernists list and the footer line. The body element itself uses this size.
Line-heights are below the font size on both the display and the small text (66.6 for 72.8, 11.29 for 12.16), so the setting is tight and compact; display letter-spacing is negative (-3% of the size).

### Measured type distribution
Only two sizes appear in the whole measured frame: 12.16px (299 characters at weight 400) and 72.832px (26 characters at weight 500, the headline "AIM—" repeated across the display text elements). There is no middle size at all. The sole letter-spacing recorded is -2.18496px on the 72.832px text; the small text carries no recorded tracking. The result is an extreme two-step scale: roughly a six-to-one ratio between display and label, with nothing between them.

### Voice and content structure
Labels are plain and bracketed: "[Ukraine]", "[Gallery]", episode codes "E01" to "E05", and a "Scroll to Explore" cue. The page treats each modernist as an indexed entry, a convention borrowed from archives and exhibition catalogues. Names are written in full transliteration without titles. The headline restates the project name as a statement with an em dash ("AIM—"), which reads as a title card. Because the live page could not be read, no further sections, captions or credits are documented.

## Layout
A full-bleed grid with a 12.416px gutter (padding 12.416px 12.416px 0px on the nav) and a 38.4px larger step; spacing tokens are 2.69px, 12.42px and 38.4px. The wordmark spans the entire width minus the gutters. Below, a hairline vertical rule divides the lower part of the viewport into a narrow left column and a wide right column; the headline hangs at the bottom of the right column. The navigation transform measured `matrix(1, 0, 0, 1, 0, -39.4109)`, a vertical offset of -39.4109px at capture time; what triggers it was not measured. The scroll height measured is 800px, one viewport, so the rest of the project is not described.

## Elevation & Depth
None measured. No box-shadows (`boxShadows` empty), no gradients, no translucent layers. Separation comes from 1px rules (`--border-wrapper--1px: 1px`) and from the contrast between the two blacks and the paper.

The measured paddings back this up: 12.416px (8 elements) and 2.688px (8 elements) for small insets, and 38.4px once. There are no recorded flex or grid gaps and no border colors, so the rules visible in the capture are not recorded as CSS borders in the extraction; they are described here only as seen in the capture, without a measured color or width beyond the `--border-wrapper--1px` variable.

## Shapes
No radius anywhere (`borderRadii` empty; measured radius 0px on all hover targets). The only shapes are rectangles and the angular letterforms of the AIM wordmark.

## Components
- **link / nav-link**: #141414 text in `{typography.subheading}` with left padding 2.688px. On hover the measured change is opacity 1 to 0.4 on "Index", with no color or background change.
- **nav**: paper background `{colors.canvas}`, ink text, padding 12.416px 12.416px 0px.
- **meta row**: four items spread across the width with a hairline rule beneath.
- **Modernists list**: a label "Modernists:" followed by episode codes (E01 to E05) and names, in the small size.
There is no button in the first viewport; the single call to action is the "Scroll to Explore" text cue.

## Design System Architecture
No public design system or brand guideline was found; the page could not be fetched with the research tool (HTTP 403), so none was read. The de-facto system is the five root variables measured: `--page-color--black`, `--page-color--white`, `--grey`, `--border-wrapper--0px` and `--border-wrapper--1px`. Two neutrals, one grey and two border widths are the whole token set. Sources opened: none beyond the extractor capture of https://aim.obys.agency/.

## Do's and Don'ts
- Do restrict the palette to #e7e4df paper and #141414 / #111111 ink.
- Do set all text in one family; use size for hierarchy (72.832px against 12.16px).
- Do use hairline rules and bracketed labels for structure.
- Do keep line-heights under the font size at display sizes.
- Don't add radius, shadow or gradient.
- Don't introduce accent colors; #7b7b7b is the only published extra and is used only as a variable.

## Responsive Behavior
Measured at 390px: the display headline is 37.44px / 500 / 34.2439px with letter-spacing -1.1232px (about half the 72.832px desktop size). Anything else on mobile, including the wordmark scale, column count and navigation, was not measured.

## Iteration Guide
Start from the measured facts, not from a mood: two background neutrals (#e7e4df and #111111), one text color (#141414), one family in two weights (400 and 500), two sizes (12.16px and 72.832px), and a single recorded letter-spacing (-2.18496px on the display). When extending the system to new pages, pick the next size from this scale only after measuring the live page, because the frame measured here contains nothing between the two sizes.
1. Paper #e7e4df, ink #141414, large black block #111111.
2. One typeface, two sizes: 72.832px display and 12.16px labels.
3. Hairline 1px rules between meta items and columns.
4. Hover only changes opacity to 0.4.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=aim-ai-modernism-of-kharkiv --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=aim-ai-modernism-of-kharkiv`.
