---
version: alpha
name: Ezy Airlines
category: "Thai Brands"
description: "Ezy Airlines (ezyairlines.com), a Thai regional airline site: Kanit type at 52px/600 headlines, navy primary #213a56 buttons with 8px radius and hover #142334, a deep navy #06203b destinations band, a yellow #f9c017 booking accent and soft blue-grey layered shadows."
colors:
  canvas: "#f4f4f4"
  page-largest: "#ffffff"
  ink: "#132a5e"
  primary: "#213a56"
  on-primary: "#ffffff"
  surface-navy: "#06203b"
  black: "#000000"
  ink-body: "#282828"
  accent-yellow: "#f9c017"
  primary-hover: "#142334"
typography:
  display:
    fontFamily: kanit, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 52px
    fontWeight: 600
    lineHeight: 64px
  heading:
    fontFamily: kanit, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 44px
  subheading:
    fontFamily: Kanit, sans-serif
    fontSize: 19.2px
    fontWeight: 700
    lineHeight: 21.12px
  body:
    fontFamily: Kanit, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 28px
  button:
    fontFamily: Kanit, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Kanit, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  pill: 9999px
spacing:
  s1: 8px
  s2: 9.6px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 19.2px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
    height: 50px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
    boxShadow: rgba(68, 83, 113, 0.1) 0px 0px 8px 0px, rgba(68, 83, 113, 0.05) 0px 2px 4px 0px
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.black}"
    boxShadow: rgba(0, 0, 0, 0.16) 0px 3px 6px -1px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-body}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(68, 83, 113, 0.1) 0px 0px 32px 0px, rgba(68, 83, 113, 0.05) 0px 32px 32px 0px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
---

## Overview

The measured page is the home page of Ezy Airlines (https://www.ezyairlines.com/, page title "Home"), a Thai regional carrier. The footer states the proposition: "Connecting regional Thailand with scheduled flights and tailored private air charter services." The first screen is a full-bleed aerial photograph of a turboprop over an island coastline with the headline "Make Your Journey Easy", an eyebrow "YOUR JOURNEY STARTS HERE" in yellow and the sub-line "Convenient regional flights connecting you to Thailand's destinations." Over the bottom of the image sits the booking widget: two tabs (Book Flight, Find Reservation), a yellow panel with Roundtrip and One-way radio options, From and To fields with a circular swap button, Depart and Return date fields, a passengers field and a navy "Find flights" button.

Below the hero are three horizontal cards (News, Travel Information, Manage Booking), each with a navy image block, a title, placeholder text ("Lorem ipsum dolor sit amet consectetur") and an "Explore Now" button; a cartoon pilot mascot sits at the right of the card area. A deep navy section titled "Explore our destinations" has three photo tiles (Hua Hin, Surat Thani, U-Tapao), followed by a wide photographic banner "SCHEDULED FLIGHT, More Places. More Possibilities. BOOK NOW" in yellow. The header is a white bar with the yellow-and-navy EZY Airlines logo, six links (Destinations, My bookings, About Us, Travel information, Q&A, Contact Us), a THB currency selector and a navy "Login / SignUp" button.

The voice is plain, service-oriented and friendly. Several text blocks still show Latin placeholder copy ("Lorem ipsum"), which is part of the measured page.

## Colors

- Canvas `#f4f4f4` is the measured page background (the declared `--go-seven__color-gray-100`); page-largest `#ffffff` is the largest area (weight 2478), the white header, cards and sections.
- Ink `#132a5e` is the deep blue used for footer text and headings (308 characters); ink body `#282828` is the card and body text colour (200 characters).
- Primary `#213a56` is the navy fill of every measured button ("Login / SignUp", "Explore Now", "Find flights"), declared as `--go-seven__color-primary-500`. On-primary is `#ffffff`. Hover fill is `#142334`.
- Surface navy `#06203b` is the second-largest area (1352), the destinations band background. Black `#000000` (area 120) appears in image overlays and the nav text; `#33333387` (area 82) is a translucent dark overlay on photo tiles and the banner label.
- Accent yellow `#f9c017` is the colour of the eyebrow, the "BOOK NOW" text and the booking panel (the panel fill is measured as `#ffc017`, area 6). It is the brand's warm contrast to the navy.
- Declared palette tokens in the CSS: secondary-500 `#996800`, danger-500 `#CC4141`, gray-500 `#C8C8C8`, gray-600 `#a0a0a0`, black `#111111`, white `#FFFFFF`; primary shades are derived steps (100 to 800) of `#213A56`.

The UA link blue `#0000ee` appears on an un-styled nav link in the extraction and is a browser default, not a brand colour, so it is not documented.

## Typography

One family, Kanit, loaded in weights 300, 400, 500, 600 and 700 (the CSS also references it in lowercase `kanit` for headings). The stack falls back to Arial, sans-serif and the emoji fonts. Font Awesome 6 Free and Brands provide icons.

Scale measured on desktop:

- Display: 52px, weight 600, line height 64px ("Make Your Journey Easy").
- Heading: 36px, weight 600, 44px line height ("Explore our destinations").
- Subheading: 19.2px, weight 700, 21.12px line height.
- Body: 18px, weight 300, 28px line height.
- Button: 16px, weight 400 on 24px; secondary button 16px weight 500 on 24px.

Frequent sizes by character count: 16px, 18px, 24px, 36px, 28px, 19.2px, 22px, 20px. Card titles ("News", "Travel Information") are 28px weight 600 on 36px.

## Layout

A centred container on a 1280px viewport with full-bleed hero and banner. The header is an 80px-high bar with a shadow. The cards row is a two-column grid of horizontal cards (image block left, text right) with the mascot filling the empty cell; the destinations tiles are a three-column row; the footer is a white block 451px high. Spacing values measured: 8, 9.6, 10, 12, 16, 19.2, 20, 24, 32 and 40px. Scroll height at 1280px: 3008px.

## Elevation & Depth

Shadows are soft, blue-grey and layered, from the site's own shadow scale: shadow-1 `0px 0px 8px 0px rgba(68, 83, 113, 0.1), 0px 2px 4px 0px rgba(68, 83, 113, 0.05)` (measured on the Login button), shadow-2 `0px 0px 16px 0px ...0.1, 0px 4px 8px 0px ...0.05`, shadow-3 `0px 0px 20px 0px ...0.1, 0px 12px 20px 0px ...0.05` and shadow-4 `0px 0px 32px 0px rgba(68, 83, 113, 0.1), 0px 32px 32px 0px rgba(68, 83, 113, 0.05)` (the measured card shadow). The header bar uses `rgba(0, 0, 0, 0.16) 0px 3px 6px -1px`. Photographs are overlaid with a translucent dark layer for text.

## Shapes

Rounded and friendly. Radius scale declared in the CSS: square 0px, extrasmall 4px, small 8px, medium 16px, large 20px, extralarge 32px, pill 100px. Measured usage: 8px on buttons and the THB control, 12px on cards, and 16px and 9999px as radius tokens in the measured set (the elements carrying them are not identified). The tab shapes on the booking widget have rounded top corners.

## Components

- Primary button: fill `#213a56`, white Kanit 16px, padding 12px 16px, height 50px, 8px radius; measured labels "Login / SignUp" (weight 400) and "Explore Now" and "Find flights" (weight 500). Hover fill `#142334`.
- Outlined control: the "THB" selector is transparent with `#282828` text and an 8px radius, 50px high.
- Header: white, 80px high, links in black Kanit 16px, shadow `rgba(0, 0, 0, 0.16) 0px 3px 6px -1px`.
- Card: white, `#282828` text, 12px radius, layered shadow-4; title Kanit 28px weight 600, with an "Explore Now" button.
- Booking widget: yellow panel, white input fields, navy "Find flights" button, circular swap button with a yellow ring.
- Destination tile: photograph with a centred white Kanit label.
- A cookie or accessibility icon at the bottom-left of the capture is a utility widget and is excluded.

## Design System Architecture

No public design system or brand guideline was found: the page https://www.ezyairlines.com/ was opened and has no link to a design system, brand guideline, press kit or GitHub organisation, so none is cited. The shipped CSS contains 174 root custom properties prefixed `--go-seven__` (a name used by the site's own stylesheet), covering colour scales (`color-primary-100` to `800`, `secondary`, `danger`, `warning`, `gray`), border radii (`border-radius-square` to `extralarge` and `pill`), four shadow levels (`shadow-1` to `shadow-4`) and spacing. Colours are generated scales from a base value (primary 500 `#213A56`, with derived shades 600 `rgb(26.4, 46.4, 68.8)`, 700 `rgb(19.8, 34.8, 51.6)` and 800 `rgb(13.2, 23.2, 34.4)`). The measured hover colour `#142334` is a step of this scale.

## Do's and Don'ts

Do:
- Use navy `#213a56` for every button and `#142334` on hover.
- Use Kanit at weight 600 for headlines and 300 for body.
- Keep the 8px radius on buttons and 12px on cards.
- Use the yellow only for eyebrows, the booking panel and "BOOK NOW".
- Layer soft blue-grey shadows on cards.

Don't:
- Use the browser default link blue `#0000ee`.
- Use black drop shadows on cards; the system shadows are tinted `rgba(68, 83, 113, …)`.
- Fill large areas with the yellow.
- Leave placeholder text in production copy: the measured page still shows "Lorem ipsum" in its cards.

## Responsive Behavior

Measured with the 390px mobile pass: h1 "Make Your Journey Easy" is Kanit 52px weight 600 in white on a 142px-high block; h2 "Make it an incredible journey" is 32px weight 600; body text is 18px weight 300 in white; the "Explore Now" button is still 50px high with 12px 16px padding and 8px radius; the nav block measured 56px high with the destination names Hua Hin, Surat Thani and U-Tapao. Frequent mobile font sizes by character count are 16px, 18px, 22px, 14px, 32px and 24px. The extraction did not record column counts, menu behaviour or image arrangement at mobile width, so these are not measured.

## Iteration Guide

1. Set Kanit 300 for body at 18px on 28px and 600 for headings at 36px and 52px.
2. Use `#213a56` buttons 50px high with 12px 16px padding and an 8px radius; hover `#142334`.
3. Build the booking widget on a yellow panel over a full-bleed aerial photo.
4. Build content cards in white with 12px radius and the 32px-blur blue-grey shadow.
5. Use `#06203b` for deep sections with photo tiles and white labels.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=ezy-airlines --url=https://www.ezyairlines.com --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=ezy-airlines`.
