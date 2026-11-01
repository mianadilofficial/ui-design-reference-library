---
version: alpha
name: Jaeger-LeCoultre
category: "Luxury"
description: "Swiss watch maison's US English home page: full-bleed dark campaign video blocks over white and #f3f1ed stone, warm-black #201f1e square buttons, bronze-beige #b7a98e labels, uppercase Decimal 600 headlines at 45px and GothamSSm 15px body, 2px inputs and no shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#100f0f"
  ink: "#3a3935"
  primary: "#201f1e"
  on-primary: "#ffffff"
  surface-stone: "#f3f1ed"
  ink-secondary: "#b7a98e"
  ink-light: "#d8d8d8"
  ink-pure: "#000000"
  hairline: "#ffffff4d"
typography:
  display:
    fontFamily: Decimal, Helvetica, Arial, sans-serif
    fontSize: 45px
    fontWeight: 600
    lineHeight: 60.0003px
    textTransform: uppercase
  display-mobile:
    fontFamily: Decimal, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 600
    lineHeight: 37.3335px
    textTransform: uppercase
  subheading:
    fontFamily: Decimal, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 26.6668px
    textTransform: uppercase
  body:
    fontFamily: GothamSSm, Helvetica, Arial, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 25.0001px
  button:
    fontFamily: Decimal, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16.0001px
    textTransform: uppercase
  input:
    fontFamily: GothamSSm, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 2px
  none: 0px
  pill: 9999px
spacing:
  s1: 2.6px
  s2: 5px
  s3: 10px
  s4: 17px
  s5: 20px
  s6: 30px
  s7: 36px
  s8: 40px
  s9: 45px
  s10: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 50px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 38px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 30px 0px 36px
    height: 38px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.none}"
---

## Overview

The measured page is `https://www.jaeger-lecoultre.com/us-en`, "Jaeger-LeCoultre Official Website | Swiss Luxury Watches Since 1833" (language `en-US`), 1,280px wide and 4,925px tall. The capture shows a light utility strip at the top (a country selector pre-set to Thailand - English with a CONTINUE button and the line "Choose your country/region for an optimal shopping experience", then a second strip with United States of America, a phone number, Contact us, Boutiques and Newsletter, and account, wishlist and bag icons), followed by the main bar: the Jaeger-LeCoultre wordmark at the left, uppercase navigation (NEWS, WATCHES, STRAPS, SERVICES, EXPERIENCES, MAISON) and a pale search field at the right. The country strip is a regional prompt, not brand UI, and is not documented as a component here.

Under the header come three tall full-bleed campaign panels, each a dark cinematic photograph with a small bronze-beige eyebrow, a large white uppercase headline and one or two square buttons: "MASTER OF PRECISION / MASTER CONTROL CHRONOMETRE / DISCOVER", then "OCTOBER 13: 10 VINTAGE PIECES UNVEILED / THE COLLECTIBLES / GET NOTIFIED, DISCOVER", then "PRECISION IN EVERY LINK / MASTER CONTROL CHRONOMETRE / DISCOVER". Below the campaigns the page returns to white with a centred heading and product grid (headings such as REVERSO at 20px), a "SEE ALL WATCHES" link, an email sign-up ("Sign up for Jaeger-LeCoultre emails to b…") and a near-black maison footer ("ABOUT OUR MAISON", "MANUFACTURE-ATELIER SIN…").

The voice is formal and horological: short capitalised statements, product names (Master Control, Reverso, Collectibles), and verbs like DISCOVER. The site's own page title anchors the heritage claim as "Since 1833". Fetching the page directly returned HTTP 403, so the description relies on the extraction and capture.

## Colors

- **Canvas `#ffffff`** (`colors.canvas`): the product and content bands (1,916 area weight) and the navigation bar.
- **Page-largest `#100f0f`** (`colors.page-largest`): the largest measured background (2,273 area weight), used for the dark campaign panels and the footer.
- **Ink `#3a3935`** (`colors.ink`): root `--color-text-standard`; 814 weighted characters of body and heading text on white; also the resting fill of the secondary buttons (CONTINUE, GET NOTIFIED measure `rgb(58, 57, 53)`).
- **Primary `#201f1e`** (`colors.primary`): the DISCOVER button fill, which text `#ffffff` sits on. On hover the buttons settle to `rgb(32, 31, 30)`; CONTINUE also drops to opacity 0.6.
- **Surface stone `#f3f1ed`** (`colors.surface-stone`): warm off-white blocks (503 area weight) and a 382-character text color on dark.
- **Ink secondary `#b7a98e`** (`colors.ink-secondary`, root `--color-text-secondary`): eyebrows and footer headings in a muted bronze.
- **Ink light `#d8d8d8`**, **ink pure `#000000`** and **hairline `#ffffff4d`** (white at 30% opacity, the one measured border).
- Root variables name additional values, such as `--color-accent-dark` `#93866c`, `--color-secondary-darker` `#96938e`, `--color-divider` `#ebe8e4`, `--color-background-card-hover` `#eaeaea`, `--color-backdrop-dark` `rgba(0, 0, 0, .5)`, `--color-dark-blue-300` `#393d4a` and `--color-light-blue-100` `#ecedf4`. These are published but were not measured on rendered elements, so they are not tokens. Third-party values such as `#007aff` (Swiper) and Tailwind ring variables are not brand colors.

## Typography

Fonts loaded: **Decimal** (600 and normal), **GothamSSm** (Book, Bold, 400/700) and Metropolis (82 characters). Headings, nav, labels and buttons are Decimal at weight 600, almost always uppercase; body and inputs are GothamSSm. Root `--font-family-primary` is `GothamSSm, Helvetica, Arial, sans-serif`.

| Role | Font | Size / line-height | Notes |
| --- | --- | --- | --- |
| Display (h1/h2) | Decimal 600 | 45px / 60.0003px | uppercase, white on campaign panels |
| Display, 390px | Decimal 600 | 28px / 37.3335px | uppercase |
| Subheading (h3) | Decimal 600 | 20px / 26.6668px | uppercase |
| Body | GothamSSm 400 | 15px / 25.0001px | |
| Button / nav | Decimal 600 | 12px / 16.0001px | uppercase; nav tracking 1px, footer tracking 1.2px |
| Input | GothamSSm 400 | 12px / 20px | |

By character count: Decimal 1,896, GothamSSm 1,239, Metropolis 82; sizes 12px (1,391), 15px (804), 13px (424), 10px (262), 20px (123), 14px (82), 34px (79), 45px (52); weights 600 (1,879), 400 (1,236), 500 (82), 700 (20). Decimal and Gotham are commercial typefaces; Helvetica and Arial are the site's declared fallbacks. Note that the extractor's h1 was the visually hidden text "JAEGER-LECOULTRE HOME LOGO"; the visible headline style is the same 45px Decimal 600 uppercase in white on the first campaign panel.

## Layout

- Desktop 1,280px; navbar height 116px (`--navbar-height`).
- Root spacing variables: `--spacing-base` 1.25rem, `--spacing-sm` .9375rem, `--spacing-md` 1.875rem, `--spacing-xl` 3.75rem, `--spacing-2xl` 5rem, `--spacing-3xl` 6.625rem, `--spacing-4xl` 11.563rem. Measured gaps: 20px (44), 5px (36), 10px (12), 30px (6), 40px (3); paddings 20px (42), 10px (39), 2.6px (17), 40px (16), 30px (9), 17px (8).
- Campaign panels are single-column, full-bleed, with text anchored bottom left.
- Slider navigation uses `--slider-nav-size` 2.75rem with white controls.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty), and no card elevation was detected. Legibility over photography comes from a black gradient at the bottom of each campaign image; modal and backdrop values exist as `--color-backdrop-dark` `rgba(0, 0, 0, .5)` and `--color-backdrop-light` `rgba(255, 255, 255, .9)`. The only border measured with an alpha value is `#ffffff4d` on the buttons over imagery.

## Shapes

Buttons, links, nav and the footer are square (0px). The country select/input measures 2px (`rounded.xs`), and two circular elements (50%) exist, namely slider or icon controls. The `rounded.pill` token (9999px) represents these circles. No other rounding was measured.

## Components

- **Primary button**: `#201f1e` fill, `#ffffff` 12px Decimal 600 uppercase label, 50px high (106px wide for DISCOVER), square, 1px white-alpha border; hover to `rgb(32, 31, 30)`.
- **Secondary button**: `#3a3935` fill, white label, 38px high (CONTINUE, 154px wide); hover fades to opacity 0.6 on a darker fill.
- **Light button**: white fill with dark text appears beside GET NOTIFIED on the Collectibles panel (visible in the capture; its numeric values were not separately measured).
- **Text link**: "SEE ALL WATCHES", 12px/600 uppercase, `#3a3935`.
- **Text input / select**: white, `#3a3935` 12px GothamSSm, 38px high, 2px radius, padding 0px 30px 0px 36px (room for a leading flag/icon and trailing chevron).
- **Navigation**: Decimal uppercase 12px with 1px tracking, 684px tall on desktop for the campaign eyebrow stack and 616px at mobile.
- **Footer**: `#100f0f` background, bronze `#b7a98e` headings at 12px with 1.2px tracking, 649px tall.
- **Feedback tab**: a vertical dark "Feedback" tab at the right edge is a third-party widget and not documented as brand UI.

## Design System Architecture

No public brand-guidelines or design-system site was found, and direct fetching of the home page returned HTTP 403. The shipped CSS shows a Tailwind-based build (variables such as `--tw-ring-shadow`, `--tw-ring-color`) with a semantic layer: `--color-text-standard`, `--color-text-secondary`, `--color-divider`, `--color-background-card-hover`, `--action-background-color`, `--action-text-color-active`, `--font-family-primary`, `--font-family-arshid`, `--font-size-md` 1.125rem, `--font-size-4xl` 2.125rem, spacing and slider variables, and an easing token `--ease-out-quad: cubic-bezier(.5, 1, .89, 1)`. The type and color tokens above map to that semantic layer where the same value was measured.

## Do's and Don'ts

- Do set headlines in Decimal 600 uppercase over dark photography, in white.
- Do keep calls to action square, 12px uppercase, in `#201f1e` or `#3a3935`.
- Do use `#b7a98e` for small eyebrows and footer headings.
- Do alternate full-bleed dark panels with white and `#f3f1ed` bands.
- Don't round buttons; only inputs get 2px.
- Don't add shadows; none are measured.
- Don't use the country/region strip or the Feedback tab as design reference.
- Don't set body copy in Decimal; use GothamSSm at 15px / 25.0001px.

## Responsive Behavior

Measured at 390px: the h1 style becomes Decimal 28px / 37.3335px uppercase; body stays GothamSSm 15px / 25.0001px; the DISCOVER call to action becomes a full-width (350px) 50px-high button filled `#3a3935`; the eyebrow/navigation stack is 616px tall at 390px wide with 12px labels and 1px tracking. Mobile sizes by characters: 12px (1,477), 15px (765), 10px (262), 20px (123), 14px (90). Other breakpoints are not measured.

## Iteration Guide

1. Alternate dark `#100f0f` panels with white and `#f3f1ed` bands.
2. Headlines Decimal 600 uppercase, 45px/60.0003px; body GothamSSm 15px/25.0001px.
3. Buttons: square, 12px uppercase, 50px or 38px high, fill `#201f1e` or `#3a3935`, white text.
4. Eyebrows and footer headings in `#b7a98e` with 1px to 1.2px tracking.
5. Spacing from 5, 10, 20, 30, 40, 60px; keep imagery full bleed.
6. Confirm any change with the measured values here, not the campaign photography.
