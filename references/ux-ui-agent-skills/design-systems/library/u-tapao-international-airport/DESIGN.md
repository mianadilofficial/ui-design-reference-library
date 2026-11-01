---
version: alpha
name: "U-Tapao Rayong-Pattaya International Airport"
category: "Thai Brands"
description: "U-Tapao Rayong-Pattaya International Airport website: white canvas (#ffffff) with charcoal text (#222222), deep navy chrome (#010c44 and #000c46), a sky-blue accent (#38a2d2) for heading underlines, Prompt in 300 to 600 weights, and radii from 4px to 30px."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  surface: "#010c44"
  surface-3: "#000c46"
  ink-3: "#aaaaaa"
  ink-4: "#dddddd"
  ink-5: "#333333"
  primary: "#010c44"
  accent-blue: "#38a2d2"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 36.8px
  display-mobile:
    fontFamily: Prompt, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 23px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 18px
  link:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  button-secondary:
    fontFamily: Prompt, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 23px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 30px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3.94px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    padding: 5px 25px
    height: 37px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
---

## Overview

The U-Tapao airport site (https://www.utapao.com/, final URL https://www.utapao.com/en/home, title "U-Tapao Rayong-Pattaya International Airport") serves the airport near Rayong and Pattaya. The page opened with WebFetch confirms the site: the footer reads "Copyright © 2018 UTAPAO International Airport All rights reserved.", and the navigation reads "Flights", "Passenger Guide", "Public Transportation Service", "Shop and Dine" and "Airport Experience". The top of the page has a dark navy utility strip (white icons, search field, social icons and two pill tabs "Passenger" and "Corporate"), a white main bar with the airplane-tail logo and the five menu items, and a hero photograph of an airport apron with the heading "คำแนะนำผู้โดยสาร (Passenger Guide)" (Prompt 32px, weight 600, line height 36.8px, color #222222).

Below the hero a pale cloud-shaped band presents four service columns with outline pictograms and Prompt headings: "Arriving Passenger", "Departing Passenger", "Baggage Services" and "Public Transportation". Next comes "Travel Guide" with a short sky-blue underline accent and a "View All" link, then a carousel whose card pairs a photograph (a car-rental key hand-over) with a blue-to-violet gradient panel carrying Thai copy and a large grey "#Car Rental" tag; then "UTAPAO Story" over a line-drawn orbit with airplane silhouettes. Other headings listed by the page are "UTAPAO Attraction", "UTAPAO Update" and "AIRPORT SERVICES".

At capture time the home page shows a modal with three scanned certificates and a close button labelled "ปิด" over a dark scrim, and two floating round buttons at the right edge (a partner badge and a mail icon). These are overlays, not brand UI; the scrim color (#00000040) and the survey prompt measured as an h3 ("คุณมีความพึงพอใจกับการใช้บริการท่าอากาศย...") are not documented as tokens. The page is 4,848px tall at 1,280px.

## Colors

- **canvas `#ffffff`**: the main surface; **ink `#222222`**: the main text color; **ink-5 `#333333`**: secondary text and button label (the modal close hover keeps #333333); **ink-3 `#aaaaaa`** and **ink-4 `#dddddd`**: grey text tiers.
- **surface `#010c44`** and **surface-3 `#000c46`**: two close navies for the utility bar, the footer and dark panels. **primary `#010c44`** names the navy as the brand's chrome color; the generator had assigned white as primary, which is not a brand color.
- **accent-blue `#38a2d2`**: a sky blue measured as a background area, and visible as the underline under "Travel Guide" and "UTAPAO Story".
- Other background areas measured: #f8f8f8 and #f2f2f2 (light greys), #727377 (mid grey), #000000. The big violet-blue gradient panel in the capture has no single measured fill.

The stylesheet also contains Bootstrap root variables (`--primary: #007bff`, `--blue: #007bff`, `--indigo: #6610f2`, `--yellow: #ffc107`, `--green: #28a745`, `--pink: #e83e8c`, `--teal: #20c997`, `--danger: #dc3545`). They are framework defaults and none is tokenized.

By characters, text colors rank #ffffff, #222222, #aaaaaa, #dddddd and #333333.

## Typography

**Prompt** is the main face (300, 400, 500, 600), with **Kanit** (400) also loaded and a custom icon font `utapao`. Thai and Latin text share Prompt.

| Token | Size / line height | Weight | Where |
|---|---|---|---|
| display | 32px / 36.8px | 600 | page heading |
| display-mobile | 20px / 23px | 600 | measured at 390px |
| body | 14px / 18px | 300 | paragraph text |
| link | 16px / 18.4px | 400 | white links on photographs |
| button-secondary | 20px / 23px | 500 | "Highlights" outlined button |

The by-character size ranking is 16px, 14px, 20px, 29px, 24px, 22px, 32px, 18.4px and 12.8px. The line-height ratio is 1.15 for display, 1.2 to 1.3 for body, and letter spacing is `normal`. The service headings ("Arriving Passenger") are large Prompt headings in the capture; their exact sizes fall in the measured 29px or 24px sizes but were not individually recorded.

No font substitute is documented because Prompt and Kanit are loaded by the site.

## Layout

The container is 1,140px wide (the h1 block is 1,140px with 15px side padding). The Bootstrap breakpoint variables are `--breakpoint-sm: 576px`, `--breakpoint-md: 768px` and `--breakpoint-lg: 992px`. Measured paddings: 15px, 8px, 16px, 12px, 20px, 48px, 6px, 40px and 3.9375px; the only gap is 8px. The "Highlights" outlined button is 152px by 37px with 5px 25px padding. Service columns sit in a four-column row; the "Travel Guide" carousel has an image block and an overlapping blue panel; a footer on dark navy closes the page.

## Elevation & Depth

Shadows measured: `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px, rgba(0, 0, 0, 0.19) 0px 6px 20px 0px` (the modal and floating buttons), `rgb(119, 119, 119) 0px 10px 6px -6px` (a bottom-only shadow under a bar) and `rgba(108, 117, 125, 0) 0px 0px 0px 3.2px` (a transparent focus ring). The blue panel overlapping the carousel photograph is the page's main layering device, together with the pale cloud band under the hero.

## Shapes

Radii: 30px (8 elements), 4px (3), 100% (circles), 24px, 16px and 8px. Tokens: xs 4px, sm 8px, md 16px, lg 24px, xl 30px and pill 9999px. The floating round buttons and icon badges are circles; the top-bar pills and the modal use the larger radii; images and the carousel panel are square or lightly rounded.

## Components

**Outlined button** (`button-secondary`): transparent, 2px solid #222222 border, Prompt 20px/500, 152px by 37px, 5px 25px padding, 0px radius ("Highlights").

**Link**: white Prompt 16px/400 on hero imagery (the measured block is 285px by 269px).

**Modal close** ("ปิด"): white button that darkens to rgba(0, 0, 0, 0.067) on hover; it belongs to the overlay and is not a brand component.

**Navigation**: white bar with five items under a navy utility strip with "Passenger" and "Corporate" pill tabs.

**Footer**: navy; contains "UTAPAO", "Contact UTAPAO" and "FAQ Privacy Policy".

No filled primary button was detected on the page.

## Design System Architecture

No public design system or brand-guideline page was found: the site https://www.utapao.com/en/home (opened with WebFetch) lists no brand guidelines; its nearest link is a "Partner Us" page for commercial partners. The page uses a Bootstrap 4 stylesheet (29 root variables including `--primary: #007bff`, `--breakpoint-*`, `--font-family-sans-serif`, plus `--vh`) and a custom icon font. The brand navy, the sky blue and the Prompt face are applied in site CSS rather than through Bootstrap's variables.

## Do's and Don'ts

- Do use Prompt at 300 for body and 600 for headings.
- Do use navy #010c44 for chrome and sky blue #38a2d2 as a short underline accent under section titles.
- Do use white pictogram outlines on pale panels for service categories.
- Do keep modals and floating buttons separate from the brand component set.
- Don't use Bootstrap blue #007bff as the brand color.
- Don't document the dark scrim or the survey prompt as tokens.
- Don't add shadows beyond the measured modal, bar and ring shadows.

## Responsive Behavior

Measured at 390px: the heading is 20px / 23px at weight 600 (desktop 32px / 36.8px), body stays 14px / 18px, and the heading block is 390px wide. Mobile by-character sizes are 10px, 14px, 12px, 15px, 18.125px and 12.5px. The stylesheet declares Bootstrap breakpoints (576px, 768px and 992px); layout changes at those widths were not measured.

## Iteration Guide

1. Start with #ffffff, #222222 text and navy #010c44 chrome.
2. Add a short #38a2d2 underline under h-level titles.
3. Set headings in Prompt 600 and body in Prompt 300.
4. Use outlined square buttons with a 2px #222222 border.
5. Re-gate with `node web/scripts/verify-designs.mjs --slug=u-tapao-international-airport`.
