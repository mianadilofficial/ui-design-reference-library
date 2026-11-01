---
version: alpha
name: Angular
category: "Design Systems"
description: "Angular's documentation home (angular.dev) paired with the Angular Material component docs: a white canvas (#ffffff) with Inter and Inter Tight type (500 weight, 76.8px hero), a warm gray ink (#746e7c body, #151417 headings), a magenta-pink accent (#e90364) and 3-8px radii on the marketing site, while Material component pages measure Roboto 14px/500, a blue #005cbb primary and 9999px pill buttons."

colors:
  canvas: "#ffffff"
  ink: "#746e7c"
  primary: "#e90364"
  surface-card: "#f6f5f6"
  ink-strong: "#151417"
  ink-card: "#232125"
  ink-code-muted: "#6a737d"
  ink-code: "#24292e"
  ink-input: "#413e46"
  hairline: "#e4e3e6"
  nav-bg: "#ffffffb3"
  material-primary: "#005cbb"
  material-on-primary: "#ffffff"
  material-primary-container: "#d7e3ff"
  material-surface: "#faf9fd"
  material-on-surface: "#1a1b1f"
  material-outline: "#74777f"
  material-outline-variant: "#c4c6d0"
typography:
  display:
    fontFamily: "\"Inter Tight\", ui-sans-serif, system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 76.8px
    fontWeight: 500
  display-mobile:
    fontFamily: "\"Inter Tight\", ui-sans-serif, system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 48px
    fontWeight: 500
  subheading:
    fontFamily: "\"Inter Tight\", ui-sans-serif, system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 500
  body:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.14px"
  nav:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 22.4px
    letterSpacing: "-0.16px"
  link:
    fontFamily: "\"Inter Tight\", ui-sans-serif, system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 14px
    fontWeight: 500
  input:
    fontFamily: Arial
    fontSize: 16px
    fontWeight: 400
  material-button:
    fontFamily: Roboto
    fontSize: 14px
    fontWeight: 500
rounded:
  xs: 3px
  sm: 4px
  md: 8px
  lg: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 4.8px
  s4: 5.33px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15.2px
  s10: 16px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 10px
    height: 44px
    borderColor: "{colors.hairline}"
  link:
    backgroundColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 10px
    borderColor: "{colors.hairline}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    padding: 0px 0px 32px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 20px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-input}"
    typography: "{typography.input}"
    padding: 1px 2px
    height: 28px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-card}"
    rounded: "{rounded.md}"
    padding: 0px 8px 0px 0px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
  material-button-filled:
    backgroundColor: "{colors.material-primary}"
    textColor: "{colors.material-on-primary}"
    typography: "{typography.material-button}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 40px
  material-button-outlined:
    textColor: "{colors.material-primary}"
    typography: "{typography.material-button}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 40px
    borderColor: "{colors.material-outline}"
---

## Overview

This file covers two surfaces that the Angular project publishes. The captured page is the home of angular.dev (opened 2026-10-09 at 1280px and 390px): a white, airy documentation-marketing page with a left icon rail (Docs, Tutorials, Playground, Reference, a version selector "v22" and a search shortcut), a large two-line headline "Productivity Meets scalability", a feature tab strip (Signals, Control Flow, Deferrable Views, Hydration) and an interactive code sample with `component.ts` and `component.html` panels. The second surface is the Angular Material docs at https://material.angular.dev, where a Button overview page was measured to document the component library itself.

The marketing page is quiet and typographic. Inter Tight at weight 500 sets the headlines, Inter sets reading text, and DM Mono sets code. A faint field of slanted dashes in magenta and violet sits behind the hero, the only decorative element besides the small framed icons on the four feature cards. The Material pages, by contrast, use Roboto, a blue primary (`{colors.material-primary}` #005cbb), and fully rounded pill buttons.

**Key Characteristics:**
- White canvas (`{colors.canvas}` #ffffff), covering 87% of the capture, with cards on `{colors.surface-card}` #f6f5f6.
- Warm gray reading ink `{colors.ink}` #746e7c, with `{colors.ink-strong}` #151417 on headlines and the footer.
- A magenta-pink accent `{colors.primary}` #e90364 appears in text accents (inline code identifiers, the "Angular v22 is here!" banner text). Its use as button fill was not measured on this page.
- Inter Tight 500 headlines at 76.8px (48px at 390px), tight and light for such a large size.
- Small radii on the marketing site (3, 4, 8, 16px); full pills only on Material components.
- Hairline borders (`{colors.hairline}` #e4e3e6) instead of shadows.

## Colors

> **Source pages:** angular.dev home (`/`), material.angular.dev `/components/button/overview`.

### Brand & Accent
- **Angular Pink** (`{colors.primary}` #e90364): the most saturated measured accent on angular.dev, used in text. The page's root variables also define other accent hues (pinks, violets, a bright blue) used in gradients and syntax highlighting; only #e90364 is promoted here.
- **Material Primary** (`{colors.material-primary}` #005cbb): the measured `--mat-sys-primary` on the Material docs and the fill of filled buttons there. **Material Primary Container** (`{colors.material-primary-container}` #d7e3ff) fills tonal elements; **On Primary** (`{colors.material-on-primary}` #ffffff) is label color.

### Surface
- **Canvas** (`{colors.canvas}` #ffffff): page background of angular.dev.
- **Card** (`{colors.surface-card}` #f6f5f6): feature cards and the sample's list area.
- **Nav** (`{colors.nav-bg}` #ffffffb3): the translucent white left rail.
- **Material Surface** (`{colors.material-surface}` #faf9fd): the Material docs body background.

### Text
- **Ink** (`{colors.ink}` #746e7c): most-read text, mainly paragraph copy.
- **Ink Strong** (`{colors.ink-strong}` #151417): headlines.
- **Ink Card** (`{colors.ink-card}` #232125), **Ink Input** (`{colors.ink-input}` #413e46): card and input text.
- **Ink Code** (`{colors.ink-code}` #24292e) and **Ink Code Muted** (`{colors.ink-code-muted}` #6a737d): code panel text.
- **Material On Surface** (`{colors.material-on-surface}` #1a1b1f): text on Material pages.

### Borders
- **Hairline** (`{colors.hairline}` #e4e3e6): card and banner borders. **Material Outline** (`{colors.material-outline}` #74777f) borders outlined Material buttons; **Outline Variant** (`{colors.material-outline-variant}` #c4c6d0) borders the footer there.

## Typography

### Font Family
angular.dev loads Inter (400, 500, 600), Inter Tight (500, 600), DM Mono (400) and the Material Symbols Outlined icon font. The root variables `--inter-font`, `--inter-tight-font` and `--code-font` name them. The Material docs use Roboto.

### Hierarchy

| Token | Size | Weight | Use |
|---|---|---|---|
| `{typography.display}` | 76.8px | 500 | Hero headline (Inter Tight) |
| `{typography.display-mobile}` | 48px | 500 | Hero at 390px |
| `{typography.subheading}` | 16px | 500 | Small headings |
| `{typography.body}` | 16px / 24px, -0.14px tracking | 400 | Inter paragraphs |
| `{typography.nav}` | 14px / 22.4px, -0.16px | 500 | Navigation links |
| `{typography.link}` | 14px | 500 | Banner and links |
| `{typography.material-button}` | 14px | 500 | Material buttons (Roboto) |

### Principles
- Display headlines are medium weight, not bold; the size does the work.
- Slightly negative tracking on Inter body (-0.14px) keeps paragraphs compact.
- Code uses a separate mono family, never Inter.

## Layout

### Spacing System
Measured paddings and gaps: 1, 4, 4.8, 5.33, 6, 8, 10, 12, 15.2 and 16px (`{spacing.s1}` to `{spacing.s10}`). Root variables define `--layout-padding: 3.12rem`, `--primary-nav-width: 6.875rem`, `--secondary-nav-width: 16.25rem` and `--page-width: 80ch`.

### Grid & Container
Breakpoint variables are `--screen-xs` 700px, `--screen-sm` 775px, `--screen-md` 900px, `--screen-lg` 1200px, `--screen-xl` 1430px and `--screen-xxl` 1800px. The capture shows centered headlines, a two-column code sample, and four equal feature cards in a row.

### Whitespace Philosophy
Large vertical gaps separate a headline pair, a tab strip and a framed demo. Content is centered with a generous margin beside the rail.

## Elevation & Depth

Depth is flat: borders `{colors.hairline}` and tinted card fills. The only measured shadows are a 1px dark line with a 2px inner light ring and a blue glow, both on small controls. On Material pages, the nav link measures a three-layer shadow `rgba(0,0,0,0.2) 0 2px 1px -1px, rgba(0,0,0,0.14) 0 1px 1px 0, rgba(0,0,0,0.12) 0 1px 3px 0`.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 3px | Small inline chips |
| `{rounded.sm}` | 4px | Banner button |
| `{rounded.md}` | 8px | Cards |
| `{rounded.lg}` | 16px | Large containers |
| `{rounded.pill}` | 9999px | Material buttons (measured on material.angular.dev) |

### Imagery and microcopy
The capture shows no photography. Visuals are a field of slanted dashes in magenta and violet behind the hero, small outlined icons inside rounded squares on the feature cards, and syntax-highlighted code panels with a pale violet title strip ("component.ts", "component.html"). The voice is direct and developer-facing: "Features that actually help you solve problems", "Enabling you to build smarter and faster", with short button labels such as "Get Started" and "Learn more about signals".

## Components

### Buttons
**`button-secondary`** (angular.dev): white fill, `{typography.link}`, radius `{rounded.sm}`, padding 10px, height 44px, 1px `{colors.hairline}` border; it is the "Angular v22 is here! Explore what's new" banner link.

**`material-button-filled`** (material.angular.dev): fill `{colors.material-primary}`, text `{colors.material-on-primary}`, `{typography.material-button}`, radius `{rounded.pill}`, padding 0px 24px, height 40px.

**`material-button-outlined`**: no fill, text `{colors.material-primary}`, 1px `{colors.material-outline}` border, same geometry.

### Navigation
`nav`: translucent white rail, text `{colors.ink}`; links use `{typography.nav}` with 20px vertical padding.

### Cards
`card`: `{colors.surface-card}`, text `{colors.ink-card}`, radius `{rounded.md}`, hairline border.

### Inputs
`text-input`: white, text `{colors.ink-input}`, 16px, height 28px (the unstyled search field).

### Footer
White with `{colors.ink-strong}` text.

## Design System Architecture

Angular Material is Google's Material Design component library for Angular, described in its README at https://github.com/angular/components as "Material Design UI components for Angular applications", complemented by a CDK for custom components; docs live at https://material.angular.dev/. The angular.dev site does use part of it: its root variables include `--mat-tab-active-indicator-height`, `--mat-button-toggle-height`, `--mat-chip-label-text-color`, `--mat-snack-bar-container-color` and `--mat-tooltip-supporting-text-font`. The site's own look, however, comes from separate custom variables (`--primary-contrast`, `--vivid-pink`, `--french-violet`, `--page-width`, and others) written in oklch, so the Angular Material token set is documented here only from the Material docs page measurement.

On material.angular.dev the measured system variables follow the `--mat-sys-*` pattern (for example `--mat-sys-primary: #005cbb`, `--mat-sys-surface: #faf9fd`, `--mat-sys-outline: #74777f`). The theming guide page itself did not load enough text for citation, so no theming rules are claimed beyond these measured variables.

## Do's and Don'ts

**Do**
- Keep angular.dev headings at Inter Tight 500 and body in Inter.
- Use hairline borders and 8px card radii on marketing pages.
- Use pill buttons only for Material components.

**Don't**
- Don't mix the Material blue with the Angular pink on one surface.
- Don't use bold weights on display text.
- Don't add drop shadows to marketing cards.

## Responsive Behavior

The hero headline drops from 76.8px to 48px at 390px, both at weight 500, and body stays 16px. The icon rail is a left bar on desktop. Breakpoints come from the `--screen-*` variables listed above. Four-up feature cards are one row at 1280px.

## Iteration Guide

1. Start from white and `{colors.ink-strong}` headlines.
2. Use `{colors.primary}` only as an accent, not a fill, unless measured.
3. For Material surfaces, copy `--mat-sys-*` values from the measured page, not from memory.
4. Check radii against 3 / 4 / 8 / 16 / 9999px.
5. Keep code blocks in a mono family on a tinted panel.
