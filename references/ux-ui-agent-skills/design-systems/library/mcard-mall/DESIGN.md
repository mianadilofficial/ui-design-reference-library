---
version: alpha
name: M Card
category: "Thai Brands"
description: "M Card (mcardmall.com) is the loyalty-card site of The Mall Group's shopping complexes: a white page with #1a1a1a black pill buttons that turn red #c9252c on hover, the DBAiryStd type family up to 72px, a charcoal lifestyle band, 10px-radius cards and a bold red campaign hero."
colors:
  canvas: "#ffffff"
  ink: "#1a1a1a"
  primary: "#1a1a1a"
  on-primary: "#ffffff"
  surface-grey: "#bbbbbb"
  ink-black: "#000000"
  accent-red: "#e20000"
  accent-red-hover: "#c9252c"
  accent-red-alt: "#d92115"
  hairline: "#d8d8d8"
typography:
  display:
    fontFamily: DBAiryStdMed
    fontSize: 72px
    fontWeight: 400
  subheading:
    fontFamily: DBAiryStdBd
    fontSize: 32px
    fontWeight: 700
  body:
    fontFamily: DBAiryStdBd
    fontSize: 24px
    fontWeight: 400
  button:
    fontFamily: DBAiryStdMed
    fontSize: 22px
    fontWeight: 400
  body-dominant:
    fontFamily: DBAiryStd
    fontSize: 24px
    fontWeight: 400
rounded:
  xs: 6.4px
  sm: 10px
  md: 23px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 46px
  button-primary-hover:
    backgroundColor: "{colors.accent-red-hover}"
  link:
    textColor: "{colors.ink-black}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
---

## Overview

M Card is the membership-card program of The Mall Group (the queue lists https://www.themall.co.th as its source). The measured page is https://mcardmall.com/en/home (title "M Card for all lifestyles / M Card / M Card", language en), 1280px wide and 4170px tall. When first opened, the site shows a black memorial entry screen with a portrait, a Thai tribute text and an "ENTER SITE" pill; that full-screen splash is not the brand's home page, so the extractor hid it (`consentOverlaysHidden: ["enter-site"]`) and measured the underlying home page. The splash and its grayscale portrait are not documented as brand UI.

The home page in the capture has: a utility row (Be our partner, Store directory); a header with the red "M Card" wordmark and the italic tagline "For All lifestyle", the menu Home (in red), About M Card, Promotions, Download M Card App, M Service, M Story, M Junior Club, M Travel, a search icon and a language switch "EN | TH" with EN in red; a full-width red campaign carousel ("สมัครสมาชิกใหม่ ผ่าน M Card App", "รับ WELCOME COUPON 100 บาท" with a phone mockup and floating feature tags M POINT, M PRICE, M POWER, PRIVILEGE, BIRTHDAY); an intro block with the 72px "M Card" heading, three bullet points ("Get access to varieties of promotions and discount from multiple brands and participating shops" and two more about M Point and exclusive membership prices) and a black pill button "Explore More" beside a phone image with circular rotating text ("Card for All lifestyle. Exploring more phenomena."); a charcoal band "Explore Your Lifestyle" with ten photo tiles (EAT, PLAY, STAY, GOURMET ONLINE, M ONLINE.COM, NATIONWIDE PROMOTION, EVENT, BEAUTY & SPA, GLOBAL PRIVILEGE, Bangkok Bank M); and a white "We think you'll love" carousel of promotion posters with a "View More >" link. The voice is plain commercial English with Thai campaign artwork.

A cookie-consent card ("Cookie Consent … Accept / Change Preferences") is present in the capture. It is a consent control and is not documented as brand UI; the detected "Accept" hover entry belongs to it.

## Colors

Background areas by weight: #ffffff (3999), #1a1a1a (2859, the "Explore Your Lifestyle" band and the button fill), #bbbbbb (586), #ffffffbf (8), #000000 (7), #c9252c (0 area, appears as hover fill).

- **canvas #ffffff**, **ink #1a1a1a** (the most-read text color, 988 characters) and **primary #1a1a1a**, the fill of the "Explore More" button with white text **on-primary #ffffff**.
- **ink-black #000000** is pure-black text (646 characters), used for links such as "Store directory".
- **accent-red #e20000** (15 characters), **accent-red-hover #c9252c** (8 characters; also the measured hover fill of "Explore More" and the hover text color of "Store directory") and **accent-red-alt #d92115** (1 character) are the measured reds in text. The capture shows the same red family in the "M Card" wordmark and the campaign hero, but which of the three reds is used in the logo was not recorded.
- **surface-grey #bbbbbb** is a measured background area; its element was not recorded.
- **hairline #d8d8d8** borders the promotion cards.

The translucent white #ffffffbf is a header/overlay effect and is not tokenised. No custom properties exist on :root (0 variables), so no framework default colors are present.

## Typography

The page loads **DBAiryStd**, **DBAiryStdMed** and **DBAiryStdBd** (the shipped family names; the foundry is not stated on the page) and **Kanit** (also loaded; the elements it styles were not recorded). Measured sizes by character weight: 24px (852), 22px (611), 16px (328), 20px (153), 32px (102), 42px (49), 18px (14), 72px (5).

- **display**: DBAiryStdMed 72px / 400 (the "M Card" heading; measured on a div, line-height "normal").
- **subheading**: DBAiryStdBd 32px / 700.
- **body**: DBAiryStdBd 24px / 400; **body-dominant**: DBAiryStd 24px / 400.
- **button**: DBAiryStdMed 22px / 400.

Line-heights were recorded as "normal" for these roles, so none are tokenised.

## Layout

The page is a vertical stack: utility row, header, hero carousel at full width (with arrows and three dots), a two-column intro (text at the left, a tall phone image at the right), a full-width charcoal band holding a 5 by 2 grid of square photo tiles that touch each other with thin spacing, then a white carousel of cards that bleeds off both edges. Tile labels are white all-caps over a dark gradient at the tile's bottom. Spacing steps recorded: 1, 3, 5, 6, 8, 10, 14, 15, 16 and 20px.

## Elevation & Depth

One shadow was measured, `rgba(0, 0, 0, 0.2) 0px 0px 6px 0px` (a soft glow on one element). The page is otherwise flat; depth is created by the contrast between the white page, the #1a1a1a lifestyle band and the saturated red hero. Photo tiles show a darker gradient at the bottom for label legibility.

## Shapes

Radii: 10px (42 occurrences, cards and tiles), "10px 10px 0px 0px" (17, card image tops), 50% (7, circular carousel arrows), "0px 0px 10px 10px" (5, card caption bottoms), 6.4px (2, the cookie Accept button) and 23px (1, the pill-like "Explore More" button; its 46px height makes 23px a full pill).

## Components

- **button-primary** ("Explore More"): fill #1a1a1a, text #ffffff, DBAiryStdMed 22px, radius 23px, height 46px. Hover: fill becomes rgb(201, 37, 44) (#c9252c) and the height grows to 48px; the border is white.
- **link** ("Store directory"): #000000 text; on hover the text and border become rgb(201, 37, 44).
- **Nav**: the active item "Home" and the active language "EN" are red; the other items are dark text.
- **card**: white, 10px radius, #d8d8d8 border; image at the top (radius 10px 10px 0 0) and a caption below in dark bold type.
- **Lifestyle tile**: photo with a white all-caps label.
- **Carousel arrows**: white circles (50% radius) with chevrons.
In the mobile pass the extractor also detected a small "Open" button (fill #ff0000, text #ffffff, 18px, radius 30px, padding 1px 6px, height 30px); its role was not determined, so it is not tokenised.

## Design System Architecture

No public M Card design system or brand guideline was found; the home page markup has no brand, design or press link. The page declares no CSS custom properties on :root (0 variables), so there is no named token layer; the visual system is carried by the component CSS and by the artwork. The DBAiryStd family is loaded as three weights under separate family names (DBAiryStd, DBAiryStdMed, DBAiryStdBd) rather than one family with weights, which is why the typography tokens use the family name to select weight. Colors in this document come from computed styles.

## Do's and Don'ts

- Do keep the page white with #1a1a1a text and a charcoal band for the lifestyle grid.
- Do use black pill buttons that turn red (#c9252c) on hover.
- Do use the red family (#e20000, #c9252c) sparingly for active nav states, language state and campaign emphasis.
- Do give cards and tiles a 10px radius.
- Don't document the memorial entry splash, the grayscale portrait or the cookie-consent card as brand UI.
- Don't add custom shadows; one faint glow is the only one measured.
- Don't mix DBAiryStd weights by CSS font-weight; choose the family name that carries the weight.

## Responsive Behavior

The extraction's mobile pass recorded: the h1 "M Card" at 72px (same as desktop) in DBAiryStdMed; mobile font sizes by character weight of 24px (819), 16px (371), 20px (334), 22px (300), 32px (102), 30px (49), 18px (36) and 72px (5); and the "Open" button described above. Mobile viewport width, breakpoints, menu pattern and column counts were not recorded: not measured.

## Iteration Guide

1. Start from white, #1a1a1a ink and the black pill button with its red hover.
2. Build the dark lifestyle band as a grid of 10px-radius photo tiles with white all-caps labels.
3. Keep campaign color in imagery (the red hero), not in the interface chrome.
4. Use DBAiryStdMed for headings and buttons, DBAiryStdBd for subheadings, DBAiryStd for body.
5. Dark mode is not measured.
6. Run `node web/scripts/verify-designs.mjs --slug=mcard-mall` after edits.
