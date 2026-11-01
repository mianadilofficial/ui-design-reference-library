---
version: alpha
name: The state of the gallery
category: "Tech & AI"
description: "mesh3d microsite The state of the gallery (mesh3d.gallery): blue-black #08090d canvas, pale #cfdee5 text, a single neon #ecff3e Browse the gallery button with 19px radius and glow, 200px overusedGrotesk counter numerals and Geist 600 labels."
colors:
  canvas: "#08090d"
  ink: "#cfdee5"
  primary: "#ecff3e"
  on-primary: "#08090d"
typography:
  display:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  body:
    fontFamily: overusedGrotesk, "overusedGrotesk Fallback"
    fontSize: 200px
    fontWeight: 400
    lineHeight: 200px
  nav:
    fontFamily: overusedGrotesk, "overusedGrotesk Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 19px
spacing:
  s1: 4px
  s2: 18px
  s3: 24px
  s4: 40px
  s5: 42px
  s6: 56px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.xs}"
    padding: 18px 42px
    height: 57px
  nav:
    textColor: "{colors.ink}"
    padding: 0px 40px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview

"The state of the gallery" (page title: "The state of the gallery | mesh3d") is an annual-review style microsite of mesh3d, a gallery of 3D and WebGL websites. It lives at `mesh3d.gallery/the-state-of-the-gallery`. The measured state is a counter-style intro: the body text reads "SCROLL TO DIVE IN", "AUDIO OFF", "Entries to date(551)" and "Websites(4...", and the capture shows a near-black field with a faint dot grid, a thin yellow line across the top edge, the small "mesh" wordmark with an arrow glyph at the top center, and a giant light-gray percentage counter ("99%" in the capture; "92%" in the measured text) at the lower left. The page measures only 800px high, so it is a single full-viewport scene with scroll-driven content beyond it, not measured here.

The design is quiet and instrument-like: a dark UI canvas, one electric yellow-green accent, gigantic thin numerals, and tiny uppercase labels.

## Colors

- **Canvas `#08090d`** is a blue-tinted near-black (area weight 2,048, confirmed on the capture pixels).
- **Ink `#cfdee5`** is a pale blue-gray used for the counter numerals, the wordmark and the nav text (25 characters).
- **Primary `#ecff3e`** is a neon yellow-green. It fills the "Browse the gallery" button and the thin line at the top of the capture; its on-primary text is the canvas color `#08090d`. A measured glow shadow around the button is `rgba(235, 242, 128, 0.45) 0px 0px 12px 0px`.

No other colors were measured on the page.

## Typography

Two families: **overusedGrotesk** (25 characters, weight 400; the giant numerals and nav) and **Geist** (18 characters, loaded as a 100 to 900 variable font; button and labels at weight 600).

- **Body** role: overusedGrotesk 400 at 200px with 200px line height (the "92%" counter); 85.8px on the mobile pass.
- **Display** (button text): Geist 600, 14px, line height 21px; labels use 14px with 0.28px tracking (22 characters).
- **Nav**: overusedGrotesk 400 at 16px, line height 24px (the mobile header measures Geist 16px, 24px).
- Desktop size distribution: 14px (40 characters) and 200px (3).

Geist is an open font; overusedGrotesk is a free grotesque, so no substitute is needed.

## Layout

A single full-viewport scene (1,280 by 800). The wordmark is centered at the top; the counter is anchored at the lower left; the primary button and secondary labels ("AUDIO OFF", "Entries to date", "MADE BY MAJO PUTERKA") sit around the edges. Measured padding steps: 40px (nav, 2 elements), 24px, 18px, 42px and 56px; a 4px gap occurs 4 times.

## Elevation & Depth

Depth is limited to one glow: the button's yellow shadow at 45 percent alpha with a 12px blur. The dot grid in the capture and the thin top line are decorative layers and were not measured.

## Shapes

One radius is measured: **19px**, on a single element, the "Browse the gallery" button (a 57px-tall control, so the corners are strongly rounded without being a full pill). Every other measured element computes a radius of 0px, including the wordmark, the nav items and the counter. There is no card, input or image frame in the measured state, so no other radius is documented, and no pill (9999px) value was recorded.

## Components

- **Primary button ("Browse the gallery").** `#ecff3e` fill, `#08090d` text, Geist 600 14px, padding 18px 42px, height 57px, width 209px, radius 19px, with the yellow glow. This is also the mobile CTA at the same size.
- **Nav.** Pale `#cfdee5` text in overusedGrotesk 16px with 0 40px padding on desktop; "AUDIO OFF" is the audio toggle.
- **Credit link.** "MADE BY MAJO PUTERKA"; on hover the text duplicates (the hover-state text reads "MADE BY MAJO PUTERKA" twice) with unchanged color.
- **Counter.** 200px numeral in `#cfdee5`.

## Design System Architecture

No public design system or token package was found; the page opened is https://mesh3d.gallery/the-state-of-the-gallery (measured by the extractor; see SOURCES.json). The shipped CSS is small (6,309 characters of measured corpus). The de-facto system is a two-color palette (near-black and pale blue-gray) with one neon accent, two grotesque families, and a single 19px radius.

## Do's and Don'ts

- Do keep the ground at `#08090d` and text at `#cfdee5`; use `#ecff3e` for the single primary action.
- Do use very large light numerals (200px desktop, 85.8px mobile) as the hero.
- Do set small labels in Geist 600 14px with 0.28px tracking.
- Do give the primary button a 19px radius and a soft yellow glow.
- Don't add other accent colors; none are measured.
- Don't add borders or cards; none are measured.
- Don't treat the loading counter value as a fixed statistic.

## Responsive Behavior

Measured at 390px: the primary CTA stays 209px wide and 57px high with the same padding; the header is 390px wide and 76px tall with 0 16px padding and "AUDIO OFF" in `#cfdee5` at 16px; the counter size falls to 85.8px (20 characters), and labels are 12px (22 characters). Layout reflow and the scrolled sections were not measured.

## Iteration Guide

1. Start from `#08090d` with `#cfdee5` text.
2. Add a giant 200px (85.8px mobile) thin numeral in overusedGrotesk.
3. One neon `#ecff3e` button, 57px high, 19px radius, with a 12px yellow glow.
4. Keep labels at 14px Geist 600 with 0.28px tracking.
5. Re-capture after the intro finishes before documenting the gallery sections.

## Content and Voice

The copy is terse and typographic. The measured strings are "SCROLL TO DIVE IN", "AUDIO OFF", "Entries to date(551)", "Websites(4...", "Browse the gallery" and "MADE BY MAJO PUTERKA". Labels are written in capitals for instructions and credits and in sentence case for the data lines and the button. The counter is a bare percentage, which the page uses as a loading or progress device before the review content appears. Parenthesised counts after a label ("Entries to date(551)") are the page's way of showing live totals, so numbers carry the story rather than prose. The audio toggle is shown as an explicit state ("AUDIO OFF"), which signals that sound is part of the experience. The wordmark "mesh" is set in lowercase with an arrow-like glyph at the top center of the capture.

## Measurement Notes

The extraction describes the entry state only: 586 visible elements, an 800px page height and a 1,280px width. The by-area background list has three entries, the canvas `#08090d` (2,048), the yellow-green `#ecff3e` (17) and the pale `#cfdee5` at area 0, so the pale color is a text and glyph color, not a fill. The text color list has two entries: `#cfdee5` (25 characters) and `#08090d` (18, the button label). Font use is split by element: the giant numerals and the nav use overusedGrotesk, and the button and labels use Geist. No border colors, no gradients and no images were recorded as styles. The hover list contains one entry (the credit link). The dot grid and the thin top line visible in the capture were not recorded as measured styles, so they carry no tokens.

The desktop and mobile passes agree on the button (209px by 57px, padding 18px 42px, radius 19px, Geist 600 14px) and on the palette. They differ in the counter, which measures 200px on desktop and 85.8px on mobile, and in the header, which measures 76px tall with 16px side padding on mobile. Because the page has no cards, forms or long-form text in the measured state, any rule about those elements, such as how gallery entries are laid out, which thumbnail ratios are used, or how filters look, is not measured and is deliberately not stated here. A later capture that scrolls through the review sections would be required to document them.
