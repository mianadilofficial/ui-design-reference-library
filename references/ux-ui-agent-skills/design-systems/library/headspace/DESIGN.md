---
version: alpha
name: Headspace
category: "Healthcare & Wellness"
description: 'Headspace''s mental-health marketing system — a single custom sans, "Headspace Apercu", at 400/500/700 with tight negative tracking (-1.2px at 40px, -2.16px at 72px) in warm charcoal #2d2c2b on white #ffffff and cream #f9f4f2, a bright blue #0061ef pill CTA (32px radius, 2px drop-shadow, hover #0040ea), charcoal #2d2c2b secondary pills, and full-bleed sunshine #ffce00, sky #00a4ff and blue bands with round smiling character illustrations.'

colors:
  primary: "#0061ef"
  primary-hover: "#0040ea"
  on-primary: "#ffffff"
  ink: "#2d2c2b"
  ink-secondary: "#44423f"
  ink-body: "#4b4c4d"
  ink-subtle: "#63605d"
  charcoal: "#2d2c2b"
  charcoal-hover: "#141313"
  canvas: "#ffffff"
  cream: "#f9f4f2"
  sunshine: "#ffce00"
  sky: "#00a4ff"
  pink: "#ffa1cc"
  indigo: "#3b197f"
  green: "#02873e"
  orange: "#ff7e1d"
  orange-text: "#fc5500"
  stone-border: "#e2ded9"
  stone-border-hover: "#c6c1b9"
  input-border: "#d2d5de"
  cream-hover: "#e5e7ec"

typography:
  display-cta:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 72px
    fontWeight: 700
    lineHeight: 72px
    letterSpacing: -2.16px
  display-xl:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 61.6px
    letterSpacing: -1.68px
  display-plans:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 52px
    fontWeight: 700
    lineHeight: 62.4px
    letterSpacing: -1.56px
  display-lg:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: -1.44px
  heading-hero:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 44px
    letterSpacing: -1.2px
  heading-feature:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 46px
    letterSpacing: -1.2px
  heading-hero-mobile:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: -1.08px
  heading-md:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
    letterSpacing: -0.96px
  heading-sm:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
    letterSpacing: -0.72px
  accordion-title:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 31.2px
  body-xl:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: -0.2px
  tile-label:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.6px
  body-lg:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 23.4px
  button-lg:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 21.6px
    letterSpacing: -0.54px
  body-md:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav-link:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  banner-link:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
    letterSpacing: -0.16px
  button-md:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 17.6px
  button-sm:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 15.4px
  caption:
    fontFamily: "\"Headspace Apercu\", sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 13.8px
    letterSpacing: -0.12px

rounded:
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  button: 32px
  cta-giant: 112px
  pill: 800px
  circle: 50%

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  ml: 20px
  lg: 24px
  xl: 32px
  xxl: 40px
  header-x: 48px
  huge: 64px
  section: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button}"
    padding: 14.3px 24px
    height: 48px
    border: 2px solid transparent
    boxShadow: "rgba(65, 61, 69, 0.2) 0px 2px 0px 0px"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-lg:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.button}"
    padding: 20px 40px
    height: 62px
    boxShadow: "rgba(65, 61, 69, 0.2) 0px 2px 0px 0px"
  button-dark:
    backgroundColor: "{colors.charcoal}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button}"
    padding: 14px 20px
    height: 48px
  button-dark-hover:
    backgroundColor: "{colors.charcoal-hover}"
  button-cream:
    backgroundColor: "{colors.cream}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.button}"
    padding: 12.1px 24px
    height: 48px
  button-cream-hover:
    backgroundColor: "{colors.cream-hover}"
  cta-giant:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display-cta}"
    rounded: "{rounded.cta-giant}"
    padding: 56px 64px
    height: 188px
    boxShadow: "rgba(20, 19, 19, 0.2) 0px 3.23px 6.45px 0px"
  tab-chip:
    backgroundColor: "{colors.cream}"
    textColor: "{colors.ink}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.xl}"
    padding: 0px 24px
    height: 48px
  tab-chip-hover:
    backgroundColor: "{colors.stone-border}"
  tab-chip-active:
    backgroundColor: "{colors.charcoal}"
    textColor: "{colors.on-primary}"
  goal-tile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.tile-label}"
    rounded: "{rounded.sm}"
    border: "2px solid #e2ded9"
    padding: 16px 8px 16px 16px
    height: 76px
  goal-tile-hover:
    border: "2px solid #c6c1b9"
  card-hero:
    backgroundColor: "{colors.cream}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-sm}"
    rounded: "{rounded.xl}"
    padding: 28px 22px 0px
  card-testimonial:
    backgroundColor: "{colors.cream}"
    textColor: "{colors.ink}"
    typography: "{typography.body-lg}"
    rounded: "{rounded.lg}"
    padding: 40px
  card-feature-sunshine:
    backgroundColor: "{colors.sunshine}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-feature}"
    rounded: "{rounded.lg}"
  plan-card-selected:
    backgroundColor: "{colors.sunshine}"
    textColor: "#000000"
    rounded: "{rounded.md}"
    border: "1px solid #ffce00"
    padding: 24px 64px 24px 24px
  plan-card:
    backgroundColor: "{colors.canvas}"
    textColor: "#000000"
    rounded: "{rounded.md}"
    border: "1px solid #44423f"
    padding: 24px 64px 24px 16px
    boxShadow: "rgba(26, 25, 25, 0.2) 0px 2px 0px 0px"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "#000000"
    typography: "{typography.body-md}"
    rounded: "{rounded.sm}"
    border: "1px solid #d2d5de"
    padding: 24px 16px 8px
    height: 58px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    height: 80px
    padding: 0px 48px
  link-banner:
    textColor: "{colors.ink}"
    typography: "{typography.banner-link}"
    textDecoration: underline
  footer:
    backgroundColor: "{colors.cream}"
    textColor: "{colors.ink-body}"
    typography: "{typography.caption}"
    padding: 0px 32px 32px
---

## Overview

Headspace sells meditation, sleep content, an AI companion ("Ebb") and online therapy. Its site is cheerful and soft: rounded cards, pill buttons, a white canvas (`{colors.canvas}` — `#ffffff`) with warm cream panels (`{colors.cream}` — `#f9f4f2`), and big blocks of saturated color — sunshine yellow (`{colors.sunshine}` — `#ffce00`), Headspace blue (`{colors.primary}` — `#0061ef`), sky (`{colors.sky}` — `#00a4ff`), pink, indigo and green — each holding round, smiling blob characters. The orange dot logo sits at the top-left of the nav.

Everything is set in one typeface, served as **"Headspace Apercu"** — a custom version of Colophon Foundry's Aperçu that press coverage of the 2023 refresh describes as able to "flex from playful to clinical" ([It's Nice That](https://Itsnicethat.com/articles/italic-studio-headspace-graphic-design-project-250424)). Headlines are bold (700) with consistent negative tracking of roughly −3% of the font size (−1.2px at 40px, −1.68px at 56px, −2.16px at 72px); body copy is 400 in warm charcoal (`{colors.ink}` — `#2d2c2b`), never pure black.

The voice is gentle and second-person: "Feel less anxious all with Headspace", "What kind of headspace are you looking for?", "Get your headspace". The page flows from a two-card hero (app vs. therapy), through a grid of goal tiles, a tabbed feature carousel, testimonials, a blue B2B band, a content library carousel, a sky-blue social-proof band, FAQs, and ends with a full-width yellow band holding a giant blue pill button.

**Key Characteristics:**
- One family, three weights (400 / 500 / 700); tracking scales with size at about −0.03em on headlines.
- Primary CTA: blue `#0061ef` pill, 32px radius, 48px tall, with a hard 2px bottom shadow `rgba(65, 61, 69, 0.2) 0px 2px 0px 0px`; hover deepens to `#0040ea`.
- Secondary CTA: charcoal `#2d2c2b` pill, hover `#141313`.
- Cream `#f9f4f2` surfaces for hero cards (24px radius) and testimonials (16px radius).
- Full-bleed color bands (`#ffce00`, `#0061ef`, `#00a4ff`) separate the story.
- The closing CTA is a 188px-tall blue pill set at 72px — the largest type on the page.
- Round "smile" characters and phone mockups instead of stock imagery; photography appears inside phone frames and testimonial avatars.

## Colors

> Source pages measured: home (`/`) and `/subscriptions` (plans). There are no CSS custom properties on the site; values are computed styles.

### Brand & Action
- **Headspace Blue** (`{colors.primary}` — `#0061ef`): "Try for free", "Start your free trial", "Learn more", the giant "Get your headspace" pill, the B2B band, link-like labels ("Trending").
- **Blue Hover** (`{colors.primary-hover}` — `#0040ea`): measured hover background of the blue pill (`rgb(0, 97, 239)` → `rgb(0, 64, 234)`).
- **On Primary** (`{colors.on-primary}` — `#ffffff`).
- **Charcoal** (`{colors.charcoal}` — `#2d2c2b`): secondary filled pills ("Try for $0", "Check your coverage") and the active tab chip.
- **Charcoal Hover** (`{colors.charcoal-hover}` — `#141313`): measured hover of the charcoal pill.

### Illustration & Band Colors
- **Sunshine** (`{colors.sunshine}` — `#ffce00`): largest colored area on the homepage — the "Always-there support" feature card, the closing CTA band and the selected plan card.
- **Sky** (`{colors.sky}` — `#00a4ff`): "Join the millions who use Headspace every day" band.
- **Pink** (`{colors.pink}` — `#ffa1cc`), **Indigo** (`{colors.indigo}` — `#3b197f`), **Green** (`{colors.green}` — `#02873e`): carousel feature cards (equal measured areas).
- **Orange** (`{colors.orange}` — `#ff7e1d`) and **Orange Text** (`{colors.orange-text}` — `#fc5500`): measured on the plans page. Press coverage says the refresh "retains the signature orange" ([It's Nice That](https://Itsnicethat.com/articles/italic-studio-headspace-graphic-design-project-250424)).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background, header, goal tiles.
- **Cream** (`{colors.cream}` — `#f9f4f2`): hero cards, testimonial cards, newsletter area, footer, cream pills and inactive tab chips. Largest background on the plans page.
- **Stone Border** (`{colors.stone-border}` — `#e2ded9`): 2px border of goal tiles; also the hover fill of inactive tab chips.
- **Stone Border Hover** (`{colors.stone-border-hover}` — `#c6c1b9`): goal-tile border on hover.
- **Input Border** (`{colors.input-border}` — `#d2d5de`): 1px border of the email field.
- **Cream Hover** (`{colors.cream-hover}` — `#e5e7ec`): hover fill of cream pills on the plans page ("View Student Pricing").

### Text
- **Ink** (`{colors.ink}` — `#2d2c2b`): the most-read color — headlines, FAQ answers, tiles, tab labels.
- **Ink Secondary** (`{colors.ink-secondary}` — `#44423f`): footer links, cream-pill labels, plans-page body (most-read there).
- **Ink Body** (`{colors.ink-body}` — `#4b4c4d`): inherited body color on `<body>`, header and footer containers.
- **Ink Subtle** (`{colors.ink-subtle}` — `#63605d`): form labels ("Email address").

### Semantic
No success/warning/error palette is published or observed on the measured pages.

## Typography

### Font Family
**Headspace Apercu** — served as `"Headspace Apercu", sans-serif`, loaded at weights 400, 600 and 700 (500 is used in computed styles). It is a custom version of Aperçu, the Colophon Foundry typeface released in 2010 ([MyFonts](https://www.myfonts.com/collections/apercu-variable-font-colophon-foundry)); the stylesheet also declares `Apercu Pro Mono`.

### Hierarchy

| Token | Size | Weight | Line Height | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.display-cta}` | 72px | 700 | 72px | -2.16px | Giant closing CTA label |
| `{typography.display-xl}` | 56px | 700 | 61.6px | -1.68px | Section h2 ("Members are enjoying…") |
| `{typography.display-plans}` | 52px | 700 | 62.4px | -1.56px | Plans page h2 ("Be kind to your mind") |
| `{typography.display-lg}` | 48px | 700 | 48px | -1.44px | "The mental health app for every moment" |
| `{typography.heading-hero}` | 40px | 700 | 44px | -1.2px | Hero headline ("Feel less anxious / all with Headspace") |
| `{typography.heading-feature}` | 40px | 700 | 46px | -1.2px | Feature-card titles ("Always-there support") |
| `{typography.heading-hero-mobile}` | 36px | 700 | 36px | -1.08px | Hero headline at 390px |
| `{typography.heading-md}` | 32px | 700 | 38.4px | -0.96px | Library card titles ("Meet Ebb") |
| `{typography.heading-sm}` | 24px | 700 | 28.8px | -0.72px | Hero card titles |
| `{typography.accordion-title}` | 24px | 500 | 31.2px | normal | FAQ questions |
| `{typography.body-xl}` | 20px | 400 | 30px | -0.2px | FAQ answers / long copy (most characters on page) |
| `{typography.tile-label}` | 20px | 400 | 24px | -0.6px | Goal tiles ("Stress less") |
| `{typography.body-lg}` | 18px | 400 | 23.4px | normal | Testimonial quotes |
| `{typography.button-lg}` | 18px | 700 | 21.6px | -0.54px | Tab chips, cream pills |
| `{typography.body-md}` | 16px | 400 | 24px | normal | Card descriptions, input text |
| `{typography.nav-link}` | 16px | 400 | 18.4px | normal | Header nav |
| `{typography.banner-link}` | 16px | 500 | 22px | -0.16px | Announcement link |
| `{typography.button-md}` | 16px | 700 | 17.6px | normal | Large pills |
| `{typography.button-sm}` | 14px | 700 | 15.4px | normal | Header "Try for free", hero pills |
| `{typography.caption}` | 12px | 500 | 13.8px | -0.12px | Footer links, legal |

### Principles
- **Tracking is proportional.** Every measured headline is tracked at −0.03em (40→−1.2, 48→−1.44, 52→−1.56, 56→−1.68, 72→−2.16). Smaller text uses −0.01em (12→−0.12, 16→−0.16, 18→−0.18, 20→−0.2).
- **Bold headlines, regular body.** Headlines are 700; FAQ questions and small UI text are 500; reading text is 400.
- **Display leading is tight** (1.0–1.15); body leading opens to 1.5 (20px/30px, 16px/24px).
- **Charcoal, not black.** Text is `#2d2c2b`; `#000000` appears only inside inputs and plan cards.

### Note on Font Substitutes
Headspace Apercu is proprietary to Headspace. Its base design, Aperçu, is commercially licensed from Colophon Foundry. No official source names a free substitute, so none is prescribed; the site's own fallback is the generic `sans-serif`.

## Layout

### Spacing System
- Measured spacing values: `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 12px · `{spacing.md}` 16px · `{spacing.ml}` 20px · `{spacing.lg}` 24px · `{spacing.xl}` 32px · `{spacing.xxl}` 40px · `{spacing.header-x}` 48px · `{spacing.huge}` 64px · `{spacing.section}` 80px.
- 24px is the most frequent padding on the homepage; 20px and 8px are the most frequent gaps.
- Header: 80px tall with 48px side padding (64px tall, 24px padding at 390px).
- Testimonial cards: 40px padding. Hero cards: `28px 22px 0px` (the phone mockup bleeds to the bottom edge).

### Grid & Container
- Hero: two cream cards side-by-side at roughly 2:1 width, both 24px radius, centered headline above.
- Goal tiles: 3 × 2 grid of white tiles, each 76px tall with a 2px stone border and chevron.
- Feature carousel: tab chips centered above a wide card that peeks the next card on the right; dot pagination below.
- Testimonials: three equal cream cards.
- Library: horizontal carousel of portrait cards with filter chips.
- FAQ: single centered column of `<details>` rows (784px wide).

### Whitespace Philosophy
Plenty of white between sections, but each band is dense with color and illustration. Sections are announced by a centered bold headline and then fill the width with cards or a color block.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Cards, tiles, bands |
| 1 | `rgba(65, 61, 69, 0.2) 0px 2px 0px 0px` | Blue primary pills — a hard 2px "ledge" under the button |
| 1b | `rgba(26, 25, 25, 0.2) 0px 2px 0px 0px` | Unselected plan card |
| 2 | `rgba(0, 0, 0, 0.1) 0px 0px 10px 0px` | Floating cards on the plans page |
| 3 | `rgba(20, 19, 19, 0.2) 0px 3.23px 6.45px 0px` | Giant closing CTA |

The signature is the hard, unblurred 2px bottom shadow on blue pills — it makes buttons look slightly raised and tactile, in keeping with the toy-like illustrations.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 8px | Goal tiles, text input |
| `{rounded.md}` | 12px | Plan cards |
| `{rounded.lg}` | 16px | Testimonial and feature cards |
| `{rounded.xl}` | 24px | Hero cards, tab chips |
| `{rounded.button}` | 32px | All pill buttons (48px tall) |
| `{rounded.cta-giant}` | 112px | Giant closing CTA |
| `{rounded.pill}` | 800px | Fully round small elements |
| `{rounded.circle}` | 50% | Avatars, character blobs, carousel dots |

No clip-paths or skewed shapes were measured. The closing yellow band begins with a curved top edge in the full-page view; it is drawn as artwork, not a CSS radius token.

### Illustration
Characters are simple round blobs with closed-eye smiles in orange, blue, pink, purple and green, often with small sparkles and clouds. Phone mockups show the app UI. Photography appears in therapy-session phone screens and testimonial avatars.

## Components

### Buttons

**`button-primary`** — blue pill.
- `{colors.primary}` background, white `{typography.button-sm}` (14px/700) label, padding `14.3px 24px`, height 48px, radius 32px, 2px transparent border, shadow `rgba(65, 61, 69, 0.2) 0px 2px 0px 0px`.
- Hover `button-primary-hover`: `{colors.primary-hover}` `#0040ea`.
- **`button-primary-lg`** (plans page "Start your free trial"): `{typography.button-md}` 16px/700, padding `20px 40px`, height 62px.

**`button-dark`** — charcoal pill ("Try for $0", "Check your coverage"): `{colors.charcoal}`, white 14px/700, padding `14px 20px`, 48px tall, no shadow. Hover → `{colors.charcoal-hover}` `#141313`.

**`button-cream`** — cream pill ("Chat with Ebb", "Explore sleep resources"): `{colors.cream}`, `{colors.ink-secondary}` label in `{typography.button-lg}` (18px/700, −0.54px), padding `12.1px 24px`, 48px. Hover (plans page) → `{colors.cream-hover}` `#e5e7ec`.

**`cta-giant`** — "Get your headspace": blue pill 188px tall, padding `56px 64px`, radius 112px, label `{typography.display-cta}` 72px/700/−2.16px, shadow `rgba(20, 19, 19, 0.2) 0px 3.23px 6.45px 0px`, centered on the sunshine band.

### Chips & Tabs

**`tab-chip`** — feature tabs ("Guided meditations", "Sleep resources"): cream fill, 48px tall, radius 24px, padding `0px 24px`, `{typography.button-lg}`. Hover → `{colors.stone-border}` `#e2ded9`. Active **`tab-chip-active`**: charcoal fill, white text, with a small white dot before the label.

### Tiles & Cards

**`goal-tile`** — "Stress less", "Sleep soundly" …: white, 2px `#e2ded9` border, radius 8px, padding `16px 8px 16px 16px`, 76px tall, label `{typography.tile-label}`, small illustration icon + chevron on the right. Hover: border → `#c6c1b9` (no fill change).

**`card-hero`** — cream, radius 24px, padding `28px 22px 0px`, centered `{typography.heading-sm}` title, a pill CTA, then a phone/illustration composition bleeding off the bottom.

**`card-feature-sunshine`** — wide yellow carousel card with `{typography.heading-feature}` title, `{typography.body-md}` copy and a cream pill.

**`card-testimonial`** — cream, radius 16px, padding 40px, quote in `{typography.body-lg}`.

**`plan-card-selected`** / **`plan-card`** (plans page) — 12px radius; selected = sunshine fill with matching 1px border; unselected = white with 1px `#44423f` border and a 2px hard shadow.

### Inputs

**`text-input`** — newsletter email: white, 1px `#d2d5de` border, radius 8px, padding `24px 16px 8px` (floating label "Email address" in `{colors.ink-subtle}`), 58px tall, 16px/400 text.

### Navigation

**`nav`** — white header, 80px, padding `0px 48px`: orange dot logo, then "For You · For Business · For Providers · Our Plans · Resources · About" in `{typography.nav-link}`; right side "Log in", "Help" and the blue "Try for free" pill. Menu items open a white mega-menu panel with column headings (bold) and link lists, plus a promotional illustration card.

**Announcement banner** — a pink strip above the header with a centered underlined link (`link-banner`, 16px/500, −0.16px), 58px tall. Its pink is not exposed as a computed background color on the link element.

### Footer

**`footer`** — cream area with newsletter ("Stay in the loop", 24px/700), a blue "Login" pill, accordion link groups ("My Headspace", "Get some Headspace", "Our content", "About us") in `{colors.ink-secondary}`, app-store badges, and a dark `#44423f` bottom strip with social icons and a language selector pill. Container padding `0px 32px 32px`; links use `{typography.caption}`.

## Design System Architecture

**Headspace publishes no public design system** — no documentation site, token package, component library or Figma community kit was found (searches listed in `SOURCES.json`). The [press & media page](https://www.headspace.com/press-and-media) links to the October 2023 brand-refresh announcement but no brand guidelines. Press coverage reports the refresh was made in-house with Italic Studio and a custom Aperçu cut by Colophon Foundry ([It's Nice That](https://Itsnicethat.com/articles/italic-studio-headspace-graphic-design-project-250424)). What follows is the de-facto system measurable on the site.

### Token architecture (de-facto)
- **No CSS custom properties.** `:root` exposes no variables; styles are emitted as hashed CSS-in-JS classes (`css-1lucyj4`, `css-1n1dghu`, `css-ocqjq6`). Token names are therefore not visible.
- **Repeated values act as tokens:** blue `#0061ef` / hover `#0040ea`; charcoal `#2d2c2b` / hover `#141313`; cream `#f9f4f2`; stone `#e2ded9` / `#c6c1b9`; radius 32px on buttons (75 stylesheet rules), 8px, 24px, 16px.
- **Type tokens follow a formula:** headline tracking = −0.03 × size, small text = −0.01 × size.

### Theming
No dark mode or theme switch on the marketing site. Bands switch "theme" by background (white, cream, yellow, blue, sky) with text flipping to white on blue/sky.

### Type & spacing systems
One family, weights 400/500/700. Sizes in use: 12, 14, 16, 18, 20, 24, 32, 40, 48, 52, 56, 72px. Spacing values cluster at 4 / 8 / 12 / 16 / 20 / 24 / 32 / 40 / 48 / 64 / 80px.

### Component model
Observed inventory: announcement banner, header with mega-menu, pill buttons (blue, charcoal, cream, giant), tab chips, goal tiles, hero cards, carousel feature cards with dot pagination, testimonial cards, library carousel with filter chips, FAQ accordion (`<details>`), newsletter form with floating-label input, plan selector cards, footer accordion, cookie banner (OneTrust). No published anatomy, variants or state documentation.

### Accessibility
No published accessibility standard was found. Press coverage says the expanded palette was introduced partly to improve accessibility ([It's Nice That](https://Itsnicethat.com/articles/italic-studio-headspace-graphic-design-project-250424)). Buttons and chips are 48px tall on desktop.

### Delivery
No npm package, versioned library or public Figma file.

## Do's and Don'ts

### Do
- Use Headspace Apercu for everything; bold (700) for headlines, 400 for reading.
- Track headlines at −0.03em and small text at −0.01em.
- Make every button a pill (32px radius, 48px tall); give blue pills the hard 2px bottom shadow.
- Use blue `#0061ef` for the main action, charcoal `#2d2c2b` for the alternative.
- Group content in cream `#f9f4f2` cards with generous radii (16–24px).
- Break the page with full-bleed sunshine, blue and sky bands carrying round character illustrations.
- Write in warm, second-person microcopy.

### Don't
- Don't use pure black for text — use `#2d2c2b`.
- Don't use sharp corners or square buttons.
- Don't use soft, blurry shadows on buttons; the shadow is a hard 2px offset.
- Don't mix in a second typeface.
- Don't track body text loosely or set headlines with positive tracking.
- Don't put blue CTAs on the blue band; use white/charcoal there.

## Responsive Behavior

### Breakpoints
The CSS-in-JS output does not expose a named breakpoint scale; behavior below is measured at 1280px and 390px.

| Width | Key Changes |
|---|---|
| 1280px | Header 80px, padding 0 48px; hero h2 40px/44px; 2-card hero; 3-column tiles |
| 390px | Header 64px, padding 0 24px; hero h2 36px/36px (−1.08px); testimonial quote text 24px/31.2px; blue pill keeps 14px/700 and `14.3px 24px` |

### Mobile type
Most frequent sizes at 390px: 16px, 12px, 20px, 24px, 32px, 40px.

### Touch Targets
Pills and chips are 48px tall at desktop; goal tiles are 76px.

### Collapsing Strategy
Mobile layout of hero cards, tiles, carousels and footer link groups was not measured.

## Iteration Guide

1. Set the page on `{colors.canvas}` and group content in `{colors.cream}` cards.
2. Use `{typography.heading-hero}` / `{typography.display-xl}` for section headlines, centered.
3. One `button-primary` per view; pair with `button-dark` for the alternative.
4. For choice grids use `goal-tile` (2px stone border, hover darkens the border only).
5. For feature tabs use `tab-chip` / `tab-chip-active`.
6. Close long pages with the sunshine band and `cta-giant`.
7. Keep tracking formulaic (−0.03em headlines) and colors exactly as measured.
8. Verify any new value against the homepage and `/subscriptions` before adding it.
