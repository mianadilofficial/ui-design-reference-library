---
version: alpha
name: Paragon Department Store
category: "Thai Brands"
description: "Paragon Department Store is the website of The Mall Group's flagship Bangkok department store: a white page with a centered script-and-serif wordmark, a thin champagne-gold #a49e89 rule and accents, near-black #1f1e1f text in small 12px uppercase navigation, and grey #cccccc promo cards that carry loud red, black and purple campaign banners."
colors:
  canvas: "#ffffff"
  ink: "#1f1e1f"
  primary: "#a49e89"
  ink-strong: "#222222"
  surface-black: "#000000"
  surface-card: "#cccccc"
  on-dark-muted: "#ffffffb3"
typography:
  display:
    fontFamily: pluto_sans_regularregular, db_airystd, "Helvetica Neue", Helvetica, Helvetica, Arial, sans-serif
    fontSize: 23px
    fontWeight: 400
    lineHeight: 32.2px
  body:
    fontFamily: pluto_sans_regularregular, db_airystd, "Helvetica Neue", Helvetica, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 300
    lineHeight: 16.2px
  nav:
    fontFamily: pluto_sans_regularregular, db_airystd, "Helvetica Neue", Helvetica, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
  input:
    fontFamily: pluto_sans_regularregular, db_airystd, "Helvetica Neue", Helvetica, Helvetica, Arial, sans-serif
    fontSize: 11px
    fontWeight: 400
rounded:
  xs: 5.6px
  sm: 6.4px
  md: 50px
spacing:
  s1: 5px
  s2: 6px
  s3: 7px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 10.67px
  s8: 11px
  s9: 14px
  s10: 15px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 35px 0px 0px
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 8px 15px
    height: 31px
    borderColor: "{colors.primary}"
  footer:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.canvas}"
    padding: 20px 0px 0px
---

## Overview

The measured page is https://www.paragondepartmentstore.com/ (title "paragondepartmentstore | Welcome"). The site presents itself as Paragon Department Store, owned by The Mall Group; the address given on the site is 991 Rama 1 Road, Pathumwan, Bangkok, open every day 10.00 AM to 10.00 PM. It offers Thai and English versions, with a language toggle (TH, EN) in the header and footer.

The page is a campaign-led promotional portal. At the top sits a centered wordmark (a stylised "P" script followed by "PARAGON" in serif capitals with "DEPARTMENT STORE" beneath), flanked on the right by a search field with a black search button and the TH | EN toggle, and at the top right by Instagram, LINE, Facebook and YouTube icons. A thin gold-grey rule and a seven-item uppercase menu follow: PROMOTION, NEWS & EVENTS, TREND UPDATE, M CARD PRIVILEGE, SHOP & DIRECTORY, E-MAGAZINE and TOURISTS. Below the menu a large carousel banner announces a bank card points-redemption offer, then a grid of promotion cards, a "NEWS & EVENTS" heading with two article cards, and a row of banners for the M Card app and gift cards.

The chrome is nearly silent. All the energy comes from the supplied banners, which are in strong reds, black, purple and gradients, and from Thai headline typography inside the artwork.

A cookie consent panel was visible in the capture at the top of the first screen. It is a consent control and is not documented here as brand UI.

## Colors

- **Canvas `#ffffff`** is the page ground, and **`ink` `#1f1e1f`** is the most-read near-black text colour. **`ink-strong` `#222222`** colours the menu entries and headings.
- **`primary` `#a49e89`** is the champagne-gold used for header accents. It was measured as the colour of the header's secondary text and as the border colour of the search field. It is an accent for lines and small marks, not a filled button colour (the page has no brand button).
- **`surface-card` `#cccccc`** is the neutral grey panel behind each promotion card's caption, and **`surface-black` `#000000`** is the dark band (footer area) with **`on-dark-muted` `#ffffffb3`** as translucent white text on dark backgrounds.

A warm taupe `#897d71` also appears, but it belongs to the cookie consent button and is therefore excluded.

## Typography

The measured type stack is **pluto_sans_regular** first, then **db_airystd** (a Thai face loaded by the site), then Helvetica Neue, Helvetica and Arial. Merriweather and Kanit are also loaded for secondary uses. Pluto Sans and DB Airy are licensed web fonts that this research did not trace to a foundry page, so no designer claims are made.

Sizes are small: 12px weight 300 on a 16.2px line for body and captions, 12px weight 400 on a 14.4px line for the menu (rendered in uppercase), 11px in the search input, and 23px weight 400 on a 32.2px line for section headings such as PROMOTION. Measured character counts show 12px as by far the dominant size, then 10px, 18px and 16px.

Substitutes: Helvetica Neue or Inter for Latin, Kanit or Noto Sans Thai for Thai headings.

## Imagery and voice

Imagery is entirely promotional: bank and card partner logos in a row along the bottom of the main banner, celebrity and model portraits on prepaid-card and astrology posters, and illustrated or 3D campaign graphics for sales events such as "Shop Mission Plus+" and "PAYDAY PLUS". Banner copy is Thai with large bold numerals ("100", "0%", "50%", "40%") and short English labels, and the card captions below them mix Thai and English in the same line. Dates are written in the Thai Buddhist-era format (for example 2569) beside the campaign name. The tone is transactional and benefit-first: every card leads with the discount, instalment term or free-gift condition and gives the validity period underneath. There is almost no body copy beyond these captions.

## Layout

The layout is a centered, contained column on a 1280px viewport with a page height of about 2705px; the banners and cards sit inside side margins rather than running edge to edge. The header is centered rather than left-aligned. The measured spacing scale is 5, 6, 7, 8, 9, 10, 10.67, 11, 14 and 15px, so gaps between elements are tight; the large rhythm comes from the banner artwork. Promotion cards are laid out in a grid (two across, then three across), each a coloured poster above a grey caption block with a bold title, a date line and a short description.

## Elevation & Depth

Depth is minimal. Measured shadows are small (a 6px soft shadow and a 3px offset shadow of 0.2 alpha black) and appear on controls. The cookie dialog floats above the page with a soft border; cards otherwise sit flat against the page.

## Shapes

The shape language is therefore split in two: crisp rectangles for all content blocks, which makes the banners read as printed posters, and a few rounded shapes reserved for small interactive controls. When extending the system, keep that split so that rounded corners never appear on the large promotional surfaces.

Shapes are mostly square. The measured radii are `xs` 5.6px and `sm` 6.4px on small controls and `md` 50px on round elements such as icon buttons. Banners, posters and the caption panels have square corners.

## Components

- **Header:** centered wordmark, search field (31px high, 8px by 15px padding, gold border, 11px text) with black square search button, TH | EN toggle, social icons.
- **Menu:** seven uppercase 12px items on a single row between two thin rules.
- **Carousel:** a large banner with previous and next chevrons.
- **Promotion card:** poster artwork over a `surface-card` caption block (bold title, date, description).
- **Footer:** black band with white text.

## Design System Architecture

No public design system or brand guideline was found at the pages opened (https://www.paragondepartmentstore.com/ itself). The site is a custom CMS-built page with web-font families named after their licensed fonts (pluto_sans_regular, db_airystd) and no published token layer in the root variables, so the de-facto system is the CSS above: a small set of greys, one gold accent and one font stack.

## Do's and Don'ts

- Do keep the chrome white and near-black, and let campaign artwork carry the colour.
- Do centre the wordmark and keep the menu uppercase at 12px.
- Do use the gold `primary` for rules, borders and small accent marks.
- Do put each promotion in a poster-plus-caption card on `surface-card`.
- Don't fill buttons with the gold; the site has no brand button.
- Don't copy the cookie dialog or its taupe button as brand UI.
- Don't round the banners or cards.

## Responsive Behavior

The extractor measured both desktop (1280px) and mobile viewports. The measured desktop layout is a centered column with a single-row menu; the capture shows the promotion grid as a wide card beside a narrower one in the first row and three equal cards in the second. Small type (12px) is the standing size for the menu and body, and the measurements recorded no separate larger mobile sizes for those roles.

## Iteration Guide

1. Begin with white `canvas`, `ink` text and the `primary` gold for lines.
2. Set menus in uppercase 12px and body in 12px light.
3. Build promotion cards from a poster image over a `surface-card` caption.
4. Keep corners square except for controls using the measured `xs` and `sm` radii.
5. Re-run `node web/scripts/verify-designs.mjs --slug=paragon-department-store` after changes.
