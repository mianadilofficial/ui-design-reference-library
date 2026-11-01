---
version: alpha
name: Deezer
category: "Music & Audio"
description: "Deezer (deezer.com): a near-black #0f0d13 page with an off-white #fdfcfe hero, Deezer purple #a238ff actions (12px-radius buttons, hover #9333e8) and #fdfcfe / #a9a6aa text. Headlines are the custom Deezer Brand face — 140px/800 uppercase hero, 56px/700 section titles — with Inter for UI and body (16px, 14px/500/25px). Purple sound-wave rings and a curved section edge carry the 2023 purple-heart identity."

colors:
  primary: "#a238ff"
  primary-hover: "#9333e8"
  primary-light: "#d09aff"
  primary-weak: "#c17aff"
  primary-line: "#a238ff66"
  app-purple: "#ad47ff"
  canvas: "#0f0d13"
  hero: "#fdfcfe"
  surface-card: "#f8f8f9"
  surface-secondary: "#f5f2f8"
  surface-inverse: "#121216"
  surface-raised-dark: "#1b191f"
  surface-hover-dark: "#29282d"
  app-black: "#000000"
  app-field: "#242326"
  white: "#ffffff"
  ink: "#fdfcfe"
  ink-muted: "#a9a6aa"
  ink-dark: "#0f0d13"
  ink-secondary: "#6f6d71"
  ink-footer: "#d1d1d7"
  ink-button-white: "#191922"
  border: "#555257"
  divider-light: "#c2c0c4"
  family: "#ff673d"
  duo: "#2f7c90"
  error: "#df3c3c"
  success: "#00b23d"
  warning: "#ec7f11"

typography:
  hero:
    fontFamily: "\"Deezer Brand\", Tahoma, sans-serif"
    fontSize: 140px
    fontWeight: 800
    lineHeight: 126px
  hero-mobile:
    fontFamily: "\"Deezer Brand\", Tahoma, sans-serif"
    fontSize: 64px
    fontWeight: 800
    lineHeight: 57.6px
  display-stat:
    fontFamily: "\"Deezer Brand\", Tahoma, sans-serif"
    fontSize: 120px
    fontWeight: 700
    lineHeight: 120px
    letterSpacing: 0.25px
  page-title:
    fontFamily: "\"Deezer Product\", Tahoma, sans-serif"
    fontSize: 78px
    fontWeight: 700
    letterSpacing: 0.25px
  section-title:
    fontFamily: "\"Deezer Brand\", Tahoma, sans-serif"
    fontSize: 56px
    fontWeight: 700
    letterSpacing: 0.25px
  offer-price:
    fontFamily: "\"Deezer Brand\", Tahoma, sans-serif"
    fontSize: 46px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: 0.25px
  subtitle:
    fontFamily: "\"Deezer Brand\", Tahoma, sans-serif"
    fontSize: 35px
    fontWeight: 700
    lineHeight: 42px
  badge:
    fontFamily: "\"Deezer Brand\", Tahoma, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 24px
  faq-question:
    fontFamily: "Inter, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
  feature-title:
    fontFamily: "\"Deezer Brand\", Tahoma, sans-serif"
    fontSize: 19px
    fontWeight: 700
    letterSpacing: 0.25px
  eyebrow:
    fontFamily: "\"Deezer Brand\", Tahoma, sans-serif"
    fontSize: 18px
    fontWeight: 700
  body:
    fontFamily: "Inter, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
  button:
    fontFamily: "Inter, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
  body-small:
    fontFamily: "Inter, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 25px
  button-small:
    fontFamily: "Inter, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
  app-body:
    fontFamily: "Inter, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 450
    lineHeight: 22.5px

rounded:
  xs: 4px
  sm: 8px
  md: 12px
  app: 16px
  badge: "9px / 75%"
  full: 256px

spacing:
  xs: 4px
  sm: 8px
  gap: 14px
  md: 16px
  lg: 24px
  xl: 28px
  xxl: 32px
  section: 56px
  footer: 64px
  gutter: 112px
  topbar: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 32px
    height: 42px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-nav-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.white}"
    typography: "{typography.button-small}"
    rounded: "{rounded.sm}"
    padding: 9px 20px
    height: 37px
  button-nav-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-outlined:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    border: "1px solid #555257"
    typography: "{typography.button-small}"
    rounded: "{rounded.sm}"
    padding: 9px 20px
    height: 37px
  button-outlined-hover:
    backgroundColor: "{colors.surface-hover-dark}"
  button-white:
    backgroundColor: "{colors.white}"
    textColor: "{colors.ink-button-white}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 32px
    height: 42px
  button-inverse:
    backgroundColor: "{colors.surface-inverse}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 32px
    height: 42px
  badge-premium:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.white}"
    typography: "{typography.badge}"
    rounded: "{rounded.badge}"
    padding: 4px 15px
    height: 32px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 80px
    padding: 0px 112px
  nav-link-hover:
    textColor: "{colors.primary}"
  offer-card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-dark}"
    rounded: "{rounded.sm}"
    padding: 24px
    width: 348px
  plan-card:
    backgroundColor: "{colors.hero}"
    textColor: "{colors.ink-dark}"
    rounded: "{rounded.xs}"
    padding: 24px
  app-button:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.white}"
    rounded: "{rounded.app}"
    padding: 12px 24px
    height: 48px
  app-search:
    backgroundColor: "{colors.app-field}"
    textColor: "{colors.white}"
    typography: "{typography.app-body}"
    rounded: "{rounded.app}"
    padding: 0px 44px
    height: 48px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-footer}"
    border: "1px solid #555257"
    padding: 64px 127px 117px
---

## Overview

Deezer's marketing homepage is a two-tone poster. It opens on an off-white `#fdfcfe` hero where a gigantic, ultra-heavy
uppercase headline — "WHERE MUSIC COMES TO LIFE", Deezer Brand at 140px / 800 with a 126px line-height so the three
lines nearly touch — sits above a 35px sub-line "Music streaming by Deezer", one purple "Try for free" button, and a row
of five black stars with "Over 3 million 5-star ratings". Then a wide convex curve sweeps the page into near-black
`#0f0d13`, which carries everything else: the offer section, a "Looking for a song?" block framed by concentric purple
sound-wave ovals, feature tiles, FAQs and the footer.

The identity comes from the 2023 rebrand: the purple heart logo and "Deezer purple" `#a238ff`, a custom typeface
family (served as "Deezer Brand", "Deezer Product" and "Deezer Headline VF"), and playful typographic display. Display
type is condensed, black-weight and tightly set; UI copy is Inter. Buttons are friendly rounded rectangles (12px), not
pills. The tone is bold and casual ("Choose the offer that works for you", "You'll find it on Deezer with high-quality sound!").

**Key Characteristics:**
- Canvas `#0f0d13` (body, most of the page) with a `#fdfcfe` hero band
- Primary action Deezer purple `#a238ff`; hover `#9333e8`
- Display: Deezer Brand 800/700 — 140px hero, 120px stats, 56px section titles
- UI and body: Inter 400/500/700 — 16px base, 14px / 500 / 25px small copy
- Buttons 12px radius, padding 8px 32px, 42px tall; nav buttons 8px radius, 37px tall
- "PREMIUM" badge with an elliptical `9px / 75%` radius
- Purple outline wave rings (`#a238ff66` lines)
- Top bar 80px, 112px side padding

## Colors

### Brand purple
- **Primary** `#a238ff` (`--color-accent-main`, `--color-bg-brand-premium`, `--gdpr-colors-primary`): every "Try for free"
  / "Sign up" button, the PREMIUM badge, nav-link hover text.
- **Primary hover** `#9333e8` (`--color-accent-strong`): measured hover background of purple buttons.
- **Primary light** `#d09aff` (`--color-accent-light`) and **primary weak** `#c17aff` (`--color-accent-weak`).
- **Primary line** `#a238ff66` (`--line-color`): the sound-wave ring strokes.
- **App purple** `#ad47ff`: the web app's compact "Sign up" button.

### Surfaces
- **Canvas** `#0f0d13`: body, header, offer and FAQ sections, footer.
- **Hero** `#fdfcfe` (`--color-bg-main`): the hero band and plan cards on the offers page.
- **Surface card** `#f8f8f9` (`--color-grey-50`): the homepage Premium offer card.
- **Surface secondary** `#f5f2f8` (`--color-bg-secondary`): offers-page panels.
- **Surface inverse** `#121216` (`--color-bg-inverse`): dark buttons ("Get a gift card").
- **Surface raised dark** `#1b191f`; **surface hover dark** `#29282d` (measured "Log in" hover).
- **App black** `#000000` and **app field** `#242326`: the deezer.com web app.

### Text
- **Ink** `#fdfcfe`: text on the dark page (body color, headlines, nav).
- **Ink muted** `#a9a6aa`: FAQ answers and legal copy — the most-read color by character count (`--color-text-disabled` in tokens).
- **Ink dark** `#0f0d13` (`--color-text-main`): hero and card text; **ink secondary** `#6f6d71`.
- **Ink footer** `#d1d1d7`; **ink on white button** `#191922`.

### Lines & plan colors
- **Border** `#555257`: outlined "Log in", footer top rule. **Divider light** `#c2c0c4` (`--color-divider-main`).
- Plan colors from tokens: Family `#ff673d` (`--color-bg-brand-family`), Duo/Trio `#2f7c90`.

### Semantic
- **Error** `#df3c3c`, **success** `#00b23d`, **warning** `#ec7f11` (`--color-intent-*`).

## Typography

### Font Families
- **Deezer Brand** (loaded 700, 800) — homepage display type. Stack: `"Deezer Brand", Tahoma, sans-serif`.
- **Deezer Product** — the offers page h1 (`--font-deezer: "Deezer Product","Tahoma",sans-serif`).
- **Deezer Headline VF** — declared in the CSS and used in the web app.
- **Inter** (loaded 400, 500, 600, 700) — UI and body (`--font-default: "Inter","Arial",sans-serif`).
The family was made for Deezer by NaN with Koto (Deezer Sans, 2023).

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| hero | Deezer Brand | 140px | 800 | 126px | — | "WHERE MUSIC COMES TO LIFE" (uppercase) |
| display-stat | Deezer Brand | 120px | 700 | 120px | 0.25px | "by 10 million music lovers" |
| page-title | Deezer Product | 78px | 700 | — | 0.25px | Offers page h1 |
| section-title | Deezer Brand | 56px | 700 | normal | 0.25px | "Choose the offer that works for you" |
| offer-price | Deezer Brand | 46px | 700 | 48px | 0.25px | "1 MONTH FREE" (uppercase) |
| subtitle | Deezer Brand | 35px | 700 | 42px | — | "Music streaming by Deezer" |
| badge | Deezer Brand | 24px | 700 | 24px | — | "PREMIUM" (uppercase) |
| faq-question | Inter | 20px | 700 | — | — | FAQ questions |
| feature-title | Deezer Brand | 19px | 700 | — | 0.25px | Feature tiles |
| eyebrow | Deezer Brand | 18px | 700 | — | — | "Live the music with Deezer" |
| body | Inter | 16px | 400 | — | — | Base text, nav |
| button | Inter | 16px | 700 | — | — | Buttons |
| body-small | Inter | 14px | 500 | 25px | — | FAQ answers, legal |
| button-small | Inter | 14px | 700 | — | — | Nav buttons |
| app-body | Inter | 15px | 450 | 22.5px | — | Web app (variable weights 450/550) |

### Principles
- Display type is always the custom face, tight and heavy; never Inter.
- Display tracking is a slight +0.25px; the hero relies on a line-height below font size (126px on 140px).
- UI copy is Inter at 500 for reading text and 700 for actions.

### Note on Font Substitutes
Deezer Brand / Product / Headline are proprietary (custom family by NaN and Koto). The site's own fallback is Tahoma;
UI text falls back to Arial. Keep Inter (open source) for UI; for display, follow the served fallback rather than
picking a look-alike.

## Layout

### Spacing System
Measured gaps: 14px (`--default-gap: 14px`), 16px (`--spacing-default: 16px`), 28px. Paddings: 28px, 8px, 32px, 112px,
56px, 24px. Section widths are tokenized: `--section-width-s: 600px`, `--section-width: 880px`, `--section-width-lg: 1120px`.

### Grid & Container
- Top bar `--layout-topbar-height: 80px` with 112px side padding: logo left; Plans / Features / Music links;
  outlined "Log in" and purple "Sign up" right.
- Centered single-column marketing sections; the offer card is 348px wide, centered.
- Footer: 64px top padding, 127px sides, 117px bottom, link columns ("Useful links", "Download the Deezer app").

### Whitespace Philosophy
Big, centered, poster-like blocks with lots of empty dark space around them; one CTA per block.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| Flat | none | Homepage — no box shadows measured |
| Curve | `--curve-height: 70px` convex edge | Transition from the light hero to the dark page |
| Web app | `rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px` | One raised element in the app |

Depth is graphic, not shadowed: the curve, the light card on dark, and the glowing purple wave rings.

## Shapes

| Token | Value | Use |
|---|---|---|
| xs | 4px | Plan cards (offers page) |
| sm | 8px | Nav buttons, offer card (`--input-radius: 8px`, `--tempo-radius-s`) |
| md | 12px | Main buttons (`--tempo-radius-m`) |
| app | 16px | Web app buttons, search |
| badge | 9px / 75% | Elliptical PREMIUM badge |
| full | 256px | `--tempo-radius-full`; circular app elements |

Other shapes: the convex curved top edge of the dark section, and concentric oval outlines around the catalog CTA.

## Components

### Buttons

**Primary** — "Try for free"
- Background `#a238ff`, label `#ffffff`, Inter 16px / 700
- Padding 8px 32px, height 42px, radius 12px
- Hover: background `#9333e8`

**Nav primary** — "Sign up": `#a238ff`, 14px / 700, padding 9px 20px, height 37px, radius 8px; hover `#9333e8`.

**Outlined** — "Log in": transparent, 1px solid `#555257`, `#fdfcfe` 14px / 700, padding 9px 20px, 37px, radius 8px;
hover background `#29282d`.

**White** — "Discover all our plans", "Explore our catalog" (`tempo-btn tempo-btn-m tempo-btn-white`): `#ffffff`,
label `#191922`, 16px / 700, padding 8px 32px, 42px, radius 12px.

**Inverse** — "Get a gift card": `#121216`, white label, same size as primary.

### Badge
"PREMIUM": `#a238ff`, white Deezer Brand 24px / 700 uppercase, padding 4px 15px, 32px tall, radius `9px / 75%`.

### Navigation
80px bar on `#0f0d13`, links Inter 16px / 400 `#fdfcfe`; hover turns the label `#a238ff`.

### Offer card
`#f8f8f9`, radius 8px, padding 24px, 348px wide: PREMIUM badge, "1 MONTH FREE" 46px / 700 uppercase black, "then
$11.99/month", a full-width purple button, and a checklist of features with tick icons.

### Plan cards (offers page)
`#fdfcfe`, radius 4px, padding 24px, 600px wide, with plan badges (Premium purple, Family `#ff673d`).

### FAQ
Questions Inter 20px / 700 `#fdfcfe`; answers 14px / 500 / 25px `#a9a6aa`.

### Footer
`#0f0d13`, 1px `#555257` top border, padding 64px 127px 117px, link text `#d1d1d7`.

### Web app (deezer.com album page)
Black `#000000` UI, 15px / 450 Inter, `#a238ff` "Sign up for free" (radius 16px, padding 12px 24px, 48px),
`#242326` search field (radius 16px, 48px, padding 0px 44px), round artwork (256px radius) and 16px-radius tiles.

## Design System Architecture

Deezer's design system is called **Tempo** — the official
[Design System Manager job posting](https://deezer.teamtailor.com/jobs/7629174-design-system-manager-m-f-d) describes it
as "Deezer's design system", built on Figma libraries (variables, component architecture, Code Connect) with design
tokens consumed in Compose, Swift and React. There is **no public Tempo documentation**; what follows is what deezer.com
exposes.

### Token architecture (observed)
- **Primitives**: `--color-grey-50: #f8f8f9` … `--color-grey-900: #121216`, `--color-white`, `--color-black`.
- **Semantic**: `--color-bg-main`, `--color-bg-secondary`, `--color-bg-tertiary`, `--color-bg-inverse`,
  `--color-text-main`, `--color-text-secondary`, `--color-text-disabled`, `--color-accent-main/strong/weak/light`,
  `--color-intent-error/success/warning`, `--color-border-neutral-primary`, `--color-divider-main`.
- **Brand/plan**: `--color-bg-brand-premium`, `--color-bg-brand-family`, `--color-bg-brand-duo`, `--color-bg-brand-hifi`,
  each with `-selected` and `--color-text-brand-*` pairs.
- **Tempo scale tokens**: `--tempo-radius-2xs: 2px`, `--tempo-radius-xs: 4px`, `--tempo-radius-s: 8px`,
  `--tempo-radius-m: 12px`, `--tempo-radius-l: 16px`, `--tempo-radius-full: 256px`; `--tempo-font-size-xs: 12px` …
  `--tempo-font-size-xl: 48px`; `--tempo-input-size: 48px`.
- **Component classes**: `tempo-btn`, size `tempo-btn-m`, variant `tempo-btn-white`, `tempo-link-btn-m`.
- A separate consent-banner token set is prefixed `--gdpr-` (e.g. `--gdpr-colors-background-accent-primary-hovered: #b560ff`).

### Theming
Brand/plan theming is token-driven (premium, family, duo, trio, hifi, free). The cookie banner declares
`cookie-banner-data-theme="dark"`. The marketing site itself is fixed dark with a light hero.

### Type & spacing systems
Tempo font sizes 12 / 14 / 16 / 24 / 48px; marketing heading tokens `--font-size-h1: 78px`, `--font-size-h2: 64px`,
`--font-size-h3: 20px`. Spacing: `--spacing-default: 16px`, `--default-gap: 14px`.
Typeface: Deezer Sans, a variable family with condensed and extended cuts ([NaN](https://nan.xyz/custom/deezer)).

### Brand
The identity — "a unique purple heart logo" and "a striking new visual profile" — was announced in the
[Deezer newsroom](https://newsroom-deezer.com/2023/11/deezer-new-brand-identity-and-logo/) (November 2023).

### Accessibility
No public accessibility policy for Tempo was found. Measured: focus-ring CSS `0 0 0 2px #fff, 0 0 0 4px #6f27f6` exists
in the stylesheet corpus.

### Delivery
Figma libraries and code components are internal; no npm package is public.

## Do's and Don'ts

### Do
- Keep the page `#0f0d13` with a `#fdfcfe` hero and the curved transition.
- Use `#a238ff` for primary actions and darken to `#9333e8` on hover.
- Set display type in Deezer Brand, heavy and tight; use Inter for everything else.
- Use 12px radius for main buttons and 8px for nav buttons.
- Use the elliptical PREMIUM badge for plan labels.
- Use `#a9a6aa` for long-form reading text on dark.

### Don't
- Don't use pills for buttons.
- Don't set headlines in Inter.
- Don't add drop shadows to marketing cards.
- Don't introduce other accent colors outside the plan tokens.
- Don't loosen the hero line-height.

## Responsive Behavior

### Measured at 390px
- Hero drops from 140px / 126px to 64px / 57.6px (800, uppercase).
- Eyebrow stays 18px / 700; body 14px / 500 / 25px; primary button keeps 16px / 700, padding 8px 32px, 42px.
- Top bar is 60px (`--topbar-height: 60px`) with 0px 16px padding.

### Touch targets
Buttons 42px; nav buttons 37px; app controls 48px.

### Collapsing strategy
Layout collapse beyond the 390px values above was not measured.

## Iteration Guide

1. Canvas `#0f0d13`, text `#fdfcfe`, muted `#a9a6aa`.
2. 80px top bar: logo, three links, outlined Log in, purple Sign up (8px radius).
3. `#fdfcfe` hero with the 140px / 800 uppercase headline, 35px subline, purple 42px button.
4. Curve into dark; 56px / 700 section titles.
5. Offer card `#f8f8f9` with PREMIUM badge (`9px / 75%`) and 46px price.
6. White 12px buttons for secondary actions; purple wave rings around the catalog CTA.
7. FAQ with 20px / 700 questions, 14px / 500 / 25px answers; footer with `#555257` top rule.

### Quick Reference
```
canvas #0f0d13 · hero #fdfcfe · ink #fdfcfe · muted #a9a6aa · dark ink #0f0d13
primary #a238ff · hover #9333e8 · border #555257
display: Deezer Brand (hero 140px/800/126px) · UI: Inter
button: #a238ff · 12px · 8px 32px · 42px · 16px/700
nav button: 8px · 9px 20px · 37px · 14px/700
```
