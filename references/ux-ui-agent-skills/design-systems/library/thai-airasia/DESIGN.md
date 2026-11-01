---
version: alpha
name: AirAsia MOVE
category: "Thai Brands"
description: "AirAsia MOVE (airasia.com/en/gb), the AirAsia group's flights, hotels and travel super-app site measured for the Thai AirAsia queue entry: white canvas, charcoal ink #2c2b2f, signal green #0ce865 search action, DM Sans 12-16px, 16px card radius, no shadows."
colors:
  canvas: "#ffffff"
  surface-footer: "#f4f4f4"
  ink: "#2c2b2f"
  ink-muted: "#6e6d71"
  primary: "#0ce865"
  on-primary: "#023c40"
  accent-red: "#8d1414"
  surface-mint: "#e8f2ec"
  hairline: "#adadad"
  hairline-soft: "#d0d0d2"
typography:
  display:
    fontFamily: DMSans-Regular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  display-mobile:
    fontFamily: DMSans-Medium
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  caption:
    fontFamily: DMSans-Regular
    fontSize: 12px
    fontWeight: 400
  label:
    fontFamily: DMSans-Regular
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 3px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 22px
  3xl: 24px
  4xl: 28px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 11px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 48px
  s10: 64px
components:
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    padding: 0px 0px 4px
    height: 30px
---

## Overview

The queued entry was Thai AirAsia, but the measured URL (https://www.airasia.com/en/gb/) is the AirAsia group's travel super-app site, titled "AirAsia MOVE | Discover deals on flights, hotels, rides & more". Its footer states that the website is owned and operated by MOVE Travel Sdn. Bhd., a registered travel agency. This file therefore documents AirAsia MOVE as the measured site, which is the group's own operator site rather than the Thai AirAsia airline's own domain.

The page is 2,165px tall at 1280px. A white search panel with rounded corners sits at the top: tabs for Flights, SNAP! and Hotels with small 3D-style icons, a One way / Round trip segmented control, four fields (From "Bangkok (DMK)", To, Travel Date "Fri, 16 Oct", Guest and cabin class "1 Guest, Economy"), a green "Search" button and an "I have AirAsia Flight Promo Code" checkbox. Under it, a row of 12 square icon shortcuts (Ride, Check-in & Add-ons, Pre-book duty-free, MOVETIX Events, Deals, eSIM, Points exchange, Insurance, Asean Pass, Attractions, Flight status, FAQ, Discover ASEAN). A full-width green carousel banner for a "10.10 MEGA SALE" follows, then "Promotions" and "Travel & Notices" card rows, and a light gray footer with link columns, social icons and app-store badges. A "Feedback" tab sits on the right edge.

## Colors

`canvas` is white `#ffffff` (largest area, 7,150), with a light gray `#f4f4f4` (1,010) for the footer. `ink` is charcoal `#2c2b2f`, the body color, used for headings, field values and card titles; `#6e6d71` is the muted secondary text and the most frequent measured text color (1,502 characters, mostly 12px captions and links). The action color is signal green `#0ce865`, measured as a background and visible on the Search button and the promotional banner; the dark teal `#023c40` (25 characters of text and 4 borders) is the color used for the active tab underline and dark text on green. A deep red `#8d1414` (49 characters) colors small notices and accent text. `#e8f2ec` is a pale mint surface, `#adadad` the field border (14 elements) and `#d0d0d2` the divider.

Promotional art carries its own saturated reds and greens (the red AirAsia promo tiles) as images, not as interface tokens. No hover states were recorded on controls; a hover on a promotion card reduced its height from 238px to 228px with no color change.

## Typography

DM Sans in separate named faces: `DMSans-Regular` (weight 400, 2,376 characters) and `DMSans-Medium` (loaded as weight 500 and 600; measured text weight 600, 297 characters). The CSS corpus also lists Roboto (31 references), Google Sans and Material Icons, which belong to embedded widgets and icons. The sizes are small and regular: 12px (1,763 characters), 14px (621), 16px (257) and 20px (32). The page's first text role is the "Flights" tab at 16px/24px weight 400; on the mobile pass the first role is "Promotions" at 16px weight 600 in DMSans-Medium. Headings such as "Promotions" and "Travel & Notices" are 16px medium; card captions are 12px. Thai text appears inside promotional banner images and card copy.

## Layout

A single centered column about 840px wide inside a 1280px viewport, as seen in the capture (the search panel, icon row, banner and cards align to the same left and right edges). The search panel contains a four-field row plus a button on one line. Promotion cards are laid out four to a row in horizontally scrollable carousels with round arrow controls. Footer columns are Travel Information, Our Products and Services, Partners' Product and About AirAsia MOVE, with a Connect with Us social column. Measured paddings: 4px (25 elements), 16px (21), 8px (16), 32px and 64px (6 each), 12px, 10px, 11px, 24px and 48px.

## Elevation & Depth

Flat. The extraction measured no box-shadows. Panels are separated by 1px borders (`#adadad`, `#d0d0d2`) and by the white-to-`#f4f4f4` step at the footer. Cards in carousels are images with rounded corners and no elevation.

## Shapes

Radii measured by frequency: 16px (39 elements, the dominant card, panel and field radius), 12px (12), 28px (7), 8px (4), 22px (4), 24px (3), 4px, 4px top-only (2, the tab tops), 3px, 30px and 100px. The Search button is a rounded pill-like green control; icon shortcut tiles are rounded squares; the One way / Round trip control is a segmented pill with a pale-green active state.

## Components

**Search panel.** White, 16px-class radius, 1px border, containing tabs (Flights is active with a dark teal underline), the segmented trip-type control, four outlined fields with small gray labels ("From", "To", "Travel Date", "Guest and cabin class") and 16px values, and the green "Search" button. Input boxes measured 30px high with `0px 0px 4px` padding and 16px DM Sans text in `#2c2b2f`. **Icon shortcuts.** A row of 12 tiles with colorful illustrated icons and 12px labels. **Banner carousel.** Full-width green promotional banner with prev/next circle buttons. **Promotion cards.** Image on top (16px radius), 14px medium title, 12px gray description. **Footer.** `#f4f4f4`, link lists at 12px gray, social icons in circles and Google Play, App Store and AppGallery badges. **Feedback tab.** A dark vertical tab fixed to the right edge; it is a widget, not brand UI.

## Content & Voice

The interface speaks in plain English with short nouns for services (Flights, SNAP!, Hotels, Ride, eSIM, Insurance) and promotional cards that lead with a benefit and a number: "Travel now, pay later!", "Japan in autumn, flights from THB 6,525", "UP TO 30% OFF* VALUE PACK", "Fly-Thru". Thai-language copy lives inside the banner art and in some card titles, so the site mixes English interface chrome with bilingual promotion. The capture shows prices in Thai baht and a "10.10 MEGA SALE" with dates 7-11 Oct. Legal text at the foot is small gray 12px prose. The tone is transactional and promotion-heavy, with icons illustrated in a glossy 3D style that contrasts with the flat, quiet interface chrome around them.

## Design System Architecture

No public design system or brand guideline was found; the pages opened exposed none. The site's root variables are empty in the extraction, and the CSS uses component-scoped classes with named font faces (`DMSans-Regular`, `DMSans-Medium`, `DMSans-Bold`, `DMSans-Italic`, `DMSans-MediumItalic`). The de-facto system is the recurring set of values: 16px radii, DM Sans at 12/14/16px, charcoal text on white, and green for the single primary action.

## Do's and Don'ts

Do keep the interface white with charcoal text and let promotional images carry the color. Do use green `#0ce865` for the search action and the sale banner. Do use 16px radius on panels and cards. Do keep type to DM Sans at 12, 14 and 16px.

Don't add shadows or gradients to controls. Don't use the red `#8d1414` as a button fill; it is measured only as accent text. Don't treat the Feedback tab or the carousel arrows as brand components. Don't use Roboto or Google Sans for brand text.

## Responsive Behavior

Measured on the 390px mobile pass: the first role is "Promotions" at 16px weight 600 in DMSans-Medium (358px wide); the measured type sizes remain 12px (1,853 characters), 14px (456), 16px and 20px. The mobile pass recorded no primary button and no navigation element. How the search panel and the carousels reflow was not measured.

## Iteration Guide

1. White canvas, `#2c2b2f` ink, `#6e6d71` secondary, `#f4f4f4` footer.
2. DM Sans Regular and Medium at 12, 14 and 16px.
3. Build a bordered search panel with 16px radius and four labelled fields and a green `#0ce865` Search button.
4. Add a 12-tile icon shortcut row, a green promo banner and 16px-radius promotion cards.
5. Keep everything shadow-free.
6. Measure thaiairasia.com or the airline booking flow separately; this file covers only the MOVE site.
