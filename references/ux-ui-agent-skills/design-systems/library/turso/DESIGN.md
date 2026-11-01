---
version: alpha
name: Turso
category: "Backend, Database & DevOps"
description: "Turso (turso.tech) is a dark Bunker #0d1318 / #0f1317 page with a single accent, Turso Aqua #4ff8d2: aqua pill CTAs (9999px, 12px 24px, 44px) with black labels hovering to #88ffe4, Inter 60px/800 headlines at -1.5px tracking, 50%-white #ffffff80 body text, #283945 hairlines and 12–16px-radius code and diagram cards."
colors:
  canvas: "#0f1317"
  page-body: "#0d1318"
  page-largest: "#101317"
  ink: "#ffffff80"
  primary: "#4ff8d2"
  on-primary: "#000000"
  ink-strong: "#ffffff"
  ink-faint: "#ffffff59"
  light-gray: "#c5cace"
  ink-bright: "#ffffffe6"
  hairline: "#28394599"
  primary-hover: "#88ffe4"
  card-border: "#283945cc"
  pickled-bluewood: "#293945"
  mirage: "#162129"
  dark-teal: "#183134"
typography:
  display:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 60px
    fontWeight: 800
    lineHeight: 60px
    letterSpacing: "-1.5px"
  display-mobile:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 36px
    fontWeight: 800
    lineHeight: 40px
    letterSpacing: "-0.9px"
  heading:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-0.9px"
  subheading:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 16px
    fontWeight: 400
  button:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 16px
    fontWeight: 600
  link:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 44px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-strong}"
    padding: 20px 24px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    padding: 6px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.card-border}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.1) 0px 8px 10px -6px
  footer:
    textColor: "{colors.primary}"
---

# Turso

## Overview

Turso's page title is "Turso - Millions of Databases. One Architecture." The turso.tech home page (8193px at 1280px) is a dark blue-black developer page with a single electric accent, Turso Aqua. An aqua announcement strip runs across the top ("Turso is joining Supabase to give every agent its own database…"), above a header with the Turso logo, Product, Solutions, Customers, Partners, Blog, Resources, Pricing, a "Login" link and an aqua "Try Cloud free" pill.

The hero is two columns: left, the headline "Millions of Databases." in white and "One Architecture." in aqua, a short paragraph ("Built on SQLite. Fast and lightweight to multiply and run anywhere. Spin a database for every user, agent, and tenant.") and an aqua "Start for free now" pill; right, a code window (`setup.ts`) creating a database per user. A "Trusted by teams building the next generation of software" logo row follows.

The page then walks through the argument: "The database wasn't built for a world where every agent wants its own" with a diagram comparing a "Centralized Model" (one box of tenants T1–T9) to Turso's database-per-tenant fleet; "Five properties of the architecture, not features layered on top" as five numbered cards with aqua links; "From zero to a database per entity in under a minute" with a tabbed code sample; "Replicate to the device. Sync to the cloud." with a customer quote; customer stories (Engine Labs, Adaptive, Poke.com); "Built for modern enterprise architecture" (BYOC deployment, per-database encryption, SOC 2 Type II / GDPR / HIPAA); open-source vs cloud; "Built in the open" with Contribute and Discord panels; and a closing "Build with the database you'll never outgrow" over an isometric field of aqua database cylinders.

## Colors

The brand page lists five colours. Turso Aqua and Bunker were measured directly on the page; Pickled Bluewood is the live `--turso-dark-gray` variable; Mirage and Dark Teal are cited from the brand page only:

- **primary #4ff8d2** — "Turso Aqua", also `--turso-primary-aqua`: every CTA pill, the announcement strip, links, the second headline line and the footer link colour.
- **page-body #0d1318** — "Bunker": the body background and card fills.
- **pickled-bluewood #293945** — "Pickled Bluewood" (`--turso-dark-gray`): the base of the hairline and card-border colours.
- **mirage #162129** — "Mirage" on the brand page.
- **dark-teal #183134** — "Dark Teal" on the brand page.

Measured surfaces: **canvas #0f1317** and **page-largest #101317** — the two dominant dark fills (together about 72% of the capture). Borders: **hairline #28394599** (23 uses) and **card-border #283945cc**; diagram boxes use #3a4e5c.

Text is white at several opacities: **ink #ffffff80** (50%, the most-read colour, body paragraphs), **ink-strong #ffffff** (headings, nav), **ink-bright #ffffffe6**, **ink-faint #ffffff59**, and **light-gray #c5cace** (`--turso-light-gray`). **on-primary #000000** is the label on aqua pills, and **primary-hover #88ffe4** (`--turso-aqua-text`) is their measured hover fill. Accents in diagrams and code: #34d399, #e879f9 and #7dd3fc text, and a magenta #d946ef fill (the capture shows a magenta badge in the Contribute panel). The root variables add `--turso-yellow: #e0ca3c`, `--turso-lime: #a4df95` and `--turso-red: #ff6663`, not measured on the home page.

## Typography

The site uses **Inter** (loaded as a Next.js-hashed `__Inter_f367f3`, variable 100–900) for all text and **Geist Mono** (`--font-geist-mono`) plus the generic `monospace` for code. The brand page does not specify typefaces.

- **display** — Inter 60px / 800 / 60px, -1.5px tracking (the h1). Mobile: 36px / 800 / 40px, -0.9px.
- **heading** — Inter 36px / 700 / 40px, -0.9px for section titles (484 characters at this size and tracking).
- **subheading** — Inter 20px / 600 / 28px ("Centralized Model").
- **body** — Inter 16px / 400; 14px is the most-used size overall (3108 characters).
- **button** — Inter 16px / 600 for CTA pills.
- **link** — Inter 14px / 600 / 20px for aqua text links ("Learn about per-entity isolation →").

Small caps-style labels use positive tracking (12px / 0.3px, 10px / 1px). Code is 13px monospace (661 characters). Inter and Geist Mono are free.

## Layout

The page is 1280px wide with content between x=57 and x=1255. Most sections are left-aligned two-column splits (copy left, code or diagram right); argument sections centre their heading above a full-width diagram. The five-properties block is five equal columns (the extractor's maximum), customer stories three columns, open-source vs cloud two columns, and the community panels two columns of icon grids.

Spacing is generous between sections and moderate inside: paddings 28px (34 uses), 12px, 56px (21 uses), 16px, 20px, 24px, 48px; gaps 6px, 24px, 4px and 56px. Spacing tokens run 4px to 32px.

## Elevation & Depth

Elevation is restrained. The code window and one other element use a Tailwind xl shadow (`rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.1) 0px 8px 10px -6px`). Otherwise depth comes from layered dark blues (#0d1318 cards on #0f1317 and #101317), translucent fills (#0d131880, #0d1318b3, #ffffff05) and thin #283945 borders. Diagrams use dashed (#3a4e5c, 1px dashed) and solid 2px borders to show isolation. The aqua isometric database cylinders in the closing illustration provide the only glow.

## Shapes

Pills (**pill 9999px**, 23 uses) are reserved for actions — every aqua CTA. Cards use **sm 12px** (code window, diagram boxes) and **md 16px** (17 uses); small chips and tenant boxes **xs 8px** (19 uses). Diagram tenants are rounded squares. The isometric cylinders and grids in illustrations echo database iconography.

## Components

- **Primary button** — "Start for free now": #4ff8d2 pill, black Inter 16px/600, 12px 24px padding, 44px tall; hover #88ffe4.
- **Header button** — "Try Cloud free": same pill at 14px/600, 44px tall.
- **Text link** — aqua 14px/600 with an arrow ("See pricing →", "Read the Engine Labs story →").
- **Nav** — white Inter links, 20px 24px padding, 84px tall; link hover turns aqua.
- **Announcement strip** — #4ff8d2 band with #0d1318 14px/500 text; hover fill measured rgb(127, 250, 222).
- **Code window** — #0d1318, 1px #283945cc border, 12px radius, Geist Mono 12px, file tab "setup.ts", the xl shadow.
- **Property card** — numbered label, 20px/600 heading, 14px body in white at 50%, aqua link at the bottom; framed by #283945 lines.
- **Diagram tenant box** — 12px radius, 2px solid or 1px dashed #3a4e5c border, "T1…T9" labels.
- **Badge** — magenta "First Issues", aqua "Community" labels.
- **Footer** — link columns in aqua Inter 14px/500.

## Design System Architecture

Turso publishes a brand page at https://turso.tech/brand with the full logo kit (logo, wordmark and logomark in dark, white, aqua and illustrated variants, as SVG and PNG, plus `/logokit.zip`), the rule "Use these logo files when referencing Turso", and five named colours: Turso Aqua #4FF8D2, Dark Teal #183134, Pickled Bluewood #293945, Mirage #162129 and Bunker #0D1318. The shipped CSS adds a `--turso-*` variable set — `--turso-primary-aqua`, `--turso-aqua-text: #88ffe4`, `--turso-dark-blue: #121b22`, `--turso-blue-2` to `--turso-blue-8`, `--turso-dark-gray: #293945`, `--turso-gray: #7b8690`, `--turso-light-gray: #c5cace`, `--turso-white: #fafafa`, plus yellow, lime and red — and `--main-bg-color: 18,27,34` / `--main-text-color: 255 255 255` as RGB triplets for Tailwind opacity utilities. The site is a Next.js build (hashed `__Inter_*` and `__GeistMono_*` font families).

## Do's and Don'ts

**Do**
- Keep the page in the Bunker family (#0d1318, #0f1317, #101317).
- Use Turso Aqua #4ff8d2 for every action, link and the key headline phrase.
- Put black text on aqua pills; hover to #88ffe4.
- Set headlines in Inter 800/700 with -1.5px / -0.9px tracking.
- Use #283945-based hairlines and dashed borders in diagrams.
- Use the official logo files from the brand page.

**Don't**
- Don't use aqua for large surfaces beyond the announcement strip.
- Don't use pure white for body copy; it is white at 50%.
- Don't introduce rounded rectangles for CTAs; actions are pills.
- Don't add heavy glows or gradients to cards.
- Don't modify the logo files.

## Responsive Behavior

Measured at 390px: the h1 is Inter 36px / 800 / 40px with -0.9px tracking (from 60px / -1.5px), the h2 30px / 700 / 36px with -0.75px (from 36px / -0.9px), and body stays 16px / 400. The aqua announcement strip grows to 60px tall with 10px 24px padding (the extractor picked it as the mobile CTA). Two header links are visible plus a menu toggle labelled "Open main menu" (eight links and no toggle on desktop). Content runs from x=25 to x=389. Other behaviour was not measured.

## Iteration Guide

1. Canvas #0f1317 / #101317, cards #0d1318, borders #28394599.
2. One accent: #4ff8d2 for CTAs and links, #88ffe4 for hover.
3. Inter for text (60px/800 hero, 36px/700 sections, 14–16px body), Geist Mono for code.
4. CTA: aqua pill, black 16px/600, 12px 24px, 44px.
5. Cards 12–16px radius with thin borders; diagrams with dashed borders.
6. Take any new colour from the brand page's five named colours or the `--turso-*` variables.
