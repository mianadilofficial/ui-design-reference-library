---
version: alpha
name: Red Hat
category: "Design Systems"
description: "Red Hat's corporate site (redhat.com) on its Red Hat Display and Red Hat Text typefaces — near-black #151515 hero panels against white #ffffff, brand red #ee0000 pill buttons with 64px radius, #0066cc link blue, 16px-radius outlined cards with #c7c7c7 borders and a 36px/500 display headline over 18px body copy."
colors:
  canvas: "#ffffff"
  page-largest: "#151515"
  ink: "#151515"
  primary: "#ee0000"
  on-primary: "#ffffff"
  link: "#0066cc"
  surface-dark: "#1f1f1f"
  surface-gray: "#f2f2f2"
  hairline-gray: "#e0e0e0"
  ink-light: "#c7c7c7"
  link-on-dark: "#92c5f9"
  ink-muted: "#4d4d4d"
  text-input-border: "#707070"
typography:
  display:
    fontFamily: RedHatDisplay, "Red Hat Display", Helvetica, Arial, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 46.8px
  display-mobile:
    fontFamily: RedHatDisplay, "Red Hat Display", Helvetica, Arial, sans-serif
    fontSize: 35px
    fontWeight: 400
    lineHeight: 45.5px
  heading:
    fontFamily: RedHatDisplay, "Red Hat Display", Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 62.4px
  subheading:
    fontFamily: RedHatDisplay, "Red Hat Display", Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 36.4px
  body:
    fontFamily: RedHatText, "Red Hat Text", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  link:
    fontFamily: RedHatDisplay, "Red Hat Display", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  input:
    fontFamily: RedHatText, "Red Hat Text", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 3px
  sm: 6px
  md: 16px
  lg: 64px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 16px
  s5: 18px
  s6: 24px
  s7: 32px
  s8: 38px
  s9: 64px
  s10: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.lg}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 6px 38px
    height: 35px
    borderColor: "{colors.text-input-border}"
  card:
    textColor: "{colors.page-largest}"
    rounded: "{rounded.md}"
    borderColor: "{colors.ink-light}"
---

## Overview

This entry documents redhat.com, Red Hat's corporate website ("Red Hat - We make open source technologies for the enterprise"). The queue paired it with PatternFly (patternfly.org), but the measured CSS of redhat.com does not point to PatternFly: its custom properties are named `--rh-*` (the Red Hat Design System, RHDS) and `--felt-preview-*`, and none start with `--pf-`. So this file describes the site as measured and bases the system notes on RHDS (ux.redhat.com); PatternFly is recorded as a sibling product design system, not as this site's foundation.

The captured page opens on a dark hero: a small date chip ("November 12, 2026"), a large light headline "Shift your open source security from reactive to ready" in Red Hat Display, a supporting paragraph with a bold lead-in, a red pill button ("Register for the virtual event") and a glossy 3D shield illustration with a green check on the right. A white utility bar with the Red Hat logo and a seven-item menu (AI, Hybrid cloud, Products, Training, Learn, Partners) sits beneath the hero in the capture. Below it the page turns white with a "Featured" block of outlined cards (a Summit event card with a dimensional illustration and an outlined pill button, a press-release card with a blue arrow link, small cards tagged Article or Blog post), then a statement section with a red vertical rule beside a statistic, and a dark "Featured product" panel on a deep purple band. Microcopy is plain enterprise English: short noun-phrase titles and verb-led links such as "Read the press release" and "Get details on the offering".

## Colors

- **Canvas** `#ffffff` and **page-largest** `#151515` (the near-black used for the hero and dark panels) are the two dominant surfaces; `#1f1f1f` (`surface-dark`) is the lifted dark card colour, `#f2f2f2` is a light grey surface and `#e0e0e0` a light divider.
- **Ink** `#151515` on white; **ink-muted** `#4d4d4d` for secondary text; **ink-light** `#c7c7c7` for secondary text on dark and for card borders.
- **Primary** `#ee0000` is Red Hat's brand red. The stylesheet defines `--rh-color-brand-red` as `#ee0000` for both light and dark, and the page uses it for the pill button fill, the red rule beside the statistic and the logo hat. White text sits on it.
- **Link** `#0066cc` is the interactive blue (the stylesheet's `--rh-color-interactive-primary-default` on light surfaces); on dark panels links lighten to `#92c5f9`.
- **Text input border** `#707070`.

The stylesheet uses `light-dark()` for most colour tokens, with separate `-on-light` and `-on-dark` values, so every colour here has a counterpart for the other theme.

## Typography

Two families, both Red Hat's own: **Red Hat Display** for headings and links, **Red Hat Text** for body and form text (a Red Hat Mono is defined for code). Both load as variable fonts (Display 300 to 900, Text 300 to 700). Helvetica and Arial are the declared fallbacks.

- **Display** 36px / 46.8px, weight 500 (the statement headline); **display-mobile** 35px / 45.5px, weight 400 at 390px width.
- **Heading** 48px / 62.4px, weight 400 for large section titles.
- **Subheading** 28px / 36.4px, weight 500.
- **Body** 18px / 27px, weight 400 in Red Hat Text.
- **Link** 16px / 24px, weight 700 in Red Hat Display.
- **Input** 14px / 21px, weight 400.

Line-height is a consistent 1.3 for display text and 1.5 for body text.

## Layout

The page uses a wide container with roughly 54px margins at the 960px capture width. Cards sit in a 2-column row (one wide event card, one narrower press card), then a 3-column row of small cards, then a two-column statement block. A dark full-bleed band carries the featured-product panel, so the page alternates white and near-black sections. Measured gaps are 4, 8, 16, 24, 32 and 64px, and the spacing scale also contains 80px.

## Elevation & Depth

Depth is minimal on the 2D layer: cards are white with a 1px `#c7c7c7` outline and no shadow. The measured shadow corpus holds a single soft shadow, `rgba(21, 21, 21, 0.2) 0px 2px 4px 0px`, used for a floating widget. Depth in the brand comes from imagery: the hero shield and the Summit "Connect" illustration are rendered as glossy 3D objects, and the dark product panel sits on a darker purple band.

## Shapes

Radii measured on the page: 3px for inputs, 6px for small tags and chips, 16px for cards, and 64px for pill buttons and chips (the stylesheet names it `--felt-preview-border-radius-pill`). The dominant shape is the 64px pill for buttons and 16px rounded rectangle for cards and dark panels. Tags such as "Article" and "Blog post" are small grey pills.

## Components

- **Primary button**: `#ee0000` fill, white text, 64px (pill) radius. The label sits in a short, bold pill in the hero. The RHDS button documentation describes primary (one per page), secondary and tertiary variants, a danger treatment, and close and play icon variants, rendered as `<rh-button>`.
- **Secondary button**: outlined pill with dark text on white (the Summit card's "See dates & locations").
- **Link**: Red Hat Display 16px bold in `#0066cc` with a trailing arrow; underlined dotted links inside body copy.
- **Card**: white, 1px `#c7c7c7` border, 16px radius, with an optional category tag and a small blue arrow bottom-right.
- **Text input**: dark `#151515` field with white 14px text, 3px radius, 35px tall, 6px 38px padding (room for an icon) and a `#707070` border.
- **Dark feature panel**: `#1f1f1f` fill, 16px radius, white title, light-grey copy, `#92c5f9` link.
- **Chat bubble**: a floating round widget at bottom-right with a notification badge, which is chat chrome rather than part of the brand's component set.

## Design System Architecture

Red Hat publishes two open-source design systems:

- **Red Hat Design System (RHDS)**, documented at https://ux.redhat.com and developed in the RedHat-UX/red-hat-design-system GitHub repository: it describes itself as the open source design system for branded digital experiences, with design tokens, foundations, elements and accessibility guidance. The repository (MIT license) ships framework-agnostic Web Components (`@rhds/elements`, e.g. `<rh-button>`) and a tokens package (`@rhds/tokens`), plus Figma libraries, and states it is the official standard for Red Hat brand implementation across digital properties including redhat.com.
- **PatternFly** (https://www.patternfly.org): "an open source design system" sponsored and maintained by Red Hat for enterprise products, with design tokens, a component library, HTML and React implementations. The RHDS site distinguishes it as Red Hat's product design system.

What redhat.com itself ships, as measured: 59 `--rh-*` properties (for example `--rh-font-family-heading`, `--rh-font-family-body-text`, `--rh-color-brand-red`, `--rh-color-interactive-primary-default`, `--rh-color-border-destructive`, `--rh-color-border-status-success`), plus 150 `--felt-preview-*` properties (colour ramps such as blue-50, light-dark interactive states, and `--felt-preview-border-radius-pill`: 64px). No `--pf-*` properties were found, so PatternFly's use on the homepage is not confirmed. The button demo on the RHDS site renders inside shadow DOM, so its internal styling was not measurable by the extractor and no component numbers are taken from it.

## Do's and Don'ts

- Do use `#ee0000` for the single main call to action and for the brand accent rule, with white text.
- Do pair Red Hat Display headings with Red Hat Text body copy.
- Do use `#0066cc` for links on light backgrounds and `#92c5f9` on dark.
- Do use 64px pills for buttons and 16px radii for cards and dark panels.
- Do keep cards flat with a `#c7c7c7` outline.
- Don't mix blue and red as two primary actions in the same view; RHDS says only one primary button per page.
- Don't add shadows to cards; depth belongs in the imagery.
- Don't use thin weights below 400 for headings on dark surfaces.
- Don't document chat widgets or consent controls as brand components.

## Responsive Behavior

The display headline is 36px on desktop and 35px at 390px width (line-height 46.8px to 45.5px), so the headline barely shrinks; the weight changes from 500 to 400. Only the 1280px desktop and 390px mobile measurements exist, so how the menu and the multi-column card rows rearrange at intermediate widths was not observed.

## Iteration Guide

1. Set white canvas with `#151515` ink, Red Hat Text 18px/27px body and Red Hat Display headings.
2. Make one hero panel in `#151515` with a light headline, a supporting paragraph and one red `#ee0000` 64px-radius button.
3. Build secondary content from 16px-radius outlined cards (`#c7c7c7`) with category tags and blue arrow links.
4. Use `#1f1f1f` panels on a dark band for featured products; links become `#92c5f9`.
5. Prefer `--rh-*` token names when implementing so light and dark values can swap.
