---
version: alpha
name: edX
category: "Education"
description: "edX's learning-marketplace language — deep \"elm\" teal-black #00262b for headings, dark bands and the footer, a single burnt-orange action color #d64000 on 94px pill buttons, warm \"putty\" neutrals (#f9f8f6, #edebe3, #e7e3da, #e1ddd1) for section bands, and Inter everywhere with heavy 900-weight italic display headlines at 72px and 56px. Course cards are white 12px-radius tiles with a #cccccc hairline; body copy runs #333333 at 16–18px. Learner apps are built on Open edX's Paragon design system (--pgn-* CSS variables)."

colors:
  primary: "#d64000"
  primary-mfe: "#d74000"
  brand-700: "#a33508"
  on-primary: "#ffffff"
  elm: "#00262b"
  elm-300: "#2d494e"
  elm-400: "#0e3639"
  forest: "#1f453d"
  forest-deep: "#132a26"
  sage: "#a5b5b1"
  pagination-hover: "#4d6a65"
  ink: "#333333"
  ink-gray: "#4b5563"
  ink-gray-dark: "#374151"
  gray-700: "#454545"
  gray-500: "#707070"
  canvas: "#ffffff"
  putty-100: "#f9f8f6"
  putty-200: "#f3f1ed"
  putty-300: "#edebe3"
  putty-400: "#e7e3da"
  putty-500: "#e1ddd1"
  nav-hover-mfe: "#e7e4db"
  hairline: "#cccccc"
  link: "#00698f"
  link-hover: "#004972"
  link-mfe: "#00688d"
  link-mfe-hover: "#003c5e"
  accent-blue: "#04c5e7"
  accent-pink: "#eba8bd"
  accent-mint: "#5de3bf"
  danger: "#ab0d02"
  danger-300: "#ca3a2f"
  success: "#0d7d4d"
  warning: "#d6b600"

typography:
  display-hero:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 72px
    fontWeight: 900
    fontStyle: italic
    lineHeight: 79.2px
  display-hero-tight:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 72px
    fontWeight: 800
    fontStyle: italic
    lineHeight: 86.4px
    letterSpacing: -1.8px
  display-lg:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 56px
    fontWeight: 900
    fontStyle: italic
    lineHeight: 61.6px
  display-lg-tight:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 56px
    fontWeight: 900
    fontStyle: italic
    lineHeight: 48px
    letterSpacing: -0.96px
  display-lg-mobile:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 56px
    fontWeight: 900
    fontStyle: italic
    lineHeight: 61.6px
  heading-56:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 56px
    fontWeight: 700
    lineHeight: 61.6px
  heading-48:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 48px
    fontWeight: 700
    lineHeight: 57.6px
  heading-italic-41:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 41px
    fontWeight: 900
    fontStyle: italic
    lineHeight: 49.2px
  heading-36:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43.2px
  heading-30:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
  heading-24:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
  mfe-display:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 78px
    fontWeight: 900
    lineHeight: 78px
  hero-lede:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 24px
    fontWeight: 400
    lineHeight: 33.6px
  card-title:
    fontFamily: 'Inter, "Inter Fallback"'
    fontSize: 20px
    fontWeight: 700
    lineHeight: 35px
  body-lg:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  body-md:
    fontFamily: 'Inter, "Inter Fallback"'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-card:
    fontFamily: 'Inter, "Inter Fallback"'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  label-bold:
    fontFamily: 'Inter, "Inter Fallback"'
    fontSize: 14px
    fontWeight: 700
    lineHeight: 24.5px
  caption:
    fontFamily: 'Inter, "Inter Fallback"'
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24.5px
  link-sm:
    fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  button-lg:
    fontFamily: 'Inter, "Inter Fallback"'
    fontSize: 18px
    fontWeight: 500
    lineHeight: 31.5px
  button-sm:
    fontFamily: 'Inter, "Inter Fallback"'
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  micro:
    fontFamily: 'Inter, "Inter Fallback"'
    fontSize: 12px
    fontWeight: 700

rounded:
  sm: 4px
  md: 6px
  lg: 8px
  tab: 10px
  card: 12px
  pill: 94px
  pill-mfe: 100px
  full: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 24px
  xxl: 32px
  section-sm: 40px
  section-md: 56px
  section-lg: 64px
  section-xl: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 52px
    border: "2px solid #d64000"
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 52px
    border: "2px solid #d64000"
  button-primary-sm:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 41px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 52px
    border: "2px solid #d64000"
  button-dark:
    backgroundColor: "{colors.elm}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 40px
  button-dark-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.elm}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 40px
  button-mfe-brand:
    backgroundColor: "{colors.primary-mfe}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill-mfe}"
    padding: 9px 16px
    height: 44px
  nav-link-pill:
    backgroundColor: transparent
    textColor: "{colors.gray-700}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    height: 37px
  nav-link-pill-hover:
    backgroundColor: "{colors.putty-300}"
    textColor: "{colors.elm}"
    rounded: "{rounded.pill}"
    height: 37px
  filter-chip-outline:
    backgroundColor: transparent
    textColor: "{colors.elm}"
    typography: "{typography.caption}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 44px
    border: "2px solid #00262b"
  filter-chip-outline-hover:
    backgroundColor: "{colors.elm}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
  category-chip:
    backgroundColor: "{colors.putty-400}"
    textColor: "{colors.elm}"
    typography: "{typography.label-bold}"
    rounded: "{rounded.sm}"
    padding: 4px 8px
    height: 33px
  category-chip-active:
    backgroundColor: "{colors.elm}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label-bold}"
    rounded: "{rounded.sm}"
    padding: 4px 8px
    height: 33px
  tab-active:
    backgroundColor: "{colors.elm}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.tab}"
    padding: 16px 20px
    height: 64px
  badge-new:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label-bold}"
    rounded: "{rounded.sm}"
    padding: 8px
  carousel-control:
    backgroundColor: "{colors.putty-100}"
    textColor: "{colors.link}"
    rounded: "{rounded.full}"
    height: 40px
    border: "1px solid #edebe3"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.gray-500}"
    typography: "{typography.caption}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
    height: 46px
  text-input-mfe:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.gray-700}"
    typography: "{typography.caption}"
    rounded: "{rounded.md}"
    padding: 9px 16px
    height: 44px
    border: "1px solid #707070"
  card-course:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.elm}"
    typography: "{typography.body-card}"
    rounded: "{rounded.card}"
    padding: 0px
    border: "1px solid #cccccc"
  card-course-label:
    backgroundColor: "{colors.putty-500}"
    textColor: "{colors.elm}"
    typography: "{typography.label-bold}"
  card-topic:
    backgroundColor: "{colors.putty-100}"
    textColor: "{colors.link}"
    typography: "{typography.body-card}"
    rounded: "{rounded.card}"
    padding: 16px
    border: "1px solid #edebe3"
  promo-banner:
    backgroundColor: "{colors.accent-blue}"
    textColor: "{colors.elm}"
    typography: "{typography.link-sm}"
    padding: 4px 40px 4px 8px
    height: 28px
  link:
    textColor: "{colors.elm}"
    typography: "{typography.link-sm}"
  link-info:
    textColor: "{colors.link}"
    hoverColor: "{colors.link-hover}"
  footer:
    backgroundColor: "{colors.elm}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-md}"
    padding: 0px 16px 16px
---

## Overview

edX (www.edx.org) is a university-backed course marketplace, and its marketing site reads like a confident, editorial catalogue: an **elm** teal-black (`{colors.elm}` — `#00262b`) carries every heading, the dark hero carousel and the footer; a **burnt orange** (`{colors.primary}` — `#d64000`) is reserved for actions — pill CTAs, the "NEW" badge, active carousel dots. Between those two poles sits a warm, paper-like neutral family the code calls **putty** (`#f9f8f6` → `#e1ddd1`), used for whole section bands ("The latest on edX") and card header strips.

Typography is Inter, and its personality comes from **weight and slant**, not from a display face: hero headlines are Inter 900 *italic* at 72px ("Analytics skills, powered by GTx"), section openers are 56px 800–900 italic ("The latest on edX"), and plain section headings drop to upright 700 at 30–56px ("Trending on edX", "Explore top courses"). Body copy is `{colors.ink}` `#333333` — the most-read text color on the page — at 16px/24px, with 18px/25.2px testimonial copy in Tailwind-gray `#4b5563`.

The capture shows the rhythm: a 28px isotope-blue promo strip (`{colors.accent-blue}` `#04c5e7`) under a white header; a full-bleed carousel whose slides alternate partner-colored photography panels with an elm-navy text panel; a white strip of university logos (Microsoft, Harvard, Berkeley, Google Cloud, Cambridge, Columbia); then putty and white bands of course-card carousels with circular pagination dots. Floating course cards overlap the hero edges, which gives the top of the page a layered, "deck of cards" feel.

There are two layers to the system. The marketing site is a Tailwind/shadcn-style build whose `:root` exposes HSL tokens (`--primary-500`, `--brand-500`, `--putty-100`, `--accent-blue` …). The logged-in learner apps (authn, learning, account MFEs) are built on **Paragon**, Open edX's open-source design system, themed by edX's own brand package — measured on `authn.edx.org/register`, which exposes hundreds of `--pgn-*` CSS variables. Both layers share the same elm/orange/Inter identity.

**Key Characteristics:**
- Elm `#00262b` + burnt orange `#d64000` + warm putty neutrals — no pure black, no cool grays for surfaces.
- Pill buttons at a precise `94px` radius (100px in Paragon MFEs) with a 2px same-color border and a hover that **inverts** to white fill + orange text.
- Heavy italic display headlines (Inter 800–900 italic) as the brand's signature voice.
- White course cards: 12px radius, 1px `#cccccc` hairline, a soft two-layer shadow and a putty "Course" label strip on top (`12px 12px 0px 0px` radius).
- Dense small-label UI (14px/700) for chips, tabs, tags and card meta.
- Partner logos and university photography do the art direction; edX itself adds only flat color panels and simple line icons.

## Colors

> **Source pages:** home (`/`), `/search?tab=course`, `authn.edx.org/register` (Paragon MFE). Hex values are copied from computed styles. The marketing `:root` also declares them as HSL triplets (e.g. `--brand-500: 18 100% 42%` = `#d64000`, `--primary-500: 186.98 100% 8.43%` = `#00262b`).

### Brand & Accent
- **Burnt Orange** (`{colors.primary}` — `#d64000`): the action color. Primary pill CTAs ("Explore courses", "Register for free", "Browse additional courses"), the "NEW" badge, the active carousel dot. Token on the site: `--brand` / `--brand-500`.
- **Burnt Orange (MFE)** (`{colors.primary-mfe}` — `#d74000`): the same orange as rendered by Paragon in the auth MFE (`--pgn-color-btn-bg-brand`). One RGB step from the marketing value; treat as the same color.
- **Brand 700** (`{colors.brand-700}` — `#a33508`): Paragon's `--pgn-color-brand-700`, the darker orange step.
- **Elm** (`{colors.elm}` — `#00262b`): headings, dark hero panels, the "Learn" menu button, active tabs/chips, footer. Token: `--primary` / `--primary-500`; in edX's Paragon theme `$primary: #00262B // elm`.
- **Elm 300 / 400** (`{colors.elm-300}` `#2d494e`, `{colors.elm-400}` `#0e3639`): lighter elm steps; `#0e3639` is the full-bleed background of the register page.
- **Forest** (`{colors.forest}` — `#1f453d`): `--secondary-500`; used for some display headings and Paragon's `--pgn-color-dark-base`.
- **Forest Deep** (`{colors.forest-deep}` — `#132a26`): `--secondary-700`, dark band background.
- **Sage** (`{colors.sage}` — `#a5b5b1`): tab bar track behind "Trending on edX" tabs.
- **Isotope Blue** (`{colors.accent-blue}` — `#04c5e7`): promo banner strip. Token `--accent-blue`.
- **Pink** (`{colors.accent-pink}` — `#eba8bd`) and **Mint** (`{colors.accent-mint}` — `#5de3bf`): small illustrative accents (text highlights, the register page's accent-a).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background and card fill.
- **Putty 100** (`{colors.putty-100}` — `#f9f8f6`): carousel control fill, topic cards; `--light` / `--card-gray`.
- **Putty 200** (`{colors.putty-200}` — `#f3f1ed`): inactive language toggle ("ES").
- **Putty 300** (`{colors.putty-300}` — `#edebe3`): nav-pill hover fill and hairline around putty cards; `--border` / `--input`.
- **Putty 400** (`{colors.putty-400}` — `#e7e3da`): section band behind "The latest on edX"; category chip fill; `--card-gray-hover`.
- **Putty 500** (`{colors.putty-500}` — `#e1ddd1`): the "Course" label strip on top of each card; `--putty`.
- **Nav hover (MFE)** (`{colors.nav-hover-mfe}` — `#e7e4db`): Paragon nav-link hover fill on the register page.
- **Hairline** (`{colors.hairline}` — `#cccccc`): 1px border on course cards.

### Text
- **Ink** (`{colors.ink}` — `#333333`): most-read text on the page (card titles, meta, body).
- **Elm** (`{colors.elm}` — `#00262b`): headings, links in nav, card organisation names.
- **Ink Gray** (`{colors.ink-gray}` — `#4b5563`): testimonial body copy (18px).
- **Ink Gray Dark** (`{colors.ink-gray-dark}` — `#374151`): section subtitles ("Explore our newest offerings.").
- **Gray 700** (`{colors.gray-700}` — `#454545`): header nav links ("edX For Business", "Sign In").
- **Gray 500** (`{colors.gray-500}` — `#707070`): input text/placeholder and input border.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): text on orange and elm.

### Links
- **Link** (`{colors.link}` — `#00698f`) → hover **`{colors.link-hover}` `#004972`**: card and topic links (`--link: var(--info-dark)`, `--link-hover: 201.58 100% 22.35%`).
- **Link MFE** (`{colors.link-mfe}` — `#00688d`) → hover **`{colors.link-mfe-hover}` `#003c5e`** with underline: Paragon inline links ("Terms of Service", "Privacy Policy").

### Semantic
Measured from Paragon variables on the register MFE and matching edX's brand package `_variables.scss`:
- **Danger** (`{colors.danger}` — `#ab0d02`, `--pgn-color-danger-base`), **Danger 300** (`{colors.danger-300}` — `#ca3a2f`).
- **Success** (`{colors.success}` — `#0d7d4d`, `--pgn-color-btn-text-inverse-success`).
- **Warning** (`{colors.warning}` — `#d6b600`, `--pgn-color-warning-500`).
- **Info** shares the link blue `#00688d` (`--info`).

> **Discrepancy:** edX's published Paragon theme (`brand-edx.org/paragon/_variables.scss`) sets `$brand: #D23228`, but the live site and the live Paragon MFE both render the brand/CTA as `#d64000` / `#d74000`. The live value wins; `#D23228` is not used here.

## Typography

### Font Family
- **Inter** — the only text family. Headings and body text declare `Inter, "Helvetica Neue", Arial, sans-serif` (exactly the `$font-family-sans-serif` stack in edX's Paragon theme); buttons, cards and inputs declare `Inter, "Inter Fallback"` (the Next.js font-loader stack). The live page loads Inter as a variable font (`Inter 100 900`) plus static 400/700 cuts.
- **Roboto Mono** — loaded (400) and declared as `$font-family-monospace` in the brand theme; it appears on a small amount of text (promo codes). Its rendered size was not isolated, so no token is given.

### Hierarchy

| Token | Size / Line | Weight | Style | Where |
|---|---|---|---|---|
| `{typography.mfe-display}` | 78px / 78px | 900 | normal | Register MFE headline "Start learning with edX" |
| `{typography.display-hero}` | 72px / 79.2px | 900 | italic | Hero carousel headlines |
| `{typography.display-hero-tight}` | 72px / 86.4px, -1.8px | 800 | italic | "Register for a free account" band |
| `{typography.display-lg}` | 56px / 61.6px | 900 | italic | "Learn something new with edX" |
| `{typography.display-lg-tight}` | 56px / 48px, -0.96px | 900 | italic | Dark promo bands ("Empower every member of your team") |
| `{typography.heading-56}` | 56px / 61.6px | 700 | normal | "Explore top courses" |
| `{typography.heading-48}` | 48px / 57.6px | 700 | normal | "Hear what other learners have to say" |
| `{typography.heading-italic-41}` | 41px / 49.2px | 900 | italic | "Find your learning path" |
| `{typography.heading-36}` | 36px / 43.2px | 700 | normal | "Trending on edX" |
| `{typography.heading-30}` | 30px / 36px | 700 | normal | "Popular topics" |
| `{typography.heading-24}` | 24px / 28.8px | 700 | normal | Small section titles |
| `{typography.hero-lede}` | 24px / 33.6px | 400 | normal | Hero supporting line |
| `{typography.card-title}` | 20px / 35px | 700 | normal | Course card titles, topic titles |
| `{typography.body-lg}` | 18px / 25.2px | 400 | normal | Testimonials, lede paragraphs |
| `{typography.button-lg}` | 18px / 31.5px | 500 | normal | Large pill buttons |
| `{typography.body-md}` | 16px / 24px | 400 | normal | Body default, footer |
| `{typography.body-card}` | 16px / 28px | 400 | normal | Card organisation line |
| `{typography.label-bold}` | 14px / 24.5px | 700 | normal | Chips, tabs label, "Course" strip, "NEW" |
| `{typography.caption}` | 14px / 24.5px | 400 | normal | Card meta ("4 weeks to complete") |
| `{typography.button-sm}` | 14px / 21px | 500 | normal | Header CTA, nav pills, language toggle |
| `{typography.link-sm}` | 14px / 19.6px | 400 | normal | Inline "Learn more" links, banner |
| `{typography.micro}` | 12px | 700 | normal | Tiny labels (e.g. "COPY") |

The mobile (390px) capture keeps the 56px/900 italic display (`{typography.display-lg-mobile}`) as its largest headline and keeps body at 18px.

### Principles
- Contrast comes from **weight jumps** (400 → 700 → 900) and the **italic** switch for marketing display lines; there is no second display typeface.
- Display italics are set tight (line-height 1.1, sometimes 0.857 with negative tracking) so multi-line headlines stack like a poster.
- UI labels are small and bold (14px/700) rather than uppercase; uppercase appears only in footer group headings ("SKILLS").
- Line-heights are generous for reading text: 16/24, 16/28, 14/24.5 (1.5–1.75).

### Note on Font Substitutes
Inter is loaded from Google Fonts by edX's Paragon brand package (`fonts.scss` imports `family=Inter:wght@400;500;700&family=Roboto+Mono`), so no substitute is needed — use Inter itself. If Inter cannot load, the declared fallbacks are "Helvetica Neue", then Arial. Keep the variable font so 800 and 900 italics render as true weights rather than synthesized bold.

## Layout

### Spacing System
Measured gaps and paddings cluster on a 4px grid: `{spacing.xxs}` 4px, `{spacing.xs}` 8px (most common gap), `{spacing.sm}` 12px, `{spacing.md}` 16px (most common padding), `{spacing.lg}` 20px, `{spacing.xl}` 24px, `{spacing.xxl}` 32px, then section spacing `{spacing.section-sm}` 40px, `{spacing.section-md}` 56px, `{spacing.section-lg}` 64px and `{spacing.section-xl}` 80px. This matches Paragon's `spacer.base` of 1rem with quarter/half/1.5× steps.

### Grid & Container
- Page content sits in a `max-width: 1280px` article with `0px 16px` side padding, giving a 1248px content column at 1280px viewport.
- Course carousels show four cards per row at desktop (cards measured 270–302px wide, 370px tall).
- The hero carousel splits into a left image/partner panel and a right elm text panel, with neighbouring course cards peeking in from both edges.
- Paragon MFEs use Bootstrap-style breakpoints sm 576px, md 768px, lg 992px, xl 1200px, xxl 1400px and a 24px gutter.

### Whitespace Philosophy
Sections are separated by color bands (white ↔ putty) more than by large empty gaps; inside a band, cards sit close (16px gaps) and the carousel pagination pill gets a clear 40–56px breathing zone above the band CTA. The page is dense with content but each card is internally airy (titles at 35px line-height).

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| Flat | `none` | Nav pills, chips, text links |
| Card / button | `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px` | Course cards, pill buttons, filter chips (Tailwind `shadow`) |
| Subtle | `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` | Carousel pagination pill (`shadow-sm`) |
| Raised | `rgba(0, 0, 0, 0.15) 0px 8px 16px 0px, rgba(0, 0, 0, 0.15) 0px 4px 10px 0px` | Dropdown/popover panels on search |

Depth is mostly communicated by **overlap** — floating cards over the hero, the Xpert chat bubble over the carousel — and by color banding, not by heavy shadows.

### Decorative Depth
Hero panels are flat color blocks paired with partner photography or brand-colored geometric artwork (e.g. purple blocks behind an icon). There are no gradients on surfaces in the captured viewport.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 4px | Inputs, category chips, "NEW" badge |
| `{rounded.md}` | 6px | Search field wrapper, Paragon form controls |
| `{rounded.lg}` | 8px | Small panels |
| `{rounded.tab}` | 10px | Outer corners of the segmented tab bar (`10px 0px 0px 10px` / `0px 10px 10px 0px`) |
| `{rounded.card}` | 12px | Course cards (`12px 12px 0px 0px` on the label strip/image) |
| `{rounded.pill}` | 94px | All marketing pill buttons and nav pills |
| `{rounded.pill-mfe}` | 100px | Paragon MFE buttons (`--pgn-size-btn-border-radius-lg: 100px`) |
| `{rounded.full}` | 9999px | Carousel pagination and arrow controls |

### Photography Geometry
Card images are full-bleed inside the card with square bottom corners and the card's 12px radius on top; partner logos sit in small white rounded tiles overlapping the image. University logos in the trust strip are shown flat, full color, no containers.

## Components

### Buttons
- **Primary pill** (`button-primary`): `{colors.primary}` fill, white 18px/500 text, `8px 16px` padding, 52px tall, `{rounded.pill}` 94px, 2px `#d64000` border, card shadow. **Hover inverts**: white fill, `#d64000` text, border stays (`button-primary-hover`).
- **Small primary** (`button-primary-sm`): the header "Register for free" — 14px/500, 41px tall, same pill and hover inversion.
- **Secondary / outline** (`button-secondary`): white fill, `#d64000` text and 2px border ("Learn more").
- **Dark pill** (`button-dark`): the header "Learn" menu trigger — `{colors.elm}` fill, white 18px/500, `0px 16px`, 40px tall; hover inverts to white fill with elm text.
- **Paragon brand button** (`button-mfe-brand`): on authn, `#d74000` fill, 1px border, `9px 16px`, 44px tall, 100px radius; hover inverts to white fill with orange text.

### Cards & Containers
- **Course card** (`card-course`): white, 1px `#cccccc` border, 12px radius, card shadow, no outer padding. Top strip: `{colors.putty-500}` `#e1ddd1` with "Course" in 14px/700 elm, optional orange "NEW" badge right-aligned. Then image, partner logo tile, 20px/700 title (two lines, ellipsis), 16px org name, and two meta rows (14px/400 with line icons: duration, level).
- **Topic card** (`card-topic`): `{colors.putty-100}` fill, 1px `#edebe3` border, 12px radius, 16px padding, 20px/700 elm title.

### Inputs & Forms
- **Header search** (`text-input`): white, 14px `#707070` text, `8px 12px` padding, 46px tall, 4px radius, inside a wrapper with 1px `#707070` border and 6px radius (48px tall); a magnifier icon sits at the right.
- **Paragon form control** (`text-input-mfe`): white, `#454545` text, 1px `#707070` border, 6px radius, `9px 16px`, 44px tall.

### Navigation
- Header: edX logo, dark "Learn" pill, wide search field, EN/ES segmented toggle (active `#00262b` with white text, inactive `#f3f1ed` with elm text, `6px 16px`, 33px tall, square corners), then text pills "edX For Business" / "Sign In" (`nav-link-pill`, `#454545`, hover fill `#edebe3` and elm text, 37px tall, 94px radius) and the orange "Register for free" pill.
- Promo banner (`promo-banner`): 28px isotope-blue strip, 14px elm text, bold lead phrase, underlined "Learn more" link and a close ×.

### Pills, Tags, and Chips
- **Filter chip** (`filter-chip-outline`, search page): transparent, elm 14px/400 text, 2px elm border, `10px 24px`, 44px, 94px radius; hover fills elm with white text.
- **Category chip** (`category-chip`): `#e7e3da` fill, elm 14px/700, `4px 8px`, 33px, 4px radius; active (`category-chip-active`) is elm with white text.
- **"NEW" badge** (`badge-new`): orange fill, white 14px/700, 8px padding, 4px radius.

### Signature Components
- **Segmented program tabs** ("Executive Education / Courses / MicroDegrees …"): a white bar whose active segment is an elm block with white 18px/700 text, `16px 20px` padding, 64px tall, `10px 0px 0px 10px` radius on the leading edge.
- **Carousel pagination pill**: white rounded (9999px) capsule with ‹ › arrows and dots; active dot orange.
- **Hero carousel**: alternating partner-color panels and elm text panels with 72px/900 italic white headlines, 24px/400 white lede and one orange pill CTA.
- **Footer** (`footer`): elm `#00262b` background, white 16px/24px text, uppercase group headings ("SKILLS"), `0px 16px 16px` padding.

## Design System Architecture

edX's product UI is built on **Paragon**, the open-source design system of the Open edX platform ("An accessible, theme-ready design system built for learning applications and Open edX" — [github.com/openedx/paragon](https://github.com/openedx/paragon)). edX itself does not publish a separate design-system site; it brands Paragon with its own theme package, [`@edx/brand-edx.org`](https://raw.githubusercontent.com/edx/brand-edx.org/master/README.rst) ("the edX implementation of the branding interface defined in `@edx/brand-openedx`"). The www.edx.org marketing site is a separate Tailwind/shadcn-style build whose `:root` tokens (`--primary`, `--brand`, `--putty-*`, `--accent-*`) mirror the same palette.

### Token architecture
- Paragon's [ADR 0019](https://raw.githubusercontent.com/openedx/paragon/release-23.x/docs/decisions/0019-scaling-styles-with-design-tokens.rst) moved theming from Bootstrap 4 SCSS variables to JSON design tokens built with **style-dictionary** into CSS variables prefixed `--pgn-`.
- Three tiers: **global** (palette, typography, spacing — e.g. `--pgn-color-primary-500: #00262B`), **alias** (purpose, e.g. `--pgn-color-theme-default-primary: var(--pgn-color-primary-500)`), **component** (e.g. `--pgn-color-btn-bg-primary`). Names follow style-dictionary's category-type-item scheme ([tokens/README.md](https://raw.githubusercontent.com/openedx/paragon/alpha/tokens/README.md)).
- Color ramps are generated, not hand-picked: in the default light theme ([color.json](https://raw.githubusercontent.com/openedx/paragon/alpha/tokens/src/themes/light/global/color.json)) each `100–400` step is `base` mixed with white at 0.94/0.75/0.50/0.25 and `600–900` mixed with black at 0.10/0.20/0.25/0.30; `action.default.*` tokens are `darken 0.1`. Transforms use chroma-js `modify` entries (`darken`, `mix`, `color-yiq`).
- Live measurement confirms the tiers on edX's register MFE: `--pgn-color-btn-bg-brand: #d74000`, `--pgn-color-primary-300: #2d494e`, `--pgn-color-danger-base: #ab0d02`, `--pgn-size-btn-border-radius-lg: 100px`, `--pgn-color-link-hover: #004972`.
- The marketing site uses its own flat token set in HSL triplets: `--primary-500`, `--brand-500`, `--putty-100…700`, `--accent-blue`, `--link`, `--link-hover`, `--card-gray`, `--border`, `--ring` (shadcn naming: `--background`, `--foreground`, `--card`, `--popover`, `--destructive`).

### Theming
- Paragon ships a CSS foundation (`@openedx/paragon/dist/core.min.css`) plus a theme layer (`light.min.css`), both loadable from a CDN ([README](https://raw.githubusercontent.com/openedx/paragon/release-23.x/README.md)). Only a **light** theme exists in `tokens/src/themes/`; no dark or high-contrast theme is shipped.
- Brands override tokens through an `@edx/brand` npm alias whose JSON tokens deep-merge over core ([theming guide](https://raw.githubusercontent.com/openedx/paragon/release-23.x/www/src/pages/guides/theming.mdx)); runtime re-theming is done by swapping/injecting CSS variable files, so apps need no rebuild (ADR 0019). Brands can also remap Button variants inside components (e.g. Alert actions `primary → brand`).
- edX's brand package values ([_variables.scss](https://raw.githubusercontent.com/edx/brand-edx.org/master/paragon/_variables.scss)): `$primary: #00262B // elm`, `$light: #E1DDDB // limestone`, `$accent-a: #03C7E8 // isotope blue`, `$accent-b: #F0CC00 // oxide yellow`, `$red: #AB0D02`, `$green: #0D7D4D`, `$yellow: #D6B600`, `$blue: #00688D`. Its `$brand: #D23228` is superseded on the live site by `#d64000`.

### Type & spacing systems
- Paragon core ([typography.json](https://raw.githubusercontent.com/openedx/paragon/alpha/tokens/src/core/global/typography.json)): `font.size.base 1.125rem` (18px), h1 2.5rem (mobile 2.25rem), h2 2rem, h3 1.375rem, display-1…4 3.75/4.875/5.625/7.5rem, weights 300/400/500/700, `line-height.base 1.5556`. edX's theme keeps `$font-size-base: 1.125rem` and `$line-height-base: 1.55555555555555` with Inter and Roboto Mono.
- Spacing ([spacing.json](https://raw.githubusercontent.com/openedx/paragon/alpha/tokens/src/core/global/spacing.json)): `spacer.base 1rem`, steps 0, .25, .5, 1, 1.5, 3, 5 × base plus half-steps (1.5 → .375, 2.5 → .75, 3.5 → 1.25, 4.5 → 2, 5.5 → 4); grid gutter 24px.
- Breakpoints ([breakpoints.json](https://raw.githubusercontent.com/openedx/paragon/alpha/tokens/src/core/global/breakpoints.json)): sm 576, md 768, lg 992, xl 1200, xxl 1400px.

### Component model
- React components (React 16+), built on react-bootstrap, published from `src/`. The release-23.x inventory includes ActionRow, Alert, Annotation, Avatar, AvatarButton, Badge, Breadcrumb, Bubble, Button, Card, Carousel, Chip, ChipCarousel, CloseButton, Collapsible, ColorPicker, Container, DataTable, Dropdown, Dropzone, Form, Hyperlink, Icon, IconButton, Image, Layout, Menu, Modal, Nav, Navbar, PageBanner, Pagination, Popover, ProductTour, ProgressBar, SearchField, SelectableBox, Sheet, Skeleton, Spinner, Stack, StatefulButton, Stepper, Sticky, Tabs, Toast, ToggleButton, Tooltip, Truncate and more ([repo](https://github.com/openedx/paragon)).
- Each component has its own token file (e.g. [Button/core.json](https://raw.githubusercontent.com/openedx/paragon/release-23.x/tokens/src/core/components/Button/core.json): padding x/y for base/sm/lg sizes, `size.btn.focus.width 2px`, focus gap equal to focus width, focus radius = radius + gap, `transition.btn none`). Button variants include primary, brand, success, info, warning, danger, light, dark plus `outline-*` and `inverse-*` forms (visible in the `--pgn-color-btn-*` variable names).

### Accessibility
- [ADR 0017](https://raw.githubusercontent.com/openedx/paragon/release-23.x/docs/decisions/0017-runtime-a11y-validation.rst): Paragon states it conforms to WCAG; it lints with `eslint-plugin-jsx-a11y` and runs `@axe-core/react` at runtime in development.
- Focus: buttons get a 2px focus ring offset by a 2px gap (`$btn-focus-width: 2px`, `$btn-focus-gap: 2px` in edX's theme); color-specific focus tokens exist (`--pgn-color-btn-focus-outline-brand: #d74000`).
- `color-yiq` picks `#454545` or white text automatically for contrast on a fill.

### Delivery
- npm: `@openedx/paragon` (latest 23.23.0, per [npm registry](https://registry.npmjs.org/@openedx/paragon)); themes via `@edx/brand` alias (`@edx/brand@npm:@edx/brand-edx.org`).
- Paragon CLI: `install-theme`, `build-tokens`, `replace-variables`, `build-scss`, `serve-theme-css`.
- i18n through react-intl; docs at [paragon-openedx.netlify.app](https://paragon-openedx.netlify.app/) with a Figma library ("Paragon-2021").
- Versioning via semantic-release with maintained `release-22.x` / `release-23.x` branches and an `alpha` channel.

## Do's and Don'ts

### Do
- Use `{colors.primary}` `#d64000` only for actions and "NEW" signals — one orange pill per band.
- Make every button a 94px-radius pill with a 2px border of its own fill color, and invert to white fill + colored text on hover.
- Set headings in `{colors.elm}` `#00262b`, body in `{colors.ink}` `#333333`.
- Use Inter 900 italic for marketing display headlines (72px desktop, 56px mobile) and upright 700 for functional section titles.
- Alternate white and putty (`#e7e3da`, `#f9f8f6`) bands to separate sections.
- Build course cards exactly: white, 12px radius, 1px `#cccccc`, light shadow, putty "Course" strip, 20px/700 title, 14px meta with icons.
- Use 14px/700 labels for chips and tabs; keep chip radius at 4px.
- In Paragon apps, theme through `--pgn-*` tokens / the brand package, not by overriding `.btn-*` classes.

### Don't
- Don't use `#D23228` (the older brand-package red) as the CTA color — the shipped color is `#d64000`.
- Don't introduce cool grays for surfaces; neutrals are warm putty.
- Don't use pure black for text or dark panels — use elm `#00262b` or forest `#1f453d`.
- Don't square off buttons or use small radii on CTAs; don't make chips pills (they are 4px).
- Don't add gradients or heavy drop shadows; depth comes from overlap and banding.
- Don't set display headlines at regular weight or upright when they're promotional.
- Don't put more than one filled orange CTA in a hero slide.

## Responsive Behavior

### Breakpoints
| Name | Width | Source |
|---|---|---|
| sm | 576px | Paragon `--pgn-size-breakpoint-sm` |
| md | 768px | Paragon breakpoints.json |
| lg | 992px | Paragon breakpoints.json |
| xl | 1200px | Paragon `--pgn-size-breakpoint-xl` |
| xxl | 1400px | Paragon breakpoints.json |

### Touch Targets
Primary pills are 52px tall (41px for the header variant), nav pills 37px, chips 33px, carousel controls 40px, inputs 44–46px. On mobile (390px) the primary CTA stretches to the full content width (358px) at the same 52px height.

### Collapsing Strategy
- At 390px the hero headline drops from 72px to 56px (900 italic, 61.6px line-height); body stays 18px/25.2px.
- Only the 390px roles above were measured; header and carousel reflow at intermediate widths was not captured, so follow Paragon's breakpoints rather than inventing a pattern.
- Section display headings shrink to 30–44px on mobile (sizes 30px, 36px and 44px measured at 390px).

### Image Behavior
Card images sit full-bleed inside the card with partner logos in white tiles on top (desktop capture). Hero photography fills its panel. Mobile image cropping was not measured.

## Iteration Guide

1. Start with canvas `#ffffff`, ink `#333333`, elm `#00262b` headings and Inter (`Inter, "Helvetica Neue", Arial, sans-serif`).
2. Add the action color `#d64000` on a 94px pill: `8px 16px`, 52px tall, 18px/500 text, 2px same-color border, hover inverts.
3. Set hero headlines at Inter 72px/900 italic, line-height 79.2px, white on an elm panel; mobile 56px.
4. Lay out a 1280px max container with 16px gutters; band sections in white and putty (`#e7e3da`, `#f9f8f6`).
5. Build course cards (12px radius, 1px `#cccccc`, Tailwind `shadow`, putty `#e1ddd1` label strip, 20px/700 title, 14px meta).
6. Add chips (4px radius, `#e7e3da` / active elm) and outline filter pills (2px elm border, 94px).
7. Use the link blue `#00698f` → `#004972` for card/text links; semantic colors from Paragon (`#ab0d02`, `#0d7d4d`, `#d6b600`).
8. For app UI, install `@openedx/paragon` with the edX brand package and theme via `--pgn-*` variables (buttons 100px radius, inputs 6px radius with `#707070` border).
9. Check: one orange CTA per band, no cool grays, italic heavy display, inversion hovers.
