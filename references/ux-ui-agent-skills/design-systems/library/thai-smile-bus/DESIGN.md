---
version: alpha
name: Thai Smile Group (Thai Smile Bus)
category: "Thai Brands"
description: "Thai Smile Group site (thaismilegroup.com), operator of Thai Smile Bus: full-bleed hero photography, navy #203556 Prompt text on white, charcoal #1b1b1b search band, giant outlined Bebas Neue numerals, 10px fields and soft shadows."
colors:
  canvas: "#ffffff"
  ink: "#203556"
  primary: "#38b900"
  on-primary: "#333333"
  surface-charcoal: "#1b1b1b"
  surface-black: "#000000"
  surface-night: "#1c1d24"
  accent-red: "#d84156"
  ink-dark: "#343842"
typography:
  display:
    fontFamily: Prompt
    fontSize: 28px
    fontWeight: 700
    lineHeight: 90px
    textTransform: uppercase
  display-mobile:
    fontFamily: Prompt
    fontSize: 24px
    fontWeight: 700
    lineHeight: 50px
    textTransform: uppercase
  heading:
    fontFamily: Prompt
    fontSize: 30px
    fontWeight: 400
    lineHeight: 33px
  subheading:
    fontFamily: Prompt
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: Prompt
    fontSize: 12px
    fontWeight: 500
    lineHeight: 20.4px
    textTransform: uppercase
  button:
    fontFamily: Prompt
    fontSize: 17px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 10px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 16px
  s7: 20px
  s8: 22px
  s9: 27px
  s10: 38.39px
components:
  nav:
    textColor: "{colors.surface-black}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  footer:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.canvas}"
---

# Thai Smile Group (Thai Smile Bus)

## Overview
The queued brand is Thai Smile Bus, but the measured URL (thaismilegroup.com) is the site of its group, Thai Smile Group, which presents the Thai Smile Bus services (electric buses and ferries) in Bangkok and the surrounding provinces. Per the task rule for parent or group sites, this DESIGN.md is named after the measured site. The page title text in the extraction is "THAI SMILE GROUP" and the site's page language is `en-US` while all content is Thai.

The homepage is a WordPress build (the extracted root variables include `--wp--preset` values, Font Awesome 6 variables and Swiper variables). The first screen is a full-bleed hero photograph of a navy electric bus with a smiling woman in front of a Bangkok temple skyline, carrying the Thai slogan "เดินทางด้วยรอยยิ้ม ใส่ใจสิ่งแวดล้อม" in large white text, with a transparent top navigation (หน้าแรก is the active item with a white background; เกี่ยวกับเรา, การให้บริการ, การพัฒนาที่ยั่งยืน, ข่าว, ร่วมงานกับเรา, โฆษณา, ติดต่อเรา follow) and six carousel dots. Under the hero is a dark charcoal search band with a city-skyline silhouette, a bus-stop icon and the prompt "ค้นหาเส้นทางและอัตราค่าโดยสาร" beside a white rounded search field. Then the page turns white: a very large bold Thai heading "การให้บริการของ ไทยสมายล์บัส", a lighter subtitle, three columns of plus-bulleted facts, and three giant outlined numerals (124, 3, 100%) with captions. A gray band holds an outlined "THAI SMILE GROUP" display wordmark, and the press news section follows.

At capture time a cookie consent bar (with a blue "Allow" button) and a green floating LINE chat button were on screen. They are consent and chat controls, not brand UI, and are excluded. The extraction was re-run to drop the consent overlay.

## Colors
Measured text colors by characters: navy `#203556` (3,117, headings and body, the `ink` role), white (580), black (112), a coral red `#d84156` (43), `#343842` (18) and `#333333` (15). Backgrounds by area: `#1b1b1b` (1,027, the dark search band), `#000000` (683, footer and dark bands), `#1c1d24` (557), the translucent `#0000006e` scrim over the hero (541), and white as the page canvas.

The extractor's primary-action slot resolved to `#38b900` (green) with `#333333` text. That color is measured only on the floating inquiry button (labeled "สอบถามเพิ่มเติม", 70px high, 50% radius), which is a chat control. No page-level primary button was measured, so the `button-primary` component is not declared here and the green is retained in the `primary` slot only as the one measured accent fill (5 area units). The coral `#d84156` is retained as `accent-red`. The WordPress presets (`#0693e3`, `#9b51e0`) and Bootstrap's `#007bff` in the stylesheet are framework defaults and are not brand colors; the blue `#006ff4` seen before the re-run belonged to the cookie button and is not used.

## Typography
Prompt carries the site (4,074 characters), with Bebas Neue (38 characters) for the outlined display wordmark and Jost 500 loaded for numerals. Loaded: Prompt 400, 500, 600, 700, Bebas Neue 400, Jost 500 and the fontello icon font. Prompt and Bebas Neue are open fonts.

Measured roles: display Prompt 28px / 90px weight 700 uppercase (24px / 50px at 390px); heading 30px / 33px weight 400; subheading 20px / 28px weight 500; body 12px / 20.4px weight 500 uppercase (measured on footer links); button 17px / 21px weight 400. The most-used size by characters is 23px (2,481), then 17px, 14px, 15.3px, 20px and 12px; display sizes appear at 28px, 30px, 55px (letter-spacing 2.6px), 60px, 116px and 136px, the last two being the outlined numerals. Weight 700 is the main weight (2,597 characters).

## Layout
The page is 1280px wide and 4,187px tall. After the full-bleed hero the content uses a left-aligned wide column with a three-column fact grid; the outlined numerals sit in three equal columns with thin gray rules beneath them. Measured gaps are 20px (12 uses). Paddings: 27px (30 uses), 10px, 5px, 3px, 6px, 20px, 15px. The search band is full-bleed dark with its content inset.

The reading rhythm alternates dark and light bands: hero photograph, charcoal search band, white services block, gray outlined-wordmark band, then white news. The sequence repeats a pattern of one oversized heading followed by small-type supporting detail, so scale contrast (the 30px heading beside 14px bullets, and 116px numerals beside 17px captions) is the main hierarchy tool rather than color.

## Elevation & Depth
Shadows measured: `rgba(73, 104, 126, 0.16) 0px 16px 24px 0px` and `rgba(0, 0, 0, 0.15) 0px 1.93465px 7.73859px 0px`. The hero uses a dark translucent scrim `#0000006e` behind its white text rather than a shadow.

## Shapes
Radii: 50% (10 elements, circles including carousel dots and the chat button) and 10px (one element). The token scale also keeps 9999px for pill shapes. Photos and bands are rectangular.

## Components
- **nav:** transparent over the hero; the active item has a white pill-like background (seen in the capture; not separately measured). Nav-link type is the display style, white.
- **Search band:** `#1b1b1b` band, white input with rounded corners and a magnifier icon.
- **Fact list:** plus-bullet lines in navy 14-17px Prompt.
- **Stat numerals:** outlined (stroke-only) digits at 116px and 136px in Jost/Bebas with a navy stroke.
- **footer:** `#000000` with white text at 12px uppercase.
- **Consent bar and chat button:** excluded.

## Design System Architecture
No public design system, brand guideline or press kit was found. The homepage lists services, sustainability, news, careers, advertising and contact pages; the advertising section covers bus and boat ad rental, not brand assets. The de-facto system is a WordPress theme with Font Awesome 6, Swiper (a `--swiper-theme-color` of `#007aff` and navigation size 44px) and Bdt-prefixed widget variables, with brand color set directly in styles.

The copy voice is warm and service-oriented in Thai: slogans about smiles and the environment, plain statements of fleet size and coverage (for example the counts of electric buses and ferries), and a section whose captions tie the vehicles to clean energy. Facts are given as short bullet lines rather than paragraphs, and the three headline figures are each followed by a one-sentence caption, which keeps the page scannable on a first pass.

## Do's and Don'ts
- Do lead with a full-bleed, warm photograph and a one-line Thai slogan in white Prompt.
- Do use navy `#203556` for text on white and white text on charcoal bands.
- Do present key figures as oversized outlined numerals with a short caption and a rule.
- Do use uppercase display text for English wordmarks (Bebas Neue).
- Don't treat the consent bar, its blue Allow button or the floating chat button as brand UI.
- Don't use WordPress preset or Bootstrap blues.
- Don't add heavy borders; separation is by rules, bands and white space.

## Responsive Behavior
Mobile (390px) was measured for type: display 24px / 50px weight 700 uppercase, h2 18px, body 12px / 22.8px. The inquiry button keeps a 17px label and a 50% radius. Menu, column collapse and breakpoints are not measured.

## Iteration Guide
1. White canvas, navy `#203556` text, charcoal `#1b1b1b` and black bands.
2. Prompt for all text; Bebas Neue for outlined uppercase wordmarks.
3. Scale: 12 / 14 / 17 / 20 / 23 / 28 / 30px, with 116px+ for outlined numerals.
4. Use 10px for fields, 50% for dots, soft blue-gray shadows only on floating panels.
5. Add coral `#d84156` sparingly for emphasis.
6. Verify with `node web/scripts/verify-designs.mjs --slug=thai-smile-bus`.
