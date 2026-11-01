---
version: alpha
name: NBA
category: "Sports & Fitness"
description: "NBA.com as measured — a dense sports-media portal on a light-grey canvas (#f6f6f6) with white content cards, a black 55px top nav and black footer, Knockout Wide uppercase headlines set below 1.0 line-height (36px/28.8px), Roboto for UI and body (14px/16.8px), Roboto Condensed for tables and utility buttons, and a single yellow tint #fbcd44 for the League Pass call to action, all driven by CSS custom properties with light-dark() theming."

colors:
  primary: "#fbcd44"
  on-primary: "#000000"
  canvas: "#f6f6f6"
  surface: "#ffffff"
  black: "#000000"
  surface-dark: "#191c23"
  surface-dark-raised: "#2b2f37"
  white-smoke: "#f3f4f5"
  talc: "#e7e9ea"
  gainsboro: "#daddde"
  elephant: "#ebe9e7"
  solitude: "#e5e7eb"
  cerulean-five: "#dfe7f1"
  ink: "#000000"
  ink-on-dark: "#f6f6f6"
  ink-secondary: "#4e525c"
  ink-muted: "#8e9196"
  asphalt: "#545454"
  jet: "#343232"
  button-ink: "#191c23e6"
  link: "#0268d6"
  link-hover: "#1d428a"
  label-interactive: "#0064ff"
  link-dark: "#69abf3"
  live: "#c8102e"
  error: "#d0021b"
  positive: "#34c759"
  negative: "#ff3b30"
  white-15: "#ffffff26"

typography:
  headline-hero:
    fontFamily: "'Knockout Wide', sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 28.8px
    textTransform: uppercase
  headline-section:
    fontFamily: "'Knockout Wide', sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 19.2px
    textTransform: uppercase
  headline-conference:
    fontFamily: "'Knockout Wide', sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  subnav-title:
    fontFamily: "'Knockout Wide', sans-serif"
    fontSize: 20px
    fontWeight: 300
    lineHeight: 25px
    textTransform: uppercase
  headline-mobile:
    fontFamily: "'Knockout Wide', sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 14.4px
    textTransform: uppercase
  article-heading:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 19.4285px
    fontWeight: 600
    lineHeight: 23.3142px
  article-body:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 15.6189px
    fontWeight: 400
    lineHeight: 23.4283px
  body-default:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  card-text:
    fontFamily: "Questrial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  nav-link:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  subnav-link:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 17.5px
  button-tint:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  button-tint-mobile:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: 0.14px
    textTransform: capitalize
  button-pill:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 14px
    fontWeight: 900
    lineHeight: 16.8px
    textTransform: uppercase
  button-condensed:
    fontFamily: "'Roboto Condensed', arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  table-team:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 13.08px
    fontWeight: 400
    lineHeight: 19.62px
  table-cell:
    fontFamily: "'Roboto Condensed', arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 32px
  link-sm:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
  select:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 15px
  footer-legal:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 19.5px
  table-header:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 10px
    fontWeight: 900
    lineHeight: 10px
    textTransform: uppercase
  label-caps:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 10px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 0.5px
    textTransform: uppercase
  footer-heading:
    fontFamily: "Roboto, arial, sans-serif"
    fontSize: 10px
    fontWeight: 900
    lineHeight: 12px
    textTransform: uppercase

rounded:
  none: 0px
  xs: 2px
  sm: 4px
  card: 5px
  md: 6px
  lg: 8px
  xl: 12px
  cta-mobile: 50px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 20px
  xxl: 32px

components:
  button-tint:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-tint}"
    rounded: "{rounded.sm}"
    padding: 0px 8px
    height: 32px
  button-tint-mobile:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-tint-mobile}"
    rounded: "{rounded.cta-mobile}"
    backgroundImage: linear-gradient(240deg, rgba(255, 255, 255, 0) 30%, rgba(0, 0, 0, 0.2) 50%, rgba(255, 255, 255, 0) 70%)
    padding: 10px
    height: 34px
  button-pill-on-dark:
    backgroundColor: transparent
    textColor: "{colors.surface}"
    typography: "{typography.button-pill}"
    rounded: "{rounded.pill}"
    border: "2px solid #e5e7eb"
    padding: 12px 32px
    height: 45px
  button-dark:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.surface}"
    typography: "{typography.button-condensed}"
    rounded: "{rounded.sm}"
    padding: 16px
    height: 50px
  button-dark-hover:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.button-ink}"
    border: "1px solid #191c23e6"
  button-light:
    backgroundColor: "{colors.white-smoke}"
    textColor: "{colors.button-ink}"
    typography: "{typography.button-condensed}"
    rounded: "{rounded.sm}"
    border: "1px solid #191c23e6"
    padding: 16px
    height: 50px
  nav:
    backgroundColor: "{colors.black}"
    textColor: "{colors.surface}"
    typography: "{typography.nav-link}"
    padding: 0px 32px
    height: 55px
  nav-link:
    textColor: "{colors.surface}"
    typography: "{typography.nav-link}"
    padding: 0px 8px
    height: 55px
  subnav-link:
    textColor: "{colors.ink}"
    typography: "{typography.subnav-link}"
    padding: 0px 12px
    height: 40px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link-sm}"
  link-hover:
    textColor: "{colors.link-hover}"
  card-video:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body-default}"
    rounded: "{rounded.sm}"
    width: 240px
    height: 234px
  select:
    backgroundColor: "{colors.elephant}"
    textColor: "{colors.jet}"
    typography: "{typography.select}"
    rounded: "{rounded.sm}"
    padding: 8px 32px 8px 12px
    height: 31px
  table-header-cell:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.table-header}"
    padding: 14px 6px
    height: 39px
  table-cell:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.table-cell}"
    padding: 4px 8px
    borderColor: "{colors.elephant}"
  footer:
    backgroundColor: "{colors.black}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.footer-legal}"
    height: 435px
---

## Overview

NBA.com is a high-density sports-media portal. The homepage (desktop, 1280px) stacks: a full-width blue League Pass promo banner ("STREAM EVERY GAME LIKE YOU'RE COURTSIDE" with a yellow "Sign Up Now" pill), the black 55px global nav, a horizontal scoreboard strip of white game tiles (tip-off time, teams with logos, scores, "League Pass" links), an ad slot, and then a two-column layout — a wide main column of stacked white modules on the light-grey `{colors.canvas}` `#f6f6f6`, and a narrow right rail of white modules (HEADLINES, NBA APP, FOLLOW THE NBA, SOCIAL IMPACT, QUICK LINKS). The black footer closes the page.

The look is carried by two typefaces. **Knockout Wide** (Hoefler&Co's Knockout family) sets every module title and headline in uppercase at line-heights below 1.0 — "NBA FANTASY: SLEEPERS, BREAKOUTS AT GUARD POSITION" at 36px on 28.8px, "STORIES" / "TRENDING NOW" / "GAME RECAPS" at 24px on 19.2px (the site's `--leading-headline: 0.8`). **Roboto** does everything else: 14px/600 white nav links, 14px body text, 12–16px links and card copy. **Roboto Condensed** is the table and utility-button face (standings, "ADD CALENDAR", "Print Standings").

Colour is mostly black, white and grey; the brand voltage is the yellow **tint** `{colors.primary}` `#fbcd44` (`--tint`, `--meyer`, `--button-tint-bg`) used for the "League Pass" button in the nav and the "Sign Up Now" pill. Links are cerulean `#0268d6`; "LIVE" chips are NBA scarlet `#c8102e`. Team colours enter through photography and per-team tokens (`--LAL: #552583`, `--BOS: #008348` …).

**Key Characteristics:**
- Grey canvas `#f6f6f6`, white modules, black nav and footer.
- Knockout Wide uppercase headlines with line-height 0.8 × size.
- Roboto 14px UI; Roboto Condensed for tables and condensed buttons.
- One yellow CTA (`#fbcd44`), cerulean links (`#0268d6`), scarlet live chips (`#c8102e`).
- Small radii (4–8px) on cards and buttons; fully rounded pills for on-dark "READ"/"WATCH" buttons.
- Heavy imagery: player action photography, team-coloured split graphics for game highlights ("DEN vs UTA"), video duration chips over thumbnails.
- Token system exposed as ~400 CSS custom properties with `light-dark()` values for dark mode.

### Art Direction (from the capture)
- The hero module is a full-bleed player photo on black with the headline, a 3-line dek, an outlined white "READ" pill and a "RELATED CONTENT" list overlaid on the left; a five-tab story selector runs along the bottom with thin top rules (the active tab's rule is white).
- Story tiles are tall portrait cards with heavy colour fields (Nuggets gold/purple, Lakers gold vs Warriors blue) and white uppercase captions at the bottom; "LIVE" and "NEW" chips sit top-left.
- Video thumbnails carry a yellow circular play button and a duration chip ("01:35").
- The League Pass promo in the right rail is a blue gradient card with the League Pass wordmark and centred white condensed headline.

## Colors

> **Source pages:** homepage `https://www.nba.com/` (extraction `nba.json`, measured 2026-10-07; the homepage now returns HTTP 403 to automated browsers), standings `https://www.nba.com/standings` (extraction `nba--standings.json` + probes). Token names in parentheses are the site's own `:root` custom properties.

### Brand & Accent
- **Tint** (`{colors.primary}` — `#fbcd44`, `--tint` / `--meyer` / `--button-tint-bg`): "League Pass" nav button, "Sign Up Now" pill. `--tint-button-hover-background` and `--tint-button-pressed-background` are also `#fbcd44` — the tint button does not change colour on hover (confirmed by probe).
- **On Primary** (`{colors.on-primary}` — `#000000`, `--tint-button-text-color` / `--on-tint`): Label on tint.
- **Live** (`{colors.live}` — `#c8102e`, `--live` / `--nba-scarlet`): "LIVE" chips.
- **NBA Navy** (`{colors.link-hover}` — `#1d428a`, `--nba-navy`): link hover colour in light mode (`--link-hover: light-dark(var(--nba-navy), var(--antediluvean))`).

### Surface
- **Canvas** (`{colors.canvas}` — `#f6f6f6`, `--cotton`, `--bg-app-background` light value): Page background.
- **Surface** (`{colors.surface}` — `#ffffff`, `--white`): Modules, cards, table cells — the largest background area.
- **Black** (`{colors.black}` — `#000000`): Nav, footer, hero module.
- **Surface Dark** (`{colors.surface-dark}` — `#191c23`, `--surface`): "Print Standings" button; dark-mode secondary background. Raised variant `{colors.surface-dark-raised}` `#2b2f37`.
- **White Smoke** (`{colors.white-smoke}` — `#f3f4f5`, `--white-smoke`): "ADD CALENDAR" button fill.
- **Talc** (`{colors.talc}` — `#e7e9ea`), **Gainsboro** (`{colors.gainsboro}` — `#daddde`, the most frequent border colour on the homepage), **Elephant** (`{colors.elephant}` — `#ebe9e7`, select fill and table borders), **Solitude** (`{colors.solitude}` — `#e5e7eb`, border of the on-dark pill).
- **Cerulean Five** (`{colors.cerulean-five}` — `#dfe7f1`, `--table-row-hover` light value): standings row highlight.

### Text
- **Ink** (`{colors.ink}` — `#000000`, `--label-primary` light value): Most-read text colour.
- **Ink on Dark** (`{colors.ink-on-dark}` — `#f6f6f6`): Footer text and links.
- **Ink Secondary** (`{colors.ink-secondary}` — `#4e525c`, `--extinct-volcano`, `--label-secondary` light).
- **Ink Muted** (`{colors.ink-muted}` — `#8e9196`, `--eastern-europe`, `--text-muted` light): Uppercase labels ("SEASON").
- **Asphalt** (`{colors.asphalt}` — `#545454`), **Jet** (`{colors.jet}` — `#343232`, select text / table header text).
- **Button Ink** (`{colors.button-ink}` — `#191c23e6`, `--default-button-text-color` light): condensed button labels.
- **Link** (`{colors.link}` — `#0268d6`, `--cerulean`): links (team names in standings, "See more", Quick Links).
- **Label Interactive** (`{colors.label-interactive}` — `#0064ff`, `--dark-azure`) and dark-mode link `{colors.link-dark}` `#69abf3` (`--antediluvean`).

### Semantic
From the site's tokens: `--error-red` `{colors.error}` `#d0021b`, `--positive` `{colors.positive}` `#34c759`, `--negative` `{colors.negative}` `#ff3b30`. Translucent white `--white15` `{colors.white-15}` `#ffffff26` for rules on dark.

## Typography

### Font Family
- **Knockout Wide** (and **Knockout**) — Hoefler&Co's Knockout, designed by Jonathan Hoefler, "a nine-width, four-weight family" of thirty-two styles ([MyFonts field guide](https://www.myfonts.com/a/font/content/font-field-guide/knockout-font-hoefler-and-co)). Tokenised as `--font-display: "Knockout", sans-serif` and `--font-display-wide: "Knockout Wide", sans-serif`. Commercial.
- **Roboto** — `--font-body` / `--font-article` / `--font-slab`: `"Roboto", arial, sans-serif`; loaded at 300, 400, 700, 900.
- **Roboto Condensed** — `--font-table`: tables and condensed buttons (400, 700).
- **Questrial** — rendered on homepage card text (319 measured characters).
- Also declared but not observed on measured elements: `--font-headline: "Action NBA Cond Web"`, WNBA family faces, Roboto Slab.

### Hierarchy

| Token | Family | Size | Weight | Line height | Notes | Measured on |
|---|---|---|---|---|---|---|
| `{typography.headline-hero}` | Knockout Wide | 36px | 400 | 28.8px | uppercase | homepage hero headline |
| `{typography.headline-section}` | Knockout Wide | 24px | 400 | 19.2px | uppercase | "STORIES", standings h1 |
| `{typography.headline-conference}` | Knockout Wide | 20px | 400 | 30px | sentence case | "Eastern Conference" |
| `{typography.subnav-title}` | Knockout Wide | 20px | 300 | 25px | uppercase | "STANDINGS" sub-nav title |
| `{typography.headline-mobile}` | Knockout Wide | 18px | 400 | 14.4px | uppercase | hero headline at 390px |
| `{typography.article-heading}` | Roboto | 19.4285px | 600 | 23.3142px | fluid | standings article h3 |
| `{typography.article-body}` | Roboto | 15.6189px | 400 | 23.4283px | fluid | standings article p |
| `{typography.body-default}` | Roboto | 16px | 400 | 24px | — | body default |
| `{typography.card-text}` | Questrial | 16px | 400 | 24px | — | homepage story-card link |
| `{typography.body}` | Roboto | 14px | 400 | 16.8px | — | hero dek / body text |
| `{typography.nav-link}` | Roboto | 14px | 600 | 21px | — | global nav |
| `{typography.subnav-link}` | Roboto | 14px | 300 | 17.5px | — | sub-nav ("2026-27 Preseason") |
| `{typography.button-tint}` | Roboto | 14px | 600 | 21px | — | "League Pass" |
| `{typography.button-tint-mobile}` | Roboto | 14px | 700 | 14px | 0.14px, capitalize | "Sign Up Now" at 390px |
| `{typography.button-pill}` | Roboto | 14px | 900 | 16.8px | uppercase | "WATCH", "READ" |
| `{typography.button-condensed}` | Roboto Condensed | 16px | 700 | 16px | — | "ADD CALENDAR", "Print Standings" |
| `{typography.table-team}` | Roboto | 13.08px | 400 | 19.62px | — | team names |
| `{typography.table-cell}` | Roboto Condensed | 12px | 400 | 32px | — | standings numbers |
| `{typography.link-sm}` | Roboto | 12px | 400 | 14.4px | — | cerulean team links |
| `{typography.select}` | Roboto | 12px | 700 | 15px | — | season select |
| `{typography.footer-legal}` | Roboto | 12px | 300 | 19.5px | — | "Privacy Policy" |
| `{typography.table-header}` | Roboto | 10px | 900 | 10px | uppercase | "TEAM", "WIN%" |
| `{typography.label-caps}` | Roboto | 10px | 700 | 20px | 0.5px, uppercase | "SEASON" label |
| `{typography.footer-heading}` | Roboto | 10px | 900 | 12px | uppercase | "NBA ORGANIZATION" |

### Principles
- **Headlines are Knockout Wide, uppercase, regular weight, and set solid-minus.** Line-height is 0.8 × size (36/28.8, 24/19.2, 18/14.4) — the site tokenises this as `--leading-headline: 0.8`.
- **Roboto weight does the hierarchy in UI**: 300 sub-nav and legal, 400 body, 600 nav and buttons, 900 table headers, footer headings and on-dark pills.
- **Condensed for data.** Numbers and table cells use Roboto Condensed so many columns fit.
- **Fluid type exists in the token layer** (`--step--3` … `--step-8` as `clamp()` values) and shows up in article copy as non-integer computed sizes (15.6189px, 19.4285px).

### Note on Font Substitutes
Knockout is a commercial Hoefler&Co family; no substitute is cited. When unavailable, the site's own fallback is `sans-serif` (per `--font-display-wide`). Roboto, Roboto Condensed and Questrial are open fonts served directly — no substitute needed.

## Layout

### Spacing System
- **Measured paddings** (homepage): 8px (366 elements), 4px, 16px, 12px, 20px, 32px. Standings adds 6px and 14px cell paddings.
- **Gap**: 4px is the only frequent flex gap on the homepage.
- **Tokens**: `{spacing.xxs}` 4px · `{spacing.xs}` 6px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.xl}` 20px · `{spacing.xxl}` 32px. The site also defines `--cell-padding: 8px`, `--cell-spacing: 8px` and a fluid space scale (`--space-3xs` … `--space-4xl`, e.g. `--space-s: clamp(1rem, 0.9286rem + 0.3571vw, 1.25rem)`).

### Grid & Container
- Breakpoint tokens: `--xs 480px`, `--sm 640px`, `--md 768px`, `--lg 1024px`, `--xl 1280px`, `--xxl 1440px`.
- Nav: `--nav-height: 55px`, `--nav-height-plus-banner: 110px`; nav padding 0 32px.
- Homepage: main column ~2/3 + right rail ~1/3 (in the 960px capture: ~680px + ~220px with ~20px gutters); standings content is 1184px wide.
- Scoreboard strip: fixed-width game tiles with date separators ("FRI OCT 09").

### Whitespace Philosophy
Dense by design: modules butt against each other with small gaps, 8px paddings dominate, and long link lists (Headlines, Quick Links) are tightly leaded. Air comes only inside the hero image.

## Elevation & Depth

| Level | Treatment | Token / where |
|---|---|---|
| 0 | none | Most modules and cards |
| 1 | `0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgb(0 0 0/6%)` | `--shadow`; measured on one standings element |
| 2 | `0 4px 6px -1px rgba(0,0,0,.1), 0 2px 4px -1px rgb(0 0 0/6%)` | `--shadow-md` |
| 3 | `0 10px 15px -3px rgba(0,0,0,.1), 0 4px 6px -2px rgb(0 0 0/5%)` | `--shadow-lg` |
| 4 | `0 20px 25px -5px …`, `0 25px 50px -12px rgba(0,0,0,.25)` | `--shadow-xl`, `--shadow-2xl` |
| Overlay | `rgba(0,0,0,.8)` | `--modal-overlay` |

On the measured pages separation comes from white modules on the grey canvas rather than from shadows.

## Shapes

### Border Radius Scale

| Token | Value | Source | Use |
|---|---|---|---|
| `{rounded.none}` | 0px | `--rounded-none` | Nav, footer |
| `{rounded.xs}` | 2px | `--rounded-sm` | Small chips |
| `{rounded.sm}` | 4px | `--rounded-base` | Buttons, video cards, select |
| `{rounded.card}` | 5px | measured | Most frequent radius on the homepage (136 elements) |
| `{rounded.md}` | 6px | `--rounded-md` | — |
| `{rounded.lg}` | 8px | `--rounded-lg` | Third most frequent radius on the homepage |
| `{rounded.xl}` | 12px | `--rounded-xl` | — |
| `{rounded.cta-mobile}` | 50px | measured | "Sign Up Now" at 390px |
| `{rounded.pill}` | 9999px | `--rounded-full` | "READ"/"WATCH" on-dark pills |

Bottom-only rounding `0 0 4px 4px` appears 24 times on the homepage.

## Components

### Buttons

**`button-tint`** — "League Pass" in the nav.
- `{colors.primary}` `#fbcd44`, black `{typography.button-tint}` (14px/600/21px), radius 4px, padding 0 8px, 32px tall, 96px wide. Hover: no change (probe; tokens also set hover/pressed to `#fbcd44`).

**`button-tint-mobile`** — "Sign Up Now" at 390px.
- `#fbcd44` with a diagonal sheen `linear-gradient(240deg, rgba(255,255,255,0) 30%, rgba(0,0,0,0.2) 50%, rgba(255,255,255,0) 70%)`, black 14px/700/14px capitalize, 0.14px tracking, radius 50px, padding 10px, 34px tall.

**`button-pill-on-dark`** — "READ" (hero), "WATCH".
- Transparent, white `{typography.button-pill}` (14px/900 uppercase), 2px solid `#e5e7eb`, fully rounded, padding 12px 32px, 45px tall.

**`button-dark`** — "Print Standings".
- `{colors.surface-dark}` `#191c23`, white Roboto Condensed 16px/700/16px, radius 4px, padding 16px, 50px tall.
- Hover `button-dark-hover`: background white, text and 1px border `#191c23e6` (inverts).

**`button-light`** — "ADD CALENDAR".
- `{colors.white-smoke}` `#f3f4f5`, text and 1px border `#191c23e6`, same condensed type, radius 4px, padding 16px, 50px.

### Navigation
**`nav`** — black bar, `--nav-height` 55px, padding 0 32px. NBA logo, then white `{typography.nav-link}` links (Games, Schedule, Watch, News, Season Preview, NBA Cup, Stats, Standings, Teams, Players, NBA Play, Fantasy) with 0 8px padding; at right the yellow League Pass button, Store, Tickets, an app-grid icon and "Sign In" (14px/400). No hover change was measured on nav links.

**`subnav-link`** — section sub-navigation under the global nav on `/standings`: Knockout Wide 20px/300 uppercase section title ("STANDINGS"), then Roboto 14px/300 links with 0 12px padding (40px tall); "Home" is 14px/600 with 12px 16px padding.

### Links
**`link`** — `{colors.link}` `#0268d6`; hover `{colors.link-hover}` `#1d428a` per `--link-hover`. External links in the right rail carry a small outbound-arrow icon.

### Cards
**`card-video`** — white, 4px radius, 240 × 234px: 16:9 thumbnail with play button and duration chip, then uppercase Knockout Wide caption.
Right-rail modules are white blocks with a Knockout Wide 24px uppercase title and a list or grid below.

### Data
**`select`** — season picker: `#ebe9e7` fill, `#343232` 12px/700 text, 4px radius, padding 8px 32px 8px 12px, 31px tall; label above in `{typography.label-caps}` `#8e9196`.
**`table-header-cell`** — white, 10px/900 uppercase, padding 14px 6px, 39px tall.
**`table-cell`** — white, Roboto Condensed 12px/400 with 32px line-height, padding 4px 8px; row borders `#ebe9e7` (390 border instances on `/standings`); team names `{typography.table-team}` with cerulean city links.

### Footer
**`footer`** — black, 435px. Column headings 10px/900 uppercase `#f6f6f6` ("NBA ORGANIZATION"), links 14px/400/16.8px `#f6f6f6`, copyright "© 2026 NBA Media Ventures, LLC." 12px/700, legal links 12px/300.

## Design System Architecture

**The NBA publishes no public web design system, token package or brand guideline for NBA.com.** Searches for an NBA design system, official brand guidelines, GitHub/npm tokens and the typeface returned no NBA-owned documentation (queries in `SOURCES.json`). The display face is identifiable from the site's own token `--font-display-wide: "Knockout Wide"` and Hoefler&Co's Knockout documentation ([MyFonts field guide](https://www.myfonts.com/a/font/content/font-field-guide/knockout-font-hoefler-and-co)).

What follows is the **de-facto system measurable on nba.com** (about 400 custom properties on `:root`):

- **Token architecture — two tiers.** *Primitives* are named colours: `--cotton: #f6f6f6`, `--meyer: #fbcd44`, `--cerulean: #0268d6`, `--nba-navy: #1d428a`, `--nba-scarlet: #c8102e`, `--extinct-volcano: #4e525c`, `--eastern-europe: #8e9196`, `--gainsboro: #daddde`, plus alpha ramps `--black10`…`--black50`, `--white10`…`--white90` and 30 team primaries (`--ATL: #e03a3e` … `--WAS: #002b5c`). *Semantic* tokens point at primitives: `--bg-app-background: light-dark(var(--cotton), var(--black))`, `--label-primary: light-dark(var(--black), var(--white))`, `--link: light-dark(var(--cerulean), var(--antediluvean))`, `--text-muted`, `--bg-table-header`, `--table-row-hover`. *Component* tokens exist for buttons: `--button-tint-bg`, `--tint-button-hover-background`, `--button-on-dark-bg`, `--button-on-dark-subdued-bg: #ffffff40`, `--primary-button-text-color: light-dark(#fff, #000)`, `--default-button-disabled-text-color`.
- **Theming**: light/dark is built into the semantic layer with CSS `light-dark()` — every semantic token carries both values, switched by the page's `color-scheme`. Dark values: canvas `#000`, secondary surface `#191c23`, link `#69abf3`, muted text `#a4a2a2`.
- **Type & spacing systems**: font-role tokens (`--font-body`, `--font-display`, `--font-display-wide`, `--font-headline`, `--font-table`, `--font-article`); a fixed text scale (`--text-xxs` 0.625rem … `--text-7xl` 2.625rem, plus `--text-2rem` … `--text-6rem`); a fluid modular scale `--step--3` … `--step-8` built from `clamp()` (e.g. `--step-1: clamp(1.2rem, …, 1.5625rem)` — ratio 1.2 at the minimum, 1.25 at the maximum); leading tokens (`--leading-none 1`, `--leading-tight 1.25`, `--leading-normal 1.5`, `--leading-headline 0.8`); tracking tokens (`--tracking-tight -0.025em` … `--tracking-widest 0.1em`); a fluid spacing scale `--space-3xs` … `--space-4xl` with paired steps (`--space-s-m`, `--space-m-xl`).
- **Shape/elevation/motion**: `--rounded-none/sm/base/md/lg/xl/full`; `--shadow`, `--shadow-md/lg/xl/2xl`, `--shadow-block`; `--duration-base 150ms`, `--duration-200/300/500`, `--ease-in`, `--ease-out`, `--ease-in-out`; z-index tokens `--z-main-nav 50`, `--z-nav-drawer 40`, `--z-nav-dropdown 20`, `--z-promo-banner 10`.
- **Component model (observed)**: tint / on-dark / default / primary button families (from token names), nav with sub-nav, scoreboard tiles, story tiles, video cards, standings tables, select, footer. Third-party embeds (`--storyteller-*` stories widget, cookie banner) bring their own tokens and are not part of the NBA system.
- **Accessibility**: no published standard found. Observed: button tokens include focused/pressed state layers (`--button-on-dark-state-layer-focused: #0000001a`, `--button-on-dark-state-layer-pressed: #00000026`).
- **Delivery**: no npm package, public Figma kit or versioning information found.

## Do's and Don'ts

### Do
- Put content in white modules on the `#f6f6f6` canvas; keep nav and footer black.
- Set titles in Knockout Wide uppercase with line-height 0.8 × size.
- Use Roboto 14px for UI and body; Roboto Condensed for tables and numbers.
- Reserve `#fbcd44` for League Pass/subscription CTAs.
- Use `#0268d6` for links and `#c8102e` for LIVE chips.
- Pull colours from semantic tokens so dark mode (`light-dark()`) works.

### Don't
- Don't use the yellow tint as a background for large areas or for body links.
- Don't set Knockout headlines in mixed case for module titles (the conference h2 is the sentence-case exception).
- Don't add heavy shadows to modules; separation is by colour.
- Don't round content cards beyond 8px.
- Don't use team colours for UI chrome — they belong to team-specific content.

## Responsive Behavior

### Breakpoints
Tokens: 480 / 640 / 768 / 1024 / 1280 / 1440px (`--xs` … `--xxl`).

| Element | 1280px | 390px |
|---|---|---|
| Hero headline | Knockout Wide 36px/28.8px | 18px/14.4px |
| Most-used size | 14px | 18px, then 14px |
| Banner CTA | — (desktop nav "League Pass" 32px, 4px radius) | "Sign Up Now" 34px, 50px radius, sheen gradient |
| Standings article body | 15.6189px/23.4283px | 13.4998px/20.2497px |
| Standings h1 | 24px/19.2px | 24px/19.2px |

### Touch Targets
Nav links fill the 55px bar; condensed buttons are 50px tall; the tint button is 32px tall on desktop.

### Collapsing Strategy
- The mobile size table keeps 24px module titles; the hero headline drops from 36px to 18px.
- Fluid tokens (`--step-*`, `--space-*`) scale type and spacing continuously between breakpoints.

### Image Behavior
Thumbnails keep 16:9 with overlaid play buttons and duration chips; hero photography stays full-bleed inside its module.

## Iteration Guide

1. Canvas `{colors.canvas}` `#f6f6f6`; modules `{colors.surface}`; nav/footer `{colors.black}`.
2. Titles: `{typography.headline-section}` (Knockout Wide 24px/19.2px uppercase); hero `{typography.headline-hero}`.
3. Body `{typography.body}` (Roboto 14px/16.8px); nav `{typography.nav-link}`.
4. One tint CTA (`{components.button-tint}`); data actions use `{components.button-dark}` / `{components.button-light}` (Roboto Condensed 16px/700, 4px radius).
5. Links `#0268d6` → hover `#1d428a`.
6. Tables: Roboto Condensed 12px cells, 10px/900 uppercase headers, `#ebe9e7` rules.
7. Define colours as `light-dark()` semantic tokens over named primitives, as the site does.
