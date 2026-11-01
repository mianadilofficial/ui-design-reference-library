---
version: alpha
name: GEICO
category: "Banking & Insurance"
description: "GEICO (geico.com) is an insurance storefront set in GEICO Roobert (72.8px weight 600 hero, 17.6px body) with action blue #026df1 100px-radius pill buttons, navy #062342 text, cream #f6f5ee bands with 15.2px-radius cards, a deep-blue #004894 panel and a lime #c8f547 accent."
colors:
  canvas: "#ffffff"
  page-largest: "#f6f5ee"
  ink: "#062342"
  primary: "#026df1"
  on-primary: "#fdfdfc"
  surface-navy: "#004894"
  surface-blue: "#0057c2"
  ink-black: "#000000"
  accent-lime: "#c8f547"
  hairline: "#0c488380"
  text-input-bg: "#ffffff0d"
  text-input-border: "#ffffffbf"
typography:
  display:
    fontFamily: "\"GEICO Roobert\", sans-serif"
    fontSize: 72.8px
    fontWeight: 600
    lineHeight: 80.08px
  display-mobile:
    fontFamily: "\"GEICO Roobert\", sans-serif"
    fontSize: 44px
    fontWeight: 600
    lineHeight: 48.4px
  heading:
    fontFamily: "\"GEICO Roobert\", sans-serif"
    fontSize: 27.046px
    fontWeight: 700
    lineHeight: 32.4552px
  body:
    fontFamily: "\"GEICO Roobert\", sans-serif"
    fontSize: 17.6px
    fontWeight: 400
    lineHeight: 28.16px
  button:
    fontFamily: "\"GEICO Roobert\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    textTransform: capitalize
  input:
    fontFamily: "\"GEICO Roobert\", sans-serif"
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 7.2px
  sm: 8px
  md: 15.2px
  lg: 22.4px
  xl: 28.8px
  2xl: 30.4px
  3xl: 100px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 11.2px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 22.4px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.surface-blue}"
  button-secondary:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 11.2px 16px
    height: 67px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 16px
    borderColor: "{colors.ink}"
  nav:
    textColor: "{colors.on-primary}"
  nav-link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 16px
    borderColor: "{colors.ink}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 0px 40px 2px
    height: 48px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 28.8px 22.4px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 57.6px 57.6958px
---

## Overview

The GEICO home page (https://www.geico.com/, title "An Insurance Company For Your Car And More | GEICO", measured at 1280px wide with a 6949px scroll height) is a friendly, bright insurance storefront. A translucent blue header (80px) carries the white GEICO wordmark, uppercase 14px menu items (PRODUCTS, CLAIMS CENTER, RESOURCE CENTER), an "ES" language switch and a pill-shaped outlined "Log In" button. The hero is a saturated blue panel with the small eyebrow "WELCOME TO GEICO", a white 72.8px headline "Coverage That Grows With You" in which the word "You" is lime, and a rounded family photograph at the right with a lime strip beneath it. The cream `{colors.page-largest}` band that follows holds "Save when you bundle." with a "BEST VALUE" tag, a "Build My Bundle" blue pill button, the green Gecko mascot, and "Get a quote today." with tabs (Popular, Vehicle, Property, Personal, Commercial) and a grid of white outlined product buttons (Car, Renters, Motorcycle, Boat & PWC, Commercial Auto/Business) plus "Find An Agent Near You" and "Continue Previous Quote".

Further down: "Savings you expect. Protection you can trust." beside a rounded photograph with a blue dotted pattern, a deep-blue "Car insurance coverage by state" panel with a lime US map and a state selector, and "Why Choose GEICO". A virtual-assistant bubble appears over the quote tabs in the capture; it is a chat widget and is not documented as brand UI. The voice is reassuring and direct, with title-case calls to action ("Get A Quote", "Go To State Guide").

## Colors

`{colors.primary}` (#026df1) is the action blue: the "Build My Bundle" and "Get A Quote" fills, links in body text, the active tab underline and eyebrow tags; on hover buttons move to `{colors.surface-blue}` (#0057c2, measured as a hover fill) and the outlined product buttons fill blue with white text. `{colors.on-primary}` (#fdfdfc) is the near-white used for text on blue and for button fills. `{colors.ink}` (#062342) is the deep navy for 4107 characters, headings, body and outlined button text. `{colors.surface-navy}` (#004894, 1131 area) is the deep-blue panel; `{colors.page-largest}` (#f6f5ee, 3063 area) is the warm cream page band and card fill; `#9ad4f2` (155) and `#cce3ff` (5) are light-blue accents; `#062342` is also a button fill (9).

`{colors.accent-lime}` (#c8f547) highlights the word "You" and the map graphic (measured on 3 characters of text). `{colors.ink-black}` (#000000) is used on 28 characters. Hairlines: `{colors.hairline}` (#0c488380) is the 1px border of product buttons; text-input fill is `{colors.text-input-bg}` (#ffffff0d) with a `{colors.text-input-border}` (#ffffffbf) border on the state select. Other borders: #062342, #fdfdfc, #358ffd, #19afff33, #026df1.

## Typography

GEICO Roobert is the only family (4916 characters), loaded at weights 400, 500, 600 and 700; it is proprietary, with a generic sans-serif fallback, and a geometric rounded grotesque similar to Roobert is the closest substitute. By characters: 400 (3827), 600 (739), 700 (264), 500 (86). Scale: display 72.8px/80.08px weight 600 (hero), 44px/48.4px on mobile, heading 27.046px/32.4552px weight 700 ("Save when you bundle."), body 17.6px/28.16px, 16px for buttons and inputs, with 12px (845 characters, footer legal), 13.6px (145), 22.5704px, 22.8px, 40.8px, 100.8px and 18px also used. Buttons use `text-transform: capitalize` at weight 600. Uppercase eyebrow labels and menu items use letter spacing from 1px to 2.24px (for example 14px with 1px and 13.6px with 1.36px).

## Layout

The header is 80px high on desktop and 72px on mobile. Content blocks alternate full-bleed bands (blue hero, cream quote area, white feature row, a deep-blue rounded panel) with a two-column split of text and image. Measured gaps: 8px (64), 16px (36), 22.4px (26), 11.2px (22), 44.8px (17), 57.6px (14), 20px, 24px, 28.8px and others; paddings 22.4px, 16px, 11.2px, 28.8px and 57.6px, with the footer at 57.6px 57.6958px and 879px tall. The quote grid is two columns of product buttons 283px wide and 67px high.

## Imagery and Brand Characters

Photography shows real families and everyday moments around vehicles: loading a car boot for a trip, unpacking luggage from an SUV, children and parents laughing. Images are cropped in rounded rectangles that break out of their bands. The brand's green Gecko mascot appears as a cut-out figure standing in the cream quote band, pointing toward the quote tabs, and gives the page its personality without any additional illustration. Small line icons in blue (a car, a building for renters, a motorcycle, a boat, a van) sit left of each product label. A lime map of the United States on navy is the one graphic infographic element; it sits next to a state selector and a "Go To State Guide" button. Testimonial cards quote customers in first person ("You guys are the best.").

## Elevation & Depth

No box shadows were measured. Depth comes from colour blocks (blue hero, navy panel against cream), rounded photographs that overlap band edges, a lime strip under the hero image, and a dotted blue pattern bleeding off a photo. The state card is a flat rounded panel.

## Shapes

Radii are generous: 15.2px for product buttons and cards (31 elements), 100px for pill buttons (14), 22.4px, 28.8px and 7.2px/8px for inputs and small tags, and compound radii such as `0px 30.4px 30.4px 0px` and `30.4px 0px 0px 30.4px` on segmented controls and photographs. Photographs have one or two rounded corners in the capture.

## Components

- Primary pill button: #026df1 fill, #fdfdfc text, 16px weight 600 capitalized, 100px radius, 0px 16px padding, 48px high ("Build My Bundle", 151px wide).
- Outlined pill ("Log In"): transparent, 1px #fdfdfc border, 100px radius, 48px high, 107px wide.
- Product button ("Car", "Renters"): #fdfdfc fill, #062342 text, 1px #0c488380 border, 15.2px radius, 11.2px 16px padding, 67px high; on hover it fills #026df1 with white text and a navy border.
- Navy pill link: #062342 fill, 100px radius, 48px high.
- State select: translucent white fill, 1px #ffffffbf border, 8px radius, 48px high, 0px 40px 2px padding.
- Testimonial card: #f6f5ee, 15.2px radius, 28.8px 22.4px padding, 330px wide and 440px high.
- Tabs: uppercase labels with an underline in #026df1 on the active tab.

## Design System Architecture

No public design-system page was opened. Shipped CSS exposes a component-token layer with names such as `--tab-color` (#062342), `--tab-active-border-color` (#026df1), `--button-secondary-neutral-dark-color` (#fdfdfc), `--footer-links-text-color` (#fdfdfc), `--rich-text-quotes` and `--exclusive-agent-card-border-color`, plus palette names like `--color-clear-skies-300` (#c2e5f7) and `--color-black-500` built with `color-mix`. Tailwind variables (`--tw-inset-shadow-alpha`) indicate a utility-class layer. Values here come from rendered elements, not from those variables.

## Do's and Don'ts

- Do use #026df1 for the main action, with 100px pill radii and capitalised 600-weight labels.
- Do set headings in GEICO Roobert 600 to 700 in navy #062342.
- Do use the lime #c8f547 sparingly for emphasis on one word or a graphic.
- Do use cream #f6f5ee for content bands and cards with 15.2px radii.
- Don't introduce shadows; none were measured.
- Don't document the chat assistant bubble as brand UI.
- Don't use uppercase for buttons; uppercase is reserved for menu items and eyebrows.

## Responsive Behavior

At 390px the h1 is 44px/48.4px weight 600, h2 24px/28.8px weight 700, body 16px/25.6px, the header 72px, and the primary button remains 151px by 48px. Mobile sizes by characters: 16px (2941), 12px (990), 18px (478), 28px (153), 14px (66), 24px (39), 44px (27), 64px (8). Column stacking, tab behaviour and menu collapse were not measured.

## Iteration Guide

1. Start from navy #062342 text on white and cream #f6f5ee, with GEICO Roobert.
2. Add one saturated blue #026df1 for actions, using 100px pill buttons 48px high.
3. Make the first screen a blue band with a white headline and one lime word.
4. Use 15.2px radii for cards and product tiles.
5. Hover, focus, dark mode and motion beyond the measured button hover were not measured.
