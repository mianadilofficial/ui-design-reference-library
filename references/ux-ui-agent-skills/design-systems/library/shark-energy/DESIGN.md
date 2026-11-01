---
version: alpha
name: SHARK Energy
category: "Thai Brands"
description: "Brand site for SHARK Energy Drink (a drink from Osotspa) on a dark #252424 canvas with #929292 body text, #408bd1 blue buttons, #0f4693 deep-blue hero, a 189px uppercase 28Days watermark word, Source Sans Pro 300/900 and sparse 4px, 14px and 40px radii."
colors:
  canvas: "#252424"
  page-body: "#ffffff"
  page-largest: "#262525"
  ink: "#929292"
  primary: "#408bd1"
  on-primary: "#ffffff"
  surface-blue: "#0f4693"
  ink-light: "#b2b2b2"
  ink-blue: "#3a80e2"
  ink-grey: "#a2a2a2"
  hairline: "#4e4e4e"
  nav-bg: "#414141"
  hover-blue: "#0379be"
typography:
  display:
    fontFamily: "\"28Days\""
    fontSize: 189px
    fontWeight: 400
    lineHeight: 207.9px
    letterSpacing: 5px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Source Sans Pro\""
    fontSize: 16px
    fontWeight: 900
    lineHeight: 20.8px
  body:
    fontFamily: "\"Source Sans Pro\""
    fontSize: 18px
    fontWeight: 300
    lineHeight: 32.4px
  button:
    fontFamily: "\"Source Sans Pro\""
    fontSize: 13px
    fontWeight: 300
    lineHeight: 19.5px
  link:
    fontFamily: "\"Source Sans Pro\""
    fontSize: 14px
    fontWeight: 900
    lineHeight: 46px
    textTransform: uppercase
rounded:
  xs: 1px
  sm: 4px
  md: 14px
  lg: 40px
spacing:
  s1: 5px
  s2: 7px
  s3: 9px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 15px
  s8: 20px
  s9: 36px
  s10: 38px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 7px 14px
    height: 34px
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    padding: 5px 12px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.page-body}"
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    padding: 5px 12px
    height: 43px
---

## Overview

The measured page is the home page of sharkenergy.com, titled "SHARK Energy - Bring out the beast". The tagline "Bring out the beast" (also the hashtag #BOTB in the logo lockup) frames an energy drink brand that, according to the page's own copy, comes from Osotspa, a company with "more than 120 years of heritage" whose drinks reach "over 80 countries". The menu offers Brands, Distribution, About and Contact; the footer adds Events, Privacy Policy and Terms & Conditions.

The mood is nightlife and sport: a near-black, scratched, textured background; a deep-blue splashed hero with a chilled silver can covered in water droplets and the stencil headline "BRING OUT THE BEAST"; a row of flavour tiles (Energy Drink, Zero Calories, Strawberry x Lime, Red Berries) as lifestyle photographs with italic caption ribbons; then a "Discover / Shark Energy" story block with a large ghosted word behind it, a three-figure "Our Numbers" block (countries of distribution, years of heritage, million cans sold, each with a colored underline in blue, red and yellow), a news item, an Instagram feed grid and a footer.

The voice is short, loud and hashtag-driven (#BOTB, #SHARKStimulation, #BeastMode), with long product copy kept to one paragraph. The numbers on the page are animated counters, so the values in the capture differ from those in the delivered HTML; no statistic is repeated here as a fact for that reason.

## Colors

The design is dark-first. The canvas is #252424, with a near-identical #262525 as the largest measured area and a #414141 grey for the menu panel. Body text is a mid-grey, #929292 (the most-read color), lifted to #b2b2b2 for lead lines and #a2a2a2 for the ghost watermark word; white (#ffffff) carries headlines, the menu labels, social icons and button text. The browser body element itself reports a white background with a repeating dark texture image over it (body-bg.jpg), which is why page-body is recorded as #ffffff.

Blue is the brand's action and accent color. The "Follow on Instagram" button is #408bd1, small blue text accents are #3a80e2, and the hero's deep blue is #0f4693 (with #073371 as a darker pocket). The menu button's hover state fills with rgb(3, 121, 190), recorded as #0379be. Hairlines are #4e4e4e. Red and yellow appear in the can artwork and as underline accents beneath the statistics, but they were not measured as color tokens and are described only qualitatively.

WordPress admin variables in the root (--wp-admin-theme-color #007cba) are platform defaults and are not brand colors.

## Typography

Two fonts are measured. "28Days", a distressed display face, sets the huge ghost words: the measured h2 "DISCOVER" is 189px with a 207.9px line height, 5px letter spacing and uppercase transformation, drawn in #a2a2a2 at low visibility behind the section. Source Sans Pro, in weights 300, 400, 600, 700 and 900, does the rest: body at 18px weight 300 with a 32.4px line height, button text at 13px weight 300, the READ MORE link at 14px weight 900 uppercase, and small titles at 16px weight 900.

Section headlines in the capture ("SHARK ENERGY", "OUR NUMBERS") are about 72px (that size accounts for 23 measured characters) and appear in a heavy, scratched uppercase style; the page's character-count ranking is 18px, 14px, 24px, 72px, 13px, 189px, 16px and 40px. The exact family and weight for the 72px headline were not captured as a role, so they are not declared as a token. The large light body text at 32px leading is wide and airy on the dark ground.

## Layout

The page is 1280px wide and 3568px tall. The header is a three-part bar: a square MENU control with a hamburger icon at the left, the stacked logo at center, and a grey panel at right holding a search field and four social icons (Facebook, Twitter, Instagram, YouTube). The nav element measured 110px tall with a #414141 fill.

Below, sections are full-width with content in a column of about 800px: the hero has a headline at left and the can at right, the flavour tiles sit in a horizontal carousel with a chevron at the right edge, and the Discover block puts the can bleeding off the left with text centered-right. The numbers block centers three equal columns with colored underlines. The Instagram feed is a four-column grid of square photographs. Spacing values are 5, 7, 9, 10, 12, 14, 15 and 20px, with 36 and 38px for larger gaps.

## Elevation & Depth

Depth is theatrical and comes from imagery: water droplets on the can, splash photography, ghost words layered behind headings, and a scratched dark texture. The one measured shadow is rgba(0, 0, 0, 0.5) 0px 0px 18px 0px, a diffuse dark halo used once. UI controls are flat. Overlapping is a deliberate device: the can crosses section boundaries and the hero's blue field slides under the flavour tiles.

## Shapes

Radii are small and few: 1px on three elements, 4px on two (the primary button and menu button), 14px on the outlined READ MORE link and 40px on two elements. The READ MORE link has a rough hand-drawn white outline (a bordered PNG, button-border.png) in place of a CSS border, so its measured radius of 14px describes the box and not the drawn edge. Flavour tiles are square photographs with an italic caption ribbon in blue. The logo is an angular, claw-marked wordmark. The stencil and scratch motifs recur on headings, which is why round shapes are almost absent.

## Components

Primary button: a 34px-high rectangle with 4px radius and 7px by 14px padding, #408bd1 fill and white 13px weight-300 text, used for "Follow on Instagram". Outlined link button: "READ MORE", white 14px weight-900 uppercase, 46px line height and a rough white drawn outline that fills black on hover. Menu button: a 108px-high square control with white label and a hamburger, which changes to #0379be on hover.

Search field: white text at 18px weight 300, 43px high, 5px by 12px padding, with a thin underline. Flavour tile: photograph with a blue italic caption chip at the bottom. Statistic: a white number with a lighter unit word, a colored hairline beneath (blue, red or yellow), and a grey caption. Feed tile: a square Instagram image with a #BOTB tag. The cookie notice (Accept and Refuse) in the delivered markup is a consent control and is not a brand component; the extractor hid it.

## Design System Architecture

No public design system or brand guideline was found on the pages opened; the visible navigation links to Brands, Distribution, About, Events and Contact only. The site is a WordPress build (wp-content uploads from 2018 supply the textures and the button border image, and the root contains only WordPress admin variables), with an Instagram feed plugin and Font Awesome 5 Brands icons. There are no brand custom properties, so the system is whatever the computed styles show: a dark texture, a blue accent, one display face for watermarks and one humanist sans for everything else. This file's tokens record those measured values.

## Do's and Don'ts

Do keep the ground dark (#252424) and the text grey (#929292) with white for emphasis, and reserve blue (#408bd1) for actions and small accents. Do use big ghosted words behind section headings and let the can photography overlap sections. Do keep body copy light-weight at 18px with a generous 32.4px line height, and headlines heavy.

Don't use a white background for content sections. Don't round buttons beyond 4px. Don't add soft UI cards; the page uses imagery and ghost type, not boxes. Don't quote the animated statistics as fixed numbers. Don't treat the cookie banner or the Instagram plugin error text as brand content.

## Responsive Behavior

A mobile pass of the extractor exists but did not record a separate role set, so no mobile type or layout values are reported. The theme's menu is already a collapsed MENU button at desktop width, and the carousel and feed grid are built to be swiped or reflowed, but the specific breakpoints and column counts at narrow widths were not captured and are not asserted.

## Iteration Guide

Start from the dark canvas #252424, #929292 body text and Source Sans Pro at 18px weight 300 with a 32.4px line height. Use white and weight 900 for labels and links, and #408bd1 for the single filled button style at 34px height with 4px corners. Add a 28Days uppercase ghost word at 189px with 5px tracking behind major section headings in #a2a2a2 at low opacity, and let the product can break out of its container. Use deep blue #0f4693 only for hero fields. Keep flavour tiles as lifestyle photographs with a blue caption chip. Measure any new heading role before declaring it, because the 72px headline has no recorded family or weight.
