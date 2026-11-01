---
version: alpha
name: TRR Group
category: "Thai Brands"
description: "Corporate site of TRR Group (Thai Roong Ruang Sugar Group, maker of the Lin sugar brand), set in Kanit 300-500 with 35px section headings, deep sugar-cane brown #502c1e ink on white, blush surfaces #e8e0dd and #dfdfdf, a soft #cbbab3 secondary text, and photographic full-bleed bands."
colors:
  canvas: "#ffffff"
  ink: "#502c1e"
  primary: "#502c1e"
  surface-grey: "#dfdfdf"
  surface-blush: "#e8e0dd"
  ink-soft: "#cbbab3"
  header-hover-yellow: "#f7c600"
typography:
  display:
    fontFamily: Kanit
    fontSize: 35px
    fontWeight: 500
    lineHeight: 40.425px
    letterSpacing: "-0.35px"
  nav-label:
    fontFamily: Kanit
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.704px
    letterSpacing: "-0.16px"
  body:
    fontFamily: Kanit
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.992px
rounded:
  pill: 9999px
spacing:
  s1: 10px
  s2: 11px
  s3: 12px
  s4: 13px
  s5: 15px
  s6: 18px
  s7: 20px
  s8: 25px
  s9: 28px
  s10: 40px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 0px 0px 0px 40px
---

## Overview

The measured page is the Thai-language home page of trrgroup.com, titled "TRR Group น้ำตาลลิน | Main Home". The copy introduces the group as owner of the "Lin" (ลิน) sugar brand and as one of Thailand's large sugar producers and exporters, and the logo lockup in the header reads "Thai Roong Ruang Sugar Group". The site is a corporate-and-consumer hybrid: a navigation of corporate sections (About, History, Sustainable Development, Corporate Governance, Business, News, Siam sugar export, TRR Tower, Products, Careers, Contact) sits beside a cart-icon "SHOP ONLINE" link and a TH / EN language switcher.

The first screen is a slider whose slide shows the Lin product family (sugar pouches, syrups, fondant and icing, bottled flavorings) lined up on a blurred wooden table, with the Thai headline "น้ำตาล “ลิน” สร้างสรรค์ความหวานด้วยหัวใจ" ("Lin sugar, creating sweetness from the heart") overlaid. The second band is a desaturated archival photograph of the founder in front of a historic factory with a pull quote about worth being measured by good deeds, not wealth. The third is a pale blush section titled "Lin Sweet Creation" with recipe categories. A dark brown band follows, carrying company statistics (years since founding, tons of cane per day, headcount, revenue) and certification groups (ISO 9001, GMP and HACCP, FSSC 22000 among those listed).

The tone is warm, heritage-led and sincere, mixing a founder's story, sustainability claims (promoting green-cane harvesting, reducing cane burning, organic farming) and product-led warmth.

## Colors

The palette is almost monochrome brown. The ink color #502c1e is both the most-read text color on white and the color of the nav, and the theme stylesheet exposes it as --qode-main-color, which confirms it as the theme's main brand color. Because the extractor found no real call-to-action button once the cookie notice was removed from the capture, primary is declared as the same brown: the brand's action color is its ink color.

White (#ffffff) is the canvas and also the text color on the dark photographic and brown bands. Two light surfaces appear by area: #dfdfdf (a neutral grey) and #e8e0dd (a pinkish beige) that forms the "Lin Sweet Creation" section. #cbbab3 is a soft taupe used for secondary text on the dark brown band. The theme also publishes a light-header hover color of #f7c600, a golden yellow, in its root variables; it is recorded as header-hover-yellow and is a hover cue for the transparent header over imagery, not a surface color.

WooCommerce custom properties (for example --wc-primary: #a46497, --wc-orange, --wc-blue) and WordPress preset colors (vivid red, vivid cyan) are default plugin and core values present in the stylesheet root; they do not appear in the measured design and are not brand colors.

## Typography

Kanit is the only text face, loaded in weights 300, 400 and 500. It covers Thai and Latin, and the site mixes Thai headlines with English labels such as "Lin Sweet Creation" and "SHOP ONLINE". The measured h2 "วิสัยทัศน์ผู้ก่อตั้ง" is 35px, weight 500, with a 40.425px line height and a tight -0.35px letter spacing (-1% of the size). Body copy and the footer address are 18px at weight 400 with a 25.992px line height. Navigation text is smaller, a 14px weight-500 header measurement in the nav container and 16px with -0.16px tracking for the labels the extractor read.

The sizes with the most characters are 18px, then 12px, 16px, 14px, 20px and 19px, with 35px, 40px and 55px appearing for headlines and statistics. The negative letter spacing on larger sizes tightens Thai headlines slightly; body sizes stay at normal tracking. The extractor's first guess for h1 was a 16px navigation label ("ประวัติความเป็นมา") because the hero headline is a slider layer; the real section headline measured is the 35px h2, which is why display here carries the h2 values and the 16px label is kept separately as nav-label.

## Layout

The desktop page is 1280px wide and 5309px tall, a long stack of full-width bands: the slider hero, the founder photograph band, the blush recipe section, then the dark brown statistics band. Within bands, content is positioned in a left-weighted column: the founder's quote starts at the left edge of the content area and the portrait fills the right half. The recipe section places the title at left, separated from a framed photograph by a thin vertical rule.

Navigation is a single horizontal row of labels over the hero image, each separated by about 40px of left padding (the measured nav-link padding is 0 0 0 40px), with the logo at left and the shop link and language switch at right. A thin line under the header separates it from the imagery. Section spacing uses a small scale of 10, 11, 12, 13, 15, 18, 20, 25, 28 and 40px for components, while band-to-band spacing comes from large padding inside each band.

## Elevation & Depth

Depth is created by photography and by overlay, not by shadow. The founder band darkens the archival photo so white text reads on it, the hero uses a blurred background to push the product shelf forward, and the header is transparent over the hero. Two shadow values appear in the earlier raw measurement (a 45% black 18px blur with -8px spread, and a 5% black 2px 8px shadow), but neither is present in the re-extraction made without the cookie notice, so no elevation token is declared. Treat the site as flat: surfaces are separated by color changes between white, blush, grey and brown.

## Shapes

Corners are mostly square. The only radii the page itself shows are circular or near-circular elements (50% and 10% radii on small controls such as the slider arrows and round markers), represented here as the pill token. The recipe photograph, the portrait band and the hero are rectangular without rounding. The logo is a rectangular lockup with a thin outline. Slider arrows are thin line chevrons without a filled shape.

## Components

Header: a transparent bar over imagery with a framed rectangular logo, brown 500-weight Kanit labels and an active-item indicator (a short dark bar above the first label in the capture). Shop link: an uppercase "SHOP ONLINE" with a cart glyph; its hover probe changes only the border color from rgb(91, 91, 91) to rgb(27, 27, 27), and its text stays #502c1e.

Slider: full-bleed with thin white chevrons at the left and right edges and a large centered white-on-image Thai headline. Section title: Kanit at 35px in the brown ink, with a thin vertical divider and imagery beside it. Statistic: large numerals (count-up from 0) above a small label such as "ปี ระยะเวลาตั้งแต่ก่อตั้ง". Category link: a short heading, a body paragraph and a "ดูเพิ่มเติม" (see more) link. The cookie-consent dialog in the first raw capture, with its blue accept button, is a consent control and is not a brand component; it was excluded by re-extraction.

## Design System Architecture

No public brand guideline, design system or token package was found on the pages opened; the home page links only to corporate sections. The de-facto system is a WordPress build: stylesheet class and variable names show the "Globefarer" theme (a Qode theme) with WooCommerce for the shop and WordPress block presets. The brand color is wired through the theme variable --qode-main-color (#502c1e), with header variables --qode-header-light-color (#ffffff), --qode-header-dark-color (#1b1b1b) and --qode-header-light-hover-color (#f7c600). Icon fonts loaded include Font Awesome, ElegantIcons and revicons. Tokens in this file come from the measured computed styles, not from a published token source.

## Do's and Don'ts

Do use #502c1e for text, navigation and any action element, and white for text on photographic or brown bands. Do pair product photography with warm, blurred natural backgrounds, and use archival imagery when telling the founder story. Do set Thai headlines in Kanit 500 with slightly negative tracking, and body at 18px with a generous 25.992px line height.

Don't introduce WooCommerce purple (#a46497) or any blue as a brand color; the blue seen in the first capture belonged to the cookie dialog. Don't add shadows or rounded cards. Don't use the yellow hover color as a fill. Don't treat the cookie notice, the slider arrows or the language switcher as brand components.

## Responsive Behavior

The extractor also measured a 390px viewport. At that width the hero headline measured as a 20px weight-500 Kanit white heading with a 26px line height, instead of the 35px desktop section heading, and the slider text reads "ส่งเสริมการตัดอ้อยอ้อยสด ลดการเผาอ้อยเผาใบ". Detailed behavior of the collapsed menu was not captured, so it is not described. The theme's header is built to switch between a light and dark variant depending on the background, as its paired header-light and header-dark variables indicate.

## Iteration Guide

Begin with white and #502c1e. Add the blush #e8e0dd for story sections and #dfdfdf for neutral bands, and use #cbbab3 only for secondary text on dark brown. Use Kanit exclusively: 35px weight 500 with -0.35px tracking for headings, 18px weight 400 with a 25.992px line height for body. Build pages as full-width photographic bands, one idea per band, with a left-aligned text column. Keep the interface chrome minimal: text-only navigation, thin chevrons, no cards. When adding new components, measure them from the live site rather than copying plugin defaults, and always capture the page without the cookie dialog so its blue never leaks into the palette.
