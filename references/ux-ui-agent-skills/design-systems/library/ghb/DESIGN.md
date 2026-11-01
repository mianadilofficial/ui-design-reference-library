---
version: alpha
name: ธนาคารอาคารสงเคราะห์ (Government Housing Bank, GH Bank)
category: "Thai Brands"
description: "Thai state housing bank site on a white #ffffff canvas with #333333 body ink, orange #e64500 and #fe5000 as the brand colors, Google Sans at 13px to 18px for Latin and Thai text, DB Heaventbold at 24px for the Thai menu, 6px card radius and a #f0f0f0 grey footer band under an orange rule."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#e64500"
  surface-band: "#f0f0f0"
  brand-orange: "#fe5000"
  ink-muted: "#555555"
  ink-strong: "#000000"
  ink-soft: "#444444"
  hairline: "#eeeeee"
  link: "#767676"
typography:
  display:
    fontFamily: "\"Google Sans\", Arial, Thonburi, Tahoma, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28.8px
  heading-th:
    fontFamily: db_heaventbold
    fontSize: 24px
    fontWeight: 400
    lineHeight: 38.4px
  body:
    fontFamily: "\"Google Sans\", Arial, Thonburi, Tahoma, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20.8px
  nav:
    fontFamily: "\"Google Sans\", Arial, Thonburi, Tahoma, sans-serif"
    fontSize: 26px
    fontWeight: 700
    lineHeight: 41.6px
  link:
    fontFamily: "\"Google Sans\", Arial, Thonburi, Tahoma, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
rounded:
  xs: 6px
  sm: 8px
  md: 25px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 7px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 20px
  s8: 30px
  s9: 40px
  s10: 50px
components:
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.link}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-band}"
    textColor: "{colors.ink-strong}"
    padding: 50px 0px
    borderColor: "{colors.brand-orange}"
---

## Overview

The Government Housing Bank (ธนาคารอาคารสงเคราะห์, branded "GH BANK" and "ธอส.") publishes a Thai-language retail banking portal at ghbank.co.th. The measured home page is a long, banner-driven page: an orange logo strip across the top, a hero carousel, a pair of large promotional tiles, a grey band of news cards, a quick-links list with orange icons, two more promotional banners, and a grey footer sitting under an orange rule. The orange strip beside the logo carries the italic wordmark "Beyond Housing Bank" and a 75th anniversary mark. The visual voice is public-sector and friendly rather than premium: bright orange banners, photographs of houses and hands, and illustrated promotional posters carry most of the persuasion, while the chrome around them stays plain white and grey.

The opened home page lists the main navigation as loans (สินเชื่อ), deposits (เงินฝาก), the GHB savings lottery, e-services, GHB used homes (บ้านมือสอง ธอส.), about GHB and a branch locator, with FAQ and careers as secondary links. Content is almost entirely Thai. The page offers no visible primary button in the measured pass, so the extraction recorded no primary CTA; actions are delivered through banner images, arrow rows and text links.

The page at capture time was affected by a splash popup, a cookie banner and several scrim layers (the extraction logged `scrim popup-splashpage`, `scrim searchPopup`, `scrim popup-vdo` and `scrim dropdown-overlay` as hidden for capture, and a page filter of grayscale(0.2) removed). None of those overlays or the cookie control are documented here as brand UI. In particular the extractor's first h1 guess was the cookie-settings heading, which is overridden in SOURCES.json; the display token comes from the measured news-card heading instead.

## Colors

The palette is a white canvas, warm greys and one orange family.

- **Canvas** `#ffffff` is the largest measured background area and the main page surface.
- **Surface band** `#f0f0f0` is the second largest background, used for the news band and the footer.
- **Brand orange** `#fe5000` is the measured background of the logo strip and the border colour of the footer rule; it also appears as a measured border color.
- **Primary** `#e64500` is the most saturated measured action or link color. It is a slightly darker orange used for small tags and accents, such as the "ข่าวประชาสัมพันธ์" label on the news card and the card underline.
- **Ink** `#333333` carries 2038 characters of measured text, nearly all body and heading copy. Supporting ink steps are `#555555` (muted), `#444444` (soft) and `#000000` (strong, used in the footer).
- **Link** `#767676` is the measured default link color, a mid grey rather than a brand hue.
- **Hairline** `#eeeeee` is the measured border color on cards.

Other measured colors that were not kept as tokens: `#d2843b` and `#d84009` as small background areas, a `#0000004d` translucent scrim, and `#ffffff` text on orange and dark areas. A dark `#333333` background covers part of the header strip.

## Typography

Three families are measured by character count: Google Sans (2062 characters, all body, card and footer text), DB Heaventbold (252 characters, the Thai drawer menu) and DB Heaventmed (129 characters). Kanit appears for 16 characters, only in the cookie dialog, and is not treated as brand typography. Icon fonts `iconghb` and `icons` load for pictograms.

Measured sizes by character: 14px (945), 18px (927), 24px (221), 16px (141), 17px (119), 13px (65), 20px, 30px and 22px. Weights are only 400 (1409 characters) and 700 (1050 characters).

- **Display** is the news-card heading: Google Sans 18px, weight 700, line height 28.8px, color `#333333`.
- **Heading-th** is DB Heaventbold 24px, weight 400, line height 38.4px, the Thai menu font from the measured drawer navigation.
- **Body** is Google Sans 13px, weight 400, line height 20.8px (the copyright line).
- **Link** is Google Sans 16px, line height 25.6px, color `#767676`.
- **Nav** is Google Sans 26px bold; the measured element has empty text, so it is an icon button, not a text link.

Font fallbacks follow the site stack: Arial, Thonburi, Tahoma, sans-serif. No font substitute is needed because Google Sans and the DB Heaven faces are loaded by the site itself, but redistribution licensing was not checked.

## Layout

The desktop capture is 1280px wide and 2981px tall. Content sits in a centered column with generous gutters around the banner tiles. Below the carousel, two tiles sit side by side: a large square-ish poster on the left and two stacked wide banners on the right. The grey news band holds three equal cards. The quick-links block pairs a left column of five icon-and-arrow rows with two poster banners on the right. The footer is a six-column list under an orange rule: about, news, services, related sites and contact, with the call center number 0-2645-9000 and social icons at the bottom right.

Measured spacing steps are 2, 4, 7, 10, 12, 15, 20, 30, 40 and 50px; the footer uses 50px vertical padding. The layout is dense in information but airy between bands, with bands separated by background change, not by lines.

## Elevation & Depth

Elevation is minimal. Two box shadows were measured, each used once: `rgba(0, 0, 0, 0.2) 0px 0px 5px 0px` and `rgba(0, 0, 0, 0.2) -2px 2px 10px 0px`. Cards rely on a 1px `#eeeeee` border and an orange underline rather than shadow. Depth mostly comes from photography and full-bleed colored banners. Hover on the carousel plus button changes the background to `rgba(0, 0, 0, 0.1)` with the white border kept, the only hover state recorded.

## Shapes

Measured radii are 50% (circular controls and icon buttons), 6px (cards), 8px on the left corners of a side tab (`8px 0px 0px 8px`) and 25px (one element). The token scale keeps 6px as `xs`, 8px as `sm`, 25px as `md` and 9999px as `pill`. The promotional banners and photos in the capture show small rounded corners; their exact values beyond the list above were not separately measured.

## Components

- **Card:** 1px solid `#eeeeee` border, 6px radius, a tag label in `#e64500`, a bold 18px title, and a "ข่าวทั้งหมด" link with a chevron. A thin orange underline closes the card.
- **Quick-link row:** an orange icon, a bold label and a right arrow, separated by hairlines.
- **Navigation:** a white off-canvas drawer measured at 400px wide and 800px tall, translated off-screen to the left (`matrix(1, 0, 0, 1, -400, 0)`), with the hamburger in the header strip.
- **Carousel:** circular grey arrow buttons (50% radius) and short pagination bars under the hero.
- **Footer:** `#f0f0f0` background, 50px vertical padding, `#fe5000` border on top, text in `#000000`.

No primary button was detected; do not invent one from banner imagery.

## Design System Architecture

No public design system, brand guideline or CI download is linked from the opened home page; the page references only logo files (logo-color-with-text, logo-white-with-text, logo-beyond). The measured page exposes no CSS custom properties (rootVars is empty), so the de-facto system is a conventional stylesheet: Google Sans as the single text family, DB Heaven faces for Thai menu text, a two-weight scale (400 and 700), and orange plus neutral greys. Components are plain div cards with a 6px radius and hairline border.

## Do's and Don'ts

- Do keep a white canvas with `#f0f0f0` bands and use `#fe5000` and `#e64500` as the only chromatic accents.
- Do set body copy in Google Sans at 13px with `#333333`, headings in 700 weight.
- Do let photographic and illustrated banners carry promotion.
- Don't add drop shadows to cards; the measured system uses a hairline border.
- Don't document the cookie dialog, splash popup or scrims as brand UI.
- Don't use Kanit as a brand font; it appears only in the cookie dialog.
- Don't invent a filled button style; none was measured.

## Responsive Behavior

The mobile pass at 390px recorded only a 16px text size (83 characters), no visible header links, no detected menu toggle and zero card columns. The mobile capture exists as ghb.mobile.jpg, but breakpoints, column changes and navigation behavior beyond those recorded values are not measured.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.surface-band}` bands; add orange only for rules, tags and banners.
2. Use `{typography.display}` for card titles and `{typography.body}` for supporting text.
3. Use `{rounded.xs}` for cards and `{rounded.pill}` only for round controls.
4. Re-measure before adding any button, dark mode or hover state; none beyond the carousel plus button were recorded.
5. Run `node web/scripts/verify-designs.mjs --slug=ghb` after every edit.
