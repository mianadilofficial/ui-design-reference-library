---
version: alpha
name: "Mc Jeans (mcshop)"
category: "Thai Brands"
description: "Mc Jeans online shop (mcshop.com) measured live: white canvas, near-black #181818 ink, yellow #ffc800 promotion strips, red #fc0009 emphasis, Noto Sans Thai at 24px bold titles, 8px inputs and pill selectors."
colors:
  canvas: "#ffffff"
  ink: "#181818"
  primary: "#fc0009"
  surface-2: "#ffc800"
  ink-2: "#dadada"
  ink-3: "#dd4143"
  ink-4: "#50565e"
  text-input-bg: "#f5f5f5"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 34px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
rounded:
  xs: 8px
  sm: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 9.5px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 30px
  s9: 32px
  s10: 48px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display-mobile}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 48px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display-mobile}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 9.5px 0px
    height: 40px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 32px
---

# Mc Jeans (mcshop)

## Overview
The queued address for Mc Jeans resolves to mcshop.com, the brand's online shop, titled "mcshop | ร้านค้าออนไลน์ จำหน่ายเสื้อผ้าแม็คยีนส์ ผู้ชาย ผู้หญิงของแท้" (online store selling genuine Mc Jeans clothing for men and women). The design is therefore documented as measured on mcshop.com. The page is 1280px wide and 5449px tall. A white header carries the yellow-and-black "mcshop" wordmark, bold Thai navigation (สินค้าใหม่ new arrivals, ผู้ชาย men, ผู้หญิง women, MCJ, สินค้าราคาพิเศษ special-price items in red, แม็คคลับ Mc Club, โปรโมชั่น promotions), icon buttons for search, cart and account, and a rounded language selector showing "Thai". A full-width hero carousel follows (an accessories campaign in the capture, with SHOP NOW), then four service tiles on pale grey (Online Exclusive, free returns within 14 days, free delivery nationwide, Mc Club member benefits), then a "ข้อเสนอสุดพิเศษ" (special offers) block with a yellow countdown strip over a 10.10 sale banner, a "โปรโมชั่นพิเศษ" (special promotions) block with a BEST DEAL banner and a SPECIAL COUPON panel.

The identity is a promotional Thai fashion retailer: loud campaign banners, a strong yellow (#ffc800), red for emphasis, black for contrast and plenty of photography of models in denim. The interface itself is clean and white, with one Thai-capable family. Floating LINE and Messenger chat buttons appear at the right edge of the capture; they are third-party widgets and are not documented as brand UI.

## Colors
Measured values:
- `canvas` #ffffff is the dominant background (5310 area weight) and `ink` #181818 the main text colour (1577 characters weight), also the footer and campaign-panel black (471 area weight).
- `surface-2` #ffc800 is the Mc Jeans yellow: the countdown strip and promotional blocks (1727 area weight).
- `primary` #fc0009 is the red used for the "สินค้าราคาพิเศษ" navigation item and emphasis text (36 characters weight); `ink-3` #dd4143 is a softer red text (149 weight).
- `ink-2` #dadada is light grey text on dark (222 weight), `ink-4` #50565e is slate grey text (140), and `text-input-bg` #f5f5f5 is the light grey of inputs and service tiles (189 area weight).
- Other measured backgrounds: #000000, #000080, #5e3209, #f5deb3, #ffefd5, #00ad42 and #0019a8, mostly from banner artwork.
Root variables include a blue brand ramp (`--color-brand-600` as RGB 41 84 255 and others) and Venia gray, red, green and orange values; these come from the storefront framework template and were not measured on visible brand elements, so they are not tokenised as brand colours.

## Typography
A single family, **Noto Sans Thai** (variable weights 100 to 900), sets all interface text (2263 characters weight).
- `display` 24px, weight 700, line height 34px: section titles such as "ข้อเสนอสุดพิเศษ".
- `display-mobile` 16px, weight 400, line height 24px: the mobile h1 measurement, and also the measured size of navigation links and the body paragraph on desktop.
- `input` 14px, weight 700, line height 21px: search and form fields.
Measured sizes by character weight: 16px (1829), 14px (340), 24px (83) and 20px (11). Navigation labels in the header are weight 700 at 16px. Campaign banners use their own artwork lettering (large Latin numerals, "BEST DEAL" and "SPECIAL COUPON" display lettering), which is image content and not part of the type tokens.

Font substitutes: Noto Sans Thai is an open-source font that the site loads itself, with `sans-serif` as the declared fallback.

## Layout
The header is a white row with 48px horizontal padding (`s10`), the logo at left, the navigation centred and the utility icons at right. Below the hero the page uses a centred content column with equal side margins. Service tiles sit in a row of four equal grey rectangles. Promotional banners are wide two-panel compositions (image left, text panel right), stacked with generous vertical gaps and centred bold section titles between them.

Spacing measured: gaps of 4px (81), 16px (28), 8px, 24px, 12px and 32px; tokens s1 1px, s2 4px, s3 8px, s4 9.5px, s5 12px, s6 16px, s7 24px, s8 30px, s9 32px, s10 48px. The footer has 32px padding.

## Elevation & Depth
No box shadows were measured. The page is flat: separation comes from grey tiles, colour panels and photography. The countdown strip and banners are coloured blocks rather than raised cards.

## Shapes
Radii measured: 9999px (43 elements: pills such as the language selector and carousel dot controls), 50px (2), 50% (2) and 8px (1: the text input). Tokens: `xs` 8px, `sm` 50px, `pill` 9999px. Hover on the carousel pagination dots (measured on "1" and "2") changes the dot fill: one goes from white at 50 percent opacity to near-black, another from white to grey (rgb 187, 187, 187).

## Components
- **text-input**: `{colors.text-input-bg}` fill, `{colors.ink}` text, `{typography.input}`, radius `{rounded.xs}` (8px), padding 9.5px 0px, height 40px.
- **nav**: white `{colors.canvas}` bar with `{colors.ink}` text and 0px 48px padding; **nav-link** and **link** use `{typography.display-mobile}` (16px, 400) in `{colors.ink}`.
- **footer**: `{colors.ink}` background with white text and 32px padding; it lists MCSHOP, about us, contact us and location.
- **Language selector**: an outlined pill reading "Thai" with a chevron (visible in the capture).
- **Service tiles**: pale grey tiles with a line icon, a bold line and a lighter line.
- **Campaign buttons** ("SHOP NOW"): part of banner artwork; the extractor detected no primary button, so no `button-primary` token is declared.

## Design System Architecture
No public design system or brand guideline was found, and no search was run; the page opened was https://mcshop.com/. The stylesheet carries 49 root variables from the storefront template: Tailwind (`--tw-*`), Venia (`--venia-global-color-*`, `--venia-global-anim-*` easing curves such as standard cubic-bezier(0.4, 0, 0.2, 1)) and a brand ramp (`--color-brand-100` through `--color-brand-800`) in RGB triplets. The brand ramp is blue, which does not appear in the measured visible UI, so it is a template default rather than the Mc Jeans identity; the measured identity is the yellow, red, black and white above, applied through component CSS and banner artwork.

## Do's and Don'ts
Do:
- Use `{colors.surface-2}` yellow for countdown strips and promotion blocks, and `{colors.primary}` red for sale emphasis.
- Keep the chrome white and text near-black (`{colors.ink}`) in Noto Sans Thai.
- Use pill shapes for selectors and dots, and 8px for fields.
- Show campaign photography full-width with a clear SHOP NOW call.

Don't:
- Do not use the template's blue brand ramp (RGB 41 84 255) as the Mc Jeans colour.
- Do not document the LINE and Messenger floating buttons as brand UI.
- Do not add shadows; none were measured.

## Responsive Behavior
At 390px the extraction measured: h1 and body text at 16px weight 400 with a 24px line height, and navigation at 14px weight 700 with a 21px line height, all in Noto Sans Thai. Layout reflow of the banners and tiles at mobile width was not measured.

## Iteration Guide
1. Start from a white canvas with a bold Thai navigation row and a full-width hero.
2. Add the yellow `{colors.surface-2}` countdown strip above promotional banners.
3. Use `{typography.display}` for section titles and `{typography.display-mobile}` for body and links.
4. Use grey service tiles and 8px input fields.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=mc-jeans --url=https://mcshop.com/ --force --no-motion` after any redesign, then run `node web/scripts/verify-designs.mjs --slug=mc-jeans`.
