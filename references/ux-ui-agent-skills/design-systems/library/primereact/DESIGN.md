---
version: alpha
name: PrimeReact
category: "Frontend Frameworks"
description: 'PrimeReact, the React component library whose v11 site is primereact.dev, as measured on its home page and Button and InputText docs: Inter on slate neutrals (#334155 text, #f8fafc page, #e2e8f0 borders), a near-black #020617 primary, 6px-radius 35px demo buttons and inputs, pill-shaped hero buttons, and -3px tracking on the 60px headline.'

colors:
  canvas: "#ffffff"
  page-body: "#f8fafc"
  ink: "#334155"
  ink-strong: "#0f172a"
  ink-secondary: "#475569"
  ink-muted: "#64748b"
  ink-faint: "#94a3b8"
  code-ink: "#24292e"
  primary: "#020617"
  on-primary: "#ffffff"
  primary-hover: "#1e293b"
  surface-dark: "#050a1c"
  surface-subtle: "#f1f5f9"
  hairline: "#e2e8f0"
  text-input-border: "#cbd5e1"
  severity-success: "#22c55e"
  severity-info: "#0ea5e9"
  severity-warn: "#f97316"
  severity-help: "#a855f7"
  severity-danger: "#ef4444"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-3px"
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-1.8px"
  heading:
    fontFamily: Inter, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-1.2px"
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
  button-demo:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Inter, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
  input:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 28px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-outline-pill:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    borderColor: "{colors.hairline}"
  button-demo:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-demo}"
    rounded: "{rounded.sm}"
    padding: 6px 10px
    height: 35px
    borderColor: "{colors.primary}"
  button-compact:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 4px 12px
    height: 36px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 6px 10px
    height: 35px
    borderColor: "{colors.text-input-border}"
    boxShadow: rgba(18, 18, 23, 0.05) 0px 1px 2px 0px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 16px 20px
    borderColor: "{colors.hairline}"
---

## Overview

PrimeReact is a React UI component library. Its home page (`https://primereact.org`, which redirects to `https://primereact.dev/`, titled "PrimeReact - React UI Component Library") is the marketing surface for version 11.2.0 (shown on the page as `primereact@11.2.0`), and its documentation shows the library's own components. This file describes the system from three measured pages: the home page at 1280px and 390px, `https://primereact.dev/docs/styled/components/button` and `https://primereact.dev/docs/styled/components/inputtext`. The docs pages render real PrimeReact components directly in the page (not in iframes), so button and input values are measured from the components themselves.

The capture of the home page shows, from top to bottom: a thin black announcement bar ("PrimeUI PRO for React is now available" with a rocket and a "View Demos" link); a white header with a PRIMEREACT wordmark, four centered links (Styled, Tailwind, Primitive, Headless), five small icon buttons and a dark "Get PrimeUI" button; a pill showing `primereact@11.2.0`; a centered headline "Premium UI Suite for React" in which the word "Suite" is outlined and tagged with a small `.p-title` label (a class-name callout); a grey subtitle; two pill buttons, a dark "Get Started" and a white "View Components"; a row of four grey customer logos; a large rounded dashboard mockup titled "Portfolio command" (sidebar, KPI cards, a stacked bar chart, a table and a "Wallet mix" card, built from the library's own look); and a "QUICK START / So simple to use" section with a short paragraph, a dark `$ npm install primereact` chip and a code panel. The page background is a very pale slate (`{colors.page-body}`), with white cards.

**Key Characteristics**
- A slate neutral scale (`#f8fafc`, `#f1f5f9`, `#e2e8f0`, `#cbd5e1`, `#94a3b8`, `#64748b`, `#475569`, `#334155`, `#0f172a`, `#020617`) and no saturated brand hue in the chrome: the primary action color is near-black `{colors.primary}` (`#020617`).
- Inter in regular weight at very large sizes with strongly negative tracking (60px at -3px, 48px at -1.2px).
- Monospace (Geist Mono) for code, class-name callouts and small uppercase labels.
- Two button languages: pill buttons on the marketing page (48px tall) and 6px-radius buttons in components (35px tall).
- Severity colors (success, info, warn, help, danger) appear in component variants.
- A "keycap" look on dark buttons: a 3px hard bottom shadow plus a hairline highlight.

## Colors

### Core palette (measured)
- **Primary** (`{colors.primary}`, `#020617`) with **on primary** (`{colors.on-primary}`, `#ffffff`): fill of "Get Started", "Get PrimeUI", "Download", and of every default docs button ("Accept", "Submit", "Save"). The library's own variable `--p-button-primary-border-color` is `#020617` and `--p-button-primary-color` is `#ffffff`.
- **Primary hover** (`{colors.primary-hover}`, `#1e293b`): the measured hover background of "Get Started"; `--p-button-primary-active-background` is `#334155`.
- **Ink** (`{colors.ink}`, `#334155`): the docs text color (`--p-text-color` and `--p-content-color` are `light-dark(#334155, #ffffff)`), used for body text, nav links and input text.
- **Ink strong** (`{colors.ink-strong}`, `#0f172a`): headings (the home h1 and the docs h1 and h2).
- **Ink secondary** (`{colors.ink-secondary}`, `#475569`): the "View Components" button text and secondary copy.
- **Ink muted** (`{colors.ink-muted}`, `#64748b`): the most-read text color on the home page (1128 characters), used for subtitles and descriptions.
- **Ink faint** (`{colors.ink-faint}`, `#94a3b8`).
- **Code ink** (`{colors.code-ink}`, `#24292e`): code panel text; the syntax colors seen in code blocks (`#032f62`, `#6f42c1`, `#005cc5`, `#d73a49`, `#e1e4e8`) are not promoted to tokens.

### Surfaces and borders
- **Canvas** (`{colors.canvas}`, `#ffffff`), **page body** (`{colors.page-body}`, `#f8fafc`; the largest area on the home page, weight 5204), **surface subtle** (`{colors.surface-subtle}`, `#f1f5f9`; segmented-control background, the docs preview frame), **hairline** (`{colors.hairline}`, `#e2e8f0`; the most common border, 21 elements on the home page) and **text input border** (`{colors.text-input-border}`, `#cbd5e1`).
- **Surface dark** (`{colors.surface-dark}`, `#050a1c`): the second-largest background on the home page by DOM area (weight 2298). Where it is visible in the capture was not determined; the dark elements the capture does show are the buttons and the quick-start command chip. Related dark values measured: `#0f172a`, `#070d1f`, `#1e293b`, `#26334acc`.
- The library variables define `--p-surface-100` `#f1f5f9`, `--p-surface-200` `#e2e8f0`, `--p-surface-600` `#475569`, `--p-surface-800` `#1e293b` and `--p-primary-300` `#cbd5e1`: the primary scale in this theme is the same slate ramp as the surface scale.

### Severity colors (docs Button page)
Measured as button border and fill colors in the Severity examples: success `{colors.severity-success}` (`#22c55e`), info `{colors.severity-info}` (`#0ea5e9`), warn `{colors.severity-warn}` (`#f97316`), help `{colors.severity-help}` (`#a855f7`) and danger `{colors.severity-danger}` (`#ef4444`). Light-dark pairs for these are defined in the variables (for example `--p-button-danger-border-color: light-dark(#ef4444, #f87171)` and `--p-button-danger-color: light-dark(#ffffff, #450a0a)`).

### Dark mode
The variables use the CSS `light-dark()` function throughout (`--p-text-color: light-dark(#334155, #ffffff)`, `--p-overlay-popover-border-color: light-dark(#e2e8f0, #334155)`), so a dark palette ships with the theme. The docs say dark mode is built in. The measured pages are in the light scheme.

## Typography

### Font family
**Inter** (`Inter, sans-serif`) carries 2384 characters and **Geist Mono** 1394; the page's CSS also names `InterDisplay`, `InterVariable`, `primeicons` (an icon font) and a `--doc-mono-font` variable.

### Font substitutes
Inter is open source. The computed stack ends in `sans-serif`. No substitute is declared in the data for Geist Mono.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Where measured |
|---|---|---|---|---|---|
| `{typography.display}` | 60px | 400 | 60px | -3px | home h1 |
| `{typography.display-mobile}` | 36px | 400 | 40px | -1.8px | home h1 at 390px |
| `{typography.heading}` | 48px | 400 | 48px | -1.2px | "So simple to use" |
| `{typography.subheading}` | 16px | 600 | 24px | normal | card and section titles |
| `{typography.body}` | 18px | 400 | 28px | normal | hero subtitle |
| `{typography.button}` | 18px | 500 | 28px | normal | hero pill buttons |
| `{typography.button-demo}` | 14px | 500 | 21px | normal | docs buttons |
| `{typography.button-secondary}` | 12px | 500 | 18px | normal | compact "Download" button |
| `{typography.nav}` | 16px | 400 | 24px | normal | header links |
| `{typography.input}` | 14px | 400 | 21px | normal | inputs |

Docs pages: h1 "Button" 30px/400 (36px line height), h2 "Usage" 20px/500 (28px), body 16px/400 (24px). Other tracking measured: 24px at -0.6px, and 14px at 0.35px and 12px at 0.3px (uppercase mono labels such as QUICK START and PREVIEW). Weights in the tally: 400 (3034 chars), 500 (362), 600 (285), 700 (86), 650 (11).

### Principles seen on the page
- Display text is regular weight, not bold; the weight stays 400 even at 60px and the tracking does the work.
- Small labels are uppercase monospace with positive tracking.
- Body copy is slate-grey and generous (28px line height at 18px).

## Layout

- **Header**: links centered, utilities right; height read off the capture at roughly 64px (not a CSS value).
- **Hero**: centered stack (version pill, headline, subtitle, buttons); buttons side by side with a 12px gap (a gap of 12px has 22 uses).
- **Dashboard mockup**: a single rounded container (16px radius) at nearly the full content width, with a 64px icon sidebar, a content column with four KPI cards in a row, a full-width chart card and a two-column row (table and wallet mix).
- **Docs shell**: left navigation rail (Guides, Components, Add-Ons, Resources, then a "FORM" group listing AutoComplete, Checkbox, CheckboxGroup, DatePicker, and so on, with a "ROADMAP" tag beside "PDF Viewer"), a main column of about 440px in the capture with each example in a framed "PREVIEW" box, and a right rail of "RESOURCES" and "ON THIS PAGE".
- **Spacing**: measured gaps 8px (78 uses), 4px (40), 12px (22), 6px, 16px, 64px, 40px, 24px, 14px; paddings 2px, 14px, 8px, 4px, 16px, 6px, 20px, 10px, 12px.
- **Page length**: 7014px (home), 11135px (Button docs).

## Elevation & Depth

Measured shadows:
- Dark buttons: `0 3px 0 0 rgba(0,0,0,0.5), inset 0 1px 0 0 rgba(255,255,255,0.05)` (40 elements on the home page): the keycap bottom edge.
- Inputs: `0 1px 2px 0 rgba(18,18,23,0.05)`.
- Docs preview frames: a half-pixel ring `0 0 0 0.5px rgba(0,0,0,0.2)` (44 elements).
- Cards: `0 1px 2px rgba(0,0,0,0.02), 0 1px 2px rgba(0,0,0,0.04)`.
- Library variables: `--p-overlay-popover-shadow` begins `0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1)` and `--p-overlay-modal-shadow` begins `0 20px 25px -5px rgba(0,0,0,0.1), 0 8px 10px -6px ...`.

| Level | Treatment | Use |
|---|---|---|
| 0 | hairline border | cards, previews |
| 1 | `0 1px 2px rgba(18,18,23,.05)` | inputs |
| 2 | `0 3px 0 rgba(0,0,0,.5)` + inset highlight | dark buttons |
| 3 | popover and modal shadows | overlays (variables only; not shown in the capture) |

## Shapes

Measured radii on the home page: 6px (77 elements), 8px (32), fully round (19), 50% (18), 12px (10), 16px (8), 4px (8), and joined-edge radii `6px 0 0 6px` and `0 6px 6px 0` (the Weekly/Monthly/Yearly segmented control). On the Button page: 6px (148), 8px (136), 50% (35), 4px (18), 14px (15), 32px (8), 10px (4).

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | small chips |
| `{rounded.sm}` | 6px | inputs and docs buttons (`--p-inputtext-border-radius` is 6px) |
| `{rounded.md}` | 8px | compact buttons, cards |
| `{rounded.lg}` | 12px | panels |
| `{rounded.xl}` | 16px | the dashboard container and cards |
| `{rounded.2xl}` | 24px | large containers |
| `{rounded.pill}` | 9999px | hero buttons, version pill |

The theme variables define `--p-border-radius-sm` 4px, `--p-border-radius-md` 6px and `--p-border-radius-lg` 8px.

## Components

### Buttons
- **`button-primary`** (hero): fill `{colors.primary}`, white 18px/500, pill radius, `0px 28px` padding, 48px tall; hover `{colors.primary-hover}`.
- **`button-outline-pill`**: "View Components", white fill, `{colors.ink-secondary}` text, 1px `{colors.hairline}` border, pill radius, `0px 20px` padding, with a 1px 2px light shadow.
- **`button-demo`** (docs): fill `{colors.primary}`, white 14px/500, radius `{rounded.sm}` (6px), `6px 10px` padding, 35px tall, 1px border in the same color. The Button page also shows the "Reject" button as a white button with a hairline border.
- **`button-compact`**: "Download" and "Get PrimeUI": `4px 12px` padding, 36px tall, radius `{rounded.md}`, 12px/500 on the home page.
- Docs list props for the component: `severity` (primary, secondary, success, info, warn, help, danger, contrast), `variant` (text, outlined, solid), `size` (small, large), `rounded`, `raised`, `iconOnly`, `loading` and `disabled`. Theme variables name sizes: `--p-button-sm-font-size` 0.75rem, `--p-button-lg-font-size` 1rem, `--p-button-padding-y` 0.375rem, `--p-button-lg-padding-x` 0.75rem.
- Focus: `--p-focus-ring-width` 1px, `--p-focus-ring-offset` 2px and `--p-focus-ring-color` `#020617`.

### Inputs
- **`text-input`** (InputText docs page): fill `{colors.canvas}`, text `{colors.ink}`, 14px/400, radius 6px, `6px 10px` padding, 35px tall, 1px `{colors.text-input-border}`, shadow `0 1px 2px rgba(18,18,23,0.05)`. `--p-form-field-padding-x` is 0.625rem (10px). The home page's search field in the dashboard mockup has left padding for an icon (`6px 10px 6px 34px`).

### Cards
- **`card`**: white fill, 16px radius, 1px `{colors.hairline}` border, `16px 20px` padding. In the dashboard capture the KPI cards are small with a label, a value, an icon chip at the right and a small green or blue badge ("+12.4%", "Live").

### Navigation and misc
- **`nav-link`**: 16px/400 `{colors.ink}`. Header icon buttons are small and square. A segmented control ("Weekly / Monthly / Yearly") sits on `{colors.surface-subtle}` with a white selected segment.
- Tags and badges in the mockup are small rounded rectangles with a pale tinted fill and a darker text of the same hue (green "Buy" and "+12.4%", blue "Live", red "Sell").

## Design System Architecture

PrimeReact documents its system publicly. What was opened:
- **Home** https://primereact.dev/: offers four layers named Styled, Tailwind, Primitive and Headless; describes a "multi-layered design token" architecture; shows token overrides such as `primary: #6366f1`, `radius: 0.5rem` and `padding: 1.25rem`; states 130+ components and `npm install primereact`.
- **Styled introduction** https://primereact.dev/docs/styled/guides/introduction: Styled is "Pre-themed React components built on top of the headless layer", pre-styled with a token-based theme, customizable through design tokens or pass-through props, with dark mode and theming built in.
- **Styled theming** https://primereact.dev/docs/styled/guides/theming/styled: built-in presets Aura, Material, Lara and Nora; three token tiers (primitive such as `blue-50` to `blue-900`, semantic, and component such as `inputtext.background` or `button.color`); the CSS variable prefix defaults to `p`, so `primary.color` becomes `var(--p-primary-color)`; the dark mode selector defaults to the system preference or can be a class like `.my-app-dark`.
- **Tailwind** https://primereact.dev/docs/styled/guides/theming/tailwind: the `tailwindcss-primeui` plugin adds `primary-[50-950]`, `surface-[0-950]`, `bg-emphasis`, `text-muted-color`, `rounded-border` and animation classes; its CSS version supports Tailwind v4 while the JavaScript version targets v3.
- **Components** https://primereact.dev/components: 10 categories (Form, Button, Data, Panel, Overlay, File, Menu, Messages, Media, Misc) at `/docs/styled/components/<name>`.
- **Repositories**: https://github.com/primefaces/primereact (MIT; the page says the repository is in maintenance mode with security fixes only, with development moved to PrimeUI) and https://github.com/primefaces/primeuix (a shared theming package used by the Prime libraries, MIT, archived with development moved to PrimeUI).

The page's own variables confirm the structure: of 400 root variables captured, 300 start with `--p-` (for example `--p-button-primary-border-color`, `--p-inputtext-border-radius`, `--p-overlay-popover-shadow`, `--p-focus-ring-width`) and 60 with `--color-` (Tailwind palette entries such as `--color-blue-700`). The `--p-` set covers primitive palettes (`--p-violet-700`, `--p-teal-700`), semantic values (`--p-text-color`, `--p-primary-300`) and per-component values.

Which of the four presets this site uses was not stated on the pages opened; the measured values (slate ramp, `#020617` primary, 6px radius) are reported as measured without naming a preset.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the main action: pill at 48px on marketing surfaces, 6px-radius at 35px inside product UI.
- Keep surfaces on the slate ramp: `{colors.page-body}`, white cards and `{colors.hairline}` borders.
- Set large headings at regular weight with strong negative tracking.
- Use `light-dark()` variable pairs for anything that must switch schemes.
- Use severity colors only for the matching severity variants.

**Don't**
- Do not bold the display headline; the measured weight is 400.
- Do not mix the pill and 6px button shapes in one group.
- Do not add colored brand fills to chrome; the measured chrome is neutral.
- Do not assume a Tailwind v4 pairing for the JavaScript plugin; the docs say the JS version targets v3.

## Responsive Behavior

Two viewports were measured. At 390px the home h1 reads "Premium UI .p-title Suite for React" in the extracted text (the callout label is part of the DOM text) at 36px/400 with 40px line height and -1.8px tracking (`{typography.display-mobile}`), colored `#0f172a`. Column behavior of the dashboard and docs rails at narrow widths was not captured and is not described.

## Iteration Guide

1. Start from `{colors.page-body}` with white cards and 1px `{colors.hairline}` borders.
2. Headline: Inter 400 at 60px, `-3px` tracking, `{colors.ink-strong}`.
3. Primary action: `{colors.primary}` fill, white text; pill (48px) on marketing, 6px radius (35px) in components.
4. Inputs: 6px radius, `6px 10px` padding, 1px `{colors.text-input-border}`.
5. Theme through the `--p-*` variables and `light-dark()` pairs.
6. For any value not in the frontmatter, measure a docs component page first (`node web/scripts/extract-tokens.mjs --slug=primereact--<component> --url=https://primereact.dev/docs/styled/components/<component> --force`).
