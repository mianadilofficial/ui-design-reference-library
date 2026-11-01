---
version: alpha
name: The Pendragon Cycle
category: "Culture & Events"
description: "Promotional site for The Pendragon Cycle: Rise of the Merlin (pendragoncycle.com), a dark #1a1a1a immersive page with warm parchment tan #9c8e7d and cream #fff5eb type in the serif faces LTC Goudy Oldstyle Pro, Gryphius MVB and Antiquarian Scribe, driven by a full-screen sound-enable gate."
colors:
  canvas: "#1a1a1a"
  ink: "#9c8e7d"
  primary: "#9c8e7d"
  surface: "#fff5eb"
typography:
  body:
    fontFamily: gryphius-mvb, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 27.6px
  display-mobile:
    fontFamily: ltc-goudy-oldstyle-pro, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.1px
  nav:
    fontFamily: gryphius-mvb, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20.7px
rounded:
  xs: 2px
  sm: 2.5px
spacing:
  s1: 2px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 16px
  s6: 24px
  s7: 30px
  s8: 35px
components:
  nav:
    textColor: "{colors.surface}"
    typography: "{typography.nav}"
    padding: 16px
    height: 59px
---

## Overview

The Pendragon Cycle: Rise of the Merlin is the promotional site for a screen adaptation, titled "The Pendragon Cycle: Rise of the Merlin". The capture shows an immersive, cinematic landing: a full-screen photographic scene of a dark sword planted in a rock under a snowy storm sky, surrounded by a ring of white Celtic and runic glyph symbols, with a "Now streaming on DailyWire+" line at the top center, a "Menu" link at the top left, a round dotted control at the top right, "Get Access" at the lower left with a trailing arrow glyph, and the title lettering ("RISE ...") at the bottom center. A small promotional card titled "Step Into the Legend" and a cookie panel overlay parts of the scene.

At measurement time, the DOM was dominated by a sound gate: the body text read "Enable sound", a counter ("100"), and "CLICK ANYWHERE TO ENABLE SOUND", on a 1280 by 800 page with 42 visible elements. The cookie panel and the promotional pop-up are overlays and are not documented as brand UI. A later re-extraction attempt returned a thin-page error (recorded in SOURCES.json), so the figures below come from the original measurement.

## Colors

- **Canvas `#1a1a1a`** is the near-black body background of the measured page.
- **Ink and primary `#9c8e7d`** is a muted parchment tan, the most-read text color (458 characters) and the one border color measured (2 elements). It is used for both text and thin outlines; no filled button exists in the measured data, so the same value is used for ink and primary.
- **Surface `#fff5eb`** is a warm cream (59 characters of text; fill at `#fff5eb4d` in 4 percent alpha as an overlay tint), used for header text ("Menu", "Mute") on the mobile pass.
- The shipped stylesheet carries many other values (a blue `#3860be`, greens `#68b631` and `#468254`, a red `#b42318` and grays), which belong to bundled UI libraries such as the consent widget and form controls; they are not shown as brand elements in the capture and are not adopted.

## Typography

Three families are loaded: **LTC Goudy Oldstyle Pro** (446 characters, weights 400 and 700; Goudy-style old-style serif), **Gryphius MVB** (68 characters, weight 400; a blackletter-influenced serif used on the body role and the header) and **Antiquarian Scribe** (3 characters at 48px, a calligraphic display face).

- **Body** role: Gryphius MVB 500 at 24px, line height 27.6px (the sound-gate text).
- **Display-mobile**: Goudy Oldstyle 400 at 14px, line height 16.1px (the "Now streaming on DailyWire+" line on mobile).
- **Nav** (mobile header): Gryphius MVB 400 at 18px, line height 20.7px.
- Letter-spacing 0.16px at 16px (68 characters) and 0.32px at 16px (56 characters) are the only tracked combinations. Size distribution: 13.008px (378 characters), 16px (124), 24px (12), 48px (3).

These are licensed web fonts; a Goudy-like old-style serif and a calligraphic display face would be needed as substitutes.

## Layout

The viewport is filled by one scene (page height measures 800px, equal to the viewport). Navigation sits at the extreme corners (Menu top left, a round control top right), a centered line at the top, a call to action at the lower left and the title at the lower center. There is no conventional grid or section stack in the measured state. Measured spacing steps are 2px, 6px, 8px, 10px, 16px, 24px, 30px and 35px; gaps of 35px and 24px each occur twice.

## Elevation & Depth

Depth is photographic: fog, snow, rock and sword in the artwork, with white glyph rings drawn on top. The only measured shadow belongs to the cookie panel and is not a brand token.

## Shapes

Measured radii are 2px (4 occurrences) and 2.5px (1). Round controls (the top-right dotted circle in the capture) are visible; their radius was not recorded in the extraction. The tokens keep the two measured values only.

## Components

- **Header navigation (mobile pass).** Cream `#fff5eb` text, Gryphius MVB 18px, padding 16px, 59px tall, 390px wide, with "Menu" and "Mute" links.
- **Sound gate.** A full-height button on the desktop pass whose text is "Enable sound"; its hover state changes the border color from `rgb(156, 142, 125)` to `rgba(156, 142, 125, 0.075)` (measured). Text color stays `#9c8e7d`.
- **Get Access link.** Cream serif text with an underline rule and an arrow glyph (visible in the capture; its numeric styling was not measured).
- Cookie panel, "Reject All" / "Accept Cookies" buttons, "Cookie Settings" and the "Step Into the Legend" pop-up are overlays and are excluded.

## Design System Architecture

No public design system, press kit or brand guideline was found: the site is a single-page promotional build that loads three web font families (LTC Goudy Oldstyle Pro, Gryphius MVB, Antiquarian Scribe) and a consent library. The opened page is https://pendragoncycle.com/ (see SOURCES.json). The de-facto system is a dark ground, parchment tan and cream text, old-style serif faces and glyph iconography.

## Do's and Don'ts

- Do keep the ground near-black (`#1a1a1a`) and set text in parchment tan `#9c8e7d` or cream `#fff5eb`.
- Do use old-style serif faces for all text and a calligraphic face for display lettering.
- Do overlay thin white glyph symbols and fine rules rather than filled buttons.
- Do use very small radii (2px and 2.5px) where radius is needed.
- Don't document the cookie panel, pop-up or consent buttons as brand UI.
- Don't add saturated UI colors from the bundled libraries.
- Don't assume the full page structure; only the landing state was measured.

## Responsive Behavior

Measured at 390px: the header is 390px wide, 59px tall with 16px padding, cream text at 18px; the "Now streaming on DailyWire+" line is 14px (156px wide, 32px tall) and renders in `#1a1a1a`; mobile font sizes by characters are 13.008px (378), 14px (107), 16px (81), 20px (39) and 18px (18). Other breakpoints and the behavior of the scene on small screens were not measured.

## Iteration Guide

1. Start from `#1a1a1a` with parchment tan `#9c8e7d` and cream `#fff5eb` text.
2. Set text in Goudy Oldstyle and Gryphius MVB, display lettering in Antiquarian Scribe.
3. Keep controls as underlined text links and outlined controls, not filled buttons.
4. Use 2px or 2.5px radii only.
5. Re-measure the page after the sound gate is dismissed before documenting the full scene.

## Content and Voice

The visible copy is brief and ceremonial. The measured and captured lines are "Now streaming on DailyWire+", "Get Access", "Menu", "Mute", "Enable sound" and "CLICK ANYWHERE TO ENABLE SOUND". A pop-up headed "Step Into the Legend" shows a still of costumed characters; it is an overlay and is only cited here as copy tone. The page assumes audio is part of the experience: the first interaction is a request to enable sound, and a Mute control stays in the header. Imagery is cinematic key art of Arthurian mythology: stormy sky, snow, a black sword with ornate Celtic knotwork on the hilt, and a ring of white glyphs (a bird, an interlaced knot, a crossed circle, a spiral, a serpent-like form). The voice is mythic and solemn, with no marketing superlatives in the measured copy.

## Measurement Limits

The page measured at only 42 visible elements and an 800px scroll height, so the extraction describes the entry state rather than a full site. No heading element was detected (h1, h2 and h3 are null on desktop), no primary CTA, no link and no input. The background-by-area list holds only translucent cream (`#fff5eb4d`) and `#fff5eb`, which are overlay tints and not page fills. Hover was recorded only on the sound gate and on consent links. Anything beyond these entries, including the content pages behind the Menu, is not measured here.
