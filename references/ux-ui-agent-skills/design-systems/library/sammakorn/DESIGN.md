---
version: alpha
name: Sammakorn
category: "Thai Brands"
description: "Sammakorn (sammakorn.co.th) Thai luxury-housing developer site in DB Heavent 300 to 700: navy #012168 primary with white text, warm beige #efece7 search band, gold-brown #867551 rules, tan #bbb19d chips, square 0px buttons and 4px chips on a white canvas."
colors:
  canvas: "#ffffff"
  ink: "#252523"
  primary: "#012168"
  on-primary: "#ffffff"
  surface-warm: "#efece7"
  surface-light: "#f2f2f1"
  ink-heading: "#212529"
  ink-chip: "#231f20"
  ink-footer: "#c3c4c5"
  gold-line: "#867551"
  button-secondary-bg: "#bbb19d"
  text-input-text: "#000000"
typography:
  display:
    fontFamily: "\"DB Heavent\""
    fontSize: 52px
    fontWeight: 500
    lineHeight: 52px
  display-mobile:
    fontFamily: "\"DB Heavent\""
    fontSize: 32px
    fontWeight: 500
    lineHeight: 32px
  heading:
    fontFamily: "\"DB Heavent\""
    fontSize: 40px
    fontWeight: 500
    lineHeight: 40px
    textTransform: uppercase
  body:
    fontFamily: "\"DB Heavent\""
    fontSize: 22px
    fontWeight: 300
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"DB Heavent\""
    fontSize: 22px
    fontWeight: 500
    lineHeight: 22px
  input:
    fontFamily: "\"DB Heavent\""
    fontSize: 22px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 22px
  s7: 24px
  s8: 31.01px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 14px 40px
    height: 48px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink-chip}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 4px 24px
    height: 30px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 4px 16px
    height: 56px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-footer}"
    rounded: "{rounded.none}"
---

## Overview

The measured homepage (https://www.sammakorn.co.th/, title "สัมมากร บ้านที่หลับสบาย | Sammakorn") sells premium single houses, townhomes, home offices and condominiums. The capture opens on a navy-tinted header with the SAMMAKORN wordmark and hexagonal emblem on the left, five product links (บ้านเดี่ยว, ทาวน์โฮม, โฮมออฟฟิศ, คอนโด, โครงการต่างจังหวัด), a "ภาษาไทย" language selector, a search icon and a menu icon. The hero is split: an architectural render of a stone-clad house with a clipped hedge on the left, and on the right a dark panel carrying a black-and-white portrait in a gold circular frame with a Thai tribute caption. That tribute panel is a commemorative notice, not part of the brand's component set, and no token here comes from it. A gold chat hexagon at the lower right is a utility control and is likewise excluded.

Below the hero a warm beige band (#efece7) holds the heading "ค้นหาโครงการที่เหมาะกับคุณ" (find the project that suits you), a white search row with a keyword field, three dropdown fields (location, project type, price range) and a navy square search button, and a row of tan hashtag chips (มาใหม่, บ้านหรู, บ้านหรูเลียบด่วน, บ้านเดี่ยวราชพฤกษ์, บ้านตากอากาศ, บ้านเดี่ยวรังสิต, บ้าน40ล้าน). The next section, "โครงการแนะนำสำหรับคุณ", has six text tabs with the active one underlined in navy, then three project cards: a compare checkbox, an image with a colored "โครงการใหม่" tag, a navy project name, two lines of promotional text, two nearby-place icons with labels, "ราคาเริ่มต้น" and a navy price such as "60–100 ล้านบาท*", "25 ล้านบาท*" and "17 ล้านบาท*". A navy "อ่านเพิ่มเติม" button follows, and a "รวมแบรนด์สัมมากร" carousel shows sub-brand logos (KINTON, anapana, MITTI, อเวนิว, สัมมากร). Prices carry an asterisk, and the voice is formal and informational.

## Colors

Background area is dominated by navy #012168 (2173), warm beige #efece7 (1569), light grey #f2f2f1 (1325), a translucent navy #01143e66 (369) and white #ffffff (203), with smaller amounts of gold #b5a275 (48), tan #bbb19d (27), green #335f36, sand #c9b89e, brown #89532b and bronze #86754d. Text is near-black #252523 (2342 characters), white (1764), #212529 (584), navy #012168 (424), #231f20 (133), grey #c3c4c5 (127), bronze #86754d (76), black and #707070.

- **Primary navy #012168**: the "อ่านเพิ่มเติม" button fill (white text), the search button, the footer background, headings and prices in navy text.
- **Ink #252523**: body text; **ink-heading #212529** for section headings.
- **Surface-warm #efece7**: the search band; **surface-light #f2f2f1**: light sections.
- **Gold-line #867551**: 2px borders of the outlined "ดูรายละเอียด" button, whose text is #86754d; hover fills it with #f5f3ef.
- **Button-secondary-bg #bbb19d**: tan hashtag chips with #231f20 text; hover darkens the chip to #86754d (rgb(134, 117, 77)).
- **Ink-footer #c3c4c5**: footer text on navy.

The tribute panel's greys and the chat hexagon's gold are excluded. Bootstrap :root values (--primary #007bff, --yellow #ffc107, --green #28a745) are framework defaults and are not brand colors.

## Typography

One family, **DB Heavent**, loaded in 300, 400 and 700 (the extraction also records 500 in use). The display role is the search heading at 52px / 500 / 52px (32px / 500 / 32px at the 390px mobile pass); the section heading is 40px / 500 / 40px with text-transform uppercase; body is 22px / 300 / 24px; buttons are 22px; the chip button is 22px / 500; inputs are 22px / 400 / 30px. Because DB Heavent is a condensed Thai face, all sizes are larger than the equivalent Latin sizes. Noto Sans Thai or Sarabun are the nearest freely available substitutes. Icons use custom icon fonts (icon-logo, icon-header, icon-footer, icon-global, icon-nearby).

## Layout

The desktop pass is 1280px wide with a very large measured column count (23) because of the brand-logo carousel. Content bands are centered: the search band is a centered heading, a 56px-high input row and a centered chip row; the recommended-projects section is a three-column card row under a tab strip; the brand carousel runs full width with circular arrow controls at each end. Spacing steps are 4, 6, 8, 12, 16, 22, 24, 31.01, 32 and 40px. The primary button has padding 14px 40px and is 48px high; inputs are 56px high with 4px 16px padding.

## Elevation & Depth

Two shadows are recorded: rgba(0, 0, 0, 0.16) 0px 8px 10px 0px (one element) and a gold glow rgb(255, 188, 66) 0px 0px 10px 0px on another element (not identified, not used as a token). Beyond this, the page is flat: sections separate by background tone (white, #efece7, #f2f2f1, navy) and cards are separated by whitespace.

## Shapes

Radii are minimal: 4px (7 occurrences, chips and tags) and 50% (3, circular carousel arrows and badges). Primary button, text input and footer are 0px (square). The outlined "ดูรายละเอียด" button is square with a 2px bronze border. Square primaries against rounded 4px chips is the page's main shape contrast.

## Components

- **button-primary**: navy #012168 fill, white text, 22px, padding 14px 40px, 48px high, square, 1px navy border ("อ่านเพิ่มเติม").
- **button-secondary** (chip): #bbb19d fill, #231f20 text, 22px / 500, 4px radius, 30px high, padding 4px 24px; hover #86754d.
- **Outlined button** ("ดูรายละเอียด"): white fill, #86754d text, 2px #867551 border, square, 48px high; hover fill #f5f3ef.
- **text-input**: white, black 22px / 400 text, 56px high, padding 4px 16px, square.
- **Footer**: navy #012168 with #c3c4c5 text.
- **Project card**: compare checkbox, image with tag, navy name, promo text, nearby-place icons, price block; card tokens were not extracted.

## Design System Architecture

No public Sammakorn design-system or brand-guideline page was opened; the research record is {none:true}. The shipped page is Bootstrap-based (Bootstrap :root variables such as --breakpoint-sm 576px, --breakpoint-md 768px, --breakpoint-lg 992px, and --font-family-sans-serif "DB Heavent",-apple-system,...), uses the Slick carousel (slick font), and five custom icon fonts for logo, header, footer, global and nearby-place icons. Brand colors are not exposed as variables; the Bootstrap --primary #007bff is a leftover default and differs from the real navy #012168 measured on buttons and the footer.

## Do's and Don'ts

- Do use navy #012168 for primary actions, prices and the footer, with white text.
- Do keep primary buttons square (0px) and chips at 4px.
- Do use warm beige #efece7 as the search band, with tan chips and bronze outlines as the warm secondary language.
- Do show prices with the asterisk and a "ราคาเริ่มต้น" label.
- Don't use Bootstrap blue #007bff.
- Don't present the tribute panel or the chat hexagon as brand components.
- Don't round primary buttons.

## Responsive Behavior

Measured at 390px: the display heading is 32px / 500 / 32px (52px on desktop), the primary button text is 22px with a height of 48px, and the extractor counts up to 20 carousel columns. No menu toggle or visible header links were detected at either width (headerLinksVisible 0, menuToggleVisible false), so the mobile navigation pattern is not measured. Tablet and dark mode are not measured.

## Iteration Guide

1. White canvas, DB Heavent 300 at 22px / 24px for body in #252523.
2. Navy #012168 square buttons with 14px 40px padding.
3. Beige #efece7 search band with a 56px input row and tan #bbb19d 4px-radius chips.
4. Bronze #867551 2px outlines for secondary buttons.
5. Navy footer with #c3c4c5 text.
6. At 390px set the heading to 32px.
