---
version: alpha
name: "Ngern Tid Lor"
category: "Thai Brands"
description: "Ngern Tid Lor (Tidlor), a Thai vehicle title loan provider: notoSansThai and sarabun type, brand blue #2652ea on white, deep blue #112492 gradient bands, pale blue #dbe7fe buttons with a 10px radius, and frosted glass cards with a 24px radius and inset shadows."
colors:
  canvas: "#ffffff"
  ink: "#616166"
  button-tint: "#dbe7fe"
  primary: "#2652ea"
  navy: "#112492"
  ink-body: "#414243"
  ink-strong: "#171717"
  ink-subtle: "#dddddf"
  hairline: "#ffffff33"
  button-tint-hover: "#eff5ff"
  input-text: "#1e1e1f"
  glass: "#ffffff4d"
  on-primary: "#ffffff"
typography:
  display:
    fontFamily: notoSansThai, "notoSansThai Fallback"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: notoSansThai, "notoSansThai Fallback"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  heading:
    fontFamily: notoSansThai, "notoSansThai Fallback"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 46px
  subheading:
    fontFamily: sarabun, "sarabun Fallback"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: notoSansThai, "notoSansThai Fallback"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  button:
    fontFamily: notoSansThai, "notoSansThai Fallback"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  link:
    fontFamily: sarabun, "sarabun Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: sarabun, "sarabun Fallback"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 24px
  4xl: 30px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.button-tint}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 12px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.button-tint-hover}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  text-input:
    textColor: "{colors.input-text}"
    typography: "{typography.input}"
    padding: 16px 0px 0px
    height: 40px
  card:
    backgroundColor: "{colors.glass}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.3xl}"
    padding: 10px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 34, 130, 0.2) 0px -4px 16px 0px inset, rgba(255, 255, 255, 0.22) 0px 8px 16px 0px inset, rgba(0, 0, 0, 0.1) 0px 10px 20px 0px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

The measured page is https://www.tidlor.com/en, titled "Ngern Tid Lor | Legal Car Title Loans, No Guarantor" (language `en`), the English home of Ngern Tid Lor (Tidlor), a Thai vehicle-title loan provider. The opened page describes it as a "Comprehensive vehicle loan service provider" with a Bank of Thailand business license, and the capture's own text calls it "a non-bank financial service provider specializing in title loans for motorcycles, cars, pickups, and trucks". A cookie consent overlay (`onetrust-banner-sdk`) was hidden before measuring and is not documented here.

Reading the capture top to bottom: a thin dark strip, a bright-blue utility bar (For Shareholders, About Us, Tidlor Academy, Work With Us, Contact Us, search, and a Thai/English switch), a second blue bar with the red-and-blue Thai wordmark logo and the main nav (Get Loan, Buy Insurance, Knowledge Center, Digital Services, Find Branch) and an orange "Download App" button; then a deep blue gradient hero with the white headline "Fast approval with your vehicle registration as collateral", a promotional carousel, and a frosted-glass lead form ("Select the Loan or Refinancing Option You Are Interested In") with radio choices, three inputs and an orange "Confirm Information" button. A pale green-yellow ticker band follows ("Quick callback Fast approval", "Why do over 2 million customers choose Tidlor?"), then "Popular loan amount examples" with vehicle photo cards, a blue "Ngern Tid Lor Loans" band with five white product cards (car, motorcycle, truck, used-truck, land), "Promotions and Activities" banners and a "Who is Ngern Tid Lor?" card. The page is 4119px tall at 1280px wide.

The personality is friendly, energetic consumer finance: saturated blue gradients, glassy translucent cards, soft pastel illustrations (a blue car, a pink scooter, yellow trucks) and strong orange calls to action.

## Colors

The page is mostly white and blue. Measured backgrounds: `#ffffff4d` (translucent white card fill, the largest area), `#ffffff` (also the canvas), `#112492` deep blue, `#dbe7fe` pale blue (button fill), `#1e1e1f` near-black and `#fefde0` pale yellow.

- **Primary `#2652ea`** is the brand action blue: the h2 color (349 characters), the text on the pale-blue buttons, and a 1px border on outlined controls. It matches the site's own variable `--digital-blue-600`. The extractor had picked `#dbe7fe` (the button fill) as primary; that fill is kept as `button-tint`.
- **Navy `#112492`** is a deep blue field.
- **Ink `#616166`** is the most-read grey (472 chars); `#414243` colors body paragraphs (431 chars); `#171717` and `#1e1e1f` are darker inks; `#dddddf` is a subtle grey.
- **White `#ffffff`** is text over the blue hero and header (1188 chars).
- **Pale yellow `#fefde0`** is text/fill on the ticker band (167 chars).
- **Hairline `#ffffff33`** is the border on glass cards.

The orange-to-red gradient on "Confirm Information", "Calculate now!" and "Download App" is visible in the capture; its stops were not captured by the extractor, so it is not tokenized. The site's variables include an orange scale (`--orange-500 #f98a07`) and a red scale (`--digital-red-500 #fd355d`), but their use on specific elements was not measured. One measured button candidate (text `#414243`, fill `#fefde0`, 6px radius, 31px tall) carries the gradient `linear-gradient(98deg, rgba(252, 247, 188, 0.6) -7.72%, rgba(229, 191, 130, 0.6) 29.04%, rgba(196, 141, 87, 0.6) 46.96%, rgba(139, 70, 46, 0.6) 66.71%, rgba(241, 219, 159, 0.6) 87.85%)`.

## Typography

Three families are loaded: `notoSansThai` (2646 weighted characters; 400, 600, 700), `sarabun` (1352; 400 to 700) and `poppins` (18 characters, 700). The hero h1 is notoSansThai 36px / 700 / 56px line height (20px / 30px on the 390px mobile pass); section h2 is 32px / 700 / 46px (26px / 36px on mobile); body paragraphs are notoSansThai 20px / 600 / 28px; buttons are 16px / 600 / 24px; links and sub-headings are sarabun 16px / 400 or 600; inputs are sarabun 15px / 400. Small 12px and 14px text carries the legal copy and nav. Both main faces are Thai-script families, so Thai and Latin text render in the same family; fallbacks are the generated `Fallback` faces declared by the site.

## Layout

The page uses full-width bands with a centered content column. The hero is a two-column composition: headline plus carousel at left, a glass form card at right. Product cards sit in a 4+1 grid. Measured gaps are 8px and 4px (42 uses each), 16px, 6px, 24px, 12px, 40px and 48px; paddings are 12px, 8px, 10px, 16px, 4px, 5px, 2px and 24px. The site defines `--breakpoint-desktop: 1201px` and the collapse variables `--collapse-docs-max: 840px` and `--collapse-usedtruck-min: 340px` in its root variables.

## Elevation & Depth

Depth is glassmorphic. Cards use a translucent white fill (`#ffffff4d`) with a vertical white gradient, a `#ffffff33` border and a three-part shadow: `rgba(0, 34, 130, 0.2) 0px -4px 16px 0px inset`, `rgba(255, 255, 255, 0.22) 0px 8px 16px 0px inset` and `rgba(0, 0, 0, 0.1) 0px 10px 20px 0px`. A softer `rgba(0, 77, 149, 0.08) 0px 6px 15px 0px` lifts white product cards. The footer is a `linear-gradient(275deg, rgb(32, 78, 207), rgb(49, 70, 181))` with a rotated translucent `#3f82f580` shape.

## Shapes

Radii measured: 16px (34 elements), 24px (20, glass cards), a full-pill value (14), 12px (13), 50% (12, circular controls), 10px (5, the pale-blue button), 8px and 4px (2 each). The tokens keep the scale 4, 6, 8, 10, 12, 16, 24, 30 and pill.

## Components

- **button-primary**: pale blue `#dbe7fe` fill, `#2652ea` 16px / 600 text, 10px radius, 36px tall, `0 12px` padding; on hover the fill becomes `#eff5ff`.
- **outlined button**: transparent, white text at 18px / 600, 1px white border, 12px radius, `0 24px` padding.
- **text-input**: sarabun 15px, text `#1e1e1f`, 40px tall.
- **card**: glass card, 24px radius, 10px padding, 1px `#ffffff33` border and the shadow stack above.
- **nav-link**: white notoSansThai 16px / 600 on the blue header.
- **footer**: white text on the blue gradient.

## Design System Architecture

No public design system or brand guideline is published: the opened page https://www.tidlor.com/en has no brand, design-system or press-kit link (its nearest items are News, Culture Stories and Videos). The site does ship a named token system in its root variables, a Tailwind-based set including color scales (`--digital-blue-25` to `--digital-blue-950`, `--ntl-blue-50` to `--ntl-blue-950`, `--black-50` to `--black-950`), semantic roles (`--text-body`, `--text-and-icon-primary`, `--surface-primary`, `--background-primary`, `--border-warning`, `--button-disabled`) and radii (`--radius-sm` .25rem, `--radius-md` .375rem, `--radius-2xl` 1rem, `--radius-4xl` 2rem). `--digital-blue-600` is `#2652ea` and `--digital-blue-100` is `#dbe7fe`, which confirms the primary and button-tint roles.

## Do's and Don'ts

- Do use `#2652ea` for headings and button text and deep blue `#112492` fields behind white text.
- Do keep the pale `#dbe7fe` button at 10px radius and 36px height.
- Do build cards as frosted glass with the 24px radius and the inset-plus-drop shadow stack.
- Do use notoSansThai for display and body, sarabun for links and inputs.
- Don't treat the cookie overlay as brand UI; it was hidden for measurement.
- Don't use sharp-cornered cards; measured corners run 8px to 24px.
- Don't use thin font weights; body copy is weight 600 and headings 700.

## Responsive Behavior

The 390px mobile pass recorded the h1 at 20px / 30px, the h2 at 26px / 36px, body at 20px / 28px and the primary button unchanged at 16px / 24px, 10px radius. The site declares a desktop breakpoint of `--breakpoint-desktop: 1201px` in its root variables. Mobile layout, nav collapse and carousel behavior were not measured.

## Iteration Guide

1. Set the canvas `#ffffff` with blue gradient bands behind white headlines.
2. Use `#2652ea` for h2 and button text; `#dbe7fe` for button fills.
3. Make cards glass: `#ffffff4d`, 24px radius, `#ffffff33` border.
4. Use notoSansThai 36px / 700 for hero headings, 20px / 600 for body.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=ngern-tid-lor --url=https://www.tidlor.com/en --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=ngern-tid-lor`.
