---
version: alpha
name: Prudential Thailand
category: "Thai Brands"
description: "Prudential Thailand English homepage: Open Sans with negative tracking at 18px body and 32px semibold headings, Prudential red #da291c on 96px-radius pill buttons (48px tall, #a31f15 hover), #f8f9fb and #fff4f6 tinted panels, #131313 hero black and 16px card corners."
colors:
  canvas: "#ffffff"
  ink: "#1c1d1b"
  ink-secondary: "#373a36"
  primary: "#da291c"
  on-primary: "#ffffff"
  primary-hover: "#a31f15"
  button-secondary-bg: "#fbeae8"
  button-secondary-text: "#6d150e"
  surface-dark: "#131313"
  surface-slate: "#5b6770"
  surface-grey: "#f8f9fb"
  surface-blush: "#fff4f6"
typography:
  display:
    fontFamily: "\"Open Sans\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 38.4px
    letterSpacing: "-0.64px"
  lead:
    fontFamily: "\"Open Sans\", Helvetica, Arial, sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 33.8px
    letterSpacing: "-0.52px"
  subheading:
    fontFamily: "\"Open Sans\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
    letterSpacing: "-0.36px"
  body:
    fontFamily: "\"Open Sans\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: "-0.36px"
  button:
    fontFamily: "\"Open Sans\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.32px"
  nav:
    fontFamily: "\"Open Sans\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.32px"
rounded:
  xs: 8px
  sm: 16px
  md: 96px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 20px
  s8: 21.77px
  s9: 24px
  s10: 27.38px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 48px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 16px 24px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview

The Prudential Thailand English homepage (https://www.prudential.co.th/en/) is a friendly, red-and-white insurance site that mixes soft rounded cards with strong photography. The capture shows a white header (the red "PRUDENTIAL" wordmark with the Thai line "พรูเด็นเชียล ประกันชีวิต" and the lion-head emblem at left; Contact us, Buy Online and a language selector at right; and a navigation row of Products, Services & Claims, About Us and Privileges with a Login link and a round blush search button), a dark hero carrying a portrait photograph with a red ribbon swooping across it, the headline "Exclusive Privileges for PRUFamily", a lead sentence "Enjoy everyday special benefits tailored to your lifestyle" and a red pill "Explore our privileges". Below the hero, a red rounded bar ("I am looking to…") holds icon shortcuts (Safeguard my family, Protect my health, Saving starts a future worth protecting) and a darker red "Need help with your cover?" panel with a white "Get in touch" button.

The page continues with "What do you need?" and Existing Customers / New Customers tabs (red underline on the active tab), four blush-tinted shortcut tiles with round icon chips, a red "Promises, made real" statement, a grey band with the "Best-selling Online Insurance Products" carousel of white cards (each with a red category label, product name, and a "Learn more" link with arrow), and a slate-and-photo split block titled "Prudential Thailand".

The tone is warm and reassuring ("Promises, made real"), with plain-English labels and customer-first calls to action. A floating dark "Get in touch" pill overlays the right edge in the capture; it is a persistent contact widget rather than part of the page grid.

## Colors

All values are measured on the live page.

- **canvas #ffffff** is the dominant background (3,170 area units); **ink #1c1d1b** is the heading and nav text; **ink-secondary #373a36** is the second most-read colour (about 1,010 characters) and the colour of 11 measured borders.
- **primary #da291c** is Prudential red: the fill of the "Learn More", "Get started" and "All News" buttons (white text, **on-primary #ffffff**), the colour of the "Promises, made real" statement and of category labels (281 characters of red text), and the fill of the large icon bar (188 area units). **primary-hover #a31f15** is its hover state and also fills the darker "Need help" panel (893 units).
- **button-secondary-bg #fbeae8** with **button-secondary-text #6d150e** forms the secondary pink pill ("Get in touch", "Find out about us").
- **surface-dark #131313** is the hero background (1,187 units); **surface-slate #5b6770** the slate half of the closing split block (248); **surface-grey #f8f9fb** the quiet band behind the product carousel (710); **surface-blush #fff4f6** the shortcut tiles (99).

White text accounts for 1,348 characters (hero and red panels) and a light grey #dfdfdf for 586 characters on dark backgrounds.

## Typography

One family, **Open Sans**, loaded in weights 300, 400, 600 and 700. Every size carries negative letter-spacing proportional to size: 48px at -0.96px, 32px at -0.64px, 26px at -0.52px, 18px at -0.36px, 16px at -0.32px, 14px at -0.28px and 12px at -0.24px (about -0.02em). Weights: 400 for 2,949 characters, 600 for 1,295 (headings, labels, buttons), 300 for 141 (light display lines) and 700 for 21.

The page's real H1 element is empty (its source markup holds only non-breaking spaces inside a `hero-banner__title` heading, so the hero headline text is not in that element), therefore the display role here is taken from the first visible H2, "What do you need?", at 32px / 38.4px / 600. The hero lead sentence measures 26px / 33.8px / 400. Body is 18px / 27px / 400, the subheading 18px / 27px / 600, buttons and navigation 16px / 24px (600 and 400). On mobile the body measures 14px.

## Layout

The desktop page is 1280px wide and 6,092px tall. The hero is full-bleed and the content sits in a centred container whose edges align with the red icon bar, which overlaps the lower edge of the hero. The icon bar contains a heading, three icon shortcuts, carousel arrows and a darker call-to-help panel. Sections alternate white and #f8f9fb bands, and a split block puts a rounded photo beside a slate panel. Measured gaps are 8px (56 uses), 12px (30), 4px (26) and 24px (21), with 48px between larger groups; paddings are 12px (46 uses), 24px (22) and 100px (14) for wide section padding. Cards in the carousel are white with 16px corners and extend past the container edge.

## Elevation & Depth

No box-shadows were measured. Depth is created with colour: a red bar overlapping a dark hero, a deep-red panel inside the red bar, white cards on a grey band, and tinted blush tiles. Cards and tiles read as raised only because of the background contrast.

## Shapes

Roundness is a signature. The measured radii are 96px (22 uses, buttons and chips), 8px (8 uses), 16px on partial corners (such as 0 0 16px 16px and 16px 16px 0 0 on image-and-card pairs, and the red panels' outer corners), 50% (4 uses) on round icon chips and carousel buttons, and one full 16px radius. The tokens record 8px, 16px, 96px and the circle.

## Components

- **Primary button**: red pill, white 16px / 600 text, 12px 24px padding, 48px tall, hover #a31f15.
- **Secondary button**: blush #fbeae8 pill with #6d150e text, same geometry.
- **Icon bar**: red, 16px-scale corners, white label and line icons with 12px captions, carousel arrows as one blush and one white circle.
- **Shortcut tile**: #fff4f6 background, 16px-scale corners, black 600 title and a round blush icon chip on the right.
- **Product card**: white, 16px top corners on the photo, red 600 category label, 600 product name, 12px-14px description and a red "Learn more" arrow link.
- **Tabs**: red text and a red underline for the active tab.
- **Navigation**: white, 16px / 400 labels with chevrons, 16px 24px padding.

## Design System Architecture

No public design system or brand-guideline site was found on the pages opened. The page uses no CSS custom properties (zero root variables), so values are literals; class names follow a block-element convention (the hero heading is `hero-banner__title`, observed by a recorded probe of the live DOM). The de-facto system is: Open Sans with -0.02em tracking, a single red with a deep-red hover, pink and grey tints, 96px pill buttons, 16px card corners and an 8px-based spacing scale (4, 8, 12, 16, 24, 48). Extending the site means reusing those components rather than introducing new colours.

## Do's and Don'ts

- Do use red #da291c for primary actions, labels and statement text, and the deeper #a31f15 on hover.
- Do make buttons full pills (96px radius) at 48px height.
- Do apply negative letter-spacing to every size, in Open Sans.
- Do alternate white and #f8f9fb bands, and use blush #fff4f6 for friendly shortcut tiles.
- Don't add drop shadows; use colour contrast for depth.
- Don't use the dark persistent contact pill as a pattern for in-page buttons.
- Don't mix a second typeface.
- Don't use red for large text blocks; it is reserved for headlines, labels and actions.

## Responsive Behavior

On a 390px viewport the extraction records the body at 14px (against 18px on desktop) and the first measured heading at 22px. The page's carousel components and icon bar include arrow controls, which suggests horizontal overflow handling, but no mobile layout (menu pattern, column stacking, button sizes) was measured, so it is not documented here.

## Iteration Guide

1. Set Open Sans with -0.02em tracking at 18px body and 32px / 600 headings.
2. Use #da291c pills (96px radius, 48px tall, 12px 24px padding) for primary actions.
3. Build tiles in #fff4f6 and bands in #f8f9fb; use #131313 only for hero overlays.
4. Make cards white with 16px corners, a red category label and a red "Learn more" link.
5. Keep spacing to 4, 8, 12, 16, 24 and 48px.
6. Re-measure after hero changes; the empty H1 means the hero headline should be re-checked visually.
