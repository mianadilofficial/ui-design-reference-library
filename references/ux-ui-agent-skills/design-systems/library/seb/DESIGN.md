---
version: alpha
name: SEB
category: "Design Systems"
description: "SEB (Skandinaviska Enskilda Banken) group website built on SEB's Green Design System: the proprietary SEB SansSerif at weight 450, a near-black #0a0b0b ink on white, a single deep forest green #003824 for the primary pill button and hero panel, warm-grey #f7f8f7 cards with 12px radius, a #1a1a1a footer, and semantic red, green, blue and amber for market and status data."

colors:
  canvas: "#ffffff"
  page-body: "#eeeeee"
  ink: "#0a0b0b"
  ink-muted: "#636967"
  ink-on-dark: "#dedede"
  primary: "#003824"
  on-primary: "#ffffff"
  brand-gold: "#685631"
  surface-card: "#f7f8f7"
  surface-warm: "#f8f6f1"
  surface-dark: "#1a1a1a"
  footer-border: "#333333"
  border-subtle: "#dfe1e1"
  negative: "#b92f13"
  positive: "#027839"
  notice: "#005fb3"
  warning: "#8f530a"

typography:
  display:
    fontFamily: "\"SEB SansSerif\", \"SEB SansSerif GDS\", SEBSansSerif"
    fontSize: 48px
    fontWeight: 450
    lineHeight: 56px
  display-mobile:
    fontFamily: "\"SEB SansSerif\", \"SEB SansSerif GDS\", SEBSansSerif"
    fontSize: 32px
    fontWeight: 450
    lineHeight: 38px
  heading:
    fontFamily: "\"SEB SansSerif\", \"SEB SansSerif GDS\", SEBSansSerif"
    fontSize: 28px
    fontWeight: 450
    lineHeight: 34px
  body:
    fontFamily: "\"SEB SansSerif\", \"SEB SansSerif GDS\", SEBSansSerif"
    fontSize: 24px
    fontWeight: 450
    lineHeight: 32px
  body-card:
    fontFamily: "\"SEB SansSerif\", \"SEB SansSerif GDS\", SEBSansSerif"
    fontSize: 20px
    fontWeight: 450
    lineHeight: 26px
  button:
    fontFamily: "\"SEB SansSerif\", \"SEB SansSerif GDS\", SEBSansSerif"
    fontSize: 16px
    fontWeight: 450
    lineHeight: 20px
  nav:
    fontFamily: "\"SEB SansSerif\", \"SEB SansSerif GDS\", SEBSansSerif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 18px
  link:
    fontFamily: "\"SEB SansSerif\", \"SEB SansSerif GDS\", SEBSansSerif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px

rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 22.22px
  xxl: 26.67px
  none: 0px
  pill: 9999px

spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 8.8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 40px
  button-negative:
    backgroundColor: "{colors.negative}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 40px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.body-card}"
    rounded: "{rounded.md}"
    padding: 16px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 32px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 1px 20px 0px, rgb(248, 248, 248) 0px -1px 0px 0px inset
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    borderColor: "{colors.footer-border}"
---

## Overview

The captured sebgroup.com homepage (measured 1280px desktop and 390px mobile) reads as an editorial financial-information page, not a product storefront. A white header holds, left to right, "Menu" with a hamburger icon, the centered S|E|B wordmark, "Search", "Language" and an outlined "Log in" button with a lock icon, over a soft shadow (`rgba(0, 0, 0, 0.15) 0px 1px 20px 0px`). The hero is a two-column block: at left the headline "That's what banks are for" (48px, weight 450), the sentence "How we create value for our customers and society at large." and a forest-green pill button, "Our role in society and the economy"; at right a large rounded panel in `{colors.primary}` #003824 holding a white line drawing of a classical bank building with two trees.

Beneath the hero a hairline-bordered ticker shows "The share", a timestamp, and two quotes: "SEB A: 223.60 -1.06%" and "SEB C: 227.50 -1.09%", with the declines in `{colors.negative}` (#b92f13) and a circular arrow icon, plus an underlined link "Share price graph". Then a "News and insights" carousel (arrow buttons at the left of the heading, "All news articles and press releases" at the right) of portrait-photo cards with date, headline and an arrow; an "Our offerings, services and opportunities" grid mixing photo cards that carry a white text panel, grey text cards (Investing in SEB, Our financial calendar and events) and a 2×3 matrix of icon tiles (Swap rates, Interim reports, Our open positions, Our purpose, SEB Research portal, Podcasts); and a final section "Stay informed through our experts' perspectives" with three podcast and article cards. Copy is English, sentence case, plain and declarative.

**Key Characteristics:**
- A single typeface, **SEB SansSerif**, set at an unusual weight 450 ("book") for almost everything, with 400 for links and 500 for navigation.
- Near-black `{colors.ink}` (#0a0b0b) on white, a forest-green accent `{colors.primary}` used for exactly one thing per view (the hero panel and its pill CTA).
- Warm-grey `{colors.surface-card}` (#f7f8f7) card surfaces on white rather than outlines or heavy shadows.
- Photography of people in natural settings with a soft, desaturated treatment; line illustration on green for institutional messages.
- Status colors only where data demands them: red for the falling share price, green, blue and amber in the design system's alert set.
- Generous whitespace: section gaps of 64px and more, with 16px and 24px gutters inside card grids.

## Colors

> **Source pages:** `https://sebgroup.com/` (extracted at 1280px), the site's `:root` `--gds-sys-*` custom properties, and the Green Storybook button and card stories (`storybook.seb.io`) measured with the extractor.

### Brand & Accent
- **Forest green** (`{colors.primary}` — #003824): `--gds-sys-color-l1-brand-01`, `--gds-sys-color-l3-brand-01` and `--gds-sys-color-content-brand-01`. It fills the hero panel and the primary pill button; the same green is the "Brand" button variant in Green.
- **Brand gold** (`{colors.brand-gold}` — #685631): `--gds-sys-color-content-brand-02`, used as text color in Green's brand-toned cards.
- **Warm surface** (`{colors.surface-warm}` — #f8f6f1): a card-variant background measured in the Storybook card story, next to the gold text.

### Surface
- **Canvas** (`{colors.canvas}` — #ffffff): the dominant on-screen background.
- **Page body** (`{colors.page-body}` — #eeeeee): the computed background of the `<body>` element; white sections cover it, so it is not visible in the capture.
- **Card** (`{colors.surface-card}` — #f7f8f7): `--gds-sys-color-l2-neutral-01`; the offering and news text cards.
- **Dark** (`{colors.surface-dark}` — #1a1a1a): a dark background measured at 161 area-weight on the page; it is below the visible part of the capture, so its exact element is not described. The footer is outlined with a 1px `{colors.footer-border}` (#333333) border.
- **Subtle border** (`{colors.border-subtle}` — #dfe1e1): `--gds-sys-color-border-neutral-02`; hairlines such as the ticker rules.

### Text
- **Ink** (`{colors.ink}` — #0a0b0b): 2101 character weight, the dominant text color.
- **Ink muted** (`{colors.ink-muted}` — #636967): the timestamp and secondary copy (`--gds-sys-color-content-neutral-02`).
- **Ink on dark** (`{colors.ink-on-dark}` — #dedede): light text measured at 41 character-weight, for use on `{colors.surface-dark}`.
- **On primary** (`{colors.on-primary}` — #ffffff).

### Semantic
Green's tokens pair each state with a strong color and a subtle fill: `{colors.negative}` #b92f13 (subtle #fdebe8), `{colors.positive}` #027839, `{colors.notice}` #005fb3 (`--gds-sys-color-border-notice-01`) and `{colors.warning}` #8f530a (`--gds-sys-color-border-warning-01`). In the Storybook button ranks story the measured fills are #003824, #027839, #b92f13, #005fb3, #8f530a and #0a0b0b; on the homepage only `{colors.negative}` is visible, in the share ticker.

## Typography

### Font Family
Every measured character is **SEB SansSerif**, loaded as `SEB SansSerif` at 400, 450 and 500 normal plus 450 italic, with fallbacks `SEB SansSerif GDS` and `SEBSansSerif`; it is SEB's proprietary primary font, distributed to its teams through the `@sebgroup/fonts` package ("SEBs primary font SEB SansSerif" in the Green README). As a substitute outside SEB, a neutral grotesque such as Inter at weight 400 to 500 approximates the rhythm; the weight 450 has no standard equivalent.

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display}` | 48px | 450 | 56px | Hero headline |
| `{typography.display-mobile}` | 32px | 450 | 38px | Hero headline at 390px |
| `{typography.heading}` | 28px | 450 | 34px | Section headings |
| `{typography.body}` | 24px | 450 | 32px | Hero lead sentence |
| `{typography.body-card}` | 20px | 450 | 26px | Card text (815 character weight, the most common size) |
| `{typography.button}` | 16px | 450 | 20px | Button label |
| `{typography.nav}` | 16px | 500 | 18px | Header menu items |
| `{typography.link}` | 18px | 400 | 20px | Footer and inline links |

### Principles
- **Weight 450 is the voice.** The site's `--gds-sys-text-weight-book` is 450; it is slightly heavier than regular without reading as medium.
- **No letter-spacing and no uppercase.** The measured data has no tracking values and every role reports `text-transform: none`.
- **Rem-based scale.** The root variables name the scale in rem (for example `--gds-sys-text-heading-xl: 450 2rem/2.375rem`, `--gds-sys-text-display-s: 450 2.25rem/2.75rem`, `--gds-sys-text-preamble-l: 450 1.5rem/2rem`), which resolve to the pixel sizes above at a 16px root.

## Layout

### Spacing System
Green's space tokens run 1, 2, 4, 6, 8, 12, 16, 20, 24, 32, 40, 48, 64, 80, 96, 112 and 120px (`--gds-sys-space-5xs` to `-9xl`). Measured homepage gaps are 4px (42 weight), 16px, 24px, 8px, 6px and 12px; paddings are 8px, 16px, 24px, 4px, 32px and 48px; the site adds `--pw-block-area-gap: 2rem`, `--pw-container-padding-inline: 1rem` and `--pw-container-padding-block: 1.25rem`.

### Grid & Container
In the capture, content starts about 48px from the left edge of the 1280px viewport. The offerings section is a four-track grid: two photo cards, one text-card column and one two-wide icon-tile matrix. Green also ships a "declarative layout" primitive (`<gds-div margin="m">`) that expresses spacing, grids and sizing as attributes instead of utility classes.

### Whitespace Philosophy
Sections are separated by large empty bands, and the page uses light dividers (the ticker) rather than color changes to separate content.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Cards, hero panel |
| 1 | `rgba(0, 0, 0, 0.15) 0px 1px 20px 0px, rgb(248, 248, 248) 0px -1px 0px 0px inset` | Header |
| Tokens | `0px 4px 6px -2px rgba(10, 11, 10, 0.08)` (`shadow-l-01`) up to `0px 24px 48px -12px rgba(10, 11, 10, 0.18)` (`shadow-2xl-01`) | Declared in Green; not visible on the measured page |

Depth otherwise comes from the grey-on-white card tint and from photography.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | Links, small chips |
| `{rounded.sm}` | 8px | Compact elements |
| `{rounded.md}` | 12px | Cards (Green `radius-s`) |
| `{rounded.lg}` | 16px | Larger cards (Green `radius-m`) |
| `{rounded.xl}` | 22.22px | Measured on larger media blocks |
| `{rounded.xxl}` | 26.67px | Measured on the inner button element of the primary pill |
| `{rounded.none}` | 0px | Header, footer, host elements |
| `{rounded.pill}` | 9999px | Buttons and arrow circles (Green `radius-max` 999px) |

The custom-element hosts such as `gds-button` report 0px radius; the rounding is applied to the inner `<button>` (26.67px and 999px both appear in the Storybook measurement), which is why `button-primary` uses `{rounded.pill}`.

## Components

### Buttons
**`button-primary`**: `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}` 16px/450, padding `12px 20px`, 40px tall, pill-shaped. The Green button page says to "use only one primary action in each context." Variants are Neutral, Brand, Negative and Notice, each in Primary, Secondary and Tertiary ranks, plus icon, split and next/back buttons and four sizes (XS, Small, Medium, Large). **`button-negative`**: the `{colors.negative}` fill measured in the Storybook ranks story.

### Cards
**`card`**: `{colors.surface-card}` fill, 12px radius, 16px padding on the homepage (24px in the Storybook card story), text at `{typography.body-card}`, no border or shadow. Photo cards put a white inset text panel with a trailing arrow over the image.

### Navigation and footer
**`nav`**: white, `0px 32px` padding, 16px/500 labels. The outlined "Log in" button is the only bordered control. **`footer`**: text in `{colors.ink}` at 18px, outlined by a 1px `{colors.footer-border}` border; the extracted footer element reports no background fill.

## Design System Architecture

SEB's system is the **Green Design System**. The documentation site https://seb.io describes it as "built to support creation of beautiful, consistent and accessible financial products for generations to come," with sections for Components, Prefabs, Patterns, Design direction, Primitives (Icons, Tokens, Declarative layout, Spacings), UX writing and Accessibility, and links to Figma, a Storybook (https://storybook.seb.io) and the repository https://github.com/seb-oss/green. The README lists packages: `@sebgroup/green-core` (a Lit-based web component library), `green-react`, `green-angular`, `@sebgroup/chlorophyll` (styling framework), `@sebgroup/green-tokens`, charts packages and `@sebgroup/fonts`, under an Apache 2.0 license. At the time of reading the repository carried a banner saying it was archived by its owner on 15 September 2026 and is read-only.

The shipped homepage confirms use: its markup contains `gds-button-pw`, `gds-theme-pw` and `gds-icon-*-pw` custom elements and its `:root` declares 272 variables, mostly `--gds-sys-*` (color layers `l1`, `l2`, `l3`, content, border and state tokens; a radius scale from 1px to 64px plus `max` 999px; a space scale; text and shadow scales). The listed Design Library at https://designlibrary.sebgroup.com is SEB's earlier documentation: its home page says it covers "the 2016 design version", its About page says it was started in 2017, that SEB began building the complete Green system in 2022, that Green released a new design version at seb.io in 2025, and that the Design Library is now in legacy mode. For that reason the Design Library was read for history only and the current Green site and the live homepage tokens were used for values.

## Do's and Don'ts

### Do
- Use SEB SansSerif at 450 for body and headings; reserve 500 for navigation.
- Use `{colors.primary}` green for one primary action and one hero panel per view.
- Put content on `{colors.canvas}` and group it in `{colors.surface-card}` cards with 12px radius.
- Show decreases in `{colors.negative}` with an icon, not color alone.
- Write sentence-case, plain English labels.

### Don't
- Don't add a second brand hue; extra accents come only from the semantic set.
- Don't uppercase labels or add letter-spacing.
- Don't round the host element of a button; the pill belongs to the inner button.
- Don't put heavy shadows on cards; the system uses tint.
- Don't use the legacy Design Library's 2016 visuals as current guidance.

## Responsive Behavior

At 390px the hero headline steps from `{typography.display}` (48px/56px) to `{typography.display-mobile}` (32px/38px) in the same weight; the mobile text sizes measured are 12, 14, 16, 18, 20, 24 and 32px, and no layout changes beyond the headline are claimed. The site's container padding variables are 1rem inline and 1.25rem block, and the Green button page lists four sizes (XS, Small, Medium, Large) and a mobile-device placement section. In the 1280px capture the news carousel is clipped at the right edge, signalling horizontal scroll.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.ink}` and SEB SansSerif 450.
2. Add one `{colors.primary}` pill button per context at 16px/450, `12px 20px`.
3. Group content in 12px-radius `{colors.surface-card}` cards with 16px or 24px padding.
4. Use semantic colors only for data states; keep brand green for brand moments.
5. Re-run `node web/scripts/verify-designs.mjs --slug=seb` after edits.
