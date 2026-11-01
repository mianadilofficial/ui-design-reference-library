---
version: alpha
name: Channel 3 Thailand (3Plus)
category: "Thai Brands"
description: "ch3thailand.com redirects to 3Plus (ch3plus.com), Channel 3's streaming site: near-black #00040d canvas, #f2f6fd ink and a white-fill 'play' button with dark text and 4px radius, Thai type in the DB Heavent family at 20px and 28px."
colors:
  canvas: "#00040d"
  ink: "#f2f6fd"
  primary: "#f2f6fd"
  on-primary: "#00040d"
  primary-hover: "#b9bbc2"
  ink-white: "#ffffff"
  ink-muted: "#d7d7d7"
  surface-card: "#121416"
  surface-footer: "#000000"
  surface-gray: "#8d8d8d"
  live-red: "#d22127"
typography:
  display:
    fontFamily: db_heaventregular, san-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 33.6px
    letterSpacing: 0.2px
  display-mobile:
    fontFamily: db_heaventregular, san-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26.4px
    letterSpacing: 0.2px
  subheading:
    fontFamily: db_heaventlight, san-serif
    fontSize: 17.55px
    fontWeight: 700
    lineHeight: 22px
  body:
    fontFamily: db_heaventregular, san-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: 0.2px
  button:
    fontFamily: db_heaventmed, san-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 25px
    letterSpacing: 0.5px
rounded:
  xs: 2px
  sm: 4px
  md: 4.57px
  lg: 5px
spacing:
  s1: 2px
  s2: 4px
  s3: 7px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 25px
  s9: 32px
  s10: 36px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 40px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-white}"
    padding: 0px 0px 10px
---

## Overview

The queued address `https://www.ch3thailand.com/` redirects to `https://ch3plus.com/`, the streaming and catch-up site of Thailand's Channel 3, titled "ดูทีวีกด 33 ดูออนไลน์ที่ 3Plus - ช่อง3" (watch TV on channel 33, watch online at 3Plus). This file documents that measured site. A second slug in this library, `channel-3`, was queued with `ch3plus.com` directly and measures the same site.

The visual register is a streaming service: a near-black field (`#00040d`) in which poster art is the only source of color, light text in Thai, and a single repeated control, a pale "play" button with dark text. The page is 7,631px tall at 1280px width and consists of a 64px header, a split hero (a dark title panel with the show's logo, a tagline and a "เล่น" (Play) button on the left, a bright poster collage on the right), a "ไฮไลท์" (Highlights) block with a six-tile thumbnail grid beside a live player marked "LIVE", then horizontal rows of portrait posters, each row introduced by a Thai title and two small carousel dots at the right edge.

Row titles in the capture include "อุบัติรักเกาะสวรรค์", "ละครออนแอร์" and "กรรมเก่า...ตามมาทวงคืน". Poster artwork is drama still photography with title lettering inside the artwork, so type and color in the rows are supplied by the content, not by the interface. Microcopy is short Thai UI labels: ละคร/ซีรีส์ (dramas and series), ภาพยนตร์ (movies), รายการ (programs), Shorts, เพลง (music), ข่าว (news), LIVE, ประชาสัมพันธ์ (public relations) and "3Plus Premium".

A cookie-policy layer (`cookie_policy`) was hidden before measurement and is not documented as brand UI. Promotional banners and the app-download links are content, not brand components.

## Colors

The theme is dark-mode only in the measured data.

- **Canvas `#00040d`** is the page background (a blue-black). **Ink `#f2f6fd`** is the most-read text color (3,192 weighted characters) and also the fill of the primary button; **`#ffffff`** (1,592 characters) is used in the footer; **`#d7d7d7`** (91) and **`#b9bbc2`** (79) are secondary text; `#00040d` itself is the label color on the light button (80 characters).
- **Primary `#f2f6fd`** fills the "เล่น" (Play) and "คลิก" (Click) buttons with `#00040d` text. On hover the fill becomes `#b9bbc2` (the text stays `#00040d`). There is no chromatic brand color on the buttons.
- **Surfaces**: `#121416` (1,311 area units) for cards and panels, `#000000` for the footer (775), and `#8d8d8d` for a very large measured area (16,384 units) that the capture does not tie to a specific element; it is kept as a measured value only.
- **Live red `#d22127`** is measured as a background on two units, matching the small red badge and the red broadcast icon next to "LIVE" in the capture. The stylesheet's `:root` also declares `--main-color: red`.

The stylesheet corpus includes other blues such as `#0f62fe` and `#0076ff` and a gray `#9b9b9b`; they come from bundled UI-library and player styles and were not measured on rendered elements, so they are not brand colors here.

## Typography

All text is Thai and Latin set in the DB Heavent family, loaded as separate per-weight faces named `db_heaventlight`, `db_heaventregular`, `db_heaventmed` and `db_heaventbold` (the stylesheet also declares `db_heaventblack` and a condensed `db_heavent_cond`). The measured `font-weight` is 400 for every character (5,094 of 5,094) because the weight sits in the family name. The font stack in the CSS is written `db_heaventregular, san-serif` (the generic name is spelled "san-serif" in the stylesheet, as measured). Roboto (38 characters) and an icon font (`icomoon`) are also loaded; a player font (`ByteArkPlayer`) is loaded for the video controls.

- **Display**: `db_heaventregular` 28px / 33.6px, letter-spacing 0.2px, used for the hero title and for section titles such as "ไฮไลท์". The mobile pass measured 22px / 26.4px.
- **Body**: `db_heaventregular` 24px / 28.8px, 0.2px tracking, for hero descriptive copy in a 245px-wide box.
- **Button / nav**: `db_heaventmed` 20px / 25px with 0.5px tracking for buttons (the nav links use 20px / 24px with 0.25px). 20px is the dominant size on the page (3,738 characters), followed by 28px (606), 16px (229), 22px (171) and 18px (148).
- **Subheading**: `db_heaventlight` 17.55px / 22px, weight 700, used for 280px-wide card titles.
- Other measured sizes: 42.56px with -1px letter-spacing (41 characters), 38px, 24px and 15px.

Thai line-heights are tight but not compressed: 1.2 on display (33.6px on 28px) and 1.2 on body. No uppercase transform is used; Thai has no case, and the Latin labels "LIVE" and "Shorts" are set as written.

Font substitute if DB Heavent files are unavailable: a Thai-capable humanist sans with several weights (the site itself falls back to the generic sans). This is a suggestion, not a measurement.

## Layout

The header is 64px tall on a 1280px page with `0px 40px` padding. In the capture it carries the "3+" logo at far left, then the eight text links, an outlined "3Plus Premium" button, and at the right a search icon, a globe (language) icon and the "เข้าสู่ระบบ / ลงทะเบียนฟรี" (log in / register free) link.

The hero is split roughly into two halves: a dark left panel with show logo, tagline and button, and a full-height poster image at right with carousel dots at the bottom. Beneath it, the Highlights block pairs a 3-column by 2-row thumbnail grid (each caption set in small Thai text) with a larger live player at right whose caption bar shows a red badge and a program title. Content rows below use six poster columns per viewport width in the capture, each poster followed by a one-line title.

Measured spacing is generous around edges and tight between items: paddings of 12px (105 uses), 20px (25), 2px and 7px (5 each), 4px (3), 40px (2); gaps of 20px and 32px (2 each). The footer is 442px tall with `0px 0px 10px` padding on `#000000`.

## Elevation & Depth

Almost flat. A single shadow is measured, `rgba(34, 36, 38, 0.15) 0px 1px 2px 0px`, on one element. Separation is achieved by background steps (`#00040d` page, `#121416` panels, `#000000` footer) and by the posters' own brightness against the dark field. The left hero panel is dark over a photograph; no gradient value was measured on a CSS role, so none is specified.

## Shapes

Corners are small. The dominant radii are 4px (46 measured uses) and 5px (40 uses), with 2px and 4.57143px each measured once and a `0px 0px 4px 4px` bottom-only radius once. The primary "play" button is 4px (rounded `sm`). Poster tiles in the capture have softly rounded corners consistent with those 4px to 5px values, but no per-tile radius was isolated. There are no pill buttons.

## Components

- **Primary button**: `#f2f6fd` fill, `#00040d` label, `db_heaventmed` 20px / 25px, 0.5px tracking, 4px radius, 140×44px ("เล่น" measured 140px wide); hover fills `#b9bbc2`. The label "คลิก" shares the same fill, text and hover colors.
- **Nav**: transparent over the dark page, 64px tall; links `#f2f6fd` at 20px / 24px (the ละคร/ซีรีส์ link measured 60×24px). The "3Plus Premium" link is drawn as an outlined button. Hover on nav links measured the same text color (`#f2f6fd`) with no background.
- **Poster card**: portrait image with a title line beneath (the card title measured 280px wide). Row header at left, carousel dots at right.
- **Highlight tile**: thumbnail with a two-line caption.
- **Live panel**: large player with a "LIVE" label and a red broadcast mark above it; the caption bar uses `#121416`.
- **Footer**: `#000000`, white 22px / 25px with 0.5px tracking, headings such as "ดาวน์โหลด แอปพลิเคชั่น" (download application) and link columns for dramas, series and programs.

## Design System Architecture

No public design-system or brand-guideline page was found on the pages opened (the redirected home page at `https://ch3plus.com/`, whose navigation and footer list content categories and app downloads). The de-facto system is a streaming-platform front end assembled from third-party UI and player styles. The stylesheet declares font-face families named `Icons`, `outline-icons`, `brand-icons`, `Step`, `Accordion`, `Checkbox`, `Dropdown`, `Rating`, `FontAwesome`, `Lato`, `NotoSansThai`, `ByteArkPlayer` and `VideoJS`, alongside the DB Heavent faces, and the `:root` holds only `--font-size: 7`, `--base-font-size: 9` and `--main-color: red`. The brand layer is therefore a handful of overrides (near-black canvas, light ink, DB Heavent type, one white button) over component-library defaults. Source of measurement: https://ch3plus.com/.

## Do's and Don'ts

Do:
- Keep the canvas `#00040d` and let poster artwork provide all chroma.
- Use one control style: `#f2f6fd` fill, `#00040d` label, 4px radius, 44px tall, hover `#b9bbc2`.
- Set Thai text in DB Heavent at 20px for controls and 28px for section titles, with 0.2px to 0.5px letter-spacing.
- Use red only for live and broadcast indicators.

Don't:
- Don't add a second brand accent to buttons; the measured primary is near-white.
- Don't use the library blues (`#0f62fe`, `#0076ff`) found in the stylesheet corpus.
- Don't uppercase Thai or Latin labels; no text-transform is measured.
- Don't treat the cookie layer, banners or app-download links as brand components.

## Responsive Behavior

Measured at a 390px viewport (mobile pass): the display title drops from 28px / 33.6px to 22px / 26.4px (the hero title box is 120px wide), the section title "ไฮไลท์" becomes 22px / 26px in a 309px-wide box with `0px 0px 12px 16px` padding (it is 28px / 32px in a 610px-wide box with `0px 0px 16px` on desktop), and body copy becomes 20px / 24px at 358px wide (24px / 28.8px at 245px wide on desktop). The mobile font-size table is led by 18px (3,047 characters), 20px (975), 22px (541), 16px (224) and 14px (54). A primary button was not recorded on the mobile pass. Header layout, navigation pattern and the number of poster columns at mobile width were not recorded, so they are not measured. Tablet widths and a light theme were not measured.

## Iteration Guide

1. Start from `canvas #00040d`, `ink #f2f6fd`, and one white-fill 4px-radius button with dark text.
2. Use DB Heavent: regular 28px / 33.6px for titles, 24px / 28.8px for copy, medium 20px / 25px for controls.
3. Build rows of portrait posters under Thai row titles with two carousel dots at the right.
4. Add red `#d22127` only for live indicators.
5. Keep the footer `#000000`, 442px tall, with white 22px links.
6. Re-measure card titles and the live panel before publishing exact pixel specs; only their widths were recorded.
