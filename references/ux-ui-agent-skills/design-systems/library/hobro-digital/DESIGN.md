---
version: alpha
name: HOBRO
category: "Agencies & Studios"
description: "hobro.digital, the site of HOBRO, a design-first full-cycle digital agency: alternating #ffffff and #000000 bands, PPNeueMontreal text at 18px, AkkuratMono uppercase 14px labels, giant Kamerik205 and FreigBigProLigIta italic display (193.333px), pill buttons with a 33px radius, and a mint #00fb96 brand variable used for the cursor dot."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-grey: "#dddddd"
  hairline: "#4141413b"
  accent-mint: "#00fb96"
  brand-sand: "#dbdcca"
typography:
  display:
    fontFamily: PPNeueMontreal, Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 500
  display-mobile:
    fontFamily: Kamerik205, Arial, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 35.2px
  heading:
    fontFamily: FreigBigProLigIta, Arial, sans-serif
    fontSize: 193.333px
    fontWeight: 300
    lineHeight: 170.133px
    letterSpacing: "-1.93333px"
    textTransform: uppercase
  subheading:
    fontFamily: AkkuratMonoLLWeb, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
    textTransform: uppercase
  body:
    fontFamily: PPNeueMontreal, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
    letterSpacing: "-0.27px"
  link:
    fontFamily: PPNeueMontreal, Helvetica, Arial, sans-serif
    fontSize: 53.3333px
    fontWeight: 500
    lineHeight: 46.9333px
    letterSpacing: "-0.533333px"
rounded:
  xs: 14px
  sm: 15px
  md: 33px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.md}"
    padding: 18px 32px 19px
    height: 51px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    borderColor: "{colors.ink}"
    transform: matrix(0.956306, -0.292369, 0.292369, 0.956306, 0, -16)
  footer:
    textColor: "{colors.ink}"
    padding: 20px 0px 0px
---

## Overview

HOBRO (page title "HOBRO - Design-first full-cycle digital agency") is a digital design and development agency. The site text states that it is headquartered in Calgary, Canada, with a distributed team across North America and Europe; the footer lists an address (200-638 11 Ave SW, Calgary, AB), a phone number, social links (LinkedIn, Instagram, Dribbble, Facebook, X) and a privacy policy, and an Awwwards listing is linked. The desktop pass measured 1222 visible elements on a 1280px-wide, 14728px-tall page, and it is a dense, theatrical scroll.

In the capture the page opens on a full-bleed, colour-graded close-up photograph (warm reds and oranges) behind a huge white "HOBRO D." wordmark in a heavy grotesque, partly clipped at the baseline, with the monospace line "FULL-CYCLE DIGITAL AGENCY" beneath. A frosted-glass card at lower right reads "DISCOVER HOW WE CAN HELP - REQUEST OUR CAPABILITIES DECK" with a black pill button "GET YOUR COPY"; a black vertical "Site of the Day" tab from an external award site is pinned to the right edge (a third-party widget, not brand UI), and a thin loading strip runs along the very top. The next band is black: a centred paragraph about the team, a small white logo block labelled "VISION.", then a rotating-text section ("Got Project?" above big animated "LET'S TALK" letters between arc brackets). The "WHAT WE DO" band is white: a huge two-layer headline, solid black grotesque letters overlapped by a light italic serif outline, over a four-column ruled list of services (LOGO DESIGN, BRAND IDENTITY SYSTEMS, USER INTERFACE DESIGN, FRONTEND DEVELOPMENT, MOTION DESIGN, 3D MODELING, CREATIVE DIRECTION and more) in uppercase PPNeueMontreal with hairline rules between rows.

The voice is confident and compressed: short capitalised service names, one invitation ("Got Project?"), tiny monospace microcopy.

## Colors

Measured colours are black and white; the brand variables add two more.

- **Canvas {colors.canvas}** (#ffffff): the largest background (6923 area), used for the services band.
- **Ink {colors.ink}** (#000000): the main text (2667 characters) and the black bands (6146 area). **Primary {colors.primary}** (#000000) is the same black, the fill of every CTA pill; **on primary {colors.on-primary}** is #ffffff.
- **White text** (#ffffff, 1375 characters): copy on black.
- **Surface {colors.surface-3}** renamed {colors.surface-grey} (#dddddd, 449 area): the light grey of the glass card and rows.
- **Hairline {colors.hairline}** (#4141413b): the grid border, `--c-border-grid`; borders measured: #4141413b (4), #000000 (2), #0000002b (1), #ffffff (1).
- **Mint {colors.accent-mint}** (#00fb96): `--c-brand-primary` in the root variables, also the cursor dot (`--cursor-dot: var(--c-brand-primary)`); it measured 0 area on a background and so is not a visible UI fill in the capture.
- **Sand {colors.brand-sand}** (#dbdcca): `--c-brand-secondary`.

The root variables also list `--c-bg-aims: #161616`, `--c-font-error: #E6B0B0`, `--c-border-default: #636262`, `--c-scroll: #d5d4d4` and `--c-bg-primary: #000`, `--c-bg-secondary: #fff`, `--c-font-primary: #000`, `--c-font-secondary: #fff`, `--c-font-subtitle: #000`. These are cited from the root variables only.

## Typography

Four families, each with a role: **PPNeueMontreal** (2693 characters, 400 and 500) for text and navigation, **AkkuratMonoLLWeb** (1288, 500) for uppercase monospace labels and buttons, **FreigBigProLigIta** (35, weight 300 italic) for the outlined italic display and `--font-cursive`, and **Kamerik205** (26, 700) for the oversized logotype and mobile headings (`--font-title`). The root variables name them: `--font-text`, `--font-typewriter`, `--font-cursive`, `--font-title`.

- **Display** {typography.display}: PPNeueMontreal 500 22px, the nav label size (Projects, Services, Agency, Contact).
- **Mobile display** {typography.display-mobile}: Kamerik205 400, 40px/35.2px; this is the nav link size on mobile.
- **Heading** {typography.heading}: FreigBigProLigIta 300, 193.333px/170.133px, tracking -1.93333px, uppercase ("WHAT WE DO").
- **Subheading** {typography.subheading}: AkkuratMonoLLWeb 500, 14px/14px, uppercase (buttons, "DISCOVER HOW WE CAN HELP").
- **Body** {typography.body}: PPNeueMontreal 400, 18px/21.6px, tracking -0.27px.
- **Link** {typography.link}: PPNeueMontreal 500, 53.3333px/46.9333px, tracking -0.533333px ("Got Project?").

The footer wordmark is Kamerik205 700 at 160px/126.4px with -1.6px tracking. Sizes by characters: 18px (1192), 14px (738), 16px (697), 12px (411), 53.3333px (366), 20px (342), 22px (182), 160px (36). Tracking is -0.015em on text (18px at -0.27px) and -0.01em on the display.

## Layout

Full-bleed bands alternate black, white and photographic. Text blocks are centred and narrow (the about paragraph measures about the width of a column); the services list spans the full 1280px in four equal columns with hairline row rules. The header is 77px (`--header-height`) and side gutters are 0.75rem (`--side-gutters`). Measured paddings: 12px (17), 15px (4), 8px, 14px, 18px, 20px; gaps: 5px (10), 50px (8), 8px (8), 66.6667px (6), 20px (4).

## Elevation & Depth

No box shadow is measured. Depth comes from frosted glass (the translucent grey card over the photograph), overlapping outline and solid letters in the "WHAT WE DO" headline, and a custom cursor (a dot and circle: `--cursor-circle: #000`).

## Shapes

Radii: 50% (4 elements), 33px (3), 100% (2), 15px (1), 14px (1). The CTA pills are 33px ({rounded.md}); the circular outlines (rotated circle cards with a 1px #000000 border) are 50% and 100%; the glass card is 14px or 15px. Everything else is square.

## Components

- **Primary CTA ("GET CAPABILITIES DECK", "GET YOUR COPY")**: black fill, white AkkuratMono 14px uppercase label, radius 33px, padding 18px 32px 19px (51px tall) in the contact area and 8px 14px or 7px 16px 8px 14px in compact versions.
- **Nav**: white PPNeueMontreal 22px labels over the dark or image ground.
- **Link ("Got Project?")**: white, 53.3333px 500, tracking -0.533333px.
- **Circle card**: transparent with a 1px #000000 border, 100% radius, rotated (matrix(0.956306, -0.292369, 0.292369, 0.956306, 0, -16)); an ornament in the rotating-text section.
- **Footer**: black text on white at the page end, padding 20px 0px 0px, with the 160px Kamerik205 "HOBRO" wordmark.

## Design System Architecture

No public design system or brand guideline is linked: the page offers Projects, Services, Agency and Contact, a capabilities-deck download and an Awwwards listing; no search was run. The de-facto system is a CSS variable set: `--c-bg-primary` #000, `--c-bg-secondary` #fff, `--c-font-primary` #000, `--c-font-secondary` #fff, `--c-brand-primary` #00FB96, `--c-brand-secondary` #DBDCCA, `--c-border-grid` #4141413B, `--header-height` 77px, `--side-gutters` 0.75rem, `--fz-base` 16 and four font variables. The site also shows a "LOADING..." state before content.

## Do's and Don'ts

- Do alternate full black and white bands and keep type black or white.
- Do set uppercase microcopy in AkkuratMono 14px and text in PPNeueMontreal 18px.
- Do make display type enormous, mixing a solid grotesque with a light italic serif outline.
- Do use 33px pill buttons with black fill.
- Don't use the mint on large fills; it is a cursor accent only.
- Don't add shadows.
- Don't treat the award tab or loading bar as brand UI.

## Responsive Behavior

Mobile (390px) was measured. The nav items (Projects, Services, Agency, Contact) switch from PPNeueMontreal 22px to Kamerik205 40px/35.2px; the body stays 18px/21.6px with -0.27px tracking; the CTA stays AkkuratMono 14px uppercase with 33px radius and padding 18px 32px 19px; the mobile header lists the nav items followed by "EMAIL:". Breakpoints and column behaviour are not measured.

## Iteration Guide

1. Alternate #000000 and #ffffff bands; copy 18px PPNeueMontreal.
2. Use AkkuratMono uppercase 14px for labels and black 33px pills for CTAs.
3. Make one display moment per band: giant type with solid and outline layers.
4. Keep rules at #4141413b hairlines.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=hobro-digital--<page> --url=<url> --force --no-motion` before adding tokens.

### Measurement notes for rebuilders

The extractor found three CTA candidates, all black pills with the label in AkkuratMonoLLWeb 14px weight 500 uppercase and a 33px radius ("GET CAPABILITIES DECK" twice, with padding 18px 32px 19px and 8px 14px, and "GET YOUR COPY"). No outlined button, input or hover state was recorded (the hover list is empty). Weights by characters are 500 (2198), 400 (1783), 300 (35) and 700 (26). The first h1-role element is the "Projects" nav link, so the display token is a navigation label and not a large headline; the true large display type is the heading token and the 160px footer wordmark. The body element is black on black in the measurement because the first band is a photographic hero, so ink on a given band follows the band colour.
