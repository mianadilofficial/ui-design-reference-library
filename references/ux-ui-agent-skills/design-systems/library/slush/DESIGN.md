---
version: alpha
name: Slush
category: "Tech & AI"
description: "Slush (slush.app), the Sui crypto wallet: white and sky-blue #dceeff rounded containers on a black frame, black Aeonik Pro text at 56.9px display and 21.3px body with negative tracking, Lateral weight-800 poster headlines, flat sticker colors (#ffd731, #55db9c, #5c4ade, #fb4903) and 1px black outlined pill buttons."
colors:
  canvas: "#ffffff"
  page-body: "#000000"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-sky: "#dceeff"
  surface-blue: "#4da2ff"
  link-bg: "#e9ccff"
  card-bg: "#ffd731"
  accent-orange: "#fb4903"
  accent-green: "#55db9c"
  accent-green-light: "#99e9c4"
  accent-blue: "#4da2ff"
  accent-purple: "#5c4ade"
  accent-violet: "#e9ccff"
  accent-violet-light: "#f8f0ff"
  accent-yellow-light: "#ffefad"
typography:
  display:
    fontFamily: "\"Aeonik Pro\", Arial, sans-serif"
    fontSize: 56.8889px
    fontWeight: 500
    lineHeight: 56.8889px
    letterSpacing: "-0.568889px"
  display-mobile:
    fontFamily: "\"Aeonik Pro\", Arial, sans-serif"
    fontSize: 30px
    fontWeight: 500
    lineHeight: 30px
    letterSpacing: "-0.3px"
  body:
    fontFamily: "\"Aeonik Pro\", Arial, sans-serif"
    fontSize: 21.3333px
    fontWeight: 500
    lineHeight: 25.6px
    letterSpacing: "-0.213333px"
  button:
    fontFamily: "\"Aeonik Pro\", Arial, sans-serif"
    fontSize: 13.3333px
    fontWeight: 700
    lineHeight: 13.3333px
    textTransform: uppercase
  nav:
    fontFamily: "\"Aeonik Pro\", Arial, sans-serif"
    fontSize: 14.2222px
    fontWeight: 500
    lineHeight: 20px
  link:
    fontFamily: "\"Aeonik Pro\", Arial, sans-serif"
    fontSize: 10.6667px
    fontWeight: 700
    lineHeight: 12.8px
    textTransform: uppercase
rounded:
  xs: 14.22px
  sm: 17.78px
  md: 26.67px
  lg: 35.56px
  none: 0px
  pill: 9999px
spacing:
  s1: 3.56px
  s2: 3.84px
  s3: 5.33px
  s4: 7.82px
  s5: 8px
  s6: 8.89px
  s7: 9.96px
  s8: 10.67px
  s9: 11.38px
  s10: 13.33px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.page-body}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 8.88889px
    borderColor: "{colors.page-body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 13.3333px 12px
    height: 40px
    borderColor: "{colors.page-body}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.page-body}"
    padding: 26.6667px
    borderColor: "{colors.page-body}"
  footer:
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
    padding: 0px 0px 5.33333px
---

## Overview

Slush is the Sui-network crypto wallet, measured at slush.app (page title "Slush — Your Money. Unstuck."). The measured h1 is "Your money." with the h2 "Your money. Unstuck." Its identity is playful, loud and sticker-like: a giant black condensed "SLUSH" wordmark sits over a 3D blue foam-textured ribbon, with floating illustrated rocket, coins, wallet and smiley stickers. The first screen has a scrolling lavender ticker at the very top ("SLUSH CARD WAITLIST IS LIVE" repeated), a rounded sky-blue hero container framed by a black page background, a nav row of white pill links (GET STARTED, CARD, DEFI, SECURITY, GUIDES, DOWNLOAD), a circular plus button and a black pill "LAUNCH APP" button.

Under the hero tagline there are two outlined pills, "LAUNCH WEB APP" and "DOWNLOAD FOR CHROME" (with the browser logo). The next screen is a mixed-case slogan lockup, "ALL THINGS SUI ALL IN SLUSH WALLET", set in a skewed condensed face with a purple QR download chip. Below, a white rounded container opens with "Your shortcut to DeFi." and a green panel of yellow coins beside the heading "EXPLORE DEFI OPPORTUNITIES".

Voice is short, confident and a little cheeky, with all-caps microcopy on buttons and quotes from users in the page body ("As much as I love other walle...").

## Colors

Backgrounds by area: #ffffff (8459), #dceeff (2307), #4da2ff (1821), #ffd731 (1584), #e9ccff (1503), #000000 (1244), #fb4903 (1103), #55db9c (929), #5c4ade (339). Text is almost only #000000 (3951 characters) and #ffffff (160).

The site publishes its palette as root variables, which supplies exact names: --color--orange-800 #fb4903, --color--green-700 #55db9c, --color--yellow-700 #ffd731, --color--blue-700 #4da2ff, --color--blue-100 #dceeff, --color--violet-700 #e9ccff, --color--violet-100 #f8f0ff, --color--green-100 #99e9c4, --color--purple-800 #5c4ade, --color--yellow-100 #ffefad, --color--dark black and --color--light white.

- **canvas #ffffff** and **surface-sky #dceeff**: the white sections and the blue hero container.
- **ink / page-body #000000**: all text and 1px outlines.
- **primary #ffffff** with **on-primary #000000**: the measured primary CTA (GET STARTED, DOWNLOAD) is a white pill with black text and a black outline; the black LAUNCH APP button inverts it, with a hover probe that turns the label from white to black.
- **surface-blue #4da2ff**, **card-bg #ffd731**, **accent-green #55db9c**, **accent-purple #5c4ade**, **accent-orange #fb4903**, **accent-violet #e9ccff**: flat sticker and section fills. The lavender #e9ccff is the ticker bar background (the link token).

## Typography

Loaded fonts: Lateral (variable weights 100 to 1000) and Aeonik Pro at 500 and 700. Aeonik Pro carries 3488 measured characters and Lateral 623, all at weight 800. Aeonik Pro is a commercial typeface, Lateral a wide, poster-style face; if unavailable, use a neutral grotesque for text and a heavy condensed sans for display.

Sizes are fluid: the page scales type with a container-based unit (--size-container clamps between 992px and 2250px against an ideal of 1440, with --size-unit 16), which is why measured sizes are fractional. By characters: 26.6667px (1500), 10.6667px (861), 21.3333px (564), 13.3333px (358), 250px (243), 56.8889px (205), 97.7778px (157), 142.222px (133), 177.778px (46), 62.2222px (39), 568.889px (5). Letter spacing is -0.266667px at 26.6667px, -0.213333px at 21.3333px, -0.568889px at 56.8889px and 0.426667px on small caps.

- **display** Aeonik Pro 56.8889px weight 500, line-height 56.8889px, -0.568889px.
- **body** 21.3333px weight 500 / 25.6px.
- **button** 13.3333px weight 700 uppercase.
- **link** 10.6667px weight 700 uppercase (ticker).
- **nav** 14.2222px weight 500.

## Layout

The desktop page is 1280px wide and 10970px tall. The page background is black and each section is a separate rounded container (--radius-container: 2.5em) sitting on it with a thin black gap, so the page reads as stacked cards. Spacing uses em-based gap variables: --gap-xxs .25em, --gap-xs .5em, --gap-s .75em, --gap-sm 1em, --gap-m 1.25em, --gap-ml 1.5em, --gap-l 2em, --gap-xl 3em, --gap-xxl 4em; the page padding is --gap-s.

Measured gaps: 28.4444px (28), 10.6667px (24), 71.1111px (20), 42.6667px (10). Paddings: 3.84px (60), 26.6667px (58), 13.3333px (46), 9.95556px (30), 20px (27), 42.6667px (16).

## Elevation & Depth

No box shadows were measured. Depth is created by color blocking, 1px black borders (61 uses) and by overlapping 3D illustration (the foam ribbon behind the wordmark, stickers overlapping headings). Everything else is flat.

## Shapes

Measured radii: 17.7778px (50), 26.6667px (34), 35.5556px (24), 1280px (21), 1422.22px (18), 1333.33px (4), 14.2222px (1). The very large values are pills and circles; the container radius (2.5em, 35.5556px at the measured scale) rounds the sections; 17.7778px and 26.6667px round cards and panels. The two CTA anchors in the measured role list report a 0px radius, while the nav links (1422.22px) and the input (1333.33px) are pills.

## Components

**Nav pill.** White fill, 1px black border, 14.2222px weight-500 black label, 1422.22px radius, 44px high; the circular icon button is 44px wide.

**CTA.** White fill, black uppercase 13.3333px weight-700 label, 40px high ("GET STARTED" 139px wide, "DOWNLOAD" 130px wide); hovering the black LAUNCH APP pill inverts its label color from white to black.

**Text input.** White, 1px black border, 1333.33px radius, 13.3333px weight-700 text, padding 13.3333px 12px, 333px wide, 40px high.

**Ticker.** Full-width lavender bar, 28px high, 10.6667px uppercase bold text repeated.

**Card.** Yellow #ffd731 fill, 26.6667px padding, black border.

## Design System Architecture

No public design-system documentation was found. The system is visible in the shipped CSS: named color variables with a numeric scale (100 and 700 or 800 steps per hue), an em-based gap scale, a container-size formula that scales all type fluidly between 992px and 2250px, a --radius-container variable, and two easing curves (--color-ease and --smooth-ease cubic-bezier(.32, .72, 0, 1)). Tokens here come from the measurements and these root variables.

## Do's and Don'ts

- Do keep text black on white or on flat saturated color fields.
- Do outline controls with 1px black and round them fully.
- Do set headlines tight, with negative tracking.
- Do build each section as its own big-radius container on a black page.
- Do use stickers and 3D objects for personality.
- Don't add drop shadows; none exist.
- Don't use gradients for UI fills; fills are flat.

## Responsive Behavior

Mobile measurements: h1 30px (164px wide), h2 30px (289px wide), body 24px, nav 15px, the ticker text 12px. Mobile font sizes by characters: 24px (1431), 12px (810), 20px (451), 15px (305), 129.375px (270), 30px (205), 80px (157), 99.2px (124). Because sizes derive from the container formula, they scale continuously; breakpoints for layout changes were not measured.

## Iteration Guide

1. Start with a black page and a rounded white or sky-blue container.
2. Set headlines in Aeonik Pro weight 500 with negative tracking; reserve the heavy poster face for one oversized slogan per screen.
3. Make actions white pills with 1px black outlines and uppercase labels, plus one black pill.
4. Use the flat palette from the root variables for panels.
5. Keep the ticker bar in #e9ccff at the very top.
6. Gate: node web/scripts/verify-designs.mjs --slug=slush.

## Additional Measurement Notes

The desktop pass reports 1175 visible elements and an English document language. The spacing scale in the frontmatter runs from 3.56px to 13.33px and reflects the small paddings inside pills, labels and the ticker, while larger paddings such as 49.7778px and 160px belong to section blocks. Because the whole page scales with a viewport-derived unit, any new component should express its sizes in em or in the root gap variables rather than fixed pixels. Keep the black outer frame visible between sections, keep outlines at 1px black, and keep the saturated sticker colors flat, with no gradients or shadows on interface elements.
