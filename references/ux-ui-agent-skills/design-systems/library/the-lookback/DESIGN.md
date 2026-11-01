---
version: alpha
name: "The Lookback"
category: "Agencies & Studios"
description: "Better Off studio year-in-review microsite entry screen: huge uppercase heavy sans headline at 89.856px with tight 76.3776px line height, mono uppercase index at 11.9467px, black #000000 on white #ffffff, 2.56px to 4.27px radii, no shadows."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  surface: "#bebebe"
  surface-2: "#bdbdbd"
  surface-3: "#bcbcbc"
  ink-3: "#ffffff4d"
  hairline: "#e0e0e0"
typography:
  display:
    fontFamily: sans
    fontSize: 89.856px
    fontWeight: 700
    lineHeight: 76.3776px
    letterSpacing: "-0.89856px"
    textTransform: uppercase
  display-mobile:
    fontFamily: sans
    fontSize: 46.8px
    fontWeight: 700
    lineHeight: 39.78px
    letterSpacing: "-0.468px"
    textTransform: uppercase
  nav:
    fontFamily: sans
    fontSize: 17.0667px
    fontWeight: 500
    lineHeight: 17.0667px
  body-dominant:
    fontFamily: mono
    fontSize: 11.9467px
    fontWeight: 500
rounded:
  xs: 2.56px
  sm: 3.41px
  md: 4.27px
spacing:
  s1: 4.27px
  s2: 5.12px
  s3: 10.24px
  s4: 11.95px
  s5: 12.8px
  s6: 13.65px
  s7: 15.36px
  s8: 15.72px
  s9: 17.07px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 0px 0px 5.12px
    height: 36px
    borderColor: "{colors.hairline}"
  nav:
    textColor: "{colors.canvas}"
    padding: 15.36px 0px 0px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    transform: matrix(1, 0, 0, 1, 0, 17.9156)
---

## Overview

The Lookback (tlb.betteroff.studio) is a year-in-review microsite from the design studio Better Off, titled "THE LOOKBACK". The measured home is an entry screen for an interactive archive: an oversized heavy headline in black on white reading "Better Off® THE LOOKBACK (BO®S/2026)", a small bordered button "Enter with sound →" with a lighter "...or without" link beneath it, a four-word text navigation at top left (Timeline, Surf, Index, About) and, at top right, a two-column monospaced index of months (January to December) with category counts under each (Articles, Podcast Episodes, Inspiration, Music Playlist, Cases, Clients) such as "ARTICLES (3)" and "MUSIC PLAYLIST (12)". A music track credit ("Post Malone - Overdrive") appears in the page text. The measured page is a single-screen stage with almost no scroll; most of its content (the timeline, surf mode and index) is reached after entering.

Because the first screen is an entry gate with an overlaid index, the document describes the measured entry experience only. The identity is stark and typographic: white paper-like canvas, black text, a heavy grotesque in uppercase at enormous size, and a typewriter-like monospace for data. Registered-trademark marks (®) are used as typographic ornaments inside words ("BO®S").

## Colors

The canvas is white (#ffffff) and the ink and primary are black (#000000). Several neutral grays were measured as background areas: #bebebe, #bdbdbd, #bcbcbc, #bababa and #c2bfbd, which are the page grain and the gray backdrop behind the 3D/canvas layer; the generated tokens keep three of them as surface, surface-2 and surface-3. A translucent white (#ffffff4d) is used for muted text over dark imagery, and the hairline border color is #e0e0e0.

The site's root variables name a muted print palette: --silver #c2c1c1, --timberwolf #d2d1d0, --davys-gray #5c5757, --tea-rose-red #fac9c7 and --puce #d98c90. The measured background-area list also contains many saturated hues each with identical weight (for example #cc4320, #b5383d, #6f95c2, #477299, #fee701, #fc9f0e), which are colors of the project thumbnails and canvas content rather than interface colors, so they are not tokenised.

- Interface: black on white, with #e0e0e0 hairlines.
- Neutrals: the gray family from #bababa to #c2c1c1 and #d2d1d0.
- Accents: tea rose #fac9c7 and puce #d98c90 appear only as named variables, not as measured UI fills.

## Typography

The font stack is declared with generic names: a "sans" family loaded at weights 500 and 700 and a "mono" family at weight 500; the real typefaces behind these names were not identified, so none is named here. Measured sizes: the display headline (h1 role) is 89.856px, weight 700, line height 76.3776px (about 0.85 of the font size), letter spacing -0.89856px, uppercase; at the 390px mobile pass it is 46.8px with a 39.78px line height and -0.468px letter spacing, in a 135px-wide box. Navigation text is 17.0667px, weight 500, line height 17.0667px, set in mixed case with commas. The monospace index (the dominant text by character count) is 11.9467px at weight 500, uppercase. The tight line height makes the headline lines nearly touch; the commas inside the nav read like a sentence.

## Layout

The layout is a centred headline block in the middle of the viewport with a centred entry button under it. The navigation sits at the top-left corner with padding 15.36px 0px 0px. The month index is a two-column list at the right of the top area; each month is followed by indented category lines. In the capture the index overlaps the headline, which shows the page is a layered stage rather than a sequence of sections. Spacing values measured: 4.27px, 5.12px, 10.24px, 11.95px, 12.8px, 13.65px, 15.36px, 15.72px and 17.07px, all small multiples of a roughly 1.7px-based unit scaled by viewport size (the --size variable is 390 in the mobile pass).

## Elevation & Depth

No shadows were measured, and the Tailwind shadow variables are all empty (0 0 #0000). The site is flat and uses overlapping layers (the index above the headline) instead of elevation.

## Shapes

Measured radii: 2.56px, 3.41px and 4.27px, each on one element. These tiny radii soften the entry button and small controls without making them round. The secondary button has a 1px-class border in #e0e0e0, 36px height and padding 0px 0px 0px 5.12px.

## Components

- Entry button: white fill, black text (17.0667px, weight 500), 36px high, #e0e0e0 border, small corner radius, with an arrow glyph ("Enter with sound →").
- Alternate link: lighter gray "...or without".
- Top navigation: four text items with commas, 17.0667px weight 500, white text token (it is set over imagery in the next screens), padding 15.36px 0px 0px.
- Month index: monospace uppercase list with counts in parentheses.
- Headline: 89.856px uppercase heavy sans, stacked three lines.

## Design System Architecture

No public design system or brand guideline was found; the page HTML was opened and exposes only a Tailwind-style utility stylesheet (all the --tw-* variables are defaults) and a small set of named color variables (--silver, --timberwolf, --davys-gray, --tea-rose-red, --puce). Spacing is scaled with the --size variable, which indicates viewport-relative sizing. The studio's wider brand is not documented here.

The microcopy voice is playful and archival. The headline reads like a file name ("BO®S/2026"), the navigation reads as a comma-separated sentence, the index reads like a library catalogue with counts in parentheses, and the entry choice is phrased as a polite binary: enter with sound, or without. Category names (Articles, Podcast Episodes, Inspiration, Music Playlist, Cases, Clients) show that the archive mixes written work, audio, references and client projects, month by month, so the interface behaves as a calendar of everything the studio produced and listened to in the year. Months are capitalised and set apart from their indented entries, which makes the list easy to scan even at 11.9467px.

The overall art direction is restrained: no photographs are visible in the measured entry screen, only type, thin rules and the pale paper-like grain implied by the gray background-area measurements. All emphasis is by scale (the headline is more than five times the nav size) rather than by color, which means a recreation should spend its effort on type size, line height and letter spacing rather than on palette, with the entry button kept small and quiet beneath it.

## Do's and Don'ts

- Do set huge, tight, uppercase heavy sans headlines in black on white.
- Do use monospace uppercase for data and counts.
- Do use typographic marks (®) as ornaments.
- Do keep controls small with radii of 2.56px to 4.27px.
- Don't add shadows or gradients to interface elements.
- Don't tokenise project-thumbnail colors as interface colors.
- Don't assume the entry screen's colors apply to the interior experience; they were not measured.

## Responsive Behavior

Measured at the 390px mobile pass: the headline is 46.8px with a 39.78px line height and -0.468px letter spacing in a 135px-wide box; the --size variable is 390. No other mobile role was recorded, so navigation and index behavior at small widths are not measured.

## Iteration Guide

1. White #ffffff, black #000000, hairline #e0e0e0, neutrals in the #bababa to #c2c1c1 range.
2. Headline 89.856px, weight 700, uppercase, line height 76.3776px, letter spacing -0.89856px.
3. Mono 11.9467px uppercase for lists; nav 17.0667px weight 500.
4. Radii from 2.56px to 4.27px; no shadows.
5. The interior pages (Timeline, Surf, Index, About), sound state and any dark mode are not measured.
