---
version: alpha
name: "Pantheon Media Group"
category: "Product & SaaS"
description: "Pantheon Media Group home screen measured live: black #000000 canvas with #f2f2f2 text over full-bleed video, uppercase PPMori 400 at 17.8105px with 0.534316px tracking, DMMono for bracket glyphs, 0px radius everywhere and no shadows."
colors:
  canvas: "#000000"
  ink: "#f2f2f2"
  primary: "#f2f2f2"
typography:
  display:
    fontFamily: PPMori, "PPMori Fallback"
    fontSize: 17.8105px
    fontWeight: 400
    lineHeight: 17.8105px
    letterSpacing: 0.534316px
    textTransform: uppercase
  display-mobile:
    fontFamily: PPMori, "PPMori Fallback"
    fontSize: 14.94px
    fontWeight: 500
    lineHeight: 17.0316px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 3px
  s2: 3.65px
  s3: 8px
  s4: 10px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 92px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
---

# Pantheon Media Group

## Overview

www.pantheonmedia.com (title "Pantheon Media Group") is a full-bleed, video-led home screen for a media company with offices in Los Angeles, New York, London, Austin, Vancouver, Abu Dhabi and Riyadh, according to the page's own copy fetched with WebFetch. The measured view is a single 1280px by 800px viewport (scroll height 800px, 131 visible elements). Behind everything plays a full-frame video: in the capture a man in a dark suit and light blue shirt speaks in front of a US flag, with horizontal glitch-style displacement bands cutting across the frame. Over the video sit an enormous white wordmark "PANTHEON" spanning the full width with small "MEDIA" and "GROUP" labels set under its left and right ends, a round striped logo mark top left, a "[/ ] MENU" control top right, a centred row of city names, and a "© 2026" line left and "ALL RIGHTS RESERVED" right along the bottom edge. The palette is black and off-white only. Everything is uppercase and set in a geometric grotesque with a mono used for the bracket glyphs, so the page reads as a poster: image, one huge word and tiny caps.

## Colors

Two colors were measured. Backgrounds by area: `#000000` (weight 2048) and `#f2f2f2` (1024, which is the light overlay area including the wordmark); the only measured text color is `#f2f2f2` (128 characters). Canvas is therefore `#000000`, ink and primary are `#f2f2f2`. The CSS corpus recorded no color list, and no named root variables exist (the only root variable is `--vh: 8px`). A thin green line is visible at the very bottom edge of the capture, but no measured value supports it and it is not tokenised. Because the page is a video, perceived color comes from the footage; the interface layer never uses more than the two values.

## Typography

Two families, both loaded: PPMori (weights 400 and 500, with a declared "PPMori Fallback") carrying 116 characters, and DMMono (400 and 500, with a "DMMono Fallback") carrying 12 characters at weight 100 as measured. No substitute is declared beyond the fallback face names. Measured sizes by characters: 17.8105px (55), 14.94px (25), 36px (20), 16px (12), 25.4706px (10) and 27px (6). The detected display role is the uppercase city label "LOS ANGELES": PPMori 400, 17.8105px / 17.8105px, `letter-spacing` 0.534316px, uppercase. On a 390px viewport the equivalent text measured 14.94px / 17.0316px at weight 500, uppercase (the "© 2026 ALL RIGHTS RESERVED" line), and the size list became 14.0632px, 14.94px, 36px, 16px, 20.0867px and 27px. The size of the giant PANTHEON wordmark was not measured as text (it spans the viewport width in the capture and is not reported as a text run), so no pixel size is given for it. All text measured is uppercase with a small positive tracking at the 17.8105px size, and no line is set in a heavier weight than 500.

## Layout

The layout is a one-screen composition pinned to the four corners and centre. Top left: the logo mark. Top right: the menu control, written "[/ ] MENU" with the "[/ ]" glyphs in the mono face. Across the upper third: the full-width PANTHEON wordmark, with MEDIA flush left beneath it and GROUP flush right. Lower middle: the seven city names in one centred row, separated by wide gaps. Bottom: "© 2026" flush left and "ALL RIGHTS RESERVED" flush right. Measured gaps are 16px (2 elements), 20px (2) and 3px (1); paddings 10px (7), 24px (3), 8px, 92px and 3.64912px. The spacing tokens are 3, 3.65, 8, 10, 16, 20, 24 and 92px. According to the fetched page, the main navigation lists About, Companies, Projects, News and Contact (linking to /about-us, /companies, /projects, /news and /contact), and the cities also appear again in a "Cities" section whose entries link to /contact. Anything below the first viewport was not measured.

## Elevation & Depth

None measured: no box shadows and no borders were recorded. Depth is only the video's own depth of field and the displacement glitch bands, with white type laid directly on the image. No overlay or scrim color was measured, so none is documented.

## Shapes

No border radius was measured: `desktop.frequencies.borderRadii` is empty, so every rendered element computes to 0px. The tokens declare `rounded.none: 0px` on that basis. The round logo mark is an image and not a shaped element.

## Components

- **City links**: PPMori 400, 17.8105px, uppercase, `#f2f2f2`, 0.534316px tracking, in a single centred row; they are plain text links without fill or border.
- **Menu control**: a text button "MENU" preceded by a "[/ ]" bracket glyph, with a "[/ Close]" counterpart in the open state (from the fetched page copy).
- **Footer line**: "© 2026" and "ALL RIGHTS RESERVED", 14.94px at 500 on mobile measurement, uppercase.
- **Wordmark and logo**: image-like elements in white, described only qualitatively.
- No buttons with fills, inputs or cards were found in the measured viewport.

## Design System Architecture

No public design system or brand guideline exists in the pages opened: the WebFetch of https://www.pantheonmedia.com/ reported no link or text referring to brand guidelines, a style guide or a design system, and no search was run. The de-facto system is minimal. There is a single root variable (`--vh: 8px`, a viewport-height helper), two font families with declared fallback faces, and a two-color palette. No token naming scheme can be documented.

## Do's and Don'ts

- Do keep the interface to `#000000` and `#f2f2f2` over full-bleed video.
- Do set text uppercase in PPMori with small positive tracking at 17.8105px.
- Do use DM Mono only for bracket glyphs and similar punctuation controls.
- Do leave corners at 0px.
- Don't add accent colors, shadows or filled buttons; none were measured.
- Don't set body paragraphs: the measured viewport contains no running text.
- Don't invent a size for the wordmark; measure it first.

## Responsive Behavior

Measured at 390px: the uppercase label role became 14.94px / 17.0316px at weight 500; by character count the sizes were 14.0632px (55), 14.94px (25), 36px (20), 16px (12), 20.0867px (10) and 27px (6). Layout changes at that width, the menu treatment and breakpoints were not measured.

## Iteration Guide

1. Canvas `#000000`, ink `#f2f2f2`; full-frame video behind.
2. Set all text uppercase in PPMori 400 at 17.8105px with 0.534316px tracking.
3. Pin small elements to the corners and centre-bottom; use a single huge wordmark across the top third.
4. Keep radius at 0 and use no shadows.
5. Measure any new text role, especially the wordmark, before adding it.

## Imagery and Art Direction

What the capture shows, described without measurement: the hero is moving footage rather than a still, cropped so the speaker's head and torso fill the centre of the frame while the huge white wordmark crosses his forehead and the city names sit over his jacket. The footage is slightly desaturated and warm, with a shallow background. Thin horizontal bands of the image are shifted sideways, a glitch effect that gives the otherwise formal portrait a digital edge. Type is always white and sits directly on the picture, so legibility depends on the footage staying mid-tone behind it; the bottom corners carry the smallest type on the page. The wordmark with its two small labels, MEDIA at the left and GROUP at the right, turns the company name into a frame for the image, and the city row acts as a quiet global footprint line. No stills, logos of clients or text blocks appear in the first viewport.
