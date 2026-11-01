---
version: alpha
name: Web Awesome
category: "Design Systems"
description: "Web Awesome is an open source web-component library; its own site uses cera-round-pro headings at 52px/600, system sans body at 16px, a burnt-orange brand #cb4b27 on 6px-radius buttons, near-white #f1f2f3 bands and a #1b1d26 ink, while the docs default theme ships a blue #0071ec brand."
colors:
  canvas: "#ffffff"
  ink: "#1b1d26"
  primary: "#cb4b27"
  on-primary: "#ffffff"
  surface-subtle: "#f1f2f3"
  ink-secondary: "#545868"
  ink-code: "#abaeb9"
  hairline: "#e4e5e9"
  docs-brand-blue: "#0071ec"
  danger: "#dc3146"
  warning: "#b45f04"
  brand-dark: "#9d371a"
typography:
  display:
    fontFamily: cera-round-pro
    fontSize: 52px
    fontWeight: 600
    lineHeight: 62.4px
    letterSpacing: "-0.52px"
  display-mobile:
    fontFamily: cera-round-pro
    fontSize: 41px
    fontWeight: 600
    lineHeight: 49.2px
    letterSpacing: "-0.41px"
  subheading:
    fontFamily: cera-round-pro
    fontSize: 16px
    fontWeight: 600
    lineHeight: 19.2px
  body:
    fontFamily: ui-sans-serif, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: cera-round-pro
    fontSize: 16px
    fontWeight: 500
    lineHeight: 25.6px
  link:
    fontFamily: ui-sans-serif, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
rounded:
  xs: 3px
  sm: 6px
  md: 11px
  lg: 12px
  xl: 18px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3.94px
  s4: 4px
  s5: 4.5px
  s6: 6px
  s7: 6.56px
  s8: 7.5px
  s9: 8px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 43px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.brand-dark}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 16px 32px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-code}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.hairline}"
    boxShadow: oklab(0.183419 0.000630252 -0.0146985 / 0.12) 0px 2px 2px -1px
  footer:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.none}"
    padding: 40px 0px
---

## Overview

Measured at https://webawesome.com/ (title "Web Awesome", 1280px viewport) the homepage presents the product as "The Web's Open Source Design System", described on the page as "the biggest open source library of meticulously designed, highly customizable, and framework-agnostic UI components." The page is a product marketing site and a component demo at once. It opens on a centered hero over a faint line-art pattern of UI sketches (toggles, gear, search, avatar). Below the headline sit three buttons (Get Started, Components with a search affordance, View Source Code), a row of facts (Version 3.14.0, 50+ Components, 20+ Utilities, 10+ Themes), and a dark code block with copy-paste install lines.

Next is a light-grey dotted band titled "What's Included in Web Awesome?" with a three-by-three grid of white cards (UI Components, Theming, CSS Utilities, Page Layouts, Native Styles, Localization, Built for AI Agents, Design Patterns, Figma Design Kit), then "Simple Syntax. Powerful Components." with a live component preview. Small orange "Pro" pills mark paid items. The tone is friendly and playful ("Go Make Something Awesome", "put the PWN in components").

An important distinction found by measurement: the marketing site uses a custom orange brand, while the documentation's default theme uses blue. On the docs button page the brand button measured #0071ec; on the home page the brand scale value --wa-color-brand-50 is {colors.primary} (#cb4b27).

## Colors

The home page canvas is {colors.canvas} (#ffffff) with {colors.surface-subtle} (#f1f2f3) for the header strip, the feature band and the footer. Text is {colors.ink} (#1b1d26) with secondary text {colors.ink-secondary} (#545868). Borders and card outlines are {colors.hairline} (#e4e5e9). The brand action color is {colors.primary} (#cb4b27) with {colors.on-primary} (#ffffff) text; a darker brand shade {colors.brand-dark} (#9d371a) colors nav links. Code text on the dark editor panel uses {colors.ink-code} (#abaeb9). The dark code block fill measured #2f323f as a background area.

Docs button demos add measured semantic variants: {colors.docs-brand-blue} (#0071ec), {colors.danger} (#dc3146) and {colors.warning} (#b45f04), all with white text. The color-token documentation (https://webawesome.com/docs/tokens/color) describes ten hues with eleven tints each, five semantic variants (Brand, Neutral, Success, Warning, Danger) and a --wa-color-{variant}-{role}-{attention} naming scheme with fill, border and on roles at quiet, normal and loud levels.

## Typography

Headlines and buttons use cera-round-pro (loaded at 400, 500 and 700 on the page). Display ({typography.display}) is 52px, weight 600, 62.4px line height and -0.52px letter spacing; a mobile variant ({typography.display-mobile}) is 41px with -0.41px spacing. Subheadings ({typography.subheading}) are 16px at 600. Body text ({typography.body}) is the system stack ui-sans-serif, system-ui, sans-serif at 16px on a 25.6px line height; links and header text ({typography.link}) are 14px. Buttons ({typography.button}) are cera-round-pro 16px at 500. Code blocks use ui-monospace.

The typography documentation (https://webawesome.com/docs/tokens/typography) says the library's default families are system fonts, with separate body, heading, code and longform tokens, and a 1.125 size ratio with --wa-font-size-m as the base. cera-round-pro is a site-specific choice; the docs page measured system fonts for headings (--wa-font-family-heading ui-sans-serif).

Font substitutes: cera-round-pro is a proprietary commercial face; substitute a rounded geometric sans, or the system stack that the library itself defaults to.

## Layout

The hero is centered at a narrow measure, with the feature section on a three-column card grid with generous gutters, and each card holding an icon, a bold title and two or three lines of grey body copy. The page is 4368px tall at 1280px. Header padding, nav-link padding (16px 32px) and the footer padding (40px 0px) were measured. Spacing tokens extracted include {spacing.s4} (4px), {spacing.s9} (8px) and {spacing.s10} (12px). The component library's own spacing tokens (for example --wa-space-m = 1rem and --wa-space-s = 0.75rem) were read from root variables on the docs page.

## Elevation & Depth

Depth is soft and low. Cards use {colors.canvas} fill, a {colors.hairline} border and a very small shadow, measured as "oklab(0.183419 0.000630252 -0.0146985 / 0.12) 0px 2px 2px -1px". The library's shadow variables use a small negative spread and a tinted dark color (#101219 mixed into transparent). The dark code panel gives the strongest contrast on the page.

## Shapes

Rounded values measured: {rounded.xs} (3px, tooltips and form details), {rounded.sm} (6px, buttons), {rounded.md} (11px), {rounded.lg} (12px, cards, equal to --wa-border-radius-l of 0.75rem), {rounded.xl} (18px), {rounded.none} and {rounded.pill} (9999px, "Pro" tags). The library defines --wa-border-radius-s, -m and -l as 0.1875rem, 0.375rem and 0.75rem with a global --wa-border-radius-scale of 1. The generated tokens report the wa-button host element at radius 0px; the inner button measured 6px, which is the visible radius, so button-primary uses {rounded.sm}.

## Components

**button-primary**: {colors.primary} fill, {colors.on-primary} text, cera-round-pro 16px 500, 43px tall, 6px visible radius, with an icon before the label ("Get Started" with a rocket). The neighboring "Components" button is a dark filled button with a joined search icon, and "View Source Code" is a light grey button. **nav** is two stacked strips: a {colors.surface-subtle} top strip with the logo tab, a Try SSR toggle and icon buttons, and a white second row with links (Start, Components, Docs, Help, Pro, Create) and Login on the right. **card** is white, 12px radius, hairline border, subtle shadow. **footer** is {colors.surface-subtle} with {colors.ink-secondary} text, reading "Go Make Something Awesome" and "Version 3.14.0".

The docs page for buttons shows brand, danger and warning variants at 43px height and 16px/500 text, with form controls using --wa-form-control-border-color #9194a2 and a 0.375rem radius.

## Design System Architecture

Web Awesome is itself the design system: https://webawesome.com is the official site of the library, and the page shows it in use. Evidence of use: custom elements named wa-button and wa-card in the measured DOM, and 380 root variables prefixed --wa-, covering color, font, space, border-radius, shadow and form-control tokens. The documentation (https://webawesome.com/docs/tokens/color and https://webawesome.com/docs/tokens/typography) describes the token layers: palette, semantic variants, and themed element tokens. The copy on the home page lists "Theming" with light and dark modes, palettes and branding, so the site's orange brand is a theme choice (--wa-color-brand-50) rather than the library default. Components are native web components that work with any framework; styling is overridable through custom properties.

## Do's and Don'ts

- Do express colors through the variant and tint scale, not one-off hexes.
- Do keep buttons at 6px radius with 16px/500 labels.
- Do use {colors.primary} for the primary action and give secondary actions neutral fills.
- Do use soft 12px-radius white cards with hairline borders on a {colors.surface-subtle} band.
- Don't mix the docs blue {colors.docs-brand-blue} into pages that use the orange brand theme.
- Don't use heavy shadows; keep them to a small negative-spread blur.
- Don't use the proprietary cera-round-pro without a license; fall back to system fonts.

## Responsive Behavior

A mobile display size of 41px (against 52px on desktop) was measured, so headings scale down on narrow screens. No other responsive behavior was measured, so no breakpoint values or layout changes are claimed here; the library documentation was not opened for breakpoints.

## Iteration Guide

1. Choose a brand tint (here {colors.primary}) and derive hover and quiet fills with the library's tint and attention naming.
2. Keep text at {colors.ink} on {colors.canvas}; use {colors.ink-secondary} for support text.
3. Use cards at {rounded.lg} with {colors.hairline} borders.
4. Build buttons at 43px height with {rounded.sm} radius and weight 500.
5. Re-run measurements on the docs component pages before adding any new variant color.
