---
version: alpha
name: Evernote
category: "Productivity & SaaS"
description: "Evernote's marketing home: warm paper #f9f6f2 canvas with sand #f4eee5 panels, near-black #141414 buttons that turn Evernote green #00a82d on hover, a lime #94e130 AI button on a #262626 band, Figtree 600 headlines at 72px with -3.6px tracking, Inter/Figtree body, 5px button and 10px card corners."
colors:
  canvas: "#f9f6f2"
  surface-sand: "#f4eee5"
  surface-card: "#ffffff"
  surface-dark: "#262626"
  ink: "#141414"
  ink-secondary: "#262626"
  ink-tertiary: "#4e4d4c"
  ink-black: "#000000"
  ink-muted: "#737373"
  primary: "#141414"
  on-primary: "#ffffff"
  primary-hover: "#00a82d"
  accent-lime: "#94e130"
  hairline: "#a1a1a1"
  stroke-cards: "#e7e7e7"
typography:
  display:
    fontFamily: Figtree, "Figtree Fallback"
    fontSize: 72px
    fontWeight: 600
    lineHeight: 72px
    letterSpacing: "-3.6px"
  display-mobile:
    fontFamily: Figtree, "Figtree Fallback"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 36px
    letterSpacing: "-1.8px"
  heading:
    fontFamily: Figtree, "Figtree Fallback"
    fontSize: 50px
    fontWeight: 600
    lineHeight: 55px
    letterSpacing: "-2.5px"
  subheading:
    fontFamily: Figtree, "Figtree Fallback"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 44px
    letterSpacing: "-1.2px"
  body:
    fontFamily: Figtree, "Figtree Fallback"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: 0.18px
  button:
    fontFamily: Figtree, "Figtree Fallback"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 26px
  nav:
    fontFamily: Figtree, "Figtree Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-dominant:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: 400
  button-secondary:
    fontFamily: Figtree, "Figtree Fallback"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20.8px
rounded:
  xs: 5px
  sm: 10px
  md: 16px
  lg: 52px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 40px
    height: 59px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 10px 28px
    height: 46px
  button-outline:
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 10px 28px
    height: 46px
  button-lime:
    backgroundColor: "{colors.accent-lime}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 40px
    height: 59px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    height: 81px
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 32px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 64px 20px
---

# Evernote

## Overview

The measured page is `https://evernote.com/`, titled "Best Note Taking App - Organize Your Notes with Evernote". It is Evernote's product marketing home, built around the line "Your second brain" and the subhead "Remember everything and tackle any project with your notes, tasks, and schedule all in one place."

The look is warm, calm and paper-like. The page background is an off-white with a hint of beige (`#f9f6f2`); large rounded panels in a deeper sand (`#f4eee5`) hold each feature section. Type is a single geometric sans, Figtree, set heavy (600) and tightly tracked at display sizes, with body copy in Figtree and Inter. The action colour is not green but near-black: every "Get Evernote free", "Start for free" and "Try it for free" button is `#141414`, and turns Evernote green (`#00a82d`) on hover — the brand colour appears as the reward for intent. One dark band (`#262626`) introduces "Your productivity, supercharged" (Evernote v11 AI features) with blurred green and violet gradient shapes and a lime `#94e130` "Discover more" button.

Imagery is product UI: floating note, calendar and task cards ("Tokyo conference plan", "Team Weekly Sync", "Pizza Recipe") collaged over photographs of people working. Small coloured labels sit above each section heading — "Organize", "Recall", "Share", "Capture" — in yellow, orange, pink and lime chips. The voice is short and practical: "Bring order to everything you do", "Find what you need, fast", "Want to give AI a try?", "Save anything, in any form", "Tap into your second brain today."

## Colors

The stylesheet declares semantic colours as custom properties; the measured values match them.

- **canvas `#f9f6f2`** — page, header and footer background (`--color-bg-primary`). Largest area and 35% of the capture.
- **surface-sand `#f4eee5`** — rounded feature panels (`--color-bg-secondary`); 29% of the capture.
- **surface-card `#ffffff`** — white cards in the feature carousel and download cards.
- **surface-dark `#262626`** — the AI band background; the same value is `--color-text-secondary` (`ink-secondary`).
- **ink `#141414`** — headings and body (`--color-text-primary`), the most-read text colour.
- **ink-tertiary `#4e4d4c`** — secondary paragraphs (`--color-text-tertiary`), second most-read.
- **ink-black `#000000`**, **ink-muted `#737373`** — nav icons and minor text.
- **primary `#141414` / on-primary `#ffffff`** — button fill and label.
- **primary-hover `#00a82d`** — Evernote green; the measured hover fill of "Start for free" and "Get Evernote free".
- **accent-lime `#94e130`** — the "Discover more" button on the dark AI band.
- **hairline `#a1a1a1`** — outlined-button border (`--color-stroke-buttons`).
- **stroke-cards `#e7e7e7`** — card borders (`--color-stroke-cards`).

Small label chips use `#fad0f6` pink, `#ffa24d` orange and `#ffd919` yellow (measured backgrounds). Near-white text `#fdfcfc` is used on the dark band.

## Typography

Two families are loaded: **Figtree** (400, 500, 600) and **Inter** (400, 600), each with a metric-matched fallback face ("Figtree Fallback", "Inter Fallback"). Inter carries slightly more characters (1,771) than Figtree (1,588) because the large footer and some UI are set in Inter; all headings, buttons and hero copy are Figtree. Both are free Google-hosted families, so no substitute is needed.

- **display** — Figtree 72px / 600 / 72px, letter-spacing -3.6px (-5%). "Your second brain".
- **heading** — Figtree 50px / 600 / 55px, -2.5px. Section h2s such as "Make the most of your ideas—and your time".
- **subheading** — Figtree 40px / 600 / 44px, -1.2px. "Tap into your second brain today".
- **body** — Figtree 18px / 400 / 28.8px, +0.18px tracking. Hero and section paragraphs.
- **body-dominant** — Inter 16px / 400. Footer links and UI copy.
- **button** — Figtree 20px / 600 / 26px (hero button); **button-secondary** — Figtree 16px / 600 / 20.8px.
- **nav** — Figtree 16px / 400 / 24px.

Feature card titles measured 24px / 600 / 26.4px. Other sizes: 20px, 12px, 14px, 13px. Weights: 400, 600, 300, 500. Display tracking tightens as size grows (-5% at 72px and 50px, -3% at 40px), while body tracking opens slightly (+1%).

## Layout

At 1280px the page is 7,549px tall, header 81px. Measured bands: a 1,364px canvas band holding the hero panel and the three-up feature carousel (x=230–1182); a 270px white strip; the 535px AI band over gradient imagery (x=293–988); a 1,497px canvas band with two alternating feature panels (x=141–1139); a 554px sand band "Want to give AI a try?" (x=304–976); and a 3,151px canvas band with two more feature panels, the four-column "Tap into your second brain today" download grid and the footer (x=70–1210).

Each feature is a large sand panel with rounded corners containing a two-column composition — product collage on one side, label chip + heading + paragraph + black button on the other — with sides alternating down the page. Paddings cluster at 8px, 32px, 12px and 80px; card padding is 32px; the footer pads `64px 20px`. Gaps are 16px, 12px, 40px.

## Elevation & Depth

The page is essentially flat. The only measured box-shadow value is a fully transparent Tailwind ring stack (`rgba(0, 0, 0, 0) 0px 0px 0px 0px` ×3) on 24 elements — a placeholder that renders nothing. Depth comes from layered warm neutrals (canvas → sand panel → white card), from overlapping UI cards in the product collages, and from the dark AI band. No custom focus style was measured: keyboard focus showed the browser's default `1px auto` ring.

## Shapes

Measured radii: `5px` on 52 elements (all buttons and small chips), `10px` on 31 (cards), `16px` on 5, `52px` on 4 (the large sand section panels) and `100%` on 2 (round carousel arrows). The rule is small corners for controls, medium for cards, very large for section panels.

## Components

- **button-primary** — "Get Evernote free": `#141414` fill, white Figtree 20px/600, `16px 40px` padding, 59px tall, 5px radius. Hover fill `#00a82d`.
- **button-secondary** — "Start for free" (header) and "Try it for free" (sections): `#141414`, 16px/600, `10px 28px` (or `10px 24px`, 44px), 46px tall, 5px radius; hover `#00a82d`.
- **button-outline** — "Download": transparent with 1px `#a1a1a1` border, `#141414` text, 46px; on hover it inverts to `#141414` fill with white text (measured).
- **button-lime** — "Discover more": `#94e130` fill, `#141414` 20px/600 text, 59px.
- **nav** — canvas background, 81px tall; items "AI Features", "Explore", "Plans", "Enterprise", "What's new", "Log in"; hovered items get a white `#ffffff` background (measured).
- **feature card** — white, 10px radius, 32px padding, an icon, 24px/600 title and a short description; arranged in a horizontal carousel with round arrow buttons.
- **label chip** — small coloured tag ("Organize", "Recall") above section headings.
- **footer** — canvas, `64px 20px`, Inter links in four columns.

## Design System Architecture

No public Evernote design system or brand guideline was found. Evernote's https://evernote.com/about-us and https://evernote.com/press both redirect (308) to https://bendingspoons.com/, the parent company's site, which was not opened.

The shipped page is built with Tailwind CSS: the root carries Tailwind's `--tw-*` ring and shadow variables plus a small set of semantic tokens — `--color-bg-primary` `#F9F6F2`, `--color-bg-secondary` `#F4EEE5`, `--color-text-primary` `#141414`, `--color-text-secondary` `#262626`, `--color-text-tertiary` `#4E4D4C`, `--color-stroke-buttons` `#A1A1A1`, `--color-stroke-cards` `#E7E7E7`. Fonts load with generated "Fallback" faces (a Next.js font-optimisation pattern visible in the names "Figtree Fallback" and "Inter Fallback"). Everything else is utility classes.

## Do's and Don'ts

**Do**
- Use the warm neutrals — `#f9f6f2` page, `#f4eee5` panels, white cards — instead of grey.
- Make buttons near-black `#141414` with 5px corners and let them turn `#00a82d` green on hover.
- Set headlines in Figtree 600 with tight negative tracking (-5% at display sizes).
- Put features in big 52px-radius sand panels with a product collage and a coloured label chip.
- Reserve lime `#94e130` for the one CTA on the dark AI band.

**Don't**
- Don't fill primary buttons with green at rest; green is the hover state.
- Don't add drop shadows; the page uses flat layered colour.
- Don't use pure white as the page background.
- Don't round buttons into pills; measured button radius is 5px.
- Don't set headings in Inter; Inter is for footer and UI copy.

## Responsive Behavior

The mobile pass at 390px recorded: two visible header links and no menu toggle, inside a 135px-tall canvas header containing "Evernote", "Get the app" and "Download"; h1 at Figtree 36px / 600 / 36px with -1.8px tracking; h2 at 32px / 600 / 35.2px; body at 16px / 25.6px; the primary CTA "Get Evernote free" at 16px/600 with `12px 40px` padding, 48px tall, 5px radius. Bands ran from x=20 to x=370 (20px gutters): canvas header, a 1,035px sand hero, canvas, media, and a 264px dark band measured as `#181a1c`. Breakpoints were not measured.

## Iteration Guide

1. Set the canvas to `#f9f6f2` and wrap each section in a `#f4eee5` panel with 52px corners.
2. Load Figtree (400/500/600) and Inter; set the hero at 72px/600 with -3.6px tracking.
3. Make the primary button `#141414`, 5px radius, `16px 40px`, with a `#00a82d` hover.
4. Add label chips (pink `#fad0f6`, orange `#ffa24d`, yellow `#ffd919`, lime) above section headings.
5. Use white 10px-radius cards with 32px padding for feature lists.
6. Give one dark `#262626` band a lime `#94e130` button for the AI story.
7. Pull colours from the `--color-*` variables; keep everything flat.
