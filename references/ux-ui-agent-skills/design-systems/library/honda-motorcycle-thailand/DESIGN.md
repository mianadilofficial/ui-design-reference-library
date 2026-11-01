---
version: alpha
name: Honda Motorcycle Thailand
category: "Thai Brands"
description: "Honda Motorcycle Thailand (Thai Honda, thaihonda.co.th/honda) measured live: ap_honda custom Thai typeface, Honda red #ec1b2e and #ed1a29 on white and #f2f2f2, #222222 ink, 40px bold section headings, 3px-radius red register button, red FIND DEALER side tab and motorcycle product carousels."
colors:
  canvas: "#f2f2f2"
  page-body: "#ffffff"
  ink: "#222222"
  primary: "#ec1b2e"
  on-primary: "#ffffff"
  surface-2: "#f9f9f9"
  ink-3: "#222222bf"
  ink-4: "#ed1a29"
  ink-5: "#7e7e7e"
  ink-6: "#22222280"
  button-secondary-text: "#828282"
  text-input-text: "#495057"
typography:
  display:
    fontFamily: ap_hondaregular
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
  display-mobile:
    fontFamily: ap_hondaregular
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  heading:
    fontFamily: ap_hondaregular
    fontSize: 40px
    fontWeight: 700
    lineHeight: 60px
  body:
    fontFamily: ap_hondaregular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: ap_hondaregular
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button-secondary:
    fontFamily: ap_hondaregular
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  input:
    fontFamily: Arial
    fontSize: 16px
    fontWeight: 400
    lineHeight: 38px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  pill: 9999px
spacing:
  s1: 9px
  s2: 10px
  s3: 15px
  s4: 17px
  s5: 20px
  s6: 25px
  s7: 27px
  s8: 30px
  s9: 33px
  s10: 35px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.xs}"
    padding: 0px 5px
    height: 40px
  button-secondary:
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 15px 40px
    height: 62px
    borderColor: "{colors.button-secondary-text}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.page-body}"
    borderColor: "{colors.ink-4}"
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 17px
    height: 40px
    borderColor: "{colors.button-secondary-text}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview
The measured page is https://www.thaihonda.co.th/honda/, titled "มอเตอร์ไซค์ Honda หลากหลายรุ่น หน้าหลัก | Honda", the Thai-language home of Honda motorcycles (Thai Honda Manufacturing / ไทยฮอนด้า). The capture opens with a thin red rule and a dark-red alert banner warning about scam callers and giving the Call Center number 02-725-4000; below it a white header carries the red Honda winged-wing logo, a "Menu" icon, the main links (รถจักรยานยนต์, รถจักรยานยนต์ไฟฟ้า, รีวิว, บริการหลังการขาย, เกี่ยวกับเรา), a TH | EN switch, social icons, a grey Search tab and a full-height red "FIND DEALER" tab. A stack of three red square icon tabs sits fixed on the right edge.

The content is organised around the product range. A category tab row (เกียร์อัตโนมัติ, รถครอบครัว, สปอร์ต, ผจญภัย, ป๊อบเบอร์, นีโอสปอร์ตคาเฟ่, หมวกกันน็อก, อุปกรณ์เสริม, H2C, สแคมเบอร์) selects a grey carousel of bikes with red "NEW" corner flags (New Honda Click160, New PCX160, New Forza350, New ADV160 2026). Next comes a "What's New?" block pairing a bold heading with a video thumbnail, then a "Product Review" section with a red underline accent and a red "LAST REVIEW" tab, and a long footer with call-centre details and model links. The voice is informative and Thai-first; promotional copy is brief.

## Colors
- **Canvas** `#f2f2f2` and **page body** `#ffffff`: white is the biggest background by area (6829); `#f9f9f9` (3031) and `#f2f2f2` (1676) are the pale grey sections, and the footer is `#f2f2f2`.
- **Ink** `#222222`: the main text colour (1843 characters), with translucent versions `#222222bf` and `#22222280` for secondary text, and `#7e7e7e`, `#828282`, `#bdbdbd` for muted text and borders.
- **Primary red** `#ec1b2e`: the register ("ลงทะเบียน") button fill with white text. Related reds measured on the page: `#ed1a29` (the active category tab text and the hover colour of nav items, measured rgb(237, 26, 41)), `#ed1b2f` (red tabs, 141 area weight) and the dark scam-alert banner `#931810` (152).
- **White** is the text colour on red and photographs (580 characters).
- The extractor read the navigation link colour as `#0000ee`; that is the browser default link colour and is dropped, as nav links are actually `#222222`.

## Typography
The site uses its own custom family: "ap_hondaregular" (2643 characters), "ap_hondabold" (264) and "ap_hondalight", all loaded as separate faces at weight 400. Arial (12 characters) is used for form inputs only. Weights measured: 400 (2725) and 700 (194).

- **display**: ap_hondaregular 18px / 700, line-height 27px (the red active category tab).
- **display-mobile**: 18px / 400, line-height 27px (also the button label size).
- **heading**: 40px / 700, line-height 60px ("Product Review", "Latest News" in `#222222`).
- **body**: 16px / 400, line-height 24px.
- **nav**: 12px / 400, line-height 18px.
- **button-secondary**: 20px / 400, line-height 30px.
- **input**: Arial 16px / 400, line-height 38px.

Sizes in use by character count: 18px (1027), 14px (343), 16px (305), 22px (267), 13px, 20px, 28px and 12px. The family is proprietary to Honda's Thai site; no substitute font was measured.

## Layout
Desktop pass 1280px wide, 5418px tall. The header is a two-row band: a primary row with logo, menu and links, and a utility row with language, social and search controls aligned right. Product browsing is a centred category tab row above a four-up carousel with arrow buttons, sitting on a grey panel that ends in a diagonal cut. The "What's New?" band is a 50/50 split of heading and video. Section titles are centred with a short red underline. The footer is 970px tall on `#f2f2f2` with link columns. Spacing steps in the tokens are 9, 10, 15, 17, 20, 25, 27, 30, 33 and 35px.

## Elevation & Depth
Elevation is minimal: two soft shadows were measured, `rgba(0, 0, 0, 0.08) 2px 4px 12px 0px` and `rgba(0, 0, 0, 0.06) 0px 4px 12px 0px`, each on a single element. The grey carousel band, diagonal notch and fixed red tabs create the layering; there is no shadow scale.

## Shapes
Radii measured: 3px (8 elements, buttons and inputs), 50% and 100% (round icons, social buttons and carousel arrows), 4px and 5px (one element each). Several graphic shapes are angular: red "NEW" and "LAST REVIEW" tags have a slanted right edge, and the grey section ends with a diagonal step. The secondary outlined button uses 5px; the pill token (9999px) is available for chips.

## Components
- **button-primary**: `#ec1b2e` fill, white 18px text ("ลงทะเบียน"), 3px radius, 40px tall, padding 0 5px.
- **button-secondary**: outlined with a `#828282` border and text, 20px, 5px radius, padding 15px 40px, 62px tall.
- **text-input**: white, `#495057` Arial 16px text, 3px radius, 40px tall, padding 0 17px, `#828282` border.
- **FIND DEALER tab**: full-height red block with a pin icon and spaced uppercase label; adjacent grey Search tab.
- **category tabs**: Thai labels in grey, the selected one in `#ed1a29` with a small pointer beneath.
- **NEW tag**: red slanted flag over each bike image.
- **nav**: white band with `#ed1a29` bottom border; hover on links turns text and border `#ed1a29`.
- **footer**: `#f2f2f2` background, `#222222` text.

## Design System Architecture
No public design system or brand guideline was found. The page declares no root CSS variables (0 measured), so the style is expressed in compiled class CSS with the custom "ap_honda" font faces (regular, light, bold) loaded from the site. The de-facto system is a red-on-white and grey scheme with `#222222` ink, one red primary button, and consistent 3px control radii.

## Do's and Don'ts
- Do use Honda red `#ec1b2e` for the primary button and `#ed1a29` for active and hover text.
- Do set text in the ap_honda faces, regular for body and bold for headings at 40px.
- Do keep controls at 3px radius and buttons 40px tall.
- Do flag new models with the red slanted "NEW" tag.
- Don't use `#0000ee` browser link blue.
- Don't present the scam-warning banner (`#931810`) as a brand accent; it is a notice.
- Don't add large shadows; only two soft shadows were measured.

## Responsive Behavior
At 390px the mobile pass measured: the first heading "New Honda Click160" at 18px / 400, "Product Review" at 24px / 700 (40px on desktop), body text 13px, the register button 110px wide by 40px tall in `#ec1b2e`, and the top notice block 390px wide and 237px tall. Common mobile sizes: 18px (880), 16px, 13px, 12px, 20px. Other layout changes at mobile are not measured.

## Iteration Guide
1. Begin with white and `#f9f9f9` sections and a `#222222` text colour.
2. Add the red header tabs and the red `#ec1b2e` button with 3px radius.
3. Build product browsing as category tabs plus a carousel of bikes with red slanted NEW flags.
4. Use 40px bold centred titles with a short red underline.
5. Finish with a `#f2f2f2` footer holding the call-centre number and model links.

Further notes for rebuilding: the home page relies on three surfaces, white for the header and article sections, pale grey for product carousels and the footer, and red for utility tabs. Red is used as a structural colour on the right edge (three stacked square tabs and the FIND DEALER block) as well as on buttons, so the interface always has a visible path to dealer search and registration. The review and news areas load their cards dynamically; in the capture they are still empty placeholders with a faint white headline, so their card layout was not measured. Copy mixes Thai headings with English labels such as "NEW", "LAST REVIEW", "FIND DEALER" and "Product Review", set in the same custom family.
