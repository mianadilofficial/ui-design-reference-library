---
version: alpha
name: Mesh Design System
category: "Design Systems"
description: "Mesh is nib Group's design system and its documentation site: a deep forest green (#144a38) used for headlines, links and pill buttons on a sage (#dae6d2), cream (#f5f0d6) and peach (#fedcc6) banded layout, set in the system sans stack at bold 60px with negative tracking, with 8px-radius outlined cards and a lime (#82e578) accent."

colors:
  canvas: "#ffffff"
  ink: "#262626"
  primary: "#144a38"
  on-primary: "#f8f8f8"
  surface-sage: "#dae6d2"
  surface-neutral: "#f1f1f1"
  ink-deep: "#1b1b1b"
  hairline: "#ababab"
  brand-lime: "#82e578"
  footer-border: "#b9b9b9"
  surface-cream: "#f5f0d6"
  surface-peach: "#fedcc6"
typography:
  display:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 60px
    fontWeight: 700
    lineHeight: 52.5px
    letterSpacing: "-0.9px"
  display-mobile:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: "-0.72px"
  heading:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.48px"
  body:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.32px"
  button:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: "-0.32px"
  nav:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  link:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
    letterSpacing: "-0.28px"
rounded:
  xs: 8px
  pill: 9999px
spacing:
  s1: 8px
  s2: 12px
  s3: 16px
  s4: 24px
  s5: 32px
  s6: 48px
  s7: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 32px
    height: 52px
  buttbrand-lime:
    textColor: "{colors.brand-lime}"
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 32px
    height: 52px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 8px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 8px
  text-input:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 8px 16px 8px 32px
    height: 40px
    boxShadow: rgb(171, 171, 171) 0px -2px 0px 0px inset
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 32px
    borderColor: "{colors.footer-border}"
---

## Overview

The measured site is meshdesignsystem.com, titled "Mesh": the public documentation of nib Group's design system. The page text calls it "nib's Mesh Design System" and says it "enables teams to create cohesive, high-quality products and experiences faster for our existing and prospective members, providers and partners"; the footer reads "Copyright © 2026 nib Group". The top of the capture has a lime-green announcement strip ("Autumn 2026 Mesh Release and Design Tokens v2 now available!" with a link to the announcement), a white header with the "mesh" wordmark, a search field and four links (Design, Develop, Analytics, Feedback), and then a sage-green hero. The hero headline, "Mesh enables teams to create high-quality products and experiences faster for our members.", is set in deep green with two pill buttons, "Get started" (solid) and "Take me to components" (outlined). On the right sits a large, energetic flat illustration of two people mid-leap in front of a lime-green arrow shape.

Below, the page is organised as horizontal bands, each tinted differently (cream for Getting Started, peach for Design, pale sage for Develop). In each band a short title and paragraph with an underlined link sit at the left, and three outlined white cards at the right each combine a tinted icon panel on top with a bold title and a paragraph below (Design principles, Accessibility, Foundations; Figma libraries, Layout, Playroom; Components, Storybook, Static site starter).

The tone is friendly, practical and plainspoken. Colour is playful for an insurer's system: sage, cream and peach bands with a vivid lime used sparingly.

## Colors

The site publishes its theme as CSS custom properties, which are the source for the roles below.

- **canvas (#ffffff)** is the theme background (`--themeColorBg`). The first screen is mostly sage, though; the hero and header areas are tinted, and white is the card and header fill.
- **ink (#262626)** is the default foreground (`--themeColorFg`) and the most-read text colour; **ink-deep (#1b1b1b)** is a measured darker text tone.
- **primary (#144a38)** is the brand foreground and link colour (`--themeColorFgBrand`, `--themeColorFgLink`) and the measured fill of the solid "Get started" button; **on-primary (#f8f8f8)** is the label colour on it. This is a deliberate choice: the same stylesheet's primary-button token (`--buttonColorPrimaryBg`) is lime #82e578 with a dark-green label, but the documentation site's own hero button is dark green, so the measured one is used.
- **brand-lime (#82e578)** is the accent: the announcement strip, the illustration's arrow and the colour of the primary button label on hover.
- **surface-sage (#dae6d2)**, **surface-cream (#f5f0d6)**, **surface-peach (#fedcc6)** and **surface-neutral (#f1f1f1)** are the measured band fills.
- **hairline (#ababab)** is the border colour of cards and the input underline; **footer-border (#b9b9b9)** is the footer's top rule.

The stylesheet also defines status colours (for example error #7a0c0c, info #003b77) and many component-level colours; they were not painted on the first screen and are not tokenised.

## Typography

All measured text uses the system stack -apple-system, system-ui, Segoe UI, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif. The stylesheet's heading tokens name a "Buenos Aires" face first in the heading stack, but no font was loaded on the page (the load list is empty), so the rendered text falls to the system stack.

- **display**: 60px, weight 700, line-height 52.5px, letter-spacing -0.9px. On a 390px viewport: 36px, line-height 36px, tracking -0.72px (display-mobile).
- **heading**: 24px, weight 700, line-height 24px, tracking -0.48px (section titles and card titles).
- **body**: 16px, weight 400, line-height 24px, tracking -0.32px.
- **button**: 16px, weight 700, line-height 16px, tracking -0.32px.
- **nav**: 16px, weight 500, line-height 16px.
- **link**: 14px, weight 500, line-height 21px, tracking -0.28px.

Tight negative tracking and leading shorter than the font size on the hero make the headline dense and poster-like.

## Layout

A full-width header and announcement strip sit above banded sections. Section content is a four-column feel: one narrow text column plus three equal card columns. Cards are stacked images-on-top: a tinted icon panel then a white text area. Measured spacing steps are 8px, 12px, 16px, 24px, 32px, 48px and 64px; the footer has 32px padding and the nav 8px. Density is medium, with comfortable gutters between cards and generous band padding.

## Elevation & Depth

The system is predominantly flat. Cards are separated from the tinted band by a thin grey (#ababab) outline and their white body, not by shadows. The input field uses an inset bottom edge, rgb(171, 171, 171) 0px -2px 0px 0px inset, rather than a box. The stylesheet defines raised shadow tokens (for example "raised A" and "raised B" with low-opacity black), but they are not visible on the first screen.

## Shapes

Radii are 8px (xs) for cards and a full pill (9999px) for buttons; the stylesheet also defines 4px (small), 8px (default), 16px (large) and full radii as theme tokens. The pill is the system's signature control shape, set against softly cornered rectangular cards.

## Components

- **button-primary** ("Get started"): #144a38 fill, #f8f8f8 label, 16px weight 700 with -0.32px tracking, pill radius, padding 16px 32px, height 52px; on hover the label turns lime (#82e578).
- **button-secondary** ("Take me to components"): transparent, deep green label and 2px green border, same size and radius.
- **nav / nav-link**: white bar, deep green 16px items with small outline icons, padding 8px.
- **link**: deep green, 14px weight 500, underlined in running text.
- **text-input**: #f8f8f8 fill, #262626 text, 8px 16px 8px 32px padding, height 40px, inset bottom rule in #ababab; the search field has a magnifier icon at left.
- **card**: white fill, deep green titles, 8px radius, hairline border, icon panel above.
- **footer**: white, #262626 text, 32px padding, #b9b9b9 border.

## Design System Architecture

Mesh is itself a public design system, documented at https://www.meshdesignsystem.com and described there as owned by nib Group. Its Design Tokens overview (https://www.meshdesignsystem.com/design-tokens/overview/) states a three-tier hierarchy: common tokens (spacing, breakpoints, container widths), theme tokens (semantic and brand-dependent values), and primitive tokens (not surfaced). Names are hierarchical (for example `nib.theme.color.fg.brand` and `common.dimension.spacing.4`), values resolve through brand, sentiment (default, hero, positive, negative, cautionary) and prominence (prominent, default, gentle, muted), and the supported outputs are Figma and React with CSS, iOS and Android planned. Its Colors page (https://www.meshdesignsystem.com/foundations/colors/) explains that colours are chosen by sentiment and prominence rather than by hex, and that backgrounds are limited to default and hover. The shipped CSS on the documentation site exposes these as camelCase custom properties such as `--themeColorFgBrand`, `--buttonColorPrimaryBg` and `--themeDimensionBorderRadius`, which is where the role mapping above comes from. The site demonstrably uses its own theme variables, although its brand-colour guidance lives on a separate nib brand page that was not read.

## Do's and Don'ts

- Do pick colours by sentiment and prominence, not by free choice of hex.
- Do use #144a38 for headlines, links and the main hero button on tinted backgrounds.
- Do use pills for buttons and 8px for cards.
- Do keep lime (#82e578) as a sparing accent.
- Don't rely on colour alone to convey state; the system is built around accessible contrast.
- Don't add shadows to cards; use the thin grey outline.
- Don't mix more than one band tint inside a single section.
- Don't present the announcement strip as navigation; it is a temporary message.

## Responsive Behavior

The hero headline falls from 60px to 36px at a 390px viewport while its line-height changes from 52.5px to 36px. The stylesheet declares a breakpoint token set that begins at a "mini" width of 240px; other widths were not measured, so the reflow of the three-card grid is not specified here. Buttons are 52px high, comfortable for touch.

## Iteration Guide

1. Choose a band tint (sage, cream or peach) and set a deep-green (#144a38) headline in bold with negative tracking.
2. Add one solid pill button and, if needed, one outlined pill beside it.
3. Build cards with white fill, an 8px radius, an #ababab border and a tinted icon panel above the title.
4. Keep body copy at 16px in #262626.
5. Use lime only as an accent, for example in hover text or illustrations.
6. For anything beyond these values, consult the token reference at https://www.meshdesignsystem.com/design-tokens/tokens-reference/ rather than inventing values.
