---
version: alpha
name: Premier League
category: "Sports & Fitness"
description: "premierleague.com as measured — Premier League purple (#37003c) as the single ink and action colour on a near-white lilac-tinted canvas (#faf9fa) with white 12px-radius content cards, the league's own Premier Sans served as PremierLeague / PremierLeagueBold with uniform -0.02em tracking (32px hero, 24px section heads, 16px card titles), fully rounded purple pills, and a neon brand gradient (yellow #ebff00 to green #00ff87 to cyan #05f0ff) reserved for accents like the Join myPL ring."

colors:
  primary: "#37003c"
  on-primary: "#ffffff"
  canvas: "#faf9fa"
  surface: "#ffffff"
  purple-p5: "#f5f2f5"
  purple-p10: "#ebe5eb"
  pill-hover: "#e6dee6"
  purple-p20: "#d7ccd8"
  purple-p40: "#af99b1"
  purple-p70: "#7d5980"
  purple-p110: "#28002b"
  purple-p120: "#1e0021"
  card-hover: "#37003c08"
  ink: "#37003c"
  ink-on-dark: "#ffffff"
  pl-green: "#00ff87"
  pl-blue: "#05f0ff"
  pl-yellow: "#ebff00"
  pl-lilac: "#953bff"
  pl-pink: "#ff2882"
  pl-orange: "#ff6900"
  error: "#e60023"
  success: "#34a853"

typography:
  hero-title:
    fontFamily: "PremierLeagueBold, 'Adjusted Arial Bold Fallback', Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
    letterSpacing: -0.64px
  hero-title-mobile:
    fontFamily: "PremierLeagueBold, 'Adjusted Arial Bold Fallback', Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: -0.48px
  heading-section:
    fontFamily: "PremierLeagueBold, 'Adjusted Arial Bold Fallback', Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
    letterSpacing: -0.48px
  heading-section-mobile:
    fontFamily: "PremierLeagueBold, 'Adjusted Arial Bold Fallback', Arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: -0.4px
  card-title:
    fontFamily: "PremierLeagueBold, 'Adjusted Arial Bold Fallback', Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: -0.32px
  nav-link:
    fontFamily: "PremierLeagueBold, 'Adjusted Arial Bold Fallback', Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: -0.32px
  body:
    fontFamily: "PremierLeague, 'Adjusted Arial Fallback', Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
  label-bold:
    fontFamily: "PremierLeagueBold, 'Adjusted Arial Bold Fallback', Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: -0.28px
  button:
    fontFamily: "PremierLeague, 'Adjusted Arial Fallback', Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: -0.28px
  caption:
    fontFamily: "PremierLeague, 'Adjusted Arial Fallback', Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
    letterSpacing: -0.24px
  caption-bold:
    fontFamily: "PremierLeagueBold, 'Adjusted Arial Bold Fallback', Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
    letterSpacing: -0.24px
  skip-link:
    fontFamily: "PremierLeague, 'Adjusted Arial Fallback', Arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 50px
    textTransform: uppercase
  legal:
    fontFamily: "PremierLeagueBold, 'Adjusted Arial Bold Fallback', Arial, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: -0.2px

rounded:
  none: 0px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 16px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  card-x: 15px
  md: 16px
  lg: 20px
  xl: 24px
  xxl: 32px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 16px
    height: 40px
  button-tonal:
    backgroundColor: "{colors.purple-p10}"
    textColor: "{colors.ink}"
    typography: "{typography.caption}"
    rounded: "{rounded.pill}"
    padding: 8px 12px
    height: 32px
  button-tonal-hover:
    backgroundColor: "{colors.pill-hover}"
  button-gradient-ring:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 12px
    height: 36px
    ringBackground: "linear-gradient(57.48deg, #ebff00 2.92%, #00ff87 11.51%, #05f0ff 28.69%, …)"
  language-select:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.caption}"
    rounded: "{rounded.md}"
    border: "1px solid #d7ccd8"
    padding: 8px 12px
    height: 35px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    rounded: "{rounded.pill}"
    padding: 12px 16px
    height: 46px
  card-content:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.lg}"
    width: 230px
  card-content-hover:
    backgroundColor: "{colors.card-hover}"
  card-module:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    width: 292px
  hero-caption:
    backgroundColor: "{colors.purple-p110}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.hero-title}"
    rounded: 0px 0px 16px 16px
  skip-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.skip-link}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 54px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.caption}"
    padding: 0px 16px
    height: 698px
---

## Overview

premierleague.com is a news-and-data portal dressed entirely in the league's purple. The page background is a barely-lilac near-white (`{colors.canvas}` `#faf9fa`, the token `--c-mono-p2` / `--c-mono-100`), content sits in white cards with 12px and 16px corners, and almost every character on the page — headlines, card titles, nav, captions, scores — is set in Premier League purple `{colors.ink}` `#37003c` (`--c-pl-purple`). On the homepage that one colour accounts for 14,756 of ~15,000 measured characters. Buttons are fully rounded pills in the same purple; secondary pills use a pale purple tint `#ebe5eb`.

The layout (desktop, 1280px) is: a slim utility bar (Premier League, Shop, About Us, Football & Community, Events, Media, The Archive; "Copilot by Microsoft" at right), a main nav row (hamburger, lion logo + stacked "Premier League" wordmark, Matches, Table, Statistics, Fantasy ▾, News, Injuries, Games & Trivia, Players, Clubs, More ▾, search, "Join myPL" pill, "Sign in"), a horizontal ticker of club-crested headline links, then a three-column hero band: a large image card whose lower half is a deep-purple caption panel (`#28002b`) with a 32px white headline, a stacked list of five small story cards, and a fixtures card ("Premier League · View all matches · Sat 10 Oct" with crests and kick-off times). Below come the partner strip (EA Sports FC, Adobe, Barclays, Coca-Cola, Guinness, Microsoft, Puma, Avery Dennison) on a white card topped by a purple-to-lilac gradient bar, and then horizontal rails of tall portrait video tiles ("Moments: Arteta new deal [U+1F534]") and rows of 230px content cards with "View More" pills.

The neon secondary palette — `--c-pl-green` `#00ff87`, `--c-pl-blue` `#05f0ff`, `--c-pl-yellow` `#ebff00`, `--c-pl-lilac` `#953bff`, `--c-pl-pink` `#ff2882`, `--c-pl-orange` `#ff6900` — appears in gradients (the "Join myPL" ring, the partner strip bar, Fantasy badges) and editorial graphics, never as text colour.

**Key Characteristics:**
- One ink and action colour: purple `#37003c`.
- Lilac-tinted neutrals derived from the purple (`#faf9fa`, `#f5f2f5`, `#ebe5eb`, `#d7ccd8`, `#af99b1`, `#7d5980`, `#28002b`).
- The league's own typeface (Premier Sans, served as `PremierLeague` and `PremierLeagueBold`) with -0.02em tracking at every size.
- Fully rounded pills for buttons and nav items; 12px cards, 16px modules.
- Neon brand gradients as accents only.
- Emoji in section titles ("[U+1F534]", "[U+270D U+FE0F]", "[U+1F440]") — a conversational, social-media voice.

### Art Direction (from the capture)
- Photography is tight, emotional player close-ups and celebration shots, often composited with bold typographic overlays ("ULTIMATES", "LOOK AT MIKEL ARTETA!", "INJURY UPDATE") in club colours.
- Video tiles are tall portrait crops with a dark bottom gradient, white bold captions and a small purple "New" chip top-left.
- Club crests are used as inline icons in tickers and fixtures.

## Colors

> **Source page:** homepage `https://www.premierleague.com/en` (extraction `premier-league.json` + probes). Token names in parentheses are the site's own `:root` custom properties.

### Brand
- **PL Purple** (`{colors.primary}` — `#37003c`, `--c-pl-purple`, also `--c-mono-p100`): ink, primary pill fill ("View More"), skip link, icons.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): text on purple.
- **Neon accents**: `{colors.pl-green}` `#00ff87` (`--c-pl-green`; hovered `--c-pl-green-hovered` `#03f283`), `{colors.pl-blue}` `#05f0ff`, `{colors.pl-yellow}` `#ebff00`, `{colors.pl-lilac}` `#953bff`, `{colors.pl-pink}` `#ff2882`, `{colors.pl-orange}` `#ff6900`. Combined in named gradients: `--c-gradient-epl` (yellow → green), `--c-gradient-fpl` (blue → lilac), `--c-gradient-002` (purple → blue), `--c-gradient-fan-passport` (yellow → green → blue → …).

### Surface (the `--c-mono-p*` purple-tinted neutral ramp)
- **Canvas** (`{colors.canvas}` — `#faf9fa`, `--c-mono-p2`): body and footer background.
- **Surface** (`{colors.surface}` — `#ffffff`): cards and modules (the largest background area).
- **P5** (`{colors.purple-p5}` — `#f5f2f5`): light band fill.
- **P10** (`{colors.purple-p10}` — `#ebe5eb`): second-largest background area; tonal pill ("View all matches"). Hover `{colors.pill-hover}` `#e6dee6`.
- **P20** (`{colors.purple-p20}` — `#d7ccd8`): 1px border of the language select.
- **P40** (`{colors.purple-p40}` — `#af99b1`): muted text on dark (hero dek).
- **P70** (`{colors.purple-p70}` — `#7d5980`): secondary text colour present on the body.
- **P110** (`{colors.purple-p110}` — `#28002b`): hero caption panel.
- **P120** (`{colors.purple-p120}` — `#1e0021`): darkest step of the ramp.
- **Card Hover** (`{colors.card-hover}` — `#37003c08`, 3% purple): content-card background on hover.

### Semantic
`--c-system-error` `{colors.error}` `#e60023`, `--c-system-success` `{colors.success}` `#34a853` (from tokens; not visible on the homepage).

## Typography

### Font Family
The league's typeface is **Premier Sans**, "a hard-working geometric sans serif for Premier League" designed by Toshi Omagari at Monotype with DesignStudio, in Light, Regular, Bold, italics and Condensed ([Monotype case study](https://enterprise.monotype.com/resources/case-studies/premier-league)). On premierleague.com it is served under the family names **PremierLeague** (regular), **PremierLeagueBold** (bold), **PremierLeagueItalic** and **PremierLeagueBoldItalic**, tokenised as `--g-typography-regular: "PremierLeague", "Adjusted Arial Fallback"` and `--g-typography-regular-bold: "PremierLeagueBold", "Adjusted Arial Bold Fallback"`. Note that the bold is a separate family: elements set in `PremierLeagueBold` mostly compute to `font-weight: 400` (the weight is in the font file). PremierLeagueBold carries 11,999 of the ~15,000 measured characters — card titles, nav and headlines are all bold.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Measured on |
|---|---|---|---|---|---|---|
| `{typography.hero-title}` | PremierLeagueBold | 32px | 400 | 38.4px | -0.64px | hero caption headline |
| `{typography.hero-title-mobile}` | PremierLeagueBold | 24px | 400 | 28.8px | -0.48px | hero at 390px |
| `{typography.heading-section}` | PremierLeagueBold | 24px | 700 | 28.8px | -0.48px | "Moments: Arteta new deal", "Latest News & Features" |
| `{typography.heading-section-mobile}` | PremierLeagueBold | 20px | 700 | 24px | -0.4px | section heads at 390px |
| `{typography.card-title}` | PremierLeagueBold | 16px | 400 | 22.4px | -0.32px | content-card titles, kick-off times |
| `{typography.nav-link}` | PremierLeagueBold | 16px | 400 | 22.4px | -0.32px | main nav ("Matches") |
| `{typography.body}` | PremierLeague | 16px | 400 | normal | normal | body default |
| `{typography.label-bold}` | PremierLeagueBold | 14px | 400 | 19.6px | -0.28px | menu tiles ("Fantasy Premier League") |
| `{typography.button}` | PremierLeague | 14px | 400 | 19.6px | -0.28px | "View More", "Join myPL", utility bar |
| `{typography.caption}` | PremierLeague | 12px | 400 | 16.8px | -0.24px | card category ("Club News"), sponsor labels |
| `{typography.caption-bold}` | PremierLeagueBold | 12px | 400 | 16.8px | -0.24px | team names in fixtures |
| `{typography.skip-link}` | PremierLeague | 12px | 700 | 50px | normal, uppercase | "SKIP TO MAIN CONTENT" |
| `{typography.legal}` | PremierLeagueBold | 10px | 400 | 14px | -0.2px | "© PREMIER LEAGUE 2026" |

### Principles
- **Tracking is always -0.02em** (16px/-0.32px, 14px/-0.28px, 12px/-0.24px, 24px/-0.48px, 32px/-0.64px, 10px/-0.2px) and line-height 1.2× (24 → 28.8, 32 → 38.4) or 1.4× (16 → 22.4, 14 → 19.6, 12 → 16.8, 10 → 14).
- **Bold by default for content.** Titles and labels use the bold family; regular is for buttons, captions and categories.
- **Sentence case, conversational.** No all-caps except the skip link and legal line; section titles carry emoji.
- **Token scale**: `--font-heading-size-*` (3xs 0.8rem … 6xl 6.4rem, with `-mobile` variants) and `--font-body-size-*` (2xs 0.8rem … xl 2rem). The root font-size measures 10px, so these rem values map directly (e.g. `--font-body-size-l: 1.6rem` = the measured 16px body size).

### Note on Font Substitutes
Premier Sans is a proprietary Monotype commission for the league. The site's own fallbacks are metric-adjusted Arial faces (`"Adjusted Arial Fallback"`, `"Adjusted Arial Bold Fallback"`, loaded via `@font-face`) — use Arial with the same sizes and -0.02em tracking when the brand font is unavailable.

## Layout

### Spacing System
- **Measured gaps**: 8px (961 elements — the dominant rhythm), 4px (466), 16px, 12px, 24px, 32px.
- **Measured paddings**: 16px, 8px, 12px, 4px, 15px, 24px, 20px.
- **Tokens**: `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 12px · `{spacing.card-x}` 15px · `{spacing.md}` 16px · `{spacing.lg}` 20px · `{spacing.xl}` 24px · `{spacing.xxl}` 32px.

### Grid & Container
- Content sits inside a wide white rounded container on the canvas; footer padding 0 16px.
- Hero band: ~50% image card, ~25% story list, ~25% fixtures card (292px measured module width).
- Content rails: rows of 230px square-ish cards (230 × 230 measured) with 8px gaps, horizontally scrollable portrait video tiles.

### Whitespace Philosophy
Dense, feed-like: 8px gaps between cards and 4px internal gaps, with whitespace concentrated in the gutters around white modules.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | none | All measured visible elements report no box-shadow |
| Tint | white cards on `#faf9fa` / `#ebe5eb` | Primary separation method |
| Hover | background `rgba(55, 0, 60, 0.03)` | Content cards |
| Dark panel | `#28002b` | Hero caption |

The stylesheet corpus contains a few shadows (e.g. `0 .4rem 1.6rem 0 rgb(var(--c-pl-purple-rgb) .08)`), but none appear on measured homepage elements.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Skip link |
| `{rounded.sm}` | 4px | Small chips |
| `{rounded.md}` | 8px | Language select |
| `{rounded.lg}` | 12px | Content cards — the most frequent radius (815 elements) |
| `{rounded.xl}` | 16px | Hero image card, fixtures module, story modules |
| `{rounded.pill}` | 9999px | Buttons and nav items (computed `999.9px`) |

The hero caption panel rounds only its bottom corners: `0 0 16px 16px`.

## Components

### Buttons

**`button-primary`** — "View More".
- `{colors.primary}` `#37003c`, white `{typography.button}` (14px/400/19.6px, -0.28px), fully rounded, padding 12px 16px, 40px tall, centred under each card row.

**`button-tonal`** — "View all matches ›".
- `{colors.purple-p10}` `#ebe5eb`, purple 12px/400 text with a chevron, fully rounded, padding 8px 12px, 32px tall. Hover `button-tonal-hover`: `#e6dee6`.

**`button-gradient-ring`** — "Join myPL".
- White pill (86 × 36, padding 8px 12px, 14px purple label) inside an 88 × 38 wrapper whose background is the fan-passport gradient (`linear-gradient(57.48deg, rgb(235, 255, 0) 2.92%, rgb(0, 255, 135) 11.51%, rgb(5, 240, 255) …)`) — the gradient shows as a 1px ring.

**`skip-link`** — "SKIP TO MAIN CONTENT": purple, white 12px/700 uppercase, padding 0 20px, 54px tall, translated off-screen (measured `transform: matrix(1, 0, 0, 1, -184.141, 0)`).

### Navigation
**`nav-link`** — PremierLeagueBold 16px/400/22.4px purple, pill-shaped hit area (`999.9px` radius, padding 12px 16px, 46px tall). The utility bar above uses 14px regular. Mega-menu tiles ("Fantasy Premier League") are 14px bold with 12px radius and 16px 8px padding.

**`language-select`** — "English": `#faf9fa` fill, 1px `#d7ccd8` border, 8px radius, padding 8px 12px, 12px text, 35px tall.

### Cards
**`card-content`** — white, 12px radius, 230px wide: image on top (with optional purple "New" chip), `{typography.card-title}` title, `{typography.caption}` category below ("Video", "Club News", "Features"). Hover `card-content-hover`: background `rgba(55, 0, 60, 0.03)`.
**`card-module`** — white 16px-radius container (292px wide) for the story list and fixtures.
**`hero-caption`** — the lower part of the hero card: `#28002b` panel, 32px white bold headline, 12px muted `#af99b1` dek, 12px white "Fantasy Premier League" tag, bottom radius 16px.

### Fixtures
Fixture rows: home team (12px bold) · crest · kick-off time (16px bold, "18:30") · crest · away team, with a broadcaster logo chip below.

### Footer
**`footer`** — `#faf9fa`, padding 0 16px, 698px tall: partner strip (logo over 12px label: "Lead Partner", "Official Bank" …), link columns, "Manage Cookies" (12px/700) and "© PREMIER LEAGUE 2026" (10px bold, -0.2px).

## Design System Architecture

**The Premier League publishes no public design system, token package or brand guideline for its website.** Searches for brand guidelines, a design system, GitHub/npm tokens and media brand assets found no league-owned documentation (queries in `SOURCES.json`). Official sources found: the league's announcement of the identity ([premierleague.com/en/news/60917](https://www.premierleague.com/en/news/60917)) — "Working in partnership with global agency DesignStudio and Robin Brand Consultants the League has created a bold and vibrant identity that includes a modern take on the lion icon … flexible in digital and broadcast formats" — and Monotype's case study for the Premier Sans typeface ([enterprise.monotype.com](https://enterprise.monotype.com/resources/case-studies/premier-league)), which describes it working "from screens and shirt numbers to TV and league tables", with condensed cuts for long player names.

What follows is the **de-facto system measurable on premierleague.com** (167 custom properties on `:root`):

- **Token architecture — prefixed primitives.** `--c-*` colour tokens: brand (`--c-pl-purple`, `--c-pl-green`, `--c-pl-blue`, `--c-pl-yellow`, `--c-pl-lilac`, `--c-pl-pink`, `--c-pl-orange`), a purple-tinted neutral ramp `--c-mono-p2` … `--c-mono-p120` (`p10 #ebe5eb`, `p20 #d7ccd8`, `p40 #af99b1`, `p70 #7d5980`, `p110 #28002b`), a true-grey ramp `--c-mono-100` … `--c-mono-900`, system colours (`--c-system-error`, `--c-system-success`), competition colours (`--c-competition-champions-league: #102de6`) and named gradients (`--c-gradient-001` … `-007`, `--c-gradient-epl`, `--c-gradient-fpl`). Semantic aliases exist for match context (`--c-home-team: var(--c-mono-p40)`, `--c-away-team: var(--c-mono-p10)`). Opacity ramps are generated from RGB triplets: `--opacity-purple-5` … `-95` = `rgba(var(--c-pl-purple-rgb), n)`, same for black and white. Fantasy difficulty colours: `--fpl-fdr-1` … `-5` with `-on` text pairs.
- **Typography tokens**: `--g-typography-regular`, `--g-typography-regular-bold`, `--g-typography-italic`, `--g-typography-italic-bold`; size scales `--font-heading-size-3xs` … `-6xl` with separate `-mobile` values (e.g. `--font-heading-size-2xl: 3.2rem`, `--font-heading-size-2xl-mobile: 2.4rem`) and `--font-body-size-2xs` … `-xl`.
- **Theming**: a single light theme on the homepage; no dark-mode tokens were found in `:root`.
- **Component model (observed)**: BEM class names — `content-card`, `content-card__title`, `content-card__priority-tag-label`, `content-card--vertical`, `match-card__kickoff-time`, `button`, `button__label`, `button--medium`, `button__icon-right`, `profile-button`, `footer-sponsors__sponsor-text`, `hero-item__title`. Components: button (sizes, icon-right), profile button, content card (vertical), match card, hero item, footer sponsors.
- **Accessibility (observed)**: a focusable "Skip to main content" button; purple `#37003c` on `#faf9fa`/white for nearly all text. No published accessibility standard was found.
- **Delivery**: no public npm package or Figma kit found.

## Do's and Don'ts

### Do
- Set nearly all text in `#37003c` on `#faf9fa` / white.
- Use the bold family (`PremierLeagueBold`) for titles and nav, regular for buttons and captions, always with -0.02em tracking.
- Make buttons and nav hit areas full pills; cards 12px, modules 16px.
- Use the purple-tinted neutrals (`#ebe5eb`, `#d7ccd8`, `#af99b1`) instead of pure greys.
- Reserve the neon gradient for accents (rings, bars, Fantasy badges).
- Keep a conversational tone — sentence case, emoji allowed in section titles.

### Don't
- Don't use the neon colours for body text or large flat backgrounds behind text.
- Don't introduce pure-grey borders or text; the system's greys are purple-tinted.
- Don't add drop shadows to cards; separation is by white-on-tint.
- Don't set headings in all caps.
- Don't square off buttons.

## Responsive Behavior

### Breakpoints
Exact breakpoints were not measured; 1280px vs 390px:

| Element | 1280px | 390px |
|---|---|---|
| Hero headline | 32px/38.4px, -0.64px | 24px/28.8px, -0.48px |
| Section heading | 24px/28.8px, -0.48px | 20px/24px, -0.4px |
| Card body | 16px/22.4px | 16px/22.4px |
| Most-used sizes | 16, 12, 14px | 16, 14, 12px |

### Touch Targets
Nav pills are 46px tall; primary pills 40px; tonal pills 32px.

### Collapsing Strategy
The token layer provides explicit `-mobile` heading sizes (`--font-heading-size-xl-mobile: 2rem` etc.), matching the measured 24 → 20px section-title step.

### Image Behavior
Card images crop to fixed ratios at the top of white cards; video tiles keep tall portrait crops in horizontal rails.

## Iteration Guide

1. Canvas `#faf9fa`, white cards (12px) and modules (16px), ink `#37003c` everywhere.
2. Titles in `PremierLeagueBold`; buttons/captions in `PremierLeague`; tracking -0.02em; line-height 1.2 (headings) / 1.4 (text).
3. Primary action: purple pill, 14px, 12px 16px padding, 40px tall.
4. Secondary action: `#ebe5eb` tonal pill, hover `#e6dee6`.
5. Gaps of 8px between cards; 4px inside.
6. Neutrals come from the `--c-mono-p*` purple ramp.
7. Neon gradients only as accents (`--c-gradient-epl`, `--c-gradient-fpl`, fan-passport ring).
