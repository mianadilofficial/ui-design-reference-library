---
version: alpha
name: SAPPE
category: "Thai Brands"
description: "SAPPE Public Company Limited's English corporate site (sappe.com/en) — a white canvas carrying a single saturated red (#ec1c25) for the logo, nav hover, headlines and full-bleed action tiles, set in the DB Havel / DB Helvethaica Thai-Latin family at heavy 900 weight for display and 400 for body, with 50px pill-radius red panels and a muted slate-grey (#7c858c) paragraph voice."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#ec1c25"
  ink-muted: "#7c858c"
  ink-warm-grey: "#87857f"
  ink-slate: "#35404e"
  link: "#151515"
  secondary-green: "#87ab42"
  deep-blue: "#0b3b5e"
  accent-orange: "#ff6d2e"
typography:
  display:
    fontFamily: "\"DB Havel\", \"DB Helvethaica\", DB-Helvethaica, Arial, Helvetica, sans-serif"
    fontSize: 25px
    fontWeight: 900
    lineHeight: 50px
  display-mobile:
    fontFamily: "\"DB Havel\", \"DB Helvethaica\", DB-Helvethaica, Arial, Helvetica, sans-serif"
    fontSize: 44px
    fontWeight: 900
    lineHeight: 50.6px
    textTransform: uppercase
  heading:
    fontFamily: "\"DB Havel\", \"DB Helvethaica\", DB-Helvethaica, Arial, Helvetica, sans-serif"
    fontSize: 45px
    fontWeight: 900
    lineHeight: 25px
  body:
    fontFamily: "\"DB Havel\", \"DB Helvethaica\", DB-Helvethaica, Arial, Helvetica, sans-serif"
    fontSize: 16.5px
    fontWeight: 400
    lineHeight: 19.8px
    letterSpacing: "-0.2px"
rounded:
  xs: 3px
  sm: 40px
  md: 50px
spacing:
  s1: 1px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 13px
  s7: 15px
  s8: 18px
  s9: 22px
  s10: 24px
components:
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    padding: 13px 46px
    height: 78px
    borderColor: "{colors.canvas}"
  nav:
    textColor: "{colors.primary}"
  footer:
    textColor: "{colors.canvas}"
---

## Overview

SAPPE is the Thai beverage and food group behind brands such as B'lue, and its English corporate site at sappe.com/en presents itself as an investor-facing company page rather than a shop. The page title reads "Sappe – Sappe The Innovative spirit" and the tagline repeated across the site is "We better people's lives through our innovative spirit." That sentence is set as an oversized marquee headline that scrolls horizontally across the page in heavy red capitals, and it is the clearest statement of the brand voice: confident, corporate, optimistic and short.

The visual identity is built from one idea: a pure white canvas (#ffffff) interrupted by blocks of a single saturated red (#ec1c25). The red is the logo colour, the active-state colour of the top navigation, the colour of the marquee headline, the fill of the four action tiles under the hero, and the fill of the large rounded statement panel that announces "SAPPE offers products across 5 categories and more than 10 brands" to consumers "in over 100 countries worldwide". Everything else is deliberately quiet: a charcoal ink (#333333), a cool slate-grey paragraph colour (#7c858c), and photography of the factory, the product bottles and the people of the sustainability programme.

Photography is the second pillar. The hero is a full-width aerial photograph of the SAPPE factory with a soft white fade on the left where a red slide title ("SAPPE FACTORY") and a short red underline sit. The product section shows a row of real packaging (coffee sachet, coconut water, B'lue, jelly drinks, aloe vera drinks) over a faint grey world map, which is the site's way of saying "global". The sustainability band uses a landscape photograph with circular crops of people and products.

Density is low to medium. Sections are tall, copy is short, and each section has exactly one dominant gesture: the hero, the red tiles, the marquee, the product row, the red statement panel, and the sustainability circles. The site is bilingual, with a small flag control at the right edge of the navigation switching between English and Thai.

## Colors

The palette is one brand colour on white, with a handful of neutrals and three accent variables that the site's stylesheet defines but the home page barely shows.

- **Canvas (#ffffff)** is the page background; the largest measured background area on the page.
- **Primary red (#ec1c25)** is the most-read text colour on the page by character count and the second-largest background. It fills the action tiles and the statement panel, colours the marquee headline and slide titles, and is the hover colour of the navigation items, which turn from a dark slate (#35404e) to red on hover.
- **Ink (#333333)** is the dark body text and the colour of the word "Sustainability" in the "SAPPE for Sustainability" heading, where "SAPPE for" is red and the second word is charcoal.
- **Muted ink (#7c858c)** is the paragraph colour of the company description and is the most-read text colour by characters after red, so long copy reads as grey rather than black.
- **Warm grey (#87857f)** appears in smaller supporting text.
- **Slate (#35404e)** is the resting colour of nav links.
- **Link (#151515)** is the stylesheet's primary/link colour, a near-black.
- **Secondary green (#87ab42), deep blue (#0b3b5e) and orange (#ff6d2e)** are defined in the site's root CSS custom properties as the secondary, fourth and fifth theme colours, with the green also used as link hover/active colour and gradient end. They are theme variables; the home page capture is dominated by red, white and photography, so treat them as supporting colours only.

White on red is the signature pairing: tile labels, the statement panel and the footer text are white on red or on dark grey (#333333 and #111111 are the dark footer areas). Red on white is the second pairing, used for headlines. Red is never used as a body-text colour for long copy.

## Typography

Every measured character on the page is set in **DB Havel**, with **DB Helvethaica** loaded as the web font and Arial/Helvetica as fallbacks. The stack is `"DB Havel", "DB Helvethaica", DB-Helvethaica, Arial, Helvetica, sans-serif`. The site is bilingual (English and Thai), and the same stack serves both. The site also loads Font Awesome 5 Pro for icons (the bottle, megaphone, chart and heart icons on the action tiles).

Weights are used in two clear modes. Display text is weight 900: the tile labels (PRODUCTS, UPDATES, INVESTORS, OUR SPIRIT) are 25px at weight 900 with a 50px line height, the statement heading is 45px at weight 900, and the marquee headline runs far larger. Body copy is weight 400 at 16.5px with a 19.8px line height and slightly tight letter spacing (-0.2px). Navigation items are bold. On a 390px-wide viewport the first-level headline is set at 44px, weight 900, uppercase.

Sizes in the frontmatter are the measured sizes; the hierarchy is steep, with a small body size and very large, heavy red display lines, which gives the page its poster-like feel. Uppercase is used for tile labels, marquee text and the mobile display style; sentence case is used for body copy and the main statement.

Font substitutes: if DB Havel and DB Helvethaica are unavailable, the site's own fallbacks are Arial and Helvetica; keep weight 900 for display and 400 for body.

## Layout

The page is a stack of full-width bands inside a 1280px-wide desktop capture (measured page width 1280px, total scroll height 4467px). A header contains the logo at left on a white row, and below it a hairline-separated navigation row whose eight items (Home, About SAPPE, Products, Investor Relations, Sustainability, News and Activities, Contact Us, Join us) are spaced evenly with a flag language switch at the far right. Home is red when active; the others are slate.

Below the navigation the hero carousel runs edge to edge with previous/next arrows and a numbered progress indicator (03 — 04). Directly under it sits a row of four red tiles separated by thin white borders; each tile is a label plus an icon. Then comes the marquee headline, the product-and-map section, the red rounded statement panel, and the sustainability band. The footer is dark with white text and contains the company name, "Head Office" and the Ramkhamhaeng Road address.

Spacing values measured on the page are small and irregular (1, 5, 8, 10, 12, 13, 15, 18, 22 and 24px) because the layout is built from a page builder; large vertical rhythm comes from section padding, not from a spacing scale. The action tiles are 78px tall with 13px 46px padding.

## Elevation & Depth

The site is essentially flat. There are no card shadows on the home page; depth comes from photography, the white-to-transparent fade over the hero image, and colour blocking. The stylesheet defines an "outlined" shadow preset (6px 6px 0px -3px white, 6px 6px black) as part of the WordPress theme, but it is not a visible home-page style. Borders are used instead: the red tiles are separated by 1px white borders and the header is separated from the nav row by a thin light line.

Layering is limited to the hero slide text over the photograph and the product bottles over the pale world map. The map is a very low-contrast grey illustration and sits behind the packaging so the products appear to stand on the world.

## Shapes

Shape language is mostly rectangular with two large rounded exceptions. The action tiles are square-cornered. The big red statement panel uses a very large corner radius (50px, token `rounded.md`), giving it a pill-like rounded-rectangle shape, and the most frequent measured border radius on the page is 50px. A 40px radius (`rounded.sm`) and a 3px radius (`rounded.xs`) also appear. Circular crops are used for the sustainability photographs (people, products and landscape in circles), which echoes the round bottles in the packaging row.

Icons are line-style white glyphs of bottles in different shapes (a repeating row of bottle, cup and sachet outlines across the red panel), a megaphone, a bar chart and a heart. They are monochrome white on red.

## Components

**Top navigation.** Eight text items in bold slate with a red hover and a red active state (Home). The hover state changes both text colour and border colour from #35404e to #ec1c25; there is no background fill. A flag icon sits at the right for language selection. The logo is a red italic script wordmark.

**Hero carousel.** Full-bleed photograph, a red uppercase heavy title with a short red rule beneath, thin chevron arrows at the lower left and a two-number progress indicator.

**Action tile row.** Four equal tiles, red fill (#ec1c25), white 25px weight-900 label, a white line icon, and a 1px white border. These are the site's de-facto buttons: the measured button has 13px 46px padding and is 78px high. Labels are PRODUCTS, UPDATES, INVESTORS and OUR SPIRIT.

**Marquee headline.** A single line of red capitals, scrolling horizontally and cropped at the edges: "WE BETTER PEOPLE'S LIVE THROUGH OUR INNOVATIVE SPIRIT."

**Statement panel.** Red rounded rectangle with a repeating row of white bottle icons, a two-line message and white copy at body size.

**Sustainability band.** Heading "SAPPE for Sustainability" (red plus charcoal), a quoted tagline in white over a photograph, a white caption box with small red text, and three circular images below.

**Footer.** Dark background, white text, company name, head office address and phone.

## Design System Architecture

SAPPE does not publish a public design system, brand guideline or token package that I could open; the pages I fetched (the English home page) describe the company and its sustainability pillars but contain no design documentation. The de-facto system is visible in the shipped CSS and the DOM of the home page: the stylesheet carries `--wp--preset--*` variables (WordPress theme presets), with Swiper for sliders and Font Awesome 5 Pro for icons.

The root custom properties give the real token names: `--primary-color: #151515`, `--secondary-color: #87ab42`, `--fourth-color: #0B3B5E`, `--fifth-color: #ff6d2e`, `--regular-color: #7c858c`, `--link-color: #151515`, `--link-color-hover: #87ab42` and a gradient from `#151515` to `#87ab42`. The red used throughout the page (#ec1c25) does not appear among the root custom properties, so it is applied per element rather than through a theme token. Source page: https://www.sappe.com/en/.

Practical consequence for anyone reproducing the look: treat red as the one action/brand colour, use #7c858c for paragraphs, keep headlines in weight 900 and use the 50px rounded panel for emphasis.

## Do's and Don'ts

Do keep the canvas white and let one red (#ec1c25) carry the brand. Do set display text in weight 900 and body in weight 400 of the same family. Do use full-bleed photography of real factory, product and people scenes. Do use white line icons on red tiles. Do keep nav hover as a colour change only.

Don't introduce gradients, drop shadows or additional bright colours into the home-page layout; the green, blue and orange theme variables are supporting values. Don't set long paragraphs in red. Don't use rounded corners on the action tiles (they are square) and don't use small radii on the statement panel (it uses the 50px radius). Don't mix a second typeface family into display text. Don't present the tribute, cookie or language controls as brand UI.

## Responsive Behavior

The extractor measured the page at 1280px wide and at 390px wide. At 390px the first-level headline becomes 44px, weight 900, uppercase, and body text stays at 16.5px. The desktop capture shows all eight navigation items in a single row; the narrow-layout navigation was not captured, so it is not described here. The marquee headline scrolls horizontally rather than wrapping. Photographs are full-bleed and crop to the centre of the scene; the circular sustainability images stay circular.

The action tiles are 78px tall on desktop. Language switching is a flag control at the right of the nav in the desktop view.

## Iteration Guide

1. Start from a white canvas, #333333 ink, and #ec1c25 as the only strong colour.
2. Set DB Havel / DB Helvethaica (or Arial) at 900 for display and 400 at 16.5px for body with -0.2px letter spacing.
3. Build the hero as a full-width photograph with a red, heavy, uppercase title and a short red rule.
4. Add a four-tile red action row (78px tall, 13px 46px padding, 1px white border, white 25px labels, white line icons).
5. Add one marquee line of red capitals for the tagline "We better people's lives through our innovative spirit."
6. Use the 50px-radius red panel for the single most important statement.
7. Keep paragraphs in #7c858c; keep nav in #35404e with a red hover.
8. When in doubt, remove decoration: this site relies on photography, one red and heavy type.
9. Verify against the extracted tokens in web/data/extracted/sappe.json before changing a value.
