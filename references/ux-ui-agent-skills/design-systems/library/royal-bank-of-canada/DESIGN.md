---
version: alpha
name: Royal Bank of Canada (RBC corporate site)
category: "Banking & Insurance"
description: "RBC (Royal Bank of Canada) corporate site, rbc.com/about-rbc.html: RBCDisplay headings with Roboto body, RBC blue #006ac3 actions with #0051a5 hover, yellow #fedf01 Sign In button, white cards on a #eeeeee band, near-square 1px button radius."
colors:
  canvas: "#eeeeee"
  page-body: "#ffffff"
  ink: "#252525"
  primary: "#006ac3"
  on-primary: "#ffffff"
  ink-4: "#000000"
  hairline: "#c4c8cc"
  primary-hover: "#0051a5"
  button-secondary-bg: "#fedf01"
  nav-link-bg: "#fafafb"
  text-input-border: "#6f6f6f"
typography:
  display:
    fontFamily: RBCDisplay
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  display-mobile:
    fontFamily: RBCDisplay
    fontSize: 28px
    fontWeight: 700
    lineHeight: 35px
  heading:
    fontFamily: RBCDisplay
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  subheading:
    fontFamily: Roboto
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: Roboto
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: Roboto
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
    textTransform: capitalize
  nav:
    fontFamily: Roboto
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: Roboto, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 28px
rounded:
  xs: 1px
  sm: 3px
  md: 4px
  lg: 8px
spacing:
  s1: 2px
  s2: 3px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 20px 32px
    height: 56px
    boxShadow: rgb(0, 81, 165) 0px 0px 0px 1px inset
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 15px
    height: 42px
    borderColor: "{colors.page-body}"
    boxShadow: rgb(232, 207, 0) 0px 0px 0px 1px inset
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 15px
    borderColor: "{colors.page-body}"
    boxShadow: rgb(0, 81, 165) 0px 0px 0px 1px inset
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.primary}"
  nav-link:
    backgroundColor: "{colors.nav-link-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 3px 6px
    borderColor: "{colors.page-body}"
    boxShadow: rgb(196, 200, 204) 0px 0px 0px 1px inset
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 10px 45px 10px 10px
    height: 50px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-4}"
    rounded: "{rounded.lg}"
  footer:
    textColor: "{colors.page-body}"
---

# Royal Bank of Canada (RBC corporate site)

## Overview

The measured URL is https://www.rbc.com/about-rbc.html, titled "About RBC - RBC". This is the corporate and investor-facing home of Royal Bank of Canada, not the retail banking product site, so the page documents the bank's institutional face. Its structure: a thin dark-blue utility strip with region links (Canada, United States, International, Europe, Caribbean, About RBC) and "Other Sites"; an RBC-blue header bar with the lion-and-globe shield logo, a search field, Contact Us, a language switch and a yellow "Sign In" button; a white secondary nav (Our Company, Our Impact, Investor Relations, News & Stories, Careers, Insights); a hero with the headline "Introducing My Money Matters" over a pale sky-blue wash with curved navy, yellow and light-blue ribbons and a laptop mockup; and rows of bordered white content cards.

Voice is plain and institutional: "Where We Operate", "Select a Region", "Latest News", "View Media Newsroom". Blue text links with small chevrons are the main wayfinding device, and photography shows people at work and a signage close-up.

## Colors

`primary` RBC blue #006ac3 fills the main call-to-action ("Visit My Money Matters"), the header bar, the "Go" button, the active region tab and the heading and link text (893 characters of blue text). The hover and edge value is `primary-hover` #0051a5, which also appears as a 1px inset box shadow on blue buttons. The second brand color is yellow `button-secondary-bg` #fedf01, the fill of the "Sign In" button, with an inset edge #e8cf00 (rgb(232, 207, 0)); the ribbons in the hero reuse the same yellow family. Text `ink` is #252525 (1138 characters), with pure black #000000 on 27 characters and white on blue.

The page is two-toned: `page-body` #ffffff cards sit on a `canvas` #eeeeee band (the larger painted area, 1364 weight against 1203 for white). `hairline` #c4c8cc is the card, input and nav-link border color (8 uses) and `text-input-border` #6f6f6f is the select box border. A mid-gray #585858 appears as a fill (131 weight) and #fafafb as a pale nav-link background.

## Typography

Two families, plus one fallback. RBCDisplay (weights 500 and 700) is the brand display face for headings; Roboto (300, 400, 500 and italic 400) is the interface and body face; Georgia is measured on 48 characters (the news dates in italic serif in the capture).

Measured roles: `display` RBCDisplay 700, 40px / 48px (hero headline, set in blue #006ac3); `heading` RBCDisplay 500, 24px / 32px (card titles such as "Where We Operate", #252525); `subheading` Roboto 500, 18px / 28px; `body` Roboto 300, 16px / 24px; `button` Roboto 500, 16px / 16px with `text-transform: capitalize`; `nav` Roboto 400, 14px / 24px; `input` Roboto 300, 16px / 28px. The footer headline measured RBCDisplay 500 at 36px / 44px in white. By character count, 16px dominates (2137), then 24px (261), 12px (94), 18px (64) and 40px (37); weights are 400 (1161), 300 (1040), 500 (435) and 700 (28). The light 300 weight on body copy, against a 500 weight on buttons, gives the site a thin, airy text color on #eeeeee.

## Layout

Content is laid out in cards on a centered grid. The first band has three equal cards (Where We Operate with a region select, RBC Investor Day 2025, Latest News). The second band is a wide image-plus-text card (Careers at RBC) beside a text card (In the Community). Below that, "About RBC" with three accordion rows on the left and two tagged story cards on the right ("THOUGHT LEADERSHIP", "ECONOMICS"). "Our Operations" has four outlined tab buttons (Canada, United States, International, Caribbean) above a three-column row of icon headings (Banking, Investing at RBC, Insurance).

Paddings measured: 15px (67 uses), 20px (19), 8px, 55px, 30px, 60px and 16px. The input measures 50px tall with `10px 45px 10px 10px` padding to leave room for the chevron.

## Elevation & Depth

There are no soft drop shadows in the data. Depth is made with 1px borders (#c4c8cc cards, #006ac3 on the active tab) and with 1px inset box shadows on buttons: `rgb(0, 81, 165) 0px 0px 0px 1px inset` (2 uses), `rgb(232, 207, 0) 0px 0px 0px 1px inset` on the yellow button, `rgb(0, 106, 195) 0px 0px 0px 1px inset` and `rgb(196, 200, 204) 0px 0px 0px 1px inset`. The hero uses a pale sky-blue gradient wash and colored ribbons, not elevation.

## Shapes

Corners are nearly square. Buttons and the Go control use `xs` 1px (3 uses). `sm` 3px (4 uses) and `md` 4px (2 uses) are small element radii, and `lg` 8px (2 uses) is the card radius token. In the capture the white cards read as square-cornered boxes with thin outlines; the tag chips and story cards show slightly rounded corners, matching the 4px and 8px measurements.

## Components

**Primary button**: blue #006ac3, white text, Roboto 500 16px capitalize, 56px high, padding `20px 32px`, 1px radius, inset 1px #0051a5 edge; hover fill #0051a5.

**Secondary button (Sign In)**: yellow #fedf01 with #252525 text, 42px high, `12px 15px` padding, 1px white border, inset #e8cf00 edge.

**Go button / link**: blue fill, white text, `12px 15px` padding, white border.

**Nav links**: blue 14px text on a #fafafb background with a 1px inset #c4c8cc edge and `3px 6px` padding.

**Text input / select**: white fill, #252525 Roboto 300 16px, 50px tall, #6f6f6f border.

**Cards**: white, 1px #c4c8cc outline; card title RBCDisplay 24px centered or left-aligned; links are blue with a leading chevron and the date line below in Georgia italic.

**Footer**: white text (#ffffff), RBCDisplay 500 36px / 44px headline; its fill was not measured.

## Design System Architecture

No public RBC design system, brand-guideline page or token package was opened for this brief, so there is no official source to cite. The shipped CSS shows no root custom properties (the extraction's rootVars set is empty); colors are literal hexes and fonts are two web fonts: RBCDisplay and Roboto, the extraction listing "RBCDisplay 500 normal", "RBCDisplay 700 normal" and Roboto 300, 400, 500 and 400 italic. The de-facto system is therefore a handful of repeated values: blue #006ac3, hover #0051a5, yellow #fedf01, ink #252525, border #c4c8cc and the #eeeeee and #ffffff backgrounds.

## Do's and Don'ts

- Do use #006ac3 for actions, links and the hero headline, and #0051a5 for hover.
- Do reserve yellow #fedf01 for the single sign-in action.
- Do put white cards with a 1px #c4c8cc outline on the #eeeeee band.
- Do set headings in RBCDisplay and prose in Roboto 300.
- Do keep button corners at 1px.
- Don't use drop shadows; use 1px borders and 1px inset edges.
- Don't use extra colors for decoration; the ribbons reuse blue and yellow.
- Don't set body copy above weight 400 outside buttons.

## Responsive Behavior

A 390px mobile pass was recorded. The h1 is RBCDisplay 700 at 28px / 35px (`display-mobile`) in #006ac3. Mobile character counts by size are 16px (1955), 18px (261), 14px (179), 28px (37), 12px (27), 20px (15) and 24px (12). Column changes, navigation behavior and breakpoints were not measured.

## Iteration Guide

1. Start with #ffffff cards on #eeeeee, text #252525, action #006ac3.
2. Use RBCDisplay for headings (40/48, 24/32) and Roboto 300 16/24 for text.
3. Build buttons at 1px radius with a 1px inset edge in the darker shade.
4. Keep yellow only for Sign In.
5. Gate: `node web/scripts/verify-designs.mjs --slug=royal-bank-of-canada`.
