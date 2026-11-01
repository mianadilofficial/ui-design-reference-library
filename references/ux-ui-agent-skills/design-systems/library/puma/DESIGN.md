---
version: alpha
name: PUMA Thailand
category: "Sports & Fitness"
description: "PUMA's Thai storefront (th.puma.com, puma.com redirects here) is monochrome: black (#000000) uppercase 15px/600 Shop Now buttons with square corners, #181818 ink on white, Noto Sans Thai 700 uppercase headlines at 56px and 24px, FFDINforPuma for the cookie button, and no shadows."
colors:
  canvas: "#ffffff"
  ink: "#181818"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-grey: "#818181"
  ink-soft: "#222222"
  ink-faint: "#adadad"
  hairline: "#fafafa"
  nav-text: "#191919"
  text-input-border: "#ffffff33"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", -apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 56px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", -apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 22px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Noto Sans Thai\", -apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 24px
    textTransform: uppercase
  button:
    fontFamily: "\"Noto Sans Thai\", -apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 15px
    letterSpacing: 0.4px
    textTransform: uppercase
  nav:
    fontFamily: "\"Noto Sans Thai\", -apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "\"Noto Sans Thai\", -apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  none: 0px
  xs: 2px
  sm: 4px
  pill: 9999px
spacing:
  s1: 1.6px
  s2: 3px
  s3: 8px
  s4: 10px
  s5: 13px
  s6: 14px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 23px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 13px 16px
    height: 43px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-soft}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.ink-soft}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 11px 50px 13px 15px
    height: 47px
    borderColor: "{colors.text-input-border}"
  footer:
    textColor: "{colors.canvas}"
---

## Overview
Measured from https://th.puma.com/ , where the queued URL https://www.puma.com redirected (final URL th.puma.com, document title "PUMA แบรนด์ชุดกีฬา แบรนด์เสื้อผ้ากีฬา และรองเท้ากีฬาระดับโลก"). The name is therefore PUMA Thailand, PUMA's own regional storefront. The page is 9354px tall. A top strip announces "จัดส่งฟรีสำหรับการสั่งซื้อมากกว่า ฿1,500" (free shipping over 1,500 baht); the header offers eight visible links (Puma home, women, men, kids, lifestyle, sports and others), search, cart and account, plus a menu toggle.

The capture is an editorial retail page: a campaign video hero with a large "SPEEDCAT" headline, rows of product carousels (Speedcat sneakers at prices such as ฿ 3,500.00 and ฿ 4,200.00), a Papaya motorsport banner ("A BATIK TAKE ON TEAM PAPAYA" with a McLaren Mastercard Formula 1 team collection), "THE WINNING FORMULA" and "F1 SINGAPORE JERSEY" feature tiles, "PUMA X THE POWERPUFF GIRLS" with the line "SUGAR, SPICE, & EVERYTHING NICE", "DEVIATE 4", "DEVIATE PURE" and "DEVIATE ELITE 4" running blocks, and a Thai SEO text paragraph above a black footer. Photography is full-bleed, studio-lit people and product on flat or colored grounds.

A cookie banner ("Puma.com Cookies" with a gold "ฉันยอมรับ" accept button, #ae946d) overlays the capture. It is a consent control: it is not documented as brand UI, and its gold fill was not used as `primary`. `_roleOverrides.ctaPrimary` therefore selects ctaCandidates index 1, the black "ช้อปเลย" (Shop now) link. The voice is short, imperative and promotional, with English product names inside Thai sentences.

## Colors
The palette is black and white with a dark grey ground. Backgrounds by area: #181818 (1379, the dark bands and footer), `canvas` #ffffff (1138), #000000 (11, the Shop now buttons), #ae946d (9, cookie button, excluded) and #ba2026 (1). Text colors by characters: `ink` #181818 (3076), white (359), `ink-grey` #818181 (295, secondary lines), `ink-soft` #222222 (182, links), #000000 (161, headings), `ink-faint` #adadad (139, muted text), `nav-text` #191919 (40), #212529 (36), #ba2026 (10) and #666666 (10). Borders are `hairline` #fafafa (45 uses), white, black, and translucent white #ffffff33 on the dark search field.

`primary` is #000000 with `on-primary` #ffffff, the measured fill and text of the Shop now buttons. The site's root variables list Bootstrap defaults (`--primary: #f00`, `--danger: #c00`, `--blue: #007bff`, `--secondary: #000`); these are framework values: only #000 and the measured colors are used as tokens.

## Typography
The measured families are Noto Sans Thai (4113 chars; weights 400, 500, 600 and 700 loaded) for nearly all text, and FFDINforPuma (195 chars; 400, 500, 700 loaded) which appears on the cookie button. Both stacks continue with -apple-system, system-ui, Segoe UI, Roboto, Helvetica Neue, Arial and sans-serif. FFDINforPuma is the company-licensed face; no public source was opened.

Roles: `display` is the h2 "SPEEDCAT", 56px/56px, weight 700, uppercase (22px on mobile). `subheading` is 24px/24px 700 uppercase ("THE WINNING FORMULA"). `button` is 15px/15px, weight 600, letter-spacing 0.4px, uppercase. `nav` is 16px/24px weight 400. `input` is 14px/21px. Sizes by characters: 16px (3290), 14px (702), 24px (65), 15px (57), 20px (55), 32px (44), 28px (33), 34px (26), 12px (25), 56px (8), 10px (3, tracking 0.5px). Weights: 700 (2956 chars), 400 (1203), 500 (92), 600 (57). Bold uppercase dominates the headings; there is no measured body role on desktop.

## Layout
The header is 102px high. The page is a vertical sequence of edge-to-edge hero bands and product carousels; the measured layout reports up to 22 cards per row (the carousel strips run past the viewport), 8 header links and a visible menu toggle. The footer is 915px tall. Breakpoints in CSS variables: xs 0, sm 544px, md 959px, lg 1199px, xl 1439px. Spacing from paddings: 10px (107 uses), 3px (21), 16px (11), 14px, 32px, 40px, 13px, 1.6px, 20px, 15px, 96px, 60px, 24px. No gap values are measured.

## Elevation & Depth
No shadows are measured. Depth is purely tonal: black and #181818 bands, white product grounds, and photography. Borders are hairline #fafafa around product cards and #ffffff33 around inputs on dark.

## Shapes
Radii by weight: 2px (7, cookie button and input), 50% (6, elements with a circular radius), 4px (2). The Shop now button computes 0px, so the signature button is square-cornered; the shapes elsewhere are crisp rectangles for imagery and circles for controls.

## Components
- **button-primary**: "ช้อปเลย" / "SHOP NOW", #000000 fill and 1px #000000 border, white 15px/600 uppercase text with 0.4px tracking, 0px radius, padding 13px 16px, 43px tall (86px wide).
- **text-input**: the newsletter field on the dark footer, white 14px text, 2px radius, padding 11px 50px 13px 15px, 47px tall, 1px #ffffff33 border.
- **nav / nav-link**: 16px/24px links in #222222; hover turns the text #000000 and adds an underline (measured hover pass).
- **footer**: white text on the dark footer, 915px tall, 16px/24px weight 500 links.
- Cookie accept button (#ae946d, 14px FFDINforPuma): excluded as a consent control.
Focus: the Shop now link shows a 2px solid outline after focus.

## Design System Architecture
The opened homepage text contains no links to brand guidelines, a design system or a press kit, and no public PUMA design system was found. The de-facto system is a Bootstrap-derived stylesheet (about 28 root variables: Bootstrap color names, `--breakpoint-xs` through `--breakpoint-xl` at 0, 544, 959, 1199 and 1439px) with PUMA's own colors expressed directly in component CSS. Because the brand look is carried by photography, black and white and heavy uppercase type, very few custom tokens are exposed.

## Do's and Don'ts
- Do keep UI black, white and #181818; let photography supply color.
- Do set headlines in bold uppercase (56px or 24px) and buttons in 15px/600 uppercase.
- Do use square-cornered black buttons.
- Don't use the cookie banner's gold #ae946d as a brand accent.
- Don't use Bootstrap's #f00 or #007bff variables as brand colors.
- Don't add shadows: none are measured.

## Responsive Behavior
At the 390px mobile pass the h2 "SPEEDCAT" drops to 22px/22px weight 700 uppercase and white; the cookie accept button stretches to 330px wide (47px tall). Mobile font sizes concentrate at 14px (2406 chars), 16px (487), 12px (65), 18px (55) and 22px (52). A menu toggle is visible at the desktop pass; the mobile menu layout is not measured.

## Iteration Guide
1. Build in black, white and #181818 with photography as the only color.
2. Use bold uppercase Noto Sans Thai headlines and a single square black "SHOP NOW" button style.
3. Keep carousel cards flat with #fafafa hairlines; use #adadad for muted text.
4. Treat the cookie banner as a separate consent component.
5. Re-measure with `--batch=web/data/batches/phase2.json --only=puma --force --no-motion` and re-run the gate.

## Imagery and Content Notes
Photography carries the page. The hero is a video still of a young woman with long blonde hair against a pale ground, then product rows show shoes on a flat light-grey ground (Speedcat variants in suede and leather browns, a pale pink and a bright lime Deviate running shoe) and models in jerseys on grey studio sets. Motorsport tiles use saturated blue (McLaren) and red (Ferrari) lighting, with partner logos small at the top of the frame. Each feature tile has a centered bold uppercase title, a small grey caption line, and a single black button below. Product cards show a photo, a two-line Thai product name at 14-16px, a category line such as "รองเท้าผู้ชาย" and a price in baht with two decimals. Thai sentences mix English model names (SPEEDCAT, DEVIATE NITRO, Papaya) and the lower page closes with a long Thai paragraph about PUMA Thailand's official site above the black footer.
