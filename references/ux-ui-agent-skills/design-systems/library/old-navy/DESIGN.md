---
version: alpha
name: Old Navy
category: "Fashion & Apparel"
description: "Old Navy storefront (oldnavy.gap.com): white canvas, deep navy #05274c pill buttons with 999px radius and 12px 32px padding, black #000000 text, orange-red #ee4110 accent, set in the ON Sans family (Display 55.7px headline, Text 12-14px UI), flat surfaces and photography-led bands."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#05274c"
  on-primary: "#ffffff"
  surface-2: "#ee4110"
  ink-3: "#4a4a4a"
  ink-5: "#666666"
  ink-6: "#003764"
  hairline: "#cecece"
typography:
  display:
    fontFamily: "\"ON Sans Display v1\""
    fontSize: 55.7333px
    fontWeight: 400
    lineHeight: 59.7333px
  display-mobile:
    fontFamily: "\"ON Sans Display v1\""
    fontSize: 32px
    fontWeight: 400
    lineHeight: 36px
  heading:
    fontFamily: "\"ON Sans Text\", sans-serif"
    fontSize: 20.4229px
    fontWeight: 700
    letterSpacing: 1.2px
    textTransform: uppercase
  subheading:
    fontFamily: "\"ON Sans Text v1\""
    fontSize: 18px
    fontWeight: 700
  body:
    fontFamily: "\"ON Sans Text v1\""
    fontSize: 13.6952px
    fontWeight: 400
    lineHeight: 17.6952px
  button:
    fontFamily: "\"ON Sans Text v1\""
    fontSize: 12px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: 0.12px
  nav:
    fontFamily: "\"ON Sans Text v1\", sans-serif"
    fontSize: 10px
    fontWeight: 400
    letterSpacing: 0.1px
  input:
    fontFamily: "\"ON Sans Text v1\""
    fontSize: 14px
    fontWeight: 400
    letterSpacing: 0.16px
rounded:
  xs: 2px
  sm: 2.5px
  md: 6px
  lg: 7.5px
  xl: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 6px
  s6: 7.2px
  s7: 8px
  s8: 10px
  s9: 11.2px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 32px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 32px
    height: 40px
  nav:
    textColor: "{colors.hairline}"
  nav-link:
    textColor: "{colors.hairline}"
    typography: "{typography.nav}"
    padding: 0px 16px
  text-input:
    textColor: "{colors.primary}"
    typography: "{typography.input}"
    height: 17px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

Old Navy's home page (https://oldnavy.gap.com/, title "Old Navy | Affordable Clothing for Women, Men, Kids & Baby") is the storefront of a Gap Inc. brand. The top utility strip links the sister brands Gap, Old Navy, Banana Republic and Athleta and carries "FREE SHIPPING ON $50+ FOR REWARDS MEMBERS". Below it sit a promotional ribbon ("Online Exclusive, Ends 10/8 | Extra 20% Off Purchase"), the header with the OLD NAVY wordmark, a rounded search field ("Search for your new fave"), Membership Program, Find a Store and Gift Cards, and a category row: New & Trending!, Family Pajamas, Jeans, Activewear, Women, Men, Girls, Boys, Toddler, Baby, Maternity, Gifts, Beauty, Today's Deals!.

The measured hero headline is "50% Off Early Giftober Deals" in the extraction; the stored capture shows a rotating hero reading "Go For Indigo" with "Shop Dark Denim" and "Shop Women's Jeans" buttons, so the hero is a carousel and the text depends on the slide at capture time. Under it, a "More Fall Must-Haves" row of eight category tiles (New Arrivals, Halloween, Jeans, T-shirts, Activewear, Sweatshirts, Sweaters, Pants) and a full-bleed fashion video, then a blue band for the Joseph Altuzarra collaboration with a white pill button "Shop The Collab". The voice is playful, casual and value-led: "Jingle Jammies Are So Back", "Pajamas from $9", emoji in the Gifts menu label.

## Colors

- **Canvas `#ffffff`** is the page and the largest background area (3652 units). A translucent white `#ffffffbf` (492 units) was a skip-link background and is not a brand surface.
- **Primary `#05274c`**, a deep navy, fills every pill button (Women's Jeans, Women's Tops, Let's Text, Sign Up) and is also the H1 and body-paragraph color on the page; it is the second most-read text color (881 characters). **On-primary `#ffffff`** is the label color.
- **Ink `#000000`** is the most-read text (1018 characters) and the H2 and H3 color. **Ink-3 `#4a4a4a`** (369 characters) and **ink-5 `#666666`** (110) are the secondary text tones.
- **Surface-2 `#ee4110`** is a bright orange-red area (262 units), the strongest accent measured. **Ink-6 `#003764`** is a deeper blue text color (87 characters) that matches the cross-brand drawer variable `--crossbrand-valueDrawer-blu1`. **Hairline `#cecece`** is the border color and the text color of the top brand strip.
- Root variables also declare `--color-brands-old-navy-test-brand-3: #d9e6ef`, which equals the pale blue the pill button turns to on hover, and `--color-brands-old-navy-test-brand-1-70: #506882`, `--crossbrand-b1: #0466ca`, `--crossbrand-r2: #c82828`. The last three were not found in the rendered color lists, so they are declared-only.
- A cookie and privacy pop-up (white card, 2.5px radius, `0 0 18px` shadow) was open in the capture and is excluded.

## Typography

Old Navy uses the in-house **ON Sans** superfamily: ON Sans Text (weights 100-500 and 600-900 variable ranges loaded), ON Sans Text v1, ON Sans Display v1 (400) and ON Sans Display Condensed v1 (900, 18 characters). Characters: ON Sans Text v1 1739, ON Sans Text 524, ON Sans Display v1 490, Open Sans 8.

- **Display (H1):** ON Sans Display v1, 55.7333px, weight 400, line-height 59.7333px; mobile 32px, line-height 36px.
- **Heading (H2):** ON Sans Text 20.4229px, weight 700, letter spacing 1.2px, uppercase (mobile 17px).
- **Subheading (H3):** ON Sans Text v1 18px, weight 700.
- **Body:** 13.6952px, weight 400, line-height 17.6952px (mobile 12px, line-height 16px).
- **Button:** 12px, weight 700, line-height 16px, letter spacing 0.12px.
- **Nav strip:** 10px, weight 400, letter spacing 0.1px.
- **Input:** 14px, weight 400, letter spacing 0.16px.

Letter spacing scales with size at about 1% (12px/0.12px, 14px/0.14px, 16px/0.16px, 24px/0.24px). The most used sizes by characters are 12px (1037), 14px (359), 13.12px (322) and 12.339px (228). The page also uses a 76.95px size in the letter-spacing list for the very large display lettering.

## Layout

The page is 5736px tall at 1280px. It runs as full-width bands: utility strip, promo ribbon, header, navy category-headline band ("Women's Jeans from $25" in the capture), a two-up hero, a category tile row, a full-bleed video, a blue editorial band, and a three-tile promotional row. Gaps: 16px (54 occurrences), 8px (44), 32px (6), then 2, 4 and 24px. Paddings: 16px (52), 12px (25), 32px (18), 24px (11), 8px (11), 14px, 13px and 64px. Buttons have 12px 32px padding. Root variables expose a spacing scale (for example `--spacing-for-later-component-variables-275: 22px`) and a `--border-radius-050: 4px`.

## Elevation & Depth

Interface surfaces are flat: the only box shadow measured, `rgba(0,0,0,0.2) 0px 0px 18px 0px`, belongs to the cookie pop-up and is excluded. Depth in the page comes from full-bleed photography, color bands (navy, light blue, bright blue) and pill buttons on photos.

## Shapes

The signature shape is the pill: radius 999px on 10 elements, including all primary buttons. Other radii: 6px (2 elements), 24px (1, the search field in the capture is a rounded rectangle), 7.5px, 2.5px, 2px and one `0px 0px 3px 3px` value. Category tiles in the capture have square corners.

## Components

- **Button primary and secondary:** navy `#05274c` fill, white text, ON Sans Text v1 12px weight 700, radius 999px, padding 12px 32px, height 40px. In the capture, buttons on photos are white pills with navy text ("Shop Dark Denim", "Shop The Collab"). On hover the outlined "Shop Family Matching Pajamas" pill changes from white to `#d9e6ef` background with navy text, keeping its 999px radius and 40px height.
- **Text input:** navy text, ON Sans Text v1 14px, 17px line box; the search field is a rounded outlined box with a magnifier icon.
- **Nav:** a 10px light-grey (`#cecece`) brand strip, then the category row in navy text; "Today's Deals!" is red and "Gifts" carries an emoji.
- **Footer:** white background with black text.

## Design System Architecture

No public Old Navy design-system or brand-guideline page is linked from https://oldnavy.gap.com/ (WebFetch of the page found only the logo and Gap-hosted image assets, and its output was truncated, so a link elsewhere cannot be ruled out). The shipped CSS reveals a shared Gap Inc. token layer: 400 root variables with prefixes `--crossbrand-*` (shared across Gap, Banana Republic and Athleta, for example `--crossbrand-font-size-display-md: 18px`, `--crossbrand-letter-spacing-minor: .01em`, `--crossbrand-color-neutral-dark: #333`), `--color-brands-old-navy-*` (brand colors) and numeric scales such as `--color-blue-700: 55 101 152` stored as space-separated RGB channels, `--border-radius-050` and `--font-letter-spacing--40: -.4px`.

## Do's and Don'ts

- Do use pill buttons (999px) with 12px 32px padding, navy on white or white on navy.
- Do set the H2 in uppercase ON Sans Text 700 with 1.2px tracking.
- Do pair navy `#05274c` text with white surfaces and let photography carry color.
- Do use bright color bands for editorial or collaboration moments.
- Don't copy the pop-up shadow or the 2.5px pop-up radius onto page components.
- Don't use declared-only variables such as `#0466ca` without measuring them on the page.
- Don't present sister-brand strip links as Old Navy navigation.

## Responsive Behavior

Measured at 390px: H1 ON Sans Display v1 32px with a 36px line-height, H2 17px at weight 700, body 12px, and the primary pill button unchanged (12px, radius 999px, padding 12px 32px) with the text "Shop Family Matching Pajamas". The brand strip text stays 10px. Mobile text sizes by characters are 12px (1104), 14px (471), 16px (195), 18px (195), 10px (103) and 32px (65). Breakpoint values and the mobile menu pattern were not measured.

## Iteration Guide

1. Begin with white canvas, black and navy text, and navy pill buttons.
2. Use ON Sans Display for large promotional headlines and ON Sans Text for everything else.
3. Keep letter spacing near 1% of size for text and 1.2px for uppercase H2.
4. Add the orange-red `#ee4110` only where a measured accent is needed, since it covers a small area.
5. Record new measurements in SOURCES.json before adding tokens.
