---
version: alpha
name: Hino Motors Sales Thailand
category: "Thai Brands"
description: "hinothailand.com, the Thai site of Hino Motors Sales (Thailand) Co., Ltd.: a white canvas of full-bleed truck photography in Poppins and Prompt (14px weight 300 labels, 27px bold uppercase headings), #727272 grey copy, signal-red #ed1c24 buttons and nav hover, 4px-radius controls with one 70px pill, and a dealer-search card."
colors:
  canvas: "#ffffff"
  ink: "#727272"
  primary: "#ed1c24"
  on-primary: "#ffffff"
  surface-fog: "#f5f5f5"
  surface-snow: "#fafafa"
  ink-charcoal: "#242424"
  ink-graphite: "#272727"
  ink-black: "#000000"
  hairline: "#e9e9e9"
  text-input-bg: "#e6e6e6"
  text-input-text: "#7b7b7b"
  scrim: "#00000080"
typography:
  display:
    fontFamily: Poppins, Prompt
    fontSize: 14px
    fontWeight: 300
    lineHeight: 20px
    textTransform: uppercase
  display-mobile:
    fontFamily: Poppins, Prompt
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  subheading:
    fontFamily: Poppins, Prompt
    fontSize: 27px
    fontWeight: 700
    lineHeight: 30px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 5px
  md: 70px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 20px
  s7: 25px
  s8: 30px
  s9: 60px
  s10: 150px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.xs}"
    padding: 10px 20px
    height: 42px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.md}"
    padding: 10px 20px
    height: 42px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.xs}"
    padding: 10px 20px
    borderColor: "{colors.hairline}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.display}"
    padding: 10px 15px
    height: 40px
  card:
    backgroundColor: "{colors.surface-snow}"
    textColor: "{colors.ink-graphite}"
    rounded: "{rounded.sm}"
    padding: 30px
---

## Overview

hinothailand.com is the Thai-language site of ฮีโน่ (HINO) Thailand, operated by บริษัท ฮีโน่มอเตอร์สเซลส์ (ประเทศไทย) จำกัด (Hino Motors Sales (Thailand) Co., Ltd.); the footer copyright reads "Copyright ©2020 HINO MOTORS SALES THAILAND". The title is "รถบรรทุก :: HINO THAILAND" followed by Thai truck keywords. The desktop pass measured 495 visible elements on a 1280px-wide, 11143px-tall page; a cookie policy overlay was hidden during measurement. The first capture of this brand showed a black-and-white tribute slide in the hero carousel; per the queue rules the extraction was re-run once for this brand, and the final capture shows the commercial page. The tribute slide is carousel content and not part of the brand's visual system.

The measured page is a long scroll of full-bleed truck photographs. The header is white with the HINO logo (red emblem and black letters) at left and eight Thai nav labels: รุ่นรถฮีโน่ (Models), ดาวน์โหลดโบรชัวร์ (Download brochure), HINO JOURNEY, ข้อเสนอพิเศษ (Special Offers), ข่าวสารฮีโน่ (News), ตัวแทนจำหน่าย (Dealer), เกี่ยวกับฮีโน่ (About), ติดต่อฮีโน่ (Contact). The top banner carries the headline "ครบทุกความต้องการ มาตรฐาน EURO 5" over a row of trucks. Each following band is one photograph of a white Hino truck in a working setting (a convenience-store street, a construction site, a mall frontage, a quarry, an orchard) with a centred outlined "More Detail" button and, on two bands, a red-and-white italic "NEW ARRIVAL" tag. Further down: a HINO-CONNECT telematics promo, a "ทดลองขับฮีโน่ วันนี้" test-drive banner, the news block "ข่าวสารฮีโน่" with a "ดูข่าวทั้งหมด" red pill button, a dealer-locator card ("ค้นหาผู้จัดจำหน่าย HINO") with a province select and red "ค้นหา" button beside a map of Thailand with red pins, and a footer with Models, Site map and Support Contact columns plus a hotline, social links (LINE, Facebook, YouTube, TikTok) and legal links (PDPA, Privacy Policy, Terms, Cookie Policy).

The voice is practical and product-led, and Thai is primary with English labels in places ("More Detail", "Special Offers", "Models").

## Colors

- **Canvas {colors.canvas}** (#ffffff): the dominant background (10569 area).
- **Ink {colors.ink}** (#727272): the most-read grey for body copy (553 characters).
- **Primary {colors.primary}** (#ed1c24): the Hino red, used for button fills (14 area), the nav hover colour (rgb(237, 28, 36) on all eight nav labels) and red text (94 characters). On primary {colors.on-primary}: #ffffff.
- **Fog {colors.surface-2}** renamed {colors.surface-fog} (#f5f5f5, 1940 area) and **snow {colors.surface-3}** renamed {colors.surface-snow} (#fafafa, 86): the light grey sections and the dealer card.
- **Charcoal** {colors.ink-charcoal} (#242424, 469 characters), **graphite** {colors.ink-graphite} (#272727, 181) and **black** {colors.ink-black} (#000000, 156): the darker text tiers; nav labels are black before hover.
- **Hairline {colors.hairline}** (#e9e9e9): the border of the "More Detail" outline buttons (14 measurements).
- **Input** {colors.text-input-bg} (#e6e6e6) with text {colors.text-input-text} (#7b7b7b): the province select.
- **Scrim** {colors.scrim} (#00000080, 122 area) and a white 25% overlay (#ffffff40): translucent layers over photography.

## Typography

One family stack, **Poppins** (2024 characters) with **Prompt** for Thai glyphs; the loaded fonts also include Kanit 400, FontAwesome and an icon font "revicons". Weights: 300 (1577 characters), 400 (406), 500 (29), 700 (12).

- **Display** {typography.display}: Poppins/Prompt 14px, weight 300, line-height 20px, uppercase. This is how the extractor read the heading role: the measured h1-role element is a nav link ("รุ่นรถฮีโน่") so it is a 14px label and not a large headline. Mobile variant {typography.display-mobile} 14px weight 400.
- **Subheading** {typography.subheading}: 27px bold, line-height 30px, uppercase (h3 "ข่าวสารฮีโน่"). Colour #272727.
- **Body**: 14px weight 300, colour #727272 (the paragraph "Follow the movement of all channels").
- **Card title**: 22px, line-height 25px, uppercase (the dealer card heading).

Sizes by characters: 14px (1365), 13px (410), 22px (90), 16px (79), 11.9px (53), 18px (15), 27px (12). No letter-spacing is recorded.

## Layout

The page is a stack of full-width photographic bands, each about a screen high. The header is 70px tall per the nav hover probe, with the logo at left and eight labels spaced across. Content sections (news, dealer locator, footer) sit in a centred column on white or #f5f5f5. Measured paddings: 15px (64), 8px (31), 10px (17), 20px (16), 150px (14), 12px (11), 25px (8), 5px (7). The nav links have 25px vertical padding. No flex or grid gaps were recorded.

## Elevation & Depth

Only one shadow was measured: rgba(0, 0, 0, 0.2) 0px 0px 8px 1px (1 element). Depth is photographic: trucks cast their own shadows on the road in the photos and the "More Detail" buttons sit over image gradients. A 50% black scrim (#00000080) appears behind some overlay text.

## Shapes

Radii: 4px (15 elements), 70px (1) and 5px (1). The search button and outline buttons are 4px ({rounded.xs}); "ดูข่าวทั้งหมด" is a 70px pill ({rounded.md}); the dealer card is 5px ({rounded.sm}). Everything else computes 0px (header, bands, photos).

## Components

- **Primary button ("ค้นหา")**: {colors.primary} fill, white 14px uppercase label at weight 400, 4px radius, padding 10px 20px, 42px tall, 1px border.
- **Secondary pill ("ดูข่าวทั้งหมด")**: same red fill and type, 70px radius, padding 10px 20px, 42px tall.
- **Outline button ("More Detail")**: transparent fill, white label, 1px #e9e9e9 border, 4px radius, padding 10px 20px, centred over each truck photo.
- **Nav links**: 14px weight 300 uppercase, black; hover turns the text #ed1c24 with no fill.
- **Select (province)**: #e6e6e6 fill, #7b7b7b text, 14px weight 300, padding 10px 15px, 40px tall.
- **Dealer card**: {colors.surface-snow} fill, #272727 text, 5px radius, padding 30px.

The cookie-policy overlay and the ยอมรับการใช้คุกกี้ (accept cookies) control are consent UI and are not documented as brand components.

## Design System Architecture

No public design system or brand guideline is linked: the fetched home page lists an About page (ประวัติฮีโน่), a link to the global parent site (hino-global.com), News and a YouTube channel, and no brand guidelines page; no search was run. The de-facto system is a legacy marketing stylesheet: no root variables (rootVars is empty), a Poppins and Prompt font stack, FontAwesome and a "revicons" slider icon font, and a photographic template where each model is one banner with a single outline button.

## Do's and Don'ts

- Do let full-bleed truck photography carry each section, with one outlined "More Detail" button centred over it.
- Do use the Hino red #ed1c24 only for actions, hover states and key marks.
- Do keep type light (300) and small (14px) with uppercase nav labels.
- Do give controls a 4px radius and reserve the 70px pill for the news action.
- Don't add heavy shadows.
- Don't use the tribute or memorial slide treatment as a template.
- Don't document the cookie overlay as UI.

## Responsive Behavior

Mobile (390px) was measured. The role elements keep the desktop sizes: the "More Detail" link stays 14px weight 400 with 4px radius and padding 10px 20px; the body stays 14px weight 300; the "ค้นหา" button stays 14px, 4px radius, padding 10px 20px. The mobile size ladder is 14px (1125 characters), 22px (90), 16px (79), 11.9px (53), 10px (44), 18px (27), 27px (12). Layout reflow and the menu pattern are not measured.

## Iteration Guide

1. White canvas, #727272 light-weight copy, black nav labels turning #ed1c24 on hover.
2. Build each product band as a full-bleed photograph with a centred outline "More Detail" button.
3. Use red fills for the 4px search button and the 70px news pill.
4. Place the dealer locator as a #fafafa card with a map.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=hino-motors-sales-thailand--<page> --url=<url> --force --no-motion` before adding tokens.
