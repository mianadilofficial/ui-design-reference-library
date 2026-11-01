---
version: alpha
name: Ben & Jerry's
category: "Food & Beverage"
description: "Ben & Jerry's US site (benjerry.com): white #ffffff canvas, near-black #141414 ink, sunflower-yellow #ffbc0e pill CTAs (80px radius, hover #fed831), a sky-blue #c4e7f3 values band, navy #201460 activism band, deep green #2a5729 footer and #002f87 links. Chunk ReThunk slab headings (48/36/24px) over Proxima Nova 20px/32px body."
colors:
  canvas: "#ffffff"
  page-largest: "#2a5729"
  ink: "#141414"
  primary: "#ffbc0e"
  on-primary: "#141414"
  primary-hover: "#fed831"
  surface-sky: "#c4e7f3"
  surface-sky-light: "#edf8fb"
  surface-navy: "#201460"
  link-blue: "#002f87"
  ink-muted: "#595959"
typography:
  display:
    fontFamily: "\"Chunk ReThunk\", sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 64px
  display-mobile:
    fontFamily: "\"Chunk ReThunk\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  heading:
    fontFamily: "\"Chunk ReThunk\", sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 48px
  subheading:
    fontFamily: "\"Chunk ReThunk\", sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
  body:
    fontFamily: "\"Proxima Nova\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: "\"Proxima Nova\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 12px
  lg: 80px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 28px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 16px 32px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-white:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 16px 32px
    height: 56px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 58px
    borderColor: "{colors.ink-muted}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
---

# Ben & Jerry's

## Overview

This is the US Ben & Jerry's site (benjerry.com), measured on its home page. It is cheerful, illustrated and loud
in the best sense: chunky slab headlines, saturated colour bands, hand-drawn illustration and a mission-forward
voice. Underneath that energy is a tidy system — a white canvas, near-black `#141414` text, one sunflower-yellow
`#ffbc0e` pill button style repeated everywhere, and full-width colour bands that change mood section by section.

The capture runs: a white header with the oval Ben & Jerry's logo at left and dropdown menus (Ice Cream Flavors,
Shops & Catering, Where to Buy, Activism), search and a menu icon; a hero promoting the podcast "Listen to Into
the Mix!" on a yellow field beside a rainbow podcast artwork, with a white "Listen Now!" pill; "Where to Buy" with
two rounded image cards and yellow pills ("Get Ice Cream", "Find Shops & Catering"); a navy "Get Involved" band with
an illustration of many hands holding the Earth; "Top Stories", three dated article cards with "Read More" links; a
sky-blue values band ("We love making ice cream – but using our business to make the world a better place gives
our work its meaning") with three round icons; and a deep green footer with email sign-up, social icons and
link columns, guarded by an illustrated cow with a megaphone.

The voice is first-person plural, playful and activist: "Pumpkins? Costumes? Haunted houses? What's on your scary
season bucket list this year? (Spoiler: Ours is heavy on the ice cream treats.)", "It's Like Dessert For Your Inbox".

## Colors

- **Canvas `#ffffff`** — header, "Where to Buy" and "Top Stories" sections.
- **Ink `#141414`** — the most-read text colour; also the CTA label colour.
- **Primary `#ffbc0e`** — the sunflower-yellow fill of every primary pill ("Get Ice Cream", "Find Shops &
  Catering", "Learn More About Our Values"). Hover lightens it to **`#fed831`** (measured).
- **Page largest `#2a5729`** — the deep green footer, the largest measured background area.
- **Surface sky `#c4e7f3`** — the values band; **surface sky light `#edf8fb`** a paler companion surface.
- **Surface navy `#201460`** — the "Get Involved" activism band, with white text.
- **Link blue `#002f87`** — underlined text links ("Read More", "Product Sourcing") and skip links. The site's
  Bootstrap layer sets `--bs-primary` to this value and `--bs-link-hover-color` to `#001d54`.
- **Ink muted `#595959`** — small secondary text such as article dates, and the email input border.

The white "Listen Now!" pill measured a hover fill of `rgb(240, 240, 240)`. Other Bootstrap variables in the
stylesheet (`--bs-info`, `--bs-purple` and the like) are framework defaults, not brand colours, and are omitted.

## Typography

Two webfonts are served from the site's `bnj-brand-assets` module:

- **Chunk ReThunk** — a heavy, rounded slab used for all headings at weight 500: hero 48px / 64px, section titles
  36px / 48px, card titles and footer headings 24px / 36px. A 40px size carries the long values statement.
- **Proxima Nova** — the dominant face by character count. Body copy is unusually large at 20px / 32px; buttons
  set it at 20px / 600 with a 20px line height; small dates and eyebrows use 14px with 0.672px tracking.

By character count, 20px dominates, then 24px, 14px, 40px, 36px and 48px. Headline tracking is normal throughout;
the only measured tracking is on the 14px labels.

Substitutes: a rounded heavy slab serif for Chunk ReThunk and a geometric-humanist sans for Proxima Nova (the site
falls back to Helvetica and Arial).

## Layout

The desktop viewport measured 1280px and the page scrolls to under four screens. Sections are full-width colour
bands with content in a left-aligned column: hero (512px tall, text left, artwork right), a two-card "Where to
Buy" row, a split illustration/text band, a three-card story row, a three-column values row, and a three-column
footer. Padding values cluster at 4px, 16px and 12px inside components and 60px around sections. Headings are
left-aligned, not centred, which keeps the page feeling editorial rather than promotional.

## Elevation & Depth

Flat. No box shadows were measured. Depth comes entirely from full-bleed colour bands, flat illustration and the
cut-out cow mascot overlapping the boundary between the sky-blue band and the green footer.

## Shapes

Buttons are generous pills with an 80px radius. Image cards round their corners at 12px. Icons in the values band
sit in 50% circles. The email field is a split control: the input has a 6px 0px 0px 6px radius and the yellow
submit arrow 0px 12px 12px 0px, together forming one rounded bar. A 4px radius appears on a single small element.

## Components

- **Primary pill** — yellow `#ffbc0e`, ink label in Proxima Nova 20px / 600, 16px 32px padding, 56px tall, 80px
  radius; hover `#fed831`.
- **White pill** — same metrics with a white fill, used on the yellow hero ("Listen Now!"); hover `#f0f0f0`.
- **Image card** — 12px-rounded photograph, Chunk ReThunk 24px title, one-line Proxima Nova description, a
  yellow pill beneath.
- **Story card** — square illustration, a small grey date, a Chunk ReThunk 24px headline, a short paragraph and an
  underlined blue "Read More".
- **Header** — white, logo left, dropdown links with chevrons, search and menu icons right.
- **Email sign-up** — white 58px-tall input with a `#595959` border and 16px 24px padding, joined to a yellow
  arrow button.
- **Footer** — deep green `#2a5729`, white Chunk ReThunk 24px headings, round outlined social icons, white links.

## Design System Architecture

No public Ben & Jerry's design system could be opened; the media-centre page returned HTTP 403 (see SOURCES.json).
The shipped site at https://www.benjerry.com/ shows a two-layer system: a Bootstrap-style `--bs-*` variable layer
(`--bs-primary: #002f87`, `--bs-success: #538547`, `--bs-danger: #D13239`, `--bs-body-font-size: 1.25rem`,
`--bs-link-hover-color: #001d54`) customised with brand values, and a brand-asset module (`/modules/bnj-brand-assets/`)
that serves the two webfonts, favicon and logo. Components on top (pills, image cards, the split email field) are
built from that layer.

## Do's and Don'ts

**Do**
- Use one yellow pill style for actions and keep its label near-black.
- Set headings in Chunk ReThunk, left-aligned, at weight 500.
- Keep body copy large (20px / 32px) and conversational.
- Change background colour band by band (white, navy, sky, green) to pace the page.
- Pair content with flat, hand-drawn illustration.

**Don't**
- Don't put white text on the yellow; the measured label is `#141414`.
- Don't add shadows or gradients to UI; the colour comes from bands and art.
- Don't centre every heading; the measured page aligns left.
- Don't treat Bootstrap's stock palette variables as brand colours.

## Responsive Behavior

From the extraction's mobile pass:

- The hero headline drops from 48px / 64px to 32px / 40px; section titles from 36px / 48px to 24px / 32px.
- Body copy drops from 20px / 32px to 16px / 24px; 16px is by far the most-read mobile size.
- The primary pill label drops to 16px / 600 with a 16px line height, keeping the yellow fill.
- The long values statement measured 27.85px on mobile.
- Header links visible rose from 5 on desktop to 8 on mobile, and a menu toggle is visible at both widths.

Breakpoints and how the card rows reflow were not measured.

## Iteration Guide

1. White canvas, `#141414` ink, Chunk ReThunk headings, Proxima Nova body at 20px.
2. Add the yellow pill (`button-primary`) for every action; use the white pill only on yellow.
3. Build sections as full-width colour bands drawn from the palette.
4. Round images at 12px and buttons at 80px; keep everything flat.
5. Take new colours from the site's Bootstrap overrides or a new measurement, never from the ice-cream packaging.
