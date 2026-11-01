---
version: alpha
name: Flabbergast Agency
category: "Portfolio"
description: "Flabbergast Agency: a near-black #151515 canvas with off-white #fafafa text, Aeonik Regular at 83.264px with -1.66528px tracking for the hero line, Aeonik Fono uppercase mono labels at 12.96px, a red #e62200 footer, and a white 10px-radius service card over team photography."
colors:
  mango: "#f7b334"
  slate: "#3c5163"
  gray-mid: "#888888"
  canvas: "#151515"
  page-body: "#fafafa"
  ink: "#fafafa"
  primary: "#fafafa"
  brand-red: "#e62200"
  brand-red-overlay: "#ff3714"
typography:
  display:
    fontFamily: Aeonik-Regular, sans-serif
    fontSize: 83.264px
    fontWeight: 400
    lineHeight: 91.5904px
    letterSpacing: "-1.66528px"
  display-mobile:
    fontFamily: Aeonik-Regular, sans-serif
    fontSize: 50.08px
    fontWeight: 400
    lineHeight: 55.088px
    letterSpacing: "-1.0016px"
  heading:
    fontFamily: Aeonik-Regular, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  body:
    fontFamily: Aeonik-Regular, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27px
  nav:
    fontFamily: AeonikFono-Regular, serif
    fontSize: 12.96px
    fontWeight: 400
    lineHeight: 15.552px
    textTransform: uppercase
  link:
    fontFamily: Aeonik-Medium, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 23.2px
rounded:
  xs: 1px
  sm: 8px
  md: 10px
  lg: 10.08px
  xl: 15.04px
  2xl: 19.1px
  3xl: 23.33px
spacing:
  s1: 3px
  s2: 4.96px
  s3: 10.08px
  s4: 15.04px
  s5: 19.1px
  s6: 28.29px
  s7: 38.37px
  s8: 58.37px
  s9: 66.66px
  s10: 76.74px
components:
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 15.04px 19.104px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.brand-red}"
    textColor: "{colors.page-body}"
    padding: 0px 38.368px
    transform: matrix(1, 0, 0, 1, 0, -792)
---

## Overview
Flabbergast Agency (flabbergast.agency, page title "Flabbergast Agency", language en-US) is the site of a digital product studio. The capture shows a full-width hero of a team meeting in a glass-walled room, darkened slightly so the centred white headline "Building astonishing digital solutions." reads over it. The top bar is transparent: the wordmark FLABBERGAST at the left, a translucent grey pill labelled MENU with two small icon buttons in the middle, and CONTACT at the right. Below the hero the canvas turns near-black (#151515) and a single narrow white card sits centred, containing a rounded photograph of colleagues around a table, the statement "We help businesses design, develop, and position their products as formidable solutions that inspire.", a numbered list of services (01 User Research, 02 Product Design, 03 Branding, 04 Mobile & Web Development) separated by hairlines, and an outlined LEARN MORE button. The measured page is 17,883px tall, much longer than this opening, and its footer is a red field with the uppercase statement "DESIGNERS AND DEVELOPERS WHO BUILD PRODUCTS THAT...". The tone is plain and self-assured: short claims, no project managers, individual responsibility.

## Colors
Two neutrals and a red carry the identity. The canvas is #151515 (by far the largest area), with #fafafa as the light ink and card fill; text splits almost evenly between dark ink #151515 on the white card (811 characters) and light #fafafa on the dark canvas (536 characters). The signature color is a saturated red: #e62200 fills the footer area and #ff3714 (the stylesheet's red-overlay variable) fills another large area and the border color of many elements (36 measured). A light grey #f2f2f2 covers a smaller area. The stylesheet also defines mango #f7b334, slate #3c5163 and a mid grey #888; these are brand variables, but the capture does not show where they are used, so their role is not documented. WordPress preset colors (vivid purple, pale pink and so on) are CMS defaults and not brand colors. There is no distinct action color in the measured data: primary is the same off-white as the text.

## Typography
The family is Aeonik, in three cuts: Aeonik-Regular (weight 400) for headlines and body, Aeonik-Medium (weight 500) for the wordmark and links, and AeonikFono-Regular (weight 400) for uppercase labels, the numbers in the service list and the nav and footer text. The hero display style is 83.264px with a 91.5904px line height and -1.66528px letter spacing; the heading is 32px with a 38.4px line height; body copy is 20px with a 27px line height; nav labels are 12.96px uppercase with a 15.552px line height; the link style (the wordmark) is 16px at weight 500 with a 23.2px line height. On a 390px viewport the hero headline measured 50.08px with a 55.088px line height and -1.0016px letter spacing. The footer's uppercase statement measured 14.08px. Character counts are 870 for Aeonik-Regular, 466 for AeonikFono-Regular and 11 for Aeonik-Medium.

Font substitutes: Aeonik is loaded by the site and is a commercial typeface; a neutral geometric grotesque with a monospaced companion for labels is the nearest stand-in. The declared fallbacks are `sans-serif` for Aeonik and `serif` for Aeonik Fono in the measured stack.

## Layout
The page measured 1280px wide. The hero is a full-bleed image or video block with centred text. Beyond it the page uses centred narrow columns on a dark field: the white card sits centred, and the nav-link inside it measured 388px wide. The header sits over the hero, and the stylesheet defines breakpoints at 1140px, 1280px, 1440px, 1650px, 1920px and 3840px. Spacing is expressed in a scale of rem steps (`--s-5` 0.31rem, `--s-10` 0.63rem, `--s-15` 0.94rem) and the measured gaps are 28.288px, 19.104px, 76.736px, 4.96px and 38.368px; paddings include 10.08px (78 uses), 38.368px, 15.04px and 66.656px.

## Elevation & Depth
Depth is modest and mostly achieved through contrast: a white card floats on near-black, and the hero image is overlaid with a dark tint. The stylesheet defines a shadow `0 0 4px 1px rgba(0,0,0,.08)`, a focus ring `0 0 0 2px #fafafa,0 0 0 4px #151515` and WordPress shadow presets (including an outlined `6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0)` and a deep `12px 12px 50px rgba(0, 0, 0, 0.4)`), but the measured visible elements carried no shadow. The footer is positioned with a translate transform of -792px (its own height).

## Shapes
Corners are softly rounded. The card measured a 19.104px radius; the outlined button and nav pill a 8px radius; the most common measured radius, on 36 elements, is 10px; and smaller values of 1px, 10.08px, 15.04px and 23.328px appear. A 100px radius (pill) is used in the stylesheet as well. Photographs inside the card have their own rounded corners, and the MENU control in the header is a translucent rounded rectangle.

## Components
- **Header:** transparent over the hero; FLABBERGAST wordmark in Aeonik-Medium 16px, a translucent MENU bar with two icon buttons, and CONTACT in uppercase mono.
- **Service card:** #fafafa fill, 19.104px radius, a rounded photograph, a 32px statement and a four-row numbered list.
- **List rows:** the number in the mono face at small size, the service name in Aeonik, hairline dividers.
- **Outlined button (LEARN MORE):** #151515 text on #fafafa with a thin border, uppercase 12.96px AeonikFono, 8px radius, 15.04px 19.104px padding, 46px high.
- **Link:** the wordmark, #fafafa at 16px weight 500; on hover its opacity drops to 0.5.
- **Footer:** #e62200 fill, #fafafa text, uppercase AeonikFono at 14.08px, 38.368px side padding, 792px high.

## Design System Architecture
No public or official design-system documentation for Flabbergast Agency was opened for this entry; no brand-guideline link was seen on the pages measured. The shipped CSS shows a WordPress theme with its own token layer: spacing variables (`--s-5`, `--s-10`, `--s-15`), body-size variables (`--b1` 0.81rem, `--b2` 0.88rem), named colors (`--red`, `--red-overlay`, `--mango`, `--slate`, `--white` #fafafa, `--gray-2`), named breakpoints (`--breakpoint-lg` through `--breakpoint-xxxl`) and the standard `--wp--preset--*` variables from WordPress. Measured source: https://flabbergast.agency/ (extraction of 2026-10-09).

## Do's and Don'ts
- Do pair #151515 with #fafafa and reserve red (#e62200, #ff3714) for the footer and for borders.
- Do set the hero in Aeonik Regular with negative tracking and uppercase labels in Aeonik Fono.
- Do place content in a single white rounded card on the dark field and use numbered list rows.
- Do use team photography, not abstract artwork.
- Don't use the WordPress preset colors; they are CMS defaults.
- Don't add drop shadows to cards; none were measured.
- Don't give buttons filled backgrounds; the measured button is outlined.

## Responsive Behavior
The stylesheet declares breakpoints at 1140px, 1280px, 1440px, 1650px, 1920px and 3840px. The measured 390px pass shows the hero headline at 50.08px with a 55.088px line height and 360px width, the first section 2055px tall at 390px width (2283px on desktop), body text at 20px with a 27px line height and 360px width, and most-read sizes of 20px, 12.96px, 24px, 32px, 40px and 50.08px. How the header and card rearrange between the declared breakpoints was not measured.

## Iteration Guide
1. Set the canvas to #151515 with #fafafa text.
2. Open with a full-bleed team photograph, darkened, and the 83.264px headline with -1.66528px tracking.
3. Put the services in one #fafafa card with a 19.104px radius and number the rows in Aeonik Fono.
4. End on a #e62200 footer with uppercase statements.
5. Keep buttons outlined, 8px radius, 12.96px uppercase.
6. Use the spacing variables from the stylesheet rather than new values.
