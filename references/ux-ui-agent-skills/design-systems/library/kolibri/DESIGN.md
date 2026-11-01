---
version: alpha
name: "KoliBri (ITZBund)"
category: "Design Systems"
description: "KoliBri's public site and component docs use Verdana throughout (32px bold H1, 16px body at 26.4px leading), a slate #334455 hero and footer on white, a single deep-blue action #003a5c with a #ccebf7 light-blue secondary, 5px-radius outlined buttons, and flat, semantic, accessibility-first Web Components styled by swappable themes."

colors:
  canvas: "#ffffff"
  page-largest: "#334455"
  ink: "#1c1e21"
  ink-text: "#202020"
  ink-black: "#000000"
  ink-on-dark: "#ebedf0"
  ink-input: "#444950"
  surface-input: "#ebedf0"
  primary: "#003a5c"
  on-primary: "#ffffff"
  primary-variant: "#005a8f"
  secondary: "#ccebf7"
  danger: "#ad003a"
  warning: "#c44931"
  success: "#005c45"
  subtle: "#576164"
  mute: "#f2f3f4"
  hairline: "#dadde1"

typography:
  display:
    fontFamily: Verdana, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: Verdana, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: Verdana, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 25px
  body:
    fontFamily: Verdana, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
  button:
    fontFamily: Verdana, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 26.4px

rounded:
  none: 0px
  xs: 5px
  sm: 32px

spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 14px
  s5: 16px
  s6: 32px
  s7: 36px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 14px
    height: 44px
    borderColor: "{colors.primary}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-text}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 14px
    height: 44px
    borderColor: "{colors.ink-text}"
  button-secondary:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 14px
    borderColor: "{colors.primary}"
  text-input:
    backgroundColor: "{colors.surface-input}"
    textColor: "{colors.ink-input}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 0px 8px 0px 36px
    height: 32px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    padding: 32px
---

## Overview

The KoliBri site (public-ui.github.io) is both the product's home page and its documentation portal, in German with an English version. The home page is deliberately plain: a white navigation bar with the blue hummingbird mark and "KoliBri" wordmark, links to Dokumentation and Blog, a "Version 4" dropdown and a pill-shaped search field with a keyboard hint, and a row of small icons (language, GitHub, visibility, chat). A full-width slate-blue band (`{colors.page-largest}`) carries a centered white 32px headline ("KoliBri - Public UI") and a subtitle ("Die barrierefreie Web Component Bibliothek"). Under it three wide buttons sit in a row: a filled deep-blue "Get Started - 5min" and two white outlined ones ("Dokumentation", "Beispiele"). Next are the logos of the Informationstechnikzentrum Bund (the German federal IT service centre) and the KoliBri bird, a centered "Barrierefreier Standard" heading with a paragraph explaining that KoliBri stands for "Komponentenbibliothek für die Barrierefreiheit" and was released as open source by the ITZBund, and three centered columns (Theming, Developer, Komponenten) each with a large dark-slate icon, a bold title, a short paragraph and an outlined button. A slate footer in three link columns (Inhalte, Community, Mehr) closes the page.

The tone is institutional, plain German, and task-oriented ("Get Started - 5min" promises a time budget). There is no photography; icons and the logo do the illustration work.

**Key Characteristics:**
- One typeface, Verdana, in bold for every heading and button and regular for body, at generous 26.4px body leading.
- A restrained blue-and-slate palette: deep blue `{colors.primary}` for the one filled action, slate `{colors.page-largest}` for hero and footer, white everywhere else.
- Outlined 5px-radius buttons of equal width form the main navigation of the page's calls to action.
- Centered, symmetric composition with three equal columns, in the style of a documentation framework's landing page.
- Accessibility is the product, so links carry visible underlines and external links an icon.

## Colors

> **Source pages:** home (`https://public-ui.github.io/`) at 1280px and 390px; docs Button page (`https://public-ui.github.io/docs/components/button`) measured as `kolibri--button`; official default theme tokens from the repo's theme file (cited below).

- **Primary** `{colors.primary}` #003a5c: the "Get Started - 5min" fill; also the KoliBri default theme's `--color-primary` (light mode), per the theme's [global.scss](https://github.com/public-ui/kolibri/blob/develop/packages/themes/default/src/global.scss). Its hover color is `{colors.primary-variant}` #005a8f.
- **Secondary** `{colors.secondary}` #ccebf7: the theme's light-blue secondary, also measured as a background on the docs page.
- **Slate** `{colors.page-largest}` #334455: the hero band and footer on the site.
- **Ink:** `{colors.ink}` #1c1e21 is the most-read text color on the site; the theme's own `--color-text` is `{colors.ink-text}` #202020, which is also the border and text of the outlined buttons; `{colors.ink-black}` #000000 for maximum-contrast text; `{colors.ink-on-dark}` #ebedf0 for text on slate.
- **Status colors (theme):** `{colors.danger}` #ad003a, `{colors.warning}` #c44931, `{colors.success}` #005c45, `{colors.subtle}` #576164, `{colors.mute}` #f2f3f4. These come from the default theme file, not from the home page.
- **Input:** the search field is `{colors.surface-input}` #ebedf0 with `{colors.ink-input}` #444950 text.
- **Hairline** `{colors.hairline}` #dadde1: borders on the docs page.

The theme file also defines dark-mode counterparts through `light-dark()` and says it deliberately leaves `color-scheme` to the application; the values above are the light branch.

## Typography

Verdana is the only family (fallback `sans-serif`; the default theme's own stack is Verdana, Arial, Calibri, Helvetica, sans-serif at a 16px base size). It is a system font on most platforms, so no web font is loaded; the only loaded fonts on the page are icon fonts (Font Awesome and a custom "kolicons" set).

| Role | Size / line | Weight |
|---|---|---|
| Display (`{typography.display}`) | 32px / 40px | 700 |
| Heading (`{typography.heading}`) | 24px / 30px | 700 |
| Subheading (`{typography.subheading}`) | 20px / 25px | 700 |
| Body (`{typography.body}`) | 16px / 26.4px | 400 |
| Button (`{typography.button}`) | 16px / 26.4px | 700 |

The default theme's button mixin sets `font-weight: 700` on every button, matching the measured bold labels. Headings are not tracked; line-height ratios are 1.25 for headings and 1.65 for body.

## Layout

The page uses a centered container (header content, paragraph and three-column grid share a common width), full-width color bands for hero and footer, and symmetric centered blocks. Spacing steps measured: 4, 8, 12, 14, 16, 32 and 36px (`{spacing.s1}` to `{spacing.s7}`), consistent with the default theme's base `--spacing` of 4px and button padding of 8px 14px. Buttons are laid out in a row of three equal-width tiles (288px each in the measured layout) separated by consistent gaps.

## Elevation & Depth

Flat. The home page has no shadows; hierarchy comes from color bands and 1px borders. The default theme adds a soft shadow (`0 2px 8px 2px` in a navy-tinted `--color-shadow`) on button hover, and in dark mode replaces shadows with a 1px edge, according to its global stylesheet.

## Shapes

Buttons and outlined tiles have 5px corners (`{rounded.xs}`), the theme's `--border-radius` (with a 4px inner radius for nested elements); the search field is a full pill with 32px radius (`{rounded.sm}`). The component wrappers report 0px radius on the host element, and the visible 5px radius is on the inner span (`{rounded.none}` is kept in the tokens for that host element). Border width is 1px.

## Components

- **Primary button** (`{components.button-primary}`): `{colors.primary}` fill and border, white Verdana 16px/700, 5px radius, padding 8px 14px, 44px high, with a trailing chevron ("Get Started - 5min >").
- **Outlined button** (`{components.button-outline}`): white fill, 1px `{colors.ink-text}` border and text, same geometry ("Dokumentation" with an external icon, "Beispiele", "Styling & Design", "Frameworks", "Komponenten").
- **Secondary button** (`{components.button-secondary}`): from the theme, a light-blue fill with primary-colored text and border.
- **Variants:** the theme source defines primary, secondary, tertiary, normal, danger and ghost button variants.
- **Search input** (`{components.text-input}`): pill, 32px high, 36px left inset for the magnifier icon, with a placeholder and shortcut hint.
- **Footer** (`{components.footer}`): slate with white bold column headings, regular white links and a centered copyright line.
- **Info paragraphs:** centered, with an underlined link and a dotted-underlined abbreviation ("KoliBri").

## Design System Architecture

KoliBri is itself a design-system implementation: the German federal IT service centre ITZBund publishes it as an open-source library of **Web Components** ("Komponentenbibliothek für die Barrierefreiheit"), documented at [public-ui.github.io](https://public-ui.github.io/), with the source in [github.com/public-ui/kolibri](https://github.com/public-ui/kolibri) under the EUPL-1.2 licence. The home page says the components use Shadow DOM, are reusable in all web projects, ship framework adapters for Angular, React, Preact and Solid, and number more than 40; the component index includes Button, Card, Combobox, Dialog, Drawer, Input variants, Modal, Nav, Pagination, Table, Tabs, Toaster, Tooltip and Tree.

The architectural idea is documented on the [Theming page](https://public-ui.github.io/docs/concepts/styling/theming): a theme is a concrete realization of a central design template; KoliBri decoupled all CSS from the components so each component can be styled independently inside a theme, while design tokens (CSS properties) remain available at theme level. The suggested process runs from a UI/UX specification (Figma, Sketch or Adobe XD), to design tokens in JSON, to CSS style files, to a KoliBri theme. The repository contains a `packages/themes` directory with folders named default, kern, desy, ecl and bwst, and `components`, `adapters`, `icons` and `unstyled` packages.

The default theme source ([global.scss](https://github.com/public-ui/kolibri/blob/develop/packages/themes/default/src/global.scss)) defines the token set as CSS custom properties with a `--kolibri-*` override hook: `--border-radius` 5px, `--inner-border-radius` 4px, `--font-family` Verdana-first, `--font-size` 16px, `--spacing` 4px, `--border-width` 1px, and the colors listed above. The button mixin ([button.scss](https://github.com/public-ui/kolibri/blob/develop/packages/themes/default/src/mixins/button.scss)) sets bold text, padding 8px 14px, and the variant color pairings. Measured on the docs Button page, the default-theme primary button is the same deep-blue fill, so the site's palette equals the library's default theme.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the one primary action and outlined buttons for alternatives.
- Keep Verdana at 16px with generous line height; bold for headings and buttons.
- Style components through themes and `--kolibri-*` properties rather than overriding internals.
- Keep external links marked with an icon and visible link styling.

**Don't**
- Don't add gradients or photography to the landing page; it relies on color bands and icons.
- Don't put text under 4.5:1 contrast; the palette is built for accessibility.
- Don't depend on shadows for hierarchy; dark mode removes them.
- Don't round buttons beyond the theme's 5px.

## Responsive Behavior

At 390px the extractor recorded the same H1 style (32px) as on desktop, so the headline does not change size. The mobile layout was not inspected beyond the H1 measurement. Specific breakpoint tokens were not found in the sources read, so none are stated.

## Iteration Guide

1. Start from white with a slate hero band and one filled `{colors.primary}` button, with outlined siblings.
2. Use Verdana 16px/26.4px for text and bold for every heading and label.
3. Configure customizations through `--kolibri-*` properties in a theme (for example color-primary and border-radius) rather than new CSS in components.
4. Verify contrast for any new color against white and slate.
5. Run `node web/scripts/verify-designs.mjs --slug=kolibri` after edits.
