---
version: alpha
name: "OTARO"
category: "Thai Brands"
description: "OTARO: Thai telephony and hosting operator site with brand blue #2468b3, grey #f3f3f3 service band, charcoal #333333 footer, Roboto and Kanit weight 400, 55px hero title, outlined ghost button and 6px-radius soft-shadow service tiles."
colors:
  canvas: "#ffffff"
  page-largest: "#f3f3f3"
  ink: "#666666"
  primary: "#2468b3"
  surface-3: "#333333"
  ink-4: "#e6e6e6"
  ink-6: "#f7f7f7"
  hairline: "#ffffffb3"
typography:
  display:
    fontFamily: Roboto, Kanit, sans-serif
    fontSize: 55px
    fontWeight: 400
    lineHeight: 66px
  subheading:
    fontFamily: Roboto, Kanit, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 33.6px
  body:
    fontFamily: Roboto, Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Roboto, Kanit, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 6px
  pill: 9999px
spacing:
  s1: 7px
  s2: 10px
  s3: 15px
  s4: 20px
  s5: 30px
  s6: 40px
  s7: 70px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 0px 30px
    height: 40px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 0px 30px
    borderColor: "{colors.hairline}"
  nav:
    textColor: "{colors.surface-3}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 15px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
    padding: 40px
    boxShadow: rgb(236, 236, 236) 0px 3px 4px 0px
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink}"
    padding: 20px 0px
---

# OTARO

## Overview

OTARO (https://www.otaro.co.th/, page title "OTARO") is the site of a Thai internet, telephony and hosting operator, queued as World Internetwork Corporation (Otaro); the DESIGN.md is named after the measured site, OTARO. The measured home page is 2501px tall at 1280px width and shares a template with the sister InternetThai site, recoloured from orange to blue. A thin blue utility strip (a blue measured as #2a67b8) shows a phone number (02-113-8999), an email (support@otaro.co.th), "24 Hours" and a Thai-flag language switch labelled "Thai". Beneath it a white header carries a red and blue italic "OTARO" wordmark and right-aligned Thai menu items (home, services, about us, contact us, log in, register). A large hero slider shows a purple and orange gradient photograph of a hand holding a phone with the OTARO logo on its lock screen and a cloud at the foot; the slide title, set in 55px white Roboto, reads "Cloud IPPBX" on the mobile pass and "Video Conference" on the desktop pass, so the hero rotates between slides. A Thai sub-line announces the service starting price and call inclusions, and a ghost button with a thin white border sits beneath.

Below the hero, a white band opens with a Thai question heading ("why choose OTARO ?") and a centred paragraph describing the company as an internet, trunked-telephony and network provider, followed by three blue square icon tiles (Wi-Fi, cloud, globe) with Thai captions. A pale grey band, "OTARO Services", holds a six-column grid of white tiles with blue duotone icons: Web Hosting, Co-Location, Domain Name, Cloud Server, MPLS, Corporate Leased Line, Encoder Service, Fiber Optic Installation, VPS, VOIP, SSL Certificate, Cloud Streaming, OTARO Wi-Fi, NGN Number, IT Outsourcing, Telephone number and Cloud IPPBX. A charcoal footer holds a grey wordmark, a "Contact Us" block and a "Links" list (About, Contact, Policy, Internet Map, Report, RIO-RAO) in blue.

## Colors

`canvas` #ffffff; `page-largest` #f3f3f3 is the largest background area (weight 1031) and the services band; `surface-3` #333333 (weight 430) is the footer and also dark heading text (137 characters). `primary` #2468b3 is the brand blue: it colours the icon tiles (background areas #2467b3, weight 16, and #2a67b8, weight 47, are the two measured blue fills), service labels and card text (308 characters). `ink` #666666 is the most-read text colour (494 characters). Light-on-dark text is `ink-4` #e6e6e6 (42 characters) and `ink-6` #f7f7f7 (15), and the only measured border colour is `hairline` #ffffffb3, the white 70 percent outline of the hero button. The red of the wordmark is image artwork and was not measured as a CSS colour. No root variables are declared.

## Typography

Roboto is the only family (1021 characters), weight 400 only, loaded with Kanit 400 for Thai and Font Awesome 5 Pro (weights 300 and 900) for icons. Tokens: `display` 55px / 66px (hero title), `subheading` 24px / 33.6px, `body` 16px / 24px (802 characters), `nav` 14px / 21px. Other sizes: 15px (56 characters), 13px (42) and 20px (15). The hero button label is uppercase 14px with a 38px line-height. No letter-spacing was recorded. All hierarchy comes from size and colour, not weight.

## Layout

A centred single column of bands, with the services grid six tiles wide. Paddings: 40px (50 occurrences, tiles and cards), 15px (24), 20px (4), 10px (3), 70px (2), 7px and 30px (1 each); spacing tokens: 7px, 10px, 15px, 20px, 30px, 40px, 70px. Navigation links carry 0px 15px padding; the ghost button carries 0px 30px with a 40px height. The footer uses three columns: wordmark, contact, links.

## Elevation & Depth

Tiles use a soft shadow rgb(236, 236, 236) 0px 3px 4px 0px (17 elements) on the grey band, and one element uses rgba(0, 0, 0, 0.1) 0px 3px 4px 0px. The hero carries all the depth, through a photographic gradient and cloud shapes; no overlay colour was measured.

## Shapes

Radii: 6px on 17 elements (service tiles, `rounded.sm`), 4px on 3 (`rounded.xs`) and 50% on 1 (a circular element), with `rounded.pill` 9999px recorded for full rounds. The icon tiles in the feature row are square-cornered in the capture, and the hero button computes a 0px radius.

## Components

- Ghost button (`button-secondary`): transparent fill, white text at 14px uppercase, 1px #ffffffb3 border, 0px 30px padding, 40px high, 0px radius.
- Navigation: white header with #333333 link text at 14px; the utility strip uses white-ish text. On hover the language link "Thai" changes from rgb(230, 230, 230) to rgb(255, 255, 255).
- Service tile (`card`): white, 6px radius, 40px padding, soft grey shadow, blue label (#2468b3) under a blue icon.
- Feature tile: solid blue square with a white line icon, a bold Thai caption and a grey sentence.
- Footer: #333333 fill, 20px 0px padding, grey contact text, blue links.

## Design System Architecture

No public design system or brand guideline was found; the measured page links to none and declares no CSS variables. The system is a recoloured copy of the InternetThai template: identical Roboto plus Kanit stacks, the same 6px tile radius and the same shadow, with blue #2468b3 in place of orange #e47b2a. Source: https://www.otaro.co.th/ and web/data/extracted/world-internetwork-corporation-otaro.json.

## Do's and Don'ts

- Do keep neutrals (#ffffff, #f3f3f3, #333333) and use blue #2468b3 for icons, labels and links.
- Do set hero titles in 55px white Roboto over photography.
- Do use outlined ghost buttons on the hero rather than filled buttons.
- Do present services as equal tiles with 6px radius and the soft shadow.
- Don't use weights other than 400.
- Don't add colours beyond the measured blue, greys and white.
- Don't use strong shadows.

## Responsive Behavior

The 390px mobile pass recorded the h1 at 55px weight 400 with 66px line-height ("Cloud IPPBX"), a mobile section-title size of 26px, and sizes 16px (802 characters), 14px (55), 24px (35), 13px and 20px. The mobile body paragraph is Thai text in the grey ink. Tile columns, menu collapse and hero scaling were not measured.

## Iteration Guide

1. Start with the white header and blue utility strip carrying phone, email and "24 Hours".
2. Place a photographic hero with a 55px white title and an outlined button.
3. Add a feature row of three blue square icon tiles and a #f3f3f3 services band.
4. Build tiles at 6px radius, 40px padding and the 3px 4px grey shadow; keep labels short because long labels truncate with an ellipsis ("Corporate Le...").
5. Close with the charcoal footer and blue links.
6. Run `node web/scripts/verify-designs.mjs --slug=world-internetwork-corporation-otaro` after edits.
7. Copy voice is Thai-first: Thai headings and descriptions, English product names on tiles, and a question heading that opens the company-introduction paragraph.
8. Page rhythm to follow: utility strip, header, hero slider, introduction band with the three feature tiles, services band, footer. Each band is full width on a single background, white and #f3f3f3 alternating, so separation comes from colour change instead of borders; the only border colour measured on the whole page is the hero button outline.
9. Icon language: duotone flat icons in one blue for service tiles and white line icons on solid blue squares for the three feature points; keep one icon per tile, centred above the label.
10. The footer link list is longer than on the sister site: About, Contact, Policy, Internet Map, Report and RIO-RAO, set in blue on the charcoal ground, with the email addresses sales@otaro.co.th and support@otaro.co.th and the telephone 02-113-8999 in the contact column.
