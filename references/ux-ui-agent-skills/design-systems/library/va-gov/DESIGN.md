---
version: alpha
name: U.S. Department of Veterans Affairs (VA.gov)
category: "Design Systems"
description: "VA.gov homepage built on the VA Design System: deep navy #162e51 chrome, USWDS-style blue #005ea2 primary with 4px-radius 40px buttons, Bitter slab-serif headings at 40px and Source Sans Pro 16.96px body on white, flat color-band sections."
colors:
  canvas: "#ffffff"
  ink: "#1b1b1b"
  primary: "#005ea2"
  on-primary: "#ffffff"
  primary-darker: "#162e51"
  surface-info: "#e1f3f8"
  primary-dark: "#1a4480"
  ink-muted: "#565c65"
  ink-secondary: "#3d4551"
typography:
  display:
    fontFamily: Bitter, Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 26px
  hero-heading:
    fontFamily: Bitter, Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 52px
  body:
    fontFamily: "\"Source Sans Pro Web\", \"Source Sans Pro\", \"Helvetica Neue\", Helvetica, Arial, sans"
    fontSize: 16.96px
    fontWeight: 500
    lineHeight: 25.44px
  button:
    fontFamily: "\"Source Sans Pro Web\", \"Source Sans Pro\", \"Helvetica Neue\", Helvetica, Arial, sans"
    fontSize: 16.96px
    fontWeight: 700
    lineHeight: 20.352px
rounded:
  xs: 4px
  sm: 5px
  pill: 9999px
spacing:
  s1: 4.8px
  s2: 8px
  s3: 9.6px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 16.96px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 9.6px 20px
    height: 40px
  nav:
    backgroundColor: "{colors.primary-darker}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
  footer:
    backgroundColor: "{colors.primary-darker}"
    textColor: "{colors.canvas}"
---

## Overview

VA.gov is the U.S. Department of Veterans Affairs' public service portal. Its homepage is organized around task entry: a government banner at the top ("An official website of the United States government", with a "Here's how you know" link), a red "Talk to the Veterans Crisis Line now" tab, a deep-navy header with the VA wordmark and department seal, a primary nav ("VA Benefits and Health Care", "About VA", "Find a VA Location", "My VA", "My HealtheVet"), and a blue hero with the eyebrow "Welcome to VA.gov", the headline "Let us help you get started", a short paragraph, an underlined "Get started with VA" link, and a white card with a "Create account" button. Beneath are a search box with "Other search tools" and a light-blue "Top pages" link list, a deep-blue promotional band ("Download the VA Health and Benefits App") with a phone mockup, and a three-column grid "Explore VA benefits and health care" (Health care, Disability, Education and training, Careers and employment, Pension, Housing assistance, Life insurance, Burials and memorials, Records, Service members, Family and caregivers, VA department information), each with a colored round icon, an underlined serif link and a two-to-three-line description.

The voice is plain-language and second-person ("Check your claim", "Manage your health care with My HealtheVet"); links are task verbs. The design is dense with text and links, but ample whitespace and a strict three-column grid keep it legible. Hero text sits in white over a blue gradient; the measured page canvas is white, and the h1 role is white text over the gradient, so contrast comes from the navy and blue fills, not the canvas.

## Colors

`canvas` is {colors.canvas} and `ink` is {colors.ink}. `primary` {colors.primary} is the fill of the "Create account", "Sign in" and search-submit buttons (with white `on-primary` text) and the link color across the page. The navy `primary-darker` {colors.primary-darker} fills the header, the footer and the hero's dark end; `primary-dark` {colors.primary-dark} fills the app-promo band. `surface-info` {colors.surface-info} is the pale blue behind "Top pages". Text steps down through `ink` for body, `ink-secondary` {colors.ink-secondary} for card headings such as "Other search tools", and `ink-muted` {colors.ink-muted} for card text.

The site's root variables carry the VA design system tokens under the `--vads-` namespace; the measured values for primary, primary-darker, primary-dark and primary-alt-lightest match the hexes above. The Veterans Crisis Line tab is a saturated red and the benefit icons use a range of hub colors (red, orange, green, olive, navy); those are accent fills on icons and are not captured as UI tokens here.

## Typography

Two families: Bitter (slab serif) for headings and Source Sans Pro for body and UI, both loaded in 400 and 700 (the loaded-fonts list shows Bitter 400/700 and Source Sans Pro Web 400/700). Measured sizes: the h1 "Welcome to VA.gov" is 20px / 26px Bitter 700; the hero heading "Let us help you get started" is 40px / 52px Bitter 700 (`hero-heading`); card headings like "Other search tools" are 20px Bitter 700. Body text measures 16.96px / 25.44px at weight 500, and buttons use 16.96px / 20.352px at weight 700. The fractional 16.96px size is 1.06rem, consistent with rem-based sizing.

### Font Substitutes

Both typefaces are open-source and are served from the VA CSS library's fonts directory. If unavailable, fall back as the site does: Bitter then Georgia, Cambria, "Times New Roman", Times, serif; Source Sans Pro then "Helvetica Neue", Helvetica, Arial, sans-serif.

## Layout

Content sits in a centered column with generous gutters; at the 960px capture scale content is inset roughly 110px on each side. The hero is a two-column band: a text column left and a white card right. "Search" and "Top pages" form a 50/50 split with a light-blue half on the right. The benefits section is a strict three-column grid with 24px-class gaps. The spacing tokens measured on the site run 4.8px, 8px, 9.6px, 10px, 12px, 15px, 16px, 16.96px, 20px, 24px; root variables use a `--vads-spacing-*` scale and `--units-*` scale in rem.

## Elevation & Depth

Depth is nearly flat. The white hero card sits on the blue gradient without a visible heavy shadow, and sections are separated by color bands (navy, blue, pale blue, white) rather than shadows. The only measured shadow is a navy footer extension (`rgb(22, 46, 81) 0px 400px 0px 400px`), a technique that paints the footer's color beyond its box rather than a visual elevation.

## Shapes

Radii are small: 4px for buttons (`rounded.xs`), 5px for cards (`rounded.sm`), and 0 4px 4px 0 on the search-submit button attached to the input. Circles (the round icons beside links and benefit titles) use a pill/circle radius. Corners are deliberately restrained and institutional.

## Components

**Primary button.** {colors.primary} fill, white 16.96px / 700 text, 4px radius, padding 9.6px 20px, height 40px ("Create account", "Sign in", "Sign up").

**Search.** A text input beside a flush "Search" button (32px high, square left corners, 4px right corners).

**Link with chevron icon.** Underlined blue bold link led by a circular blue chevron icon ("Find a VA location").

**Hub tile.** A colored circular icon, an underlined Bitter link and a description paragraph.

**Header navigation.** White text on {colors.primary-darker} with dropdown chevrons; "Sign in" is a blue button.

**Crisis line tab.** Red tab at the top right with white text and an arrow.

## Design System Architecture

VA.gov is built on the VA.gov Design System (https://design.va.gov), which describes itself as "a system to help you write, design, and build digital services on VA.gov and the VA mobile app", organized into Components, Patterns, Templates, Foundation, Content, Information Architecture and Accessibility. The install page documents two packages: a CSS library (`@department-of-veterans-affairs/css-library`, with stylesheets, design tokens and utilities) and a web-component library (`@department-of-veterans-affairs/component-library`). The tokens page documents the `vads` namespace for VA tokens and `uswds` for U.S. Web Design System primitives, with VA adding semantic and component tokens on top.

The dsUrl is real and used: the VA.gov homepage CSS exposes hundreds of `--vads-*` variables (for example `--vads-color-primary-lighter`, `--vads-border-radius-0p5`, `--vads-spacing-8`) and `--units-*` USWDS-style units, and the measured colors correspond to the design system's primary-family values. Values in this file are the measured ones; the design-system pages are cited for structure and naming.

## Do's and Don'ts

- Do use {colors.primary} for primary actions and links, and {colors.primary-darker} for headers and footers.
- Do set headings in Bitter 700 and body in Source Sans Pro.
- Do keep buttons at 4px radius, 40px height, 700 weight.
- Do write link text as an action ("Check your claim, decision review, or appeal status").
- Don't use shadows for hierarchy; use color bands.
- Don't use accent hub colors for text or buttons; they belong on icons.
- Don't set text smaller than the 16.96px body size for primary content.
- Don't remove link underlines.

## Responsive Behavior

The extractor captured a 390px mobile view, but its layout details were not documented here beyond the existence of that view. The design system's own documentation prescribes rem/em font sizing so text respects browser settings; the 16.96px body size (1.06rem) is consistent with that. Desktop grids (three-column hub tiles, two-column hero) would be the first to reflow.

## Iteration Guide

1. Start from {colors.canvas} and {colors.ink}; use `primary-darker` for the chrome.
2. Pick Bitter for headings and Source Sans Pro for everything else.
3. Build buttons from `button-primary`; keep 4px radius and 40px height.
4. Use `surface-info` for supporting bands of links.
5. Name any new token under the `--vads-` convention and verify it against design.va.gov before adding it.
