---
version: alpha
name: Beats by Dre
category: "Music & Audio"
description: "Beats by Dre (beatsbydre.com): a clean white and #f0f0f0 retail layout in Neuzeit Grotesk with -1px tracking on 70.769px display type, full-bleed celebrity photography, white pill buttons in Alternate Gothic with a 30px radius, rounded 18px product cards and red #e31837 price and offer labels."
colors:
  canvas: "#ffffff"
  page-largest: "#f0f0f0"
  surface-secondary: "#f1f1f1"
  ink: "#161616"
  ink-secondary: "#757575"
  ink-tertiary: "#535353"
  primary: "#ffffff"
  on-primary: "#161616"
  accent-red: "#e31837"
  accent-red-alt: "#e01e3c"
  hover-red: "#c8102e"
  error: "#cc1631"
  focus-blue: "#0071e3"
  border-black: "#000000"
  border-soft: "#e2e2e2"
  swatch-ivory: "#efede8"
  swatch-pink: "#f7dbee"
  swatch-mist: "#dbeaea"
  swatch-lime: "#e3ef8b"
  swatch-navy: "#364e6b"
typography:
  display:
    fontFamily: neuzeit-grotesk, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 70.769px
    fontWeight: 400
    lineHeight: 77.8459px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: neuzeit-grotesk, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 44px
    fontWeight: 400
    lineHeight: 48.4px
    letterSpacing: "-1px"
  subheading:
    fontFamily: neuzeit-grotesk, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 30.4608px
    fontWeight: 700
    lineHeight: 33.5069px
    letterSpacing: "-1px"
  base:
    fontFamily: neuzeit-grotesk, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
    letterSpacing: "-0.2px"
  body:
    fontFamily: neuzeit-grotesk, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 18px
  text-card:
    fontFamily: neuzeit-grotesk, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: "-0.4px"
  body-mobile:
    fontFamily: neuzeit-grotesk, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
  button:
    fontFamily: alternate-gothic-no-2-d, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 17.0667px
    fontWeight: 400
    lineHeight: 39px
    letterSpacing: 0.4px
    textTransform: uppercase
  button-compact:
    fontFamily: alternate-gothic-no-2-d, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
    textTransform: uppercase
  nav:
    fontFamily: neuzeit-grotesk, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 25.6px
  input:
    fontFamily: neuzeit-grotesk, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 18px
  sm: 20px
  md: 22px
  lg: 24px
  xl: 30px
  2xl: 100px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 13px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    height: 50px
    borderColor: "{colors.canvas}"
  button-primary-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    height: 50px
    borderColor: "{colors.border-black}"
  button-outline:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    height: 50px
    borderColor: "{colors.canvas}"
  button-outline-hover:
    backgroundColor: "{colors.hover-red}"
    textColor: "{colors.canvas}"
  button-signup:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-compact}"
    rounded: "{rounded.2xl}"
    padding: 13px 26px 11px
    height: 46px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.base}"
    padding: 13px 30px
    height: 80px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 24px 20px 8px
    height: 54px
    borderColor: "{colors.canvas}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.accent-red}"
    typography: "{typography.text-card}"
    rounded: "{rounded.xs}"
    height: 541px
    boxShadow: rgba(0, 0, 0, 0.1) 2px 4px 12px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 0px 80px
    height: 883px
---

## Overview

`https://www.beatsbydre.com/` (title "Beats by Dre - Wireless Headphones, Earbuds, Speakers, and more") is a product-led retail home page, 7,583px tall at 1280px wide. A white header (80px) carries the circular black "b" logo at left, two centred links (Shop, Support) and search and bag icons at right. A black announcement bar beneath it carries a one-line limited-time offer for Beats 360 Cushion Kits. The hero is a full-bleed photographic triptych of a celebrity wearing the product, with centred white text over the middle panel: a small name line ("Kendall Jenner"), the headline "Beats 360" at 70.769px, the tagline "One headphone. Every version of you." and two pill buttons, a white "SHOP NOW" and an outlined "CUSTOMIZE" with a palette icon.

Under the hero a `#f0f0f0` band holds a centred section title ("Kendall's Favorites") and a row of three white product cards with a red "New" or "Introductory offer" label, a bold product name, the price (the offer price in red with the original struck through), a product photograph and a row of colour dots. A second full-bleed hero repeats the pattern for a second athlete, followed by "Patrick Mahomes' Picks". Further section titles named on the page are "Seamless Shopping Through Apple", "What Beats has to offer?", "Which Beats are right for you?" and "Join Our List"; the footer columns are Products, Support, Company, Legal, Location and Follow Us.

The voice is short and aspirational: "One headphone. Every version of you." Photography of people, not product cut-outs, carries the colour; the interface itself is white, grey and black.

## Colors

- **Surfaces:** `canvas` `#ffffff` (4,063 area units) and `page-largest` `#f0f0f0` (4,554, the largest background) alternate between white sections and grey bands; `ink` `#161616` (594) is the measured dark background and the fill of the secondary button. `surface-secondary` `#f1f1f1` is the declared secondary background (`--background-secondary`).
- **Text:** `ink` `#161616` (4,415 characters), `ink-secondary` `#757575` (963; the declared `--text-secondary`), white (653) on photography, `ink-tertiary` `#535353` (298), `accent-red` `#e31837` (78) and `accent-red-alt` `#e01e3c` (20).
- **Action:** `primary` `#ffffff` with `on-primary` `#161616` text is the hero button (a white pill with a 2px white border). On hover it inverts to a `#161616` fill with white text. The black secondary button has a 2px `#000000` border (`border-black`). The outlined "CUSTOMIZE" pill fills with `hover-red` `#c8102e` on hover (measured rgb(200, 16, 46)).
- **Red:** `accent-red` `#e31837` is the price and offer-label colour on the product cards. `error` `#cc1631` is declared as `--error`.
- **Swatches:** five small measured backgrounds, `swatch-ivory` `#efede8`, `swatch-pink` `#f7dbee`, `swatch-mist` `#dbeaea`, `swatch-lime` `#e3ef8b` and `swatch-navy` `#364e6b`, share hues with the colour dots under the products in the capture. They belong to the product colourways, not to the interface.
- **Lines:** `border-soft` `#e2e2e2` is the declared secondary border (`--border-secondary`); `focus-blue` `#0071e3` is the declared focus colour (`--sk-focus-color`).

## Typography

Two loaded families carry the measured text: neuzeit-grotesk (6,216 characters; weights 400, 700 and 900 loaded) for headlines, body and navigation, and alternate-gothic-no-2-d (211; weight 400) for button labels. Both declare `"Helvetica Neue", Helvetica, sans-serif` as fallbacks. They are licensed faces, so only those declared fallbacks are documented; the stylesheet also declares many other faces (proxima-nova, myriad-pro, oswald, poppins, owners, classica-pro and more), none measured on the home page.

- `display` neuzeit-grotesk 70.769px / 400 / 77.8459px with -1px tracking ("Beats 360"); `display-mobile` 44px / 400 / 48.4px with -1px.
- `subheading` 30.4608px / 700 / 33.5069px with -1px tracking.
- `base` 20px / 700 / 28px with -0.2px, the page's root text style.
- `body` 18px / 600 / 18px (the white hero tagline); `text-card` 16px / 600 / 16px with -0.4px (card labels and prices); `nav` 16px / 500 / 25.6px; `input` 16px / 400 / 18px.
- `button` alternate-gothic-no-2-d 17.0667px / 400 / 39px with 0.4px tracking, uppercase; `button-compact` 18px / 400 / 18px uppercase for "SIGN UP".

Sizes by characters: 16px (3,955), 13px (732), 20px (542), 30.4608px (294), 17.0667px (204), 18px (203), 28px (139), 24px (112), 60px (63), 57.8474px (46), 50px (45) and 38.4608px (41, the same count as the two section titles "Kendall's Favorites" and "Patrick Mahomes' Picks"). Weights: 400 (5,338), 700 (481), 600 (287), 500 (213), 900 (108). Tracking is negative throughout: -0.2px at 16px, 20px, 24px and 28px, -1px at 30.4608px and above, -0.4px and -0.5px on card text.

## Layout

The stylesheet declares `--grid-column-gap` as 2rem and `--outer-container-size` as 9999rem. The header is 80px tall with `13px 30px` padding. Heroes are full-bleed image blocks with centred text and a pair of buttons; product sections are a centred title above a row of three 400px by 541px cards separated by narrow gaps. The page uses wide vertical spacing between sections (a 120px gap was measured twice).

Measured gaps: 8px (6 uses), 120px (2), 20px (2) and 16px (1). Paddings: 4px (37), 30px (35), 5px (14), 10px (11), 37px (8), 70px (8), 20px (7), 60px (6), 40px (6), 15px (5), 48px (3) and 13px (2). The footer is 883px tall with `0px 0px 80px` padding.

## Elevation & Depth

Depth is limited to one soft card shadow, `rgba(0, 0, 0, 0.1) 2px 4px 12px 0px`, on the 18px-radius product cards, which lifts white cards off the `#f0f0f0` band. Heroes are flat photographs; the announcement bar is a flat `#161616` strip. No other shadow was measured.

## Shapes

Measured radii by frequency: 20px (32 elements), 30px (24; the hero and shop pill buttons, 50px tall), 18px (11; the product cards), then single 22px (the input), 100px (the "SIGN UP" button) and 24px values. Buttons use `rounded.xl` (30px), the cards `rounded.xs` (18px), the sign-up pill `rounded.2xl` (100px) and the email input `rounded.md` (22px).

## Components

- **Primary button ("SHOP NOW"):** white fill with a 2px white border, `{colors.ink}` label in Alternate Gothic 17.0667px uppercase, 30px radius, 134px by 50px; hover inverts to `{colors.ink}` fill and white text.
- **Secondary button ("SHOP EARBUDS"):** `{colors.ink}` fill, white label, 2px `{colors.border-black}` border, same size.
- **Outline button ("CUSTOMIZE" with a palette icon):** transparent, white label and 2px white border, 166px by 50px; hover fills with `{colors.hover-red}`.
- **Sign-up button:** white fill, `{colors.ink}` 18px Alternate Gothic label, 100px radius, `13px 26px 11px` padding, 98px by 46px (305px wide in the mobile pass).
- **Email field:** 54px tall, 22px radius, 2px white border, `24px 20px 8px` padding, white 16px text, 300px wide.
- **Product card:** white, 18px radius, 400px by 541px, soft shadow, red label, bold name, price, image and colour dots.
- **Nav:** 80px white bar with 20px / 700 text and 40px by 40px icon links.
- **Announcement bar:** a black strip with one centred line of white text and an external-link icon.

## Design System Architecture

No public design-system or brand-guideline page was found. The Beats trademark pages (`https://www.beatsbydre.com/company/trademark` and `/company/trademark/beats`) give trademark usage rules (for example superscripting version numbers) and point to Apple's guidelines, but state no brand colours, typefaces or downloadable assets, and the press page (`/company/press`) offers press releases and a press e-mail only. The de-facto system is a token layer in the shipped CSS: 111 custom properties on `:root`, including `--font-primary` and `--font-secondary`, semantic colour roles (`--text-primary` `#161616`, `--text-secondary` `#757575`, `--text-inverse` `#fff`, `--background-primary` `#fff`, `--background-secondary` `#f1f1f1`, `--background-inverse` `#161616`, `--border-primary` `#161616`, `--border-secondary` `#e2e2e2`, `--error` `#cc1631`, `--outline` `#006CFF`, `--interactive-inactive` `#ADADAD`), a type scale in rem (`--title-1` 1.5rem, `--title-2` 1.25rem, `--title-3` 1rem, `--body-large` 1.5rem or 1.25rem, `--body-medium` 1.25rem, `--body-small` 1rem, `--footnote` 0.8125rem, `--headline-5` 28px) and promo-bar offsets. Font Awesome 6 Pro kit variables account for most of the rest.

## Do's and Don'ts

- Do let full-bleed photography carry colour and keep the interface white, `#f0f0f0` and `#161616`.
- Do set hero headlines in Neuzeit Grotesk at weight 400 with -1px tracking and button labels in uppercase Alternate Gothic.
- Do use 30px-radius pill buttons that invert (white to black, or outline to red) on hover.
- Do keep red `{colors.accent-red}` for prices, offer labels and "New" tags only.
- Don't use red as a button fill except the `{colors.hover-red}` hover state of the outline button.
- Don't add more than the single soft card shadow.
- Don't set button labels in the grotesque body face.

## Responsive Behavior

Measured at the mobile viewport: the h1 role is 44px / 400 / 48.4px with -1px tracking (320px by 48px) against 70.769px on desktop; the hero tagline is 14px / 600 / 14px (295px wide) against 18px; the "SIGN UP" button is 305px by 46px with `13px 26px 11px` padding (98px wide on desktop); the header is 375px by 50px with `13px 30px` padding (80px tall on desktop). By characters the mobile sizes are 16px (3,604), 13px (732), 18px (464), 28px (307), 20px (213), 14px (196), 24px (112), 27.7333px (63), 10px (50) and 38px (46), against 38.4608px (41) and 57.8474px (46) as the largest desktop sizes. Breakpoint values, card-row column counts and how the nav presents on mobile are not measured.

## Iteration Guide

1. Set `canvas` `#ffffff`, `page-largest` `#f0f0f0`, `ink` `#161616`, `primary` `#ffffff` and `accent-red` `#e31837`.
2. Load Neuzeit Grotesk (400, 700) and Alternate Gothic No. 2 D; use -1px tracking from 30px up.
3. Build an 80px white header with a round logo, two links and two icons, then a full-bleed photo hero with centred white text.
4. Add two 30px-radius pills: white filled and white outlined; hover to `#161616` and `#c8102e`.
5. Follow with a grey band of three 400px by 541px, 18px-radius cards with the single soft shadow.
6. Check mobile against the values above; the mobile menu is not measured.
