---
version: alpha
name: Coffee World
category: "Thai Brands"
description: "Coffee World (coffeeworld.com), the Thai coffee-shop chain now part of PTG. Royal blue #273c84 text and accents on a white #ffffff canvas with a yellow #fad943 bean-and-drop mark, set entirely in Nunito Sans (32px/900 hero heading, 14px/400 body) with 100px pill navigation and 10px cards."
colors:
  canvas: "#ffffff"
  ink: "#273c84"
  primary: "#273c84"
  on-primary: "#ffffff"
  primary-dark: "#131e42"
  primary-light: "#bdc8ec"
  secondary: "#fad943"
  secondary-light: "#fef5cd"
  secondary-dark: "#534402"
  surface-gray: "#f0f1f1"
  ink-black: "#000000"
  ink-muted: "#999c9e"
  success: "#5ab243"
  warning: "#ffbc42"
  danger: "#c32003"
  info: "#0c51a0"
typography:
  display:
    fontFamily: "\"Nunito Sans\", sans-serif"
    fontSize: 32px
    fontWeight: 900
  body:
    fontFamily: "\"Nunito Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
  nav-link:
    fontFamily: "\"Nunito Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 500
rounded:
  xs: 10px
  sm: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 17.28px
  s6: 24px
  s7: 30px
  s8: 32px
  s9: 40px
  s10: 51.19px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  nav-bar:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    height: 78px
    padding: 0 24px
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav-link}"
  nav-link-active:
    textColor: "{colors.primary}"
    typography: "{typography.nav-link}"
  section-label:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
---

## Overview

Coffee World is a Thai coffee-shop brand, and its site is a one-page brand and menu showcase rather than a transactional storefront. The page title in the measured document is the generic word "Document", and the visible hero line is "The World Taste Journey, Your Daily Indulgence". The brand story on the page reads "Coffee World began in Thailand in 1997" and says the company joined the PTG family in 2017 alongside the sibling brand Punthai, with PT Max Card and Max Card Plus named as the loyalty links. The design language is confident and friendly: one saturated royal blue (`#273c84`) carries almost every word on the page, a sunny yellow (`#fad943`) appears in the logo mark and the bean icon, and white (`#ffffff`) is the working canvas.

The capture shows four distinct bands. A full-bleed promotional banner opens the page (during the capture it advertised a Toy Story 5 shopping bag, priced "229.-", in a deep navy starfield with script lettering). Below it sits a centered brand statement under a yellow coffee-bean icon. A textured off-white "SEASONAL MENU" band follows, with a Geisha Blend coffee bag on the left and drinks and beans scattered on a loose grid. The last measured band is a 50/50 story split: a café interior photograph with a yellow-and-blue leaf-shaped pendant lamp on one side, and a blue heading, a sub-heading "Where the Journey Began (1997)" and a paragraph on the other. The measured desktop page is 1280px wide and 6210px tall.

The tone is warm and plain. The headings are title case and blunt, the menu captions are tiny uppercase product names ("BLACK AMERICANO YUZU", "COFFEE BEAN CW HOUSE BLEND"), and the promotional banner is bilingual, mixing English display lettering with Thai text for the campaign dates and conditions. The page has no measured primary button: the extractor found no call-to-action element, so this document does not invent one.

## Colors

The palette is declared as CSS custom properties on `:root` in the site's own stylesheet (`https://www.coffeeworld.com/globle.css`) and the same values were read back by the extractor as root variables.

- **Primary / ink — `#273c84`.** Declared as `--color-primary`, `--color-blue-text` and `--color-blue-background`. It is the most-read text color on the page (2009 weighted characters, against 261 for white, 175 for black and 14 for grey) and the fill of the second-largest background area. The hero heading, the body paragraph and the active navigation item all use it.
- **Canvas — `#ffffff`.** The dominant background area by a wide margin (weight 996 against 264 for the blue). It is also declared as `--color-white-background`. The same white, `on-primary`, is the declared `--color-white-text`, and it is the measured color of the phone-number link.
- **Primary dark `#131e42` and light `#bdc8ec`.** Declared as the dark and light steps of the blue. The measured extraction records the values but no measured element that uses them, so they are listed here as system tokens only.
- **Secondary yellow `#fad943`, with light `#fef5cd` and dark `#534402`.** Declared as `--color-secondary` and its steps, and `--color-yello-text` (the variable name is spelled that way in the source) uses the same yellow for text. The yellow is the brand's second voice: the bean icon above the hero statement and the upper lobe of the logo mark are yellow in the capture.
- **Grey ramp.** A nine-step ramp runs from `--color-gray-900` `#0e0e0f` to `--color-gray-100` `#f0f1f1`. Two steps are measured in use: `#999c9e` (gray-400) is the inactive navigation color and the computed color of the document body, and `#f0f1f1` (gray-100) appears as a background area. Pure black `#000000` is the third most-read text color and in the capture the uppercase menu captions render in black.
- **Semantic colors.** Success `#5ab243`, warning `#ffbc42`, danger `#c32003` and info `#0c51a0` are declared in the stylesheet. None is measured on the rendered home page, so they are system tokens, not observed UI.

Contrast pairings that the page does show: blue on white for all running text, white on blue for the "SEASONAL MENU" label chip, and grey `#999c9e` on white for resting navigation. The textured off-white of the seasonal-menu band is a background image, so no single fill is declared for it.

## Typography

One family carries the whole interface: Nunito Sans, loaded as a variable font covering weights 200 to 1000 (the page's loaded-font record reads "Nunito Sans 200 1000 normal"). The HTML head also requests IBM Plex Sans Thai (weights 100 to 700) and Open Sans (weights 300 to 800) from Google Fonts. In the shipped stylesheet IBM Plex Sans Thai is the most-referenced family by declaration count (56 against 21 for Nunito Sans and 20 for Open Sans), which fits a Thai-language site, while the characters actually measured on the rendered home page are almost entirely Nunito Sans (2453 weighted characters, against 6 for Arial). An "Avenir Next" face is named in the type-scale comments, but its `@font-face` rule is commented out in the stylesheet, so it is not served. All three served families are open-source Google Fonts, so no substitute is needed.

Measured roles:

- **Display** — Nunito Sans 32px / 900, color `#273c84`. This is the "The World Taste Journey, Your Daily Indulgence" statement; it is a `div` rather than a heading element, and the extractor selected it as the largest hero text.
- **Body** — Nunito Sans 14px / 400, color `#273c84`. This is the brand-story paragraph and the most-used size on the page (1700 weighted characters).
- **Navigation** — 20px / 500 in `#999c9e`, switching to 700 in `#273c84` for the active item, per the `.menufont` and `.menufont.active` rules in the stylesheet.
- **Secondary sizes** measured by character weight: 16px, 10px (the smallest measured size), 20px, 24px and 12.8px.

The stylesheet also names a larger type scale that the home page does not reach: display 96px, h1 64px, h2 48px, subheads 40/32/24/14px, body 20/16/14/12/10px, CTA 16/14/12px and breadcrumbs 20/12px, with weights from 400 to 900 and a 1px letter-spacing variable for buttons. Weights actually measured on the page are 400, 500, 600, 700 and 900.

## Layout

The page is built from full-width bands that alternate between a white canvas and imagery. The measured viewport is 1280px. The navigation floats over the top of the page rather than sitting in the document flow: the stylesheet positions it absolutely with 24px offsets from the top, left and right edges, which is why the banner photograph runs underneath it.

Spacing values measured on the page are 4px, 8px, 12px, 16px, 24px, 30px, 32px, 40px and 51.19px, plus an odd 17.28px gap that appears eight times and a single 80px padding. The generated spacing scale keeps these exact values. The story band is a two-column split at equal width (the capture shows the image and the text each taking half the page); 51.19px is one of the measured paddings. The seasonal-menu band uses a loose, scattered product layout: a tall coffee-bag image at left, a label and headline above a grid of four drinks, and a separate row of three coffee beans lower and to the right, so the composition reads as an editorial poster rather than a regular product grid.

Density is low. Body copy is 14px but sits in wide, quiet columns; headings are centered when they stand alone and left-aligned inside the split band.

## Elevation & Depth

Elevation is almost absent. The shipped stylesheet defines a small family of soft, low-opacity shadows: `0 8px 24px 0 rgba(0, 0, 0, 0.05)` on the navigation pill (the one shadow also seen in the measured page frequencies), `0px 4px 20px 0px #0000001A` on dropdown panels, `0 6px 20px 0 rgba(0, 0, 0, 0.10)` and `0 4px 20px 0 rgba(0, 0, 0, 0.10)` on cards, and one upward shadow `0 -2px 10px rgba(0, 0, 0, 0.1)` inside a media query. None of these is a hard drop shadow. Depth on the page otherwise comes from photography, the navy banner against the white bands, and the paper-like texture behind the seasonal menu.

## Shapes

The shape language is round. The navigation bar uses a 100px radius, which at its 78px height makes a full pill; the stylesheet's most frequent radius is 100px (20 declarations), followed by 50px (9), 16px (7), 30px (6), 24px (5), 8px (4), 60px (4) and 35px (4). The generated tokens keep three values: `xs` 10px (measured on the page), `sm` 100px (the pill navigation) and `pill` 9999px. Circular elements use a 50% radius (9 measured occurrences), which matches the round logo dots and icon buttons. The "SEASONAL MENU" label chip in the capture is a flat blue box with white text and square corners.

## Components

- **Navigation bar (`nav-bar`).** A white pill, 78px tall, 100px radius, 24px of horizontal padding, floating 24px from the top and sides of the viewport with the soft `0 8px 24px` shadow. Left side: "Home", "Menu", "Others" at 20px; center: the two-dot logo mark (yellow above blue); right: a blue magnifier icon. Inactive items are `#999c9e` / 500; the active item is `#273c84` / 700. Measured hover on the "Others" button moves its text and border color from `#999c9e` to `#273c84`, with no change of shadow, opacity or radius.
- **Search.** The stylesheet defines a search overlay with result groups for categories, menu items and store locations; the home capture shows only the closed magnifier icon.
- **Section label (`section-label`).** The "SEASONAL MENU" chip: white text on a flat `#273c84` rectangle, uppercase.
- **Product tiles.** A cut-out product photograph above a tiny uppercase black caption; no card outline, fill or shadow is visible in the capture.
- **Contact link (`link`).** The phone number "(+66)2-276-2868" is measured as white, 14px, weight 400, on a dark surface.
- **Promotional banner.** A full-bleed navy artwork image with lettering baked into the picture; it is campaign content and not a reusable component.

Buttons: the extractor reported no primary, secondary or outlined call-to-action on the page (`ctaPrimary: null`), so no `button-primary` token is declared.

## Design System Architecture

No public design-system documentation, brand-guideline PDF or press kit is linked from the home page, and none was found at the pages opened, so no official design system is documented. The de-facto system is in the shipped stylesheet at https://www.coffeeworld.com/globle.css (about 7,200 lines, hand-written). It begins with a `:root` block of tokens grouped by comment into Primary Color, Secondary Color, Background Color, Text Color, Semantic Color and Gray Color, followed by a type scale grouped as Display, Headings, Subhead, Body Text and Small Text (variable names such as `--h2-font-size-48`, `--body3-font-size-14` and `--cta-r-font-size-14` carry their pixel size in the name), a weight scale (`--regular-400` through `--black-900`) and one letter-spacing token. Component rules below that use flat, hyphenated class names (`.nav-menu-box`, `.menufont-box`, `.box-category-menu`, `.menusearch-result-de-title`), with `.active` as the state modifier.

One practical quirk: the document served as raw HTML contains template placeholder copy (a "Brewing Memorie" story with a 1995 founding), and the page title is "Document". The real brand copy ("began in Thailand in 1997") appears only after the page renders, so any reproduction should use the rendered text, not the raw HTML. The fonts are loaded from Google Fonts through a single stylesheet link in the head.

## Do's and Don'ts

Do:
- Set long text in `#273c84` on white, and keep the display statement at 32px / 900.
- Use yellow `#fad943` only as an accent: the bean icon, the logo mark and highlights, not for body text on white.
- Keep the floating navigation as a white 100px-radius pill with the soft shadow and 24px edge offsets.
- Keep captions for menu items tiny and uppercase, and let photography and product cut-outs carry the imagery.
- Use the declared semantic colors only for success, warning, danger or info states, which this page does not show.

Don't:
- Don't add heavy shadows or hairline borders; the measured system uses soft, low-opacity shadows and almost no borders (no border colors were recorded).
- Don't invent a large call-to-action button style; none is measured on this page.
- Don't treat the grey `#999c9e` as body text: it is the resting navigation color.
- Don't use the promotional banner artwork, its script lettering or its starfield as reusable brand UI.
- Don't use Avenir Next: its `@font-face` is commented out in the shipped stylesheet.

## Responsive Behavior

Measured mobile pass: the hero statement stays 32px / 900 in `#273c84` and wraps to a 358px-wide, 129px-tall block (the desktop version is 740px wide and 43px tall); the brand paragraph stays 14px / 400 at 358px wide and 266px tall. Character-weighted font sizes on mobile are 14px, 12px, 24px, 20px, 32px, 10.14px and 15.6px. Colors and families are unchanged in the mobile pass. A mobile primary call-to-action and navigation were not measured (both `null`).

Declared in the stylesheet: a long ladder of `@media (max-width: …)` rules at 3840, 3024, 2560, 2310, 2048, 1920, 1880, 1680, 1600, 1540, 1520, 1470, 1440, 1380, 1366, 1280, 1100, 1035, 1024, 970, 810, 770, 767, 670, 630, 520, 430, 414, 393 and 375px. At `max-width: 970px` the `.burger-btn` rule changes from `display: none` to `display: block` and `.nav-menu-box` drops from 78px to 64px height; at 630px the burger width changes to 6vw. How the mobile menu actually looks when open was not measured. Dark mode and tablet layouts were not measured.

## Iteration Guide

1. Start from the three colors that define the page: `#273c84` for every piece of text and accent, `#ffffff` for the canvas, `#fad943` for the yellow mark.
2. Set everything in Nunito Sans; use 32px / 900 for the single statement heading and 14px / 400 for paragraphs, then add the 20px navigation size from the stylesheet.
3. Build the floating nav first: 78px tall, white, 100px radius, 24px offsets, soft `0 8px 24px` 5% black shadow.
4. Alternate white bands with imagery; keep the seasonal-menu band as a loose editorial arrangement rather than a strict card grid.
5. When you need a state color (success, warning, danger, info), use the declared hexes listed above.
6. Verify against the measured values before shipping: run `node web/scripts/verify-designs.mjs --slug=coffee-world`.
7. If you add a button, measure it on a live page first; the home page has none.
