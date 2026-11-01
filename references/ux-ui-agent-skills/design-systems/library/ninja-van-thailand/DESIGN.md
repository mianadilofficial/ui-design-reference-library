---
version: alpha
name: "Ninja Van Thailand"
category: "Thai Brands"
description: "Ninja Van Thailand's Thai-language home page: brand red #c2002f headlines and buttons on #ffffff and #f8f9fa bands, a #231f20 header, Lato type (50px/700 hero, 18px body), #f1f3f5 inputs and 4px radii around a ninja-mascot logistics story."
colors:
  canvas: "#ffffff"
  ink: "#212125"
  primary: "#c2002f"
  on-primary: "#ffffff"
  surface-grey: "#f8f9fa"
  header-dark: "#231f20"
  ink-muted: "#8a9096"
  ink-black: "#000000"
  hairline: "#808080"
  primary-hover: "#db0037"
  text-input-bg: "#f1f3f5"
typography:
  display:
    fontFamily: Lato, "Helvetica Neue", "Arial Black", system-ui
    fontSize: 50px
    fontWeight: 700
    lineHeight: 75px
    letterSpacing: 0.5px
  display-mobile:
    fontFamily: Lato, "Helvetica Neue", "Arial Black", system-ui
    fontSize: 28px
    fontWeight: 600
    lineHeight: 44px
    letterSpacing: 0.46px
  heading:
    fontFamily: Lato, "Helvetica Neue", "Arial Black", system-ui
    fontSize: 36px
    fontWeight: 600
    lineHeight: 40px
  body:
    fontFamily: Lato, "Helvetica Neue", "Arial Black", system-ui
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: Lato, "Helvetica Neue", "Arial Black", system-ui
    fontSize: 21px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: 0.4px
  link:
    fontFamily: Lato, "Helvetica Neue", "Arial Black", system-ui
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
    letterSpacing: 0.2px
  input:
    fontFamily: Lato, "Helvetica Neue", "Arial Black", system-ui
    fontSize: 21px
    fontWeight: 400
    lineHeight: 31.5px
rounded:
  xs: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 25px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 72px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-black}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 56px
---

## Overview

The measured page is https://www.ninjavan.co/th-th, the Thai-language home of Ninja Van Thailand. Its document title is in Thai ("บริษัทชั้นนำด้านการจัดส่งพัสดุ | นินจาแวน ประเทศไทย", language `th`), which the opened page translates as "Leading parcel delivery company | Ninja Van Thailand". The scroll height is 3628px at 1280px wide.

Reading the capture top to bottom: a near-black header (`#231f20`) with the lowercase "ninjavan" wordmark and a red pin icon at left, Thai nav items (All Services, Help, Public Relations, Track Parcel), a flag language selector (TH) and a white-outlined "MY DASHBOARD" button; a white hero with the red headline "B2B Logistics Solutions", a Thai subline, a solid red button "สมัครใช้บริการ คลิก!" (Sign up for service) and a red-curved banner image of a depot with delivery trucks; a three-figure statistics row separated by thin red rules ("120,000,000+" people in SEA, more than 2 million parcels delivered a day, 100% coverage of Southeast Asia); a tabbed card (track your parcel / calculate shipping cost) with a grey input and a dark "ติดตามสถานะพัสดุ" button; a pale grey band with a red Thai headline, two ninja-mascot illustrations (a pair of ninjas with a parcel, a red truck) with small red "อ่านเพิ่มเติม" (Read more) buttons; a red-on-blue-grey map of Southeast Asia with country flag pins (Thailand, Vietnam, Philippines, Malaysia, Singapore, Indonesia); and a black headline closing the visible capture, "Trusted by nearly 2 million carriers across SEA" in Thai.

The personality is energetic and friendly logistics: brand red against white and light grey, a playful ninja mascot, flat map illustration, and big, confident numbers.

## Colors

- **Canvas `#ffffff`** (largest area, 2321 units) and **surface grey `#f8f9fa`** (903) alternate as page bands.
- **Header/footer dark `#231f20`** (787 units) is the header bar and the largest dark area measured.
- **Primary `#c2002f`** is the solid brand red used for the h1, h2, button fills and the map (306 text characters; 34 units as a fill). Hover fill `#db0037`.
- **On-primary `#ffffff`** is button and header text (423 characters).
- **Ink `#212125`** is body text (1221 characters); `#8a9096` is muted text (46); `#000000` is input text (15).
- **Input fill `#f1f3f5`** colors the tracking input and tab; **hairline `#808080`** is a border color measured on two elements.

The site's root variables carry a brand token set as space-separated RGB triplets: `--color-brand: 195 20 36`, `--color-brand-hover: 250 0 44`, `--color-brand-pressed: 154 25 31`, `--color-brand-inverse: 255 255 255` and `--color-error: 250 0 44`. Those triplets are close to, but not identical with, the measured rendered fills (`#c2002f` and `#db0037`), so the rendered values are the ones recorded in the tokens.

## Typography

All measured text is set in `Lato` with the stack `Helvetica Neue`, `Arial Black`, `system-ui` (loaded at 400 and 700; weights 500 and 600 also appear). Lato has no Thai glyphs, so the font used to draw Thai script was not measured and is not named. The scale: h1 50px / 700 / 75px with 0.5px tracking (28px / 600 / 44px on the 390px pass); h2 36px / 600 / 40px (28px / 600 / 42px on mobile); body 18px / 400 / 27px (unchanged on mobile); buttons 21px / 600 / 32px with 0.4px tracking; inputs 21px / 400; links 14px / 500 / 21px with 0.2px tracking. A 37px stat size (93 characters) and a 16px / 700 / 1.2px uppercase outlined-button label also appear.

## Layout

Full-width bands alternate white and `#f8f9fa`, with centered section headlines and two-column illustration blocks. The hero is a split: text and button at left, a curved banner image at right. Measured gaps are 8px (8 uses), 12px, 80px, 16px and 42px; paddings 40px (11 uses), 205.594px (11, the horizontal content inset), 12px, 36px, 16px, 20px and 4px. The tracking card is a tabbed panel with an inline input and button on one row.

## Elevation & Depth

Shadows are measured but modest: `rgba(0, 0, 0, 0.2) 0px 1px 5px 0px, rgba(0, 0, 0, 0.12) 0px 3px 1px -2px, rgba(0, 0, 0, 0.14) 0px 2px 2px 0px` (material-style, on the tabbed card), `rgba(0, 0, 0, 0.2) 0px 5px 5px 0px, rgba(0, 0, 0, 0.12) -3px 3px 1px -2px, rgba(0, 0, 0, 0.14) 0px 2px 2px 0px`, `rgba(0, 0, 0, 0.1) 2px -1px 5px 0px`, `rgba(0, 0, 0, 0.043) 0px 2px 0px 0px` and an inset `rgba(0, 0, 0, 0.75) -1px -8px 5px -10px inset` on two elements.

## Shapes

Radii: 4px (four elements, buttons and the input), 50% (two, circular elements such as flags), `0px 4px 4px 0px` and `4px 0px 0px 4px` (the paired input and button ends). The primary hero link computes to 0px radius, while a button candidate measured 4px with `16px 40px` padding. The tokens carry `none: 0px`, `xs: 4px` and the pill value.

## Components

- **button-primary**: `#c2002f` fill, `#ffffff` 21px / 600 text with 0.4px tracking, 72px tall (the hero link measured at 0px radius; the same style as a button measured 4px radius, `16px 40px` padding). Hover fill `#db0037`.
- **outlined button**: transparent with 2px white border, white 16px / 700 uppercase text with 1.2px tracking, 4px radius, `4px 20px` padding ("MY DASHBOARD").
- **text-input**: `#f1f3f5` fill, `#000000` 21px text, 4px radius on its outer corners, `12px 24px` padding, 56px tall.
- **link**: white 14px / 500 on the dark header.
- **tab card**: white panel with a material-style shadow and a grey inactive tab.

## Content and Voice

Copy is written in Thai with English product names kept in Latin script ("B2B Logistics Solutions", "MY DASHBOARD", country names on the map). Headlines are benefit statements aimed at business shippers, and the page leans on proof numbers: 120,000,000+ people in Southeast Asia, more than 2 million parcels a day and 100% regional coverage, as the opened page's translated text states. Calls to action are imperative and short: sign up for the service, track the parcel, calculate the shipping cost, read more. The mascot ninjas and the red truck add warmth to an otherwise operational message.

## Design System Architecture

No public design system, brand guideline or press kit is linked: the opened page https://www.ninjavan.co/th-th lists tracking, services, help, company, careers and a blog, and its "ประชาสัมพันธ์" (Public Relations) menu entry has no link target. The shipped CSS exposes a token set in the root variables, `--color-brand`, `--color-brand-hover`, `--color-brand-pressed`, `--color-brand-inverse`, `--color-bg-brand-inverse-hover`, `--color-bg-brand-inverse-pressed` and `--color-error`, stored as RGB triplets for Tailwind-style opacity composition (`--tw-*` variables are present), plus `react-phone-number-input` variables (`--PhoneInput-color--focus: #03b2cb`) for the phone field.

## Do's and Don'ts

- Do use brand red `#c2002f` for headlines, buttons and map fills on white or `#f8f9fa`.
- Do pair it with the dark header `#231f20`.
- Do set big statistics in 37px weight 600-700 red and small captions beneath.
- Do keep buttons at 4px radius, 21px / 600 text.
- Don't use the phone-input focus color `#03b2cb` as a brand color; it belongs to a third-party component.
- Don't add colors beyond red, ink, grey and the dark header.

## Responsive Behavior

The 390px mobile pass recorded the h1 at 28px / 44px (weight 600, 0.46px tracking), the h2 at 28px / 42px, and body unchanged at 18px / 27px. Layout reflow, the header nav and the hero split were not measured, and no breakpoints were captured.

## Iteration Guide

1. White and `#f8f9fa` bands, ink `#212125`, header `#231f20`.
2. Brand red `#c2002f` for h1/h2 and buttons; hover `#db0037`.
3. Lato 18px / 400 body, 50px / 700 hero, 36px / 600 section titles.
4. Inputs `#f1f3f5` with a 4px radius, 56px tall.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=ninja-van-thailand --url=https://www.ninjavan.co/th-th --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=ninja-van-thailand`.
