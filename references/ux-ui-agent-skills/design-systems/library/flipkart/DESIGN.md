---
version: alpha
name: Flipkart
category: "Retail & E-commerce"
description: "Flipkart India: white marketplace canvas with #f1f3f6 backgrounds, Flipkart blue #2874f0 for links and the search outline, midnight blue #2a55e5 Login button (2px radius), golden-yellow #ffc200 chips, Inter 14px body and 12px captions, 12px-radius white cards over saturated sale-banner panels."
colors:
  golden-yellow: "#ffc200"
  offer-green: "#008c00"
  text-error: "#ff4343"
  canvas: "#ffffff"
  ink: "#707070"
  primary: "#2a55e5"
  on-primary: "#ffffff"
  surface-grey: "#f1f3f6"
  surface-cool: "#f0f2f5"
  ink-black: "#000000"
  ink-deep-blue: "#133fb9"
  ink-nav: "#333333"
  ink-dark: "#1f1f1f"
  brand-blue: "#2874f0"
  text-input-text: "#3d3d3d"
  footer-bg: "#212121"
  footer-text: "#878787"
  footer-border: "#f5f5f5"
typography:
  display:
    fontFamily: inter_semi_bold, fallback-inter_semi_bold, Arial, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: "-0.02px"
  display-mobile:
    fontFamily: inter_bold, fallback-inter_bold, Arial, sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.01px"
  body:
    fontFamily: inter_regular, fallback-inter_regular, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: inter_regular, fallback-inter_regular, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
  nav:
    fontFamily: inter_regular, fallback-inter_regular, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
  input:
    fontFamily: inter_regular, fallback-inter_regular, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 3px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 16px
  3xl: 30px
  4xl: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    height: 50px
  link:
    textColor: "{colors.brand-blue}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink-nav}"
    padding: 12px 16px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    height: 40px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
    rounded: "{rounded.xl}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.footer-text}"
    borderColor: "{colors.footer-border}"
---

## Overview
The measured page is the Flipkart home page (flipkart.com, titled "Online Shopping India Mobile, Cameras, Lifestyle & more Online @ Flipkart.com", language en-IN). It is a dense marketplace home in the middle of a sale: the capture shows a top row with the yellow Flipkart tab (logo and wordmark) beside a grey Travel tab and a "Location not set - Select delivery location" link; a full-width search field with a blue outline and the placeholder "Search for Products, Brands and More"; Login, More and Cart controls; a category strip with outline icons (For You, Fashion, Mobiles, Electronics, Beauty, Home, Appliances, Toys, Food, Auto Accessories, Sports, Furniture, Books, 2 Wheelers); a carousel of sale banners (the Big Billion Days campaign) with bank-offer strips; a wide advertising banner marked AD; and a series of rounded panels in blue and purple gradients holding product rows (Top deals on tech, Bestsellers of the sale, Widest collection, In The Spotlight, Best Gadgets & Appliances) with price labels such as "From ₹81,999*". The measured page is 5,049px tall with 1,817 visible elements. The voice is transactional and numeric: prices, "Min. 70% Off", "Just ₹11,499*". The consent overlay detected by the extractor was hidden before measuring and is not documented here.

## Colors
White (#ffffff) is the main canvas. Greys separate sections: #f1f3f6 and #f0f2f5 are measured background areas, and the stylesheet's variables include #f5f5f5, #fafafa and #e0e0e0 for borders. Text is led by a mid grey #707070 for descriptive copy, black #000000, a deep blue #133fb9, dark #333333 for navigation and #1f1f1f; white text covers the gradient panels. Brand blue #2874f0 is the stylesheet's `--linkColor`, `--textLink` and `--headerBgColor`; it is the measured link and outline color (the search box border). The Login button fill is a deeper blue, #2a55e5, named `--midnight-blue`. A golden yellow, #ffc200, appears as the Flipkart tab and chip accent; `--offer-green` #008c00 labels offers and `--textError` is #ff4343. Sale panels use saturated violet and blue gradient fills (for example #9b66ff and #5979ff measured as background areas). The footer is dark, #212121, with #878787 text.

## Typography
Typography is Inter, loaded as separate files with weight in the family name: inter_regular (400), inter_semi_bold (600) and inter_bold (700), each with a `fallback-inter_*` companion, then Arial and `sans-serif`; Roboto is also loaded (400), and Noto Sans Devanagari is also loaded. The display style (section titles such as "Top deals on tech") is 22px with a 30px line height and -0.02px letter spacing; on a 390px viewport the title is 17px with a 24px line height. Body and caption text is 12px with an 18px line height; navigation is 14px with an 18px line height; button text is 18px; and the search field text is 16px with a 20px line height. The dominant measured sizes are 14px (1,813 characters) and 12px (874). All measured weights are reported as 400 because the weight is encoded in the font file name.

Font substitutes: the Inter files are loaded by the site; the declared fallbacks are Arial and `sans-serif`.

## Layout
The page is 1280px wide with an inner content column of about 1136px (the section title row measured 1136px) and a 1200px header wrapper with 12px 16px padding. The header is 64px high. Content is a stack of full-width rounded panels, each with a heading row and a horizontally scrolling product carousel with a circular arrow control at its right edge; the category strip and the banner carousel sit above. The Widest collection and Best Gadgets panels use a white inner card with four product tiles. The marketplace variables set item sizes (`--marketplace-item-height` 60px, `--marketplace-item-width` 280px). Measured paddings are 4px (47 uses), 8px, 2px, 12px and 16px, and gaps are 8px, 16px and 20px.

## Elevation & Depth
Depth is limited: the CSS corpus contains `0 1px 4px rgba(0,0,0,.12)` for small lifted elements and `0 8px 8px 1px rgba(0,0,0,.3)` for overlays; the measured visible cards recorded no shadow. Hierarchy is made through colour panels: saturated gradient panels act as headers for white product tiles, and the page background (#f1f3f6) separates them.

## Shapes
Radii are generous on containers and small on buttons. The most common measured radius is 16px (75 elements, including panel tops and bottoms in `16px 16px 0px 0px` and `0px 0px 16px 16px` forms), then 6px, 12px (the card radius and `--dropdown-border-radius`), 8px (`--dropdown-border-radius-sm`), 3px; the Login button measured 2px. Circular arrow controls use a round radius, and product images are rectangles with rounded corners at the card edge.

## Components
- **Primary button (Login):** #2a55e5 fill, white 18px text, 150px wide, 50px high, 2px radius.
- **Search field:** a 40px-high white input, 16px text, 821px wide, with a blue (#2874f0) outline and a search icon at the left.
- **Navigation:** Login, More and Cart in 14px #333333 text on a 64px header with 12px 16px padding.
- **Category strip:** icon above a 14px label, with the active "For You" item highlighted in a pale tile.
- **Sale panel:** a rounded gradient panel with a 22px white title and a product carousel.
- **Product tile:** a white 12px-radius card containing an image, a price label bar in blue and a product name.
- **Link:** #2874f0 at 12px, for example the support phone number in the footer.
- **Footer:** #212121 fill, #878787 text, with link columns under ABOUT and other headings.

## Design System Architecture
No public or official design-system documentation for Flipkart was opened for this entry, and none is linked from the pages measured. The shipped CSS shows a large, named variable system on the root element: color tokens (`--textBlack`, `--warmGrey`, `--backgroundGrey`, `--midnight-blue`, `--golden-yellow`, `--offer-green`), font tokens (`--font-inter`, `--font-interSemiBold`, `--font-roboto`, `--font-size-regular` 14px), and component tokens (`--dropdown-border-radius`, `--dropdown-spacing-xs` to `--dropdown-spacing-xl` at 4px, 8px, 12px, 16px and 20px, `--radio-button-size` 20px). Measured source: https://www.flipkart.com/ (extraction of 2026-10-09).

## Do's and Don'ts
- Do use #2874f0 for links and the search outline, and #2a55e5 for the filled Login button.
- Do set text in Inter at 14px and 12px; reserve 22px for section titles on gradient panels.
- Do use white 12px-radius tiles on saturated panels and #f1f3f6 between sections.
- Do show price and discount in bold on a coloured label bar under each product.
- Don't use the sale campaign gradients as permanent brand colors; they appear in the sale-period banners of the capture.
- Don't document the consent overlay or the AD marker as brand UI.
- Don't round buttons to pills; the primary measured 2px.

## Responsive Behavior
The 390px mobile pass measured the display title at 17px with a 24px line height and 326px width, the header at 64px high and 390px wide with a 12px Cart label and 16px line height, and most-read sizes of 12px (1,220 characters), 11px, 14px and 17px. How the category strip, panels and carousels reflow at other widths and where the breakpoints are was not measured.

## Iteration Guide
1. Use white and #f1f3f6 as the page surfaces, with #707070 for secondary copy.
2. Keep links and the search outline #2874f0; the main button #2a55e5 at 2px radius.
3. Set Inter 14px for UI text and 22px for panel headings.
4. Place white 12px-radius product tiles inside rounded panels with a blue price bar.
5. Use #ffc200 for tab and chip accents and #008c00 for offer labels.
6. Treat sale artwork as campaign content, not as tokens.
