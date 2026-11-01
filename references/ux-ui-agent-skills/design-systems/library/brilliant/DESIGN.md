---
version: alpha
name: Brilliant
category: "Education"
description: "Brilliant (brilliant.org) as measured live — a white and warm-stone #f5f3f1 canvas, black headlines in the slab-serif CoFo Robert (76px/500, -1.4px tracking) over CoFo Brilliant sans body text in 60%-black #00000099, a single green #29cc57 pill CTA (9999px radius, 60px tall, hover #15b441), floating pill navigation with a 1px #e4e4e4 hairline, 44px-radius stat cards and 20px-radius course tiles with a 4px #e5e5e5 bottom lip — tokens shipped as Panda CSS variables (--panda-*)."

colors:
  primary: "#29cc57"
  primary-hover: "#15b441"
  primary-active: "#009b2b"
  canvas: "#ffffff"
  canvas-stone: "#f5f3f1"
  surface-secondary: "#f8f8f8"
  ink: "#00000099"
  ink-strong: "#000000"
  ink-tertiary: "#00000066"
  ink-muted: "#999999"
  on-primary: "#ffffff"
  hairline: "#e4e4e4"
  border-primary: "#0000001a"
  card-border: "#e5e5e5"
  ghost-hover: "#dcdad8"
  teal-link: "#279b8d"
  select-blue: "#456dff"
  wash-peach: "#ffede0"
  wash-sage: "#e7eee2"
  wash-ice: "#f0f8fa"
  yellow: "#f7c325"
  papaya: "#ff775c"
  pink: "#ff6bd5"

typography:
  display:
    fontFamily: "\"CoFo Robert\", sans-serif"
    fontSize: 76px
    fontWeight: 500
    lineHeight: 79.8px
    letterSpacing: -1.4px
  display-mobile:
    fontFamily: "\"CoFo Robert\", sans-serif"
    fontSize: 30px
    fontWeight: 500
    lineHeight: 33px
  headline:
    fontFamily: "\"CoFo Robert\", sans-serif"
    fontSize: 60px
    fontWeight: 500
    lineHeight: 66px
    letterSpacing: -1.2px
  headline-sm:
    fontFamily: "\"CoFo Robert\", sans-serif"
    fontSize: 50px
    fontWeight: 500
    lineHeight: 55px
    letterSpacing: -0.5px
  title-lg:
    fontFamily: "\"CoFo Brilliant\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
    letterSpacing: -0.36px
  title:
    fontFamily: "\"CoFo Brilliant\", sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 37.5px
    letterSpacing: -0.3px
  name:
    fontFamily: "\"CoFo Brilliant\", sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 30px
  lead:
    fontFamily: "\"CoFo Brilliant\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27.6px
  card-title:
    fontFamily: "\"CoFo Brilliant\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 25px
  button-lg:
    fontFamily: "\"CoFo Brilliant\", sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 25px
  body:
    fontFamily: "\"CoFo Brilliant\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"CoFo Brilliant\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
  caption:
    fontFamily: "\"CoFo Brilliant\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  legal:
    fontFamily: "\"CoFo Brilliant\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px

rounded:
  sm: 12px
  tile: 20px
  card: 32px
  stat: 44px
  button-outline: 54px
  pill: 9999px

spacing:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  nav-x: 28px
  xxl: 32px
  gutter: 38px
  section-sm: 40px
  section: 80px
  section-lg: 112px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 60px
    shadow: "0px 4px 7px 0px rgba(0, 0, 0, 0.05)"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
  button-ghost:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-tertiary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 60px
    shadow: "0px 4px 7px 0px rgba(0, 0, 0, 0.05)"
  button-ghost-hover:
    backgroundColor: "{colors.ghost-hover}"
    textColor: "{colors.ink-tertiary}"
    rounded: "{rounded.pill}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.button-outline}"
    border: "2px solid {colors.border-primary}"
    padding: 8px 14px
    height: 40px
  button-signup:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button-outline}"
    padding: 16px 20px
    height: 48px
  segmented-tab-active:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 16px
    height: 44px
  segmented-tab:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-tertiary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 16px
    height: 44px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    border: "1px solid {colors.hairline}"
    padding: 8px 8px 8px 28px
    height: 58px
  stat-card:
    textColor: "{colors.ink-strong}"
    typography: "{typography.title}"
    rounded: "{rounded.stat}"
    border: "1px solid {colors.hairline}"
    padding: 32px 8px
  course-tile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.tile}"
    border: "2px solid {colors.card-border}"
    shadow: "0px 4px 0px 0px {colors.card-border}"
    padding: 40px
  feature-panel:
    backgroundColor: "{colors.wash-peach}"
    rounded: "{rounded.card}"
  link:
    textColor: "{colors.teal-link}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.on-primary}"
    typography: "{typography.legal}"
---

## Overview

Brilliant's homepage reads like a calm, expensive textbook. The hero sits on a warm stone `#f5f3f1` field with a
faint isometric grid fading toward the bottom; a floating white **pill navigation bar** (1px `#e4e4e4` hairline,
9999px radius) holds the "Brilliant" wordmark at left and a small outlined "Sign in" pill at right. The headline —
"Your personal tutor for math and coding" — is set in **CoFo Robert**, a slab serif, at 76px/500 with `-1.4px`
tracking, in pure black. Beneath it a 20px grey sub-line, then two large pills: a green **"I'm a learner"** and a
white "I'm a parent or teacher" with grey text. To the right a tall white rounded card shows a live interactive math
widget — a sine wave on a grid, a unit circle, `f(θ) = cos(θ)` set in a typewriter face with boxed glyphs, and a
black cursor arrow mid-drag.

Below, three outlined stat cards with 44px corners ("Fully accredited", "100,000+", "10 million+") lead into
"Meet Koji, your personal tutor" — Koji is a green gradient blob mascot with a single square eye — and a black/white
segmented toggle (Math / Coding). Feature rows alternate a sans 36px title + 16px grey paragraphs with soft-coloured
panels (peach `#ffede0`, sage `#e7eee2`) containing white UI cards of interactive problems (draggable tiles, empty
dashed answer slots).

The voice is direct and reassuring: "A visual, interactive tutor, not a cheating machine", "Adapts to exactly where
you are". The palette is almost monochrome — black, 60%-black text, white and stone — with **green `#29cc57`** used
only for the primary action and Koji.

**Key Characteristics:**
- Serif display (CoFo Robert 500, 50–76px, negative tracking) vs. sans everything else (CoFo Brilliant 400/500/700).
- Body text is translucent black: `rgba(0,0,0,0.6)` `#00000099` (most-read colour); tertiary `#00000066`.
- One green pill CTA `#29cc57` (hover `#15b441`), 60px tall, 9999px radius, soft `0 4px 7px rgba(0,0,0,.05)` shadow.
- Pills everywhere: nav bar, buttons, segmented toggle; large radii on cards (20 / 32 / 44px).
- Course tiles use a 2px `#e5e5e5` border plus a solid `0 4px 0 #e5e5e5` bottom lip — a tactile, game-like detail.
- Warm stone hero `#f5f3f1` and pastel feature panels; a black footer.

## Colors

> **Source pages:** home (`/`), `/courses/`; token names from the live `--panda-*` CSS variables.

### Brand & Accent
- **Green** (`{colors.primary}` — `#29cc57`): `--panda-colors-bg-green-primary` / `bg-success-primary` / `green-500`. Primary CTA, Sign up, Koji.
- **Green Hover** (`{colors.primary-hover}` — `#15b441`): `bg-success-hover`; measured hover of "I'm a learner" and "Sign up".
- **Green Active** (`{colors.primary-active}` — `#009b2b`): `bg-success-active`, `text-green-primary`, `green-700`.
- **Teal Link** (`{colors.teal-link}` — `#279b8d`): `text-teal-link`; "See how schools use Brilliant →".
- **Select Blue** (`{colors.select-blue}` — `#456dff`): `bg-blue-primary`, `text-link`, `border-select`; focus outline `elevation-outline: 0 0 0 3px #456dff`. Also the curve colour in math widgets.
- **Subject accents** (Panda primaries): yellow `#f7c325`, papaya `#ff775c`, pink `#ff6bd5`.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`, `bg-primary`).
- **Stone** (`{colors.canvas-stone}` — `#f5f3f1`): hero field — the second-largest painted area.
- **Secondary** (`{colors.surface-secondary}` — `#f8f8f8`, `bg-secondary` / `gray-50`): `/courses/` page background, cookie card.
- **Washes:** peach `#ffede0`, sage `#e7eee2`, ice `#f0f8fa` — feature panels.
- **Hairline** (`{colors.hairline}` — `#e4e4e4`): nav bar and stat-card borders.
- **Border Primary** (`{colors.border-primary}` — `#0000001a`): outlined Sign in pill; `border-primary` and `bg-hover`.
- **Card Border** (`{colors.card-border}` — `#e5e5e5`, `gray-200`): course-tile border and lip.
- **Ghost Hover** (`{colors.ghost-hover}` — `#dcdad8`): hover fill of the white "I'm a parent or teacher" pill.

### Text
- **Ink** (`{colors.ink}` — `#00000099`, `text-secondary`): paragraphs (3,792 weighted chars).
- **Ink Strong** (`{colors.ink-strong}` — `#000000`, `text-primary`): headings, nav, list items.
- **Ink Tertiary** (`{colors.ink-tertiary}` — `#00000066`, `text-tertiary`): hero sub-line, inactive pills, stat captions.
- **Ink Muted** (`{colors.ink-muted}` — `#999999`, `text-placeholder`): legal and footer labels.

## Typography

### Font Family
- **CoFo Robert** — the display serif (served as `"CoFo Robert"` and, in a second pipeline, `coFoRobertFont` with a
  Georgia fallback; Panda token `--panda-fonts-robert: CoFo Robert, sans-serif`). Contrast Foundry sells CoFo Robert
  as a slab-serif family in 14 styles (light → black with italics), licensed commercially.
- **CoFo Brilliant** — the UI sans (served as `"CoFo Brilliant"` 400/500/700 and `coFoBrilliantFont` 500 with an Arial
  fallback; `--panda-fonts-brilliant: CoFo Brilliant, sans-serif`). The "CoFo" prefix is Contrast Foundry's naming;
  no public specimen for a "CoFo Brilliant" family was found, so it is treated as a brand-specific cut.
- Supporting faces in the CSS: `CoFo Semi Mono`, `Source Code Pro` (code), KaTeX families (math) and `Soleil` (declared in the CSS corpus).

### Hierarchy

| Token | Family | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|---|
| `{typography.display}` | CoFo Robert | 76px | 500 | 79.8px | -1.4px | Hero h1 |
| `{typography.display-mobile}` | CoFo Robert | 30px | 500 | 33px | — | Hero h1 at 390px |
| `{typography.headline}` | CoFo Robert | 60px | 500 | 66px | -1.2px | "Meet Koji, your personal tutor" |
| `{typography.headline-sm}` | CoFo Robert | 50px | 500 | 55px | -0.5px | "Effective and trusted", "Students, parents, and teachers love us" |
| `{typography.title-lg}` | CoFo Brilliant | 36px | 400 | 43.2px | -0.36px | Feature titles |
| `{typography.title}` | CoFo Brilliant | 30px | 400 | 37.5px | -0.3px | Stat-card figures |
| `{typography.name}` | CoFo Brilliant | 24px | 500 | 30px | — | Testimonial names |
| `{typography.lead}` | CoFo Brilliant | 20px | 400 | 27.6px | — | Testimonial quotes, leads (hero sub-line uses 30px leading) |
| `{typography.card-title}` | CoFo Brilliant | 20px | 700 | 25px | — | "Covered topics", "Math:" |
| `{typography.button-lg}` | CoFo Brilliant | 20px | 500 | 25px | — | Hero pill labels |
| `{typography.body}` | CoFo Brilliant | 16px | 400 | 24px | — | Paragraphs, lists |
| `{typography.button}` | CoFo Brilliant | 16px | 500 | 20px | — | Nav/sign-in pills, segmented toggle |
| `{typography.caption}` | CoFo Brilliant | 14px | 400 | 21px | — | Testimonial attribution |
| `{typography.legal}` | CoFo Brilliant | 12px | 400 | 18px | — | Footer, kidSAFE notice |

### Principles
- Serif only for big statements (≥ 50px); every functional element is sans.
- Display tracking scales with size: -1.4px @76, -1.2px @60, -0.5px @50, -0.36px @36, -0.3px @30 (Panda also defines `tighter -.05em`, `wide .025em`, `wider .04em`, `widest .1em`).
- Hierarchy comes from colour opacity (100% / 60% / 40% black) more than weight.
- On `/courses/`, small 12px labels use `0.48px` (0.04em, `wider`) tracking.

### Note on Font Substitutes
Both faces are proprietary. CoFo Robert can be licensed from Contrast Foundry. For an unlicensed approximation, use a
contemporary slab serif at 500 for display and a neutral grotesque at 400/500/700 for UI, keeping the measured sizes,
line-heights and tracking above.

## Layout

### Spacing System
- **Measured gaps:** 4px, 24px (38× each), 8px, 38px (30×), 16px, 12px, 112px, 30px, 20px, 40px; **paddings:** 24px, 28px, 40px, 80px, 12px, 65px, 32px.
- Panda spacing tokens present: `spacing-1.5` .375rem, `-3` .75rem, `-4` 1rem, `-5` 1.25rem, `-6` 1.5rem, `-8` 2rem, `-9` 2.25rem, `-11` 2.75rem, `-14` 3.5rem, `-16` 4rem, `-24` 6rem, `-28` 7rem, `-40` 10rem (Tailwind-style 4px steps).
- **Tokens:** `{spacing.xs}` 4px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.xl}` 24px · `{spacing.nav-x}` 28px · `{spacing.xxl}` 32px · `{spacing.gutter}` 38px · `{spacing.section-sm}` 40px · `{spacing.section}` 80px · `{spacing.section-lg}` 112px.

### Grid & Container
- Nav bar: 1168px wide floating pill (56px inset at 1280px), 58px tall, padding `8px 8px 8px 28px`.
- Hero: text column ~590px left, interactive card ~440×600px (32px radius) right.
- Stat cards: three equal 365px cards with ~38px gutters.
- Feature rows: two columns with ~112px gaps, alternating sides.
- `/courses/`: 176×176px square course tiles in rows on `#f8f8f8`.

### Whitespace Philosophy
Very generous: 80–112px between sections, one idea per row, lots of stone and white around each interactive card.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Stone hero, washes |
| Hairline | `1px solid #e4e4e4` | Nav bar, stat cards |
| Soft | `0px 4px 7px rgba(0,0,0,0.05)` / `0px 4px 14px rgba(0,0,0,0.05)` | Hero pills |
| Base | `0px 0px 15px 0px #0000001a` (`--panda-shadows-elevation-base`) | Interactive UI cards (15 elements) |
| Md | `0px 0px 25px 0px #0003` (`elevation-md`) | Cookie card, popovers |
| Lip | `0px 4px 0px 0px #e5e5e5` + 2px border | Course tiles |
| Outline | `0px 0px 0px 3px #456dff` (`elevation-outline`) | Focus / selection |

The Panda set also has `elevation-subtle: 0 1px 3px #0000000a` and a plan-card inset `0px -6px 0px 0px #00000026 inset`.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 12px | Small cards on `/courses/` |
| `{rounded.tile}` | 20px | Course tiles, cookie card (`--panda-radii-2xl` 1.25rem) |
| `{rounded.card}` | 32px | Hero interactive card, feature panels (`--panda-radii-3xl` 2rem) |
| `{rounded.stat}` | 44px | Stat cards |
| `{rounded.button-outline}` | 54px | Sign in / Sign up pills |
| `{rounded.pill}` | 9999px | Primary pills, nav bar, segmented toggle (`--panda-radii-full`) |

### Illustration Geometry
Product UI is the illustration: white rounded cards with math rendered in KaTeX and a typewriter face, blue
`#456dff` curves, pink and yellow highlights, black cursor arrows. Koji is a soft green gradient blob.

## Components

### Buttons

**`button-primary`** — "I'm a learner": `#29cc57`, white 20px/500, `12px 20px`, 60px tall (284px wide), 9999px radius, `0 4px 7px rgba(0,0,0,.05)`. Hover `#15b441`. Mobile: 18px label, 56px tall.

**`button-ghost`** — "I'm a parent or teacher": white face, `#00000066` label, same geometry; hover fill `#dcdad8`.

**`button-outline`** — nav "Sign in": transparent, black 16px/500, `2px solid #0000001a`, 54px radius, `8px 14px`, 40px tall.

**`button-signup`** — `/courses/` header "Sign up": `#29cc57`, 16px/500, `16px 20px`, 48px, 54px radius; hover `#15b441` with `0 1px 3px rgba(0,0,0,.3)`. Its sibling "Sign in" is outlined (`16px 24px`).

### Segmented control

**`segmented-tab-active` / `segmented-tab`** — Math / Coding toggle: active `#000000` with white 16px/500 label, inactive white with `#00000066`; `12px 16px`, 44px tall, 9999px radius, inside a light grey pill track.

### Cards & Containers

**`stat-card`** — 365×190px, 1px `#e4e4e4`, 44px radius, `32px 8px`, centred icon + 30px figure + 16px `#00000066` caption.
**`course-tile`** — 176px square, white, 2px `#e5e5e5` border, `0 4px 0 #e5e5e5` lip, 20px radius, ~40px padding; grade label ("GR 4–5", "NEW").
**`feature-panel`** — pastel wash (`#ffede0`, `#e7eee2`) with 32px radius holding a white UI card with `elevation-base` shadow.

### Navigation

**`nav`** — floating white pill bar, 1px `#e4e4e4`, 58px tall, wordmark left, Sign in pill right.

### Links

**`link`** — teal `#279b8d` 16px/400 with a trailing arrow ("See how schools use Brilliant →").

### Footer

**`footer`** — black band; white 16px links ("Courses"), `#999999` 16px column labels ("Product"), 12px/400/18px legal and kidSAFE links.

## Design System Architecture

Brilliant publishes **no public design system, brand guidelines or token package** (searches and URL checks recorded
in SOURCES.json: `brilliant.org/brand/` and `/press/` return 404; the official blog at
[blog.brilliant.org](https://blog.brilliant.org/) has no design posts; the public GitHub org
[github.com/brilliantorg](https://github.com/brilliantorg) holds forks and Elm/Django tooling but no UI kit). The
typeface vendor is public: [Contrast Foundry — CoFo Robert](https://contrastfoundry.com/typeface/cofo-robert). The
de-facto system below is read from the live site:

- **Token architecture (Panda CSS, measured).** Variables are emitted by Panda CSS with the `--panda-` prefix in two
  tiers. Primitives: `--panda-colors-green-500: #29cc57`, `green-700 #009b2b`, `gray-50 … gray-950`, `black-alpha-100 … 700`,
  `papaya-400/600`, `purple-400`, `yellow-50`. Semantic: `--panda-colors-bg-{primary|secondary|tertiary|inverse-primary|hover|disabled}`,
  `bg-{green|blue|teal|yellow|papaya|pink|red}-{primary|secondary|tertiary}`, `bg-success-{primary|hover|active}`,
  `text-{primary|secondary|tertiary|placeholder|link}`, `border-{primary|secondary|hover|active|select}` and
  `border-{hue}-{primary|bold}`. Plus `--panda-shadows-elevation-{subtle|base|md|outline}`, `--panda-radii-{sm|xs|md|2xl|3xl|full}`,
  `--panda-letter-spacings-{tighter|normal|wide|wider|widest}`, `--panda-fonts-{brilliant|robert|code|semi-mono|math}`,
  feature tokens (`--panda-colors-special-endstate-video-ad-shadow`, `--panda-z-index-in-content-glossary-card`) and
  gradient tokens (`--panda-gradients-hue-shift-color-papaya-secondary`).
- **Theming.** Colour roles are semantic (bg/text/border) so surfaces can swap; an `autoflip-*` palette
  (`--panda-colors-autoflip-gray-50`, `autoflip-green-600`, `autoflip-black-700`) suggests light/dark auto-inverting
  values. No dark mode is exposed on the marketing pages.
- **Type & spacing.** Tailwind-like 0.25rem spacing scale (`spacing-1.5` … `spacing-96`); breakpoints
  `xs 320px`, `md 481px`, `lg 769px`, `xl 992px`, `2xl 1280px` (`--panda-breakpoints-*`); two type families with
  per-size negative tracking on display.
- **Component model (observed).** Pill buttons (filled green, ghost white, outlined), segmented control, floating
  pill nav, stat card, course tile with lip, feature panel, testimonial carousel, cookie card. No published inventory.
- **Accessibility (observed).** Focus/selection ring `0 0 0 3px #456dff` and a double ring
  `0 0 0 1px var(--panda-colors-bg-primary), 0 0 0 3px var(--panda-colors-border-select)` in the CSS corpus;
  disabled tokens (`bg-disabled #0000000d`, `text-success-disabled #9fe8b3`).
- **Delivery.** Self-hosted fonts loaded both via @font-face (`CoFo Brilliant`) and a framework font loader
  (`coFoBrilliantFont` + `"coFoBrilliantFont Fallback"` metric fallbacks); no public package or Figma kit.

## Do's and Don'ts

### Do
- Set big statements in CoFo Robert 500 with negative tracking; everything else in CoFo Brilliant.
- Use translucent black for text hierarchy (100% / 60% / 40%).
- Reserve green `#29cc57` for the one primary action per view (and Koji); hover `#15b441`.
- Use pill shapes for every button and control; 20–44px radii for cards.
- Show the product: interactive math/coding cards on pastel panels, not stock photography.
- Keep sections airy (80–112px apart) on white or stone `#f5f3f1`.

### Don't
- Don't use the serif below ~30px or for UI labels.
- Don't introduce coloured text for body copy — teal `#279b8d` is only for inline "→" links.
- Don't add heavy drop shadows; the deepest is `0 0 25px rgba(0,0,0,.2)`.
- Don't square off buttons; the smallest button radius is 54px.
- Don't place two green buttons side by side — the partner action is the white ghost pill.

## Responsive Behavior

### Breakpoints

| Name | Width | Key Changes |
|---|---|---|
| 2xl | ≥ 1280px | Full two-column hero (measured) |
| xl | 992px | `--panda-breakpoints-xl` |
| lg | 769px | `--panda-breakpoints-lg` |
| md | 481px | `--panda-breakpoints-md` |
| xs | 320px | Mobile (measured at 390px): h1 76px → 30px/33px, CTA 18px label / 56px tall |

### Touch Targets
- Hero pills 60px (56px mobile), segmented tabs 44px, sign-in/sign-up 40–48px.

### Collapsing Strategy
- Mobile hero layout was not measured.
- Display serif drops from 76px to 30px; body stays 16px; mobile size list adds 15px, 18px and 40px steps.
- Mobile stat card and feature row layout was not measured.

### Image Behavior
Interactive widgets are live HTML/SVG/KaTeX, so they reflow rather than scale as bitmaps.

## Iteration Guide

1. Start on `{colors.canvas}` or `{colors.canvas-stone}`; text `{colors.ink}` / `{colors.ink-strong}`.
2. One `button-primary` (green pill) per view; secondary actions as `button-ghost` or `button-outline`.
3. Headlines: `{typography.display}` / `{typography.headline}`; titles and body in CoFo Brilliant.
4. Cards: 20px (tiles), 32px (panels), 44px (stats); tiles get the 4px `#e5e5e5` lip.
5. Map new colours to existing `--panda-colors-*` roles; don't invent hues.
6. Run `node web/scripts/verify-designs.mjs --slug=brilliant` after edits.
