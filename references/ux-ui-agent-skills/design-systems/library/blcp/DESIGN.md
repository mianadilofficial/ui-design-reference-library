---
version: alpha
name: BLCP Power
category: "Thai Brands"
description: "BLCP Power (บริษัท บีแอลซีพี เพาเวอร์ จำกัด) Thai homepage, blcp.co.th: Noto Sans Thai with 34px/600 hero heading and 17.92px body, deep blue #0e3f64 with lime #a6ce39 pill buttons, pale #f4f7ec news panel, 16px-radius rounded photo cards and a left sidebar menu."
colors:
  canvas: "#ffffff"
  page-largest: "#0e3f64"
  ink: "#0e3f64"
  primary: "#a6ce39"
  on-primary: "#0e3f64"
  surface-3: "#f4f7ec"
  ink-3: "#f8f7f7"
  ink-4: "#212529"
  ink-5: "#0e3f64bf"
  ink-6: "#1f2937"
  hairline: "#0000002d"
  text-input-bg: "#f8f9fa"
  lime-light: "#bed84e"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", Arial, sans-serif"
    fontSize: 34px
    fontWeight: 600
    lineHeight: 40.8px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28.8px
  body:
    fontFamily: "\"Noto Sans Thai\", Arial, sans-serif"
    fontSize: 17.92px
    fontWeight: 400
    lineHeight: 27.776px
  button:
    fontFamily: "\"Noto Sans Thai\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 14.16px
  link:
    fontFamily: "\"Noto Sans Thai\", Arial, sans-serif"
    fontSize: 20.48px
    fontWeight: 600
    lineHeight: 27.648px
  input:
    fontFamily: "\"Noto Sans Thai\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 16px
  3xl: 32px
  4xl: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 7px
  s8: 8px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 7px 16px 7px 8px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 7px 16px 7px 8px
    height: 48px
    boxShadow: rgba(0, 102, 179, 0.1) 0px 4px 4px 0px
  nav-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 7px 16px 7px 8px
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-4}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 29px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

BLCP Power (Thai: บริษัท บีแอลซีพี เพาเวอร์ จำกัด; logo "BLCP POWER" in blue condensed capitals with a swirl-and-leaf mark) is a Thai coal-fired power producer at Map Ta Phut. The page title reads "โรงไฟฟ้ามาบตาพุด ผลิตไฟฟ้าด้วยถ่านหินสะอาด | โรงไฟฟ้าบีแอลซีพี" and the measured page is the Thai homepage `https://www.blcp.co.th/` (1,280px wide, 4,219px tall, `lang="th"`). The extractor hid a splash element (`blcp-splash`, a memorial pop-up in the first capture); the tokens come from the second extraction with it hidden. A cookie notice with "การตั้งค่าคุกกี้" and "ยอมรับทั้งหมด" buttons and a round blue chatbot mascot remain in the capture; they are not brand UI and are not documented.

The layout is an application-style portal. A white left sidebar (240px-class) carries the logo, a vertical menu of eight items with round blue icons (หน้าหลัก highlighted in a pale-lime gradient, เกี่ยวกับเรา, ความยั่งยืน, การดำเนินงานด้านสิ่งแวดล้อม, ข่าวสาร, ศูนย์การเรียนรู้, ข้อมูลและรายงานด้านสิ่งแวดล้อม, ติดต่อเรา) and a navy air-quality widget listing stack-emission readings for two units (live data, not design). A top bar to the right has two white-and-lime phone pills ("ติดต่อโรงไฟฟ้าบีแอลซีพี 038-925100", "ร่วมงานกับเรา 081-000-7362"), partner logos and TH and EN round toggles plus a search circle. A carousel announces an awards ceremony, a navy band holds the company name and an introduction paragraph, and a blue gradient band holds the large logo. Then come three rounded photo tiles with arrow buttons, a pale-green "ข่าวประชาสัมพันธ์" panel with five rounded news cards, and a "วิดีโอความรับผิดชอบต่อสังคม" video block with a bold headline.

## Colors

- **Canvas `#ffffff`** (area weight 1,331) and the deep **blue `#0e3f64`** (weight 807, the hero text band, footer, ink and `page-largest`) alternate down the page; `#0d3f64` (18) is a near-identical value.
- **Ink `#0e3f64`** is the most-read text color (680 characters); white `#ffffff` (575) and off-white `#f8f7f7` (547, paragraph text on the navy band) follow; `#212529` (452), `#1f2937` (121) and `#8b8b8b` (40) are neutral text colors; `#0e3f64bf` (162) is 75% navy for secondary text.
- **Primary lime `#a6ce39`** (area weight 28) is the fill of the phone pill and active menu item; **light lime `#bed84e`** (weight 49) fills the "คลิกที่นี่" and "FAQ เรื่องพลังงานที่นี่" buttons and the arrow circles.
- **Panel `#f4f7ec`** (496) is the pale-green news panel; `#0066b31a` (499) is a 10% blue tint; `#f6f6ff` (336) a lavender-white panel; `#0000000d` (342) a faint overlay.
- **Input `#f8f9fa`**; **hairline `#0000002d`**; **card border `#0000000f`**.
- The text color `#0d6efd` (105 characters) is Bootstrap's default link blue and is not treated as brand.

## Typography

One family, **Noto Sans Thai** (weights 400, 500, 600 and 700 loaded) with Arial and `sans-serif` fallbacks, sets all text.

- **Display** 34px/600/40.8px (the company-name heading in white on the navy band); mobile 24px/28.8px.
- **Body** 17.92px/400/27.776px in `#f8f7f7` on navy (14px on mobile).
- **Link / banner title** 20.48px/600/27.648px.
- **Button** 12px/500/14.16px for the two-line phone pills (label above number).
- **Input** 16px/400/24px.
- Other measured sizes include 18px/600 (menu), 24px/600 (section titles such as "วิดีโอความรับผิดชอบต่อสังคม"), 26px/600/32.5px (footer title) and 30px/500 (large call-to-action button).

Weights: 600 (1,145 characters), 400 (1,089), 500 (375), 700 (129). No letter-spacing was recorded.

### Font substitutes

Noto Sans Thai is an open Google Fonts family; the declared fallbacks are Arial and `sans-serif`.

## Layout

A fixed-looking left sidebar and a content area about 960px wide (nav 960px by 75px, footer 960px by 357px, the banner link 960px by 390px, the intro heading box 864px by 41px). The first row of tiles is three equal photo cards; the news panel holds five cards in a row (the extractor counted a maximum of five card columns and four visible header links). Each section sits on alternating white, pale-green and navy bands. Spacing values recorded: 1, 2, 3, 4, 5, 6, 7, 8, 10 and 12px.

## Elevation & Depth

Shadows are soft and varied: `rgba(0, 0, 0, 0.25) 0px 4px 4px 0px` (12 elements), `rgba(0, 0, 0, 0.075) 0px 2px 4px 0px` (8), `rgba(0, 0, 0, 0.12) 0px 8px 18px 0px` (5), a blue-tinted `rgba(0, 102, 179, 0.1) 0px 4px 4px 0px` on the white pill and `0px 4px 10px` on the menu highlight, and a deep stack for the cookie notice (`rgba(0, 0, 0, 0.18) 0px 12px 32px 0px, rgba(0, 0, 0, 0.08) 0px 2px 8px 0px`). The page reads as layered cards over bands of color.

## Shapes

Rounded forms dominate: 50% (21 elements, circular icons and toggles), 16px (19; cards), 4px (13), 800px (13; the pill buttons), 32px (10), 5px (9), 999px (6), 6px (6), 12px (6), 8px (2) and 50px, plus `16px 16px 0px 0px` and `0px 0px 16px 16px` panel edges and `6px 0px 0px 6px` on the search input's left side. News and photo cards in the capture are visibly rounded; pill buttons carry radius 800px.

## Components

- **Phone pill (primary).** `#a6ce39` fill, navy 12px/500 two-line label (name above number), radius 800px, padding 7px 16px 7px 8px, 188x48px, with a round icon at the left. Hover (measured) makes the fill transparent.
- **Phone pill (secondary).** White fill, same type and radius, shadow `rgba(0, 102, 179, 0.1) 0px 4px 4px 0px`.
- **Large action button.** `#bed84e` fill, white 30px/500 label, radius 800px, padding 8px 24px, 200x57px ("คลิกที่นี่"); the mobile "FAQ เรื่องพลังงานที่นี่" button measures 358x48px with 18px/600 white text.
- **Sidebar menu.** 18px/600 navy items with round blue icons and chevrons; active item has a pale-lime gradient.
- **Photo tile / news card.** Rounded (16px-class) image with white or lime arrow circle at the bottom right; news card titles are 14px-class bold navy.
- **Search input.** `#f8f9fa` fill, 16px, 222x29px, left radius 6px.
- **Footer.** `#0e3f64`, white 26px/600 title.
- **Not documented as brand UI:** the cookie notice, the memorial splash, the chatbot mascot, the air-quality readings.

## Design System Architecture

No public design system or brand guideline was found: the Thai homepage was opened and links only to corporate content, and no search was run. The page uses Bootstrap-like defaults (the `#0d6efd` link blue and `#212529` text color) over a custom skin. The brand layer is a navy-and-lime pairing, Noto Sans Thai at 400/600, 800px pill buttons with a round icon at the left, and 16px-radius cards on tinted bands. Source: https://www.blcp.co.th/ as measured by the repository extractor.

## Do's and Don'ts

- Do use navy `#0e3f64` for headings, the footer and text on lime, and white text on navy bands.
- Do use lime `#a6ce39` or `#bed84e` pills with a round icon for contact and calls to action.
- Do round cards at 16px and set them on pale `#f4f7ec` panels.
- Do keep Thai body text at 17.92px/27.776px with weight 400.
- Don't use Bootstrap's `#0d6efd` as a brand blue.
- Don't present the cookie notice, memorial splash or chatbot as components.
- Don't show live emission readings as design content.

## Responsive Behavior

Measured on a 390px mobile pass: the h2 falls from 34px/40.8px to 24px/28.8px (294px by 58px box); body text falls from 17.92px to 14px/21.7px (294px by 152px); the primary button measured is the 358px by 48px "FAQ เรื่องพลังงานที่นี่" (18px/600, padding 9px 24px); the nav container measured 390px by 64px with "EN" and "TH" in 15px/600. Visible header links fall from 4 to 2 and the maximum card columns from 5 to 2; no menu toggle was detected (`menuToggleVisible: false`). Other behavior is not measured.

## Iteration Guide

1. Use the tokens as measured with the splash hidden; re-run `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase3-thai.json --only=blcp --force` if the splash returns.
2. Navy `#0e3f64` and white bands, lime pills with a left round icon, 16px-radius cards on pale-green panels.
3. Noto Sans Thai 600 for headings, 400 for body.
4. Keep notices and widgets out of the brand component list.
5. Run `node web/scripts/verify-designs.mjs --slug=blcp` until it passes.
