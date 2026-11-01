---
version: alpha
name: Envato
category: "Design & Creative Tools"
description: "Envato (www.envato.com redirects to Envato Elements): PolySans 600 headlines at 48px with 16px/400 body, near-black #191919 ink on a peach-cream #fff5ed canvas with white #ffffff cards, lime #87e64b buttons with dark-green #1a4200 labels and 4px corners, and 16px-radius bordered tiles."
colors:
  canvas: "#fff5ed"
  page-body: "#ffffff"
  ink: "#191919"
  primary: "#87e64b"
  on-primary: "#1a4200"
  primary-hover: "#6cc832"
  ink-muted: "#666666"
  ink-nav: "#303030"
  surface-dark-tile: "#242424"
  hairline: "#cccccc"
typography:
  display:
    fontFamily: PolySans, Inter, -apple-system, "system-ui", "Segoe UI", "Fira Sans", "Helvetica Neue", Arial, sans-serif
    fontSize: 48px
    fontWeight: 600
    lineHeight: 48px
  heading:
    fontFamily: PolySans, Inter, -apple-system, "system-ui", "Segoe UI", "Fira Sans", "Helvetica Neue", Arial, sans-serif
    fontSize: 36px
    fontWeight: 600
    lineHeight: 36px
  tile-title:
    fontFamily: PolySans, Inter, -apple-system, "system-ui", "Segoe UI", "Fira Sans", "Helvetica Neue", Arial, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: PolySans, Inter, -apple-system, "system-ui", "Segoe UI", "Fira Sans", "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: PolySans, Inter, -apple-system, "system-ui", "Segoe UI", "Fira Sans", "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: PolySans, Inter, -apple-system, "system-ui", "Segoe UI", "Fira Sans", "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  input:
    fontFamily: PolySans, Inter, -apple-system, "system-ui", "Segoe UI", "Fira Sans", "Helvetica Neue", Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 48px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
  s8: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-header:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 24px
    height: 40px
  dark-tile:
    backgroundColor: "{colors.surface-dark-tile}"
    textColor: "{colors.page-body}"
    typography: "{typography.tile-title}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  search-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 40px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 32px
    border: "1px solid #cccccc"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The queued URL, https://www.envato.com, redirects to **Envato Elements** at https://elements.envato.com/, Envato's own subscription marketplace; the page title is "Envato® | AI Tools and Unlimited Creative Assets" and the header logo reads "envato". This document describes that measured page.

The page is a dense, image-led storefront for stock assets and AI tools. It opens with a header containing the logo, an "All items" category selector, a wide search field and a lime "Get unlimited downloads" button. The hero is a black rounded panel with a vivid green-and-purple 3D illustration and the white headline "Your all-in-one creative asset toolkit" (with "all-in-one" in lime), beside a white pricing card ("From $16.50/month", three benefit lines with icons, and a lime "Subscribe to download" button).

Below, "Every type of asset, for any type of project" lays out a staggered grid of white category tiles (Video Templates 160,000+, Stock Photos 16.6M+, Royalty-Free Music, Sound Effects, Graphic Templates, Fonts, Graphics, 3D, Presentation Templates, Add-ons, All Categories), each with a bold title, a count and a saturated artwork crop. Then come an "AI Tools" grid of eight photo tiles with icon labels, a "Curated Collections" carousel, a "Why creatives choose Envato" stack of wide cards (the last one black with a lime headline), a "Trusted by top brands" logo row, and a peach footer with a newsletter field and link columns. Copy is short and casual ("Riff until it's right with", "Yes to creative inspo in your inbox").

## Colors

- **canvas #fff5ed** — a peach-cream that covers about 42% of the capture: the page background behind the tile grids and the footer.
- **page-body #ffffff** — white for tiles, cards and the header area; it is the largest background by DOM area.
- **ink #191919** — near-black for text, and also the fill of the hero panel and the dark "best value" card.
- **primary #87e64b** — lime green, the fill of every action button and the accent colour in headlines ("all-in-one", "The best value in one subscription"). Its label colour **on-primary #1a4200** is a very dark green, not black or white.
- **primary-hover #6cc832** — measured hover fill for both lime buttons; hover darkens the green.
- **ink-muted #666666** and **ink-nav #303030** — secondary text and header icon/link colour.
- **surface-dark-tile #242424** — the "Create with our AI Tools" tile.
- **hairline #cccccc** — the 1px border on the pricing card; #191919 borders also appear on 11 elements.

The shipped CSS custom properties hold component tokens (radii, font families, sizes, border widths) rather than colour variables, so no named colour palette is published in the page's root variables.

## Typography

A single family, **PolySans** (loaded at 400, 600 and 700), with Inter and system fallbacks. The CSS names a type scale through component tokens: `--font-size-campaign-large` 4.5rem, `--font-size-title-1` 3rem, `--font-size-campaign-small` and `--font-size-title-2` 2.25rem, `--font-size-title-3` 1.875rem, `--font-size-title-4` 1.5rem, `--font-size-body-large` 1rem and `--font-size-body-small` 0.875rem.

- **display** — 48px / 600 / 48px (title-1), for the hero headline and the "Why creatives choose Envato" card headlines; line height equals the size.
- **heading** — 36px / 600 / 36px (title-2) for "Trusted by top brands".
- **tile-title** — 24px / 600 / 24px; the most frequent 24px text carries −0.463px tracking.
- **body** — 16px / 400 / 24px, the most frequent size; 18px is second.
- **button** — 16px / 600 / 24px; **nav** — 16px / 400 / 26px; **input** — 14px / 400 / 21px.

Weight 600 accounts for more characters than 400, so the page reads semi-bold overall. PolySans is not a free web font; if it is unavailable, use a neutral grotesque at 600 for headings and declare the substitute.

## Layout

At a 1280px viewport the page is 5,638px tall. The header is 66px tall. The hero is a two-part row: a wide black panel and a narrower white pricing card. The category section is a four-column staggered grid in which columns start at different heights, giving a masonry feel. AI Tools is a four-column grid of square photo tiles in two rows. "Why creatives choose Envato" is a single column of wide cards with text left and art right. The footer splits into a left column (logo, social icons, newsletter) and four link columns on the right.

Gaps are tight: 8px (most common) and 4px, then 16px and 24px, with 64px between sections. Paddings cluster at 8px, 4px, 16px, 32px and 24px.

## Elevation & Depth

The page is almost flat. Measured shadows are limited to a 1px inset ring, `rgb(140, 140, 140) 0px 0px 0px 1px inset`, on two elements; the CSS also defines `--shadow-500: 0px 2px 12px 0px rgba(0,0,0,.15)`. Separation comes from borders (1px #cccccc and #191919), from white tiles on the peach canvas, and from heavily saturated artwork against black and white panels.

## Shapes

Buttons are nearly square: the CSS sets `--border-radius-button-primary`, `-secondary`, `-tertiary`, `-neutral`, `-naked`, `-elevated` and `-overlay` all to 4px. Tiles and cards use 16px (the most frequent radius, 42 elements), with 16px 16px 0 0 on two image tops. 12px and 8px appear on inner images and controls. Chips and carousel buttons use 48px (`--border-radius-chip`, `--border-radius-carousel-button`).

## Components

- **Primary button** — #87e64b fill, #1a4200 PolySans 16px/600 label, 4px radius, 8px 24px padding, 48px tall ("Subscribe to download"); hover #6cc832.
- **Header button** — same style at 40px tall ("Get unlimited downloads").
- **Pricing card** — white, 16px radius, 1px solid #cccccc border, 32px padding; price in bold with a "/month" suffix, three icon-led benefit lines and a full-width lime button.
- **Category tile** — white with a thin dark outline and 16px radius, bold title, item count, and a rounded artwork crop.
- **AI tool tile** — a full-bleed photo with a small white label chip containing an icon and the tool name.
- **Dark tile** — #242424 background with white 24px/600 title ("Create with our AI Tools") and a lime "Generate" pill inside.
- **Search field** — 40px tall, 14px text, in the header beside the category selector.
- **Footer** — on the peach canvas, with an email input and send icon, link columns (AI Tools, Stock Catalog, Plans, Resources, Company, Authors, Partnerships, Legal) and a language selector.

## Design System Architecture

No public Envato design-system documentation or brand page was found: https://www.envato.com/brand/ returned 404. The page does, however, ship a large token layer in its CSS (368 root custom properties) with systematic component naming: `--border-radius-button-{primary|secondary|tertiary|neutral|naked|elevated|overlay}`, `--border-width-{component}-{state}` (for example `--border-width-checkbox-unchecked-hover`, `--border-width-radio-item-checked-error`), `--font-family-{role}` and `--font-size-{role}` for title-1…4, campaign-large/small, body-large/small, label and micro, `--padding-{x|y}-button-{size}`, `--text-style-*` weights and spacing, a `--chunkiness-*` scale and `--shadow-500`. This is a token-driven component system; build from those role names.

## Do's and Don'ts

**Do**
- Use lime #87e64b with dark-green #1a4200 labels for every primary action, darkening to #6cc832 on hover.
- Keep buttons at 4px radius and tiles at 16px.
- Set everything in PolySans, with headings at 600 and line height equal to size.
- Let bold, saturated artwork carry the colour; keep the UI itself to cream, white, near-black and lime.
- Use lime as a highlight inside headlines on dark panels.

**Don't**
- Don't put white or black text on the lime button.
- Don't round buttons into pills; only chips and carousel arrows are fully round.
- Don't add soft drop shadows to tiles; use borders and contrast.
- Don't use pure black; dark panels are #191919 or #242424.

## Responsive Behavior

Not measured. The extractor's mobile pass at 390px was served a bot-verification page ("Performing security verification") instead of the site, so no mobile type sizes or layout from Envato were recorded. On desktop the header showed 2 visible links and a menu toggle labelled "open navigation"; the widest card row measured 5 columns.

## Iteration Guide

1. Set canvas #fff5ed, white tiles #ffffff and ink #191919; load PolySans 400/600/700.
2. Build the header: logo, category selector, wide 40px search field and a 40px lime button.
3. Make the hero: a black #191919 rounded panel with a 48px/600 white headline (lime highlight) beside a white pricing card with a #cccccc border and 16px radius.
4. Primary button: #87e64b, #1a4200 16px/600 label, 4px radius, 8px 24px padding, 48px height; hover #6cc832.
5. Lay out category tiles in a staggered four-column grid with 16px radius and 8px gaps.
6. Add the AI tools photo grid and the wide "why" cards, ending with a black card.
7. Compare with https://elements.envato.com/ at 1280px.
