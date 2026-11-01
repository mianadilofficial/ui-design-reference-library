---
version: alpha
name: Interlink Telecom
category: "Thai Brands"
description: "Interlink Telecom (ITEL), a Thai fiber-optic and data-center network operator: Prompt typeface in light weight 300 at 16px body, 45px display, brand orange #ff7b23 pill buttons at 36px radius, white canvas, grey #707070 text and dark #292929 footer over dark network photography."
colors:
  canvas: "#ffffff"
  ink: "#707070"
  primary: "#ff7b23"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-footer: "#292929"
  ink-muted: "#929292"
  ink-faint: "#cccccc"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 45px
    fontWeight: 400
    lineHeight: 55px
  display-mobile:
    fontFamily: Prompt, sans-serif
    fontSize: 23px
    fontWeight: 400
    lineHeight: 30px
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 22px
    fontWeight: 300
    lineHeight: 32px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: Prompt, sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 34px
  nav:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
rounded:
  xs: 8px
  sm: 22px
  md: 36px
  pill: 9999px
spacing:
  s1: 6px
  s2: 10px
  s3: 12px
  s4: 15px
  s5: 17px
  s6: 19px
  s7: 20px
  s8: 25px
  s9: 30px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 35px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.25) 1px 3px 6px 0px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.primary}"
    padding: 20px 0px 30px
---

## Overview

The measured site is the Thai-language home page of Interlink Telecom Public Company Limited (บริษัท อินเตอร์ลิ้งค์ เทเลคอม จำกัด (มหาชน)), the page title being "Interlink Telecom" and the document language `th`. The company describes itself on the page as a provider of fiber-optic telecommunication networks (Data Service) and shows an "ITEL Service" block, an about section, investor information (annual report 2568), press releases, news and activities, sustainability and a corruption-reporting call to action. The measured page is 1280px wide and 3388px tall.

The look is corporate-technical: dark photographic bands of network lines, data-center racks and circuit boards alternate with white sections, and a saturated orange (`#ff7b23`) is the only accent. Text is set in a single typeface, Prompt, mostly in light weight 300. Section titles in the capture pair a heading with a small circular orange icon badge. The mood is formal and dense in information, in Thai with English product names (Interlink MPLS IP-VPN, Interlink Dark Fiber, Interlink Wavelength).

Capture note: the first capture contained a tribute pop-up (a black framed condolence panel with a portrait) and a scrim (`#000000b3`) over the top of the page. That overlay is a temporary notice, not brand UI, and it is excluded from every token and description below. The re-run extraction removed a 0.5 grayscale site filter for capture.

## Colors

- **Canvas `#ffffff`**: the light section background (572 weighted area units).
- **Surface black `#000000`**: the largest measured area (1024 units), from the dark photographic bands.
- **Footer surface `#292929`**: dark grey used for the footer (256 units).
- **Ink `#707070`**: the most-read grey text on white (1031 characters). White text `#ffffff` is read even more (1242 characters) because dark bands carry white copy.
- **Primary `#ff7b23`**: brand orange; it fills the primary button, borders it (`1.42857px solid #ff7b23`), colours headline words such as "ITEL Service" and footer phone numbers (203 characters).
- **Ink muted `#929292`** (49 characters) and **ink faint `#cccccc`** (24 characters) are secondary text greys.

A mid-blue band holds the investor and press section in the capture; its hex is not one of the measured dominant colours, so no token is declared for it. The scrim `#000000b3` belongs to the tribute overlay and is not a brand colour.

## Typography

Prompt is the only family (2550 measured characters) and the loaded weights are 200, 300, 400, 500 and 700. Weight 300 carries most text (2027 characters), 400 follows (298), 500 (123), 200 (101) and 700 (1). Fallback is the generic `sans-serif`. Prompt is an open-source Thai and Latin family; no substitute is needed where it is available.

Measured roles at desktop:

- Display (h1 role): 45px / 55px, weight 400.
- Subheading: 22px / 32px, weight 300.
- Body: 16px / 24px, weight 300 (1665 characters at 16px).
- Nav links: 16px / 26px, weight 400.
- Button: 24px / 34px, weight 300.

Other sizes with notable use are 18px (195 characters), 20px (123), 15px (102), 14px (73) and 12px (67). No letter-spacing is measured (`normal`). On the 390px mobile pass the heading role is 23px / 30px weight 400.

## Layout

Sections run full width as horizontal bands: hero with centered title, a services row with image cards to the right of the intro text, a four-up grid of icon tiles on a dark photo background, an about row with video thumbnail left and text right, an investor band with a report cover, news cards in a row of four, a sustainability trio of cards, a wide call-to-action strip and a multi-column footer with a phone number, address and social icons. Measured paddings are 20px (20 uses), 80px (7), 30px, 25px, 17px, 15px and 19px. Gap values were not recorded. The spacing tokens 6px to 40px come from these paddings.

Imagery and voice: every photo on the page is either a stylised technology render (glowing network lines, server racks, circuit boards, a cube with a cloud mark) or a documentary photograph of staff, executives and site visits attached to a dated news item. Dates sit above each news card in small type, and headlines are full Thai sentences that quote project values and stock-market commentary. Microcopy mixes Thai labels with English product and service names, and the section headings are short noun phrases such as "บริการของบริษัท" (company services), "เกี่ยวกับบริษัท" (about the company) and "ข่าวประชาสัมพันธ์" (press releases). Each heading is followed by a small round orange icon badge that acts as the only recurring ornament.

## Elevation & Depth

Cards use a soft drop shadow: `rgba(0, 0, 0, 0.25) 1px 3px 6px 0px` (3 uses), `rgba(0, 0, 0, 0.25) 0px 3px 6px 0px` (4 uses) and `rgba(0, 0, 0, 0.15) 0px 3px 6px 0px` (1 use). Depth otherwise comes from photographic backgrounds and dark tinted bands rather than borders. The footer is a flat `#292929` block.

## Shapes

Measured radii are 8px (18 uses, cards and tiles), 36px (6 uses, pill-like buttons), 22px (1) and 100% (1, circular badges). The token set also declares `pill: 9999px`. The primary button is 35px high with a 36px radius, so it renders as a full pill.

## Components

- **Primary button**: orange `#ff7b23` fill, white text, Prompt 24px weight 300, 35px height, 36px radius, orange border. Used for "ร้องเรียน/แจ้งเบาะแสทุจริตคอรัปชั่น" (report corruption) and, in smaller form, for "View all Products", "อ่านต่อ" and "ดูเพิ่มเติม" in the capture.
- **Navigation**: a horizontal text menu over the dark hero in Prompt 16px; link text is white and the active/brand colour is orange. A circular language switch ("TH") ends the row.
- **Service cards**: image cards with 8px radius, the shadow above, and a white label at the bottom-left.
- **Icon tiles**: dark tiles with a line icon and centered white Thai text.
- **Footer**: `#292929` background, orange phone number and company name, padding 20px 0 30px.

## Design System Architecture

No public design system, brand guidelines or GitHub organisation was found: the home page HTML was opened and contained no brand, press, design-system or guideline link beyond ordinary content. The extraction found no CSS custom properties at the root (`rootVars` is empty), so the de-facto system is plain page CSS with the Prompt font and a small, repeated set of values: one accent orange, greys for text, 8px and 36px radii, and one card shadow.

## Do's and Don'ts

- Do use Prompt, with weight 300 for running text and 400 for headings and nav.
- Do reserve `#ff7b23` for primary actions, key headline words and contact details.
- Do pair dark technology imagery with white text and white sections with `#707070` text.
- Do use the 8px radius for cards and the 36px pill for buttons.
- Don't use bold weights; weight 700 appears on only one character.
- Don't copy the tribute pop-up, scrim, cookie tab or other temporary overlays into the system.
- Don't introduce additional accent hues; the measured palette has one.

## Responsive Behavior

Measured only at the 390px mobile pass: the heading role is 23px / 30px weight 400, and the most-read font size is 14px (1699 characters), followed by 15px (245), 16px (166), 18px (158), 23px (101) and 9px (67). Mobile layout, breakpoints, navigation collapse and hover states were not measured.

## Iteration Guide

1. Set the page in Prompt: 300 for body at 16px / 24px, 400 for 45px headings.
2. Alternate white sections (`#ffffff`, text `#707070`) with dark photographic bands (white text).
3. Use `#ff7b23` for the pill button (36px radius, 35px high) and for emphasised headline words.
4. Give cards 8px corners and `rgba(0, 0, 0, 0.25) 1px 3px 6px 0px`.
5. Close the page with a `#292929` footer carrying orange contact details.
6. Check new values against `web/data/extracted/interlink-telecom.json`.
