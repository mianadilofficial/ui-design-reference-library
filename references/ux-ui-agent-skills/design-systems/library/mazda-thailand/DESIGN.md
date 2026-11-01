---
version: alpha
name: "Mazda Thailand (Mazda Sales (Thailand) Co., Ltd.)"
category: "Thai Brands"
description: "Mazda Thailand home page measured live: black header and hero, white pill buttons 46px tall that turn burgundy #910a2c on hover, navy #253246 statement band, MazdaType TH at 54px uppercase and 20px Thai body."
colors:
  canvas: "#ffffff"
  ink: "#101010"
  primary: "#ffffff"
  on-primary: "#101010"
  surface: "#000000"
  surface-3: "#253246"
  ink-3: "#a0a0a0"
  ink-4: "#cccccc"
  ink-5: "#dedede"
  ink-6: "#910a2c"
  card-bg: "#ffffff80"
typography:
  display:
    fontFamily: "\"MazdaType TH\""
    fontSize: 54px
    fontWeight: 400
    lineHeight: 64.8px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"MazdaType TH\""
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
    textTransform: uppercase
  heading:
    fontFamily: "\"MazdaType TH\""
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px
  body:
    fontFamily: "\"MazdaType TH\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"MazdaType TH\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 10px
  lg: 12px
  xl: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2.5px
  s3: 4px
  s4: 5px
  s5: 7.5px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px
    height: 46px
    borderColor: "{colors.canvas}"
  button-primary-hover:
    backgroundColor: "{colors.ink-6}"
    textColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px
    height: 46px
    borderColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 15px
    borderColor: "{colors.ink-3}"
---

# Mazda Thailand (Mazda Sales (Thailand) Co., Ltd.)

## Overview
mazda.co.th/th is the Thai-language home of Mazda Sales (Thailand) Co., Ltd. (บริษัท มาสด้า เซลส์ (ประเทศไทย) จำกัด), the national sales company. The measured page is 1280px wide and 8127px tall and is a dark, cinematic automotive front page. A black header holds the Mazda emblem in the centre, Thai and English navigation at the left (รุ่นรถ models, WHY MAZDA, เป็นเจ้าของมาสด้า owning a Mazda, ผู้จำหน่าย dealers, MAZDA FAMILY), and utility items at the right (news and activities, more, a language selector showing TH, an accessibility icon, search, and a login link). A full-width hero carousel promotes the all-electric MAZDA6e with a white "ดูเพิ่มเติม" pill and a World Car of the Year award. Next comes "EXPLORE THE RANGE" over a close-up photograph of a red car with filter tabs (All, xEV, Passenger, SUV, Pickup, Roadster, Essential Collection), a white product carousel showing the NEW MAZDA2 ESSENTIAL with a starting price of 529,000 baht and two pill buttons, then a deep navy band headed "ทำไมต้องมาสด้า?" (Why Mazda?), a "สนใจเป็นเจ้าของ เริ่มต้นที่นี่" (interested in owning, start here) block, a light-grey "LIFE WITH MAZDA" editorial grid, a MAZDA FAMILY banner and a dark footer.

The register is premium and quiet: uppercase English display headings, Thai text in a purpose-made Thai cut of the corporate face, pill-shaped buttons and large photography. A red vertical tab of four icons (hands-on test, offers, location, test drive) is fixed on the right edge in the capture. The page also shows chat ("คลิกเพื่อเริ่มแชท") and loading scrims; these were hidden or filtered in the measurement and are not documented as brand UI.

## Colors
Measured colours:
- `canvas` #ffffff is the product-carousel and button surface; `surface` #000000 is the black of the header and hero band (3716 area weight) and `ink` #101010 the near-black text and dark fills (13950 characters weight, 2178 area weight).
- `primary` #ffffff with `on-primary` #101010 reflects the measured primary button: a white pill with near-black label.
- `surface-3` #253246 is the deep navy of the "ทำไมต้องมาสด้า?" band (2032 area weight).
- `ink-6` #910a2c is Mazda's burgundy red, measured as the hover fill of the white pill buttons and on the right-edge tab; it is the only chromatic accent.
- `ink-3` #a0a0a0, `ink-4` #cccccc and `ink-5` #dedede are the grey text and divider tones; #dedede is also a measured large background (1847 area weight, the light-grey editorial section) and #d5ccbf a warm beige (1209).
- `card-bg` #ffffff80 is white at 50 percent opacity for translucent cards.
- Other backgrounds: #10101066, #000000a6, #00000080, #ffffff24, #ffffff4d and #00000033, which are overlays on imagery.
The root properties are framework values only (HeroUI, SweetAlert2 and Swiper variables), not brand colours; the Swiper blue #007aff is a library default.

## Typography
A single Thai-capable family, **MazdaType TH**, covers almost all characters (19648 weight), loaded at 400, 500 and 700 italic. Icon fonts icomoon and swiper-icons are also loaded.
- `display` 54px, weight 400, line height 64.8px, uppercase: "EXPLORE THE RANGE"; `display-mobile` 36px with 43.2px line height.
- `heading` 22px, weight 400, line height 33px: card and slide titles such as "NEW MAZDA2 ESSENTIAL".
- `body` 20px, weight 400, line height 24px: the measured paragraph size.
- `button` 16px, weight 400, line height 24px: pill labels such as "ดูเพิ่มเติม" and "ขอใบเสนอราคา".
Other measured sizes by character weight: 20px (9184), 16px (3639), 18px (2191), 46px (1782), 14px (1110), 22px, 34px, 24px, 60px, 54px, 32px and 92px. The measured weight is mostly 400; the face is light and wide-set, in contrast with the 500 and 700 weights of the US site.

Font substitutes: MazdaType TH is a proprietary corporate typeface and the measured stack lists no fallback family; the page relies on the loaded web font.

## Layout
The header is a black row with a thin horizontal rule beneath it; the hero fills the width. Content sections alternate dark photographic bands, a white product carousel, a navy statement band, a light-grey editorial band and a dark footer. Headings are centred in the statement bands, and the product block is a wide row: model title across the top, then three icon-and-text spec columns (exterior design, engine, safety technology) and a price at the right, with two buttons centred below.

Gaps measured: 10px (most frequent, 371), 15px, 20px, 8px, 25px, 2.5px, 5px, 7.5px, 30px and 55px. Spacing tokens: s1 1px through s10 16px (1, 2.5, 4, 5, 7.5, 8, 10, 12, 15, 16).

## Elevation & Depth
Shadows are rare. Measured: rgba(0, 0, 0, 0.15) 0px 4px 20px 0px, rgba(16, 16, 16, 0.45) 0px 4px 24px 0px, and a hairline rgba(0, 0, 0, 0.05) 0px 1px 0px 0px. Depth is mostly from photographic layering and translucent overlays (#10101066, #000000a6) on images; the product car carries a soft ground shadow in the photograph itself.

## Shapes
The signature shape is the pill. Radii measured: 1000px (106 elements, buttons and chips), 9999px (14), 50% (14, round icon and arrow buttons), 4px (12), 10000px (9), 12px (7, cards), 10px, 2px (the language selector) and 20px. Tokens: `xs` 2px, `sm` 4px, `md` 10px, `lg` 12px, `xl` 20px, `pill` 9999px. Buttons use the pill; cards use `{rounded.lg}`.

## Components
- **button-primary** ("ดูเพิ่มเติม", view more): `{colors.canvas}` fill, `{colors.ink}` label, `{typography.button}`, `{rounded.pill}`, padding 10px, height 46px, border in white. Hover (measured): fill `{colors.ink-6}` (#910a2c), border the same burgundy, label white.
- **button-secondary** ("ขอใบเสนอราคา", request a quote): `{colors.ink}` fill, white label, same pill, padding and height.
- **card**: `{colors.card-bg}` fill, `{colors.ink}` text, radius `{rounded.lg}` (12px), padding 15px, border `{colors.ink-3}`.
- **Filter tabs and language selector**: small text tabs under the range heading and a 2px-radius outlined "TH" select (measured as an outlined button with 5px padding).
- **Right-edge action tab**: burgundy vertical strip of four icons (visible in the capture; no further values measured).

## Design System Architecture
No public design system or brand guideline was found on the page opened (https://www.mazda.co.th/th), and no search was run. The CSS carries 93 root variables from third-party frameworks: HeroUI (for example `--heroui-font-size-small` 0.875rem, `--heroui-line-height-medium` 1.5rem, `--heroui-border-width-large` 3px and `--heroui-box-shadow-small`), SweetAlert2 (`--swal2-*`), Tailwind (`--tw-*`) and Swiper. These are framework defaults rather than brand tokens. The brand layer is the loaded MazdaType TH face, the pill buttons and the black, white and burgundy palette applied through component CSS, with Thai and English headings sharing one family.

## Do's and Don'ts
Do:
- Use pill buttons (`{rounded.pill}`) at 46px height: white with near-black label as the primary, near-black with white label as the secondary.
- Turn buttons burgundy (`{colors.ink-6}`) on hover.
- Alternate black photographic bands, white product areas and the navy `{colors.surface-3}` statement band.
- Set English headings uppercase and keep Thai body text at the measured 20px.

Don't:
- Do not use the Swiper blue, HeroUI or SweetAlert2 variables as brand values.
- Do not document the chat prompt, loading scrims or consent overlays as brand UI.
- Do not use shadows heavily; only a few were measured.
- Do not add bold weights; the measured Thai text is almost entirely weight 400.

## Responsive Behavior
At 390px the extraction measured: h1 36px, weight 400, line height 43.2px; h2 18px with a 27px line height; body text 18px with a 21.6px line height; the primary CTA 16px with a 24px line height, all in MazdaType TH. Layout reflow (carousel, navigation, spec columns) at mobile width was not measured.

## Iteration Guide
1. Start with a black header and hero, then a white product carousel.
2. Use `{typography.display}` for range headings and `{typography.body}` for Thai copy.
3. Add pill buttons: white primary, near-black secondary, burgundy on hover.
4. Use a navy band for brand-story statements.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase3-thai.json --only=mazda-thailand --force --no-motion` after changes, regenerate with `node web/scripts/generate-frontmatter.mjs --slug=mazda-thailand`, and run `node web/scripts/verify-designs.mjs --slug=mazda-thailand`.
