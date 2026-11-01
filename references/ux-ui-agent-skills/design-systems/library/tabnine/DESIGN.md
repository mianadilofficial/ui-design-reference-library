---
version: alpha
name: Tricentis
category: "Developer Tools & IDEs"
description: "Tricentis (tricentis.com, where tabnine.com now redirects after Tricentis acquired Tabnine) sets Open Sans 800 headlines (68px/72px, -0.68px) in white on deep navy #001b41 and in charcoal #343941 on white, with an amber #ffb400 'Get a demo' button (6px radius, #343941 bold text), cyan #59c8e6 eyebrows, #004c97 stat cards with 12px radius and an orange #ff6c0e header action."
colors:
  canvas: "#ffffff"
  ink: "#343941"
  primary: "#ffb400"
  on-primary: "#343941"
  navy-deep: "#001b41"
  navy: "#1b365d"
  navy-band: "#162d51"
  blue: "#004c97"
  cyan: "#59c8e6"
  teal: "#0087ae"
  accent-orange: "#ff6c0e"
  ink-grey: "#898d8d"
  ink-on-dark-muted: "#a7bbd0"
  hairline: "#004c9726"
typography:
  display:
    fontFamily: "\"Open Sans\", Calibri, Tahoma, sans-serif"
    fontSize: 68px
    fontWeight: 800
    lineHeight: 72px
    letterSpacing: "-0.68px"
  display-mobile:
    fontFamily: "\"Open Sans\", Calibri, Tahoma, sans-serif"
    fontSize: 36px
    fontWeight: 800
    lineHeight: 46px
  heading:
    fontFamily: "\"Open Sans\", Calibri, Tahoma, sans-serif"
    fontSize: 34px
    fontWeight: 800
    lineHeight: 42px
  eyebrow:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 15px
  body:
    fontFamily: "\"Open Sans\", Calibri, Tahoma, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: "\"Open Sans\", \"Fira Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 14px
  nav:
    fontFamily: "\"Open Sans\", \"Fira Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
rounded:
  xs: 6px
  sm: 8px
  md: 9px
  lg: 10px
  xl: 12px
  2xl: 17px
  3xl: 42px
  4xl: 48px
  pill: 9999px
spacing:
  s1: 6px
  s2: 8px
  s3: 9px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 15px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 47px
  link:
    textColor: "{colors.cyan}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.navy}"
  nav-link:
    textColor: "{colors.navy}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.blue}"
    rounded: "{rounded.xl}"
    padding: 14px 18px
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.navy}"
    boxShadow: rgba(1, 0, 39, 0.07) 0px 0px 15px 0px
---

# Tricentis

## Overview

This file documents the page the queued Tabnine URL actually serves. https://www.tabnine.com answers with an HTTP 301 redirect to https://www.tricentis.com/products (tagged `utm_source=www.tabnine.com … utm_campaign=redirect`), and the measured page loads a `tabnineWelcome__overlay` dialog for visitors arriving from Tabnine (hidden before measurement). Tricentis's newsroom lists "Tricentis Acquires Tabnine to Further Scale Agentic Quality Engineering for the Enterprise", published 29 July 2026 (https://www.tricentis.com/news/tricentis-acquires-tabnine/). The measured site is therefore the parent company's, and this file is named after it: Tricentis.

The page, titled "Agentic Quality Engineering Platform - Tricentis", is a corporate enterprise-software landing page. The hero is a full-width deep-navy band with a soft blue gradient: a cyan eyebrow "Agentic Quality Engineering Platform", the white headline "Ship AI-generated code with confidence", a paragraph ("AI is accelerating how you build software, but is your quality engineering keeping up? Tricentis is the agentic quality engineering platform that puts quality on AI's pace…"), an amber "Get a demo →" and an outlined "Watch an overview →". At right, a collage of product screenshots orbits a large circular Tricentis badge, connected by dotted lines to round icon nodes (eye/gear, AI, brain, code).

Below: "The compounding problem — Agentic coding has outpaced traditional testing" with four stat cards (29%, 1.7x, 72%, 30%) sourced to Stack Overflow, CodeRabbit and others; a navy architecture diagram "Tricentis Agentic Quality Engineering Platform" (AI Workspace over Agentic Quality Intelligence, Test Creation & Management, Test Automation, Performance Testing); alternating white and navy feature sections each with a cyan eyebrow, a bold headline, bullet points and an amber button ("Explore AI Workspace", "See Agentic Test Creation"); "Why enterprises pick Tricentis" with six navy tiles; a customer quote; "Featured resources" cards (Forrester Wave, Gartner Magic Quadrant); a closing navy band "Turn quality from a bottleneck into your AI-speed unlock"; and a white footer with uppercase column headings.

The tone is enterprise and assertive: heavy headlines, data-backed claims and analyst badges.

## Colors

- **Canvas `#ffffff`** — the body and the largest measured background.
- **Navy-deep `#001b41`** — the hero and dark feature bands, the second-largest background. **Navy-band `#162d51`** and **navy `#1b365d`** — further dark panels; `#1b365d` is also the header link and footer text colour.
- **Ink `#343941`** — charcoal body and headline text on white; the most-read colour. White `#ffffff` is a close second because of the navy bands.
- **Primary `#ffb400`** with **on-primary `#343941`** — the amber "Get a demo" and section buttons. The fill sits on a wrapper element (`Button_PrimaryAmber`) with a 6px radius; the link text inside is charcoal Open Sans 16px/700 (recorded probe).
- **Accent-orange `#ff6c0e`** — the header "Get started" button fill (as captured) and the hover colour of the grey utility links (Support, Contact go from `#898d8d` to `#ff6c0e`).
- **Cyan `#59c8e6`** — eyebrows on dark bands ("Agentic Quality Engineering Platform") and text links. **Teal `#0087ae`** — eyebrows on white ("The compounding problem").
- **Blue `#004c97`** — stat-card numbers and text; **hairline `#004c9726`** (15% of the same blue) borders the cards.
- **Ink-grey `#898d8d`** — utility links; **ink-on-dark-muted `#a7bbd0`** — secondary text on navy.

Small fills of `#9c27b033` (translucent purple) and `#d2d755` (yellow-green) were measured inside the diagrams.

## Typography

The whole site uses **Open Sans** (Google Fonts, weights 400, 600, 700 and 800), with fallback stacks naming Calibri/Tahoma or Fira Sans.

- `display`: 68px/72px at weight 800 with -0.68px tracking — the hero headline, white on navy.
- `heading`: 34px/42px at 800 — section headlines such as "Agentic coding has outpaced traditional testing"; 38px and 24px headings also appear.
- `eyebrow`: 20px/700 with a tight 15px line height; 20px text carries 0.5px tracking on 202 characters.
- `body`: 18px/26px at 400 for lead paragraphs; 16px is the most common size overall (3,836 characters).
- `button`: 16px/700 with a 14px line height (recorded probe). `link`: 18px/600. `nav`: 16px; header links render at 600.
- Footer column headings are 13px/700 uppercase.

Weight is the main hierarchy tool: 800 for headlines, 700 for eyebrows and buttons, 600 for links, 400 for reading text. Open Sans is free, so no substitute is needed.

## Layout

At 1280px the page is 10,470px tall. The header is 68px tall on white: the Tricentis logo at left, Solutions, Platform, Services, Company, Resources in the centre, and Support, Contact, search, language and the orange "Get started" at right; five primary header links counted. Content spans about 25px to 1252px in the hero band.

Sections are split two-column (text left, screenshot right, alternating) on navy or white. Spacing values cluster at 10px, 8px, 24px and 30px gaps, 40px between groups, and paddings of 16px, 12px, 10px, 24px, 28px and 60px (section padding). The stat row and the "Why enterprises pick Tricentis" grid use up to four and three columns respectively (max 4 card columns measured). The footer is a six-column link grid with uppercase headings and social icons.

## Elevation & Depth

Only one shadow was measured: the footer's `rgba(1, 0, 39, 0.07) 0px 0px 15px 0px`, a faint navy-tinted glow that separates it from the last band. Depth elsewhere comes from colour — white sections against `#001b41` navy bands — and from the hero's blue gradient and the layered product screenshots inside the illustrations. Stat cards are outlined, not shadowed: 1px `#004c9726` borders on white.

## Shapes

- **12px** — the most frequent radius (24 elements): stat cards and tiles; one panel uses `0px 0px 12px 12px`.
- **6px** — buttons (the amber wrapper) and small elements (13).
- **8px, 9px, 10px, 17px** — screenshots, tiles and image frames.
- **42px** and **48px** — one element each; **50%** — round icon nodes and avatars.

Buttons are softly rounded rectangles with a trailing arrow; nothing in the main UI is pill-shaped.

## Components

- **button-primary** — "Get a demo →": `#ffb400` fill on a 6px-radius wrapper, `#343941` Open Sans 16px/700 text, `12px 24px` padding, 47px tall, with a right arrow.
- **Outlined button** — "Watch an overview →": white text and white outline on navy, same padding (43px tall); on hover the text turns `#1b365d` (measured).
- **Header CTA** — "Get started": orange `#ff6c0e` block at the right of the header.
- **nav / nav-link** — white header, `#1b365d` 16px links; Support and Contact in grey `#898d8d`, hovering to orange.
- **card (stat)** — 280×179px, 12px radius, 1px `#004c9726` border, `14px 18px` padding, a large `#004c97` number with a small unit, a gradient underline, a label and a grey source line.
- **link** — `#59c8e6` Open Sans 18px/600 on navy.
- **Feature tile** — navy tile with a cyan icon, white bold title and muted description.
- **footer** — white, `#1b365d` text, 13px/700 uppercase column headings, faint navy glow.

The round chat bubble at the right of the hero is a support widget and is not part of the brand UI.

## Design System Architecture

No public brand or design-system page was found: https://www.tricentis.com/brand, /company/brand and /press return 404. The site is a Next.js build (images via `/_next/image`, logo served from `be.tricentis.com/media-assets`) with CSS-module class names that reveal the component set — `Button_button`, `Button_button_wrapper`, `Button_PrimaryAmber`, `ButtonGroup_button-group`, `ButtonGroup_align-left`, `FlagCta_title-container`. No CSS custom properties were exposed at the root (0 root variables), so colours and type are hard-coded per module. The Tabnine relationship is documented on https://www.tricentis.com/news/tricentis-acquires-tabnine/.

## Do's and Don'ts

**Do**
- Alternate white sections with deep navy `#001b41` bands.
- Set headlines in Open Sans 800, white on navy or charcoal `#343941` on white.
- Put a short cyan (on navy) or teal (on white) eyebrow above every headline.
- Use the amber `#ffb400` button with charcoal bold text and a trailing arrow for the main action.
- Present proof as outlined stat cards with large blue numbers and cited sources.
- Keep icons in round outlined nodes connected by dotted lines in diagrams.

**Don't**
- Don't put white text on the amber button; the measured text is `#343941`.
- Don't use pills for buttons; the radius is 6px.
- Don't add drop shadows to cards; outline them with the 15% blue hairline.
- Don't use the orange `#ff6c0e` for in-page buttons; it marks the header action and link hovers.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the hero headline drops from 68px/72px to 36px/46px at weight 800; the eyebrow from 20px to 14px/24px with 0.5px tracking; lead paragraphs stay 18px/26px. The mobile header measured 72px tall; a menu control was detected as visible (its label read "Back") with 3 header links visible. Content spans 16px to 374px and 1 card column was counted. Mobile font sizes recorded: 16px, 14px, 18px, 15px, 20px, 13px, 32px, 24px, 22px, 11px. Breakpoint widths and the hero illustration's mobile treatment were not measured.

## Iteration Guide

1. Build a 68px white header and a deep-navy `#001b41` hero.
2. Set the headline in Open Sans 800 68px/72px, preceded by a cyan 20px/700 eyebrow.
3. Add the amber `button-primary` and a white outlined secondary button, both with arrows.
4. Follow with white sections using charcoal 34px/800 headings and 18px/26px body.
5. Present metrics as 12px-radius outlined stat cards in `#004c97`.
6. Compare with https://www.tricentis.com/products before shipping.
