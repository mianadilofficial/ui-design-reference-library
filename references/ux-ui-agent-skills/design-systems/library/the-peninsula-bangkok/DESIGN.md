---
version: alpha
name: The Peninsula Bangkok
category: "Thai Brands"
description: "Peninsula Hotels riverside flagship in Bangkok (peninsula.com): white canvas, bronze #867050 square-cornered RESERVE buttons, Minion Pro 44px display serif with Futura Book at 18px, soft #f9f9f9 booking panels and warm heritage photography."
colors:
  canvas: "#ffffff"
  ink: "#4a4a4a"
  primary: "#867050"
  on-primary: "#ffffff"
  surface-soft: "#f9f9f9"
  surface-panel: "#f2f2f3"
  ink-black: "#000000"
  ink-gray: "#6d6e71"
  ink-light: "#828387"
  surface-dark: "#544941"
  hairline: "#dbdbdb"
  primary-hover: "#736043"
  button-primary-border: "#ae9364"
typography:
  display:
    fontFamily: "\"Minion Pro\", Georgia, serif"
    fontSize: 44px
    fontWeight: 400
    lineHeight: 56px
    letterSpacing: 2px
  display-mobile:
    fontFamily: "\"Minion Pro\", Georgia, serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 2px
  heading:
    fontFamily: "\"Futura Book\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  subheading:
    fontFamily: "\"Futura Book\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
    textTransform: capitalize
  body:
    fontFamily: "\"Futura Book\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: "\"Futura Book\", Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 15.6px
    letterSpacing: 0.65px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 30px
  none: 0px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 25px 30px
    height: 70px
    borderColor: "{colors.button-primary-border}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-gray}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 40px 0px 15px
    height: 50px
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 60px 0px
---

## Overview

The Peninsula Bangkok is the Chao Phraya riverside flagship of The Peninsula Hotels (page title: "The Peninsula Bangkok | 5-Star Luxury Riverside Hotel"). The measured home page opens on a full-bleed photograph of the hotel's shuttle boat on the river, with the h1 "An Urban Oasis on the River of Kings" set in white serif capitals-and-lowercase over it. A booking bar (dates, guests, special codes, RESERVE) sits at the bottom of the hero, followed by a pale information strip and a centered statement, "Reimagine the timeless glamour of travel in modern Asia", then an editorial mosaic of rooms, boat and staff photography, a dark "PENINSULA TIME" feature band, and an "ELEGANT ACCOMMODATIONS" section with Rooms, Suites and Signature Suites tabs.

The brand reads as heritage luxury: warm photography with uniformed staff and period details, a serif display face, a geometric sans for everything functional, and a single bronze accent. Copy cites "MICHELIN Keys", the "Forbes Five-Star rating" and the group's "12 Peninsula properties worldwide".

## Colors

- **Canvas `#ffffff`**, with soft panels **surface-soft `#f9f9f9`** (2,109) and **surface-panel `#f2f2f3`** (1,996) behind the booking strip and information bars.
- **Ink `#4a4a4a`** is the body text color (6,970 characters). **Ink-black `#000000`** (173), **ink-gray `#6d6e71`** (123) and **ink-light `#828387`** (81) are secondary text tones; `#67553c` appears for 60 characters.
- **Primary `#867050`** is a bronze-gold. It fills the RESERVE buttons (with white text), colors the link text and address lines (445 characters), and has a lighter border value **`#ae9364`**. Hover darkens the fill to **`#736043`** (measured: `rgb(115, 96, 67)`).
- **Surface-dark `#544941`** is the dark brown of the PENINSULA TIME feature band (area 446). **Hairline `#dbdbdb`** is the measured rule color.

## Typography

Families by characters: **Futura Book** (7,580, the working sans), **Futura Std** (506, labels), **Minion Pro** (279, the serif display) and small amounts of Helvetica Neue, Arial and Trebuchet MS. Weight is 400 on 8,421 characters; 700 appears on 16.

- **Display** (h1) is Minion Pro 400 at 44px, line height 56px, letter-spacing 2px (32px/32px on mobile).
- **Heading** (h2, "Reimagine the timeless glamour...") is Futura Book 400, 32px, line height 38.4px; 24px/28px on mobile.
- **Subheading** is Futura Book 24px, line height 28px, capitalised.
- **Body** is Futura Book 400, 18px, line height 28px (the most-read size, 5,447 characters); 16px/24px on mobile.
- **Button/label** is Futura Book 13px, line height 15.6px, letter-spacing 0.65px, uppercase. The body element itself measures Futura Std 13px with 1.4px tracking in uppercase (the header menu labels). Tracked uppercase 13px labels appear with 0.65px (485 characters) and 1px tracking.

Futura and Minion are licensed faces; Jost (a Futura-like face) and a Garamond-style serif would substitute.

## Layout

The page is 1280px wide and 8,885px tall. A transparent header over the hero holds MENU at the left, the stacked "THE PENINSULA BANGKOK" logo in the center, and CONTACT US, ENGLISH and a RESERVE button at the right. Content sits in a centered column (booking strip and statement; widths were not measured) and a two-column mosaic where text and contact lines are on the left and three photographs are arranged at the right. Section spacing uses 30px, 24px, 20px and 15px steps; the footer is padded 60px top and bottom.

## Elevation & Depth

Depth is created with photography, translucent header over the hero (`#ffffff80` appears as an overlay) and soft gray panels; no strong shadows are used in the capture. The dark feature band uses a dark overlay on a photograph.

## Shapes

Radii measured: **2px**, **30px** and **50%**, each once. The RESERVE button, the booking inputs and the links are square-cornered (radius 0px); the round (50%) element is the pause control on the hero. Photographs are square-cornered.

## Components

- **Primary button (RESERVE).** Bronze `#867050` fill, `#ae9364` border, white Futura Book 13px uppercase text with 0.65px tracking, padding 25px 30px, height 70px in the booking bar (40px in the header), 0px radius; hover fill `#736043`.
- **Booking bar.** Four cells: DATES ("09 Oct 2026 - 10 Oct 2026"), GUESTS ("1 Room, 2 Adults, 0 Children"), SPECIAL CODES ("Add Special Codes") and the RESERVE button; small gray uppercase labels above values; input height 50px with padding 0px 40px 0px 15px, white fill, `#6d6e71` text.
- **Outlined button (EXPLORE MORE).** Transparent with a white outline over the dark band.
- **Text links.** LEARN MORE and contact lines in bronze or gray with tracked uppercase labels.
- **Tabs.** Rooms, Suites, Signature Suites, with a bronze underline on the active tab (as shown in the capture).

## Design System Architecture

No public design system or brand guideline was found on the page opened (https://www.peninsula.com/en/bangkok/5-star-luxury-hotel-riverside, measured by the extractor; see SOURCES.json). The site loads icon and slider libraries (icomoon, slick) beside the licensed type. The de-facto system is a white canvas, bronze action color, Futura/Minion pairing and square-cornered controls across the group's hotel pages.

## Do's and Don'ts

- Do use the bronze `#867050` only for actions, links and key accents; darken to `#736043` on hover.
- Do set display lines in Minion Pro with 2px tracking and everything else in Futura Book.
- Do keep controls square (0px radius) and uppercase with 0.65px tracking.
- Do lead with large warm photography of people, boats and rooms.
- Don't add saturated colors; the palette is white, grays and bronze, plus the dark brown band.
- Don't use heavy shadows or rounded buttons.
- Don't set body text below 16px on mobile (measured 16px).

## Responsive Behavior

Measured at 390px: h1 32px (Minion Pro, line height 32px, 350px wide); h2 24px (line height 28px); body 16px (line height 24px, 296px wide); a mobile primary CTA reading "SIGN UP" in white on a filled button. Mobile sizes by characters: 16px (4,225), 18px, 13px, 15px, 32px, 12px, 22px, 14px. Breakpoints and how the booking bar reflows were not measured.

## Iteration Guide

1. White canvas, `#4a4a4a` text; bronze `#867050` for actions.
2. Display Minion Pro 44px/56px with 2px tracking; headings Futura Book 32px; body 18px/28px.
3. Buttons 13px uppercase, 0.65px tracking, 0px radius, bronze fill with `#ae9364` border and `#736043` hover.
4. Use `#f9f9f9` and `#f2f2f3` panels for booking and info bars; `#544941` for a single dark feature band.
5. Keep photography warm and people-centered.
6. Re-measure before documenting tablet layouts or the full mega-menu.

## Content and Voice

Copy is warm, polished and service-oriented. The page leads with place ("An Urban Oasis on the River of Kings"), then a mission-style line about "the timeless glamour of travel in modern Asia", then a paragraph that blends "signature Peninsula elegance with authentic Thai charm" and cites the hotel's MICHELIN Keys and Forbes Five-Star rating. Contact details are given plainly: a street address (333 Charoen Nakhon Road, Khlong San, Bangkok), a telephone number and an email address, each with a small outline icon. The booking strip adds a direct-booking note ("Book direct for the best rates and offers and access to Peninsula Time, a flexible check-in & check-out programme") with a LEARN MORE link. The "PENINSULA TIME" band is headed "THERE IS NO GREATER LUXURY THAN TIME" in tracked uppercase serif and describes arrival from 6am and stay through 10pm at every Peninsula hotel. Section headings such as "ELEGANT ACCOMMODATIONS" are uppercase serif; navigation and button labels are uppercase sans. The Peninsula Time image is a newspaper-style mock front page, so the brand uses editorial, period-print imagery alongside photography.
