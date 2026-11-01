---
version: alpha
name: Aspen Search
category: "Tech & AI"
description: "Executive search for quantitative finance and tech: white #ffffff grid of hairline-divided cells, near-black #232323 ink and panels, mint #a1ffcb accent, SuisseIntl at weight 450 with -4% tracking (161.339px display), SuisseIntl Mono 12px uppercase labels, halftone-dithered imagery, square 0px corners."
colors:
  canvas: "#ffffff"
  ink: "#232323"
  primary: "#232323"
  on-primary: "#ffffff"
  accent-mint: "#a1ffcb"
  surface-grey: "#e0e0e0"
  grey: "#d9d9d9"
  ink-soft: "#363636a6"
typography:
  display:
    fontFamily: suisseIntl, "suisseIntl Fallback", Arial, system-ui, sans-serif, ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 161.339px
    fontWeight: 450
    lineHeight: 161.339px
    letterSpacing: "-4%"
  display-mobile:
    fontFamily: suisseIntl, "suisseIntl Fallback", Arial, system-ui, sans-serif, ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 53.8122px
    fontWeight: 450
    lineHeight: 43.0498px
    letterSpacing: "-4%"
  heading:
    fontFamily: suisseIntl, "suisseIntl Fallback", Arial, system-ui, sans-serif, ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 94.9428px
    fontWeight: 450
    lineHeight: 77.8531px
    letterSpacing: "-4%"
    textTransform: uppercase
  subheading:
    fontFamily: suisseIntl, "suisseIntl Fallback", Arial, system-ui, sans-serif, ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 35.8204px
    fontWeight: 450
    lineHeight: 39.4025px
    letterSpacing: "-4%"
  body:
    fontFamily: suisseIntlMono, "suisseIntlMono Fallback", ui-monospace, monospace, ui-monospace, monospace
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
    letterSpacing: "-4%"
    textTransform: uppercase
  button:
    fontFamily: suisseIntl, "suisseIntl Fallback", Arial, system-ui, sans-serif, ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 16px
    fontWeight: 450
    lineHeight: 20.8px
    letterSpacing: "-4%"
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 2.8px
  s4: 4px
  s5: 4.63px
  s6: 5.12px
  s7: 7.75px
  s8: 8px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 60px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px 12px
    height: 36px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    borderColor: "{colors.ink}"
---

## Overview

Aspen Search (aspensearch.com, titled "Aspen Search - Executive Search for Quantitative Finance & Tech") is a recruiting firm that places "software engineers, quantitative researchers, and AI/ML scientists into the firms shaping markets and technology since 2006". The site is built as a strict grid of hairline-divided rectangles in two columns. The capture shows: a white cell with the wordmark "Aspen" at 161.339px; halftone-dithered grey images of a sweeping curved form; a near-black cell with white copy and a "START A CONVERSATION" button; a mint cell with "We don't move volume. We move careers that compound" and logos of recent-hire employers (Coinbase, Stripe and a circular dark logo); a grey cell holding "Search"; a black cell with the white uppercase statement "PLACING WINNERS."; and an "ABOUT ASPEN" section with long-form paragraphs.

The voice is direct and selective: "We don't pitch roles. We have honest conversations about where someone should spend the next five years of their career". The header carries a small logo tile at the top left, local times ("LA: 08:49 PM" and "NYC" in the page text), links About, Clients, Testimonials, Team, a two-state toggle, and a black "Contact" cell with an arrow.

The system is monochrome with one accent. Near-black #232323 and white take most of the area, grey cells separate them, and mint #a1ffcb marks the single emphasized panel and the button hover.

## Imagery and Voice

Images are black-and-white halftone dither: a dot-matrix pattern in black on white with a smooth flat grey (#d9d9d9) curved form passing through it. They carry no people and no product screenshots, so the grid of type and flat color blocks does the communicating. Copy is written in short declarative sentences: "Placing winners.", "We don't move volume.", "That's the bar we hold ourselves to." Section labels use a small filled square followed by an uppercase mono caption ("ABOUT ASPEN"). Numerals and time readouts appear in the page chrome (the page text opens with "LA: 08:49 PM" followed by a column of digits 0 to 9).

## Colors

- **Canvas** `#ffffff` covers the largest area (7,464 units). **Ink** and **primary** `#232323` (the `--color-black` variable, also `--color-theme-fg` rgb(35 35 35)) covers 2,916 text characters and 1,910 background area units.
- **Accent mint** `#a1ffcb` (`--color-mint`) fills the "Recent hires" panel (962 area units) and is the hover fill of the "START A CONVERSATION" button, which switches to #232323 text on mint with a #232323 border.
- **Surface grey** `#e0e0e0` (3,980 area units) and **grey** `#d9d9d9` (`--color-grey`, 838) fill the neutral cells.
- **Ink soft** `#363636a6`, a translucent dark measured on 15 characters.
- White `#ffffff` text covers 1,592 characters, used on the dark cells; the variables also include `--color-black-deep` #000 which was not measured on a rendered element.

Colors such as #08225a, #004b87, #009aa6, #262160 and #03598c appear in the area list but are client logo tiles, not Aspen brand colors, so they are not tokens.

## Typography

Two families: suisseIntl (3,688 measured characters, weights 400 and 450) and suisseIntlMono (835 characters, 400). Headings and body share weight 450 and letter-spacing -4% via variables `--text-headline-10…50--letter-spacing` (-4%) and `--text-body-20/30--letter-spacing` (-2%).

- Display ("Aspen"): 161.339px / 161.339px, weight 450, -4%. Mobile pass: 53.8122px / 43.0498px.
- Heading ("CONNECTING TOP-TIER TALENT" and "PLACING WINNERS."): 94.9428px / 77.8531px, uppercase. On mobile the h2 measured 58.0118px.
- Subheading: 35.8204px / 39.4025px. Other measured sizes: 29.9102px (734 characters), 24px, 80px, 124.327px and 109.551px.
- Button: suisseIntl 16px / 20.8px, weight 450.
- Body label: suisseIntlMono 12px, uppercase, line-height 12px, -4%. The most-used size is 16px (1,875 characters), then 14px and 12px.

Font substitutes: Suisse Intl is commercial; use Inter or Helvetica Neue at weight 500 with -4% tracking, and a monospace such as IBM Plex Mono for the labels.

## Layout

Page height is 10,009px at 1280px. The layout is a two-column grid with a vertical rule down the middle (at 50% of the width in the capture), horizontal hairlines between rows, and cells that tile the page like a spreadsheet; the second row splits one half into two quarter-width cells (black and mint). Large type is anchored to the lower left of its cell. Small mono labels such as "■ ABOUT ASPEN" sit at the top of cells. A sticky consent block was found and hidden before capture; it is not documented as a brand element. Spacing values measured: 1px, 2px, 2.8px, 4px, 4.63px, 5.12px, 7.75px, 8px, 10px, 12px; the base `--spacing` is .0625rem.

## Elevation & Depth

The site is flat. Measured shadows are Tailwind plumbing (`var(--tw-inset-shadow), var(--tw-inset-ring-shadow)…`, 4 uses), `0 1px` and `inset 0 1px` hairlines. Separation is done with 1px rules and block color changes. Imagery uses black-and-white halftone dither rather than shadow or blur.

## Shapes

All corners are square: the only radius token is 0px, and no radius values were found in the stylesheet. The header logo tile, buttons, cells and panels are rectangles. The easing variable `--ease-in-out` is cubic-bezier(.87, 0, .13, 1).

## Components

- **Primary button ("Contact" and the 60px action):** #232323 fill, white 16px SuisseIntl, padding 0px 20px, height 60px, 0px radius, trailing arrow.
- **Secondary button ("START A CONVERSATION"):** #232323 fill, white 12px SuisseIntl Mono uppercase, 36px tall, padding 0px 12px; hover turns it mint #a1ffcb with #232323 text.
- **Nav link:** 29px tall; hover inverts from #232323 text on transparent to white text on a filled background.
- **Cells:** white, #e0e0e0, #232323 or mint rectangles with hairline borders.
- **Footer:** white with #232323 text and #232323 border color.
- **Theme toggle:** a small two-dot switch beside the nav.

## Design System Architecture

No public design system or brand guideline page for Aspen Search was found on the pages opened (the home page, via extraction); it links to none. The shipped CSS is Tailwind-based: root variables use the Tailwind v4 pattern (`--tw-ring-shadow`, `--spacing`, `--radius-4: calc(.0625rem * 4)`), with brand tokens named `--color-black`, `--color-white`, `--color-grey`, `--color-mint`, `--color-theme-bg`, `--color-theme-fg`, and a typographic scale named `--text-headline-10…50`, `--text-body-10…30` and `--text-digit-10` with matching `--font-weight` and `--letter-spacing` variables. The `theme-bg` and `theme-fg` variables are the hooks for the two-state toggle; the dark theme values were not measured.

## Do's and Don'ts

- Do divide the page into hairline-bordered rectangles with 0px corners.
- Do set display and headings at weight 450 with -4% tracking.
- Do reserve mint #a1ffcb for one emphasized panel and for button hover.
- Do use SuisseIntl Mono uppercase 12px for labels and buttons.
- Don't add radii, drop shadows or gradients.
- Don't use logo-tile colors (#08225a etc.) as brand colors.
- Don't show consent or sticky overlays in design references.

## Responsive Behavior

A 390px mobile pass measured: display 53.8122px / 43.0498px, h2 58.0118px, body text 80px (this role resolves to a large display line on mobile) and a primary CTA 36px tall. Grid column count, menu form and breakpoints: not measured.

## Iteration Guide

1. Start with a white canvas, #232323 ink and a two-column hairline grid.
2. Set type at weight 450 with -4% letter-spacing; scale from 161.339px display down to 16px body.
3. Place one mint #a1ffcb cell per view.
4. Dither imagery to black-and-white halftone and keep all corners at 0px.
5. Run `node web/scripts/verify-designs.mjs --slug=aspen-search`; measure the dark theme and mobile grid before documenting them.
