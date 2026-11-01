---
version: alpha
name: "Matichon Publishing House (MatichonBook.com)"
category: "Thai Brands"
description: "Online bookshop of Matichon Publishing House, measured live: white canvas (#ffffff), red primary #cf212c on square-cornered add-to-cart buttons, sand #fee6a4 background area, Boon Thai typeface with 26px uppercase section headings."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#cf212c"
  on-primary: "#f3f3f3"
  surface: "#fee6a4"
  surface-3: "#fafafa"
  ink-3: "#666666"
  ink-5: "#7c7c7c"
  ink-6: "#463f39"
  button-secondary-bg: "#b73e3e"
  nav-bg: "#ece8e4"
  nav-link-bg: "#0000004d"
  text-input-text: "#555555"
typography:
  display:
    fontFamily: boon, sans-serif
    fontSize: 26px
    fontWeight: 500
    lineHeight: 30px
    textTransform: uppercase
  subheading:
    fontFamily: boon, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 22px
    textTransform: uppercase
  body:
    fontFamily: boon, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: boon, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: boon, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 13px
  md: 20px
  none: 0px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 9px
  s5: 10px
  s6: 12px
  s7: 13px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 6px 25px 6px 12px
    height: 32px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 3px 0px 0px inset
  button-primary-hover:
    textColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 16px 15px 11px
    height: 47px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.nav-link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 16px 15px 11px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    height: 34px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

# Matichon Publishing House (MatichonBook.com)

## Overview
MatichonBook.com is the online bookshop of the Thai publisher สำนักพิมพ์มติชน (Matichon Publishing House). The measured page is a retail storefront: a red utility bar across the top with links such as หน้าแรก (Home), วิธีการชำระเงิน (How to pay), ร่วมงานกับเรา (Join us), a cart indicator showing "รวม : 0.00฿", a logotype in a handwritten Thai script, a category navigation row, a large promotional slideshow, a blue search band with a category dropdown, and then rows of book covers under red section headings: หนังสือแนะนำ (recommended books), หนังสือสำนักพิมพ์มติชน (Matichon books), หนังสือขายดี (best sellers) and หนังสือจากเพื่อนสำนักพิมพ์ (books from partner publishers).

The look is a classic Bootstrap-era e-commerce page: flat red and white chrome, square-cornered buttons, thin grey dividers between shelves and a lot of product imagery. The book covers carry the colour; the interface contributes one strong red, `{colors.primary}` (#cf212c), a warm sand (#fee6a4) measured as the largest background area, and neutral greys. The capture also shows a black cookie-consent bar with a green accept button and a back-to-top control; these are overlay controls and are not documented as brand UI or tokens.

The page measured 1280px wide and 4127px tall on desktop, and the document language attribute reports English although the visible text is Thai.

## Colors
All values below are measured on the live page.
- `canvas` #ffffff and `surface-3` #fafafa are the white and off-white page backgrounds; `surface` #fee6a4 is the largest background area by weight in the measurement (a warm cream tone).
- `ink` #000000 is the most-read text colour; `ink-3` #666666 is the body-text colour in the measured paragraph role, `ink-5` #7c7c7c is muted text (strike-through prices, secondary labels) and `ink-6` #463f39 is a warm dark brown.
- `primary` #cf212c is the red used for the primary add-to-cart button fill, section headings and footer text; `on-primary` #f3f3f3 is its label colour. `button-secondary-bg` #b73e3e is a darker red used for the secondary link buttons; on hover those links lose the fill and become transparent with a white border, as measured.
- `nav-bg` #ece8e4 and `nav-link-bg` #0000004d (black at about 30 percent opacity) are the backgrounds reported for the navigation role and its links.
- Other measured backgrounds are #3d619b (a blue, seen as the search band), #5cb85c and #03c302 (green, used on the cookie button and small status marks), #587aca and #5dc8ff. Only the roles above are tokenised.
Bootstrap's focus blue (#66afe9) appears on the focused search input as a glow; it is a framework default and is not a brand colour.

## Typography
One family covers the interface: **Boon**, a Thai typeface loaded at weight 300 (the page's own CSS declares it as `boon, sans-serif`). Roboto is also loaded at weight 400, and FontAwesome and slick icon fonts are present.
- `display` is Boon 26px, weight 500, line height 30px, uppercase, used for section headings (the red "หนังสือแนะนำ" style headings).
- `subheading` is Boon 20px, weight 700, line height 22px, uppercase.
- `body` is Boon 16px, weight 400, line height 24px, measured on footer address paragraphs in #666666.
- `button` is Boon 14px, weight 400, line height 20px, used on the red add-to-cart buttons.
- `nav` is Boon 16px, weight 500, line height 20px for the navigation links.
The most used sizes by character weight are 20px, 18px, 14px, 22px and 16px, so most product titles and prices read at 18 to 20px while labels use 14px.

Font substitutes: Boon is a proprietary Thai face; Roboto, already loaded by the site, is its Latin companion, and the declared fallback is `sans-serif`.

## Layout
The desktop frame is 1280px wide with content running inside a centred column; the red utility bar and the blue search band run full width, while the hero slideshow and the shelves sit inside the column. Each shelf is a row of five product cards with a left-aligned red heading, a small "[ดูทั้งหมด]" (view all) link next to it, and slider arrow buttons at the right end of the heading line. Shelves are divided by a thin grey line.

A product card stacks the cover image, the title in two or three centred lines, the price in red with the original price struck through in grey beneath it, and a red "หยิบใส่รถเข็น" (add to cart) button. Spacing values measured on the page form a small irregular scale: 3px, 5px, 6px, 9px, 10px, 12px, 13px, 15px, 16px and 20px (`spacing` s1 to s10), a pattern of Bootstrap 3 defaults mixed with custom values.

## Elevation & Depth
Shadows are used sparingly and mostly on products. The most frequent measured shadow is `rgb(17, 17, 17) 0px 15px 10px -15px`, a soft ground shadow under book covers (80 instances). Buttons use a flat bottom-edge inset: the primary button measured `rgba(0, 0, 0, 0.1) 0px 3px 0px 0px inset`, and other buttons carry a 3px solid bottom shadow in a darker red (rgb 183, 62, 62) or dark brown (rgb 53, 48, 43). This gives the buttons a pressed-key look rather than a blurred elevation. The page has no other depth cues beyond colour bands.

## Shapes
Corners are mostly square. The radius measurements are: 4px (the most frequent, 83 instances), the asymmetric 20px 0px 0px 20px and 0px 20px 20px 0px (slider arrow buttons joined into a pill pair), 0px 0px 27px 27px (the cart tab that hangs from the top bar) and 13px. In tokens: `xs` 4px, `sm` 13px, `md` 20px, and `none` 0px, which is the radius of the primary button (`{rounded.none}`). Square-cornered buttons are therefore the default action shape.

## Components
- **button-primary**: `{colors.primary}` fill, `{colors.on-primary}` label, Boon 14px, square corners, padding 6px 25px 6px 12px, height 32px, with the inset bottom shadow described above. It is the "หยิบใส่รถเข็น" add-to-cart button and the search submit. On hover the label is measured as white.
- **button-secondary**: `{colors.button-secondary-bg}` fill, white Boon 16px weight 500 label, padding 16px 15px 11px, height 47px; used for link tiles such as the returns and payment policy links. Hover measured: the fill drops to transparent with a white border.
- **nav / nav-link**: `{colors.nav-bg}` and `{colors.nav-link-bg}` backgrounds with white Boon 16px weight 500 labels and padding 16px 15px 11px.
- **text-input**: white background, #555555 text, Boon 14px, square corners, padding 6px 12px, height 34px; this is the "ค้นหาหนังสือ..." (search books) field set against the blue band.
- **footer**: white background with red (`{colors.primary}`) headings and contact text.
Product cards, slider arrows and the hero slideshow are content components that were observed in the capture but have no further measured token values.

## Design System Architecture
No public design system or brand guideline was found on the page opened (https://www.matichonbook.com/), and no search was run. The de-facto system is Bootstrap 3 style CSS customised for the shop: the focus glow colour (#66afe9) and the 4px radius, 34px input height and 6px 12px input padding match Bootstrap 3 form defaults, as measured, while the red palette, Boon typeface and pressed-key button shadows are the site's own layer. The extraction found no CSS custom properties on the root (`rootVars` is empty), so the palette lives as literal colour values in the stylesheet rather than as named tokens. Icons come from FontAwesome, and the product carousels use the slick slider library (loaded as the "slick" font).

## Do's and Don'ts
Do:
- Use `{colors.primary}` for add-to-cart buttons, shelf headings and prices.
- Keep buttons square (`{rounded.none}`) with the 3px bottom-edge shadow.
- Show the original price struck through in the muted grey beneath the sale price.
- Let book covers carry the colour; keep the chrome flat.

Don't:
- Do not document the cookie bar, its green accept button or the back-to-top control as brand UI.
- Do not use Bootstrap's focus blue (#66afe9) as a brand colour.
- Do not round the primary button.
- Do not set headings in lower-case; the measured heading styles are uppercase transforms.

## Responsive Behavior
The mobile pass at 390px measured: h1 and h2 stay at 26px weight 500 with a 30px line height, body text stays at 16px with a 24px line height, the primary button label stays at 14px with a 20px line height, and navigation text is 18px at weight 400 with a 24px line height. Everything else, including how many product cards sit in a row on mobile and how the navigation reflows, is not measured.

## Iteration Guide
1. Start with a white canvas, a red utility bar in `{colors.primary}` and Boon for all text.
2. Build shelves as five-up product rows with a red uppercase heading, a view-all link and slider arrows.
3. Use square red buttons with the inset 3px bottom shadow for cart actions.
4. Re-measure with `node web/scripts/extract-tokens.mjs --slug=matichon-publishing-house --url=https://www.matichonbook.com/ --force --no-motion` after design changes and re-run `node web/scripts/verify-designs.mjs --slug=matichon-publishing-house`.
5. Ignore consent overlays at capture time when taking measurements.
