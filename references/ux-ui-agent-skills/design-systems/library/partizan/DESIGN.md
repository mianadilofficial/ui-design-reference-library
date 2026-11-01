---
version: alpha
name: "Partizan"
category: "Portfolio"
description: "Partizan film production site measured live: white #ffffff interface frames and black #000000 text around a mosaic of footage, Teodor serif at 42.6667px with -1px tracking, GT America Standard 500 uppercase 8.88889px navigation, one 8.89px radius and no shadows."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
  blue: "#0000ff"
typography:
  display:
    fontFamily: Teodor, serif
    fontSize: 42.6667px
    fontWeight: 400
    lineHeight: 46.9333px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: Teodor, serif
    fontSize: 33.28px
    fontWeight: 400
    lineHeight: 39.936px
    letterSpacing: "-1px"
  nav:
    fontFamily: "\"GT America Standard\", sans-serif"
    fontSize: 8.88889px
    fontWeight: 500
    lineHeight: 11.1111px
    textTransform: uppercase
rounded:
  xs: 8.89px
spacing:
  s1: 1.78px
  s2: 4.44px
  s3: 8.89px
  s4: 17.78px
  s5: 55.11px
components:
  nav:
    textColor: "{colors.ink}"
    padding: 0px 8.88889px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 8.88889px 0px 0px
---

# Partizan

## Overview

partizan.com (title "Home | Partizan", language en-US) is the site of the film and content production company Partizan. The measured home page is an image wall inside a white frame: a rounded white header bar spans the top with WORK, DIRECTORS, ABOUT and CONTACT at the left, the lowercase "partizan" wordmark centred, and INSTAGRAM, LINKEDIN and WORLD with a plus sign at the right; below it a rounded white panel holds a tightly packed mosaic of film stills and thumbnails (a shirtless man beside a waiter in white gloves pouring a blue-yellow cocktail, a woman in a patterned dress at a long table, a luxury watch close-up, a man in reflective gold sports goggles, a flat illustrated clock-and-dials animation, a man in a dark suit with braids on stairs, and a swimming-pool scene captioned "Daniel Sachon" with "CR FASHION BOOK ● THE GIRL NEXT DOOR"). Outside the white frame, the page background is a dark moving gradient of teal, green and brown. The measured h1 is "Partizan Classics" in Teodor at 42.6667px, the title of the classics section of the page. The viewport scroll height is 800px, so the home page behaves as a single screen. The interface is nearly invisible: white, black and rounded corners around imagery.

## Colors

Only black and white were measured. Backgrounds by area: `#ffffff` (weight 1038) and `#000000` (0); text colors: `#ffffff` (309 characters, captions over imagery) and `#000000` (96, nav and wordmark on white). The primary token is `#ffffff` (the generator's pick, matching the white frame), ink `#000000`, canvas `#ffffff`. The root variables add RGB-triple colors `--color-white: 255 255 255`, `--color-black: 0 0 0`, `--color-blue: 0 0 255` and `--color-grid: 0 0 255`; the blue (`#0000ff`) is declared but not seen on rendered elements, and is carried as the `blue` token from the variable. The teal and brown gradient behind the frame is moving footage and was not measured as a color.

## Typography

Two families: GT America Standard (263 characters; weights 400 and 500) and Teodor (142 characters, loaded at weight 100 per the font list and measured at 400 in use). Roles: display (h1 "Partizan Classics" and the large captions) Teodor 42.6667px / 46.9333px at -1px tracking, 33.28px / 39.936px on a 390px viewport; nav GT America Standard 500, 8.88889px / 11.1111px, uppercase; a 28.4444px Teodor size at -1px tracking carries 125 characters (the director-name caption on stills). Sizes by characters: 8.88889px (263), 28.4444px (125) and 42.6667px (17). Teodor is a serif with a soft, bookish character against the small uppercase grotesque, and the contrast is the page's only typographic gesture. The font names are those loaded by the page; no substitute is declared besides `serif` and `sans-serif`.

## Layout

The root variables set a 24-column grid: `--column: calc(100vw/24 - padding*2/24 - gap*23/24)`, with `--gap: 0.5rem`, `--padding-container: 1rem`, `--header-height: 5rem`, `--size: 375` and an `--available-height` expression that subtracts the header and padding from the viewport height. Within the white panel, tiles are placed in a masonry of unequal widths and heights with a small, consistent gap (4.44444px measured for 23 elements, 17.7778px for 4 and 1.77778px for one). Measured paddings: 8.88889px (8), 17.7778px (4) and 55.1111px; spacing tokens 1.78, 4.44, 8.89, 17.78 and 55.11px. The header bar is a separate rounded white strip above the panel.

## Elevation & Depth

None: no box shadow and no border color was measured on any element. The two white rounded frames, the header bar and the image panel, float on the dark moving background, and that colour contrast between white frame and dark footage replaces elevation entirely, so no layered surfaces or overlays are documented.

## Shapes

Radii: 8.88889px on 11 elements (the tiles and frames), plus single partial radii `8.88889px 0px 0px`, `0px 0px 0px 8.88889px` and `0px 8.88889px 8.88889px 0px` where tiles meet. One radius step is used throughout, so the token set is `xs: 8.89px`.

## Components

- **Header bar**: white, rounded at 8.89px, containing nav links at left, centred wordmark and utility links at right.
- **Nav link**: GT America Standard 500 uppercase 8.88889px, black, padding 0px 8.88889px; the link height measured 44px.
- **World menu**: "WORLD +" opens an "Our network" list linking to US, UK, France and World sites (per the fetched page).
- **Work tile**: a rounded 8.89px image or video thumbnail; some carry a white caption in Teodor with director name and a small grotesque credit line.
- No buttons, inputs or cards with fills were measured.

## Design System Architecture

No public design system or brand guideline: the WebFetch of https://partizan.com/ found only links to partizan.com pages, social profiles and image files, and no search was run. The de-facto system is the 25 root variables: Tailwind internals (`--tw-ring-*`, `--tw-shadow`), RGB-triple color variables, the 24-column grid helper, `--gap` and `--padding-container`, `--header-height`, viewport helpers (`--vw`, `--vh`, `--vh-initial`) and four easing curves (`--ease-in: cubic-bezier(0.12,0,0.39,0)`, `--ease-out: cubic-bezier(0.23,1,0.32,1)`, `--ease-in-out: cubic-bezier(0.86,0,0.07,1)`, `--ease-out-back: cubic-bezier(0.175,0.885,0.32,1.275)`). It is a Tailwind-based build.

## Do's and Don'ts

- Do let the footage supply all colour, with a white interface frame at 8.89px radius.
- Do set navigation in tiny uppercase GT America Standard 500.
- Do use Teodor with -1px tracking for large captions and titles.
- Do use the declared easings for motion.
- Don't add fills, shadows or accent colors to the interface; none were measured.
- Don't use larger radii than 8.89px.
- Don't treat the animated dark background as a brand color.

## Responsive Behavior

Measured at 390px: the h1 "Partizan Classics" is 33.28px / 39.936px at -1px tracking; sizes by characters were 10.4px (240), 23.92px (108) and 33.28px (34). Layout and navigation changes at that width were not measured.

## Iteration Guide

1. Canvas `#ffffff`, ink `#000000`; a white frame with 8.89px radius around imagery.
2. Teodor 400 at 42.6667px / 46.9333px, -1px tracking for titles; GT America Standard 500 uppercase 8.88889px for navigation.
3. Build the image wall on a 24-column grid with a 0.5rem gap.
4. Use no shadows and no filled buttons.
5. Take easing from the four declared curves.

## Content and Voice

Per the fetched page, the site lists six directors: Warren Fu, Amber Schaefer, Antoine Bardou-Jacquet, Michel Gondry, Daniel Sachon and Camille Boumans. Featured work on the page includes Laufey's "Madwoman", Cutwater's "Longest Island", a Meta x Oakley Super Bowl spot, Chanel's Métiers d'Art 2026, a CR Fashion Book editorial, Audemars Piguet's "Where Time Began" and Alpine's "70 Years", with a "Partizan Classics" section of music videos and branded work, mostly by Michel Gondry. Category tags read Music content, Branded content and Animation | Partizan Studio. The "World" dropdown, titled "Our network", links to US, UK, France and World sites. The voice is minimal: the company puts directors and clients first and uses almost no explanatory copy, so the interface text is limited to uppercase labels and caption lines. The footer holds only the Instagram and LinkedIn links and the Partizan logo link, and no about text appeared in the fetched content.

The thumbnails are cropped edge to edge and sit very close together, so the wall reads as one continuous collage of fashion, music, watch and animation work. Captions appear only on some tiles, in white serif over the picture, and the rest of the wall is left uncaptioned so the footage carries the page.
