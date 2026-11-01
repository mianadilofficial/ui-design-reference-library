---
version: alpha
name: The Washington Post
category: "News & Publishing"
description: "The Washington Post home page (washingtonpost.com), built on the Washington Post Design System (WPDS): white #ffffff page, #2a2a2a ink, #595959 summaries, #111111 strong text, a blue #166dfc pill Subscribe CTA (hover #1366b3) and #e7f0fe CTA container. Postoni 700 headlines at 26px, ITC Franklin 300/700 for summaries and UI; 9999px pills, 0.1-alpha outlines."
colors:
  canvas: "#ffffff"
  ink: "#2a2a2a"
  primary: "#166dfc"
  on-primary: "#ffffff"
  primary-hover: "#1366b3"
  surface: "#f7f7f7"
  cta-container: "#e7f0fe"
  ink-accessible: "#595959"
  ink-strong: "#111111"
  ink-black: "#000000"
  surface-dark: "#333333"
  outline: "#0000001a"
  nav-border: "#e9e9e9"
typography:
  display:
    fontFamily: Postoni, Postoni-fallback, serif
    fontSize: 26px
    fontWeight: 700
    lineHeight: 28.6px
  display-mobile:
    fontFamily: Postoni, garamond, serif
    fontSize: 26px
    fontWeight: 700
    lineHeight: 28.6px
  subheading:
    fontFamily: Franklin, Franklin-fallback, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 22px
  body:
    fontFamily: Franklin, Franklin-fallback, sans-serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 22.5px
  button:
    fontFamily: Franklin, Franklin-fallback, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  link:
    fontFamily: Franklin, Franklin-fallback, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
  button-secondary:
    fontFamily: Franklin, Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 17.5px
  input:
    fontFamily: Franklin, Franklin-fallback, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 4px
  md: 11px
  lg: 20px
  xl: 30px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-offer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    padding: 8px 32px
    height: 34px
  button-dark:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 16px
    height: 40px
  section-chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    borderColor: "{colors.nav-border}"
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.input}"
    padding: 20px 8px 8px
    height: 48px
  footer:
    textColor: "{colors.ink}"
---

# The Washington Post

## Overview

This is the home page of The Washington Post (washingtonpost.com), measured at a 1280px desktop viewport. It is a
newspaper front page with a modern, softened interface: a blackletter nameplate with the tagline "Democracy Dies
in Darkness" centred over a row of pill-shaped section links, then a three-column news grid of bold Postoni
headlines, light Franklin summaries and photographs. The palette is greyscale with one bright action blue,
`#166dfc`, used for subscription.

The capture (below a third-party sponsored unit at the very top, which is advertising and not part of this
document) shows a slim utility row with a menu/search icon and an alerts bell on the left and a blue "Subscribe"
pill plus "Sign in" on the right; the nameplate; a section row (Politics, Opinions, U.S. News, Style,
Investigations, Well+Being, Business, Tech, WP Intelligence, Ripple, Games) above a rule; then the lead stories —
a large headline with summary and bylines to the left of a wide photograph — and an "Opinions" rail on the right
with columnist names and small illustrated portraits. Further down sit more news packages, a "Featured Voices"
section, a light-blue subscription offer band, and a large footer of link columns (Company, Sections, Get The
Post, Contact Us).

The voice is classic newsroom: declarative headlines ("Teacher and alert father helped save lives in Oregon school
shooting, police say"), concise summaries, bylines in small Franklin.

## Colors

The values below match WPDS semantic token names that the site ships as CSS variables:

- **Canvas `#ffffff`** — the page; WPDS `--wpds-colors-secondary` and `--wpds-colors-surface-highest`.
- **Ink `#2a2a2a`** — headlines and the most-read text (`--wpds-colors-gray40`, also `--wpds-colors-primary-hover`).
- **Ink strong `#111111`** — WPDS `--wpds-colors-primary`: section chips, the dark "Sign up" button, inputs.
- **Ink accessible `#595959`** — summaries and bylines (`--wpds-colors-accessible`, `--wpds-colors-gray80`).
  Headlines measured shifting from `#2a2a2a` to this grey on hover.
- **Primary `#166dfc`** — the CTA blue (`--wpds-colors-cta`) on "Subscribe" and "Get one year for $29", hover
  **`#1366b3`** (`--wpds-colors-cta-hover`, measured).
- **CTA container `#e7f0fe`** — the pale blue subscription band (`--wpds-colors-ctaContainer`).
- **Surface `#f7f7f7`** — `--wpds-colors-background-forSurfaces`, the grey ground behind surfaces.
- **Surface dark `#333333`** — the fill of the small "Learn more" buttons.
- **Outline `#0000001a`** — the 10%-black border token (`--wpds-colors-outline`) used on cards and chips; the WPDS
  colour page says to use the outline token for borders on cards.
- **Nav border `#e9e9e9`** — the rule beneath the navigation; section chips also measured `rgb(233, 233, 233)` as
  their hover fill.

## Typography

Webfonts are served from `/wp-stat/assets/fonts/`: PostoniWide Bold and ITC Franklin Light and Bold. The WPDS
typography foundation defines the families: headline "Postoni, Postoni-fallback, serif", body "georgia, Times New
Roman, serif", meta and subhead "Franklin, Franklin-fallback, sans-serif", and magazine "PostoniDisplayMag".

- **Headlines** — Postoni 700, the most-used family by characters. The lead story measured 26px / 28.6px; 24px and
  20px are the next steps down (both on the WPDS scale).
- **Subheads** — Franklin 700 at 20px / 22px (the h3 "The system failed Jane Doe. Congress can fix it." measured this style).
- **Summaries** — Franklin 300 at 18px / 22.5px in `#595959`. On the measured home page Georgia (the WPDS body
  token) appears only in a handful of characters.
- **UI** — Franklin 700: buttons 16px, section chips and footer headings 14px; inputs Franklin 400 at 16px.
- Tracking is normal everywhere except 0.5px on some 14px labels.

The WPDS font-size scale lists 12, 14, 16, 18, 20, 24, 26, 28, 32 px and larger steps up to 80px; every size
measured on the home page falls on it.

## Layout

The page is a centred multi-column grid with 32px gaps (the most frequent gap) and 8px and 12px gaps inside story
blocks. The lead package places a narrow headline column, a wide photo and a right-hand opinions rail side by
side; the widest card row measured three columns. Thin rules separate stacked stories. Padding is mostly 8px,
16px and 12px inside components, 56px and 48px around large bands. The scroll is long (over 13,000px).

## Elevation & Depth

No box shadows were rendered on the measured page; separation is by 1px outlines at 10% black and horizontal
rules. WPDS defines a shadow scale in the shipped variables (`--wpds-shadows-50` "0px 2px 0px 0px #D5D5D5",
`--wpds-shadows-100` through `-500`) and the WPDS site documents a Shadow foundation, but none of those values
appeared on the home page's elements.

## Shapes

Pills dominate the interactive layer: 9999px (WPDS `--wpds-radii-round`) on Subscribe, Sign up and the section
chips; 30px on the "Get one year for $29" offer button; 20px on "Learn more" buttons. Small radii (2px, 4px,
11px) appear on minor controls. 50% circles hold columnist portraits and icon buttons. Photographs are square-cut.

## Components

- **Subscribe pill** — `#166dfc`, white Franklin 16px / 700, 8px 16px padding, 32px tall, 9999px radius; hover
  `#1366b3`.
- **Offer button** — same blue, Franklin 14px / 700, 8px 32px padding, 34px tall, 30px radius.
- **Dark pill** — `#111111` fill, white label, 12px 16px padding, 40px tall ("Sign up").
- **Section chip** — white pill with `#111111` Franklin 14px / 700 label, 8px 16px padding; hover fill `#e9e9e9`.
- **Story block** — Postoni headline, Franklin light summary, small Franklin byline, optional photo with caption
  and credit.
- **Opinion rail item** — small grey author or board name, Postoni headline, round illustrated portrait at right.
- **Text input** — Franklin 16px, 20px 8px 8px padding, 48px tall.
- **Footer** — white, Franklin 14px / 700 column headings in `#2a2a2a` with link lists beneath.

## Design System Architecture

The Post builds its products on the Washington Post Design System, documented at https://build.washingtonpost.com/
— "a growing library of design tokens and interactive components". Its foundations cover colour
(https://build.washingtonpost.com/foundations/color/), typography
(https://build.washingtonpost.com/foundations/typography/), radius and shadow, and it supports "light" and "dark"
contexts. Semantic colour roles are named Primary, Secondary, Cta, Background, Surface, Outline and message
containers, each with `on…`, `-hover` and `-subtle` variants. The live home page ships those tokens as CSS
variables with a `--wpds-` prefix (`--wpds-colors-cta`, `--wpds-colors-ctaContainer`, `--wpds-fonts-meta`,
`--wpds-radii-round`, `--wpds-fontSizes-150`), alongside a few legacy variables (`--shadow-card`, `--red`,
`--subs-green-pale`).

## Do's and Don'ts

**Do**
- Use WPDS semantic tokens: `#166dfc` only for CTA, `#111111` for primary UI, `#595959` for accessible secondary text.
- Set headlines in Postoni bold and every summary and control in Franklin.
- Shape buttons and chips as pills.
- Divide stories with rules and 10%-black outlines rather than shadows.
- Keep summaries light (Franklin 300) against bold headlines.

**Don't**
- Don't use the CTA blue for links or headlines.
- Don't add elevation to news cards on the front page; none was rendered.
- Don't introduce sizes off the WPDS font-size scale.
- Don't treat sponsored units at the top of the page as Post UI.

## Responsive Behavior

From the extraction's mobile pass:

- The lead headline keeps Postoni 26px / 700 / 28.6px, with `garamond` in the fallback stack instead of
  `Postoni-fallback`.
- Visible header links measured 4 on mobile; the widest card row measured 1 column.
- The most-read mobile sizes were 16px, 14px, 20px and 26px.
- No filled primary button was detected in the mobile pass.

Breakpoints and the grid reflow between widths were not measured.

## Iteration Guide

1. Start from the WPDS token names; take values from the `--wpds-*` variables or the WPDS docs.
2. Load Postoni and ITC Franklin (300/700); keep Georgia as the declared body family for long-form text.
3. Build actions as pills: blue for subscribe, `#111111` for secondary, white chips for sections.
4. Compose stories as headline → light summary → byline, separated by rules.
5. Measure any new component on the live site before tokenising it.
