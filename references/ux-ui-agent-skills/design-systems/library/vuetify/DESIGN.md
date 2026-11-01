---
version: alpha
name: Vuetify
category: "Frontend Frameworks"
description: "Vuetify, the Material Design component framework for Vue: default theme primary #1867c0 on white, Roboto at 57px/700 for hero headlines and 14px/500 buttons, 36px-high buttons with 4px radius (44px and 8px for hero CTAs), two-layer Material shadows, and a dark surface of #212121."
colors:
  canvas: "#ffffff"
  ink: "#00000099"
  primary: "#1867c0"
  on-primary: "#ffffff"
  ink-strong: "#000000de"
  black: "#000000"
  sponsor-heart: "#e2777a"
  banner-blue: "#2373c4"
  surface-dark: "#212121"
  border-subtle: "#3333331f"
  surface-light: "#eeeeee"
  primary-darken-1: "#1f5592"
  secondary: "#48a9a6"
  error: "#b00020"
  info: "#2196f3"
  success: "#4caf50"
  warning: "#fb8c00"
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 57px
    fontWeight: 700
    lineHeight: 64px
    letterSpacing: "-0.25px"
  display-mobile:
    fontFamily: Roboto, sans-serif
    fontSize: 45px
    fontWeight: 700
    lineHeight: 52px
  heading:
    fontFamily: Roboto, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: 0.25px
  button:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 500
    letterSpacing: 0.114286px
  nav:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  docs-title:
    fontFamily: Roboto, sans-serif
    fontSize: 45px
    fontWeight: 400
    lineHeight: 52px
  button-default:
    fontFamily: Roboto, sans-serif
    fontSize: 14px
    fontWeight: 500
    letterSpacing: 0.1px
rounded:
  xs: 4px
  sm: 4.8px
  md: 8px
  lg: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 20px
    height: 44px
  button-default:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-default}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 36px
    boxShadow: rgba(0, 0, 0, 0.3) 0px 0px 0px 0px, rgba(0, 0, 0, 0.15) 0px 0px 0px 0px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 20px
  nav:
    backgroundColor: "{colors.banner-blue}"
    textColor: "{colors.canvas}"
    boxShadow: rgba(0, 0, 0, 0.3) 0px 0px 0px 0px, rgba(0, 0, 0, 0.15) 0px 0px 0px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 24px 16px
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
    padding: 16px 16px 16px 6px
    height: 56px
  card:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    borderColor: "{colors.border-subtle}"
    boxShadow: rgba(0, 0, 0, 0.3) 0px 4px 4px 0px, rgba(0, 0, 0, 0.15) 0px 8px 12px 6px
  footer:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.black}"
    padding: 24px 16px
    boxShadow: rgba(0, 0, 0, 0.3) 0px 0px 0px 0px, rgba(0, 0, 0, 0.15) 0px 0px 0px 0px
---

## Overview

Vuetify is a component framework: the product is a Vue implementation of Material Design, and the website is both its marketing surface and its showcase. The captured homepage opens with a blue announcement banner ("September 2026 Update") carrying a dark "Read the Update" button, then a white header (the "VUETIFY" wordmark with a blue V logo, a "Search" field with a Cmd+K hint, links "Blog", "Learn", "Support", "Ecosystem", "Playground", an outlined "One" button, icon buttons, and a filled blue "Login" button). The hero, on a pale blue-grey wash, reads "A complete design system that works." with the middle words "design system" in the primary blue (`{colors.primary}`, `#1867c0`), a one-line subtitle, a filled blue "Get Started" button, a tonal light-blue "Why Vuetify?" button and a monospace command chip ("pnpm create vuetify") beside a "Latest 4.2.4" chip. To the right is a dark code window showing a `v-btn` template.

Below the hero are a special-sponsor strip, a "Component Gallery" with a row of theme-colour dots above a live dashboard demo (blue app bar, side navigation, stat cards, an orders table with status chips), and a "Sponsors & Backers" section with a heart icon and sponsor logos.

**Key Characteristics:**
- The framework's own default theme drives the marketing page: primary `#1867c0` on a white canvas.
- Roboto everywhere, with a bold 57px display headline and Material-style 14px/500 button labels.
- Components are shown live: the gallery is a real Vuetify dashboard, so the page doubles as a component specimen.
- Material elevation: two-layer shadows (a 0.3-alpha key shadow plus a 0.15-alpha ambient shadow) at several levels.
- Small radii: 4px on standard buttons, 8px on larger controls and cards.
- A soft blue-grey gradient wash behind the hero rather than a photograph.

## Colors

Colours here come from two sources: the live pages, and Vuetify's own default theme definition at https://github.com/vuetifyjs/vuetify/blob/master/packages/vuetify/src/composables/theme.ts (opened as a raw file; cited per token in SOURCES.json).

- **Primary** `{colors.primary}` (`#1867c0`) is the fill of "Get Started", "Login" and the docs-page buttons, and it matches `primary` in the default light theme. `{colors.primary-darken-1}` (`#1f5592`) is the theme's `primary-darken-1`.
- **Canvas** `{colors.canvas}` (`#ffffff`) is the page and the default light-theme `background` and `surface`. `{colors.surface-light}` (`#eeeeee`) is the footer fill and equals the theme's `surface-light`; `{colors.surface-dark}` (`#212121`) is the dark surface measured on the pages and equals the dark theme's `surface`.
- **Ink**: the extractor found the most-read text colour to be `{colors.ink}` (`#00000099`, 60% black), with `{colors.ink-strong}` (`#000000de`, 87% black) for headings and form text, and `{colors.black}` (`#000000`) for footer text. These alpha-black values are the Material text emphasis levels.
- **Banner** `{colors.banner-blue}` (`#2373c4`) is what the extractor measured as the nav background; in the capture it corresponds to the blue announcement banner at the top of the page.
- **Hairline** `{colors.border-subtle}` (`#3333331f`) is the card border.
- **Status and secondary colours** from the default light theme: `{colors.secondary}` (`#48a9a6`), `{colors.error}` (`#b00020`), `{colors.info}` (`#2196f3`), `{colors.success}` (`#4caf50`) and `{colors.warning}` (`#fb8c00`). Info and success also appear in the live pages (status chips, gallery swatches).
- `{colors.sponsor-heart}` (`#e2777a`) colours the heart icon above "Sponsors & Backers".

The dark theme in the source swaps the background to `#121212`, primary to `#2196f3` and error to `#cf6679`; those dark values were read but are not added as tokens, since the captured page is the light theme.

## Typography

Roboto is the default font: the theme variables file declares `$body-font-family: var(--v-font-body, 'Roboto', sans-serif)`, and the docs for text and typography state that "By default, Vuetify uses the Material Design 3 specification Roboto Font" (https://github.com/vuetifyjs/vuetify/blob/master/packages/docs/src/pages/en/styles/text-and-typography.md).

| Role | Size / line-height | Weight | Tracking |
|---|---|---|---|
| `{typography.display}` (hero h1) | 57px / 64px | 700 | -0.25px |
| `{typography.display-mobile}` | 45px / 52px | 700 | - |
| `{typography.docs-title}` (docs page h1) | 45px / 52px | 400 | - |
| `{typography.heading}` | 22px / 28px | 400 | - |
| `{typography.body}` | 14px / 22.4px | 400 | 0.25px |
| `{typography.button}` | 16px | 500 | 0.114286px |
| `{typography.button-default}` | 14px | 500 | 0.1px |
| `{typography.nav}` | 16px / 24px | 400 | - |

The variables file defines the Material 3 scale: display large 3.5625rem (57px), headline large 2rem, title large 1.375rem (22px), body large 1rem and body medium 0.875rem (14px), all at weight 400. The homepage hero overrides the weight to 700 for emphasis.

## Layout

The homepage is a sequence of centred sections, with the hero in a two-column split (copy and buttons left, code window right). The gallery demo is a framed application window with a macOS-style title bar, itself laid out with Vuetify's own app bar, navigation drawer and card grid (four stat cards in a row, then a "Recent Orders" table). Sponsors are laid out as centred logo rows. Spacing tokens measured range from `{spacing.s1}` (1px) to `{spacing.s10}` (20px); the footer uses 24px vertical and 16px horizontal padding, and the standard button 16px horizontal padding.

## Elevation & Depth

Depth follows Material elevation. Measured shadows on the docs and home pages are two-part: for example `rgba(0, 0, 0, 0.3) 0px 1px 2px 0px, rgba(0, 0, 0, 0.15) 0px 1px 3px 1px` for a resting raised button, `rgba(0, 0, 0, 0.3) 0px 1px 3px 0px, rgba(0, 0, 0, 0.15) 0px 4px 8px 3px` for a higher level, and a flat `0px 0px 0px 0px` pair for elements at level 0. On hover the raised "Button" demo moves from the 1px/3px pair to `0px 2px 6px 2px`, which is a measured elevation change. The default theme's `--v-elevation-overlay-opacity-step` is `2%`, lightening surfaces as they rise, the Material dark-theme convention. The card token carries the `0px 4px 4px 0px / 0px 8px 12px 6px` pair.

## Shapes

Radii in the tokens: `{rounded.xs}` (4px, the framework's `$border-radius-root`), `{rounded.sm}` (4.8px, measured on small elements), `{rounded.md}` (8px, the scale's `lg`), `{rounded.lg}` (24px, the scale's `xl`) and `{rounded.pill}` (9999px). The scale in the source is root 4px, sm half of root (2px), lg double (8px), xl six times (24px), pill 9999px. Standard buttons use 4px; the hero "Get Started" button measured 8px; avatars and the gallery colour dots are circles (50%).

## Components

Measured on the Buttons and Cards documentation pages (https://vuetifyjs.com/en/components/buttons/ and https://vuetifyjs.com/en/components/cards/) and the homepage:

- **button-default** (docs page, `v-btn` default): `{colors.primary}` fill, white text, 14px weight 500 with 0.1px tracking, 36px high, 16px horizontal padding, 4px radius, elevation-0 shadow pair. The white "Button" demo measured the same height and radius with an outline-coloured border and a raised shadow.
- **button-primary** (homepage hero): the same fill with 16px weight 500 text, 44px high, 20px horizontal padding, `{rounded.md}` (8px) radius.
- **link**: `{colors.primary}` text, 16px, 20px padding.
- **nav**: `{colors.banner-blue}` background per the extractor, white text; navigation links are 16px/24px with 24px by 16px padding.
- **text-input**: 56px high, 16px text, `{colors.ink-strong}` text.
- **card**: `{colors.surface-dark}` fill, white text, 8px radius, a `{colors.border-subtle}` border and the elevated shadow; on the light theme (as in the gallery) cards are white with a thin border.
- **footer**: `{colors.surface-light}` fill with `{colors.black}` text and 24px 16px padding.

## Design System Architecture

Vuetify is itself the design system. Its source repository https://github.com/vuetifyjs/vuetify holds the theme definition (composables/theme.ts), the SCSS settings (styles/settings/_variables.scss) and the documentation. The theme documentation (packages/docs/src/pages/en/features/theme.md) states that Vuetify "includes three built-in themes: light, dark, and system", that it implements "Material Design concepts such as elevated surfaces having a lighter overlay color the higher up they are", and that colour custom properties follow `--v-theme-[colorname]` and `--v-theme-on-[colorname]` with RGB triplets. The theme code generates the on-colours (`on-primary` and so on) from luminance. In the stylesheet variables, the radius scale derives from `$border-radius-root: 4px`, typography follows the Material 3 scale (display, headline, title, body, label), and the shipped page uses `--v-border-color`, `--v-shadow-color`, `--v-highlight-opacity: 8%` and `--v-elevation-overlay-*` variables. The documentation pages could not be read as rendered pages by the fetch tool (they are client-rendered), so the doc content above comes from the markdown source files in the repository.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the main action and let tonal buttons carry secondary actions.
- Keep Roboto and the Material type scale; change weight, not family, for emphasis.
- Express elevation with two-layer shadows and let it change on hover.
- Use the theme's status colours (`{colors.error}`, `{colors.warning}`, `{colors.info}`, `{colors.success}`) for semantics only.

**Don't**
- Round standard buttons beyond 4px; reserve 8px for large call-to-action buttons.
- Mix in non-theme blues; derive variants from `{colors.primary}` and `{colors.primary-darken-1}`.
- Use pure black for body text on the light theme; use the alpha-black emphasis levels.
- Add heavy decorative gradients: the hero wash is subtle.

## Responsive Behavior

At 390px wide, the hero headline drops from 57px to 45px with a 52px line-height. The source defines mobile-first breakpoints in the framework, but the exact breakpoint values were not read from the files fetched, so none are asserted. The header's link row and search field are desktop patterns in the capture; the drawer and icon-button patterns used on narrow widths were not measured.

## Iteration Guide

1. Start from `{colors.canvas}`, `{colors.primary}` and the `{colors.ink}` / `{colors.ink-strong}` text pair.
2. Use `button-default` for regular actions (36px, 4px radius) and `button-primary` for hero-level calls to action (44px, 8px).
3. Pull semantic colours from the theme list only: `{colors.error}`, `{colors.info}`, `{colors.success}`, `{colors.warning}`, `{colors.secondary}`.
4. Show components live in framed windows rather than as screenshots.
5. For dark surfaces use `{colors.surface-dark}`.
6. Measure new components on the docs pages with the extractor before adding tokens.
