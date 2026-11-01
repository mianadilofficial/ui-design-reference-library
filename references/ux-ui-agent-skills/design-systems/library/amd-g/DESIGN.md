---
version: alpha
name: AMD
category: "Consumer Electronics"
description: "AMD.com home: a black #000000 canvas lit by cyan light-trail imagery, Klavika 54.4px/600 headlines, Open Sans 16px/24px body in #f8f9fa, AMD cyan #00c2de for outlined 2px-radius buttons and accent words, #2899ff product links, and 12px-radius cards edged in translucent white."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#00c2de"
  surface-card: "#111112"
  surface-glass: "#1a1a1bcc"
  ink-soft: "#f8f9fa"
  link: "#2899ff"
  ink-muted: "#9d9fa2"
  hairline: "#00000020"
  card-border: "#ffffff2e"
typography:
  display:
    fontFamily: Klavika, arial, sans-serif
    fontSize: 54.4px
    fontWeight: 600
    lineHeight: 56px
  display-mobile:
    fontFamily: Klavika, arial, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 35.2px
  subheading:
    fontFamily: "\"Open Sans\", arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: "\"Open Sans\", arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"Open Sans\", arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Open Sans\", arial, sans-serif"
    fontSize: 15.6224px
    fontWeight: 600
    lineHeight: 23.4336px
    letterSpacing: 0.468672px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 5px
  xl: 12px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 8.1px
  s5: 10px
  s6: 16px
  s7: 17px
  s8: 26px
  s9: 34px
  s10: 36.24px
components:
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 34px
    height: 57px
    borderColor: "{colors.primary}"
  button-subscribe:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 34px
    boxShadow: rgb(0, 0, 0) -1px 1px 0px 0px, rgba(133, 133, 133, 0.62) -1px 1px 0px 0px inset
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.ink-soft}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.card-border}"
  card-feature:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-soft}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# AMD

## Overview

This file documents the AMD home page as measured at `https://www.amd.com/en.html` (title "AMD ׀ together we advance_AI"). The page is dark from top to bottom: a black 86px header, a hero with "Your Trusted Partner for Advancing AI" where the words "Advancing AI" are set in AMD cyan, flowing blue-and-cyan light-trail imagery behind the content, then a row of three news cards, a "Why AMD" section of three dark feature cards, a logo wall ("Leading Businesses Trust AMD"), an "A Comprehensive AI Portfolio" carousel, a "Developer Central" promo, "Latest News" and a black footer.

The mood is technical and nocturnal. Colour is restricted to one accent — cyan `#00c2de` — plus a link blue `#2899ff` for product links ("Instinct GPUs >", "EPYC CPUs >"). Everything else is black, near-black panels and white or off-white text. The microcopy is enterprise-direct: small all-caps cyan eyebrows ("AI SOLUTIONS", "AI PORTFOLIO", "ACCELERATE AI FOR DEVELOPERS"), short headings, and action labels such as "Explore AI Solutions", "See How", "Read News Release", "Explore Developer Central".

## Colors

Backgrounds by area: `#000000` (7421), `#1a1a1bcc` (1498), `#111112` (318), `#2222224d` (13). Text by characters: `#ffffff` (2239), `#f8f9fa` (1777), `#2899ff` (640), `#9d9fa2` (595), `#00c2de` (151).

- **canvas `#000000`** — the page as the viewer sees it; header, sections and footer are black.
- **page-body `#ffffff`** — the `<body>` element's own background. It is covered by black sections and is not visible in the capture; keep it only so embedded content inherits a defined base.
- **ink `#ffffff`** and **ink-soft `#f8f9fa`** — headings and card copy. The off-white is the value of `--bs-gray-100` in the page's variables.
- **primary `#00c2de`** — AMD cyan: button borders, the accent words in the hero, eyebrows, and the selected-card glow. The site maps it onto `--bs-teal: #00c2de`.
- **link `#2899ff`** — inline product links inside portfolio cards.
- **ink-muted `#9d9fa2`** — dates and secondary text in news cards.
- **surface-card `#111112`** — the "Why AMD" feature cards.
- **surface-glass `#1a1a1bcc`** — translucent panels over imagery.
- **card-border `#ffffff2e`** — the 1px border around news cards. **hairline `#00000020`** — light dividers.

Bootstrap's default `--bs-primary: #0d6efd` and the floating accessibility-widget colours are not AMD colours and are left out.

## Typography

Fonts loaded: Open Sans 400/500/600/700, Klavika 500/700, plus Font Awesome icon fonts. Open Sans carries 5108 measured characters, Klavika 241. Klavika is the display face; arial is the shipped fallback and the substitute to use if Klavika is not licensed.

- **display** — Klavika 54.4px / 56px, weight 600. Hero headline.
- **subheading** — Open Sans 16px / 24px, 600. Card titles ("Introducing AMD Helion, Agentic AI Compute at Rack Scale").
- **body** — Open Sans 16px / 24px, 400.
- **nav** — Open Sans 20px / 24px, 400 (measured top-level nav link).
- **button** — Open Sans 15.6224px / 23.4336px, 600, letter-spacing 0.468672px.

The fractional sizes (15.6224px, 19.3696px, 33.6672px) come straight from the computed styles. The size distribution is led by 14px (2797 chars) and 16px (1688), then 19.3696px (495). Section heads such as "Why AMD" measure 48px at weight 500. Weights in use: 400, 600, 500, 700.

## Layout

Desktop capture: 1280px wide, 5619px tall. Content runs from x=90 to about x=1190, so the side margin is roughly 90px. The hero band is 252px tall before the imagery band (620px) that holds the three news cards. "Why AMD" is a 3-column band with centered 48px heading; the portfolio and news carousels show four cards with circular arrow buttons at either edge and dot pagination below. Measured gaps: 8px (12), 60px (4), 16px, 26px. Most common paddings: 16px, 17px, 26px, 10px, 34px. The header shows 9 visible links plus account, language, search and cart icons. The logo wall below "Leading Businesses Trust AMD" is a loose grid of monochrome white partner logos (AWS, Oracle, Google Cloud, Microsoft, Dell, Lenovo and others) on black, with generous vertical spacing and a single outlined "See How" button underneath.

## Elevation & Depth

Measured shadows: `rgba(0, 0, 0, 0.24) 0px 2px 6px 0px` (14 uses), `rgba(0, 0, 0, 0.1) 0px 8px 16px 0px` (4), `rgba(0, 0, 0, 0.24) 0px 6px 16px 0px`, `rgba(0, 0, 0, 0.28) 0px 4px 12px 0px`. On black these shadows are nearly invisible; depth is carried by the glowing light-trail imagery and by the cyan glow on the active card: `rgba(0, 194, 222, 0.5) 0px 0px 0px 1px, rgba(0, 194, 222, 0.35) 0px 0px 18px 0px`. The subscribe button uses a bevel: `rgb(0, 0, 0) -1px 1px 0px 0px, rgba(133, 133, 133, 0.62) -1px 1px 0px 0px inset`.

## Shapes

Measured radii: `3px 3px 0px 0px` (13 — tab tops), 2px (10 — buttons), 100% and 50% (circular icons and carousel arrows), 4px (9), 12px (8 — cards), 5px (8), and `12px 12px 0px 0px` (3 — card image tops). The system is squarish: buttons are nearly sharp at 2px, cards soften to 12px.

## Components

- **button-outline** — "Explore AI Solutions": transparent fill, white 15.6224px/600 text, 1px solid `#00c2de` border, 2px radius, padding 16px 34px, 57px tall. Measured hover: the label gains an underline; fill and border do not change.
- **button-subscribe** — "Subscribe to the latest news from AMD" in the footer: 2px radius, 16px 34px padding, bevel shadow, 79px tall.
- **card** — news cards, 360×425px, 12px radius, 1px `#ffffff2e` border, image top, 16px/600 title, body copy, cyan "Read News Release" link. The highlighted card swaps to a 1px `#00c2de` border with the cyan glow.
- **card-feature** — "Why AMD" cards on `#111112`, title and paragraph.
- **nav** — black header, white Open Sans links ("Products", "Solutions", "Resources & Support", "Shop").
- **footer** — black; social icons, five link columns ("Company", "News & Events", "Resources", "Partners", "Investors") and a legal row.

## Design System Architecture

No public AMD design system or brand-guideline page could be opened for this file (the attempts are logged in SOURCES.json). The de-facto system is visible in the shipped CSS: about 149 root variables combining Bootstrap (`--bs-*`, with `--bs-teal` set to AMD cyan `#00c2de`), Tailwind (`--tw-*`) and an `--atomic-*` layer (`--atomic-on-primary: #fff`, `--atomic-border-radius: .25rem`, `--atomic-border-radius-lg: .75rem`, `--atomic-border-radius-xl: 1rem`, `--atomic-visited: #752e9c`). Components are therefore Bootstrap-structured with AMD's colour overrides on top.

## Do's and Don'ts

- Do keep the canvas black and let imagery supply light.
- Do use cyan `#00c2de` sparingly: outlines, accent words, eyebrows, focus glow.
- Do keep buttons outlined with a 2px radius; the home page has no filled CTA.
- Do set headlines in Klavika and everything else in Open Sans.
- Don't use Bootstrap blue `#0d6efd` as a brand colour.
- Don't round buttons beyond 2px or cards beyond 12px.
- Don't put long paragraphs in cyan; it is an accent, not a text colour.

## Responsive Behavior

Measured at 390px: the hero headline goes from 54.4px/56px to 32px/35.2px; body copy stays 16px/24px. The header shows 5 visible links and a menu toggle labelled "Toggle navigation" (desktop: 9 links and a "Products" toggle). Up to 3 card columns were counted on mobile versus 15 on desktop (carousel items included). Mobile font sizes by characters: 14px, 16px, 17.28px, 15.68px, 25.6px, 32px, 28px, 48px. Carousel and grid behaviour at intermediate widths was not measured.

## Iteration Guide

1. Set `canvas` black and `ink` white; use `ink-soft` for longer copy.
2. Headline in Klavika `display`, with one or two accent words in `primary`.
3. Add `button-outline` CTAs — transparent, cyan border, 2px radius.
4. Build card rows from `card` (bordered) or `card-feature` (`#111112` fill).
5. Use `link` blue only for inline product links inside cards.
6. Re-measure before adding filled buttons; none were found on the home page.
