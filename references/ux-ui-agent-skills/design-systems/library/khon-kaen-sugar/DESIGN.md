---
version: alpha
name: Khon Kaen Sugar Industry Public Company Limited
category: "Thai Brands"
description: "Corporate and investor site of Khon Kaen Sugar Industry (KSL Group) set in Noto Sans Thai on a #d9d9d9 grey canvas with #555555 ink, #ee3635 red 100px-radius pill buttons, #ec430f orange nav, a #171717 footer and a 50px hero over aerial map imagery."
colors:
  canvas: "#d9d9d9"
  ink: "#555555"
  primary: "#ee3635"
  on-primary: "#ffffff"
  surface-footer: "#171717"
  surface-slate: "#545454"
  ink-muted: "#a2a2a2"
  nav-orange: "#ec430f"
  card-bg: "#d9d9d9bf"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 50px
    fontWeight: 500
    lineHeight: 62.5px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 50px
  body:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
    letterSpacing: "-0.4px"
    textTransform: capitalize
  link:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.4px"
    textTransform: capitalize
rounded:
  sm: 3px
  md: 10px
  lg: 12px
  xl: 20px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 25px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 14px 32px
    height: 62px
  button-primary-hover:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 16px 32px
    height: 59px
  link:
    textColor: "{colors.surface-slate}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-orange}"
    padding: 0px 45px
  nav-link:
    textColor: "{colors.nav-orange}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.surface-slate}"
    rounded: "{rounded.xl}"
    padding: 40px 20px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.on-primary}"
---

## Overview

The measured page is the English home page of kslgroup.com (redirected to /en), titled "Khon Kaen Sugar Industry Public Company Limited". The company, also called KSL Group, describes itself on the page as operating in "the manufacturing and sale of sugar and associated products, such as ethanol, electricity, and Bio-Fertilizer". The hero slogan is "We are Natural Energy Innovation for All", and a second line of copy reads "Energy for Humanity, certified under quality management system".

This is a listed-company site, so it blends brand storytelling with investor utilities. The first screen is a darkened aerial video or still of a blue-outlined map of Thailand and Laos with red location pins and company names (in Thai) at each plant, under the slogan in white 50px type. Below it a mosaic called "Our Business" places a text-and-button tile beside five photo tiles labelled Sugar, Ethanol, Electricity, Bio-Fertilizer and Supporting Business, each with a red label chip. The following band, "Stock Information" and "Investor Information", is dark slate and lists Investor Calendar, Financial Information, Code of Business Conduct and a 56-1 One Report download, each with an icon and an arrow, and a ticker card for KSL.

The voice is formal and institutional, with short English headings and certifications-and-sustainability phrasing. A small round white KSL badge sits at the lower left of the capture; it is a floating control and is not described as brand UI.

## Colors

The canvas is a mid-light grey, #d9d9d9, which is also the header background and by far the largest area color. Reading text is #555555 (the most-read text color), with #252525 as the theme's menu and body-text color for darker moments and #a2a2a2 as the muted text on dark areas. Red is the brand action color: #ee3635 fills the "About Company" and "Detail" buttons and the label chips on the photo tiles, and the button inverts on hover to a white fill with #ee3635 text.

The navigation and logo text use an orange-red, #ec430f, measured as the nav and body link color and published by the theme as the logo text color and active menu color; its hover companion in the theme is #b5251d. The footer is near-black, #171717 (declared as the theme's footer background), and #545454 supplies the slate of the investor band and the text on translucent cards. The cards on that band use #d9d9d9 at 75% opacity (#d9d9d9bf) over a blurred photograph, with other measured overlays at #0000004d (30% black) and #545454cc (80% slate).

The stylesheet root also exposes Bootstrap 5 defaults (--bs-primary #0d6efd, --bs-success, --bs-info) and a template link blue #2a69b8. They are framework or template values and none of them appears in the measured design, so they are not brand colors.

## Typography

One family, Noto Sans Thai, loaded at 400, 500, 600 and 700, covers Thai and Latin text; Roboto Condensed (700) is also loaded. The hero slogan is 50px at weight 500 with a 62.5px line height; on mobile the measured top heading ("Our Business") is 40px at weight 700 with a 50px line height. Body paragraphs are 20px with a 30px line height. Buttons are 20px at weight 600 with -0.4px letter spacing, a 28px line height and capitalization; the "View SET" text link is 30px at weight 600 with the same tracking.

Section titles such as "Our Business" and "Stock Information" are bold and large (40px appears for roughly 120 characters, 35px for 56). Navigation is 18px at weight 500 in the header and 20px at 400 in links. Character counts rank 20px first, then 18px, 28px, 14px, 25px, 40px and 24px, so the page reads as large and legible rather than dense, which suits Thai script.

## Layout

The page is 1280px wide and 6557px tall. The header has two parts: a grey top bar with a hamburger icon and the red KSL wordmark at left, and an expanded menu row (Home, Corporate Profile, Investor Relations, Corporate Governance, Sustainable Development, Join Us, Contact Us) with dropdown chevrons, laid over the hero with a language flag pair at the right.

The home content alternates a one-third text tile with two-thirds image tiles: "Our Business" is a three-column mosaic where each cell is a square-ish photo tile, two rows tall, and every tile is flush against its neighbors with no gutters. The investor band splits in half, with a blurred-businessman background on the left carrying a translucent ticker card and a plain slate list on the right with hairline dividers between rows. Spacing values are 4 to 30px, with 14px by 32px button padding and 40px by 20px card padding.

## Elevation & Depth

The page is almost shadowless: 89 measured elements carry only a zero-offset white shadow (rgb(255, 255, 255) 0px 0px 0px 0px), which is effectively none. Two small shadows appear once each, rgb(128, 128, 128) 0px 0px 5px 0px and rgba(204, 204, 204, 0.5) 0px 2px 10px 0px, and are not declared as tokens because their role is not clear from the capture. Depth is produced by overlays: a 30% black scrim over the hero, a frosted translucent card (#d9d9d9bf) over a blurred photograph, and slate bands against the light grey canvas.

## Shapes

Buttons are full pills with a 100px radius (seven elements). Cards and larger panels use 20px, tiles and other blocks 10px and 12px (twelve elements across the two), and small controls 2px or 3px. A 999px radius appears once. The photo mosaic tiles are square-cornered and edge to edge. The red label chips on the photo tiles are rectangular with square corners. Circular elements, such as the floating KSL badge, are present but are not part of the declared component set.

## Components

Primary button: a 62px-high red pill (#ee3635, 100px radius, 14px by 32px padding), white 20px weight-600 capitalized text; on hover it inverts to white fill and red text. Secondary button: the same red pill at 59px height with 16px by 32px padding ("Detail").

Navigation: grey bar with 18px weight-500 labels in orange (#ec430f) and chevrons; an active "Home" label is orange while the other labels appear dimmer over the dark hero. Photo tile: full-bleed image with a centered red chip carrying a white 40px label. Card: a 20px radius panel at 75% grey with 40px by 20px padding and slate text, used for the stock ticker. List row: icon, 20px label, right arrow, with a thin rule between rows. Footer: #171717 with white 24px bold headings ("Contact Us", the company name) and #a2a2a2 supporting text. The floating round KSL badge is a widget, not a brand component.

## Design System Architecture

No public design system or brand guideline was found on the pages opened. The de-facto system is a page-builder build (variables prefixed --sppb-, for example --sppb-text-color #252525, --sppb-footer-bg-color #171717, --sppb-topbar-bg-color #333333, --sppb-menu-text-active-color #ec430f, --sppb-menu-text-hover-color #b5251d) on top of Bootstrap 5 and UIkit (breakpoints --uk-breakpoint-s 640px, -m 960px, -l 1200px). Icons are Font Awesome 6 Free and Brands. Brand colors are set through the page builder's template options (logo text, menu, footer, topbar) and not through a bespoke token layer, so the measured computed values in this file are the reliable source.

## Do's and Don'ts

Do keep the grey canvas and let large documentary photographs carry color. Do use #ee3635 for buttons and label chips, with white text, and #ec430f for navigation. Do set Thai and English copy in Noto Sans Thai at generous sizes (20px body at a 30px line height). Do round buttons as full 100px pills and cards at 20px.

Don't use Bootstrap blue (#0d6efd) or the template blue (#2a69b8) for links or buttons. Don't add drop shadows. Don't put gutters between photo tiles. Don't treat the floating badge or the language flags as brand components. Don't use the red for body text; reading text stays #555555.

## Responsive Behavior

The extractor measured a 390px viewport: the headline role became "Our Business" at 40px, weight 700, with a 50px line height, compared with the 50px weight-500 slogan on desktop. The page also shows a hamburger icon in the top bar at desktop width, The theme uses UIkit breakpoints at 640, 960 and 1200px and Bootstrap's grid; mosaic layout at narrow widths was not captured and is not asserted.

## Iteration Guide

Start from #d9d9d9 and #555555 in Noto Sans Thai, with 20px body and a 30px line height. Use #ee3635 for every button and label chip, as a 100px pill at about 60px high, and flip it to white with red text on hover. Keep navigation in #ec430f. Build home sections as a mosaic of edge-to-edge photographs, each with a red label chip, and reserve #171717 and #545454 for footer and investor bands. Add frosted cards at 75% grey with a 20px radius over blurred imagery for data like stock information. Keep the voice formal, capitalized and short. Measure any new component with the extractor before declaring it.
