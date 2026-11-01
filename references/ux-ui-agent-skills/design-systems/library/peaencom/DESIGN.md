---
version: alpha
name: PEA ENCOM International
category: "Thai Brands"
description: "Corporate site of PEA ENCOM International Co., Ltd., a solar and electrical-systems company, set in Inter with Prompt for Thai on a dark slate #343a40 canvas, green #00c96d highlights, translucent black #000000a6 header and square 52px buttons with a #00a65a border."
colors:
  canvas: "#343a40"
  ink: "#ffffff"
  primary: "#00c96d"
  on-primary: "#ffffff"
  surface-sage: "#bdc8be"
  surface-light: "#f2f2f2"
  ink-dark: "#212529"
  green-text: "#22b443"
  ink-footer: "#b9b9b9"
  ink-grey: "#6c757d"
  hairline: "#00000020"
  button-bg: "#000000b3"
  button-border: "#00a65a"
  nav-bg: "#000000a6"
  nav-border: "#00000099"
  input-text: "#495057"
  input-border: "#ced4da"
typography:
  display:
    fontFamily: Inter, Prompt, sans-serif
    fontSize: 72px
    fontWeight: 400
    lineHeight: 86.4px
  subheading:
    fontFamily: Inter, Prompt, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
  body:
    fontFamily: Inter, Prompt, sans-serif
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 21.6px
  button:
    fontFamily: Inter, Prompt, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  nav:
    fontFamily: Inter, Prompt, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  link:
    fontFamily: Inter, Prompt, sans-serif
    fontSize: 14.4px
    fontWeight: 600
    lineHeight: 21.6px
  input:
    fontFamily: Inter, Prompt, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3.2px
  sm: 4px
  md: 30px
  none: 0px
spacing:
  s1: 2.7px
  s2: 4px
  s3: 4.32px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 11.2px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.button-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 6px 48px
    height: 52px
    borderColor: "{colors.button-border}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 8px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    borderColor: "{colors.nav-border}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 5px 16px
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.input-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-footer}"
    rounded: "{rounded.none}"
---

## Overview

PEA ENCOM International is the home page of **บริษัท พีอีเอ เอ็นคอม อินเตอร์เนชั่นแนล จำกัด | PEA ENCOM International Co.,Ltd.**, served at `https://www.pea-encom.com/` (the queue's `www.peaencom.com` redirects there). The page text describes a company that develops energy and electrical systems, with sections "Fulfill the Green Energy", "Solar Energy Business (ไฮไลท์โปรเจค)" and "PEA-ENCOM Solar Monitoring", and a footer address on Ngamwongwan Road, Bangkok. The first capture contained a mourning pop-up (a black framed tribute card with an "เข้าสู่เว็บไซต์" button) and a grayscale page filter; the standard extractor was re-run, hid the mourning scrim (`scrim mourningPopup`) and removed a measured `grayscale(0.7)` filter, so the values below are from the real, coloured page.

The page opens with a 58px dark translucent header: the white PEA ENCOM International logo, dropdown links (เกี่ยวกับเรา, บริการของเรา, รายงานประจำปี, โครงการ, ข่าวสาร, บริษัทที่เกี่ยวข้อง, ติดต่อเรา, ENG), social icons and a white search field with a blue-outlined Search button (a Bootstrap default control). A full-width slider follows: a solar-farm photograph with a pale numbered card ("2 ธุรกิจพลังงานแสงอาทิตย์" with a solar-panel line icon) and arrows at both sides. Further down (by the page text) are the project highlights in green headlines, solar-monitoring statistics (70.54 MW installed in 78 projects, 7.79 MW in development, 188,483.62 tons of CO2 saved, 785,509,528.06 THB total income) and a dark footer with affiliate links to Thai government agencies.

Voice: Thai corporate with English section names; sustainability-led, number-heavy and plain.

## Colors

`canvas` #343a40 is the dominant measured background (6622 weight; a Bootstrap-style dark slate) and `ink` #ffffff the main text on it (2619 characters). `surface-sage` #bdc8be (1690 weight) and `surface-light` #f2f2f2 (797) are the pale panels, with `ink-dark` #212529 as the dark text on them (1167 characters). `primary` #00c96d is the green of the project headline "ไฮไลท์โปรเจค" and of "Fulfill the Green Energy" (505 characters); `green-text` #22b443 (167 characters) is a second green used for link text and the cookie-consent link text. `button-border` #00a65a is the green border of the primary button. `ink-footer` #b9b9b9 is the footer text on the canvas; `ink-grey` #6c757d is a secondary grey (60 characters). `hairline` #00000020 is the 1px divider.

The header uses `nav-bg` #000000a6 (black at about 65 percent alpha) with a `nav-border` #00000099 line; the button fill `button-bg` #000000b3 is black at 70 percent alpha, so on photography it reads as a dark glass panel. `input-text` #495057 and `input-border` #ced4da belong to the search field.

Not brand colours: the Bootstrap blue #007bff outline on the Search button and the green cookie-consent button. The cookie banner measured as a card (#000000b8) is a consent overlay and is not documented as a component.

## Typography

Inter (400, 500, 600, 700) is the Latin face (4774 characters) and Prompt (400, 500, 600, 700) is loaded for Thai; the stack is `Inter, Prompt, sans-serif`. Font Awesome 5 Brands supplies social icons.

Measured scale: `display` 72px / 86.4px at 400 (the "ไฮไลท์โปรเจค" headline); `subheading` 28px / 33.6px at 500 ("Fulfill the Green Energy"); `body` 14.4px / 21.6px at 400 (3459 characters, the dominant size); `button` 24px / 36px at 400; `nav` 20px / 30px at 400 for the measured nav anchors (header text is 14.4px at weight 600); `link` 14.4px / 21.6px at 600; `input` 16px / 24px at 400. Small sizes of 11.52px and 10.8px appear on tiny labels. Weight 400 carries 3902 characters; 500 (678) is for subheads and 600/700 for links and labels.

## Layout

The page is 1280px wide and 5468px tall. The header is 78px tall in the measurement (58px in the capture's first screen). Content follows Bootstrap 4 conventions: a centred container, rows with stacked or side-by-side cards, a full-width carousel and a dark footer 373px tall. Measured paddings: 15px (36 uses), 20px (18), 16px (15), 8px (14) and 11.2px (12). No gap values were recorded.

## Elevation & Depth

The system is flat in the strict sense: the extraction found an empty list of box shadows, so there is no card lift, no focus glow and no drop shadow on buttons. Layering is the only depth cue, and it is done with alpha rather than with offsets.

No box shadows were measured on rendered elements. Depth is produced by translucent black layers (header at #000000a6, buttons at #000000b3) over photography, and by pale cards over the slider photograph.

## Shapes

Measured radii: 4px (9 uses; inputs and small controls), 30px (2) and 3.2px (1). The primary button and navigation have square corners (0px). The slider card and photographs are square-edged.

## Components

**Primary button.** Square, `button-bg` #000000b3 fill, white 24px / 400 text, 6px 48px padding, 52px tall, with a 1px #00a65a green border ("ดูข่าวสารทั้งหมด", "อ่านต่อ").

**Navigation.** `nav-bg` #000000a6 bar, white Prompt/Inter links with dropdown carets, 5px 16px padding on links and thin vertical dividers between groups; language item "ENG".

**Search field.** White fill, #495057 text, #ced4da border, 4px radius, 16px type, 38px tall; paired with an outlined blue Search button (Bootstrap default).

**Link.** White 14.4px / 600, 8px padding, no radius.

**Footer.** Canvas #343a40, text #b9b9b9 at 14.4px, address and phone, affiliate links.

## Design System Architecture

No public design system, brand guideline or press-kit page was found on the page read (https://www.pea-encom.com/). The site is a Bootstrap 4 build: the stylesheet declares --primary #007bff, --dark #343a40 (which is the page canvas), --gray #6c757d, --success #28a745 and the standard breakpoints 576px, 768px, 992px and 1200px. The canvas and several greys therefore coincide with Bootstrap's own palette; the brand-specific values are the greens #00c96d and #00a65a, the translucent blacks and the Inter plus Prompt type pair. Bootstrap's blue and the default success green are framework values and are not used as brand tokens.

## Do's and Don'ts

- Do use #00c96d for headline highlights and #00a65a for button borders on dark translucent panels.
- Do keep body at 14.4px / 21.6px in Inter with Prompt for Thai, and keep the Thai headline at 72px / 86.4px so line breaks stay open.
- Do layer black at 65 to 70 percent alpha over photographs for header and buttons.
- Don't use Bootstrap blue #007bff as a brand colour.
- Don't document the cookie banner, mourning pop-up or its scrim as UI.
- Don't add radii to the primary button; it is square (0px).

## Responsive Behavior

Measured at 390px: the "ไฮไลท์โปรเจค" headline remains 72px / 86.4px (height 173px, wrapping onto more lines), body text keeps 14.4px / 21.6px, and the primary button keeps its 24px / 36px type, 6px 48px padding, 52px height and square corners; the mobile header measures 62px tall. The mobile pass reports 1 header link visible, a visible "Toggle navigation" menu button and a maximum of 1 card column. Other mobile layout details are not measured.

## Iteration Guide

These steps restate the measured rules so a new page can reuse them directly; each number repeats a frontmatter value, and anything unmeasured is left to a fresh extraction.

1. Keep the dark canvas #343a40 with white text, green #00c96d for emphasis.
2. Build buttons as square translucent black panels with a #00a65a border, 52px tall.
3. Pair Inter and Prompt; body 14.4px / 21.6px.
4. Use pale sage #bdc8be and #f2f2f2 panels with #212529 text for content blocks.
5. Run `node web/scripts/verify-designs.mjs --slug=peaencom` after edits.
