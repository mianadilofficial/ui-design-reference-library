---
version: alpha
name: Stefan Vitasović | Creative Developer
category: "Business & Corporate"
description: "Single-screen portfolio of a creative developer in Stockholm: warm paper canvas #f1efeb, charcoal ink #252526, one blue accent #066bbd, set entirely in HelveticaNowDisplay Medium and Bold with an 80px lowercase display, zero border radius and no shadows."
colors:
  canvas: "#f1efeb"
  ink: "#252526"
  primary: "#066bbd"
typography:
  display:
    fontFamily: HelveticaNowDisplay-Medium, sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 104px
    textTransform: lowercase
  display-mobile:
    fontFamily: HelveticaNowDisplay-Medium, sans-serif
    fontSize: 46.8px
    fontWeight: 400
    lineHeight: 60.84px
    letterSpacing: "-0.2808px"
    textTransform: lowercase
  heading:
    fontFamily: HelveticaNowDisplay-Bold, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
  body:
    fontFamily: HelveticaNowDisplay-Bold, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 15.68px
rounded:
  none: 0px
spacing:
  s1: 17.78px
  s2: 87.41px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

stefanvitasovic.dev is the personal portfolio of Stefan Vitasović, titled "Creative Developer" in the page title and, per the bio on the page, Lead Creative Developer at 14islands in Stockholm, an Awwwards jury member since 2020. The home page is one 1280 by 800 viewport with no scroll (measured scrollHeight 800). It is a showpiece for motion rather than a content page: the name "stefan vitasović" is repeated in a stacked, staggered run of lowercase letters that the page source repeats several times, and the right half of the capture is filled with an abstract stack of charcoal, grey and blue horizontal bars with fine line hatching.

The voice is terse and editorial. Copy on the page is a single bio paragraph, an availability line ("Available for freelance projects:"), an email, a LinkedIn handle and the year "2025." in the bottom right. Navigation is three words: Intro, Projects, About. There is no marketing language and no buttons.

## Colors

Three colors carry the whole page, all declared as CSS variables on the root: `--color-default` #252526 (charcoal ink), `--color-aux` #f1efeb (warm paper canvas) and `--color-accent` #066bbd (blue). The extractor read the three values identically in the stylesheet corpus.

- **Canvas #f1efeb** is the body background and the dominant color of the capture.
- **Ink #252526** is the most-read text color (385 characters weighted) and also the largest-area fill (the dark bars), so the dark shapes and the body copy are the same color.
- **Primary #066bbd** is the accent. It colors the giant display name (228 characters weighted) and the blue bars in the artwork. No button was detected, so "primary" here means the accent, not a CTA fill.

Two further neutrals occur only as artwork fills: #fcfcfc (pale panels behind the bars) and #b9b8b6 (grey bars). They are measured but not promoted to tokens because they are not used for text.

## Typography

Both families are loaded as web fonts and are the only faces used: HelveticaNowDisplay-Medium for the display name and HelveticaNowDisplay-Bold for everything else. Every measured font weight is 400, because the weight is carried by the face file, not the weight property. This matters when reproducing: request the Bold and Medium files by family name rather than setting font-weight 700.

- **display**: HelveticaNowDisplay-Medium 80px / 104px, lowercase (text-transform), in the accent blue on the desktop pass.
- **display-mobile**: the same face at 46.8px / 60.84px with letter-spacing -0.2808px, recorded in the 390px mobile pass.
- **heading**: HelveticaNowDisplay-Bold 18px / 21.6px, used for the bio paragraph (the h2).
- **body**: HelveticaNowDisplay-Bold 14px / 15.68px, used for nav, contact links and footer text. One measured letter-spacing pair is 14px with -0.14px.

Helvetica Now Display is a commercial typeface; it is not documented on the page which foundry license is used. If it is unavailable, any neo-grotesque with a medium and a bold cut is a substitute, but metrics will differ.

## Layout

The layout runs on a column system declared in the root variables: `--cols: 4`, `--gutters: 5`, `--indent: max(0.625rem, 1.3888888889vw)` and `--col: calc((100vw - var(--indent) * var(--gutters)) / var(--cols))`. Breakpoints declared as variables are 380px (small), 768px (medium), 900px (desktop), 1200px (laptop) and 1440px (large).

On the 1280px desktop capture the display name spans the full width at the top (measured width 1244px, height 104px), the nav sits at the top right in a 52px by 61px block, the bio sits in the left half at 535px wide, and the artwork occupies the right-hand column. Contact and availability sit bottom left, the year bottom right. The measured paddings are 17.78px and 87.41px, kept as spacing tokens s1 and s2.

## Elevation & Depth

None. The extractor recorded no box shadows in the stylesheet or on any element. Depth in the page is made by overlap and by tone: translucent grey and blue bars layered over the charcoal bars, and pale #fcfcfc panels behind them. Do not add drop shadows.

## Shapes

Every measured element has a computed border radius of 0px; the radii list in both the frequency data and the stylesheet corpus is empty. Shapes are rectangles: horizontal bars of varying length and thickness, some filled solid, some filled with thin horizontal hatch lines. No circles, pills or rounded cards appear.

## Components

There are very few components, all text.

- **Link** (`link`): HelveticaNowDisplay-Bold 14px in ink #252526, no underline at rest, no background, no border, no padding. The hover probe measured on Projects, About, the email and the LinkedIn link: color and background do not change, text-decoration changes from none to line-through.
- **Nav / nav-link**: three links, Intro, Projects, About, 14px ink, stacked at the top right (nav block 52px by 61px).
- **Display name**: the h1, 80px lowercase blue, repeated in a staggered run of fragments as an animation effect.
- **Buttons, inputs, cards, footer**: none detected on this page.

## Design System Architecture

No public design system or brand guideline exists for this site: the pages opened (https://stefanvitasovic.dev/ and its nav targets as listed on the page) mention none. The de-facto system is a handful of root variables: three colors (`--color-default`, `--color-aux`, `--color-accent`), a column grid (`--cols`, `--gutters`, `--indent`, `--col`), five breakpoint variables and a full library of named easing curves (`--ease-quad-in-out`, `--ease-expo-out`, `--ease-quint-in-out` and so on, all cubic-bezier definitions in the sine, quad, cubic, quart, quint, expo, circ and back families). The easing library is the largest part of the system, which matches the site's purpose as a motion showcase. Source: https://stefanvitasovic.dev/ (measured rootVars).

## Do's and Don'ts

Do:
- Keep the canvas #f1efeb and ink #252526 as the only two surface and text colors, with #066bbd reserved for the display name and artwork accents.
- Set display text lowercase in the Medium face and everything else in the Bold face.
- Use line-through, not color, for link hover.
- Keep every corner square (0px).

Don't:
- Add shadows, gradients, rounded corners or filled buttons; none were measured.
- Set font-weight 700 on top of the Bold face; the measured weight is 400.
- Treat the #fcfcfc and #b9b8b6 artwork fills as text colors.
- Add copy beyond the bio, availability and contact lines; the page is intentionally sparse.

## Responsive Behavior

The extractor ran one mobile pass at 390px. Measured: the h1 changes to 46.8px / 60.84px with -0.2808px letter spacing and 0px 10px padding at full 390px width; body text remains 14px; the nav block measures 370px wide and its text includes Projects, About, the name, "Creative Developer" and a location line. The mobile body text color measured #f1efeb. How the artwork and bio rearrange on mobile was not measured. The declared breakpoints are 380, 768, 900, 1200 and 1440px, but what changes at each was not measured.

## Iteration Guide

1. Start from the canvas #f1efeb and place the ink and accent tokens exactly; do not introduce a fourth color.
2. Load HelveticaNowDisplay-Medium and HelveticaNowDisplay-Bold as separate faces, both at weight 400.
3. Build the h1 at 80px/104px lowercase on desktop and 46.8px/60.84px on mobile.
4. Lay out the column variables as documented before placing content.
5. Reproduce the hover as text-decoration line-through only.
6. Verify with `node web/scripts/verify-designs.mjs --slug=stefan-vitasovic-portfolio25` after any token change.

Reproduction note: the measured hover list covers four links only (Projects, About, the email and the LinkedIn link), and each recorded the same change, text-decoration from none to line-through, with color #252526 unchanged. The Intro link was not in the hover probe, so its hover state is not measured. The loading text "Loading" appears in the body text before the animation resolves, so a faithful rebuild needs a short preloader state before the staggered name appears.
