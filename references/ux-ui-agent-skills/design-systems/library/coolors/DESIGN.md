---
version: alpha
name: Coolors
category: "Design & Creative Tools"
description: "Coolors palette-generator site: Inter everywhere with a 102.4px/800 hero at -3.584px tracking, #0a0a0a ink on white, blue #2563eb buttons with 10px and 8px corners, grey #f5f5f5 resource cards, and eight pastel tool tiles that pair Tailwind-style 100 tints with matching 600 text colours."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#0a0a0a"
  black: "#000000"
  primary: "#2563eb"
  on-primary: "#ffffff"
  primary-hover: "#1d4ed8"
  ink-muted: "#525252"
  ink-faint: "#737373"
  hairline: "#00000012"
  tile-blue: "#dbeafe"
  tile-red: "#fee2e2"
  tile-cyan: "#cffafe"
  tile-purple: "#f3e8ff"
  tile-pink: "#fce7f3"
  tile-orange: "#ffedd5"
  tile-yellow: "#fef9c3"
  tile-green: "#dcfce7"
  tool-cyan: "#0891b2"
  tool-red: "#dc2626"
  tool-yellow: "#ca8a04"
  tool-pink: "#db2777"
  tool-orange: "#ea580c"
  tool-purple: "#9333ea"
  tool-green: "#16a34a"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 102.4px
    fontWeight: 800
    lineHeight: 92.16px
    letterSpacing: "-3.584px"
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 60px
    fontWeight: 800
    lineHeight: 54px
    letterSpacing: "-2.1px"
  tool-title:
    fontFamily: Inter, sans-serif
    fontSize: 51.2px
    fontWeight: 750
    lineHeight: 51.2px
    letterSpacing: "-1.024px"
  card-title:
    fontFamily: Inter, sans-serif
    fontSize: 28px
    fontWeight: 800
    lineHeight: 28px
    letterSpacing: "-0.98px"
  lead:
    fontFamily: Inter, sans-serif
    fontSize: 24px
    fontWeight: 450
    lineHeight: 33.6px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 450
    lineHeight: 22.4px
  eyebrow:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 19.6px
    letterSpacing: 3.5px
    textTransform: uppercase
  tool-link:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16.8px
    letterSpacing: 1.4px
    textTransform: uppercase
  button:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 46px
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 15px
    fontWeight: 450
    lineHeight: 15px
  button-secondary:
    fontFamily: Inter, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 36px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 10px
  xl: 14px
  2xl: 20px
spacing:
  s1: 4px
  s2: 5px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 20px
  s7: 21px
  s8: 25px
  s9: 30px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 21px
    height: 46px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 36px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.black}"
    boxShadow: rgba(0, 0, 0, 0.07) 0px 1px 0px 0px
  nav-link:
    textColor: "{colors.black}"
    typography: "{typography.nav}"
  tool-tile:
    backgroundColor: "{colors.tile-cyan}"
    textColor: "{colors.tool-cyan}"
    typography: "{typography.tool-title}"
    rounded: "{rounded.xl}"
    padding: 40px
  resource-card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xl}"
    padding: 30px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    boxShadow: rgba(0, 0, 0, 0.05) 10px -10px 20px 0px
  footer:
    textColor: "{colors.ink-faint}"
    border: "1px solid #00000012"
---

## Overview

Coolors (https://coolors.co/) is a fast colour-palette generator, made — per its footer — by Fabrizio Bianchi ("© Coolors by Fabrizio Bianchi. Make something coolorful!"). The home page is clean, white and typographic, and lets colour come from the product: the hero pairs an enormous black Inter headline, "The super fast color palettes generator!", with a collage of palette strips and one large five-swatch palette card. A handwritten "AND MUCH MORE" annotation with a swoosh sits under the headline. Two buttons follow — a blue "Start the Generator" and a light grey "Explore 10M+ Palettes".

Below the hero: a tracked uppercase line "TRUSTED BY 8+ MILLION CREATIVE MINDS AND TOP COMPANIES" over a monochrome logo row (The New York Times, GitHub, Slack, Warner Bros., EA, DreamWorks, Apple, Ubisoft, Disney); a 24px intro paragraph beside a "COLOR OF THE DAY" card (Ink Black #010B13); then "OUR TOOLS, LOVED BY MILLIONS" — a three-column grid of eight pastel tiles, each tool in its own hue (Palette Generator cyan, Explore Palettes blue, Image Picker purple, Contrast Checker pink, Palette Visualizer red, Color Picker orange, Tailwind Colors yellow, Color Bot green). A grey "MORE USEFUL RESOURCES" grid, a "PLUGINS AND APPS" row (iOS App, Figma Plugin, Adobe Extension), a huge faded "Make something coolorful!" and a link footer close the page.

The capture also shows sponsored placements (a BugHerd line in the header and a Shutterstock card under the hero); those are ads and are not part of the design.

## Colors

The CSS ships a full Tailwind-style token set (`--color-primary-50` … `-950`, `--color-smart-*` ramps) plus button and input tokens. What the page uses:

- **canvas #ffffff** — about two-thirds of the capture.
- **ink #0a0a0a** — `--text-color`, for headlines and body; **black #000000** for header links.
- **primary #2563eb** — `--color-smart-primary-600`, the "Start the Generator" and "Sign up" fill, with **on-primary #ffffff**. Hover darkens to **primary-hover #1d4ed8** (`--color-smart-primary-700`).
- **ink-muted #525252** — `--input-placeholder` / neutral-600, for descriptions; **ink-faint #737373** for eyebrows and footer text.
- **page-largest #f5f5f5** — the grey of resource and app cards and the Color of the Day card.
- **hairline #00000012** — `--border-transparent-color` (rgba(0,0,0,0.07)), used for the footer top border, the header's bottom shadow line and inset rings.
- **Tool tiles** — each tile uses a pale 100-level fill with a 600-level text colour of the same hue: #cffafe / #0891b2 (cyan), #dbeafe / #2563eb (blue), #f3e8ff / #9333ea (purple), #fce7f3 / #db2777 (pink), #fee2e2 / #dc2626 (red), #ffedd5 / #ea580c (orange), #fef9c3 / #ca8a04 (yellow), #dcfce7 / #16a34a (green).

Secondary buttons use translucent black: `--button-gray-bg` rgba(0,0,0,0.06) with `--button-gray-hover-bg` rgba(0,0,0,0.09) — the "Sign in" link measures that 6% fill.

## Typography

**Inter** only, loaded as a variable font (100–900), and Coolors uses in-between weights: 450 is the default text weight (2,703 characters), with 500, 550, 600, 750 and 800 elsewhere. Large sizes carry negative tracking of about −3.5% (−0.035em); small uppercase labels carry wide positive tracking.

- **display** — 102.4px / 800 / 92.16px, −3.584px tracking. A 134.4px size (−4.704px) is used for the faded closing line.
- **tool-title** — 51.2px / 750 / 51.2px, −1.024px, in the tile's hue.
- **card-title** — 28px / 800 / 28px, −0.98px for resource cards ("Color Names").
- **lead** — 24px / 450 / 33.6px for the intro paragraph; the hero subline is 20px / 450 / 26px and tool descriptions 20px / 450 / 24px.
- **body** — 16px / 450 / 22.4px in #525252 for card descriptions.
- **eyebrow** — 14px / 500 / 19.6px, uppercase, 3.5px tracking, #737373.
- **tool-link** — 14px / 600 / 16.8px, uppercase, 1.4px tracking, in the tile's hue ("START THE GENERATOR →").
- **button** — 16px / 600 with a 46px line box; **button-secondary** 15px / 500 / 36px; **nav** 15px / 450.

The CSS also references IBM Plex Mono, Google Sans Code and Space Mono for code and hex values.

## Layout

At 1280px the page is 4,657px tall. The header is 60px tall, white, with a 1px rgba(0,0,0,0.07) bottom shadow line; logo at left, then Tools (dropdown), "Go Pro" in a warm accent, "Sign in" on a grey pill-ish 8px button and a blue "Sign up". The hero is a two-column split (text left, palette collage right). Content sections are a centered column with three-column card grids. Six header links are visible on desktop.

Gaps step by 10px: 10px, 20px, 30px, 50px and 70px (plus 76.8px). Paddings: 12px, 4px, 10px, 40px and 30px. Section eyebrows are centered and widely tracked, which gives the page its calm rhythm.

## Elevation & Depth

Almost flat. The header uses a hairline shadow (`rgba(0, 0, 0, 0.07) 0px 1px 0px 0px`), and inset rings of 1px and 2px in the same 7% black outline some controls. One element, the hero palette card, carries `rgba(0, 0, 0, 0.05) 10px -10px 20px 0px`. Tool tiles, resource cards and app cards have no shadow; they are separated by their fills.

## Shapes

Small, consistent radii. 8px is the most common (44 elements, including header buttons and the app links), 14px on the tool tiles, resource cards and Color of the Day card (18 elements), 10px on the primary CTA, 20px on the large hero palette card, and split radii — `10px 0 0 10px` and `0 10px 10px 0` — on the first and last swatch of each palette strip, so a row of colours reads as one rounded bar. 4px and 5px appear on small elements.

## Components

- **Primary button** — #2563eb, white Inter 16px/600, 10px radius, 0 21px padding, 46px tall; hover #1d4ed8.
- **Sign up button** — #2563eb, white 15px/500, 8px radius, 0 12px padding, 36px tall; hover #1d4ed8.
- **Grey button** — 6% black fill, black 14px/600 text, 8px radius ("Sign in", "Explore 10M+ Palettes").
- **Palette strip** — swatches side by side with 10px outer corners only.
- **Tool tile** — 100-level pastel fill, 14px radius, 40px padding, 51.2px/750 title, 20px/450 description and an uppercase 14px/600 link with an arrow, all in the matching 600-level hue.
- **Resource card** — #f5f5f5 fill, 14px radius, 30px padding, 28px/800 title, 16px/450 #525252 description.
- **Color of the Day card** — #f5f5f5 card, 14px radius, 40px padding, with a black swatch, hex code, name "Ink Black" (24px/750) and a short description; a handwritten "COLOR OF THE DAY" label with an arrow points at it.
- **Footer** — 1px rgba(0,0,0,0.07) top border, uppercase tracked column heads in #737373 (Tools, Discover, Apps, Company) and 14px/450 links.

## Design System Architecture

Coolors publishes no design system or brand guide that was found: https://coolors.co/about returned a "Page Not Found - Coolors" page whose only brand content was the creator credit and the logo file path. The de-facto system is in the shipped CSS: 400 root custom properties combining Tailwind's palette (`--color-blue-700`, `--color-neutral-600`, `--color-zinc-200` …), a duplicated "smart" palette (`--color-smart-primary-50` … `-900`, `--color-smart-red-400`, `--color-smart-lime-400`), a `--color-primary-*` ramp built on blue, and component tokens for buttons and inputs (`--button-gray-bg`, `--button-secondary-border`, `--button-transparent-selected-hover-bg`, `--input-border`, `--input-focus-border` #3b82f6, `--input-placeholder`). Build components from those named states.

## Do's and Don'ts

**Do**
- Set everything in Inter, using weight 450 for text and 750–800 with negative tracking for headings.
- Keep the page white and black and let palettes and tool tiles bring the colour.
- Give each tool its own hue: 100-level fill, 600-level text.
- Use #2563eb for primary actions and translucent-black fills for secondary ones.
- Round palette strips only at their outer ends.

**Don't**
- Don't add heavy shadows; the page uses hairlines and fills.
- Don't mix hues inside a tile.
- Don't document the BugHerd or Shutterstock placements as Coolors UI.
- Don't use the browser default link blue (#0000ee) that appears on an unstyled header anchor.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the hero h1 at 60px / 800 / 54px with −2.1px tracking (102.4px on desktop), the primary CTA unchanged (16px/600, 10px radius, 46px), 20px becoming the most frequent text size, and only 2 header links visible with a menu toggle present. The stylesheet's most-used media queries are `min-width 768px` (53 rules), `min-width 992px` (34) and `min-width 576px` (14). Other mobile behaviour was not measured.

## Iteration Guide

1. Load Inter (variable); set body to 16px/450 and ink #0a0a0a on #ffffff.
2. Build the hero h1 at 102.4px/800/92.16px with −3.584px tracking.
3. Primary button: #2563eb, white 16px/600, 10px radius, 46px tall, hover #1d4ed8; add a 6% black grey button beside it.
4. Add a centered uppercase eyebrow (14px/500, 3.5px tracking, #737373) above each section.
5. Build the eight tool tiles: 14px radius, pastel fill, 51.2px/750 title in the 600 hue, uppercase link.
6. Add #f5f5f5 resource cards (14px radius, 30px padding) with 28px/800 titles and a footer with a 7% black hairline.
7. Compare with https://coolors.co/ at 1280px and 390px, ignoring ads.
