---
version: alpha
name: NHS
category: "Government & Nonprofit"
description: "The NHS website for England (nhs.uk), built on the NHS digital service manual design system (nhsuk-frontend): Frutiger W01 at 19px/28px with 600-weight headings, #212b32 text on a #f0f4f5 grey page with white #ffffff cards, an NHS blue #005eb8 header and links, green #007f3b buttons with a 4px #00401e bottom shadow and 4px radius, and a #ffeb3b yellow focus state."

colors:
  primary: "#007f3b"
  primary-hover: "#00662f"
  primary-shadow: "#00401e"
  on-primary: "#ffffff"
  brand: "#005eb8"
  brand-hover: "#003d78"
  header-search-hover: "#004b93"
  search-button: "#edf4fa"
  dark-blue: "#003087"
  hero-kicker: "#d2e2f1"
  canvas: "#f0f4f5"
  surface: "#ffffff"
  ink: "#212b32"
  ink-input: "#000000"
  secondary-text: "#4c6272"
  link: "#005eb8"
  link-hover: "#7c2855"
  link-visited: "#330072"
  link-active: "#002f5c"
  focus: "#ffeb3b"
  border: "#d8dde0"
  border-secondary: "#aeb7bd"
  secondary-button-hover: "#d9e7f4"
  reverse-button-hover: "#d9d9d9"
  reverse-button-shadow: "#b3b3b3"
  error: "#d5281b"
  error-hover: "#aa2016"
  error-shadow: "#6b140e"
  tag-grey: "#dbe0e3"
  tag-grey-text: "#354550"

typography:
  hero-title:
    fontFamily: "\"Frutiger W01\", arial, sans-serif"
    fontSize: 43.2px
    fontWeight: 600
    lineHeight: 48.6px
  h1:
    fontFamily: "\"Frutiger W01\", arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 36px
  h1-mobile:
    fontFamily: "\"Frutiger W01\", arial, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28.5px
  display-64:
    fontFamily: "\"Frutiger W01\", arial, sans-serif"
    fontSize: 64px
    fontWeight: 600
    lineHeight: 70px
  heading-l:
    fontFamily: "\"Frutiger W01\", arial, sans-serif"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 42px
  heading-m:
    fontFamily: "\"Frutiger W01\", arial, sans-serif"
    fontSize: 26px
    fontWeight: 600
    lineHeight: 32px
  action-link:
    fontFamily: "\"Frutiger W01\", arial, sans-serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 36px
  body:
    fontFamily: "\"Frutiger W01\", arial, sans-serif"
    fontSize: 19px
    fontWeight: 400
    lineHeight: 28px
  body-s:
    fontFamily: "\"Frutiger W01\", arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Frutiger W01\", arial, sans-serif"
    fontSize: 19px
    fontWeight: 600
    lineHeight: 24px
  tag:
    fontFamily: "\"Frutiger W01\", arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px

rounded:
  none: 0px
  button: 4px

spacing:
  s1: 4px
  s2: 8px
  s3: 16px
  s4: 24px
  s5: 32px
  s6: 40px
  s7: 48px
  s8: 56px
  s9: 64px
  gutter: 32px
  page-width: 960px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 14px 16px
    height: 56px
    border: 2px solid transparent
    boxShadow: "0 4px 0 {colors.primary-shadow}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-focused:
    backgroundColor: "{colors.focus}"
    textColor: "{colors.ink}"
    boxShadow: "0 4px 0 {colors.ink}"
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.brand}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 14px 16px
    height: 56px
    boxShadow: "0 4px 0 {colors.brand}"
  button-secondary-hover:
    backgroundColor: "{colors.secondary-button-hover}"
  button-reverse:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 14px 16px
    height: 56px
    boxShadow: "0 4px 0 {colors.reverse-button-shadow}"
  button-reverse-hover:
    backgroundColor: "{colors.reverse-button-hover}"
  button-warning:
    backgroundColor: "{colors.error}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 14px 16px
    height: 56px
    boxShadow: "0 4px 0 {colors.error-shadow}"
  button-warning-hover:
    backgroundColor: "{colors.error-hover}"
  text-input:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-input}"
    borderColor: "{colors.secondary-text}"
    borderWidth: 2px
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 4px
    height: 40px
  text-input-focused:
    borderColor: "{colors.ink}"
    outline: "4px solid {colors.focus}"
    boxShadow: "inset 0 0 0 2px {colors.ink}"
  header-search-input:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-input}"
    typography: "{typography.body-s}"
    rounded: 4px 0px 0px 4px
    padding: 0px 12px
    height: 40px
  header-search-button:
    backgroundColor: "{colors.search-button}"
    textColor: "{colors.brand}"
    rounded: 0px 4px 4px 0px
    height: 40px
  header-search-button-hover:
    backgroundColor: "{colors.header-search-hover}"
    textColor: "{colors.on-primary}"
  card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    borderColor: "{colors.border}"
    borderWidth: 1px
    rounded: "{rounded.none}"
    boxShadow: "0 3px 0 {colors.border}"
  tag:
    backgroundColor: "{colors.tag-grey}"
    textColor: "{colors.tag-grey-text}"
    borderColor: "{colors.tag-grey-text}"
    borderWidth: 1px
    typography: "{typography.tag}"
    rounded: "{rounded.none}"
    padding: 4px 8px
    height: 26px
  action-link:
    textColor: "{colors.brand}"
    typography: "{typography.action-link}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
    textDecoration: underline
  link-hover:
    textColor: "{colors.link-hover}"
    textDecoration: none
  service-list-item:
    backgroundColor: "{colors.brand}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    padding: 12px 24px
    height: 52px
  service-list-item-hover:
    backgroundColor: "{colors.brand-hover}"
    textDecoration: underline
  header:
    backgroundColor: "{colors.brand}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-s}"
    height: 128px
  footer:
    backgroundColor: "{colors.border}"
    textColor: "{colors.ink}"
    borderTop: "4px solid {colors.brand}"
    padding: 32px 0px
    typography: "{typography.body-s}"
---

## Overview

nhs.uk is the NHS website for England, and its homepage is a direct application of the
NHS digital service manual's design system. The page reads as a calm, clinical, highly
legible public service: a thin white cookie note at the top, then a 128px NHS blue
`#005eb8` header holding the white NHS lozenge logo, a search field with a pale
`#edf4fa` square search button, a "My account" link, and a row of underlined white
navigation links (Health A to Z, NHS services, Healthy living, Mental health, Care and
support).

The hero is a full-width photograph of clinicians, overlaid on the left by a solid blue
`#005eb8` box containing the two-part h1: a 32px/36px kicker "NHS website for England"
in pale blue `#d2e2f1`, then a 43.2px/48.6px white title "Find information and services
to help you manage your health". Two white cards ("Health A to Z", "NHS services") overlap
the bottom of the hero, each with a 26px underlined blue link heading, a 19px description
and a round blue chevron.

Below, sections alternate between the grey `#f0f4f5` page and full-width white bands:
"Manage your health" uses green-arrow action links in 22px semibold blue; "NHS services"
shows a stack of solid blue list buttons ("Find a pharmacy", "Find a dentist", "Find a
GP") beside a grey bordered "Help from NHS 111" panel; "Featured" is three white cards
with large underlined link headings; "More information and advice" is a three-column list
of underlined links with descriptions. The footer is grey `#d8dde0` with a 4px blue top
border.

Microcopy is plain and second-person: "Find out about conditions, symptoms, medicines,
tests and treatments, including when to get help", "For a life-threatening emergency call
999." No marketing flourish; photography appears only in the hero.

Key characteristics:
- Frutiger W01 only, at two weights: 400 and 600.
- 19px/28px body text in `#212b32`.
- NHS blue `#005eb8` for header, links, list buttons and the hero box.
- Grey `#f0f4f5` page with white `#ffffff` cards and bands.
- Cards are square with a 1px `#d8dde0` border and a hard `0 3px 0 #d8dde0` shadow.
- Buttons (from the design system) are green `#007f3b`, 4px radius, with a 4px hard shadow.
- Yellow `#ffeb3b` focus everywhere.

## Colors

Values below are measured on nhs.uk (computed styles, CSS custom properties prefixed
`--nhsuk-`, stylesheet corpus) and on the service manual's component examples. Names follow
the service manual colour page
([service-manual.nhs.uk/design-system/styles/colour](https://service-manual.nhs.uk/design-system/styles/colour)).

### Brand & Accent
- **NHS blue** (`#005eb8`): `--nhsuk-brand-colour`; header, links, hero box, list buttons,
  footer top border.
- **Dark blue** (`#003087`): `--nhsuk-dark-blue-colour`; footer links.
- **List button hover** (`#003d78`): measured hover background of "Find a pharmacy".
- **Header search hover** (`#004b93`): measured hover of the header search button.
- **Search button** (`#edf4fa`): default header search button background.
- **Hero kicker** (`#d2e2f1`): the "NHS website for England" line.

### Action
- **Primary / button green** (`#007f3b`): `$nhsuk-button-colour`; hover `#00662f`,
  shadow `#00401e`.
- **Secondary button**: transparent with `#005eb8` text and `0 4px 0 #005eb8` shadow;
  hover `#d9e7f4`.
- **Reverse button**: `#ffffff`, shadow `#b3b3b3`, hover `#d9d9d9`.
- **Warning button**: `#d5281b`, hover `#aa2016`, shadow `#6b140e`.

### Surface
- **Canvas** (`#f0f4f5`): `--nhsuk-body-background-colour` (grey 5), the page background.
- **Surface** (`#ffffff`): cards, the white section bands and the cookie note.
- **Footer / border** (`#d8dde0`): grey 4; the footer and card borders.

### Text
- **Ink** (`#212b32`): `$nhsuk-text-colour`, most-read text colour.
- **Secondary text** (`#4c6272`): grey 1; hints, and the 2px input border.
- **Input text** (`#000000`).
- **Link** `#005eb8`, **hover** `#7c2855`, **visited** `#330072`, **active** `#002f5c`.

### Semantic
- **Error** `#d5281b`; **success** `#007f3b`; **focus** `#ffeb3b` with focus text
  `#212b32`; **secondary border** `#aeb7bd`.
- Grey tag: background `#dbe0e3`, text and 1px border `#354550`.

## Typography

### Font Family
Frutiger W01, declared `"Frutiger W01", arial, sans-serif` (`$nhsuk-font-family` in
[nhsuk-frontend `_globals.scss`](https://github.com/nhsuk/nhsuk-frontend/blob/main/packages/nhsuk-frontend/src/nhsuk/core/settings/_globals.scss)).
Weights: `$nhsuk-font-weight-normal: 400` and `$nhsuk-font-weight-bold: 600`. The page
loads exactly "Frutiger W01 400" and "Frutiger W01 600".

### Hierarchy

| Token | Size | Weight | Line height | Where |
|---|---|---|---|---|
| display-64 | 64px | 600 | 70px | Card heading in the service manual "primary card" example |
| hero-title | 43.2px | 600 | 48.6px | Second line of the homepage h1 |
| heading-l | 36px | 600 | 42px | Page-heading labels (text input example) |
| h1 | 32px | 600 | 36px | "NHS website for England" kicker (h1 element) |
| heading-m | 26px | 600 | 32px | Section h2s, card headings |
| action-link | 22px | 600 | 36px | Green-arrow action links |
| body | 19px | 400 | 28px | Paragraphs, list buttons |
| button | 19px | 600 | 24px | All buttons |
| body-s | 16px | 400 | 24px | Header nav, footer, search input |
| tag | 16px | 600 | 16px | Tag |
| h1-mobile | 24px | 600 | 28.5px | h1 kicker at 390px |

The published scale lists 64, 48, 36, 26, 22, 19, 16 and 14px
([styles/typography](https://service-manual.nhs.uk/design-system/styles/typography)).
On mobile the body drops to 16px/24px and headings step down (measured mobile sizes: 32,
27, 24, 22, 19, 16, 14px).

### Principles
- Two weights only; "Use bold sparingly".
- "Do not use italics or underlining" in body copy — underline is reserved for links.
- Left-aligned text; sentence case headings; letter-spacing is always normal.

### Note on Font Substitutes
Frutiger is a licensed typeface; the service manual states NHS England licenses Frutiger
weights for organisations in England and declares Arial as the fallback
([styles/typography](https://service-manual.nhs.uk/design-system/styles/typography)). Use
`arial, sans-serif` when Frutiger W01 is not licensed.

## Layout

### Spacing System
Responsive scale (large / small screens): unit 1 4/4px, 2 8/8, 3 16/8, 4 24/16, 5 32/24,
6 40/32, 7 48/40, 8 56/48, 9 64/56
([styles/spacing](https://service-manual.nhs.uk/design-system/styles/spacing)). Measured
homepage paddings: 16px (most common), 32, 8, 24, 12, 64px; gaps 8 and 16px.

### Grid & Container
- `$nhsuk-page-width: 960px`, `$nhsuk-gutter: 32px` (`_globals.scss`).
- Hero cards and the "NHS services" row are two halves; "Featured" and "More information"
  are thirds.

### Whitespace Philosophy
Sections are separated by full-width colour changes (grey ↔ white) and generous vertical
padding (64px), never by decorative dividers.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| Flat | none | Sections, header |
| Card | `0 3px 0 #d8dde0` + 1px `#d8dde0` border | All cards |
| Button | `0 4px 0 #00401e` | Primary button |
| Focus | `#ffeb3b` fill + `0 4px 0 #212b32` | Focused button |

No blurred shadows. Depth is expressed with hard offset "ledges".

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| none | 0px | Cards, inputs, tags, list buttons, hero box |
| button | 4px | Buttons (`$nhsuk-button-border-radius`); header search ends `4px 0px 0px 4px` / `0px 4px 4px 0px` |

### Iconography
Round blue chevrons in cards; green circular arrows in action links; white chevrons in
list buttons.

## Components

### Buttons
**Primary**: `#007f3b`, white 19px/24px semibold text, padding `14px 16px`, 56px tall,
4px radius, 2px transparent border, `0 4px 0 #00401e`. Hover `#00662f`. Focus: `#ffeb3b`
background, `#212b32` text, `0 4px 0 #212b32`.
**Secondary**: transparent, `#005eb8` text, `0 4px 0 #005eb8`; hover `#d9e7f4`.
**Reverse**: white, `#212b32` text, `0 4px 0 #b3b3b3`; hover `#d9d9d9`.
**Warning**: `#d5281b`, white text, `0 4px 0 #6b140e`; hover `#aa2016`.

### Cards & Containers
White `#ffffff`, 1px `#d8dde0` border, `0 3px 0 #d8dde0`, 0px radius. Homepage cards have
a 26px/32px semibold underlined link heading.

### Inputs & Forms
**Text input**: white, 2px `#4c6272` border, 0px radius, padding 4px, 40px tall, 19px/28px.
Focus: border `#212b32`, 4px `#ffeb3b` outline, `inset 0 0 0 2px #212b32`.
**Header search**: 40px tall, 16px text, padding `0px 12px`, radius `4px 0px 0px 4px`,
joined to a `#edf4fa` search button (radius `0px 4px 4px 0px`) that turns `#004b93`
with white icon on hover.

### Tags
Grey tag: `#dbe0e3` background, `#354550` text and 1px border, 16px/16px semibold,
padding `4px 8px`, 26px tall, square.

### Navigation
Header 128px tall in `#005eb8`; nav links white 16px/24px underlined, padding `8px 12px`.

### Signature Components
- **Action link**: green circle arrow + 22px/36px semibold `#005eb8` text, left padding
  39.6px.
- **Service list button**: full-width `#005eb8` block, white 19px/28px text, padding
  `12px 24px`, 52px tall, chevron right; hover `#003d78` with underline.
- **Hero**: photograph with a solid blue text box and overlapping white cards.

### Footer
Background `#d8dde0`, 4px `#005eb8` top border, padding `32px 0px`, links 16px/24px in
`#003087`, "© Crown copyright" 16px/24px `#212b32`.

## Design System Architecture

nhs.uk is built with the **NHS digital service manual design system**
([service-manual.nhs.uk/design-system](https://service-manual.nhs.uk/design-system/components))
and the code package **NHS.UK frontend** ([github.com/nhsuk/nhsuk-frontend](https://github.com/nhsuk/nhsuk-frontend)),
which "contains the code you need to start building user interfaces for NHS websites and
services".

**Token architecture.** Two tiers in Sass. A palette (`_colours-palette.scss`, read via
`nhsuk-colour("blue")`, with `nhsuk-tint()` / `nhsuk-shade()` helpers) feeds applied
colours in
[`_colours-applied.scss`](https://github.com/nhsuk/nhsuk-frontend/blob/main/packages/nhsuk-frontend/src/nhsuk/core/settings/_colours-applied.scss),
e.g. `$nhsuk-brand-colour: nhsuk-colour("blue")`, `$nhsuk-body-background-colour: nhsuk-colour("grey-5")`,
`$nhsuk-button-hover-colour: nhsuk-shade($nhsuk-button-colour, 20%)`,
`$nhsuk-secondary-button-hover-colour: nhsuk-tint($nhsuk-secondary-button-border-colour, 85%)`.
Component-level names exist for buttons (`$nhsuk-button-shadow-colour`,
`$nhsuk-secondary-button-border-colour`). The live site exposes them as CSS custom
properties: `--nhsuk-brand-colour`, `--nhsuk-focus-colour`, `--nhsuk-warning-button-colour`,
`--nhsuk-secondary-button-hover-colour`, `--nhsuk-grey-5-colour`. The service manual says to use
functional variables in their designed context and otherwise "reference the colour palette
directly"
([styles/colour](https://service-manual.nhs.uk/design-system/styles/colour)).

Discrepancy: the colour page lists link hover `#7C2855` and nhs.uk renders `#7c2855` on
hover, while the current `main` branch `_colours-applied.scss` maps link hover to
`nhsuk-colour("dark-blue")`. The live value is used here.

**Theming.** One light theme; a separate `nhsuk-dynamic-type.scss` entry and
`$nhsuk-include-dynamic-type: false` setting exist in the package. No dark mode is
documented on the pages consulted.

**Type & spacing systems.** Sizes 64/48/36/26/22/19/16/14 with `nhsuk-u-font-size-*`
override classes and heading classes `nhsuk-heading-xl` … `nhsuk-heading-xs`
([styles/typography](https://service-manual.nhs.uk/design-system/styles/typography)).
Spacing units 0–9 with a 4px smallest step, `nhsuk-spacing()` and `nhsuk-u-margin-*`
classes ([styles/spacing](https://service-manual.nhs.uk/design-system/styles/spacing)).
Breakpoints: mobile 320px, tablet 641px, desktop 769px, large-desktop 990px
([`_breakpoints.scss`](https://github.com/nhsuk/nhsuk-frontend/blob/main/packages/nhsuk-frontend/src/nhsuk/core/settings/_breakpoints.scss)).
Globals: `$nhsuk-border-radius: 4px`, `$nhsuk-button-shadow-size: 4px`,
`$nhsuk-focus-width: 4px`, `$nhsuk-border-width-form-element: 2px`.

**Component model.** BEM classes prefixed `nhsuk-` (`nhsuk-button`, `nhsuk-card`,
`nhsuk-tag`, `nhsuk-input`). Official inventory
([components](https://service-manual.nhs.uk/design-system/components)) — form elements:
Buttons, Character count, Checkboxes, Date input, Error message, Error summary, Fieldset,
File upload, Hint text, Password input, Radios, Search input, Select, Text input,
Textarea; content presentation: Card, Details, Do and Don't lists, Expander, Images,
Inset text, Notification banners, Panel, Review date, Summary list, Table, Tabs, Tag,
Task list, Warning callout; navigation: Action link, Back link, Breadcrumbs, Contents
list, Footer, Header, Pagination, Skip link. Button variants on the buttons page:
default, reverse, secondary, secondary solid, warning, smaller.

**Accessibility.** WCAG 2.2 contrast targets: AA "4.5:1 for small text" and "3:1 for large
text and components"; AAA "7:1 for small text"
([styles/colour](https://service-manual.nhs.uk/design-system/styles/colour)). Focus uses
yellow `#ffeb3b` with `#212b32`, width 4px.

**Delivery.** npm package `nhsuk-frontend` (latest dist-tag 10.6.1 on the npm registry),
installable via npm or as compiled files; release notes per release on GitHub; a guide
for updating to v10 on the service manual.

## Do's and Don'ts

### Do
- Use Frutiger W01 (fallback arial) at 19px/28px, weights 400 and 600 only.
- Keep the page `#f0f4f5` and put content in white `#ffffff` cards or bands.
- Use `#005eb8` for links (underlined) and the header.
- Use green `#007f3b` for the primary button with its `0 4px 0 #00401e` ledge.
- Give cards a 1px `#d8dde0` border and `0 3px 0 #d8dde0` ledge, square corners.
- Use action links (green arrow + 22px semibold blue) for key tasks.
- Show the yellow `#ffeb3b` focus treatment on every interactive element.

### Don't
- Don't round cards or inputs; only buttons get 4px.
- Don't use italics or underline body copy.
- Don't introduce blurred shadows or gradients.
- Don't use a third font weight.
- Don't use photography outside the hero.
- Don't invent tints of NHS blue; use the measured hover values.

## Responsive Behavior

### Breakpoints
| Name | Width |
|---|---|
| mobile | 320px |
| tablet | 641px |
| desktop | 769px |
| large-desktop | 990px |

### Type changes
At 390px: h1 kicker 32px → 24px/28.5px; body 19px → 16px/24px; the 22px action link and
26px headings step down (measured mobile sizes 27, 22, 19, 16, 14px).

### Touch Targets
Buttons are 56px tall; list buttons 52px; header search 40px; nav links 40px tall.

### Collapsing Strategy
The responsive spacing scale reduces each unit on small screens (e.g. unit 9: 64px →
56px).

### Image Behavior
The hero photo is full-bleed behind the blue text box; it is the only large image.

## Iteration Guide

1. Set the page to `#f0f4f5`, text `#212b32`, Frutiger W01 19px/28px.
2. Add the `#005eb8` header with white logo, search (`#edf4fa` button) and underlined nav.
3. Use 26px/32px semibold headings and white square cards with the `#d8dde0` ledge.
4. Use the green `#007f3b` 56px button for the main action; secondary is outlined blue.
5. Key tasks become action links; service shortcuts become blue list buttons.
6. Finish with the `#d8dde0` footer and its 4px blue top border.
7. Verify every focusable element shows `#ffeb3b` focus.
