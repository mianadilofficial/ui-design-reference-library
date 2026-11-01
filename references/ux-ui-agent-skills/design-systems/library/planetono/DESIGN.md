---
version: alpha
name: "Planetoño"
category: "Food & Beverage"
description: "Planetoño (planetono.space) is a playful space-food concept site: flat red #eb3322 canvas, cream #f7f2e5 display type, black #000000 outlines, Futura Passata bold with -2.18px tracking and Poppins 15px body."
colors:
  canvas: "#eb3322"
  ink: "#000000"
  primary: "#f7f2e5"
typography:
  display:
    fontFamily: "\"Futura Passata\""
    fontSize: 33px
    fontWeight: 700
    lineHeight: 37.95px
    letterSpacing: "-1.98px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Futura Passata\""
    fontSize: 54.5px
    fontWeight: 700
    lineHeight: 54.5px
    letterSpacing: "-2.18px"
  body:
    fontFamily: Poppins
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18.75px
rounded:
  xs: 4px
  sm: 12px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 10.86px
  s5: 15px
  s6: 18.75px
  s7: 28.13px
  s8: 30px
  s9: 32px
  s10: 37.5px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.pill}"
---

## Overview

Planetoño (www.planetono.space, title "Planetoño") is a playful concept site for a space-themed food brand; the page text reads "We tried making this real. NASA said no." and "So for now, it's just a delicious concept", and the page links to the Tubik studio site as a credit. The home page is a single long scroll on a flat, saturated red field (#eb3322). The first screen is an entry gate: the Planetoño logotype in cream with a black outline and a yellow Japanese-style subtitle (惑星ちゃん), a cream "START" button, and the line "Immersive sound ahead. Use headphones for best effect" beside a headphone icon. After the gate come the headline "BiGger than hunger. SMALler than A plAnet" (a deliberately mixed-case display), a "How it works" block with four numbered cream chips (the first reads "Choose your meal"; other step copy on the page reads "Gift it to a friend" and "Or keep it all to yourself"), a "Where to find us" map section with northern and southern areas, and a closing sign-off line, "May the coordinates be ever in your favor".

Other section headlines read on the page: "Celestial fuel for interstellar appetites" and "Pizza so good, gravity can wait". Navigation has three labels: How it works, Locations, Contact. The voice is whimsical and self-aware, with space puns and light humor ("We won't judge"). White four-point sparkle shapes with black outlines are scattered over the red field as decoration. The capture shows an arrow-shaped custom cursor in the top left corner.

## Colors

The page is almost monochrome; all measured values come from `web/data/extracted/planetono.json`.

- **canvas `#eb3322`**: the red background of the whole page (area weight 4,623 against 1 for black). The root variable `--color-red` is `#eb3322`.
- **primary `#f7f2e5`**: a warm cream, the most-read text color (226 characters: headings on red and the large logotype), and the fill of the step chips and the START button as seen in the capture. Declared as `--color-light`.
- **ink `#000000`**: black text (58 characters) and the 3px outlines (border color `#000000`, 3 occurrences).

The shipped CSS root variables add a candy palette for illustrated elements: `--color-yellow #ffc737` (also named as `--color-primary`), `--color-green #8df947`, `--color-light-blue #2097cf`, `--color-blue #7721c7`, `--color-select rgba(8,171,255,.33)` (text-selection color) and `--color-contrast` pointing to a `--color-dark` variable. `--swiper-theme-color #007aff` is a slider-library default and is not a brand color. Yellow, green and blue appear in illustrations and in the subtitle glyphs, but only red, cream and black were measured on text and surfaces.

## Typography

Two families: **Futura Passata** (167 characters, weight 700) for the logotype-style display and headings, and **Poppins** (117 characters; loaded at weights 500 and 700, measured at 400 and 500) for body copy and UI labels.

- **display** ("START"): Futura Passata 33px / 37.95px, weight 700, letter-spacing -1.98px, uppercase.
- **heading** ("BiGger than hunger. SMALler than A plAnet"): Futura Passata 54.5px / 54.5px, weight 700, letter-spacing -2.18px, no text transform. It is a mixed-case setting; the capital letters in the source text read "BiGger", "SMALler" and "A plAnet".
- **body** (and nav): Poppins 15px / 18.75px, weight 400.

Measured sizes by character: 15px (111), 22.5px (90), 54.5px (72), 13.125px (6), 33px (5). Weights: 700 (167), 400 (111), 500 (6). Letter-spacing is negative on the two Futura Passata sizes only (54.5px / -2.18px and 33px / -1.98px). On the 390px pass the heading is 29.25px / 29.25px with -1.17px spacing, body is 13px / 16.25px, and the mobile sizes by character are 13px (111), 16.575px (90), 29.25px (72), 11.375px (6), 33px (5), 18px (4). No font-license source was opened.

## Layout

The page is 1280px wide and 8,050px tall, a single column of full-bleed red with items placed freely: the logotype centered, the START control centered below, the "How it works" heading and chips left-aligned at the page margin, and sparkle shapes at scattered positions. The header is 113px high with the three nav labels. Measured gaps: 37.5px (10), 18.75px (8), 15px (4), 56.25px (4), 8px (2), 30px (2), 75px (1). Measured paddings: 32px (9), 1px (2), 6px (2), 10.8571px, 40px, 28.125px. The spacing scale in the tokens file is 1, 6, 8, 10.86, 15, 18.75, 28.13, 30, 32 and 37.5px. Many elements are positioned with transforms: the extraction recorded translate offsets for the nav link, the link and the cards; those transform values are not tokens.

## Elevation & Depth

No box-shadow values were measured (`boxShadows` is empty). Depth in the capture comes from outlines and offset edges instead: chips and the START button have a thick black outline and a black offset edge below and to the right; the logotype has a black outline. These edges are not recorded as shadows and are described here from the capture only. The only measured border color is `#000000`, and a measured circle element has a `3px solid #000000` border with a clip path that cuts it in half, used in the planet graphic. The sparkles are white four-point stars with black outlines.

## Shapes

Measured radii: 50% (4 elements, circles and the planet graphic), 12px (3) and 4px (3). Tokens: `xs 4px`, `sm 12px`, `pill 9999px`. The rounded chips and START button read as soft rounded rectangles in the capture. The planet card is a 259px by 440px element with a 50% radius and cream text color, filled with the canvas red. Four-point sparkle stars are a recurring shape motif.

## Components

- **START button**: cream face, black outline, black offset edge, Futura Passata 33px uppercase label. Not recorded as a CTA candidate; measurements come from the heading role.
- **Step chips**: small cream rounded squares numbered 1 to 4, the first expanded to read "Choose your meal" in Poppins bold. Radius 12px is the closest measured value; the exact chip size is not measured.
- **link / nav-link**: black Poppins 15px / 18.75px; the nav-link hit area is 328px wide and 113px high; the plain link is 30px by 42px.
- **card (planet graphic)**: `#eb3322` fill, cream text color, 50% radius, 259px by 440px.
- **Headphone notice**: "Immersive sound ahead. Use headphones for best effect" in Poppins 15px, black, with an outlined headphone icon.

The generated components in the tokens file carry transform values that the brief treats as noise, so they are omitted from the front matter.

## Design System Architecture

No public design system, brand guideline or press kit was found: the opened home page links only to a mailto contact address, the Tubik studio site and its own sections. The de-facto system is a handful of CSS custom properties on `:root`: `--color-red`, `--color-yellow`, `--color-green`, `--color-light-blue`, `--color-blue`, `--color-light`, `--color-primary`, `--color-contrast` and `--color-select`. Source: https://www.planetono.space/ (measured with `web/scripts/extract-tokens.mjs`). Type and spacing are not exposed as variables; they were measured from rendered elements.

## Do's and Don'ts

- Do keep the page flat red #eb3322 with cream #f7f2e5 and black #000000 only for text and outlines.
- Do set display type in Futura Passata bold with strong negative letter-spacing (-2.18px at 54.5px).
- Do use Poppins at 15px for all small copy and navigation.
- Do give interactive chips and buttons a thick black outline and rounded corners.
- Do keep the humor: space puns, short lines, whimsical sign-offs.
- Don't introduce gradients or shadows; none were measured.
- Don't use the slider-library blue #007aff as a brand color.
- Don't use the yellow, green or blue illustration colors for large surfaces; they were not measured on any surface.

## Responsive Behavior

Measured on the 390px pass: the heading is Futura Passata 29.25px / 29.25px with -1.17px spacing, the START span stays 33px / 37.95px, and the headphone notice is Poppins 13px / 16.25px. The mobile h1 role carries a small translate transform, matrix(1, 0, 0, 1, -0.825, 1.65). How the nav, the step chips and the map sections rearrange on mobile is not measured.

## Iteration Guide

1. Set the canvas to #eb3322 and text to #000000; use #f7f2e5 for display type on red and for chip faces.
2. Use Futura Passata 700 at 54.5px / -2.18px for headings and Poppins 400 at 15px for copy.
3. Build chips and buttons with 3px black outlines and 12px radius; scatter white four-point sparkles.
4. Keep the entry gate: logotype, a START button and the headphone notice.
5. Run `node web/scripts/verify-designs.mjs --slug=planetono` after edits; never change a measured value.
