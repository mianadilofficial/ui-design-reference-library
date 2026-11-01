---
version: alpha
name: Chulabook
category: "Thai Brands"
description: "Chulabook (ศูนย์หนังสือจุฬาฯ), Thailand's university bookstore online: white canvas, hot-pink #ee5294 headings and outlined buttons, Montserrat with Kanit for Thai, 6px outlined buttons, 8px cards and book-cover-led product grids."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  link-blue: "#155fcf"
  surface-light: "#f8f9fa"
  surface-mint: "#d2eee2"
  primary: "#ee5294"
  ink-muted: "#999899"
  ink-nav: "#000000e6"
  accent-green: "#21a371"
  hairline: "#eeeeee"
  text-input-text: "#6e6e6e"
typography:
  display:
    fontFamily: Montserrat, Kanit
    fontSize: 30px
    fontWeight: 600
    lineHeight: 40px
  display-mobile:
    fontFamily: Montserrat, Kanit
    fontSize: 24px
    fontWeight: 500
    lineHeight: 40px
    textTransform: capitalize
  subheading:
    fontFamily: Montserrat, Kanit
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: Montserrat, Kanit
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Montserrat, Kanit
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Montserrat, Kanit
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
spacing:
  s1: 6px
  s2: 8px
  s3: 12px
  s4: 15px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 48px
  s9: 64px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 6px 16px
    height: 40px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.ink-nav}"
    padding: 20px 0px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 6px 16px
    height: 40px
    borderColor: "{colors.hairline}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 0px 8px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.surface-light}"
---

## Overview

Chulabook (ร้านหนังสือศูนย์หนังสือจุฬาฯ) is the online storefront of the Chula bookstore. The homepage title reads "สั่งซื้อหนังสือออนไลน์ อีบุ๊ค ราคาพิเศษ" (order books online, e-books, special prices) and the top utility bar offers "want to write", "want to sell e-book", collect points, free sign-up, payment notification, about us, help and a language switch between Thai and English. The footer-level links point to about pages on history, branches, community and dealers, and to the university press site cupress.chula.ac.th.

The measured page is a dense e-commerce layout. At the very top is a pale gray utility bar; below it a white header with the CHULA BOOK logo (a lamp-and-book emblem beside a stacked wordmark), a row of main sections (books, e-books, online courses, lifestyle, marketplace, blog), a login link, a "categories" button, a wide search field with a "all" dropdown and a pink search button, and icons for notifications, wishlist and a cart showing a baht total. Below the header the hero is a three-panel promotional grid: one large banner (at capture time a TU-GET mock-test campaign) and two stacked smaller banners for online courses and a Chulabook XR service. Then come shelves headed "หนังสือขายดี" (best sellers), "หนังสือมาใหม่" (new books) and "หมวดหนังสือแนะนำ" (recommended categories), each in centred pink Thai headings with an outlined "ดูทั้งหมด" (see all) button on the right.

Imagery is almost entirely book covers on light gray tiles, with a red "Promotion" corner tag, bold prices in pink and struck-through list prices in gray. The voice is functional Thai retail copy: author line prefixed "ผู้แต่ง", price in baht, short category names.

## Colors

The canvas is white (#ffffff) and body ink is black (#000000). A near-black with alpha (`ink-nav` #000000e6) is used for navigation text. Secondary text is `ink-muted` #999899 and input text is #6e6e6e. Light surfaces are `surface-light` #f8f9fa, used for borders of the footer and page chrome, and `surface-mint` #d2eee2, a soft green background. Hairlines are #eeeeee.

The brand action color is the pink `primary` #ee5294. It is the text and border color of the measured outlined secondary button ("ดูทั้งหมด"), and in the capture it also colors section headings, prices and the search button. The extractor's own primary guess, `link-blue` #155fcf, is kept as a measured link/action color but is not a visible accent in the capture. `accent-green` #21a371 is a measured green used for positive/status elements. The root stylesheet shows Bootstrap defaults (for example --danger #dc3545, --success #28a745, --light #f8f9fa) plus CKEditor variables, which are editor-content variables, not brand colors.

## Typography

Text roles use a Montserrat plus Kanit pairing: `Montserrat, Kanit`. Montserrat covers Latin and numerals; Kanit covers Thai. The extraction loaded Kanit at weights 400, 500, 600 and 700 and Montserrat at 400, 500 and 600, so those are the weights available on the site.

Measured roles: display 30px at 600 with 40px line height; a mobile display variant 24px at 500, capitalised, line height 40px; subheading 18px at 500 with 24px line height; body 16px at 400 with 24px line height; navigation 20px at 400 with 24px line height; secondary button 16px at 500 with 24px line height. The 20px navigation is larger than the body, matching the visible header where the main section links are bold and prominent. Substitutes are not needed: both families are served as web fonts from the site.

## Layout

The page uses a centred container on a Bootstrap grid (breakpoints --breakpoint-md 768px and --breakpoint-xl 1200px in the root variables). The hero is a two-column grid (large banner plus two stacked panels); product shelves are horizontal carousels showing four books at a time with round arrow buttons at either edge. Section headers are centred, with the see-all button right-aligned on the same row. The measured spacing scale is 6, 8, 12, 15, 16, 20, 24, 48 and 64px; large blocks such as shelf gaps use the 48 and 64px steps, controls use 6 to 16px. The nav block has 20px vertical padding.

## Elevation & Depth

Elevation is nearly absent. The recorded hover state of the outlined button shows no box shadow in its resting state, and cards separate from the page with a 1px #eeeeee border and an 8px radius rather than shadows. Depth in the capture comes from overlaid labels: the red Promotion tag on the cover corner, the round carousel arrow buttons, and a pale blur for sold-out and pre-order tiles. Thin hairline rules separate each shelf section.

## Shapes

The measured radius scale is 4px (xs), 6px (sm) and 8px (md). The outlined secondary button uses 6px, and the search input and cards use 8px. Corners are modest and consistent; there are no pills in the measured tokens, though the pink search button and the promotion tags follow the same small rounding. Book covers keep their own square corners on a light gray tile.

## Components

**Secondary (outlined) button**: white background, #ee5294 text and 1px #ee5294 border, 6px radius, 6px 16px padding, 40px tall, 16px/500 type. It is used for "ดูทั้งหมด" next to every shelf header. No filled primary button was detected by the extractor.

**Navigation links**: `Montserrat, Kanit` 20px at 400, color #000000e6, with 20px vertical block padding.

**Text input / search**: white background, #6e6e6e text, 1px #eeeeee border, 8px radius, 6px 16px padding, 40px high, body type. The search field is paired with an "all" selector and a pink search button.

**Card**: 8px radius, 0px 8px padding, 1px #eeeeee border, black text; contents are cover, title, author, price.

**Footer**: white background, black text, bordered with #f8f9fa.

## Design System Architecture

No public design system, brand guideline or press kit is linked from the pages opened. The de-facto system is a Bootstrap 4 theme: the root stylesheet exposes Bootstrap color variables (--light, --gray-dark, --success, --danger), the font stacks and the breakpoints --breakpoint-md 768px and --breakpoint-xl 1200px. Icons are Font Awesome 5 Free (loaded at weight 900), fonts are Montserrat and Kanit, and the root also carries CKEditor variables (--ck-*) used for rich content blocks. Source: https://www.chulabook.com/ (homepage and the stylesheet as measured by the extractor).

## Do's and Don'ts

Do keep the white canvas and let book covers provide color; use pink #ee5294 for headings, outlined buttons and prices. Do pair Montserrat with Kanit and use 16px/24px body text. Do right-align an outlined "see all" button on each shelf heading row.

Don't fill buttons with the pink: the measured button is outlined on white. Don't add shadows to cards; use the 1px #eeeeee border. Don't treat the Promotion tags, sold-out overlays or cookie and chat controls as brand UI components. Don't use the CKEditor highlight colors as palette entries.

## Responsive Behavior

The extraction includes a mobile pass, which produced a 24px capitalised display-mobile style next to the 30px desktop display. The stylesheet root declares --breakpoint-md 768px and --breakpoint-xl 1200px. Other mobile layout values are not measured.

## Iteration Guide

Begin from the frontmatter tokens only. A new page should open with the white header, section links at 20px, then centred pink 30px headings. Use outlined 6px-radius pink buttons, 8px cards with #eeeeee borders and 16px/24px body text. Show prices in pink with the original price struck through in gray. When a filled action is needed, measure one on the live site and cite it before adding a token. Re-run the gate after each edit.
