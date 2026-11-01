---
version: alpha
name: Oura
category: "Healthcare & Wellness"
description: 'Oura''s smart-ring storefront — a warm sandstone canvas #f7f1e8 with sandstone-500 #4a4741 ink, condensed "Editorial New" serif headlines (80px/300 with -4px tracking, 68px/400) over AkkuratLL sans UI and body (16px/24px), a single Oura blue #2a72de fully rounded pill CTA (12px 24px, hover #2056a6), dark #4a4741 secondary pills, 12px-radius photo cards, #efe6db testimonial cards and a graphite #1c1b1a news band.'

colors:
  primary: "#2a72de"
  primary-hover: "#2056a6"
  on-primary: "#ffffff"
  canvas: "#f7f1e8"
  white: "#ffffff"
  ink: "#4a4741"
  ink-strong: "#000000"
  ink-muted: "#a8a5a0"
  pill-dark: "#4a4741"
  pill-dark-hover: "#1c1b1a"
  surface-card: "#efe6db"
  skin-tone: "#e6ded3"
  graphite: "#1c1b1a"
  oura-black: "#151619"
  chip-glass: "#58586466"
  hairline: "#d3d1ce"
  helsinki-blue: "#2f4a73"
  enso-blue: "#a2d3e8"
  living-coral: "#fc6558"

typography:
  display-hero:
    fontFamily: "\"Editorial New\", serif"
    fontSize: 80px
    fontWeight: 300
    lineHeight: 88px
    letterSpacing: -4px
  display-section:
    fontFamily: "\"Editorial New\", serif"
    fontSize: 68px
    fontWeight: 400
    lineHeight: 74.8px
    letterSpacing: -2.04px
  display-section-mobile:
    fontFamily: "\"Editorial New\", serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 61.6px
    letterSpacing: -2.04px
  display-hero-mobile:
    fontFamily: "\"Editorial New\", serif"
    fontSize: 48px
    fontWeight: 300
    lineHeight: 52.8px
    letterSpacing: -2.4px
  heading-serif:
    fontFamily: "\"Editorial New\", serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 50px
    letterSpacing: -1px
  quote:
    fontFamily: "\"Editorial New\", serif"
    fontSize: 24px
    fontWeight: 100
    lineHeight: 30px
  quote-mobile:
    fontFamily: "\"Editorial New\", serif"
    fontSize: 18px
    fontWeight: 100
    lineHeight: 22.5px
  heading-card:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 40px
  heading-article:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 50px
    letterSpacing: -2px
  subline:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 35.2px
    letterSpacing: -0.8px
  lead:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: -1.2px
  news-title:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
  attribution:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  eyebrow-lg:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
    letterSpacing: 0.9px
    textTransform: uppercase
  body:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body-sm:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  banner:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
  eyebrow:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  tag:
    fontFamily: "AkkuratLL, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 18px
    textTransform: uppercase

rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 24px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  ml: 20px
  lg: 24px
  xl: 32px
  xxl: 40px
  huge: 64px
  section: 80px
  section-lg: 128px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-dark:
    backgroundColor: "{colors.pill-dark}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 48px
  button-dark-hover:
    backgroundColor: "{colors.pill-dark-hover}"
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 48px
  button-outline-on-dark:
    backgroundColor: transparent
    textColor: "{colors.white}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    border: "1px solid #ffffff"
    padding: 8px 16px
    height: 42px
  hero-panel:
    rounded: 0px 0px 12px 12px
  card-category:
    textColor: "{colors.canvas}"
    typography: "{typography.heading-card}"
    rounded: "{rounded.lg}"
  chip-category:
    backgroundColor: "{colors.chip-glass}"
    textColor: "{colors.canvas}"
    typography: "{typography.eyebrow}"
    rounded: "{rounded.pill}"
  card-testimonial:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.quote}"
    rounded: "{rounded.md}"
    padding: 40px
  card-news:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.news-title}"
    rounded: "{rounded.md}"
    padding: 24px
  tag:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.tag}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
  text-input-newsletter:
    backgroundColor: "{colors.pill-dark}"
    textColor: "{colors.white}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 8px 48px 8px 20px
    height: 40px
    letterSpacing: 0.4px
  nav:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 90px
    padding: 8px 0px
  announcement-bar:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.banner}"
  news-band:
    backgroundColor: "{colors.graphite}"
    textColor: "{colors.canvas}"
    padding: 64px 0px
  footer:
    textColor: "{colors.ink-muted}"
    typography: "{typography.eyebrow}"
---

## Overview

Oura sells a health-tracking ring, and its site behaves like a quiet luxury-goods catalogue. The page is a warm sandstone canvas (`{colors.canvas}` — `#f7f1e8`, the site's own `--color-sandstone-200`) carrying sandstone-500 brown-grey text (`{colors.ink}` — `#4a4741`). Headlines are set in **Editorial New**, a narrow, high-contrast serif, at very large sizes with heavy negative tracking — the hero h1 "Wear your best life" is 80px, weight 300, tracked −4px (−0.05em). Everything functional — nav, body, buttons, labels — is the grotesque **AkkuratLL**.

The hero is a full-bleed photograph (a ring on volcanic rock with a ladybird) inside a panel inset 24px from the edges with only its bottom corners rounded (`0px 0px 12px 12px`). Below, the page alternates centered serif statements with photographic carousels, an app-screens composite, testimonial cards in a slightly deeper sandstone (`{colors.surface-card}` — `#efe6db`), and a graphite "In the news" band (`{colors.graphite}` — `#1c1b1a`) before a dark footer.

Color is restrained: one blue CTA (`{colors.primary}` — `#2a72de`, "Explore") per screen, dark sandstone pills (`#4a4741`) for secondary actions, and photography supplying all other color. The microcopy is short and declarative: "Understand your body. Own your health.", "86% of Oura Members see their health improve".

**Key Characteristics:**
- Editorial New serif for statements (300/400, tracked −0.03em to −0.05em); AkkuratLL for everything else.
- Sandstone canvas `#f7f1e8` with `#4a4741` ink — never stark white with black.
- Fully rounded pills, 48px tall, `12px 24px` padding: blue `#2a72de` (hover `#2056a6`) for the main action, `#4a4741` (hover `#1c1b1a`) for secondary.
- Photography-led: warm, close crops of hands, skin and sleep; product shots in natural settings.
- 12px-radius photo cards with frosted category chips (`#58586466`) and light AkkuratLL 40px/300 titles in cream.
- Graphite `#1c1b1a` editorial band with cream 8px-radius news cards.
- A Tailwind token layer with brand-named scales (`sandstone`, `mustard`, `olive`, `slate`, `brown`).

## Colors

> Source pages measured: home (`/`). Token names in parentheses are the site's own CSS custom properties on `:root`.

### Brand & Action
- **Oura Blue** (`{colors.primary}` — `#2a72de`, `--color-blue-100`): "Explore" CTA.
- **Blue Hover** (`{colors.primary-hover}` — `#2056a6`, `--color-blue-200`): measured hover (`rgb(42, 114, 222)` → `rgb(32, 86, 166)`).
- **On Primary** (`{colors.on-primary}` — `#ffffff`).
- **Pill Dark** (`{colors.pill-dark}` — `#4a4741`, `--color-sandstone-500`): "Why Oura", "How It Works", "Explore Membership" pills; also the newsletter input fill.
- **Pill Dark Hover** (`{colors.pill-dark-hover}` — `#1c1b1a`, `--color-gray-600`): measured hover of the dark pills.

### Surface
- **Canvas** (`{colors.canvas}` — `#f7f1e8`, `--color-sandstone-200` / `--color-cream-50`): page background (largest area by far), announcement bar, light pills, news cards, tags.
- **White** (`{colors.white}` — `#ffffff`): the computed `<body>` background beneath the sandstone sections; white text on blue.
- **Surface Card** (`{colors.surface-card}` — `#efe6db`, `--color-sandstone-400`): testimonial cards.
- **Skin Tone** (`{colors.skin-tone}` — `#e6ded3`, `--color-sandstone-450`): matches "Skin Tone #E6DED3" in the [2020 brand guidelines](https://static.ouraring.com/pdfs/Oura_BrandGuidelines_v1.pdf).
- **Graphite** (`{colors.graphite}` — `#1c1b1a`, `--color-gray-600`): "In the news" band and second-largest background.
- **Oura Black** (`{colors.oura-black}` — `#151619`, `--color-backdrop-600`): matches "Oura Black #151619" in the guidelines.
- **Chip Glass** (`{colors.chip-glass}` — `#58586466`): translucent category chips over photos.
- **Hairline** (`{colors.hairline}` — `#d3d1ce`, `--color-gray-300`): divider above the carousel arrows.

### Text
- **Ink** (`{colors.ink}` — `#4a4741`): headlines, lead paragraphs, nav, banner (`text-sandstone-500`).
- **Ink Strong** (`{colors.ink-strong}` — `#000000`): testimonial quotes, news-card titles.
- **Ink Muted** (`{colors.ink-muted}` — `#a8a5a0`, `--color-gray-350`): footer text, newsletter heading on dark.
- Cream `#f7f1e8` is the most-used text color overall because of the dark pills, photo cards and news band.

### Guideline colors not seen on the live homepage
The [2020 API brand guidelines](https://static.ouraring.com/pdfs/Oura_BrandGuidelines_v1.pdf) define **Helsinki Blue** (`{colors.helsinki-blue}` — `#2f4a73`, "inspired by sea blue from the Finnish flag", the default logo color), **Ensō Blue** (`{colors.enso-blue}` — `#a2d3e8`) and **Living Coral** (`{colors.living-coral}` — `#fc6558`). None of them was measured on the current homepage, where the wordmark renders dark on sandstone; the live site wins, so treat these as document-level brand colors only.

### Semantic
`--color-red-600` `#d22c15`, `--color-green-600` `#55dc83` and `--color-red-100` `#f2d0cb` exist in the root variables, but their use was not observed, so they are not declared as tokens.

## Typography

### Font Families
- **Editorial New** — served as `"Editorial New", serif` (`--font-serif`). Loaded weights 200 and 300; computed weights 100, 300, 400. A narrow serif by Pangram Pangram Foundry, 8 weights with italics ([Pangram Pangram](https://pangrampangram.com/products/editorial-new)).
- **AkkuratLL** — served as `AkkuratLL, sans-serif` (`--font-sans`). Loaded weights 300 and 400; computed 300, 400, 700. Akkurat is a [Lineto](https://lineto.com/typefaces/akkurat) typeface.

### Hierarchy

| Token | Family | Size | Weight | Line Height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display-hero}` | Editorial New | 80px | 300 | 88px | -4px | "Wear your best life" |
| `{typography.display-section}` | Editorial New | 68px | 400 | 74.8px | -2.04px | Section statements |
| `{typography.display-section-mobile}` | Editorial New | 56px | 400 | 61.6px | -2.04px | Section statements at 390px |
| `{typography.display-hero-mobile}` | Editorial New | 48px | 300 | 52.8px | -2.4px | h1 at 390px |
| `{typography.heading-serif}` | Editorial New | 40px | 300 | 50px | -1px | Newsletter heading |
| `{typography.quote}` | Editorial New | 24px | 100 | 30px | normal | Testimonial quotes |
| `{typography.quote-mobile}` | Editorial New | 18px | 100 | 22.5px | normal | Quotes at 390px |
| `{typography.heading-card}` | AkkuratLL | 40px | 300 | 40px | normal | Photo-card titles |
| `{typography.heading-article}` | AkkuratLL | 40px | 400 | 50px | -2px | Featured article title |
| `{typography.subline}` | AkkuratLL | 32px | 400 | 35.2px | -0.8px | Hero subline |
| `{typography.lead}` | AkkuratLL | 24px | 400 | 30px | -1.2px | Section lead paragraphs |
| `{typography.news-title}` | AkkuratLL | 24px | 400 | 30px | normal | News card titles |
| `{typography.attribution}` | AkkuratLL | 20px | 700 | 30px | normal | Testimonial author |
| `{typography.eyebrow-lg}` | AkkuratLL | 18px | 700 | 27px | 0.9px | "IN THE NEWS" |
| `{typography.body}` | AkkuratLL | 16px | 400 | 24px | normal | Body, nav, secondary pills |
| `{typography.button}` | AkkuratLL | 16px | 700 | 24px | normal | Primary pill label |
| `{typography.body-sm}` | AkkuratLL | 14px | 400 | 21px | normal | Footnotes |
| `{typography.banner}` | AkkuratLL | 14px | 700 | 21px | normal | Announcement bar |
| `{typography.eyebrow}` | AkkuratLL | 12px | 400 | 18px | normal | Chips, footer text |
| `{typography.tag}` | AkkuratLL | 12px | 700 | 18px | normal | Uppercase tags ("HEART HEALTH") |

### Principles
- **Serif speaks, sans works.** Editorial New is for statements and quotes only; every control is AkkuratLL.
- **Light display weights.** The hero is 300 and quotes are 100 — the brand never uses a bold serif.
- **Tight, proportional tracking.** −0.05em on the hero (80 → −4px; 48 → −2.4px), −0.03em on section statements (68 → −2.04px), −0.05em on the 24px lead (−1.2px). The root variables define `--tracking-tight -.025em` and `--tracking-tighter -.05em`.
- **Named type scale.** Sizes come from `--text-title-xl 7.5rem` … `--text-heading-5xl 4.25rem` (68px), `--text-heading-xl 2.5rem` (40px), `--text-heading-lg 2rem`, `--text-body-sm .875rem`, `--text-eyebrow .75rem`.

### Note on Font Substitutes
Both faces are commercial (Editorial New from Pangram Pangram, Akkurat from Lineto). No official source names a substitute; the site's own fallbacks are generic `serif` and `sans-serif`.

## Layout

### Spacing System
- Tailwind base `--spacing .25rem` (4px). Measured paddings: `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 12px · `{spacing.md}` 16px · `{spacing.ml}` 20px · `{spacing.lg}` 24px (most frequent) · `{spacing.xl}` 32px · `{spacing.xxl}` 40px · `{spacing.huge}` 64px · `{spacing.section}` 80px · `{spacing.section-lg}` 128px.
- Gaps: 8px (most frequent), 16px, 24px, 48px.
- Testimonial cards: 40px padding. News cards: 24px. News band: 64px top/bottom.

### Grid & Container
- A named grid (`gridContainerV3`, `col-start-main`, `md:col-start-5`, `md:col-start-16`) centers statements in the middle columns and lets carousels bleed to the right edge.
- Hero panel: inset 24px from the viewport sides, 90svh tall (min 560px).
- Carousels show ~2.5 cards, with arrow buttons bottom-right under a 1px hairline.
- Testimonials: three equal cards. News: one large featured card left, three stacked cards right.
- Container widths from root variables: `--container-xl 36rem` … `--container-6xl 72rem`; breakpoints `--breakpoint-xl 1280px`, `--breakpoint-xxl 1440px`.

### Whitespace Philosophy
Generous: each serif statement sits alone with 1–2 lines of lead copy and a pill pair, with large vertical gaps before the next carousel. Density increases only in the footer.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Almost everything |
| Inset | `rgba(255, 255, 255, 0.06) 0px 1px 0px 0px inset` | Newsletter input on dark |
| Drop | `--drop-shadow-lg: 0 4px 4px #00000026` | Defined in root variables; placement not observed |
| Glass | translucent `#58586466` chip over photos | Category chips |

Depth comes from photography and from switching between sandstone and graphite bands, not from shadows.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | Small UI |
| `{rounded.sm}` | 6px | Tags ("FEATURED ARTICLE") |
| `{rounded.md}` | 8px | Testimonial and news cards |
| `{rounded.lg}` | 12px | Photo cards, newsletter input, hero panel bottom corners |
| `{rounded.xl}` | 24px | Larger panels |
| `{rounded.pill}` | 9999px | All buttons, chips, cart button, carousel arrows |

The hero panel uses an asymmetric radius `0px 0px 12px 12px` — square top (it runs under the header), rounded bottom. Root variables also define `--radius-5xl 3.75rem`.

### Iconography
- Category chips carry thin line icons (a moon, a lotus, a drop-like shape) at the left of the label.
- Carousel controls: a bare left arrow and a filled dark circular right arrow.
- The cart is an outline icon inside a circular button with a hairline ring.
- News cards end in a small dark circle holding a diagonal arrow.
- The "Oura Ring" product name above the hero headline carries a small filled circle with the generation number ("5").
- Footnote markers are superscript numerals linked to the footnote list on the graphite band.

### Photography
Warm, natural-light photography with skin tones and earthy textures: a sleeping face, older hands wearing rings, rock and moss. The ring is shown small in its environment. App screens appear as a fanned row of dark phone UIs.

## Components

### Buttons

**`button-primary`** — "Explore": `{colors.primary}` `#2a72de`, white `{typography.button}` (16px/700), padding `12px 24px`, 48px tall, fully rounded. Hover `button-primary-hover` → `#2056a6`.

**`button-dark`** — "Why Oura", "How It Works", "Explore Membership": `{colors.pill-dark}` `#4a4741` with cream `#f7f1e8` 16px/400 label, same geometry. Hover → `#1c1b1a`.

**`button-light`** — "Read More" on the dark news band: cream fill, `{colors.ink}` label.

**`button-outline-on-dark`** — language selector in the footer: transparent, 1px white border, `8px 16px`, 42px.

### Cards

**`card-category`** — 12px-radius full-bleed photo (493×626 at 1280px) with a frosted `chip-category` top-left (icon + "Sleep and Rest", 12px), a white circular "+" button top-right, and a cream `{typography.heading-card}` title bottom-left.

**`card-testimonial`** — `{colors.surface-card}` `#efe6db`, radius 8px, padding 40px: dark uppercase tag, a short dash, the quote in Editorial New 24px/100 black, avatar + `{typography.attribution}` name at the bottom.

**`card-news`** — on the graphite band: cream `#f7f1e8`, radius 8px, padding 24px, `{typography.news-title}` headline in black, a dark circular arrow button bottom-right. The featured article is a large photo card with a cream `tag` (`6px` radius, `8px 12px`), a cream `{typography.heading-article}` title and a `button-light`.

### Inputs

**`text-input-newsletter`** — `#4a4741` fill, white text, radius 12px, padding `8px 48px 8px 20px`, 40px tall, letter-spacing 0.4px, inset top highlight, arrow icon on the right.

### Navigation

**`nav`** — transparent header (90px, padding `8px 0px`) over the hero: ŌURA wordmark left; "Shop ▾ · Your Health ▾ · Why Oura ▾ · For Organizations" centered in `{typography.body}` `#4a4741`; round cart button right. Above it, the **`announcement-bar`** in 14px/700 on sandstone.

### Footer

**`footer`** — dark: wordmark, payment badges, serif newsletter heading "Receive articles, tips, and offers from Oura" (`{typography.heading-serif}` in `#a8a5a0`), the newsletter input, link columns (Our Company / Support / Partner With Us / Connect) with bold 16px headings, legal links 12px in `#a8a5a0`, and the outlined language pill. The footer container itself has no computed background color, so no hex is declared for it.

## Design System Architecture

Oura publishes **no public component library, Storybook or token package**; the only official design document found is the [API Brand Guidelines v1 (October 2020)](https://static.ouraring.com/pdfs/Oura_BrandGuidelines_v1.pdf), covering the wordmark, logo colors, clear space, minimum size, partnership lockups and the color palette. The web system below is read from the live site's CSS.

### Token architecture
- **Primitive color scales in CSS custom properties** (Tailwind v4 theme): brand-named ramps `--color-sandstone-100 … 500` (`#fefaef`, `#f7f1e8`, `#efeae2`, `#efe6db`, `#e6ded3`, `#4a4741`), `--color-cream-50/100`, `--color-mustard-50 … 700`, `--color-olive-200 … 800`, `--color-slate-100 … 900`, `--color-brown-100 … 700`, `--color-backdrop-500/600`, plus overridden `--color-blue-100 #2a72de` / `--color-blue-200 #2056a6` and grays `--color-gray-100 … 600`.
- **Semantic type tokens**: `--text-title-xl/lg/md`, `--text-heading-6xl … xs`, `--text-body-lg`, `--text-body-sm`, `--text-eyebrow`.
- **Fonts**: `--font-sans "AkkuratLL"`, `--font-serif "Editorial New"`.
- **Utility classes** consume them directly: `bg-sandstone-200`, `text-sandstone-500`, `bg-gray-600`, `text-heading-base`, `text-eyebrow`, `rounded-full`, `rounded-xl`.
- The guidelines' primary palette maps onto two live tokens: Skin Tone `#E6DED3` = `--color-sandstone-450`, Oura Black `#151619` = `--color-backdrop-600`.

### Theming
No user-facing dark mode. Sections switch between a light sandstone theme and a dark graphite theme by utility class (`bg-sandstone-200 text-sandstone-500` vs `bg-gray-600`). The guidelines' "Color Amounts" page shows a Light Palette and a Dark Palette for content.

### Type & spacing systems
4px spacing base (`--spacing .25rem`); rem-based type scale; leading tokens `--leading-tighter 1.1` … `--leading-loose 2`; tracking tokens `--tracking-tighter -.05em` … `--tracking-widest .1em`; radius tokens `--radius-xs .125rem` … `--radius-5xl 3.75rem`.

### Component model
Observed: announcement bar, transparent mega-menu header, hero panel, pill buttons (blue / dark / light / outline), photo category carousel with arrow controls, app-screen composite, testimonial cards, news band with featured article, newsletter form, footer. No documented variants or states beyond the measured hovers.

### Accessibility
A "Skip Navigation to Main Content" link (`sr-only focus-within:not-sr-only`) is present. The guidelines require the white logo on dark backgrounds and forbid Helsinki Blue on dark. No published contrast or target-size policy was found.

### Delivery
No npm package or public Figma file. The guidelines PDF is marked "Proprietary & Confidential".

## Do's and Don'ts

### Do
- Use sandstone `#f7f1e8` as the page and `#4a4741` as the text color.
- Set statements in Editorial New at light weights with tight negative tracking (−0.03 to −0.05em).
- Keep one blue `#2a72de` pill per view; use `#4a4741` pills for secondary actions.
- Make every button fully rounded and 48px tall.
- Use warm, natural photography in 12px-radius cards with frosted chips.
- Use the graphite `#1c1b1a` band for editorial/press content.

### Don't
- Don't use bold serif headlines or positive tracking on display type.
- Don't put Helsinki Blue on dark backgrounds (guidelines).
- Don't use pure white pages with black text as the default look.
- Don't add drop shadows to cards.
- Don't use AkkuratLL for big emotional statements — that is the serif's job.
- Don't stretch, outline or recolor the wordmark (guidelines).

## Responsive Behavior

### Breakpoints
Root variables define `--breakpoint-xl 1280px` and `--breakpoint-xxl 1440px` (Tailwind defaults below). Measured at 1280px and 390px:

| Width | Key Changes |
|---|---|
| 1280px | h1 80px/300; section h2 68px; quotes 24px; hero panel inset 24px with rounded bottom |
| 390px | h1 48px/300/52.8px (−2.4px); section h2 56px/61.6px; quotes 18px/100/22.5px; primary pill keeps `12px 24px`, 48px |

### Mobile type
Most frequent sizes at 390px: 16px, 24px, 18px, 12px, 28px, 14px, 56px.

### Touch Targets
Pills are 48px tall at both widths; carousel arrows and the cart button are circular.

### Collapsing Strategy

## Iteration Guide

1. Start on `{colors.canvas}` with `{colors.ink}` text.
2. Write one serif statement (`{typography.display-section}`), a `{typography.lead}` line, and a pill pair.
3. Use `button-primary` for the single main action; `button-dark` for the rest.
4. Use `card-category` for photographic navigation; `card-testimonial` for quotes.
5. Switch to the graphite `news-band` for editorial content.
6. Reuse the site's token names (`sandstone-200`, `sandstone-500`, `gray-600`, `blue-100`) when naming new styles.
7. Take hover colors only from measurement: blue → `#2056a6`, dark pill → `#1c1b1a`.
8. Check new values against the live homepage before adding them.
