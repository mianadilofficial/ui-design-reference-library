---
version: alpha
name: Kia America
category: "Automotive"
description: "Kia America (kia.com/us/en) is a dark midnight-navy #05141f automotive showroom set in the proprietary designk typeface family, with square-cornered 0px buttons, white-on-photo hero type at 40px/-1.6px tracking and edge-to-edge vehicle photography."
colors:
  canvas: "#ffffff"
  ink: "#05141f"
  primary: "#05141f"
  on-primary: "#ffffff"
  surface-grey: "#ebeced"
  surface-night-2: "#1f272e"
  ink-light-grey: "#d0d0d0"
  ink-muted: "#666666"
  on-dark-muted: "#ffffff66"
typography:
  display:
    fontFamily: designk-bold, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 46px
    letterSpacing: "-1.6px"
  heading:
    fontFamily: designk-medium, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: designk-medium, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  subheading:
    fontFamily: designk-bold, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: designk-bold, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  link:
    fontFamily: designk-bold, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 10px
rounded:
  xs: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 14px
  s7: 16px
  s8: 17px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 17px 25px
    height: 50px
    borderColor: "{colors.ink}"
  button-on-dark:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 32px
    height: 52px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 60px
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

The Kia America home page (https://www.kia.com/us/en) is organized as a night-time showroom. A midnight-navy bar carries the Kia wordmark, the primary menu (Vehicles, Shopping Assist, Inventory, Kia Innovation, Owners), "Find a Dealer" and a "Search" control. Directly beneath is a full-width hero photograph of five SUVs parked in front of a dark city skyline, with a small caps eyebrow "MEET THE HYBRID LINEUP", the headline "Move to a new beat" and a white "Explore Hybrids" button. Next comes a row of three tall vehicle cards (2027 Telluride, 2027 EV3, 2027 Seltos), each a photograph fading into navy with an outlined button ("Meet Telluride", "Meet EV3", "Meet Seltos"). A full-bleed forest photograph carries "Trusted by consumers." and a Consumer Reports "Recommended" badge, followed by a "Discover the new Kia" tabbed carousel on a mountain backdrop that resolves into a white panel with price, power and MPG figures. The voice is short, rhythmic and product-first: "Go big, go beyond", "The new shape of electric", "Style & sophistication".

## Colors

The palette is almost entirely two values: midnight navy #05141f and white #ffffff. Navy fills the header, the vehicle-card section, the footer area and the "Learn more" button, and it is also the text color on white panels (the extraction records it as the most-read dark text color). White is the text color on every dark surface, the page canvas of the product panel, and the fill of the hero's "Explore Hybrids" button.

Supporting values are a light grey #ebeced (the most common non-white background by area after white, used for the page body), a slightly lifted navy #1f272e, a light grey text #d0d0d0, a mid grey #666666 for labels such as "STARTING AT", and white at 40% alpha (#ffffff66) for placeholder or disabled text. There is no saturated brand accent in the interface chrome: color comes from the vehicle photography, the thin yellow daytime-running-light details in the cars, and the green Consumer Reports badge, which is third-party artwork rather than Kia UI. The browser-default link blue (#0000ee) shows up in the raw extraction on unstyled anchors and is not a brand color.

## Typography

The site uses a proprietary family loaded as three faces: designk-bold, designk-medium and designk-light, plus an icon font named kia-icons. Fallbacks are "Helvetica Neue", Helvetica, Arial, sans-serif. The font files expose weight through the family name, so every measured role has a CSS font-weight of 400.

The measured display role is designk-bold at 40px/46px with -1.6px letter-spacing ("Move to a new beat"). Body and headings use designk-medium at 16px/24px. Eyebrows and card labels use designk-bold at 12px/20px, set in capitals ("MEET THE HYBRID LINEUP", "GO BIG, GO BEYOND"). Buttons use designk-bold at 14px with a 22px line height. Small link text in cards is designk-bold at 10px/10px. The footer headline "Don't miss a beat" is measured at 30px/36px.

## Layout

The measured page is 1280px wide and 4718px tall. The header is a full-width bar; the hero is a full-width photograph, with text left-aligned at the container margin. Vehicle cards sit in a three-column row with equal gutters on a navy band, and the "Discover the new Kia" carousel is centered with arrows at the left and right edges. The product panel at the bottom of the first fold is a narrow centered column on white containing the model year, model name, a three-figure spec row (starting price, horsepower, MPG) and the "Learn more" button.

Spacing values measured from paddings and gaps include 1px, 5px, 6px, 8px, 10px, 14px, 16px, 17px, 18px and 20px; the header horizontal padding exposed as a root variable is 25px. Buttons carry generous horizontal padding (14px 32px and 17px 25px).

## Elevation & Depth

No box shadows were measured on the page (the extraction's boxShadows list is empty). Depth is produced with photography and gradients: vehicle cards fade from photograph to solid navy at the bottom so the text and button sit on a flat dark field, and the hero darkens toward its edges. The "Search" control is a slightly lighter grey block against the navy header. Layering beyond that was not measured.

## Shapes

Corners are square. The only radii measured are 50% (ten elements, the circular carousel arrows and icon badges) and a single 10px; every button, input, nav item and card computes 0px. The outlined buttons use a 1px solid white border on a transparent fill; the primary dark button uses a 1px border in its own navy.

## Components

- Primary button: navy #05141f fill, white designk-bold 14px/22px text, 0px radius, padding 17px 25px, height 50px ("Explore Accessories" measured at this size; "Learn more" in the product panel).
- On-dark button: white fill, navy text, 0px radius, padding 14px 32px, height 52px ("Explore Hybrids" over the hero).
- Outlined button: transparent fill, 1px solid #ffffff border, white text with 1px letter-spacing, padding 17px 21px, height 58px ("Meet Telluride").
- Navigation: navy bar, white designk-bold 12px items with chevrons on dropdown entries and an external-link icon on "Owners".
- Text input: transparent field, white designk-bold 12px/20px text, padding 0px 20px, height 60px (the newsletter email field).
- Tabs: "SUV / CUV / MPV", "Hybrid / Electric", "Sedan", "All Vehicles" above the carousel; the active tab has a white underline.
- Spec row: small-caps grey label above a large figure ("$39,190", "274 hp", "19-22 MPG comb.") separated by thin vertical rules.

## Design System Architecture

No public Kia design system or brand-guideline page was opened for this document. The shipped CSS exposes root variables with a --yxt- prefix (for example --yxt-color-brand-hover: #0c5ecb, --yxt-color-text-primary: #212121, --yxt-base-spacing: 1rem), which belong to an embedded search component, and a site-level --global-header-horizontal-padding: 25px. The visible system is therefore component-by-component: a navy/white pair, the designk font family, square buttons and photography-led cards.

## Do's and Don'ts

Do use #05141f and #ffffff as the dominant pair, set headlines in designk-bold with tight negative tracking, and keep every button square-cornered. Do let a full-bleed photograph carry each section and fade it to navy beneath text. Do use capitalized 12px eyebrows above product names.

Don't add rounded corners to buttons, cards or inputs; the page computes 0px everywhere except circular arrow controls. Don't add drop shadows. Don't use #0000ee or other default link blues for navigation. Don't introduce a colored accent in the chrome; the third-party Consumer Reports badge is not part of the Kia palette.

## Responsive Behavior

The mobile pass (390px) measured the h1 "Move to a new beat" at designk-bold 40px/46px with -1.6px letter-spacing, the same as desktop, and a 342px-wide text block. Body text stays designk-medium 16px/24px, and the "Explore Hybrids" button keeps its white fill, 14px 32px padding and 0px radius. Navigation collapse, grid column counts and breakpoints were not measured.

## Iteration Guide

1. Set the page on navy #05141f with white text; use #ebeced as the light neutral and white as the product-panel canvas.
2. Use designk-bold 40px/46px (-1.6px) for hero headlines and designk-medium 16px/24px for copy.
3. Make all buttons 0px radius: navy fill with white text on light, white fill with navy text or a 1px white outline on dark.
4. Cover each section with a full-bleed photograph and fade it to navy where text sits.
5. Do not add shadows, accent colors or rounded corners without a fresh measurement.
