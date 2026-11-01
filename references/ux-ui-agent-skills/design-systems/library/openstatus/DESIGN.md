---
version: alpha
name: OpenStatus
category: "Developer Tools & IDEs"
description: "openstatus.dev is a monospaced, square-cornered page: Commit Mono for every heading and paragraph (30px/36px 600 h1, 16px/28px body), white #ffffff cells divided by 1px #e5e5e5 grid lines, #0d0d0dcc ink, a #171717 'Get started free' block button at 0px radius, and status colors #20c45f, #f49f1e and #3a81f6."
colors:
  canvas: "#ffffff"
  ink: "#0d0d0dcc"
  primary: "#171717"
  on-primary: "#ffffff"
  foreground: "#0a0a0a"
  ink-strong: "#0b0b0be6"
  ink-muted: "#737373"
  border: "#e5e5e5"
  muted: "#f5f5f5"
  success: "#20c45f"
  warning: "#f49f1e"
  info: "#3a81f6"
  destructive: "#e7000b"
typography:
  display:
    fontFamily: commitMono, "commitMono Fallback"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 36px
    letterSpacing: "-0.75px"
  heading:
    fontFamily: commitMono, "commitMono Fallback"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: "-0.6px"
  subheading:
    fontFamily: commitMono, "commitMono Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: commitMono, "commitMono Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  small:
    fontFamily: commitMono, "commitMono Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  label:
    fontFamily: commitMono, "commitMono Fallback"
    fontSize: 12px
    fontWeight: 400
    letterSpacing: 1.2px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 16px
    height: 56px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.foreground}"
    typography: "{typography.small}"
    rounded: "{rounded.none}"
    padding: 0px 12px
    height: 32px
    border: "1px solid #e5e5e5"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 16px
  nav:
    backgroundColor: "{colors.border}"
    textColor: "{colors.foreground}"
    rounded: "{rounded.none}"
    borderColor: "{colors.border}"
  nav-cell:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.foreground}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 16px
    height: 56px
  nav-cell-hover:
    backgroundColor: "{colors.muted}"
  footer:
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.none}"
    borderColor: "{colors.border}"
---

# OpenStatus

## Overview

openstatus (www.openstatus.dev, measured 2026-10 at 1280px; title "Free & Open Source Uptime Monitoring, Status Page and Incident Response from Slack or AI") is an open-source status-page and monitoring product, and its site reads like a well-formatted terminal document. Everything is set in a monospaced typeface, every corner is square, and the page is divided into white cells by thin `#e5e5e5` rules.

The header is a ruled strip of cells: the openstatus logo, Products ▲, Resources ▲, Pricing, a "Search... ⌘K" field and a blue "Dashboard" link, with a "[copy link]" control below. The hero is left-aligned: the h1 "Run status pages and incident response from Slack or your AI agent." at 30px, a paragraph, a black "Get started free" button next to "GitHub 9k+", a one-line pricing note, and an embedded status-page preview ("Degraded Performance") with rows of green uptime bars, a few amber and red days, and "Operational" labels.

Below, a logo grid ("Trusted by teams who ship transparency": Cal.com, Documenso, Twelve Labs, Passbolt, Whitebit, Superwall, Probo, Roundtable, Simplspace...), then the long narrative "One incident, start to finish": a vertical timeline of seven numbered steps (Your monitor catches it first; Declare the incident, get a channel; Tell customers from Slack, or with your favorite agent; Mitigate in the channel, update the page; The postmortem arrives as a draft; The record stays public; The trail exists when the auditor asks), each with a colored status dot, a short explanation, underlined links and a mock Slack or status-page panel. The page closes with testimonials ("In their words"), "For humans and agents" (CLI, API, MCP server, Terraform), a flat pricing table (Hobby $0, Starter $30/mo, Pro $100/mo, Scale $500/mo), "Get started", an FAQ list and a multi-column footer with a light/dark/system theme switch.

The microcopy is plain and specific, often bracketed or terminal-like ("[copy link]", "⌘K"), and there is no photography: the visuals are the product's own status bars, timelines and chat threads.

## Colors

The palette is the neutral shadcn/ui theme plus four status colors.

- **Canvas `#ffffff`** (`--background`, `--card`): every cell and the page.
- **Ink `#0d0d0dcc`**: 80% near-black, the most-read text color (5,181 weighted characters), for paragraphs.
- **Foreground `#0a0a0a`** (`--card-foreground`, `--popover-foreground`): headings and nav (4,787 characters). `#0b0b0be6` is a 90% variant.
- **Muted text `#737373`** (`--muted-foreground`): dates, captions, footer (2,554 characters).
- **Primary `#171717`** (`--sidebar-primary`, `--accent-foreground`): the "Get started free" fill. Hover fades it to 90% opacity.
- **Border `#e5e5e5`** (`--border`, `--input`): 87 bordered elements plus the header strip, whose `#e5e5e5` background shows through 1px gaps as grid lines.
- **Muted `#f5f5f5`** (`--muted`, `--accent`): hover fill for nav cells and buttons.
- **Status**: `--success: #20c45f` (uptime bars, "Operational"), `--warning: #f49f1e` (degraded days and timeline dots), `--info: #3a81f6` ("Dashboard" link and info dots), and `#e7000b` for errors.

The root also declares a 17-step `--rainbow-*` scale and a syntax-highlighting set (`--sh-keyword: #e02518`, `--sh-string: #007f7a`, `--sh-class: #2d5e9d`).

## Typography

The site is set almost entirely in **Commit Mono** (`commitMono`, 12,581 weighted characters, loaded at 400 and 700 plus an italic), with `ui-monospace` for code (362) and a trace of Inter (3). The bundle also ships Cal Sans SemiBold, not used on visible text of the home page.

- **Display (h1)**: 30px / 36px, weight 600, -0.75px.
- **Section headings (h2)**: 24px / 32px, weight 600, -0.6px.
- **Step titles (h3)**: 16px / 24px, weight 500.
- **Body**: 16px / 28px, weight 400, the most-read size (7,691 weighted characters); the generous 28px line height gives the monospaced paragraphs air.
- **Small**: 14px / 20px weight 500 on outline buttons and tables.
- **Labels**: 12px with +1.2px tracking for timestamps and metadata.

Only weights 400, 500 and 600 appear. Headings are tracked slightly tight; labels open.

## Layout

The desktop page is 1280px wide and 8,466px tall. Content sits in a single centred column from x 129 to 1151 (header 1,024px wide, h1 992px). The structure is a ruled grid: the header and several sections use a `#e5e5e5` background with 1px gaps between white cells (12 one-pixel gaps measured), so lines form without borders. Logo grids run four columns; the incident timeline uses two (text left, product panel right). Spacing: padding 16px (174 elements) dominates, then 4px, 8px and 12px; gaps of 8px, 16px and 12px, and 48px between timeline steps. The root sets `--spacing: .25rem`.

## Elevation & Depth

The page is flat. The only measured shadow, on 11 elements including the primary button, is a hairline shadow, `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px`. Depth comes from rules and cells; product panels are outlined white boxes. The stylesheet also contains `0 4px 12px rgba(0,0,0,.1)` for floating elements, not seen on the static home page.

## Shapes

Everything is square. The root sets `--radius: 0rem`, the measured radius list contains only one `50%` element (a status dot), and buttons, inputs, cards, tables and the header all compute 0px. Status indicators are small circles; uptime bars are thin vertical rectangles.

## Components

- **Primary button**: `#171717` block, white Commit Mono 16px / 24px weight 500 "Get started free", padding 16px, 56px tall, 0px radius, hairline shadow; hover 90% opacity.
- **Header cell**: white cell, 16px / 24px text, padding 16px, 56px tall, separated by 1px grid lines; hover `#f5f5f5`.
- **Outline button**: white, 1px `#e5e5e5` border, 14px / 20px weight 500, 32px tall, padding 0 12px ("Get updates", "Create your status page").
- **Status page widget**: title row with a "Degraded Performance" banner, Status/Events/Monitors tabs, monitor rows with green, amber and red daily bars and "Operational" labels in `#20c45f`.
- **Timeline step**: colored dot, 12px tracked timestamp, 16px weight 500 title, body paragraph, underlined links, mock panel on the right.
- **Pricing table**: ruled rows for Hobby, Starter, Pro and Scale with plain monospaced prices.
- **FAQ**: full-width ruled rows with a ▸ disclosure marker.
- **Footer**: `#737373` 14px links in columns, an "Operational" status link and a [light] [dark] [system] switch.

## Design System Architecture

openstatus is open source; its web app styles live in https://github.com/openstatusHQ/openstatus/blob/main/apps/web/src/styles/globals.css, which sets `--radius: 0rem` and maps `--font-mono` to `var(--font-commit-mono)` and `--font-cal` to Cal Sans. The shipped page exposes the shadcn/ui variable contract on the root (`--background`, `--foreground`, `--card`, `--popover`, `--primary-foreground`, `--secondary-foreground`, `--muted`, `--muted-foreground`, `--accent`, `--border`, `--input`, `--ring: #a1a1a1`, `--sidebar-*`, `--chart-1..5`) in the neutral palette, extended with product roles (`--success`, `--warning`, `--info`), the `--rainbow-*` scale used for status visualisations, and `--sh-*` syntax-highlight colors. The site is built with Next.js and Tailwind (`--tw-*`, `--text-*`, `--spacing`).

## Do's and Don'ts

- Do set every text style in Commit Mono; keep body at 16px / 28px.
- Do keep all corners at 0px and draw structure with 1px `#e5e5e5` lines or gap-grids.
- Do use `#171717` for the single primary action and white outlined buttons for the rest.
- Do reserve green, amber, blue and red for status meaning.
- Do write in short, literal sentences and bracketed controls.
- Don't add rounded cards, gradients or drop shadows beyond the hairline shadow.
- Don't introduce a display font for headings; hierarchy comes from size and weight 600.
- Don't use photography; show real status data.

## Responsive Behavior

Measured at a 390px mobile viewport: the h1 keeps 30px / 36px and h2s keep 24px / 32px; body text keeps 16px / 28px. The primary button keeps its 56px block style. The extractor recorded three header links still visible and no menu toggle, with the `#e5e5e5` header strip retained, and at most two card columns. Content spans x 1 to 389, and the page grows to 15,336px. The most-read mobile size is 16px. Breakpoints between 390px and 1280px were not measured.

## Iteration Guide

1. Load Commit Mono; set h1 30px / 36px 600, h2 24px / 32px 600, body 16px / 28px.
2. Build the header and sections as white cells on a `#e5e5e5` background with 1px gaps.
3. Add the 56px `#171717` square button and 32px outlined secondaries.
4. Use `#0d0d0dcc` for prose, `#0a0a0a` for headings and `#737373` for metadata.
5. Show status with `#20c45f`, `#f49f1e`, `#3a81f6` and `#e7000b` only.
6. Keep `--radius: 0rem`; check the open-source `globals.css` before adding tokens.
