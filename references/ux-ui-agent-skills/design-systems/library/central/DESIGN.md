---
version: alpha
name: Central Online
category: "Thai Brands"
description: "Central Online (central.co.th, Central Department Store's e-commerce site): white #ffffff canvas with blush #fbeeee sale bands, #333333 cpnFont body text (16px/24px, 14px UI), 30px/700 section heads, condensed Bebas Neue for square black #000000 'EXPLORE MORE' buttons (26px, 16px padding, 0px radius), brand names and -% badges, centralSangBleuFont 48px serif promo headlines, red #ff0036 prices and #f50a3c 'Sale', pill filter chips."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  brand-red: "#f50a3c"
  price: "#ff0036"
  canvas: "#ffffff"
  surface-blush: "#fbeeee"
  surface-warm: "#f7f6f5"
  surface-gray: "#f7f7f7"
  tag-gray: "#f0eeee"
  eyebrow-tag: "#ecc3b2"
  ink: "#333333"
  ink-black: "#000000"
  ink-brand: "#160808"
  ink-subtle: "#8b8b8b"
  ink-strike: "#a6a0a0"
  border: "#dcdcdc"
  border-input: "#e5e7eb"
  band-dark: "#333333"

typography:
  seo-heading:
    fontFamily: "cpnFont, \"cpnFont Fallback\", Arial, sans-serif"
    fontSize: 13px
    fontWeight: 700
    lineHeight: 16.25px
  seo-heading-mobile:
    fontFamily: "cpnFont, \"cpnFont Fallback\", Arial, sans-serif"
    fontSize: 13px
    fontWeight: 700
    lineHeight: 16.25px
  display-promo:
    fontFamily: "centralSangBleuFont, \"centralSangBleuFont Fallback\", serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
    textTransform: uppercase
  heading-section:
    fontFamily: "cpnFont, \"cpnFont Fallback\", Arial, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 45px
  heading-footer:
    fontFamily: "cpnFont, \"cpnFont Fallback\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  body-lead:
    fontFamily: "cpnFont, \"cpnFont Fallback\", Arial, sans-serif"
    fontSize: 19px
    fontWeight: 400
    lineHeight: 25px
    letterSpacing: -0.38px
  subtitle:
    fontFamily: "cpnFont, \"cpnFont Fallback\", Arial, sans-serif"
    fontSize: 19px
    fontWeight: 400
    lineHeight: 28.5px
  price:
    fontFamily: "cpnFont, \"cpnFont Fallback\", Arial, sans-serif"
    fontSize: 19px
    fontWeight: 700
    lineHeight: 28.5px
  body:
    fontFamily: "cpnFont, \"cpnFont Fallback\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  ui:
    fontFamily: "cpnFont, \"cpnFont Fallback\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  price-strike:
    fontFamily: "cpnFont, \"cpnFont Fallback\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  nav:
    fontFamily: "cpnFont, \"cpnFont Fallback\", Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16.25px
  caption:
    fontFamily: "cpnFont, \"cpnFont Fallback\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  cta:
    fontFamily: "\"Bebas Neue\", \"Bebas Neue Fallback\""
    fontSize: 26px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: 0.52px
  brand-name:
    fontFamily: "\"Bebas Neue\", \"Bebas Neue Fallback\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 2px
  eyebrow:
    fontFamily: "\"Bebas Neue\", \"Bebas Neue Fallback\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.2px
  badge:
    fontFamily: "\"Bebas Neue\", \"Bebas Neue Fallback\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px

rounded:
  none: 0px
  hairline: 1px
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  pill: 9999px

spacing:
  xxs: 2px
  xs: 3px
  sm: 4px
  md: 8px
  ml: 10px
  lg: 12px
  xl: 16px
  xxl: 24px
  xxxl: 32px
  section: 48px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.cta}"
    rounded: "{rounded.none}"
    padding: 16px
    height: 58px
  link-shop-now:
    textColor: "{colors.ink-black}"
    typography: "{typography.cta}"
  link-view-all:
    textColor: "{colors.ink-black}"
    typography: "{typography.subtitle}"
  chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.ui}"
    rounded: "{rounded.pill}"
    border: "1px solid #dcdcdc"
    padding: 0px 12px
    height: 32px
  chip-selected:
    border: "1px solid #000000"
  badge-discount:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.badge}"
    rounded: "{rounded.none}"
    padding: 2px 3px 1px
  tag-mega-code:
    backgroundColor: "{colors.tag-gray}"
    textColor: "{colors.ink}"
    typography: "{typography.badge}"
    rounded: "{rounded.none}"
    padding: 2px 3px 1px
  tag-eyebrow:
    backgroundColor: "{colors.eyebrow-tag}"
    textColor: "{colors.ink-black}"
    typography: "{typography.eyebrow}"
    padding: 2px 3px 1px
  card-product:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 12px
  section-sale-band:
    backgroundColor: "{colors.surface-blush}"
  search-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    border: "1px solid #e5e7eb"
    padding: 8px 40px
    height: 43px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 16px 0px 0px
    height: 117px
  nav-sale-link:
    textColor: "{colors.brand-red}"
    typography: "{typography.nav}"
  newsletter-band:
    backgroundColor: "{colors.band-dark}"
    textColor: "{colors.on-primary}"
    height: 72px
  newsletter-input:
    backgroundColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 0px 40px 0px 24px
    height: 40px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 32px 0px
---

## Overview

Central Online is the e-commerce site of Central Department Store, Thailand's department-store chain (the official [About Us](https://www.central.co.th/en/information/about-us) page tells the store's history from the founder Samrit to the Chidlom flagship opened in 1973). The homepage looks like a fashion magazine laid over a sale catalogue.

At the top, a thin dark utility strip (language, Stores) sits above a white header: the red serif **CENTRAL** wordmark on the left, a wide outlined search field, "Log in | Register", wishlist and bag icons, and below them a single line of 13px category links ending in a red "Sale". The hero is a wide carousel of editorial banners: a peach Bebas Neue eyebrow tag ("BRAND DAY: FOREO"), a large uppercase serif headline ("UP TO 50% OFF") in `centralSangBleuFont`, a 19px description, and a Bebas Neue "SHOP NOW" text link on the right. In the capture a newsletter pop-up (red "DOWNLOAD NOW" art, email field and a black "GET INSPIRED WITH CENTRAL" button) is open over the hero.

Below the hero, a row of cut-out product photographs labels the departments in black Bebas Neue (BEAUTY, WOMEN, MEN, FASHION ACCESSORIES …). Then come sale bands on a blush `{colors.surface-blush}` (`#fbeeee`) background — "10.10 Marathon Sale", "Mega Code Brands", "Mega Code Top Picks" — each with a 30px bold title, a grey 19px subtitle, an underlined "View all" on the right, and horizontal carousels of square-cornered white product cards. Cards stack a grey "MEGA CODE" tag and a black "-78%" badge, the brand name in spaced Bebas Neue capitals, a two-line product name, the sale price in red `#ff0036` and the struck original in `#a6a0a0` with "save ฿…".

The look is black-and-white luxury retail: square black buttons and badges, condensed all-caps display type, an elegant serif for promotions, and red reserved for the wordmark, the Sale link and prices.

**Key Characteristics:**
- Action colour is black `#000000`; red `#f50a3c` / `#ff0036` marks only the brand, "Sale" and prices.
- Three typefaces with distinct jobs: `cpnFont` (UI and body), Bebas Neue (CTAs, badges, brand names, departments), `centralSangBleuFont` (promo headlines).
- Square corners (0px) on buttons, badges and product cards; pills only on filter chips.
- Blush `#fbeeee` sale bands alternate with white.
- Cut-out product photography on white or blush, editorial banners in the hero.

### Imagery & Art Direction
- **Products**: cut-out photographs on white (bags, shoes, perfume, watches, furniture), never lifestyle scenes in the carousels.
- **Hero banners**: editorial brand campaigns with a text panel on the left and product photography on the right.
- **Brand row**: brand logos centred in white circles, each with a red offer label below ("UP TO 50% OFF").
- **Pop-ups**: red and white illustrated art with QR codes for the app.
- **Icons**: thin black outline icons (search, heart, bag, arrows).

### Voice & Microcopy
Retail-promotional and terse: "UP TO 50% OFF", "SHOP NOW", "EXPLORE MORE", "View all", "View more", "Reach the Checkpoint with top-brand deals", "Enjoy an extra up to ฿5,000 off with Mega Code", "ALL ITEMS 10% OFF", "SPECIAL OFFERS". Prices always show the saving ("save ฿12,550").

## Colors

> **Source page:** `https://www.central.co.th/en` (extraction + probes in SOURCES.json). The CSS defines `--color-central-red: #f50a3c`; other colours are Tailwind arbitrary values (`bg-[#F0EEEE]`, `text-[#ff0036]`, `bg-[#ECC3B2]`) or utility classes (`bg-central-base`).

### Action & Brand
- **Primary / Black** (`{colors.primary}` — `#000000`): "EXPLORE MORE" buttons, discount badges, selected-chip border, pop-up button.
- **On Primary** (`{colors.on-primary}` — `#ffffff`).
- **Central Red** (`{colors.brand-red}` — `#f50a3c`) [`--color-central-red`]: the "Sale" nav link; the wordmark is red in the capture.
- **Price Red** (`{colors.price}` — `#ff0036`): sale prices.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page, header, product cards.
- **Blush** (`{colors.surface-blush}` — `#fbeeee`): sale-band background.
- **Warm Off-white** (`{colors.surface-warm}` — `#f7f6f5`): second-largest background area.
- **Light Gray** (`{colors.surface-gray}` — `#f7f7f7`).
- **Tag Gray** (`{colors.tag-gray}` — `#f0eeee`): "MEGA CODE" tags.
- **Eyebrow Peach** (`{colors.eyebrow-tag}` — `#ecc3b2`): hero eyebrow tag.
- **Dark Band** (`{colors.band-dark}` — `#333333`) [`bg-central-base`]: newsletter band in the footer.

### Text
- **Ink** (`{colors.ink}` — `#333333`): most-read text colour (body, nav, footer).
- **Ink Black** (`{colors.ink-black}` — `#000000`): headings, "View all", "SHOP NOW".
- **Ink Brand** (`{colors.ink-brand}` — `#160808`): brand names on product cards.
- **Ink Subtle** (`{colors.ink-subtle}` — `#8b8b8b`): section subtitles.
- **Ink Strike** (`{colors.ink-strike}` — `#a6a0a0`): struck original prices.

### Lines
- **Border** (`{colors.border}` — `#dcdcdc`): most frequent border; default chips.
- **Border Input** (`{colors.border-input}` — `#e5e7eb`): search field.

### Semantic
No success/error/warning palette is shown on the homepage and none is officially documented; none is declared.

## Typography

### Font Family
- **`cpnFont`** (400, 700 loaded; also `cpnFontLight`, `cpnFontBoldCondensed` declared) — dominant family for UI and body. No public source names its origin.
- **Bebas Neue** (400) — condensed all-caps display for CTAs, badges, brand names and department labels. Open-source (OFL) by Ryoichi Tsunekawa ([google/fonts metadata](https://raw.githubusercontent.com/google/fonts/main/ofl/bebasneue/METADATA.pb)).
- **`centralSangBleuFont`** (400, 500 loaded) — serif for promo headlines. SangBleu is the name of a commercial family by [Swiss Typefaces](https://www.swisstypefaces.com/fonts/sangbleu/); no source confirms how Central's font relates to it.
The stylesheet also declares `centuryGothicStdFont` and `chanelGrasC21EtPlusFont` faces (brand-shop pages); they were not measured on the homepage.

### Hierarchy

| Token | Family | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|---|
| `{typography.display-promo}` | centralSangBleuFont | 48px | 500 | 48px | — | Hero promo headline (uppercase) |
| `{typography.heading-section}` | cpnFont | 30px | 700 | 45px | — | "10.10 Marathon Sale" |
| `{typography.cta}` | Bebas Neue | 26px | 400 | 26px | 0.52px | EXPLORE MORE, SHOP NOW |
| `{typography.heading-footer}` | cpnFont | 24px | 700 | 32px | — | "WHY SHOP WITH US" |
| `{typography.brand-name}` | Bebas Neue | 20px | 400 | 20px | 2px | Card brand names |
| `{typography.eyebrow}` | Bebas Neue | 20px | 400 | 20px | 0.2px | Hero eyebrow tag |
| `{typography.body-lead}` | cpnFont | 19px | 400 | 25px | -0.38px | Hero description |
| `{typography.subtitle}` | cpnFont | 19px | 400 | 28.5px | — | Section subtitle, View all |
| `{typography.price}` | cpnFont | 19px | 700 | 28.5px | — | Sale price |
| `{typography.badge}` | Bebas Neue | 18px | 400 | 18px | — | -% badge, MEGA CODE |
| `{typography.body}` | cpnFont | 16px | 400 | 24px | — | Body default |
| `{typography.ui}` | cpnFont | 14px | 400 | 20px | — | Chips, Log in / Register (most frequent size) |
| `{typography.price-strike}` | cpnFont | 14px | 400 | 16.8px | — | Original price |
| `{typography.nav}` | cpnFont | 13px | 400 | 16.25px | — | Category nav |
| `{typography.seo-heading}` | cpnFont | 13px | 700 | 16.25px | — | Page h1 in the SEO text block (same at 390px: `{typography.seo-heading-mobile}`) |
| `{typography.caption}` | cpnFont | 12px | 400 | 18px | — | Footer service labels |

### Principles
- The page `h1` is a small 13px bold line in the bottom SEO block; the visual headline role is played by the 48px serif promo and the 30px section titles.
- Bebas Neue is always uppercase-looking and never bold; letter-spacing opens up to 2px on brand names.
- Body copy stays at 16px/24px in `#333333`.

### Note on Font Substitutes
`cpnFont` and `centralSangBleuFont` are served only by the site. If unavailable, the site's own fallbacks are `"cpnFont Fallback", Arial, sans-serif` and `"centralSangBleuFont Fallback"`. Bebas Neue is free on Google Fonts and can be used as-is.

## Layout

### Spacing System
Measured gaps cluster at 8px, 16px, 4px, 10px, 24px, 20px; paddings at 2px, 3px, 12px, 48px, 16px, 32px.
- **Tokens**: `{spacing.xxs}` 2px · `{spacing.xs}` 3px · `{spacing.sm}` 4px · `{spacing.md}` 8px · `{spacing.ml}` 10px · `{spacing.lg}` 12px · `{spacing.xl}` 16px · `{spacing.xxl}` 24px · `{spacing.xxxl}` 32px · `{spacing.section}` 48px.
- **Card padding**: 12px. **Button padding**: 16px. **Badge padding**: 2px 3px 1px.

### Grid & Container
- 1280px viewport with 32px side margins (content starts at x=32); carousels span 1216px.
- Product cards 216px wide (192px inner), about 5½ per row so the next card peeks in.
- Department row: 8 items with a right arrow.
- Brand row: circular brand logos with labels beneath.

### Page Rhythm (top to bottom, from the capture)
1. Dark utility strip (language, Stores).
2. White header: wordmark, search, account, icons; category row.
3. Hero banner carousel with arrows at both edges.
4. Department row of cut-out product photos with Bebas Neue labels.
5. Blush band: "10.10 Marathon Sale" product carousel.
6. White band: "Mega Code Brands" — circular brand logos with red offer labels beneath.
7. White band: "Mega Code Top Picks" — filter chips + product carousel.
8. Further brand banners with black "EXPLORE MORE" buttons (measured lower on the page).
9. Footer: "WHY SHOP WITH US", newsletter band, link columns, SEO text.

### Whitespace Philosophy
Generous vertical gaps between bands; cards themselves are tall (446px minimum) with the image area dominating and text bottom-aligned.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Cards, bands, buttons |
| 1 | `rgba(0, 0, 0, 0.1) 0px 2px 4px 0px` | Header (measured) |
| 2 | `rgba(0, 0, 0, 0.3) 0px 0px 4px 0px` | Small floating element (measured) |
| 3 | `rgb(136, 136, 136) -2px 2px 8px -5px` | Carousel edge (measured) |

The page is almost entirely flat; depth comes from photography and the blush/white band changes.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Buttons, badges, tags, product cards |
| `{rounded.hairline}` | 1px | Small details (measured) |
| `{rounded.xs}` | 2px | Small details (measured) |
| `{rounded.sm}` | 4px | Newsletter input; most frequent measured radius |
| `{rounded.md}` | 6px | Measured |
| `{rounded.lg}` | 8px | Measured |
| `{rounded.pill}` | 9999px | Filter chips (rendered 3.35544e+07px), brand-logo circles |

Square corners are the brand signature on everything clickable except chips.

## Components

### Buttons
**`button-primary`** — "EXPLORE MORE": black `{colors.primary}`, white `{typography.cta}` (Bebas Neue 26px, 0.52px tracking), 0px radius, 16px padding, 58px tall, 188px wide. The extractor recorded no hover change, so no hover state is declared.

**`link-shop-now`** — "SHOP NOW": the same Bebas Neue 26px in black with no background, underlined in the capture, right-aligned on hero banners.

**`link-view-all`** — "View all": `{typography.subtitle}` in black, underlined in the capture, right-aligned beside section titles.

### Chips
**`chip`** — category filters under "Mega Code Top Picks" (All, Beauty, Women …): white, `{typography.ui}`, 1px `#dcdcdc` border, pill, padding 0px 12px, 32px tall.
**`chip-selected`** — "All": border changes to 1px `#000000`.

### Badges & Tags
**`badge-discount`** — "-78%": black fill, white `{typography.badge}`, padding 2px 3px 1px, top-right of the card.
**`tag-mega-code`** — "MEGA CODE": `{colors.tag-gray}` fill, `#333333` text, same type and padding, top-left.
**`tag-eyebrow`** — "BRAND DAY: FOREO": `{colors.eyebrow-tag}` fill, black `{typography.eyebrow}`.

### Cards
**`card-product`** — white, 0px radius, 12px padding, 216×446px minimum: tags on top, cut-out photo, `{typography.brand-name}` in `{colors.ink-brand}`, two-line product name, `{typography.price}` in `{colors.price}`, struck original in `{typography.price-strike}` `{colors.ink-strike}`. The last slide of a carousel is a grey "View more" tile.

### Sections
**`section-sale-band`** — blush `{colors.surface-blush}` band containing a title row (30px title + grey subtitle, "View all" right) and a carousel.

### Inputs
**`search-input`** — header search: 1px `#e5e7eb` border, square corners, padding 8px 40px (magnifier icon inside left), 43px tall, 748px wide, placeholder "Search for products and brands".
**`newsletter-input`** — footer: white, 4px radius, padding 0px 40px 0px 24px, 40px tall, 13px text, on the `newsletter-band`.

### Navigation
**`nav`** — white header (117px, 16px top padding, Level 1 shadow): wordmark, search, account links, icons, then the 13px category row; **`nav-sale-link`** turns the last item red `#f50a3c`.

### Footer
**`footer`** — white, 32px vertical padding: centred "WHY SHOP WITH US" (`{typography.heading-footer}`) with service icons and 12px labels (Gift Wrapping Services, Earn & Redeem Points …), then the dark `newsletter-band`, link columns and the SEO block holding the page `h1`.

## Design System Architecture

Central / Central Online publishes **no public design system**, token package, component documentation or brand guidelines with values. Searches recorded in SOURCES.json found none; the only official pages found were the store history on [About Us](https://www.central.co.th/en/information/about-us). The de-facto system visible on the site:

- **Token architecture**: the site is built with Tailwind CSS v4-style variables on `:root` — e.g. `--text-2xl: 1.5rem`, `--text-lg: 1.125rem`, `--radius-sm: .25rem`, `--leading-normal: 1.5`, `--tracking-wider: .05em`, `--container-md: 28rem`, `--color-neutral-500: oklch(55.6% 0 0)`, `--ease-in: cubic-bezier(.4,0,1,1)` — plus a small brand layer: `--color-central-red: #f50a3c` and font variables `--font-cpn`, `--font-bebas-neue`, `--font-central-sang-bleu` (and an empty `--font-chanel`). Component styling uses utility classes and arbitrary values directly in markup (`font-bebas-neue`, `bg-[#F0EEEE]`, `text-[19px]`, `h-[32px]`, `min-h-[446px]`, `bg-central-base`, `text-central-base`).
- **Tiers**: Tailwind's default primitive palette (`--color-gray-*`, `--color-red-*` in OKLCH) → a few brand utilities (`central-red`, `central-base`) → hard-coded per-component values. There is no semantic token tier.
- **Theming**: no dark mode or theme switch observed. Brand-shop fonts (`chanelGrasC21EtPlusFont`, `centuryGothicStdFont`) are declared for partner brand pages.
- **Type & spacing**: Tailwind's 4px spacing scale underlies most gaps (4, 8, 12, 16, 24, 32, 48px), mixed with arbitrary values (2px, 3px, 10px). Type sizes: 12, 13, 14, 16, 19, 20, 24, 26, 30, 48px.
- **Component model**: carousels use Swiper (`swiper-wrapper`, `swiper-slide` classes; `--swiper-theme-color` var). Recurring components: product card, discount badge, Mega Code tag, filter chip, section header with View all, department tile, brand-logo circle, hero banner.
- **Accessibility**: a screen-reader-only input (`sr-only`) exists in the header; no published accessibility standard was found.
- **Delivery**: no npm package, Figma kit or versioned library is public.

## Do's and Don'ts

### Do
- Use black `#000000` for buttons and badges, with Bebas Neue labels.
- Keep buttons, badges, tags and cards square (0px).
- Use red only for the wordmark, the Sale link and prices.
- Pair a 30px bold section title with a grey 19px subtitle and an underlined "View all".
- Put sale content on blush `#fbeeee` bands.
- Use the serif `centralSangBleuFont` only for big promotional headlines.

### Don't
- Don't round buttons or cards — only filter chips are pills.
- Don't use red as a button colour.
- Don't bold Bebas Neue; it is single-weight 400.
- Don't set body copy in pure black; use `#333333`.
- Don't add shadows to product cards.
- Don't mix in additional display faces on core pages.

## Responsive Behavior

### Breakpoints

| Name | Width | Key Changes |
|---|---|---|
| Desktop | 1280px measured | 117px header with category row, 5½ cards per carousel |
| Mobile | 390px measured | Same type sizes for h1 (13px), section titles (30px/45px), body lead (19px/25px); EXPLORE MORE button unchanged |

### Touch Targets
- Chips 32px tall; EXPLORE MORE 58px; search 43px; newsletter input 40px.

### Collapsing Strategy
- Carousels stay horizontal and swipeable on mobile.
- Footer padding uses the classes `py-4 md:py-8`: 32px measured at 1280px, a smaller step below the `md` breakpoint (not measured).

### Mobile Notes
- The mobile `ctaPrimary` measured at 390px is the same black Bebas Neue "EXPLORE MORE" button.
- The section title "10.10 Marathon Sale" keeps 30px/700/45px and truncates within 289px.
- The hero description keeps 19px with -0.38px tracking.
- Mobile font sizes are led by the same 14px / 19px / 20px / 18px set as desktop.

### Image Behavior
Product images are cut-outs on white so they sit cleanly on both white and blush bands; hero banners are wide editorial images.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.ink}` and `{typography.body}`.
2. Primary actions: `button-primary` — black, square, Bebas Neue 26px.
3. Section headers: `{typography.heading-section}` + `{typography.subtitle}` in `{colors.ink-subtle}` + `link-view-all`.
4. Product cards: `card-product` with `badge-discount` and `tag-mega-code`.
5. Promotional headlines: `{typography.display-promo}` uppercase.
6. Prices: `{typography.price}` in `{colors.price}` with `{typography.price-strike}`.
7. Measure any new component on central.co.th before adding it.
