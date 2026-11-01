---
version: alpha
name: ThaiREN (Thailand Education and Research Network Association)
category: "Thai Brands"
description: "ThaiREN association site (thairen.net.th): white page with navy #000033 Tahoma text at 14px, orange #ff6600 title and #e98236 links, gray #cccccc rules, square corners and a single narrow centered column in a legacy 2000s style."
colors:
  canvas: "#ffffff"
  ink: "#000033"
  primary: "#ff6600"
  orange-link: "#e98236"
  ink-black: "#000000"
  ink-charcoal: "#383838"
  ink-blue: "#000066"
  hairline: "#cccccc"
typography:
  display:
    fontFamily: Tahoma, Geneva, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 23.8px
  heading:
    fontFamily: Tahoma, Geneva, sans-serif
    fontSize: 25px
    fontWeight: 400
    lineHeight: 23.8px
  subheading:
    fontFamily: Tahoma, Geneva, sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 23.8px
  body:
    fontFamily: Tahoma, Geneva, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.8px
  link:
    fontFamily: Tahoma, Geneva, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 23.8px
rounded:
  none: 0px
spacing:
  s1: 5px
  s2: 10px
  s3: 15px
  s4: 20px
  s5: 30px
components:
  link:
    textColor: "{colors.orange-link}"
    typography: "{typography.link}"
---

# ThaiREN (Thailand Education and Research Network Association)

## Overview
The measured site is thairen.net.th, the website of the Thailand Research Education Network Association (ThaiREN, Thai: สมาคมเครือข่ายไทยเพื่อการศึกษาวิจัย), a non-profit association registered in Thailand in 2007 (its own text gives the registration date 31 January 2550 and number จ.4532/2550). The page describes the national research-and-education network, promotes ThaiIDF (a national single sign-on identity federation for education and research) and lists network events and training. No language attribute is set (`lang` is null); content is Thai with English news and a long English ThaiIDF paragraph.

This is a minimal, document-style site in the 2000s manner: a narrow centered column on a white page, with thin gray rules. At the top is the orange-and-gray temple-spire logo with the association name in a curved Thai script. Under it, a text navigation row separated by gray rules: หน้าแรก (active, orange), ข้อมูลสมาคม, คณะผู้บริหาร, ภารกิจ, สำหรับสมาชิก, ติดต่อสอบถาม. A single wide banner image announces an APNIC Academy IPv6 certification course at Kasetsart University. Below are an orange bold news list ("ThaiREN News") with a gold star graphic at the right, a "Highlight" block on ThaiIDF with long English paragraphs and an orange "<<More Information >>" link, and a two-column Thai block (about the association and its logo at left, membership types and privileges at right) with two small gray arrow buttons ("เพิ่มเติม" and "สมัครสมาชิก"). A gray-ruled centered footer gives the office address and a visitor-counter badge.

There is no imagery beyond the logo, one banner and a star. The voice is formal and informational, with numbered lists for membership privileges.

## Colors
The measurement recorded no background colors at all (`backgroundColorsByArea` is empty), so every surface is the default white canvas `#ffffff`. Text colors by characters: dark navy `#000033` (2,756, the body and `ink`), orange `#e98236` (473, links and news items), black (105), `#383838` (53), deep blue `#000066` (52, section sub-headings), orange-red `#ff6600` (35, the site title and active nav item, `primary`), `#666666` (20) and `#dc6606` (7). The only border color is `#cccccc`, used for the horizontal rules. The CSS corpus also lists `#990000`, `#cb5c02` and `#999999` once or twice each; they are not tied to a measured component and are not used.

Orange is the single brand accent: it is the logo's color and appears in two tints, the pure `#ff6600` for the title and the active item and the softer `#e98236` for links and news. Navy text on white is the reading color.

## Typography
Tahoma with Geneva and generic sans-serif fallback (3,501 characters). No web fonts are loaded (the loaded-fonts list is empty), so rendering depends on the visitor's system fonts; Tahoma is a system font on Windows and macOS.

Measured roles: display 28px / 23.8px weight 700 (the site title); heading 25px weight 400 (section titles such as "รู้จักกับสมาคม ThaiREN"); subheading 22px weight 700; body 14px / 23.8px weight 400; link 14px weight 700. Sizes by characters: 14px (3,289), 22px (83), 16px (53), 28px (44), 12px (20) and 25px (12). Weights 400 (2,704) and 700 (797). The body line height is the same 23.8px used for every size, a legacy fixed line-height. No letter-spacing was recorded.

## Layout
The page is 1280px wide and 2,122px tall in the extraction, with a centered content column narrower than the window (the capture shows margins on both sides; the column width was not measured). Spacing values are round numbers from an older stylesheet: padding 15px (7 uses), 5px (3), 30px, 20px and 10px, and the token scale 5 / 10 / 15 / 20 / 30px. Sections stack vertically with horizontal gray rules between them; the lower section is a two-column text block.

## Elevation & Depth
None. No box shadows were measured. Separation is by 1px-class gray rules (`#cccccc`) and white space; the only graphic depth is in the supplied logo and star images.

## Shapes
No border radius was measured: `desktop.frequencies.borderRadii` is empty, so every rendered element has a computed radius of 0px. The tokens declare `none: 0px`. The gray arrow buttons in the capture are rectangular blocks.

## Components
- **link:** orange `#e98236`, Tahoma 14px weight 700, no underline in the news list; news items are prefixed with a small chevron.
- **nav:** a text-only row, with the active item in orange `#ff6600`, separated by gray rules above and below.
- **Heading:** 25px regular navy-blue titles (`#000066`) for sections; 22px bold black sub-headings for lists.
- **Gray arrow button:** small gray rectangular button with a right-arrow icon and a label such as "เพิ่มเติม" (seen in the capture; sizes not measured).
- **Banner:** one full-column image with white text baked into the picture.
- **Footer:** centered navy text between two thick gray rules, with a small counter image.

The copy of the news list is event-driven: each item is an announcement with a title in bold orange followed by a date range line such as a five-day course period, and each ends with a call to register. Membership content is structured as numbered lists in two categories (ordinary members and honorary members) and five numbered privileges, which makes the right-hand column read like a regulation rather than marketing copy. The English ThaiIDF block explains the identity federation in three paragraphs: who belongs to it, what trust framework it provides and how it lowers the effort of federated identity management. This text-first approach means typography and color alone carry the entire hierarchy: size steps from 14px to 28px, bold versus regular, and navy versus orange.

## Design System Architecture
No public design system or brand guideline exists on the site; the homepage text covers the association's background, mission, logo explanation, membership types and privileges. The page does explain the logo's meaning in prose: the emblem is a circular mark with the letters "ThaiREN" in white and a three-tone spire form in orange and gray; that is the only brand guidance and it is verbal, without numeric values. The de-facto system is a plain legacy stylesheet: no CSS custom properties (root variables are empty), a handful of hex colors, a single system font and a fixed line height.

## Do's and Don'ts
- Do use navy `#000033` for text and orange (`#ff6600`, `#e98236`) for emphasis and links.
- Do separate sections with thin gray `#cccccc` rules rather than boxes.
- Do keep corners square; no radius was measured.
- Do use Tahoma at 14px with a 23.8px line height for long text.
- Don't add shadows, gradients or web fonts; none are in the measured system.
- Don't use the unmeasured CSS-corpus colors `#990000` or `#cb5c02`.
- Don't invent button fills; the only measured button styling is the gray arrow block in the capture.

## Responsive Behavior
Mobile (390px) was measured for type only: the h1 is 28px / 23.8px weight 700 in orange `#ff6600`, the h2 25px and the body 14px / 23.8px. Column reflow and menu behavior are not measured.

## Iteration Guide
1. White canvas, navy `#000033` text, orange `#ff6600` title and active nav, `#e98236` links.
2. Tahoma 14 / 22 / 25 / 28px with a constant 23.8px line height.
3. Gray `#cccccc` horizontal rules; square corners; no shadows.
4. Keep content in a single narrow centered column.
5. Verify with `node web/scripts/verify-designs.mjs --slug=thailand-education-and-research-network-thairen`.
