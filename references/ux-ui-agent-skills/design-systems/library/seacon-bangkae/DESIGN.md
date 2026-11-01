---
version: alpha
name: Seacon Bangkae
category: "Thai Brands"
description: "Thai-language site of Seacon Bangkae mall, set in Red Hat Display with a 199.897px outlined uppercase hero, Roboto and Mitr text, white and #f5f5f5 canvas with black ink, #f37c4b orange accent, a #00000080 glass header and 32px-radius frosted news cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#000000"
  primary: "#f37c4b"
  ink-muted: "#959595"
  hairline: "#63b6e6"
  nav-bg: "#00000080"
  card-bg: "#ffffff7a"
typography:
  display:
    fontFamily: "\"Red Hat Display\", Kanit, sans-serif"
    fontSize: 199.897px
    fontWeight: 700
    lineHeight: 174.91px
    letterSpacing: "-1.99897px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Red Hat Display\", Kanit, sans-serif"
    fontSize: 66.2528px
    fontWeight: 700
    lineHeight: 57.9712px
    letterSpacing: "-0.662528px"
    textTransform: uppercase
  heading:
    fontFamily: Roboto, Mitr, sans-serif
    fontSize: 50.745px
    fontWeight: 600
    lineHeight: 60.894px
  subheading:
    fontFamily: Roboto, Mitr, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: Roboto, Mitr, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  link:
    fontFamily: Roboto, Mitr, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 16px
rounded:
  xs: 12px
  sm: 32px
  md: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 30px
components:
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 20px
    boxShadow: rgba(0, 0, 0, 0.16) 0px 4px 12px 0px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

The measured page is the Thai-language home page of seaconbangkae.com, titled "หน้าแรก | Seacon Bangkae". It belongs to a shopping mall on Phet Kasem Road in Bangkok; the footer gives the address (607 Phet Kasem Rd, Bang Wa, Phasi Charoen, Bangkok 10160), opening hours (Monday to Friday 10:30 AM to 9:30 PM; weekends and holidays 10:00 AM to 9:30 PM) and a "ขอเส้นทาง" (get directions) link, and credits the company as Seacon Development Public Company Limited. The top bar carries social icons (Facebook, Instagram, X, TikTok, YouTube, LINE) and About Us, Careers, Contact Us, search and a TH / EN / CN language switch. The main menu is What's Happening, Shop by Brand, Privilege and News and Activities.

The first screen is a big aerial photograph of the mall's orange-banded facade and its elevated train line, with the words "SEACON BANGKAE" drawn in huge outlined letters across it, a "สำรวจเพิ่มเติม" (explore more) pill, and a slide counter ("1 / 2") with two circular arrow buttons. Under the hero the heading "What's Happening" (Roboto, 50.745px, bold) introduces a grid of event posters: a tea-and-cafe festival, a family activity, a "where things happen" exhibition and a "Thonburi" cafe-art-rhythm event. A pale-blue band titled "ซื้อสินค้าตามแบรนด์" (shop by brand) shows circular brand badges, among them Don Don Donki, Space Time Cube, Sushiro, Nitori, Uniqlo, Muji and Major Bangkae, and a news section follows.

The tone is lively and event-driven, relying on the posters' own colorful art direction while the shell stays neutral and quiet. Copy is Thai-first, with short English labels in the menu.

## Colors

The shell is neutral: white (#ffffff) canvas, a light-grey #f5f5f5 band as the largest light area (published as the theme's --color-neutral-200), black (#000000) text and footer, and mid-greys #959595 (published as --color-neutral-600) and #656565 for secondary text. The orange #f37c4b is the single accent. It appears as text, as the border and text color a menu link turns to on hover (rgb(243, 124, 75)), and in the "ดูทั้งหมด" (see all) pill controls, whose fill is orange with white text in the capture; the fill itself was not captured as a separate measured value, so only the text and hover value are declared.

The header is a translucent black glass, #00000080, over the hero. Cards use a frosted white, #ffffff7a. A soft sky blue, #5ab6e63d (24% opacity), fills the brand-badge band and #63b6e6 is the measured border color. The stylesheet root also carries Bootstrap 5 defaults (for example --bs-primary #0d6efd) and Swiper's #007aff, as well as theme values --success #009D50, --warning #FED322 and --danger #E82631; none of these appears in the measured design, so they are not declared. A cookie notice card in the first capture used a blue accept button; it was excluded because the notice is not brand UI.

## Typography

Three families are loaded: Red Hat Display (variable, 300 to 900) for the display wordmark, Roboto (100 to 900, with italics) for Latin and headings, and Mitr (300, 400, 600, 700), a Thai typeface, as the fallback for Thai script. The hero word is the largest text by far: 199.897px, weight 700, uppercase, with a 174.91px line height and -1.99897px (about -1%) tracking, rendered as outlined glyphs in the capture; on the 390px mobile measurement it is 66.2528px with a 57.9712px line height and -0.662528px tracking.

Section headings are Roboto 600 at 50.745px with a 60.894px line height (32.3113px with a 38.7735px line height on mobile). Card titles are 20px weight 400 with a 28px line height. Menu items are 14px weight 400 with a 14px line height, and "ดูทั้งหมด" links are 16px weight 300. The most frequent size by character count is 16px, then 20px, 50.745px, 14px and 24px. The Thai heading "ซื้อสินค้าตามแบรนด์" in the capture is set in a heavier Thai face than the Latin headings.

## Layout

The page is 1280px wide and 3702px tall. The header is two rows over the hero: a thin utility row (social icons at left, About Us / Careers / Contact Us / search / language at right) and a main row with the logo at left and four menu items at right, together on the translucent black glass. The hero is full-bleed and about 540px tall at the 960px capture width.

Below it, "What's Happening" sits left with a see-all pill at the right edge, followed by an asymmetric poster grid on a grey ground: one wide and one narrow tile in the first row, one narrow and one wide in the second. The brand band is a full-width pale-blue field with circular logos placed at staggered heights across the width, partly cropped at both edges. Spacing values are 1, 5, 6, 8, 10, 12, 15, 16, 20 and 30px, and the page uses a 16px outer gutter in the poster grid.

## Elevation & Depth

Elevation is expressed through three soft shadows, all published in the theme root as tokens: --shadow-sm (0 2px 4px at 8% black), --shadow-md (0 4px 12px at 16% black) and --shadow-lg (0 12px 24px at 24% black). Measured use is limited: the 4px 12px shadow, rgba(0, 0, 0, 0.16) 0px 4px 12px 0px, sits on the news cards (two elements), the 2px 4px shadow on two small elements and a 5px 10px shadow at 10% black on one. Layering also comes from translucency: the header glass, the frosted cards and the white-on-photo slide controls.

## Shapes

Shape language is round. The most common radius is 50% (thirty elements: circular brand badges, arrow buttons and icon holders), followed by 100px pills (fourteen elements, including the see-all and explore controls), 32px on the news cards and 12px on two elements. The theme root also defines --radius-sm: 8px. Poster tiles in the grid are lightly rounded rectangles, the brand logos sit in perfect circles of different sizes, and the hero ends in a straight edge. The tokens keep 12px, 32px and 100px with a full pill.

## Components

Header: a #00000080 glass bar with white 14px Roboto labels; on hover a label turns orange (#f37c4b) together with its border. Hero title: outlined, uppercase, very large Red Hat Display. Slide controls: two white circular arrow buttons with a large "1 / 2" counter. See-all pill: 100px radius, an arrow in a small circle at the left and a 16px Thai label, orange with white text.

News card: a 32px radius card in frosted white (#ffffff7a), 20px padding, black 20px Thai title text and the 4px 12px shadow. Brand badge: a circle with the retailer's own logo and color, in varying sizes. Footer: black with large white "SEACON BANGKAE" text, an address block, an opening-hours block, a directions link, link columns (Events, Stores, Privileges, About Us, Careers, Contact Us) and a copyright line with sitemap, privacy and cookie policy links. The cookie notice and its consent buttons are overlays, not brand components.

## Design System Architecture

No public design system or brand guideline was found on the pages opened; the home page links to corporate and tenant sections only. The de-facto system is a Bootstrap 5 stylesheet with a small custom token layer in the root: neutral colors (--color-neutral-200 #f5f5f5, --color-neutral-300 #EFEFEF, --color-neutral-600 #959595), shadows (--shadow-sm, --shadow-md, --shadow-lg), a small radius (--radius-sm 8px), a bouncy easing (--bouncy-ease cubic-bezier(.34, 1.42, .64, 1)) and semantic status colors (--success, --warning, --danger). Icons come from Bootstrap Icons, and carousels use Swiper. The tokens in this file are computed values measured on the live page, with the neutral and shadow values matching the published variables.

## Do's and Don'ts

Do keep the shell neutral (white, #f5f5f5, black) so that colorful event posters and tenant logos carry the color. Do use orange #f37c4b sparingly: hover states, accents and see-all pills. Do set hero words as huge outlined uppercase Red Hat Display, and write headings in Roboto 600. Do round everything that is interactive: 100px pills, circles and 32px cards.

Don't use Bootstrap blue (#0d6efd) or Swiper blue for interface elements. Don't add heavy shadows beyond the three published levels. Don't fill the hero text; it is outlined over the photo. Don't treat the cookie panel's blue accept button as a brand style. Don't alter tenant logos; they appear in their own colors inside neutral circles.

## Responsive Behavior

The extractor measured a 390px viewport. The hero word drops from 199.897px to 66.2528px (line height 174.91px to 57.9712px) and the section heading from 50.745px to 32.3113px (line height 60.894px to 38.7735px). The header already shows the logo with a compact utility row and the menu items at desktop width, and the Bootstrap 5 breakpoints in the root (for example --bs-breakpoint-xxl 1400px) indicate a standard grid, but how the menu collapses and how the poster grid stacks at phone width were not captured, so they are not described.

## Iteration Guide

Start with white, #f5f5f5 and black, Roboto at 16px, and Red Hat Display only for the hero word. Make the hero a full-bleed photograph with an outlined 199.897px uppercase title at -1.99897px tracking. Use a #00000080 glass header with white 14px labels that turn #f37c4b on hover. Build cards at 32px radius in #ffffff7a with the 0 4px 12px 16% shadow, controls as 100px pills or 50% circles, and see-all links in orange. Let event posters and brand logos provide the color, grouping logos in circles at staggered heights on a pale-blue band. Keep microcopy Thai-first with short English menu labels, and measure new elements before declaring them.
