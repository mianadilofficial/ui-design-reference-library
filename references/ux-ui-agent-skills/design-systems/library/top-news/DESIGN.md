---
version: alpha
name: TOP NEWS
category: "Thai Brands"
description: "Thai online news outlet TOP NEWS: Kanit headings at 32px weight 500 and Sarabun body at 14px, white canvas with near-black ink #1b1b1b, a saturated blue headline band #1068b2, grey top bar, black footer and rounded 5px, 25px and 50px chips for LIVE and read-all links."
colors:
  canvas: "#ffffff"
  ink: "#1b1b1b"
  primary: "#004ce3"
  on-primary: "#f0f0f0"
  surface-maroon: "#690203"
  surface-blue: "#1068b2"
  surface-pink: "#fe7abd"
  ink-black: "#000000"
  ink-light: "#f1ebeb"
  ink-light-2: "#e6e6e6"
  ink-light-3: "#f5f1f1"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 48px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: Kanit, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 15px
  nav:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 5px
  md: 9px
  lg: 25px
  xl: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6.5px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 20px
components:
  link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink-black}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.ink-black}"
    textColor: "{colors.canvas}"
---

## Overview

TOP NEWS (https://www.topnews.co.th/, redirected to https://www.topnews.co.th/?index, page title "TOP NEWS - สำนักข่าวออนไลน์ ข่าวด่วน ข่าวดังทั่วไทย ฉับไวทุกเหตุการณ์บ้านเมือง", i.e. an online news agency covering breaking and national news) is a Thai online news site published by TOP News Digital Media Co., Ltd. (the footer lists a registered address in Bang Phli, Samut Prakan). 2009 visible elements were measured, so the page is a dense news front page.

The capture shows a light-grey top bar with the "TOP NEWS ONLINE" logo and a Thai section menu (การเมือง politics, ต่างประเทศ world, ไลฟ์สไตล์ lifestyle, ข่าวทั่วไทย nationwide news, มูลนิธิยังมีเรา foundation), a hamburger icon and a pill "LIVE" button, a wide advertising banner, then a saturated blue band headed "ข่าวเด่นวันนี้" (today's top news) with a large rounded-corner hero story card and a pagination dot row. Under it, a white "ข่าวล่าสุด" (latest news) block with two large story cards and a strip of five small cards, each with a grey rule under the heading and an outlined "อ่านข่าวทั้งหมด" (read all news) pill. A celebration banner for the outlet's fifth anniversary follows. A small cookie dialog (white box at the left with the "ตกลง" OK button) overlays the capture and is not documented as brand UI. The extraction was re-run once with the batch pipeline to handle the popup.

## Colors

- Canvas `#ffffff`; ink `#1b1b1b` (3869 characters), ink-black `#000000` (2833; nav text and the footer field `#000000`, 936 area weight).
- Surface-blue `#1068b2` (1206 area) is the headline band behind "ข่าวเด่นวันนี้", with `#00579e` (252) as a deeper blue; `#98c1ff` (777) is a light blue area.
- Surface-maroon `#690203` (1459 area), surface-pink `#fe7abd` (960), `#ffc315` yellow (729) and `#930714` red (252) are measured area colours of promotional and campaign imagery and are listed because they were measured; the extractor does not attribute them to a component.
- The top bar is grey `#c0c0c0`.
- Light text on dark areas: `#f1ebeb` (877 characters), `#e6e6e6` (713), `#f5f1f1` (230), white `#ffffff` (1509).
- Primary `#004ce3` is the fill of the button the extractor found as CTA ("อ่านรายละเอียดเพิ่มเติม คลิก", label `#f0f0f0`); it was not seen as a component in the first screen of the capture, so it is documented as measured but not as a named UI pattern.
- Highlight text `#fbcc6c` (90 characters). Swiper's `#007aff` and WordPress preset colours are framework defaults, not brand colours.

## Typography

Kanit (400, 500, 600) carries 8138 characters and is the Thai display and UI face; Sarabun (400, 500, 600) is the body and footer face (2110); Roboto, Work Sans, Prompt, and Font Awesome appear in small amounts.

- Display: Kanit 32px/40px weight 500 ("ข่าวเด่นวันนี้", white on the blue band). Mobile measured as 32px/48px weight 400.
- Body: Sarabun 14px/21px weight 400 (footer address); article body sizes measured by characters are 16px (4764), 20px (1408), 14px (885), 17px (836), 30px (804), 13px (801).
- Button: Kanit 15px/15px weight 500.
- Nav: the menu bar is Kanit 24px/36px weight 400; the system font stack at 16px/24px covers inline links.
- Weights present: 400 (8236 characters), 600 (1303), 500 (1087), 700 (40). A negative letter spacing is recorded for small text (11px/-0.9px, 14px/-0.5px).

Font substitute: Kanit and Sarabun are Google Fonts with Thai support and need no substitute.

## Layout

A 1280px desktop frame with a 127px header block, a 1120px content column inside full-width coloured bands (the heading is 1120px wide), and a 5-up strip of small cards. WordPress root variables give `--wp--style--global--content-size` 800px, `--wp--style--global--wide-size` 1200px and `--wp--style--block-gap` 24px. Gaps are a uniform 5px (36). Paddings: 10px (251), 8px (35), 5px (26), 40px (4), 30px (3). The footer is 598px tall, black, white Sarabun text with a 20px semibold heading.

## Elevation & Depth

Almost flat: two shadows are measured, `rgba(22, 43, 64, 0.15) 0px 10px 15px 0px` (a button hover state) and `rgba(0, 0, 0, 0.57) 0px 0px 10px 0px` (the cookie dialog). Hierarchy comes from the saturated blue band, 1px grey rules under headings and borders `#000000` (12 occurrences) and `#ffffff` (6) on chips and thumbnails.

## Shapes

Radii measured: 5px (16 elements), 25px (14), 50% (5), 50px (2), 10px (2), 3px, 9px, 4px and `5px 5px 0px 0px`. Pills (25px or 50px) are used for the LIVE and "read all" chips; 5px for cards and thumbnails; the hero story card in the capture has visibly rounded corners.

## Components

- LIVE chip: transparent fill, `#000000` text and a 3px solid `#000000` border, Kanit 15px weight 500, padding `8px 20px`, 37px high, 96px wide, 50px radius, with a small dot.
- Section pills "อ่านข่าวทั้งหมด": outlined, small text, pill radius.
- Menu: Kanit 24px, black on the grey bar, followed by a hamburger icon.
- Story cards: thumbnail with a caption below in black Kanit, 5px radius; the large cards show two-line headings.
- Primary button (extractor CTA): `#004ce3` fill, `#f0f0f0` label, Kanit 15px, 3px radius, padding `12px 24px`, 39px high.
- Footer: black, white text, company address and links.

## Design System Architecture

No public design system or brand guideline was found; the page https://www.topnews.co.th/ was measured by the extractor. The CSS is a WordPress theme with core block preset variables (`--wp--preset--*`, `--wp--style--*`) and Swiper navigation variables (`--swiper-navigation-size` 44px); there are 55 root variables, none carrying brand tokens. The de-facto system is therefore the WordPress block theme plus per-section colours (blue band, black footer, grey bar).

## Do's and Don'ts

- Do use Kanit for headings and the menu, Sarabun for body text and footers.
- Do separate news blocks with 1px grey rules and an outlined pill link.
- Do use the saturated blue band `#1068b2` behind the lead story section.
- Do keep Thai headline copy on two lines with a clear title and subtitle structure.
- Don't copy the WordPress preset colours or Swiper blue as brand colours.
- Don't treat banners, the anniversary graphic or the cookie dialog as standing UI.
- Don't invent a different brand colour for category tags; none were measured.

## Responsive Behavior

Mobile (390px) measured: h1 32px/48px, body 14px; sizes by characters 16px (6495), 18px (1191), 20px (827), 13px (805), 12px (430), 22px (276). The mobile menu pattern and card column counts were not measured.

## Iteration Guide

1. Grey top bar, black menu text in Kanit 24px, a LIVE pill with a 3px black border.
2. Blue `#1068b2` band with a white 32px/40px Kanit heading and a lead story.
3. White "latest news" block with two large cards and five small cards.
4. Black footer with white Sarabun text.
5. Gate: `node web/scripts/verify-designs.mjs --slug=top-news`.

### Measured reference

All figures in this block are verbatim from the desktop extraction (weight in parentheses is the measured character, area or occurrence weight).

- Font families by characters: Kanit (8098), Sarabun (2033), Roboto (247), Prompt (21), -apple-system (15), Arial (10).
- Font sizes by characters: 16px (4685), 20px (1243), 14px (1048), 30px (887), 13px (847), 17px (713), 12px (430), 25px (230), 32px (224), 24px (70), 15px (47).
- Font weights by characters: 400 (8084), 500 (1170), 600 (1134), 700 (36).
- Letter spacing by size: none recorded.
- Text colours by characters: #1b1b1b (3869), #000000 (2833), #ffffff (1509), #f1ebeb (877), #e6e6e6 (713), #f5f1f1 (230), #111111 (135), #fbcc6c (90), #211a12 (36), #f0f0f0 (28), #030303 (23), #feffff (18).
- Background colours by area: #690203 (1459), #1068b2 (1206), #fe7abd (960), #000000 (936), #98c1ff (777), #ffc315 (729), #00579e (252), #930714 (252), #c0c0c0 (87), #ffffff5e (38), #004ce3 (9), #2b333fb3 (4).
- Border radii: 5px (16), 25px (14), 50% (5), 50px (2), 3px (1), 9px (1), 5px 5px 0px 0px (1).
- Box shadows: none recorded.
- Border colours: #000000 (12), #ffffff (6), #6c6261 (1).
- Gaps: 5px (34).
- Paddings: 10px (250), 8px (35), 5px (25), 4px (6), 6.5px (6), 40px (4), 2px (4), 30px (3), 7px (2), 15px (2), 20px (1), 12px (1).
- Stylesheet colours by count: #ffffff (254), #000000 (86), #00000080 (32), #0000001a (32), #111111 (22), #00000026 (19), #00000000 (18), #dddfe2 (18), #cccccc (15), #00000066 (14), #61ce7000 (14), #dadde1 (14), #90949c (14), #ebedf0 (14).
- Stylesheet font sizes: 12px, 14px, 16px, 20px, 18px, 13px, 11px, 15px, 24px, 30px, 10px, 25px, 40px, 28px.
- Stylesheet radii: 4px, 25px, 3px, 10px, 2px, 5px, 50px, 8px, 1px, 18px.
- Fonts loaded: Sarabun 400 normal, Sarabun 500 normal, Sarabun 600 normal, Kanit 400 normal, Kanit 500 normal, Kanit 600 normal, Roboto 400 normal, Roboto 600 normal, Roboto 700 normal, Font Awesome 5 Free 900 normal, VideoJS 400 normal, Prompt 600 normal, Work Sans 400 normal, Work Sans 700 normal.
- Visible elements: 1996; document language: en-US; hover states recorded: 6.
