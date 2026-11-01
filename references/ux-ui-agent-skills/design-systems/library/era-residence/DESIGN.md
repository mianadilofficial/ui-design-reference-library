---
version: alpha
name: ERA Residence
category: "Architecture & Interiors"
description: "ERA Residence (era-residence.com), Contemporary Mediterranean residences in Estepona: velvet plum #340c24 planes, cream #f3f3ec and navy #17233b, uppercase ambroise-francois-std display serif at 153.6px, Maison Neue Extended body and arch-shaped panels with 307.2px top radius."
colors:
  canvas: "#340c24"
  page-body: "#f3f3ec"
  ink: "#ffffff"
  primary: "#17233b"
  powder-sky: "#b5cedb"
typography:
  display:
    fontFamily: ambroise-francois-std, sans-serif
    fontSize: 22.4px
    fontWeight: 400
    lineHeight: 22.4px
    textTransform: uppercase
  display-mobile:
    fontFamily: ambroise-francois-std, sans-serif
    fontSize: 90px
    fontWeight: 400
    lineHeight: 81.9px
    letterSpacing: "-2.16px"
    textTransform: uppercase
  heading:
    fontFamily: ambroise-francois-std, sans-serif
    fontSize: 153.6px
    fontWeight: 400
    lineHeight: 133.632px
    letterSpacing: "-3.6864px"
    textTransform: uppercase
  subheading:
    fontFamily: ambroise-francois-std, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.256px"
    textTransform: uppercase
  body:
    fontFamily: "\"Maison Neue Extended\", Arial, sans-serif"
    fontSize: 10.4px
    fontWeight: 400
    lineHeight: 14.352px
    letterSpacing: "-0.2496px"
  link:
    fontFamily: "\"Maison Neue Extended\", Arial, sans-serif"
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 12.8px
rounded:
  xs: 32px
  sm: 307.2px
  pill: 9999px
spacing:
  s1: 3.2px
  s2: 6.4px
  s3: 9.6px
  s4: 12.8px
  s5: 16px
  s6: 19.2px
  s7: 25.6px
  s8: 38.4px
  s9: 108.8px
  s10: 128px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
---

## Overview

era-residence.com is the sales site of ERA Residence, titled "ERA Residence — Contemporary Mediterranean Residences in Estepona". It is a luxury real-estate presentation: the page is 18,463px tall with 909 visible elements, and the first screen is a deep velvet-plum field (#340c24) with a thin rounded frame, a small white flower logomark at top center, a tall arch-shaped photograph in the middle (a rendering of a swimming pool, white terraced Mediterranean buildings, palms and flowering vines under a blue sky) and, on either side of the arch, the tracked uppercase words "COSTA" and "DEL SOL" in a narrow display serif. Faint script lettering in a darker plum runs behind the frame. Lower on the page the same plum plane continues with arch-topped panels and, in the measured styles, a second light section in cream (#f3f3ec) with navy text.

The measured h1 on the page reads "SELECT AN APARTMENT" at 22.4px, an apartment-picker heading; the largest measured headings are "THE SPACE TO..." at 153.6px in navy on cream. A body paragraph states legal and project facts ("The project holds all required permits and an active construction..."). The capture's lower part is empty plum, which is how the page rendered when captured; it does not show the content below the first arch.

The art direction is residential and ceremonial: arches, a floral emblem, a Costa del Sol address, and a restrained color story of plum, cream, navy and powder blue.

## Colors

The declared brand palette (Webflow-style variables, named "brand-500") is Velvet Plum #340c24 (the measured canvas and arch-panel fill), Powder Sky #b5cedb, and Blush Bloom #f8bbcb (declared, not measured on screen). Base colors are cream #f3f3ec (`--_global-colors---base-0--100`, the page body color) and navy #17233b (`--_global-colors---base-1000--100`, the measured primary text color). Each base has an alpha ramp: cream at 5, 10, 30 and 60 percent (#f3f3ec0d, #f3f3ec1a, #f3f3ec4d, #f3f3ec99), navy at 5, 10, 30 and 60 percent (#17233b0d, #17233b1a, #17233b4d, #17233b99), white at 10, 20, 40 and 80 percent (#ffffff1a, #fff3, #fff6, #fffc). Status colors are declared too: success #1ba64b, error #e23d3d and alert #ffa800. Text on the plum field is white (#ffffff); text on cream is navy. The measured `ink` is white because the plum field dominates the screen.

## Typography

Three families: ambroise-francois-std (display, uppercase, weight 400), Maison Neue Extended (body, 400 and 700, with Arial fallback) and sloop-script-three (a script accent used for the large background lettering). Declared as `--_fonts---font-display`, `--_fonts---font-body` and `--_fonts---font-accent`. Measured desktop styles: heading 153.6px/133.63px with -3.69px tracking; subheading 32px/32px with -0.256px; display role (the apartment-selection h1) 22.4px/22.4px, all uppercase; body 10.4px/14.35px with -0.25px tracking; link 12.8px/12.8px. The fonts' sizes are variables computed from a scale ratio of 16 (`--_special-units---scale-ratio`), for example `--_fonts---h1--size` calc(192rem/16), `--_fonts---h2--size` calc(136rem/16), h3 96, h4 63, h5 40, h6 28, p1 13, p2 11, label l1 11 and l2 9, and caption c1 25. Ambroise Francois, Maison Neue and the script are commercial faces; a narrow high-contrast display serif and a wide geometric sans are the substitution roles.

## Layout

Layout units are a pixel ladder in variables: 4, 8, 12, 16, 24, 32, 48, 64, 96, 160 and 272px, with side offsets of 48px, a 16px grid gap and "cell" units of 136px by 96px (`--_special-units---1-cell-h`, `--_special-units---1-cell-v`). The first screen is symmetric about the arch; panels below are arch-topped columns (measured card widths 313px and 338px, heights near 1,436px and 1,465px). Spacing tokens measured are 3.2px to 128px.

## Elevation & Depth

No box shadows were measured. Depth comes from the nested arch outlines (concentric thin lines around the photograph), the dark plum plane, and the large faint script. Hairlines are alpha ramps of cream and white (`--_colors---base-0--line` is cream at 10 percent).

## Shapes

Shapes are arches. Measured radii: 307.2px 307.2px 0 0 (arch-topped panels), 640px 640px 0 0 (the large arch), 32px (the rounded frame), 50% and 100% (circular marks). Panels have flat bottoms and fully rounded tops; the outer frame is a large rounded rectangle.

## Components

Arch panel: plum #340c24 fill, 307.2px top radius, 313px or 338px wide, tall. Arch image: the photograph is masked into the 640px arch. Link: Maison Neue Extended 12.8px, white. Label: tracked uppercase text in the display serif (COSTA, DEL SOL). Emblem: a white flower mark. Apartment picker: heading "SELECT AN APARTMENT". No buttons or inputs were measured.

## Design System Architecture

No public design system or brand guideline was found; none was opened. The shipped CSS exposes 149 root custom properties in a layered naming scheme: `--_global-colors---*` (raw palette and alpha ramps), `--_colors---*` (semantic roles such as `--_colors---base-0--bg`, `--_colors---white--line`, `--_colors---additional--error`), `--_fonts---*` (families and size, line-height and letter-spacing per style: h1 to h6, p1, p2, l1, l2, a1, a2, c1) and `--_units---*` / `--_special-units---*` (spacing ladder, grid gap, offsets, cell sizes). This is the de-facto token system.

## Do's and Don'ts

Do build screens as plum planes with cream or white text and arch-masked photography. Do set display type in uppercase and tracked, and use the script only as a faint background element. Do use alpha ramps for hairlines. Do use the unit ladder for spacing.

Don't use rectangular image crops where an arch is available. Don't introduce saturated colors beyond the declared status colors. Don't mix more than the three families. Don't rely on the empty capture lower area as design.

## Responsive Behavior

Measured at 390px: the first heading is 90px/81.9px with -2.16px tracking, the second is 67.5px/67.5px, and body text is 12.19px/16.82px. Panel reflow, navigation and hover or focus behavior were not measured.

## Iteration Guide

For new sections, choose a plane (plum #340c24 with white text, cream #f3f3ec with navy #17233b text, or powder sky #b5cedb), mask imagery in arches with a 307.2px top radius, set headings in uppercase display serif with negative tracking, and put small captions in Maison Neue Extended. Use the 4-to-272px unit ladder. Measure any additional states before specifying them.

## Semantic Color Roles

The root variables map the raw palette to roles in three families, one per surface type. On cream surfaces, `--_colors---base-0--primary` is cream itself, `--_colors---base-0--gray-text` is cream at 60 percent, `--_colors---base-0--disabled` is cream at 30 percent, `--_colors---base-0--line` is cream at 10 percent and `--_colors---base-0--bg` is cream at 5 percent. On navy text surfaces, `--_colors---base-1000--primary` is navy #17233b, `--_colors---base-1000--gray-text` is navy at 60 percent, `--_colors---base-1000--disabled` navy at 30 percent, `--_colors---base-1000--line` navy at 10 percent and `--_colors---base-1000--bg` navy at 5 percent. On dark planes, `--_colors---white--primary` is white, `--_colors---white--gray-text` white at 80 percent, `--_colors---white--disabled` white at 40 percent, `--_colors---white--line` white at 20 percent and `--_colors---white--bg` white at 10 percent. A single brand role variable points to Powder Sky. The same five-step pattern (primary, gray text, disabled, line, background) is repeated for each surface, which is why every divider on the page is a translucent version of the text color it sits beside.

## Content Model

The measured text shows the sales flow: an address line ("COSTA DEL SOL"), a title that names the product type and place (Contemporary Mediterranean Residences in Estepona), an apartment selector ("SELECT AN APARTMENT"), large display statements ("THE SPACE TO...") and fine print about permits and the construction status. The language is English and the tone is formal and minimal, with almost no marketing adjectives in the measured text.
