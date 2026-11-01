---
version: alpha
name: International Gateway
category: "Thai Brands"
description: "International Gateway Co., Ltd. (IGC), a Thai neutral gateway and submarine-cable carrier: Noto Sans Thai headings at 700 / 40px uppercase in indigo #303188, Calibri 17.33px body, teal #00a8a2 hover accent, lime #4fd946, white canvas, rounded 20px to 50px green cards and pills."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#00a8a2"
  indigo: "#303188"
  lime: "#4fd946"
  slate: "#69727d"
  nav-link-text: "#cc3366"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai\""
    fontSize: 40px
    fontWeight: 700
    lineHeight: 40px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai\""
    fontSize: 30px
    fontWeight: 700
    lineHeight: 30px
    textTransform: uppercase
  heading:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai\""
    fontSize: 32px
    fontWeight: 600
    lineHeight: 32px
  subheading:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai\""
    fontSize: 28px
    fontWeight: 600
    lineHeight: 28px
    textTransform: uppercase
  body:
    fontFamily: Calibri, sans-serif
    fontSize: 17.3333px
    fontWeight: 400
    lineHeight: 18.5467px
  nav:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai\""
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16px
    textTransform: uppercase
rounded:
  xs: 20px
  sm: 40px
  md: 50px
  lg: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 10px
  s4: 13px
  s5: 15px
  s6: 20px
  s7: 25px
  s8: 30px
  s9: 38.39px
  s10: 40px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 10px 30px
  nav:
    textColor: "{colors.slate}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.canvas}"
---

## Overview

The measured page is the English home page of International Gateway Company Limited (IGC), title "International Gateway Company Limited.", language `en-US` with a Thai (TH) switch beside EN. It describes IGC as "a premier telecommunications and digital infrastructure provider in Thailand, driving seamless domestic, regional, and international connectivity" and as "Thailand's trusted neutral gateway for digital connectivity" that links a terrestrial fiber network to Cable Landing Stations serving submarine cable systems. The page is 1280px wide and 4276px tall.

The capture shows a clean corporate telecom layout: a white header with a network-node logo and the wordmark "INTERNATIONAL GATEWAY CO.,LTD." in indigo, a full-width hero carousel of a glowing map of Thailand with light arcs, two green feature cards that overlap the bottom of the hero ("SERVICE RESILIENCY", "CUSTOMIZED SOLUTION"), a "WHO WE ARE" block with a control-room photograph and a pill button, and an "OUR SERVICES" grid of seven white cards with green line icons. A pop-up modal (Elementor popup, with scrim) was present in the DOM and was hidden for the measurement; no popup is documented here.

## Colors

- **Canvas `#ffffff`**: the page and card background; white is also the most-read text colour (1167 characters) because it sits on the green cards and the dark footer.
- **Ink `#000000`**: running text (923 characters).
- **Indigo `#303188`**: headings such as "WHO WE ARE" and "OUR SERVICES" (71 characters), the icon-circle border colour, and the default nav link colour on hover-before state. In the capture it also colours the wordmark and the bar under each service card.
- **Lime `#4fd946`**: accent text, for example the active "EN" language label (27 characters).
- **Primary `#00a8a2`**: teal, the hover colour of nav links and social icons (19 characters at rest).
- **Slate `#69727d`**: navigation and icon text (22 characters).
- **Magenta `#cc3366`**: the active "Home" link state in the nav (15 characters).
- **Light grey `#b9b9b9`**: minor text (8 characters).

The green cards and the "READ MORE" pill in the capture move from lime to teal; the extraction records the endpoint colours `#4fd946` and `#00a8a2` as text and hover colours but did not record the gradient itself, so no gradient token is declared.

## Typography

Noto Sans Thai (1624 characters; weights 400, 500, 600 and 700 loaded) sets headings, navigation and button labels, and Calibri with a `sans-serif` fallback (628 characters) sets body paragraphs. The icon fonts eicons and Font Awesome 5 (Free and Brands) are also loaded. Calibri is a Microsoft system font and is not available everywhere; where it is absent the declared fallback is generic `sans-serif`.

Measured roles:

- Display (h1 role, "WHO WE ARE"): 40px / 40px, weight 700, uppercase, indigo.
- Heading (h2 role, "IGC SERVICES"): 32px / 32px, weight 600.
- Subheading: 28px / 28px, weight 600, uppercase.
- Body: Calibri 17.3333px / 18.5467px, weight 400.
- Nav: 16px / 24px, weight 400.
- Link/button label: 14px / 16px, weight 600, uppercase.

Frequent sizes by character count: 16px (504), 18px (481), 17.3333px (359), 14.6667px (269), 24px (170), 20px (136), 14px (87) and 55px (64). Letter-spacing is `normal` throughout. On the 390px mobile pass the h1 role is 30px / 30px weight 700.

## Layout

The grid is a centered content column with full-width image bands. Gap values most used are 15px (56 uses), 5px (24), 10px (16) and 4px (4). Paddings are 10px (28), 13px (12), 5px (9), 20px (9), 40px (7), 50px (4), 25px (4) and 30px (3). The service grid shows three cards per row with the seventh card centered on its own row. The hero carousel has left and right arrow controls sized by `--swiper-navigation-size: 44px`.

Imagery and voice: the hero uses a dark rendered night-time map of Thailand with glowing nodes and light arcs, and the about block uses a documentary photograph of operators at a multi-screen network operations desk. Icons are thin line drawings in green. Copy is plain, noun-led English: service names such as "Virtual POP" and "IX Extended" are followed by short benefit lines like "Your gateway to global presence" and "Better Internet Services". The introductory paragraph for the services section is centered and set wide, in a different face from the headings, which gives that section a slightly document-like look.

## Elevation & Depth

Cards carry one soft shadow: `rgba(0, 0, 0, 0.18) 0px 5px 5px 0px`, measured on 7 elements. The service cards also show a thick indigo bar at their bottom edge in the capture, in line with the measured `#303188` border colour. Hover states on the social icon change opacity to 0.9. No other elevation is measured; the WordPress preset shadows (`outlined`, `natural`) exist as variables but were not observed on rendered elements.

## Shapes

Radii measured: 50% (5 uses, circular social and language icons), 100px (2), 20px (2), 40px (2) and 50px (1). The "READ MORE" pill and the green feature cards use the larger values and the icon circles use 50%. The token set also declares a 9999px pill. Which radius belongs to which element beyond the pill, the circular icons and the feature cards was not separately recorded.

## Components

- **Pill link / "READ MORE"**: white label, Noto Sans Thai 14px weight 600 uppercase, padding 10px 30px, 40px radius.
- **Navigation**: a text menu (Home, About Us with a dropdown, Our Services with a dropdown, News & Events, Career, Contact Us) at 16px; the measured hover change is indigo `#303188` to teal `#00a8a2` on the text and its border colour. A LinkedIn icon circle has a hover from slate `#69727d` (border indigo) to white on `#00a8a2` with opacity 0.9.
- **Feature cards**: green tinted cards with a white icon, an uppercase title ("SERVICE RESILIENCY") and a two-line description.
- **Service cards**: white cards with a green line icon, a bold title (Private Leased Circuit (PLC), Ethernet Private Line (EPL), Virtual POP, IP Transit, IX Extended, Colocation Services, Submarine Cable Service) and a one-line description, each with the shadow above.
- **Language switcher**: flags with EN in lime and TH in black.

## Design System Architecture

No public design-system or brand-guideline page was found: the home page HTML was opened and held no brand, press, design-system, guideline or GitHub link. The site is a WordPress/Elementor build (an Elementor popup is present; WordPress preset variables and Swiper variables `--swiper-theme-color` and `--swiper-navigation-size` are in the root). The de-facto system is therefore a small set of repeated values: one indigo, one lime, one teal, white, black and slate; radii of 20px to 100px for pills and cards; one shadow.

## Do's and Don'ts

- Do set headings in Noto Sans Thai at 600 or 700 and keep display titles uppercase in indigo `#303188`.
- Do use Calibri (fallback sans-serif) at 17.3333px for body copy.
- Do use teal `#00a8a2` for hover and lime `#4fd946` for the active language label.
- Do keep service cards white with the 0 5px 5px shadow.
- Don't use the Elementor popup, scrim or Swiper default blue `#007aff` as brand colours.
- Don't use the WordPress preset colours (vivid cyan blue, vivid purple and similar).
- Don't add radii outside 20px, 40px, 50px, 100px or 50%.

## Responsive Behavior

Measured at 390px: the h1 role falls to 30px / 30px (weight 700) and the second heading stays at 32px / 32px; the most common sizes are 16px (807 characters), 14px (373), 17.3333px (359), 14.6667px (269), 20px (129) and 30px (119). Column counts, menu collapse and breakpoints were not measured.

## Iteration Guide

1. Use white canvas, black body text and indigo `#303188` for headings.
2. Pair Noto Sans Thai (headings, nav) with Calibri 17.3333px (body).
3. Use `#00a8a2` as the interaction colour; use `#4fd946` sparingly for active states.
4. Round pills at 40px and cards at 20px; circular icons at 50%.
5. Place white cards with `rgba(0, 0, 0, 0.18) 0px 5px 5px 0px` in a three-column grid.
6. Check every new value against `web/data/extracted/international-gateway.json`.
