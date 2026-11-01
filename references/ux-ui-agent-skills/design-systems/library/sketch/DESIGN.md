---
version: alpha
name: Sketch
category: "Design & Creative Tools"
description: "Sketch's home page pairs Reckless serif headlines (76px/500, -1.5px tracking) with InterVariable body copy (20px/500 in #5c5c5c) on a light grey #f5f5f5 and white canvas, near-black #151515 pill-like buttons with 24px radius and a carved inset shadow, 20px-radius feature cards in white and black, and soft pink-lilac gradient washes."
colors:
  canvas: "#f5f5f5"
  page-largest: "#ffffff"
  ink: "#212123"
  primary: "#151515"
  on-primary: "#ffffff"
  surface-soft: "#fafafa"
  ink-muted: "#5c5c5c"
  ink-a64: "#000000a3"
  ink-a70: "#000000b3"
  ink-a32: "#00000052"
  hairline: "#0000001a"
  black: "#000000"
  field: "#f9f9f9"
  peach-wash: "#ff784333"
typography:
  display:
    fontFamily: Reckless, "serif"
    fontSize: 76px
    fontWeight: 500
    lineHeight: 76px
    letterSpacing: "-1.5px"
  display-mobile:
    fontFamily: Reckless, "serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
  card-title:
    fontFamily: InterVariable, Inter, system-ui, -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 600
    lineHeight: 24px
  subheading:
    fontFamily: InterVariable, Inter, system-ui, -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 17px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: InterVariable, Inter, system-ui, -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
  button:
    fontFamily: InterVariable, Inter, system-ui, -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: InterVariable, Inter, system-ui, -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  input:
    fontFamily: InterVariable, Inter, system-ui, -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 20px
  2xl: 24px
  3xl: 26px
  4xl: 28px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 11px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 11px 16px 12px 24px
    height: 47px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 1px 1px 0px inset, rgba(255, 255, 255, 0.5) 0px 1px 4px 0px inset, rgba(0, 0, 0, 0.94) 0px -2px 4px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 4px 0px
  button-primary-hover:
    boxShadow: rgba(0, 0, 0, 0.05) 0px 1px 1px 0px inset, rgba(255, 255, 255, 0.5) 0px 1px 4px 0px inset, rgba(0, 0, 0, 0.94) 0px -2px 4px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 4px 0px
  nav:
    textColor: "{colors.black}"
    typography: "{typography.nav}"
    padding: 0px 32px
  text-input:
    backgroundColor: "{colors.field}"
    textColor: "{colors.black}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 12px 14px
    height: 48px
    boxShadow: rgb(230, 230, 230) 0px 0px 0px 1px, rgba(0, 0, 0, 0.04) 0px 1px 2px 0px inset
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xl}"
    padding: 32px 32px 0px
  card-dark:
    backgroundColor: "{colors.black}"
    textColor: "{colors.on-primary}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xl}"
    padding: 32px 32px 0px
  footer:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.ink}"
---

# Sketch

## Overview

Sketch is a Mac design tool, and its home page speaks directly to designers: "Designers, welcome home." The measured page (sketch.com, 1280px wide, 8250px tall) is light and calm, with a light grey body `#f5f5f5`, white cards and a soft pink-to-lilac wash behind the hero. A slim header carries the Sketch diamond icon and four menus (Product, Explore, Pricing, Support) at left and "Sign In" plus a near-black "Get started" button at right.

The hero is split: a big serif headline on the left and, on the right, a short paragraph ("Sketch is a toolkit made by designers, for designers, that puts the focus on you and your work."), a dark "Get started for free" button and a small system-requirements note. Under it sits a "Now in beta: Component variants and sections" announcement card, then a large screenshot of the Sketch Mac app editing a game UI, and a testimonial carousel with an Apple Design Award badge.

The body is organised in three chapters, each introduced by a small pill label (DESIGN, PROTOTYPE, COLLABORATE), a serif headline ("Design without distractions", "Test your ideas faster", "Take your work further"), a paragraph and a dark link button ("Designing in Sketch"), followed by a bento grid of white, black and pastel feature cards with product vignettes. A "Made by a different kind of company" card, a "Discover a better way to design" call to action with the Sketch diamond, a logo strip and a newsletter footer close the page.

The voice is warm, designer-to-designer and lightly opinionated: "Zero distractions", "Not for PMs, developers or clients", "No shady pricing".

## Colors

Measured on the rendered page (`web/data/extracted/sketch.json`). The site declares only 3 root custom properties, none of them brand colours, so names are descriptive.

- **canvas `#f5f5f5`** — the body background and the lower half of the page.
- **page-largest `#ffffff`** — the largest painted area (3149): white cards, the testimonial and announcement cards.
- **ink `#212123`** — the main text and headline colour (1923 characters).
- **ink-muted `#5c5c5c`** — paragraph copy (1098 characters), including the 20px hero paragraph.
- **primary `#151515`** — the fill of every main button ("Get started", "Get started for free", "Designing in Sketch"). The hover probe recorded the same fill with a lighter outer shadow.
- **on-primary `#ffffff`** — button labels and text on dark cards.
- **black `#000000`** — the dark bento cards (602 by area) and the header text.
- **ink-a64 `#000000a3`**, **ink-a70 `#000000b3`**, **ink-a32 `#00000052`** — alpha blacks for secondary and tertiary text on light surfaces.
- **hairline `#0000001a`** — 10% black borders (6 uses).
- **surface-soft `#fafafa`** — the footer area.
- **field `#f9f9f9`** — newsletter input fill.
- **peach-wash `#ff784333`** — a 20% orange tint painted over 749 units of area, part of the warm pastel gradients behind cards.

The hero background was sampled by the extractor as pink-lilac bands (`#e1d0dd`, `#e6dbe3`, `#ebe4e8`, `#f1edee`) fading into the grey canvas. A large blush glow `rgb(200, 171, 173) 0px 40px 200px 0px` sits behind the app screenshot.

## Typography

- **Reckless** (Medium 500) — a serif for display headlines, served from `/webfonts/reckless/Reckless-Medium.woff2`. 117 measured characters: the hero and the three chapter headlines.
- **InterVariable** (100–900) — everything else, 4600 characters.

The site also serves ABC Marfa, ABC Marfa Mono and Caveat font files; none was measured in rendered text on the home page.

Measured roles:

- **display** — Reckless 76px / 500 / 76px, -1.5px tracking: "Designers, welcome home." and chapter headlines.
- A 44px Reckless size with -1px tracking (66 characters) is used for the closing "Discover a better way to design" and "Made by a different kind of company".
- **card-title** — InterVariable 22px / 600 / 24px: bento card titles ("Zero to done", "Create with focus (or friends)").
- **subheading** — 17px / 600 / 24px: the announcement title.
- **body** — 20px / 500 / 28px in `#5c5c5c`: lead paragraphs. 16px (2047 characters) is the most common size, then 20px (1498) and 15px (398).
- **button** — 16px / 600 / 24px.
- **nav** — 16px / 400 / 16px.

Weights: 400 (2760 characters), 500 (1393), 600 (555). The serif carries personality; Inter at medium weight keeps paragraphs soft.

**Substitutes:** Reckless is a commercial serif served by the site; its declared fallback is the generic `serif`. Inter is open source; the declared fallbacks are system-ui and Helvetica.

## Layout

The hero band measured content from x=40 to x=1240 (40px margins); the chapter sections measured x=72 to x=1208 with two columns for the headline row (headline left, paragraph and button right). Bento grids mix narrow (282px) and wide (588px) cards, all 512px tall in the first row; the extractor counted up to 6 card columns on the page and 4 in the lower band. The CSS declares `--main-nav-height: 4rem` (64px).

Spacing: cards use 32px padding (47 uses), with 52px and 24px elsewhere; gaps of 24px between cards and 88px/96px between chapters. The density is moderate: each card has a title, one or two sentences and a large visual.

## Elevation & Depth

- **Button** — a carved, glossy treatment: `rgba(0, 0, 0, 0.05) 0px 1px 1px 0px inset, rgba(255, 255, 255, 0.5) 0px 1px 4px 0px inset, rgba(0, 0, 0, 0.94) 0px -2px 4px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 4px 0px`. On hover the outer shadow drops to `rgba(0, 0, 0, 0.05)`, so the button settles rather than lifts.
- **Small UI** — `rgba(0, 0, 0, 0.2) 0px 1px 3px 0px` (6 uses) and `rgba(0, 0, 0, 0.1) 0px 2px 4px 0px` (4 uses).
- **Floating panel** — `rgba(0, 0, 0, 0.08) 0px 0px 4px 0px, rgba(0, 0, 0, 0.02) 0px 4px 8px 0px, rgba(0, 0, 0, 0.08) 0px 1px 2px 0px`.
- **Input** — a 1px `rgb(230, 230, 230)` ring plus a faint inner shadow.
- **Hero glow** — `rgb(200, 171, 173) 0px 40px 200px 0px` behind the app screenshot.

Cards themselves sit flat on the canvas; depth comes from colour (white, black, pastel) and the product imagery inside.

## Shapes

- **20px (xl)** — the dominant card radius (26 uses).
- **24px (2xl)** — buttons (5 uses); with a 47px height this reads almost as a pill.
- **9999px** — chapter label pills (DESIGN, PROTOTYPE, COLLABORATE) and small badges (7 uses).
- **16px** — the newsletter input; **8px** and **12px** — small UI; **26px 26px 0px 0px** — one top-rounded panel; **50%** — avatars and round icon buttons.

## Components

**Primary button** — `#151515`, white 16px/600 InterVariable label, 24px radius, asymmetric `11px 16px 12px 24px` padding (room for a trailing arrow), 47px tall, with the carved inset shadow. Every main action on the page uses it.

**Chapter header** — a small pill label, a 76px Reckless headline on the left, and a paragraph plus the dark button on the right.

**Bento card** — white or black (or a pastel gradient), 20px radius, `32px 32px 0px` padding so the product vignette bleeds off the bottom edge, a 22px/600 title and a short description; some cards carry a round arrow button at the bottom right.

**Announcement card** — white, with an app icon, a 17px/600 title and a short description with a "Try it today" link.

**Testimonial** — white card with a large quotation mark, a quote and the author with an Apple Design Award badge; carousel arrows below.

**Newsletter input** — `#f9f9f9`, 16px radius, `12px 14px` padding, 48px tall, with a grey "Sign up" button and a consent checkbox.

**Footer** — light, with four link columns (Product, Explore, Support, Company) and social icons.

## Design System Architecture

No public Sketch UI design system or token package was found. Sketch's about/press page (https://www.sketch.com/press/) offers a downloadable media kit ("Logo and Guidelines kit", "Icons kit", "Screenshots kit", "Complete media kit") and a press contact; the kit contents were not opened, so no logo or colour rules from it are used here.

The shipped page shows a hand-built system: BEM-style class names such as `main-nav__link__icon`, self-hosted fonts under `/webfonts/` (Reckless, InterVariable, ABC Marfa, Caveat), and only three root variables (`--main-nav-height: 4rem`, `--rotationAmount: 3deg`, and a `--swiper-theme-color` from the carousel library). Colours and shadows are written directly into component styles. The de-facto system is: two typefaces (serif display, Inter UI), a neutral grey/white/black palette with alpha-black text tiers, one dark button style, and 20px cards.

## Do's and Don'ts

**Do**
- Use Reckless Medium for big, warm headlines with -1.5px tracking at 76px.
- Use InterVariable at 500 for paragraphs in `#5c5c5c` and 600 for titles.
- Keep a single dark `#151515` button style with the carved inset shadow.
- Build sections as bento grids of 20px-radius cards in white, black and soft pastels.
- Use pink-lilac washes and a blush glow behind hero imagery.

**Don't**
- Don't introduce a saturated brand colour for actions; every measured CTA is near-black.
- Don't use the browser default link blue; it is not part of the design.
- Don't bold the serif beyond its medium weight.
- Don't add heavy drop shadows to cards.
- Don't crowd cards — one title, one or two sentences and a visual.

## Responsive Behavior

From the extractor's 390px pass: the hero headline measured Reckless 48px / 500 with a 48px line height (76px on desktop); the hero paragraph measured 17px / 24px (20px / 28px on desktop). The "Get started for free" button kept its 219px × 47px size and 24px radius. The header measured 64px tall with `0px 16px` padding, a translucent white `#ffffffcc` background and a `rgba(0, 0, 0, 0.08) 0px 0px 0px 1px` ring. The extractor recorded a visible "Menu" toggle and 2 header links. Content measured from x=36 to x=354. Breakpoint widths were not measured.

## Iteration Guide

1. Light grey `#f5f5f5` canvas with white cards; text `#212123`, paragraphs `#5c5c5c`.
2. Headlines in Reckless 76px/500 with -1.5px tracking; everything else InterVariable.
3. One button style: `#151515`, 24px radius, carved inset shadow, 47px tall.
4. Chapter = pill label + serif headline + paragraph + dark button, then a 20px-radius bento grid.
5. Add pastel gradients only as backgrounds; keep UI chrome neutral.
6. Run `node web/scripts/verify-designs.mjs --slug=sketch` after changes.
