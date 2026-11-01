---
version: alpha
name: Emilie Aubry
category: "Culture & Events"
description: "Emilie Aubry (emilieaubry.com), a minimal personal site whose entry screen is a white title card with a light Riccione-Serial name lockup and italic Emi, PP Neue Montreal 500 uppercase micro-labels, black ink #000000 and 29.97px capsule link chips."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
  link-bg: "#ffffff14"
typography:
  display:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 9.41952px
    fontWeight: 500
    lineHeight: 9.41952px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 11.44px
    fontWeight: 500
    lineHeight: 11.44px
    textTransform: uppercase
  body-dominant:
    fontFamily: Riccione-Serial
    fontSize: 9.41952px
    fontWeight: 300
rounded:
  xs: 29.97px
spacing:
  s1: 3.43px
  s2: 4.28px
  s3: 6.85px
  s4: 8.56px
  s5: 12.84px
  s6: 17.13px
components:
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    padding: 3.42528px 8.5632px
---

## Overview

emilieaubry.com is titled "Home - Emilie Aubry" and is built on WordPress (its root custom properties are the WordPress `--wp--preset--*` set). The measured capture shows an almost empty white screen with a single centered line, "Emilie Aubry · Emi", where the surname part is set in an upright light serif and "Emi" in italic. Beneath it, starting about halfway down the first viewport, is a pale grey-beige photographic area with a soft, washed-out overlay. The measured page height is 800px at the 1280px viewport and only 57 elements were visible, so what was captured is the entry state of the site, a minimal title card over imagery, not a long scrolling page.

The brand is the person: an individual's name used as the wordmark, with the nickname in italic as a signature. The voice is reserved. There is no tagline, no button and no paragraph in the captured state. Only one numeric text node, "100", was measured as the first small text element and the capture alone does not state what it counts.

## Colors

The measured canvas is white (#ffffff) and text is black (#000000), with white text also present (it appears over the image area). The only tinted value is a 8 percent white fill (#ffffff14) behind small link chips, and a 30 percent black value (#0000004d) was also measured as a background, which is the only dark translucent fill in the background list (the element carrying it was not isolated). The root variables expose `--black` (#000), `--white` (#fff) and `--transparent-black` (rgba(0,0,0,.08)).

The WordPress preset palette (vivid cyan blue #0693e3, vivid purple #9b51e0, vivid red #cf2e2e, luminous vivid amber #fcb900, pale pink #f78da7, pale cyan blue #8ed1fc, cyan bluish gray #abb8c3) is the editor default shipped with every WordPress theme and is not used by any measured element, so none of those hues are part of the brand. The page is effectively monochrome plus photography.

## Typography

Two faces are loaded: Riccione-Serial (weight 300) and PP Neue Montreal (weight 500). Riccione-Serial carries the name lockup (the light serif in the capture); PP Neue Montreal carries the small uppercase interface text. The measured display style is PP Neue Montreal 9.41952px/9.41952px at weight 500, uppercase; on mobile it measures 11.44px/11.44px. The dominant body-by-characters style is Riccione-Serial at 9.41952px, weight 300. The numbers are reported as measured; the reason they are so small was not determined. PP Neue Montreal and Riccione-Serial are commercial/foundry faces; a light high-contrast serif with an italic and a neutral grotesque are the substitution roles.

## Layout

The first viewport is split in two bands: a white title band with the lockup centered, then an image band that begins around the middle of the screen. Spacing values measured are 3.43px, 4.28px, 6.85px, 8.56px, 12.84px and 17.13px, and gaps of 17.1264px and 4.2816px. The WordPress spacing presets are also declared in the root (0.67rem, 1.5rem, 2.25rem, 3.38rem for the 30, 50, 60 and 70 steps), and `--wp--preset--font-size--large` is 36px and `--wp--preset--font-size--small` is 13px. Whether the theme uses those presets was not measured.

## Elevation & Depth

The WordPress shadow presets are declared (natural: 6px 6px 9px rgba(0,0,0,.2); outlined; crisp: 6px 6px 0 #000) but no box shadow was measured on an element of the page. Depth in the capture comes from the pale, washed-out look of the photograph and the contrast between the white title band and the image.

## Shapes

One radius was measured, 29.97px, on the small link chips (padding 3.43px 8.56px) filled with #ffffff14. These are capsule-shaped, text-sized pills. Nothing else on the measured screen carries a radius, and the image band is a full-width rectangle.

## Components

Link chip: PP Neue Montreal uppercase 9.42px, weight 500, white text on a 8 percent white fill, 29.97px radius, padding 3.43px 8.56px. Lockup: Riccione-Serial light, upright name followed by a centered dot and the italic nickname. Translucent fill: a 30 percent black background value (#0000004d) was measured; the capture shows the photograph as pale and desaturated. No inputs, cards or footer were measured.

## Design System Architecture

No public design system or brand guideline exists that this entry could find: no design-system link was found on the home page, and none was opened. The site is built with WordPress; its root variables are a mix of WordPress presets (`--wp--preset--*`) and a few site variables (`--black`, `--white`, `--transparent-black`). In total 53 root variables were recorded, of which the site's own are the three just named. The de-facto system is therefore minimal: two typefaces, black, white, an 8 percent veil and one chip radius.

## Do's and Don'ts

Do let the person's name be the wordmark and pair the upright light serif with an italic nickname. Do keep the interface text small, uppercase and set in the grotesque. Do let photography occupy full-width bands with a soft, washed-out look. Do keep the palette to white, black and their translucent variants.

Don't use the WordPress default accent colors; none is measured in use. Don't add boxed cards, buttons with heavy fills or drop shadows. Don't enlarge the interface text to display scale; the measured styles are around 9 to 11px.

## Responsive Behavior

Measured at 390px: the uppercase interface style measures 11.44px/11.44px at weight 500 and the nav role measures 11.44px/11.44px. Layout reflow of the lockup and image band, hover states and dark mode were not measured.

## Iteration Guide

To extend the site, start from white #ffffff and black #000000, use Riccione-Serial 300 for names and statements and PP Neue Montreal 500 uppercase for small interface labels, and use the 29.97px capsule with an #ffffff14 fill for links over imagery. Keep new photography pale and desaturated as in the capture. Before adding sections, measure the pages beyond the entry state, since this capture shows only the title card and the beginning of the image band; no values for scrolling content, galleries or contact forms exist in the measurements.

## Measurement Notes

The extraction found the h1 role as a numeric node ("100"), which is why the display token is attributed to a tiny uppercase text style rather than to the lockup. The lockup's own size was not captured as a separate role. Frequencies show fonts by characters: Riccione-Serial and PP Neue Montreal; weights 300 and 500; one font size by characters (9.41952px) and one radius (29.9712px). No motion, hover or dark-mode measurement was taken.

## Content Model

Everything legible in the capture is identity. The lockup tells the visitor whose site it is ("Emilie Aubry" and the italic "Emi"), and the imagery below it is the invitation to look at work. The page title uses the plain pattern "Home - Emilie Aubry", the WordPress default for a page called Home. The site language is declared as en-US. Without paragraphs, navigation labels or buttons in the measured view, the design relies on three things: the centered name, a large empty white field around it, and the photograph that begins mid-screen. The emptiness is the point of the entry state: it holds the name at the exact center of the first viewport with room on all sides, in the manner of a gallery wall label. Later pages of the site were not opened, so no claims are made about navigation or project presentation.
