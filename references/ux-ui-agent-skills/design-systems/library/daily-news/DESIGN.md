---
version: alpha
name: "Daily News (เดลินิวส์)"
category: "Thai Brands"
description: "Dailynews Online (dailynews.co.th), the web edition of the Thai daily Dailynews: a white page with magenta #ec008c section titles and rules, Kanit for headlines and navigation (400-700), Sarabun 16px/25.6px for Thai body copy, 8px-radius cards with a 10px soft shadow, and a very dense multi-section news home."
colors:
  canvas: "#ffffff"
  page-largest: "#fff9fc"
  ink: "#464646"
  primary: "#ec008c"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-pink-tint: "#ffeff7"
  ink-body: "#4f4f4f"
  ink-tan: "#bea079"
  ink-coral: "#ea7755"
  nav-hover: "#871a51"
  pill-yellow: "#f2d354"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
  headline-link:
    fontFamily: Kanit, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
  heading:
    fontFamily: Kanit, sans-serif
    fontSize: 27px
    fontWeight: 700
    lineHeight: 40.5px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Kanit, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 8px
  2xl: 10px
  3xl: 20px
  4xl: 25px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 2.5px
  s4: 3.23px
  s5: 4px
  s6: 5px
  s7: 8px
  s8: 8.11px
  s9: 8.28px
  s10: 10px
  gap-15: 15px
  gap-20: 20px
  gap-30: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 2.5px 10px
    height: 29px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.3xl}"
    padding: 2.5px 15px
    height: 30px
    borderColor: "{colors.primary}"
  button-yellow:
    backgroundColor: "{colors.pill-yellow}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.4xl}"
    height: 31px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.primary}"
    rounded: "{rounded.xl}"
    boxShadow: rgba(0, 0, 0, 0.5) 0px 0px 10px 0px
  footer:
    textColor: "{colors.primary}"
---

## Overview

Dailynews Online (เดลินิวส์) at https://www.dailynews.co.th/ is the web edition of a Thai daily newspaper. The document title is "เดลินิวส์ | อ่านความจริง อ่านเดลินิวส์" ("Dailynews | read the truth, read Dailynews"), the page language is Thai, and the contact page names the publisher as "บริษัท สี่พระยาการพิมพ์ จำกัด". The site is a very long, very dense news home: the extraction measured a 1280px-wide document 15,492px tall, and the capture is 11,619px tall at 960px wide.

The visual identity is a single hot magenta, #ec008c, on white. It colors the logo, the date in the header, every section title, the rule under each title, the "อ่านเพิ่มเติม" (read more) links, the carousel arrows and dots, and the primary buttons. Everything else is neutral: #464646 for most text, #4f4f4f for body paragraphs, white cards on a white page, and black photography overlays. The page also carries a pale pink family (#fff9fc is the largest background by DOM area, #ffeff7 tints captions and panels).

At capture time the top of the page carries a black memorial block for the funeral rites of Her Royal Highness Princess Bajrakitiyabha (เจ้าฟ้าพัชรกิติยาภาฯ): a wide black banner with a grayscale portrait, followed by a black panel listing dated news items with a yellow "ดูทั้งหมด" (view all) pill. The black (#000000, area weight 1084) is therefore an event treatment of the news, not a standing brand surface; this document records it as `surface-black` and keeps the rest of the system on the white page. A sticky advertising strip with a close control also appears over the capture; ads and that control are third-party and are excluded from the tokens and components.

Below the memorial block the page is a sequence of sections, each opening with a magenta Kanit title and a magenta rule: ข่าวล่าสุด (latest news), ไฮไลท์ (highlights), ข่าวเด่นวันนี้ (today's top news), บทความไฮไลท์ (featured articles), ข่าวประชาสัมพันธ์ (press releases) and เรื่องน่ารู้ (good to know). Photographs carry most of the color; many carry a white logo mark in a corner and a bold Thai headline overlaid in white with a dark gradient. The voice of the copy is tabloid and direct: emotive headlines with exclamation marks and plain calls to action ("อ่านเพิ่มเติม", "ดูทั้งหมด", "ตรวจผลสลาก").

## Colors

| Token | Value | Evidence |
|---|---|---|
| `canvas` | #ffffff | Body background-color on the desktop and mobile passes |
| `page-largest` | #fff9fc | Largest background by DOM area (weight 4092) |
| `ink` | #464646 | Most-read text color (8,170 characters) |
| `primary` | #ec008c | Second most-read text color (5,677 characters), primary button fill, 33 elements with a #ec008c border; also published as the root variable `--wp--preset--color--pink` |
| `on-primary` | #ffffff | Text on the primary button |
| `ink-body` | #4f4f4f | Color of paragraph text (2,347 characters) |
| `surface-black` | #000000 | Backgrounds in the memorial block (weight 1084) |
| `surface-pink-tint` | #ffeff7 | Background (weight 700); the translucent variant #ffeff7cc has weight 2765 |
| `nav-hover` | #871a51 | Navigation link color on hover (measured) |
| `pill-yellow` | #f2d354 | Fill of the "ดูทั้งหมด" pill in the memorial block, measured in the hover record |
| `ink-tan` | #bea079 | Text color on 274 characters; the element was not recorded |
| `ink-coral` | #ea7755 | Text color on 146 characters; also a border color on 2 elements |

Other measured text colors are #b19348 (145 characters, also a border color on 2 elements), #bdbdbd (102), #a65868 (102) and #78c6ff (101). They are not tokenized because the element they belong to was not recorded. Measured border colors are #ec008c (33 elements), #ea7755, #b19348, #cccccc, #464646 and #dee2e6.

Contrast rule: magenta on white is used for titles, links and small meta text (the dateline under each story is magenta), while the primary button reverses it to white text on a magenta fill. On hover, navigation links change from #464646 to #871a51; the yellow pill changes from a #f2d354 fill with #464646 text to a #464646 fill with white text and a white border.

## Typography

Thai set in three families: Kanit for headings, navigation, buttons and most body-size text (15,913 characters), a custom face named "DailyNews Mod" (2,462 characters; its role was not recorded), and Sarabun for paragraph text (489 characters). Trebuchet MS appears on 8 characters. Kanit is loaded in weights 400, 500, 600 and 700; Sarabun in 400 and 700 plus italics.

| Token | Family | Size / line-height | Weight | Measured use |
|---|---|---|---|---|
| `display` | Kanit | 18px / 18px | 400 | Navigation link "หน้าแรก"; the extractor reports it as the h1 role because the page has no h1 (see Iteration Guide) |
| `headline-link` | Kanit | 18px / 27px | 500 | White headline link in the memorial block (desktop h3, mobile lead link) |
| `heading` | Kanit | 27px / 40.5px | 700 | Section titles such as "ข่าวล่าสุด" and "ไฮไลท์" (h2) |
| `body` | Sarabun | 16px / 25.6px | 400 | Paragraph text |
| `button` | Kanit | 16px / 24px | 500 | Primary button label |
| `nav` | Kanit | 16px / 24px | 400 | Header and footer links |
| `button-secondary` | Kanit | 14px / 21px | 500 | "ดูทั้งหมด" pills |

Font sizes by character count on desktop: 16px (10,671 characters), 14px (2,840), 50px (1,962), 18px (960), 28px (748), 24px (551), 19px (347), 20px (330), 27px (90), 22px (86). Weights: 400 (9,105 characters), 500 (8,301), 600 (774), 700 (692). A 28px / 1.5px letter-spacing combination appears on 9 characters.

Weight 500 is the workhorse for headlines in lists and buttons, with 700 reserved for section titles. Line-height is generous for Thai: 1.5 on headlines (27px on 18px, 40.5px on 27px) and 1.6 on body copy (25.6px on 16px). The role of the custom "DailyNews Mod" face was not recorded, so it has no token.

## Layout

The header measures 98px tall at 1280px wide. In the capture it has two rows: first the logo (a magenta "D" monogram with the "เดลินิวส์ DAILYNEWS ONLINE" wordmark), a magenta "DAILYJOBS ONLINE" pill, social icons (Facebook, Instagram, X, YouTube, TikTok, LINE), the date in magenta, a menu icon and a magenta round search button; second a one-line text navigation of 14 items (หน้าแรก, ข่าว, บันเทิง, กีฬา, ดวง-มูเตลู, หวย, ไลฟ์สไตล์, ASSET, PEOPLE, บทความ, Sustain Daily, ประชาสัมพันธ์, วิดีโอ, ทุกทิศทั่วไทย) separated by magenta vertical bars, with a magenta hairline above.

The content column is centered and wide; the capture shows the page content inset from the viewport edges with the main modules aligned to the same left and right edges. Modules repeat a few patterns: a lead story with a large image beside a grid of small thumbnails (four columns by two rows in the capture) (ไฮไลท์), a horizontal four-up row of timestamped headlines (ข่าวล่าสุด) where the newest item has a magenta time chip, a four-up row of image cards (บทความไฮไลท์), and a carousel with left and right arrows and a dot row. Full-width promotional banners (a digital-newspaper subscription banner is visible) and a strip labelled as Taboola content (เรื่องที่คุณอาจสนใจ) interrupt the editorial flow; both are advertising or third-party and are not documented as brand components. A gray divider band separates some sections.

Spacing values measured by usage: gaps of 10px (416 elements), 20px (350), 5px (160), 15px (10), 30px (4), 35px (1) and 12px (1); paddings of 10px (262), 5px (91), 30px (87), 20px (53), 15px (28), 2.5px (26), 2px (24), 8px (15), 4px (3) and 12px (3). The `s1`-`s10` tokens list the small values; `gap-15`, `gap-20` and `gap-30` add the larger measured gaps. Density is high: stories are tightly spaced, thumbnails are small, and some headlines end in an ellipsis in the capture.

## Elevation & Depth

Depth is mostly flat, with one measured shadow family. Card images carry `rgba(0, 0, 0, 0.5) 0px 0px 10px 0px` (31 elements); the three card images in the role scan are 273px wide and 153px tall with an 8px radius. Other measured shadows are `rgba(0, 0, 0, 0) 0px 3px 5px 0px` (11 elements), `rgba(0, 0, 0, 0.25) 4px 4px 10px 0px` (5 elements) and single uses of `rgba(0, 0, 0, 0.4) 0px -4px 6px -3px`, `rgba(0, 0, 0, 0.2) 0px -1px 1px 0px`, `rgb(0, 0, 0) 0px 0px 10px 0px`, `rgba(236, 0, 140, 0.3) 0px 2px 6px 0px` (a magenta glow) and `rgba(0, 0, 0, 0.65) 7.5px 7.5px 3px 5px`.

In the capture, depth also comes from imagery: photographs with dark gradient scrims behind white overlay text, a black memorial block at the top, and white caption cards over a patterned gray and pink background in the lower sections.

## Shapes

Radius is mostly 8px. Measured values: 8px (247 elements), top-only 8px 8px 0 0 (33), 20px (29), 50% (24 elements), 6px (9), 25px (8), 70px (8), top-only 6px 6px 0 0 (5), bottom-only 0 0 6px 6px (3) and 10px (2). The tokens map 3px, 4px, 5px, 6px, 8px, 10px, 20px, 25px and 9999px.

Images and cards use 8px; the primary button uses 8px; the "ดูทั้งหมด" pills use 20px (magenta, measured at 30px and 31px tall) or 25px (31px tall, including the yellow pill in the memorial block). The 50% radius is measured on 24 elements; the round search button in the header is visible in the capture. Slider caption panels in the capture are pale pink rectangles; #ffeff7 and #ffeff7cc are the measured pink-tint backgrounds.

## Components

**Primary button.** "ข่าวกีฬาทั้งหมด" and "ข่าวบันเทิง": #ec008c fill, #ffffff text, Kanit 16px/24px 500, padding 2.5px 10px, 29px tall, 8px radius (measured widths 122px and 88px). On mobile the primary call to action is the link "ตรวจผลสลาก" at Kanit 18px/27px 600, padding 12px 24px, 51px tall, 8px radius, 152px wide.

**Secondary pill.** "ดูทั้งหมด": #ec008c fill, white text, Kanit 14px/21px 500, 15px horizontal padding, 20px or 25px radius, 30-31px tall (82-86px wide); one variant has a 2px solid #ec008c border.

**Yellow pill.** In the memorial block, "ดูทั้งหมด" has a #f2d354 fill with #464646 text and a 25px radius, 31px tall; on hover it inverts to #464646 with white text.

**Navigation.** The header role is 98px tall, white, 1280px wide. Links are Kanit 16px/24px 400 in #464646 and change to #871a51 on hover. The nav is a text row with magenta separators and the header hairline.

**Section header.** Kanit 27px/700 magenta title with a magenta rule beneath it; some headers carry a right-aligned pill. In the capture this pattern repeats for every section.

**Story card.** Image with an 8px radius and the 10px soft shadow, a headline in Kanit (18px/27px 500 over images, smaller below), a magenta dateline such as "15 ตุลาคม 2569 • 10:45 น." and, on feature stories, a short summary plus "อ่านเพิ่มเติม".

**Footer.** The footer role is 1280px wide and 209px tall; its text begins "อ่านความจริง อ่านเดลินิวส์ ข่าวเดลินิวส์ บทความ ดวง-หวย ไลฟ์..." and uses Kanit 16px/25.6px, with #464646 and #4f4f4f child text colors.

## Design System Architecture

No public design system, brand guideline or press kit was found: the home page and the contact page (https://www.dailynews.co.th/contact-us/) link to none, and the contact page only names the publisher and lists editorial and advertising contacts. The de-facto system is visible in the shipped markup at https://www.dailynews.co.th/.

The site runs on WordPress with the Elementor page builder: the HTML references the `hello-elementor` theme and a `hello-theme-child` child theme, and loads `elementor/assets/css/frontend.min.css?ver=3.33.4` and per-post `elementor-post-*-css` files. Elementor global typography variables (`--e-global-typography-primary-font-family` and siblings) point to the Kanit, Sarabun and Montserrat faces. The theme palette publishes WordPress preset variables, including `--wp--preset--color--pink: #ec008c`, `--wp--preset--color--black: #000000` and `--wp--preset--color--white: #ffffff`, plus the stock WordPress presets (for example `--wp--preset--color--vivid-red`, `--wp--preset--font-size--medium: 20px`).

Carousels use Swiper (`--swiper-navigation-size: 44px` and the `swiper-icons` font), icons use Font Awesome 5, and tables use TablePress. Video widgets define a `--cm-video-*` variable set that belongs to a third-party player and is not part of the news system. Because the system is assembled from a page builder and plugin CSS, class names and tokens come from the builder, not from a bespoke token package.

## Do's and Don'ts

**Do**
- Use #ec008c for section titles, rules, links, datelines, carousel controls and primary buttons; use white text on it.
- Set headlines and navigation in Kanit (500 for story headlines, 700 for section titles) and paragraph text in Sarabun 16px/25.6px.
- Open every section with a magenta Kanit title and a magenta rule beneath.
- Round cards, images and primary buttons at 8px; use 20px or 25px for "ดูทั้งหมด" pills and 50% for round icon buttons.
- Show datelines in the Thai format with a time: "15 ตุลาคม 2569 • 10:45 น.".
- Keep the memorial block black and grayscale when mourning coverage is shown, as a separate event section.

**Don't**
- Don't introduce a second brand color; yellow (#f2d354) appears only on the memorial block pill in the capture.
- Don't put drop shadows on buttons; the measured 10px shadow belongs to images and cards.
- Don't treat the sticky ad strip, ad slots or their close control as brand UI.
- Don't set Thai body text below 16px / 25.6px; the measured body line-height ratio is 1.6.
- Don't document the black banner as the site's standing background; the page canvas is #ffffff.

## Responsive Behavior

The extractor re-loaded the page at a 390px-wide viewport and recorded five roles. Layout reflow of the module grids, the carousel and the footer is not measured.

Measured at 390px: the header is 49px tall and 390px wide with Kanit 14px/21px 400 text, and the recorded header text contains only the date "15 ต.ค. 2026". The lead headline link is Kanit 18px/27px 500 white, 341px wide and 54px tall. The h2 "ไฮไลท์" stays at Kanit 27px/700 with a 40.5px line-height and is 350px wide. Paragraph text stays at Sarabun 16px/25.6px and measures 330px wide (305px on desktop). The primary call to action is the "ตรวจผลสลาก" link at Kanit 18px/600, padding 12px 24px, 51px tall, 152px wide, with an 8px radius.

Mobile character counts by size show 16px (11,859 characters), 14px (2,957), 30px (2,287), 18px (916) and 28px (874) as the largest groups. Breakpoints and media queries were not measured, and touch behavior is not measured.

## Iteration Guide

1. Start from the tokens: white canvas, #464646 ink, #ec008c primary with white text, Kanit plus Sarabun, 8px radius.
2. Build the header in two rows (logo and utilities, then the 14-item text navigation with magenta separators) and verify the 98px height.
3. Build one section module first (magenta 27px/700 title, magenta rule, four-up cards with 8px radius and the 0 0 10px 0 rgba(0, 0, 0, 0.5) shadow), then reuse it down the page.
4. The extractor's h1 role is the navigation link "หน้าแรก" (Kanit 18px/400), so SOURCES.json records an h1 override to the h2 section title (Kanit 27px/700); there is no h1 on the page.
5. If the memorial block is removed from the live site, re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase3-thai.json --only=daily-news --force --no-motion` and then `node web/scripts/generate-frontmatter.mjs --slug=daily-news`; the black surface token may disappear.
6. Run `node web/scripts/verify-designs.mjs --slug=daily-news` after any token edit.
