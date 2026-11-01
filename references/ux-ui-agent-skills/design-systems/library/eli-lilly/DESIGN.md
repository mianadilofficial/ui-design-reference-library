---
version: alpha
name: Eli Lilly and Company
category: "Pharma"
description: "Lilly.com home page: black-and-white film hero with a 100px Ringside Sans Extra Wide 900 headline, a condensed Garamond Narrow serif for statements, blush #f9eeed sections, ink #191919 text and Lilly red #d31710 pill buttons at 32px radius."
colors:
  canvas: "#ffffff"
  page-largest: "#f9eeed"
  ink: "#191919"
  primary: "#d31710"
  on-primary: "#ffffff"
  surface-tint: "#fbf5f4"
  ink-muted: "#6a6a6a"
  card-bg: "#d3d3d3"
typography:
  display:
    fontFamily: "\"Ringside Sans Extra Wide\", \"Ringside Extra Wide\", sans-serif"
    fontSize: 100px
    fontWeight: 900
    lineHeight: 100px
    letterSpacing: "-2.5px"
  display-mobile:
    fontFamily: "\"Ringside Sans Extra Wide\", \"Ringside Extra Wide\", sans-serif"
    fontSize: 40px
    fontWeight: 900
    lineHeight: 44px
    letterSpacing: "-1px"
  heading:
    fontFamily: "\"Garamond Narrow Condensed\", \"ITC Garamond Std\", Garamond, garamond, serif"
    fontSize: 100px
    fontWeight: 400
    lineHeight: 100px
    letterSpacing: "-1.5px"
  subheading:
    fontFamily: "\"Ringside Sans\", Ringside, sans-serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 66px
    letterSpacing: "-1.5px"
  body:
    fontFamily: "\"Ringside Sans\", Ringside, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 5px
  sm: 12px
  md: 24px
  lg: 32px
  xl: 48px
  pill: 9999px
spacing:
  s1: 3.32px
  s2: 3.36px
  s3: 3.65px
  s4: 4px
  s5: 5.04px
  s6: 8px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 12px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 12px 24px
    height: 48px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The lilly.com home page presents Eli Lilly and Company as "A medicine company" (page title: "A Medicine Company | Eli Lilly and Company"). The measured first screen is a full-bleed, black-and-white archival film still behind a very large white headline, "A medicine company that puts health above all", set in the extra-wide heavy sans Ringside Sans Extra Wide at 100px/100px, weight 900, letter-spacing -2.5px. Below it the page drops to a warm blush canvas (#f9eeed, the largest-area background) with a second headline in a condensed serif, "A medicine company should do more than just make medicine.", where the closing phrase is set in italic. The combination is the identity: a loud geometric sans for assertions, a narrow editorial serif for reflection, and a single saturated red (#d31710) reserved for actions.

The page is a patient-facing front door more than a corporate brochure. The three service tiles under the serif headline read "Find care", "Access pharmacy" and "Join a clinical trial", each with a small outline icon, a two-line description and a red pill button ("Get started", "Get medicine", "View trials"). A "Condition support" block follows with the heading "Get a better understanding of a condition." The voice is plain, second-person and benefit-led.

## Colors

The measured palette is small and warm. The body canvas is white (#ffffff), but the dominant surfaces by area are the blush #f9eeed and the lighter tint #fbf5f4. Text is near-black ink (#191919, the most-read text color) with a muted grey (#6a6a6a) for secondary copy. Over the hero video, text is white (#ffffff). The single brand accent is Lilly red, #d31710, which fills every measured call-to-action button with white label text (on-primary #ffffff). A neutral grey (#d3d3d3) appears as the card background on the measured tiles, with a 20 percent black gradient overlay on top of it.

Red is used only on controls and the small script logotype beside the serif headline; large surfaces stay neutral or blush. The root custom properties also ship a much wider palette (sage, stone, azure, purple, gold, teal and others under the `--lds-color-*` prefix), but those hues were not measured on the home page and are not part of this token set.

## Typography

Three families are loaded: Ringside Sans (weights 100-600 and 700-900), Ringside Sans Extra Wide (same two ranges) and Garamond Narrow Condensed (100-900, normal and italic). The font stacks measured are "Ringside Sans Extra Wide", "Ringside Extra Wide", sans-serif for the display style; "Garamond Narrow Condensed", "ITC Garamond Std", Garamond, garamond, serif for headings; and "Ringside Sans", Ringside, sans-serif for everything else.

Measured roles on desktop: display 100px/100px, 900, -2.5px; heading (serif) 100px/100px, 400, -1.5px; subheading 60px/66px, 400, -1.5px (the white "Alzheimer's Disease" style tile titles); body 20px/30px, 400. Other sizes by character count are 16px (the most used), 14px, 24px, 28px, 36px and 48px, with tracking tightening as size grows (for example 48px at -0.48px, 28px at -0.56px). Only weights 400, 700 and 900 appear in the measured text. Ringside and Garamond Narrow are commercial typefaces; if they cannot be licensed, a geometric extra-wide grotesque and a condensed transitional serif are the roles to substitute.

## Layout

The measured page is 1280px wide and 7,983px tall. Content sits inside generous side margins with centered section headings and three-column service rows. The shipped grid variables define margins of 1rem on mobile and 3rem on tablet and gutters of 1rem (mobile) and 1.5rem (tablet). Breakpoints in the CSS variables are xsmall 0-575.99px, small 576-767.99px, medium 768-991.99px and xlarge 1200-1399.99px. The most frequent flex/grid gaps measured are 24px, 8px, 32px, 12px, 4px, 16px and 48px.

The spacing tokens extracted from the page are the small steps 3.32px-5.04px, then 8, 12, 16, 20 and 24px. Vertical rhythm is open: sections are separated by large blocks of blush or white rather than by rules.

## Elevation & Depth

No box shadows were measured on the home page (the box-shadow frequency list is empty). Depth comes from color planes: the black video hero, the blush section, the white section, and darkened image cards using a linear gradient of rgba(0, 0, 0, 0.2). The root variables do define four bottom shadows (`--lds-g-shadow-bottom-*`), but they were not observed in use here, so treat them as available rather than characteristic.

## Shapes

Radii are large and friendly. Measured border-radius frequency: 32px (most common, used by the buttons), 24px (cards), 48px, 12px, 5px, 50% and 9999px. The root variables expose radius steps up to 2.5rem (`--lds-g-radius-7`), 3rem (`--lds-g-radius-8`) and a full radius. Buttons are 48px tall pills with 12px 24px padding; cards use the 24px radius.

## Components

Primary button: red #d31710 fill, white 20px Ringside Sans label, 32px radius, 12px 24px padding, 48px height. The measured primary instance is "Watch patient story" over the hero; the secondary instance, "Get medicine", is measured with the same fill, so the page does not separate primary and secondary by color. In the capture, the tile buttons also carry a small right arrow.

Cards: a 24px-radius container with #d3d3d3 background and #191919 text for the condition tiles, with imagery filling the card. The top navigation is a pair of black rounded pill capsules floating over the hero: the Lilly script logo with a menu icon on the left, and search, language and "Sign In" on the right. A small pause control sits under the right capsule. The footer is a 1,346px-tall block in the same ink on the page canvas.

## Design System Architecture

Lilly ships a named design system in its CSS: roughly 400 custom properties on the root, prefixed `--lds-` (Lilly design system). Global tokens are under `--lds-g-*` (color, font, grid, radius, shadow, sizing, spacing, typography, motion, blur) and raw palette ramps under `--lds-color-*` (for example `--lds-color-red-090`, `--lds-color-green-050`, `--lds-color-neutral-080`). Semantic color names such as `--lds-g-color-on-surface-1` (#191919), `--lds-g-color-on-surface-2` (#3a3a3a), `--lds-g-color-on-surface-3` (#6a6a6a), `--lds-g-color-border-1` (#111) and `--lds-g-color-surface-inverse-2` (#e2e2e2) show a surface/on-surface pairing model. Font families are exposed as `--lds-g-font-family-sans-serif` and `--lds-g-font-family-serif`. No public documentation page for the system was opened for this entry; everything here comes from the shipped CSS variables on lilly.com.

## Do's and Don'ts

Do pair the extra-wide heavy sans display with the condensed serif for reflective statements. Do keep red #d31710 for actions only and fill buttons as pills. Do use blush #f9eeed and #fbf5f4 as section grounds and ink #191919 for text. Do put white display text on dark, desaturated imagery.

Don't use red as a large background or decorative wash. Don't set body copy in the display faces. Don't use sharp corners on buttons or cards; the smallest measured radius used by controls is well above 5px. Don't add drop shadows to cards; none were measured.

## Responsive Behavior

Measured at a 390px mobile viewport: the h1 falls from 100px to 40px with line-height 44px and letter-spacing -1px (width 327px); the serif h2 falls to 48px/48px with -0.72px tracking; body text is 18px; the primary button label is 16px. Mobile character-weighted sizes are 16px, 18px, 12px, 20px, 48px, 36px, 40px, 24px, 14px and 32px. The CSS variables give 1rem page margins and gutters on mobile. Menu collapse behavior, hover states and dark mode were not measured.

## Iteration Guide

When extending this system, start from the measured roles: display 100/100 at 900, serif heading 100/100 at 400, body 20/30. Reduce the display to 40/44 for narrow screens. Keep buttons at 48px height with a 32px radius and 12px 24px padding. Introduce new colors only from the `--lds-color-*` ramps and only for non-action roles. Test every new surface against ink #191919 and white, and keep red reserved for the one action per tile. Anything involving hover, focus, motion or dark mode needs a fresh measurement first.
