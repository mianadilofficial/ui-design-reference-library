---
version: alpha
name: Money Buffalo
category: "Thai Brands"
description: "Money Buffalo (moneybuffalo.in.th), a Thai personal-finance explainer site: white canvas, navy #031c52 text, royal blue #1e45ef accent, db admin Thai display type at 52px, 50px pill chips, 10px cream cards and a buffalo mascot in rate and price tables."
colors:
  canvas: "#ffffff"
  ink: "#031c52"
  primary: "#1e45ef"
  surface-gray: "#efefef"
  ink-gray: "#626365"
  ink-muted: "#96959e"
  surface-offwhite: "#fafafa"
  hairline-gray: "#dddddd"
  surface-cream: "#f9f6f0"
typography:
  display:
    fontFamily: "\"db admin bd\", sans-serif"
    fontSize: 52px
    fontWeight: 400
    lineHeight: 52px
  display-mobile:
    fontFamily: "\"db admin bd\", sans-serif"
    fontSize: 44px
    fontWeight: 400
    lineHeight: 44px
  heading:
    fontFamily: "\"db admin bd\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 36px
  subheading:
    fontFamily: "\"db adman\", sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
  nav:
    fontFamily: "\"db admin bd\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 2.4px
  link:
    fontFamily: "\"db admin bd\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: "\"db adman\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 6px
  sm: 7px
  md: 10px
  lg: 20px
  xl: 50px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 13px
  s8: 13.44px
  s9: 15px
  s10: 20px
components:
  button-secondary:
    textColor: "{colors.ink-gray}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
    padding: 6px 20px
    height: 40px
    borderColor: "{colors.hairline-gray}"
  link:
    textColor: "{colors.ink-gray}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
    padding: 6px 20px
    borderColor: "{colors.hairline-gray}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-gray}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xl}"
    padding: 8px 10px
    height: 40px
    borderColor: "{colors.hairline-gray}"
  card:
    backgroundColor: "{colors.surface-cream}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 0px 0px 15px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

Money Buffalo (moneybuffalo.in.th) is a Thai personal-finance publication. The page title gives its promise as "สรุปเรื่อง การเงิน ให้สนุก ง่าย ได้ประโยชน์" (summarising finance so it is fun, easy and useful). Its navigation covers articles on stocks, mutual funds, debt, insurance, tax saving, financial planning, real estate, business, economy, history and cryptocurrency, plus series ("ลงทุนหุ้นเป็นใน 30 วัน", fund series, debt-free series, "Tax Saving Series 2023"), single-stock summaries, a financial glossary and live tables for oil prices, gold prices and exchange rates. Some articles carry sponsored finance products such as bond offers and insurance.

The capture shows an editorial front page with a left sidebar. A small grey buffalo logo sits above a vertical list of menu items in light gray-blue ("บทความที่น่าสนใจ", "ซีรีส์การเงิน", "สรุปหุ้นรายตัว", "คำศัพท์การเงิน", "ราคาน้ำมัน", "ราคาทองคำ", "อัตราแลกเปลี่ยน"). The main column opens with a "TRENDING #" label and a row of pill-shaped outlined topic chips (financial planning, life insurance, ttb, mobile phones, mutual funds). The hero is a large rounded promotional banner with the buffalo mascot sitting among stacks of banknotes and gold bars; the headline below is a heavy navy Thai title. Three article cards follow with a thumbnail, a bold title and a small "2 MIN READ" and date line. Lower down are data modules: a green-themed exchange-rate table with flag icons and green buy/sell numbers, a fuel price table with colour-coded fuel labels and the source credit, and a gold price block in warm cream cards with brown headings, each section topped by a heading with a thin underline and a mascot illustration in a context-matching costume (cash, fuel pump, gold bar).

Writing is conversational Thai with English finance terms, and the mascot makes dry numbers friendly. Each data module ends with a source line and a text link with an arrow to its history page, for example the exchange-rate table credits Bangkok Bank and the fuel table credits Bangchak, so the site presents itself as an explainer that cites where numbers come from. Article cards show reading time in minutes and the publication date, which signals short, quick explainers rather than long essays.

## Colors

The canvas is white (#ffffff). Text is deep navy `ink` #031c52, which the stylesheet names --color-dark-blue; the main accent is royal blue `primary` #1e45ef (the stylesheet's --color-blue), seen in links like "ดูอัตราแลกเปลี่ยนย้อนหลัง" and in the MONEY BUFFALO logo. Neutral text is `ink-gray` #626365 for chips and menu items and `ink-muted` #96959e for secondary labels. Surfaces are `surface-gray` #efefef, `surface-offwhite` #fafafa and the warm cream `surface-cream` #f9f6f0 used behind the gold price cards. Hairlines and chip borders are `hairline-gray` #dddddd.

Data modules carry semantic colours in the stylesheet: --color-green #00c300, --color-exchange #419b18 with pale green row backgrounds, --color-red #a80f0f and --color-light-blue #15ace6, plus violet-grey oil table backgrounds (#f8f8fc and #e9e8f3). These are module colours within tables and are not added as general tokens. The root also contains WordPress admin variables (--wp-admin-theme-color #007cba), which are CMS defaults.

## Typography

Headings and navigation use `"db admin bd"` (DB Adman Bold), body and form text use `"db adman"`, both Thai display faces by DB Fonts, with a sans-serif fallback. The page also loads Bai Jamjuree (regular and bold) and a font named kyoto. Measured styles: display 52px at 400, 52px line height (the face carries its own weight); display-mobile 44px; heading 36px; subheading 32px in db adman; navigation 24px with 2.4px letter spacing; link 20px; and input 16px. Line heights equal font sizes, a tight setting that works with these compact Thai faces. DB Adman is commercial; Bai Jamjuree (already loaded) is an open Thai alternative.

## Layout

The layout is a two-zone page: a narrow left sidebar for logo and menu, and a wide content column for chips, the hero, article cards and data modules. Article cards sit in a three-column row; data modules are placed in a two-column row (exchange rates and oil prices) followed by a half-width gold block. Measured spacing values are 4, 5, 6, 8, 10, 12, 13, 13.44, 15 and 20px, and cards have 15px bottom padding. The page shows generous white gutters on the left of the content column.

## Elevation & Depth

Almost flat. Cards use a tinted cream fill with no measured shadow, tables rely on alternating row backgrounds, and chips use a 1px outline. Depth arises from the hero banner artwork and from the mascot illustrations that overlap the module headings. A floating prompt and the cookie bar are overlay elements.

## Shapes

Measured radii: 6px, 7px, 10px, 20px, 50px and a full pill. The topic chips, the secondary button and the search-style text input use 50px; cards use 10px; the hero banner and article thumbnails have rounded corners in the 10 to 20px range. Pills and soft rectangles give a friendly tone appropriate to a mascot brand.

## Components

**Chip / secondary button** ("วางแผนการเงิน" etc.): transparent fill, #626365 text in the 20px link style, 1px #dddddd border, 50px radius, 6px 20px padding, 40px tall.

**Link**: the same pill style, in gray.

**Navigation**: white background with #626365 sidebar links; primary nav links use navy #031c52 at 24px with 2.4px tracking.

**Text input**: navy #031c52 text at 16px in db adman, 50px radius, 8px 10px padding, 40px tall, 1px #dddddd border.

**Card**: cream #f9f6f0 background, navy text, 10px radius, 15px bottom padding.

**Footer**: white text (the footer background was not measured).

No filled primary button was detected on the home page.

## Design System Architecture

No public design system, brand guideline or press kit is linked from the pages opened. The de-facto system is a WordPress theme with named colour variables: --color-dark-blue #031c52, --color-blue #1e45ef, --color-green #00c300, --color-red #a80f0f, --color-light-blue #15ace6, --color-text #303133 and --color-grey-text #9ca4a1, per-module variables for exchange and oil tables (for example --color-exchange-background-even #e2f0dc), and a --gradient variable. WordPress admin variables are also present. Fonts are DB Adman and Bai Jamjuree. Source: https://www.moneybuffalo.in.th/ (homepage and stylesheet as measured by the extractor).

## Do's and Don'ts

Do use navy text on white with royal blue for links and the logo, and keep topic chips as outlined 50px pills. Do use the buffalo mascot and warm cream cards to humanise numeric tables, and colour data modules consistently (green for exchange rates, warm brown for gold). Do keep headings in DB Adman with tight leading.

Don't use the cookie bar or the floating "follow investing" prompt as design components. Don't fill chips with solid colour. Don't use WordPress admin blue (#007cba) as a brand colour. Don't style sponsored banners like editorial cards.

## Responsive Behavior

The extraction includes a mobile pass, which produced a 44px display-mobile style versus 52px on desktop. Breakpoints and other mobile layout values are not measured.

## Iteration Guide

Use the frontmatter tokens only. Start with a white page and a left sidebar of gray-blue menu items, a "TRENDING" row of outlined 50px chips, a rounded hero banner and three cream or white 10px cards. Headlines are navy DB Adman with tight leading; links and logo are royal blue. Keep numeric tables in the module colours above and pair them with a mascot illustration. Measure any new component on the live site, cite it, then re-run the gate.
