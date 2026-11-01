---
version: alpha
name: Boc.Studio
category: "Agencies & Studios"
description: "Barcelona creative brand studio site: #181d21 near-black canvas with #f3f3f3 text and #adadad secondary lines, a #ff4421 orange marquee strip with black ppMori type, 28.259px display and 13px uppercase labels, a 3-column work index with 15px captions, square image corners, glass-sphere hero art and an enter-to-start intro."
colors:
  canvas: "#181d21"
  ink: "#f3f3f3"
  ink-muted: "#adadad"
  ink-faint: "#545151"
  primary: "#ff4421"
  on-primary: "#000000"
  nav-bg: "#ff4421f7"
  hairline: "#ffffff59"
  gray: "#afabab"
  black: "#111314"
  btn-grey: "#2a3137"
  btn-grey-hover: "#21272c"
  muted-on-orange: "#b53219"
  info-shade: "#b62f17"
  info-label: "#85210f"
typography:
  display:
    fontFamily: ppMori, "ppMori Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 28.259px
    fontWeight: 400
    lineHeight: 28.259px
    letterSpacing: "-0.56518px"
  display-mobile:
    fontFamily: ppMori, "ppMori Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 23.95px
    fontWeight: 400
    lineHeight: 23.95px
    letterSpacing: "-0.479px"
  filter:
    fontFamily: ppMori, "ppMori Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 28.259px
    fontWeight: 400
    lineHeight: 33.9108px
    letterSpacing: "-0.621698px"
  caption:
    fontFamily: ppMori, "ppMori Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: "-0.3px"
  link:
    fontFamily: ppMori, "ppMori Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 13px
    letterSpacing: 0.52px
    textTransform: uppercase
  strip-title:
    fontFamily: ppMori, "ppMori Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 13px
    fontWeight: 600
    lineHeight: 16px
  strip-text:
    fontFamily: ppMori, "ppMori Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16px
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 15px
  s3: 20px
  s4: 30px
  s5: 43.2px
  s6: 60px
components:
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.strip-text}"
    height: 59px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  project-title:
    textColor: "{colors.ink}"
    typography: "{typography.caption}"
  project-meta:
    textColor: "{colors.ink-muted}"
    typography: "{typography.caption}"
  filter-button:
    textColor: "{colors.ink-faint}"
    typography: "{typography.filter}"
    rounded: "{rounded.none}"
---

## Overview

Boc.Studio is a Barcelona creative brand studio (the page's own description: "We create, refresh and boost brands through identity, creative direction, motion design and AI production"). Its home page (`https://boc.studio/`, also published in Catalan at `/ca` and Spanish at `/es`) opens as an intro: a full-viewport hero with soft 3D glass spheres on a dusty pink ground, a loop-scrolling orange strip across its middle reading "Boc.Studio® / Creative brand studio, Create, refresh and boost / 41.4120° N, 2.1580° E, Barcelona", and a small outlined "Click to enter" pill near the bottom. While the intro is shown, the page body measures `overflow: hidden`.

Beneath the hero the page is a dark index of work: a "Work" heading (28.259px), the filter "All / Art direction / Brand identity / Campaign / Motion / Strategy / Creative direction / Artificial intelligence / Generative systems", and rows of projects in three columns — a thumbnail with the project name below at the left, a one-line tagline in the middle, and "View project" at the right — for CE Europa, Marmota, Chocovic, Alien (Audi), Sport, Yaba, The Seam, The Champions Burger and Incite. Thumbnails are full-color campaign stills, so the interface stays neutral and lets client work provide the color.

The voice is concise and a little playful ("Technology from another planet", "Daily heritage, rewritten", "Mediterranean balance", "Crowned at Mestalla"). The first full-page capture also showed a small consent-style notice pill at the bottom right; after one re-measure with the extractor it no longer appears in the capture, and no cookie or notice control is documented here as brand UI.

## Colors

The site declares its palette as Tailwind v4 theme variables on `:root`: `--color-boc-canvas: #181d21`, `--color-boc-offblack: #181d21`, `--color-boc-rule: #181d21`, `--color-boc-text-on-canvas: #f3f3f3`, `--color-boc-muted: #adadad`, `--color-boc-muted-2: #545151`, `--color-boc-orange: #ff4421` and `--color-boc-text-on-orange: #000`.

- **Canvas `#181d21`** is the page ground (20,429 weighted area, almost all of it). **Ink `#f3f3f3`** is the title text on it (project names and the "Work" heading). **Ink muted `#adadad`** (316 weighted characters) colors taglines and "View project"; **ink faint `#545151`** (117) colors the filter words and the "All" counter label.
- **Primary `#ff4421`** (orange) is the marquee strip: the header measures `#ff4421f7` (97% alpha, token `nav-bg`), and a visually hidden 1px "Watch our showreel" button inside it carries the opaque `#ff4421`. Text on orange is `#000000` (641 weighted characters, the most-read text color).
- **Hairline `#ffffff59`** is a white outline at about a third opacity, measured once as a border color in the intro state.
- **Declared but not measured at rest:** `--color-boc-gray: #afabab`, `--color-boc-black: #111314`, `--color-boc-btn-grey: #2a3137` (hover `#21272c`), `--color-boc-muted-on-orange: #b53219`, `--color-boc-info-shade: #b62f17`, `--color-boc-info-label: #85210f` and `--color-boc-online: #b53219`. They are kept as tokens because they belong to the brand's variable set.

The palette is therefore a dark navy-black, two greys, off-white and a single saturated orange. The hero art adds pinks and lilac in the glass spheres, which are imagery.

## Typography

One family, `ppMori`, self-hosted as `PPMori_Regular` (weight 400) and `PPMori_SemiBold` (weight 600) WOFF2 files declared in `https://boc.studio/_next/static/chunks/06jrfjg30lnwl.css`, with a metric-matched fallback `ppMori Fallback` (`src: local(Arial)` with `size-adjust: 105.82%`) and then the system sans stack. It covers all 1,167 weighted characters; 400 is used on 999 and 600 on 168.

| Token | Size / line | Weight | Tracking | Used for |
|---|---|---|---|---|
| display | 28.259px / 28.259px | 400 | -0.56518px | the "Work" heading; `display-mobile` is 23.95px at 390px |
| filter | 28.259px / 33.9108px | 400 | -0.621698px | the large filter words in `#545151` |
| caption | 15px / 18px | 400 | -0.3px | project names (`#f3f3f3`), taglines and "View project" (`#adadad`) |
| link | 13px / 13px | 400 | 0.52px | uppercase navigation (WORK, All) |
| strip-title | 13px / 16px | 600 | normal | "Creative brand studio" in the strip |
| strip-text | 13px / 16px | 400 | normal | "Create, refresh and boost", coordinates |

By weighted characters the sizes are 13px (615), 15px (398), 28.26px (108), 16px (33) and 28.259px (13). Headings and captions use negative tracking (about -0.02em); only the small uppercase labels are positively tracked (0.52px). Letter case: titles are sentence or title case, navigation labels are uppercase by CSS.

Font substitutes: the ppMori files are the site's own; the declared fallback is Arial at 105.82% size adjustment, which is the only documented substitute.

## Layout

The page measures 2265px tall at 1280px. The root declares `--boc-page-px: 15px` (page side padding; 15px is also the most frequent measured gap) and the Tailwind base unit `--spacing: .25rem`. The header is `position: sticky`, 59px high and 1280px wide, and in the capture it carries `transform: matrix(1, 0, 0, 1, 0, 370.32)`, which places the strip across the hero.

The work index is a grid: the row container measured three columns of 311.25px (`grid-template-columns: 311.25px 311.25px 311.25px`), 934px wide, starting 331px from the left edge, so the first 330px of each row is left empty and the list sits right of center. Measured gaps are 15px (60 uses) and 43.2px (32). The first thumbnail measures 335px by 189px. Paddings are 2px (8 uses), 15px (4) and 60px (1). Sections are plain dark bands with no cards or borders.

Breakpoints declared in the CSS are the Tailwind steps `40rem`, `48rem`, `64rem`, `80rem`, `96rem` and the pixel queries `min-width: 1024px` (9 occurrences), `768px`, `1550px`, `640px`, `1280px` and `1536px`.

## Elevation & Depth

The interface is flat: no box-shadow was measured on any visible element at rest, and borders are absent from the list and header. Depth is carried by imagery (3D glass spheres in the hero, lit campaign stills) and by the strip, which sits above the sphere art as a flat orange band.

The stylesheet declares one glass-button shadow, `inset 0 .5px 1px #ffffff4d, inset 0 -.5px 1px #0000001a, 0 2px 6px #0003`, which was measured once on an element in the intro state, together with the `#ffffff59` border; which element carries it was not determined, and the "Click to enter" pill has no DOM text to probe, so no numeric spec is recorded for it. The Tailwind ring and shadow variables on `:root` are all zero.

## Shapes

Shapes are rectangular. The theme sets `--boc-image-radius: 0px`, all measured roles have a 0px radius, and thumbnails are sharp-cornered rectangles. The only rounded form on the page is the intro pill ("Click to enter"), which is fully rounded in the capture; its radius was not recorded. The consent-style notice and its round controls (measured with radii of 40px, 60px and a full-pill value) are excluded.

Lines are not used: there are no borders on rows, and the filter is plain large type. The orange strip is a straight band across the full width.

## Components

**Marquee strip (`nav`).** A sticky 59px header in `#ff4421f7` with black text: the "Boc.Studio®" wordmark followed by repeating blocks "Creative brand studio" (13px / 600), "Create, refresh and boost" (13px / 400) and coordinates and place in 13px / 400. The track animates with `boc-marquee` (`30s linear infinite`); the stylesheet disables it under `prefers-reduced-motion: reduce`. The header also contains a visually hidden "Watch our showreel" button (1px by 1px, uppercase 16px, `#ff4421` fill).

**Navigation links (`nav-link`, `link`).** Uppercase 13px labels with 0.52px tracking in `#f3f3f3` (WORK), with the inactive state in `#adadad` or `#545151`.

**Work heading and filter.** The "Work" h1 in 28.259px `#f3f3f3` with an "All" counter in 13px uppercase, then the filter words in 28.259px `#545151` (`filter-button`) with negative tracking.

**Project row (`project-title`, `project-meta`).** A thumbnail, then 15px / 18px captions: the project name in `#f3f3f3`, the tagline in `#adadad`, and "View project" in `#adadad`; the row uses a hover treatment declared as `.boc-row-hover:hover .marquee-strip { --marquee-h-scale: 1.2 }` with `height .4s` and `width .4s` transitions on `cubic-bezier(1, 0, .47, 1.25)`.

**Intro gate.** A "Click to enter" pill under the hero; once entered the page scrolls. It is documented qualitatively.

## Design System Architecture

Boc.Studio publishes no public design system or brand guidelines; the page links only to its own work pages, `/work`, and the `/ca` and `/es` language versions. The site is a Next.js app (`/_next/static/chunks/...`, Turbopack) styled with Tailwind v4: `:root` carries Tailwind theme variables (`--spacing`, `--text-xs` to `--text-7xl`, `--font-weight-semibold`, `--ease-in`, `--ease-out`, `--tw-*`) alongside a brand set prefixed `--color-boc-*`, `--boc-*` and `--ease-boc-*` (`brisk: cubic-bezier(.4, 0, .2, 1)`, `reveal: cubic-bezier(.25, .1, .25, 1)`, `grow: cubic-bezier(1, 0, .47, 1.25)`).

The single page stylesheet is `https://boc.studio/_next/static/chunks/06jrfjg30lnwl.css` (about 49 KB), which declares the ppMori `@font-face` rules and component classes such as `boc-row-hover`, `boc-grow-row` (`--boc-cap-h: 18px`), `marquee-strip`, `boc-list-marquee` and keyframes `boc-marquee`, `bocMarqueeIn`, `bocBarFadeIn`, `boc-bump-left` and `boc-arrow-shot-desktop`. The front matter records measured computed styles and the declared `--color-boc-*` variables.

## Do's and Don'ts

Do
- Keep the interface near-black (`#181d21`) with `#f3f3f3` and `#adadad` text and let client imagery supply the color.
- Use a single saturated orange `#ff4421` only for the marquee strip, with black text.
- Set titles in ppMori at 28.259px with about -0.02em tracking and captions at 15px / 18px.
- Use 13px uppercase labels with 0.52px tracking for navigation.
- Keep image corners square and rows borderless.

Don't
- Do not add rounded cards, shadows or colored buttons; none was measured at rest.
- Do not document or copy the consent-style notice or its round buttons.
- Do not set captions in uppercase; only navigation labels are.
- Do not scroll the work index before the intro is entered; the body is `overflow: hidden` in that state.
- Do not use the hover marquee scale on mobile layouts; it is declared inside `@media (hover: hover)`.

## Responsive Behavior

The stylesheet declares `@media (min-width: 40rem)`, `48rem`, `64rem`, `80rem`, `96rem`, `(min-width: 1024px)`, `(min-width: 1550px)`, `(hover: hover)`, `(hover: hover) and (min-width: 1550px)` and the motion queries `prefers-reduced-motion: no-preference` and `reduce`.

The 390px mobile pass measured: the "Work" heading at 23.95px / 23.95px (350px wide); the header strip at 390px wide and 52px high in `#ff4421f7` with 13px / 600 / 16px type; and the size distribution 13px (615 weighted characters), 13.624px (190), 23.95px (121) and 16px (33). The three-column index at that width is not measured, and no mobile capture image exists.

## Iteration Guide

1. Set the page to `#181d21` with `#f3f3f3` titles, `#adadad` secondary lines and `#545151` for inactive filters; use ppMori at 400 and 600.
2. Add the orange strip: `#ff4421f7`, 59px high, sticky, with black 13px text in a looping marquee (`30s linear infinite`).
3. Build the work index as three 311.25px columns (name and thumbnail, tagline, "View project") with 15px / 18px captions, 15px column gaps and 43.2px row gaps.
4. Use a 28.259px heading and filter words with -0.02em tracking, uppercase 13px labels for navigation, and square-cornered media.
5. Add the glass-sphere hero and an "enter" pill last, and gate scrolling behind it.
6. Check new values against `web/data/extracted/boc-studio.json` and the declared `--color-boc-*` variables before adding tokens.
