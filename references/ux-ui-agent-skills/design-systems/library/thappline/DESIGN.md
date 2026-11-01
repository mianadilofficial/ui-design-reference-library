---
version: alpha
name: Thai Petroleum Pipeline Company Limited (Thappline)
category: "Thai Brands"
description: "Corporate site of Thai Petroleum Pipeline Co., Ltd. (บริษัท ท่อส่งปิโตรเลียมไทย จำกัด) in Prompt only, with a 120px display headline, 18px body, blue #0092df and #2992df on white, footer #1c6ba3, 24px-radius stat cards with #d6d6d6 borders and a soft 9.899px offset shadow."
colors:
  canvas: "#ffffff"
  ink: "#404040"
  primary: "#0092df"
  on-primary: "#ffffff"
  blue-text: "#2992df"
  surface-footer: "#1c6ba3"
  surface-blue: "#306dd0"
  surface-pale: "#f5fbfe"
  ink-grey: "#525252"
  ink-on-dark: "#ffffffcc"
  nav-text: "#585858"
  card-text: "#006093"
  card-border: "#d6d6d6"
  accent-gold: "#dbbc38"
  accent-green: "#90bf6e"
  accent-red: "#e56c6c"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 120px
    fontWeight: 600
    lineHeight: 120px
  display-mobile:
    fontFamily: Prompt, sans-serif
    fontSize: 38px
    fontWeight: 600
    lineHeight: 38px
    letterSpacing: 2px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
  nav:
    fontFamily: Prompt, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
rounded:
  xs: 3px
  sm: 5px
  md: 12px
  lg: 24px
  xl: 25px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 7.2px
  s5: 10px
  s6: 13px
  s7: 15px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  nav:
    backgroundColor: "{colors.surface-blue}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.card-text}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.card-border}"
  news-card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.1) 9.899px 9.899px 30px 0px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
---

## Overview

This is the home page of **Thai Petroleum Pipeline Company Limited** (Thai: บริษัท ท่อส่งปิโตรเลียมไทย จำกัด; page title "Thai-Pipeline – thai-pipeline"; the logo reads "THAPP LINE"), served at `https://www.thappline.co.th/?lang=th`. The page copy presents a pipeline operator that moves petroleum products between Rayong, Map Ta Phut, Chonburi, Si Racha, Chachoengsao, Bangkok, Pathum Thani, Lam Luk Ka, Ayutthaya and Saraburi; headline messages are "Empowering Energy for Sustainable Living" and "TRANSPORTING SUSTAINABLE FUTURE", and a "35 year anniversary" campaign opens the page. The footer gives the head office and Lam Luk Ka depot address in Pathum Thani.

Structure in the capture: a thin utility bar (contact numbers 02 034 9199 | 02 533 2190, emergency line 1800 - 253301, search icon, Thai flag with TH) over a white main header with the logo and eight Thai links (หน้าแรก, รู้จักเรา, ระบบปฏิบัติการ, ความยั่งยืนขององค์กร, สื่อประชาสัมพันธ์, แจ้งเหตุฉุกเฉิน, ติดต่อเรา, ร่วมงานกับเรา); the first link is in blue. A bright blue hero carries a 35th-anniversary emblem and an illustration of a green globe with refinery tanks, wind turbines and a city, with the headline "35 year anniversary" in 120px white type. Two stat cards follow side by side: "สถิติความปลอดภัย" (safety statistics, 23,551,101 man-hours, data as of 31/08/69) and "ฉุกเฉินโทร" (emergency call, 1800 - 253301). Then a full-bleed blue band with "TRANSPORTING SUSTAINABLE FUTURE" and "แนวท่อส่งน้ำมัน" (pipeline route) next to an animated headline, a vertical station timeline (white and green dots joined by a dotted line, the selected station in gold) and a night photograph of the terminal. Gallery and news cards close the page. A cookie "ACCEPT" control is on the page and is not brand UI. The capture was taken mid-animation: some headline text wraps one or two letters per line and overlaps adjacent blocks, so the large type sizes below are the animated headline's measured sizes.

Voice: institutional and safety-first, with bilingual English slogans and large figures.

## Colors

`canvas` is #ffffff (6482 area weight) and `ink` #404040 the Thai body text (97 characters). The brand blue family is measured as text and fill: `primary` #0092df (122 characters, nav links and phone numbers), `blue-text` #2992df (501 characters, the most-read non-white text) and `card-text` #006093 (the dark blue of the stat-card headings). `surface-footer` #1c6ba3 is the footer background (475 weight) and `surface-blue` #306dd0 a second measured blue area (179). `surface-pale` #f5fbfe (64 weight) is a very light blue panel. White text (2656 characters) carries the hero and footer, with `ink-on-dark` #ffffffcc for secondary lines on blue. `ink-grey` #525252 and `nav-text` #585858 are secondary greys; `card-border` #d6d6d6 is the 1px stat-card border.

Status accents measured in the station timeline and stat figures: `accent-gold` #dbbc38 (the highlighted station label, 20 characters), `accent-green` #90bf6e (3 weight, the green dots and the safety figure's colour family) and `accent-red` #e56c6c (2 weight, the emergency-number figure).

The stylesheet also declares a theme palette as variables (--global-palette1 #2B6CB0, palette2 #215387, palette3 #1A202C, palette4 #2D3748, palette5 #4A5568, palette6 #718096, palette7 #EDF2F7, palette8 #F7FAFC, palette9 #ffffff, plus --body #f1f3f6). Those declared values do not match the blues the page actually renders, so they are not used as tokens.

## Typography

Prompt is the only brand face (3531 of the measured characters), loaded in weights 300, 400, 500, 600 and 700 and declared `Prompt, sans-serif`; icon fonts are Font Awesome 5 Free, "elementskit" and "jkiticon", and Roboto appears on 4 characters (a map or third-party control).

Measured scale: `display` 120px / 120px at 600 (the "35 year anniversary" h2); `display-mobile` 38px / 38px at 600 with 2px tracking, measured on the "TRANSPORTING" headline at 390px; `body` 18px / 28.8px at 400 (1925 characters, the dominant size); `nav` 14px / 14px at 500 for the measured nav anchors. Other measured sizes: 16px (677 characters), 12px (336), 24px (155, the footer and card headings), 14px, 10px and 36px. Very large headline runs (102px and 100px with 2px tracking, 56px and 40px / 28px with 10px tracking) belong to the animated hero lettering. Weights: 400 (2460 characters), 500 (622), 300 (280), 600 (190).

## Layout

The page is 1280px wide and 4733px tall. The header is 140px tall including the utility bar. The two stat cards split the row, each 634px wide and 211px tall in the measurement. The route section is a two-column split: a narrow blue timeline column and a wide photograph. Measured gaps are 20px (50 uses), 16px (22), 10px and 13px; paddings 16px (26 uses), 15px (25), 10px (13), 7.2px (11), 18px (11) and 24px (8).

## Elevation & Depth

One shadow was measured: `rgba(0, 0, 0, 0.1) 9.899px 9.899px 30px 0px` (9 uses), a diagonal soft shadow on the white news cards (12px radius, 640px wide). The stat cards have no shadow and use a 1px #d6d6d6 border instead. Photography and blue colour fields provide the rest of the depth.

## Shapes

Radii measured: 3px (11 uses), 12px (9), top-only 12px (9, card image tops), 5px (9), 50% (7, timeline dots and icon buttons), 25px (4) and 24px (2, the stat cards). Cards are generously rounded; the timeline uses circles; buttons beyond the card family were not measured on desktop.

## Components

**Stat card.** White, 24px radius, 1px #d6d6d6 border, centred 24px-class heading in #006093, a large letter-spaced figure (green for safety hours, red for the emergency number) and a small data-date caption.

**News card.** White, 12px radius with a top-rounded image, soft diagonal shadow, a title and an "อ่านต่อ" link.

**Navigation.** White header, Prompt 14px / 500 Thai links with small dropdown chevrons, the active link in #0092df; utility bar with phone numbers in #0092df.

**Station timeline.** Vertical dotted line with circular nodes (white, green, gold when selected) and station labels in white 12-14px Prompt; sub-items marked with small red arrow circles.

**Footer.** `surface-footer` #1c6ba3, white 24px / 500 company name and address.

## Design System Architecture

No public design system or brand guideline is linked from the page read (https://www.thappline.co.th/?lang=th). The stylesheet declares WordPress preset variables (--wp--preset--*) and theme variables (--global-palette1 to 9, --global-font-size-*), and loads an icon font named elementskit. The declared palette is the theme's default and is not what the rendered page uses; the real colour system is the page-level blues plus a gold, green and red accent set.

## Do's and Don'ts

- Do keep Prompt as the only family, 18px / 28.8px body in #404040 on white.
- Do use blue #0092df for links and navigation, #1c6ba3 for the footer and white type over blue photography.
- Do give data cards a 24px radius with a 1px #d6d6d6 border, and show figures large and letter-spaced.
- Don't use the declared --global-palette values as brand colours.
- Don't copy the animated split-letter headline or the cookie ACCEPT control as components.
- Don't add shadows to stat cards; only the news cards carry the diagonal shadow.

## Responsive Behavior

Measured at 390px: the headline "TRANSPORTING" renders at 38px / 38px, weight 600, 2px tracking, in white at 80 percent alpha (#ffffffcc); a "View All" link measures 16px / 16px at weight 400 in #707070 on #f8f8f8 with 15px 30px padding and a 46px height. The mobile pass recorded no layout data (header links, menu toggle, card columns), so navigation and card reflow are not measured.

## Iteration Guide

1. Keep white canvas, #404040 text, #0092df links and a #1c6ba3 footer.
2. Use Prompt at 18px / 28.8px body; reserve 120px display for campaign headlines only.
3. Stat cards: 24px radius, #d6d6d6 border; news cards: 12px radius with the diagonal shadow.
4. Use gold, green and red only as status accents in the timeline and figures.
5. Run `node web/scripts/verify-designs.mjs --slug=thappline` after edits.
