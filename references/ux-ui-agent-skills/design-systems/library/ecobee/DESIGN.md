---
version: alpha
name: ecobee
category: "Consumer Electronics"
description: "ecobee (www.ecobee.com/en-us): a white smart-home store with Tiempos serif headlines (66px/80px weight 500), Bastion sans body, white 39px-rounded pill buttons outlined in warm charcoal #2d2926 that fill #2d2926 on hover, mint #deede8 bands, #1169c8 inline links, and full-bleed teal and navy product photography."
colors:
  canvas: "#ffffff"
  ink: "#5e5958"
  primary: "#2d2926"
  on-primary: "#ffffff"
  surface-mint: "#deede8"
  surface-off-white: "#f9f9f9"
  ink-warm: "#443f3f"
  link-blue: "#1169c8"
  ink-deep: "#191817"
  footer-text: "#000000"
  button-on-photo: "#2d2926a6"
  accent-rust: "#ae3826"
typography:
  display:
    fontFamily: Tiempos, Georgia, Times, "Times New Roman", serif
    fontSize: 66px
    fontWeight: 500
    lineHeight: 80px
  display-mobile:
    fontFamily: Tiempos, Georgia, Times, "Times New Roman", serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 48px
  heading:
    fontFamily: Tiempos, Georgia, Times, "Times New Roman", serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 48px
  subheading:
    fontFamily: Bastion, "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 800
    lineHeight: 22.8576px
  body:
    fontFamily: Bastion, "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14.4px
    fontWeight: 500
    lineHeight: 28px
  button:
    fontFamily: Bastion, "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 18px
  link:
    fontFamily: Bastion, "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
  nav:
    fontFamily: Bastion, "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
rounded:
  xs: 4px
  sm: 9px
  md: 39px
  pill: 9999px
spacing:
  s1: 8px
  s2: 10px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 30px
  s8: 32px
  s9: 40px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 24px
    height: 64px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  button-secondary:
    backgroundColor: "{colors.button-on-photo}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    padding: 0px 24px
    height: 44px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    padding: 0px 24px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 0px 10px
    height: 40px
    borderColor: "{colors.ink}"
---

## Overview

The ecobee US home page (https://www.ecobee.com/en-us/, title "Smart Thermostats & Smart Home Devices | ecobee", description "ecobee designs intelligent thermostats, cameras, and sensors that work better together to improve everyday life.") is a retail storefront for thermostats, sensors, cameras and bundles. It is bright and friendly: a white page, a literary serif for headlines, round white buttons, and large lifestyle photographs with deep green, teal and navy tones.

The capture shows a thin lowercase ecobee wordmark with the navigation Thermostats, Sensors, Cameras, Security & Bundles, Support and Offers (each with a small chevron), Sign in, a US flag selector and a cart icon; a hero in teal with a leaf-and-acorn line illustration around a thermostat, camera and sensors, headline "Get big Fall savings on home security." in near-white serif, a sentence of offer copy and a white "Shop now" pill; a centred h2 "Get yourself a smarter home." with the line "Imagine what home could be."; a two-by-two grid of photo cards (Thermostats, Sensors, Cameras, Bundles), each with a white title, one line and a white "Shop now" pill; and the start of a navy "ecobee Smart Security" panel with a gold shield logo and a phone mockup. Below that (from page source) are sections titled "Trusted by experts for your peace of mind.", press names (New York Times Wirecutter, Tom's Guide, PCWorld, Safewise), "Enter your place of calm." and "Top sellers."

Voice: reassuring and benefit-led ("Control your comfort and savings.", "Get whole home protection.").

## Colors

White `canvas` #ffffff dominates (8436 area units). Charcoal with a warm cast, `primary` #2d2926, is the action and heading colour: it is the border and label colour of the pill buttons (21 borders), the h2 text (1238 characters) and the fill of buttons on hover. The generator had labelled white as `primary` because the detected button fill is white; the role was reassigned to #2d2926 because that is the measured hover fill and border of every button. Body copy is warm grey `ink` #5e5958 (1727 characters), with #443f3f (1035) for card and footer text and #191817 (170) for navigation headings. Text over photography is near-white #f9f9f9 (822 characters; the surface also covers 309 units).

A mint #deede8 band (479 units) separates some sections. Links are blue #1169c8 (301 characters); underlines on inline links are drawn with an inset shadow `rgb(17, 105, 200) 0px -1px 0px 0px` (9 elements). A translucent charcoal #2d2926a6 (24 units) fills the "More details" button over photographs, and a small rust #ae3826 appears on 3 units. Borders: #2d2926 (21), #f5f5f5, #5e5958 (input) and #d3d1d1. The hero and card green and navy tones are photographic and were not measured as flat colours. The page also carries variables from embedded components (a chat widget's `--esw*` and Salesforce `--slds-*` focus colours, `--color-fill-brand-indigo` #4a4af4 and other `--color-*` names); their origin was not established and they are not used as brand tokens. The link colour #0000ee reported for an unstyled anchor is a browser default and is excluded.

## Typography

Two families. Tiempos (263 characters, weight 500, fallbacks Georgia, Times) sets headlines: the h1 at 66px/80px (36px/48px at 390px), the h2 at 36px/48px (24px/32px at 390px). Bastion (5251 characters, a variable font with weights 100 to 900) sets everything else: body at 14.4px weight 500 on a 28px line, buttons at 18px weight 700 (the larger CTA) and 14px weight 700 (compact buttons), navigation at 16px weight 400 on 18.4px, card headings at 16px weight 800 on 22.8576px. A 13px label style with 1.04px letter-spacing appears on 7 characters.

Sizes by characters: 14px (1800), 18px (1797), 14.4px (1186), 16px (242), 36px (225), 22px (144), 28px (75), 66px (38). Weights: 500 (4421), 700 (486), 800 (469), 400 (187). Headline text is set without tracking. Tiempos is a commercial serif and Bastion a licensed sans; if unavailable, keep the weights, sizes and line-heights and use the declared fallbacks (Georgia for headlines, Open Sans, Helvetica Neue, Arial for body).

## Layout

The page is 1280px wide and 9440px tall. The header is 87px high on white. Content follows a single centred column with wide grids: the hero text sits in a 500px column at the left edge, the "smarter home" heading is centred in a 792px column, and the product cards form a two-column grid of equal square-ish photo tiles with a visible gutter. Large gaps dominate: 8px (96 uses), 32px (55), 16px (20), 20px (10), 24px (9), 64px (3), 40px (2). Paddings: 30px (28 uses), 24px (19), 16px (9), 32px (7), 40px (4). The stylesheet declares component spacing variables `--components-spacing-xxl` 40px, `--components-spacing-lg` 24px and `--components-spacing-xxxxs` 2px.

## Elevation & Depth

Depth is photographic. No drop shadow was recorded; the only measured shadows are 1px inset underlines (blue #1169c8, black and #f9f9f9) on links. Pill buttons sit on photographs with a white fill or a translucent charcoal fill instead of a shadow. Focus uses a 3px blue glow `0 0 3px #0176d3` declared by an embedded component library. The page uses photographic overlap (devices over leaf illustrations) for layering.

## Shapes

Buttons are fully rounded pills with a 39px radius (20 elements) and a 2px solid #2d2926 border. Form inputs use 4px (a 40px-high, 335px-wide field with a 1px #5e5958 border and padding 0px 10px). Other radii: 9px (1) and 50% (1, a round icon). Photo cards are rectangular. The stylesheet corpus also declares 2px, 3px, 5px, 8px, 20px and 240px radii that were not matched to captured elements.

## Components

**Primary button** (`button-primary`): "Join now" and "Shop now": white fill, 2px #2d2926 border, 39px radius, #2d2926 text at 18px weight 700, padding 0px 24px, 64px high for the large version (200px wide for "Join now"). Hover: fill #2d2926 and text #ffffff.

**Compact button** (`link`): "Shop now" inside photo cards: white fill, 14px weight 700, 44px high, 120px wide, same border and radius; hover also fills #2d2926.

**Photo-overlay button** (`button-secondary`): "More details", 44px high, 135px wide, translucent charcoal fill #2d2926a6 with white text.

**Navigation** (`nav`): 16px weight-400 links in #5e5958 with small chevrons, a round flag selector and a cart icon in a 87px white header.

**Search / form input** (`text-input`): 40px high, 4px radius, 1px #5e5958 border.

**Photo card**: full-bleed photograph, white 28px title, a 16px line of copy, and a compact pill button.

**Press quote**: a footer-style quote line ("- The Verge") at 20px/23px in #000000.

## Design System Architecture

No public ecobee design system or brand-guidelines page was found on the pages opened (https://www.ecobee.com/en-us/ with its navigation); nothing links to one. The code shows a React storefront (the HTML uses `data-react-helmet`) with an assembled stack: Tailwind utility variables (`--tw-*`), the slick carousel, Affirm financing font and an embedded service chat widget. A component-token naming scheme is visible in the root variables, for example `--color-component-button-primary-bg-default-neutral-inverse-resting` (#ffffff), `...-hover` (#e5e5e9), `--color-component-button-primary-text-default-neutral-inverse-resting` (#0c0c14) and `--size-component-button-minWidth-medium` (48px); which component library defines them was not established, and the measured site buttons use #2d2926 text rather than #0c0c14.

## Do's and Don'ts

Do use the serif for headlines and the sans for everything else. Do build actions as 39px pills with a 2px #2d2926 border and invert them to #2d2926 on hover. Do put white titles and pills over saturated product photography. Do underline inline links with the 1px blue inset line.

Don't use drop shadows on buttons. Don't make buttons square or 4px-rounded; only inputs use 4px. Don't use #0000ee or #4a4af4 as the link colour; the measured link blue is #1169c8. Don't use bold serif headlines: weight 500 only. Don't put the translucent charcoal fill on plain white areas.

## Responsive Behavior

At 390px: the h1 is 36px/48px (66px/80px desktop) in a 350px-wide, 96px-tall block; the h2 is 24px/32px (36px/48px); body copy is 12.8px on a 24px line (14.4px/28px desktop) in a 350px block; the "Join now" button is 16px weight 700 with padding 0px 18px and 44px high (18px, 0px 24px, 64px at desktop). Mobile sizes by characters: 16px (1948), 12.8px (1186), 13px (784), 24px (225), 18px (217), 14px (122), 20px (75), 36px (38). How the card grid and header reflow on mobile was not measured.

## Iteration Guide

Start with canvas #ffffff, ink #5e5958, primary #2d2926 and link #1169c8. Compose a white header, a full-bleed photographic hero with a Tiempos 66px headline and a white pill, a centred 36px h2, a two-by-two grid of photo cards each with a compact pill, and a navy feature panel. Check pill radius 39px, border 2px #2d2926, hover fill #2d2926, and body 14.4px/28px Bastion 500. Keep the inline link underline as an inset shadow.
