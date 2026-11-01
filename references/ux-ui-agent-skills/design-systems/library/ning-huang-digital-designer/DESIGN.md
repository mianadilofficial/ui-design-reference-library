---
version: alpha
name: "Ning Huang"
category: "Portfolio"
description: "Ning Huang's digital designer portfolio: a #080808 stage with #fcfcfc type and #f0f0f0 light bands, a 179.2px uppercase PP Eiko wordmark, PP Neue Montreal titles, Fragment Mono 300 captions at 11.7006px with -4% tracking, and 10px radius cards."
colors:
  canvas: "#080808"
  surface-light: "#f0f0f0"
  ink: "#fcfcfc"
  primary: "#fcfcfc"
  black: "#000000"
  ink-grey: "#363636"
  on-dark: "#ffffff"
  hairline: "#ffffff33"
typography:
  display:
    fontFamily: "\"PP Eiko\", sans-serif"
    fontSize: 179.2px
    fontWeight: 400
    lineHeight: 179.2px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"PP Eiko\", sans-serif"
    fontSize: 54.6px
    fontWeight: 400
    lineHeight: 54.6px
    textTransform: uppercase
  heading:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 37.6332px
    fontWeight: 400
    lineHeight: 37.6332px
    textTransform: uppercase
  subheading:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 57.0343px
    fontWeight: 400
    lineHeight: 57.0343px
    textTransform: uppercase
  body:
    fontFamily: "\"Fragment Mono\", monospace"
    fontSize: 11.7006px
    fontWeight: 300
    letterSpacing: "-4%"
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 5px
  md: 10px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 16px
  s5: 20px
  s6: 32px
  s7: 40px
  s8: 60px
  s9: 80px
  s10: 96px
components:
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 5px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

Ning Huang's portfolio at https://ning-h.com/ (title "Ning Huang | Digital Designer", language `en-US`) belongs to a digital designer based in Melbourne, Australia, who the opened page says focuses on web experience and motion design and designs websites that blend design with code. The capture opens with a very large wordmark across the full width, "NING HUANG'25", set in an uppercase grotesque with italic serif-style "G" glyphs and a quote-mark before 25. A single row beneath it reads "(ABOUT)" at the left, "MIXING INTERACTIONS, CODE, & IMAGINATION" at the center and "(CONTACT)" at the right. A centered "DESIGN - FOLIO" title mixes a roman grotesque with an italic serif, and a small mono paragraph says "I'M A DIGITAL DESIGNER BASED IN MELBOURNE, AU FOCUSED ON WEB EXPERIENCE & MOTION DESIGN." The page is 8800px tall at 1280px wide; in the capture, the rest of the scroll is dark and then a flat light-grey field, because the project content is animated and was not present in the still.

The opened page also lists services (Art Direction, Web Design, Interaction, 3D Rendering, Web Development), project names, recognitions (Awwwards Site of the Day, Awwwards Developer Award and Honorable Mention, CssDA Site of the Day, GSAP Showcase Site of the Day), a Codrops designer spotlight and the footer credit "Design & Dev by Ning Huang".

The personality is high-contrast and editorial: near-black stage, giant type, tiny monospaced captions in parentheses, everything uppercase.

## Colors

The page is a near-black stage with light type, and a light grey field below.

- **Canvas `#080808`** is the body background (2659 units).
- **Light surface `#f0f0f0`** is the largest background area (5120 units) and the h3 text color; it fills the lower sections.
- **Ink `#fcfcfc`** is the most-read text color (543 characters) and the h2 and body-text color on the dark stage.
- **`#080808` as text** (250 characters) is used on the light surface; `#363636` (98 characters) is the h1 color measured on the giant wordmark and a muted tone; `#ffffff` (34 characters) is small label text.
- **Black `#000000`** is a measured deeper band (it appears in the capture as the strip behind the bio line).
- **Hairline `#ffffff33`** is the translucent border on five elements.

No chromatic accent was measured, so `primary` equals the ink. The root variables belong to a WordPress theme and its Bricks builder (`--bricks-color-sky-blue`, `--wp--preset--color--vivid-purple` and similar); those are builder defaults and are not used as brand colors.

## Typography

Three families, each with a distinct role:

- **PP Eiko** (loaded as 400 italic) for the giant wordmark at 179.2px / 179.2px, uppercase (54.6px on the 390px mobile pass); a 133.004px size is also present.
- **PP Neue Montreal** (300 and 400) for titles: 57.0343px (h3), 45.0343px, and 37.6332px (h2), all with line height equal to size and uppercase; the h2 is 24.4478px on mobile.
- **Fragment Mono** (400) for captions and body at 11.7006px, weight 300, with -4% letter spacing, uppercase (10.0523px on mobile); 13.7006px and 10px sizes also appear.

PP Eiko and PP Neue Montreal are commercial foundry fonts; if unavailable, use a neutral grotesque for titles, a high-contrast serif italic for display accents and any monospace for captions.

## Layout

Layout is edge-to-edge with a wide gutter: the wordmark spans the whole viewport width and the three-item nav row sits on the left edge, center and right edge. Measured gaps are 16px (12 uses), 40px, 8px, 80px and 96px; paddings are 5px (20 uses), 16px, 20px, 10px, 32px, 60px, 192px and 1480px. Small items carry 5px padding, and the footer text is set large at 45.0343px so that the closing block reads like a second headline. Sections alternate dark and light full-width bands, and the capture shows large empty areas between the wordmark, the nav row and the section titles, so vertical rhythm is built from generous blank space rather than from rules or borders.

## Elevation & Depth

No box shadows were measured. The root variables define WordPress preset shadows (`--wp--preset--shadow--deep`, `--wp--preset--shadow--outlined`) but no rendered element used them. Depth is carried by scale and by contrast between `#080808` and `#f0f0f0`.

## Shapes

Radii measured: 4px (six elements), 10px (five, project cards) and 5px (five). The cards (`#080808` fill, `#fcfcfc` text, 5px padding) use the 10px radius. Everything else is square.

## Components

- **card**: `#080808` fill, `#fcfcfc` text, 10px radius, 5px padding, with a PP Neue Montreal 37.6332px uppercase title.
- **nav row**: three parenthesized uppercase mono labels, "(ABOUT)" and "(CONTACT)", with a center tagline.
- **title**: giant PP Eiko wordmark and mixed roman/italic section titles.
- **footer**: text color `#080808` at 45.0343px / 49.5378px uppercase on the light field.

No button, form input or link style was detected by the extractor.

## Content and Voice

Microcopy is short, lowercase-free and declarative, written in the first person: "I'M A DIGITAL DESIGNER BASED IN MELBOURNE, AU", "MIXING INTERACTIONS, CODE, & IMAGINATION". Navigation labels are wrapped in parentheses, a typographic habit that reads like a footnote marker. The opened page ends with a direct invitation, "Have an idea in mind? Feel free to contact.", and signs off with "Design & Dev by Ning Huang". Project names (Generated Art Gallery, Veggie Taipei, Concept Exploration, 3D Rendering) are plain titles, and the experience list names two studios with year ranges. The mixing of a roman grotesque and an italic serif inside a single title ("DESIGN - FOLIO") is the main expressive device in the copy: the italic word is always the playful one, and the hyphen is a spaced dash.

Interaction and motion matter to this designer, according to the page's own description, but only the static state was measured here, so hover, scroll and transition behavior are not documented. The measured hover list is empty, and no motion recording was made (`--no-motion`).

## Design System Architecture

No public design system, brand guide or press kit exists: the opened page https://ning-h.com/ links to Contact (email), About, CV, social profiles, awards and a Codrops spotlight, and states no tokens. The root variables show a WordPress site built with Bricks (`--bricks-*` and `--wp--preset--*` names) plus the designer's own variables: `--text-2xl: 5.6rem`, `--text-lg: 3.2rem`, `--text-normal: 1.6rem`, `--br1: 0.4rem`, `--outro-img-size: clamp(10rem, 1.333rem + 50vw, 28rem)` and a `--spacing-*` scale. The de-facto system is three fonts with strict roles, two neutral surfaces and a few small radii.

## Do's and Don'ts

- Do set all text uppercase and keep captions in Fragment Mono 300 at 11.7006px with -4% tracking.
- Do let PP Eiko italic make one giant wordmark at 179.2px.
- Do alternate `#080808` and `#f0f0f0` bands.
- Do round project cards at 10px and keep other corners at 4px to 5px.
- Don't add chromatic colors; none were measured.
- Don't use builder default colors (sky blue, vivid purple) from the root variables.
- Don't add shadows.

## Responsive Behavior

The 390px mobile pass recorded the PP Eiko wordmark at 54.6px / 54.6px, the h2 at 24.4478px and the mono body at 10.0523px, all uppercase. How the nav row, cards and bands reflow was not measured, and no breakpoint values were captured.

## Iteration Guide

1. Start on `#080808` with `#fcfcfc` text; add `#f0f0f0` bands for later sections.
2. Use a full-width PP Eiko 179.2px uppercase wordmark.
3. Use PP Neue Montreal 400 for titles and Fragment Mono 300 at 11.7006px for captions.
4. Round cards at 10px; keep other elements 4px to 5px.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=ning-huang-digital-designer --url=https://ning-h.com/ --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=ning-huang-digital-designer`.
