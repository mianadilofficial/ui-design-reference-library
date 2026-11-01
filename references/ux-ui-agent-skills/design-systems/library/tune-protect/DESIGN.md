---
version: alpha
name: Tune Protect Thailand
category: "Thai Brands"
description: "Tune Protect Thailand (ทูน ประกันภัย) Thai homepage: Noto Sans Thai at 16px weight 500 with slate ink (#495057), pure red (#ff0000) accents and a red announcement banner, six outline-icon product tiles at 6px radius with layered Material-style shadows, and promotion cards with text-only action rows."
colors:
  canvas: "#ffffff"
  ink: "#495057"
  primary: "#ff0000"
  surface-2: "#000000"
  ink-2: "#262626"
  ink-6: "#4b5563"
  hairline: "#fff5f5"
  brand-red: "#e71618"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\""
    fontSize: 18.72px
    fontWeight: 500
    lineHeight: 28px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\""
    fontSize: 18.72px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: "\"Noto Sans Thai\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 28px
  nav:
    fontFamily: "\"Noto Sans Thai\""
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
  button-secondary:
    fontFamily: "\"Noto Sans Thai\""
    fontSize: 16px
    fontWeight: 700
    lineHeight: 28px
rounded:
  xs: 6px
  sm: 8px
  md: 32px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 32px
components:
  button-secondary:
    textColor: "{colors.ink-2}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 4px
    height: 38px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-6}"
  nav-link:
    textColor: "{colors.ink-6}"
    typography: "{typography.nav}"
    padding: 15px 5px 15px 12px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 2px 1px -1px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 1px 3px 0px
  footer:
    textColor: "{colors.surface-2}"
---

# Tune Protect Thailand — Design System Notes

## Overview
Measured URL: https://tuneprotect.co.th/, which redirected to https://online.tuneprotect.co.th/th/home (title "ทูน ประกันภัย | Tune Protect ประกันภัยชั้นนำ คุ้มครองทุกไลฟ์สไตล์", language th). This is the Thai online storefront of Tune Protect, a general insurer. The header carries the round red Tune Protect logo at left, eight Thai menu items ("ผลิตภัณฑ์", "ข่าวสารและกิจกรรม", "บริการ", "เรียกร้องสินไหม", "บทความแนะนำ", "ติดต่อเรา", "เกี่ยวกับ Tune Protect", "ประกันภัยสำหรับธุรกิจ") with small chevrons on those that have submenus, and a TH / EN toggle at right in which the active language is filled red with white text.

The first screen is a red banner carousel with white arrow controls. In the capture the slide is an announcement in Thai and English: its title says (in Thai) that the international travel insurance product iTravel is renamed TuneTravel effective 30 July 2025 (2568), and it is addressed "Dear Valued Customer"; below it, a white tab with a headset icon gives "Call Center 1183" and an email address. Under the banner, "ผลิตภัณฑ์ของเรา" (our products) is a small centered heading with a short red underline above six equal white tiles with red line icons: เดินทาง (travel), ชดเชยรายได้ (income compensation), สุขภาพ (health), อุบัติเหตุ (accident), บ้านและอัคคีภัย (home and fire) and อื่นๆ (others). "โปรโมชัน" (promotions) follows with two-column promotion cards: a full-width campaign poster (AirAsia points offers, bank and credit-card discounts, a Grab voucher), a one-line caption, and a two-cell action row, "ดูรายละเอียด" (details) and "ซื้อเลย" (buy now) or "จองที่ Move". "บทความแนะนำ" (recommended articles) offers three articles with a photograph, a red-colored title, a gray two-line excerpt, an outlined pill "รายละเอียด" button and a circular share icon. The page ends with "Tune Protect ประกันง่ายๆ แค่ปลายนิ้วคลิก" and an "Insurance Simplified" photograph with a red label.

At capture time the site first displayed a black-and-white royal mourning overlay in a dialog (a PrimeNG dialog mask is recorded in the page record). The extraction was re-run once with `--force`, after which the overlay was hidden. The dialog is temporary and not a brand component.

## Colors
- **Canvas `#ffffff`**: the dominant background (area-weight 2,009).
- **Ink `#495057`**: the most-read text color (1,278 characters), a slate gray; **`#262626`** (`ink-2`) is the next (1,079 characters), used for card captions and button labels; **`#000000`** is used for headings (405 characters); **`#4b5563`** (`ink-6`) is the navigation link color.
- **Primary red `#ff0000`**: red text, underline rules and icon strokes (178 characters of text). The banner and logo use a slightly different red measured as **`#e71618`** (added as `brand-red`; also present at 33 and 75% alpha as `#e7161833` and `#e71618bf` in banner overlays).
- **Hairline `#fff5f5`**: a very pale pink border color used as a divider, e.g. above card action rows.
- **Black `#000000` (`surface-2`)** appears as a footer text color token.

The site's CSS root also contains a full PrimeNG-style palette (`--blue-500` `#3b82f6`, `--green-900` `#0e4f26`, `--primary-800` `#204887`, `--indigo-100`, and so on). These are framework theme defaults, not brand colors, and are not used as tokens.

## Typography
All 3,263 measured characters use **Noto Sans Thai**; the loaded fonts are Noto Sans Thai 400, Inter variable (100-900) and the `primeicons` icon font. The page is set at medium weight: body text measures 500 even though only the 400 file is listed as loaded, which means the browser may be synthesizing it; this was not investigated.

Most-used sizes by character count: 16px (1,977), 13.33px, 13.28px, 18px (242), 18.72px (116), 14px (110), 24px (20) and 36px (4).

- `display`: 18.72px / 28px, weight 500 (the section heading "ผลิตภัณฑ์ของเรา"; the page's h1 element is empty, so this heading was used as the display role).
- `display-mobile`: 18.72px / 28px at 390px.
- `body`: 16px / 28px, weight 500.
- `nav`: 14px / 14px, weight 500.
- `button-secondary`: 16px / 28px, weight 700.

Noto Sans Thai is a freely licensed Google font, so no substitute is required.

## Layout
Width 1280px, height 4622px. The content column is narrower than the window (the tile row and promotion grid occupy roughly the central 720px of the 960px-wide capture, with white margins), with the red banner and tile row aligned to the same edges. Product tiles are six across; promotions are two across; articles are three across. Section headings are centered with a short red underline. The nav-link padding is `15px 5px 15px 12px`.

## Elevation & Depth
Cards, tiles and the action rows use the same Material-style layered shadow: `rgba(0, 0, 0, 0.2) 0px 2px 1px -1px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 1px 3px 0px` (17 uses), and the header has `rgba(0, 0, 0, 0.15) 0px 4px 4px 0px`. The shadow is faint, so the tiles read as slightly raised paper.

## Shapes
Radii: 6px (34 uses), 50% (24 uses, circular share and arrow buttons and the logo), `8px 8px 0px 0px` (4 uses, card image tops) and 32px (3 uses, pill buttons such as the outlined "รายละเอียด"). Tokens: `xs` 6px, `sm` 8px, `md` 32px and `pill`.

## Components
- **button-secondary**: transparent background, `#262626` label in 16px bold, 6px radius, 4px padding and 38px height; used in the "ดูรายละเอียด / ซื้อเลย" action rows.
- **Pill outline button**: 32px radius, `รายละเอียด`, used in article cards.
- **card**: white, 6px radius, the layered shadow, `#262626` text.
- **nav / nav-link**: white, `#4b5563` links at 14px, `15px 5px 15px 12px` padding.
- **Language toggle**: two squared buttons; the active one is red-filled.
- **Banner arrows**: white chevrons on red, circular hit areas.

## Design System Architecture
No public design system exists as far as the opened source (https://online.tuneprotect.co.th/th/home) shows: no design-system or brand-guidelines page was linked from it (the footer lists privacy, terms and consent management; partner directories for hospitals, garages and service centers; and social links), so no search was made. The shipped UI is built on PrimeNG/PrimeFlex: the `primeicons` font, `p-dialog-mask` classes and a full set of `--blue-500`-style palette variables are present in the CSS. Brand colors (red `#ff0000`/`#e71618`, slate ink) are applied on top of that framework in component styles.

## Do's and Don'ts
- Do use red as an accent only: underlines, icons, banner fills and article titles.
- Do keep tiles and cards white with the faint layered shadow and 6px radius.
- Do give each promotion a two-cell action row (details / buy).
- Don't use PrimeNG's default palette colors in brand work.
- Don't show the mourning dialog, cookie or consent layers as brand UI.
- Don't use heavy shadows; the system is nearly flat.

## Responsive Behavior
The mobile measurement at 390px keeps the display size at 18.72px with a 28px line height. The six-up tiles and the multi-column promotion grid were not measured at narrow widths.

## Iteration Guide
1. Start on white with slate `#495057` text in Noto Sans Thai 16px/28px, weight 500.
2. Put a red `#e71618` banner at the top with white copy and arrows.
3. Show products as six white 6px-radius tiles with red outline icons.
4. Use outlined, text-only actions in promotion cards; reserve filled red for the active language toggle.
5. Close with a "Tune Protect ประกันง่ายๆ แค่ปลายนิ้วคลิก" style tagline over a bright family photograph.
