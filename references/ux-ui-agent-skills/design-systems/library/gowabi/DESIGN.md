---
version: alpha
name: GoWabi
category: "Thai Brands"
description: "GoWabi beauty and wellness deals marketplace at gowabi.com/en: Raleway chrome with SF Pro card titles, teal #48a58e SEARCH button, mauve #885d7d secondary, red #ff3b30 discounts, white 5px-radius cards with a 9px soft shadow inside pale pink #ffeaea panels."
colors:
  canvas: "#ffffff"
  ink: "#0000008a"
  primary: "#48a58e"
  on-primary: "#ffffff"
  surface-grey: "#f4f4f4"
  surface-mid-grey: "#dddddd"
  ink-black: "#000000"
  ink-dark: "#1e1e1e"
  ink-grey: "#8e8e8e"
  discount-red: "#ff3b30"
  hairline: "#e3e3e3"
  button-secondary-bg: "#885d7d"
  nav-link-text: "#875c7b"
typography:
  display:
    fontFamily: Raleway, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  display-mobile:
    fontFamily: Raleway
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.7143px
  body:
    fontFamily: Raleway, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.1429px
  nav:
    fontFamily: Raleway, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 20px
  button-secondary:
    fontFamily: raleway
    fontSize: 14px
    fontWeight: 400
    lineHeight: 38px
rounded:
  xs: 1px
  sm: 4px
  md: 5px
  lg: 7px
  xl: 10px
  2xl: 15px
  3xl: 20px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 7px
  s8: 8px
  s9: 9px
  s10: 10px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    height: 37px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 1px 0px 0px
    height: 39px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-dark}"
    rounded: "{rounded.none}"
    padding: 51px 0px 0px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 39px
    borderColor: "{colors.surface-mid-grey}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.08) 0px 0px 9px 0px
  footer:
    backgroundColor: "{colors.surface-mid-grey}"
    textColor: "{colors.ink-dark}"
    rounded: "{rounded.none}"
    padding: 30px 0px 60px
---

## Overview
The measured page is https://www.gowabi.com/en (title "GoWabi - Best Discounted Deals for Massages, Beauty Clinics & Salons", lang en, scroll height 6287px), the English home page of GoWabi, a marketplace for booking discounted massage, beauty-clinic, salon and fitness services. The extractor hid a cookie banner (`cookies-eu js-cookies-eu`), which is not documented as UI. The first screen is a teal announcement strip ("Hot Deals Up to 85% OFF | BUY NOW >" in 14px white), a white header with a hamburger icon, the green script GoWabi wordmark with a hummingbird mark centred, a search icon and a cart icon, then a full-width search row: a long input ("Type venue or service you want to book"), a teal "SEARCH" button and a muted-mauve "NEAR ME" button. A large promotional banner carousel follows (a scalp-care campaign with a 10.10 sale badge), a scrolling row of line-icon category links (Eyelash & Eyebrow, Nails, Hair Removal, Clinic and more), a purple coupon banner (฿20, ฿50, ฿100 "เก็บคูปองเลย"), a pink "10.10 SALE" panel with a countdown (11 : 48 : 43 in red boxes) and three deal cards, a pink "Top Picks For You" panel with three more cards, and a fitness promo banner. The page is dense and promotional, with Thai-and-English campaign artwork, red discount badges, crossed-out prices and bold red/teal price figures. Copy uses short commercial labels in capitals (SEARCH, NEAR ME, SEE MORE >).

## Colors
Canvas is {colors.canvas} (#ffffff, area weight 8601), with grey surfaces #f4f4f4 (5941) and #dddddd (3748, also the footer fill and input border), a pale pink #ffeaea (1060, sale panels) and a pale blue #cbf2ff (622). Primary is #48a58e, the teal of the announcement strip and the "SEARCH" button (white 14px label). The hover record for the cart link shows a text colour change from rgb(41,162,131) to rgb(135,92,123) with underline; #875c7b (nav-link text) and #885d7d (the "NEAR ME" button fill) are the site's muted mauve. Text colors by character weight: #0000008a (5938, translucent black, the generated ink), #000000 (4515), #1e1e1e (4500), #8e8e8e (359), red #ff3b30 (340, discount and sold-count figures) and white (294). Borders are #e3e3e3 on cards. The pale pink, pale blue and campaign purple are surfaces in the capture; only the pink and blue were measured as hex. No CSS variables were found on :root. Dark mode was not measured.

## Typography
The interface font is Raleway (400, 600, 700) in a sans-serif stack; product cards use `SFProDisplay` and `SFProText` (Apple San Francisco faces loaded as web fonts). Icon fonts are FontAwesome and slick. Sizes by character weight: 14px (7197), 12px (3402), 19px (2425), 15px (2327), 26px (316), 16px (197). Weights: 600 (10921), 400 (4384), 700 (829), 500 (25). Tokens: display 14px / 20px weight 400 (the announcement strip, detected as the h1); mobile display 18px / 25.7143px (the "Hair" category label); body 12px / 17.1429px in #1e1e1e; nav 18px / 20px weight 600; button-secondary 14px with 38px line height. The card titles measured 15px weight 700 in SFProDisplay, and price numerals are visibly larger and bold in red or teal (their size is not a separate role). Raleway is an open font; No substitute for SF Pro was measured.

## Layout
Page width 1280px. Content is a wide single column with side margins of a few dozen pixels: the search row spans almost the full width, the banner is a single wide carousel, categories scroll horizontally, and deal sections are tinted panels containing a horizontal row of three cards (374px wide by 352px tall each) with circular arrow buttons at both ends. Measured paddings are small and dense: 3px (120), 5px (117), 4px (69), 2px (61), 6px (60), 16px (30). The footer uses 30px top and 60px bottom padding on #dddddd.

## Elevation & Depth
One soft shadow style was measured on cards: `rgba(0,0,0,0.08) 0px 0px 9px 0px`. A second measured shadow stack (20px left and right offsets with rgba(0,0,0,0.455) and 0.68) belongs to the carousel's side fading. Panels use flat tinted fills (pink) with white cards lifted by the 9px soft shadow and a 1px #e3e3e3 border.

## Shapes
Radii by weight: 5px (61, cards and buttons), 10px (54, panels), 20px top-only (30, banner or panel tops), 7px (30), 5px top-only (30, card images), 4px (10). The mobile "FOR BUSINESSES" button measured 15px. Tokens: xs 1px, sm 4px, md 5px, lg 7px, xl 10px, 2xl 15px, 3xl 20px, none 0px, pill 9999px. The desktop search and header buttons measured as square (0px), while cards use 5px.

## Components
Button-primary: #48a58e fill, white 14px label ("SEARCH"), 0px radius in the measurement, 37px high, 127px wide. Button-secondary: #885d7d fill ("NEAR ME"), white label at 14px, 5px radius, 39px high. Nav-link: Raleway 18px weight 600 in #875c7b. Text input: white, #1e1e1e text at 14px, 0px radius, 39px high, 20px side padding, 1px #dddddd border. Card: white, 1px #e3e3e3 border, 5px radius, 374px by 352px, with a red discount badge at the top-right corner of the image, a progress-like "sold" bar, a title, a crossed-out price beside a bold red price, venue name, star rating row and a location pin line. Footer: #dddddd with #1e1e1e text.

## Design System Architecture
No public design system or brand guideline was found (no WebSearch was made; the page was measured through the extractor only), and the extraction found no CSS custom properties on :root. The de-facto system is the class-based theme: Raleway for chrome, SF Pro Display and Text for card content, FontAwesome and slick (carousel) assets, teal #48a58e and mauve #875c7b as the two chrome colours, red #ff3b30 for discounts, and pastel panels for campaign blocks.

## Do's and Don'ts
Do use teal #48a58e for primary actions and the top strip, mauve (#885d7d fill, #875c7b text) as the secondary accent, and red #ff3b30 for discounts and urgency. Do set deal cards in white with a 1px #e3e3e3 border, 5px radius and the 9px soft shadow, inside pale pink #ffeaea panels. Do use Raleway at 600 for navigation and capitals for button labels. Don't document the cookie banner as brand UI. Don't treat promotional artwork colours (the purple coupon banner) as system colours unless measured. Don't use heavier shadows than the measured 9px glow.

## Responsive Behavior
The 390px mobile pass measured: the h1 role fell on the "Hair" category label at 18px / 25.7143px in #333333 (Raleway); a "FOR BUSINESSES" button 153px wide by 32px high with 8px 18px padding, 15px radius, #8b8b8b fill and white 14px text; and the mobile nav panel 390px wide by 512px high on white with #1e1e1e 14px text. Other mobile layout details were not measured.

## Iteration Guide
1. Canvas #ffffff, panels #f4f4f4 and #ffeaea, ink #1e1e1e, teal #48a58e, mauve #885d7d, red #ff3b30. 2. Raleway 14px chrome, SF Pro 15px bold card titles. 3. Cards 374px by 352px with 5px radius and the 9px soft shadow. 4. Search row: wide input plus teal SEARCH and mauve NEAR ME. 5. Sale panels with countdown boxes in red. 6. Hover beyond the cart link, focus states and dark mode were not measured.

## Notes on Measurement Scope
Values come from one desktop pass at 1280px and one mobile pass at 390px of the English home page after hiding the cookie banner. The detected h1 is the announcement strip, not a page heading. The Thai-language site, venue and checkout pages were not measured. Campaign artwork in the carousel and banners is merchant and promotional content and contributes no tokens beyond the measured colors above.
