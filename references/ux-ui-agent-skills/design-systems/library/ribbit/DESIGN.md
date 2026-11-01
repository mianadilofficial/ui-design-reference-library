---
version: alpha
name: "Ribbit"
category: "Agencies & Studios"
description: "Ribbit (ribbit.dk), a Copenhagen studio site: light #fafafa page with a dark #2f2f2f feature band and #502b1a brown footer, enormous 249.6px FKTEcho condensed display type with -6.4px tracking, FKGroteskNeue 12px uppercase navigation, and a 21px-radius pill navigation."
colors:
  canvas: "#2f2f2f"
  page-body: "#fafafa"
  ink: "#ffffff"
  primary: "#a7958c"
  surface-3: "#502b1a"
  ink-3: "#b9aaa3"
typography:
  display:
    fontFamily: FKTEcho
    fontSize: 249.6px
    fontWeight: 400
    lineHeight: 234.624px
    letterSpacing: "-6.4px"
  display-mobile:
    fontFamily: FKTEcho
    fontSize: 85.8px
    fontWeight: 400
    lineHeight: 80.652px
    letterSpacing: "-1.95px"
  heading:
    fontFamily: FKTEcho
    fontSize: 120px
    fontWeight: 400
    lineHeight: 105.6px
    letterSpacing: "-3.3px"
  body:
    fontFamily: FKGroteskNeue, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: 0.21px
  nav:
    fontFamily: FKGroteskNeue, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
    letterSpacing: 0.36px
    textTransform: uppercase
  link:
    fontFamily: FKGroteskNeue, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 9.6px
    letterSpacing: 0.36px
    textTransform: uppercase
rounded:
  xs: 5px
  sm: 12px
  md: 13px
  lg: 21px
  xl: 113px
spacing:
  s1: 2px
  s2: 4px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 19px
  s7: 24px
  s8: 40px
  s9: 48px
  s10: 50px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 16px 19px 14px
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 16px 10px 10px
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink}"
    padding: 50px 0px 24px
---

## Overview

Ribbit (page title "Ribbit", ribbit.dk) is a studio site whose home page is built almost entirely from oversized typography. The capture shows a light #fafafa page where the words "Curious" and a second word beginning "Fullser" are set in an enormous condensed italic serif-like face (FKTEcho) and cross the viewport edge, small curved text lines wrap around them ("Ribbit is a", "Based in Copenhagen"), and a single outlined, slanted button reads "RIBBIT WHO?". Below, the page turns to a dark band with a "Featured project" label and a large rounded project image (a blue energy-drink can on a black "SUPERFOODS" pattern, labelled "Hi energy").

The site's navigation is HOME, PROJECTS, ABOUT, PROCESS and CONTACT in small uppercase, with a video thumbnail at the top right. Measured copy includes "From Idea to Done." and "We take care of the entire process from ..." so the voice is short, playful and process-oriented. The WebFetch research call failed (see SOURCES.json), so everything here comes from the extraction and the capture.

## Colors

- canvas #2f2f2f is the generated canvas (the dark band, 1654 area weight) and the colour of nearly all text on light areas (736 characters); the site's own variable names it --darkink.
- page-body #fafafa is the light page background (3433 area weight); the site names it --lightgrey.
- ink #ffffff is text on dark areas (153 characters).
- primary #a7958c is a muted warm taupe (7 characters of text) used as a small accent; ink-3 #b9aaa3 (91 characters) is a lighter tint for secondary text on dark areas.
- surface-3 #502b1a is the deep brown of the footer (1024 area weight); the site names it --darkbrown.

The root CSS variables expose a wider project palette: --lightgreen #95C154, --yellow #FFD948, --lightbrown #FFE3C9, --lightpurple #A88BFA, --midpurple #5B21B6, --darkgreen #004B1E, --darkpurple #23234A and --orange #FF9C00. These are per-project colours defined in the stylesheet; the measured home page interface itself uses only the dark, light and brown values above. The extraction recorded no borders and no box shadows.

## Typography

Two families. FKTEcho (weight 400) is the display face: the home hero word measures 249.6px with line-height 234.624px and letter-spacing -6.4px; the "From Idea to Done." heading measures 120px with line-height 105.6px and -3.3px tracking; the mobile hero measures 85.8px with line-height 80.652px and -1.95px tracking. FKGroteskNeue (400, 500 and bold) is the text face: body 14px with line-height 19.6px and 0.21px tracking; navigation 12px, weight 500, uppercase, 0.36px tracking; link 12px, weight 700, uppercase.

By character count: 12px (704), 14px (203), 36px (34), 249.6px (30), 18px (16). FKTEcho and FK Grotesk Neue are commercial faces from Florian Karsten Typefaces; substitute a condensed display serif and a neo-grotesque (Helvetica or Arial) only if licences are unavailable. The body fallback declared on the site is sans-serif.

## Layout

The page is 1280px wide and 4774px tall at measurement. The CSS defines a 24px gutter (--gutter) and a 12-column grid whose column width is calc((100vw - (var(--gutter) * 13)) / 12). Giant words ignore the grid and bleed off the viewport edge; small text sits on centre axes; the dark band separates the intro from the featured-project showcase. Measured spacing values: 2px, 4px, 10px, 12px, 16px, 19px, 24px, 40px, 48px, 50px. Navigation links pad 16px 10px 10px; the footer pads 50px 0 24px.

## Elevation & Depth

There are no box shadows and no borders in the measured data. Separation comes from three flat fields (light grey, dark grey, brown), from a soft vertical gradient band between the two giant words in the capture, and from imagery with rounded corners. Motion easings are defined (quart, expo, back and others) but the motion recording was skipped, so animation behaviour is not described.

## Shapes

Corners are rounded at varied scales: 5px, 12px (3 elements), 13px (2), 21px (the navigation container) and 113px (one pill-like element). Large project images and the video thumbnail are visibly rounded in the capture. The "RIBBIT WHO?" button is drawn as a slanted outlined parallelogram in the capture; the extraction did not record it as a styled button, so no button token is declared.

## Components

- Navigation: a 21px-radius container with five uppercase FKGroteskNeue links at 12px, weight 500, tracking 0.36px, link padding 16px 10px 10px; on hover the measured link drops to 0.6 opacity.
- Link ("RIBBIT WHO?"): FKGroteskNeue 12px bold uppercase, padding 16px 19px 14px, #2f2f2f text.
- Giant word headings: FKTEcho at 249.6px that overflow the viewport horizontally.
- Featured project card: a large rounded image on the dark #2f2f2f band with a "Featured project" label at the left and the project wordmark at the right.
- Footer: #502b1a background, white text, padding 50px 0 24px.
- Video thumbnail: a small rounded preview with a play icon at the top right.

## Art direction notes

The capture is organised as a vertical sequence of large, mostly empty fields. The first screen holds the logotype at the top left (a heavy italic wordmark), the navigation next to it and a video thumbnail at the top right; the middle of the page is empty light grey except for the giant words and the small curved captions. The words move horizontally past the edge of the viewport, which is why "Curious" is cut at the left and a second word beginning "Fullser" at the right in the still image. The captions "Ribbit is a" and "Based in Copenhagen" are set on curves in the text face, a deliberate contrast with the straight, huge display lines. The outlined action sits at the centre below them. Further down the page switches to the dark band with the featured project: the project image is framed with rounded corners, a muted grey mat surrounds the product, and the case-study brand wordmark (Hi energy) is shown at the right edge. The overall density is very low and the single repeated device is scale contrast between 249.6px display words and 12px uppercase labels.

## Design System Architecture

No public design system or brand guideline was found; the research fetch failed and no link was seen in the capture. The de-facto system is defined in the root CSS variables: named colours (--darkink, --lightgrey, --darkbrown and the project hues), a set of named easing curves (--quart, --quint, --expo, --back, --sine, --cubic and their in-out forms), --gutter 24px, a 12-column --column formula and --delay 0s. The naming shows a compact, motion-aware token set maintained in CSS.

## Do's and Don'ts

Do:
- Let one or two giant FKTEcho words dominate a viewport, tight at -6.4px tracking.
- Use small uppercase FKGroteskNeue for navigation and labels.
- Alternate #fafafa, #2f2f2f and #502b1a fields without borders or shadows.
- Round large images and the navigation container.

Don't:
- Do not use per-project colours (green, purple, orange, yellow) as site-wide UI accents.
- Do not add shadows or outlines; none were measured.
- Do not set body text larger than the measured 14px without measuring.
- Do not use the display face for small text.

## Responsive Behavior

On the 390px mobile pass the hero word measures 85.8px (desktop 249.6px) with -1.95px tracking. The mobile size distribution is 10px (677 characters), 12px (242), 28px (34) and 85.8px (30): body-level text drops to 10px. Layout changes, breakpoints and menu behaviour were not measured.

## Iteration Guide

1. Choose the field: {colors.page-body} for content, {colors.canvas} for showcase bands, {colors.surface-3} for the footer.
2. Use {typography.display} only for one or two words per view; {typography.heading} for statements.
3. Use {typography.nav} for navigation and {typography.body} for paragraphs.
4. Round containers with {rounded.lg} and images with {rounded.sm}.
5. Validate with `node web/scripts/verify-designs.mjs --slug=ribbit`.
