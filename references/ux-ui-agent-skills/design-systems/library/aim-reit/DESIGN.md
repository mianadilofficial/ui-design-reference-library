---
version: alpha
name: AIM Industrial Growth REIT (AIMIRT)
category: "Thai Brands"
description: "Investor site of AIM Industrial Growth Freehold and Leasehold Real Estate Investment Trust (AIMIRT), measured at aimirt.com/en/home after aimreit.com redirected there. DB Helvethaica X at 14.4px to 32px, emerald #00a788 buttons and nav accents with 3px radius, slate #99a3a8 asset band, white canvas and a #f4f4f4 footer."
colors:
  canvas: "#ffffff"
  ink: "#222221"
  primary: "#00a788"
  on-primary: "#ffffff"
  surface-grey: "#f4f4f4"
  ink-black: "#000000"
  ink-grey: "#899595"
  ink-offwhite: "#f8f8f8"
  primary-hover: "#506161"
  link-bg: "#00a788cc"
  band-slate: "#99a3a8"
typography:
  display:
    fontFamily: db_helvethaica_x65_med
    fontSize: 32px
    fontWeight: 600
    lineHeight: 35.2px
  body:
    fontFamily: db_helvethaica_x65_med
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 27.36px
  button:
    fontFamily: db_helvethaica_x65_med
    fontSize: 14.4px
    fontWeight: 600
    lineHeight: 21.6px
  nav:
    fontFamily: db_helvethaica_x65_med
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  link:
    fontFamily: db_helvethaica_x65_med
    fontSize: 17.6px
    fontWeight: 400
    lineHeight: 26.4px
rounded:
  xs: 3px
  sm: 5px
  md: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 9.6px
  s6: 10px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 20px 10px
    height: 62px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 25px 15px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 8px 0px
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
    padding: 4px 0px
  footer:
    backgroundColor: "{colors.surface-grey}"
---

## Overview

This file is named after the site that was measured, not the queued name. The queue lists "AIM Commercial Growth REIT" at `https://www.aimreit.com/`; that URL redirects (HTTP 200 after redirect) to `https://www.aimirt.com/th`, whose title is "AIM Industrial Growth Freehold and Leasehold Real Estate Investment Trust" (AIMIRT) — a sibling trust, so this DESIGN.md describes AIMIRT. The redirect target first shows a bilingual entry page: a memorial splash for 13 October (a portrait, a gold-washed temple skyline, a tribute text and an "เข้าสู่หน้าหลัก | Enter Site" pill button in #be9032 gold). That splash is a tribute page, not the site's design; the measurement was re-run on the real home page `https://www.aimirt.com/en/home` and only that page is described below.

The home page has a white 97px header with the AIMIRT logo (a green cube mark, the letters "AIM" in dark and "IRT" in green, with the line "AIM Industrial Growth REIT") and a row of English menu items (Home, About AIMIRT, Management, Investment Assets, Investor Relations, Sustainability Policy, Newsroom, What is REIT, Property Rental / Offering, Contact Us) with the current item in green and underlined, plus a green "EN" language chip. A full-width photograph of an industrial warehouse carries the title "AIM INDUSTRIAL GROWTH FREEHOLD & LEASEHOLD REAL ESTATE INVESTMENT TRUST" in dark text with "AIM" in green; four translucent green tabs run along its bottom edge (AIMIRT Investment Highlight, Investment Assets, General Information, Contact Us). Below are "AIMIRT Investment Highlight" with ten line-icon bullets around a central highlighted item ("High-quality assets") and a green "More Info" button, then a slate "Investment Assets" band with a two-column grid of project photographs (JWD Project, TIP Project, SCC Project, Bangkadi Industrial Park Project and more), each with a translucent white caption strip and a green arrow.

## Colors

`canvas` #ffffff is the page background. The measured area leaders are `band-slate` #99a3a8 (3,632 units, the Investment Assets band), white (2,270), a translucent white #ffffffd9 (772, caption strips), `surface-grey` #f4f4f4 (529, footer) and the emerald `primary` #00a788 (393). `link-bg` #00a788cc (97) is the translucent green of the hero tabs and `primary-hover` #506161 (89) is the dark slate fill that a hovered button takes. The extraction's own canvas guess was the slate band; the body background is white, so `canvas` is #ffffff.

Text: `ink` #222221 (912 characters), `primary` green (566, headings of the highlight items and project captions), white (534), `ink-black` #000000 (459, menu links), `ink-grey` #899595 (120) and `ink-offwhite` #f8f8f8 (81). `on-primary` is white on the green buttons.

## Typography

One family, DB Helvethaica X (loaded as `db_helvethaica_x65_med`, weight 400, with synthesized heavier weights), sets all 2,757 measured characters. It is a Thai typeface family with Latin glyphs; no foundry page was opened here, so nothing further is claimed about it. Icons come from FontAwesome and a Flaticon set.

Scale: `display` 32px / 35.2px, weight 600 ("AIMIRT Investment Highlight"); `nav` 20px / 30px, weight 400; `link` 17.6px / 26.4px, weight 400 (hero tabs); `body` 14.4px / 27.36px, weight 400; `button` 14.4px / 21.6px, weight 600. By character count: 14.4px (1,492), 16px (502), 19.2px (409), 13.6px (138) and 32px (133). Weights: 400 (2,074 characters), 600 (670) and 700 (13).

## Layout

The desktop capture is 1280px wide and 6,287px tall. Header 97px with a soft shadow; hero photograph about 470px tall in the capture with a tab strip along its bottom; centered section titles at 32px; the highlight section is a three-column arrangement (five items left, a feature in the middle, five items right) separated by thin vertical and horizontal rules; the asset grid is two equal columns with 20px-class gaps. Section blocks are centered with a 1,250px title width. Spacing steps measured: 4, 5, 7, 8, 9.6, 10, 15, 16, 20 and 24px.

## Elevation & Depth

One shadow is recorded: `rgba(173, 173, 173, 0.5) 0px 2px 3px 0px` under the header. Other depth is color-driven: translucent green tabs and white caption strips over photographs and a solid slate band.

## Shapes

Radii on screen: 50% (10 elements, circular icon frames around the highlight icons and arrows), 3px (3, the buttons), 5px (1) and 100px (1, the language chip). Buttons are 3px; most other surfaces are square.

## Components

**Primary button** — emerald fill, white 14.4px DB Helvethaica 600 label ("More Info", "Read more"), padding 20px 10px, 62px tall, 150px wide, 3px radius; hover fill #506161. **Hero tab** — translucent green (#00a788cc) strip, white 17.6px label, padding 25px 15px, 76px tall (442px wide in the first). **Navigation** — white bar with an 8px vertical padding and soft shadow; 20px black links, current item in green with a short green underline. **Icon bullet** — 50% circular outline in green containing a line icon, with a 14.4px label and a hairline rule. **Project card** — photograph with a translucent white caption strip containing a green bold title and a circular arrow. **Footer** — #f4f4f4 band with a risk remark paragraph about REIT investment.

## Design System Architecture

No public design system, brand guideline or press kit was found: the homepage HTML links none and no search was run. The site's root variables are Bootstrap's stock set (`--primary` #007bff, `--blue`, `--danger` and breakpoints `--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-lg` 992px), which do not match the measured emerald #00a788 and so are not brand tokens. The page's `<head>` loads a family list of Thai fonts from a font host (Kanit, Prompt, Noto Sans Thai, the PSL family and others), of which only DB Helvethaica X was measured on the English home page. The de-facto system is therefore the measured set: one typeface, one emerald, one slate band and small 3px corners.

## Do's and Don'ts

Do use emerald #00a788 for actions, active menu items and caption titles, with white labels on buttons. Do alternate white sections with the slate asset band. Do place project photographs in a two-column grid with translucent caption strips. Do frame icons in thin circular green outlines.

Don't use Bootstrap's #007bff as a brand color. Don't use the gold #be9032 of the memorial entry page as part of this system. Don't round buttons beyond 3px. Don't add shadows other than the soft header one.

## Responsive Behavior

Measured at a 390px viewport: the h1-equivalent title stays 32px / 35.2px (wrapping to 70px height in a 360px column); body stays 14.4px, with a 21.6px line height in the address paragraph (264px wide); the primary button is unchanged (14.4px, 150px wide, 62px tall, 3px radius); the header measures 95px tall with the same soft shadow. Most frequent mobile sizes: 14.4px, 16px and 19.2px. How the ten-item menu collapses and how the asset grid reflows were not measured.

## Iteration Guide

Start from the tokens: white canvas, #222221 text, emerald actions and one slate band. A new section should have a centered 32px title, optionally a green hairline under a sub-title, and a single emerald button. Keep photography industrial and bright. Measure anything not covered here (forms, tables of financial data, dark mode) before documenting it; no hover data beyond the button fill was recorded.

A note on voice and imagery: copy is short and declarative, written as lists of benefits ("Thailand's first REIT investing in cold storage", "High occupancy rate", "Growth opportunity"), and the investment-asset section introduces itself with one sentence about freehold and leasehold rights over movable and immovable assets in the industrial sector. Photography is literal and well lit: warehouse racking with numbered bays, a steel-roofed distribution hall, storage tanks and an industrial-park gateway sign. The visual rhythm is white section, slate section, white section, with the emerald color reserved for the few things a visitor can act on.
