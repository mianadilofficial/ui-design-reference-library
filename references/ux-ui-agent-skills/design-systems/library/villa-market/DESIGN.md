---
version: alpha
name: Villa Market
category: "Thai Brands"
description: "Villa Market's online grocery storefront (shop.villamarket.com) — a light-grey canvas (#eeeeee) with white product cards, a Villa red (#c72027) for the recommended strip, prices and badges, a deep navy (#2c2a74) navigation bar and headings, green cart buttons (#178841), and the system UI sans-serif stack at weights 400 to 800."
colors:
  canvas: "#eeeeee"
  page-largest: "#ffffff"
  ink: "#3a474e"
  primary: "#c72027"
  surface-red: "#c62128"
  surface-navy: "#2c2a74"
  ink-navy: "#282669"
  accent-green: "#178841"
  ink-grey: "#979797"
  text-input-text: "#000000"
  text-input-border: "#c2c2c2"
typography:
  display:
    fontFamily: "ui-sans-serif, system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 17px
    fontWeight: 800
    lineHeight: 25.5px
  display-mobile:
    fontFamily: "ui-sans-serif, system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 19.2px
    fontWeight: 500
    lineHeight: 28.8px
  body:
    fontFamily: "ui-sans-serif, system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 11.5px
    fontWeight: 400
    lineHeight: 32px
  input:
    fontFamily: "ui-sans-serif, system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 3px
  sm: 4px
  md: 8px
  lg: 10px
  xl: 16px
  2xl: 20px
  3xl: 28px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3.99px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 13px
  s10: 16px
components:
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xl}"
    padding: 0px 12px
    height: 32px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.page-largest}"
    rounded: "{rounded.md}"
---

## Overview

Villa Market describes itself on its title bar as "Villa Market - Thailand's Original International Supermarket", and this DESIGN.md documents its online storefront at shop.villamarket.com (the address the main domain resolves to in the extraction). The page is a dense, promotion-heavy grocery front: a full-width promotional banner at the top, a header with the logo, search and sign-in, a navy bar of informational links, a horizontally scrolling "Recommended for you" strip, two large promo banners, a row of circular category photographs, a "Market Place" row of partner-brand logos, and then product carousels titled "Promotions" (with an "Imported Snacks" sub-tab) and "New Arrival".

The look is a retail-catalogue look. White cards sit on a pale grey page. Product photographs fill the cards edge to edge, small country-flag badges mark origin (UK, USA, Italy, Germany, Australia and Thailand flags appear on cards), and red "EXCLUSIVE", "BEST SELLER" and "New!" ribbons sit in card corners. Prices are set in a bold navy with a baht sign (for example ฿189). Round green cart buttons sit at the lower right of every card.

The brand identity is built from three colours: a Villa red (#c72027 and the nearly identical #c62128), a deep navy (#2c2a74 and #282669), and a retail green (#178841) reserved for the add-to-cart action. Red and navy match the logo, which is a navy wordmark with a red V mark and the words "VILLA MARKET". The tone of the microcopy is friendly and promotional and in English, with phrases such as "SIMPLE GOODNESS, READY WHEN YOU ARE.", "PANTRY READY WHENEVER YOU NEED IT." and a "SAVE 50 THB ONLINE" coupon style. Location is shown in the header as "SUKHUMVIT 33" with a pin.

At capture time a rewards campaign ("10.10 XTRA REWARDS", "EARN 10X VPLUS POINTS", "FREE DELIVERY") occupied the top banner. These campaign banners change; the structure around them is the stable design.

## Colors

- **Canvas (#eeeeee)** is the page background seen between cards and around carousels.
- **White (#ffffff)** is the largest surface by area: product cards, the header and the search field.
- **Ink (#3a474e)** is a blue-grey charcoal and is by far the most-read text colour (11,271 measured characters), used for product names, sizes and category labels.
- **Primary red (#c72027)** appears as text (prices, discount percentages, "View all"-style accents) and in the border and fill of the "Recommended for you" strip. The slightly different **surface red (#c62128)** is the measured background fill of that strip's header and badges.
- **Navy (#2c2a74)** fills the informational navigation bar and the icon bar below the banners, and appears as text for section headings and prices. **Navy ink (#282669)** is the text variant measured on headings and prices.
- **Green (#178841)** is the background of the circular add-to-cart buttons on product cards.
- **Grey (#979797)** is for disabled or secondary text such as a disabled cart icon, and **input border grey (#c2c2c2)** outlines the search field.

Photography brings the rest of the colour: meat reds, snack-brand yellows and blues. The interface colours are kept to red, navy and green so the product images can carry the page. The extraction also found default framework variables (a bright blue, purple and teal among them); those are library defaults, not brand colours, and are not used here.

## Typography

The site uses the browser's system UI stack rather than a licensed web font: `ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif` plus emoji fonts. Material Icons and Font Awesome 5 Free supply the icons (home, list, user, chat and cart glyphs on the navy bar; the cart on the green buttons). No Thai-specific font is loaded on this English page, so Thai text, if shown, falls to the system's Thai-capable face.

The type scale is small and tight. The section header "Recommended for you" is 17px at weight 800 with a 25.5px line height. Category labels are 11.5px at weight 400 with a 32px line height. Input text is 14px at weight 400. Weight 500 carries the most characters on the page (11,421), so card text is medium weight by default, while 800 is reserved for strip headers and bold price figures. On a 390px viewport the first-level heading becomes 19.2px at weight 500.

Product names truncate with an ellipsis, so titles stay on one or two lines at a constant card width. The large "Promotions" and "New Arrival" headings are navy and noticeably bigger than card text, which makes the sections scannable.

Font substitutes: none needed; the site relies on system fonts, so any system sans-serif reproduces it.

## Layout

The desktop capture is 1280px wide and 5329px tall. The structure is a single column of horizontal bands, each containing a carousel or grid.

1. Top campaign banner, full width, with a close icon at the right.
2. Header: logo at the left, a long rounded search field ("Search..." with a magnifier), then "SIGN IN", "SIGN UP" and the location chip at the right.
3. Navy information bar with seven uppercase items: ABOUT, TERMS OF SERVICE, PRIVACY POLICY, RECIPES, CONTACT, FAQ, SUPPLIERS, plus a flag and "English" at the right.
4. "Recommended for you" strip: a red-bordered rounded container holding a row of cards that scroll sideways.
5. Two promo banners side by side.
6. A navy icon bar with five icons.
7. Circular category tiles in two rows.
8. "Market Place" brand-logo row.
9. "Promotions" and "New Arrival" carousels.

Spacing values are small (1, 4, 5, 6, 8, 10, 12, 13 and 16px), reflecting a dense catalogue grid. Carousels show arrows at their edges.

## Elevation & Depth

Depth is soft and card-based. White cards sit on the grey canvas with a subtle edge rather than a heavy shadow, and the "Recommended for you" strip is set apart by a red outline and a rounded container instead of elevation. The category circles are photographs cropped to circles. Badges (flag, EXCLUSIVE, BEST SELLER, New!) overlap the card corners, which is the main use of layering. The top banner and promo banners are flat illustrated images.

The navy icon bar between sections is visually the heaviest element on the page, which gives it priority without needing shadows.

## Shapes

Shape is notably rounded and varied. Measured radii on the page include 3px, 4px, 8px (the most common card radius, applied to 317 elements), 10px, 16px (the search input), 20px, 28px and fully round shapes (50% for category circles and circular buttons, plus 9999px pills). Product cards use the 8px radius. The search field uses a 16px radius with a 1px #c2c2c2 border and 12px horizontal padding, 32px high. The add-to-cart control is a solid green circle with a white cart icon. Category tiles and brand circles are perfect circles; the "Recommended for you" container is a rounded rectangle with a red border; badges are small rectangles or shield shapes.

Icons are Material Icons in white on navy, and flags are small rounded-rectangle images.

## Components

**Campaign banner.** Full-width image with a close control; content changes by campaign.

**Header search.** White input, 32px high, 16px radius, 1px #c2c2c2 border, 14px text, a magnifier at the right edge, placeholder "Search...".

**Navy information bar.** Uppercase, small bold white labels on #2c2a74, with a language flag and "English" at the right.

**Recommended strip.** Red heading band with "Recommended for you" in white at 17px / weight 800 and a right-aligned "View all" pill; below it, cards.

**Product card.** White, 8px radius; image on top with a flag badge and optional red ribbon; product name (truncated), size or weight, price in bold navy, optional strike-through original price and a red discount percentage; a green circular cart button at the lower right (a grey cart icon appears on some cards in place of the green button). A "Deliver in 2-4 Days" micro-label appears on some cards.

**Category circle.** Photograph in a circle with a small centred label beneath at 11.5px.

**Brand-logo tile.** White tile with a partner logo and a short name beneath ("Smeg", "Pacific Point", "GiGiwi", "prynwan", "Yuvicorn", "Hug Organic" and Villa Market's own Kid's Corner and Pet's Corner).

**Section header.** Large navy heading with an underlined tab or underlined sub-heading and a right-aligned "See all" link.

## Design System Architecture

No public design system, brand guideline or token package for Villa Market was found among the pages I opened: https://shop.villamarket.com/ returned only the site name and tagline to the fetch tool, and the main domain did not respond (see SOURCES.json `_toolErrors`). The measured root variables show the storefront is assembled from a UI framework with default tokens: variables prefixed `--q-` (breakpoints 600px, 1024px, 1440px, 1920px, and default framework colours) and `--tw-` (utility-class shadow and ring variables), and the font stack is the utility-class system stack. These are framework defaults, not Villa Market's brand tokens.

The brand values therefore live in component styles, not in root variables: the red (#c72027), navy (#2c2a74) and green (#178841) above were measured on rendered elements. The frontmatter tokens are exactly those measured values, and the radii and spacing are those found on the rendered page. No documented component names are available.

## Do's and Don'ts

Do keep the canvas light grey and the cards white so that product photography is the focus. Do use red for promotion cues (prices, discounts, ribbons), navy for navigation and headings, and green only for the add-to-cart action. Do use 8px card radii, a 16px rounded search field and circular category images. Do show origin flags and short badges on cards. Do keep copy short, bilingual-ready and promotional.

Don't use the framework-default blue, purple or teal as brand colours. Don't add decorative shadows or gradients to cards. Don't use a custom display font; the system stack is the brand's choice. Don't make the green button anything other than a circle, and don't use green for text. Don't let campaign banner artwork dictate the interface palette: banners change with each promotion.

## Responsive Behavior

The extractor measured the page at 1280px and at 390px. At 390px the first-level heading is 19.2px at weight 500 with a 28.8px line height, while the desktop header is 17px at weight 800. The framework breakpoints defined on the page are 600px, 1024px, 1440px and 1920px. The page already carries mobile-app patterns on desktop: the navy icon bar with home, list, user, chat and cart icons, the horizontally scrolling carousels with arrows, and circular category tiles. Other narrow-layout details were not captured, so no reflow rules are claimed.

## Iteration Guide

1. Set the canvas to #eeeeee and cards to #ffffff with an 8px radius.
2. Use the system UI font stack; 800 for strip headings (17px), 500 for most text, 400 for 11.5px labels.
3. Use #3a474e for text, #c72027 for price and promotion accents, #2c2a74 for the navigation bar and big section headings.
4. Use #178841 for circular cart buttons only.
5. Make the search field white with a 1px #c2c2c2 border, 16px radius, 32px height.
6. Keep photography cropped edge-to-edge in cards and as circles for categories.
7. Add flag, EXCLUSIVE, BEST SELLER and New! badges at card corners.
8. Check any new colour against web/data/extracted/villa-market.json first.
