---
version: alpha
name: Evergreen
category: "Design Systems"
description: "Evergreen is Segment's React UI framework: white and #fafbff surfaces, a #3366ff blue primary, a navy-grey text ramp (#101840, #474d66, #696f8c), SF UI Text/Display type at 12-14px, 4px control radii and 32px controls."

colors:
  canvas: "#ffffff"
  page-largest: "#fafbff"
  ink: "#474d66"
  ink-strong: "#101840"
  ink-muted: "#696f8c"
  ink-disabled: "#c1c4d6"
  primary: "#3366ff"
  primary-hover: "#2952cc"
  primary-tint: "#ebf0ff"
  primary-soft: "#d6e0ff"
  on-primary: "#ffffff"
  danger: "#d14343"
  danger-tint: "#f9dada"
  danger-ink: "#7d2828"
  success: "#52bd95"
  success-tint: "#dcf2ea"
  success-ink: "#317159"
  warning-tint: "#f8e3da"
  warning-ink: "#996a13"
  neutral-tint: "#edeff5"
  hairline: "#d8dae5"
  hairline-soft: "#e6e8f0"
  footer-border: "#edeff5"

typography:
  display:
    fontFamily: "\"SF UI Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 32px
    fontWeight: 600
    lineHeight: 40px
    letterSpacing: "-0.2px"
  heading:
    fontFamily: "\"SF UI Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: "-0.2px"
  subheading:
    fontFamily: "\"SF UI Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.07px"
  title:
    fontFamily: "\"SF UI Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: "-0.05px"
  body:
    fontFamily: "\"SF UI Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.05px"
  nav:
    fontFamily: "\"SF UI Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.05px"
  control:
    fontFamily: "\"SF UI Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: "\"SF UI Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 12px
    fontWeight: 500
    lineHeight: 32px
  badge:
    fontFamily: "\"SF UI Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 11.5px
    fontWeight: 600
    lineHeight: 16px

rounded:
  xs: 4px
  sm: 8px
  pill: 9999px

spacing:
  s1: 1px
  s2: 6px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 40px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 1px 16px
    height: 32px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-default:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 1px 16px
    height: 32px
  button-danger:
    backgroundColor: "{colors.danger}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 1px 16px
    height: 32px
    borderColor: "{colors.danger}"
  button-success:
    backgroundColor: "{colors.success}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 1px 16px
    height: 32px
    borderColor: "{colors.success}"
  button-disabled:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-disabled}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 1px 16px
    height: 32px
    borderColor: "{colors.hairline-soft}"
  input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.control}"
    rounded: "{rounded.xs}"
    padding: 1px 12px
    height: 32px
    borderColor: "{colors.hairline}"
  select:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.control}"
    rounded: "{rounded.xs}"
    padding: 0px 30px 0px 10px
    height: 32px
    borderColor: "{colors.hairline}"
  badge-neutral:
    backgroundColor: "{colors.neutral-tint}"
    textColor: "{colors.ink}"
    typography: "{typography.badge}"
    rounded: "{rounded.xs}"
    padding: 0px 6px
    height: 16px
  badge-blue:
    backgroundColor: "{colors.primary-soft}"
    textColor: "{colors.primary-hover}"
    typography: "{typography.badge}"
    rounded: "{rounded.xs}"
    padding: 0px 6px
    height: 16px
  badge-red:
    backgroundColor: "{colors.danger-tint}"
    textColor: "{colors.danger-ink}"
    typography: "{typography.badge}"
    rounded: "{rounded.xs}"
    padding: 0px 6px
    height: 16px
  badge-green:
    backgroundColor: "{colors.success-tint}"
    textColor: "{colors.success-ink}"
    typography: "{typography.badge}"
    rounded: "{rounded.xs}"
    padding: 0px 6px
    height: 16px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
  nav:
    backgroundColor: "{colors.canvas}"
    padding: 0px 40px
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.sm}"
    padding: 40px 24px 40px 40px
  footer:
    padding: 24px 40px
    borderColor: "{colors.footer-border}"
---

## Overview

Evergreen is "Segment's design system" and, in the words of its homepage, "a React UI Framework for building ambitious products on the web." The product is the component library; the documentation site at evergreen.segment.com is built from the same components and shows the system's look at the scale of a docs page. The homepage states three core values: "Works out of the box" (polished React components), "Flexible and composable" (components built on top of a React UI Primitive) and "Enterprise-grade" (a UI design language for enterprise web applications).

Visually it is a cool, quiet, bluish-white system. Surfaces are white (`{colors.canvas}`) and a barely-blue `{colors.page-largest}` (`#fafbff`, the official `gray50`). Text is a navy-tinted grey ramp: `{colors.ink-strong}` (`#101840`) for headings, `{colors.ink}` (`#474d66`) for body, `{colors.ink-muted}` (`#696f8c`) for navigation and secondary copy. One saturated color, `{colors.primary}` (`#3366ff`), is used for the primary button, links and the selected state. Controls are 32px high with 4px corners and tiny 12px labels, which gives the system a dense, tool-like feel; the marketing page then relaxes this with 14px/24px body text and generous section spacing.

**Key Characteristics:**
- One blue (`{colors.primary}`), with a darker hover step (`{colors.primary-hover}` `#2952cc`) and pale tints (`{colors.primary-tint}` `#ebf0ff`, `{colors.primary-soft}` `#d6e0ff`).
- Navy-grey neutrals, not pure grey: every text and border color carries a blue undertone.
- A tinted-fill pattern for status: foreground and a pale background pair (for example `{colors.danger-ink}` on `{colors.danger-tint}`), documented in the official `fills` tokens.
- 32px controls, 12px/500 button labels, 4px radius (`{rounded.xs}`); 8px (`{rounded.sm}`) for larger containers.
- Shadows built from a faint 1px outline plus a soft offset ambient shadow tinted with a blue-grey `rgba(67, 90, 111, ...)`.
- System-font based type: SF UI Text and SF UI Display lead the stacks, with `-apple-system`, Segoe UI, Roboto, Helvetica, Arial as fallbacks.
- Tight negative letter spacing on headings (-0.2px at 24-32px, -0.07px at 18px, -0.05px at 14-16px).

### Imagery and Voice

- **Illustration style.** Flat, pastel, isometric-leaning spot illustrations — a stacked server with an upload box, a calendar with a pink star, layered panels with pink and green accents — drawn in the blue tints with small pink, green and violet accents. Each is paired with a card or section.
- **Icon tiles.** The three core values use a blue glyph on a pale-blue circle (a light bulb, a wrench, a building).
- **Component thumbnails.** Foundations, Components and Patterns each show three grey-tinted thumbnails (Typography, Colors, Icons; Button, Badge & Pill, Alert; Empty States, Table Layout, Error Messages).
- **Voice.** Plain, product-oriented, short: "Meet Evergreen, Segment's design system", "Works out of the box", "Learn how to install the evergreen-ui package", "Check out the latest changes and updates".
- **Resources.** Two bordered tiles: "Evergreen Figma Library" and "Segment Brand Hub".

### Capture Observations

- The hero band and the "Resources" band are `{colors.page-largest}`; the rest of the page is white.
- Cards in "Get started" are `{colors.page-largest}` rounded rectangles with no border and generous inner padding (40px 24px 40px 40px).
- The nav bar is white, with a green leaf logo and a small uppercase "EVERGREEN" wordmark at left and five links (Introduction, Foundations, Components, Patterns, Resources). A "Star" GitHub link at the far right renders as the browser's default blue underlined link (`#0000ee`), an unstyled leftover that is not part of the system.
- The footer carries the Segment logo, a copyright line and two small links ("We're hiring!", "Website Data Collection") over a faint top border (`{colors.footer-border}`).

## Colors

> **Source pages:** home (`/`) and the component pages `/components/buttons`, `/text-input`, `/select`, `/badges` (measured). The official [Colors foundation page](https://evergreen.segment.com/foundations/colors) and the repository's `src/themes/default/tokens/colors.js` supply the names and scales.

### Brand & Accent
- **Primary** (`{colors.primary}` — `#3366ff`): Official `blue500`, also the "selected" functional token. Primary button fill, links, selected states.
- **Primary Hover** (`{colors.primary-hover}` — `#2952cc`): `blue600`; the hover fill of the primary button (measured: `#3366ff` → `#2952cc`) and text of blue badges.
- **Primary Tint** (`{colors.primary-tint}` — `#ebf0ff`): `blue50`; light fill for icon tiles and hover backgrounds.
- **Primary Soft** (`{colors.primary-soft}` — `#d6e0ff`): `blue100`; the background of blue badges and the focus ring color.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): Text on primary, danger and success buttons.

### Semantic (measured on the Button and Badge pages)
- **Danger** (`{colors.danger}` — `#d14343`, red500), tint `{colors.danger-tint}` (`#f9dada`, red100), ink `{colors.danger-ink}` (`#7d2828`, red700).
- **Success** (`{colors.success}` — `#52bd95`, green500), tint `{colors.success-tint}` (`#dcf2ea`, green100), ink `{colors.success-ink}` (`#317159`, green700).
- **Warning** badge: ink `{colors.warning-ink}` (`#996a13`, orange700) on `{colors.warning-tint}` (`#f8e3da`, orange100).
- The official scales also include purple, teal and yellow tints (`#e7e4f9`, `#d3f5f7`, `#ffefd2`) used by the corresponding badge colors.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): Page and control background.
- **Page Largest** (`{colors.page-largest}` — `#fafbff`): The largest background area on the homepage (hero, cards, resources band); official `gray50`.
- **Neutral Tint** (`{colors.neutral-tint}` — `#edeff5`): `gray200`; neutral badge fill.
- **Hairline** (`{colors.hairline}` — `#d8dae5`): `gray400`; border of text inputs and selects.
- **Hairline Soft** (`{colors.hairline-soft}` — `#e6e8f0`): `gray300`; border of disabled buttons.
- **Footer Border** (`{colors.footer-border}` — `#edeff5`): Footer top border.

### Text
- **Ink Strong** (`{colors.ink-strong}` — `#101840`): `gray900` / "dark"; headings and card titles.
- **Ink** (`{colors.ink}` — `#474d66`): `gray800` / "default"; body text and control text.
- **Ink Muted** (`{colors.ink-muted}` — `#696f8c`): `gray700` / "muted"; nav links, secondary copy.
- **Ink Disabled** (`{colors.ink-disabled}` — `#c1c4d6`): `gray500`; disabled button text (measured).

The Colors page describes three principles: intentional functional use, accessibility with high contrast, and a high dynamic range that allows "very light neutral colors for background colors". Colors are tokenized and scaled, from 100 to 500, with gray and blue given expanded scales.

## Typography

### Font Family
The theme declares three stacks: **display** (`"SF UI Display", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif…`), **ui** (`"SF UI Text", …` the same fallbacks) and **mono** (`"SF Mono", "Monaco", "Inconsolata", "Fira Mono", "Droid Sans Mono", "Source Code Pro", monospace`). The docs site declares SF UI Text/Display but loads no web font (the extractor reports none), so on most machines the fallback after them — `-apple-system` on Apple devices, Segoe UI on Windows — is what renders.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 32px | 600 | 40px | -0.2px | Hero h1 (SF UI Display) |
| `{typography.heading}` | 24px | 600 | 32px | -0.2px | Section headings ("Core values", "Get started") |
| `{typography.subheading}` | 18px | 600 | 24px | -0.07px | Value titles ("Works out of the box") |
| `{typography.title}` | 16px | 600 | 20px | -0.05px | Card titles ("Installation", "Foundations") |
| `{typography.body}` | 14px | 400 | 24px | -0.05px | Paragraphs |
| `{typography.nav}` | 14px | 400 | 20px | -0.05px | Nav links, card links |
| `{typography.control}` | 12px | 400 | 16px | normal | Input and select text |
| `{typography.button}` | 12px | 500 | 32px | normal | Button labels |
| `{typography.badge}` | 11.5px | 600 | 16px | normal | Badges |

### Official token scale
The repository's `typography.js` lists font sizes `10px, 12px, 14px, 16px, 18px, 20px, 24px, 32px`, weights light 300, normal 400, semibold 500, bold 600, line heights `16px, 18px, 20px, 24px, 28px, 32px, 40px`, and letter spacings tightest -0.2px, tighter -0.07px, tight -0.05px, normal 0, wide 0.6px. The measured values above use exactly those steps. The Typography foundation page describes `Heading` sizes 100–900 (default 500), and `Text` / `Paragraph` sizes 300, 400 (default) and 500.

### Principles
- **Small controls, normal reading text.** UI controls are 12px; reading text is 14px with 24px leading.
- **Heavier weights on headings only.** Headings are 600; the weight name "semibold" maps to 500 in the token list, so button labels use 500.
- **Letter spacing tightens as size grows,** keeping large headings compact.

### Note on Font Substitutes
SF UI Text and SF UI Display are Apple-system faces and are not loaded by the site. Use `-apple-system` / `system-ui` on Apple platforms, Segoe UI on Windows, Roboto on Android; keep the same size and tracking values.

## Layout

- **Page.** Full-width bands (hero 284px tall in the measured capture) with horizontal padding of 40px; content blocks inside align to a wider inner container with cards 544px wide in a two-up row.
- **Navigation.** A 40px-padded white bar: logo and wordmark, then five links, then a GitHub "Star" link at the right.
- **Sections.** Core values (three columns of icon, title, copy), Get started (two cards), Design language (three rows of text on the left and three thumbnail tiles on the right), Resources (two bordered tiles), footer.
- **Spacing scale.** `{spacing.s1}` 1px (borders), `{spacing.s2}` 6px (badge padding), `{spacing.s3}` 10px (select padding), `{spacing.s4}` 12px (input padding), `{spacing.s5}` 16px (button padding), `{spacing.s6}` 24px (card padding), `{spacing.s7}` 40px (page padding).
- **Control heights.** Buttons, inputs and selects are 32px; badges are 16px.

## Elevation & Depth

The official `shadows.js` defines five elevation levels and a focus ring. All start with a faint 1px outline and add a soft, negatively spread ambient shadow in `rgba(67, 90, 111, …)`:

| Level | Value |
|---|---|
| 0 | `0 0 1px rgba(67, 90, 111, 0.3)` |
| 1 | `0 0 1px rgba(67, 90, 111, 0.3), 0 2px 4px -2px rgba(67, 90, 111, 0.47)` |
| 2 | `0 0 1px rgba(67, 90, 111, 0.3), 0 5px 8px -4px rgba(67, 90, 111, 0.47)` |
| 3 | `0 0 1px rgba(67, 90, 111, 0.3), 0 8px 10px -4px rgba(67, 90, 111, 0.47)` |
| 4 | `0 0 1px rgba(67, 90, 111, 0.3), 0 16px 24px -8px rgba(67, 90, 111, 0.47)` |
| Focus ring | `0 0 0 2px` in `blue100` (`{colors.primary-soft}`) |

On the docs homepage no shadows are used: buttons, cards and bands are flat, and depth comes from the `{colors.page-largest}` tint against white.

## Shapes

The official `radii.js` is `['0px', '4px', '8px']`.
- `{rounded.xs}` 4px — buttons, inputs, selects, badges and link focus areas (the most common radius on the homepage).
- `{rounded.sm}` 8px — cards (measured as 8px on all four corners) ; the page also contains elements measured with 8px top corners only (`8px 8px 0px 0px`).
- `50%` / `{rounded.pill}` — circular icon tiles on the homepage.

## Components

### Buttons
- **button-primary** — `{colors.primary}` fill and border, `{colors.on-primary}` text, `{typography.button}` (12px / 500 / 32px), `{rounded.xs}`, 32px high, padding `1px 16px`; hover fills `{colors.primary-hover}`.
- **button-default** — white fill, `{colors.ink}` text.
- **button-danger / button-success** — `{colors.danger}` / `{colors.success}` fill and border, white text.
- **Minimal** — transparent with `{colors.ink}` text and a transparent 1px border.
- **button-disabled** — white fill, `{colors.ink-disabled}` text, `{colors.hairline-soft}` border.

### Inputs and Selects
- **input** — white, 1px `{colors.hairline}` border, `{rounded.xs}`, 32px, padding `1px 12px`, text `{colors.ink}` at 12px/16px.
- **select** — same shell; padding `0px 30px 0px 10px` leaves room for the chevron.

### Badges and Pills
- **badge** — 16px high, 11.5px / 600, padding `0px 6px`, `{rounded.xs}`, uppercase labels on the badges page. Neutral (`{colors.ink}` on `{colors.neutral-tint}`), blue (`{colors.primary-hover}` on `{colors.primary-soft}`), red, green; orange, purple, teal and yellow follow the same fills pattern.

### Cards and Navigation
- **card** — `{colors.page-largest}` fill, `{rounded.sm}`, padding `40px 24px 40px 40px`, `{colors.ink-strong}` title, blue link at the foot.
- **nav** — white, 40px side padding; **nav-link** in `{colors.ink-muted}` at `{typography.nav}`; **link** in `{colors.primary}`.
- **footer** — 24px / 40px padding with a `{colors.footer-border}` top border.

### Interaction States (measured)

| Element | Default | Hover / other |
|---|---|---|
| Primary button | `{colors.primary}` fill and border | `{colors.primary-hover}` fill and border |
| Nav link | `{colors.ink-muted}` | not recorded |
| Disabled button | `{colors.ink-disabled}` text, `{colors.hairline-soft}` border | not interactive |
| Minimal button | transparent, `{colors.ink}` text | not recorded |

### Documentation Information Architecture

The top-level sections are Introduction, Foundations, Components, Patterns and Resources. Foundations lists Typography, Colors and Icons. Components lists, among others, Button, Badge & Pill and Alert; the pages measured for this file (`/components/buttons`, `/text-input`, `/select`, `/badges`) are each a title, a short description, and live demos with code. Patterns lists Empty States, Table Layout and Error Messages. Each homepage row links to its section with a blue text link ("Go to Foundations", "Go to Components", "Go to Patterns").

## Design System Architecture

Evergreen is itself the design system and documents it publicly.

- **Repository.** The theme lives in [`src/themes/default`](https://github.com/segmentio/evergreen/tree/master/src/themes/default), split into `components` and `tokens`. The tokens directory contains `colors.js`, `fills.js`, `intents.js`, `radii.js`, `shadows.js`, `typography.js` and `z-indices.js`.
- **Token files read for this document.** [`colors.js`](https://raw.githubusercontent.com/segmentio/evergreen/master/src/themes/default/tokens/colors.js) (gray 50–900, blue 25–900, red, green, orange, purple, teal, yellow scales), [`typography.js`](https://raw.githubusercontent.com/segmentio/evergreen/master/src/themes/default/tokens/typography.js), [`shadows.js`](https://raw.githubusercontent.com/segmentio/evergreen/master/src/themes/default/tokens/shadows.js), [`radii.js`](https://raw.githubusercontent.com/segmentio/evergreen/master/src/themes/default/tokens/radii.js) and [`fills.js`](https://raw.githubusercontent.com/segmentio/evergreen/master/src/themes/default/tokens/fills.js).
- **Fills.** Each intent maps a foreground to a background tint, for example neutral `gray800` on `gray200`, blue `blue600` on `blue100`, red `red700` on `red100`, green `green700` on `green100`.
- **Foundations.** The [Colors](https://evergreen.segment.com/foundations/colors) and [Typography](https://evergreen.segment.com/foundations/typography) pages document the scales and the `Heading`, `Text`, `Paragraph`, `Link`, `Strong`, `Small`, `Code`, `Pre` and list components; the typography page does not state line-height or weight values.
- **Primitive.** The homepage states that Evergreen components "are built on top of a React UI Primitive for endless composability."
- **Design resources.** The homepage links an "Evergreen Figma Library" and the "Segment Brand Hub" from its Resources band.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the single main action and for links; use `{colors.primary-hover}` on hover.
- Draw inputs and selects with a 1px `{colors.hairline}` border, `{rounded.xs}` and a 32px height.
- Use the fills pattern for status: dark ink on a pale tint of the same hue.
- Keep text in the navy ramp (`{colors.ink-strong}`, `{colors.ink}`, `{colors.ink-muted}`) rather than neutral grey or black.
- Tighten letter spacing on headings as listed in the token scale.
- Pair every elevated surface with the soft blue-grey shadow family, not a black shadow.

**Don't**
- Do not use pure black for text; the measured darkest text color is `{colors.ink-strong}`.
- Do not increase control height beyond the 32px default for dense tools without a documented size step.
- Do not add a second accent hue to chrome; additional hues are for status.
- Do not leave browser-default links (blue `#0000ee`, underlined) in the system, as the homepage "Star" link does.
- Do not round larger containers beyond `{rounded.sm}` 8px.

## Responsive Behavior

- **Headline.** The h1 measured at the 390px mobile viewport is 32px/40px — the same as desktop.
- **Breakpoints.** The documentation pages read for this document do not state breakpoint widths, and none are recorded here.
- **Touch targets.** Controls are 32px high; a larger size would be needed for comfortable touch, which the library documents per component.
- **Cards and thumbnails.** Mobile reflow of the card row and thumbnail tiles was not measured.

## Iteration Guide

1. Start with white surfaces and `{colors.page-largest}` bands; text in `{colors.ink}`.
2. Set type to `{typography.body}` for paragraphs and `{typography.control}` inside controls; use `{typography.display}` once.
3. Make the main action a `button-primary` (32px, `{rounded.xs}`).
4. Build inputs and selects with `{colors.hairline}` borders and the same 32px height.
5. Express status with badge fills (`{colors.danger-ink}` on `{colors.danger-tint}`, and so on).
6. Add depth only where needed, from the five elevation levels; otherwise rely on tint contrast.
7. Check contrast of `{colors.ink-muted}` on `{colors.page-largest}` before using it for anything smaller than 14px.
