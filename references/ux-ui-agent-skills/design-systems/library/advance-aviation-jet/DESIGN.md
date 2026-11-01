---
version: alpha
name: Advance Aviation
category: "Thai Brands"
description: "Thai private jet and helicopter charter operator measured at advanceaviation.co.th: light grey #eeeeee page, uppercase Kanit 300 and 400 type at 14px to 28px, orange #ff6600 accents with a #ff6413 hover, square photo tiles with thin white labels and a grey photographic footer band."
colors:
  canvas: "#eeeeee"
  page-body: "#dddddd"
  ink: "#4f4f4f"
  primary: "#ff6600"
  primary-hover: "#ff6413"
  surface-overlay: "#71706f"
  surface-dark: "#3a3a3a"
  on-dark: "#ffffff"
  ink-muted: "#6d6d6d"
  accent-amber: "#ff9900"
  ink-nav: "#4c4c4c"
  footer-text: "#7a7a7a"
typography:
  display:
    fontFamily: Kanit
    fontSize: 28px
    fontWeight: 400
    lineHeight: 30.8px
    textTransform: uppercase
  heading:
    fontFamily: Kanit
    fontSize: 18px
    fontWeight: 300
    lineHeight: 19.8px
    textTransform: uppercase
  subheading:
    fontFamily: Kanit
    fontSize: 24px
    fontWeight: 400
    lineHeight: 26.4px
    textTransform: uppercase
  body:
    fontFamily: Kanit
    fontSize: 14px
    fontWeight: 400
    lineHeight: 25.2px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 5px
spacing:
  s1: 4px
  s2: 10px
  s3: 15px
  s4: 20px
  s5: 50px
  s6: 60px
components:
  nav:
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
    padding: 0px 10px
  footer:
    textColor: "{colors.footer-text}"
---

## Overview
Advance Aviation (page title "Advance Aviation - Private Jet Thailand Service", lang en-GB) is a private aviation company offering Gulfstream private jet charter and VIP helicopter charter in Thailand, with helicopter bases in Bangkok, Phuket and Chiang Mai. The main menu is Home, About Us, Helicopter, Private Jet, Photo Gallery, Contact Us and Our Blog, with submenus (Founder's Message and History; Bangkok, Phuket and Chiang Mai Bases, Our Services and FAQs; Private Jet Charter, Aircraft Fleet and Inflight Services; Private Jet Photo and Helicopter Photo) and a language switcher (English, Thai). The footer has share buttons, a 2026 copyright, a theme credit to MageeWP Themes and a "TOP" button, and a 24-hour call centre block with phone numbers for each base.

The capture is a hospitality-style photo page. A tall full-width hero photograph of a fruit plate and fork, softly blurred, carries the black-and-orange "ADVANCE AVIATION" logo at the top left and uppercase grey navigation links across the top right. Below it, on a light grey page, six square photo tiles in two columns (Private Jet, Helicopter, About Us, Our Blog, Gallery, Contact Us) show passengers, a helicopter, a cabin table, a bridge aerial, a couple in a jet cabin and pilots, each with a light uppercase thin-weight label at the bottom and a thin orange underline. A grey photo band at the bottom shows the quote "IT'S BEEN SAID THAT \" LIFE IS A JOURNEY, NOT A DESTINATION\"... SHOULDN'T BOTH MATTER?!" with a paragraph on comfort and the call centre numbers, whose "HELICOPTER CHARTER:" label is orange. A consent scrim was hidden during measurement (the extraction records "scrim pbOverlay"), so it is not documented.

## Colors
The page is `{colors.canvas}` (#eeeeee, 1709 area units) with `{colors.page-body}` (#dddddd) as the body background, `{colors.surface-overlay}` (#71706f, 501) for the translucent grey over the footer photo, `{colors.surface-dark}` (#3a3a3a, 266) and a darker #353535 (79). Text is white (`{colors.on-dark}`, 546 weight, over photos), `{colors.ink}` (#4f4f4f, 141), `{colors.primary}` (#ff6600, 101), `{colors.ink-muted}` (#6d6d6d, 64, the nav link colour), `{colors.accent-amber}` (#ff9900, 38), `{colors.ink-nav}` (#4c4c4c) and `{colors.footer-text}` (#7a7a7a).

`{colors.primary}` is the orange of the logo mark, label underlines and the "HELICOPTER CHARTER:" label. Nav links hover from #6d6d6d to rgb(255, 100, 19) (`{colors.primary-hover}`). The stylesheet's social share buttons carry platform colours (#0866ff, #1d9bf0, #e60023, #12af0a, #00c300) as one-unit areas; they belong to the share icons and are not declared.

## Typography
Kanit (300 and 400) is the single family, in uppercase everywhere. Font Awesome 5 and dashicons supply icons; the stylesheet also references Roboto and a "selfFont, Open Sans" stack for the mobile toggle.

- `{typography.display}`: Kanit 400 at 28px / 30.8px, uppercase (the h1 slot, which is empty text with white colour).
- `{typography.subheading}`: Kanit 400 at 24px / 26.4px, uppercase, for the quote heading.
- `{typography.heading}`: Kanit 300 at 18px / 19.8px, uppercase, for "SHARE".
- `{typography.body}`: Kanit 400 at 14px / 25.2px, uppercase. The nav links use the same size with a 70px line-height.

There is no size above 28px in the measured roles; the tile labels in the capture are larger, but their size was not isolated. Font substitutes: Kanit is a Google Font with Thai support, so no substitute is needed.

## Layout
Desktop width 1280px, page height 2796px, with `consentOverlaysHidden`. The menu bar is a transparent 70px-high overlay on the hero. The tile grid is two columns of square images in a centred column, with small gaps between tiles; the content column for headings and the footer text is 1140px wide. Spacing steps are 4, 10, 15, 20, 50 and 60px. The footer is a two-column band: quote at the left, call centre at the right.

## Elevation & Depth
Role-level shadows are none. The stylesheet has inset shadows such as `inset 0px 0px 3px 1px #0ff` and `0 1px 1px rgba(0,0,0,.8)` from its plugins, and none is seen on the tiles. Depth comes from photographs and a translucent grey overlay on the footer image. Do not add shadows.

## Shapes
Element radii measured: 4px (7 elements) and 5px (6), exposed as `{rounded.xs}` and `{rounded.sm}`. The CSS corpus has many radii, dominated by 0px (240 uses), 2px (105) and 4px (53), from the theme and plugins. The photo tiles are square-cornered in the capture.

## Components
**Navigation**: uppercase Kanit 14px links in `{colors.ink-muted}`, padding 0px 10px, 70px high, with chevrons for dropdowns; hover turns text orange.

**Image tile**: square photograph with an uppercase thin label near the bottom, white, with an orange underline.

**Contact block**: white uppercase text with an orange label ("HELICOPTER CHARTER:") and telephone numbers per base.

**Footer**: grey overlay on a photograph, text `{colors.footer-text}` for the share heading and white for the quote.

**Language switcher**: flag icon with a chevron in the header.

## Design System Architecture
No brand guideline or design system is linked from the homepage opened for this document (https://www.advanceaviation.co.th/); the footer credits the MageeWP Themes WordPress theme, and the shipped CSS has no root variables (the extraction found none). The de-facto system is therefore a WordPress theme with Font Awesome, dashicons and share-button plugins, one typeface (Kanit), grey neutrals and one orange. Tokens are derived directly from computed styles.

Voice and content: the copy is service-led and in English uppercase ("ADVANCE JET HOLDS TIME FOR TRAVEL AS A VALUED INVESTMENT AND WE SURROUND OUR PASSENGERS WITH COMFORT EVERY STEP OF THE WAY"). The quote used as a footer heading frames the product as an experience: "It's been said that life is a journey, not a destination... shouldn't both matter?!". The tile labels are plain section names (Private Jet, Helicopter, About Us, Our Blog, Gallery, Contact Us), so the home page works as a visual menu to those sections rather than as a long scroll.

Imagery: the photographs show passengers and crew in real settings (a father holding a child beside a jet door, pilots in headsets, a couple opening a gift box in a cabin), food and glassware in softly blurred focus, and an aerial view of a bridge. They are warm-toned and shallow-focus, which makes the grey page and thin white labels recede. The logo is a black and orange wordmark "ADVANCE AVIATION" with an oversized "A".

The contact block lists the helicopter charter numbers for Bangkok, Phuket and Chiang Mai and a private jet charter number at Don Muang, with a "CALL CENTER (24 HOURS SERVICE)" heading, so telephone numbers are shown as plain uppercase text lines rather than as buttons.

## Do's and Don'ts
- Do set all text in uppercase Kanit, using weight 300 for small headings.
- Do let photography carry the page and label tiles with thin white uppercase text and an orange underline.
- Do reserve orange `{colors.primary}` for brand marks, labels and hover.
- Do keep neutrals grey (#eeeeee, #dddddd, #4f4f4f).
- Don't use the social platform colours as brand colours.
- Don't add drop shadows to tiles.
- Don't document the cookie scrim or the TOP button as brand UI.

## Responsive Behavior
Measured at 390px: the h1 stays 28px / 30.8px (360px box), "SHARE" stays 18px / 19.8px, body text is 14px / 25.2px in white with a 360px wide box, and the header shows a "Toggle navigation" control in #cccccc instead of the menu. Tile columns and image sizing on mobile were not measured.

## Iteration Guide
1. Page `{colors.canvas}` with body `{colors.page-body}`, text `{colors.ink}`.
2. Everything uppercase Kanit; 14px for body and nav, 24px to 28px for headings.
3. Full-bleed hospitality photography for the hero; square photo tiles with thin white labels and orange underlines.
4. Orange `{colors.primary}` for brand accents and hover; amber `{colors.accent-amber}` for secondary highlights.
5. Footer as a grey overlay on a photograph.
6. Dark mode and tablet breakpoints are not measured.
