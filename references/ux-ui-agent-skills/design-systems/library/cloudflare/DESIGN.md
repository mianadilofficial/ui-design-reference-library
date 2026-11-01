---
version: alpha
name: Cloudflare
category: "Design Systems"
description: "Cloudflare's homepage sets FT Kunst Grotesk at weight 500 with tight negative tracking, floods the hero with a rounded Cloudflare-orange (#ff5e1f) panel carrying a white pill CTA, then drops to a near-white canvas of hairline-divided feature cells. It is built on Kumo, Cloudflare's open-source design system, whose docs run on Inter with 8px controls."

colors:
  canvas: "#ffffff"
  ink: "#262626"
  primary: "#ff5e1f"
  on-primary: "#ffffff"
  surface-soft: "#fdfdfc"
  ink-soft: "#363636b3"
  ink-muted: "#727272"
  hairline: "#f0f0f0"
  button-primary-border: "#ffffff1a"
  button-secondary-text: "#1f1f1f"
  brand-hover: "#ff7038"
  logo-tangerine: "#f6821f"
  logo-mango: "#fbad41"
typography:
  display:
    fontFamily: "\"FT Kunst Grotesk\", sans-serif"
    fontSize: 56px
    fontWeight: 500
    lineHeight: 55.44px
    letterSpacing: "-1.4px"
  display-mobile:
    fontFamily: "\"FT Kunst Grotesk\", sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 39.6px
    letterSpacing: "-1px"
  heading:
    fontFamily: "\"FT Kunst Grotesk\", sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: "-1.2px"
  subheading:
    fontFamily: "\"FT Kunst Grotesk\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 21.6px
    letterSpacing: "-0.45px"
  body:
    fontFamily: "\"FT Kunst Grotesk\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
    letterSpacing: "-0.04px"
  button:
    fontFamily: "\"FT Kunst Grotesk\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-0.28px"
  link:
    fontFamily: "\"FT Kunst Grotesk\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 1px
  sm: 3px
  md: 4px
  lg: 5px
  xl: 6px
  2xl: 8px
  3xl: 10px
  4xl: 12px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 6px 6px 6px 12px
    height: 34px
    borderColor: "{colors.button-primary-border}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 50px
    borderColor: "{colors.canvas}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 16px
  card:
    textColor: "{colors.ink-soft}"
    rounded: "{rounded.md}"
    padding: 12px 16px 16px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    padding: 0px 1px
---

## Overview

The Cloudflare homepage opens with a single saturated event: a large rounded panel filled with Cloudflare orange (`{colors.primary}`), inset a few pixels from the viewport edges and carrying a centred headline, two lines of sub-copy and one white pill button. A soft, pale glow rises from the bottom edge of the panel, and a fine dot grid texture sits across the fill. Everything after the panel returns to a quiet, almost-white page (`{colors.canvas}` with `{colors.surface-soft}` bands), where content is organised in hairline-ruled cells with small corner marks and dashed vertical guides, like a technical drawing.

The tone is engineering-confident: the hero headline states a scale claim, the following section is titled "Region: Earth" and illustrated with an orange dotted globe, and feature cells carry a line icon, a short bold title and one or two sentences of specifics (cities, milliseconds, percentages). The orange appears as the hero flood, the globe's dots, and the active tab underline; it is never used for body text.

**Key Characteristics:**
- One brand flood per page: the rounded orange hero, with white text and a white pill CTA.
- FT Kunst Grotesk at weight 500, with tracking tightened as size grows (-1.4px at the display size).
- Hairline ruled grids (`{colors.hairline}`) rather than shadows or filled cards.
- A mono companion, Apercu Mono Pro, is loaded on the page.
- The site's CSS variables carry the Kumo design-system names (`--color-kumo-brand`, `--color-kumo-hairline`), so the marketing site and the product UI share a token vocabulary.

## Colors

`{colors.primary}` is Cloudflare orange, with `{colors.on-primary}` white on it. It is also exposed as `--color-kumo-brand` and `--text-color-kumo-brand`, and its hover step is `{colors.brand-hover}`, also measured on the site as `--color-kumo-brand-hover`. The page text colour is `{colors.ink}` (a soft near-black, not pure black); secondary text steps down to `{colors.ink-soft}` and `{colors.ink-muted}`. Surfaces are `{colors.canvas}` white and `{colors.surface-soft}`, a barely warm off-white, divided by `{colors.hairline}`. `{colors.button-secondary-text}` is the near-black label colour on the white hero pill, and `{colors.button-primary-border}` is the faint white edge on the orange button.

Cloudflare's logo page ([cloudflare.com/brand/logo](https://www.cloudflare.com/brand/logo)) specifies the logomark colours Tangerine (`{colors.logo-tangerine}`) and Mango (`{colors.logo-mango}`) with a black logotype. These are logo colours, not the hero orange; the live page's flood is `{colors.primary}`.

In the Kumo system the semantic colours (success, warning, danger, info) are defined with CSS `light-dark()` so one token resolves differently in light and dark mode; the homepage ships these variables but the captured page shows none of them in use.

## Typography

The family is "FT Kunst Grotesk" (loaded at 400 and 500) with `Apercu Mono Pro` (400) for mono. FT Kunst Grotesk is a commercial face; where it is unavailable, fall back to a neutral grotesque such as Inter, which the Kumo docs and the logo guidelines both use.

- **Display (`{typography.display}`)**: 56px, weight 500, line-height 55.44px, tracking -1.4px: the hero headline, set at near 1.0 line-height.
- **Display mobile (`{typography.display-mobile}`)**: 40px, weight 600, tracking -1px.
- **Heading (`{typography.heading}`)**: 48px, weight 500, line-height 48px, tracking -1.2px, used for section titles such as "Region: Earth".
- **Subheading (`{typography.subheading}`)**: 18px, weight 500, tracking -0.45px.
- **Body (`{typography.body}`)**: 16px, weight 400, line-height 19.2px.
- **Button (`{typography.button}`)**: 14px, weight 400; **link (`{typography.link}`)**: 16px, weight 500, used on the large white pill.

Line-heights are close to 1.0–1.2, so paragraphs look compact; spacing, not leading, separates blocks.

## Layout

The page is a centred column with a wide container; the orange hero panel is inset slightly from the viewport rather than bleeding to it. Below, sections are centred: a heading, a one-line subtitle, then a large illustration or a three-column grid of cells separated by hairlines. Dashed vertical guide lines run down both sides of the content column, and tiny square corner marks sit at the grid's corners. The navigation is a thin white bar with the logo left, menu items (Products, Solutions, Resources, Pricing) with chevrons, and a right cluster: "Under attack?", outlined "Login" and "Contact sales" pills, and a search icon.

Spacing is a fine 1–18px scale in the tokens (`{spacing.s1}` 1px up to `{spacing.s10}` 18px), reflecting dense control padding such as 6px 6px 6px 12px on the compact orange button and 12px 24px on the large white pill.

## Elevation & Depth

The page is nearly flat. Measured shadows are barely visible: layered `rgba(0, 0, 0, 0.02–0.03)` drops (for example `0px 4px 12px`) and an inset white highlight on the orange button. The hero's depth comes from the glow at its lower edge and from orange-tinted shadows (`rgba(255, 80, 10, 0.06) 0px 4px 60px`) on feature media. Structure is drawn with `{colors.hairline}` borders rather than elevation.

## Shapes

The radius scale is fine-grained: `{rounded.xs}` 1px, `{rounded.sm}` 3px, `{rounded.md}` 4px, `{rounded.lg}` 5px, `{rounded.xl}` 6px, `{rounded.2xl}` 8px, `{rounded.3xl}` 10px, `{rounded.4xl}` 12px and `{rounded.pill}`. Large call-to-action buttons and the announcement chip are full pills; the compact orange button and controls are `{rounded.2xl}`; cards use `{rounded.md}`.

## Components

**button-primary** — compact orange button: `{colors.primary}` fill, white text, `{typography.button}`, `{rounded.2xl}`, padding 6px 6px 6px 12px, height 34px, with a `{colors.button-primary-border}` edge.

**button-secondary** — the hero's white pill "Start building for free": `{colors.canvas}` fill, `{colors.button-secondary-text}` text, `{typography.link}`, `{rounded.pill}`, padding 12px 24px, height 50px.

**nav-link** — `{colors.ink}` text in `{typography.body}`, `{rounded.xl}`, 16px padding. **card** — `{colors.ink-soft}` text, `{rounded.md}`, padding 12px 16px 16px, `{colors.hairline}` border. **footer** — white, `{colors.ink-muted}` text.

The announcement chip above the headline is an orange pill with a thin translucent white outline that strengthens on hover (measured border alpha rising), ending in a white circular arrow.

## Design System Architecture

Cloudflare publishes its design system as **Kumo**: [kumo-ui.com](https://kumo-ui.com) is the documentation site (it identifies itself as `@cloudflare/kumo`, with a link to the [cloudflare/kumo](https://github.com/cloudflare/kumo) GitHub repository). The README describes it as "Cloudflare's component library for building modern web applications", built on Base UI, MIT-licensed, with a CLI and a Figma plugin. The colour page ([kumo-ui.com/colors](https://kumo-ui.com/colors)) documents semantic tokens "named by role, not by hue": text tokens (default, strong, subtle, inactive, placeholder, inverse, link, info, success, warning, danger, brand), six surface tokens (canvas, base, elevated, recessed, tint, contrast), status colours with tint variants, `kumo-hairline` and `kumo-line` for borders, all resolved through CSS `light-dark()`, and a `data-theme` switch with `kumo` and `fedramp` themes.

The Button page ([kumo-ui.com/components/button](https://kumo-ui.com/components/button)) lists variants primary, secondary, ghost, destructive, outline and secondary destructive, sizes xs, sm, base and lg, and shapes base, square and circle. I measured that page: buttons are 36px tall, 14px Inter at weight 500, with an 8px radius, and the docs themselves are set in Inter. The marketing homepage, in contrast, uses FT Kunst Grotesk and a brand token overridden to orange: its `--font-sans` is FT Kunst Grotesk while `--color-kumo-brand` is `{colors.primary}`. A Cloudflare blog post confirms the intent: its Kumo-based rebuild aims at "visual and structural consistency between the Cloudflare homepage, dashboard, and marketing sites" ([blog.cloudflare.com](https://blog.cloudflare.com/cloudflare-blog-uses-emdash/)).

In the docs capture, the primary button measured light blue (#619eff) while the homepage brand is orange; the docs describe a blue `bg-kumo-brand` default (oklch 0.5772 0.2324 260). So Kumo's default brand is blue and the marketing site re-skins it with orange.

## Do's and Don'ts

- Do use one orange flood per page and put white text and a white pill CTA on it.
- Do set display type at weight 500 with negative tracking; don't switch to bold.
- Do draw structure with `{colors.hairline}` rules and corner marks; don't add heavy shadows.
- Do keep copy specific: numbers, cities, milliseconds.
- Don't use black logo on orange backgrounds (the logo page prohibits it) or recolour the flare.
- Don't use orange for body text or long runs of links.
- Don't mix the docs' Inter and the marketing site's FT Kunst Grotesk on one page.

## Responsive Behavior

The phone viewport measurement (390px) shows the headline stepping from `{typography.display}` to `{typography.display-mobile}` at 40px, with weight rising to 600 and line-height staying near 1.0. Grid cells and the navigation behaviour at narrow widths were not captured; they are left unspecified here.

## Iteration Guide

1. Begin with white `{colors.canvas}` and hairline-ruled cells; add the orange panel last, once.
2. Use `{rounded.pill}` for hero CTAs and `{rounded.2xl}` for compact controls.
3. Keep every heading at weight 500 and tighten tracking in proportion to size.
4. For product UI, follow Kumo's semantic tokens from kumo-ui.com rather than raw hex values.
5. Verify new values against the live page or the Kumo docs before adding a token.
