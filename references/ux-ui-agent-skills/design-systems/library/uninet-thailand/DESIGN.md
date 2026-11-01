---
version: alpha
name: UniNet
category: "Thai Brands"
description: "UniNet Thailand (uni.net.th) home page measured live: Mitr Thai typeface at 16 to 44.5px, white canvas with #000000 text, orange #e1690f pill buttons (100px radius, 50px tall) with #05080f labels, a #05080f dark ThaiLIS band with #dddddd text, and a #f2f2f2 footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#e1690f"
  on-primary: "#05080f"
  surface-2: "#f2f2f2"
  ink-2: "#dddddd"
  ink-3: "#666666"
typography:
  display:
    fontFamily: Mitr
    fontSize: 44.5px
    fontWeight: 500
    lineHeight: 51.175px
    letterSpacing: 0.16px
  display-mobile:
    fontFamily: Mitr
    fontSize: 39.16px
    fontWeight: 500
    lineHeight: 45.034px
    letterSpacing: 0.1408px
  body:
    fontFamily: Mitr
    fontSize: 17px
    fontWeight: 400
    lineHeight: 27.2px
    letterSpacing: 0.16px
  button:
    fontFamily: Mitr
    fontSize: 16px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: 0.3px
  nav:
    fontFamily: Mitr
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
    letterSpacing: 0.16px
  link:
    fontFamily: Mitr
    fontSize: 22px
    fontWeight: 600
    lineHeight: 27.5px
    letterSpacing: 0.16px
rounded:
  xs: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 10px
  s3: 15px
  s4: 19.19px
  s5: 20px
  s6: 22px
  s7: 26px
  s8: 40px
  s9: 108px
  s10: 110px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 26px
    height: 50px
  button-primary-hover:
    textColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    boxShadow: rgba(13, 30, 53, 0.1) 0px 14px 47px 0px
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
---

## Overview

This DESIGN.md documents the UniNet home page measured from https://www.uni.net.th/ (page title "หน้าหลัก - UniNet", i.e. "Home - UniNet"). UniNet is the education network operated by the Office of Information Technology Services for Educational Development (the footer names "สำนักงานบริหารเทคโนโลยีสารสนเทศเพื่อพัฒนาการศึกษา"). The site is a WordPress build (stylesheet variables include `--wp--preset--*`, `--dt-*` theme variables and Complianz cookie variables). A first measurement caught the cookie-consent popup; the page was re-measured with the Thai batch settings and the popup and its colours are not used here.

The page structure in the capture: a thin top bar with "ติดตามเรา" (follow us) social icons, the email staff@uni.net.th and the phone +66 2232 4000; a white main header with the UniNet logo and links (ข่าวประชาสัมพันธ์, เกี่ยวกับ, NOC, DATA CENTER, ThaiLIS, ThaiREN, Short URL, Services, ติดต่อ); a dark hero slider; a "บริการต่างๆ" (services) band with four icon-and-text service blocks and an orange "ดูรายละเอียด" (view details) pill; a large orange quotation mark pair around the mission statement; a dark ThaiLIS band; a news section of three large photo posts; a grid of partner logos; and a grey footer. The voice is formal Thai institutional copy with English product names (Co-location, Eduroam, Virtual Private Server, Union Catalog).

## Colors

`canvas` #ffffff dominates (5,368 area weight). `primary` #e1690f is the orange of buttons, the "บริการต่างๆ" headline, the quote marks and a bottom border (570 text characters, 7 background area weight). `on-primary` #05080f is the label colour on the orange button and also a dark section fill (799 area weight) and header text colour. `surface-2` #f2f2f2 is the footer (882). A translucent dark navy #0e1422bf (930) was measured as an overlay background. Text colours by character count: `ink` #000000 (1,197), `ink-2` #dddddd (1,102, light text on dark bands), `ink-3` #666666 (696, matching the theme's `--dt-base-color` #666666), `primary` #e1690f (570), `on-primary` #05080f (168), white (46) and a brighter orange #ff801e (12). Borders measured: #000000 (4), #bdbdbd59 (4) and #e1690f (1).

## Typography

The only family is Mitr, a Thai-Latin display-leaning sans, loaded at weights 400, 500, 600 and 700 (with Font Awesome 6 icon fonts). It carried 3,963 measured characters. Measured roles: `display` 500 at 44.5px / 51.175px with 0.16px letter spacing; `body` 400 at 17px / 27.2px with 0.16px; `button` 500 at 16px / 48px with 0.3px; `nav` 400 at 16px / 25.6px with 0.16px; `link` 600 at 22px / 27.5px (service titles such as "อินเทอร์เน็ตเพื่อการศึกษา"). Sizes by character count: 16px (2,587), 22px (696), 17px (471), 28px (149), 44.5px (60). Weights by character count: 400 (3,131), 600 (696), 500 (100), 800 (24), 700 (12). Mitr is an open Google Fonts typeface; its Latin glyphs are used for English product names too.

## Layout

The page measures 1280px wide and 8,624px tall at the desktop width. The header is 112px tall. Service blocks sit in a two-by-two grid on the right half with a headline and button column on the left; the news section stacks full-width photographs with a headline overlay and a text excerpt below; the partner logos form a multi-row grid. Measured paddings include 24px (15 uses), 10px (12), 108px (8), 110px (4), 40px (3), 64px, 26px, 20px, 15px, 4px and 22px; the only measured gap is 20px. The generated `spacing` tokens reproduce these values.

## Elevation & Depth

One shadow was measured: `rgba(13, 30, 53, 0.1) 0px 14px 47px 0px` (3 uses), a very soft, wide drop on circular icon controls. The stylesheet also contains heavier shadows (`rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px` and `0 0 4rem rgba(0,0,0,.1)`) that did not render on the measured elements. Depth otherwise comes from photographs and from the contrast between white sections and the dark `on-primary` band.

## Shapes

Measured radii: 50% (8 elements), 100% (3) and 100px (3). `rounded` tokens: `xs` 100px for the orange button and `pill` 9999px. Icons in the service blocks are circular outlined badges; the primary button is a fully rounded pill at 50px tall.

## Components

`button-primary` ("ดูรายละเอียด"): #e1690f fill, #05080f Mitr 500 16px label, 100px radius, 0px 26px padding, 50px tall, 143px wide; on hover the label turns white (`button-primary-hover`). A white variant with the same type, radius and size was also measured. `nav` is a white 112px header; the measured `nav-link` is a 25px circular icon with the soft 47px shadow. `link` titles are 600-weight 22px black. `footer` is #f2f2f2 with black text, 649px tall, listing the office name, address, phone, email and opening hours.

## Design System Architecture

No public design system or brand-guideline page was opened for UniNet. The shipped CSS shows a WordPress theme with `--dt-whi-color` #ffffff and `--dt-base-color` #666666 theme variables, WordPress block presets, Font Awesome 6 and a Complianz cookie plug-in set of variables (`--cmplz_*`). The de-facto system is a single typeface, orange accent with near-black, a pill button and circular icon badges.

## Do's and Don'ts

Do use #e1690f for the single accent and #05080f for dark bands and button labels. Do set all text in Mitr. Do use 100px-radius pill buttons at 50px height. Do use #dddddd text on the dark band.

Don't document the cookie-consent popup or its blue and orange buttons as brand UI. Don't use shadows on cards or buttons. Don't use weights below 400. Don't set Thai body copy below the measured 14.96px on mobile.

## Responsive Behavior

The mobile pass (390px) recorded: h1 and h2 at 39.16px / 45.034px weight 500 (`display-mobile`), letter spacing 0.1408px; body 14.96px / 23.936px; the primary button at 14.08px with 126px by 44px; and a 390px by 122px header. Menu form and layout collapse are not measured.

## Iteration Guide

1. White canvas, black text, #e1690f accent, #05080f dark band, #f2f2f2 footer.
2. Everything in Mitr; 500 for display at 44.5px, 400 for body at 17px.
3. Orange 100px-radius pill buttons, 50px tall.
4. Use circular outlined icon badges for services.
5. Gate with `node web/scripts/verify-designs.mjs --slug=uninet-thailand`.

## Additional Measurements

Hero imagery in the capture is a black slider; news imagery consists of event photographs with a white caption headline over a gradient. Partner logos appear in colour on white. Letter spacing is 0.16px on most roles and 0.3px on buttons; no text transforms were recorded. The page includes a back-to-top control and a cookie-settings control, which are excluded from this design.

The services band introduces four offerings with an icon badge, a bold English or Thai title and a short Thai description: internet for education (international and national internet exchange connectivity with bandwidth sized to each institution), Co-location for network equipment, Virtual Private Server over a hypervisor-based platform, and Eduroam roaming Wi-Fi for universities. The ThaiLIS band lists TDC, Reference Database, Union Catalog and Auto Library in the same icon-and-text pattern on the dark #05080f background with #dddddd body text and white titles. The mission statement is set in 500-weight Mitr between two oversized orange quotation marks, and the news headlines under the photographs are orange-underlined links. All of these use the same measured type, colours and radii listed above; no additional tokens were introduced.
