---
version: alpha
name: Century 21
category: "Real Estate & PropTech"
description: "CENTURY 21 Real Estate US homepage: near-white #fdfcfc canvas, charcoal #262627 buttons with square corners, #121212 header, a full-bleed kitchen photo hero with a 56px Bold headline, and listing cards with 4px/6px radii and soft two-layer shadows."
colors:
  canvas: "#fdfcfc"
  page-largest: "#ffffff"
  ink: "#534646"
  ink-strong: "#161313"
  ink-black: "#000000"
  ink-on-scrim: "#ece9e9"
  primary: "#262627"
  primary-hover: "#474748"
  on-primary: "#ffffff"
  link: "#4f4f4f"
  nav-bg: "#121212"
  scrim: "#0000006e"
  card-bg: "#0000009e"
  surface-gray: "#9e9e9e"
  text-input-bg: "#ffffff80"
  text-input-border: "#ab9c9c"
  utility-blue: "#276ef1"
typography:
  display:
    fontFamily: Bold
    fontSize: 56px
    fontWeight: 400
  display-mobile:
    fontFamily: Bold
    fontSize: 40px
    fontWeight: 400
  heading:
    fontFamily: Medium
    fontSize: 22px
    fontWeight: 400
    lineHeight: 31.4292px
  subheading:
    fontFamily: Regular
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21.429px
  body:
    fontFamily: Regular
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: Regular
    fontSize: 16px
    fontWeight: 400
  button-secondary:
    fontFamily: Regular
    fontSize: 18px
    fontWeight: 400
  link:
    fontFamily: Medium
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.1432px
rounded:
  none: 0px
  xs: 4px
  sm: 6px
  md: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 20px
    height: 42px
    borderColor: "{colors.primary}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 10px 20px 0px, rgba(0, 0, 0, 0.15) 0px 6px 6px 0px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    height: 45px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.15) 2px 3px 4px 0px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.15) 2px 3px 4px 0px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 8px 0px 0px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 48px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-on-scrim}"
    rounded: "{rounded.xs}"
    padding: 32px 16px 24px
---

## Overview

This is the United States homepage of CENTURY 21 Real Estate (`https://www.century21.com/`, page title "CENTURY 21 | Your Next Home's Here- Let Our Agents Help"). It behaves like a search-first property portal with a brand story underneath: a 64px black header with the wordmark and five dropdown menus, a hero photograph with a search box, a carousel of recent listings, and then editorial blocks about buying, selling and the global brand. The mood is clean, bright and domestic. Photography does almost all of the emotional work (a white kitchen, a woman dancing with a dog in a living room, a family walking through an empty room), while the interface stays achromatic: charcoal, near-white and a few warm greys.

The page has no loud brand accent in the measured data. Every filled button is the same charcoal `#262627` with white text, the header is `#121212`, and body copy is a warm dark grey `#534646`. The only saturated color in the measurement is a single blue (`#276ef1`) that appears as a background on one element, and the capture shows small blue dots beside the "Coming Soon" labels on listing cards.

The copy voice is warm and reassuring ("Dedicated to the joy of home", "Nothing beats working with a buyer's agent who can help you navigate the nuances of buying a home in your local market"). Claims are footnoted with superscript numbers and a long legal paragraph measured at 12px beginning "1. Study Source: 2024 Kantar Study." The registered mark (®) is set as a superscript after "CENTURY 21" in body copy and in the "The CENTURY 21® BRAND" heading.

Measurement note: the page scrolls inside an inner container (the extractor recorded an inner scroll height of 4,139px against a 2,400px capture), so the reference capture shows the hero, the listing carousel, the editorial blocks and the top of the brand section only. Cookie-consent and tracking overlays were hidden before measurement and are not brand UI.

## Colors

- **Canvas `#fdfcfc`** is the body background, a barely warm white. `page-largest` `#ffffff` is the largest background area by size and is the card, search strip and tab-strip white.
- **Ink `#534646`** is the most-read text color (1,544 weighted characters): paragraphs and descriptive copy. **Ink strong `#161313`** (921 characters) is the color for card titles, addresses, nav-link text and input text; the section heading "Recent CENTURY 21 homes" is `#121212`. **`#000000`** (358 characters) appears on the brand heading.
- **Primary `#262627`** fills the buttons and has a matching 1px border (11 border uses). The hover state measured on "About us" is `#474748` with a larger shadow. White (`on-primary`) is the label color.
- **Header `#121212`** is the nav bar; a translucent `#121212f2` also appears in the area ranking.
- **Scrim `#0000006e`** and **card-bg `#0000009e`** are black overlays on photography: the first is the translucent panel behind the hero headline and search, the second is the label panel on photo tiles such as "Global" and "Luxury", where text is `#ece9e9`.
- **Surface gray `#9e9e9e`** is a measured background area of 635 units. The capture does not identify which element it belongs to, so it is kept only as a measured value.
- **Input** background is half-transparent white `#ffffff80` with a `#ab9c9c` border.
- **Link `#4f4f4f`** is the color of listing-card link text.
- **Utility blue `#276ef1`** is measured once as a background. It equals the site's `--utility-blue: hsl(219, 88%, 55%)`.

The site's `:root` defines a larger system than the page uses: a ten-step neutral scale (`--neutral-900: hsl(0, 0%, 13%)` down to `--neutral-50: hsl(0, 0%, 98%)`), utility colors (`--utility-green: hsl(146, 57%, 34%)`, `--utility-amber: hsl(43, 92%, 57%)`, `--utility-red: hsl(351, 67%, 54%)`) and a 20-color chart palette starting at `#4FC3F7`. Those are declared tokens, not colors measured on the home page.

## Typography

Text is set in faces whose CSS family names are literally `Light`, `Regular`, `Medium` and `Bold`, exposed as variables `--lt: Light`, `--reg: Regular`, `--med: Medium`, `--bold: Bold`; the extractor also loaded one named `Adelle Sans`. Because each weight is its own family, every measured `font-weight` is 400 (4,832 of 4,832 weighted characters). Which typeface sits behind the generic family names was not identified from the pages opened.

- **Display**: `Bold` 56px, weight 400, white, for "Find a home you'll love" (602px wide). The mobile pass measured the same headline at 40px.
- **Heading**: `Medium` 22px / 31.4292px for "Recent CENTURY 21 homes" (`#121212`).
- **Subheading**: `Regular` 15px / 21.429px for listing addresses (`#161313`).
- **Body**: `Regular` 12px / 18px for the legal and descriptive copy; 16px is the most common size overall (1,407 characters), then 12px (1,340), 15px (520), 14px (502) and 11px (395).
- **Buttons**: `Regular` 16px for the segmented search tabs and 18px for "Buy a home".
- **Link**: `Medium` 12px / 17.1432px for the listing card links.

No letter-spacing or text-transform was recorded; the wordmark "CENTURY 21" in the header is an image-like lockup set wide in capitals, and nav labels are title case ("Homes", "Agents", "Offices", "Resources", "Join C21") each followed by a dropdown caret.

Font substitute if the licensed faces are unavailable: a clean geometric sans in four cuts (light, regular, medium, bold) set at the same sizes. This is a build suggestion, not a measurement.

## Layout

The desktop viewport is 1280px. The measured text blocks are 1,075px wide (the h2 and the footnote paragraph), the listing card measured 300 by 364px and its address heading 276px wide. The capture alternates: a full-bleed hero photograph, a white listing carousel with circular prev/next arrows, a two-column feature (text left, large photo right), a two-column "Buying your next home" / "Selling your current home" pair, and a left-aligned brand heading over a two-tile row.

Measured spacing: gaps of 8px (44 uses), 12px (36), 16px (17), 4px and 2px (16 each), 32px, 24px, 48px and 40px; paddings of 12px (29), 4px and 8px (19 each), 16px (18) and 24px (14). The segmented tab buttons use `12px 20px` padding at 42px tall; the search input is 537px wide by 48px tall with 16px side padding and a square dark search button attached on the right (the input radius is `4px 0px 0px 4px`, the button side `0px 6px 6px 0px`).

## Elevation & Depth

Elevation is a real tiered system and it is visible: listing cards, the header and link blocks use the "near" shadow, `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.15) 2px 3px 4px 0px` (22 measured uses). Hover on the "About us" button raises it to the "far" shadow, `rgba(0, 0, 0, 0.1) 0px 10px 20px 0px, rgba(0, 0, 0, 0.15) 0px 6px 6px 0px`, while the fill lightens from `#262627` to `#474748`. Most other elements carry an explicit zero shadow (`rgba(0, 0, 0, 0) 0px 0px 0px 0px`, 43 uses). The `:root` also declares `--box-shadow-intense`, `--box-shadow-slight` and inset variants (`--box-shadow-near-inset`, `--box-shadow-far-inset`) that the home page did not measure.

Depth on the hero comes from layering rather than shadow: a translucent black panel (`#0000006e`) sits over the photograph and holds a white tab strip and a white search bar.

## Shapes

Radii are small and mixed. The system radius is `--border-radius: 6px` (28 measured uses, the most common), the form input radius is `--input-border-radius: 4px`, an 8px radius appears once, and `50%` appears twice (circular carousel arrows and the favorite-heart buttons in the capture). The segmented "Homes / Agents / Offices / Global" tab buttons measure 0px radius, so the search strip reads as a squared control sitting inside a rounded panel. Photos in the cards have square corners at the top.

## Components

- **Header**: `#121212`, 64px tall, 1280px wide; white wordmark at left, five menu buttons with carets, "Login" at far right; carries the "near" shadow.
- **Search tabs**: four 143×42px buttons ("Homes" active in `#262627` with white 16px text; "Agents", "Offices" and "Global" transparent on the white strip with dark text).
- **Search input**: 537×48px, `#ffffff80` fill, `1px solid #ab9c9c`, placeholder "City, address, neighborhood or zip", with a dark square magnifier button.
- **Listing card**: white card with the near shadow, a photo with a heart button and a "Coming Soon" tag, a "CENTURY 21" corner badge, a price in larger regular type, beds/baths/sq. ft. in small type, an address truncated with an ellipsis, then MLS number and "Listed by:" in 11px-class small print.
- **Primary buttons**: "About us" (hover measured at 45px tall), "Buy a home" (130×45px, 6px radius, 18px) and "Sell a home", all `#262627` with white labels.
- **Brand tiles**: photographs with a `#0000009e` label panel ("Global", "Luxury") and `#ece9e9` text.

## Design System Architecture

No public design-system site or brand-guideline page was found on the pages opened; the de-facto system is visible in the shipped CSS custom properties on `:root` at `https://www.century21.com/`. It is a semantic, HSL-driven token layer: a single `--brand-hue` with `--low-saturation: 8%` derives the app background (`hsl(var(--brand-hue), var(--low-saturation), 98%)`), footer, sub-menu, content, text and action tokens (`--text` at 8% lightness, `--text-lighter` 18%, `--text-muted` 30%, `--text-mid` 50%, `--text-faint` 70%, `--reverse-text` 92%). The value of `--brand-hue` itself was not among the recorded variables. Supporting tokens include `--border-color: rgba(0, 0, 0, .2)`, `--border-radius: 6px`, `--outline-offset: 3px`, `--input-border-radius: 4px`, a five-level shadow scale (`none`, `slight`, `near`, `far`, `intense`), overlay colors `rgba(0, 0, 0, .5)` and `rgba(0, 0, 0, .75)`, and Font Awesome 6 icon-font variables (Pro, Free, Brands, Sharp, Duotone). Source: https://www.century21.com/.

## Do's and Don'ts

Do:
- Keep every filled control charcoal `#262627` with a white label; let photography supply warmth.
- Use real, bright domestic photography with people and light, full bleed at the hero.
- Use the near shadow for cards and the far shadow for hover only.
- Set the listing facts (price, beds, baths, sq. ft., address, MLS) in small regular type and let the price lead.

Don't:
- Don't add a saturated brand accent to buttons; the measured buttons have none.
- Don't round the segmented search tabs; they measure 0px.
- Don't document the cookie banner or tracking overlays as brand UI.
- Don't use `#276ef1` for buttons; it is measured as a single background element.

## Responsive Behavior

Measured at a 390px viewport (mobile pass): the h1 "Find a home you'll love" is 40px (366px wide, `Bold`), the heading "Recent CENTURY 21 homes" stays 22px (358px wide), and the footnote paragraph stays 12px / 18px but measures 198px tall at 358px wide against 72px tall at 1,075px wide on desktop. The segmented tab button "Homes" shrinks from 16px, 143×42px, `12px 20px` padding to 14px, 84×33px, `8px 12px` padding. The mobile font-size table is led by 16px (1,348 characters), 12px (1,340), 14px (526), 15px (520). Header layout, the number of card columns and navigation behavior at mobile width were not recorded for this page, so they are not measured. Tablet widths and dark mode were not measured.

## Iteration Guide

1. Start with `canvas #fdfcfc`, `ink #534646`, headings `#161313`, and a charcoal `#262627` for every filled button; hover `#474748` plus the far shadow.
2. Build the hero as a full-bleed photograph with a translucent `#0000006e` panel, a 56px Bold white headline and a white tab strip plus search bar.
3. Use 6px radius for buttons and cards, 4px for the input, 0 for the tab strip, `50%` for circular arrows.
4. Keep card shadows to the two-layer near shadow; reserve the far shadow for hover.
5. Use the 8 / 12 / 16 / 24 / 32px rhythm measured in gaps and paddings.
6. Re-measure the footer and the lower sections before documenting them; the capture ends inside the brand section.
