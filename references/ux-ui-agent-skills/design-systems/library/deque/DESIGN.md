---
version: alpha
name: Deque
category: "Design Systems"
description: "Deque's marketing site sets Graphik at weight 500 with tight negative tracking on a warm cream canvas (#f6f3ed), with 9999px pill buttons in terracotta (#cc463b) and charcoal (#282a26), a #ffbc64 highlighter behind the key headline phrase, and pale blue (#c5dde9) bands. Its Cauldron library uses Roboto and 3px charcoal-blue buttons instead."

colors:
  canvas: "#f6f3ed"
  ink: "#282a26"
  primary: "#cc463b"
  on-primary: "#ffffff"
  surface-sunken: "#e7e3db"
  surface-blue: "#c5dde9"
  on-dark-accent: "#f0b7b2"
  border-muted: "#a29b8d"
  highlight-yellow: "#ffbc64"
  cauldron-accent-dark: "#283640"
  cauldron-accent-primary: "#3c7aae"
typography:
  display:
    fontFamily: Graphik, Inter, Arial, sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 64px
    letterSpacing: "-1.92px"
  display-mobile:
    fontFamily: Graphik, Inter, Arial, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 36px
    letterSpacing: "-0.64px"
  heading:
    fontFamily: Graphik, Inter, Arial, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 56px
    letterSpacing: "-1.44px"
  body:
    fontFamily: Graphik, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: Graphik, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
  nav:
    fontFamily: Graphik, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 19px
    fontWeight: 500
    lineHeight: 28px
  button-secondary:
    fontFamily: Graphik, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 256px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 16px
  s9: 18px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 11px 16px
    height: 51px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.ink}"
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 11px 16px
    height: 51px
    borderColor: "{colors.ink}"
  button-contact:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 7px 16px
    height: 32px
    borderColor: "{colors.ink}"
  headline-highlight:
    backgroundColor: "{colors.highlight-yellow}"
    textColor: "{colors.ink}"
    padding: 8px 16px
  header-nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.lg}"
    padding: 4px 28px
  card:
    backgroundColor: "{colors.surface-sunken}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 32px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-dark-accent}"
---

## Overview

The Deque homepage is warm and editorial rather than the cool, technical look one might expect from an accessibility-testing vendor. The page sits on a cream canvas (`{colors.canvas}`) with charcoal text (`{colors.ink}`), and its only saturated colour is a terracotta red (`{colors.primary}`) used on pill buttons. A thin utility row (Sign In, Find a Partner, a Language select, search) sits above a hairline, then the main navigation: a dotted-circle logo with the lowercase wordmark "deque", menu items with chevrons (Axe Tools, Audits and Services, Solutions, Resources, Developers, Why Deque) and a dark "Contact" pill.

The hero is centred: a 64px headline "Digital accessibility done right" in which "done right" is set on a yellow-orange highlighter block (`{colors.highlight-yellow}`), a one-sentence promise ("Build and scale accessible experiences with unmatched AI tools and expertise"), and a pair of pills: terracotta "Schedule a Demo" and an outlined "Get an Audit". Pastel teardrop and leaf shapes in blue, pink and peach drift in at the top-right corner. Below sit a wide gradient card (teal to orange to magenta to yellow) holding a boxed diagram of "Axe MCP Server" with satellite tools, next to a portrait-format photograph of a man working at a standing desk. Large statistics follow ("5 Billion+", "200,000+", "10,000+"), each with a hairline vertical rule on its left, then a Forbes mention with a "Read Article" pill, and a rounded pale-blue band (`{colors.surface-blue}`) with four rule-separated columns (Conduct audits, Educate teams, Accelerate testing, Monitor compliance).

**Key Characteristics:**
- A cream-and-charcoal base with terracotta as the single action colour.
- Pill-shaped buttons everywhere (`{rounded.pill}`), 51px tall for primary actions, in filled and outlined pairs.
- A marker-style highlight behind the hero's key phrase.
- Graphik at weight 500 for display and heading, with negative tracking at large sizes.
- Hairline vertical rules, not boxes, to organise stat and feature columns.
- Pastel supporting colours (blue, rose, peach, yellow) used for bands, decorative shapes and illustration.

## Colors

The neutrals are warm: `{colors.canvas}` is a cream, `{colors.surface-sunken}` a darker sand used for panels and cards, and `{colors.border-muted}` a mid taupe for rules. `{colors.ink}` is a warm charcoal that serves as body text, the secondary button's outline, the "Contact" pill fill and the footer fill. `{colors.primary}` (terracotta) with `{colors.on-primary}` white text fills primary pills; on hover the pill fills with `{colors.ink}` (measured as the hover state). `{colors.on-dark-accent}` is the soft pink-orange used for text on the dark footer. `{colors.surface-blue}` is the pale blue of the large compliance band, and `{colors.highlight-yellow}` the highlighter behind the headline.

The site's own variables name its brand colours (a burgundy, a rose family, a blue family, yellow, orange, and a warm grey ramp) and a semantic layer (`--color-action-primary`, `--color-content-primary`, `--color-surface-base`) that maps to the values above.

Deque's separate Cauldron library has its own palette ([cauldron.dequelabs.com/foundations/colors](https://cauldron.dequelabs.com/foundations/colors)): the documented accent primary is `{colors.cauldron-accent-primary}`, and its dark accent `{colors.cauldron-accent-dark}` is the fill of the measured docs buttons. These are product-UI colours, not the marketing palette.

## Typography

The marketing site's family is Graphik (400 and 500 are loaded), with Inter and Arial as fallbacks for display and system fonts for body. Graphik is a commercial typeface; where unavailable use Inter.

- **Display (`{typography.display}`)**: 64px, weight 500, line-height 64px, tracking -1.92px; the hero headline, set at a 1.0 line-height.
- **Display mobile (`{typography.display-mobile}`)**: 32px, weight 500, line-height 36px, tracking -0.64px.
- **Heading (`{typography.heading}`)**: 48px, weight 500, line-height 56px, tracking -1.44px; section titles.
- **Body (`{typography.body}`)**: 18px, weight 400, line-height 28px.
- **Button (`{typography.button}`)**: 18px, weight 500, line-height 27px; **button-secondary (`{typography.button-secondary}`)**: 16px, weight 500, used by the small header pill.
- **Nav (`{typography.nav}`)**: 19px, weight 500, line-height 28px.

Tracking is -3% of the font size at both display and heading sizes. Body copy is a generous 18px with 28px leading, a deliberate readability choice for an accessibility brand. The Cauldron docs use Roboto instead (see the Design System Architecture section).

## Layout

The page uses a centred, single-column rhythm with wide gutters. The header spans the container with a hairline rule between the utility row and the main navigation. The hero is centred; below it, a two-column media row (a wide gradient card and a narrower photograph) leads into left-aligned headings at heading size. Stat and feature blocks use three and four equal columns with a vertical hairline at the left edge of each. The pale-blue band spans nearly the full width with rounded top corners and holds the four feature columns.

Spacing comes from the measured steps `{spacing.s1}` 4px, `{spacing.s4}` 8px, `{spacing.s7}` 12px, `{spacing.s8}` 16px, `{spacing.s9}` 18px and `{spacing.s10}` 24px. Primary buttons use 11px 16px and the highlighter uses 8px 16px.

## Elevation & Depth

The page is flat: no box-shadow values were measured on the homepage. Separation comes from colour (cream, sand and pale blue bands), hairline rules and photography. The site's variables do define WordPress shadow presets, but the captured page does not use them.

## Shapes

The scale is `{rounded.xs}` 4px, `{rounded.sm}` 8px, `{rounded.md}` 16px, `{rounded.lg}` 256px and `{rounded.pill}`. Buttons are full pills; the media card and the photograph use 16px; small chips and links use 4px (the most frequent radius on the page); the 256px value was measured on two elements whose role I did not identify.

## Components

**button-primary** — terracotta pill: `{colors.primary}` fill and border, `{colors.on-primary}` text, `{typography.button}`, `{rounded.pill}`, padding 11px 16px, height 51px; hover fills with `{colors.ink}`.

**button-secondary** — outlined pill: transparent fill, `{colors.ink}` text and a 1px `{colors.ink}` border, same geometry ("Get an Audit", "Schedule a Demo" in some contexts).

**button-contact** — the header pill: `{colors.ink}` fill, white text, `{typography.button-secondary}`, padding 7px 16px, height 32px.

**headline-highlight** — `{colors.highlight-yellow}` block behind the hero phrase, padding 8px 16px, square corners.

**header-nav / nav-link** — `{colors.ink}` text in `{typography.nav}`. **card** — `{colors.surface-sunken}`, `{rounded.md}`, 32px padding. **footer** — `{colors.ink}` fill with `{colors.on-dark-accent}` text.

## Design System Architecture

Deque publishes **Cauldron** at [cauldron.dequelabs.com](https://cauldron.dequelabs.com): "Deque's design system contains two main libraries: Cauldron React, and Cauldron Styles", an accessible React component library and the accessible styles behind it, MPL-2.0 licensed with source at [github.com/dequelabs/cauldron](https://github.com/dequelabs/cauldron) (a monorepo with `packages/styles` and `packages/react`). The docs organise Foundations (Colors, Spacing, Typography), Component Guidelines, Style Guidelines, Theming and about sixty components, from Accordion to TreeView. Setup requires loading Roboto before the styles. The foundations pages publish tokens: a Roboto/Helvetica/Arial font stack, a font-size scale from 12px to 112px (`--text-size-*`), weights 100 to 900, and a colour set of accent (primary, secondary, dark, success, error, warning, info), grays, light and dark workspace colours and issue-impact colours.

I measured the Cauldron Button page: buttons are 36px tall, Roboto 16px weight 500, with a 3px radius and the dark slate-blue `{colors.cauldron-accent-dark}` fill, on a dark slate page. That is a compact, rectangular product-UI button, quite unlike the marketing site's 51px terracotta pills in Graphik. Cauldron is the system for Deque's applications; the marketing site is built with its own token layer.

That layer is visible in the page's 400 CSS custom properties: `--color-primitive-*` ramps (gray, error, success, warning, orange, rose, blue, green, yellow), `--color-deque-*` brand colours, semantic `--color-action-*`, `--color-content-*`, `--color-surface-*` and `--color-feedback-*` roles, `--component-button-*`, `--component-card-*` and `--component-field-*` tokens, `--border-radius-*` (including `--border-radius-button: 9999px`), `--text-heading-*` and `--text-body-*` scales, `--spacing-*` and layout spacing, plus WordPress `--wp--preset--*` variables. The primitive-to-semantic-to-component layering mirrors common design-token practice.

## Do's and Don'ts

- Do use `{colors.primary}` for one primary pill per band, with an outlined `{colors.ink}` twin beside it.
- Do set headings at weight 500 with negative tracking; do not use bold display type.
- Do highlight one key phrase per page with `{colors.highlight-yellow}`, square-cornered.
- Do separate columns with hairline rules rather than boxes.
- Don't add shadows; the brand is flat.
- Don't use Cauldron's blue accent or 3px radius on marketing pages, and don't mix Roboto with Graphik.
- Don't put terracotta text on the `{colors.surface-blue}` band without checking contrast; this is an accessibility company.

## Responsive Behavior

At the 390px viewport the headline steps from `{typography.display}` to `{typography.display-mobile}`: 64px to 32px, with the line-height dropping to 36px. The site declares breakpoint variables (`--breakpoint-xs`, `--breakpoint-lg`, `--breakpoint-xl`) but column stacking and the header collapse at narrow widths were not captured, so they are not described here.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.ink}`; add terracotta only for pills.
2. Build every button as a `{rounded.pill}` with 11px 16px padding, 18px weight 500.
3. Mark the key headline phrase with the highlighter block, once.
4. Use `{colors.surface-blue}` and `{colors.surface-sunken}` bands for rhythm, with hairline rules between columns.
5. For app UI, use Cauldron tokens from cauldron.dequelabs.com.
