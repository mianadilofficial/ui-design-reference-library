---
version: alpha
name: Hardik Bhansali
category: "Business & Corporate"
description: "Hardik Bhansali portfolio (hardikbhansali.com, queued as 22.09.2000 - HE WAS BORN): near-black #030300 stage, electric yellow #ffea63 text and #e3ca54 buttons, Pixel monospace uppercase headlines at 24px and 57.3px with negative tracking, Helvetica 12px body, 6px radius."
colors:
  canvas: "#030300"
  ink: "#ffea63"
  primary: "#e3ca54"
  on-primary: "#000000"
  surface-yellow: "#ffea63"
  ink-white: "#ffffff"
  overlay-dark: "#00000099"
typography:
  display:
    fontFamily: Pixel, monospace
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.96px"
    textTransform: uppercase
  display-xl:
    fontFamily: Pixel, monospace
    fontSize: 57.3338px
    fontWeight: 400
    lineHeight: 57.3338px
    letterSpacing: "-2.29335px"
    textTransform: uppercase
  heading:
    fontFamily: Pixel, monospace
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 21.6px
    letterSpacing: "-0.576px"
    textTransform: uppercase
  body:
    fontFamily: Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: "-0.48px"
  button:
    fontFamily: Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
    letterSpacing: "-0.56px"
  chip:
    fontFamily: Pixel, monospace
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-0.64px"
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
    height: 30px
  chip-yellow:
    backgroundColor: "{colors.surface-yellow}"
    textColor: "{colors.on-primary}"
    typography: "{typography.chip}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 34px
    borderColor: "{colors.surface-yellow}"
  chip-dark:
    backgroundColor: "{colors.overlay-dark}"
    textColor: "{colors.ink}"
    typography: "{typography.chip}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    borderColor: "{colors.ink}"
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  card-video:
    rounded: "{rounded.sm}"
    borderColor: "{colors.primary}"
  footer:
    textColor: "{colors.ink}"
    padding: 24px 0px 89.5938px
---

## Overview

The measured site is the portfolio of Hardik Bhansali, titled "Hardik Bhansali" (hardikbhansali.com), which the award-site queue lists as "22.09.2000 - HE WAS BORN". The document is named after the measured site. The fetched page text contained only the name, so the facts below come from the extraction's DOM text and the capture.

The capture shows the entry gate: a near-black screen (`#030300`) with a yellow rounded-border box reading "Hardik Bhansali is a designer, a digital experience designer who can lucid dream design concepts and bring them to life on a digital canvas. It's a super power to bend reality in today's time and age.", and a blurred, dim serif prompt "CLICK ANYWHERE TO ENTER". The rest of the capture is white blank page below the 600px scene, which is why the measured body background is `#ffffff`. The extractor also read DOM text that exists behind the gate (the extraction counted 204 visible elements and a 7,200px scroll height): the h1 "HARDIK BHANSALI", an h2 "BORN IN THE AGE OF MACHINES (KAL-YUGA), TO SERVE THE WORLD W…", an h3 "HE NEVER THOUGHT OF BEING A DESIGNER", a "Refresh Webcam" button with a video element framed by a yellow border, testimonial chips attributed to named people (for example "OSCAR PÉREZ PINAZO, CEO - AWWWARDS"), a "View Project" link and a footer address "HARDIK@LUCERRA.CO". How these are arranged after the gate is opened was not measured.

The style is a yellow-on-black terminal look: pixel monospace capitals with negative tracking, tiny Helvetica body copy, and glowing yellow outlines. The font list also includes `lil-gui`, a debug panel library, which is a development control and not part of the brand.

## Colors

- **Canvas `#030300`**: the largest background area (weight 1,024) and the dominant colour of the capture's scene.
- **Ink `#ffea63`**: electric yellow, used for 1,440 of 1,687 measured text characters, borders on 20 elements, and chip backgrounds.
- **Primary `#e3ca54`**: a darker, desaturated yellow used as the "Refresh Webcam" button fill and the 2px video border.
- **On-primary `#000000`**: label colour on yellow fills (80 characters).
- **Surface yellow `#ffea63`**: filled chips (for example the named testimonial chip and the "View Project" link).
- **Overlay `#00000099`**: translucent black fill of dark chips (115 area weight); a `#0000004d` overlay also occurs.
- **White `#ffffff`**: 147 characters of white text; also the body background of the page below the gate.

Unmeasured roles: grey `#3c3c3c` text (20 characters), `#374151` background (8 area weight) and the blue ring colour `rgb(59 130 246 / .5)` were not tied to an element and are not assigned a role. The root declares only Tailwind ring and shadow variables.

## Typography

Fonts loaded: **Pixel** (weight 400, 883 characters), **Helvetica** (720 characters), **HelveticaLight** (47 characters) and the debug panel's `lil-gui`.

- **Display, Pixel 24px / 400 / 32px, -0.96px, uppercase**: the h1 "HARDIK BHANSALI".
- **Display XL, Pixel 57.3338px / 400 / 57.3338px, -2.29335px, uppercase**: the h3 "HE NEVER THOUGHT OF BEING A DESIGNER" (151 characters).
- **Heading, Pixel 14.4px / 400 / 21.6px, -0.576px, uppercase**: the h2 statement.
- **Body, Helvetica 12px / 400 / 18px, -0.48px**: the most used size (567 characters).
- **Button, Helvetica 14px / 600 / 14px, -0.56px**.
- **Chip, Pixel 16px / 400 / 16px, -0.64px, uppercase**.
- Other measured sizes: 92.16px (26 characters), 64px (20), 28px (17, footer address) and 36px (10). Tracking is about -4% of the size throughout.

Foundry or licence pages for Pixel were not opened.

## Layout

The page is a stack of full-width bands: the measured nav/header block is 528px wide and 104px tall and carries a transform of -264px (it is centred by translation), and the h2 block is 1,280px wide. The footer is 800px tall with padding `24px 0px 89.5938px` and the 28px / 42px email. The video preview is 480px by 272px. Spacing steps are 4, 6, 8, 12, 16, 20, 24, 32, 40 and 48px; the most used gaps are 8px (26 uses) and 4px (4), the most used paddings are 12px (23) and 6px (19). Larger paddings of 48px, 64px and 128px appear for sections. The scroll height is 7,200px.

## Elevation & Depth

No box shadows were measured. In the capture the intro box has a soft yellow glow around its border and the "CLICK ANYWHERE TO ENTER" prompt is blurred; those are effects on the gate, and the glow value was not captured as a shadow token. Depth elsewhere comes from translucent black chips over imagery (`#00000099`, `#0000004d`) and from contrast between yellow and black.

## Shapes

Radii: `6px` (19 uses: buttons, video frame, bordered box), `4px` (4: chips), `8px` (2) and `50%` (1). The gate box shows a rounded outline with a 6px to 8px corner in the capture. Borders are 1px or 2px solid yellow (`#ffea63` on 20 elements, `#e3ca54` once).

## Components

- **Primary button "Refresh Webcam"**: `#e3ca54` fill, `#000000` Helvetica 14px / 600 label, 6px radius, 8px 12px padding, 123px by 30px.
- **Yellow chip** (named testimonial, "View Project"): `#ffea63` fill, black Pixel 16px label, 4px radius, 1px yellow border, 6px 12px padding, 34px high.
- **Dark chip**: `#00000099` fill, yellow text and a yellow border (1px; the "HUMARE SAATH SHREE RAGHUNAATH" button has a 2px border and 6px radius).
- **Video frame**: a 480px by 272px video with a 2px `#e3ca54` border and 6px radius.
- **Entry prompt**: "CLICK ANYWHERE TO ENTER", blurred grey serif capitals.
- **Header**: the name in Pixel 24px, uppercase, yellow.
- **Footer**: an email line in yellow Pixel 28px.

Hover states: not recorded.

## Design System Architecture

No public design system or brand guidelines exist for this portfolio. The site (https://www.hardikbhansali.com/) returned only its name as fetched text. The de-facto system is minimal: the root holds Tailwind ring and shadow variables, the stylesheet defines two type families (Pixel and Helvetica), a yellow pair `#ffea63` and `#e3ca54`, a spacing ladder of 4 to 48px and radii of 4, 6 and 8px. A debug GUI library is present in the font list and is not a design token.

## Do's and Don'ts

- Do use `#ffea63` for text and borders on `#030300`; use `#e3ca54` for filled buttons.
- Do set headlines in Pixel monospace capitals with negative tracking.
- Do keep body copy at 12px Helvetica with -0.48px tracking.
- Do give controls a 6px radius and chips 4px.
- Don't add shadows as tokens; none were measured.
- Don't document the `lil-gui` debug panel as brand UI.
- Don't use the blue ring colour or the grey `#3c3c3c` as brand colours.
- Don't describe the opened experience's layout from this file; only the gate was captured.

## Responsive Behavior

Mobile pass (390px wide): h1 24px / 400 / 32px, 175px wide; h2 14.4px; body 12px / 18px with a 327px-wide block; the CTA candidate is the named chip at 16px with 6px 12px padding and a 4px radius (297px by 34px); the header block is 342px wide, 113px tall and translated by -171px. Mobile character-weighted sizes: 16px, 12px, 14px, 10px, 36px, 14.4px, 24px, 27.3px, 31.2px, 28px and 89.7px. Layout of the opened experience on small screens was not measured.

## Iteration Guide

1. Black `#030300` field, yellow `#ffea63` text and borders, `#e3ca54` buttons.
2. Pixel monospace uppercase headlines (24px and 57.3338px), Helvetica 12px body.
3. Keep radii 4 to 8px, borders 1px to 2px yellow, translucent black chips.
4. Re-measure after the gate is opened (a click-through capture) before adding layout claims.
5. Run `node web/scripts/verify-designs.mjs --slug=22-09-2000-he-was-born` after edits.
