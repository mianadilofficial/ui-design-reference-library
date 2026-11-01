---
version: alpha
name: Midlife Engineering
category: "Culture & Events"
description: "Midlife Engineering (midlife.engineering) sound-therapy site measured: light grey #ebebeb canvas, #262626 ink, orange #ff611a accent dot and highlight words, PP Neue Montreal Medium at 262.67px with -10.5068px tracking, a dark #141416 hardware-style sampler UI with 32px-radius keys."
colors:
  canvas: "#ebebeb"
  ink: "#262626"
  primary: "#ff611a"
  surface-2: "#141416"
  surface-3: "#ffffff"
  ink-2: "#000000"
  ink-3: "#808080"
  ink-6: "#e2ded5"
typography:
  display:
    fontFamily: "\"PP Neue Montreal Medium\", \"PP Neue Montreal Medium Placeholder\", sans-serif"
    fontSize: 262.67px
    fontWeight: 500
    lineHeight: 210.136px
    letterSpacing: "-10.5068px"
  display-mobile:
    fontFamily: "\"PP Neue Montreal Medium\", \"PP Neue Montreal Medium Placeholder\", sans-serif"
    fontSize: 124.208px
    fontWeight: 500
    lineHeight: 104.335px
  subheading:
    fontFamily: "\"PP Neue Montreal Medium\", \"PP Neue Montreal Medium Placeholder\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 19.8px
  body:
    fontFamily: "\"PP Neue Montreal Medium\", \"PP Neue Montreal Medium Placeholder\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 14px
  xl: 16px
  2xl: 24px
  3xl: 32px
  4xl: 42px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  tagline:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  statement:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

# Midlife Engineering

## Overview

This file documents the home page measured at `https://www.midlife.engineering/`, titled "Midlife Engineering – Sound therapy for a harmonious mind", language `en`. The page is a single-screen product and brand experience for an ambient sound tool. A small orange dot logo sits at the top left, with the line "Made for focus, rest, and everything in between." at the top center and a three-dot menu at the right. The hero is the wordmark "midlife engineering" set at a size so large that its letters bleed off the viewport edges, with a photoreal dark hardware sampler, in the style of a pocket synthesizer, placed across it: a speaker grille, an orange record knob, a small display reading "MIDLIFE ENGINEERING v2.0 SYSTEM STATUS: DORMANT", four rotary knobs, numbered pads and a row of sixteen round buttons with icons for sounds. Beneath the wordmark are the lines "& make harmony" and "© 2026 made by 1042 Studio" (the last is a link), and a badge "Featured on Product Hunt" plus a "Site of the Day" tab are part of the sampler artwork. Further down, a large pale statement reads "Midlife Engineering is a space where calm meets ambient clarity, inviting you to pause, breathe, and explore sound with harmony, and a slower rhythm." with the words "harmony," and "slower" tinted orange.

The identity is a calm light-grey stage (`{colors.canvas}` #ebebeb) with near-black type (`{colors.ink}` #262626), a single orange (`{colors.primary}` #ff611a) used for the logo dot and emphasized words, and a dark device (`{colors.surface-2}` #141416) as the one heavy object. The contrast between a quiet, slow page and a tactile, detailed instrument is the whole design idea.

## Colors

- `{colors.canvas}` #ebebeb: the page (area weight 6,144).
- `{colors.surface-2}` #141416: the body of the sampler device (546); other dark device tones (#2a2a2e, #0a0a0a, #36383d) appear as component fills inside the artwork and are not tokenized.
- `{colors.surface-3}` #ffffff: white surfaces and the lit pads (475).
- `{colors.ink}` #262626: text (3,052 characters); `{colors.ink-2}` #000000 (393); `{colors.ink-3}` #808080 (331) for the muted statement text.
- `{colors.primary}` #ff611a: orange text on 213 characters (the highlighted words) and the logo dot.
- `{colors.ink-6}` #e2ded5: a warm light text color (38 characters) used on dark surfaces.

The page also exposes Framer design-token variables (`--token-...`) at root that resolve to #262626, #fff, gray and #121212. No button fill was detected, and no primary CTA candidate exists, so only two text components, `tagline` and `statement`, are declared (from the measured h3 and body-text roles) and no button is invented.

## Typography

Fonts loaded: `PP Neue Montreal Medium` (weight 500, 2,389 characters), `Aspekta 400` (1,614), `Fragment Mono` (161) and `Manrope` (600; 18). PP Neue Montreal is a commercial typeface from Pangram Pangram and Aspekta and Fragment Mono are other third-party faces; no license pages were opened here, so no substitutes are asserted. Fragment Mono carries the device's screen text.

The wordmark is `{typography.display}`: 262.67px, weight 500, line-height 210.136px (0.8 times size), letter-spacing -10.5068px. On the 390px mobile pass it is 124.208px with 104.335px line-height (`{typography.display-mobile}`). The statement paragraph is `{typography.body}`: 32px/38.4px, weight 500. `{typography.subheading}` is 18px/19.8px weight 500. Other desktop sizes by characters: 16px (1,614), 22px (1,269), 152px (232), 56px (126), 10px, 11px, 136px and 24px. Weights by characters: 400 (3,275), 500 (888), 600, 700.

## Layout

Everything is on one vertical canvas. The first screen holds the oversized wordmark with the device centered and slightly offset; the logo dot is anchored top-left, the tagline top-center and the menu top-right, with generous empty space between. Below the hero is a long empty band before the statement paragraph, which is left-aligned at a wide column, about two thirds of the viewport width in the capture. Measured padding values are few: 8px (137 elements), 50px (30), 32px (6), 16px, 6px, 20px, 18px and 22px. The generated spacing tokens run `{spacing.s1}` 2px, 4px, 6px, 8px, 9px, 10px, 12px, 16px, 18px to `{spacing.s10}` 20px.

## Elevation & Depth

Depth is concentrated in the device. The most common shadow (149 elements) is a thin bright rim `rgba(255,255,255,0.25) 0.5px 0.5px 1px`; 65 elements use a double inset `rgba(0,0,0,0.05) -1px -1px 0 inset` with `rgba(255,255,255,0.15) 0.5px 0.5px 0 inset`, giving keys a molded edge. The device itself casts a multi-layer long shadow built from offsets such as `2.85533px 2.85533px 2.42283px -0.625px` and `6.76763px 6.76763px 5.74253px -1.25px` at 72 to 74% black. Outside the device the page is flat.

## Shapes

Radii by frequency: 32px (202 elements), 4px (69), 42px (45), 14px (15), 64px (7), 48px (6), 112px (5), 648px (4), 8px, 24px, 80px (4 each), 2px. Tokens: `{rounded.3xl}` 32px for pads and large keys, `{rounded.xs}` 2px, `{rounded.sm}` 4px, `{rounded.md}` 8px, `{rounded.lg}` 14px, `{rounded.xl}` 16px, `{rounded.2xl}` 24px, `{rounded.4xl}` 42px, `{rounded.pill}` 9999px for round knobs and the logo dot. The shapes echo hardware: round knobs, softly rounded pads and a 4px edge on small buttons.

## Components

No standard UI components (button, input, card, nav bar) were detected: the interface is a custom device illustration with interactive pads. The elements documented from the measurement and capture:

- **Logo dot**: orange circle `{colors.primary}`, top left.
- **Menu control**: a small bordered square with a three-dot icon at the top right.
- **Sampler device**: dark body (`{colors.surface-2}`), pad rows with 32px radius, rotary knobs, orange record button, black screen with monospace text.
- **Tagline** (`tagline`): 18px/19.8px weight 500 in `{colors.ink}`.
- **Statement text** (`statement`): 32px/500 grey text with orange emphasized words.
- **Credit link**: underlined "1042 Studio" link at the bottom.

## Design System Architecture

No public design system or brand guideline was found: the page links nothing related to brand, press, guidelines or GitHub (only the home page itself was scanned for such links). The page is a Framer site: its root variables are named `--token-<uuid>` and fonts carry Framer "Placeholder" fallbacks (for example `PP Neue Montreal Medium Placeholder`), which is how Framer exports its styles. Colors are therefore defined as tokens inside the Framer project rather than as a published CSS system.

## Do's and Don'ts

- Do keep the canvas light grey and the type near-black; let orange appear only in the dot and in two or three emphasized words.
- Do set the wordmark at a scale that crosses the viewport edges, with tight negative tracking and a line-height of 0.8 times size.
- Do use 32px radius for pads and round knobs for dials.
- Do use a mono face (Fragment Mono) for device readouts.
- Don't add generic buttons or cards; the site declares none.
- Don't use orange as a large fill; it is a point accent.
- Don't apply drop shadows outside the device artwork.
- Don't use more than three text greys: #262626, #000000, #808080.

## Responsive Behavior

At 390px wide the wordmark is 124.208px on a 104.335px line (`{typography.display-mobile}`), and the paragraph is 24px/28.8px weight 500 (a 310px block). Character-weighted sizes at that width: 16px (1,515), 22px (846), 24px (567), 72px (300), 38px (126), 68px (27), 11px, 124.208px. The headline block measured 644px tall by 209px wide. Layout of the device, menu and tagline at mobile was not measured.

## Iteration Guide

1. Set the page on `{colors.canvas}` with `{colors.ink}` and add `{colors.primary}` only as a dot and highlighted words.
2. Use `{typography.display}` for the wordmark and `{typography.body}` for the statement.
3. Draw the instrument with `{colors.surface-2}`, `{rounded.3xl}` pads and thin rim highlights.
4. Add motion or interaction only after measuring it (the extraction ran with `--no-motion`; no animation was recorded).
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=midlife-engineering --url=https://www.midlife.engineering/ --force --no-motion` before changing any value.
