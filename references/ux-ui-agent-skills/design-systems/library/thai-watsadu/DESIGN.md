---
version: alpha
name: Thai Watsadu (ไทวัสดุ)
category: "Thai Brands"
description: "Thai Watsadu online store (thaiwatsadu.com): #f1f1f1 canvas with white bands, brand red #b8292f buttons at 4px radius, custom kittithada Thai type at 21-24px, 6px cards, a Material-style header shadow and a red service band."
colors:
  canvas: "#f1f1f1"
  page-largest: "#ffffff"
  ink: "#000000"
  primary: "#b8292f"
  on-primary: "#ffffff"
  ink-soft: "#000000de"
  hairline: "#e5e7eb"
  text-input-bg: "#ebebeb"
  accent-orange: "#f9a01b"
typography:
  display:
    fontFamily: kittithada75
    fontSize: 36px
    fontWeight: 500
    lineHeight: 24px
  button:
    fontFamily: kittithada
    fontSize: 24px
    fontWeight: 500
    lineHeight: 42px
  nav:
    fontFamily: kittithada
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  link:
    fontFamily: kittithada65
    fontSize: 21px
    fontWeight: 500
    lineHeight: 30px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 9px
  2xl: 14px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.4px
  s3: 3px
  s4: 3.6px
  s5: 6px
  s6: 8px
  s7: 9px
  s8: 12px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 42px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 3px 12px
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.page-largest}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 2px 4px -1px, rgba(0, 0, 0, 0.14) 0px 4px 5px 0px, rgba(0, 0, 0, 0.12) 0px 1px 10px 0px
  nav-link:
    textColor: "{colors.ink-soft}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-soft}"
    typography: "{typography.nav}"
    padding: 0px 12px
    height: 48px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 12px 0px
---

# Thai Watsadu (ไทวัสดุ)

## Overview
The measured site is thaiwatsadu.com, the online store of Thai Watsadu, the Thai home-improvement and building-materials retailer (the logo reads "ไทวัสดุ THAIWATSADU.COM"; the footer credits Thaiwatsadu as a company of the CRC group, with the CRC omni mark shown). The language is Thai. The WebFetch tool was refused by the site (HTTP 403, recorded in SOURCES.json), so pages beyond the extraction and capture were not read.

The capture shows a dense retail home page on a light gray canvas. At the top is a blue banner slot, then a narrow red announcement strip with a branch selector and a language/flag control. The header is white: logo at the left, a wide gray search field with a magnifier, a login link and a cart icon with a red count badge at the right. Under it a navigation row (หมวดหมู่สินค้า, สินค้าตามแบรนด์, ที่ตั้งสาขาไทวัสดุ, แคตตาล็อก, ไทวัสดุ Affiliate, โปรโมชั่นเด็ด) and a red-and-yellow promotional "ลด" badge. Sections follow in order: a promotion carousel (โปรโมชั่นเด็ด), a two-row product-category grid (หมวดหมู่สินค้า), a style-based mosaic with photos such as warehouse, home bakery, car care, coffee shop, laundry shop and camping (เลือกสินค้าตามสไตล์), a brands row (ช้อปตามแบรนด์), video cards (เรื่องราวน่าสนใจ), and "ช่างน่ารู้" article cards with a red "อ่านต่อ" button. A red service band with six icons (Shop Online, Click & Collect, Chat & Shop, Call & Shop 1308, Shop via Facebook, E-Ordering) sits above a white multi-column footer listing group retailers.

Several images in the capture failed to load (alt-text shows in place) and a category mega-menu is open over the carousel; both are capture artifacts. The mega-menu scrim and the cookie bar are not brand UI and are not used here. The re-extraction hid the cookie bar and backdrop (the extractor logged both as hidden consent overlays).

## Colors
Measured backgrounds by area: white `#ffffff` (3,944), page gray `#f1f1f1` (1,692, the canvas), a black scrim `#0000004d` (617, from the open menu backdrop and not a brand color), brand red `#b8292f` (548), `#ededed` (192), the search field `#ebebeb` (60) and `#b8292fd0` (a translucent red, 2). Text by characters: black `#000000` (3,323), white (729), red `#b8292f` (45) and a soft black `#000000de` (38).

Red `#b8292f` is the single brand action color: it fills the "อ่านต่อ" button, the top strip and the service band, and is the hover color of navigation links (the hover table shows the "สินค้าตามแบรนด์" link going from black to a red `rgb(184, ...)`). The CSS corpus also lists an orange `#f9a01b` (15 uses), recorded as `accent-orange`. Borders use the Tailwind-style gray `#e5e7eb` (hairline). The stylesheet contains SweetAlert2 variables (for example `#add8e6`) that are library defaults, not brand colors.

## Typography
The site loads three weights of a custom Thai family named kittithada: `kittithada` (400), `kittithada65` (400 face used for 2,444 characters) and `kittithada75` (heading face, 260 characters), plus the bootstrap-icons font. The extractor reports weights 500 (2,718 characters) and 400 (1,417). I could not confirm a license or public download for this family; a practical open substitute is Prompt or Sarabun (a suggestion, not a site statement).

Measured roles: display `kittithada75` 36px with weight 500 and a 24px line height (section titles such as "โปรโมชั่นเด็ด"); button `kittithada` 24px / 42px weight 500; navigation 24px / 36px weight 400; link `kittithada65` 21px / 30px weight 500. By characters, the sizes are 24px (2,991), 21px (905), 36px (95), 27px (87), 30px (56) and 18px (1). Letter-spacing is normal everywhere. Type is large for a retail page because Thai script needs size to be legible; there is no small-text tier below 18px.

## Layout
The page is 1280px wide and 4,160px tall in the desktop pass. A full-width header and nav sit over a full-bleed carousel; below, content blocks alternate between white bands and the `#f1f1f1` canvas. Category tiles are a six-column, two-row grid with a square gray image placeholder above a centered label; the style mosaic is a large left tile beside a three-by-two grid; brand logos run in a single row with an arrow control. Measured paddings: 12px (180 uses), 9px (118), 6px (86), 8px, 3px, 24px, 16px; gaps 18px and 12px. Carousels show dot pagination with the active dot in red.

## Elevation & Depth
Shadows are light: `rgba(0, 0, 0, 0.2) 0px 0px 5px 0px` (7 uses, the carousel arrow buttons and cards), a Material-style three-layer shadow on the header (`rgba(0, 0, 0, 0.2) 0px 2px 4px -1px, rgba(0, 0, 0, 0.14) 0px 4px 5px 0px, rgba(0, 0, 0, 0.12) 0px 1px 10px 0px`) and a tiny `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px`. The header is the one clearly raised element.

## Shapes
Radii: 6px (107 elements, cards and tiles), 9999px (30, pills and round arrow buttons), 9px (18), 3px (15), `0px 0px 6px 6px` (14, bottom-rounded images), 50% (9), 4px (6, the red button), 2px, a `2px 0px 0px 2px` edge and 14px. Cards use 6px, buttons 4px, chips and the "ดูทั้งหมด" pill are fully rounded.

## Components
- **button-primary ("อ่านต่อ"):** fill `#b8292f`, white text, kittithada 24px / 42px weight 500, radius 4px, padding 0px 12px, height 42px.
- **"ดูทั้งหมด" pill:** outlined red pill with a red circular arrow icon (seen in the capture; sizes not separately measured).
- **text-input (search):** fill `#ebebeb`, text `#000000de`, 24px, padding 0px 12px, height 48px.
- **nav:** white bar with the three-layer shadow; links 24px at `#000000de`, red on hover.
- **link:** black, kittithada65 21px / 30px, padding 3px 12px.
- **card:** `#f1f1f1` fill, 6px radius, padding 12px 0px.
- **Service band:** red full-width band with six white line icons and white labels.

## Design System Architecture
No public design system, brand guideline or press kit was found; the site could not be fetched by WebFetch (HTTP 403), so no brand pages were opened. The de-facto system is a Tailwind plus MUI plus SweetAlert2 front end (root variables include `--tw-*` and `--swal2-*`; the scrim class was a `MuiBackdrop-root`), with one brand red and the custom kittithada font as its identity.

## Do's and Don'ts
- Do use `#b8292f` for buttons, the announcement strip, the service band and active dots.
- Do keep the canvas `#f1f1f1` and content tiles white or gray, with 6px card corners.
- Do set all Thai text at 21-24px in kittithada (or a Thai substitute).
- Do show category and style images in a tile grid with centered labels.
- Don't use the mega-menu scrim `#0000004d` or SweetAlert2 colors as brand colors.
- Don't use sharp, heavy shadows; keep them at 0.2 alpha or less.
- Don't set text below 18px; none was measured.

## Responsive Behavior
Not measured. The mobile pass of the extractor returned a bot-block page ("Sorry, you have been blocked"), so no mobile data about the real site exists; the block page's values are not used.

## Iteration Guide
1. Canvas `#f1f1f1`, white bands, black text, hairline `#e5e7eb`.
2. kittithada (or Prompt) at 21 / 24 / 36px, weights 400 and 500.
3. Red `#b8292f` for actions, 4px button radius, 6px cards, pill chips.
4. Add orange `#f9a01b` only for promotional badges.
5. Verify with `node web/scripts/verify-designs.mjs --slug=thai-watsadu`.
