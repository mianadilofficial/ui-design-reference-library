---
version: alpha
name: Vue Design System
category: "Design Systems"
description: "Vue Design System's landing page sets a deep navy faceted hero with a five-tile red-to-gold VUEDS wordmark above a white features grid, in light-weight (300) Fira type at 56px, a #1070d1 blue Download button with 3px corners and a soft 57.6px shadow, and gray #6e6e6e body copy."
colors:
  canvas: "#ffffff"
  ink: "#6e6e6e"
  primary: "#1070d1"
  on-primary: "#ffffff"
  surface-section: "#f4f6f8"
  ink-strong: "#1e1e1e"
  ink-intro: "#b3cade"
  on-dark-muted: "#ffffff80"
  section-border: "#c4cdd5"
  primary-hover: "#258aef"
  rich-black: "#001123"
  blue-darker: "#00264d"
  red: "#eb3b24"
  red-dark: "#c92813"
  yellow: "#ffba0a"
  cloud: "#e9f3fd"
typography:
  display:
    fontFamily: fira-custom, Helvetica, Arial, sans-serif
    fontSize: 56px
    fontWeight: 300
    lineHeight: 72.8px
  display-mobile:
    fontFamily: fira-custom, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 300
    lineHeight: 36.4px
  subheading:
    fontFamily: fira-custom, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 44.8px
  body:
    fontFamily: fira-custom, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
  button:
    fontFamily: fira-custom, Helvetica, Arial, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 54px
  logo-wordmark:
    fontFamily: fira-custom, Helvetica, Arial, sans-serif
    fontSize: 36px
    fontWeight: 300
    lineHeight: 64px
  button-docs:
    fontFamily: "\"Fira Sans\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 25.6px
rounded:
  xs: 3px
spacing:
  s1: 6.72px
  s2: 12.8px
  s3: 30px
  s4: 54px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 30px
    height: 54px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 19.2px 57.6px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  feature-title:
    textColor: "{colors.ink-strong}"
    typography: "{typography.subheading}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 54px
  button-docs:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-docs}"
    rounded: "{rounded.xs}"
    padding: 8px 16px 9px
---

## Overview

Vue Design System (https://vueds.com) is the landing page of an open source tool, "An open source tool for building Design Systems with Vue.js", created by Ariel Salminen and contributors and published under the MIT license on GitHub (https://github.com/arielsalminen/vue-design-system). The page is the product's own marketing surface and also demonstrates the look its generated documentation can have.

The capture shows two zones. The top is a dark navy hero with a subtle faceted, low-poly triangle texture, a centered five-tile wordmark spelling V, U, E, D, S in tiles that step from dark red through coral to amber and gold, a white light-weight headline, a lighter blue-gray intro paragraph (`{colors.ink-intro}`), and two buttons side by side: a filled blue "Download (v3.5.7)" and an outlined "Docs". Under it a thin pale blue strip reads "View example documentation" with an arrow. The lower zone is a white page (`{colors.canvas}`) with a centered "Features" heading and a three-by-three grid of feature blocks, each with a blue outline icon, a 28px title and a short gray description. One title carries a small yellow "WIP" badge. The page ends in a light gray band (`{colors.surface-section}`).

**Key Characteristics:**
- Deep navy hero, white body: a strong two-zone page with one saturated action color, `{colors.primary}` (#1070d1).
- Light-weight (300) Fira type for headlines, 56px on desktop and 28px on a 390px viewport.
- A wordmark built from five colored tiles that run from red through amber, the only warm color on the page apart from the "WIP" badge.
- Rectangular buttons with 3px corners and a large, soft shadow.
- Monoline blue icons in a generous grid, with plain, instructional microcopy ("Create a token, an element, or a pattern, and it's immediately available across all your Vue.js components.").

## Colors

The homepage defines its palette as CSS custom properties, measured from the page root: `--color-blue-dark` rgb(16,112,209), `--color-blue` rgb(37,138,239), `--color-blue-darker` rgb(0,38,77), `--color-rich-black` rgb(0,17,35), `--color-red` rgb(235,59,36), `--color-red-dark` rgb(201,40,19), `--color-yellow` rgb(255,186,10), `--color-text` rgb(110,110,110), `--color-text-intro` rgb(179,202,222), `--color-black` rgb(30,30,30), `--color-section` rgb(244,246,248) and `--color-section-border` rgb(196,205,213). The color token file in the repository (https://raw.githubusercontent.com/arielsalminen/vue-design-system/master/src/tokens/color.yml) names a family of vermilion, UCLA gold, Bleu de France and Oxford blue ramps in HSL, plus `rich_black` (#001123), white, silver (#7F8891) and cloud (#E9F3FD).

- `{colors.canvas}` (#ffffff): the features page background.
- `{colors.ink}` (#6e6e6e): body text and descriptions, the most-read color.
- `{colors.ink-strong}` (#1e1e1e): headings and feature titles.
- `{colors.ink-intro}` (#b3cade): intro paragraph on the navy hero.
- `{colors.on-dark-muted}` (#ffffff80): translucent white used for secondary text on dark.
- `{colors.primary}` (#1070d1): filled Download button and the main action color; `{colors.on-primary}` (#ffffff) is its text.
- `{colors.primary-hover}` (#258aef): hover fill, and the fill of the demo button on the documentation Button page.
- `{colors.blue-darker}` (#00264d) and `{colors.rich-black}` (#001123): the dark navy family behind the hero.
- `{colors.red}` (#eb3b24), `{colors.red-dark}` (#c92813) and `{colors.yellow}` (#ffba0a): the logo tiles and badge.
- `{colors.cloud}` (#e9f3fd): the `cloud` color named in the repository's color tokens (not measured on the page).
- `{colors.surface-section}` (#f4f6f8) and `{colors.section-border}` (#c4cdd5): light gray band and hairline.

## Typography

The homepage preloads two self-hosted files, /fonts/fira-300.woff2 and /fonts/fira-400.woff2, declared as a family named `fira-custom` (weights 300 and 400), and the stack is fira-custom, Helvetica, Arial, sans-serif. The documentation demo (https://vueds.com/example/) loads Fira Sans at 300, 400, 600, 700 and 400 italic with a longer system fallback chain. No other typeface appears.

- `{typography.display}`: 56px, weight 300, line height 72.8px, for the hero headline and the "Features" heading.
- `{typography.display-mobile}`: 28px, weight 300, line height 36.4px, the measured headline at 390px wide.
- `{typography.subheading}`: 28px, weight 400, line height 44.8px, for feature titles.
- `{typography.body}`: 18px, weight 400, line height 28.8px.
- `{typography.button}`: 21px, weight 400, line height 54px, for the homepage Download button.
- `{typography.logo-wordmark}`: 36px, weight 300, line height 64px, white letters in the V-U-E-D-S tiles.
- `{typography.button-docs}`: 16px, weight 600, line height 25.6px, measured on the documentation Button page.

Fira Sans is open source; the site self-hosts it, so no paid substitute is required.

## Layout

The page uses a centered column. The repository's own spacing tokens (https://raw.githubusercontent.com/arielsalminen/vue-design-system/master/src/tokens/spacing.yml) run space_xxs 4px, xs 8px, s 16px, m 24px, l 48px, xl 64px, xxl 128px. The homepage's measured properties are `--space-tiny` 32px, `--space-small` 54px and `--space` 64px, and the measured tokens include `{spacing.s3}` (30px), `{spacing.s4}` (54px), and the smaller `{spacing.s1}` (6.72px) and `{spacing.s2}` (12.8px). Features are a three-column grid with wide gutters; the hero is centered, with the wordmark, headline, intro and buttons all stacked on the center axis. Sections are separated by large vertical gaps rather than rules.

## Elevation & Depth

Depth is limited to one shadow. The homepage property `--shadow` is `0 1.2rem 3.6rem rgba(0,0,0, 0.2)`, which measures as rgba(0, 0, 0, 0.2) 0px 19.2px 57.6px 0px on the Download button. A 2px inset blue ring (`inset 0 0 0 2px var(--color-blue)`) is used for the outlined Docs button. The hero's sense of depth comes instead from the faceted triangle texture in the dark navy image, and the white features area is flat.

## Shapes

One radius governs the interface: `--radius` is 3px (`{rounded.xs}`), used on buttons. The icons are monoline outline shapes in blue, and the logo is made of square tiles with no rounding. There are no pills and no large rounded panels.

## Components

**`button-primary`**: `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}`, 3px radius, padding 0px 30px, height 54px, with the shared soft shadow. On hover it changes to `{colors.primary-hover}`.

**`button-docs`**: on the documentation Button page the primary button is `{colors.primary-hover}` fill with white text at 16px and 600 weight, 3px radius, padding 8px 16px 9px. Its :active state measured as #1070d1, its :focus state as #0c57a1, and its :hover state adds a 2px inset blue ring.

**`feature-title`**: 28px regular dark gray (`{colors.ink-strong}`) text with a line icon above it.

**`footer`**: `{colors.canvas}` background, `{colors.ink}` text and 54px padding.

**Secondary "Docs" button**: outlined on navy with white text; its measured rule is a 2px inset blue ring (`inset 0 0 0 2px var(--color-blue)`).

## Design System Architecture

Vue Design System is the system itself, not a consumer of someone else's: the repository describes a tool built on Vue.js, Vue Styleguidist, Webpack and Theo, with global design tokens in YAML, living documentation generated from components, and the ability to publish the system via NPM (https://github.com/arielsalminen/vue-design-system, wiki at https://github.com/arielsalminen/vue-design-system/wiki). The wiki organizes work into Tokens, Elements, Patterns and Templates and has pages on naming of things, component status and the directory structure. The landing page uses custom properties with the same naming idea (`--color-*`, `--font-*`, `--space-*`, `--radius`, `--shadow`, `--transition`), and its markup uses plain class names such as `button primary`, `button secondary`, `feature-container` and `grid-item`. The generated docs live at https://vueds.com/example/. The dsUrl for this entry is the same site as the product, so no separate organization system is involved.

## Do's and Don'ts

**Do**
- Reserve `{colors.primary}` for the Download action and keep the button 3px-cornered.
- Keep headings in weight 300 at display sizes and 400 at 28px.
- Use blue outline icons, as in the feature grid.
- Keep the hero navy and the features area white.

**Don't**
- Don't round buttons beyond 3px.
- Don't add other shadows beyond the single soft shadow.
- Don't use the warm red/amber colors for actions; they belong to the logo and badge.
- Don't mix in a second typeface.

## Responsive Behavior

At a 390px viewport the headline drops from 56px to 28px at the same weight 300 (`{typography.display-mobile}`). The homepage uses `rem`-based shadow values and a three-column feature grid on desktop; the mobile layout of the grid was not measured, so only the headline change is documented here.

## Iteration Guide

1. Start from the navy hero and white canvas, with one `{colors.primary}` button.
2. Set Fira at weight 300 for display and 400 for body at 18px.
3. Use `{rounded.xs}` (3px) everywhere.
4. Use the single soft shadow only on buttons.
5. Take extra colors only from the repository color tokens or the homepage custom properties.
6. Re-run `node web/scripts/verify-designs.mjs --slug=vue-ds` after changes.
