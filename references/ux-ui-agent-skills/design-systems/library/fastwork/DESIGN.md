---
version: alpha
name: Fastwork
category: "Thai Brands"
description: "Thai freelancer marketplace at fastwork.co: Fastwork and Noto Sans Thai type, #1d6ce2 buttons with 3px radius, deep blue #08439b headings, white 8px-radius cards with a blue layered shadow, a pill search field with Ask AI, soft blue gradient canvas #fafcfe."
colors:
  canvas: "#fafcfe"
  page-largest: "#ffffff"
  ink: "#2b313b"
  primary: "#1d6ce2"
  on-primary: "#fffffff2"
  hairline-grey: "#d6dae1"
  surface-blue: "#e3edfd"
  ink-muted: "#728197"
  ink-60: "#2b323b99"
  ink-95: "#2b323bf2"
  navy: "#08439b"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  heading:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", -apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 72px
    letterSpacing: 2px
  subheading:
    fontFamily: "-apple-system, system-ui, blinkmacsystemfont, \"Segoe UI\", roboto, \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 17.5px
  body:
    fontFamily: "-apple-system, system-ui, blinkmacsystemfont, \"Segoe UI\", roboto, \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.1px
  button:
    fontFamily: Fastwork, "Noto Sans Thai", "Noto Sans", -apple-system, system-ui, blinkmacsystemfont, "Segoe UI", roboto, "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  link:
    fontFamily: Fastwork, "Noto Sans Thai", "Noto Sans", -apple-system, system-ui, blinkmacsystemfont, "Segoe UI", roboto, "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  input:
    fontFamily: "\"Google Sans\", -apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 8px
  2xl: 16px
  3xl: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28.8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 24px
    height: 46px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    padding: 12px 0px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    height: 24px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    boxShadow: rgba(19, 55, 109, 0.08) 0px 10px 40px -4px, rgba(19, 55, 109, 0.1) 0px 8px 22px -6px
  footer:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.on-primary}"
---

## Overview
The measured page is https://fastwork.co/ (title "Fastwork.co แหล่งรวมฟรีแลนซ์คุณภาพอันดับ 1 ที่ธุรกิจทั่วไทยเลือกใช้", lang th), the Thai freelancer marketplace Fastwork (ฟาสต์เวิร์ค). The extractor hid the site header, a cookie bar and three scrim modals (a buyer-onboarding modal, an ads-banner modal and a consent modal), so the capture shows the page body only. The page opens with a very light blue-white wash and a centred typing-animation prompt ("หาผู้ช่วย.." followed by a rotating word and a text cursor), a rounded search field with a magnifier and an "Ask AI" toggle with a small white mascot bird perched on it, then a white rounded panel with a horizontal row of category icons (งานยอดนิยม, ผู้เชี่ยวชาญ AI, โฆษณาการตลาด, ออกแบบและกราฟิก, ทำแอปเว็บไซต์, ไลฟ์สไตล์, ภาพ เสียงและโปรดักชัน, ทนาย บัญชีและที่ปรึกษา) above two rows of photographic tiles with white captions, a promotional banner strip, a three-column value block under a dark-blue heading "เรามีฟรีแลนซ์ครบทุกบริการ ตอบโจทย์ทั้งงานธุรกิจ และไลฟ์สไตล์", a four-step "เริ่มจ้างงานฟรีแลนซ์ง่ายๆ กับ fastwork" list, and a large coupon carousel with a safety-themed promo tile. Copy is friendly Thai with English product names (Freelancer, Fastwork Guarantee, Ask AI), and illustration is a soft line-icon set plus real photography. The page is 8692px tall.

## Colors
The generated canvas is #fafcfe, while the largest background measured is #ffffff (area weight 5228) and light blue washes #e3edfd (590) and #f6f7f8 (370) tint panels. Primary is #1d6ce2, the fill of the "เลือกดูบริการ" (browse services) button and the text color of "ดูเพิ่มเติม" links (hover measured to rgb(23,84,176)). Headings and the footer use a deep blue #08439b (563 area; 527 characters of text). Body ink is #2b313b (5270 characters), with secondary text #728197 (1605), a translucent #2b323b99 (1451) and #2b323bf2 (551); label text on blue is #fffffff2 (608). Hairlines are #d6dae1 (also used as a surface with weight 1051) and #f6f7f8. The CSS declares many design tokens such as --color-neutral-600 hsl(216 15% 52%), --color-info-50 hsl(197 80% 97.5%) and an `--xz-color-*` oklch family; swal2 and toastify variables (e.g. --toastify-color-warning #f1c40f) come from third-party libraries and are not brand colors. The mobile pass measured the category tile label scrim at #00000080 (a caption overlay on photography), which is excluded as a token.

## Typography
Fastwork loads a proprietary face named `Fastwork` (400, 500, 600, 700) for buttons and links, with "Noto Sans Thai" (400, 600) and "Noto Sans" as Thai-capable fallbacks, Google Sans (400, 700) in the search field and Font Awesome 6 Pro icons. Body copy uses the system sans stack (-apple-system, system-ui, blinkmacsystemfont, Segoe UI, Roboto, Helvetica Neue). Sizes by character weight: 14px (6253), 16px (1577), 12px (1432), 10px (632), 36px (550), 20px (336). Weights: 400 (6114), 700 (3486), 600 (1225). Tokens: display 24px / 36px weight 400 (the "หาผู้ช่วย.." line); heading 48px / 72px weight 700 with 2px letter-spacing (the rotating keyword); subheading 14px bold; body 14px / 23.1px; button 16px / 16px weight 500; link 16px / 18.4px; input 16px / 24px in Google Sans. Mobile display is 20px / 30px weight 400. Font substitutes: since `Fastwork` is proprietary, Noto Sans Thai is the site's own measured fallback.

## Layout
Page width 1280px, content column about 912px wide inside generous side margins (the category panel and banner span roughly 912px in the capture; measured card widths are 384px each). The hero is centred, the category panel is a single white rounded container with a horizontal scroller and next-arrow, and the value and steps blocks use three-column and two-column grids. Measured paddings: 8px (129), 10px (64), 24px (54), 4px (40), 16px (33), 12px (16). Section titles are large dark-blue Thai headings left-aligned with an eyebrow line in smaller ink text.

## Elevation & Depth
Cards use a bluish layered shadow `0px 10px 40px -4px rgba(19,55,109,0.08), 0px 8px 22px -6px rgba(19,55,109,0.1)`. Other measured shadows: `rgba(24,85,184,0.25) 0px 0px 24px 0px` and `rgba(24,85,184,0.1) 0px 0px 24px 0px` (brand-blue glows around focused or highlighted elements) and a grey stacked shadow (rgba(128,128,128,0.075), 8px 8px and 16px 16px). The page background is a soft blue gradient at the top fading into near-white.

## Shapes
Radii by weight: 8px (53, cards and tiles), 50% (39, round icon holders and avatars), 999px (18, pills such as the search field), 4px (15), 8px top-only (12) and bottom-only (12) for split cards. The primary button radius is 3px. Tokens: xs 3px, sm 4px, md 5px, lg 6px, xl 8px, 2xl 16px, 3xl 32px, pill 9999px.

## Components
Button-primary: #1d6ce2 fill, #fffffff2 label, Fastwork 16px weight 500, 3px radius, padding 8px 24px, 46px high, 154px wide ("เลือกดูบริการ"). Link: #1d6ce2 at 16px with a trailing arrow ("ดูเพิ่มเติม →"), padding 12px 0. Text input: the rounded pill search field with 16px Google Sans text, 24px line, a magnifier icon, and an "Ask AI" toggle. Card: white, 8px radius, 384px by 621px in the measured service cards (Freelancer and expert tiles) with the layered blue shadow. Category tile: photograph with a dark caption scrim and white 16px weight 600 label (documented as imagery treatment, not a token). Footer: #08439b with light text.

## Design System Architecture
No public design system or brand guideline was found; the home page was measured only through the extractor. The site's CSS exposes an in-house token system: names like --xz-color-overlay-900, --xz-font-size-1400 (3.5rem), --xz-color-danger-line-200, --color-neutral-600, --color-info-50 and --table-head-font-weight 600, mixing oklch and hsl notation, plus library variables (swal2, toastify). The `--xz-*` variables are present in the shipped CSS; no public documentation for them was found. Utility class names in the modals (`_pdh-12px`, `tb-modal`) show an atomic-CSS naming convention.

## Do's and Don'ts
Do use #1d6ce2 for actions and links and #08439b for section headings. Do set cards on white with a soft blue layered shadow and 8px radius. Do pair friendly Thai headings with photographic tiles carrying white labels. Do keep the mascot as a small accent around the search. Don't document the cookie bar, onboarding modal, ads modal or caption scrims as brand UI. Don't use toastify or swal2 default colors. Don't use pure black for text; the measured ink is #2b313b.

## Responsive Behavior
The 390px mobile pass measured display 20px / 30px weight 400 in #50555e, body 14px / 23.1px in #2b313b, and a category tile label 281px wide by 80px high at 16px weight 600 on a #00000080 caption. Column counts, menu changes and other layout shifts were not measured.

## Iteration Guide
1. Canvas #fafcfe with white panels, ink #2b313b, primary #1d6ce2, headings #08439b. 2. Fastwork/Noto Sans Thai at 14px body, 16px buttons, 24px lead and 48px bold rotating keyword. 3. White cards at 8px radius with the 0.08 and 0.1 blue-tinted shadow pair. 4. Pill search field with an Ask AI toggle. 5. Hide cookie bars and modals when measuring. 6. Focus states of the search field, mobile layout and dark mode were not measured.

## Notes on Measurement Scope
The values come from one desktop pass at 1280px and one mobile pass at 390px of the home page after hiding overlays. The nameTh given in the queue is ฟาสต์เวิร์ค. Interior pages (service listings, checkout, freelancer profiles) and the hidden header were not measured, so navigation typography is not documented. The extractor detected a single primary button and one input; no other buttons were measured.
