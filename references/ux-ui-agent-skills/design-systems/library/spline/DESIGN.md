---
version: alpha
name: Spline
category: "Design & Creative Tools"
description: "Spline's home page is a pure-black #000000 product page set in Geist: 64px/450 headlines with tight -3.84px tracking in 90% white, #8a8a8a body copy at 18px/28px, light #eeeeee pill buttons with black labels that brighten to #ffffff on hover, ghost pills with #2e2e2e borders, translucent filter chips and #101010 cards with 16px corners framing the 3D editor."
colors:
  canvas: "#111111"
  page-body: "#000000"
  ink: "#8a8a8a"
  primary: "#eeeeee"
  on-primary: "#000000"
  primary-hover: "#ffffff"
  surface-card: "#101010"
  surface-raised: "#1d1d1d"
  white-60: "#ffffff99"
  white-95: "#fffffff2"
  white-70: "#ffffffb3"
  white-90: "#ffffffe6"
  hairline: "#2e2e2e"
  nav-bg: "#000000d1"
  chip-bg: "#ffffff0f"
  chip-active-bg: "#ffffff2e"
  focus-ring: "#8eb2f2"
typography:
  display:
    fontFamily: Geist, "Geist Fallback", "Helvetica Neue", Arial, sans-serif
    fontSize: 64px
    fontWeight: 450
    lineHeight: 72px
    letterSpacing: "-3.84px"
  display-mobile:
    fontFamily: Geist, "Geist Fallback", "Helvetica Neue", Arial, sans-serif
    fontSize: 48px
    fontWeight: 450
    lineHeight: 58px
    letterSpacing: "-2.88px"
  heading:
    fontFamily: Geist, "Geist Fallback", "Helvetica Neue", Arial, sans-serif
    fontSize: 56px
    fontWeight: 450
    lineHeight: 64px
    letterSpacing: "-3.36px"
  subheading:
    fontFamily: Geist, "Geist Fallback", "Helvetica Neue", Arial, sans-serif
    fontSize: 24px
    fontWeight: 450
    lineHeight: 30px
    letterSpacing: "-1.2px"
  body:
    fontFamily: Geist, "Geist Fallback", "Helvetica Neue", Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: Geist, "Geist Fallback", "Helvetica Neue", Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21.7px
  button-large:
    fontFamily: Geist, "Geist Fallback", "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24.8px
  nav:
    fontFamily: Geist, "Geist Fallback", "Helvetica Neue", Arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27.9px
    letterSpacing: "-0.36px"
  link:
    fontFamily: Geist, "Geist Fallback", "Helvetica Neue", Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: Geist, "Geist Fallback", "Helvetica Neue", Arial, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 14px
  3xl: 16px
  4xl: 19px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 9px
  s9: 10px
  s10: 11px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 14px
    height: 34px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 44px
    borderColor: "{colors.primary}"
  button-ghost:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    height: 34px
    borderColor: "{colors.hairline}"
  button-ghost-hover:
    borderColor: "{colors.ink}"
  chip:
    backgroundColor: "{colors.chip-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 44px
  chip-active:
    backgroundColor: "{colors.chip-active-bg}"
    textColor: "{colors.primary}"
    rounded: "{rounded.pill}"
  text-link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.primary-hover}"
    typography: "{typography.input}"
    padding: 2px 8px 0px
    height: 40px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
  footer:
    textColor: "{colors.primary}"
---

# Spline

## Overview

Spline is a browser-based 3D design tool, now pitched around AI agents: the measured home page (spline.design, 1280px wide, 8102px tall, `lang="en"`) opens with "Your team and agents, building and shipping in 3D", where small inline avatar chips ("+12") and an "Agent" label sit inside the headline itself. The whole page is one black band (`#000000`), with type in shades of translucent white and grey.

A translucent black header (`#000000d1`) carries the Spline logo and wordmark, menus (Products, Resources, Customers, Enterprise, Pricing) and, at right, a ghost "Talk to sales" pill and a light "Start building" pill. Under the centred hero headline sits a one-line description and a prompt box ("A low-poly city block at dusk…"), then a full-width editor window: an agent chat panel on the left listing tool calls (`run_code`, `analyze_scene`), a toolbar with Preview / Edit / Code tabs, and a large viewport. In the measured capture the viewports show "This scene requires a WebGPU capable browser" — the 3D content did not render in the measurement browser.

Further sections: a customer logo row (Scale, Google, Shopify, Amazon, GIPHY, Webflow, Alloy), "From prompt to production in one file" with four numbered step cards (Prompt, Connect, Build, Ship), "Where ideas become production-ready experiences" with filter chips over a showcase carousel (a Mars Rover game), "Everything you need to build in 3D" beside another editor window, "Agents build. Designers refine.", "One scene. Web, Apple and Android.", three testimonial cards ("Why teams build with Spline"), a closing "Start building in 3D" with "Start building" and "Connect your agent", and a multi-column footer. Small uppercase mono labels ("HOW IT WORKS", "BUILT WITH SPLINE", "EDITOR", "COLLABORATION", "PUBLISH") introduce each section.

## Colors

Measured on the rendered page (`web/data/extracted/spline.json`); many also exist as the site's `--color-*` variables.

- **page-body `#000000`** — the body and largest area (5179); `--color-bg`.
- **canvas `#111111`** — the near-black panel tone the generator selected as canvas (1185 by area), used inside the editor mock-ups.
- **surface-card `#101010`** — step and showcase cards (2647); **surface-raised `#1d1d1d`** — raised panels inside the editor (1614).
- **ink `#8a8a8a`** — the most-read text colour (3062 characters): paragraphs and inactive chips.
- **white-90 `#ffffffe6`** — headlines (`--color-white-090`); **white-95 `#fffffff2`**, **white-70 `#ffffffb3`** (`--color-white-070`) and **white-60 `#ffffff99`** for secondary levels.
- **primary `#eeeeee`** — the "Start building" pill fill and light UI text (737 characters); hover **primary-hover `#ffffff`**.
- **on-primary `#000000`** — the pill label.
- **hairline `#2e2e2e`** — borders (12 uses), including the ghost pill outline, which turns `#8a8a8a` on hover.
- **chip-bg `#ffffff0f`** and **chip-active-bg `#ffffff2e`** — filter chips at rest and selected.
- **nav-bg `#000000d1`** — the translucent header.
- **focus-ring `#8eb2f2`** — the measured focus outline: `1px solid rgb(142, 178, 242)` with a 3px offset.

The CSS declares product accent colours that were not measured as rendered page UI: `--color-blue: #0062ff`, `--color-purple-bright: #a770ff`, `--color-super: #00a376` (with `--generate-accent: #1cc294` for AI generation), `--color-red: #fd585b`, `--color-yellow: #ffb01f`, `--color-team: #915eff`. A blue `#2b99ff` was measured in 27 characters of link text.

## Typography

- **Geist** (variable, 100–900) — 4296 measured characters: all marketing headlines and copy.
- **Spline Sans** (400, 500) — 1119 characters, inside the editor mock-ups.
- **Geist Mono** — 229 characters: uppercase section labels and code-like text.

The site also serves Brockmann font files; Brockmann was not measured in rendered text.

Measured roles:

- **display** — Geist 64px / 450 / 72px, -3.84px tracking (-0.06em): the hero.
- **heading** — 56px / 450 / 64px, -3.36px (-0.06em): section headlines.
- **subheading** — 24px / 450 / 30px, -1.2px (-0.05em): step-card titles ("Your agent", "Spline MCP").
- **body** — 18px / 400 / 28px in `#8a8a8a`. The most common sizes overall are 14px (1483 characters) and 15px (1252); 20px with -0.6px tracking carries testimonial quotes.
- **button** — 14px / 500 / 21.7px; **button-large** — 16px / 500 / 24.8px.
- **nav** — 18px / 500 / 27.9px, -0.36px: the header's base style.
- **link** — 14px / 400 / 20px.
- **input** — 15px / 400 / 24px in the prompt box.
- Section labels: 12px with +0.72px and 11px with +0.88px tracking, uppercase.

Headlines use the unusual weight 450 — between regular and medium — with very tight tracking; labels go the other way with wide positive tracking.

**Substitute:** Geist and Geist Mono are open-source families; the declared fallback is Helvetica Neue, then Arial.

## Layout

The single black band measured content from x=1 to x=1232 with up to 4 columns: the four step cards, the editor-plus-copy split sections (a large editor window on one side, a headline and feature list on the other), and three testimonial cards. Headlines are centred for showcase sections and left-aligned for split sections.

Spacing is tight and small-step: gaps of 4px (154 uses), 6px, 8px, 2px and 10px dominate (UI inside the editor), with 24px and 32px between cards; paddings of 20px (58), 10px, 7px and 12px. Very large paddings (230.4px, 38.4px) were measured on 6 elements each in the showcase carousel.

## Elevation & Depth

No drop shadows: every measured shadow is a ring. Panels use `rgba(255, 255, 255, 0.06) 0px 0px 0px 1px inset` (14 uses) as a faint white edge; avatar stacks use solid 2px rings in the surface colour (`rgb(29, 29, 29) 0px 0px 0px 2px`, `rgb(16, 16, 16) 0px 0px 0px 2px`) to separate overlapping circles; 1px `rgb(46, 46, 46)` rings outline controls. Hierarchy comes from stepping surfaces (`#000000` → `#101010` → `#111111` → `#1d1d1d`) and white alpha levels.

## Shapes

- **6px (sm)** — the most frequent radius (127 uses): small controls inside the editor UI.
- **Pills** — computed 999px (68 uses): every button and chip.
- **8px** (33) — editor panels; **16px** (15) — cards; **4px**, **12px**, **10px**, **14px**, **19px** for smaller elements.
- **50%** — avatars (25 uses).
- Mixed corners such as `12px 12px 4px` (3 uses) appear on chat-bubble shapes in the agent panel.

## Components

**Primary pill** — `#eeeeee` fill and border, black 14px/500 label, `0px 14px`, 34px tall. Hover `#ffffff`. The large in-page version is 16px, `0px 20px`, 44px tall.

**Ghost pill** — transparent, `#eeeeee` label, 1px `#2e2e2e` border, 34px tall; the border turns `#8a8a8a` on hover ("Talk to sales", "Connect your agent").

**Filter chip** — `#ffffff0f` fill, `#8a8a8a` 15px label, `0px 20px`, 44px tall; selected state `#ffffff2e` with `#eeeeee` text.

**Prompt box** — a dark rounded field holding a 15px/24px white textarea with placeholder text.

**Step card** — `#101010`, 16px radius, a small visual, then a numbered mono label ("01 · PROMPT"), a 24px/450 title and a grey paragraph.

**Editor window** — dark panels at `#111111` / `#1d1d1d` with 8px and 6px radii, tabs, avatar stacks and a viewport.

**Testimonial card** — `#101010`, the customer logo, a 20px quote in white and the author with avatar.

**Header** — translucent `#000000d1`, logo, menus, ghost and primary pills.

## Design System Architecture

No public Spline brand or design-system page was found in the sources checked: https://spline.design/brand returned 404, and the home page's HTML contains no brand, press or design-system link.

The shipped CSS exposes 54 root variables in a readable scheme: a white alpha ladder (`--color-white-001` … `--color-white-090`, e.g. `--color-white-070: #ffffffb3`), semantic aliases (`--color-bg`, `--color-text-main`, `--color-text-paragraph` → `--color-white-060`, `--color-btn-bg: #ffffff0d`, `--color-panel-bg` built from `--panel-bg-alpha`), product accents (`--color-blue`, `--color-super`, `--color-team`, `--color-purple-bright`) and an AI-generation accent set (`--generate-accent`, `--generate-accent-solid`, `--generate-accent-soft`). The site is a Next.js build (assets under `/_next/static/`). The de-facto rule is: black background, white at stepped opacities for text, `#eeeeee` for the one light action.

## Do's and Don'ts

**Do**
- Keep the page black and build hierarchy with white at stepped opacities (90%, 70%, 60%) and `#8a8a8a`.
- Set headlines in Geist 450 with -0.06em tracking.
- Use pills for every button and chip; light `#eeeeee` for the primary action, ghost with `#2e2e2e` border for the secondary.
- Separate surfaces with 1px inset white rings at 6%, not shadows.
- Label sections with small uppercase Geist Mono text with wide tracking.

**Don't**
- Don't introduce coloured buttons; the declared accents were not rendered as page UI.
- Don't use bold headline weights; the measured headline weight is 450.
- Don't add drop shadows.
- Don't use square-cornered buttons.
- Don't present the "requires a WebGPU capable browser" placeholder as design content.

## Responsive Behavior

From the extractor's 390px pass: the hero headline measured 48px / 450 with a 58px line height and -2.88px tracking (the same -0.06em ratio); body copy stayed at 18px / 28px; the "Start building" pill kept its 119px × 34px size. The header measured 65px tall with the same translucent `#000000d1` background. The extractor recorded a visible "Open menu" toggle and 2 header links (6 on desktop). Content measured from x=20 to x=370. A 32px size appeared in the mobile pass (229 characters) where desktop used 56px for those headlines. Breakpoint widths were not measured.

## Iteration Guide

1. Black page, Geist throughout; headlines 450 weight with -0.06em tracking in `#ffffffe6`.
2. Body in `#8a8a8a` at 18px/28px; UI text at 14–15px.
3. Primary action: `#eeeeee` pill with black label; secondary: ghost pill with `#2e2e2e` border.
4. Cards `#101010`, 16px radius, with a faint inset white ring.
5. Use the declared white alpha ladder before adding any colour, and verify each value against a measurement.
6. Run `node web/scripts/verify-designs.mjs --slug=spline` after changes.
