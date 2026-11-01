---
version: alpha
name: องค์การสวนพฤกษศาสตร์ (The Botanic Garden Organization, bgo.qsbg.org)
category: "Thai Brands"
description: "Main website of Thailand's Botanic Garden Organization, measured at bgo.qsbg.org: Mitr throughout, black #000000 text on a white #ffffff canvas, sky-blue #00a1ed for the wordmark, nav hover and 54px buttons with 8px radius, deep blue #0072a3 and amber #ffb020 brand variables, 2px-radius gradient stat cards and 48px section headings."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#00a1ed"
  on-primary: "#ffffff"
  surface-soft: "#f5f5f5"
  brand-deep: "#0072a3"
  accent: "#ffb020"
  ink-muted: "#707070"
  ink-soft: "#454545"
  ink-on-media: "#ffffffe6"
typography:
  display:
    fontFamily: Mitr, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 22.14px
  display-mobile:
    fontFamily: Mitr, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 29.52px
  heading:
    fontFamily: Mitr, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 59.04px
  body:
    fontFamily: Mitr, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 26.1px
  button:
    fontFamily: Mitr, sans-serif
    fontSize: 15px
    fontWeight: 600
    lineHeight: 54px
    letterSpacing: 0.3px
  link:
    fontFamily: Mitr, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 54px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 22px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 36px
    height: 54px
    boxShadow: rgba(0, 20, 40, 0.06) 0px 2px 6px 0px, rgba(0, 20, 40, 0.04) 0px 1px 2px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-secondary:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 0px 36px
    height: 54px
    boxShadow: rgba(0, 20, 40, 0.06) 0px 2px 6px 0px, rgba(0, 20, 40, 0.04) 0px 1px 2px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 0px 36px
    boxShadow: rgba(0, 20, 40, 0.06) 0px 2px 6px 0px, rgba(0, 20, 40, 0.04) 0px 1px 2px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    padding: 20px 10px 0px
  card:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 20, 40, 0.06) 0px 2px 6px 0px, rgba(0, 20, 40, 0.04) 0px 1px 2px 0px
---

# องค์การสวนพฤกษศาสตร์ — The Botanic Garden Organization

## Overview

This file documents the main website of the Botanic Garden Organization (องค์การสวนพฤกษศาสตร์), a state enterprise under Thailand's Ministry of Natural Resources and Environment. It was measured at **https://bgo.qsbg.org/**, the organization's main site, not at the root domain qsbg.org. The root qsbg.org is an image-tile launcher: its service tiles are `<img>` elements and every visible HTML text node there computes to #ffffff, so it has no measurable reading colour. The launcher's header links to bgo.qsbg.org, the same organization's official subdomain, and that page is a full content site with real HTML text. Every value below comes from the extractor run against bgo.qsbg.org on 2026-10-20 (page title "หน้าแรก | องค์การสวนพฤกษศาสตร์", `lang="th"`, 1280px wide, 6306px tall).

The capture shows a bright, institutional Thai government portal. A white header carries the blue leaf-and-drop logo (`/icon/logo_blue.svg`) beside a two-line wordmark in sky blue — "องค์การสวนพฤกษศาสตร์" over "กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม" — followed by seven dropdown menu items in black and a sky-blue "ไทย (TH)" language button on the right. Below sits a full-width photographic carousel (a boardwalk over a flooded forest in the capture) with a white wave cut into its lower edge. The body is a stack of data tiles: gradient stat cards, a library counter band, three wide in-vitro conservation bands, a news carousel and a recommended-activities carousel. A blue mountain-wave illustration introduces the footer, which lists six link columns, social icons and the line "© 2021 THe Botanic Garden Organization. All Rights Reserved."

The voice is formal Thai civil-service copy: section titles such as "ข่าวประชาสัมพันธ์" (press releases) and "กิจกรรมที่แนะนำ" (recommended activities), with counts presented as large numerals plus a unit word ("16,466 พันธุ์").

## Colors

The canvas is **#ffffff** (56% of the captured screen and the dominant background by area). The most-read text colour is **#000000** — the menu items, the 48px section headings and most body copy. **#707070** (`ink-muted`) is the second most frequent text colour and **#454545** (`ink-soft`) a third grey. **#ffffffe6** (`ink-on-media`) is white text at 90% opacity laid over photographs and gradients.

The brand action colour is sky blue **#00a1ed** (`primary`): it fills the language button, paints the wordmark, nav and nav-link role text, is the hover colour of every header menu item (measured black #000000 → rgb(0,161,237)), and forms the flat-looking gradient `linear-gradient(218deg, rgb(0,161,237) 0px, rgb(0,161,235) 50%, rgb(0,161,237) 100%)` on the "แสดงทั้งหมด" (show all) buttons. Text on it is **#ffffff** (`on-primary`).

The site's own CSS variables name a deeper palette: `--brand-primary: #0072a3` (`brand-deep`, measured as the background of the skip-to-content link), `--brand-primary-light: #4ca3c9`, `--brand-primary-dark: #005a82`, and `--brand-accent: #ffb020` (`accent`), which is the colour of the measured keyboard focus ring. `surface-soft` **#f5f5f5** is the second largest background by area. Stat cards use measured gradients, e.g. `linear-gradient(to right top, rgb(1, 88, 219), rgb(0, 161, 237))` and `linear-gradient(to right top, rgb(0, 79, 171), rgb(216, 236, 168))`.

## Typography

One family carries the whole site: **Mitr**, self-hosted from `/fonts/Mitr/Mitr-Regular.ttf` and `Mitr-Bold.ttf`, with Font Awesome 5 Pro and 6 Free/Brands for icons. Mitr is an open-source Thai/Latin typeface on Google Fonts, so no substitute is needed.

- `display` — 18px / 500 / 22.14px. The extractor's largest-hero-text was the header wordmark, because the carousel hero carries no text; this is the size of "องค์การสวนพฤกษศาสตร์".
- `heading` — 48px / 500 / 59.04px. Used for the stat numerals ("16,466") and the centred section headings such as "ข่าวประชาสัมพันธ์" in #000000.
- `body` — 15px / 400 / 26.1px, the most frequent size by characters.
- `button` — 15px / 600 / 54px line height, 0.3px letter-spacing.
- `link` — 15px / 500 / 54px, the "แสดงทั้งหมด" button label.
- `display-mobile` — 24px / 500 / 29.52px at 390px.

Other measured sizes: 18px, 24px (card titles), 32px / 700 (library counters), 56px, 14px with 1px tracking, and 12px.

## Layout

At 1280px the header band spans 0–179px with content between x=65 and x=1160; nine header links are visible and no menu toggle. The photographic carousel follows, with circular arrow controls on both edges and dot pagination below. The main content band (from y=712, 4272px tall) is a three-column grid of tiles: three 385px-wide gradient stat cards per row, a full-width library band with three counters (Books 13,464, Journal 3,174, E-Books 17 in the capture), then three full-width in-vitro conservation bands. News and activity carousels are each followed by a centred 280px "แสดงทั้งหมด" button. The footer band is six columns. Spacing values measured: 3, 5, 10, 12, 14, 15, 16, 20, 22 and 25px; the most frequent padding is 15px. The CSS also declares `--space-1` 8px through `--space-6` 64px.

## Elevation & Depth

Depth is shallow and cool. Buttons and cards share the shadow `rgba(0, 20, 40, 0.06) 0px 2px 6px 0px, rgba(0, 20, 40, 0.04) 0px 1px 2px 0px` (the site's `--shadow-sm`). On hover the language button lifts to `rgba(0, 20, 40, 0.1) 0px 8px 20px 0px, rgba(0, 20, 40, 0.06) 0px 3px 6px 0px` (`--shadow-md`). A `--shadow-lg` is also declared. One other shadow, `rgba(0, 0, 0, 0.08) 0px 2px 8px 0px`, appears once. Most of the depth on screen comes from photography and gradients, not shadow.

## Shapes

Radii are small. Stat cards use **2px** (`xs`), the most frequent radius. Buttons use **8px** (`lg`, equal to `--radius-md`). 4px and 6px each appear once, and 50% circles are used for the carousel arrows and social icons (`pill`). The wave edges under the hero and above the footer are illustrations, not CSS shapes.

## Components

- **Primary button** — the "ไทย (TH)" language button: #00a1ed fill, #ffffff 15px/600 Mitr text with 0.3px tracking, 54px tall, `0px 36px` padding, 8px radius, `--shadow-sm`. On hover only the shadow changes.
- **Secondary button / link** — "แสดงทั้งหมด": the same 54px height, 8px radius and padding, with the 218deg sky-blue gradient, #ffffff 15px/500 text, 280px wide, centred under each carousel.
- **Header nav** — wordmark and nav role in #00a1ed; menu items in #000000 with dropdown chevrons, turning #00a1ed on hover; nav-link padding `20px 10px 0px`.
- **Stat card** — 385px wide, 181–211px tall, 2px radius, `--shadow-sm`, gradient background, 24px/500 title and large numeral with a unit word.
- **Skip link** — "ข้ามไปเนื้อหาหลัก / Skip to main content" on #0072a3 with white text; on focus it gains a 2px outline offset and an amber ring `rgba(255, 176, 32, 0.4) 0px 0px 0px 3px, rgba(255, 176, 32, 0.6) 0px 0px 0px 1px`.
- **Carousels** — full-width image slides with circular arrow buttons and dot pagination.
- **Footer** — six link columns headed in bold, social icons (Facebook, Instagram, YouTube, LINE, TikTok, X) and Privacy / Terms / Sitemap links.

## Design System Architecture

No public design system or brand guideline is published. The home page links to no CI, logo-download or guideline page. The de facto system lives in the shipped CSS custom properties: a Bootstrap 4 base (`--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-xl` 1200px and the stock Bootstrap colour variables, which are framework defaults, not brand colours) plus a site layer with brand names: `--brand-primary` / `-light` / `-dark`, `--brand-accent` / `--brand-accent-dark` (#d99400), a grey ramp from `--gray-50` #f8fafb to `--gray-900` #1a2229, `--radius-sm` 4px / `--radius-md` 8px / `--radius-lg` 12px / `--radius-pill` 999px, `--space-1`…`--space-6`, `--shadow-sm/md/lg`, and easings `--ease-out cubic-bezier(0.16, 1, 0.3, 1)` and `--ease-in-out cubic-bezier(0.65, 0, 0.35, 1)`. In practice the rendered blue is #00a1ed, not the variable `--brand-primary` #0072a3.

## Do's and Don'ts

- Do set everything in Mitr: 15px body, 48px/500 section headings, 600 weight on buttons.
- Do use #00a1ed as the single action colour, with white text, 54px height and 8px radius.
- Do keep the canvas white and the text black, and use #707070 for secondary text.
- Do lead sections with real nature photography and soft gradient tiles.
- Do keep the amber #ffb020 focus ring for keyboard users.
- Don't round cards beyond 2px or buttons beyond 8px.
- Don't use the Bootstrap stock colours or the root qsbg.org launcher's white-on-white text as brand colours.
- Don't add heavy shadows; stay with the cool `rgba(0, 20, 40, …)` layers.

## Responsive Behavior

Measured at 390px: no header links are visible and the extractor found no menu toggle; the header shows the logo and the "ไทย (TH)" button, which keeps 15px/600 text, 54px height, `0px 36px` padding and 8px radius (194px wide). The largest text becomes the 24px/500 stat numeral (29.52px line height), and the body sample is 18px/400 with a 32.04px line height. The mobile pass recorded at most 5 card columns in a row (`maxCardColumns: 5`); how the tiles, bands and footer columns reflow was not measured. Breakpoint behaviour between 390px and 1280px was not measured; dark mode was not measured.

## Iteration Guide

1. Start from white #ffffff, black #000000 text and Mitr at 15px/26.1px.
2. Add the header: blue logo, 18px/500 #00a1ed wordmark, black menu items that turn #00a1ed on hover, and the 54px #00a1ed language button.
3. Put a full-width nature photograph carousel under it.
4. Build content as 385px gradient tiles with 2px radius and `--shadow-sm`, three per row.
5. Centre 48px/500 black section headings above each carousel and a 280px "แสดงทั้งหมด" button below.
6. Close with the blue wave footer illustration and six link columns.
7. Check every new value against the extraction for bgo.qsbg.org before adding it.
