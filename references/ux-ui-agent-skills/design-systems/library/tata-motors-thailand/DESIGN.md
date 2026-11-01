---
version: alpha
name: Tata Motors Thailand
category: "Thai Brands"
description: "Tata Motors Thailand English home page: Calibre Black, Light and Regular type, navy #0a0a5f bands, bright blue #2f7fe2 uppercase square 64px buttons, white canvas, 10px value-tile radius and soft 5px glow shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#0a0a5f"
  ink: "#000000"
  primary: "#2f7fe2"
  on-primary: "#ffffff"
  surface-3: "#0b0b0b"
  ink-3: "#777777"
  ink-4: "#307fe1"
  ink-5: "#c9c8cd"
  ink-6: "#3897f0"
  text-input-border: "#868686"
typography:
  display:
    fontFamily: "\"Calibre Light\", sans-serif"
    fontSize: 22px
    fontWeight: 300
    lineHeight: 20px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Calibre Light\", sans-serif"
    fontSize: 20px
    fontWeight: 300
    lineHeight: 20px
    textTransform: uppercase
  heading:
    fontFamily: "\"Calibre Light\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 27.6px
  subheading:
    fontFamily: "\"Calibre Light\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 32px
    textTransform: capitalize
  body:
    fontFamily: "\"Calibre Regular\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20.7px
  button:
    fontFamily: "\"Calibre Regular\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16px
    textTransform: uppercase
  nav:
    fontFamily: "\"Calibre Regular\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  link:
    fontFamily: "\"Calibre Regular\", sans-serif"
    fontSize: 17.008px
    fontWeight: 700
    lineHeight: 20px
    textTransform: uppercase
  input:
    fontFamily: "\"Calibre Regular\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 13.8px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 5px
  xl: 6px
  2xl: 10px
  3xl: 12px
  4xl: 14px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 10px
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
    height: 64px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 64px
  link:
    textColor: "{colors.ink-4}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, -32.1094, 0)
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 10px
    height: 30px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.ink-4}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.2xl}"
    padding: 25px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 100px 0px
---

# Tata Motors Thailand

## Overview
The measured site is the English home page of Tata Motors Thailand (https://www.tatamotors.co.th/en, title "Tata Motors Thailand | Commercial Trucks, Cargo Vehicles & Vans"). It is a commercial-vehicle sales and service site: a photographic hero carousel (the first slide reads "Treat your passengers with the ultimate comfort"), a navy "Our legacy" band, four solid blue value tiles (Quality, Trust, Support, Innovation), a vehicle finder with two select boxes and a "Show my vehicle" outlined button, a vehicle carousel (Winger, Tata Super Ace Mint, Ultra T.9), a second navy band ("We serve more because we care more"), service cards, video testimonials, a blog row, a "Get A Call Back" form beside a call-center photograph, a range of category buttons and a deep navy footer. The page is 9662px tall at 1280px. Two colors dominate, navy #0a0a5f and bright blue #2f7fe2, on white. The tone is corporate and reassuring, with uppercase labels and short slogans ("Better Always"). Lead-capture popups ("Talk to an Expert", "Book a Test Drive", "Request Quote") and a cookie consent bar appear in the capture and are not documented as brand UI.

## Colors
`primary` is #2f7fe2, the fill of the category buttons ("VANS", "SMALL COMMERCIAL VEHICLES"); `on-primary` is #ffffff. `page-largest` #0a0a5f is the navy of the legacy band and the footer; `canvas` is #ffffff; `ink` is #000000; `surface-3` is #0b0b0b (dark hero overlay). `ink-3` #777777 is secondary text (the root variable `--clr-general-gray` is the same value), `ink-4` #307fe1 is link text and the value-tile card fill, `ink-6` #3897f0 a lighter link blue, `ink-5` #c9c8cd a light grey, and `text-input-border` #868686 the form border. The root variables also include `--clr-primary-602: #080E5B` and `--clr-general-black: #000000`; only values measured on rendered elements are declared as tokens.

## Typography
Tata Motors Thailand uses the Calibre family at separate files per weight: Calibre Black, Calibre Light and Calibre Regular (loaded at 400 each, with the weight difference carried in the file), plus Arial and system-ui in a few places. Measured tokens: `display` is Calibre Light 22px / 20px at 300, uppercase (the page's h1, a multi-line "TATA MOTORS COMMERCIAL VEHICLE RANGE EMPOWERING INDUSTRIES..." heading), `display-mobile` is 20px / 20px at 300 uppercase, `heading` is Calibre Light 24px / 27.6px at 700, `subheading` is Calibre Light 32px / 32px at 700 capitalized ("Values That Drive Us"), `body` is Calibre Regular 18px / 20.7px at 400, `button` is 14px / 16px at 700 uppercase, `nav` is 16px / 18.4px at 400, `link` is 17.008px / 20px at 700 uppercase ("EXPLORE") and `input` is 12px / 13.8px at 400. Larger sizes appear in the size census (51.2px, 53.7328px, 70px) for hero slide titles, but their families were not captured in the role data. Calibre is a commercial typeface; a humanist sans such as Source Sans is the nearest open substitute.

## Layout
Content aligns to a left gutter with a four-column tile row (value tiles), a three-up vehicle carousel with arrows, and a four-column footer (Products, Information, Company, Subscribe). The navigation bar is 88px tall: logo at left, five nav items (Products, Services, Contact us, Blog, Special Offer), then language, countries and search controls and the Tata mark at right. A floating vertical rail of icon buttons sits on the right edge. Measured spacing steps: 2px, 5px, 7px, 8px, 10px, 11px, 12px, 14px, 15px and 16px; the commonest gaps are 15px (16 elements) and 10px (8); larger gaps of 80px and 30px separate bands. The footer uses 100px 0px padding and is 956px tall.

## Elevation & Depth
Depth is light. The measured shadows are `rgba(0, 0, 0, 0.16) 0px 0px 5px 1px` (3 elements, cards and tiles), `rgba(0, 0, 0, 0.5) 0px 0px 1px 0px, rgba(0, 0, 0, 0.15) 0px 1px 10px 0px` (a popup) and `rgb(128, 128, 128) 0px 0px 5px 0px`. Separation otherwise comes from alternating navy and white bands and from full-bleed photography.

## Shapes
Rectangular controls and varied small radii. Measured: 50% (7 elements, round arrow buttons and icon circles), 12px (6), 6px and 4px (5 each), 10px (4; value tiles, `2xl`), 3px (3), 30px (3), and single uses of 15px, 5px, 2px, `0px 5px 5px 0px` and `14px 0px 0px 14px` (the right-edge icon rail). The primary category buttons measure 0px radius and 64px height; form inputs are 0px radius, 30px tall, 10px padding with a #868686 border.

## Components
- **button-primary / button-secondary**: #2f7fe2 fill, white 14px bold uppercase label, 0px radius, 64px tall.
- **link**: #307fe1, 17.008px bold uppercase ("EXPLORE"), shifted by a measured transform of -32.1094px on X.
- **nav**: 88px bar with white 16px labels over the hero; **nav-link** measured as #000000 16px.
- **text-input**: #000000 text, 12px, 30px tall, 10px padding, #868686 border, 0px radius.
- **card**: #307fe1 fill, white text, 10px radius, 25px padding (value tiles with icon above the label).
- **footer**: #0a0a5f fill, white text, 100px 0px padding.
- **Vehicle select and "Show my vehicle"**: underlined select fields with a caret and an outlined blue button.

## Design System Architecture
No public design system or brand guidelines are linked: the home page was opened with WebFetch and its footer offers only Disclaimer, Privacy Policy and a Legacy link to tatamotors.com. The shipped CSS has 132 root variables on a Bootstrap-based scale: `--bs-radius-50` (2.5rem), `--space-40`, `--space-50`, `--space-55`, `--space-65`, `--space-75` (rem steps), `--fs-37`, `--fs-64`, `--fs-67`, `--fs-68` (font-size steps in rem), `--font-thin` ("Calibre Thin", sans-serif), `--clr-general-gray`, `--clr-general-black` and `--clr-primary-602`. Colors are namespaced `--clr-*`, so the de-facto system is a small spacing and font-size ladder plus a few named colors.

## Do's and Don'ts
- Do pair navy #0a0a5f bands with white text and bright blue #2f7fe2 buttons.
- Do set labels and buttons in uppercase bold Calibre-style type.
- Do use full-bleed vehicle photography with the vehicle named in a bold uppercase caption.
- Don't round the main category buttons; they measure 0px.
- Don't use heavy shadows; the measured shadow is a 5px soft glow.
- Don't present lead-capture popups or the consent bar as brand components.

## Responsive Behavior
Measured at a 390px viewport: the h1 is 20px / 20px at weight 300; the header shows 5 links with a menu toggle labelled "Products"; the category button is 344px wide and 64px tall at 14px; at most 6 card columns were recorded. The first mobile band is a 600px media hero, followed by the navy legacy band (#0a0a5f, two columns recorded), a white range band and a second navy band. Menu behavior beyond that was not measured.

## Iteration Guide
1. Start with #ffffff canvas, #000000 text, navy #0a0a5f bands, #2f7fe2 buttons and #307fe1 links.
2. Use Calibre (Regular for body at 18px, Light bold for headings at 24px and 32px).
3. Keep buttons square at 64px and cards at 10px radius with 25px padding.
4. End with a 956px navy footer with 100px vertical padding.
5. Re-run `node web/scripts/verify-designs.mjs --slug=tata-motors-thailand` after each change.
6. Imagery: show the vehicle in a real road or depot setting, one vehicle per card, with the model name in capital letters below.
7. Copy voice: slogans are short and aspirational ("Better Always", "Empowering Industries with Efficient Transport") and calls to action are single words (EXPLORE, Submit).
8. Section order on the page: legacy statement, values, vehicle finder, range carousel, services cards, testimonials, blog, call-back form, category buttons; keep that storytelling sequence and alternate navy and white bands between sections.
