---
version: alpha
name: Instantly
category: "Product & SaaS"
description: "Instantly (instantly.ai) is a sales-engagement SaaS site set entirely in Avertastd (600 Title-Case headlines at 40px, -1.5 to -2px tracking), black #000000 pill buttons (100px radius) on a near-white #fbfbfc canvas, grey #6d727e copy, blue-gradient product panels with #4580f7 accents and very deep layered card shadows."
colors:
  canvas: "#fbfbfc"
  page-body: "#f7f8fb"
  surface-card: "#ffffff"
  ink: "#000000"
  ink-dark: "#14171f"
  ink-muted: "#6d727e"
  primary: "#000000"
  on-primary: "#ffffff"
  accent-blue: "#4580f7"
  royal-blue: "#1179fc"
  brand-green: "#28d371"
  violet: "#dc82fc"
  hairline: "#ededef"
  border-soft: "#dbdfea"
  text-input-text: "#333333"
typography:
  display:
    fontFamily: Avertastd, Arial, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 44px
    letterSpacing: "-1.5px"
    textTransform: capitalize
  heading:
    fontFamily: Avertastd, Arial, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 44px
    letterSpacing: "-2px"
    textTransform: capitalize
  display-mobile:
    fontFamily: Avertastd, Arial, sans-serif
    fontSize: 28px
    fontWeight: 600
    lineHeight: 30.8px
    letterSpacing: "-1.5px"
    textTransform: capitalize
  body-large:
    fontFamily: Avertastd, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24.2px
  body:
    fontFamily: Avertastd, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Avertastd, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20.02px
  button:
    fontFamily: Avertastd, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
    textTransform: capitalize
  button-large:
    fontFamily: Avertastd, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    textTransform: capitalize
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 19.2px
  xl: 20px
  2xl: 24px
  3xl: 48px
  4xl: 60px
  cta: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 26px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 10px 20px
    height: 41px
  button-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.cta}"
    padding: 16px 32px
    height: 56px
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 8px 20px
    height: 39px
    borderColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-link-hover:
    textColor: "{colors.accent-blue}"
  prompt-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.nav}"
    height: 36px
  media-card:
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.lg}"
    boxShadow: >-
      rgba(0, 0, 0, 0.02) 0px 2.55px 4.34px 0px, rgba(0, 0, 0, 0.03) 0px 11.23px 8.98px 0px, rgba(0, 0, 0, 0.04) 0px 27.57px 17.92px 0px, rgba(0, 0, 0, 0.04) 0px 53.09px 35.12px 0px, rgba(0, 0, 0,
      0.05) 0px 89.34px 64.58px 0px, rgba(0, 0, 0, 0.07) 0px 137.84px 110.27px 0px
---

## Overview

instantly.ai ("Sales Engagement and Lead Intelligence | Instantly") sells cold-email and lead tools. The home page (8,136px tall at 1280px) has a simple, repeating rhythm: a centered Title-Case headline, one grey line of explanation, a small black pill button ("Start For Free"), and then a wide rounded panel filled with a soft blue (and occasionally purple-teal) gradient on which floating white product windows sit — Lead Finder, the Instantly AI chat, an "Add A Trigger" workflow modal, integration cards (Zapier, Slack, Google Calendar, OpenAI), and a revenue dashboard. Sections: Find Clients, Reach Clients On Autopilot, Automate Your Outreach, AI Workflows, Connect Your Tools, Optimized For Revenue, Connect Instantly To ChatGPT, Customer Testimonials, and a closing "Unlock The Power Of AI With Instantly" panel.

Everything is set in one typeface, **Avertastd**. Colour is almost monochrome: near-white canvas, black buttons and headings, grey body copy. The brand colour lives in imagery — the blue gradients, a thin blue announcement bar at the very top ("Finding clients. Solved. The search ends October 27."), and an `#4580f7` blue for navigation hover.

The voice is short and action-led, with every heading and button in Title Case ("Get Started", "Start For Free", "Connect To ChatGPT").

## Colors

- **Canvas `#fbfbfc`** — the largest measured background area; the page reads as almost white. The `body` element computes to **`#f7f8fb`** (`page-body`; `--white-smoke` is declared as `#f6f8fb`).
- **White `#ffffff`** — floating product windows and testimonial cards.
- **Black `#000000`** (`primary`, `ink`) — every measured button fill, the outlined button border, headings and most text (3,022 characters).
- **Dark text `#14171f`** (`--_new-color-palette---dark-text-color`) — 778 characters.
- **Grey `#6d727e`** (`--_new-color-palette---text-color-grey`) — descriptions under headings (1,142 characters).
- **Blue `#4580f7`** (`--_new-color-palette---blue`) — measured as a small background and as the text and border colour of header links on hover.
- **Royal blue `#1179fc`** (`--royal-blue`), **brand green `#28d371`** (`--brand-green-color`) and **violet `#dc82fc`** (`--violet`) are declared variables; the gradients in the capture are images, not measured CSS colours.
- **Hairlines** — `#ededef` (`--light-gray`, 14 borders), `#dbdfea`, and `#0f0f0f1a` (10% black).
- **Input text `#333333`** — the hero prompt textarea.

## Typography

One family: **Avertastd**, loaded at 400, 600 and 700, with Arial as the declared fallback. Arial is the site's own declared substitute.

| Role | Size / line-height | Weight | Tracking | Case |
| --- | --- | --- | --- | --- |
| Hero (h1, "Find Clients") | 40px / 44px | 600 | -1.5px | capitalize |
| Section heading (h2) | 40px / 44px | 600 | -2px | capitalize |
| Large body / quotes | 20px / 24.2px | 400 | normal | — |
| Body | 16px / 24px | 400 | normal | — |
| Nav | 14px / 20.02px | 600 | normal | — |
| Button | 14px / 21px | 600 | normal | capitalize |
| Large button | 16px / 24px | 600 | normal | capitalize |

20px carries the most characters (2,682) because the testimonial quotes are set large. Headings are always 40px on desktop; hierarchy between h1, h2 and h3 is made by colour and position, not size. `text-transform: capitalize` is applied in CSS, so the Title Case is systematic.

## Layout

The measured page has a 48px blue announcement band and one long `#fbfbfc` band with content between x=78 and x=1202. Each feature section is a vertical stack: centered heading, centered grey sub-copy (two lines max), centered button, then a full-width rounded gradient panel. Gaps: 8px (53), 20px (48), 40px (24), 16px, 32px; paddings: 32px (30), 16px, 20px, 10px, with 80px, 128px and 160px for section spacing. Maximum card columns measured: 2.

Header: logo at left; Products, Use Cases, Resources (with chevrons) and Pricing; Login, an outlined "Get A Demo" pill and a black "Get Started" pill at right. The footer is white with link columns (Products, Use Cases, Resources, Quick Links, Company) and a row of social icons.

## Elevation & Depth

Depth is concentrated in one very deep, six-layer shadow applied to the floating product imagery (9 elements):

`rgba(0,0,0,0.02) 0 2.55px 4.34px`, `rgba(0,0,0,0.03) 0 11.23px 8.98px`, `rgba(0,0,0,0.04) 0 27.57px 17.92px`, `rgba(0,0,0,0.04) 0 53.09px 35.12px`, `rgba(0,0,0,0.05) 0 89.34px 64.58px`, `rgba(0,0,0,0.07) 0 137.84px 110.27px`.

It produces a long, diffuse falloff that makes the windows hover over the gradient panels. One small `rgba(0, 0, 0, 0.05) 0px 2px 5px 0px` shadow is also measured. Buttons and text are flat.

## Shapes

- **100px** (12) — every button: fully rounded pills.
- **12px** (15), **16px** (13), **24px** (9) — cards and panels.
- **19.2px** — media cards with the deep shadow.
- **100%** (4) — circular avatars and carousel arrows.
- **8px**, **20px**, **48px**, **60px** — smaller sets; the large gradient panels use the bigger radii.

## Components

- **Primary pill** ("Get Started", "Start For Free") — black fill, white Avertastd 14px/600 capitalized, padding 10px 20px, 41px tall, 100px radius, no shadow.
- **Large pill** ("Connect To ChatGPT") — same styling at 16px/600, padding 16px 32px, 56px tall.
- **Outlined pill** ("Get A Demo") — transparent, 1px black border, black 14px/600, padding 8px 20px, 39px tall.
- **Header link** — black 14px/600; hover turns text and border `#4580f7`.
- **Hero prompt** — a white rounded prompt input (textarea text `#333333`, 14px/600, 36px tall) and small suggestion chips beneath.
- **Logo wall** — white monochrome customer logos (Sony, Stripe, Revolut, Linear and others) on the hero gradient.
- **Testimonial card** — large 20px quote in black, name and title beneath, company logo.
- **Carousel control** — circular arrows, the active one blue.

## Design System Architecture

No public Instantly design system or brand page was found: https://instantly.ai/brand returned HTTP 404 (recorded in SOURCES.json). The site exposes 16 root variables, which form the de-facto palette: an older flat set (`--black`, `--black-2 #050917`, `--black-3 #0f0f0f`, `--black-4 #0f0f0f99`, `--black-5 #0f0f0fa6`, `--white`, `--white-2 #ffffff40`, `--white-smoke #f6f8fb`, `--light-gray #ededef`, `--royal-blue #1179fc`, `--violet #dc82fc`, `--violet-2 #dd83fc`, `--brand-green-color #28d371`) and a newer named collection prefixed `--_new-color-palette---` (`blue #4580f7`, `text-color-grey #6d727e`, `dark-text-color #14171f`). Type, radius and spacing are not tokenized as variables.

## Do's and Don'ts

**Do**
- Use Avertastd for everything, 600 for headings and buttons, 400 for copy.
- Keep headings at 40px with -1.5 to -2px tracking and Title Case.
- Use black pill buttons (100px radius) as the only button style; outline for the secondary action.
- Put product UI in white windows floating on a rounded blue gradient panel with the deep six-layer shadow.
- Keep the canvas near-white (`#fbfbfc`) and body copy grey `#6d727e`.

**Don't**
- Don't fill buttons with blue; blue is for imagery and hover.
- Don't vary heading sizes within the page on desktop; the system uses one 40px size.
- Don't add borders to cards; depth comes from the shadow.
- Don't use the browser default link blue (`#0000ee`) measured on an empty anchor; it is not a brand colour.
- Don't use sentence case for buttons.

## Responsive Behavior

Measured at 390px:

- Header shows no inline links and a menu toggle labelled "menu" (desktop: 1 header link counted visible, no toggle).
- Headings drop from 40px to 28px: h1 28px/30.8px (-1.5px), h2 28px/35.84px (-2px).
- Body quotes drop from 20px/24.2px to 18px/21.78px; 18px and 14px are the dominant mobile sizes.
- Maximum card columns measured 2, the same as desktop.
- Content spans x=20 to x=371; the blue announcement band measured 68px (48px on desktop).

Intermediate breakpoints were not measured.

## Iteration Guide

1. Start on `#fbfbfc` with Avertastd; black text, grey `#6d727e` secondary copy.
2. For each feature: centered 40px/600 Title-Case heading (-2px), one or two grey lines, a 41px black pill "Start For Free".
3. Follow with a full-width rounded panel (24px+ radius) holding a gradient image and floating white UI windows with the six-layer shadow.
4. Use 20px quotes for social proof in white cards.
5. Keep all interactive elements as pills (100px); hover links to `#4580f7`.
6. Before adding a colour, check it against the 16 root variables; anything else is outside the system.
