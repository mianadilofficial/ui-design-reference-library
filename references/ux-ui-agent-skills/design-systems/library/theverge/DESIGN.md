---
version: alpha
name: The Verge
category: "Media & Consumer Tech"
description: "The Verge's homepage is a tech-news magazine in a white canvas with near-black #131313 headlines, grey #4a4a4a serif body copy, one electric violet #5200ff for actions and bylines, and a 90px Manuka condensed 900 headline set against FK Roman and PolySans."
colors:
  canvas: "#ffffff"
  ink: "#131313"
  ink-body: "#4a4a4a"
  ink-muted: "#636363"
  ink-faint: "#949494"
  primary: "#5200ff"
  on-primary: "#ffffff"
  surface-dark: "#131313"
  surface-soft: "#f6f6f6"
  hairline: "#e9e9e9"
  accent-mint: "#3cffd0"
typography:
  display:
    fontFamily: manuka, "manuka Fallback", Impact, Helvetica, sans-serif, Impact, Helvetica, sans-serif
    fontSize: 90px
    fontWeight: 900
    lineHeight: 72px
  display-mobile:
    fontFamily: manuka, "manuka Fallback", Impact, Helvetica, sans-serif, Impact, Helvetica, sans-serif
    fontSize: 65px
    fontWeight: 900
    lineHeight: 52px
  heading:
    fontFamily: polySans, "polySans Fallback", Helvetica, Arial, sans-serif, Arial, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 26.4px
    letterSpacing: 0.24px
  body:
    fontFamily: fkRomanStandard, "fkRomanStandard Fallback", Georgia, serif, Georgia, serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
    letterSpacing: "-0.16px"
  button:
    fontFamily: polySansMono, "polySansMono Fallback", "Courier New", Courier, monospace, Arial, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 1.5px
    textTransform: uppercase
rounded:
  xs: 1px
  sm: 2px
  md: 3px
  lg: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 10px 24px
    height: 44px
  button-secondary:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink-body}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 10px 24px
    height: 44px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    boxShadow: rgba(0, 0, 0, 0) 0px -1px 0px 0px inset
  nav:
    textColor: "{colors.ink}"
    padding: 8px 0px 0px
    borderColor: "{colors.primary}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 40px 0px 0px
---

## Overview

The Verge homepage, as captured at 1280px wide, reads as a magazine front page crossed with a live feed. The canvas is white (#ffffff). A very large lead story sits at the left: a photograph, and over its lower edge a white card carrying a 90px Manuka headline in weight 900 at 72px line height, a serif standfirst, and a violet byline. At the far left of the capture a giant "The Verge" wordmark is set vertically, rotated, in black, cropped by the edge of the page. To the right a narrow column of short posts runs down the page under a pill-shaped "Latest / Following" switch; this column is the dense, chronological part of the page, and the lead block is the loud part.

Three type voices share the page. Manuka, a condensed display face, appears only for the main headline (it accounts for 73 characters in the measured text). PolySans, a geometric sans, carries story headlines and section titles. FK Roman Standard, a serif, carries paragraph copy and is the most-read family on the page. A mono face, PolySans Mono, is used for tiny uppercase labels: bylines, timestamps, comment counts and the buttons. Color discipline is strict: black, two greys, white, and a single electric violet #5200ff that marks everything interactive or attributable. There is also a mint #3cffd0 that appears in measured border colors and in the stylesheet but is not visible in the captured hero area, so this guide treats it as a secondary accent used sparingly.

The microcopy voice is plainly editorial: headlines are full sentences and often contain a verb and an opinion ("Hands-on with ...", "Anthropic bans ..."), standfirsts are one or two sentences, and the interface labels are uppercase and terse (SUBSCRIBE, SIGN IN, LATEST, FOLLOWING, SKIP TO MAIN CONTENT).

## Colors

The palette was measured from the live page; every value below appears in the frontmatter.

- **Canvas #ffffff** is the body background and covers the largest area (about 57% of the capture by pixel share).
- **Ink #131313** is the body element color and the color of the large Manuka headline, the PolySans headings and navigation links. The same hex is used for dark surface areas, so it is also listed as `surface-dark`.
- **Ink-body #4a4a4a** is the paragraph color of the FK Roman copy; by character count it is the single most-read text color on the page (9,365 characters against 7,965 for #131313).
- **Ink-muted #636363** and **ink-faint #949494** are used for small supporting text (e.g. the source credit in brackets under a story and the "ADVERTISEMENT" label in the capture), and #636363 is also the computed background of the subscribe link on hover.
- **Primary #5200ff** is the fill of the Latest toggle and the SUBSCRIBE link, the color of bylines, section rules and many inline links, and the border color of the nav. White (#ffffff) text sits on it.
- **Hairline #e9e9e9** is the border color (40 occurrences) and the fill of the inactive Following toggle.
- **Surface-soft #f6f6f6** is a light grey panel color (about 12% of the screen share).
- **Accent-mint #3cffd0** is recorded in the border-color frequencies of the page and the shipped CSS corpus.

## Typography

Fonts are declared as web fonts named manuka, polySans, polySansMono and fkRomanStandard, each with a metric-adjusted "Fallback" face, and exposed as root variables `--font-manuka`, `--font-polysans`, `--font-polysans-mono` and `--font-fkroman`. Fallback stacks are Impact for Manuka, Helvetica/Arial for PolySans, Courier New for the mono and Georgia for the serif.

- **Display** is Manuka 900, 90px on a 72px line height on desktop and 65px on 52px at 390px width. Lines are tight, almost touching, and stacked in a column roughly 456px wide.
- **Heading** is PolySans 700, 24px on 26.4px with 0.24px tracking.
- **Body** is FK Roman Standard 400, 16px on 20.8px with -0.16px tracking; the compact line height is a deliberate newsroom density.
- **Button** is PolySans Mono 600, 12px, uppercase, 1.5px tracking.

Loaded weights include PolySans 300, 400, 500 and 700, PolySans Mono 400, 500 and 700, and FK Roman Standard 400 and 700. The sizes by character count are led by 16px, 20px, 11px and 18px; the 11px size carries 1.1px tracking and is the mono label size. The designer credit for these families is documented by Font In Use: PolySans by Gradient Type, Manuka by Klim Type Foundry, FK Roman by Florian Karsten (another article I opened credits other names for PolySans and FK Roman, so the individual designers are left out here). All are commercial typefaces; Impact, Helvetica and Georgia are the fallbacks to use when licences are not available.

## Layout

The page is a two-region layout. A wide left column holds the lead story, a two-by-two grid of secondary stories with small square thumbnails, and themed rails such as the "Lay of the laptops" block with a violet top rule; a narrow right column of about 300px holds the feed. A thin vertical hairline separates them. A masthead sits on top: a utility row with SUBSCRIBE and SIGN IN aligned right, then the wordmark and categories (Tech, Reviews, Science, Entertainment, AI, Policy) separated by slashes, closed by a black rule.

Measured spacing values include 4, 5, 6, 8, 10, 12, 14, 15, 16 and 18px, with the most common gaps 30px, 20px, 8px and 24px and the most common paddings 16, 20, 24 and 35px. Thumbnails are small and square beside text; the lead image is large and bleeds to the column edge. Density is high but rows are separated by hairlines rather than boxes.

## Elevation & Depth

The interface is almost flat. The most common box-shadow value is a zero-alpha inset (`rgba(0, 0, 0, 0) 0px -1px 0px 0px inset`), which links use as a placeholder for an underline that appears as a 1px inset line; a violet variant (`rgb(82, 0, 255) 0px -1px 0px 0px inset`) draws the underline on hover or in link emphasis. One measured shadow, `rgb(255, 255, 255) 0px 3px 0px 20px, rgba(0, 0, 0, 0.3) 0px -25px 40px 0px`, belongs to a single element, consistent with the white card that overlaps the hero image. Depth is otherwise made by overlap (the card over the photo, the cropped wordmark over the edge) and by color blocks, not by drop shadows.

## Shapes

Radii measured on the page: 1px, 2px, 3px, 24px, 50% and the 9999px pill. The 3px and 2px radii are the small controls and tags; the 24px radius is applied to the two toggle buttons (height 44px), which with a 44px height produce a pill-like capsule; 50% is used for avatars. Images and cards in the capture have square corners. Do not round story cards.

## Components

- **Primary button** (the LATEST toggle): #5200ff fill, white PolySans Mono 12px/600 uppercase, 1.5px tracking, 10px 24px padding, 44px height, 24px radius.
- **Secondary button** (FOLLOWING): the same shape with #e9e9e9 fill and #4a4a4a text.
- **Subscribe link**: a small violet rectangle with 2px radius and 22px height; on hover its background changes to #636363.
- **Navigation links**: PolySans in #131313; on hover the opacity changes to 0.5.
- **Byline**: mono uppercase 11px with 1.1px tracking in #5200ff, followed by a grey timestamp and a comment icon count.
- **Feed post**: PolySans bold headline, serif summary in #4a4a4a, source in bracketed mono caps, hairline separators; inline links are underlined.

## Design System Architecture

The Verge does not publish a public design system, token package or brand guidelines that I could open; the system is therefore described from what the page ships. The live page exposes `--font-*` variables for its four font families and a set of `--coral-*` variables (for example `--coral-sys-color-primary`) that belong to the embedded comments component; many other custom properties use hashed names beginning `--_1tsb0ye`, so colors are not exposed as readable global tokens. A navigation class name containing `duet` appears in the consent overlay markup. The redesign was developed in house at Vox Media according to [Font In Use](https://fontsinuse.com/uses/48536/the-verge-2022-rebranding) and presented the new typefaces in [Design Compass](https://designcompass.org/en/verge-rebranding) and [Typeroom](https://www.typeroom.eu/the-verge-redesign-typefaces-twitter-like-feed). Typeroom also describes the Twitter-like "Storystream" feed, which matches the right-hand column in the capture.

## Do's and Don'ts

- Do use #5200ff only for actions, bylines, rules and links; keep body text in grey or black.
- Do pair Manuka at 900 only with the main headline, tightly set.
- Do keep labels in PolySans Mono uppercase with generous tracking.
- Do separate items with #e9e9e9 hairlines.
- Don't add drop shadows to cards; overlap and color do the work.
- Don't set long copy in Manuka or the mono face.
- Don't introduce gradients or additional hues beside the violet and the mint.
- Don't use a rounded corner on photographs.

## Responsive Behavior

At 390px wide the Manuka headline drops from 90px/72px to 65px/52px, which this guide records as `display-mobile`. Only the mobile headline metrics were measured; the mobile layout itself was not captured, so no claim is made about how the feed column reflows. The pill toggles keep their 44px height, a comfortable touch size.

## Iteration Guide

1. Start from the white canvas and #131313 ink, then add #5200ff for exactly one action per region.
2. Choose the display face by role: Manuka for the one hero, PolySans for headings, FK Roman for copy, PolySans Mono for labels.
3. Keep headline line height at 0.8 of the font size (72/90) and body at about 1.3 (20.8/16).
4. Use the 24px radius only on toggles and primary pill buttons, and the 2px radius on small tags.
5. Before shipping, check that every hex you used is in the frontmatter, and compare against the capture at 1280px.
