---
version: alpha
name: Khan Academy
category: "Education"
description: "Khan Academy as measured on khanacademy.org — a white canvas, near-black #151521 ink and an indigo #5753fa CTA (8px radius, 40px tall, hover #363498) on the Plus Jakarta Sans marketing homepage (42px/700 hero), sitting on top of the open-source Wonder Blocks design system whose classic product theme uses Lato, Wonder Blocks blue #1865f2, off-black #21242c, 4px radii and a #0b2149 dark-blue footer. Pill subject chips (100px radius, 1px #cbcbcd), colourful 16px-radius testimonial cards and a black footer close the page."

colors:
  primary: "#5753fa"
  primary-hover: "#363498"
  canvas: "#ffffff"
  ink: "#151521"
  ink-secondary: "#4a4c53"
  on-primary: "#ffffff"
  hairline: "#cbcbcd"
  surface-band: "#f6f6f6"
  banner-bg: "#ebf1fd"
  banner-border: "#bfcaff"
  search-hover-border: "#6c82ff"
  card-shadow: "#25236833"
  sky: "#a9dafd"
  sunflower: "#fcc539"
  leaf: "#72bb82"
  tangerine: "#f97b4f"
  footer-black: "#000000"
  wb-blue: "#1865f2"
  wb-active-blue: "#1b50b3"
  wb-faded-blue-8: "#edf3fe"
  wb-off-black: "#21242c"
  wb-neutral-strong-72: "#5f6167"
  wb-neutral-subtle: "#717378"
  wb-border-neutral: "#909296"
  wb-dark-blue: "#0b2149"
  wb-footer-text: "#8295ba"
  wb-off-white: "#f7f8fa"
  wb-red: "#d92916"
  wb-green: "#00a60e"
  wb-gold: "#ffb100"
  wb-purple: "#9059ff"
  wb-eggplant: "#5f1e5c"
  wb-teal: "#14bf96"

typography:
  display:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 42px
    fontWeight: 700
    lineHeight: 46.2px
  display-mobile:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  heading-xl:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  heading-lg:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  heading-md:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  heading-sm:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 24px
  body-lg:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24px
  chip-label:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  button:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  card-title:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
  footer-heading:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
  caption:
    fontFamily: "\"Plus Jakarta Sans\", \"Noto Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
  wb-heading-xxl:
    fontFamily: "Lato, \"Noto Sans\", Helvetica, Corbel, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
  wb-heading-lg:
    fontFamily: "Lato, \"Noto Sans\", Helvetica, Corbel, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28px
  wb-body:
    fontFamily: "Lato, \"Noto Sans\", Helvetica, Corbel, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  wb-body-small:
    fontFamily: "Lato, \"Noto Sans\", Helvetica, Corbel, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px

rounded:
  wb-control: 4px
  button: 8px
  media: 12px
  card: 16px
  wb-radius-240: 24px
  chip: 100px
  circle: 50%

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  lg-plus: 20px
  xl: 24px
  xxl: 32px
  card-y: 36px
  section-sm: 48px
  section: 64px
  section-lg: 88px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 40px
  search-field:
    backgroundColor: "{colors.banner-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.button}"
    border: "1px solid {colors.banner-border}"
    padding: 0px 16px
    height: 40px
  search-field-hover:
    backgroundColor: "{colors.banner-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.button}"
    border: "1px solid {colors.search-hover-border}"
    shadow: "inset 0 0 0 1px {colors.search-hover-border}"
  role-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.card-title}"
    rounded: "{rounded.button}"
    border: "1px solid {colors.hairline}"
    shadow: "0px 2px 2px 0px {colors.card-shadow}"
    padding: 12px
  role-card-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary-hover}"
    rounded: "{rounded.button}"
  subject-chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.chip-label}"
    rounded: "{rounded.chip}"
    border: "1px solid {colors.hairline}"
    padding: 16px 20px
    height: 66px
  testimonial-card:
    backgroundColor: "{colors.sunflower}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-sm}"
    rounded: "{rounded.card}"
    border: "1px solid {colors.hairline}"
    padding: 36px 32px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  link-hover:
    textColor: "{colors.primary-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  footer:
    backgroundColor: "{colors.footer-black}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-lg}"
  wb-button-primary:
    backgroundColor: "{colors.wb-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.wb-body-small}"
    rounded: "{rounded.wb-control}"
    padding: 0px 16px
    height: 40px
  wb-text-field:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.wb-off-black}"
    typography: "{typography.wb-body}"
    rounded: "{rounded.wb-control}"
    border: "1px solid {colors.wb-border-neutral}"
    padding: 10px 16px
    height: 40px
  wb-button-secondary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.wb-blue}"
    rounded: "{rounded.wb-control}"
    border: "1px solid {colors.wb-blue}"
    shadow: "inset 0 0 0 1px {colors.wb-blue}"
  wb-footer:
    backgroundColor: "{colors.wb-dark-blue}"
    textColor: "{colors.wb-footer-text}"
    typography: "{typography.wb-body-small}"
    padding: 12px 20px
---

## Overview

Khan Academy ships two visual layers that share one design system. The **marketing homepage** (`/`) is a recent,
airier layer: a white canvas, **Plus Jakarta Sans** at weights 500–700, near-black ink `#151521`, and an indigo
CTA `#5753fa` with 8px corners. The **product pages** (`/math/algebra`, `/login`) still render the "classic" Wonder
Blocks theme: **Lato**, Wonder Blocks blue `#1865f2`, off-black `#21242c`, 4px corners and a dark-blue `#0b2149`
footer. Both are wired through the same `--wb-*` CSS custom properties from Khan's open-source
[Wonder Blocks](https://github.com/Khan/wonder-blocks) design system.

The homepage hero is a two-column split. Left: a three-line h1 "Turn big learning goals into *real results.*"
(42px/700, the last two words italic) over a short 14px paragraph and a flat illustration of the Khan hexagon mascot
— an indigo hexagon with googly eyes, ringed like a planet, floating over a ruled-paper wedge with a rocket, a star,
a pink square and an orange pentagon. Right: a "Get started" stack of three white role cards (Student / Family /
Teacher) with indigo titles and a chevron. Below: a grey `#f6f6f6` stats band (180M+ registered users, 63B+ minutes
of learning, Free, 15+ years) and a centred cloud of pill-shaped subject chips, each with a small coloured
geometric icon (green ÷ for math, orange pencil for test prep, pink speech bubble for ELA, yellow flask for science).

The tone is earnest and non-profit: "Built for learning. Not for profit.", "Real progress starts with *how*
students learn." Italic emphasis on one or two words per headline is a recurring device.

**Key Characteristics:**
- White canvas `#ffffff`, near-black ink `#151521` (most-read colour), secondary grey `#4a4c53`.
- Indigo `#5753fa` filled CTA, 40px tall, `0px 16px` padding, 8px radius; hover darkens to `#363498`.
- Plus Jakarta Sans everywhere on marketing; 42px/700/46.2px hero, 32/24/20/18px bold heading steps, 14–16px/500 body.
- Pill subject chips: 100px radius, 1px `#cbcbcd`, 16px/600 `#4a4c53` label, 66px tall.
- Testimonial cards in sunflower `#fcc539`, leaf `#72bb82`, tangerine `#f97b4f` with 16px radius and `36px 32px` padding.
- Product layer: Wonder Blocks classic — Lato, `#1865f2`, 4px radius, `#909296` input borders, `#0b2149` footer.
- A black `#000000` marketing footer with white text and uppercase 70%-white column headings.

## Colors

> **Source pages:** home (`/`), `/login`, `/math/algebra`; Wonder Blocks primitives from
> `packages/wonder-blocks-tokens/src/tokens/color.ts` and semantic roles from `semantic-color.ts`.

### Brand & Accent (marketing layer)
- **Indigo** (`{colors.primary}` — `#5753fa`): every filled CTA on the homepage (Sign up, See our impact, Teachers sign up free, Get started, Donate) and role-card titles. The page exposes it as `--tc-link-color: #5753FA`; Wonder Blocks also carries it as `--wb-semanticColor-learning-characters-flesh-blue-default: #5753fa` (the mascot's body colour).
- **Indigo Hover** (`{colors.primary-hover}` — `#363498`): measured hover background of Sign up and hover text of role cards / "Log in" link.
- **Sky** (`{colors.sky}` — `#a9dafd`): a large light-blue promo band (522 area units).
- **Sunflower / Leaf / Tangerine** (`#fcc539`, `#72bb82`, `#f97b4f`): testimonial card fills (ADMINISTRATOR, TEACHER, …).

### Brand & Accent (Wonder Blocks product layer)
- **WB Blue** (`{colors.wb-blue}` — `#1865f2`): `color.blue`; primary button, links, focus ring outer (`semanticColor.focus.outer`).
- **WB Active Blue** (`{colors.wb-active-blue}` — `#1b50b3`): `activeBlue` (= `mix(offBlack32, blue)`), `action-primary-progressive-press-border`.
- **WB Faded Blue 8** (`{colors.wb-faded-blue-8}` — `#edf3fe`): selected/active course-sidebar row on `/math/algebra`.
- **Status primitives:** red `#d92916`, green `#00a60e`, gold `#ffb100`, purple `#9059ff` (mastery), eggplant `#5f1e5c` (Khanmigo), teal `#14bf96` (brand) — all from `color.ts`.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`).
- **Surface band** (`{colors.surface-band}` — `#f6f6f6`): stats strip.
- **Banner** (`{colors.banner-bg}` — `#ebf1fd`, border `{colors.banner-border}` `#bfcaff`): the "More for teachers" info banner and the header search field.
- **Hairline** (`{colors.hairline}` — `#cbcbcd`): the dominant border colour (32 elements) — chips, cards, header rule.
- **WB Off-white** (`{colors.wb-off-white}` — `#f7f8fa`): `core.background.base.subtle`.
- **WB Dark Blue** (`{colors.wb-dark-blue}` — `#0b2149`): `core.background.base.strong`; the product footer.
- **Footer Black** (`{colors.footer-black}` — `#000000`): marketing footer — the largest painted area on the homepage.

### Text
- **Ink** (`{colors.ink}` — `#151521`): headings and body on the homepage (2,558 weighted chars).
- **Ink Secondary** (`{colors.ink-secondary}` — `#4a4c53`): chip labels, stat captions, role-card subtitles.
- **WB Off-black** (`{colors.wb-off-black}` — `#21242c`): `color.offBlack`, product body text and `core.foreground.neutral.strong`.
- **WB Neutral** (`#5f6167` / `#717378`): faded off-black 72% / 64% — product secondary text.
- **WB Footer Text** (`{colors.wb-footer-text}` — `#8295ba`): text on the `#0b2149` footer.

## Typography

### Font Family
- **Plus Jakarta Sans** — loaded as a variable font (`Plus Jakarta Sans 200 800`), the marketing family and the
  family of Wonder Blocks' newer **Thunderblocks** theme (`sans: 'Plus Jakarta Sans, "Noto Sans", sans-serif'` in
  `primitive-font-thunderblocks.ts`). It is an open-source Google font (SIL OFL).
- **Lato** (400, 700) — the classic Wonder Blocks family: `fontFamily.sans = '"Lato", "Noto Sans", "Helvetica", "Corbel", sans-serif'` in `primitive/font.ts`. Also open-source.
- Noto Sans / Noto Serif are the multilingual fallbacks; `Inconsolata` is the documented mono.

### Hierarchy — marketing (Plus Jakarta Sans)

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display}` | 42px | 700 | 46.2px | Hero h1 |
| `{typography.display-mobile}` | 24px | 700 | 32px | Hero h1 at 390px |
| `{typography.heading-xl}` | 32px | 700 | 40px | Section headline, pull quote |
| `{typography.heading-lg}` | 24px | 700 | 32px | Feature h2/h3, stat figures |
| `{typography.heading-md}` | 20px | 700 | 28px | Dark-band h2 |
| `{typography.heading-sm}` | 18px | 700 | 24px | "Get started", testimonial quote, FAQ question |
| `{typography.body-lg}` | 16px | 500 | 24px | Lead paragraphs, footer paragraph |
| `{typography.body}` | 14px | 500 | 24px | Body paragraph (detected body role) |
| `{typography.chip-label}` | 16px | 600 | 24px | Subject chips, stat captions |
| `{typography.button}` | 16px | 700 | 24px | Button label (inner span), "Log in" link |
| `{typography.card-title}` | 14px | 700 | 18px | Role-card title |
| `{typography.footer-heading}` | 14px | 700 | 18px | Footer column heading (uppercase, 70% white) |
| `{typography.caption}` | 12px | 500 | 16px | Fine print, cookie text |

### Hierarchy — product (Lato, Wonder Blocks classic)

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.wb-heading-xxl}` | 36px | 700 | 40px | Course title ("Algebra 1") — WB `heading.size.xxlarge` (3.6rem) / `lineHeight.xxlarge` (4rem) |
| `{typography.wb-heading-lg}` | 24px | 700 | 28px | "Log in now!" |
| `{typography.wb-body}` | 16px | 400 | 20px | Inputs, links, body — WB `body.size.medium` (1.6rem) |
| `{typography.wb-body-small}` | 14px | 400 | 19.6px | Default product text, buttons' outer element |

### Principles
- Headings are always 700; reading text is 500 on marketing and 400 on product (Lato has no 500 — the WB source notes "Lato has regular, Jakarta has medium").
- No letter-spacing on marketing text; the product uses `0.6px` only on 12px uppercase unit labels.
- Italics mark the emotional word in a headline ("*real results.*", "*how*").
- Wonder Blocks sizes are authored in rem against a 10px root (`BASELINE_VALUE = 10` in `sizing-utils.ts`), so `1.6rem` = 16px.

### Note on Font Substitutes
Both families are free (Google Fonts), so no substitute is needed. If unavailable, fall back exactly as served:
`"Noto Sans", sans-serif` for Plus Jakarta Sans; `"Noto Sans", Helvetica, Corbel, sans-serif` for Lato.

## Layout

### Spacing System
- **Wonder Blocks scale** (`tokens/spacing.ts`): `xxxxSmall_2: 2`, `xxxSmall_4: 4`, `xxSmall_6: 6`, `xSmall_8: 8`, `small_12: 12`, `medium_16: 16`, `large_24: 24`, `xLarge_32: 32`, `xxLarge_48: 48`, `xxxLarge_64: 64`; primary steps are 4/8/16/32/64, secondary 6/12/24/48. The newer `sizing` primitives (`size_020` … `size_960`) replace it.
- **Measured on the homepage:** gaps 16px (57×), 10px, 24px, 8px, 12px, 48px, 32px, 36px; paddings 16px, 20px, 64px, 8px, 12px, 88px, 32px, 48px.
- **Tokens:** `{spacing.xxs}` 2px · `{spacing.xs}` 4px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.lg-plus}` 20px · `{spacing.xl}` 24px · `{spacing.xxl}` 32px · `{spacing.card-y}` 36px · `{spacing.section-sm}` 48px · `{spacing.section}` 64px · `{spacing.section-lg}` 88px.

### Grid & Container
- Header: Explore dropdown + Search field left, centred hexagon logo + "Khan Academy" wordmark, Donate / Log in / Sign up right; a 1px `#cbcbcd` rule below.
- Hero: two equal columns (~536px each) at 1280px.
- Subject chips: centred flex-wrap with 16px gaps.
- Product course page: a left sidebar of units (357px wide, 16px padding rows, selected row `#edf3fe`) and a content column.

### Whitespace Philosophy
Marketing sections use 64–88px vertical padding with short copy; the product is dense (8px gaps dominate, 14px text).

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Bands, chips |
| 1 | `1px solid #cbcbcd` | Chips, testimonial cards, header rule |
| 2 | `rgba(37, 35, 104, 0.2) 0px 2px 2px 0px` + 1px border | Role cards ("Student / Family / Teacher") |
| WB low | `0 2px 2px 0 #21242c29` | `--wb-boxShadow-low` |
| WB high | `0 8px 16px 0 #21242c29` | `--wb-boxShadow-high` (popovers, modals) |

The Wonder Blocks `boxShadow` semantic set is `low` (0 2px 2px), `mid` (0 4px 8px), `high` (0 8px 16px), all tinted with `core.shadow.transparent.*`.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.wb-control}` | 4px | Product buttons, inputs (WB `radius_040`, `--wb-c-form-field-border-radius`) |
| `{rounded.button}` | 8px | Marketing buttons, role cards, search field |
| `{rounded.media}` | 12px | The 594×370 dark media tile on the homepage |
| `{rounded.card}` | 16px | Testimonial cards |
| `{rounded.wb-radius-240}` | 24px | WB `radius_240` |
| `{rounded.chip}` | 100px | Subject chips |
| `{rounded.circle}` | 50% | Avatars, WB `radius_full` |

### Illustration Geometry
Flat geometric primitives — hexagons, pentagons, squares, four-point stars — in saturated indigo, orange, pink and
yellow, with a single outline ring. The hexagon is the logo motif and recurs as the mascot and as subject icons.

## Components

### Buttons

**`button-primary`** — homepage CTA.
- Background `{colors.primary}` `#5753fa`, label white `{typography.button}` 16px/700, height 40px, padding `0px 16px`, radius 8px.
- **Hover** (`button-primary-hover`): background `{colors.primary-hover}` `#363498` (measured).

**`wb-button-primary`** — Wonder Blocks Button `kind="primary"` on product pages.
- Background `{colors.wb-blue}` `#1865f2`, white label, height 40px (`sizing.height.medium` = `size_400`), padding `0px 16px`, radius 4px (`radius_040`).
- WB documents heights small 32px / medium 40px / large 56px, primary inline padding 16/16/32px, label weight bold, and on hover/press a 2px border with 2px offset (`border.width.medium`) plus underline decoration.

**`wb-button-secondary`** — e.g. the "Continue with Google" and role buttons on `/login` and `/math/algebra`: white face, 1px `#909296` border, 4px radius; **hover** turns text and border `#1865f2` with `inset 0 0 0 1px #1865f2` (measured).

### Inputs & Forms

**`search-field`** (marketing header) — `{colors.banner-bg}` fill, 1px `{colors.banner-border}` border, 8px radius, 40px × 200px, magnifier icon + "Search". **Hover:** border `#6c82ff` with `inset 0 0 0 1px #6c82ff`.

**`wb-text-field`** (`/login`) — white, 1px `#909296` (`--wb-semanticColor-input-default-border`), 4px radius, `10px 16px` padding, 40px tall, Lato 16px/400/20px `#21242c`. Error border token: `--wb-semanticColor-input-error-border: #d92916`.

### Cards & Containers

**`role-card`** — "Get started" choices: white, 1px `#cbcbcd`, 8px radius, shadow `rgba(37,35,104,0.2) 0 2px 2px`, padding 12px, 95px tall; title 14px/700 `#5753fa`, subtitle 14px/500 `#4a4c53`, chevron right. **Hover:** title `#363498`, shadow becomes `0 0 0 2px #ffffff`.

**`testimonial-card`** — `li` items 349×400px, 16px radius, 1px `#cbcbcd`, `36px 32px` padding, fills `#fcc539` / `#72bb82` / `#f97b4f`; uppercase role label then an 18px/700 quote.

**`subject-chip`** — pill links, 100px radius, 1px `#cbcbcd`, `16px 20px` padding, 66px tall, icon + 16px/600 `#4a4c53` label.

### Navigation

**`nav`** — white header; "Explore" button turns `#5753fa` on hover (measured). Donate and Log in are ink text links.

**Info banner** — `#ebf1fd` strip with info icon, 16px/600 `#363498` text and an underlined "Sign up" link, dismiss ×.

### Footer

**`footer`** (marketing) — `#000000`, white 16px/500 mission paragraph, uppercase 14px/700 column headings at 70% white, 16px/700 white links, 12px/500 legal row.

**`wb-footer`** (product) — `#0b2149`, text `#8295ba`, padding `12px 20px`.

## Design System Architecture

Khan Academy builds its UI on **Wonder Blocks**, an open-source React design system:
repo [github.com/Khan/wonder-blocks](https://github.com/Khan/wonder-blocks), docs/Storybook
[khan.github.io/wonder-blocks](https://khan.github.io/wonder-blocks/). The README calls it "The Khan Academy Wonder
Blocks design system … work-in-progress", and external contributions are not accepted.

- **Token tiers.** The [tokens overview](https://github.com/Khan/wonder-blocks/blob/main/__docs__/wonder-blocks-tokens/__overview__.mdx)
  splits **Primitives** (Border, Sizing, Typography, Media Queries; Color and Spacing are now deprecated) from
  **Semantic** tokens (Box Shadow, Semantic Colors). Primitive colours live in
  [`tokens/color.ts`](https://raw.githubusercontent.com/Khan/wonder-blocks/main/packages/wonder-blocks-tokens/src/tokens/color.ts)
  (`blue: "#1865f2"`, `offBlack = "#21242c"`, `darkBlue: "#0b2149"`, derived `fadedBlue8`, `activeBlue` via `mix()`/`fade()`) and
  are marked `@deprecated Use semanticColor`. Semantic colours in
  [`semantic-color.ts`](https://raw.githubusercontent.com/Khan/wonder-blocks/main/packages/wonder-blocks-tokens/src/theme/semantic/semantic-color.ts)
  follow `category.role.intent.emphasis`: `core.border.instructive.default`, `core.background.base.strong`,
  `core.foreground.neutral.subtle`, `focus.outer`, `link.press`, `khanmigo.primary`, `mastery.primary`,
  `feedback.info.subtle.background`. Component tokens sit on top (`--wb-c-button-root-sizing-height-medium: 4rem`,
  `--wb-c-form-field-border-radius: 4px`).
- **Naming → CSS.** Tokens are emitted as CSS variables with a `--wb-` prefix
  (`generate-css-variables.ts`): `--wb-semanticColor-action-primary-progressive-hover-background`,
  `--wb-font-family-sans`, `--wb-border-radius-radius_240`, `--wb-boxShadow-low` — all visible on khanacademy.org.
- **Theming.** `SupportedThemes = "default" | "dark" | "thunderblocks" | "syl-dark"`
  ([types.ts](https://raw.githubusercontent.com/Khan/wonder-blocks/main/packages/wonder-blocks-theming/src/types.ts)).
  `<ThemeSwitcher theme>` wraps children in an element with `data-wb-theme="<theme>"`
  ([constants.ts](https://raw.githubusercontent.com/Khan/wonder-blocks/main/packages/wonder-blocks-theming/src/utils/constants.ts)),
  so CSS-variable values swap by attribute. **Thunderblocks** merges a new palette and the Plus Jakarta Sans font
  (weights medium 500 / semi 600) over the default theme via `mergeTheme`
  ([thunderblocks.ts](https://raw.githubusercontent.com/Khan/wonder-blocks/main/packages/wonder-blocks-tokens/src/theme/thunderblocks.ts)).
  The marketing homepage's Jakarta + 500/600 weights match Thunderblocks' typography, while its `#5753fa` indigo is a
  page-level token (`--tc-link-color`); product pages still render the default (Lato) theme.
- **Type & spacing.** All sizes derive from `sizing` primitives `size_0 … size_960`, authored as rem on a 10px
  baseline ([sizing.ts](https://raw.githubusercontent.com/Khan/wonder-blocks/main/packages/wonder-blocks-tokens/src/theme/primitive/sizing.ts),
  [sizing-utils.ts](https://raw.githubusercontent.com/Khan/wonder-blocks/main/packages/wonder-blocks-tokens/src/util/sizing-utils.ts)).
  Default type scale ([font.ts](https://raw.githubusercontent.com/Khan/wonder-blocks/main/packages/wonder-blocks-tokens/src/theme/primitive/font.ts)):
  body 12/14/16px on 16/18/20px leading; heading small 12, medium 20, large 24, xlarge 28, xxlarge 36px. Thunderblocks
  headings: 16/18/20/24/32px. Breakpoints ([media-queries.ts](https://raw.githubusercontent.com/Khan/wonder-blocks/main/packages/wonder-blocks-tokens/src/tokens/media-queries.ts)):
  xs ≤567, sm 568–681, md 682–1023, lg 1024–1199, xl ≥1200. Radii: `radius_0, _010 (1px), _040 (4px), _080 (8px), _120 (12px), _240 (24px), radius_full (50%)`;
  border widths thin 1px / medium 2px / thick 4px ([border.ts](https://raw.githubusercontent.com/Khan/wonder-blocks/main/packages/wonder-blocks-tokens/src/theme/primitive/border.ts)).
- **Component model.** One package per component (`@khanacademy/wonder-blocks-*`): accordion, announcer, badge, banner,
  birthday-picker, breadcrumbs, button, card, cell, clickable, date-picker, dropdown, floating, form, icon, icon-button,
  labeled-field, layout, link, modal, pill, popover, progress-spinner, search-field, switch, tabs, toolbar, tooltip,
  typography, plus core/data/timing/theming/styles utilities. Button has `kind` primary/secondary/tertiary × `size`
  small/medium/large, each with its own theme file (`default.ts`, `thunderblocks.ts`, `syl-dark.ts`)
  ([button theme](https://raw.githubusercontent.com/Khan/wonder-blocks/main/packages/wonder-blocks-button/src/theme/default.ts)).
- **Accessibility.** Each component has an Accessibility doc page; e.g. Button computes its accessible name from
  children, requires `aria-label` with a spinner, and uses `aria-disabled` so disabled buttons stay focusable
  ([button accessibility.mdx](https://github.com/Khan/wonder-blocks/blob/main/__docs__/wonder-blocks-button/accessibility.mdx)).
  The focus ring is a two-colour token pair `focus.outer: color.blue` / `focus.inner: color.white`, and the site CSS applies
  `0 0 0 var(--wb-border-width-medium) var(--wb-semanticColor-focus-inner)` (35 rules in the measured CSS corpus).
- **Delivery.** npm packages under `@khanacademy/` (e.g. `@khanacademy/wonder-blocks-tokens` v18.0.0, MIT), built with
  pnpm; visual tests via Chromatic; design source in a
  Wonder Blocks Figma project (linked from the README); a Storybook MCP endpoint is offered for AI agents.

## Do's and Don'ts

### Do
- Use `#5753fa` for marketing CTAs and `#1865f2` for product (Wonder Blocks) actions — never mix them on one screen.
- Keep marketing buttons 40px tall with 8px radius and 16px/700 labels; product buttons 40px with 4px radius.
- Set marketing type in Plus Jakarta Sans with 700 headings and 500 body; product type in Lato 700/400.
- Use `#cbcbcd` 1px borders and at most a 2px-blur shadow — the system is nearly flat.
- Use pill chips (100px radius) for subject navigation with a coloured geometric icon.
- Use semantic tokens (`semanticColor.*`) rather than deprecated `color.*` primitives in new code.
- Keep the two-ring focus indicator (white inner, blue outer).

### Don't
- Don't use pure black for text — ink is `#151521` (marketing) or `#21242c` (product); black is reserved for the marketing footer.
- Don't round product controls beyond 4px or marketing buttons beyond 8px.
- Don't use weight 500/600 with Lato (it has no such weights; WB maps `medium`/`semi` to 400).
- Don't add heavy drop shadows; the deepest WB shadow is `0 8px 16px #21242c29`.
- Don't remove the italic emphasis device from marketing headlines, and don't italicise whole headlines.

## Responsive Behavior

### Breakpoints

| Name | Width | Key Changes |
|---|---|---|
| xl | ≥ 1200px | Two-column hero; chips wrap 3–4 per row |
| lg | 1024–1199px | WB `lgMin`/`lgMax` |
| md | 682–1023px | WB `mdMin`/`mdMax` |
| sm | 568–681px | WB `smMin`/`smMax` |
| xs | ≤ 567px | Single column; hero h1 42px → 24px/32px |

### Touch Targets
- Buttons and inputs are 40px; WB large buttons 56px; subject chips 66px; role cards 95px.

### Collapsing Strategy
- Mobile hero layout was not measured.
- The 42px hero drops to 24px on mobile; body sizes (16/14/12px) stay.
- Product course pages keep 36px h1 on mobile.

### Image Behavior
Flat illustrations scale within their column; the homepage media tile uses 12px radius.

## Iteration Guide

1. Decide the layer first: marketing (Jakarta, `#5753fa`, 8px) or product (Lato, `#1865f2`, 4px).
2. Reference tokens: `{colors.primary}`, `{colors.wb-blue}`, `{rounded.button}`, `{rounded.wb-control}`, `{typography.display}`.
3. Primary button: 40px, `0px 16px`, hover `#363498` (marketing) — product hover adds a 2px border + underline per WB.
4. Body: 14px/500/24px `#151521` on marketing; 16px/400/20px `#21242c` on product forms.
5. Cards: white, 1px `#cbcbcd`, 8px (role) or 16px (testimonial) radius.
6. Spacing on the 4/8/16/32/64 primary grid, with 12/24/48 as secondary steps.
7. Run `node web/scripts/verify-designs.mjs --slug=khan-academy` after edits.
