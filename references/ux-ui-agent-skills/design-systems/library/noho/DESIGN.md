---
version: alpha
name: "Noho"
category: "Business & Corporate"
description: "Noho (noho.ink) furniture storefront: Switzer 600 headings at 53.376px with -2.13504px tracking on warm neutrals #f1eee9, #e7e2da and #cdc0b0, charcoal ink #3c3c3c, square white and charcoal buttons, and flat-color photography of chairs."
colors:
  canvas: "#cdc0b0"
  page-body: "#f1eee9"
  ink: "#3c3c3c"
  primary: "#ffffff"
  on-primary: "#3c3c3c"
  surface-toque-white: "#e7e2da"
  ink-60: "#3c3c3c99"
  ink-40: "#3c3c3c66"
  text-input-text: "#333333"
  text-input-border: "#cccccc"
  offbeat: "#d7d1c7"
  indicator-green: "#88c159"
  indicator-red: "#dc5b5b"
typography:
  display:
    fontFamily: Switzer, sans-serif
    fontSize: 53.376px
    fontWeight: 600
    lineHeight: 53.376px
    letterSpacing: "-2.13504px"
  display-mobile:
    fontFamily: Switzer, sans-serif
    fontSize: 60.6684px
    fontWeight: 600
    lineHeight: 57.635px
    letterSpacing: "-2.42674px"
  subheading:
    fontFamily: Switzer, sans-serif
    fontSize: 26.624px
    fontWeight: 600
    lineHeight: 26.624px
    letterSpacing: "-0.79872px"
  body:
    fontFamily: Switzer, sans-serif
    fontSize: 12.032px
    fontWeight: 400
    lineHeight: 14.4384px
  button:
    fontFamily: Switzer, sans-serif
    fontSize: 12.0064px
    fontWeight: 400
    lineHeight: 12.0064px
  nav:
    fontFamily: Arial, sans-serif
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 12.8px
rounded:
  xs: 26.66px
  sm: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 1.33px
  s2: 2px
  s3: 2px
  s4: 3.33px
  s5: 4.01px
  s6: 4.44px
  s7: 5.33px
  s8: 5.34px
  s9: 5.93px
  s10: 6.67px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 9.33376px 30.0006px
    height: 32px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 13.3376px 36.672px
    height: 40px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 26.6624px
    transform: matrix(1, 0, 0, 1, 0, -32.6562)
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 22.2224px 6.6688px 22.2224px 13.3376px
    height: 52px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    padding: 26.6662px
    transform: matrix(1, 0, 0, 1, 0, -617.703)
---

# Noho

Noho (https://noho.ink/, page title "Noho") is a New Zealand furniture maker selling flexible, playful chairs made from recycled and bio-based materials. The measured home page is a warm-neutral editorial storefront: a heavy, tightly tracked grotesk (Switzer), square white and charcoal buttons, and product photography in saturated flat color. This file records what was measured on the page.

## Overview

The home page is 13303px tall. It opens on a split hero: on the left the headline "We make furniture that's flexible, and playful, to fit modern life" in dark charcoal with the caption "New design from New Zealand" at the foot, and on the right a pale-stone panel holding a scattered grid of portrait photographs, each a person posing with a chair against a flat colored backdrop (mustard, orange-red, lavender, olive). A small white square menu button sits at the top right and the lowercase "noho" wordmark at the top left.

The next band is a centred statement, "Our furniture is made from sustainable ingredients like castor beans, old carpets and recycled fishing nets", with small inline photo thumbnails set between the words. Then two full-height product panels sit side by side: Noho Lighty (a yellow chair, "From $329") on the stone tone and Noho Move (a black chair, "From $450") on a darker sand tone, each with a "Pick a color" swatch row, a white "Learn more" button and a charcoal "Buy" button, and a round "+" control in the corner. A section headed "Chairs that care" follows, and a third heading, "“He ain’t heavy”", appears further down. Voice is plain, friendly and brief.

## Colors

The palette is a family of warm neutrals with one charcoal ink. Measured background areas: #f1eee9 (10206), #e7e2da (5874), #cdc0b0 (4908), #3c3c3c (1756), #d7d1c7 (1101) and #ffffff (504).

- `page-body` #f1eee9: the main page ground (the site calls it `--hacienda-white`).
- `surface-toque-white` #e7e2da: the hero right panel and the first product panel (`--toque-white`, `--bg-element`).
- `canvas` #cdc0b0: the sand-colored second product panel and the footer (`--sandbar`, `--bg-element-hover`).
- `offbeat` #d7d1c7: switch and secondary element background (`--offbeat`).
- `ink` #3c3c3c: all primary text (8202 characters) and the Buy button fill (`--raven-black-100`).
- `ink-60` #3c3c3c99 and `ink-40` #3c3c3c66: the 60% and 40% tints for captions and labels.
- `primary` #ffffff with `on-primary` #3c3c3c: the white "Learn more" button and its text.
- `text-input-text` #333333 and `text-input-border` #cccccc: form field text and border.

The CSS variables also define `--indicator-green` #88c159, `--indicator-red` #dc5b5b and `--dim-gray` #686868; the first two are recorded here as status colors. The color swatches under each product (mustard #f6d45d, orange #f6825d, lime #cef65d) were measured as one-pixel-area backgrounds and are product options, not interface colors. Imagery supplies all saturated color.

## Typography

One family: Switzer, loaded as a variable font with 400 and 600 faces (all 8790 measured characters). Headings are weight 600 with strong negative tracking; body and buttons are weight 400.

- `display`: 53.376px / 53.376px, weight 600, -2.13504px (h1 and h2). Mobile: 60.6684px / 57.635px, -2.42674px.
- `subheading`: 26.624px / 26.624px, weight 600, -0.79872px (h3). Mobile h2 is 51.9987px / 49.3988px.
- `body`: 12.032px / 14.4384px, weight 400 (5234 characters). Mobile: 16.2513px / 19.5016px.
- `button`: 12.0064px / 12.0064px, weight 400; mobile 16.2513px.
- `nav`: 12.8px / 12.8px, weight 400.

Other measured sizes: 16.64px with -0.1664px tracking (998 characters, product prices), 9.344px (316, tiny captions) and 200px with -8px tracking (11 characters, a giant wordmark or numeral). Tracking is about -4% on display sizes and -3% on 26.624px. No substitute was identified from a source, so fall back to the generic sans-serif the site declares.

## Layout

The page is built from full-bleed halves and stacked bands. The hero is a 50/50 split; the product section is two equal panels; statement bands are centred with a narrow measure. The measured footer height variable is `--noho-footer-height` 617.703125px, and the footer overlaps upward (a translate of -617.703px), a reveal-style footer. Measured paddings by frequency: 26.6662px (55 elements), 13.3338px (30), 1.3312px, 26.6624px, 2px, 13.3376px, 36.672px, 4.0064px, 9.33376px and 30.0006px. Gaps: 4.4448px, 5.3376px, 2.00064px, 3.328px, 13.3338px, 11.852px, 32px and 16px. Spacing tokens are the small end of that range.

## Elevation & Depth

The page is nearly flat. The only shadows measured on rendered elements are `rgba(0, 0, 0, 0.8) 0px 0px 2px 1px` (3 elements, thin outline-like rings on the swatch dots) and, from the CSS, `0px 0px 4px rgba(0, 0, 0, 0.15)`. Product chairs sit on flat color panels with a soft contact shadow in the photograph itself. Separation comes from stepped background tones (#f1eee9, #e7e2da, #cdc0b0), not from elevation.

## Shapes

Buttons, inputs and the nav are square: every component radius is 0px (`rounded.none`). Round shapes are small: `100%` (35 elements, the color swatches and the "+" controls), `26.6624px` (6) and `50px` (4). The portrait photographs and product panels are sharp-cornered rectangles. The menu button at the top right is a small white square with a three-line glyph.

## Components

- Primary button ("Learn more", "About"): white fill, charcoal text, 12.0064px, padding 9.33376px 30.0006px, height 32px, square.
- Secondary button ("Buy", "Make an order"): #3c3c3c fill, white text, padding 13.3376px 36.672px, height 40px, square.
- Nav: charcoal 12.0064px links (About, Price, Blog, FAQ and others); nav-link size 12.8px; header background is white (`--bg-header`).
- Text input: white fill, #333333 text, 1px #cccccc border, height 52px, padding 22.2224px 6.6688px 22.2224px 13.3376px (room for a floating label).
- Product tile: stone panel, chair photograph centred, product name in small grey caps, price at 16.64px, swatch dots, the button pair.
- Round "+" control: 100% radius, white fill.

## Design System Architecture

No public design system or guideline for Noho was opened, and none was linked in the extraction. The site is a Webflow build whose variables are semantic and named in kebab-case on `:root`: text (`--txt-main`, `--txt-btn-pm`, `--txt-btn-sc`, `--txt-btn-big`), backgrounds (`--bg-element`, `--bg-element-second`, `--bg-element-third`, `--bg-element-hover`, `--bg-header`, `--bg-btn-big`, `--bg-btn-sc`, `--bg-form-element`), forms (`--text-form-header`, `--text-form-element-opacity-med`), indicators (`--indicator-green`, `--indicator-red`) and named neutrals (`--raven-black-100`, `--raven-black-60`, `--raven-black-40`, `--hacienda-white`, `--toque-white`, `--sandbar`, `--offbeat`, `--dim-gray`). Neutral names read as paint colors, which matches the stone and sand palette.

## Do's and Don'ts

- Do use Switzer 600 with heavy negative tracking for headings and 400 for UI.
- Do alternate stone, sand and white surfaces; keep ink at #3c3c3c, never pure black.
- Do use square buttons in white and charcoal pairs.
- Do let photography carry color: flat colored backdrops with a person and a chair.
- Don't add brand-colored buttons; the site has none.
- Don't use heavy shadows or rounded rectangles.
- Don't treat product swatches as UI colors.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 is 60.6684px / 57.635px, h2 51.9987px / 49.3988px, body 16.2513px / 19.5016px, the primary button text 16.2513px on a charcoal (#3c3c3c) fill with white text, and nav text 16.2513px. Common mobile sizes by character: 16.2513px (6486), 27.0816px (966), 21.6684px (682), 51.9987px (481). Breakpoint widths and the layout of the hero and product panels on mobile were not measured.

## Iteration Guide

1. Set the ground to #f1eee9 and place #e7e2da and #cdc0b0 panels for product areas.
2. Set headings in Switzer 600 at 53.376px with -2.13504px tracking; body at 12.032px.
3. Build square white and charcoal button pairs at 32px and 40px heights.
4. Use flat-color-backdrop photography; keep the interface itself neutral.
5. Keep all values as measured and re-run the gate after renames.

## Imagery and Voice

Photography is staged and playful: people in unusual poses with chairs against a single flat color backdrop, and product shots of one chair centred on a plain tonal panel with a soft contact shadow. Microcopy is short and conversational ("Pick a color", "Learn more", "Buy", "Make an order", "Chairs that care"), prices are stated plainly as "From $329" and "From $450", and the sustainability claim is made in the large centred statement rather than in a badge or label.
