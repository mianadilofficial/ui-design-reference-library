---
version: alpha
name: Jasper
category: "AI"
description: "Jasper, the AI agent platform for marketing teams: white #ffffff and #f2f2f3 surfaces, deep navy #00063d ink, flame #fa4028 square-cornered CTAs (0px radius, hover #801a10), Feature serif display at 73.83px/-2.21px over ABC ROM 16px/22.4px body at weight 450, and pastel tiles in peach, sky, mint, pink and lilac."
colors:
  canvas: "#ffffff"
  ink: "#00063d"
  primary: "#fa4028"
  on-primary: "#ffffff"
  primary-hover: "#801a10"
  on-primary-hover: "#fffdfc"
  flame-500: "#fa7560"
  surface-grey: "#f2f2f3"
  surface-dark: "#1c1c1c"
  ink-muted: "#5e5d5f"
  green-800: "#103a00"
  pink-800: "#5a003c"
  tile-peach: "#ffe8e2"
  tile-sky: "#ceebff"
  tile-mint: "#e6ffd9"
  tile-pink: "#ffe6f3"
  tile-lilac: "#e7e3f7"
  tile-butter: "#fffdd9"
  surface-soft: "#f9f9f9"
typography:
  display:
    fontFamily: Feature, Georgia, sans-serif
    fontSize: 73.8284px
    fontWeight: 450
    lineHeight: 73.8284px
    letterSpacing: "-2.21485px"
  display-mobile:
    fontFamily: Feature, Georgia, sans-serif
    fontSize: 40px
    fontWeight: 450
    lineHeight: 40px
    letterSpacing: "-1.2px"
  subheading:
    fontFamily: Feature, Georgia, sans-serif
    fontSize: 38px
    fontWeight: 450
    lineHeight: 38px
    letterSpacing: "-0.76px"
  heading:
    fontFamily: Feature, Georgia, sans-serif
    fontSize: 24px
    fontWeight: 450
    lineHeight: 26.4px
  body:
    fontFamily: "\"ABC ROM\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 450
    lineHeight: 22.4px
    letterSpacing: "-0.16px"
  button:
    fontFamily: "\"ABC ROM\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 18px
    textTransform: capitalize
rounded:
  none: 0px
  xs: 2px
  sm: 4px
spacing:
  s1: 2px
  s2: 3.2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 20px
    height: 48px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary-hover}"
    borderColor: "{colors.primary-hover}"
  button-outline:
    textColor: "{colors.ink}"
    borderColor: "{colors.ink}"
    rounded: "{rounded.none}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  tile:
    backgroundColor: "{colors.tile-peach}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.surface-dark}"
---

## Overview

Jasper is an AI platform for marketing teams; its company page's structured data gives a founding date of January 2021 and Austin, Texas as the founding location. The measured home page, "Put AI agents to work for marketing | Jasper", is a 10,506px Webflow page at a 1280px viewport. Its look is editorial and print-like: a warm serif display face (Feature, which Jasper's own brand page names as its primary typeface), deep navy text instead of black, a flame-orange action colour, square-cornered buttons, and pages of flat pastel tiles in peach, sky blue, mint, pink, lilac and butter yellow.

The capture shows a light grey (#f2f2f3) hero with the centred headline "Put AI agents to work for marketing", a short paragraph, an outlined "Start Free Trial" button and a flame "Get A Demo" button, flanked by floating product cards (a chat panel, a "Scale a launch campaign" note) and a pixel-grid pattern. Below: a logo row "World-class marketing teams trust Jasper"; "The execution platform for intelligent marketing" with three columns (Agents, Content Pipelines, Jasper IQ); "Why modern marketing teams choose Jasper" as an accordion list next to a product screen; "Proven strategies, real results", a mosaic of coloured stat and quote tiles; "Marketing runs on content. Jasper automates how it's made." with role tabs and a pixel-cloud illustration; an "Enterprise-grade security" block; a resource grid; a "Put AI agents to work, on your terms" band with a photo; an FAQ on a peach background; and a near-black footer.

Microcopy is short and active ("Get A Demo", "Explore The Platform", "Explore Customer Stories"), with button labels in title case.

## Colors

All values below are measured on the page and match Jasper's Webflow `--swatch--*` variables.

- **Canvas `#ffffff`** (`--swatch--light-100`) — the main background (2,705 by area).
- **Surface grey `#f2f2f3`** (`--swatch--light-200`, `--_theme---background-secondary`) — the hero band and secondary sections.
- **Ink `#00063d`** (`--swatch--blue-800`, `--swatch--brand-text`, `--_theme---text`) — a very deep navy used for almost all text (6,552 characters) and for borders.
- **Primary `#fa4028`** (`--swatch--flame-600`, `--_theme---button-primary--background`) — the "Get A Demo" button and small accent text. Hover goes to **`#801a10`** (`--swatch--flame-700`) with text `#fffdfc` (`--swatch--flame-100`).
- **Flame 500 `#fa7560`** — the most frequent border colour (6 uses).
- **Surface dark `#1c1c1c`** — the second largest area (1,494): the dark media and footer zones.
- **Ink muted `#5e5d5f`** (`--swatch--dark-700`) — secondary text.
- **Green 800 `#103a00`** and **pink 800 `#5a003c`** — dark text colours used on mint and pink tiles.
- **Tiles** — `#ffe8e2` peach (`--swatch--flame-300`, 1,073 by area), `#ceebff` sky (`--swatch--blue-300`), `#e6ffd9` mint (`--swatch--green-300`), `#ffe6f3` pink (`--swatch--pink-400`), `#e7e3f7` lilac (`--swatch--violet-400`), `#fffdd9` butter (`--swatch--yellow-400`), and `#f9f9f9` (`--swatch--dark-50`).

Each pastel has a matching dark text colour in the same hue family, so tiles read as tinted paper with ink of the same colour.

## Typography

Three families are loaded:

- **Feature** — the serif display face, loaded as a variable font (100-900). Jasper's brand page (https://www.jasper.ai/brand) lists it as "Primary Typeface: Feature". The h1 is 73.8284px with matching line height and -2.21485px tracking (-3%); a second display size of 51.5313px/-1.54594px is measured; section titles such as "Agents" use 38px/38px with -0.76px; small headings use 24px/26.4px. All at weight 450.
- **ABC ROM** — the sans for body and UI (7,097 characters): body 16px/22.4px at 450 with -0.16px tracking; 18px/-0.18px for leads; 14px/-0.14px for small text. Buttons are 18px/18px at 500, title-cased.
- **ABC ROM Mono** — 280 characters of small monospaced labels, such as the eyebrow "The Jasper Platform" and "Customer Stories".

Weight 450 is the house weight for both reading and display, which keeps headlines soft. Every size has a slight negative tracking of 1% (3% for the largest display). Feature and ABC ROM are commercial typefaces; the shipped fallbacks are Georgia for Feature and Arial for ABC ROM.

## Layout

The band map shows an 898px grey hero (centred content between 310px and 970px), a 6,704px white body with up to 4 columns, a 900px media band, an 837px white band, and a 1,167px near-black footer band in 4 columns. The hero is centred; most other sections are left-aligned with a headline on the left and content on the right, or a mosaic grid.

Spacing is measured on a 4px base with some fluid values: gaps of 4, 6, 8, 10, 12, 16, 24, 48, 64 and 80px (plus a fluid 38.7657px), paddings of 2, 4, 6, 8, 12, 16, 20 and 32px. The stats mosaic packs tiles of different sizes and colours edge to edge with no gutters visible in the capture.

## Elevation & Depth

The page is flat: no box shadows were measured at all. Depth comes from colour blocks — pastel tiles on white, a grey hero band, a near-black footer — and from the floating product cards in the hero, which overlap the band edges. Borders (flame #fa7560, #fa4028, navy #00063d, and #ffb3a3) outline buttons, tags and product mock-ups instead of shadows.

## Shapes

Corners are square. The only radii measured are 4px (11 uses) and 2px (8 uses), on small tags and product UI fragments; buttons, tiles and section blocks compute 0px. The CSS declares `--radius--main` 1rem, `--radius--small` .5rem and `--radius--round` 100vw, but those values do not render on the home page. The pixel-grid and pixel-cloud illustrations (small coloured squares) repeat the square motif.

## Components

- **Primary button** — "Get A Demo": #fa4028 fill and 1px #fa4028 border, white ABC ROM 18px/18px at 500, title case, 0px radius, 16px 20px padding, 48px tall. Hover: fill and border #801a10, text #fffdfc.
- **Outline button** — "Start Free Trial": transparent fill, #00063d text and 1px #00063d border, 0px radius. The hover measurement records its text and border switching to white while the element's own background stays transparent.
- **Text link** — #00063d ABC ROM 16px/22.4px, e.g. "New report" in the top announcement.
- **Stat and quote tiles** — flat pastel blocks (#ffe8e2, #ceebff, #e6ffd9, #ffe6f3, #e7e3f7, #fffdd9) with a large Feature figure ("10,000+", "60%", "7,500", "3x") or a quote, a portrait and a customer logo; 0px radius.
- **Accordion list** — Feature headings separated by thin rules ("Get cited by AI, the new front door of search", "Scale campaigns and performance").
- **Role tabs** — a row of small bordered labels ("Performance Marketer", "Content Marketer", "Brand Marketer").
- **Footer** — near-black with white text, four link columns and a large Jasper wordmark at the bottom.

## Design System Architecture

Jasper publishes an official brand style guide at https://www.jasper.ai/brand ("Official Brand Style Guide | Jasper"), which names Feature as the primary typeface and offers the wordmark in dark, white and flame variants as SVG and PNG; it lists no colour values. The newsroom (https://www.jasper.ai/press) links to that page for logos. The shipped Webflow CSS (216 root variables) shows the working system in three layers: swatch ramps per hue (`--swatch--flame-100` … `-800`, `--swatch--blue-200` … `-800`, `--swatch--green-*`, `--swatch--pink-*`, `--swatch--violet-*`, `--swatch--yellow-*`, `--swatch--dark-*`), theme aliases (`--_theme---text` → blue-800, `--_theme---background` → light-100, `--_theme---button-primary--background` → flame-600, `--_theme---button-primary--background-hover` → flame-700, `--_theme---border` → blue-800), and typography variables (`--_typography---font--primary-family` "ABC ROM", Arial; `--_typography---font--secondary-family` Feature, Georgia; secondary weights 400/450/500; cap-height trims such as `--_typography---font--secondary-trim-top` .43em).

## Do's and Don'ts

**Do**
- Set display type in Feature at weight 450 with -3% tracking and a line height of 1.
- Use deep navy #00063d for text and outlines instead of black.
- Use flame #fa4028 for the single main action, with #801a10 on hover.
- Keep buttons and tiles square-cornered (0px).
- Build proof sections from flat pastel tiles, each with text in the matching dark hue.
- Use ABC ROM Mono for small eyebrow labels.

**Don't**
- Don't add rounded corners to buttons or cards; the declared 1rem radius does not render on the home page.
- Don't add drop shadows; none are measured.
- Don't use bold display weights; headings are 450.
- Don't put flame orange on large surfaces; peach #ffe8e2 is the large-area version.
- Don't use pure black for text on light surfaces.
- Don't use lowercase or all-caps button labels; buttons are title case.

## Responsive Behavior

The extractor's 390px mobile pass recorded:
- h1 at Feature 40px/40px with -1.2px tracking (73.8284px on desktop), 358px wide.
- h2 unchanged at 24px/26.4px.
- Body text unchanged at ABC ROM 16px/22.4px, -0.16px, in a 324px column.
- The primary CTA unchanged: 18px/18px, 0px radius, 16px 20px padding, 48px tall.
- Mobile font sizes recorded: 16, 18, 14, 28, 24, 38, 40 and 20px.
- The header-link counter recorded 0 visible links on both widths, and its menu-toggle detection matched a control labelled "Logo options" on both widths, so the navigation pattern is not measured.

Breakpoints and how the tile mosaic reflows were not measured.

## Iteration Guide

1. Lay out a white page with a #f2f2f3 hero band and a #1c1c1c footer.
2. Set the hero headline in Feature (or Georgia, the declared fallback) at 73.8284px/73.8284px, weight 450, -2.21485px.
3. Use ABC ROM (or Arial, the declared fallback) at 16px/22.4px, weight 450, -0.16px, in #00063d.
4. Add a flame #fa4028 square button (16px 20px, 48px tall) beside a navy-outlined square button.
5. Build the results area as a gutterless mosaic of pastel tiles, each with matching dark text and a big serif number.
6. Keep every container at 0px radius and add no shadows.
7. Compare against the capture: the page should feel like a printed marketing report — warm serif, navy ink, flame accents and pastel paper.
