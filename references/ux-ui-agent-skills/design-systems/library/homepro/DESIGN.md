---
version: alpha
name: HomePro
category: "Thai Brands"
description: "HomePro (โฮมโปร) Thai home-improvement retail site measured live: Prompt typeface throughout, brand blue #0065b2 header, footer and CTAs with white text, #112332 body ink, #da3731 sale red, 10px button radius, 44px buttons, 48px search input, dense promo-tile grid on a white canvas."
colors:
  canvas: "#ffffff"
  ink: "#112332"
  primary: "#0065b2"
  on-primary: "#ffffff"
  surface-3: "#0066b3"
  ink-2: "#da3731"
  ink-4: "#525255"
  ink-6: "#99999c"
  hairline: "#e0e0e3"
  text-input-text: "#000000de"
typography:
  display:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.999px
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 23.1429px
  button:
    fontFamily: Prompt
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.999px
  link:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 600
    lineHeight: 21px
  input:
    fontFamily: Prompt
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.8571px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 20px
  4xl: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 9px 16px 10px
    height: 44px
  link:
    textColor: "{colors.ink-4}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 12.2143px 45px 12.2143px 18px
    height: 48px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    padding: 60px 0px 40px
---

## Overview
HomePro is the Thai home-improvement and appliance retailer, and the measured home page (https://www.homepro.co.th/, lang `th`, title "โฮมโปร | รวมเครื่องใช้ไฟฟ้า เฟอร์นิเจอร์และของตกแต่งบ้านแบบครบวงจร") is a dense retail storefront rather than a brand showcase. The capture shows a solid blue header band carrying the HomePro logo, a delivery-location picker, a wide white search field and cart icons; below it a category mega-menu strip, a pale promo-category ribbon, and a large carousel of campaign banners beside a 2x2 grid of pale-blue promotional tiles. Further down come four blue service tiles (same-day delivery, in-day, normal, pick-up at branch), an icon grid of services, a coupon strip, and brand-led "double brand" discount cards for partner brands.

The system is built for scanning many offers at once. Blue (`#0065b2`) is the structural colour for the header, the footer and the primary button; red (`#da3731`) is the second most frequent text colour and carries prices and discount numbers; orange appears as a hover and highlight accent. Everything is set in a single family, Prompt, which supports Thai and Latin. Microcopy is Thai first, with TH / EN toggles at the top right, and promotional copy is short and numeric ("ลดสูงสุด", "0%", "ช้อปเลย").

## Colors
The canvas is white (`#ffffff`), the largest background by area (weight 12330 in the extraction), followed by the brand blue `#0065b2` (797) and the header blue `#0066b3` (288). Pale neutral surfaces appear as `#f9f9fc`, `#f1f1f4`, `#f9f9fb` and the light blue `#ebf3fa`.

- **Primary** `#0065b2`: the "ดูร้านค้า" button fill, the footer background and the CSS variables `--cart-button` and `--primary-colors-blue`. Text on it is white (`on-primary`).
- **Ink** `#112332`: the most-read text colour (5730 characters), used on white for body copy and headings.
- **Sale red** `#da3731`: the second most-read text colour (2617 characters). The page declares it as `--secondary-color-red-500`; it is the price and discount colour in the promo tiles.
- **Greys**: `#525255` (link text, `--neutral-colors-gray-800`), `#99999c` (muted text) and `#e0e0e3` (hairline border, `--neutral-colors-gray-400`).
- **Orange accent**: `--primary-colors-orange` is `#F79421`; the measured hover on the top-bar link "สมัครเป็นผู้ขาย" changes its text and border colour from white to rgb(247, 148, 33).
- The page also declares scales for deep blue (100 to 900, for example `#EAF5FF`, `#88CCFF`, `#004C86`), green (`#07BE87`, `#00A674`, `#01825B`) and red (`#E94A44`, `#AF2823`) as root variables.

The `text-input-text` token `#000000de` is the measured colour of the search input text. Third-party widget colours such as the Swiper default `#007aff` are not brand colours and are not used.

## Typography
Prompt is the only font family measured (14151 characters), loaded in weights 400, 500, 600 and 700; weights 300 (4271 characters) and 400 (7510) dominate usage, with 600 and 700 for links and headings. The most-used size is 14px (8723 characters), then 16px, 18px, 21px, 12px, 11px, 13px and 32px.

- **display** (the measured first-heading role): Prompt 16px / 400, line-height 19.999px.
- **subheading** (footer column titles, h3): Prompt 18px / 700, line-height 23.1429px.
- **button**: Prompt 14px / 400, line-height 19.999px.
- **link**: Prompt 16px / 600, line-height 21px.
- **input**: Prompt 18px / 400, line-height 21.8571px.

No letter-spacing is set on the measured roles (`normal`) and no text-transform is applied. Large numerals in the promotional banners are image artwork rather than live type. Prompt is a Google Fonts family, so no substitute is required.

## Layout
The page is 1280px wide in the desktop pass and scrolls 11853px. The structure is a full-width blue header (129px tall for the nav role, spanning the top utility links, logo, location pickers, search and icons), a category row, then content blocks that fill the width: a wide carousel beside a 2x2 tile grid, four equal service tiles, a five-column icon grid, a four-up coupon row, and four-column brand cards. The footer is a blue block with 60px top and 40px bottom padding. Density is high: the measured spacing values are small steps (1, 2, 4, 5, 6, 8, 9, 10, 12 and 14px) and the rhythm between blocks is carried by the tiles' own borders rather than large gaps.

## Elevation & Depth
Depth is modest. The measured shadows are soft offset shadows such as `rgba(0, 0, 0, 0.2) 3px 3px 8px 0px` and `rgba(0, 0, 0, 0.12) 3px 3px 6px 0px` on a few cards, plus a white 5px ring (`rgb(255, 255, 255) 0px 0px 0px 5px`) and an inset 1px outline. Most separation comes from 1px hairline borders in `#e0e0e3` and from the pale-blue tile fills against the white canvas. The service tiles in the capture sit on blue fills with a slight lift beneath them.

## Shapes
Radius frequencies on the live site: 10px (248 elements), 6px (188), 50% (128, avatar and icon circles), 4px (67), 8px (38), 12px, 50px, 20px and 16px in smaller counts. The primary button and the card both use 10px; the search input is square on its left and rounded 10px on its right edge (`0px 10px 10px 0px`) because it joins a category dropdown. Pills use 9999px in the token set for fully rounded chips. Tiles and banners in the capture are softly rounded rectangles; icons are flat illustrations in blue and orange.

## Components
- **button-primary**: fill `#0065b2`, white 14px Prompt text, 10px radius, padding 9px 16px 10px, height 44px. Measured label: "ดูร้านค้า".
- **nav**: `#0066b3` background, white 14px text; the utility links (โฮมการ์ด, สมัครเป็นผู้ขาย, ค้นหาสาขา, ศูนย์ช่วยเหลือ) turn orange on hover.
- **text-input**: white background, 18px Prompt text, 48px tall, padding 12.2143px 45px 12.2143px 18px, with a search icon at the right.
- **card**: white fill, 10px radius, 1px `#e0e0e3` border, ink `#112332` text.
- **link**: `#525255`, 16px weight 600.
- **footer**: `#0065b2` fill with white text, 60px 0 40px padding, columns titled in 18px bold ("ช่วยเหลือ" and others).
Small blue "เก็บ" (collect) buttons on the coupon cards and underlined blue text links ("เก็บเพิ่มเติม") repeat the same blue.

## Design System Architecture
No public design system or brand guideline was found; this is the de-facto system recovered from the shipped CSS. The page exposes 112 root variables with a clear naming scheme: `--primary-colors-blue`, `--primary-colors-orange-100` to `-900`, `--primary-color-deep-blue-100` to `-900`, `--primary-color-green-*`, `--secondary-color-red-*` and `--neutral-colors-gray-*`, plus `--fontFamily: 'Prompt'` and `--cart-button`. The scales are numbered tints of each hue, which is how the site gets its pale blue tile fills and red sale accents. The stack also includes Swiper (its `--swiper-theme-color` and `--swiper-navigation-size: 44px` variables are visible) and several icon fonts ("icons", "outline-icons", "swiper-icons").

## Do's and Don'ts
- Do use `#0065b2` for the header, footer and primary buttons, with white text.
- Do set Thai and Latin text in Prompt; use weight 400 for body and 600 to 700 for emphasis.
- Do keep buttons at 10px radius and 44px height, inputs at 48px.
- Do reserve `#da3731` for prices, discounts and sale emphasis.
- Don't use the Swiper default `#007aff` or browser link blue as brand colours.
- Don't add heavy shadows; separate content with 1px `#e0e0e3` borders and pale tile fills.
- Don't document the cookie popup (hidden during capture) as brand UI.

## Responsive Behavior
The mobile pass was recorded at 390px width. Measured there: the nav role is 390px wide and 129px tall, the primary button "ดูร้านค้า" is still 158px by 44px at 14px Prompt, and the first-heading role stays at 16px. The font-size distribution is identical to desktop (14px most frequent). No other breakpoints, column changes or menu behaviour were measured; not measured.

## Iteration Guide
1. Start from white `#ffffff` and place the `#0065b2` header and footer first.
2. Set everything in Prompt at 14px/400 and add 16px/600 for links, 18px/700 for column titles.
3. Build buttons at 44px, radius 10px, padding 9px 16px 10px.
4. Compose promo areas from pale-blue tiles (`#ebf3fa`) with red `#da3731` numerals.
5. Check every colour against the extraction before adding new ones; rootVars list the sanctioned tints.
