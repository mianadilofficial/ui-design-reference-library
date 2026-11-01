---
version: alpha
name: Quizlet
category: "Education"
description: "Quizlet's study-tool marketing site sets everything in Hurme Geometric Sans (served as hurme_no2-webfont) on a cool #f6f7fb canvas with #282e3e slate body text and a 44px/700 black headline. The single action color is Quizlet blue-violet #4255ff (token twilight-500) on 200px pill buttons, darkening to #423ed8 on hover; feature cards are 24px-radius tiles in #4255ff, mint #d9ffcc and teal #12c1cb, and the page uses a 4px-dominant radius and soft #282e3e-tinted shadows."

colors:
  primary: "#4255ff"
  primary-hover: "#423ed8"
  canvas: "#f6f7fb"
  ink: "#282e3e"
  heading: "#000000"
  surface: "#ffffff"
  ink-secondary: "#586380"
  ink-strong: "#2e3856"
  gray-400: "#d9dde8"
  gray-300: "#edeff4"
  gray-500: "#939bb4"
  twilight-100: "#edefff"
  twilight-200: "#dbdfff"
  twilight-300: "#a8b1ff"
  twilight-700: "#1f1c8b"
  twilight-900: "#0a092d"
  card-mint: "#d9ffcc"
  card-teal: "#12c1cb"
  sunset-400: "#ffcd1f"
  sherbert-400: "#ff983a"
  lilac-300: "#eeaaff"
  sky-300: "#98e3ff"
  mint-500: "#18ae79"
  success: "#23b26d"
  coral: "#ff725b"
  error-300: "#b00020"
  error-200: "#da4543"

typography:
  display:
    fontFamily: "hurme_no2-webfont, -apple-system, system-ui, sans-serif"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: "hurme_no2-webfont, -apple-system, system-ui, sans-serif"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 56px
  heading:
    fontFamily: "hurme_no2-webfont, -apple-system, system-ui, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  body-lg:
    fontFamily: "hurme_no2-webfont, -apple-system, system-ui, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: "hurme_no2-webfont, -apple-system, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  body-mobile:
    fontFamily: "hurme_no2-webfont, -apple-system, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "hurme_no2-webfont, -apple-system, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  button-sm:
    fontFamily: "hurme_no2-webfont, -apple-system, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  input:
    fontFamily: "hurme_no2-webfont, -apple-system, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px

rounded:
  sm: 4px
  md: 8px
  lg: 16px
  card: 24px
  pill: 200px
  circle: 50%

spacing:
  xxs: 4px
  xs: 8px
  sm: 16px
  md: 24px
  lg: 32px
  xl: 40px
  xxl: 48px
  section: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 48px
    border: 2px solid transparent
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.surface}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 48px
  button-primary-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 32px
    height: 56px
  button-primary-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 10px 16px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.twilight-100}"
    textColor: "{colors.primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 10px 16px
    height: 40px
  button-secondary-hover:
    backgroundColor: "{colors.twilight-200}"
    textColor: "{colors.primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 10px 16px
    height: 40px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
  link-hover:
    textColor: "{colors.primary-hover}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.button-sm}"
    height: 64px
  search-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 24px
  feature-card-blue:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface}"
    rounded: "{rounded.card}"
    height: 390px
  feature-card-mint:
    backgroundColor: "{colors.card-mint}"
    textColor: "{colors.heading}"
    rounded: "{rounded.card}"
    height: 390px
  feature-card-teal:
    backgroundColor: "{colors.card-teal}"
    textColor: "{colors.heading}"
    rounded: "{rounded.card}"
    height: 390px
  footer:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 64px 0px 0px 32px
---

## Overview

Quizlet is a study platform — flashcards, practice tests, study guides, games — and its logged-out homepage (`quizlet.com`, measured at 1280px desktop and 390px mobile) is bright, rounded and friendly. The canvas is a cool off-white `{colors.canvas}` `#f6f7fb`; content bands alternate with pure white `{colors.surface}` and a pale periwinkle `{colors.twilight-200}` `#dbdfff` band for the teachers section. Body text is a soft slate `{colors.ink}` `#282e3e`, never black — only the hero h1 ("How do you want to study?") is set in `{colors.heading}` `#000000`.

There is exactly one action color: **Quizlet blue-violet** `{colors.primary}` `#4255ff`, which the site's own CSS names `--twilight-500`. It fills every primary button ("Sign up for free", "Log in", "Stay on track"), colours text links ("I'm a teacher") and the active nav link, and fills the first of the four product cards. All buttons are fully rounded pills (200px radius).

Type is a single family: **Hurme Geometric Sans**, served as `hurme_no2-webfont` in three weights — 400 for paragraphs, 600 for UI (buttons, nav, input, eyebrows), 700 for headings. The site even exposes this as tokens: `--typography-body-weight: 400`, `--typography-section-weight: 600`, `--typography-heading-weight: 700`.

Art direction is product-led: the hero is followed by a horizontally scrolling row of 24px-radius product cards ("Record Lecture", "Study Guides", "Flashcards", "Games"), each a solid colour block (blue, mint `#d9ffcc`, teal `#12c1cb`, gray) with a floating white UI mock inside. Further down, alternating two-column rows pair an uppercase eyebrow ("START STRONG", "STAY ON TRACK", "FINISH STRONG"), a 32px bold heading and 20px body copy with a large illustration or photo panel on saturated orange or lifestyle photography.

**Key Characteristics:**
- One action colour, `#4255ff`, darkening to `#423ed8` (`--twilight-600`) on hover.
- Pill buttons everywhere: 200px radius, 600 weight, 48px (default), 56px (section CTAs) or 40px (header).
- Single typeface (Hurme Geometric Sans) in 400/600/700; no letter-spacing changes.
- Cool gray canvas `#f6f7fb`, slate ink `#282e3e`, black only for the h1.
- Product cards with 24px radius and flat saturated fills from the brand palette.
- Small radius (4px) dominates small UI; shadows are faint and tinted with the ink colour (`rgba(40, 46, 62, 0.1)`).
- Named colour ramps in CSS: twilight, gray, sky, mint, lemon, sunset, sherbert, lilac, error.

## Colors

> **Source page:** home (`/`), desktop + mobile. Quizlet returned HTTP 403 to the extractor for every other page attempted (`/login`, `/teachers`, `/features/flashcards`), so no extra pages could be measured. Hexes are from computed styles, the `:root` custom properties, or the site's stylesheet corpus.

### Brand & Accent
- **Twilight 500 / Primary** (`{colors.primary}` — `#4255ff`): Buttons, links, active nav, the "Record Lecture" card, the hero sign-up pill.
- **Twilight 600 / Primary Hover** (`{colors.primary-hover}` — `#423ed8`): Measured hover background of primary buttons and hover colour of text links.
- **Twilight 100** (`{colors.twilight-100}` — `#edefff`): Fill of the secondary "Teachers" pill in the header.
- **Twilight 200** (`{colors.twilight-200}` — `#dbdfff`): Hover fill of the Teachers pill and the background of the teachers band (third-largest painted area).
- **Twilight 300** (`{colors.twilight-300}` — `#a8b1ff`): Light periwinkle in the stylesheet ramp (33 declarations).
- **Twilight 700** (`{colors.twilight-700}` — `#1f1c8b`) and **Twilight 900** (`{colors.twilight-900}` — `#0a092d`): Deep indigo end of the ramp; `#0a092d` is the deepest brand navy in the CSS (31 declarations).
- **Sunset 400** (`{colors.sunset-400}` — `#ffcd1f`): Gold — used in CSS for `0 .25rem 0 0 #ffcd1f` underline-shadows and game score accents (the "8900" trophy count).
- **Sherbert 400** (`{colors.sherbert-400}` — `#ff983a`), **Lilac 300** (`{colors.lilac-300}` — `#eeaaff`), **Sky 300** (`{colors.sky-300}` — `#98e3ff`), **Mint 500** (`{colors.mint-500}` — `#18ae79`): Illustration and category accents from the named ramps.
- **Card Mint** (`{colors.card-mint}` — `#d9ffcc`) and **Card Teal** (`{colors.card-teal}` — `#12c1cb`): Measured fills of the "Study Guides" and "Flashcards" product cards.

### Surface
- **Canvas** (`{colors.canvas}` — `#f6f7fb`): Page background (`--gray-200`).
- **Surface** (`{colors.surface}` — `#ffffff`): Content bands, header, cards' inner mocks (`--gray-100` is `#FFFFFF`; it is the largest painted area).
- **Gray 300** (`{colors.gray-300}` — `#edeff4`): Subtle fills.
- **Gray 400** (`{colors.gray-400}` — `#d9dde8`): The "Games" card fill and borders/dividers.

### Text
- **Ink** (`{colors.ink}` — `#282e3e`): Body copy, nav, footer (`--gray-800`); 1531 of ~1860 measured characters.
- **Heading** (`{colors.heading}` — `#000000`): Hero h1 and product-card titles on light fills.
- **Ink Strong** (`{colors.ink-strong}` — `#2e3856`): `--gray-700`, the second most declared colour in the CSS (51 declarations).
- **Ink Secondary** (`{colors.ink-secondary}` — `#586380`): `--gray-600`, secondary/meta text.
- **Gray 500** (`{colors.gray-500}` — `#939bb4`): Placeholder and muted text (the search placeholder in the capture).

### Semantic
- **Success** (`{colors.success}` — `#23b26d`): Green used in CSS for `0 .25rem 0 0 #23b26d` correct-answer underline shadows.
- **Coral** (`{colors.coral}` — `#ff725b`): Matching `0 .25rem 0 0 #ff725b` incorrect-answer shadow.
- **Error 300** (`{colors.error-300}` — `#b00020`) and **Error 200** (`{colors.error-200}` — `#da4543`): `--error-*` ramp for form errors.

## Typography

### Font Family
- **Hurme Geometric Sans** by Finnish designer Toni Hurme (2013), served by Quizlet as `@font-face` `hurme_no2-webfont` (the file name indicates the "No. 2" variant). Typewolf lists Quizlet among sites using Hurme Geometric Sans ([typewolf.com/hurme-geometric-sans](https://typewolf.com/hurme-geometric-sans)).
- Measured stack: `hurme_no2-webfont, -apple-system, "system-ui", sans-serif`.
- Loaded weights: 400, 600, 700 (no italics loaded on the homepage).
- 100% of measured characters on the homepage are in this family.

### Hierarchy

| Token | Size | Weight | Line height | Where |
|---|---|---|---|---|
| `{typography.display}` | 44px | 700 | 56px | h1 "How do you want to study?" |
| `{typography.display-mobile}` | 44px | 700 | 56px | h1 at 390px (unchanged, wraps to two lines) |
| `{typography.heading}` | 32px | 700 | 40px | h2 "Any input. Instant study materials." |
| `{typography.body-lg}` | 20px | 400 | 28px | Section paragraphs (most-read size, 837 chars) |
| `{typography.body}` | 16px | 400 | 26px | Base body / footer |
| `{typography.body-mobile}` | 16px | 400 | 24px | Section paragraphs at 390px |
| `{typography.button}` | 16px | 600 | 24px | Primary pills, text links |
| `{typography.button-sm}` | 14px | 600 | 20px | Header pills, nav links |
| `{typography.input}` | 16px | 600 | 24px | Header search input |

Other measured sizes: 24px (41 characters; carrier element not isolated) and 12px (mobile only). The CSS corpus also declares 10/11/13/15/18/26px for in-product UI.

### Principles
- Three weights carry the whole hierarchy, mapped to the site's own variables: `--typography-heading-weight` 700, `--typography-section-weight` 600, `--typography-body-weight` 400.
- Line heights are generous for reading: 20/28, 16/26.
- Letter-spacing is `normal` everywhere (no tracking table was measured).
- Eyebrows ("START STRONG") are uppercase labels above section headings.

### Note on Font Substitutes
Hurme Geometric Sans is a commercial typeface. Typewolf suggests Museo Sans and Pluto Sans as similar faces. If unlicensed, keep the measured fallback chain (`-apple-system, system-ui, sans-serif`) and pick a geometric sans with round bowls and a single-storey feel; re-check that the 44px headline still fits on one line at 1280px.

## Layout

### Spacing System
Measured gaps are overwhelmingly 8px (64 uses), with 4, 16, 24 and 32px; paddings cluster at 32px, 48px, 16px, 8px, 10px (pill vertical), 40px and 64px. The scale used here is `4 / 8 / 16 / 24 / 32 / 40 / 48 / 64` px.

### Grid & Container
- Hero is centered: h1, a two-line 20px paragraph, the sign-up pill and the "I'm a teacher" link, all center-aligned.
- Product cards run edge-to-edge in a horizontal carousel (first card bleeds off the left edge, last off the right), each 390px tall.
- Below, content sits in a centered container with two columns: text left (eyebrow, h2, paragraph, button or app-store badges), media right.
- Header is 64px tall on desktop; at 390px it grows to 120px (two rows).

### Whitespace Philosophy
Large vertical breathing room between rows (sections separated by roughly a full card height of empty canvas) and tight internal grouping (8px gaps). Text columns are narrow so paragraphs wrap to 3 lines.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| 0 | none | Pills, product cards, bands |
| 1 | `rgba(40, 46, 62, 0.1) 0px 2px 4px 0px` | Small floating UI mocks |
| 2 | `rgba(40, 46, 62, 0.1) 0px 4px 16px 0px` | Larger floating panels |
| Accent | `0 .25rem 0 0 #ffcd1f` / `#23b26d` / `#ff725b` | Solid 4px bottom "underline shadows" in product UI (CSS corpus) |

### Decorative Depth
Depth on the marketing page comes from illustrations layered inside coloured cards (white UI mock floating over a saturated tile) rather than from shadows. Shadows are always tinted with the ink colour `#282e3e` at 10% alpha — never pure black.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 4px | Default small radius (65 elements): links' focus box, small UI |
| `{rounded.md}` | 8px | Inner mock panels |
| `{rounded.lg}` | 16px | Larger panels (CSS corpus) |
| `{rounded.card}` | 24px | Product cards (and `0px 0px 24px 24px` bottom-rounded inner layers) |
| `{rounded.pill}` | 200px | Every button |
| `{rounded.circle}` | 50% | Avatars, round icon buttons (carousel arrow) |

### Photography Geometry
Photography and illustration panels are rectangles with no or minimal rounding placed in the right column; product cards are the rounded element.

## Components

### Buttons
- **Primary** — `{components.button-primary}`: `#4255ff` fill, white 16px/600 label, `12px 24px` padding, 48px tall, 200px radius, 2px transparent border. Hover → `#423ed8` (`{components.button-primary-hover}`).
- **Primary large** — `{components.button-primary-large}`: same fill, `16px 32px`, 56px tall ("Stay on track", "Sign up as a teacher").
- **Primary small** — `{components.button-primary-small}`: 14px/600, `10px 16px`, 40px tall ("Log in" in header).
- **Secondary (tinted)** — `{components.button-secondary}`: `#edefff` fill, `#4255ff` label, 14px/600, 40px ("Teachers"); hover fill `#dbdfff`.
- **Text link** — `{components.link}`: `#4255ff` 16px/600, no underline, 4px radius focus box; hover `#423ed8`.

### Cards & Containers
- **Product cards** — `{components.feature-card-blue}`, `{components.feature-card-mint}`, `{components.feature-card-teal}`: 24px radius, 390px tall, flat fill, title centered at top (white on blue, black on light fills), a white UI mock inside.
- The fourth card ("Games") uses `#d9dde8` gray.

### Inputs & Forms
- **Header search** — `{components.search-input}`: 16px/600 slate text in a rounded gray field spanning the header center, placeholder "Search for study guides" in muted gray, leading search icon. Only the inner input was measured (24px tall, no own background).
- Full form fields (login/sign-up) could not be measured (HTTP 403), so no form-field component is declared.

### Navigation
- 64px white header: wordmark at left in `#4255ff`, "Study tools ▾" and "Subjects ▾" menus (14px/600), central search field, "+ Create" link, "Teachers" tinted pill and "Log in" primary pill at right.
- Active/link items are `#4255ff`.

### Pills, Tags, and Chips
- The "New" chip in the Games card is a dark rounded label; score chips like "12" use dark navy fills. These sit inside illustrations and were not measured as standalone components.

### Signature Components
- **Product card carousel** — four 24px-radius tiles with flat brand fills and floating UI mocks, a round white arrow button at the right edge.
- **Eyebrow + heading rows** — uppercase eyebrow, 32px/700 heading, 20px body, and either a pill CTA or App Store / Google Play badges.

## Design System Architecture

Quizlet does **not** publish a public design system, token package, or brand portal. Searches for an official system ("Quizlet design system Assembly components", "Quizlet brand guidelines logo colors press kit", "quizlet.com blog design system Assembly rebrand", "Quizlet press page media assets logo download official", "Quizlet engineering blog CSS design tokens") returned no official documentation, and the Quizlet GitHub organization ([github.com/quizlet](https://github.com/quizlet)) contains only tooling forks (stylus, nib, ts-migration, etc.) — no component library. A Quizlet job listing mirrored on Built In ([builtin.com job posting](https://builtin.com/job/sr-product-designer-visual-ui/7086182)) states that the internal system was called **Assembly** and has evolved into a "Design Foundations" team covering "style guidelines, color systems, typography scales, spacing tokens, and iconography" and reusable components (buttons, cards, navigation) across iOS, Android and web, maintained as Figma libraries. Its contents are not public.

What follows is the **de-facto system measurable on quizlet.com**:

### Token architecture
- **Primitive colour ramps** on `:root`, named `--{hue}-{step}` with steps 100–900: `--twilight-100 #EDEFFF` … `--twilight-500 #4255FF`, `--twilight-600 #423ED8`, `--twilight-900 #0A092D`; `--gray-100 #FFFFFF` … `--gray-800 #282E3E`, `--gray-900 #1A1D28`; plus `sky`, `mint`, `lemon`, `sunset`, `sherbert`, `lilac` and `error` (`--error-100 #FF7873`, `--error-200 #DA4543`, `--error-300 #B00020`).
- **Semantic weights**: `--typography-heading-weight: 700`, `--typography-section-weight: 600`, `--typography-body-weight: 400`.
- **Layering**: `--z-index-1` … `--z-index-9` = 101 … 901; `--modal-width: 50rem`, `--modal-margin: 5rem`.
- No semantic colour aliases (like `--color-primary`) are exposed — components reference ramp steps directly.


### Measured colour ramps (`:root` custom properties)

| Ramp | 100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900 |
|---|---|---|---|---|---|---|---|---|---|
| `twilight` | `#EDEFFF` | `#DBDFFF` | `#A8B1FF` | `#7583FF` | `#4255FF` | `#423ED8` | `#1F1C8B` | `#14125C` | `#0A092D` |
| `gray` | `#FFFFFF` | `#F6F7FB` | `#EDEFF4` | `#D9DDE8` | `#939BB4` | `#586380` | `#2E3856` | `#282E3E` | `#1A1D28` |
| `sky` | `#EAF9FF` | `#CBF1FF` | `#98E3FF` | `#51CFFF` | `#008EC4` | — | — | — | — |
| `mint` | `#E6FCF4` | `#C7F7E6` | `#98F1D1` | `#59E8B5` | `#18AE79` | — | — | — | — |
| `lemon` | `#FDFFE9` | `#FAFFBB` | `#F5FF7D` | `#EBFF03` | `#D4E603` | — | — | — | — |
| `sunset` | `#FFF9E3` | `#FFEDAB` | `#FFDC62` | `#FFCD1F` | `#997700` | — | — | — | — |
| `sherbert` | `#FFF6EF` | `#FFE8D8` | `#FFC38C` | `#FF983A` | `#CC4E00` | — | — | — | — |
| `lilac` | `#FCF0FF` | `#F7D9FF` | `#EEAAFF` | `#E372FF` | `#9900BE` | — | — | — | — |
| `error` | `#FF7873` | `#DA4543` | `#B00020` | — | — | — | — | — | — |

Observations from the ramp:
- `twilight-500` `#4255FF` is the action colour and `twilight-600` `#423ED8` its hover — the hover step is one notch down the same ramp, not an opacity overlay.
- `gray-100` is pure white and `gray-200` `#F6F7FB` is the page canvas, so "gray" doubles as the surface ramp.
- `gray-800` `#282E3E` is body ink; `gray-900` `#1A1D28` is the darkest neutral.
- Ramp steps 100–300 are tints used for fills (tinted pills, bands), 400–500 are mid accents, 600–900 are text/dark surfaces.
- `error` is the only semantic ramp, with three steps (100/200/300) running light-to-dark.

### Theming
- The stylesheet contains paired variables such as `var(--twilight-600-gray-900)` and `var(--gray-700-gray-200)` — a light-value/dark-value naming that indicates the product supports a dark theme by swapping pairs. The logged-out homepage renders only the light theme; the switching mechanism is not observable here.

### Type & spacing systems
- One family, three weights (above). Sizes in use on marketing: 44 / 32 / 24 / 20 / 16 / 14 px; product CSS adds 10–18 px.
- Spacing appears 4/8-based (8px dominant gap; 16/24/32/48/64 paddings).

### Component model
- Tailwind CSS is present in the stylesheet corpus (`--tw-ring-offset-shadow`, `--tw-ring-shadow`), alongside react-toastify (`--toastify-*`) for toasts.
- Observable components: pill buttons in primary/tinted variants and three sizes (40/48/56px), text links, header search, product cards, carousel arrow, app-store badges.

### Accessibility
- No published accessibility standard. Measured: primary pills are 40–56px tall; `#ffffff` on `#4255ff` and `#282e3e` on `#f6f7fb` are the main text pairings.

### Delivery
- No public npm packages, Figma community kit or versioned docs were found.

## Do's and Don'ts

### Do
- Use `#4255ff` for every primary action, and only darken to `#423ed8` on hover.
- Make all buttons pills (200px) with 600-weight labels.
- Keep body copy slate `#282e3e` on `#f6f7fb` or white.
- Reserve `#000000` for the hero h1 and titles on light card fills.
- Use the named ramps (twilight, mint, sky, sunset, sherbert, lilac) for illustration fills and product cards.
- Use 24px radius for large feature cards and 4px for small UI.
- Tint shadows with ink at 10% alpha.

### Don't
- Don't introduce a second action colour; the brand's accents are decorative.
- Don't use square or 4px-radius buttons.
- Don't use weights other than 400/600/700.
- Don't add letter-spacing to headings.
- Don't use pure-black drop shadows or heavy elevation.
- Don't use the `#4257b2` blue that also appears in the CSS corpus as the primary — the shipped primary is `#4255ff`.

## Responsive Behavior

### Breakpoints
Only 1280px and 390px were measured; Quizlet publishes no breakpoint list.

| Width | Observed |
|---|---|
| 1280px | 64px header, two-column feature rows, 20px/28px paragraphs |
| 390px | 120px header, paragraphs 16px/24px, h1 stays 44px/56px |

### Touch Targets
Primary pills are 48px tall on mobile and desktop; header pills 40px; section CTAs 56px.

### Collapsing Strategy
- The h1 and h2 keep their desktop sizes (44px and 32px) at 390px.
- Section paragraphs step down from 20px/28px to 16px/24px.
- The header grows to 120px tall (measured), i.e. it wraps to more than one row; the exact arrangement was not captured.

### Image Behavior
Only the desktop capture was inspected; at 1280px product cards overflow the viewport horizontally as a carousel. Mobile image behaviour was not measured.

## Iteration Guide

1. Canvas `#f6f7fb`, white bands, ink `#282e3e`.
2. Load Hurme Geometric Sans (or a licensed geometric substitute) at 400/600/700.
3. Set h1 44px/56px 700 in black, h2 32px/40px 700, paragraphs 20px/28px.
4. Build the primary pill: `#4255ff`, white 16px/600, `12px 24px`, 48px, 200px radius, hover `#423ed8`.
5. Add the tinted secondary pill `#edefff` → `#dbdfff` with `#4255ff` text.
6. Product cards: 24px radius, 390px tall, flat ramp fills, white mock inside.
7. Shadows only `rgba(40, 46, 62, 0.1)` at 2px/4px or 4px/16px.
8. Check every value against the ramp names before adding a new colour.
