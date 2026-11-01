---
version: alpha
name: Sizzler Thailand
category: "Thai Brands"
description: "Sizzler Thailand (ซิซซ์เล่อร์), the Minor Food Group steakhouse site: deep forest-green canvas #124f31 with #05351d and #064d2c bands, cream #feeed6 nav text, signal red #ec1425, the db_ozone Thai/Latin face at 16px body and 64.6px section titles, and a food-photo-led promo layout."
colors:
  canvas: "#124f31"
  page-largest: "#05351d"
  ink: "#ffffff"
  primary: "#ec1425"
  surface-band: "#064d2c"
  surface-cream: "#eae7db"
  ink-grey: "#808080"
  ink-cream: "#feeed6"
  text-input-text: "#000000"
typography:
  display:
    fontFamily: db_ozone
    fontSize: 34px
    fontWeight: 700
    lineHeight: 27.2px
  heading:
    fontFamily: db_ozone
    fontSize: 64.6px
    fontWeight: 400
    lineHeight: 45.22px
  body:
    fontFamily: db_ozone, sans-serif
    fontSize: 15.98px
    fontWeight: 400
    lineHeight: 20.774px
  nav:
    fontFamily: db_ozone
    fontSize: 12.75px
    fontWeight: 400
    lineHeight: 27.2px
  input:
    fontFamily: sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 19.55px
rounded:
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 8px
  s5: 8.8px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 17px
  s10: 19px
components:
  link:
    textColor: "{colors.ink-cream}"
    typography: "{typography.nav}"
    padding: 2px 0px 0px
  nav:
    textColor: "{colors.ink-cream}"
  nav-link:
    textColor: "{colors.ink-cream}"
    typography: "{typography.nav}"
    padding: 2px 0px 0px
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 0px 40px 0px 15px
    height: 32px
  card:
    backgroundColor: "{colors.surface-cream}"
    textColor: "{colors.ink-grey}"
    padding: 8px 24px 16px
    boxShadow: rgba(32, 29, 17, 0.43) 12px 12px 16px 0px
    transform: matrix(1, 0, 0, 1, 0, -561)
---

## Overview

Sizzler Thailand is the Thai-language site for the Sizzler steak, seafood and salad restaurants operated in Thailand by The Minor Food Group (the footer reads "© 2017 THE MINOR FOOD GROUP PUBLIC COMPANY LIMITED"). It was measured at sizzler.co.th, which redirects to /th. The page title is "Sizzler :: Great Steaks, Seafood and Salad". The page is a restaurant promotion board: a narrow white rounded header with the red-and-white Sizzler logo, a hero banner pair advertising the salad bar and a main-dish add-on, a green membership banner (สมัคร E-MEMBER วันนี้), a news and promotions strip (ข่าวสารและโปรโมชั่น), a brown recommended-menu strip (เมนูแนะนำ), a "stories from royal projects" strip (เรื่องราวดีๆ จากโครงการหลวง), a store-finder map with a green pill button (ค้นหา Sizzler ใกล้คุณ) and a dark-green footer.

The whole page sits in a centred column roughly 735px wide in the capture on a dark-green field, so the site reads like a poster stack rather than a responsive grid. Imagery is dominant: salad plates, grilled steaks, ribs and soft-serve ice cream photographed on dark backgrounds, with large red price numerals (for example the 159.- salad bar offer) and mascot-style Thai headline lettering embedded in the promo banners. Copy is friendly and promotional Thai, with short English labels in the language switch (Thai, Eng).

A cookie notice bar was present in the first capture and was removed from the measurement; it is not brand UI.

## Colors

Measured backgrounds by area: #05351d (793), #064d2c (561), #eae7db (476), #3e8957 (465), #000000 (356), #ffffff (66), #124f31 (31). Text by characters: #ffffff (344), #808080 (173), #feeed6 (157), #064d2c (77), #ec1425 (30). The CSS corpus lists #ffffff (153), #000000 (51), #ac172b (48), #cccccc (19), #222222 (16) and #064d2c (11).

- **canvas #124f31**: the page background around the central column.
- **page-largest #05351d**: darkest green, the largest background-by-area region (promo strip and footer).
- **surface-band #064d2c**: a second green band; it is also the text color of 77 characters on light fields.
- **surface-cream #eae7db**: warm cream card surface.
- **ink #ffffff** and **ink-cream #feeed6**: text on green; the cream is used for the header-top utility links.
- **ink-grey #808080**: secondary text on cream.
- **primary #ec1425**: red used in price numerals, footer policy links and accent text.

The #3e8957 mid green (the membership banner) and the black title bars above the news cards were measured as backgrounds but not promoted to tokens. A yellow (#f1d600) was measured only on the removed cookie button and is excluded.

## Typography

Loaded fonts: db_ozone at weights 400, 500 and 700. It is the only family measured (925 characters). It is a Thai-and-Latin display face; if it is unavailable use a rounded Thai-capable sans-serif. The input field falls back to the generic sans-serif.

Sizes by characters: 17px (220), 20.9952px (173), 19.2px (141), 15.98px (101), 20.23px (77), 25.5px (74), 17.595px (55), 64.6px (54), 21.6px (13), 12.75px (7), 34px (7). Weights: 400 on 469 characters, 500 on 235, 700 on 221. No letter spacing was measured.

- **heading** 64.6px / 45.22px, weight 400: section titles such as ข่าวสารและโปรโมชั่น.
- **display** 34px weight 700: the measured h1 "Sizzler".
- **body** 15.98px / 20.774px.
- **nav** 12.75px / 27.2px: utility links at the top.
- **input** 17px sans-serif: the newsletter email field.

## Layout

The desktop page is 1280px wide and 3142px tall. Content lives in a single central column with a white rounded-corner navigation bar on top. Sections stack as full-column colour bands: banner pair, green membership banner, dark-green news strip with four tall promo cards, brown menu strip with three photographs, a translucent green title bar over a map, and a footer with the logo, four circular social icons, an email field with a grey submit button, a language radio and consent checkboxes.

Paddings by frequency: 8px (19), 20px (12), 5px (8), 8.7975px (6), 16px (4), 12px (4), 19px (4), 17px (4), 80px (2), 24px (2). The measured card padding is 8px 24px 16px.

## Elevation & Depth

Measured shadows: rgba(0, 0, 0, 0.9) 3px 3px 20px 0px (4 uses), rgba(0, 0, 0, 0.32) 0px 10px 24px 4px, and rgba(32, 29, 17, 0.43) 12px 12px 16px 0px on the cream card. A white 1px border (weight 4) outlines the circular social icons. Depth otherwise comes from stacked colour bands and the white header bar floating over the green field.

## Shapes

Measured radii: 50% (4 uses, the circular social icons) and 0px 0px 16px 16px (2 uses, the header bar with square top and rounded bottom). The promo and menu photographs are square-cornered rectangles; the pill button in the map section is visibly rounded in the capture, but its radius was not captured as a value, so only the generated pill token exists.

## Components

**Header bar.** White, rounded bottom corners, with the logo, four green Thai links (เมนูซิซซ์เล่อร์, ข่าวสารและโปรโมชั่น, สาขาซิซซ์เล่อร์, สมาชิกออนไลน์), a gift-card link (บัตรกำนัลเงินสด) and a green badge icon.

**Utility row.** Above the bar: home icon, Thai/Eng radio, text links (เรื่องราวดีๆ, ประวัติ, ร่วมงานกับเรา, คำถามที่พบบ่อย, ติดต่อเรา) in cream #feeed6 at 12.75px, social icons and a cart. A hover probe shows these links turning from #feeed6 to #ffffff.

**Promo card.** A tall poster image under a black title bar with white text.

**Input.** White, black text, 17px, 32px high, 242px wide, with 15px left padding and 40px right padding for an attached submit control.

**Footer.** Dark green, centred logo, circular outline icons, consent links in red.

No filled brand button style was measured, so no button token is declared.

## Design System Architecture

No public design-system or brand-guideline page was found and none is linked from the site. The research used only the measured home page. The de-facto system is a poster-style Thai restaurant template: no root CSS variables (rootVars is empty), one display font (db_ozone) and pixel measurements that include fractional values (8.7975px, 15.98px), which indicate scaled layouts. Tokens in this file are computed-style measurements.

## Do's and Don'ts

- Do build on dark greens (#124f31, #05351d, #064d2c) with white or cream text.
- Do use red #ec1425 for price figures and links, sparingly.
- Do lead every section with large food photography.
- Do keep the header bar white with rounded bottom corners (16px).
- Don't use the cookie-bar black or yellow as brand colors.
- Don't add a second typeface.
- Don't round photographs; none were measured with a radius.

## Responsive Behavior

The mobile pass measured: h1 34px (64px wide), h2 68px (374px wide, ข่าวสารและโปรโมชั่น), body 17px, nav 34px. Mobile character-weighted sizes: 17px (321), 20.592px (173), 19.2px (141), 25.5px (90), 22.1px (55), 68px (54). Breakpoints, navigation collapse and column changes were not measured.

## Iteration Guide

1. Start from #124f31 with a centred column and a white header bar with 16px bottom radii.
2. Add colour bands in #064d2c and #05351d, each with a large 64.6px db_ozone title.
3. Use photography first, text second; put prices in #ec1425.
4. Keep utility links 12.75px in #feeed6.
5. Build the footer in dark green with outline-circle social icons.
6. Gate: node web/scripts/verify-designs.mjs --slug=sizzler-thailand.

## Additional Measurement Notes

The re-measured page reports 189 visible elements and the Thai document language, with a consent banner of the "cc-window cc-banner" type hidden during extraction. The spacing scale in the frontmatter runs from 2px to 19px and reflects the small paddings between icons, labels and links on the utility row, while the 80px and 24px paddings seen in the extraction belong to the larger section blocks and card. When extending the system, keep the green-on-green banding, the cream card surface with its soft offset shadow, and the single db_ozone family across Thai and Latin text.
