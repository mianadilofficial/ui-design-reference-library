---
version: alpha
name: Silkspan
category: "Thai Brands"
description: "Thai insurance comparison and financial products site (SILKSPAN Financial Supercenter): blue #0050a0 and #00478e, white and #f9fafc canvas, #222222 text in system-ui with Kanit Medium accents, 6px radii, soft blue-tinted card shadow."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#0050a0"
  on-primary: "#ffffff"
  primary-dark: "#00478e"
  surface-2: "#f9fafc"
  surface-3: "#ebf1f8"
  surface-green: "#eef7ed"
  ink-black: "#000000"
  ink-green: "#006614"
  ink-alert-red: "#ff3300"
  hairline: "#e5e7eb"
  footer-border: "#dee2e6"
typography:
  display:
    fontFamily: system-ui
    fontSize: 30px
    fontWeight: 400
    lineHeight: 36px
  display-mobile:
    fontFamily: system-ui
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  heading:
    fontFamily: KanitMedium
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  subheading:
    fontFamily: system-ui
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: system-ui
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  link:
    fontFamily: KanitMedium
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 6px
  sm: 8px
  md: 16px
  lg: 34px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 30px
  s7: 40px
  s8: 81px
  s9: 120px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    height: 64px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    padding: 24px 16px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 80, 160, 0.16) 0px 0px 10px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    borderColor: "{colors.footer-border}"
---

## Overview

SILKSPAN (https://www.silkspan.com), labelled "SILKSPAN Financial Supercenter" in its logo, is a Thai site for comparing and buying insurance, credit cards and loans. The page title is "ประกันออนไลน์ ซื้อง่าย รวดเร็ว เบี้ยถูก คุ้มครองสูง คุ้มสุดๆ" and the hero reads "เทียบเบี้ยประกันรถยนต์ ในราคาพิเศษที่ SILKSPAN" with the subline "ศูนย์รวมบริการทางการเงินครบวงจร ทั้งประกันรถยนต์ สินเชื่อ บัตรเครดิต". The navigation lists car insurance (class 1, 2+, 3+, 3), other insurance (health, life, critical illness, home, travel), credit cards, loans, articles, problem reporting, garage search, investor relations, contact and about.

The home page is organised around a comparison form. The hero has a pale-blue ground with the headline and a promotional graphic ("20 บริษัทยอดฮิต", "ประกันชั้น 1 เบี้ยเริ่ม 750.- ต่อเดือน", "ผ่อนสบาย 10 เดือน") on the left and a white form card on the right: toggle for electric vehicle, a choice of insurance class (ชั้น 1, 2+, 3+, 3), brand tiles (Toyota, Honda, Nissan, Mazda, Mitsubishi, Isuzu), a brand select and a large orange "เช็คราคา" button. A dark-blue strip "เช็คเบี้ยประกันรถยนต์ กว่า 20 บริษัทชั้นนำ" sits above the navigation. Below the hero are four product cards (car insurance, other insurance, credit cards, loans) with icon, title and link, a brand-story band (26 years of experience, 4,000,000 customers served, 1,600 million baht saved, 500 staff) with large blue serif numerals, a "ทำไมต้องเลือกทำประกันกับ SILKSPAN" benefits row, partner-insurer logos, customer reviews with star ratings, and a numbered "ขั้นตอนการเปรียบเทียบเบี้ยประกันภัย" process.

The voice is helpful and reassuring, with plain claims such as "ประหยัดกว่า 30%" and "ผ่อน 0% ไม่ต้องใช้บัตรเครดิต". The page measured 6,212px tall at 1280px wide.

## Colors

- **Blue `#0050a0`** is the brand color: it is the measured fill of the detected call-to-action buttons ("รายละเอียดประกันรถยนต์ชั้น 2+"), the color of 1,130 characters of heading and link text, and the card-shadow tint (`rgba(0, 80, 160, 0.16)`). White `#ffffff` is the text on it.
- **Darker blue `#00478e`** (72 area weight) is the strip and header fill.
- **Canvas `#ffffff`** (3,811 area weight), `#f9fafc` (2,152), the pale blue `#ebf1f8` (1,365, the hero ground) and `#ecf1f7`; `#eef7ed` (182) is a pale green and `#f5fff3` a paler one; `#f5f8fb`, `#dedede` and `#ced4d9` are light greys.
- **Text:** `#222222` is the body color (7,111 characters), black (593), white (292) on blue, `#006614` (9, green) and `#ff3300` (6, red alert) for small marks. `#ed4040` appears as a tiny fill (1).
- **Borders:** `#e5e7eb` (12), `#f5f8fb`, `#ced4da`, `#dedede`, `#5ab350` (1, green).
- The orange "เช็คราคา" button visible in the capture has no measured background color in the extraction, so it is not recorded as a token.
- The root also carries WordPress preset colors (`--wp--preset--color--vivid-purple: #9b51e0`, `--wp--preset--color--pale-pink: #f78da7`, `--wp--preset--color--vivid-green-cyan: #00d084`, `--wp--preset--color--cyan-bluish-gray: #abb8c3`); these are WordPress defaults and not brand tokens.

## Typography

The measured stack is `system-ui` for most text (7,710 characters) and `KanitMedium` (1,431 characters) for headings and links. No webfonts were reported as loaded, so `system-ui` renders the platform's own UI font and "KanitMedium" is a named family on the site; Thai heading faces and the serif italic seen on large numerals in the capture were not measured as families.

Roles: display 30px / 400 / 36px (24px / 32px at mobile); heading `KanitMedium` 16px / 400 / 24px (blue section titles such as "เทียบราคาประกันภัยรถยนต์ชั้น 1 ทุกบริษัท"); subheading and nav 16px / 24px; body 12px / 400 / 16px; link `KanitMedium` 14px / 20px. By character count 16px dominates (3,995), then 12px (3,418), 14px (922), 18px (252) and 24px (211); weights are 400 (8,955) and 700 (186).

## Layout

The root declares the fixed header geometry: `--height-menu-top: 48px`, `--height-menu-main-desktop: 72px`, `--height-menu-main-mobile: 64px`, with `--mt-top-desktop` equal to the sum of the top bar and the main desktop menu. The page body is a centred container: a hero with a two-column split (promotion left, form card right), a four-column card row, a four-column benefit row, a logo wall and a three-column review carousel. Common paddings are 16px (68 occurrences), 8px (31), 12px, 30px (9) and 40px; gaps are 16px (19), 8px (13), 40px and 24px.

## Elevation & Depth

Shadows are soft: `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px` (5 uses), a blue-tinted card glow `rgba(0, 80, 160, 0.16) 0px 0px 10px 0px` and a subtle `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px`. In the hover pass a product link tile changes from white to `rgb(242, 248, 255)` (`#f2f8ff`) with its border unchanged.

## Shapes

Radii: 6px (38 occurrences, cards, tiles and inputs), 16px (5), 9999px (4, pills), 8px (3) and 34px (1). The detected blue CTA anchors measure 0px with 6px on sibling buttons. The look is a restrained rounded rectangle, with pill chips for toggles.

## Components

- **Blue call-to-action:** `#0050a0` fill, white 16px text, 0px radius on anchors and 6px on buttons, 64px tall for the anchor form.
- **Outlined option button ("ชั้น 2+"):** 2px solid `#dedede` border, black text, 6px radius.
- **Product tile (link):** white fill, black 14px `KanitMedium` text, 6px radius, `12px 16px` padding, 1px `#e5e7eb` border, hover to `#f2f8ff`.
- **Card:** white, blue `#0050a0` title text, 6px radius, `24px 16px` padding, the blue glow shadow.
- **Navigation:** header with white 16px labels on the blue strip, `#222222` 16px nav links.
- **Footer:** white background with a 1px `#dee2e6` border.
- The cookie banner, floating LINE consult widget and back-to-top control are not brand components.

## Design System Architecture

No public design system or brand-guideline page was found; the /brand, /press, /about and /design paths served unrelated pages. The shipped CSS combines WordPress (`--wp--preset--*` variables for colors, font sizes such as `--wp--preset--font-size--large: 36px`, spacing and shadows), Tailwind (`--tw-ring-*` variables and utility classes such as `fixed inset-0 bg-[#00000040]` seen on the scrim) and a few custom layout variables (`--height-menu-top`, `--height-menu-main-desktop`, `--line-select: calc(100% - 1rem)`). Brand decisions come through utility classes rather than named brand variables.

## Do's and Don'ts

Do use `#0050a0` for actions, headings and card shadows with white text on blue. Do use `#ebf1f8` and `#f9fafc` as soft section grounds. Do put the comparison form in a white 6px-radius card with a blue-tinted shadow. Do show reassuring numbers (customers, savings, years) as large blue numerals.

Don't use WordPress preset colors (`#9b51e0`, `#f78da7`, `#00d084`) as brand colors. Don't hide required fields: the form marks mandatory questions with a red asterisk. Don't document the cookie banner or the LINE widget as UI.

## Responsive Behavior

Measured at 390px: h1 24px / 400, h2 16px, body 12px, the option button 14px on `#dedede`, nav 16px. The layout record shows `headerLinksVisible: 3`, `menuToggleVisible: true` (label "mobileMenu") and `maxCardColumns: 2`. The root defines a 64px mobile main-menu height and a mobile menu height of `calc(100vh - 140px)`. Other breakpoints were not measured.

## Iteration Guide

1. Start from the frontmatter tokens; blue `#0050a0` is `primary` and `#00478e` the darker strip.
2. Build the hero as a pale `#ebf1f8` ground with a promotion left and a white comparison card right.
3. Use 6px radii, 1px `#e5e7eb` borders and the blue glow shadow for cards.
4. Set Thai text in `system-ui` 16px with `KanitMedium` for headings and links.
5. Not measured: the orange button's fill, dark mode, tablet layout; check the live site.
