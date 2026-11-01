---
version: alpha
name: PrimeNG
category: "Design Systems"
description: "PrimeNG's site pairs Inter var at light weight 400 with tight negative tracking (60px display, -3px) on a near-white slate canvas, a near-black navy primary (#020617) on pill-shaped 48px hero buttons and 6px-radius docs buttons, and slate greys for text, with a full dashboard screenshot as the hero image."
colors:
  canvas: "#ffffff"
  page-body: "#f8fafc"
  ink: "#64748b"
  primary: "#020617"
  on-primary: "#ffffff"
  surface-dark: "#050a1c"
  ink-subtle: "#94a3b8"
  ink-strong-slate: "#475569"
  ink-heading-slate: "#334155"
  code-ink: "#24292e"
  code-navy: "#032f62"
  border: "#e2e8f0"
  input-border: "#cbd5e1"
  ink-title: "#0f172a"
  danger: "#ef4444"
typography:
  display:
    fontFamily: "\"Inter var\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-3px"
  display-mobile:
    fontFamily: "\"Inter var\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 36px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-1.8px"
  heading:
    fontFamily: "\"Inter var\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-1.2px"
  subheading:
    fontFamily: "\"Inter var\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 17.504px
    fontWeight: 600
    lineHeight: 21.0048px
  body:
    fontFamily: "\"Inter var\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 29.25px
  button:
    fontFamily: "\"Inter var\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
  button-docs:
    fontFamily: "\"Inter var\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  link:
    fontFamily: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    fontSize: 13px
    fontWeight: 400
    lineHeight: 21.125px
  button-secondary:
    fontFamily: "\"Inter var\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
  input:
    fontFamily: "\"Inter var\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 7.01px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 28px
    height: 48px
  button-docs:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-docs}"
    rounded: "{rounded.sm}"
    padding: 6px 10px
    height: 35px
    borderColor: "{colors.primary}"
  button-danger:
    backgroundColor: "{colors.danger}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-docs}"
    rounded: "{rounded.sm}"
    padding: 6px 10px
    height: 35px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 4px 12px
    height: 36px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-subtle}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
    padding: 24px
    borderColor: "{colors.border}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading-slate}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 6px 10px 6px 34px
    height: 35px
    borderColor: "{colors.input-border}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(18, 18, 23, 0.05) 0px 1px 2px 0px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading-slate}"
    rounded: "{rounded.2xl}"
    padding: 16px 20px
    borderColor: "{colors.border}"
---

## Overview

PrimeNG's homepage (primeng.org, which redirects to primeng.dev) sells an Angular component library, and it does so with a product-led layout: a thin dark announcement bar ("PrimeUI PRO for Angular is now available"), a minimal navigation bar with the logo and a "Get Started" button, a centered hero headline "Premium UI Suite for Angular", two buttons, a row of customer logos (Fox, Airbus, Mercedes, eBay), and then one very large rendered dashboard ("Portfolio command") built from the library's own components. The rest of the page is a "Quick start" section with a short Angular snippet and an `npm install primeng` command, ending in a dark footer.

The look is quiet and slate-toned. A near-white page background (`{colors.page-body}`) and white surface (`{colors.canvas}`) carry soft grey text (`{colors.ink}`), and the only strong contrast is the near-black navy of the primary button (`{colors.primary}`) and the dark footer (`{colors.surface-dark}`). The hero headline is rendered much darker than body text (`{colors.ink-title}`) at regular weight with heavy negative tracking, which gives the page its refined, editorial feel. The capture includes a small inspector-style highlight around the words "Suite" in the headline; that is a tooling artefact and not part of the design.

The voice is declarative and short: "So simple to use", "Import a component, pass your data, and you have a production-ready UI. No boilerplate, no setup ceremony."

## Colors

All neutrals come from a cool slate ramp.

- **Canvas `{colors.canvas}`** is white, used for cards, buttons' text and inputs. **`{colors.page-body}`** is the page body background and covers the largest painted area.
- **Ink `{colors.ink}`** is the most-read text color (supporting copy and descriptions). Headlines use **`{colors.ink-title}`**, measured in the text-color table. Other steps are `{colors.ink-subtle}` (placeholders, small labels), `{colors.ink-strong-slate}` and `{colors.ink-heading-slate}` (card and input text).
- **Primary `{colors.primary}`** is a near-black navy with white `{colors.on-primary}` text; it fills every primary button in the capture, including "Get Started", "Download" and the header's "Get Started".
- **Dark surface `{colors.surface-dark}`** fills the footer region.
- **Danger `{colors.danger}`** is the red of the danger-severity button measured on the Button docs page (primeng.dev/button).
- **Borders**: `{colors.border}` (card and secondary-button outlines) and `{colors.input-border}` (inputs).
- `{colors.code-ink}` and `{colors.code-navy}` are the syntax-highlighting text colors in the Quick start snippet, kept as measured code colors, not brand colors.

The page's custom properties use the `--p-*` prefix and contain `light-dark()` pairs, so the same tokens switch for a dark color scheme; for example the primary border is `light-dark(#020617,#09090b)`. This file documents the light scheme measured in the capture.

## Typography

One sans family, "Inter var", with a system fallback stack (`-apple-system`, "system-ui", "Segoe UI", Roboto, Helvetica, Arial and emoji faces), and the platform monospace stack (`ui-monospace`, SFMono-Regular, Menlo…) for labels, version chips and code.

- `{typography.display}`: 60px, weight 400, line-height 60px, letter-spacing -3px, for the hero headline. Mobile (390px): `{typography.display-mobile}` 36px/40px with -1.8px.
- `{typography.heading}`: 48px, 400, line-height 48px, -1.2px; section headings such as "So simple to use".
- `{typography.subheading}`: 17.504px, weight 600, 21.0048px line-height.
- `{typography.body}`: 18px, 400, line-height 29.25px for hero and section paragraphs. Smaller 14px text (the most frequent size by characters) is used in the dashboard demo.
- `{typography.button}`: 18px, 500, 28px for hero buttons; `{typography.button-secondary}`: 12px, 500, 18px for small "Download"-style buttons; `{typography.button-docs}`: 14px, 500, 21px, the default Aura button on the docs.
- `{typography.input}`: 14px, 400, 21px. `{typography.link}`: monospace 13px, 21.125px line-height.

Inter var ships with the site, so substitutes are not needed.

## Layout

At 1280px the page is 7,234px tall. A narrow centered hero (headline, 2-line subtitle, button pair) is followed by logos, then a wide dashboard card that spans most of the content width with a left icon rail, KPI tiles, a bar chart, a table and a "Wallet mix" panel. The Quick start block is a two-column row: copy and install command left, code window right. The measured spacing scale is `{spacing.s1}` 1px, 2px, 4px, 6px, 7.01px, 8px, 10px, 12px, 14px and 16px, which is the Tailwind-style 4px rhythm in small steps. Hero buttons are 48px high with 28px horizontal padding.

## Elevation & Depth

Elevation is almost absent. Inputs carry a faint shadow stack ending in `rgba(18, 18, 23, 0.05) 0px 1px 2px 0px`; cards rely on a 1px `{colors.border}` outline instead of shadows. The docs show a "raised" button option that adds a shadow to indicate elevation (measured on one Danger button: three layered shadows of 20%, 14% and 12% black). Depth in the hero comes from the large rounded dashboard frame floating over the near-white page.

## Shapes

The radius scale is `{rounded.xs}` 4px, `{rounded.sm}` 6px, `{rounded.md}` 8px, `{rounded.lg}` 10px, `{rounded.xl}` 12px, `{rounded.2xl}` 16px, `{rounded.3xl}` 24px and `{rounded.pill}`. Hero buttons and the "View Components" button are pills; docs buttons use 6px (`{rounded.sm}`); inputs 6px; cards 16px; the dashboard frame 24px. The shape language is "soft rectangle with a pill CTA".

## Components

- **button-primary** (hero): `{colors.primary}` fill, `{colors.canvas}` text, `{typography.button}`, `{rounded.pill}`, padding 0px 28px, 48px high.
- **button-secondary**: `{colors.primary}` fill, 12px label, `{rounded.md}`, padding 4px 12px, 36px high, used for "Download" in the dashboard.
- **button-docs**: the Aura default measured at primeng.dev/button: `{colors.primary}`, 14px/500, `{rounded.sm}`, padding 6px 10px, 35px high; **button-danger** is the same shape in `{colors.danger}`. The docs list severities Primary, Secondary, Success, Info, Warn, Help, Danger and Contrast, sizes Small, Normal and Large, and styles Rounded, Outlined, Text, Raised and Raised Text.
- **link**: white chip with monospace 13px `{colors.ink-subtle}` text, `{colors.border}` outline, `{rounded.xl}`, 24px padding.
- **text-input**: white, `{colors.ink-heading-slate}` 14px text, `{rounded.sm}`, 35px high, left padding 34px for a search icon.
- **card**: white, `{rounded.2xl}`, padding 16px 20px, `{colors.border}` outline.

## Design System Architecture

PrimeNG is itself a design-system product: an Angular component library by PrimeTek. The official documentation at https://primeng.dev (the dsUrl, confirmed as the org's own docs and in use by this page, which carries `--p-*` custom properties and `light-dark()` token values) explains the theming architecture. Presets (Aura, Material, Lara, Nora) feed a base style layer through a three-tier token model: primitive (for example a blue-50 to blue-900 ramp), semantic (primary color, surfaces, with light and dark color schemes) and component tokens (for example button and inputtext). The CSS variable prefix defaults to `p`, dark mode is configurable by selector, and presets are customised with `definePreset()` and `updatePreset()`. The token engine is the `@primeuix/themes` package named on the home page.

The Aura button source on GitHub (primefaces/primeuix) quotes `background: '{primary.color}'`, `color: '{primary.contrast.color}'`, label `fontWeight: '500'` and `roundedBorderRadius: '2rem'`, with padding and radius delegated to shared form-field tokens. That matches the docs-page measurement (500 weight, solid primary fill). The GitHub repository primefaces/primeng (MIT) states it is no longer under active development and that work continues at primeng.dev. All numeric values in this file are measurements of the live site and docs; the token source was used only to confirm structure.

## Do's and Don'ts

- Do use the near-black `{colors.primary}` for primary actions and a pill shape for hero CTAs.
- Do set headlines at regular weight with strong negative tracking.
- Do show real components in a large dashboard instead of abstract illustrations.
- Do reuse the slate ramp for text steps rather than introducing a new hue.
- Don't add colored brand fills to buttons; severity colors (such as `{colors.danger}`) are for state.
- Don't set body copy in the monospace family; it is for labels and code.
- Don't stack heavy shadows; keep a 1px border.
- Don't document the inspector highlight or hover artefact as UI.

## Responsive Behavior

The headline steps down from 60px to 36px (with line-height 40px and tracking -1.8px) at mobile width, the only mobile change recorded in the tokens. Breakpoints were not measured. Hero buttons are 48px high, which keeps tap targets comfortable, while the compact 35px docs buttons are used inside dense UIs.

## Iteration Guide

1. Start with `{colors.page-body}` as the page and `{colors.canvas}` for raised surfaces.
2. Use Inter var 400 for display with -3px tracking at 60px; keep body at 18px/29.25px.
3. Build the pill primary at 48px with 28px side padding; the small button at 6px radius.
4. Frame product UI in 16px or 24px rounded outlined panels.
5. Measure any new value on primeng.dev before adding it; keep theme-token names (`--p-*`) for reference only.
