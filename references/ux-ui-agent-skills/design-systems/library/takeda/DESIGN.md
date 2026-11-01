---
version: alpha
name: Takeda
category: "Pharma"
description: "Takeda global home page: Gotham at 700 42px display and 400 16px body, brand red #bd120a, white canvas with #edf2f4 story bands, 30px card and photo radius, 9999px pill secondary buttons, square 56px primary button, charcoal #333333 footer."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#bd120a"
  on-primary: "#ffffff"
  surface-2: "#edf2f4"
  ink-3: "#000000"
typography:
  display:
    fontFamily: >-
      gotham, "gotham Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
      "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 42px
    fontWeight: 700
    lineHeight: 46px
  display-mobile:
    fontFamily: >-
      gotham, "gotham Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
      "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 45px
  subheading:
    fontFamily: >-
      gotham, "gotham Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
      "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  body:
    fontFamily: >-
      gotham, "gotham Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
      "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: >-
      gotham, "gotham Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
      "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 26px
  link:
    fontFamily: >-
      gotham, "gotham Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
      "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 26px
rounded:
  xs: 4px
  sm: 10px
  md: 30px
  lg: 100px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 56px
  link:
    textColor: "{colors.ink-3}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  card:
    textColor: "{colors.ink-3}"
    rounded: "{rounded.md}"
    borderColor: "{colors.surface-2}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 32px 0px
---

# Takeda

## Overview
The measured site is Takeda Pharmaceuticals' global home page (https://www.takeda.com/, title "Takeda Pharmaceuticals: Global Homepage"). It is a corporate pharma site that mixes corporate storytelling with press and investor access. The capture opens on a rounded red hero panel with a swirling line pattern and white headline copy ("Takeda leads with a generational promise", "to boldly reinvent for a healthier world"), then a large light-weight sentence ("Unlocking a new era of impact with first-in-class treatments.") above a white feature card with a documentary-style photo of a clinician and a patient. Further bands show "Our Stories" cards on a pale blue-grey ground (#edf2f4), a "Recent News" row of white cards with a red or dark-grey top rule, and "Learn more about Takeda" photo cards (Join Us, Investors, R&D). The tone is warm and human: real people, soft 30px corners, red used for headings, links and outline buttons, and a dark charcoal footer. Copy is declarative and mission-led.

## Colors
`primary` is Takeda red #bd120a, measured as the fill of the "Sign up" button and also published as the root variable `--colorPrimary: #BD120A`; `on-primary` is #ffffff. `canvas` is #ffffff, `ink` (body and navigation text) is #333333 and `ink-3` (link and card heading text) is #000000. `surface-2` (#edf2f4) is the pale blue-grey band behind the story cards and the card border color. The footer uses #333333 as its background with white text. Red appears as card headline text (the h3 "FDA approves new treatment for polycythemia vera" measures #bd120a), as the 1px inset outline of the "View all" pill buttons (`rgb(189, 18, 10) 0px 0px 0px 1px inset`) and as the top border of the first news card. The hero panel is a red gradient photograph whose gradient colors were not recorded as tokens.

## Typography
One family is measured, `gotham` (loaded at weights 300, 400, 500 and 700, plus a generated "gotham Fallback"), followed by a Tailwind-style system stack: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif and emoji faces. `display` is 42px / 46px at weight 700; `display-mobile` is 30px / 45px at weight 700. `subheading` is 24px / 32px at weight 500 (news headlines). `body` is 16px / 26px at weight 400. `button` is 16px / 26px at weight 300 (published as `--cta-fontWeight: 300`) and `link` is 16px / 26px at weight 700. The large "Unlocking a new era..." and section titles ("Our Stories", "Recent News") are set at a light weight in the capture. Gotham is commercial; Montserrat is the nearest open substitute.

## Layout
Measured at 1280px width and 3558px scroll height. A 71px white navigation bar spans the page with the logo at left, six uppercase items (About, Science, Our Stories, Newsroom, Investors, Careers), and Search / Global / EN controls at right. Content is held to a centered column; the hero is a single rounded panel inset from the viewport edges; story and news rows are three- and four-column card grids; the bottom band is three photo cards. The footer is 539px tall with 32px 0px padding. Spacing steps: 4px, 8px, 10px, 12px, 14px, 16px, 20px, 24px, 30px and 32px; the most frequent gaps are 24px (12 elements), 10px and 8px (10 each).

## Elevation & Depth
Shadows are Tailwind-scale and gentle. Cards carry `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` (3 elements) and the navigation and floating panels carry `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px` (2 elements). Hierarchy is mostly produced by white cards on the #edf2f4 band, thin rules on news cards and large photographs, not by heavy shadow.

## Shapes
Rounded geometry is a brand signature. Measured radii: 30px (17 elements: cards, hero and photo media), 9999px (11 elements: pill buttons and icon circles), 10px (4), asymmetric `0px 0px 30px 30px` and `30px 30px 0px 0px` (3 each, for media that joins a card body), 100px (2) and 4px (1). The root variables include `--globalMedia-borderRadiusBottomRight: 1.875rem` (30px). The primary "Sign up" button, in contrast, measures a 0px radius and 56px height; the secondary "View all" buttons are pills with a red inset outline.

## Components
- **button-primary**: #bd120a fill, #ffffff text, 16px weight 300, 0px radius, 56px tall.
- **Secondary pill**: transparent fill, 1px inset red outline, 9999px radius, #333333 label (published as `--buttonSecondary-textColor: #333333`) with a trailing arrow.
- **link**: black, 16px weight 700, underlined in red in the "Learn more" pattern.
- **nav / nav-link**: white background, #333333 text, 16px, 71px tall, the large soft shadow.
- **card**: 30px radius, #edf2f4 border, 0 1px 2px shadow, black text; news cards add a top rule and a date row with a calendar icon.
- **footer**: #333333 background, white text, 32px 0px padding.
A floating cookie-preferences button at the left edge of the capture is a consent control and is not documented as brand UI.

## Design System Architecture
No public brand-guideline or design-system page was found: the home page, opened with WebFetch, lists no such link; the only related item is a "Media Resources" link under Newsroom (/newsroom/media-resources/), whose contents were not opened. The shipped CSS shows a token system: 104 root variables, with names such as `--colorPrimary`, `--colorPrimaryActiveContrast`, `--buttonSecondary-textColor`, `--cta-fontSize`, `--cta-fontWeightMobile`, `--h3-fontWeightMobile`, `--h4-fontLineHeightMobile`, `--bodyBlock-fontSizeMobile` and `--quote-fontLineHeight` (2.75rem). Each text style therefore has a desktop and a "Mobile" variant, and Tailwind ring variables (`--tw-ring-shadow`) show Tailwind in the build.

## Do's and Don'ts
- Do use #bd120a for headlines that carry news, outline pills and the main call to action.
- Do round photographs and cards at 30px and join media to card bodies with the asymmetric corner pattern.
- Do pair a light-weight large sentence with bold small headings.
- Don't use heavy shadows; keep to the 1px/2px card and 15px nav shadows.
- Don't set the primary button as a pill; the measured primary is square (0px) while pills are secondary.
- Don't document the cookie-preferences button as part of the brand.

## Responsive Behavior
Measured at a 390px viewport: the display size changes from 42px / 46px to 30px / 45px at weight 700, and the call-to-action text measures 12.8px with a 52px height and 117px width. The mobile pass recorded no layout or band data, so navigation collapse behavior and column counts are not measured. The root variables define separate Mobile sizes for CTA, h3, h4 and body block, which is the only recorded sign of a mobile text scale.

## Iteration Guide
1. Start with #ffffff canvas, #333333 text and #bd120a for actions and headlines.
2. Set Gotham 700 at 42px for the hero, 500 at 24px for card titles, 400 at 16px / 26px for body.
3. Use 30px radius on cards and photos, 9999px on secondary pills, and keep the main button square at 56px.
4. Put story cards on #edf2f4 and end with the #333333 footer.
5. Keep a 24px gap between cards.
6. Re-run `node web/scripts/verify-designs.mjs --slug=takeda` after every change.
7. Imagery: the capture uses candid photographs of clinicians, patients, scientists and field workers, cropped to the 30px rounded frame, and a red patterned hero panel with a curved white "T" mark; avoid stock-style isolated product shots.
8. Copy voice: section titles are short noun phrases ("Our Stories", "Recent News", "Learn more about Takeda"); story headlines run to two lines and carry a date such as "October 8, 2026" beside a calendar icon in a dark circle.
9. News cards use a thick top rule: red on the first card and charcoal on the others in the capture; reproduce that pattern when listing recent items.
