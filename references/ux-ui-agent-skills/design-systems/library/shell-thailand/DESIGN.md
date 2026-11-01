---
version: alpha
name: Shell Thailand
category: "Thai Brands"
description: "Shell Thailand customer site (shell.co.th/th_th/customer.html): white canvas #ffffff, grey #f5f5f5 cards, ink #4a4a4a, Shell yellow #ffc800 buttons that invert to ink on hover, custom-font headings over Arial, 6px and 8px button radii and 16px link tiles."
colors:
  canvas: "#ffffff"
  ink: "#4a4a4a"
  primary: "#ffc800"
  on-primary: "#4a4a4a"
  surface-card: "#f5f5f5"
typography:
  display:
    fontFamily: custom-font, Arial, Roboto, Helvetica, sans-serif
    fontSize: 32.2px
    fontWeight: 700
    lineHeight: 48.3px
  subheading:
    fontFamily: custom-font, Arial, Roboto, Helvetica, sans-serif
    fontSize: 23px
    fontWeight: 700
    lineHeight: 34.5px
  body:
    fontFamily: Arial, Roboto, Helvetica, sans-serif
    fontSize: 16.1px
    fontWeight: 400
    lineHeight: 24.15px
  button:
    fontFamily: Arial, Roboto, Helvetica, sans-serif
    fontSize: 16.1px
    fontWeight: 700
    lineHeight: 24.15px
  nav:
    fontFamily: Arial, Roboto, Helvetica, sans-serif
    fontSize: 13.8px
    fontWeight: 400
    lineHeight: 20.7px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 20px
  s5: 24px
  s6: 36px
  s7: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
    height: 32px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 48px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xl}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The measured page is Shell Thailand's customer section (shell.co.th, final URL /th_th/customer.html, title "ลูกค้าทั่วไป | เชลล์ ประเทศไทย"). The site is Shell's Thai-language consumer hub: a utility row with audience switches (general customers, business customers, about us) and a yellow "Shell GO+" account button, a main row with the pecten logo and mega-menu labels (Shell GO+, services at the station, Shell fuels and lubricants, Shell Recharge for EVs, Shell Plus package and benefits), icon buttons (fuel-price pump, station, help, search), a breadcrumb, a hero tile, then rounded grey cards for products ("น้ำมันเชื้อเพลิงเชลล์", "น้ำมันหล่อลื่นเชลล์", "สถานีชาร์จพลังงานไฟฟ้าสมรรถนะสูง", Helix Oil Change+, Shell Select, Shell Café), a food-and-drink banner with a yellow "ค้นหาสถานีบริการเชลล์ใกล้คุณ" button, and a section "ผลิตภัณฑ์และบริการสำหรับทุกการเดินทาง".

At capture time the hero was a 13 October memorial tile (a portrait of the late king with a dark translucent text card) and a cookie-consent panel covered the lower hero. Both are time-limited overlays: the extractor still reported the tribute heading as the h1, so this document overrides the h1 role with the page's true section heading (h2, 32.2px). Neither the tribute card (`#00000099` fill) nor the cookie panel is documented as brand UI.

Measured colors: `{colors.canvas}` #ffffff, `{colors.ink}` #4a4a4a, `{colors.primary}` #ffc800 (Shell yellow) and `{colors.surface-card}` #f5f5f5. The tone is clean, retail-friendly and action-led: short Thai labels such as "อ่านเพิ่มเติม" with a right arrow on each card.

Imagery and art direction in the capture: product cards use bright, full-bleed photography (a pump attendant with hands in a wai greeting, an oil bottle being poured into an engine, a station canopy with sports cars, an EV charger with a customer, a latte being poured) cropped to a wide rectangle at the top of each grey card. The food banner splits into a left photograph and a right text panel with a short headline, two lines of grey copy and a yellow button. Shell's red and yellow pecten appears only in photographs and the logo, while the interface itself stays white, grey and yellow. Text is Thai throughout with generous line-height (24.15px for 16.1px body), and links end with a right-pointing arrow glyph. Section titles are centered, while card content is left-aligned with the "อ่านเพิ่มเติม" link pushed to the right edge.

## Colors

- **`{colors.canvas}` #ffffff:** the page ground (area weight 9,364).
- **`{colors.surface-card}` #f5f5f5:** card and banner ground (2,839); the site's `--color-paper2` is hsl 0, 0%, 96%.
- **`{colors.ink}` #4a4a4a:** nearly all text (1,686 characters); `--color-ink1` is hsl 0, 0%, 29%. White text (240 characters) is used on photos and dark tiles.
- **`{colors.primary}` #ffc800:** the single action color for buttons, with `{colors.on-primary}` #4a4a4a text. The site publishes it as `--color-brand1-bg`, hsl 47, 100%, 50%.
- Other brand colors in the site's root variables, given verbatim as HSL: `--color-brand2-bg` 359, 77%, 49% (Shell red), `--color-brand3-bg` 212, 49%, 39%, `--color-brand4-bg` 159, 100%, 26%, `--color-brand5-bg` 306, 61%, 33%, `--color-system-bg` 210, 78%, 16%. They were not measured on rendered elements on this page, so they are cited but not promoted to tokens.
- The `#00000099` background (824 weight) belongs to the tribute card overlay and is excluded.

## Typography

Two stacks: "custom-font" (a bold display face loaded at 700) for headings, counted on 522 characters, and Arial with Roboto, Helvetica and sans-serif fallbacks for reading text (1,404 characters). The site's variables name them `--font-custom` and `--font-default`.

- **Display `{typography.display}`:** custom-font, 32.2px, weight 700, line-height 48.3px; measured on the h2 "ผลิตภัณฑ์และบริการสําหรับทุกการเดินทาง". (The tribute h1 measured 36.8px/55.2px; overridden.) The mobile pass measured the same h2 at 32.2px with line-height 48.3px.
- **Subheading `{typography.subheading}`:** custom-font 23px, weight 700, line-height 34.5px (card titles; 475 characters).
- **Body `{typography.body}`:** Arial stack 16.1px, weight 400, line-height 24.15px, with letter-spacing -0.4025px on 179 characters.
- **Button `{typography.button}`:** 16.1px, weight 700, line-height 24.15px.
- **Nav `{typography.nav}`:** 13.8px, weight 400, line-height 20.7px.
- Weights: 400 (1,175 characters), 700 (751).

## Layout

The desktop page is 1280px wide and 3,311px tall; the root variable `--page-width` is 1300px. Cards are laid out three across with an 20px gap (nine occurrences), the banner is a split image and text card, and the product grid repeats rounded grey cards with a photo on top, a bold title and a right-aligned "อ่านเพิ่มเติม →" link. Padding most used: 24px (53), 8px (27), 4px (25), 12px (7), 48px and 36px. Gaps: 20px, 8px and 4px.

## Elevation & Depth

One layered shadow was measured, on one element: `rgba(255, 255, 255, 0.2) 0px 0px 2px 0px inset, rgba(0, 0, 0, 0.2) 0px 2px 16px 0px`. Otherwise the cards are flat grey tiles on white with no shadow tokens; depth comes from photography and the translucent overlay on the hero.

## Shapes

Radii measured: 16px (23 elements, the cards and link tiles), 4px (12), 6px (2, the Shell GO+ button), 8px (2, the station-finder button) and 12px (1). Tokens: `xs` 4px, `sm` 6px, `md` 8px, `lg` 12px, `xl` 16px. The 32px-high header button uses `{rounded.sm}`; the 48px banner button uses `{rounded.md}`; the link tile uses `{rounded.xl}`.

## Components

- **Primary button (`button-primary`):** yellow `{colors.primary}` fill, `{colors.ink}` text, 16.1px bold, radius 6px, padding 0px 12px, height 32px, border 1px solid #ffc800; label "Shell GO+". Hover (measured): fill becomes `{colors.ink}` and text `{colors.primary}` (`button-primary-hover`).
- **Secondary button (`button-secondary`):** same colors, radius 8px, height 48px, padding 0px 12px; labels "ค้นหาสถานีบริการเชลล์ใกล้คุณ" and "ทำแบบสำรวจที่ใช้เวลา 2 นาที"; the same invert-on-hover was measured.
- **Link tile (`link`):** `{colors.surface-card}` fill, `{colors.ink}` text in the 23px subheading style, 16px radius.
- **Nav / nav-link:** `{colors.ink}` text at 13.8px; menu items carry dropdown chevrons.
- **Footer:** `{colors.ink}` text; further values were not recorded.

## Design System Architecture

No public design system or brand guideline was found, and none was searched for. The root variables expose a themed token system: `--color-ink1`, `--color-ink2`, `--color-paper1`, `--color-paper2`, five brand pairs (`--color-brand1-bg` to `--color-brand5-bg` with matching `-text` variables that reference `--color-ink1` or `--color-paper1`), `--color-black-bg`, `--color-system-bg`, `--font-scale` 1, `--font-default`, `--font-custom`, `--page-width` 1300px and radius scale variables (`--radius-tl-scale` and siblings, all 1). Colors are stored as bare HSL triplets.

## Do's and Don'ts

- Do use `{colors.primary}` yellow with dark `{colors.ink}` text for actions, and invert on hover.
- Do keep cards as flat `{colors.surface-card}` tiles with a 16px radius.
- Do set card titles in the bold custom-font and descriptions in Arial.
- Don't document the memorial tile, the consent panel or the translucent dark card as brand components.
- Don't use white text on the yellow button.
- Don't add shadows to ordinary cards.

## Responsive Behavior

Measured at 390px: the h1 (tribute heading) is 36.8px with line-height 55.2px, 303px wide, and the section h2 is 32.2px with line-height 48.3px. Menu collapse, card stacking and spacing are not measured.

## Iteration Guide

This guide only reuses values recorded above, so each step can be checked against the extraction.

1. Start with `{colors.canvas}`, `{colors.ink}` and Arial 16.1px.
2. Put products on `{colors.surface-card}` tiles with a bold custom-font title.
3. Add one yellow button per block and keep the invert-on-hover.
4. Keep the small utility row, logo row and breadcrumb as three separate light rows above the hero.
5. Run `node web/scripts/verify-designs.mjs --slug=shell-thailand`.
