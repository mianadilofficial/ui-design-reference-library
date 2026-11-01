---
version: alpha
name: Priceza
category: "Thai Brands"
description: >-
  Priceza, Thailand's price-comparison portal: a proprietary Priceza typeface, a blue (#1e7be5) 4px-radius 'เช็คราคา' button on 8px bordered product cards, a 47.9864px white hero headline over photography and an orange sale ribbon.
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#1e7be5"
  on-primary: "#ffffff"
  surface-soft: "#f9f9f9"
  ink-slate: "#333f48"
  ink-link: "#595966"
  ink-card: "#222222"
  on-photo-muted: "#ffffffbb"
  hairline: "#e6e7e8"
typography:
  display:
    fontFamily: Priceza, Arial, Helvetica, Geneva, sans-serif
    fontSize: 47.9864px
    fontWeight: 500
    lineHeight: 69.5803px
  display-mobile:
    fontFamily: Priceza, Arial, Helvetica, Geneva, sans-serif
    fontSize: 21.28px
    fontWeight: 400
    lineHeight: 25.536px
    textTransform: uppercase
  subheading:
    fontFamily: Priceza, Arial, Helvetica, Geneva, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  body:
    fontFamily: Priceza, Arial, Helvetica, Geneva, sans-serif
    fontSize: 15.2px
    fontWeight: 400
    lineHeight: 21.28px
  button:
    fontFamily: Priceza, Arial, Helvetica, Geneva, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 14px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 32px
  link:
    textColor: "{colors.ink-link}"
    typography: "{typography.body}"
  nav-link:
    textColor: "{colors.ink-link}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 6px 12px
    height: 34px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-card}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
---

## Overview

Priceza is a shopping search engine and price-comparison platform. Its own about page says it has "presence in 6 countries in Southeast Asia" and was founded in Thailand in 2010 by three computer science engineers; the home page describes more than 50 million product listings from partner retailers such as Shopee and Lazada. The Thai home page is therefore a search-first, listing-heavy layout: a photographic hero with a single search field, a block of department cards with sub-category links, a strip of popular category chips, a pair of campaign banners, and then a "สินค้าฮอตดีล" (hot deals) grid with a countdown timer.

The look is practical and light. A white canvas, charcoal text (`{colors.ink}` `#333333`) and one blue action colour (`{colors.primary}` `#1e7be5`) give a utilitarian retail feel; warmth comes from the hero photograph, an orange highlight on the words "ราคาสินค้า" in the headline, and orange discount ribbons at the top-right corner of each product card. A bottom-of-screen cookie bar with an "ยอมรับ" button overlaps one band in the capture; it is a consent popup and is not described as brand UI.

**Key Characteristics:**
- A proprietary typeface named "Priceza" (loaded at 400, 500 and 700) with Arial, Helvetica, Geneva and sans-serif behind it.
- One blue action: the "เช็คราคา" (check price) button on every product card, `{colors.primary}` fill, white text, `{rounded.xs}` (4px) radius, 32px tall.
- A very large hero headline at `{typography.display}` (47.9864px, weight 500) in white over photography.
- Bordered white cards at `{rounded.sm}` (8px) with a `{colors.hairline}` border.
- Retail density: four product columns, strikethrough list prices, merchant logos and star ratings in every card.

## Colors

### Brand & Accent
- **Action blue** (`{colors.primary}` — `#1e7be5`): fill of the "เช็คราคา" button; text on it is `{colors.on-primary}` (`#ffffff`).
- **Orange**: the highlight on the hero headline words and the discount ribbons; the headline highlight was measured as `#ffa400` on the hero text, but it is not carried as a token here because no interface role (button, link, surface) uses it.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page and cards.
- **Soft grey** (`{colors.surface-soft}` — `#f9f9f9`): alternating bands.
- **Hairline** (`{colors.hairline}` — `#e6e7e8`): card and divider borders.

### Text
- `{colors.ink}` `#333333` body; `{colors.ink-slate}` (`#333f48`) for headings and category labels; `{colors.ink-link}` (`#595966`) for links and navigation; `{colors.ink-card}` (`#222222`) for card text; `{colors.on-photo-muted}` (`#ffffffbb`) for the small paragraph on the hero photograph.

## Typography

### Font Family
`Priceza, Arial, Helvetica, Geneva, sans-serif`. Priceza is the site's own web font, loaded in 400, 500 and 700; two icon fonts (Glyphicons Halflings and fontello) are loaded for symbols and are not part of the type system.

### Hierarchy
| Role | Size | Weight | Notes |
|---|---|---|---|
| `{typography.display}` | 47.9864px | 500 | Hero headline, line height 69.5803px |
| `{typography.display-mobile}` | 21.28px | 400 | Mobile heading measurement, uppercase transform |
| `{typography.subheading}` | 16px | 400 | Product titles, line height 22.4px |
| `{typography.body}` | 15.2px | 400 | Paragraphs and links, line height 21.28px |
| `{typography.button}` | 14px | 500 | "เช็คราคา" button, line height 20px |

### Principles
Sizes are fractional (15.2px, 21.28px). Weight is restrained: 6,532 characters at 400 and only 409 at 500. Negative letter spacing of -0.2px was measured on 14px and 15px text.

### Note on Font Substitutes
The Priceza typeface is the brand's own and may not be redistributable; Arial or any neutral Thai-capable sans-serif is the declared fallback.

## Layout

### Spacing System
Steps measured: 1, 2, 5, 6, 7, 8, 10, 12, 14 and 15px (`{spacing.s1}`–`{spacing.s10}`). 10px is the most frequent padding (118 occurrences).

### Grid & Container
A centred container narrower than the viewport (the capture's content spans roughly the middle of a 1280px page). Departments sit in a six-card row; hot deals sit in four columns with two rows visible; the promotional banner is a single wide split image.

### Whitespace Philosophy
Medium density. Cards are padded 10px inside, with product images given the most space and merchant, rating and button squeezed into one footer row.

## Elevation & Depth

Flat with occasional lift. The measured shadows are `rgb(231, 231, 231) 0px 4px 9px 0px` (soft, grey) and a larger `rgba(40, 49, 56, 0.2) 0px 8px 16px 0px` used rarely. Borders in `{colors.hairline}` do most of the separation.

## Shapes

### Border Radius Scale
`{rounded.xs}` 4px (button), `{rounded.sm}` 8px (cards and chips), `{rounded.md}` 12px, `{rounded.lg}` 14px. Top-only 8px rounding (`8px 8px 0px 0px`) also appears on card headers.

### Photography Geometry
Product photographs are square-ish and centred on white; the hero is a wide cropped lifestyle photograph with a dark overlay so the white headline remains readable.

## Components

### Buttons
**Primary (`button-primary`)**: `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}`, `{rounded.xs}` radius, 32px tall, `6px 12px` padding.

### Links and navigation
`link` and `nav-link` use `{colors.ink-link}` at `{typography.body}`. The top navigation sits on the hero photograph with white labels: ทั้งหมด, โทรศัพท์, คอมพิวเตอร์, เครื่องใช้ไฟฟ้า, สินค้าอุปโภค, แฟชั่นและเครื่องประดับ.

### Inputs
`text-input`: `{colors.ink}` text at `{typography.body}`, 34px tall, `6px 12px` padding.

### Cards
`card`: `{colors.canvas}` ground, `{colors.ink-card}` text, `{rounded.sm}` radius, `{colors.hairline}` border.

### Product cards in the capture
Each hot-deal card stacks, from top to bottom: an orange discount ribbon at the top-right ("ลด 26%"), a large product photograph on white, a two-line product title, a price line that starts with the label "ราคา:" followed by a bold current price and a struck-through original price, and a footer row holding a merchant logo (Studio7, Lazada, HomePro and others), a star rating such as "[U+2605]4.3/5 (2021)" and the blue "เช็คราคา" button. Above the grid a tab strip of icon-and-label categories (Hot Deal, โทรศัพท์แนะนำ, เครื่องใช้ไฟฟ้า, โน๊ตบุ๊ก, แฟชั่น, บิวตี้ and more) filters the deals, and the heading carries a dark countdown ("กำลังจะเริ่มใหม่ในอีก") built from three dark rounded number chips.

### Voice
Microcopy is imperative and short: the search field reads "ค้นหาสินค้า...", the hero headline is "ค้นหาและเปรียบเทียบ ราคาสินค้า" (search and compare product prices), and the button says "เช็คราคา" rather than "buy", which matches a site that sends shoppers on to merchants.

## Design System Architecture

No public Priceza design-system or brand-guideline page was found in the two pages opened (home and about; the latter has no logo or design content). The measured page exposes no CSS custom properties and loads Glyphicons Halflings and fontello icon fonts, so the visual decisions live in ordinary stylesheet rules rather than a published token layer. The tokens here are measured values renamed by role.

## Do's and Don'ts

### Do
- Use `{colors.primary}` blue only for the check-price action.
- Keep product cards white with a `{colors.hairline}` border and `{rounded.sm}` corners.
- Put white headline text over a darkened hero photograph.
- Show list price struck through next to the sale price.

### Don't
- Don't use orange as a button colour; it is for emphasis and ribbons.
- Don't use dark nav text on the photographic hero.
- Don't round the primary button beyond 4px.

## Responsive Behavior

Two widths were measured: 1280px desktop and a 390px mobile pass. The mobile heading measurement is 21.28px at weight 400, uppercase, versus the 47.9864px desktop hero headline; other mobile behaviour was not measured. On desktop the department row and chip row already scroll horizontally past the container edge.

## Iteration Guide

1. White canvas, `{colors.ink}` text, Priceza typeface with Arial fallback.
2. Photographic hero, white `{typography.display}` headline, centred search.
3. Six department cards, then a four-column hot-deal grid.
4. One `{colors.primary}` button per card.
5. Check with `node web/scripts/verify-designs.mjs --slug=priceza`.
