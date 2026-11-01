---
version: alpha
name: MSIG Insurance (Thailand)
category: "Thai Brands"
description: "MSIG Insurance (Thailand) English homepage: Ubuntu type with 36px bold navy (#272660) headlines, red (#dd2830) pill buttons at 15px radius with uppercase 14px labels, white cards with 20px radius and hairline borders on a #ebebeb promo band, duotone navy-and-red icons and photographic hero banners."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#dd2830"
  on-primary: "#ffffff"
  surface-2: "#ebebeb"
  surface-3: "#272660"
  ink-2: "#212529"
  ink-5: "#000000cc"
  hairline: "#b7b7b780"
  indigo-deep: "#1c0761"
typography:
  display:
    fontFamily: Ubuntu, Helvetica, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43.2px
  display-mobile:
    fontFamily: Ubuntu, Helvetica, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 33.6px
  heading:
    fontFamily: Ubuntu, Helvetica, sans-serif
    fontSize: 64px
    fontWeight: 700
    lineHeight: 76.8px
  body:
    fontFamily: Ubuntu, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Ubuntu, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 38px
    textTransform: uppercase
  nav:
    fontFamily: Ubuntu, Helvetica, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 17px
rounded:
  xs: 3px
  sm: 5px
  md: 6px
  lg: 7px
  xl: 10px
  2xl: 15px
  3xl: 20px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 22px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 8px 20px
    height: 55px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 8px 22px 8px 39px
    height: 36px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 4px 4px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 39px 17px 32px 0px
  card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.3xl}"
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink}"
---

# MSIG Insurance (Thailand) — Design System Notes

## Overview
Measured URL: https://www.msig-thai.com/en (title "MSIG Insurance (Thailand) Public Company Limited | Home", language en). MSIG Thailand is a general (non-life) insurer. The homepage navigation is Insurance (Personal and Business), Claims, Our Services, Travel Services, Highlights, About and Contact Us, and the footer carries the company address on New Petchburi Road in Bangkok, a 24-hour hotline (1259), social links and legal links.

Read top to bottom, the page is a retail storefront for insurance. A thin navy utility strip holds an "EN" language dropdown and a small "Login" button. Below it, a white header places the centered logo (a red-and-navy mark with "MSIG" and the Thai wordmark "เอ็ม เอส ไอ จี ประกันภัย") between two groups of menu items, with a navy rounded-square search button and a red rounded-square cart button at the far right. A full-width carousel shows campaign artwork: in the capture, a three-dimensional red "MSIG PRIVILEGE" wordmark on a blue sky with clouds, a smiling man holding a phone and floating gift and heart icons. Under it, a bold navy statement, "Discover MSIG Thailand's comprehensive general insurance solutions for personal and business needs", precedes a Personal / Business tab pair with outline icons, and a row of five product icons (Motor, Travel, Home, Health, Golf) drawn in navy with red accents. A light gray band, "Deals & delights: Our latest promotions", holds three white cards with a photograph, a navy tag chip ("Travel: Domestic", "Motor"), a bold title, a red "Offer ends ..." line, a "Learn more" link and a red "BUY NOW" pill with a cart icon, followed by an outlined "SEE ALL PROMOTIONS" button. A testimonials band, "Praise & Plaudits: Customer testimonials", repeats the card pattern with star ratings.

A small navy rounded-square widget floats at the right edge of the capture; it is a chat or accessibility-style overlay, not documented as brand UI.

## Colors
- **Canvas `#ffffff`**: dominant background (area-weight 3,525).
- **Ink `#000000`**: primary text (2,950 characters); **`#212529`** (`ink-2`) is the next most common text color (1,394 characters) and is Bootstrap's default body color; **`#000000cc`** (`ink-5`) is soft black used for 439 characters of running text.
- **Primary red `#dd2830`**: fills the CTAs ("SEE ALL AWARDS", "BUY NOW") with white `#ffffff` text, and colors 298 characters of text such as "Offer ends 31 January 2027!", the selected tab and some icons.
- **Navy `#272660` (`surface-3`)**: the h1 color, tag chips, the top utility strip and carousel pagination; 450 characters of text and a solid fill area.
- **Deep indigo `#1c0761`**: measured as the fill of the secondary "CONTACT US" and "DOWNLOAD" buttons in the extraction (area-weight 22); it is added as `indigo-deep`.
- **Light gray `#ebebeb` (`surface-2`)**: the promotion band background (area-weight 1,148).
- **Hairline `#b7b7b780`**: the 50%-alpha gray border around cards.

## Typography
A single family, **Ubuntu** (with Helvetica and sans-serif fallbacks), carries 6,364 characters. The loaded font list shows Ubuntu at 300, 400 and 500 plus an italic file, and FontAwesome for icons; bold headings are measured at weight 700 on the live page.

- `display`: 36px / 43.2px, weight 700 (page statements such as "Discover MSIG Thailand's ...").
- `display-mobile`: 28px / 33.6px, weight 700 at 390px.
- `heading`: 64px / 76.8px, weight 700 (the white banner heading "Bringing you an improved experience").
- `body`: 16px / 24px, weight 400.
- `button`: 14px / 38px, weight 700, uppercase.
- `nav`: 15px / 17px, weight 400.

Ubuntu is an open font (Canonical); no substitute is needed, although Thai text on the page (for example the Thai explanatory titles in the lifestyle section) falls back to the browser's Thai font because Ubuntu has no Thai glyphs.

## Layout
Width 1280px, height 4369px. A centered 1280px-wide logo-centered header, then alternating full-width bands: white, #ebebeb, white. Each band centers its heading and uses a three-card row with carousel arrows and pagination bars (a short navy bar for the active page and light gray bars for others). Navigation items have `39px 17px 32px 0px` padding, so the header is tall and airy. Cards sit on a three-column grid with consistent gutters; promotional and testimonial rows are separated by large vertical gaps.

## Elevation & Depth
Almost flat: the only shadow measured on the page is the header's `rgba(0, 0, 0, 0.15) 0px 4px 4px 0px`. The Login button's hover state (measured) goes from `#f8f9fa` to `#d3d4d5` and adds a `rgba(0, 0, 0, 0.3) 0px 0px 10px 0px` glow. Cards rely on a hairline border rather than shadow.

## Shapes
Radii measured: 6px (24 uses), 20px (20), 15px (13), 3px (11), 10px (6), 7px (4) and 50% (3). The scale in the tokens is `xs` 3px, `sm` 5px, `md` 6px, `lg` 7px, `xl` 10px, `2xl` 15px, `3xl` 20px and `pill`. Buttons use `2xl` (15px) and cards use `3xl` (20px), so the buttons are generously rounded rectangles; tag chips use the small radii.

## Components
- **button-primary**: `#dd2830` fill, white text, 14px/700 uppercase, 15px radius, `8px 20px` padding, 55px high (measured on "SEE ALL AWARDS").
- **button-secondary** (the "BUY NOW" pill with a cart icon): `#dd2830` fill, white text, 15px radius, `8px 22px 8px 39px` padding (extra left padding for the icon), 36px high.
- **Outline button** ("SEE ALL PROMOTIONS"): transparent with a red border and red text.
- **card**: white with `#b7b7b780` border and 20px radius.
- **nav**: white with the 4px-offset shadow; **nav-link**: black, 15px.
- **Tag chip**: navy fill, white small text.

## Design System Architecture
No public design system or brand-guideline page was linked from the homepage (the footer lists terms, privacy, cookies and sitemap) so no search was run. The CSS corpus is Bootstrap-based (the Login button hover colors `#f8f9fa` and `#d3d4d5` are Bootstrap's light-button defaults), with brand overrides: red `#dd2830`, navy `#272660` and the card radii. Colors are applied by component classes rather than published tokens.

## Do's and Don'ts
- Do use navy for headlines and red only for actions and urgency lines ("Offer ends ...").
- Do round buttons at 15px and cards at 20px.
- Do keep promo cards white on a `#ebebeb` band.
- Don't use Bootstrap's default light-button gray as a brand fill.
- Don't put red text on large bodies of copy; the red is a signal color.
- Don't treat the floating side widget as part of the system.

## Responsive Behavior
The mobile measurement at 390px reduces the display type from 36px to 28px with a 33.6px line height. Carousels with arrows and pagination bars replace wide rows; other breakpoints were not measured.

## Iteration Guide
1. Build on white and `#ebebeb` bands; headlines in navy `#272660`, Ubuntu 700, 36px.
2. Use one red `#dd2830` uppercase button per card or banner, 15px radius.
3. Add outline-red buttons for "see all" actions.
4. Pair every product with a duotone navy-and-red icon.
5. Keep photography lifestyle-led (couples traveling, cars on mountain roads).

## Content and Voice
Section titles use alliteration and a light, friendly tone: "Deals & delights: Our latest promotions" and "Praise & Plaudits: Customer testimonials", with sibling headings "Our commitment to excellence" and "Lifestyle library". Product copy is concrete and offer-led, for example "Enter a promocode MPTT15 to get e-Voucher worth up to 700 THB* for MSIG Motor insurance", always paired with a deadline in red. Calls to action are short imperative verbs in uppercase: "BUY NOW", "SEE ALL PROMOTIONS", "CONTACT US", "DOWNLOAD". Testimonials are first-person, name only the reviewer's first initial and surname fragment (for example "K.Pimlapat") and are tagged with the product icon (Motor) and a five-star row, which gives the page a social-proof rhythm that contrasts with the more formal navy statements above it.
