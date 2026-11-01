---
version: alpha
name: Monzo
category: "Banking & Insurance"
description: "Monzo's marketing system — MonzoSansDisplay at weight 800 for headlines (48.8288px hero, fluid clamp() scale) over MonzoSansText 16px/22.4px body in 60%-alpha deep navy (#09172399), a soft-white #f2f8f3 card canvas on white, deep-navy #091723 pill CTAs (500px radius, 12px 24px) that hover to #2c3a43, Hot Coral #ff4f40 held back for the card and brand moments, 32px card corners and a #112231 footer with 64px top corners."

colors:
  primary: "#091723"
  primary-hover: "#2c3a43"
  on-primary: "#ffffff"
  hot-coral: "#ff4f40"
  canvas: "#f2f8f3"
  background-primary: "#ffffff"
  ink: "#09172399"
  ink-strong: "#091723"
  ink-disabled: "#0917234d"
  inverse-background: "#112231"
  inverse-ink: "#ffffff"
  inverse-ink-secondary: "#ffffffe6"
  inverse-hover: "#ffffffcc"
  inverse-fill-hover: "#ffffff1a"
  secondary-fill-hover: "#0917231a"
  separator: "#0917231a"
  navy-600: "#3b4c54"
  grey-200: "#e3ebe4"
  grey-300: "#c9d0c6"
  grey-400: "#aeb5a7"
  grey-500: "#75817e"
  focus: "#009ace"
  positive: "#248a3d"
  negative: "#d70015"
  inverse-negative: "#ff6961"
  inverse-positive: "#30db5b"
  teal-550: "#016b83"
  blue-500: "#218fb7"
  blue-200: "#bbf6e2"
  pink-300: "#ffa9df"
  lime: "#d9ff6f"

typography:
  heading-1:
    fontFamily: "MonzoSansDisplay, sans-serif"
    fontSize: 48.8288px
    fontWeight: 800
    lineHeight: 58.5946px
    letterSpacing: normal
  heading-1-mobile:
    fontFamily: "MonzoSansDisplay, sans-serif"
    fontSize: 40.6662px
    fontWeight: 800
    lineHeight: 48.7994px
    letterSpacing: normal
  heading-feature:
    fontFamily: "MonzoSansDisplay, sans-serif"
    fontSize: 44px
    fontWeight: 800
    lineHeight: 52.8px
  heading-2:
    fontFamily: "MonzoSansDisplay, sans-serif"
    fontSize: 39.0624px
    fontWeight: 800
    lineHeight: 46.8749px
    letterSpacing: normal
  heading-2-mobile:
    fontFamily: "MonzoSansDisplay, sans-serif"
    fontSize: 33.7337px
    fontWeight: 800
    lineHeight: 40.4804px
  heading-3:
    fontFamily: "MonzoSansDisplay, sans-serif"
    fontSize: 31.2496px
    fontWeight: 700
    lineHeight: 37.4995px
  heading-4:
    fontFamily: "MonzoSansDisplay, sans-serif"
    fontSize: 25px
    fontWeight: 700
    lineHeight: 35px
    letterSpacing: normal
  heading-5:
    fontFamily: "MonzoSansDisplay, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  body-large:
    fontFamily: "MonzoSansText, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: "MonzoSansText, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: normal
  body-strong:
    fontFamily: "MonzoSansText, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22.4px
    letterSpacing: normal
  body-small:
    fontFamily: "MonzoSansText, sans-serif"
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 17.92px
  body-small-strong:
    fontFamily: "MonzoSansText, sans-serif"
    fontSize: 12.8px
    fontWeight: 600
    lineHeight: 17.92px

rounded:
  corner-2x-small: 4px
  corner-x-small: 8px
  corner-small: 12px
  corner-medium: 16px
  corner-large: 32px
  corner-x-large: 64px
  nav-pill: 100px
  corner-3x-large: 128px
  pill: 9999px

spacing:
  3x-small: 2px
  2x-small: 4px
  x-small: 8px
  small: 12px
  medium: 16px
  large: 24px
  x-large: 32px
  2x-large: 48px
  3x-large: 64px
  4x-large: 80px
  5x-large: 96px
  6x-large: 128px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-strong}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 48px
    border: "1px solid #091723"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-strong}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
  button-primary-block:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-strong}"
    rounded: "{rounded.corner-3x-large}"
    padding: 0px 24px
    height: 48px
  button-inverse:
    backgroundColor: "{colors.background-primary}"
    textColor: "{colors.primary}"
    typography: "{typography.body-strong}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 48px
  button-inverse-hover:
    backgroundColor: "{colors.inverse-hover}"
    textColor: "{colors.primary}"
    rounded: "{rounded.pill}"
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.ink-strong}"
    typography: "{typography.body-strong}"
    rounded: "{rounded.corner-3x-large}"
    padding: 0px 24px
    height: 48px
    border: "2px solid #091723"
  button-secondary-hover:
    backgroundColor: "{colors.secondary-fill-hover}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.corner-3x-large}"
  button-secondary-small:
    backgroundColor: transparent
    textColor: "{colors.ink-strong}"
    typography: "{typography.body-small-strong}"
    rounded: "{rounded.corner-3x-large}"
    padding: 0px 16px
    height: 36px
    border: "2px solid #091723"
  button-secondary-inverse:
    backgroundColor: transparent
    textColor: "{colors.inverse-ink}"
    typography: "{typography.body-strong}"
    rounded: "{rounded.corner-3x-large}"
    padding: 0px 24px
    height: 48px
    border: "2px solid #ffffff"
  button-secondary-inverse-hover:
    backgroundColor: "{colors.inverse-fill-hover}"
    textColor: "{colors.inverse-ink}"
    rounded: "{rounded.corner-3x-large}"
  nav:
    backgroundColor: transparent
    height: 87px
    typography: "{typography.body}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.nav-pill}"
    height: 40px
  nav-link-hover:
    textColor: "{colors.ink-strong}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card-product:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    rounded: "{rounded.corner-large}"
    padding: 32px 24px 24px
  feature-tab-active:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.corner-medium}"
    padding: 16px
  step-card-active:
    backgroundColor: "{colors.background-primary}"
    rounded: "{rounded.corner-medium}"
    padding: 24px
  footer:
    backgroundColor: "{colors.inverse-background}"
    textColor: "{colors.inverse-ink}"
    typography: "{typography.body}"
    rounded: 64px 64px 0px 0px
    padding: 32px
  footer-link:
    textColor: "{colors.inverse-ink}"
    typography: "{typography.body-strong}"
    rounded: "{rounded.corner-2x-small}"
    height: 44px
---

## Overview

Monzo's website is a calm, photographic, rounded marketing surface for a UK bank whose identity was born on a coral card. The homepage capture opens with a white top bar — the coral `monzo` wordmark on the left, "Personal" (with a person glyph and chevron) and "Business" (with a briefcase glyph) as quiet nav items, and a single deep-navy pill "Sign up" on the right. Directly beneath sits a full-bleed hero photograph inset into a huge rounded container: a hand tapping a phone showing a Hot Coral card against a market stall of peaches, with the headline "Spend your money on life, not your life on money" set white in MonzoSansDisplay 800, a 20px white sub-paragraph, and a white pill CTA "Open a free Monzo account". Trust badges (Which? Recommended Provider, Current Account Switch Guarantee, FSCS Protected) are pinned into the photo's corners.

Below the hero the page goes quiet: white background, left-aligned 39.0624px navy headlines ("Get the most out of Monzo"), 20px grey-navy intro copy, a navy CTA pill, then a horizontal carousel of product tiles — square photographs or Hot-Coral UI vignettes with rounded corners, a 25px bold title, three lines of 16px secondary copy, and a small outlined "Learn more" pill. Further down, centered section headings ("Quit the app juggling act") introduce story modules on the soft-white `{colors.canvas}` `#f2f8f3` with large rounded corners.

The colour logic is disciplined. **Deep navy** `#091723` is the action colour (every filled CTA, every heading). Body copy is the same navy at 60% alpha — `#09172399` — which is the most-read colour on the page. **Hot Coral** `#ff4f40` is the brand colour (`--color-brand`) but on the site it lives in the logo, the card, the Hot-Coral UI tiles and photography — never on a button. White and `#f2f8f3` alternate as surfaces; the footer flips to `#112231`.

**Key Characteristics:**
- Navy pill CTAs (`#091723`, 500px radius, `12px 24px`) with a hover to navy-700 `#2c3a43`; a white pill variant on photography.
- MonzoSansDisplay 800 headlines over MonzoSansText 400 body — two custom cuts of the same family.
- A fluid `clamp()` type scale (`--step--2` … `--step-6`) — heading sizes such as 48.8288px and 39.0624px are the computed result at 1280px, not hand-picked numbers.
- Body ink is translucent navy (`#09172399`), not grey.
- Very large corner radii: 32px product cards, 64px hero/footer corners, 128px module buttons.
- Hot Coral as an object colour (card, wordmark, UI tiles), not an interface colour.
- Photography with warm light and real hands/phones; Hot-Coral app UI vignettes rendered big ("exaggerated UI").

## Colors

> Source: `web/data/extracted/monzo.json` (homepage, desktop 1280 + mobile 390), `monzo--current-account.json`, the site's own CSS custom properties (`--color-*`, `--semantic-*`, `--alpha-*`) read from `static-assets.monzo.com` stylesheets.

### Brand & Action
- **Primary / Navy 900** (`{colors.primary}` — `#091723`): `--color-navy-900`, aliased as `--semantic-action-fill-primary-default` and `--semantic-content-primary`. Fill of every primary CTA, colour of every heading.
- **Primary Hover / Navy 700** (`{colors.primary-hover}` — `#2c3a43`): `--semantic-action-fill-primary-hover`; measured hover on "Sign up" and "Open a free Monzo account" (`rgb(9,23,35)` → `rgb(44,58,67)`).
- **Hot Coral** (`{colors.hot-coral}` — `#ff4f40`): `--color-brand`, aliased `--semantic-background-accent` / `--semantic-content-accent`. Wordmark, card art, Hot-Coral UI vignettes.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): CTA label colour.

### Surface
- **Canvas / Grey 100** (`{colors.canvas}` — `#f2f8f3`): `--color-grey-100` = `--semantic-background-secondary`. Product cards, story modules, the active feature tab.
- **Background Primary** (`{colors.background-primary}` — `#ffffff`): `--semantic-background-primary`; the page body and top bar, by area the largest surface.
- **Inverse Background / Navy 800** (`{colors.inverse-background}` — `#112231`): `--semantic-inverse-background-primary`; the footer and dark story modules.
- **Grey 200 / 300 / 400 / 500** (`#e3ebe4`, `#c9d0c6`, `#aeb5a7`, `#75817e`): the green-tinted neutral ramp (`--neutral-lighter` … `--neutral-dark`).
- **Navy 600** (`{colors.navy-600}` — `#3b4c54`): `--semantic-neutral-darker`; also `--semantic-content-link-hover`.

### Text
- **Ink** (`{colors.ink}` — `#09172399`): `--semantic-content-secondary` (`--alpha-navy-60`). Most-read colour on the page — paragraphs, card copy, nav links.
- **Ink Strong** (`{colors.ink-strong}` — `#091723`): headings, bold inline labels, outlined button text.
- **Ink Disabled** (`{colors.ink-disabled}` — `#0917234d`): `--semantic-content-disabled` (`--alpha-navy-30`).
- **Inverse Ink** (`{colors.inverse-ink}` — `#ffffff`) and **Inverse Ink Secondary** (`{colors.inverse-ink-secondary}` — `#ffffffe6`, `--alpha-white-90`): text on photography and on navy.

### Interaction overlays
- **Secondary fill hover** (`{colors.secondary-fill-hover}` — `#0917231a`): `--semantic-action-fill-secondary-hover` (`--alpha-navy-10`); measured hover on outlined "Explore …" buttons.
- **Inverse fill hover** (`{colors.inverse-fill-hover}` — `#ffffff1a`): measured hover on outlined buttons on dark modules.
- **Inverse hover** (`{colors.inverse-hover}` — `#ffffffcc`): measured hover of the white pill CTA (`rgba(255,255,255,0.8)`).
- **Separator** (`{colors.separator}` — `#0917231a`): `--semantic-separator`, hairlines and field borders.

### Semantic
- **Focus** (`{colors.focus}` — `#009ace`): `--color-blue-accent` = `--semantic-action-outline-focus` and `--semantic-field-outline-focus`.
- **Positive** (`{colors.positive}` — `#248a3d`, `--color-green-550`) / **Inverse Positive** (`#30db5b`, `--color-green-300`).
- **Negative** (`{colors.negative}` — `#d70015`, `--color-red-550`) / **Inverse Negative** (`#ff6961`, `--color-red-450`).

### Secondary palette
The 2022 refresh announced "secondary colours … orange, pink, yellow-green, teal, blue, and khaki" ([Monzo blog](https://monzo.com/blog/weve-had-a-little-makeover)). In the shipped CSS these appear as `--color-teal-550` `#016b83` (also `--semantic-product-flex-purchase`), `--color-blue-500` `#218fb7`, `--color-blue-200` `#bbf6e2`, `--color-pink-300` `#ffa9df` (`--semantic-product-flex-build`) and a lime `#d9ff6f` used in product illustrations. They tint product modules — never CTAs.

## Typography

### Font Family
Two families are served by `@font-face`: **MonzoSansDisplay** (weights 600/700/800 loaded) for headings and **MonzoSansText** (400/600/700) for everything else. The CSS exposes them as `--font-stack-title: "MonzoSansDisplay",sans-serif` and `--font-stack-body: "MonzoSansText",sans-serif`. Per Monzo, "Monzo Sans" is "a custom cut of Universal Sans, meaning it's unique to Monzo … chosen for maximum readability, with generous dots and curled ends" ([Monzo blog](https://monzo.com/blog/weve-had-a-little-makeover)). Universal Sans is Briton Smith's customisable variable type system from Family Type ([It's Nice That](https://www.itsnicethat.com/articles/briton-smith-universal-sans-graphic-design-digital-011119)). The CSS also declares an `Oldschool` face — the refresh named Oldschool Grotesk as the "hero typeface" for campaign work ([Creative Review](https://www.creativereview.co.uk/monzo-branding-ragged-edge/)); it is not used for any measured web role.

### Hierarchy (measured at 1280px unless noted)

| Token | Family | Size | Weight | Line height | Use |
|---|---|---|---|---|---|
| `{typography.heading-1}` | MonzoSansDisplay | 48.8288px | 800 | 58.5946px | Hero h1 (`--text-heading-1` = `--step-5`) |
| `{typography.heading-1-mobile}` | MonzoSansDisplay | 40.6662px | 800 | 48.7994px | Hero h1 at 390px |
| `{typography.heading-feature}` | MonzoSansDisplay | 44px | 800 | 52.8px | Survey-results heading |
| `{typography.heading-2}` | MonzoSansDisplay | 39.0624px | 800 | 46.8749px | Section h2 (`--step-4`) |
| `{typography.heading-2-mobile}` | MonzoSansDisplay | 33.7337px | 800 | 40.4804px | Section h2 at 390px |
| `{typography.heading-3}` | MonzoSansDisplay | 31.2496px | 700 | 37.4995px | Story module titles (`--step-3`) |
| `{typography.heading-4}` | MonzoSansDisplay | 25px | 700 | 35px | Product tile titles (`--step-2`) |
| `{typography.heading-5}` | MonzoSansDisplay | 20px | 600 | 28px | Feature tab titles |
| `{typography.body-large}` | MonzoSansText | 20px | 400 | 28px | Hero/section intros (`--text-body-large`) |
| `{typography.body}` | MonzoSansText | 16px | 400 | 22.4px | Default body (`--text-body`) |
| `{typography.body-strong}` | MonzoSansText | 16px | 600 | 22.4px | Button labels, footer links |
| `{typography.body-small}` | MonzoSansText | 12.8px | 400 | 17.92px | Legal and Ts&Cs (`--text-body-small`) |
| `{typography.body-small-strong}` | MonzoSansText | 12.8px | 600 | 17.92px | "Learn more" small pills |

### Principles
- **Line height 1.4 by default.** `--default-line-height: 1.4` — 16px → 22.4px, 12.8px → 17.92px; headings run at 1.2 (48.8288 → 58.5946).
- **Letter-spacing is `normal` everywhere.** No measured role tracks in or out.
- **Display is heavy, body is plain.** Headings use 700–800; text uses 400 with 600 for emphasis — no light weights.
- **Fluid, not stepped.** Sizes come from `clamp()` steps on a ~1.2–1.25 ratio (see Design System Architecture), so they are non-round numbers at any given viewport.

### Note on Font Substitutes
MonzoSansDisplay and MonzoSansText are proprietary custom cuts and are not licensable. The source design is Universal Sans by Family Type (commercial). Without a licence, use a neutral grotesque with round dots and open terminals at the same weights (800 display / 400 body) and keep line height at 1.4 and tracking at `normal`; do not imitate the custom glyphs.

## Layout

### Spacing System
The CSS defines a T-shirt spacing scale: `--spacing-3x-small` 2px · `--spacing-2x-small` 4px · `--spacing-x-small` 8px · `--spacing-small` 12px · `--spacing-medium` 16px · `--spacing-large` 24px · `--spacing-x-large` 32px · `--spacing-2x-large` 48px · `--spacing-3x-large` 64px · `--spacing-4x-large` 80px · `--spacing-5x-large` 96px · `--spacing-6x-large` 128px. Measured on the homepage, the most frequent gaps are 8px, 16px, 24px (then 32/48/64px) and the most frequent paddings 24px and 64px.

### Grid & Container
- Grid variables are scoped to `.monzo-com-design-system` and redefined per breakpoint: Desktop (≥1041px) 12 columns / 24px gutter / 64px margin; Tablet Landscape (769–1040px) 6 / 24px / 32px; Tablet Portrait (481–768px) 1 / 12px / 32px; Mobile (≤480px) 1 / 12px / 24px. Each breakpoint carries a `--viewport-width-breakpoint` label ("Desktop", "Tablet Landscape", "Tablet Portrait", "Mobile").
- `--viewport-width-max` ranges 480px → 768px → 1040px → 1568px across breakpoints.
- Header height is `--header-height: 87px` on desktop (65px measured on mobile).
- The hero image sits inside a container inset from the viewport edge with 64px corners; content columns otherwise align to the 64px desktop margin.

### Whitespace Philosophy
Sections are separated by generous white space (64px+ paddings dominate). Within a module the rhythm tightens to 8/16/24px. Copy columns stay narrow (intro paragraphs wrap at roughly half the container) so the 20px body-large reads in two or three lines.

## Elevation & Depth

| Level | Token | Value |
|---|---|---|
| 0 | — | Flat. All measured homepage elements have no visible shadow. |
| 1 | `--elevation-level1-box-shadow` | `0px 2px 8px rgba(0,0,0,.16)` |
| 2 | `--elevation-level2-box-shadow` | `0px 4px 16px rgba(0,0,0,.16)` |
| 3 | `--elevation-level3-box-shadow` | `0px 8px 32px rgba(0,0,0,.16)` |
| 4 | `--elevation-level4-box-shadow` | `0px 16px 48px rgba(0,0,0,.24)` |
| 5 | `--elevation-level5-box-shadow` | `0px 32px 64px rgba(0,0,0,.24)` |

Depth on monzo.com comes from colour blocking — white vs `#f2f8f3` vs `#112231` — and from photography, not from shadows. Overlay gradients on photos are tokenised (`--semantic-overlaygradient-start` transparent → `-middle` `rgba(0,0,0,.38)` → `-end` `rgba(0,0,0,.56)`) to keep white headlines legible.

## Shapes

### Border Radius Scale

| Token | CSS variable | Value | Use |
|---|---|---|---|
| `{rounded.corner-2x-small}` | `--corner-radius-2x-small` | 4px | Footer links, focus rings, small chips |
| `{rounded.corner-x-small}` | `--corner-radius-x-small` | 8px | Small media |
| `{rounded.corner-small}` | `--corner-radius-small` | 12px | Compact cards |
| `{rounded.corner-medium}` | `--corner-radius-medium` | 16px | Feature tabs, step cards, product tile images |
| `{rounded.corner-large}` | `--corner-radius-large` | 32px | Product cards (24px at small breakpoints) |
| `{rounded.corner-x-large}` | `--corner-radius-x-large` | 64px | Hero container, footer top corners |
| `{rounded.nav-pill}` | — | 100px | Nav item hover pill |
| `{rounded.corner-3x-large}` | `--corner-radius-3x-large` | 128px | Module buttons (outlined + filled) |
| `{rounded.pill}` | — | 9999px | Header/hero CTA pill — the site literally sets `500px` |

### Imagery Geometry
Photography is always clipped into a rounded container (16px on tiles, 64px on the hero). The physical card motif — "soft rounded corners and bold typography" ([Monzo blog](https://monzo.com/blog/reimagining-monzo-com-building-a-modular-high-fidelity-web-design-system-that-scales)) — is the source of the large-radius language.

## Components

### Buttons

**`button-primary`** — the navy pill (header "Sign up", "View full results …").
- Background `{colors.primary}` `#091723`, text `{colors.on-primary}`, `{typography.body-strong}` (16px/600), padding `12px 24px`, radius 500px (`{rounded.pill}`), 1px border in the same navy. Height 51px in the header, 48px in content.
- **Hover** (`button-primary-hover`): background and border `{colors.primary-hover}` `#2c3a43`.
- Mobile header variant measured at 13.282px text, `8px 16px` padding, 37px tall.

**`button-primary-block`** — navy CTA inside content modules ("Open a free Monzo account", "How we protect your money"): `#091723`, white 16px label (600 inside `<b>`), padding `0px 24px`, height 48px, radius 128px. Hover → `#2c3a43`.

**`button-inverse`** — white pill on photography (hero "Open a free Monzo account"): `#ffffff` fill, `#091723` text, `12px 24px`, 48px tall. Hover → `rgba(255,255,255,0.8)` (`{colors.inverse-hover}`).

**`button-secondary`** — outlined navy ("Explore Salary Sorter", "View all"): transparent, `2px solid #091723`, `#091723` text, `0px 24px`, 48px, radius 128px. Hover fill `{colors.secondary-fill-hover}` `#0917231a`.

**`button-secondary-small`** — "Learn more" under product tiles: same outline, 12.8px/600 label, `0px 16px`, 36px tall.

**`button-secondary-inverse`** — on navy modules: `2px solid #ffffff`, white text; hover fill `#ffffff1a`.

The CSS also tokenises loading/disabled states (`--semantic-action-fill-primary-loading`, `--semantic-action-fill-primary-disabled` = `--alpha-navy-10`) — use those, not ad-hoc opacity.

### Cards & Containers

**`card-product`** — account cards on `/` and `/current-account` ("Personal account", "Joint account", "Under 16s account"): background `{colors.canvas}` `#f2f8f3`, text `#091723`, radius 32px, padding `32px 24px 24px`, 2px border slot, no shadow.

**Product tile (carousel)** — image (photo or Hot-Coral UI vignette) with 16px corners, then `{typography.heading-4}` title, `{typography.body}` copy in `{colors.ink}`, and a `button-secondary-small`.

**`feature-tab-active`** — the selected item in the "Call status / Instant notifications / Card freeze" list: `#f2f8f3` fill, 16px radius, 16px padding; inactive siblings are transparent.

**`step-card-active`** — "Step 1 Open a free Monzo account": white fill, 16px radius, 24px padding, inactive steps transparent.

### Navigation

**`nav`** — transparent header, 87px tall at desktop. Left: coral wordmark. Then "Personal" (menu button with chevron) and "Business" in `{typography.body}` at `{colors.ink}`. Right: `button-primary`.
- **`nav-link`** — 40px tall, 100px radius; hover darkens the text from `#09172399` to `#091723`.

### Links
**`link`** — inline text links (e.g. "currency converter") inherit the 16px body and the 60%-navy ink. CSS: `--semantic-content-link-default` navy-900, `--semantic-content-link-hover` navy-600.

### Footer
**`footer`** — `#112231` panel with **64px top corners only** (`64px 64px 0px 0px`), 32px padding, inset from the viewport. Column headings in MonzoSansDisplay 25px/700 white; links white `{typography.body-strong}` with a 4px radius focus/hover box, 44px tall; legal text `{typography.body-small}` white.

### Forms
No form field renders on the measured pages. The CSS ships the field tokens (`--semantic-field-fill-default` white, `--semantic-field-border-default` `--alpha-navy-10`, `--semantic-field-border-hover` `--alpha-navy-30`, `--semantic-field-border-active` navy-900, `--semantic-field-border-error` red-550, `--semantic-field-outline-focus` blue-accent); no rendered geometry was measured, so no `text-input` component is declared.

## Design System Architecture

Monzo publishes **no public design-system documentation site or token package**. What it has published is a write-up of the web system, brand-refresh notes, an Android engineering story and a Figma writing kit; the rest below is read from the shipped CSS on monzo.com.

### Token architecture
- Monzo's design team describes the monzo.com rebuild as resting on "semantic design tokens for colour, typography, spacing, and motion" that are "accessibility-minded and brand-expressive, supporting future themes without refactoring" ([Reimagining monzo.com, Monzo blog, May 2026](https://monzo.com/blog/reimagining-monzo-com-building-a-modular-high-fidelity-web-design-system-that-scales)).
- The CSS confirms a two-tier model:
  - **Primitives**: `--color-navy-900` `#091723`, `--color-navy-800` `#112231`, `--color-navy-700` `#2c3a43`, `--color-grey-100` `#f2f8f3` … `--color-grey-500` `#75817e`, `--color-red-550`, `--color-green-550`, `--color-blue-accent`, `--color-brand` `#ff4f40`, plus alpha ramps `--alpha-navy-0…90` and `--alpha-white-0…90` in steps of 10.
  - **Semantic**: `--semantic-{group}-{role}-{state}`, e.g. `--semantic-action-fill-primary-default`, `--semantic-action-fill-primary-hover`, `--semantic-action-border-secondary-default`, `--semantic-content-secondary`, `--semantic-field-border-error`, `--semantic-background-overlay-dark`, `--semantic-separator`.
  - Component-level variables exist only locally (`--checkbox-outer-hover`, `--nav-pill-background`, `--card-carousel-fade-color`).
- Other foundations follow the same T-shirt naming: `--spacing-*`, `--size-*` (1px … 1440px), `--corner-radius-*`, `--elevation-level1…5-box-shadow`, `--motion-duration-*` (instant 0ms, short 100ms, medium 200ms, long 300ms, extra-long 400ms, super-long 600ms), `--motion-easing-*` (`flow` `cubic-bezier(0.22,0,0.12,1)`, `slow-down`, `speed-up`, `linear`) and spring presets (`--motion-spring-default/gentle/slow-*`).

### Theming
- Theming is done by **inverse token sets**, not a dark mode: every semantic role has a `--semantic-inverse-*` twin (`--semantic-inverse-background-primary` navy-800, `--semantic-inverse-content-primary` white, `--semantic-inverse-action-fill-primary-default` white, hover `--color-grey-200`). Dark modules swap to the inverse set.
- Page-level themes are CSS-module classes that re-declare the token set — e.g. `.tokens_flexPage__…` redefines `--background-primary`, `--content-secondary`, `--link-hover` etc. for the Flex product page. The global scope is the `.monzo-com-design-system` class.
- No `prefers-color-scheme` rule or `[data-theme]` switch ships on monzo.com. The blog cites "supporting future themes without refactoring" as a design goal, not a shipped feature ([source](https://monzo.com/blog/reimagining-monzo-com-building-a-modular-high-fidelity-web-design-system-that-scales)).
- In the Android app, Monzo built its own theme on Jetpack Compose foundation APIs: "Our theme only consists of the properties we define" ([Android Developers case study](https://developer.android.com/stories/apps/monzo-compose)).

### Type & spacing systems
- Type is a **fluid modular scale**: `--step--2` … `--step-6`, each a `clamp()` between a 320-ish and a 1440-ish viewport (e.g. `--step-0: clamp(1rem,1rem + 0vw,1rem)`, `--step-5: clamp(2.4883rem,2.2447rem + 1.2182vw,3.0518rem)`). The minimum end follows a 1.2 ratio (1, 1.2, 1.44, 1.728 …) and the maximum end a 1.25 ratio (1, 1.25, 1.5625, 1.9531 …). Semantic aliases map onto steps: `--text-billboard` = step-6, `--text-heading-1` = step-5 … `--text-heading-5` = step-1, `--text-body-large` = step-1, `--text-body` = step-0, `--text-body-small` = step--1.
- Spacing is a T-shirt scale from 2px to 128px with 8px dominant; grid is 12/6/1 columns with 24px gutters and 64px margins at desktop.

### Component model
- The web system is a "library of reusable modular content blocks" — "high-impact hero sections and feature highlights to UI spotlights and card carousels" — built so marketers can "drag content blocks onto the canvas and reorder sections" in Figma. "Components in Figma and code are engineered for maximum API parity". An audit found "seven core web page templates that all our web pages fall into" ([source](https://monzo.com/blog/reimagining-monzo-com-building-a-modular-high-fidelity-web-design-system-that-scales)).
- On the measured pages the inventory is: header + nav pills, hero (photo + inverse CTA), product carousel tiles, product cards, feature-tab list, numbered steps, story modules (light and inverse), survey/result tiles, FAQ/accordion and footer. Buttons come as primary (filled navy), inverse (filled white), secondary (2px outline) and inverse-secondary, each with default/hover/active/loading/disabled tokens.
- The app's components are custom Compose components: "Monzo used the foundation APIs to build their own component library, using the Material components as reference" with "slot-based APIs" ([Android Developers](https://developer.android.com/stories/apps/monzo-compose)).

### Accessibility
- "Accessibility is built in (focus, contrast, keyboard, screen readers) and measured against WCAG targets" ([Monzo blog](https://monzo.com/blog/reimagining-monzo-com-building-a-modular-high-fidelity-web-design-system-that-scales)). The secondary palette was "carefully selected to maximise accessibility" ([Monzo Community Q&A](https://community.monzo.com/t/we-ve-given-our-visual-brand-a-refresh-q-a-w-jesse-senior-brand-designer/139681)).
- Focus is tokenised: `:focus-visible { outline: var(--size-3x-small) solid var(--semantic-action-outline-focus); outline-offset: var(--spacing-3x-small) }` — a 2px `#009ace` outline offset 2px. Some controls use a box-shadow double ring instead: `0 0 0 var(--size-3x-small) var(--semantic-background-primary), 0 0 0 calc(var(--size-3x-small)*2) var(--semantic-action-outline-focus)`.
- Motion is wrapped in `@media (prefers-reduced-motion: no-preference)`. A "Skip to Content" link is the first focusable element.
- Measured CTAs are 48px tall (51px in header), above common 44px touch targets.

### Delivery
- monzo.com is a Next.js build served from `static-assets.monzo.com/monzo-com/<hash>/_next/…` (visible in stylesheet URLs); tokens ship as CSS custom properties.
- No public npm token package or public Figma UI kit was found. Monzo does publish its **Product Writing System** as a Figma Community file ([Monzo blog, Feb 2025](https://monzo.com/blog/weve-made-our-writing-system-available-to-all)), with the principles "Keep your writing short", "Write in the active voice", "Be consistent".
- Brand refresh (typefaces, palette, illustration by Ola Dobrzyńska, "exaggerated UI") was made with agency Ragged Edge ([Creative Review](https://www.creativereview.co.uk/monzo-branding-ragged-edge/)).

## Do's and Don'ts

### Do
- Use navy `#091723` for every filled CTA and every heading; hover to `#2c3a43`.
- Set body copy in `#09172399` (navy at 60%), not a grey hex.
- Use MonzoSansDisplay 800 for h1/h2, 700 for h3/h4, and MonzoSansText 400/600 for text.
- Keep line height at 1.4 for text, 1.2 for headings, letter-spacing `normal`.
- Put cards on `#f2f8f3` with 32px corners and no shadow.
- Clip all photography into rounded containers (16px tiles, 64px hero).
- Use Hot Coral `#ff4f40` for the brand mark, card art and UI vignettes only.
- Write short, active, consistent microcopy ("Sign up", "Learn more", "Open a free Monzo account").

### Don't
- Don't make a Hot-Coral button — the site never does.
- Don't add drop shadows to cards; depth comes from surface colour.
- Don't use square or small-radius buttons — they are pills (500px) or 128px-radius blocks.
- Don't use pure black for text; even the footer uses navy-800 `#112231` as the surface.
- Don't track headings negatively or set them in light weights.
- Don't round the fluid sizes to "nice" numbers in a fixed-viewport mock — 48.8288px is the real 1280px value.

## Responsive Behavior

### Breakpoints
Media queries in the shipped CSS (rem at 16px):

| Query | px | Notes |
|---|---|---|
| `max-width: 30rem` / `min-width: 30.0625rem` | 480 | Mobile ↔ large mobile (`--viewport-width-max: 480px`) |
| `max-width: 48rem` / `min-width: 48.0625rem` | 768 | Tablet portrait (`--viewport-width-max: 768px`) |
| `min-width: 51.25rem` | 820 | Frequent layout switch |
| `min-width: 65.0625rem` | 1041 | Desktop (`--viewport-width-min: 1041px`, max 1040px below) |
| `min-width: 90rem` | 1440 | Wide; fluid type reaches its max |

### Mobile (390px, measured)
- h1 drops to 40.6662px/48.7994px; h2 to 33.7337px/40.4804px. Body stays 16px/22.4px.
- Header shrinks to 65px; "Sign up" becomes 13.282px with `8px 16px` padding, 37px tall.

### Touch Targets
- Content CTAs keep 48px height on all breakpoints; nav items are 40px.

### Collapsing Strategy
- Corner radii are redefined per breakpoint on the same token names: at ≥769px `--corner-radius-large` 32px / `--corner-radius-x-large` 64px / `--corner-radius-3x-large` 128px; at 394–768px `--corner-radius-x-large` 48px / `--corner-radius-3x-large` 80px; base values are smaller (`--corner-radius-large` 24px, `--corner-radius-x-large` 32px).

## Iteration Guide

1. Start from the surface: white page, `#f2f8f3` cards, `#112231` footer.
2. Headline in `{typography.heading-1}` / `{typography.heading-2}`, intro in `{typography.body-large}`, body in `{typography.body}` at `{colors.ink}`.
3. One navy `button-primary` per section; supporting actions are `button-secondary` outlines.
4. Reach for tokens by their CSS names (`--semantic-action-fill-primary-hover`, `--corner-radius-large`) when coding.
5. Use Hot Coral only inside imagery or as the logo.
6. Verify contrast: white on `#091723`, `#09172399` on white and on `#f2f8f3`.
7. Re-run `node web/scripts/verify-designs.mjs --slug=monzo` after edits.
