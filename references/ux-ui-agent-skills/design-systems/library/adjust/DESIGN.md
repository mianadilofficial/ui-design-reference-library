---
version: alpha
name: Adjust
category: "Design Systems"
description: "Adjust's marketing site and Atlas design system — a deep navy (#04182b) hero giving way to white and pale-blue (#f2faff) sections, set in TT Norms Pro (48px bold display, 21px body), with a vivid #005ff7 blue and 48px pill-shaped buttons; the product UI in Atlas uses system fonts, a #255eee primary and 4-8px radii."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#005ff7"
  on-primary: "#ffffff"
  surface-pale-blue: "#f2faff"
  surface-navy: "#04182b"
  ink-periwinkle: "#8c97c4"
  blue-deep: "#002a9e"
  teal: "#09bb9f"
  purple: "#a964f9"
  atlas-primary: "#255eee"
  atlas-primary-hover: "#1944c3"
  atlas-primary-active: "#1237ae"
  atlas-neutral-20: "#eceef4"
  atlas-neutral-80: "#6e7492"
  atlas-negative: "#f84d79"
typography:
  display:
    fontFamily: TTNormsPro, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", Sarabun, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: TTNormsPro, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", Sarabun, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 38px
    letterSpacing: "-1px"
  heading:
    fontFamily: TTNormsPro, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", Sarabun, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 45px
    letterSpacing: "-0.17px"
  subheading:
    fontFamily: TTNormsPro, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", Sarabun, sans-serif
    fontSize: 21px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: TTNormsPro, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", Sarabun, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: TTNormsPro, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button-secondary:
    fontFamily: TTNormsPro, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 16px
  pill: 9999px
  atlas-small: 4px
  atlas-large: 8px
spacing:
  s1: 8px
  s2: 12px
  s3: 14px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
  s8: 48px
  s9: 72px
  s10: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14px 12px 14px 24px
    height: 48px
    borderColor: "{colors.primary}"
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 12px
    height: 44px
  button-outline:
    textColor: "{colors.surface-navy}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14px 12px 14px 24px
    borderColor: "{colors.surface-navy}"
  nav:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
---

## Overview

adjust.com presents a mobile-measurement and analytics suite as a confident enterprise product in a friendly, rounded visual language. The capture opens with a vivid blue announcement strip ("Out now! Shopping app insights report: 2026 edition. Get the latest data and benchmarks" with a close button), then a navy navigation bar with the ADJUST wordmark, centred text links (Products, Solutions, Why Adjust, Pricing, Resources), a search icon, "Log In" and an outlined white pill "Request a demo >". The hero is on #04182b: a centred 48px white headline "Accelerate your app's growth", two short lines of light supporting copy, a solid blue pill "Request a demo >" and a text link "Learn more >". Directly beneath, a large browser-window mock-up of the analytics dashboard (bar chart, cohort table, line chart) straddles the boundary between the navy hero and the white page.

The next section is a centred 36px bold heading, "Everything you need in one measurement and analytics suite", followed by alternating two-column feature rows, each with an h3-style title, a short paragraph, an outlined navy "Learn more >" pill and a photograph with a floating UI card overlapping it (a chart widget, a chat prompt, a push notification, a masked password pill). Photos are people using phones and laptops, cropped to rounded rectangles of 16px radius.

The voice is straightforward and benefit-led: "Attribution and optimization", "AI and automation", "Deep linking and user engagement", "Fraud prevention and security". The page alternates navy, white and a pale blue (#f2faff) section tint, with a lot of air between rows.

## Colors

- **Primary #005ff7** is the CTA blue (the stylesheet's `--blue-400`, rgb 0,95,247). It fills the "Request a demo" pill, the announcement strip and accent chips.
- **Surface-navy #04182b** is the hero, nav and dark-section background, and the outline colour of the "Learn more" pills on white. **Surface-pale-blue #f2faff** is the tinted section background. **Canvas #ffffff** is the main light surface; **ink #000000** is the body text colour (the most-read colour on light sections).
- **Ink-periwinkle #8c97c4** is a muted lavender-grey text colour measured on the page (its exact placement was not itemised).
- **Blue-deep #002a9e** (`--blue-500`), **teal #09bb9f** (`--green-400`) and **purple #a964f9** (`--purple-400`) come from the stylesheet's colour variables and appear in the dashboard illustrations (teal and blue bars, purple bars and lines); the stylesheet also defines green, purple and rose ramps (50 to 600) for illustration use.
- **Atlas colours.** Adjust's product design system, Atlas, publishes a different, more neutral-led palette: primary scale from #f3f7fe (5) through #255eee (80) and #1f51d9 (90) to #020c21 (160), and a neutral scale from #f9fafc (5) to #0b0d18 (160). Its primary button uses **atlas-primary #255eee**, hover **#1944c3**, active **#1237ae**; borders sit at **atlas-neutral-20 #eceef4**, secondary text at **atlas-neutral-80 #6e7492** and error states at **atlas-negative #f84d79** (https://atlas.adeven.com/docs/design-tokens/overview). Atlas's colour page limits the UI to Neutral, Primary, Negative, Positive and Warning families in 17 shades each plus a keyboard-focus colour (#1a62ff), and says to never mix chromatic families with each other, only with neutral, and to avoid transparency (https://atlas.adeven.com/docs/foundation/design-language/color).

## Typography

The marketing site uses TT Norms Pro (400, 500, 700, plus 300 loaded) with a CJK-aware fallback chain: Noto Sans JP, Noto Sans KR, Noto Sans SC and Sarabun (a Thai font), then generic sans-serif, which fits Adjust's multilingual audience.

| Role | Size / line | Weight | Tracking |
|---|---|---|---|
| display (hero h1) | 48px / 56px | 700 | -1px |
| display-mobile | 30px / 38px | 700 | -1px |
| heading (section h2) | 36px / 45px | 700 | -0.17px |
| subheading (feature title) | 21px / 28px | 700 | none |
| body | 21px / 28px | 400 | none |
| button | 16px / 24px | 500 | none |
| button-secondary, nav | 16px / 24px | 400 | none |

Body copy is large (21px, the most-read size by characters, followed by 18px, 16px and 14px), set in black on white. Titles are bold and tightly tracked; buttons are medium weight.

Atlas typography is explicitly different: "all text is rendered in system fonts", San Francisco on Apple devices and Arial elsewhere, with a scale "limited to five font sizes (including line height and letter spacing) in three weights", sizes in multiples of 2px and line heights in multiples of 4px; normal weight for copy, medium for buttons and controls and bold for some headings (https://atlas.adeven.com/docs/foundation/design-language/typography). Its token `FontFamilySystem` is `BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Arial, sans-serif`.

**Font substitutes.** TT Norms Pro is a commercial typeface. A geometric humanist sans such as Figtree, Plus Jakarta Sans or Inter is a reasonable stand-in; keep the 700 weight for headings.

## Layout

The hero is centred on a narrow column and the dashboard mock-up is a centred panel, the page then settles into a two-column feature grid with text on one side and a rounded image on the other, alternating left and right. Measured spacing values on the page are 8, 12, 14, 16, 24, 32, 40, 48, 72 and 96px. Atlas's own spacing rule is an 8px grid with 4px for higher precision, with every line height a multiple of 4px (https://atlas.adeven.com/docs/foundation/design-language/spacing), and its breakpoint tokens define gutters of 8, 12, 16 and 24px, margins of 16, 24 and 32px, and widths from 480px to 1400px (https://atlas.adeven.com/docs/design-tokens/overview).

## Elevation & Depth

The marketing site is largely flat. Cards carry the faintest shadow, `rgba(0,0,0,0.05) 0 1px 2px`, and depth comes from overlapping layers: the dashboard window crossing the hero edge, floating UI cards over photographs, and colour-block sections. Atlas defines five elevation levels, from `0 1px 4px 0 rgba(110, 116, 146, 0.25)` (level 1) to a three-layer `0 4px 32px 0 rgba(110, 116, 146, 0.15), 0 4px 56px 0 rgba(110, 116, 146, 0.15), 0 2px 8px 0 rgba(110, 116, 146, 0.1)` (level 5), all tinted with the neutral-80 hue (https://atlas.adeven.com/docs/design-tokens/overview).

## Shapes

Buttons are full pills (9999px). Images, panels and feature cards are rounded at 16px; the dashboard window is a rounded rectangle with a tab-bar header. Atlas's radius tokens are smaller and more utilitarian: 2px (x-small), 4px (small), 6px (medium), 8px (large) and 12px (x-large). Icons are simple line glyphs; arrows appear as a ">" chevron inside buttons.

## Components

**Primary button.** Solid #005ff7, white 16px medium label, pill, 48px tall, padding 14px 12px 14px 24px (the extra left padding makes room for a trailing chevron icon). Used for "Request a demo".

**Outline button.** Transparent with a navy (#04182b) border, navy label, same geometry on white; on the navy hero the outline and label turn white ("Request a demo" in the nav, "Learn more"). Used for "Learn more >" on every feature row.

**Text link button.** White "Learn more >" with a chevron beside the hero CTA, 16px regular.

**Navigation.** Navy bar, white 16px regular links, search icon, "Log In", outlined pill CTA.

**Announcement strip.** Full-width blue strip with 14 to 16px white text and a close icon.

**Feature card/overlays.** White floating cards with a 16px radius, small text and a soft shadow overlapping imagery.

**Atlas component library.** `@adjust/components`, hosted in a private GitHub npm registry. Its Button tokens define primary, secondary and tertiary variants with default, hover, active and disabled states, for example Primary default `#255eee` with a `1px solid #1f51d9` border and a `0 1px 1px 0 rgba(12, 42, 152, 0.16)` shadow; Secondary default `#f4f6f9` with a `1px solid #e0e2ec` border; inputs use a white fill with `1px solid #cdd0e0`, a focus border of `#255eee` (https://atlas.adeven.com/docs/design-tokens/overview). The docs describe hover as "the color becomes darker by two shades".

## Design System Architecture

Atlas is Adjust's design system, documented at https://atlas.adeven.com (a Docusaurus site, which I opened and read). The home page frames it as "a design system that can be used seamlessly across multiple teams and multiple Adjust products", organised into Design Foundation (Typeface, Principles, Color, 8px Grid, Iconography), a Component Library ("a collection of UI elements that can be used as building blocks"), Tokens, Patterns and Resources (a GitHub repository, Figma design-system and icon libraries, a Jira roadmap, a Mfe-Components link and a Slack channel).

Documented facts:
- Seven design principles: Consistent, Scalable, Defensive, Trustworthy, Navigable, Objective, Accessible (https://atlas.adeven.com/docs/foundation/design-principles).
- Tokens are named in CamelCase for JavaScript and kebab-case for Sass, for example `ColorPrimary80` / `color-primary-80`, `BorderRadiusSmall` / `border-radius-small`, `ButtonPrimaryDefaultBackgroundColor`, `Elevation1BoxShadow`.
- Components ship as `@adjust/components` on the GitHub npm registry, which is private and needs authentication.
- The docs have separate Components, Design Tokens, Patterns, Copywriting and Contributing sections with release notes.

Atlas is for Adjust's product UI, not the marketing site. They differ: the marketing site uses TT Norms Pro, a #005ff7 blue and pill buttons, while Atlas uses system fonts, a #255eee blue and 4 to 8px radii. The component docs I could open contain only a couple of component pages (Accordion, Measurer), and the extractor on the Accordion page returned the Docusaurus documentation chrome rather than Atlas components, so Atlas component values here come from the published token tables, not from measured demos. The marketing stylesheet exposes `--blue-*`, `--green-*`, `--purple-*` and other colour ramps as RGB triplets wrapped in `--rgba-*` variables; it is a separate Tailwind-based layer, and I did not verify any link between it and Atlas.

## Do's and Don'ts

Do
- Lead with a navy hero and a single solid blue pill CTA.
- Use outlined navy pills for secondary "Learn more" actions on white.
- Let imagery carry warmth: real people, rounded 16px crops, floating UI cards.
- Keep body text large (21px) and black; keep headings bold and tightly tracked.
- In product UI, follow Atlas: system fonts, 4 to 8px radii, the 8px grid.

Don't
- Don't use transparency or invent new shades in the Atlas palette.
- Don't mix chromatic families (Atlas rule), for example yellow on blue.
- Don't use pills with square-cornered inputs in the same marketing form; keep the radius language consistent.
- Don't use colour only for meaning; negative and positive colours are reserved for error and success.
- Don't introduce font sizes outside the scale.

## Responsive Behavior

At the 390px mobile measurement the hero h1 reduces from 48px to 30px on a 38px line (tracking stays -1px). Atlas's breakpoint tokens are x-small 0px, small 480px, medium 720px, large 1200px and x-large 1400px, with margins of 16, 16, 24, 32 and 32px and gutters of 8, 12, 16, 24 and 24px respectively, with fixed widths of 1080px and 1272px at the two largest sizes (https://atlas.adeven.com/docs/design-tokens/overview). I did not capture a phone layout beyond the headline measurement, so how the feature rows collapse is not documented here.

## Iteration Guide

1. Set tokens: navy #04182b, white, pale blue #f2faff, blue #005ff7, black ink.
2. Build the hero: 48px/56px bold white headline, 21px light copy, one solid blue pill and one text link.
3. Add the dashboard mock-up overlapping the hero and body edge.
4. Create feature rows: 36px heading intro, then alternating 21px-body text with an outlined navy pill and a 16px-radius image.
5. Keep buttons 48px tall with a trailing chevron and 24px left padding.
6. For product screens, switch to Atlas tokens: system fonts, #255eee, 4 to 8px radii.
7. Run `node web/scripts/verify-designs.mjs --slug=adjust` after edits.
