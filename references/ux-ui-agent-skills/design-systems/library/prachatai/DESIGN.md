---
version: alpha
name: Prachatai (ประชาไท)
category: "Thai Brands"
description: "Prachatai.com, Thai independent news site: a dense white newsroom front page with a black category bar, alternating #cccccc and #ffe2c9 section bands, Anuphan 600 headlines at 24px and Sarabun 15-16px copy, a #e96024 orange 'read more' button, #ff6347 theme links and 4-6px radii."
colors:
  canvas: "#ffffff"
  page-largest: "#ffe2c9"
  ink: "#000000"
  primary: "#e96024"
  on-primary: "#ffffff"
  band-grey: "#cccccc"
  ink-muted: "#999999"
  ink-body: "#2a2a2a"
  link-blue: "#3498db"
  nav-link-text: "#ff6347"
  footer-bg: "#232733"
typography:
  display:
    fontFamily: Anuphan, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28.8px
  display-mobile:
    fontFamily: Sarabun, sans-serif
    fontSize: 17.6px
    fontWeight: 400
    lineHeight: 31.68px
  subheading:
    fontFamily: Anuphan, sans-serif
    fontSize: 14.4px
    fontWeight: 600
    lineHeight: 17.28px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 15.2px
    fontWeight: 400
    lineHeight: 21.28px
  button:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 27.2px
  nav:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  pill: 9999px
spacing:
  s1: 2.4px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.band-grey}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 10px 20px
    height: 43px
    borderColor: "{colors.band-grey}"
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link-blue}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

Prachatai (ประชาไท) is a Thai-language independent news outlet; this file documents the home page at `https://prachatai.com/` (lang th, title "ประชาไท Prachatai.com"), measured at 1280px with 1,074 visible elements and a scroll height of 7,875px. It is a classic multi-column newsroom front page: logo and social icons on top, a text menu (ประชาไท, English, ThisAble.me, บล็อกกาซีน, ร้านค้า, โฆษณา, ปฏิทินกิจกรรม, ข่าวประชาสัมพันธ์, ช่องทางสนับสนุน), a black category bar (แก้รัฐธรรมนูญ, การเมือง, เศรษฐกิจ, สิทธิมนุษยชน, ศิลปวัฒนธรรม, ต่างประเทศ, คุณภาพชีวิต, ความมั่นคง, สิ่งแวดล้อม, ไอซีที, อินโฟกราฟิก, มัลติมีเดีย, แรงงาน, วารสาร คนทำงาน, บทความ, กวีประชาไท, สัมภาษณ์, กีฬา), then a lead story with a large image on the left and a ruled list of thumbnail headlines on the right.

Below the fold, the page alternates full-width bands: grey for บทความ (articles), a pale peach for ข่าว and others, each opened by a » arrow and a large Thai category title with a rule under it, then four image cards per row, and a full-width bordered grey button to see more. A monthly activity calendar and a black footer close the page. Voice is plain Thai news register, with dates in the Buddhist era (e.g. "5 ตุลาคม 2569") and timestamps.

A sticky donation bar ("ร่วมบริจาคเงิน สนับสนุน ประชาไท" with a red support button and a close icon), a floating social-share column and a share counter appear in the capture. These are overlays, not documented as brand UI or tokens; the support-bar button colours (`#d9534f`, hover `#c9302c`) are therefore excluded.

Editorial density is the defining trait. The lead story is introduced with a video-style card (a dark-blue graphic with a play button and dot pagination), and the right-hand list repeats the same pattern for every item: a small landscape thumbnail, a bold two-line Thai headline and a timestamp such as "9 ต.ค. 13:08 น.". Section modules reuse the same card pattern at a larger size. There is no hero illustration; the photographs supplied by each story supply all colour, and the interface itself remains black, white, grey and one orange. A promotional banner for the outlet's merchandise shop sits between the lead area and the first band.

## Colors

Text colours by characters: `#000000` (4,098), `#ffffff` (797), `#999999` (519), `#2a2a2a` (276), `#3498db` (200), `#cccccc` (185), `#333333` (102). Backgrounds by area: `#ffe2c9` (1,879), `#cccccc` (1,872), `#000000` (593), `#ffffff` (405), `#f8f9fa`, `#333333`, `#f4f4f4`, `#e96024` (57).

- **canvas `#ffffff`**: body and header background (`--body-bg`). **page-largest `#ffe2c9`** and **band-grey `#cccccc`** are the two alternating section bands.
- **ink `#000000`**: headlines and the category bar (`#000000` fill, white labels).
- **primary `#e96024`**: the orange of the full-width "อ่านข่าวเพิ่มเติม" and "คลิกอ่านบทความ" buttons in the capture, equal to the stylesheet variable `--pct-theme-color` and measured as the mobile call-to-action fill; white `#ffffff` text on it.
- **nav-link-text `#ff6347`** equals `--theme-color` and is the colour of menu links; its hover is shown as `#e96024` on the wordmark link. **link-blue `#3498db`** equals `--link-color-darkblue`.
- **ink-body `#2a2a2a`** is `--text-color`; **ink-muted `#999999`** (`--color-grey-999`) is date and meta text; **footer-bg `#232733`** is `--footer-bg`.

Other published variables: `--header-color #4287f5`, `--text-caption #c93e3e`, `--aw-focus #0066cc`, `--link-color-skyblue #60a5fa`, `--color-light #e7a498`, `--theme-color-two #302e44`.

## Typography

Fonts loaded: **Anuphan** (400/600/700) and **Sarabun** (400/700), both Thai-capable families; the stylesheet also declares `"Open Sans"` as `--font-content`. By characters: Anuphan 4,515, Sarabun 1,748. No substitute is declared beyond `sans-serif`.

- **display**: Anuphan 600, 24px/28.8px, black, the lead-story and card headlines (measured on a link element).
- **subheading**: Anuphan 600, 14.4px/17.28px, list headlines (the most common size, 4,566 characters).
- **body**: Sarabun 400, 15.2px/21.28px, `#333333`.
- **nav / link**: Sarabun 400, 16px; **button**: Sarabun 700, 16px/27.2px.
- **display-mobile**: Sarabun 400, 17.6px/31.68px.

Other sizes: 12.8px (542), 13px, 11.2px, 48px (95 characters, the large category titles), 10.4px, 19.2px. Weights by characters: 600 (4,137), 400 (1,910), 700 (218), 500 (11). Headlines are semibold, not bold; hierarchy is built with size and rules.

## Layout

A two-column lead area (large image story at left, thumbnail headline list at right, each separated by hairlines), then repeated section modules: category title with a bottom rule, four equal image cards each with a 2-line headline and date, and a centred "see more" button. Header height measured 80px; the footer is 381px tall. Spacing values: 2.4, 4, 5, 6, 8, 10, 15, 16, 20, 25px.

The page scrolls through roughly eight modules in sequence: lead stories, articles, news, special reports, interviews, multimedia, in-depth news and the constitutional-amendment topic, press releases, then the activity calendar for October 2026 with a Sunday-first week grid, previous and next controls, and the footer with About and Contact link columns.

## Elevation & Depth

Two box-shadows were measured: `rgba(0, 0, 0, 0.1) 0px -2px 15px 0px` (the sticky bar) and `rgba(0, 0, 0, 0.25) 0px 2px 10px 0px`. The stylesheet also defines `--aw-shadow: 0 2px 10px rgba(0, 0, 0, 0.15)`. The page is otherwise flat, with ruled lines and colour bands for separation.

## Shapes

Radii measured: 50% (36 elements, circular social icons), 5px (9), 4px (6), 6px (5), plus partial corners `0px 0px 0px 6px` and `6px 0px 0px`. `--aw-btn-radius` is 4px. The secondary buttons measure 5px. Images and cards are square.

## Components

- **button-primary (orange)**: `#e96024` fill, white Sarabun 700 16px text, full width in the right column; its desktop radius was not recorded.
- **button-secondary**: white fill, `1px solid #cccccc`, `#cccccc` text, 5px radius, 43px high, 10px 20px padding ("คลิกอ่านข่าวอื่นๆ", the see-more buttons).
- **Category bar**: black band, white 14-16px labels in two rows.
- **Menu**: text links in `#ff6347`-family colours, 16px.
- **Story card**: image, 2-line Anuphan headline, grey date.
- **Footer**: black fill, white text, "เกี่ยวกับประชาไท / ติดต่อประชาไท".

## Design System Architecture

No public design-system or brand-guideline page was opened; no official system is cited. The de-facto system is a custom CSS-variable theme: `--theme-color #ff6347`, `--pct-theme-color #e96024`, `--text-color #2a2a2a`, `--footer-bg #232733`, `--aw-*` tokens (`--aw-btn-bg #f0f0f0`, `--aw-btn-hover #e0e0e0`, `--aw-btn-active #d0d0d0`, `--aw-border #cccccc`, `--aw-btn-radius 4px`) and grey scale variables. Source: `https://prachatai.com/` measured via `web/data/extracted/prachatai.json`.

## Do's and Don'ts

- Do keep white canvas with black headlines in Anuphan 600.
- Do separate sections with alternating `#cccccc` and `#ffe2c9` bands and a ruled title.
- Do use `#e96024` with white text for the main "read more" action.
- Do show dates in Thai Buddhist-era format.
- Don't document the donation bar, share column or its Bootstrap-style red button as brand tokens.
- Don't use bold headlines; 600 is the headline weight.
- Don't add shadows to cards.
- Don't round images.

## Responsive Behavior

The mobile pass measured type: base text 15.84px (4,384 characters), 14.08px, 17.6px, 12.32px, 35.2px. The wordmark link measured 17.6px/31.68px weight 400, and the call-to-action measured `#e96024` fill, white 17.6px text, 10px padding, 52px high, 0px radius. Mobile column counts, nav form and breakpoints were not measured.

## Iteration Guide

1. Canvas `#ffffff`, ink `#000000`, primary `#e96024`.
2. Headlines Anuphan 600 24px/28.8px (list 14.4px); copy Sarabun 15.2px/21.28px.
3. Alternate `#cccccc`/`#ffe2c9` bands for section modules, 4-up image cards.
4. Keep the black category bar with white labels.
5. Re-measure: `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase3-thai.json --only=prachatai --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=prachatai`.
