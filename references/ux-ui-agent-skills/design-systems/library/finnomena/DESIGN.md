---
version: alpha
name: Finnomena
category: "Thai Brands"
description: "Finnomena (Thai mutual fund investing platform) design system: aktiv-grotesk-thai type at 17px, white canvas, dark navy #01172c banners, acid yellow #f2f93c button with 4px radius, navy 200px sign-up pill and pale-yellow #fbfdbf cards."
colors:
  canvas: "#ffffff"
  ink: "#01172bde"
  primary: "#f2f93c"
  on-primary: "#01172bde"
  surface-navy: "#01172c"
  surface-subtle: "#f7f8f9"
  ink-muted: "#01172b99"
  ink-navy: "#01172b"
  ink-black: "#000000"
  accent-negative-red: "#e60a0a"
  hairline: "#e1e3e6"
  tint-yellow: "#fbfdbf"
  accent-green: "#00e76b"
  card-border: "#01172b0d"
typography:
  display:
    fontFamily: aktiv-grotesk-thai, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  display-mobile:
    fontFamily: aktiv-grotesk-thai, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
  heading:
    fontFamily: aktiv-grotesk-thai, sans-serif
    fontSize: 17px
    fontWeight: 700
    lineHeight: 27.2px
  body:
    fontFamily: aktiv-grotesk-thai, sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: aktiv-grotesk-thai, Helvetica, Arial, sans-serif
    fontSize: 15px
    fontWeight: 700
  link:
    fontFamily: aktiv-grotesk-thai, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 20px
  xl: 21px
  2xl: 200px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-secondary:
    backgroundColor: "{colors.ink-navy}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    height: 44px
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    height: 56px
  nav:
    textColor: "{colors.ink-black}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-navy}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    borderColor: "{colors.card-border}"
    boxShadow: rgba(0, 0, 0, 0.25) 0px 30px 60px -40px, rgba(0, 0, 0, 0.12) 0px 16px 40px -12px
  footer:
    textColor: "{colors.ink-black}"
---

# Finnomena

## Overview
Finnomena is a Thai investment platform for mutual funds and investing knowledge; the page title is "Finnomena - ซื้อขายกองทุนรวม พร้อมแหล่งความรู้การลงทุน". The home page is a content-and-product hybrid. A slim header shows the "Finnomena." wordmark (a lowercase logotype ending in a period), a wide grey search field ("ค้นหาบทความ หุ้น กองทุน"), a text link "ลงชื่อเข้าใช้" and a dark navy "สมัครสมาชิก" pill. Below it a full-width navy promotional banner for Finnomena Funds ("กว่า14,500 ล้านบาท* ความไว้วางใจที่นักลงทุนมอบให้", with "All Weather Strategy" in black on a yellow highlight and a green "สนใจลงทุน คลิก" button) leads into "โอกาสลงทุนในกองทุน" with filter pills (ทั้งหมด, FundTalk, Mr.Messenger, MEVT, Private, Tax) and a list of pale-yellow opportunity cards tagged with a green "ซื้อ" and a black "Tax" chip. A side panel offers "คุยกับ Charlie AI", an AI chat input. Lower sections show "สัมมนาล่าสุด" seminar cards with date, place or Zoom and "ดูรายละเอียด", then a featured promotion article and a grid of articles with small grey category tags (โปรโมชั่น, มุมมองการลงทุน, กองทุน). The voice is practical Thai financial media with regulatory footnotes under promotions.

## Colors
The accent color is acid yellow `#f2f93c`, used as the fill of the "เริ่มลงทุน" button (text `#01172b` at 87 percent opacity), as highlighter behind banner titles, and as a pale tint `#fbfdbf` for opportunity cards. The ink and dark surface are a very dark navy: `#01172c` (the largest background area, used for the banner and footer), `#01172b` for solid text and the "สมัครสมาชิก" pill, `#01172bde` (87 percent) for most reading text (3,645 characters) and `#01172b99` (60 percent) for secondary text. Canvas is white `#ffffff`, with `#f7f8f9` as a subtle grey band (the seminar section) and `#e1e3e6` hairlines. Small accents: green `#00e76b` (the "ซื้อ" tag and call-to-action button), text green `#17c161`, and red `#e60a0a` for negative figures (48 characters). The root variables include a full Vuetify theme (`--v-primary-base` `#ffcd00`, `--v-success-base` `#00e676`, `--v-info-base` `#26a69a` and many lighten/darken steps); those are framework defaults and are not treated as brand values. The browser default link blue `#0000ee` was measured on a link and is dropped.

## Typography
One family, aktiv-grotesk-thai (Adobe Fonts), weights 300, 400, 500 and 700, covers all 5,661 measured characters; Font Awesome 5 and 6 supply icons. The first heading in the measurement ("สัมมนาล่าสุด") is 20px weight 700 with 30px line-height; card headings are 17px weight 700 with 27.2px line-height; body is 17px weight 400 with 27px line-height; buttons are 15px weight 700. Other sizes by character count are 15px (2,289), 17px (1,861), 13px (696), 12px (635) and 24px (133); small text carries slight positive tracking (13px/0.042px, 15px/0.024px). Weights split between 400 (2,395), 700 (2,150) and 500 (1,116), so bold titles and regular body alternate constantly. Aktiv Grotesk Thai is licensed; Noto Sans Thai or IBM Plex Sans Thai could stand in.

## Layout
The desktop capture is 1,280px wide and 5,693px tall. The page is a single wide column inside side gutters, with a two-column area where the opportunity list sits left and the Charlie AI panel right. Seminar cards run three across inside a `#f7f8f9` band with a heading row ("สัมมนาล่าสุด" left, "ดูทั้งหมด (4)" right). The article area uses one large feature (image left, text right) above a four-up row of article cards, then a "บทความล่าสุด" list with image-left rows. The header is white. Measured paddings are 8px (79 uses), 12px, 16px, 3px and 4px; gaps are 8px, 4px and 32px.

The imagery is almost entirely promotional artwork supplied by fund houses and partners: banner key art with portraits, seminar posters in saturated blue, black and yellow, and article thumbnails that repeat the same navy, yellow and white scheme, so the interface palette reinforces the artwork instead of competing with it. Each seminar card carries a small calendar or location icon line (date and time, then Finnomena Office, Zoom or a venue) and a "ดูรายละเอียด" link with an arrow, and promotional cards end with small disclaimers in grey (12px and 13px text is measured on the page).

## Elevation & Depth
There is one measured shadow, `rgba(0, 0, 0, 0.25) 0px 30px 60px -40px, rgba(0, 0, 0, 0.12) 0px 16px 40px -12px`, on the floating Charlie AI chat card. Everything else is flat: cards use a 1px hairline (`#01172b0d`, `#e1e3e6`) or sit directly on tinted bands. The yellow highlight blocks and the dark navy banner provide most of the contrast.

## Shapes
Corners are mostly 4px (27 uses) for buttons, tags and thumbnails; the sign-up pill is 200px (fully rounded), cards use 20px or 21px (12 uses), the chat input card 16px, and a few elements 8px. The result is a squarer, editorial base with a few pill accents for navigation.

## Components
**button-primary**: yellow `#f2f93c` fill, navy `#01172bde` text, aktiv-grotesk-thai 15px weight 700, radius 4px, height 56px ("เริ่มลงทุน", 99px wide).
**button-secondary**: navy `#01172b` fill, white text, 200px radius, height 44px ("สมัครสมาชิก", 130px wide).
**nav / footer text**: `#000000`.
**card**: white, `#01172b` text, 16px radius, 8px 16px padding, `#01172b0d` border and the soft shadow above (the Charlie AI card).
**tags**: small green "ซื้อ" and black "Tax" chips on yellow opportunity cards; grey category tags on articles.
The cookie consent banner (hidden during measurement) is not part of the documented UI.

## Design System Architecture
No public design-system or brand-guideline page was found on the home page, which links only to a press-release category. The site's CSS carries a Vuetify theme (the `--v-*` variables, 146 root variables in total) and the Swiper carousel defaults (`--swiper-theme-color` `#007aff`, `--swiper-navigation-size` 44px), neither of which matches the brand's yellow and navy, so the de-facto brand system is the repeated set of values seen in the rendered page: navy `#01172b` family, yellow `#f2f93c`, aktiv-grotesk-thai, 4px corners and a handful of pills.

## Do's and Don'ts
- Do use navy `#01172c` for banners and footer and `#01172bde` for reading text.
- Do reserve acid yellow `#f2f93c` for the main call to action and for highlighter-style emphasis on promotional titles.
- Do use green only for buy tags and positive calls to action, red for negative figures.
- Do keep corners at 4px, with a fully rounded pill for sign-up.
- Don't use the Vuetify default yellow `#ffcd00` or the Swiper blue `#007aff` as brand colors.
- Don't add shadows to ordinary cards.
- Don't show the cookie banner as brand UI.

## Responsive Behavior
At the 390px mobile pass the first page heading measured 24px weight 700 with 36px line-height in a 131px block (20px and 30px on desktop). The "เริ่มลงทุน" button measured 15px type, 36px height and 109px width with 4px radius (56px by 99px on desktop). Mobile font sizes by character count: 17px (1,497), 15px (750), 13px (574), 12px (418), 20px, 18px, 14px and 24px. Breakpoint widths and menu behavior were not measured.

## Iteration Guide
1. Use canvas `#ffffff`, band `#f7f8f9`, ink `#01172bde`, dark `#01172c`, accent `#f2f93c`.
2. Build a navy promo banner with yellow highlighter titles and a yellow button.
3. Present opportunities as pale-yellow `#fbfdbf` cards with green and black tags.
4. Use aktiv-grotesk-thai 17px/27px for body and 15px bold for buttons.
5. Keep corners at 4px, with pill sign-up and filter controls.
6. Re-run the gate after edits.
