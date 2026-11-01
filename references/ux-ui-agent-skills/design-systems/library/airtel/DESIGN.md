---
version: alpha
name: Airtel
category: "Telecom"
description: "Airtel (airtel.in), Indian telecom storefront: black #000000 buttons with #f6f6f6 labels and 8px radius, Tondo and TondoBold type, white and #f7f7fa bands, 16px cards with #e8e8eb borders, 32px wizard pills."
colors:
  canvas: "#ffffff"
  ink: "#292c31"
  primary: "#000000"
  on-primary: "#f6f6f6"
  surface-2: "#f7f7fa"
  surface-3: "#f4f5ff"
  ink-2: "#696b6f"
  ink-3: "#3e4146"
  ink-6: "#075ee8"
  hairline: "#e8e8eb"
typography:
  display:
    fontFamily: Tondo, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: "-0.225px"
  display-mobile:
    fontFamily: Tondo, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.07px"
  heading:
    fontFamily: TondoBold, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14px
rounded:
  xs: 8px
  sm: 14px
  md: 15px
  lg: 16px
  xl: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 13px
  s8: 14px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
    padding: 14px 18px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.ink-3}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
    padding: 14px 18px
    height: 40px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.hairline}"
---

# Airtel

## Overview
Airtel (airtel.in) is an Indian telecom brand; the page title is "Airtel: Wi-Fi, Postpaid, Prepaid, DTH, Bank & Business". The measured home page is 3,939px tall at 1280px and works as a consumer storefront. The very top is a utility strip with three audience tabs (INDIVIDUAL, the active one underlined in red; BUSINESS; INVESTOR) and an "Explore Airtel" menu. Under it, a white navigation bar carries the red swoosh Airtel logo and menus for Wi-Fi, Postpaid, Prepaid, DTH, Airtel Black, Bank, Finance, Help, plus Coverage Map, Service Quality and Account. A hero carousel ("2/11" with circular arrow buttons) shows a slide "Big Data, Bigger Entertainment / Prime, JioHotstar, 19 OTTs & 30GB" with a black "RECHARGE AT ₹200" button, against a red wave and a phone photograph.

Lower sections: "Buy a new connection" (a row of nine round-icon shortcuts, a promo strip "Faster speeds. Just for you." with an UPGRADE NOW outline button), "Recharge or pay bills" (pill tabs Prepaid, Postpaid, DTH, Wi-Fi, Airtel Black, a mobile-number input and a wide black RECHARGE button), a peach promo strip for free data coupons, "Recommended for you" (three white cards with photographs, a small uppercase category, BUY NOW black button and LEARN MORE blue link), and a dark "Find the best Wi-Fi plan for you" wizard with step cards and black or lavender pill choices. A green floating chat button sits at the right edge; it is third-party chrome and is not documented as a token. Photography is lifestyle people with phones and laptops, often against red.

The measured h1 role was mis-detected: the extractor picked a promo line ("That's the Postpaid advantage", 18px) as the largest hero text, so `display` below is that line's style, not a page headline. The visible section titles ("Buy a new connection", "Recharge or pay bills", "Recommended for you") are bold, centered, larger type; their exact size was not recorded as a token. An attempt to read the page with the fetch tool returned only the page title, so copy quoted here comes from the capture.

## Colors
- `{colors.canvas}` #ffffff for most area (7,998 units), `{colors.surface-2}` #f7f7fa (2,098) for alternating bands, `{colors.surface-3}` #f4f5ff (449), plus #e3e5ff (81) and #fbfbff (62) tints for lavender chips.
- `{colors.primary}` #000000: the fill of every measured button (UPGRADE, RECHARGE, GET STARTED, the selected pills), with `{colors.on-primary}` #f6f6f6 as label.
- `{colors.primary-hover}` is not a token; the measured hover for black buttons is the fill #3e4146 (`{colors.ink-3}`) plus a 1px black ring `rgb(0, 0, 0) 0px 0px 0px 1px`.
- Ink: `{colors.ink}` #292c31 (2,358 characters), `{colors.ink-2}` #696b6f (505, secondary text), `{colors.ink-3}` #3e4146 (325), white-ish #f6f6f6 (238), black (132), and `{colors.ink-6}` #075ee8 (79 characters, the blue of LEARN MORE links).
- Red text #ff0000 appears on 28 characters; the logo and hero wave are red in the capture, although the red fill itself was not recorded as a token.
- `{colors.hairline}` #e8e8eb is the card border (8 measured).
- The shipped CSS exposed no root variables.

## Typography
Two Airtel faces: **Tondo** (400) for text and **TondoBold** (700) for headings and buttons. Sizes by characters: 14px (1,307), 12px (876), 18px (658), 32px (446), 16px (216), 20px (129), 10px (37). Weights: 400 (2,507), 700 (1,162). Tracking is negative on larger sizes and positive on small caps: 14px / -0.07px, 18px / -0.225px, 32px / -0.4px, 16px / -0.16px, 20px / -0.3px, 12px / +0.6px (uppercase buttons), 12px / 0.24px and 10px / 0.1px.
- `display` Tondo 18px / 400 / 26px / -0.225px (the promo line detected as h1).
- `display-mobile` Tondo 14px / 400 / 20px / -0.07px.
- `heading` TondoBold 12px / 700 / 14px: the h2 "Quick Access" and button labels. The body element is TondoBold 12px, uppercase, tracking 0.24px, color #000000.

### Voice and microcopy
Calls to action are short and transactional: "RECHARGE AT ₹200", "UPGRADE NOW", "BUY NOW", "LEARN MORE", "GET STARTED", "KNOW MORE", "GET APP". Prices use the rupee sign inline with the offer ("Enjoy unlimited wi-fi at ₹999", "Rs. 799 per month"). Cards open with an uppercase category label (FIBER, POSTPAID ADVANTAGE, PREPAID) and then a one-sentence benefit. The wizard asks plain questions ("How many devices are you looking to connect to your wi-fi?") and answers with a large number and a price ("100 Mbps, Rs. 799 per month"). The tone is direct and benefit-led, written for quick scanning on a dense page.

## Layout
A centered column of about 1,100 to 1,200px with generous section padding (76px recorded on 11 elements) and full-bleed hero and dark sections. Gaps: 16px (31 uses), 4px, 24px, 40px, 41px, 64px, 36px. Padding: 12px (79), 18px (37, the button horizontal padding), 20px, 8px, 14px. Cards sit three across with 16px gaps; shortcut icons sit nine across in the first row.

## Elevation & Depth
Two shadows measured: `rgba(1, 49, 101, 0.1) 6px 20px 50px 0px` (3 elements, large diffuse blue-tinted shadow on feature cards) and `rgba(0, 0, 0, 0.1) 0px 4px 10px 0px` (1). Most cards are flat with a #e8e8eb hairline instead.

## Shapes
Radii by count: 100% (22, circle icons and arrow buttons), 8px (20, `{rounded.xs}`, buttons), 16px (12, `{rounded.lg}`, cards), 32px (12, `{rounded.xl}`, selected wizard pills), 15px top corners (4, card images), 14px (2), 50% (1).

## Components
- **button-primary**: #000000 fill, #f6f6f6 text, TondoBold 12px uppercase with 0.6px tracking, radius 8px, padding 14px 18px, height 40px (36px for GET STARTED). Hover fills #3e4146 with a black 1px ring.
- **wizard pill**: black fill, 32px radius, 44px high ("1-5", "General Browsing", "Gaming").
- **outline button** (UPGRADE NOW): transparent with a dark border, radius pill.
- **card**: white, radius 16px, #e8e8eb border, text #696b6f.
- **link** (LEARN MORE): #075ee8 uppercase.
- **text input**: white with a visible outline, mobile-number field.

## Design System Architecture
No public design system or brand guideline was found on the page, and the fetch of the home page returned only its title, so no further page was opened. The CSS exposes no root variables; the de-facto system is Tondo/TondoBold, black actions, a gray text ramp (#292c31, #3e4146, #696b6f) and a 32/16/8px radius ladder. Sources opened: https://www.airtel.in/ (title only via fetch; full page via extractor).

## Do's and Don'ts
- Do use black buttons with #f6f6f6 labels, 8px radius, uppercase 12px bold.
- Do use Tondo and TondoBold only.
- Do keep section backgrounds alternating white and #f7f7fa.
- Do use blue #075ee8 only for secondary text links.
- Don't treat the chat floating button or cookie elements as brand UI.
- Don't use red as a fill for buttons; the measured buttons are black.

## Responsive Behavior
Measured at 390px: the promo line is 14px / 400 / 20px / -0.07px (from 18px), and the button "KNOW MORE" keeps #000000 fill, #f6f6f6 text, TondoBold 12px, tracking 0.6px, radius 8px. Navigation collapse and column counts were not measured.

## Iteration Guide
Keep to the measured ladder: sizes 10, 12, 14, 16, 18, 20 and 32px only, weights 400 and 700 only, and gaps and paddings from the recorded set (4, 8, 12, 16, 18, 20, 24px). Verify any new component against the live page before adding it.
1. White and #f7f7fa bands, #292c31 text, black buttons.
2. Tondo 400 for text, TondoBold 700 for labels, 12px uppercase buttons.
3. 8px buttons, 16px cards, 32px pills, circles for icons.
4. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=airtel --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=airtel`.
