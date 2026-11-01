---
version: alpha
name: Lalamove Thailand
category: "Thai Brands"
description: "Lalamove Thailand home (lalamove.com/th-th): Roboto at 80px display and 14px body, Lalamove orange #ff671d square-cornered buttons and cards, charcoal #3c3c3b text, pale #f1f3f4 bands, Thai-language copy over orange vehicle photography."
colors:
  canvas: "#ffffff"
  page-largest: "#f1f3f4"
  ink: "#3c3c3b"
  primary: "#ff671d"
  on-primary: "#ffffff"
  ink-black: "#000000"
  primary-alt: "#ff6519"
  hairline: "#dadce0"
  primary-hover: "#3c3b3b"
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 80px
    fontWeight: 700
    lineHeight: 88px
  display-mobile:
    fontFamily: Roboto, sans-serif
    fontSize: 50px
    fontWeight: 700
    lineHeight: 55px
  heading:
    fontFamily: Roboto, sans-serif
    fontSize: 48px
    fontWeight: 900
    lineHeight: 57.6px
  subheading:
    fontFamily: Roboto, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 42px
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: Roboto, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 26.4px
  nav:
    fontFamily: Roboto, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 0px
  link:
    fontFamily: Roboto, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 38.4px
  input:
    fontFamily: Roboto, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 20.7px
rounded:
  xs: 5px
  sm: 16px
  md: 36px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 6px
  s3: 7px
  s4: 10px
  s5: 12px
  s6: 13px
  s7: 15px
  s8: 16px
  s9: 17px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 17px 25px
    height: 60px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 12px 25px
    height: 39px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 25px 15px
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 15px 80px 15px 0px
    height: 56px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.ink-black}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 0px 3px
---

## Overview

lalamove.com/th-th is the Thai home page of Lalamove, titled "Lalamove ประเทศไทย | Lalamove ขนส่ง ขนย้าย ถึงไว ใน 1 ชม." (Lalamove Thailand, delivery and moving, arriving within 1 hour). The measured page is 1280px wide and 6046px tall and is written in Thai. The hero headline reads "ส่งคน ส่งของ 24 ชม. ในแอปเดียว" ("Deliver people and goods, 24 hours, in one app") at 80px bold in white, over a deep-orange image of the brand's orange motorbike, pickup truck and sedan, with the supporting line "แพลตฟอร์มให้บริการส่งด่วนและบริการรับ-ส่งผู้โดยสารแบบออนดีมานด์". The primary call to action is "เรียกใช้บริการตอนนี้" (Use the service now).

Below the hero, three orange cards sit on the seam between hero and white section: "ลูกค้าธุรกิจ" (business customers, "ขยายธุรกิจ ไปได้ไกลยิ่งขึ้น ให้บริการ 24/7 ไม่มีวันหยุด"), "ลูกค้าทั่วไป" (general customers, "บริการส่งด่วน ขนย้าย ได้ทันที! เริ่มต้นเพียง 33 บาท*") and "คนขับอิสระ" (independent drivers, "รับงานง่าย ได้เงินไว ขับได้ทุกเวลาที่ต้องการ"), each with a line icon and a text link with a chevron. A news carousel ("ข่าวสารล่าสุด") follows with large promotional banners (a purple "REWARDS ON THE MOVE" banner in the capture), page dots and orange arrow buttons, and then a grey band explaining the service ("ตัวช่วยเรื่องการส่งด่วนตลอด 24 ชม.", "ส่งไว ใช้งานง่าย ราคาประหยัด") with icon rows. A large white area in the capture between the cards and the news section had not rendered when the screenshot was taken and is not described.

A cookie-confirmation overlay (`hs-eu-cookie-confirmation`) was hidden by the extractor and is not brand UI. The voice is direct and benefit-led, with prices in baht and the speed promise repeated.

## Colors

- **Lalamove orange #ff671d** is the brand and action color: the filled primary and secondary buttons, the three hero cards (224 area-weight), the hero's saturated field and the carousel arrows. A second near-identical orange **#ff6519** (160 area-weight) also appears as a background and as the hover text color on dark buttons.
- **Charcoal #3c3c3b** is the text color on white (1634 characters), and the heading color. **#000000** is used for 105 characters.
- **Surfaces:** white #ffffff, and a pale grey **#f1f3f4** (912 area-weight, the largest) for the footer and alternating bands; #f3f4f5 appears once.
- **Hover:** primary buttons and cards darken to #3c3b3b (measured rgb(60, 59, 59)) with orange #ff671d text, so a hover inverts the button into a dark charcoal fill.
- **Hairline #dadce0** is the single light border color measured.

`--swiper-theme-color: #007aff` is a carousel-library default and not a brand color. The primary CTA also has a `btn-gradient.svg` background image layered on the orange; the gradient's stops are not in the extraction.

## Typography

A single family: **Roboto** (400, 500, 700 and 900 loaded) for all text; the loaded font list is only Roboto and swiper-icons, so no separate Thai web font was loaded.

- Display (h1): 80px on 88px, weight 700 (mobile 50px on 55px).
- Heading (h2, "ข่าวสารล่าสุด"): 48px on 57.6px, weight 900.
- Subheading (h3): 30px on 42px, weight 700.
- Body: 14px on 22px, weight 400, #3c3c3b.
- Primary button: 24px on 26.4px, weight 500. Secondary button: 14px on 15.4px.
- Card titles ("link" role): 32px on 38.4px, weight 600.
- Select input: 18px on 20.7px, weight 600.
- Nav: 14px, weight 500.

Other sizes in use: 16px, 12px, 19px.

## Layout

The page uses a centered content column with a large hero image behind the header. The three audience cards are 245px tall with 25px 15px padding and overlap the hero's bottom edge. News is a single-slide carousel with 14 pagination dots (as visible in the capture). The most frequent paddings are 20px, 15px, 25px, 7px, 10px, 13px and 30px, with 40px, 6px, 12px and 18px less often. The header holds the logo, five dropdown nav items (จัดส่ง, บริการรับ-ส่งผู้โดยสาร, ร่วมทีมคนขับ, รีวอร์ด, ลาลามูฟ), a country/language selector (ประเทศไทย – ไทย), a login link (ลงชื่อเข้าระบบ) and an orange "ลงทะเบียน" register button.

## Elevation & Depth

No box shadows were measured. Depth is from photography, the orange-to-dark gradient on the hero and the hero-to-section overlap of the audience cards. Borders are rare (#000000 on 7 elements and #dadce0 on one).

## Shapes

Buttons, cards and inputs compute a 0px radius: the CTAs, audience cards and select have sharp corners. Measured radii elsewhere: 100% (33 elements, circular icon holders and dots), 36px (7) and 16px (7) on banner and image cards, 50% (5) and 5px (1). The system's character is square action controls inside round decorative shapes.

## Components

- **Primary button**: #ff671d fill with an overlaid gradient SVG, white 24px/500 label, 17px 25px padding, 60px tall, square corners. Hover: #3c3b3b fill, orange text.
- **Secondary / register button**: #ff671d fill, white 14px label, 12px 25px padding, 39px tall, square corners. Hover is the same dark inversion.
- **Audience card**: #ff671d fill, white 32px/600 title, line icon, 14px description, chevron link, 25px 15px padding, 245px tall.
- **Select input**: city selector (กรุงเทพและปริมณฑล, ชลบุรี, ขอนแก่น, เชียงใหม่), 18px/600, 56px tall, no radius.
- **News banner**: 36px or 16px radius image with orange square arrow buttons.
- **Footer**: #f1f3f4 background, #3c3c3b 14px/600 links (บริการ, ลูกค้าธุรกิจ, ขนส่งสินค้า, คนขับร่วม, อัตราค่าบริการ, รีวิว).

## Design System Architecture

No public Lalamove design system or brand guideline was found. https://www.lalamove.com/th-th/ was opened and has no brand or design link; `/th-th/about-us`, `/th-th/press` and `/en/brand` returned 404. Its assets are served from a HubSpot file path (`/hubfs/raw_assets/public/lalamove-website-2020/` in the button gradient URL) and exposes only two root variables, both from the Swiper carousel library. The de-facto system is therefore class-based CSS built on Roboto, two oranges, a charcoal text color and a pale grey surface.

## Do's and Don'ts

- Do use #ff671d for primary actions, audience cards and carousel arrows, with white text.
- Do keep action controls square-cornered and 60px (primary) or 39px (secondary) tall.
- Do set headlines in Roboto 700 to 900 and body at 14px on 22px in #3c3c3b.
- Do invert buttons to #3c3b3b with orange text on hover.
- Don't round buttons or action cards; reserve round shapes for icons and banners.
- Don't use #007aff: it is the carousel library's default.
- Don't add shadows: none were measured.
- Don't treat the cookie overlay as brand UI.

## Responsive Behavior

The 390px pass measured: h1 50px on 55px (700), h2 32px on 38.4px (900), body 14px on 22px, the primary button at 24px/500 on #ff671d with the same gradient image, and header text 25px with #3c3c3b and #ff6519 children. The most common mobile sizes are 14px (624 characters), 21px (435), 16px (404), 18px and 32px. Column counts and menu collapse behavior were not measured.

## Iteration Guide

1. Build from the frontmatter tokens: orange `primary`, charcoal `ink`, grey `page-largest`.
2. Keep Thai copy benefit-led and short; prices carry an asterisk for terms, as on the cards.
3. Square corners on every action; round only icons.
4. Confirm new values in `web/data/extracted/lalamove-thailand.json`.
5. Run `node web/scripts/verify-designs.mjs --slug=lalamove-thailand`.
