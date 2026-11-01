---
version: alpha
name: Thaibulksms
category: "Thai Brands"
description: "Thaibulksms marketing site (thaibulksms.com): white canvas, ink #1d1d1f pill buttons, brand blue #006bff and cyan #00c7ff on sky-blue photographic hero, one custom Thai font at 14/16/32/55px, 20px cards with Tailwind large shadows."
colors:
  canvas: "#ffffff"
  ink: "#1d1d1f"
  primary: "#1d1d1f"
  on-primary: "#ffffff"
  brand-blue: "#006bff"
  navy-deep: "#042c76"
  ink-muted: "#84889a"
  ink-black: "#000000"
  ink-slate-light: "#cbd5e1"
  ink-near-white: "#f8fafc"
  card-bg: "#00c7ff"
typography:
  display:
    fontFamily: __manifestor_0d46a2, __manifestor_Fallback_0d46a2
    fontSize: 55px
    fontWeight: 700
    lineHeight: 40px
  display-mobile:
    fontFamily: __manifestor_0d46a2, __manifestor_Fallback_0d46a2
    fontSize: 45px
    fontWeight: 700
    lineHeight: 58.5px
  heading:
    fontFamily: __manifestor_0d46a2, __manifestor_Fallback_0d46a2
    fontSize: 32px
    fontWeight: 700
    lineHeight: 28px
  subheading:
    fontFamily: __manifestor_0d46a2, __manifestor_Fallback_0d46a2
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: __manifestor_0d46a2, __manifestor_Fallback_0d46a2
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: __manifestor_0d46a2, __manifestor_Fallback_0d46a2
    fontSize: 17.7193px
    fontWeight: 400
    lineHeight: 26.5789px
rounded:
  xs: 8px
  sm: 12px
  md: 15px
  lg: 20px
  xl: 25px
  2xl: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 10.5px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 55px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 0px 48px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    padding: 24px
---

# Thaibulksms (ไทยบัลค์เอสเอ็มเอส)

## Overview
The measured site is thaibulksms.com, the marketing site of Thaibulksms, a Thai business-messaging provider (SMS, email and LINE messaging, with an API for developers). It is a Next.js and Tailwind build (the extracted root variables are `--tw-*` values, a Swiper variable, and a font loaded as `__manifestor_0d46a2`). The extracted language attribute is `en`, but all copy is Thai.

The first screen is a bright sky-blue photographic hero: a young woman and man holding phones, with floating white pill chips labeled SMS, Email and LINE LON, and the headline "แพลตฟอร์มสื่อสารสำหรับธุรกิจ / มาตรฐานสากล / ให้แบรนด์คุณไปได้ไกลกว่าเดิม" in bold black with the middle phrase set white on a blue highlight pill. Two pill buttons sit under it: a filled black "ทดลองใช้ฟรี!" with a mouse-pointer icon and an outlined "ปรึกษาธุรกิจกับเรา" with a phone icon. The header is white with the Thaibulk blue wordmark ("Thaibulk" in blue, "sms" in cyan), a nav of products, pricing, promotions, help center, about us and developers, a login link and a black "ทดลองส่งฟรี" pill.

Under the hero is a frosted workshop banner with a countdown (days, hours, minutes, seconds in light-blue tiles), then white sections: a large heading "การส่งข้อความที่เพิ่มโอกาสทางธุรกิจ" with the key word in blue, overlapping product cards (a deep blue LINE LON card with a white price box "4,500 บาท/เดือน"), a row of award and ISO 27001 badges under the heading "การันตีมาตรฐานสากลด้วยรางวัลพร้อมมาตรฐาน ISO และกสทช.", and a split section with photographs and the heading "ครอบคลุมการสื่อสาร ครบทุกช่องทาง". Floating Messenger and LINE chat buttons sit at the right edge; they are chat controls and are not brand UI.

The voice is confident and benefit-led. Headlines are short Thai sentences, often with one highlighted word in blue; supporting text is gray and small.

## Colors
Measured backgrounds by area: white `#ffffff` (4,831), brand blue `#006bff` (3,003), deep navy `#042c76` (1,080), black `#000000` (932), pale blue `#e4ebf6` (644), cyan `#00c7ff` (485), midnight `#011627` (304, the code-sample panel), `#0f2676`, ink `#1d1d1f` (214), `#0a3ce4`, `#cad9f1`. Text by characters: `#1d1d1f` (1,697, the `ink`), white (835), gray `#84889a` (636, supporting copy), black (293), `#cbd5e1`, `#f8fafc`, `#eeeeee`, brand blue `#006bff` (81) and `#569cd6` (a code-syntax blue in the developer panel).

The detected primary action is the near-black `#1d1d1f` pill with white text, so `primary` equals `ink` here; the brand colors are blue `#006bff` (kept as `brand-blue`) and cyan `#00c7ff` (the `card-bg`), with the logo's two-tone blue and cyan. The CSS corpus also contains a red `#d8012c` (6 uses), which is not tied to a measured component and is not used as a brand token. The Tailwind ring color and Swiper `#007aff` in the root variables are framework defaults.

## Typography
A single custom family, loaded through Next font as `__manifestor_0d46a2` (3,717 characters), at weights 400, 500 and 700; code samples use `ui-monospace` (339 characters). I could not confirm the underlying font's name or license from the measurement (the family is exposed only as an auto-generated loader name), so substitutes such as Prompt or Noto Sans Thai are suggestions.

Measured roles: display 55px / 40px weight 700 (45px / 58.5px at 390px); heading 32px / 28px weight 700; subheading 16px / 24px; body 14px / 20px; button 17.72px / 26.58px weight 400. By characters, the sizes are 16px (1,216), 14px, 18px, 24px, 15px, 28px, 20px, 45px, 17.72px, 55px, 48px, 30px and 35px. Headings are bold (700, 1,613 characters) and body regular (400, 2,280 characters). Display line heights are tighter than the font size, so headline lines almost touch.

## Layout
The page is 1280px wide and 9,732px tall. Sections alternate between full-bleed bands (sky-blue hero, white, navy) and a left-aligned heading with a right-aligned gray description in the same row. Spacing is Tailwind-like: gaps of 20px (43 uses), 8px, 16px, 10px, 14px, 4px, 18px, 50px, and paddings 16px, 20px, 4px, 12px, 24px, 8px, 30px and up to 144px. Cards overlap each other and the section boundary to create depth.

## Elevation & Depth
Only one shadow pair is measured: `rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.1) 0px 8px 10px -6px` (two uses, Tailwind's large shadow, on floating cards). Depth otherwise comes from color: overlapping blue and navy cards, a frosted translucent banner, and white chips on the photo.

## Shapes
Radii: 20px (25 elements, cards), 9999px (19, pill buttons, chips and countdown tiles), 8px (8), 25px (8), 12px (3), 50px, and asymmetric `15px 15px 0px 0px`, `15px 0px 0px` and `0px 0px 15px 15px` for panel tops and bottoms. Buttons are pills; cards are 20px or 25px; icon tiles 8-12px.

## Components
- **button-primary ("ทดลองใช้ฟรี!"):** `#1d1d1f` fill, white text, 17.72px, fully rounded pill (the inner element measures 9999px with padding 12px 24px; its outer wrapper has 0px radius), height 55px.
- **outlined secondary ("ปรึกษาธุรกิจกับเรา"):** transparent with a 1px dark border, same pill shape (seen in the capture).
- **nav:** white bar, text `#1d1d1f`; a login link in blue and a black "ทดลองส่งฟรี" pill, 42px high at 13.72px.
- **card:** `#00c7ff` fill, white text, radius 20px, padding 24px; product cards also use `#006bff` and `#042c76`.
- **Countdown tiles:** pale-blue rounded squares with blue digits.
- **Badges row:** award and ISO logos separated by thin vertical rules.

The page also carries a developer-facing section: the homepage text names an API connection section ("เชื่อมต่อง่าย ๆ ด้วย API") and the measured code-sample colors (a midnight  panel, syntax blue , monospace type) belong to that panel, so the otherwise light, friendly marketing page has one deliberately dark technical block. The homepage also quotes trust figures: more than 3,000 leading brands and a first-place claim among Thai message providers, each presented as a short heading above a logo row.

## Design System Architecture
No public design system or brand guideline was found: the homepage links (products, pricing, promotions, help center, about us, developers) include a developer section for the API but no brand resource. The de-facto system is Tailwind (default ring and shadow variables are present) with Swiper for carousels and a single custom Thai font; brand colors are applied directly.

## Do's and Don'ts
- Do use black pill buttons for primary actions and outlined pills for secondary ones.
- Do highlight a key word in a headline with brand blue `#006bff`.
- Do overlap blue and navy product cards with a Tailwind large shadow.
- Do use photography of smiling people with phones, plus floating white channel chips.
- Don't use the chat widgets or the countdown banner as brand tokens.
- Don't use Tailwind or Swiper default colors.
- Don't set body copy darker than `#84889a` when it is supporting text.

## Responsive Behavior
Mobile (390px) was measured for type only: the h1 is 45px / 58.5px weight 700, the h2 20px, the body 14px / 20px, and the "ทดลองใช้ฟรี!" button keeps its black fill and 16px label. Layout reflow and menu behavior are not measured.

## Iteration Guide
1. White canvas, ink `#1d1d1f`, gray `#84889a`, sky and pale-blue bands.
2. One Thai font at 14 / 16 / 32 / 55px; weight 700 for headings.
3. Black pill buttons; brand blue `#006bff` and cyan `#00c7ff` for highlights and cards.
4. Cards 20px radius with the large soft shadow.
5. Verify with `node web/scripts/verify-designs.mjs --slug=thaibulksms`.
