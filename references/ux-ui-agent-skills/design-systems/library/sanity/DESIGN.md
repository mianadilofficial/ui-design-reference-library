---
version: alpha
name: Sanity
category: "Backend, Database & DevOps"
description: "Sanity's homepage as measured on the live site — a #0b0b0b near-black canvas, white Waldenburg display type up to 112px with -4.48px tracking, IBM Plex Mono uppercase 13px button labels, pill buttons filled #ff4100 (with a #ff560a brand variable in the page CSS), a full-width orange logo band, and dark Studio mockups with 3px to 12px radii."

colors:
  canvas: "#0b0b0b"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#ff4100"
  on-primary: "#0b0b0b"
  ink-dim: "#b9b9b9"
  ink-faint: "#797979"
  surface-raised: "#212121"
  border-dark: "#353535"
  border-light: "#d6d6d6"
  brand-variable: "#ff560a"
  accent-blue: "#0052ef"
  accent-green: "#19d600"
  accent-yellow: "#fff500"
  accent-magenta: "#f500ff"
  error: "#dd0000"

typography:
  display:
    fontFamily: "Waldenburg-75357948a2b6a39b, \"Waldenburg-75357948a2b6a39b fallback: Arial\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 112px
    fontWeight: 400
    lineHeight: 112px
    letterSpacing: "-4.48px"
  display-mobile:
    fontFamily: "Waldenburg-75357948a2b6a39b, \"Waldenburg-75357948a2b6a39b fallback: Arial\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-2.4px"
  heading:
    fontFamily: "Waldenburg-75357948a2b6a39b, \"Waldenburg-75357948a2b6a39b fallback: Arial\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 72px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: "-2.88px"
  subheading:
    fontFamily: "Waldenburg-75357948a2b6a39b, \"Waldenburg-75357948a2b6a39b fallback: Arial\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 51.6px
    letterSpacing: "-1.68px"
  body:
    fontFamily: "Waldenburg-75357948a2b6a39b, \"Waldenburg-75357948a2b6a39b fallback: Arial\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 425
    lineHeight: 28.8px
    letterSpacing: "-0.24px"
  button:
    fontFamily: "\"IBM Plex Mono-c20ba633a65a8c57\", \"IBM Plex Mono-c20ba633a65a8c57 fallback: Courier New\", ui-monospace, monospace"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16.9px
    textTransform: uppercase
  nav:
    fontFamily: "Waldenburg-75357948a2b6a39b, \"Waldenburg-75357948a2b6a39b fallback: Arial\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "Waldenburg-75357948a2b6a39b, \"Waldenburg-75357948a2b6a39b fallback: Arial\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 19.5px
    letterSpacing: "-0.15px"

rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 8px
  2xl: 11px
  3xl: 12px
  pill: 9999px

spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 18px
  s9: 24px
  s10: 24.16px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 4px 12px
    height: 35px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 32px
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.canvas}"
    padding: 0px 24px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink-dim}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 12px
    height: 35px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.3xl}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    padding: 24.16px 24px
---

## Overview

Sanity's homepage is a dark, monospaced-detail, large-type page. The h1 "The Content Operations Platform" is set in white Waldenburg at 112px on a #0b0b0b canvas, with a dotted underline under two phrases, followed by the line "Power content applications and AI workflows at scale. Every application, one platform." Under it an orange pill button and an outlined pill holding a copyable command, `sanity@latest`, sit side by side. Immediately below is a full-width orange (`#ff4100`) band carrying the label "TRUSTED BY LEADERS AND INNOVATORS" and customer logos, then three customer statistics ("-97%", "5X", "80h") over a dotted halftone texture, then a hazy photographic panel behind the headline "Mirror how your content operations team works".

The lower page is made of product mockups: a code editor showing a `defineType` schema, and three Studio panels (a document form, a revision history, a release scheduler) set against the same dark background. The voice is technical and direct ("Build content operations your way", "Your tools shouldn't dictate how you work."), with uppercase mono labels for navigation and buttons ("PRODUCTS", "SOLUTIONS", "GET STARTED", "ASK AGENT", "BOOK A DEMO").

On the measured page about 10,145 units of background area are `#0b0b0b`, 1,380 are `#ffffff` and 422 are `#ff4100`; everything else is a handful of small areas. This is a dark page with a single warm accent and one white section.

## Colors

- **Canvas** `#0b0b0b` — the page background; it is also the page's `--color-black`, `--color-bg-inverse-base` and `--color-border-base` variable.
- **Ink** `#ffffff` — headline and body text on the canvas (3,096 characters measured). The same value is `--color-fg-inverse-base`.
- **Page body** `#ffffff` — the white sections and the white pill ("Watch demo").
- **Primary** `#ff4100` — fill of the "GET STARTED", "BOOK A DEMO" and "Start building" buttons and of the full-width logo band, with `#0b0b0b` label text. The page CSS also declares `--color-brand: #ff560a`; the buttons measure `#ff4100`, so both are recorded and the measured one is used for fills.
- **Ink dim** `#b9b9b9` and **ink faint** `#797979` — secondary and tertiary text on dark (`--color-fg-inverse-dim`, `--color-fg-inverse-faint`).
- **Surface raised** `#212121` and **border dark** `#353535` — raised panels and 1px borders in the Studio mockups (`--color-bg-inverse-dim`, a measured `rgb(53, 53, 53) 0px 0px 0px 1px inset` shadow).
- **Border light** `#d6d6d6` — hairlines on the white band (`--color-border-dim`).
- **Accent blue** `#0052ef` — the "Skip to content" button fill and the hover colour named in the CSS (`--color-blue-700`, `--color-border-accent-blue`).
- **Accent green** `#19d600`, **yellow** `#fff500`, **magenta** `#f500ff` — border accents in the CSS (`--color-border-accent-*`), seen as status marks in the Studio mockups ("Add", "Change", "Publish" labels and avatar dots).
- **Error** `#dd0000` — `--color-fg-error` is declared as `#d00`.

The CSS also defines display-p3 versions of green, blue, yellow and magenta (for example `color(display-p3 .270588 1 0)` for green), which are not reproduced as hex tokens.

## Typography

Two families are loaded: **Waldenburg** (a hashed build name, `Waldenburg-75357948a2b6a39b`, with an Arial-metric fallback) for everything readable, and **IBM Plex Mono** for buttons, nav labels, code and uppercase captions. Sanity's own pages that were read do not name the typeface's foundry, so none is stated here.

Measured weights are 400 (7,546 characters), 425 (497) and 500 (99). Display scale on desktop: 112px / 112px with -4.48px tracking (h1), 72px / 72px with -2.88px (section headlines), 48px / 51.6px with -1.68px (sub-headlines), 38px with -1.14px, 32px with -0.32px, 24px / 28.8px at weight 425 with -0.24px (the lead paragraph), 18px with -0.18px, 15px with -0.15px (inputs) and 16px for nav. Mobile h1 is 60px / 60px with -2.4px.

Tracking is -4% of font size at 112px (-4.48px) and 72px (-2.88px), about -3.5% at 48px (-1.68px), and -1% at 24px (-0.24px) and 18px (-0.18px). Buttons are IBM Plex Mono 13px / 16.9px, uppercase, weight 400.

### Font substitutes

Waldenburg is a commercial face and is not supplied. A neutral grotesque (Inter, Helvetica Neue) with the same negative tracking approximates the headline; IBM Plex Mono is open source and can be used as-is.

## Layout

The measured page is 11,376px tall at 1280px wide. Content aligns to a left margin (the `--section-padding-x` variable is 1.5rem = 24px) and headlines run edge to edge on the left rather than being centred. Sections are full-bleed bands: dark hero, orange logo band, dark statistics row, photographic panel, product mockups. The statistics row is three equal columns; the Studio mockup row is four panels side by side.

Gaps measured most: 12px (50 uses), 8px, 2px, 24.16px (26), 16px and 48px; paddings 4px, 8px, 12px, 24.16px and 96px (vertical section padding). The nav is a single line of uppercase mono links at the left with "LOG IN", "CONTACT SALES", and two pill buttons on the right, under a thin announcement strip ("Everything *[NYC] 2026: see what we announced.").

## Elevation & Depth

Depth is flat. The only measured box shadow is a 1px inset ring, `rgb(53, 53, 53) 0px 0px 0px 1px inset`, i.e. a border drawn as a shadow. The CSS corpus also contains a soft side shadow (`-8px 0 24px #00000014`) for slide-over panels and a Material-like triple shadow in a third-party consent dialog. Hover is a swap: the pill "PREFERENCES" goes from white fill with dark text to dark fill with white text, "ACCEPT ALL" does the reverse, and the announcement strip lightens from `#0b0b0b` to `#212121`. The primary button's hover state in the generated data fills with the canvas colour.

## Shapes

Buttons and chips are full pills (`99999px`, 49 elements; `9999px`, 3 elements). Studio panels and cards use 12px (11 elements); form fields and small controls use 3px, 4px, 5px and 6px; one 11px and one 8px radius also appear. The sharp-to-soft contrast — pills for actions, nearly square 3–6px for inputs and tags, 12px for panels — is a signature of the page. The announcement strip has 0px radius.

## Components

- **Primary button** — `#ff4100` fill, `#0b0b0b` mono uppercase 13px label, pill, 4px 12px padding, 35px tall in the nav ("GET STARTED"); the hero versions ("Start building") are 8px 32px.
- **Secondary button** — white pill with `#0b0b0b` label ("Watch demo", 8px 32px), plus an outlined pill with a white border and a `sanity@latest` command with a copy icon.
- **Ask Agent** — an outlined pill with an orange border next to "GET STARTED" in the nav.
- **Text input** — 35px tall, 3px radius, 0px 12px padding, `#b9b9b9` 15px text; seen in the Studio form mockups.
- **Cards / panels** — `#0b0b0b` with a 12px radius and a `#353535` 1px edge.
- **Footer** — `#0b0b0b` with `#ffffff` text and 24.16px 24px padding.
- **Cookie dialog** — a white panel with three mono pill buttons ("PREFERENCES", "ACCEPT ALL", "REJECT NON-ESSENTIAL") from a third-party consent tool (Osano variables appear in the CSS); it covers part of the hero in the capture and is not part of the brand system.

## Design System Architecture

Sanity publishes a React design system, Sanity UI, at https://www.sanity.io/ui, described there as "an ergonomic toolkit to design with code" with "a flexible system for theming with design tokens"; its motivation page (https://www.sanity.io/ui/docs/motivation) states that "with Sanity UI, the interface is also completely defined in JavaScript (including theming and CSS)". That system is for Sanity Studio and plugin authors; the marketing homepage measured here is built separately.

The marketing site's own system is visible in its shipped CSS: a Tailwind-based build with a semantic colour layer of `--color-*` custom properties named by role — `--color-bg-base` `#fff`, `--color-bg-inverse-base` `#0b0b0b`, `--color-fg-base`, `--color-fg-dim` `#4a4a4a`, `--color-fg-faint`, `--color-border-base`, `--color-border-dim` `#d6d6d6`, `--color-border-faint` `#ededed`, `--color-focus-ring` `#0b0b0b` — over primitive ramps (`--color-gray-100` to `-900`, plus blue, green, yellow, magenta, red), with `--font-sans`, `--font-mono`, `--radius-none` and `--radius-full: 99999px`. Each accent has a "base" (display-p3) and a "dim" (sRGB) variant. No public brand-guidelines page was read: the PDF guidelines found via search were binary and could not be parsed.

## Do's and Don'ts

Do:
- Set headlines in Waldenburg at weight 400 with strongly negative tracking and let them run flush left.
- Use IBM Plex Mono uppercase 13px for every button and nav label.
- Reserve `#ff4100` for primary actions and the single full-width band.
- Mix pills (actions) with small 3–6px radii (inputs) and 12px panels.
- Show real product UI — schemas, forms, histories — rather than abstract art.

Don't:
- Add soft drop shadows; borders are 1px insets.
- Introduce more than one accent in an action; green, yellow, magenta and blue are for status marks.
- Use light grey `#797979` for text that must be read at small sizes on `#0b0b0b` without checking contrast.
- Treat the cookie dialog's styling as part of the brand.

## Responsive Behavior

Two viewports were measured: 1280px and 390px. At 390px the h1 falls from 112px to 60px (line-height 60px, tracking -2.4px). The three-column statistics and four-panel mockup row are desktop arrangements and no mobile measurements beyond the h1 were taken, so no breakpoints are stated. The section horizontal padding variable is 24px.

## Iteration Guide

1. Start with `#0b0b0b` and white text; add the single accent `#ff4100` last.
2. Set the h1 in Waldenburg (or a substitute) at 112px with -4.48px tracking and an equal line-height; step to 72px for section titles and 24px / 425 for the lead.
3. Use IBM Plex Mono 13px uppercase in pills — fill `#ff4100` with `#0b0b0b` text for primary, white with `#0b0b0b` for secondary.
4. Build panels with 12px radius and a 1px `#353535` edge.
5. Add status colours (`#19d600`, `#fff500`, `#f500ff`, `#0052ef`, `#dd0000`) only as small marks.
6. Re-run the gate after every colour or size added.
