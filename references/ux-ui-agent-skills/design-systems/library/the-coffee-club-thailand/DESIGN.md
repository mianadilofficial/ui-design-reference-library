---
version: alpha
name: The Coffee Club
category: "Thai Brands"
description: The Coffee Club Thailand site - a light-grey (#f3f4f6) and white page with slate (#364153) body and near-black (#101828) Arial headings at 36px bold, orange (#f54a00) hover and divider accent, sand (#f0e6d2) footer, 8px-radius photo cards with a soft drop shadow.
colors:
  canvas: "#f3f4f6"
  page-body: "#ffffff"
  ink: "#364153"
  ink-strong: "#101828"
  ink-muted: "#4a5565"
  ink-faint: "#99a1af"
  primary: "#f54a00"
  nav-link-text: "#171717"
  surface-sand: "#f0e6d2"
typography:
  display:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
  display-mobile:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
  subheading:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  body:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32.5px
  nav:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
  s8: 48px
  s9: 80px
components:
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-strong}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1)
      0px 4px 6px -4px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  card:
    rounded: "{rounded.sm}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1)
      0px 4px 6px -4px
  footer:
    backgroundColor: "{colors.surface-sand}"
    textColor: "{colors.ink-muted}"
---

## Overview

The Coffee Club Thailand (thecoffeeclub.co.th) is the Thai-market site of the Australian all-day cafe group. The about page, which was opened, says the group opened in Brisbane in 1989 and describes itself as Australia's largest home-grown cafe group with approximately 400 stores in 9 countries. Its stated promise is "Good Food, Great Service and Excellent Coffee, in welcoming, relaxing surrounds". The site is English by default with a language switch (EN / TH) at the right of the header.

The homepage is a short, photograph-led menu showcase. A white header carries the black stencil-style "THE COFFEE CLUB" wordmark on the left and five uppercase links (MENU, MEMBERSHIP, STORE LOCATION, ABOUT, CAREERS) plus the EN / TH switch on the right. Under it is a rounded carousel: a plate of avocado and scrambled egg on toast on the left half and the line "A place where SIMPLE FOOD could PERFECTLY start the day" on the right, with the two emphasis phrases set in gold. Next come a centred uppercase h1 ("AUSTRALIA'S FAVOURITE ALL-DAY CAFE"), a "CHEF'S SPECIAL" feature with an orange rule under its heading, a four-by-two grid of menu categories (Breakfast & Brunch, Coffee, Non-Coffee Drinks, Healthy/Plant-Based, Burgers & Lunch Faves, Local Faves, Salads, Main Meals & Pastas), and a footer band inviting visitors to download the Free Rewards App (earn 1 point for every 25 Baht).

The voice is friendly and food-first; headings are short uppercase labels and body copy reads as a warm paragraph. Photography is bright, top-down and saturated, with each category shot on a different coloured surface.

## Colors

All values are from the extraction (text-colour characters and background areas), with the Tailwind variables in `rootVars` confirming the palette is utility-class based.

- **Canvas `#f3f4f6`**: the light-grey page background (area 1778) behind the intro and card sections.
- **Page body `#ffffff`**: the largest area (4687); header and the menu section.
- **Ink `#364153`**: most-read text (474 characters), the paragraph colour.
- **Ink strong `#101828`**: headings and links (294 characters).
- **Ink muted `#4a5565`**: footer text (92 characters).
- **Ink faint `#99a1af`**: a single measured character; the carousel and nav icon colour on mobile.
- **Nav link text `#171717`**: the nav role's colour.
- **Primary `#f54a00`**: the orange. It appears as the hover colour of the MENU link (oklch(0.646 0.222 41.116)) and as a measured background area (the underline under CHEF'S SPECIAL). The page has no filled call-to-action button, so primary is set from this measured accent instead of from a button fill.
- **Surface sand `#f0e6d2`**: the footer background; a second sand `#e6d5b8` was measured with the same area weight (72) and is not used in a token because its element was not identified.

Hover on MEMBERSHIP and STORE LOCATION darkens the link from oklch(0.373 0.034 259.733) to the near-black ink-strong. The gold used in the carousel headline is part of the slide artwork and was not extracted as a colour.

## Typography

One family: Arial with Helvetica and the generic sans-serif as fallback. No web fonts were loaded (`loadedFonts` is empty) and the extraction's character count shows Arial for all 863 characters. Weights by character are 400 (610), 600 (117), 700 (96) and 500 (40).

- **Display** (h1): 36px, 700, line-height 40px, uppercase copy in the capture; 30px / 36px on the 390px mobile pass.
- **Subheading**: 24px, 700, 32px line-height.
- **Body**: 20px, weight 400, line-height 32.5px, in ink `#364153`.
- **Nav**: 16px, weight 400, 24px line-height, uppercase labels.
- Other sizes measured by character: 18px (194), 14px (97), 16px (36), 12px (4).

Because Arial is a system font, no substitute is needed on common platforms.

## Layout

The page is 1280px wide and 2553px tall on desktop. Content sits in a centred container; the Tailwind variable `--container-6xl` is 72rem and `--spacing` is .25rem, so spacing runs in a 4px grid: 4, 8, 12, 16, 24, 32, 40, 48 and 80px were measured. The hero carousel and the feature row are two-column halves; the menu section is a four-column grid with a category label above each square image. Sections alternate between grey `#f3f4f6` and white bands; the footer closes the page in sand.

## Elevation & Depth

Depth is a single Tailwind-style soft shadow: `rgba(0,0,0,0.1) 0px 10px 15px -3px, rgba(0,0,0,0.1) 0px 4px 6px -4px`. It was measured on the nav (a faint line of shadow under the white header) and on the image cards. Nothing else casts a shadow, and the sand footer is flat.

## Shapes

Radii measured: 8px (10 elements), 4px (2) and a pill value (the extractor recorded 3.35544e+07px, five elements). The image cards use 8px. The carousel arrow buttons are round, and the EN language chip is a small rounded rectangle; the extractor did not record separate numbers for them beyond the radii listed.

## Components

- **Header / nav**: white background, shadow as above, uppercase 16px links in `#171717`; hover turns MENU orange and the other links to near-black.
- **Language switch**: EN highlighted in a dark chip, TH plain, separated by a slash.
- **Hero carousel**: 8px rounded frame, circular grey previous/next controls, headline with gold emphasis.
- **Feature row**: photograph with 8px radius and shadow beside a bold uppercase heading, a short orange rule and a paragraph at 20px.
- **Category cards**: label in uppercase bold above a shadowed 8px image.
- **Footer**: sand `#f0e6d2` background, `#4a5565` text, 56px-high legal row (Privacy Policy, Terms and conditions, copyright 2025); above it a "Download the Free Rewards App" band with four circular social icons.

There is no filled primary button, so no `button` token is declared.

## Design System Architecture

No public design system or brand guideline is published: the homepage links only to /about and the logo asset. The shipped CSS is Tailwind (variables such as `--spacing`, `--text-lg`, `--color-gray-900`, `--color-orange-600`, `--container-6xl` and `--tw-ring-shadow` were captured from the page root). The brand colours are therefore Tailwind palette steps: gray-900 `#101828`, orange-600 for the accent. Sources opened: https://www.thecoffeeclub.co.th and https://www.thecoffeeclub.co.th/about.

## Do's and Don'ts

- Do keep headings uppercase, bold Arial in `#101828` and body copy in `#364153` at 20px.
- Do alternate white and `#f3f4f6` bands and finish with the sand footer.
- Do use orange `#f54a00` sparingly, for hover states and short divider rules.
- Do round photographs at 8px and give them the soft shadow.
- Don't introduce a second typeface; none was loaded.
- Don't use the gold of the hero headline as a token; it was not measured.
- Don't treat the carousel arrows as primary buttons.
- Don't invent a filled call-to-action; the page has none.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 is 30px bold with 36px line-height (box 358px wide, 108px high), the h2 "OUR HIGHLIGHT MENUS" is also 30px / 36px, the body paragraph stays 20px with 32.5px line-height, and the nav is white with `#171717` text. Layout changes (grid columns, navigation pattern) were not measured.

## Iteration Guide

1. Begin from the tokens: canvas, page-body, ink, ink-strong, primary and the Arial scale.
2. Keep the imagery bright and top-down; copy stays short and uppercase for headings.
3. Add buttons only after measuring one on a live page; none exists on the homepage.
4. Re-run `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase3-thai.json --only=the-coffee-club-thailand --force` before changing any value, then `node web/scripts/verify-designs.mjs --slug=the-coffee-club-thailand`.
