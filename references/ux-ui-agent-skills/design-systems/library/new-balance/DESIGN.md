---
version: alpha
name: New Balance
category: "Sports & Fitness"
description: "New Balance US store: ITC Garamond W01 light 60px headlines over Proxima Nova W01 300 body text, a #151415 top bar and 54px #151415 'Shop' buttons with 2px corners and white 14px labels, #000000 footer, #cf0a2c NB red reserved for the logo, #b36205 merchandising labels and a #fafafa legal strip."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#151415"
  on-primary: "#ffffff"
  primary-hover: "#343538"
  brand-red: "#cf0a2c"
  brand-red-hover: "#92071f"
  surface-legal: "#fafafa"
  surface-tab: "#efefef"
  ink-on-dark: "#e6e6e6"
  ink-muted: "#5c6268"
  label-orange: "#b36205"
typography:
  display:
    fontFamily: "\"ITC Garamond W01\""
    fontSize: 60px
    fontWeight: 300
    lineHeight: 68px
  display-mobile:
    fontFamily: "\"ITC Garamond W01\""
    fontSize: 48px
    fontWeight: 300
    lineHeight: 56px
  heading:
    fontFamily: "\"Proxima Nova W01\", -apple-system, \"system-ui\", \"Helvetica Neue\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: "\"Proxima Nova W01\", -apple-system, \"system-ui\", \"Helvetica Neue\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: "\"Proxima Nova W01\", -apple-system, \"system-ui\", \"Helvetica Neue\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 14px
    fontWeight: 300
    lineHeight: 20px
  tab:
    fontFamily: "\"Proxima Nova W01\", -apple-system, \"system-ui\", \"Helvetica Neue\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 6.4px
  lg: 20px
spacing:
  s1: 0.2px
  s2: 1px
  s3: 2px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 12px
  s9: 14px
  s10: 16px
  s11: 24px
  s12: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 12px
    height: 54px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    height: 54px
    borderColor: "{colors.primary}"
  tab:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.tab}"
    rounded: "{rounded.sm}"
    height: 40px
  utility-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    height: 57px
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 14px 21px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 16px 0px 0px
---

# New Balance

## Overview

The measured site is the New Balance US store at https://www.newbalance.com/ (title "Shoes, Sneakers, & Athletic Wear - New Balance"), captured at 1280px wide and 5,662px tall. The page reads like a quiet lifestyle magazine more than a sports retailer. It opens with a #151415 utility bar ("New season, steady miles. Shop now", country and language selectors), a white navigation row with the red NB logo and five top-level items (New, Men, Women, Kids, Sale), and a warm sand-coloured hero for "The 9060" with the line "Modern expressionism." and two black buttons, "Shop adults" and "Shop kids".

Below the hero the structure alternates between product rails on white ("Trending now" with Men / Women / Kids tabs, "Recommended for you") and pairs of large photographs with centred serif headlines underneath: "Low profile, elevated style." / "The 1080", "Introducing the 983", "Trackside Collection" / "The 950". Each headline gets a one-line caption that names an athlete or ambassador ("The 204L, worn by Rosalía.", "A new dimension. Worn by Coco Gauff.", "An instant classic. Worn by Cooper Flagg.") and one or two black buttons. Photography is studio-lit with soft neutral backdrops, or warm interiors; the product colour palette (cream, navy, brown, olive, grey suede) supplies all of the colour. The voice is understated and confident, with short declarative sentences and full stops.

## Colors

- **canvas #ffffff** — the page background and product-rail surface.
- **ink #000000** — the most-read text colour; headlines and product names.
- **primary #151415** — fill and border of every measured "Shop" button and the top utility bar; the site variable `--nb-color-black` is #151415. **on-primary #ffffff** is the label colour.
- **primary-hover #343538** — measured hover: "Shop adults" changes from rgb(21, 20, 21) to rgb(52, 53, 56).
- **brand-red #cf0a2c** — a measured background area and `--nb-color-primary` / `--primary` / `--danger` in shipped CSS. In the capture it appears as the NB logo; it is not used for buttons. **brand-red-hover #92071f** is `--nb-color-primary-hover`.
- **surface-legal #fafafa** — the bottom legal strip below the black footer (band at y 5440).
- **surface-tab #efefef** — background of the inactive Women / Kids tabs (hover measured as unchanged rgb(239, 239, 239)).
- **ink-on-dark #e6e6e6** — the footer's "Fearlessly Independent" headline and copy on black.
- **ink-muted #5c6268** — secondary product meta ("Unisex", "Men's", prices).
- **label-orange #b36205** — merchandising labels above product names ("Matching set" in the capture); it equals the `--orange` variable.

Photography areas measured as #f0dcc7 (the 9060 hero), #e2e2e4 and #dfdeda backdrops belong to images and are not UI tokens. Other Bootstrap variables present in CSS (`--blue` #0070d2, `--success` #12823b, `--yellow` #ffc107) were not measured as rendered on the page.

## Typography

Two families:

- **ITC Garamond W01** — the display serif, used for big product headlines. **display** is 60px / 300 / 68px ("The 9060", "Introducing the 983"); the 48px / 300 headlines ("The 1080", "Trackside Collection") use the same serif look in the capture. Only the 400 face is loaded, so the 300 weight renders from that file.
- **Proxima Nova W01** — the UI and body sans, loaded at 300, 400, 500 and 700, with a system fallback stack (`-apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, sans-serif`). **body** 16px / 300 / 24px; **button** 14px / 300 / 20px; **heading** 24px / 500 / 28px ("Trending now"); **tab** 14px / 500 / 24px. "Recommended for you" is 40px / 500 and the footer "Fearlessly Independent" is 32px / 500 in #e6e6e6.

The pairing is the signature: a light, bookish Garamond for product names and campaign lines against a light-weight 300 Proxima Nova for everything functional. No letter-spacing adjustments were measured. The site variables define a font-size ladder `--nb-font-size-01` to `-09` (10, 12, 14, 16, 18, 20, 24, 28, 32px) and weights `--nb-font-weight-01` to `-09` (100–900).

**Substitutes:** both families are commercial (Monotype web fonts). The sans has its own system fallback stack; for the serif, ITC Garamond is the face to license, and no fallback is declared in the measured CSS.

## Layout

At 1280px the content spans x 40 to x 1240 for the editorial pairs, so the page uses 40px side margins, while product rails bleed to the right edge with a carousel arrow. The header measured 21 visible links including the utility bar items. The hero is a two-column band (text block from x 32, image to the right) 648px tall. Editorial pairs are two equal full-bleed photographs (each 638px tall) followed by a white band with two centred headline blocks; single features ("Introducing the 983") centre one headline. Product rails show 5 cards with a sixth partly visible and a progress scrollbar below; up to 9 card columns were detected across the page.

The site spacing variables are `--nb-spacing-01` 2px through `--nb-spacing-11` 24px (2, 4, 6, 8, 10, 12, 14, 18, 20, 22, 24px). Measured gaps were 4, 8, 12 and 24px, and padding included 40px. The footer is #000000, 786px tall including its newsletter row, with four link columns (Help, Shop, About Us, For You) and a brand column; below it the #fafafa strip lists the New Balance family of brands (Brine, Warrior, team sports) and legal links.

## Elevation & Depth

No box-shadows were measured anywhere on the page. Depth is created by photography and by translucent overlays measured as #000000b3, #00000059 and #ffffff66 backgrounds, which sit over imagery for carousel controls and labels. Separation between sections is done by background change (white, #f1f1f1 product-image wells, black footer) rather than lines or shadows. The only border colour measured is #151415, on buttons.

## Shapes

Corners are barely rounded. Buttons use 2px (`xs`); the Men / Women / Kids tab uses 4px (`sm`); 6.4px and 20px radii were also measured (20px on small pill-shaped controls). Product images, photographs and the footer are square. Keep CTAs at 2px; never pill them.

## Components

- **button-primary** — #151415 fill and 1px #151415 border, #ffffff 14px/300 label, 2px radius, 16px 12px padding, 54px tall; hover #343538 with no other change.
- **button-light** — the newsletter "Sign up" button in the footer: #ffffff fill, #000000 text, 1px #151415 border, 2px radius, 54px tall.
- **tab** — segmented Men / Women / Kids selector above "Trending now": active tab #ffffff with 14px/500 text, 4px radius, 40px tall; inactive tabs sit on #efefef.
- **utility-bar** — 57px #151415 strip with white 14px text and a centred promo line with an underlined "Shop now" link.
- **nav-link** — 14px/300 #000000 on white, 14px 21px padding, 48px tall.
- **product card** — image on a light grey well, then an optional merchandising label in #b36205, product name in 14px #000000, gender in #5c6268, price.
- **footer** — #000000 with #ffffff 14px/300 links at 21px line height, padding 16px 0 0.

## Design System Architecture

New Balance does not publish a public web design system that could be opened for this document: https://www.newbalance.com/press-box/ returned HTTP 403 and corporate.newbalance.com does not resolve (both errors recorded in SOURCES.json), so there is no public documentation cited here. The shipped CSS on https://www.newbalance.com/ shows how the system is built: a Bootstrap 4 base (variables `--primary`, `--secondary`, `--danger`, `--breakpoint-sm` 544px, `--breakpoint-md` 769px, `--breakpoint-lg` 992px, `--breakpoint-xl` 1200px, `--breakpoint-xxl` 1920px) re-themed so that `--primary` and `--danger` are NB red #cf0a2c, plus an `--nb-*` token layer: `--nb-color-black` #151415, `--nb-color-primary` and `-primary-hover`, neutrals (`--nb-color-neutral-100` #f2f2f3, `-200` #dee0e1, `-400` #abb0b4, `--nb-color-gray` #737b82, `--nb-color-ada-gray` #767676), numbered spacing, font sizes and font weights. Rendered buttons use #151415 rather than the Bootstrap primary red, so component styling overrides the base theme.

## Do's and Don'ts

- Do pair ITC Garamond (light) for product and campaign headlines with Proxima Nova 300 for UI.
- Do keep buttons #151415 with white 14px/300 labels, 2px radius and 54px height.
- Do caption editorial images with a short sentence naming the wearer.
- Do keep NB red #cf0a2c for the logo and brand marks.
- Do use full-bleed image pairs followed by centred headline blocks.
- Don't make red buttons; no measured CTA is red.
- Don't use bold weights in body text; 300 is the measured default.
- Don't add shadows or heavy borders to cards.
- Don't round buttons beyond 2px.

## Responsive Behavior

The 390px mobile pass measured: the display headline at 48px / 300 / 56px (from 60px); body text unchanged at 16px / 300 / 24px; the primary button unchanged at 14px, 54px tall, 16px 12px padding, #151415 with white text. The mobile header is 118px tall on #ffffff below the 57px #151415 utility bar, with 15 header links detected and a visible "Toggle navigation" control. A 12.8px text size appears only on mobile. The mobile page ends with a 757px #000000 footer and a 398px #fafafa legal band. The stylesheet's main breakpoints are max-width 991.98px / min-width 992px, min-width 769px / max-width 768.98px and min-width 544px. The navigation menu's open state was not measured.

## Iteration Guide

1. Start on #ffffff with #000000 text in Proxima Nova W01 300.
2. Set campaign and product headlines in ITC Garamond W01 at 60px/68px (48px/56px on phones).
3. Use `button-primary` for every shop action; `button-light` on black backgrounds.
4. Keep a #151415 utility bar at the top and a #000000 footer with a #fafafa legal strip.
5. Space with the `--nb-spacing` ladder (2–24px) and 40px page margins.
6. Use #5c6268 for product meta, #b36205 for merchandising labels and #cf0a2c only for brand marks.
7. Write captions as short sentences with an athlete or ambassador name.
8. Re-measure before adding colours from campaign photography.
