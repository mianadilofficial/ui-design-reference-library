---
version: alpha
name: The Mall Lifestore
category: "Thai Brands"
description: "The Mall Lifestore (themalllifestore.com), the Bangkae, Bangkapi, Ngamwongwan, Korat and Thapra mall site — a black canvas (#000000) with white text, pure red (#ff0000) for giant DBAiry_Std display headlines up to 160px, GTFlexa_Ext for body, white 5px-radius buttons, and full-bleed night photography of the malls and their promotions."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ff0000"
  on-primary: "#000000"
  surface: "#1e1e1e"
  ink-muted: "#919191"
  ink-light: "#c6c6c6"
typography:
  display:
    fontFamily: "DBAiry_Std, sans-serif"
    fontSize: 160px
    fontWeight: 700
    lineHeight: 200px
  display-mobile:
    fontFamily: "DBAiry_Std, sans-serif"
    fontSize: 54px
    fontWeight: 700
    lineHeight: 34px
  heading:
    fontFamily: "DBAiry_Std, sans-serif"
    fontSize: 96px
    fontWeight: 700
    lineHeight: 96px
  subheading:
    fontFamily: "GTFlexa_Ext, DBAiry_Std, sans-serif"
    fontSize: 16px
    fontWeight: 400
  body:
    fontFamily: "GTFlexa_Ext, DBAiry_Std, sans-serif"
    fontSize: 19px
    fontWeight: 500
    lineHeight: 22.8px
  button:
    fontFamily: "DBAiry_Std, sans-serif"
    fontSize: 19px
    fontWeight: 700
    lineHeight: 19px
  nav:
    fontFamily: "GTFlexa_Ext, DBAiry_Std, sans-serif"
    fontSize: 19px
    fontWeight: 700
  input:
    fontFamily: "DBAiry_Std, sans-serif"
    fontSize: 19px
    fontWeight: 400
rounded:
  xs: 5px
  sm: 14px
  pill: 9999px
spacing:
  s1: 5px
  s2: 10px
  s3: 15px
  s4: 20px
  s5: 25px
  s6: 30px
  s7: 35px
  s8: 40px
  s9: 45px
  s10: 60px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 5px 20px
    height: 29px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.heading}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 10px
    height: 40px
  footer:
    textColor: "{colors.ink}"
    padding: 45px 0px
---

## Overview

The Mall Lifestore (themalllifestore.com) is the shopping-centre site for The Mall Lifestore's branches, and the home page opens with the names of five locations in oversized capitals: BANGKAE, BANGKAPI, NGAMWONGWAN, KORAT and THAPRA. The look is nightlife-cinematic rather than retail-catalogue. Pages are black, text is white, and a single pure red (#ff0000) is used for giant display headlines such as "PROMOTION & PRIVILEGE" and "HAPPENING". Content is carried by photography and promotion posters: an aerial night photograph of a mall facade with a lit red M sign, a slider slide titled "2/7 WONDERS — LIFE WONDER OF EXCITEMENT" showing a water park, and promotion tiles for an M Point campaign and a Bangkok Bank M Visa prepaid card.

The primary navigation has four entries: WHAT'S ON (Promotions, Happenings, PR News/CSR, Blog & Vlog), BRANDS & SHOP (Fashion, Entertainment, Jewelry, Banking, IT, Beauty, Lifestyle), FOOD (Japanese, Thai, Chinese, Fast Food, Italian, Vietnamese, Korean, Salad & Steak, Buffet, Grilled/Shabu, Gourmet, Cafe & Dessert) and ABOUT US (Directory, Retail Solutions, Tourist Benefits, Contact, FAQs). A search icon sits at the left of the bar and five social icons (Facebook, Instagram, X, TikTok, YouTube) at the right. Member services — M Card, Gift Vouchers, Gift Cards, Chat & Shop, Call to Order — appear in the menus, and the footer links to the sister properties Emporium, EmDistrict, EmQuartier, EmSphere and Paragon Department Store.

The voice mixes English display headings with Thai explanatory copy. Slide copy is Thai ("สนุกมหานคร 365 วัน ที่มหานครแห่งใหม่ ..."), and headings are English capitals. At capture time a cookie consent bar and a floating cookie-settings button appeared over the hero; they are consent controls and are not brand elements.

## Colors

- **Canvas (#000000)** is the page background. A second dark surface, **#1e1e1e**, is the largest measured background area and is the stylesheet's `--color-body` value.
- **Ink (#ffffff)** is the text colour for body copy, navigation and footer (8,563 measured characters), and the fill of the main button.
- **Primary red (#ff0000)** is the colour of large display headings, location links, the active carousel dot and the hover state of navigation items. It is the stylesheet's `--color-theme-red: red`. In the extraction the generator picked the white button fill as the "primary" because the button is the only measured control; the capture shows red as the brand accent, so red is declared as `primary` and the white fill stays available as `ink`.
- **On-primary (#000000)** is the label colour on the white button.
- **Muted ink (#919191)** is the grey (`--color-gray`) for secondary text, and **light ink (#c6c6c6)** is `--color-gray-light`.

The stylesheet also defines a dark grey (#393939), a gold (#907949), a form border of 1px solid #c4c4c4 and a white body-background variable; these are theme values and are not visible as large areas on the home page. Interaction colours invert: location links are red at rest and white on hover, while navigation items are white at rest and red on hover.

Photography supplies the rest of the colour: saturated reds, blues, magentas and pool turquoise, which sit comfortably on black. Because promotional posters are themselves very colourful, the interface avoids adding any other hues.

## Typography

Two families are loaded: **DBAiry_Std** (Medium 500 and Bold 700) for display, headings and buttons, and **GTFlexa_Ext** (400) for body and navigation, with DBAiry_Std and a generic sans-serif as fallbacks. Both stacks are listed in the page's own `--font-heading` and `--font-body` variables. An icon font ("iconfont") is also loaded.

The scale is dramatic. The h1 style is 160px at weight 700 with a 200px line height ("PROMOTION & PRIVILEGE", red, cropped by the viewport so that it reads as a marquee), the h2 style is 96px at weight 700 with 96px line height ("HAPPENING", and the location names), and the stylesheet defines further steps at 42px (h3), 26px (h4), 20px (h5), 18px and 12px for subtitles. Body copy is 19px at weight 500 with a 22.8px line height; the nav and button labels are 19px at weight 700; the footer and small text are 16px and 14px. On a 390px viewport the h1 style is 54px at weight 700.

Case is mostly uppercase for headings, navigation and buttons, and sentence case in Thai paragraphs. The weight contrast between huge bold red headings and light-feeling 19px white body creates the page's editorial rhythm.

Font substitutes: both faces are named in the site's stack with a generic sans-serif fallback; use a bold condensed sans for display and a neutral wide sans for body if neither is available.

## Layout

The desktop capture is 1280px wide and 6079px tall. The header height variable is 88px. The page is a stack of full-bleed sections: the location hero (photograph with the five location names centred as a stacked list), the navigation bar over a dark gradient, a full-width slider with circular previous/next arrows and a row of small dots, a red marquee heading, and a two-up grid of promotion posters on a black background, followed by further sections and a tall footer (about 799px high with 45px vertical padding) of link columns.

The stylesheet defines a spacing scale named by size: 5px (3xs), 10px (2xs), 15px (xs), 20px (sm), 25px (2sm), 30px (md), 35px (2md), 40px (lg), 45px (2lg), 60px (xl), 80px (2xl), 100px (3xl), 120px (4xl) and 150px (5xl), plus a 35px container padding. The container width variable is 100%, so the layout is full-bleed rather than boxed. Poster tiles are large and near-square, shown side by side with a small gutter.

## Elevation & Depth

The system is flat and relies on photography, gradients and dark overlays. The navigation bar floats over the slider with a dark gradient wash so that white labels stay legible; slide captions sit at the lower left over a dark gradient on the photograph. There are no drop shadows on cards. The stylesheet defines a CTA inset line (`0 -0.5px 0 0 inset`) as the only shadow-like value. Motion tokens are 0.3s, 0.6s and 0.9s durations with ease-in-out timing.

At capture time a black consent bar with a red accept button and a bordered decline button floated near the middle of the hero; it is a popup, not an elevation level in the system.

## Shapes

Radii are small and simple. The stylesheet's default radius is 4px, the measured button radius is 5px (`rounded.xs`), the second measured radius is 14px (`rounded.sm`) and circles are used for carousel arrows and dots (50% is the most frequent measured radius, on 23 elements, against 10 for 5px). The promotion posters are square-cornered rectangles. Text inputs are 40px high with 10px padding and a 1px light-grey border.

Shapes inside the photography — a lit red M sign, a stack of waterslides — do the visual work, so the interface shapes stay quiet.

## Components

**Primary button.** White fill (#ffffff), black label (#000000) at 19px weight 700, 5px 20px padding, 29px high, 5px radius. The measured example is "GRAPHIC MAP", a mall-map link; a secondary map link ("GOOGLE MAP") is dark grey (#393939) with grey text (#919191).

**Navigation.** Four uppercase items at 19px weight 700 in white over a gradient strip, turning red on hover, with a search icon at the left and social icons at the right.

**Location links.** 96px red capitals at weight 700 that turn white on hover.

**Slider.** Full-width photographs with a small uppercase kicker ("2/7 WONDERS"), an English headline, a Thai summary, circular arrow buttons and dots (the active dot is red).

**Marquee heading.** 160px red capitals crossing the viewport edge.

**Promotion tile.** Full-bleed poster images, labelled "STORE PROMOTION" and "CREDIT CARD PROMOTION", each linking to a campaign.

**Search input.** 40px high, 10px padding, 19px text, white text on black.

**Footer.** Black with white 16px links in columns: PROMOTION, HAPPENING, PR NEWS/CSR, BLOG & VLOG, BRAND & SHOP and more.

**Cookie bar and settings button (excluded).** Consent controls, not brand components.

## Design System Architecture

No public design system or brand guideline for The Mall Lifestore was found among the pages I opened (https://themalllifestore.com/ and its about-us path, which returned a 404). The shipped CSS does expose a token layer in root custom properties: colour variables (`--color-theme-red`, `--color-gray`, `--color-gray-light`, `--color-gray-dark`, `--color-gold`, `--color-body`, `--color-border`), type variables (`--font-heading`, `--font-body`, `--font-size-h1` to `--font-size-h5`, `--font-size-body1`, `--font-size-body2`, `--font-size-sub1`, `--font-size-sub2`), a size-named spacing scale (`--spacing-3xs` to `--spacing-5xl`), layout variables (`--header-h`, `--container-padding`, `--container-width`), form variables (`--input-height`, `--input-border`, `--radius`) and motion variables (`--duration`, `--transition`, `--timing-function`).

Those variable names are the de-facto design system. The values in this file match them: the 160px, 96px, 42px, 26px and 20px heading steps, the 19px body size, the 5px to 150px spacing steps, the 4px default radius and the red and grey colour variables. Swiper adds its own default variables (for example a blue `--swiper-theme-color`), which are library defaults and not brand colours.

## Do's and Don'ts

Do keep the canvas black and text white, and use #ff0000 only for large display type, hover states and the active dot. Do set headings in DBAiry_Std bold capitals at very large sizes and let them crop at the viewport edge. Do use full-bleed night photography and promotion posters as the main content. Do keep buttons white with black labels and a 5px radius. Do invert colours on hover (white to red for navigation, red to white for location links).

Don't introduce additional accent colours; the posters already supply colour. Don't use rounded pill buttons or drop shadows. Don't shrink display headings to body-adjacent sizes on desktop; the contrast in scale is the identity. Don't present the cookie bar, the cookie-settings button or its red accept button as brand UI. Don't box the layout in a narrow container; the site is full-bleed.

## Responsive Behavior

The extractor measured the page at 1280px and 390px. At 390px the h1 style drops from 160px to 54px (weight 700) and body text is smaller than on desktop; the header-height variable is 88px, and the stylesheet carries separate `--vh` and `--dvh` variables for mobile viewport height handling. The container is 100% wide at all widths, so photographs and posters stay full-bleed.

Which navigation pattern replaces the four-item bar on small screens was not captured, so none is claimed. The marquee headline, slider arrows and dots are the same components at both widths.

## Iteration Guide

1. Start with #000000 canvas, #ffffff text and a #1e1e1e secondary surface.
2. Use DBAiry_Std 700 for headings (160px, 96px, 42px, 26px, 20px steps) and GTFlexa_Ext 500 at 19px/22.8px for body.
3. Reserve #ff0000 for large display headlines, the active dot and hover states.
4. Make buttons white with black 19px bold labels, 5px 20px padding, 5px radius.
5. Use the size-named spacing scale from 5px to 150px with a 35px container padding.
6. Build sections full-bleed with photography first, then the poster tiles.
7. Invert hover colours (white to red for nav, red to white for locations).
8. Leave out consent bars and floating cookie buttons; check new values against web/data/extracted/the-mall-lifestore.json.
