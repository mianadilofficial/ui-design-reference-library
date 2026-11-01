---
version: alpha
name: "SOHub"
category: "Portfolio"
description: "SOHub is a digital agency site that sets Inter at 56px/600 with tight negative tracking on a cool off-white canvas (#f0f6f8), with near-black ink (#0c1016), pill-shaped uppercase buttons (9999px radius, 58px tall), 24px rounded project cards and a Tailwind plus HeroUI CSS stack."
colors:
  canvas: "#f0f6f8"
  ink: "#0c1016"
  primary: "#0c1016"
  on-primary: "#f0f6f8"
  surface-3: "#3a3e44"
  ink-secondary: "#ffffff"
  ink-4: "#a5abad"
  ink-5: "#11181c"
  ink-6: "#000000"
  primary-hover: "#d9e0e3"
  card-text: "#1e232c"
typography:
  display:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 56px
    fontWeight: 600
    lineHeight: 56px
    letterSpacing: "-1.4px"
  display-mobile:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 30px
    letterSpacing: "-2.25px"
  heading:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 48px
    letterSpacing: "-2.4px"
  body:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.6px"
  button:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: "-0.45px"
    textTransform: uppercase
  nav:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 16px
  sm: 24px
  md: 48px
  pill: 9999px
spacing:
  s1: 4.8px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 48px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 4.8px
    height: 58px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.ink-6}"
  button-secondary:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.ink-6}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 4.8px
    height: 58px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
  nav:
    textColor: "{colors.ink-6}"
    padding: 40px 48px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  card:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.card-text}"
    rounded: "{rounded.sm}"
    padding: 48px 24px
  footer:
    textColor: "{colors.canvas}"
---

# SOHub

## Overview

SOHub (sohub.digital) is the site of a digital agency whose page title reads "SOHub — Creative Digital Experiences". The measured home page is a single long scroll of 7149px at 1280px wide. It opens on a very large lowercase "sohub" wordmark in near-black ink that bleeds off the right edge of the viewport, with a 3D rendered robot figure overlapping the letters. Under it sits the tagline "Your story builds our history." in Inter at 56px weight 600. The page then moves to a statement in the same bold, tightly tracked sans ("We are a diligent team, that's passionate about turning ideas into digital realities"), followed by a two-column grid of rounded project cards: 1UP Nova, Razer, Themis, AEVA Team, CHR Innovations and Profit Saloon, each with full-bleed photography or rendered imagery and the client name set over it in white.

The personality is confident, compact and typographic. One family (Inter) carries every role, weight does the hierarchy (400, 500, 600), and negative letter-spacing makes the large sizes read as a block. The palette is a cool blue-tinted off-white (#f0f6f8) paired with an almost-black navy ink (#0c1016); the only chroma on the page comes from client imagery. The footer is another oversized typographic moment: the measured footer text is 96px with -4.8px letter-spacing in the off-white color on a dark ground, showing "© SOHub Digital" and "Award-Winning Digital Agency" with STUDIO, WORK and CONTACT links.

## Colors

The generated tokens come directly from the measured home page.

- **Canvas `#f0f6f8`** is the body background and the largest background area. The site's own CSS variable `--color-sohub-white` carries the same value.
- **Ink / primary `#0c1016`** is the near-black used for the hero tagline, the primary pill button fill and the site's `--color-sohub-black` variable. Because the primary button is filled with the ink color, primary and ink are the same hex.
- **On-primary `#f0f6f8`** is the label color on that dark pill, the same as the canvas.
- **Primary-hover / soft grey `#d9e0e3`** is the fill of the secondary pills (CONTACT, STUDIO, WORK, BOOK A MEETING) and of the nav overlay card, and is the `--color-sohub-soft-grey` variable. On hover the measured CHAT WITH SOHUB button keeps this fill with black text.
- **Card text `#1e232c`** is the dark grey (`--color-sohub-dark-grey`) used for the menu-overlay link list.
- **Ink-4 `#a5abad`** is the mid grey (`--color-sohub-grey`) seen in footer text.
- **Ink-5 `#11181c`** is the body-element text color.
- **Ink-6 `#000000`** is pure black, used on the secondary pill labels.
- **Ink-secondary `#ffffff`** is the most-read text color by character count (it sits on the dark project cards and dark sections) and **surface-3 `#3a3e44`** is a dark grey surface area.

By background area the canvas dominates (6590 weight), then `#0c1016` (1274), then `#3a3e44` (699), `#23272d` and `#50555a` (663 each). Dark sections therefore exist on the page alongside the light canvas, but the home page reads primarily as a light site.

## Typography

Inter (variable, weights 100 to 900 loaded) is the family on every measured role, with "Inter Fallback" as the metric fallback. A second face, publicaPlay at weight 400, is also loaded. The body element itself computes to the Tailwind default stack `ui-sans-serif, system-ui, sans-serif`, so Inter is applied at component level.

| Role | Size / line-height | Weight | Letter-spacing |
|---|---|---|---|
| display (hero tagline) | 56px / 56px | 600 | -1.4px |
| heading (project titles) | 48px / 48px | 600 | -2.4px |
| body | 24px / 32px | 400 | -0.6px |
| button | 18px / 28px | 500 | -0.45px, uppercase |
| nav | 16px / 24px | 400 | normal |
| display-mobile | 30px / 30px | 600 | -2.25px |

The measured size ladder by characters read is 24px (the most-read), 16px, 72px, 96px, 48px, 18px, 56px, 36px and 30px. Letter-spacing is proportional to size: -0.6px at 24px, -0.4px at 16px, -2.4px at 48px, -5.4px at 72px and -4.8px at 96px. Weight 400 carries 1201 characters, 600 carries 296 and 500 carries 75. Buttons are all-caps at weight 500.

No substitute is needed because Inter is a public open-source family.

## Layout

The page is 1280px wide in the desktop pass. The nav header has 40px vertical and 48px horizontal padding. Project cards sit in a two-column grid with the measured gap values of 24px (20 occurrences), 16px (16), 8px (10) and 32px (10). Padding values measured include 24px, 8px, 4.8px, 40px, 16px, 64px, 80px and 48px. The generated spacing scale runs 4.8, 8, 12, 16, 20, 24, 32, 40, 48 and 64px. Sections are separated by generous vertical whitespace rather than rules; no border colors were measured at all. The hero uses an asymmetric composition where the oversized wordmark is cropped by the viewport edge and the tagline is offset to the left third.

## Elevation & Depth

No box shadows were measured on any element (the `boxShadows` frequency list is empty), so the live page is flat. Depth comes from color contrast between the dark `#0c1016` buttons and the pale canvas, from full-bleed photography inside rounded cards, and from the layered 3D robot render overlapping the wordmark. The HeroUI variables `--heroui-box-shadow-small`, `-medium` and `-large` exist in the stylesheet but no rendered element used them in the measurement.

## Shapes

Radii measured by frequency: the pill value (computed 3.35544e+07px, written here as 9999px) on 39 elements, 16px on 16 elements, 48px on 4, 24px on 2, and a `0px 0px 24px 24px` bottom-only radius once. The generated rounded scale is xs 16px, sm 24px, md 48px and pill 9999px. Buttons are pills; project cards and the menu overlay use 24px; 16px appears on project link wrappers. Form of the hero wordmark and 3D art stays outside the radius system.

## Components

- **button-primary**: fill `#0c1016`, text `#f0f6f8`, Inter 18px/500 uppercase, 9999px radius, 58px tall, 4.8px padding. Example label "CHAT WITH SOHUB".
- **button-secondary**: fill `#d9e0e3`, text `#000000`, same typography, radius and height. Labels measured: CONTACT, STUDIO, WORK. A 16px/500 variant (BOOK A MEETING, GO UP) is also measured at 58px tall.
- **button hover**: the measured hover for CHAT WITH SOHUB grows its height from 58px to 63px while keeping the `#d9e0e3` fill and black text.
- **nav**: a header with 40px 48px padding; the menu opens as an overlay listing Home, Studio, Work, Contact at 48px/600 in `#1e232c` on a `#d9e0e3` card with a 24px radius and 48px 24px padding.
- **link**: project titles at 48px/600 in `#f0f6f8` over imagery, 16px radius.
- **footer**: 96px display text in `#f0f6f8`, small `#a5abad` captions.

## Design System Architecture

There is no public design-system site or brand guideline link on the pages opened; the de-facto system is read from the shipped CSS. The stylesheet is Tailwind CSS v4 (variables such as `--spacing: .25rem`, `--text-7xl: 4.5rem`, `--radius-3xl: 1.5rem`, `--tw-*` internals) combined with HeroUI tokens (`--heroui-radius-small: 8px`, `--heroui-radius-medium: 12px`, `--heroui-font-size-medium: 1rem`, `--heroui-border-width-medium: 2px`). The brand layer is a small set of named custom properties: `--color-sohub-black #0c1016`, `--color-sohub-dark-grey #1e232c`, `--color-sohub-grey #a5abad`, `--color-sohub-soft-grey #d9e0e3` and `--color-sohub-white #f0f6f8`, plus an easing `--ease-spring: cubic-bezier(.22,.68,0,1.5)`. Reference: https://sohub.digital

## Do's and Don'ts

- Do set headlines in Inter 600 with the measured negative tracking; do not use positive tracking on large type.
- Do use the five-step sohub palette (`#0c1016`, `#1e232c`, `#a5abad`, `#d9e0e3`, `#f0f6f8`) for UI; keep chroma to client imagery.
- Do make buttons 9999px pills, 58px tall, uppercase.
- Do not add drop shadows; the measured page has none.
- Do not use the 8px/12px HeroUI radii for brand surfaces; the measured shapes are 16px, 24px, 48px and pills.
- Don't present pure white as the page background; the canvas is `#f0f6f8`.

## Responsive Behavior

The extractor's mobile pass at 390px recorded these changes: display text drops from 56px to 30px (weight 600, letter-spacing -2.25px), body text from 24px to 20px with 28px line-height, and the primary pill from 18px to 14px type with a 42px height and 242px width. The mobile size ladder is 20px, 14px, 30px, 24px, 48px, 16px, 18px and 12px. Breakpoint values, menu behavior at narrow widths and grid column counts on mobile were not measured.

## Iteration Guide

1. Start from the canvas `#f0f6f8` and ink `#0c1016`; add `#d9e0e3` only for secondary controls and overlay panels.
2. Build every heading from Inter 600 and compute letter-spacing as a fixed negative proportion of the size, as measured above.
3. Use 24px radius for cards and pills for buttons.
4. Photography carries the color; keep UI neutral.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=sohub --url=https://sohub.digital --force --no-motion` after any change to the live site.
