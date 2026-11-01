---
version: alpha
name: Dexcom
category: "Healthcare & Wellness"
description: "Dexcom US home page (dexcom.com): Gilroy 700 headlines with negative tracking (52px/56px hero), fully pill-shaped 56px green #137d00 buttons with white 16px/700 labels, #161a1d ink on white and #f5f5f5 bands, a plum #412636 Stelo section, and a Chakra UI theme underneath."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#161a1d"
  ink-secondary: "#3f4955"
  ink-search: "#1a202c"
  primary: "#137d00"
  primary-hover: "#025f1d"
  on-primary: "#ffffff"
  brand-bright: "#0db02b"
  brand-medium: "#7abe59"
  accent: "#d86150"
  surface-plum: "#412636"
  ink-cream: "#f5f4ea"
typography:
  display:
    fontFamily: Gilroy, sans-serif
    fontSize: 52px
    fontWeight: 700
    lineHeight: 56px
    letterSpacing: "-0.52px"
  display-mobile:
    fontFamily: Gilroy, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-0.36px"
  heading:
    fontFamily: Gilroy, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: "-0.32px"
  heading-mobile:
    fontFamily: Gilroy, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: "-0.28px"
  body-large:
    fontFamily: Gilroy, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: Gilroy, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: Gilroy, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24px
    textTransform: capitalize
  button:
    fontFamily: Gilroy, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 0.48px
rounded:
  xs: 4px
  sm: 8px
  md: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 7px
  s3: 8px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 26px
  s8: 28px
  s9: 36px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 28px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 28px
    height: 56px
  button-outline-light:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 26px
    height: 56px
    borderColor: "{colors.canvas}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 28px
---

## Overview

This file documents the US home page of Dexcom, https://www.dexcom.com/ (it resolves to `/?ipc=TH` in the measurement; the page title is "Dexcom Continuous Glucose Monitoring - The most accurate CGM system | Dexcom"). It sells continuous glucose monitors, and the page is a stack of full-width bands: a dark utility bar (US flag, EN and ES, "Healthcare Providers"), a white header, a photographic hero for "Dexcom G7 15 Day: the longest-lasting sensor ever", a grey product band, a split photo-and-copy band, a plum band for the Stelo Glucose Biosensor, and a "Get Started with Dexcom" block.

The mood is friendly health-tech: warm lifestyle photography (two women laughing with a phone, a man outdoors reading his phone, a kitchen counter with matcha), product renders of the round sensor and phone screens, and a single saturated green. Copy is plain and benefit-led ("Relentless innovation from the leaders in glucose health", "Get 24/7 insights into how food, exercise, stress, and sleep affect your body", "No prescription. FSA/HSA eligible."), with superscript footnote markers and small legal text because the product is regulated. Long indications and safety paragraphs sit at the page bottom.

Role notes. The extractor's `h1` is white text over the hero image. The hero carries a dark scrim (`#0000008c` by area) which is an image treatment and not a token. A floating shield badge at the left edge of the capture is a third-party overlay and is not documented. In the capture the sticky header is drawn over the middle of the hero, a screenshot effect of the sticky nav.

## Colors

Measured on the desktop pass. Text by characters: `#161a1d` (4413), `#ffffff` (2726), `#f5f4ea` (201), `#137d00` (83), `#3f4955` (31), `#1a202c` (6). Backgrounds by area: `#0000008c` (hero scrim), `#f5f5f5` (2896), `#137d00` (1108), `#412636` (1058), `#ffffff` (459), `#161a1d` (123). The body background is `#ffffff`.

- `canvas` `#ffffff`: header, split bands and the white pill link buttons.
- `page-largest` `#f5f5f5`: the product band.
- `ink` `#161a1d`: headings and body copy; also the utility bar fill (123 area).
- `primary` `#137d00`: every filled button, the "Learn more" link text and 3 button borders. `primary-hover` `#025f1d` is the hover fill measured on "Get started"; the link variant's text also goes to `#025f1d`.
- `surface-plum` `#412636` with `ink-cream` `#f5f4ea`: the Stelo band and its text.
- `ink-secondary` `#3f4955`: small legal lines such as "Smart devices sold separately." `ink-search` `#1a202c` is the search label.
- `brand-bright` `#0db02b`, `brand-medium` `#7abe59` and `accent` `#d86150`: values declared in the shipped Chakra theme as `--chakra-colors-brand-primary`, `brand-medium` and `accent-primary`. They were not measured on the first screen, so they are theme tokens, not observed UI colours. The same `:root` declares `brand-secondary` `#137D00` and `brand-tertiary` `#025F1D`, equal to the measured button colours, and `navigation-accent` `#137D00`.

Chakra default palette entries (`cyan-600`, `red-700`, `orange-800` and similar) are framework defaults and not brand colours.

## Typography

One family, Gilroy (weights 400, 600, 700 plus italic and oblique faces loaded; the CSS also lists Inter and a PayPal face for widgets). Characters by weight: 400 (6802), 700 (629), 600 (29).

Headlines are 700 with negative letter-spacing of one percent of size: the hero h1 is 52px/56px at -0.52px, h2 and h3 section titles are 32px/36px at -0.32px; the Stelo title is 32px/36px in `#f5f4ea`. On mobile the h1 is 36px/40px (-0.36px) and the h2 is 28px/32px (-0.28px). Body copy in bands is 18px/24px 400 (2894 characters at 18px); legal and footer text is 14px/20px. The nav items are 18px/600 capitalised on a 24px line; buttons are 16px/700 with 0.48px letter-spacing and a 20px line-height. The search label is 16px/400.

Gilroy is a commercial typeface served by the site; the stack falls back to generic `sans-serif`, which is the shipped substitute.

## Layout

The desktop pass ran at 1280px; the page is 5619px tall. The header holds the green "dexcom" wordmark at left, four nav links (Products, Learn, Community, Support), a green "Get started" pill, a grey search field with a magnifier icon and an account icon. Bands are full width and alternate colour: photo hero, `#f5f5f5` product band with copy at left and phone and sensor renders at right, white band with a photo at left and copy at right, plum band with copy at left and a photo at right. Content columns are about half the width each in the capture.

Measured paddings: 40px (19 uses), 28px (11), 26px (7), 16px (6); gaps of 20px (20 uses) and 4.23729% (13), plus 40px, 36px, 24px and 16px. The Chakra scale (`--chakra-space-5` 1.25rem, `--chakra-sizes-3xl` 48rem, `--chakra-sizes-4xl` 56rem) is declared in `:root`.

## Elevation & Depth

Almost flat. The only box shadow measured is `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` (2 uses). Depth comes from full-bleed photography, the dark hero scrim, colour-blocked bands and the sticky header. The Chakra focus rings `0 0 0 3px rgba(46,105,255,.25)` are in the CSS corpus and are a framework default.

## Shapes

Pills dominate: `9999px` appears 21 times, on every button and link button. Secondary radii measured are 8px (3 uses), 100px (2) and 4px (1). Photographs in split bands have square edges in the capture, and phone renders keep their own device corners. The hero has no radius.

## Components

Primary button. `#137d00` fill, white 16px/700 text with 0.48px tracking, `9999px` radius, `0 28px` padding, 56px high ("Get started" 147px wide, "Explore Dexcom G7" 207px wide). Hover `#025f1d`.

White link button. `#ffffff` fill, `#137d00` text, pill radius, `0 28px`, 56px ("Learn more" on the hero).

Outline button on dark imagery. Transparent, 2px white border, white text, `0 26px` padding, 56px ("Discover Stelo"). On the grey band the outlined "Explore our portfolio" uses `#137d00` text and a green border (border colour `#137d00` measured 3 times).

Header. White bar with wordmark, nav, a green pill, a pill search field in light grey and an account icon. Utility bar: dark (`#161a1d`), white 16px text.

Bands. Colour-blocked full-width sections with 18px copy and a single CTA each.

Inputs were measured only as the search field; its radius and fill were not isolated.

## Design System Architecture

No public design system or brand guideline was found: the opened home page lists "About Dexcom", "About Us", "Dexcom Media Kit", "Investors" and "Dexcom System Status", but the Media Kit link target was not exposed in the fetched markup and was not opened, and no design-system or GitHub link appears. The page states "Dexcom, Dexcom Clarity, Dexcom Follow, Dexcom One, Dexcom Share, Stelo, and any related logos and design marks are either registered trademarks or trademarks of Dexcom, Inc."

The de-facto system is a Chakra UI theme. Class names are Chakra's generated `chakra-text css-…` classes and `:root` carries `--chakra-colors-*`, `--chakra-space-*`, `--chakra-sizes-*`, `--chakra-fontSizes-*`, `--chakra-radii-full` (`9999px`) and `--chakra-transition-easing-ease-out`. Custom semantic groups sit beside the defaults: `brand-*` (primary `#0DB02B`, secondary `#137D00`, tertiary `#025F1D`, medium `#7ABE59`), `navigation-*` (bg `#FFFFFF`, primary `#161A1D`, accent `#137D00`), `account-*` and `accent-primary` `#D86150`. Source: https://www.dexcom.com/ (the `:root` block as measured).

## Do's and Don'ts

Do make every filled action a 56px-high pill in `#137d00` with a white 16px/700 label and 0.48px tracking.

Do set headlines in Gilroy 700 with the tight tracking (52px hero, 32px sections).

Do alternate white, `#f5f5f5` and plum bands, with one clear CTA per band.

Do pair lifestyle photography with product renders of the sensor and phone.

Don't use the Chakra default blues, cyans or the `#2e69ff` focus colours as brand colours.

Don't put text directly on the hero without a scrim; the hero uses a dark overlay.

Don't round buttons to anything but the full pill.

Don't drop footnote markers and the small legal lines; they are part of the page's voice.

Don't document the third-party shield badge as UI.

## Responsive Behavior

Measured at the extractor's 390px mobile pass: h1 36px/40px (-0.36px), h2 28px/32px (-0.28px), body text 14px/20px, and the primary button 16px/700 with `0 20px` padding, 48px height (56px on desktop) and `9999px` radius. Mobile sizes by characters: 14px (3308), 18px (2865), 28px (213), 36px (195), 16px (181), 20px (39).

Nav layout, band reflow and image crops on mobile were not measured.

## Iteration Guide

1. Canvas white, ink `#161a1d`, one green `#137d00` for action, plum `#412636` only for the Stelo band.
2. Headlines Gilroy 700 with letter-spacing of -1% of the size; body 18px/24px.
3. Buttons: 56px, pill, `0 28px`, 16px/700 at 0.48px, hover `#025f1d`; 48px on small screens.
4. Keep shadows to `0 4px 8px` at 20% black or none.
5. Re-measure dexcom.com before using theme-only colours such as `#0db02b` or `#d86150`.
