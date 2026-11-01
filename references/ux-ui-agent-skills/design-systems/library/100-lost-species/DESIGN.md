---
version: alpha
name: 100 Lost Species
category: "Culture & Events"
description: "Black memorial entry page for 100 Lost Species: Reckless Neue 72px weight 100 serif headline, Enduro 14px weight 300 body, white (#ffffff) Enter button on a #000000 canvas, 12px/24px/46px/60px spacing steps and a pill radius."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#000000"
  hairline: "#0000001a"
typography:
  display:
    fontFamily: Reckless Neue
    fontSize: 72px
    fontWeight: 100
  body-dominant:
    fontFamily: Enduro
    fontSize: 14px
    fontWeight: 300
rounded:
  pill: 9999px
spacing:
  s1: 12px
  s2: 24px
  s3: 46px
  s4: 60px
components:
  button-enter:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-dominant}"
  page:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-dominant}"
---

## Overview

100 Lost Species presents itself, on the measured entry page, as a digital memorial. The page is a single dark screen: a small bird-outline icon in a thin square frame, a three-line serif headline reading "100 Lost Species, A Journey Through Extinction", a short paragraph that calls the project "a digital memorial, a wake-up call for humanity", one white "Enter" button, and a credit line at the bottom ("A website by Immersive Garden and 60fps."). Nothing else is on the page. The extraction recorded 42 visible elements and a scroll height of 800px at a 1280px viewport, so the entry screen fits in one viewport with no scrolling.

The mood is quiet and ceremonial. Large areas of black, a single light serif, a single light sans, and very few elements give the page the tone of a title card in a film or an exhibition threshold. Dark grey rectangular fragments drift around the centre of the capture, like confetti or falling paper, and they are the only decoration. They are imagery, not interface, and they are not tokenised here.

This document describes only what was measured on the entry page. The experience behind the Enter button was not measured, so anything that exists inside it (species pages, navigation, map, audio) is not documented here and is "not measured".

## Colors

The palette is two values. The canvas is `#000000`, measured as the body background and confirmed on capture pixels (the capture is dominated by a near-black, `#010101`, which covers about 95% of pixels). The ink is `#ffffff`, the most-read text colour by character count (298 characters against 5 characters of `#000000`).

- **Canvas `#000000`**: the whole page background.
- **Ink `#ffffff`**: headline, paragraph and credit line.
- **Primary `#ffffff`**: the Enter button is a white fill; the single call to action therefore reuses the ink colour as its background rather than introducing an accent hue.
- **On-primary `#000000`**: the label colour of the white button, measured as the second text colour on the page.
- **Hairline `#0000001a`**: a 10% black border colour found in the border measurements and the CSS corpus (9 uses). On a black canvas it is invisible.

The site stylesheet also contains other colours that were not seen as page colours in the measured screen: `#1c1c1c`, `#d6c4a0`, `#970317`, `#e8e8e8` and translucent whites (`#ffffff1a`, `#ffffff26`, `#ffffff4d`, `#ffffff80`). They exist in the CSS corpus only, with one to four uses each, and are used by the experience behind the entry screen or by states that were not captured. They are not assigned a role. Translucent white borders (`#ffffff1a`, `#ffffff26`) were measured in the border table, but their elements were not tied to a selector.

## Typography

Two families are loaded: **Reckless Neue** (loaded at weights 100 and 300) and **Enduro** (loaded at weights 300 and 400).

- **Display, Reckless Neue 72px, weight 100.** Reckless Neue accounts for 41 characters on the page, all at 72px and weight 100 in the character-weighted measurement. This is the three-line headline. A light, high-contrast serif at a large size sets the commemorative tone. On the mobile pass the character-weighted sizes were 14px, 32px, 10px and 15px; the 32px entry is the mobile counterpart of the large size, but the element-level tie was not recorded.
- **Body, Enduro 14px, weight 300.** Enduro accounts for 262 characters, and 14px weight 300 is the dominant size and weight (220 characters). The paragraph and credit text use Enduro. The paragraph is centred and set in a narrow column.
- **Small text.** 12px (37 characters) and 15px (5 characters) were also measured. Weights 400 and 700 appear for 21 characters each; the credit line shows names in a heavier weight than the surrounding words, as seen in the capture.

Both families appear in the page's font-face list; no foundry pages were opened, so no licence or metric claim is made. For a substitute in prototypes, any light high-contrast serif for the headline and any light neo-grotesque for the body will serve visually; this is a design recommendation, not a measurement. No letter-spacing was measured (the letter-spacing table is empty).

## Layout

The page is centred on both axes in a 1280px-wide viewport with an 800px scroll height. Content runs top to bottom in a single column: icon, headline, paragraph, button, credit. Measured gaps and paddings are small in number: a 46px gap (2 uses), and paddings of 60px, 12px and 24px. These are published as the spacing tokens s3, s4, s1 and s2 respectively. No grid, container max-width or breakpoint list was recorded. The paragraph is visibly narrower than the headline, producing a tapered, centred text block. Vertical space is generous relative to the amount of content: the page has no header bar and no footer beyond the credit line.

## Elevation & Depth

No box shadows were measured on the page or in the stylesheet (the shadow lists are empty). Depth comes from the dark rectangular fragments that float around the content in the capture, drawn at different sizes and brightness levels, and from contrast between the white type and the black ground. The thin frame around the bird icon is an outline, not a raised surface. There are no cards, modals or layered panels on the entry screen.

## Shapes

The only measured radius is `50%` (3 uses), recorded as the pill token `9999px`. It belongs to circular elements that the extraction found; the Enter button itself shows square corners in the capture, and its radius was not measured, so no button radius token is declared. The bird icon frame and the drifting fragments are rectangular. The shape language is therefore mostly square and rectilinear, with circular marks as the exception.

## Components

- **Enter button.** White fill (`#ffffff`), black label (`#000000`), body-size Enduro text, rectangular. It is the sole call to action. The extractor did not classify it as a CTA, so its padding, height and radius were not measured; the component token lists only the colours and type that were measured.
- **Brand mark.** A bird outline icon in a thin square frame above the headline. It is a graphic; no size was measured.
- **Credit line.** Small Enduro text at the foot of the page naming the builders, with the names in a heavier weight.
- **Page shell.** Black canvas, white ink, Enduro 14px weight 300.

Hover states: the extraction recorded none (the hover list is empty), so hover behaviour is not measured.

## Design System Architecture

No public design system, brand guidelines or token package was found for 100 Lost Species. The homepage fetched as text exposed only the title "100 Lost Species" and no links to about, credits or brand pages. The de-facto system is the one measured here: two web fonts (Reckless Neue and Enduro) declared through font-face, a black and white palette, a 14px body size, and a handful of spacing values. The extraction found no CSS custom properties on the root (the rootVars list is empty), so the site does not expose a token layer. The credit line on the page attributes the site to Immersive Garden and 60fps; no studio pages were opened, so nothing further is stated about the build.

## Do's and Don'ts

- Do keep the canvas at `#000000` and the type at `#ffffff`; the page has no third colour on screen.
- Do set the headline in a light serif at 72px, weight 100, and the body in a light sans at 14px, weight 300.
- Do keep a single call to action, white fill with black text.
- Do centre the content and leave large empty black areas around it.
- Don't add accent hues from the stylesheet (`#d6c4a0`, `#970317`) as brand colours; their on-screen role was not measured.
- Don't add shadows; none were measured.
- Don't treat the drifting fragments as interface; they are decoration.
- Don't document the experience behind Enter from this file; it was not measured.

## Responsive Behavior

Only the mobile character-weighted font sizes were recorded: 14px, 32px, 10px and 15px, against 14px, 72px, 12px and 15px on desktop. The mobile pass found no h1, h2, body text, CTA or nav role. Layout changes at narrow widths, breakpoints, touch targets and the behaviour of the button are not measured.

## Iteration Guide

1. Start from the black canvas and white ink; add nothing else to the palette until a new measurement exists.
2. Use Reckless Neue 72px weight 100 for the single headline and Enduro 14px weight 300 for supporting text.
3. Reuse the spacing steps 12, 24, 46 and 60px.
4. Re-measure the post-Enter experience (run the extractor on its URL) before documenting navigation, cards or species pages.
5. Measure the Enter button's padding and radius with a recorded probe before adding them as tokens.
6. Re-run `node web/scripts/verify-designs.mjs --slug=100-lost-species` after every edit.
