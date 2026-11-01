---
version: alpha
name: "Wyndham Hotels & Resorts"
category: "Travel & Hospitality"
description: "Wyndham Hotels & Resorts: hotel-booking site (APAC deals page) with a #282828 header, Wyndham blue #0065ab square uppercase buttons, HCo Gotham SSm 300 body at 15px and 700 headings at 28px, white and #f4f4f4 bands, 0px radii and no shadows."
colors:
  canvas: "#ffffff"
  ink: "#555555"
  primary: "#0065ab"
  on-primary: "#ffffff"
  surface: "#d9d9d9"
  surface-3: "#f4f4f4"
  ink-2: "#333333"
  ink-5: "#ffffffd9"
  ink-6: "#a4d9fc"
  primary-hover: "#005088"
  nav-bg: "#282828"
typography:
  display:
    fontFamily: "\"HCo Gotham SSm\", Arial, sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 33.6px
    letterSpacing: "-0.28px"
  display-mobile:
    fontFamily: "\"HCo Gotham SSm\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
    letterSpacing: "-0.24px"
  body:
    fontFamily: "\"HCo Gotham SSm\", Arial, sans-serif"
    fontSize: 15px
    fontWeight: 300
    lineHeight: 21.75px
    letterSpacing: "-0.15px"
  button:
    fontFamily: "\"HCo Gotham SSm\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14.4px
    letterSpacing: "-0.15px"
    textTransform: uppercase
  nav:
    fontFamily: "\"HCo Gotham SSm\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 13.2px
    letterSpacing: "-0.12px"
    textTransform: uppercase
rounded:
  xs: 4px
  none: 0px
spacing:
  s1: 2px
  s2: 3.5px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 11px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 6px 30px 4px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 6px 30px 4px
    height: 50px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 76px 0px 40px
---

# Wyndham Hotels & Resorts

## Overview

Wyndham Hotels & Resorts (https://www.wyndhamhotels.com) redirected the queued home URL to its Asia Pacific deals landing page, https://www.wyndhamhotels.com/hotel-deals/apac-hotels, titled "Explore the Charm of Asia Pacific with Our Hotel Selections| Wyndham Hotels & Resorts"; every measurement below comes from that page on the brand's own domain. The page is 7705px tall at 1280px width. A near-black navigation bar (#282828) carries the stacked "WYNDHAM HOTELS & RESORTS" wordmark at the left and uppercase menu items with chevrons: BOOK, TRAVEL BUNDLES, MEETINGS & EVENTS and MY ACCOUNT, plus a globe language selector set off by a thin divider. A full-bleed hotel-room photograph carries a large white campaign wordmark ("WOW" with script "ay of Wyndham") and a solid blue "SEARCH HOTELS" button. Below, a white carousel of three offer columns (for example "Wyndham Weekday Advantage", "Save More with Mastercard" and "Discounted Nights Start at Just 500 Points + Cash"), each with a small orange icon, a bold centred heading, light body copy, a blue "*Terms and conditions apply." link and an outlined blue button (BOOK NOW, LEARN MORE). A #f4f4f4 band titled "Featured Hotels" holds a three-column grid of white hotel cards with photographs, a "Guest Recommended" label, a heart icon, carousel dots, the hotel name, city, a numeric rating with blue stars and a rating count, and a "SEE HOTEL" outlined button. A "Feedback" tab is pinned at the left edge.

## Colors

`canvas` #ffffff; `surface` #d9d9d9 is the largest background area (weight 8223, image regions and dividers) and `surface-3` #f4f4f4 (weight 4428) is the grey section ground behind the hotel cards; #dfdfdf (weight 1509) is a further light grey. `nav-bg` #282828 is the header and footer. `primary` #0065ab is Wyndham blue: button fill, outline buttons, rating stars, links (638 text characters) and 28 borders. `primary-hover` #005088 is the measured hover fill of "SEARCH HOTELS" (rgb(0, 80, 136), with the border shifting to rgb(32, 77, 116)). Text colours: `ink` #555555 (4390 characters, light-weight body), `ink-2` #333333 (1377, headings), white #ffffff (580), `ink-5` #ffffffd9 (334, white at 85 percent on dark) and `ink-6` #a4d9fc (55, light blue on dark). Borders are #0065ab, #d9d9d9, #c5c5c5, #ffffff and #ffffff33. The swiper default #007aff in the root variables is a carousel library default and not a brand colour. No box shadows were measured.

## Typography

HCo Gotham SSm is the family (7390 characters), loaded at 300, 400, 500 and 700, with Arial as fallback (55 characters). Icon fonts load as amenity-icon-font, whg-core-icon-font and wr-icon-font. Weight 300 covers 5167 characters (body), 700 covers 1965 and 400 covers 234. `display` is 28px, weight 700, line-height 33.6px, tracking -0.28px (874 characters); `display-mobile` is 24px with line-height 28.8px. `body` is 15px weight 300, line-height 21.75px, tracking -0.15px (4954 characters, by far the most common). `button` is 12px weight 700, line-height 14.4px, tracking -0.15px, uppercase. `nav` is 12px weight 400, line-height 13.2px, tracking -0.12px, uppercase. Other measured sizes: 18px (554), 13px (100, with 0.65px tracking on 55 characters), 24px (64) and 20px (10). Tracking is -0.01em at every size except the 13px labels.

## Layout

Content sits in a centred container of three columns for offers and hotel cards, within full-width bands alternating white and #f4f4f4. Measured paddings: 30px (116 occurrences, button sides), 6px (75), 16px (65), 20px (35), 100px (27), 4px (24), 3.5px (20), 60px (18), 50px (9) and 12px, 15px (9 each). The footer padding is 76px 0px 40px. Spacing tokens: 2px, 3.5px, 4px, 6px, 8px, 11px, 12px, 14px, 15px, 16px. The Swiper carousel declares a 44px navigation size, which governs the arrows and dots of the offer carousel.

## Elevation & Depth

Flat and photographic. No box shadow was measured. Cards are separated from the grey band by their white fill; the hero depth comes from the photograph and the oversized campaign lettering. A white 33 percent border (#ffffff33) separates items on the dark header.

## Shapes

Square. The extraction recorded only 4px on three elements (`rounded.xs`) and every other element, including all buttons, computes 0px (`rounded.none`). The hotel cards, offer buttons and header are rectangular.

## Components

- Primary button (`button-primary`): #0065ab fill, white label, HCo Gotham SSm 12px weight 700 uppercase, padding 6px 30px 4px, 50px high, 0px radius ("SEARCH HOTELS", "LEARN MORE"). Hover fill #005088.
- Outlined button: transparent, 2px #0065ab border, blue label, same type and padding, 46px high ("REDEEM NOW"; on the page also BOOK NOW and SEE HOTEL).
- Navigation (`nav`, `nav-link`): #282828 bar, uppercase 12px labels with chevrons.
- Hotel card: white, photograph on top, small translucent "Guest Recommended" label, heart toggle, carousel dots, name in bold, city and rating line with blue stars, outlined button.
- Offer column: icon in orange, 28px bold centred heading, 15px light body, link, outlined button.
- Footer (`footer`): #282828 fill, white text, 76px 0px 40px padding.

## Design System Architecture

No public design system or brand-guidelines page was found on the measured page. The stylesheet exposes only the Swiper variables (`--swiper-theme-color`, `--swiper-navigation-size`), so the system is carried by element-level styles and three proprietary icon fonts (amenity, core and "wr" icon fonts). Source: https://www.wyndhamhotels.com/hotel-deals/apac-hotels and web/data/extracted/wyndham.json.

## Do's and Don'ts

- Do use Wyndham blue #0065ab for actions and #005088 on hover.
- Do keep buttons rectangular, uppercase, 12px bold, with 30px side padding.
- Do set body copy in weight 300 at 15px in #555555 and headings in weight 700 in #333333.
- Do group offers and hotels in three columns on white and #f4f4f4 bands.
- Don't round buttons or cards.
- Don't add shadows.
- Don't use the swiper blue #007aff.

## Responsive Behavior

The 390px mobile pass recorded the first heading ("Extra Miles Boost") at 24px weight 700 with 28.8px line-height and -0.24px tracking, body at 15px weight 300, and sizes 15px (5293 characters), 24px (800), 12px (784), 16px (564), 22px, 14px and 18px. The mobile layout summary is not recorded. Menu collapse and column counts on narrow screens were not measured.

## Iteration Guide

1. Start with a #282828 header, uppercase 12px menu with chevrons and a globe selector.
2. Add a full-bleed photographic hero with one blue square "SEARCH HOTELS" button.
3. Use white offer columns with a 28px bold heading, then a #f4f4f4 band of three-up hotel cards.
4. Make all buttons 0px radius; fill blue for primary and outlined for secondary.
5. Finish with the dark footer.
6. Run `node web/scripts/verify-designs.mjs --slug=wyndham` after edits.
7. Voice: promotional and direct, with price or benefit facts in the headline ("Save More with Mastercard", "Discounted Nights Start at Just 500 Points + Cash") and a legal qualifier link beneath the body.
8. Hover behaviour recorded: the "SEARCH HOTELS" button darkens from rgb(0, 101, 171) to rgb(0, 80, 136) with its border moving from white to rgb(32, 77, 116) and the label staying white; the carousel "Previous" button was also probed and starts with a transparent label colour.
9. Rating display: a numeric score in bold, five blue stars, and a rating count in small blue text in parentheses, for example "4.2" with "(676 ratings)"; the count text is #0065ab at a smaller size than the 15px body.
10. Image labels: "Guest Recommended" is a small white label on a translucent dark chip placed on the top left of each hotel photograph.
11. Page rhythm: dark header, hero, offer carousel with dots below, grey "Featured Hotels" band with a centred bold title, then further hotel rows and the footer.
