---
version: alpha
name: Palmetto
category: "Energy & Climate"
description: "Palmetto (palmetto.com), the US home clean-energy company: white #ffffff and warm off-white #fbfbf7 pages, a sage #dae3d8 panel, near-black green ink #1f2723, and Palmetto75 red #f9593b for every call to action and the footer (hover #d73e20). Headlines are ultra-heavy ABC Solar Display 800 at 88px/88px; body is Saans 500 at 21px/28px. Buttons are 16px-radius, 50px tall with 16px 20px padding and morph to a 32px radius on hover; cards and panels use very large 28-64px corners."

colors:
  primary: "#f9593b"
  primary-hover: "#d73e20"
  on-primary: "#ffffff"
  palmetto-200: "#ffccb5"
  palmetto-300: "#ffb493"
  palmetto-400: "#f77d67"
  palmetto-600: "#df3a1c"
  palmetto-700: "#952a18"
  palmetto-800: "#611d11"
  canvas: "#ffffff"
  page: "#fbfbf7"
  ink: "#1f2723"
  sage: "#dae3d8"
  grey-100: "#ecf0e4"
  grey-400: "#819087"
  grey-600: "#4a5951"
  grey-muted: "#5a6c62"
  lumen-800: "#323a25"
  olive: "#808867"
  lime: "#dff4ae"
  lime-ink: "#1b240f"
  volt-link: "#6843c4"
  volt-link-hover: "#4e2d9a"
  volt-500: "#815ed5"
  volt-200: "#c5abfd"
  success: "#008433"
  danger: "#dc262a"
  warning: "#e6bb00"
  info: "#006fe0"
  white-20: "#ffffff33"

typography:
  display-xxl:
    fontFamily: "\"ABC Solar Display\", Arial, sans-serif"
    fontSize: 104px
    fontWeight: 800
    lineHeight: 93.6px
  display-xl:
    fontFamily: "\"ABC Solar Display\", Arial, sans-serif"
    fontSize: 96px
    fontWeight: 800
    lineHeight: 96px
  display-h1:
    fontFamily: "\"ABC Solar Display\", Arial, sans-serif"
    fontSize: 88px
    fontWeight: 800
    lineHeight: 88px
  display-lg:
    fontFamily: "\"ABC Solar Display\", Arial, sans-serif"
    fontSize: 72px
    fontWeight: 800
    lineHeight: 72px
  heading-xl:
    fontFamily: "\"ABC Solar Display\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 800
    lineHeight: 43.2px
  heading-lg:
    fontFamily: "\"ABC Solar Display\", Arial, sans-serif"
    fontSize: 40px
    fontWeight: 800
    lineHeight: 40px
  heading-md:
    fontFamily: "\"ABC Solar Display\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 800
    lineHeight: 32px
  heading-sm:
    fontFamily: "\"ABC Solar Display\", Arial, sans-serif"
    fontSize: 28px
    fontWeight: 800
    lineHeight: 33.6px
  price:
    fontFamily: "\"ABC Solar Display\", Arial, sans-serif"
    fontSize: 36px
    fontWeight: 800
    lineHeight: 24px
    letterSpacing: 0.9px
  button:
    fontFamily: "\"ABC Solar Display\", Arial, sans-serif"
    fontSize: 18.67px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: 0.46675px
  button-sm:
    fontFamily: "\"ABC Solar Display\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: 0.35px
  body-lg:
    fontFamily: "Saans, Arial, sans-serif"
    fontSize: 21px
    fontWeight: 500
    lineHeight: 28px
  body-md:
    fontFamily: "Saans, Arial, sans-serif"
    fontSize: 18.67px
    fontWeight: 500
    lineHeight: 28px
  link-strong:
    fontFamily: "Saans, Arial, sans-serif"
    fontSize: 18.67px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: "Saans, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  small:
    fontFamily: "Saans, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  mobile-h1:
    fontFamily: "\"ABC Solar Display\", Arial, sans-serif"
    fontSize: 56px
    fontWeight: 800
    lineHeight: 48px

rounded:
  sm: 6px
  button-sm: 12px
  button: 16px
  card: 28px
  hover: 32px
  tile: 36px
  panel: 48px
  panel-lg: 64px
  pill: 9999px

spacing:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 28px
  4xl: 32px
  5xl: 64px
  6xl: 80px
  7xl: 96px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 16px 20px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    rounded: "{rounded.hover}"
  button-primary-sm:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button-sm}"
    padding: 12px 16px
    height: 40px
  button-primary-sm-hover:
    backgroundColor: "{colors.primary-hover}"
    rounded: "{rounded.hover}"
  button-partner:
    backgroundColor: "{colors.lime}"
    textColor: "{colors.lime-ink}"
    border: "3px solid {colors.lime-ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 16px 20px
    height: 56px
  text-link:
    textColor: "{colors.volt-link}"
    typography: "{typography.link-strong}"
    textDecoration: underline
  text-link-hover:
    textColor: "{colors.volt-link-hover}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.button}"
    padding: 14px 16px
    height: 52px
  bill-form:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    padding: 12px
  card-category:
    backgroundColor: "{colors.palmetto-400}"
    rounded: "{rounded.tile}"
  card-category-link:
    backgroundColor: "{colors.primary}"
    border: "3px solid {colors.palmetto-400}"
    rounded: "{rounded.card}"
    padding: 28px
  announcement-bar:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page}"
    typography: "{typography.body-md}"
  nav:
    backgroundColor: "{colors.page}"
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    padding: 80px 80px 24px
---

## Overview

Palmetto's homepage (measured at `https://palmetto.com/`, title "Palmetto | It's taken care of") is
warm, loud and friendly — deliberately un-techy for an energy company. The capture shows a dark
announcement strip ("Create an account | Save energy. Earn rewards. All in one place. *Start
earning*"), then an off-white header with Learn / Earn / Act menus on the left, the cursive
**Palmetto** script logotype centred, and Partners, an account icon and a small red "Get a quote"
button on the right.

The hero is centred: an enormous, ultra-heavy, tightly set headline — "Your one-stop shop for energy
savings" in ABC Solar Display 800 at 88px with 88px leading — above a compact white form card ("How
much was your last energy bill? **$290**" with a coral slider and a red "Let's cut it" button). Under
it, a full-width, large-radius illustration panel: a warm orange-red 3D-rendered house with solar
panels and the Palmetto script in white across the roof. Next, a big **sage** `#dae3d8` rounded panel
("What can we help you with today?") holds a carousel of rounded photo tiles (Go solar, Get a battery,
Upgrade your HVAC, Cut your bills) each with a small red arrow button. Then a brand moment: "with
**Palmetto**® — It's taken care of", a centred Saans paragraph and a red "Our mission" button. The
footer is a solid Palmetto red block.

The identity is the work of London agency Ragged Edge, which describes "Palmetto75" as "an instantly
recognisable red, exuding the warm feelings of a well-heated home", the typeface ABC Solar by Dinamo,
and a script logotype "crafted to feel laid-back and indulgent"
([Ragged Edge – Palmetto](https://raggededge.com/partnerships/palmetto)).

**Key characteristics**
- Palmetto red `#f9593b` for every CTA and the footer; hover `#d73e20` with the corner radius
  growing from 16px to 32px.
- ABC Solar Display weight 800 headlines with line height equal to (or below) font size: 88/88, 96/96,
  104/93.6.
- Saans 500 body at 21px/28px in `#1f2723` (most-read colour).
- Huge, soft corners: buttons 12–16px, cards 28–36px, panels 48–64px.
- Off-white `#fbfbf7` header/body with white `#ffffff` content areas and a sage `#dae3d8` panel.
- Secondary accents: lime `#dff4ae` partner button, violet `#6843c4` text links.

## Colors

All values are measured on the live page or read from its CSS custom properties, whose names come
from the site's Tailwind/design-token layer (e.g. `--color-brand-primary-base:var(--palmetto-500,#f9593b)`).

### Palmetto red ramp
| Token | Hex | Live variable | Use |
|---|---|---|---|
| primary | `#f9593b` | `--palmetto-500` / `--color-brand-primary-base` | CTAs, footer, category link tiles |
| primary-hover | `#d73e20` | — (measured hover) | CTA hover fill |
| palmetto-200 | `#ffccb5` | `--palmetto-200` | light tint |
| palmetto-300 | `#ffb493` | `--palmetto-300` | `--color-brand-primary-light` |
| palmetto-400 | `#f77d67` | `--palmetto-400` | coral tiles, slider track, tile borders |
| palmetto-600 | `#df3a1c` | `--palmetto-600` | deeper red step |
| palmetto-700 | `#952a18` | `--palmetto-700` | `--color-brand-primary-dark` |
| palmetto-800 | `#611d11` | `--palmetto-800` | `--color-brand-primary-darker` |

Note: the measured hover `#d73e20` is not the `--palmetto-600` value `#df3a1c`; the rendered hover wins.

### Neutrals (green-tinted "grey")
| Token | Hex | Live variable | Use |
|---|---|---|---|
| canvas | `#ffffff` | — | content background; dominant colour of the capture (43%) |
| page | `#fbfbf7` | `--grey-50` | body background, header, announcement text |
| ink | `#1f2723` | `--grey-900` | most-read text (1,136 weighted chars), headlines, announcement bar |
| sage | `#dae3d8` | `--grey-150` | large "What can we help you with" panel |
| grey-100 | `#ecf0e4` | `--grey-100` | light neutral surface |
| grey-400 | `#819087` | `--grey-400` | muted text |
| grey-600 | `#4a5951` | `--grey-600` | secondary text |
| grey-muted | `#5a6c62` | — | small text on the contact page |
| lumen-800 | `#323a25` | `--lumen-800` | dark olive ("Contractor?" display text) |
| olive | `#808867` | — | "We can help you too" display text |

### Accents
| Token | Hex | Use |
|---|---|---|
| lime | `#dff4ae` | partner CTA fill and partner section band |
| lime-ink | `#1b240f` | text and 3px border on lime |
| volt-link | `#6843c4` | underlined "Start earning" link; hover `#4e2d9a` |
| volt-500 | `#815ed5` | `--volt-500` |
| volt-200 | `#c5abfd` | `--volt-200` |

### Feedback (site variables)
success `#008433` (`--color-brand-success-base`), danger `#dc262a` (`--color-brand-danger-base`),
warning `#e6bb00` (`--color-brand-warning-base`), info `#006fe0` (`--color-brand-info-base`).

## Typography

### Families
- **ABC Solar Display** — headlines, buttons, prices (530 weighted chars; weights 700 and 800 loaded).
  Per [Ragged Edge](https://raggededge.com/partnerships/palmetto), "ABC Solar" by the Dinamo foundry is
  the brand's dedicated typeface. Site variable: `--asset-fonts-brand: "ABC Solar Display", Arial, sans-serif`.
- **Saans** — all body copy (1,351 weighted chars; weights 400, 500, 700 loaded). Site variable:
  `--asset-fonts-body: "Saans", Arial, sans-serif`.
- The cookie banner uses the system stack `ui-sans-serif, system-ui, …` (third-party widget; not a brand token).

### Scale (measured)
| Token | Family | Size | Weight | Line height | Tracking | Example |
|---|---|---|---|---|---|---|
| display-xxl | ABC Solar Display | 104px | 800 | 93.6px | — | contact page "Get in touch" |
| display-xl | ABC Solar Display | 96px | 800 | 96px | — | "It's taken care of" |
| display-h1 | ABC Solar Display | 88px | 800 | 88px | — | hero h1, "What can we help you with today?" |
| display-lg | ABC Solar Display | 72px | 800 | 72px | — | "Take the quiz", "We can help you too" |
| heading-xl | ABC Solar Display | 48px | 800 | 43.2px | — | "Marketplace" |
| heading-lg | ABC Solar Display | 40px | 800 | 40px | — | "Let us take care of it" |
| heading-md | ABC Solar Display | 32px | 800 | 32px | — | category tile labels ("Cut my bills") |
| heading-sm | ABC Solar Display | 28px | 800 | 33.6px | — | carousel h3 ("Go solar") |
| price | ABC Solar Display | 36px | 800 | 24px | 0.9px | "$290" in red |
| button | ABC Solar Display | 18.67px | 700 | 18px | 0.46675px | primary buttons |
| button-sm | ABC Solar Display | 14px | 700 | 16px | 0.35px | header "Get a quote" |
| body-lg | Saans | 21px | 500 | 28px | — | main paragraphs |
| body-md | Saans | 18.67px | 500 | 28px | — | secondary paragraphs, announcement |
| link-strong | Saans | 18.67px | 700 | 28px | — | "Start earning" |
| body | Saans | 16px | 500 | 24px | — | footer links, small copy, inputs |
| small | Saans | 14px | 500 | 20px | — | consent text (contact page) |
| mobile-h1 | ABC Solar Display | 56px | 800 | 48px | — | h1 at 390px |

Button tracking is +2.5% of size (0.46675/18.67, 0.35/14). Display headlines run at 1.0× line height
or tighter (0.9× at 104px, 0.857× at 56px mobile).

### Note on Font Substitutes
ABC Solar (Dinamo) and Saans are commercial. The site's own fallback is Arial for both
(`--asset-fonts-brand`, `--asset-fonts-body`). Keep the served names first.

## Layout

- **Max content width:** 1216px inside 32px side padding at 1280px (nav measured 1216px wide).
- **Header:** off-white, three zones — menus left, script logo centre, actions right.
- **Hero:** centred h1 (841px wide), then the bill form card (375px wide) overlapping the top edge of
  the illustration panel below it.
- **Panels:** full-width rounded blocks inset from the viewport edge; the sage panel holds an
  edge-bleeding carousel of rounded photo tiles.
- **Footer:** red, `80px 80px 24px` padding.
- **Measured gaps:** 6px (24×), 8px (14×), 16px, 20px, 10px. **Paddings:** 16px (19×), 12px (17×),
  32px (9×), 28px (7×), 20px, 80px, 96px, 64px.
- **Site spacing variables:** `--spacing-12: 12px`, `--spacing-80: 80px`, `--spacing-96: 96px`,
  `--spacing-120: 120px`; legacy `--size-spacing-xs: .5rem`, `--size-spacing-md: 1rem`,
  `--size-spacing-lg: 1.5rem`, `--size-spacing-xl: 2rem`.

## Elevation & Depth

No box shadows were measured on rendered homepage elements; depth comes from colour blocking (white
form card on the red/coral illustration, sage panel on white, red footer) and from the 3D-rendered
illustration itself. The token layer defines a shadow scale (`--size-box-shadow-xs` … `-2xl`, e.g.
`--size-box-shadow-md: 0 1px 5px 0 #0000000d, 0 1px 2px #0000000d, 0 4px 6px #0000001a`) used by
library components such as modals (`--modal-box-shadow`), not by the marketing hero.

## Shapes

| Token | Value | Where |
|---|---|---|
| sm | 6px | small controls (most frequent radius, 18×) |
| button-sm | 12px | header "Get a quote" |
| button | 16px | primary buttons, partner button, text inputs |
| card | 28px | bill form card, category link tiles |
| hover | 32px | radius that buttons morph to on hover |
| tile | 36px | coral category tiles |
| panel | 48px | large rounded panels (8×) |
| panel-lg | 64px | largest panels (3×) |
| pill | 9999px | circular icon buttons (account, carousel arrows) |

The hover morph (16px → 32px, 12px → 32px) is the brand's signature micro-interaction: buttons
soften into near-pills under the cursor. One element uses `16px 0px 0px 16px` (left-only rounding,
e.g. the slider fill) and the contact page uses `0px 0px 80px 80px` for a bottom-rounded hero block.

## Components

### Buttons
- **button-primary** — `#f9593b`, white ABC Solar Display 18.67px/700/18px (+0.46675px), 16px radius,
  `16px 20px`, 50px tall ("Let's cut it", "Our mission", "Explore the marketplace", "Submit").
  Hover (measured): fill `#d73e20`, radius `32px`.
- **button-primary-sm** — 14px/700/16px (+0.35px), 12px radius, `12px 16px`, 40px ("Get a quote").
  Hover: fill `#d73e20`, radius `32px`.
- **button-partner** — lime `#dff4ae`, `#1b240f` label and 3px `#1b240f` border, 16px radius, 56px
  ("Become a solar partner").
- **Arrow buttons** — small red rounded squares with a white chevron next to each carousel tile title.

### Text link
Saans 18.67px/700, violet `#6843c4`, underlined; hover (measured) `#4e2d9a`.

### Text input (contact page)
White, `#1f2723` Saans 16px/500/24px, 16px radius, `14px 16px`, 52px tall.

### Bill form card
White, 28px radius, 12px padding, 375 × 132px: Saans question at left, red ABC Solar Display "$290"
price (36px/800, +0.9px) at right, coral slider and primary button below.

### Category tiles
Coral `#f77d67` tiles (36px radius, 344 × 266px) with a red `#f9593b` link layer (28px radius, 3px
`#f77d67` border, 28px padding) and 32px/800 labels ("Cut my bills").

### Announcement bar & header
Bar: `#1f2723` with `#fbfbf7` Saans 18.67px/500 text, violet "Start earning" link, red × close.
Header: `#fbfbf7`, ABC Solar Display menu labels with chevrons, centred script logo.

### Footer
Solid `#f9593b`, `#1f2723` text, Saans 16px/500/24px links, `80px 80px 24px` padding.

## Design System Architecture

**Palmetto has an open-source product design system** on GitHub, separate from the marketing brand:
- [@palmetto/palmetto-design-tokens](https://github.com/palmetto/palmetto-design-tokens) — "Design
  tokens that power all Palmetto UIs … colors, fonts, spacing, and more. Using Amazon's Style
  Dictionary we transform attributes into usable variables" (README). npm package
  `@palmetto/palmetto-design-tokens` (latest 1.13.0 on the npm registry, MIT).
- [@palmetto/palmetto-components](https://github.com/palmetto/palmetto-components) — "A React component
  library to power all Palmetto UI", npm `@palmetto/palmetto-components` (latest 2.8.0), with
  Storybook and Chromatic visual testing; the repo lists `ux.palmetto.com` as its homepage.

**Token architecture.** Tokens are authored in a Figma document and pulled by the build
(`utils/getFigmaDocument`, `utils/parseFigmaDocumentTokens` read each node's `value`, `unit` and
`darkValue` text layers) and emitted through Style Dictionary (`config.json`) as SCSS variables, CSS
variables and utility classes, in category/type/item naming (`attribute/cti` transform). Examples
from the README: `$color.brand.primary.base`, `var(--color.brand.primary.base)`. On palmetto.com the
emitted variables are kebab-case and layered: semantic `--color-brand-{role}-{step|base|light|dark}`
(roles: primary, secondary, tertiary, success, danger, warning, info, grey, dark, light, white, black)
pointing at new brand primitives with fallbacks, verbatim
`--color-brand-primary-base:var(--palmetto-500,#f9593b)`,
`--color-brand-secondary-400:var(--volt-400,#9469f2)`,
`--color-brand-dark-base:var(--lumen-800,#323a25)`, `--color-brand-grey-900:var(--grey-900,#1f2723)`.
Some steps still hold older values (e.g. `--color-brand-primary-100: #c1edd2`, a green), so the
`primary` ramp on the live site mixes the new reds (400–600, light/dark) with legacy greens.
Size tokens: `--size-spacing-{xs…5xl}`, `--size-font-{2xs…5xl}`, `--size-border-radius-{xs…3xl,circle}`,
`--size-box-shadow-{0,2xs…2xl}`, `--size-line-height-{base,heading,text,input}`, and asset tokens
`--asset-fonts-brand`, `--asset-fonts-body`.

**Theming.** The token build emits a separate dark file: `variables-color-dark.scss` with
`"options": { "selector": ":root.dark" }` (`config.json`), i.e. dark mode is switched by a `dark`
class on `:root` overriding colour variables with each token's `darkValue`. The component library
ships a `ThemeProvider` component. The marketing homepage was measured in light mode only.

**Type & spacing systems.** Legacy size scale in rem (`--size-font-xs: .75rem` … `--size-font-5xl: 6rem`;
`--size-spacing-xs: .5rem` … `--size-spacing-5xl: 5rem`), line heights 1 / 1.25 / 1.5 / 1.15 (input).
The marketing layer adds px tokens (`--spacing-12`, `--spacing-80`, `--radius-6` … `--radius-64`,
`--radius-full: 9999px`).

**Component model.** The `palmetto-components` `src/components` inventory: Accordion, Alert, Badge, Box,
Button, Card, CategoryFilter, CheckboxInput, DateInput, DatePicker, Details, Drawer, Duration,
FileUpload, FormControl, FormLabel, Formik, Heading, HelpText, Icon, InputValidationMessage,
MediaModal, Modal, OptionTile, OptionTileGroup, Pagination, Popover, RadioGroup, ResponsiveProvider,
SelectInput, SelectInputInset, SelectInputNative, Spinner, TabPanels, Table, Tabs, TabsSlider,
TextInput, TextInputInset, TextLink, TextareaInput, TextareaInputInset, ThemeProvider, TimePicker,
TimePickerNative, Toast, Toggle. Marketing CSS references the same component variables
(`--form-control-box-shadow-focus`, `--option-tile-font-family`, `--tabs-slider-font-family`,
`--category-filter-box-shadow-focus`, `--button-font-family: var(--asset-fonts-brand)`).

**Accessibility.** No accessibility standard is stated in the repos' READMEs that were opened. The CSS
defines focus rings for form controls and category filters (e.g.
`--category-filter-box-shadow-focus, 0 0 0 4px var(--color-brand-grey-200)`).

**Delivery.** npm packages above (CSS via `dist/css/utilities.css`, `variables.css`, `index.css`,
`fonts.css`, optional `reset.css`; React components); icons as SVG and React components from the
tokens package; semantic-release versioning.

## Do's and Don'ts

**Do**
- Use Palmetto red `#f9593b` for every primary action; hover to `#d73e20` and round to 32px.
- Set headlines in ABC Solar Display 800, tight (line height ≤ font size), in `#1f2723`.
- Set body in Saans 500, 21px/28px.
- Use big, soft corners: 16px buttons, 28–36px cards, 48–64px panels.
- Alternate white, off-white `#fbfbf7` and sage `#dae3d8` blocks; end on a red footer.
- Use warm 3D illustration and warm-lit photography (reds, oranges, browns).
- Use violet `#6843c4` only for inline text links; lime `#dff4ae` only for the partner audience.

**Don't**
- Don't use "eco green" as a brand colour on the marketing surface — the identity is warm red.
- Don't set headlines in light weights or with loose leading.
- Don't use sharp corners or hairline-only cards.
- Don't put red text on the red footer or coral tiles.
- Don't add drop shadows to marketing cards.

## Responsive Behavior

Measured at 390px:
- h1 88px/88px → **56px/48px** (still 800).
- Primary buttons keep their desktop spec (18.67px, 16px radius, `16px 20px`, 50px).
- Body paragraphs drop from 21px/28px to **16px/24px**; 18.67px stays for secondary copy.
- Most frequent mobile sizes: 16px, 18.67px, 28px, 32px, 40px, 56px, 48px.
- The token layer defines `--size-breakpoint-tablet: 680px`.

## Iteration Guide

1. Off-white `#fbfbf7` header; white content; dark `#1f2723` announcement bar on top.
2. Hero: centred ABC Solar Display 88px/800/88px h1, then a white 28px-radius interactive card with a
   red 16px-radius 50px button.
3. Follow with a 48–64px-radius illustration or sage panel.
4. Paragraphs in Saans 500 21px/28px, centred for brand moments.
5. Buttons: red primary (16px / 12px small), lime partner, violet text links — hover morphs to 32px.
6. Footer: solid red with dark text.
7. Check every value against this file; no new tints of red.
