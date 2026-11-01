---
version: alpha
name: Thairath (ไทยรัฐออนไลน์)
category: "Thai Brands"
description: "Thairath Online (thairath.co.th): white canvas, green #00b400 actions with a 20px-radius follow button and pill tabs, Kondolar Thai and KaLaTeXa Display type at 14-16px with 0.2px spacing, #505050 body, #f1f2f3 panels and timestamped headline cards."
colors:
  canvas: "#ffffff"
  ink: "#505050"
  primary: "#00b400"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-gray: "#f1f2f3"
  ink-muted: "#aaaaaa"
  ink-footer: "#292929"
  green-bright: "#01cc21"
  link: "#01b400"
typography:
  display:
    fontFamily: "\"Kondolar Thai\""
    fontSize: 57.6px
    fontWeight: 700
    lineHeight: 86.4px
    letterSpacing: 0.2px
  display-mobile:
    fontFamily: "\"KaLaTeXa Display\""
    fontSize: 28px
    fontWeight: 700
    lineHeight: 33.6px
    letterSpacing: 0.2px
  subheading:
    fontFamily: "\"Kondolar Thai\""
    fontSize: 14px
    fontWeight: 400
    letterSpacing: 0.2px
  body:
    fontFamily: "\"KaLaTeXa Display\""
    fontSize: 15px
    fontWeight: 400
    letterSpacing: 0.2px
  button:
    fontFamily: "\"KaLaTeXa Display\""
    fontSize: 16px
    fontWeight: 650
    lineHeight: 16px
    letterSpacing: 0.2px
  nav:
    fontFamily: "\"KaLaTeXa Display\""
    fontSize: 16px
    fontWeight: 400
    letterSpacing: 0.2px
rounded:
  xs: 3px
  sm: 4px
  md: 7px
  lg: 8px
  xl: 10px
  2xl: 12px
  3xl: 17px
  4xl: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 13px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 4px 0px
    height: 28px
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xl}"
  footer:
    textColor: "{colors.ink-footer}"
---

# Thairath (ไทยรัฐออนไลน์)

## Overview
The measured site is thairath.co.th/home, the home page of Thairath Online, the website of the Thai newspaper and media group Thairath (the page title reads "ไทยรัฐ สำนักข่าวอันดับ 1 ของไทย | ไทยรัฐออนไลน์"). The language is Thai. It is a dense, high-traffic news portal: a white header with a green hamburger icon at the left, the green italic Thairath logo in the middle, and a green "สมัครบริการ" pill with account and search icons at the right. Under it is a single-line category bar (ข่าว, วิดีโอ, หนังสือพิมพ์, ไทยรัฐทีวี, ไลฟ์สไตล์, กีฬา, บันเทิง, ดวง, หวย, นิยาย, ช็อปปิ้ง, MONEY, MIRROR, THAIRATH +, LIVE with a red dot).

At capture time, the first screen was dominated by a full-width black and gold tribute module (a royal funeral report with a featured photo on the left and a "รายงานความคืบหน้า" timeline list on the right), followed by a black carousel and a flood-report module with a similar two-column structure. These are editorial modules of the day, not a global overlay or grayscale filter, and they are not documented as brand tokens. A cookie notice and a promotional subscription banner ("39 บาทต่อเดือน", with a "สมัครเลยคลิก!" pink button) also sit over the capture; they are popups and ad units and are excluded from the system described here. Below the modules, the normal page appears: a pill-shaped tab strip of sections (เรื่องเด่น is the active green tab), one large lead story with a dark gradient and white bold headline, a row of four small stories each with a green category tag and timestamp, and a right-hand rail of advertisements.

A fresh extraction with popups hidden was attempted (see SOURCES.json) but the site answered as a bot wall, so all numbers here are from the earlier extraction of 2026-10-09.

## Colors
Measured text colors by characters: white `#ffffff` (2,758, on the black modules and over photos), gray `#505050` (1,347, the `ink` role), black `#000000` (1,098, headings and nav), `#aaaaaa` (423, timestamps and muted copy), `#292929` (156, footer-level), `#01cc21` (133, a bright green) and `#01b400` (11, link green). Background areas: black `#000000` (33,268; this is inflated by the black editorial modules of the capture day), white `#ffffff` (5,519), light gray `#f1f2f3` (4,025, the page panels and ad rail background), `#d3d3d3`, `#404040`, `#f2f2f2`, `#00b400` (77), `#e3e3e3`, `#ff0000` (6).

The brand color is green: `#00b400` is the fill of the detected call-to-action (the "ติดตาม" follow button) with white text, the active tab color and the hover color of navigation links (the hover table shows the "ข่าว" link going from black to `rgb(0, 180, 0)`). Red appears in shadows (`rgba(227, 25, 31, ...)`, used on a glowing button state) and in the LIVE dot. The extractor also lists blue `#1a73e8`, Bootstrap-style `#28a745`, `#dc3545` and `#007bff` in the stylesheet; those are library defaults and not brand colors.

## Typography
Two house typefaces dominate: Kondolar Thai (4,084 characters) and KaLaTeXa Display (1,794). IBM Plex Sans Thai (21 characters), Graphik-TH-SemiBold (15) and Arial are minor. Loaded fonts: KaLaTeXa Display at 400, 650 and bold; Kondolar Thai regular and bold; IBM Plex Sans Thai bold; Graphik-TH-Semibold 600. Kondolar Thai and KaLaTeXa Display are Thai typefaces I could not confirm as freely licensed; practical substitutes are Prompt or Noto Sans Thai (a suggestion, not a site statement).

Measured roles: display Kondolar Thai 57.6px / 86.4px weight 700, letter-spacing 0.2px; at 390px the display is KaLaTeXa Display 28px / 33.6px weight 700; subheading Kondolar Thai 14px weight 400; body KaLaTeXa Display 15px weight 400; button KaLaTeXa Display 16px / 16px weight 650; navigation 16px weight 400. All of them carry 0.2px letter-spacing. By characters the most used sizes are 14px (2,947), 57.6px (1,200), 12px (914), 16px, 30px, 22px and 18px.

## Layout
The desktop page is 1280px wide and 7,068px tall. The structure is a centered content column with modules stacked vertically: a two-thirds media area plus a one-third list rail (used by the black report modules), then the tab strip, then a lead card, then a four-up card row, with an advertising rail at the right. Measured gaps are 5px (65), 8px (44), 10px (41), 15px, 30px, 7px, 20px; padding values are small and tight, consistent with the dense timestamps-and-headlines style. Timestamps sit in small red-or-gray labels over the thumbnails (for example "09:30 น.").

## Elevation & Depth
Shadows measured: `rgba(0, 0, 0, 0.5) 0px 0px 5px 0px` (5 uses), a red-glow button shadow `rgb(74, 5, 7) 0px 3px 0px 0px, rgba(227, 25, 31, 0.45) 0px 0px 12px 0px`, a stronger version at 5px / 18px blur, `rgba(227, 25, 31, 0.8) 0px 0px 10px 0px`, and an inset `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px inset`. Elevation is otherwise carried by dark gradients under photo headlines.

## Shapes
Radii measured: 40px (35 elements) and 50px (21) for pill tabs and buttons, 3px (17), 100% (12, circles), 8px (12), 10px (7) for cards, 4px, 20px (the follow button), 7px, 999px, 12px and 17px. The green follow button uses 20px; the section tabs are fully rounded pills inside a gray pill track.

## Components
- **button-primary:** `#00b400` fill, white text, KaLaTeXa Display 16px weight 650, radius 20px, padding 4px 0px, height 28px ("ติดตาม").
- **link / nav-link:** green `#01b400`; the measured nav hover changes black text to green.
- **nav:** white background, category labels in black at 16px.
- **card:** black surface `#000000`, white text, 10px radius (the report modules).
- **footer:** text `#292929`.
- **Tab pills:** gray `#f1f2f3`-class track, active tab green with white text.
- **Category tag + timestamp:** small green or red 10-12px labels under story cards.

## Design System Architecture
No public design system, brand guideline or press kit was found on the homepage (its navigation lists news sections, services such as lottery and horoscope, and shopping; none of the links is a brand or design resource). The root variables list is empty, so there are no CSS custom properties; colors, fonts and sizes are applied directly in component CSS, with Thai-specific licensed fonts as the main identity element.

## Do's and Don'ts
- Do use green `#00b400` for actions, active tabs and link hovers.
- Do keep timestamps next to every headline in small `#aaaaaa` or colored labels.
- Do set body at 15px and headlines bold, with 0.2px letter-spacing throughout.
- Do use pill radii (20-50px) on tabs and subscription buttons.
- Don't treat tribute modules, cookie banners or ad overlays as brand UI.
- Don't use framework blues or Bootstrap greens.
- Don't use red as a main color; it is confined to shadows, the LIVE dot and small labels.

## Responsive Behavior
Mobile (390px) was measured for type only: the section title is KaLaTeXa Display 28px / 33.6px weight 700, body 15px, and the follow button keeps 16px weight 650 with `#00b400` fill and 20px radius. Layout changes and menu behavior at other widths are not measured.

## Iteration Guide
1. White canvas, `#505050` body, black headlines, `#f1f2f3` panels.
2. Kondolar Thai / KaLaTeXa Display (or Prompt) with 0.2px letter-spacing; sizes 12 / 14 / 15 / 16 / 28px.
3. Green `#00b400` for CTAs; pill radius 20px for buttons, 40-50px for tabs.
4. Add a timestamp to every card.
5. Keep ad and cookie units out of the component set.
6. Verify with `node web/scripts/verify-designs.mjs --slug=thai-rath`.
