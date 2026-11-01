---
version: alpha
name: The Power of Storytelling
category: "Agencies & Studios"
description: "Noomo agency microsite The Power of Digital Storytelling (storytelling.noomoagency.com): periwinkle #c4c5f1 canvas, navy #29345a ink, a 249.6px TheSeasons italic title and TTNeoris sans at 66px with tight negative tracking, pill radii and translucent white overlays."
colors:
  canvas: "#c4c5f1"
  ink: "#29345a"
  primary: "#29345a"
  ink-on-dark: "#ffffff"
  ink-black: "#000000"
  ink-offwhite: "#f5f5f5"
  hairline: "#ffffffa3"
typography:
  display:
    fontFamily: TheSeasons, serif
    fontSize: 249.6px
    fontWeight: 400
    lineHeight: 249.6px
    letterSpacing: "-1.28px"
  display-mobile:
    fontFamily: TheSeasons, serif
    fontSize: 73.32px
    fontWeight: 400
    lineHeight: 73.32px
    letterSpacing: "-0.39px"
  heading:
    fontFamily: TTNeoris, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji", sans-serif
    fontSize: 66px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-1.98px"
  body:
    fontFamily: TTNeoris, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji", sans-serif
    fontSize: 38px
    fontWeight: 400
    lineHeight: 33px
    letterSpacing: "-0.76px"
  nav:
    fontFamily: TTNeoris, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji", sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
rounded:
  xs: 4px
  sm: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 14px
  s7: 20px
  s8: 22px
  s9: 24.96px
  s10: 30px
components:
  nav:
    textColor: "{colors.ink}"
    padding: 38px 0px 0px
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink-on-dark}"
    padding: 30px 38px
---

## Overview

"The Power of Digital Storytelling" is an interactive editorial microsite by Noomo, a digital agency (page title: "Noomo | The power of digital Storytelling"). It lives at the subdomain `storytelling.noomoagency.com`. The measured page is extremely tall (34,640px) for only 233 visible elements: a scroll-driven narrative in which large display type moves across a lavender canvas, with text such as "The power of digital storytelling", "In a world that's constantly..." and a set of principles such as "Make it personal - The best stories create emotional connection...". The capture shows the very top of the page at its first screen: a soft lilac-to-periwinkle gradient with a tiny pixel-art feather or arrow glyph at the center, and below it a flat `#c4c5f1` field. Most of the page's imagery is WebGL or scroll-triggered and was not captured.

The personality is poetic and airy: pastel purple-blue, an elegant italic serif for the single word "storytelling" set at 249.6px, and a geometric sans for supporting lines, with tight negative tracking.

## Colors

- **Canvas `#c4c5f1`** is a periwinkle lavender, the body background (confirmed against the captured pixels).
- **Ink and primary `#29345a`** is a deep navy used for the headings and body copy on the lavender field (the h2 "The power of digital" and body text). No button or link exists to give a separate action color, so `primary` reuses the navy.
- **Ink-on-dark `#ffffff`** (770 characters, the most-read text color) is the body copy on dark or imagery sections; **ink-black `#000000`** (31) colors the h1 and navigation links; **ink-offwhite `#f5f5f5`** (14) is a secondary near-white.
- **Hairline `#ffffffa3`** is a white border at 64 percent alpha. Background tints in the by-area list are translucent whites (`#ffffff40`, `#ffffff26`, `#ffffff03`) used on glass-like overlays. Another blue, `#143a8a`, appears as a child text color.

## Typography

Two families: **TTNeoris** (811 characters; a geometric sans) and **TheSeasons** (55 characters; a high-contrast serif, loaded in italic). All weights are 400 (864 characters), with 300 for 2.

- **Display** (h1 "storytelling") is TheSeasons 400 at 249.6px, line height 249.6px, letter-spacing -1.28px; on mobile 73.32px with -0.39px.
- **Heading** (h2 "The power of digital") is TTNeoris 400 at 66px, line height 60px, letter-spacing -1.98px; the mobile pass measures it at 38px with 33px line height.
- **Body** is TTNeoris 400 at 38px, line height 33px, letter-spacing -0.76px (the page-level body role); running copy is mostly 26px (583 characters) and 18px (86) with -0.18px tracking at 18px.
- **Nav** is TTNeoris 400 at 10px, line height 15px.
- Tracking ratios are consistently about -3 percent of the font size (66px/-1.98px, 38px/-0.76px, 18px/-0.18px being a 1 percent exception).

TTNeoris and TheSeasons are commercial faces; a geometric grotesque and a Didone-style italic serif can substitute.

## Layout

The page is one long vertical scroll (34,640px tall) of full-width scenes. The h1 is 1,240px wide and shifted horizontally by a transform (`matrix(1, 0, 0, 1, 238.08, 0)`), so the element is displaced by a transform at measurement time (the motion itself was not measured). Navigation is a thin row at the top, with 38px of top padding; the footer uses padding of 30px 38px. Spacing steps are 1px, 2px, 4px, 8px, 10px, 14px, 20px, 22px, 24.96px and 30px.

## Elevation & Depth

No box shadows are measured. Depth is from gradient backgrounds (the lilac gradient in the capture), translucent white glass fills and large type layered over scenes. Hover states were not recorded (the hover list is empty).

## Shapes

Measured radii: **9999px** (4 elements, pill shapes), **50%** (2), **4px** (1) and **20px** (1). Pills and circles are used for controls; the 20px value rounds a larger panel.

## Components

No buttons, cards or inputs were detected by the extractor. The measured components are the top nav (ink-colored, padded 38px at the top), its links (black, TTNeoris 10px), and the footer (white text, padding 30px 38px). The small pixel-art glyph at the center of the capture was not measured and is not a token. No primary button is documented because none was measured.

## Design System Architecture

No public design system, brand guideline or token package was found for this microsite; the page opened is https://storytelling.noomoagency.com (measured by the extractor; see SOURCES.json). The shipped CSS corpus is small and the build declares two font faces, TheSeasons (italic) and TTNeoris. The de-facto system is a lavender canvas, navy ink, one oversized serif word and a geometric sans with consistently tight negative tracking.

## Do's and Don'ts

- Do set the lead word in TheSeasons italic at very large size (249.6px desktop, 73.32px mobile) with slight negative tracking.
- Do set statements in TTNeoris with tracking of about -3 percent of the size.
- Do keep the palette to lavender `#c4c5f1`, navy `#29345a`, white and black.
- Do use pill shapes (9999px) for controls and small 4px radii elsewhere.
- Don't add drop shadows; none are measured.
- Don't introduce saturated accent colors; none are measured apart from `#143a8a`, which appears only as a child text color.
- Don't assume full-page imagery from the capture; it shows only a gradient and a flat field.

## Responsive Behavior

Measured at 390px: the h1 falls to 73.32px (358px wide, letter-spacing -0.39px), the h2 to 38px (333px wide, line height 33px), and the white body paragraph ("Make it personal ...") is set at the 18px size, which is the most-read size on mobile (601 characters). The mobile size list is 18px, 26px, 38px, 16px, 30px, 10px and 73.32px. Breakpoints and layout reflow beyond those values were not measured.

## Iteration Guide

1. Start with a `#c4c5f1` background and `#29345a` text.
2. Set the title word in TheSeasons italic 249.6px with -1.28px tracking (73.32px on mobile).
3. Set statements in TTNeoris 66px/60px with -1.98px tracking; supporting copy at 26px and 18px.
4. Use white text over dark or image scenes and keep navigation at 10px.
5. Use pills for controls; add translucent white fills for glass panels.
6. Re-capture after the scroll scenes load before documenting any imagery or motion.

## Content and Voice

The measured text is a short manifesto about digital storytelling. The headline stack reads "The power / of digital / storytelling", broken into lines by hand, and the next block opens "In a world that's constantly..." in the 38px sans. The body section is organized as titled principles, with "Make it personal" followed by "The best stories create emotional connection..." set in white at the 18px and 26px sizes. Sentences are short and declarative, set in sentence case without punctuation-heavy styling, and line breaks are deliberate. The page title names the agency ("Noomo") before the thesis, so the site doubles as a portfolio piece for the agency. Nothing in the measured copy is a product claim, price or call to action.

## Measurement Notes

The extraction recorded 233 visible elements and no heading roles beyond the h1 and h2, no CTA, no card and no input. The by-area background list contains four entries: `#ffffff40` (area 10), `#ffffff03` and `#ffffff26` (2 each), and `#29345a` at area 0. The canvas token was therefore confirmed on the captured pixels, not on a large painted element. The captured image shows a gradient on the first screen that differs from the flat body color below it;  the gradient stops were not measured and are not tokenized. No hover, focus or active states were recorded. The mobile pass found a body paragraph and an h1, an h2 and no nav entries. Letter-spacing was measured for six size pairs: 18px/-0.18px (86 characters), 66px/-1.98px (77), 38px/-0.76px (77), 66px/-0.66px (14), 249.6px/-1.28px (11) and 50px/-1px (1).
