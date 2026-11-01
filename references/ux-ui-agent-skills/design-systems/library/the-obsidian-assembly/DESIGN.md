---
version: alpha
name: The Obsidian Assembly
category: "Business & Corporate"
description: "Private-assembly brand site (obsidianassembly.com): off-black #151415 and warm cream #f1eade surfaces, a white 8px-radius SEEK ADMISSION button, OTJubilee-Platinum display serif with Switzer UI type, translucent white pill tabs and scroll-driven cinematic sections."
colors:
  canvas: "#151415"
  page-body: "#f1eade"
  ink: "#f1eade"
  primary: "#ffffff"
  on-primary: "#151415"
  ink-faint: "#1514151a"
  accent-brown: "#7b5136"
  ink-soft: "#f1eade99"
  hairline: "#7b513660"
  primary-hover: "#f9f7f238"
typography:
  display:
    fontFamily: OTJubilee-Platinum, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  body:
    fontFamily: Switzer-Regular, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  button:
    fontFamily: Switzer-Medium, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 16.64px
    textTransform: uppercase
  nav:
    fontFamily: OTJubilee-Platinum, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 31.25px
    fontWeight: 400
    lineHeight: 26.5625px
  input:
    fontFamily: OTJubilee-Platinum, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 61.0352px
    fontWeight: 400
    lineHeight: 67.825px
rounded:
  xs: 4px
  sm: 8px
  md: 20px
  lg: 48.83px
  pill: 9999px
spacing:
  s1: 6.4px
  s2: 6.67px
  s3: 10px
  s4: 12.8px
  s5: 16px
  s6: 20px
  s7: 25px
  s8: 31.25px
  s9: 32px
  s10: 36.53px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6.66667px 10px 31.25px
    height: 59px
    clipPath: inset(1px round 8px)
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.accent-brown}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.page-body}"
    padding: 12.8px 0px 76.2939px
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.primary}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 160px 0px 0px
---

## Overview

The Obsidian Assembly presents itself as "A Private Assembly for Makers", with the tagline "Imagine Possible" and hero copy that reads "Nothing Shown First", "Coordinates Withheld" and "Commitment Precedes Entry". The measured home page is a scroll-driven, cinematic site: a warm sand-to-brown atmospheric hero with large light-weight display type, a hard curved horizon where the page turns to near-black, an "Explore Places" gallery of interior photography on the dark ground, and a closing section. It is built to feel like an invitation-only club: little explanatory text, large type, slow motion, and a single "SEEK ADMISSION" call to action.

The brand voice is withholding and ceremonial rather than informative. Imagery is soft, warm, architectural interior renders (windowed rooms, wood tables, plants) with rounded-corner frames, over a dark field that lets the cream display type glow.

## Colors

- **Canvas `#151415`** is an off-black; by area the dark ground (7,902) is nearly as large as **page-body `#f1eade`** (8,557), a warm cream that is the light section and also the main text color on dark (ink). On the light sections the text is `#151415` (1,398 characters, the largest text share).
- **Primary `#ffffff`** is the fill of the "SEEK ADMISSION" button and the cards, with on-primary text `#151415`. The hover fill measured on buttons is `#f9f7f238`, a translucent warm white.
- **Accent-brown `#7b5136`** (27 characters) is the link color and, at 60 percent alpha (`#7b513660`), the hairline border color; the hero's brown cast is photographic.
- **Ink-soft `#f1eade99`** and `#f1eade66` are cream at 60 and 40 percent opacity for secondary text; **ink-faint `#1514151a`** is the 10 percent dark tint used for rules on light areas. `#ffffff1a` and `#ffffff66` are white overlays on dark.

## Typography

Four families are loaded and measured: **OTJubilee-Platinum** (730 characters, the light high-contrast display serif used for display words and navigation), **Switzer-Regular** (714, body), **Switzer-Medium** (365, buttons and labels) and **Voyage-Regular** (68, the huge 160px hero words "Nothing Shown First"). All text weights are 400; the character set differences come from separate font files rather than weights.

- **Display** (the h1 role, "Commitment") is OTJubilee-Platinum 20px, line height 26px.
- **Nav** is OTJubilee-Platinum at 31.25px; the display words in the sections above measure at 39.0625px (378 characters), 61.0352px and 76.2939px. The hero body font-size is 160px in Voyage-Regular, line height 124.919px.
- **Body** is Switzer-Regular 16px, line height 20.8px.
- **Button** is Switzer-Medium 12.8px, line height 16.64px, uppercase (10.24px on mobile).
- No letter-spacing is measured. Fallbacks are the system UI stack.

OTJubilee, Voyage and Switzer are commercially licensed or specialist faces; a light, high-contrast display serif for the hero and a neo-grotesque for the UI are the nearest stand-ins.

## Layout

The page is 1280px wide and 19,472px tall. Sections are full-bleed and stacked: the hero with a diagonal word arrangement and an arc where the cream gives way to near-black; a centered statement and button; paired angled objects at the left and right edges; then the "Explore Places" gallery where interior photographs are scattered in a loose grid with a slider caption "The Vault" and a "6/7" counter between two arrows. The top bar holds a two-line serif wordmark at the left, two pill tabs "PLACES" and "OBJECTS" in the middle, and a MENU button at the right.

Measured spacing values include 6.4px, 6.67px, 10px, 12.8px, 16px, 20px, 25px, 31.25px, 32px and 36.53px; the footer is padded 160px at the top.

## Elevation & Depth

Shadows are tiny and dark: `rgb(21, 20, 21) 0px 1px 0px 0px`, `rgb(21, 20, 21) 0px 2px 0px 0px`, and a softer `rgba(21, 20, 21, 0.15) 0px 4px 8px 0px`. Depth is otherwise made by the dark arc over the hero, translucent white pills on the dark ground (`rgba(255, 255, 255, 0.1)` fill with a `rgba(255, 255, 255, 0.2)` border) and gradient fades on the display type.

## Shapes

Measured radii: **8px** (19), **20px** (5), **50%** (2), **50% 50% 0 0** (2), a 704px set for pill and half-pill shapes, and **4px** (1). The button uses 8px, applied with a clip-path of `inset(1px round 8px)`. Photographs are rounded at 8px in the capture; the large 704px values draw the hero arc and lens-like shapes.

## Components

- **Primary button ("SEEK ADMISSION").** White fill, `#151415` text, Switzer-Medium 12.8px uppercase, radius 8px, height 59px; its hover state brings the fill to `#f9f7f238`.
- **Nav tabs ("PLACES", "OBJECTS").** 34px-tall translucent pills (`rgba(255, 255, 255, 0.1)` fill, `rgba(255, 255, 255, 0.2)` border, 8px radius) in cream text; on hover the text drops to 68 percent opacity.
- **MENU button.** Cream `#f1eade` fill, `#151415` text, 34px high, 8px radius, with a three-line icon at the left.
- **Gallery.** Rounded photographs, a serif caption, circular arrow controls and a "6/7" counter in a thin ring.
- **Card and footer.** Card text is white with the `#7b513660` border; the footer is `#151415` with 160px top padding.

## Design System Architecture

No public design system, brand guidelines or token package was found; the site is a proprietary bespoke build with four licensed font files and a handful of CSS values. The only page opened is https://obsidianassembly.com/ (measured by the extractor; see SOURCES.json). The de-facto system is a two-surface palette (cream and off-black), a display serif paired with a grotesque, 8px component radius, and scroll-driven transforms (the shipped CSS sets matrix transforms and clip paths on the button and footer).

## Do's and Don'ts

- Do alternate warm cream `#f1eade` and off-black `#151415` surfaces and use cream text on dark.
- Do set display words in light high-contrast serifs at large sizes (39px to 160px as measured) and UI text in Switzer.
- Do use 8px radius for buttons, tabs and photographs.
- Do keep copy sparse and ceremonial.
- Don't add saturated brand colors; the only chromatic value measured is the brown `#7b5136`.
- Don't use heavy shadows; measured shadows are 1px to 8px and dark.
- Don't set display type bold; all measured weights are 400.

## Responsive Behavior

Measured at 390px: the "SEEK ADMISSION" CTA is white with `#151415` text, Switzer-Medium uppercase at 10.24px (line height 13.312px); body text is Switzer-Medium 12.8px (16.64px line height); the h1 role stays 20px (25px line height). The mobile size distribution is 12.8px, 20px, 16px, 25px, 10.24px, 48.8281px, 76.2939px and 39.0625px. Breakpoints, layout reflow and the gallery behavior on mobile were not measured.

## Iteration Guide

1. Start from `#151415` and `#f1eade` full-bleed sections joined by a large curved edge.
2. Display words in light serif at 39px upward, UI in Switzer-Medium uppercase 12.8px.
3. Build one white 8px-radius button with `#151415` text; hover to `#f9f7f238`.
4. Use translucent white pills with 20 percent white borders for navigation on dark.
5. Frame photographs at 8px radius and keep copy to a few ceremonial lines.
6. Do not add colors, weights or states that were not measured here.

## Content and Voice

Microcopy is declarative and withholding. Section headings are single words or short phrases split across several lines and offset diagonally ("Nothing", "Shown", "First", "Explore", "Places"); supporting lines are placed in small Switzer text beside them ("Coordinates Withheld", "A Private Assembly for Makers", "Commitment Precedes Entry", "Not Everything is Visible"). A monospace-looking "IMAGINE POSSIBLE" label sits below the call to action. The body paragraphs that were extracted describe operating "Places" (the text states seven are in operation) and Lower Hall entering active operation, written as institutional announcements rather than marketing copy. The tone is exclusive and calm; there is no price, feature list or sign-up form in the measured content.
