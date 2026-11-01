---
version: alpha
name: Ashley Brooke Creative Studio
category: "Agencies & Studios"
description: "ABCS, the Ashley Brooke creative studio site: white #ffffff canvas, near-black #131410 ink, brand red #f63d18, pale blue-grey #d9e3e7 display words, Mosvita bold 36.6536px headlines with -1.09961px tracking, Universo 500 uppercase 94.5359px statements, 8px radius cards."
colors:
  canvas: "#ffffff"
  ink: "#131410"
  primary: "#f63d18"
  surface-mist: "#d9e3e7"
  nav-bg: "#0000004d"
typography:
  display:
    fontFamily: Mosvita, Arial, sans-serif
    fontSize: 36.6536px
    fontWeight: 700
    lineHeight: 43.9843px
    letterSpacing: "-1.09961px"
  display-mobile:
    fontFamily: Mosvita, Arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
    letterSpacing: "-0.96px"
  heading:
    fontFamily: Universo, Arial, sans-serif
    fontSize: 94.5359px
    fontWeight: 500
    lineHeight: 85.0824px
    textTransform: uppercase
  body:
    fontFamily: Mosvita, Arial, sans-serif
    fontSize: 19.1634px
    fontWeight: 600
    lineHeight: 24.9124px
rounded:
  xs: 2.08px
  sm: 4px
  md: 8px
spacing:
  nav-height: 4rem
  button-medium: 3rem
  button-large: 5rem
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    padding: 50px 40px
---

## Overview

The measured site is ashleybrookecs.com, titled "ABCS" with the page name "Home". It is the home of Ashley Brooke Creative Studio, introduced on the page as "A creative studio merging systems-thinking with storytelling for brands, agencies, and film". The visual identity is a poster-like layout on a white canvas: an oversized red serif "ABCS" monogram at the top left, with "ASHLEY BROOKE" and "CREATIVE STUDIO" in small red capitals beneath it; four nav words ("Work, Services, About, Create with us") at the top right; and a short biography ("Led by a hyper-proactive perfectionist, PR Strategist turned Producer turned Creative Director who refuses to stay in a single lane.").

The voice is confident and informal. A pale blue-grey uppercase statement fills the middle of the page: "WE GREW FOR NINE YEARS WITHOUT A WEBSITE, BECAUSE WE DIDN'T NEED ONE", with small photographs scattered over and around it, and a black card tilted across the page carrying "So what's the POV…". A black "ABOUT US" button with an arrow and a full-width red bar sit in the right column. The "Site of the Day" tab at the right edge of the capture is an awards widget from a third party and is not documented as brand UI.

Brand red (#f63d18) is the single accent. It is the root variable `--swatch--brand-red`, it fills the monogram and the red bar, and it is also the selection highlight background.

## Colors

The palette is published in the site's own swatch variables and matches the measured area and text frequencies.

- **Canvas** `#ffffff` is the page body background.
- **Ink** `#131410` is `--swatch--dark-900` (also `--swatch--brand-text`); it colors 2,271 measured characters and the black button and card fills.
- **Primary** `#f63d18` is `--swatch--brand-red`; 91 measured characters of text and 94 units of background area.
- **Surface mist** `#d9e3e7` is `--swatch--light-200`; it colors the large uppercase statement (166 characters) and was the largest measured background by area (3,263 units, ahead of #131410 at 3,087).
- **Nav background** `#0000004d` is the measured translucent black on the nav container.
- White `#ffffff` text is used on dark surfaces (572 measured characters).

The root variables also name `--swatch--dark-800` #2f2b2d and `--swatch--brand-brown` #484133. Neither was measured on a rendered element, so they are not tokens. On hover, nav links were recorded changing to rgb(234, 59, 24), a red slightly different from the brand swatch; the swatch value is kept as primary.

## Typography

Four font faces are loaded: Universo (900), Mosvita (700 and 600) and The Patience (400). Mosvita is the workhorse (2,556 measured characters), Universo is used for the giant statement (538 characters), and The Patience, a serif declared as `--_typography---font--tertiary-family` with a "Times New Roman" fallback, appears on 6 characters.

- Display ("creative" and the "We could've had one sooner." h3): Mosvita 700, 36.6536px / 43.9843px, letter-spacing -1.09961px. Mobile: 32px / 38.4px / -0.96px.
- Heading (the uppercase statement): Universo 500, 94.5359px, line-height 85.0824px, uppercase. Mobile: 48px, line-height 43.2px.
- Body (the biography paragraph, nav links): Mosvita 600, 19.1634px / 24.9124px.
- Other measured sizes in the page include 30.3268px, 16px, 50.6144px, 88px, 25.6px, 60.6536px, 15.1634px and 144px.

The root variables set `--_typography---font--primary-semi-bold` to 600 and `-bold` to 700, and define trim values (`primary-trim-top` .48em, `primary-trim-bottom` .34em) used to cut line-box padding on the primary family. Font substitutes: Mosvita and Universo are not documented as freely licensed; use a geometric grotesk (for example Space Grotesk) for Mosvita and a wide extended sans for Universo if the originals are unavailable.

## Layout

The page is 13,180px tall at a 1280px viewport. The first screen is a two-column composition: monogram and biography on the left, nav and strapline on the right starting about the horizontal midpoint. The nav height variable is 4rem. Content blocks are not boxed; photographs are small and placed at irregular offsets over the large statement text, producing a collage. A thin black horizontal rule crosses the page below the collage.

Spacing is fluid: variables such as `--_spacing---space--1` through `--space--8` and `--section-space--small/main/large` are all declared with `clamp()` expressions between a minimum and maximum viewport width (for example `--space--3-5rem` runs from 3rem to 3.5rem). Button heights are 3rem (medium) and 5rem (large).

## Elevation & Depth

Measured shadows are sparse: "none" on most elements, plus single instances of `0 0 0 1px #0000001a, 0 1px 3px #0000001a`, `0 0 3px #3336`, `0 0 0 2px #fff`, `0 .25em .5em 0 #00000040` and `1px 1px 30px rgba(0, 0, 0, 0.08)`. Depth in the composition comes mainly from overlap: photos sit over the pale statement text, and the black card is rotated so that it breaks the page's grid. Its measured transform is matrix(0.965926, -0.258819, 0.258819, 0.965926, 0, -574.859).

## Shapes

Radii are small. The root variables define `--radius--small` .25rem (4px), `--radius--main` .5rem (8px) and `--radius--round` 100vw. The measured stylesheet radii are 3px and 4px, and the tokens carry 2.08px, 4px and 8px. The black card uses 8px with 50px / 40px padding. The black "ABOUT US" button and the red bar corner radii were not extracted; exact values for these were not extracted because no primary CTA was detected.

## Components

- **Nav:** four text links in Mosvita 32px bold on the measured nav (font size 32px, letter-spacing -0.96px), colored #131410; on hover the links turn red (rgb(234, 59, 24)) with the border color following.
- **Button:** black fill with white uppercase label and a small arrow ("ABOUT US ↗"); button sizes 3rem and 5rem are declared in the root variables.
- **Red bar:** a full-column #f63d18 block beneath the button.
- **Card:** #131410 fill, white text, 8px radius, 50px 40px padding, rotated.
- **Footer:** measured padding 44.6536px 0px 16px with white text on dark.

## Design System Architecture

No public design system or brand guideline page exists for this studio; the pages opened were the home page (ashleybrookecs.com) via the extraction, and it links to none. The de-facto system is a CSS custom-property set: color swatches (`--swatch--brand-red`, `--swatch--dark-900`, `--swatch--light-200`), a theme layer (`--_theme---button-primary--background`, `--_theme---button-primary--background-hover` resolving to the text color, `--_theme---text-link--text`), a typography layer (`--_typography---font--primary-family`) and a fluid spacing layer. The button hover therefore inverts to the text color, per the declared variables.

## Do's and Don'ts

- Do use #f63d18 sparingly: monogram, a single bar, hover states.
- Do set the large statement in Universo uppercase in #d9e3e7 so that photographs can overlap it.
- Do keep headlines in Mosvita bold with negative tracking.
- Do tilt a dark card for emphasis, using the measured 8px radius.
- Don't use the awards widget or tabs as brand elements.
- Don't add gradients or heavy shadows; the page relies on flat color and photography.
- Don't treat #2f2b2d or #484133 as active colors; they are declared but were not measured on screen.

## Responsive Behavior

A 390px mobile pass was recorded. It measured the display role at 32px / 38.4px / -0.96px, the uppercase statement at 48px with line-height 43.2px, and body copy at 32px bold (line-height 38.4px, letter-spacing -0.96px). No primary CTA was detected on mobile. Column layout, menu type and breakpoints: not measured.

## Iteration Guide

1. Set canvas #ffffff and ink #131410; use #f63d18 only for the monogram, one accent block and hover.
2. Build the first screen as two columns with the monogram left and nav plus strapline right.
3. Use Universo uppercase 94.5359px (48px on mobile) in #d9e3e7 for the statement and overlay small photos.
4. Use black buttons and a rotated black card with 8px radius for emphasis.
5. Run `node web/scripts/verify-designs.mjs --slug=ashley-brooke` and measure the mobile layout before claiming any behavior there.
