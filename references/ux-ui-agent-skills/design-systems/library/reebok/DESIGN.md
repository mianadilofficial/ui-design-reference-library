---
version: alpha
name: Reebok
category: "Sports & Fitness"
description: "Reebok's official US site is a retail storefront: white canvas (#ffffff) with black ink (#000000) and black square buttons 66px high, Neue Plak Extended Bold uppercase headlines at 66px, Neue Plak Regular 14px body, a blue promo bar (#244496), amber (#ffaf04) accent glow, full-bleed campaign photography and 0px button corners."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-3: "#244496"
  ink-3: "#000000e6"
  ink-4: "#333333"
  ink-5: "#ffaf04"
  ink-6: "#0a2540"
  hairline: "#ffffff99"
  button-secondary-border: "#81232399"
  footer-border: "#e0e0e0"
typography:
  display:
    fontFamily: "\"Neue Plak Extended Bold\", Anton, Oswald, \"Arial Black\", Impact, sans-serif"
    fontSize: 66px
    fontWeight: 700
    lineHeight: 65px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Neue Plak Extended Bold\", Anton, Oswald, \"Arial Black\", Impact, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 30px
    textTransform: uppercase
  heading:
    fontFamily: "\"Neue Plak Extended Bold\", Anton, Oswald, \"Arial Black\", Impact, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 36px
  body:
    fontFamily: "\"Neue Plak Regular\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: "\"Neue Plak Regular\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18px
  link:
    fontFamily: "\"Neue Plak Regular\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 20px
  xl: 24px
  2xl: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 15px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 24px 48px
    height: 66px
    boxShadow: rgb(255, 255, 255) 0px 0px 10px 0px
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 24px 48px
    height: 68px
    borderColor: "{colors.button-secondary-border}"
    boxShadow: rgb(255, 255, 255) 0px 0px 20px 0px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink-3}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 8px 10px 8px 0px
    height: 37px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-3}"
    rounded: "{rounded.none}"
    padding: 28px 0px 0px
    borderColor: "{colors.footer-border}"
---

## Overview

The page title is "Reebok® Official Site | Life is Not a Spectator Sport" and the measured URL is https://www.reebok.com/. The home page is a campaign-led storefront. A blue promotional bar at the top carries shipping and offer messages with arrow controls; the white navigation bar below lists NEW, MEN, WOMEN, KIDS, CLASSICS, SPORT, GIFTS and other items, with search, account and cart icons; a full-bleed hero photograph carries a very large uppercase headline and a black "Shop Classics" button. The extraction recorded rotating hero stories (for example "BELMONT CAMELI RETURNS", "FREESTYLE FT. KAROL G", and in an earlier pass "REEBOK X AVATAR: MASTER THE ELEMENTS" and "STOP CHASING TRENDS"), so hero copy changes between visits.

Below the hero the page alternates between a large editorial image with a four-product grid, a limited-time savings band ("THE OCTOBER LOCK-IN", "Save up to 50% on training gear, running shoes & fashion essentials."), a row of five category tiles (TRAINING, RUNNING, CLASSICS, BASKETBALL, COLLABS) with white uppercase labels over photographs, and a product strip. The footer opens with "BE THE FIRST TO KNOW" and an e-mail sign-up.

A country-selection dialog ("Looks like you are visiting our site from Thailand. Would you like to visit our Reebok Thailand store?") and a heart and chat button cluster at the right edge appear in the capture; they are overlays and are not documented as brand components.

## Colors

- **Canvas:** `#ffffff`, the dominant background (area 9452 in the re-measured pass). The body element itself reports `#f0f0f0` in the first pass.
- **Ink / primary:** `#000000`; text weights in `#000000e6` (black at 90 percent alpha, 614 characters) are used for body and footer copy. `#333333` is a secondary text color. The primary button is a black fill with white text.
- **Promo blue `#244496`:** the top announcement bar (area 169).
- **Amber `#ffaf04`:** measured as text color on 85 characters and as a 10px glow `rgb(255, 175, 4) 0px 0px 10px 0px` on one element.
- **Navy `#0a2540`:** a dark text color on 13 characters.
- **Hairlines:** `#e0e0e0` is the footer top border; `#ffffff99` is the translucent border of secondary buttons over images; the secondary outlined button measures a border of `#81232399`.

The red of the Reebok vector logo and the retail product colors are artwork, not measured interface tokens. The `#00000033` grey area (1024) in the capture is the scrim of the country dialog and is excluded.

## Typography

- **Display (h1):** "Neue Plak Extended Bold", Anton, Oswald, "Arial Black", Impact, sans-serif; 66px, weight 700, line height 65px, uppercase; 30px on mobile (line height 30px).
- **Heading (h2):** the same family at 36px, line height 36px on desktop; 24px / 28px on mobile. (An earlier pass measured 60px / 59px and 56px / 56px headings, so campaign headlines range in size by slot.)
- **Subheading (h3):** 30px, weight 700, line height 30px ("BE THE FIRST TO KNOW").
- **Body:** "Neue Plak Regular", "Helvetica Neue", Helvetica, Arial, sans-serif; 14px, weight 400, line height 21px.
- **Button:** Neue Plak Regular 15px, weight 400, line height 18px; 13px on mobile.
- **Link:** 12px, weight 400, line height 18px.
- **Navigation:** 14px uppercase with letter spacing 0.3675px.

Neue Plak Regular accounts for 2329 characters, Neue Plak Extended Bold 196. The CSS corpus lists many other faces from storefront widgets and campaign pages (Inter, Poppins, Roboto, Oswald, DIN OT, Avenir LT Standard, Didot, Garage Gothic Bold, Arapey, Instrument Sans). Neue Plak is a commercial typeface; Anton, Oswald, Arial Black and Impact are the declared fallbacks for the display face.

## Layout

The desktop pass is 1280px wide and 3338px tall. The header is 59px high. The hero is full-bleed with text anchored at the left; the next band is a two-part module: a tall editorial image at the left and a two-by-two grid of product cards at the right, each card with a pale grey image field, a name ("Women's Freestyle Lo Shoes"), a price ("$75") in the first pass, a blue offer line and a gender and category label. Category tiles are five equal portrait images with centered uppercase labels. The footer block is 406px high with a 1px top border `#e0e0e0` and padding `28px 0px 0px`.

Gaps: 5px, 30px, 4px, 42px. Paddings: 2px (25), 25px (16), 20px (12), 4px, 8px, 10px, 45px, and 303.484px (five elements, centering padding of full-width sections).

## Elevation & Depth

Shadows are small in number. Measured: `rgba(0, 0, 0, 0.1) 0px 3px 10px 0px` (4), a Material-style stack `rgba(0, 0, 0, 0.14) 0px 2px 2px 0px, rgba(0, 0, 0, 0.2) 0px 3px 1px -2px, rgba(0, 0, 0, 0.12) 0px 1px 5px 0px` (2), a blue-tinted `rgba(8, 19, 79, 0.16) 0px 4px 13.333px 0px`, white glows on buttons over photography (`rgb(255, 255, 255) 0px 0px 10px 0px` on the primary button and `0px 0px 20px 0px` on the secondary), `rgba(0, 0, 0, 0.5) 0px 5px 15px 0px` and a popover shadow variable `--atlas-popover-shadow`. Text over photographs carries a soft shadow in the capture. Most depth is photographic.

## Shapes

Radii measured: 24px (4 elements), 50% (3), 50px (2), 3px (2), and one each of 20px, 4px and `2px 2px 0px 0px`. Primary and secondary buttons have a 0px radius. The text input uses 3px. Circular floating buttons use 50%.

## Components

- **Primary button ("Shop Classics"):** `#000000` fill, white text, Neue Plak Regular 15px, padding `24px 48px`, height 66px, width 220px, radius 0px, white glow shadow.
- **Secondary button ("Set a Reminder", "Shop the Collection"):** transparent fill with a 1px translucent border, white text on the hero image, same padding, height 68px.
- **Text link:** 12px, for example "SHOP REEBOK x AVATAR".
- **Navigation:** white bar, 14px uppercase black labels, 0.3675px tracking.
- **Text input:** `#000000e6` text, radius 3px, padding `8px 10px 8px 0px`, height 37px, width 389px.
- **Footer:** white, `#000000e6` text, Neue Plak Extended Bold 30px heading.
- **Category tile:** photograph with a centered white uppercase label.

## Design System Architecture

No public Reebok design-system documentation was opened. Evidence in the CSS shows several layers: root variables named `--GT-H4-LINE-HEIGHT-DESK` (28px), `--GT-H6-LINE-HEIGHT-DESK` (22px), `--GT-P-SMALL-BOLD-LINE-HEIGHT-DESK` (18px) and `--GT-P-SMALL-FONT-SIZE-MOBL` (11px) form a typographic scale; `--atlas-*` variables (`--atlas-space-small: 12px`, `--atlas-button-icon-size-tiny: 24px`, `--atlas-popover-shadow`) come from a component library; `--space-7: 48px` is a spacing step; header variables such as `--HEADER-BUTTON-ICON-WIDTH-DESKTOP: 18px` and `--HEADER-DROPDOWN-PANEL-TOP-PADDING: 12px` configure the header; Tailwind ring variables and a reviews widget (`--kl-reviews-*`) are also present. Measurements come from `web/data/extracted/reebok.json` for https://www.reebok.com/.

## Do's and Don'ts

- Do use black `#000000` square buttons, 66px high, with generous padding `24px 48px`.
- Do set campaign headlines in Neue Plak Extended Bold, uppercase, with line height equal to font size.
- Do use full-bleed photography and let white labels sit over it.
- Do keep the interface white and black; reserve blue `#244496` for the promotional bar.
- Don't round primary buttons; the measured radius is 0px.
- Don't document the country selector, heart button or chat bubble as brand UI.
- Don't use the scrim grey `#00000033` as a design color.
- Don't add colors for products; product imagery carries its own color.

## Responsive Behavior

The 390px pass measured: h1 30px with line height 30px, uppercase, 275px wide; h2 24px with line height 28px; the "Shop Classics" button 220px wide, 56px high with padding `18.96px 48px` and 13px text; the header block 57px high and showing "Search", "Cart" and "(0)". The mobile menu pattern, product-grid columns and tile layout were not measured.

## Iteration Guide

1. White canvas, black ink, black primary button 66px high.
2. Extended bold uppercase headlines at 66px (hero) and 36px (secondary), line height equal to size.
3. 14px / 21px Neue Plak Regular body; 15px buttons; 14px uppercase nav with 0.3675px tracking.
4. Compose pages from full-bleed hero, editorial-plus-grid module, savings band, five category tiles, product strip.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=reebok --force --no-motion`, then `node web/scripts/generate-frontmatter.mjs --slug=reebok` and `node web/scripts/verify-designs.mjs --slug=reebok`.
