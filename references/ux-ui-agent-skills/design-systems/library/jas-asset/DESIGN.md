---
version: alpha
name: JAS Asset
category: "Thai Brands"
description: "JAS Asset (jasasset.co.th) Thai listed rental-space and property company site: red #bb020b accents and cards, Lora 500 serif display with Poppins body, grey #53565a chairman band, #f7f7f7 and #f0f0f0 light sections, outlined 16px buttons with a 20px bottom-right corner and 44px card corner."
colors:
  canvas: "#53565a"
  page-body: "#ffffff"
  page-largest: "#f7f7f7"
  ink: "#ffffff"
  primary: "#bb020b"
  surface-light: "#f0f0f0"
  ink-body: "#212529"
  ink-heading: "#1c1c1c"
  black: "#000000"
  ink-footer: "#d4d4d4"
  hairline: "#00000020"
typography:
  display:
    fontFamily: Lora, sans-serif
    fontSize: 39px
    fontWeight: 500
    lineHeight: 58.5px
  display-mobile:
    fontFamily: Lora, sans-serif
    fontSize: 25.0275px
    fontWeight: 500
    lineHeight: 37.5412px
  body:
    fontFamily: Poppins, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  link:
    fontFamily: Poppins, Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Poppins, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 4px
  md: 4.8px
  lg: 5px
  pill: 9999px
spacing:
  s1: 6px
  s2: 8px
  s3: 12px
  s4: 15px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 48px
  s9: 64px
  s10: 77.5px
components:
  button-secondary:
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    padding: 6px 12px
    height: 55px
    borderColor: "{colors.page-body}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    padding: 48px
  footer:
    backgroundColor: "{colors.black}"
    textColor: "{colors.page-body}"
    padding: 48px 0px 0px
---

## Overview

The measured homepage (https://www.jasasset.co.th/en/home, title "JAS Asset", language en) belongs to JAS Asset Public Company Limited, which describes itself in the page text as a business organizing rented space in shopping centers with an emphasis on mobile-phone and IT product zones, started in 2000 as a division of Jaymart Public Company Limited and established as a company on 4 January 2012. The capture shows an invitation popup ("JAS Asset Public Company Limited Invitation to Shareholder ... 2027 Annual General Meeting of Shareholder", a red-and-black striped card with a "More Details" outline button and carousel arrows) on top of a dimmed hero. The popup and the dark scrim are temporary notices and are not documented as brand UI or tokens; the faint hero text visible behind them ("...rental ... well as real ...") is white serif type over a photograph.

Below the hero the page has a "Chairman's Statement" band: a portrait of Mr. Sukont Kanjanahattakit (President / Independent Committee) on the left with its bottom-right corner rounded, the title in white over the lower part of the photo, and on the right a grey band holding a large white quotation about developing organizational capabilities and implementing the Corporate Social Responsibility policy, the name and role, and a white outlined "Read More" button. An "About Us" section on a light grey background follows: a serif heading with a small red diamond and thin red line, a left-aligned paragraph, two large red serif numerals ("22" years of experience in rental space management, and "5" groups), the statement "To be the leader of rental spaces management and real estate developer" with the last two lines in red, and a red outlined "Explore More" button. Cards for business groups ("IT Junction", "J Market") are solid red with white text. The voice is formal, corporate and investor-facing English.

## Colors

Measured background area: #f7f7f7 (5207), grey #53565a (3249), #f0f0f0 (2122), white #ffffff (2030), red #bb020b (1054), black #000000 (658) and a small #74777b. Text colors: white (2495 characters), #212529 (538), #1c1c1c (468), red #bb020b (144), black (106) and #d4d4d4 (70).

- **Primary red #bb020b**: solid business-group cards, the numerals "22" and "5", the highlighted lines of the vision statement, link text, borders (#bb020b appears 3 times) and the "Explore More" button outline and text.
- **Canvas #53565a**: the measured grey of the Chairman's Statement band; **page-body #ffffff** and **page-largest #f7f7f7** are the page and About Us section backgrounds; **surface-light #f0f0f0** a further light panel.
- **Ink #ffffff** on grey and red; **ink-body #212529** and **ink-heading #1c1c1c** on light backgrounds; **ink-footer #d4d4d4** on black.
- **Black #000000**: footer background and some text.
- **Hairline #00000020**: 16 uses of a very light black border.

Bootstrap :root defaults (--success #28a745, --danger #dc3545, --light #f8f9fa, --dark #343a40) and the popup's red-and-black stripes are not brand colors. The site declares --grey-n25 #d4d4d4, --grey-n05 #f7f7f7 and --light-red-00 #e10918 in :root; the first two match measured colors above, and #e10918 was not measured in use.

## Typography

**Lora** (500) is the display serif: the hero and vision statement are 39px / 500 / 58.5px (25.0275px / 37.5412px at the 390px mobile pass) and the "About Us" and numeral styles follow it. **Poppins** (400, 500, 600) is the body face: body 20px / 400 / 30px, with 17.57px at 390px; links 16px / 400 / 24px in Poppins with Sarabun as the Thai fallback; outlined button labels 16px / 400. Sarabun (400 and 700) is loaded for Thai text. Lora supplies the serif voice for headlines and numerals, while Poppins and Sarabun handle running text.

## Layout

The desktop pass is 1280px wide and counts no visible header links, and a --header-height variable of 105px is declared in :root. Sections are full-bleed bands, each split into halves where content demands: portrait and quote in the Chairman band, text and numerals in About Us. Cards are 433px high in the measurement with 48px padding. Spacing steps are 6, 8, 12, 15, 16, 24, 32, 48, 64 and 77.5px; the footer has 48px top padding and is 513px high on black. The extractor counts up to seven card columns.

In the capture, the page alternates three moods: a photographic hero, a serious grey chairman band with an editorial portrait, and a light grey About Us section where red is the only chromatic color. Red therefore functions as the single brand hue across numerals, highlighted words, link text and card fills, while the greys (#53565a, #f7f7f7, #f0f0f0) and black do the structural work. Corners are square except for one deliberately rounded bottom-right corner, which gives photographs, cards and outlined buttons a shared silhouette.

## Elevation & Depth

Shadows are soft: rgba(0, 0, 0, 0.1) 0px 5px 20px 0px (6 occurrences) and rgba(0, 0, 0, 0.05) 0px 3px 6px 0px (4). Beyond these the page separates sections by background tone (#f7f7f7, #53565a, #f0f0f0, #ffffff, black) rather than lines. The dark scrim over the hero belongs to the popup and is not an elevation token.

## Shapes

Radii: 4px (35 occurrences), 5px (23), "0px 0px 40px" (10), 2px (9), "0px 0px 44px" (7), "0px 0px 20px" (3), 50% (2) and 4.8px. A signature asymmetric corner treatment appears: only the bottom-right corner is rounded, at 20px on outlined buttons ("0px 0px 20px"), 40px to 44px on the portrait and solid red cards. Small controls use 2px to 5px.

## Components

- **button-secondary** ("Read More"): transparent, white 16px / 400 text, 1px white border, padding 6px 12px, 55px high, bottom-right radius 20px. On light backgrounds the same shape is outlined and colored in red #bb020b.
- **link**: Poppins 16px / 400 in red #bb020b.
- **card**: red #bb020b fill, white text, 20px / 600 title, padding 48px, bottom-right radius 44px.
- **footer**: black, white text, 48px top padding.
- **Quote block**: large white Poppins text with serif quotation marks on #53565a.

## Design System Architecture

No public JAS Asset design-system or brand-guideline page was opened; the research record is {none:true}. The page is Bootstrap-based (--breakpoint-md 768px, --breakpoint-xxl 1640px, --success, --danger and other Bootstrap defaults), with a few project variables (--header-height 105px, --black, --white, --grey-n05, --grey-n25, --light-red-00) and Font Awesome 5 Pro and icomoon icon fonts. Brand red #bb020b is measured on cards and numerals but is not exposed as a named variable.

## Do's and Don'ts

- Do pair Lora 500 headlines with Poppins body text.
- Do use red #bb020b for the numerals, vision statement highlights, links and solid group cards.
- Do round only the bottom-right corner (20px to 44px) on buttons, portraits and cards.
- Do use grey #53565a for the chairman band and white text on it.
- Don't use Bootstrap success and danger colors.
- Don't treat the shareholder popup, its striped card or the dark scrim as brand UI.
- Don't round all four corners of cards.

## Responsive Behavior

Measured at 390px: the Lora display is 25.0275px / 500 / 37.5412px (39px on desktop), body is 17.57px / 400 (20px on desktop), and the extractor still counts up to seven card columns with no menu toggle and no visible header links. Mobile navigation is not measured; tablet widths and dark mode are not measured.

## Iteration Guide

1. Lora 500 for headlines at 39px / 58.5px, Poppins 400 at 20px / 30px for body.
2. Red #bb020b numerals and highlighted words on #f7f7f7.
3. Grey #53565a band for quotes with white type and a white outlined button.
4. Solid red cards with 48px padding and one 44px rounded corner.
5. Black footer with #d4d4d4 text.
6. At 390px reduce the headline to 25.0275px and body to 17.57px.
