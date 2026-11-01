---
version: alpha
name: J.R.W. Utility
category: "Thai Brands"
description: "J.R.W. Utility Public Company Limited (jrw.co.th), a Thai electrical-power and telecom/ICT system contractor, uses a white canvas #ffffff, grey body text #747474, navy #2b3360 and blue #3e8ef6 accents with a cyan #03a9f4 underline, set in Prompt at 15px/34px body and 32px/700 headings."
colors:
  canvas: "#ffffff"
  ink: "#747474"
  primary: "#3e8ef6"
  ink-heading: "#333333"
  navy: "#2b3360"
  ink-black: "#0b0c11"
  blue-soft: "#5d95d1"
  accent-cyan: "#03a9f4"
  surface-muted: "#efefef"
  hairline: "#e9eaee"
typography:
  display:
    fontFamily: Prompt, Arial, Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 41.92px
    letterSpacing: 1px
  display-mobile:
    fontFamily: Prompt, Arial, Helvetica, sans-serif
    fontSize: 21.5625px
    fontWeight: 400
    lineHeight: 28.6781px
    letterSpacing: 1px
  subheading:
    fontFamily: Prompt, Arial, Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 37.92px
    letterSpacing: 1px
  body:
    fontFamily: Prompt, Arial, Helvetica, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 34.05px
  nav:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 500
    lineHeight: 36.32px
    letterSpacing: 0.24px
  link:
    fontFamily: Prompt, Arial, Helvetica, sans-serif
    fontSize: 17px
    fontWeight: 500
    lineHeight: 28.9px
rounded:
  xs: 3px
  md: 26px
spacing:
  s1: 1px
  s2: 5.95px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 20px
  s7: 30px
  s8: 31px
  s9: 40px
  s10: 60px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 0px 0px 2px
---

## Overview

J.R.W. Utility Public Company Limited ("JRW") describes its business on the measured home page (`https://www.jrw.co.th/`, 467 visible elements, 4438px tall) as designing, procuring, constructing and installing electrical power systems and telecommunication and information-technology systems end to end, plus supply of related equipment and maintenance. The page opens on a slider whose slides are "ระบบสื่อสารโทรคมนาคม และเทคโนโลยีสารสนเทศ / Telecommunication and Information Technology System" and "งานระบบไฟฟ้า / Electrical Power System", each set in large white type on dark translucent boxes over close-up photographs (a patch panel with yellow network cables). Below come an embedded video of an executive speaking at a Stock Exchange of Thailand event, the company name as a centred 32px heading with a short cyan underline, and a company introduction paragraph.

A dark photographic band reads "1. ธุรกิจรับเหมาวางระบบ (Turnkey Project)", followed by a two-column section: "ระบบไฟฟ้า (Electrical Power System)" at left with five thumbnails and a numbered list (high-voltage transmission line system, high-voltage substation, conversion of overhead lines to underground cables) and "ระบบสื่อสารโทรคมนาคม และเทคโนโลยีสารสนเทศ (Telecom & ICT)" at right with five thumbnails and a numbered list (infrastructure, core network and more). Headings are right-aligned in each column. The voice is formal bilingual Thai/English corporate copy.

At first capture the page showed a "No Gift Policy" pop-up; the extraction was re-run and the pop-up scrim (`pum-4279`) and the privacy bar (`fusion-privacy-bar`) are both reported as hidden, so the numbers below describe the page without them.

## Colors

Background area by weight: white #ffffff (9084), light grey #efefef (811), black #000000 (203, the video player area), red #ff0000 (3, the video player's play button). Text colours by characters: grey #747474 (2387), white (368), navy #2b3360 (110), #333333 (102), #0b0c11 (93), blue #5d95d1 (40), blue #3e8ef6 (8).

- **canvas #ffffff**: page; **surface-muted #efefef**: the light grey section behind the Electrical and Telecom columns.
- **ink #747474**: body paragraphs; **ink-heading #333333**: the company-name heading; **ink-black #0b0c11**: mobile navigation text; **navy #2b3360**: 110 characters of heading text.
- **primary #3e8ef6**: the navigation text colour, including the active "หน้าหลัก" item with its underline.
- **blue-soft #5d95d1**: the other measured link blue (one element carries it as a border colour too).
- **accent-cyan #03a9f4**: the border colour on four elements, the short underlines beneath headings, and the theme's `--primary_color`.
- **hairline #e9eaee**: the most common measured border colour (10 elements).

The red #ff0000 and black #000000 areas belong to the embedded video player (its "Play" button is Arial 13.3333px) and are not brand colours; the extractor's guess that this button is the primary CTA was overridden in SOURCES.json.

## Typography

**Prompt** (3108 characters) is the only brand family, with Arial and Helvetica as fallbacks; Arial (5 characters) appears only on the video control. Weights: 500 (2603 characters), 700 (311), 400 (168), 600 (23). Roles: section/company heading 700 32px/41.92px with 1px letter-spacing; hero and subheading text 400 24px/37.92px with 1px letter-spacing (mobile hero title 21.5625px/28.6781px); body 500 15px/34.05px; navigation 500 16px/36.32px with 0.24px letter-spacing; phone and footer link 500 17px/28.9px ("Tel: 02-509-7000"). Most-read sizes: 15px (2528), 32px (148), 16px (130), 24px (50), 28px (49), 20px (47), 22px (40).

## Layout

Desktop viewport 1280px. The header holds a wide logo strip (JRW UTILITY mark and certification badges) at left and a two-row menu: หน้าหลัก, เกี่ยวกับเรา, ธุรกิจ, นโยบายและจรรยาบรรณ, การพัฒนาที่ยั่งยืน, นักลงทุนสัมพันธ์, ข่าวสารและกิจกรรม, ติดต่อ and a language flag; the nav block measures 781px by 77px. Drop-downs list company information (vision and mission, organisation and management structure, directors, executives, shareholder structure, logo, awards) and a long investor-relations tree (financial statements, annual report and Form 56-1, shareholder meetings, dividend policy, prospectus, stock price, investment calculator, press room). Content bands are full width with centred headings and a two-column body; paragraphs are centred in the intro. Paddings by frequency: 30px (9), 10px (3), 8px (3), 40px (3), 60px (2), 5.95px (2), 18px (2).

## Elevation & Depth

Measured shadows: `rgb(2, 2, 2) 0px 0px 30px 0px` and `rgba(2, 2, 2, 0.75) 0px 0px 15px 1px` (one each; the elements carrying them were not isolated by the extraction). In the capture, depth comes from dark translucent boxes behind hero text and from photographic bands.

## Shapes

Measured radii: 6.66667px (1 element, the video play button), 3px (1) and 26px (1). The extraction did not isolate which brand elements use 3px and 26px, so the frontmatter records them as `xs` and `md` without a component. Thumbnails, bands and the hero text boxes are square-cornered in the capture.

## Components

- **Navigation:** Prompt 500 16px in #3e8ef6; the active item is underlined; item box 59px by 38px with 2px bottom padding.
- **Hero text boxes:** large white Prompt text on translucent dark boxes over a photograph, with an English subtitle in a separate box.
- **Heading with underline:** 32px/700 #333333 centred heading and a short cyan #03a9f4 rule beneath.
- **Numbered lists and thumbnails:** five thumbnail photographs above each column and a numbered list in 15px grey text.
- **Link role:** white Prompt 500 17px/28.9px, for example "Tel: 02-509-7000".
- The video "Play" control, the privacy bar and the gift-policy pop-up are not brand components.

## Design System Architecture

No public design system or brand-guidelines page was found: the opened page https://www.jrw.co.th/ links only to company, policy, sustainability, investor, news and contact pages. The system is a themed site whose root variables show a theme layer: `--awb-custom13: #212934`, `--primary_color: #03a9f4`, `--header_top_menu_sub_color: #747474`, `--flip_boxes_front_heading: #333333`, `--form_border_color: #dddddd`, `--wp--preset--font-size--large: 22.5px`, plus many component variables (`--sec_menu_lh: 44px`, `--dual_sidebar_gutter: 40px`). Some of these theme variables (for example `--icon_circle_color_hover: #65bc7b`, `--button_gradient_top_color_hover: #5aabd6`) are theme defaults for components that the measured page did not render, so they are not documented as brand colours.

## Do's and Don'ts

- Do keep the canvas white with grey #747474 Prompt text at 15px/34.05px.
- Do use blue #3e8ef6 for navigation and navy #2b3360 for emphasised headings.
- Do underline headings with a short cyan #03a9f4 rule.
- Do pair every Thai section name with its English name in parentheses.
- Don't treat the red video control or the black player area as brand colours.
- Don't document the gift-policy pop-up or the privacy bar as brand UI.
- Don't use filled buttons as the primary pattern; none was measured.

## Responsive Behavior

Mobile was measured at 390px. The hero title becomes Prompt 400 21.5625px/28.6781px with 1px letter-spacing in a 285px by 57px block; the body paragraph stays 15px/34.05px in a 315px by 409px block; the nav block records the text "Toggle Navigation" followed by the menu items, in Prompt 500 16px #0b0c11, in a 255px by 40px area. Mobile size frequencies: 15px (2551 characters), 22.1227px (148), 16px (147), 19.108px (51), 28px (49), 19.0682px (47). Column reflow, image sizing and the open-menu layout were not measured.

## Iteration Guide

1. Start from canvas #ffffff, ink #747474, primary #3e8ef6, navy #2b3360 and accent-cyan #03a9f4.
2. Typeset in Prompt: 32px/700 headings with 1px tracking, 15px/500 body at a 34.05px line, 16px/500 navigation.
3. Use dark translucent boxes for text over photographs and a cyan rule under centred headings.
4. Alternate white and #efefef bands; use dark photographic bands for numbered section titles.
5. Give every section a Thai title with the English name in parentheses.
6. Measure new components before adding tokens; states not recorded stay "not measured".
