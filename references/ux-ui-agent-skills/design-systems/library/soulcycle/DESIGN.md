---
version: alpha
name: "SoulCycle"
category: "Sports & Fitness"
description: "SoulCycle's site pairs Helvetica Neue LT Std (Roman, Medium, Bold files) with SoulCycle yellow (#ffde00) on black (#000000) and white (#ffffff), 54px/64px display with -1px tracking, 14px bold buttons with square or 5px corners, and dark #111111 article cards under yellow tracked eyebrow labels."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffde00"
  on-primary: "#000000"
  surface-3: "#111111"
  ink-2: "#53565a"
  ink-3: "#ffffff80"
  ink-5: "#777777"
  ink-6: "#ffd700"
  hairline: "#ffffff0f"
typography:
  display:
    fontFamily: HelveticaNeueLTStd-Md-Normalized, Helvetica, Arial, sans-serif
    fontSize: 54px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: HelveticaNeueLTStd-Bd-Normalized, Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  subheading:
    fontFamily: HelveticaNeueLTStd-Roman-Normalized, Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: HelveticaNeueLTStd-Bd-Normalized, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: 0.5px
    textTransform: capitalize
  nav:
    fontFamily: HelveticaNeueLTStd-Roman-Normalized, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.5px
  body-dominant:
    fontFamily: Helvetica Neue
    fontSize: 14px
    fontWeight: 400
  input:
    fontFamily: HelveticaNeueLTStd-Lt-Normalized, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.5px
rounded:
  xs: 4px
  sm: 5px
  md: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 12.8px
  s7: 16px
  s8: 20px
  s9: 22px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 4px 32px 0px
    height: 48px
    borderColor: "{colors.primary}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 22px
    height: 36px
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 10px 0px
    height: 55px
---

# SoulCycle

## Overview

SoulCycle (soul-cycle.com, titled "Find Cycling Classes Near You or Ride at Home - SoulCycle") is the site of an indoor-cycling studio brand. The 1280px page is 5226px tall. A slim dark-grey utility bar sits on top with a yellow "New to Soul?" link at the left and, at the right, a white-outlined "Book a Bike" button, an "NYC" location selector, a bike icon, a cart icon and "Sign in". Below it a black header carries the SOULCYCLE wordmark at the left and nav links (The Experience, Studios, Instructors, Soul Connected, At Home Bike, Shop Collection). The hero is a black slide with a photograph of a rider in low light: "Welcome to SOUL" (the word SOUL in yellow), then "For a limited time, enjoy two weeks of unlimited rides for $50." with the key phrases in yellow, and a yellow "Get Started" button; slide dots sit beneath it.

The page then moves to a white section: a small tracked "THE" label, the large bold heading "SOULCYCLE EXPERIENCE", a centered gray sentence ("A rhythm-riding class that challenges your body, frees your mind, and feeds your soul."), a three-cell ruled tab row (CARDIO + STRENGTH, MUSIC DRIVEN, CANDLELIT STUDIO) and three numbered columns (01 RIDE TO THE BEAT, 02 CHALLENGE YOUR MIND, 03 FIND YOUR COMMUNITY) with big pale numerals. A black "SOUL CONNECTED / NEW TO SOULCYCLE?" section follows with a carousel of dark `#111111` article cards (numerals in dark yellow, yellow tracked category labels, a "READ ARTICLE →" link in yellow) and a closing row "Ready to experience it yourself?" with a yellow "BOOK YOUR FIRST RIDE" bar.

The voice is energetic and second-person, with short imperative headings in uppercase and plain, friendly body text. The visual identity is stark: black, white and a single saturated yellow, with photography of riders in dark, candlelit settings.

## Colors

- **Canvas `#ffffff`** and black `#000000` are almost equal in area (4256 and 4240 weight): the page alternates white content sections and black hero, header and article sections. Ink is `#000000` on white (1052 characters).
- **Primary `#ffde00`** is the SoulCycle yellow: button fills, the highlighted words in the hero, a 1px button border and large-numeral tint. On-primary is `#000000`.
- **Ink-6 `#ffd700`** is a slightly different yellow used for text (147 characters, the tracked eyebrow labels and links) and a small background area (11 weight).
- **Surface-3 `#111111`** is the dark article-card fill (583 weight); `#f8f8f8` (558 weight) is a light section tint.
- **Ink-2 `#53565a`** is the grey body text (832 characters, and the background of the top utility bar at 57 weight); **ink-5 `#777777`** (375 characters) and `#555555` (86) are secondary greys.
- **Ink-3 `#ffffff80`** is half-white text on black (670 characters); **hairline `#ffffff0f`** is the border on dark cards (5 uses).

Borders also use `#ffde00` (4), `#ffffff33` (2) and `#ffffff1a` (1).

## Typography

The site uses the Helvetica Neue LT Std family as separate web-font files rather than weights: **Roman** (1266 characters), **Bold** (544), **Medium** (391) and **Light** (18), all normalized, with "Helvetica Neue" itself on the largest share of text (1620 characters). Font-weight is computed as 400 on these files, with other weights (700 for 320 characters, 800 for 192, 900 for 75, 600 for 20) appearing on system-font text.

| Role | Face | Size / line-height | Tracking |
|---|---|---|---|
| display ("Welcome to SOUL") | HelveticaNeueLTStd Medium | 54px / 64px | -1px |
| heading (offer line) | HelveticaNeueLTStd Bold | 32px / 40px | normal |
| subheading (lead paragraph) | HelveticaNeueLTStd Roman | 24px / 32px | -0.25px |
| nav | HelveticaNeueLTStd Roman | 16px / 24px | 0.5px |
| button | HelveticaNeueLTStd Bold | 14px / 40px, capitalize | 0.5px |
| input | HelveticaNeueLTStd Light | 16px / 24px | 0.5px |
| body-dominant | Helvetica Neue | 14px | not recorded |

The size ladder by characters is 14px (1266), 16px (684), 12px (500), 24px (402), 32px (228), 54px (174), 22px (160) and 18px (142). Eyebrow labels are small (11px with 2px tracking on 83 characters, 12px with 1.5px tracking on 70). The measured mobile display style is the Bold face at 32px/40px.

## Layout

The container is 1160px wide inside the 1280px viewport for the hero text; the reading sections use a centered, narrower column (width not measured) holding the ruled tab row and three columns. Header utility bar is thin; main nav row is 56px tall. Padding values: 10px (28), 8px (27), 60px (13), 20px (12), 28px (10), 22px (10), 32px (9), 24px (6). Gaps are small (8px, 2px, 32px). Vertical rhythm alternates white and black full-width bands. Cards in the carousel are three across and bleed off the right edge to suggest scroll.

## Elevation & Depth

Two shadows were measured: `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` on 10 elements and `rgba(0, 0, 0, 0.3) 4px 4px 10px 0px` on 2. Otherwise depth comes from the black and white band contrast, from dark `#111111` cards on black, and from photography.

## Shapes

Radii: 5px on 10 elements, 50% on 8 (circular controls such as the carousel arrows and the icon buttons), 10px on 4 and 4px on 1. The primary "Get Started" button and the outlined "Book a Bike" are square (0px) while the "Reserve" button has a 5px radius. The generated scale is xs 4px, sm 5px, md 10px, none 0px and pill 9999px.

## Components

- **button-primary**: `#ffde00` fill with a 1px `#ffde00` border, `#000000` text, Bold 14px capitalized with 0.5px tracking, 4px 32px 0px padding, 48px tall, 0px radius ("Get Started", 148px wide).
- **button-secondary**: `#ffde00` fill, black text, 5px radius, 10px 22px padding, 36px tall ("Reserve").
- **button outlined**: transparent fill, 1px white border, white 14px Bold text, 0px 24px padding, 40px tall ("Book a Bike"); on hover the fill turns a light grey with black text (measured rgb(186, 186, 186) and rgb(0, 0, 0)).
- **nav**: white 16px Roman links with 0.5px tracking, 56px row.
- **text-input**: white fill, black 16px Light text, 10px 0px padding, 55px tall, 0px radius.
- **article card**: `#111111` fill, yellow tracked category, white title, grey excerpt, yellow "READ ARTICLE →" footer strip.

## Design System Architecture

No public design system or brand guideline link was found on the home page (the opened links are About pages). The stylesheet exposes no CSS custom properties (rootVars is empty), so the de-facto system is literal values: a yellow and black palette, Helvetica Neue LT Std web fonts named `HelveticaNeueLTStd-{Lt,Roman,Md,Bd}-Normalized`, 14px bold buttons and a small shadow pair. Reference: https://www.soul-cycle.com/

## Do's and Don'ts

- Do use `#ffde00` for the main action with black text; keep the fill color uniform across buttons.
- Do alternate black and white bands and keep photography dark and candlelit.
- Do use short, imperative uppercase headings with tracked small eyebrows.
- Don't put yellow text on white; the yellow text color `#ffd700` is measured on dark sections.
- Don't round the hero button; it is square, while smaller buttons use 5px.
- Don't add colors beyond black, white, greys and yellow.

## Responsive Behavior

The 390px mobile pass measured: the display heading becomes 32px/40px in the Bold face (342px wide); body text drops from 24px to 16px with 24px line-height and -0.25px tracking (255px wide); the primary button stays 14px; the mobile size ladder is 14px (1197), 16px (1186), 12px (500), 24px (265), 18px (183), 22px (160), 10px (125), 11px (83), 32px (68) and 20px (49). Nav and carousel behavior on mobile were not measured.

## Iteration Guide

1. Build in black and white bands with `#ffde00` as the only color.
2. Use Helvetica Neue LT Std faces; 54px/64px display, 14px bold buttons with 0.5px tracking.
3. Square primary buttons; 5px for compact ones.
4. Use dark `#111111` cards with yellow eyebrow labels.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=soulcycle --url=https://www.soul-cycle.com --force --no-motion` after site changes.
