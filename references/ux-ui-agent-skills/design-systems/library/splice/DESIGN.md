---
version: alpha
name: Splice
category: "Music & Audio"
description: "Splice (splice.com): a near-black #121214 UI over full-bleed video and #000000 sections, with Söhne Breit (served as SoehneBreit, 400) for wide display headlines — 48px/60px hero, 36px section titles — and InterVariable for UI (16px/24px body). Primary actions are cobalt #1253ff pills (64px radius, 13.504px 32px, hover #0033ff); nav links are #a6a8ad turning white; links #528fff; accents come from a five-color tile palette (#f4d04e, #7cf727, #ff8aa6, #62daff, #b874ff)."

colors:
  primary: "#1253ff"
  primary-hover: "#0033ff"
  primary-deep: "#0029cc"
  promo: "#0033ff"
  canvas: "#121214"
  black: "#000000"
  ui-01: "#232426"
  ui-03: "#303236"
  ui-04: "#45464d"
  border: "#63656d"
  glass: "#ffffff14"
  cookie-surface: "#1c1c1c"
  white: "#ffffff"
  ink: "#ffffff"
  ink-hero: "#fafafb"
  ink-02: "#c8c9cc"
  ink-03: "#a6a8ad"
  ink-muted-alpha: "#ffffffa3"
  ink-on-inverse: "#121214"
  link: "#528fff"
  focus: "#82b9ff"
  highlight-yellow: "#f1f607"
  accent-orange: "#f4d04e"
  accent-green: "#7cf727"
  accent-red: "#ff8aa6"
  accent-blue: "#62daff"
  accent-purple: "#b874ff"
  green-accent: "#a6ff72"
  error: "#e81d01"
  success: "#45a21a"
  warning: "#f5950a"

typography:
  display-xl:
    fontFamily: "SoehneBreit, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 54.4px
    fontWeight: 400
    lineHeight: 77.7143px
  hero:
    fontFamily: "SoehneBreit, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: -0.8592px
  plans-title:
    fontFamily: "SoehneBreit, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 43.68px
    fontWeight: 700
    lineHeight: 52.416px
    letterSpacing: -0.682282px
  section-title:
    fontFamily: "SoehneBreit, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 45px
    letterSpacing: -0.3996px
  feature-title:
    fontFamily: "SoehneBreit, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 35px
    letterSpacing: -0.1932px
  section-title-mobile:
    fontFamily: "SoehneBreit, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 35px
    letterSpacing: -0.3108px
  title:
    fontFamily: "Soehne, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 25px
    letterSpacing: -0.084px
  card-title:
    fontFamily: "SoehneBreit, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
  button-large:
    fontFamily: "InterVariable, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 21.6px
  body:
    fontFamily: "InterVariable, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "InterVariable, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
  nav:
    fontFamily: "InterVariable, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8571px
  toggle:
    fontFamily: "InterVariable, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20.0004px
  small:
    fontFamily: "InterVariable, system-ui, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.5714px

rounded:
  artwork: 2px
  xs: 4px
  sm: 8px
  md: 16px
  plan-card: 24px
  search: 40px
  cta: 64px
  nav-cta: 100px
  full: 9999px
  circle: 50%

spacing:
  3xs: 2px
  2xs: 4px
  xs: 8px
  sm: 16px
  md: 20px
  lg: 24px
  xl: 32px
  2xl: 48px
  4xl: 64px
  5xl: 80px
  marketing-gutter: 104px
  header: 56px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 13.504px 32px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-hero:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.white}"
    typography: "{typography.button-large}"
    rounded: "{rounded.cta}"
    padding: 13.504px 32px
    height: 51px
  button-nav:
    backgroundColor: "{colors.white}"
    textColor: "{colors.ink-on-inverse}"
    border: "1px solid #c8c9cc"
    typography: "{typography.body}"
    rounded: "{rounded.nav-cta}"
    padding: 8px 20px
    height: 42px
  button-outlined:
    backgroundColor: transparent
    textColor: "{colors.white}"
    border: "1px solid #45464d"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 11.008px 32px
    height: 48px
  button-search:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.search}"
    padding: 7.504px 20px
    height: 44px
  billing-toggle-active:
    backgroundColor: "{colors.white}"
    textColor: "{colors.black}"
    typography: "{typography.toggle}"
    rounded: "{rounded.full}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-03}"
    typography: "{typography.nav}"
    height: 56px
    padding: 10px 20px 0px
  nav-link-hover:
    textColor: "{colors.white}"
  promo-bar:
    backgroundColor: "{colors.promo}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  artwork-tile:
    rounded: "{rounded.artwork}"
    boxShadow: "rgba(0, 0, 0, 0.07) 0px 0px 0px 1px inset"
    size: 190px
  plan-card:
    backgroundColor: "{colors.glass}"
    border: "1px solid #ffffff14"
    rounded: "{rounded.plan-card}"
    boxShadow: "rgba(0, 0, 0, 0.15) 0px 8px 16px 0px, rgba(0, 0, 0, 0.12) 0px 12px 48px 0px, rgba(0, 0, 0, 0.14) 0px 24px 36px 0px"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-02}"
    typography: "{typography.small}"
    padding: 0px 0px 80px
---

## Overview

Splice sells samples, plugins and the INSTRUMENT app to music producers, and its homepage behaves like a music video.
Under a cobalt `#0033ff` promo strip ("Get 50% off Splice Creator Annual. Subscribe now") and a slim `#121214` header,
a full-bleed, full-height video fills the viewport — in the capture, a producer kneeling on the floor of a green room
between studio monitors, working a keyboard. The headline sits low-left over the footage in white Söhne Breit: "The
industry's top sample library—royalty-free for all." A single cobalt pill ("Try now") sits under it, and a thin bar along
the bottom of the hero pairs a short description, a hand-drawn waveform line and an outlined "Play video" button.

Below the hero the page goes dark (`#121214` and `#000000`), with section headlines in Söhne Breit 36px, rows of square
sample-pack artwork (190px, 2px radius), and solid color tiles drawn from a five-color accent palette — mustard
`#f4d04e`, acid green `#7cf727`, pink `#ff8aa6`, cyan `#62daff`, violet `#b874ff`.

The voice is producer-to-producer and confident ("Southside invented trap", "Yours forever", "100% royalty free").
Display type is wide and regular-weight (400) rather than bold — width does the shouting.

**Key Characteristics:**
- Canvas `#121214`, deep sections `#000000`, raised UI `#232426`
- Söhne Breit 400 for display (48px / 60px hero, 36px sections, 28px features); InterVariable for UI
- Cobalt `#1253ff` pill CTAs, radius 64px, padding 13.504px 32px; hover `#0033ff`
- Header nav links `#a6a8ad` → `#ffffff` on hover; white outlined "Try now" pill (100px radius) in the header
- Links `#528fff`; focus ring `#82b9ff`
- Five-color accent palette for tiles and highlights
- Square artwork, 2px radius, inset 1px hairline

## Colors

### Primary blues
- **Primary** `#1253ff` (`--primary`, `--blue-40`): "Try now", "Download free", "Explore Rent-to-Own Plugins" pills.
- **Primary hover** `#0033ff` (`--blue-50`): measured hover background of the pill on /plans; also the promo strip
  and the /sounds "Search" button.
- **Primary deep** `#0029cc` (`--blue-60`).

### Surfaces
- **Canvas** `#121214` (`--ui-background`, `--gray-90`): body, header, footer.
- **Black** `#000000`: the largest background area on the homepage (dark sections).
- **UI 01** `#232426` (`--ui-01`, `--row-background-hover`), **UI 03** `#303236` (`--ui-03`, `--field-02`),
  **UI 04** `#45464d` (`--ui-04`, `--hover-ui`, outlined-button border).
- **Glass** `#ffffff14`: translucent plan cards on /plans.
- **Cookie surface** `#1c1c1c` (third-party consent banner).

### Text
- **Ink** `#ffffff` (`--text-01`), **hero ink** `#fafafb` (`--gray-05`).
- **Ink 02** `#c8c9cc` (`--text-02`): footer links, secondary copy.
- **Ink 03** `#a6a8ad` (`--text-03`): header nav links at rest.
- **Ink muted alpha** `#ffffffa3`: body copy on /plans.
- **Ink on inverse** `#121214` (`--text-on-inverse`): labels on white buttons.
- **Link** `#528fff` (`--link-01`).
- **Highlight yellow** `#f1f607`: the /sounds h1 and feature titles.

### Accent palette
`--orange-accent: #f4d04e`, `--green: #7cf727`, `--red-accent: #ff8aa6`, `--blue-accent: #62daff`,
`--purple-accent: #b874ff` — each measured as a large background area on the homepage; `--green-accent: #a6ff72`.

### Semantic
- **Error** `#e81d01` (`--red`, `--text-destructive`), **success** `#45a21a` (`--support-content-success`),
  **warning** `#f5950a` (`--support-content-warning`), **focus** `#82b9ff` (`--focus`, `--box-shadow-focus: 0 0 0 3px #82b9ff`).
- **Border** `#63656d` (`--gray-50`): the most frequent border color.

## Typography

### Font Families
- **SoehneBreit** (Söhne Breit, Klim) — display headlines; `--font-family-expressive-wide`.
- **Soehne** (Söhne, Klim) — `--font-family-expressive`; measured on the "Splice INSTRUMENT" h3.
- **InterVariable** (loaded 100–900) — UI and body; `--font-family-default`.
Fallbacks: `-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif` (the measured
computed stack begins `system-ui, "Segoe UI", Roboto, Helvetica, Arial`).

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| display-xl | SoehneBreit | 54.4px | 400 | 77.7143px | — | "Millions of royalty-free samples…" |
| hero | SoehneBreit | 48px | 400 | 60px | -0.8592px | Visible homepage h1; /sounds h1 |
| plans-title | SoehneBreit | 43.68px | 700 | 52.416px | -0.682282px | /plans h1 |
| section-title | SoehneBreit | 36px | 400 | 45px | -0.3996px | "Sample Library" |
| feature-title | SoehneBreit | 28px | 400 | 35px | -0.1932px | "100% royalty free" |
| section-title-mobile | SoehneBreit | 28px | 400 | 35px | -0.3108px | h2 at 390px |
| title | Soehne | 20px | 400 | 25px | -0.084px | "Splice INSTRUMENT" |
| card-title | SoehneBreit | 20px | 700 | 24px | — | /plans plan names ("Creator") |
| button-large | InterVariable | 18px | 500 | 21.6px | — | Hero CTA |
| body | InterVariable | 16px | 400 | 24px | — | Paragraphs |
| button | InterVariable | 16px | 500 | 19.2px | — | Pills |
| nav | InterVariable | 16px | 400 | 22.8571px | — | Header |
| toggle | InterVariable | 14px | 700 | 20.0004px | — | Monthly/Annual toggle |
| small | InterVariable | 13px | 400 | 18.5714px | — | Footer, base body size |

The token set names three type "voices" — `--splice-typography-neutral-*`, `-expressive-*`, `-amplified-*` — each with
display-l (4.5rem, 700, -.02778em), display-m (3rem), headline-m (2.25rem), headline-s (1.75rem), title-l/m/s and, for
neutral, body-l/m/s/xs and an uppercase label-m (0.75rem, .08333em tracking).

### Principles
- Display = wide Söhne Breit at regular weight with slight negative tracking.
- UI = InterVariable; 500 for actions, 400 for reading.
- Fluid sizes in tokens: `--font-size-fluid-0: clamp(3rem, 3.54vw + 2.17rem, 4.5rem)`.

### Note on Font Substitutes
Söhne and Söhne Breit are commercial typefaces by Kris Sowersby / Klim Type Foundry. Inter is open source. Without a
Söhne licence, follow the site's own fallback chain (system-ui / Segoe UI / Roboto / Helvetica / Arial) and keep the
measured sizes and tracking.

## Layout

### Spacing System
Tokens: `--space-3xs: .125rem` (2px), `--space-2xs: .25rem` (4px), `--space-xs: .5rem` (8px), `--space-sm: 1rem` (16px),
`--space-md: 1.25rem` (20px), `--space-lg: 1.5rem` (24px), `--space-xl: 2rem` (32px), `--space-2xl: 3rem` (48px),
`--space-4xl: 4rem` (64px), `--space-5xl: 5rem` (80px). Measured gaps: 32px most frequent, then 20px, 8px, 80px.

### Grid & Container
- `--max-width: 90rem`, `--content-cols: 12`, `--marketing-gutter: 104px`, `--marketing-grid-gap: clamp(1rem, 3svw, 2rem)`.
- Header: 56px, padding 10px 20px 0px; logo, then Sounds / INSTRUMENT / Rent-to-Own Plugins / Community / Pricing;
  "Log in" and a white "Try now" pill at right.
- Hero: full-bleed video, copy anchored bottom-left.

### Whitespace Philosophy
Cinematic at the top (one video, one line, one button), then tighter catalog rows of artwork.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| Hairline inset | `rgba(0, 0, 0, 0.07) 0px 0px 0px 1px inset` (`--box-shadow-inset-border`) | Artwork tiles |
| sm | `0 1px 4px rgba(0 0 0 / 12%), 0 2px 8px rgba(0 0 0 / 8%), 0 4px 6px rgba(0 0 0 / 8%)` (`--box-shadow-sm`) | Billing toggle |
| md | `0 6px 6px rgba(0 0 0 / 8%), 0 4px 16px rgba(0 0 0 / 10%), 0 8px 12px rgba(0 0 0 / 8%)` (`--box-shadow-md`) | Token |
| Plan card | `rgba(0, 0, 0, 0.15) 0px 8px 16px 0px, rgba(0, 0, 0, 0.12) 0px 12px 48px 0px, rgba(0, 0, 0, 0.14) 0px 24px 36px 0px` | /plans cards |
| Focus | `0 0 0 3px #82b9ff` | Keyboard focus |

## Shapes

| Token | Value | Use |
|---|---|---|
| artwork | 2px | Sample-pack covers |
| xs | 4px | `--border-radius-xs` |
| sm | 8px | Outlined buttons (`--corner-radius-button: .5rem`) |
| md | 16px | `--border-radius-md` |
| plan-card | 24px | /plans cards (`--border-radius-lg`) |
| search | 40px | /sounds Search button |
| cta | 64px | Primary pills |
| nav-cta | 100px | Header "Try now" |
| full | 9999px | Billing toggle (`--border-radius-full`) |
| circle | 50% | Avatars, play buttons |

Asymmetric radii also appear on decorative media (`128px 8px 8px`, `0px 0px 180px`, `180px 0px 0px`).

## Components

### Buttons

**Primary pill** — "Download free", "Try free", "Explore Rent-to-Own Plugins"
- `#1253ff`, white InterVariable 16px / 500, padding 13.504px 32px, 48px tall, radius 64px
- Hover: `#0033ff`
- Hero variant: 18px / 500, 51px tall

**Header pill** — "Try now": `#ffffff`, `#121214` 16px / 500 label, 1px solid `#c8c9cc`, padding 8px 20px, 42px, radius 100px.

**Outlined** — "Play video": transparent, 1px solid `#45464d`, white 16px / 500, padding 11.008px 32px, 48px, radius 8px.

**Search** (/sounds) — `#0033ff`, 16px / 500, padding 7.504px 20px, 44px, radius 40px.

**Billing toggle** (/plans) — active "Monthly" segment white with black 14px / 700 label, radius 9999px, `--box-shadow-sm`.

### Navigation
56px `#121214` bar; links InterVariable 16px / 400 in `#a6a8ad`, white on hover (measured); items are 64px-tall hit areas.

### Promo bar
`#0033ff` strip, white 16px / 500 text with an underlined "Subscribe now" link.

### Artwork tiles
190×190px covers, 2px radius, inset hairline `rgba(0, 0, 0, 0.07)`.

### Plan cards (/plans)
`#ffffff14` glass fill, 1px `#ffffff14` border, radius 24px, triple soft shadow; plan name SoehneBreit 20px / 700.

### Footer
`#121214`, 13px / 18.5714px links in `#c8c9cc`, 80px bottom padding; columns start with "Sounds / Search All / Create a Stack".

## Design System Architecture

Splice publishes **no public design system** documentation, Figma kit or token package (searches in `SOURCES.json`).
The typefaces are Klim's [Söhne Breit](https://klim.co.nz/fonts/soehne-breit/) and [Söhne](https://klim.co.nz/fonts/soehne/).
The live CSS exposes a mature de-facto token system, described below.

### Token architecture (observed)
1. **Primitive ramps** — 05–90 steps per hue: `--blue-05: #edf9ff` … `--blue-90: #000a33`, `--gray-05: #fafafb` …
   `--gray-90: #121214`, `--green-*`, `--orange-*`, `--purple-*`, `--red-*`, plus `-accent` brights
   (`--blue-accent: #62daff`, `--orange-accent: #f4d04e`). Overlay alphas: `--overlay-4` … `--overlay-64` and
   `-on-media` black twins.
2. **Semantic (numbered roles)** — `--ui-background`, `--ui-01` … `--ui-05`, `--text-01` … `--text-04`,
   `--text-on-color`, `--text-on-inverse`, `--icon-01/02`, `--field-01/02`, `--link-01`, `--focus`, `--hover-ui`,
   `--selected-ui`, `--disabled-01/02`, and `--support-{background|border|content}-{error|info|success|tip|warning}`.
3. **Component/feature** — `--row-background-normal|hover|focused|error`, `--rare-btn`, `--included-content-btn`,
   `--corner-radius-button`.
4. **Typography** — `--splice-typography-{neutral|expressive|amplified}-{role}-{size|weight|letter-spacing}`.

### Theming
Overlay tokens come in light (`--overlay-12: rgba(255,255,255,.12)`) and on-media (`--overlay-12-on-media: rgba(0,0,0,.12)`)
pairs for use over imagery. The measured pages are dark-only; no light theme was observed.

### Type & spacing systems
Fixed scale `--font-size-0` (4.5rem) … `--font-size-7` (.75rem) with `-small` variants for narrow screens and
`--font-size-fluid-*` clamps; per-step tracking `--letter-spacing-0: -.029em` … `--letter-spacing-7: -.001em`.
Spacing `--space-3xs` … `--space-6xl` (7.5rem). Breakpoints `--breakpoint-xxs: 25rem` … `--breakpoint-xl: 75rem`.

### Component model (observed)
Pill buttons (primary / white / outlined), header with promo bar, video hero, artwork rows, plan cards with billing toggle,
search with genre browsing (/sounds), footer.

### Accessibility
Focus ring token `--box-shadow-focus: 0 0 0 3px #82b9ff` (also `0 0 0 3px var(--focus)` across 22 rules). No published
accessibility policy was found.

### Delivery
Not public.

## Do's and Don'ts

### Do
- Use `#121214` and `#000000` for page backgrounds; let video and artwork bring color.
- Set display headlines in Söhne Breit 400 with the measured negative tracking.
- Use `#1253ff` 64px-radius pills for primary actions; hover to `#0033ff`.
- Keep header links `#a6a8ad` and brighten to white on hover.
- Use the five accent colors as solid tiles, not as text on dark.
- Keep artwork square with a 2px radius.

### Don't
- Don't bold the wide display face on marketing headlines (the /plans 700 title is the exception measured).
- Don't use the cobalt for large backgrounds beyond the promo strip.
- Don't round artwork.
- Don't mix in other display faces.
- Don't invent light-mode surfaces.

## Responsive Behavior

### Breakpoints
`--breakpoint-xxs: 25rem`, `--breakpoint-xs: 30rem`, `--breakpoint-sm: 36rem`, `--breakpoint-md: 48rem`,
`--breakpoint-lg: 62rem`, `--breakpoint-xl: 75rem`.

### Measured at 390px
- Section h2 drops from 36px / 45px to 28px / 35px (SoehneBreit 400, -0.3108px).
- Body stays 16px / 24px; primary pill is 16px / 500, padding 13.504px 32px, 48px tall.
- Header is 56px with padding 10px 20px 0px.
- The mobile size of the visible hero headline was not measured (the 390px probe hit a bot challenge).

### Touch targets
Pills 48–51px; header pill 42px; search 44px.

### Collapsing strategy
Beyond the values above, mobile layout was not measured.

## Iteration Guide

1. Page `#121214`, deep sections `#000000`, text `#ffffff` / `#c8c9cc` / `#a6a8ad`.
2. Promo strip `#0033ff`; 56px header with `#a6a8ad` links and a white 100px-radius "Try now".
3. Full-bleed video hero; bottom-left Söhne Breit 48px / 60px headline; cobalt 64px pill.
4. Section headlines Söhne Breit 36px / 45px; artwork rows at 190px with 2px radius.
5. Accent tiles from `#f4d04e`, `#7cf727`, `#ff8aa6`, `#62daff`, `#b874ff`.
6. Footer `#121214`, 13px `#c8c9cc` links.

### Quick Reference
```
canvas #121214 · black #000000 · ui #232426 · ink #ffffff · ink-02 #c8c9cc · ink-03 #a6a8ad
primary #1253ff → hover #0033ff · link #528fff · focus #82b9ff
display: SoehneBreit 400 (hero 48px/60px -0.8592px) · UI: InterVariable 16px/24px
pill: 64px radius · 13.504px 32px · 48px · 16px/500
```
