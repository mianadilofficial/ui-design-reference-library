---
version: alpha
name: HSBC Group
category: "Banking & Insurance"
description: "HSBC Group corporate website (hsbc.com) measured live: UniversNext typeface in light 200 at 65px for hero display, black #000000 ink on white and #f5f6f7 surfaces, HSBC red #da0011 accents, 3px-radius outlined white hero button over photography, and white content cards in an offset two-column grid."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#da0011"
  on-dark: "#ffffff"
  red-dark: "#ba1110"
  surface-2: "#f5f6f7"
  surface-3: "#f4f5f6"
  ink-3: "#858585"
  ink-4: "#cfcfcf"
typography:
  display:
    fontFamily: UniversNext, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 65px
    fontWeight: 200
    lineHeight: 69.9985px
    letterSpacing: "-1.3px"
  display-mobile:
    fontFamily: UniversNext, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 35px
    fontWeight: 200
    lineHeight: 39.375px
    letterSpacing: "-0.7px"
  body:
    fontFamily: UniversNext, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.7143px
  link:
    fontFamily: UniversNext, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 18px
rounded:
  xs: 3px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 9px
  s5: 15px
  s6: 17px
  s7: 19px
  s8: 25px
  s9: 30px
  s10: 35px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 17px 21px
    height: 54px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 17px 21px
    borderColor: "{colors.canvas}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    boxShadow: rgba(0, 0, 0, 0.15) 1px 0px 0px 1px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    textColor: "{colors.canvas}"
---

## Overview
The measured page is https://www.hsbc.com/ (title "HSBC Group corporate website | HSBC Holdings plc", lang `en`), the corporate site of HSBC Holdings rather than a retail banking site. The capture opens with a white 97px header holding the red-and-white hexagon logo with the HSBC wordmark at the left, four centred links (Who we are, Investors, News and views, Careers), and "Online banking", "Contact" and a search icon at the right, separated by thin vertical rules. Under it, a full-width photographic hero of a surfer on a large wave carries the centred title "The Right Wave" in thin white type and an outlined button "Watch our new brand film".

Below the hero the page changes to a pale grey field (`#f5f6f7`) with an offset two-column grid of white story cards: each has a photograph on top (a conference reception, a red textured panel embossed with the HSBC hexagon, a glass meeting room, a robot demonstration at a conference) and a light-weight headline, a short paragraph and a red-chevron link ("Read more", "Find out more"). Headlines include "A partnership to connect climate tech and commercial opportunities", "HSBC at a glance", "HSBC launches new digital banking solution for businesses" and "HSBC's Annual China Conference explores the next chapter of growth". The voice is institutional, plain and factual, with sentences in standard business English.

## Colors
- **Canvas** `#ffffff` (3023 area): header and card backgrounds.
- **Surfaces** `#f5f6f7` (2800) and `#f4f5f6` (2432): the pale grey page background behind the story cards.
- **Ink** `#000000` (1981 characters): headings, body and nav text. Secondary grey `#858585` (148) and `#cfcfcf` (17) appear on captions and rules.
- **White** `#ffffff` is the text on the hero photograph (304 characters) and on the dark footer.
- **Dark** `#1e1e1e` (298 area) and `#151515` (115): the footer and dark overlays.
- **HSBC red** `#da0011`: not the most frequent rendered fill, but the most prominent brand colour in the stylesheet (56 uses in the CSS corpus) and visible in the logo, the red story panel and the chevron before each link. It is used as `primary` here. A darker red `#ba1110` is also in the CSS (21 uses).
The extractor's generated primary was white (the hero button text); it is kept as `on-dark`.

## Typography
The family is "UniversNext" (all 2450 measured characters; a custom Monotype Univers Next face) with "Helvetica Neue", Helvetica, Arial and sans-serif as fallbacks, loaded in weights 200, 300, 400 and 600 together with an "hsbc-icons" icon font. Weight 400 is the most used (1529 characters), then 200 (530), 600 (198) and 300 (193).

- **display**: 65px / 200, line-height 69.9985px, letter-spacing -1.3px (hero title "The Right Wave").
- **display-mobile**: 35px / 200, line-height 39.375px, letter-spacing -0.7px.
- **body**: 18px / 400, line-height 25.7143px.
- **link**: 18px / 600, line-height 18px (button and link labels).
- Navigation text is 19px at weight 300.
Letter-spacing is -0.02em at the display sizes. Card headings use the light weights at larger sizes (35px is the second most-used size, 418 characters), and 48px (148 characters) and 45px also appear. Substitute: none measured.

## Layout
Desktop pass: 1280px wide, 5073px tall. The header is 97px tall with a 1px side-and-bottom shadow. The hero is full-bleed. The content area is a two-column masonry of cards with a vertical offset between the columns (the right column starts higher than the left, with a red image card), sitting on a grey field with wide gutters. The footer is a 322px-tall dark block with the same top-level links as the header. Spacing tokens: 1, 5, 6, 9, 15, 17, 19, 25, 30 and 35px.

## Elevation & Depth
One shadow was measured, on the header: `rgba(0, 0, 0, 0.15) 1px 0px 0px 1px`, effectively a 1px hairline edge. Cards are separated by the colour step from `#ffffff` card to `#f5f6f7` page rather than by shadows, and the hero text sits on the photograph without an overlay measured.

## Shapes
The only measured radius is 3px, on the hero outlined button. Cards and photographs are square-cornered rectangles. The brand's own shape is the hexagon logo, which also appears embossed on the red image panel; chevron-right icons mark links.

## Components
- **secondary button / link** ("Watch our new brand film"): transparent fill, 1px white border, white 18px / 600 text, 3px radius, padding 17px 21px, 54px tall.
- **nav**: white bar, black text, 1px edge shadow; top-level items are 19px light, "Online banking" and "Contact" are bold; hover colours are near black (measured rgb(0, 0, 0)), with no colour change.
- **story card**: photo on top, white body, 35px light headline, 18px body, red chevron plus bold "Read more".
- **footer**: dark band with white links.
No form inputs were measured.

## Design System Architecture
No public design system or brand guideline was found from the page. The extraction found a single root variable (`--scrollbar-width: 0`), so the system lives in compiled class CSS. The stylesheet's colour list is small and neutral (white, black, `#ebeef0`, `#f5f6f7`, `#333333`, `#dfe2e4`, `#e5e5e5`, `#767676`) with two reds (`#da0011`, `#ba1110`). The site's navigation to "our-brand-in-action" pages and a brand film is content, not a documented system.

## Do's and Don'ts
- Do set headings in UniversNext light (200) with negative tracking, and body at 400.
- Do use white and `#f5f6f7` surfaces and let photography supply colour.
- Do mark links with the red chevron and bold labels.
- Do keep corners square, with 3px on outlined buttons only.
- Don't add drop shadows to cards; only a 1px header edge was measured.
- Don't overuse red; it appears in the logo, one image panel and link chevrons.
- Don't set hero text in heavy weights.

## Responsive Behavior
At 390px the mobile pass measured: hero title 35px / 200 (65px on desktop), body text 15px, the nav block 71px tall showing "Menu" and "Search" at 18px, and frequent sizes 15px (1469 characters), 22.5px, 72px, 12px, 35px. No CTA was detected at mobile width. Other mobile layout changes are not measured.

## Iteration Guide
1. Build a 97px white header and a full-bleed photo hero with a thin 65px white title and an outlined 3px button.
2. Place white cards in two offset columns on `#f5f6f7`.
3. Set card headlines in light UniversNext, body at 18px, and links with a red `#da0011` chevron.
4. Close with a `#1e1e1e` footer.

## Notes for Rebuilding
Hierarchy on this site comes from weight contrast within one family rather than from colour. Display headings and card titles use the lightest weights (200 and 300), body copy sits at 400, and every action label is set at 600, so a link is recognisable by weight and the red chevron beside it, not by underline or fill. The brand's red is deliberately rationed: in the capture it is limited to the logo, a single full-bleed red image tile embossed with the hexagon and the chevrons on links, while the rest of the page is black, white and grey. The header's right-hand group ("Online banking", "Contact", search) is separated by 1px vertical rules, and the primary navigation is centred rather than left-aligned. Photography is documentary in style: events, people and offices, with one dramatic hero.
The hero button is the only control in the measured roles, and its text colour is the white that the extractor first recorded as the primary value; this is why white is retained in the tokens under the name on-dark rather than discarded.
