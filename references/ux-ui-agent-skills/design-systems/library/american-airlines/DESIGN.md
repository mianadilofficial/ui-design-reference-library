---
version: alpha
name: American Airlines
category: "Airlines"
description: "aa.com, American Airlines' booking site: white #ffffff canvas, slate #36495a body copy, #0078d2 link blue, #00467f navy headings and a #0860c4 Log in button set in AmericanSans Var 16px/700 with 3.5px corners, plus a cool grey #d0dae0 footer. Type runs through the proprietary AmericanSans, AmericanSansLight and AmericanSans Var families."
colors:
  canvas: "#ffffff"
  page-largest: "#d0dae0"
  ink: "#36495a"
  link: "#0078d2"
  heading: "#00467f"
  primary: "#0860c4"
  on-primary: "#ffffff"
  ink-strong: "#181e25"
  ink-deep: "#101419"
  ink-muted: "#627a88"
  alert: "#d14904"
  hairline: "#9da6ab"
typography:
  display:
    fontFamily: AmericanSans, Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.2px
  heading:
    fontFamily: AmericanSansLight, Helvetica, Arial, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 36px
  subheading:
    fontFamily: AmericanSansLight, Helvetica, Arial, sans-serif
    fontSize: 24.0001px
    fontWeight: 400
    lineHeight: 30px
  body:
    fontFamily: "\"AmericanSans Var\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"AmericanSans Var\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 21px
    letterSpacing: 0.16px
  input:
    fontFamily: Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 3px
  md: 3.5px
  lg: 4px
  xl: 18px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 10.5px
  s8: 12px
  s9: 14px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 14px
    height: 48px
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    border: "1px solid #0860c4"
    padding: 0px 18px
    height: 48px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 8px 27px 9px 9px
    height: 35px
    borderColor: "{colors.hairline}"
---

## Overview

aa.com is a working tool before it is a brand showcase. The measured home page (finalUrl `https://www.aa.com/homePage.do?locale=en_US`, title "American Airlines - Airline tickets and low fares at aa.com") opens on a utility row with a language picker and a "Search AA.com" field, then a header with the centenary "100" mark beside the oneworld roundel, three plain navigation labels (Plan travel, Travel information, AAdvantage) and a pair of account buttons: a filled blue "Log in" and an outlined "Join". Below that, a photographic hero banner (in the capture, a snowy alpine scene with skiers) carries a thin blue headline; that headline is not present as text in the extraction, so its size is not measured.

The hero hands straight over to the booking widget, which is the real centre of the page. Three large tabs (Book, Manage trips / Check-in, Flight status) sit on top of a white form with small pill toggles (Flight, Vacation packages, Hotel, Car, Cruise, Experiences), radio buttons for Round trip or One way, a Redeem miles checkbox, and rectangular From/To/Depart/Return fields. Under the widget the page becomes an editorial grid: "Today's offers" in three photo cards, then "News and offers", "Plan your next adventure" and a Citi / AAdvantage card promotion, and finally a cool grey footer with three link columns (Help, About American, Extras).

The voice is plain and transactional ("Use cash and miles together", "Search flights and book", "Bag and optional fees »"). Links end in a » chevron or an external-window glyph, and the footer explains that glyph: "Link opens in new window. Site may not meet accessibility guidelines." Everything reads as calm, light and blue, with orange reserved for the Travel alerts control.

## Colors

The palette is a family of blues on white with slate text.

- **canvas `#ffffff`**: the body background and the background of the booking form and editorial sections.
- **page-largest `#d0dae0`**: the cool blue-grey that covers the largest measured area; in the capture it is the footer band and the inactive booking tabs sit in a similar pale tone.
- **ink `#36495a`**: slate body copy, the second most-read text color and the color of form field text. It is the color for paragraphs such as offer descriptions.
- **link `#0078d2`**: the most-read text color on the page, because so much of the home page is links: widget links, offer links, the tab labels "Manage trips / Check-in" and "Flight status". Hover adds an underline without changing the color (measured).
- **heading `#00467f`**: deep navy used for the "Today's offers" section heading and the active "Book" tab label.
- **primary `#0860c4`**: the fill of the "Log in" button and the border and text of "Join". It also colours some inline links ("Travel inspiration with AI").
- **on-primary `#ffffff`**: label color on the filled button.
- **ink-strong `#181e25`** and **ink-deep `#101419`**: near-black text tones measured in the page's text colors.
- **ink-muted `#627a88`**: the blue-grey of the offer card headlines ("Use cash and miles together", "Escape to The Bahamas").
- **alert `#d14904`**: burnt orange for the "Travel alerts »" control, used for text and its 1px border.
- **hairline `#9da6ab`**: the 1px border of the From/To/Depart/Return inputs.

There is no dark theme in the measurement. The root variables on the page are Angular Material defaults (`--mat-*`, `--mdc-*`, e.g. `--mat-badge-background-color: #3f51b5`); they belong to an embedded component library, are not visible on the home page, and are not brand colors.

## Typography

American's type is proprietary. The page loads four families: `AmericanSans` (400), `AmericanSansLight` (400), `AmericanSans Var` (a variable font with a 100–1000 weight axis) and an icon font, `American Icons`. By characters rendered, AmericanSans Var dominates, followed by Arial (form inputs), the icon font, AmericanSansLight and AmericanSans.

- **display**: AmericanSans 24px/31.2px, weight 400. The extractor's largest hero text is the "Book" tab label, so this token is the tab label style rather than a marketing headline.
- **heading**: AmericanSansLight 30px/36px, weight 400, for section headings such as "Today's offers".
- **subheading**: AmericanSansLight 24.0001px/30px, weight 400, for card headlines in `#627a88`.
- **body**: AmericanSans Var 14px/20px, weight 400. 14px is the most common size on the page, followed by 16px and 18px.
- **button**: AmericanSans Var 16px/21px, weight 700, letter-spacing 0.16px. The 0.16px tracking is the page's only measured letter-spacing and appears on all 16px text.
- **input**: Arial 14px, weight 400, inside the booking fields.

Only two weights appear: 400 for almost everything and 700 for buttons and labels. The light cut at large sizes is what makes headings feel airy. Substitutes for AmericanSans are not published by American; the site's own fallback stack is Helvetica, then Arial, then sans-serif, and that is the safe stand-in.

## Layout

On the 1280px desktop pass the page is 2208px tall. The first band, from the top to the end of the editorial content, measures 1642px on white with content between x=135 and x=1145 (a 1010px column) and up to three columns; the footer is a separate grey band. The booking widget is the widest content object, and the offer grid is three equal photo cards with a headline, two lines of description and a link beneath each.

Spacing is small and specific. The most frequent paddings are 14px, 12px, 9px, 10.5px and 8px; the most frequent gaps are 10.5px and 8px. The input padding `8px 27px 9px 9px` leaves room for the in-field search or calendar icon at the right. Large values appear once each (25px, 36px, 38px, 40px, 112px), so the site does not run a strict 4- or 8-pixel scale. A thin rule separates the widget from the offers and the offers from the secondary row.

## Elevation & Depth

The page is mostly flat. Measured box-shadows are rare: an inset double ring (`rgb(255, 255, 255) 0px 0px 0px 2px inset, rgb(208, 218, 224) 0px 0px 0px 3px inset`, three uses) and a three-layer drop shadow used once by the cookie notice, which is not brand UI. Depth comes instead from layering: the booking widget overlaps the bottom of the hero photo, and the inactive tabs are tinted grey against the white active tab. Borders do the rest of the separation work: 1px `#9da6ab` around inputs, 1px `#0860c4` around Join, 1px `#d14904` around Travel alerts.

## Shapes

Corners are small. The measured radii are 3.5px (32 uses, the default for buttons such as Log in and Join), 4px, 3px, 2px and 18px, plus `50%` for circles (the social icons in the footer and the radio buttons in the capture). Inputs have square 0px corners. The Travel alerts control has a `0px 0px 5px 5px` radius, rounded only at the bottom so it hangs from the rule above it, and one element uses `3px 3px 0px 0px`, rounded only at the top. The pill toggles in the booking widget are fully rounded in the capture.

## Components

- **Primary button (Log in)**: `#0860c4` fill, white AmericanSans Var 16px/700 label with 0.16px tracking, 3.5px corners, `0px 14px` padding, 48px tall on desktop.
- **Outlined button (Join)**: white fill, `#0860c4` text and 1px `#0860c4` border, same type, 3.5px corners, `0px 18px` padding, 48px tall. It always sits to the right of Log in.
- **Text link**: `#0078d2` AmericanSans Var 14px/20px. On hover the measured change is an underline only; color, background and height stay the same. Keyboard focus draws a 2px solid `#0078d2` outline with a 1px offset (measured on Travel alerts).
- **Booking tabs**: label text is AmericanSans 24px, with 12px padding and 55px height; the active tab is white with navy `#00467f` text, inactive tabs show `#0078d2` text.
- **Text input**: white, 1px `#9da6ab` border, square corners, Arial 14px in `#36495a`, 35px tall, `8px 27px 9px 9px` padding with an icon at the right edge.
- **Travel alerts**: white control with `#d14904` text and border, a warning triangle icon and bottom-only 5px corners; hover underlines the label.
- **Offer card**: full-bleed photo, AmericanSansLight 24px headline in `#627a88`, 14px description, a `#0078d2` link with a » chevron. No border, shadow or background.
- **Footer**: `#d0dae0` band, column headings above a rule, link lists in dark text, partner logos at the right, social icons in outlined circles.

## Design System Architecture

No public American Airlines design system or brand guideline was found. The newsroom's logo page (https://news.aa.com/multimedia/logos/default.aspx) offers logo downloads for American Airlines, American Airlines Cargo, AAdvantage and the wholly owned carriers, with no color values, typeface names or usage rules.

The shipped page shows how the system is assembled. Header pieces are custom elements (the primary CTA is measured on an `hp-header-button` element that wraps the visible anchor), the page bundles the Angular Material component library (its 400 root variables are all `--mat-*` / `--mdc-*` defaults), and the typography rests on three in-house font files plus a variable font and an icon font. Color is applied as literal values rather than brand CSS variables: there are no American-specific custom properties on `:root`. To rebuild the look, treat the tokens above as the system: three blues for action and links, navy for headings, slate for text, orange for alerts, a grey footer and small 3.5px corners.

## Do's and Don'ts

**Do**
- Keep the canvas white and put the booking widget first; the home page is organised around search.
- Use `#0078d2` for every inline link and add an underline on hover, as the site does.
- Pair a filled `#0860c4` button with an outlined `#0860c4` button for account actions.
- Set large headings in the light cut (AmericanSansLight) at 24–30px and weight 400.
- Use 3.5px corners on buttons and square corners on form fields.
- Mark external links with the new-window glyph and end call-to-action links with ».

**Don't**
- Don't use bold display type; the measured page has only 400 and 700, and 700 is for buttons.
- Don't use the Angular Material defaults (`#3f51b5`, `#ff4081`) as brand colors.
- Don't use `#d14904` for anything but alerts.
- Don't add heavy shadows to cards; offer cards are borderless and shadowless.
- Don't treat the cookie notice in the capture as a brand component.

## Responsive Behavior

The extractor's mobile pass recorded the following. The mobile header shows no visible header links and no menu toggle (`headerLinksVisible: 0`, `menuToggleVisible: false`). The "Book" tab label keeps the same 24px AmericanSans style, and the first h2 becomes "News and offers" at 24.0001px. The Log in button keeps its 16px/700 label but measures 36px tall instead of 48px. The mobile bands are recorded as single-column content: a 419px media band, a 482px white band (the widget), further media and white bands, and a 354px `#d0dae0` footer band. The most common mobile sizes remain 14px, 16px and 18px.

The stylesheet declares breakpoints, most often `max-width 767px` (12 rules) and `min-width 768px` (5 rules), followed by `max-width 896px`, `max-width 480px` and `max-width 1200px`. How the booking tabs and the offer grid re-flow at each breakpoint is not measured.

## Iteration Guide

1. Start from the white canvas, slate `#36495a` body text and `#0078d2` links; most of the page is these three.
2. Add navy `#00467f` for section headings and AmericanSansLight for their large sizes.
3. Use `#0860c4` only for the main filled button and its outlined twin; keep tracking at 0.16px on 16px labels.
4. Build forms with square 1px `#9da6ab` fields at 35px height and Arial 14px text.
5. Close the page with the `#d0dae0` footer band and three link columns.
6. Check each new screen against the capture: few shadows, small corners, many links, one orange alert.
7. When a value is missing (hero headline size, mobile grid behaviour), measure it on aa.com before adding a token.
