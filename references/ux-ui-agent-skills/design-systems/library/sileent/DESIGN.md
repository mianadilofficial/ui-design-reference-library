---
version: alpha
name: Sileent
category: "Portfolio"
description: "Sileent, an AI content studio site (title: Sileent | AI content studio): pure black #000000 canvas with white #ffffff text, PPNeueMontrealTT 500 at 37.5px for titles, GTAmericaMono 500 numbered micro-labels, no borders, no shadows and no rounded corners over full-bleed grayscale film."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
typography:
  display:
    fontFamily: PPNeueMontrealTT
    fontSize: 37.5px
    fontWeight: 500
    lineHeight: 37.5px
  display-mobile:
    fontFamily: PPNeueMontrealTT
    fontSize: 40px
    fontWeight: 500
    lineHeight: 40px
  nav:
    fontFamily: GTAmericaMono
    fontSize: 7.5px
    fontWeight: 500
    lineHeight: 7.5px
rounded:
  none: 0px
spacing:
  s1: 1.5px
  s2: 3px
  s3: 6px
  s4: 12px
  s5: 48px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview

Sileent (www.sileent.com) is an AI content studio; the page title is "Sileent | AI content studio". The measured home page is a single 1280px by 800px full-screen stage with no vertical scroll in the measurement. The stage is a full-bleed, slow, near-monochrome film clip (in the capture a close view of a Lamborghini Urus SE interior through a car window, credited to a named photographer or director in tiny type), with the interface laid over it in white. Top left is the logo mark (a small barcode-like grid) next to the wordmark "Sileent" in 37.5px type; top centre is a counter "001" with a smaller index below it; top right is the word "Grid". At the bottom left a navigation reads "Work, Lab, About, Contact." with each item prefixed by a tiny three-digit index (012, 014, 002, 003), and at the bottom right is the project title ("Lamborghini Urus SE") with a small credit above it. Scattered black pixel blocks create a glitch-like digital texture around the titles.

The voice is minimal and catalog-like: numbered indices, single capitalized words and commas between the nav items, and no marketing sentences. The design lets moving imagery do the talking and keeps text to labels.

The art direction is a dark, grainy, shallow-focus automotive film look: the capture shows high-contrast edges of a window frame and mirror against deep shadow, with the frame cropped tight and the subject partly out of focus. The studio name signals the aesthetic: quiet, restrained and black. The interface competes with the footage as little as possible, which is why type is white, small and placed on the screen edges, while one oversized 409.6px run of 7 characters was also measured. Text sizes jump from tiny 7.5px labels to 37.5px titles with almost nothing in between except the 12px and 19.5px steps, which gives the layout a strong two-level hierarchy of index and title.

The measured text contains seven characters at 409.6px, an oversized run, and the interface repeats a small pattern of three-digit indices (001 at the top centre, 012, 014, 002 and 003 before the nav items) that gives the page a catalog or archive feel. Each index is set in the 7.5px monospace and each word in the 37.5px grotesk, so two scales alternate along the same baseline. White chips with black text mark small states such as SCROLL.

## Colors

The palette is strictly black and white. The canvas is #000000 (background area weight 1,024, the only background color measured) and every piece of text is #ffffff (167 characters), with #000000 text (27 characters) used for the small label chips that sit on white or on the pixel blocks. The primary token is #ffffff, the color of the logo, the wordmark, the links and the nav. There is no accent color, no hover color change (measured hover states keep the text #ffffff with a #e5e7eb border color token), no border, no shadow. All color other than black and white comes from imagery, which in the capture is desaturated.

## Typography

Two families are loaded: PPNeueMontrealTT (weight 500) and GTAmericaMono (weight 400 is loaded; text measured at 500). PPNeueMontrealTT carries 162 of 194 measured characters: the "Sileent" wordmark (37.5px / 37.5px, weight 500), the h2 project title "Lamborghini Urus SE" (37.5px / 41.25px) and nav links. GTAmericaMono covers the 32-character micro-labels at 7.5px / 7.5px (the three-digit indices and credits). Sizes by characters: 37.5px (56), 12px (51), 19.5px (48), 7.5px (32) and a single 409.6px run of 7 characters (an oversized display element). Weights: 500 (123) and 700 (71). No letter-spacing was measured on any size.

The mobile pass records the display at 40px / 40px in PPNeueMontrealTT and the nav at 10px / 10px in GTAmericaMono. The combination of a neutral grotesque for words and a monospace for numbers is the whole typographic system.

## Layout

The layout is a fixed full-viewport stage (page width 1280, scrollHeight 800). Interface elements sit on the four edges: logo and wordmark top left, counter top centre, view switch top right, navigation bottom left, project title bottom right. The nav block measures 415px wide and 53px tall; individual nav links are 87px by 53px. The CSS variables expose --container-padding 1rem and --container-grid-gap 1.125rem, the only layout variables besides animation easings. Measured paddings are 12px (2 uses), 6px and 48px; gaps are 12px (6), 1.5px and 3px (2 each).

## Elevation & Depth

None. No box shadows, no border colors and no translucent fills were measured. The root defines utility shadow variables (--un-shadow, --un-ring-shadow, --un-ring-color rgba(147,197,253,.5)) but they are reset values (0 0 transparent, 0px ring width) from the utility-CSS framework and are not used visually. Depth is purely the layering of white text over moving imagery.

## Shapes

No radius was measured: desktop.frequencies.borderRadii is empty, so every rendered element computes a 0px radius. The rounded token is therefore none: 0px. The logo mark, the pixel blocks and the label chips are all sharp rectangles; imagery is full-bleed with no frame.

## Components

Link (wordmark and nav): white PPNeueMontrealTT 37.5px / 37.5px weight 500. Nav-link: GTAmericaMono 7.5px weight 500 in white, each prefixed with a three-digit index and followed by a comma (the capture reads "012 Work, 014 Lab, 002 About, 003 Contact."); the link is 87px by 53px. Project title: h2, PPNeueMontrealTT 37.5px / 41.25px, white, 600px wide. Label chip: a tiny black-on-white tag below the wordmark reading "SCROLL". Hover states for the nav and the project title were measured with no color change (text stays rgb(255, 255, 255), background transparent, border color rgb(229, 231, 235)), so hover is expressed by motion rather than color if at all, which was not measured. No buttons, inputs or cards were detected.

## Design System Architecture

No public design system or brand guideline was found: the home page was the only page opened (via the extractor), and no design-system link was seen. The de-facto system is minimal: UnoCSS-style utility variables (--un-*), GSAP-style easing curves defined as linear() easings (--ease-none, --ease-power1-in and further --ease-* variables, 34 of the 45 measured variables, with 9 --un-* utility variables and the 2 container variables), a container with 1rem padding and a 1.125rem grid gap, and two fonts. Tokens are limited to black, white, two typefaces and a handful of spacing values.

## Do's and Don'ts

Do keep every surface black and every label white. Do pair PPNeueMontrealTT for words and GTAmericaMono for numbers and credits, with a three-digit index in front of each nav item. Do let desaturated film fill the stage and keep the interface on the edges. Do use sharp, unrounded rectangles.

Don't add accent colors, gradients, shadows, borders or rounded corners; none were measured. Don't use bold UI chrome or buttons; none were detected. Don't treat the --un-ring-color value as a brand color: it is the utility framework's default ring color and the ring width is 0px.

## Responsive Behavior

A mobile pass recorded: display PPNeueMontrealTT 40px / 40px (desktop 37.5px), nav GTAmericaMono 10px / 10px (desktop 7.5px), and character usage of 16px (77), 40px (26) and 10px (18). The mobile layout (column counts, menu behavior, breakpoints) was not measured.

## Iteration Guide

Build a full-screen video stage on #000000. Place the logo mark and 37.5px wordmark top left, the counter top centre and the Grid switch top right, then the indexed navigation bottom left and the project title bottom right. Use #ffffff text, PPNeueMontrealTT 500 and GTAmericaMono 500, radius 0px. Verify against web/data/extracted/sileent.json; anything beyond the first screen (the grid view, the Work and Lab pages) was not measured and should be measured before documenting.
