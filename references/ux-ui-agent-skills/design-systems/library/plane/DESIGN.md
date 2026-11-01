---
version: alpha
name: Plane
category: "Productivity & SaaS"
description: "Plane.so home: white #ffffff canvas alternating with near-black #0f0f10 bands, Satoshi 58px/430 headlines with -1.74px tracking, Inter UI text at weight 430 in #1d1f20 and #4e5355, near-black #090b0c 8px-radius buttons, #f7f7f8 12px-radius product cards with #eaebeb borders and a blue #006399 accent for eyebrows."
colors:
  canvas: "#ffffff"
  surface-inverse: "#0f0f10"
  surface-card: "#f7f7f8"
  surface-soft: "#fafafa"
  surface-dark-card: "#181a1b"
  ink: "#1d1f20"
  ink-secondary: "#4e5355"
  ink-tertiary: "#676c6f"
  ink-black: "#000000"
  ink-on-dark: "#cacdce"
  ink-on-dark-strong: "#e4e6e7"
  primary: "#090b0c"
  on-primary: "#ffffff"
  accent: "#006399"
  accent-light: "#2893cc"
  hairline: "#eaebeb"
  border-control: "#dadcdd"
typography:
  display:
    fontFamily: satoshi, "satoshi Fallback"
    fontSize: 58px
    fontWeight: 430
    lineHeight: 75.4px
    letterSpacing: "-1.74px"
  display-mobile:
    fontFamily: satoshi, "satoshi Fallback"
    fontSize: 36px
    fontWeight: 430
    lineHeight: 46.8px
    letterSpacing: "-1.08px"
  heading:
    fontFamily: satoshi, "satoshi Fallback"
    fontSize: 44px
    fontWeight: 430
    lineHeight: 57.2px
    letterSpacing: "-1.32px"
  subheading:
    fontFamily: inter, "inter Fallback"
    fontSize: 32px
    fontWeight: 430
    lineHeight: 41.6px
    letterSpacing: "-0.96px"
  body:
    fontFamily: satoshi, "satoshi Fallback"
    fontSize: 13px
    fontWeight: 600
    lineHeight: 15.6px
  button:
    fontFamily: inter, "inter Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: inter, "inter Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-sm:
    fontFamily: inter, "inter Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
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
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 40px
  button-nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 33px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 42px
    borderColor: "{colors.border-control}"
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 42px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 12px 0px
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.accent}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.hairline}"
  dark-band:
    backgroundColor: "{colors.surface-inverse}"
    textColor: "{colors.ink-on-dark-strong}"
---

# Plane

## Overview

This file documents the Plane home page at `https://plane.so/` (title "AI-native project management | Plane"). It is a long (12649px) product-marketing page for an open-source project-management tool. The 58px white header carries the Plane logo, "Product", "Solutions", "Resources", "Pricing", "Self-host Plane", then "View demo", "Contact sales", "Login" and a small black "Get started free" button. The hero is centred: a blue uppercase eyebrow ("CLOUD, SELF-HOSTED AND AIR-GAPPED READY"), the headline "Project management and knowledge management for teams and agents", a short grey paragraph, a black "Try Plane Business for 14 days" button and an outlined "Talk to a human →". A wide product screenshot (the work-items list) floats on a blurred painterly photograph, followed by a three-row grid of grey customer logos (Sony, Aramco, Dolby, Accenture, Amazon and others).

Sections then alternate white and near-black: "Four products in one workspace for your whole org" (four bordered product cards with UI previews), customer stories, a dark "AI that works because it knows your context" band, "Two Fortune 10 companies chose Plane for their Jira migration", "Flexible features for every project, and all teams", a dark self-hosting band, integrations, "Enterprise-grade security, compliance, and control" with certification badges, a dark "Plane Compose" code section and a closing "Next-gen project management starts here" over the same painterly image.

Art direction is consistent: every large screenshot is the real Plane interface in light mode — a sidebar with workspace navigation, a list of work items with IDs like "ACME-23", coloured priority icons, label chips and due dates — floated over a warm, motion-blurred photographic texture in browns and greens. The same texture returns behind the closing call to action, so the page opens and closes on one image. Dark bands invert this: light-on-dark UI crops, terminal output for "Plane Compose", and certification badges in white outline.

The voice is calm and enterprise-credible: plain sentences, concrete claims ("on-prem and air-gapped"), and the product UI as the hero imagery.

## Colors

Backgrounds by area: `#0f0f10` (7062), `#f7f7f8` (2352), `#fafafa` (1691), `#181a1b` (720), `#ffffff` (613). The capture's dominant pixel colour is white (49%), then `#101010` (21%). Text by characters: `#4e5355` (2031), `#1d1f20` (1585), `#cacdce` (1414), `#e4e6e7` (1099), `#000000` (563), `#676c6f` (428), `#959a9d` (377), `#006399` (121).

- **canvas `#ffffff`** — the page and header (`--bg-surface-1: oklch(100% 0 0)`).
- **surface-inverse `#0f0f10`** — the dark bands. **surface-dark-card `#181a1b`** — cards inside them.
- **surface-card `#f7f7f8`** and **surface-soft `#fafafa`** — light product cards and panels.
- **ink `#1d1f20`** — headlines and primary text (`--txt-primary: oklch(23.78% .0029 230.83)`).
- **ink-secondary `#4e5355`** — the most-read colour, paragraphs and outlined-button labels (`--txt-secondary`). **ink-tertiary `#676c6f`** — captions.
- **ink-on-dark `#cacdce`**, **ink-on-dark-strong `#e4e6e7`** — text on dark bands.
- **primary `#090b0c` / on-primary `#ffffff`** — black buttons. Measured hover lightens the fill to `oklch(0.2378 0.0029 230.83)`.
- **accent `#006399`** — eyebrows and card labels (`--txt-accent-primary: oklch(47.99% .1158 242.91)`); **accent-light `#2893cc`** on dark.
- **hairline `#eaebeb`**, **border-control `#dadcdd`** — card and outlined-button borders.

## Typography

Families: Satoshi (652 chars) for headlines and Inter (7574 chars) for everything else; the variables also declare IBM Plex Mono, Source Serif Pro and system monospace. The type system uses non-standard weights: `--font-weight-body-regular: 430`, `--font-weight-body-semibold: 570`, `--font-weight-heading-regular: 430`. Measured weights: 430 (6299 chars), 400 (668), 570 (668), 500 (473), 600 (118).

- **display** — Satoshi 58px / 75.4px, 430, -1.74px (`--text-h1--letter-spacing: -.03em`).
- **heading** — Satoshi 44px / 57.2px, 430, -1.32px.
- **subheading** — Inter 32px / 41.6px, 430, -0.96px ("Plane Compose for Projects-as-Code").
- **button** — Inter 16px / 24px, 500. **button-sm** — Inter 14px / 21px, 500.
- **nav** — Inter 16px / 24px, 400.
- **body** — the extractor's body role is a 13px/600 Satoshi label ("Plan and pricing"); running paragraphs are Inter at 14–18px (sizes by characters: 14px 3103, 16px 2364, 18px 1082).

## Layout

Desktop: 1280px wide. Band 0 (white, 3561px) holds hero, logos and the four-product grid with content between x=76 and x=1236 in up to 3 columns. Dark bands start at y=3561 (1100px) and y=6628 (1638px); the white band between them has up to 4 columns. Product cards measure 584px wide and 484–502px tall in a two-column grid. Spacing values: 2, 3, 4, 6, 8, 12, 16, 20, 24, 28px. The header shows 7 visible links.

## Elevation & Depth

The page is flat; depth comes from the white/black band alternation and from product screenshots framed in thin borders on top of soft photographic backgrounds. Cards use 1px `#eaebeb` borders, not shadows. Dark-band cards sit on `#181a1b` against `#0f0f10`.

## Shapes

Measured radii: 8px (37 — buttons and inner panels), 12px (23 — product cards), 16px (5), 6px (3), 4px, and one fully rounded pill. The variables define `--radius-xs: .125rem` through `--radius-3xl: 1.5rem`.

## Components

- **button-primary** — black `#090b0c`, white Inter 16px/500, 8px radius, padding 8px 16px, 40px tall.
- **button-nav** — header "Get started free": same black, 14px/500, padding 6px 12px, 33px tall.
- **button-secondary** — "Talk to a human →": white, `#4e5355` text, 1px `#dadcdd` border, 8px radius, 42px tall.
- **button-dark** — on dark bands ("Talk to a migration expert"): `#1d1f20` fill, `#cacdce` text, 1px `#36393a` border, 42px tall. A light variant on `#f5f5f5` with `#0e0f10` text also appears.
- **card** — `#f7f7f8`, 1px `#eaebeb`, 12px radius; a blue uppercase 13px label with icon ("PROJECTS (NOW WORK)", "WIKI", "PLANE AI"), an Inter title, a grey description and a cropped UI preview.
- **dark-band** — `#0f0f10` section with `#e4e6e7` Satoshi heading and three-column feature cards.
- **nav** — white header with 12px vertical padding; plain text links in black, with the action group pushed to the right.
- **logo grid** — three rows of six grey customer logos with no tiles or borders, centred under the hero screenshot.

## Design System Architecture

No public Plane design-system page was opened for this file (no dsUrl; no design-system link was found on the home page; see SOURCES.json). The shipped CSS shows a mature token system of about 389 root variables defined in OKLCH: primitive ramps (`--neutral-100` … `--neutral-1200`, `--amber-*`, `--green-*`, `--color-brand-*`), semantic roles (`--txt-primary`, `--txt-secondary`, `--txt-accent-primary`, `--bg-canvas`, `--bg-surface-1`, `--bg-layer-1`, `--border-disabled`, `--txt-danger-primary`), typography tokens per heading level (`--text-h1--font-weight`, `--text-h1--letter-spacing`) and Tailwind utilities (`--tw-*`).

## Do's and Don'ts

- Do alternate white sections with `#0f0f10` bands.
- Do set headlines in Satoshi at weight 430 with -0.03em tracking.
- Do keep body text Inter 430 in `#4e5355` and headlines in `#1d1f20`.
- Do pair a black button with an outlined white one.
- Do label product cards with the blue `#006399` uppercase eyebrow.
- Don't use bold headline weights; 430 is the house weight.
- Don't add drop shadows to cards; use 1px borders.
- Don't replace the product screenshots with illustrations; the real interface is the imagery.

## Responsive Behavior

Measured at 390px: the headline drops from 58px/75.4px (-1.74px) to 36px/46.8px (-1.08px); section heads from 44px to 32px/41.6px (-0.96px); the primary CTA is unchanged (black, 8px radius, 40px tall, 264px wide). The mobile header shows 2 visible links and a menu toggle labelled "Open menu" (desktop: 7 links, no toggle). 1 card column was counted on mobile versus up to 6 on desktop. Mobile font sizes by characters: 14px, 16px, 18px, 13px, 32px, 24px, 36px, 11px.

## Iteration Guide

1. Start white; centre a blue eyebrow, a Satoshi `display` headline and two buttons.
2. Put a real product screenshot on a soft photographic background.
3. Use `card` for product modules with blue labels and UI crops.
4. Insert `dark-band` sections for AI, self-hosting and developer content.
5. Keep weights at 430/500 and radii at 8px/12px.
