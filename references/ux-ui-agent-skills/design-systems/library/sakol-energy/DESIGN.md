---
version: alpha
name: Sakol Energy
category: "Thai Brands"
description: "Sakol Energy Public Company Limited (SKE, sakolenergy.com) uses a white canvas #ffffff, charcoal ink #333333, a gold #e5b71b READ MORE button, slate #5c666f bands and an #ececec footer, all set in Myriad Pro; its entry gateway is a monochrome mourning page in PSL Malinee Pro 56px."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#e5b71b"
  ink-nav: "#454545"
  ink-brown: "#412709"
  slate: "#5c666f"
  taupe: "#998874"
  surface-footer: "#ececec"
  border: "#dbdcdc"
typography:
  display:
    fontFamily: "\"PSL Malinee Pro\""
    fontSize: 56px
    fontWeight: 400
    lineHeight: 72.8px
  display-mobile:
    fontFamily: "\"PSL Malinee Pro\""
    fontSize: 43px
    fontWeight: 400
    lineHeight: 55.9px
  body:
    fontFamily: "\"PSL Asadong Pro\""
    fontSize: 35px
    fontWeight: 700
    lineHeight: 42px
  home-heading:
    fontFamily: "\"Myriad Pro\""
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
  home-body:
    fontFamily: "\"Myriad Pro\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  nav-label:
    fontFamily: "\"Myriad Pro\""
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
    textTransform: uppercase
  button:
    fontFamily: "\"Myriad Pro\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
    textTransform: uppercase
rounded:
  xs: 60px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 7px
  s4: 10px
  s5: 15px
  s6: 20px
  s7: 30px
  s8: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    height: 42px
    width: 130px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav-label}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    typography: "{typography.home-body}"
---

## Overview

Sakol Energy Public Company Limited ("SKE") is a Thai listed company incorporated on 16 January 2009 by a joint venture of three companies (home page text). Its businesses, as listed on the measured home page, are a private mother station, the Mae Krating biomass power plant, non-hazardous waste and unused-material sorting that produces refuse-derived fuel (RDF), and software development for securities trading. The URL https://www.sakolenergy.com/ redirects to `https://www.sakolenergy.com/en`, which is a one-screen gateway; a forced re-extraction returned the same gateway (31 visible elements). On the capture date it is a mourning page: a monochrome damask pattern, an oval portrait, the headline "เสด็จสู่สวรรคาลัย" (passed to heaven), the line "น้อมรำลึกในพระมหากรุณาธิคุณอันหาที่สุดมิได้", the names "สมเด็จพระนางเจ้าสิริกิติ์ พระบรมราชินีนาถ พระบรมราชชนนีพันปีหลวง", a sign-off from the board, executives and staff of the company, and a white pill button "เข้าสู่หน้าหลัก | Enter Site". The page is rendered in grayscale, so its colours are not brand colours.

Because the gateway carries no brand UI, the working site was measured as an extra page, `https://www.sakolenergy.com/en/home` (138 visible elements, 1950px tall), recorded as `sakol-energy--home`. The home page is a conventional investor-oriented corporate site: a white header with uppercase navigation, content bands, a slate #5c666f band, a gold READ MORE button and an #ececec footer, in Myriad Pro throughout.

## Colors

Home page background area by weight: white #ffffff (1184), slate #5c666f (1024), light grey #ececec (303), taupe #998874 (129), gold #e5b71b (6). Text colours by characters: #333333 (485), #343434 (161), white (77), #454545 (70), brown #412709 (13), black #000000 (9).

- **canvas #ffffff**: page and header background.
- **ink #333333**: headings and body text; the footer and nav text measure #343434, a near-identical value that is not separately named here.
- **primary #e5b71b**: the fill of the READ MORE button (white text); the only saturated colour measured.
- **ink-nav #454545**: text of the uppercase navigation anchors such as "ABOUT US".
- **slate #5c666f** and **taupe #998874**: large background areas on the home page (1024 and 129 weight); their exact components were not isolated in the extraction.
- **surface-footer #ececec**: footer background, 136px tall.
- **ink-brown #412709**: 13 characters of text; role not isolated.
- **border #dbdcdc**: a measured border colour (the other measured border is #e8e8e8).

The gateway page measured only white text (226 characters) over a grayscale scene; the capture shows greyscale, so no gateway hue is documented.

## Typography

Home page: **Myriad Pro** (815 characters, with Arial as fallback in the CSS) is the only family. Measured weights 400 (629 characters) and 700 (186). Roles: heading "Sakol Energy Public Company Limited (“SKE”)" is 700 24px/28.8px, colour #333333; body paragraph 400 16px/25.6px; navigation anchors 700 14px/20px uppercase; READ MORE button 400 14px/22.4px uppercase; header text 12.8px/20.48px. Most-read sizes: 16px (505), 14px (88), 17.6px (66), 17px (44), 24px (43), 12.8px and 13.6px (19 each).

Gateway page: **PSL Malinee Pro** 400 56px/72.8px for the headline (43px/55.9px on the mobile pass), **PSL Asadong Pro** 700 35px/42px for the sign-off lines (25px/30px on mobile) and **PSL Kanda Modern Extra Pro** at 23px for the button label. The CSS names Arial after Myriad Pro as its fallback.

## Layout

Desktop viewport 1280px. The home header carries a utility row (Careers, Contact Us, a TH language link), then the uppercase navigation: About Us, Our Business, Investor Relations, Corporate Governance and more, each expanding to a long list of sub-pages (for example Message from the Chairman, Board of Directors, Key Financial Data and Ratios, Form 56-1 One Report). The page is 1950px tall and ends with a 136px footer that repeats the main links (Home, About Us, Our Business, Investor Relations, Corporate Governance). Paddings by frequency: 15px (30), 20px (13), 7px (12), 10px (8), 40px (8), 4px (2), 17px (1); the READ MORE button has padding 10px 35px 10px 15px and the nav anchors 15px 20px 15px 15px.

## Elevation & Depth

Measured shadows: header `rgba(0, 0, 0, 0.1) 0px 0px 5px 0px`, a soft `rgba(204, 204, 204, 0.5) 0px 2px 10px 0px` and a zero-offset `rgb(51, 51, 51) 0px 0px 0px 0px`. Depth is low: a faint header shadow and flat colour bands. The gateway uses a patterned dark background and a translucent pill, but being greyscale it is excluded from the palette.

## Shapes

Measured radii: 50% (1 element) and 999px (1 element) on the home page; 60px (1 element) on the gateway button. The READ MORE button measured with a 0px border radius in the hover record, so it is a square-cornered rectangle. The frontmatter keeps `xs: 60px` from the gateway and `pill: 9999px`.

## Components

- **READ MORE button:** fill #e5b71b, white 14px uppercase text, 130px by 42px, padding 10px 35px 10px 15px. Hover was recorded: before the hover it measures rgb(229, 183, 27) fill with white text and a white border.
- **Navigation:** white header, 12.8px header text, 14px bold uppercase anchors in #454545, 50px tall anchors with 15px padding, a TH/EN language link and a MENU label on mobile.
- **Footer:** #ececec background, #343434 text, 16px Myriad Pro, link list repeating the primary sections.
- **Gateway button:** translucent white pill with "เข้าสู่หน้าหลัก | Enter Site", 60px radius; part of the mourning page, not the working site.

## Design System Architecture

No public design system or brand-guidelines page was found: the opened pages (https://www.sakolenergy.com/th gateway and https://www.sakolenergy.com/en/home) contain corporate, investor and governance navigation only and no design-system link. The gateway's root variables are the Bootstrap 4 defaults (`--primary: #007bff`, `--breakpoint-md: 768px`), which are framework values and not brand colours. The home page exposes no root variables (rootVars is empty), so the system is plain class-based CSS using Myriad Pro and the colours above.

## Do's and Don'ts

- Do keep the canvas white and the type charcoal #333333 in Myriad Pro.
- Do reserve gold #e5b71b for the READ MORE action.
- Do set navigation anchors uppercase at 14px bold.
- Do use the #ececec footer to close the page.
- Don't treat the greyscale mourning gateway as the brand look.
- Don't use the Bootstrap default blue #007bff as a brand colour.
- Don't add heavy shadows; the measured shadows are all soft and low-opacity.

## Responsive Behavior

Mobile was measured at 390px. Home page: the heading block "Sakol Energy Public Company Limited (“SKE”)" keeps 24px/28.8px but occupies 360px by 279px; the footer paragraph stays 16px/25.6px in a 360px by 51px block; the header is 390px by 77px with text "TH" and "MENU" (the header text colour measured as #ffffff on the #ffffff background in that pass); the READ MORE button keeps 130px by 42px. Mobile size frequencies: 16px (414), 17.6px (66), 17px (44), 24px (43), 13.6px (19), 14px (18). Gateway on mobile: headline 43px/55.9px in a 188px block, sign-off 25px/30px in a 350px block. Menu panel behaviour, image cropping and column changes were not measured.

## Iteration Guide

1. Build the working site from canvas #ffffff, ink #333333 and primary #e5b71b; set everything in Myriad Pro (Arial as fallback).
2. Headings 700 24px/28.8px; body 400 16px/25.6px; nav anchors 700 14px uppercase.
3. Use one gold READ MORE button per band, square corners, 130px by 42px.
4. Close with an #ececec footer of repeated section links.
5. Treat the gateway as a temporary mourning page and do not carry its pill button or greyscale into the product.
6. Measure any new component with the extractor; unmeasured states stay "not measured".
