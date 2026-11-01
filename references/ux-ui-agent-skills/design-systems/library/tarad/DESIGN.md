---
version: alpha
name: Tarad.com
category: "Thai Brands"
description: "Thai e-commerce service provider (TARAD.com) on Bootstrap 4: blue #0039c4 and #0066b2 bands, orange #f24a0b service buttons, Kanit at 16px and Sukhumvit Set for buttons, 4px radii, white and #eeeeee canvas."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#f24a0b"
  on-primary: "#ffffff"
  surface-light: "#eeeeee"
  surface-blue: "#0039c4"
  ink-black: "#000000"
  ink-red: "#ff0000"
  ink-link-blue: "#0040cb"
  ink-brand-blue: "#0066b2"
  hairline: "#e8e8e8"
  button-confirm-bg: "#0048f9de"
  text-input-text: "#555555"
  text-input-border: "#cccccc"
  footer-bg: "#f5f5f5"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 25px
    fontWeight: 400
    lineHeight: 25px
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 26px
    fontWeight: 500
    lineHeight: 39px
  heading:
    fontFamily: Kanit, sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28.8px
  button:
    fontFamily: sukhumvit_setmedium
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: Kanit, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  input:
    fontFamily: sukhumvit_setmedium
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 1.5px
  sm: 2.5px
  md: 4px
  lg: 100px
  pill: 9999px
spacing:
  s1: 5px
  s2: 6px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 12.5px
  s8: 15px
  s9: 20px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.button-confirm-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 34px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 34px
    borderColor: "{colors.text-input-border}"
    boxShadow: rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.sm}"
    padding: 40px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
---

## Overview

TARAD.com (https://www.tarad.com) is a Thai e-commerce service company. Its page title describes "E-Commerce Service ... online marketing services, building and managing online advertising, opening an online shop for free, U-commerce system, Digital Marketing and One stop E-commerce Solution Services". The page's own navigation shows the group's properties: TARAD.com, TARAD Plaza and ThaiSecondHand, plus a link to "TARAD.com เวอร์ชั่นเดิม" (the original version), customer service, member sign-up and login, and "เข้าสู่หน้าร้านค้า" (enter the store).

The home page opens with a slim grey utility strip, then a white header with the blue TARAD.com wordmark and a text menu (หน้าแรก, บริการของเรา, เปิดร้านค้าออนไลน์, เข้าสู่ร้านค้า, เกี่ยวกับเรา, ติดต่อเรา). A promotional banner carousel ("U-Commerce 2.0" shipping from 18 baht) leads into a four-panel strip of numbered photographic tiles (1 Channel, 2 Digital Marketing, 3 Service & Operation, 4 Education) darkened for white lettering, each with an orange "ดูรายละเอียด" (see details) button. Below is the centred heading "TARAD.COM E-Commerce Service อย่างเต็มรูปแบบ" over three line-icon service columns in blue (online sales channel, full digital advertising, after-sales service), then a blue band with a category list at left and a Magento-themed banner, and a "หมวดหมู่สินค้า" product-category section on a grey ground.

The voice is a B2B service pitch in bilingual Thai and English headings ("Online Sale Channel", "Full Digital Advertising", "Full Support Warehouse Customer Service"). Density is moderate, with large photographic tiles and thin blue line icons. The page measured 5,933px tall at 1280px wide.

The product-category section lists everyday marketplace categories (phones and accessories, cameras, women's and men's fashion, furniture, home items, mother and baby, toys and hobbies, collectibles) followed by a "สินค้ายอดนิยม" (popular products) row, so the home page serves two audiences at once: merchants who want to open an online shop, and shoppers who browse the marketplace. The carousel banners use illustrated, high-saturation promotional artwork with oversized numerals and a woman holding parcels, while the interface chrome around them stays quiet and white.

## Colors

- **Orange `#f24a0b`** (21 area weight) is the action color on the service tiles' "ดูรายละเอียด" buttons in the capture, with white text. It is used as `primary`.
- **Blues:** `#0039c4` (1,007 area weight) is the measured large blue background; `#0066b2` (444) is the secondary band blue (and 7 characters of text); `#0040cb` (33 characters) is the measured link blue; `#0048f9de` is the fill of the measured "ยืนยัน" button (translucent, alpha de).
- **Canvas `#ffffff`** (1,556) and greys `#eeeeee` (1,426) and `#f5f5f5` (719, the footer).
- **Text:** `#333333` (1,483 characters) is the body color, white (591) on photos and bands, `#000000` (152), `#ff0000` (72 characters) for emphasis text, `#cc282b` (5), `#fdb721` (4, also a yellow fill of 7 area).
- **Borders:** `#e8e8e8` (9) and `#cccccc` (5, the input border).
- The root declares Bootstrap 4 defaults (`--primary: #007bff`, `--danger: #dc3545`, `--success: #28a745`, `--indigo`, `--teal`, `--yellow: #ffc107`); these are framework colors, not measured brand colors, and they are not tokens.

## Typography

Two faces are loaded: **Kanit** (300, 400, 500, 600; 1,945 characters measured) and **Sukhumvit Set** in two forms, `sukhumvit_setmedium` (370 characters) and `sukhumvit_setbold` (32). FontAwesome supplies icons.

Roles: display 25px / 400 / 25px (white tile titles such as "Channel"; 26px / 500 / 39px on mobile for the page h1); heading 80px / 400 (the large white tile numerals 1 to 4); body 16px / 400 / 28.8px in Kanit; nav 14px / 400 / 21px; button and input use `sukhumvit_setmedium` at 14px / 20px and 16px / 24px. By character count 16px dominates (1,454), then 12px (263), 14px (207), 20px (152) and 25px (114). Weights are 400 (1,978), 500 (236), 300 (97) and 700 (36). Kanit is a Google Fonts family; Sukhumvit Set is served from the site's own font files.

## Layout

The page uses a Bootstrap 4 grid (the root declares breakpoints sm 576px, md 768px and lg 992px). At 1280px: a centred header, a full-width carousel, four equal full-bleed photo tiles, a three-column service row with centred text and icons, a banner with a left category panel, and a product-category grid. Common paddings are 15px (76 occurrences), 10px (52), 5px (40), 20px and 30px (16 each), and the footer and cards use 40px.

## Elevation & Depth

Shadows are minimal: the only recorded shadow is the input inset `rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset` (5 uses). Depth is created by photo tiles darkened for text, the blue bands and the grey `#eeeeee` ground between white sections.

## Shapes

Radii are `4px` (29 occurrences, buttons and inputs), `100px` (11, pill-shaped controls and badges), `2.5px` (3, cards), `1.5px 1.5px 0px 0px` (3, tab tops) and `100%` (1, round). Photo tiles are square-cornered and full bleed.

## Components

- **Confirm button ("ยืนยัน"):** `#0048f9de` fill, white `sukhumvit_setmedium` 14px text, 1px solid white border, 4px radius, `6px 12px` padding, 34px tall. This is the measured primary-role button.
- **Service button ("ดูรายละเอียด"):** orange `#f24a0b` fill with white text on the dark photo tiles; its numeric radius and padding were not captured separately.
- **Text input:** white fill, `#555555` text, 1px solid `#cccccc` border, 4px radius, `6px 12px` padding, 34px tall, inset shadow.
- **Navigation:** white header with `#333333` 14px Kanit links; hover on "TARAD.com เวอร์ชั่นเดิม" turns the text to rgb(35, 82, 124) (`#23527c`) with an underline.
- **Card:** white, `#000000` text, 2.5px radius, 40px padding.
- **Footer:** `#f5f5f5` with `#333333` 16px text and a company-info link list.
- The cookie banner is not documented.

## Design System Architecture

No public design system or brand guidelines were found; /brand, /press, /about and /design all returned 404. The site's shipped CSS is Bootstrap 4: the root exposes the standard `--blue`, `--primary: #007bff`, `--font-family-sans-serif` stack and breakpoint variables, and the control styling (`6px 12px` padding, `#cccccc` border, inset shadow, 4px radius) follows Bootstrap defaults. The brand layer is the Kanit and Sukhumvit Set type, the blue bands (`#0039c4`, `#0066b2`) and the orange action color `#f24a0b`.

## Do's and Don'ts

Do use blue bands for structure and orange for the single call to action on photo tiles. Do set copy in Kanit 16px with a 28.8px line height. Do use white text over darkened photography. Do keep radii at 4px for controls.

Don't use Bootstrap's `#007bff` as a brand color; the site's own blues are `#0039c4`, `#0066b2` and `#0040cb`. Don't add heavy shadows. Don't document the cookie banner as UI.

## Responsive Behavior

Measured at 390px: the h1 is 26px / 500, body 14px / 400, the confirm button 14px with the same fill, and nav text 16px; fonts measured include 16px (764), 14px (650) and 12px (414). The Bootstrap breakpoints in the root are 576px, 768px and 992px; how columns collapse was not measured.

## Iteration Guide

1. Start from the frontmatter; `primary` is the orange `#f24a0b`, and the measured confirm button is kept as `button-confirm-bg`.
2. Build the home page from a carousel, four full-bleed photo tiles with white numbers, and a three-column service row with blue line icons.
3. Use `#0039c4` and `#0066b2` for bands and `#eeeeee` for grey sections.
4. Use Kanit 16px / 28.8px for body and keep controls at 4px.
5. Not measured: orange button geometry, dark mode, tablet layout; verify on the live site.
