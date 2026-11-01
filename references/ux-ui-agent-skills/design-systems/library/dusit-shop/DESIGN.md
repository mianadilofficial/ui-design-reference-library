---
version: alpha
name: Dusit Hotels & Resorts
category: "Thai Brands"
description: "Dusit Hotels & Resorts (dusit.com), measured because dusitshop.com redirects to it: a white luxury-hospitality site with a light serif display face at 48px, a bronze #bc8547 Check rates button with square corners, #31313f navy panels, and photography-led hero and offer cards."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#bc8547"
  on-primary: "#ffffff"
  primary-hover: "#ffe4c1"
  surface-grey: "#f1f1f1"
  surface-navy: "#31313f"
  surface-sand: "#ece8dd"
  ink-muted: "#7a7a7a"
  ink-dark: "#313131"
  ink-charcoal: "#444444"
  ink-faint: "#a7a5a5"
typography:
  display:
    fontFamily: serif--light
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-0.96px"
  display-mobile:
    fontFamily: serif--light
    fontSize: 35.2px
    fontWeight: 400
    lineHeight: 35.2px
    letterSpacing: "-0.704px"
  heading:
    fontFamily: serif--light
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-0.2px"
  subheading:
    fontFamily: sans-serif-a--light
    fontSize: 15px
    fontWeight: 700
    lineHeight: 15px
  body:
    fontFamily: sans-serif-a--light
    fontSize: 19.2px
    fontWeight: 400
    lineHeight: 28.8px
  button:
    fontFamily: sans-serif-a--light
    fontSize: 14px
    fontWeight: 600
    lineHeight: 24px
  link:
    fontFamily: sans-serif-a--light
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 3px
  sm: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13.33px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 5px 30px
    height: 34px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.primary}"
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 5px 40px
    height: 41px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink-dark}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

The queued URL, https://www.dusitshop.com, resolves to the parent operator site https://www.dusit.com/ (title "Dusit Hotels & Resorts - The Dusit Thani Bangkok, often referred to simply as the Dusit Thani Hotel", language attribute `en-US`), which is what was measured. This DESIGN.md is therefore named after the measured site, Dusit Hotels & Resorts, not after a shop. The page is 1280px wide and 6194px tall. Its meta description reads "Dusit hotel offers guests a uniquely special stay. We are proud to run hotels and resorts around the world".

The capture shows a thin grey utility bar (Sign In, Join Dusit Gold, My Booking), then a white header with the "Dusit Hotels & Resorts" logo, the menu "Find a hotel", Offers, Experiences, Dusit Gold, "More", a language selector "EN" and a bronze "Check rates" button. A full-width photographic hero (a suite with a window over the Bangkok skyline) carries the serif headline "Elevate every moment with Dusit Gold." with an italic "Dusit Gold", a sub-line "Join for free today to unlock rewards and exclusive privileges." and an outlined white "Explore" button, with six thin slide indicators. A strip of three reassurance items follows (Best Rate Guarantee, Flexible Cancellation, Late check-out), then the centered statement "Always gracious" and a paragraph about "introducing Thai hospitality to the world", a row of nine brand logos (Devarana, Dusit Thani, Dusit Hotels, DusitSuites, Dusit Collection, dusitD2, Dusit Princess, ASAI, Elite Havens), "Featured Destinations" with a region list (Asia & Pacific, Middle East, Europe & Africa) beside large photographs (Singapore, Philippines), and a grey "Featured Offers" band with four photo cards. The tone is calm, formal and welcoming; words such as "gracious" and "heartfelt" recur.

## Colors

Background areas by weight: #ffffff (6477), #ffffffe0 (1438, a translucent white header), #f1f1f1 (982), #31313f (857), #00000033 (710, a photo overlay), #ece8dd (639), #cccccc (195), #f5f5f5, #eeeeee, #bc8547 (5), #9a9898.

- **canvas #ffffff** is the page background; **surface-grey #f1f1f1** is the "Featured Offers" band; **surface-sand #ece8dd** is a warm sand surface; **surface-navy #31313f** matches the site's `--primary-color` custom property.
- **ink #000000** is the dominant text color (4976 characters); white text (3563) sits on photography and dark panels.
- **primary #bc8547** is the measured fill of the "Check rates" button (white text #ffffff). **primary-hover #ffe4c1** is the fill after hover, with the text and border turning #bc8547.
- **ink-muted #7a7a7a**, **ink-dark #313131**, **ink-charcoal #444444** and **ink-faint #a7a5a5** are the secondary text steps, in that order of frequency.

The translucent black #00000033 is a photo overlay, not a token. The WooCommerce purple (--woocommerce #720eec), WordPress preset colors (--wp--preset--color--*) and Swiper's #007aff in :root are platform defaults and are not brand colors.

## Typography

The page declares two roles in :root: `--head-font-family: serif--light` and `--body-font-family: sans-serif-a--light`. The loaded fonts include "serif--light", "sans-serif-a--medium", "sans-serif-a--light", "sans-serif-a--light-italic", "dusittext-regular", "Dusit Display" (normal and bold) and "Dusit Text". The names are the shipped family aliases; the underlying typeface names are not published on the page, so they are not asserted here. Headlines render as a light, high-contrast serif; body and UI render as a light humanist sans.

- **display**: serif--light 48px / 400 / 48px, letter-spacing -0.96px ("Always gracious" is the h1).
- **heading**: serif--light 40px / 400 / 40px, letter-spacing -0.2px (h2 "Discover our newest address.").
- **body**: sans-serif-a--light 19.2px / 400 / 28.8px.
- **button**: sans-serif-a--light 14px / 600 / 24px.
- **subheading**: 15px / 700 / 15px. **link**: 12px / 400 / 18px.
- **display-mobile**: 35.2px / 400 / 35.2px, letter-spacing -0.704px.

Other measured sizes by character weight: 16px (3478), 12px (1785), 19.2px (1582), 40px (616), 20.8px, 30.4px, 15px, 20px, 13px, 11.2px, 14.72px and 14px. A substitute for the proprietary families is not specified by the site.

## Layout

The page is a centered editorial column on white. The hero is full-bleed with left-aligned text anchored near the bottom; below it content is centered with generous vertical whitespace. "Featured Destinations" is a three-part row: a text list at the left and two portrait-ish photographs at the right, each with a serif place name and a two-line description. "Featured Offers" is a four-up card row on the grey band. Spacing steps recorded are 1, 3, 4, 5, 8, 10, 12, 13.33, 15 and 16px.

The reassurance strip under the hero uses a line-icon style (a shield with a check, a clock and a luggage icon) in thin dark strokes rather than filled glyphs; this matches the quiet, light-weight typography. Region links such as "Asia & Pacific" are plain black serif text, with the active region underlined, so selection is signalled by an underline and not by color.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty). Separation comes from tonal bands (white, #f1f1f1, #31313f), a translucent white header (#ffffffe0) and a #00000033 overlay on photographs. Cards on the grey band are plain white boxes.

## Shapes

The brand is square-edged: the "Check rates" button and the outlined "Explore" button have 0px radii. Measured radii are 50% (6 occurrences, circular icons and slide controls), 3px (4), 4px (2) and two half-circle edge values ("50% 0px 0px 50%", "0px 50% 50% 0px", used once each). Buttons are rectangular, never pill-shaped.

## Components

- **button-primary** ("Check rates"): fill #bc8547, text #ffffff, 14px/600, radius 0px, padding 5px 30px, height 34px. Hover: fill #ffe4c1, text #bc8547, border #bc8547.
- **button-secondary** ("Explore"): transparent with a white border, white 19.2px text, radius 0px, padding 5px 40px, height 41px.
- **Nav links**: black text on the white header; "Find a hotel" and "More" carry down-arrow glyphs.
- **link**: 12px/400 in #313131 (the utility bar's Sign In, Join Dusit Gold and My Booking).
- **Reassurance strip**: icon plus bold label and italic sub-label.
- **Brand logo row**: nine logos in monochrome.
- **Offer cards**: image on top, serif title below ("Plan Ahead —", "Stay Longer — and", "Your loyalty,", "Stay your way —").

## Design System Architecture

No public Dusit design system or brand guideline link was found on the home page (searched the home markup for brand, design, press and guideline links). The site is a WordPress/WooCommerce theme: :root carries 94 custom properties, mostly `--wp--preset--*` (WordPress block presets, for example `--wp--preset--font-size--large: 36px`), `--wc-*` (WooCommerce: `--wc-orange #ffba00`, `--wc-subtext #767676`), `--iti-*` (an international telephone input) and Swiper. Brand-level variables are few: `--primary-color: #31313f`, `--head-font-family: serif--light`, `--body-font-family: sans-serif-a--light`. Colors in this document are therefore taken from computed styles and from these three variables.

## Do's and Don'ts

- Do keep surfaces white or #f1f1f1 and use #31313f for deep panels.
- Do reserve the bronze #bc8547 for the single booking action ("Check rates").
- Do set headlines in the light serif and keep letter-spacing slightly negative.
- Do keep buttons square (0px radius) and photography full-bleed.
- Don't use WooCommerce purple (#720eec), WordPress preset colors or Swiper blue as brand colors.
- Don't add drop shadows; none were measured.
- Don't use pill buttons.

## Responsive Behavior

The extraction's mobile pass recorded: the h1 "Always gracious" at 35.2px / 400 / 35.2px (48px on desktop); the "Check rates" button unchanged (14px/600, fill #bc8547, radius 0px, padding 5px 30px, height 34px); font sizes by character weight of 16px (3337), 12px (1785), 19.2px (1582), 30.4px (406), 20.8px (318), 24px (247), 25px (242), 15px (202), 18px (113) and 13px. The mobile viewport width, menu behavior and column counts were not recorded: not measured.

## Iteration Guide

1. Start from white, black text and the single bronze #bc8547 action.
2. Pair a light serif for display with a light sans for UI; keep headline tracking slightly negative.
3. Keep every button rectangular with 5px 30px padding at the header size.
4. Use #f1f1f1 and #31313f bands to separate sections instead of shadows.
5. Dark mode is not measured.
6. Run `node web/scripts/verify-designs.mjs --slug=dusit-shop` after edits.
