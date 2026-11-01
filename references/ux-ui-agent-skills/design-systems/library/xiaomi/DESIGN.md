---
version: alpha
name: Xiaomi
category: "Consumer Electronics"
description: "Xiaomi Global (mi.com/global) — a white-and-#f7f7f7 product showroom set entirely in MiSans Latin, with #191919 ink, a #191919 footer, Xiaomi orange #ff6900 reserved for nav hover and focus rings, 12px-radius controls and 999px pill details around full-bleed product photography."
colors:
  canvas: "#ffffff"
  page-body: "#f7f7f7"
  ink: "#191919"
  primary: "#ff6900"
  on-primary: "#ffffff"
  surface-soft: "#f5f5f7"
  ink-muted: "#898989"
  ink-black: "#000000"
  hairline: "#dbdbdb"
typography:
  display:
    fontFamily: "\"MiSans Latin\", sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  display-mobile:
    fontFamily: "\"MiSans Latin\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
  heading:
    fontFamily: "\"MiSans Latin\", sans-serif"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 37.5px
  heading-mobile:
    fontFamily: "\"MiSans Latin\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 22.5px
  ui-small:
    fontFamily: "\"MiSans Latin\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.1px
  link:
    fontFamily: "\"MiSans Latin\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 8px
  sm: 10px
  md: 12px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 22px
  s10: 24px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 0px 24px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    boxShadow: rgba(25, 25, 25, 0.06) 0px 6px 16px 0px
    height: 48px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.ui-small}"
  newsletter-input:
    textColor: "{colors.canvas}"
    typography: "{typography.ui-small}"
    rounded: "{rounded.md}"
    padding: 1px 36px 1px 14px
    height: 38px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

# Xiaomi

## Overview

This document describes the Xiaomi Global storefront and brand hub at `https://www.mi.com/global`, measured live on a 1280px desktop viewport (page height 6113px) and a 390px mobile viewport. The page is a vertical sequence of full-width product "billboards": a white header, a hero announcing the ecosystem idea ("Human × Car × Home — All your needs in one smart ecosystem") over a lineup of products from robot vacuums and routers to the electric car and scooters, then one band per product line — Xiaomi Auto over a blue sky with a blue sedan, the Leica Leitzphone "powered by Xiaomi", the Xiaomi Watch S5, a Mijia front-load washer dryer, Xiaomi HyperOS 3 over a blue motion-swirl image, the Xiaomi Imagery awards in black-and-white photography, a four-column Xiaomi Support row, and a near-black footer.

The design is a showroom: the product is the hero and the interface stays out of the way. Every word on the page is set in one family, MiSans Latin. The text palette is a near-black #191919 and a mid grey #898989, the surfaces are white #ffffff and very light greys (#f7f7f7 body, #f5f5f7 panels), and the only chromatic interface color is Xiaomi orange #ff6900, which the site declares as `--background-primary` and applies to nav hover and keyboard focus. Product imagery provides all the other color on the page: electric blue cars, the deep navy of the HyperOS artwork, white appliances on grey.

Microcopy is short and declarative: a product name, a one-line claim ("Your style, on time", "All-in-one laundry solution"), and a single "Learn more" link with a circled-arrow icon. There are no paragraphs of marketing copy on the home page.

Two overlays appeared in the capture and are not brand UI: a "Choose your location and language" bar with a dark "Continue" button at the very top, and a cookie consent strip with "Cookie Settings" and an orange "Accept All" button. Neither is documented as a component here; the extractor's primary-CTA detection landed on the "Continue" button and was overridden (see SOURCES.json `_roleOverrides`).

## Colors

- **Canvas — #ffffff.** The header, the hero, and the large majority of measured background area (weight 6457 of the page's background area). Product bands with white studio photography sit directly on it.
- **Page body — #f7f7f7.** The computed `body` background, also declared in the site's CSS as `--background-base: #f7f7f7`. It shows between bands and behind the carousel areas.
- **Surface soft — #f5f5f7.** The third most common background by area: light grey panels such as the product-feature bands.
- **Ink — #191919.** The most-read text color (1371 measured characters): headings, nav labels, "Learn more" links. The same value fills the footer.
- **Ink muted — #898989.** Secondary text (418 characters): sub-lines and supporting copy.
- **Ink black — #000000.** Pure black appears on 31 characters, mainly the location chooser and skip link at the top of the document.
- **Primary — #ff6900 (Xiaomi orange).** Measured as a background on the page, declared as `--background-primary` and `--orange-orange100`, and observed as the hover color of every desktop nav link (#191919 → #ff6900) and as the 2px focus outline on links and buttons. Use it as the accent and interaction color, never as a large fill.
- **On primary — #ffffff.** White reverse text; the site's CSS declares `--brand-reverse: #fff`.
- **Hairline — #dbdbdb.** A measured border color, also declared as `--brand-black-30`.

The site's custom properties expose a much larger palette than the home page uses — orange tints (`--brand-orange-60: #ffa566`, `--orange-orange90: #ff7819`), POCO yellow (`--poco-yellow100: #ffd400`), blue (`--blue-blue80: #4893f3`), red (`--red-red90: #df4343`) and gold/rose-gold tokens for special editions. They exist in the stylesheet but were not measured as rendered colors on the home page, so they are not tokens here.

## Typography

One family carries everything: **MiSans Latin**, loaded as a variable font (weights 100–900 according to the loaded `@font-face`), with the `micon` icon font alongside it. MiSans is Xiaomi's own typeface, built with Monotype and Hanyi Fonts as the default font of HyperOS; Xiaomi's MiSans page calls it "Global Free Commercial-Use Fonts" and lists VF/OTF/TTF/WOFF/WOFF2 formats. Because it is free to use, a rebuild should load MiSans itself rather than substitute. If it can't be loaded, fall back to the plain `sans-serif` the site itself declares.

Measured roles:

- **Display — 20px / 24px, weight 500.** The largest live text in the hero: the subline "All your needs in one smart ecosystem". The "Human × Car × Home" lettering above it was not captured as a text element by the extractor, so its size is not recorded here. The same 20px/500 style sets the band sublines on photography.
- **Heading — 30px / 37.5px, weight 600.** Section headings such as "Xiaomi Support".
- **Link — 16px / 16px, weight 400.** The "Learn more" links under every product band.
- **UI small — 14px / 16.1px, weight 400.** Nav labels, utility controls and the newsletter field.

By character count the page is dominated by 20px (767), 16px (701) and 14px (598), with 15px nav text, 22px, 30px and 32px used sparingly. Weights are 400 for running text, 500 for sublines, 600 for section headings and 700 for footer column titles. No letter-spacing was measured on any size.

## Layout

The desktop page is a single column of full-bleed bands at 1280px. The hero content spans from 106px to 1098px. Each product band follows the same template: a centered product name, a one-line claim, a centered "Learn more" link, then the product photograph filling the lower part of the band. Several bands are carousels with left and right arrow buttons at the edges and a thin progress indicator plus a pause control beneath the image.

The header measured 9 visible links on desktop: Mobile, Wearables, Xiaomi Auto, Smart Home, Lifestyle on the left, About Us, Support, Community on the right, plus search and account icons. The Support row near the end uses four equal columns (Customer Support, Warranty, User Guides, FAQ) with a line icon, a bold title and two lines of muted copy. The footer uses four columns: Support, About Us, Xiaomi Projects, and Follow Xiaomi with social icons and the newsletter field.

Spacing values are small and regular. The generated scale runs 1, 6, 8, 10, 12, 14, 16, 20, 22 and 24px. The most frequent gaps are 10px (84 uses) and 16px (28), and the most frequent paddings are 56px and 24px (42 each), with 32px, 64px and 80px used for larger section padding.

## Elevation & Depth

The interface is almost flat. Only one box shadow was measured on the whole page: the header's `rgba(25, 25, 25, 0.06) 0px 6px 16px 0px`, a soft 6px drop at 6% opacity of the ink color that lifts the white header off white content. Cards, buttons and the support tiles carry no shadow. Depth comes from photography (cars on reflective ground, a watch on a grey plinth) and from the contrast between white, #f7f7f7, #f5f5f7 and the #191919 footer. The CSS declares further shadow colors (`--shadow-black-a5`, `--shadow-black-a20`, `--shadow-primary-a10` and others), but they were not measured as rendered shadows on the home page.

## Shapes

Measured radii are 999px (17 elements — the circular carousel arrows, the circled "Learn more" arrow and other pill details), 12px (3 elements, including the newsletter field), 10px and 8px (one element each). The tokens record the pill as 9999px. Photography is shown either full bleed or as a cut-out product on a band background, without rounded image frames. Icons in the Support row are thin outline drawings. The overall shape language is soft-cornered controls on square bands.

## Components

- **Header / nav.** White #ffffff, 48px tall, `rgba(25, 25, 25, 0.06) 0px 6px 16px 0px` shadow, Xiaomi logo square at the far left. Nav links are #191919 MiSans Latin; on hover the text color changes to #ff6900 (measured on every desktop nav link).
- **Learn more link.** 16px/16px #191919 text with a small circled-arrow icon, padding `0px 24px` as measured. Hover lowers opacity from 1 to 0.72 (measured on two instances). On photographic bands the link is white.
- **Focus ring.** Keyboard focus draws a `2px solid` #ff6900 outline with a 2px offset on links and buttons (measured).
- **Carousel controls.** Circular arrow buttons at the left and right edges and a slim segmented progress bar with a pause button below the slide.
- **Support tiles.** Four columns: outline icon, 600-weight title, two lines of #898989 copy.
- **Newsletter input.** In the footer: 38px tall, 12px radius, padding `1px 36px 1px 14px`, white 14px text on the dark footer, with an arrow submit icon on the right.
- **Footer.** #191919 background with white text. Column titles are bold uppercase labels (SUPPORT, ABOUT US, XIAOMI PROJECTS), the links are small and muted, and the legal row at the bottom holds the copyright, Cookie Settings, Cookie Policy, Sitemap and the "Global / English" region switch.

The home page has no brand-owned filled button: the only filled buttons in the capture belong to the location chooser and the cookie banner, which are excluded.

## Design System Architecture

Xiaomi does not publish a web design system or component documentation for mi.com. We found no public UI kit for the site. The de-facto system is visible in its shipped CSS custom properties, which use a two-level naming scheme:

- **Semantic aliases**: `--background-base: #f7f7f7`, `--background-primary: #ff6900`, `--background-white: #fff`, `--brand-reverse: #fff`, `--brand-grey: #757575`.
- **Ramped palettes**: `--orange-orange100`, `--orange-orange90`, `--brand-orange-60`, `--brand-black-30`, `--brand-black-70`, `--blue-blue30`, `--blue-blue80`, `--red-red10`, `--red-red90`, `--neutral-neutral50`, plus alpha ramps (`--light-alpha7` … `--light-alpha80` built on rgba(25,25,25,…)) and `--shadow-*` colors.
- **Sub-brand palettes**: `--poco-yellow100`, `--poco-yellow-alpha30`, `--blackgold-claim100`, `--rosegold-line`, `--gold-on-nav100`, which serve the POCO and special-edition product pages.

Typography is a single brand typeface. Xiaomi publishes MiSans at https://hyperos.mi.com/font/en/, which describes it as a variable font family made with Monotype Fonts and Hanyi Fonts, the default font of Xiaomi HyperOS, covering 20+ writing systems and 600+ languages and offered as "Global Free Commercial-Use Fonts". The about page at https://www.mi.com/global/about/ returned HTTP 403 to our fetch, so we could not read any brand-asset links there.

## Do's and Don'ts

**Do**
- Set every string in MiSans Latin: 500 for sublines, 600 for section headings, 400 for links and UI.
- Keep text to #191919 and #898989 on white, #f7f7f7 or #f5f5f7.
- Use #ff6900 as the interaction accent: hover color, focus ring, small highlights.
- Give each product a full-width band: name, one-line claim, one "Learn more" link, then the photograph.
- Use 999px pills for circular controls and 12px corners for form fields.
- Keep the header white with the single 6%-opacity shadow.

**Don't**
- Don't fill large areas or long text runs with orange; on the measured page it is an accent only.
- Don't add shadows to cards or tiles. The only measured shadow is the header's.
- Don't introduce a second typeface or decorative letter-spacing.
- Don't build the location chooser's "Continue" button or the orange cookie "Accept All" button into the brand component set.
- Don't use the POCO yellow or gold tokens on Xiaomi-branded pages; they belong to sub-brand surfaces.

## Responsive Behavior

Measured at 390px wide:

- The header is 48px tall on white (#ffffff) and shows 2 visible header links plus a menu toggle. On desktop the header showed 9 visible links. How the menu opens was not measured.
- The hero subline (display role) drops from 20px/24px to **16px/20px**, weight 500.
- Section headings drop from 30px/600 to **18px/22.5px at weight 700**.
- The most frequent mobile text sizes by character count are 12px, 16px and 14px, with 17px, 18px and 32px used less.
- The first mobile band is white (#ffffff, 150px tall), followed by a light grey (#f4f4f4) carousel band. Mobile content is inset 16px from the left edge in the first band.

Breakpoint values, image art-direction changes between viewports, and any tablet layout were not measured.

## Iteration Guide

1. Start with the surfaces: #ffffff canvas, #f7f7f7 body, #f5f5f7 panels, #191919 footer.
2. Load MiSans Latin and set up the four measured styles: 20/24 at 500, 30/37.5 at 600, 16/16 at 400 and 14/16.1 at 400.
3. Build the white 48px header with the `rgba(25, 25, 25, 0.06) 0px 6px 16px 0px` shadow and #ff6900 hover on links.
4. Compose one product band template (centered name, claim, "Learn more" with circled arrow, photograph) and repeat it, alternating white and light-grey grounds, with full-bleed photography where the product calls for it.
5. Add the 2px #ff6900 focus outline with 2px offset to every interactive element.
6. Finish with the four-column support row and the dark four-column footer with the 12px-radius newsletter field.
7. When adding a new value, measure it on mi.com first. The stylesheet's extra palette tokens are not evidence that the home page uses them.
