---
version: alpha
name: ซี.พี.ทาวเวอร์ (C.P. Tower)
category: "Thai Brands"
description: "Office-for-rent site of C.P. Tower buildings managed by C.P. Land, set in db_helvethaica at 25.12px body and 80px display on white, with brand green #006838, lime green #8ec63f accents, slate ink #58595b and 50px-radius pill links."
colors:
  canvas: "#ffffff"
  ink: "#58595b"
  primary: "#8ec63f"
  brand-green: "#006838"
  surface-pale: "#eaeceb"
  ink-soft: "#5f5f5f"
  hairline: "#707070"
typography:
  display:
    fontFamily: db_helvethaica, Prompt, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
  display-mobile:
    fontFamily: db_helvethaica, Prompt, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 58.5px
    fontWeight: 400
    lineHeight: 58.5px
  heading:
    fontFamily: db_helvethaica, Prompt, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 80px
    fontWeight: 700
    lineHeight: 64px
    textTransform: uppercase
  subheading:
    fontFamily: db_helvethaica, Prompt, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 29.3904px
    fontWeight: 700
    lineHeight: 38.2075px
  body:
    fontFamily: db_helvethaica, Prompt, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 25.12px
    fontWeight: 400
    lineHeight: 32.656px
  link:
    fontFamily: db_helvethaica, Prompt, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 25px
    fontWeight: 700
    lineHeight: 32.5px
    textTransform: uppercase
rounded:
  xs: 5px
  sm: 12px
  md: 20px
  lg: 30px
  xl: 50px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 15px
  s9: 20px
  s10: 30px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
    padding: 6px 30px
  nav:
    textColor: "{colors.canvas}"
    padding: 0px 40px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    padding: 0px 20px 30px
  footer:
    backgroundColor: "{colors.brand-green}"
    textColor: "{colors.canvas}"
    padding: 0px 20px
---

## Overview

This file describes `https://www.cptower.co.th/`, which redirects to `https://www.cptower.com/th`: the Thai-language leasing site of **ซี.พี.ทาวเวอร์ (C.P. Tower)**, titled "ซี.พี.ทาวเวอร์ อาคารสำนักงานให้เช่ากรุงเทพและต่างจังหวัด" (C.P. Tower office buildings for rent in Bangkok and the provinces). The page text says the buildings are managed by "บริษัท ซี.พี.แลนด์ จำกัด (มหาชน)" (C.P. Land PLC) and lists 13 locations (Bangkok: Silom, Fortunetown, Phayathai, Northpark; provinces: Phitsanulok, Khonkaen, Nakhonratchasima, Udonthani, Suratthani, Nakhonsithammarat, Hatyai). The site is a property-brand site, not an investor-relations site of the trust named in the queue, so the DESIGN.md is named after the measured site.

The first screen is a full-bleed slider of building photographs under a transparent header (a grey logo tab "CP TOWER" at the left, four links: เกี่ยวกับเรา, อาคารสำนักงาน, ข่าวสารและกิจกรรม, ติดต่อเรา, at the right) with arrows at the sides and a promotional headline in 80px bold white ("วันนี้ - 31 มกราคม 69 เพียงเช่าพื้นที่ 3 ปี ..."). Under the slider a phone line "Tel 02 766 3888, 091 774 9233" runs along the bottom edge. The next band is white: a split of a bright empty-office photograph and a right-aligned heading "ซี.พี.ทาวเวอร์" in green over "อาคารสำนักงานคุณภาพ" in slate, with three numbered points (01, 02, 03 as large ghost numerals) and a pill link "เพิ่มเติม>>". A dark-green full-bleed banner for CP TOWER NORTHPARK ("OFFICE FOR RENT" in gold-toned lettering and a white "SIGN UP" button) and a CP LAND footer strip complete the capture.

Voice is promotional and reassuring: leasing offers with dates, and trust language such as "ได้รับความน่าเชื่อถือมาอย่างยาวนานกว่า 40 ปี" (trusted for more than 40 years).

## Colors

`canvas` is #ffffff. `ink` #58595b, a neutral dark slate, is the main reading colour (1806 characters) and `ink-soft` #5f5f5f the secondary (456). White text (2893 characters) sits on photography and on green. `brand-green` #006838 is the dominant measured background area (the footer and green banners) and the colour of the green wordmark-style heading "ซี.พี.ทาวเวอร์" (337 characters). `primary` #8ec63f, a lime green, is the colour of navigation link text (69 characters) and small accents. `surface-pale` #eaeceb is a pale grey section background; `hairline` #707070 is the colour of 1px borders (5 uses).

The measured #00683899 (brand green at partial alpha) belongs to the cookie-consent panel that was open on the page ("เว็บไซต์นี้ใช้คุกกี้ ..." with a green "ยอมรับ" button); it and the memorial pop-up shown in the capture (a black framed tribute card with a close icon) are overlays, not brand UI, and no component or token is documented from them. The pop-up was still on screen after a re-measurement with the standard extractor; no overlay was recorded as hidden.

## Typography

Everything is set in `db_helvethaica` (5561 of the measured characters), a Thai-capable face loaded at weights 400 and 700; the stack is `db_helvethaica, Prompt, "Helvetica Neue", Helvetica, Arial, sans-serif`. Material Icons is loaded for icon glyphs. Because db_helvethaica is a licensed Thai face, Prompt (named next in the stack) is the declared fallback.

Measured scale: `display` 80px / 80px at 400 (h1 "ซี.พี.ทาวเวอร์ อาคารสำนักงานคุณภาพ"); `display-mobile` 58.5px / 58.5px at 400 at 390px; `heading` 80px / 64px at 700 uppercase (promotional slider headlines); `subheading` 29.3904px / 38.2075px at 700 ("พื้นที่เริ่มต้น : 165 - 1,235 ตร.ม."); `body` 25.12px / 32.656px at 400; `link` 25px / 32.5px at 700 uppercase. Footer and small text use 19.2px, 20.8px and 22.4px. The sizes are large because the Helvethaica face is narrow with a small x-height; weight 400 carries 4217 characters, 700 carries 1344 and is used for numbers and offers.

## Layout

The desktop page is 1280px wide and 5401px tall. The header is 90px tall with 40px side padding; navigation links have 20px side padding and 30px bottom padding, and the active link has an angled clip-path shape behind it (the extraction recorded a polygon clip on the link's pseudo-element). Content bands alternate full-bleed photography with a white two-column split. Measured paddings are 20px (34 uses), 10px, 2px, 30px, 6px and 5px; gaps 5px, 15px, 10px and 40px.

## Elevation & Depth

Two small shadows were measured: `rgba(0, 0, 0, 0.2) 0px 0px 6px 0px` (5 uses, soft halo on buttons) and a three-layer Material-style shadow `rgba(0, 0, 0, 0.2) 0px 3px 1px -2px, rgba(0, 0, 0, 0.14) 0px 2px 2px 0px, rgba(0, 0, 0, 0.12) 0px 1px 5px 0px` (4 uses, the slider arrow buttons). Depth is otherwise made by photography and dark overlays on the slider.

## Shapes

Measured radii: 50px (26 uses; pill links and buttons), 12px (11), 5px (5), 30px (1) and a top-only 20px radius on the cookie panel. The "เพิ่มเติม>>" link is a pill 45px tall with 6px 30px padding and radius 50px. Photographs and bands are square-edged; the header and slider arrows are plain shapes.

## Components

**Pill link.** `link` style: white 25px / 700 uppercase text, 50px radius, 6px 30px padding, 45px high; filled with the brand green in the capture (the per-element fill was not recorded, so no fill value is claimed here).

**Navigation.** Transparent header, 90px tall, 40px side padding; link text in lime #8ec63f at 25.12px / 400.

**Numbered point.** Large pale numerals (01, 02, 03) beside a short paragraph in `ink`.

**Hero slider.** Full-bleed photographs, arrows at both edges, bold white 80px headline over a dark overlay.

**Footer.** `brand-green` #006838 background, white text at 20.8px / 27.04px, 626px tall in the measured pass, with page links and social icons.

## Design System Architecture

No public design system, brand-guideline or press-kit page is linked from the pages read (https://www.cptower.com/th). The site is a custom build whose theme is described by its shipped CSS only; the single published root variable is the carousel library's --swiper-theme-color #007aff, a framework default that is not a brand colour. The de-facto system is: db_helvethaica type at a large size, a green pair (#006838 and #8ec63f), slate ink, pill links with 50px radius and photography-led sections.

## Do's and Don'ts

- Do use #006838 for the footer and brand headings and #8ec63f for navigation and accent text.
- Do keep copy in db_helvethaica at 25.12px with a 32.656px line-height for readability of Thai.
- Do pair large 80px headlines with white text on photographic overlays.
- Don't use the Swiper default #007aff as a brand colour.
- Don't document the cookie panel or the memorial pop-up as brand components.
- Don't add heavy shadows; measured shadows are soft halos at 0.2 alpha or lighter.

## Responsive Behavior

Measured at 390px: the h1 renders at 58.5px / 58.5px (weight 400), the promotional h2 at 64px (weight 700), and body text keeps 25.12px / 32.656px. The mobile pass recorded 3 header links visible, no visible menu-toggle button, and a maximum of 6 card columns. Other reflow behaviour (slider, split sections) was not measured.

## Iteration Guide

1. Keep the two greens distinct: dark #006838 for surfaces and headings, lime #8ec63f for accents and nav text.
2. Use 80px headlines for banners and 25.12px body; keep Thai line-height at 32.656px.
3. Pill links: 50px radius, 6px 30px padding, 45px high.
4. Re-measure with the pop-ups closed to capture per-button fills.
5. Run `node web/scripts/verify-designs.mjs --slug=cp-tower-reit` after edits.
