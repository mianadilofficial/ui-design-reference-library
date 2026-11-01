---
version: alpha
name: Butterfly Book House (สำนักพิมพ์ผีเสื้อ)
category: "Thai Brands"
description: "Butterfly Book House (bflybook.com), a Thai publisher and bookshop built on WordPress, WooCommerce and the Flatsome theme: white canvas, black Thai text in the Srivichai typeface at 19.2px with 0.96px tracking, a soft pink #fcbdc0 for pill buttons, a deeper rose #cd6090 for section titles, pale pink #fdf3f2 footer, and 99px-radius SIGN UP and JOIN pills."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  ink-strong: "#111111"
  ink-body: "#333333"
  ink-caption: "#4a4a4ad9"
  on-primary-soft: "#f1f1f1"
  primary: "#fcbdc0"
  on-primary: "#ffffff"
  heading-rose: "#cd6090"
  secondary-pink: "#ff96ab"
  surface-pink: "#fdf3f2"
  surface-blush: "#facbcd"
  tile-overlay: "#0000002b"
  button-primary-border: "#0000000d"
  button-outline: "#999999"
  nav-bg: "#ffffffe6"
  nav-text: "#121212d9"
  alert: "#b20000"
  success: "#627d47"
typography:
  display:
    fontFamily: Srivichai, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 43.2px
    textTransform: uppercase
  body:
    fontFamily: Srivichai
    fontSize: 19.2px
    fontWeight: 400
    lineHeight: 24.96px
  button:
    fontFamily: Srivichai, sans-serif
    fontSize: 15.8304px
    fontWeight: 700
    lineHeight: 25.3286px
    letterSpacing: 0.474912px
    textTransform: uppercase
  button-quickview:
    fontFamily: Srivichai
    fontSize: 16.32px
    fontWeight: 700
    lineHeight: 29.376px
    textTransform: uppercase
  nav:
    fontFamily: Srivichai
    fontSize: 17.6px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.352px
    textTransform: uppercase
rounded:
  xs: 50px
  sm: 99px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5.36px
  s3: 6px
  s4: 6.53px
  s5: 7.19px
  s6: 9.8px
  s7: 10px
  s8: 12.1px
  s9: 15px
  s10: 19px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 18.9965px
    height: 40px
    borderColor: "{colors.button-primary-border}"
  button-outline:
    textColor: "{colors.button-outline}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 18.9965px
    height: 40px
    borderColor: "{colors.button-outline}"
  button-quickview:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary-soft}"
    typography: "{typography.button-quickview}"
    padding: 6.528px 0px 8.16px
    height: 44px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.nav-text}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.surface-pink}"
    textColor: "{colors.ink}"
---

## Overview

Butterfly Book House (สำนักพิมพ์ผีเสื้อ) is a Thai publisher and online bookshop; the measured page is its home page, https://www.bflybook.com/home/ (reached from bflybook.com/home/; title "หน้าแรก – สำนักพิมพ์ผีเสื้อ", i.e. "Home – Butterfly Publishing House"). The document language attribute is `en-US` while all content is Thai. The desktop capture is 1,280px wide and 3,237px tall.

The brand is a butterfly in two pinks. A soft pink (`#fcbdc0`) fills buttons and the logo square; a deeper rose (`#cd6090`) colours section titles; a pale blush (`#fdf3f2`) fills the footer; pink also tints the hero slide, the ribbon-shaped section headers and the star ratings. Everything else is white with black text, so the book covers carry the colour: the shop is a grid of covers, each with a Thai title and a price, over a mostly empty white page.

The capture, from the top: a white header with a pink butterfly logo square at the left and one row of Thai links (หน้าแรก, เกี่ยวกับสำนักพิมพ์ผีเสื้อ, หมวดหมู่หนังสือ, รายการหนังสือของผีเสื้อ, นักเขียน/นักแปล, บทความ, ติดต่อเรา, แจ้งการชำระเงิน), a search icon, a pink "SIGN UP" pill and a grey outlined "JOIN" pill; a full-width pink slider slide with a butterfly illustration and the slogan "เราเชื่อมั่นประการหนึ่งว่า การทำหนังสือดีก็เสมือนสร้างโบสถ์วิหาร" ("we believe that making a good book is like building a temple") with fifteen pager dots; three equal grey tiles holding imprint and foundation logos (among them สำนักพิมพ์ภารตะ / Bharat Book House and ผีเสื้อเด็กๆ / The Butterfly Children); a "หนังสือของผีเสื้อ" (Butterfly's books) section title in rose over a thin pink underline with a "ดูหนังสือทั้งหมด" (view all books) link; two rows of five book covers with centred Thai titles and prices such as "฿274.00 – ฿540.00", pink star ratings on some and an "OUT OF STOCK" band over unavailable covers; three ribbon-style headings in white on pink (ข่าวสารผีเสื้อ, ผีเสื้อขายของ, ผีเสื้อกับสังคม) above three white post cards with soft shadows and comment counts ("2,936 COMMENTS"); and a pale-pink footer. A small floating video player sits at the lower right of the capture; it is a site widget and is not documented as brand UI.

Voice is warm and literary, with the Thai slogan and imprint names doing most of the branding. Imagery is book photography, illustrations of butterflies and archive photographs.

## Colors

- **White `#ffffff` (canvas).** Page background, the largest area by far (7,933 units); text `#000000` (1,429 characters) is the main ink. `#111111` (165 characters) and `#333333` (48) are near-black variants; `#4a4a4ad9` (109 characters) is the grey of product captions.
- **Soft pink `#fcbdc0` (primary).** Fill of the SIGN UP pill and of the QUICK VIEW buttons (143 units of background area); it is the theme's `--primary-color`, `--fs-color-primary` and `--wp--preset--color--primary`. White text sits on it.
- **Rose `#cd6090`.** The colour of section titles ("หนังสือของผีเสื้อ"), measured on 17 characters.
- **Secondary pink `#ff96ab`.** Declared as `--fs-color-secondary` and `--wp--preset--color--secondary`; its on-screen use was not mapped.
- **Blush `#fdf3f2`.** The footer (603 units). **`#facbcd`** covers 91 units of background area.
- **Tile overlay `#0000002b`.** A 17% black measured on 498 units of background area; the three imprint tiles in the capture are this grey.
- **Outline grey `#999999`.** Text and 2px border of the JOIN pill. **Border `#0000000d`** is the 1px border of the SIGN UP pill.
- **Header.** White at 90% (`#ffffffe6`) with `#121212d9` text.
- **Status.** `--fs-color-alert` `#b20000` and `--fs-color-success` `#627d47` are declared in the theme; they were not seen on the measured page.

The text on the QUICK VIEW buttons is `#f1f1f1` (180 characters) and turns `#ffffff` on hover, as does the SIGN UP label (white to white). The WordPress block-editor preset colours (`#9b51e0`, `#00d084`, `#0693e3` and similar) and the admin colours (`#007cba`) are CMS defaults, not brand colours.

## Typography

One typeface for everything: **Srivichai**, declared in the child theme's `style.css` from the font file `font/TF Srivichai.ttf` with `font-display: swap`, and forced onto `html, body, h1…h6, p, a, span, li, input, button` with `font-family: 'Srivichai', sans-serif !important`. The page loaded Srivichai (1,970 characters) and an icon font `fl-icons` (28). A bold and a bold-italic file (`TF-Srivichai-Bol.ttf`, `TF-Srivichai-Bolt-Ita.ttf`) are also referenced in an inline `@font-face`.

Scale (desktop): body paragraphs 19.2px/24.96px (the body element is 19.2px/34.56px) with 0.96px tracking on 340 characters; section titles 24px/43.2px, rendered uppercase, in rose; navigation 17.6px/16px with 0.352px tracking and uppercase styling; buttons 15.8304px at weight 700 with 0.474912px tracking, uppercase; QUICK VIEW 16.32px at weight 700. By characters: 19.2px 1,207, 17.28px 382, 16.32px 180, 17.6px 116, 24px 40, 20.8px 34, 16px 28. Weights: 400 on 1,556 characters, 700 on 406, 600 on 36. Thai has no case, so uppercase styling affects only the Latin button and comment labels ("SIGN UP", "JOIN", "OUT OF STOCK", "2,936 COMMENTS"). Srivichai is the only face in the stack; the declared fallback is `sans-serif`.

## Layout

A WordPress shop layout in a full-width white page with a 1,280px canvas. The header measures 83px tall. The hero slide is edge to edge; below it a three-column row of equal grey tiles; then a product grid of five covers per row, left-aligned under a section title that ends in a "view all" link; then a three-column row of ribbon headings above three post cards. The Flatsome stylesheet used here pads containers by 15px (`.container{padding-left:15px;padding-right:15px}`).

Measured paddings are 10px (36 elements), 6px (25), 9.8px (22), 15px (21), 12.096px (20), 6.528px (18), 5.355px (15), 3px (14) and 7.1875px (8). The theme declares WordPress spacing presets in rem (`--wp--preset--spacing--20` 0.44rem up to `--80` 5.06rem). The footer measured 542px tall.

## Elevation & Depth

Mostly flat. The only shadow measured on screen is a soft two-layer one, `rgba(0, 0, 0, 0.12) 0px 1px 3px -2px, rgba(0, 0, 0, 0.24) 0px 1px 2px 0px`, on 2 elements; the post cards in the capture show a light shadow edge. Depth otherwise comes from the grey 17% overlay on the imprint tiles, the translucent white header (`#ffffffe6`), the "OUT OF STOCK" bands over covers and the pink ribbon graphics. The WordPress presets in the stylesheet (`--wp--preset--shadow--natural`, `--sharp`, `--crisp`, `--deep`, `--outlined`) are defaults; they were not mapped to elements.

## Shapes

Buttons are pills: 99px on the SIGN UP and JOIN buttons (2 elements measured at 99px, 3 at 999px), 50% on 14 round elements (pager dots, icon discs), 50px on 7, 100% on 4. Book covers, tiles and post cards are square-cornered in the capture; the QUICK VIEW button radius was not recorded. The ribbon headings appear in the capture as pink ribbon graphics with a small illustration; how they are built was not inspected.

## Components

- **SIGN UP button.** `#fcbdc0` fill, white 15.8304px bold uppercase label with 0.474912px tracking, 99px radius, `0px 18.9965px` padding, 40px tall, 85px wide, `1px solid #0000000d`.
- **JOIN button.** Transparent with `#999999` text and a `2px solid #999999` border, 99px radius, 40px tall, 67px wide.
- **QUICK VIEW button.** `#fcbdc0` fill, `#f1f1f1` label turning white on hover, 16.32px bold uppercase, `6.528px 0px 8.16px` padding, 44px tall, 189px wide (measured in the DOM on each product tile; not visible in the static capture).
- **Header.** White 90% bar, 83px tall, Thai links in `#121212d9` at 17.6px, with a search icon and the two pills.
- **Product tile.** Cover photograph, a grey centred Thai title and series line, an optional pink five-star rating and a black price in `฿` with an en dash for ranges; "OUT OF STOCK" in a translucent band across the cover when unavailable.
- **Imprint tile.** A grey (`#0000002b` overlay) square holding imprint logos.
- **Ribbon heading and post card.** A pink ribbon with white Thai text and a small illustration, above a white card with a 1px-shadow edge, a title, a thin pink rule and a grey uppercase comment count.
- **Footer.** `#fdf3f2`, black 19.2px text with address and contact details.

## Design System Architecture

No public or official design system or brand guideline for Butterfly Book House was found; the opened page https://www.bflybook.com/home/ links to an "about us" page (https://www.bflybook.com/about-us/) but to no brand-guideline or press page. The site is a WordPress build (`<meta name="generator" content="WordPress 7.1.3" />`) with WooCommerce (`WooCommerce 11.2.1`), the Flatsome theme from UX Themes (`wp-content/themes/flatsome/assets/css/flatsome.css?ver=3.20.10`, `flatsome-shop.css`) and a child theme (https://www.bflybook.com/wp-content/themes/flatsome-child/style.css, version 3.0) whose only custom CSS is the Srivichai `@font-face` and the global font rule. The hero is a Smart Slider 3 slider, and forms use Contact Form 7 and FormCraft.

The tokens come from the theme's variables: `--primary-color: #fcbdc0`, `--fs-color-primary: #fcbdc0`, `--fs-color-secondary: #ff96ab`, `--fs-color-base: #000000`, `--fs-color-success: #627D47`, `--fs-color-alert: #b20000`, `--fs-experimental-link-color: #000000` and `--fs-experimental-link-color-hover: #e14d43`, alongside the WordPress block-editor presets (`--wp--preset--color--*`, `--wp--preset--font-size--*`: small 13px, normal 16px, medium 20px, large 36px, x-large 42px). Pink is therefore declared as the theme's primary variable rather than only as literal values in the child theme.

## Do's and Don'ts

Do:
- Use soft pink `#fcbdc0` for primary pill buttons with a white bold uppercase label, 40px tall and 99px radius.
- Use the rose `#cd6090` for section titles and keep the page white with black text.
- Set everything in Srivichai, body at 19.2px with 0.96px tracking.
- Let book covers supply the colour; keep tiles, cards and ribbons light.
- Use pale pink `#fdf3f2` for the footer.
- Give unavailable products an "OUT OF STOCK" band rather than hiding them.

Don't:
- Don't use WordPress preset colours (vivid purple, cyan, amber) or the admin blue as brand colours.
- Don't put the floating video player or slider arrows into the brand component set.
- Don't use heavy shadows; the one measured shadow is 1px to 3px.
- Don't override the typeface per element; the child theme applies Srivichai with `!important` across the site.

## Responsive Behavior

Measured at 390px: the header is 70px tall on a `#ffffffe6` background, body text is 19.2px in a 360px-wide box, and the mobile pass recorded 19.2px on 1,207 characters, 16.32px on 350, 24px on 40, 20.8px on 34, 17.28px on 32 and 16px on 28. The 17.6px navigation size does not appear in the mobile pass's size list, so the desktop link row was not recorded in the mobile pass; what replaces it was not measured. The Flatsome stylesheet declares `@media` rules at `max-width:549px` and `min-width:850px` (and `max-width:849px`). Column counts, grid reflow and slider behaviour on mobile were not measured.

## Iteration Guide

1. Set canvas `#ffffff`, ink `#000000`, primary `#fcbdc0`, rose `#cd6090`, footer `#fdf3f2`; load Srivichai and apply it to every element.
2. Build the header: 83px, white at 90%, Thai links at 17.6px, a search icon, a pink SIGN UP pill and a grey JOIN outline pill.
3. Add the pink hero slider, a three-up row of grey imprint tiles, and the five-column product grid with centred Thai titles and `฿` prices.
4. Add ribbon headings in white on pink above white post cards with the 1px to 3px soft shadow.
5. Check buttons: 40px, 99px radius, 15.8304px bold uppercase, `#0000000d` border.
6. Run `node web/scripts/verify-designs.mjs --slug=butterfly-book-house` and compare with `web/data/captures/butterfly-book-house.jpg`.
