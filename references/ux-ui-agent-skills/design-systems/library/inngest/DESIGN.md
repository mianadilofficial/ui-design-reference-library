---
version: alpha
name: Inngest
category: "Developer Tools & IDEs"
description: "Inngest's durable-execution site: a #1c1c1c charcoal canvas, white ink with #b3b3b3 secondary text, a salmon #f65c4f primary button with 6px corners and uppercase WhyteMono 12px labels, uppercase Whyte 72px display type, CircularXX 18px body copy and an electric-blue #013cf6 feature band."
colors:
  canvas: "#1c1c1c"
  ink: "#ffffff"
  primary: "#f65c4f"
  on-primary: "#ffffff"
  surface-blue: "#013cf6"
  surface-raised: "#212121"
  ink-muted: "#b3b3b3"
  ink-subtle: "#9b9b9b"
  ink-70: "#ffffffb3"
  ink-soft-white: "#f6f6f6"
  ink-inverse: "#000000"
  border-default: "#e5e7eb"
  announcement-bg: "#f76246"
  card-bg: "#1c1c1cd9"
typography:
  display:
    fontFamily: WhyteV1, Whyte, Inter, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 72px
    fontWeight: 400
    lineHeight: 68.4px
    letterSpacing: "-1.44px"
    textTransform: uppercase
  display-mobile:
    fontFamily: WhyteV1, Whyte, Inter, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 44px
    fontWeight: 400
    lineHeight: 41.8px
    letterSpacing: "-0.88px"
    textTransform: uppercase
  heading:
    fontFamily: WhyteV1, Whyte, Inter, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 58.88px
    fontWeight: 400
    lineHeight: 64.768px
    letterSpacing: "-2.0608px"
  subheading:
    fontFamily: WhyteV1, Whyte, Inter, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 38.4px
    fontWeight: 400
    lineHeight: 42.24px
    letterSpacing: "-0.768px"
  body:
    fontFamily: CircularXX, Inter, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: "-0.18px"
  button:
    fontFamily: WhyteMonoV1, WhyteMono, Inter, -apple-system, "system-ui", "Segoe UI", Roboto, monospace
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
    letterSpacing: 0.8px
    textTransform: uppercase
  nav:
    fontFamily: WhyteV1, Whyte, Inter, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: CircularXX, Inter, -apple-system, "system-ui", "Segoe UI", Roboto
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 8px
  md: 9.03px
  lg: 10px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5.76px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 42px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-inverse}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 42px
  status-pill:
    backgroundColor: "{colors.surface-raised}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 16px 20px
  link:
    textColor: "{colors.ink-soft-white}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  announcement-bar:
    backgroundColor: "{colors.announcement-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 6px 24px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-soft-white}"
    rounded: "{rounded.lg}"
  footer:
    textColor: "{colors.ink-muted}"
---

# Inngest

## Overview

Inngest sells durable execution for workflows and AI agents, and inngest.com is a dark, engineered, slightly brutalist page: charcoal #1c1c1c everywhere, white uppercase display type, monospace button labels and dense screenshots of the Inngest dashboard. A thin salmon announcement bar (#f76246, "Watch our CodeTV episode on YouTube!") sits above a transparent header with uppercase menu items (PLATFORM, USE CASES, …). The hero sets "MAKE EVERY BACKEND UNBREAKABLE." in Whyte at 72px, weight 400, uppercase, with a 68.4px line height and -1.44px tracking — the last word set in a lighter treatment — next to a code editor showing step functions. Two buttons follow the intro paragraph: a white "START FREE"-style secondary and the salmon #f65c4f "START FREE" primary.

The page then runs through a customer logo strip (Replit, cubic, ElevenLabs, Cohere, SoundCloud), "The DX in durable execution" with a full dashboard screenshot and video controls, an electric-blue #013cf6 band ("Everything queues can't do; everything you don't want to do.") whose right edge dissolves into pixel blocks, four alternating feature rows (Know what happened, Know what to run, Know what's safe, Know what works) each with a dark product screenshot, a customer story with a portrait, a six-cell "Make any code durable" grid, a diagram section, an observability chart, a compliance grid ("Stuff your CISO needs to see"), framework quickstarts and a multi-column footer with an "All systems operational" status pill.

The voice is punchy and developer-wry ("Stuff your CISO needs to see", "It doesn't have to be hard"). Imagery is product UI, code and charts, with one pixel-art motif on the blue band.

## Colors

- **Canvas #1c1c1c** — the dominant page color, declared as `--color-v1-bg-canvas-base` (28 28 28). The body element itself is #0c0a09, but nearly all visible area is painted #1c1c1c.
- **Ink #ffffff** — the most-read text color; headlines and primary copy.
- **Ink-muted #b3b3b3** — secondary paragraphs and the footer; **ink-subtle #9b9b9b** for tertiary text; **ink-70 #ffffffb3** for 70% white captions; **ink-soft-white #f6f6f6** (`--color-v1-text-basis`) for links and card text.
- **Primary #f65c4f** — the salmon "START FREE" fill, declared as `--color-v1-salmon-200` (246 92 79). Salmon also colors eyebrow labels in text.
- **Announcement-bg #f76246** — the slightly different salmon of the top bar.
- **Surface-blue #013cf6** — the electric-blue feature band, the third-largest painted area.
- **Surface-raised #212121** — status pill and raised surfaces; **card-bg #1c1c1cd9** — 85% charcoal cards over gradients.
- **Border-default #e5e7eb** — the default border color on the few bordered elements.
- Green #66bd8b (`--color-matcha-400`, completed-status text) and #4afa7d appear in dashboard screenshots and status states, not as brand fills.

## Typography

Six faces are loaded:

- **Whyte / WhyteV1** (400; Whyte also 300) — headlines and navigation. Display 72px / 68.4px uppercase with -1.44px tracking; heading 58.88px / 64.768px with -2.0608px tracking (sentence case: "The DX in durable execution"); subheading 38.4px / 42.24px with -0.768px ("Know what happened"); nav 14px / 20px.
- **Whyte Inktrap** — used sparingly for accent words.
- **WhyteMono / WhyteMonoV1** — all button labels: 12px / 18px, weight 600, uppercase, 0.8px tracking. Small uppercase mono labels also appear at 11.52px and 16px with 0.8px tracking.
- **CircularXX** — body copy, the most-used family by characters: 18px / 27px with -0.18px tracking for body, 16px / 24px for links and smaller text.
- **CircularXXMono** — code samples.

Headlines stay at weight 400 throughout; hierarchy comes from size, uppercase and tracking rather than boldness. Whyte and CircularXX are licensed faces served by the site; for prototypes use Inter for both roles and a monospace such as JetBrains Mono for WhyteMono labels.

## Layout

At 1280px the content spans from 29px to 1248px. The hero is two-column (headline and buttons left, code panel right); feature rows alternate a narrow text column (about 470px of copy width) with a wide screenshot; the "Make any code durable" grid uses three columns; logo strips and quickstart rows spread wider (maxCardColumns 8). Seven header items are visible on desktop, with dropdown triggers such as "Platform".

Spacing is generous between sections — paddings of 120px and 160px were measured on section blocks — and moderate inside components: gaps of 10px, 32px, 12px and 16px dominate, with 48px and 64px between larger groups. The spacing tokens step 1, 4, 5.76, 6, 8, 10, 12, 14, 16 and 20px.

## Elevation & Depth

Depth comes from layered charcoal and gradients, not drop shadows. Cards use an 85% #1c1c1c fill over a diagonal gradient (from transparent to #212121) and a 2px #1c1c1c ring shadow that separates them from neighbors. White buttons carry a 2px white inset ring. Completed-state rows in screenshots use a 2px inset green left bar and a 40% green 1px inset ring. One floating element uses a 45% black 0px 4px 18px shadow with a 40% white 1px ring. The CSS also declares `--v1-shadow-card-hover`, a large multi-layer dark shadow for card hover.

## Shapes

Corners are small and consistent: 6px on every button and the status pill, 10px on cards and screenshots, 8px on smaller panels, 9.03px on scaled mock elements, and 9999px / 999px pills for badges and tags. The blue band's pixel-block edge is the one decorative shape motif, echoed by square pixel markers elsewhere.

## Components

- **Primary button** — #f65c4f fill, white WhyteMono 12px weight 600 uppercase with 0.8px tracking, 6px radius, 0px 20px padding, 42px tall ("START FREE", "START FREE IN CLOUD").
- **Secondary button** — white fill, black label, same type and shape, with a 2px white inset ring ("VIEW CASE STUDY"); a 32px-tall version sits in the header.
- **Announcement bar** — #f76246, white Whyte 14px, 6px 24px padding, 32px tall; hover lowers opacity to 0.9.
- **Feature row** — salmon uppercase eyebrow, Whyte 38.4px title, CircularXX 18px body in white, and a "SEE DOCS →" mono link.
- **Dashboard card** — 10px radius screenshot on a #1c1c1cd9 card with gradient.
- **Grid cell** — icon, title and short muted description with a "LEARN MORE →" mono link.
- **Status pill** — #212121 fill, #b3b3b3 CircularXX 16px, 6px radius, 16px 20px padding ("All systems operational").
- **Footer** — #b3b3b3 link columns (Platform, Use cases, Resources, Company, Community).

## Design System Architecture

Inngest publishes no public brand guidelines or marketing design system: https://www.inngest.com/brand returns 404, and the press kit at https://www.inngest.com/press offers only a line inviting use of its assets. The shipped CSS shows a two-layer token system. Base ramps use food- and weather-named colors stored as RGB triplets — `--color-salmon-*`, `--color-matcha-*`, `--color-ruby-*`, `--color-honey-*`, `--color-breeze-*`, `--color-carbon-*`, `--color-purplehaze-*`, `--color-blush-*` — and semantic aliases point at them (`--color-foreground-link`, `--color-background-btn-primary`, `--color-foreground-code-keyword`, `--color-tertiary-moderate`). A separate `--color-v1-*` layer (`--color-v1-bg-canvas-base`, `--color-v1-text-basis`, `--color-v1-salmon-200`, `--v1-shadow-card-hover`) drives this marketing page.

## Do's and Don'ts

**Do**
- Keep the page charcoal #1c1c1c with white headlines and #b3b3b3 body text.
- Use salmon #f65c4f for the primary action and small eyebrow labels only.
- Set every button label in uppercase monospace at 12px with 0.8px tracking, on a 6px-radius rectangle.
- Use uppercase Whyte 400 for hero statements; sentence-case Whyte for section titles.
- Use one strong color field (the #013cf6 blue band) per page as a punctuation mark.

**Don't**
- Don't use pills for primary buttons; buttons are 6px rectangles.
- Don't bold the headlines; measured headline weight is 400.
- Don't introduce light sections; the measured page has none.
- Don't treat the green status colors as brand accents.

## Responsive Behavior

The extractor's mobile pass at 390px measured: the h1 at 44px / 41.8px with -0.88px tracking (uppercase, weight 400); the h2 at 32px / 35.2px with -1.12px; body text at 16px / 24px with -0.16px; the primary button unchanged (12px uppercase mono, 42px tall, 0px 20px padding, 6px radius). One header item remains visible with a menu toggle labelled "Open menu"; card grids measured three columns at most. Content spans 10px to 380px in the first sections and 24px to 366px further down. The stylesheet declares min-width queries at 380px, 640px, 768px, 816px, 820px, 880px, 920px, 933px, 1024px (most used), 1100px, 1120px, 1272px, 1280px, 1350px, 1500px, 1536px and 1900px, plus max-width 520px and 639px. Other behaviour was not measured.

## Iteration Guide

1. Paint the page #1c1c1c and set text in #ffffff and #b3b3b3.
2. Load Whyte (display), CircularXX (body) and WhyteMono (labels), or Inter plus a mono as stand-ins.
3. Build the hero in 72px uppercase Whyte 400 with -1.44px tracking, beside a code panel.
4. Make buttons 42px tall, 6px radius, uppercase mono 12px: salmon primary, white secondary.
5. Alternate feature rows of text and dark dashboard screenshots on 10px-radius cards.
6. Add one #013cf6 band with a pixel-block edge as the page's color moment.
7. Verify the 44px mobile headline and 16px mobile body.
