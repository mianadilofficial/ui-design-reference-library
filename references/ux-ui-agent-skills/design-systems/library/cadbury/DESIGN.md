---
version: alpha
name: Cadbury
category: "Food & Beverage"
description: "Cadbury UK (cadbury.co.uk) is a chocolate brand site built on Gatsby and Tailwind: Cadbury purple #4b0983 with a deeper #3b0073, gold gradient pill buttons, Gibson SemiBold uppercase headlines with wide +0.08em tracking at 64px, Gibson Regular body at 16px, 16px-radius lilac #e4daec recipe cards and full-bleed product-pack photography."
colors:
  canvas: "#ffffff"
  ink: "#4b0983"
  primary: "#4b0983"
  on-primary: "#ffffff"
  primary-hover: "#8d68ae"
  purple-deep: "#3b0073"
  purple-mid: "#7846a2"
  purple-soft: "#9d80b9"
  purple-tint: "#e4daec"
  purple-tint-strong: "#d2c1e0"
  cyan-band: "#20baee"
  gold: "#ebc373"
  gold-light: "#ffecb2"
  gold-mid: "#f1cd76"
  gold-deep: "#d0a651"
  pink: "#e7295b"
  alert-red: "#de350b"
  ink-text: "#1e1e1e"
  ink-black: "#000000"
  grey-dark: "#333333"
  grey-light: "#a0a0a0"
typography:
  display:
    fontFamily: Gibson-SemiBold, sans-serif
    fontSize: 64px
    fontWeight: 600
    lineHeight: 64px
    letterSpacing: 5.12px
    textTransform: uppercase
  display-mobile:
    fontFamily: Gibson-SemiBold, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 42px
    letterSpacing: 3.2px
    textTransform: uppercase
  heading:
    fontFamily: Gibson-SemiBold, sans-serif
    fontSize: 36px
    fontWeight: 600
    lineHeight: 36px
    letterSpacing: 2.88px
    textTransform: uppercase
  subheading:
    fontFamily: Gibson-SemiBold, sans-serif
    fontSize: 34px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 2.72px
    textTransform: uppercase
  body:
    fontFamily: Gibson-Regular, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.8px
  button:
    fontFamily: Gibson-SemiBold, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 2.16px
    textTransform: uppercase
  nav:
    fontFamily: Gibson-SemiBold, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.64px
    textTransform: uppercase
rounded:
  xs: 16px
  sm: 100px
spacing:
  s1: 2px
  s2: 4px
  s3: 8.73px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 22px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-gold:
    textColor: "{colors.purple-deep}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 16px
    height: 48px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    height: 44px
  card:
    backgroundColor: "{colors.purple-tint}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.3) 0px 4px 8px 0px, rgba(0, 0, 0, 0.15) 0px 8px 16px 4px
---

## Overview

Cadbury is the UK chocolate brand, and https://www.cadbury.co.uk/ (title "Cadbury Chocolate", generator "Gatsby 4.25.9") is its consumer site: products, recipes, gifting, partnerships, competitions and a forthcoming online shop. The desktop capture is 1,280px wide and 8,851px tall.

The page is a stack of full-width, strongly coloured promotional bands, each one a different campaign. The base is Cadbury purple (`#4b0983`) with a deeper purple (`#3b0073`), but each band is allowed its own colour: a bright cyan (`#20baee`) for a new flavour, a patterned coral-pink for a new product, white for recipes. Gold is the brand's jewellery: headings and buttons on purple are filled with a metallic gold gradient, and navigation links turn gold (`#ebc373`) on hover. Type is Gibson, set in uppercase semibold with very wide tracking (+0.08em on headlines), and product packs are photographed large and cut out, overlapping band edges.

The capture, from the top: a purple textured hero with the gold script "Cadbury" logo and a white drop-shaped emblem at the left, white uppercase navigation (ABOUT, EXPLORE and PRODUCTS with chevrons, then RECIPES, GIFTING, PARTNERSHIPS) and a "Search" control at the right; the hero headline "WIN CASH PRIZES TO GIVEAWAY" in a gold gradient at 64px, three lines of white 16px copy and a gold gradient pill "ENTER NOW", beside a "Giveaway" lockup and a Dairy Milk bar pack; a split band, cyan at the left with a small underlined eyebrow "NEW FLAVOUR", the purple heading "CADBURY DELIGHTS OREO", copy and a gold "DISCOVER MORE" pill, and a blue-to-purple panel at the right holding the product box and bar; a coral-pink band with a tonal swirl pattern, "NEW PRODUCT" centred between two purple rules, copy, a purple "DISCOVER MORE" pill and a Biscoff bar pack; a split dark-purple band with the gold "Cadbury SHOP" logo and a gift-box render at the left and, at the right, a gold-underlined "COMING SOON" eyebrow, the white heading "DISCOVER A NEW WAY TO SHOP CADBURY" and a gold "KEEP ME UPDATED" pill. Further down are lilac recipe cards and photographic tiles ("CADBURY WORLD").

The voice is playful and direct: "A competition you can't win? Strange. A competition of 1000s of cash prizes, you get to give away to anyone you like? Pretty great actually."

## Colors

- **Purple `#4b0983` (ink, primary).** The signature colour: the fill of the "DISCOVER MORE" button (white text), headings on light bands ("CADBURY DELIGHTS OREO"), borders, and 690 characters of text; it is the stylesheet's `purple`. The page's largest background area (3,785 units).
- **Deep purple `#3b0073`.** The stylesheet's `darkPurple`; footer and dark bands (1,456 units) and the label colour on gold buttons.
- **Tints.** `#e4daec` (`Purple15`, 739 units) is the recipe-card fill; `#d2c1e0` (`Purple25`, 484 units); `#7846a2` (`Purple75`) and `#9d80b9` (`darkPurple50`) are declared in the stylesheet. The hover fill of the purple button is `#8d68ae`.
- **Cyan `#20baee`.** The "new flavour" band (683 units); it is not among the stylesheet's colour classes.
- **Gold.** `#ebc373` (`golden`) is the navigation hover colour and a border colour; the metallic gradients use `#f1cd76`, `#ffecb2` and `#d0a651` (the `.bg-btnBg` class is `linear-gradient(90deg,#f1cd76 2%,#ffecb2 42%,#d0a651 71%,#ffecb2)`, and `.bg-roundTtlBg` is `linear-gradient(90deg,#d0a651,#ffecb2 46.88%,#f1cd76 86.98%)`). The measured colour of the hero h1 is `#ffffff` while the capture shows it gold-filled, consistent with a gradient text fill (a `.tagGradientBg` class in the stylesheet uses the same gold stops).
- **Others declared.** `pink` `#e7295b`, `red` `#de350b`, `lightGrey` `#a0a0a0`, `darkGrey` `#333333`. Text on light is `#1e1e1e` (289 characters) or `#000000` (59).
- **White `#ffffff` (canvas).** 2,045 units of background area, and white text on purple (1,101 characters).

## Typography

Gibson in three weights: **Gibson-SemiBold** for headlines, navigation and buttons (792 characters), **Gibson-Regular** for running text (1,511 characters), and a declared **Gibson-Bold**; the page also uses the `icofont` icon font. All are served with a `sans-serif` fallback. No foundry or licence page was opened for Gibson, and the declared fallback is the only substitute recorded.

Scale (desktop): h1 64px/64px at 600, uppercase, +5.12px tracking (+0.08em); h2 36px/36px at 600 with +2.88px; h3 34px/32px at 400 with +2.72px; body 16px/24px with +0.8px (+0.05em); buttons 18px/24px at 600 with +2.16px (+0.12em); navigation 16px/24px with +0.64px (+0.04em), uppercase; the recipe tile title uses 24px with +2.88px. By characters: 16px 1,588, 52px 210, 18px 177, 12px 118, 24px 99, 34px 44, 36px 40, 64px 27; weights are 400 (1,977 characters) and 600 (326). Mobile (390px): the h1 is 40px/42px with +3.2px tracking and the h2 40px/40px.

## Layout

A 1,280px canvas with alternating full-width bands, often split into two equal columns (copy at one side, product photography at the other). The nav block measures 793px wide, 62px tall. Measured paddings: 16px (15 elements), 15px (7), 20px (7), 12px (6), 102.391px (6), 2px, 22px, 10px and 32px (4 each); gaps are rare (4px on 3 elements, 20px on 2). Recipe cards are 608px by 608px; the Cadbury World tile is 295px by 341px. The Tailwind-generated stylesheet applies `min-width: 768px` to 227 rules and also declares breakpoints at 1024px, 1232px and 1600px.

## Elevation & Depth

Cards carry a two-layer shadow: `rgba(0, 0, 0, 0.3) 0px 4px 8px 0px, rgba(0, 0, 0, 0.15) 0px 8px 16px 4px` (measured on the recipe cards and the Cadbury World tile; the same pair is declared twice in the stylesheet as `0 4px 8px rgba(0,0,0,.3),0 8px 16px 4px rgba(0,0,0,.15)`). Beyond that, depth is photographic: product packs overlap band boundaries with soft shadows, the purple hero has a textured surface, and the coral band has a tonal swirl pattern.

## Shapes

Pills and rounded rectangles. Measured radii: `100px` on 13 elements (all the buttons are full pills), `16px` on 5 (cards and tiles). The stylesheet also declares 4px, 4.8px, 8px, 12px and 20px values for other components. All measured buttons are pills and all measured cards are 16px.

## Components

- **Purple pill ("DISCOVER MORE").** `#4b0983` fill, white Gibson-SemiBold 18px uppercase with +2.16px tracking, 100px radius, `12px 16px` padding, 48px tall, 240px wide; hover fills `#8d68ae`.
- **Gold pill ("ENTER NOW", "KEEP ME UPDATED").** The `.bg-btnBg` gold gradient fill, `#3b0073` label (measured colour of the "ENTER NOW" link), same 18px/48px/240px geometry, 100px radius.
- **Navigation.** Transparent bar over the purple hero, white 16px uppercase Gibson-SemiBold links, chevrons on dropdown items; links turn `#ebc373` (RECIPES, GIFTING, PARTNERSHIPS measured) on hover. The search control is a 44px-tall field with white 16px text.
- **Eyebrow.** A small uppercase label with a 2px underline rule ("NEW FLAVOUR", "COMING SOON"), in purple on cyan or gold on purple.
- **Recipe card.** `#e4daec`, 16px radius, the two-layer shadow, 608px by 608px, with a 34px uppercase title, "10 MINS / 10 SERVINGS" metadata and a "VIEW RECIPE" link.
- **Image tile.** The "CADBURY WORLD" tile: 16px radius, same shadow, 295px by 341px, with a 24px white uppercase label at +2.88px tracking.
- **Promotional band.** A full-width block with copy at one side and a cut-out product pack overlapping the edge.

## Design System Architecture

No public design system or brand guideline for Cadbury was found: https://www.cadbury.co.uk/ links to product, recipe, about, accessibility and cookie pages, but not to brand assets. The site is a Gatsby 4.25.9 build, styled with Tailwind CSS, with a main stylesheet at https://www.cadbury.co.uk/styles.780880fcd377d8cdffd3.css. The page's `:root` holds Tailwind's `--tw-*` variables (for example `--tw-ring-color: rgba(59,130,246,.5)`) and Algolia Autocomplete's `--aa-*` variables for the search panel (`--aa-search-input-height: 44px`, `--aa-detached-media-query: (max-width:680px)`).

The brand palette is a custom Tailwind theme visible in the compiled classes: `purple` `#4b0983`, `darkPurple` `#3b0073`, `Purple15` `#e4daec`, `Purple25` `#d2c1e0`, `Purple75` `#7846a2`, `darkPurple50` `#9d80b9`, `golden` `#ebc373`, `pink` `#e7295b`, `red` `#de350b`, `lightGrey` `#a0a0a0`, `darkGrey` `#333333`, plus named gradients (`btnBg`, `roundTtlBg`) for gold. Breakpoints are Tailwind's `min-width` values (768px most used, 1024px, 1232px, 1600px).

## Do's and Don'ts

Do:
- Use Cadbury purple `#4b0983` for text on light bands and for the primary pill, and `#3b0073` for dark bands.
- Fill buttons and headlines on purple with the gold gradient; use `#ebc373` for hover on white nav text.
- Set headlines in Gibson-SemiBold uppercase with +0.08em tracking and body in Gibson-Regular at 16px with +0.05em.
- Give every button a 100px radius and every card a 16px radius with the two-layer shadow.
- Let each campaign band take its own colour (cyan, coral pink, purple) while keeping the type palette purple, white or gold.
- Photograph packs large, cut out, and overlapping band edges.

Don't:
- Don't set headlines in sentence case or without tracking.
- Don't square off buttons.
- Don't use Tailwind's `--tw-ring-color` blue or the Algolia `--aa-*` values as brand colours.

## Responsive Behavior

Measured at 390px: the h1 is 40px/42px at 600 with +3.2px tracking in a 358px-wide box, the h2 is 40px/40px in a 360px-wide box, body copy is 16px/24px with +0.64px tracking in a 342px-wide box, and the purple pill is unchanged at 240px by 48px. Character counts by size on mobile: 16px 1,542, 40px 259, 18px 177, 20px 99, 14px 90, 28px 62, 12px 28. The mobile pass recorded no navigation role, so how the navigation reflows was not measured. The stylesheet applies most of its layout from `min-width: 768px` (227 rules) with further steps at 1024px, 1232px and 1600px; the layout of a given band below 768px was not measured.

## Iteration Guide

1. Set canvas `#ffffff`, ink and primary `#4b0983`, deep purple `#3b0073`, tint `#e4daec`, gold stops `#f1cd76`, `#ffecb2`, `#d0a651`.
2. Load Gibson (Regular and SemiBold); uppercase, tracked headlines at 64px/36px, 16px body with +0.8px.
3. Build the purple hero with a white uppercase nav, a gold-gradient headline and a gold pill; then split bands with a different colour per campaign.
4. Add the purple pill (240px by 48px, hover `#8d68ae`) and 16px lilac cards with the two-layer shadow.
5. Overlap product packs onto band edges.
6. Run `node web/scripts/verify-designs.mjs --slug=cadbury` and compare with `web/data/captures/cadbury.jpg`.
