---
version: alpha
name: "Tyson Foods"
category: "Food & Beverage"
description: "Tyson Foods corporate home page: warm off-white sections (#fbf9f4, #f3ede0) with slate-grey text (#4a5157), a burgundy primary (#7f091c) on square 3px-bordered uppercase buttons, Sentinel serif headlines at 40px weight 300, Proxima Nova body at 16px, and a brand red (#c8102e) for links and hover."
colors:
  canvas: "#ffffff"
  page-largest: "#fbf9f4"
  ink: "#4a5157"
  primary: "#7f091c"
  on-primary: "#ffffff"
  surface-3: "#f3ede0"
  ink-4: "#1d252d"
  ink-5: "#c8102e"
typography:
  display:
    fontFamily: "\"Sentinel A\", \"Sentinel B\", serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 45px
  display-mobile:
    fontFamily: "\"Sentinel A\", \"Sentinel B\", serif"
    fontSize: 26px
    fontWeight: 300
    lineHeight: 33px
  body:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 13px
    fontWeight: 700
    lineHeight: 24px
    textTransform: uppercase
  nav:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 18px
rounded:
  xs: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2.4px
  s3: 6px
  s4: 7.5px
  s5: 10px
  s6: 14px
  s7: 15px
  s8: 20px
  s9: 24px
  s10: 35px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7.5px 45px
    height: 69px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7.5px 45px
    height: 69px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-5}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 40px
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

The Tyson Foods home page (https://www.tysonfoods.com/, title "Welcome To Tyson Foods", language `en`) is a warm, editorial corporate site. A thin utility row at the top right lists "Careers", "Investors", "News", "Contact Us" and "Search"; below it the white header (108px tall) holds the red oval Tyson Foods logo and the main menu in red serif type: "Who We Are", "Innovation", "Our Brands", "Sustainability", "The Feed Blog", "Shop Merchandise". The hero is a full-width family photograph with the white serif headline "Tyson Foods. We feed the world like family." and, along its bottom edge, a bright red scalloped-edge banner reading "WE ARE A WORLD-CLASS FOOD COMPANY AND RECOGNIZED LEADER IN PROTEIN" with an arrow.

Below, the h2 "Our Brands" (the measured heading role: Sentinel A, 40px, weight 300, burgundy #7f091c) introduces a carousel of brand logos led by a burgundy circle labelled "See All" (Tyson, Jimmy Dean, Hillshire Farm, Ball Park, Wright Brand, State Fair). Then come split sections that pair a photograph with an off-white card overlapping its corner: "The Future of Food" (with a burgundy button "OUR INNOVATIONS") and "Careers at Tyson". Further sections read "Company News" and "Recent Blog Posts" with date-led article cards. The footer carries "Privacy Policy", "Terms of Use", "Legal" and "Do Not Sell or Share My Personal Information" and a copyright line ("Copyright 2025 Tyson Foods, Inc." as read from the page).

The extraction measured 4,979px of page height at 1,280px width. Photography is warm, family-and-table focused; editorial typography is a serif for headings and a clean humanist sans for text.

## Colors

- **canvas `#ffffff`**: header and base.
- **page-largest `#fbf9f4`**: the largest background area, a warm off-white used for page bands.
- **surface-3 `#f3ede0`**: the cream used for the overlapping content cards (the measured card is 553px by 600px).
- **ink `#4a5157`**: the main slate-grey text color (most-read) and the nav label color.
- **ink-4 `#1d252d`**: near-black text.
- **primary `#7f091c`**: burgundy; the fill of the primary and secondary buttons, with a 3px solid #7f091c border, and the color of the "Our Brands" heading and the "See All" circle. **on-primary `#ffffff`** is the label color.
- **ink-5 `#c8102e`**: Tyson red, the text link color and the nav hover color (nav items "Careers", "Investors" and "News" change from rgb(74, 81, 87) to rgb(200, 16, 46) on hover).

Other background areas measured: #eaeaea (light grey). By characters the text colors rank #4a5157, #7f091c, #ffffff, #1d252d, #c8102e and #fbf9f4. No box shadows and no gradients were measured on interface elements.

## Typography

Two families: **Sentinel A** (with Sentinel B as the second face in the stack, serif) for headlines and **Proxima Nova** (400, 400 italic, 700) for text; the site also loads a custom icon font, `tysonfonts`, and Font Awesome 6 Brands.

| Token | Family | Size / line height | Weight | Notes |
|---|---|---|---|---|
| display | Sentinel A | 40px / 45px | 300 | "Our Brands" |
| display-mobile | Sentinel A | 26px / 33px | 300 | measured at 390px |
| body | Proxima Nova | 16px / 24px | 300 | slate #4a5157 |
| nav | Proxima Nova | 14px / 18px | 300 | menu labels; the header text itself measures 15px / 18px at 700 |
| button | Proxima Nova | 13px / 24px | 700 | uppercase |

The by-character size ranking is 16px, 18px, 15px, 20px, 32px, 13px, 19px, 14px and 12px. Buttons and the footer use 700 weight for emphasis; body copy is weight 300. Line height is 1.1 for display (45/40) and 1.5 for body (24/16). Letter spacing is `normal` throughout.

No font substitute is documented: Sentinel and Proxima Nova are loaded by the site, and no official source was opened.

## Layout

A centered column carries content on a 1,280px viewport; the "Our Brands" heading block is 778px wide, 85px high with 10px 0px 30px padding, and body paragraphs are 408px wide. The header is 1,280px by 108px. Photograph-and-card pairs overlap: the cream card (553px by 600px, 40px padding) sits across the lower-right corner of an image. A secondary article card measures 553px by 320px with 20px padding and a 1px solid #f3ede0 border. Padding values measured: 20px, 10px, 7.5px, 45px, 38.4px, 2.4px, 24px, 36px and 15px; no gap values were recorded. The spacing tokens run 1px to 35px. The footer is 1,280px by 243px with white text.

## Elevation & Depth

No box shadows were measured. Depth is made by overlapping a cream card on a photograph and by a scalloped red banner edge on the hero. Surfaces are otherwise flat.

## Shapes

Radii: 50% (27 elements: the "See All" circle, logos and icons) and 4px (3 elements: the cards). Everything else computes 0px, including the buttons and nav. Tokens: xs 4px, none 0px, pill 9999px. The button silhouette is a square rectangle with a 3px border in the fill color.

## Components

**Primary button** (`button-primary`): burgundy #7f091c fill, white label, Proxima Nova 13px/700 uppercase, 0px radius, 7.5px 45px padding, 69px high, 300px wide for the label "READ HOW WE'RE IMPROVING FOOD ACCESS" (a second, identical-style secondary button reads "BRING WHOLE GRAINS TO THE TABLE").

**Link**: #c8102e text, Proxima Nova 16px/300.

**Navigation**: white header, slate #4a5157 labels, 14px/300, red on hover.

**Cards**: cream #f3ede0, 4px radius, 40px padding, slate text.

**Footer**: white text on the footer background; the footer fill was not detected by the extractor.

The brand carousel (arrows, the burgundy "See All" circle) and the cookie notice ("Your privacy is important to us.") were visible in the capture; the cookie notice is not documented as a component.

## Design System Architecture

No public design system or brand guideline was found: the home page https://www.tysonfoods.com/ (opened with WebFetch) links no brand-asset material, and the nearest item, "Our Brands", links to individual brand sites. The page's custom properties are limited to five Font Awesome variables (`--fa-style-family-brands`, `--fa-style-family-classic`, `--fa-font-solid`, `--fa-font-regular`, `--fa-font-brands`), so the brand system is carried by ordinary class rules and by two typefaces and the custom icon font `tysonfonts`. All token values in this document come from measured elements.

## Do's and Don'ts

- Do set headlines in Sentinel at weight 300 in burgundy #7f091c and body text in Proxima Nova 300 in slate #4a5157.
- Do use square uppercase buttons with a 3px border in the fill color.
- Do use red #c8102e only for links and hover states.
- Do layer cream #f3ede0 cards over photographs.
- Don't round buttons; only cards (4px) and circles (50%) are rounded.
- Don't add shadows or gradients.
- Don't present the cookie notice as brand UI.

## Responsive Behavior

Measured at 390px: the heading is 26px / 33px at weight 300 (desktop 40px / 45px), body is 14px / 20px, and the button measured is 332px wide and 46px high with 10px 15px padding and 13px/700 text. The mobile by-character sizes are 14px, 16px, 18px, 13px, 12px and 26px. Menu form, column counts and breakpoints at mobile width were not measured.

## Iteration Guide

1. Start with #fbf9f4 and #ffffff surfaces and #4a5157 text.
2. Use #7f091c for headings and primary buttons, #c8102e for links.
3. Build cards in #f3ede0 with a 4px radius, overlapping photographs.
4. Use Sentinel 300 at 40px/45px for headings and Proxima Nova 300 at 16px/24px for text.
5. Re-gate with `node web/scripts/verify-designs.mjs --slug=tyson-foods`.
6. When adding a promotional band, remember the measured rules: uppercase 13px/700 labels, a 3px border equal to the fill, 45px horizontal padding, and no rounding. Keep photography warm and people-centred, as in the family-table hero, and let cream cards overlap the image rather than sit beside it.
