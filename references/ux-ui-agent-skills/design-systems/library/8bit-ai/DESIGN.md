---
version: alpha
name: 8bit.ai
category: "Tech & AI"
description: "8bit.ai (8bit.ai Inc.) AI compute and Neutrino platform site: pure black #000000 canvas with white Roboto Condensed 20px/500 body, Helvetica display lines at 61.04px with -3.052px tracking in steel blue #8faab2, white 8px-radius buttons with #1a1a1a labels."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#1a1a1a"
  accent-steel: "#8faab2"
typography:
  display:
    fontFamily: >-
      __helvetica_827732, __helvetica_Fallback_827732, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 61.04px
    fontWeight: 400
    lineHeight: 73.248px
    letterSpacing: "-3.052px"
  display-mobile:
    fontFamily: >-
      __helvetica_827732, __helvetica_Fallback_827732, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 39.06px
    fontWeight: 400
    lineHeight: 46.872px
    letterSpacing: "-1.172px"
  heading:
    fontFamily: >-
      __helvetica_827732, __helvetica_Fallback_827732, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 48.83px
    fontWeight: 400
    lineHeight: 58.596px
    letterSpacing: "-1.465px"
  subheading:
    fontFamily: >-
      __helvetica_827732, __helvetica_Fallback_827732, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 25px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: "-0.75px"
  body:
    fontFamily: >-
      __Roboto_Condensed_338de4, __Roboto_Condensed_Fallback_338de4, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: 0.2px
  button:
    fontFamily: >-
      __Roboto_Condensed_338de4, __Roboto_Condensed_Fallback_338de4, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.32px
rounded:
  xs: 8px
spacing:
  s1: 3.13px
  s2: 4px
  s3: 7.63px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 30px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 24px 32px
    height: 49px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 24px 32px
    height: 49px
  headline-steel:
    textColor: "{colors.accent-steel}"
    typography: "{typography.display}"
---

## Overview

8bit.ai presents itself with the wordmark "8bit.ai" (a stylised 8 followed by "bit.ai") and, per the extracted text, the headline "On-demand Accelerated Compute & End-to-End AI Solutions" and the product name Neutrino™ ("Neutrino™ renders a single source of truth conversational interface…"), with two buttons "Explore Neutrino" and "View Services". The page text fetched through WebFetch was mostly boilerplate: the copyright line names "8bit.ai Inc.", a "Scroll Down To Continue" prompt, a Menu toggle, a Privacy Policy link, a note that the site uses technical cookies only, and links to LinkedIn, X, Instagram and YouTube. It did not describe the company, so no company claims beyond the page's own words are made here.

The measured home view (1280px wide, 800px scroll height, 749 visible elements) is a full-screen black scene with a field of white light streaks falling diagonally, and a large rounded "8" emblem outlined in light at the centre. In the capture, several headline lines are stacked and cross-fading at the same moment, so the text overlaps: "AI-as-a-Service", "Bespoke Solutions", "Supercomputing", "Multi-agentic AI Operations Platform for the Superintelligent Enterprise" and "On-demand Accelerated Compute & End-to-End AI Solutions", each in large Helvetica in steel blue or white, with small condensed paragraphs behind them. The overlap is a transition caught mid-animation, not a layout. A small cut-off pill at the top left carries the sound prompt, and a two-line menu icon sits at the top right.

The mood is cinematic and technical: black, light lines, large light type. A cookie-consent container was hidden by the extractor (recorded in the extraction as `consentOverlaysHidden`) and is not documented.

## Colors

The measured palette is three values and a transparent white.

- **Canvas `#000000`**: the body and the scene background.
- **Ink `#ffffff`**: 6,412 of 6,752 measured text characters; also the fill of the buttons (area weight 32) and a translucent `#ffffff1a` surface (1).
- **Primary `#ffffff`**: the buttons are white, so the action colour equals the ink.
- **On-primary `#1a1a1a`**: the button label colour (42 characters).
- **Accent steel `#8faab2`**: a cool blue-grey used for the h1, h2 and h3 headlines (298 characters), measured as the colour of the large display lines.

The stylesheet root includes a Leva control panel (`--leva-colors-accent1 #0066dc`, `--leva-colors-elevation1 #292d39`, `--leva-colors-folderWidgetColor #8c92a4`, and more): Leva is a developer GUI for 3D scenes, and its variables are not brand colours.

## Typography

Two self-hosted families, hashed by the framework: **Helvetica** (`__helvetica_827732`, 378 characters; used for the large display lines) and **Roboto Condensed** (`__Roboto_Condensed_338de4`, 6,331 characters, loaded at 400 and 500; used for body, buttons and small text). Both have metric fallbacks and a system sans-serif stack.

- **Display, Helvetica 61.04px / 400 / 73.248px, -3.052px**: h1 "Accelerating" (309px wide, 73px tall; mobile 39.06px / 46.872px / -1.172px).
- **Heading, Helvetica 48.83px / 400 / 58.596px, -1.465px**: the h2, 340px wide and 293px tall on desktop (five lines).
- **Subheading, Helvetica 25px / 400 / 30px, -0.75px**: the h3 "Accelerating" at 132px wide.
- **Large size 76.29px, tracking -3.052px** (80 characters): a bigger display line in the scene, not tokenised.
- **Body, Roboto Condensed 20px / 500 / 28px, 0.2px**: paragraphs (2,286 characters; 606px wide column).
- **Button, Roboto Condensed 16px / 400 / 24px, 0.32px**: 4,088 characters at 16px.

Display tracking is negative (about -5% at 61.04px, -3% at 48.83px) while small text has positive tracking (+1.6% at 20px and 16px). The root variable `--font-size: clamp(10px, 0.6944444444444444vw, 11.5px)` sets a fluid base size. Foundry pages were not opened.

## Layout

The page is a full-viewport stage with fixed layers: a header (`--header-height: 6.1rem`) carrying the logo and menu toggle, a canvas of light streaks, and stacked text slides. The root declares `--margin: 2rem` and `--gutter: 1rem`. The body paragraph column measures 607px wide, and the headline blocks are narrow (309px, 340px), which leaves the right half of the screen to the emblem and light streaks. Measured gaps are 24px (36 uses), 30px (24), 40px (12), 16px (4) and 195px (4); paddings 4px (36), 100px (16), 12px (16), 7.629px (12), 8px, 16px, 3.125px, 24px and 32px. The scroll height is the 800px viewport; deeper pages respond to the "Scroll Down To Continue" prompt and were not measured.

The page therefore has three planes: the black ground, the light-streak layer and emblem, and the text layer on top. The text layer holds two voices: large Helvetica statements in steel blue or white, and small condensed paragraphs in white that sit behind or beside them. The two buttons are the only filled elements in the measured view.

## Elevation & Depth

No box shadows were measured. Depth is produced by motion and light: white streaks of varying length and opacity, a glowing outline on the emblem, and cross-fading text layers with different opacities in the capture. Buttons are flat white fills.

## Shapes

One radius: `8px` (3 uses), on the white buttons. The emblem "8" is a rounded, outlined glyph with large curvature drawn in the artwork. The menu icon is two horizontal lines. Everything else is the free-form streak art.

## Components

- **Primary button "Explore Neutrino"**: white `#ffffff` fill, `#1a1a1a` Roboto Condensed 16px label, 8px radius, `24px 32px` padding, 230px by 49px.
- **Secondary button "View Services"**: the same white fill, label and radius, 212px wide; the extractor found no visual difference from the primary one.
- **Logo**: "8bit.ai" wordmark at top left.
- **Menu toggle**: two-line icon at top right.
- **Headline slides**: Helvetica lines in steel blue `#8faab2` or white, cross-fading.
- **Footer notes**: "This site uses technical cookies only", a Privacy Policy link and social links, as the fetched text lists.

Hover states: none recorded.

## Design System Architecture

No public design system or brand guidelines were found: the fetched page (https://www.8bit.ai/) has a privacy link and social links but nothing about guidelines. The de-facto system is small: root variables `--font-family-roboto`, `--font-family-helvetica`, `--header-height`, `--margin`, `--gutter`, `--font-size` and `--vh`, together with Tailwind utility variables (`--tw-ring-*`) and the Leva GUI variables. Font names are the hashed names generated by a framework font loader.

## Do's and Don'ts

- Do keep the page black and let white light streaks supply the visual energy.
- Do set display lines in Helvetica 400 with strong negative tracking and body in Roboto Condensed 500 at 20px.
- Do use the steel `#8faab2` for headline lines and white for buttons and body.
- Do give buttons an 8px radius and a `#1a1a1a` label.
- Don't document the cookie container, sound prompt or Leva GUI as brand UI.
- Don't treat overlapping headline text as a layout; it is a transition frame.
- Don't add shadows or additional accent colours; none were measured.

## Responsive Behavior

Mobile pass (390px wide): the h1 and h2 are both 39.06px / 400 / 46.872px with -1.172px tracking (the h1 215px wide and 47px tall; the h2 310px wide and 234px tall); the body paragraph is 20px / 500 / 28px in a 306px-wide column (476px tall); the primary button keeps its 16px label, `24px 32px` padding, 8px radius, 230px by 49px. Character-weighted mobile sizes: 16px (4,056), 20px (2,261), 39.06px (378) and 10.24px (15). Header and streak layout at 390px were not measured.

## Iteration Guide

1. Black canvas, white ink, one steel accent `#8faab2` for headline lines.
2. Helvetica 61.04px / -3.052px for display, Roboto Condensed 20px / 500 for body.
3. White 8px-radius buttons with `#1a1a1a` labels.
4. Let imagery (light streaks, the 8 emblem) carry decoration; keep UI flat.
5. Re-measure after the scroll prompt is passed before documenting inner sections.
6. Run `node web/scripts/verify-designs.mjs --slug=8bit-ai` after edits.
