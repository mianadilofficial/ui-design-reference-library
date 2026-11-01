---
version: alpha
name: Unreal Engine
category: "Developer Tools & IDEs"
description: "Epic Games' Unreal Engine site unrealengine.com measured live — a dark #101014 page with #18181c and #202024 elevated surfaces and 5%-white glass cards (24px radius), 65%-white #ffffffa6 body text, electric blue #26bbff buttons with #101014 labels (8px radius, #72d3ff hover), Inter Tight 700 headlines at 40px and Inter body at 16px/26.4px, built on an 'eds' CSS token set."
colors:
  canvas: "#101014"
  page-largest: "#18181c"
  ink: "#ffffffa6"
  primary: "#26bbff"
  on-primary: "#101014"
  primary-hover: "#72d3ff"
  surface-elevated: "#202024"
  surface-glass: "#ffffff0d"
  surface-ghost: "#ffffff26"
  ink-strong: "#ffffff"
  ink-soft: "#ffffffbf"
  ink-on-accent: "#000000"
  border-subtle: "#ffffff59"
  critical: "#ff3f56"
  success: "#45c761"
  warning: "#ffc229"
typography:
  display:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  heading:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 26.4px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
  body-sm:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 400
    letterSpacing: 0.28px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: 0.28px
  eyebrow:
    fontFamily: Inter, sans-serif
    fontSize: 10px
    fontWeight: 700
    lineHeight: 10px
    letterSpacing: 1px
    textTransform: uppercase
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  2xl: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 48px
  s10: 64px
  s11: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-download-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-on-accent}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px 12px
    height: 32px
  button-ghost:
    backgroundColor: "{colors.surface-ghost}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 40px
  button-outlined:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    border: "1px solid #ffffff59"
    padding: 8px 16px
    height: 40px
  button-outlined-hover:
    borderColor: "{colors.ink}"
  news-card:
    backgroundColor: "{colors.surface-glass}"
    textColor: "{colors.ink}"
    typography: "{typography.eyebrow}"
    rounded: "{rounded.xl}"
    border: "1px solid #ffffff0d"
    padding: 12px
---

## Overview

This is `https://www.unrealengine.com/`, Epic Games' site for Unreal Engine ("The most powerful real-time 3D creation tool - Unreal Engine"), measured live on 2026-10-17 at 1280px (9,630px tall). The mobile pass was stopped by a security check and is not usable (see Responsive Behavior).

The page is a dark, product-led marketing site in the language of the Epic Games launcher. A thin global bar sits above a large rounded hero container showing a game scene ("Tomb Raider: Legend of Atlantis") with the Unreal Engine logo, the h1 "We make the engine. You make it Unreal.", a paragraph in 65%-white, a blue "Get Unreal Engine" button and an outlined "Learn about licensing" button. A blue "Download" button sits at the top right.

Content then flows down one column of modules on near-black: "Unreal Engine news" (a three-up grid of glass cards with thumbnail, date eyebrow, title, excerpt and a "View all" pill), "Unreal Engine features — Power that can keep up with the wildest imaginations" (copy left, video right, "See all features"), "Ships fully loaded for everyone" (a twelve-tile grid of industries — Games, Indie games, Mobile games, Film & TV, Broadcast & live events, Animation, Architecture, Automotive, Simulation and more), "How to install Unreal Engine" (three numbered steps with Download Launcher, a ghost "Watch how to install" button and a UEFN panel), "Get started in Unreal Engine" (tutorials, documentation links, sample projects), "Learn new things. Connect with people like you. Join the Epic Developer Community." (five resource tiles and a forum list with post counts), "Licensing" (a Free plan panel and Royalty-based / Seat-based cards), and a footer with link columns for Games, Marketplaces, Tools, Online Services, Company and Resources.

The tone is confident and builder-oriented. Colour is restrained to greys and translucent whites; the only saturated UI colour is the electric blue of actions and links.

## Colors

The site ships an `eds` token set as CSS custom properties (400 on `:root`), and most measured colours map to it.

- **canvas #101014** — page background (`--colors-eds.fill.secondary.recessed`); 30% of the capture.
- **page-largest #18181c** — the largest opaque painted area (weight 1,403): module panels.
- **surface-elevated #202024** — raised surfaces (`--colors-eds.background.elevated.high.default`).
- **surface-glass #ffffff0d** — 5% white for cards, tiles and their borders (`--colors-eds.background.elevated.low.transparent`, `--colors-eds.fill.input.default`); the largest painted area overall (weight 3,676).
- **surface-ghost #ffffff26** — 15% white fill of ghost buttons such as "Watch how to install".
- **ink #ffffffa6** — 65% white, the most-read text colour (5,358 characters) for paragraphs and card copy.
- **ink-strong #ffffff** — headlines and button labels on dark (2,270 characters; `--colors-eds.text.contrast`).
- **ink-soft #ffffffbf** — 75% white secondary text.
- **primary #26bbff** — electric blue: fills "Get Unreal Engine", "Download", "See all features", "Download now", and colours inline links (281 characters). It is the token `--colors-eds.fill.primary.press`.
- **primary-hover #72d3ff** — the measured hover fill of the primary button.
- **on-primary #101014** and **ink-on-accent #000000** — labels on blue (`--colors-eds.text.on-accent: #000`).
- **border-subtle #ffffff59** — 35% white outline of secondary buttons (`--colors-eds.border.disabled`); on hover it brightens to 65% white.
- **critical #ff3f56**, **success #45c761**, **warning #ffc229** — status fills from the `eds` variables (`fill.critical.default`, `fill.success.default`, `text.warning`); not seen on the home page.

## Typography

Two families, both loaded as webfonts:

- **Inter Tight** 700 — headlines: **display** 40px / 48px (h1 and the large section titles), **heading** 24px / 28.8px (h2 such as "Unreal Engine news").
- **Inter** — everything else: **subheading** 16px / 26.4px at 700 (card titles, h3), **body** 16px / 26.4px at 400, **body-sm** 14px at 400 with +0.28px tracking (the most-read size, 4,704 characters), **button** 14px / 14px at 500 with +0.28px, and **eyebrow** 10px / 10px at 700, +1px, uppercase (news dates such as "JUNE 23, 2026").

12px with +0.24px tracking covers small metadata (386 characters), and 20px with -0.3px sets lead paragraphs. Weights in use are 400 (6,830 characters), 700 (944) and 500 (326). The variables also declare `--font-family-code: "Recursive Mono"` for code.

## Layout

Content sits between x=64 and x=1216 on a 1280px viewport. Sections are full-width rounded containers or open groups on the dark canvas; grids are three columns (news, steps, tutorials), four columns (sample projects, community tiles) and a dense three-by-four tile grid for industries. The forum list is a full-width table with right-aligned counts.

Spacing follows the `eds` dimension scale (`--spacing-eds.dimension.*`, `--size-dimension-px-*`). Measured gaps: 16px (most frequent, 201 elements), 4px, 24px, 6px, 8px, 12px, 32px, 48px, 40px; paddings: 6px, 24px, 12px, 16px, 8px, 32px, 64px and 80px.

## Elevation & Depth

No box shadows were measured on rendered elements. Depth is built from stacked translucency: 5%-white glass cards with 5%-white borders on #18181c panels on the #101014 canvas, plus a 70% canvas overlay (#101014b3) on imagery. The `eds` variables define directional multi-step shadows — `--shadows-eds.top.md: 0 -2px 1px #0000001a, 0 -4px 2px #0000001a, 0 -8px 4px #0000001a, 0 -16px 8px #0000001a, 0 -32px 16px #0000001a` and matching left/bottom variants — and a backdrop `--colors-eds.background.backdrop.strong: #000000a6` for overlays.

## Shapes

Rounded, in a clear scale. 8px is the most frequent radius (65 elements, including every 40px button), then 16px (34 elements), 24px (28, including the news cards), 9999px (18), 6px (the small header "Download"), 12px and 32px. Two elements use split radii, 16px 16px 0 0 and 0 0 16px 16px. The `eds` radius variables add 5px, 6px, 7px, 8px, 10px and 14px steps.

## Components

- **Primary button** — #26bbff fill, #101014 Inter 14px/500 label (+0.28px), 8px 16px padding, 40px high, 8px radius. Hover lightens the fill to #72d3ff.
- **Small Download** — the header "Download": #26bbff, black label, 4px 12px padding, 32px, 6px radius.
- **Ghost button** — "Watch how to install": 15% white fill, white label, same size as primary.
- **Outlined button** — "Learn about licensing", "View all": transparent with a 1px #ffffff59 border, white label; hover brightens the border to 65% white.
- **News card** — 5% white glass fill and border, 24px radius, 12px padding; thumbnail, uppercase 10px/700 date eyebrow in 65% white, 16px/700 title, excerpt, and a small tag pill.
- **Industry tile** — rounded image with a white label and chevron at the lower left.
- **Install steps** — numbered "STEP 1/2/3" badges in blue, title, short copy, button.
- **Forum list** — rows with category name, sparkline-style counters and topic snippets.

## Design System Architecture

The shipped CSS shows design-system tokens under an `eds` namespace, with 400 custom properties on `:root` named by role and state: fills (`--colors-eds.fill.primary.press`, `fill.secondary.recessed`, `fill.tertiary.elevated.hover`, `fill.critical.default/hover/alternate`, `fill.success.default`, `fill.warning.alternate`, `fill.informational`), text (`text.contrast`, `text.on-accent`, `text.link.on-accent.default`, `text.disabled.default`, `text.critical`, `text.warning`), backgrounds (`background.elevated.low.transparent`, `background.elevated.high.default`, `background.backdrop.strong`), borders (`border.critical.default`, `border.disabled`), a raw palette (`palette.cyan.300`, `palette.transparent.dark.065`), radii (`--radii-eds.border-radius.5…14`), spacing (`--spacing-eds.dimension.*`), shadows (`--shadows-eds.top/left/bottom.md`) and gradients (`--gradient-components-orange-stops-0`). Generic utility scales (`--colors-gray-400`, `--colors-teal-200`, `--sizes-2`) sit alongside. Compiled class variables such as `--eds_370_adnoafll` indicate a build step that hashes component tokens. The site is a Next.js build served from `assets.unrealengine.com/…/_next/`.

No public documentation for this system was reachable: the Unreal Engine branding page https://www.unrealengine.com/en-US/branding returned HTTP 403 (recorded in SOURCES.json), so nothing here is taken from official brand guidelines.

## Do's and Don'ts

**Do**
- Keep the page dark (#101014) and build depth with 5%-white glass layers, not shadows.
- Reserve #26bbff for actions and links; put dark #101014 text on it.
- Use Inter Tight 700 for headlines and Inter for everything else; body at 16px/26.4px in 65% white.
- Use 8px radius on buttons and 24px on cards; 16px and pill radii are the next most frequent.
- Pair the primary button with an outlined or ghost secondary of the same 40px height.

**Don't**
- Don't put white text on the blue button.
- Don't use pure white for long paragraphs; the measured body colour is 65% white.
- Don't introduce new saturated accents; status colours are for status only.
- Don't add heavy drop shadows to cards.
- Don't square off corners.

## Responsive Behavior

Not measured. The extractor's mobile pass received a security-check page ("One more step — Please complete a security check to continue") instead of the site, so there is no mobile typography or layout data for Unreal Engine. The CSS declares breakpoints at 375px, 768px, 900px, 1024px, 1280px, 1440px and 1920px (max-width counterparts end in .96px/.97px).

## Iteration Guide

1. Start with `canvas` #101014; place modules in #18181c panels or 5%-white glass cards.
2. Headline with `display` (Inter Tight 40px/700) and section titles with `heading`.
3. Body copy in `body` at 65% white; card titles in `subheading`.
4. Actions: `button-primary` blue with `button-outlined` or `button-ghost` beside it.
5. News and content cards: `news-card` with an `eyebrow` date.
6. Before adding a value, find the matching `--colors-eds.*`, `--radii-eds.*` or `--spacing-eds.*` variable in `web/data/extracted/unreal-engine.json`.
