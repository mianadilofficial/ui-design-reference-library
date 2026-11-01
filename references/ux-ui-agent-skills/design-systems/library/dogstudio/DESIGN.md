---
version: alpha
name: Dogstudio
category: "Agencies & Studios"
description: "Dogstudio (Dogstudio / DEPT.) is a dark, cinematic studio site: near-black #131419 canvas, white #ffffff and periwinkle-tinted translucent greys (#a0a8dcb3, #bbc2e54d) for text, thin red #e43333 accent lines, GT Sectra Display Bold at 120px/700 for the hero, Heebo 200–400 for lists and body (80px project names, 14px/24px copy) and Gilroy 9px tracked uppercase labels."
colors:
  canvas: "#131419"
  ink: "#ffffff"
  primary: "#e43333"
  accent-text: "#ff4940"
  surface-black: "#000000"
  surface-deep: "#0e101a"
  scrim: "#131419cc"
  ink-muted: "#a0a8dcb3"
  ink-faint: "#bbc2e54d"
  ink-label: "#bbc2e566"
  ink-label-strong: "#646d9e"
  ink-ghost: "#ffffff40"
  hairline: "#b6c1fa1a"
typography:
  display:
    fontFamily: "\"GT Sectra Display\", Times, Georgia, serif"
    fontSize: 120px
    fontWeight: 700
    lineHeight: 107px
    letterSpacing: "-4.8px"
  section-title:
    fontFamily: "\"GT Sectra Display\", Times, Georgia, serif"
    fontSize: 50px
    fontWeight: 400
    lineHeight: 50px
  project-list:
    fontFamily: Heebo, Helvetica, Arial, sans-serif
    fontSize: 80px
    fontWeight: 200
    lineHeight: 60px
  lead:
    fontFamily: Heebo, Helvetica, Arial, sans-serif
    fontSize: 23px
    fontWeight: 300
    lineHeight: 34.96px
  city:
    fontFamily: Heebo, Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 300
    lineHeight: 18px
  body:
    fontFamily: Heebo, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: Heebo, Helvetica, Arial, sans-serif
    fontSize: 13px
    fontWeight: 500
    lineHeight: 13px
  eyebrow:
    fontFamily: "\"GT Sectra Display\", Times, Georgia, serif"
    fontSize: 8px
    fontWeight: 700
    lineHeight: 8px
    letterSpacing: 4px
    textTransform: uppercase
  label:
    fontFamily: Gilroy, Helvetica, Arial, sans-serif
    fontSize: 9px
    fontWeight: 700
    lineHeight: 9px
    letterSpacing: 3.6px
    textTransform: uppercase
rounded:
  xs: 3px
  md: 26px
  lg: 100px
spacing:
  s1: 1px
  s2: 6px
  s3: 7px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 23px
  s8: 45px
  s9: 50px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-label}"
    typography: "{typography.label}"
  project-list-item:
    textColor: "{colors.ink-faint}"
    typography: "{typography.project-list}"
  body-copy:
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
---

# Dogstudio

## Overview

Dogstudio (dogstudio.co, page title "Dogstudio. Multidisciplinary Creative Studio.") describes itself on its home page and Studio page as "a multidisciplinary creative studio at the intersection of art, design and technology", with the mission to "explore, create meaning and provoke emotions through design and storytelling." The Studio page lists offices in Chicago, Amsterdam and Paris and services from brand strategy and art direction to digital products, emerging technologies ("AR, VR, AI etc..."), interactive installations, and animation and illustration. The logo in the header reads "DOGSTUDIO / DEPT." and the cookie notice points to a deptagency.com privacy policy.

The home page is dark and cinematic. The capture opens on a full-bleed rendered scene — an animal figure in deep blues and violets among falling leaves, crossed by thin red diagonal lines — with "We Make Good Shit" stacked in four lines of white GT Sectra Display Bold at 120px, right-aligned in the left half. Under it at the right sits the 23px intro "Dogstudio is a multidisciplinary creative studio at the intersection of art, design and technology.", a 14px muted paragraph, and a row of social links (Facebook / Instagram / Dribbble / Twitter / Newsletter). Below, a tiny spaced-out "FEATURED PROJECTS" label introduces a huge list of client names in ultra-thin Heebo at 80px and 30% opacity (Tomorrowland, Navy Pier, MSI Chicago, This Was Louise's Phone, KIKK Festival 2018, The Kennedy Center, Royal Opera Of Wallonia), each with a date label in the left margin. A "THIS IS HOW WE DO IT" section follows with the serif statement "We're crafting emotional experiences aimed at improving results", two short paragraphs and a "Discover our values" link underlined in red. The footer shows the three cities, a small "We Make Good Shit" stamp and contact line "We'd love to hear from you — biz@dogstudio.be".

The capture also shows a cream browser-update banner at the very top ("Your web browser (Chrome 130) has a serious security vulnerability!" with green "Update browser" and amber "Ignore" buttons). It is triggered by the measuring browser, persisted after re-extraction, and is not part of Dogstudio's design; its colours (#5ab400, #edbc68, #fff8ea), Calibri type and 4px buttons are excluded from this document.

## Colors

- **Canvas `#131419`** — the body background, a blue-black.
- **Surface-black `#000000`** and **surface-deep `#0e101a`** — the largest measured background areas, the dark planes behind the hero scene and sections. **Scrim `#131419cc`** is the canvas at 80% alpha layered over media.
- **Ink `#ffffff`** — headlines, the intro sentence, links and the white serif statements.
- **Ink-muted `#a0a8dcb3`** — a periwinkle grey at 70% alpha for body paragraphs ("Our goal is to deliver amazing experiences…").
- **Ink-faint `#bbc2e54d`** — 30% periwinkle for the large featured-project list, so the names read as a ghosted index.
- **Ink-label `#bbc2e566`** — 40% periwinkle for the uppercase Gilroy labels ("THIS IS HOW WE DO IT", dates).
- **Ink-label-strong `#646d9e`** — the opaque periwinkle of the "FEATURED PROJECTS" eyebrow.
- **Ink-ghost `#ffffff40`** — white at 25% alpha, a measured secondary text colour.
- **Hairline `#b6c1fa1a`** — the single measured border colour, periwinkle at 10%.
- **Primary `#e43333`** — the red of the thin diagonal accent lines, the arrow before "Our Showreel" and the underline beneath "Discover our values" (measured as a background area of 477 units). **Accent-text `#ff4940`** is a measured red text colour (3 characters). There is no filled button on the page.

The palette is therefore dark blue-black surfaces, white for primary text, one periwinkle tint at several opacities for everything secondary, and red used only as a line.

## Typography

Three self-hosted families are loaded from https://dogstudio.co/app/themes/portfolio-2018/static/assets/fonts/:

- **GT Sectra Display** (`GTSectraDisplay-Bold.woff2` and a 400 cut) — the editorial serif. The hero "We Make Good Shit" (`p.home-hero-title`) probes at 120px/700, line-height 107px, letter-spacing -4.8px; the extractor also recorded -8px, -6px and -23px tracking at 120px on individual letters, which are set as separate spans. The "We're crafting emotional experiences…" statement (`p.home-about-title`) is 50px/400/50px. The "FEATURED PROJECTS" eyebrow is GT Sectra Display 8px/700 uppercase with 4px tracking.
- **Heebo** (Thin 200, Light 300, Regular 400, Medium 500) — the main sans. Project list names are 80px/200 with a 60px line-height; the intro is 23px/300/34.96px; city names are 22px/300; body copy is 14px/400/24px; the "Our Showreel" link is 13px/500/13px. In the (closed) site menu, links are 45px/200 with -0.9px tracking.
- **Gilroy** (Bold 700, Medium 500) — tiny uppercase labels: 9px/700 with 3.6px tracking (section label) and 3.24px tracking (date labels).

The contrast is deliberate: a heavy, tightly tracked serif for statements against an ultra-light sans for lists, and microscopic tracked capitals for wayfinding.

## Layout

At 1280px the main content runs from x = 26 to 1152. The hero is a full-viewport scene with the headline in the left-centre and the intro block in the right column. The featured-project list is a single left-aligned column with date labels hanging in the left margin. The "how we do it" section is asymmetric: the serif statement at left and two narrow text columns lower right, with the red link beneath. The footer places three city names in a row, social abbreviations ("Fb / Ins / Dri / Tw") at right, and a contact bar under a hairline.

Measured paddings include 7px, 10px, 6px, 1px, 8px, 9px, 50px, 45px, 200px, 355px and 23px; no flex/grid gaps were recorded. Vertical spacing between sections is very large — the capture shows several hundred pixels of empty dark space between the hero, the project list and the statement section.

## Elevation & Depth

Depth comes from the 3D hero scene and layered translucency, not from shadows. The only measured shadows are `rgba(0, 0, 0, 0.4) 0px 0px 2px 0px` (on the browser-update banner buttons, excluded), `rgba(0, 0, 0, 0.2) 0px 0px 5px 0px` and `rgba(0, 0, 0, 0.15) 0px 1px 1px 0px`, each on one element. Translucent text (30–70% periwinkle) and the 80% canvas scrim create the sense of layers receding into the dark background. Thin red diagonal lines cut across sections and add a sense of motion.

## Shapes

Measured radii are 3px (6 elements), 26px (2), 100px (1), and 4px only on the excluded banner buttons. The visible interface is almost entirely hard-edged: type, lines and full-bleed imagery. The recurring graphic shapes are thin straight lines — the red diagonals, the red underline under "Discover our values", the small red arrow before "Our Showreel" — and a small white dot on the right edge of the hero.

## Components

- **Header** — "DOGSTUDIO / DEPT." logotype left, a red arrow and "Our Showreel" link (13px/500 white) centre, a menu toggle ("Toggle menu") right.
- **Hero** — full-bleed scene, 120px/700 serif headline, 23px intro, 14px muted paragraph, slash-separated social links.
- **Featured project list** — eyebrow "FEATURED PROJECTS" (8px serif caps, 4px tracking, #646d9e), then names at 80px/200 Heebo in #bbc2e54d with Gilroy date labels ("2020 - Ongoing") at left.
- **Statement block** — Gilroy label, 50px/400 serif statement, two 14px paragraphs in #a0a8dcb3, and a white link with a red underline.
- **Footer** — city names at 22px/300 ("Chicago .", "Amsterdam .", "Paris ."), the small serif stamp, abbreviations for social links, and a bottom bar with contact email, "Privacy Policy" and a language selector, under a thin divider line.
- **Menu (closed in the measurement)** — links "The Studio", "Our Cases", "Careers", "Our Values", "Contact" at 45px/200 Heebo in rgba(160, 168, 220, 0.8) (probe).

## Design System Architecture

No public Dogstudio design system, brand guidelines or press kit was found on the pages opened (https://dogstudio.co/studio/ links only to the showreel, social profiles, newsletter, cases, careers, values, contact and the privacy policy). The site declares no meaningful CSS custom properties (`rootVars` only has `--vh`). The de-facto system lives in the WordPress theme `portfolio-2018` (`/app/themes/portfolio-2018/static/`): three font families with fixed roles, BEM-like class names such as `home-hero-title`, `home-about-title` and `home-cases-name`, and animation utility classes (`fx-parent`, `js-in-view`, `appear-fade-up`) that reveal text on scroll.

The stylesheet uses em-based breakpoints, most often `(max-width:47.99em)` / `(min-width:48em)` (767.84/768px, 155 and 115 rules), then `(max-width:50.9275em)` (814.84px) and `(max-width:64.365em)` (1029.84px), with smaller steps down to 299px.

## Do's and Don'ts

**Do**
- Work on a blue-black #131419 canvas with white primary text.
- Use one periwinkle tint at different opacities (#a0a8dcb3, #bbc2e566, #bbc2e54d) for all secondary text.
- Pair a bold, tightly tracked serif (GT Sectra Display 700) with ultra-light Heebo (200/300).
- Label sections with tiny tracked uppercase (Gilroy 9px, 3.6px tracking).
- Use red #e43333 only as thin lines, arrows and underlines.
- Leave large empty dark space between sections.

**Don't**
- Don't use filled buttons or rounded pills; actions are text links.
- Don't treat the browser-update banner colours (#5ab400, #edbc68, #fff8ea) or Calibri as brand.
- Don't brighten the project list; it is meant to read at 30% opacity.
- Don't add drop shadows to separate content.
- Don't set body copy in pure white; it is #a0a8dcb3.

## Responsive Behavior

Measured at 390px wide:

- The hero letters are 80px/700 (desktop 120px).
- Featured project names in the mobile list measure 30px/700 white, on dark bands (#14161e, #000b24).
- The most-read mobile sizes are 20px, 14px, 30px and 23px.
- Body copy stays 14px/400/24px in #a0a8dcb3.
- Content spans x = 35 to 355.
- A menu toggle labelled "Toggle menu" is visible and no header links are counted; `maxCardColumns` is 5.

The stylesheet's main breakpoints are 768px, 815px and 1030px (em-based). Tablet layouts were not measured.

## Iteration Guide

1. Start from #131419 with a full-bleed dark scene for the hero.
2. Set the headline in GT Sectra Display 700 at 120px/107px with -4.8px tracking, stacked one word per line.
3. Put a 23px/300 Heebo intro and a 14px/24px #a0a8dcb3 paragraph beside it.
4. List work as 80px/200 Heebo names at 30% periwinkle with tiny Gilroy date labels.
5. Introduce sections with 8–9px tracked uppercase labels.
6. Add thin red #e43333 diagonals and a red underline on the key link.
7. Keep corners square, avoid shadows, and give sections generous dark spacing.
