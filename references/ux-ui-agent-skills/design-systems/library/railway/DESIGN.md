---
version: alpha
name: Railway
category: "Backend, Database & DevOps"
description: "Railway is a dark #13111c night-sky page: IBM Plex Serif headlines (54px/500, -1.96px), Inter 16px/28px body in #f7f7f8, a muted #553f83 purple 8px-radius Deploy button with a translucent border, 12px-radius #ffffff0d glass cards, JetBrains Mono data tables and teal, navy and plum section tints."
colors:
  canvas: "#13111c"
  ink: "#f7f7f8"
  primary: "#553f83"
  on-primary: "#ffffff"
  surface-teal: "#1f2b2e"
  surface-navy: "#1b2132"
  ink-faint: "#ffffff80"
  ink-muted: "#ffffffa6"
  ink-subtle: "#a1a0ab"
  ink-dim: "#ffffff99"
  hairline: "#ffffff16"
  link: "#ffffffcc"
  button-primary-border: "#ffffff26"
  button-secondary-bg: "#291839"
  button-secondary-text: "#bf93ec"
  card-bg: "#ffffff0d"
  surface-plum: "#251823"
  surface-deep: "#0d0c14"
  nav-hover-bg: "#1c1a28"
  accent-pink: "#f9a8d4"
  accent-glow-border: "#a05fcf"
  ghost-bg: "#00000059"
  ghost-border: "#ffffff40"
typography:
  display:
    fontFamily: "\"IBM Plex Serif\", Georgia, Cambria, \"Times New Roman\", serif, ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 54px
    fontWeight: 500
    lineHeight: 60.48px
    letterSpacing: "-1.96px"
  display-mobile:
    fontFamily: "\"IBM Plex Serif\", Georgia, Cambria, \"Times New Roman\", serif, ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44.8px
    letterSpacing: "-1.96px"
  heading:
    fontFamily: "\"IBM Plex Serif\", Georgia, Cambria, \"Times New Roman\", serif, ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-0.72px"
  body:
    fontFamily: >-
      Inter, -apple-system, "system-ui", "Segoe UI", sans-serif, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: "-0.1px"
  button:
    fontFamily: >-
      Inter, -apple-system, "system-ui", "Segoe UI", sans-serif, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: "-0.2px"
  link:
    fontFamily: >-
      Inter, -apple-system, "system-ui", "Segoe UI", sans-serif, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  button-secondary:
    fontFamily: >-
      Inter, -apple-system, "system-ui", "Segoe UI", sans-serif, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 28px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 58px
    borderColor: "{colors.button-primary-border}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    height: 32px
  button-ghost:
    backgroundColor: "{colors.ghost-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 58px
    borderColor: "{colors.ghost-border}"
  button-glow:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 12px 24px
    height: 56px
    borderColor: "{colors.accent-glow-border}"
    boxShadow: "rgba(180, 40, 180, 0.25) 0px 0px 6px 0px, rgba(102, 43, 223, 0.25) 0px 0px 16px 0px"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xl}"
    padding: 48px
  footer:
    textColor: "{colors.ink}"
    padding: 48px 48px 96px
---

# Railway

## Overview

Railway (railway.com, "The all-in-one intelligent cloud provider") builds its whole home page as one long night scene. The canvas is #13111c, a violet-tinted near-black, and the hero is a pixel-art dusk landscape — dark hills and a purple sky — behind a centred serif headline, "Ship software peacefully", with a one-line subtitle ("with the all-in-one intelligent cloud provider", the word "intelligent" a lighter link) and two buttons: a muted purple "Deploy →" and a translucent "Agents". A large screenshot of Railway's dark canvas UI, showing service cards wired together, fills the space below the hero.

From there the page runs as a vertical timeline. A thin dotted rail with small icons runs down the left edge, and each chapter starts with a small pill label, a serif heading in two lines ("Deploy anything / without the complexity", "Instant networking. Zero setup.", "Grow big without the growing pains", "Logs, metrics, and traces in one place. Clarity without the chaos.", "Finally, a development workflow that actually flows."), a short Inter paragraph ending in a "Learn more →" link, and then a product screenshot plus three small feature notes with icons. Each chapter sits on its own subtly tinted panel — teal, navy, plum — so the page shifts hue as you scroll without ever leaving the dark.

Social proof follows: "Trusted by the best in business" with three glass quote cards, "…and loved by developers" with smaller tweet-style cards, then a departure-board counter in monospace ("229.6M+ deploys per month (and counting)", rows for USERS, SERVICES, DEPLOYMENTS, REQUESTS, LOGS). A "now boarding" strip with a glowing "All Aboard" pill leads into the footer. The language leans on the railway metaphor (boarding, departures, "peacefully"), and the visual craft is high: pixel-art illustration, real product UI, data rendered as a split-flap board.

## Colors

- **Canvas #13111c** — the page background (12,900 area units; 33% of the captured screen).
- **Ink #f7f7f8** — the most-read text (12,226 characters); **on-primary #ffffff** covers headings and button labels (3,926 characters).
- **Translucent whites** — the text hierarchy is built from white at different alphas: **link #ffffffcc** (80%), **ink-muted #ffffffa6** (65%), **ink-dim #ffffff99** (60%), **ink-faint #ffffff80** (50%). **Ink-subtle #a1a0ab** is the opaque grey for smaller captions.
- **Primary #553f83** — the "Deploy →" button fill, a desaturated purple, with a **#ffffff26** border.
- **Button-secondary-bg #291839 / button-secondary-text #bf93ec** — the compact "Deploy" button in the product UI.
- **Surface-teal #1f2b2e, surface-navy #1b2132, surface-plum #251823** — the chapter panels (2,159, 2,123 and 1,724 area units).
- **Surface-deep #0d0c14** — a darker band (805 units). **Nav-hover-bg #1c1a28** — header menu buttons on hover.
- **Card-bg #ffffff0d** — glass cards (white at 5%), and **hairline #ffffff16** — 259 of the measured borders.
- **Accent-pink #f9a8d4** — 92 characters of pink highlight text. **Accent-glow-border #a05fcf** — the "All Aboard" pill border.
- **Ghost-bg #00000059 / ghost-border #ffffff40** — the translucent "Agents" button.

Small green tints (#42946e at 10% and #428a72 at 20%) and #42946e text are status indicators in the product UI.

## Typography

Loaded fonts: **Inter** (variable 300–800), **IBM Plex Serif** (400 and 500), **JetBrains Mono** (variable 100–800) and **Inter Tight** (variable 100–900).

- **Display** — IBM Plex Serif 54px/60.48px, weight 500, -1.96px tracking, centred.
- **Heading** — IBM Plex Serif 36px/48px, weight 400, -0.72px; chapter headings. 40px Plex at -0.8px is used for the deploy counter header.
- **Body** — Inter 16px/28px, 400, -0.1px.
- **Button** — Inter 20px/32px, 500, -0.2px (hero buttons). **Button-secondary / nav** — Inter 14px/20px, 500.
- **Link** — Inter 20px/28px, 400.

JetBrains Mono is the second most-used family (6,489 characters): the product screenshots, code and the departure board. The most common sizes are small — 12px (5,698 characters) and 14px (5,176) — because so much text lives inside UI screenshots. Inter accounts for 11,957 characters; IBM Plex Serif only 308, reserved for headlines. IBM Plex Serif, Inter and JetBrains Mono are all open-source families, so no substitutes are needed.

## Layout

Measured at 1280px (1,272px content). The main band spans y 0–10,118 with content from x=27 to x=1216 and up to 3 columns; the footer band spans x=48 to x=1224 in 3 columns. Chapters are left-aligned text blocks next to wide product screenshots, with three feature notes in a row underneath. The hero is centred.

Gaps: 16px, 12px, 8px, 32px, 2px, 24px, 4px, 128px and 48px. Paddings: 24px (41 times), 16px, 12px, 6px, 64px, 48px, 96px, 128px, 32px, 80px. Quote cards use 48px padding at 360px wide; the footer uses 48px 48px 96px. The page is 11,625px tall. The left-edge timeline rail and the alternating tinted panels create the rhythm rather than whitespace alone.

## Elevation & Depth

Depth is atmospheric. Glass cards use #ffffff0d fills with 1px #ffffff16 hairlines; two elements carry a 1px `rgba(255, 255, 255, 0.1)` inset ring and one a 1.5px `rgba(255, 255, 255, 0.2)` inset ring. Product screenshots float on very large layered shadows — one measured as a five-layer stack starting `rgba(62, 45, 45, 0.24) 0px 100px 191px 0px`, another as a blue-tinted upward glow starting `rgba(65, 78, 166, 0.1) 0px -12px 127px 0px`. The "All Aboard" pill glows with `rgba(180, 40, 180, 0.25) 0px 0px 6px` plus `rgba(102, 43, 223, 0.25) 0px 0px 16px`. Focused buttons show a 1px auto #99c8ff outline.

## Shapes

Small, consistent radii: 4px dominates (521 elements, mostly inside product UI), 8px for buttons (30), 6px for header controls such as "Sign in", 12px for quote cards, 16px for larger panels, 10px once, 28px for the "All Aboard" pill, and 9999px for 15 pill labels and avatars. Borders are 1px translucent white. Pixel-art illustration (the hero landscape) gives the brand its texture.

## Components

- **Primary button** — #553f83 fill, white Inter 20px/500 label, 8px radius, 58px tall, 12px 24px padding, `1px solid #ffffff26`.
- **Ghost button** — #00000059 fill, `#ffffff40` border, same size ("Agents").
- **Glow pill** — transparent with `#a05fcf` border, 28px radius, 56px tall, purple glow ("All Aboard").
- **Compact deploy button** — #291839 fill, #bf93ec 14px/500 label, 8px radius, 32px tall.
- **Header** — Inter 14px/500 links (Product, Developers, Enterprise, Company, Pricing) with dropdown buttons that gain a #1c1a28 background on hover; "Sign in" and "Book a demo" gain 5% white on hover.
- **Glass quote card** — #ffffff0d, 12px radius, 48px padding, 16px/28px quote text, company logo on top.
- **Chapter label** — small pill above each section heading.
- **Departure board** — monospace counters in split-flap cells.
- **Pill CTA "Read customer stories →"** — #ffffff1a fill, 6px radius, 44px tall, 10px 16px padding.

## Design System Architecture

No public brand guidelines or design-system site was found: https://railway.com/brand returned HTTP 404 and https://railway.com/about links only Careers, Customers, Enterprise, Blog and a "How we work" post. The shipped CSS exposes an HSL color ramp as custom properties (`--gray-950: hsl(246, 4%, 97%)`, `--pink-600: hsl(270, 70%, 65%)`, `--blue-400: hsl(220, 72%, 45%)`, `--green-900`, `--cyan-800`), Tailwind-style arbitrary-variant classes in its media queries (`(min-width:1080px)]:grid-cols-3`), and Osano consent variables that are not brand UI. Inter Tight is served from Google Fonts (`fonts.gstatic.com`). Breakpoints in the stylesheet: 376px, 768px, 1080px and a max-height 800px / max-width 1200px query.

## Do's and Don'ts

**Do**
- Keep everything on the #13111c violet-black canvas and shift hue per section with the teal, navy and plum panel tints.
- Use IBM Plex Serif for headlines only, with tight negative tracking; Inter for everything else; JetBrains Mono for data.
- Build text hierarchy with white at 100/80/65/60/50% alpha.
- Show the real product UI in large screenshots with soft, layered shadows.
- Use the muted #553f83 purple for the main action and 8px radii.

**Don't**
- Don't introduce a light theme section — the measured page never leaves the dark.
- Don't make the primary purple bright; the measured fill is desaturated.
- Don't use heavy opaque borders; hairlines are 9% to 25% white.
- Don't style the consent manager as part of the brand.
- Don't drop the pixel-art illustration in favor of gradients.

## Responsive Behavior

Measured at a 390px viewport: the h1 drops from 54px to 40px/44.8px (tracking stays -1.96px), while the h2 stays 36px/48px. Body text stays 16px/28px. The primary "Deploy →" button keeps 58px height and 12px 24px padding but its label drops from 20px to 18px. The mobile pass recorded 0 visible header links and no visible menu toggle by its detection. The main band's content runs from x=16 to x=371 in a single column, and later bands use up to 2 columns. The mobile page is about 13,460px tall versus 11,625px on desktop. The size mix shifts to 14px as the most common size. Timeline rail and screenshot treatment on mobile were not measured.

## Iteration Guide

1. Set #13111c as the canvas, #f7f7f8 Inter text and white-alpha secondary text.
2. Headline in IBM Plex Serif 54px/500 with -1.96px tracking; chapter headings 36px/400.
3. Primary action #553f83 with 8px radius, 58px tall, plus the translucent ghost twin.
4. Structure the page as chapters on tinted panels, each with a pill label, two-line serif heading, short copy and a product screenshot.
5. Use #ffffff0d glass cards with 12px radius and #ffffff16 hairlines for quotes.
6. Render numbers in JetBrains Mono; end on a glowing pill CTA.
7. Re-run the gate after edits.
