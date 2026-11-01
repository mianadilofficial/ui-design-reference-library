---
version: alpha
name: "Edoardo Lunardi"
category: "Portfolio"
description: "Portfolio of Edoardo Lunardi, a Creative Web Engineer, built as a desktop-OS interface: #232323 ground, white Inter 13.4776px text, Ubuntu Mono window titles, 2px radius windows with 1px #ffffff4c rings and a dithered wallpaper."
colors:
  canvas: "#232323"
  ink: "#ffffff"
  primary: "#ffffff"
  ink-2: "#ffffff80"
  hairline: "#ffffff4c"
typography:
  display:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 13.4776px
    fontWeight: 600
    lineHeight: 17.5208px
  display-mobile:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 12.0245px
    fontWeight: 600
    lineHeight: 15.6318px
  heading:
    fontFamily: "\"Ubuntu Mono\", \"Ubuntu Mono Fallback\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 13.4776px
    fontWeight: 400
    lineHeight: 17.5208px
  body:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 13.4776px
    fontWeight: 400
    lineHeight: 17.5208px
rounded:
  xs: 2px
  sm: 4px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 13.48px
  s4: 16px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 4px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    padding: 4px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 4px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, oklab(0.999994 0.0000455678 0.0000200868 / 0.3) 0px 0px 0px 1px, rgba(0, 0, 0, 0) 0px 0px
      0px 0px
---

# Edoardo Lunardi

## Overview

Edoardo Lunardi's site at https://www.edoardolunardi.dev/ is the portfolio of a self-described "Creative Web Engineer" and it is built as a desktop operating system rather than a scrolling page. The 1280px capture shows a thin menu bar across the top, a field of dithered black-and-white halftone dots as the wallpaper, a column of file-style launchers on the upper left (About, Featured Article, Showreel, Work Gallery, Featured Experiment, Build Notes), draggable windows with a title bar and a round close button floating over the wallpaper, and a dock-like panel at the bottom titled Work Gallery holding a strip of project thumbnails. The measured page height is 800px, equal to the viewport: there is no document scroll, and everything happens inside windows.

The visual identity is monochrome and terminal-flavoured. Every measured text colour is white or white at half opacity on a single dark ground, `#232323`. Colour comes only from the work thumbnails and a small white status dot beside the word AVAILABLE; the interface itself carries no accent hue. The voice is brief and professional: window titles are plain nouns, and the About window opens with a one-paragraph biography and offers "Learn more".

The design language works because it commits to one metaphor and one size of type. Reproduce it by keeping the ground flat, the type tiny and uniform, and letting windows with hairline borders carry hierarchy.

## Colors

The palette is four values and nothing else was measured on the live page.

- Canvas `#232323` (`--color-theme-bg`, `--theme-bg`, `--theme-dither` all resolve to this value). It is the dominant background by area.
- Ink and primary `#ffffff` (`--color-theme-fg`). Most-read text colour. The extractor found no filled call-to-action, so `primary` is the same white as `ink`; links and navigation items are white, distinguished by underline in running text rather than by hue.
- `ink-2` `#ffffff80`, white at 50% alpha, used for secondary text such as inactive navigation items and the dimmed excerpt in the Featured Article window.
- `hairline` `#ffffff4c`, white at about 30% alpha, the border colour of windows (five measured instances) with a solid `#ffffff` border appearing once.

The root variables also declare `--color-error: #ff5f57` and `--color-black: #000`. The error red was declared but not seen on screen in the measurement, so it is not a token here. The wallpaper's dither dots render white on a black-looking field in the capture; the stylesheet names the dither colour `#232323`.

Do not add a brand accent. The site's colour discipline is the brand.

## Typography

Two families, both loaded as web fonts: Inter at weights 400 and 600, and Ubuntu Mono at weight 400 (loadedFonts: "Ubuntu Mono 400 normal", "Inter 400 normal", "Inter 600 normal"). Inter carries 875 of the measured characters and Ubuntu Mono 76.

The type scale is a single size. Every measured character is 13.4776px at desktop with a 17.5208px line-height, and 12.0245px with a 15.6318px line-height in the 390px mobile pass. The size is a fluid value rather than a round number, so keep the decimals when reproducing it.

- `display` is Inter 600, used for the site name in the menu bar and the navigation links. It is the same size as body; weight is the only difference.
- `heading` is Ubuntu Mono 400, used for window headings such as "Featured Experiment". The monospace face signals "system" text.
- `body` is Inter 400 for the About paragraph and window copy.

There is no letter-spacing and no text-transform in the measurement. Hierarchy is made by weight, family, colour opacity and position, never by size.

## Layout

The page is a full-viewport stage. A header 34px high spans the full width at the top; its content is padded `0px 4px`. Navigation items (Home, Works, Blog, Lab, Awards) sit centred, with the site name at the left and, at the right, a row of keyboard-shortcut chips (E, T, M, C, K) with small icons, an AVAILABLE status and a clock reading local time with a city code. Inactive links are `#ffffff80`; the hovered link becomes `#ffffff`, measured as a colour change only with no background or underline change.

Windows are free-positioned and overlap. The About window measures about 392px wide at 301px high and is the widest text block; body text inside it is 384px wide. Spacing is on a 1px base unit (`--spacing: .0625rem`) and the measured gaps are 4px (most common), 8px, 16px and 13.4776px, matching the spacing tokens s1 to s4. Padding is 4px almost everywhere; a few elements use 8px.

## Elevation & Depth

There are no soft drop shadows. Depth is shown with stacking order and a one-pixel ring: the card shadow is a stack of empty shadows ending in a `0px 0px 0px 1px` ring in white at 30% alpha, which is the hairline colour. Overlapping windows therefore separate by outline, not by blur. The stylesheet declares a `--blur-xs` of 4px, but a backdrop blur was not confirmed on a measured element.

## Shapes

Radii are small and fixed: 2px on windows and cards (`xs`), 4px (`sm`) on smaller controls such as the shortcut chips, and a full pill `9999px` (five instances) for round elements such as the close buttons and the status dot. The variables `--radius-2`, `--radius-4` and `--radius-full` correspond to these three values. Nothing is larger than 4px except the full-round elements, so the interface reads as angular and technical.

## Components

- Menu bar: 34px high, white text, Inter 600, padding `0px 4px`; nav-link padding is 4px.
- Navigation link: Inter 600 at 13.4776px, `#ffffff80` at rest, `#ffffff` on hover.
- Window card: white text on `#232323`, radius 2px, padding 4px, one-pixel ring `#ffffff4c`. A title bar in Ubuntu Mono holds the window name and a round close control at the right.
- Launcher list: small document or folder glyphs with Inter labels, arranged in two columns on the upper left of the wallpaper.
- Notification window: a titled window at the upper right ("The Content Architecture") with a short sentence and a link ending in an arrow.
- Gallery dock: a titled strip along the bottom with a row of project thumbnails and a close control.
- Button: no filled button was detected, so no button token is declared.

## Design System Architecture

No public design system, brand guideline or token package was found; none is linked from the page. The de-facto system is visible in the shipped CSS variables: `--color-theme-bg`, `--color-theme-fg`, `--theme-bg`, `--theme-fg` and `--theme-dither` for colour; `--font-sans`, `--font-mono`, `--font-inter` and `--font-ubuntu-mono` for type; `--radius-2`, `--radius-4` and `--radius-full` for shape; `--layout-min-w: 375` and `--fluid-min-w: 375` for the fluid range; and `--text-body-14--font-weight` and `--text-body-10--font-weight` for text presets. Variables prefixed `--tw-` and the `--spacing` unit follow Tailwind CSS naming, and syntax-highlight variables (`--sh-string`, `--sh-jsxliterals`) indicate code samples in the Blog or Build Notes. Source: the measured root variables in the extraction of https://www.edoardolunardi.dev/.

## Do's and Don'ts

Do:
- Keep a single 13.4776px type size and create hierarchy with weight, family and opacity.
- Use `#232323` for the ground and white or 50% white for text.
- Separate windows with the `#ffffff4c` one-pixel ring and 2px radius.
- Keep microcopy short and nominal: window titles are nouns.
- Use round `9999px` only for close buttons and the status dot.

Don't:
- Do not introduce a brand accent colour or gradients.
- Do not add large soft shadows; the system uses outlines.
- Do not scale headings up; there is no larger size in the measurement.
- Do not round windows beyond 4px.
- Do not document the error red as UI, since it was not seen on screen.

## Responsive Behavior

Only the 390px mobile pass was measured. Type drops from 13.4776px to 12.0245px with a 15.6318px line-height, applying to the site name, headings and body alike. The header stays 34px high with padding `0px 4px`, and its text changes: the desktop row of five navigation links and shortcut chips is replaced in the measured text by an "Open Menu" control. The About paragraph measures 304px wide on mobile against 384px on desktop. Window arrangement, touch behaviour and any breakpoint values were not measured.

## Iteration Guide

1. Set the ground to `#232323` and text to `#ffffff`; add `#ffffff80` for secondary text.
2. Load Inter 400/600 and Ubuntu Mono 400; set every size to 13.4776px/17.5208px (12.0245px/15.6318px on mobile).
3. Build a 34px menu bar, then windows with a 2px radius, 4px padding, a `#ffffff4c` ring and a Ubuntu Mono title.
4. Add the dithered wallpaper and thumbnails last; they are the only imagery.
5. Check against the gate with `node web/scripts/verify-designs.mjs --slug=edoardo-lunardi`.
