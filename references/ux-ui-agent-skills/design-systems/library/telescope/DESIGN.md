---
version: alpha
name: Telescope
category: "Tech & AI"
description: "Telescope recommendations site: Beausite 57px light headline with -0.38px tracking, DM Mono 12.35px uppercase labels, warm paper canvas #f4f3f0, near-black #1a1915 text, pale lime #e3f794 sign-up pill, 2px photo radius and no shadows."
colors:
  canvas: "#f4f3f0"
  ink: "#1a1915"
  primary: "#e3f794"
  on-primary: "#1a1915"
  gray: "#82868e"
  surface-3: "#ffffff"
typography:
  display:
    fontFamily: Beausite, sans-serif
    fontSize: 57px
    fontWeight: 400
    lineHeight: 65.55px
    letterSpacing: "-0.38px"
  display-mobile:
    fontFamily: Beausite, sans-serif
    fontSize: 28.05px
    fontWeight: 400
    lineHeight: 32.2575px
    letterSpacing: "-0.34px"
  heading:
    fontFamily: Beausite, sans-serif
    fontSize: 48.8798px
    fontWeight: 400
    lineHeight: 56.2118px
    letterSpacing: "-0.38px"
  body:
    fontFamily: Beausite, sans-serif
    fontSize: 19px
    fontWeight: 400
    lineHeight: 21.85px
    letterSpacing: "-0.38px"
  link:
    fontFamily: "\"DM Mono\", monospace"
    fontSize: 12.35px
    fontWeight: 400
    lineHeight: 13.585px
    letterSpacing: 0.3705px
    textTransform: uppercase
rounded:
  xs: 2px
spacing:
  s1: 5.7px
  s2: 6.65px
  s3: 9.5px
  s4: 14.25px
  s5: 19px
  s6: 23.75px
  s7: 28.5px
  s8: 40.85px
  s9: 47.5px
  s10: 71.25px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 9.5px 0px
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink}"
---

# Telescope

## Overview
The measured site is the home page of Telescope, https://telescope.fyi/ (title "Telescope"), a recommendations product marked "CURRENTLY IN BETA" in the capture. The hero is minimal: a warm off-white (#f4f3f0) canvas, a centered two-line headline "Real recommendations by real people" set at 57px, and a loose scatter of small square photographs (a pizza, a pink-dyed head with "peace" lettering, a yellow-clad figure, a stack of orange books, a person in tie-dye, a cyclist, loaves of bread, a paper lantern) floating around it at varied sizes. A white pill-shaped header bar centered at the bottom of the first screen holds the Telescope wordmark, a "LOGIN" text link and a pale-lime "SIGN UP" pill; "CURRENTLY IN BETA" sits at the left edge and "SCROLL" with a rounded chevron button at the right edge, both in small uppercase monospace. A second heading measured on the page reads "No algorithms. No ads. No overwhelm. Just great curation." The scroll height is 16670px at 1280px, but the lower portion of the full-page capture renders blank (scroll-triggered content did not render in the capture), so only the first screen is documented from the image. The overall feel is editorial, quiet and image-led, with large light type, mono micro-labels and no borders.

## Colors
`canvas` is #f4f3f0, a warm paper off-white; `ink` is #1a1915, a warm near-black used for the headings, links and the "SIGN UP" label (the hover record reads rgb(26, 25, 21)). `surface-3` is #ffffff (the header pill and footer). The action color is a pale lime, #e3f794, measured as a background color of the "SIGN UP" pill; the generator had assigned `primary` to the grey #82868e, which is the root variable `--color-gray`, so this file sets `primary` to the lime (the measured action fill, with `on-primary` the dark #1a1915 label) and keeps the grey as `gray`. White is also published as `--color-white` (#fff). There are no gradients, and the photographs supply all other color.

## Typography
Two families are measured: Beausite (a grotesque, loaded at 400 and 700) for all headlines and body copy, and DM Mono for small uppercase labels ("LOGIN", "SIGN UP", "CURRENTLY IN BETA", "SCROLL"); a third file, CM Geom, is loaded (15 characters in the census). `display` is Beausite 57px / 65.55px at 400 with -0.38px letter-spacing (the h1); `display-mobile` is 28.05px / 32.2575px with -0.34px; `heading` is 48.8798px / 56.2118px at 400 with -0.38px (the "No algorithms. No ads." heading); `body` is 19px / 21.85px at 400 with -0.38px; `link` is DM Mono 12.35px / 13.585px at 400, uppercase, with 0.3705px letter-spacing. Tracking is slightly negative on large type and positive on mono labels. Beausite is commercial; Inter at 400 with similar tracking and DM Mono (open source on Google Fonts) are the practical substitutes.

## Layout
The first screen is a full-viewport hero with the headline centered and photographs scattered absolutely around it, some bleeding off the left and right edges. The header is a floating white bar centered at the bottom of the hero rather than a full-width top bar. Edge labels ("CURRENTLY IN BETA", "SCROLL") align to the left and right page margins. Measured spacing is built on a 9.5px base: 5.7px, 6.65px, 9.5px, 14.25px, 19px, 23.75px, 28.5px, 40.85px, 47.5px and 71.25px; the most frequent gaps are 47.5px (8 elements), 19px (6), 5.7px (4) and 71.25px and 23.75px (2 each). Link padding is 9.5px 0px. The root variable `--client-width` is 1280px and `--desktop-height` is 982.

## Elevation & Depth
Flat. No box shadows were measured, and no borders were recorded. Photographs and the white header bar sit directly on the #f4f3f0 canvas, and depth is implied by overlap, size variation and the scattered placement of images.

## Shapes
The only measured radius is 2px (14 elements), a barely rounded corner on the photographs. The "SIGN UP" pill and the scroll chevron button appear rounded in the capture, but their radii were not measured and no pill radius is declared. The wordmark and hero imagery are otherwise square-edged.

## Components
- **link**: DM Mono 12.35px uppercase, #1a1915, 9.5px 0px padding ("LOGIN", "SIGN UP").
- **Sign-up pill**: pale-lime #e3f794 fill with the dark label, 2.65rem tall (the root variable `--button-height` is 2.65rem).
- **Header pill**: white bar with wordmark, login and sign-up, centered on the lower hero.
- **Photo tile**: square-cropped image with a 2px radius, no border.
- **Edge label**: uppercase mono text at the page edges.
- **footer**: white (#ffffff) background, #1a1915 text, 524px tall, LOGIN and SIGN UP links.

## Design System Architecture
No public design-system, press kit or brand page was found: the page text returned by WebFetch for https://telescope.fyi/ contained only the word "Telescope", so no links could be read. The shipped CSS publishes 57 root variables, mostly motion easings (`--ease-out-back`, `--ease-in-out-back`, `--ease-in-out-circ`, `--ease-smooth-in-out`, `--ease-in-expo`, `--ease-in-power2`, `--ease-in-power4`, `--ease-out-power1`, `--ease-out-bounce`) plus `--button-height`, `--color-white`, `--color-gray`, `--client-width` and `--desktop-height`. The easing names indicate GSAP-style motion curves; the de-facto system is a two-font pairing, three colors and a 9.5px spacing unit.

## Do's and Don'ts
- Do keep the canvas warm off-white (#f4f3f0) and the text near-black (#1a1915).
- Do set the headline large and light (57px, 400, -0.38px tracking) and the micro-labels in uppercase DM Mono.
- Do scatter small, varied photographs around the copy.
- Don't add shadows, borders or gradients; none were measured.
- Don't use more than one accent; the pale lime #e3f794 is the only action color.
- Don't set body copy bold; the measured weight is 400 throughout the type scale.

## Responsive Behavior
Measured at a 390px viewport: the h1 is 28.05px / 32.2575px at weight 400 with -0.34px letter-spacing, and no primary button was detected (call-to-action null). The mobile pass recorded no layout, header-link or band data, so the position of the floating header and the photograph scatter on mobile are not measured.

## Iteration Guide
1. Start with #f4f3f0 canvas, #1a1915 ink, #ffffff panels and a #e3f794 action pill.
2. Use Beausite-like type with -0.38px tracking at 57px, 48.88px and 19px.
3. Add DM Mono 12.35px uppercase with 0.3705px tracking for every label and link.
4. Scatter 2px-radius photographs around the headline; float a white header bar low on the first screen.
5. Re-run `node web/scripts/verify-designs.mjs --slug=telescope` after every change.
6. Voice: short, confident declarations ("Real recommendations by real people", "No algorithms. No ads. No overwhelm.") with no exclamation marks.
7. Imagery: taste-led lifestyle photography (food, fashion, objects, books) cropped square or portrait, small, never overlaid with text.
8. Photograph scatter: in the capture the tiles vary from small thumbnails to one large portrait right of the headline, mix portrait and landscape crops, overlap the header bar's edge in one place and bleed off both side margins; arrange images irregularly rather than on a grid, and keep any text clear of them.
9. Header bar: the white bar holds three things only, the bold wordmark at left, a mono "LOGIN" link and the lime "SIGN UP" pill at right; it floats low on the first screen instead of sitting at the top edge, and the beta note and scroll cue sit outside it at the margins.
10. Type contrast: the large Beausite headline is the only big element on the first screen, and everything else is either a photograph or a 12.35px mono label; this extreme scale contrast, rather than color or ornament, is what gives the page its hierarchy.
11. Second-section heading: the "No algorithms. No ads. No overwhelm. Just great curation." heading is measured at 48.8798px / 56.2118px, noticeably smaller than the 57px h1, so successive headings step down gently instead of jumping.
