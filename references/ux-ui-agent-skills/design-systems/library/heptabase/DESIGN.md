---
version: alpha
name: Heptabase
category: "Productivity & SaaS"
description: "Heptabase (heptabase.com): a quiet eggshell-white landing page for a visual knowledge base. Instrument Sans 500 headlines at 48px/62.4px with -1.584px tracking, Inter 16px/24px body in #2e2e2e, a #2e2e2e charcoal 10px-radius Start your 7-day trial button, 6px-radius cards with rgba(0,0,0,.08) hairlines, and large pastel-sky product screenshots."
colors:
  canvas: "#fdfcfb"
  ink: "#2e2e2e"
  primary: "#2e2e2e"
  on-primary: "#ffffff"
  surface-card: "#fcfcfc"
  ink-secondary: "#000000b8"
  ink-muted: "#0000007a"
  ink-tertiary: "#6a6972"
  link-blue: "#207dff"
  hairline: "#00000014"
  link: "#000000"
  card-bg: "#fcfcfc80"
typography:
  display:
    fontFamily: __instrumentSans_c1b0f9, __instrumentSans_Fallback_c1b0f9, "Helvetica Neue", Arial, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 62.4px
    letterSpacing: "-1.584px"
  display-mobile:
    fontFamily: __instrumentSans_c1b0f9, __instrumentSans_Fallback_c1b0f9, "Helvetica Neue", Arial, sans-serif
    fontSize: 38px
    fontWeight: 500
    lineHeight: 49.4px
    letterSpacing: "-1.254px"
  heading:
    fontFamily: __instrumentSans_c1b0f9, __instrumentSans_Fallback_c1b0f9, "Helvetica Neue", Arial, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 46.8px
    letterSpacing: "-0.54px"
  subheading:
    fontFamily: __Inter_582115, __Inter_Fallback_582115, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 30px
  body:
    fontFamily: __Inter_582115, __Inter_Fallback_582115, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: __Inter_582115, __Inter_Fallback_582115, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
  nav:
    fontFamily: __Inter_582115, __Inter_Fallback_582115, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 40px
    letterSpacing: "-0.36px"
  link:
    fontFamily: __Inter_582115, __Inter_Fallback_582115, sans-serif
    fontSize: 13px
    fontWeight: 500
    lineHeight: 13px
  button-secondary:
    fontFamily: __Inter_582115, __Inter_Fallback_582115, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 9px
  2xl: 10px
  3xl: 12px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 17px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 14px 24px
    height: 48px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(15, 15, 15, 0.1) 0px 0px 0px 1px, rgba(15, 15, 15, 0.1) 0px 2px 4px 0px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 36px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 7px 22px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 4px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 2px 0px 0px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.md}"
    padding: 16px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink-secondary}"
    borderColor: "{colors.hairline}"
---

# Heptabase

## Overview

Heptabase is a visual knowledge base for learning and research, and heptabase.com (title "Heptabase") is a restrained, screenshot-driven landing page: 1280px wide and 10001px tall, on an eggshell `#fdfcfb` background. A 72px header holds the "H." logo with the "Heptabase" wordmark at the left, three centred links (Resources ▾, Download, Pricing) and, at the right, "Log in" and a dark "Get started" pill.

The hero is centred: a small segmented switch ("Home" / "AI Tutor"), the two-line headline "Master anything you learn. / Do your best research with AI.", a short grey intro ("Heptabase is an intelligent, visual knowledge base built for students, researchers, and lifelong learners.") and one dark "Start your 7-day trial" button. A very large product screenshot follows, framed on a soft painted sky (peach clouds over a green field) — whiteboards of PDFs and video cards, a PDF reader and an AI chat panel. Award badges ("#1 Product of the Day", "Golden Kitty Winner") and investor logos (Y Combinator, Kleiner Perkins, Hof Capital, Moving Capital) follow.

The rest of the page alternates a left-aligned section heading with a full-width framed screenshot: "Ask AI to explain any sources…" with PDF / YouTube / Note / Journal tabs, "Use whiteboards and cards to clarify your thinking and stay in flow", a bento grid of feature cards ("Build a connected knowledge base with all your sources, notes, highlights, and discussions in one place"), "All the essentials, done right.", "Designed with the best methods for learning.", a dense wall of user tweets ("Loved by users worldwide.") and "Explore what people are making". The tone is calm and academic; the product UI is the imagery.

## Colors

- **canvas `#fdfcfb`** — the eggshell page and header background (the CSS sets `--new-bg-page: var(--color-eggshell)`). The `body` element itself is `#f7f7f7` (`--background-primary`).
- **ink `#2e2e2e`** — the most-read text colour (3473 characters), headings, the logo (`--logo-color: #2e2e2e`) and `--new-text-primary`.
- **primary `#2e2e2e` / on-primary `#ffffff`** — the charcoal button fill with white labels. Hover lowers opacity to 0.9; the colour does not change.
- **ink-secondary `#000000b8`** — 72% black (`--new-text-secondary`), card titles and footer text (876 characters).
- **ink-muted `#0000007a`** — 48% black (`--new-text-muted`), captions (280 characters).
- **ink-tertiary `#6a6972`** — `--new-text-tertiary`, the hero subtitle and secondary copy.
- **link-blue `#207dff`** — `--new-text-link`, inline links (46 characters).
- **hairline `#00000014`** — 8% black (`--new-border-light`), the most common border (36 elements), on cards and the footer top. `#00000021` (13%, `--new-border-medium`) outlines secondary tab buttons.
- **surface-card `#fcfcfc`** (`--new-bg-card`) and **card-bg `#fcfcfc80`** (`--new-bg-section`, 50%) — card and feature-panel fills. `#f0f0ea` is the feature box (`--new-bg-feature-box`).

The feature panels behind screenshots use muted pastel fills measured as backgrounds: `#abc9d4`, `#b2c9b8`, `#b5c299`, `#bfa8c9`, `#e0b5c4`, `#dec7b0`, `#c9c9c2`, with `#d3d3d3` and `#eeeded` (`--whiteboard-background`). The CSS also declares `--new-gradient-image-container: linear-gradient(180deg,#ecefdb,#e4f0f2 53.846%,#f1e0ed)`.

## Typography

Two families, both loaded through Next.js font optimisation (hence the `__instrumentSans_c1b0f9` and `__Inter_582115` names).

- **Instrument Sans 500** for headings (`--new-font-heading`). Display: 48px / 62.4px, -1.584px tracking ("Master anything you learn."). The section-title size is 44px with -1.452px tracking (130 characters). Feature headings: 36px / 46.8px, -0.54px tracking.
- **Inter** for everything else (`--new-font-body`, 4500 characters; variable 100–900 loaded). Body 400 16px / 24px. Feature card titles 500 20px / 30px; a 450 weight is also measured (`--new-feature-title-weight: 450`). Buttons 600 16px / 20px. The wordmark/nav 600 18px / 40px with -0.36px tracking. Segment links 500 13px / 13px. Labels 14px (`--new-label-size`).
- `ui-monospace` appears on 19 characters (CLI examples).

The CSS documents the scale as variables: `--new-hero-title-size: 52px` (line height 1.1), `--new-section-title-size: 44px` (1.4), `--new-feature-heading-size: 36px` (1.3), `--new-hero-subtitle-size: 20px` (1.5), `--new-feature-title-size: 20px`, `--new-card-title-size: 17px`, `--new-body-size: 16px`, `--new-label-size: 14px`. **Substitutes:** Instrument Sans and Inter are both free on Google Fonts.

## Layout

The page is one continuous eggshell band (`--new-max-width: 1340px`, `--new-content-padding-x: 20px`). Hero content is centred; later section headings are left-aligned above screenshots that span the content width (from x=48). The bento grid of feature cards uses up to 4 columns. The `--new-section-gap` variable is 80px.

Measured gaps, by frequency: 20px, 16px, 8px, 3px, 12px, 4px, 32px, 6px, 52px. Paddings: 24px, 16px, 12px, 4px, 48px, 8px, 10px. Cards use 16px padding; the primary button 14px 24px; the header pill 8px 16px; the segmented control links 7px 22px.

## Elevation & Depth

Shadows are defined as variables and kept soft. `--shadow-card: hsla(0,0%,6%,.1) 0 0 0 1px, hsla(0,0%,6%,.1) 0 2px 4px` is on the primary button. `--shadow-image-md: 0 0 4px 0 rgba(0,0,0,.03), 0 4px 8px 0 rgba(0,0,0,.04), 0 16px 26px 0 rgba(0,0,0,.05)` is the most common rendered shadow (8 elements). `--shadow-image-lg: 0px 0px 0px 1px rgba(0,0,0,.04), 0px 14px 32px rgba(0,0,0,.1), 0px 28px 70px rgba(0,0,0,.14)` is rendered on 3 elements. `--shadow-main` adds a 9px 24px layer at 20%, and `--shadow-float: 0 10px 30px rgba(0,0,0,.06)` and `--shadow-hard: 0 2px 5px rgba(0,0,0,.05)` are also declared. Flat cards rely on the 8% hairline.

## Shapes

Radii come from a named scale: `--new-radius-sm: 4px`, `--new-radius-md: 6px`, `--new-radius-lg: 8px`, `--new-radius-xl: 10px`, `--new-radius-2xl: 12px`, `--new-radius-3xl: 16px`, `--new-radius-full: 1000px`. Rendered: 6px (24 elements, cards and tab buttons), 12px (22), 50% (18, avatars), 8px (16), 9999px (12, pills), 10px (9, the primary button), 4px and 3px. The logo is a bold rounded "H" with a dot.

## Components

- **Primary button** — `#2e2e2e` fill, white Inter 600 16px/20px, 10px radius, 14px 24px padding, 48px tall, `--shadow-card`; hover opacity 0.9.
- **Header pill** — "Get started": `#2e2e2e`, white Inter 500 16px/20px, 9999px radius, 8px 16px padding, 36px tall.
- **Segmented control** — "Home" / "AI Tutor": a light grey track with pill segments, 13px/500 labels, 7px 22px padding; the active one is white.
- **Source tabs** — "PDF", "YouTube", "Note", "Journal": 38px buttons with 6px radius, 8px 10px 8px 12px padding; inactive ones are transparent with a 1px `#00000021` border, the active one filled `#2e2e2e` with white text.
- **Secondary button** — "Explore more": white, `#000000b8` text, 1px `#00000021` border, 8px radius.
- **Feature card** — `#fcfcfc80` fill, 1px `#00000014` border, 6px radius, 16px padding, Inter 500 20px/30px title in `#000000b8`, with a screenshot on a pastel panel.
- **Award badge** — outlined in a warm orange with a small medal icon and two-line label.
- **Tweet card** — avatar circle, name and handle, short quote, in a masonry wall.
- **Footer** — white, 1px `#00000014` top border, logo and link columns (Product, Changelog, Roadmap, Wiki, Pricing, Download …) in `#000000b8`.

## Design System Architecture

No public Heptabase design system or brand page was found (https://heptabase.com/about returned HTTP 404). The shipped CSS exposes the de-facto system clearly: 208 root custom properties, with a `--new-*` layer for the marketing site — type (`--new-hero-title-size`, `--new-section-title-size`, `--new-feature-heading-size`, `--new-body-size`, matching weights, line heights and letter-spacing), colour (`--new-text-primary`, `--new-text-secondary`, `--new-text-tertiary`, `--new-text-muted`, `--new-text-link`, `--new-border-light`, `--new-border-medium`, `--new-bg-page`, `--new-bg-card`, `--new-bg-section`, `--new-bg-feature-box`), radius (`--new-radius-sm` to `--new-radius-full`) and layout (`--new-max-width`, `--new-section-gap`, `--new-content-padding-x`). A second layer carries product colours from the app itself: `--connection-red: #fa776b`, `--connection-blue: #52aff3`, `--connection-black: #2e2e2e`, editor highlight colours (`--bg-blue-editor: #dbeafe`, `--text-pink-editor: #d1538b`, `--text-purple-editor: #9333ea`), whiteboard section colours (`--bg-*-wb`, `--border-*-sect`) and `--light-yellow: #fffa82`. The site is built with Next.js and Tailwind (`--tw-ring-color`).

## Do's and Don'ts

**Do**
- Use the eggshell `#fdfcfb` page with `#2e2e2e` text and translucent-black secondary text (72%, 48%).
- Set headings in Instrument Sans 500 with tight negative tracking; set everything else in Inter.
- Make the charcoal `#2e2e2e` button the only strong colour in the UI.
- Show the product: large screenshots with soft layered shadows on pastel panels.
- Keep cards flat with an 8% black hairline and 6px radius.
- Write calm, outcome-focused headings ("Master anything you learn.").

**Don't**
- Don't add a brand accent colour to buttons; `#207dff` is only for inline links.
- Don't use pure black text; use `#2e2e2e` or translucent black.
- Don't use bold heading weights; headings are 500.
- Don't use hard, dark shadows.
- Don't mix more than one pastel panel colour behind a single screenshot.

## Responsive Behavior

The extractor's 390px mobile pass recorded: the hero headline at Instrument Sans 500 38px / 49.4px with -1.254px tracking (350px wide); section headings at 24px / 31.2px with -0.36px tracking; body copy unchanged at Inter 16px / 24px. The mobile primary CTA reads "Get started on mobile" and keeps the desktop style: `#2e2e2e`, white Inter 600 16px/20px, 10px radius, 14px 24px padding, 48px tall, 214px wide. The mobile nav is 72px tall on `#fdfcfb` with only the "Heptabase" logo detected; the layout probe recorded 1 visible header link on mobile versus 5 on desktop, and a maximum of 2 card columns versus 4. Mobile font sizes measured: 16px, 14px, 24px, 28px, 17px, 20px, 12px, 38px and 13px. The CSS has breakpoints at 600px, 640px, 768px, 800px, 840px, 916px, 1124px, 1200px and 1440px. Screenshot and bento arrangement on mobile was not measured.

## Iteration Guide

1. Start with an eggshell `#fdfcfb` page, a 72px header and `#2e2e2e` ink.
2. Centre the hero: a pill segmented control, an Instrument Sans 500 48px/62.4px headline (-1.584px), a 16px Inter subtitle and one 48px charcoal button with 10px radius.
3. Follow with a full-width product screenshot on a soft painted or pastel background, with rounded corners and `--shadow-image-lg`.
4. Give each section a left-aligned Instrument Sans heading (44px or 36px) and one framed screenshot.
5. Build the feature grid from flat `#fcfcfc80` cards with `#00000014` hairlines, 6px radius, 16px padding and 20px/500 titles.
6. Space sections 80px apart; use 16px–20px gaps inside grids.
7. Keep link blue `#207dff` for inline text links only.
