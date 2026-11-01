---
version: alpha
name: PlanetScale
category: "Backend, Database & DevOps"
description: "PlanetScale's marketing site is a single-typeface terminal page — the system ui-monospace stack at 16px/24px for every heading, paragraph and button, #414141 ink on a #fafafa canvas, a #fbca00 announcement bar, #f35815 orange square-cornered CTAs (0px radius everywhere), #0b6ec5 inline links and #111111 tab buttons."
colors:
  canvas: "#fafafa"
  ink: "#414141"
  primary: "#f35815"
  on-primary: "#ffffff"
  surface-announcement: "#fbca00"
  surface-inverse: "#111111"
  ink-strong: "#000000"
  link: "#0b6ec5"
  ink-muted: "#737373"
  ink-faint: "#c1c1c1"
  brand-black: "#1a1a1a"
typography:
  display:
    fontFamily: ui-monospace, SFMono-Regular, "SF Mono", Menlo, Consolas, "Liberation Mono", monospace
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  heading:
    fontFamily: ui-monospace, SFMono-Regular, "SF Mono", Menlo, Consolas, "Liberation Mono", monospace
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  announcement:
    fontFamily: ui-monospace, SFMono-Regular, "SF Mono", Menlo, Consolas, "Liberation Mono", monospace
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: ui-monospace, SFMono-Regular, "SF Mono", Menlo, Consolas, "Liberation Mono", monospace
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: ui-monospace, SFMono-Regular, "SF Mono", Menlo, Consolas, "Liberation Mono", monospace
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 9.63px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 40px
  s8: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 8px
    height: 32px
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "2px solid #f35815"
    padding: 0px 8px
    height: 32px
  button-secondary:
    backgroundColor: "{colors.surface-inverse}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 0px
    height: 56px
  announcement-bar:
    backgroundColor: "{colors.surface-announcement}"
    textColor: "{colors.surface-inverse}"
    typography: "{typography.announcement}"
    rounded: "{rounded.none}"
    height: 40px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    height: 32px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 40px
---

# PlanetScale

## Overview

PlanetScale (planetscale.com) sells managed Vitess, Neki and Postgres databases, and its home page looks like a long README rendered in a browser. There is no hero image, no gradient, no display type and no card shadow. The entire 8,315px-tall page is set in one font stack — the operating system's `ui-monospace` (SF Mono on macOS, Consolas on Windows) — at a single size, 16px with a 24px line height. Hierarchy comes only from weight (400 body, 500 announcement, 600 controls, 700 headings) and from color (#000000 headings versus #414141 running text versus #737373 secondary notes).

The page opens with a 40px #fbca00 yellow announcement bar ("Neki, sharded Postgres, is now available. Learn more"), then a 32px-tall header row on the #fafafa canvas with pipe-separated text links (Platform▾ | Resources▾ | Blog | Documentation | Pricing | Migrate) on the left and Sign in, an orange-outlined "View sandbox" button and a solid #f35815 "Get in touch" button on the right. The first heading, "The world's fastest and most scalable cloud databases", is bold monospace at 16px — the same size as the paragraph beneath it. Below sits a dense 5-column wall of customer logos in thin #414141-bordered cells (Square, Cash App, Cursor, Intercom, Etsy, Slack, Notion, Laravel and dozens more), followed by long prose sections — Vitess / Neki / Postgres tabs, an ASCII-style shard diagram, a latency chart, then Performance, Uptime, Cost, Security and Features as plain bold labels over paragraphs and bullet lists of blue links. Customer quotes are set as indented monospace with an em-dash attribution line.

The voice is technical and declarative ("PlanetScale Metal allows you to run your database on the fastest servers available in the cloud"), with numbers and named infrastructure rather than adjectives. The design reads as a deliberate refusal of marketing-site conventions: text first, links in blue, and orange used only where the brand asks for action.

## Colors

The palette is near-greyscale with two saturated accents.

- **Canvas #fafafa** — the page background behind almost every band (532 area units against 51 for the next color). PlanetScale's own brand page names this value "White" and lists it as a primary brand color (https://planetscale.com/brand).
- **Ink #414141** — the most-read text color (6,772 characters): paragraphs, nav links, footer text and h3 feature headings.
- **Ink-strong #000000** — 2,324 characters: h2 section labels ("Performance") and the first page heading. Nav links also turn #000000 on hover.
- **Link #0b6ec5** — 1,094 characters of inline links ("fastest databases", feature-list links). The site's stylesheet exposes it as `--blue-600`.
- **Ink-muted #737373** — secondary notes and captions (354 characters; `--color-gray-550`).
- **Ink-faint #c1c1c1** — the faintest footer text (`--color-gray-300`).
- **Primary #f35815** — the orange of "Get in touch", the 2px border of "View sandbox", and the hover color of "Sign in". The brand page calls this "Orange", an accent color, and instructs to use black and white most of the time with orange as an accent.
- **On-primary #ffffff** — the label color on the orange button.
- **Surface-announcement #fbca00** — the yellow strip at the very top of the page.
- **Surface-inverse #111111** — the selected tab button ("Vitess") with #fafafa text; also the announcement text color.
- **Brand-black #1a1a1a** — the brand page's "Black", listed as a primary brand color. It was not the dominant dark on the measured home page (that is #111111 and #000000), so use it for logo and brand-material contexts.

The shipped stylesheet carries a full Tailwind-style scale as custom properties (`--color-orange-600 #b83a05`, `--color-blue-700 #144eb6`, `--color-green-500 #27b648`, purple, red and yellow ramps), but the home page renders only the values above.

## Typography

One stack does everything: `ui-monospace, SFMono-Regular, "SF Mono", Menlo, Consolas, "Liberation Mono", monospace`, exposed in CSS as `--font-mono`. The extractor recorded no web fonts loaded on the home page — the face is whatever monospace the visitor's OS supplies. Every measured text run on desktop is 16px (10,627 of 10,627 characters).

- **Display / heading** — 16px, weight 700, 24px line height. The page's first heading and the h2 section labels share these exact values; there is no larger size.
- **Announcement** — 16px weight 500 on 24px; the body element's own weight and the yellow-bar text.
- **Body** — 16px weight 400 on 24px, #414141.
- **Button / nav** — 16px weight 600; buttons use a tight 16px line height inside a 32px box, nav links 24px.

Letter-spacing is `normal` throughout and nothing is uppercased.

The brand page draws a distinction worth keeping: Inter is the primary brand font for brand materials (Regular, Medium, SemiBold, no Bold), Roboto Mono is for code snippets, and "for ASCII diagrams on the marketing site, use the system monospace font instead". The marketing site measured here follows the last rule across the whole page. When reproducing the website, use the system mono stack verbatim; when producing PlanetScale-branded collateral, use Inter.

## Layout

Desktop width measured at 1280px. The main band runs from x=80 to x=1240 — a 1,160px content column with 80px side gutters — and the yellow announcement band centres its text between x=386 and x=894. The customer-logo grid is the widest structure: 5 columns of equal square-cornered cells with 1px #414141 hairline borders. Everything else is a single left-aligned text column, with the Vitess/Neki/Postgres tab row splitting into three equal 362px-wide buttons.

Spacing values measured: gaps of 8px (most common), 24px and 4px; paddings of 9.63px (21 occurrences), 24px, 16px, 12px, 8px, 40px (footer side padding) and one 96px block. Vertical rhythm is almost entirely the 24px line height: sections are separated by blank lines rather than by large padded bands. The footer is a multi-column link list (Company, Product, Resources and more) followed by a legal row and social links.

## Elevation & Depth

There is no elevation. The extraction recorded zero box-shadows on rendered elements and only two border colors — #414141 (82 borders: logo cells, tab panels, diagram boxes) and #f35815 (the outlined button). Depth is expressed by flat fills: the #111111 active tab against the #fafafa canvas, and the yellow bar against everything. Hovering "Read case study" and "Read blog post" links adds a translucent light-grey background (measured as an oklab value at 50% alpha) rather than a lift. Keyboard focus is the one place a shadow appears: a 3px #1e9de7 ring on links and a 2px #fafafa gap plus 4px #1e9de7 ring on buttons, with the button border also switching to #1e9de7.

## Shapes

Square. Every measured element computes `border-radius: 0px` — buttons, the header, tabs, the logo cells, the footer. The single non-zero radius recorded is a 9999px pill value on one element (`rounded.pill`), which does not appear on any primary control. Borders are 1px hairlines in #414141, and the outlined CTA uses a 2px orange border. Logos sit inside perfectly square, evenly ruled cells, reinforcing a spreadsheet-like or terminal-like grid.

## Components

- **Primary button ("Get in touch")** — #f35815 fill, #ffffff label, monospace 16px weight 600, 0px radius, 32px tall with 0px 8px padding. It sits at the far right of the header.
- **Outlined button ("View sandbox")** — transparent fill, #414141 label, `2px solid #f35815` border, 0px radius, 32px tall, 0px 8px padding.
- **Tab button** — the "Vitess / Neki / Postgres" switcher: the selected tab is #111111 with #fafafa label, 56px tall with 16px 0px padding, full-third width (362px).
- **Announcement bar** — 40px #fbca00 strip, #111111 text at weight 500, a "Learn more" link in an inverse #111111 chip.
- **Header / nav** — 32px row on #fafafa; nav links are #414141 weight 600 separated by literal "|" characters; on hover the links turn #000000 and "Sign in" turns #f35815. Dropdown triggers are written with a "▾" glyph.
- **Inline link** — #0b6ec5, weight 400, no underline at rest.
- **Logo wall** — 5 columns of square cells outlined in #414141, each holding a single monochrome customer logo.
- **Quote** — monospace paragraph in quotes, followed by "— Name · Title, Company" in #414141.
- **Footer** — #414141 weight-600 text with 0px 40px padding, column headings in bold, muted #c1c1c1 secondary links.

## Design System Architecture

PlanetScale publishes brand guidelines at https://planetscale.com/brand: black (#1a1a1a) and white (#fafafa) as primary colors, orange (#f35815) as the accent, Inter as the brand font, Roboto Mono for code, and the system monospace font for the marketing site's ASCII diagrams. The page also distributes the full lockup and logo mark in black and white as SVG, PNG and EPS. No public component library or token package was found on the pages opened. The shipped CSS shows a Tailwind v4 build: custom properties such as `--tw-inset-shadow`, `--spacing-sm: 4px`, `--spacing-px: 1px`, `--text-2xl--letter-spacing: -.019em`, semantic aliases (`--bg-primary`, `--background-color-primary`, `--text-color-contrast: #000`) and full color ramps (`--blue-600`, `--orange-700`, `--gray-600`). Breakpoints in the stylesheet are Tailwind's defaults (40rem, 48rem, 64rem, 80rem, 96rem) plus one 801px query.

## Do's and Don'ts

**Do**
- Set every piece of text in the system monospace stack at 16px/24px and build hierarchy with weight (400/500/600/700) and color (#414141 vs #000000 vs #737373).
- Keep the canvas #fafafa and the ink #414141; reserve #f35815 for the call to action and its outlined sibling.
- Keep every corner at 0px and use 1px #414141 hairlines to draw grids, tabs and diagrams.
- Color inline links #0b6ec5.
- Follow the brand page: black and white most of the time, orange as an accent; Inter (no Bold) for brand materials.

**Don't**
- Don't introduce a larger display size, a hero image or a gradient — the measured page has none.
- Don't add drop shadows or rounded buttons.
- Don't use orange for body text or large fills; it appears only on controls.
- Don't use Bold weights of Inter in brand materials (brand page rule).
- Don't treat the yellow #fbca00 as a general accent — it is the announcement strip.

## Responsive Behavior

Measured at a 390px mobile viewport: the font size set grows from one size to two — 16px (8,391 characters) plus 12px (898 characters) — so some secondary text drops to 12px on mobile. The announcement band grows from 40px to 64px tall as its text wraps, and the header grows from 32px to 80px tall with only 3 header links visible (Sign in, Get in touch, and a "Navigation" control) versus 7 on desktop; the extractor recorded no visible menu-toggle button by its own detection. The logo grid shows at most 2 columns on mobile versus 5 on desktop. The h2 and body text keep 16px/24px. The primary button keeps its 32px height, 0px 8px padding and #f35815 fill. Other mobile behaviour (tab switcher layout, footer arrangement, diagram scaling) was not measured.

## Iteration Guide

1. Start from the frontmatter: `--font-mono` stack, 16px/24px, #fafafa canvas, #414141 text.
2. Build sections as bold 16px #000000 labels over 16px paragraphs; never scale type up.
3. Add the #fbca00 announcement strip and the 32px header with pipe-separated links before anything else.
4. Draw any grid (logos, tabs, diagrams) with 1px #414141 borders and 0px radius.
5. Use exactly one solid #f35815 CTA per view, optionally paired with the 2px orange outlined variant.
6. Check against the brand page (https://planetscale.com/brand) for logo, color and font usage in non-web materials.
7. Re-run the gate after any token change; never invent sizes beyond 16px or 12px.
