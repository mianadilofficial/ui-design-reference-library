---
version: alpha
name: "GWM Thailand (Great Wall Motors)"
category: "Thai Brands"
description: "GWM Thailand English home page measured live: black #000000 buttons with 3px radius and red #d7000f arrow accents on white and #f2f2f7, GWMSans from 900-weight 56px headlines to 14px specification text, and 16px-radius cards."
colors:
  accent-red: "#d7000f"
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-band: "#f2f2f7"
  ink-3: "#636366"
  ink-4: "#48484a"
  hairline: "#d1d1d6"
typography:
  display:
    fontFamily: GWMSans, Helvetica, Arial, sans-serif, system-ui
    fontSize: 56px
    fontWeight: 900
    lineHeight: 56px
  display-mobile:
    fontFamily: GWMSans, Helvetica, Arial, sans-serif, system-ui
    fontSize: 32px
    fontWeight: 900
    lineHeight: 32px
  heading:
    fontFamily: GWMSans, Helvetica, Arial, sans-serif, system-ui
    fontSize: 32px
    fontWeight: 700
    lineHeight: 32px
  body:
    fontFamily: GWMSans, Helvetica, Arial, sans-serif, system-ui
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: GWMSans, Helvetica, Arial, sans-serif, system-ui
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  nav:
    fontFamily: GWMSans, Helvetica, Arial, sans-serif, system-ui
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23.52px
rounded:
  xs: 1px
  sm: 3px
  md: 4px
  lg: 8px
  xl: 16px
  2xl: 32px
  pill: 9999px
spacing:
  s1: 8px
  s2: 10px
  s3: 12px
  s4: 16px
  s5: 19.5px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 56px
  s10: 120px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 12px 12px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 12px 12px 24px
    height: 48px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 12px 12px 24px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 0px 0px 0px 32px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

# GWM Thailand (Great Wall Motors)

## Overview

The measured page is gwm.co.th/en, titled "GWM Thailand - Home", the English home page of Great Wall Motor's Thailand business. It is an automotive showroom page in black, white and soft grey. A full-width, slow-changing hero shows one model on a landscape photo background (in the capture, the WEY G9 with the line "THE CRAFTED MASTERPIECE", a price and two black buttons "Order Now" and "Test Drive"), a pause control and red progress segments. Under it a grey "OUR MODELS" section presents one model at a time (the GWM ORA 5 EV with "REDEFINE YOUR NEW ERA") with a tab strip of model names, then a rounded full-width service image tile ("GWM Services", "Discover more"), a "How can we help you?" row of three outlined shortcut tiles (Test Drive, Dealers, Financial), and further dark sections. The extracted page height is 5522px at a 1280px viewport.

The fetched page lists the navigation as Models (WEY, TANK, ORA, HAVAL, POER), GWM Services, APP, Partner Stores, GWM Brand, Hi4, FAQ, News, Certified Pre-Owned, Fleet Sales and Test Drive, with a Thai-language toggle and the phone number 02-668-8888. Copy is short, bold and aspirational ("Power Beyond Limits", "Redefine Your New Era", "The Crafted Masterpiece") with specification lines in sentence case ("Powered by a 58.3 kWh battery and a high-efficiency 15-in-1 e-drive system, delivering up to 520 km (NEDC)").

Design-wise the interface stays out of the way of the cars. Car photography is the color source; the UI is black, white and neutral greys with one small red used for arrows, progress segments and a tab underline. Type is a single heavy-weight sans in uppercase for headings. The capture also shows a cookie-settings circle and two floating icon buttons at the edge of the hero; these are utility widgets and are not documented as brand components.

## Colors

- `canvas` #ffffff is the page background; `surface-band` #f2f2f7 is the cool light grey of the "OUR MODELS" band (measured area 1244, second only to white); #f3f3f1 is a warm grey also measured as a section fill.
- `ink` #000000 is the text color and `primary` #000000 the button fill; `on-primary` #ffffff is the label on it. `ink-3` #636366 and `ink-4` #48484a are secondary text greys.
- `hairline` #d1d1d6 is the 1px border of outlined tiles and dividers; #3a3a3c is a dark grey used on the dark sections.
- `accent-red` #d7000f is the red of the arrows, progress segments and active tab underline (measured as a background color in the extraction).

Black is the action color: every measured button is black on white or white on black. Red is an accent, not a fill for large areas.

## Typography

One family, GWMSans, loaded in weights 400, 500, 700, 800 and 900 (plus a 400 italic), with Helvetica, Arial and system-ui fallbacks. Weight carries hierarchy.

- `display` 56px weight 900, line height 56px (`display-mobile` 32px, line height 32px); headings are uppercase in the capture.
- `heading` 32px weight 700, line height 32px.
- `body` 14px weight 400, line height 20px (the most used size by character count: 14px at 1760).
- `button` 14px weight 700, line height 20px.
- `nav` 16px weight 400, line height 23.52px.

The measured size set is 14, 12, 16, 32, 24, 56, 26, 18 and 112px; 112px is the oversized "OUR MODELS" style. Weight 400 and 700 dominate (1787 and 1096 characters), with 900 for hero headings and 800 for model names. Text is set small and dense for specification copy. GWMSans is proprietary; use a wide industrial sans with a black weight as a substitute.

## Layout

Content sits in a wide container; the hero is full-bleed with text anchored top-left and the car filling the right. The model section is a text column at left with the car image centered beneath, followed by a six-tab strip (GWM ORA 5 EV, GWM TANK 500 DIESEL, GWM TANK 300 DIESEL, NEW HAVAL H6, GWM WEY G9, POER SAHAR DIESEL) with a black underline on the active tab. Service shortcuts are an equal three-column row.

The spacing scale is 8, 10, 12, 16, 19.5, 20, 24, 32, 56 and 120px (`s1`-`s10`). Buttons use padding 12px 12px 12px 24px (the left padding makes room for the trailing arrow icon) at height 48px; cards use 32px left padding.

## Elevation & Depth

One shadow was measured, a Material-style three-layer shadow: `rgba(0, 0, 0, 0.2) 0px 3px 5px -1px, rgba(0, 0, 0, 0.14) 0px 6px 10px 0px, rgba(0, 0, 0, 0.12) 0px 1px 18px 0px`, used once. Everything else is flat: depth comes from the white versus grey bands, 1px `hairline` borders on outlined tiles, and photography. Page-level scrims on the hero are image-based.

## Shapes

The radius scale is `xs` 1px, `sm` 3px, `md` 4px, `lg` 8px, `xl` 16px, `2xl` 32px and `pill` 9999px, with 50% for circular controls. Buttons are nearly square at 3px; the service tile image and cards are rounded at 16px (and 32px for the large image tile); circular icons use 50%. The 3px button radius, used 16 times, is the most frequent value.

## Components

- **button-primary**: fill `ink` (#000000), text `canvas`, GWMSans 14px/700 (uppercase in the capture), padding 12px 12px 12px 24px, height 48px, radius 3px, with a trailing red diagonal arrow ("Order Now", "Test Drive", "EXPLORE GWM ORA 5 EV").
- **button-secondary**: identical measurement; in the capture the "Discover more" variant is white with black text.
- **link**: fill `canvas`, text `ink`, button type, radius 3px, same padding.
- **card**: fill `canvas`, text `ink`, radius 16px, left padding 32px.
- **Shortcut tile**: white tile with a 1px `hairline` border, an icon, a bold label and a red arrow at the right.
- **footer**: fill `ink`, text `canvas`.

## Design System Architecture

No public brand-guideline or design-system page is linked from the home page: the fetch found links only to the Privacy Policy, GWM Global, the GWM Brand story page ("Our Story") and the partner registration form. The shipped CSS has only two root custom properties, both Swiper library defaults (`--swiper-theme-color` #007aff, `--swiper-navigation-size` 44px), so the system lives in compiled component styles; Swiper's blue is not a brand color. The values in this document are measurements of the live page.

## Do's and Don'ts

Do:
- Use black buttons with a trailing red arrow; keep corners at 3px.
- Set headings in GWMSans 900 uppercase and specifications at 14px.
- Alternate white and `surface-band` bands and let car photography provide color.
- Use red only for arrows, progress and active-tab underlines.

Don't:
- Use Swiper's #007aff or other library defaults.
- Document the cookie-settings circle or floating icon buttons as brand components.
- Round buttons into pills; the measured radius is 3px.

## Responsive Behavior

Measured at the mobile viewport: the h1 is 32px with line height 32px (versus 56px desktop) and body text is 16px (versus 14px on desktop). Other mobile behavior (navigation collapse, tab strip) was not measured.

## Iteration Guide

1. Start with a full-bleed hero, black 48px-high buttons with red arrows.
2. Add a `surface-band` model band with a tab strip and a black active underline.
3. Use 16px-radius cards and outlined shortcut tiles.
4. Keep color to black, white, greys and the red accent.
5. Verify type is GWMSans only, with weight 900 for hero headlines.
