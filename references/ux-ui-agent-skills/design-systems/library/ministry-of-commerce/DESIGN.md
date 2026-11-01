---
version: alpha
name: Ministry of Commerce (กระทรวงพาณิชย์)
category: "Thai Brands"
description: "Thai Ministry of Commerce portal (moc.go.th) set in the Prompt typeface on white #ffffff with #000033 ink, deep navy #0a214a bands, #fecb01 yellow pill-tab buttons (5px radius, black text) and #002ab2 blue price-section labels with 10px radius."
colors:
  canvas: "#ffffff"
  ink: "#000033"
  primary: "#fecb01"
  on-primary: "#000000"
  navy-deep: "#0a214a"
  surface-gray: "#e4e4e4"
  ink-secondary: "#333333"
  teal-blue: "#1f5a7c"
  ink-tertiary: "#555555"
  blue-card: "#002ab2"
typography:
  display:
    fontFamily: Prompt
    fontSize: 28px
    fontWeight: 400
    lineHeight: 30.8px
  subheading:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 500
    lineHeight: 17.6px
  body:
    fontFamily: Prompt
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.5714px
  button:
    fontFamily: Prompt
    fontSize: 17px
    fontWeight: 400
    lineHeight: 27px
  link:
    fontFamily: Prompt
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  input:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8571px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 10px
  2xl: 15px
  3xl: 20px
  4xl: 25px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 9px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 20px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 5px 15px 0px
    height: 33px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 5px
    height: 29px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.navy-deep}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 15px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-tertiary}"
    typography: "{typography.input}"
    padding: 6px 12px
    height: 37px
  card:
    backgroundColor: "{colors.blue-card}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.2xl}"
    padding: 20px 20px 5px
    boxShadow: rgba(0, 0, 0, 0.24) 0px 3px 8px 0px
---

## Overview

The Ministry of Commerce home page (measured at https://www.moc.go.th/th/page/item/index/id/1, page title "กระทรวงพาณิชย์", language `th`) is a service portal built around data. A page summary I opened lists the primary navigation as Home, About Ministry, Strategy & Policy, Ministry Services and News Center, a bilingual TH/EN toggle, a login entry, and main sections for e-Services, a "MOC Online One Stop Service" with five service categories, a provincial network, an event hub, a trade statistics portal, a business data warehouse, agricultural commodity pricing and construction materials pricing. The footer lists seven related public-sector organisations and government resource links.

The capture shows a dark navy header with the ministry emblem and the bilingual name "กระทรวงพาณิชย์ / Ministry of Commerce", a full-bleed hero slideshow with a search field and a yellow-accented "ค้นหา" button, a news ticker, the MOC Online strip with five icon service entries, an "i - Service" selector strip, and then dark navy data sections: "ราคาสินค้าเกษตร" (agricultural commodity prices) with tabs for meat, vegetables, fruit and field crops and four price cards, and "ราคาวัสดุก่อสร้าง" (construction material prices). Lower sections use banner imagery. A popup announcement was present at capture time (flagged by the extractor as `scrim popup22`), as were a chat widget and a floating side panel; none of these are brand UI and no token is taken from them.

## Colors

The page alternates white (#ffffff, 7,458 weight) with deep navy fields: `navy-deep` #0a214a (5,258 weight) is the main dark background, with #091551, #070535, #0c1a4c, #010634 and #154194 as smaller dark blue areas and #004da5 as a brighter blue. `blue-card` #002ab2 fills the section label "ราคาวัสดุก่อสร้าง". `ink` is #000033, a near-black navy (2,000 characters), with #333333 (`ink-secondary`, 1,845 characters), #555555 (`ink-tertiary`) and `teal-blue` #1f5a7c (646 characters) as other text colours. `surface-gray` #e4e4e4 is a light gray area.

The accent is yellow: `primary` #fecb01 fills the tab and "view all" buttons, with `on-primary` black (#000000) text. Further yellows measured as text are #e2bb0b and #ffcc00. A purple #4d1869 and a wine red #640e12 (the detected "ค้นหา" candidate) also appear as small areas. On hover the nav link "หน้าแรก" inverts from navy #0a214a fill with white text to a white fill with #0a214a text and border.

## Typography

Prompt is the primary face (6,255 measured characters). Tahoma contributes 1,272 plus 243 characters (as `tahoma` and `Tahoma`), THSarabunNew 145, Kanit 67 and DBHelvethaicaX 2. The loaded font list also includes ThaiSans Neue (regular and bold), THSarabunNew (regular and bold), Prompt (regular and bold), Kanit, FontAwesome and slick icon fonts. Prompt is a Google Fonts typeface; the site loads its own copy.

`display` is Prompt 28px / 30.8px weight 400 (section titles such as "ราคาสินค้าเกษตร"). `subheading` is 16px / 17.6px weight 500 (price card titles). `body` is 13px / 18.5714px weight 400 (footer policy links). `button` is 17px / 27px weight 400, `link` is 14px / 14px weight 400 and `input` is 16px / 22.8571px weight 400. The most frequent sizes by character count are 15px (2,494), 11px (1,378), 14px (968), 16px (936) and 13px (843); weight 400 accounts for 7,682 characters, so the page is almost entirely regular weight.

## Layout

The viewport for the measurement was 1280px wide with a recorded full-page height. Structure is a vertical stack of full-width bands, each with a centered content container: header, hero, ticker, service strip, selector strip, price sections, banner sections, news and footer. The price cards sit in a horizontal row of four with a pagination dot beneath. Measured paddings are 15px (328 occurrences), 5px (148), 3px, 6px, 10px and 20px, plus several fractional values (such as 103.125px and 165.312px) that come from fluid columns.

## Elevation & Depth

Measured shadows: `rgba(125, 125, 125, 0.34) 5px 5px 5px 0px` (107 occurrences), `rgba(0, 0, 0, 0.24) 0px 3px 8px 0px` (23; used on the card component), `rgb(128, 128, 128) 0px 0px 5px 0px` (3) and `rgb(208, 205, 208) 1px 1px 6px -1px` (1). Depth also comes from the contrast of dark navy bands against white and from photographic backgrounds behind the price sections.

## Shapes

The radius scale is 3px, 4px, 5px, 6px, 10px, 15px, 20px and 25px plus a pill. The measured counts are 50% (81 occurrences, round icon buttons), 10px (52), 4px 4px 0px 0px (10, tab tops), 15px (8, cards), 10px 10px 0px 0px (6), 5px (5), 6px (5), 25px (5) and 20px (4). The yellow tab button uses 5px, the "ชมทั้งหมด" button 3px, and the blue section label 10px.

## Components

**Tab button** (`button-primary`): #fecb01 fill, black 17px Prompt, 5px 15px 0px padding, 33px high, 5px radius, 1px solid #fecb01 border ("เนื้อสัตว์"). The inactive tabs ("ผักใบ/ผล/ปรุงรส", "ผลไม้", "พืชไร่และวัตถุดิบอาหารสัตว์") are #070535 fills at 5px radius.

**View-all button** (`button-secondary`): same yellow, 5px padding, 29px high, 3px radius ("ชมทั้งหมด").

**Nav link** (`link`): #0a214a fill, white 14px text, 15px padding, 44px high, with the hover inversion described above. **Search input** (`text-input`): white fill, #555555 16px text, 6px 12px padding, 37px high.

**Price card** (`card`): #002ab2 background token with white text, 15px radius, 20px 20px 5px padding and the 0.24 alpha shadow. In the capture the cards show an icon, a product name, a price in baht per kilogram and an update date.

## Design System Architecture

No public design-system or brand-guideline page was found. The home page summary opened lists services and organisation links only. The extraction recorded no CSS custom properties (`rootVars` is empty), so the de-facto system is hand-written CSS with several Thai web fonts loaded side by side (Prompt, Kanit, THSarabunNew, ThaiSans Neue, DBHelvethaicaX) and the slick slider plugin and FontAwesome for icons.

## Do's and Don'ts

- Do use Prompt at 28px for section titles and 16px for card titles.
- Do use #fecb01 with black text for tabs and view-all buttons on navy #0a214a.
- Do keep the data sections dark and the content sections white.
- Do show prices in white on blue cards with 15px radius.
- Don't add a second accent next to the yellow.
- Don't copy the popup announcement, chat widget or floating side panel into the design.
- Don't use Tahoma or other fallback faces as the lead face; Prompt is measured as the leading family.

## Responsive Behavior

A 390px-class mobile pass was recorded (extracted width 360). On mobile the h1 and h2 stay at 28px / 30.8px weight 400, body copy stays 13px / 18.5714px, and the detected primary button is the search button "ค้นหา" with #000000 fill, white 17px text, 6px radius and 1px solid #000000 border, 45px high. Navigation collapse and column counts were not measured as numbers; the capture shows a hamburger icon at the top right of the header in the desktop capture, but its behaviour was not measured.

## Iteration Guide

1. Begin with white canvas and #000033 ink, then add navy #0a214a bands for data.
2. Reserve #fecb01 for tabs and view-all actions; reserve #002ab2 for section labels and cards.
3. Use Prompt only; sizes 28, 16, 13 and 17px.
4. Measure new components on the live page before adding tokens.
5. Re-run `node web/scripts/verify-designs.mjs --slug=ministry-of-commerce` after changes.
