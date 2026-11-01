---
version: alpha
name: Scania Thailand
category: "Thai Brands"
description: "Scania Thailand (สแกนเนีย ประเทศไทย) country home page: deep navy #041e42 header and 80px Scania Sans Headline Bold headings on a white #ffffff canvas, full-bleed documentary truck and bus photography, square corners, body ink #000000de at 16px."
colors:
  canvas: "#ffffff"
  ink: "#000000de"
  primary: "#041e42"
  on-primary: "#ffffff"
  surface: "#242c37"
  surface-2: "#f6f7f9"
  ink-3: "#0b0c0f"
  ink-5: "#c3d8f7b8"
  ink-6: "#475467"
  hairline: "#aac9f699"
typography:
  display:
    fontFamily: "\"Scania Sans Headline Bold\", arial, helvetica, sans-serif"
    fontSize: 80px
    fontWeight: 700
    lineHeight: 80px
  display-mobile:
    fontFamily: "\"Scania Sans Headline Bold\", arial, helvetica, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 40px
  subheading:
    fontFamily: "\"Scania Sans Bold\", arial, helvetica, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: "-1.28px"
  body:
    fontFamily: "\"Scania Sans\", arial, helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Scania Sans Semi Condensed\", \"Scania Sans Condensed\", arial, helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-0.14px"
  nav:
    fontFamily: "\"Scania Sans\", arial, helvetica, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
rounded:
  xs: 4px
spacing:
  s1: 4px
  s2: 10px
  s3: 12px
  s4: 15px
  s5: 16px
  s6: 20px
  s7: 30px
  s8: 32px
  s9: 40px
components:
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
  footer:
    textColor: "{colors.ink-6}"
---

# Scania Thailand

## Overview
This is the Thai-language country home page of Scania (scania.com/th/th/home.html), measured at 1280px wide with a scroll height of 4164px. The page opens with a deep-navy header (#041e42) holding the SCANIA wordmark, the label "ประเทศไทย" and icon buttons for search, language, a tool/finder icon, an app grid and the griffin emblem. A second navy row lists the Thai menu: products, services, about Scania, contact, campaigns, dealer search, special offers and transport operations. A full-width aerial forest photograph carries the centered title "สแกนเนีย ประเทศไทย", and below it a white section holds the 80px navy headline "ยินดีตอนรับสู่เว็บไซต์สแกนเนีย ประเทศไทย" and a short paragraph about driving the shift to a sustainable transport system. Four large photographic banners follow, stacked with narrow gaps: trucks (a green Scania tractor on a coastal road), buses and coaches, services (a technician in a workshop) and a "40 years of Scania Thailand" (1986-2026) anniversary banner. Imagery is natural, wide-angle and documentary; labels sit directly on the photos in white bold Scania Sans. The voice is formal, corporate Thai.

Content and microcopy: the section labels are plain nouns in Thai (trucks/tractor units, buses/coaches, service), with no calls to action on the tiles themselves. The anniversary banner adds a gold-framed "40 THAILAND 1986-2026" badge over a photograph of the Scania Thailand building with its illuminated blue sign and griffin emblem. The hero carries a pause/play control. Density is low: four large tiles fill most of the first three screens, which keeps the page easy to scan and puts the product (trucks, buses, workshop people) ahead of text.

## Colors
- Canvas: #ffffff. A light grey surface #f6f7f9 and a dark slate #242c37 are the next most common backgrounds by area, with the navy #041e42 for the header and nav.
- Primary: #041e42, the Scania navy used for the nav background and the 80px headline. The extractor's generated primary was #2a6ecf, the fill of a "Cookie settings" button, which is a consent control and not brand UI; it is overridden here and removed. On-primary is #ffffff.
- Ink: #000000de (black at about 87% alpha) is the most-read text color, with #0b0c0f for darker copy, #475467 for footer text, and #c3d8f7b8 for translucent light-blue text on navy.
- Hairline: #aac9f699, a translucent blue-grey border.
There is no measured secondary accent in the content area; color comes from photography (forest green, the green truck).

## Typography
Scania's own typefaces are loaded: Scania Sans (regular and bold), Scania Sans Headline (regular and bold), Scania Sans Semi Condensed and Condensed (regular and bold), plus a Scania icon font ("scania-icons"). The stacks fall back to `arial, helvetica, sans-serif`. These are proprietary; Arial is the shipped fallback. The Thai text renders in the same families in the measured computed styles.
- Display: Scania Sans Headline Bold, 80px, weight 700, line height 80px (40px / 40px on the 390px mobile pass).
- Subheading: Scania Sans Bold, 32px, weight 700, line height 32px, letter-spacing -1.28px.
- Body: Scania Sans, 16px, weight 400, line height 24px.
- Button and condensed labels: Scania Sans Semi Condensed, 14px, 16px line height, -0.14px tracking.
- Nav links: Scania Sans, 10px with 15px line height in the measured nav-link role.
Most characters on the page are 16px (599), 14px (284), 12px (119), 20px (109), 24px (66), 80px (40) and 32px (18).

## Layout
The header is two navy bands (the measured nav element is 64px tall) with a full-bleed hero beneath. The welcome copy sits in a centered column narrower than the banners; the banner stack is inset from the viewport edges on both sides, with equal-height image tiles separated by small vertical gaps (visible in the capture). Spacing values recorded are 4px, 10px, 12px, 15px, 16px, 20px, 30px, 32px and 40px. The footer is a multi-column link list in #475467 at 14px (Products, Trucks, Buses, Solution groups and others), measured at 660px tall.

## Elevation & Depth
The page is strictly flat in the measured data. The dark slate #242c37 and navy #041e42 bands are used as solid fills (the slate shows up as the largest-area background in the measurement, consistent with the dark image tiles and footer-style bands), and light grey #f6f7f9 provides a quiet alternate surface.
No box shadows were recorded on the page. Depth comes from full-bleed photography, white overlay text on images, and flat navy and slate bands. Hairline borders (#aac9f699) are used on outlined controls.

## Shapes
The only measured corner radius is 4px (weight 2), found on the cookie-consent buttons. Everything else renders square: banner tiles, the navy bars and the hero are rectangular. Treat 4px as a minor, non-brand-defining value and default to sharp corners.

## Components
- **Top navigation**: navy (#041e42) background, white text, 12px labels, chevrons on items with sub-menus, icon-only utility buttons separated by thin vertical rules.
- **Hero**: auto-advancing photo with a centered title and a small play/pause arrow at the right edge.
- **Banner tile**: full-width photograph with a bold white label on the left or right.
- **Footer links**: #475467 text at 14px in columns.
- **Consent controls** (a 54px-tall "Cookie settings" button filled #2a6ecf and an outlined "Cookie policy" button with a #aac9f699 border, 4px radius) exist in the DOM but are third-party/consent UI and are not documented as brand components.

## Design System Architecture
No public design-system or brand-guidelines link was found on the home page (the page was scanned for brand, press, design-system, guideline and styleguide links and none were present). The de-facto system is Scania's own type family set (Scania Sans, Headline, Semi Condensed, Condensed, icons) and a navy/white palette, with the root-variable list empty in the measurement, so no named token set is exposed on this page.

## Do's and Don'ts
Guidance below is limited to what the measurement and capture show.
- Do use navy #041e42 for headers and key headings, white for canvas.
- Do set headlines in Scania Sans Headline Bold; set long Thai copy at 16px / 24px.
- Do put labels directly on photography in white bold type.
- Don't use #2a6ecf as a brand action color; it belongs to the cookie dialog.
- Don't round banner corners; none was measured.
- Don't add shadows; none was measured.

## Responsive Behavior
Only the mobile pass at 390px was measured: the h1 drops from 80px to 40px with a 40px line height and an 80px box. Nav collapse, banner reflow and other breakpoints were not measured.

## Iteration Guide
Practical order of work when rebuilding this page: first the two-row navy header (64px measured nav height), then the hero image with centered title, then the white welcome block, then the banner stack, then the footer. Check that every text color is one of the measured values (#000000de, #ffffff, #0b0c0f, #041e42, #c3d8f7b8, #475467) and that no element introduces a radius or shadow.
1. Start with canvas #ffffff, ink #000000de, primary #041e42.
2. Set display text in Scania Sans Headline Bold (Arial fallback) at 80px, 700.
3. Build the nav as two navy rows with white 12px labels.
4. Use full-width photographic banners with white bold labels.
5. Run `node web/scripts/verify-designs.mjs --slug=scania-thailand`.
Not measured: hover states, dark mode, motion, breakpoints other than 390px.
