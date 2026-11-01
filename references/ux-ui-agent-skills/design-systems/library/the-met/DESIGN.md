---
version: alpha
name: The Metropolitan Museum of Art
category: "Culture & Events"
description: "The Met (metmuseum.org): white #ffffff pages with #222222 headings and #6d6d6d text, a serif Austin display headline (66.7981px at 1280px) over Inter UI type on a fluid clamp() scale, Met red #e4002b buttons with 4px corners that darken to #a6192e, #f4f4f4 cards and a deep green #004032 Cloisters panel."
colors:
  canvas: "#ffffff"
  page-largest: "#fbfbfb"
  ink: "#222222"
  primary: "#e4002b"
  on-primary: "#ffffff"
  surface-card: "#f4f4f4"
  cloisters-green: "#004032"
  ink-muted: "#6d6d6d"
  met-red-medium: "#a6192e"
  hairline: "#b8b8b8"
  text-input-text: "#000000"
  newsletter-tint: "#e4002b08"
  divider: "#e5e5e5"
typography:
  display:
    fontFamily: austin, "austin Fallback"
    fontSize: 66.7981px
    fontWeight: 400
    lineHeight: 66.7981px
    letterSpacing: "-0.667981px"
  display-mobile:
    fontFamily: austin, "austin Fallback"
    fontSize: 31.3601px
    fontWeight: 400
    lineHeight: 31.3601px
    letterSpacing: "-0.313601px"
  heading:
    fontFamily: Inter, "Inter Fallback", "Noto Sans", "Noto Sans Fallback", "Noto Sans JP", "Noto Sans JP Fallback", "Noto Sans KR", "Noto Sans KR Fallback", "Noto Sans SC", "Noto Sans SC Fallback"
    fontSize: 30.311px
    fontWeight: 600
    lineHeight: 39.4043px
    letterSpacing: "-0.30311px"
  subheading:
    fontFamily: Inter, "Inter Fallback", "Noto Sans", "Noto Sans Fallback", "Noto Sans JP", "Noto Sans JP Fallback", "Noto Sans KR", "Noto Sans KR Fallback", "Noto Sans SC", "Noto Sans SC Fallback"
    fontSize: 24.2488px
    fontWeight: 600
    lineHeight: 31.5235px
    letterSpacing: "-0.242488px"
  body:
    fontFamily: Inter, "Inter Fallback", "Noto Sans", "Noto Sans Fallback", "Noto Sans JP", "Noto Sans JP Fallback", "Noto Sans KR", "Noto Sans KR Fallback", "Noto Sans SC", "Noto Sans SC Fallback"
    fontSize: 19.3991px
    fontWeight: 400
    lineHeight: 31.0385px
  button:
    fontFamily: Inter, "Inter Fallback", "Noto Sans", "Noto Sans Fallback", "Noto Sans JP", "Noto Sans JP Fallback", "Noto Sans KR", "Noto Sans KR Fallback", "Noto Sans SC", "Noto Sans SC Fallback"
    fontSize: 15.6995px
    fontWeight: 500
    lineHeight: 25.1192px
  nav:
    fontFamily: Inter, "Inter Fallback", "Noto Sans", "Noto Sans Fallback", "Noto Sans JP", "Noto Sans JP Fallback", "Noto Sans KR", "Noto Sans KR Fallback", "Noto Sans SC", "Noto Sans SC Fallback"
    fontSize: 15.6995px
    fontWeight: 600
    lineHeight: 25.1192px
  button-small:
    fontFamily: Inter, "Inter Fallback", "Noto Sans", "Noto Sans Fallback", "Noto Sans JP", "Noto Sans JP Fallback", "Noto Sans KR", "Noto Sans KR Fallback", "Noto Sans SC", "Noto Sans SC Fallback"
    fontSize: 13.6995px
    fontWeight: 500
    lineHeight: 21.9192px
  input:
    fontFamily: Inter, "Inter Fallback", "Noto Sans", "Noto Sans Fallback", "Noto Sans JP", "Noto Sans JP Fallback", "Noto Sans KR", "Noto Sans KR Fallback", "Noto Sans SC", "Noto Sans SC Fallback"
    fontSize: 13.3333px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 4.71px
  s4: 6px
  s5: 7.85px
  s6: 8px
  s7: 10px
  s8: 11.77px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 7.84977px 11.7746px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.met-red-medium}"
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.xs}"
    padding: 8px
    height: 34px
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 7.84977px 11.7746px
    boxShadow: rgb(34, 34, 34) 0px 0px 0px 2px inset
  button-outlined-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
  nav:
    textColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 10px
    height: 44px
    borderColor: "{colors.hairline}"
  newsletter-card:
    backgroundColor: "{colors.newsletter-tint}"
    textColor: "{colors.met-red-medium}"
    rounded: "{rounded.xs}"
    padding: 16px
    borderColor: "{colors.met-red-medium}"
  footer:
    textColor: "{colors.ink}"
    borderColor: "{colors.divider}"
---

# The Metropolitan Museum of Art

## Overview

The Met's home page (metmuseum.org, title "The Metropolitan Museum of Art") pairs an institutional serif headline with a clean, information-dense Inter interface. The page opens on a full-width photograph of the Fifth Avenue façade, with the stacked red-and-white "THE MET" logo, white nav links (Visit, Exhibitions and Events, Art, Learn with Us, Research, Shop ↗, search) and small utility buttons (English, Donate, Membership, and a red Tickets) laid over the image. Below it, on white, the serif headline "Welcome to New York City's most iconic museum." sits left with a red "Buy tickets" button and an outlined "Plan your visit" button to its right, followed by a four-column row of practical facts with small red icons (General Admission: $30, location, free guided tours, opening hours).

The page continues with "Now On View" and "Collection Highlights" carousels that bleed off the right edge with a "View all >" link, a bordered "Become a Member" panel listing benefits with red icons, a row of three `#f4f4f4` promo cards ("Fall at The Met", "Join by October 30…", "Krasner and Pollock: Past Continuous") with "Read more >" links, and a split panel for The Met Cloisters — photograph left, deep green right with a white serif sentence and an outlined white button. The footer lists both locations, link columns, a pink-tinted newsletter card with a red arrow button and a language row. The voice is clear and service-minded ("Pay-what-you-wish for NY residents.").

## Colors

All values are measured on the page; the stylesheet names them in a `--color-*` system.

- **Canvas `#ffffff`** — `--color-site-background`. **Page largest `#fbfbfb`** (`--color-grey-050`) is the largest background area.
- **Ink `#222222`** — `--color-grey-900`, used for headers (`--color-text-header`) and links (`--color-link`).
- **Ink muted `#6d6d6d`** — `--color-grey-700`, the default `--color-text` for paragraphs and metadata; almost as frequent as the ink.
- **Primary `#e4002b`** — `--color-met-red`, the "Buy tickets", "Tickets" and "Join today" fills. **On-primary `#ffffff`**.
- **Met red medium `#a6192e`** — `--color-met-red-medium`, the measured hover fill of red buttons, the newsletter card border and text, and `--color-active-tab`.
- **Surface card `#f4f4f4`** — `--color-grey-100`, alias `--color-component-background`, the promo cards.
- **Cloisters green `#004032`** — `--color-green-dark`, the Met Cloisters panel.
- **Hairline `#b8b8b8`** — `--color-grey-400` (`--color-border`), outlined utility buttons and input border; hover darkens borders to `#6d6d6d`.
- **Divider `#e5e5e5`** — `--color-grey-200` (`--color-divider`).
- **Newsletter tint `#e4002b08`** — Met red at about 3% alpha, the newsletter card fill.
- **Text input text `#000000`**.

The palette also declares secondary tints (`--color-blue-500 #b2e4e4`, `--color-yellow-600 #f6f0a0`, `--color-red-600 #f4c3cc`, `--color-purple #5d1049`, `--color-met-red-dark #6e182e`, accordion reds `#c42c4e`…`#5f2645`) and focus colours (`--color-focus-state-background #c8d8eb`, outline `#001e50`); those were not observed on visible home-page elements.

## Typography

Two families: **Austin** (loaded as `austin`, from files named `Austin_Italic_Web`, `Austin_MediumItalic_Web` and others) for the serif display headline and the Cloisters sentence, and **Inter** (variable, 100–900) for everything else, backed by Noto Sans, Noto Sans JP, KR and SC for other scripts (the site offers English, Español, Português, Français, Italiano, Deutsch, 日本語, 한국어, 中文 and Русский).

All sizes are fluid `clamp`-style values from `--textsize-*` variables, interpolated between 375px and 1440px viewports. At the measured 1280px width:

- **Display** — Austin 400, 66.7981px / 66.7981px, letter-spacing -0.667981px (`--textsize-xxxl`, 60→68px).
- **Heading** — Inter 600, 30.311px / 39.4043px, -0.30311px ("Now On View"; `--textsize-xl`, 25→31.25px).
- **Subheading** — Inter 600, 24.2488px / 31.5235px, -0.242488px ("Become a Member"; `--textsize-l`).
- **Body** — Inter 400, 19.3991px / 31.0385px (`--textsize-m`, 16→20px).
- **Button** — Inter 500, 15.6995px / 25.1192px (`--textsize-s`); **nav** is the same size at 600.
- **Button small** — Inter 500, 13.6995px / 21.9192px (`--textsize-xs`), the header utility buttons and the most-read size.
- **Input** — Inter 400, 13.3333px.

A 37.8889px size (`--textsize-xxl`) is used for the Cloisters serif sentence. Headings track at -1% of their size.

**Substitutes**: Inter is open source. Austin is a commercial serif; a high-contrast display serif such as Playfair Display or Libre Caslon Display is a free approximation.

## Layout

Content is constrained by `--productive-width-max: min(90vw, 1600px)` with `--spacing-component-margin` centring it; at 1280px the content runs from about x=57 to x=1209 in the lower band. The spacing scale is named: `--spacing-nano 4px`, `--spacing-micro 8px`, `--spacing-xxs 16px`, `--spacing-xs 24px`, `--spacing-s 32px`, `--spacing-m 56px`, `--spacing-l 64px`, `--spacing-xl 96px`, `--spacing-xxl 128px`. Measured gaps cluster at 8px and 4px with 40px, 16px, 24px, 64px and 80px for larger separations; paddings at 16px, 8px and 64px. `--line-length-comfortable: 37em` and `--line-length-max: 60em` limit text measure. Carousels use fixed collection cards (`--collection-image-card-width 250px`, `--collection-image-card-height 350px`). The masthead height is declared as `--masthead-height: 60px`. Four card columns were detected in the bottom band.

## Elevation & Depth

Almost flat. The only measured box-shadow is the 2px inset ring that draws the outlined "Plan your visit" button (`rgb(34, 34, 34) 0px 0px 0px 2px inset`); "View all" gains a 1.57px underline shadow on hover. The stylesheet declares `--color-card-shadow #00000614` and `--color-active-shadow #0000062e` for subtle card elevation, not observed on the home page. Separation is done with `#e5e5e5` dividers, the `#b8b8b8`-bordered membership panel and `#f4f4f4` card fills.

## Shapes

Corners are a consistent 4px (19 elements): buttons, inputs, the newsletter card and the membership panel. One 8px radius and one 50% circle (the hero video control) were also measured. Collection images and carousel cards are square-cornered.

## Components

- **Primary button** — `#e4002b` fill, white Inter 500 15.6995px label with a ticket icon, padding 7.84977px 11.7746px, 48px tall, 4px radius. Hover: `#a6192e`.
- **Small button** — header "Tickets": same red, 13.6995px label, 8px padding, 34px tall.
- **Outlined button** — "Plan your visit": transparent fill, `#222222` label, 2px inset ring, 4px radius; hover fills `#222222` with white text.
- **Utility button** — "Donate", "Membership": white text over the hero, 1px solid `#b8b8b8` border, 4px radius; hover darkens the border to `#6d6d6d`.
- **Fact row** — red pictogram, bold `#222222` title, `#6d6d6d` detail with an underlined inline link ("tour schedule").
- **Carousel card** — image, bold title, grey date line; titles underline on hover.
- **Promo card** — `#f4f4f4` fill, image top, bold title, grey copy, "Read more >" link at the bottom.
- **Newsletter card** — `#e4002b08` fill, 1px `#a6192e` border, 4px radius, 16px padding, red heading, input with a red square arrow button.
- **Text input** — white, 1px `#b8b8b8` border, 10px padding, 44px tall, 4px radius.

## Design System Architecture

The Met has a named design system, **Marble** (https://github.com/metmuseum/marble), described in its README as "the design system of the Metropolitan Museum of Art's Digital Deptartment" and "currently only an innersource project"; the repository was archived on Apr 28, 2023 and is "Currently for internal use only." It was built with Sass, Webpack and Storybook (published at https://metmuseum.github.io/marble, docs at https://marble.metmuseum.org/). The live site measured here is a Next.js build (`/_next/static/` font files) whose tokens are exposed as CSS custom properties on `:root`: a primitive colour ramp (`--color-grey-050`…`--color-grey-900`, `--color-met-red`, `--color-met-red-medium`, `--color-met-red-dark`, `--color-green-dark`, tints with `-75` alpha twins) aliased to semantic roles (`--color-text`, `--color-text-header`, `--color-link`, `--color-border`, `--color-divider`, `--color-component-background`, `--color-site-background`, `--color-focus-state-*`, `--color-active-tab`); a fluid type scale `--textsize-xxs`…`--textsize-xxxl`; a t-shirt spacing scale `--spacing-nano`…`--spacing-xxl`; and layout limits (`--productive-width-max`, `--line-length-*`). The pages opened do not state whether the live variables derive from Marble.

## Do's and Don'ts

**Do**
- Use the serif only for the big welcome headline and editorial statements; use Inter for all UI.
- Size type with the fluid `--textsize-*` scale and -1% tracking on headings.
- Use Met red `#e4002b` for ticketing and membership actions, darkening to `#a6192e` on hover.
- Pair a red primary with a 2px-ringed outlined secondary.
- Keep corners at 4px and surfaces flat, with `#f4f4f4` cards and `#e5e5e5` dividers.

**Don't**
- Don't set body copy in pure black; the text colour is `#6d6d6d`, headers `#222222`.
- Don't use the declared pastel tints as page backgrounds without a matching component.
- Don't round buttons beyond 4px or turn them into pills.
- Don't add heavy shadows.
- Don't mix the serif into buttons or navigation.

## Responsive Behavior

Measured on the 390px mobile pass: the serif h1 measured 31.3601px / 31.3601px (letter-spacing -0.313601px), the "Now On View" h2 25.088px / 32.6144px, and the "Become a Member" heading 20.0704px. The most-read mobile sizes are 12.0282px, 16.0563px and 14.0282px, consistent with the fluid `--textsize-*` variables at a small viewport. Mobile content runs from x=12 to x=363 in the first bands and x=20 to x=356 lower down. Two header links were visible and no menu toggle was detected on mobile. Carousel and grid reflow were not measured.

## Iteration Guide

1. Start from white canvas, `#222222` headers, `#6d6d6d` text and Inter.
2. Add one serif display headline (Austin or a substitute) at the top of the page only.
3. Define type with the fluid `--textsize-*` clamps; check values at 1280px against this file.
4. Use `--spacing-*` steps (8, 16, 24, 32, 56, 64, 96px) for rhythm.
5. Build actions as 4px-radius buttons: red fill for primary, 2px inset ring for secondary, `#b8b8b8` border for utility.
6. Introduce `#004032` only for Cloisters content and keep other tints for specific components.
