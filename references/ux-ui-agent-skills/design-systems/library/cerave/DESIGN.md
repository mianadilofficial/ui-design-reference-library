---
version: alpha
name: CeraVe
category: "Beauty & Personal Care"
description: "CeraVe US homepage: white canvas, navy #003057 and #0e3353 text and footer, CeraVe blue #0772ba actions, square 0px buttons in DIN-Bold uppercase with 1px letter-spacing, Open Sans body, and a rainbow of nine category-tab fills under product carousels."
colors:
  canvas: "#ffffff"
  ink: "#003057"
  ink-black: "#000000"
  ink-soft: "#262626"
  ink-muted: "#666666"
  ink-blue: "#0072ce"
  primary: "#0772ba"
  on-primary: "#ffffff"
  navy: "#0e3353"
  navy-hover: "#08233b"
  primary-hover: "#004c92"
  blue-band: "#0072ba"
  category-navy: "#002d72"
  category-green: "#43b02a"
  category-teal: "#00b0b9"
  category-cyan: "#0096c2"
  category-periwinkle: "#5c88da"
  category-amber: "#f2a900"
  category-purple: "#5a2d8a"
  surface-gray: "#f2f2f2"
  neutral-gray: "#aaadae"
  card-border: "#e1e4e8"
  text-input-bg: "#f2f2f2"
typography:
  display:
    fontFamily: DIN-Bold
    fontSize: 40px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: 1.5px
    textTransform: uppercase
  heading:
    fontFamily: OpenSans-Bold
    fontSize: 24px
    fontWeight: 300
    lineHeight: 31.2px
    letterSpacing: 0.1px
  body:
    fontFamily: OpenSans-Regular
    fontSize: 14px
    fontWeight: 300
    lineHeight: 18.2px
    letterSpacing: 0.1px
  button:
    fontFamily: DIN-Bold
    fontSize: 20px
    fontWeight: 300
    lineHeight: 16px
    letterSpacing: 1px
    textTransform: uppercase
  button-secondary:
    fontFamily: DIN-Bold
    fontSize: 16px
    fontWeight: 300
    lineHeight: 16px
    letterSpacing: 1px
    textTransform: uppercase
  nav:
    fontFamily: OpenSans-Regular
    fontSize: 16px
    fontWeight: 300
    letterSpacing: 0.1px
  link:
    fontFamily: DIN-Regular
    fontSize: 18px
    fontWeight: 700
    letterSpacing: 0.1px
  input:
    fontFamily: DIN-Regular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19px
    letterSpacing: 0.2px
rounded:
  none: 0px
  xs: 4px
  sm: 6px
  md: 10px
  lg: 18px
  xl: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 6.4px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 20px
    height: 58px
  button-secondary:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 15px 22px
    height: 48px
  button-secondary-hover:
    backgroundColor: "{colors.navy-hover}"
    textColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.none}"
    padding: 0px 60px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 0px 1px 0px, rgba(0, 0, 0, 0.15) 0px 0px 3px 0px
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-black}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 1px 35px 1px 10px
    height: 40px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 0px 0px 72px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 152px 60px 92px
---

## Overview

CeraVe's US homepage (`https://www.cerave.com/`, title "Welcome to CeraVe: Your Skincare & Haircare Expert | CeraVe") is a clinical-retail page: a white store-like canvas, deep navy text and a footer, one medical blue for interactive controls, and large-scale product photography doing the selling. It is 8,450px tall at 1280px width and is built from clearly separated horizontal bands: a thin announcement strip, a two-row header, a purple hero carousel, a row of blue claim phrases, a product-category carousel under a colored tab strip, an editorial split with a model photograph, a "New Launches" product row, and a 1,042px navy footer.

The tone is dermatologist-led and reassuring. The measured promotional strip reads "CLAIM A FREE PREMIUM SAMPLE OF OUR ANTI-DANDRUFF HYDRATING SHAMPOO: CLAIM SAMPLE". The hero kicker is "INTRODUCING" over "BRIGHTENING VITAMIN C LOTION" with "VISIBLY REDUCE DISCOLORATION, DARK SPOTS, AND DARK PATCHES IN JUST 4 WEEKS." The claim row repeats short proof phrases separated by vertical bars ("Fragrance Free | Developed With Dermatologists | Gentle On All Skin-Types"), and the editorial block uses a plain-spoken headline: "If your Skin Squeaks, Your Barrier Is Weak".

Imagery is product-first: bottles photographed on pale or branded-color backdrops with the CeraVe wordmark facing the camera, plus one close-up model photograph with foam. Product cards carry a one-line audience chip ("All Skin Types", "Normal to Oily Scalp & Hair"), a name, a price ("$29.99", "$16.99", "$7.99", "$10.99") and a "BUY ONLINE" button.

Measurement note: a cookie-consent banner (`onetrust-banner-sdk`) was hidden before measuring and is not documented as brand UI. A chat-style help bubble visible in the capture is a third-party control and is also excluded.

## Colors

The measured background areas rank white `#ffffff` (2,941 units), navy `#0e3353` (2,711), blue `#0072ba` (1,368), light grey `#f2f2f2` (1,270) and dark blue `#002d72` (909). Text by characters is led by white (footer and hero), then navy `#003057` (943), black `#000000` (887), `#262626` (719), `#0072ce` (588), `#0772ba` (357), `#666666` (295) and `#0e3353` (267).

- **Canvas `#ffffff`**; **surface gray `#f2f2f2`** for the search field and the product-carousel backdrop.
- **Ink `#003057`** is the brand navy for text; **`#000000`** is the paragraph and nav color; **`#262626`** and **`#666666`** carry secondary copy.
- **Primary `#0772ba`** is the fill of the "SEE OUR FAQ" button and the border/text color of the outlined "WHERE TO BUY" button (hover `#004c92` for both text and border). `on-primary` is white.
- **Navy `#0e3353`** fills "EXPLORE NOW" and "SHOP NOW" buttons (hover `#08233b`), colors the h2 headline, and is the full footer background.
- **Blue band `#0072ba`** is a large measured area; the search button in the header is a blue square. **Ink blue `#0072ce`** colors the large claim-phrase row.
- **Category tab palette**: the strip under the product carousel cycles through nine measured fills: `#43b02a` green, `#00b0b9` teal, `#002d72` dark blue, `#0072ba` blue, `#0096c2` cyan, `#5c88da` periwinkle, `#f2a900` amber, `#5a2d8a` purple and `#0072cf` blue. The capture shows the tabs labelled FACIAL CLEANSERS, ACNE, FACIAL MOISTURIZERS, BODY MOISTURIZERS, HAIRCARE, BABY and SUNSCREEN with white or dark labels on these fills.
- **Card border `#e1e4e8`**, **neutral gray `#aaadae`** (the "JOIN" button fill with a white label), plus a purple `#5d3189` text color on a small amount of copy; the hero's purple backdrop is part of the hero artwork, not a measured CSS fill.

## Typography

Two families in per-weight files. The extractor recorded six faces: `OpenSans-Light` (declared 100), `OpenSans-Regular` (400), `OpenSans-Bold` (700), `DIN-Regular` (400), `DIN-Medium` (600) and `DIN-Bold` (700). The CSS requests `font-weight: 300` on many elements set in `OpenSans-Bold` and `DIN-Bold`; the family name itself carries the weight, so the measured weight numbers (300 for 2,450 weighted characters, 400 for 1,775, 700 for 682) do not describe visual weight. DIN is the display and control face; Open Sans is the reading face. Weight 800 appears on 71 characters.

- **Display**: `DIN-Bold` 40px / 32px, letter-spacing 1.5px, uppercase, white in the hero ("BRIGHTENING VITAMIN C LOTION"); orange-toned emphasis is visible on "VITAMIN C" in the capture, and text color `#e46e38` is measured on 9 characters.
- **Heading**: `OpenSans-Bold` 24px / 31.2px, letter-spacing 0.1px, navy `#0e3353`.
- **Body**: `OpenSans-Regular` 14px / 18.2px, 0.1px tracking, black; 14px is the most-used size (1,793 characters), followed by 12px (767), 24px (678) and 10px (516).
- **Button**: `DIN-Bold` 20px uppercase with 1px tracking for the large blue button; 16px for the navy secondary buttons; 14px at mobile.
- **Link**: `DIN-Regular` 18px, 700.
- **Input**: `DIN-Regular` 14px / 19px, 0.2px tracking.
- A 36px display line ("New Launches") measures `-0.91px` letter-spacing (207 characters); a 24px / `0%` light line carries the blue claim row.

Font substitute if DIN and Open Sans files are unavailable: Open Sans is a public typeface (Google Fonts), and DIN-Bold can be substituted by a condensed DIN-style grotesque; the substitution is a suggestion, not a measurement.

## Layout

The page is 1280px wide with a 60px horizontal padding on the header (`0px 60px`) and the footer (`152px 60px 92px`). The header is 152px tall and holds two rows: a utility row (Contact Us, FAQs, Coupons, Find A Derm, For Health Care Providers, a 189×40px search field with a blue square button, and a language selector) and a main row of uppercase links (NEW & TRENDING, SKINCARE, HAIRCARE, EDUCATION, ABOUT CERAVE, FIND MY ROUTINE, with a red "NEW" flag), ending in the outlined "WHERE TO BUY" button.

Content rows run edge to edge for the hero and tab strip and use a left margin matching the header for the editorial and product sections. The editorial block places text at 590px wide on the left and a large photograph on the right. The product row in the capture runs past the right edge, with thumbnail, chip, name, price and button; a horizontal progress bar and carousel dots show scroll position. Measured gaps are 4px (46 uses), 2px and 14px (18 each) and 64px (12); paddings 6px, 8px and 4px dominate, with 40px (22), 16px (19) and 60px (10) for section spacing.

## Elevation & Depth

Elevation is minimal. The header carries a hairline double shadow `rgba(0, 0, 0, 0.15) 0px 0px 1px 0px, rgba(0, 0, 0, 0.15) 0px 0px 3px 0px`. Two stronger shadows are measured once each, `rgba(0, 0, 0, 0.1) 0px 2px 2px 0px, rgba(0, 0, 0, 0.3) 0px 4px 8px 0px` and `rgba(0, 0, 0, 0.05) 0px 2px 2px 0px, rgba(0, 0, 0, 0.15) 0px 4px 8px 0px`. Cards rely on a 1px border (`#e1e4e8`, 9 uses) and on photographic backdrops, not shadow. Buttons carry no measured shadow.

## Shapes

Controls are square: the primary, secondary and input all measure 0px radius, giving the page a clinical, label-like look. Radius appears in containers: 10px (21 measured uses) for cards, split radii `10px 10px 0px 0px` and `0px 0px 10px 10px` (9 uses each) for the image and text halves of a product card, 6px (9), 18px and 50px (2 each), 4px (1), and `50%` (15) for circular elements such as the carousel arrow and dots.

## Components

- **Announcement strip**: full-width dark navy bar, white 18px DIN-Regular uppercase copy with an underlined "CLAIM SAMPLE" link and a close glyph.
- **Primary button**: `#0772ba` fill, white DIN-Bold 20px uppercase, 250×58px, 20px padding, 0 radius.
- **Secondary button**: `#0e3353` fill, white 16px DIN-Bold uppercase, 165×48px, `15px 22px` padding. Hover darkens the fill to `#08233b`. An outline variant (transparent fill, navy 1px border and text) turns white with a `#004c92` text and border on hover; on the hero, a white-outline variant turns white-filled with navy text.
- **Outlined buttons**: "WHERE TO BUY" (`#0772ba` text and border on white, 46px tall), "LEARN MORE" and "TAKE THE QUIZ" (14px, `12px 14px` padding, `#0072ba` border, 45px tall), and "BUY ONLINE" on every product card.
- **Search field**: `#f2f2f2` fill, 189×40px, DIN-Regular 14px, padding `1px 35px 1px 10px`, 0 radius.
- **Header**: white, `0px 60px` padding, hairline double shadow.
- **Product card**: 10px radius, `#e1e4e8` border, an audience chip over the name, price in bold DIN, and the outlined buy button.
- **Footer**: `#0e3353`, white 18px/700 uppercase column headings (PRODUCT HELP and others), link lists below, 1,042px tall.

## Design System Architecture

No public design-system site or brand-guideline page was found on the pages opened (the homepage at `https://www.cerave.com/` and its header and footer links). The de-facto system is visible in the shipped CSS: type is assembled from per-weight font families (`OpenSans-Light`, `OpenSans-Regular`, `OpenSans-SemiBold`, `OpenSans-Bold`, `DIN-Light`, `DIN-Regular`, `DIN-Medium`, `DIN-Bold`), and the only recorded `:root` custom property is `--outline-color: #0772ba`, the focus-outline color that equals the primary action blue. The stylesheet also declares a long tail of unused or icon font families (`awe-font`, `Material Icons`, `Material Symbols Outlined`, `Montserrat`, `Raleway`, `Lato`, `Playfair Display` and others) that the home page did not render. Component naming and token structure are not exposed, so the system is described from measured values only.

## Do's and Don'ts

Do:
- Use square 0px-radius buttons with uppercase DIN-Bold labels and 1px tracking.
- Use navy `#0e3353` for fills, headlines and the footer; use `#0772ba` for primary action and the focus outline.
- Let product photography carry color; give each product family its own tab color from the category palette.
- Pair every product card with an audience chip, a price and an outlined "BUY ONLINE" button.

Don't:
- Don't round buttons or inputs; only containers measure 10px.
- Don't use a second blue for actions; `#0772ba` and `#0072ba` are the measured pair, and the hover color is `#004c92`.
- Don't document the cookie banner or the chat bubble as brand UI.
- Don't treat the weight 300 values as visual weight; weights come from the family files.

## Responsive Behavior

Measured at a 390px viewport (mobile pass): the hero headline stays DIN-Bold 40px but with a 28px line-height and a `#0e3353` color (white on desktop), in a 260px-wide box. The h2 stays 24px / 31.2px in a 358px-wide box, 62px tall, and the body paragraph stays 14px / 18.2px at 358px wide (127px tall; 73px tall at 590px on desktop). The primary button changes from 20px text, 250×58px with 20px padding to 14px text, 280×48px with 15px padding. The mobile font-size table is led by 14px (1,875 characters), 24px (967), 12px (855), 10px (459). The header layout, navigation pattern and number of product columns at mobile width were not recorded, so they are not measured. Tablet widths and dark mode were not measured.

## Iteration Guide

1. Start with white canvas, navy `#003057` / `#0e3353` text and the blue `#0772ba` for action and focus.
2. Set headings and controls in DIN-Bold uppercase with 1px to 1.5px letter-spacing, reading copy in Open Sans 14px.
3. Keep every button and input square; keep 10px radius for cards only.
4. Color-code product families with the nine-fill category palette and white or navy labels.
5. Use a hairline double shadow on the header and a 1px `#e1e4e8` border on cards.
6. Use the measured hover values: `#004c92` for outlined blue buttons, `#08233b` for navy buttons.
