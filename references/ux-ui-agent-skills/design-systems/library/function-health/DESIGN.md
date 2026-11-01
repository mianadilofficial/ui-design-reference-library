---
version: alpha
name: Function Health
category: "Healthcare & Wellness"
description: 'Function Health''s lab-testing membership site — a warm beige canvas #fef9ef with cream #f5eee1 cards and footer, midnight #2a2b2f ink and gray #515151 secondary text, light Financier Display serif headlines (76.5418px/300) with one orange italic phrase, FT Base sans at weight 300 for body (16px/24px), Fragment Mono uppercase tags, and burnt-orange #b05a36 fully rounded pill CTAs (12px 25px, 50px tall) that flip to midnight on hover.'

colors:
  primary: "#b05a36"
  primary-hover: "#2a2b2f"
  on-primary: "#fef9ef"
  canvas: "#fef9ef"
  cream: "#f5eee1"
  dark-cream: "#d1c9bf"
  sand: "#ddd6ca"
  ink: "#2a2b2f"
  ink-secondary: "#515151"
  ink-quote: "#242424"
  midnight: "#2a2b2f"
  white: "#ffffff"
  control-border: "#737373"
  green-10p: "#f1f3e5"
  light-green: "#79bd8b"
  medium-green: "#4c9a62"
  dark-green: "#13411f"
  orange-10p: "#f6e9dc"
  blue: "#488ad5"
  error: "#db0000"

typography:
  display-hero:
    fontFamily: "\"Financier Display\", Georgia, serif"
    fontSize: 76.5418px
    fontWeight: 300
    lineHeight: 68.8876px
  display-section:
    fontFamily: "\"Financier Display\", Georgia, serif"
    fontSize: 61.5942px
    fontWeight: 300
    lineHeight: 61.5942px
  display-hero-mobile:
    fontFamily: "\"Financier Display\", Georgia, serif"
    fontSize: 57.3026px
    fontWeight: 300
    lineHeight: 53.8645px
  display-section-mobile:
    fontFamily: "\"Financier Display\", Georgia, serif"
    fontSize: 48.2104px
    fontWeight: 300
    lineHeight: 48.2104px
  heading-category:
    fontFamily: "\"Financier Display\", Georgia, serif"
    fontSize: 43.3446px
    fontWeight: 300
    lineHeight: 43.3446px
  heading-card:
    fontFamily: "\"Financier Display\", Georgia, serif"
    fontSize: 32.9475px
    fontWeight: 300
    lineHeight: 37.8896px
  heading-newsletter:
    fontFamily: "\"Financier Display\", Georgia, serif"
    fontSize: 27.2px
    fontWeight: 300
    lineHeight: 29.92px
  heading-faq:
    fontFamily: "\"FT Base\", system-ui, sans-serif"
    fontSize: 33.2483px
    fontWeight: 600
    lineHeight: 43.2228px
  stat:
    fontFamily: "\"FT Base\", system-ui, sans-serif"
    fontSize: 23.6992px
    fontWeight: 600
    lineHeight: 29.624px
  section-description:
    fontFamily: "\"FT Base\", system-ui, sans-serif"
    fontSize: 19.6992px
    fontWeight: 300
    lineHeight: 29.5488px
  marquee:
    fontFamily: "\"FT Base\", system-ui, sans-serif"
    fontSize: 19.4048px
    fontWeight: 300
    lineHeight: 23.2858px
  body-lg:
    fontFamily: "\"FT Base\", system-ui, sans-serif"
    fontSize: 17.6992px
    fontWeight: 300
    lineHeight: 26.5488px
  body:
    fontFamily: "\"FT Base\", system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: "\"FT Base\", system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body-sm:
    fontFamily: "\"FT Base\", system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 21px
  bio:
    fontFamily: "\"FT Base\", system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  legal:
    fontFamily: "\"FT Base\", system-ui, sans-serif"
    fontSize: 11.6px
    fontWeight: 300
    lineHeight: 16.82px
  mono-tag:
    fontFamily: "\"Fragment Mono\", monospace"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 13.2px
    letterSpacing: 1.1px
    textTransform: uppercase
  mono-promo:
    fontFamily: "\"Fragment Mono\", monospace"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 16.8px
    letterSpacing: 0.48px
    textTransform: uppercase

rounded:
  xs: 4px
  sm: 6px
  base: 12px
  large: 22.7971px
  input-search: 37.5942px
  pill: 999px

spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 15.3987px
  s5: 19.3987px
  s6: 23.3987px
  s7: 30.7971px
  s8: 38.7971px
  s10: 61.5942px
  btn-x: 25px
  section-side: 57.383px
  section: 91.5008px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "1px solid #b05a36"
    padding: 12px 25px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    border: "1px solid #2a2b2f"
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "1px solid #b05a36"
    padding: 12px 25px
    height: 50px
  button-outlined-hover:
    backgroundColor: "{colors.midnight}"
    textColor: "{colors.on-primary}"
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "1px solid #fef9ef"
    padding: 12px 25px
    height: 50px
  button-light-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  text-input:
    backgroundColor: "{colors.white}"
    textColor: "{colors.ink}"
    typography: "{typography.body-sm}"
    rounded: "{rounded.pill}"
    border: "1px solid #737373"
    padding: 12px 15.3987px
    height: 48px
  card-step:
    backgroundColor: "{colors.cream}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-card}"
    rounded: "{rounded.base}"
    padding: 38.7971px 19.3987px
  card-stat-gradient:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.large}"
    backgroundImage: "linear-gradient(rgb(176, 90, 54), rgba(216, 161, 131, 0.96))"
  tag-mono:
    textColor: "{colors.ink}"
    typography: "{typography.mono-tag}"
  notification-banner:
    backgroundColor: "{colors.green-10p}"
    textColor: "{colors.ink}"
    typography: "{typography.mono-tag}"
  nav:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    padding: 15.3987px 57.383px
  link-text-hover:
    textColor: "{colors.primary}"
  footer:
    backgroundColor: "{colors.cream}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 0px 0px 38.7971px
---

## Overview

Function Health sells a membership of 160+ lab tests twice a year, positioned as premium preventive health. The site feels like a calm lifestyle magazine: a warm beige canvas (`{colors.canvas}` — `#fef9ef`, the site's own `--beige` / `--fill-01`), cream cards (`{colors.cream}` — `#f5eee1`, `--cream` / `--fill-02`), midnight text (`{colors.ink}` — `#2a2b2f`, `--midnight`), and a single burnt-orange accent (`{colors.primary}` — `#b05a36`, `--orange` / `--fill-04`).

Headlines are set in **Financier Display** at weight 300 — a light, classical serif — and nearly every headline switches one phrase into orange italic ("Testing is *easy*", "Monitor early indicators of *1000s of diseases*", "Less stuff. *More* healthy years."; class `u-orange-italic`). Body copy is **FT Base** at weight 300; small uppercase labels use **Fragment Mono**. The hero is a dark, motion-blurred photograph of people carrying boxes ("Less stuff.") with cream text, a frosted header and a row of hero stats.

Product imagery is mostly UI vignettes drawn in the brand palette: a booking calendar with an orange selected day, biomarker range charts with orange dots, and recommendation rows with orange icon tiles — all on cream cards.

**Key Characteristics:**
- Beige `#fef9ef` canvas, cream `#f5eee1` cards and footer, midnight `#2a2b2f` text — no pure white or pure black surfaces.
- Light (300) Financier Display headlines with an orange italic accent phrase.
- FT Base 300 for body; 600 only for buttons, stats and labels.
- Burnt-orange `#b05a36` pill buttons (999px radius, `12px 25px`, 50px) whose hover flips to midnight `#2a2b2f`.
- Fragment Mono uppercase with +1.1px tracking for tags and the notification banner.
- Fluid `clamp()` scales for type, spacing and radius, exposed as CSS custom properties (`--h1`, `--s1 … --s13`, `--radius-base`).
- 12px-radius cream cards with drawn UI vignettes instead of stock photography.

## Colors

> Source pages measured: home (`/`), `/pricing`, `/faq`. Names in parentheses are the site's own CSS custom properties.

### Brand & Action
- **Orange** (`{colors.primary}` — `#b05a36`; `--orange`, `--fill-04`, `--text-04`, `--stroke-05`): pill CTAs, italic headline accents, step numbers ("01"), link hover, chart dots.
- **Primary Hover / Midnight** (`{colors.primary-hover}` — `#2a2b2f`): measured — the orange "Start testing" pill turns midnight on hover; the outlined "See how it works" pill also fills midnight.
- **On Primary** (`{colors.on-primary}` — `#fef9ef`): label on orange is beige, not white.

### Surface
- **Canvas / Beige** (`{colors.canvas}` — `#fef9ef`; `--beige`, `--fill-01`): page background (largest area).
- **Cream** (`{colors.cream}` — `#f5eee1`; `--cream`, `--fill-02`): step cards, pricing cards, footer.
- **Dark Cream** (`{colors.dark-cream}` — `#d1c9bf`; `--dark-cream`, `--stroke-02`): borders and dividers (most frequent border color).
- **Sand** (`{colors.sand}` — `#ddd6ca`): larger muted panels.
- **White** (`{colors.white}` — `#ffffff`): form inputs only.
- **Green 10%** (`{colors.green-10p}` — `#f1f3e5`; `--green-10p`): notification banner.
- **Orange 10%** (`{colors.orange-10p}` — `#f6e9dc`; `--orange-10p`).

### Text
- **Ink / Midnight** (`{colors.ink}` — `#2a2b2f`; `--midnight`, `--text-03`, `--fill-03`): headlines, body, nav on light.
- **Ink Secondary** (`{colors.ink-secondary}` — `#515151`; `--gray`, `--text-02`): the long legal footer copy, marquee of conditions, biomarker lists.
- **Ink Quote** (`{colors.ink-quote}` — `#242424`): pricing testimonials.
- **Control Border** (`{colors.control-border}` — `#737373`; `--light-gray`, `--stroke-06`): input borders.

### Supporting & Semantic
- **Light / Medium / Dark Green** (`{colors.light-green}` `#79bd8b`, `{colors.medium-green}` `#4c9a62`, `{colors.dark-green}` `#13411f`): `--light-green`, `--medium-green`, `--dark-green`; light and medium green appear as measured border colors (in-range chart states).
- **Blue** (`{colors.blue}` — `#488ad5`, `--blue`).
- **Error** (`{colors.error}` — `#db0000`, `--error`): used in `inset 0 0 0 1px var(--error)` field-error rings in the stylesheet.

## Typography

### Font Families
- **Financier Display** — served as `"Financier Display", Georgia, serif` (`--font-serif`); loaded 300 normal and 300 italic. A Klim Type Foundry serif by Kris Sowersby, originally made for the Financial Times ([Klim](https://klim.co.nz/fonts/financier-display/)).
- **FT Base** — served as `"FT Base", system-ui, sans-serif` (`--font-sans`); loaded 300, 400, 600. Its foundry could not be confirmed from an official source.
- **Fragment Mono** — served as `"Fragment Mono", monospace` (`--font-mono`); loaded 400. Published on [Google Fonts](https://fonts.google.com/specimen/Fragment+Mono).

### Hierarchy

| Token | Family | Size | Weight | Line Height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display-hero}` | Financier Display | 76.5418px | 300 | 68.8876px | normal | Hero h1, pricing h1, FAQ h1 |
| `{typography.display-section}` | Financier Display | 61.5942px | 300 | 61.5942px | normal | Section h2 |
| `{typography.display-hero-mobile}` | Financier Display | 57.3026px | 300 | 53.8645px | normal | h1 at 390px |
| `{typography.display-section-mobile}` | Financier Display | 48.2104px | 300 | 48.2104px | normal | h2 at 390px |
| `{typography.heading-category}` | Financier Display | 43.3446px | 300 | 43.3446px | normal | Biomarker categories |
| `{typography.heading-card}` | Financier Display | 32.9475px | 300 | 37.8896px | normal | Step card titles |
| `{typography.heading-newsletter}` | Financier Display | 27.2px | 300 | 29.92px | normal | Footer newsletter headline |
| `{typography.heading-faq}` | FT Base | 33.2483px | 600 | 43.2228px | normal | FAQ group headings |
| `{typography.stat}` | FT Base | 23.6992px | 600 | 29.624px | normal | Hero stats ("160+ lab tests") |
| `{typography.section-description}` | FT Base | 19.6992px | 300 | 29.5488px | normal | Section descriptions |
| `{typography.marquee}` | FT Base | 19.4048px | 300 | 23.2858px | normal | Disease marquee |
| `{typography.body-lg}` | FT Base | 17.6992px | 300 | 26.5488px | normal | Module subtitles, biomarker lists |
| `{typography.body}` | FT Base | 16px | 300 | 24px | normal | Body, nav, footer links |
| `{typography.button}` | FT Base | 16px | 600 | 24px | normal | Pill labels |
| `{typography.body-sm}` | FT Base | 14px | 300 | 21px | normal | Card descriptions, inputs |
| `{typography.bio}` | FT Base | 14px | 400 | 21px | normal | People bios |
| `{typography.legal}` | FT Base | 11.6px | 300 | 16.82px | normal | Legal footer copy |
| `{typography.mono-tag}` | Fragment Mono | 11px | 400 | 13.2px | 1.1px | Uppercase banner/name tags |
| `{typography.mono-promo}` | Fragment Mono | 12px | 300 | 16.8px | 0.48px | Uppercase promo tag |

### Principles
- **Light everywhere.** Serif headlines and sans body are both 300; weight 600 is reserved for actions, stats and labels.
- **One italic phrase per headline**, in orange — the brand's signature move.
- **Solid display leading.** Headlines run at line-height 1.0 or tighter (76.5418/68.8876 = 0.9).
- **Fluid scale.** Headline sizes come from `clamp()` tokens: `--h1 clamp(3.5625rem, 2.1617vw + 3.0545rem, 5rem)`, `--h2 clamp(3rem, 1.5038vw + 2.6466rem, 4rem)`, `--heading-xl clamp(3.375rem, 4.3233vw + 2.359rem, 6.25rem)`; the non-integer px values above are those tokens computed at 1280px.
- **Mono for metadata.** Fragment Mono uppercase with positive tracking marks banners, tags and names.

### Note on Font Substitutes
Financier Display is commercial (Klim). The site's own serif fallback is `Georgia`; the sans falls back to `system-ui`. Fragment Mono is available from Google Fonts. No official substitute for FT Base is named.

## Layout

### Spacing System
The site defines a 13-step fluid spacing scale: `--s1 .25rem`, `--s2 .5rem`, `--s3 .75rem`, `--s4 clamp(.75rem, …, 1rem)` … `--s13 clamp(5rem, …, 7.5rem)`. Values computed at 1280px:
- `{spacing.s1}` 4px · `{spacing.s2}` 8px · `{spacing.s3}` 12px · `{spacing.s4}` 15.3987px · `{spacing.s5}` 19.3987px · `{spacing.s6}` 23.3987px · `{spacing.s7}` 30.7971px · `{spacing.s8}` 38.7971px · `{spacing.s10}` 61.5942px.
- Button horizontal padding `{spacing.btn-x}` 25px; header side padding `{spacing.section-side}` 57.383px; section padding `{spacing.section}` 91.5008px.
- Most frequent gaps: 12px, 8px, 4px, 15.3987px.

### Grid & Container
- `--site-margin clamp(1.25rem, 4.1353vw + .2782rem, 4rem)`, `--max-viewport 90` (rem), `--content-inset-x var(--s7)`.
- Three-column step cards ("01 / 02 / 03"), centered section headings with a checklist row beneath, a two-row horizontally scrolling marquee of conditions around a centered chart card, people rails (`--person-card-width 17.5rem`).
- Hero: full-bleed photo with headline bottom-left and stats bottom-right separated by thin vertical rules.

### Whitespace Philosophy
Very open: one centered serif headline per section, generous space above and below (`--section-top/bottom clamp(3rem, …, 6.2rem)`), cards with large internal padding.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Step cards, footer |
| 1 | `rgba(0, 0, 0, 0.1) 0px 2px 12px 0px` | Small floating elements |
| 2 | `rgba(0, 0, 0, 0.15) 0px 0px 32px 0px` | Floating UI vignettes |
| 3 | `rgba(42, 43, 47, 0.1) 12px 32px 80px 0px` | Large hero/product overlays |
| Hairline | `inset 0 0 0 1px var(--stroke-04)` | Control outlines (stylesheet) |

Shadows are soft, warm-tinted (midnight `#2a2b2f` base) and used mainly on illustrative UI vignettes, not on content cards.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | `--radius-xs` small UI |
| `{rounded.sm}` | 6px | `--radius-small`; tiles inside vignettes |
| `{rounded.base}` | 12px | `--radius-base`; step cards, pricing cards |
| `{rounded.large}` | 22.7971px | `--radius-large` computed; gradient stat cards |
| `{rounded.input-search}` | 37.5942px | FAQ search field |
| `{rounded.pill}` | 999px | All buttons, inputs, header tag chip |

No clip-paths or skewed shapes. The header nav is a frosted bar: background `rgba(0, 0, 0, 0.07)` with `backdrop-filter: blur(20px)` over the hero photo.

### Imagery & Art Direction
- Hero: a dark, warm, motion-blurred photograph (people hurrying with cardboard boxes) — cinematic and editorial rather than clinical.
- A small dark pill tag ("Function Day") sits above the hero headline.
- Hero stats are separated by thin vertical rules: "160+ lab tests / Total each year", "Whole body / Tested 2x per year", a struck-through old price next to the offer price.
- Product vignettes reuse the palette: orange selected calendar day, orange time slot, range charts labelled in mono ("ABOVE RANGE", "IN RANGE", "BELOW RANGE").
- Recommendation rows: white rounded rows with orange square icon tiles (Foods, Supplements, Daily health).
- Checklist items use small orange outlined check circles.
- Condition names scroll in two marquee rows separated by small dots, in gray `#515151`.
- Voice: short, confident, slightly playful ("Less stuff. More healthy years.", "Testing is easy").

## Components

### Buttons

**`button-primary`** — "Start testing", "Claim", "Join Function": `{colors.primary}` fill with 1px matching border, beige `{typography.button}` (16px/600) label, padding `12px 25px`, 50px tall, radius 999px. Hover `button-primary-hover`: fill and border become `{colors.midnight}` `#2a2b2f`.

**`button-outlined`** — "See how it works": beige fill, orange 1px border and label. Hover: fills midnight with beige label.

**`button-light`** — header "Start testing" over the hero: beige fill, orange label. Hover: fills orange with beige label.

### Inputs

**`text-input`** — zip-code / email fields: white, 1px `#737373` border, radius 999px, padding `12px 15.3987px`, 48px tall, 14px/300 text. The FAQ search field uses radius 37.5942px, padding `12px 72px 12px 16px`, 40px.

### Cards

**`card-step`** — cream, radius 12px, padding `38.7971px 19.3987px`: orange step number, serif `{typography.heading-card}` title, 14px description, then an illustrative UI vignette (calendar, range chart, recommendation list).

**`card-stat-gradient`** (pricing) — radius 22.7971px with `linear-gradient(rgb(176, 90, 54), rgba(216, 161, 131, 0.96))` and beige numerals.

**Pricing card** — cream panel with a Fragment Mono promo tag ("ACT NOW: FUNCTION DAY PRICING"), price, note in `#515151`, and testimonials in `#242424`.

### Labels

**`tag-mono`** — Fragment Mono 11px uppercase, +1.1px.
**`notification-banner`** — top strip on `{colors.green-10p}`: "FUNCTION DAY: ~~$365~~ $295 FOR A LIMITED TIME" in `{typography.mono-tag}`.

### Navigation

**`nav`** — over the hero: "Function" logo (striped circle + wordmark), links "How it works · What we test · Imaging · FAQs · About" in beige `{typography.body}`, "Log in" (16px/600), the `button-light` "Start testing", search and menu icons. Padding `15.3987px 57.383px`; the nav bar has `rgba(0, 0, 0, 0.07)` fill with `backdrop-filter: blur(20px)`.

**`link-text-hover`** — text links (`fh-text-link`) turn `{colors.primary}` on hover (measured on FAQ category links).

### Footer

**`footer`** — `{colors.cream}`, padding `0px 0px 38.7971px`: newsletter signup with serif `{typography.heading-newsletter}` headline, link columns ("Company", …) in `{typography.body}` with orange accents, legal links 11px/300, and long legal copy in `{typography.legal}` `#515151`.

## Design System Architecture

Function Health publishes **no public design system, brand guidelines or token package** (searches listed in `SOURCES.json`). The typefaces are documented by their foundries ([Klim — Financier Display](https://klim.co.nz/fonts/financier-display/), [Google Fonts — Fragment Mono](https://fonts.google.com/specimen/Fragment+Mono)). The de-facto system is clearly visible in the site's CSS custom properties.

### Token architecture
- **Primitive palette by name**: `--beige #FEF9EF`, `--cream #F5EEE1`, `--dark-cream #D1C9BF`, `--midnight #2A2B2F`, `--orange #B05A36`, `--orange-10p #F6E9DC`, `--gray #515151`, `--light-gray #737373`, `--light-green #79BD8B`, `--medium-green #4C9A62`, `--dark-green #13411F`, `--green-10p #F1F3E5`, `--blue #488AD5`, `--error #DB0000`.
- **Semantic role tokens by number**: `--fill-01 … --fill-04` (beige, cream, midnight, orange), `--text-01 … --text-05`, `--stroke-01 … --stroke-06`. Components reference these (e.g. `inset 0 0 0 1px var(--stroke-04)`).
- **Fluid size tokens**: `--h1 … --h6`, `--heading-xl`, `--text-xs … --text-xxl`, `--stat`, `--pull-quote`, `--sidebar-quote`, `--tagline`; spacing `--s1 … --s13`; radius `--radius-xs/small/base/large/xl`; layout `--site-margin`, `--section-top/bottom`, `--control-height-md 3rem`, `--border-width-control 1.5px`.
- **Font tokens**: `--font-sans`, `--font-serif`, `--font-mono`.
- **Class naming**: BEM-like component classes (`threecol_card-title`, `hero_stat-number`, `fh-button fh-button--light`, `fh-text-link`, `section-heading-2026__description`) plus utilities (`u-orange-italic`, `serif`, `mono`). The newsletter/zip forms are rendered as `astro-island` Svelte components.

### Theming
No dark mode. Dark moments (hero) are photography with beige text. The consent manager is themed separately through `--k-*` variables (Ketch) in the same palette.

### Type & spacing systems
All type and spacing scale fluidly between `--min-viewport 23.5` and `--max-viewport 90` (rem) via `clamp()`.

### Component model
Observed: notification banner, transparent header with frosted links, hero with stats, step cards with UI vignettes, checklist row, marquee, chart card, biomarker category grid, people rail, member story cards, pricing card with promo tag, comparison rows, zip-code search, FAQ list with search, newsletter signup, footer.

### Accessibility
A "Skip past hero" skip-link is present. Control height token `--control-height-md 3rem` (48px) matches the measured input height. No published accessibility policy was found.

### Delivery
No public npm package, Figma kit or versioned library.

## Do's and Don'ts

### Do
- Use beige `#fef9ef` for the page and cream `#f5eee1` for cards and footer.
- Set headlines in Financier Display 300 and italicise one phrase in orange `#b05a36`.
- Keep body FT Base 300 in midnight `#2a2b2f`; legal copy in `#515151`.
- Use fully rounded orange pills with beige labels; hover to midnight.
- Mark metadata in Fragment Mono uppercase with positive tracking.
- Illustrate with small, palette-matched UI vignettes on cream cards.

### Don't
- Don't use pure white or black backgrounds.
- Don't use heavy serif weights; the brand serif is always light.
- Don't put more than one italic accent in a headline.
- Don't use square or small-radius buttons.
- Don't use bright UI colors outside the orange/green chart states.
- Don't add hard shadows to content cards.

## Responsive Behavior

### Breakpoints
Type and spacing are fluid (`clamp()` between 23.5rem and 90rem). Measured at 1280px and 390px:

| Width | Key Changes |
|---|---|
| 1280px | h1 76.5418px/68.8876px; h2 61.5942px; header padding 15.3987px 57.383px; three step cards in a row |
| 390px | h1 57.3026px/53.8645px; h2 48.2104px; header 90px tall, padding `16px 0px 8px`; cards stack |

### Mobile type
Most frequent sizes at 390px: 11.6px, 16px, 14px, 16.0584px, 16.026px, 48.2104px.

### Touch Targets
Pills are 50px tall; inputs 48px (`--control-height-md`).

### Collapsing Strategy
Step cards stack; nav links hide (`hide-on-mobile`) behind the menu icon; marquee and people rails scroll horizontally.

## Iteration Guide

1. Start on `{colors.canvas}`; group content in `{colors.cream}` cards with `{rounded.base}`.
2. Write a `{typography.display-section}` headline with one orange italic phrase.
3. Body in `{typography.body}` / `{typography.body-lg}`, midnight.
4. One `button-primary` plus an optional `button-outlined`, centered.
5. Use `tag-mono` for metadata and promos.
6. Use the site's tokens (`--fill-0x`, `--text-0x`, `--stroke-0x`, `--s1…--s13`) when naming new styles.
7. Hover states only as measured: orange → midnight; outlined → midnight fill; links → orange.
8. Verify new values on `/`, `/pricing` and `/faq`.
