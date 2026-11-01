---
version: alpha
name: "Doi Chaang Coffee Co."
category: "Thai Brands"
description: "Doi Chaang Coffee Co. (Thai Mountain Coffee) is a WordPress storefront in navy #14324e, burnt orange #df5929, yellow #f6ce3d and cyan #00a7e1, with Metropolis body at 21px, a Vestige Harmony serif display at 38px, square 2px-ring outline buttons and a triangle pattern motif."
colors:
  canvas: "#ffffff"
  page-largest: "#14324e"
  ink: "#5b5b5b"
  accent-cyan: "#00a7e1"
  grey-light: "#cccccc"
  yellow: "#f6ce3d"
  primary: "#df5929"
  amber: "#ea8930"
  on-primary: "#ffffff"
  yellow-deep: "#eeba1d"
  lavender-grey: "#b2afc4"
  red: "#cf2c2e"
  surface-warm: "#F5F4F4"
  grey-mid: "#999999"
typography:
  display:
    fontFamily: ct_font_vestige_harmony, sans-serif
    fontSize: 38px
    fontWeight: 700
    lineHeight: 57px
  display-mobile:
    fontFamily: ct_font_vestige_harmony, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 42px
  body:
    fontFamily: ct_font_metropolis, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 31.9998px
  link:
    fontFamily: ct_font_metropolis, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
  input:
    fontFamily: ct_font_metropolis, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24.3808px
  nav:
    fontFamily: ct_font_metropolis, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 23.4px
rounded:
  xs: 3px
  sm: 5px
spacing:
  s1: 3.5px
  s2: 4px
  s3: 8px
  s4: 10.5px
  s5: 12px
  s6: 13.5px
  s7: 14px
  s8: 16px
  s9: 21px
  s10: 31.5px
components:
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    height: 40px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    padding: 96px 0px
  button-outline:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    padding: 16px 40px
    height: 48px
    borderColor: "{colors.accent-cyan}"
---

# Doi Chaang Coffee Co.

## Overview

The measured site, `https://doichaangcoffee.com/`, is the English-language (`en-CA`) storefront of Doi Chaang Coffee Co., titled "Home - Doi Chaang Coffee Co." and selling "Thai Mountain Coffee": single-estate, organic Arabica from the Golden Triangle of Thailand. The Thai-brand queue entry therefore resolves to the company's own sales site, which also uses "DOI CHAANG" as a small orange line above the large navy "THAI MOUNTAIN COFFEE" wordmark. Navigation is Home, Shop, Our Story, Our Coffee, Wholesale (with Retail Sales and Food Service Sales beneath it) and Contact, with login and cart icons. The footer area offers a mailing-list form and links to FAQs, Terms & Conditions and Privacy Policy.

The look is warm and graphic. A saturated yellow hero carries a pattern of overlapping orange, amber and red triangles that frame a photograph of a hand holding a latte over a mountain road, with the large serif headline "Taste the warmth of Thailand" in white. Below it a navy band holds the heading "It's time to try Thai" and an outlined "LEARN MORE" button; the product section "Our coffees: different from the ground up" shows upright navy coffee bags whose tops repeat the triangle motif, each with a name in bold navy ("Hardwired", "Social Medium", "Buzzin'") and a roast label in bright cyan ("Dark roast", "Medium roast"); a full-bleed landscape photograph carries an orange panel titled "Expand your horizons". The triangles from the packaging recur throughout the page as the brand's pattern language.

Copy is warm and slightly playful for a retail coffee brand ("Espress Yoself!", "Buzzin'", "Social Medium"), and leads with origin and ethics: shade-grown, sun-dried, Fairtrade, "prosperity to the dedicated farmers who cultivate them".

## Colors

The site declares a numbered WordPress theme palette, and all of the following were measured or declared there.

- **Canvas `#ffffff`**: the page and header background (palette 8).
- **Page largest `#14324e`**: deep navy, the largest background area (920 units), the footer fill and the heading color (`--theme-headings-color` points at palette 1).
- **Ink `#5b5b5b`**: body copy on white (palette 5, 320 characters).
- **Primary `#df5929`**: burnt orange (palette 2), the theme's initial button background, the active nav item and the outline of the "LEARN MORE" and "SHOP ALL" buttons.
- **On-primary `#ffffff`**: `--theme-button-text-initial-color`; also the text on the navy band.
- **Accent cyan `#00a7e1`**: roast labels and links (palette 12, 46 characters).
- **Yellow `#f6ce3d`** (palette 3): the hero field, 681 units. **Amber `#ea8930`** (palette 9): the "Expand your horizons" panel at about 90 percent opacity (`#ea8930e6` in the background list) and the theme's button hover color.
- **Declared further palette**: `#eeba1d` (10), `#b2afc4` (11), `#cf2c2e` (13), `#F5F4F4` (14), `#999` (6), `#000000` (4) and `#cccccc` (7, measured as a 768-unit background).

Hover on navigation links shifts navy text to orange at 0.75 opacity. The WordPress admin variables (`--wp-admin-theme-color` and similar) are editor defaults, not brand colors.

## Typography

Two custom families: `ct_font_metropolis` (a geometric sans, 1,193 characters) and `ct_font_vestige_harmony` (the serif display face, 72 characters); the font list also loads icon fonts (dashicons, FontAwesome, WooCommerce, slick, swiper). The theme sets `--theme-font-size: 21px`, weight 400, letter-spacing 0em.

- **Display**: Vestige Harmony 38px / 57px, weight 700 (the declared `xx-large` size); 28px / 42px on the 390px pass (`display-mobile`).
- **Body**: Metropolis 21px / about 32px, weight 400.
- **Nav**: Metropolis 18px / 23.4px, weight 700.
- **Link / button label**: Metropolis 16px, weight 700, uppercase labels such as "LEARN MORE", "SHOP ALL" and "JOIN NOW".
- **Input**: Metropolis 16px / about 24px, weight 400.

The theme's preset sizes are 16px (normal), 18px (small), 21px (medium), 24px (large), 32px (x-large), 38px (xx-large) and 42px (huge). Only weights 400 (1,026 characters) and 700 (239) were measured in use, although the theme declares 500 for buttons.

## Layout

The desktop pass measured 1280px wide and a 3,246px page height. The theme declares a normal container maximum of 1240px, a narrow container of 750px, a content size of 1040px (the measured width of the hero heading and body paragraph) and vertical content spacing of 60px. The header is 1280 × 150px with the wordmark left and the nav and icons right. The navy band centers its text; the coffees appear as a horizontal carousel of three visible bags with a play-style arrow at the right edge; the landscape band is full width with the orange panel anchored to its lower right; the navy footer measured 1280 × 341px with 96px vertical padding. Frequent paddings are 8px, 40px, 16px and 36px.

## Elevation & Depth

There are no drop shadows. The only `box-shadow` values measured are 2px inset rings, `rgb(223, 89, 41) 0px 0px 0px 2px inset` (3 elements) and a white one (1), which draw the outlines of the ghost buttons. The theme also declares `--theme-button-shadow: none`. Depth comes from color blocks, photography and the layered triangle pattern.

## Shapes

Geometry is angular. The theme declares a button radius of 0px, so the outlined buttons are square; the search or email input measured 3px and one element 5px. `--radius: 8px` is declared but its use was not measured. The defining shape is the triangle: isosceles triangles in orange, amber, yellow and red form the hero pattern, the bag tops and decorative corners.

## Components

- **Outlined button** (`button-outline`): 2px inset orange ring, Metropolis 16px weight 700 uppercase text (white on navy, orange on white), 0px radius, padding `16px 40px`, 188 × 48px for "LEARN MORE". The theme's filled-button defaults are orange `#df5929` background, white text, hover `#ea8930`, minimum height 40px and padding `5px 20px`.
- **Navigation**: Metropolis 18px bold, navy with the current item in orange, small vertical dividers between items in the capture.
- **Product card**: bag image, bold navy name, cyan roast label, no visible frame.
- **Email input**: 300 × 40px, 3px radius, 16px text.
- **Footer**: navy `#14324e`, white text, 96px vertical padding.

## Design System Architecture

No public brand guidelines or design system were found: the home page links to shop, story, wholesale, contact, social and legal pages only. The site is a WordPress and WooCommerce build whose theme exposes its system as custom properties: `--theme-palette-color-1` to `-14`, `--theme-font-family`, `--theme-button-*` (background, hover, radius, padding, min-height 40px, font size 16px, weight 500), container widths, and the matching `--wp--preset--color--palette-color-N`, `--wp--preset--font-size--*` and `--wp--preset--spacing--*` presets; 220 root variables were recorded. Source: `https://doichaangcoffee.com/`.

## Do's and Don'ts

- Do pair navy `#14324e` with burnt orange `#df5929`, and bring in yellow `#f6ce3d` and amber `#ea8930` as the warm fields.
- Do reuse the triangle motif for patterns, packaging tops and corners.
- Do set display headings in the serif at 38px and everything else in Metropolis.
- Do use square, outlined buttons with uppercase bold labels.
- Don't round the buttons or add shadows; the theme declares 0px radius and no shadow.
- Don't use the cyan `#00a7e1` for calls to action; it labels roast levels and links.
- Don't treat WordPress admin colors (`#007cba`, `#7a00df`) as brand colors.

## Responsive Behavior

The 390px pass recorded: the heading "It's time to try Thai" at 28px / 42px (down from 38px / 57px), body text at 18px / 24px (down from 21px), and a header 390 × 110px tall with no recorded text. The theme declares container edge spacing but no breakpoints were recorded; the mobile navigation mechanism, product-carousel behavior and column counts were not measured.

## Iteration Guide

1. Load Metropolis and Vestige Harmony; set ink `#5b5b5b` on white and navy `#14324e` for headings and the footer.
2. Build the header at about 150px with the wordmark left and bold 18px nav right.
3. Compose the hero as a yellow field with a triangle pattern and a photograph, headline in white serif.
4. Use navy bands with centered text and 2px-ring square buttons in orange.
5. Show products as bags with navy names and cyan roast labels.
6. Run `node web/scripts/verify-designs.mjs --slug=doi-chaang` after edits.
