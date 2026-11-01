---
version: alpha
name: Bootstrap
category: "Frontend Frameworks"
description: "Bootstrap 6 alpha homepage and docs: Geist type with 48px/600 headlines, white canvas with a pastel mesh hero, a #7740ff accent button at 12px radius, #0087fe blue docs buttons at 8px radius, #171a1d ink, and low-opacity layered shadows."

colors:
  canvas: "#ffffff"
  page-largest: "#fafafa"
  ink: "#444b51"
  primary: "#7740ff"
  on-primary: "#ffffff"
  surface-muted: "#f6f7f8"
  warning-surface: "#fff6d3"
  ink-secondary: "#333333"
  ink-heading: "#171a1d"
  ink-muted: "#5d666e"
  warning-ink: "#a87700"
  hairline: "#ceceff1f"
  theme-blue: "#0087fe"
  button-primary-border: "#6c3be3"
  inverse-border: "#15181b"
  theme-blue-active: "#0070fa"
  success: "#00b15a"
  danger: "#e62845"
  warning: "#ffc900"
  border-control: "#d4d8db"
typography:
  display:
    fontFamily: >-
      Geist, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 48px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: >-
      Geist, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: "-0.8px"
  body:
    fontFamily: >-
      Geist, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: >-
      Geist, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  heading:
    fontFamily: Geist, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
  subheading:
    fontFamily: Geist, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 35px
rounded:
  xs: 6px
  sm: 7px
  md: 8px
  lg: 10px
  xl: 12px
  pill: 9999px
  capsule: 800px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7.37px
  s5: 8px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 24px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 8px 16px
    height: 46px
    borderColor: "{colors.button-primary-border}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 1px 2px 0px, rgba(255, 255, 255, 0.1) 0px 1px 0px 0px inset
  button-secondary:
    backgroundColor: "{colors.ink-heading}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 8px 16px
    height: 46px
    borderColor: "{colors.inverse-border}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 1px 2px 0px, rgba(255, 255, 255, 0.1) 0px 1px 0px 0px inset
  link:
    textColor: "{colors.theme-blue}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
    padding: 12px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.xl}"
    padding: 16px
  footer:
    textColor: "{colors.ink}"
    padding: 16px 0px




  button-solid-blue:
    backgroundColor: "{colors.theme-blue}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 38px
  button-solid-blue-active:
    backgroundColor: "{colors.theme-blue-active}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.md}"
  banner-pill:
    backgroundColor: "{colors.warning-surface}"
    textColor: "{colors.warning-ink}"
    rounded: "{rounded.capsule}"
    height: 38px
---

## Overview

The measured site is Bootstrap 6 (v6.0.0-alpha.1): getbootstrap.com's homepage and the v6 docs. Bootstrap describes itself on the homepage as "the open source design system for everyone" and as "a framework-agnostic design toolkit," a repositioning from the "front-end framework" of earlier versions. The product is the component library, so this file records three layers: the marketing homepage, the live docs components, and the published token source in the twbs/bootstrap repository.

The homepage is airy and nearly monochrome. White canvas `{colors.canvas}` (#ffffff), a soft pastel mesh gradient behind the hero (pale blue at left, lilac and pink toward the middle, warm yellow at the right edge, all fading to white by the lower third), dark slate heading text `{colors.ink-heading}` (#171a1d), body text `{colors.ink}` (#444b51), and a single vivid purple call to action `{colors.primary}` (#7740ff), which is Bootstrap's *accent* theme color (indigo-500) rather than its blue *primary*. The docs, in contrast, are plain white pages with blue primary buttons (`{colors.theme-blue}` #0087fe), because the framework's default theme primary is blue.

What the capture shows:

1. **Top bar**: a purple rounded-square "B" logo, text links (Docs, Examples, Icons, Blog), a centered search field with a magnifier, "Search docs..." and a keyboard hint chip (command-K), then a GitHub icon, a version dropdown ("v6.0") and a color-mode toggle.
2. **Announcement pill**: a pale yellow capsule `{colors.warning-surface}` with amber text `{colors.warning-ink}`: "Security updates for Bootstrap 3 & 4 ->".
3. **Hero**: a centered two-line 48px headline in semibold with tight tracking, a 20px lede paragraph ("Bootstrap 6 has been rebuilt for today's web as a framework-agnostic design toolkit that anyone - human or AI, novice or pro - can use to build anything...") with an inline blue link, and a row of three controls: a monospaced install field ("npm i bootstrap@6.0.0-alpha.1" with a copy icon), a near-black button "For Agents" with a rocket icon and a small chevron, and the purple "Read the docs" button with a book icon.
4. **Version line**: "Currently v6.0.0-alpha.1 - Bootstrap 5 docs - All releases" in muted grey with underlined links.
5. **Ad slot**: a rounded card holding a Carbon ad (a dark square logo image, two lines of copy, "ads via Carbon").
6. **Footer**: logo and a MIT-license blurb on the left, then four columns of links (Links, Guides, Projects, Community) with semibold column titles.

The voice is plain developer-documentation English: short imperative labels (Read the docs, Learn more on the blog), no marketing flourish, one explicit nod to AI users ("human or AI") and a dedicated "For Agents" action.

## Colors

### Marketing accents (homepage)

- **Accent indigo** `{colors.primary}` (#7740ff): the "Read the docs" fill, with a slightly darker border `{colors.button-primary-border}` (#6c3be3). In the repo this is `--bs-accent-bg`, defined as `oklch(56% 0.26 288)` (indigo-500); the extractor reports it as #7740ff.
- **Ink button** `{colors.ink-heading}` (#171a1d): the "For Agents" fill, with border `{colors.inverse-border}` (#15181b). It maps to Bootstrap's `inverse` theme color (gray-900 by default).
- **On-primary** `{colors.on-primary}` (#ffffff): label color on both.
- **Docs-only brand holdovers**: the shipped CSS still exposes `--bd-violet` #712cf9 and `--bd-purple` #4c0bce (the older Bootstrap purple) and `--bd-accent` #ffe484, used inside docs examples.

### Theme colors (docs and framework)

The v6 theme system defines eight semantic theme colors, per the official theming docs: primary = blue-500, accent = indigo-500, success = green-500, danger = red-500, warning = yellow-500, info = cyan-500, inverse = gray-900 and secondary = gray-300. Measured on the docs:

- `{colors.theme-blue}` (#0087fe): solid primary buttons and links (blue-500, `oklch(60% 0.24 240)`).
- `{colors.theme-blue-active}` (#0070fa): the pressed/active toggle button fill.
- `{colors.success}` (#00b15a), `{colors.danger}` (#e62845), `{colors.warning}` (#ffc900): solid fills for success, danger and warning swatches on the docs.

### Neutrals

- `{colors.canvas}` (#ffffff) page; `{colors.page-largest}` (#fafafa) for large soft panels such as the ad card; `{colors.surface-muted}` (#f6f7f8) for the search field and code surfaces.
- `{colors.ink}` (#444b51) body text; `{colors.ink-secondary}` (#333333) and `{colors.ink-heading}` (#171a1d) darker; `{colors.ink-muted}` (#5d666e) for placeholder and meta text.
- `{colors.hairline}` (#ceceff1f): a translucent border; the docs form controls use `{colors.border-control}` (#d4d8db).

### How the palette is built

`scss/_colors.scss` declares sixteen named hues in OKLCH: blue, indigo, violet, purple, pink, red, orange, amber, yellow, lime, green, teal, cyan, brown, gray and pewter. For each hue it generates a 500 base plus tints (025, 050, 100, 200, 300, 400, mixed toward white at 94%, 90%, 80%, 60%, 40%, 20%) and shades (600, 700, 800, 900, 950, 975, mixed toward black at 16%, 32%, 48%, 64%, 70%, 76%) using `color-mix(in oklch, ...)`. Light and dark values are chosen with the CSS `light-dark()` function.

### Rules observed

- Purple is a marketing accent, used only for the primary hero action.
- The blue theme color is used for in-product actions and links.
- Everything else is neutral; color comes from the pastel gradient and the single accent.

## Typography

The measured family is **Geist** (with **Geist Mono** for code), loaded as variable fonts spanning weights 100 to 900. Geist is an open-source family released by Vercel with Basement Studio and Andres Briganti under the SIL Open Font License 1.1. The fallback chain is `-apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif` plus emoji fonts; the repo's own default `--body-font-family` omits system-ui (a comment cites a non-Latin rendering issue).

| Role | Token | Size / line | Weight | Notes |
| --- | --- | --- | --- | --- |
| Hero h1 | `{typography.display}` | 48px / 48px | 600 | letter-spacing -1.2px |
| Hero h1 on mobile (390px) | `{typography.display-mobile}` | 32px / 32px | 600 | letter-spacing -0.8px |
| Docs page title | `{typography.heading}` | 40px / 48px | 500 | e.g. "Button" |
| Docs section title | `{typography.subheading}` | 28px / 35px | 500 | e.g. "Base class" |
| Hero lede | `{typography.body}` | 20px / 30px | 400 | |
| Button | `{typography.button}` | 16px / 24px | 500 | homepage buttons |

Docs body text is 16px / 24px at weight 400, and docs buttons are 16px at weight 400.

The framework publishes a fluid type scale as tokens: `--bs-font-size-xs` .75rem, sm .875rem, md 1rem, lg `clamp(1.125rem, 1rem + .625vw, 1.25rem)`, xl `clamp(1.5rem, 1.1rem + .75vw, 1.75rem)`, 2xl, 3xl, 4xl, 5xl up to 6xl `clamp(3.75rem, 2.5rem + 6.25vw, 5rem)`. Font weights are tokenized: light 300, normal 400, medium 500, semibold 600, bold 700. Body line height is 1.5; code is 95% of the surrounding size.

Principles: headings are semibold or medium with negative letter-spacing at large sizes; body is regular; no uppercase or small-caps; code and install commands use Geist Mono.

### Font substitutes

Geist is open source and available through `npm i geist` or Google Fonts-style hosting, so a substitute is rarely needed. Otherwise `Inter` at the same weights is the closest alternative.

## Layout

- **Grid.** 12 columns, a 1.5rem horizontal gutter, six implicit row columns; container max widths 540px (sm), 720px (md), 960px (lg), 1200px (xl), 1440px (2xl). Breakpoints: xs 0, sm 576px, md 768px, lg 1024px, xl 1280px, 2xl 1536px.
- **Spacing.** `$spacer` is 1rem; the spacer scale is `.25`, `.375`, `.5`, `.75`, `1`, `1.25`, `1.5`, `1.75`, `2`, `2.25`, `2.5` and `3` times the spacer. Measured spacing tokens on the homepage: 2, 4, 6, 7.37, 8, 12, 14, 16, 24 and 48px.
- **Homepage composition.** A single centered column up to a lede width of roughly 650px at capture scale, with ample vertical air (about 100px) between the hero, ad and footer.
- **Docs composition.** Left navigation, a central content column, and a right-hand table of contents (the shipped CSS carries `--bd-toc-color` and `--bd-navbar-offset` tokens).
- **Footer.** Four equal link columns after a brand block; the footer padding measured is `16px 0px`.
- **Navbar.** Measured nav padding is `12px 0px`.

## Elevation & Depth

Bootstrap 6 uses light, layered shadows rather than heavy elevation.

- **Buttons**: `rgba(0,0,0,0.15) 0px 1px 2px 0px, rgba(255,255,255,0.1) 0px 1px 0px 0px inset`: a faint drop plus a 1px top highlight that makes solid buttons look slightly raised. The repo's button tokens define the same pair (`--btn-shadow`) and a pressed state of `inset 0 2px 4px rgb(0 0 0 / .15)`.
- **Cards and panels**: an indigo-tinted three-layer shadow, `oklch(0.56 0.26 288 / 0.04) 0px 2px 4px -1px, oklch(0.56 0.26 288 / 0.05) 0px 6px 12px -2px, oklch(0.56 0.26 288 / 0.06) 0px 12px 24px -4px`, seen on the ad card. The tint matches the accent hue.
- **Form controls**: `oklch(0 0 0 / 0.08) 0px 1px 2px 0px inset`, a subtle inner shadow.
- **Shadow scale**: the CSS exposes `--bs-box-shadow-xs`, sm, the default, lg and xl, built from `--shadow-color` and `--shadow-strength`.
- **Hero depth**: the pastel gradient is the only large-scale depth device on the homepage.
- **Overlays** use a shared easing curve, `cubic-bezier(.22, 1, .36, 1)`.
- **Focus**: a 3px ring with 1px offset in the theme's focus-ring color.

## Shapes

The framework radius token is `$radius: .5rem` (8px), and the scale is ten steps, `--bs-radius-0` through `--bs-radius-9`: 0, .125rem, .1875rem, .25rem, .375rem, .5rem, .625rem, .75rem, .875rem and 1rem. Measured on the site:

- `{rounded.md}` (8px): default for docs buttons, inputs and most controls (`--bs-btn-input-border-radius` .5rem).
- `{rounded.xl}` (12px): homepage buttons and large cards (`--bs-radius-7`).
- `{rounded.lg}` (10px): the search field. `{rounded.xs}` 6px and `{rounded.sm}` 7px for small elements and the inner radius of 8px-bordered containers.
- `{rounded.capsule}` (800px): the announcement pill. `{rounded.pill}` (9999px) is the general pill token; the repo's own pill is `50rem`.
- Large button sizes use .75rem (12px) and small sizes use .5rem.

## Components

### Button, accent (homepage)

`{components.button-primary}`: `{colors.primary}` fill, white label (`{typography.button}`, 16px / 500), 12px radius, `8px 16px` padding, 46px tall, `{colors.button-primary-border}` border and the soft shadow pair. A leading icon (book) sits before the label.

### Button, inverse (homepage)

`{components.button-secondary}`: `{colors.ink-heading}` fill, same geometry and shadow, `{colors.inverse-border}` border. Used for "For Agents" with a rocket icon and a trailing chevron.

### Button, solid (docs default)

`{components.button-solid-blue}`: `{colors.theme-blue}` fill, white label at 16px / 400, 8px radius, `6px 12px` padding, 38px tall; active state `{components.button-solid-blue-active}` fills #0070fa. The scss defines variants solid, outline and link, sizes xs, sm and lg, and a disabled opacity of .65 with a .15s ease-in-out transition on color, background, border and shadow.

### Link

`{components.link}`: `{colors.theme-blue}` text, underlined by default (`--link-decoration: underline`, underline offset .2em), hover mixes 10% black into the link color.

### Text input

`{components.text-input}`: white field, `{colors.border-control}` 1px border, 8px radius, inner shadow, 1px blue focus border with the 3px ring. Control and button sizes share a token family (`--btn-input-*`) so adjacent buttons and inputs align in height.

### Search field

A `{colors.surface-muted}` rounded field (10px) with a magnifier, placeholder in `{colors.ink-muted}` and a command-K hint.

### Announcement pill

`{components.banner-pill}`: `{colors.warning-surface}` fill, `{colors.warning-ink}` text, fully rounded, 38px tall.

### Card

`{components.card}`: `{colors.page-largest}` fill, 12px radius, 16px padding and the indigo-tinted layered shadow.

### Navigation and footer

`{components.nav}`: text in `{colors.ink}`, padding `12px 0px`; `{components.nav-link}` uses the accent color with button typography. `{components.footer}`: `16px 0px` padding, ink text, four link columns.

## Imagery & Iconography

- **No photography** on the homepage. The only imagery is the pastel mesh gradient behind the hero and the third-party ad thumbnail.
- **Gradient direction**: cool at the left (pale blue), cooler pink and lilac in the middle, warm yellow at the top right; it dissolves into the white canvas around the lower third of the first screen.
- **Icons** are simple outline glyphs at text size: a rocket (For Agents), an open book (Read the docs), a magnifier (search), a copy icon (install field), the GitHub mark, small up/down chevrons on selects and dropdowns and a half-filled circle for the color-mode toggle. Icons sit left of labels and inherit the label color.
- **Logo**: a purple rounded-square tile with a white "B", used at the top left and again in the footer.
- **Code**: monospaced Geist Mono in a light grey inset field with a copy button, the only "technical" visual on the page.

## Interaction States

- **Solid button**: default fill, hover and active steps derive from the same theme token; docs measurement shows the active toggle at #0070fa vs the resting #0087fe.
- **Disabled**: opacity .65 on buttons and controls (`--btn-disabled-opacity`, `--control-disabled-opacity`).
- **Focus**: 3px ring offset 1px in the theme focus color; form controls also change border color to the active theme color.
- **Links**: underlined at rest, hover darkens by mixing in 10% black.
- **Transitions**: .15s ease-in-out on color, background, border and shadow; overlays use the .22, 1, .36, 1 curve.
- **Reduced motion** is honored (`$enable-reduced-motion` is true by default).

## Design System Architecture

Bootstrap is itself a design system, open source (MIT code, CC BY 3.0 docs, per the footer) at github.com/twbs/bootstrap. The v6 source in `scss/` is organized as follows, from the files opened for this document:

- **Layers.** `scss/_root.scss` declares the CSS cascade layers in order: `colors, config, root, reboot, layout, content, forms, components, custom, helpers, utilities`.
- **Token maps.** Every token family is a Sass map merged through a `defaults()` function (`$spacers`, `$radii`, `$breakpoints`, `$container-max-widths`, `$colors`, `$color-tints`, `$color-shades`, `$theme-colors`, button and root token maps). Consumers can override any key, or remove it by setting it to null.
- **CSS custom properties.** Maps compile to `--bs-*` properties on `:root`, so runtime theming needs no Sass. The docs ship around 150 of them: colors by hue and step, theme tokens (`--bs-primary-bg`, `--bs-accent-bg`), spacers, radii, font sizes, shadows and component token families (`--bs-btn-input-*`).
- **Theme colors.** Eight theme colors (primary, accent, success, danger, warning, info, inverse, secondary), each with keys base, fg, fg-emphasis, bg, bg-subtle, bg-muted, border, focus-ring and contrast. Components inherit them from a `.theme-*` class (for example `<button class="btn-solid theme-primary">`), and `.theme-reset` stops inheritance.
- **Color modes.** `light-dark()` functions resolve values per mode; `$color-mode-type` is `media-query` by default and `data-bs-theme="dark"` selects dark.
- **Component set.** The scss directory lists accordion, alert, avatar, badge, banner, breadcrumb, card, carousel, chip, datepicker, dialog, drawer, list-group, menu, nav, navbar, pagination, placeholder, popover, progress, spinner, stepper, toasts and tooltip, plus buttons, forms, layout, helpers and utilities folders.
- **Tooling.** Sass `@use` modules rather than `@import`, and docs on bundlers (Webpack, Parcel, Vite).

Sources: https://github.com/twbs/bootstrap (scss/_config.scss, _colors.scss, _theme.scss, _root.scss, buttons/_button.scss), https://getbootstrap.com/docs/6.0/customize/theme/ and the measured docs pages.

## Do's and Don'ts

Do:
- Use the accent indigo only for the one hero action; use the blue theme primary for in-product buttons and links.
- Reach for theme classes (`theme-primary` and friends) rather than raw hex.
- Keep buttons at 8px radius in product UI and 12px in marketing.
- Use Geist at 400, 500 and 600, with negative tracking on the largest headings.
- Keep surfaces white or off-white, and let a pastel gradient carry the hero.
- Use the 3px focus ring and keep the .65 disabled opacity.

Don't:
- Don't combine accent purple and theme blue in the same button group.
- Don't use heavy drop shadows; stay with the layered low-opacity pair.
- Don't set uppercase labels or bold weights above 700.
- Don't hard-code colors that `light-dark()` tokens already provide.
- Don't mix 8px and 12px radii within one component.

## Responsive Behavior

Measured at 390px: the hero headline drops from 48px / 48px (tracking -1.2px) to `{typography.display-mobile}` (32px / 32px, tracking -0.8px), both at 600. The framework's font-size tokens use `clamp()` so type scales continuously between viewport widths instead of jumping at breakpoints (for example `--bs-font-size-6xl` runs from 3.75rem to 5rem). Breakpoints are sm 576px, md 768px, lg 1024px, xl 1280px and 2xl 1536px, with container widths that step at each. Layout beyond type was not measured at 390px.

## Iteration Guide

1. Choose the context: marketing (accent indigo CTA, 12px radius, pastel gradient) or product/docs (blue theme primary, 8px radius, plain white).
2. Set text in Geist: 48px / 600 for the hero, 40px or 28px / 500 for docs headings, 16px / 400 for body.
3. Build color from the 500 step of a hue and derive states with the tint and shade steps instead of new hexes.
4. Apply the button shadow pair to solid buttons and an inner shadow to inputs.
5. Add theme colors via `.theme-*` classes and let `light-dark()` handle dark mode.
6. Check against the measured values in `web/data/extracted/bootstrap*.json` and the cited repo files in `SOURCES.json` before changing any token.
