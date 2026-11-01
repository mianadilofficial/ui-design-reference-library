---
version: alpha
name: Ministry of Energy (กระทรวงพลังงาน)
category: "Thai Brands"
description: "Thai Ministry of Energy portal (energy.go.th) set in the Sukhumvit typeface with a #303030 dark footer, #ffffff page body, #ff5000 orange 6px-radius buttons with white text, #2b2b2a navigation ink and a numbered 01-07 top navigation over hero photography."
colors:
  canvas: "#303030"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#ff5000"
  on-primary: "#ffffff"
  dark-teal: "#152228"
  ink-nav: "#2b2b2a"
  ink-black: "#000000"
  ink-gray: "#a1a1a1"
  ink-navy: "#001d35"
  ink-muted: "#666666"
  text-input-border: "#dddddd"
typography:
  display:
    fontFamily: Sukhumvit, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 48px
  display-mobile:
    fontFamily: Sukhumvit, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 36px
  body:
    fontFamily: Sukhumvit, sans-serif
    fontSize: 15px
    fontWeight: 100
    lineHeight: 22.5px
  nav:
    fontFamily: Sukhumvit, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  link:
    fontFamily: Sukhumvit, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  button:
    fontFamily: Sukhumvit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 12px
  lg: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 18px
    height: 42px
  link:
    textColor: "{colors.ink-black}"
    typography: "{typography.link}"
    padding: 10px 12px
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.page-body}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 2px 8px 2px
  nav-link:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
    rounded: "{rounded.lg}"
    padding: 7px 36px 7px 14px
    height: 40px
    borderColor: "{colors.text-input-border}"
---

## Overview

The Ministry of Energy home page (final URL https://energy.go.th/th, title "กระทรวงพลังงาน", language `th`) is a portal for energy policy, news, market data and public services. A page summary I opened lists seven numbered sections in the main navigation (About the Ministry, Energy Policy, Energy News, Energy Situation, Ministry Announcements, Knowledge Resources, Public Services), a top bar with language, font-size, contrast and login controls, content areas for oil retail prices, electricity demand, petroleum reserves and renewable energy, and a footer with the Energy Complex address, contact details, social links and policy links. The summary states that no design system or brand guideline is referenced.

The measured capture shows a dark header with the ministry flame logo and numbered nav items (01 เกี่ยวกับกระทรวง, 02 นโยบายพลังงาน, 03 ข่าวสารพลังงาน, 04 สถานการณ์พลังงาน, 05 ประกาศกระทรวง, 06 แหล่งความรู้, 07 บริการประชาชน), a yellow-gold utility strip beneath it with text-size and contrast controls, a language selector, a login pill and social icons, a hero photograph of a fuel pump hose beside a motorcycle and city skyline, a live electricity-demand tile reading "ความต้องการพลังไฟฟ้าปัจจุบัน 30,924.20", an embedded social feed, and a dark gray footer. The extractor reported a site filter of grayscale(0.55) which it removed for capture. A welcome announcement modal with a "ปิด" button, a chat-bot widget and its notice were open at capture time; these are overlays and are not documented as brand UI.

## Colors

The page is white with a dark gray footer. `page-body` #ffffff is the dominant background (2,233 weight) and `canvas` #303030 is the footer field (544 weight). `dark-teal` #152228 (79 weight) is a very dark blue-green panel. The brand accent is orange: `primary` #ff5000 fills the footer buttons "แจ้งร้องเรียน" and "ศูนย์รับข้อร้องเรียน" with white text. An orange-red #fe4d01 also appears on the modal close button; that value is excluded because it belongs to a popup. A yellow-gold #ffb739 (17 weight) is a measured yellow-gold background area.

Text colours: `ink-nav` #2b2b2a is the dominant text (2,778 characters), `ink` #ffffff is used on dark areas (660), `ink-black` #000000 (277), `ink-gray` #a1a1a1 (117), `ink-muted` #666666 (14) and `ink-navy` #001d35 (77; chat widget text colour). `text-input-border` #dddddd outlines the search field. The root CSS carries Bootstrap 4 colour variables (--yellow #ffc107, --green #28a745, --pink #e83e8c, --teal #20c997, --danger #dc3545) and Dialogflow messenger variables (--df-messenger-*, for example #0b57d0 and #ecf3fe); these are framework and widget values, not brand colours.

## Typography

Sukhumvit carries the interface (3,834 measured characters), with Google Sans (77, the chat widget) and Arial (13). Loaded faces are Sukhumvit 100, 200, 400, 500 and 600, Font Awesome 5, Material Design Iconic Font and Roboto 400. Weight 300 dominates by character count (2,926), followed by 100 (485), 600 (226) and 400 (220), so the page reads light.

`display` is 32px / 48px weight 600 (the search overlay prompt "กรุณาระบุคำค้นหาที่ท่านต้องการ"), `display-mobile` is 24px / 36px weight 600, `body` is 15px / 22.5px weight 100 (footer address text, white on dark), `nav` is 16px / 24px weight 300, `link` is 14px / 21px weight 600 (the electricity tile label) and `button` is 16px / 20px weight 400. The most common sizes are 16px (2,911 characters), 15px (515), 17px (142), 14px (122) and 18px (76). Sukhumvit is loaded by the site itself.

## Layout

Measured at 1280px wide, with a recorded page height of 1226px for the captured document. Structure from the capture: a full-width nav bar (62px high, white text on dark), the yellow utility strip, a hero photograph with side arrows, tile content over the hero, and a footer in four columns (address and copyright, telephone, email, the Office of the Permanent Secretary contact, and the shared service centre contact) with two orange buttons and social icons at the right. Paddings measured: 10px (215 occurrences), 25px (39), 9px, 5px, 2px, 8px and 64px.

## Elevation & Depth

Shadows measured: `rgba(0, 0, 0, 0.15) 0px 8px 16px 0px` (4 occurrences), `rgba(0, 0, 0, 0.24) 1px 4px 15px 0px` (2) and `rgba(0, 0, 0, 0.15) 0px 2px 8px 2px` (1; the navigation bar). Depth otherwise comes from the dark footer against white and from overlaying tiles on the hero photograph.

## Shapes

Radii measured: 50% (16 occurrences, round social icons), 50% 0px 50% 50% (5, chat bubble), 12px 0px 12px 12px (2), 6px (2), and single uses of 4px, 12px, 20px, 0px 0px 16px 16px and a very large pill radius (14000px, on the popup close button, excluded). The orange footer buttons use 6px; the search input measured 20px with a 1px solid #dddddd border.

## Components

**Footer button** (`button-primary`): #ff5000 fill, white Sukhumvit 16px weight 400, 10px 18px padding, 42px high, 6px radius, 1px border; labels "แจ้งร้องเรียน" and "ศูนย์รับข้อร้องเรียน".

**Nav** (`nav`): white bar with a 0.15 alpha shadow, 15px weight 100 text; **nav link** in #2b2b2a at 16px weight 300 with a numbered prefix. **Link tile**: black 14px weight 600 text with 10px 12px padding (the live electricity-demand tile, 128px high). **Search input** (`text-input`): white fill, black 16px weight 300 text, 7px 36px 7px 14px padding, 40px high, 20px radius, 1px solid #dddddd border. **Footer**: #303030 with white text and thin vertical column dividers.

## Design System Architecture

No public design system or brand-guideline page was found; the opened home page summary states none is linked. The de-facto system is Bootstrap 4 (colour variables and `--breakpoint-md` 768px in the root CSS) plus a Dialogflow messenger widget (`--df-messenger-*` variables) and a custom `--gs` 1.5rem variable. The accessibility strip with text-size and contrast controls and the W3C WCAG 2.0 AA badge in the footer are visible in the capture.

## Do's and Don'ts

- Do use Sukhumvit in light weights (300 body, 600 emphasis) and number the main nav 01 to 07.
- Do use #ff5000 with white text and a 6px radius for complaint and service actions.
- Do keep a dark #303030 footer on a white page.
- Do show live figures as tiles with a bold label.
- Don't use the popup close-button orange #fe4d01 or its pill radius as brand styling.
- Don't copy chat-bot colours or Bootstrap defaults as brand colours.
- Don't hide the accessibility controls; they are part of the page chrome.

## Responsive Behavior

A mobile pass was recorded. On mobile the first heading measured 24px / 36px weight 600 (against 32px / 48px on desktop), body copy 13px / 19.5px weight 300 in #666666, and the navigation strip 16px weight 300 text on white at 56px high (62px on desktop). The detected mobile button was the popup close button and is not used. Breakpoints, menu collapse behaviour and footer column changes were not measured.

## Iteration Guide

1. Start with a white page, #2b2b2a text and Sukhumvit at 16px weight 300; use #303030 for the footer.
2. Use #ff5000 for primary actions with a 6px radius.
3. Keep numbered navigation and live-figure tiles.
4. Measure new components before adding tokens, and ignore overlays when measuring.
5. Re-run `node web/scripts/verify-designs.mjs --slug=ministry-of-energy` after changes.

## Measurement Notes

Further measured values: background areas #fafafa (54 weight), #413a3e (17), #ecf3fe (16, chat widget) and #0b57d0 (3, chat widget); border colours #ffffff (2), #000000 (1), #dddddd (1) and #5d5d5d (1). The scale of spacing in the frontmatter runs from 1px to 16px. Values not listed here or in the frontmatter were not measured.
