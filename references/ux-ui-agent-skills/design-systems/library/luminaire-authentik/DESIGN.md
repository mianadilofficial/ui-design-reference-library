---
version: alpha
name: "Luminaire Authentik"
category: "Retail & E-commerce"
description: "Luminaire Authentik (luminaireauthentik.com, Canadian custom lighting manufacturer): PP Editorial New serif headings at 53.3333px with DM Sans body, warm sand canvas #e8e0d2, deep brown ink #433c35, terracotta #8c4630 bar, 70px pill buttons, tile and lamp photography."
colors:
  canvas: "#e8e0d2"
  page-largest: "#e0d8cb"
  ink: "#433c35"
  primary: "#433c35"
  on-primary: "#fff7e9"
  surface-2: "#c3af9f"
  ink-4: "#8c4630"
  ink-6: "#000000"
typography:
  display:
    fontFamily: DM-Sans, sans-serif
    fontSize: 21.3333px
    fontWeight: 500
    lineHeight: 27.7333px
    letterSpacing: 0.426667px
  display-mobile:
    fontFamily: DM-Sans, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 23.4px
    letterSpacing: 0.36px
  heading:
    fontFamily: PP-Editorial-New, sans-serif
    fontSize: 53.3333px
    fontWeight: 400
    lineHeight: 85.3333px
    letterSpacing: "-0.177778px"
  body:
    fontFamily: DM-Sans, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 19.5px
    letterSpacing: "-0.177778px"
  button:
    fontFamily: DM-Sans, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.94px
    letterSpacing: "-0.177778px"
  input:
    fontFamily: DM-Sans, sans-serif
    fontSize: 17.7778px
    fontWeight: 700
    lineHeight: 24.8889px
    letterSpacing: "-0.177778px"
rounded:
  xs: 5px
  sm: 9px
  md: 62.22px
  lg: 70px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 9px
  s5: 10px
  s6: 10.67px
  s7: 11.56px
  s8: 12px
  s9: 13.33px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 22.2222px
    height: 45px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 22.2222px
    height: 45px
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
    padding: 10px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 16px
  text-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    padding: 1px 2px
    height: 27px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-6}"
    rounded: "{rounded.xs}"
    clipPath: inset(0.0912%)
  footer:
    textColor: "{colors.ink}"
    padding: 53.3333px 48.8889px
---

## Overview

Luminaire Authentik's home page (title "Luminaire Authentik | Canadian Custom Lighting Manufacturer", lang en-CA) is a warm, material-led catalogue front. The capture begins with a terracotta announcement bar that scrolls the line "Discover our New Cast Carra Collection" (link underlined), then a rounded outlined header: a menu button, Trade, Design Consultation, the LA monogram at the centre, and at the right search, an "EN - CAD $" selector, a favourites counter and a bag counter, both showing 0. A hero block follows, but in the capture it is a black box with an embedded message, "We couldn't verify the security of your connection. Access to this content has been restricted." That text belongs to a blocked embedded video, not to the brand, and a round "Help" chat widget overlays it; both are excluded from this description.

Below it the page turns to warm sand. A kicker "NEW PRODUCT - CYCLO" in terracotta introduces a large serif sentence: "The new Cyclo Linear combines the simplicity of a linear form with soft curves inspired by our visual identity." A dark pill "Discover" with circular previous and next arrows sits beneath, next to a photograph of a brick-tiled kitchen island under a linear pendant and a close-up of a copper-toned fixture. A second statement reads "Located in the heart of the Eastern Townships, we create custom lighting for residential and commercial projects." with a "Discover our products" pill, and further photographs of pendant lamps in domestic rooms. Footer groups include THE COMPANY (About, Blog, Careers, Contact, Confidentiality). The page is 8869px tall.

Imagery is quiet, natural-light interiors with clay, brick and plaster tones that echo the palette; the lamp is always seen in a room.

The voice is that of a small manufacturer speaking about place and process: a named region (the Eastern Townships), a named collection (Cast Carra, which the page says "explores the intersection of geometry and raw material") and named products (Cyclo Linear). Buttons carry short verbs and the nav offers professional routes alongside retail ones: Trade, Design Consultation, Material Library and "Design your own". Currency and language are selectable at the top (EN and FR, CAD).

## Colors

The canvas is a warm sand, #e8e0d2, which is the body background; the largest areas on the screen are slightly different sands: #e0d8cb (1054, page-largest), a darker taupe #c3af9f (892), cream #fff7e9 (791), white (691), a brown #6f5a49 (506), the dark brown #433c35 (98) and the terracotta #8c4630 (61, the announcement bar). Text is the deep brown #433c35 (1785 characters, ink and the primary button fill), sand #e8e0d2 on the terracotta bar (252), cream #fff7e9 on dark buttons (220), terracotta #8c4630 (170, kickers and accents), taupe #c3af9f (67) and black (60). A red #d94f4f (3) appears in a few characters.

Borders measured: #433c35, #c3af9f and a translucent cream #fff7e933. The forms library variables in :root (--fui-gray-900 #111827, --fui-alert-success-bg-color #f3faf7 and others) belong to the form plugin and are not brand colors.

- Canvas #e8e0d2; page-largest #e0d8cb; surface-2 #c3af9f.
- Ink and primary #433c35; on-primary #fff7e9.
- ink-4 terracotta #8c4630; ink-6 #000000.

## Typography

Two typefaces: PP Editorial New, a serif used for statements and headings (934 characters), and DM Sans for everything else (1565). Both are loaded as fonts by the site, with DM Sans at 400, 500 and 700 and PP Editorial New at 400.

Headings are PP Editorial New 53.3333px at weight 400 with an 85.3333px line-height, which is a very open 1.6 ratio in the data, and -0.177778px tracking; the mobile heading measured 30px on 48px. The announcement and strapline style is DM Sans 21.3333px at weight 500 on 27.7333px with +0.426667px tracking (mobile 18px on 23.4px, +0.36px). Body copy is DM Sans 15px on 19.5px, tracking -0.177778px; the button label is DM Sans 14px at 400 on 23.94px; inputs are 17.7778px at weight 700. Other measured sizes include 15.1111px, 13.3333px, 97.7778px and 71.1111px (display sizes) and 40px. Weights: 400 (2168 characters), 500 (386), 700 (5).

The result is a tight pairing of an elegant, large and slightly condensed serif with a small, neutral sans.

## Layout

The layout is an asymmetric two-column editorial grid: one tall photograph in the left column beside a text block and a wide image at the right, then a reversal. Large serif statements fill the width of a column and are separated by pills. Page margins and gaps are small and even: gaps of 10px (most common), 5px, 11.5556px and 13.3333px; paddings of 10px, 10.6667px, 1px, 56.8889px and 17.7778px; the footer has 53.3333px 48.8889px padding. The header floats as an outlined rounded bar inset from the viewport edge.

## Elevation & Depth

No shadows were measured. Depth is created by color blocks (sand versus taupe versus terracotta), by 1px outlines in #433c35 around the header and circular arrows, and by photography. Cards use a very slight inset clip path.

## Shapes

Buttons are pills with a 70px radius (45px tall), counters and arrows are circles (50%), and a 9999px token covers full pills. Images and cards carry soft corners of 5px and 9px, the header's bar uses larger rounding at around 62.2222px. The system is rounded without being playful: photographs have small corners, controls are fully round.

## Components

- **Button primary**: #433c35 fill, #fff7e9 text, DM Sans 14px, 70px radius, 45px tall, padding 0px 22.2222px ("Discover", "Discover our products", "View more", "Material Library").
- **Button on dark**: #fff7e9 fill with #433c35 text ("Design your own"). The hover state of the primary swaps to a #fff7e9 fill with #433c35 text and a #433c35 border.
- **Link**: strapline style in sand over terracotta with underline.
- **Nav**: outlined rounded header, 10px padding, text in #433c35; links have 0px 16px padding.
- **Text input**: cream text, 17.7778px bold, 27px tall.
- **Card**: #e0d8cb fill, 5px radius, black text.
- **Circle arrows**: 1px outlined 50% controls for the slider.
- **Footer**: #433c35 text on sand.

## Design System Architecture

No public Luminaire Authentik design system or brand guideline was found on the pages opened. The shipped CSS contains the form plugin's variables (--fui-*), but no brand tokens were measured in :root. The de-facto system is the sand and brown palette, the PP Editorial New and DM Sans pairing and the 70px pill. Source page: https://luminaireauthentik.com/.

## Do's and Don'ts

- Do use sand backgrounds, deep brown text and terracotta kickers.
- Do set statements in PP Editorial New at 53.3333px with an open line-height.
- Do use 70px pill buttons in #433c35 with cream text.
- Do show lamps in lived-in rooms with clay and brick materials.
- Don't use cool greys or saturated colors; none are measured.
- Don't use shadows.
- Don't show the embedded-video error message, chat widget or form-plugin colors as brand elements.

## Responsive Behavior

The 390px mobile pass measured the strapline at 18px on 23.4px (DM Sans, weight 500, +0.36px tracking, sand color), the PP Editorial New heading at 30px on 48px, body at 15px on 19.5px, the button label 14px, and navigation text at 13px on 25px in white. The mobile nav text recorded was "0". Layout reflow, image crops and breakpoints were not measured.

## Iteration Guide

1. Start from sand #e8e0d2, brown #433c35, terracotta #8c4630 for accents.
2. Set statements in PP Editorial New and everything else in DM Sans.
3. Use 70px pill buttons with the hover inversion to cream.
4. Compose asymmetric two-column pages with a tall photograph and a serif statement.
5. Verify: node web/scripts/verify-designs.mjs --slug=luminaire-authentik.
