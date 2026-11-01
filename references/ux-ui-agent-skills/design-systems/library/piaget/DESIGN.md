---
version: alpha
name: "Piaget"
category: "Luxury"
description: "Piaget (piaget.com/us-en) is a Swiss luxury watch and jewelry site: white canvas, Piaget blue #022969 ink, PhxsgRhymesDisplay serif at weight 280 over PhxsgNeutrafaceText, square 0px corners and full-bleed campaign panels."
colors:
  canvas: "#ffffff"
  ink: "#022969"
  primary: "#ffffff"
  on-primary: "#0d0c32"
  surface-2: "#000000"
  ink-2: "#0341a6a1"
  text-input-bg: "#ffffff1a"
typography:
  display:
    fontFamily: PhxsgRhymesDisplay
    fontSize: 42px
    fontWeight: 280
    lineHeight: 50.4px
    letterSpacing: 0.84px
  display-mobile:
    fontFamily: PhxsgRhymesDisplay
    fontSize: 24px
    fontWeight: 280
    lineHeight: 28.8px
    letterSpacing: 0.48px
  subheading:
    fontFamily: PhxsgNeutrafaceText
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  button:
    fontFamily: PhxsgNeutrafaceText
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    textTransform: uppercase
  nav:
    fontFamily: PhxsgNeutrafaceText
    fontSize: 16px
    fontWeight: 600
    lineHeight: 19.2px
    letterSpacing: 1.28px
    textTransform: uppercase
  input:
    fontFamily: PhxsgNeutrafaceText
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
rounded:
  xs: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 32px
    height: 46px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 12px 32px
    height: 46px
  footer:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 0px 0px 72px
---

## Overview

Piaget (www.piaget.com, measured at its US store version /us-en, title "Official Piaget Website - Luxury Watches & Jewelry") is a Swiss luxury watch and jewelry house. The measured home page is a sequence of full-bleed campaign panels rather than a catalog grid: a video-style hero for "Piaget Polo Signature" (tagline "A legacy of gadroons", link "Discover our collection") over a deep blue striped dial, a split panel pairing a wrist photograph with a product carousel ("Piaget Polo Signature Date watch", "Automatic Steel Watch", "$16,200", link "More creations"), a saturated cobalt panel for "Possession" ("Own the moment", link "Explore ornamental stone creations"), and a dark footer carrying a newsletter signup ("Subscribe to the Piaget newsletter"). The tone is quiet and editorial: large serif display words, small sentence-case supporting lines, and underlined text links instead of filled buttons.

The capture also shows a white country-version notice at the very top ("You are currently browsing the version: United States of America ... THAILAND / ENGLISH") and a round "CONTACT" bubble at the right edge. These are locale and service controls, not brand components, and no token here is derived from them.

## Colors

Measured on the page (`web/data/extracted/piaget.json`):

- **canvas `#ffffff`**: the body background and the largest area (weight 8,555).
- **ink `#022969`**: Piaget blue, the most-read text color (2,530 characters). The site declares it as `--color-piaget-blue` and `--ref-color-blue: rgb(2 41 105)`.
- **ink-secondary `#0341a6a1`**: a translucent blue used for secondary copy (1,181 characters), such as the carousel's product subtitle and price.
- **primary `#ffffff`** and **on-primary `#0d0c32`**: the measured primary button is white with a deep navy label. Because the extractor found its call to action in the footer newsletter form, the white fill is the generated primary; the blue #022969 is the dominant brand color in text and links.
- **surface-black `#000000`**: the header and hero backgrounds (area weight 3,277).
- **on-primary / footer `#0d0c32`**: the footer background (area weight 2,243) and the button label color.
- **text-input-bg `#ffffff1a`**: the translucent input fill in the footer form.

Colors also declared in the shipped CSS root variables: `--color-radiant-blue #1c51d7`, `--color-grey-100 #f0f0f0`, `--color-grey-200 #dfe2e6`, `--color-grey-600 #686868`, `--color-divider #dfe2e6`, `--button-link-color #333333`, `--input-color #333333`. Imagery supplies the rest of the color: cobalt and rose-gold in the Possession panel, steel and blue on the Polo dial.

## Typography

Piaget uses two custom families with a "Phxsg" prefix.

- **display**: PhxsgRhymesDisplay, weight 280, 42px / 50.4px, letter-spacing 0.84px, sentence case. This is a light serif used for hero and panel titles ("Piaget Polo Signature", "Possession"). On the 390px mobile pass it measures 24px / 28.8px with 0.48px spacing (`display-mobile`).
- **subheading / body**: PhxsgNeutrafaceText weight 400, 18px / 25.2px, normal spacing, used for product names and paragraphs (2,997 characters at 18px).
- **nav and link**: PhxsgNeutrafaceText weight 600, 16px / 19.2px, letter-spacing 1.28px, uppercase ("BOUTIQUES", "THAILAND / ENGLISH").
- **button**: PhxsgNeutrafaceText weight 400, 14px / 19.6px, uppercase.
- **input**: PhxsgNeutrafaceText weight 400, 16px / 22.4px.

A 76px size with 4.56px letter-spacing appears on 46 characters, and 20px with 0.4px on 54 characters; both are measured but are not given tokens here. Also loaded are RhymesDisplay, RhymesTextLight and Neutraface2TextTT (Book and bold), and the root variable `--font-family-body` names RhymesTextLight with a Times New Roman fallback. Metropolis is the computed family on `body` (82 characters at weight 500, 14px). No substitute fonts are published by the site in the files read.

## Layout

The page is 1280px wide at desktop with a scroll height of 10,511px. The header is 84px high and full width: a menu toggle and search at the left, the PIAGET wordmark centered, and BOUTIQUES, a currency/country switch, account, wishlist and bag icons at the right. Content panels are full-bleed, alternating a dark photographic field with a half-and-half split (photo left, white product carousel right). Text sits bottom-left aligned over the imagery. The root variables declare `--ref-breakpoint-xl: 1280px`, layout measures from `--sys-layout-measure-xs 23.625rem` to `--sys-layout-measure-2xl 150rem`, and `--promo-banner-height 48px` (64px on mobile).

Measured spacing: gaps of 4px, 8px, 24px, 12px, 16px, 20px, 32px and 72px; paddings of 72px (17 occurrences), 4px, 12px, 128px, 32px, 8px, 10px and 48px. The footer has 72px bottom padding. The tokens file records the ten-step scale 4, 5, 8, 10, 12, 15, 16, 20, 24 and 32px.

## Elevation & Depth

Almost flat. A single shadow was measured: `rgba(0, 0, 0, 0.15) 2px 2px 4px 0px`, on the round service button, not on content. Depth comes from photography (lit product on dark backdrop), full-bleed color fields and a hero with a vignette. Borders measured: #022969 (2), #00c8ff33 (1), #ffffff (1), #ffffff80 (1). Dividers elsewhere use the declared `#dfe2e6`.

## Shapes

Mostly square: rounded `none: 0px` applies to the primary button, links, nav and footer. The measured radii are `50%` (26 elements, circular controls and nav hit-areas), and a joined input/button pair with `4px 0px 0px 4px` on the input and `0px 4px 4px 0px` on the button, so the newsletter field reads as one bar with 4px outer corners. The tokens record `xs: 4px`, `none: 0px` and `pill: 9999px`.

## Components

- **button-primary**: white `#ffffff` fill, 1px solid #ffffff border, label `#0d0c32` in PhxsgNeutrafaceText 14px uppercase, padding 12px 32px, height 46px, width 114px, radius 0px 4px 4px 0px ("SUBMIT").
- **text-input**: `#ffffff1a` fill, white text, 16px / 22.4px, padding 12px 32px, height 46px, radius 4px 0px 0px 4px.
- **nav / nav-link**: white 16px weight-600 uppercase labels with 1.28px tracking on the dark header.
- **link**: #022969, same nav type style; content links such as "More creations" show an underline in the capture.
- **footer**: `#0d0c32` background, white text, 72px bottom padding.
- **Product card**: product photo on white, name at 18px in #022969, subtitle and price in the translucent blue, small dash pagination. Dimensions are not measured as a component.

## Design System Architecture

No public design system or brand guideline was found on the opened page. The site exposes a layered token architecture in its shipped CSS: reference tokens (`--ref-color-blue`, `--ref-tracking-xl`, `--ref-breakpoint-xl`), system tokens (`--sys-color-foreground`, `--sys-spacing-10`, `--sys-layout-measure-*`, `--sys-motion-easing-standard-accelerate`) and brand aliases (`--color-piaget-blue`, `--color-radiant-blue`, `--color-grey-100`). Source: https://www.piaget.com/us-en (measured with `web/scripts/extract-tokens.mjs`). Only the variable names are recorded here; no documentation was opened.

## Do's and Don'ts

- Do use Piaget blue #022969 for text on white and a pure white canvas for product panels.
- Do set display titles in the light serif at weight 280 with 0.84px spacing and sentence case.
- Do keep navigation uppercase at 16px, weight 600, 1.28px tracking.
- Do let photography carry color; keep UI chrome black, white and navy.
- Don't round buttons and links beyond the measured 0px or 4px values.
- Don't add shadows to content; the only measured shadow belongs to the service bubble.
- Don't use bold display type; the measured display weight is 280.
- Don't treat the region notice or the CONTACT bubble as brand components.

## Responsive Behavior

Measured on the 390px pass: the h1 and h2 display role is 24px / 28.8px with 0.48px letter-spacing, versus 42px / 50.4px on desktop; body text stays in PhxsgNeutrafaceText as an 18px paragraph role in the mobile roles. The promo banner height variable is 48px on desktop and `--promo-banner-mobile-height` 64px. Menu behavior, panel stacking and carousel changes on mobile are not measured.

## Iteration Guide

1. Set canvas #ffffff, ink #022969, footer and button label #0d0c32.
2. Display: PhxsgRhymesDisplay 280 at 42px/50.4px; body: PhxsgNeutrafaceText 18px/25.2px.
3. Keep corners at 0px; use 4px only on the joined input and button.
4. Build panels full-bleed, with bottom-left text over photography and an underlined link as the call to action.
5. Run `node web/scripts/verify-designs.mjs --slug=piaget` after edits and never change a measured value.
