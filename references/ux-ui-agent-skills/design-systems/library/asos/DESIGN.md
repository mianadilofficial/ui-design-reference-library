---
version: alpha
name: ASOS
category: "E-commerce & Retail"
description: "ASOS's home page is black-and-white fashion retail set entirely in futura-pt: white #ffffff page, #000000 header, tiles and footer, square-cornered (0px) white 'SHOP WOMENS' buttons in 16px Bold with 2px letter-spacing, a navy #051a6e app CTA, and a 19px-radius search field."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#051a6e"
  on-primary: "#ffffff"
  charcoal: "#1f1e1e"
  utility-bar: "#f8f8f8"
  ink-muted: "#666666"
  link-hover: "#0770cf"
  header-glass: "#2d2d2da6"
  input-text: "#2d2d2d"
typography:
  display:
    fontFamily: futura-pt, FuturaStd, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 21px
    letterSpacing: 2px
  heading:
    fontFamily: futura-pt, sans-serif
    fontSize: 14px
    fontWeight: 900
    letterSpacing: 0.6px
    textTransform: uppercase
  subheading:
    fontFamily: futura-pt, Tahoma, Geneva, Verdana, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.6px
  body:
    fontFamily: futura-pt, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 50px
    letterSpacing: 0.4px
  button:
    fontFamily: futura-pt, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 30px
    letterSpacing: 0.6px
  nav:
    fontFamily: futura-pt, Tahoma, Geneva, Verdana, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 0.4px
  input:
    fontFamily: futura-pt, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.4px
rounded:
  search: 19px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 9px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 30px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    padding: 9px 14px
    height: 44px
    borderColor: "{colors.canvas}"
  button-secondary-hover:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
    borderColor: "{colors.page-largest}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    borderColor: "{colors.ink}"
    height: 66px
  link-utility:
    textColor: "{colors.ink-muted}"
  link-utility-hover:
    textColor: "{colors.link-hover}"
  nav:
    backgroundColor: "{colors.header-glass}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.search}"
    padding: 0px 70px 0px 16px
    height: 38px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
---

# ASOS

## Overview

ASOS (www.asos.com, measured 2026-10 at 1280px; title "ASOS | Online Shopping for the Latest Clothes & Fashion", language en-GB) opens on a short gateway home page that splits shoppers by department before sending them into the catalogue. It is a monochrome, photography-led page: a light grey utility strip with a navy "Download our new app" button and "Help & FAQs", a black header bar with the white asos wordmark, WOMEN and MEN tabs, a rounded white search field ("Search for items and brands") and account, saved-items and bag icons.

The hero is a two-person fashion photograph split down the middle (a woman in a leopard coat on the left, a man in a camel suit and red cap on the right) with a giant white "asos" wordmark and the line "STYLE YOUR MOMENT" set inside the image, and two white rectangular buttons, "SHOP WOMENS" and "SHOP MENS". Below it a row of four solid black tiles carries uppercase service messages (NEW HERE? GET YOUR FIRST ORDER DISCOUNT, DOWNLOAD THE APP, WORLDWIDE DELIVERY, EASY RETURNS). "The biggest labels" introduces two four-up rows of brand photographs (adidas, Mango, ASOS Design, Topshop; adidas, New Balance, ASOS Design, Topman), each row closed by an outlined "SHOP WOMEN'S BRANDS" / "SHOP MEN'S BRANDS" button. A navy "DOWNLOAD THE APP" strip leads into a tall black footer with an oversized white wordmark.

The voice is short, uppercase and imperative. Imagery does the heavy lifting: large headlines such as "STYLE YOUR MOMENT" and "The biggest labels" are part of the artwork, not live text, so the largest live type on the page is the 16px button label.

## Colors

The palette is black, white and one navy.

- **Canvas `#ffffff`**: the page background behind the brand rows and buttons.
- **Black `#000000`**: covers the largest measured area (header bar, service tiles, footer) and is the dark text color (`ink`). The hover state of every white button flips to a black fill.
- **Navy `#051a6e`**: the only chromatic UI color, used on the "Download our new app" button in the utility strip and the full-width "DOWNLOAD THE APP" band. It is the detected primary CTA.
- **Charcoal `#1f1e1e`** (also a root variable) covers the second-largest area.
- **Utility grey `#f8f8f8`**: the 30px strip above the header.
- **Muted text `#666666`**: "Help & FAQs" and similar utility links, which turn **`#0770cf`** on hover.
- **Header glass `#2d2d2da6`**: a 65% `#2d2d2d` fill measured on the header element; `#2d2d2d` is also the search input text color.

White is the most-read text color (338 weighted characters) because most live text sits on black tiles and the footer. The root variables expose a larger hashed palette (for example `#d01345`, `#018849`, `#ff9c32`, `#6f5cff`) that the home page does not use on visible elements.

## Typography

Every measured character is **futura-pt**, loaded at 400 and 700, with `FuturaStd`, Helvetica, Arial (and on some elements Tahoma, Geneva, Verdana) as fallbacks. The page uses only three sizes, 14px (305 weighted characters), 16px and 12px, and four weights, 400, 600, 700 and 900.

- **Display (largest live text)**: hero buttons, futura-pt 16px / 21px Bold with 2px letter-spacing, uppercase in content.
- **Heading**: footer column titles (HELP & INFORMATION, ABOUT ASOS, MORE FROM ASOS) at 14px weight 900, uppercase, 0.6px tracking.
- **Running text**: 14px / 20px Regular, 0.6px tracking (footer lists, "Some of our international sites:").
- **Button**: the app CTA at 14px weight 600, 30px line height, 0.6px tracking.
- **Body / legal**: 12px Regular with 0.4px tracking; the copyright line measures a 50px line height because it is vertically centred in its bar.
- **Search input**: 16px Regular, 0.4px tracking.

Tracking is always positive: 0.4px to 0.8px on small text and 2px on the hero and service labels. Futura PT is a licensed typeface; a geometric sans such as Jost is the nearest free substitute, used only where Futura PT is unavailable.

## Layout

The desktop page is 1280px wide and only 2,960px tall. The header runs full width: a 30px `#f8f8f8` utility strip, then a 60px black bar. The hero is full-bleed (y 90 to 689 including the photo). Content rows are four columns of equal tiles that run edge to edge with narrow gutters; the extractor recorded a maximum of four card columns and gaps of 80px, 28px and 24px. Outlined buttons are centred in white bands between rows (content x 536 to 744). The navy app band spans x 16 to 1264 at 48px tall, and the footer is a four-column grid (x 27 to 1252) under a large wordmark. Measured paddings are small (5px, 32px, 16px, 9px, 14px, 24px), giving a tight, catalogue-like rhythm.

## Elevation & Depth

The page is flat. One shadow was measured on a visible element, `rgba(45, 45, 45, 0.14) -2px 2px 4px 0px`. Depth comes from photography and from the hard contrast between black tiles and white bands. The header uses the semi-transparent `#2d2d2da6` fill rather than a shadow. There are no cards with borders or elevation; brand tiles are bare photographs.

## Shapes

ASOS is square. Every button, tile, band and the footer computes to 0px radius. The two exceptions are the search field, whose radius is `19px / 50%` (a fully rounded capsule at its 38px height, recorded here as 19px), and 50% circles on 13 elements (flags and icon controls). Buttons use a 2px border, white on the hero buttons and black on the outlined brand buttons.

## Components

- **App CTA (primary)**: `#051a6e` fill, white futura-pt 14px weight 600 label, 30px tall, padding 0 16px, square corners.
- **Hero button**: white fill, black 16px Bold label with 2px tracking, 2px white border, 44px tall, padding 9px 14px. Hover inverts to a black fill, white label and black border.
- **Outlined brand button**: white fill, black two-line label, 2px black border, 66px tall; hover fills black with white text and a white border.
- **Service tile**: solid black square with centred white uppercase text, four in a row.
- **Brand tile**: full-bleed photograph with the partner logo in white over the image.
- **Search field**: white, 38px tall, capsule ends, padding 0 70px 0 16px for the magnifier, `#2d2d2d` text.
- **Header**: black bar, white wordmark, WOMEN/MEN tabs in uppercase, icons on the right.
- **Footer**: black, white 14px weight 900 uppercase column titles, 14px links, country flags, payment and social icons, legal row at 12px.

## Design System Architecture

No public ASOS design system or brand-guideline site was found: the ASOS GitHub organisation (https://github.com/ASOS) lists engineering repositories but no design-system or token package, and https://www.asos.com/about/ did not load for the fetcher (timeout). The shipped page shows a de-facto system built with CSS-in-JS: the 41 root custom properties have hashed names (`--1fot7dv: #000`, `--3pchel: #fff`, `--198t7lw: #1f1e1e`, `--11lcxa5: #2d2d2d`, `--1cf22is: #0770cf`) rather than semantic ones, and the stylesheet declares `futura-pt` and `FuturaStd` font faces. The system's rules are visible in the measurements: one typeface, three sizes, positive tracking, square corners and a black/white/navy palette.

## Do's and Don'ts

- Do keep everything square except the search capsule.
- Do set all text in futura-pt with positive tracking; use 2px tracking and uppercase for button and tile labels.
- Do let photography and partner logos carry the headlines; keep live type small.
- Do invert on hover: white buttons become black with white text.
- Do reserve navy `#051a6e` for app download prompts.
- Don't add shadows, gradients or rounded cards.
- Don't introduce extra accent colors from the hashed variable set on the home page.
- Don't use the browser's default blue focus outline as a brand color; focus styling was measured as the browser default only.

## Responsive Behavior

Measured at a 390px mobile viewport: the header is a 66px black band and the extractor recorded a visible menu toggle labelled "Open navigation menu" with four header links still visible. The hero photograph band is 512px tall. Brand rows show at most two card columns. The navy app band grows to 161px and the footer content runs from x 16 to 378. The most-read mobile size is 12px (then 14px and 16px), and the newsletter heading "HEAR ABOUT THE BEST OFFERS AND THE LATEST DROPS FIRST" measures 14px weight 900 uppercase. Breakpoints between 390px and 1280px were not measured.

## Iteration Guide

1. Start with the header: `#f8f8f8` utility strip with the navy app button, then the black bar with wordmark, WOMEN/MEN and the capsule search.
2. Place a full-bleed photographic hero with two white square buttons (16px Bold, 2px tracking, 44px tall).
3. Add a four-up row of black service tiles, then four-up brand photo rows with outlined black buttons.
4. Close with the navy app band and the black four-column footer.
5. Keep sizes to 12px, 14px and 16px and radii to 0px, except the search field.
6. Re-measure the category pages (/women/, /men/) before extending the system to product listings; they were not measured here.
