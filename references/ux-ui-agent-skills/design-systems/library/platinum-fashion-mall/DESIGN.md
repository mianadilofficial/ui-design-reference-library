---
version: alpha
name: Platinum Fashion Mall
category: "Thai Brands"
description: "Platinum Fashion Mall runs a WordPress site set entirely in Montserrat with Prompt for Thai, where headings and the Platinum logotype share one royal indigo, #272897, on a white canvas; headlines are 800-weight Montserrat at 24px, navigation is 600-weight uppercase at 18px, and big rounded corners of 25px to 70px shape cards and outlined buttons."

colors:
  canvas: "#ffffff"
  ink: "#272897"
  primary: "#272897"
  accent-rose: "#cc3366"
  surface-soft: "#f8f8fa"
  ink-black: "#0b0b0c"
  ink-grey: "#444444"
  ink-lavender: "#9798df"
  footer-bg: "#d9d9d9"

typography:
  display:
    fontFamily: Montserrat, Prompt
    fontSize: 18px
    fontWeight: 600
    lineHeight: 20px
    textTransform: uppercase
  heading:
    fontFamily: Montserrat, Prompt
    fontSize: 24px
    fontWeight: 800
    lineHeight: 24px
  subheading:
    fontFamily: Montserrat, Prompt
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
    textTransform: uppercase
  body:
    fontFamily: Montserrat, Prompt
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button-secondary:
    fontFamily: Montserrat, Prompt
    fontSize: 17px
    fontWeight: 600
    lineHeight: 17px

rounded:
  sm: 13px
  md: 25px
  lg: 30px
  xl: 31px
  2xl: 45px
  3xl: 70px
  pill: 9999px

spacing:
  s1: 3px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 20px
  s8: 24px
  s9: 25px
  s10: 25.59px

components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 12px 24px
    height: 47px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    padding: 0px 10px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    padding: 0px 10px
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 25.5938px 51.1875px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-black}"
---

## Overview

Platinum Fashion Mall's site is the web home of a fashion mall whose own copy describes the "WHAT'S HAPPENING" news feed, a "SHOPS RECOMMENDED BY PLATINUM" directory strip and a "TOURIST PRIVILEGE" programme: "Experience the ultimate privileges as an international tourist with limitless shopping at Platinum, featuring special offers from participating stores... Register below to receive your e-coupon!" (page rendered in a browser at https://platinumfashionmall.com/). The navigation is DIRECTORY, DINING, ABOUT, NEWS, TOURIST and CONTACT, with an EN / TH switch. A "20th ANNIVERSARY PLATINUM, Born to Celebrate" lock-up sits beside the Platinum logotype at the top, and the footer lists the group's other businesses with address, phone and a GO TO WEBSITE link each.

The design is a single-colour brand: the logotype, headline text, body text, banner fills and cards are all variants of one deep indigo, and the white canvas supplies the contrast. Fashion imagery (the "FRESH FASHION" and "SHOW PROUD" tiles) and the influencer-led campaign banners (the "THE NEXT SELLER" artwork in violet and yellow) supply every other colour. The mood is youthful and campaign-led rather than luxurious: bold geometric sans, upper-case labels, large rounded containers.

Capture note: the extractor was re-run after its navigation-retry fix and completed without a crash, but the refreshed capture still shows two overlays, a cookie-consent bar and a black royal-tribute panel across the top, so the first screen is mostly black and the large black rectangles are video or image slots that did not load. The re-measurement matched the earlier one token for token. Overlay controls such as the consent bar's Allow button, and the black that fills the tribute panel and unloaded media slots, are not brand colours and are not documented as tokens.

## Colors

Canvas is #ffffff, the most-used background. The brand colour is indigo #272897, measured as the most-read heading and body text colour, as a background fill (one of the largest coloured areas in the extraction) and as the logotype colour; it is therefore used both as `ink` and as `primary`. The same indigo fills the large "What's Happening" campaign card, where the text turns white. Light supporting tints measured as backgrounds are #c2c7ed and #b1b4e7, a lighter lavender text colour #9798df, and the pale neutral #f8f8fa. A deeper violet-blue #302bc3 is present in the measurements but was measured on the consent overlay's Allow button (hover data), so it is not a token. #0b0b0c is the measured footer text colour and #d9d9d9 the footer background. #444444 is also measured as a text grey, but I could not attribute it to a specific component. The black (#000000) in the capture belongs to the overlay panel and unloaded media slots, so it is left out.

One warm accent, rose #cc3366, appears on 15 measured characters; I could not attribute it to a specific component, so it is recorded as an accent only.

## Typography

Everything is set in Montserrat, with Prompt loaded for Thai (Montserrat 400, 500, 600, 700 and 800; Prompt 600 and 700). Navigation and links are uppercase Montserrat 18px at weight 600 and a 20px line height. Section headlines such as the EP.20 feature title are 24px at weight 800 with a 24px line height, a tight, poster-like setting. Subheadings are uppercase 14px bold. Body text is 14px regular with a 21px line height, and the outlined button label is 17px at 600. The site loads both families itself, so no substitute is needed.

Thai text on the page (for example the headline for the 20th anniversary campaign) falls back to Prompt. The page uses uppercase heavily for labels (WHAT'S HAPPENING, SHOPS, RECOMMENDED BY PLATINUM, TOURIST PRIVILEGE) and sentence case for the longer news headings.

## Layout

The page is a centred stack of full-width bands. The top band is a hero media slot, below it a header with the anniversary mark and logotype centred, then a two-up feature row (video thumbnail left in a rounded black frame, headline and schedule right), a wide media block, and the "WHAT'S HAPPENING" section with a centred uppercase title and large cards whose images bleed to the edge. Further down are a shop strip with floor, room number and category for each shop (for example "Catwalk By Koh-Tun, 2Fl., Room427, Women Fashion"), the tourist privilege block and the footer of business units. The measured spacing steps are 3px, 5px, 8px, 10px, 12px, 15px, 20px, 24px, 25px and 25.59px, and the indigo card measures padding 25.5938px by 51.1875px. Navigation links carry 10px side padding.

## Elevation & Depth

Shadows are used on cards and media. Measured values are rgba(0, 0, 0, 0.25) 8px 8px 10px 8px (six elements), rgba(0, 0, 0, 0.25) 0px 2px 5px 0px and rgba(0, 0, 0, 0.2) 2px 8px 23px 3px. WordPress theme presets also publish an "outlined" shadow (6px 6px 0px -3px white, 6px 6px black) and a "natural" shadow (6px 6px 9px rgba(0, 0, 0, 0.2)) as variables on the root; those are core WordPress defaults, not Platinum choices. The overall look is flat and graphic, with a hard offset shadow on a few raised cards.

## Shapes

Corners are generous and asymmetric. Measured border radii are 3px, 25px (14 elements), 30px (13), 31px (6), 45px, a mixed "70px 0px 31px 31px" on six elements, and half-circle shapes ("0px 60px 0px 0px", "0px 50px 0px 0px", "13px 13px 0px 0px"), plus 50% on five elements. The asymmetric one-large-corner shape is the signature: the indigo "What's Happening" card in the capture has one strongly rounded outer corner while the others stay tight. The outlined button uses 30px, and 25px is the common card radius. Square corners are not part of the visual language here.

## Components

**Outlined button.** White outline and white label on indigo or imagery, Montserrat 17px at 600, 47px high with padding 12px 24px and 30px radius. The page copy has "See More" and "Read more" links in several sections, but I did not verify which element this measurement is. A solid primary button was not detected on the page, so none is defined.

**Indigo card.** Indigo (#272897) fill, white text, padding 25.5938px 51.1875px, one large rounded corner, with a campaign image filling the other half.

**Navigation.** Uppercase Montserrat 18px; white text on the dark hero with 10px side padding, then a language switch EN | TH at the end.

**Shop list.** Name, floor ("2Fl."), room number and category on adjacent lines; this typographic card has no fill.

**Footer.** #d9d9d9 background and #0b0b0c text, with the group's business units laid out with location, phone, email and a GO TO WEBSITE link.

## Design System Architecture

No public design system, brand guideline or token package for Platinum Fashion Mall was found; the site's /brand, /press, /about-us and /design paths answered with an HTTP 202 placeholder to a plain request, and the page itself is only reachable through a real browser. The de-facto system comes from the shipped page: a WordPress site (the root carries `--wp--preset--*` variables for colours, font sizes and spacing, such as `--wp--preset--font-size--large: 36px` and `--wp--preset--spacing--50: 1.5rem`) with a custom indigo, Montserrat and Prompt layered on top. Primary source: https://platinumfashionmall.com/ . Because the WordPress presets carry defaults like #0693e3 and #9b51e0, they are ignored as brand values.

## Do's and Don'ts

Do use #272897 for the logotype, headings and filled cards, and white for text on those fills. Do set labels in uppercase Montserrat and headlines in 800 weight at tight line height. Do use big rounded corners, with one very large corner on feature cards. Do let fashion and influencer imagery carry colour.

Don't use the consent overlay's blue as a brand colour. Don't add a second brand hue; rose #cc3366 is a small accent only. Don't use square-cornered cards. Don't set Thai in anything but Prompt when Montserrat lacks the glyphs.

## Responsive Behavior

The extraction covered a 1280px desktop and a 390px pass that produced the mobile h1 role (24px weight 800). I did not inspect mobile layouts or breakpoints, so I make no claim about how the two-up feature row, the shop strip or the footer units reflow. The WordPress theme publishes a 36px "large" font size preset on the root, but that is a core default, not evidence of a Platinum breakpoint.

## Iteration Guide

Begin with a white page and place the indigo logotype and anniversary lock-up centred. Use Montserrat 800 at 24px for feature titles and Montserrat 14px for body copy. Frame the campaign content in a card with a #272897 fill and one large rounded corner (the measured radii go up to 70px), and add the outlined 30px-radius button inside it. Before shipping a change, check it at https://platinumfashionmall.com/ in a browser with the consent and tribute overlays closed, then re-run the verification script for this slug.
