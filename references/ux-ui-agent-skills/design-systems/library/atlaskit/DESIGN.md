---
version: alpha
name: Atlaskit
category: "Design Systems"
description: "Atlaskit docs site for Atlassian's UI library: white sidebar on a #f8f8f8 page, #292a2e text, Atlassian blue #1868db, Charlie Display 32px titles with Atlassian Sans 14px UI text, 4px and 6px radii and hairline card shadows built on --ds-* tokens."
colors:
  canvas: "#ffffff"
  page-largest: "#f8f8f8"
  ink: "#292a2e"
  primary: "#1868db"
  surface-selected: "#e9f2fe"
  ink-secondary: "#505258"
  ink-muted: "#6b6e76"
  hairline: "#8c8f97"
typography:
  display:
    fontFamily: "\"Charlie Display\", ui-sans-serif, -apple-system, \"system-ui\", \"Segoe UI\", Ubuntu, \"Helvetica Neue\", sans-serif"
    fontSize: 32px
    fontWeight: 653
    lineHeight: 36px
  body:
    fontFamily: "\"Charlie Display\", ui-sans-serif, -apple-system, \"system-ui\", \"Segoe UI\", Ubuntu, \"Helvetica Neue\", sans-serif"
    fontSize: 20px
    fontWeight: 653
    lineHeight: 24px
  body-dominant:
    fontFamily: Atlassian Sans
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 6px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 40px
components:
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 4px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 16px 24px
    boxShadow: rgba(30, 31, 33, 0.25) 0px 1px 1px 0px, rgba(30, 31, 33, 0.31) 0px 0px 1px 0px
---

## Overview

Atlaskit (https://atlaskit.atlassian.com) is Atlassian's documentation site for its UI library of platform components. The capture shows a utilitarian docs shell: a white left sidebar with the Atlaskit logo (a stacked-layers mark) and wordmark, a collapse icon, and a nav tree (Home highlighted in pale blue, Get started, Packages, Deprecations, Resources); a top bar with a wide rounded search field ("Search packages") and a "Theme" button; and a light-gray content area. The home page headline reads "Atlaskit" with the tagline "Atlassian's UI library for platform components". Below it are three stacked white cards in a single centered column, each with a small colored square icon, a bold title, a one-line description and a large flat illustration: "Get started" (a rocket, "Everything you need to get up and running."), "Packages" (a stack of layered planes, "Check out the documentation and usage guides for the Atlaskit packages.") and "Atlassian Design System" (a set of pencils and markers, "Need some more design guidance? Have a look at the Atlassian Design System.").

The tone is direct and instructional. Illustration is the only expressive element: bold blue, orange and yellow vector artwork on white cards, against an otherwise gray-and-white interface.

Taken together, the page reads as a reference tool rather than a marketing page. Everything that is not an illustration is gray, white or one blue, the type is small and quiet, and each card says in one sentence what it leads to. A visitor can find packages, getting-started material or the broader design system in one glance, and the layout never competes with the documentation content that follows.

## Colors

The page has two light surfaces. `canvas` is {colors.canvas} (sidebar, top bar, cards) and `page-largest` is {colors.page-largest}, the gray area behind the cards. Text is {colors.ink}, with `ink-secondary` {colors.ink-secondary} and `ink-muted` {colors.ink-muted} for secondary and tertiary text. `hairline` {colors.hairline} draws control borders such as the search field outline. `primary` is the Atlassian blue {colors.primary}, used for the active nav label and icon, and `surface-selected` {colors.surface-selected} is the pale-blue fill behind the active "Home" nav item.

The page's root variables are `--ds-*` design tokens; for instance `--ds-background-brand-bold` and `--ds-text-brand` resolve to #1868DB, `--ds-text` to #292A2E, `--ds-background-brand-subtlest-hovered` to #CFE1FD, `--ds-radius-small` to 0.25rem and `--ds-radius-large` to 0.5rem. The site carries hundreds of such tokens (the measured stylesheet lists about 400 root variables) including accent, chart, danger and success families, which are not reproduced here.

## Typography

Two faces are loaded: Atlassian Sans (a variable font covering weights 100 to 900) and Charlie Display at weight 600 (the loaded-font list shows "Atlassian Sans 100 900" and "Charlie Display 600"). Charlie Display is used for the page title and tagline: the h1 "Atlaskit" is 32px / 36px at weight 653, and the large tagline run is 20px / 24px at weight 653 (declared as the `body` token because it is the most prominent running text on the capture). UI text, which dominates the page by character count, is Atlassian Sans at 14px weight 400 (`body-dominant`). Atlassian's own typography documentation (https://atlassian.design/foundations/typography) names Atlassian Sans and Atlassian Mono as the app fonts and Charlie Sans as the brand font, with 14px as the default body size for components, and notes sizes are specified in rem.

### Font Substitutes

Both typefaces are proprietary. Fallbacks in the site's stack: ui-sans-serif, -apple-system, system-ui, Segoe UI, Ubuntu, Helvetica Neue, sans-serif. A humanist grotesque such as Inter is a reasonable stand-in for Atlassian Sans in UI text.

## Layout

A two-region shell: a fixed-width sidebar of about 240px at the 960px-wide capture scale with a 1px right divider, and a content region that fills the rest. The top bar spans the content region with a centered search field about 585px wide and a right-aligned button. Home content is a single centered column about 340px wide at that scale containing the stacked cards with roughly 12px gaps. Spacing tokens measured: 2px, 4px, 6px, 8px, 12px, 16px, 24px, 40px, with cards using 16px 24px padding.

## Elevation & Depth

Depth is subtle and borderless. Cards use two thin shadows, `rgba(30, 31, 33, 0.25) 0px 1px 1px 0px` and `rgba(30, 31, 33, 0.31) 0px 0px 1px 0px`, producing a hairline edge with a faint drop. The gray page behind (`page-largest`) separates cards from the content region without further elevation.

## Shapes

Radii are 4px (`rounded.xs`) on nav items and small elements and 6px (`rounded.sm`) on cards, the search field and buttons; measured frequency on the examples page is 6px for most elements, with pill (9999px) and 25% radii also measured on the examples page. The Atlassian tokens define `--ds-radius-small` as 0.25rem (4px) and `--ds-radius-large` as 0.5rem (8px).

## Components

**Sidebar nav item.** 4px radius, 4px padding, {colors.ink} text; the active item has {colors.surface-selected} fill and {colors.primary} icon and label.

**Search field.** White field with a {colors.hairline} 1px border, rounded, a magnifier icon at left and centered placeholder.

**Theme button.** White button with a thin gray border and a 6px radius.

**Content card.** White, 6px radius, 16px 24px padding, a small colored icon tile beside a bold title, a one-line description and a centered illustration.

No primary call-to-action button appears on the captured home page, and the button demo pages did not yield a measurable button, so no button token is declared.

## Design System Architecture

The site is the home of Atlaskit, and its pages state it is Atlassian's UI library for platform components. It is built on the Atlassian Design System (https://atlassian.design), which describes itself as a unified design language across Atlassian apps with sections for color, typography, iconography, tokens, accessibility, AI patterns and grid. The `@atlaskit/tokens` npm package describes tokens as "a single source of truth to name and store Atlassian design decisions" and is published under Apache-2.0.

Atlaskit uses these tokens in its own shell: the home page exposes about 400 `--ds-*` custom properties (`--ds-background-*`, `--ds-text-*`, `--ds-border-*`, `--ds-icon-*`, `--ds-space-*`, `--ds-radius-*`, `--ds-font-*`, `--ds-chart-*`), plus theme switching through the "Theme" button. The design-system link is real and in use, with measured values taken from the page itself; atlassian.design pages were cited only for naming and typography context.

## Do's and Don'ts

- Do use semantic tokens (`--ds-text`, `--ds-background-brand-bold`) instead of raw hex.
- Do keep the interface neutral and let blue mark only active and brand elements.
- Do pair Charlie Display for titles with Atlassian Sans for UI text.
- Do use 14px as the default UI text size.
- Don't add colored fills to cards; keep them white on the gray page.
- Don't use heavy shadows; keep to the hairline-plus-faint-drop pair.
- Don't use radii above 8px on functional controls.
- Don't use illustration inside dense UI; confine it to landing cards.

## Responsive Behavior

The extractor captured a 390px mobile view, but its layout was not opened or measured here beyond the type roles; the docs sidebar has a collapse control in the capture, but its behaviour at narrow widths was not measured. Type is specified in rem by the Atlassian design system so it scales with browser settings.

## Iteration Guide

1. Start with {colors.canvas} surfaces on a {colors.page-largest} backdrop and {colors.ink} text.
2. Reserve {colors.primary} for active navigation, links and the brand call to action.
3. Use 14px Atlassian Sans for UI, and Charlie Display at 32px for page titles.
4. Build cards at 6px radius with 16px 24px padding and the two-layer hairline shadow.
5. Reference tokens by their `--ds-*` names when adding anything new, and verify against atlassian.design.
