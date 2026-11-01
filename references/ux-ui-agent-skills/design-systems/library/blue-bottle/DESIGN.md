---
version: alpha
name: Blue Bottle Coffee
category: "Food & Beverage"
description: "Blue Bottle Coffee's US store bluebottlecoffee.com measured live — white #ffffff and warm off-white #f6f6f3 bands, black #000000 text, square charcoal #333333 buttons that go black on hover, a #333333 footer, the logo's bottle blue #00a9e0, and two ABC faces: uppercase ABC Marfa headings (24px, +1.6px) over ABC Diatype body at 16px/22px, with 0px corners."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#333333"
  on-primary: "#ffffff"
  surface-warm: "#f6f6f3"
  surface-stone: "#eaeae7"
  ink-muted: "#545454"
  ink-warm: "#6c6864"
  border-light: "#dddddb"
  brand-blue: "#00a9e0"
typography:
  display:
    fontFamily: "\"ABC Marfa Regular\", ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 1.6px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"ABC Marfa Regular\", ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 1.6px
    textTransform: uppercase
  subheading:
    fontFamily: "\"ABC Marfa Regular\", ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 1.6px
    textTransform: uppercase
  body:
    fontFamily: "\"ABC Diatype Regular\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  body-mobile:
    fontFamily: "\"ABC Diatype Regular\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  caption:
    fontFamily: "\"ABC Diatype Regular\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  nav:
    fontFamily: "\"ABC Marfa Regular\", ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 1.6px
    textTransform: uppercase
rounded:
  none: 0px
  round: 100px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
  s11: 40px
  s12: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 12px 36px
    height: 48px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.ink}"
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    border: "1px solid #333333"
    padding: 12px 36px
    height: 48px
  nav:
    backgroundColor: "{colors.surface-warm}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 84px
  country-select:
    textColor: "{colors.ink}"
    typography: "{typography.caption}"
    padding: 0px 16px 0px 0px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 96px 60px 36px
---

## Overview

This is Blue Bottle Coffee's US English store at `https://bluebottlecoffee.com/us/eng` ("Blue Bottle Coffee | Specialty Coffee"), measured live on 2026-10-17 at 1280px (7,248px tall) and in a mobile pass. The site is a commerce front for coffee, subscriptions and cafés, but it is art-directed like a gallery catalogue: quiet off-white bands, black type, square buttons and moody still-life photography in natural light.

At the top a thin announcement bar ("Free shipping on subscriptions and orders over $40") sits over an 84px #f6f6f3 header: four uppercase links on the left (Shop, Best Sellers, Subscriptions, Visit Us & Learn), the blue bottle logo centred, and country selector, search, account and cart icons on the right. A full-width hero photo of a turntable and vinyl ("Notes in Repose") leads into the headline "NOTES IN REPOSE. OUT NOW.", a one-line description and a charcoal "Shop the Vinyl" button with carousel pagination at the right.

Below come "New and Trending" (four product cards with labels such as Limited Edition, New, Bundle & Save, Best Seller, prices, and "Add to Cart"), split image-and-text modules ("Our Miso Caramel Lineup", "Fall Rituals: Craft Matcha", "Blue Bottle at Home Specialty Coffee Subscriptions"), "Shop by Collection" (Signature Blends, Bring Blue Bottle Home, Shop Drinkware, Brew Tools), a full-width membership feature, "Explore Our Brew Guides", a customer review carousel and a dark footer with newsletter signup.

Copy is calm and sensory ("Experience fall comfort, reimagined"), headlines are set in widely tracked capitals, and colour comes almost entirely from photography — amber espresso, green matcha, the blue of the logo and bag labels.

## Colors

- **canvas #ffffff** — the largest painted area (weight 11,263); product grids and white bands; 35% of the capture.
- **surface-warm #f6f6f3** — header and alternating bands (weight 4,838; 24% of the capture). This warm off-white is the brand's signature ground.
- **surface-stone #eaeae7** — a slightly darker stone fill on small areas (weight 88).
- **ink #000000** — the most-read text colour (5,579 characters) and the hover fill of primary buttons.
- **primary #333333** — charcoal fill of every primary button ("Shop the Vinyl", "Shop Signature Blends", "Explore Subscriptions", "Add to Cart") and the footer background (weight 861); also 475 characters of text.
- **on-primary #ffffff** — text on buttons and footer (753 characters).
- **ink-muted #545454** and **ink-warm #6c6864** — secondary text for product notes, roast levels and review metadata (440 and 233 characters).
- **border-light #dddddb** — light dividers.
- **brand-blue #00a9e0** — the fill of the bottle logo SVG in the header; it also backs the off-screen "Skip to content" link. Use it for the mark, not for UI.

The site also ships Bootstrap and Tailwind defaults in its CSS variables (`--bs-primary: #0d6efd`, Tailwind ring colours); those are framework defaults, not brand colours.

## Typography

Two "ABC" typefaces, both loaded as webfonts and published as CSS variables:

- **ABC Marfa Regular** (`--serif: ABC Marfa Regular, ui-serif, Georgia, …`) — despite the variable name, a sans used in uppercase with +1.6px tracking for all headings, navigation and footer headings. **display** 24px / 32px (h1 and h2: "NOTES IN REPOSE. OUT NOW.", "NEW AND TRENDING"); **subheading** 16px / 22px (product names, h3); **nav** 16px / 22px. A lighter 24px/200 variant with +2.4px tracking sets "What our customers are saying" (29 characters).
- **ABC Diatype Regular** (`--sans`) — body copy, buttons, prices and captions: **body** 16px / 22px (the most-read size, 3,272 characters); 14px is nearly as common (3,091 characters) for product details; **caption** 12px / 16px for the country select and small links.

Everything is weight 400 except that one 200-weight heading and eight characters at 800. ABC Marfa and ABC Diatype are licensed webfonts here; open substitutes with a similar tone are a neutral grotesk (Inter or Helvetica Now) for Diatype and a wide, slightly geometric sans in tracked capitals for Marfa.

## Layout

Desktop content is left-aligned within generous margins; the hero and feature images run full-bleed. Product rows are four cards across ("New and Trending", "Shop by Collection"); editorial modules are two-column splits with the photo taking the larger half and the text block vertically centred, alternating left and right; the brew guides sit two across and reviews three across in a carousel. The extractor recorded up to ten card columns (carousel items included).

Bands alternate white and #f6f6f3 with tall heights (937px, 604px, 752px, 948px, 992px). Measured gaps: 4px (most frequent), 24px, 16px, 8px and 40px, up to 96px; paddings: 20px (most frequent), 12px, 16px, 24px, 60px and 96px. The footer is padded 96px 60px 36px. Headings sit 24px above their content rows.

## Elevation & Depth

The page is flat. Two shadows were measured on small elements — `rgba(28, 29, 33, 0.12) 0px 0px 18px 0px, rgba(28, 29, 33, 0.06) 0px 6px 6px 0px` and `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` — on two elements each, which the extraction does not identify; product cards, buttons and images have none. Depth comes from the shift between #ffffff and #f6f6f3 bands, from the charcoal footer, and from photographic shadow and light within the images.

## Shapes

Square. Buttons, cards, images, inputs and the footer all compute 0px radius. The only measured radius is 100px, on two elements the extraction does not identify. Product tiles are framed by their #f6f6f3 image backgrounds rather than borders; buttons carry a 1px #333333 border in both filled and outlined variants.

## Components

- **Primary button** — #333333 fill and 1px border, white 16px Diatype label, 12px 36px padding, 48px high, square. Hover turns the fill black #000000 (measured on "Shop the Vinyl" and every "Add to Cart").
- **Outlined button** — white fill, black text, 1px solid #333333, same size: "Shop New and Trending", "Shop At Home Syrups", "Shop Japanese Tea", "Find a Cafe". Hover was measured with no visible change.
- **Product card** — square image on a light ground with a small label in the top-right corner (Limited Edition, New, Best Seller), uppercase Marfa name, Diatype price and two-line flavour notes in muted grey, then "Add to Cart".
- **Header** — #f6f6f3, 84px, uppercase Marfa 16px links, centred blue logo, icon actions; a country `select` in 12px Diatype.
- **Editorial split** — photo half, text half with an uppercase title, short paragraph and an outlined or filled button.
- **Footer** — #333333, uppercase Marfa column heads (Company, Learn, More, Subscribe and Stay Updated), Diatype links, an underlined email field with an arrow, social icons, and a bottom row of legal links.

## Design System Architecture

No public design system or brand guideline for Blue Bottle was reachable: the home page and the "Our Brand" page returned HTTP 403 to fetch tools (recorded in SOURCES.json), so no official source could be opened. The de-facto system is visible in the shipped CSS: two font variables (`--serif` → ABC Marfa Regular, `--sans` → ABC Diatype Regular), Tailwind utility classes (the logo SVG carries `lg:w-6 lg:h-full mx-auto md:ml-auto`, and `--tw-ring-*` / `--tw-shadow` variables are declared) alongside a Bootstrap variable layer (`--bs-*`) that is not used for brand colours. Breakpoints follow Tailwind-style steps at 600px, 640px, 768px, 1024px, 1280px, 1440px and 1536px. Other font faces in the CSS (Oracle, Nunito Sans) were not measured on home-page text.

## Do's and Don'ts

**Do**
- Use #f6f6f3 and #ffffff in alternating bands; keep text black.
- Set headings, navigation and product names in uppercase ABC Marfa with +1.6px tracking at 24px or 16px.
- Use square charcoal #333333 buttons with 12px 36px padding; darken to black on hover.
- Pair primary with an outlined white button of identical size.
- Let still-life photography in natural light carry colour.

**Don't**
- Don't round corners on buttons, cards or images.
- Don't use the logo blue #00a9e0 for buttons or links.
- Don't treat Bootstrap #0d6efd or Tailwind ring blues in the CSS as brand colours.
- Don't use bold weights for headlines; hierarchy is size, case and tracking.
- Don't add card shadows.

## Responsive Behavior

From the mobile pass (content between x=19–25 and x=370–372):

- h1 and h2 drop from 24px / 32px to 20px / 32px, keeping +1.6px tracking and uppercase.
- Body paragraphs drop from 16px / 22px to 14px / 20px (`body-mobile`); 14px and 15px are the most-read sizes on mobile.
- The primary button is unchanged: 16px, 12px 36px padding, 48px high, #333333.
- The header band is 140px tall on mobile; the extractor recorded a visible "Open main navigation panel" toggle and one header link visible (three on desktop).
- Bands become single-column, except "Shop by Collection" with two columns; the footer grows to 1,468px.

Hover on touch devices was not measured.

## Iteration Guide

1. Start with a #f6f6f3 header, then alternate #ffffff and #f6f6f3 bands.
2. Headline every section in `display`; product and footer heads in `subheading`.
3. Body copy in `body` (16px Diatype); details at 14px in `ink-muted`.
4. Actions: `button-primary` for the main action, `button-outlined` for the secondary; both square.
5. Close with the charcoal footer.
6. Look up new values in `web/data/extracted/blue-bottle.json`; ignore framework variables (`--bs-*`, `--tw-*`).
