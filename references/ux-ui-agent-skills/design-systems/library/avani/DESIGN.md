---
version: alpha
name: Avani Hotels & Resorts
category: "Thai Brands"
description: "Avani Hotels & Resorts (avanihotels.com), the Minor Hotels brand: deep aubergine #350827 header, footer and buttons over pale #f1eff0 and #f7f6f3 surfaces, Gilroy at weight 100 for a 50px destination headline, letter-spaced Capitolium capitals for 2px-radius buttons, and full-bleed lifestyle photography."
colors:
  canvas: "#f1eff0"
  surface: "#f7f6f3"
  ink: "#350827"
  primary: "#350827"
  on-primary: "#ffffff"
  cream: "#f3f2ed"
typography:
  display:
    fontFamily: Gilroy, Arial, sans-serif
    fontSize: 50px
    fontWeight: 100
    lineHeight: 62.5px
    letterSpacing: 1px
  subheading:
    fontFamily: Gilroy, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 3px
    textTransform: uppercase
  body:
    fontFamily: Gilroy, Arial, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: 0.8px
  button:
    fontFamily: Capitolium, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 4.2px
    textTransform: uppercase
  button-secondary:
    fontFamily: Capitolium, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    letterSpacing: 2px
    textTransform: uppercase
  nav:
    fontFamily: Gilroy, Arial, sans-serif
    fontSize: 11.2px
    fontWeight: 700
    lineHeight: 16.8px
    textTransform: uppercase
  input:
    fontFamily: Gilroy, Arial, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: 0.7px
rounded:
  xs: 2px
  sm: 4px
spacing:
  s1: 3px
  s2: 5px
  s3: 8px
  s4: 9px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 9px 20px
    height: 39px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 10px 20px
    height: 43px
  button-light:
    backgroundColor: "{colors.cream}"
    textColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 3px
  text-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    padding: 10px
    height: 50px
    borderColor: "{colors.on-primary}"
  destination-panel:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
---

## Overview

Avani Hotels & Resorts is a Minor Hotels brand (the page's footer line reads "Avani Hotels & Resorts is a Minor Hotels brand. Rewarding every journey with the Minor DISCOVERY loyalty programme."). The measured page, https://www.avanihotels.com/en (title "Avani Hotels & Resorts Official Site | Book Hotels Online"), is 5226px tall at 1280px wide with 708 visible elements. It reads as a booking-led brand homepage that is quiet and pale in the middle and dark aubergine at the edges.

From the top: a thin language row (Thai, Simplified Chinese, Japanese, Arabic, Deutsch, Español, Français, Hebrew, Italiano, Korean, Nederlands, Português, Русский, Tiếng Việt and a currency selector), a dark aubergine header with "AVANI HOME | LOYALTY" on the left, "MY BOOKING", "LOG IN", "SIGN UP" on the right, the centered AVANI "Hotels & Resorts" wordmark, a "BOOK NOW" button and a nav of HOTELS & RESORTS, OFFERS, FESTIVE, RESTAURANTS, MEETINGS, WEDDINGS, SPA, LOYALTY, CONTACT. A full-bleed lifestyle hero photograph follows (a person in white sunglasses against turquoise water), then a pale panel headed "Find your next destination..." that lists countries, cities and hotels in four columns and ends with an "ALL DESTINATIONS" button. A rotating promotional carousel (one captured slide reads "10.10 DEALS ... Save up to 25% when you book from 6 – 12 October", another "Save up to 35%") sits over beach and aerial photography with a centered dark "SEE MORE" or "BOOK NOW" button. "#AVANIHOTELS Connect with Avani" introduces a photo mosaic; "Now all in one place" and "JOIN MINOR DISCOVERY" promote the parent group and loyalty programme; the footer is aubergine with contact details ("ANY QUESTIONS?", a +66 telephone number and a reservations e-mail), social icons, link columns, a newsletter field and a row of Minor Hotels sister-brand logos. The capture also contains a cookie-policy dialog and a dimming scrim over the top of the page; these are not brand UI and are not documented. The copy voice is gentle and invitational ("Find your next destination...", "Ready for your next escape?").

## Colors

- **Aubergine `#350827`** is the brand color. It is the ink (2211 characters), the fill of every measured button, the header and footer band (a dark background area of 2677 area units) and the fill of the footer, so `ink`, `primary` and the dark surfaces share one hex.
- **Canvas `#f1eff0`** is the body fill and the largest measured background area (5956); **surface `#f7f6f3`** (1477) is the pale destination panel. The capture's two most common pixel colors are a near-`#f6f5f2` light and a near-`#360928` dark, matching these.
- **On-primary `#ffffff`** (1744 characters) is text on aubergine: button labels, footer text, the newsletter field.
- **Cream `#f3f2ed`** (26 characters; also the declared `--button-default-bgcolor`, `--textLinkColor` and hover/border color) is the light button fill and the footer link tint.
- Declared button variables: a default light button (`--button-default-bgcolor` `#f3f2ed`, text `--button-default-textcolor` `#350827`, hover transparent with `#f3f2ed` text and border) and a reversed one (`--button-revert-bgcolor` transparent, text white, hover fill `#f3f2ed` with `#350827` text). The measured buttons on the page are aubergine with white text. The same stylesheet declares `--mn_naladhu_color` `#00b5cc`, a sister-brand color that does not appear in the Avani measurements and is not part of this palette.
- The cookie dialog's `--popup_backgroup_color` (`#350827`) and `--popup_overlay_color` (`#000000`, measured as a 1024-unit black background area) belong to the dialog and scrim, not to the brand UI.

## Typography

Two web-font families carry the page: **Gilroy** (3798 characters) and **Capitolium** (161 characters), with Arial for 120 characters. Gilroy loads at weights 100 and 300; Capitolium at 700 (the measured buttons report weight 400). Weights by character: 400 (1720), 300 (1379), 700 (662), 600 (141), 500 (110), 100 (67).

- **Display**: Gilroy 50px / 62.5px, weight 100, letter-spacing 1px, `#350827` ("Find your next destination..."). A hairline weight at a large size is the signature.
- **Subheading**: Gilroy 12px / 18px, weight 400, 3px tracking, uppercase ("#AVANIHOTELS").
- **Body**: Gilroy 16px / 24px, weight 300, 0.8px tracking. The destination list is 14px with 0.7px tracking (884 characters), and 18px with 0.9px (366).
- **Button**: Capitolium 14px / 21px, weight 400, 4.2px tracking, uppercase. Secondary button: Capitolium 16px with 2px tracking.
- **Nav**: Gilroy 11.2px / 16.8px, weight 700, uppercase (language links).
- **Input**: Gilroy 14px / 24px, weight 300, 0.7px tracking.

Letter-spacing is applied at most measured sizes, which gives the page an airy feel. Substitutes if Gilroy and Capitolium are not licensed: a geometric sans in weights 100 to 300 for display and body, and a wide-tracked serif or sans in capitals for buttons; the page's own fallback is Arial.

## Layout

The layout is a full-width stack of bands: header, hero, destinations panel, promo carousel, social mosaic, parent-group banner, loyalty banner, footer. The destination panel is a four-column list with country names in small tracked capitals, city names in regular text and hotel names indented with a chevron. The panel's headline is centered; the lists are left aligned in columns. The carousel uses left and right arrow controls and two or three dots. The footer is 942px tall, aubergine, with call and e-mail on the left, "FIND US ON" social icons on the right, three link columns (About Avani, Airline Partners, Avani map, Press, Best Price Guarantee; Contact, Careers, GDS, Blog; Minor DISCOVERY links) and the sister-brand logo row.

Measured paddings are 10px (29 uses), 3px (28), 20px (19), 5px (10) and 50px (10); gaps are 10px (6) and 15px (2). Density is high in the destination list and the footer, and low in the photographic bands.

## Elevation & Depth

Depth is limited: no box-shadow was measured on the desktop page. The stylesheet declares shadows (`inset 0 1px 1px rgba(0,0,0,0.075)`, `0 15px 19px 1px rgba(0,0,0,.15)`, `0 4px 4px 0 rgba(0,0,0,.25)` and others) but none are seen in the measured roles. Separation comes from color bands (pale panel between dark header and footer) and photography. Borders measured: `#ffffff` (3 elements), `#350827`, `#2b2b2d`, `#e8e8e8` and `#f3f2ed` (one each).

## Shapes

Edges are nearly square. The measured button radius is `2px` (12 elements), one element measures `4px`, and one measures `50%` (an element not identified in the extraction). Photographs are full-bleed rectangles; carousel arrows are plain triangles.

## Components

- **Button primary**: "ALL DESTINATIONS": aubergine `#350827` fill, `#ffffff` text, Capitolium 14px/21px, 4.2px tracking, uppercase, radius `2px`, padding `9px 20px`, 39px tall, 224px wide. "BOOK NOW" in the header measured 41px tall and 149px wide with the same padding.
- **Button secondary**: "DISCOVER MORE": same fill and text, Capitolium 16px, 2px tracking, padding `10px 20px`, 43px tall, 200px wide.
- **Light button (declared)**: `#f3f2ed` fill, `#350827` text, from the stylesheet variables; its reversed hover is documented under Colors.
- **Link**: Gilroy 11.2px/700 uppercase, 3px padding, `#350827`.
- **Text input**: the newsletter field in the footer: Gilroy 14px/300, white text, `1px solid #ffffff` border, 10px padding, 50px tall, 350px wide.
- **Destination panel**: `#f7f6f3`, Gilroy 14 to 16px lists, chevron-prefixed hotel names.
- **Footer**: aubergine, white text, 942px tall.
- Not documented: the cookie dialog with its "Yes, I accept" button, and the scrim.

## Design System Architecture

No public design system or brand guidelines for Avani could be opened: the pages requested during writing (https://www.avanihotels.com/en and https://www.avanihotels.com/en/about-us) returned HTTP 403 to the fetch tool (recorded in SOURCES.json), and the extractor's mobile pass was served a block page. The system recovered from measurement is the shipped stylesheet: 19 `:root` custom properties, mostly a button theme (`--button-default-*`, `--button-revert-*`, `--button-text-size` 12px), text colors (`--textColor`, `--titleColor`, `--textLinkColor`, `--textLinkDecoration` underline, `--white`) and dialog colors (`--popup_*`), with one sister-brand color variable. The loaded fonts are `Gilroy` (100, 300), `Capitolium` (700) and an `icons` font; the font-face list also names `lg`, `slick` and `Glyphicons Halflings`, the face names used by the Slick carousel and Bootstrap 3 icon fonts. The page footer positions Avani as one brand in the Minor Hotels portfolio and loyalty programme (Minor DISCOVERY).

## Do's and Don'ts

- Do use aubergine `#350827` for ink, buttons, header and footer; pair with pale `#f1eff0` and `#f7f6f3`.
- Do set headlines in Gilroy at weight 100 and 50px with 1px tracking.
- Do set buttons in tracked Capitolium capitals (4.2px at 14px) with a 2px radius.
- Do let full-bleed lifestyle photography carry the mood, with a single centered button over it.
- Don't document the cookie dialog, its "Yes, I accept" button or the dimming scrim as brand UI.
- Don't use the sister-brand `#00b5cc` as an Avani color.
- Don't use heavier display weights; the measured display weight is 100.
- Don't round buttons beyond 2px.

## Responsive Behavior

Not measured. The extractor's mobile pass was served a bot-block page (h1 "Sorry, you have been blocked") and its values (a 28px `gravurcondensed` headline, an 8px `lato` footer line) describe that block page, not Avani; they are discarded and no mobile token is kept. Breakpoints, nav behavior and layout at narrow widths were not measured.

## Iteration Guide

1. Build the shell from aubergine `#350827` (header, footer, buttons), `#f1eff0` canvas and `#f7f6f3` panels.
2. Use Gilroy for text (100 for display at 50px, 300 for body at 16px, 700 for 11.2px nav) and Capitolium for buttons.
3. Track letters everywhere: 0.7 to 1px for text, 3px for small caps labels, 4.2px for button caps.
4. Make buttons rectangles with `9px 20px` padding, `2px` radius and white label text.
5. Capture with the cookie dialog dismissed before measuring further pages; re-measure mobile when the block page is not served: `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=avani --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=avani`.
