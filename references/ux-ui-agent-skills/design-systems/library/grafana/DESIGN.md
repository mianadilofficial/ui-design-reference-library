---
version: alpha
name: Grafana Labs
category: "Design Systems"
description: "Grafana Labs' homepage sets Poppins 600 display headlines (60px, -1.5px tracking) over Inter UI text on a cool grey canvas (#f4f4f6), with a single saturated blue primary (#1b55f5) on 8px-radius buttons, pastel tinted feature cards with 24px corners, and dark product screenshots as the main imagery."
colors:
  canvas: "#f4f4f6"
  ink: "#000000"
  primary: "#1b55f5"
  on-primary: "#ffffff"
  surface-subtle: "#f9f9fa"
  ink-body: "#454554"
  ink-muted: "#67677e"
  on-dark-muted: "#ffffffcc"
  on-dark: "#ffffffe6"
  hairline-on-dark: "#ffffff80"
  primary-hover: "#1440e1"
  button-secondary-border: "#ffffff4c"
  card-lavender: "#f9e8ff"
  card-lavender-border: "#eeaafd"
  brand-orange: "#ff671d"
typography:
  display:
    fontFamily: Poppins, "Poppins Fallback"
    fontSize: 60px
    fontWeight: 600
    lineHeight: 75px
    letterSpacing: "-1.5px"
  display-mobile:
    fontFamily: Poppins, "Poppins Fallback"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 54px
    letterSpacing: "-1.2px"
  subheading:
    fontFamily: Poppins, "Poppins Fallback"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 37.5px
    letterSpacing: "-0.75px"
  body:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
  nav:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 19.5px
  button-secondary:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  input:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 16px
  3xl: 24px
  4xl: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 20px
    height: 48px
    borderColor: "{colors.primary}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 10px 18px
    height: 44px
    borderColor: "{colors.button-secondary-border}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    height: 17px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px
  card:
    backgroundColor: "{colors.card-lavender}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
    borderColor: "{colors.card-lavender-border}"
  footer:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink}"
    padding: 80px 0px
---

## Overview

The Grafana Labs homepage (grafana.com, captured at the headline "AI for observability. Observability for AI. One platform for both.") is a product-marketing page built from three ingredients: oversized Poppins headlines, calm Inter body copy, and dark, dense product screenshots set inside soft pastel frames. The page surface is a cool light grey, `{colors.canvas}`, rather than pure white. The hero sits on a wide pastel gradient that runs from peach and pink on the left to light sky blue on the right, with black `{colors.ink}` text over it, and a rounded "Ask AI" search bar floats just below the buttons.

The primary call to action is a single saturated blue, `{colors.primary}`, on "Get started free". Next to it a quieter "Compare plans" button sits on a pale fill. Headlines that follow are short declaratives in sequence ("See clearly. Act faster. Spend smarter."), and each feature block pairs a heading and two lines of copy with a blue text link carrying an arrow ("Cost optimization →", "Full-stack observability →"). A customer-logo strip sits under the sticky navigation. Grafana's own orange (`{colors.brand-orange}`) belongs to the logo and a few accents; it is not used for actions.

The capture also shows a dark conference banner ("ObservabilityCON") with a blue "Register now" button and a close icon; it is a time-limited promotion and should not be read as permanent layout. The nav bar in the capture is the sticky header, which is why it appears mid-image.

## Colors

- **Canvas `{colors.canvas}`** is the dominant page fill by painted area; `{colors.surface-subtle}` (a lighter grey) fills the footer and some panels, and white appears in cards and the search bar.
- **Ink `{colors.ink}`** is the most-read text color: headings and strong copy. `{colors.ink-body}` is the paragraph color and `{colors.ink-muted}` is used for secondary labels such as nav links.
- **Primary `{colors.primary}`** fills buttons and also colors inline text links; `{colors.primary-hover}` is the darker hover state, measured on hover. White `{colors.on-primary}` is the text on it.
- **On-dark text**: `{colors.on-dark}` and `{colors.on-dark-muted}` are white at 90% and 80% alpha, used over the dark banner and dark product panels. `{colors.hairline-on-dark}` and `{colors.button-secondary-border}` are semi-transparent white borders for the same context.
- **Pastel feature frames**: `{colors.card-lavender}` with border `{colors.card-lavender-border}` frames a feature screenshot. The page also tints other frames in peach, blue and green; only the lavender pair is carried into the tokens.
- **Brand orange `{colors.brand-orange}`** appears in the page's own custom properties as the brand surface and brand border.

## Typography

Two families split the work. Poppins (weights 500 and 600 loaded) sets display and section headings; Inter (400, 500, 600, 700 loaded) sets everything else. Both are declared with a named fallback face ("Poppins Fallback", "Inter Fallback"). Headline tracking is negative and scales with size.

- `{typography.display}`: Poppins 60px, 600, line-height 75px, letter-spacing -1.5px. On mobile (390px) `{typography.display-mobile}` is 48px/54px with -1.2px.
- `{typography.subheading}`: Poppins 30px, 600, 37.5px line-height, -0.75px, for feature headings.
- `{typography.body}`: Inter 12px, 400, 16px line-height. This was measured as the body-text role; running paragraphs in the capture are visually larger, since 16px and 14px carry more characters on the page than 12px does, so treat 12px as the small-print/caption size.
- `{typography.button}`: Inter 18px, 600, 28px for the main hero CTA; `{typography.button-secondary}` is Inter 16px, 500, 24px.
- `{typography.nav}`: Inter 13px, 500, 19.5px; `{typography.input}`: Inter 14px, 400.

The page loads both families itself, so no substitute is documented.

## Layout

The page is 1280px wide at desktop and about 9,182px tall: a long single-column scroll built from alternating two-column feature rows (text left and screenshot right, then reversed). Content is centered in a container with generous vertical rhythm; the footer uses 80px of vertical padding. The measured spacing scale runs `{spacing.s1}` 2px through 4, 6, 7, 8, 10, 12, 13, 14 and 16px, with 12px the most common gap and 32px and 20px the most common paddings. Feature headings align to the left of a narrow text column while the screenshot extends to the edge of its frame.

## Elevation & Depth

Depth is soft. Primary buttons carry an almost invisible shadow (`rgba(0, 0, 0, 0.05) 0px 1px 2px 0px`). Cards in the capture use a measured shadow stack with a 1px low-alpha ring plus `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px`. Separation otherwise comes from pastel frames and from the contrast between dark screenshots and the light canvas.

## Shapes

Radii are generous and graded: `{rounded.xs}` 4px, `{rounded.sm}` 5px, `{rounded.md}` 6px, `{rounded.lg}` 8px (buttons), `{rounded.xl}` 12px, `{rounded.2xl}` 16px, `{rounded.3xl}` 24px (feature cards, 21 occurrences), `{rounded.4xl}` 32px and `{rounded.pill}` for fully rounded chips and icon buttons (the most frequent radius on the page). Feature frames use the 24px corner, inputs 6px, and primary buttons 8px.

## Components

- **button-primary**: `{colors.primary}` fill, white `{typography.button}` label, `{rounded.lg}`, padding 12px 20px, 48px high, 1px border of the same blue; hover `{colors.primary-hover}`.
- **button-secondary**: also measured on a blue fill at 44px high with padding 10px 18px and a translucent white border, in its dark-banner context ("Register now"). On the light page the second hero button ("Compare plans") has a pale fill.
- **link**, **nav**, **nav-link**: `{colors.ink-muted}` Inter 13px 500.
- **text-input**: `{colors.ink}` text, 14px, `{rounded.md}`. The "Ask AI" bar is the page's main input.
- **card**: `{colors.card-lavender}` background, `{colors.card-lavender-border}` border, `{rounded.3xl}`.
- **footer**: `{colors.surface-subtle}` background, 80px vertical padding.

## Design System Architecture

Two things are relevant. First, the page's own markup: the navbar and footer carry `data-gmui-package="true"` with `data-gmui-component` values, and class names use a `gmui:` prefix (a Tailwind-style utility prefix) alongside `marketing-ui-root`. Custom properties follow `--gmui-*` naming (`--gmui-button-primary`, `--gmui-surface-brand-bold`, `--gmui-radius-2xl`, `--gmui-font-weight-semibold`), and also expose Tailwind-style `--radius-*` and `--container-*` values. This is the de-facto system that produced the measured values.

Second, the organisation's official design system. The GitHub repository https://github.com/grafana/design-system describes "Saga", the shared visual language for Grafana Labs products; it is archived and its README states that component documentation moved to a Storybook instance at developers.grafana.com. The URL https://developers.grafana.com/ui serves a Storybook shell, but I could not read a stories index, so I cannot say what it documents. The homepage uses `gmui`/marketing-ui naming rather than anything I could tie to that Storybook, so the design-system URL is real but not demonstrably used by this page, and no values were taken from it. The repository's license is AGPL-3.0.

## Do's and Don'ts

- Do keep one blue action color, `{colors.primary}`, with white text and an 8px radius.
- Do use Poppins 600 with negative tracking for headlines and Inter for everything else.
- Do place dark product screenshots inside pastel frames with 24px corners.
- Do write short, parallel headline sentences and attach one arrowed text link per block.
- Don't use the brand orange for buttons; it marks the brand, not the action.
- Don't set body copy in Poppins.
- Don't add heavy drop shadows; stay with the 1px ring and faint blur.
- Don't treat the promotional conference banner as a standing component.

## Responsive Behavior

Desktop is measured at 1280px and mobile at 390px. The only mobile change recorded in the tokens is the headline step-down from 60px/75px to 48px/54px (and tracking from -1.5px to -1.2px). The alternating two-column feature rows are expected to stack on narrow screens; confirm by checking the live page, since that stacking was not measured. Buttons keep a 44px-plus height, comfortable for touch.

## Iteration Guide

1. Set the canvas to `{colors.canvas}` and ink to `{colors.ink}`, then add `{colors.primary}` only on actions and links.
2. Establish type: Poppins 600 at 60px/75px with -1.5px tracking for the page title, 30px for section headings, Inter below.
3. Build buttons at 48px with `{rounded.lg}`; reuse `{colors.primary-hover}` for hover.
4. Frame product imagery in `{rounded.3xl}` cards with a pastel fill and border.
5. Any value not in the frontmatter should be measured on the live page first.
