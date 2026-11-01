---
version: alpha
name: Pico CSS
category: "Atomic CSS & Utilities"
description: "Pico CSS (picocss.com) is a minimal, class-light CSS framework for semantic HTML, and its site is airy and light - white canvas, #373c44 slate text, Figtree 700 headings (50px h1) over a system-ui 20px body, a #0172ad blue primary and #181c25 contrast button, 5px radii, and a very soft multi-layer blue-gray card shadow."

colors:
  canvas: "#ffffff"
  ink: "#373c44"
  ink-muted: "#646b79"
  primary: "#0172ad"
  on-primary: "#ffffff"
  primary-hover: "#02659a"
  ink-heading: "#2d3138"
  ink-h3: "#424751"
  ink-secondary: "#5d6b89"
  contrast: "#181c25"
  banner: "#13171f"
  surface-input: "#fbfcfc"
  hairline: "#e7eaf0"
  input-border: "#cfd5e2"
  invalid-border: "#b86a6b"
  text-input-text: "#23262c"
  code-value: "#2e685b"
  code-tag: "#8b4f00"

typography:
  display:
    fontFamily: Figtree, system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, Helvetica, Arial, "Helvetica Neue", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 50px
    fontWeight: 700
    lineHeight: 53.125px
  display-mobile:
    fontFamily: Figtree, system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, Helvetica, Arial, "Helvetica Neue", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 36px
  heading:
    fontFamily: Figtree, system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, Helvetica, Arial, "Helvetica Neue", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 45px
  heading-docs:
    fontFamily: Figtree, system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, Helvetica, Arial, "Helvetica Neue", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 35px
    fontWeight: 700
    lineHeight: 40px
  subheading:
    fontFamily: Figtree, system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, Helvetica, Arial, "Helvetica Neue", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 25px
    fontWeight: 700
    lineHeight: 30px
  body:
    fontFamily: system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, Helvetica, Arial, "Helvetica Neue", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px

rounded:
  base: 5px

spacing:
  s1: 2.5px
  s2: 5px
  s3: 7.5px
  s4: 10px
  s5: 15px
  s6: 20px
  s7: 26.4px
  s8: 39.6px
  s9: 40px
  s10: 55px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.base}"
    padding: 15px 40px
    height: 62px
    borderColor: "{colors.primary}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-contrast:
    backgroundColor: "{colors.contrast}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.base}"
    padding: 15px 40px
    height: 62px
    borderColor: "{colors.contrast}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px
  button-outline:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.base}"
    padding: 15px 20px
    height: 62px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
    padding: 10px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.base}"
    padding: 2.5px 5px
  text-input:
    backgroundColor: "{colors.surface-input}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.base}"
    padding: 15px 20px
    height: 63px
    borderColor: "{colors.input-border}"
  text-input-invalid:
    backgroundColor: "{colors.surface-input}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.base}"
    padding: 15px 50px 15px 20px
    height: 63px
    borderColor: "{colors.invalid-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.base}"
    padding: 40px
    boxShadow: >-
      rgba(129, 145, 181, 0.016) 0.29px 0.58px 3.48px 0px, rgba(129, 145, 181, 0.024) 0.67px 1.34px 8.04px 0px, rgba(129, 145, 181, 0.03) 1.25px 2.5px 15px 0px, rgba(129, 145, 181, 0.035) 2.25px 4.5px
      27px 0px, rgba(129, 145, 181, 0.043) 4.17px 8.34px 50.04px 0px, rgba(129, 145, 181, 0.06) 10px 20px 120px 0px, rgba(129, 145, 181, 0.016) 0px 0px 0px 1.25px
  footer:
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
---

## Overview

Pico CSS's own site (https://picocss.com, captured at 1280px; docs pages measured at /docs/button, /docs/forms/input and /docs/card) is a demonstration of the framework: semantic HTML, light surfaces, generous whitespace, a restrained blue, and almost no decoration. A dark one-line banner at the very top reads "Pico CSS is no longer maintained. Read more", followed by a white header with the "pico" wordmark (a small gold sparkle accent on the logo), Examples and Docs links, GitHub and X icons, and a light/dark toggle.

The home page is centered: a two-line headline "Minimal CSS Framework for Semantic HTML" (the first line in a purple gradient in the capture), a two-sentence description and "Write HTML, Add Pico CSS, and Voila!", then two buttons ("Get Started" in blue, "Examples" in near-black), a floating demo card showing an invalid email input over its HTML, a three-number stat row (16.9K GitHub Stars, 217.1K Npm Downloads, 23.2M JSDelivr Requests, as printed), a "A Superpowered HTML Reset" section with six feature cards in two columns, and an "Embrace the Power of Less" comparison of a class-free `<form>` with a utility-class version.

**Key Characteristics:**
- Semantic-first: the site says Pico styles HTML tags directly, "using fewer than 10 .classes overall", and offers a class-less version.
- Pale and quiet: white canvas (`{colors.canvas}`), slate text (`{colors.ink}` #373c44, `{colors.ink-muted}` #646b79), a single blue primary (`{colors.primary}` #0172ad) and a near-black contrast color (`{colors.contrast}` #181c25).
- Two typefaces by role: Figtree 700 for headings, the system UI stack for body, Fira Code for code.
- Fluid scale: the root font size is 100% and grows to 125% at 1280px and wider, so 1rem measures 20px on the capture (body 20px, 0.25rem radius = 5px).
- Soft multi-layer shadow in blue-gray (`rgba(129, 145, 181, ...)`) on cards, up to 120px blur, never harsh.
- Square-ish 5px corners on buttons, inputs and cards.
- Honest status: the site documents that v2.1.1 is the final release and the repositories are archived (per the maintenance page).

## Colors

> Sources: measured on picocss.com and the docs pages; each value cross-checked against `--pico-*` variables in the published stylesheet https://cdn.jsdelivr.net/npm/@picocss/pico@2.1.1/css/pico.css.

### Brand & Accent
- **Primary** (`{colors.primary}` - `#0172ad`): `--pico-primary` and `--pico-primary-background`; fill of "Get Started", links and the outline button color. Label color `{colors.on-primary}` (`#ffffff`).
- **Primary Hover** (`{colors.primary-hover}` - `#02659a`): `--pico-primary-hover-background`; measured hover fill of the primary button (the stylesheet's link hover color `--pico-primary-hover` is a different value, `#015887`).
- **Contrast** (`{colors.contrast}` - `#181c25`): `--pico-contrast` / `--pico-contrast-background`; the "Examples" button and the "Contrast" variant.
- **Ink Secondary** (`{colors.ink-secondary}` - `#5d6b89`): `--pico-secondary`; secondary links ("GitHub Stars") and the stylesheet's `.secondary` button base.

### Surface
- **Canvas** (`{colors.canvas}` - `#ffffff`): `--pico-background-color`; page and cards.
- **Surface Input** (`{colors.surface-input}` - `#fbfcfc`): form-element background.
- **Banner** (`{colors.banner}` - `#13171f`): the "no longer maintained" strip at the top.
- **Hairline** (`{colors.hairline}` - `#e7eaf0`): `--pico-muted-border-color`; footer and dividers.
- **Input Border** (`{colors.input-border}` - `#cfd5e2`): `--pico-form-element-border-color`, measured on the Input docs page.
- **Invalid Border** (`{colors.invalid-border}` - `#b86a6b`): `--pico-form-element-invalid-border-color`; the demo email field on the home page is shown in this state.

### Text
- **Ink** (`{colors.ink}` - `#373c44`): `--pico-color`, the default text and h2 color.
- **Ink Muted** (`{colors.ink-muted}` - `#646b79`): `--pico-muted-color`; the home page's intro paragraph and the most-read color by character count on that page.
- **Ink Heading** (`{colors.ink-heading}` - `#2d3138`): `--pico-h1-color`; **Ink H3** (`{colors.ink-h3}` - `#424751`): `--pico-h3-color`.
- **Text Input Text** (`{colors.text-input-text}` - `#23262c`): `--pico-form-element-color`.

### Code
Code panels use a dark `#181c25` background in the docs; the stylesheet defines syntax variables such as `--pico-code-value` (`{colors.code-value}`, `#2e685b`) and `--pico-code-tag` (`{colors.code-tag}`, `#8b4f00`) for the light theme. The home page's code card is light, with brown tags and green values; docs examples use a dark panel.

### Semantic
Valid, invalid, warning and ins/del colors exist as variables (for example `--pico-form-element-valid-active-border-color`, `--pico-del-color`), and the site ships 20 color themes per its home page; the default theme's blue is the one captured. The logo's sparkle uses `--pico-logo-small-sparkles` (`#ffbf00`) as measured on `:root`.

## Typography

### Font Family
- **Figtree** (loaded, weight 700) for h1-h3 and stat numerals.
- **System UI stack** `system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, Helvetica, Arial, "Helvetica Neue", sans-serif` plus emoji fonts for body text (Pico's `--pico-font-family-sans-serif`).
- **Fira Code** (loaded, weight 400) in code blocks (603 characters on the home page).

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display}` | 50px | 700 | 53.125px | Home and docs h1 |
| `{typography.display-mobile}` | 32px | 700 | 36px | h1 at 390px |
| `{typography.heading}` | 40px | 700 | 45px | Home h2 ("A Superpowered HTML Reset") |
| `{typography.heading-docs}` | 35px | 700 | 40px | Docs h2 ("Variants", "Form buttons") |
| `{typography.subheading}` | 25px | 700 | 30px | Card titles (h3) |
| `{typography.body}` | 20px | 400 | 30px | Body, buttons, nav |

Other sizes measured: 16px (code and sidebar), 14px, 17.5px and 12px.

### Principles
- Pico's own heading scale is rem-based (h1 2rem, h2 1.75rem, h3 1.5rem, h4 1.25rem, h5 1.125rem, h6 1rem in the compiled stylesheet) and scales with the root percentage; the captured home and docs headings (50px, 35px, 25px) are larger than that default scale gives at a 125% root, so the site applies its own heading overrides, which were not inspected.
- Body line-height is 1.5 (`--pico-line-height: 1.5`), which gives 30px at 20px.
- Only weights 400 and 700 appear (buttons stay 400).
- Heading colors step lighter from h1 to h6 in the stylesheet.

### Font substitutes
Figtree and Fira Code are open-source web fonts loaded by the site; system-ui is the body fallback already. If Figtree is not available, any geometric sans (Inter, Plus Jakarta Sans) is a plausible stand-in, a suggestion rather than a Pico recommendation.

## Layout

- **Banner and header.** A full-width dark strip, then a white header with the wordmark left and links right (Examples, Docs, a divider, GitHub, X, theme toggle). Docs pages add a "v2.1.1" version picker.
- **Home hero.** Everything is centered in a narrow column; buttons sit side by side; the demo card is about 700px wide with the HTML shown in a lighter code panel beneath the live example.
- **Stats.** Three centered columns, each with a Figtree number in blue-gray, an icon plus label and a small "(Last month)" note.
- **Feature grid.** Two columns of white cards on a faintly tinted background with 40px padding, a small purple icon, an h3, text and an underlined blue link with a chevron.
- **Docs layout.** Left navigation (Getting started, Customization, Layout, Content, Forms, Components, About), a 660px article column and a right "Content" on-page list.
- **Container.** The stylesheet defines container max widths at the 576, 768, 1024, 1280 and 1536px breakpoints.
- **Spacing.** Frequent paddings 10px, 2.5px, 40px, 20px, 7.5px, 15px; they are recorded as the ladder `{spacing.s1}` to `{spacing.s10}`. Pico's own `--pico-spacing` is 1rem, form-element vertical spacing 0.75rem and horizontal 1rem.

## Elevation & Depth

Elevation is a single, very soft, large shadow used on cards and dropdown-like panels (`--pico-card-box-shadow`/`--pico-box-shadow` in the stylesheet):

`rgba(129, 145, 181, 0.016) 0.29px 0.58px 3.48px 0px, rgba(129, 145, 181, 0.024) 0.67px 1.34px 8.04px 0px, rgba(129, 145, 181, 0.03) 1.25px 2.5px 15px 0px, rgba(129, 145, 181, 0.035) 2.25px 4.5px 27px 0px, rgba(129, 145, 181, 0.043) 4.17px 8.34px 50.04px 0px, rgba(129, 145, 181, 0.06) 10px 20px 120px 0px, rgba(129, 145, 181, 0.016) 0px 0px 0px 1.25px`

It is recorded in `{components.card}`. Buttons carry a transparent zero shadow (`rgba(0, 0, 0, 0) 0px 0px 0px 0px`) that becomes a focus ring on interaction. In dark mode the same layers are used with a near-black tint (`rgba(7, 9, 12, ...)`, measured on the Card page). A faint radial lavender glow sits behind the hero demo card in the capture.

## Shapes

- `{rounded.base}` (5px): `--pico-border-radius` is 0.25rem and renders as 5px at the 125% root; used on buttons, inputs, cards and nav links.
- Segment edges: `0px 0px 5px 5px` (code panel under a demo) and `5px 5px 0px 0px` (card header) are measured on docs examples.
- Inline code uses a smaller 2.5px radius (measured on 5 elements).
- Pills exist as modifiers in the stylesheet (`--pico-border-radius: 5rem` for switches and some group elements) but not on the captured pages.

## Components

### Primary button
`{components.button-primary}`: `{colors.primary}` fill and 1px border, white 20px/400 label, `{rounded.base}`, 62px tall; 15px 40px padding on the home hero, 15px 20px in the docs. Hover moves to `{colors.primary-hover}` (`{components.button-primary-hover}`); the measured hover leaves border radius and shadow unchanged.

### Contrast and secondary buttons
`{components.button-contrast}`: `{colors.contrast}` fill, white label. A secondary variant is a slate fill (`#525f7a` measured as a background on the docs Button page).

### Outline buttons
`{components.button-outline}`: transparent, 1px border and text in the variant color (primary `{colors.primary}` shown; secondary and contrast outlines also exist).

### Form buttons
Submit, button and reset inputs render as full-width buttons; reset inputs use the secondary style.

### Text input
`{components.text-input}`: `{colors.surface-input}` fill, 1px `{colors.input-border}` border, `{rounded.base}`, 63px tall, 15px 20px padding, 20px text. `{components.text-input-invalid}`: border `{colors.invalid-border}`, an alert icon at the right and a red helper line beneath ("Please enter a valid email!") on the home demo; padding grows to 15px 50px 15px 20px for the icon.

### Card (article)
`{components.card}`: `<article>` with white background, 5px radius, the large soft shadow, 20px padding on the plain Card page and 40px in demo wrappers; header and footer sections use `--pico-card-sectioning-background-color` and a 1px border per the stylesheet.

### Nav
`{components.nav}` / `{components.nav-link}`: text links in `{colors.ink}`; `.secondary`-style links in `{colors.ink-secondary}`; the stylesheet's `--pico-nav-link-spacing-vertical` is 0.5rem and horizontal 0.5rem.

### Code panel
Dark `{colors.contrast}`-toned block beneath each docs demo with a copy icon; monospace Fira Code with gold tags and teal and pink value/attribute colors (measured `#bb972c`, `#71a4a1`, `#c784b7`).

### Stat
Figtree number, icon, label, and muted note.

## Design System Architecture

Pico CSS is a CSS framework whose design system is its own set of CSS custom properties and Sass.

- **Variables.** "Customize Pico's design system with over 130 CSS variables", all prefixed `--pico-` (https://picocss.com/docs/css-variables); variables can be set on `:root` or locally, and the prefix can be changed by recompiling with Sass.
- **Source.** Sass sources in https://github.com/picocss/pico under `scss/` (themes/default light and dark, colors, content, components); compiled CSS ships on npm and jsDelivr (version 2.1.1 fetched here).
- **Color themes and schemes.** Two accessible neutral schemes (light and dark) that follow `prefers-color-scheme` without JavaScript, 20 handcrafted color themes and 30+ modular components per the home page.
- **Responsive tokens.** `--pico-font-size` is 100% by default and 106.25%, 112.5%, 118.75%, 125% and 131.25% at the 576, 768, 1024, 1280 and 1536px breakpoints.
- **Brand rules.** https://picocss.com/docs/brand provides logo/icon downloads, naming rules ("Pico CSS", "Pico", or "Pico (sparkles)" are fine; "PicoCss", "PicoCSS", "Pico.css" or "pico" are not) and a usage agreement: the name and logo are not covered by the MIT license, must not be modified, and need enough spacing.
- **Status.** https://picocss.com/docs/maintenance states v2.1.1 is the final release, the repositories are archived, npm/jsDelivr/the website stay online, forks are allowed under MIT but must use their own name.
- **Credit.** "Designed and built by Lucas Larroche with the help of our contributors. Code licensed MIT, docs CC BY-SA 4.0." (site footer).

## Do's and Don'ts

### Do
- Do style bare HTML elements first; add `.secondary`, `.contrast` and `.outline` only when needed.
- Do keep body text `{colors.ink}` and use `{colors.ink-muted}` for descriptions.
- Do use `{colors.primary}` for the single primary action and for links.
- Do keep corners at `{rounded.base}` and shadows soft and blue-gray.
- Do put live demos and their HTML side by side.
- Do reference `--pico-*` variables rather than hard-coded values.

### Don't
- Don't stack utility classes; the pitch is the opposite ("Embrace the Power of Less").
- Don't use bold weights on buttons; buttons render at 400.
- Don't use hard black shadows or heavy borders.
- Don't use the Pico name or logo for a fork or commercial project without permission.
- Don't expect new features: the project is no longer maintained.

## Responsive Behavior

- **Scaling.** The root font size scales 100% to 131.25% across the 576, 768, 1024, 1280 and 1536px breakpoints, so type and spacing grow together; the captured 1280px view is at 125%.
- **Headline.** 50px at desktop, 32px at the 390px viewport (`{typography.display-mobile}`).
- **Grid.** Pico's `.grid` stacks on small screens and spreads into columns from the 768px breakpoint (stylesheet media queries at 576px and 768px).
- **Cards.** The feature cards sit two per row at desktop.
- **Theme.** Automatic light/dark by `prefers-color-scheme`, with a manual toggle in the header.
- **Touch targets.** Buttons and inputs are 62-63px tall at the 125% scale.

## Iteration Guide

1. Start with semantic HTML on `{colors.canvas}` with `{colors.ink}` text and system-ui at 20px/30px.
2. Headings in Figtree 700: `{typography.display}`, `{typography.heading}`, `{typography.subheading}`.
3. One primary button (`{components.button-primary}`), optional `{components.button-contrast}` or `{components.button-outline}`.
4. Forms with `{components.text-input}`; show errors with `{components.text-input-invalid}`.
5. Group content into `<article>` cards with `{components.card}` shadow.
6. Customize through `--pico-*` variables, not new classes.
7. Voice: friendly, plain-spoken and a little playful ("Write HTML, Add Pico CSS, and Voila!"), with concrete numbers and an honest status note.
