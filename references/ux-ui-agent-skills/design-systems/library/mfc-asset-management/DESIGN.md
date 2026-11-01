---
version: alpha
name: "MFC Asset Management"
category: "Thai Brands"
description: "Thai mutual-fund portal in Kanit 300/400: white #ffffff canvas, #af1217 brand red for links and bands, #911a2a maroon headings, #333333 body text, #f2f3f5 panels, soft low-opacity shadows, 5px-radius cards and #ff0000 negative NAV figures."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  negative-change: "#ff0000"
  surface-soft-grey: "#f2f3f5"
  surface-mid-grey: "#575757"
  ink-strong: "#222529"
  ink-card: "#434343"
  ink-black: "#000000"
  ink-heading-maroon: "#911a2a"
  hairline: "#443322cc"
  primary: "#af1217"
typography:
  display:
    fontFamily: Kanit
    fontSize: 20px
    fontWeight: 500
    lineHeight: 44px
  heading:
    fontFamily: Kanit
    fontSize: 20px
    fontWeight: 400
    lineHeight: 40px
  body:
    fontFamily: Kanit
    fontSize: 14px
    fontWeight: 300
    lineHeight: 24px
  nav:
    fontFamily: Kanit
    fontSize: 16px
    fontWeight: 400
    lineHeight: 0px
rounded:
  xs: 2px
  sm: 3px
  md: 5px
  lg: 8px
  xl: 10px
  2xl: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 4.8px
  s5: 5px
  s6: 6px
  s7: 7px
  s8: 8px
  s9: 9.6px
  s10: 10px
components:
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-card}"
    rounded: "{rounded.md}"
    padding: 5px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 10px 30px 10px
---

# MFC Asset Management

## Overview

The measured site is mfcfund.com (the page title is "MFC", language Thai), the web portal of MFC Asset Management, a Thai mutual-fund manager. The capture shows a dark utility strip with the grey MFC wordmark, service links, social icons and a TH/EN switch; a light menu row (หน้าหลัก, กองทุนรวม, กองทุนส่วนบุคคล, กองทุนสำรองเลี้ยงชีพ, a real-estate and infrastructure trust item, ธุรกิจทรัสต์, กองทุนสัมพันธ์ and more); a hero carousel; a row of service tiles (Account Opening on a deep red card, ค้นหากองทุน, Smart Trade, PVD Online, MFC Avenue); a NAV table headed "มูลค่าหน่วยลงทุน" with columns for fund name, date, NAV and change; a "กองทุนแนะนำ" row of fund cards; four photographic tiles with red pill buttons; a full-width crimson band promoting the MFC Wealth app with App Store and Google Play badges; and announcement and promotion lists with red dates.

A modal announcement ("ลงทุนในหัวใจสำคัญของ AI ผ่านผู้นำ Memory Chips ทั่วโลก", M-GMEMORY) is open over the hero in the capture, with a black scrim `#000000b3` behind it and a "ไม่ต้องแสดงอีกในวันนี้" checkbox. The dialog and scrim are page chrome, not brand UI, and the extractor recorded an `of-banner` overlay as hidden on the first pass; the scrim color is not part of the tokens. The page is 3899px tall at 1280px.

## Colors

Measured backgrounds: white `#ffffff` (4845), the dialog scrim (excluded), light grey `#f2f3f5` (890), mid grey `#575757` (570), dark `#3f4347` (260), brand red `#af1217` (208) and darker `#2f3235`. Text by characters: `#333333` (2751, default), `#222529` (1843), white (536), `#434343` (534, card text), black (441), maroon `#911a2a` (330, section headings and fund codes), brand red `#af1217` (255, nav links and dates), grey `#808080` (215), `#757575` (109), pure red `#ff0000` (70) and green `#008000` (21).

Role decision: the generator picked `#ff0000` as primary as "most saturated action/link color", but in the capture `#ff0000` and `#008000` are the negative and positive NAV-change numbers in the fund table, not an action color. The theme's root variables declare `--primary: #af1217` and `--secondary: #af1217` (and `--perf-primary-color: #af2225`), and `#af1217` is measured as nav link text, as 208 area weight of background and in the red band, so `primary` here is `#af1217` and the generated `#ff0000` is kept as `negative-change`. The root variables also contain a `--primary-color: #2ac3ed` and `--text-link-color: #3968f0` from the underlying theme; neither was observed on rendered brand surfaces and neither is used. Hairlines are `#443322cc` (16 uses).

## Typography

Kanit is the only family (7229 characters), loaded at 300, 400, 500, 600 and 700. Root variables set `--font-base`, `--font-headings` and `--font-input` to Kanit.

Measured roles: h1 (fund code such as "M-SEMI") 20px at 500 with a 44px line height; h2 ("กองทุนแนะนำ") 20px at 400 with a 40px line height; body 14px at 300 with a 24px line height; navigation 16px at 400. Section headings and fund codes are maroon `#911a2a`. The most frequent size is 14px (5604 characters), then 15px (426), 13px (259), 20px (246), 12px (190), 16px (159) and 18px (125). Type is small and light; hierarchy comes from weight and the maroon headings.

## Layout

The page is dense and modular: a boxed content width with a white canvas and light panel backgrounds (`--background-color-alt: #f7f9fd` in the root variables), service tiles on the left with the NAV table on the right, a five-up row of recommended-fund cards, a four-up row of photo tiles, a full-bleed red band, and two-column news lists. Spacing steps recorded: 1, 2, 4, 4.8, 5, 6, 7, 8, 9.6 and 10px.

## Elevation & Depth

Soft shadows are common: `rgba(0, 0, 0, 0.07) 0px 2px 6px 0px` (29 uses), `rgba(0, 0, 0, 0.05) 0px 10px 30px 10px` (2, on the card), `rgba(0, 0, 0, 0.07) 1px 2px 2px 2px` (2) and `rgba(0, 0, 0, 0.03) 0px 2px 5px 5px` (2). Cards float on a light background rather than being outlined.

## Shapes

Radii measured: 2px (20 uses), 10px (17), 100% (5, round risk badges), 5px (2, cards), 8px and 3px. The red buttons over photographs are pills in the capture; their radius value was not isolated by the extractor.

## Components

- Navigation link: `#af1217`, Kanit 16px at 400, 45px tall.
- Card: white fill, `#434343` text, 5px radius, padding 5px, shadow `rgba(0, 0, 0, 0.05) 0px 10px 30px 10px`.
- Fund card: maroon fund code, Thai description, NAV value in bold with date, small change number in red, and a circular dark-red risk badge (numbers 7 and 6 in the capture).
- NAV table: grey header text, hairline-separated rows, negative changes `#ff0000`, positive `#008000`.
- Pill buttons on photo tiles ("ดาวน์โหลด", "ดูรายละเอียด", "เริ่มเลย") in red with white text.
- Service tile: icon, English name (Smart Trade, PVD Online, MFC Avenue) and a Thai descriptor.

## Design System Architecture

No public design system or brand guideline was found; the home page HTML was opened and no such link is present. The de-facto system is a WordPress-based theme (root variables include `--wp--preset--*`, and the loaded fonts include `porto` and `dashicons`) with a Bootstrap-derived variable layer (`--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--primary`, `--secondary`, `--danger`, `--success`) and custom `--of-font-*` size variables (`--of-font-headline: 18px`, `--of-font-subheadline: 16px`, `--of-font-text: 13px`). Brand red enters the theme through `--primary` and `--secondary`.

## Do's and Don'ts

Do use `#af1217` for links, dates and bands, and maroon `#911a2a` for headings. Do keep body text light (300) at 14px in Kanit. Do show NAV increases in `#008000` and decreases in `#ff0000`. Do give cards a soft, wide, low-opacity shadow.
Don't use `#ff0000` as a brand or button color. Don't use the theme's cyan `#2ac3ed` or link blue `#3968f0`. Don't treat the M-GMEMORY dialog, the scrim or its checkbox as brand UI.

## Responsive Behavior

The 390px mobile pass measured: h1 20px at 500, h2 20px at 400, body text 14px at 300, and a navigation bar with `#575757` background, 16px text and 52px height. Mobile font sizes recorded: 14px, 10px, 13px, 20px, 12px and 16px. Column counts, the NAV table and the hero on mobile were not measured.

## Iteration Guide

1. White canvas, `#333333` text, `#f2f3f5` panels.
2. Kanit: 14px at 300 body, 20px headings in `#911a2a`.
3. `#af1217` for navigation, dates and the red band.
4. Cards with 5px radius and the soft 30px shadow.
5. Re-measure before adding new values.

### Imagery and voice

Imagery mixes flat vector illustrations (small people-with-charts figures on the service tiles and the Account Opening card) with dark, moody stock photography on the four download tiles (coins and a figure, a chart with a red arrow, a keyboard, a silhouette of a person) and city and chip imagery in the hero. Microcopy is practical Thai with English product names: benefit lines such as "ตัวช่วยเสริมให้เส้นทางการลงทุนของคุณเติบโตได้ตามเป้าหมายที่ตั้งไว้", "เปิดบัญชีและซื้อ-ขายกองทุนด้วยตัวเอง ผ่านแอป MFC Wealth", and compact risk labels ("ความเสี่ยงสูง") beside a numeric badge. Dates throughout use the day/month/Gregorian-year format (for example 08/10/2026), shown in red in the announcement lists, and long Thai fund names are truncated with an ellipsis inside the lists.
