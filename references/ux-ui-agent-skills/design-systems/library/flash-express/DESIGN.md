---
version: alpha
name: Flash Express
category: "Thai Brands"
description: "Flash Express Thailand (English site): signature yellow #ffea33 header, buttons and promo cards with charcoal #303133 text, Prompt typeface (14px body, 32px section headings, 57px bold promo display), white 8px-radius cards with soft shadow, and a tracking search bar."
colors:
  canvas: "#ffffff"
  ink: "#606266"
  primary: "#ffea33"
  on-primary: "#303133"
  surface-light: "#fafafa"
  surface-cool: "#f9fafc"
  ink-body: "#33363f"
  ink-black: "#000000"
  ink-heading: "#333333"
  primary-hover: "#feee5b"
typography:
  display:
    fontFamily: Prompt, serif, element-icons
    fontSize: 57px
    fontWeight: 700
    lineHeight: 64px
  heading:
    fontFamily: Prompt, serif, element-icons
    fontSize: 32px
    fontWeight: 500
    lineHeight: 45px
  subheading:
    fontFamily: Prompt, serif, element-icons
    fontSize: 32px
    fontWeight: 400
    lineHeight: 44px
  body:
    fontFamily: Prompt, serif, element-icons
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: Prompt, serif, element-icons
    fontSize: 16px
    fontWeight: 500
    lineHeight: 36px
  button-secondary:
    fontFamily: Prompt, serif, element-icons
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  input:
    fontFamily: Prompt, serif, element-icons
    fontSize: 20px
    fontWeight: 400
    lineHeight: 33px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 12px
  xl: 30px
  2xl: 46px
  none: 0px
  pill: 9999px
spacing:
  s1: 6px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 15px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 26px
    height: 64px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 44px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 4px 28px 0px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 180px 0px 56px
    height: 80px
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 2px 12px 0px
  footer:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

## Overview
The measured page is the English home page of Flash Express Thailand (flashexpress.com), titled "Thailand Leading and Best Logistics, Courier and Delivery Company | Flash Express Thailand". It is a consumer and merchant parcel-delivery site built in bright yellow. The capture shows a dark utility strip (Login, Signup, a Thailand country selector, an English language selector), a yellow main header with the italic FLASH EXPRESS logo and eight links (Track & Trace, Schedule Pick Up, Shipping Rates, Nearby Branches, Our Services, News Center, FAQ, Contact Us), a photographic hero carousel with two smiling couriers and customers and a large Thai headline about a new plant-parcel service, and directly beneath it a wide white tracking bar with a yellow Track button. Below are three yellow-accented promo cards (Special Rates for KA merchants, Send Parcel, COD service), an Our Service row of seven outline icons on a white card, a shipping-cost estimator beside a branch map, and a Flash Express Services grid (B2B, B2C, C2C, Next Day, Weekend, WMS, On-Time). A Live chat bubble overlays the promo cards; it is a chat widget and is not documented as brand UI. The voice is practical and promotional: "Register as KA", "Min. of 10 parcels/day", "Starting from 2.5%".

## Colors
Yellow #ffea33 is the brand and action color: it fills the header, the Track and Search buttons, promo cards, the section underline accents and the footer heading text, with hover #feee5b on the Track button. Text on yellow is charcoal #303133, and the page ink is a grey #606266 (the most-read text color), with #33363f for body paragraphs, #000000 for promo headlines, #333333 for section headings and #737373 for small print. Surfaces are white (#ffffff) and very light greys (#fafafa and #f9fafc) that cover large page areas; the utility strip is #333333. The stylesheet carries the Element UI default palette (#409eff blue, #f56c6c, #67c23a, #e6a23c and greys such as #c0c4cc and #909399); those are component-library defaults and not brand colors. The Thai hero artwork also uses green and black type, but these are image content.

## Typography
The single family is Prompt, a Thai-and-Latin sans, loaded at weights 400, 500, 600 and 700 (the measured stack is `Prompt, serif, element-icons`, with the icon font named after the text face). The display style is 57px at weight 700 with a 64px line height ("Special Rates"); the section heading is 32px at weight 500 with a 45px line height ("Our Service"); a 32px weight 400 style has a 44px line height; body copy is 14px at weight 400 with a 20px line height; buttons are 16px at weight 500 with a 36px line height, and the secondary Search button is 16px at weight 400; the tracking input text is 20px at weight 400 with a 33px line height. Prompt accounts for all 2,377 measured characters, with sizes led by 14px (1,808 characters), 32px, 16px and 20px.

Font substitutes: Prompt is loaded by the site. PingFangSC-Regular is named in the stylesheet as a fallback for Chinese text, and the final generic fallback is `sans-serif`.

## Layout
The page measured 1280px wide and 4993px tall. The header is 108px high in total (a dark strip plus the yellow bar). Content sits in a 1200px column: the Our Service heading measured 1200px wide. Rows of cards are three-up (promo cards, B2B/B2C/C2C) and four-up or more (the lower services row), and the estimator and map are side by side. The search bar floats over the lower edge of the hero. Measured gaps are 16px (38 uses), 24px, 8px, 12px and 32px; paddings are 24px, 16px, 26px, 12px and 32px, and the large tracking input has 0 180px 0 56px padding to hold a search icon at its left and the button at its right. Alternating white and #fafafa bands separate sections.

## Elevation & Depth
Cards float on a soft shadow: `rgba(0, 0, 0, 0.1) 0px 2px 12px 0px` appears on the promo cards and the white content cards, and the header carries `rgba(0, 0, 0, 0.2) 0px 4px 28px 0px`. The stylesheet also has a yellow glow `0 4px 8px 0 rgba(255,234,51,.4)`. Depth comes mainly from these cards on the pale grey page, with the hero photography behind the tracking bar.

## Shapes
Radii are small and consistent: 8px on cards (21 measured), 4px on inputs and the Search button (15 measured), 12px on larger containers, 50% on circular controls and 999px on pills. The Track button is attached to the tracking input and rounds only its outer corners (`0px 4px 4px 0px`), so it measures 0px in the primary button token. The country and language selectors in the strip have no visible fill. Icons in the services row are outline drawings with a yellow accent.

## Components
- **Primary button (Track):** #ffea33 fill, #303133 text, Prompt 16px weight 500, 64px high, 14px 26px padding, square left edge and 4px right corners; hover #feee5b.
- **Secondary button (Search / Register):** #ffea33 fill, #303133 text, 16px weight 400, 44px high, 12px 20px padding, 4px radius.
- **Tracking input:** white, #606266 20px text, 80px high, 900px wide, 4px radius, search icon at the left.
- **Promo card:** a yellow-gradient or white card with an 8px radius, soft shadow, a headline, small supporting lines and one button.
- **Service icon card:** white card with seven outline icons and 14px grey labels.
- **Header:** yellow bar with logo and link row; the utility strip above is #333333 with white 14px links.
- **Footer:** 485px high; its headings (Company Info, About Flash, News Center and others) are Prompt 20px at weight 700 in yellow.

## Design System Architecture
No public or official design-system documentation for Flash Express was opened for this entry; no brand-guideline link appeared on the pages measured. The shipped CSS carries Element UI traces: the font stack names the `element-icons` font, and the corpus holds the Element default colors (#409eff, #f56c6c, #67c23a, #e6a23c, #c0c4cc, #909399, #606266, #303133, #ebeef5, #dcdfe6), alongside the brand yellow #ffea33. Swiper is used for the carousel (`--swiper-theme-color` #007aff, `--swiper-navigation-size` 44px). Measured source: https://flashexpress.com/ (extraction of 2026-10-09).

## Do's and Don'ts
- Do use #ffea33 for the header, primary buttons and highlight cards, and #303133 for text on it.
- Do set everything in Prompt; use weight 700 for promo displays and 500 for headings.
- Do give cards an 8px radius and the 0 2px 12px shadow.
- Do keep a yellow short underline under each section heading, as in the capture.
- Don't use Element UI blue (#409eff) or its green, red and orange as brand colors.
- Don't use pure black text on yellow for small copy; the measured on-primary text is #303133.
- Don't document the live-chat bubble as part of the brand UI.

## Responsive Behavior
The 390px mobile pass recorded: the display headline at 57px with a 64px line height and 373px width (the same size as desktop), the header at 108px high and 390px wide, a Contact Sales button at 200px wide and 44px high with a white fill, body text at 14px with a 20px line height, and most-read sizes of 14px, 32px, 16px, 20px, 28px and 24px. Several mobile values equal the desktop values, so the pass did not record a layout change for those elements. Breakpoints and how the card rows reflow were not measured.

## Iteration Guide
1. Use #ffffff and #fafafa surfaces with #606266 ink and #333333 headings.
2. Use #ffea33 for the header, the Track and Search buttons and the promo cards, with #303133 text.
3. Set type in Prompt: 14px body, 32px section headings, 57px bold display.
4. Build white cards with an 8px radius and the soft shadow, three or more across.
5. Put a tracking bar under the hero with the yellow button flush at the right.
6. Keep Element UI default colors out of brand surfaces.
