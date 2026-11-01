---
version: alpha
name: Sidewave
category: "Portfolio"
description: "Sidewave (sidewave.it), an Italian digital studio site: near-black #111111 canvas, white #ffffff text, Fraktion Mono 12.8px uppercase labels, Fraktion Sans body, Bigger Display 900 headlines, inverted white-on-black link chips and a single 5px radius over full-bleed violet WebGL/video imagery."
colors:
  canvas: "#111111"
  page-largest: "#000000"
  ink: "#ffffff"
  primary: "#000000"
  surface-deep: "#0e0f0f"
typography:
  display:
    fontFamily: "\"Fraktion Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  display-mobile:
    fontFamily: "\"Bigger Display\", sans-serif"
    fontSize: 46.8px
    fontWeight: 400
    lineHeight: 39px
    letterSpacing: "-0.936px"
    textTransform: uppercase
  link:
    fontFamily: "\"Fraktion Mono\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 22px
    textTransform: uppercase
rounded:
  xs: 5px
spacing:
  s1: 2px
  s2: 5px
  s3: 10px
  s4: 15px
  s5: 20px
  s6: 40px
  s7: 42.23px
  s8: 64px
components:
  link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    typography: "{typography.link}"
    padding: 0px 2px
---

## Overview

Sidewave (sidewave.it) is an award-listed digital studio portfolio. The measured page is 1280px wide and 63,835px tall, a very long scroll-driven experience rather than a conventional page. The first screen is a full-bleed violet-to-magenta landscape with a lone figure and a translucent orb, with a white SIDEWAVE wordmark top left, a translucent MENU button top right, a left rail of bracketed section labels ("[ ORIGIN ]", then INTRO, COMPANY, SERVICES chips), a vertical PORTFOLIO tab on the right, a red "Site of the Day" award tab on the left edge and a "SCROLL TO DISCOVER" prompt above a small looping thumbnail. Below the first viewport the full-page capture is a flat dark surface because the remaining sections render only while scrolling.

The voice is terse, uppercase and technical: bracketed labels, mono-spaced microcopy ("THE FOUNDATION OF OUR REALITY, PURPOSE AND CAPABILITIES."), and chapter-style section names. The page measures almost no UI chrome: no primary button was detected and the only link role found is the inverted section chip. A cookie-consent layer was hidden by the extractor before measurement and is not brand UI.

The art direction is cinematic and sci-fi: one human figure in a vast violet desert beside a glowing translucent sphere, with long light streaks crossing the sky. Text is small against this scale, which is a deliberate contrast of tiny mono labels with immense imagery. The navigation labels use square brackets and uppercase throughout, giving the interface the feel of a terminal or technical readout, and the left rail shows INTRO as a white chip, COMPANY as a gray chip and SERVICES as a black chip in the capture.

## Colors

The palette is monochrome. The canvas is #111111 (the dark surface beneath the hero in the capture), with #000000 as the largest measured background area (weight 81), #ffffff (16), #0000001a (7, a 10% black), #0000004d (3, a 30% black) and #0e0f0f (3). Text is #ffffff almost everywhere (2,597 characters) and #000000 (289 characters) on the white link chips. The primary token is #000000: the inverse fill used by the INTRO/COMPANY/SERVICES chips, which swap between white-on-black and black-on-white on hover (measured: before color #000000 on #ffffff, after #ffffff on #000000).

All chromatic color comes from imagery (the violet and magenta landscape, the red award tab). No chromatic UI color was measured as a CSS value, so none is tokenized. The root variables include --base: rgba(0,0,0,0.4) and a set of --cc-* variables belonging to the cookie-consent library, which are not brand tokens.

## Typography

Three custom families are loaded: Fraktion Mono, Fraktion Sans and Bigger Display (weight 900). By character count Fraktion Mono leads (2,258), then Fraktion Sans (377) and Bigger Display (306). The body element is Fraktion Sans 14px weight 400 / 20px line-height in white (display token), and the nav chips are Fraktion Mono 12px / 22px uppercase (link token). Bigger Display is the headline face: in the mobile pass the h1 is Bigger Display 46.8px / 39px with -0.936px letter-spacing and uppercase (display-mobile token).

Sizes by characters: 12.8px (1,913), 16px (363), 10px (237), 44px (222), 12px (118), 102.4px (47), 57.6px (37), 14px (4). Only weight 400 was measured for text (2,941 characters). Letter-spacing was measured as 1px at 102.4px and -1.152px at 57.6px. The pairing is a condensed display face for oversized statements against a monospaced face for all small labels.

## Layout

Desktop width is 1280px with a 63,835px scroll. The layout is full-bleed: imagery runs edge to edge and UI sits on rails along the viewport edges (left section index, right PORTFOLIO tab, top bar). Measured padding values are 10px (28 uses), 20px (16), 2px (16), 40px (14), 211.188px (6), 15px (2), 42.234px (1) and 64px (1); the measured gap is 20px (4). The large 211px padding belongs to wide editorial text blocks further down the scroll. Hero text is small and set to the left, leaving the imagery as the main subject.

## Elevation & Depth

No box shadows and no border colors were measured. Depth comes from translucent black layers (#0000001a, #0000004d, and the --base rgba(0,0,0,0.4) variable) laid over imagery, such as the translucent MENU button, and from full-bleed video or WebGL scenery with a large gradient sky. Elements are flat chips on top of moving imagery.

## Shapes

Only one radius was measured: 5px (4 elements). The MENU button and chips are near-rectangular with slight rounding; the INTRO/COMPANY/SERVICES chips measured with a 0px radius in the link role. The looping thumbnail at the bottom of the hero is a small rounded square. Everything else is edge-to-edge rectangular media.

## Components

Link chip (link token): Fraktion Mono 12px uppercase, 22px line-height, padding 0px 2px, white (#ffffff) background with black (#000000) text, 40px wide by 22px tall in the INTRO example, inverting on hover. Menu: a translucent dark rounded button holding the word MENU in Fraktion Sans 14px and a small dot, which opens a layer containing a CLOSE control. Section index: a thin vertical rule at the left with bracketed uppercase labels. Award tab: a red vertical tab labeled "Site of the Day" attached to the left edge. These come from the capture; only the chip values are measured numerically.

## Design System Architecture

No public design system or brand guideline was found: the pages opened (the home page via the extractor) link none, and no GitHub organization is linked. The de-facto system is custom: three proprietary or licensed font families, a near-monochrome token set, a --base translucent-black variable and the consent library's --cc-* variables. Spacing is a 5px multiple scale (2, 5, 10, 15, 20, 40, 64). There is no token layer for color beyond black, white and #111111.

## Do's and Don'ts

Do keep the interface monochrome (#111111, #000000, #ffffff) and let imagery carry color. Do set small labels in Fraktion Mono uppercase and oversized statements in Bigger Display. Do invert chips on hover (white on black to black on white). Do use a 5px radius only where rounding is needed.

Don't add chromatic UI colors, gradients on UI chrome or heavy shadows; none were measured. Don't style the cookie-consent layer as part of the brand. Don't set body copy larger than 16px in the measured pattern; the large sizes (44px, 57.6px, 102.4px) are reserved for display statements.

## Responsive Behavior

A mobile pass recorded font usage: sizes 15.6px (1,835 characters), 16.88px (363), 46.42px (222), 102.4px (47), 46.8px (37) and 12px (27), and the h1 as Bigger Display 46.8px / 39px. Compared with desktop, the 12.8px mono labels are 15.6px and the 44px display is 46.42px in the mobile pass. Mobile layout, column counts, menu behavior and breakpoints were not measured.

## Iteration Guide

Start from the dark canvas #111111, white text and the three fonts. Build the fixed rails first (wordmark, MENU, left index, right PORTFOLIO tab), then the full-bleed hero media, then the long scroll of sections. Use only measured values: Fraktion Mono 12px for chips, Fraktion Sans 14px / 20px for body, Bigger Display for headlines, 5px radius. Scroll-triggered content below the first viewport was not captured; anything about it is not measured and should be verified against web/data/extracted/sidewave.json before use.
