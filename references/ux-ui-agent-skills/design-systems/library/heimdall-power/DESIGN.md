---
version: alpha
name: Heimdall Power
category: "Tech & AI"
description: "heimdallpower.com, the Norwegian grid-technology company's site (title \"Heimdall Power | The Power of Knowing\"): a #d9d9d9 grey canvas with #111113 near-black ink, signal-orange #ff5c39 CTAs, NimbusSanL bold headlines (71.111px hero, 42.6666px section), Geist mono dateline tags and rounded 7.11px black-and-orange arrow buttons."
colors:
  canvas: "#d9d9d9"
  ink: "#111113"
  primary: "#ff5c39"
  on-primary: "#d9d9d9"
  surface-light: "#f0eff0"
  ink-muted: "#7b7b80"
  ink-subtle: "#85858a"
  ink-faint: "#959599"
  surface-button: "#212123"
  footer-text: "#5f5f63"
  primary-hover: "#e35536"
  surface-ember: "#1e0d04"
  ink-rust: "#8d251c"
  white: "#ffffff"
typography:
  display:
    fontFamily: NimbusSanL, Arial, sans-serif
    fontSize: 71.111px
    fontWeight: 700
    lineHeight: 71.111px
    letterSpacing: "-0.8px"
  display-mobile:
    fontFamily: NimbusSanL, Arial, sans-serif
    fontSize: 50px
    fontWeight: 700
    lineHeight: 50px
    letterSpacing: "-0.5px"
  heading:
    fontFamily: NimbusSanL, Arial, sans-serif
    fontSize: 42.6666px
    fontWeight: 700
    lineHeight: 46.9333px
    letterSpacing: "-0.48px"
  body:
    fontFamily: NimbusSanL, Arial, sans-serif
    fontSize: 21.3333px
    fontWeight: 700
    lineHeight: 25.6px
  button:
    fontFamily: NimbusSanL, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 19.2px
    letterSpacing: "-0.18px"
  nav:
    fontFamily: NimbusSanL, Arial, sans-serif
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 19.9111px
  link:
    fontFamily: NimbusSanL, Arial, sans-serif
    fontSize: 12.0889px
    fontWeight: 400
    lineHeight: 12.0889px
    letterSpacing: 0.128px
  button-secondary:
    fontFamily: NimbusSanL, Arial, sans-serif
    fontSize: 13.3333px
    fontWeight: 700
    lineHeight: 17.5px
    letterSpacing: "-0.07504px"
  input:
    fontFamily: NimbusSanL, Arial, sans-serif
    fontSize: 21px
    fontWeight: 700
    lineHeight: 28.35px
    letterSpacing: 0.21008px
rounded:
  xs: 2px
  sm: 3.56px
  md: 4px
  lg: 7.11px
  xl: 10px
  2xl: 10.67px
  3xl: 11.09px
  4xl: 14.22px
  cta: 7.11px
  pill: 9999px
spacing:
  s1: 0.85px
  s2: 1.6px
  s3: 1.85px
  s4: 2.08px
  s5: 3.56px
  s6: 4px
  s7: 4.98px
  s8: 6px
  s9: 6.4px
  s10: 7.11px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    padding: 4px
    height: 49px
  button-secondary:
    backgroundColor: "{colors.surface-button}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 6.08px 12px 6.08px 21.92px
    height: 45px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  text-input:
    textColor: "{colors.surface-light}"
    typography: "{typography.input}"
    padding: 0px 0px 0px 24px
    height: 54px
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink}"
    padding: 1.84889px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.footer-text}"
    borderColor: "{colors.primary}"
---

## Overview

heimdallpower.com sells grid-monitoring and dynamic line rating (DLR) technology to utilities. The page title is "Heimdall Power | The Power of Knowing". The desktop pass measured 648 visible elements on a 1280px page, 6240px tall. The home page opens on a full-bleed video of power-line hardware (insulators, steel pylons, a spherical sensor) under the centred headline "The Power of Knowing" in light grey #d9d9d9, a primary orange "Explore our Tech" button with an arrow, and a "THE FUTURE OF THE GRID" line along the bottom edge. A rounded black navigation capsule floats at the top with an orange announcement bar above it ("Netze BW is a new Heimdall Power customer. Read more here.").

Below the hero the page drops to a flat #d9d9d9 grey canvas: a "News" list with a waterfall photograph and dated rows (the date tags are small monospace orange labels), a large centred statement ("An optimized power grid is no longer a nice to have: It's the prerequisite to human progress."), a benefits column with four bold lead-ins ("Unlock capacity and meet growing demand.", "Mitigate outages with foresight and flexibility.", "Protect and reinforce your assets grid-wide.", "Simplify and streamline compliance.") beside a line-drawn pylon illustration, a scrolling marquee strip in black, and a footer on #111113 with an 8px solid orange border. A chat bubble widget and a "back" control also appear in the capture; they are third-party and are not documented as brand UI. A cookie dialog (CybotCookiebotDialog) was hidden during measurement.

The voice is declarative and engineer-confident: short claims, bold sentence-form headings, product nouns (DLR, T&D, AI-generated forecasts). Colour is deliberately scarce: grey, black and one hot orange.

## Colors

- **Canvas {colors.canvas}** (#d9d9d9): the page background (the theme's `--gray-100`), also the colour of the hero headline and of text on dark and orange surfaces.
- **Ink {colors.ink}** (#111113): primary text (1077 characters), the footer and card dark fill and the largest measured background area (3518); `--gray-900`.
- **Primary {colors.primary}** (#ff5c39): the CTA fill (385 area), the announcement bar, date tags and footer border; `--orange-300_-key` in the theme. Hover state measured on the Contact button: background rgb(227, 85, 54), {colors.primary-hover} (#e35536).
- **Surface light {colors.surface-2}** renamed {colors.surface-light} (#f0eff0): light panel and input text (739 area); `--gray-50`.
- **Button dark {colors.button-secondary-bg}** renamed {colors.surface-button} (#212123): the Contact capsule fill.
- **Ink muted** (#7b7b80, 669 characters), **ink subtle** (#85858a, 72) and **ink faint** (#959599, 53): the grey body copy of the benefits column.
- **Footer text** (#5f5f63, 34 characters) on #111113.
- **Ember** {colors.surface-ember} (#1e0d04, 258 area) and **rust** {colors.ink-rust} (#8d251c, 2 characters): deep-orange darks, measured; `--orange-900` and `--orange-700` in the theme.
- **White** (#ffffff, 14 characters) and black (#000000, 80 area).

The theme root variables also hold greens (--green-50 #e1f5e7, --green-100_-key #a2d9b4, --green-200 #91c6a2, --green-300 #749f82), --orange-500 #e83e2e and purples/blues from a deleted variable set (#7443ff, #ebe6ff, #7ed8ff). Those were not measured on rendered elements and are not tokens.

## Typography

**NimbusSanL** (2873 characters) is the only text family, loaded at 700 and 400; **Geist mono** (65 characters) sets the dateline tags in capitals. Weights: 700 (1873 characters), 400 (669), 600 (396).

- **Display** {typography.display}: 71.111px, weight 700, line-height 71.111px, tracking -0.8px (hero); mobile {typography.display-mobile} 50px/50px, -0.5px.
- **Heading** {typography.heading}: 42.6666px/46.9333px, tracking -0.48px (the h2 "News"). The measured tracking for 42.6666px text is mostly -1.8px (304 characters), and for 53.3333px also -1.8px.
- **Body** {typography.body}: 21.3333px bold, 25.6px line-height (the news row titles).
- **Button** {typography.button}: 16px bold, 19.2px line-height, tracking -0.18px; secondary {typography.button-secondary} 13.3333px bold, 17.5px line-height; nav {typography.nav} 14.2222px regular, 19.9111px line-height; link {typography.link} 12.0889px regular, tracking 0.128px; input {typography.input} 21px bold, 28.35px line-height, tracking 0.21008px.

Frequent sizes: 14.2222px (926 characters), 16px (869), 42.6666px (331), 21.3333px (257), 18.6666px (150), 53.3333px (92), 10.6667px (82), 71.111px (80). The fractional sizes are fluid values computed at 1280px. Arial is the declared fallback.

## Layout

A 1280px wide page of full-bleed bands. The nav capsule is centred and floats over the hero; the news section is a two-column composition (image left, rows right), the statement section is centred and framed by thin black corner brackets, and the benefits section is a split with the text column left and a framed illustration right (a 1px black vertical rule between them). Measured paddings: 28.4444px (14), 1.6px (12), 17.7778px (10), 10.6667px (8), 1.84889px (8), 21.3333px (6). Gaps: 6px (30), 7.1111px (16), 3.55555px (14), 14.2222px (14), 56.8888px (14).

## Elevation & Depth

No box shadow was measured (boxShadows is empty). Layers are expressed by solid fills: black capsules and rows on grey, an orange outline ring around primary buttons, and dark hero video. The only borders measured are 1px-style #111113, #ff5c39, #000000, #7b7b80 and #212123, plus the footer's 8px solid #ff5c39 top border.

## Shapes

Radii are small, with capsule exceptions. Frequency: 50% (16 elements, circular icon holders), 14.2222px (6), 11.0933px (6), 7.1111px (5), 2px (5), 3.55555px (4), 53.3333px (4), 10.6667px (3), 4px (2), 9.99999px (1). The primary CTA radius is 7.1111px ({rounded.cta}); the Contact capsule is 9.99999px ({rounded.xl}). Cards measured 3.55555px.

## Components

- **Primary button** ("Explore our Tech", "Start Here"): {colors.primary} fill, {colors.canvas} label in {typography.button}, radius {rounded.cta}, padding 4px, 49px tall. In the capture the buttons appear as a black pill with an orange ring and an orange arrow square.
- **Secondary button** ("Contact"): {colors.surface-button} fill, {colors.canvas} label, 45px tall, padding 6.08px 12px 6.08px 21.92px, radius 9.99999px; hover to #e35536.
- **Nav links**: {colors.canvas} text at 14.2222px on the black capsule; external links ("Careers", "Log In") carry an arrow glyph.
- **News row**: date tag in Geist mono, then a bold title; the hovered row turns #111113 with #111113 text colour recorded for the after state.
- **Text input**: 54px high, padding 0px 0px 0px 24px, 21px bold; text colour #f0eff0.
- **Footer**: #111113 fill, #5f5f63 text, 8px solid #ff5c39 border.

## Design System Architecture

No public design system or brand guideline was found: the home page links /media-kit, but that page lists press coverage and offers logos, product photos and bios in a downloadable zip that could not be opened, and it states no colours, fonts or rules. No search was run. The de-facto system is a variable set in the stylesheet: greys (--gray-50 #f0eff0, --gray-100 #d9d9d9, --gray-150 #cacaca, --gray-200 #b3b3b3, --gray-400 #85858a, --gray-800 #303033, --gray-900 #111113), oranges (--orange-300_-key #ff5c39, --orange-500 #e83e2e, --orange-700 #8d251c, --orange-900 #1e0d04), greens, neutral black and white, and easing curves --eas-1 and --eas-2 (cubic-bezier(0.16, 0.64, 0.32, 1.00)). Colours follow a numbered scale with a "_-key" suffix on the hero shade of each family.

## Do's and Don'ts

- Do keep the page in grey #d9d9d9 and near-black #111113 and reserve orange #ff5c39 for actions and tags.
- Do set headlines bold in NimbusSanL with negative tracking.
- Do mark dates with orange Geist mono tags.
- Do pair a black capsule with an orange arrow square for the primary action.
- Don't add shadows; none were measured.
- Don't use the greens or purples in the theme variables as UI colours; they were not measured on the page.
- Don't treat the chat widget or cookie dialog as brand components.

## Responsive Behavior

Mobile (390px) was measured. The h1 becomes 50px/50px with -0.5px tracking; body copy 24px bold with 28.8px line-height; the primary CTA becomes 18px with 8px radius and 4px padding. The mobile size ladder: 18px (1019 characters), 16px (932), 27.2px (298), 24px (168), 40px (88), 12px (67), 14px (65), 13.6px (57). The mobile nav pattern and breakpoints are not measured.

## Iteration Guide

1. Start with a #d9d9d9 canvas, #111113 text and bold NimbusSanL.
2. Use the orange #ff5c39 only for CTAs, tags and the announcement bar.
3. Build buttons as 7.11px-radius black-and-orange arrow capsules; hover to #e35536.
4. Use fluid sizes: 71.111px hero, 42.6666px sections, 21.3333px list titles.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=heimdall-power--<page> --url=<url> --force --no-motion` before adding any token.
