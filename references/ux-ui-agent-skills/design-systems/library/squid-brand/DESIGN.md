---
version: alpha
name: Squid Brand
category: "Thai Brands"
description: "Squid Brand (น้ำปลาตราปลาหมึก), Thai fish sauce: full-bleed food photography heroes, flat leaf-green #76bc21 square buttons, deep indigo #313283 headlines, a light #f5f5f5 values panel, the Line typeface and a #242729 footer."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#76bc21"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-light: "#f5f5f5"
  ink-indigo: "#313283"
  ink-white-50: "#ffffff80"
  ink-indigo-bright: "#333399"
  hairline-white-40: "#ffffff66"
  footer-charcoal: "#242729"
typography:
  display:
    fontFamily: Line, san-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 41.6px
  display-mobile:
    fontFamily: Line, san-serif
    fontSize: 26.08px
    fontWeight: 700
    lineHeight: 33.904px
  heading:
    fontFamily: Line, san-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 39px
    textTransform: uppercase
  subheading:
    fontFamily: Line, san-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 31.2px
  body:
    fontFamily: Line, san-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 42.25px
  button:
    fontFamily: Line, san-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
    textTransform: uppercase
  nav:
    fontFamily: Line, san-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
rounded:
  xs: 3px
  sm: 18px
  md: 99px
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 15px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 1px 6px
    height: 37px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 2px 8px 2px 6px
    height: 36px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px
  footer:
    backgroundColor: "{colors.footer-charcoal}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

squidbrand.com is the site for Squid Brand (น้ำปลาแท้ตราปลาหมึก), a Thai fish sauce brand. The page title reads "น้ำปลาแท้ คุณภาพระดับพรีเมียม" (genuine fish sauce, premium quality). The menu lists Home, About us, Products, Recipes/Media, Where to buy, FAQ and Contact us, with a language dropdown. The homepage copy sets out the brand's purpose (preserving Thai food heritage by producing high-quality fish sauce), beliefs, vision ("to become a leading world fish sauce brand, trusted, authentic and sustainable"), mission, and a five-point "SQUID CORE VALUE" acronym (Superior Quality, Quest for Innovation, Unwavering Authenticity, International Excellence, Dedication to Sustainability). It states experience of more than 80 years and exports to more than 70 countries.

The capture opens with a full-bleed hero photograph on a light wooden table: a gold-labelled Squid Brand "Premium Fish Sauce" bottle beside a bowl of tom yum with prawns, mushrooms, lime and chillies, with chillies and limes at the edges. The white Squid Brand logo and the product name "ปลาหมึกโกลด์" (Squid Gold) overlay the left side, with a flat green "ดูสินค้า" (view products) button. A transparent navigation bar floats over the hero with white bold Thai labels, where the active "หน้าหลัก" item is green. Under the hero, centred indigo text carries the tagline "Squid Brand รสชาติแท้จริง ความไว้วางใจระดับสากล" (Squid Brand, genuine taste, global trust). The body is long left-aligned Thai paragraphs with bold black sub-headings, then centred VISION and MISSION headings in black, and a light gray panel titled "SQUID CORE VALUE" in large indigo capitals, with indigo bilingual sub-headings and dark gray body lines.

The voice is earnest and heritage-led, bilingual in headings (Thai / English), with long continuous paragraphs rather than short marketing blurbs.

## Colors

The canvas is white (#ffffff) and body ink is near-black `ink` #222222. The stylesheet itself defines --s-text #222 and --s-line #dcdfe5, confirming ink and a hairline gray. The brand's two colors in the capture are leaf green `primary` #76bc21 (CTA fill, active nav item) with white `on-primary` text, and deep indigo: `ink-indigo` #313283 and the slightly brighter `ink-indigo-bright` #333399, used for the tagline and the core-values headings. A light gray `surface-light` #f5f5f5 forms the values panel, `surface-black` #000000 and `footer-charcoal` #242729 are dark surfaces, and two translucent whites (`ink-white-50` #ffffff80 and `hairline-white-40` #ffffff66) appear over the hero.

Gold comes from product photography (the bottle label), not from a token. The stylesheet also exposes WordPress preset colors (vivid purple #9b51e0, pale pink #f78da7) which are CMS defaults and not brand colors.

## Typography

All measured text uses the font `Line` (declared as "Line, san-serif"), loaded at weights 400 and 700. The root stylesheet sets --s-body to "Sarabun" and --s-heading-weight to 500, but the extraction measured Line on the page and that is what the tokens record.

Measured styles: display 32px at 700 with 41.6px line height; display-mobile 26.08px at 700 with 33.904px line height; heading 30px at 700 with 39px line height and uppercase; subheading 24px at 700 with 31.2px line height; body 26px at 400 with a loose 42.25px line height; button 16px at 400, uppercase, 26px line height; navigation 16px at 700 with 16px line height. Long Thai paragraphs are set at a large 26px with generous leading, which keeps Thai ascenders and tone marks legible. Sarabun (Google Fonts) is the declared body font in the stylesheet and a reasonable stand-in if Line is unavailable.

## Layout

The page is a single-column editorial layout over a full-bleed hero. Text blocks sit inside a centred container with generous margins; the core values panel is a framed rectangle inside the container. Measured spacing values are 1, 2, 4, 5, 6, 8, 9, 10, 15 and 20px, and the stylesheet defines --s-box-padding 18px and --s-footer-height 40px. Navigation sits on top of the hero rather than above it, and sections are separated by whitespace and by the gray values panel.

## Elevation & Depth

The system is flat: no box shadows were recorded on buttons or inputs (the text input has a fully transparent zero shadow). Depth comes from photography: the bottle and bowl overlap the table surface, and the nav bar floats over the hero image. The values panel uses a tonal change (#f5f5f5 on white) rather than a border or shadow. A WordPress shadow preset (--wp--preset--shadow--deep) exists in the stylesheet but is not used by the measured components.

## Shapes

Measured radii are 3px (xs), 18px (sm) and 99px (md), plus 0px. The primary button, link style, nav and footer are all square (0px), the text input uses 3px, and the 18px and 99px values were measured on the site but not on any of the components documented here. The visible home page is overwhelmingly rectangular: square green button, rectangular panel, full-bleed photo.

## Components

**Primary button** ("ดูสินค้า"): green #76bc21 fill, white 16px uppercase Line text, 0px radius, 1px 6px padding, 37px tall.

**Link**: white 16px uppercase text, 0px radius (used over the hero).

**Navigation**: transparent bar over the hero; links are white 16px bold, the active item in green #76bc21, 0px radius.

**Text input**: white background, #222222 text, 3px radius, padding 2px 8px 2px 6px, 36px tall, no visible shadow (the search field in the menu).

**Footer**: charcoal #242729 background, white text, square.

## Design System Architecture

No public design system, brand guideline or press kit is linked from the pages opened. The de-facto system is a WordPress and WooCommerce theme with its own custom properties: --s-text #222, --s-line #dcdfe5, --s-woo-card #fff, --s-woo-border-radius 3px, --s-box-padding 18px, --s-footer-height 40px, --s-body "Sarabun", --s-heading-weight 500 and --s-title-bg-blur 20px, alongside the standard WordPress preset variables. The page loads the Line font and Font Awesome 5 icons. Source: https://squidbrand.com/ (homepage and stylesheet as measured by the extractor; the page's markup links to /wp-json/).

## Do's and Don'ts

Do lead with full-bleed food photography showing the bottle in a dish, use flat square green buttons, and set headlines in indigo for emphasis. Do keep copy bilingual in headings (Thai / English) and set long Thai paragraphs at a generous size and leading.

Don't round the primary button or add shadows to it. Don't use WordPress preset purples or pinks. Don't treat the cookie consent banner, which overlaid the first capture, as part of the design. Don't use gold as a UI color; it appears only in product photography.

## Responsive Behavior

The extraction includes a mobile pass, which produced a 26.08px display-mobile style versus 32px on desktop. Breakpoints and other mobile layout values are not measured.

## Iteration Guide

Build only from the frontmatter tokens. Start with a transparent nav over a food photo hero, a flat green button, then white content with indigo emphasis headings and one light gray panel for values or highlights. Use Line at 26px/42.25px for long Thai text. Square corners by default, 3px on inputs. Measure any new component on the live site, cite it, then re-run the gate.

Token reference for iteration: colors are canvas #ffffff, ink #222222, primary #76bc21, on-primary #ffffff, surface-black #000000, surface-light #f5f5f5, ink-indigo #313283, ink-white-50 #ffffff80, ink-indigo-bright #333399, hairline-white-40 #ffffff66, footer-charcoal #242729. Radii are xs 3px, sm 18px, md 99px, none 0px. Spacing steps are s1 1px, s2 2px, s3 4px, s4 5px, s5 6px, s6 8px, s7 9px, s8 10px, s9 15px, s10 20px. Every value here is measured on the live site; anything not listed is not measured.
