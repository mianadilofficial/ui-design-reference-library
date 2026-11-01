---
version: alpha
name: จ้าวช้างไวไฟ
category: "Thai Brands"
description: "Thai agricultural-machinery brand site (rice combine harvesters, Phitsanulok) in Prompt headings and Kanit body, orange #ff7700 as the brand action colour, navy #1e3a8a as secondary, slate ink #64748b and #1e293b on #ffffff with 22px-radius product cards and pill buttons."
colors:
  canvas: "#ffffff"
  page-largest: "#f8fafc"
  ink: "#64748b"
  ink-strong: "#1e293b"
  primary: "#ff7700"
  on-primary: "#ffffff"
  brand-secondary: "#1e3a8a"
  accent-soft: "#fdba74"
  ink-on-dark-muted: "#ffffff80"
  ink-on-dark: "#f8fafcb3"
  hairline: "#1e293b0f"
typography:
  display:
    fontFamily: Prompt, "Segoe UI", sans-serif
    fontSize: 21.6px
    fontWeight: 700
    lineHeight: 36.72px
  display-mobile:
    fontFamily: Prompt, "Segoe UI", sans-serif
    fontSize: 28.64px
    fontWeight: 700
    lineHeight: 35.8px
    letterSpacing: "-0.2864px"
  heading:
    fontFamily: Prompt, "Segoe UI", sans-serif
    fontSize: 42.88px
    fontWeight: 700
    lineHeight: 53.6px
    letterSpacing: "-0.4288px"
  subheading:
    fontFamily: Prompt, "Segoe UI", sans-serif
    fontSize: 17.6px
    fontWeight: 600
    lineHeight: 21.12px
    letterSpacing: "-0.176px"
  body:
    fontFamily: Kanit, "Segoe UI", sans-serif
    fontSize: 19.84px
    fontWeight: 400
    lineHeight: 33.728px
  button:
    fontFamily: Prompt, "Segoe UI", sans-serif
    fontSize: 13.6px
    fontWeight: 500
    lineHeight: 20.4px
    letterSpacing: 0.136px
  link:
    fontFamily: Kanit, "Segoe UI", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
rounded:
  xs: 16px
  sm: 22px
  pill: 9999px
spacing:
  s1: 4px
  s2: 4.8px
  s3: 6.4px
  s4: 8px
  s5: 9.6px
  s6: 12px
  s7: 14.4px
  s8: 15.2px
  s9: 16px
  s10: 18.4px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 18.4px
    height: 40px
    boxShadow: rgba(249, 115, 22, 0.28) 0px 12px 32px 0px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
    boxShadow: rgba(30, 41, 59, 0.06) 0px 2px 8px 0px
  footer:
    textColor: "{colors.on-primary}"
    padding: 56px 0px 0px
---

## Overview

This file describes the site at `https://www.kpn.co.th/` (it resolves to `/cms/public/`), whose page title and wordmark are **จ้าวช้างไวไฟ** (the logo in the capture reads "JAO CHANG"). It is a manufacturer's site for tracked rice combine harvesters and related agricultural machines, with a Phitsanulok contact address and the line "&copy; 2026 จ้าวช้างไวไฟ All rights reserved" in the footer. The queue lists this URL under the name "KPN REIT"; the opened pages do not mention any REIT, so the DESIGN.md is named after the measured site and makes no claim about the relationship between the two names.

The top of the page is a dark slate utility strip (phone 055313108, an e-mail address, three social icons) above a translucent navigation bar: the wordmark with a small red logo tile at left, seven Thai links (หน้าหลัก, เกี่ยวกับเรา, สินค้า, ข่าวสาร, แกลลอรี่, ดาวน์โหลด, plus the "ติดต่อเรา" button). The hero is a full-bleed photograph of a harvester with four dark glass spec chips overlaid (capacity 1.5 tons, track PC-40, cutting width 2.2 metres, 2-4 rai per hour). The "สินค้าของเรา" (Our products) section follows on a #f8fafc band: a small orange pill label, a centred heading, a one-sentence description and a grid of product cards, each with a cut-out product photo on a pale tile, the model name and an outlined orange "ดูรายละเอียด" button, followed by a filled orange "ดูสินค้าทั้งหมด" button. News and a closing call-to-action band come below.

Voice is direct and benefit-led ("เก็บเกี่ยวรวดเร็ว ลดการสูญเสีย เพิ่มประสิทธิภาพในทุกพื้นที่"), with spec numbers shown prominently in white over the photo.

## Colors

`canvas` is #ffffff; the largest background area measured is the pale slate `page-largest` #f8fafc. `ink` #64748b is the most-read readable text colour (408 characters, used for descriptions) and `ink-strong` #1e293b is the heading and card-title colour (326 characters) and the dark band. White text (`on-primary` #ffffff, 436 characters) sits on the hero and footer, with muted variants `ink-on-dark-muted` #ffffff80 for the hero paragraph and `ink-on-dark` #f8fafcb3 for footer copy.

`primary` #ff7700 is the brand action colour. The stylesheet declares it as `--brand-primary` #ff7700 (the page also declares a `--color-primary` of #F97316 used for glow shadows); on the page it is the text colour of orange links and labels (139 characters) and the border colour of the outlined card buttons (9 uses). `brand-secondary` #1e3a8a is the navy declared as `--brand-secondary`; the only measured fill using it is the cookie consent accept button, so on the home page it is a defined secondary, not a visible CTA colour. `accent-soft` #fdba74 (31 characters) is the pale orange used for small label text, declared as `--color-accent`. `hairline` #1e293b0f is the 1px card border at about 6 percent alpha.

The extractor first detected the cookie button as the primary CTA; that was overridden because a cookie control is not brand UI (see SOURCES.json `_roleOverrides`). The orange gradient fill visible on the filled buttons in the capture was not recorded as a measured value, so only the solid brand colour and the measured glow shadow are tokenised. The stylesheet also declares `--gradient-brand` as a 135 degree blend from the primary to the secondary; its use on specific elements was not measured. Bootstrap variables (#0d6efd and similar) are framework defaults and not brand colours.

## Typography

Two Google-style families are loaded: Prompt (500, 600, 700) for headings, navigation and buttons, and Kanit (400, 500, 600) for body copy; Kanit carried 872 and Prompt 684 of the measured characters. The stylesheet declares `--font-heading` 'Prompt' and `--font-body` 'Kanit', each with 'Segoe UI' and sans-serif fallbacks. Both families are Thai-capable.

Measured scale: `display` 21.6px / 36.72px at 700 (the wordmark and nav text); `heading` 42.88px / 53.6px at 700 with -0.4288px tracking (section titles); `subheading` 17.6px / 21.12px at 600 with -0.176px tracking (card titles); `body` 19.84px / 33.728px at 400 in Kanit; `link` 16px / 27.2px; `button` 13.6px / 20.4px at 500 with 0.136px tracking. `display-mobile` is 28.64px / 35.8px at 700 with -0.2864px tracking, measured for the section title at 390px. Weights 400 (799 characters) and 600 (533) dominate. Headings use slightly negative tracking; buttons use slightly positive.

## Layout

The page is 1280px wide and 6639px tall in the desktop pass. The header is 96px tall. The product grid in the capture shows four cards in the first row and two in the second, with consistent gutters; the section container is centred with generous vertical rhythm (the stylesheet declares a section spacing of clamp(3.5rem, 3rem + 2vw, 6.5rem) and a spacing scale from 0.25rem to 5.5rem). Measured gaps are 8px (24 uses), 6.4px, 16px and 9.6px; paddings 12px, 24px, 8px, 16px and 32px.

## Elevation & Depth

Cards use a very light shadow `rgba(30, 41, 59, 0.06) 0px 2px 8px 0px` (9 uses) plus the hairline border. The "ติดต่อเรา" button carries a coloured glow `rgba(249, 115, 22, 0.28) 0px 12px 32px 0px` (2 uses). The stylesheet also declares larger shadow steps (--shadow-md 0 8px 24px, --shadow-lg 0 20px 48px), whose usage was not measured. The hero uses a dark translucent overlay (#0f172a59 measured over a large area) so white text stays readable on the photo.

## Shapes

Radii measured: 999px (20 uses, pills and chips), 22px (10 uses, cards), 50% (5, round social icons), 16px (3) and one top-corner radius of 10px. The stylesheet declares radius steps of 10px, 16px, 22px and a 999px pill. Buttons are pills, cards are softly rounded, product photos sit on a pale rounded tile.

## Components

**Primary button.** Pill (999px), `primary` #ff7700 with white 13.6px / 500 text, 40px high, 8px 18.4px padding, with the orange glow shadow; "ติดต่อเรา" in the header and "ดูสินค้าทั้งหมด" below the grid.

**Outlined card button.** Pill with a 1px #ff7700 border and orange text, the full width of the card, label "ดูรายละเอียด".

**Product card.** White, 22px radius, hairline border and the soft shadow, 404px high in the measured pass: pale image tile, 17.6px / 600 title, outlined button.

**Spec chip.** Dark translucent rounded rectangle on the hero with an icon, a small label and a large white figure.

**Navigation.** White Prompt text on the translucent dark header; the current page link is underlined in orange in the capture.

**Footer.** Dark slate band with white text, 56px top padding, address and phone details.

## Design System Architecture

No public design system or brand guideline is linked from the pages read. The site is built on Bootstrap 5 with a custom theme layer: root custom properties for colours (--color-primary, --color-secondary, --color-dark, --color-light, --color-accent, plus -dark and -rgb variants), fonts, radii, shadows, spacing and gradients, so brand tokens are expressed as CSS variables with names like --brand-primary and --radius-lg. Components are Bootstrap classes restyled with those variables. A cookie-consent component (class prefix cc-) is third-party UI and is not documented as brand UI.

## Do's and Don'ts

- Do use orange #ff7700 for actions and outlined button borders, with white text on filled buttons.
- Do pair Prompt headings with Kanit body and keep Thai line-heights generous (33.728px at 19.84px body).
- Do show specification figures large and white over the product photograph.
- Don't use #1e3a8a as a button colour on marketing pages; on the home page only the cookie control used it.
- Don't copy the cookie banner, consent overlay or the black scrim as brand elements.
- Don't introduce hard shadows; the system uses 6 percent slate shadows and one orange glow.

## Responsive Behavior

Measured at 390px: the section heading renders at 28.64px / 35.8px with -0.2864px tracking, and the button keeps its 13.6px type, 32px cookie-control height and pill radius. The mobile pass did not record layout data (header link count, menu toggle, column counts), so how the navigation, spec chips and product grid reflow is not measured.

## Iteration Guide

1. Use the tokens as written; add colours only from the stylesheet variables or new measurements.
2. New sections: #f8fafc band, 42.88px Prompt heading in #1e293b, 19.84px Kanit description in #64748b, orange pill label above the heading.
3. Cards: 22px radius, hairline border, soft slate shadow, outlined orange pill button.
4. Keep photography as cut-out machines on pale tiles and full-bleed hero shots with a dark overlay.
5. Run `node web/scripts/verify-designs.mjs --slug=jao-chang` after edits.
