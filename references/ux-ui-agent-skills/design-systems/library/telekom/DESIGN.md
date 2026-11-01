---
version: alpha
name: Deutsche Telekom
category: "Design Systems"
description: "Deutsche Telekom corporate home page (telekom.com): a black canvas (#000000) with white text and a #202020 pill navigation bar, magenta (#e20074) as the brand action color, white 64px pill buttons with black bold labels, TeleNeo Var type (56px/500 hero, 48px/700 headings, 24px body) and very round 24 to 42px section containers over sunset photography and pastel blue and violet panels."

colors:
  surface-light: "#ffffff"
  page-body: "#000000"
  ink-on-light: "#000000"
  button-light: "#ffffff"
  on-button-light: "#000000"
  surface-inverted: "#202020"
  primary: "#e20074"
  error: "#c30a03"
  button-light-hover: "#414141"
  canvas: "#000000"
  ink: "#ffffff"
  on-primary: "#ffffff"
  surface-raised: "#2e2e2e"
  surface-macaw: "#84b0f5"
  surface-orchid: "#a49df1"
  primary-hover: "#b5005d"
typography:
  display:
    fontFamily: "\"TeleNeo Var\", \"TeleNeo Fallback\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 56px
    fontWeight: 500
    lineHeight: 62px
  display-mobile:
    fontFamily: "\"TeleNeo Var\", \"TeleNeo Fallback\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 35px
  heading:
    fontFamily: "\"TeleNeo Var\", \"TeleNeo Fallback\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 53px
  body:
    fontFamily: "\"TeleNeo Var\", \"TeleNeo Fallback\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  button:
    fontFamily: "\"TeleNeo Var\", \"TeleNeo Fallback\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
rounded:
  xs: 6px
  sm: 24px
  md: 32px
  lg: 42px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 48px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 4px 32px
    height: 64px
  button-primary-hover:
    backgroundColor: "{colors.button-light-hover}"
    textColor: "{colors.surface-light}"
  button-secondary:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 4px 32px
    height: 64px
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.heading}"
  nav:
    backgroundColor: "{colors.surface-inverted}"
    textColor: "{colors.surface-light}"
  nav-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface-light}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
  card:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.surface-inverted}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.md}"
    padding: 96px 48px 0px
---

## Overview

The capture of https://www.telekom.com (opened 2026-10-09) is a dark, rounded, image-led corporate home page. A black page frame surrounds a sequence of large rounded blocks: a sunset sky photograph with a lattice cell tower, a floating dark navigation pill (`{colors.surface-inverted}` #202020) holding a magenta round logo button, five links (About us, Newsroom, Investor Relations, Responsibility, Career) and globe and search icons; a dark accordion bar "Information for All" with the word "All" in magenta; a light-blue panel with a headline about Deutsche Telekom and AI, two white pill buttons and a photograph of a glass facade carrying pink letters "TRUST THE T"; and a full-width magenta "Latest news" section with a white "Visit the newsroom" pill and three white cards (empty in the capture because their content had not loaded).

No cookie banner, bot challenge or popup covers the capture.

The system reads as a color-block poster: black, charcoal, magenta and pastel panels, each with radius between 24 and 42px, with white pill buttons as the one consistent control.

**Key Characteristics:**
- Black canvas (`{colors.canvas}` #000000) with white ink (`{colors.ink}` #ffffff) on the frame, the navigation and the hero; black text (`{colors.ink-on-light}`) only inside light panels.
- Magenta `{colors.primary}` #e20074 as the brand color: logo button, "Latest news" panel, emphasis word in headlines. It is the root variable `--interaction-primary-primary-default-bg`.
- White pill CTAs 64px tall with 4px 32px padding and bold 24px labels, even on the magenta panel.
- Panels of different tint (blue `{colors.surface-macaw}` #84b0f5, violet `{colors.surface-orchid}` #a49df1, magenta, charcoal) stacked with small gaps.
- Photography with warm, saturated skies and architecture, rounded to the same radii as the panels.
- TeleNeo Var variable type in 400, 500, 700 and 900 weights.

## Colors

> **Source pages:** home (`/`), measured at 1280px and 390px.

### Brand & Accent
- **Magenta** (`{colors.primary}` #e20074): the measured fill of the logo button and the "Latest news" panel; the root variables also name it `--colors-magenta`. It was reassigned as primary because the extractor's detected CTA was a white button, while the page's own interaction-primary variable is this magenta. **Magenta Deep** (`{colors.primary-hover}` #b5005d) is the root variable `--interaction-primary-primary-hover-bg`.
- **On Primary** (`{colors.on-primary}` #ffffff): text on magenta, as measured on the navigation logo button.

### Surface
- **Canvas** (`{colors.canvas}` #000000): the body background in the measurement.
- **Inverted** (`{colors.surface-inverted}` #202020): the navigation pill, accordion bar and footer; the largest measured fill area. **Raised** (`{colors.surface-raised}` #2e2e2e) is a lighter charcoal also measured.
- **Macaw** (`{colors.surface-macaw}` #84b0f5) and **Orchid** (`{colors.surface-orchid}` #a49df1): pastel panels.
- **Surface Light** (`{colors.surface-light}` #ffffff): white cards and buttons.

### Text
- **Ink** (`{colors.ink}` #ffffff) on dark; **Ink On Light** (`{colors.ink-on-light}` #000000) on white and pastel panels. **Page Body** (`{colors.page-body}` #000000) is the measured body background in the extraction's page summary.
- **Button Light** (`{colors.button-light}` #ffffff) is the CTA fill and **On Button Light** (`{colors.on-button-light}` #000000) its label. Hover is `{colors.button-light-hover}` #414141 with white text.

### Semantic
- **Error** (`{colors.error}` #c30a03): measured in a few characters of text; the root variable names it destructive. A success green (#00774b) is defined but not used in the capture.

## Typography

### Font Family
All text is `"TeleNeo Var", "TeleNeo Fallback", "Helvetica Neue", Helvetica, Arial, sans-serif`, loaded as variable-font files at weights 400, 500, 700 and 900. I did not open a foundry or license page for TeleNeo, so no claim is made about who owns or licenses it. The site's own fallback chain, Helvetica Neue then Arial, is the substitute the page itself specifies.

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display}` | 56px | 500 | 62px | "Information for All" (h1) |
| `{typography.display-mobile}` | 32px | 700 | 35px | Headline at 390px |
| `{typography.heading}` | 48px | 700 | 53px | Panel headline |
| `{typography.body}` | 24px | 500 | 32px | Panel copy |
| `{typography.button}` | 24px | 700 | 32px | Pill labels, nav links |

### Principles
- Large type everywhere: body copy is 24px, buttons 24px.
- The hero is medium weight; headings below it go bold.
- A single word is colored magenta for emphasis ("All").
- Root variables define a finer scale (copytext 1rem, h1 2.75rem, claim 4rem, numbers 4rem, dashboard h1 7rem) used by other templates.

## Layout

### Spacing System
Measured steps: 2, 4, 8, 16, 20, 24, 32, 40, 48 and 64px (`{spacing.s1}` to `{spacing.s10}`). Root variables include `--spacing-general-page-gap: 0.5rem`, `--header-height: 3.5rem` and `--width-content-width-max: 88rem`. The footer pads 96px 48px 0px.

### Grid & Container
The page is built from AEM (Adobe Experience Manager) grid classes (`aem-Grid--12`); content blocks span the full width with small outer margins, and inner content uses a two-column split (text left, image right) or a three-card row.

### Whitespace Philosophy
Blocks are separated by narrow gaps rather than whitespace; generosity is inside the blocks (large padding, large type).

## Elevation & Depth

No box shadows were measured. Depth is color: charcoal on black, pastel and magenta panels. Rounded corners do the separation work that shadows do elsewhere.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 6px | Small controls and tags |
| `{rounded.sm}` | 24px | Cards (white news cards) |
| `{rounded.md}` | 32px | Panels and footer |
| `{rounded.lg}` | 42px | Hero image and largest panels |
| `{rounded.pill}` | 9999px | Buttons and nav links (measured as 999px) |

Photography is cropped to the same rounded rectangles as the panels and set beside text rather than behind it.

## Components

### Buttons
**`button-primary`**: `{colors.button-light}` fill via `{colors.surface-light}`, `{colors.page-body}` text, `{typography.button}`, `{rounded.pill}`, padding 4px 32px, height 64px ("Media information", "Visit the newsroom"). Hover turns the fill to `{colors.button-light-hover}` with white text.

**`button-secondary`**: the same geometry; the "AI Investor Relations Day" button.

### Navigation
`nav`: `{colors.surface-inverted}` pill with white 24px bold links. `nav-link`: the magenta pill button holding the logo, `{rounded.pill}`.

### Cards
`card`: white, text black, `{rounded.sm}` 24px.

### Footer
`footer`: `{colors.surface-inverted}`, radius `{rounded.md}`, padding 96px 48px 0px.

### Link
`link`: black bold 48px headline text inside panels, the headline itself acting as a link.

## Design System Architecture

No public design system for telekom.com was confirmed. https://www.telekom.design/ was opened and describes the Deutsche Telekom Design & Customer Experience team (Barcelona, Berlin, Bonn, Budapest, Frankfurt/Darmstadt), not a token or component system, so no values are taken from it. The telekom.com page itself is assembled on Adobe Experience Manager (classes such as `aem-Grid`, `cmp-container`, `theme-dark`, and `etc.clientlibs/dxp` stylesheets) and defines a large, semantically named root-variable set that is the de-facto system: `--interaction-primary-primary-default-bg`, `--interaction-secondary-secondary-hover-bg`, `--background-inverted`, `--background-surface-lv-1`, `--typography-headline-lv-1`, `--border-border-radius-l`, `--spacing-interaction-button-padding-vertical-l`, `--font-font-size-h1` and `--colors-*` palettes (neutral 100 to 900, secondary pastels, functional red and success). Class and variable names show no `scale-` prefix, so the separately published Telekom Scale library was not found on this page and is not used as a source.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the logo button, large panels and a single emphasis word.
- Use white pill buttons with black bold labels, even on dark or magenta.
- Round every panel and photo at 24 to 42px.
- Pair dark frames with pastel panels for contrast.

**Don't**
- Don't put magenta text on magenta panels.
- Don't use shadows; separate blocks by tint and radius.
- Don't use light weights; measured text is 500 or 700.
- Don't use square corners.

## Responsive Behavior

At 390px the hero headline becomes 32px at weight 700 and 35px line height. Root variables define separate dashboard sizes, but the measured mobile roles show only headline and body. Buttons keep their 64px height at desktop.

## Iteration Guide

1. Start from `{colors.canvas}` black and place `{colors.surface-inverted}` pills and panels on it.
2. Add magenta only for brand moments; use white pills for actions.
3. Check every new radius against 6 / 24 / 32 / 42 / 9999px.
4. Use TeleNeo with the page's own fallback stack when the face is not available.
5. Take colors from the root variables listed above, not from memory.
