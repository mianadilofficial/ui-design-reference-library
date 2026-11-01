---
version: alpha
name: Lightning Design System
category: "Design Systems"
description: Salesforce's Lightning Design System 2 (SLDS 2) and its default Cosmos theme — white and light-gray surfaces with a single electric-blue accent (#066afe), a system-font UI stack at a 13px base with 600-weight buttons, pill-radius buttons (240px), 8px inputs, 12px cards and 20px containers; the documentation site around it uses Inter and AvantGardeForSalesforce.
colors:
  canvas: "#ffffff"
  ink: "#444444"
  primary: "#066afe"
  on-primary: "#ffffff"
  accent-link: "#0250d9"
  on-surface-strong: "#2e2e2e"
  ink-secondary: "#5c5c5c"
  ink-placeholder: "#605f60"
  on-surface-title: "#03234d"
  brand-darkest: "#001642"
  surface-subtle: "#f3f3f3"
  hairline: "#e5e5e5"
  border-default: "#c9c9c9"
  border-strong: "#5c5c5c"
  error: "#e3066a"
  error-hover: "#b60554"
  success: "#0b827c"
  docs-accent: "#3a49da"
  docs-link-on-dark: "#a8cbff"
  nav-text: "#000000"
typography:
  display:
    fontFamily: AvantGardeForSalesforce
    fontSize: 56px
    fontWeight: 400
    lineHeight: 64px
  heading:
    fontFamily: AvantGardeForSalesforce
    fontSize: 32px
    fontWeight: 400
  subheading:
    fontFamily: AvantGardeForSalesforce
    fontSize: 24px
    fontWeight: 400
  body:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: "\"DM sans\", \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif"
    fontSize: 13px
    fontWeight: 400
  ui:
    fontFamily: "system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 1.5
  ui-button:
    fontFamily: "system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 13px
    fontWeight: 600
    lineHeight: 1.5
rounded:
  sm: 3px
  md: 4px
  input: 8px
  card: 12px
  lg: 16px
  xl: 20px
  pill: 240px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
  s8: 48px
components:
  button-brand:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.ui-button}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
  button-destructive:
    backgroundColor: "{colors.error}"
    textColor: "{colors.on-primary}"
    typography: "{typography.ui-button}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
  button-destructive-hover:
    backgroundColor: "{colors.error-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.ui-button}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
  button-success:
    backgroundColor: "{colors.success}"
    textColor: "{colors.on-primary}"
    typography: "{typography.ui-button}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
  button-neutral:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.accent-link}"
    typography: "{typography.ui-button}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
  link:
    textColor: "{colors.accent-link}"
    typography: "{typography.ui}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-placeholder}"
    typography: "{typography.input}"
    rounded: "{rounded.input}"
    padding: 1px 2px
    height: 22px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    rounded: "{rounded.card}"
  docs-callout:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.on-surface-title}"
    textColor: "{colors.canvas}"
---

## Overview

Lightning Design System is a component library, not a brand site: the product is the CSS custom-property layer ("styling hooks") that Salesforce's Lightning UI is built from. SLDS 2 is the second generation; its default theme is **Salesforce Cosmos**, and a second built-in theme, **Lightning Blue**, keeps the SLDS 1 look (Styling API page). This file therefore draws from two kinds of evidence, which are kept apart:

1. **The system itself**, read from Salesforce's published styling-hook package (`@salesforce-ux/sds-styling-hooks`, Cosmos theme files) and from the Typography, Color, Styling API and Visual Language pages on lightningdesignsystem.com. Colors for `primary`, `accent-link`, `error`, `success`, borders and surfaces, the radii, spacing and the 13px base type size come from here.
2. **The documentation site's own chrome**, measured in a browser: Inter body text at 16px, AvantGardeForSalesforce headings, a `#3a49da` docs accent, a `#03234d` footer. These describe how the docs look, not how SLDS components look; tokens such as `docs-accent` and `docs-callout` are marked that way.

The Color page states the intent: "Our color palette relies on white surfaces with intentional pops of bright color." The foundational colors are white and light grays, with dark grays and dark blue for text and interactive elements, and electric blue as the accent. The capture of the docs home shows the same restraint around a single saturated hero: a deep blue gradient panel with curved dark shapes holds the title, and everything below it is white.

**Key Characteristics:**
- One accent: `{colors.primary}` (`#066afe`, the Cosmos `--slds-g-color-accent-1`), paired with white text `{colors.on-primary}`.
- Pill-shaped buttons: the shared Cosmos hook sets button radius to `--slds-g-radius-border-pill`, 15rem, written here as `{rounded.pill}`.
- Semibold (600) button labels in a 13px system-font UI; the Typography page says semibold is for "Buttons and smaller body titles".
- System fonts, not a webfont: the typography page says the system uses the device's own font, and the SLDS 2 Figma library uses SF Pro.
- Light/dark by design: Cosmos colors are written as `light-dark(a, b)`; this file records the light values.
- Naming is semantic (`surface`, `on-surface`, `accent`, `container`, `feedback`), with numeric ranges.
- Brand hover motion on buttons: a 2px lift and a 2px bottom shadow (Cosmos shared hooks), not a color flash alone.

## Colors

> **Source pages:** docs home and the Button page (measured); Color, Typography, Styling API and Visual Language pages (text read); Cosmos theme CSS from npm (values).

### Accent (system)
- **Primary** (`{colors.primary}` — `#066afe`): Cosmos `--slds-g-color-accent-1` and `--slds-g-color-accent-container-1`, both `--slds-r-color-brand-50`. White text pair: `{colors.on-primary}` (`--slds-g-color-on-accent-1: #fff`).
- **Accent link** (`{colors.accent-link}` — `#0250d9`): Cosmos `--slds-g-color-accent-2` in light mode (`--slds-r-color-brand-40`). The Typography page says text links use `--slds-g-color-accent-2`. The shared button hook `--slds-s-button-color` also points at accent-2, so non-brand buttons carry this color as text.
- **Brand darkest** (`{colors.brand-darkest}` — `#001642`): `--slds-r-color-brand-10`. On the docs site, large headings measure the same value.

### Text on light surfaces
- **Ink** (`{colors.ink}` — `#444444`): Measured as the most-read text color on the docs (body copy, 1061 characters). It is the documentation's body color; the Cosmos hooks do not define this value.
- **On-surface strong** (`{colors.on-surface-strong}` — `#2e2e2e`): `--slds-g-color-on-surface-2`, "darker text" in the Typography page.
- **Ink secondary** (`{colors.ink-secondary}` — `#5c5c5c`): `--slds-g-color-on-surface-1`, "lightest text"; also `--slds-g-color-border-2`.
- **On-surface title** (`{colors.on-surface-title}` — `#03234d`): `--slds-g-color-on-surface-3`, "titles". It is also the docs footer fill and the docs nav text color.
- **Ink placeholder** (`{colors.ink-placeholder}` — `#605f60`): Measured color of the docs search input text.
- **Nav text** (`{colors.nav-text}` — `#000000`): Measured on the docs nav element.

### Surfaces and borders
- **Canvas** (`{colors.canvas}` — `#ffffff`): `--slds-g-color-surface-1` (light) and the docs page background.
- **Surface subtle** (`{colors.surface-subtle}` — `#f3f3f3`): `--slds-g-color-surface-2` (light). Docs callout blocks measure the same fill.
- **Hairline** (`{colors.hairline}` — `#e5e5e5`): Docs table, sidebar and content borders; also `--slds-g-color-surface-container-3` in Cosmos light.
- **Border default** (`{colors.border-default}` — `#c9c9c9`): `--slds-g-color-border-1`, "borders, strokes, or divider lines".
- **Border strong** (`{colors.border-strong}` — `#5c5c5c`): `--slds-g-color-border-2`; used by the neutral-button border hook.

### Feedback
- **Error** (`{colors.error}` — `#e3066a`): Destructive button background in Cosmos component hooks; hover `{colors.error-hover}` (`#b60554`) in light mode.
- **Success** (`{colors.success}` — `#0b827c`): Success button background; hover is a darker teal (`#056764`) in the same file, not tokenised here.
- The Color page names the feedback palettes as pink, yellow, teal and blue.

### Documentation-site chrome (measured, not component colors)
- **Docs accent** (`{colors.docs-accent}` — `#3a49da`): the docs site's action color (links, active tab underline, active nav border; the same value is defined as `--colors-styleguide-background-accent`, but the hero blue itself was not measured).
- **Docs link on dark** (`{colors.docs-link-on-dark}` — `#a8cbff`): footer link text.
- **Docs callouts** use pale fills such as `#def9f3` (do), `#fef1ed` (don't), `#fbf3e0` (caution), `#edf4ff` and `#fef0f3` in the site's own CSS variables; they are not tokenised.

### Dark mode
Cosmos values are `light-dark()` pairs (for example surface-1 `#fff` / `#242424`, on-surface-1 `#5c5c5c` / `#aeaeae`). A Color Modes page exists in the docs nav; its text was not read, so dark values are not tokenised here.

## Typography

### System UI (the library)
- **Family:** `--slds-g-font-family-base` is `system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, 'Helvetica Neue', Arial, sans-serif` plus emoji fallbacks; monospace is `Consolas, Menlo, Monaco, Courier, monospace`. The Typography page lists SF Pro (macOS, iOS), Segoe UI (Windows) and Roboto (Android) and states weights and sizes stay the same in any system font.
- **Base size:** `--slds-g-font-scale-base` is 0.8125rem, `{typography.ui}` at 13px; base line height 1.5.
- **Scale hooks:** `font-scale-neg-2` 0.625rem, `neg-1` 0.75rem, `1` 0.875rem, `2` 1rem, `3` 1.25rem, `4` 1.5rem, `5` 1.75rem, `6` 2rem, `7` 2.5rem, `8` 3rem. The Typography page says the font scale runs from `font-scale-2` to `font-scale-8`. Page-header titles use scale-5 and container headings scale-3 in the shared hooks.
- **Weights:** 300 for display text, 400 for titles and body, 600 for buttons and smaller body titles, 700 for emphasis "sparingly" (Typography page). `{typography.ui-button}` is the 600 form.
- **Line heights:** `font-line-height-1` 1, `2` 1.25, `3` 1.375, `4` 1.5, `5` 1.75, `6` 2.

### Documentation site (measured)
| Token | Font | Size | Line | Role |
|---|---|---|---|---|
| `{typography.display}` | AvantGardeForSalesforce | 56px | 64px | Hero h1, white on the blue panel |
| `{typography.heading}` | AvantGardeForSalesforce | 32px | normal | Section h2, color `#001642` |
| `{typography.subheading}` | AvantGardeForSalesforce | 24px | normal | Sub-sections |
| `{typography.body}` | Inter | 16px | 24px | Page copy |
| `{typography.input}` | Inter | 14px | 20px | Search field |
| `{typography.nav}` | DM Sans stack | 13px | normal | Nav element text |

The page loads DM Sans (variable), Inter (300, 400, 500, 700) and AvantGardeForSalesforce (400). The docs sidebar uses Inter (`--fonts-navigation`).

### Principles
- Prefer the hooks (`--slds-g-font-scale-*`, `--slds-g-font-weight-*`) over hard-coded sizes; the Typography page says hooks "automatically receive SLDS updates".
- Keep light weight to display text; never use it for essential small text ("Avoid using overly light or small text for essential content").
- Link text is `{colors.accent-link}`; feedback text uses the error / on-error hooks.

### Font substitutes
Nothing in the library needs substitution: the system stack falls back by platform. AvantGardeForSalesforce, used only on the docs site for headings, is not published in the pages opened; for the docs look any geometric sans at the same size will approximate it.

## Layout

- **Docs shell (capture):** a 241px left sidebar (measured nav width) with the logo, a pill search field, and a collapsible tree (Get Started, Icons, AI and SLDS 2, Visual Language, Styling API, Components, Patterns, Tools, SLDS 1 with an external-link arrow). The main column starts right of it; a top bar carries the uppercase title `LIGHTNING DESIGN SYSTEM 2`.
- **Hero:** a full-width blue-gradient panel, taller than a screen in the capture, with the 56px title, a version line (`Fall '26 v3.4.1`), an "updated 9 days ago" line and the tagline `Bring your brand to life.`
- **Content column:** headings, bullet lists and two-up illustration cards; each component page has tabs `Usage`, `Develop`, `Specifications`, `Accessibility` and a demo area above `Overview`, `Usage`, `Best Practices`, `When Not to Use`, `Types`.
- **Spacing scale (library):** `--slds-g-spacing-1` 0.25rem to `-12` 5rem; this file keeps 4, 8, 12, 16, 24, 32, 40, 48px (`{spacing.s1}` to `{spacing.s8}`). The Styling API page calls `spacing-4` the "Base spacing unit".
- **Sizing hooks:** `--slds-g-sizing-1` 0.125rem to `-9` 2rem in fine steps, then 3rem, 4rem, 5rem, 10rem, 15rem, 20rem, 30rem.
- **Density:** the typography page describes density-aware hooks that switch spacing and type between comfy and compact settings.
- **Measured docs paddings:** 8px (most common), 2px, 16px, 4px.

## Elevation & Depth

Cosmos defines six shadow levels as layered `light-dark()` values:
- `shadow-1`: `0 0 2px, 0 2px 2px, 0 -1px 2px` with 18% black in light mode.
- `shadow-2`: `0 0 5px, 0 3px 3px, 0 -1px 2px` at about 16%.
- `shadow-3`: `0 0 7px, 0 5px 5px, 0 -1px 2px` at about 14%.
- `shadow-4`: `0 0 10px, 0 7px 7px, 0 -1px 3px` at about 12%; shadows 5 and 6 alias shadow-4.
- `shadow-inverse-1`: `0 0 3px #f3f3f3`.

Popovers use shadow-4. Brand buttons gain `0 2px 0 0` of a darker brand tone on hover plus a `translateY(-2px)` lift; bordered buttons lift 1.5px with a 1.5px bottom shadow; active neutral buttons use inset shadows. Focus is a double ring: 2px of surface color then 4px of `brand-base-15` (`--slds-s-button-shadow-focus`).

On the docs themselves only two shadows were measured, `0 2px 4px 0` at 10% black in two colors; the docs are otherwise flat, with hairline `{colors.hairline}` borders.

## Shapes

- **Radius scale (Cosmos):** `radius-border-1` 4px (`{rounded.md}`), `-2` 8px (`{rounded.input}`), `-3` 12px (`{rounded.card}`), `-4` 20px (`{rounded.xl}`), `-pill` 15rem (`{rounded.pill}`), `-circle` 100%.
- **By component:** buttons pill; inputs 8px (`--slds-s-input-radius-border`); cards 12px (`--_slds-c-card-radius-border`); containers 20px (`--slds-s-container-radius-border`); avatars and icons circular; page headers 0.
- **Docs measured radii:** 3px (most common; callout blocks and demo frames), 4px, 16px, 20px. `{rounded.sm}` (3px) and `{rounded.lg}` (16px) are docs-only values.
- **Border sizing hooks:** `--slds-g-sizing-border-*`; the path item border is 1px (0.0625rem) and nav hover borders 3px.
- **In the capture** the two illustration cards in the "Pro-code control, no-code design" section have rounded corners (radius not measured) and use blue and coral gradient art with circles, lines and soft arches.

## Components

SLDS component pages listed in the docs nav include Accordion, Avatar, Badge, Breadcrumbs, Button, Button Groups, Button Icons, Cards, Carousel, Checkbox, Checkbox Button, Checkbox Toggle, Color Picker, Combobox, Data Table, Datepicker, Datetime Picker, Dynamic Icons, Dual Listbox, Empty State, File Selector, Form Element, Icons, Input, Map, Menu, Modals, Pills, Progress Indicator, Progress Bar, Progress Ring, Prompt, Radio Button Group, Radio Group, Rich Text Editor, Scoped Tabs, Select, Slider, Spinners, Tabs, Textarea, Tiles, Timepicker and Toast.

No live component rendered on the docs pages that were measured (the Button demo area showed a loading spinner in the capture; the Brand example is an image), so component values below come from the published hooks, not from measured DOM.

### Buttons
Types named on the Button page: brand, neutral, base, destructive, destructive text, success, inverse. Guidance on the page: use a link when navigating, a button when performing an action; avoid vague labels such as "Click Here" or "More"; do not overload a screen with buttons.
- **`button-brand`** — `{colors.primary}` fill, `{colors.on-primary}` label, `{typography.ui-button}`, `{rounded.pill}`, inline padding `{spacing.s4}` (16px; the vertical padding is not defined in the files read). The Cosmos files do not state which hook supplies the brand button's fill; the accent container color is used here as the published match for the "brand" accent. Hover: 2px lift and a 2px darker bottom edge.
- **`button-neutral`** — white fill, `{colors.accent-link}` text (`--slds-s-button-color`), border `{colors.border-strong}` (`--slds-s-button-color-border`), same pill. Hover text `{colors.on-surface-title}`. Active fill is surface-container-2.
- **`button-destructive`** / **`button-destructive-hover`** — `{colors.error}` to `{colors.error-hover}`, white label; hover adds a `0 2px 0 0 #61022a` edge.
- **`button-success`** — `{colors.success}`, white label; hover `#056764` with a `#023434` bottom edge.
- **Inverse** buttons use a `#2e2e2e` hover edge; they are not tokenised.

### Links
`link` — `{colors.accent-link}`, `{typography.ui}`.

### Inputs
`text-input` — `{rounded.input}`; label weight 600 at the base size; label spacing `{spacing.s2}`; helper text at 0.75rem. The docs search field measured Inter 14px / 20px, text `{colors.ink-placeholder}`, 22px high with 1px 2px padding (browser-default padding, so treat the height as docs-only).

### Cards and containers
`card` — radius `{rounded.card}`. Container headings use font-scale-3 at weight 400 and containers use `{rounded.xl}`.

### Navigation
Global navigation items: radius `radius-border-3`, 3px hover border, active color accent-2, weight 500. The utility bar uses 3px hover and active borders and weight 600. Docs sidebar: Inter, active row filled `#e0e5f8`, hover `#f3f3f3`, borders `{colors.hairline}`.

### Other hooks seen
Path items are 1.875rem high; data tables use radius `calc(border-4 * 2)`; popovers use shadow-4; brandband heights are 6rem, 12.5rem and 18.75rem.

### Documentation callouts
`docs-callout` — `{colors.surface-subtle}` fill, 3px radius, `{typography.nav}` text.

### Footer
`footer` — `{colors.on-surface-title}` fill, white text, `{colors.docs-link-on-dark}` links; entries Glossary, Accessibility, Terms of Service, Privacy, Responsible Disclosure, Trust, Your Privacy Choices, Salesforce Legal.

## Design System Architecture

- **Styling API (official):** global hooks `--slds-g-{category}-{property}-{variant}` are "design tokens encoded as CSS"; component hooks `--slds-c-{component}-{property-category}-{property-name}` reference them and are a **developer preview**. Component hooks follow "a three-layer architecture separating defaults, theme assignments, and overrides" (Styling API page).
- **Packages:** `@salesforce-ux/sds-styling-hooks` ships `defaults/` (theme-neutral), `themes/cosmos/` and `themes/slds/` as `*.custom-props.css` and `*.raw.json`, each split into `hooks`, `component.hooks`, `shared.hooks` and `deprecated.hooks`. Rules are wrapped in CSS cascade layers (`@layer component { :where(html) { ... } }`).
- **Layering by prefix:** `--slds-g-*` global, `--slds-s-*` shared (theme-level semantics such as `--slds-s-button-radius-border`), `--slds-c-*` public component, `--_slds-c-*` private component (the file header reserves the component scope for Salesforce's UX Foundations team), `--slds-r-*` raw palette values (`--slds-r-color-brand-50` and so on).
- **Themes:** swapping themes changes global values and components follow. Admins can recolor through Themes & Branding, which overrides hook values.
- **Palette ranges:** hooks end in a numeric range from 1 to 100; lowest is lightest or smallest.
- **Mutable vs constant:** semantic and system colors change per theme; palette colors "won't change, regardless of the theme selected".
- **Tooling named in the docs nav:** Styling Hook Index, Global Styling Hooks, Component-Level Styling Hooks, Utility Classes, Themes, Color Modes; under Tools and AI the site lists AI Tools and Vibe Coding and SLDS.
- **License:** the package license text says Salesforce grants a royalty-free copyright license to reproduce and distribute the software, with all rights otherwise reserved; read it before reusing.

Links: [Styling API](https://www.lightningdesignsystem.com/2e1ef8501/p/7708aa-styling-api), [Color](https://www.lightningdesignsystem.com/2e1ef8501/p/655b28-color), [Typography](https://www.lightningdesignsystem.com/2e1ef8501/p/93288f-typography), [Cosmos hooks](https://cdn.jsdelivr.net/npm/@salesforce-ux/sds-styling-hooks@2.0.0-beta.16/themes/cosmos/cosmos.hooks.custom-props.css).

## Do's and Don'ts

### Do
- Build on white `{colors.canvas}` surfaces and add one bright accent, `{colors.primary}`, for the action that matters.
- Use `{rounded.pill}` for buttons and `{rounded.input}` for inputs.
- Set button labels in `{typography.ui-button}` (600) and describe actions: "Save", "Submit".
- Use the hooks rather than hard-coded values so themes and updates apply.
- Check contrast; the Color page says SLDS colors meet or exceed WCAG 2.1 AA.
- Use semantic hooks for their purpose: border colors for borders, not container backgrounds.
- Use `{colors.accent-link}` for text links and feedback hooks for status.

### Don't
- Don't mix the documentation site's `{colors.docs-accent}` into component work; it is the docs chrome.
- Don't use weight 300 for essential small text.
- Don't use the private `--_slds-c-*` hooks; they are reserved.
- Don't put many buttons on one screen or use vague labels like "Click Here".
- Don't assume a brand-button hook name; the Cosmos files read did not expose one.
- Don't treat dark values as documented here; only light values are tokenised.

## Responsive Behavior

- The docs capture is a desktop layout with a fixed left sidebar; mobile behavior of the docs was not measured.
- Library breakpoints were not found in the hook files read. The Styling API and typography pages describe density (comfy and compact), which changes spacing and type size rather than layout.
- Density-aware hooks exist for font scale, line height and spacing (`--slds-g-spacing-var-*`, `--slds-g-font-scale-var-*`).
- Brandband heights step 6rem / 12.5rem / 18.75rem (small, medium, large).
- Buttons keep a constant 16px inline padding; the pill radius is large enough to stay fully round at any height.

## Iteration Guide

1. Choose the theme: Cosmos is the default; Lightning Blue keeps the SLDS 1 look.
2. Start from `{colors.canvas}` with text in `{colors.on-surface-strong}` and titles in `{colors.on-surface-title}`.
3. Add `{colors.primary}` only on the single main action; make secondary actions neutral buttons.
4. Round with the scale: pill for buttons, 8px inputs, 12px cards, 20px containers.
5. Type at 13px base, 600 on buttons; use scale-5 to scale-8 for large headings.
6. Add elevation with `shadow-1` to `shadow-4`; popovers use `shadow-4`.
7. Override with `--slds-g-*` first and `--slds-c-*` only when you need one component.
8. Validate: `node web/scripts/verify-designs.mjs --slug=lightning-design`.

### Open questions
- The brand button's fill and vertical padding were not found in the files read.
- Live component measurements were not possible on the docs pages (demos did not render).
- The Color Modes and Global Styling Hooks index pages were not read for dark values.
