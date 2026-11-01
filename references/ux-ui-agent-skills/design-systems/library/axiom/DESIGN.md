---
version: alpha
name: Axiom
category: "Backend, Database & DevOps"
description: "Axiom's site is a near-black (#090909) observability page set in Geist with Berkeley Mono for data: Geist 64px/64px weight 500 headlines at -0.96px, 63%-white #ffffffa1 body text, an orange #da5c2b 'Start free' button at 6.08px radius, #1f1f1f-outlined secondary buttons, and #0c0c0c product panels with #222222 borders."
colors:
  canvas: "#090909"
  ink: "#ffffffa1"
  primary: "#da5c2b"
  on-primary: "#ffffff"
  brand: "#ff7037"
  surface-panel: "#0c0c0c"
  surface-raised: "#111111"
  ink-strong: "#fafafa"
  ink-light: "#eeeeee"
  ink-soft: "#b4b4b4"
  ink-muted: "#7b7b7b"
  ink-faint: "#ffffff70"
  code-orange: "#ffa057"
  code-blue: "#70b8ff"
  hairline: "#222222"
  link-border: "#1f1f1f"
typography:
  display:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 64px
    fontWeight: 500
    lineHeight: 64px
    letterSpacing: "-0.96px"
  display-mobile:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: "-0.6px"
  heading:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
    letterSpacing: "-1px"
  subheading:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-0.4px"
  body:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 19.5px
  nav:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 13px
    fontWeight: 450
    lineHeight: 19.5px
  footer:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  control-sm: 4.56px
  control: 6.08px
  panel: 7.6px
  3xl: 8px
  4xl: 10px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.control}"
    padding: 0px 12px
    height: 36px
  button-primary-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.control}"
    padding: 0px 8px
    height: 28px
  button-secondary:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.control}"
    padding: 0px 12px
    height: 36px
    border: "1px solid #1f1f1f"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    height: 65px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.control}"
    padding: 4px 10px
    height: 28px
  card:
    backgroundColor: "{colors.surface-panel}"
    textColor: "{colors.ink-muted}"
    rounded: 7px
    border: "1px solid #222222"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, oklab(0.14 -0.00000137836 0.00000326335) 0px 0px 40px 20px
  footer:
    textColor: "{colors.ink-muted}"
    typography: "{typography.footer}"
    padding: 128px 16px 56px
---

# Axiom

## Overview

Axiom (axiom.co, measured 2026-10 at 1280px; title "Axiom - The modern machine data platform") markets a log and event data platform with a page that looks like its own product. The canvas is near-black `#090909`, almost every section contains a live-looking product screenshot (query editor, event tables, cost chart, AI agent terminal), and the only warm color is an orange "Start free →" button.

The 65px header holds the AXIOM wordmark, Platform, Solutions, Use cases, Pricing, Docs and Resources, plus "Sign in" and a small orange "Start free". The hero headline "The modern machine data platform." is left-aligned in Geist 64px with a grey paragraph and two buttons: orange "Start free" and outlined "Talk to sales". A large product panel follows (a query editor with Stream, Dashboards, Monitors, Datasets and Builder tabs, an event list and an "axiom-agent" terminal answering "Why did checkout p95 spike?"), then a quote card and a logo grid (Asana, Bedrock, Carbon, Convex, Eventbrite, Factory, Framer...).

Further sections are short, punchy two-line statements with a "Learn more" link and a product visual: "What worked at terabytes doesn't work at petabytes.", "No data left behind.", "Predict every bill." (a cost slider with $25 and competitors marked "137.2× More Expensive"), a large centred customer quote, "Modern backend. Classic UX.", "No rip-and-replace. No renegotiation.", "Built for engineers and their agents.", "Run a query. No account required.", a "Compare Axiom with" grid (Splunk, Datadog, ClickHouse, Elastic) and a closing "Keep every log. Predict every bill." The copy is confident and comparative; the art is entirely UI and charts.

## Colors

- **Canvas `#090909`**: the page background (largest measured area); mobile bands measure `#070707` and `#080808`.
- **Panels `#0c0c0c`** (second-largest area) and **raised `#111111`**, `#0f0f0f`: product panels and cards.
- **Ink `#ffffffa1`**: 63% white, the most-read text color (3,342 weighted characters), for paragraphs and nav links.
- **Headings `#fafafa`** and **`#eeeeee`**: h1, h2, h3 and strong text.
- **Secondary text**: `#7b7b7b` (footer, card descriptions; 2,460 characters), `#b4b4b4`, `#ffffff70`.
- **Primary `#da5c2b`**: the "Start free" button fill. Hover was measured with no change. The root declares `--brand: #ff7037` and an orange scale (`--orange-9: #fa6800`, `--orange-11: #cc4e00`); `#fa6800` and `#de5820` also appear as small fills.
- **Data accents**: `#ffa057` (orange values in code and tables, 272 characters) and `#70b8ff` (blue identifiers).
- **Borders**: `#222222` on panels (23 elements), `#1f1f1f` on outlined buttons, plus `#3a3a3a` and `#2a2a2a`.

The root also ships complete Radix-style color scales (`--red-1` to `--red-12`, `--blue-9: #0090ff`, `--green-9: #2da46b`, `--iris-9`...) and shadcn-style role variables (`--card`, `--popover`, `--muted`, `--border`) for light surfaces, which the dark marketing page does not use on visible elements.

## Typography

Two families: **Geist** (6,954 weighted characters, variable 100 to 900) for all prose and UI, and **Berkeley Mono** (`berkeleyMono`, 3,209 characters, loaded from `Berkeley_Mono_Variable`) for code, data tables, terminal output and uppercase labels.

- **Display**: Geist 64px / 64px, weight 500, -0.96px.
- **Section headings**: 40px / 44px, weight 500, -1px; 36px (-0.9px) and 48px (-1.2px) variants.
- **Card titles (h3)**: 16px / 24px, weight 500, -0.4px.
- **Body**: 15px / 24px, weight 400.
- **UI text**: 13px is the most-read size (3,366 weighted characters), often tracked -0.325px.
- **Buttons**: 13px / 19.5px weight 500; nav links use the variable weight 450.
- **Labels**: 11px with +1.1px tracking (uppercase footer headings such as PLATFORM, USE CASES) and 12px with +0.6px.

Negative tracking of about -2.5% applies at every size from 13px up; only small uppercase labels are tracked open.

## Layout

The desktop page is 1280px wide and 10,026px tall, with content from x 20 to 1276 and up to seven columns in the logo grid; the extractor recorded up to four card columns. Text blocks are left-aligned in a narrow column (body paragraphs 524px wide) beside or above wide product panels. Spacing is tight and small-step: gaps of 8px (204 elements), 6px, 10px and 12px; paddings of 8px, 12px, 4px, 10px and 14px, with 96px between major sections and 128px above the footer.

## Elevation & Depth

Elevation is subtle and dark. The hero product panel uses a large, soft halo of near-black, `oklab(0.14 ...) 0px 0px 40px 20px`, and 11 elements use a faint `oklab(0 0 0 / 0.05) 0px 0px 40px 20px` (the root also declares a smaller `--shadow-halo-md: 0 0 16px 6px lab(0% 0 0)`). Four elements carry a small Tailwind-style drop shadow, `rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px`, and two have a top highlight, `rgba(255, 255, 255, 0.5) 0px 0.5px 0px 0px inset`. Status dots glow in blue, purple and yellow with `0px 0px 6px 2px` shadows at 25% opacity. Otherwise depth comes from 1px borders and the three dark surface steps.

## Shapes

Radii come from one base, `--radius-lg: .475rem` (7.6px), with `--radius-md: calc(.475rem * .8)` (6.08px) and `--radius-sm: calc(.475rem * .6)` (4.56px).

- **6.08px** (46 elements): buttons and nav links.
- **4.56px** (38): small controls.
- **4px** (71) and **2px** (36): tags, inputs and table elements.
- **7px** / **7.6px** / **10.64px**: product panels and cards; tabbed frames round only the top corners (`10.64px 10.64px 0px 0px`).
- **Pill** (16 elements): status chips.

## Components

- **Primary button**: `#da5c2b`, white Geist 13px / 19.5px weight 500 "Start free →", 36px tall, padding 0 12px, 6.08px radius. A 28px header version uses weight 450 and padding 0 8px.
- **Secondary button**: transparent, `#fafafa` label, 1px `#1f1f1f` border, same size ("Talk to sales").
- **Nav link**: `#ffffffa1` 13px weight 450, padding 4px 10px, 28px tall, 6.08px radius; hover turns the text fully white on a slightly lighter fill.
- **Product panel**: `#0c0c0c`, 1px `#222222` border, 7px radius, dark halo shadow; inside, Berkeley Mono tables with orange and blue values.
- **Feature card**: `#0f0f0f`, 10.64px radius, illustration on top, 16px title, grey description.
- **Focus**: a 3px ring at 30% of an orange-red, recorded as `oklab(0.628038 0.130006 0.109377 / 0.3) 0px 0px 0px 3px` on the primary button.
- **Footer**: `#7b7b7b` Geist 13px / 18px links under 11px uppercase mono headings, padding 128px 16px 56px.

## Design System Architecture

No public Axiom brand or design-system page was found: https://axiom.co/brand returned HTTP 404. The shipped CSS shows the system the page is built on: Tailwind theme variables (`--tw-*`, `--text-xl`, `--container-*`), shadcn/ui-style semantic roles (`--card`, `--popover`, `--popover-foreground`, `--muted`, `--border`, `--primary-foreground`, `--sidebar-primary`, `--chart-2`), Radix-style 12-step color scales (`--orange-1` to `--orange-12`, `--gray-10`, `--iris-9`), a single radius base (`--radius-lg: .475rem` with multiplied `-md` and `-sm`), a brand variable `--brand: #ff7037`, and illustration tokens such as `--illustration-frame-xl: 24px`. Fonts are self-hosted Geist and Berkeley Mono under `_next/static/`, and a `--c15t-*` variable group belongs to the cookie-consent widget, not the brand.

## Do's and Don'ts

- Do keep the page near-black (`#090909` to `#111111`) and let product screenshots carry the visual interest.
- Do use orange `#da5c2b` only for the "Start free" action; keep secondary buttons outlined in `#1f1f1f`.
- Do write headlines as two short sentences or contrasts ("No rip-and-replace. No renegotiation.").
- Do set prose in Geist with negative tracking and data in Berkeley Mono.
- Do derive radii from the 7.6px base (6.08px buttons, 4.56px small controls).
- Don't brighten body text to pure white; it is 63% white.
- Don't introduce light sections or colored backgrounds.
- Don't use the cookie-widget `--c15t-*` variables as brand tokens.

## Responsive Behavior

Measured at a 390px mobile viewport: the h1 drops from 64px / 64px to 40px / 40px (-0.6px) and section h2s from 40px / 44px to 30px / 36px (-0.75px). Body text keeps 15px / 24px. The orange "Start free" button keeps its 36px height and 101px width. The header stays 65px tall with an "Open menu" toggle and one header link visible. Content runs from x 16 to 374, with at most two card columns recorded. The most-read mobile size is 13px. Breakpoints between 390px and 1280px were not measured.

## Iteration Guide

1. Set `#090909` canvas, `#ffffffa1` body, `#fafafa` headings.
2. Load Geist and Berkeley Mono; headings at weight 500 with -1.5% to -2.5% tracking.
3. Add the orange 36px "Start free →" button and an outlined secondary at 6.08px radius.
4. Pair each two-line statement with a `#0c0c0c` product panel (1px `#222222`, 7px radius, dark halo).
5. Keep spacing on the 8px/12px grid and leave 96px between sections.
6. Pick extra colors from the root's orange and gray scales before adding new ones.
