---
version: alpha
name: "Electronics Extreme"
category: "Thai Brands"
description: "Electronics Extreme, a Thai online-gaming company: charcoal #252525 bars, orange #f79533 accents and outlined Readmore buttons, white Kanit text at 16px to 20px, 10px-radius selector, warm hero photography."
colors:
  canvas: "#252525"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#f79533"
  ink-3: "#707070"
  ink-4: "#92e9e9"
  text-input-text: "#495057"
  text-input-border: "#ced4da"
typography:
  display:
    fontFamily: Kanit-ExtraLight
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
  display-mobile:
    fontFamily: Kanit-ExtraLight
    fontSize: 48px
    fontWeight: 700
    lineHeight: 57.6px
    textTransform: uppercase
  nav:
    fontFamily: Kanit-ExtraLight
    fontSize: 20px
    fontWeight: 500
    lineHeight: 30px
  button-secondary:
    fontFamily: Kanit-ExtraLight
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: Kanit-ExtraLight
    fontSize: 22.4px
    fontWeight: 400
rounded:
  xs: 10px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 5px 0px
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 4px 8px
    height: 46px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 48px 0px 0px
---

# Electronics Extreme

## Overview

Electronics Extreme (https://www.extreme.co.th/home, page title "Electronics Extreme - Extreme Your Gaming World") is a Thai online-gaming company, and its home page presents the company as a games publisher and community builder. The measured page is 2193px tall at 1280px with 133 visible elements. The capture shows a dark charcoal navigation bar (`#252525`, 77px tall) with the orange-and-grey "EX" play-button logo and the words "ELECTRONICS EXTREME" at left, and white menu items at right: Company, News, Partners, Careers, Products (with an orange chevron) and Contact.

The hero is a full-width warm photograph of a sun-lit city skyline and cloudy sky with a faint world map and connecting lines, carrying the large centred logo (orange circular play mark with a grey "X" and the wordmark EXTREME in orange and dark grey), with two "THAILAND GAME AWARDS 2017" gem-shaped trophy images at the lower right ("BEST MMORPG", "BEST EXHIBITOR"). Below it a near-white "ABOUT US" section (heading with an orange circular icon and a pale first letter), a quotation-marked paragraph that begins "Electronics Extreme Co., Ltd. recognizes the importance of the online community…", and a "Readmore" outlined button. Then a split row of two photographic panels, PARTNERS (hands with a tablet) and CAREERS (a handshake or document scene), each with a heading, an orange icon and a short paragraph. The footer is dark with the logo, a NAVIGATE list with orange chevrons, "CONNECT WITH US" social icons (Facebook, YouTube and a green mail-style icon), a "CONTACT US" block with a country selector (Thailand) and an address in Nonthaburi, and an orange copyright bar.

Several sections were partly faded in at the moment of capture, so their text looks pale; the measurement still records their real colours. The tone is energetic, friendly and gaming-oriented, in short English company copy.

## Colors

- Canvas `#252525` (508 by area): the nav, the footer and the dark theme base.
- Orange `#f79533` (`primary`, 83 by area and 44 characters): the logo, the Readmore button text and border, the footer headings and the copyright bar fill.
- White `#ffffff` (`ink`, 312 characters; page-body 13 by area): menu text, headings on dark.
- Grey `#707070` (`ink-3`, 29 characters), and teal `#92e9e9` (`ink-4`, 22 characters), which colours the e-mail link in the footer.
- Input colours `#495057` for text and `#ced4da` for the border come from the country selector.
- Hover: nav items gain a `rgb(50, 50, 50)` background (`#323232`) with white text.

Root variables also contain Bootstrap defaults and SweetAlert2 settings (`--yellow: #ffc107`, `--red: #dc3545`, `--swal2-*`). These are framework defaults, not brand colours. The anchor colour `#007bff` measured on an empty navigation anchor is likewise Bootstrap's default link colour; the capture shows the menu in white, so it is dropped from tokens.

## Typography

One family is measured: Kanit, loaded under the name `Kanit-ExtraLight` (the face name is as measured; the rendered weights are 400 for 336 characters, 500 for 41 and 700 for 30). Font Awesome 5 Free supplies icons.

- `display` (the first heading role, the "Company" menu item): 18px/27px, weight 500.
- `nav`: 20px/30px, 500, for navigation anchors.
- `button-secondary`: 16px/24px, 400.
- `input`: 22.4px, 400.
- Mobile `display-mobile`: 48px/57.6px, 700, uppercase, resolving to the "ABOUT US" heading.
- Footer headings: 24px/28.8px, 400, uppercase, orange.
- Other sizes: 16px (158 characters), 14.4px (143), 18px (70), 24px (33) and 56px (3).

No letter-spacing was measured. The footer is the only place where a larger size appears at regular weight: its headings NAVIGATE, CONNECT WITH US and CONTACT US are uppercase 24px orange text on the charcoal band, while the links below them are small white 14.4px text with an orange chevron. Section headings in the capture pair a pale large initial with the rest of the word in a light weight; that effect uses the same family.

## Layout

Full-width bands: header 77px, hero image, a white About block, a two-column split (two halves side by side) and a 320px-tall footer with padding `48px 0px 0px`. Navigation items have padding `25px 20px` in the first heading role and `5px 0px` on anchors. Spacing values measured are 15px (22 instances), 6px, 12px, 25px, 20px, 8px, 48px, 4px, 5px and 100px. The stylesheet declares Bootstrap breakpoints (`--breakpoint-xl: 1200px`).

## Elevation & Depth

No box-shadows were measured. Depth is photographic and layered: the hero image carries the logo and trophy art; the split panels use photos under a white wash; the footer is a flat dark band with an orange base bar. The SweetAlert2 variables (`--swal2-input-focus-box-shadow` and similar) belong to a dialog library that was not visible on screen.

## Shapes

Radii measured: 500px (three instances, round shapes such as icon circles and the social buttons) and 10px (one instance, the country selector, `xs`). The Readmore button has square corners and a 1px solid `#f79533` border, 38px high, padding `6px 12px`, 109px wide. The logo is built from a circle and angular X.

## Components

- Navigation: `#252525` bar, 77px, white 18px/500 text, `#323232` hover background, orange chevron on Products.
- Readmore button: transparent with orange text and a 1px `#f79533` border, Kanit 16px/400, 38px high.
- Section heading: large light-weight uppercase with a coloured initial and a round orange icon at the left.
- Split panel: photo with a white wash, heading, paragraph, 50% width each.
- Social buttons: round Facebook, YouTube and mail icons in brand colours of those services.
- Country selector: `<select>` with options Thailand and Korea, 22.4px, white fill, `#ced4da` border, 10px radius, 46px high, 123px wide.
- Footer: logo, NAVIGATE list with orange chevrons, social row, CONTACT US block, orange copyright strip with white text.

## Design System Architecture

No public design system or brand guideline was found, and none is linked from the page. The stylesheet is Bootstrap 4 based (variables `--light`, `--yellow`, `--pink`, `--red`, `--success`, `--gray-dark: #343a40`, `--breakpoint-xl: 1200px`) plus SweetAlert2 dialog variables (`--swal2-*`), with a brand layer of charcoal `#252525` and orange `#f79533`. Source: root variables (91) in the extraction of https://www.extreme.co.th/home.

## Do's and Don'ts

Do:
- Keep the dark header and footer bands identical in colour so the page reads as framed by charcoal.
- Use charcoal `#252525` for header and footer, orange `#f79533` for the logo, buttons, footer headings and copyright bar.
- Set text in Kanit at 16px to 20px with white on dark.
- Keep buttons outlined in orange with square corners.
- Use photography with warm light and gaming imagery.

Don't:
- Do not use Bootstrap blue `#007bff` or yellow `#ffc107` as brand colours.
- Do not add shadows; none were measured.
- Do not round buttons; only the selector (10px) and circular icons are rounded.
- Do not present SweetAlert2 dialog styles as brand UI.

## Responsive Behavior

At 390px the extraction measured: the heading role resolved to "ABOUT US" at 48px/57.6px, weight 700, uppercase, colour `#343a40`, 360px wide; the navigation bar 59px tall with `#252525` background and `#707070` text; and character sizes 18px (622), 16px (191), 14.4px (143) and 48px (10). Layout of the split panels and menu on mobile was not measured.

## Iteration Guide

1. Charcoal `#252525` bars, orange `#f79533` accents, white text.
2. Kanit 400/500/700; menu 18px to 20px; buttons 16px.
3. Orange-outline "Readmore" button, 38px high.
4. Warm hero photograph with the centred logo; split photo panels; orange copyright bar.
5. Run `node web/scripts/verify-designs.mjs --slug=electronics-extreme`.
