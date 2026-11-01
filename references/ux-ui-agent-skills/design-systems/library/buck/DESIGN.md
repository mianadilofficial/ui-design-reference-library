---
version: alpha
name: BUCK
category: "Agencies & Studios"
description: "BUCK's portfolio site is pure black #000000 on white #ffffff with one typeface, Mabry Light Pro (Mabry) at weight 100 — a 27.4432px intro paragraph, 19.0578px project titles and captions — a staggered two-column image grid, a sage-grey #abb2aa footer with a 46.5201px city clock, no shadows and a single 9999px pill radius."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  surface-footer: "#abb2aa"
  media-placeholder: "#00000013"
  media-placeholder-strong: "#0000001a"
typography:
  display:
    fontFamily: Mabry, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 27.4432px
    fontWeight: 100
    lineHeight: 38.4205px
  display-mobile:
    fontFamily: Mabry, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 100
    lineHeight: 33.6px
  body:
    fontFamily: Mabry, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 19.0578px
    fontWeight: 100
    lineHeight: 26.6809px
  body-mobile:
    fontFamily: Mabry, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 100
    lineHeight: 28px
  footer-clock:
    fontFamily: Mabry, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 46.5201px
    fontWeight: 400
    lineHeight: 46.5201px
  caps-large:
    fontFamily: Mabry, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 44.8px
    fontWeight: 100
    lineHeight: 20.9636px
    textTransform: uppercase
rounded:
  pill: 9999px
spacing:
  s1: 19.06px
  s2: 38.12px
  s3: 47.64px
  s4: 114.35px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  project-card:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    backgroundColor: "{colors.media-placeholder}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    typography: "{typography.footer-clock}"
---

# BUCK

## Overview

BUCK (buck.co, page title "BUCK") is, in the words of its own home page, "a global creative company that brings brands, stories, and experiences to life through art, design, and technology." Its About page calls it a "talent-driven, global, creative company" that "Since 2004" has been "building a home for the world's most talented dreamers, makers, and doers", lists studios in Los Angeles, Brooklyn, Surry Hills (Sydney), Amsterdam and London, and says BUCK is a certified B Corp.

The home page is a portfolio and nothing else. The capture shows a large black "B" monogram at top left (an animated Lottie SVG in the DOM), the one-sentence intro beside it in a thin sans at 27.4432px, and at the top right "Work", "About", a search icon and a menu icon. Below that the page is a long staggered grid of project tiles: each row pairs one wide and one narrow image, alternating sides, with a small "Work" label and the project title and a one-line description beneath each image ("J.P. Morgan Payments Creative Expression — A unique brand expression for a legendary institution.", "Kia AI Assistant — An identity for Kia's next-generation AI assistant.", "Dunkin'® MUNCHKINS® Holiday Campaign — All wrapped up and tied with a bow, just in time to let it snow."). A tile near the end promotes the studio's newsletter: "Check out our newsletter, Pencils Down, on Substack".

All of the colour on the page comes from the work: saturated campaign photography, 3D renders, illustration and motion stills. The interface itself is black thin type on white.

## Colors

- **Canvas `#ffffff`** — the page background.
- **Ink `#000000`** — the only measured text colour (1,794 of 1,794 characters).
- **Primary `#000000`** — there is no button or accent; links and nav items are black text, and on hover the measured nav links ("Work", "About") drop to opacity 0.5 rather than changing colour. The action colour is therefore the ink.
- **Surface-footer `#abb2aa`** — a sage grey, the largest measured background area (1,246 area units). It is the footer's background, which holds the studio clocks and addresses ("LA→ 10:27 PM", "120 S San Pedro St, 4th Floor, Los Angeles, CA"). The footer is below the area shown in the capture.
- **Media-placeholder `#00000013`** and **media-placeholder-strong `#0000001a`** — black at roughly 7% and 10% alpha, the second- and third-largest background areas, painted behind the project media.

Description lines under project titles render lighter than the titles in the capture; the extractor recorded no second text colour, so that difference is not a separate token. The Chakra UI colour scales present in the CSS variables (`--chakra-colors-*`, for example `--chakra-colors-gray-300` #CBD5E0) are framework defaults and are not used as brand colours on this page.

## Typography

One family: **Mabry**, loaded from `/fonts/mabry-light-pro.woff` (the file name identifies the Light Pro cut) and declared in the CSS as `--chakra-fonts-heading` with the fallback stack `system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif`. Every measured character is Mabry, and 1,740 of 1,794 characters compute at weight 100.

Measured roles:

- **Display** — the intro paragraph, the largest visible text in the capture: 27.4432px, weight 100, line-height 38.4205px (1.4).
- **Body** — project titles (h2), descriptions, labels and nav: 19.0578px, weight 100, line-height 26.6809px. This is the most-read size (1,584 characters).
- **Footer-clock** — the footer city and time lines ("LA→ 10:27 PM"): 46.5201px, weight 400, line-height 46.5201px (1.0).
- **Caps-large** — the extractor's largest hero-text candidate, "WORK" at 44.8px/100, uppercase, line-height 20.9636px. It is not visible in the capture, so it is recorded as a measured style rather than the page's headline (see `_roleOverrides` in SOURCES.json).
- **Mobile** — the intro becomes 24px/100/33.6px and project titles 20px/100/28px.

The sizes are fractional computed values (19.0578px, 27.4432px, 46.5201px); the measured spacing values (19.06, 38.12, 47.64, 114.35px) are multiples of the 19.0578px body size, so type and space share one unit. There is no letter-spacing and no bold.

## Layout

Content runs from x = 38 to 1242 at 1280px, so the side margin is 38px — the same as the most common padding (38.1156px). The grid is two columns of unequal width that alternate: a wide tile left and narrow tile right, then the reverse, with tiles top-aligned in some rows and bottom-aligned in others. Each tile's caption block sits beneath its image in two columns: "Work" on the left, title and description on the right.

Measured gaps are 19.0578px (most frequent), 38.1156px, 47.6445px and 114.347px — the large value separating rows. `maxCardColumns` is 2. The header is a single row: monogram, intro paragraph, and the right-aligned links. The capture shows no section headings in the grid; projects follow one another without interruption.

## Elevation & Depth

None. No box-shadow is measured (`boxShadows` is empty) and no border colour is recorded. The page is flat white; media tiles sit directly on it with translucent black placeholder fills (#00000013, #0000001a) behind them while loading. The only depth is in the work itself. The CSS ships Chakra UI shadow tokens such as `--chakra-shadows-xl` and `--chakra-shadows-outline`, but no rendered element uses them on the home page.

## Shapes

Shapes are square. The only measured radius is `9999px` on a single element (the `pill` token, matching `--chakra-radii-full`). Project images, the newsletter tile and the footer have hard corners. The identity's main shape is the "B" monogram, an outlined letterform drawn as an animated SVG (Lottie) at 80×80px in the header.

## Components

- **Header** — monogram, intro paragraph (display style), and at right "Work", "About", a search icon and a menu icon. Hovering "Work" or "About" changes opacity from 1 to 0.5.
- **Project tile** — image or video on a #00000013 placeholder, then a caption row: "Work" label at left; title and one-sentence description at right, all Mabry 100 at 19.0578px. Titles are the h2 element.
- **Newsletter tile** — a black "Pencils Down" card with the line "Check out our newsletter, Pencils Down, on Substack".
- **Footer** — #abb2aa background, city-and-time clocks at 46.5201px/400 ("LA→ 10:27 PM") and the office address in Mabry.
- **Focus** — focused links keep a 3px outline style of `none` with a 1px offset in the measurement; no visible focus colour was recorded.

## Design System Architecture

No public BUCK design system, brand-guideline page or press kit was found on the pages opened (https://buck.co/about links to the Pencils Down newsletter at pencilsdown.buck.co, Careers, Contact and the privacy policy, nothing more). The site's shipped CSS shows it is built on Chakra UI: the root carries the full Chakra token set (`--chakra-colors-*`, `--chakra-space-*`, `--chakra-sizes-*`, `--chakra-fontSizes-*`, `--chakra-radii-full` 9999px, `--chakra-shadows-*`, `--chakra-transition-easing-ease-out` cubic-bezier(0, 0, 0.2, 1)), with the theme's heading font replaced by Mabry. The brand layer on top of Chakra is minimal: one font, black on white, a sage footer and sizes and spacing built on a 19.0578px unit.

The stylesheet's breakpoints are Chakra-style `min-width` em queries: `screen and (min-width: 40em)` (640px, 25 rules), `52em` (832px, 18), `68em` (1088px, 15) and `80em` (1280px, 1).

## Do's and Don'ts

**Do**
- Use one thin typeface (Mabry Light, weight 100) for everything, in black on white.
- Let the work provide all colour; keep chrome monochrome.
- Use an alternating wide/narrow two-column grid with generous row spacing (114.347px).
- Put a small "Work" label beside each title and a one-sentence description beneath it.
- Use opacity (0.5) for hover feedback instead of colour.
- Derive spacing from the body size (19.06 / 38.12px).

**Don't**
- Don't add buttons, accent colours or shadows.
- Don't set bold headings; weight 400 appears only in the footer clocks.
- Don't round image corners.
- Don't expose Chakra UI default colours as brand colours.
- Don't add section headers between projects; the grid is continuous.

## Responsive Behavior

Measured at 390px wide:

- The intro paragraph becomes 24px/100/33.6px (desktop 27.4432px).
- Project titles become 20px/100/28px (desktop 19.0578px).
- Only two sizes are measured on mobile: 20px and 24px.
- Content spans x = 20 to 370 (20px margins).
- The grid shows 1 column (`maxCardColumns` 1, desktop 2).
- A menu toggle is visible and no header links are counted as visible.

The breakpoints declared in CSS are 40em, 52em, 68em and 80em `min-width` queries. Layout between 390px and 1280px was not measured.

## Iteration Guide

1. White page, black text, one font: Mabry Light Pro at weight 100 with the shipped system fallback stack.
2. Header: monogram left, a single 27.4432px intro sentence, small links and icons right.
3. Build the work grid in two unequal, alternating columns with 38px page margins and 114px between rows.
4. Caption each tile: "Work" label, title, one-line description, all 19.0578px.
5. Use 0.5 opacity on hover; no colour change.
6. Finish with a #abb2aa footer showing city clocks at 46.5201px/400.
7. On mobile use one column, 24px intro, 20px titles and 20px margins.
