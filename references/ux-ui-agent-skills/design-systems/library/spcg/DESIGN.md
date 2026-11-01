---
version: alpha
name: SPCG
category: "Thai Brands"
description: "Investor and corporate site of SPCG Public Company Limited, a Thai solar-power developer, set in Gotham (Book, Medium, Bold) with Prompt fallbacks, 38px uppercase display headings, navy #222d68 and red-orange #ff4c15 accents on white, 10px-radius photo cards and light grey #ebebeb bands."
colors:
  canvas: "#ffffff"
  ink: "#212529"
  primary: "#ff4c15"
  accent-orange: "#ff9c00"
  brand-navy: "#222d68"
  surface: "#ebebeb"
  surface-card: "#bbbbbb"
  ink-navy-dark: "#001c44"
  ink-black: "#000000"
  ink-grey: "#3c3c3c"
  hairline: "#00000020"
typography:
  display:
    fontFamily: GothamMedium, PromptMedium
    fontSize: 38px
    fontWeight: 400
    lineHeight: 44px
  display-mobile:
    fontFamily: GothamBold, PromptBold
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
  body:
    fontFamily: GothamBook, PromptRegular
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: GothamMedium, PromptMedium
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    textTransform: uppercase
  link:
    fontFamily: GothamBook, PromptRegular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 10px
  md: 160px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 9px
  s5: 10px
  s6: 14px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 21px
components:
  link:
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
    padding: 8px 16px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    padding: 9px 10px 9px 36px
    height: 42px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.075) 0px 2px 4px 0px
---

## Overview

SPCG is the English home page (`https://www.spcg.co.th/en/home`) of **SPCG Public Company Limited**, a listed Thai energy company that, per the page text, operates 36 solar farms (260 MW) in Thailand with projects in Japan and a rooftop subsidiary, Solar Power Roof. The address `https://www.spcg.co.th/` first serves a language-choice splash with an "ENTER WEBSITE" button, so the measurements were taken from the real home page. The home page's DOM also holds a very large amount of unrelated injected link text (domains and gambling-style keywords, 3268 characters in link blue #007bff); that content is not part of the brand and is ignored here, and #007bff is a Bootstrap link default.

The visible home page opens with a full-bleed hero photograph of a solar farm under a blue sky. A white SPCG logo chip and wordmark sit at the top left; at the right are a language switch (TH | EN), a search icon and a menu icon. The hero headline is bold white: "Thailand's First Pioneer and Leader in Solar Farm Development (260 MW) and Solar Rooftop Solutions (150 MW) who TRUST in High Quality", with the word TRUST in orange (#ff9c00 is measured on a 5-character text run), a bracketed subtitle "[ Solar Roof Business ]" and a red-to-orange "LEARN MORE" button. Next is a "COMPANY PROFILE" block: small caption with a short red-orange rule beneath, the 38px uppercase headline "THE PIONEER OF SOLAR FARM AND SOLAR ROOF DEVELOPER IN THAILAND AND ASEAN COMMUNITY", a paragraph about the holding company and its 42 subsidiaries, and a second "LEARN MORE" button. "OUR BUSINESS" follows as four tall rounded photo cards (SOLAR FARM, SOLAR ROOF, Authorized Sales Agent of SMA, International Renewable Energy Certificate (i-REC)) with white captions at the bottom, then "SPCG'S SUCCESS" over a full-width sunset panel with four slogans (BEST VALUE, BEST DESIGN, BEST OUTPUT, BEST SERVICE).

Voice: confident corporate English with superlatives, short capitalised section labels and each label underlined by a small coloured bar.

## Colors

`canvas` is #ffffff, with `surface` #ebebeb (largest measured area, 972 weight) as the light grey band colour. `ink` #212529 is the body text colour (745 characters). `brand-navy` #222d68 is a measured background (483 weight) and also appears as text (9 characters); `ink-navy-dark` #001c44 (45 characters) is a darker navy text colour. `ink-black` #000000 and `ink-grey` #3c3c3c are small text uses (20 and 10 characters). `surface-card` #bbbbbb is the measured background behind the photo cards. `hairline` #00000020 is the 1px border colour (3 uses).

`primary` #ff4c15 is the red-orange measured as the one non-neutral accent background and is the colour of the underline bars and the left part of the "LEARN MORE" buttons in the capture; `accent-orange` #ff9c00 is the orange of the emphasised word and the right end of the button gradient seen in the capture. The extractor's generated primary, #007bff, came from the injected link text and the Bootstrap default `--primary`; it was replaced because it is a framework default and not a brand colour. The gradient itself was not measured as a CSS value, so only its two end colours (both measured) are recorded.

Overlays: a cookie section and a modal scrim (`sectionCookie`, `scrim mypopupmodal`) were detected and hidden before measuring; they are not documented as brand UI.

## Typography

The site loads Gotham in four cuts as web fonts (GothamBook, GothamMedium, GothamBold, GothamLight) and Prompt (PromptRegular, PromptMedium) as the Thai companion; there is no generic fallback in the declared stacks (for example `GothamBook, PromptRegular`). GothamBook carries 5599 measured characters and GothamMedium 969. Material Design Iconic Font and Font Awesome 5 Free provide icons.

Measured scale: `display` 38px / 44px (GothamMedium, uppercase headline in the capture); `display-mobile` 32px / 38.4px in GothamBold at 390px; `body` 18px / 24px in GothamBook; `nav` 16px / 24px GothamMedium uppercase (TH, EN); `link` 16px / 24px. Other sizes include 24px (735 characters), 13px, 14px with 1.2px letter-spacing (button labels, 20 characters), 20px and 21px. Weight 400 covers 6524 characters; weights 500, 600 and 700 are rare, so hierarchy comes from the family cut (Book, Medium, Bold) and uppercase, not from numeric weight.

## Layout

The page is 1280px wide and 4422px tall. The hero is full-bleed with its text in a left column; content bands use a centred container; the container width was not measured. Measured paddings are 15px (52 uses), 20px (12), 14px and 21px (8 each), 137px (4). The business cards are a four-column row; the mobile pass reports a maximum of 4 card columns.

## Elevation & Depth

Three shadows were measured: `rgba(0, 0, 0, 0.075) 0px 2px 4px 0px` (4 uses, card), `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` (4 uses) and `rgba(0, 0, 0, 0.15) 0px 0px 20px 0px` (3 uses, soft glow). Photographs and text-over-image overlays do most of the depth work.

## Shapes

Radii measured: 10px (4 uses; the photo cards), 4px (3) and 160px (1; the search input, a full pill). Buttons in the capture are rectangular with square corners; their exact radius and height were not recorded.

## Components

**Learn more button.** Rectangular, red-orange to orange fill in the capture (end colours #ff4c15 and #ff9c00), white 14px uppercase bold text with 1.2px tracking.

**Section label.** Uppercase 16px caption with a short #ff4c15 bar beneath.

**Business card.** 10px radius, full-height photograph, white caption bottom-left, soft shadow rgba(0, 0, 0, 0.075) 0px 2px 4px 0px.

**Navigation.** White Gotham Medium 16px uppercase over the hero; language switch "TH | EN"; icon buttons for search and menu.

**Search input.** 160px radius, 42px tall, 9px 10px 9px 36px padding (space for an icon).

## Design System Architecture

No public design system or brand guideline is linked from the home page that was read (the page offers corporate-governance and investor menus but no press kit or brand page). The site is built on Bootstrap 4 (the stylesheet exposes the standard --primary, --blue, breakpoints 576px, 768px, 992px and 1200px) with brand styling in component CSS: Gotham web fonts, a navy plus red-orange palette, underlined section labels and rounded photo cards.

## Do's and Don'ts

- Do use #ff4c15 and #ff9c00 together as the action and highlight pair, with white text on the buttons.
- Do keep Gotham cuts distinct (Book for body, Medium for headings, Bold for emphasis) and set headings uppercase.
- Do put each section label above its content with the short red-orange bar.
- Don't use Bootstrap blue #007bff as a brand colour.
- Don't reproduce the injected link text found in the page DOM or the cookie and modal overlays.
- Don't add heavy shadows; measured ones are 0.075 to 0.2 alpha.

## Responsive Behavior

Measured at 390px: the heading renders at 32px / 38.4px in GothamBold, and the mobile pass reports 0 header links visible, no visible menu-toggle button label and a maximum of 4 card columns. No other mobile layout was recorded, so the behaviour of the hero, cards and menu icon at that width is not measured.

## Iteration Guide

1. Keep white canvas, #212529 text and the #ff4c15 / #ff9c00 accent pair.
2. Headings: GothamMedium 38px / 44px uppercase; body GothamBook 18px / 24px.
3. Cards: 10px radius, photo-first with a white caption and the 0.075-alpha shadow.
4. Re-run the extractor if the injected content is cleaned from the DOM.
5. Run `node web/scripts/verify-designs.mjs --slug=spcg` after edits.
