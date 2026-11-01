---
version: alpha
name: Quality Houses
category: "Thai Brands"
description: "Quality Houses (QH, qh.co.th) residential developer site measured on its Thai home page: thaisans type at 20px body and 30px bold H1, navy #17497c square-cornered buttons with a #63b3d8 hover, #333333 ink on white, #f0f0f0 bands, 1px #dadada inputs and full-bleed property photography."
colors:
  canvas: "#ffffff"
  page-largest: "#f0f0f0"
  ink: "#333333"
  primary: "#17497c"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-tint-blue: "#d0dae4"
  ink-muted: "#777777"
  ink-navy: "#0c1b2e"
  ink-faint: "#dddddd"
  hairline: "#dadada"
  primary-hover: "#63b3d8"
typography:
  display:
    fontFamily: thaisans, Arial, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
  display-mobile:
    fontFamily: thaisans, Arial, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
  heading:
    fontFamily: thaisans, Arial, sans-serif
    fontSize: 34px
    fontWeight: 500
    lineHeight: 37.4px
  body:
    fontFamily: thaisans, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: thaisans, Arial, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 27px
  nav:
    fontFamily: thaisans, Arial, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 27px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 10px
  s7: 15px
  s8: 16px
  s9: 17px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 17px 20px 21px
    height: 65px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 17px 20px 21px
    height: 65px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px 15px
    height: 60px
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---
## Overview

Quality Houses (QH) is a Thai residential developer, and its home page at https://www.qh.co.th/home (the extractor's final URL after redirect) is a property-search storefront. The page opens on a full-width photograph carousel of finished houses (the capture shows a white neoclassical villa, lawn and swimming pool at slide 4 of 10), then a centered heading "ค้นหาโครงการที่คุณสนใจ" (search for the project you are interested in) above a filter form, then a "โครงการ Highlight" section that alternates image and text rows for individual project brands. Project names visible in the capture include Prukpirom (พฤกษ์ภิรมย์ | ราชพฤกษ์-ตัดใหม่) and Laddarom (ลัดดารมย์ | จตุโชติ 15); the page copy also lists Casa Ville, Q District, Q Prime and Vararom as project lines.

The visual character is clean, white and photographic. Navy blue is the only action color, text is dark gray on white, and the photography carries the premium feeling. Copy is Thai, plain and factual: a project name, a one-sentence description, a price range ("ราคา 25-100 ล้านบาท") and a "ดูโครงการ" (view project) text link with an arrow. Total page height at 1280px width is 11414px, so it is a long scrolling listing page.

## Colors

- canvas #ffffff and page-largest #f0f0f0 (the grey band behind the secondary navigation, the largest solid area at 1245 weight).
- ink #333333: the main text (6371 characters); ink-muted #777777 for secondary text (1473 characters); ink-navy #0c1b2e and ink-faint #dddddd appear on very few characters.
- primary #17497c: navy fill of the region toggle and the search button; on-primary #ffffff text on it. primary-hover #63b3d8 is the measured hover fill (the toggle button measured #17497c before hover and #63b3d8 after).
- surface-tint-blue #d0dae4: a pale blue area (823 weight). surface-black #000000 is the second largest area (1187) and white text (5855 characters) sits on it; the footer's measured text is white, but the footer's own fill was not recorded, so this file does not assign it.
- hairline #dadada: the 1px border of form fields.
- #0e2c4b (276 weight) and a translucent #0000004d (163) also appear in the area table and are not tokenized.

The extraction hid a cookie notice ("bar-notice active"); it is not part of the brand UI. The floating LINE and Messenger bubbles seen at the right edge of the capture are third-party chat controls and are not documented as brand components.

## Typography

One family, thaisans, with Arial and generic sans-serif fallbacks, loaded at weights 300, 400, 500 and 700 (plus an icomoon icon font). Sizes by character count: 20px (9144), 18px (2173), 24px (974), 28px (741), 30px (408), 34px (326), 48px (116).

- display: 30px, weight 700, line-height 36px (the measured H1, white text on a hero image); display-mobile: 20px, weight 700, line-height 24px at the mobile pass.
- heading: 34px, weight 500, line-height 37.4px (section titles such as the project names).
- body: 20px, weight 400, line-height 27px.
- button: 28px, weight 500, line-height 27px.
- nav: 20px, weight 500, line-height 27px.

The Thai script is set large: 20px is the body size, which is unusually generous and suits Thai glyph density. thaisans is a proprietary or site-hosted face; a Thai-capable substitute such as Noto Sans Thai or Sarabun would be needed outside the site.

## Layout

The header is two rows. The upper row (white, 52px tall measured) carries the logo, a hotline "1388" and text links (ข้อมูลบริษัท, นักลงทุนสัมพันธ์, เสนอขายที่ดิน, นโยบายคุ้มครองข้อมูลส่วนบุคคล) with a TH | EN switch; the lower row on the #f0f0f0 band lists the property types (บ้านเดี่ยว, ทาวน์โฮม, คอนโดมิเนียม, ต่างจังหวัด, โครงการใหม่) and a search icon. Content is centered in a container; the filter form uses three equal columns for property type, location and price, a full-width search field with a microphone icon, a grey reset button and a navy search button. The Highlight rows are two-column: a large photograph on one side and text on the other, alternating. Recorded paddings include 5px, 10px, 15px, 20px and 30px. The spacing tokens (1px to 20px) are measured values.

## Elevation & Depth

Only one shadow was measured: rgba(0, 0, 0, 0.15) 0px 2px 10px 0px, on two elements. Elsewhere depth comes from photography and flat color blocks.

## Shapes

Buttons and inputs are square: the CTA radius is 0px. The only other radii measured are 50% (five elements, round chat/slider controls) and 60px on one element; those are not used by the primary button and are not tokenized.

## Components

- button-primary: #17497c fill, #ffffff text in the 28px/500 button type, 0px radius, padding 17px 20px 21px, height 65px. The region toggle ("ต่างจังหวัด", "ทั้งหมด") shares this style; hover changes the fill to #63b3d8 and keeps white text.
- nav and nav-link: white header, #333333 text, 20px weight 500.
- text-input: 60px tall, 0px 15px padding, 1px solid #dadada, #333333 text at 20px.
- Project rows: photograph, brand logo, title, description, price line, and a text link with a line and arrow, no filled button.
- footer: white text; the footer lists project groups (โครงการในกรุงเทพ, โครงการต่างจังหวัด), careers and contact links.

## Design System Architecture

No public design system or brand guideline page was found from the home page. The shipped CSS is Bootstrap 4 based: the root variables include the unmodified framework palette (--primary #007bff, --success #28a745, --danger #dc3545, breakpoints 576px, 768px, 992px). Those are framework defaults and not QH brand colors. The measured brand layer on top is thaisans typography, the #17497c navy, the #63b3d8 hover and the #333333 ink.

## Content and Imagery

Photography is the dominant asset: wide exterior shots of houses with lawns and pools, interior and clubhouse views, and project renders. Captions such as "ภาพจริงบรรยากาศจำลอง" (real image, simulated atmosphere) appear in small white text on the lower right of images. The carousel shows slide counts ("4 / 10") with left and right arrow controls drawn in white at the image edges. Each Highlight project carries its own wordmark (PRUKPIROM in a serif capital style, LADDAROM in gold serif small capitals), so the page's own typography stays neutral while individual project identities supply character. Microcopy is direct and service oriented: a hotline number, loan assistance, after-sales service and a loan calculator are listed among the services on the page, and the voice never uses superlatives in the headings. Sparkle emoji appear at the start of project descriptions in the captured copy.

## Do's and Don'ts

- Do lead with large, bright property photography and keep chrome white and quiet.
- Do use #17497c for primary actions with white text and a #63b3d8 hover.
- Do keep buttons and inputs square (0px radius) with 1px #dadada field borders.
- Do write Thai at 20px for body text.
- Don't use the Bootstrap #007bff blue; it is not the brand color.
- Don't present the LINE and Messenger bubbles or the cookie bar as brand components.
- Don't add rounded pill buttons; the measured CTA has no radius.

## Responsive Behavior

At the 390px mobile pass the measured H1 is 20px, weight 700, line-height 24px (versus 30px/36px on desktop) and the body size stays 20px. Navigation, grid and image behavior at mobile width were not measured.

## Iteration Guide

1. Build from a white canvas with #333333 text, and use #f0f0f0 for secondary bands.
2. Use #17497c for the one action color; hover #63b3d8.
3. Set Thai text in a Thai-capable sans at 20px/27px for body and 34px/37.4px for headings.
4. Use square-cornered 60px inputs with 1px #dadada borders and 65px buttons.
5. Pair each project with one large photograph, a price range and a text link.
6. Run `node web/scripts/verify-designs.mjs --slug=quality-houses` after edits.
