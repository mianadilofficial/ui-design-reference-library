---
version: alpha
name: Thai Parliament Television (TPCHANNEL)
category: "Thai Brands"
description: "TPCHANNEL (tpchannel.org), Thai Parliament Television's news and video portal: Prompt Thai type at 14px body, black header with gold #ffd684 nav, #f1f1f1 page gray, gold-tint #ffd68426 pill buttons with #b8800f text at 50px radius and 8px thumbnails."
colors:
  canvas: "#ffffff"
  page-largest: "#f1f1f1"
  ink: "#212529"
  primary: "#b8800f"
  on-primary: "#b8800f"
  surface-black: "#000000"
  ink-muted: "#6c757d"
  ink-subtle: "#9ca3af"
  ink-on-dark-muted: "#ffffffb3"
  hairline: "#4b5563"
  button-primary-bg: "#ffd68426"
  nav-text: "#ffd684"
  live-badge: "#dc2626"
typography:
  display:
    fontFamily: __prompt_0bc022, __prompt_Fallback_0bc022
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
  subheading:
    fontFamily: __prompt_0bc022, __prompt_Fallback_0bc022
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: __prompt_0bc022, __prompt_Fallback_0bc022
    fontSize: 11px
    fontWeight: 500
    lineHeight: 13.75px
  button:
    fontFamily: __prompt_0bc022, __prompt_Fallback_0bc022
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
  nav:
    fontFamily: __prompt_0bc022, __prompt_Fallback_0bc022
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 50px
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
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 10px 0px
    height: 36px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.canvas}"
---

# Thai Parliament Television (TPCHANNEL)

## Overview
The measured site is tpchannel.org, the online home of Thai Parliament Television, the broadcaster of the Thai parliament (the site's own headings call it TPCHANNEL). It is a Next.js and Tailwind build (the extracted root variables are `--tw-*` Tailwind variables and `--font-prompt` / `--font-sarabun` font variables). The language is Thai. The look is a news-and-video portal: a thin black top bar with gold navigation, a full-width carousel banner, then white-gray sections of video thumbnails and news cards.

At capture time the carousel's first slide was a dark ornamental memorial banner with Thai script reading as a tribute to a late member of the royal family. That is editorial content in a carousel, not a site-wide overlay or grayscale treatment, so it is not treated as brand UI. The sections that follow are: live broadcast ("รายการถ่ายทอดสด") with TV and radio live tiles and a large player, short clips ("คลิปสั้น") as a six-up row of portrait thumbnails, top news ("ข่าวเด่น") as one large card beside four small ones, and latest news ("ข่าวล่าสุด") as a four-up row with relative timestamps ("21 ชั่วโมงที่แล้ว"). Each section has a "ดูทั้งหมด →" link at the right.

Imagery is documentary: press-conference photography, parliament chambers, sports clips with broadcast graphics. Copy is concise Thai headline text, truncated to two lines under each thumbnail.

## Colors
Measured roles: canvas `#ffffff`, the dominant background by area `#f1f1f1` (page gray, recorded as `page-largest`), black `#000000` for the header and footer, primary ink `#212529`, secondary grays `#6c757d` and `#9ca3af`, and a hairline `#4b5563` used on borders (five uses) with `#1f2937` once.

The accent is gold. The detected button text color is `#b8800f` (203 characters), the navigation text on the black bar is `#ffd684`, and the button fill is `#ffd68426`, a 15% tint of that light gold. Because the call-to-action is a tinted pill with gold text, the generator output has `on-primary` equal to `primary` (`#b8800f`); that is a property of this tinted style and is kept as measured. The live badge fill is `#dc2626` (red, one use), added here from the measured background-color table. The extraction also lists `#1877f2` and `#06c755`, which are the share-button colors of third-party networks and are not brand colors. White at 70% (`#ffffffb3`) is used for secondary text on the dark footer.

## Typography
A single family is measured: Prompt (loaded through Next font as `__prompt_0bc022`, 4,797 characters), with weights 400, 500, 600 and 700 loaded. Sarabun is declared as a second font variable (`--font-sarabun`) but no characters were measured in it. Prompt is an open Thai-and-Latin typeface, so it can be used directly.

Measured sizes are small and dense, in the manner of a news portal. The most used sizes by character count are 14px (2,889), 12px (692), 11px (563), 15px, 16px, 18px and 20px. Roles: the section headings ("รายการถ่ายทอดสด") are 18px / 28px weight 600 (recorded as `display`, because the extractor found no larger hero text); sub-headings are 18px weight 500; navigation is 16px / 24px weight 400; the button is 12px / 16px weight 500; the card caption "body" role is 11px / 13.75px weight 500. The body element itself computes 14px / 20px weight 500. Letter-spacing 0.35px appears on 14px text (41 characters). One 120px size appears with weight 900 and is a decorative numeral.

## Layout
The page is 1280px wide in the desktop pass and 5,883px tall. Gaps most used are 4px (62), 12px (42), 16px, 20px, 32px; paddings 16px, 6px, 12px, 8px, 24px. The page is a full-width carousel followed by a main column with consistent 24px-class side gutters: a left rail (live tiles) with a wide player on the right; then horizontal rows of equal-width thumbnails. Section headings carry a small icon or a gold vertical bar at the left and a text link at the right. Pagination for the top-news block is numeric (1 to 6) with the active number in gold.

The navigation bar lists, in order: home, news, live programs, all programs, podcast, articles, program schedule, a drop-down of programs, organization and contact, with search and a combined sign-up / sign-in link at the far right. The footer section names contact locations and offers app-store download badges for iOS and Android, which the homepage text also lists as download actions. Content density is high: every row repeats the same card pattern, so the visual rhythm comes from thumbnail size changes between rows rather than from different component types.

## Elevation & Depth
Almost flat. Measured shadows are only Tailwind defaults: `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` (a white tile with a `#e5e7eb` border) and one `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px` on a raised element. Depth comes from image content and dark scrims under thumbnail captions (`#00000073`, `#00000066` backgrounds), not from shadows.

## Shapes
Radii measured: 8px (weight 62, the card and thumbnail corner), 9999px (33, circles and chips), 4px, 12px, 16px, 50px (the pill buttons) and a `0px 0px 8px 8px` bottom-only corner. Thumbnails and the player are rounded at 8px-12px; avatars, share icons and the LIVE badge are fully round.

## Components
- **button-primary ("ดูทั้งหมด" pill):** fill `#ffd68426`, text `#b8800f`, Prompt 12px / 16px weight 500, radius 50px, padding 10px 0px, height 36px.
- **nav:** black bar `#000000`, gold item text `#ffd684`; the active item "หน้าหลัก" is bold gold; a red LIVE badge `#dc2626` sits next to "รายการสด".
- **link:** `#212529`, 16px / 24px.
- **card:** `#f1f1f1` surface, 8px radius, white caption text over the dark image scrim.
- **footer:** black `#000000` with white text and `#ffffffb3` secondary text.
- **Live tiles:** white 12px-radius tile with a 1px `#e5e7eb` border and the faint 0.05 shadow; on hover the measured after-state background is a pale yellow tint (the extraction recorded a hover pair for this tile).
- **Share buttons:** round icon buttons for Facebook, LINE, X and copy link; the network colors are third-party.

## Design System Architecture
No public design system, brand guideline or press kit was found. The homepage exposes only "ข่าวประชาสัมพันธ์" and "เอกสารดาวน์โหลด" links, which were not opened and are not claimed to be brand material. The de-facto system is Tailwind utility classes (arbitrary-value classes like `bottom-[84px]` and `w-[calc(100%-20px)]` were seen on the cookie banner) with next/font loading of Prompt and Sarabun. Colors are used as literal values; no named brand variables are present in the root variables, which contain only Tailwind internals and the two font variables.

## Do's and Don'ts
- Do pair a black chrome (header, footer) with a `#f1f1f1` content area and white cards.
- Do use gold `#ffd684` on black and `#b8800f` on light, as measured.
- Do keep type small and dense (14px body, 12px buttons) with Prompt weights 400-600.
- Do use relative timestamps and two-line truncated headlines under thumbnails.
- Don't treat the cookie banner or share-network colors as brand UI.
- Don't use heavy shadows; the measured system is nearly flat.
- Don't set button text darker than `#b8800f` on the tinted gold pill.

## Responsive Behavior
Mobile (390px) was measured only for type: the section heading stays 18px / 28px weight 600, the card caption 11px / 13.75px, and the pill button keeps 12px / 16px with a 50px radius. Layout reflow, menu behavior and breakpoints are not measured.

## Iteration Guide
1. Black header, `#f1f1f1` body, white tiles, `#212529` text.
2. Prompt only; sizes 11 / 12 / 14 / 16 / 18px.
3. Gold `#ffd684` nav on black; gold-tinted `#ffd68426` pill with `#b8800f` text for "see all".
4. Radius 8px for media, 50px for pills, 9999px for badges.
5. Verify with `node web/scripts/verify-designs.mjs --slug=thai-parliament-television`.
