---
version: alpha
name: Tencent
category: "Design Systems"
description: "Tencent corporate home page (tencent.com): a white canvas (#ffffff) with black ink (#000000), Tencent blue (#0052d9) used for the logo, active language and links, an 85px italic-style display face \"Tencent W7\" over a full-bleed hero photograph, Haas Grot Disp Web at 500 and 600 weights for text, 10px-radius news thumbnails and a full-width black \"For consumers\" band."

colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#0052d9"
  surface-soft: "#f7f7f7"
  ink-muted: "#64676a"
  ink-nav: "#3a3a3a"
  hairline: "#d9d9d9"
  primary-deep: "#00225a"
typography:
  display:
    fontFamily: "\"Tencent W7\""
    fontSize: 85px
    fontWeight: 700
    lineHeight: 102px
    letterSpacing: 0.25px
  display-mobile:
    fontFamily: "\"Tencent W7\""
    fontSize: 28px
    fontWeight: 700
    lineHeight: 33.6px
    letterSpacing: 0.25px
  heading:
    fontFamily: "\"Haas Grot Disp Web\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28.8px
    letterSpacing: 0.25px
  body:
    fontFamily: "\"Haas Grot Disp Web\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 33.6px
    letterSpacing: 0.25px
  nav:
    fontFamily: "\"Haas Grot Disp Web\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.25px
  link:
    fontFamily: "\"Haas Grot Disp Web\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 0.25px
rounded:
  xs: 10px
  pill: 9999px
spacing:
  s1: 5px
  s2: 10px
  s3: 20px
  s4: 32px
  s5: 44px
  s6: 64px
  s7: 96px
  s8: 105.5px
  s9: 120px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    padding: 0px 44px
---

## Overview

This file describes the Tencent corporate home page at https://www.tencent.com (English edition, opened 2026-10-09). Despite the queue label, the page captured is the company site, not the TDesign documentation. The capture opens on a white header carrying the blue italic Tencent wordmark, six navigation links (Who we are, What we create, Our actions, Investors, Newsroom, Careers) and a language switch with the English option underlined in blue. Below it a large rounded photograph of a worker in a hard hat and orange vest holding a tablet in a container yard carries the white headline "We build technologies that create the future" in a slanted, wide display face and a small "Who we are" link with an arrow. A white "What's happening" section follows with a blue "View all news" link and three news cards (an illustrated penguin mascot, a type-specimen preview "Hy", a red paper flower), then a large black bold statement, "Tencent is improving quality of life around the world through innovative technology, products and services", and a black full-bleed band whose "For consumers" title overlaps a photograph of a person in a blue-lit room.

No cookie banner, bot challenge or popup covers the capture.

The visual system is confident and corporate: black type on white, one blue, full-bleed photography with white headlines on top, and compact news cards.

**Key Characteristics:**
- White canvas (`{colors.canvas}` #ffffff) with black ink (`{colors.ink}` #000000); the hero and the dark band reverse to white text over imagery or black.
- One brand blue, `{colors.primary}` #0052d9, on the wordmark, links, the active language and "View all news".
- A display face, "Tencent W7" at 85px weight 700 (28px at 390px), distinct from the text face "Haas Grot Disp Web".
- Photographs rounded to 10px, with illustration and product-specimen thumbnails as news art.
- Black band sections at full bleed (`{colors.page-largest}` #000000, the largest measured fill) alternating with white and `{colors.surface-soft}` #f7f7f7.
- Hover turns black links blue; the blue link turns deep navy.

## Colors

> **Source pages:** home (`/`), measured at 1280px and 390px.

### Brand & Accent
- **Tencent Blue** (`{colors.primary}` #0052d9): measured as the most saturated text color and the hover color of every navigation link; the wordmark is blue in the capture. No filled button was detected, so it is a link and accent color.
- **Primary Deep** (`{colors.primary-deep}` #00225a): the measured hover color of the "View all news" link and a measured background fill in a lower section.

### Surface
- **Canvas** (`{colors.canvas}` #ffffff): header, news section and footer.
- **Black band** (`{colors.page-largest}` #000000): the largest measured background area, the "For consumers" band.
- **Soft** (`{colors.surface-soft}` #f7f7f7): light gray panels behind news art.

### Text
- **Ink** (`{colors.ink}` #000000): nav, headlines and card titles on white.
- **Ink Nav** (`{colors.ink-nav}` #3a3a3a) and **Ink Muted** (`{colors.ink-muted}` #64676a): secondary nav items, dates and footer copyright.
- White text sits over the hero photograph and the black band; the hero headline measures `#ffffff` at 85px over imagery, so legibility there depends on the photo, not on a canvas color.

### Borders
**Hairline** (`{colors.hairline}` #d9d9d9) for rules.

### Semantic
None present on the home page. Root variables from Bootstrap (for example `--bs-primary: #0d6efd`, `--bs-success`) and WordPress presets are framework defaults, not Tencent brand colors, and are not used.

## Typography

### Font Family
Two loaded families: "Tencent W7" (weight 700), the display face for the hero and section statements, and "Haas Grot Disp Web" (weights 500 and 600) for text, with fallbacks `system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif`. No foundry or license source for either face was opened, so none is claimed; the page's own fallback chain is the substitute.

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display}` | 85px | 700 | 102px | Hero headline (Tencent W7) |
| `{typography.display-mobile}` | 28px | 700 | 33.6px | Hero at 390px |
| `{typography.heading}` | 24px | 600 | 28.8px | "What's happening", card titles |
| `{typography.body}` | 18px | 500 | 33.6px | Hero sub-copy |
| `{typography.nav}` | 16px | 500 | 24px | Navigation |
| `{typography.link}` | 16px | 600 | 24px | Links such as "Who we are" |

### Principles
- All text carries 0.25px letter spacing.
- Display is wide and slanted; text is a neutral grotesque, so the contrast between the two is the brand signal.
- Weights are 500 or 600 in text, 700 in display.

## Layout

### Spacing System
Measured paddings are 5, 10, 20, 32, 44, 64, 96, 105.5 and 120px (`{spacing.s1}` to `{spacing.s9}`); the footer pads 0px 44px and the most common padding is 20px.

### Grid & Container
The header and footer use a 44px side gutter; the news section is narrower and centered with a three-card row where the first card is wider than the other two.

### Whitespace Philosophy
Large vertical gaps separate the hero, news and statement sections (the page measures 14777px tall); the statement text stands alone on white.

## Elevation & Depth

No box shadows were measured. Depth comes from full-bleed photography, a white-to-black section change and rounded 10px image frames. Text over the hero photograph is white, and the black band is a flat fill.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 10px | Hero photograph and news thumbnails |
| `{rounded.pill}` | 9999px | Circular controls (the scroll-down arrow circle is measured at 50%) |

The 10px radius is the only rounded-rectangle value measured. Imagery is photographic or illustrated and always cropped to it, while controls such as the scroll-down circle are fully round.

## Components

### Navigation
`nav`: white bar, black text; `nav-link`: `{colors.ink-nav}` text at `{typography.nav}`, turning `{colors.primary}` on hover.

### Link
`link`: white `{typography.link}` text over the hero photograph (the "Who we are" link with an arrow).

### News cards
Thumbnail at 10px radius, a 16px/600 title and a small gray date ("September 24, 2026"), no card border or fill.

### Footer
White, `{colors.ink-muted}` text, padding 0px 44px, language links 简 / EN / 繁 and the copyright line.

### Buttons
No filled or outlined button was measured; none is declared.

## Design System Architecture

TDesign is Tencent's open-source enterprise design system; its documentation at https://tdesign.tencent.com describes it as "开源的企业级设计体系" (an open-source enterprise-level design system) for designers and developers. This page does not use it: the tencent.com source is a WordPress theme (`wp-content/themes/tencent-web`) built with Bootstrap-style classes (`container-fluid`, `row`, `col-md-auto`), the extracted variables are `--bs-*`, `--wp--preset--*` and `--atcb-*` with no `--td-` variable, and the extracted styles contain no `.t-` TDesign component classes. Consequently no TDesign value is used here, including its brand blue; Tencent's #0052d9 on this page was measured from the page itself. No public brand guideline for tencent.com was found; the de-facto system is a WordPress/Bootstrap grid with a few custom fonts and a handful of custom colors.

## Do's and Don'ts

**Do**
- Keep text black on white and reverse to white over photography or black bands.
- Use `{colors.primary}` for links, the wordmark and active states.
- Round photographs at 10px.
- Use the display face only for large statements.

**Don't**
- Don't use Bootstrap default blue (#0d6efd) as the brand color.
- Don't add filled buttons; the page uses text links with arrows.
- Don't add shadows to cards.
- Don't set text over a photo without checking contrast.

## Responsive Behavior

At 390px the hero headline falls from 85px to 28px (weight 700), the section title to 14px/600, body stays 18px/500 and navigation falls to 14px. The mobile measurement lists only headline, section title, body and navigation roles, so no other mobile layout detail is claimed.

## Iteration Guide

1. Begin with white canvas and black ink; add blue only to links and the wordmark.
2. Use the display face only at 28px and up.
3. Keep radii at 10px, with circles at 50%.
4. Keep link hover colors as measured: black to `{colors.primary}`, blue to `{colors.primary-deep}`.
5. For any new surface, measure first and cite the page.
