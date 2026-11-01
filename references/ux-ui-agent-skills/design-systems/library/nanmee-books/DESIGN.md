---
version: alpha
name: "Nanmeebooks"
category: "Thai Brands"
description: "Nanmeebooks (nanmeebooks.com), the online shop of Thai publisher Nanmee Books, measured live: IBM Plex Sans Thai at weights 400 to 700, a #dc3545 red for action buttons and hover, #f92e37 price and discount red, #333333 ink, 4px controls and 30px pill discount badges."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#dc3545"
  on-primary: "#ffffff"
  surface-2: "#efefef"
  surface-3: "#000000"
  ink-2: "#2fa774"
  ink-4: "#f8495e"
  ink-5: "#9d9d9d"
  ink-6: "#f92e37"
  text-input-text: "#000000a6"
  text-input-border: "#d6d6d6"
typography:
  display:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 54px
  display-mobile:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
  heading:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
  body:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 5px
  md: 10px
  lg: 30px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 11px
  s7: 12px
  s8: 15px
  s9: 24px
  s10: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.xs}"
    padding: 1px 6px
    height: 40px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 4px 30px 4px 11px
    height: 40px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
---

# Nanmeebooks

## Overview

Nanmeebooks is the online bookstore of Nanmee Books, a Thai publisher of children's books, picture books, comics and general titles (the document title reads "Nanmeebooks - หนังสือเด็ก นิทาน การ์ตูน สำหรับคุณและครอบครัว | Nanmeebooks | นานมีบุ๊คส์", meaning children's books, fairy tales and comics for you and your family). The measured page is the Thai home page at https://www.nanmeebooks.com/ (`lang` is "th"), a very long catalogue scroll of 11,261px at 1280px width. The cookie-consent bar that appeared in the original capture was removed by re-measuring with the popup-safe extraction.

The header has the red "NANMEEBOOKS" wordmark, a text navigation row (หน้าแรก home, หนังสือออกใหม่ new books, ใบงานกิจกรรม activity worksheets, คูปองส่วนลด discount coupons, Book Fair, บทความ articles, เช็คเลขพัสดุ parcel tracking), then a second row with a red menu button "สินค้าของเรา" (our products) with a list icon, a wide search field with a magnifier, user, cart (with a red count badge) and heart icons, a black "สมัครใหม่" (register) button and an "เข้าสู่ระบบ" (log in) link.

Below the header the page is a stack of full-width promotional banners and product rails. A campaign banner ("OPEN HOUSE" with discount tiers) is followed by the heading "ร้านหนังสือออนไลน์นานมีบุ๊คส์" and a row of category icons, then banners such as "Bestsellers Of The Month", "SIGNATURE COLLECTIONS", "Picture Books for Brave Hearts", "Educational Comics", "Extra Knowledge & Study Guides", "Fantasy Novels", "LUMI Inspiring Souls", "Meaningful Life", "Let Yourself Bloom", "ELIX Ignite Your Soul", "Pre-order", a "FLASH SALE" row and a LINE coupon area. Each banner heads a rail of six product cards. A grey footer holds the customer-service columns.

The look is a busy, promotional marketplace: saturated banners, many red price tags and discount badges, and dense small Thai text. The voice is direct and sales-oriented (discount percentages, "ประหยัด" savings amounts, "PRE-ORDER" tags).

## Colors

The canvas is white, #ffffff (`canvas`, area weight 3,142). A light grey, #efefef (`surface-2`, weight 975), fills the footer and some bands, and black #000000 (`surface-3`, weight 367) is used for the register button and dark banner blocks. Text is charcoal #333333 (`ink`), measured on 6,096 characters, with a mid grey #9d9d9d (`ink-5`) for struck-through original prices and fine print, and #000000d9 for the search field text.

Red is the action and price color. #dc3545 (`primary`) is the fill and 1px border of the "สินค้าของเรา" menu button and the hover color of every navigation link; the page's CSS defines the same value as `--antd-wave-shadow-color`, so it is the site's configured primary in its UI library. #f92e37 (`ink-6`) is the discount badge background (area weight 92) and the price text (108 characters), and #f8495e (`ink-4`, 296 characters) is a lighter red used for text. A green, #2fa774 (`ink-2`), is measured on 769 characters as text. White text appears on red and black areas (547 characters). A faint #d6d6d6 (`text-input-border`) outlines the search field.

Banner colors (maroon, purple, gold, teal) belong to the promotional images and are not CSS colors, so none of them is tokenized.

## Typography

The page is set in "IBM Plex Sans Thai" with a generic sans-serif fallback, measured on 8,308 characters; "Sarabun" appears on 135 characters. Weights are 600 (4,186 characters), 400 (2,681), 700 (1,174) and 500 (402), so most text is semibold.

Measured roles:
- `display`: 36px, weight 700, line-height 54px.
- `display-mobile`: 18px, weight 700, line-height 27px (also the label style of the red menu button).
- `heading`: 24px, weight 700, line-height 36px.
- `body`: 14px, weight 400, line-height 21px.

By character count the sizes are 14px (5,459), 12px (1,558), 18px (475), 24px (327), 16px (293), 9.008px (117), 10px (116) and 36px (78). Body and card text are therefore small and tight: 14px for titles and navigation, 12px for price lines, and 9 to 10px for badges. Letter-spacing is not set. Rail headings such as "BESTSELLERS OF THE MONTH" are bold capitals in black; Thai headings use the same weight 700.

## Layout

The page uses a centred column of about the width of the first banner, with full-width stripes inside it. The header is two rows. Each product rail is six equal cards in a row with a "ดูทั้งหมด" (view all) link at the right of the rail heading. Banners alternate with rails down the page, and the footer is a multi-column grey block with payment-method marks.

Paddings by weight are 8px (220), 184px and 15px (72 each), 2px (67) and 4px (27). The spacing tokens list 1, 2, 4, 6, 8, 11, 12, 15, 16 and 24px. Density is high: product cards are tightly packed, with covers, a two-line title, price, struck price and a button row inside each.

## Elevation & Depth

Elevation is very light. A near-invisible shadow, rgba(0, 0, 0, 0.016) 0px 2px 0px 0px, is on 72 elements (the buttons and tags). A stronger one, rgba(0, 0, 0, 0.15) 0px 4px 12px 0px, is on a single element, and rgb(255, 255, 255) 0px 0px 0px 1px is a 1px white ring on one element. Cards and rails are separated by spacing rather than shadow, and the product covers carry their own depth. Borders measured are 1px #333333 (72 elements, the outlined buttons) and #dc3545 (68, the red outlines).

## Shapes

Controls are lightly rounded and badges are pills. The measured radii are 100% on 240 elements (circular icon buttons, heart and cart icons, avatars), 4px on 87 (buttons, inputs and tags, `rounded.xs`) and 30px on 68 (the red discount badges such as "ลด 20%", `rounded.2xl`), with single elements at 10px, 5px and 50%. Product covers are square. The primary menu button, the search field and the small "ปกอ่อน" (paperback) format buttons all use 4px.

## Components

**Primary button** (`button-primary`): the "สินค้าของเรา" menu button: #dc3545 fill and border, white 18px weight 700 label, padding 1px 6px, height 40px, 4px radius, with a list icon at its right.

**Navigation** (`nav`, `nav-link`): white bar with #333333 labels at 14px weight 400; every link turns #dc3545 on hover (the "ดูทั้งหมด" link turns a dark rgb(64, 60, 60) instead).

**Text input** (`text-input`): the search field, white, #000000a6 text at 14px, padding 4px 30px 4px 11px, height 40px, 1px #d6d6d6 border, 4px radius, with a grey magnifier icon at the right.

**Product card**: a cover image, a heart icon at the right edge, a two-line #333333 title at 14px weight 600, a red price (for example ฿716) with a red pill badge "ลด 20%", a struck-through original price in #9d9d9d with "ประหยัด" savings, a black-outlined 4px format button ("ปกอ่อน") and a circular cart button. Some cards carry a dark "PRE-ORDER" tag.

**Auth buttons**: a black "สมัครใหม่" button and a text "เข้าสู่ระบบ" link.

**Footer** (`footer`): #efefef fill, #333333 text, bold 18px column headings (ลูกค้าสัมพันธ์ customer relations, การช่วยเหลือ help, บริการต่างๆ services).

## Design System Architecture

No public Nanmeebooks design system or brand-guideline page was found linked from the home page, and none was opened for this document. The only measured root variable is `--antd-wave-shadow-color: #dc3545`, which shows that the Ant Design component library is in use and that the site's primary color is configured as #dc3545; no other tokens are declared at the root. The loaded text families are IBM Plex Sans Thai and Sarabun. The brand layer is therefore carried by the red and black on white scheme, the weight-600 Thai text and the promotional banner artwork. Source reviewed: https://www.nanmeebooks.com/ only.

## Do's and Don'ts

Do use #dc3545 for the main action button and all hover states, and #f92e37 for prices and discount badges.

Do set Thai and Latin text in IBM Plex Sans Thai at 14px weight 400 to 600, with 700 for headings.

Do show discounts as red 30px-radius pills next to a bold red price and a struck-through grey original price.

Do keep controls at 4px radius and icon buttons circular.

Don't use heavy shadows; the measured shadow on controls is nearly invisible.

Don't tokenize the colors of the promotional banner images.

Don't put the cookie dialog in the system; it was removed from the measured page.

## Responsive Behavior

Only the 390px mobile pass was recorded. In it the navigation block measures 14px, weight 400, line-height 21px in #333333 on white; the red button "สินค้าของเรา" is 18px, weight 700, #ffffff on #dc3545 with padding 1px 6px and a 4px radius at 180px width; and character counts by size are 14px (71), 13.712px (20) and 18px (12). Breakpoints, the column count of product rails and how the header rows are arranged on mobile were not measured.

## Iteration Guide

1. Start from `canvas` #ffffff, `ink` #333333, `primary` #dc3545, `ink-6` #f92e37 and `surface-2` #efefef.
2. Use IBM Plex Sans Thai; 14px/400 for text, 24px/700 for headings, 18px/700 for button labels.
3. Build the order: two-row header, promotional banner, category icons, themed banner plus six-card rail repeated, flash-sale and coupon banners, grey footer.
4. Use 4px controls, circular icon buttons and 30px pill discount badges.
5. Run `node web/scripts/verify-designs.mjs --slug=nanmee-books` after edits.
6. Leave out anything not in the frontmatter or `web/data/extracted/nanmee-books.json`.
