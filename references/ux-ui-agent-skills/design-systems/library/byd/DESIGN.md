---
version: alpha
name: BYD USA
category: "Automotive"
description: "BYD USA (byd.com/us, the US page that byd.com redirects to) is an EV marketing site in Montserrat 400 to 700 with a #252728 charcoal header and footer, a black #000000 utility bar, white content bands, full-bleed car photography, 4px-radius black and outlined buttons 44px to 47px tall, and underline-style form fields."
colors:
  canvas: "#ffffff"
  ink: "#252728"
  primary: "#000000f2"
  on-primary: "#ffffff"
  surface-black: "#000000"
  ink-muted: "#999999"
  ink-on-dark: "#e9e9e9"
  ink-secondary: "#00000080"
  ink-deep: "#1a1d25"
  ink-cool-grey: "#a1a6af"
  accent-red: "#d70c19"
typography:
  display:
    fontFamily: Montserrat, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 40px
  display-mobile:
    fontFamily: Montserrat, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 33.6px
  subheading:
    fontFamily: Montserrat, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: Montserrat, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button:
    fontFamily: Montserrat, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  nav:
    fontFamily: Montserrat, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Montserrat, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 2px
  sm: 4px
  md: 10px
  lg: 12px
  xl: 16px
  2xl: 30px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 16px
  s9: 22px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 13px 32px
    height: 47px
  button-outline-light:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 10px 32px
    height: 44px
    borderColor: "{colors.canvas}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    height: 58px
  footer:
    backgroundColor: "{colors.ink}"
---

## Overview

This document describes the US page of BYD, https://www.byd.com/us (the requested byd.com redirects to it; title "Electric Cars, Sedans and SUVs I BYD USA"), so the file is named after the measured site, BYD USA. The brand's global and regional sites are linked from its footer (en.byd.com, bydglobal.com, electronics.byd.com and others), and each region has its own page; this one is the American storefront for electric cars. The desktop capture is 1,280px wide and 3,433px tall.

The page is confident and minimal in the manner of a car brand: dark chrome (a black utility bar and a charcoal `#252728` header and footer), big edge-to-edge photography, white content bands and very little decoration. Colour comes from the cars. Type is Montserrat in medium and semibold weights with slightly negative tracking, buttons are rectangular with 4px corners, and the contact form uses underlined fields with inline labels instead of boxes.

The capture, from the top: a black utility bar with a search icon, a divider and a "Global" selector; a charcoal header with the outlined BYD wordmark at the left, "Models", "About BYD" and "News" centred, "BYD WORLD" and a globe icon at the right; a full-bleed hero carousel (a blue HAN sedan under an archway) with square translucent previous and next arrows and a thin progress line with "02 / 02"; a pale-blue gradient band with a tab line reading "Electric", the model name "BYD HAN", a studio photograph of the car and a 1px-outlined "Explore" button; a two-column block with a rounded-corner image ("COOL THE EARTH BY 1°C" with a line-up of cars) and "Cool the Earth by One Degree", a grey paragraph ("Our corporate mission is centered on leveraging technological innovations to create a better life") and a "Learn More" outlined button; a "Contact Us" form (First Name, Last Name, Contact Preference, E-mail, country code, Phone Number, Region, Zip Code, Topic, Question, a Privacy Policy checkbox and a black "Submit" button) beside a tall rounded photograph of a lime-green car; and a charcoal footer in link columns (Models, About BYD, BYD WORLD), legal links, "Follow Us" icons and a copyright line.

A cookie-consent dialog covers the hero in the capture (Reject all / Accept all buttons, a "Technically Required" and a "Marketing and Advertising" checkbox); it was re-captured once and remained, because it is a consent control rather than a scrim, so none of its colours, buttons or its white 85% panel are used as brand UI here. The small cookie icon at the lower left is the same control.

Voice is corporate-aspirational: "Cool the Earth by One Degree", short model names, and a form with plain labels.

## Colors

- **Charcoal `#252728` (ink).** Header and footer fill (849 units of background area) and the main text colour on white (838 characters).
- **Black `#000000` (surface-black).** The top utility bar; 1,073 units of background area (this figure includes the consent buttons).
- **Black 95% `#000000f2` (primary).** The fill of the "Submit" button (the only primary button recorded), with white text; the same colour is the text of the form inputs.
- **White `#ffffff` (canvas).** The content bands and the text on dark areas; 1,130 units of background area.
- **Greys.** `#999999` (220 characters), `#e9e9e9` (104 characters), `#00000080` (50% black, the paragraph colour on white), `#1a1d25` (46 characters; also the border colour of three elements) and `#a1a6af` (31 characters).
- **Red `#d70c19`.** Appears 117 times in the shipped CSS (with `#ff0000` 39 times); where it is used on screen was not mapped, so it is listed without a role.
- **Pale blue band.** The "Electric" band is a vertical gradient to a very light blue (`#f7fcff` was recorded on one element).

The page loads Element Plus (Vue) variables on `:root`, including `--el-color-primary: #409eff`, `--el-color-success: #67c23a` and `--el-color-warning: #e6a23c`; these are the UI library's defaults, not BYD brand colours, and are not tokens here.

## Typography

**Montserrat** carries essentially all of the text (1,549 characters), with `Arial, "Helvetica Neue", Helvetica, sans-serif` fallbacks; the page loaded it at 400, 500, 600 and 700 together with the `icomoon` icon font. Weights by characters: 400 on 806, 500 on 554, 700 on 111, 600 on 80.

Scale: the hero title ("YANGWANG U9 Xtreme", white over the image) measures 36px/40px at weight 500; body paragraphs and labels 16px/24px at 500; card titles 16px/24px at 700; buttons 14px/21px at 500; the outlined hero button 13px/22px at 400; navigation 16px/24px. By characters: 14px 875, 16px 361, 12px 151, 20px 47, 18px 34, 28px 28, 13px 27, 36px 18, 28.4444px 10. Tracking is negative: -0.2px and -0.24px on 12px text, -0.24px on 14px and -0.32px on 16px. Mobile (390px) measured the title at 24px/33.6px and body at 14px/22.68px. Montserrat is the only face; the stack's own fallbacks are the substitutes.

## Layout

A 1,280px canvas; images and headings in the capture start at a shared left margin. The header block measures 103px tall including the black utility bar, the hero is a full-bleed photograph with carousel controls over it, and below it sections alternate between a pale gradient band and white. Two-column splits dominate: image left and text right ("Cool the Earth by One Degree"), form left and a tall photograph right ("Contact Us"). The form fields are underlined rows, two to a line for names and phone, full width for the rest.

Measured paddings: 16px (6 elements), 12px (6), 11px (5), 32px (4), 8px (4), 30px (3), 50px (3), 10px (3). Measured gaps: 8px (14), 12px (8), 35.5556px (2), 22px (2), 24px (2), 16px (2). Buttons carry `13px 32px` and `10px 32px` padding.

## Elevation & Depth

Almost flat. Only one shadow was measured on screen, `rgba(0, 0, 0, 0.25) 0px 0px 5px 0px` (also declared 18 times in the CSS). Element Plus box-shadow variables (`var(--el-box-shadow-light)`, 48 declarations) are in the stylesheet but were not mapped to elements. Depth comes from photography, dark header bands over light content, the 1px-outlined buttons and the rounded-corner images; the carousel arrows are translucent squares over the photo.

## Shapes

Corners are small and square-ish on controls and larger on images. Measured radii on screen: 4px on 4 elements (buttons), 12px on 2, 30px on 1, 10px on 1, 16px on 1, 2px on 1; the stylesheet most often declares 4px (73), 3px (26), 8px (25), 2px (16) and 10px (15). The two big photographs in the capture have visibly rounded corners; carousel arrows and the "Explore" button are small rectangles. Form fields are underlines with no radius.

## Components

- **Primary button ("Submit").** `#000000f2` fill, white 14px/21px weight-500 label, 4px radius, `13px 32px` padding, 47px tall, 116px wide.
- **Outlined button ("Learn More" on the hero).** White 13px label, `1px solid #ffffff`, 4px radius, `10px 32px` padding, 44px tall, 140px wide. On light sections the capture shows dark-outlined versions of the same shape ("Explore", "Learn More"); their colours were not recorded.
- **Header.** `#252728`, white 16px links; "BYD WORLD" dims to 80% white on hover (`rgba(255, 255, 255, 0.8)`).
- **Text input.** 58px tall, 16px text in `#000000f2`; fields are underlined rows with grey inline labels ("First Name *", "Phone Number*").
- **Model tab band.** A "Electric" tab with a 1px underline, a model name, a studio car photo and an "Explore" button.
- **Image card.** A rounded-corner photograph with overlaid headline text.
- **Footer.** `#252728`, columns of white links, legal links and social icons.
- **Carousel controls.** Square translucent arrow buttons at both edges and a progress line with "02 / 02".

## Design System Architecture

BYD does not publish a design system or brand guideline on the opened pages (https://www.byd.com/us links to other BYD regional and group sites, news, legal pages and social profiles, but not to a brand or token page). The site is a template-driven CMS build: its stylesheets are `/template/byd-overseas/default/byd-overseas-template/commmon_….css` and `element-plus_….css`, plus per-component sheets under `/component/byd-overseas/` (`new-public/header/m01-header-new`, `new-public/header/cookie`, `new-public/footer/m04-footer-new`, `america-version/contact-us-mx`, `america-version/car-selection`, `america-version/selling-points`). The page runs Element Plus: its `:root` carries 139 custom properties, nearly all `--el-*` (`--el-color-primary` `#409eff`, `--el-border-radius-base` 4px, `--el-menu-item-height` 56px, `--el-font-size-base` 14px), plus Swiper's `--swiper-theme-color: #007aff` and `--swiper-navigation-size: 44px`.

So the brand layer is not tokenised: the BYD look comes from component CSS that overrides Element Plus (charcoal `#252728`, black buttons, Montserrat), and the measured values are the source of truth. The Element Plus blue, green, orange and red defaults and the Swiper blue are framework colours, not BYD colours.

## Do's and Don'ts

Do:
- Use charcoal `#252728` for the header and footer and a black utility bar above it.
- Set text in Montserrat at weights 500 to 700 with slightly negative tracking.
- Use rectangular 4px-radius buttons: black `#000000f2` with white text for the primary action, 1px-outlined for secondary.
- Let full-bleed car photography carry the colour; keep content bands white or a pale gradient.
- Use underlined form fields with grey inline labels.

Don't:
- Don't use Element Plus's `#409eff` blue or other `--el-color-*` defaults as brand colours.
- Don't round buttons beyond 4px.
- Don't use the cookie dialog's panel, buttons or the floating cookie icon as brand components.
- Don't add heavy shadows; one 5px 25% shadow was the only measured one.
- Don't set body copy lighter than 400 or in a different family.

## Responsive Behavior

Measured at 390px: the hero title is 24px/33.6px at weight 500 in a 288px-wide box, body copy is 14px/22.68px in `#00000099` in a 316px-wide box, the Submit button is unchanged (116px by 47px, 14px label), and the header block measured 65px tall. Character counts by size on mobile: 14px 810, 12px 152, 13px 130, 16px 30, 20px 28, 24px 18, 24.96px 10. The Element Plus stylesheet and the component sheets declare their own media queries; what changes in the layout (nav, carousel, two-column splits) at mobile widths was not measured.

## Iteration Guide

1. Set canvas `#ffffff`, ink and header/footer `#252728`, a `#000000` utility bar, primary `#000000f2`.
2. Load Montserrat 400/500/600/700; set 36px/40px titles at 500, 16px body at 500, 14px buttons.
3. Build the header (outlined BYD wordmark, centred Models / About BYD / News, "BYD WORLD" and a globe at the right) and a full-bleed hero with square arrows and a progress line.
4. Add the pale-gradient model band with a studio car photo and a 1px-outlined button; then the image-plus-text split with 16px-rounded images.
5. Add the underlined-field contact form with a 47px black Submit button; end with the charcoal footer.
6. Run `node web/scripts/verify-designs.mjs --slug=byd` and compare with `web/data/captures/byd.jpg`.
