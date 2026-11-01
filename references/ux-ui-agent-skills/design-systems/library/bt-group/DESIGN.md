---
version: alpha
name: BT
category: "Telecom"
description: "BT (bt.com, the consumer site of BT Group) is a UK broadband, TV, sport and mobile retailer set in the proprietary BT Curve typeface, with one saturated indigo (#5514b4) for headlines, pill buttons and icon discs on white and #f0f0f0 surfaces, 48px-high pill CTAs, and very large 40px and 64px card radii."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  ink-soft: "#2a2a2a"
  ink-deep: "#111111"
  ink-utility: "#333333"
  ink-nav: "#36454f"
  primary: "#5514b4"
  on-primary: "#ffffff"
  primary-hover: "#540e85"
  primary-hover-form: "#4307a8"
  surface-grey: "#f0f0f0"
  surface-lavender: "#d8ceff"
  accent-pink: "#ff80ff"
  text-input-border: "#666666"
typography:
  display:
    fontFamily: "\"BT Curve\", \"Century Gothic\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56px
  display-mobile:
    fontFamily: "\"BT Curve\", \"Century Gothic\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  heading:
    fontFamily: "\"BT Curve\", \"Century Gothic\", Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  heading-mobile:
    fontFamily: "\"BT Curve\", \"Century Gothic\", Arial, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 36px
  body:
    fontFamily: "\"BT Curve\", \"Century Gothic\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"BT Curve\", \"Century Gothic\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: BTCurve, "BT Font Regular", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 30px
  input:
    fontFamily: Arial
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 5px
  lg: 24px
  xl: 32px
  3xl: 40px
  4xl: 57px
  hero: 64px
  pill: 9999px
spacing:
  base: 4px
  xxxs: 8px
  xxs: 12px
  xs: 16px
  s: 20px
  m: 24px
  l: 32px
  xl: 40px
  xxl: 48px
  xxxl: 64px
  xxxxl: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 48px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-form:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.3xl}"
    padding: 11px 19px
    height: 48px
  button-form-hover:
    backgroundColor: "{colors.primary-hover-form}"
  button-outline:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 48px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-soft}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-utility}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 0px 10px
    height: 40px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.primary}"
    rounded: "{rounded.3xl}"
    padding: 20px
  card-form:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
    padding: 24px
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink-soft}"
---

## Overview

This file documents bt.com, the consumer-facing site of BT Group (the queued brand name was "BT Group"; the measured site is the BT retail home page at https://www.bt.com/, page title "Broadband, TV Packages, TNT Sports & Mobile Deals | BT"). It sells full-fibre broadband, TV bundles, sport, mobile and business plans to UK households. The footer links to "BT Group" and "For UK and global businesses", so the group site sits one level above this one.

The look is built from three decisions. First, a single saturated indigo, #5514b4, carries almost all of the brand: it colours the uppercase headlines, the pill buttons, the circular arrow buttons on product cards and the logo outline. Second, the surfaces are white (#ffffff) and a light grey (#f0f0f0), so the indigo is the only strong colour on most screens. Third, shapes are very round: pill buttons, 40px card corners and a 64px corner on the largest promo card. The effect is friendly and consumer-facing rather than corporate.

The home page in the capture opens with a thin grey utility bar ("For the home", "UK business", "International business"), a white header with a circular BT logo and a row of category links (Broadband, TV, Sport, Mobile, Home Phone, Why BT, Business) with Help, My BT and Email on the right, then a "Log in to My BT" pill on a white strip and a lavender (#d8ceff) band reading "BT and TalkTalk — FAQs and support". The hero sits on grey: a large indigo uppercase headline ("UK'S BEST BROADBAND WITH ADVANCED THREAT PROTECTION"), three short lines of price copy in black, a white postcode card with a 40px radius and an indigo "See your deals" button, and a lifestyle photograph inside a rounded white frame with a "VULNERABLE / PROTECTED" toggle. Below that come grey rounded promo cards with streaming-service logos, a dark full-width photo banner with white pill buttons, a centred indigo headline ("IT'S YOUR HOME. CONNECTED.") and a row of product cards that each end in a small indigo disc with a white arrow.

Copy is direct and price-led: monthly prices, contract lengths and dates ("£34.99 in March 2027", "24 month contract") appear in plain sentences under each headline, with small disclaimer text beneath photographs. Photography shows people at home using devices; product shots (router, TV remote, SIM) sit at the bottom of cards.

## Colors

The palette is measured from the rendered page and from the custom properties the site declares on `:root`.

- **Indigo `#5514b4` (primary).** Fill of the primary pill buttons, text colour of the hero and section headlines, border of outlined buttons, and the third-most-read text colour on the page. It matches the site's own `--lc-bt-color-theme`, `--lc-bt-color-core-indigo` and `--lc-bt-color-raw-indigo-08` variables.
- **Indigo hover states.** Pill buttons ("Log in to My BT", "See TV deals", "Learn about TV") go to `#540e85` on hover; the postcode form button ("See your deals") goes to `#4307a8`. Navigation links turn `#5514b4` and gain an underline on hover.
- **White `#ffffff` (canvas).** The largest background by area and the page body.
- **Grey `#f0f0f0` (surface-grey).** Hero band, promo cards, product cards and the footer; it is the site's `--lc-bt-color-surface-grey-02`.
- **Lavender `#d8ceff` (surface-lavender).** The support band under the header; measured in the background-colour-by-area ranking.
- **Black `#000000` (ink).** The most-read text colour (2,069 characters), used for body copy under headlines.
- **`#2a2a2a` (ink-soft).** Links and footer text. **`#111111` (ink-deep)** is the fourth most-read text colour. **`#333333` (ink-utility)** colours the utility bar links and the page body default. **`#36454f` (ink-nav)** colours the main header links.
- **Pink `#ff80ff` (accent-pink).** Declared as `--lc-bt-color-core-pink`; it appears 15 times in the shipped CSS. The capture does not show it as a UI colour, so use it only where a source page does.
- **Input border `#666666`.** The postcode field border.

The site also declares functional colours in its variables (`--lc-bt-color-functional-red` #da020f, `--lc-bt-color-functional-green` #1b8811, `--lc-bt-color-functional-amber` #ffc501) and an extended coral (#ff5a4b) and turquoise (#1ec8e6); none of them is visible as UI on the measured home page, so they are not tokens here. The browser's default link blue is not used by the brand.

## Typography

One family does everything: **BT Curve**, with the fallback stack `"BT Curve", "Century Gothic", Arial, sans-serif`. The page loaded BT Curve at 400, 500 and 700 and Non-Dottee at 400. The header and footer use an older stack, `BTCurve, "BT Font Regular", sans-serif`, at 14px with a 30px line height. The shipped CSS also declares BT Curve Condensed (400, 700) and the Dottee, Dottee-Condensed, Dottee-Extended, Non-Dottee and Non-Dottee-Narrow families at weights 300, 400 and 700, but only BT Curve and Non-Dottee 400 were loaded on this page. Font files are self-hosted woff2 under `/home/_next/static/media/`. BT Curve is a proprietary typeface; the site's own fallbacks, Century Gothic then Arial, are the substitutes to use.

Scale (desktop at 1280px): the h1 is 48px/56px weight 400; the h2 is 40px/48px weight 400; body copy is 16px/24px; buttons are 16px at weight 500 (the postcode button is weight 400). Mobile (390px) measured h1 32px/40px, h2 28px/36px, body 16px/24px. Headlines are indigo and render in capitals (the measured h1 and h2 text is uppercase); the measured h1 and h2 are both weight 400, so hierarchy there comes from size and colour rather than boldness. Size usage by characters on the desktop page: 16px 3,123, 20px 1,335, 14px 380, 48px 218, 18px 166, 24px 152, 40px 149, 12px 118. The 20px size carries 109 characters with a -0.5px letter spacing. The input field is the one place a system font appears: Arial 16px/24px.

## Layout

The grid is declared in the site's variables: 12 columns (`--lc-grid-columns-count: 12`), a 16px gutter (`--lc-grid-gutter-px`) that becomes 24px at the xl breakpoint, a section max width of 1248px (`--lc-section-max-width-px`), and container side padding of 8px, 16px and 24px (`--lc-container-horizontal-padding-s`, `-m`, `-l`). The measured page is 1280px wide and 7,801px tall; the body copy block measures 1,200px wide and the h1 648px.

Spacing follows a 4px base: 4, 8, 12, 16, 20, 24, 32, 40, 48, 64 and 96px (`--lc-space-xxxxs` through `--lc-space-xxxxl`). Measured padding values cluster on 12px, 20px, 10px, 16px and 24px; measured gaps on 8px (18 elements), 12px, 18px, 24px and 20px. Sections alternate full-width grey bands with white gaps, and cards sit in rounded rectangles on a two-column split (a logo-tile card at left, a text card at right). The product row ends in horizontally-clipped cards at the right edge of the capture, so the row continues past the viewport.

## Elevation & Depth

Depth is mostly colour, not shadow. Cards and bands are flat grey (#f0f0f0) or white fills with big radii. Only two shadows were measured on screen: `rgba(0, 0, 0, 0.08) 0px 4px 8px 0px` and `rgb(128, 128, 128) 0px 0px 5px 0px`, one element each. The shipped CSS declares `0 2px 4px 0 rgba(0,0,0,.2)` six times, `0 0 0 4px #996cd5` five times, `0 0 4px 1px rgba(0,0,0,.08)` three times, `0px 2px 10px -3px #999` and `0px 0px 12px 2px #c7c5c7` three times each; where those appear on screen was not measured. The one strong contrast device in the capture is the dark full-bleed photo banner with a gradient, over which the buttons invert to white.

## Shapes

Radius is the signature. Measured on the page: 40px (19 elements), 999px pills (10), 50% circles (8), 32.63px and 32px (6 each), 64px (5), 100px (5), 57px (2), 5px, 24px, 5.008px and 2px (1 each). Primary buttons are full pills (`999px`); the postcode form button and the form card are `40px`; the grey promo card at the right of the TV row is `64px` and its neighbouring product cards are `40px`; text inputs are only `5px`; the circular arrow buttons are 50%. The scale in the tokens is 2, 5, 24, 32, 40, 57, 64 and pill.

## Components

- **Primary button (`button-primary`).** Indigo `#5514b4` fill, white text, BT Curve 16px weight 500, pill radius, 10px 24px padding, 48px tall, with an indigo border. Hover fills `#540e85`. Measured on "Log in to My BT" (165px wide); the same pill is used for "See TV deals", "Find out more about BT Mobile" and "Get BT Broadband bundles".
- **Form button (`button-form`).** The postcode "See your deals" button: indigo fill, white text at weight 400, 40px radius, 11px 19px padding, 48px tall; hover `#4307a8`.
- **Outline button (`button-outline`).** "Learn about TV": indigo text, a 2px solid indigo border, pill radius, 10px 24px padding, 48px tall. Hover fills `#540e85` and the text turns white.
- **Text input (`text-input`).** White, 5px radius, `0px 10px` padding, 40px tall, `#666666` border, Arial 16px; its label ("Enter your postcode") sits above it in black.
- **Cards.** Promo and product cards are `#f0f0f0` with 20px to 32px padding and 40px or 64px radius, with a small indigo label line, an indigo title and black body copy; the form card is white with 24px padding and 40px radius.
- **Header and nav.** White header, 120px tall on desktop; links in `#36454f` at 14px that turn indigo and underline on hover. The utility bar links are `#333333`.
- **Footer.** `#f0f0f0` background, `#2a2a2a` text at 14px/19px.

## Design System Architecture

BT does not publish a design system on the pages opened (https://www.bt.com/ links to no brand-guideline or design-system page; no official public system was found), but the shipped front end exposes one. The `:root` of the page declares about 390 custom properties in two families: `--lc-*` for layout (`--lc-space-*`, `--lc-grid-*`, `--lc-breakpoint-*`, `--lc-media-min-width-*`, `--lc-container-horizontal-padding-*`, `--lc-section-max-width`) and `--lc-bt-*` for BT's theme (`--lc-bt-color-core-*`, `--lc-bt-color-surface-*`, `--lc-bt-color-raw-{indigo,grey,coral,red,amber,green,pink,turquoise}-01…10`, `--lc-bt-font-size-01…11`, `--lc-bt-heading-font-size-*`, `--lc-bt-typeface-default: BT Curve`, `--lc-bt-button-padding-*`). Colours therefore come as ten-step raw ramps (indigo-08 is the brand `#5514b4`, indigo-09 `#4307a8`, indigo-10 `#32008a`) with semantic aliases (`theme`, `core-indigo`, `surface-indigo`) on top.

The stylesheets at https://www.bt.com/home/_next/static/css/510c41dea6cb6ad3.css (253 KB) and its three siblings scope their selectors under `.lc-v2-34-0` (1,946 occurrences) and name components with an `lc-` prefix and an `EE` suffix on several: `lc-ButtonEE` with modifiers `--styleSecondary`, `--styleTertiary`, `--styleDanger`, `--styleDangerText` and `--onDarkBackground`; `lc-IconButtonEE`, `lc-TabsEE`, `lc-CheckboxEE`, `lc-RadioButtonEE`, `lc-BreadcrumbEE`, `lc-LinkEE`, `lc-AvatarEE`, `lc-Chip`, `lc-Switch`, `lc-CardImage`, and a grid built from `lc-Grid` and `lc-Col--S/M/L/XL`. The page is a Next.js app served under `/home/_next/`. Type sizes are numbered (`--lc-bt-font-size-01` 12px to `-11` 120px) and headings have per-breakpoint sizes (`--lc-bt-heading-font-size-xl-breakpoint-l-px: 40px`, `-breakpoint-m-px: 32px`).

## Do's and Don'ts

Do:
- Use `#5514b4` for the one primary action in a view, as a 48px pill with white 16px weight-500 text.
- Set headlines in BT Curve at weight 400, in indigo, in capitals, at 48px (40px for section heads) on desktop.
- Put price and contract copy in 16px/24px black text directly under the headline.
- Use 40px radius for cards and form panels, 64px for the largest promo card, 5px for inputs.
- Keep large surfaces to white and `#f0f0f0`; use `#d8ceff` for the support band.
- Invert buttons to white pills on dark photo banners (the capture shows white fills with dark text there).

Don't:
- Don't introduce a second saturated colour for actions; coral, turquoise, amber and pink are declared in variables but are not on the measured page's controls.
- Don't set the h1 or h2 in bold; the measured values are weight 400.
- Don't square off buttons or cards; the smallest radius on a control is the 5px input.
- Don't use browser-default blue links; link text is `#2a2a2a` or `#36454f` and turns indigo with an underline on hover.
- Don't treat the reCAPTCHA badge at the right edge of the capture or the cookie and chat controls as brand UI.

## Responsive Behavior

Measured at a 390px viewport: the h1 is 32px/40px, the h2 28px/36px, body copy 16px/24px, and the header is 60px tall and contains a "Menu" label. The primary button measured 290px wide with 11px 19px padding and a 40px radius. The page's custom properties declare breakpoints at 320px (xs), 568px (s), 768px (m), 1024px (l) and 1440px (xl), a 16px grid gutter (24px at xl) and container side padding of 8px, 16px and 24px; heading sizes are declared per breakpoint (for example `--lc-bt-heading-font-size-xl-breakpoint-m-px: 32px`). Navigation layout, card reflow and image behaviour below the desktop width were not measured.

## Iteration Guide

1. Start from the tokens: canvas `#ffffff`, surface `#f0f0f0`, ink `#000000`, primary `#5514b4`.
2. Build the header first: 120px white, BT Curve 14px links in `#36454f`, with a utility bar above it.
3. Add the hero: indigo capitalised h1 at 48px/56px, 16px/24px black copy, a white 40px-radius form card with a 40px-tall input and the form button.
4. Add promo cards with `#f0f0f0` fills and 40px to 64px radii; end product cards with a circular indigo arrow disc.
5. Check every button against `button-primary`: 48px tall, pill radius, weight 500, hover `#540e85`.
6. Run `node web/scripts/verify-designs.mjs --slug=bt-group` and compare the result against `web/data/captures/bt-group.jpg`.
