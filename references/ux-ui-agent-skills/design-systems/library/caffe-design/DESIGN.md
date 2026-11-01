---
version: alpha
name: Caffè Design
category: "Agencies & Studios"
description: "Caffè Design (caffe.design) is a playful 3D office tour by Design Kills S.R.L. of Milan: one full-viewport rendered room, white page background #ffffff, black ink #000000, coral accent #ff545a, GT Haptik at 400/500/700 with Argent Pixel CF for inputs, and a hand-lettered speech bubble."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ff545a"
  surface: "#fefefe"
typography:
  display:
    fontFamily: "\"GT Haptik\""
    fontSize: 35px
    fontWeight: 500
  heading:
    fontFamily: "\"GT Haptik\""
    fontSize: 24px
    fontWeight: 400
  body:
    fontFamily: "\"GT Haptik\""
    fontSize: 16px
    fontWeight: 400
  body-mobile:
    fontFamily: "\"GT Haptik\""
    fontSize: 13px
    fontWeight: 400
  input:
    fontFamily: "\"Argent Pixel CF\""
    fontSize: 18px
    fontWeight: 400
rounded:
  xs: 2px
spacing:
  s1: 1px
  s2: 6px
  s3: 10px
  s4: 20px
  s5: 40px
components:
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 10px 0px 4px
---

## Overview

Caffè Design at https://www.caffe.design/ is the interactive site of Design Kills S.R.L. of Milan; the page title is "Caffè Design" and the document language is Italian (`lang` it). It is not a conventional web page. The measured page is exactly one 1280 by 800 viewport (scroll height 800), and the capture shows a rendered 3D room: a bright open-plan studio with a pale wooden floor, white ceiling with long linear light strips, a white structural column in the centre, red window curtains in the background, a red café-style chair and a red trolley, a blue hard-shell suitcase on a black-and-white grid rug, a coral bean bag, a blue counter with an espresso machine, a whiteboard that reads "CIAO", and walls painted indigo on the left and pink on the right. The left wall carries a purple mural reading "DESIGN KILLS" in bubble letters and a stacked square tile artwork in blue, red and cream; the right wall carries framed illustrations of a blue chair with a red figure.

Navigation is spatial. Small four-pointed star hotspots, drawn in light yellow with a dark outline, float over the objects in the room, and a mascot in the lower right corner (a coral coffee cup with one large eye, arms, and blue-and-white sneakers) speaks through a white speech bubble with a thick black outline. The bubble in the capture reads "Ciao! Clicca sulle stelline oppur", cut off by the capture; its first words are Italian for "Hi! Click on the little stars or". In the top left, the logo "caffè design" is hand-lettered in white, in two lines, tilted. At the bottom left, a white all-caps line of small text reads "© COPYRIGHT 2025, ALL RIGHTS RESERVED BY DESIGN KILLS S.R.L." and, below it, "DESIGN KILLS S.R.L / VIALE CONI ZUGNA 19 20143 MILANO / SITOBELLO POWERED BY DVERSO STUDIO", with the last two words underlined.

The DOM text recorded by the extraction includes a skip link, "Al contenuto" ("to the content"), a heading beginning "Se ti piace quello che facciamo, significa che puo…" ("If you like what we do, it means you can…") and a second heading "FACCIAMO COSE" ("We make things"). Those headings are not visible in the capture: the h1 box measures 14 by 2px and the h2 box 8 by 2px, so they are accessible text rather than on-screen type.

## Colors

The measured palette is minimal because the colour lives in the rendered scene, not in CSS.

- `{colors.canvas}` #ffffff is the page background (the body role).
- `{colors.surface}` #fefefe is the largest measured background area (weight 1024), the full-viewport container that holds the scene.
- `{colors.ink}` #000000 is the main text color (177 characters) and the color of the speech bubble outline and bubble text.
- `{colors.primary}` #ff545a is a coral red measured as a text color on 8 characters; the stylesheet corpus also holds #ff575e (4 rules). The element carrying it was not isolated, so it is the only accent in the tokens and is not tied to a button.
- White text (#ffffff, 148 characters) is the footer and logo lettering that sits on top of the scene; it is the same value as `{colors.canvas}`.

Inside the scene, the capture shows indigo, pink, coral red, cream and white; those are rendered surfaces in the 3D model, not CSS values, and no hex is claimed for them. The stylesheet corpus also contains other colors (for example #1a73e8, #d93025, #f0f8ff and #ffb3d4) that were not measured on any visible element of this page, so they are not brand tokens.

## Typography

Two families are loaded. GT Haptik is the working family at weights 400, 500 and 700 (the font-face list also holds a "GT Haptik Medium Rotalic" variant) and carries 279 of the 333 measured characters. Argent Pixel CF is loaded at 400 normal and 400 italic and carries 54 characters; the extraction records it on the input role at 18px. In the capture the word "stelline" inside the speech bubble is set in italics. The stylesheet corpus lists Manrope, Roboto and Caprasimo in its rules; none of them was measured on a visible character.

- `{typography.display}`: GT Haptik 35px, weight 500; the measured h1 style. The h1 is the visually hidden heading described above, so this size is declared in CSS but is not seen on screen in the capture.
- `{typography.heading}`: GT Haptik 24px, weight 400; the h2 style ("FACCIAMO COSE"), also hidden.
- `{typography.body}`: GT Haptik 16px, weight 400, normal line height; the document body.
- `{typography.input}`: Argent Pixel CF 18px, weight 400; the input role.

Character-weighted sizes on desktop are 13px (148, the footer line), 35px (118), 25px (23), 18px (19), 24px (13) and 16px (12). Weights by characters: 400 (173), 500 (118), 700 (42). Line heights and letter spacing are `normal` in every measured role.

No font substitute is measured. Both families are named loaded fonts; if neither can be supplied, any rounded grotesque for GT Haptik and any pixel face for Argent Pixel CF would be an editorial choice, not a measured equivalent.

## Layout

The site has no scrolling page layout. Page width is 1280 and scroll height is 800, so the whole experience is one fixed viewport containing the 3D scene. Interface elements are overlaid on the scene at the corners: the logo top left, the copyright and credit block bottom left, the speech bubble and mascot bottom right, and the star hotspots wherever an object can be inspected. The view looks down the length of the room, with the floor filling the lower half of the frame and the ceiling light strips running toward the back.

The measured paddings are 1200px (6 uses), 10px, 20px, 180px, 40px, 1px and 6px; these are the only layout dimensions the extraction captured, and they are listed as `{spacing.s1}` to `{spacing.s5}` where they are small. There are no card grids, columns or text columns: the extraction recorded no layout bands and no navigation role.

## Elevation & Depth

Depth is supplied by the 3D render: soft light falloff on the floor, a bright window glow behind the centre column, and shadows cast by the furniture. Interface depth is minimal. One box shadow was measured on a visible element, `rgb(128, 128, 128) 0px 0px 5px 0px`, a soft grey halo. The stylesheet corpus also declares thick ring shadows made of a white 2px inner or outer ring and a black 5px outer or inner ring (`0 0 0 2px #fff, 0 0 0 5px #000` and an inset form), which match the heavy black outline style seen on the speech bubble; the element using each rule was not isolated. Everything else is flat: the bubble is a flat white shape with a thick black outline and no gradient.

## Shapes

Measured radii: 2px on one element (`{rounded.xs}`); the stylesheet corpus also contains radii of 40px (20 rules), 20px (14), 30px, 10px and 5px. In the capture the speech bubble has large, generous corners, the star hotspots are four-pointed stars with concave sides, and the mascot is a rounded cup with a round eye. The room itself is rectilinear: rectangular frames, a rectangular rug, a rounded bean bag and a chair shape in the framed illustration.

## Components

- Speech bubble: white fill, thick black outline, large corners, black text with one italic word; it sits above the mascot and carries the site's welcome message and instructions.
- Star hotspot: a small four-pointed star in light yellow with a dark outline, placed over scene objects; clicking is the primary interaction according to the bubble text.
- Mascot: a coral coffee-cup character with a single large eye and sneakers, at the bottom right.
- Logo: white hand-lettered "caffè design" in two lines, tilted, at the top left.
- Footer credit: all-caps white small text (13px measured on 148 characters), with the studio address and an underlined "DVERSO STUDIO" credit.
- Text input (`{components.text-input}`): Argent Pixel CF 18px, `{colors.ink}` text, padding 10px 0px 4px. The measured input box is 12 by 4px, so it is a hidden or collapsed field in this view and is recorded as a type style, not a visible control.
- Skip link: "Al contenuto" is present in the DOM text.

No filled button, card or navigation bar was detected.

## Design System Architecture

No public or official Caffè Design design system, brand guideline or press kit was found; the home page https://www.caffe.design/ rendered only its title to the text fetcher (the content is drawn client-side), and the capture shows no link to guidelines. The de-facto system is a small set of facts: the extraction recorded no root CSS variables, two loaded font families (GT Haptik in four faces including a Rotalic variant, Argent Pixel CF in normal and italic), a white page body and a black default text color. The visual system is carried by the 3D asset and its illustration style, signed by Design Kills S.R.L. with a credit to Dverso Studio.

## Do's and Don'ts

- Do keep interface chrome minimal and overlay it on the scene instead of building page sections.
- Do use black ink and a thick black outline on white for speech and UI elements.
- Do keep the tone friendly and Italian: short invitations such as "Ciao! Clicca sulle stelline".
- Do use the coral `{colors.primary}` as a sparse accent.
- Don't put cards, grids or long text columns over the room; the measured page has none.
- Don't introduce corporate blues from the stylesheet corpus (#1a73e8 and similar); they were not seen on screen.
- Don't treat the scene's wall colors as UI tokens.
- Don't add drop shadows to the bubble; its depth is its outline.

## Responsive Behavior

The 390px mobile pass measured only type: the h1 is 16px at weight 400 (a hidden element, 95px wide, 20px high), body text is `{typography.body-mobile}` (13px, weight 400, 220px wide, 53px high), and the character-weighted sizes are 16px (182) and 13px (65). Layout bands, the position of the hotspots, the mascot and the speech bubble at mobile width, and any menu are not measured.

## Iteration Guide

1. Build one full-viewport scene on `{colors.canvas}`; put the interface at the corners.
2. Use `{typography.body}` for footer and credit lines in uppercase and `{typography.display}` only where a visible title is required.
3. Draw dialogue as a white bubble with a thick `{colors.ink}` outline next to a mascot.
4. Reserve `{colors.primary}` for small accents and mascot-like details.
5. Mark interactive objects with small star hotspots rather than buttons.
6. Re-measure the visible interface at several widths before declaring mobile tokens beyond the 13px body size.
