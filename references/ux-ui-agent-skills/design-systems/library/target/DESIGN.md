---
version: alpha
name: Target
category: "Retail & E-commerce"
description: "Target Corporation retail home page: Helvetica for Target bold 38px display and 16px body, bullseye red #cc0000 pill buttons, white canvas with cream #faf0e6 and #f1e0cb deal bands, 12px card radius, soft four-layer card shadow."
colors:
  canvas: "#ffffff"
  page-largest: "#faf0e6"
  ink: "#333333"
  primary: "#cc0000"
  on-primary: "#ffffff"
  surface-3: "#f1e0cb"
  ink-4: "#666666"
typography:
  display:
    fontFamily: "\"Helvetica for Target\", HelveticaForTarget, Targetica, \"HelveticaNeue for Target\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 38px
    fontWeight: 700
    lineHeight: 39.9px
  display-mobile:
    fontFamily: "\"Helvetica for Target\", HelveticaForTarget, Targetica, \"HelveticaNeue for Target\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 27px
  heading:
    fontFamily: "\"Helvetica for Target\", HelveticaForTarget, Targetica, \"HelveticaNeue for Target\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.4px
  subheading:
    fontFamily: "\"Helvetica for Target\", HelveticaForTarget, Targetica, \"HelveticaNeue for Target\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 19.55px
    fontWeight: 700
    lineHeight: 23px
  body:
    fontFamily: "\"Helvetica for Target\", HelveticaForTarget, Targetica, \"HelveticaNeue for Target\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  nav:
    fontFamily: "\"Helvetica for Target\", HelveticaForTarget, Targetica, \"HelveticaNeue for Target\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.999px
  link:
    fontFamily: "\"Helvetica for Target\", HelveticaForTarget, Targetica, \"HelveticaNeue for Target\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 23.4375px
    fontWeight: 700
    lineHeight: 25.7813px
rounded:
  xs: 8px
  sm: 12px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 40px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.pill}"
    padding: 0px 12px
    height: 44px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 0px 40px 0px 12px
    height: 44px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 18px
    borderColor: "{colors.canvas}"
    boxShadow: rgba(0, 0, 0, 0.04) 0px 2px 4px 0px, rgba(0, 0, 0, 0.04) 0px 2px 8px 0px, rgba(0, 0, 0, 0.06) 0px 4px 10px 0px, rgba(0, 0, 0, 0.04) 0px 6px 12px 0px
    transform: matrix(1, 0, 0, 1, 0, 16)
---

# Target

## Overview
The measured site is the Target Corporation retail home page (https://www.target.com/, title "Target : Expect More. Pay Less."). It is a high-density promotional storefront. The page is a long scroll (6252px at 1280px width) of campaign bands: a dark seasonal hero ("Get set for Halloween") with white 38px headlines, a cream band (#faf0e6) titled "Deals for your fall routine" holding rounded deal tiles with big red percentage figures ("BOGO 25% off", "Buy 2, get 1 Free"), a "Now trending in deals" tab strip, a full-bleed red "All that's new & trending" module with white product cards, a "Ready for every celebration" photo pair, a row of round category avatars ("New Arrivals", "Halloween", "Deals", "Clearance"), a text-offer band, and a footer sign-up row with a red "Sign up" pill. The bullseye red #cc0000 is the one saturated brand color; imagery is bright, cut-out product photography and lifestyle shots. Copy is plainspoken and deal-led ("Stock up & save with BOGO Deals"). In the automated capture a "Quick verification — Press & hold" overlay sat above the page; the home page content beneath it was measured, and that overlay is not documented as brand UI.

## Colors
`primary` is #cc0000 (Target red), the fill of the "Sign in or create account" and "Sign up" pill buttons, with `on-primary` #ffffff. `canvas` is #ffffff; `page-largest` is #faf0e6, the cream background of the deals module; `surface-3` is #f1e0cb, the slightly deeper tan of the "Now trending in deals" strip. Text colors are `ink` #333333 for body and headings on light surfaces and `ink-4` #666666 for supporting text. White is the text color on the dark and red bands (the measured h1, h3, link and navigation text are #ffffff). The mobile pass also recorded fills of #1c1c1c (a dark hero band) and #f1e0cd. The site's 400 root CSS variables include a reference palette, for example `--_ref-color-red-200` #faa69e, `--_ref-color-gray-1000` #0d0d0d, `--_ref-color-khaki-400` #c6a86c, `--_ref-color-blue-050` #eef3fb and semantic ones such as `--color-icon-info` #2758b9, `--color-background-warning-base` #b85300 and `--color-background-subdued-hover` #e8e8e8; only measured rendered values are declared as tokens.

## Typography
A single proprietary family, "Helvetica for Target" (loaded at regular and 700), falls back to HelveticaForTarget, Targetica, "HelveticaNeue for Target", "Helvetica Neue", Helvetica, Arial, sans-serif. Measured styles, all 700 unless noted: `display` 38px / 39.9px (hero headline), `display-mobile` 24px / 27px, `subheading` 19.55px / 23px (tile headings), `heading` 16px / 22.4px (buttons and card titles), `link` 23.4375px / 25.7813px (the big promo figures), `body` 16px / 20.8px at 400, and `nav` 14px / 19.999px at 400. The root variables publish composite typography tokens such as `--typography-headline-sm-composite: 700 22px/1.3 "Helvetica for Target"`. Helvetica Neue or Arial is the practical substitute outside Target's own font license.

## Layout
Content sits in a centered column inset roughly 30px from the viewport edges, with full-bleed color bands behind it. Deal tiles are four-up grids with 8px and 24px gaps (the two most frequent gap values, six elements each); the red trending module has a four-card row; category avatars are a six-wide grid of circles. Measured spacing steps: 1px, 3px, 4px, 6px, 8px, 10px, 12px, 14px, 16px and 18px; cards use 18px padding and the text input is 44px tall with 0px 40px 0px 12px padding. The root variable `--_ref-breakpoint-sm` is 568px.

## Elevation & Depth
Cards use a four-layer, very light stack: `rgba(0, 0, 0, 0.04) 0px 2px 4px 0px, rgba(0, 0, 0, 0.04) 0px 2px 8px 0px, rgba(0, 0, 0, 0.06) 0px 4px 10px 0px, rgba(0, 0, 0, 0.04) 0px 6px 12px 0px`, and the measured card also carries a translate transform of 16px on Y (a reveal state). Outline-as-shadow is common: `rgb(214, 214, 214) 0px 0px 0px 1px` (5 elements) and `rgba(0, 0, 0, 0.2) 0px 0px 0px 1px` (2); one popover uses `rgba(33, 33, 33, 0.18) 0px 2px 8px 0px`. Color blocking (red, cream, black) does most of the separation.

## Shapes
Measured radii: 12px (23 elements; tiles and cards), 999px / 9999px (pill buttons, 10 elements), `0px 0px 12px 12px` (9) and `12px 12px 0px 0px` (4) for stacked media and text panels, `8px 0px` (4; a corner badge such as "New"), 50% (3; category avatars) and 8px (1). Buttons are full pills: the primary is 40px tall with 0px 16px padding and the secondary 44px tall with 0px 12px padding, both with a red border.

## Components
- **button-primary**: #cc0000 fill and border, white 16px bold label, pill radius, 40px tall.
- **button-secondary**: same red pill, 44px tall (the footer "Sign up").
- **link**: bold 23.4375px promo text, white on dark or red tiles.
- **nav / nav-link**: 14px regular, white text on the top red bar (Target Circle, Target Circle Card, and similar utility links).
- **text-input**: #333333 text, 16px, 44px tall, padding 0px 40px 0px 12px.
- **card**: white fill, #333333 text, 12px radius, 18px padding, white border, the four-layer shadow.
- **Category avatar**: circular photo with a 14px label beneath; "Deals" and "Clearance" are solid red circles with white text.
- **Tab strip**: text tabs with a 2px-style underline on the selected tab ("Grocery", "Christmas") on a tan band.

## Design System Architecture
No public design-system or brand-guideline page was reachable: the home page was opened with WebFetch and showed no such link (its footer links to corporate.target.com pages such as About Target and Press Center), and https://design.target.com/ did not resolve (getaddrinfo ENOTFOUND). The shipped CSS shows a token system of 400 root variables in layers: `--_ref-*` reference tokens (`--_ref-color-red-200`, `--_ref-measurement-radius-none: 0px`, `--_ref-measurement-size-x36: 144px`, `--_ref-breakpoint-sm: 568px`, `--_ref-color-opacity-gray-800-16`) and semantic tokens (`--color-background-subdued-hover`, `--color-icon-info`, `--color-circle-background-circle360-subdued-active` #c9b7e1) plus composite type tokens (`--typography-headline-sm-composite`).

## Do's and Don'ts
- Do use #cc0000 for the one action per band and for sale figures, in bold Helvetica-style type.
- Do put white 12px-radius cards on cream (#faf0e6 / #f1e0cb) bands.
- Do use pill buttons and circular category avatars.
- Don't use heavy drop shadows; stay with outline rings and the four-layer light stack.
- Don't mix a second brand accent beside the red; additional colors in the capture come from product photography.
- Don't treat the "Quick verification" overlay or cookie and chat controls as brand UI.

## Responsive Behavior
Measured at a 390px viewport: the h1 is 24px / 27px; the header shows 4 links with a visible toggle labelled "Main menu"; the bands stack to one column (maximum card columns recorded: 5); the primary button measures 296px wide and 40px tall at 16px. The first band is a 50px #cc0000 bar; the following bands recorded were #ffffff, #1c1c1c, #f1e0cd and #f1e0cb. Touch-target sizes beyond the button were not measured.

## Iteration Guide
1. Start with #ffffff canvas, #333333 text, #cc0000 pill buttons and cream #faf0e6 bands.
2. Use Helvetica-style bold at 38px, 19.55px and 16px; 14px regular for navigation.
3. Round cards 12px, buttons 9999px, avatars 50%.
4. Keep gaps at 8px and 24px and padding at 18px for cards.
5. Re-run `node web/scripts/verify-designs.mjs --slug=target` after each change and keep every value traceable to web/data/extracted/target.json.
6. Imagery: the capture uses bright cut-out product photography on soft gradient tiles, lifestyle photographs for celebrations (Christmas pajamas, Diwali, Día de Muertos), and oversized red numerals for discounts; keep photos large and let the percentage or price be the loudest element in the tile.
7. Copy voice: headlines are short and promotional ("Deals for your fall routine", "Get set for Halloween"), small footnote asterisks follow every offer, and sponsored bands are labelled "Sponsored" in small type at the band's lower right.
