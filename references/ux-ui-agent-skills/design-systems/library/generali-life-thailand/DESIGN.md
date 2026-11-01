---
version: alpha
name: Generali Thailand
category: "Thai Brands"
description: "Generali Thailand homepage (generali.co.th): white canvas with #ebeaea grey bands, Noto Sans TH at 16px body and 30px headings, Generali red #c21b17 on 3px-radius buttons (45px tall, 15px 35px padding), #7a7a7a secondary text, 10px-radius cards with soft grey shadows."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  ink-secondary: "#7a7a7a"
  ink-faint: "#999999"
  primary: "#c21b17"
  on-primary: "#ffffff"
  primary-dark: "#b31c18"
  accent-red: "#cf2e2e"
  surface-grey: "#ebeaea"
  surface-light: "#eeeeee"
  hairline: "#dddddd"
typography:
  display:
    fontFamily: "\"Noto Sans TH\", \"Noto Sans Real\""
    fontSize: 30px
    fontWeight: 500
    lineHeight: 39px
  subheading:
    fontFamily: "\"Noto Sans TH\", \"Noto Sans Real\""
    fontSize: 30px
    fontWeight: 700
    lineHeight: 39px
  body:
    fontFamily: "\"Noto Sans TH\", \"Noto Sans Real\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Noto sans TH\", \"Noto Sans Real\""
    fontSize: 15px
    fontWeight: 500
    lineHeight: 15px
rounded:
  xs: 3px
  sm: 5px
  md: 10px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 15px
  s10: 17px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 15px 35px
    height: 45px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 60px 30px 20px
---

## Overview

The Generali Thailand homepage (https://generali.co.th/, page title "หน้าหลัก Generali | Global Standard Insurance Company in Thailand | GENERALI") is a red-and-white insurance site that leans on warm family photography and a lot of rounded, friendly components. The capture shows a thin red utility bar at the top (เกี่ยวกับเรา, ติดต่อเรา, a TH language selector) with the lion-emblem logo in a white tile at the far left, a white main navigation (ซื้อประกันออนไลน์, แผนประกัน, บริการลูกค้า, GEN 365, Generali First Club, อัปเดตล่าสุด, ร่วมงานกับเรา) with a search icon, a full-width hero slider showing a smiling family with a child learning to ride a bicycle and the red-lettered slogan "เคียงข้างตลอดไป", and a red band across the bottom of the hero with "เจนเนอราลี่ ประกันชั้นนำระดับโลก" and the call-centre number "โทร. 1394".

Beneath it the page moves through "เสียงจากลูกค้าของเรา" (customer voices) as a three-up slider of grey testimonial cards with circular avatars, red quotation marks and a row of five red emoji-style rating faces; a red "ดูรีวิวทั้งหมด" button; a grey band with three Customer Voice video thumbnails in red; and "ประกันที่แนะนำ" (recommended insurance) with five outlined red pill tabs (life, health, travel, accident, group) above white product cards with red book-like icons, a grey category label, a product name (for example Gen Health Hero Plus, Gen Wealth Choice, GEN Senior 55) and a short description.

The tone is reassuring and consumer-friendly, with plain Thai microcopy. A cookie consent popup and its scrim were removed before measurement and a page-wide greyscale filter was neutralised for capture; neither is documented as brand UI.

## Colors

All values are measured on the live page.

- **canvas #ffffff** is the main background (3,300 area units); **surface-grey #ebeaea** is the large band and testimonial-card colour (1,951); **surface-light #eeeeee** is a lighter neutral (526); **hairline #dddddd** is the border colour on 16 elements.
- **ink #000000** is the heading colour (about 2,500 characters); **ink-secondary #7a7a7a** is the most-read text colour (about 3,430 characters) for descriptions and labels; **ink-faint #999999** is for the lightest text.
- **primary #c21b17** is Generali red: the fill of the "ดูบทความทั้งหมด" and "ประกันทั้งหมด" buttons (white text, **on-primary #ffffff**) and the colour of 630 characters of text such as link and tab labels. **primary-dark #b31c18** fills the "ดูรีวิวทั้งหมด" button. **accent-red #cf2e2e** is the red of tab borders and some emphasis text (71 characters, 4 borders).

The consent popup's red "ยอมรับ" button (#c20000) and a grey "ตั้งค่า" button (#adadad) that the extractor first saw belong to the cookie dialog and are not used.

## Typography

The family is **Noto Sans TH** (with a "Noto Sans Real" fallback), about 7,200 characters on the page; a few characters use Anuphan. Weights are heavily mixed: 600 on 3,546 characters, 300 on 1,655, 400 on 1,096, 500 on 457, 700 on 247 and 100 on 228. Size by characters: 16px (6,188), 14px (318), 20px (201), 18px (190), 10px (131), 22px (91), 30px (34), 24px (34) and 15px (28). The display role is the 30px / 39px / 500 section heading (for example "ประกันที่แนะนำ"); the 30px / 700 variant is the bold heading. Body is 16px / 24px / 400, and button labels are 15px / 500. The hero slogan is artwork inside the slider image, not live text.

## Layout

The desktop page is 1280px wide and 5,336px tall. A full-width hero is followed by sections in a centred container with large vertical breathing room; the testimonial and product rows are centred three-up sliders with side arrows, and the customer-voice video band is a grey inset panel with three thumbnails. The measured paddings are 10px (66 uses), 15px (57), 12px (48), 25px (39), 8px (37), 30px (21), 17px (19), 20px and 60px (15, the top padding of testimonial cards). Gaps are 5px and 25px.

## Elevation & Depth

Shadows are soft and frequent: `rgba(99, 99, 98, 0.1) 0px 0px 4px 4px` (24 uses, product cards), `rgba(0, 0, 0, 0.16) 0px 4px 20px 0px` (15 uses, raised cards and the selected tab), `rgba(0, 0, 0, 0.15) 0px 0px 10px 0px` (7) and a darker `rgba(0, 0, 0, 0.5) 0px 0px 10px 0px` (1). Grey bands behind white cards also create depth by contrast. The selected pill tab in the capture sits on a visible shadow while the other tabs are outlined only.

## Shapes

Shapes are rounded. Cards and panels use a 10px radius (65 uses) and 10px top corners (24 uses) where a card carries an image above, the avatars and rating faces are circles (50%, 34 uses), buttons use 3px (10 uses) and tabs and small controls 5px (6 uses). The red hero band has a diagonal sweeping curve at its right edge, which is artwork.

## Components

- **Primary button**: red #c21b17, white 15px / 500 text, 3px radius, 45px tall, padding 15px 35px (examples: "ดูบทความทั้งหมด", "ประกันทั้งหมด").
- **Review button**: the darker red #b31c18, 20px label, same radius.
- **Pill tab**: white fill, red border and red label at a 5px radius; the active tab has a drop shadow.
- **Testimonial card**: #ebeaea, 10px radius, padding 60px 30px 20px, a circular avatar overlapping the top edge, a red quotation badge at the corners and five red rating faces at the bottom.
- **Product card**: white with a soft grey shadow, 10px top corners, a red illustrative icon, a grey category label, bold product name and a short description.
- **Top bar**: red strip with white small labels and a language dropdown.
- **Navigation**: white row with dark 16px labels and a search icon.

## Design System Architecture

No public design-system site or brand-guideline page was found on the pages opened. The page is built with WordPress and Elementor: the homepage HTML references assets under `/wp-content/plugins/elementor/`, and the 111 measured root variables include `--wp--preset--*` entries from WordPress alongside a few theme variables such as `--s-text` (#222), `--s-line` (#dcdfe5), `--color-info-hover`, `--color-success-active` and `--font-size-sm` (12px). Those WordPress presets (for example vivid purple #9b51e0) are platform defaults and not brand colours. The brand colours are applied in page-builder styles instead, so the de-facto system is: Noto Sans TH, one red with a darker variant, grey bands, 10px card radii and soft shadows.

## Do's and Don'ts

- Do use #c21b17 for primary actions and tab outlines, with white text.
- Do set copy in Noto Sans TH at 16px with grey #7a7a7a descriptions and black headings.
- Do round cards at 10px and buttons at 3px.
- Do keep photography warm and family-oriented, and use grey bands to separate sections.
- Don't use the WordPress preset colours (such as #9b51e0) or Elementor defaults.
- Don't treat the cookie dialog or its grey and red buttons as brand components.
- Don't use heavy dark shadows; keep them at 10 to 16% black.
- Don't put the display headline in a light weight; the measured heading is 500 or 700.

## Responsive Behavior

On a 390px viewport the extraction reports body text at 16px, the same as desktop, while the first mobile heading measured at 20px. The page's sliders carry arrow controls, but no mobile layout (menu collapse, card stacking) was measured, so it is not documented here.

## Iteration Guide

1. Start from white, black headings and grey #7a7a7a descriptions in Noto Sans TH at 16px / 24px.
2. Use #c21b17 pills of 3px radius, 45px tall with 15px 35px padding for key actions.
3. Place content on #ebeaea bands with 10px-radius cards and soft shadows.
4. Use outlined red tabs with a 5px radius for category switching.
5. Keep photography family-focused and close-up, and let the slogan live in the image.
6. Re-measure after campaigns change; the hero rotates but the component tokens stay constant.
