---
version: alpha
name: Lit
category: "Frontend Frameworks"
description: "Lit (lit.dev) uses a Material-3-style token set from its own colors.css: Lit blue #334eff square-cornered (0px) buttons hovering to #4d63ff, #f4f4f4 background with white #ffffff bands, #242424 text, a full-bleed #4d63ff logo band and a #000000 'Explore Lit' band, all in Manrope (16px/27.2px body, 800-weight feature labels) with Roboto Mono for code."
colors:
  canvas: "#f4f4f4"
  page-largest: "#ffffff"
  ink: "#242424"
  primary: "#334eff"
  on-primary: "#ffffff"
  primary-container: "#4d63ff"
  band-dark: "#000000"
  primary-variant: "#005dc7"
  code-keyword: "#6f42c1"
  ink-dim: "#6e6e6e"
  outline-variant: "#c6c6c6"
  surface-highest: "#e2e2e2"
  on-surface: "#3e3e3e"
typography:
  display:
    fontFamily: Manrope, sans-serif
    fontSize: 20px
    fontWeight: 800
  heading:
    fontFamily: Manrope, sans-serif
    fontSize: 24px
    fontWeight: 600
  body:
    fontFamily: Manrope, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
  button:
    fontFamily: Manrope, sans-serif
    fontSize: 16px
    fontWeight: 600
  nav:
    fontFamily: Manrope, sans-serif
    fontSize: 18px
    fontWeight: 400
  link:
    fontFamily: Manrope, sans-serif
    fontSize: 18px
    fontWeight: 800
    lineHeight: 30.6px
  button-small:
    fontFamily: Manrope, sans-serif
    fontSize: 14px
    fontWeight: 700
  input:
    fontFamily: Manrope, sans-serif
    fontSize: 13.3333px
    fontWeight: 600
rounded:
  xs: 8px
  sm: 16px
  md: 17px
  none: 0px
spacing:
  s1: 1px
  s2: 2.46px
  s3: 3px
  s4: 3.69px
  s5: 4px
  s6: 4.86px
  s7: 8px
  s8: 8.1px
  s9: 9px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 37px
  button-primary-hover:
    backgroundColor: "{colors.primary-container}"
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.none}"
    padding: 8px 0px
    height: 35px
  install-chip:
    backgroundColor: "{colors.surface-highest}"
    textColor: "{colors.on-surface}"
    rounded: "{rounded.none}"
    height: 37px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-dim}"
    rounded: "{rounded.none}"
    padding: 0px 27px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 1px 5px 0px
  nav-link-hover:
    textColor: "{colors.primary-variant}"
    typography: "{typography.nav}"
  search:
    textColor: "{colors.ink-dim}"
    rounded: "{rounded.md}"
    padding: 4px 16px 4px 4px
    height: 34px
    border: "1px solid #6e6e6e"
  select:
    textColor: "{colors.ink-dim}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 1px 3px
    height: 24px
    borderColor: "{colors.outline-variant}"
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

# Lit

## Overview

Lit is a library for building web components, now "part of the OpenJS Foundation" (the blue announcement strip under the header says so and links to "our announcement"). The lit.dev home page is calm, technical and very orderly. A white header (Documentation with a v3/v2/v1 version select, Learn, Playground, Blog, a rounded Search button, a theme toggle and GitHub) sits above the blue announcement strip. The hero is a wide white band with the stacked-blue-crystal Lit logo and the "Lit" wordmark, three short claims — "Simple. Fast. Web Components." — and a pair of controls: a grey `> npm i lit` chip and a blue "Get Started" button, both 200px wide.

Below a thin blue rule, three columns present Simple, Fast and Web Components with small icons and blue labels, followed by a grey band with a code sample (`SimpleGreeting extends LitElement`) with a JS/TS toggle, a rendered `<simple-greeting name="World">` box and a full-width blue "Edit this example in the Lit Playground" bar. "Build anything with Lit" lists Shareable Components, Design Systems, Sites and Apps. A full-bleed blue band lists organisations using Lit — Adobe (Spectrum Web Components), Alaska Airlines (Auro Design System), Cisco, Google, Home Assistant, IBM (Carbon Web Components), ING, JSTOR, Microsoft, Red Hat, SAP, Shoelace, hilla, VMware (Clarity Core), Wired Elements. A black "Explore Lit" band offers four small blue buttons (Tutorials, Playground, Documentation, Get started), then a grey community section with Discord, Bluesky, GitHub and Stack Overflow links, a logo row, and an OpenJS Foundation legal footer.

A cookie notice from Google ("Lit.dev uses cookies…") overlaps the first feature column in the capture; it is not part of the brand UI and its colours are excluded from the tokens.

## Colors

The website repo's `colors.css` defines Lit's palette as Material-3-style system tokens, and the measured page matches them:

- **primary #334eff** — `--color-blue` / `--sys-color-primary`: buttons, the announcement strip, rules and feature labels.
- **primary-container #4d63ff** — `--sys-color-primary-container`: the full-bleed organisations band and the measured hover fill of the Get Started button.
- **on-primary #ffffff** — text on blue.
- **canvas #f4f4f4** — `--color-light-gray` / `--sys-color-background`: the body background and grey bands.
- **page-largest #ffffff** — white bands and the header (`--sys-color-surface-container`).
- **ink #242424** — `--sys-color-on-background`, the most-read text colour.
- **ink-dim #6e6e6e** — `--sys-color-on-background-dim`: header links and the search control.
- **primary-variant #005dc7** — `--sys-color-primary-variant`: link colour and header-link hover.
- **band-dark #000000** — the "Explore Lit" band.
- **surface-highest #e2e2e2** with **on-surface #3e3e3e** — the `npm i lit` chip; its hover fill measured #f3f3f3.
- **outline-variant #c6c6c6** — the version select border.
- **code-keyword #6f42c1** — syntax colour in the code sample; other code colours measured include #d92f3f, #032f62, #005cc5 and #008176.

`colors.css` also defines `--color-indigo: #2a2c9d`, `--color-cyan: #91ffff` (measured as text, 20 characters) and a full dark scheme; the dark scheme was not measured.

## Typography

**Manrope** is the brand typeface (loaded at 400, 500, 600, 700 and 800). **Roboto Mono** (400) is used for code and the install chip (`--playground-code-font-family: 'Roboto Mono', monospace`). Open Sans 400/600 is also loaded and appears in 4 characters only.

- **display** — Manrope 20px / 800: the h1 measured is the blue "Simple" feature label. The page has no large display headline; the logo lockup carries the hero.
- **heading** — Manrope 24px / 600 for h2s ("Shareable Components", "Connect with Lit and the web components community"). Section titles "Build anything with Lit" and "Explore Lit" measured 32px.
- **body** — Manrope 16px / 400 / 27.2px.
- **button** — Manrope 16px / 600; **button-small** — 14px / 700 for the four Explore buttons.
- **nav** — Manrope 18px / 400; the header element computes 16.2px / 600.
- **link** — Manrope 18px / 800 / 30.6px ("our announcement").
- Footer text measured 14.85px / 400 / 25.245px.

Manrope is a free Google Font; no substitution is needed.

## Layout

The page is 1280px wide with a 36px side margin (content from x=36 to x=1244); the root variables set `--home-side-margin: 2rem`, `--content-max-width: 76rem` and `--header-nav-height: 60px`. Feature sections use three equal columns separated by thin vertical rules; the organisations band is a centred grid of logos (four across in the extractor's band data) with a blue label box at the left; the Explore band has four columns with a heading and button each. Bands alternate white, #f4f4f4, #4d63ff and #000000 in full-bleed stripes.

Paddings cluster at 9px, 8px and 36px, with 27px (header side padding), 15px, 54px and 72px. Spacing tokens run 1px to 15px; the fractional values (2.46px, 3.69px, 4.86px) come from em-based spacing in small controls. Density is moderate and very regular.

## Elevation & Depth

The system is almost flat. The header carries `rgba(0, 0, 0, 0.1) 0px 1px 5px 0px`, and `rgba(0, 0, 0, 0.1) 0px 0px 5px 0px` was measured twice. #f9f9f9 (`--sys-color-surface`) was measured as a background and #d1d1d1 as a border colour. Hierarchy comes from colour bands rather than shadows: a white band, a grey band, a blue band, a black band. A faint pattern of the Lit flame mark tiles the grey community section background.

## Shapes

The defining shape decision is the square button: every blue button measured **none 0px** radius — Get Started, Tutorials, Playground, Documentation and the playground bar — and the install chip is square too. Rounded corners appear only on small utility controls: **xs 8px** (the version select and ten other elements), **sm 16px** (5 uses) and **md 17px** (the Search button, which is a rounded pill-like outline with a 1px #6e6e6e border). The Lit logo's angular crystal shapes echo the hard edges.

## Components

- **Primary button** — "Get Started": #334eff, white Manrope 16px/600, 0px radius, 37px tall, 200px wide; hover #4d63ff.
- **Small button** — Explore band buttons: #334eff, white 14px/700, 0px radius, 8px 0px padding, 35px tall, 150px wide.
- **Install chip** — `> npm i lit`: #e2e2e2, #3e3e3e Roboto Mono 16px, 0px radius, 37px tall; hover #f3f3f3.
- **Header** — white, #6e6e6e 16.2px/600 links, 0px 27px padding, 60px tall, soft shadow; link hover #005dc7.
- **Search button** — transparent, #6e6e6e text, 1px #6e6e6e border, 17px radius, 4px 16px 4px 4px padding, 34px tall.
- **Version select** — 13.3333px/600, 1px #c6c6c6 border, 8px radius, 24px tall.
- **Announcement strip** — #334eff band, white text with an 18px/800 link.
- **Feature column** — icon, blue 20px/800 label, 24px/600 heading, body; vertical rules between columns.
- **Code sample** — Roboto Mono, JS/TS toggle, rendered output box below, full-width blue "Edit this example" bar.
- **Footer** — OpenJS Foundation logo, link row, legal copy in #242424.

## Design System Architecture

Lit does not publish a separate brand guideline (https://lit.dev/brand redirects to a 404). The website source is public at https://github.com/lit/lit.dev, and its colour system is https://raw.githubusercontent.com/lit/lit.dev/main/packages/lit-dev-content/site/css/colors.css: base colours (`--color-blue: #334eff`, `--color-light-gray: #f4f4f4`, `--color-indigo`, `--color-cyan`) mapped to Material-3-style roles (`--sys-color-primary`, `--sys-color-primary-container`, `--sys-color-on-background`, `--sys-color-surface-container-*`, `--sys-color-outline`, error roles) for light and dark sections. The same CSS folder includes `design.css`, `code.css` and page-level files. The live page also exposes layout variables (`--content-max-width: 76rem`, `--home-side-margin: 2rem`) and Playground variables (`--playground-tab-bar-active-background: var(--sys-color-primary-container)`). The footer states Lit is an OpenJS Foundation project and points to its trademark policy.

## Do's and Don'ts

**Do**
- Use #334eff for actions and #4d63ff for hover and big brand bands.
- Keep buttons perfectly square (0px radius).
- Alternate full-bleed bands: white, #f4f4f4, #4d63ff, #000000.
- Set everything in Manrope; use Roboto Mono for code and the install command.
- Map new colours to the `--sys-color-*` roles in `colors.css`.
- Separate columns with thin vertical rules.

**Don't**
- Don't round the primary buttons; rounding is reserved for small utility controls.
- Don't treat the cookie notice's dark #303030 card as a Lit component.
- Don't introduce gradients or heavy shadows.
- Don't use cyan #91ffff for body text on light backgrounds.
- Don't add another display typeface; the logo carries the hero.

## Responsive Behavior

Measured at 390px: the h1 label stays Manrope 20px / 800, the h2 stays 24px / 600 (wrapping to 66px tall), body stays 16px / 27.2px, and the Get Started button stays 37px tall and 200px wide with 0px radius. One header link is visible and no menu toggle was detected. Maximum card columns measured: one (four on desktop). Bands measured in order: white to y=2591, #f4f4f4, white, a media band, the #4d63ff organisations band (two columns, x=20 to x=365), the #000000 Explore band, #f4f4f4 and a white footer band. Other intermediate behaviour was not measured.

## Iteration Guide

1. Start from `colors.css`: background #f4f4f4, surface #ffffff, text #242424, primary #334eff.
2. Typeface Manrope: 16px/27.2px body, 24px/600 headings, 32px section titles, 20px/800 labels.
3. Buttons: square, #334eff, white 16px/600, 37px tall; hover #4d63ff.
4. Use full-bleed colour bands for structure instead of cards and shadows.
5. Code: Roboto Mono on light surfaces.
6. Exclude third-party overlays (cookie notices) from any token you add.
