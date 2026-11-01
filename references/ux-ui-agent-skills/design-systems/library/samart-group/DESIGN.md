---
version: alpha
name: Samart Group (Samart Corporation)
category: "Thai Brands"
description: "Samart Corporation Public Company Limited group site - white page with navy (#2d3359) Kanit text, a #0b4596 royal-blue MORE/SUBMIT button family, 10px-radius bordered business cards, and a dark #363537 header and #323437 footer; Thai-first copy with English subtitles."
colors:
  canvas: "#ffffff"
  page-body: "#e5e5e5"
  ink: "#2d3359"
  primary: "#0b4596"
  on-primary: "#ffffff"
  surface-dark: "#343434"
  ink-heading: "#3c4858"
  ink-offwhite: "#fefefe"
  ink-muted: "#999999"
  nav-bg: "#363537"
  text-input-text: "#333333"
  footer-bg: "#323437"
  surface-ink-dark: "#1e252d"
  accent-purple: "#89229b"
  accent-red: "#f44336"
  accent-cyan: "#00bcd4"
typography:
  display:
    fontFamily: kanit, sans-serif
    fontSize: 37px
    fontWeight: 500
    lineHeight: 59.866px
  display-mobile:
    fontFamily: kanit, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 40px
  subheading:
    fontFamily: kanit, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  body:
    fontFamily: kanit, sans-serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 28.8px
  button:
    fontFamily: kanit, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 25.6px
    textTransform: uppercase
  nav:
    fontFamily: kanit, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 30px
  link:
    fontFamily: kanit, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 25.6px
  button-secondary:
    fontFamily: kanit, sans-serif
    fontSize: 13px
    fontWeight: 700
    lineHeight: 20.8px
  input:
    fontFamily: kanit, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
rounded:
  xs: 2px
  sm: 3px
  md: 6px
  lg: 10px
  xl: 20px
  2xl: 50px
  3xl: 100px
spacing:
  s1: 5px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 10.67px
  s6: 15px
  s7: 16px
  s8: 19.33px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 15px 33px
    height: 56px
    boxShadow: rgba(11, 69, 150, 0.14) 0px 2px 2px 0px, rgba(11, 69, 150, 0.2) 0px 3px 1px -2px, rgba(11, 69, 150, 0.12) 0px 1px 5px 0px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 10.671px 19.329px
    height: 42px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 0px 15px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 7px 0px
    height: 38px
  card:
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.lg}"
    padding: 30px 10px 10px
    borderColor: "{colors.page-body}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
    padding: 30px 0px 18px
---

## Overview

This is the corporate site of Samart Corporation Public Company Limited (the title and the footer name), the Thai technology group that the page calls SAMART GROUP. The hero line, in Thai with an English translation, reads "We provide high-quality tech solutions, improving life and driving sustainable future". The about paragraph says the group has been a leading Thai technology organisation for over 70 years, and the navigation lists About Us, Business Group Information, Investor Relations, Corporate Governance, Careers, Corporate Social Responsibility and Contact Us, with an EN switch.

The captured page is partly covered: a black-and-white tribute memorial popup with a portrait and condolence text sits over the hero and a bar at its foot carries a close control. The extractor was re-run once with the batch command and the popup is still in the capture, so it is not documented as brand UI and no colour is taken from it; the black `#000000` and `#000000cc` backgrounds that were measured belong to that overlay and are excluded. Below the popup the page is a white business card page: an "เกี่ยวกับเรา" (About Us) heading, an intro paragraph, three bordered cards (Digital ICT Solution & Service, Digital Communications, Utilities & Transportations) each with a blue line icon, a short Thai description and a blue MORE button, then a night-city video banner titled "วิดีโอนำเสนอบริษัท" (company presentation video), a Partners logo carousel (Avaya, Huawei, Dell, Polycom, OpenText, McAfee, Juniper, Palo Alto, NEC, NICE, Kaspersky, PowerSchool) and a dark investor-relations block.

The voice is formal and corporate: sentences are long and in Thai, English appears as bold labels and subtitles.

## Colors

- **Canvas `#ffffff`**: the largest background by area (6117).
- **Ink `#2d3359`**: the navy of body copy and headings (1004 characters).
- **Primary `#0b4596`**: royal blue of the SUBMIT and MORE buttons and of links (area 20).
- **On primary `#ffffff`**: button text; white is also the nav and footer text (664 characters).
- **Page body `#e5e5e5`**: the 1px border colour of the business cards and a text colour for 26 characters.
- **Ink heading `#3c4858`** (138 characters): card titles and the h2.
- **Ink offwhite `#fefefe`** (137 characters) and **ink muted `#999999`** (131 characters).
- **Surface dark `#343434`**: a dark grey background of area 2296; the element that carries it was not recorded.
- **Nav background `#363537`** and **footer background `#323437`**; **surface ink dark `#1e252d`** (area 263).
- **Accents**: `#89229b` purple (23 characters), `#f44336` red (23), `#00bcd4` cyan (13 characters and a small background area of 12) and `#ff0000` (2 characters); their elements were not identified. The text input shows a purple `rgb(156, 39, 176)` gradient underline.
- **Text input text `#333333`**.

The root variables also carry WordPress, Elementor and The Events Calendar presets (for example `--tec-color-event-icon-hover: #334aff`, `--wp--preset--color--vivid-purple: #9b51e0`); those are plugin defaults, not brand colours.

## Typography

Kanit (weights 300, 400, 500 and 700) is the sole text family: `kanit, sans-serif` accounts for 1918 characters and `Kanit` for 239; Font Awesome 5 Free and a font called wpxpress supply icons. Weights by character are 300 (1139), 500 (848), 400 (106) and 700 (68).

- **Display** (h1, here the "เกี่ยวกับเรา" heading): 37px, weight 500, line-height 59.866px; 24px / 40px on the 390px mobile pass.
- **Subheading**: 32px, 500, line-height 40px.
- **Body**: 18px, weight 300, line-height 28.8px.
- **Button**: 16px, 500, uppercase, 25.6px line-height; the small MORE buttons are 13px, 700, 20.8px line-height.
- **Nav**: 18px, 500, line-height 30px; **link**: 16px, 300.
- **Input**: 14px, 400.
- Sizes by character: 18px (845), 16px (755), 14px (276), 32px (115), 12px (59), 36px (34), 13px (29), 37px (21).

## Layout

The desktop page is 1280px wide and 4258px tall. Content sits in a centred column inside a white page frame; the three business cards are equal-width columns of about 348px each (card box width measured at 348px, height 326px) with generous gaps, followed by a full-bleed image banner, a carousel of partner logos in two rows of six with side arrows and two pagination dots, and a footer. Spacing steps are 5, 7, 8, 10, 10.67, 15, 16, 19.33, 20 and 24px. The footer is 101px high with `30px 0px 18px` padding; cards use `30px 10px 10px` padding.

## Elevation & Depth

Several shadows were recorded; the element owners of the first two were not identified: `rgba(0,0,0,0.56) 0px 16px 38px -12px` with two companions (three elements) and a larger `rgba(0,0,0,0.14) 0px 16px 24px 2px` stack (one element). The blue buttons carry a tinted three-layer shadow: `rgba(11,69,150,0.14) 0px 2px 2px 0px, rgba(11,69,150,0.2) 0px 3px 1px -2px, rgba(11,69,150,0.12) 0px 1px 5px 0px`. Cards are flat with a 1px `#e5e5e5` border.

## Shapes

Radii measured by element count: 3px (18), 10px (7), 6px (4), 2px (4), `6px 6px 0px 0px` (2), 50px (2), 20px (1) and the one-sided `100px 0px 0px 100px` / `0px 100px 100px 0px` pair. The SUBMIT button is 3px, the MORE button is 10px, the cards are 10px and the text input is 2px.

## Components

- **Primary button** (SUBMIT): `#0b4596`, white 16px uppercase 500, 3px radius, `15px 33px` padding, 56px tall, with the tinted shadow above.
- **Secondary button** (MORE, SEE MORE): `#0b4596` fill, white 13px bold, 10px radius, `10.671px 19.329px` padding, 42px tall.
- **Business card**: white, 1px `#e5e5e5` border, 10px radius, centred icon, 18px 500 title and 300-weight description, MORE button.
- **Nav**: `#363537` bar with white 18px 500 links and `0px 15px` padding.
- **Text input**: white, 14px, 2px radius, `7px 0px` padding, 38px high.
- **Footer**: `#323437`, white uppercase 14px/500 links (Home, Privacy Policy, Contact Us).

The tribute popup and the cookie notice that was hidden before measuring are not brand UI. A ticker at the top of the page shows the SAMART share price in small grey text.

## Design System Architecture

No public design system or brand guideline was found: the homepage links to company, investor and governance pages only. The site is a WordPress build (its stylesheets come from /wp-content/plugins/, with the root variables carrying `--wp--preset--*` values) using Elementor icon CSS, The Events Calendar variables and a Material-style button shadow; the brand layer is Kanit plus the blue `#0b4596` family. Source opened: https://www.samartcorp.com/.

## Do's and Don'ts

- Do set Thai copy in Kanit at weight 300 for body and 500 for headings and nav.
- Do use `#0b4596` for buttons, with white text; MORE buttons are 10px-radius and SUBMIT is 3px.
- Do frame business lines as bordered 10px cards with an icon, a title, a description and a MORE button.
- Do keep header and footer in the dark greys `#363537` and `#323437`.
- Don't use colours from the memorial popup or its black scrim as tokens.
- Don't use WordPress or Events Calendar preset colours as brand colours.
- Don't add elements for the purple, red and cyan accents until their use is measured.
- Don't copy the large shadow stacks onto cards; their owners were not identified.

## Responsive Behavior

Measured on the 390px mobile pass: the hero heading (an h3) is 24px, weight 500, line-height 40px, 330px wide; the h2 "เกี่ยวกับเรา" is 28px with 45.304px line-height; the body paragraph is 18px weight 300 with 28.8px line-height and `0px 15px` padding; the SUBMIT button keeps 16px, 3px radius and `#0b4596`. How cards, the carousel and the navigation rearrange on mobile was not measured.

## Iteration Guide

1. Start with canvas, ink, primary and the Kanit scale.
2. Reuse the card pattern and the blue MORE button; keep headers and footers in dark grey.
3. If the popup is removed from the site, re-run `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase3-thai.json --only=samart-group --force` and re-check the dark surfaces.
4. Verify with `node web/scripts/verify-designs.mjs --slug=samart-group`.
