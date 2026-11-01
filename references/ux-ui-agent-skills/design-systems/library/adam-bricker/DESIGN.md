---
version: alpha
name: Adam Bricker
category: "Portfolio"
description: "Cinematographer portfolio measured at adambricker.com: full-bleed film footage, near-black #020202 and cool off-white #f0f2f1 text, huge uppercase NBInternationalPro 500 page labels at 143.25px with -2.865px tracking, small Chaps serif metadata labels and camera-style timecode readouts."
colors:
  canvas: "#f0f2f1"
  ink: "#020202"
  primary: "#f0f2f1"
  surface-green: "#01803b"
  black: "#000000"
typography:
  display:
    fontFamily: NBInternationalPro, sans-serif
    fontSize: 143.25px
    fontWeight: 500
    lineHeight: 106.005px
    letterSpacing: "-2.865px"
    textTransform: uppercase
  display-mobile:
    fontFamily: NBInternationalPro, sans-serif
    fontSize: 51px
    fontWeight: 500
    lineHeight: 37.74px
    letterSpacing: "-1.02px"
    textTransform: uppercase
  heading:
    fontFamily: NBInternationalPro, sans-serif
    fontSize: 52.5px
    fontWeight: 500
    lineHeight: 63px
  nav:
    fontFamily: Chaps, serif
    fontSize: 12.75px
    fontWeight: 400
    lineHeight: 12.75px
  link:
    fontFamily: NBInternationalPro, sans-serif, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 1.5px
  pill: 9999px
spacing:
  s1: 3px
  s2: 6px
  s3: 11.46px
  s4: 15px
  s5: 18px
  s6: 24px
  s7: 36px
  s8: 72px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
---

## Overview
Adam Bricker is a Los Angeles cinematographer (the capture header reads "ADAM BRICKER, ASC"), and adambricker.com is his personal portfolio built as a camera interface. The page shows a live timecode, a frame rate (24 and 23.98), ISO 1600, "R3D HQ" and a 2.39:1 aspect ratio, together with a local clock ("21:32 PST (Los Angeles)"). Navigation is Home (01), Projects (02), Books (03), Photography (04) and About (05). The only outbound links are Instagram (@realadambricker) and a "Get In Touch" email link.

The capture is a single full-viewport scene: a full-bleed film still of dancers in formal wear under a dark red-lit floor, with the project title "Hacks" set large in white at the lower left (with "Papa Johns" as another slide title), a slide counter "1 - 4" above it, previous and next circular arrow buttons and an "Instagram" link at the lower right, a timecode "00:00:21" and a menu button at the upper right, and a tick-mark scrubber with indices "01" and "04" along the bottom edge. The page measures 800px high, so it is one screen with the scroll inside the slideshow. The design is almost entirely imagery plus tiny typographic labels.

## Colors
The palette is two near-neutrals over footage. `{colors.canvas}` (#f0f2f1) is a cool off-white used for every text label on the video (115 character weight) and as the body background; `{colors.ink}` (#020202, also 115) is near-black used for the giant "HOME" page label and the dark area behind video (5120 area units). `{colors.black}` (#000000) covers 1024 area units, and `{colors.surface-green}` (#01803b) covers another 1024 units; the extraction records it as a background area but the green element is not visible in the capture, so it is declared as measured but its role is not identified. `{colors.primary}` is #f0f2f1: the extractor found no filled button, and the light neutral is the colour of every interactive label.

The focus ring in the stylesheet is a blue `inset 0 0 0 2px rgb(27 127 204 / .9)` used by the video player controls (15, 9 and 5 uses), and the Tailwind ring colour `rgba(59,130,246,.5)` is a framework default, neither of which is a brand colour. All other colour comes from the footage.

## Typography
Five faces are loaded: NBInternationalPro (400 and 500) for display and headings, NBInternationalProMono (400) for technical readouts, Chaps (400, a serif) for the small header labels, ASThermalRegular (400, a dot-matrix face), and Inter and Space Mono appear in the stylesheet. Variables name them `--font-family-sans`, `--font-family-dot`, `--font-family-serif` and `--font-family-mono`.

- `{typography.display}`: NBInternationalPro 500 at 143.25px / 106.005px, -2.865px tracking, uppercase, the page label "HOME" (line-height 0.74). Mobile: 51px / 37.74px, -1.02px.
- `{typography.heading}`: NBInternationalPro 500 at 52.5px / 63px, the project titles ("Hacks", "Starbucks Chef's Table"). On mobile the project title is 36px / 43.2px at weight 400 with -0.36px tracking.
- `{typography.nav}`: Chaps 400 at 12.75px / 12.75px, the header name, clock and "View Work". Mobile: 13px.
- `{typography.link}`: NBInternationalPro 400 at 16px / 24px.

Type is either enormous or tiny, with nothing in between. Font substitutes: NB International and Chaps are commercial; Helvetica-like grotesques and a bookish serif are the stand-ins, and Space Mono or Inter appear in the site's own CSS.

## Layout
The desktop frame is 1280px wide and 800px tall, edge to edge video with all UI at the edges: header at the top (name at the left, clock beside it, "View Work" and the timecode at the right), project title at the bottom left, slide controls at the bottom right and a scrubber at the bottom centre. Spacing uses a fluid base of 4px (`--fluid-base-size: 4px`) and the measured steps 3, 6, 11.46, 15, 18, 24, 36 and 72px. The giant page label sits with padding-top 11.46px and animates in with a translateY transform of 117.453px at measurement time.

## Elevation & Depth
There are no shadows: role-level boxShadow is none and the Tailwind shadow variables resolve to `0 0 #0000`. Depth is photographic. Text is laid over the footage directly with no scrim visible in the measurements.

## Shapes
Radii measured on elements: pill (2 elements, the round arrow buttons) and 1.5px (1 element). The stylesheet also lists 5px (4), 2px, 3px, 4px and 8px for player controls. `{rounded.pill}` is 9999px and `{rounded.xs}` is 1.5px. Nothing else is rounded; the film frame is square.

## Components
**Round arrow buttons**: outlined circles with previous and next arrows, light `{colors.canvas}` strokes over the video, used as the slideshow controls.

**Menu button**: a small light square with a hamburger icon at the upper right.

**Nav label**: Chaps 12.75px in `{colors.canvas}`, no underline.

**Slide title**: NBInternationalPro 500 at 52.5px in white over the footage.

**Scrubber**: tick marks along the bottom with the active slide index. Its tick sizes are not measured.

## Design System Architecture
No brand guideline or design system is linked from the homepage opened for this document (https://www.adambricker.com/), which also has no footer or credits. The de-facto system is a Tailwind base (`--tw-ring-color`, `--tw-shadow`) with a font-family variable set and a fluid sizing base of 4px (`--fluid-base-size`), plus a video player library whose focus variables (`--media-focus-box-shadow`, `--media-menu-item-focus-shadow`) show up in the stylesheet. Colour is limited to two neutrals, so there are no colour variables to document.

Content and microcopy: project names are short titles of commercial and television work (the measured h2 values include "Hacks", "Papa Johns" and "Starbucks Chef's Table"), and the site also links a book titled "LA_NJ_CHI_" with underscores in the title, which matches the system-label feel of the camera metadata. The slide counter is written as "1 - 4", the clock as "21:32 PST (Los Angeles)", and the timecode as "00:00:13" counting up as the footage plays. Labels are terse nouns; there is no marketing copy and no paragraph text anywhere on the page (the bodyText role is empty in both the desktop and mobile passes).

Page transitions follow the same camera idea: the large page label for the current section ("HOME") enters with a transform, and the numbered navigation (01 to 05) doubles as an index. The page measures 800px tall at desktop width, so everything is designed for one screen at a time.

## Do's and Don'ts
- Do let full-bleed motion footage be the design; keep interface elements at the edges.
- Do use enormous uppercase NBInternationalPro for page labels and project names.
- Do use tiny serif labels for metadata like clocks and nav.
- Do show camera metadata (timecode, frame rate, ISO, aspect ratio) as part of the interface.
- Don't add coloured buttons or panels.
- Don't use the blue player focus ring as a brand colour.
- Don't add shadows or scrims that the measurements do not show.

## Responsive Behavior
Measured at 390px: the page label drops to 51px / 37.74px, the project title to 36px / 43.2px at weight 400 (box 358px wide), the header nav to 13px Chaps and the header reduces to "Adam Bricker" and "View Work" (the clock and timecode text are not in the mobile nav text). The header is 347px wide and 16px high on mobile. Scrubber and control sizes at mobile were not measured.

## Iteration Guide
1. Full-bleed footage as the whole page; text in `{colors.canvas}`.
2. Giant uppercase page label in NBInternationalPro 500 with -2.865px tracking; project titles at 52.5px.
3. Header and metadata in Chaps 12.75px.
4. Add camera metadata (timecode, FPS, ISO, aspect ratio) as the interface voice.
5. Circular outlined arrow buttons for the slideshow.
6. Hover, dark mode and other pages (Projects, Books, Photography, About) are not measured.
