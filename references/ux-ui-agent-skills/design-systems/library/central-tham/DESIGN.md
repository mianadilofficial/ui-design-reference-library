---
version: alpha
name: Central Tham
category: "Thai Brands"
description: "Central Tham (centraltham.com) is Central Group's sustainability and community project site: white canvas, near-black #1c1916 bands and buttons, a leaf green #60a031 accent, the CPN typeface at 110px bold for the hero, 5px buttons and 20px photo cards."
colors:
  canvas: "#ffffff"
  page-largest: "#1c1916"
  ink: "#000000"
  primary: "#1c1916"
  on-primary: "#ffffff"
  accent-green: "#60a031"
  surface-mint: "#eff5ea"
  surface-grey: "#ebebec"
  ink-muted: "#bdbec0"
  ink-deep-green: "#13200a"
  hairline: "#828282"
  zero-waste-green: "#37b34a"
  zero-burning-blue: "#78a8d7"
  dark-blue: "#113d5d"
  green-800: "#234934"
typography:
  display:
    fontFamily: CPN, sans-serif
    fontSize: 110px
    fontWeight: 700
    lineHeight: 137.5px
  display-mobile:
    fontFamily: CPN, sans-serif
    fontSize: 50px
    fontWeight: 700
    lineHeight: 62.5px
  heading:
    fontFamily: CPN, sans-serif
    fontSize: 39px
    fontWeight: 700
    lineHeight: 58.5px
  body:
    fontFamily: CPN, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: CPN, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
rounded:
  xs: 2px
  sm: 3px
  md: 5px
  lg: 20px
  xl: 25px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 17px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 16px 24px
    height: 53px
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 16px 24px
    height: 53px
  nav:
    textColor: "{colors.canvas}"
    padding: 15px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    padding: 8px 48px 8px 44px
    height: 50px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 32px 16px
    boxShadow: rgba(0, 0, 0, 0.22) 0px 5px 10px 0px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
---

## Overview

Central Tham is "a project by Central Group that aims to encourage everyone to take part and take action in helping the society and creating a sustainable environment" (hero copy in the capture of https://www.centraltham.com/en/home, title "Central Tham", page language attribute `en`). The page is 1280px wide and 6035px tall. The top of the page is a full-bleed photographic hero (a group of smiling people around a tablet) with the white wordmark "CENTRAL THAM" (the second word is set in green), the menu Home, About Us, Projects, Success Stories, News and Updates, Contact Us, a "CENTRAL THAM MARKET" link with a cart icon and a green round search button. The oversized white headline "BETTER TOGETHER" is set at 110px bold.

Below the hero a white section carries a green all-caps statement, "TAKING ACTION TO CREATE SUSTAINABILITY", centered body copy and a huge pale-grey ghost wordmark "Better Together". Next comes "OUR WORK", a rounded near-black panel with three arrow rows (Our Projects in green, Our Success Stories, Social Enterprise) next to a horizontal carousel of photo cards (project titles such as "โครงการ Zero Burning Initiative" in Thai over the photo) with a "1 / 5" counter and a black round next arrow. A mint band follows with a map and "OUR IMPACT 2024", where a "150,000" figure is set in green. The voice is earnest, volunteer-oriented English with Thai project names.

A cookie card ("This website uses cookies for the purpose of improving the user experience", button "Allow cookies") appeared in the capture; it is a consent control and is not documented as brand UI. The Google Maps controls ("Map / Satellite") belong to an embedded third-party map and are likewise excluded.

## Colors

Measured background areas by weight: #1c1916 (2243), #eff5ea (2005), #ebebec (872), #ffffff (574), #e5e3df (454), then translucent whites (#ffffff4d, #ffffff69, #ffffff1a), #000000 (108) and #60a031 (2).

- **canvas #ffffff** is the page background; **page-largest #1c1916** is the largest opaque area (the "OUR WORK" panel, footer and buttons). It is also the CTA fill, so **primary #1c1916** with **on-primary #ffffff**.
- **ink #000000** is body text on light bands (682 characters weighted); white text dominates overall (2549 characters) because it sits on the hero and dark panels.
- **accent-green #60a031** is the leaf green: text on 160 characters, the hover color of nav links (measured rgb(96, 160, 49) on "CENTRAL THAM MARKET" and "About Us"). It matches `--green-500` in :root.
- **ink-deep-green #13200a** is a very dark green text color (117 characters), `--green-900`.
- **surface-mint #eff5ea** (`--green-100`) is the pale green band; **surface-grey #ebebec** is `--gray-300`.
- **ink-muted #bdbec0** (`--gray-400`) is the nav-text color on dark surfaces (the "About Us" link measured rgb(189, 190, 192)); **hairline #828282** is `--gray-500`.
- Program colors published as custom properties: **zero-waste-green #37b34a** (`--zero-waste-1`), **zero-burning-blue #78a8d7** (`--zero-burning-2`), **dark-blue #113d5d** (`--dark-blue`) and **green-800 #234934**.

Bootstrap defaults in :root (--primary #007bff, --warning, --info, --secondary) and the Swiper theme color #007aff are framework defaults and are not brand colors.

## Typography

The brand face is **CPN**, loaded in weights 300, 400, 500 and 700 (also loaded: Roboto 400/500, Font Awesome 6 Pro and an "icomoon" icon font). CPN is a proprietary face (the name is the shipped @font-face family; its foundry was not confirmed). The stack is `CPN, sans-serif`; Thai text renders in the same stack.

Measured sizes by character weight: 16px (1125), 19px (1121), 23px (426), 14px (425), 27px (211), 39px (191), 68px (120), 10px, 48px, 33px, 110px (15), 120px (15), 18px, 12px.

- **display**: 110px / 700 / 137.5px (hero "BETTER TOGETHER", set in a paragraph element, not an h1).
- **heading**: 39px / 700 / 58.5px ("OUR WORK").
- **body**: 16px / 400 / 24px.
- **button**: 14px / 700 / 21px.
- **display-mobile**: 50px / 700 / 62.5px, recorded by the mobile pass.

If CPN is unavailable, a substitute sans-serif with Thai coverage is required; a specific substitute was not verified.

## Layout

Bands alternate full-bleed photography, white sections with centered text, a rounded dark panel anchored to the left edge and a mint band. The "OUR WORK" panel is left-aligned with only its right corners rounded; the carousel of cards overlaps its right edge and runs off the page. The page uses a Bootstrap-style grid: `--hybrid-column-space: 15px`, and breakpoints md 768px, xl 1200px and xxl 1640px are published in :root. Spacing steps recorded: 1, 6, 8, 10, 12, 15, 16, 17, 24 and 30px.

## Elevation & Depth

Shadows measured: `rgba(0, 0, 0, 0.3) 0px 1px 4px -1px` (5), `rgba(0, 0, 0, 0.1) 0px 3px 15px 0px` (4), `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px` (3), `rgba(0, 0, 0, 0.03) 0px 3px 10px 0px` (2) and `rgba(0, 0, 0, 0.22) 0px 5px 10px 0px` (1, on the card). Most depth comes from color blocking: dark panel against white, mint against white. Translucent white fills (#ffffff4d) sit over the hero photo for controls.

## Shapes

Radii: 20px (40 occurrences, photo cards), 50% (14, circular icon buttons), 5px (8, text buttons), 2px (2), 3px (1), segmented 2px corners (2) and 25px (1). Buttons are only softly rounded at 5px while cards are generously rounded at 20px.

## Components

- **button-primary** ("Thamdee", "Find out more", "View All"): fill #1c1916, text #ffffff, 14px/700, radius 5px, padding 16px 24px, height 53px. Hover for these buttons was not measured; the cookie-consent button, which shares the 14px/700, 5px-radius, 53px-high style, went from #1c1916 to rgb(96, 160, 49) on hover.
- **button-outline** ("Find out more" on dark): fill #ffffff, text #1c1916, same size and radius.
- **nav-link**: 16px/400; white on the hero, #bdbec0 on dark panels; turns #60a031 on hover.
- **text-input**: fill #ffffff, 14px/700 text, padding 8px 48px 8px 44px, height 50px (measured by the extractor; its page location was not recorded).
- **card**: white fill, radius 20px, padding 32px 16px, shadow rgba(0, 0, 0, 0.22) 0px 5px 10px 0px; the project cards in the capture are full-photo with a white title overlay.
- **Carousel controls**: black round next button, "1 / 5" counter.
- **Footer**: #1c1916 with white text.

## Design System Architecture

No public Central Tham design system, brand guideline or token package was found; the home page markup contains no brand, design, press or guideline link. The shipped CSS publishes a real, named palette as :root custom properties (58 variables): green steps `--green-100` #EFF5EA through `--green-900` #13200A, `--light-green-100` to `--light-green-600`, gray steps `--gray-100` #FBF9F9 to `--gray-900` #181613 (with `--gray-800` #1C1916, the dark band color), program palettes `--zero-waste-1` #37B34A, `--zero-burning-1` #E0EDF6 and `--zero-burning-2` #78A8D7, `--dark-blue` #113D5D, `--dark-yellow` #CA9D2D and `--red-500` #ed1c25. It is layered on Bootstrap 4 variables (`--breakpoint-*`, `--font-family-sans-serif`) and Swiper (`--swiper-navigation-size: 44px`). Components use BEM-style class names (`menu__title--lv2`, `card__title`, `card__img`) observed in the home page markup.

## Do's and Don'ts

- Do use white and the #1c1916 near-black as the two main surfaces, with mint #eff5ea for soft bands.
- Do reserve #60a031 for emphasis, hover states and headline accents.
- Do set the hero at 110px / 700 CPN, all caps, white on photography.
- Do give photo cards a 20px radius and buttons a 5px radius.
- Don't use Bootstrap's #007bff or Swiper's #007aff as brand colors.
- Don't document the cookie card or the embedded map controls as brand components.
- Don't add a second typeface; CPN carries both Thai and Latin.

## Responsive Behavior

The extraction's mobile pass recorded: the hero text "BETTER TOGETHER" at 50px / 700 / 62.5px (against 110px on desktop), the "Thamdee" button unchanged (14px/700, fill #1c1916, radius 5px, padding 16px 24px, height 53px), and mobile font sizes by character weight of 16px (1094), 14px (406), 19.4562px (385), 27.3563px (373), 17.4813px (176), 24.3937px (137), 31.8px (44), 10px (41) and 18px (23). Published breakpoints are 768px, 1200px and 1640px. The mobile viewport width, menu pattern and column counts were not recorded: not measured.

## Iteration Guide

1. Start from the #ffffff canvas and #1c1916 panels; bring in #60a031 only for emphasis.
2. Keep display type in CPN 700 all caps; scale 110px to 50px as measured for small screens.
3. Reuse the 53px-high, 5px-radius button for every call to action.
4. Pull program colors (#37b34a, #78a8d7, #113d5d) from the published variables only for matching initiatives.
5. Dark mode is not measured.
6. Run `node web/scripts/verify-designs.mjs --slug=central-tham` after edits.
