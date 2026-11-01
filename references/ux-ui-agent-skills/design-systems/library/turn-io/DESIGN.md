---
version: alpha
name: "Turn.io"
category: "Business & Corporate"
description: "Turn.io home page: a deep forest-green hero (#0a3922) with mint headline (#d2f2e3), a white canvas with pastel feature cards (#e0f6fb, #e4f7ee, 16px radius), a coral pill button (#ff643b, 50px radius, white DM Sans 600 at 18px) and DM Sans throughout, from 80px display to 16px body."
colors:
  canvas: "#ffffff"
  ink: "#3d3d3d"
  primary: "#ff643b"
  on-primary: "#ffffff"
  surface-2: "#006c85"
  surface-3: "#137345"
  ink-secondary: "#7a7a7a"
  ink-3: "#000000"
  ink-4: "#a6a6a6"
  ink-5: "#d7c0ff"
  ink-6: "#d2f2e3"
  hairline: "#e0e0e0"
  on-primary-hover: "#403911"
  card-bg: "#e0f6fb"
typography:
  display:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 80px
    fontWeight: 600
    lineHeight: 88px
  display-mobile:
    fontFamily: "\"DM Sans\", Arial, sans-serif"
    fontSize: 56px
    fontWeight: 600
    lineHeight: 61.6px
  heading:
    fontFamily: "\"DM Sans\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 38.4px
  subheading:
    fontFamily: "\"DM Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 52px
    fontWeight: 600
    lineHeight: 57.2px
    letterSpacing: "-1px"
  body:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  button:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 24px
  4xl: 50px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 5.28px
  s4: 6.08px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 17.92px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 14px 32px
    height: 56px
  button-primary-hover:
    textColor: "{colors.on-primary-hover}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    padding: 5.28px 0px 13.44px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-3}"
    rounded: "{rounded.xl}"
  footer:
    backgroundColor: "{colors.ink-3}"
    textColor: "{colors.ink-4}"
---

## Overview

Turn.io (https://www.turn.io/, title "Chat for impact | Turn.io", language `en`) sells a WhatsApp-based patient-engagement platform for health organizations. The home page opens with a thin cyan announcement bar ("NEW Booking is now available. Fill your schedule and reduce no-shows on WhatsApp. Learn more"), then a dark-green hero: the wordmark "turn.io" at top-left, a navigation (Product, Solutions, Community, Resources, Pricing), a language switch "EN", "Log in" and a white pill "Book a Call" at right. The h1 reads "Turn WhatsApp into your Health App" at 80px (DM Sans, weight 600, line height 88px), with the word "WhatsApp" in a brighter green, over body copy and two actions: a coral pill "Book a Call" and a text link "Take a tour". At the right, photographs of health workers and patients are overlaid with WhatsApp-style chat bubbles. A row of partner logos follows under "In partnership with" (Meta, World Health Organization, OpenAI and others).

The rest of the page is a white section titled "Every patient touchpoint in one conversation" containing a two-column grid of pastel-tinted cards, each with a 32px heading and an app-like illustration: "Cut no-shows by 40%", "Save hours daily on admin tasks", "Answer queries instantly with AI", "Double your consultation capacity", "Deliver results securely" and "Improve medication adherence by 20%". Other headings read on the live page: "Real results from real teams", "Complete patient journey automation", "Your entire digital patient journey toolkit" and "Make every conversation count". The footer is black with "Turn.io is an official WhatsApp business solution provider" and "© 2026 Turn.io PBC, Public Benefit Corporation".

The extractor counted a 11,979px-tall page at 1,280px width. The tone is warm, human and outcome-first: statistics in headings, photographic faces, and illustrations styled as product screenshots.

## Colors

The stylesheet defines five-step ramps per hue as root variables (251 root variables in total), and the page uses them in a restrained way.

- **canvas `#ffffff`**: dominant background of the white sections.
- **ink `#3d3d3d`** (`--black--4-5`): the main text color on white. Other text: **ink-secondary `#7a7a7a`** (`--black--4`, the most-read color by characters), **ink-3 `#000000`** (card headings), **ink-4 `#a6a6a6`** (`--black--3`, footer text), **ink-5 `#d7c0ff`** (`--purple--2`, lavender text on the dark purple band), **ink-6 `#d2f2e3`** (`--green--1`, the mint of the hero headline).
- **primary `#ff643b`** (`--red--3`): the coral of the "Book a Call" button; **on-primary `#ffffff`** is its label; the measured hover state sets the label to **on-primary-hover `#403911`** (`--yellow--5`) while the fill stays #ff643b.
- **surface-2 `#006c85`** and **surface-3 `#137345`**: a teal and a mid-green background area. The deepest green, #0a3922 (`--green--5`), is the hero background and also a text color; it ranks among the background areas as #0a3922.
- **card-bg `#e0f6fb`**: the pale blue of the first card; the second card measures #e4f7ee (pale green). The root ramps include `--blue--1: #ccf0f8`, `--green--1: #d2f2e3`, `--purple--1: #eee2ff` and `--red--1: #ffe1d8`.
- **hairline `#e0e0e0`**: divider color.

Other measured backgrounds: #eee2ff (lavender), #000000 (footer), #460095 (deep purple, `--purple--5`), #3b1e40 and #f2f2f2.

## Typography

One family: **DM Sans** (variable weights 100 to 1000, plus static 500 and 600), together with the Webflow icon font. The stack for the h1 is `"DM Sans", sans-serif`; some elements list `-apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial` after it.

| Token | Size / line height | Weight | Notes |
|---|---|---|---|
| display (h1) | 80px / 88px | 600 | mint #d2f2e3 on green |
| heading (h2) | 32px / 38.4px | 600 | card titles |
| subheading (h3) | 52px / 57.2px | 600 | letter spacing -1px; testimonial quote |
| button | 18px / 24px | 600 | coral pill |
| body | 16px / 19.2px | 400 | descriptions |
| display-mobile | 56px / 61.6px | 600 | measured at 390px |

By characters the sizes rank 16px, 18px, 20px, 32px, 24px, 72px, 52px, 116px and 68.8px. The line-height ratio is 1.1 for the display and subheading, 1.2 for headings, and 1.2 for body (19.2 over 16), so type is set tight. Only the 52px subheading carries a non-default letter spacing (-1px).

No substitute is needed: DM Sans is loaded by the site.

## Layout

The grid is two columns of cards of 592px by 436px on a 1,280px viewport (the h2 inside measures 544px wide). Measured paddings are 24px, 30px, 32px, 40px, 8px, 16px, 50px, 120px and 10px; gaps are 5px, 8px, 24px, 20px, 10px, 40px, 55px, 16px and 12px. The spacing tokens s1 to s10 run 4px to 17.92px. The stylesheet's variables follow a Webflow naming (`--sizes--8px-0-5rem`, `--paddings--padding-8-t`, `--typography--lineheight-h1-m-t`), with separate desktop, tablet (`-t`) and mobile (`-m`) values for paddings and line heights.

The primary button is 159px by 56px with 14px 32px padding; the secondary white button is 143px by 51px with 13.44px 24px padding. The footer is 905px tall on black.

## Elevation & Depth

Only one box shadow was measured: `rgba(0, 0, 0, 0.05) 0px 1px 1px 0px`, an almost invisible hairline lift. The look is flat: depth comes from tinted card backgrounds, overlapping photographs and chat bubbles, and illustrated phone frames.

## Shapes

Measured radii: 24px (18 elements), 50% (11), 16px, 8px, 50px (the button pill), `4px 18px 18px` (speech-bubble corners), 2px, 999px and 20px. Tokens: xs 2px, sm 4px, md 8px, lg 12px, xl 16px, 2xl 20px, 3xl 24px, 4xl 50px and pill 9999px. Cards use 16px; the "Book a Call" button uses 50px; image tiles and inline chat bubbles use 24px or the asymmetric bubble radius.

## Components

**Primary button** (`button-primary`): fill #ff643b, label #ffffff, DM Sans 18px/600, 50px radius, 14px 32px padding, 56px high. On hover the label color changes to #403911 (the fill is unchanged).

**Secondary button**: white fill, black label, DM Sans 18px/600, 50px radius, 13.44px 24px padding, 51px high ("Book a Call" in the header).

**Cards** (`card`): background #e0f6fb (blue) or #e4f7ee (green), black 32px heading, 16px radius, 592px by 436px.

**Navigation**: transparent over the green hero, white 16px/400 labels; hover turns the label black in the measured nav items.

**Footer**: black background, #a6a6a6 text, 905px high.

**Announcement bar**: cyan #00b4dc (`--blue--3`) with #0a3922 bold 12px text, 40px high at mobile width; it is a promotional banner and is not tokenized.

## Design System Architecture

No public design system, brand guideline or press kit was found: the home page https://www.turn.io/ (opened with WebFetch) links only to Help centre, For developers, News, Legal and Trust Center in the footer. The de-facto system is a Webflow style system exposed through 251 root variables: five-step hue ramps (`--green--0` to `--green--5`, `--blue--*`, `--purple--*`, `--red--*`, `--yellow--*`, `--black--*`), a size scale named by px and rem (`--sizes--8px-0-5rem`), padding steps (`--paddings--padding-4-m`) and typography steps per breakpoint (`--typography--h7-t`, `--typography--lineheight-h6-m`). The `webflow-icons` font in the font list is further evidence of the platform.

## Do's and Don'ts

- Do use DM Sans at 600 for all headings and buttons.
- Do pair the deep green #0a3922 hero with mint #d2f2e3 headlines.
- Do use coral #ff643b only for the primary action.
- Do tint cards with the pale ramp colors (#e0f6fb, #e4f7ee) and round them at 16px.
- Do use real photography of patients and clinicians with chat-bubble overlays.
- Don't add heavy shadows; only a 5% hairline shadow was measured.
- Don't use the cyan announcement bar color as a button.

## Responsive Behavior

Measured at 390px: the h1 is 56px / 61.6px at weight 600 (desktop 80px / 88px) and the body is 16px / 17.6px. By-character sizes at mobile: 16px, 18px, 24px, 40px, 20px and 14px. The stylesheet declares separate tablet and mobile variables (`-t` and `-m` suffixes) for padding and line height. Column counts and nav behaviour at mobile width were not measured.

## Iteration Guide

1. Start with white and #3d3d3d for text; use #0a3922 for hero bands.
2. Use coral #ff643b with white 18px/600 text for the primary pill.
3. Build cards at 16px radius with pastel fills.
4. Keep headings in DM Sans 600 with line heights near 1.1 to 1.2.
5. Re-gate with `node web/scripts/verify-designs.mjs --slug=turn-io`.
