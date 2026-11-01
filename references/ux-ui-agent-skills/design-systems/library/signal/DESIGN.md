---
version: alpha
name: Signal
category: "Media & Consumer Tech"
description: "Signal's site pairs a white canvas with a periwinkle #9dbbf8 hero, Signal blue #2c6bed text on white 8px-radius buttons, Inter ExtraBold 60px/800 headlines over Inter 20px/28px body text, 16px-radius white feature cards with soft shadows, pastel illustration panels and a #3c3744 footer."
colors:
  canvas: "#ffffff"
  page-largest: "#f6f6f6"
  ink: "#1b1b1b"
  primary: "#2c6bed"
  primary-hover: "#1851b4"
  hero-blue: "#9dbbf8"
  surface-teal: "#a5cad5"
  ink-secondary: "#404654"
  ink-on-dark: "#e9e9e9"
  footer-bg: "#3c3744"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 60px
    fontWeight: 800
    lineHeight: 64px
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 40px
    fontWeight: 800
    lineHeight: 44px
  heading:
    fontFamily: Inter, sans-serif
    fontSize: 40px
    fontWeight: 800
    lineHeight: 44px
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 28px
    fontWeight: 800
    lineHeight: 32px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: "\"system-ui\", -apple-system, \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 16px
spacing:
  s1: 8px
  s2: 9px
  s3: 12px
  s4: 16px
  s5: 19px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 48px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 50px
    boxShadow: rgba(51, 51, 51, 0.05) 0px 1.25px 2.5px 0px, rgba(51, 51, 51, 0.05) 0px 2.5px 5px 0px
  button-primary-hover:
    textColor: "{colors.primary-hover}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 9px 19px
    height: 50px
    border: "2px solid #2c6bed"
    boxShadow: rgba(51, 51, 51, 0.05) 0px 1.25px 2.5px 0px, rgba(51, 51, 51, 0.05) 0px 2.5px 5px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 16px 0px
  feature-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 30px
    boxShadow: "rgba(0, 0, 0, 0.12) 0px 4px 12px 0px, rgba(0, 0, 0, 0.08) 0px 0px 2px 0px"
  media-panel:
    backgroundColor: "{colors.surface-teal}"
    rounded: "{rounded.sm}"
    padding: 16px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-on-dark}"
    padding: 48px 24px 96px
---

# Signal

## Overview

Signal's home page (https://signal.org/, title "Signal >> Home") is calm, clean and illustrated. An 85px white header carries the blue Signal logo and plain text links (Get Signal, Help, Blog, Developers, Careers, Donate, and a globe "English" menu). Below it, a 680px periwinkle hero (`#9dbbf8`) holds the ExtraBold headline "Speak Freely", the line "Say "hello" to a different messaging experience. An unexpected focus on privacy, combined with all of the features you expect.", and a white "Get Signal" button. Two tilted phones beside them show a group video call and a chat thread.

The rest of the page explains the product in plain sections: "Why use Signal?", a "Share Without Insecurity" row with a large teal (`#a5cad5`) media panel, a 2×2 grid of white feature cards on a light grey band (Say Anything, Speak Freely, Make Privacy Stick, Get Together with Groups), "No ads. No trackers. No kidding." beside a lilac illustration of crossed-out ads, and "Free for Everyone" beside a globe of speech bubbles with a "Donate to Signal" button. A dark aubergine-grey footer closes it.

The illustration style is flat and editorial: outlined speech bubbles in lilac, periwinkle and teal, halftone dot textures, a sunglasses-wearing cat sticker, and real photos framed in rounded windows. The voice is warm and direct, with a little wit ("No kidding."), and it explains rather than sells: "Signal is an independent nonprofit."

## Colors

- **Canvas `#ffffff`.** The header, the main sections and the button fills.
- **Page largest `#f6f6f6`.** The light grey band behind the feature cards, the largest measured background area (1,580 units).
- **Ink `#1b1b1b`.** Headlines and body text (1,069 characters).
- **Primary `#2c6bed`.** Signal blue: the text and border colour of the "Get Signal" and "Donate to Signal" buttons. Signal's buttons are white with blue text, so the generated `primary` (the white button fill) was reassigned to this measured blue. No blue-filled button exists on the page.
- **Primary hover `#1851b4`.** The measured hover colour of the button text.
- **Hero blue `#9dbbf8`.** The periwinkle hero band (870 area units).
- **Surface teal `#a5cad5`.** The large "Share Without Insecurity" media panel. It also tints the globe illustration panel in the capture.
- **Ink secondary `#404654`.** Supporting text (480 characters), such as the feature-card descriptions and the "Explore below…" intro.
- **Ink on dark `#e9e9e9`.** Footer text.
- **Footer `#3c3744`.** A dark aubergine grey.

The illustrations add lilac and a stronger blue, which come from artwork and are not CSS tokens. The CSS also ships a Bulma-derived theme (`--bulma-black-ter: #1f2229`, `--bulma-white-ter: #f3f4f6`) that the home page does not visibly use.

## Typography

**Inter** is self-hosted from signal.org/assets/fonts/inter and loaded at 400, 600 and 800.

- **Display.** 60px/800 with a 64px line height: "Speak Freely". The ExtraBold weight gives the friendly, chunky voice.
- **Heading.** 40px/800 with 44px leading: "Why use Signal?", "No ads. No trackers. No kidding.", "Free for Everyone".
- **Subheading.** 28px/800 with 32px leading: "Share Without Insecurity" and the card titles.
- **Body.** 20px/400 with 28px leading for section copy. 16px/24px (the most frequent size, 955 characters) is used for nav, card descriptions and the footer.
- **Button.** 20px/600 in the system UI stack (`system-ui, -apple-system, "Segoe UI", Roboto, …`), not Inter.

No letter-spacing was measured. Inter is open source, so no substitute is needed.

## Layout

Measured at 1280px wide and 4,590px tall, in six bands: the white header (85px), the periwinkle hero (680px), the white "Why use Signal?" section (1,012px), the grey card band (1,234px, two columns), the white section with "No ads…" and "Free for Everyone" (1,269px), and the footer (310px, four link columns plus a legal blurb). Feature rows split into a text column and a large illustration panel; the text and image sides alternate. The card grid is 2×2 with even gutters. The only measured gap value is 12px; paddings concentrate at 12px, 48px and 30px. The CSS breakpoints are `min-width: 769px` (59 rules), `1024px` (55), `1216px` (47) and `1408px` (25).

## Elevation & Depth

Signal uses gentle, realistic shadows. The feature cards carry `rgba(0, 0, 0, 0.12) 0px 4px 12px 0px, rgba(0, 0, 0, 0.08) 0px 0px 2px 0px` (four elements), a soft lift with a hairline edge. The buttons carry an even subtler two-layer shadow, `rgba(51, 51, 51, 0.05) 0px 1.25px 2.5px 0px, rgba(51, 51, 51, 0.05) 0px 2.5px 5px 0px`. The hero phones overlap the band's bottom edge, the only overlap on the page.

## Shapes

Two radii define the system: **8px** for buttons and **16px** for cards and media panels (the most frequent, seven elements). The CSS adds 12px and 24px. The illustrations use rounded speech-bubble shapes with thick dark outlines, and photos are framed in rounded rectangles. The logo is a circle made of a dashed ring around a speech bubble.

## Components

- **Primary button.** "Get Signal": white fill, Signal blue `#2c6bed` system-UI 20px/600 text, 8px radius, 0 20px padding, 50px tall, with the two-layer 5% shadow. On hover the text darkens to `#1851b4`.
- **Outline button.** "Donate to Signal": the same, plus a `2px solid #2c6bed` border and 9px 19px padding.
- **Header.** White, 16px vertical padding: the logo at the left, Inter 16px links at the right, and a globe language menu.
- **Feature card.** White, 16px radius, 30px padding, the soft shadow. A centred illustration on top, then a 28px/800 title and a centred 16px `#404654` description.
- **Media panel.** A 16px-radius, `#a5cad5` panel with 16px padding (its content is blank in the capture); a dark teal "…" chat bubble sits at its lower left.
- **Footer.** `#3c3744` with `#e9e9e9` 16px/22px text: the copyright and trademark notes, then columns Organization, Download, Social and Help.

## Design System Architecture

Signal publishes brand assets at https://signal.org/brand/ (linked as "Brand Assets" in the footer). The page offers the Signal logo bundle, mobile and desktop app-screen bundles and a trademark list. Its rules include "Only use the official Signal Logo", a clear space of "at least half (0.5x) the size of the logo", a 26×26px minimum size, and no rotating, stretching, outlining or effects. It publishes no colour or type specification. The website's CSS is built on the Bulma framework: `:root` carries hundreds of `--bulma-*` variables (`--bulma-scheme-h`, `--bulma-shadow`, `--bulma-body-family`), and the media queries break at 769, 1024, 1216 and 1408px. Signal's own layer adds Inter, the blue button colours and the pastel section fills.

## Do's and Don'ts

**Do**
- Use white buttons with Signal blue `#2c6bed` text and an 8px radius; outline the secondary one in 2px blue.
- Set headlines in Inter ExtraBold (800), body in Inter 400 at 20px/28px.
- Separate sections with flat pastel bands (periwinkle hero, light grey card band) and rounded illustration panels.
- Use flat, outlined illustrations with speech bubbles and halftone texture.
- Keep shadows soft and low (12px blur at most).

**Don't**
- Don't fill buttons with blue; the measured buttons are white.
- Don't rotate, stretch, outline or add effects to the logo (brand page rule).
- Don't use dark sections except for the footer.
- Don't mix radii beyond 8px and 16px for UI.

## Responsive Behavior

Measured at 390px wide. "Speak Freely" drops from 60px/64px to **40px/44px** (display-mobile), and the 40px headings drop to 28px/32px. Body text drops from 20px/28px to 16px/22px. The "Get Signal" button keeps its 20px/600 text, 8px radius and 50px height. The header shrinks to 53px; two header links were measured as visible, and a toggle labelled "menu" was measured as visible. In the mobile capture, the hero phones sit below the hero copy, and the feature cards run in one column. The footer columns appear one after another, above the copyright text. Content insets are 24px on each side (x 24–366), and the card band uses x 54–336.

## Iteration Guide

1. Start with white, `#1b1b1b` Inter text, and a periwinkle `#9dbbf8` hero.
2. Add a 60px/800 headline (40px on mobile), a 20px/28px intro and one white 8px-radius button with blue `#2c6bed` text.
3. Build sections from a text column plus a 16px-radius pastel illustration panel, alternating sides.
4. Use white 16px-radius cards with the soft `0 4px 12px` shadow on a `#f6f6f6` band for feature grids.
5. Close with a `#3c3744` footer in `#e9e9e9` text.
6. Check the brand page before using the logo: clear space, minimum size, no effects.
