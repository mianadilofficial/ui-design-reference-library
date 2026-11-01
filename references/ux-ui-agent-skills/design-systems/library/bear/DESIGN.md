---
version: alpha
name: Bear
category: "Productivity & SaaS"
description: "Bear's bear.app is a light, illustrated note-app site: bearsansheadline 51.2px/400 headlines and bearsans 16px/25.6px body in #444444 on white, a single red accent #dd4c4f (--accent-color), section titles in blue #456aa3, green #2b6451 and purple #884aa8 over soft colour blobs, and white 16px-radius cards with a rgba(0, 0, 0, 0.12) 0px 13px 34px shadow."
colors:
  canvas: "#ffffff"
  ink: "#444444"
  primary: "#dd4c4f"
  ink-secondary: "#888888"
  surface-secondary: "#f3f5f7"
  surface-tertiary: "#e4e5e6"
  hairline: "#d9d9d9"
  title-blue: "#456aa3"
  title-green: "#2b6451"
  title-purple: "#884aa8"
  blob-yellow: "#fcb827"
  blob-blue: "#44a2e5"
  blob-lime: "#d3ffa4"
typography:
  display:
    fontFamily: bearsansheadline
    fontSize: 51.2px
    fontWeight: 400
    lineHeight: 56.32px
  display-mobile:
    fontFamily: bearsansheadline
    fontSize: 41.6px
    fontWeight: 400
    lineHeight: 45.76px
  heading:
    fontFamily: bearsansheadline
    fontSize: 41.6px
    fontWeight: 400
    lineHeight: 45.76px
  body:
    fontFamily: bearsans
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  nav:
    fontFamily: bearsans
    fontSize: 19.2px
    fontWeight: 700
    lineHeight: 27.2px
  footer:
    fontFamily: bearsansheadline
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28.8px
  input:
    fontFamily: bearsans
    fontSize: 17.6px
    fontWeight: 400
rounded:
  xs: 3.84px
  sm: 4.32px
  md: 4.8px
  lg: 8px
  xl: 8.64px
  2xl: 8.8px
  3xl: 16px
  4xl: 40px
spacing:
  s1: 3.84px
  s2: 4.8px
  s3: 5.76px
  s4: 8px
  s5: 8.64px
  s6: 12.8px
  s7: 16px
  s8: 19.2px
  s9: 21.12px
  s10: 30.72px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    height: 64px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.2xl}"
    padding: 0px 17.6px
    height: 44px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
    padding: 32px
    boxShadow: rgba(0, 0, 0, 0.12) 0px 13px 34px 0px
  footer:
    textColor: "{colors.ink}"
    typography: "{typography.footer}"
    padding: 0px 32px
---

## Overview

Bear is a Markdown notes app for Apple devices made by Shiny Frog, and bear.app (measured title "Bear - Markdown Notes") presents it with a soft, friendly, illustrated style. The desktop capture opens on white: a small red bear-head logo and "Bear" at the top left, five header links at the top right ("Features", "Pricing", "Blog", "Community", "Support"), then a centred headline "Markdown notes you'll love", a Mac / iPhone / iPad switcher and a black "Download on the Mac App Store" badge. A large screenshot of the three-pane app (sidebar, note list, a "Polar Bears" note with a photo and table) follows, then three laurel-wreath award marks (Editors' Choice, Apple Design Award, App of the Year) and a small astronaut-bear illustration.

The middle of the page is a series of feature sections — "Write naturally", "Seamless Markdown", "Organize easily", "Universal beauty", "Private security" — each set against a large organic colour blob (sky blue, purple, sage, yellow) with a floating app fragment and a short bulleted list. Section titles take the colour of their blob family: blue, purple, green. "And so much more" is a grid of feature cards (Export, OCR search, iCloud sync, Sketch your notes, Resize and crop images with a panda photo). A two-card "Price" comparison (Free vs Bear PRO with a red "PRO" tag and "$2.99/month · $29.99/year"), a fishing-bear illustration, "Join the community" quotes, "The Bear newsletter" with an email field and red button, and a five-column footer close the page.

The voice is light and warm — "Bear is a beautiful, powerfully simple Markdown note taking app to capture, write, and organize your life." — with a hint of whimsy in the illustrations.

## Colors

The site declares its palette in root variables: `--background-color: #fff`, `--background-secondary-color: #F3F5F7`, `--background-tertiary-color: #E4E5E6`, `--text-color: #444444`, `--text-secondary-color: #888888`, `--text-tertiary-color: #d9d9d9`, `--stroke-color: #D9D9D9` and `--accent-color: #DD4C4F`.

- **Canvas `#ffffff`** — the page.
- **Secondary surface `#f3f5f7`** — panels behind screenshots and the pricing area; second-largest measured background.
- **Ink `#444444`** — almost all text; **`#888888`** for sublines.
- **Primary / accent `#dd4c4f`** — Bear red: the logo, inline links, the "PRO" tag and the newsletter button.
- **Section title colours** — `#456aa3` (blue, "Seamless Markdown"), `#2b6451` (green) and `#884aa8` (purple), measured as text colours.
- **Blob accents** — `#fcb827` yellow, `#44a2e5` blue and `#d3ffa4` lime were measured as small CSS background areas; the large organic blobs were not measured as CSS backgrounds.
- **Hairline `#d9d9d9`** — input border and strokes.

## Typography

Bear uses two custom families, loaded as `bearsans` (400 and 700) and `bearsansheadline` (400), and declares them as `--text-font` and `--heading-font`; code is declared as `--code-font: "roboto-mono"`. The commercial names behind these aliases are not exposed in the measured CSS.

| Role | Family | Size / line-height | Weight |
|---|---|---|---|
| Display (h1) | bearsansheadline | 51.2px / 56.32px | 400 |
| Heading (h2) | bearsansheadline | 41.6px / 45.76px | 400 |
| Body | bearsans | 16px / 25.6px | 400 |
| Nav | bearsans | 19.2px / 27.2px | 700 |
| Input | bearsans | 17.6px | 400 |
| Footer | bearsansheadline | 16px / 28.8px | 400 |

Sizes are multiples of 3.2px (16, 19.2, 22.4, 41.6, 51.2) plus 17.6px, 30.4px, 24px, 40px, 20px and 12.8px. Headlines are never bold — the headline face is used at 400 — while nav and inline emphasis use bearsans 700. One letter-spacing value was measured: 0.5px on 16px text (nine characters).

**Substitutes:** none named by the site. Use a humanist sans at 400 for headlines and the same family at 400/700 for text; keep headlines unbolded.

## Layout

Content sits in a centred column; the desktop hero band spans x=160 to x=1120 of the 1280px viewport. Feature sections alternate the app fragment and the text block left and right around the colour blobs. The "And so much more" grid and the pricing cards are measured at up to three columns. Padding values follow the same 3.2px-derived scale — 19.2px and 12.8px (14 each), 32px (13), 40px, 21.12px, 48px — and gaps are 32px, 64px and 80px. The header is 64px tall.

The page is airy: each feature gets a full viewport-height block with a short heading, one sentence and three or four bullets.

## Elevation & Depth

One shadow is used throughout: `rgba(0, 0, 0, 0.12) 0px 13px 34px 0px` (three elements, including the card role). It is large and diffuse, so cards appear to hover above the illustrated backgrounds. Everything else is flat; depth also comes from overlapping screenshots and the illustrated blobs.

## Shapes

Radii are soft: 40px (four instances), 16px (cards), 8.8px (the email input), 8.64px, 8px, and small 4.8px, 4.32px and 3.84px radii on tags and inline elements. The colour blobs are freeform organic shapes rather than geometric containers. App screenshots show the macOS window's own rounded corners.

## Components

- **Floating card** — white, 16px radius, 32px padding, the 0.12-alpha 13px/34px shadow, holding an app fragment (editor, sidebar, lock screen).
- **Text link** — `#dd4c4f`, 16px bearsans, no underline in the capture.
- **Header** — 64px, white, logo at left, bearsans 19.2px/700 links in `#444444` at right; the desktop pass counted six visible links and a "Bear" menu toggle.
- **Email input** — white, 1px `#d9d9d9` border, 8.8px radius, 0 17.6px padding, 44px tall, 17.6px text.
- **Pricing card** — white card with a feature checklist; the Pro card carries a red "PRO" tag and a price with a green "save" badge (capture).
- **Feature bullet list** — small red check or dot markers before 16px lines (capture).
- **Award row** — three laurel-wreath marks with small captions (capture).
- **Footer** — five link columns in bearsansheadline 16px/28.8px, 0 32px padding, with "Shiny Frog © 2025".

## Design System Architecture

No public design system, press kit or brand guideline was found: the footer of https://bear.app/ links to help docs, contact, API docs, community, blog, wallpapers and the developer's site (https://www.shinyfrog.net/), and the page names no typefaces. The site does ship a small semantic token layer of eleven root variables — three backgrounds (`--background-color`, `--background-secondary-color`, `--background-tertiary-color`), three text colours (`--text-color`, `--text-secondary-color`, `--text-tertiary-color`), `--stroke-color`, `--accent-color`, and three font roles (`--text-font`, `--heading-font`, `--code-font`). Sizes and spacing follow a 3.2px-step scale in the computed CSS.

## Do's and Don'ts

**Do**
- Keep the page white with `#444444` text and `#888888` sublines.
- Use Bear red `#dd4c4f` sparingly — logo, links, the PRO tag, one button.
- Colour each feature's title to match its blob family (`#456aa3`, `#2b6451`, `#884aa8`).
- Float white 16px-radius cards with the single soft 13px/34px shadow over illustrated backgrounds.
- Set headlines in the headline face at weight 400.

**Don't**
- Don't bold headlines.
- Don't add more shadow styles; the site has one.
- Don't use red for large fills or section backgrounds.
- Don't use hard geometric blocks behind features — the blobs are organic.
- Don't switch to dark backgrounds; the measured page has none.

## Responsive Behavior

Measured at 390px: the h1 drops from 51.2px to 41.6px (line-height 45.76px) and section h2s stay at 41.6px; body stays 16px/25.6px; nav stays 19.2px/700. The header background becomes `#ffffffcc` (80% white) at 390px, and the extractor counted seven visible header links plus the "Bear" menu toggle. Card rows were measured at up to two columns (three on desktop), and the hero content spans x=32 to x=367. Breakpoints in the stylesheet include `max-width 299px`, `375px`, `414px`, `640px`, `832px`, `880px` and `min-width 300px`, `400px`, `512px`, `592px`, `640px`, `677px`, `800px`, `832px`, `960px`. Other reflow was not measured.

## Iteration Guide

1. White canvas, `#444444` text in bearsans 16px/25.6px.
2. Headlines in bearsansheadline 400 at 51.2px (41.6px on mobile) and 41.6px for sections.
3. One red accent `#dd4c4f` for links and the single key action.
4. Build each feature as an organic colour blob + floating white card (16px, 32px padding, soft shadow) + coloured title + short bullets.
5. Keep sizes and spacing on the 3.2px scale (12.8, 16, 19.2, 32, 41.6, 51.2).
6. Use the eleven root variables for any new surface or text colour.
