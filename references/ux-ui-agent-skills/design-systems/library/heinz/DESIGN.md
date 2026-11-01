---
version: alpha
name: Heinz
category: "Food & Beverage"
description: "heinz.com (Heinz US official site): a saturated tomato-red #d6001c canvas with white text, HeinzLabel1 condensed display at 96px and HeinzSans body at 16px, maroon #540b26 pill buttons with 9999px radius, cream #fef1dd card text, 24px-radius product cards and photography framed by the keystone label shape."
colors:
  canvas: "#d6001c"
  ink: "#ffffff"
  primary: "#c4061f"
  on-primary: "#ffffff"
  surface-cream: "#fef1dd"
  ink-plum: "#612d41"
  ink-maroon: "#540b26"
  ink-ivory: "#fff9f1"
  primary-hover: "#b60a20"
  text-input-text: "#1d1d1d"
  surface-white: "#ffffff"
  accent-blue: "#6aaae4"
  surface-ivory: "#fef9f0"
typography:
  display:
    fontFamily: HeinzLabel1, sans-serif
    fontSize: 96px
    fontWeight: 400
    lineHeight: 96px
  display-mobile:
    fontFamily: HeinzLabel1, sans-serif
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
  body:
    fontFamily: HeinzSans3, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: HeinzSans3, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  link:
    fontFamily: HeinzSans4, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 37.5px
  button-secondary:
    fontFamily: HeinzSans5, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
rounded:
  xs: 2px
  sm: 8px
  md: 24px
  lg: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 14px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink-maroon}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 16px 28px
    height: 64px
  link:
    textColor: "{colors.surface-cream}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-ivory}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    height: 44px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-maroon}"
    padding: 0px 80px
---

## Overview

The Heinz US home page (title "Heinz Official Site - Heinz® US | Heinz") was measured at 1280px wide and 7849px tall with 570 visible elements. It is a red-first brand site. The page background is #d6001c (area weight 7607, the largest), with white (#ffffff, 5713) for the header and footer and the form fields, cream #fef1dd (2453) for tile text areas and a deep maroon #540b26 (1122) for buttons and a lower band. The page text read from the site shows the intro line "Discover what's new at Heinz®. New products, exciting flavors, great collabs and more." and the section headings "CHECK 'EM OUT", "FIND YOUR FLAVOR", "MAKE IT REAL GOOD" and "WE'RE ALL-IN".

The capture opens on a wide photograph of friends sharing food, with the white keystone outline of the Heinz label cut across it, a white navigation bar (Products, Who We Are, Grown Not Made, Recipes, Heinz Verified, a search field and a "Log in" control) and a down-arrow roundel at the bottom of the photo where the image meets the red field in a scalloped edge. Then "CHECK 'EM OUT" in 96px white condensed capitals introduces four rounded product tiles (Roasted Turkey Gravy, Simply Tomato Ketchup, Natural Yellow Mustard, Shepherd's Pie Bowls) that each carry a bottle or dish, white title text, a one-line description and a circular outlined action icon (a bag or a chevron). A "Trending Now" tag and a black starburst "Fan Favorite" badge decorate two tiles. Next, "GET MORE WITH TASTEVIP" in huge white capitals sits beside a photograph of a person eating, again framed in the keystone shape, above a signup form (First Name, Last Name, Email, a consent checkbox and a maroon "Sign Up For Free" pill). Further down a maroon band shows an oversized red headline ("DIP IT LIVE IT" is partially visible).

The tone is playful, loud and food-first: all-caps condensed headlines, warm photography with real people, humour in phrases such as "Check 'Em Out". A small cookie-settings control at the left edge of the capture is a consent widget and is not documented as brand UI.

## Colors

- **Canvas {colors.canvas}** (#d6001c): the Heinz red, the page background.
- **Ink {colors.ink}** (#ffffff): the most-read text colour (925 characters), because most text sits on red. White is also the footer and header fill.
- **Primary {colors.primary}** (#c4061f): the "Log in" control's fill; hover {colors.primary-hover} (#b60a20). The theme also declares `--color-cta-primary-hover: #bf0019`.
- **On primary {colors.on-primary}** (#ffffff).
- **Cream {colors.surface-cream}** (#fef1dd): the tile description text and the link text on dark tiles (144 characters) and a large area (2453).
- **Plum {colors.ink-plum}** (#612d41, 258 characters): secondary text on light surfaces.
- **Maroon** {colors.ink-maroon} (#540b26): secondary button fill, footer text and the lower band (1122 area, 100 characters).
- **Ivory** {colors.ink-ivory} (#fff9f1): the navigation text colour (53 characters).
- **Form text** #1d1d1d (20 characters), also `--color-accessible-text-black`.
- **Ivory fill** #fef9f0 (14 area), **blue** #6aaae4 (3 area, a minor background) and a #f4b7af border (1): measured but unnamed minor values. The black star badge and 1px #e5e7eb input borders are also present.

The root variables also list `--color-accessible-bg-grey: #f7f7f7`, `--color-accessible-feedback-success: #007a40` and `--color-cta-subdued-hover: #bf0019`, none measured on rendered elements.

## Typography

Four proprietary Heinz families: **HeinzLabel1** (330 characters) for the condensed display, **HeinzSans3** (533, weight 400) for body and inputs, **HeinzSans4** (671, 600/700) for navigation, tile titles and the footer, and **HeinzSans5** (32, 700/900) for large buttons. Weights: 400 (863 characters), 600 (588), 700 (115).

- **Display** {typography.display}: HeinzLabel1 96px, line-height 96px, weight 400 (the loaded face is the bold 700 file). Mobile {typography.display-mobile}: 60px/60px. A 144px size also appears (38 characters) for the largest headline band.
- **Body** {typography.body}: HeinzSans3 16px, with a 16px line-height on the signup consent copy; the body element uses 16px/24px.
- **Button** {typography.button}: HeinzSans3 14px/21px ("Log in").
- **Secondary button** {typography.button-secondary}: HeinzSans5 700 20px/28px ("See All Products", "Sign Up For Free").
- **Link** {typography.link}: HeinzSans4 700 30px/37.5px: the tile titles. The nav is HeinzSans4 16px weight 600, 24px line-height.

No letter-spacing was recorded (the table is empty): tracking is normal. The size ladder is 16px (725 characters), 30px (285), 20px (202), 14px (126), 12px (100), 96px (90) and 144px (38). The fonts are Heinz's own; a heavy condensed grotesque is the nearest substitute, as a suggestion.

## Layout

Wide, full-bleed red bands alternate with white and maroon bands. Content sits in a roughly 1220px field with 30px side margins in the capture; the tile row is four equal tiles, the TasteVIP block is a two-column split (photo left, copy and form right), and the form uses a two-up name row above a full-width email field. Measured paddings: 16px (26), 20px (16), 40px (10), 64px (5), 32px (4); gaps: 4px (52), 8px (47), 16px (15), 24px (9), 32px (8). Theme variables set the navbar height to 72px at md and 80px at lg (`--global-navbar-height-md`, `--global-navbar-height-lg`) and the locale banner to 80px at lg.

## Elevation & Depth

Shadows are rare: rgba(0, 0, 0, 0.2) 0px 4px 8px 0px (2 elements) and an inset white spread of 1000px (3 elements) used as an opaque fill trick. Depth comes from colour blocking, photograph overlap with the keystone outline and dark gradient scrims behind tile titles. The scalloped red edge under the hero is a shape, not a shadow.

## Shapes

Radii: 9999px (33 elements: pills), "0px 0px 24px 24px" (26), 24px (16), "24px 24px 0px 0px" (10), 8px (5), 100px (2), 2px (1). Buttons are full pills; product tiles are 24px rounded; the language selector measured 8px with a 1px #e5e7eb border; large panels use a 24px radius on one pair of corners only (top or bottom).

## Components

- **Primary control (Log in)**: {colors.primary} fill, white 14px label, pill radius {rounded.pill}, padding 10px 14px, 48px tall, with a 2px transparent border; hover darkens to #b60a20.
- **Secondary button (See All Products / Sign Up For Free)**: {colors.ink-maroon} maroon fill, white 20px bold label, pill radius, padding 16px 28px, 64px tall.
- **Locale select (USA (English))**: white fill, #242424cc text, 8px radius, 1px solid #e5e7eb border, padding 12px 40px 12px 16px.
- **Nav**: red background, ivory text at 16px weight 600; in the capture the nav sits in a white bar with a round search field.
- **Text input**: 44px high, #1d1d1d text, white field.
- **Product tile**: 24px radius, photographic or coloured background, 30px bold white title, cream description, outlined circular action button.
- **Footer**: white fill, maroon text, padding 0px 80px.

## Design System Architecture

No public design system or brand guideline page is linked: the fetched home page content listed no links beyond the nav labels, and no search was run. The stylesheet carries a themed variable set: --color-accessible-text-black #1d1d1d, --color-accessible-bg-grey #f7f7f7, --color-accessible-feedback-success #007a40, --color-cta-primary-hover #bf0019, --color-cta-subdued-hover #bf0019, --color-video-surface-cta-default #ffffff, navbar heights, and variables prefixed --tw- (for example --tw-ring-shadow) and --aa- (for example --aa-font-weight-bold). Typography is delivered as numbered Heinz font files (HeinzLabel1, HeinzSans3, HeinzSans4, HeinzSans5).

## Do's and Don'ts

- Do keep the page red #d6001c with white type.
- Do use condensed capitals at 96px for section headlines.
- Do round buttons fully (9999px) and tiles at 24px.
- Do use maroon #540b26 for secondary actions.
- Do frame photography with the keystone outline.
- Don't use grey or blue as a main colour; the blue #6aaae4 is a tiny measured value.
- Don't add heavy shadows.
- Don't document the cookie control as brand UI.

## Responsive Behavior

Mobile (390px) was measured. The display headline goes from 96px to 60px (line-height 60px); the body text from 16px to 14px (line-height 16px); the secondary button label from 20px/28px to 16px/24px with padding 14px 24px (radius still 9999px); the nav background remains #d6001c with white 16px text. Mobile size ladder: 14px (427 characters), 12px (388), 16px (279), 18px (192), 60px (90), 20px (83). Column counts and the menu pattern are not measured.

## Iteration Guide

1. Set the page to #d6001c and set copy in white.
2. Use HeinzLabel1-style condensed capitals at 96px for section titles.
3. Add white tiles or photo tiles with 24px radii; add maroon pill buttons.
4. Keep copy playful and short.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=heinz--<page> --url=<url> --force --no-motion` before adding tokens.
