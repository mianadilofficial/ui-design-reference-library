---
version: alpha
name: CVS Health
category: "Healthcare & Wellness"
description: "CVS Health corporate site: white canvas, black ink, CVS red #cc0000 buttons (10px radius) and hover links, black #000000 footer and #262626 utility bar, CVS Sans Regular and Medium at 48px and 36px headlines, 16px cards with a soft 8px shadow."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#cc0000"
  on-primary: "#ffffff"
  surface-grey: "#dedede"
  ink-grey: "#767676"
  nav-bg: "#262626"
  footer-bg: "#000000"
  sky: "#6aaae4"
typography:
  display:
    fontFamily: "\"CVS Sans Regular\", Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 62.4px
  display-mobile:
    fontFamily: "\"CVS Sans Regular\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 41.6px
  heading:
    fontFamily: "\"CVS Sans Regular\", Helvetica, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 46.8px
  body:
    fontFamily: "\"CVS Sans Regular\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"CVS Sans Medium\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  button: 10px
  card: 16px
  search: 50px
  pill: 100px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 10px 16px
    height: 46px
    borderColor: "{colors.primary}"
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 4px 8px
    height: 34px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    padding: 10px 0px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.on-primary}"
    height: 51px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    padding: 8px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.search}"
    padding: 4px 35px 4px 14px
    height: 34px
    borderColor: "{colors.ink-grey}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    padding: 30px 30px 20px
    boxShadow: rgba(26, 26, 25, 0.25) 0px 1.5px 8px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.on-primary}"
    height: 898px
---

## Overview

CVS Health is the corporate home page of CVS Health (page title "Leading Health Solutions Company | CVS Health"). It is a calm, editorial corporate site rather than a store: a dark utility bar with the group links (Aetna®, CVS Caremark®, CVS Pharmacy, Careers, Investors, Contact Us), a white header with the red heart-and-"CVS Health" logo, the menu About, Services, News, Impact and "Quitting Tobacco", and a pill search field.

The hero is a rounded photograph of a mother and child with a white overlay card reading "Building a world of health around every individual" and the sentence "We connect people to the care they need, put medicine and wellness within reach, and drive greater affordability, simplicity and convenience in everything we do." Below: "Combining our strengths for you" in a white card with four tabs (Health services, Health insurance, Pharmacy, Prescription drug coverage), an active red underline, a paragraph, an "Explore our services" link and a photograph; a lead story "CVS Health Corporation reports strong second quarter 2026 results and raises full-year 2026 guidance" with "Read the story", beside a "Latest news" list of dated items with thumbnails; a large CVS Health logo panel; and a black footer with "Healthier happens together™" and "Quick Links".

The page text states the purpose: "To simplify health care one person, one family and one community at a time." Voice is warm, plain and sentence-case. The page measures 6,728px tall with 482 visible elements. Imagery is natural-light photography of families and clinicians with rounded corners; a settings gear for cookie preferences floats over the hero in the capture and is not part of the brand UI.

## Colors

- **Canvas `#ffffff`** is the page (area weight 1,605); **black `#000000`** fills the footer (1,363) and is the main text colour (1,918 characters).
- **Primary `#cc0000`** is CVS red: the "Subscribe" and "Learn more" buttons (fill and 1px border), the "Explore our services" and "Read the story" links (201 characters), the active tab underline and the hover colour of header menu items (About, Services, News hover from black to `rgb(204, 0, 0)`).
- **On-primary `#ffffff`** (555 characters) is text on red, on black and on the utility bar.
- **Utility bar `#262626`** (area weight 66) holds the group links; **surface grey `#dedede`** (204) is a light band and a border.
- **Secondary grey `#767676`** (64 characters) is the input border and secondary text.
- **Sky `#6aaae4`** (area weight 3) was measured on a small element and is not attributed.

The root variables also declare brand support colours such as `--color-navy-blue: #0b315e`, `--color-navy-light: #0a4b8c`, `--core-color-gray-5: #f7f7f7`, `--core-color-red-90: #4d0f0f`, `--core-color-system-green-40: #29c45d`, `--color-digital-forest-5: #e5ffd9`, `--theme-color-content-inactive: #575757` and the button-state reds `#a50000` and `#eb0000`. They are declared, not all measured on this page.

## Typography

Two faces: **CVS Sans Regular** (2,519 characters) for almost everything and **CVS Sans Medium** (219 characters) for buttons and links, both loaded at normal 400 weight with `Helvetica, Arial, sans-serif` as fallback. Weight 400 covers 2,713 characters and 700 covers 25.

- **Display, 48px / 400, line-height 62.4px:** the hero card title. Mobile 32px / 41.6px.
- **Heading, 36px / 400, line-height 46.8px:** "Combining our strengths for you", "Health services" and the footer title.
- **Body, 16px / 400, line-height 24px.**
- **Button and link, CVS Sans Medium 16px / 400, line-height 24px.**
- Other sizes: 20px (112 characters), 12px (78), 14px (64), 16.4736px (39), 22px (26), 24px (25). Mobile sizes list 24px for the h2 and 16px body.

**Substitutes.** CVS Sans is proprietary; the declared fallbacks are Helvetica and Arial.

## Layout

The layout is a centred single column about 1,232px wide (the h2 box is 1,232px at 1280px). The dark utility bar is 51px high; the header sits under it. The hero image has 16px rounded corners and the overlay card is 453px wide at the left. The tab card spans the column with 30px 30px 20px padding; the news area splits into a wide story at the left and a narrow list card at the right. Paddings: 8px (29 uses), 4px (26), 12px (23), 24px (11), 10px (11), 20px (9), 30px (8), 16px (7), 50px (6). Gaps are 8px, 40px and 12px. White space is generous between blocks.

## Elevation & Depth

Cards use a soft shadow `rgba(26, 26, 25, 0.25) 0px 1.5px 8px 0px` (12 uses); a second `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` appears twice. Borders are rare: `#cc0000`, `#262626`, `#767676`, `#dedede` and `#ffffff33` once or twice each. Depth is otherwise carried by rounded photographs and the black footer block.

## Shapes

Radii: 16px (19 uses; cards and the hero image), 10px (5; buttons), 100px (2), 50px (1; the search field), asymmetric `16px 16px 0px 0px` and `0px 0px 16px 16px` (one each; image corners) and 50% (1). Buttons are 10px, the search field is a 50px pill, and cards are 16px. The theme also declares `--theme-corner-radius-*` variables.

## Components

- **Primary button.** Red fill and border, white CVS Sans Medium 16px, padding 10px 16px, height 46px, radius 10px ("Subscribe", 110px wide). Small variant: padding 4px 8px, 34px high ("Learn more", 105px wide).
- **Text link.** Red CVS Sans Medium 16px with a chevron ("Explore our services", "Read the story", "Go to our News section").
- **Utility bar.** `#262626`, 51px high, white 16px links with external-link icons.
- **Menu items.** Black 16px labels that turn `#cc0000` on hover.
- **Search field.** White, 50px radius, 34px by 185px, 1px `#767676` border, padding 4px 35px 4px 14px, magnifier icon in red.
- **Tab card.** White card, 16px radius, shadow above, four tabs with an active red underline.
- **News list.** A card with a "Latest news" title, thumbnails, a date line and underlined black titles.
- **Footer.** Black, white text, 898px high.

## Design System Architecture

CVS Health publishes no design system or brand guideline on the page opened (https://www.cvshealth.com/). The stylesheet nonetheless ships a token layer in root variables: `--core-color-*` ramps (gray, red, system green), `--color-*` brand names (navy-blue, payorsolutions-gray, digital-forest), semantic `--theme-color-*`, `--theme-space-*` (multiples of `.25rem`, e.g. `--theme-space-xxl: calc(.25rem*10)`), `--theme-corner-radius-*`, button tokens named by variant, emphasis and state (`--button-solid-emphasized-bordercolor-active`, `--button-text-emphasized-bordercolor-hover`, `--button-text-highcontrast-bgcolor-disabled`) and a second set prefixed `--qs-*` for a form and slider library. Brand red `#cc0000` is the emphasised button colour.

## Do's and Don'ts

- Do use `#cc0000` for buttons, links, active tabs and hover states, with white text on filled buttons.
- Do keep a black footer and a `#262626` utility bar.
- Do round cards and hero images at 16px, buttons at 10px and the search field as a pill.
- Do write sentence-case copy about people and care.
- Don't add other accent colours to buttons; the navy and green values are supporting tokens.
- Don't draw the cookie-settings gear as part of the brand UI.

## Responsive Behavior

Measured at 390px: the h1 is 32px (desktop 48px), 310px wide and 125px high; the h2 is 24px (desktop 36px), 358px wide; the "Subscribe" button stays 16px, 110px by 46px; no mobile header or navigation role was found. Mobile sizes by characters: 16px (1,552), 24px (412), 18px (147), 14px (98), 32px (50), 20px (47). Layout of the tab card, news block and navigation at 390px was not measured (no band or layout data).

## Iteration Guide

1. Canvas `#ffffff`, ink `#000000`, primary `#cc0000`, footer `#000000`.
2. CVS Sans Regular 48px / 36px / 16px; CVS Sans Medium for buttons.
3. Buttons at 46px high with 10px radius; cards with 16px radius and the 8px soft shadow.
4. Build: utility bar, header with pill search, rounded hero with an overlay card, tab card, news split, logo panel, black footer.
5. Use the declared token names before measuring new values.
