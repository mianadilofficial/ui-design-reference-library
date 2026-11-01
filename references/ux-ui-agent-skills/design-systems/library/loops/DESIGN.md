---
version: alpha
name: Loops
category: "Product & SaaS"
description: "Loops (loops.so) is an email platform for SaaS with a warm stone palette: Newsreader 500 serif headlines (44px, -0.88px), Inter 16.8px/28.56px body in #63635e, near-black #21201c pill buttons (40px radius), #fdfdfc/#f9f9f8 canvas, #e9e8e6 hairlines and an oxblood #7d1b0c footer striped in #fc5200 orange."
colors:
  canvas: "#f9f9f8"
  page-body: "#fdfdfc"
  surface-stone: "#f1f0ef"
  ink: "#21201c"
  ink-muted: "#63635e"
  primary: "#21201c"
  on-primary: "#fdfdfc"
  hairline: "#e9e8e6"
  border-button: "#dad9d6"
  border-strong: "#cfceca"
  accent-orange: "#fc5200"
  accent-tan: "#ff8a1f"
  accent-amber: "#ffb21c"
  oxblood: "#7d1b0c"
  footer-text: "#fff4ec"
  footer-text-muted: "#ffece2bd"
typography:
  display:
    fontFamily: Newsreader, "Newsreader Placeholder", serif
    fontSize: 44px
    fontWeight: 500
    lineHeight: 47.52px
    letterSpacing: "-0.88px"
  heading:
    fontFamily: Newsreader, "Newsreader Placeholder", serif
    fontSize: 25.28px
    fontWeight: 500
    lineHeight: 29.072px
  heading-mobile:
    fontFamily: Newsreader, "Newsreader Placeholder", serif
    fontSize: 26.56px
    fontWeight: 500
    lineHeight: 30.544px
  mock-serif:
    fontFamily: ui-serif, Georgia, "Iowan Old Style", "Times New Roman", serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 33.6px
    letterSpacing: "-0.6px"
  body:
    fontFamily: Inter, "Inter Placeholder", sans-serif
    fontSize: 16.8px
    fontWeight: 400
    lineHeight: 28.56px
  body-mobile:
    fontFamily: Inter, "Inter Placeholder", sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 24.65px
  lead-link:
    fontFamily: Inter, "Inter Placeholder", sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: "-0.2px"
  button:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.14px"
  footer:
    fontFamily: Inter, "Inter Placeholder", sans-serif
    fontSize: 13px
    fontWeight: 500
    lineHeight: 18.2px
    letterSpacing: "-0.13px"
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 7px
  2xl: 8px
  3xl: 9px
  4xl: 10px
  card: 12px
  panel: 14px
  cta: 40px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 9px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.cta}"
    padding: 10px 20px
    height: 44px
    boxShadow: rgba(255, 255, 255, 0.05) 0px 1px 2px 0px inset, rgba(28, 25, 23, 0.14) 0px 2px 5px 0px, rgba(28, 25, 23, 0.3) 0px 8px 18px -12px
  button-secondary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 14px
    height: 44px
    borderColor: "{colors.border-button}"
  button-secondary-hover:
    backgroundColor: "{colors.canvas}"
    borderColor: "{colors.border-strong}"
    boxShadow: color(srgb 0.129412 0.12549 0.109804 / 0.07) 0px 1px 3px 0px
  chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.pill}"
    padding: 7px 13px
    height: 33px
    borderColor: "{colors.hairline}"
  nav-link-hover:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.lead-link}"
  card:
    backgroundColor: "{colors.surface-stone}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    padding: 4px
    boxShadow: rgba(33, 32, 28, 0.16) 0px 18px 46px 0px, rgba(33, 32, 28, 0.08) 0px 3px 10px 0px
  footer:
    backgroundColor: "{colors.oxblood}"
    textColor: "{colors.footer-text}"
    typography: "{typography.footer}"
    padding: 16px 0px 101px
---

## Overview

loops.so ("Loops | Email Platform for SaaS: Marketing & Transactional") presents one product — "the email sending platform for SaaS teams" — with a calm, editorial, almost paper-like look. The page is warm off-white from top to bottom (`#fdfdfc` fading to `#f9f9f8`), headlines are set in the serif **Newsreader** at weight 500, and body copy is grey **Inter** at a generous 16.8px/28.56px. There are no hero illustrations: the "imagery" is the product itself, shown as quiet, finely bordered UI panels — a campaign sidebar, an AI assistant thread, a workflow graph, a theme editor, analytics with an orange line chart, an API request, integration tiles and a deliverability panel labelled "Healthy".

The page closes on a dramatic shift: an oxblood (`#7d1b0c`) footer with the line "Start sending better email today" and vertical stripes of orange, tan and amber running down the right edge of the page from the hero to the footer — the only saturated colour on the site.

Copy is plain and specific: "One platform for every email", "Lifecycle workflows that run themselves", "An easy yes from engineering", "Built-in protection for sender reputation". Each section ends with a row of small pill links ("Learn: Triggers, Branching, Playbooks, More →").

## Colors

All colours are measured on the page; most also appear as `--token-*` and `--laod-*` root variables.

- **Page `#fdfdfc`** (`page-body`) and **canvas `#f9f9f8`** — the body background is a gradient `linear-gradient(rgb(253, 253, 252) 0%, rgb(249, 249, 248) 100%)`.
- **Stone `#f1f0ef`** — product panels and cards; **`#e2e1de`** a small surface.
- **Ink `#21201c`** — headings, primary text (2,624 characters), the primary button fill.
- **Muted `#63635e`** — body paragraphs and secondary links (2,389 characters).
- **Hairlines** — `#e9e8e6` (69 borders), `#dad9d6` (button borders), `#cfceca` (hover borders).
- **Orange `#fc5200`** (`--laod-o`), **tan `#ff8a1f`** (`--laod-tan`), **amber `#ffb21c`** (`--laod-am`) — the decorative stripes and the analytics line; orange is also measured as text and a small background.
- **Oxblood `#7d1b0c`** (`--laod-ox`) — the footer band (measured as the mobile footer fill and as text colour).
- **Footer text `#fff4ec`**, with translucent `#ffece2bd` and `#ffece2c7` for secondary footer text.
- Small UI accents inside the product mock: `#a16207`, `#d04806`, `#92400e`, `#43617d`, `#22c55e`.

## Typography

- **Newsreader** (500) — h1 and section headings, a serif with a bookish voice.
- **Inter** (400, 500, 600, 700, plus 400/500 italic) — everything else.
- `ui-sans-serif`/system stack (1,388 characters) and `ui-monospace` (278) appear inside the product mocks; `ui-serif`/Georgia/Iowan Old Style is used in the theme-editor demo heading.

| Role | Family | Size / line-height | Weight | Tracking |
| --- | --- | --- | --- | --- |
| h1 | Newsreader | 44px / 47.52px | 500 | -0.88px |
| Section heading (h2) | Newsreader | 25.28px / 29.072px | 500 | normal |
| Theme-demo heading | ui-serif | 30px / 33.6px | 400 | -0.6px |
| Lead link (inline links in hero copy) | Inter | 20px / 28px | 400 | -0.2px |
| Body | Inter | 16.8px / 28.56px | 400 | normal |
| Pill button | Inter | 14px / 20px | 500 | -0.14px |
| Footer | Inter | 13px / 18.2px | 500 | -0.13px |

Small sizes dominate by character count (12px: 1,587; 14px: 1,143) because of the dense product mocks. Inter weights in use include 450, 550 and 650. Tracking is negative and proportional (about -1% of size).

## Layout

The measured page is 7,279px tall at 1280px. The hero text block is left-aligned and the main content column runs from about x=133 to x=1216. Each section follows the same three-part pattern: Newsreader heading + two lines of grey Inter, a large framed product panel, then a "Learn" row of pill chips.

Spacing is tight and fine-grained: gaps of 10px (118), 8px, 12px (72 each), 7px, 6px, 2px, 4px, 24px; paddings of 12px (58), 8px, 7px, 10px, 13px, with 46px for panel insets. Maximum card columns measured: 4 (integration tiles).

Header: Loops logo at left; Guides, Pricing, Docs, an outlined "Log in" pill and a dark "Get started" pill at right (5 header links measured visible). Under the hero CTAs is a monochrome logo strip (Framer, Linear, Perplexity, Clerk, Reuters, Zed, Ollama and others).

## Elevation & Depth

Shadows are soft and warm (tinted with `rgba(33, 32, 28, …)` or `rgba(28, 25, 23, …)` rather than pure black):

- Product cards: `rgba(33, 32, 28, 0.16) 0px 18px 46px 0px, rgba(33, 32, 28, 0.08) 0px 3px 10px 0px`.
- Primary button: `rgba(255, 255, 255, 0.05) 0px 1px 2px 0px inset, rgba(28, 25, 23, 0.14) 0px 2px 5px 0px, rgba(28, 25, 23, 0.3) 0px 8px 18px -12px`.
- Hairline shadows: `rgba(0, 0, 0, 0.04) 0px 1px 2px 0px` (12), `rgba(28, 25, 23, 0.055) 0px 2px 6px 0px` (9), and inset 1px rings `rgb(233, 232, 230) 0px 0px 0px 1px inset` used instead of borders.
- Large panel: `rgba(0, 0, 0, 0.024) 0px 1px 2px 0px, rgba(0, 0, 0, 0.055) 0px 18px 44px 0px` with a white 1px inset top highlight.

## Shapes

- **999px** (35) — pill buttons and chips.
- **6px** (30), **10px** (23), **8px** (22), **7px** (16) — controls and rows inside the product UI.
- **12px** — cards; **14px** (7) — framed panels.
- **40px** — the primary "Get started" button.
- **50%** — avatars and status dots; 4px, 9px, 5px, 2px for small UI elements.

## Components

- **Primary button** ("Get started") — `#21201c` fill, `#fdfdfc` label (measured in the hover pass), padding 10px 20px, 44px tall, 40px radius, the three-layer button shadow. The label's font size and family were not measured (the outer anchor reports the browser defaults).
- **Secondary pill** ("Book a demo", "Log in") — `#fdfdfc` fill, 1px `#dad9d6` border, `#21201c` Inter 14px/500, padding 8px 14px, 999px radius. Hover: fill `#f9f9f8`, border `#cfceca`, shadow `0 1px 3px` at 7%.
- **Learn chip** ("Triggers", "Branching", "Playbooks") — `#f9f9f8` fill, 1px `#e9e8e6` border, `#63635e` 14px text, padding 7px 13px, 33px tall, pill.
- **Header link** ("Pricing", "Docs") — no fill at rest, `#e9e8e6` fill on hover.
- **Hero lead links** ("marketing", "product", "transactional") — `#63635e` 20px, turning `#21201c` on hover.
- **Product card** — `#f1f0ef`, 12px radius, 4px padding, a 1px translucent white border and the warm 18px/46px shadow.
- **Footer** — oxblood with `#fff4ec` Inter 13px/500 links in four columns (Company, Product, Resources, Contact) and a status line.

## Design System Architecture

No public Loops design system or brand page was found: https://loops.so/brand returned HTTP 404 (recorded in SOURCES.json). The site ships 310 root variables. Most are UUID-named colour tokens (`--token-95e1bfcc-…: #fc5200`, `--token-83f5fefd-…: #fdfdfc`, `--token-65538b51-…: #f9f9f8`, `--token-e5fe42bb-…: #f1f0ef`, `--token-6b4c9de0-…: #dad9d6`, `--token-390b9784-…: #63635e`, `--token-f7d4ccfc-…: #21201c`), with several UUIDs mapping to the same value. A small hand-named set carries the orange family: `--laod-o #fc5200`, `--laod-tan #ff8a1f`, `--laod-am #ffb21c`, `--laod-ox #7d1b0c`. Font stacks use "Inter Placeholder" and "Newsreader Placeholder" fallbacks. The de-facto system is therefore a stone neutral ramp (`#fdfdfc`, `#f9f9f8`, `#f1f0ef`, `#e9e8e6`, `#e2e1de`, `#dad9d6`, `#cfceca`, `#63635e`, `#21201c`) plus four oranges.

## Do's and Don'ts

**Do**
- Use Newsreader 500 for headings and Inter for everything else.
- Keep the background warm off-white and text in `#21201c` / `#63635e`.
- Show the product in framed `#f1f0ef` panels with the warm, soft shadow.
- Use pills for every button and chip; the dark pill is the single primary action.
- Reserve the oranges and oxblood for the edge stripes, data highlights and the footer.

**Don't**
- Don't use pure black or pure grey shadows; tint them with `rgb(33, 32, 28)`.
- Don't bold the serif headlines (500 is the measured weight).
- Don't spread orange into buttons or body text.
- Don't use cold blue-greys; the neutral ramp is warm stone.
- Don't add stock illustration; the product UI is the imagery.

## Responsive Behavior

Measured at 390px:

- No header links visible; a menu toggle labelled "Open navigation" (desktop: 5 links, no toggle).
- h1 stays at 44px/47.52px with tracking -0.66px (desktop -0.88px); h2 grows slightly to 26.56px/30.544px.
- Body measured 17px/24.65px (16.8px/28.56px on desktop).
- Maximum card columns measured 3 (desktop 4).
- The page measured as a single `#f9f9f8` band 7,534px tall followed by a 1,160px oxblood `#7d1b0c` footer band (content x=24 to x=368).

Intermediate breakpoints were not measured.

## Iteration Guide

1. Background: the `#fdfdfc` → `#f9f9f8` gradient. Text: `#21201c` headings, `#63635e` body.
2. Heading in Newsreader 500 (44px for the page title, 25.28px for sections), body in Inter 16.8px/28.56px.
3. Under each section, a framed product panel (`#f1f0ef`, 12–14px radius, warm shadow), then a row of Learn chips.
4. Buttons: one dark 44px pill (40px radius) plus outlined light pills with `#dad9d6` borders.
5. Keep spacing tight inside UI (6–12px) and generous between sections.
6. Finish with the oxblood footer and orange stripe motif; do not reuse the oranges elsewhere.
