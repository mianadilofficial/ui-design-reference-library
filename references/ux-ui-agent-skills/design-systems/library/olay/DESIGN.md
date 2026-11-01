---
version: alpha
name: OLAY
category: "Beauty & Personal Care"
description: "OLAY US store (olay.com): white #ffffff and #fdfdfd surfaces, near-black #161716 primary buttons with 8px radius, Boston typeface at weight 900 for headlines with 1% tracking, Inter for small UI text, soft 16px card shadows and product photography carrying all saturated color."
colors:
  canvas: "#fdfdfd"
  page-largest: "#ffffff"
  ink: "#161716"
  primary: "#161716"
  on-primary: "#ffffff"
  surface-3: "#777676"
  ink-3: "#000000"
  ink-4: "#c3c3c3"
  ink-5: "#707070"
  ink-6: "#ffffffbf"
  nav-bg: "#f4f4f4"
  card-border: "#d8d8d8"
typography:
  display:
    fontFamily: Boston, -apple-system, "system-ui", "Segoe UI", Arial, sans-serif
    fontSize: 30px
    fontWeight: 900
    lineHeight: 30px
    letterSpacing: 1%
  display-mobile:
    fontFamily: Boston, -apple-system, "system-ui", "Segoe UI", Arial, sans-serif
    fontSize: 26px
    fontWeight: 900
    lineHeight: 26px
    letterSpacing: 1%
  heading:
    fontFamily: Boston, -apple-system, "system-ui", "Segoe UI", Arial, sans-serif
    fontSize: 28px
    fontWeight: 900
    lineHeight: 28.924px
    letterSpacing: 1%
  subheading:
    fontFamily: Boston, -apple-system, "system-ui", "Segoe UI", Arial, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 13.5px
    letterSpacing: 1.5px
    textTransform: uppercase
  body:
    fontFamily: Boston, -apple-system, "system-ui", "Segoe UI", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
    letterSpacing: 1%
  button:
    fontFamily: Boston, -apple-system, "system-ui", "Segoe UI", Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
    textTransform: uppercase
  body-dominant:
    fontFamily: system-ui
    fontSize: 20px
    fontWeight: 400
  button-secondary:
    fontFamily: Boston, -apple-system, "system-ui", "Segoe UI", Arial, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16.8px
    letterSpacing: 0.5px
rounded:
  xs: 1px
  sm: 4px
  md: 8px
  lg: 10px
  xl: 12px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 4.08px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 45px
  button-primary-hover:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
  button-secondary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-3}"
    typography: "{typography.button-secondary}"
    padding: 0px 18px
    height: 44px
    borderColor: "{colors.page-largest}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 8px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 4px 16px 0px
  footer:
    backgroundColor: "{colors.ink-3}"
    textColor: "{colors.page-largest}"
---

## Overview

OLAY's US home page (https://www.olay.com/, title "OLAY Official Site | Introducing OLAY Treatments!") is the e-commerce front door of a Procter & Gamble skincare brand. It positions the products as science-backed anti-aging care: "Dramatic Results Without Drastic Measures", "At OLAY, we believe that true beauty begins at the cellular level", "Proven Science", "Only Olay". The capture shows a black announcement bar ("Free Shipping for Club OLAY"), a light header with the OLAY wordmark and a six-item menu (Face, Body, Anti-aging, Find My Routine, Offers, Learn), a large hero with a product lineup of purple and red jars, a black "Proven Science, Trusted Results" band, a row of four product cards under "NEW to OLAY", and alternating half-and-half image and text sections including a co-branded "Let's Get Cheeky" bundle with SPANX.

The visual register is clean retail: white and very light grey surfaces, black buttons, and product photography supplying the only saturated colors (deep red `#980110` and indigo `#363698` areas appear in the measured background list as product-image regions, not interface tokens). Headlines are heavy (weight 900) with a small positive tracking, which gives the brand a confident, clinical but friendly voice. Copy is short and reassuring, with qualifiers such as "visibly repairs signs of aging" and "No needles. No lasers."

## Colors

- **Canvas `#fdfdfd`**: body background; **page-largest `#ffffff`**: the largest background area (2829 units) and card and secondary-button fill. A **`#f4f4f4`** nav-bg is the header band, and `#f6f6f6` and `#f5f5f5` appear as further light panel areas.
- **Ink `#161716`** is the main text and the fill of the primary button ("SHOP NOW", "BUY NOW", "LEARN MORE"); **ink-3 `#000000`** is the heading and paragraph color in the role data (1489 characters) and the footer background. **`#707070`** is the secondary text tone (77 characters) and **`#c3c3c3`** a pale tone (268 characters).
- **On-primary `#ffffff`** is the most frequent text color overall (6294 characters), because it sits on the black footer, banner and buttons. **`#ffffffbf`** is white at 75 percent opacity.
- **Surface-3 `#777676`** is a mid-grey area (1748 units). **Card-border `#d8d8d8`** is the hairline around outlined buttons.
- The stylesheet also declares `--olay-neutral-90: #121312`, `--olay-neutral-60: #636463`, `--olay-neutral-45: #999999`, `--olay-red-50: #CB4355`, `--madonna-color-club-olay: #EFD33D` and `--button--border-color-2: #C11E33`. None of these were found in the rendered color frequencies on the home page, so they are listed as declared variables only.
- A "Hello, Beauty Icon!" sign-in pop-up and a chat launcher were open during measurement; neither is documented as brand UI. Variables prefixed `--rb-smart-` (for example `#2491C4`) and `--aa-` belong to third-party search widgets and are not brand colors.

## Typography

The brand family is **Boston** (weights 400, 600, 700, with 900 used for headlines), with **Inter** (400, 500, 600, 700) for small interface text and product-card labels, and **Portfield** at 10 characters. The CSS also declares a secondary serif, `--olay-font-secondary: "Juana", Georgia, "Times New Roman", serif`. By characters the generic `system-ui` family leads (6031) with Boston at 3287 and Inter at 414.

- **Display (H1):** Boston 30px, weight 900, line-height 30px, letter spacing 1%. Mobile: 26px, weight 900, line-height 26px.
- **Heading (H2):** 28px, weight 900, line-height 28.924px, letter spacing 1% (mobile 24px, line-height 26.76px).
- **Subheading / eyebrow (H3):** 12px, weight 500, line-height 13.5px, letter spacing 1.5px, uppercase ("OLAY REGENERIST").
- **Body:** 16px, weight 400, line-height 19.2px, letter spacing 1%.
- **Button:** 16px, weight 500, line-height 19.2px, uppercase.
- **Secondary button:** 14px, weight 700, line-height 16.8px, letter spacing 0.5px.
- **Dominant measured size:** `system-ui` at 20px, weight 400 (5903 characters, mostly white text).

Letter spacing is expressed as a percentage (1%) for most sizes, a measured trait shared by 16px (1530 characters), 14px (783) and 28px (208) text.

## Layout

The home page is 9024px tall at 1280px. Structure from the capture: announcement bar, header, hero, black proof band, a four-column product row with a centered "SHOP NEW ARRIVALS" outlined button, then full-width two-column sections that pair a photograph with text on a tinted panel. Measured gaps: 16px (42), 8px (38), 12px (20), 4px (17), 32px (14), 20px (10). Paddings: 16px (42), 8px (35), 12px (16), 10px (12), 48px (10). Root variables name a 48px desktop section padding (`--spacing--section--x: 48px`) and a 16px mobile one (`--spacing--section--mobile--x: 16px`), a 400px drawer width and a 1440px desktop breakpoint (`--madonna-bp-desktop-intent`).

## Elevation & Depth

Four shadows were measured: `rgba(0,0,0,0.1) 0px 4px 16px 0px` (10 elements, the product cards), an inset `rgb(22,23,22) 0px -1px 0px 0px` underline (4), the three-layer pop-up shadow (excluded as pop-up UI) and `rgba(0,0,0,0.15) 0px 10px 25px 0px` on the "GET MY ROUTINE" button. Cards sit on the page with a soft diffuse shadow; most other surfaces are flat.

## Shapes

Radii measured: 8px (48 elements, buttons and panels), 1px (42), 10px (30), 4px (10), 12px (4, the product cards) and 50% (3, circular icons). The primary button is 8px; the product card is 12px. The CSS declares `--radius-sm: 4px` and `--madonna-radius-xl: 16px`.

## Components

- **Button primary:** `#161716` fill, white text, Boston 16px weight 500 uppercase, radius 8px, padding 0px 16px, height 45px. Hover swaps to a white fill with ink text.
- **Button secondary:** white fill, black text, Boston 14px weight 700, 18px horizontal padding, 44px high, with a 2px white border ("REGISTER").
- **Outlined button:** white fill, 1px `#d8d8d8` border, Inter 16px weight 500, radius 8px, padding 2px 16px ("ADD TO CART", "SHOP NEW ARRIVALS").
- **Product card:** white, radius 12px, padding 8px, shadow `rgba(0,0,0,0.1) 0px 4px 16px 0px`; contains a category label, star rating, product name and price.
- **Nav:** `#f4f4f4` band with Inter 16px weight 500 ink labels. Footer: `#000000` fill with white text.

## Design System Architecture

OLAY's own stylesheet shows a layered token system rather than a published one. Its custom properties use at least three prefixes: `--olay-*` (brand: `--olay-neutral-90`, `--olay-red-50`, `--olay-h4-desktop-family`, `--olay-body-desktop-spacing`), `--madonna-*` (component and spacing scale: `--madonna-button-height-lg: 52px`, `--madonna-heading-4-size: 28px`, `--madonna-shadow-md`, `--madonna-color-border-light: #E5E7EB`) and unprefixed theme variables (`--button--bg-color-4`, `--font--nav--family`, `--radius-sm`). The page declares 400 root variables in total. The home page (https://www.olay.com/) links to no public brand guidelines or design-system documentation, so the system above is the de-facto one from shipped CSS.

## Do's and Don'ts

- Do use `#161716` fills with white uppercase Boston labels for the main purchase actions, radius 8px.
- Do set headlines in Boston weight 900 with 1% letter spacing.
- Do keep product cards white with the 16px soft shadow and 12px radius.
- Do let product photography carry color.
- Don't use the `--rb-smart-*` search-widget blue or the Club Olay yellow as interface colors without measuring them on the page.
- Don't style new components from the sign-in pop-up; it is overlay UI.
- Don't add heavy borders; the measured hairline is 1px `#d8d8d8`.

## Responsive Behavior

Measured at 390px: H1 Boston 26px weight 900, H2 24px (line-height 26.76px), body 16px with a 20px line-height, and the "SHOP NOW" button unchanged at 16px with 8px radius and 0px 16px padding. The header band stays `#f4f4f4`. Mobile text sizes by characters are 20px (5814), 14px (1065), 16px (1008), 12px (720) and 13px (283). The stylesheet declares `--font--sub-nav--mobile-size: 14px`, `--madonna-heading-mobile-size: 24px` and a 16px mobile section padding. Column counts and breakpoints below the 1440px desktop variable were not measured.

## Iteration Guide

1. Start from white `#ffffff` and `#fdfdfd` surfaces with `#161716` for action fills.
2. Use Boston at weight 900 for headings and weight 500 for buttons; keep 1% tracking.
3. Use 8px for buttons, 12px for cards, 4px for small controls.
4. Check any new color against the measured palette; the declared-but-unseen variables need a measurement first.
5. Record new measurements in SOURCES.json before adding tokens.
