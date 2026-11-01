---
version: alpha
name: Digdir (Norwegian Digitalisation Agency)
category: "Design Systems"
description: "Design language of digdir.no, built on the open Designsystemet token set: Inter at 400/500 weights, deep navy ink #1f2c3d on white, accent blue #0062ba for interaction, warm sand #f8e7c1 content cards with 8px radius, and flat illustration instead of photography-heavy heroes. Buttons use a 4px radius; the footer flips to navy #1e2b3c."
colors:
  canvas: "#ffffff"
  ink: "#1f2c3d"
  primary: "#0062ba"
  on-primary: "#ffffff"
  neutral-base: "#1e2b3c"
  surface-blue: "#b9dffc"
  surface-sand: "#f8e7c1"
  surface-sand-hover: "#f3d797"
  ink-subtle: "#545e6b"
  accent-text: "#002c54"
  hairline: "#b8bcc1"
  nav-text: "#000000"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 44px
    fontWeight: 500
    lineHeight: 57.2px
  heading:
    fontFamily: Inter, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 46.8px
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 31.2px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 12px
  s4: 14.4px
  s5: 16px
  s6: 28px
  s7: 32px
  s8: 48px
  s9: 52px
  s10: 54px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.surface-sand}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  card-hover:
    backgroundColor: "{colors.surface-sand-hover}"
  footer:
    backgroundColor: "{colors.neutral-base}"
    textColor: "{colors.canvas}"
    padding: 56px 0px
---

## Overview

Digdir is the Norwegian Digitalisation Agency, and its homepage at https://www.digdir.no reads like a public-service document rather than a marketing page. The capture shows a white canvas (#ffffff), navy text (#1f2c3d), and a restrained set of tinted surfaces: a pale blue (#b9dffc) and a warm sand (#f8e7c1). The first thing visible in the capture is a cookie question banner ("Vil du godta at vi samler inn data om bruk av nettsiden?") with Ja and Nei buttons; those controls belong to the consent dialog and are not documented here as brand buttons. Below the header (logo with a red open-ring mark, then "Søk" and "Meny") the hero is a left-aligned h2 "Dette er Digdir" at 44px beside a flat illustration of two figures in front of a laptop-shaped sunset.

The mood is calm, plain-spoken and task-first. Microcopy is imperative Norwegian: "Bruke felles arkitektur", "Lage trygge tjenester", "Finne krav", "Dele eller bruke data". A section headed "Hva skal du gjøre?" (What should you do?) offers six icon cards, followed by a "Nyheter" news row with photographs and illustrations. Imagery is almost entirely flat vector art in navy, ochre, coral and sky blue; photography appears only inside news thumbnails.

The site is built on Designsystemet, the open Norwegian design system, whose tokens are present as `--ds-*` CSS custom properties on the page. That makes this file a hybrid: values are measured from the live page, and the naming of roles follows the token structure the system documents.

## Colors

The palette is functional. Canvas is #ffffff, covering the dominant share of the page. Ink is #1f2c3d, used for headings, body text and card titles; a secondary text tone #545e6b (Designsystemet's neutral subtle text) carries less important copy. Interactive blue is #0062ba: it is the site's accent base token and the color that Søk and Meny take on hover. A deeper accent text color, #002c54, also appears in the measured text colors.

Surfaces carry the personality. Sand #f8e7c1 fills the six "Hva skal du gjøre?" cards and shifts to #f3d797 on hover, with a 1px navy outline appearing. Pale blue #b9dffc is the cookie banner and informational surface family. A navy #1e2b3c block is used for the footer, with text in canvas white. Hairlines are #b8bcc1, a 1px ring used around the large featured news card. Pure black #000000 appears for the header button text (Søk, Meny) before hover.

Browser default link colors are not part of this palette; links on the page are navy and underlined rather than blue.

## Typography

Inter is the single typeface (`--ds-font-family: Inter`), loaded at weights 400 and 500. Icons come from Font Awesome and Material Symbols and are not brand type. The scale measured on the page: display 44px / weight 500 / line-height 57.2px (the "Dette er Digdir" hero), heading 36px / 500 / 46.8px (section titles such as "Nyheter"), subheading 24px / 500 / 31.2px (card titles), and body 16px / 400 / 24px. Lead paragraphs under the hero appear visibly larger than body copy in the capture, but the 16px body is what the extractor measured for running text.

Letter-spacing is normal on measured roles. Titles inside cards are underlined links, so the underline functions as the primary link affordance everywhere, including headings.

Inter is an open typeface and needs no substitute; where it fails to load, the stack falls back to the generic sans-serif.

## Layout

The page is a single centered column with generous gutters and a 12-column-feeling grid: the six action cards sit in a 3 by 2 grid, the news row repeats three columns, and the featured news item is a two-part card with an illustration on the left and text on the right. Vertical rhythm uses the spacing tokens s5 (16px), s7 (32px) and s8 (48px) between related elements and sections; s9 (52px) and s10 (54px) appear as larger paddings, and the footer uses 56px of vertical padding. Small steps (1px, 6px, 12px, 14.4px, 28px) are used inside components.

Density is low to medium: each card carries an icon, a title link and two to four lines of description. Text blocks are held to short measures so descriptions wrap in three or four lines.

## Elevation & Depth

Depth is nearly absent. The only measured box shadow is a flat 1px ring in #b8bcc1 (a spread-only shadow acting as a border) around the featured card; hover swaps it for a 2px navy ring and tints the card background. The Designsystemet token set defines shadow steps (xs to xl), but the capture does not show them in use on the homepage. Separation is achieved with tint, outline and whitespace instead of elevation.

## Shapes

Corners come from Designsystemet's radius scale of a 0.25rem base. Cards and the featured block use 8px (rounded.sm); the cookie buttons measured at 4px (rounded.xs); the 9999px pill value is measured on a handful of elements. Header buttons are square, with no radius. Photos in the news row take the same 8px on their outer corners, with only the top corners rounded where the image sits above its text.

## Components

**Header (nav).** White background, logo at left, "Søk" and "Meny" text buttons with icons at right. Text is #000000 and turns accent blue #0062ba on hover.

**Action cards.** Sand #f8e7c1, 8px radius, a line icon, an underlined title in the 24px subheading style, and body-size description. Hover: #f3d797 plus a thin navy outline.

**Featured news card.** White with a 1px #b8bcc1 ring, 8px radius, tinted illustration panel on the left.

**Links.** Navy ink and underlined; accent blue is reserved for navigation hover.

**Footer.** Navy #1e2b3c with white text and 56px of vertical padding.

**Cookie banner.** A pale blue strip above the header with a question, a text link and two bordered buttons (48px tall, 4px radius). It is a consent dialog and should not be reproduced as the brand's button style.

No primary call-to-action button exists in the captured viewport, so none is declared; use the card-link and underlined-link patterns instead.

## Design System Architecture

The public system is Designsystemet (https://designsystemet.no), described on its homepage as a shared toolkit with UI components, guidelines and patterns. Its source lives at https://github.com/digdir/designsystemet, whose README lists the packages @digdir/designsystemet (CLI), @digdir/designsystemet-css, @digdir/designsystemet-web, @digdir/designsystemet-react and @digdir/designsystemet-types. The CSS package includes a default theme.

The system is clearly used by digdir.no: the page root defines custom properties such as `--ds-color-accent-base-default`, `--ds-color-neutral-text-default`, `--ds-border-radius-default`, `--ds-size-*`, `--ds-shadow-*` and `--ds-font-family`. Alongside them sit Bootstrap `--bs-*` variables, so the site mixes the Designsystemet tokens with a Bootstrap base.

The colors documentation at https://designsystemet.no/no/fundamentals/design-tokens/colors describes scales (Accent, Neutral, Brand1, Brand2, Brand3, plus Success, Danger, Warning and Info) and a token naming pattern of scale, group (Background, Surface, Border, Text, Base) and variant (default, subtle, tinted, hover, active). A theme builder derives scales from a chosen brand color. The sand cards on digdir.no correspond to a brand2 surface token (`--ds-color-brand2-surface-tinted: #f8e7c1`), and the accent base is #0062BA.

## Do's and Don'ts

- Do keep Inter at 400 for text and 500 for titles.
- Do use navy #1f2c3d on white or tinted surfaces for body copy.
- Do mark links with underlines, including card titles.
- Do use sand #f8e7c1 for grouped action cards and #b9dffc for informational strips.
- Don't add drop shadows; use a 1px #b8bcc1 outline.
- Don't use accent blue #0062ba as a large fill on this page; it appears as hover and link-state color.
- Don't copy the cookie banner buttons as the brand's button style.
- Don't use photography as hero imagery; the hero is flat illustration.

## Responsive Behavior

The extractor measured a desktop viewport of 1280px and a mobile pass. This file records only the desktop measurements as exact values; the mobile layout was not inspected visually. Type sizes in Designsystemet are defined with relative calculations, so headings scale with the root size. Tap targets in the measured controls are 48px tall (the cookie buttons) and 32px for the header buttons.

## Iteration Guide

1. Start from canvas #ffffff and ink #1f2c3d; add sand #f8e7c1 only for grouped cards.
2. Set all type in Inter: 44/36/24px at weight 500 and 16px at 400.
3. Use 8px radius for cards, 4px for small controls, 9999px for circles.
4. Make every title a navy underlined link; reveal accent blue #0062ba and the #f3d797 tint on hover.
5. Replace shadows with a 1px #b8bcc1 ring and finish pages with the navy #1e2b3c footer.
6. Prefer flat vector illustrations in navy, ochre and coral over stock photography.
