---
version: alpha
name: Olympics
category: "Sports & Fitness"
description: "Olympics.com, the IOC's digital home — white #ffffff canvas, #f5f5f5 rounded story cards (12px), full-bleed black photo heroes with olympicHeadlineRegular 56px/700 headlines, olympicSans body at 18–20px in near-black #020202, Olympic blue #0078d0 for the menu block and primary pill, light grey 32px-radius pill buttons, and ring-colour category tiles (#ee212e, #ffb13c, #01a54a)."

colors:
  primary: "#0078d0"
  primary-hover: "#00507c"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  surface: "#f5f5f5"
  surface-strong: "#e5e5e5"
  surface-dark: "#000000"
  surface-dark-2: "#37373a"
  surface-ink: "#232325"
  sign-in-tint: "#cce4f6"
  ink: "#020202"
  ink-body: "#0d0d10"
  ink-nav: "#454548"
  ink-lang: "#5a5a5a"
  ink-muted: "#b4b4b4"
  link: "#006cbb"
  ring-red: "#ee212e"
  ring-yellow: "#ffb13c"
  ring-green: "#01a54a"

typography:
  hero-headline:
    fontFamily: "olympicHeadlineRegular, \"olympicHeadlineRegular Fallback\", sans-serif"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 70px
  hero-headline-mobile:
    fontFamily: "olympicHeadlineRegular, \"olympicHeadlineRegular Fallback\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  section-title:
    fontFamily: "olympicHeadlineRegular, \"olympicHeadlineRegular Fallback\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 30px
  section-title-mobile:
    fontFamily: "olympicHeadlineRegular, \"olympicHeadlineRegular Fallback\", sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 26px
  card-headline:
    fontFamily: "olympicHeadlineRegular, \"olympicHeadlineRegular Fallback\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 30px
  event-date:
    fontFamily: "olympicHeadlineRegular, \"olympicHeadlineRegular Fallback\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 28px
  body-base:
    fontFamily: "olympicSans, \"olympicSans Fallback\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  main-nav:
    fontFamily: "\"Olympic Sans\", Arial, Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  body-lg:
    fontFamily: "olympicSans, \"olympicSans Fallback\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  footer-heading:
    fontFamily: "olympicSans, \"olympicSans Fallback\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: "olympicSans, \"olympicSans Fallback\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  footer-link:
    fontFamily: "olympicSans, \"olympicSans Fallback\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  menu-button:
    fontFamily: "\"Olympic Sans\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-sm:
    fontFamily: "olympicSans, \"olympicSans Fallback\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  utility-link:
    fontFamily: "\"Olympic Sans\", Arial, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  sign-in:
    fontFamily: "\"Olympic Sans\", Arial, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 22px
  tag:
    fontFamily: "olympicSans, \"olympicSans Fallback\", sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 24px

rounded:
  tag: 8px
  card: 12px
  lg: 16px
  chip: 24px
  pill: 32px
  circle: 50%

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 32px
  xxl: 40px
  section: 48px
  hero-top: 60px
  huge: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-base}"
    rounded: "{rounded.pill}"
    padding: 0px 0px 0px 24px
    height: 54px
  button-light:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 40px
  button-grey:
    backgroundColor: "{colors.surface-strong}"
    textColor: "{colors.surface-ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 40px
  button-dark:
    backgroundColor: "{colors.surface-ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 40px
  menu-toggle:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.menu-button}"
    height: 64px
    width: 120px
  menu-toggle-hover:
    backgroundColor: "{colors.primary-hover}"
  sign-in-pill:
    backgroundColor: "{colors.sign-in-tint}"
    textColor: "{colors.ink}"
    typography: "{typography.sign-in}"
    rounded: "{rounded.chip}"
    padding: 4px 16px
    height: 32px
  language-select:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-lang}"
    typography: "{typography.utility-link}"
    rounded: "{rounded.chip}"
    padding: 0px 16px
    height: 32px
  utility-bar:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-nav}"
    typography: "{typography.utility-link}"
    padding: 8px 24px 8px 40px
    height: 64px
  utility-link-hover:
    textColor: "{colors.ink-body}"
  main-nav-link:
    textColor: "{colors.ink-body}"
    typography: "{typography.main-nav}"
    height: 64px
  card-story:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
  tag:
    backgroundColor: "{colors.surface-strong}"
    textColor: "{colors.ink}"
    typography: "{typography.tag}"
    rounded: "{rounded.tag}"
    padding: 0px 8px
    height: 24px
  hero:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.hero-headline}"
    padding: 60px 0px 150px
    height: 720px
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer-link}"
---

## Overview

Olympics.com is the International Olympic Committee's news, video and results platform. It is built on the IOC's evolved brand identity (2022), which the IOC describes as "a comprehensive design system that balances consistency and flexibility" with three custom typefaces, graphic devices and illustrations ([IOC — Evolving the Olympic brand](https://www.olympics.com/ioc/olympic-brand)).

The page is a white canvas (`{colors.canvas}` — `#ffffff`). At the top: a 64px light-grey utility bar (`{colors.surface}` — `#f5f5f5`) with IOC sites (IOC, Dakar 2026, LA28, Alpes 2030, Brisbane 2032, Museum, Shop…), a light-blue Sign In pill and a language pill; below it the main nav with the five-ring logo, large 20px links (Olympic Games, Athletes, Sports, News, Olympic Channel, Let's Move), a search icon, and a solid **Olympic blue** (`{colors.primary}` — `#0078d0`) menu block flush to the right edge.

The hero is a full-bleed photographic carousel on black with a huge condensed, uppercase-looking **olympicHeadlineRegular** headline at 56px/700 in white, a light-grey pill CTA, and carousel dots. Below it: a row of circular story "bubbles" with blue rings, then sections titled in olympicHeadlineRegular 40px ("Top Stories") with a grey "View All" pill on the right, and large `#f5f5f5` story cards with 12px radius.

**Key Characteristics:**
- White canvas, `#f5f5f5` cards and bars, black hero and footer — almost achromatic.
- Olympic blue `#0078d0` is the one interface colour (menu block, primary pill, ring bubbles); it hovers to `#00507c`.
- Ring colours appear as solid category fills: red `#ee212e`, yellow `#ffb13c`, green `#01a54a`, blue `#0078d0`.
- Display type is olympicHeadlineRegular 700 — tall, condensed, punchy. Everything else is olympicSans.
- Pills everywhere: 32px radius buttons, 24px radius chips; 8px tags; 12px cards; circular story bubbles.
- No box shadows — depth comes from photography and grey surfaces.

## Colors

> **Sources:** computed styles on `/en/` and `/en/news`, plus `:root` tokens (authored in `oklch()`; hex below is the measured computed colour).

### Brand & Accent
- **Olympic Blue** (`{colors.primary}` — `#0078d0`; `--blue-600` / `--bg-teams` = `oklch(0.565 0.1616 250.39)`): menu block, "Browse package" primary pill, blue rings around story bubbles.
- **Blue Hover** (`{colors.primary-hover}` — `#00507c`): measured hover background of the menu block.
- **Link Blue** (`{colors.link}` — `#006cbb`): computed colour of card link wrappers.
- **Ring Red** (`{colors.ring-red}` — `#ee212e`; `--brand-red` / `--bg-medals`).
- **Ring Yellow** (`{colors.ring-yellow}` — `#ffb13c`; `--bg-disciplines`).
- **Ring Green** (`{colors.ring-green}` — `#01a54a`; `--bg-athletes`).
These match the IOC's statement that "the primary colours of the Olympic symbol – blue, yellow, black, green, red and white – … remain at the foundation", with an extended palette "for digital interfaces" ([IOC brand page](https://www.olympics.com/ioc/olympic-brand)).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background (`<body>`).
- **Surface** (`{colors.surface}` — `#f5f5f5`; `--grey-50`): utility bar, story cards, light pills.
- **Surface Strong** (`{colors.surface-strong}` — `#e5e5e5`; `--grey-100`): "View All" pill, tags.
- **Surface Dark** (`{colors.surface-dark}` — `#000000`): hero carousel band and footer.
- **Surface Dark 2** (`{colors.surface-dark-2}` — `#37373a`; `--grey-800`): pills on dark modules.
- **Surface Ink** (`{colors.surface-ink}` — `#232325`; `--grey-900`): "Load More" button fill and grey-pill label colour.
- **Sign-in Tint** (`{colors.sign-in-tint}` — `#cce4f6`): Sign In pill.

### Text
- **Ink** (`{colors.ink}` — `#020202`; `--black` = `oklch(0.08 0.001 278)`): most-read text colour — headings, card text, pill labels.
- **Ink Body** (`{colors.ink-body}` — `#0d0d10`; `--bg-events`): body element colour, standfirsts, main nav.
- **Ink Nav** (`{colors.ink-nav}` — `#454548`): utility-bar links; hover to `#0d0d10`.
- **Ink Lang** (`{colors.ink-lang}` — `#5a5a5a`): language selector label.
- **Ink Muted** (`{colors.ink-muted}` — `#b4b4b4`): secondary footer links on black.

### Token-to-computed map (measured)

| `:root` token | Authored value | Computed on page |
|---|---|---|
| `--blue-600` / `--bg-teams` | `oklch(0.565 0.1616 250.39)` | `#0078d0` menu block, primary pill |
| `--brand-red` / `--bg-medals` | `oklch(0.6079 0.2325 25.58)` | `#ee212e` category tile |
| `--bg-disciplines` | `oklch(0.8164 0.1543 72.65)` | `#ffb13c` category tile |
| `--bg-athletes` | `oklch(0.6308 0.1748 149.68)` | `#01a54a` category tile |
| `--bg-events` | `oklch(0.1605 0.0063 285.67)` | `#0d0d10` body text / dark tile |
| `--black` | `oklch(0.08 0.001 278)` | `#020202` headings, labels |
| `--grey-50` | `oklch(0.97 0 89.876)` | `#f5f5f5` cards, light pill |
| `--grey-100` | `oklch(0.922 0 89.876)` | `#e5e5e5` View All pill, tags |
| `--grey-800` | `oklch(0.338 0.005 286.119)` | `#37373a` dark-module pill |
| `--grey-900` | `oklch(0.257 0.004 286.136)` | `#232325` Load More fill |

### Medal colours
The `:root` set also defines `--gold`, `--silver`, `--bronze` and `--text-gold/-silver/-bronze` (oklch); they were not seen rendered on the measured pages, so no hex is declared here.

## Typography

### Font Family
The IOC brand defines three exclusive faces: "Olympic Headline is the brand's signature bold and athletic display typeface for short and punchy titles, Olympic Sans is a Swiss Neo-grotesque typeface for body copy, and Olympic Serif brings a touch of tradition and elegance" ([IOC brand page](https://www.olympics.com/ioc/olympic-brand)). On Olympics.com they are served as:
- **olympicHeadlineRegular** (700) — hero, section and card headlines.
- **olympicSans** (400, 700) — body, buttons, tags, footer. The most-used family by far.
- **"Olympic Sans"** — the same face under its family name, used by the header/nav component (with `Arial, Helvetica` fallbacks).
- **olympicSerif** and **olympicHeadlineCondensed** are declared in the stylesheets but were not seen rendered.

### Hierarchy

| Token | Family | Size | Weight | Line height | Use |
|---|---|---|---|---|---|
| `{typography.hero-headline}` | olympicHeadlineRegular | 56px | 700 | 70px | Hero carousel headline (white) |
| `{typography.hero-headline-mobile}` | olympicHeadlineRegular | 32px | 700 | 40px | Same at 390px |
| `{typography.section-title}` | olympicHeadlineRegular | 40px | 700 | 30px | "Top Stories" |
| `{typography.section-title-mobile}` | olympicHeadlineRegular | 32px | 400 | 26px | Section title at 390px (news page) |
| `{typography.card-headline}` | olympicHeadlineRegular | 28px | 700 | 30px | Games cards ("LA28", "Brisbane 2032") |
| `{typography.event-date}` | olympicHeadlineRegular | 28px | 700 | 28px | Event date ("7 - 19 Oct") |
| `{typography.body-base}` | olympicSans | 20px | 400 | 30px | Document base, primary pill label |
| `{typography.main-nav}` | Olympic Sans | 20px | 400 | 32px | Main navigation |
| `{typography.body-lg}` | olympicSans | 18px | 400 | 27px | Standfirsts, sign-up copy |
| `{typography.footer-heading}` | olympicSans | 18px | 400 | 28px | Footer column headings |
| `{typography.button}` | olympicSans | 16px | 700 | 24px | Pill labels ("View All", "Load More") |
| `{typography.footer-link}` | olympicSans | 16px | 400 | 26px | Footer links |
| `{typography.menu-button}` | Olympic Sans | 16px | 400 | 24px | Menu toggle |
| `{typography.button-sm}` | olympicSans | 14px | 700 | 20px | Hero pill ("Buy tickets") |
| `{typography.utility-link}` | Olympic Sans | 14px | 400 | 24px | Utility bar links |
| `{typography.sign-in}` | Olympic Sans | 14px | 500 | 22px | Sign In label |
| `{typography.tag}` | olympicSans | 12px | 700 | 24px | Sport tags on cards ("Judo") |

### Principles
- **Headline face for short, punchy titles only** — exactly the brand's stated role for Olympic Headline.
- **700 is the dominant weight** (2,117 weighted chars on home; 7,039 on news) — card titles and labels are bold.
- **Tight display leading**: section titles run 40px on a 30px line-height; hero 56px on 70px.
- **No letter-spacing** adjustments were measured.

### Note on Font Substitutes
The three faces are exclusive to the IOC ("Three new exclusive typefaces were created…"). The IOC describes Olympic Sans as "a contemporary interpretation of Akzidenz-Grotesk", so a licensed Akzidenz-Grotesk (or another Swiss neo-grotesque) is the documented stylistic reference for body text. For Olympic Headline, which the IOC says was "inspired by typography found throughout Olympic Games history, such as the Tokyo 1964 and Seoul 1988 emblems", use a bold condensed grotesque.

## Layout

### Spacing System
- Most-used gaps: 4px (80), 24px (52), 16px (50), 8px (33), 12px (20); paddings 16px (88), 8px (38), 12px (24), 24px (20), 40px (19), 32px (18).
- Tokens: `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 12px · `{spacing.md}` 16px · `{spacing.lg}` 24px · `{spacing.xl}` 32px · `{spacing.xxl}` 40px · `{spacing.section}` 48px · `{spacing.hero-top}` 60px · `{spacing.huge}` 80px.
- `:root` exposes a padding scale `--Paddings-1` (0.4rem) … `--Paddings-25` (10rem) and `--carousel-gap: 2.4rem`. With `--grid-width: 128rem` and the 1280px layout, these rem values correspond to px at 10px per rem (e.g. `--Corner-radius-3: 1.2rem` ↔ measured 12px card radius).

### Grid & Container
- Content width up to 1280px (`--grid-width`).
- `--card-large-width: calc((var(--grid-width) - var(--carousel-gap) * 2) / 3)` and `--card-medium-width: calc((… - gap * 3) / 4)` — carousels are 3-up (large) or 4-up (medium) with 24px gaps.
- Story cards in the extraction are 596px wide — two per row.
- The hero spans the full 1280px, 720px tall, with `60px 0 150px` padding.

### Whitespace Philosophy
Generous. Sections are separated by large white gaps; the type is big (20px base). The layout lets photography fill whole bands.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat white | Canvas |
| 1 | `#f5f5f5` surface | Cards, utility bar |
| 2 | Black photo band | Hero, footer |
| 3 | Translucent black `#00000080` | Measured background on image overlays |

The box-shadow table is empty: no drop shadows are used.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.tag}` | 8px | Sport tags, small tiles (most frequent radius on news) |
| `{rounded.card}` | 12px | Story cards (`12px 12px 0 0` on card images) |
| `{rounded.lg}` | 16px | Larger tiles |
| `{rounded.chip}` | 24px | Sign In and language pills (32px tall) |
| `{rounded.pill}` | 32px | All 40px+ buttons |
| `{rounded.circle}` | 50% / 100% | Story bubbles, round controls |

`:root` defines `--Corner-radius-1` … `-8` (0.4–3.2rem) and `--Corner-radius-999: 99.9rem`.

### Story bubbles
A horizontal row of circular images (Instagram-story style) with an Olympic-blue ring (capture) and a two-line bold caption beneath.

## Components

### Buttons

**`button-primary`** — "Browse package": `{colors.primary}` `#0078d0`, white `{typography.body-base}` label, `{rounded.pill}` 32px, padding `0 0 0 24px`, 54px tall.

**`button-light`** — hero "Buy tickets": `#f5f5f5`, label olympicSans 14px/700/20px `#020202`, padding `0 24px`, 40px tall, 32px radius.

**`button-grey`** — "View All": `#e5e5e5`, label 16px/700/24px `#232325`, padding `0 24px`, 40px.

**`button-dark`** — "Load More": `#232325` fill, white 16px/700 label, padding `0 24px`, 40px. On dark modules a `#37373a` variant (14px/700, 12px padding) is used.

**`menu-toggle`** — the 120×64px Olympic-blue block at the right of the main nav; hover `#00507c`.

### Chips
**`sign-in-pill`** — `#cce4f6`, 24px radius, 104×32, padding `4px 16px`, label "Olympic Sans" 14px/500/22px with a user icon.
**`language-select`** — white, 24px radius, `0 16px`, 32px, `#5a5a5a` 14px label with chevron.

### Cards
**`card-story`** — `#f5f5f5`, 12px radius, image on top (12px top corners), read-time badge on the image ("6 min read"), a **`tag`** (`#e5e5e5`, 8px radius, 12px/700/24px, `0 8px`) and a bold title below.

### Navigation
**`utility-bar`** — `#f5f5f5`, 64px, padding `8px 24px 8px 40px`, 14px links `#454548` → hover `#0d0d10`.
**`main-nav-link`** — "Olympic Sans" 20px/400/32px `#0d0d10`, 64px tall.

### Hero
**`hero`** — black, 720px, olympicHeadlineRegular 56px/70px white headline, light pill CTA, pause button and progress dots.

### News page (`/en/news`)
- No `<h1>`; "Top stories" h2 in olympicHeadlineRegular 40px/700 (30px line-height), 32px/400/26px at 390px.
- The same story cards (`#f5f5f5`, 12px, 596×422) form the grid; 8px is the most frequent radius (tags/tiles).
- A dark `#232325` band covers a large area (3,753 area units) — video/feature modules — with white text.
- "Load More" `button-dark` closes the list.
- 16px is the dominant size (3,965 chars) and 700 the dominant weight.

### Footer
**`footer`** — black, 667px tall; column headings olympicSans 18px/28px white, links 16px/26px `#b4b4b4`.

## Design System Architecture

**Brand system (official).** The IOC's 2022 identity is a documented design system: "three custom-made typefaces, a series of graphic devices and illustrations, and guidelines on everything from the usage of colours to photography to grid systems" ([IOC brand page](https://www.olympics.com/ioc/olympic-brand)). It was "created by Canadian agency Hulse & Durrell, in collaboration with the IOC" and Olympics.com was "undergoing a complete brand overhaul to align with the evolved identity" ([IOC News, 28 Sep 2022](https://www.olympics.com/ioc/news/evolving-the-look-of-the-olympic-brand)). The brand page links an "Olympic Brand Book"; no public token package or component library for the website was found.

**Token architecture (from the site's `:root`).**
- Primitive colour ramps, authored in `oklch()`: `--grey-40`, `--grey-50` … `--grey-900`; `--blue-50` … `--blue-900`; `--white`, `--black` with alpha variants `--black-15`, `--black-30`, `--white-15`, `--white-30`.
- Brand tokens: `--brand-blue`, `--brand-red`, `--brand-red-dark`, `--brand-yellow`, `--brand-green`.
- Semantic category tokens: `--bg-athletes`, `--bg-disciplines`, `--bg-events`, `--bg-medals`, `--bg-teams` — each content type mapped to a ring colour.
- Medal tokens: `--gold`, `--silver`, `--bronze`, `--text-gold`, `--text-silver`, `--text-bronze`.
- Gradients: `--gradient-black-blue`, `--gradient-black-red` (radial).
- Shape/space: `--Corner-radius-1…8`, `--Corner-radius-999`, `--Paddings-1…25`, `--carousel-gap`, `--grid-width`, `--card-large-width`, `--card-medium-width`, header height variables (`--header-main-nav-height: 6.4`).

**Theming.** No light/dark switch observed; dark bands (hero, footer, video modules) are local surface swaps.

**Type & spacing.** Headline / Sans (Serif declared) per the brand; 20px base; rem-based spacing and radius tokens.

**Component inventory (observed):** utility bar, main nav with menu block, hero carousel, story bubbles, section header with View All pill, story cards with tags, Games cards, pill buttons (blue, light, grey, dark), sign-in and language chips, footer.

**Accessibility.** No published contrast or focus rules were found for the website.

**Delivery.** No npm package or public Figma kit found.

## Do's and Don'ts

### Do
- Keep the canvas white and the cards `#f5f5f5` with 12px radius.
- Use olympicHeadlineRegular 700 only for short headlines (hero 56px, sections 40px, cards 28px).
- Use olympicSans for everything else — 18–20px for reading text.
- Reserve `#0078d0` for the primary pill and menu block; hover to `#00507c`.
- Use ring colours (`#ee212e`, `#ffb13c`, `#01a54a`, `#0078d0`) as solid category fills.
- Make buttons 40px tall pills with 32px radius and `0 24px` padding.

### Don't
- Don't add shadows.
- Don't set long paragraphs in the headline face.
- Don't tint the canvas; the page is pure white.
- Don't use rectangular buttons (only the menu block is square).

## Responsive Behavior

### Breakpoints

| Viewport | Measured change |
|---|---|
| 1280px | Hero headline 56px/70px; section title 40px/30px; utility bar + main nav (64px each) |
| 390px | Hero headline 32px/40px; section title 32px/26px (weight 400 on news); nav reduces to Sign In + menu toggle (80px wide), 65px tall, white |

### Touch Targets
- Pills 40px tall; chips 32px; menu toggle 64px; nav links 64px.

### Collapsing Strategy
- The utility bar and text nav are replaced on mobile by the Sign In control and the blue menu block.
- Mobile most-used size: 16px (1,288 chars on home), then 32px headlines (416) and 12px meta (402).
- Carousels use `--card-mobile-width: 25.6rem` per card on mobile.

### Image Behavior
Photography is full-bleed in the hero and edge-to-edge inside cards; headlines over images are white on the black band.

## Iteration Guide

1. White `{colors.canvas}`; cards `{colors.surface}` + `{rounded.card}`.
2. Headlines: `{typography.hero-headline}` / `{typography.section-title}` / `{typography.card-headline}`.
3. Body: `{typography.body-lg}` in `{colors.ink-body}`; labels in `{typography.button}`.
4. Buttons: 40px pills, `{rounded.pill}`; blue for primary only.
5. Category colour from the ring set; never more than one per component.
6. Check mobile: hero 32px, section 32px.
