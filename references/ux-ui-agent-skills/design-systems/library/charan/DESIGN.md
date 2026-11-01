---
version: alpha
name: Charan Insurance
category: "Thai Brands"
description: "Charan Insurance (บมจ.จรัญประกันภัย) Thai homepage: Mitr headings at 30.4px and Noto Sans Thai text, royal-blue ink (#4054b2) on white over a #ecebe9 page, cyan (#22b5ce) accent on the submit button and active menu, flat boxes with 2-3px radii, a striped contact table and a row of vertical product banners."
colors:
  canvas: "#ffffff"
  page-body: "#ecebe9"
  ink: "#4054b2"
  primary: "#22b5ce"
  surface-2: "#f9f9f9"
  surface-3: "#f2f2f2"
  ink-secondary: "#999999"
  ink-3: "#282828"
  ink-4: "#333333"
  ink-5: "#000000"
  ink-6: "#444444"
  hairline: "#dddddd"
  button-secondary-text: "#5a5a5a"
  text-input-text: "#888888"
  text-input-border: "#e0e0e0"
typography:
  display:
    fontFamily: Mitr
    fontSize: 30.4px
    fontWeight: 400
    lineHeight: 36.48px
  subheading:
    fontFamily: noto-sans-thai, noto-sans, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 33.6px
  body:
    fontFamily: Mitr
    fontSize: 16px
    fontWeight: 300
    lineHeight: 25.6px
  button-secondary:
    fontFamily: noto-sans-thai, noto-sans, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 25.6px
  input:
    fontFamily: Mitr
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 3px
  md: 32px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 11.2px
  s7: 12px
  s8: 12.8px
  s9: 15px
  s10: 22.4px
components:
  button-secondary:
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 11.2px 22.4px
    height: 54px
    borderColor: "{colors.primary}"
    boxShadow: rgba(255, 255, 255, 0.5) 0px -1px 0px 0px inset
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-5}"
    padding: 32px 0px
---

# Charan Insurance (บมจ.จรัญประกันภัย) — Design System Notes

## Overview
Measured URL: https://charaninsurance.co.th/ (title "บมจ.จรัญประกันภัย – “จรัญสัญญา ชาวประชาอุ่นใจ”", language th). Charan Insurance is a Thai non-life insurer whose slogan, set in quotation marks beside the logo, is "จรัญสัญญา ชาวประชาอุ่นใจ". WebFetch of the site failed with a certificate error (see SOURCES.json), so this description is based on the extraction record and the capture image.

The measured homepage is a utilitarian, WordPress-style page rather than a marketing showpiece. The header is a light gray band with a gradient of diagonal stripes, a round blue seal-like logo, the company name "บมจ.จรัญประกันภัย" in large royal blue Mitr type, the slogan to its right and a single row of small menu items below: หน้าแรก (home, highlighted in cyan as the current page), ประกัน, จ่าย, เคลม, นักลงทุน, เกี่ยวกับบริษัท, เครือข่าย, ติดต่อเรา, ให้เช่า and a TH language selector with a flag. The first content block is a notice about flooding in many Bangkok areas, announcing that the company lists the phone numbers and email addresses of its departments; a table with a pale blue header row ("หน่วยงานภายใน", "เลขหมายโทรศัพท์", "Email Address") and alternating white and light gray striped rows lists claims, claims for general lines, motor, fire, marine, miscellaneous, marketing and administration departments. Below it is a horizontal slider of seven tall product banners (property, engineering, cargo, others, a compulsory motor offer with the numbers "3+", "100,000" and "6,200", the compulsory motor act "พ.ร.บ." and a personal accident leaflet) with "ก่อนหน้า / ถัดไป" (previous / next) controls. A "== ข่าว ==" news list gives numbered links to shareholder-meeting documents, and a gray contact form (name, email, phone, subject, message and a cyan-outlined "ส่งข้อความ" submit button) sits beside a section headed "การประชุมสามัญผู้ถือหุ้น ครั้งที่ 33 ประจำปี 2569".

A reCAPTCHA badge appears at the right edge of the capture; it is a third-party widget and not brand UI.

## Colors
- **Canvas `#ffffff`** (area-weight 5,537) and **`#f9f9f9`** (`surface-2`, 3,996) alternate as content and row backgrounds; **`#f2f2f2`** (`surface-3`, 260) is the form block. The **page-body `#ecebe9`** is the underlying page color.
- **Ink `#4054b2`**: royal blue for the company name, the headings, the table text and the menu (665 characters). **`#999999`** (`ink-secondary`) is the most used text color by count (1,132 characters, the news list and meta text); **`#282828`** (`ink-3`) is body copy (437), **`#333333`** (`ink-4`), **`#444444`** (`ink-6`) and **`#000000`** (`ink-5`) are further text and footer grays.
- **Primary cyan `#22b5ce`**: the current menu item and the submit button's border (33 characters of text, plus the border). No filled button exists on the page.
- **Hairline `#dddddd`** and **input border `#e0e0e0`**; input text `#888888`; secondary-button text `#5a5a5a`.
- The pale blue table-header fill `#d9edf7` (52 area units) is Bootstrap 3's default info background and is a framework default, not a brand color; it is not tokenized.

## Typography
Two families carry the page almost equally: **Mitr** (1,305 characters; weights 300, 400 and 500 are loaded) for the company name, headings and body, and **noto-sans-thai** (1,248 characters; 300, 400, 500, 700) with noto-sans as Latin fallback for table and navigation text. Icon fonts `sow-ionicons` and `TablePress` are also loaded.

- `display`: Mitr, 30.4px / 36.48px, weight 400 (the company name in the header).
- `subheading`: noto-sans-thai, 28px / 33.6px, weight 400 (the table text size).
- `body`: Mitr, 16px / 25.6px, weight 300.
- `button-secondary`: noto-sans-thai, 16px / 25.6px, weight 500.
- `input`: Mitr, 16px / 24px, weight 400.

Mitr and Noto Sans Thai are open Google fonts, so no substitute is needed.

## Layout
Width 1280px, height 3529px. The page is a single left-aligned column about 855px wide in the 960px-wide capture: header, notice, table, banner slider, news list, then the form. There is no multi-column grid; the contact form and the meeting heading sit side by side only at the bottom. Content uses the full-width stripes of the table, and spacing is loose and document-like. The text input uses `6px 12px` padding at 38px height, the secondary button `11.2px 22.4px` at 54px height and the footer `32px 0px`.

## Elevation & Depth
Almost no elevation. Two shadow values were measured: an inset `rgba(255, 255, 255, 0.5) 0px -1px 0px 0px inset` on the submit button (a faint bevel) and `rgb(128, 128, 128) 0px 0px 5px 0px` on one element. The product banners and the header gradient provide the only visual weight.

## Shapes
Almost everything is squared off: radii are 2px, 3px and a single 32px (the language selector or a pill element). The submit button uses `sm`, 3px. Tokens: `xs` 2px, `sm` 3px, `md` 32px.

## Components
- **button-secondary** ("ส่งข้อความ"): white fill, `#5a5a5a` Noto Sans Thai 16px/500 text, 3px radius, `11.2px 22.4px` padding, 54px tall, a `#22b5ce` outline and the faint inset highlight.
- **text-input**: white, `#888888` text in Mitr 16px, `6px 12px` padding, 38px tall, `#e0e0e0` border.
- **nav / nav-link**: royal blue `#4054b2` text in Mitr; the active item is cyan `#22b5ce`.
- **Contact table**: pale blue header row, striped rows, royal-blue text, right-aligned email column.
- **footer**: white, `#000000` text, `32px 0px` padding.
- **Product banner slider**: seven vertical images with slider arrows.

## Design System Architecture
No public design-system or brand-guideline page was found: WebFetch failed with a certificate error, so only the captured page and extraction were opened, and the capture shows no link to such a document. The page is a WordPress-style build (TablePress and Site Origin icon fonts, Bootstrap-3-style info-table color) with Mitr and Noto Sans Thai fonts; brand colors are carried in theme styles rather than in published tokens.

## Do's and Don'ts
- Do use royal blue `#4054b2` for the name, headings and links on a light page.
- Do use cyan `#22b5ce` for current-page and action outlines.
- Do keep corners nearly square (2-3px).
- Don't invent a filled primary button; the measured site has none.
- Don't use Bootstrap's `#d9edf7` as a brand color.
- Don't treat the reCAPTCHA badge or the flood notice as brand components.

## Responsive Behavior
No mobile (390px) measurement is recorded for this page: the extraction holds no display-mobile token and the capture shows only the 1280px desktop layout. Breakpoints, menu collapse behavior and the stacking of the table, slider and form are therefore not measured and are intentionally left undocumented rather than assumed.

## Iteration Guide
1. Start from a `#ecebe9` page with white content bands and `#f9f9f9` stripes.
2. Set the company name in Mitr 30.4px royal blue; body in Mitr 300 at 16px.
3. Use outlined cyan buttons at 3px radius.
4. Present contact data in a striped table with a pale header row.
5. Keep product promotion as a row of tall banners.

## Content and Voice
The voice is formal and institutional, written in polite Thai ("จึงขอเรียนแจ้งหมายเลขที่ใช้ในการติดต่อสื่อสารกับหน่วยงานต่างๆ ภายในบริษัท ให้ท่านทราบดังนี้", roughly: we hereby inform you of the numbers used to contact the company's departments). The page leads with practical information (department contacts, shareholder-meeting publications by Buddhist-era year such as 2569, 2568 and 2566, the annual 56-1 One Report notice) rather than with brand slogans, and the slogan "จรัญสัญญา ชาวประชาอุ่นใจ" is confined to the header. News items are a plain numbered list with dates, each prefixed by the verb "การเผยแพร่" (publication of), and the contact form uses short field labels with asterisks marking required fields ("ชื่อผู้ติดต่อ *", "อีเมลของท่าน *", "เรื่อง *", "ข้อความ *"). The product banners are the only place where the page becomes promotional, with a bright yellow-green compulsory-motor offer standing out from the otherwise blue, gray and white interface.
