---
version: alpha
name: "Osmo"
category: "Tech & AI"
description: "Osmo (osmo.supply), a Webflow and HTML resource membership for creative developers: a #f4f4f4 page with #201d1d ink, violet #6840ff and lime #a1ff62 accents, Haffer type with tight negative tracking (99.5556px / -5.97333px) and very small radii."
colors:
  canvas: "#f4f4f4"
  ink: "#201d1d"
  primary: "#6840ff"
  on-primary: "#f4f4f4"
  surface-black: "#000000"
  accent-lime: "#a1ff62"
  ink-deep: "#151313"
  accent-red: "#f84131"
  ink-light: "#d8d8d8"
  hairline: "#312e2e"
  text-input-bg: "#eaeaea"
  text-input-text: "#333333"
  card-bg: "#2a2727"
typography:
  display:
    fontFamily: "\"Haffer XH\", Arial, sans-serif"
    fontSize: 99.5556px
    fontWeight: 400
    lineHeight: 99.5556px
    letterSpacing: "-5.97333px"
  display-mobile:
    fontFamily: "\"Haffer XH\", Arial, sans-serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-3.84px"
  heading:
    fontFamily: "\"Haffer XH\", Arial, sans-serif"
    fontSize: 35.5556px
    fontWeight: 400
    lineHeight: 37.3333px
    letterSpacing: "-1.06667px"
  subheading:
    fontFamily: "\"Haffer XH\", Arial, sans-serif"
    fontSize: 55.1111px
    fontWeight: 400
    lineHeight: 55.1111px
    letterSpacing: "-2.20444px"
  body:
    fontFamily: "\"Haffer VF\", Arial, sans-serif"
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 18.4889px
    letterSpacing: "-0.142222px"
  button:
    fontFamily: "\"Haffer VF\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-0.32px"
  link:
    fontFamily: "\"Haffer Mono\", Arial, sans-serif"
    fontSize: 9.77778px
    fontWeight: 400
    lineHeight: 9.77778px
    textTransform: uppercase
  input:
    fontFamily: "\"Haffer VF\", Arial, sans-serif"
    fontSize: 14.2222px
    fontWeight: 500
    lineHeight: 17.0667px
rounded:
  xs: 1.42px
  sm: 1.78px
  md: 2.67px
  lg: 3.56px
  xl: 3.67px
  2xl: 4.44px
  3xl: 5.33px
  4xl: 8.89px
  cta: 1.78px
  pill: 9999px
spacing:
  s1: 2.67px
  s2: 3.56px
  s3: 4.44px
  s4: 5.33px
  s5: 7.11px
  s6: 8.89px
  s7: 10.67px
  s8: 13.33px
  s9: 14.22px
  s10: 15.11px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    padding: 0px 16px 0.888889px
    height: 36px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 16px 0.888889px
    height: 36px
  link:
    backgroundColor: "{colors.accent-lime}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 10.6667px 14.2222px
    height: 43px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    padding: 35.5556px
    transform: matrix(1, 1.74533e-05, -1.74533e-05, 1, 0, 28.4444)
  footer:
    textColor: "{colors.ink}"
---

## Overview

Osmo (https://www.osmo.supply/, title "Osmo - Dev Toolkit Built to Flex") is a membership platform for creative developers, with Webflow and HTML resources, icons, easings and a page-transition course. Its own page text describes it as a "Platform packed with Webflow & HTML resources, icons, easings and a page transition course", and credits it to Dennis Snellenberg and Ilja van Eck ("© 2025 osmo supply b.v."). The product list in the menu is The Vault, Page Transition Course, Button Pack, Icon Library, Community and Easings, with explore links to Osmo Showcase, Collection and Pricing. Section headings run from the hero "Dev Toolkit / Built to Flex" through "Osmo in use / See what it can do!", "The platform", "A growing toolkit for creative developers", "Why Osmo?", "Trusted by / Industry Giants", "Everything you need in one membership", "Made with Osmo", "Try for free / Try the Osmo Demo Vault" and "Latest updates from Osmo".

The voice is confident and informal, addressed to makers: "Get exclusive access to the elements, techniques and code behind award-winning work." The capture shows a floating black pill header (Menu, OSMO logo, a grey Login and a lime Join), a lime ticker strip reading "DEMO: TRY 20 RESOURCES FOR FREE", a huge headline with a violet asterisk-like glyph between "Dev Toolkit" and "Built to Flex", inline pill-highlighted words inside the subhead, an arc of tilted resource preview cards, a play-reel block, a violet portrait card of the founder, and a black oval "Latest updates" panel with a lime card. Hand-script annotations ("See what it can do!", "New stuff is added every week!") in red or green add a handwritten layer over the otherwise strict grotesque typography.

## Colors

Measured background areas by weight: #201d1d (7147), #f4f4f4 (3691), #000000 (2080), #a1ff62 (1687), #eaeaea (1635), #151313 (1602), #6840ff (1531), #e1e1e1 (380), #2a2727 (293), #312e2e (137), plus small ones (#ffffff1a, #00000059, #393636, #f84131). Text colours by characters: #f4f4f4 (4099), #201d1d (2623), #a1ff62 (248), #151313 (101), #f84131 (67), #d8d8d8 (8), #b8b8b8, #7a7a7a, #817f7f.

- **Canvas #f4f4f4** and **ink #201d1d**: the light-section ground and text; the dark sections invert them (background #201d1d, text #f4f4f4).
- **Primary #6840ff**: the violet, the site's `--color-purple-copy` and `--button-005-color-background`; fills the primary button and the portrait card.
- **On-primary #f4f4f4**: text on violet.
- **Accent-lime #a1ff62**: the Join button, the demo ticker and the update card; also text on dark.
- **Accent-red #f84131**: script annotations (67 characters).
- **Surface-black #000000**, **ink-deep #151313**, **card-bg #2a2727**, **hairline #312e2e**: dark panel surfaces and rules.
- **Text-input-bg #eaeaea**, **text-input-text #333333**, **ink-light #d8d8d8**: the form field and light text.

Neutrals in the CSS follow a numbered scale (`--color-neutral-300` #eaeaea, `--color-neutral-475` #b8b8b8, `--color-neutral-500` #817f7f, `--color-neutral-550` #393636, `--color-neutral-600` #312e2e) and a focus colour `--button-005-color-focus` #201D1D.

## Typography

The Haffer family does all the work: Haffer VF (variable, 100 to 1000; 5020 characters), Haffer XH (400; 938, for display), Haffer Mono (400; 941, for labels) and Brisa Pro (400; 265, the handwritten script). Weight 400 covers 7104 of the measured characters.

- **Display** Haffer XH 99.5556px / 99.5556px, letter-spacing -5.97333px (-6%): "Dev Toolkit". Mobile measured 64px / 64px, -3.84px.
- **Subheading** 55.1111px / 55.1111px, -2.20444px; **heading** 35.5556px / 37.3333px, -1.06667px.
- **Body** Haffer VF 14.2222px / 18.4889px, -0.142222px (the dominant size, 3114 characters).
- **Button** Haffer VF 16px / 16px, -0.32px; **input** 14.2222px weight 500.
- **Link** Haffer Mono 9.77778px / 9.77778px uppercase (924 characters), the ticker and tag style.

Additional sizes: 16.8889px, 35.5556px, 22.2222px, 71.1111px, 56.8889px. Tracking is about -6% on display, -3% on the headings and -1% on body. The site's own sizing variable `--size-font` is calc(clamp(992px, 100vw, 1920px) / (1440 / 16)), a fluid scale that explains the non-integer px values.

## Layout

The page is 1280px wide and 9702px tall with a visible hairline centre line and faint circular dial marks in the background. Content is centred around a floating header and a mostly symmetrical vertical flow; cards fan out on an arc, and the lower sections place a violet portrait card and a dark oval panel side by side. Layout variables are em-based: `--container-padding` 1.875em, `--gap-s` 1em, `--gap-sm` 1.25em, `--gap-xxl` 2.5em, `--padding-s` 5em, `--padding-m` 7.5em, `--btn-height` 2.5em. Measured gaps: 7.11111px (102), 8.88889px (88), 17.7778px (56), 35.5556px (32). Measured paddings: 5.33333px (84), 3.55556px (42), 14.2222px (36), 35.5556px (27 uses, the cards).

## Elevation & Depth

Shadows are essentially absent (only a transparent `rgba(0, 0, 0, 0) 0px 0px 0px 0px` was measured). Depth is made by colour: black and dark-grey panels on a light page, tilted preview cards, and the oval dark panel. Borders are #312e2e (5 uses) and #f4f4f4 (4).

## Shapes

The measured radii are small and fluid-scaled: 1.77778px (66 uses), 3.55556px (37), 2.66667px (35), 4.44444px (34), 14.2222px (26), 42.6667px (20), plus 1422.22px (33, effectively full pill), 142.222px, 711.111px and 50%. Tokens range from xs 1.42px to 4xl 8.89px, cta 1.78px and pill 9999px. Buttons use the small 1.78px radius (36px tall) while avatars, the Join pill and the oval panel use the big values.

## Components

- **button-primary**: background #6840ff, text #f4f4f4, Haffer VF 16px, padding 0px 16px 0.888889px, height 36px, radius 1.78px.
- **button-secondary**: #f4f4f4 background with #201d1d text, same size.
- **link (tag)**: lime #a1ff62 background, #201d1d text, Haffer Mono 9.77778px uppercase.
- **text-input**: #eaeaea fill, #333333 text, 14.2222px, padding 10.6667px 14.2222px, height 43px.
- **card**: #2a2727 fill with #f4f4f4 text, padding 35.5556px; preview cards are tilted on the arc.
- **Header pill**: black rounded bar with Menu, logo, Login (grey) and Join (lime).
- **footer**: ink #201d1d; the page lists Product, Community, Membership and Legal groups plus a newsletter prompt.

## Design System Architecture

Osmo has no public brand-guideline page (none is linked), but its own CSS shows a systematic build: numbered neutral colour variables, `--button-005-*` variables for a numbered button component, em-based gap and padding scales, a fluid font-size variable, and named easing variables (`--animation-default-double` 1.2s cubic-bezier(0.625, 0.05, 0, 1), `--animation-default-quarter` 0.15s cubic-bezier(0.625, ...)). The product itself is a resource library (the Vault, Button Pack, Icon Library, Easings), so the site doubles as a demonstration of its own components. Legal documents are at /legal/licensing-agreement, /legal/terms-and-conditions, /legal/privacy-policy and /legal/cookie-policy.

## Do's and Don'ts

- Do use #f4f4f4 and #201d1d as the base pair and invert for dark sections.
- Do use violet #6840ff for primary actions and lime #a1ff62 for join and highlight tags.
- Do set display type in Haffer XH with about -6% tracking.
- Do keep button radii tiny and reserve big radii for pills and ovals.
- Don't use shadows; none were measured.
- Don't use mono type for anything but small uppercase labels.
- Don't put the red script colour on interface text.
- Don't treat the demo ticker as permanent chrome; its text is promotional.

## Responsive Behavior

The 390px pass measured h1 "Dev Toolkit" and h2 "Built to Flex" at 64px / 64px with -3.84px tracking (boxes 287px and 291px wide) and a testimonial paragraph at 16px. The fluid variable `--size-font` clamps between 992px and 1920px viewports. Menu, card-arc and panel behaviour at mobile width were not measured.

## Iteration Guide

1. Start with #f4f4f4 / #201d1d, violet #6840ff and lime #a1ff62.
2. Use Haffer: XH for display with -6% tracking, VF for body, Mono for 9.77778px labels.
3. Keep radii small except pills.
4. Add Brisa Pro script annotations in red or green sparingly.
5. Measure further pages with the extractor (`--slug=osmo-1--page --url=<url> --force --no-motion`) before adding tokens; hover states were not captured.
