---
version: alpha
name: Kontur
category: "Design Systems"
description: "Kontur (СКБ Контур) is a Russian business-software ecosystem whose site pairs a near-black #151515 hero and white #ffffff canvas with the Lab Grotesque typeface (700 display at 56px, 400 body at 16px), a #015ccb link blue, per-product accent colours such as mint #00bea2 and blue #2291ff, 2px input radii, 16px card radii and pill buttons."
colors:
  canvas: "#ffffff"
  page-largest: "#151515"
  ink: "#222222"
  primary: "#015ccb"
  product-blue: "#2291ff"
  ink-muted: "#858585"
  ink-alpha: "#0000007a"
  ink-gray: "#828282"
  text-input-text: "#000000"
  product-mint: "#00bea2"
  product-red: "#fe4c4c"
  product-orange: "#fc7630"
  product-green: "#25ad50"
  product-navy: "#366af3"
  product-purple: "#844bec"
  product-magenta: "#b750d1"
typography:
  display:
    fontFamily: "\"Lab Grotesque\", -apple-system, \"system-ui\", Arial, \"Liberation Sans\", \"Nimbus Sans L\", sans-serif"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: "\"Lab Grotesque\", -apple-system, \"system-ui\", Arial, \"Liberation Sans\", \"Nimbus Sans L\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: "\"Lab Grotesque\", -apple-system, \"system-ui\", Arial, \"Liberation Sans\", \"Nimbus Sans L\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 31.92px
  subheading:
    fontFamily: "\"Lab Grotesque\", -apple-system, \"system-ui\", Arial, \"Liberation Sans\", \"Nimbus Sans L\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 25.92px
  body:
    fontFamily: "\"Lab Grotesque\", -apple-system, \"system-ui\", Arial, \"Liberation Sans\", \"Nimbus Sans L\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "\"Lab Grotesque\", \"Segoe UI\", Roboto, Arial, \"Liberation Sans\", \"Nimbus Sans L\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.92px
rounded:
  xs: 2px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 32px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 0.1px
  s2: 4px
  s3: 8px
  s4: 9px
  s5: 10px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 29.25px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.2xl}"
    padding: 0px 18px
    height: 40px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    padding: 8px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 8px 9px
    height: 44px
    boxShadow: rgba(0, 0, 0, 0.08) 0px 0px 0px 2px
  card:
    backgroundColor: "{colors.product-mint}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    padding: 24px
---

## Overview

Kontur (the page title reads "Контур — экосистема для бизнеса") presents itself as an ecosystem of business services rather than a single product. The captured homepage opens with a large near-black rounded panel (`#151515`) holding the headline "Экосистема для бизнеса" in 56px bold white Lab Grotesque, and below it a grid of product-category tiles (electronic document flow, accounting and reporting, retail, counterparty checking, procurement, business start) divided by thin dark rules. One tile is lit in product green with small outlined chips, and a white tile "Все решения" with a diagonal-arrow icon acts as the "see everything" call to action. A row of product icons with names (Фокус, Эл. Подпись, Ещё) closes the panel.

Under the dark hero the page turns white. Sections ("Актуально прямо сейчас", "Акции и предложения", "Кейсы внедрений IT-решений") are introduced by large bold headlines, followed by flat tiles with line icons, rounded colour cards (mint, orange, green) that mix photography of smiling business users with a solid colour caption block, and a pale grey strip of customer logos. A cookie notice appears bottom-left in the capture with a small pill-outline "Понятно" button; it is consent chrome, not brand UI, and is not documented as a component here.

The company's 2021 press release about its identity says the new look was built around a modified Lab Grotesque (a serif added to the К, squarer shapes), a logo made from that typeface, bright accent colours, more white space in illustration, and a branded colour for each product in the ecosystem. The page reflects that: the product colour does the identifying, the layout stays monochrome.

## Colors

Measured from the live page:

- **Canvas** `#ffffff` for content sections; **page-largest** `#151515` is the largest solid surface (the hero panel).
- **Ink** `#222222` is the main text colour on white. `#858585` (`ink-muted`) and `#828282` (`ink-gray`) are secondary text and the page's own `--color-secondary-text` variable; `#0000007a` is a semi-transparent black used for tertiary text.
- **Primary** `#015ccb` is the site's link colour (the stylesheet names it `--color-primary-link`, and it is used for the "Подробнее" link in the cookie notice).
- **Product colours**: mint `#00bea2` (the Diadoc logistics card in the capture) and blue `#2291ff` are measured on the page. The Kontur design guides publish the full set of eight product colours with their meaning: red `#fe4c4c` (infrastructure and education), orange `#fc7630` (reporting and accounting), green `#25ad50` (security and risk), mint `#00bea2` (document workflow), blue `#2291ff` (trade and retail), navy `#366af3` (banking and procurement), purple `#844bec` (information security), magenta `#b750d1` (real estate). The guides say buttons and links use either a product colour or neutral greys, and that red and yellow should not be the main accent because they signal error and warning.
- **Text input text** `#000000` is the colour inside form fields.

## Typography

Lab Grotesque is the only family, loaded at 400, 500, 600 and 700 (the guides page also links Regular, Medium and Bold woff2 files from s.kontur.ru). The 2021 identity release describes the brand's own logotype as a modified Lab Grotesque. If it is unavailable, use the stack the site itself falls back to: -apple-system, system-ui, Arial, Liberation Sans, Nimbus Sans L.

- **Display** 56px / 56px, weight 700, line-height 1.0 for hero headlines; **display-mobile** 32px / 40px at 390px width.
- **Heading** 24px / 31.92px, weight 700 for tile titles and card captions.
- **Subheading** 18px / 25.92px, weight 500 for navigation and buttons.
- **Body** 16px / 24px, weight 400.
- **Input** 18px / 25.92px, weight 400.

The guides state the typographic rule directly: contrasting type, no thin weights, and no weights or sizes close to each other; bold for headlines and regular for text.

## Layout

The page uses a wide centred column with large side gutters (the stylesheet defines `--section-side-gutters` and a 70px `--site-header-height`), and sections are separated by generous vertical spacers (`--section-block-custom-spacer-y`). Content blocks align to a 2-column or 3-column grid: the category tiles are two columns, the promo cards are three equal columns, and the customer-logo strip spans the full content width. Spacing values measured are 4, 8, 10, 16, 18, 20 and 24px. The card spacer variable on the page is 40px, applied inside larger tiles.

## Elevation & Depth

The interface is flat. Kontur's guides say shadows belong only to elements that are a separate layer (modals, side pages, tooltips), never to flat surfaces, and borders are at most one pixel. On the homepage depth comes from colour blocking (black panel, mint card) and from the pale grey rounded strip behind customer logos, not from shadows. The one shadow measured is the focus ring on text inputs: `rgba(0, 0, 0, 0.08)` at 2px spread.

## Shapes

The shape vocabulary follows the guides: 2px for text inputs (to distinguish them from buttons), 8px for small controls and blocks, and 16px for large blocks and popups. On the homepage the large cards use 16px, the dark hero panel and the logo strip show visibly larger corner rounding than the cards (the measured radius scale also contains 24px and 32px steps), and the header and cookie buttons are full pills (100px). Line icons are drawn in a thin black outline style.

## Components

- **Pill outline button** (header "Войти в сервис"): transparent fill, white 1px outline, 18px medium white text, 40px tall, 100px radius, 18px horizontal padding.
- **Navigation**: white 18px medium text on the dark header, with a grid icon in front of "Продукты и решения".
- **Text input**: white, 2px radius, 18px text, 44px tall, 8px 9px padding.
- **Card**: solid product colour (`#00bea2` for the Diadoc card), white text, 16px radius, 24px padding, small round product badge at the top-left and a two-line bold caption at the bottom.
- **Category tile**: transparent on the dark hero, 24px bold white title with thin dividers.
- **Buttons per the guides**: default (white with grey border), primary (black or brand colour), branded, pay (yellow), success and danger; three heights of 32, 40 and 48px. A button measured on the guides' button page has fill `#3d3d3d`, 14px text and an 8px radius.

## Design System Architecture

Kontur publishes its design system as **Контур.Гайды** at https://guides.kontur.ru, operated by SKB Kontur (contact guides@kontur.ru). It is organised into Principles (style, colour, grid, indents, layout, adaptivity, dark theme, illustrations, accessibility, data, interaction), Components (actions, input fields, navigation, popup elements, progress indicators, screens, selection elements, widgets) and Resources. The page says the React UI component library at tech.skbkontur.ru/kontur-ui is the primary embodiment of its requirements, and the brand guidelines at kontur.ru/brandbook (which redirects to in.kontur.ru/brandbook) cover logo and styling questions. The guides also state that the appearance of interface elements is part of the corporate identity and should not be copied.

I did not verify that the kontur.ru marketing homepage is built from the guides' React components; its own stylesheet exposes a separate set of CSS custom properties (`--color-primary-link`, `--color-secondary-text`, `--color-secondary-button`, `--site-header-height`, `--section-*`) that reflect a product-colour theming model (`--color-primary-product`, `--color-secondary-product`).

## Do's and Don'ts

- Do let a single product colour identify each service; keep the rest of the page black, white and grey.
- Do use bold Lab Grotesque for headlines and regular for body, with clear weight contrast.
- Do keep input fields at a 2px radius and other controls at 8px, large blocks at 16px.
- Do reserve shadows for layers that float above the page.
- Don't use red or yellow as a general accent; the guides reserve them for error and warning semantics.
- Don't use thin font weights or sizes that are only slightly different.
- Don't treat consent banners or cookie buttons as part of the system's buttons.

## Responsive Behavior

The display headline drops from 56px to 32px (line-height 56px to 40px) at 390px width. The stylesheet defines a header burger menu colour variable, so the header collapses to a burger at narrow widths, and the guides include an Adaptivity principle and a Mobile principle page. Only the desktop and 390px captures were measured; the 160px desktop side gutter is a desktop value, and layout changes at other widths were not observed.

## Iteration Guide

1. Start with a white canvas, `#222222` text, Lab Grotesque 16px/24px body and 700-weight headings at 24px and 56px.
2. Add one dark `#151515` rounded panel for the hero and put category tiles on it with thin dividers.
3. Pick one product colour from the published eight and use it for the active tile, card and icon badge.
4. Use pill buttons for header actions, 2px-radius inputs, 16px-radius cards.
5. Keep shadows off flat surfaces and verify contrast of white text on the chosen product colour.
