---
version: alpha
name: Cdiscount
category: "Retail & E-commerce"
description: "Cdiscount (cdiscount.com): French marketplace on white with a #3732ff blue header, #ff1e3c red accent, #293847 text, Hind Madurai 14px/21px body and 21px/600 section titles, 8px-radius product cards and pill chips, dense product carousels."
colors:
  canvas: "#ffffff"
  ink: "#293847"
  ink-strong: "#141e26"
  ink-muted: "#7a8999"
  primary: "#3732ff"
  on-primary: "#ffffff"
  primary-hover: "#211db6"
  primary-soft: "#dbe5ff"
  primary-pale: "#ebf2ff"
  brand-secondary: "#4c56ff"
  accent-red: "#ff1e3c"
  promo-bar: "#ff506e"
  price-text: "#c30d3d"
  text-orange: "#e23a05"
  text-green: "#2bb04a"
  highlight-yellow: "#ffce00"
  surface-gray: "#f2f3f5"
  hairline: "#e4e7eb"
  border-strong: "#b6c2cd"
typography:
  display:
    fontFamily: "\"Hind Madurai\", Hind-fallback, Arial, sans-serif"
    fontSize: 21px
    fontWeight: 600
    lineHeight: 31.5px
  subheading:
    fontFamily: "\"Hind Madurai\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  body:
    fontFamily: "\"Hind Madurai\", Hind-fallback, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  link:
    fontFamily: "\"Hind Madurai\", Hind-fallback, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 18.62px
  button-secondary:
    fontFamily: "\"Hind Madurai\", Hind-fallback, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  input:
    fontFamily: "\"Hind Madurai\", Hind-fallback, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  badge:
    fontFamily: "\"Hind Madurai\", Hind-fallback, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 12px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 30px
  xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 2.8px
  s4: 4px
  s5: 5px
  s6: 8px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 64px
components:
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 44px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    height: 107px
  nav-link:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
    height: 40px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.input}"
    padding: 0px 8px 0px 0px
    height: 24px
  card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
    height: 319px
  badge:
    textColor: "{colors.on-primary}"
    typography: "{typography.badge}"
  footer:
    textColor: "{colors.on-primary}"
---

## Overview

The queued entry "Cdiscount - Jumping Max" (https://jumpingmax.cdiscount.com/) redirected to the main Cdiscount home page (https://www.cdiscount.com/, title "Cdiscount : des prix bas qui ont de la voix !", language fr). The campaign address is a subdomain of cdiscount.com, so this file documents the measured main site and is named after it. The measured page is 1280px wide and 7981px tall with 1913 visible elements.

The capture shows a typical marketplace home in a saturated blue. A `#3732ff` header holds the white Cdiscount wordmark, a wide white rounded search field with a round red search button, and the links "Se connecter" and "Mon panier" with icons. A second row under it has an outlined "Menu" pill and light-blue pills (Promos, Voyages, Forfait Mobile, Paiement 10x, Reconditionné, Programme de fidélité). A pink-red strip announces promo codes ("-15€ dès 129€ d'achat avec le code 15DES129" and "-10€ dès 50€ d'achat pour toute 1ère commande avec le code HELLO10"). Below, a hero carousel of illustrated campaign banners (a yellow-and-cyan banner "À VOS MARQUES !" with a laptop, a "SÉLECTION CHROMEBOOK -30€" offer) is followed by a product carousel under "Meilleures ventes" with white cards, small colored badges ("Bon plan", "Promo", and a green one cut off at the carousel edge), star ratings and red prices.

Further down are "Les incontournables" (round category thumbnails on pale blue circles), "Week-end Discount Petit électroménager" (a grid mixing pink-and-yellow promo tiles with product cards), and "Nos meilleures offres" with filter pills (Alertes, Bons Plans, Jeux) next to a blue-and-red "ALERTE CDISCOUNT" tile. Product images sit on white; campaign tiles are loud, flat illustrations with condensed display lettering. The voice is promotional French: percentages, prices, "Prix le + bas sur 30j", "Paiement en 4x".

## Colors

The text colors by character count are `#293847` (4899), `#ffffff` (3875), `#141e26` (684), `#7a8999` (552), `#ff1e3c` (251), `#3732ff` (248), `#e23a05` (61), `#2bb04a` (30), `#000098` (22) and `#323232` (17). Backgrounds by area are `#ffffff` (9258), `#f2f3f5` (1364), `#3732ff` (728), `#211db6` (712), `#e4e7eb` (381), `#dbe5ff` (258), `#ff506e` (51), `#ff1e3c` (49), `#4c56ff` (23), `#000098` (9), `#ffce00` (9) and `#ffe8ee` (6).

- **Primary `#3732ff`** is the declared `--color-action`, the header fill, and the text and 2px border color of the outlined "Alertes" pill. The extractor chose the red `#ff1e3c` as primary because it was the most saturated color; blue is the action and header color, so blue is primary here and the red is kept as `accent-red`.
- **Primary hover `#211db6`** is declared as `--color-brand-hover` and measured as the hover color of the "Cdiscount" link (from `rgb(41, 56, 71)` to `rgb(33, 29, 182)`). **`#dbe5ff`** is the declared action-focus tint, **`#ebf2ff`** the declared action/brand surface, and **`#4c56ff`** `--color-brand-secondary`.
- **Accent red `#ff1e3c`**: the first letter of the logo (`--logoCDS-color-first-letter`) and the declared accent focus-ring color (`rgba(255, 30, 60, .3)`); the strip behind the promo codes measures `#ff506e`.
- **Ink `#293847`** is the main text and the logo base color (`--color-neutral`); `#141e26` is the stronger text color (section titles, search text), `#7a8999` muted text, and `#e4e7eb`, `#b6c2cd` the border grays. `#f2f3f5` is the neutral surface.
- **Price and badges:** `--color-business-price-text: #c30d3d` and `--color-business-promo-text-strong: #a30e3a` are declared; `#e23a05` and `#2bb04a` are measured text colors (which elements carry them was not recorded). `#ffce00` measures as a small yellow area.

## Typography

One family carries 10572 of 10639 measured characters: **Hind Madurai** (400 and 600 loaded, with a `Hind-fallback` face), declared as `--font-family-text` and `--font-family-title`. **Montserrat** carries 67 characters. The page also declares `--font-family-hero: "Mr Dodo", "Hind Madurai", ...` and an icon font `font-icon-cdiscount`; the CSS corpus lists faces named "Mr Dodo" and "MrDodo".

- **Display / section title:** 21px on 31.5px, weight 600 ("Meilleures ventes" `#141e26`, "Les incontournables" `#293847`). The declared `--typography-h1-font-size` is 24px and `--typography-h2-font-size` is 21px.
- **Body:** 14px on 21px, weight 400, `#293847`.
- **Subheading (h3):** 14px on 21px, weight 400, `#3732ff` ("Paiement en 4x").
- **Link:** 14px on 18.62px, weight 600.
- **Button:** 16px on 24px, weight 600.
- **Input:** 16px on 24px, weight 400.
- **Badge and small text:** 12px on 12px, weight 700 (the card-role badge text), with 12px/-0.1px letter-spacing on 552 characters.

Measured sizes by character count: 14px (7693), 16px (1325), 12px (1111), 21px (509), 10.5px (1). Weights: 400 (9251), 600 (796), 700 (592). The typographic scale is declared as variables: h1 24px/600, h2 21px, h3 18px/600, lead 16px (regular and strong), body 14px (regular 400, strong 600), small 12px, extra-small 10px/600, and price styles (an XL amount at 32px/600 and a 16px/600 suffix).

Font substitutes: the declared stack is `"Hind Madurai", Hind-fallback, Arial, sans-serif`.

## Layout

The page is a dense, grid-driven marketplace layout on a 1280px desktop width; the site declares `--breakpoint-desktop: 1280px` and a container width scale `--width-4xs: 20rem` to `--width-xl: 90rem`. Section titles span a 1216px row; carousels run edge to edge with arrow buttons overlapping the first and last cards. Product cards in the carousel and in the grid are 292px wide in the measured card role.

Measured gaps are 2.8px (176 occurrences), 8px (70), 4px (70), 16px (44) and 32px (2); measured paddings are 8px (285), 4px (115), 16px (82), 2px (4), 24px (4), 1px, 5px (2 each) and 64px (1). The header is 107px tall at 1280px and the footer 952px tall.

Structure in the capture: a blue header with search and account links, a chip row, a promo strip, a hero carousel, a product carousel, a round-category carousel, a four-column product grid with promo tiles alternating among product cards, a tab-pill row, and another grid.

## Elevation & Depth

The page is mostly flat with hairline borders. Measured shadows: `rgba(41, 56, 71, 0.15) 0px 1px 5px 0px`, `rgba(41, 56, 71, 0.15) -4px 0px 4px 0px` and `rgba(0, 0, 0, 0.2) 0px 1px 4px 0px` (1 occurrence each). The declared shadow tokens use a single neutral tint (`--shadow-color: rgba(41, 56, 71, .15)`) in offsets of 4px on each side (`--shadow-right`, `--shadow-in`, `--shadow-200: 0px 8px 8px 0px`).

Focus uses a soft ring rather than a shadow lift: `0 0 0 2px color-mix(in srgb, var(--color-action), transparent 70%)` (4 declarations), with variables for brand (`rgba(55, 50, 255, .3)`), accent (`rgba(255, 30, 60, .3)`) and neutral (`rgba(41, 56, 71, .3)`) focus colors. The card's image block measures a 1px `#e4e7eb` border (292px by 234px) rather than a shadow; depth is otherwise color blocking (blue header, pink strip, pastel promo tiles).

## Shapes

Radii are small and frequent: 8px (151 occurrences), 4px (99), 100px (21), 30px (9), 16px (6), 50% (5), 700px (3), `4px 0px 0px 4px` (3), 800px (3), `8px 8px 0px 0px` (2), 100% (1) and `0px 4px 4px 0px` (1). Cards and header links use 8px; badges and small controls 4px; pills (the Alertes pill reports 800px) and chips use full rounding. The declared radius variables are `--radius-small: 4px`, `--radius-medium: 8px`, `--radius-large: 16px`, `--radius-circle: 50%` and `--border-radius-rounded: 50em`.

Round category thumbnails sit on pale blue circles; badges are small rectangles at the card's top-left corner; promo tiles are squared illustrations with a zigzag graphic. Border widths are `--border-width: 1px`, `--border-width-md: 2px` and `--border-width-emphasized: 4px`.

## Components

**Outlined pill ("Alertes").** White fill, `#3732ff` text, Hind Madurai 600 16px on 24px, 2px solid `#3732ff` border, radius 800px, padding 8px 16px, 44px tall, 110px wide.

**Header links ("Se connecter", "Mon panier").** White text on the blue header, 40px tall, 8px radius; on hover the text underlines (text-decoration changes from none to underline) with the color unchanged. The "Cdiscount" link is `#293847` 14px/600 with an underline at rest that clears on hover, and turns `#211db6`.

**Search field.** White, 657px wide in the measured input, 16px on 24px text in `#141e26`, padding 0px 8px 0px 0px; the field in the capture is a pill with a round button at its right end.

**Product card.** White article, 8px radius, 292px wide and 319px tall in the card role, with a 1px `#e4e7eb` border measured on its image block; a badge at top-left (12px/700 white text on a colored label: "Promo", "Bon plan", "Meilleur prix"), a product image, a title in 14px, star ratings, a struck-through reference price and a price in red.

**Chips and tabs.** The header chip row and the tab pills use full rounding; the active tab in the capture ("Alertes") is the outlined blue pill.

**Footer.** Text `#ffffff` at 16px on 24px, 952px tall; the page text starts with reassurance lines ("Paiement sécurisé", "Entreprise Française", "14 jours pour changer d'avis").

The skip links at the start of the header ("Aller au contenu principal", "Aller à la recherche", "Aller au pied de page") are 1px visually hidden links and are not styled components.

## Design System Architecture

No public design system or brand guidelines were found in the pages I could open: a WebFetch of https://www.cdiscount.com/ returned only the word "Cdiscount", and a direct HTTP request returned a 13,675-byte page with the title "Cdiscount" and no links, so no footer or about links were visible. The site's CSS is, however, a fully tokenised system with 400 root variables.

Color is layered: semantic roles (`--color-action`, `--color-action-surface`, `--color-action-focus`, `--color-action-strong`, `--color-brand`, `--color-brand-hover`, `--color-brand-secondary`, `--color-neutral`, `--color-neutral-surface`, `--color-neutral-hover`, `--color-neutral-focus`) sit beside foundation tokens with state modifiers (`--color-foundation-base-text-strong`, `--color-foundation-action-text-on-default`, `-on-soft`, `-on-strong`, `--color-foundation-feedback-*`, `--color-foundation-attention-*`) and business tokens for commerce (`--color-business-price-*`, `--color-business-promo-*`, `--color-business-rating-*`, `--color-business-rse-soft`). Typography has 40 variables named `--typography-<role>-font-{family,size,weight}`; there are 8 radius, 26 shadow, 10 breakpoint (`--breakpoint-4xs: 320px` through `--breakpoint-2xl: 1920px`, with `--breakpoint-tablet: 768px` and `--breakpoint-md: 1024px`), 7 width and 8 dimension variables. The logo has its own variables (`--logoCDS-color`, `--logoCDS-color-first-letter`).

## Do's and Don'ts

**Do**
- Use `#3732ff` for the header and action color and `#ff1e3c` as the sparing red accent.
- Keep body text at 14px/21px Hind Madurai, section titles at 21px/600 and buttons at 16px/600.
- Use white cards with an 8px radius and a 1px `#e4e7eb` border, with a small colored badge at the top-left.
- Use full-pill chips and outlined pills for filters; use 2px borders on outlined buttons.
- Show a price in strong red under the product title, with a struck-through reference price when discounted.

**Don't**
- Don't use the red accent for large fills outside promo strips and tiles.
- Don't use heavy drop shadows; product cards rely on a hairline border.
- Don't style the hidden skip links as brand components.
- Don't enlarge body text; the measured body is 14px with 12px small text.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured at 390px: the section titles stay 21px on 31.5px, 366px wide; body text stays 14px on 21px in a 286px-wide column that is 273px tall (1136px wide and 63px tall at desktop); the header is 147px tall (107px at desktop) and its recorded text starts with the same skip links; no primary CTA was detected at that width.

Measured sizes by character count at 390px: 14px (8634), 16px (1322), 12px (1254), 21px (509), 10.5px (1). The site declares breakpoints at 320px, 375px, 480px, 768px, 1024px, 1280px and 1920px. The card grid column counts, the carousel behavior and the header layout at 390px beyond the recorded height were not measured.

## Iteration Guide

1. Start with canvas `#ffffff`, ink `#293847`, primary `#3732ff`, accent `#ff1e3c`; use `#f2f3f5` for neutral surfaces and `#e4e7eb` for hairlines.
2. Type: Hind Madurai at 14px/21px for body, 21px/31.5px 600 for section titles, 16px/24px 600 for buttons, 12px/12px 700 for badges.
3. Build the header as a `#3732ff` band (107px) with white text links, a white pill search field with a round red button and a chip row beneath.
4. Build product cards as white 8px-radius articles with a 1px `#e4e7eb` border, a top-left badge, a 14px title, star rating and a red price.
5. Use outlined pills with a 2px `#3732ff` border and 800px radius for tabs and filters; use full-bleed illustrated tiles for campaigns.
6. Use the declared variable pattern (`--color-*`, `--typography-*`, `--radius-*`, `--shadow-*`, `--breakpoint-*`) when adding new tokens.
