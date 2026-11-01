---
version: alpha
name: 14islands
category: "Agencies & Studios"
description: "14islands' agency site is a near-monochrome editorial page: white #ffffff and #f2f2f2 grounds, almost-black #070707 text with grey #a2a2a9 and #797979 highlight words, Aften Screen at 160px/400 (-8px tracking) for the 'Design & Technology' headline and 23.7037px for captions, BentonSans 12px uppercase labels, a 3.7037px small radius and no shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f2f2"
  ink: "#070707"
  primary: "#a2a2a9"
  ink-highlight-dark: "#797979"
  sand: "#eae5df"
  sand-highlight: "#a59d92"
  beige-highlight-bg: "#e4ded7"
  dark-highlight-bg: "#26272a"
typography:
  display:
    fontFamily: AftenScreen, sans-serif
    fontSize: 160px
    fontWeight: 400
    lineHeight: 128px
    letterSpacing: "-8px"
  display-mobile:
    fontFamily: AftenScreen, sans-serif
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-3px"
  headline:
    fontFamily: AftenScreen, sans-serif
    fontSize: 88.8889px
    fontWeight: 400
    letterSpacing: "-3.55556px"
  lead:
    fontFamily: AftenScreen, sans-serif
    fontSize: 66.6667px
    fontWeight: 400
    lineHeight: 66.6667px
    letterSpacing: "-2.66667px"
  lead-mobile:
    fontFamily: AftenScreen, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: "-1.2px"
  body:
    fontFamily: AftenScreen, sans-serif
    fontSize: 23.7037px
    fontWeight: 400
    letterSpacing: "-0.948148px"
  label:
    fontFamily: BentonSans, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
    textTransform: uppercase
  label-mobile:
    fontFamily: BentonSans, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    textTransform: uppercase
rounded:
  xs: 3.7px
  sm: 5px
spacing:
  s1: 10px
  s2: 22.22px
  s3: 37.04px
  s4: 48.15px
  s5: 96.3px
  s6: 100px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
  section-label:
    textColor: "{colors.primary}"
    typography: "{typography.label}"
  project-card:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.lead}"
    padding: 100px 0px 0px
---

# 14islands

## Overview

14islands (14islands.com, page title "14islands | Creative design & technology agency") says on its home page that "14islands designs and builds digital products, brands, and experiences — with offices in Stockholm and Reykjavík." Its Culture page ("Meet the islanders") describes an international team and four values — "Be inclusive", "Make waves", "Care to share", "Enjoy the ride" — plus Hack Days for "passion projects, experiment, and learn."

The home page is a calm, very large-type editorial layout. The capture opens on a light grey #f2f2f2 band with the small numeric "14islands" logotype top left, a small uppercase line "CREATIVE PARTNER / WE CRAFT DIGITAL PRODUCTS AND BRANDS", and the headline "Design & Technology" set across the full width in Aften Screen at 160px: "Design" at left, the "&" in grey #a2a2a9, "Technology" pushed to the right. Below sits a wide dark showreel panel with UI screens and photography. Then a two-tone statement — "Branded Experiences" in grey, "that grow your business" in black — and a long two-column grid of project cards: image, then a caption "Cartier — Luxury", "Cogent — AI Technologies", "Xtend Health — Health Tech", where the client is black and the category grey. The grid gives way to a ruled list of further projects, the office sentence in large type with grey highlighted words ("digital products, brands, and experiences"), a short culture blurb, and the footer: "Let's make something great together" and "hello@14islands.com" in large type, small uppercase social links at the bottom.

The art direction is product-led and photographic: devices, interfaces and portraits in muted, natural colour, framed by a white page.

## Colors

The root CSS declares the palette by name:

- **Canvas `#ffffff`** (`--color-white`) — the body and the main content band.
- **Page-largest `#f2f2f2`** (`--color-background`) — the light grey of the hero band and of the mobile header.
- **Ink `#070707`** (`--color-almost-black`) — the most-read text colour: headlines, client names, nav. The site's actions are #070707 text links.
- **Primary `#a2a2a9`** (`--color-grey-highlight-light`) — the signature second tone: the "&" in the hero, "Branded Experiences", the highlighted words in the office sentence, the category half of each project caption and the "CREATIVE PARTNER" label (467 measured characters). The site has no filled CTA; this grey is its accent.
- **Ink-highlight-dark `#797979`** (`--color-grey-highlight-dark`) — the darker highlight grey, measured in the footer.
- **Sand `#eae5df`**, **sand-highlight `#a59d92`**, **beige-highlight-bg `#e4ded7`** and **dark-highlight-bg `#26272a`** — declared theme colours (`--color-sand`, `--color-sand-highlight`, `--color-beige-theme-animated-text-highlight-bg`, `--color-dark-theme-animated-text-highlight-bg`). Their names show a beige theme and a dark theme for animated text highlights; neither theme was active on the measured home page.

The `--color-aila-*` variables (yellow #ffca6b, purple #a5a9fd) and the `--leva-*` variables belong to a client showcase and a developer control panel respectively and are not brand colours. The footer area also shows dark bands (#070707, #020202) in the measurement.

## Typography

Two families, self-hosted through Next.js (`/_next/static/media/`):

- **Aften Screen** (`AftenScreen`, plus an `AftenScreenItalic` face) — every large and reading size, always weight 400 with negative tracking proportional to size (-5% at 160px, -4% at the smaller sizes):
  - Display: 160px, line-height 128px, letter-spacing -8px ("Design & Technology").
  - Headline: 88.8889px, letter-spacing -3.55556px.
  - Lead: 66.6667px/66.6667px, letter-spacing -2.66667px (the office sentence, the footer invitation).
  - Body: 23.7037px, letter-spacing -0.948148px — the most-read size (713 characters: project captions and list rows).
- **BentonSans** (`BentonSans-Regular`) — 12px/400/16.8px uppercase for nav ("WORK, SERVICES, CULTURE, JOURNAL, AI, CONTACT"), labels and small links.

An `Inter` face is also declared in `@font-face` but no measured element uses it. All measured text is weight 400; hierarchy comes from size, tone (black vs grey) and the switch between Aften Screen and small BentonSans capitals. The odd fractional sizes are computed values (the CSS also declares `--indent: max(0.9375rem, 3.7615740741vw)` and `--menuNavigationHeight: max(5rem, 7.6967592593vw)`).

## Layout

Content runs from x = 48 to 1232 at 1280px. The hero headline spans the full content width, split left/right. The project grid has two equal columns (`maxCardColumns` 2), each card an image above a single caption line; the measured gaps are 10px (most frequent), 37.037px and 22.2222px. Measured paddings are 48.1481px (8 elements), 100px (the footer's top padding) and 96.2963px.

Small text blocks (labels and short descriptions) are placed in a narrow column starting near the centre of the page, while big statements run from the left margin, which gives the page a strong asymmetric rhythm. The page is long (9,267px measured) with generous white space between sections.

## Elevation & Depth

None. No box-shadow and no border colour are measured. Sections are separated by background changes (the #f2f2f2 hero band, white content, dark bands near the footer) and by white space; the further-projects list uses thin horizontal rules shown in the capture. Imagery provides all depth.

## Shapes

Measured radii are 3.7037px (20 elements) and 5px (1 element); the extractor did not record which elements carry them. Everything else computes square. The logo is a compact numeric wordmark ("14islands") drawn in SVG at 113×27px.

## Components

- **Header** — logotype at left, uppercase BentonSans 12px nav at right ("WORK", "SERVICES", "CULTURE", "JOURNAL", "AI", "CONTACT"); 7 header links visible. Hover changes only opacity.
- **Two-tone headline** — Aften Screen large type where a phrase or glyph is set in #a2a2a9 against #070707.
- **Section label** — BentonSans 12px uppercase in #a2a2a9 ("CREATIVE PARTNER") with a short black description under it and a small "SERVICES →"-style link.
- **Project card** — image, then a caption line at 23.7037px: client in #070707, " — Category" in #a2a2a9.
- **Project list** — rows of client and category on thin rules, below the grid.
- **Footer** — "Let's make something great together" and "hello@14islands.com" at 66.6667px, small uppercase links (Instagram, X/Twitter, LinkedIn, Privacy) and copyright at the bottom.

## Design System Architecture

No public 14islands design system, brand guideline or press kit was found on the pages opened (https://www.14islands.com/culture links only to social profiles, contact and privacy). The de-facto system is in the shipped CSS variables of the Next.js site: named colours with `--rgb` companions for alpha use (`--color-almost-black`, `--color-background`, `--color-grey-highlight-light/dark`, `--color-sand`, `--color-sand-highlight`), per-theme animated-text highlight backgrounds (beige and dark), a library of easing curves (`--ease-quad-in-out` cubic-bezier(0.455,0.03,0.515,0.955), `--ease-expo-out` cubic-bezier(0.19,1,0.22,1), `--ease-back-out` and others), fluid layout constants (`--indent`, `--menuNavigationHeight`) and named breakpoints `--breakpoint-medium` 600px, `--breakpoint-desktop` 900px and `--breakpoint-large` 1400px. The media queries match: `(min-width:900px)` (73 rules), `(max-width:899px)`, `(min-width:600px)` and `(min-width:1400px)`.

## Do's and Don'ts

**Do**
- Set statements in very large Aften Screen at weight 400 with tight negative tracking.
- Use two tones only: #070707 and grey #a2a2a9, switching within one sentence for emphasis.
- Pair the large type with tiny BentonSans uppercase labels.
- Caption work as "Client — Category" with the category in grey.
- Keep the layout asymmetric: big type from the left margin, small text in a narrower column.
- Keep corners at or near square (radii measured are 3.7037px and 5px) and shadow-free.

**Don't**
- Don't introduce colour accents; colour belongs to the case imagery.
- Don't use bold; all measured text is 400.
- Don't use the `--color-aila-*` or `--leva-*` values as brand colours.
- Don't add buttons where a text link works.
- Don't crowd sections; white space carries the pacing.

## Responsive Behavior

Measured at 390px wide:

- The hero headline becomes 60px/60px with -3px tracking (desktop 160px/128px/-8px).
- The lead sentence becomes 30px/30px with -1.2px (desktop 66.6667px).
- Labels grow from 12px to 14px/19.6px BentonSans uppercase.
- The most-read size is 20px, followed by 14px, 60px, 35px and 30px.
- The header has a #f2f2f2 background, 1 visible link and a menu toggle ("MENU" / "CLOSE").
- Content spans x = 15 to 375.
- The project grid keeps 2 columns (`maxCardColumns` 2).

The declared breakpoints are 600px, 900px and 1400px. Layout between 390px and 1280px was not measured.

## Iteration Guide

1. White page, #f2f2f2 hero band, #070707 text, grey #a2a2a9 as the only second tone.
2. Load Aften Screen (400) for all large and reading text and BentonSans for 12px uppercase labels.
3. Set the hero at 160px/128px with -8px tracking, split across the width, with the "&" in grey.
4. Build a two-column project grid with 10px gaps and "Client — Category" captions at 23.7037px.
5. Use two-tone sentences at 66.6667px for the office line and the footer invitation.
6. Use opacity for hover; no colour fills.
7. On mobile: 60px hero, 30px lead, 14px labels, 15px side margins, menu toggle.
