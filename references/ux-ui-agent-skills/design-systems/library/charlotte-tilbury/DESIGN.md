---
version: alpha
name: "Charlotte Tilbury"
category: "Beauty & Personal Care"
description: "Charlotte Tilbury's US storefront: a white canvas with Night Crimson ink (#3a080a), a blush promo strip (#fde8e0), outlined square-cornered uppercase buttons, red sale prices (#e41929), Vanitas display headings over Helvetica Neue LT Condensed and Helvetica Neue LT, and full-bleed campaign photography."
colors:
  canvas: "#ffffff"
  ink: "#3a080a"
  sale-red: "#e41929"
  surface-grey: "#f5f5f5"
  surface-crimson-tint: "#f5f3f3"
  ink-crimson-light: "#6e2132"
  ink-faint: "#ae9e9e"
  ink-soft: "#856d6d"
  surface-blush: "#fde8e0"
  primary: "#3a080a"
  line-faint: "#eae6e6"
  line-soft: "#d6cece"
  nude: "#fbf0e4"
  pillow-talk: "#c07a79"
  semantic-error: "#ce2e2e"
  semantic-success: "#0f4816"
  semantic-info: "#0254d0"
  semantic-warning: "#bb4e00"
typography:
  display:
    fontFamily: Vanitas, "Vanitas Fallback", VanitasBlack, Optima, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 30.016px
    letterSpacing: 0.5px
  display-mobile:
    fontFamily: Vanitas, "Vanitas Fallback", VanitasBlack, Optima, Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 25.992px
    letterSpacing: 0.5px
  heading:
    fontFamily: HelveticaNeueLTCondensed, "HelveticaNeueLTCondensed Fallback", HelveticaNeueLTCondensed, "Helvetica Neue LT Condensed", "Avenir Next Condensed Medium", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: 0.5px
    textTransform: uppercase
  subheading:
    fontFamily: HelveticaNeueLTCondensed, "HelveticaNeueLTCondensed Fallback", HelveticaNeueLTCondensed, "Helvetica Neue LT Condensed", "Avenir Next Condensed Medium", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: 0.5px
    textTransform: uppercase
  body:
    fontFamily: HelveticaNeueLT, "HelveticaNeueLT Fallback", HelveticaNeueLT, "Helvetica Neue LT Std", "Avenir Next", Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 13.992px
    letterSpacing: 0.5px
  nav:
    fontFamily: HelveticaNeueLT, "HelveticaNeueLT Fallback", HelveticaNeueLT, "Helvetica Neue LT Std", "Avenir Next", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.34px
  button-secondary:
    fontFamily: HelveticaNeueLTCondensed, "HelveticaNeueLTCondensed Fallback", HelveticaNeueLTCondensed, "Helvetica Neue LT Condensed", "Avenir Next Condensed Medium", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.5px
    textTransform: uppercase
rounded:
  xs: 12px
  sm: 30px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 4.8px
  s4: 8px
  s5: 9.6px
  s6: 11.01px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    padding: 0px 11.008px
    height: 44px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.surface-blush}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 16px 32px 16px 16px
    height: 44px
    borderColor: "{colors.ink-faint}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

Charlotte Tilbury's own pages describe a beauty brand founded in 2013 by the makeup artist Charlotte Tilbury, whose stated mission is "to empower everyone, everywhere through the magic of confidence" (https://www.charlottetilbury.com/us/content/charlottes-story). The voice on that page and on the storefront is warm, personal and superlative: "Thank you Darling!" confirms a sign-up, the loyalty program is "Charlotte's Darlings Loyalty Club", and the word "magic" recurs ("Shop Magical Savings", "Holiday Magic!", "Charlotte's Magic Cream").

A note on what was measured. The queue URL https://www.charlottetilbury.com redirected, in the extraction environment, to an error page (/error/410_page.html) reading "SORRY DARLING, CHARLOTTETILBURY.COM IS NOT CURRENTLY SHIPPING TO YOUR LOCATION" on a deep crimson background. That page is not documented here. The measured and documented page is the brand's own US storefront home, https://www.charlottetilbury.com/us (title "Shop Luxury Makeup, Skincare & Fragrance | Charlotte Tilbury"), re-extracted at 1280px wide and 5,369px tall.

The storefront is an e-commerce page built as a stack of horizontal bands: a blush promo strip, a white header with a centered serif wordmark and a single-row category menu, a full-bleed holiday campaign banner (the hero image carries the words "Gift more beauty" and "MORE LOVE, MORE MAGIC, MORE JOY!" with a "SHOP GIFTS" button inside the image), a row of four category tiles under "Shop By Category", product carousels ("Shop Magical Savings", "Shop Best Sellers"), a second full-bleed banner, a "Holiday Magic!" editorial row on a pale tint, a video panel titled "Legendary Beauty For A Reason", a six-item service strip, a four-column footer with an email sign-up, and a closing founder quote band with a handwritten signature. Photography is glossy, warm and pink-to-rose, with models and product still lifes; the UI around it is deliberately plain white so the imagery carries the color.

## Colors

The canvas is `{colors.canvas}` (#ffffff), the largest measured background by area. Everything that reads as text, borders and buttons uses one deep crimson-brown, `{colors.ink}` (#3a080a), which the stylesheet names `--primary-dark-night-crimson`; it covers 9,585 of the measured characters. Its tints are declared as a numbered ladder (-2, -5, -10, -20, -40, -60, -80), of which the measured steps are #f5f3f3 (`{colors.surface-crimson-tint}`), #eae6e6 (`{colors.line-faint}`), #d6cece (`{colors.line-soft}`), #ae9e9e (`{colors.ink-faint}`) and #856d6d (`{colors.ink-soft}`). A lighter crimson, `{colors.ink-crimson-light}` (#6e2132, `--primary-light-night-crimson`), is the second most-read text color (753 characters).

`{colors.primary}` is set to the same #3a080a because the measured buttons are outlined in ink with ink text rather than filled; the extractor found no filled primary CTA. The generated red, `{colors.sale-red}` (#e41929), is measured on 404 characters and in the capture is the color of reduced prices; it is a price signal, not the brand action color. The promo strip at the top, which the extractor reports as the header "nav" element, is filled with `{colors.surface-blush}` (#fde8e0, `--background-blush`); `{colors.surface-grey}` (#f5f5f5, `--background-grey`) is the second-largest measured background, and the capture shows light grey tiles behind the product images.

The stylesheet also declares a broader brand palette that the home page uses sparingly: `{colors.nude}` (#fbf0e4, `--background-nude`), `{colors.pillow-talk}` (#c07a79, `--branding-skincare-pillow-talk-original`) and a family of per-product-line colors (for example fragrance and complexion shades) that only appear in product contexts. Semantic status colors are declared with matching tinted backgrounds: error `{colors.semantic-error}` (#ce2e2e), success `{colors.semantic-success}` (#0f4816), info `{colors.semantic-info}` (#0254d0) and warning `{colors.semantic-warning}` (#bb4e00). Metallic gradients (night crimson, rose gold, bronze, silver) are declared as `--night-crimson-gradient`, `--rose-gold-gradient`, `--bronze-gradient` and `--silver-gradient`; where they are applied was not measured.

## Typography

Three families do the work: Vanitas, Helvetica Neue LT Condensed and Helvetica Neue LT. Helvetica Neue Condensed (139 measured characters) and a Tenor Sans face are also declared in the stylesheet. `{typography.display}` is Vanitas at 28px, weight 400, line-height 30.016px, letter-spacing 0.5px, used for the section titles "Shop By Category", "Shop Magical Savings", "Holiday Magic!" and "Shop Best Sellers" (the page has no h1 element; the extractor used the largest hero text, an h2). The loaded face list gives Vanitas at weight 400 only, with Optima, Helvetica and Arial as fallbacks in the stack. `{typography.heading}` is Helvetica Neue LT Condensed at 24px, weight 400, line-height 30px, uppercase, with 0.5px tracking, as in "YOUR BAG". `{typography.subheading}` is the same condensed family at 16px, weight 700, line-height 18px, uppercase, used for product names such as "BEAUTY CHECK-IN KIT". `{typography.button-secondary}` is condensed 16px, weight 400, uppercase, for "CHOOSE SHADES" and "ADD TO BAG".

`{typography.body}` is Helvetica Neue LT at 12px, weight 400, line-height 13.992px, 0.5px tracking (fine print such as "*T&Cs apply."), while `{typography.nav}` is the same family at 14px, line-height 20px, letter-spacing 0.34px for the header and form text. By character count the condensed face carries 7,149 characters and Helvetica Neue LT carries 3,472; weights split almost evenly between 400 (5,593) and 700 (5,263). Sizes: 16px (5,576), 14px (4,147), 12px (721), 11.2px (245), 28px (96), 24px (25), 20px (25), 18px (21). Letter-spacing is declared as `--letter-spacing: 0.03125em`, which equals the measured 0.5px at 16px. Fonts are self-hosted woff2 files under /_next/static/media/, with named fallback faces. Substitutes if the licensed faces are unavailable: Arial Narrow or "Roboto Condensed" for the condensed face, Helvetica or Arial for the text face, and a high-contrast serif such as Playfair Display for Vanitas; the stack itself names Optima as its fallback.

## Layout

The grid unit is 8px (`--spacing` and `--default-unit` both 8px). Measured paddings are dominated by 4px (448 elements) and 8px (215), then 11.008px (57), 16px (25), 32px (13) and 24px (10). Content bands run close to the edges at desktop: the category and product bands start at x=32 and end at x=1264 in the 1280px viewport; the promo strip is 32px tall at desktop and the header band 117px. Measured band heights in order: promo 32px, header 117px, hero banner 487px, category and savings band 610px, product carousel 301px, second banner 488px, "Holiday Magic!" band 63px plus its 434px tint row, best-seller band 951px, footer links band 448px.

Four category tiles sit in a single row under a centered section title; product carousels show a row of cards that runs off the right edge, with prev/next arrow controls and a short progress bar beneath. Each product card stacks a product image on a light tile, a pink label strip ("SAVE 10%", "NEW", "WORTH $400"), a bold condensed product name, a descriptor, the price(s) and a full-width outlined button. The footer is four link columns (ABOUT, SHIPPING TO, SUPPORT, MORE FROM CHARLOTTE) beside an email sign-up, preceded by a six-item benefits strip (free delivery, free samples, loyalty club, personalized recommendations, the app, 1:1 online consultations).

## Elevation & Depth

The interface is flat. Only two shadows were measured: `rgb(234, 230, 230) 0px 0px 1px 1px`, a hairline ring in the `{colors.line-faint}` tone, and `rgba(0, 0, 0, 0.05) 0px 1px 0px 0px`, a one-pixel underline. Depth comes from photography, from the grey and tinted bands (`{colors.surface-grey}`, `{colors.surface-crimson-tint}`) behind white cards, and from 1px borders in `{colors.ink}`. Border colors measured: #3a080a (115 elements), #eae6e6 (2), #ae9e9e (1) and #d6cece (1). The measured text input is bordered in `{colors.ink-faint}`. No dark mode theme was measured, although a `--dark-mode-foreground: #ffffff` variable is declared.

## Shapes

Buttons and inputs are square: the measured outlined button and the input both have a 0px radius. The radius frequencies are 30px (122 elements), 12px (4) and 50% (3), so rounding appears on a small set of elements; which elements carry the 30px radius was not recorded, and the frontmatter keeps `{rounded.sm}` (30px), `{rounded.xs}` (12px) and the pill value as measured. Product images and category tiles in the capture have square corners. Icons in the header and benefit strip are thin outline pictograms.

## Components

- **Outlined button** (`button-secondary`): `{colors.ink}` text and 1px solid `{colors.ink}` border, transparent fill, `{typography.button-secondary}`, padding 0px 11.008px, height 44px, 250px wide in the product carousel, label in capitals ("CHOOSE SHADES", "ADD TO BAG").
- **Navigation** (`nav`, `nav-link`): `{colors.surface-blush}` promo strip with `{colors.ink}` text at `{typography.nav}`; the header beneath is white with the wordmark centered and category links such as New In, Makeup, Skincare, Best Sellers, Gifts, Fragrance and Services in capitals, with search, wishlist, account and bag icons.
- **Text input** (`text-input`): white fill, 1px solid `{colors.ink-faint}`, `{typography.nav}` text, padding 16px 32px 16px 16px, height 44px, 290px wide (the first text input the extractor measured).
- **Link** (`link`): `{colors.ink}` at `{typography.body}`; the measured link role is 12px with an 18px line-height, capitalized.
- **Footer** (`footer`): `{colors.ink}` text on white; the footer text is 14px, weight 700, line-height 16px, letter-spacing 0.5px. The capture shows payment logos and legal links beneath the columns.
- **Product label strip**: a pale pink strip under the image carrying a short uppercase note; its exact fill was not isolated in the measurements.

## Design System Architecture

No public design system or brand guideline page was found on the pages opened (the US home page and the "Charlotte's Story" page at https://www.charlottetilbury.com/us/content/charlottes-story, which link only to corporate policies and contact pages). The de-facto system is declared in the shipped CSS as 63 root custom properties with a clear naming scheme: `--primary-dark-night-crimson` plus a numeric tint ladder (-2, -5, -10, -20, -40, -60, -80), `--primary-light-night-crimson`, `--background-*` surfaces (white, grey, blush, blush-pink, nude, focus), `--branding-*` product-line colors (fragrance, skincare Pillow Talk, complexion), `--semantic-*` status colors with `-bg` variants, `--skincare-grey-*`, four named gradients, `--font-weight-light/normal/medium/bold/black` and `--spacing`. The site is a Next.js application (font files and the favicon are served from /_next/static/), and fonts are bound through variables such as `--font-vanitas`, `--font-helvetica-neue-lt` and `--font-helvetica-neue-lt-condensed`.

## Do's and Don'ts

- Do keep the UI white and let campaign photography supply the color.
- Do set all text, borders and button outlines in `{colors.ink}` (#3a080a), not black.
- Do use uppercase condensed type with 0.5px tracking for product names, headings and buttons, and Vanitas for the large centered section titles.
- Do use square corners on buttons and inputs.
- Do reserve `{colors.sale-red}` for reduced prices and `{colors.surface-blush}` for promo and navigation strips.
- Don't fill buttons with the brand color; the measured buttons are outlined.
- Don't add drop shadows to cards; the measured elevation is a hairline ring only.
- Don't document the geo-block error page or its crimson gradient as the storefront.
- Don't use the per-product-line `--branding-*` colors as global UI colors.

## Responsive Behavior

Measured at a 390px viewport: the Vanitas section title drops from 28px to 24px (line-height 25.992px); the 12px fine print and the 16px and 14px text sizes are unchanged, and by character count 16px (5,316) and 14px (3,953) lead. The promo/nav band is 48px tall (32px at desktop) with the blush fill `{colors.surface-blush}`. The extractor counted 16 visible header links at desktop and 6 at mobile. Category band content spans x=16 to x=374 of the 390px width. Breakpoint widths, card column counts and the mobile footer layout were not measured.

## Iteration Guide

1. Begin with a white page, `{colors.ink}` for all text, and a `{colors.surface-blush}` promo strip.
2. Title sections in Vanitas 28px, centered, then use the condensed uppercase type for product names and buttons.
3. Build buttons as 44px-tall, square, 1px `{colors.ink}` outlines with uppercase 16px condensed labels.
4. Place imagery in full-bleed bands or square tiles on `{colors.surface-grey}`; keep UI chrome out of the way.
5. Add red only for reduced prices and semantic colors only for statuses.
6. Confirm any new value against `web/data/extracted/charlotte-tilbury.json` before adding it.
