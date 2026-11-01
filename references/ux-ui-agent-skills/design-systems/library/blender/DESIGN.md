---
version: alpha
name: Blender
category: "Design & Creative Tools"
description: "blender.org home: light grey #f2f2f3 canvas, #4c4d52 Inter text, 72px/800 Inter display heads in vivid feature colours (#46ebc2, #0066ff, #9300ff), blue-gradient #6183ff→#47aaf5 'Donate'/'Download' buttons with 6px radius and blue glow, 12px-radius cards with soft grey shadows, a white 64px navbar and the logo's PMS 716 orange #e87d0d."
colors:
  canvas: "#f2f2f3"
  page-body: "#292d32"
  surface-raised: "#ffffff"
  ink: "#4c4d52"
  ink-secondary: "#737e8c"
  ink-tertiary: "#abb2ba"
  primary: "#47aaf5"
  primary-deep: "#6183ff"
  button-base: "#eaedf0"
  primary-hover: "#f3f5f6"
  on-primary: "#ffffff"
  surface-dark: "#1c1c1c"
  surface-lilac: "#f8f2ff"
  surface-ice: "#f2f7ff"
  banner-cyan: "#d9f5fc"
  link-cyan: "#10a2c6"
  feature-mint: "#46ebc2"
  feature-blue: "#0066ff"
  feature-violet: "#9300ff"
  logo-orange: "#e87d0d"
  logo-blue: "#265787"
typography:
  display:
    fontFamily: 'Inter, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Oxygen, Ubuntu, Cantarell, "Open Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 72px
    fontWeight: 800
    lineHeight: 72px
  display-mobile:
    fontFamily: 'Inter, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Oxygen, Ubuntu, Cantarell, "Open Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 36px
    fontWeight: 800
    lineHeight: 36px
  heading:
    fontFamily: 'Inter, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Oxygen, Ubuntu, Cantarell, "Open Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 28px
    fontWeight: 600
    lineHeight: 32px
  body:
    fontFamily: 'Inter, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Oxygen, Ubuntu, Cantarell, "Open Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 24px
    fontWeight: 400
    lineHeight: 37.3333px
  button:
    fontFamily: 'Inter, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Oxygen, Ubuntu, Cantarell, "Open Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 14px
    fontWeight: 500
    lineHeight: 32px
  nav:
    fontFamily: 'Inter, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Oxygen, Ubuntu, Cantarell, "Open Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21.7778px
rounded:
  xs: 6px
  sm: 12px
spacing:
  s1: 4px
  s2: 8px
  s3: 9px
  s4: 10px
  s5: 15px
  s6: 16px
  s7: 24px
  s8: 30px
  s9: 36px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.button-base}"
    backgroundImage: "linear-gradient(350deg, rgb(97, 131, 255), rgb(71, 170, 245))"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px 16px
    height: 32px
    boxShadow: rgba(0, 82, 255, 0.1) 2px 4px 4px 0px, rgba(0, 82, 255, 0.1) 1px 16px 24px 0px, rgba(0, 82, 255, 0.3) 2px 8px 32px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-hero-light:
    textColor: "{colors.surface-dark}"
    rounded: "{rounded.xs}"
    padding: 4px 48px
    height: 40px
  section-link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
  nav:
    backgroundColor: "{colors.surface-raised}"
    textColor: "{colors.ink}"
    padding: 0px 16px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(149, 157, 165, 0.2) 0px 8px 24px 0px
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-secondary}"
    padding: 0px 0px 8px
---

# Blender

## Overview

This file documents the blender.org home page (`https://www.blender.org/`, title "Blender - The Free and Open Source 3D Creation Software — blender.org"). The page is long (9686px at 1280px wide) and content-dense, closer to a community portal than a product landing page. At the top a pale cyan `#d9f5fc` bar announces "Join the official Blender Survey 2026!". Below sits a white 64px navbar (logo; "Roadmap", "Download", "Support", "Get Involved", "About", "Jobs", "Store"; a blue gradient "Donate" button). The hero is a full-bleed render from an open movie with "Blender 5.3 Beta" in white 72px/800 Inter, a one-line summary, a white "What's Coming" button and a translucent "Download & Test" button.

The grey canvas below is a stack of content shelves: "Latest News" (two large image cards plus a wide annual-report card), "Blender Development" and "Blender Studio" (four-up rows of thumbnail cards), then big statement panels — "Free and Open Source" in mint on a near-black card, "Part of the industry" in blue with sponsor logos (Khronos, The Linux Foundation, Open Invention Network, Academy Software Foundation), "It's about people." in violet with four community photos, "The Ecosystem" over a blue collage — and a long "Everything You Need" feature tour (Cycles, Modeling, VFX, Animation & Rigging, Story Art, Python) alternating text and screenshots. A dark footer closes with "The Freedom to Create." and a "Download Blender" button.

The voice is proud and community-minded ("Blender is a public project hosted on blender.org, licensed as GNU GPL, owned by its contributors."). Imagery is entirely Blender-made: open-movie stills, interface screenshots, conference photos. The feature tour shows the real application UI — dark node editors, viewports and timelines — so the light marketing chrome frames dark product screenshots throughout.

## Colors

Backgrounds by area: `#f2f2f3` (5660), `#292d32` (2263), `#f8f2ff` (809), `#f2f7ff` (470), `#1c1c1c` (433), `#ffffff` (82), `#d9f5fc` (61), `#eaedf0` (24). Text by characters: `#4c4d52` (3773), `#ffffff` (574), `#737e8c` (482), `#abb2ba` (144), `#10a2c6` (37), `#46ebc2` (20), `#0066ff` (20), `#9300ff` (18).

- **canvas `#f2f2f3`** — the page grey (`--color-bg: hsl(210, 4%, 95%)`).
- **page-body `#292d32`** — the `<body>` background, visible in the footer (`--body-color-bg: hsl(213, 10%, 18%)`).
- **surface-raised `#ffffff`** — navbar.
- **ink `#4c4d52`** — all running text (`--color-text: hsl(230, 4%, 31%)`); **ink-secondary `#737e8c`** and **ink-tertiary `#abb2ba`** for metadata and footer.
- **primary `#47aaf5` / primary-deep `#6183ff`** — the two stops of the button gradient `linear-gradient(350deg, rgb(97, 131, 255), rgb(71, 170, 245))`; **button-base `#eaedf0`** is the solid colour under it and **primary-hover `#f3f5f6`** the measured hover base.
- **surface-dark `#1c1c1c`** — the "Free and Open Source" panel. **surface-lilac `#f8f2ff`** and **surface-ice `#f2f7ff`** — tinted statement panels.
- **feature-mint `#46ebc2`**, **feature-blue `#0066ff`**, **feature-violet `#9300ff`** — the colour of each statement headline.
- **link-cyan `#10a2c6`** — the survey banner link.
- **logo-orange `#e87d0d` / logo-blue `#265787`** — the official logo colours (PMS 716 and PMS 647) from Blender's logo page.

## Typography

One family, Inter, with a long system fallback stack (`--font-family-body`). Inter is open source.

- **display** — 72px / 72px, 800. The hero title and the statement headlines ("Free and Open Source", "Everything You Need").
- **heading** — 28px / 32px, 600. Shelf titles ("Latest News", "Blender Development"), which are links.
- **body** — 24px / 37.3333px, 400. Feature-tour paragraphs.
- **nav** — 14px / 21.7778px, 400.
- **button** — 14px / 32px, 500.

Sizes by characters: 24px (2113), 14px (750), 18px (720), 20px (685), 21px (504), 72px (106), 32px (105), 15px (54), 28px (44). Weights: 400 (4563), 600 (371), 800 (106), 500 (41). The site sets `html` to a 10px base: `--fs-base: 1.4rem` is the 14px nav size and `--fs-h1: 2.8rem` the 28px heading.

## Layout

Desktop: 1280px wide. Bands measured: 48px survey bar, 64px navbar, 640px hero image band (title at x=95), then a 5378px grey band with content from x=71 to x=1209 and up to 4 card columns, a 311px image band, and further grey bands. The header shows 17 visible links (main nav plus the global Blender-sites bar). Gaps: 36px (10), 16px, 24px. The variables define breakpoints `--breakpoint-xl: 1380px` and `--breakpoint-xxl: 1680px`.

## Elevation & Depth

Measured shadows: `rgba(0, 0, 0, 0.05) 0px 2px 4px 0px` (18 — small cards and images), `rgba(149, 157, 165, 0.2) 0px 8px 24px 0px` (15 — large cards; `--box-shadow-card-lg`), the navbar's `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px`, and three variants of a blue glow on gradient buttons, e.g. `rgba(0, 82, 255, 0.1) 2px 4px 4px 0px, rgba(0, 82, 255, 0.1) 1px 16px 24px 0px, rgba(0, 82, 255, 0.3) 2px 8px 32px 0px`. The glow makes the blue buttons the only element that appears to float above the page.

## Shapes

Two radii: 12px (57 — cards, images, panels; `--border-radius-lg: 1.2rem`) and 6px (6 — buttons; `--border-radius: .6rem`). No pills and no circles beyond icons. The result is a consistent soft-rectangle language: every image, panel and thumbnail shares the same 12px corner, and only the smaller interactive buttons tighten to 6px, which makes them read as controls rather than content.

## Components

- **button-primary** — "Donate" / "Download Blender": blue gradient over `#eaedf0`, white 14px/500 text, 6px radius, padding 4px 16px, 32px tall (40px in the hero row), blue glow shadow. Measured hover changes the base fill to `#f3f5f6`.
- **button-hero-light** — "What's Coming": `#ffffffe6` translucent white with black 18px/500 text, 6px radius, padding 4px 48px, 40px tall. "Download & Test" sits beside it on `#ffffff1a`.
- **card** — 12px radius, 561×316px in the news row, image fills the card, caption below in `#4c4d52`.
- **statement panel** — 12px-radius panel (`#1c1c1c`, `#f2f7ff`, `#f8f2ff` or an image) with a 72px/800 coloured headline, a paragraph and a link.
- **nav** — white, 64px, 14px links, gradient Donate button right.
- **footer** — `#292d32`, link columns ("About", "Download", "Developers", "Support", "Follow Blender") in `#737e8c`.

## Design System Architecture

Blender publishes logo rules at https://www.blender.org/about/logo/ — the logo "is used unaltered, without fancy enhancements, in original colors, original typography, and always complete", in PMS 716 `#e87d0d`, PMS 647 `#265787` and white. The website's de-facto UI system is visible in 212 root variables: HSL-driven colour roles built from hue/saturation/lightness parts (`--color-bg-h: 210`, `--color-bg-l: 95%`, `--color-text-l: 31%`, `--color-accent: hsl(204, 100%, 50%)`), a rem type scale (`--fs-xs` to `--fs-xl`), component tokens (`--btn-accent-box-shadow`, `--navbar-global-bg`) and WordPress block presets (`--wp--preset--*`).

## Do's and Don'ts

- Do keep the canvas `#f2f2f3` and body text `#4c4d52`.
- Do reserve the blue gradient with glow for Donate and Download.
- Do give each statement panel its own vivid headline colour.
- Do use 12px for cards and 6px for buttons.
- Don't alter or recolour the Blender logo; use `#e87d0d` and `#265787` only as the logo page specifies.
- Don't introduce a second typeface; everything is Inter.
- Don't use the gradient for text links.

## Responsive Behavior

Measured at 390px: the hero title drops from 72px to 36px/36px; shelf titles from 28px/32px to 24px/28px; feature paragraphs from 24px/37.3333px to 21px/30px; the Donate button measured 12px/500 text, 32px tall and 164px wide. The mobile header showed 9 visible links and a menu toggle labelled "Toggle navigation" (desktop: 17 links, no toggle). Up to 3 card columns were counted on mobile versus 4 on desktop. Mobile font sizes by characters: 21px, 14px, 12px, 20px, 18px, 28px, 15px, 50.64px, 24px, 36px.

## Iteration Guide

1. Start with `canvas` grey, white navbar and `ink` Inter text.
2. Open with a full-bleed render and a white 72px/800 title.
3. Build shelves with `heading` links and rows of 12px `card`s.
4. Insert statement panels with coloured `display` headlines.
5. Use `button-primary` gradient buttons only for donating and downloading.
