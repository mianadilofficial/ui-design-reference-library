---
version: alpha
name: Logseq
category: "Productivity & SaaS"
description: "Logseq (logseq.com), \"a privacy-first, open-source knowledge base\": a dark teal site on #01222a and #001419. System ui-sans-serif headlines at 64px/60.8px with +1px tracking that pair a 400 muted-teal phrase with a 600 white phrase, #f3f4f6 text, #0369a1 and #195d6c download buttons with 4px–8px radius, and translucent #002b36 cards."
colors:
  canvas: "#01222a"
  page-largest: "#001419"
  ink: "#f3f4f6"
  primary: "#0369a1"
  on-primary: "#f3f4f6"
  surface-card: "#002b36"
  surface-raised: "#094b5a"
  surface-button: "#023643"
  ink-teal-muted: "#b7d5d5cc"
  ink-secondary: "#e5e7ebb3"
  ink-soft: "#d1d5dbe6"
  ink-body: "#d1d5db"
  teal-accent: "#8ec2c2"
  teal-strong: "#195d6c"
  card-bg: "#002b3680"
typography:
  display:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 60.8px
    letterSpacing: 1px
  display-mobile:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 38.4px
    fontWeight: 400
    lineHeight: 35.2px
    letterSpacing: 1px
  heading:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 64px
    fontWeight: 600
    lineHeight: 60.8px
    letterSpacing: 1px
  body:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 35px
  button:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 24px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 15px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 28px
  button-header:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px 8px
    height: 28px
  button-hero:
    backgroundColor: "{colors.teal-strong}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    padding: 12px 16px
    height: 48px
  button-ghost:
    backgroundColor: "{colors.surface-button}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    padding: 12px 16px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    boxShadow: rgba(133, 200, 200, 0.3) 0px 4px 32px 0px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 15px 12px 12px
---

# Logseq

## Overview

Logseq is an open-source, privacy-first outliner and knowledge base, and logseq.com (title "Logseq: A privacy-first, open-source knowledge base") is a dark, deep-teal landing page, 1280px wide and 6957px tall. The header is a thin row on the dark background: the Logseq logo (a cluster of teal dots in a rounded tile) with "Home" and "Downloads" at the left, and "Forum", "Docs", "GitHub" and "Blog" (each with an external-link icon) plus a small blue "Download for MacOS" button at the right.

The hero headline is split in two weights and colours: "Connect your notes," in a muted teal 400 weight above "increase understanding." in bold white. Behind it stands a grey 3D render of a seated thinker statue, overlaid with translucent Logseq UI fragments — an outline block ("NOW Meeting with [[Jessica]]"), a person card for Jessica and a book card for "Intertwingled". Below are a teal "Download for MacOS" button with a dropdown chevron and a darker "Web app" button.

The page continues with use-case icons (Task Management, PDF Annotations, Flashcards), a row of persona tiles (Students, Academics, Writers, Project Managers, Developers) with a gradient outline on the selected one, a habit-tip carousel ("Get in the habit of writing thoughts down every day."), community buttons ("Join our Discord", "Join our forum"), an illustrated "Overwhelmed and constantly afraid of losing your thoughts?" section with floating objects (notebook, PDF, phone, YouTube), feature tabs (Relationships, Daily Plan, Journaling, Data Control), "A safe space for your thoughts." with an eight-item feature grid, a Logseq Sync promo and a closing "Think faster, think better!" call. The tone is encouraging and plain-spoken.

## Colors

The whole site is a single dark teal family with near-white text.

- **canvas `#01222a`** — the body background.
- **page-largest `#001419`** — the darkest teal, the largest painted area. Section bands step through `#001a20`, `#00232b` and `#002934`.
- **ink `#f3f4f6`** — the most-read text colour (1548 characters): bold headline phrases, button labels and body copy.
- **ink-teal-muted `#b7d5d5cc`** — 80% pale teal for the light half of every headline (252 characters); `#b7d5d5e6` and `#b7d5d5` are also measured.
- **ink-secondary `#e5e7ebb3`**, **ink-soft `#d1d5dbe6`**, **ink-body `#d1d5db`** — secondary greys for descriptions and the body default. Header links rest at `rgb(164, 181, 182)` (`#a4b5b6`) and brighten to `rgb(209, 213, 219)` on hover.
- **teal-accent `#8ec2c2`** — small teal labels (110 characters).
- **primary `#0369a1`** — the blue of the header "Download for MacOS" button; **on-primary `#f3f4f6`**.
- **teal-strong `#195d6c`** — the larger hero download button's fill and the 2px border of the "Review us on ProductHunt" button.
- **surface-card `#002b36`**, **card-bg `#002b3680`**, **surface-raised `#094b5a`**, **surface-button `#023643`** — card fills, translucent UI fragments, persona tiles and the "Web app" button. `#023643e6` (90%) is the second largest background area.

Buttons do not change colour on hover; the hover probe recorded opacity dropping to 0.8. Glow shadows in the stylesheet use pink, violet, sand and green (`#ff42f74d`, `#6e7cfb4d`, `#ab8f764d`, `#3571634d`) for decorative icon halos.

## Typography

No web fonts are loaded; all text renders in the system UI stack (`ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif`), the Tailwind default.

- **Display — 400, 64px / 60.8px, +1px tracking** in `#b7d5d5cc` for the light phrase, paired with **Heading — 600, 64px / 60.8px, +1px** in `#f3f4f6` for the bold phrase. The hero's bold half measures 700 in the band data. Section headlines use the same split at 60px ("Braindump everything into… / New ideas will pop up with time.").
- **Subheading — 38.4px** with 0.96px–1px tracking ("Logseq is the open toolbox for…"), line height 32px.
- **Body / quote — 400, 26px / 35px** in `#f3f4f6` (testimonial quotes). Section intros use 30px with 0.75px tracking; 20px with 0.5px and 18px with 0.45px are the most tracked sizes.
- **Link — 400, 16px / 24px.** **Button — 400, 14px / 20px** (header button). Feature-grid titles are 14px 600.

Positive tracking at roughly +2.5% of the size is a consistent trait (20px/0.5px, 30px/0.75px, 38.4px/0.96px). **Substitute:** none needed; use the system stack or Inter.

## Layout

The page is centred with generous vertical space between sections. The hero is centred over a single column; the use-case row has 3 items and the persona row 5 tiles (the widest measured row has 5 columns). Later sections use 2-column splits (carousel + preview, testimonial + UI) and a 4-column feature grid ("Open source", "Privacy first", "Mobile apps", "Markdown files", "Strong community", "Localization", "150+ Plugins", "30+ Themes"). The closing call sits in a rounded panel between x=276 and x=1004.

Spacing is on Tailwind's 4px scale. The most frequent paddings are 8px, 16px, 4px, 2px, 12px and 24px, with 40px, 48px, 56px and 64px for larger blocks. Buttons use 4px 8px (header) and 12px 16px (hero). Cards use 15px 12px 12px. No CSS breakpoints were recorded in the extracted stylesheet data.

## Elevation & Depth

Depth comes from layered translucency on the dark teal rather than from drop shadows. UI fragments use `#002b3680` (50%) fills over the Thinker render, and panels use `#023643e6`. The one rendered shadow is a soft teal glow, `rgba(133, 200, 200, 0.3) 0px 4px 32px 0px`, on a 32px × 32px link in the header area. The stylesheet adds coloured halos for feature icons in the form `0 2px 18px <colour>4d, inset 0 0 7px <colour>80`. The "Overwhelmed" section uses a dark mountain-silhouette backdrop with floating 3D objects for depth.

## Shapes

Radii are small to medium: 8px (19 elements, the most common, including the hero buttons), 6px (16, including the UI fragment cards), 12px (11), 16px (6), 4px (5, header button), 9999px (5), 24px (2), and circles (100%, 50%) for avatars. The persona tile selected state is outlined with a pink-to-amber gradient border. Icons are flat 3D-style teal illustrations; emoji ([U+1F9D1 U+200D U+1F393], [U+1F393], [U+1F58B]) are used as persona icons at 38px.

## Components

- **Header download button** — `#0369a1`, `#f3f4f6` 14px/20px label with an Apple icon and chevron, 4px radius, 4px 8px padding, 28px tall; hover opacity 0.8.
- **Hero download button** — `#195d6c`, `#f3f4f6` 16px/24px, 8px radius, 12px 16px padding, 48px tall, with a chevron for other platforms.
- **Web app button** — `#023643`, same size and radius, with a play icon and external-link icon.
- **Outlined button** — "Review us on ProductHunt": transparent with a 2px `#195d6c` border, 8px radius, 4px 12px padding, 48px tall.
- **UI fragment card** — `#002b3680`, 6px radius, 15px 12px 12px padding, `#f3f4f6` 14px/20px text with `#b7d5d5` meta lines (Person, Book).
- **Persona tile** — `#094b5a`-family rounded tile with an emoji and white label; the active one is darker with a gradient outline.
- **Feature grid item** — small icon, 14px 600 white title, grey one-line description.
- **Header link** — `#a4b5b6` 16px, brightening to `#d1d5db` on hover, with an external-link icon where it leaves the site.

## Design System Architecture

No public Logseq marketing design system or brand guideline was found. The Logseq GitHub organisation (https://github.com/logseq) lists a "sites" repository ("Logseq home page") but no design-system, theme or brand-asset repository. The shipped site is a Tailwind CSS build: the root exposes only Tailwind and Swiper variables (`--tw-ring-color: #3b82f680`, `--tw-ring-offset-color: #fff`, `--swiper-theme-color: #007aff`, `--swiper-navigation-size: 44px`), and the colours are utility values — a gray ramp (`#f3f4f6`, `#e5e7eb`, `#d1d5db`, `#9ca3af`, `#6b7280`, `#4b5563`, `#374151`), a blue (`#0369a1`) and a custom teal ramp (`#001419`, `#01222a`, `#002b36`, `#023643`, `#094b5a`, `#195d6c`, `#8ec2c2`, `#b7d5d5`). The Swiper blue and Tailwind ring blue are library defaults, not brand colours.

## Do's and Don'ts

**Do**
- Keep every surface in the dark teal ramp (`#001419` → `#01222a` → `#002b36` → `#094b5a`).
- Split headlines into a light `#b7d5d5cc` 400 phrase and a bold `#f3f4f6` phrase at the same size.
- Use positive tracking (+1px at 64px, +0.5px at 20px).
- Use translucent cards (`#002b3680`) with 6px–8px radius to show product fragments.
- Keep download buttons teal or blue with white labels, 8px radius in the hero.
- Use friendly, motivating copy ("Think faster, think better!").

**Don't**
- Don't use a light background anywhere.
- Don't use heavy black drop shadows; use translucency or a soft teal glow.
- Don't load a custom font; the site uses the system stack.
- Don't tighten the tracking on headlines.
- Don't treat the Swiper `#007aff` or ring `#3b82f680` as brand colours.

## Responsive Behavior

The extractor's 390px mobile pass recorded: both halves of the headline drop to 38.4px / 35.2px with +1px tracking (400 for "Today, everyone is a" in `#b7d5d5cc`, 600 for "knowledge worker." in `#f3f4f6`), 358px wide. Testimonial body text drops from 26px/35px to 20px/28px. The mobile primary CTA is the `#195d6c` "Download for MacOS" button at 16px/24px, 8px radius, 12px 16px padding, 48px tall and 358px wide. The layout probe recorded 0 visible header text links on both desktop and mobile, a visible menu toggle on mobile only, and a maximum of 3 card columns on mobile versus 5 on desktop. Mobile font sizes measured: 14px, 20px, 12px, 18px, 38.4px, 16px, 26px, 24px and 30px. No CSS breakpoint list was captured. The arrangement of the persona row and feature grid at mobile width was not measured.

## Iteration Guide

1. Start with a `#01222a` page and `#001419` deep bands; no light surfaces.
2. Write a two-part headline at 64px/60.8px with +1px tracking: a `#b7d5d5cc` 400 phrase over a `#f3f4f6` bold phrase.
3. Add a product visual built from translucent `#002b3680` UI cards (6px radius, 15px 12px 12px padding).
4. Place a 48px `#195d6c` download button and a `#023643` "Web app" button, both 8px radius.
5. Use the system UI stack throughout with slight positive tracking.
6. Build grids of rounded teal tiles with emoji or 3D icons and short white labels.
7. Use opacity 0.8 for hover states and a soft teal glow for emphasis.
