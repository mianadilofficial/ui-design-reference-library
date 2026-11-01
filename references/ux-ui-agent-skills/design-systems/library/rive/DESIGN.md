---
version: alpha
name: Rive
category: "Design & Creative Tools"
description: "Rive's home page is a black #000000 Framer site with a game-UI flavour: uppercase Orbitron 900 headlines (40px, +0.4px tracking), Tomorrow uppercase labels and buttons (12px/500, +1.2px), Inter and Inter Display body copy in 60% white, dark #1d1d1d buttons with 4px corners (hover #222222), #111111/#121212 panels and small neon accents in orange #ffa41c, green #71ff19 and cyan #19f2ff."
colors:
  canvas: "#121212"
  page-body: "#000000"
  ink: "#ffffff"
  primary: "#1d1d1d"
  on-primary: "#ffffff"
  primary-hover: "#222222"
  surface-panel: "#111111"
  surface-card: "#262626"
  ink-60: "#ffffff99"
  ink-grey: "#999999"
  ink-warm: "#f2f0f0"
  ink-silver: "#aaaaaa"
  ink-soft: "#f1f1f1"
  field: "#ebebeb"
  accent-orange: "#ffa41c"
  accent-green: "#71ff19"
  accent-cyan: "#19f2ff"
typography:
  display:
    fontFamily: Orbitron, "Orbitron Placeholder", sans-serif
    fontSize: 40px
    fontWeight: 900
    lineHeight: 48px
    letterSpacing: 0.4px
    textTransform: uppercase
  display-mobile:
    fontFamily: Orbitron, "Orbitron Placeholder", sans-serif
    fontSize: 21px
    fontWeight: 900
    lineHeight: 26.25px
    letterSpacing: 0.21px
    textTransform: uppercase
  heading:
    fontFamily: Orbitron, "Orbitron Placeholder", sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 33.6px
    textTransform: uppercase
  label:
    fontFamily: Tomorrow, "Tomorrow Placeholder", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: 1.4px
    textTransform: uppercase
  body:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  body-dominant:
    fontFamily: Inter Display
    fontSize: 14px
    fontWeight: 400
  button:
    fontFamily: Tomorrow, "Tomorrow Placeholder", sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 14.4px
    letterSpacing: 1.2px
    textTransform: uppercase
  link:
    fontFamily: Inter, "Inter Placeholder", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
  input:
    fontFamily: "\"Inter Regular\", Inter, Inter, system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  text-link:
    textColor: "{colors.ink-grey}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  section-label:
    textColor: "{colors.accent-orange}"
    typography: "{typography.label}"
  text-input:
    backgroundColor: "{colors.field}"
    textColor: "{colors.page-body}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 15px
    height: 52px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-grey}"
    padding: 60px 40px
---

# Rive

## Overview

Rive is an interactive design and animation tool with native runtimes. Its home page (rive.app, 1280px wide, 5030px tall, `lang="en-US"`) borrows the look of a game interface: black background, wide techno display type in uppercase, small mono-flavoured labels with wide tracking, and neon accents used sparingly.

A black header carries the Rive "R" mark and uppercase menus (PRODUCTS, COMMUNITY, LEARN, PRICING, DOWNLOADS) set in Tomorrow, with "DOCS" and a dark "GET STARTED" button at right. The hero is split: on the left, a vertical strip of use-case tiles (GAME UI, MOBILE APPS, FILM + TV) with screenshots; on the right, the spaced-out RIVE wordmark, the headline "THE INTERACTIVE EXPERIENCE ENGINE", a paragraph, and a dark panel with two blocks — "RIVE CLI" with a macOS / Linux / Windows tab row and a `curl -fsSL https://releases.rive.app/cli/install.sh | sh` command, and "RIVE EDITOR" with "SIGN UP" and "DOWNLOAD DESKTOP APP" buttons — then a "Trusted by Spotify Wrapped, Duolingo…" line.

Below come "DESIGN, CODE, AND ANIMATE" beside an editor screenshot of a fighting-game UI, "BUILD ONCE, SHIP ANYWHERE" beside a grid of runtime icons (Web, iOS, macOS, Android, Flutter, React, React Native, Framer, Webflow, Wix Studio, C++, Defold, Unity, Unreal), a headline "PRODUCTS BUILT WITH RIVE REACH OVER 2 BILLION USERS WORLDWIDE" over a logo wall, a long grid of testimonial cards, a newsletter signup and a link-dense footer.

The voice is technical and direct: "No mockups, no prototypes, no handoff. The real thing.", "No silos."

## Colors

Measured on the rendered page (`web/data/extracted/rive.json`); the site's Framer colour tokens (`--token-<uuid>`) carry the same values.

- **page-body `#000000`** — the body and largest area (6425).
- **surface-panel `#111111`** (3380) and **canvas `#121212`** (950) — section panels and the CLI/editor panel; `#121212` is a declared token.
- **surface-card `#262626`** — image-card bottoms (604 by area).
- **ink `#ffffff`** — headlines and button labels (2969 characters).
- **ink-60 `#ffffff99`** — paragraph copy (1515 characters).
- **ink-grey `#999999`** — footer and secondary text (503); **ink-silver `#aaaaaa`** (token), **ink-warm `#f2f0f0`** (token, 316 characters) and **ink-soft `#f1f1f1`** for section headlines.
- **primary `#1d1d1d`** — every button ("GET STARTED", "SIGN UP", "DOWNLOAD DESKTOP APP", "LEARN MORE"); a declared token. Hover: **primary-hover `#222222`**.
- **field `#ebebeb`** — the light newsletter input.
- **accent-orange `#ffa41c`** — section labels such as "RIVE EDITOR" and "RIVE RUNTIMES" (24 characters).
- **accent-green `#71ff19`** (46 characters) and **accent-cyan `#19f2ff`** (8) — neon text accents.

Further declared tokens not measured as rendered text or fills: `#3084ff` (blue), `#ff483c` (red), `#f30058` (pink), and greys `#0c0c0c`, `#171717`, `#181818`, `#333`, `#555`, `#666`.

## Typography

Four families, each with a job:

- **Orbitron** (700, 900) — a wide geometric display face for uppercase headlines (163 characters), loaded from Google Fonts.
- **Tomorrow** (400, 500) — uppercase labels, navigation and buttons with wide tracking (744 characters), also from Google Fonts.
- **Inter Display** (400) — the most frequent family (2792 characters): testimonial and supporting text at 14px.
- **Inter** (400, 500, 600) — paragraphs (2045 characters).

A PragmataPro variable font is also loaded and measured in 74 characters (the CLI command).

Measured roles:

- **display** — Orbitron 40px / 900 / 48px, +0.4px tracking, uppercase: the hero headline.
- **heading** — Orbitron 24px / 700 / 33.6px, uppercase: section headlines ("DESIGN, CODE, AND ANIMATE").
- **label** — Tomorrow 14px / 500 / 14px, +1.4px, uppercase: "RIVE CLI", "RIVE EDITOR".
- **button** — Tomorrow 12px / 500 / 14.4px, +1.2px, uppercase: buttons and navigation.
- **body** — Inter 16px / 400 / 25.6px in 60% white.
- **body-dominant** — Inter Display 14px / 400: testimonials and card copy (14px is the most common size, 3135 characters).
- **link** — Inter 16px / 500 / 19.2px.
- **input** — 16px / 400 / 22.4px.

Small 11px text with +0.11px tracking (439 characters) carries testimonial handles and captions.

**Substitutes:** Orbitron, Tomorrow and Inter are open fonts available from Google Fonts; PragmataPro is commercial — any monospace can stand in for the CLI line.

## Layout

The page is one black band with content measured from x=188 to x=1140 (a 952px column, centred). Sections alternate a text column and a media column (hero tiles left / copy right; copy left / editor right; icons left / copy right). The testimonial area is a three-column grid of equal cards; the footer has six link columns (Product, Community, Learn, Company, Use Cases, Case Studies). The extractor counted at most 2 card columns in its card detection.

Spacing is compact: gaps of 10px (136 uses), 12px, 1px, 8px and 30px; paddings of 12px, 10px, 16px and 5px, with 60px around the footer (`60px 40px`). Section spacing is large black space rather than dividers.

## Elevation & Depth

No visible shadows were measured (the single recorded shadow is fully transparent). Depth comes from three dark steps — `#000000` page, `#111111`/`#121212` panels, `#1d1d1d`/`#262626` controls and cards — and from bright product screenshots (the fighting-game editor, phone mock-ups) set against black.

## Shapes

- **4px (xs)** — buttons and small controls; the dominant radius (71 uses).
- **5px (sm)** — tiles and tabs (36 uses).
- **8px (md)** — cards and the newsletter input (21 uses), including split corners `8px 8px 0px 0px` and `0px 0px 8px 8px` (9 each) where an image sits on top of a caption block.

Nothing on the page is a pill or a large rounded card; the shape language is tight and technical.

## Components

**Button** — `#1d1d1d`, white Tomorrow 12px/500 uppercase label with +1.2px tracking, 4px radius, `0px 16px`, 40px tall, often with a small leading icon. Hover `#222222`.

**CLI panel** — a dark panel with a "RIVE CLI" label, an OS tab row (macOS / Linux, Windows), the install command in a monospace face with a copy icon, then "RIVE EDITOR" and two buttons.

**Section header** — an orange `#ffa41c` Tomorrow label with an icon ("RIVE EDITOR", "RIVE RUNTIMES"), an Orbitron 24px uppercase headline, an Inter paragraph in 60% white and a pair of dark buttons.

**Use-case tile** — a screenshot above a centred uppercase label (GAME UI, MOBILE APPS, FILM + TV).

**Testimonial card** — dark card with avatar, name in uppercase, handle in 11px, and the quote in Inter Display 14px.

**Newsletter** — "JOIN OUR NEWSLETTER" heading, a light `#ebebeb` 52px input with 8px radius, and a "Sign Up" button.

**Footer** — black, six columns of underlined grey links, the RIVE wordmark, copyright and social icons.

## Design System Architecture

No public Rive brand or design-system page was found in the sources checked: https://rive.app/brand returned 404, and the home page HTML contains no brand, press or design-system link of Rive's own.

The site is built with Framer: assets come from `framerusercontent.com`, fonts include "Placeholder" fallback families that Framer generates, and the 29 root variables are Framer colour tokens named by UUID (for example `--token-f5fde02c-…: #1d1d1d`, `--token-86ae4b96-…: #ffa41c`, `--token-67615b29-…: #121212`). These tokens form the de-facto palette: a run of near-blacks and greys plus a small neon set (orange, green, cyan, blue, red, pink).

## Do's and Don'ts

**Do**
- Set headlines in Orbitron, uppercase, heavy (700–900), with slight positive tracking.
- Use Tomorrow uppercase with +1.2–1.4px tracking for labels, navigation and buttons.
- Keep body copy in Inter at 60% white on black.
- Use dark `#1d1d1d` buttons with 4px radius; hover `#222222`.
- Use the neon accents only for tiny labels and code highlights.

**Don't**
- Don't use pills or large radii; the measured maximum is 8px.
- Don't fill buttons with the neon accents.
- Don't set long paragraphs in Orbitron.
- Don't add drop shadows.
- Don't use the browser-default link blue measured on empty image links; it is not a Rive colour.

## Responsive Behavior

From the extractor's 390px pass: the hero headline measured Orbitron 21px / 900 with a 26.25px line height and +0.21px tracking (40px on desktop); paragraph copy measured 14px / 22.4px (16px / 25.6px on desktop); the "GET STARTED" button kept its 124px × 40px size and 4px radius. The extractor recorded 2 header links at 390px (5 on desktop) and no menu toggle. Content measured from x=20 to x=370. Breakpoint widths were not measured.

## Iteration Guide

1. Black page; Orbitron uppercase headlines; Inter body in `#ffffff99`.
2. Labels and buttons in Tomorrow uppercase with wide tracking.
3. Dark `#1d1d1d` buttons, 4px radius, 40px tall, with an icon.
4. Panels in `#111111`/`#121212`; cards with 8px corners split into image and caption.
5. Draw any colour from the Framer token set and confirm it against a measurement.
6. Run `node web/scripts/verify-designs.mjs --slug=rive` after changes.
