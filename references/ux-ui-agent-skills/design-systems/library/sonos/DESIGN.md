---
version: alpha
name: Sonos
category: "Music & Audio"
description: "Sonos sets everything in aktiv-grotesk (Aktiv Grotesk) at 400 and 500 on a white #ffffff canvas with black #000000 ink, cinematic full-bleed lifestyle video, charcoal #2e2e2e promo bands and footer, light #f4f4f4 product panels, and 80px-radius pill buttons — filled black \"Add to cart\", black-outlined white \"Shop new arrivals\", light #f4f4f4 \"Subscribe\"."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  ink-soft: "#2e2e2e"
  grey-dark: "#333333"
  grey-medium: "#737373"
  grey-medium-light: "#bfbfbf"
  grey-medium-lighter: "#cccccc"
  grey-light: "#e0e0e0"
  grey-lighter: "#f4f4f4"
  grey-lightest: "#f5f5f5"
  card-border: "#cdcdcd"
  soft-white: "#eeeeee"
  slate: "#d8d8d8"
  sale: "#b30911"
  red-darker: "#d92f18"
  accent-gold: "#c59c6e"
  scrim: "#000000cc"
  juniper: "#465c35"
  lime: "#c0fd00"
  sage: "#cee7b6"
  merlot: "#65303d"
  orange: "#fb7522"
  rose: "#fec8a6"
  marine: "#1f355a"
  grape: "#a76fff"
  twilight: "#d6c8ff"

typography:
  display-hero:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 96px
    fontWeight: 500
    lineHeight: 115.2px
  display-hero-mobile:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 54px
    fontWeight: 500
    lineHeight: 64.8px
  display-lg:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 72px
    fontWeight: 500
    lineHeight: 86.4px
  heading-1:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 64px
    fontWeight: 500
    lineHeight: 76.8px
  heading-2:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 57.6px
  heading-newsletter:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 42px
    fontWeight: 500
    lineHeight: 42px
  heading-3:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  product-title:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 40px
  tile-title:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
  body-lead:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 21px
    fontWeight: 400
    lineHeight: 27.3px
  body-lead-medium:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 21px
    fontWeight: 500
    lineHeight: 27.3px
  button:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 23.4px
  body:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  body-tight:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: -0.18px
  nav-link:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  body-sm:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  footer-heading:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
  legal:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.192px
  caption:
    fontFamily: "aktiv-grotesk, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px

rounded:
  stat: 10px
  sm: 12px
  category: 20px
  media: 24px
  feature: 32px
  promo: 50px
  pill: 80px
  dot: 9999px
  swatch: 50%

spacing:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 48px
  grid-x1: 47.4074px
  grid-x2: 94.8148px
  section: 112px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 48px
    height: 59px
    border: "2px solid #000000"
  button-primary-hover:
    opacity: 0.7
  button-primary-sm:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 43px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 48px
    height: 59px
    border: "2px solid #000000"
  button-secondary-hover:
    opacity: 0.7
  button-outline-on-dark:
    backgroundColor: transparent
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 48px
    border: "2px solid #ffffff"
  button-light:
    backgroundColor: "{colors.grey-lighter}"
    textColor: "{colors.ink-soft}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 48px
    height: 59px
    border: "2px solid #f4f4f4"
  link-inline:
    textColor: "{colors.ink-soft}"
    typography: "{typography.body}"
    textDecoration: underline
  promo-bar:
    backgroundColor: "{colors.ink-soft}"
    textColor: "{colors.on-primary}"
    typography: "{typography.legal}"
    padding: 12px 47.4074px
    height: 52px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    height: 152px
  promo-card:
    backgroundColor: "{colors.ink-soft}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.promo}"
  stat-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.stat}"
    border: "1px solid #cdcdcd"
  category-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.category}"
    padding: 0px 0px 32px
    border: "1px solid #e0e0e0"
  feature-card:
    backgroundColor: "{colors.grey-lighter}"
    textColor: "{colors.ink}"
    rounded: "{rounded.feature}"
    padding: 12px 12px 30px
  product-panel:
    backgroundColor: "{colors.grey-lighter}"
    textColor: "{colors.ink}"
    rounded: 16px
    padding: 59.7037px
  footer:
    backgroundColor: "{colors.ink-soft}"
    textColor: "{colors.grey-lightest}"
    typography: "{typography.body-sm}"
  footer-link:
    textColor: "{colors.grey-medium-light}"
    typography: "{typography.body-sm}"
---

## Overview

Sonos's site (`https://www.sonos.com/en-us/home`) is a quiet black-and-white frame around warm, cinematic lifestyle footage. The capture
opens with a 52px charcoal (`#2e2e2e`) promo bar ("Get ahead of the holidays. Save up to 25%." plus an underlined "Shop"), then a white
header with the SONOS wordmark on the left, seven centred nav links (Sale, Shop, New Arrivals, Sonos 27, Learn, Support, Professional)
and three icons on the right. Below is a full-bleed video hero, a softly blurred kitchen scene with a speaker, carrying a two-line
96px / 500 white headline ("Love the sound. Feel the system.") and a single white pill button with a black outline ("Shop new arrivals").

Further down, the page alternates three moods. **Promo cards** are charcoal with a 50px radius, split into a text half and an
illustrated product half (sticky-note collage with handwritten product names: "Sub 4", "Era 300", "Arc Ultra"). **Editorial statements**
are huge centred black headlines on white ("Hear how sound should sound", 96px / 500). **Product stories** pair a 64px / 500 headline and
21px body copy on the left with a product render floating on white on the right, plus a small bordered stat card ("4000+ patented
innovations"). Black full-bleed video sections ("Breeze through setup") and a light `#f4f4f4` service band come before the charcoal footer.

**Key characteristics**

- **One typeface:** aktiv-grotesk (Aktiv Grotesk), which the 2025 brand guidelines name as the brand typeface with Light, Regular, Medium and Bold weights. The site mostly uses 400 and 500, with 700 for footer headings.
- **Black is the action colour.** The filled "Add to cart" is `#000000` with white text, and secondary buttons are white with a 2px black border. Both use an 80px radius (a full pill at 59px tall).
- **Hover is opacity.** Measured hovers drop buttons and nav links to `opacity: 0.7`; colours don't change.
- **Big, medium-weight headlines** (96 / 72 / 64px at 500) with 1.2 line-height, over 21px / 27.3px body copy.
- **Rounded containers everywhere except the hero:** 50px promo cards, 32px feature cards, 24px media, 20px category tiles, 16px product panels, 10px stat cards.
- **Colour comes from photography and the seasonal palette**, never from UI chrome.

### Imagery & art direction
- **Lifestyle video**: the hero is a defocused, warm-toned interior (plants, framed art, a marble table with fruit) with the white headline centred over it. The guidelines call for a "Lived-in but tidy" style, minimal clutter and grain, and cables that appear plugged in.
- **Product renders**: speakers such as Roam appear as clean renders on white with a soft floor shadow. The guidelines list three render types: Hero, Exploded View, Sets / Collections.
- **Illustration in promos**: the holiday promo card uses a collage of coloured sticky notes (lilac, orange) with handwritten product names ("Sub 4", "Era 300", "Arc Ultra") behind white product renders.
- **Wordmark**: the SONOS ambigram sits top-left in the header; in campaigns it may run vertically (guidelines).
- **Microcopy**: short, confident, sentence case. "Love the sound. Feel the system.", "Hear how sound should sound", "Shop new arrivals", "Save up to 25%".
- **Motion**: hero media autoplays with a circular pause control (28×28, `2px solid #ffffff`, 50% radius) at the right edge.

## Colors

> Sources: `web/data/extracted/sonos.json` (home), `sonos--product.json` (`/en-us/shop/era-100`), `sonos--speakers.json` (`/en-us/shop`),
> the site's `--color-*` custom properties, and the official
> [Sonos Brand Guidelines (January 2025)](https://cdn.mediavalet.com/usva/sonos/qWHLQfIa8EiB0BbE43ivPg/6wCn0DDR8Uuc5YtoEc37Zg/Original/Sonos%20Brand%20Guidelines_2025.pdf)
> linked from [docs.sonos.com/docs/media-kit](https://docs.sonos.com/docs/media-kit).

### UI core (live site)
- **Primary / Black** (`{colors.primary}` — `#000000`): `--color-main` / `--color-black`; filled "Add to cart", button borders, headlines, ink.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): `--color-base`; text on black.
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background (body `#ffffff`; 50% of the capture's pixels).
- **Ink** (`{colors.ink}` — `#000000`) and **Ink Soft** (`{colors.ink-soft}` — `#2e2e2e`, `--color-grayDarkest`): body copy and lead paragraphs use `#2e2e2e`; headings use `#000000`. `#2e2e2e` is also the promo bar, promo card and footer background.
- **Grey ramp:** `--color-greyDark #333333` (swatch borders, secondary copy), `--color-greyMedium #737373` (captions, quote attribution), `--color-greyMediumLight #bfbfbf` (footer links, footer rule), `--color-greyMediumLighter #cccccc`, `--color-greyLight #e0e0e0` (category tile border, header bottom rule), `--color-greyLighter #f4f4f4` (feature cards, product panels, light button), `--color-greyLightest #f5f5f5` (text on charcoal), `--color-soft-white #eeeeee`.
- **Card Border** (`{colors.card-border}` — `#cdcdcd`): stat card border.
- **Sale** (`{colors.sale}` — `#b30911`): `--color-redDarkest`; "Save $40"-style savings labels (14px / 400) on the product and shop pages. `--color-redDarker #d92f18` is also declared.
- **Accent Gold** (`{colors.accent-gold}` — `#c59c6e`): background of the "Skip to main content" link.
- **Scrim** (`{colors.scrim}` — `#000000cc`): the fixed overlay behind the open menu/modal (`rgba(0, 0, 0, 0.8)`).

### Brand palette (official guidelines)
The guidelines define a **Core** palette (Black `#141414`, White `#FFFFFF`, Slate `#D8D8D8`) and a **Secondary** palette "for storytelling
around specific product moments and promotions":

| Name | Hex | Live token |
|---|---|---|
| Juniper | `#465C35` | `--color-greenDark` |
| Lime | `#C0FD00` | `--color-greenMedium` |
| Sage | `#CEE7B6` | `--color-greenLight` |
| Merlot | `#65303D` | `--color-orangeDark` |
| Orange | `#FB7522` | `--color-orangeMedium` |
| Rosé | `#FEC8A6` | `--color-orangeLight` |
| Marine | `#1f355a` | `--color-purpleDark` |
| Grape | `#A76FFF` | `--color-purpleMedium` |
| Twilight | `#D6C8FF` | `--color-purpleLight` |

**Discrepancy:** the guidelines' core Black is `#141414`, but the live site renders text and buttons in pure `#000000`. The live value is
used for `{colors.primary}` and `{colors.ink}`. Slate `#D8D8D8` (`{colors.slate}`) appears in the site's CSS corpus.

## Typography

### Font Family
**aktiv-grotesk** (`aktiv-grotesk, Helvetica, Arial, sans-serif`), loaded as a variable range `aktiv-grotesk 100 900`. It covers 100% of
measured characters on all three sampled pages. The [Sonos brand-refresh post](https://www.sonos.com/pl-pl/blog/sonos-brand-design-refresh)
says Sonos moved "from Helvetica Neue as its primary font" to Aktiv Grotesk. The 2025 guidelines list the brand weights as **Light,
Regular, Medium, Bold**.

### Hierarchy

| Token | Size | Weight | Line height | Letter spacing | Use |
|---|---|---|---|---|---|
| `{typography.display-hero}` | 96px | 500 | 115.2px | normal | Hero h1, editorial statements |
| `{typography.display-hero-mobile}` | 54px | 500 | 64.8px | normal | Hero h1 at 390px |
| `{typography.display-lg}` | 72px | 500 | 86.4px | normal | "Create your perfect sound system", "You may also like" |
| `{typography.heading-1}` | 64px | 500 | 76.8px | normal | Story headlines (`tw-typography-h3`), shop h1 |
| `{typography.heading-2}` | 48px | 500 | 57.6px | normal | "Mix and match speakers…" |
| `{typography.heading-newsletter}` | 42px | 500 | 42px | normal | "Never miss a beat or an offer" |
| `{typography.heading-3}` | 40px | 400 | 48px | normal | Promo-card title, "4000+" stat |
| `{typography.product-title}` | 40px | 500 | 40px | normal | Product page h1 "Era 100" |
| `{typography.tile-title}` | 32px | 500 | — | — | Shop-page product tile names (most-used size there) |
| `{typography.body-lead}` | 21px | 400 | 27.3px | normal | Story body copy (most-used homepage size) |
| `{typography.body-lead-medium}` | 21px | 500 | 27.3px | normal | Media-card titles "Feel the bass with Sub…" |
| `{typography.button}` | 18px | 500 | 23.4px | normal | All pill buttons |
| `{typography.body}` | 18px | 400 | 25.2px | normal | Card copy, service band |
| `{typography.body-tight}` | 18px | 400 | 25.2px | -0.18px | Newsletter intro |
| `{typography.nav-link}` | 16px | 400 | 20.8px | normal | Header nav |
| `{typography.body-sm}` | 16px | 400 | 22.4px | normal | Stat labels, quote attribution, footer links |
| `{typography.footer-heading}` | 16px | 700 | — | normal | Footer column heads "Help" |
| `{typography.legal}` | 14px | 400 | 20px | 0.192px | Consent copy, "Privacy Statement" |
| `{typography.caption}` | 14px | 400 | 19.6px | normal | Media captions (`#737373`) |

### Principles
- **Medium (500) for every headline**, Regular (400) for copy, Bold (700) only for footer headings.
- **Line height 1.2 for display, 1.3 for leads, 1.4 for small copy.**
- **Sentence case, no end punctuation** on headlines and CTAs. The guidelines' Technical Copy Guidance specifies "Headline: Sentence case - no period" and "CTA: Sentence case - no period".
- Tracking is only adjusted in two places: -0.18px at 18px (newsletter) and +0.192px / +0.2px at 14px (legal and small labels).

### Note on Font Substitutes
Aktiv Grotesk is commercial (served here as `aktiv-grotesk`). The site's own fallback stack is Helvetica, then Arial. Sonos used Helvetica
Neue before the refresh, per the official blog post.

## Layout

### Spacing System
- Component spacing: 4 / 8 / 16 / 24 / 48px are the most frequent paddings and gaps (`{spacing.xs}` … `{spacing.xl}`). Buttons pad `16px 48px`.
- **27-column fluid grid.** The root declares `--tw-xGrid-x1: 3.7037037037037037vw` (100vw / 27) through `--tw-xGrid-x27`, with half steps (`x0p5`, `x1p5` …) and negative mirrors. At 1280px, x1 = `{spacing.grid-x1}` 47.4074px and x2 = `{spacing.grid-x2}` 94.8148px. Those are exactly the measured promo-bar side padding and section side padding.
- Sections pad 112px vertically (`{spacing.section}`). The black "Breeze through setup" article pads 224px top and bottom.
- `--header-bar-h: 152px` (promo bar + header).

### Grid & Container
- Content spans 1090px (the promo card and footer rule) inside 1280px, i.e. 2 grid units of margin each side.
- Story sections split into a text column (427–453px) and a media column.
- The shop page shows 521×521 product panels (padding 59.7037px).

### Whitespace
Huge centred statements get a whole screen of white around them. Product renders float on white with only a soft floor shadow from the
photography itself.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Cards, buttons, panels |
| Rule | `rgb(224, 224, 224) 0px -1px 0px 0px inset` | Header bottom hairline |
| Glow | `rgba(0, 0, 0, 0.25) 0px 0px 24px 0px` | Floating element on product page |
| Swatch | `rgba(0, 0, 0, 0.627) 0px 0px 3px 0px inset, rgb(0, 0, 0) 0px 0px 3px 0px` | Colour swatch ring |
| Scrim | `rgba(0, 0, 0, 0.8)` | Fixed overlay |

The system is Tailwind-based (`--tw-shadow`, `--tw-ring-*` variables). Depth on marketing pages comes from video and photography, not shadow.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.stat}` | 10px | Stat card ("4000+") |
| `{rounded.sm}` | 12px | 107×107 `#f4f4f4` thumbnail tiles on the product page |
| `{rounded.category}` | 20px | Category tiles (Sets, Speakers…) |
| `{rounded.media}` | 24px | Media images in card rows |
| `{rounded.feature}` | 32px | Product feature card (`#f4f4f4`) |
| `{rounded.promo}` | 50px | Charcoal promo card |
| `{rounded.pill}` | 80px | Every button (59px tall, so it reads as a full pill) |
| `{rounded.dot}` | 9999px | 8px carousel dots |
| `{rounded.swatch}` | 50% | Colour swatches, round icon buttons |

The guidelines describe the logotype as an ambigram that "appears either horizontally or vertically… the shape of the canvas determines
its orientation."

## Components

### Buttons
**`button-primary`**: "Add to cart" on the product page. `#000000` fill, white 18px / 500 / 23.4px label, `2px solid #000000`, padding
`16px 48px`, 59px tall, 80px radius. **`button-primary-sm`** is the compact version in product rows: `8px 16px`, 43px tall.
- **Hover** (`button-primary-hover`): `opacity` 1 → 0.7, measured.

**`button-secondary`**: "Shop new arrivals", "Explore products", "Learn more". White (or transparent) fill, black text, `2px solid #000000`,
same size. Hover → opacity 0.7.

**`button-outline-on-dark`**: "Save up to 25%" inside the charcoal promo card and "Shop now" on dark media. Transparent fill, white text and
`2px solid #ffffff` border. Hover → opacity 0.7.

**`button-light`**: "Subscribe" in the charcoal footer. `#f4f4f4` fill, `#2e2e2e` text, `2px solid #f4f4f4`, `16px 48px`, 59px.

### Links
- **`link-inline`**: "Learn more" and "Privacy Statement", underlined, inheriting the surrounding text colour (`#2e2e2e` or `#f5f5f5`).
- Text-arrow links ("Shop now ›") at 18px / 400 black.
- Nav links: 16px / 400 / 20.8px black; "Sale" in `#2e2e2e`. Hover → opacity 0.7.

### Navigation
**`promo-bar`**: 52px, `#2e2e2e`, padding `12px 47.4074px`, a close "×" on the left, centred 14px / 400 white message, underlined "Shop" on
the right. **`nav`**: white header (152px together with the promo bar) with a 1px `#e0e0e0` inset bottom rule.

### Cards
- **`promo-card`**: 1090×350 `#2e2e2e` card with a 50px radius. Left half: 40px / 400 title, 18px body, outlined white pill. Right half: illustration.
- **`stat-card`**: 317×82 white card, `1px solid #cdcdcd`, 10px radius. Holds a 40px "4000+" and a 16px "patented innovations".
- **`category-card`**: 237×298, `1px solid #e0e0e0`, 20px radius, padding-bottom 32px, label 21px / 400.
- **`feature-card`**: product-page "Features" list on `#f4f4f4`, 32px radius, padding `12px 12px 30px`.
- **`product-panel`**: shop-page 521×521 `#f4f4f4` panel, 16px radius, 59.7037px padding.
- Quote cards: 21px / 400 quote, 16px / 500 name, 16px / 400 `#737373` role ("Giles Martin, Grammy-Winning Music Producer").

### Inputs
The footer email field is an underline-only input: transparent, `#f5f5f5` 16px text, padding `0 0 8px`, 30px tall, with a 14px
`#737373` floating label "Enter email address".

### Footer
**`footer`**: `#2e2e2e`, 1364px tall. Newsletter block (42px / 500 heading, 18px intro with -0.18px tracking, underline input, light
pill), link columns with 16px / 700 `#f5f5f5` headings and 16px / 400 `#bfbfbf` links, a 1px `#bfbfbf` rule, then "© 2026 Sonos, Inc."
with 14px Legal / privacy links and a country selector.

## Design System Architecture

Sonos publishes **brand guidelines** but **no public UI component library or token package**.

- **Official brand guidelines.** The [Sonos Brand Guidelines, January 2025](https://cdn.mediavalet.com/usva/sonos/qWHLQfIa8EiB0BbE43ivPg/6wCn0DDR8Uuc5YtoEc37Zg/Original/Sonos%20Brand%20Guidelines_2025.pdf) (linked from the developer [media kit page](https://docs.sonos.com/docs/media-kit)) cover Audience, Logotype, Color (Core: Black / White / Slate; Secondary: Juniper, Lime, Sage, Merlot, Orange, Rosé, Marine, Grape, Twilight), Typography (Aktiv Grotesk, Light / Regular / Medium / Bold), Product Renders (Hero, Exploded View, Sets / Collections; "Don't crop the logo"), Lifestyle Photography ("Lived-in but tidy", cables must appear plugged in), Motion, Voice ("passionate, smart, helpful, and confident") and Technicality (sentence case rules). Its appendix refers to internal-only "Full System Brand Guidelines" and "UX Copy Guidelines" on an internal platform.
- **Brand refresh.** The official [blog post](https://www.sonos.com/pl-pl/blog/sonos-brand-design-refresh) credits the identity to Sonos's internal creative team with Anomaly (New York) and Instrument (Portland). It introduced a seasonal palette and a house illustration style by James Graham, and allowed vertical wordmark orientation.
- **Token architecture (site CSS).** The site is Tailwind-based. Colour tokens are flat `--color-*` custom properties mixing role names and palette names: `--color-main`, `--color-base`, `--color-grayDarkest`, `--color-greyLighter`, `--color-redDarkest`, `--color-greenMedium`, `--color-purpleLight`, `--color-accentGold`, plus material names `--color-walnut`, `--color-linen`, `--color-lunar-white`, `--color-agave` and a split swatch `--color-black-and-soft-white: linear-gradient(135deg,#EEEEEE,#EEEEEE 50%,#000000 0,#000000)`. Utility classes reference them (`bg-accentGold`, `text-greyDark`, `bg-greyMediumLight`, `bg-main`).
- **Grid.** `--tw-xGrid-x0 … x27` (27 × 3.7037vw) with half steps and negatives, used by classes like `lg:min-w-[var(--tw-xGrid-x1)]`.
- **Type classes.** Named classes such as `tw-typography-h3`, alongside arbitrary Tailwind values (`text-[54px]`, `leading-[1.2]`, `text-[32px] leading-[36px]`) that switch at breakpoints.
- **Theming.** Section backgrounds are passed per breakpoint as CSS variables (`lg:bg-[var(--lg-bg)] md:bg-[var(--md-bg)] bg-[var(--sm-bg)]`). No user dark mode exists.
- **Accessibility.** A "Skip to main content" link (gold `#c59c6e`), focus rings via Tailwind ring variables (`--tw-ring-color: rgb(59 130 246/0.5)`), 59px button height.
- **Delivery.** No public npm package or Figma kit.

## Do's and Don'ts

### Do
- Use black `#000000` filled pills for purchase actions and black-outlined white pills for everything else, both at 80px radius, `16px 48px`, 18px / 500.
- Dim to `opacity: 0.7` on hover instead of changing colours.
- Set headlines in Aktiv Grotesk 500, sentence case, no full stop.
- Lead with lifestyle video or photography where the product is clearly visible, as the guidelines require.
- Use `#2e2e2e` for promo cards, the promo bar and the footer; use `#f4f4f4` for product panels.
- Use the secondary palette (Juniper, Lime, Merlot, Orange, Marine, Grape …) only in campaign imagery and promotions.

### Don't
- Don't use exclamation points, or the words "deal", "promotion", "clearance" or "discount" in marketing copy (guidelines).
- Don't use the secondary colours for buttons or text.
- Don't crop the product logo in renders.
- Don't use square-cornered buttons.
- Don't add drop shadows to cards.
- Don't set headlines in Bold 700; the live system uses 500.

## Responsive Behavior

| Width | Behaviour |
|---|---|
| 1280px | Hero h1 96px / 115.2px; 27-column grid with 47.4074px units; full nav row |
| 390px | Hero h1 54px / 500 / 64.8px; newsletter h2 32px / 36px; consent copy 12px / 18px; buttons keep 59px height |

- Type classes switch per breakpoint (e.g. the hero h1 carries `text-[54px]` for small screens and grows on large).
- The grid is viewport-relative, so margins scale continuously.
- Section backgrounds can differ per breakpoint via `--sm-bg` / `--md-bg` / `--lg-bg`.

## Iteration Guide

1. Start on white with black Aktiv Grotesk; body copy in `#2e2e2e` at 21px / 27.3px.
2. Reference tokens: `{colors.primary}`, `{typography.button}`, `{rounded.pill}`, `{spacing.grid-x2}`.
3. One filled black pill per decision; secondary actions are outlined.
4. Wrap promos in a `#2e2e2e` 50px-radius card, and product details in `#f4f4f4` 16–32px-radius panels.
5. Size display type at 96 / 72 / 64 / 48px, weight 500, line-height 1.2.
6. Use only opacity for hover feedback.
7. Check copy against the guidelines: sentence case, no exclamation points, clean offers ("20%" not "18%").
