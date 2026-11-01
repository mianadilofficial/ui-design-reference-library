---
version: alpha
name: "Don Mueang International Airport"
category: "Thai Brands"
description: "The Don Mueang International Airport (DMK) site in the Airports of Thailand network uses Kanit throughout, a #03a9f4 airport bar, #00aff4 sky-blue accents, #4b4b4b ink on white and #f1f1f1 bands, 7px-8px cards with soft grey shadows and a pill-shaped flight search."
colors:
  canvas: "#ffffff"
  ink: "#4b4b4b"
  primary: "#00aff4"
  surface-grey: "#f1f1f1"
  surface-footer: "#f5f5f5"
  ink-strong: "#2e2e2e"
  ink-muted: "#696969"
  ink-navy: "#025596"
  ink-dark: "#212529"
  hairline: "#09b2ff6b"
  nav-blue: "#03a9f4"
  text-input-text: "#000000"
  link-blue-deep: "#0094df"
  blue-light: "#22c2ff"
  blue-ring: "#01b0f0"
  blue-text-dark: "#0492ca"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 50px
    fontWeight: 500
    lineHeight: 75px
    letterSpacing: 3px
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 17px
    fontWeight: 600
    lineHeight: 25.5px
  nav:
    fontFamily: Kanit, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  input:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 12px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 5px
  md: 7px
  lg: 8px
  xl: 10px
  2xl: 33px
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
  s9: 13px
  s10: 14px
components:
  nav:
    backgroundColor: "{colors.nav-blue}"
    textColor: "{colors.canvas}"
    padding: 10px 40px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 0px 14px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 1px 2px 1px 40px
    height: 48px
  card:
    textColor: "{colors.primary}"
    rounded: "{rounded.lg}"
    boxShadow: rgb(177, 177, 177) 0px 0px 8px -2px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.link-blue-deep}"
    padding: 50px 50px 20px
---

# Don Mueang International Airport

## Overview

The measured site, `https://donmueang.airportthai.co.th/`, is the English-language home page of Don Mueang International Airport (DMK), titled "Donmueang International Airport | DMK". Its meta description presents DMK as a secondary hub for low-cost domestic and international flights, with nearby attractions and car rental. The site is one of the per-airport sites of the Airports of Thailand network: the top bar links to Suvarnabhumi Airport, Don Mueang, Chiang Mai, Mae Fah Luang Chiang Rai, Hat Yai and Phuket international airports, with a search icon and an English language menu; the current airport is marked by an underline. A second bar carries the AOT logo and the links FLIGHT STATUS, AIRPORT MAP, AIRPORT GUIDE, EXPLORE and CONTACT US.

The look is a clean information-service portal in sky blue and white. A bright blue bar (`#03a9f4`) sits over a white bar, followed by a full-width photograph of the terminal with the AOT / DON MUEANG logo lockup, and then a floating flight search: a pill-shaped container with a pale-blue outline holding Arrivals and Departures tabs, a "Search arrivals flight" field and a blue SEARCH button. Below that a light-grey band holds two modules, "AIRPORT GUIDE" (four rows with round blue icons: Passenger Guide, Airport Services, Shop and Dine, Transportation) and "WAY TO AIRPORT" (a carousel card with a blue caption block: "Don Mueang Smart Car Park...", "How to get to Don Mueang Airport", READ MORE). Further down: a "Passenger Guide - Essential Airport Travel Tips" carousel of illustrated cards (airlines information, permitted LAGs in cabin baggage, arrival procedure, departure procedure), pagination dots, and an "EXPLORE" section with Attractions, Restaurant and Hotel tabs.

Copy is practical and procedural: step-by-step instructions, regulations and transport options in plain English, often paired with a Thai title on the card artwork. The page also holds a third-party advertising banner (a Singha Life campaign in the capture) and a floating chat button; neither is brand UI and neither is documented here.

## Colors

- **Canvas `#ffffff`**; **surface grey `#f1f1f1`** (646 area units, the modules band) and **surface footer `#f5f5f5`** (481 units).
- **Ink `#4b4b4b`**: by far the most-read text color (61,068 characters, including a very large amount of 12px text). Other inks: **ink strong `#2e2e2e`** (headings), **ink muted `#696969`**, **ink dark `#212529`** (mobile heading) and **ink navy `#025596`**.
- **Primary `#00aff4`**: sky blue for links and icon circles, text on the module rows, tab underlines and the SEARCH button area (58 text characters).
- **Nav blue `#03a9f4`**: the top bar fill, with white `#ffffff` text (2,171 characters).
- **Blue light `#22c2ff`** (18 units) and **blue ring `#01b0f0`**: lighter variants of the blue background and its border; **hairline `#09b2ff6b`** is the translucent blue border. **Link blue deep `#0094df`** is the footer link color and **`#0492ca`** a darker blue text.
- Header link text is black at 50 percent opacity (`#00000080`) and rises to 70 percent on hover, measured on FLIGHT STATUS and AIRPORT MAP.

The root variables list Bootstrap 4 default colors (`--blue #007bff`, `--primary #007bff`, `--red #dc3545`, `--indigo`, `--teal`, ...) and a cookie-consent component's `--cc-*` set. These are framework and plugin defaults, not DMK brand colors.

## Typography

One family, Kanit, a Latin and Thai typeface, carries all 64,474 measured characters, at weights 400 (64,171), 600 (267) and 500 (36).

- **Display**: Kanit 50px / 75px, weight 500, letter-spacing 3px; the h1 role "Don Mueang" over the hero. On the 390px pass the h1 role is the span "AIRPORT GUIDE" at 17px / 25.5px, weight 600 (`display-mobile`).
- **Nav**: Kanit 13px / 19.5px, weight 400.
- **Input**: Kanit 16px / 24px, weight 400.
- **Body**: Kanit 12px, weight 400, the dominant size (61,543 characters).

Other measured sizes are 15px (1,585 characters), 16px (925), 17px (126), 9px (112), 13px (108), 35px (21), 26px (15), 14px, 11px and 24px. The 9px runs are the small sub-labels under each airport name in the top bar. Weight 400 is the norm; emphasis is by color and size rather than bold.

## Layout

The desktop pass measured 1280px wide and a 3,109px page. The top blue navigation measured 1280 × 63px with `10px 40px` padding. Each airport item is a two-line label (name in capitals, then "INTERNATIONAL AIRPORT" in 9px). The Bootstrap breakpoint variables are declared in the stylesheet (576px, 768px, 992px and 1200px). Page structure from the capture: hero, floating search, a grey band of two modules (a narrow left list and a wide right carousel), a centered banner, a centered section title with a horizontally scrolling card carousel and pagination dots, and the explore tabs. The footer measured 1280 × 376px with `50px 50px 20px` padding on `#f5f5f5`, with blue `#0094df` link columns beginning "FLIGHT STATUS: Arrivals, Departures" and "EXPLORE". Frequent paddings are 10px (77 uses), 5px, 3px, 15px and 18px.

## Elevation & Depth

Soft grey shadows define cards: `rgb(177, 177, 177) 0px 0px 8px -2px` on 19 elements (the guide rows and passenger cards), an inset `rgba(114, 114, 114, 0.14) 0px -13px 31px 4px` on 4, and one `rgba(0, 0, 0, 0.28) 0px 0px 17px -6px`. Together with a pale-blue glowing outline on the search pill and a blue gradient caption block on the carousel card, this gives a lightly layered, glassy-blue look; the rest is flat white and grey bands.

## Shapes

Rounded and friendly. Radii: 7px (39 elements, cards and images), 50% (20, the round icon discs and carousel arrows), a bottom-only `0px 0px 7px 7px` (14), 8px (10), 10px (7), 100% (5), a 33px pill end (`0px 33px 33px 0px` on the SEARCH button side, and a 33px radius on the search container), and 5px and 4px. Icons are solid white pictograms inside blue circles, with thin chevron arrows for "SEE ALL" and "READ MORE".

## Components

- **Top airport bar** (`nav`): `#03a9f4` fill, white 13px Kanit, `10px 40px` padding; links have `0px 14px` padding and a 126px-wide first item.
- **Primary links**: header links in black at 50 percent opacity; READ MORE and SEE ALL in `#025596` or blue with a chevron.
- **Flight search**: 48px-tall field with 40px left padding (for an icon), white fill, 16px black text, 418px wide; Arrivals and Departures tabs, and a blue SEARCH button.
- **Card** (`card`): white, 8px radius, `rgb(177, 177, 177) 0px 0px 8px -2px` shadow, blue text for titles in the guide module.
- **Footer**: `#f5f5f5`, `#0094df` links, `50px 50px 20px` padding.
- **Not documented**: the cookie-consent module, the floating chat button and the third-party advertisement.

## Design System Architecture

No public design system or brand guideline for the DMK site was found: the page links to the sister airport sites, flight, map, service, explore and contact pages, a car park service and the AOT contact portal, not to guidelines. The shipped stack is Bootstrap 4 (its default `:root` color and breakpoint variables are present; 74 root variables were recorded in total), Font Awesome 5 Brands and Free, a `revicons` icon font, a `video-react` font, a cookie-consent component and the Kanit family. Brand colors are applied through site CSS rather than variables, so the values above come from computed styles. Source: `https://donmueang.airportthai.co.th/`.

## Do's and Don'ts

- Do use sky blue `#00aff4` and `#03a9f4` with white as the core pair, with `#4b4b4b` text on white.
- Do set everything in Kanit; reserve weight 600 for small headings.
- Do round cards at 7px to 8px, use round blue icon discs and keep shadows soft and wide.
- Do use pill-ended search containers with a blue SEARCH button.
- Don't use the Bootstrap defaults (`#007bff` and friends) as brand colors.
- Don't document the advertisement, chat button or cookie-consent module as brand UI.
- Don't add heavy shadows beyond the three measured.

## Responsive Behavior

The 390px pass recorded: the heading role "AIRPORT GUIDE" at 17px / 25.5px, weight 600, `#212529`, in a 390 × 26px block, and a navigation element 390 × 65px whose text is "English" at 14px / 21px in white. Bootstrap's breakpoint variables (576px, 768px, 992px, 1200px) are declared in the stylesheet, but the mobile menu mechanism, carousel behavior and column counts at small widths were not measured.

## Iteration Guide

1. Load Kanit; set canvas `#ffffff`, ink `#4b4b4b`, primary `#00aff4`, nav `#03a9f4`.
2. Build two bars: the blue airport switcher with two-line labels, then a white bar with the logo and five text links.
3. Put a full-width photograph under them and float a pill-shaped flight search with a blue SEARCH button.
4. Use a `#f1f1f1` band for the guide module, white cards at 7px to 8px radius with the 8px grey shadow, and round blue icon discs.
5. Close with the `#f5f5f5` footer and `#0094df` links.
6. Run `node web/scripts/verify-designs.mjs --slug=don-mueang-international-airport` after edits.
