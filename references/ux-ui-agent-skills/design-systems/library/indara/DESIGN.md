---
version: alpha
name: Indara Insurance
category: "Thai Brands"
description: "Indara Insurance (อินทรประกันภัย) Thai homepage: IBM Plex Sans Thai in four file-weights, near-black ink (#111111) with forest green (#257e65) accents and navy (#123663) detail, light #f1f5f8 and #fafafa bands, 12px-radius photo tiles with white captions, soft 1px 5px shadows and a green announcement hero."
colors:
  canvas: "#ffffff"
  ink: "#111111"
  primary: "#257e65"
  surface-2: "#f1f5f8"
  surface-3: "#fafafa"
  ink-3: "#515051"
  ink-4: "#123663"
  ink-6: "#999999"
  hairline: "#0000001a"
typography:
  display:
    fontFamily: IBM_Plex_Sans_Thai-bold, Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 17.6px
  display-mobile:
    fontFamily: IBM_Plex_Sans_Thai-med, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  heading:
    fontFamily: IBM_Plex_Sans_Thai-bold, Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 17.6px
  subheading:
    fontFamily: IBM_Plex_Sans_Thai-bold, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 23.4px
  body:
    fontFamily: IBM_Plex_Sans_Thai-reg, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
  link:
    fontFamily: IBM_Plex_Sans_Thai-med, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 10px
  sm: 12px
  md: 13px
  lg: 15px
  xl: 16px
  2xl: 30px
  3xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    padding: 0px 0px 0px 30px
  card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.primary}"
    padding: 56px 0px 25px
---

# Indara Insurance (อินทรประกันภัย) — Design System Notes

## Overview
Measured URL: https://www.indara.co.th/ (title "อินทรประกันภัย | Indara Insurance"). Indara is a Thai non-life insurer that, per the page text, belongs to Thai Group Holdings (the hero shows the "THAI GROUP HOLDINGS" mark beside the Indara logo) and describes itself as serving Thai people for more than 78 years, with 20 nationwide branches and more than 1,700 affiliated garages. The header places the hotline "02 636 5656" at the left, the green Indara wordmark with a droplet-leaf mark in the center, and, in a second row, a bold Thai navigation: personal insurance, business insurance, investor relations, about us, customer services and agent services, each with a small chevron.

The first screen is a green announcement hero (a carousel with six pagination dots) with white text expressing concern for customers affected by heavy rain and flooding, plus a pale rounded notice box carrying the claims hotline and the message that it is available around the clock. It also shows a floating vertical menu of three small tabs at the right edge (a navy one and two green ones: an "interested?" call, a call-me form and a promotions tab). Below, a small leaf-shaped marker and the heading "ประเภทประกัน" (insurance types) introduces a three-column grid of photographic tiles with rounded corners and bottom-aligned white labels over a dark gradient: accident and health, motor, property, travel, cargo and ship transport, engineering, other, and other business insurance. A pale gray band follows, headed by the leaf marker and "เกี่ยวกับบริษัท" (about the company), a larger "อินทรประกันภัย" title and centered text.

The cookie-consent banner was hidden by the extractor (recorded as `cookie-consent`) and is not documented as brand UI. The floating side tabs are promotional shortcuts and are treated as page chrome, not as brand components.

## Colors
- **Canvas `#ffffff`** (area-weight 2,405). Light fills: **`#f1f5f8`** (`surface-2`, 1,400), **`#fafafa`** (`surface-3`, 888, also the footer) and translucent grays (`#c8c8c81a`, `#a0948c33`) for panels and overlays.
- **Ink `#111111`**: main text (2,123 characters). **`#515051`** (`ink-3`) is secondary text (939) and **`#999999`** (`ink-6`) tertiary (211).
- **Green `#257e65` (`primary`)**: text on 1,020 characters (headings, the leaf labels and the footer links), and a translucent `#257e65cc` overlay. No filled button was detected on the page, so this is the brand accent rather than a button fill.
- **Navy `#123663` (`ink-4`)**: 546 characters, used for the emphasized hotline numerals and the side tab.
- **White `#ffffff`**: captions over photography (378 characters).
- **Hairline `#0000001a`**: a 10% black divider.

## Typography
Four separately named files of **IBM Plex Sans Thai** are loaded as distinct families: `IBM_Plex_Sans_Thai-reg` (400), `-med` (500), `-semibold` (600) and `-bold` (700), plus two icon fonts (`iconfont`, `iconfont2`). By character count the medium file is used most (2,253), then bold (1,426), regular (969) and semibold (602). Helvetica, Arial and sans-serif follow as fallbacks.

The extractor's h1 was the phone number "02 636 5656" in the header (26px bold), which is not a page heading; the role was overridden to the h2 card heading ("ประกันอุบัติเหตุและสุขภาพ", 22px), so `display` carries the h2's measured values.

- `display` and `heading`: bold file, 22px / 17.6px.
- `subheading`: bold file, 18px / 23.4px.
- `body`: regular file, 16px.
- `link`: medium file, 20px / 30px.
- `display-mobile`: medium file, 16px / 24px at 390px.

IBM Plex Sans Thai is an open-source (IBM) family on Google Fonts, so no substitute is needed.

## Layout
Width 1280px, height 7064px, one of the longest pages in this set. Content centers on a roughly 1,200px column: a two-row header, a full-bleed hero, then a three-column tile grid with equal gutters and equal square-ish tiles (the last row has two tiles, left-aligned), followed by alternating white and `#fafafa`/`#f1f5f8` bands. Footer padding is `56px 0px 25px`. The nav link padding is `0px 0px 0px 30px`.

## Elevation & Depth
One restrained shadow is used repeatedly: `rgba(0, 0, 0, 0.1) 0px 1px 5px 0px` (10 uses), a faint 5px blur under cards and the header. A single strong glow, `rgba(0, 0, 0, 0.9) 0px 0px 6px 0px`, appears once; the element it belongs to was not identified. Tile photographs use a dark gradient at the bottom so white labels stay legible.

## Shapes
Radii in use: 12px (13 uses, tiles and cards), 100px (10 uses, pills), `10px 0px` (8 uses, the asymmetrical leaf-shaped marker and label chips), 50% (7, circles), 30px (5), 13px and 15px. Tokens: `xs` 10px, `sm` 12px, `md` 13px, `lg` 15px, `xl` 16px, `2xl` 30px, `3xl` 100px, `pill`. Cards use `sm` (12px).

## Components
- **Photo tile** (card): rounded 12px photograph with a white bold Thai label at the bottom over a dark gradient; no border.
- **nav / nav-link**: white bar, `#111111` bold Thai labels with chevrons for submenus.
- **link**: `#111111`, 20px medium.
- **Section label**: small green leaf icon plus a green bold title.
- **footer**: `#fafafa` background, green `#257e65` text, `56px 0px 25px` padding.
- **Floating tabs**: narrow vertical tabs with small white text at the right edge (page chrome).

## Design System Architecture
No public design-system or brand-guideline link was found on the homepage (the fetched page text lists products, services, content hubs, contact and parent-company links), so no search was run. The asset names (`IBM_Plex_Sans_Thai-reg/-med/-semibold/-bold`) show self-hosted fonts loaded as four separate families rather than a weight axis, and the `iconfont` and `iconfont2` files carry the pictograms. Brand colors are applied by component styles; no custom-property token set was detected in the extraction.

## Do's and Don'ts
- Do pair near-black text with forest-green headings and leaf markers.
- Do present insurance lines as photographic tiles with white bottom labels.
- Do use 12px radius for tiles and cards and a faint 1px 5px shadow.
- Don't use the green as a button fill without measuring it; the measured page has no green button.
- Don't use heavy shadows or saturated blue backgrounds; the navy is a detail color.
- Don't copy the weather-notice hero text or the consent banner into brand UI.

## Responsive Behavior
The mobile measurement at 390px sets the lead heading in the medium file at 16px with a 24px line height. The three-column tile grid and the two-row header at narrow widths were not measured.

## Iteration Guide
1. White canvas, `#111111` text, `#257e65` for headings, labels and links.
2. Photo tiles at 12px radius with white bold labels and a bottom gradient.
3. Alternate sections between `#ffffff`, `#fafafa` and `#f1f5f8`.
4. Use IBM Plex Sans Thai bold for titles and regular for body at 16px.
5. Keep announcements in a full-width green hero with a pale rounded call-out box.

## Content and Voice
Thai copy is warm and community-minded. The hero opens by addressing customers directly with sympathy ("ขอส่งความห่วงใย...") and tells them to look after their health and safety, then gives the claims hotline in a pale call-out. Section copy states the company's heritage plainly ("เคียงคู่คนไทยมากกว่า 78 ปี", serving Thai people for more than 78 years) and its product positioning ("ประกันวินาศภัยครบวงจร", a full-range non-life insurer). Calls to action are descriptive phrases rather than single verbs: "ดูโปรโมชันทั้งหมด" (see all promotions), "ดูบทความทั้งหมด" (see all articles), "ค้นหาศูนย์บริการ และอู่คู่สัญญา" (find service centres and partner garages) and "เรียกร้องสินไหมออนไลน์" (file a claim online). Photography favors real people in everyday and work settings (a doctor, a driver's car, a clerk with a clipboard, a traveler on the phone, a handshake between a builder and a client), rather than stock icons.
