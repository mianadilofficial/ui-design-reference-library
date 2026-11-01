---
version: alpha
name: Qwik
category: "Frontend Frameworks"
description: "Qwik (qwik.dev) runs on a deep indigo canvas #151934 (--qwik-dark-purple-bg) with white Poppins headlines (80px/600, -2.4px tracking), sky-blue #18b6f6 highlight words and buttons, Qwik purple #ac7ef4 / #976ae2 accents and bands, 8px-radius buttons with 15px 35px padding, 11px-radius bordered cards and a white footer."
colors:
  canvas: "#151934"
  page-largest: "#151934"
  ink: "#ffffff"
  primary: "#18b6f6"
  on-primary: "#ffffff"
  purple-band: "#976ae2"
  qwik-purple: "#ac7ef4"
  ink-on-light: "#0e201a"
  ink-dark: "#151934"
  hairline-faint: "#e6e6e629"
  ink-dim: "#ffffff59"
  ink-soft: "#ffffffb8"
  button-blue-alt: "#31adf6"
  super-header: "#05070d"
  qwik-dark-blue: "#006ce9"
  surface-light: "#ffffff"
typography:
  display:
    fontFamily: Poppins, sans-serif
    fontSize: 80px
    fontWeight: 600
    lineHeight: 90px
    letterSpacing: "-2.4px"
  display-mobile:
    fontFamily: Poppins, sans-serif
    fontSize: 48px
    fontWeight: 600
    lineHeight: 62.4px
    letterSpacing: "-1.44px"
  body:
    fontFamily: Poppins, sans-serif
    fontSize: 19.2px
    fontWeight: 400
  button:
    fontFamily: Poppins, sans-serif
    fontSize: 16px
    fontWeight: 400
  nav:
    fontFamily: Poppins, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16.8px
  link:
    fontFamily: >-
      Poppins, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 8px
  md: 11px
  lg: 16px
  xl: 17px
  2xl: 40px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 16.66px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 15px 35px
    height: 55px
  button-secondary:
    backgroundColor: "{colors.button-blue-alt}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 15px 35px
    height: 54px
  button-purple:
    backgroundColor: "{colors.qwik-purple}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 15px 35px
    height: 46px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  super-header-link:
    backgroundColor: "{colors.super-header}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    boxShadow: rgba(0, 0, 0, 0.36) 0px 12px 28px 0px
  card:
    textColor: "{colors.ink-on-light}"
    rounded: "{rounded.md}"
    borderColor: "{colors.ink-on-light}"
  footer:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink-on-light}"
---

# Qwik

## Overview

Qwik is a web framework whose page title on qwik.dev reads "Framework reimagined for the edge! [U+1F4DA] Qwik Documentation". The home page is a dark, glowing, developer-marketing page 6974px tall. It opens with a thin black super-header announcing "Qwik v2 — Lighter, faster, better.", a nav row (Docs, Ecosystem, Tutorial, Qwik Sandbox, Blog, a Search pill and theme/social icons), then a centred hero: "Deliver / instant apps / at scale" in very large white Poppins with "instant apps" in sky blue, a subline "Build instantly-interactive web apps without effort.", a purple `npm create qwik@latest` button and a dark "Explore the docs" button. A "Special Sponsor builder.io" strip follows.

The scroll then runs through "New Approach to Performance Optimization" (a vertical list of capability names — Instant Loading, Resumable, Lazy Executing, Reduced Rendering, Perf that Scales, Code Once — next to a code window with a hand-written annotation), a "Showcase" carousel with a giant outlined background word, a white card "You know React? You know Qwik." beside a code sample, "Batteries included" next to a glossy purple 3D lightning bolt, a full-width purple band "Get super powers with the Qwik Optimizer", a "Qwik media" carousel of videos, podcasts and courses, and "Built by Performance Nerds" with round portrait photos of the core team. The footer switches to white.

The art direction is neon-on-night: radial blue and violet glows behind content, 3D glossy objects, and code windows with traffic-light dots. Copy is short and punchy.

## Colors

The canvas is **#151934**, named `--qwik-dark-purple-bg` in the shipped CSS; it is the body background and covers the largest area. Its near-black partner **super-header #05070d** fills the top announcement bar. The page darkens and lightens with radial glows; the bands record fills such as #1b1f39 and #1c1e3d where glow overlays the canvas.

**ink #ffffff** is the most-read text colour (headlines, nav, paragraphs on dark), with **ink-soft #ffffffb8** and **ink-dim #ffffff59** for secondary and de-emphasised text. **hairline-faint #e6e6e629** is a faint translucent line colour measured as text.

**primary #18b6f6** is Qwik sky blue: the "instant apps" highlight, the active "Instant Loading" item and the "View Examples" button. A sibling **button-blue-alt #31adf6** fills "See more examples". **qwik-purple #ac7ef4** (`--qwik-purple`) fills "Learn More" and "See All" ; the word "media" in "Qwik media" is purple in the capture, and #ac7ff4 was measured as text; **purple-band #976ae2** is the full-width Qwik Optimizer band. **qwik-dark-blue #006ce9** (`--qwik-dark-blue`) is the interactive text colour and the Search pill's text and border.

On light surfaces — the "You know React?" card and the footer — text is **ink-on-light #0e201a** (`--text-color`) and **ink-dark #151934**; **surface-light #ffffff** is the footer background (`--bg-color: #fff`).

## Typography

The page is set entirely in **Poppins** (400, 500 and 700 loaded; 600 and 800 also measured as computed weights).

- **display** — Poppins 80px / 600 / 90px, letter-spacing -2.4px: the hero "Deliver instant apps at scale" (the page has no h1; the extractor used the largest hero text). Mobile: 48px / 600 / 62.4px, -1.44px.
- Section headings measured at 64px ("New Approach to Performance Optimization", "Batteries included", "Qwik media") with -1.92px tracking, 48px ("You know React?") and 40px (capability list items).
- **body** — Poppins 19.2px / 400, the most-read size, for paragraphs such as "Developer experience is a core principle of Qwik."
- **button** — Poppins 16px / 400 for button labels; some buttons measured at 500 or 600.
- **nav** — Poppins 14px / 700 / 16.8px for the super-header and nav.
- **link** — Poppins 16px / 400 / 24px.

Negative tracking is applied proportionally at large sizes (-0.72px at 24px, -0.66px at 22px). Poppins is a free Google Font, so no substitute is needed.

## Layout

The desktop page is 1280px wide. The hero is centred (content x=398 to x=882). Later sections are centred blocks of varying widths: the capability list and code window form a two-column layout; the showcase is a horizontal carousel with arrow buttons; the media section is a three-card carousel; the team section is three portraits across. The extractor recorded up to eight items in a row (nav and footer link groups).

The CSS declares `--header-nav-height: 80px`, `--super-header-height: 40px` and `--container-max-width: 1400px`. Gaps cluster at 6px, 16px, 25px, 10px and 40px; paddings at 5px, 8px, 20px, 30px and 16px, plus 80px (4 uses). Spacing tokens span 3px to 16.66px. The rhythm is cinematic: each section owns most of a screen, separated by glow and empty dark space.

## Elevation & Depth

Only one box-shadow was measured: `rgba(0, 0, 0, 0.36) 0px 12px 28px 0px` on the super-header link. Depth on this page comes from lighting rather than shadows — blurred radial blue and violet glows behind sections, glossy 3D objects (the lightning bolt), and code windows that sit as dark slabs on the glow. Portraits are framed by glowing circular rings. The white "You know React?" card is the one strong figure-ground contrast and overlaps the dark code window beside it.

## Shapes

Rounded rectangles dominate. Buttons use **sm 8px** (11 uses); cards and code windows use **md 11px** (14 uses, the most common radius) and **lg 16px**; **xl 17px** and **xs 6px** appear once each. The Search control is a **2xl 40px** pill with a 2px #006ce9 border. Circles (100% and 50% radius, 10 uses combined) are used for portraits, carousel arrows and avatar frames. Large decorative type (the outlined "Showcase" word) adds a typographic shape behind the carousel.

## Components

- **Primary button** — "View Examples": #18b6f6 fill, white Poppins 16px/400, 8px radius, 15px 35px padding, 55px tall.
- **Secondary blue button** — "See more examples": #31adf6, same shape, 54px tall.
- **Purple button** — "Learn More": #ac7ef4, white 16px/600, 8px radius, 15px 35px, 46px tall; "See All" uses #ac7ff4.
- **Dark button** — "Explore the docs": #1d2023 fill, white 16px/500, 8px radius, 14px 25px padding, 52px tall.
- **Search pill** — #ebedf0 fill, #006ce9 14px/500 text, 2px #006ce9 border, 40px radius, 36px tall; on hover the fill turns white with a `rgb(84, 104, 255) 0px 0px 0px 2px inset` ring.
- **Super-header link** — "Qwik v2 Lighter, faster, better.": #05070d fill, white 14px/700, with a 12px/28px shadow.
- **Code window** — dark slab with red/yellow/green dots, syntax-coloured code, 11px radius.
- **Card** — 11px radius, 1px #0e201a border, #0e201a text.
- **Media card** — video thumbnail with a type label (Video, Podcast, Course) and a title below.
- **Footer** — white, #0e201a text, Qwik logo left, four link columns, "Made with [U+2665] by The Qwik Team".

## Design System Architecture

There is no public Qwik brand-guidelines page (https://qwik.dev/brand returned HTTP 404). The documentation site lives in the framework monorepo at https://github.com/QwikDev/qwik under `packages/docs`, and its stylesheet is https://raw.githubusercontent.com/QwikDev/qwik/main/packages/docs/src/global.css, which contains an `@theme` block and `html.dark` / `html[data-theme='dark']` selectors. The main-branch `font-faces.ts` at the time of reading loads Tomorrow and Ubuntu Sans font files, while the live page measured Poppins; the live site and the main branch differ.

On the live page the de-facto tokens are CSS custom properties: `--qwik-dark-purple-bg: #151934`, `--qwik-blue: #0093ee`, `--qwik-dark-blue: #006ce9`, `--qwik-light-blue: #daf0ff`, `--qwik-purple: #ac7ef4`, `--qwik-dark-purple: #6000ff`, `--text-color: #0e201a`, `--bg-color: #fff`, plus layout variables (`--header-nav-height: 80px`) and Tailwind v4 colour and radius scales (`--radius-sm: .25rem`, `--color-sky-500`). DocSearch variables (`--docsearch-primary-color: #5468ff`) style the search pill.

## Do's and Don'ts

**Do**
- Keep the page on #151934 with white text and blue/violet radial glows.
- Highlight one key phrase per headline in #18b6f6 or #ac7ef4.
- Set headlines in Poppins 600 with negative tracking (-2.4px at 80px).
- Use 8px-radius buttons with generous 15px 35px padding.
- Show code in dark windows with traffic-light dots.
- Use glossy 3D objects and glows as illustration.

**Don't**
- Don't use the light #ffffff surface except for the footer and single contrast cards.
- Don't mix in other typefaces on the marketing page.
- Don't use pills for primary buttons; only the Search control is a 40px pill.
- Don't put #0e201a text on the dark canvas; it is the ink for light surfaces.
- Don't add drop shadows to cards; depth comes from glow.

## Responsive Behavior

Measured at 390px: the hero text becomes Poppins 48px / 600 / 62.4px with -1.44px tracking (from 80px / 600 / 90px); the body paragraph measured 16px / 400 (from 19.2px). Two header links are visible plus a menu toggle labelled "Toggle right menu" (desktop: ten links, no toggle). The super-header link measured 13px / 700 and spans the full 390px width. Content bands sit between x=20 and x=370. The maximum items in a row measured six. Intermediate breakpoints were not measured.

## Iteration Guide

1. Canvas #151934, ink #ffffff, Poppins throughout.
2. Hero: 80px/600 Poppins, -2.4px tracking, one phrase in #18b6f6.
3. Buttons: 8px radius, 15px 35px padding; blue #18b6f6 for primary, purple #ac7ef4 for secondary marketing actions, #1d2023 for docs.
4. Cards and code windows: 11px radius; light cards use #0e201a text.
5. Use the `--qwik-*` custom properties for any new colour and cite them.
6. Footer and any light section: #ffffff background, #0e201a text.
