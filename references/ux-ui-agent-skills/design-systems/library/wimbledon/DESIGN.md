---
version: alpha
name: Wimbledon
category: "Sports & Fitness"
description: "The Championships, Wimbledon official site (wimbledon.com): white #ffffff canvas, #121619 ink, Wimbledon green #006633 for links and actions, deep green #0b2917 header and bands, purple #540082 Caslon eyebrows, cool grey #f2f4f8 layers. Gotham uppercase headings (40px/700, 32px/700 with tight negative tracking), Gotham 16px/24px body, 8px card radius."
colors:
  canvas: "#ffffff"
  ink: "#121619"
  primary: "#006633"
  on-primary: "#ffffff"
  brand-purple: "#540082"
  surface-dark-green: "#0b2917"
  surface-layer: "#f2f4f8"
  surface-grey: "#c1c7cd"
  ink-muted: "#697077"
  ink-sage: "#85948b"
  highlight-lime: "#cae86b"
  primary-hover: "#00552b"
typography:
  display:
    fontFamily: Gotham, "Gotham SSm A", "Gotham SSm B", -apple-system, system-ui, Arial, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 38px
    letterSpacing: "-1.2px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Gotham, "Gotham SSm A", "Gotham SSm B", -apple-system, system-ui, Arial, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 22.8px
    letterSpacing: "-0.72px"
    textTransform: uppercase
  heading:
    fontFamily: Gotham, "Gotham SSm A", "Gotham SSm B", -apple-system, system-ui, Arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 30.4px
    letterSpacing: "-3.072px"
    textTransform: uppercase
  eyebrow:
    fontFamily: ACaslonPro, "Adobe Caslon Pro", Caslon, Georgia, serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 0.28px
    textTransform: uppercase
  body:
    fontFamily: Gotham, "Gotham SSm A", "Gotham SSm B", -apple-system, system-ui, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.48px"
  nav:
    fontFamily: Gotham, "Gotham SSm A", "Gotham SSm B", -apple-system, system-ui, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16.8px
    letterSpacing: "-0.42px"
rounded:
  xs: 4px
  sm: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 14px
  s8: 16px
  s9: 17px
  s10: 24px
components:
  hero-link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
  nav:
    backgroundColor: "{colors.surface-dark-green}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.brand-purple}"
    rounded: "{rounded.sm}"
    padding: 48px 40px 40px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    textColor: "{colors.primary}"
---

# Wimbledon

## Overview

This is the official website of The Championships, Wimbledon (wimbledon.com), titled "Official Website by IBM",
measured on its home page outside the tournament fortnight. The design pairs a restrained, editorial sports-media
layout with the club's heritage colours: a deep green `#0b2917` header and feature bands, Wimbledon green `#006633`
for links and the footer, and purple `#540082` reserved for small serif eyebrow labels. Everything else is white
`#ffffff` and near-black `#121619`.

The capture runs: a dark green header with a menu icon, three links (Tickets, Museum and Tour, Shop), the centred
crossed-rackets emblem with the dates "28 June – 11 July 2027", and the IBM logo plus an account icon on the
right; a full-bleed hero photograph of a champion with the plate, titled "TICKETS FOR THE CHAMPIONSHIPS 2027" with a
"View options" link and a Rolex clock panel; "THE CHAMPIONSHIPS / EDITOR'S PICKS", a row of four media cards with
type labels (NEWS, PRESS RELEASE, FEATURE), dates and read times; an illustrated band with a white floating card
"MAKING A DIFFERENCE / THE WIMBLEDON FOUNDATION"; a dark green "MYWIMBLEDON EXCLUSIVES" video row; a "SHOP /
WIMBLEDON WHITES" split; "NEWS AND INFORMATION / LATEST" with rows of news, video and highlights; a "TICKET
OPTIONS" image carousel (Ballot, Hospitality, Debentures, The Queue); a museum band with another floating card; and
a slim footer with the emblem and IBM logo.

Headings are short uppercase labels; each section has a two-line lockup — a purple Caslon eyebrow over a bold
Gotham title. Card copy is factual and newsroom-like ("Remembering Elena Pero").

## Colors

- **Canvas `#ffffff`** — the main page background.
- **Ink `#121619`** — body text and dark headings (`--wdl-text-primary`).
- **Primary `#006633`** — Wimbledon green. Declared as `--wdl-button-primary`, `--wdl-text-brand-01` and
  `--wdl-highlight-brand-01`; measured as the colour of the footer links and the green "Discover the Foundation" /
  "Find out more" links. No filled button was detected on the home page, so primary is taken from this role
  rather than from a CTA fill.
- **Primary hover `#00552b`** — declared `--wdl-button-primary-hover` and `--wdl-link-primary-hover`.
- **On-primary `#ffffff`** — white text on green and dark-green surfaces.
- **Brand purple `#540082`** — the eyebrow labels ("THE CHAMPIONSHIPS", "MAKING A DIFFERENCE"); declared
  `--wdl-highlight-brand-02` and `--wdl-border-brand-02`.
- **Surface dark green `#0b2917`** — header and the "MYWIMBLEDON EXCLUSIVES" band (`--wdl-background-inverse-01`).
- **Surface layer `#f2f4f8`** — cool grey card and section layers (`--wdl-layer-02`, `--wdl-layer-hover-01`).
- **Surface grey `#c1c7cd`** — a measured background area of image placeholders and tiles.
- **Ink muted `#697077`** — dates, read times and secondary labels (`--wdl-text-secondary`).
- **Ink sage `#85948b`** — muted text on dark green.
- **Highlight lime `#cae86b`** — `--wdl-highlight-brand-07`, measured as a small amount of text.

Measured hover: header links drop to 50% opacity. One box shadow, `rgba(0, 0, 0, 0.15) 0px 2px 5px 0px`, was
recorded on nine elements.

## Typography

Fonts are served from the Next.js static media folder:

- **Gotham** (Book 400, Medium 500, Bold 700) — the main family. Section titles are uppercase Bold: 40px / 38px
  with -1.2px tracking ("EDITOR'S PICKS", "LATEST"), and 32px / 30.4px for feature titles; the hero title uses an
  extra-tight -3.072px tracking. Body copy is 16px / 24px with -0.48px tracking; navigation 14px / 500 with -0.42px.
  Every Gotham size carries negative tracking of about -0.03em (20px/-0.6px, 12px/-0.36px).
- **ACaslonPro** (Adobe Caslon Pro, 400) — the heritage serif, used only for the small uppercase eyebrows: 14px /
  14px with +0.28px tracking.

By character count, 20px is the most common size, then 16px, 14px and 12px; display sizes are 32px,
40px and 42px. Weight 500 slightly outnumbers 400.

Substitutes: Montserrat-like geometric sans for Gotham; any classic Caslon for the eyebrows (the site's stack falls
back to Georgia).

## Layout

The desktop viewport measured 1280px. The page alternates full-bleed image bands with white content bands inside a
centred column. Media rows show four to five cards with the last one cropped at the right edge of
the viewport. Floating white cards (8px radius, 48px 40px 40px padding) sit centred over illustrated or photographic
bands. Gaps are 8px (most frequent), 16px, 4px, 24px and 32px; section padding 64px and 80px. Section headings are
centred; card rows are left-aligned under a small "Featured" or "Latest News →" label.

## Elevation & Depth

Mostly flat. The single measured shadow, `rgba(0, 0, 0, 0.15) 0px 2px 5px 0px`, is soft and small. Depth comes
from floating white cards over full-bleed imagery, and from the dark green bands set against white.

## Shapes

Cards and thumbnails use an 8px radius (the most frequent value); 4px on small controls; fully round pills on play
buttons and small chips. The crossed-rackets emblem and circular icon buttons add round accents.

## Components

- **Header** — `#0b2917` bar, white Gotham 14px / 500 links, centred emblem with dates, IBM logo; links fade to 50%
  opacity on hover.
- **Section lockup** — purple ACaslonPro 14px uppercase eyebrow over a Gotham 40px / 700 uppercase title.
- **Media card** — 8px-rounded thumbnail (with a play icon for video), a tiny uppercase type label, a Gotham
  title, and a date with read time or duration in `#697077`.
- **Floating feature card** — white, 8px radius, 48px 40px 40px padding, purple eyebrow, Gotham title, short
  paragraph, green text link with an arrow.
- **Hero link** — white Gotham 32px / 700 uppercase title over the photo with a small "View options →" link.
- **Ticket options carousel** — tall photographs with a label and arrow beneath each.
- **Footer** — emblem and IBM logo left, social icons right, green Gotham 14px / 500 links.

## Design System Architecture

No public Wimbledon design system could be opened (https://www.wimbledon.com/press returned 404; see SOURCES.json).
The shipped site at https://www.wimbledon.com/ exposes its token layer as CSS variables in two prefixes: `--wdl-*`
brand and semantic tokens (`--wdl-text-primary`, `--wdl-text-secondary`, `--wdl-button-primary`,
`--wdl-button-primary-hover`, `--wdl-link-primary-hover`, `--wdl-layer-01…03`, `--wdl-background-inverse-01`,
`--wdl-highlight-brand-01…10`, `--wdl-focus: #0f62fe`) and `--cds-*` layout and layer tokens (`--cds-grid-gutter:
2rem`, `--cds-layout-size-height-xl`, `--cds-border-strong`). Brand roles are numbered: brand-01 green `#063`,
brand-02 purple `#540082`, with gold (`--wdl-text-brand-03: #9b8148`) and stone tones further down the ramp.

## Do's and Don'ts

**Do**
- Pair every section title with a purple Caslon eyebrow.
- Use Wimbledon green `#006633` for links and actions and `#0b2917` for dark bands.
- Set Gotham headings in uppercase bold with negative tracking.
- Keep cards at 8px radius and float them over imagery.
- Keep the page mostly white so photography and the greens carry the identity.

**Don't**
- Don't use purple for large fills or body text; it appears only in eyebrows on the measured page.
- Don't set Caslon at large sizes; it is measured only at 14px.
- Don't add heavy shadows.
- Don't use positive tracking on Gotham; every measured Gotham size tracks negative.

## Responsive Behavior

From the extraction's mobile pass:

- The hero title "TICKETS FOR THE CHAMPIONSHIPS 2027" measured Gotham 24px / 500 / 22.8px with -0.72px tracking
  (32px / 700 on desktop).
- Body copy measured 14px on mobile (16px on desktop).
- A menu toggle labelled "Open menu" is visible at both widths; visible header links drop from 6 to 3.
- The mobile header shows the dates "28 June - 11 July 2027" in Gotham 12px / 500.
- The most-read mobile sizes were 14px, 16px, 12px and 24px.

Breakpoints and card-row reflow were not measured.

## Iteration Guide

1. White canvas, `#121619` ink, Gotham in three weights, Caslon for eyebrows only.
2. Build each section as eyebrow + uppercase Gotham title + card row.
3. Use `#0b2917` bands to punctuate the page and `#006633` for every link.
4. Cards: 8px radius, thumbnail first, small uppercase type label, title, muted meta line.
5. Pull new values from the `--wdl-*` variables; measure before adding anything else.
