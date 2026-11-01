---
version: alpha
name: Calendly
category: "Productivity & SaaS"
description: "Calendly's marketing home: warm magnolia #fcfbf8 canvas and #f5f3ee sand panels, midnight-navy #071a31 headlines and buttons (hover #0e396a), slate #5f6d77 body copy, a #84c1ff announcement bar and #c3dffe sky cards, Calendly Sans 500 headlines at 72px/-2px over Geist 18px/25.2px body, 16-24px rounded corners."
colors:
  canvas: "#fcfbf8"
  surface-sand: "#f5f3ee"
  surface-card: "#ffffff"
  surface-grey: "#f5f5f7"
  card-sky: "#c3dffe"
  banner-blue: "#84c1ff"
  ink: "#5f6d77"
  ink-slate: "#3d464e"
  card-text: "#000000"
  primary: "#071a31"
  on-primary: "#fcfbf8"
  primary-hover: "#0e396a"
  on-dark-muted: "#fcfbf8b2"
  hairline: "#fcfbf81a"
  hairline-light: "#071a310d"
typography:
  display:
    fontFamily: "\"Calendly Sans\", system-ui, -apple-system, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 72px
    fontWeight: 500
    lineHeight: 79.2px
    letterSpacing: "-2px"
  display-mobile:
    fontFamily: "\"Calendly Sans\", system-ui, -apple-system, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
  heading:
    fontFamily: "\"Calendly Sans\", system-ui, -apple-system, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 60px
    fontWeight: 500
    lineHeight: 66px
    letterSpacing: "-2px"
  subheading:
    fontFamily: "\"Calendly Sans\", system-ui, -apple-system, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
  body:
    fontFamily: Geist, system-ui, -apple-system, "Segoe UI", Roboto, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  button:
    fontFamily: Geist, system-ui, -apple-system, "Segoe UI", Roboto, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
  nav:
    fontFamily: Geist, system-ui, -apple-system, "Segoe UI", Roboto, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  caption:
    fontFamily: Geist, system-ui, -apple-system, "Segoe UI", Roboto, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
rounded:
  xs: 3px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 24px
  4xl: 40px
  5xl: 48px
  6xl: 64px
spacing:
  s1: 1.5px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 9px
  s7: 9.5px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 4px 16px 4px 4px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-cta:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 12px 20px
    height: 50px
  button-header:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xl}"
    padding: 12px 16px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.caption}"
    rounded: "{rounded.md}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    height: 108px
  announcement-bar:
    backgroundColor: "{colors.banner-blue}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 8px 48px 8px 32px
    height: 40px
  card:
    backgroundColor: "{colors.card-sky}"
    textColor: "{colors.card-text}"
    rounded: "{rounded.2xl}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    padding: 24px
---

# Calendly

## Overview

The measured page is `https://calendly.com/`, titled "Meeting Scheduling Software and AI Meeting Tools | Calendly", language `en`. It presents "the new Calendly" — a scheduling product repositioned around everything that happens around meetings. The h1 reads "All the work around meetings, handled." Calendly's About page describes the company as "a platform for people whose work runs on meetings", serving over 50 million people in more than 240 countries.

The page is airy, warm and premium. The background is an off-white with a warm tint (`#fcfbf8`), headlines are deep midnight navy (`#071a31`) at a medium 500 weight with tight tracking, and paragraphs are a soft slate (`#5f6d77`). The action colour is that same midnight navy, and the brighter blues appear as soft surfaces — a `#84c1ff` announcement bar ("Introducing the new Calendly, built to handle all of the work around meetings") and `#c3dffe` sky cards.

The capture shows the structure: a centred hero with two navy sign-up buttons ("Sign up with Google", "Sign up with Microsoft") and a "Sign up with email" text link; a large rounded product showcase on a pastel blue gradient ("Book meetings with the world's #1 scheduling tool"); a section "Built for people whose work runs on meetings" with four columns (Book, Prep, Capture, Follow-up); feature rows with serif headings ("A better way to book your meetings", "Meet Callie, your AI assistant", "Actionable recaps for every meeting", "Flexible payment options that fit your business") beside grey placeholder product panels; a midnight-blue testimonial section ("Real customers. Real results."); an integrations grid of app logos; a pipeline strip (Discovery → Scheduled → Meeting → Summarized) with portrait photos; and a dark footer panel ("Make space for what matters.").

## Colors

All values were measured on the page; most match the stylesheet's named tokens.

- **canvas `#fcfbf8`** — page background, the largest area and 39% of the capture (`--color-ramp-orange-025`; "magnolia" in variable names like `--color-magnolia-a90`).
- **surface-sand `#f5f3ee`** — warm panels; 23% of the capture.
- **surface-card `#ffffff`**, **surface-grey `#f5f5f7`** — cards and product placeholders; `#e4e6e9` also appears as a panel fill.
- **card-sky `#c3dffe`** — pastel blue cards in the product showcase.
- **banner-blue `#84c1ff`** — the 40px announcement bar.
- **primary `#071a31`** — midnight navy: headings, buttons, the testimonial section and footer panel. The most-read heading colour.
- **primary-hover `#0e396a`** — measured hover fill of every navy button.
- **on-primary `#fcfbf8`** — text on navy; **on-dark-muted `#fcfbf8b2`** — 70% secondary text on navy.
- **ink `#5f6d77`** — the most-read text colour: body copy (`--color-text-secondary`).
- **ink-slate `#3d464e`** — a darker grey for secondary labels.
- **hairline `#fcfbf81a`** — 10% light borders on navy (`--color-magnolia-a10`); **hairline-light `#071a310d`** — 5% navy borders on light.
- **card-text `#000000`** — text inside product cards.

Additional pastel surfaces measured: lime `#f2f8de`, blue `#6bb1ff`, seafoam `#baf0ec` (`--color-seafoam`), violet `#d4c2ff`. The stylesheet also names `--color-lavender: #eae3fa`, `--color-lime: #dbee9f`, `--color-plum: #4d3589`, `--color-text-tertiary: #93a0aa`.

## Typography

Three families are loaded: **Geist** (variable 100–900; 4,123 characters), **Calendly Sans** (variable 100–900 with an oblique axis; 984) and **Wulkan Text** (500; 623) — the serif used for feature headings. The stylesheet exposes them as `--font-geist`, `--font-calendly-sans` and `--font-wulkan`, each falling back to `system-ui, -apple-system, "Segoe UI", Roboto, sans-serif`. Calendly Sans is proprietary (substitute Geist); Wulkan Text is a commercial serif (substitute any medium-weight text serif).

- **display** — Calendly Sans 72px / 500 / 79.2px, -2px. The h1.
- **heading** — Calendly Sans 60px / 500 / 66px, -2px. Section headings and the footer statement.
- **subheading** — Calendly Sans 28px / 500 / 33.6px. Column titles (Book, Prep, Capture, Follow-up).
- **body** — Geist 18px / 400 / 25.2px. Paragraphs.
- **button** — Geist 16px / 500 / 22.4px.
- **nav** — Geist 14px / 500 / 20px. Header items and announcement text.
- **caption** — Geist 12px / 400 / 16.8px. "Sign up with email" and fine print.

Other measured sizes: 16px (most-read), 14px, 36px (stat callouts such as "75 hours saved monthly" and the pipeline labels), 20px, 48px. Weights are 400, 500 and a little 600; headings never go bold. Root variables define line-height ratios — `--leading-ui-huge: 1.1`, `--leading-ui-h4: 1.2`, `--leading-ui-body-md: 1.4` — matching the measured 79.2/72 and 25.2/18.

## Layout

At 1280px the page is 13,878px tall with a 108px header (40px announcement bar + nav). Measured bands: the 40px `#84c1ff` bar (text x=330–962); a 9,585px canvas band (x=40–1240, up to three columns) with hero, showcase, four-column section and feature rows; an 877px media band for testimonials (x=279–960); the 1,782px integrations section (x=64–1216); a 384px media pipeline strip; and the 1,157px footer region (x=64–1216, three columns).

Spacing is generous: gaps of 8px, 16px, 12px, 4px, 24px, 32px, 56px, 48px and 64px; paddings of 12px, 24px, 8px, 16px, with 120px section padding (10 uses), 40px, 48px and 56px. Feature rows place a serif heading and a list of expandable sub-features on one side and a large rounded product panel on the other.

## Elevation & Depth

Shadows are soft, multi-layer and tinted with slate rather than black. Measured:

- `rgba(95, 109, 119, 0.04) 0px 4px 5px 0px, rgba(95, 109, 119, 0.03) 0px 8px 15px 0px, rgba(95, 109, 119, 0.08) 0px 30px 50px 0px` — a floating panel (equal to `--var-shadow-ui-xl`).
- `rgba(11, 53, 88, 0.16) 0px 20px 48px -12px` — a navy-tinted lift.

The stylesheet defines a full scale: `--shadow-ui-sm`, `--var-shadow-ui-md`, `--var-shadow-ui-lg`, `--var-shadow-ui-xl`, `--var-shadow-ui-2xl` (`0 4px 5px #5f6d770a, 0 10px 15px #5f6d770a, 0 40px 50px #5f6d771a`). The navy sections create the strongest contrast; pastel gradients soften the hero showcase.

## Shapes

Corners are large and friendly. Measured radii: `24px` (65 elements), `4px` (43), `48px` (36), `8px` (33), `64px` (23), `16px` (22), `12px` (12), `20px` (8), `40px` (5), `80px` (1), `0px 0px 32px 32px` (1), `3px` (1). Buttons use 16px (header) and 20px (hero); cards 20–24px; big showcase panels 48–64px. Root variables express radii as multiples of 0.25rem (`--radius-ui-xl: calc(.25rem*6)` = 24px, `--radius-ui-3xl: calc(.25rem*10)` = 40px, `--radius-btn-standard: calc(.25rem*2.5)` = 10px).

## Components

- **button-primary** — "Sign up with Google / Microsoft": `#071a31`, `#fcfbf8` Geist 16px/500, `4px 16px 4px 4px` padding (the 4px side holds a white logo tile), 50px tall, 20px radius, 2px border. Hover `#0e396a`.
- **button-cta** — "Start for free": same navy, `12px 20px`, 50px, 20px radius.
- **button-header** — "Get started for free": navy, 14px/400, `12px 16px`, 48px, 16px radius. "Log in" beside it is text-only and inverts to a navy fill on hover; "Talk to sales" fades to `#5f6d77` on hover.
- **announcement-bar** — `#84c1ff` full-width strip with navy 14px/500 text, `8px 48px 8px 32px`, 40px.
- **card (sky)** — `#c3dffe`, 20px radius, in the product showcase.
- **feature list item** — a heading with an icon and a short slate description, separated by light rules; the active item is expanded.
- **link** — `#5f6d77` 12px, underline on hover.
- **footer** — a navy panel with `#fcfbf8` text, a 60px "Make space for what matters." statement and link columns.

## Design System Architecture

No public Calendly design system or brand guideline page was found: https://calendly.com/brand returned HTTP 404, and the About page (https://calendly.com/about) links a newsroom but no brand or design resources.

The shipped CSS is Tailwind-based (root `--tw-*` variables) with a custom token layer of 324 root variables: named colours (`--color-midnight-a90`, `--color-magnolia-a10`, `--color-seafoam`, `--color-lavender`, `--color-plum`, `--color-onyx: #0b0d0f`), ramps (`--color-ramp-orange-025`, `--color-ramp-neutral-200`, `--color-ramp-neutral-750`), semantic roles (`--color-text-secondary`, `--color-text-tertiary`, `--color-surface-bg-rain: #edf5ff`, `--color-badge-success-bg`), fixed and fluid type steps (`--text-ui-h3-fixed: 36px`, `--text-ui-h4-fixed: 28px`, `--text-ui-caption: 12px`), radii (`--radius-ui-*`, `--radius-ui-fixed-*`), the slate shadow scale and a `--breakpoint-ltb: 769px` breakpoint.

## Do's and Don'ts

**Do**
- Use the warm canvas `#fcfbf8` and sand `#f5f3ee` surfaces.
- Make headlines and buttons midnight `#071a31`; hover buttons to `#0e396a`.
- Set headings in Calendly Sans 500 with -2px tracking; body in Geist; use Wulkan Text serif for feature headings.
- Use pastel blue (`#84c1ff`, `#c3dffe`) and other soft tints as surfaces, not as button fills.
- Round generously: 16–20px buttons, 24px cards, 48–64px showcase panels.
- Keep shadows slate-tinted and layered.

**Don't**
- Don't use pure black or neutral grey text; body is `#5f6d77`, headings `#071a31`.
- Don't bold headings; measured headline weight is 500.
- Don't use sharp corners on cards or buttons.
- Don't use heavy black shadows.
- Don't fill buttons with the pastel blues; the measured CTA is navy.

## Responsive Behavior

The mobile pass at 390px recorded: three visible header links and a menu toggle labelled "Open menu"; the announcement bar grew to 56px (`#84c1ff`, `8px 48px 8px 24px`, 12px/500 text); a 120px header area; h1 at Calendly Sans 40px / 500 / 44px; h2 at 24px / 500 / 26.4px; body at Geist 16px / 400 / 22.4px in `#5f6d77`. Content bands ran from x=24 to x=366 (24px gutters), with media bands inset to x=35–355 and x=48–342. The most-read mobile sizes were 12px and 14px. The CSS declares `--breakpoint-ltb: 769px`; behaviour at that width was not measured.

## Iteration Guide

1. Lay down `#fcfbf8`, a 40px `#84c1ff` announcement bar and a light header.
2. Set the h1 in Calendly Sans (or Geist) 72px/500, -2px, colour `#071a31`; body in Geist 18px/25.2px `#5f6d77`.
3. Add navy 50px buttons with 20px corners; for social sign-up, inset a white logo tile with `4px` padding on the left.
4. Present the product in large rounded panels (48–64px) on pastel gradients and `#c3dffe` cards.
5. Use Wulkan-style serif headings for feature rows, with expandable lists beside product panels.
6. Shadows: use the slate `--var-shadow-ui-*` scale.
7. Close with a navy panel footer and a 60px statement headline.
