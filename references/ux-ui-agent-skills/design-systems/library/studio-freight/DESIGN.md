---
version: alpha
name: Studio Freight
category: "Agencies & Studios"
description: "Studio Freight's home page is a single warm off-white #fefdfc screen scattered with project thumbnails around a centred 'Moving Missions Forward' in Jannon (jjannon-regular) at 40.5px, with all chrome in Publico Text Mono at 14px/15.68px (+0.14px) rendered black through mix-blend-mode: difference, a 12px layout margin, 8px column gap, square 0px corners and a declared #00ff6a green and #457db6 blue."
colors:
  canvas: "#fefdfc"
  ink: "#000000"
  primary: "#000000"
  ink-blend: "#fefdfc"
  dark-grey: "#1a1a1a"
  grey: "#0000001f"
  green: "#00ff6a"
  blue: "#457db6"
typography:
  display:
    fontFamily: jjannon-regular
    fontSize: 40.5px
    fontWeight: 400
    lineHeight: 46.98px
  display-mobile:
    fontFamily: jjannon-regular
    fontSize: 26px
    fontWeight: 400
    lineHeight: 32.24px
  body:
    fontFamily: publico-text-mono-semibold
    fontSize: 14px
    fontWeight: 400
    lineHeight: 15.68px
    letterSpacing: 0.14px
  nav:
    fontFamily: publico-text-mono-roman
    fontSize: 14px
    fontWeight: 400
    lineHeight: 15.68px
    letterSpacing: 0.14px
  menu-mobile:
    fontFamily: publico-text-mono-roman
    fontSize: 56px
    fontWeight: 400
    lineHeight: 44.8px
    letterSpacing: 1%
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 12px
  s2: 40px
components:
  nav:
    textColor: "{colors.ink-blend}"
    typography: "{typography.nav}"
    padding: 12px
  nav-link:
    textColor: "{colors.ink-blend}"
    typography: "{typography.nav}"
  wordmark:
    textColor: "{colors.ink-blend}"
    typography: "{typography.body}"
  project-thumb:
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.ink-blend}"
    typography: "{typography.nav}"
    padding: 12px 0px
---

# Studio Freight

## Overview

Studio Freight (studiofreight.com, page title "Studio Freight") describes itself on its Info page as a creative studio that "delivers brands, digital experiences, campaigns, and special projects", organised into Strategy ("We help brands find their promise and evangelize what makes them valuable"), Design ("We create visuals, systems, and experiences that make brands clear, relevant, and compelling"), Experience and "Mettle". It says it works with "category leaders, renegade startups, eccentric celebrities, and modest operators", naming clients such as Brex, Mercury, La Marzocco, Dragonfly and Easol.

The home page is one viewport tall (800px measured scroll height) and works like a pinboard. The capture shows a warm off-white page with a black horse-and-rider mark at top left, "• Home" near the left third, "Work, Info, News, Aeon" right of centre and "Contact" at the far right — all in a small monospaced face. Around the centred serif line "Moving Missions Forward", rectangular project thumbnails are scattered across a grid, leaving gaps: a view of Earth from space, a dotted "SF" mark, a billboard, a "BAD BOYS" T-shirt, tabs packaging, a Morph headphone campaign, an anime eye with an "IRYS" iris, a yellow-green abstract. The bottom line holds "IG / LI" at left, "Studio Freight" centred, and "©2026 / Terms" at right.

The voice is terse and lower-key; the work carries the colour, from black-and-white photography to acid green and orange graphics.

## Colors

- **Canvas `#fefdfc`** — a warm off-white, the body and container background (`--white: #fefdfc`, also expressed as `hsla(30,50%,99%,…)` alpha steps).
- **Ink `#000000`** — the colour the visitor actually sees for all text. The body's computed text colour is rgb(0, 0, 0) (`--black: #000`). The header, H1 and footer are set to #fefdfc with `mix-blend-mode: difference` (recorded by probe); difference blending outputs the absolute difference of the two colours, so over the #fefdfc canvas the text resolves to black (as the capture shows) and over a dark thumbnail it turns light.
- **Ink-blend `#fefdfc`** — the declared colour of those blended elements, which the extractor measured as their text colour.
- **Primary `#000000`** — the site has no buttons; actions are text links in the blended chrome, which render black on the canvas.
- **Dark-grey `#1a1a1a`**, **grey `#0000001f`** — declared neutrals (`--dark-grey`, `--grey`), with alpha ladders `--dark-grey-5` … `--dark-grey-95` and `--grey-10` … `--grey-90`.
- **Green `#00ff6a`** and **blue `#457db6`** — declared accents (`--green`, `--blue`) with alpha steps (`--green-60/70/95`, `--blue-5` … `--blue-90`). Neither rendered on the measured home page.

## Typography

Three self-hosted families, each loaded as a separate file from https://studiofreight.com/fonts/ and all computed at weight 400 (the semibold is its own family):

- **jjannon-regular** (`jjannon-regular.woff2`) — a Jannon serif for the display line: "Moving Missions Forward" (h1) at 40.5px, line-height 46.98px, normal tracking. On mobile, 26px/32.24px.
- **publico-text-mono-roman** (`publico-text-mono-roman.woff2`) — Publico Text Mono for navigation and footer: 14px/15.68px with +0.14px letter-spacing (1%), with `text-transform: capitalize` in the header.
- **publico-text-mono-semibold** (`publico-text-mono-semibold.woff2`) — the heavier mono for the "Studio Freight" wordmark line, same 14px/15.68px/+0.14px metrics.

A `Times` fallback appears only on an image link. On the mobile pass a menu item "CONTACT" measured 56px/44.8px uppercase in Publico Text Mono with 1% tracking. The pairing is classical serif for the single statement and typewriter-like mono for every functional label.

## Layout

The root declares a fluid column system: `--layout-margin: 12px`, `--layout-columns-gap: 8px`, `--layout-columns-count: 6`, `--layout-width: calc(100vw - var(--layout-margin)*2)` and `--layout-column-width` derived from them. `--header-height` is 64px. The spacing scale is a named list of spacers: 2, 4, 6, 8, 12, 16, 24, 32, 40, 48, 64, 88, 104, 112, 128, 144, 164, 188 and 288px.

In the capture the thumbnails sit in a regular grid of equal cells — seven across at the captured width — with some cells left empty so the arrangement looks scattered; the H1 occupies the centre. Header and footer are single lines pinned to the top and bottom with 12px padding, so the whole page fits one screen. Measured gaps are 12px (8 elements); paddings are 12px and 40px.

## Elevation & Depth

None. No box-shadow, no border colour and no radius are measured. The page's one layering effect is the blend mode: chrome and headline sit above the imagery with `mix-blend-mode: difference`, so text stays legible whether it crosses the off-white ground or a thumbnail. Thumbnails sit flat on the canvas.

## Shapes

Everything is rectangular. `borderRadii` in the extraction is empty — every element computes 0px — so the only radius token is `none: 0px`. Thumbnails are landscape rectangles of identical size. The logo is a 40×40 raster mark (`/images/mark.png`) of a horse and rider; there are no icons, and separators are typographic (", " between nav items, " / " in the footer, "•" before "Home").

## Components

- **Header** — `site-header`, 12px padding, Publico Text Mono 14px, capitalised: mark, "• Home", "Work, Info, News, Aeon" as a comma-separated list, "Contact". Blend mode `difference`.
- **Display line** — a single centred serif sentence (h1, `.title`), 40.5px Jannon, also blended.
- **Project thumbnail** — a fixed-size landscape image cell in the grid, square corners.
- **Footer** — `footer footer--index`, 12px vertical padding: "IG / LI" left, "Studio Freight" centre (semibold mono), "©2026 / Terms" right. Footer links underline on hover.

## Design System Architecture

No public Studio Freight design system or brand guideline was found; the Info page (https://studiofreight.com/info) links only to Instagram, LinkedIn, news articles and Terms. The de-facto system is visible in the shipped CSS custom properties: base colours (`--white`, `--black`, `--dark-grey`, `--grey`, `--green`, `--blue`) each with an alpha ladder in 5% steps, a layout grid defined by `--layout-margin`, `--layout-columns-gap`, `--layout-columns-count` and calculated column width, a named spacer scale (`--spacer-2` … `--spacer-288`), and easing curves (`--ease-in-out-back`, `--ease-out-quad`, `--ease-in-out-quart` and others). Class names show a theme switch (`theme-light`) and the Lenis smooth-scroll wrapper (`lenis`). The stylesheet's breakpoints are `max-width: 899px` (1,075 rules) and `min-width: 900px` (157), plus 1080px, 1920px and 380px.

## Do's and Don'ts

**Do**
- Keep the page to one warm off-white ground (#fefdfc) and let thumbnails carry colour.
- Set all functional text in Publico Text Mono 14px with +0.14px tracking; capitalise nav items.
- Use a single serif statement (Jannon) at the centre.
- Use `mix-blend-mode: difference` on chrome so it inverts over imagery.
- Lay thumbnails on the column grid (12px margin, 8px gap) and leave cells empty for rhythm.
- Separate links with commas and slashes rather than boxes.

**Don't**
- Don't add buttons, cards, shadows or rounded corners.
- Don't use bold weights; use the semibold mono family only for the wordmark line.
- Don't use the declared green or blue for chrome on the home page; they did not render there.
- Don't make the home page scroll; it fits one screen.

## Responsive Behavior

Measured at 390px wide:

- The H1 becomes 26px/32.24px (desktop 40.5px/46.98px).
- The header shows "Home" and "Menu" with 12px 12px 18px padding (desktop: full nav list); 3 header links are counted visible.
- A menu item "CONTACT" measured 56px/44.8px uppercase mono with 1% tracking, black.
- Measured mobile sizes are 56px, 14px, 26px and 16px.
- `maxCardColumns` is 1.

The main CSS breakpoint is 899/900px. Layout between 390px and 1280px was not measured.

## Iteration Guide

1. Set the body to #fefdfc with black text and a 12px layout margin, 8px column gap.
2. Load jjannon-regular for the one display line and Publico Text Mono (roman and semibold) for everything else, all at weight 400.
3. Pin a 12px-padded header and footer of 14px mono text with comma/slash separators.
4. Apply `mix-blend-mode: difference` with #fefdfc text to header, footer and headline.
5. Fill a grid of equal landscape thumbnails around a centred 40.5px serif sentence, leaving gaps.
6. Keep every corner square and add no shadows.
7. On mobile, reduce the headline to 26px and collapse the nav to "Home" and "Menu".
