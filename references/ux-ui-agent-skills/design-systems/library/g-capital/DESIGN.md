---
version: alpha
name: G Capital
category: "Thai Brands"
description: "G Capital (gcapital.co.th), Thai personal and agricultural lender whose Sabai-jai loan brand uses Prompt type, a royal-blue #324695 action and footer color, light grey #dddcdc and #e5e5e5 bars, 50px-radius pill buttons and an uppercase 34px bold Thai heading."
colors:
  canvas: "#ffffff"
  ink: "#272727"
  primary: "#324695"
  on-primary: "#ffffff"
  surface-grey: "#dddcdc"
  ink-muted: "#9c9899"
  header-bar: "#e5e5e5"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 34px
    fontWeight: 700
    lineHeight: 48px
    textTransform: uppercase
  display-mobile:
    fontFamily: Prompt, sans-serif
    fontSize: 26px
    fontWeight: 700
    lineHeight: 40px
    textTransform: uppercase
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 21px
    fontWeight: 700
    lineHeight: 26px
    textTransform: uppercase
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: Prompt, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 26px
  button-secondary:
    fontFamily: Prompt, sans-serif
    fontSize: 19px
    fontWeight: 700
    lineHeight: 26px
    textTransform: uppercase
  input:
    fontFamily: Prompt, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 42px
    letterSpacing: 0.5px
rounded:
  xs: 4px
  sm: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 6px
  s4: 12px
  s5: 13px
  s6: 15px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 5px 30px
    height: 42px
    borderColor: "{colors.primary}"
  button-primary-hover:
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 15px 40px
    height: 60px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.header-bar}"
    textColor: "{colors.primary}"
    padding: 18px 0px 0px
  text-input:
    textColor: "{colors.primary}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 0px 8px 0px 47px
    height: 42px
    borderColor: "{colors.primary}"
    boxShadow: rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    padding: 50px 0px 30px
---

## Overview

G Capital's homepage (title "G Capital สินเชื่อสบายใจ ก้าวไปกับจีแคป") promotes "สินเชื่อสบายใจ" (Sabai-jai loans), a Thai consumer and agricultural lending line. The page opens with a light grey header holding the "g capital" wordmark and an employee/partner login (a User ID field, a Password field and a pill "Login" button), then a royal-blue navigation bar with Thai menu labels (home, about, services, news and promotions, investor relations, FAQ, careers, contact), then a hero carousel. At capture time the first hero slide was a black-and-white memorial tribute with dark arrow controls; that is a time-limited overlay and is not documented as brand UI. A circular back-to-top button also floats on the right of the capture and is likewise excluded.

Below the hero: a white section "บริการสินเชื่อสบายใจ" with a small blue underline accent and two photo cards ("สบายใจอันดามัน" with a marina photo, "สบายใจเกษตรกร" with a rice-harvest photo), a dark charcoal geometric-tile section asking "ทำไมถึงเลือก 'สินเชื่อสบายใจ'?", and a news-and-activities row of white announcement cards on a light grey ground with date badges in blue. Measured colors: `{colors.canvas}` #ffffff, `{colors.ink}` #272727, `{colors.primary}` #324695, `{colors.surface-grey}` #dddcdc and `{colors.header-bar}` #e5e5e5.

The tone is friendly and institutional: rounded pills for actions, warm photography of boats and farms, and Thai headings in a bold uppercase style.

Imagery and microcopy in the capture: service cards use landscape photographs with a bold black title and two lines of grey description, truncated with an ellipsis; section headings are bold black Thai text with a short blue rule under them, left-aligned; the dark band uses a centered white heading and a one-line white subheading over a charcoal pattern of triangular facets with a few lighter and darker squares. The news row shows announcement banners as the card image, each with a numbered blue date tile (day over month) at the top-left. Labels are short and directive: "Login", "ดูเพิ่มเติม" (see more), "ติดต่อเรา" (contact us) and "ร่วมงานกับเรา" (join us) appear in the menu.

## Colors

- **`{colors.canvas}` #ffffff:** the largest background area (weight 5,598).
- **`{colors.surface-grey}` #dddcdc:** second-largest background area (2,033), the ground behind the news cards.
- **`{colors.primary}` #324695:** the royal blue used for the Login pill, the navigation bar, the footer background and 7 border colors; 1,078 weight as background area. It also appears as text (34 characters).
- **`{colors.header-bar}` #e5e5e5:** the header bar behind the logo and login fields (204 weight).
- **`{colors.ink}` #272727:** main text on light grounds (566 characters); **`{colors.ink-muted}` #9c9899** for secondary copy (325 characters).
- **White text:** #ffffff is the most frequent text color (1,116 characters) because the nav, footer and hero text sit on blue or dark grounds.
- A cyan #00b4e6 border and a #eeeeef border were each measured on one to three elements; their roles were not identified and they are not promoted to tokens.
- The Bootstrap link blue #337ab7 appeared in the measurement; it is a framework default, not a brand color, and is dropped.

## Typography

A single family, Prompt (2,041 counted characters), at weights 400 (1,239 characters), 700 (716) and 500 (86). Loaded faces: Prompt 400 and 700, plus FontAwesome for icons.

- **Display `{typography.display}`:** 34px, weight 700, line-height 48px, uppercase; measured on the h1 "บริการสินเชื่อสบายใจ". Mobile pass: 26px, line-height 40px (`display-mobile`), 360px wide.
- **Subheading `{typography.subheading}`:** 21px, weight 700, line-height 26px, uppercase.
- **Body `{typography.body}`:** 18px, weight 400, line-height 18px (the extractor's body element); the most frequent sizes by characters are 16px (329), 15px (311), 14px (268), 13px (242) and 19px (239).
- **Button `{typography.button}`:** 14px, weight 400, line-height 26px. **Secondary button:** 19px weight 700 uppercase, line-height 26px.
- **Input `{typography.input}`:** 13px, weight 400, line-height 42px, letter-spacing 0.5px.

## Layout

The desktop pass is 1280px wide with a scroll height of 4,669px. The header is two stacked bars (logo and login; blue navigation). Content sections are centered containers with a short underlined section heading left-aligned, cards in rows of two or three, and a full-width dark pattern band. Paddings most used: 15px (38 occurrences), 12px (11), 2px (8), 30px (4), 6px (4). The footer has padding 50px 0px 30px. No grid gap values were recorded.

## Elevation & Depth

Only one shadow was measured: an inset `rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset` on the two login text inputs. Cards in the capture rely on white fill over grey ground and photographs rather than shadows. The dark section uses a faceted geometric-tile image that creates visual depth without a shadow token.

## Shapes

Radii: 50px on pills (5 elements, the Login button, the secondary "ดูเพิ่มเติม" button and the inputs), 50% on circular controls (3), 4px (1); all other elements measured as square. `{rounded.sm}` 50px is used by `button-primary`, `button-secondary` and `text-input`; `{rounded.xs}` is 4px.

## Components

- **Primary button (`button-primary`):** fill `{colors.primary}`, white text, Prompt 14px 400, radius 50px, padding 5px 30px, height 42px, border 1px solid #324695; label "Login". On hover the fill becomes transparent and the text turns `{colors.primary}` (`button-primary-hover`).
- **Secondary button (`button-secondary`):** same blue fill and white text, Prompt 19px 700 uppercase, radius 50px, padding 15px 40px, height 60px, 2px blue border; label "ดูเพิ่มเติม" (see more). Its hover keeps the fill and white text, with opacity changing from 0 to 1 in the recorded states.
- **Text input:** 42px high, 50px radius, padding 0px 8px 0px 47px (icon gutter), text color `{colors.primary}`, 1px blue border and the inset hairline shadow; the User ID and Password fields in the header.
- **Nav:** `{colors.header-bar}` background in the token (the header bar), padding 18px 0px 0px; the blue menu bar beneath it uses `{colors.primary}`.
- **Footer:** `{colors.primary}` background, white text, padding 50px 0px 30px.
- **News card:** white card with a blue date badge, logo-style banner image and a short bold Thai title; no numeric tokens extracted.

## Design System Architecture

No public design system or brand guideline was found, and none was searched for. The extraction found no CSS custom properties (`rootVars` is empty), so the de-facto system is page-level CSS built on a Bootstrap-style stack (the default #337ab7 link blue appeared in the measurement and was dropped). The consent-overlay filter recorded a "scrim cd-overlay" element, which the extractor hid; overlays are excluded from this document.

## Do's and Don'ts

- Do use `{colors.primary}` royal blue for navigation, buttons and footer, with white text.
- Do keep action controls pill-shaped (50px).
- Do use Prompt at 700 for uppercase headings and 400 for copy.
- Don't treat the memorial slide, the back-to-top button or the cookie scrim as brand components.
- Don't use #337ab7 (Bootstrap default) as a brand color.
- Don't add shadows to cards; only the inputs carry an inset shadow.

## Responsive Behavior

Measured at 390px: the h1 is 26px with line-height 40px (desktop 34px), 360px wide and 40px tall, and a body paragraph at 18px weight 400 in `{colors.ink-muted}`. Navigation collapse, card stacking and spacing at mobile are not measured.

## Iteration Guide

1. Begin with `{colors.canvas}` and `{colors.ink}` text in Prompt.
2. Use `{colors.primary}` for one pill action and the navigation bar.
3. Place secondary content on `{colors.surface-grey}`.
4. Keep headings uppercase at 700.
5. Run `node web/scripts/verify-designs.mjs --slug=g-capital`.
