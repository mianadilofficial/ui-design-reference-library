---
version: alpha
name: Lama Lama
category: "Retail & E-commerce"
description: "Lama Lama (lamalama.com), an Amsterdam digital agency: near-black #1a1c1c canvas with warm off-white #f9f4eb type, SuisseBPIntl 73px uppercase bold display with -1.46px tracking, Sometype 10px uppercase mono labels, 4px-radius buttons 50px tall, a six-hue palette and no shadows."
colors:
  canvas: "#1a1c1c"
  ink: "#f9f4eb"
  primary: "#f9f4eb"
  on-primary: "#1a1c1c"
  surface-black: "#000000"
  white: "#ffffff"
  panel-tint: "#f9f4eb1a"
  hairline: "#f9f4eb33"
  coral: "#e75d60"
  lime: "#d0ff7e"
  pink: "#ffc6da"
  ice: "#dcf2f4"
typography:
  display:
    fontFamily: SuisseBPIntl, Helvetica, Arial, sans-serif
    fontSize: 73.064px
    fontWeight: 700
    lineHeight: 58.4512px
    letterSpacing: "-1.46128px"
    textTransform: uppercase
  body:
    fontFamily: SuisseBPIntl, Helvetica, Arial, sans-serif
    fontSize: 19.064px
    fontWeight: 400
    lineHeight: 22.8768px
    letterSpacing: "-0.38128px"
  label:
    fontFamily: SuisseBPIntl, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: "-0.32px"
  button:
    fontFamily: Sometype, Helvetica, Arial, sans-serif
    fontSize: 10px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: "-0.2px"
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
  pill: 9999px
spacing:
  s1: 1.5px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 7px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 11px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 50px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 50px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    height: 22px
  footer:
    textColor: "{colors.ink}"
    padding: 213.333px 40px 142.222px
---

## Overview

lamalama.com is the site of Lama Lama, whose meta description reads "Lama Lama is a creative digital agency in Amsterdam, building brands, websites and campaigns for ambitious companies. See the work." (page title "Lama Lama | Creative Digital Agency Amsterdam"). The measured page is 1280px wide, with a 2400px document height and an inner scroller of 5913px, so most content scrolls inside a container. The aesthetic is dark, typographic and a little brash: a near-black ground, warm off-white text, uppercase mono micro-labels and a heavy, tightly tracked grotesque for statements.

The capture shows: a centered black pill bar with the slogan "LET'S DO DAMAGE" and a menu icon at the top; at top right a "GET IN TOUCH" button with a small portrait avatar, and under it a card titled "THIS IS US" holding a close-up eye image; a large empty dark field (the work area, not rendered in the capture); and at the bottom the label "[ WE ARE LAMA LAMA ]", a three-line uppercase bold statement "A CREATIVE DIGITAL AGENCY THAT GOES ALL IN OR NOT AT ALL.", and a paragraph at right: "We craft brands, products and experiences that hit harder, work smarter and connect deeper. With heart, craft, and with a team that's all in or not at all." A hairline footer strip lists "20+ DIGITAL FREAKS", "AMSTERDAM BASED", a live clock in brackets, "FOLLOW US", "INSTAGRAM +", "LINKEDIN +" and an NL / EN language switch.

Other measured copy: nav items "Work", "What we do", "Branding", "Web", buttons "OUR PITCHDECK", "SCHEDULE A CALL", "START A PROJECT", "NEXT", "CANCEL", and the footer call "BRIEF US SOMETHING." with the phone number +31 20 6220440 and "[ GET IN TOUCH ]". The tone is cheeky and confident.

## Colors

The shipped CSS stores its palette as space-separated RGB triplets in root variables, which are converted here to hex:

- **Dark #1a1c1c** (`--dark: 26 28 28`) is the page ground (`--bgPrimary`). **#000000** is the pure-black pill and panel fill (183 area-weight); `--offBlack` is 1 1 1.
- **Off-white #f9f4eb** (`--offWhite: 249 244 235`) is all text (3661 characters; `--textPrimary`, `--textSecondary` and `--signal` all alias it) and the primary button fill. #f9f4eb at 10% alpha (#f9f4eb1a, the largest area at 1064) tints raised panels, and at 20% alpha (#f9f4eb33) is the hairline color for rules and borders (21 uses).
- **Accent palette** (root variables): coral **#e75d60** (`--red 231 93 96`, also measured as a text child color), lime **#d0ff7e** (`--green 208 255 126`), pink **#ffc6da** (`--pink 255 198 218`) and ice **#dcf2f4** (`--blue 220 242 244`). The entry view mostly keeps to off-white on dark; a small red dot in the clock is the visible use of the red.
- **White #ffffff** is used for 6 characters; `--black` and `--white` triplets are also defined.

The extractor detected the primary button text and fill as the same off-white because the label is a duplicated rolling-text element; the visible button text color is #1a1c1c (measured on the GET IN TOUCH button), which is why `on-primary` is the dark ground color.

## Typography

Two families. **SuisseBPIntl** (400 and 700) is the grotesque used for statements and body; **Sometype** (400 to 700) is a monospace used for buttons and micro-labels (388 characters), set in uppercase.

- Display: SuisseBPIntl 700 uppercase at 73.064px on 58.4512px line-height (a line-height smaller than the size, giving the stacked block look) with -1.46128px letter-spacing (-2%). This is the footer's measured size, and the bottom statement in the capture follows the same style. Other large sizes measured by characters: 66px, 44px, 37.064px and 30px.
- Body: SuisseBPIntl 400, 19.064px on 22.8768px, -0.38128px tracking (the intro paragraph). The most-read text size is 15.468px (2246 characters, -0.30936px).
- Label: 16px on 22.4px with -0.32px, used for nav items such as "Work" and for the input.
- Button / micro-label: Sometype 500, 10px on 18px, -0.2px, uppercase.

All tracking is negative at about -2%. The extractor's h1 pick (the 16px label "Work") was overridden: it is a nav label, not a display heading.

## Layout

A 12-column desktop grid and a 6-column mobile grid are declared (`--ll-cols-desktop: 12`, `--ll-cols-mobile: 6`), with a 1.5rem desktop gutter, 2.5rem desktop margin, 0.625rem mobile gutter and 1rem mobile margin. Spacing tokens are fluid `max(rem, vw)` expressions on a 1440px reference: `--spacing-xs` to `--spacing-2xl` (8 to 48px floor, 12 to 64px at 1440) and `--section-3xs` to `--section-4xl` (10 to 160px floor, 20 to 320px at 1440), plus `--spacing-hero`. Measured gaps are 10px, 24px, 8px, 2px, 4px, 16px, 20px; paddings 16px, 8px, 40px, 2px, 7px, 24px, 56px. The footer has 213.333px top, 40px sides and 142.222px bottom padding.

## Elevation & Depth

No box shadows were measured. Panels are separated by translucent off-white tints (10% fill, 20% hairlines) on the dark ground, and by black pills on the #1a1c1c field.

## Shapes

Measured radii: 4px (92 elements: buttons, pills, cards), 2px (4) and 9999px (2). Buttons are 50px tall with a 4px radius, so the system is almost entirely softly squared rather than pill-shaped, with only two fully round elements measured on the entry view.

## Components

- **Button**: 50px tall, 4px radius, Sometype 10px uppercase label, off-white fill with dark text. Labels are repeated three times in the DOM; the measured hover on "GET IN TOUCH" keeps text #1a1c1c with an off-white border.
- **Top pill bar**: #000000 rectangle with centered "LET'S DO DAMAGE" and a hamburger icon.
- **Side card**: "THIS IS US ( - )" with a media thumbnail on a panel-tint background.
- **Input**: 22px line-height 16px SuisseBPIntl in off-white, no border measured.
- **Footer strip**: hairline rule, mono labels, bracketed clock, plus-sign social links, NL/EN toggle.
- **Statement block**: bracketed eyebrow, bold uppercase display, small paragraph at right.

## Design System Architecture

No public design system or brand guideline was found. https://lamalama.com/ was opened (meta description quoted above); /about redirected to https://lamalama.com/about-us/ (200, "About us - Lama Lama") and /brand redirected to https://lamalama.com/services/branding/ (200, an agency service page, not guidelines). The shipped CSS has 52 root variables with an `--ll-` prefix for grid values (`--ll-gutter-desktop`, `--ll-grid-gap`, `--ll-margin-desktop`), semantic color aliases (`--bgPrimary`, `--textPrimary`, `--textSecondary`, `--signal`) over a named RGB palette, and fluid spacing and section scales. It also contains Tailwind runtime variables (`--tw-*`).

## Do's and Don'ts

- Do keep the ground #1a1c1c and text #f9f4eb.
- Do set statements in SuisseBPIntl 700 uppercase with about -2% tracking and tight line-height.
- Do use Sometype 10px uppercase for labels and wrap eyebrow text in square brackets.
- Do use translucent off-white (10% fills, 20% rules) to build panels.
- Don't add drop shadows or gradients.
- Don't use the accent hues (coral, lime, pink, ice) as large fills in the entry state: they were not measured as visible areas.
- Don't round corners beyond 4px except for fully round (9999px) elements.
- Don't use positive tracking.

## Responsive Behavior

The 390px pass measured: label 16px on 22.4px, body 16px on 19.2px with -0.32px tracking, buttons Sometype 10px at 4px radius, and the most common sizes 16px (797 characters), 10px (368), 14px (207), 28px (197), 32px (124), 40px (46) and 52px (26). A 6-column mobile grid with a 0.625rem gutter is declared in the CSS variables. Layout reflow of the work area was not measured.

## Iteration Guide

1. Start from the tokens: dark canvas, off-white ink, Sometype labels.
2. For a new section, use a bracketed mono eyebrow, a bold uppercase statement, and a short paragraph.
3. Keep panels as `panel-tint` fills with `hairline` rules.
4. Confirm any new color in `web/data/extracted/lama-lama-2.json` root variables first.
5. Run `node web/scripts/verify-designs.mjs --slug=lama-lama-2`.
