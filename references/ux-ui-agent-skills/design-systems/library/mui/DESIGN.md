---
version: alpha
name: Material UI
category: "Frontend Frameworks"
description: "Material UI (MUI): website accent #0073e6 on white, General Sans 600 headings at 56px, IBM Plex Sans body, 10px site buttons, plus the library default theme measured on docs demos: #1976d2 contained buttons with 4px radius, Roboto 14px uppercase labels, 56px text fields."
colors:
  canvas: "#ffffff"
  ink: "#303741"
  primary: "#0073e6"
  on-primary: "#ffffff"
  ink-strong: "#0f1214"
  surface-code: "#090b0b"
  neutral-200: "#dfe2e7"
  ink-body: "#1a1e23"
  primary-deep: "#006bd6"
  primary-hover: "#0061c2"
  nav-bg: "#ffffffcc"
  text-input-text: "#000000de"
  theme-primary: "#1976d2"
  theme-primary-dark: "#1565c0"
  theme-error: "#d32f2f"
typography:
  display:
    fontFamily: "\"General Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 56px
    fontWeight: 600
    lineHeight: 62.4px
    letterSpacing: "-0.2px"
  display-mobile:
    fontFamily: "\"General Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 40px
    fontWeight: 600
    lineHeight: 44.5714px
    letterSpacing: "-0.2px"
  heading:
    fontFamily: "\"General Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 33.7149px
    fontWeight: 600
    lineHeight: 41.2071px
    letterSpacing: "-0.2px"
  subheading:
    fontFamily: "\"IBM Plex Sans\", -apple-system, \"system-ui\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: "\"IBM Plex Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"IBM Plex Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 15px
    fontWeight: 500
    lineHeight: 18.75px
  nav:
    fontFamily: "\"IBM Plex Sans\", \"IBM Plex Sans Fallback\""
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  link:
    fontFamily: "\"IBM Plex Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 13px
    fontWeight: 600
    lineHeight: 19.5px
  button-secondary:
    fontFamily: "\"IBM Plex Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 13px
    fontWeight: 500
    lineHeight: 22.75px
  input:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23px
    letterSpacing: 0.15008px
  button-docs:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24.5px
    letterSpacing: 0.39998px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 7px
  xl: 10px
  2xl: 12px
  3xl: 16px
  4xl: 18px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 6.4px
  s7: 7px
  s8: 8px
  s9: 10px
  s10: 11px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 8px 10px 10px 12px
    height: 40px
    borderColor: "{colors.primary-deep}"
    boxShadow: rgba(51, 153, 255, 0.5) 0px 1px 0px 0px inset, rgba(0, 77, 153, 0.4) 0px -1px 0px 1px inset, rgba(9, 11, 11, 0.1) 0px 2px 4px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    padding: 6px 10px
    height: 37px
    borderColor: "{colors.primary-deep}"
    boxShadow: rgba(51, 153, 255, 0.5) 0px 1px 0px 0px inset, rgba(0, 77, 153, 0.4) 0px -1px 0px 1px inset, rgba(9, 11, 11, 0.1) 0px 2px 4px 0px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-body}"
  nav-link:
    textColor: "{colors.primary-deep}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 16.5px 14px
    height: 56px
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.2xl}"
    padding: 24px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 4px 8px 0px, rgba(0, 0, 0, 0.04) 0px 2px 4px 0px
  footer:
    textColor: "{colors.ink-body}"
    padding: 0px 24px
  button-contained:
    backgroundColor: "{colors.theme-primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-docs}"
    rounded: "{rounded.sm}"
    padding: 6px 16px
    height: 37px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 3px 1px -2px, rgba(0, 0, 0, 0.14) 0px 2px 2px 0px, rgba(0, 0, 0, 0.12) 0px 1px 5px 0px
  button-outlined:
    textColor: "{colors.theme-primary}"
    typography: "{typography.button-docs}"
    rounded: "{rounded.sm}"
    padding: 5px 15px
    height: 37px
---

## Overview

Material UI (MUI) is a React component library, so this file describes two things that look different on purpose: the **docs/marketing site** (mui.com, captured at 1280px, page height measured on the homepage) and the **default component theme** that the library's demo pages render (measured on the Button and Text Field docs pages and cross-checked against the library's source on GitHub).

The marketing site is white (`{colors.canvas}`) with a blue accent (`{colors.primary}`, `#0073e6`), headlines in General Sans weight 600 at 56px with -0.2px tracking, and body copy in IBM Plex Sans. The hero headline is "Move faster with intuitive React UI tools", with the second line coloured in the blue accent. To the right of the hero a composed product preview shows real components: a blue gradient task card, a calendar, a segmented toggle (Joy UI, Material UI, MUI Base), a range slider, tag chips, and a cookie-preferences dialog with a filled "Allow analytics" button and a text-style "Essential only" button.

The demo components use the library's own default theme: a contained button filled `{colors.theme-primary}` (`#1976d2`) with white uppercase Roboto 14px/500 labels, 4px radius and a layered Material elevation shadow. That differs from the site's own accent (`#0073e6`), so keep the two tracks apart.

**Key Characteristics:**
- Website accent `{colors.primary}` (`#0073e6`), hover `{colors.primary-hover}` (`#0061c2`), with a 10px-radius button carrying an inset highlight and a drop shadow.
- Component-library accent `{colors.theme-primary}` (`#1976d2`), the value measured on docs demos; the same hex comes from the `blue` colour file in the repository (key 700).
- Three type families on the site: General Sans (headings), IBM Plex Sans (body, UI), Menlo (code); Roboto in the component demos.
- Dark code panel (`{colors.surface-code}`, `#090b0b`) embedded in the light page as a product-showing block.
- Soft cool-blue gradient bands behind the product sections; cards with 12px radius and a pale border.
- Hero artwork is live UI, not illustration; a row of customer logos (Spotify, Amazon, NASA, Netflix, Unity, Shutterstock) follows the hero.

## Colors

> **Source pages:** `/` (measured), `/material-ui/react-button/` and `/material-ui/react-text-field/` (measured as extra pages), and the library files `colors/blue.ts`, `colors/red.ts` and `styles/createPalette.js` in github.com/mui/material-ui (opened).

### Brand & Accent (website)
- **Accent Blue** (`{colors.primary}` - `#0073e6`): fill of the hero "Discover the Core libraries" button and the highlighted words in headings.
- **Accent Blue Deep** (`{colors.primary-deep}` - `#006bd6`): button border, nav-link colour and the start of the blue announcement-card gradient (the gradient runs to `{colors.primary-hover}`, `#0061c2`).
- **Accent Blue Hover** (`{colors.primary-hover}` - `#0061c2`): hover state of the primary button.

### Component library defaults (docs demos)
- **Theme Primary** (`{colors.theme-primary}` - `#1976d2`): contained button fill and outlined button text colour. `createPalette.js` assigns `primary.main` to `blue[700]`; `blue.ts` lists 700 as `#1976d2`.
- **Theme Primary Dark** (`{colors.theme-primary-dark}` - `#1565c0`): `blue[800]`, the default `primary.dark`; also the value of `--mui-palette-primary-dark` on the docs page.
- **Theme Error** (`{colors.theme-error}` - `#d32f2f`): `error.main` is `red[700]`; `red.ts` lists 700 as `#d32f2f`; the docs page root exposes `--mui-palette-error-main` with the same value.
- Other default roles from `createPalette.js`: secondary `purple[500]`, warning main `#ed6c02`, info `lightBlue[700]`, success `green[800]`, text primary `rgba(0, 0, 0, 0.87)`, secondary text `rgba(0, 0, 0, 0.6)`, divider `rgba(0, 0, 0, 0.12)`. This file declares only the ones it also measured.

### Surface
- **Canvas** (`{colors.canvas}` - `#ffffff`): page and paper background (`--mui-palette-background-default` and `-paper` are `#fff` on the docs page).
- **Nav** (`{colors.nav-bg}` - `#ffffffcc`): translucent white header.
- **Code Surface** (`{colors.surface-code}` - `#090b0b`): dark code panel on the homepage.

### Text
- **Ink Strong** (`{colors.ink-strong}` - `#0f1214`): the h1 colour.
- **Ink** (`{colors.ink}` - `#303741`): the most-read text colour on the homepage.
- **Ink Body** (`{colors.ink-body}` - `#1a1e23`): body element colour.
- **Neutral 200** (`{colors.neutral-200}` - `#dfe2e7`): measured as the text colour of a testimonial paragraph on the dark panel and as the most frequent border colour in the extraction.
- **Input Text** (`{colors.text-input-text}` - `#000000de`): text-field value colour measured on the Text Field docs page.

## Typography

### Font Family
Loaded fonts on the site: Roboto 400 and 500, General Sans 600, IBM Plex Sans 400/500/600/700. By character count, IBM Plex Sans carries 5316, Menlo 509, General Sans 262, Roboto 95. The docs root also defines `--h1-font-family` etc. as "Inter", but the measured computed family on headings is General Sans; this file follows the computed values.

For components, `createTypography.js` (opened) defaults to `"Roboto", "Helvetica", "Arial", sans-serif`, a base font size of 14px, `htmlFontSize` 16px, weights 300/400/500/700, and defines variants from h1 (weight 300, 6rem, line-height 1.167) through button (weight 500, 0.875rem, line-height 1.75, letter-spacing 0.025em).

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 56px | 600 | 62.4px | -0.2px | Hero h1 (General Sans) |
| `{typography.display-mobile}` | 40px | 600 | 44.5714px | -0.2px | Hero h1 at the mobile viewport |
| `{typography.heading}` | 33.7149px | 600 | 41.2071px | -0.2px | Section h2 |
| `{typography.subheading}` | 16px | 400 | 24px | normal | h3 / card titles |
| `{typography.body}` | 15px | 400 | 24px | normal | Paragraphs |
| `{typography.button}` | 15px | 500 | 18.75px | normal | Site buttons |
| `{typography.button-docs}` | 14px | 500 | 24.5px | 0.39998px | Library contained/outlined button, uppercase |
| `{typography.button-secondary}` | 13px | 500 | 22.75px | normal | Cookie dialog button |
| `{typography.nav}` | 16px | 600 | 24px | normal | Nav links |
| `{typography.link}` | 13px | 600 | 19.5px | normal | Announcement link |
| `{typography.input}` | 16px | 400 | 23px | 0.15008px | Text field value |

Sizes most used by character count on the homepage: 14px, 15px, 12px, 16px, 13px.

### Note on Font Substitutes
General Sans and IBM Plex Sans are loaded by the site. If unavailable, the declared fallback stack is `-apple-system, system-ui, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif`. IBM Plex Sans is available as an open-source family; General Sans substitutes are not specified by MUI.

## Layout

- Header measured 57px tall on the Button docs page with 12px padding; on the homepage it holds the logo, Products, Docs, Pricing, About us, Blog, a search field with a keyboard hint, and icon buttons for GitHub and theme.
- Product section: left column with a small blue eyebrow ("Products"), a two-line h2, a sentence and four selectable rows (Material UI, MUI X, Templates, Design kits); right column with a demo card above a dark code block.
- "Why build with MUI?" section: four cards in one row (Timeless aesthetics, Intuitive customization, Unrivaled documentation, Dedicated to accessibility).
- The library's spacing unit is 8px (`--mui-spacing` is `8px` on the docs page); the site also defines `--spacing` as `.25rem`.

### Spacing System
Declared spacing tokens are values measured on the homepage: 1px, 3px, 4px, 5px, 6px, 6.4px, 7px, 8px, 10px, 11px.

## Elevation & Depth

- Library button elevation (measured on the contained button): `rgba(0,0,0,0.2) 0 3px 1px -2px, rgba(0,0,0,0.14) 0 2px 2px 0, rgba(0,0,0,0.12) 0 1px 5px 0`.
- Site primary button: inset top highlight `rgba(51,153,255,0.5) 0 1px 0`, inset bottom edge `rgba(0,77,153,0.4) 0 -1px 0 1px` and a soft drop `rgba(9,11,11,0.1) 0 2px 4px`.
- Site cards: `rgba(0,0,0,0.1) 0 4px 8px` plus `rgba(0,0,0,0.04) 0 2px 4px`; neutral controls use a white inset top highlight with a 1px pale lower edge.
- The docs root exposes Material elevation variables such as `--mui-shadows-15`.

## Shapes

- Library default: the docs page exposes `--mui-shape-borderRadius: 4px` and the [shape documentation](https://mui.com/material-ui/customization/shape/) states a default of 4px. The contained and outlined demo buttons measure 4px.
- Site buttons: `{rounded.xl}` 10px. Cards: `{rounded.2xl}` 12px (the most frequent radius on the homepage, with 18px second). Pills and chips use large values (`{rounded.pill}`, plus 999px and 1188px measured).
- Other measured radii: 2px, 6px, 7px, 16px, 50% for avatars.

## Components

### Buttons
- **button-primary** (site): `{colors.primary}` fill, `{colors.canvas}` text, `{typography.button}`, `{rounded.xl}`, padding 8px 10px 10px 12px, height 40px, border `{colors.primary-deep}`, inset-highlight shadow; hover `{colors.primary-hover}`.
- **button-secondary** (cookie dialog): same blue fill, 13px/500, 37px tall, padding 6px 10px.
- **button-contained** (library demo): `{colors.theme-primary}` fill, white label, uppercase, 4px radius, padding 6px 16px, height 37px, elevation shadow. A large variant measured 42px tall with padding 8px 22px at 15px.
- **button-outlined** (library demo): text `{colors.theme-primary}`, 1px border in the same blue at 50% alpha, 5px 15px padding.
- The docs page also demonstrates a "Bootstrap"-style custom button (fill `#0063cc`) to show theming; it is a customization example, not a token.

### Inputs
**text-input**: Roboto 16px, text `{colors.text-input-text}`, padding 16.5px 14px, height 56px (identical on the homepage and the Text Field docs page).

### Cards
**card**: 12px radius, 24px padding, two-layer soft shadow; feature cards have a pale border and a faint blue tint.

### Navigation and footer
**nav**: translucent white; **nav-link**: `{colors.primary-deep}` 16px/600. **footer**: `{colors.ink-body}` text, 24px horizontal padding, newsletter signup ("Keep up to date").

## Design System Architecture

- MUI's [theming docs](https://mui.com/material-ui/customization/theming/) describe the mechanism: `createTheme()` produces a theme object (palette, typography, spacing, breakpoints, z-index, transitions, component overrides), `ThemeProvider` passes it down, and `cssVariables: true` emits variables such as `--mui-palette-primary-main`. The measured docs page does expose `--mui-palette-*`, `--mui-spacing`, `--mui-shape-borderRadius` and `--mui-shadows-*`.
- Defaults live in the open-source repo [mui/material-ui](https://github.com/mui/material-ui): `styles/createPalette.js`, `styles/createTypography.js`, `colors/blue.ts`, `colors/red.ts` (all opened).
- The website adds its own layer: `--muidocs-palette-*` variables (HSL-based ramps such as `primary-500`, `primaryDark-700`, `secondary-200`, `error-500`) distinct from the library's `--mui-palette-*`. That is why the site accent differs from the library default.
- Design resources: the [design-resources page](https://mui.com/material-ui/getting-started/design-resources/) lists Figma and Sketch design kits and the Sync Figma plugin (beta) that exports a theme file.
- The homepage presents Material UI, MUI X, Templates and Design kits as separate products.

## Do's and Don'ts

### Do
- Choose the track first: site accent `{colors.primary}` for marketing UI, `{colors.theme-primary}` when reproducing library components.
- Keep library buttons uppercase 14px/500 with 4px radius.
- Use real component demos as hero artwork.
- Pair General Sans headings with IBM Plex Sans body.

### Don't
- Do not mix 10px site-button radius with 4px library-button radius in one component.
- Do not use `{colors.neutral-200}` as text on white; it measured as text only on the dark panel.
- Do not set display type lighter than 600 on the site.

## Responsive Behavior

The extractor measured a 390px viewport: the h1 drops from 56px to 40px (`{typography.display-mobile}`), keeping weight 600 and -0.2px tracking. Product cards stack in a single column in narrow viewports (not separately measured; confirm before relying on it).

## Iteration Guide

1. Decide site vs library track; pick the primary token accordingly.
2. Start from white canvas with `{colors.ink-body}` text; add one blue button per section.
3. For forms, copy the measured text field: 56px tall, 16.5px 14px padding.
4. Measure any new component on a docs demo page before adding a token.
5. Re-run `node web/scripts/verify-designs.mjs --slug=mui`.
