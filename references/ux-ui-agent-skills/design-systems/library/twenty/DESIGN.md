---
version: alpha
name: Twenty
category: "Product & SaaS"
description: "Twenty.com home: light grey #f4f4f4 and white #ffffff grounds with #1c1c1c ink and dark #1c1c1c panels, Aleo 300 serif headlines (60px/66px, -1.2px) mixed with Host Grotesk, Azeret Mono 12px uppercase labels and buttons, square #1c1c1c 'GET STARTED' buttons, 4px-radius cards and an indigo #4a38f5 hover accent."
colors:
  canvas: "#f4f4f4"
  surface: "#ffffff"
  ink: "#1c1c1c"
  ink-ui: "#333333"
  ink-muted: "#1c1c1c99"
  ink-soft: "#1c1c1ccc"
  ink-grey: "#666666"
  primary: "#1c1c1c"
  on-primary: "#ffffff"
  surface-dark: "#1b1b1b"
  graphite: "#424242"
  ink-on-dark-muted: "#ffffff99"
  ink-on-dark-faint: "#ffffff66"
  hairline: "#d6d6d6"
  accent-indigo: "#4a38f5"
typography:
  display:
    fontFamily: aleo, "aleo Fallback", serif
    fontSize: 60px
    fontWeight: 300
    lineHeight: 66px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: aleo, "aleo Fallback", serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 46px
    letterSpacing: "-0.8px"
  heading:
    fontFamily: aleo, "aleo Fallback", serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 56px
    letterSpacing: "-0.96px"
  subheading:
    fontFamily: hostGrotesk, "hostGrotesk Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 21.6px
    letterSpacing: "-0.64px"
  body:
    fontFamily: hostGrotesk, "hostGrotesk Fallback", sans-serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 56px
  card-title:
    fontFamily: hostGrotesk, "hostGrotesk Fallback", sans-serif
    fontSize: 22px
    fontWeight: 500
    lineHeight: 28px
  button:
    fontFamily: azeretMono, "azeretMono Fallback", monospace
    fontSize: 12px
    fontWeight: 500
    textTransform: uppercase
rounded:
  none: 0px
  xs: 1px
  sm: 2px
  md: 3px
  lg: 3.68px
  xl: 4px
  2xl: 6px
  3xl: 7.35px
  4xl: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.84px
  s3: 2px
  s4: 2.76px
  s5: 3px
  s6: 3.68px
  s7: 4px
  s8: 5.52px
  s9: 6px
  s10: 7px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 40px
  button-nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 32px
  link:
    textColor: "{colors.ink-soft}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xl}"
    padding: 16px
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.ink-on-dark-muted}"
    rounded: "{rounded.none}"
---

# Twenty

## Overview

This file documents the Twenty home page at `https://twenty.com/` (title "Twenty | #1 Open Source CRM"). Twenty is an open-source CRM, and its site reads like an engineering magazine: a warm light-grey ground, a light-weight serif for headlines, a monospace for labels and buttons, square-cornered black buttons, thin dashed rules and small "+" registration marks at the corners of framed areas.

The 64px header (on `#f4f4f4`) carries the square "20" logo, uppercase mono links ("PRODUCT", "RESOURCES", "CUSTOMERS", "PRICING") separated by thin vertical bars, a GitHub star count ("58.4K ↗"), an outlined "LOG IN" and a black "GET STARTED". The hero centres "Build your Enterprise CRM at AI Speed" (serif for "Build your Enterprise", sans for "CRM at AI Speed"), a grey description, "GET STARTED" and "TALK TO US", then a large macOS-style window showing the Twenty app — a Companies table with avatars, URLs, owners and True/False columns, and an indigo "+ New Record" button. A "TRUSTED BY" strip of grey customer logos follows, framed by hairlines with "+10K OTHERS" at the end.

Below: "The Problem." with a black panel and the statement "A custom CRM gives your org an edge, but building one comes with tradeoffs"; "Assemble, iterate and adapt a robust CRM, that's quick to flex" with three white testimonial cards; "Begin with production-grade building blocks" with a dark UI mock; "Make your GTM team happy with a CRM they'll love"; illustrated feature cards with glowing 3D objects; a large customer quote with a "1/3" pager; and a dark closing section "Stop fighting custom. Start building, with Twenty." with an FAQ list and footer.

The voice is direct and builder-oriented ("Stop fighting custom."), with a pronounced editorial feel created by the serif/sans mix in single headlines.

## Colors

Backgrounds by area: `#ffffff` (9354), `#f4f4f4` (8802), `#1c1c1c` (3806), `#1c1c1c0d` (667), `#1b1b1b` (623), `#1c1c1c1a` (472), `#424242` (353). The capture is 39% `#f4f4f4`, 32% white, 20% `#1c1c1c`. Text by characters: `#333333` (2154), `#1c1c1c` (1837), `#1c1c1c99` (957), `#666666` (487), `#ffffff99` (300), `#ffffff66` (260).

- **canvas `#f4f4f4`** — hero and the long content band (`--color-neutral: #f4f4f4`).
- **surface `#ffffff`** — the `<body>`, the problem section and cards (`--surface`).
- **ink `#1c1c1c`** — headlines and marketing text (`--ink: var(--color-black)`, `--color-black: #1c1c1c`).
- **ink-ui `#333333`** — the most frequent text colour, mostly inside the product screenshot table (Inter 13px); also `--color-black-hover`.
- **ink-muted `#1c1c1c99`** (`--ink-muted`), **ink-soft `#1c1c1ccc`**, **ink-grey `#666666`** — secondary text.
- **primary `#1c1c1c` / on-primary `#ffffff`** — black buttons.
- **surface-dark `#1b1b1b`**, **graphite `#424242`** (`--color-graphite`) — dark panels and the closing section; **ink-on-dark-muted `#ffffff99`**, **ink-on-dark-faint `#ffffff66`** for text on them.
- **hairline `#d6d6d6`** — rules.
- **accent-indigo `#4a38f5`** — `--color-blue`; measured as the hover colour of every header link and of the GitHub count, and used for the small square before section labels and the app's "New Record" button.

The header link colour `#0000ee` is the browser default and is excluded.

## Typography

Fonts loaded: Host Grotesk (variable 300–800), Aleo 300, Azeret Mono (100–900) and Inter 400/500/600. By characters: hostGrotesk 3115, inter 2484 (+ Inter 555, inside screenshots), aleo 259, azeretMono 200.

- **display** — Aleo 60px / 66px, 300, -1.2px. A second tracking value at the same size, 60px/-2.4px (107 chars), is also measured; the capture shows part of each headline in a sans-serif, but which family carries the -2.4px value was not isolated.
- **heading** — Aleo 48px / 56px, 300, -0.96px (48px/-1.92px is also measured, 25 chars).
- **body** — Host Grotesk 48px / 56px, 300: the large testimonial quote.
- **card-title** — Host Grotesk 22px / 28px, 500.
- **subheading** — Host Grotesk 16px / 21.6px, 400, -0.64px.
- **button** — Azeret Mono 12px, 500, uppercase: nav links, buttons, labels.

Sizes by characters: 13px (2658), 16px (1991), 12px (388), 60px (312), 48px (265), 32px (260), 11.95px (231), 22px (212), 18px (141), 80px (46). Weights: 400 (4896), 500 (1076), 300 (623), 600 (36). Negative tracking is applied almost everywhere (18px/-0.72px, 16px/-0.64px, 80px/-3.2px).

## Layout

Desktop capture: 1280px wide, 12154px tall. Bands: `#f4f4f4` hero (1173px) with content from x=133; a white band (1921px) with content from x=40 to x=1240 in 3 columns; then a 9060px `#f4f4f4` band. The header shows 7 visible links. Spacing comes from a 4px base (`--spacing-base: 4px`) and fractional values (1.84px, 2.76px, 3.68px, 5.52px) used inside the scaled product mock-up. Framed areas are drawn with hairlines and "+" corner marks.

## Elevation & Depth

Mostly flat. The app-window screenshot casts `rgba(0, 0, 0, 0.2) 0px 10px 64px 0px`; a dark floating panel uses `rgba(255, 255, 255, 0.16) 0px 0px 0px 1px, rgba(0, 0, 0, 0.28) 0px 20px 48px 0px`. Small UI chips use `rgba(0, 0, 0, 0.08) 0px 0px 3.677px 0px, rgba(0, 0, 0, 0.04) 0px 1.839px 3.677px 0px` and green inset rings (`rgb(221, 243, 228) 0px 0px 0px 1px inset`) on tags.

## Shapes

Measured radii: 4px (203 — cards and app elements), 2px (92 — `--radius-base: 2px`), 50% (56 — avatars), 999px (45 — tags), 1px, 3px, 8px. Marketing buttons have 0px radius; the capture shows their bottom-right corner cut off diagonally, and the black problem panel has a notched edge.

## Components

- **button-primary** — "GET STARTED": `#1c1c1c`, white Azeret Mono 12px/500 uppercase, square, padding 0 20px, 40px tall.
- **button-secondary** — white twin with `#1c1c1c` text and a thin dark outline ("TALK TO US", "LOG IN").
- **button-nav** — header "GET STARTED", padding 0 16px, 32px tall.
- **card** — white, 4px radius, 16px padding, 389×521px; Host Grotesk 22px/500 title, quote, and the customer's name and role.
- **section label** — a small indigo square followed by Host Grotesk text ("The Problem.").
- **nav** — `#f4f4f4`, mono links; measured hover turns them `#4a38f5`.
- **footer** — dark, link columns in muted white.

## Design System Architecture

Twenty is open source (https://github.com/twentyhq/twenty — "The open alternative to Salesforce, designed for AI."); its README names a frontend stack of React with Jotai, Linaria and Lingui, links `packages/twenty-website`, and links a public Figma file (https://www.figma.com/file/xt8O9mFeLl46C5InWwoMrN/Twenty). The marketing site ships 49 root variables: a named palette (`--color-black`, `--color-graphite`, `--color-iron`, `--color-stone`, `--color-silver`, `--color-chalk`, `--color-neutral`), alpha ramps (`--color-black-5` … `-80`, `--color-white-5` … `-80`, `--color-blue-5` … `-80`), accent colours (`--color-blue: #4a38f5`, `--color-green: #89fc9a`, `--color-pink: #ed87fc`, `--color-yellow: #feffb7`), semantic aliases (`--ink`, `--ink-muted`, `--ink-subtle`, `--surface`, `--line`, `--divider`) and bases `--spacing-base: 4px`, `--radius-base: 2px`.

## Do's and Don'ts

- Do pair Aleo 300 and Host Grotesk inside one headline for the editorial contrast.
- Do set every label, nav link and button in uppercase Azeret Mono 12px.
- Do keep buttons square and black.
- Do frame areas with hairlines and corner "+" marks.
- Do use indigo `#4a38f5` only for hover, small markers and app actions.
- Don't round marketing buttons; reserve 4px for cards and app UI.
- Don't use heavy shadows outside the product window.

## Responsive Behavior

Measured at 390px: the headline drops from 60px/66px (-1.2px) to 40px/46px (-0.8px); the 48px section heading and the 48px quote both become 40.0005px/46.0005px; the GET STARTED button is unchanged (square, 40px tall, 126px wide). The mobile header shows 2 visible links and a menu toggle labelled "Open menu" (desktop: 7 links, no toggle). Mobile font sizes by characters: 13px, 16px, 12px, 40px, 32px, 11.95px, 18.0003px, 18px.

## Iteration Guide

1. Set `canvas` `#f4f4f4`, `ink` `#1c1c1c`, white cards.
2. Write a centred serif/sans headline in `display`; add square black and white buttons.
3. Show the real product in a framed window with the large soft shadow.
4. Frame logo strips and sections with hairlines and "+" marks.
5. End on a dark `#1b1b1b` section with an FAQ list.
