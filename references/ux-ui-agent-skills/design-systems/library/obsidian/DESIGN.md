---
version: alpha
name: Obsidian
category: "Productivity & SaaS"
description: "Obsidian's obsidian.md is a dark, product-first page: #0f0f0f body with #1e1e1e/#1f1f1f feature panels, the system UI stack (60px/600 headlines at -1.2px, 16px/24px body) in #eeeeee and #bcbcbc, violet #7c3aed 8px-radius 60px-tall download buttons that hover to #8b5cf6, and #a78bfa text links."
colors:
  canvas: "#0f0f0f"
  page-body: "#0f0f0f"
  page-largest: "#1f1f1f"
  surface-card: "#1e1e1e"
  surface-deep: "#171717"
  surface-raised: "#262626"
  ink: "#bcbcbc"
  ink-strong: "#eeeeee"
  ink-soft: "#b3b3b3"
  ink-light: "#dadada"
  ink-muted: "#a3a3a3"
  primary: "#7c3aed"
  on-primary: "#ffffff"
  primary-hover: "#8b5cf6"
  link: "#a78bfa"
  accent-purple: "#a882ff"
  hairline: "#262626"
  device-bg: "#000000"
  device-border: "#444444"
  light-panel: "#ffffff"
typography:
  display:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", Roboto, Inter, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 60px
    fontWeight: 600
    lineHeight: 60px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", Roboto, Inter, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 50.7px
    fontWeight: 600
    lineHeight: 55.77px
    letterSpacing: "-1.2675px"
  body:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", Roboto, Inter, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", Roboto, Inter, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  button:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", Roboto, Inter, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
  link:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", Roboto, Inter, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 8px
  2xl: 12px
  3xl: 16px
  4xl: 30px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 23px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 16px 24px
    height: 60px
    boxShadow: rgb(255, 255, 255) 0px 0px 0px 0px inset, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-wide:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 16px 32px
    height: 60px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 60px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
  device-frame:
    backgroundColor: "{colors.device-bg}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.4xl}"
    borderColor: "{colors.device-border}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.25) 0px 25px 50px -12px
  footer:
    textColor: "{colors.ink-muted}"
    padding: 96px 0px 128px
---

## Overview

Obsidian is a local-first notes app, and obsidian.md (measured title "Obsidian - Sharpen your thinking") presents it the way the app looks by default: dark, quiet and text-centred. The desktop capture opens on a near-black page with a slim header — the purple crystal logo and "Obsidian" at the left, "Download", "Pricing", "Sync", "Publish", "Enterprise" next to it, and a theme switch, "Community" and "Account" at the right. A left-aligned headline, "Sharpen your thinking.", sits above a grey subline ("The free and flexible app for your private thoughts."), a violet "Get Obsidian for macOS" button and a "More platforms" text link. A full-width screenshot of the desktop app — file tree, a "Writing is telepathy" note, a graph view — overlaps a phone mock-up showing "Japan Trip Planning".

The sections continue in the same pattern: three short manifesto paragraphs ("Your thoughts are yours.", "Your mind is unique.", "Your knowledge should last.") beside a large app-icon tile with "Free without limits. Download now"; "Spark ideas." with four dark feature cards (Links, Graph, Canvas, Plugins), each showing a live UI fragment; "Sync securely." with a white "Shared vaults" panel on a violet frame; "Publish instantly." with a three-column feature row and a screenshot of a published help site; a centred "It's your time to shine." with one violet button; three community cards (Discord, forum, developer docs); and a multi-column footer that includes "Brand guidelines".

The voice is principled and concise — ownership, privacy, longevity — with links phrased as "Learn more." in violet. Visuals are real product UI, never illustration.

## Colors

- **Canvas `#0f0f0f`** — the body background behind the whole page.
- **Panels** — `#1f1f1f` (the largest background by area) and `#1e1e1e` for feature cards; `#171717` and `#262626` for deeper and raised surfaces.
- **Text** — `#bcbcbc` is the most-read colour (sublines, body copy); `#eeeeee` for headlines and emphasised text; `#b3b3b3`, `#dadada` and `#a3a3a3` (footer) for secondary levels.
- **Primary `#7c3aed`** — the download buttons (`--color-accent-600`); hover measured `#8b5cf6` (`--color-accent-500`).
- **Link `#a78bfa`** — "Learn more." and inline links (`--color-accent-400`).
- **App purple `#a882ff`** — declared as `--color-purple`, alongside `--color-red #fb464c`, `--color-green #44cf6e`, `--color-blue #027aff`, `--color-orange #e9973f` and `--color-yellow #e0de71`.
- **Hairline `#262626`** — the most frequent border colour; `#666666`, `#404040` and `#363636` also appear.
- **White `#ffffff`** — the "Shared vaults" panel in the Sync section.

The brand page (https://obsidian.md/brand) asks for the lockup to use "the purple mark and black or white text", and for single-colour use "either black or white".

## Typography

All measured text resolves to the system UI stack `ui-sans-serif, system-ui, -apple-system, "system-ui", Roboto, Inter, "Helvetica Neue", Arial, …`. The stylesheet also declares `@font-face` rules for Inter (served from `/fonts/Inter-*.woff2`), which sits in the stack after the system fonts.

| Role | Size / line-height | Weight | Tracking |
|---|---|---|---|
| Display (h1, section h2s) | 60px / 60px | 600 | -1.2px |
| Subline | 36px | 400 | normal |
| Link ("Learn more.") | 24px / 32px | 500 | normal |
| Button | 20px / 28px | 500 | normal |
| Body | 16px / 24px | 400 | normal |
| Nav | 14px / 20px | 500 | normal |

Measured sizes by character count: 14px, 18px, 20px, 24px, 6px, 16px, 13px, 12px, 10px and 60px. The only measured letter-spacing is -1.2px on the 60px headlines. Weights are mostly 400, with 500 for nav, buttons and links, 600 for headlines and 700 for small bold titles such as "Writing is telepathy" (28px).

## Layout

Content runs in a wide left-aligned column: in the 1280px desktop pass it spans x=80 to x=1200, with headlines left-aligned rather than centred (the closing "It's your time to shine." is the centred exception). Feature cards sit in a two-by-two grid; the Publish features and community cards are three-up (the extractor's maximum card columns on desktop is three). The header height is declared as `--header-height: 60px`.

Measured paddings are 8px, 12px, 3px, 6px, 16px, 24px, 23px, 4px, 32px and 48px; measured gaps are 6px, 4px, 12px, 8px, 24px, 32px and 48px. The footer has 96px top and 128px bottom padding. Root variables use palette-style names (`--color-zinc-100`, `--color-violet-600`, `--color-accent-50…950`) and the breakpoints are `min-width 640px`, `768px`, `1024px`, `1280px` and `1536px`.

## Elevation & Depth

Depth comes from layered dark surfaces and from screenshots. Buttons carry a compound shadow — a 1px 10%-white inset ring plus a tiny `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px` drop — which reads as a subtle bevel. Cards use a 5%-white inset ring (`rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset`). The phone mock-up uses `rgba(0, 0, 0, 0.25) 0px 25px 50px -12px`, and five elements use `rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.1) 0px 8px 10px -6px`.

## Shapes

Radii: 4px is the most frequent (40 instances), then 8px (19, including the buttons), 6px (15), 2px (9), 12px (8), 9999px (7), a top-left-only `12px 0px 0px` (5), 16px (5), 50% (4) and `6px 6px 0px 0px` (2). The phone frame uses 30px. Controls are gently rounded; nothing is sharp-cornered except screenshot crops.

## Components

- **Primary button** — "Get Obsidian for macOS": `#7c3aed`, white 20px/500, 16px 24px padding, 60px tall, 8px radius, bevel shadow; hover `#8b5cf6`. The closing "Get Obsidian" uses 16px 32px padding.
- **Text link** — `#a78bfa`, 24px/500 inside headings' sublines ("Learn more."), 16px in body copy.
- **Header** — 60px, `#bcbcbc` 14px/500 links, logo at left; the desktop pass counted eight visible header links.
- **Feature card** — `#1e1e1e`/`#1f1f1f` panel with a title, two lines of `#bcbcbc` copy and an embedded UI fragment (link autocomplete, graph, canvas, plugin toggles).
- **Device frame** — black, 30px radius, `#444444` border, `rgba(0, 0, 0, 0.25) 0px 25px 50px -12px` shadow.
- **Toggle** — violet pill switches in the plugin list (capture).
- **Community card** — dark panel with a bold title and a two-line description (Discord, forum, developer docs).
- **Footer** — logo, social links, a language selector and link columns (Get started, Obsidian, Learn, Community) in `#a3a3a3`.

## Design System Architecture

Obsidian publishes brand guidelines at https://obsidian.md/brand covering the logo only: do not edit, distort or recolour it; use the purple mark with black or white text; use all-black or all-white for single-colour applications; and the name, logo and app icon are trademarks. No colour or type tokens are published there. The website itself ships a token layer of 297 root custom properties, mostly palette-named colours (`--color-neutral-600`, `--color-violet-600`, `--color-sky-500`), a custom `--color-accent-50…950` violet ramp, the app's named colours (`--color-purple`, `--color-red`, `--color-green`, `--color-blue`, `--color-orange`, `--color-yellow`), code-highlight variables (`--code-value`, `--code-tag`) and layout values (`--header-height`).

## Do's and Don'ts

**Do**
- Keep the page near-black (`#0f0f0f`) with `#1e1e1e` panels and grey `#bcbcbc` copy.
- Use one violet `#7c3aed` button per screen, 60px tall with 8px radius.
- Set headlines at 60px/600 with -1.2px tracking, left-aligned.
- Show real app UI — notes, graph, canvas, plugins — inside every card.
- Keep the logo purple with white text on dark, per the brand page.

**Don't**
- Don't recolour or distort the logo.
- Don't use the app's red/green/orange colours for marketing UI.
- Don't use pure white text for paragraphs; it is reserved for headlines and buttons.
- Don't replace screenshots with illustrations.
- Don't add large glows; elevation is a subtle inset ring and soft drop.

## Responsive Behavior

Measured at 390px: the h1 drops from 60px to 50.7px (line-height 55.77px, tracking -1.2675px), section h2s drop to 44px, the subline drops to 30px and becomes centred, and body text drops from 16px to 14px. The primary button keeps its 60px height, 16px 24px padding and violet fill. The header shows two visible links and an "Open the navigation menu" toggle at 390px (eight links and no toggle on desktop). Card rows were measured at up to two columns. The hero content spans x=20 to x=371. Other reflow was not measured.

## Iteration Guide

1. `#0f0f0f` canvas, `#1e1e1e` cards, `#262626` hairlines.
2. Headlines 60px/600, -1.2px, `#eeeeee`, left-aligned; sublines and body in `#bcbcbc`.
3. Violet `#7c3aed` button (hover `#8b5cf6`), `#a78bfa` links.
4. Fill each card with a working UI fragment rather than an icon.
5. Keep spacing to the measured 4px-step values and 4–8px radii.
6. Reach for `--color-accent-*` before adding any new violet.
