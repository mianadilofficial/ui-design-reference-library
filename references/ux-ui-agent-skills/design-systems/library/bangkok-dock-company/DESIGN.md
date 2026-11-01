---
version: alpha
name: Bangkok Dock Company
category: "Thai Brands"
description: "Bangkok Dock Company (1957) Limited, a Thai state-owned shipyard (bangkokdock.co.th): a WordPress site with a #334155 slate top bar, #1d4384 navy navigation, IBM Plex Sans Thai Looped body text, plus a Kanit tribute entry splash with a #111111 outlined pill button and 18px type."
colors:
  canvas: "#ffffff"
  ink: "#111111"
  primary: "#1d4384"
  on-primary: "#ffffff"
  ink-slate: "#334155"
  ink-heading: "#1e293b"
  ink-topbar: "#ebeff1"
  ink-on-nav: "#f0f5fa"
  ink-muted: "#707070"
  ink-faint: "#999999"
  surface-header: "#f5f5f5"
  surface-splash: "#eeeeee"
  nav-hover: "#042c65"
  link-blue: "#046bd2"
  link-blue-dark: "#045cb4"
  border-slate: "#d1d5db"
  hairline: "#0000001a"
typography:
  display:
    fontFamily: Kanit, Tahoma, sans-serif
    fontSize: 18px
    fontWeight: 500
    letterSpacing: 0.3px
  display-mobile:
    fontFamily: Kanit, Tahoma, sans-serif
    fontSize: 16px
    fontWeight: 500
    letterSpacing: 0.3px
  splash-body:
    fontFamily: Kanit, Tahoma, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 23.8px
    letterSpacing: 0.1px
  heading:
    fontFamily: "\"IBM Plex Sans Thai Looped\""
    fontSize: 32px
    fontWeight: 600
    lineHeight: 38.4px
  heading-mobile:
    fontFamily: "\"IBM Plex Sans Thai Looped\""
    fontSize: 29.184px
    fontWeight: 600
    lineHeight: 35.0208px
  body:
    fontFamily: "\"IBM Plex Sans Thai Looped\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.1px
  button:
    fontFamily: "\"IBM Plex Sans Thai Looped\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  footer:
    fontFamily: "\"IBM Plex Sans Thai Looped\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
rounded:
  xs: 18px
  md: 30px
  circle: 50%
  pill: 9999px
spacing:
  s1: 2px
  s2: 6px
  s3: 10px
  s4: 14px
  s5: 16px
  s6: 20px
  s7: 30px
  s8: 34px
  s9: 40px
components:
  splash-enter-button:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.pill}"
    padding: 14px 34px
    height: 57px
    borderColor: "{colors.ink}"
  splash-enter-button-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  top-bar:
    backgroundColor: "{colors.ink-slate}"
    textColor: "{colors.ink-topbar}"
    typography: "{typography.body}"
  nav-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  nav-bar-hover:
    backgroundColor: "{colors.nav-hover}"
    textColor: "{colors.on-primary}"
  phone-button:
    backgroundColor: "{colors.ink-slate}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    height: 42px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-slate}"
    typography: "{typography.footer}"
    height: 101px
    borderColor: "{colors.border-slate}"
---

## Overview

Bangkok Dock Company (1957) Limited (บริษัท อู่กรุงเทพ จำกัด) is a Thai state enterprise under the Royal Thai Navy and the Ministry of Defence: the tagline under its logo reads "รัฐวิสาหกิจในความควบคุมของกองทัพเรือ กระทรวงกลาโหม". Its site, bangkokdock.co.th, has two faces that this file documents separately. The first is a **tribute entry splash** (served at `/intro/` and, in the measurement of 2026-10-09, at the root URL): a centered white card with a grayscale royal portrait and a salutation, followed by one outlined pill button, "เข้าสู่เว็บไซต์" (enter the website). The second is the **main WordPress site** behind it, a conventional Thai corporate portal.

The main site's measured chrome, seen on the About Us page, is a three-tier header. A slate #334155 top bar carries the tagline in light text (#ebeff1) and icon buttons for search, phone, LINE, Facebook and maps. Below it a #f5f5f5 band holds the round navy-ringed company seal with a two-line wordmark (the Thai name above "THE BANGKOK DOCK COMPANY (1957) LIMITED") and a slate phone pill, "โทร (662) 307-8576". Under that runs a full-width navy #1d4384 navigation bar with white Thai menu items (หน้าแรก, เกี่ยวกับ บอท., ข่าวประชาสัมพันธ์, งานบริการ, การบริหารจัดการองค์กร, จัดซื้อ/จัดจ้าง, ติดต่อเรา), most with a small dropdown chevron.

The home page, seen only in the capture and in the page text (its numeric extraction timed out), is a long scroll of image-led bands: a four-slide hero slider (ship building, ship repair, defense and merchant-navy images; the capture shows "SHIP REPAIR" over a drydock photo) with the caption "Bangkok Dock 2024 'Bangkok Dock Next'"; a Facebook button and a phone button under an introductory paragraph; a blue band with a statement about being a state enterprise; a grid of white news cards (for example "การอบรมหลักสูตร 'HR for Non-HR'"); a "Company Profile of The Bangkok Dock Company (1957) Limited" block with a historical photo collage; "แผนงานและโครงการลงทุน"; "ข่าวประชาสัมพันธ์" press cards on a pale band; "หน่วยงานราชการที่เกี่ยวข้อง" (related government agencies) as a grid of logo tiles on blue, with an ISO 9001 badge; and a contact block with address, phones and a map. The footer reads "Copyright © 2026 บริษัท อู่กรุงเทพ จำกัด | Powered by Bangkok Dock Co.Ltd.".

The voice is formal Thai administrative language with English product-style captions for campaigns. A cookie notice ("เราใช้คุกกี้เพื่อเพิ่มประสิทธิภาพ...", with "ยอมรับ" and "ปฏิเสธ"), a floating "Contact us" chat button and a language flag switcher appeared over the captures; they are third-party widgets or consent controls and are not documented as brand UI.

## Colors

The main-site palette is navy, slate and white; the splash is neutral grayscale.

- **primary #1d4384** — the navigation bar fill, the largest saturated background area on the About page (113 units). White text (#ffffff) sits on it; hovering a menu item changes its background to **nav-hover #042c65**.
- **ink-slate #334155** — the top bar fill (60 units), the phone button fill, and body and footer text color (74 characters); it equals the theme's `--ast-global-color-3`.
- **ink-heading #1e293b** — the page-title color (8 characters), `--ast-global-color-2`.
- **ink-topbar #ebeff1** — text on the slate bar (78 characters); **ink-on-nav #f0f5fa** — the search icon color (6 characters), `--ast-global-color-5`.
- **canvas #ffffff** and **surface-header #f5f5f5** — page and header-band backgrounds (144 and 164 units).
- **ink #111111** — the splash button's text and border, and the theme's `--ast-global-color-6` and `-8`.
- **ink-muted #707070** (110 characters on the splash, `--muted`) and **ink-faint #999999** (35 characters, the small English company line).
- **surface-splash #eeeeee** — the splash page background (538 units); **hairline #0000001a** — the splash card's border.
- **link-blue #046bd2** (15 characters, `--ast-global-color-0`) and **link-blue-dark #045cb4** (`--ast-global-color-1`) — the theme's link blues.
- **border-slate #d1d5db** — the footer's top border and `--ast-global-color-7`.

The page also measured greens and blues (#03e78b, #37aa66, #38b900, #253974) on small round icon buttons, which are third-party social and chat icon colors, and #4f6aca on the floating chat button. None is brand color. The splash's own CSS variables are `--button: #111111`, `--muted: #707070`, `--background: #f4f4f4`, `--text: #111111`, `--border: #dedede` and `--surface: #ffffff`.

## Typography

Two families, one per face. The **splash** uses **Kanit** (300, 400 and 500, loaded from Google Fonts per the page's `<link>`, with `Tahoma, sans-serif` fallbacks). The **main site** declares **IBM Plex Sans Thai Looped** through `--font-base`, `--font-headings` and `--font-input`; the measurement recorded no loaded font files for it (`loadedFonts` is empty), and in the capture the Latin headings such as "About Us" render in a serif fallback while Thai text renders in a Thai face. The site names no further substitutes.

- **display — Kanit 500, 18px, tracking 0.3px.** The splash "เข้าสู่เว็บไซต์" button label; **display-mobile — 16px**, the same label at 390px.
- **splash-body — Kanit 300, 14px / 23.8px, tracking 0.1px.** The splash footer lines ("บริษัท อู่กรุงเทพ จำกัด • รัฐวิสาหกิจในความควบคุมของกองทัพเรือ"); the English line below it is 12px.
- **heading — IBM Plex Sans Thai Looped 600, 32px / 38.4px.** The page title on inner pages (#1e293b); **heading-mobile — 29.184px / 35.0208px** at 390px.
- **body — 400, 14px / 23.1px.** Top-bar and body text.
- **button — 500, 16px / 16px.** The phone pill label.
- **footer — 400, 16px / 26.4px.** Footer copy in #334155.

Sizes by character count on the About page are 16px (209), 14px (78), 17px (10), 32px (8), 24px (6) and 20px (2); on the splash 14px (110), 12px (35) and 18px (15). Weights are 400 (275), 500 (28), 600 (8) and 700 (2) on the About page, and 300 (145) and 500 (15) on the splash.

## Layout

The splash is one centered card on a light-grey field: a grayscale portrait block over a white panel with the button and two footer lines, with a soft shadow. The page measured 1280px by 800px.

On the main site, the theme's root variables define a 1200px container (`--ast-normal-container-width: 1200px`, `--wp--custom--ast-container-width: 1200px`) and a 750px narrow container. The header stack is a slate bar, a #f5f5f5 band and a navy bar, each full width; the footer measured 101px tall with a #d1d5db top border. Paddings measured on the About page are 10px (9), 6px (8), 16px (8), 20px (6), 15px (2), 12px and 5px; gaps are 20px (3) and 50px (1). Inner pages carry a title area (`--ast-title-layout-bg: #eeeeee`) above an empty content area in the capture.

The home page's band layout (hero slider, blue statement band, three-column white cards, profile section, logo grid) is visible in the capture and was not measured numerically.

## Elevation & Depth

On the splash, the card has a two-layer shadow `rgba(0, 0, 0, 0.03) 0px 2px 5px 0px, rgba(0, 0, 0, 0.1) 0px 14px 40px 0px`, the only shadow in that measurement. On the About page, three shadows were measured: `rgba(0, 0, 0, 0.15) 0px 5px 15px 0px`, `rgba(0, 0, 0, 0.15) 0px 1.93465px 7.73859px 0px` and `rgba(73, 104, 126, 0.16) 0px 16px 24px 0px`; which elements carry them was not mapped. Depth otherwise is flat color blocks: slate, pale grey, navy and white.

## Shapes

On the splash the button is a full pill (radius 999px, 9999px in the token set) and the card has an 18px radius. On the main site, round shapes are the icon buttons (50%, 13 elements) and the phone pill (30px is measured on 4 elements); the CSS also lists 4px (20), 2px (19), 3px (10) and 6px (7) radii from the theme and its plugins. The navigation bar, top bar and footer are rectangles.

## Components

**Splash enter button.** Transparent, 1px #111111 border, #111111 label in Kanit 500 at 18px with 0.3px tracking, radius 999px, padding `14px 34px`, height 57px, width 260px, with a trailing arrow. On hover the fill becomes #111111 and the label white. At 390px it measures 52px by 320px with padding `13px 22px` and 16px type.

**Top bar.** #334155, 14px text in #ebeff1: the tagline at left; search, phone, LINE, Facebook and map icon buttons at right, round.

**Phone button.** #334155 fill, white label "โทร (662) 307-8576" in 16px / 500, 42px tall and 172px wide.

**Navigation bar.** Full-width #1d4384; white items, with a hover fill of #042c65 measured on every top-level item (หน้าแรก through ติดต่อเรา).

**Header band.** #f5f5f5 with the round seal and wordmark at left.

**Cards and bands (home).** White news cards with photographs and Thai headlines, blue statement and logo bands; not measured numerically.

**Footer.** White, #334155 16px text, a #d1d5db top rule, centered copyright; on the home page a contact block with address 174/1 ถนนเจริญกรุง, phones (662) 307-8576 and 099-2840997, and email addresses.

## Design System Architecture

No public design system or brand guideline is published for Bangkok Dock Company. The home page https://www.bangkokdock.co.th/ was opened (page text) and states nothing about brand guidelines or a CI download; the only logo references are the header and footer images. The splash page https://www.bangkokdock.co.th/intro/ and the About page https://www.bangkokdock.co.th/about-us/ were also opened.

The de-facto system is a WordPress site: the root variables use the Astra theme's `--ast-global-color-0` to `-8` naming (#046bd2, #045cb4, #1e293b, #334155, #FFFFFF, #F0F5FA, #111111, #D1D5DB, #111111), Elementor's `--e-global-color-astglobalcolor0` to `7` mirrors, WordPress core `--wp--preset--*` presets and `--wp-admin-theme-color`, a 1200px container, and `--font-base: IBM Plex Sans Thai Looped`. The measured font-family list also includes WooCommerce, eicons and Astra icon fonts. The splash is a hand-written single page with its own six CSS variables and the Kanit webfont. The two have no shared tokens.

## Do's and Don'ts

- Do use navy #1d4384 for the navigation bar and slate #334155 for the top bar and phone button, with white or #ebeff1 text.
- Do show a hover fill of #042c65 on navigation items.
- Do keep the entry splash neutral: grayscale image, white card, one #111111 outlined pill with 18px Kanit 500 text.
- Do use the Thai-capable families (IBM Plex Sans Thai Looped, Kanit) for every Thai string.
- Do keep the footer white with a #d1d5db rule and #334155 text.
- Don't use the WordPress or Astra default palette entries (#007cba, #9b51e0 and the rest of the `--wp--preset--color--*` set) as brand colors.
- Don't document the cookie notice, chat button or language flag widget as brand UI.
- Don't use pill buttons on the main site's navigation; the bar is rectangular.
- Don't reuse splash tokens (Kanit, #707070) in the main-site layout without re-measuring.

## Responsive Behavior

Measured at the 390px mobile pass of the About page: the page title is 29.184px / 35.0208px at weight 600 (#1e293b), footer copy is 14.592px / 24.0768px in #334155, and the header region measures 126px tall at 390px wide with a #f5f5f5 background. The most common mobile sizes are 14.592px (99 characters), 17px (10), 20.4288px (9), 29.184px (8) and 20px (2). On the splash at 390px, the enter button is 16px type, 52px by 320px, with `13px 22px` padding, and splash text sizes are 13px (110), 12px (35) and 16px (15).

How the navigation collapses and how the home page's bands reflow at mobile widths was not measured; the theme's media queries were not read.

## Iteration Guide

1. Build the header as a three-tier stack: #334155 bar, #f5f5f5 logo band, #1d4384 navigation with #042c65 hover.
2. Use IBM Plex Sans Thai Looped for Thai and Latin text on the main site, 14px body and 32px / 600 titles in #1e293b; use Kanit only on the entry splash.
3. Build the splash as a white 18px-radius card with a grayscale image and one 57px outlined pill.
4. Use slate #334155 for text, footer copy and the phone pill.
5. Re-measure the home page when the extractor can complete it; its bands were not measured.
6. Gate with `node web/scripts/verify-designs.mjs --slug=bangkok-dock-company`.
