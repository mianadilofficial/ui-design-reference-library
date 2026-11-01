---
version: alpha
name: Advice IT
category: "Thai Brands"
description: "Advice (advice.co.th), a Thai computer and electronics retailer: DBHeaventRounded type at 24px body, brand blue #00569c actions on a #f8f8f8 page, white cards with 16px radius and soft 0.08 shadow, dense banner and product-rail layout."
colors:
  canvas: "#f9fafb"
  page-body: "#f8f8f8"
  page-largest: "#ffffff"
  ink: "#6b7280"
  primary: "#00569c"
  on-primary: "#e7f4fb"
  surface-2: "#f5f7fa"
  ink-3: "#000000"
  ink-4: "#374151"
  ink-6: "#9ca3af"
  hairline: "#e5e7eb"
  link: "#212529"
typography:
  display:
    fontFamily: DBHeaventRounded
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  display-mobile:
    fontFamily: DBHeaventRounded
    fontSize: 19.2px
    fontWeight: 500
    lineHeight: 10px
  subheading:
    fontFamily: DBHeaventRounded
    fontSize: 22px
    fontWeight: 500
    lineHeight: 20px
  body:
    fontFamily: DBHeaventRounded
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  nav:
    fontFamily: DBHeaventRounded
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 16px
  xl: 20px
  2xl: 32px
  3xl: 40px
  4xl: 99px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 3.5px
  s4: 4px
  s5: 5px
  s6: 5.45px
  s7: 6px
  s8: 8px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
    padding: 4px 20px 4px 24px
    height: 35px
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.page-largest}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    padding: 0px 30px
    height: 40px
    boxShadow: rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.link}"
    rounded: "{rounded.lg}"
    padding: 16px 32px 20px
    boxShadow: rgba(0, 0, 0, 0.08) 0px 2px 16px 0px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.none}"
---

# Advice IT (แอดไวซ์)

## Overview
Advice is a Thai retailer of computers and electronics. Its home page at advice.co.th is titled around "ready-to-use assembled computers at prices you'll like, with a quality guarantee" and sells mobile phones, notebooks, PC builds, computer hardware and solar-cell services, plus an "Advice Plus+" member program. The page measured at 1280px is a dense retail storefront: a blue header carrying the logo and a pill search field, a category menu, a stacked hero banner area, promotional tiles, a flash-sale band with a countdown, and product-card rails. The capture shows a promotional popup floating over the banner area; the popup, the cookie banner and the round chat mascot at the page edge are not brand UI and are not documented here as tokens.

The visual voice is loud and promotional: full-bleed illustrated banners in purple, magenta, red and blue, many product photographs on white cards, and prices set in bold. Around this noise the interface chrome is restrained. The page background is `{colors.page-body}` (#f8f8f8) with white (`{colors.page-largest}`, #ffffff) cards, one brand blue (`{colors.primary}`, #00569c) for actions, and gray text. The entire interface is set in a single Thai typeface, DBHeaventRounded, at weights 400, 500 and 600.

## Colors
- **Primary blue** `{colors.primary}` #00569c is the fill of the measured primary button ("เข้าสู่ระบบ", login) and of the search button; its label color is `{colors.on-primary}` #e7f4fb on the login button, and #ffffff on the search button.
- **Canvas** `{colors.canvas}` #f9fafb and the page body `{colors.page-body}` #f8f8f8; the largest painted area is white `{colors.page-largest}` #ffffff, used for cards and panels.
- **Surface tint** `{colors.surface-2}` #f5f7fa appears as the second most used background after white.
- **Ink**: `{colors.ink}` #6b7280 is the most-read text color (9,391 characters measured), then #00569c itself as text (4,123 characters), pure black `{colors.ink-3}` #000000, `{colors.ink-4}` #374151 for darker body copy and `{colors.ink-6}` #9ca3af for muted text. Link text measured as `{colors.link}` #212529.
- **Hairline** `{colors.hairline}` #e5e7eb is the measured border color.
- Measured accent backgrounds that appear in promo badges and chart segments include #cd1201 (red), #48903b, #7ecb70 and #ade5a3 (greens), and #d1a2ef (lavender). They are used for sale tags and the claim-time bar chart, not for interface chrome.
- The measured stylesheet also exposes Bootstrap variables such as `--bs-orange: #fd7e14`; these are framework defaults and are not brand colors.

## Typography
One family: DBHeaventRounded (loaded weights 400, 500, 600; Font Awesome 6 Free is loaded for icons). Thai text in this face is set unusually large for its x-height, so sizes look big on paper but read as normal body text.

- `display` 20px / 400 / line-height 30px: the h1-role element measured by the extractor (the login button label).
- `subheading` 22px / 500 / line-height 20px: section headings such as "ช้อปสินค้า".
- `body` 24px / 400 / line-height 32px: the measured body paragraph (the claim-time statistic "ระยะเวลาเคลมเฉลี่ย (ปลีก) 9 วัน", colored #0d95da).
- `nav` 16px / 400 / line-height 24px: menu links, search placeholder and small controls.
- `display-mobile` 19.2px / 500 / line-height 10px: the heading measured on the 390px mobile pass.

No font substitute is needed for Thai web use if DBHeaventRounded is licensed; the measured font stack contains no fallback list beyond the loaded face.

## Layout
The page is 1280px wide at measurement with a scroll height of 6,861px. Content sits in a centered column with banners spanning most of the width: a large hero banner, a row of rounded service shortcuts, a wide notice banner, a 2x2 grid of promo banners, a brand-logo carousel card beside a claim-statistics card, then product rails of cards in rows of four or five. Measured spacing steps are 2, 3, 3.5, 4, 5, 5.45, 6, 8, 10 and 12px at the small end, which matches the tight, dense product-card grid. Product cards carry a brand logo at top right, a title, a spec line, a struck-through list price, a bold price and a warranty chip.

## Elevation & Depth
Shadows are few. The card shadow measured is `rgba(0, 0, 0, 0.08) 0px 2px 16px 0px`, soft and wide. The text input uses an inset shadow `rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset`. Other measured shadows are a small two-layer shadow (`rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px`) and a heavy `rgba(0, 0, 0, 0.35) 0px 5px 15px 0px`; the heavy one belongs to the floating popup layer. Depth otherwise comes from white cards on the off-white page.

## Shapes
Radii measured by frequency: 16px (247 elements, `{rounded.lg}`), 8px (109, `{rounded.sm}`), 120px pill ends (64), 20px (48, `{rounded.xl}`), 999px (15), 10px (14, `{rounded.md}`), plus 32px, 40px, 4px and 99px in single digits. Cards and banners use 16px; small tags use 8px; the search field and chips use fully rounded ends. The measured login button has a 0px radius (`{rounded.none}`).

## Components
- **button-primary**: background `{colors.primary}`, text `{colors.on-primary}`, `{typography.display}`, radius `{rounded.none}`, height 40px.
- **button-secondary** (search): background `{colors.primary}`, text `{colors.page-largest}`, `{typography.nav}`, padding 4px 20px 4px 24px, height 35px; measured with a 100px radius in the extraction.
- **text-input**: white background, `{colors.link}` text, `{typography.nav}`, padding 0px 30px, height 40px, inset shadow above.
- **card**: white background, radius 16px, padding 16px 32px 20px, shadow above.
- **nav-link** and **link**: `{colors.link}` #212529 text at `{typography.nav}`, radius 0px.
- **footer** and **nav**: white-text tokens measured on dark or blue surfaces.
Hover states: none recorded (the hover list is empty).

## Design System Architecture
No public design system or brand-guideline page was found: the home page content shows no link to one. The de-facto system is visible in shipped CSS: the root variables include Bootstrap 5 tokens (`--bs-*`), Vue-based component variables (`--vc-*`, `--dp-*` for a date picker), SweetAlert2 (`--swal2-*`) and Toastify (`--toastify-*`). The site is therefore assembled from Bootstrap utilities and third-party widgets with a custom blue and the DBHeaventRounded face layered on top, and Tailwind-style gray values (#6b7280, #374151, #9ca3af, #e5e7eb) in the text and border palette.

## Do's and Don'ts
- Do use #00569c for the primary actions and keep the label light (#e7f4fb or #ffffff).
- Do set Thai text in DBHeaventRounded at the measured sizes; body copy is 24px, not 16px.
- Do keep cards white with a 16px radius and the 0.08 alpha shadow.
- Do give products a struck-through list price beside a bold sale price, as the cards show.
- Don't use Bootstrap defaults (#0d6efd, #fd7e14) as brand colors.
- Don't copy the popup, cookie banner or chat mascot into the system.
- Don't add heavy shadows to ordinary cards; the 0.35 alpha shadow belongs to the popup layer only.

## Responsive Behavior
Measured: the mobile pass at 390px recorded the heading style as 19.2px, weight 500, in DBHeaventRounded (`display-mobile`). The desktop page was measured at 1280px. Mobile layout, breakpoints, navigation collapse and grid column counts were not measured.

## Iteration Guide
1. Start from the tokens: primary #00569c, page #f8f8f8, cards #ffffff, ink #6b7280.
2. Keep the typeface single-family; vary only weight (400, 500, 600) and size.
3. Build promotions as full-width illustrated banners with 16px corners; keep chrome neutral.
4. Test Thai line height: body 24px needs 32px leading, small copy 16px needs 24px.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=advice --force --no-motion` after any site redesign, and rerun the gate with `node web/scripts/verify-designs.mjs --slug=advice`.
