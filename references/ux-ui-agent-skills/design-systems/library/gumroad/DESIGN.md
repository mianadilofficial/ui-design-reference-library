---
version: alpha
name: Gumroad
category: "Product & SaaS"
description: "Gumroad's homepage sets ABC Favorit at regular weight on an off-white #f4f4f0 canvas, with black #000000 square and 4px buttons that flip to pink #ff90e8 on hover, white 24px-rounded cards with thin borders, and flat cartoon illustrations in pink, orange #ffc900, teal #23a094 and yellow."
colors:
  canvas: "#f4f4f0"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-card: "#ffffff"
  pink: "#ff90e8"
  orange: "#ffc900"
  yellow: "#f1f333"
  red: "#dc341e"
  green: "#23a094"
  purple: "#90a8ed"
  ink-muted: "#48484880"
  hairline: "#d1d5dc"
  input-border: "#242423"
typography:
  display:
    fontFamily: "\"ABC Favorit\""
    fontSize: 96px
    fontWeight: 400
    lineHeight: 96px
    letterSpacing: "-0.4px"
  display-mobile:
    fontFamily: "\"ABC Favorit\""
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-0.4px"
  heading:
    fontFamily: "\"ABC Favorit\""
    fontSize: 48px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-0.4px"
  subheading:
    fontFamily: "\"ABC Favorit\""
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
    letterSpacing: "-0.4px"
  body:
    fontFamily: "\"ABC Favorit\""
    fontSize: 20px
    fontWeight: 500
    lineHeight: 32.5px
    letterSpacing: "-0.4px"
  button:
    fontFamily: "\"ABC Favorit\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: "-0.4px"
  button-large:
    fontFamily: "\"ABC Favorit\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: "-0.4px"
  link:
    fontFamily: "\"ABC Favorit\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: "-0.4px"
rounded:
  none: 0px
  xs: 4px
  sm: 6px
  md: 16px
  lg: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 36px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 24px
    height: 79px
  button-primary-hover:
    backgroundColor: "{colors.pink}"
    textColor: "{colors.ink}"
  button-hero:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.xs}"
    padding: 0px 40px
    height: 64px
    borderColor: "{colors.ink}"
  nav-pill-active:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 46px
    borderColor: "{colors.ink}"
  nav-login:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    hoverBackgroundColor: "{colors.pink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-large}"
    rounded: "{rounded.xs}"
    padding: 0px 80px 0px 32px
    height: 64px
    borderColor: "{colors.input-border}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 32px
    borderColor: "{colors.ink-muted}"
---

# Gumroad

## Overview

Gumroad (https://gumroad.com/) is a platform for creators to sell digital products, memberships and courses. The homepage title is "Earn your first dollar online with Gumroad", and the hero headline reads simply "Go from 0 to $1", followed by "Anyone can earn their first dollar online. Just start with what you know, see what sticks, and get paid. It's that easy." The design matches that copy: plain, friendly, a little anti-corporate.

The capture shows a white header strip with the GUMROAD wordmark and a GitHub star badge ("9.9K") on the left, a row of text links (Discover, Blog, Pricing, Features, About, Gumclaw) with the active "About" item shown as a black pill, and two square header cells on the right: "Log in" on white and "Start selling" on black, divided by a thin vertical rule. Below that, the off-white #f4f4f0 hero centres the 96px headline among floating pink coin illustrations stamped with a black "G". Under the hero sits a black "Start selling" button next to a "Search marketplace…" input, and a small grey "Contribute or fork on GitHub" line, because the Gumroad codebase is public.

The rest of the visible page is a bento of white rounded cards with thin outlines: "Sell anything", "Make your own road", "Sell to anyone", "Sell anywhere", each pairing a short heading with a cartoon product UI (a ukulele course page, a sales chart, a storefront) drawn in flat colour with thick black outlines. Two large illustrated cards follow ("Instead of building a company…" / "…start selling a side project!") featuring a pink-headed character in teal and yellow circles. The home page scrolls inside an inner container (7,825px of content), so the desktop capture shows the first 2,400px.

The voice is casual, encouraging and plain-spoken ("Whatever! Gumroad was created to help you experiment"). The visual identity is neo-brutalist: hard black outlines, flat fills, square or lightly rounded shapes, a single typeface at a regular weight.

## Colors

Gumroad's colour set is published in its own source code. The `$colors` map in `app/javascript/stylesheets/_definitions.scss` of the public repository defines pink #ff90e8, purple #90a8ed, green #23a094, orange #ffc900, red #dc341e and yellow #f1f333; the home page's measured colours match it.

- **canvas #f4f4f0** — the off-white page background (`--body-bg: #f4f4f0`), covering the most measured area.
- **ink #000000** — all text (3,585 measured characters), outlines, and the black buttons.
- **primary #000000** — the call-to-action fill ("Start selling"). Gumroad's actions are black, not pink.
- **on-primary #ffffff** — text on black buttons.
- **surface-card #ffffff** — card and header-cell backgrounds (second-largest measured area).
- **pink #ff90e8** — the signature brand colour (`--pink`, `--color-accent`). It fills the coin illustrations and characters, the "$15" price tags and the chart line, and it is the hover fill of buttons: "Start selling" changes from black with white text to pink with black text, and "Log in" changes from white to pink.
- **orange #ffc900** (`--orange`) — measured as a background (669 units); the large yellow-orange illustration circle.
- **yellow #f1f333** — measured background; the price-tag and character-shirt yellow.
- **red #dc341e** (`--red`) — measured background; the orange-red app icon tile.
- **green #23a094** (`--green`) — the teal used in illustrations and app tiles.
- **purple #90a8ed** — from the published colour map; the periwinkle tile in the "Sell anywhere" card.
- **ink-muted #48484880** — 50% grey used for the small "Contribute or fork on GitHub" line and card borders.
- **hairline #d1d5dc** — the most frequent measured border colour (102 elements).
- **input-border #242423** (`--color-dark-gray`) — the search input's border.

The colour rule is clear in the CSS: brand colours are for illustration and hover, black and white are for interface.

## Typography

The entire page is set in **ABC Favorit** (3,838 of 3,839 measured characters), served from Gumroad's own CDN as `ABCFavorit-Regular.woff2` and `ABCFavorit-Bold.woff2`, with italic files also declared. It is a licensed commercial typeface; when it is unavailable, use a geometric-leaning grotesque with single-storey character and keep the weights regular.

Every measured size uses the same -0.4px letter-spacing, so tracking does not scale with size.

- **display** — 96px, weight 400, line-height 96px. "Go from 0 to $1". The headline is regular weight, not bold, which is unusual and central to the look.
- **display-mobile** — 60px / 60px, weight 400.
- **heading** — 48px, weight 400, line-height 60px. Section statements.
- **subheading** — 18px, weight 700, line-height 28px (testimonial names such as "Max Ulichney").
- **body** — 20px, weight 500, line-height 32.5px. Testimonial and paragraph text.
- **button** — 18px, weight 400, line-height 28px (header cells and nav pills).
- **button-large** — 20px, weight 400, line-height 28px (hero button and search input).
- **link** — 16px, weight 400, line-height 26px.

Other measured sizes are 14px, 24px (the second most-read size, 1,146 characters), 30px, 36px, 72px and 192px. Weights on the page are 500 (2,127 characters), 400 (1,666) and 700 (46). The repository's SCSS defines a compact scale of 0.875rem, 1rem, 1.15rem, 1.25rem and 2.5rem with line-heights 1.3, 1.375, 1.375, 1.3 and 1.2 for the app; the marketing page uses a wider range.

## Layout

The desktop capture is 1,280px wide. The header is 80px tall with the logo on the left, centred text links, and the two full-height header cells on the right. The hero content spans x 256 to x 1024 and is centred. Below it, the bento grid runs on a wider container with cards in combinations of roughly two-thirds plus one-third and one-third plus two-thirds; the extraction reports a maximum of three card columns.

Spacing is on a 4px base. Measured spacing tokens are 4px, 6px, 8px, 12px, 16px, 24px, 32px, 36px, 40px and 48px. The dominant gap is 12px (208 uses), then 16px, 32px and 64px. Paddings are mostly 16px (120 uses) and 8px (116 uses), with 32px inside cards and large section paddings of 96px, 128px, 160px, 224px and 256px. The repository defines spacers at 0.25, 0.5, 0.75, 1, 1.5, 2, 3 and 4 rem.

Density is moderate: each card holds one heading, two or three lines of copy and one illustration, with generous white space inside.

## Elevation & Depth

No rendered box-shadows were measured on the home page. Depth is drawn, not lit: illustrations and UI mockups have thick black outlines and a solid black offset edge behind them, which reads as a hard shadow inside the artwork. The design tokens confirm this style: the root variables declare `--box-shadow-1: .25rem .25rem 0rem` and `--box-shadow-2: .5rem .5rem 0rem` (hard, unblurred offsets) and `--button-hover-offset: .25rem`, and the SCSS `$box-shadows` list holds the same two offsets. Never use soft blurred shadows.

## Shapes

The measured radius set is 0px, 4px, 6px, 16px, 24px and a pill. The pill is the most frequent (123 elements, computed as 3.35544e+07px) and is used for the active nav item, badges and the GitHub star chip. Cards use 24px (and a speech-bubble variant of 24px 24px 24px 4px with one sharp corner), the hero button and search input use 4px, and the header cells are square at 0px. The repository's `$border-radii` are 0.25rem, 0.5rem and 10rem, and the root variables declare `--radius: .25rem` and `--border-radius-3: 10rem`.

Borders are thin (1px) and black or grey. Shapes in illustrations are chunky and rounded with thick black strokes.

## Components

**Header cells (button-primary).** "Start selling" is a full-height header cell: black #000000 fill, white text, ABC Favorit 18px / 28px, square corners, 79px tall, 8px 24px padding. On hover it turns pink #ff90e8 with black text. "Log in" is the same cell in white with black text, also turning pink on hover.

**Hero button.** Black fill, white 20px text, 4px radius, 1px black border, 64px tall, 0px 40px padding, placed next to the search input.

**Search input.** #f4f4f0 fill, 1px #242423 border, 4px radius, 64px tall, 0px 80px 0px 32px padding (room for the square search icon button on the right), ABC Favorit 20px.

**Nav pill (active).** Black fill, white text, pill radius, 46px tall, 8px 16px padding ("About" in the capture). Inactive links are plain black text.

**Card.** White #ffffff, 24px radius, 32px padding, thin #48484880 border, a regular-weight heading top-left and supporting copy at the bottom, illustration overlapping the card's edge.

**Checklist.** Pink circular check icons with black outlines beside short lines ("Let your customers pay in their own currency.").

**Speech bubble.** White rounded label with a black outline over illustrations ("Instead of building a company…").

**GitHub badge.** Small pill chip with the GitHub mark, "9.9K" and a star.

## Design System Architecture

Gumroad's application is open source at https://github.com/antiwork/gumroad (Rails with a Vite/TypeScript front end and PostCSS). Its styles live in `app/javascript/stylesheets/`: `_definitions.scss` holds the design tokens — the `$colors` map (pink, purple, green, orange, red, yellow), a `$unit: 1rem` base with `size()` multipliers for spacers, font sizes, border radii and box shadows, `$breakpoints` of sm 640px and lg 1024px, a `$z-indices` map, and mixins such as `breakpoint-up`, `font-size` and `transition`. `_colors.scss` computes accessible foreground colours: an `fg-color()` function chooses black or white text for any background by WCAG contrast ratio, which is why text on pink, yellow and orange is black. The repository also ships `tailwind.css` and `pages_tailwind.css`; the home page's root variables mix Tailwind internals (`--tw-*`, `--text-7xl`, `--radius-sm`) with the brand variables (`--pink`, `--orange`, `--red`, `--green`, `--body-bg`, `--color-accent`, `--color-dark-gray`, `--form-element-height: 3rem`).

## Do's and Don'ts

**Do**
- Use ABC Favorit at regular weight for headlines, including the 96px hero.
- Keep the interface black and white on #f4f4f0; use brand colours for illustrations and hover states.
- Make primary actions black with white text, and flip them to pink #ff90e8 with black text on hover.
- Use hard, unblurred offset shadows and thick black outlines where depth is needed.
- Use 24px-rounded white cards with thin borders for feature content.
- Write short, casual, encouraging copy.

**Don't**
- Don't make headings bold; the brand's headings are regular weight.
- Don't fill primary buttons with pink at rest.
- Don't use soft drop shadows or gradients.
- Don't put white text on pink, yellow or orange; the system's contrast function chooses black.
- Don't vary letter-spacing by size; -0.4px is used everywhere.

## Responsive Behavior

The 390px mobile pass measured the hero headline at 60px / 60px, weight 400, wrapping to "Go from / 0 to $1"; the section heading at 36px / 40px; body text unchanged at 20px / 32.5px; and the hero "Start selling" button at 20px, 4px radius, 0px 32px padding, 56px tall and 326px wide (full content width). The mobile header band is #ffffff and 80px tall. The extractor recorded no visible header links and no menu toggle on mobile; the mobile capture shows the wordmark, the GitHub badge and a three-line icon at the right.

The mobile capture shows the button and search input one above the other at full width, and the feature cards in a single column with the heading and copy above each illustration.

The stylesheet media queries were not captured by the extractor for this page. The repository's SCSS declares breakpoints at 640px (sm) and 1024px (lg). Behaviour between 390px and 1,280px was not measured.

## Iteration Guide

1. Set the canvas to #f4f4f0, all text and outlines to #000000, cards to #ffffff.
2. Load ABC Favorit 400 and 700 (or a regular-weight grotesque substitute) and apply -0.4px tracking to every size.
3. Set the hero headline at 96px / 96px regular; at 390px use 60px / 60px.
4. Build actions as black blocks (0px or 4px radius) that turn pink #ff90e8 on hover.
5. Lay out features as a 24px-rounded white card bento with 12px–16px gaps and 32px padding.
6. Draw illustrations with flat pink, orange, yellow, teal, red and periwinkle fills and thick black outlines; add depth only with hard offset shadows.
7. Check the result against the captures; dark mode and intermediate widths were not measured.
