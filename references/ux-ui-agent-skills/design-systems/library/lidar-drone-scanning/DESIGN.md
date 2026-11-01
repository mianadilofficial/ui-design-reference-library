---
version: alpha
name: Aevion Lidar Drone Scanning
category: "Agencies & Studios"
description: 'Aevion Lidar Drone Scanning tech demo by Riotters, measured live: #fdfdfd and white canvas, slate #24363f ink and button, light-weight switzer type up to 240px, protoMono labels, hairline #9fe2ff3d rules and square 0px buttons.'
colors:
  canvas: '#fdfdfd'
  page-body: '#ffffff'
  ink: '#24363f'
  primary: '#24363f'
  on-primary: '#ffffff'
  surface-3: '#dde5e9'
  ink-2: '#c7cccb'
  ink-4: '#385663a3'
  ink-5: '#171717'
  ink-6: '#24363fa3'
  hairline: '#9fe2ff3d'
typography:
  display:
    fontFamily: switzer, "switzer Fallback", sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 32px
    letterSpacing: '-0.8px'
  display-mobile:
    fontFamily: switzer, "switzer Fallback", sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 28px
    letterSpacing: '-0.4px'
  heading:
    fontFamily: switzer, "switzer Fallback", sans-serif
    fontSize: 240px
    fontWeight: 300
    lineHeight: 360px
    letterSpacing: '-13px'
  body:
    fontFamily: switzer, "switzer Fallback", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: switzer, "switzer Fallback", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24px
  link:
    fontFamily: switzer, "switzer Fallback", sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 24px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 32px
  s8: 48px
  s9: 64px
  s10: 120px
components:
  button-primary:
    backgroundColor: '{colors.ink}'
    textColor: '{colors.page-body}'
    typography: '{typography.button}'
    rounded: '{rounded.none}'
    padding: 12px 32px
    height: 48px
  link:
    textColor: '{colors.ink}'
    typography: '{typography.link}'
    rounded: '{rounded.none}'
  nav:
    textColor: '{colors.ink}'
    rounded: '{rounded.none}'
  footer:
    backgroundColor: '{colors.page-body}'
    textColor: '{colors.ink}'
    rounded: '{rounded.none}'
    padding: 0px 24px
---

## Overview

This site (measured at `https://drone.riotters.com/`) is a tech demo made by the design studio Riotters for "Aevion", a fictional autonomous LiDAR inspection drone. The opened page states it is a non-commercial demo, not affiliated with or endorsed by DJI, and lists its stack as Next.js, Three.js, WebGL, Tailwind CSS, Payload CMS and Vercel. The measured design is therefore the Aevion demo site, not a drone-scanning company's corporate brand.

The capture shows a slim header with a black X-shaped logo mark, the word "aevion", a dot, "Lidar Drone Scanning" in gray, "Tech Demo By Riotters" and a "GMT 3:48 am" clock in the middle, and a gray "menu" button at the right. A tall hero tile with a pale blue-to-white gradient holds a huge outlined "aevion" wordmark that fades away downward. Under it, the line "Autonomous LIDAR inspection systems." is set in dark slate and "Precision that secures critical infrastructure." in lighter gray, with a "Scroll Down" cue and dotted icon at the right. A hairline-bordered two-column area carries the statement "Detecting cracks, deformations and structural risks before they become failures." in large light-gray type. A numbered pill ("3") and the giant word "Gear" in light gray open the next section.

The page's sections are Gear (payload specs: 5 returns, ±2 cm accuracy, 450 m max range), Solutions (Energy, Infrastructure, Industry, Geospatial), Capabilities (Scan, Connection, Compactness) and Software (Platform). The voice is technical, confident and figure-led. The look is quiet, spacious and instrument-like.

## Colors

Values are from `web/data/extracted/lidar-drone-scanning.json`.

- **Canvas `#fdfdfd`**: the page ground (area weight 7708). **Page-body `#ffffff`** is the largest area (10724).
- **Ink `#24363f`**: a dark blue-slate, the most-read text color (916 characters), declared `--color-ink`. It is also the button fill: **primary `#24363f`** with **on-primary `#ffffff`**.
- **Surface-3 `#dde5e9`**: a pale blue-gray (area 279), such as the menu button.
- **Ink-2 `#c7cccb`**: a light gray text color (822 characters), the second most-read.
- **Ink-4 `#385663a3`** and **ink-6 `#24363fa3`**: translucent slate secondary text (319 and 94 characters).
- **Ink-5 `#171717`**: near-black text (287 characters), the h2 role color.
- **Hairline `#9fe2ff3d`**: a translucent pale cyan, the most-used border color (20 uses). Other borders: `#ffffff3d` (3), `#cacfd1` (2), `#24363f3d` (1).

The palette is monochrome slate and gray with one cool cyan hairline; no saturated accent was measured.

## Typography

Two families: **switzer** (2501 characters, with a "switzer Fallback" metric-matched face and a sans-serif fallback) for all interface and display text, and **protoMono** (442 characters, weight 300) for small technical labels. Weights are mostly 300 (1933 characters) and 400 (979), with 500 for buttons and links (31).

| Token | Size / line-height | Weight | Letter-spacing |
|---|---|---|---|
| `display` | 24px / 32px | 300 | -0.8px |
| `display-mobile` | 20px / 28px | 300 | -0.4px |
| `heading` | 240px / 360px | 300 | -13px |
| `body` | 14px / 24px | 400 | none |
| `button` | 14px / 24px | 500 | none |
| `link` | 15px / 24px | 500 | none |

By character count: 28.416px (692), 28px (415), 12px (380), 14px (372), 20px (312), 24px (299). Tracking is negative at large sizes: 28.416px at -0.7104px, 28px at -0.8px, 24px at -0.8px, 20px at -0.4px, 15px at -0.4px and 64px at -2.4px. The overlay navigation (Energy, Infrastructure, Industry, Geospatial) measured 56px / 64px at -1.4px. Display words such as "Gear" reach 240px with 360px line-height.

## Layout

A framed, editorial grid: a 24px outer gutter (footer padding `0px 24px`, paddings of 24px on 21 elements), full-width hairline rules between sections and a central vertical rule splitting a section into two columns, as in the capture. The hero is a large tile inset from the page edges. The page is very tall (15743px) with large empty bands.

Spacing tokens: 4px, 8px, 12px, 16px, 20px, 24px, 32px, 48px, 64px and 120px. Gaps: 8px (25 uses), 4px (12), 16px (10), 32px (4), 48px (4), 24px (3). Paddings: 24px (21), 16px (15), 8px (13), 12px (12), 20px (3), 120px (2). The CSS declares `--breakpoint-dsk: 75rem`.

## Elevation & Depth

No box shadows were measured. Structure is drawn with translucent cyan and slate hairlines (`#9fe2ff3d`, `#24363f3d`) and with tonal gradients, such as the pale hero tile that fades into the canvas. There are no elevated cards.

## Shapes

Radii measured: 24px (8 elements) and a very large value `3.35544e+07px` (3 elements, the fully round pills such as the numbered "3" badge). Tokens: `xs: 24px`, `none: 0px` and `pill: 9999px`. The main button is square (0px). The "menu" button and numbered badges are round-cornered; most structural boxes are square-edged and defined by hairlines.

## Components

**Primary button (`button-primary`)**: `#24363f` fill, white text, switzer 14px / 24px weight 500, 0px radius, padding `12px 32px`, height 48px. Label "Contact Us". On mobile the same button measured 16px text, padding `8px 16px`, 48px high.

**Link / wordmark (`link`)**: slate text at 15px weight 500; the logo link "aevion" is 28px high. Hover probe on "Riotters": text goes from `rgba(36, 54, 63, 0.64)` to solid `rgb(36, 54, 63)` with an underline.

**Nav (`nav`)**: slate text; the full-screen menu lists Energy, Infrastructure, Industry and Geospatial at 56px / 64px weight 300 (24px / 32px on mobile).

**Footer (`footer`)**: white background, slate text at 24px / 32px weight 300, padding `0px 24px`, 631px tall; it holds the line "This website is a tech demo..." and the Riotters promotion.

**Menu button and number badge**: a pale `#dde5e9` rectangle with "menu" and a thin-outlined round badge; both are small and low contrast.

## Design System Architecture

No brand guideline or design system for Aevion is linked from the page: the opened page links only to riotters.com (including its contact page) and the DJI trademark notice, so no official source exists to cite beyond the site (https://drone.riotters.com/). The measured CSS is Tailwind v4 output: variables such as `--color-ink: #24363f`, `--color-white`, `--text-2xl: 1.5rem`, `--radius-sm: .25rem`, `--breakpoint-dsk: 75rem`, `--ease-in-out: cubic-bezier(.4,0,.2,1)` and the `--tw-*` utility variables. The only custom brand token measured is `--color-ink`.

## Do's and Don'ts

Do:
- Use slate `#24363f` for text and the single button style, on `#fdfdfd` and white.
- Use switzer weight 300 with negative tracking for large type.
- Use protoMono for technical labels.
- Separate regions with translucent hairlines.
- Use oversized light-gray words as section markers.

Don't:
- Do not add saturated accent colors; none were measured.
- Do not use shadows.
- Do not round the main button; its radius is 0px.
- Do not present the demo's fictional name "Aevion" as a real product.

## Responsive Behavior

The 390px mobile pass recorded: h1 20px / 28px at -0.4px tracking (desktop 24px / 32px), h2 80px / 80px at -4px (desktop 240px / 360px at -13px), a body sample at 12px / 18px, the "Contact Us" button at 16px with padding `8px 16px`, and the nav block at 24px / 32px, 65px high. Column counts and grid behavior at that width are not measured.

## Iteration Guide

1. Set `canvas` `#fdfdfd`, `ink` `#24363f`, `primary` `#24363f`, hairlines `#9fe2ff3d`.
2. Set statements in switzer 300 at 24px / 32px with -0.8px tracking; use 240px only for section words.
3. Build buttons at 48px height, padding `12px 32px`, radius 0px.
4. Use the 4px-based spacing scale (4, 8, 12, 16, 24, 32, 48, 64, 120).
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=lidar-drone-scanning --url=https://drone.riotters.com/ --force --no-motion` before changing any value, then `node web/scripts/verify-designs.mjs --slug=lidar-drone-scanning`.

## Additional Measurements

The measured scroll height is 15743px on desktop. The desktop body role reads 15px at weight 500 with a 24px line-height, while the paragraph role reads 14px at weight 400. The text colors in the character table total six values (slate, light gray, white, two translucent slates and near-black), and the background table holds six values, of which `#24363f14` (2 uses) and `#4b71847a` (1 use) are translucent overlays. The font table lists `switzer`, `protoMono` at weight 300 and `protoMono Fallback`.
