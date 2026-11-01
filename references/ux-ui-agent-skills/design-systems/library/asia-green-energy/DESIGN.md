---
version: alpha
name: Asia Green Energy
category: "Thai Brands"
description: "Asia Green Energy (AGE, age.co.th), a Thai clean-coal trader, logistics and sustainable-energy group, uses a white canvas #ffffff, charcoal ink #333333 and a single brand green #00a052 for buttons, headings and the top bar, with an #f5f6f7 footer, Prompt 500 at 16px/23.8px and TBold display headings."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#00a052"
  on-primary: "#ffffff"
  surface-light: "#f5f6f7"
  ink-secondary: "#666666"
  green-link: "#22934a"
  ink-nav: "#00000099"
  green-translucent: "#00a052cc"
typography:
  display:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 68px
  heading:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 17px
    fontWeight: 500
    lineHeight: 20.4px
  subheading:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 20px
  body:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 23.8px
  nav-label:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 14px
  nav:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 23px
  link:
    fontFamily: TBold, Helvetica, Arial, Lucida, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 23.8px
rounded:
  xs: 5px
  sm: 10px
  md: 30px
  lg: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4.8px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 15px
  s9: 16px
  s10: 25.59px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 4.8px 16px
    height: 37px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 4.8px 16px
    height: 37px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav-label}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 1px 0px 0px
  footer:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.green-link}"
---

## Overview

Asia Green Energy Public Company Limited ("AGE", `https://www.age.co.th/`, title "หน้าแรก - บริษัท เอเชีย กรีน เอนเนอจี จำกัด (มหาชน)", 765 visible elements, 5311px tall) states on its home page that it was founded by Mr. Panom Kuansathaporn on 18 March 2547 (2004) to distribute clean coal of high quality at home and abroad, mainly coal imported from Indonesia, and also provides logistics by road, water, port and warehouse. The business menu lists coal trading (domestic and overseas sales), services (waterway and road transport, port, warehouse, industrial-waste management), sustainable energy and leasing.

The capture opens with a thin green utility bar (careers, contact, language flags), a white header with the AGE factory-roof logo and a menu with chevrons, and a full-bleed aerial slider photograph of a warehouse and screening plant with blue-tarpaulin coal piles and solar roofs, captioned "Warehouse & Screening Plants", with a translucent panel giving "8,300 ตัน/วัน" production capacity. A green-to-blue gradient band follows with the company name, a short company description and eight circular white icon links (history, milestones, awards, vision, business goals, group structure, management structure, contact the company secretary). Then comes "ธุรกิจของ AGE" in green with four columns, each a photograph, a green title with an English subtitle (Coal – Related, Smart Logistics, Sustainable Energy, Diversified Investments), a paragraph and a green button. The footer is light grey, 935px tall, with investor-relations contacts.

## Colors

Background area by weight: white #ffffff (7600), light grey #f5f6f7 (1197), translucent slate #89939de3 (1024, a slider overlay), translucent green #00a052cc (120), green #00a052 (100), dark green #22934a (5), #00000080 (3). Text colours by characters: green #00a052 (1212), #333333 (997), #666666 (832), white (708), green #22934a (133), #00000099 (102).

- **canvas #ffffff**: page; **surface-light #f5f6f7**: the footer panel.
- **ink #333333**: primary text; **ink-secondary #666666**: secondary text; **ink-nav #00000099**: menu labels (translucent black).
- **primary #00a052**: the brand green: the "ราคาหลักทรัพย์" (Share price) and "ดูทั้งหมด" (View all) button fills, section headings such as "ธุรกิจถ่านหิน" and "ธุรกิจของ AGE", and the top utility bar; **on-primary #ffffff** is the text on it.
- **green-link #22934a**: darker green for footer text and links; **green-translucent #00a052cc**: a translucent green background measured on a block whose role the extraction did not isolate.

The hover of a menu label starts from rgba(0, 0, 0, 0.6). Root variables carry the WordPress preset palette (`--wp--preset--color--vivid-purple: #9b51e0` and similar) and a generic theme palette (`--color-info: #2CA8FF`, `--color-secondary: #6c757d`); these are platform defaults, not brand colours, and the extractor's #2ea3f2 link colour is dropped for the same reason. `--color-primary-active: #00a052` confirms the green as the theme's primary.

## Typography

**Prompt** (2775 characters) sets body and menus; **TBold** (1209 characters) sets the large green headings and links; Noto Sans Thai appears only in form inputs. Weights: 500 (3750 characters) and 600 (234). Roles: company-name heading 600 40px/68px (measured in the mobile pass; the desktop size of this block was not isolated); news headlines 500 17px/20.4px in green; subheadings 500 20px/20px in green; body 500 16px/23.8px; menu labels 600 16px/14px; mobile menu 14px/23px; link role TBold 500 20px/23.8px (for example "ir@age.co.th"). Most-read sizes: 20px (1290 characters), 16px (1270), 17px (656), 18px (335), 24px (116), 22px (79), 36px (67).

## Layout

Desktop viewport 1280px. A utility bar sits above a white header carrying the logo at left and the menu: เกี่ยวกับ AGE, ธุรกิจของ AGE, ข่าวสารและกิจกรรม, การกำกับดูแลกิจการที่ดี, นักลงทุนสัมพันธ์, การพัฒนาอย่างยั่งยืน and a search icon. Sub-menus are long (company history, awards, vision, group and management structure; coal trading; transport; governance policies and charters; investor financial information, 56-1 One Report, shareholder meetings, dividend policy, share price, press room). Body bands are centred with 1024px-wide text columns, four-up photo columns and an eight-up icon grid. Paddings by frequency: 10px (63), 30px (26), 4.8px (16), 16px (16), 25.5938px (10), 8px (8), 51.1875px (4).

## Elevation & Depth

Measured shadows: `rgb(0, 160, 82) 0px 0px 0px 2px inset` (6 elements; a 2px green inner ring), `rgba(0, 0, 0, 0.1) 0px 1px 0px 0px` (header hairline) and `rgba(0, 0, 0, 0.2) 0px 0px 50px 0px` (one soft large shadow). Depth is otherwise a green-to-blue gradient band, translucent overlay panels on photographs and white circles on that band.

## Shapes

Measured radii: 5px (22 elements), 10px (12), 50% (8), 100% (8), 100px (4), 30px (1). Buttons are 5px; 50% and 100% give the circular icons of the eight-up grid; 10px, 30px and 100px are used on other boxed elements that the extraction did not isolate.

## Components

- **Green button:** "ราคาหลักทรัพย์" and "ดูทั้งหมด", fill #00a052, white Prompt 500 16px/27.2px, padding 4.8px 16px, 37px tall, 5px radius; widths 136px and 94px.
- **Menu:** white header, 16px/600 labels in translucent black with chevrons for sub-menus; the header carries the hairline shadow.
- **Icon circle links:** white circles with green line icons and white captions on the gradient band.
- **Business columns:** photograph, green TBold title plus English subtitle, 16px paragraph, small green button.
- **Slider panel:** translucent white panel at the right of the hero with the capacity statement, with round arrow buttons at the sides and green slider dots.
- **Footer:** #f5f6f7, #22934a text, 24px headings, 935px tall.

## Design System Architecture

No public design system or brand-guidelines page was found: the opened page https://www.age.co.th/ links only to company, business, news, governance, investor and sustainability pages. The measured root variables show a plugin and theme stack rather than brand tokens: `--wp--preset--*` values (`--wp--style--global--content-size: 823px`), `--color-primary-active: #00a052`, `--color-success: #018e11`, `--font-size-sm: 12px`, Font Awesome 6 variables, and loaded fonts ETmodules, FontAwesome, revicons and wpzoom-socicon icon fonts.

## Do's and Don'ts

- Do use one green, #00a052, for actions, headings and the utility bar on a white page.
- Do keep body copy at Prompt 500 16px/23.8px in #333333 and secondary copy in #666666.
- Do use 5px-radius buttons and circular white icon links on the gradient band.
- Do pair each Thai title with an English subtitle.
- Don't use WordPress preset colours such as #9b51e0 or the #2ea3f2 link blue as brand colours.
- Don't add extra accent hues; none beyond the green family was measured.
- Don't treat the slider overlay (#89939de3) as a palette colour.

## Responsive Behavior

Mobile was measured at 390px. The company-name heading is Prompt 600 40px/68px in #666666 in a 312px by 204px block; the body paragraph stays 16px/23.8px (white on the gradient) in a 312px by 143px block; the green button keeps 16px/27.2px, 5px radius and 37px height; the header is 390px by 80px with a 1px hairline shadow and recorded no menu text. Mobile size frequencies: 20px (1290 characters), 16px (1168), 17px (656), 18px (335), 24px (116), 22px (79). Menu behaviour, column reflow and slider layout at narrow widths were not measured.

## Iteration Guide

1. Start from canvas #ffffff, ink #333333, primary #00a052 and footer #f5f6f7.
2. Type: Prompt 500 at 16px/23.8px for text; TBold for large green headings and links.
3. Buttons: green fill, white text, 5px radius, padding 4.8px 16px.
4. Use a green utility bar, a white header with a 1px hairline shadow and a green-to-blue gradient band for icon links.
5. Business columns: photo, green title with English subtitle, paragraph, small button.
6. Measure new components before adding tokens; states not recorded stay "not measured".
