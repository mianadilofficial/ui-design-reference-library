---
version: alpha
name: Singtel
category: "Telecom"
description: "Singtel's consumer telecom storefront for Singapore: white canvas (#ffffff) with ink #231f20, a single red action color #ed1a3d on pill-ish 20px buttons, Lato Regular/Bold set at 16px body and 48px section headings, pastel service tiles and a black device-showcase band."
colors:
  canvas: "#ffffff"
  page-largest: "#f0f0f0"
  ink: "#231f20"
  primary: "#ed1a3d"
  on-primary: "#ffffff"
  surface-soft: "#f5f5f8"
  ink-muted: "#c6c6c6"
  link-blue: "#009fd4"
typography:
  display:
    fontFamily: Lato-regular
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.16px
  heading:
    fontFamily: Lato-Regular, Arial, Helvetica, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 50px
    letterSpacing: 0.16px
  body:
    fontFamily: Lato-Regular, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.16px
  button:
    fontFamily: Lato-Bold, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    letterSpacing: 0.16px
  nav:
    fontFamily: Lato-Bold, Arial, Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.2px
    letterSpacing: 0.16px
    textTransform: uppercase
  link:
    fontFamily: Lato-Bold, Arial, Helvetica, sans-serif
    fontSize: 18.4px
    fontWeight: 700
    lineHeight: 27.6px
    letterSpacing: 0.16px
rounded:
  xs: 20px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 11px
  s5: 20px
  s6: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 11px 40px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 11px 40px
    height: 40px
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
---

## Overview

Singtel is the Singapore consumer telecom site measured at singtel.com: a retail storefront for mobile plans, SIM-only plans, phones and gadgets, fibre broadband, CAST subscriptions and Singtel TV. The measured page title is "Singtel: Mobile, Fibre Broadband and TV services provider". The page reads as a shop first and a corporate site second. A one-line statement ("Shop mobile, broadband and more services on Singtel, Singapore's best network") sits above a grid of six category tiles, followed by a black device-showcase band ("Impressed? We made it $0.") and a lavender gadget band ("Gear up your everyday with our best-selling gadgets.").

The capture shows a thin grey scam-alert strip at the top ("SCAM ALERT: BE WARY of emails or SMSes claiming issues with your Singtel accounts or service."), then a hero carousel with a short headline ("Hello, hello."), a one-line sub-message ("Port-in to SG's Safest Network.") and a red pill CTA beside a blue text link. The voice is brief, promotional and price-led: "$0", "Shop now", "Register now", "See all deals".

Colour is restrained and role-driven. Red (#ed1a3d) is used for action and for the SIM-only tile; ink is a warm near-black (#231f20); a cyan-blue (#009fd4) is reserved for text links. Everything else is either white, a pale grey, or the pastel tile backgrounds that categorize products.

## Colors

The palette is measured from the live page. Area-weighted backgrounds are #f0f0f0 (weight 614), #f5f5f8 (459) and #ed1a3d (112); the white canvas is #ffffff. Text by characters is dominated by #231f20 (1880), then #ffffff (326, used on the black band and red buttons), #c6c6c6 (188, the small uppercase navigation links) and #009fd4 (62, links).

- **canvas #ffffff**: the page background.
- **page-largest #f0f0f0**: the largest background-by-area region, the grey surface behind product cards.
- **surface-soft #f5f5f8**: a secondary soft surface.
- **ink #231f20**: body and heading text.
- **primary #ed1a3d**: the fill of every measured CTA, with #ffffff label text.
- **link-blue #009fd4**: the "Learn more" link color; its measured hover state changes to rgb(0, 150, 179).
- **ink-muted #c6c6c6**: the color of the 12px uppercase navigation links in the extraction (for example "DATA PROTECTION").

The extracted CSS corpus also contains #e2e2e2, #d5d5d5, #999999 and #666666 as frequently declared colors; they were not promoted to tokens because they did not appear in the rendered area or text rankings. The category tiles use pastel pinks, yellows, blues and lavenders in the capture; those fills were not captured as exact values and are described here only qualitatively.

## Typography

The loaded fonts are Lato-Regular, Lato-Bold and an icon font named lux-icons. Lato-Regular carries 1871 characters, Lato-Bold 508 and a differently cased "Lato-regular" 77. The stack is Lato with Arial, Helvetica, sans-serif fallbacks.

Measured sizes by character weight: 16px (1595), 48px (434), 12px (188), 18.4px (84), 24px (77), 18px (53), 28px (25). Letter spacing is 0.16px at almost every size. Weight is 400 for nearly everything (2371 characters) with 700 on 85 characters; the bold look of buttons comes from the Lato-Bold face rather than from font-weight, which is why the button token records weight 400 with the Lato-Bold family.

- **display** 24px / 24px, Lato-regular: the measured h1, a single statement line.
- **heading** 48px / 50px: section titles such as "Impressed? We made it $0."
- **body** 16px / 24px.
- **button** 16px Lato-Bold.
- **nav** 12px uppercase, line-height 19.2px.
- **link** 18.4px / 27.6px, weight 700.

Lato is an open typeface; no substitute is needed.

## Layout

The page is 1280px wide in the desktop pass with a total scroll height of 4582px. The page grid centres content in a roughly 1180px column (the measured h1 and h2 widths are 1180px). The category grid in the capture is a mix of wide and narrow tiles in two rows. Full-bleed colour bands (black, lavender) alternate with white sections.

Padding values by frequency: 10px (67), 5px (21), 20px (18), 11px (17), 40px (17) and 8px (8). These map to the spacing tokens s3, s1, s5, s4, s6 and s2. The CTA padding is 11px 40px.

## Elevation & Depth

Depth is almost absent. The only measured shadow is rgba(0, 0, 0, 0.5) 0px 0px 6px 0px, with weight 8, a soft all-around halo rather than a drop shadow. Separation comes from color bands and from white-bordered product cards on the black band. No borders were measured (the borderColors ranking is empty).

## Shapes

Two radii are measured: 20px (weight 17) and 100% (weight 8, circular elements). Buttons use the 20px radius, which at the measured 40px height renders as a full pill. The pill token (9999px) is a generated convenience for fully rounded shapes. Product cards and category tiles in the capture have visibly rounded corners; no further radius values appear in the extraction.

## Components

**Primary button.** Red #ed1a3d fill, white Lato-Bold 16px label, 20px radius, 11px 40px padding, 40px high. Measured instances: "See all deals" (168px wide) and "Shop now" (151px wide on mobile). The secondary button, for example "Register now" (176px wide), uses the identical fill and radius, so no visually distinct secondary style was measured.

**Text link.** "Learn more" in #009fd4, Lato-Bold 18.4px, no underline; hover shifts both text and border color to rgb(0, 150, 179).

**Navigation link.** 12px uppercase Lato-Bold in #c6c6c6, 19px high.

**Category tile.** A rounded tile with a label on the left and a product image on the right, on a pastel fill. Content: Mobile phones with plans, SIM Only plans, Phones and Gadgets, Promotions, Fibre Broadband, CAST subscriptions, Singtel TV.

**Product card.** White bordered card holding a grey inner panel with a device image and a name above it ("iPhone 18 Pro Max", "iPhone 18 Pro", "iPhone Duo"), with a red pill button under the card.

Cookie-consent overlays were hidden during the measurement and are not part of the brand UI.

## Design System Architecture

No public design-system documentation for Singtel was found: the only page opened for research (singtel.com/about-us) returned only a heading. The de-facto system is visible in the shipped page: no CSS custom properties are declared on the root (rootVars is empty), fonts are loaded as Lato-Regular and Lato-Bold files, and an icon font called lux-icons is used. Class names seen in the consent overlay ("ux-header-singtel", "consent-banner-singtel") show a Singtel-prefixed component naming. Tokens in this file therefore come from measured computed styles, not from a published token package.

## Do's and Don'ts

- Do use #ed1a3d only for actions and commerce accents; label it white.
- Do keep body text in #231f20 on white, 16px / 24px.
- Do use the 20px radius for buttons.
- Do use Lato-Bold for buttons, nav and links.
- Don't introduce heavy shadows; the only measured shadow is a 6px soft halo.
- Don't use #009fd4 for buttons; it is the link color.
- Don't treat the consent banner or chat avatar as brand UI.

## Responsive Behavior

The mobile pass measured these roles: h1 24px in a 370px-wide element, h2 32px (down from 48px), body 16px, the primary button 16px and 151px wide, nav 12px. Mobile character-weighted sizes are 16px, 32px, 12px, 18.4px, 24px and 21px. Breakpoint values, navigation collapse behavior and grid changes were not measured.

## Iteration Guide

1. Start from the white canvas and the #231f20 ink; add red only where an action exists.
2. Build buttons from the token: 40px high, 11px 40px padding, 20px radius, Lato-Bold 16px.
3. Use 48px headings on desktop and 32px on mobile, as measured.
4. Group products in rounded tiles with a short label and an image; alternate white sections with one dark band.
5. Keep copy short and price-led ("Shop now", "$0").
6. Re-run the gate after any change: node web/scripts/verify-designs.mjs --slug=singtel.
