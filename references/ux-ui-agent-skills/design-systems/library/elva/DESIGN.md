---
version: alpha
name: Elva
category: "Agencies & Studios"
description: "Elva (elvalabs.ai), an AI video agent for phones: #131313 canvas, white and #b3b3b3 text, Neue Haas Grotesk Display Pro at 108px display and 42px headings, frosted #ffffff0d buttons with 16px radius and 48px height."
colors:
  canvas: "#131313"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#ffffff"
  ink-black: "#000000"
  ink-muted: "#b3b3b3"
  hairline: "#ffffff80"
  button-primary-bg: "#ffffff0d"
typography:
  display:
    fontFamily: "\"Neue Haas Grotesk Display Pro\", sans-serif"
    fontSize: 108.16px
    fontWeight: 400
  display-mobile:
    fontFamily: "\"Neue Haas Grotesk Display Pro\", sans-serif"
    fontSize: 104px
    fontWeight: 400
    lineHeight: 93.6px
    letterSpacing: "-3.12px"
  heading:
    fontFamily: "\"Neue Haas Grotesk Display Pro\", sans-serif"
    fontSize: 42px
    fontWeight: 400
    lineHeight: 37.8px
  body:
    fontFamily: "\"Neue Haas Grotesk Display Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 15px
  sm: 16px
  md: 31px
spacing:
  s1: 4px
  s2: 12px
  s3: 16px
  s4: 17px
  s5: 20px
  s6: 80px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 0px 0px 0px 17px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

The measured site is elvalabs.ai (the queued elva-labs.com resolves there), titled simply "Elva". It markets an AI video agent that lives on a phone. The hero is a dark, cinematic frame: a phone mockup showing a smiling face, with the line "Meet Elva. A filmmaking crew in your phone." and the sub-line "The first AI agent that edits, directs, and shapes your memories." Further down, the page declares a problem statement ("Stop editing. Keep shooting") and then walks through four named features, each as a centered, very large title with a one-sentence explanation and a small square icon button: Real-time Guidance, Flow Arcs, Lighting Spot and Scene Sense. A contact block lists general inquiries, partnerships, press and careers addresses at the elvalabs.ai domain, with Instagram, TikTok and Facebook icons. A small credit in the capture's bottom-left corner attributes the product design to an agency.

The tone is calm and confident: short declarative lines, no jargon, benefits phrased as feelings ("shapes your memories", "natural, cinematic lighting in seconds"). The art direction is black and white typography over footage, with a single frosted action button in the top right ("Try Yourself").

Note on the capture: the page animates large overlapping text layers, so the static screenshot shows several headlines stacked on top of one another. Only the measured values below are treated as the design; overlap itself is an animation state, not a layout rule.

## Copy and Content Model

The words do most of the design work. The first screen sets the product promise; the second screen names the pain ("Stop editing. Keep shooting", followed in the capture by a sentence about footage that gets lost in raw clips that never get seen); then each feature is introduced by a two-word capitalised name and a single sentence. Real-time Guidance: "Get live help with framing, horizon, and composition, so every shot starts stronger." Flow Arcs: guides the camera along natural motion paths. Lighting Spot: helps find the best light in the scene. Scene Sense: reads the feeling of the scene and helps the user shoot in a way that matches it. A short block headed "Your personal AI agent for video" adds "No editing tools. No complexity." The copy never uses numbers, badges or comparison tables, so the layout has no need for data components. Contact copy is labeled plainly: General inquiries, Partnerships, Press, Careers.

## Colors

The measured palette is monochrome. The canvas is #131313, text is white (#ffffff), and secondary text is #b3b3b3. A black (#000000) text color also appears in the measurements. Borders and outlines are white at 50 percent (#ffffff80). The one filled control, the "Try Yourself" button, uses a white-at-5-percent fill (#ffffff0d), so it reads as frosted glass over the page rather than a colored button. There is no chromatic accent in the measured styles; the color on the page comes from photography and the phone UI.

## Typography

One family is used throughout: Neue Haas Grotesk Display Pro, falling back to sans-serif. The loaded face is declared at weight 500, while measured text weights are all 400. Display text is 108.16px on desktop; the mobile measurement of the first headline is 104px with 93.6px line-height and -3.12px letter-spacing. Section headings (the "Your personal AI agent for video" style) are 42px with 37.8px line-height, a ratio under 1 that stacks tight multi-line titles. Body copy is 16px. Other sizes measured by character count: 28px, 104px, 89.6px, 102.4px, 13px and 14px. Neue Haas Grotesk Display Pro is a commercial typeface; a neo-grotesque display sans is the substitute role.

The headings are set tight and large, and the descriptions beneath them are small and centered, producing a strong scale contrast: roughly 108px next to 16px.

## Layout

The page is 2,323px tall at a 1280px viewport. The structure is a single centered column of full-width bands, each band a large title, a two-line description and an icon button. The edges carry small utility text: the logo capsule at top left, the action button at top right, and the four contact addresses pinned to the left and right sides near the middle of the page. Measured gaps are 20px, 4px and 16px. Spacing tokens are 4px, 12px, 16px, 17px, 20px and 80px.

## Elevation & Depth

No box shadows were measured. Depth is created by layering: footage under translucent type, a phone mockup with a thin outline, and frosted 5-percent-white buttons. A blurred, enlarged copy of the hero text is visible behind the phone in the capture. There are no cards or panels with separate elevation.

## Shapes

Measured radii are 15px, 16px and 31px. The "Try Yourself" button is 48px tall with a 16px radius and 0px 0px 0px 17px padding. The logo capsule and feature icon buttons in the capture are rounded squares or pills in the same range. The phone mockup itself has the large rounded corners of a handset.

## Components

Primary action: "Try Yourself", 16px Neue Haas Grotesk Display Pro, white on #ffffff0d, 16px radius, 48px high, left padding 17px, with a small dot indicator at its right end in the capture. Feature block: title at the 42px heading style (the capture shows these closer to the display scale), a centered two-line description at 16px, and a square outline icon button below. Pill tags such as "What Elva Is" sit near the top of the content as small bordered capsules. Contact links are 16px white text. Footer icons are the three social logos in white.

## Design System Architecture

No public design system, token package or brand guideline was found; the site's only root custom properties are `--angle` and `--opacity`, so the page ships no token vocabulary of its own. The de-facto system is therefore a very small one: one font family, a black canvas, white at several opacities, and three radii. No official source beyond the site itself was opened for this entry.

## Do's and Don'ts

Do set statements in one neo-grotesque family at very large size with tight leading, and keep descriptions small and centered. Do use white at reduced opacity for fills and strokes. Do keep the canvas near-black (#131313) and let footage or product UI supply the color.

Don't introduce a saturated brand color; none is measured. Don't use drop shadows; none are measured. Don't use heavy font weights; the measured weight is 400. Don't set long paragraphs; copy is limited to one or two lines per block.

## Responsive Behavior

Measured at 390px: the first headline is 104px/93.6px with -3.12px tracking, the section heading is 28px/25.2px, the body text is 13px, and the button label is 16px with 48px line-height. The layout of the contact addresses, the navigation and hover or focus states were not measured.

## Iteration Guide

To extend the system, keep to #131313, #ffffff and #b3b3b3, with white at 5 percent for control fills and 50 percent for outlines. Use one family at weight 400: display 108px, heading 42px/37.8px, body 16px. Controls are 48px high with a 16px radius. Use 31px for larger capsule shapes. Add copy in the same voice: one verb-led headline, one sentence of benefit. Measure any new color or interaction before adding it, because the existing measurements contain none.
