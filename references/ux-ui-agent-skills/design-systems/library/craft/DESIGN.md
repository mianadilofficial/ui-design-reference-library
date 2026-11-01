---
version: alpha
name: Craft
category: "Productivity & SaaS"
description: "Craft's marketing home: warm paper #fcf9f7 canvas, near-black #030302 pill buttons fading to 75% on hover, Untitled Serif 400 headlines at 66px with -1.98px tracking over Untitled Sans UI text, large 24px-rounded pastel panels in periwinkle #b8caf5, mint #9bd8a9 and butter #fde99b, and deep soft multi-layer shadows."
colors:
  canvas: "#fcf9f7"
  page-largest: "#ffffff"
  surface-periwinkle: "#b8caf5"
  surface-mint: "#9bd8a9"
  surface-butter: "#fde99b"
  surface-grey: "#f7f7f7"
  ink: "#030302"
  ink-90: "#030302e6"
  ink-75: "#030302bf"
  ink-65: "#030302a6"
  ink-50: "#03030280"
  primary: "#030302"
  on-primary: "#ffffff"
  hairline: "#0000001f"
typography:
  display:
    fontFamily: UntitledSerifFont, "UntitledSerifFont Fallback", apple-system-ui-serif, ui-serif, Georgia, "serif"
    fontSize: 66px
    fontWeight: 400
    lineHeight: 66px
    letterSpacing: "-1.98px"
  display-mobile:
    fontFamily: UntitledSerifFont, "UntitledSerifFont Fallback", apple-system-ui-serif, ui-serif, Georgia, "serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-1.92px"
  heading:
    fontFamily: UntitledSerifFont, "UntitledSerifFont Fallback", apple-system-ui-serif, ui-serif, Georgia, "serif"
    fontSize: 54px
    fontWeight: 400
    lineHeight: 59.4px
    letterSpacing: "-1.08px"
  subheading:
    fontFamily: UntitledSerifFont, "UntitledSerifFont Fallback", apple-system-ui-serif, ui-serif, Georgia, "serif"
    fontSize: 46px
    fontWeight: 400
    lineHeight: 56.12px
    letterSpacing: "-1.38px"
  body:
    fontFamily: apple-system, InterFont, "InterFont Fallback", "system-ui", "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
    letterSpacing: "-1.65%"
  button:
    fontFamily: UntitledSansFont, "UntitledSansFont Fallback", apple-system, InterFont, "InterFont Fallback", "system-ui", "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: UntitledSansFont, "UntitledSansFont Fallback", apple-system, InterFont, "InterFont Fallback", "system-ui", "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 14px
  xl: 16px
  2xl: 18px
  3xl: 20px
  4xl: 24px
  5xl: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 13px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 14px
    height: 36px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px
      1px 2px -1px
  button-primary-hover:
    backgroundColor: "{colors.ink-75}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 16px 32px
    height: 56px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px
      1px 2px -1px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 32px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 12px 12px 2px, rgba(0, 0, 0, 0.06)
      0px 2px 4px -1px
  nav:
    textColor: "{colors.ink}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 12px 12px 2px, rgba(0, 0, 0, 0.06)
      0px 2px 4px -1px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 4px
  chip-template:
    backgroundColor: "{colors.surface-mint}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 12px 16px
    height: 44px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.4xl}"
    boxShadow: rgba(0, 0, 0, 0.01) 0px 50px 40px 0px, rgba(0, 0, 0, 0.02) 0px 50px 40px 0px, rgba(0, 0, 0, 0.05) 0px 20px 40px 0px, rgba(0, 0, 0, 0.08) 0px 3px 10px 0px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.4xl}"
    padding: 0px 24px
---

# Craft

## Overview

The measured page is `https://www.craft.do/`, titled "Craft — Productivity App for Notes, Tasks, and Docs", language `en`. It is the marketing home for Craft, a notes, tasks and documents app, opening with the serif headline "Your space for notes, tasks, and big ideas" and a black "Try Craft Free" pill.

The look is editorial and tactile. The page sits on a warm paper tone (`#fcf9f7`). Headlines are set in a regular-weight serif (Untitled Serif) with tight tracking, often with an italic word ("it's for *your* things"), while UI text uses Untitled Sans. The only "brand colour" in the interface is near-black `#030302`; colour arrives instead through large pastel panels — periwinkle `#b8caf5`, mint `#9bd8a9`, butter `#fde99b`, peach `#ffdbc5` — that frame product screenshots of Craft documents, calendars and task lists.

The capture shows a hero with a product window floating over a painted sky with clouds and torn-paper edges; a row of feature icons (Docs, Tasks, Calendar, Whiteboards, Daily Notes); "How people use Craft" with portrait cards of real users and their roles; panels "From first thought to final form", "Imagine the possibilities…", "Planning that doesn't feel like work"; an awards row (App Store Award, Apple Design Awards, Webby); pull quotes in italic serif from users; "Structure That Adapts to Your Thinking" (Spaces, Folders & Tags, Collections); "Make it unmistakably yours" with a carousel of colourful document covers; community cards; pricing ("Your pace, your plan" — Free and Plus); a mint "Let's get started" band; and a black rounded footer. The tone is warm and personal, centred on people and their "things".

## Colors

- **canvas `#fcf9f7`** — page background (the body colour); 47% of the capture.
- **page-largest `#ffffff`** — white cards and product windows; the largest background by DOM area.
- **surface-periwinkle `#b8caf5`**, **surface-mint `#9bd8a9`**, **surface-butter `#fde99b`** — the big pastel feature panels; mint also fills template chips ("Blog Publisher", "Reading Tracker", "Plant Dashboard") and the final CTA band.
- **surface-grey `#f7f7f7`** — light grey panels.
- **ink `#030302`** — headings and strong text; the most-read colour (`--color-black-900`).
- **ink-90 `#030302e6`**, **ink-75 `#030302bf`**, **ink-65 `#030302a6`**, **ink-50 `#03030280`** — the same near-black at decreasing opacity for body, secondary and tertiary text (`--color-black-500` is the 50% step).
- **primary `#030302`** with **on-primary `#ffffff`** — every main button; hover drops the fill to 75% (`rgba(3, 3, 2, 0.75)`).
- **hairline `#0000001f`** — 12% black borders; also `#03030217` and `#00000017`.

Further measured fills: `#e4e4e7`, `#f5f5f7`, `#fff3e7`, `#f4f4f5`, `#efefef`, `#dbedfe`, `#ffedd4`, `#f0f0f0`, and an `#ff4500` orange used in a community card. Small text accents: `#ff8904` orange, `#0087ff` blue, `#dfb720` gold. Nav links rest at `rgba(3, 3, 2, 0.35)` and darken to `#030302` on hover.

## Typography

The page loads **UntitledSansFont** (400, 500), **UntitledSerifFont** (400 and 400 italic) and **InterFont** (400, 500), each with a generated "Fallback" face. By characters: Untitled Sans 2,473, apple-system 1,497 (text inside product mock-ups), Untitled Serif 1,386. The stylesheet declares `--font-untitled-sans` and a `--font-sans` stack of Untitled Sans, apple-system, Inter, BlinkMacSystemFont, Helvetica Neue, Helvetica, Arial. Untitled Sans and Untitled Serif are commercial; substitute Inter for the sans and a neutral text serif such as Georgia (already in the declared fallback) for the serif.

- **display** — Untitled Serif 66px / 400 / 66px, -1.98px (-3%). The h1.
- **heading** — Untitled Serif 54px / 400 / 59.4px, -1.08px. "How people use Craft", "Make it unmistakably yours", "Stay in the loop".
- **subheading** — Untitled Serif 46px / 400 / 56.12px, -1.38px. "Craft isn't just for one thing, it's for your things."
- **body** — apple-system/Inter 15px / 400 / 22.5px, -1.65% tracking. Text inside product documents.
- **button** — Untitled Sans 16px / 500 / 24px.
- **nav** — Untitled Sans 16px / 400 / 24px.

Pull quotes measured 32px / 400 serif; feature titles 36px and 28px serif. Other sizes: 16px (most-read), 14px, 18px, 24px, 12px, 13px, 30px, 20px. Weights: 400, 500, 600, 700. The marketing body (body element) is Untitled Sans 16px / 400 / 22.4px with -0.32px tracking. Serif headings are never bold — the elegance comes from size and tight spacing.

## Layout

At 1280px the page is 10,965px tall. Measured bands: a 1,918px canvas band (x=100–1180) with the hero, feature icons and the people row; a 322px media band; a 160px `#f3f0ee` strip; a 4,382px canvas band (x=132–1132, up to four columns) of pastel feature panels, quotes and awards; a 148px media strip (Spaces / Folders & Tags / Collections); a 1,088px band (x=144–1208) with the customisation carousel; another media strip; and a 2,672px band (x=60–1220, up to five columns) with community, pricing, CTA and footer.

Spacing is roomy: gaps 8px, 16px, 10px, 24px, 4px, 60px, 40px, 32px, with 120px and 80px between large blocks; paddings 8px, 24px, 4px, 16px, 32px, 48px, 60px and 120px. Panels are wide, rounded and centred, each split into a short text column and a product composition.

## Elevation & Depth

Craft uses soft, deep, multi-layer shadows:

- `rgba(0, 0, 0, 0.01) 0px 50px 40px 0px, rgba(0, 0, 0, 0.02) 0px 50px 40px 0px, rgba(0, 0, 0, 0.05) 0px 20px 40px 0px, rgba(0, 0, 0, 0.08) 0px 3px 10px 0px` — product cards and windows (38 elements).
- `… rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px` — smaller raised elements (16).
- `… rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px` — buttons.
- `… rgba(0, 0, 0, 0.1) 0px 12px 12px 2px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px` — the floating header bar.

The leading transparent layers are Tailwind's ring placeholders. The header floats as a translucent white (`#ffffffe6`) rounded bar. The hero adds depth with painted clouds and torn-paper edges.

## Shapes

Measured radii: `24px` on 83 elements (panels, cards, the footer and the App Store button), `14px` on 52 (chips and small cards), full pill on 26 (measured as `3.35544e+07px` — header buttons and nav items), `4px` on 26, `32px` on 13, `16px` on 11, `8px`, `12px`, `20px`, `26px` (the 52px-tall header bar), `18px`, and `12px 12px 0px 0px` on one tab. Everything is soft; there are no square corners on visible surfaces.

## Components

- **button-primary** — "Try Craft Free": `#030302`, white Untitled Sans 16px/500, `8px 14px`, 36px tall, pill, small two-layer shadow. Hover 75% opacity fill.
- **button-secondary** — "Download on the App Store": `#030302`, `16px 32px`, 56px tall, 24px radius.
- **button-get-started** — "Get Started": `#030302`, `16px 32px`, 48px, pill.
- **template chip** — `#9bd8a9`, `#030302` 14px/500, `12px 16px`, 44px, 14px radius.
- **nav** — a floating 52px rounded bar (26px radius) with a soft drop shadow; links at 35% ink darken on hover.
- **card** — product card, 24px radius, the four-layer soft shadow.
- **pull quote** — italic serif 32px with an avatar and name.
- **footer** — black `#030302`, 24px radius, `0px 24px` padding, uppercase Untitled Sans 14px/500 headings with 0.14px tracking, white links.

## Design System Architecture

No public Craft design system or brand guideline was found: https://www.craft.do/press returned HTTP 404 and the home page links no brand or design resources.

The shipped CSS is Tailwind v4 with a shadcn-style semantic layer (189 root variables): `--card`, `--card-foreground`, `--popover`, `--primary-foreground`, `--accent-foreground`, `--muted`, `--border`, `--ring`, and `--sidebar-*` roles, all mapped onto a custom near-black ramp (`--color-black-900: #030302`, `--color-black-500: #03030280`, `--color-black-100`, `--color-black-50`) and muted named accents (`--color-orange-4: #b25620`, `--color-green-4: #3f8850`, `--color-red-4: #bb433a`, `--color-blue-4: #427e8a`). Type and radius scales follow Tailwind (`--text-2xl: 1.5rem`, `--text-7xl: 4.5rem`, `--radius-4xl: 2rem`, `--leading-normal: 1.5`), and fonts are wired through `--font-untitled-sans` and `--font-sans`.

## Do's and Don'ts

**Do**
- Use the warm paper canvas `#fcf9f7` and white product cards.
- Set headlines in a regular-weight serif with -2% to -3% tracking; add an italic word for voice.
- Keep buttons near-black `#030302`, pill-shaped or 24px-rounded; fade to 75% on hover.
- Put colour in large pastel panels (periwinkle, mint, butter, peach) with 24px corners.
- Use deep, soft multi-layer shadows on floating product windows.
- Feature real people and their quotes.

**Don't**
- Don't bold the serif headlines.
- Don't introduce a saturated brand colour for buttons; the CTA is near-black.
- Don't use pure black `#000000` text; ink is `#030302` and its alpha steps.
- Don't use square corners.
- Don't use harsh single-layer shadows.

## Responsive Behavior

The mobile pass at 390px recorded: five visible header links and a toggle labelled "Product"; a 52px header area with 26px radius; h1 at Untitled Serif 48px / 400 / 48px, -1.92px; h2 at 38px / 400 / 37.62px; body unchanged at 15px / 22.5px; the CTA became "Download" at 16px/500, `8px 12px`, 46px tall, 16px radius. Bands ran from x=16–374 and x=36–354: canvas, a 1,015px media hero, a 952px `#f9f6f4` band, media, a 52px `#f3f0ee` strip. The most-read mobile size became 24px. Breakpoints were not measured.

## Iteration Guide

1. Start with `#fcf9f7`, a floating white rounded header (52px, 26px radius) and a black "Try Craft Free" pill.
2. Set the h1 in a serif at 66px/400 with -1.98px tracking; UI in Untitled Sans (or Inter) 16px.
3. Wrap each feature in a 24px-rounded pastel panel with a white product card and the soft four-layer shadow.
4. Use `#030302` at 90/75/65/50% alpha for the text hierarchy.
5. Add italic-serif pull quotes with portraits between sections.
6. End with a mint CTA band and a black 24px-rounded footer with uppercase headings.
