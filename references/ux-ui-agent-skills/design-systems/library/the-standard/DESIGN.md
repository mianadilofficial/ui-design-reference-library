---
version: alpha
name: THE STANDARD
category: "Thai Brands"
description: "THE STANDARD Thai news and business media (thestandard.co/homepage): white canvas, black ink, pure red #ff0000 MORE buttons with 3px radius, Kanit 700 headlines at 26px and 22px, Helvetica Neue 14px navigation, black feature bands and 4-up card rails."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ff0000"
  surface-footer: "#ececec"
  ink-soft: "#333333"
  ink-muted: "#999999"
  accent-red-alt: "#ee1c24"
  text-input-text: "#555555"
typography:
  body:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  display:
    fontFamily: Kanit
    fontSize: 26px
    fontWeight: 700
    lineHeight: 24px
  subheading:
    fontFamily: Kanit
    fontSize: 22px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 3px
  sm: 4px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 20px
  s10: 28px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.ink}"
    padding: 32px 0px 16px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 0px 10px
    height: 50px
    boxShadow: rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    padding: 64px
---

## Overview

THE STANDARD (title: "THE STANDARD - สำนักข่าวที่มุ่งสร้างความเปลี่ยนแปลงเชิงบวกแก่สังคม", i.e. a news agency aiming at positive change for society) is a Thai news and business-media brand. The bare URL https://thestandard.co/ currently serves a splash page for "THE STANDARD Economic Forum 2026: Reinvent Thailand" (a black, red and blue event key visual with two red buttons: one to the website and one to the forum). The brand's real home page is https://thestandard.co/homepage/, which this document measures (the splash is a campaign entry page and is not documented as the site's design).

The home page is a dense, multi-band news portal on a white page: a masthead with the logo and the tagline "STAND UP FOR THE PEOPLE", a red-accented promo strip, a main nav row (HOME, NEWS, GLOBAL, WEALTH, POP, LIFE, THE SECRET S..., and further links; 11 header links are visible on desktop), a big hero story with a "LATEST" column, then section blocks (NEWS, POP, LIFE) of 4-up thumbnail cards, black full-bleed feature bands (THE STANDARD WEALTH banners, an economic-forum band, tribute pages), and rails for EDITOR'S PICKS, VIDEO, PODCAST and OPINION.

## Colors

- **Canvas `#ffffff`** and **ink `#000000`** (6,717 characters); **ink-soft `#333333`** (941) is used on headings; **ink-muted `#999999`** (108) for metadata.
- **Primary `#ff0000`** is pure red. It is the fill of the MORE buttons (white text, 3px radius), the color of 192 text characters, and the splash page's red. **Accent-red-alt `#ee1c24`** (5) is a second red on text. `#de2925` and `#3b5b99` (a blue) appear as small background areas.
- **Surface-footer `#ececec`** (area 2,122) is the light gray footer and strip fill; `#000000` backgrounds (area 3,088) are the full-bleed feature bands. Some of those black bands are special memorial or tribute content in the capture; they are editorial content and are not adopted as a recurring brand surface beyond the measured black fill.
- Text-input text is `#555555` (measured on the search input).

## Typography

Families by characters: **Kanit** (7,347; a Thai/Latin display sans, loaded at 400, 500 and 700), **Helios** (940; a bold condensed face, 700), **Rubik** (172; Rubik Mono One, a heavy mono display) and **Helvetica Neue** (66). Weights by characters: 500 (6,417), 700 (1,105), 400 (947), 900 (56).

- **Display** (section heading, e.g. "เกาะติดสถานการณ์น้ำท่วม") is Kanit 700, 26px, line height 24px; **subheading** Kanit 700 at 22px, line height 24px.
- **Body/nav** (the body role) is Helvetica Neue 400, 14px, line height 20px; the most-read size is 16.8px (5,375 characters), then 12.6px (1,023) and 14.7px (765).
- Tracked labels: 12.6px with 1px tracking (431 characters) and 22.4px with 2px (56).

Kanit is an open Google font; Helios and Rubik Mono One are bundled as theme font files.

## Layout

The page is 1,280px wide and 11,429px tall. The content spans about 1,038px (content left 122px, right 1,160px in the first band) with up to 4 card columns (`maxCardColumns: 4`) and 11 visible header links on desktop. Bands alternate white, black and gray. Spacing steps are 3, 5, 6, 8, 10, 12, 14, 15, 20 and 28px; the footer is padded 64px and the nav 32px 0 16px.

## Elevation & Depth

Shadows are nearly absent: only a faint inset `rgba(0, 0, 0, 0.075) 0px 1px 1px 0px` on the search input. Depth comes from the contrast of black bands, photographic thumbnails and thin red accents.

## Shapes

Measured radii: **50%** (36 elements; round avatars, social icons and dots), **3px** (4; the MORE buttons), **100%** (3) and **4px** (the search input). Cards and thumbnails are otherwise square.

## Components

- **MORE button.** Red `#ff0000` fill, white text and white border, 26px tall, 3px radius; on hover the text and border turn black and the label is underlined.
- **Nav.** Black uppercase links in Helvetica Neue 14px; hover underlines (LOG IN, SIGN UP also underline on hover).
- **Search input.** 50px tall, 4px radius, padding 0 10px, `#555555` text, light inset shadow.
- **News card.** Thumbnail, a small red category label, a Kanit headline and a gray time stamp.
- **Footer.** `#ececec` with black text and 64px padding.
- Keyboard focus is shown with a browser default `5px auto rgb(0, 95, 204)` outline, which is a browser default and not a brand token.

## Design System Architecture

No design system or brand guideline was published on the pages opened. The splash page (https://thestandard.co/) loads its own `economicforum2026` theme assets, and the real site is a custom WordPress theme (`thestandard.v3`) that ships its fonts (icomoon, Helios, FontAwesome 4.7, Rubik) from the theme folder. The de-facto system is white, black and one pure red, Kanit for Thai/Latin headlines and a Helvetica Neue body.

## Do's and Don'ts

- Do use pure red `#ff0000` sparingly for buttons, category flags and highlights.
- Do set headlines in Kanit 700 and keep the nav in Helvetica Neue 14px.
- Do alternate white and black bands for sections and special features.
- Do keep thumbnails square and use 50% radius for avatars and icons.
- Don't use the blue `#3b5b99` as a brand color.
- Don't copy the splash page's event art as the site's default look.
- Don't add shadows; none are measured on cards.

## Responsive Behavior

Measured at 390px: the h2 remains Kanit 700 26px (360px wide); the header is 106px tall with padding 33.76px 0 16.88px, shows 2 header links (versus 11 on desktop) and a hamburger glyph (`[U+2630]`, 28px) at the start of the first band; cards use up to 2 columns (`maxCardColumns: 2`). Mobile font sizes by characters are 16.8px (4,839), 14px, 14.5px, 12.6px, 14.6667px, 18px, 12px and 10px. Other breakpoints were not measured.

## Iteration Guide

1. White canvas, black ink, red `#ff0000` accent for actions.
2. Kanit 700 for headings (26px, 22px), Helvetica Neue 14px for nav.
3. 4-up card grid on desktop, 2-up on mobile.
4. Buttons 26px high, 3px radius, red fill and white text.
5. Use black bands for features; keep 50% radii for round icons.
6. Re-measure before adding hover, focus or dark-mode rules not listed here.

## Content and Voice

Headlines are Thai news sentences in Kanit 700, often naming people and figures, with English section vocabulary in the navigation and rails (NEWS, GLOBAL, WEALTH, POP, LIFE, VIDEO, PODCAST, OPINION, EDITOR'S PICKS, LATEST, MOST POPULAR). The measured section heading reads "เกาะติดสถานการณ์น้ำท่วม" (following the flood situation), a live-coverage label, and the logo carries the English tagline "STAND UP FOR THE PEOPLE". Sub-brands get their own banners (THE STANDARD WEALTH, the Economic Forum, opinion columns), which makes the portal a family of named franchises under one masthead. Special editorial pages, such as the tribute bands in the capture, switch to black backgrounds with white text and portrait photography. Thumbnails are news photography and video stills, with small red category labels above the headline and a gray time stamp below.

## Measurement Notes

The queued URL (https://thestandard.co/) returned a 1,280 by 800 splash page with only 19 visible elements and a body background of `#ff0000`; its measured typography was a single family, Galyon Bold, at 32px and 40px. That page is an event entry, so the tokens here come from the re-measurement of https://thestandard.co/homepage/ (1,901 visible elements). The extractor recorded no border radius on the splash, and no primary button on the home page's mobile pass. Hover was recorded on MORE, LOG IN and SIGN UP; focus outlines were recorded as browser defaults.
