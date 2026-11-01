---
version: alpha
name: Axios
category: "News & Publishing"
description: "Axios is a white #ffffff / #f5f5f5 news site with #333335 ink: NB International Pro 400 sans headlines (40px/48px story heds, 26px hero, 48px article h1) over Atiza 18px/27px serif body with bold 600 'Why it matters:' lead-ins, a #1c3b7a navy top bar and footer, #104ac2 blue pill buttons that hover to #0b3997, 100px-radius pastel topic chips (#e1edfb, #e3f5fa, #edf6f2, #faf7f2) and 4px-radius #f5f5f5 tags."

colors:
  primary: "#104ac2"
  primary-hover: "#0b3997"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  surface-secondary: "#f5f5f5"
  surface-tertiary: "#f5f5fc"
  surface-selected: "#e9ecf8"
  nav: "#1c3b7a"
  on-nav: "#ffffff"
  ink: "#333335"
  ink-secondary: "#656568"
  border: "#eeeeee"
  border-secondary: "#bababe"
  chip-blue: "#e1edfb"
  chip-blue-hover: "#d2e1f8"
  chip-teal: "#e3f5fa"
  chip-teal-hover: "#ceebf5"
  chip-green: "#edf6f2"
  chip-green-hover: "#dbeee8"
  chip-mustard: "#faf7f2"
  chip-mustard-hover: "#f6edd6"
  error: "#b11604"
  success: "#326c5c"
  visited: "#681da8"

typography:
  headline-article:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 57.6px
  headline-article-mobile:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  headline-story:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  footer-tagline:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  headline-hero:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 31.2px
  label-light:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 22px
    fontWeight: 200
    lineHeight: 26.4px
  headline-card:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
  body:
    fontFamily: "Atiza, serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  body-lead-in:
    fontFamily: "Atiza, serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
  wordmark-h1:
    fontFamily: "Atiza, serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-lg:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
  button-lg-light:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 18px
  chip:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 16px
  link-pill:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav-top:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.7px
  section-label:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  tab:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
    letterSpacing: 0.6px
  tag:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
  caption:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  meta:
    fontFamily: "\"NB International Pro\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px

rounded:
  xs: 2px
  sm: 4px
  md: 6px
  tab: 24px
  chip: 100px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 24px
  xxl: 40px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 9px 16px
    height: 40px
    border: "1px solid #104ac2"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-lg-light}"
    rounded: "{rounded.pill}"
    padding: 9px 16px
    height: 40px
    border: "1px solid #104ac2"
  button-secondary-hover:
    backgroundColor: "{colors.surface-tertiary}"
    textColor: "{colors.primary-hover}"
    border: "1px solid #0b3997"
  chip-topic:
    backgroundColor: "{colors.chip-blue}"
    textColor: "{colors.ink}"
    typography: "{typography.chip}"
    rounded: "{rounded.chip}"
    padding: 4px 16px 4px 8px
    height: 40px
  chip-topic-hover:
    backgroundColor: "{colors.chip-blue-hover}"
  tab-active:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.tab}"
    rounded: "{rounded.tab}"
    padding: 12px 0px
    height: 42px
  tab-inactive:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    typography: "{typography.tab}"
    rounded: "{rounded.tab}"
    padding: 12px 0px
    height: 42px
  tag:
    backgroundColor: "{colors.surface-secondary}"
    textColor: "{colors.ink}"
    typography: "{typography.tag}"
    rounded: "{rounded.sm}"
    padding: 0px 8px
    height: 16px
  tag-hover:
    backgroundColor: "{colors.surface-selected}"
  link-go-deeper:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    typography: "{typography.link-pill}"
    rounded: "{rounded.chip}"
    padding: 4px
    height: 40px
    border: "1px solid #104ac2"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.headline-card}"
  nav-top-bar:
    backgroundColor: "{colors.nav}"
    textColor: "{colors.on-nav}"
    typography: "{typography.nav-top}"
  nav-top-link:
    textColor: "{colors.on-nav}"
    typography: "{typography.nav-top}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 36px
  card-story:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    border: "1px solid #eeeeee"
  footer:
    backgroundColor: "{colors.nav}"
    textColor: "{colors.on-nav}"
    typography: "{typography.meta}"
    padding: 40px 0px
  footer-button:
    backgroundColor: transparent
    textColor: "{colors.on-nav}"
    typography: "{typography.chip}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    border: "1px solid #bababe"
---

## Overview

Axios looks like a briefing, not a newspaper. The capture opens (below a grey ad slot) with a slim navy `{colors.nav}` (#1c3b7a) utility bar — a small white "A" mark square on the left, white uppercase tracked links (NEWSLETTERS, AXIOS LOCAL, AXIOS PRO, AXIOS LIVE, THE AXIOS SHOW) and LOGIN on the right. Under it, a white masthead centres the **AXIOS** wordmark between two blue outlined pill buttons, "All topics ⌄" and "Search ⌕".

A row of pastel **topic chips** (Politics & Policy, Business, Technology, Health, Energy & Climate) follows, each a 40px-tall rounded pill in a soft tint with a tiny illustrative icon. The hero pairs a light-weight "Catch up quick" label and a centred 26px sans headline with a large photo; below, four story cards with photos and 18px headlines are separated by thin vertical rules.

The stream itself — under "TOP STORIES / MOST POPULAR" pill tabs — is one bordered column: avatar + author + "13 hours ago - World" meta, a big **NB International Pro** headline (`{typography.headline-story}` 40px/48px), a photo with a 12px grey caption, then **Atiza** serif body text in the Smart Brevity format: a one-sentence lede, bullets, and a bold "**Why it matters:**" lead-in, closed by a full-width blue-outlined "Go deeper (1 min. read) →" pill.

The visual signature is an inversion of newspaper convention: sans headlines over serif body; blue pills for every action; pastel chips for topics; navy bars top and bottom.

**Key Characteristics:**
- Sans (NB International Pro) for headlines, nav, buttons and meta; serif (Atiza) for body text and the h1 wordmark text.
- All headline weights are 400 — large but never bold; light 200/300 weights for labels and chips.
- `{colors.primary}` (#104ac2) is the single interactive color: filled and outlined pill buttons, active tab, links; hover darkens to #0b3997.
- Pills everywhere: 9999px buttons, 100px chips and "Go deeper", 24px tabs.
- Ink is a soft black #333335; secondary text #656568.
- Navy #1c3b7a frames the page (top bar + footer).
- Content format "Smart Brevity®" — "Why it matters:" lead-ins in Atiza 600.

## Colors

> Source: measured on https://www.axios.com/ and an article page, desktop 1280px; token names are the site's own CSS custom properties.

### Brand & Interactive
- **Axios Blue** (`{colors.primary}` — #104ac2): `--color-accent-blue-core` / `--border-interactive-primary` / `--text-interactive-secondary`. "View more stories" fill, outlined button text and border, active tab, "Go deeper" pill.
- **Blue Hover** (`{colors.primary-hover}` — #0b3997): `--bg-interactive-primary-hover`, `--color-accent-blue-shade`; measured as the hover text/border of the outlined "Search" / "All topics" buttons.
- **On Primary** (`{colors.on-primary}` — #ffffff).

### Surface
- **Canvas** (`{colors.canvas}` — #ffffff): `--bg-primary`. The page body and masthead.
- **Surface Secondary** (`{colors.surface-secondary}` — #f5f5f5): `--bg-secondary`, `--color-neutral-75`. The largest measured background area — ad slots and tags.
- **Surface Tertiary** (`{colors.surface-tertiary}` — #f5f5fc): `--bg-tertiary`. Hover fill of outlined buttons.
- **Surface Selected** (`{colors.surface-selected}` — #e9ecf8): `--bg-interactive-secondary-selected`. Hover fill of tags.
- **Nav Navy** (`{colors.nav}` — #1c3b7a): `--bg-nav-primary`, `--bg-brand-blue-tertiary`. Top utility bar and footer.

### Topic chips (rest → hover, measured)
- Blue `{colors.chip-blue}` #e1edfb → #d2e1f8 (`--bg-brand-blue-primary` / `-hover`) — Politics & Policy, Technology
- Teal `{colors.chip-teal}` #e3f5fa → #ceebf5 (`--bg-brand-dark-teal-primary` / `-hover`) — Energy & Climate
- Green `{colors.chip-green}` #edf6f2 → #dbeee8 (`--bg-success-secondary` / `--bg-brand-green-primary-hover`) — Business
- Mustard `{colors.chip-mustard}` #faf7f2 → #f6edd6 (`--bg-brand-mustard-primary` / `-hover`) — Health

### Text
- **Ink** (`{colors.ink}` — #333335): `--text-primary`, `--color-neutral-700`. Headlines and body.
- **Ink Secondary** (`{colors.ink-secondary}` — #656568): `--text-secondary`. "Catch up quick", timestamps, captions, "THE LATEST".

### Lines
- **Border** (`{colors.border}` — #eeeeee): `--color-neutral-100`. 1px border on story cards.
- **Border Secondary** (`{colors.border-secondary}` — #bababe): `--border-secondary`. Footer "Explore Axios Newsletters" outline.

### Semantic (site tokens)
- **Error** (`{colors.error}` — #b11604): `--text-error-primary`, `--bg-rubric-alert`.
- **Success** (`{colors.success}` — #326c5c): `--bg-success-primary`.
- **Visited** (`{colors.visited}` — #681da8): `--border-read` / `--color-purple-read`.

## Typography

### Font Family
- **NB International Pro** (200, 300, 400 served) — stack `"NB International Pro", sans-serif`. ≈1,360 characters on the homepage.
- **Atiza** (400, 600 served) — stack `Atiza, serif`. ≈1,140 characters; the body default on `<body>`.
Root variables also name `--font-davos: Domaine Display Narrow,serif`, `--font-martin: Martin,serif` and `--font-mono: Consolas,monospace` for special products; none rendered on the measured pages.

### Hierarchy

| Token | Family | Size / Line | Weight | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.headline-article}` | NB International Pro | 48px / 57.6px | 400 | normal | Article h1 |
| `{typography.headline-article-mobile}` | NB International Pro | 32px / 38.4px | 400 | normal | Article h1 at 390px |
| `{typography.headline-story}` | NB International Pro | 40px / 48px | 400 | normal | Stream story headlines |
| `{typography.footer-tagline}` | NB International Pro | 32px / 38.4px | 400 | normal | "Smarter, faster on what matters." |
| `{typography.headline-hero}` | NB International Pro | 26px / 31.2px | 400 | normal | Hero headline |
| `{typography.label-light}` | NB International Pro | 22px / 26.4px | 200 | normal | "Catch up quick" |
| `{typography.headline-card}` | NB International Pro | 18px / 21.6px | 400 | normal | Four-up card headlines |
| `{typography.body}` | Atiza | 18px / 27px | 400 | normal | Story body |
| `{typography.body-lead-in}` | Atiza | 18px / 27px | 600 | normal | "Why it matters:" |
| `{typography.button-lg}` | NB International Pro | 18px / 18px | 400 | normal | Filled pill button |
| `{typography.button-lg-light}` | NB International Pro | 18px / 18px | 300 | normal | Outlined pill button |
| `{typography.wordmark-h1}` | Atiza | 16px / 24px | 400 | normal | The page h1 (wordmark text "Axios") |
| `{typography.chip}` | NB International Pro | 16px / 16px | 300 | normal | Topic chips |
| `{typography.link-pill}` | NB International Pro | 16px / 24px | 400 | normal | "Go deeper" |
| `{typography.nav-top}` | NB International Pro | 14px / 20px | 400 | 0.7px | Navy-bar links (uppercase) |
| `{typography.section-label}` | NB International Pro | 14px / 16.8px | 400 | normal | "THE LATEST" (uppercase) |
| `{typography.tab}` | NB International Pro | 12px / 15.6px | 400 | 0.6px | TOP STORIES / MOST POPULAR (uppercase) |
| `{typography.tag}` | NB International Pro | 12px / 15.6px | 400 | normal | "World" tag |
| `{typography.caption}` | NB International Pro | 12px / 18px | 400 | normal | Photo captions |
| `{typography.meta}` | NB International Pro | 12px / 12px | 400 | normal | Author name, time, footer links |

### Principles
- **Sans headlines, serif body.** The reverse of most newspapers — it reads as a modern briefing.
- **Weight 400 for headlines; 200/300 for soft labels and chips.** Only the Atiza lead-in goes heavy (600).
- **Uppercase is always tracked:** 14px → 0.7px, 12px → 0.6px (5%).
- **Site type scale (root variables):** `--text-caption .75rem`, `--text-base 1rem`, `--text-lg 1.125rem`, `--text-button 1.125rem`, `--text-2xl 1.375rem`, `--text-3xl 1.625rem`, `--text-h5 2rem`, `--text-h4 2.5rem`, `--text-h3 3rem`, `--text-h2 3.5rem`, `--text-h1 6.25rem` — the measured 12/16/18/22/26/32/40/48px sizes all sit on this scale.

### Note on Font Substitutes
NB International Pro and Atiza are commercial typefaces; the site's only fallbacks are generic `sans-serif` and `serif`. No official substitute is named; none is prescribed here.

## Layout

### Spacing System
- **Root variable:** `--spacing: .25rem` (4px base unit, Tailwind-v4 style), with named extras `--spacing-15 3.75rem`, `--spacing-17 4.25rem`, `--spacing-22 5.5rem`.
- **Measured gaps:** 8px, 4px, 20px, 40px, 28px, 12px. **Paddings:** 8px, 4px, 12px, 24px, 16px, 20px, 40px, 60px.
- **Tokens:** `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 12px · `{spacing.md}` 16px · `{spacing.lg}` 20px · `{spacing.xl}` 24px · `{spacing.xxl}` 40px.

### Grid & Container
- Container variables: `--container-xs 20rem` … `--container-3xl 48rem`, `--container-4xl 56rem`, `--container-6xl 72rem` (1152px).
- Homepage: hero split (text left, photo right), then a four-up card row with vertical rules; the stream is a 720px bordered column with a 638px inner text width beside a right ad rail.
- Article: 733px headline/body column.

### Whitespace Philosophy
Open and airy: generous 40px gaps between modules, centred hero text, and a single reading column for the stream.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Everything |
| Outline | 1px #eeeeee border, 4px radius | Story cards / stream container |

No box-shadows render on the measured pages (`--tw-shadow` variables are present but resolve to `0 0 #0000`). Separation comes from hairline borders, pastel fills and the navy frame.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | Navy-bar links |
| `{rounded.sm}` | 4px | Tags, story cards (`--radius-sm .25rem`) |
| `{rounded.md}` | 6px | Article-page elements (`--radius-md .375rem`) |
| `{rounded.tab}` | 24px | TOP STORIES / MOST POPULAR tabs |
| `{rounded.chip}` | 100px | Topic chips, "Go deeper" |
| `{rounded.pill}` | 9999px | Filled and outlined buttons (computed 3.35544e+07px) |

### Iconography & imagery
Topic chips carry small full-color illustrative icons (capitol dome, bar chart, globe, first-aid kit, plant). Photography is straight news photography in rectangles; author avatars are circles.

## Components

### Buttons

**`button-primary`** — "View more stories".
- Background #104ac2, text #ffffff, NB International Pro 18px/18px 400, padding 9px 16px, height 40px, 1px solid #104ac2, radius 9999px.
- **Hover** (`button-primary-hover`): #0b3997 (`--bg-interactive-primary-hover`).

**`button-secondary`** — "All topics", "Search".
- Background #ffffff, text and 1px border #104ac2, NB 18px/18px 300, padding 9px 16px, height 40px, pill.
- **Hover** (measured): background #f5f5fc, text and border #0b3997.

### Chips & Tabs

**`chip-topic`** — 40px tall, radius 100px, padding 4px 16px 4px 8px, NB 16px/16px 300 #333335, tint background per topic; **hover** steps to the darker tint (e.g. #e1edfb → #d2e1f8).

**`tab-active` / `tab-inactive`** — 42px tall, radius 24px, padding 12px 0px, NB 12px/15.6px 0.6px uppercase; active is filled #104ac2 with white text, inactive is #104ac2 text on the light track.

**`tag`** — "World": #f5f5f5, NB 12px/15.6px, padding 0px 8px, height 16px, radius 4px; **hover** #e9ecf8.

### Links
- **`link-go-deeper`** — full-width outlined pill: transparent, 1px #104ac2, radius 100px, padding 4px, height 40px, NB 16px/24px #104ac2, trailing arrow.
- **`link`** — headline links in #333335.

### Navigation
- **`nav-top-bar`** — #1c3b7a strip; **`nav-top-link`**: white NB 14px/20px 0.7px uppercase, padding 8px 12px, height 36px, radius 2px (`--bg-nav-hover: #104ac2`).
- Masthead: 157px header total; centred wordmark between the two outlined pills.

### Cards
**`card-story`** — white with 1px #eeeeee border and 4px radius; inside: avatar + 12px meta, 40px headline, photo, 12px/18px caption #656568, Atiza body.

### Story anatomy (Smart Brevity, as rendered)
The stream story card observed on the homepage and article page is built in this order:
1. Author row — circular avatar, author name in `{typography.meta}`, then "13 hours ago - World" in #656568 with the topic as a `tag`.
2. Headline — `{typography.headline-story}` (40px/48px) on the homepage; `{typography.headline-article}` (48px/57.6px) on the article page.
3. Photo — full column width, followed by a `{typography.caption}` credit line in #656568.
4. Lede — one or two sentences in `{typography.body}`.
5. Bullets — short bulleted facts in the same Atiza body style.
6. Lead-ins — "**Why it matters:**" in `{typography.body-lead-in}` followed by regular Atiza text.
7. Exit — the full-width `link-go-deeper` pill with the reading time ("Go deeper (1 min. read) →").

### Footer
**`footer`** — #1c3b7a, padding 40px 0px; 32px/38.4px white tagline "Smarter, faster on what matters.", **`footer-button`** "Explore Axios Newsletters" (transparent, 1px #bababe, pill, padding 8px 16px, NB 16px/16px), 12px white links (About Axios, Advertise with us, Careers…).

## Design System Architecture

Axios publishes **no public design system documentation, token package or brand portal**; searches for an official design system, brand guidelines/media kit and an engineering token repository returned only third-party reconstructions (not used). Its editorial format is officially documented on [axios.com/about](https://www.axios.com/about) as "Smart Brevity®" — "Every piece of content we produce… tells our audience why it matters right away". The structure below is the de-facto system measured from the CSS custom properties on https://www.axios.com/.

### Token architecture (measured)
Three tiers are visible in `:root`:
1. **Primitives** — scaled palettes: `--color-accent-blue-75 #f5f5fc` … `--color-accent-blue-800 #104ac2`, `--color-accent-blue-900 #0b3997`, plus named steps `-core`, `-shade`, `-tint`, `-light`, `-medium`; `--color-neutral-75 #f5f5f5` … `--color-neutral-700 #333335`, `--color-neutral-900 #000`; brand families `--color-mustard-*`, `--color-dark-teal-*`, `--color-deep-blue-*`, `--color-green-*`, `--color-red-*`.
2. **Semantic** — role tokens by property: `--bg-primary #fff`, `--bg-secondary #f5f5f5`, `--bg-tertiary #f5f5fc`, `--text-primary #333335`, `--text-secondary #656568`, `--border-secondary #bababe`, `--text-error-primary #b11604`, `--bg-success-secondary #edf6f2`, `--bg-warning-secondary #f6edd6`.
3. **Component/state** — `--bg-interactive-primary-hover #0b3997`, `--border-interactive-primary-focus #333335`, `--bg-interactive-secondary-selected #e9ecf8`, `--bg-nav-primary #1c3b7a`, `--bg-nav-hover #104ac2`, `--bg-rubric-pro #624000`, `--bg-rubric-sponsored #e3f5fa`, `--border-read #681da8`.
Naming convention: `--{property}-{role}-{variant}[-{state}]` for semantics, `--color-{family}-{step}` for primitives. Tailwind v4 variables (`--tw-*`, `--color-gray-300: oklch(…)`, `--spacing: .25rem`, `--ease-in`) sit alongside.

### Theming
Brand sub-themes are expressed through token families (blue, dark-teal, green, mustard) used for topic chips and rubrics (`--bg-rubric-pro`, `--bg-rubric-executive-membership`). No dark mode was observed.

### Type & spacing systems
4px base (`--spacing .25rem`); type scale `--text-caption` .75rem through `--text-h1` 6.25rem plus `--font-size-*` aliases; weights `--font-weight-book 300`, `--font-weight-regular 400`, `--font-weight-medium 500`, `--font-weight-bold 600`, `--font-weight-extrabold 700`; radii `--radius-sm .25rem`, `--radius-md .375rem`, `--radius-lg .5rem`, `--radius-2xl 1rem`.

### Component model
Observable components: navy utility bar, masthead with outlined pills, topic chips, hero, story cards, pill tabs, stream story card, tags, "Go deeper" link, filled/outlined pill buttons, footer. No official inventory is published.

### Accessibility
No published standard was found. Focus tokens exist (`--border-interactive-primary-focus: #333335`); a "Skip to main content" link is present; body ink #333335 on #ffffff is high-contrast.

### Delivery
Not published. Implementation evidence: Tailwind v4 custom properties on `:root`; fonts self-hosted.

## Do's and Don'ts

### Do
- Set headlines in NB International Pro 400 and body in Atiza 18px/27px.
- Open story bodies with Smart Brevity lead-ins in Atiza 600 ("Why it matters:").
- Use #104ac2 for every interactive element and #0b3997 for its hover.
- Make every button a pill; chips 100px; tabs 24px; tags 4px.
- Tint topic chips from the brand families and darken one step on hover.
- Frame the page with the #1c3b7a navy bar and footer.
- Track uppercase labels at 5% (0.6–0.7px).

### Don't
- Don't use serif headlines or sans body — it breaks the inversion.
- Don't bold sans headlines.
- Don't use pure black text; ink is #333335.
- Don't add shadows; use 1px #eeeeee borders.
- Don't introduce square-cornered buttons.
- Don't invent new accent colors outside the token families.

## Responsive Behavior

### Measured at 390px
- Font sizes in use: 18px, 12px, 26px, 16px — the 40px story headline steps down to 26px.
- Article h1: 48px/57.6px → 32px/38.4px.
- Body stays Atiza 18px.

### Breakpoints
Exact breakpoints were not measured. Container tokens (20rem–72rem) define the max-widths.

### Collapsing Strategy
At 390px the measured article h1 is 350px wide (a single column with 20px side gutters); multi-column homepage layouts were not separately measured at mobile width.

### Touch Targets
Buttons, chips and "Go deeper" are 40px tall; tabs 42px.

## Iteration Guide

1. White canvas, #333335 ink, #f5f5f5 secondary surface, navy frame.
2. Headlines: NB International Pro 400 (40/48 stream, 26/31.2 hero, 18/21.6 cards).
3. Body: Atiza 18/27 with 600 lead-ins.
4. Actions: #104ac2 pills, hover #0b3997.
5. Topics: pastel 100px chips with darker hover tint.
6. Use the site's own token names (`--bg-*`, `--text-*`, `--border-*`, `--color-*-{step}`) when extending.
7. Re-run `node web/scripts/verify-designs.mjs --slug=axios`.
