---
version: alpha
name: B2S
category: "Thai Brands"
description: "B2S Online (b2s.co.th), the Thai bookstore and stationery e-commerce site of Central Retail: dense white pages on a #ebf1f4 backdrop, Kanit at 12px with #2c2d4e navy-ink text, red #ff0000 ซื้อเลย buy buttons with 4px corners and 20px red prices, orange #f5822b links, and an olive #a6aa12 footer band."
colors:
  canvas: "#ffffff"
  page-body: "#ebf1f4"
  ink: "#2c2d4e"
  primary: "#ff0000"
  on-primary: "#ffffff"
  ink-soft: "#313252"
  ink-muted: "#999999"
  ink-faint: "#aaaaaa"
  ink-input: "#002433"
  accent-orange: "#f5822b"
  badge-pink: "#ff495d"
  surface-olive: "#a6aa12"
  surface-cool: "#f2f3f7"
  ink-slate: "#37546d"
  hairline: "#efefef"
  border: "#d5d5d5"
  card-border: "#d5dbde"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  section-title:
    fontFamily: Kanit, sans-serif
    fontSize: 24px
    fontWeight: 500
  lead:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  price:
    fontFamily: Kanit, sans-serif
    fontSize: 20px
    fontWeight: 500
  footer-heading:
    fontFamily: Kanit, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  product-name:
    fontFamily: Kanit, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  caption:
    fontFamily: Kanit, sans-serif
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16.5px
  button:
    fontFamily: Kanit, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 4.8px
  xl: 6px
  2xl: 8px
  pill: 100px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 34px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.accent-orange}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 20px 30px
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-input}"
    typography: "{typography.display}"
    padding: 0px 48px 0px 18px
    height: 40px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.card-border}"
    boxShadow: rgb(213, 219, 222) 0px 2px 6px 0px
  price:
    textColor: "{colors.primary}"
    typography: "{typography.price}"
  footer-band:
    backgroundColor: "{colors.surface-olive}"
    textColor: "{colors.on-primary}"
---

## Overview

B2S (page title "B2S แหล่งรวมหนังสือ เครื่องเขียน อุปกรณ์ศิลป์ครบครัน", Thai: "B2S, a source for books, stationery and art supplies") is the online store of a Thai bookstore and stationery chain, credited in the page as "B2S, a business under Central Retail Corporation Public Company Limited". The measured homepage, https://www.b2s.co.th/, is Thai-language (`lang="th"`), 7180px tall at 1280px wide with 3293 visible elements. It is a typical high-density retail homepage: dozens of campaign banners, product rails with prices, and a very long footer with SEO copy.

From the top: a white 70px utility bar with the "B2S" logo, a wide search field ("ค้นหาสินค้า"), a language toggle (TH), notifications, "เข้าสู่ระบบ | สมัครสมาชิก" (log in | sign up), favourites and the cart; a category bar with "หมวดหมู่สินค้า" (product categories) and links for books, art and craft, IT and gadgets, toys and gifts, stationery and office supplies, B2S branches and an orange "pre-order products" tab; a hero carousel of illustrated campaign banners; a row of round category icons; three white list cards (New products, Recommended books, Best sellers) with orange "ดูทั้งหมด" (see all) links; a FLASH SALE rail with a red countdown and five product cards with red "ซื้อเลย" (buy now) buttons; a "โปรโมชั่น" (promotions) rail of tall poster banners; a pre-order rail; full-width category banners (Book, Stationery, Education Toys, Gadget, Art & Crafts) with product carousels beside them; a B2S CLUB sign-up banner; and an olive footer with service highlights, link groups (customer service, support, about us), social icons, payment badges, app-store badges, a long text block and the Central Retail credit. The copy voice is friendly and promotional: exclamation marks, "สมัครสมาชิกเลย!" (sign up now!), hashtags and emoji.

The capture still shows a seasonal promotional pop-up over the hero, and the extractor reported hiding a survey scrim (`consentOverlaysHidden: scrim hj-survey-1jii8h`); neither is documented as brand UI. Campaign artwork (the Halloween-themed posters) is time-limited content, not part of the base system.

## Colors

- **Canvas `#ffffff`** is the dominant surface (the largest area, 10816 units): header, cards, product rails. **Page body `#ebf1f4`** (501) is the pale blue-grey root fill behind the white blocks and the fill of the search field.
- **Ink `#2c2d4e`** (5227 characters) is a dark navy-violet text color used on nearly all copy; **ink soft `#313252`** (2832 characters) is a close second; **ink muted `#999999`** (846; product codes, "รหัสสินค้า") and **ink faint `#aaaaaa`** (90; the struck "ราคาปกติ" regular price) are the greys; **ink input `#002433`** (129) is the text color of the search field and the footer headings.
- **Primary red `#ff0000`**: the fill and 1px border of every "ซื้อเลย" button (7 border instances), and the text color of prices (20px, 500). On-primary `#ffffff` is the button label.
- **Accent orange `#f5822b`** (373 characters, plus a background area of 11) colors links such as "สมัครสมาชิกเลย!" and "ดูทั้งหมด" and the pre-order tab; **badge pink `#ff495d`** (41 area units) is the fill of discount tags such as "-18 %".
- **Surface olive `#a6aa12`** (102 units; border color on 3 elements) is the footer band.
- **Neutrals and lines**: hairline `#efefef` (47 elements), border `#d5d5d5` (21), card border `#d5dbde` (5). The stylesheet also declares `--b-100` `#F2F3F7` and `--s-700` `#37546D` as custom properties.

The Bootstrap default blue `#007bff` (reported for an empty icon link and declared as `--primary`) is a framework default, not a brand color, and is dropped. A `#000000` background area of 1024 units is also measured; the extractor reported hiding a scrim (`hj-survey`), and that area is not documented as a brand surface.

## Typography

One family, **Kanit** (10222 characters; weights 300, 400 and 500 loaded; Latin and Thai share it), carries the page; a second family, `Ambit`, measures 10 characters, and Roboto 400 and 500 are also loaded. Weights by character: 400 (8640), 500 (1462), 600 (73), 300 (41), 200 (16). Sizes by character: 12px (6747), 11px (892), 14px (889), 13px (720), 16px (395), 18px (221), 15px (163), 10px (90), 20px (63), 24px (42), 26px (10).

- **Body**: 12px / 18px, 400. **Product name**: 12px / 16px, 400 (two-line names). **Caption**: 11px / 16.5px, 400 (product codes, struck prices).
- **Menu and card titles**: 14px / 21px, 400 for the category title and 500 for list-card titles ("สินค้าใหม่").
- **Button**: 13px / 19.5px, 400. **Price**: 20px, 500, `#ff0000`.
- **Lead**: 16px / 24px, 500 (the homepage tagline "B2S Online แหล่งรวมหนังสือ เครื่องเขียน และแรงบันดาลใจสำหรับทุกวัย"). **Section title**: 24px, 500 ("โปรโมชั่น"). **Footer heading**: 18px / 27px, 500.

The scale is very compressed, almost everything is 12 to 14px, which gives the dense catalog look; weight 500 is the only emphasis. Letter-spacing `1px` is used for 78 characters at 13px.

## Layout

The page is a stack of full-width white blocks on a `#ebf1f4` backdrop. Measured paddings are 15px (59 uses), 2px (57), 6px (16), 5px (14), 20px (13), 8px (13), 14px (12), 12px (10); gaps are 8px (6), 10px (2) and 16px (2). The nav bar is 70px tall with `20px 30px` padding. The three list cards measured 409px wide and 152px tall each. Product rails are horizontally scrolling carousels with square arrow buttons at the edges (`--swiper-navigation-size` 44px is declared); each product card has an image, a two-line name, a code, five grey stars, a struck regular price, a red price and a full-width red button.

## Elevation & Depth

Shadows are light. Measured: `rgb(213, 219, 222) 0px 2px 6px 0px` (4 elements, the list cards, together with a 1px `#d5dbde` border), `rgb(170, 170, 170) 0px 1px 2px 0px` (8), `rgb(214, 214, 214) 1px 1px 8px 0px` (1) and `rgba(0, 0, 0, 0.16) 0px 8px 24px 0px` (1 element). Separation otherwise comes from the white-on-pale-blue contrast and 1px borders (`#efefef`, `#d5d5d5`, `#b5b5b5`).

## Shapes

Small radii throughout: `4px` is the dominant value (65 elements, buttons and fields), plus top-only `4px 4px 0px 0px` (40 elements, tabs and card tops), left-only `4px 0px 0px 4px` (7, joined controls), `2px` (4, cards), `3px 3px 0px 0px` (3), `4.8px`, `6px 6px 0px 0px`, `8px 0px 0px 8px` and one `100px` pill. The measured input role reads `0px`.

## Components

- **Button primary ("ซื้อเลย")**: `#ff0000` fill, `#ffffff` text, Kanit 13px/400, radius `4px`, padding `6px 12px`, 34px tall and 219px wide in the product card (123px wide in the mobile pass), with a cart icon.
- **Link**: orange `#f5822b`, 13px/400 ("สมัครสมาชิกเลย!"; "ดูทั้งหมด").
- **Price**: red `#ff0000`, 20px/500, beside a struck `#aaaaaa` regular price at 11px.
- **List card**: white, `1px solid #d5dbde`, radius `2px`, shadow `rgb(213, 219, 222) 0px 2px 6px 0px`, 409px by 152px, a 14px/500 title and orange "ดูทั้งหมด".
- **Search field**: `#ebf1f4` fill, `#002433` text, Kanit 14px/400, padding `0px 48px 0px 18px`, 40px tall and 388px wide, with a magnifier icon at the right.
- **Nav bar**: white, 70px, `20px 30px` padding, 12px text.
- **Discount tag**: `#ff495d` fill, small white text ("-18 %") at the top-right of a product image; "FLASH SALE" tags with a red lightning icon.
- **Footer band**: olive `#a6aa12`.

## Design System Architecture

B2S publishes no brand guidelines, design system or press kit: the homepage and its footer opened at https://www.b2s.co.th/ link an About page ("เกี่ยวกับเรา", /activity/b2s-about-us), policies, support pages and Central Retail group logos, and no design documentation. The de-facto system is a Bootstrap 4 stylesheet with local overrides. `:root` carries Bootstrap's default custom properties (`--blue` `#007bff`, `--primary` `#007bff`, `--red` `#dc3545`, `--orange` `#fd7e14`, `--gray` `#6c757d`, the `--breakpoint-xs` 0, `-sm` 576px, `-md` 768px, `-lg` 992px and `-xl` 1200px set) plus two local tokens (`--b-100` `#F2F3F7`, `--s-700` `#37546D`) and the Swiper slider variables. None of the Bootstrap colors is used for the brand; the brand colors appear only in component-level rules. Fonts loaded: Kanit (300, 400, 500), Roboto (400, 500) and the `swiper-icons` icon font.

## Do's and Don'ts

- Do set all text in Kanit at 12px with `#2c2d4e` ink; use weight 500 for titles and prices.
- Do use red `#ff0000` only for buy buttons and prices; orange `#f5822b` for "see all" and sign-up links.
- Do keep radii at 4px (2px for cards) and borders at 1px.
- Do use white cards on the pale `#ebf1f4` backdrop with the `0px 2px 6px` shadow.
- Don't use Bootstrap's `#007bff` blue for links or buttons.
- Don't document the seasonal pop-up, survey scrim or campaign posters as brand UI.
- Don't enlarge body type: the measured scale tops out at 14px for titles outside headings.
- Don't use more than one family; Kanit covers Thai and Latin.

## Responsive Behavior

Measured in the 390px mobile pass: the "ซื้อเลย" button is 13px/400, 34px tall and 123px wide (219px on desktop); the first list-card heading is 14px / 21px at weight 500; the "เฟอร์นิเจอร์" section heading box is 72px wide and 54px tall at 12px / 18px; the intro paragraph is 12px / 18px in a 338px box. The mobile character-size histogram is 12px (4497), 13px (608), 11px (172), 15px (163), 18px (136), 10px (123), 14px (118), 16px (76), 20px (63), 26px (10) and 24px (9). The stylesheet declares Bootstrap breakpoints at 576px, 768px, 992px and 1200px. How the rails and header reflow at narrow widths was not measured.

## Iteration Guide

1. Set up two surfaces: `#ffffff` blocks on a `#ebf1f4` backdrop, ink `#2c2d4e`.
2. Use Kanit only; 12px body, 14px/500 titles, 20px/500 red prices, 24px/500 section titles.
3. Build the buy button as `#ff0000`, white 13px label, 4px radius, `6px 12px` padding, 34px tall.
4. Keep orange `#f5822b` for secondary links and the olive `#a6aa12` for the footer band.
5. Re-measure a page before adding it (`node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=b2s --force --no-motion` re-runs the homepage), then `node web/scripts/verify-designs.mjs --slug=b2s`.
