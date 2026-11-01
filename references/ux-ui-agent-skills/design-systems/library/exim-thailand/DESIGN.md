---
version: alpha
name: EXIM Thailand
category: "Thai Brands"
description: "Export-Import Bank of Thailand (exim.go.th/en), a state banking site in a navy #034ea2 and signal red #ed1c24 palette on white, with DB Heavent for headings and buttons, IBM Plex Sans Var for body, a red 6px-radius button and a blue-to-red gradient service band."
colors:
  canvas: "#ffffff"
  ink: "#202020"
  primary: "#ed1c24"
  on-primary: "#ffffff"
  surface-blue: "#034ea2"
  surface-card: "#f7f9fb"
  text-on-blue: "#ffffffcc"
  text-blue-tint: "#b6cce2"
  ink-muted: "#999999"
  nav-link-text: "#000000e6"
  card-border: "#e3e3e3"
typography:
  display:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 20px
  heading:
    fontFamily: DBHeaventMedv3_2
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  subheading:
    fontFamily: DBHeaventMedv3_2
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
  body:
    fontFamily: "\"IBM Plex Sans Var\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 21px
    fontWeight: 400
    lineHeight: 21px
  nav:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  input:
    fontFamily: DBHeaventv3_2
    fontSize: 30px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 12.6px
  s8: 15px
  s9: 20px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 30px
    height: 43px
    borderColor: "{colors.primary}"
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 7px 5px
    height: 32px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    padding: 0px 10px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 15px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 4px 12px
    height: 50px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.xs}"
    padding: 10px 10px 27px
    borderColor: "{colors.card-border}"
    boxShadow: rgba(0, 0, 0, 0.05) 0px 1px 1px 0px inset
  footer:
    textColor: "{colors.ink}"
---

## Overview

This is the English home page of the Export-Import Bank of Thailand, titled "Home - Export-Import Bank of Thailand" and branded EXIM Thailand. It is a public-sector bank, and the page behaves like a service directory: a utility strip, a main navigation, a hero banner, a band of five service entry points, carousels of products, a live exchange-rate table beside a currency calculator, and a news block. The hero line in the capture reads "EXIM Thailand: Your Global Connector for Thai Business" and a later block says "EXIM Thailand works alongside Thai entrepreneurs."

The brand identity is a two-colour system taken from the EXIM logo: a deep royal blue and a signal red, both heavily used. The measured background areas are #034ea2 (largest area weight, 827), white #ffffff (664), a pale grey-blue #f7f9fb (194) and a lighter blue #3281d1 (56), with red #ed1c24 as the smallest and most targeted area (27). The utility strip at the top and the five-tile service band run as a left-to-right gradient from blue into red, which is the signature visual of the site. Photography is staged and commercial: smiling Thai professionals, parcels, aircraft, wind turbines and shipping containers, with the EXIM wordmark stamped in the corner of banner images.

The tone of the microcopy is institutional and service-oriented in English: "Service Introduction", "Exchange Rates", "Calculating Tools", "News and Notices", "Read more", "Click here". The header also provides text-size controls (-A, A, A+) and an EN language switch, which are part of the measured page.

## Colors

- Canvas `#ffffff` is the page background and the field of the white content areas.
- Ink `#202020` is the body text colour on white and the colour of section titles.
- Primary `#ed1c24` is the action colour: the measured primary button fill, the secondary button text and border, the short vertical bar in front of every section title, and the "Read more" outlines in news rows.
- On-primary `#ffffff` is the label colour on the red button.
- Surface blue `#034ea2` is the largest area colour: the exchange-rate panel, the news section background and the left end of the gradient bands. It also appears as measured text colour for emphasised values (#034ea2 text, weight 20).
- Surface card `#f7f9fb` fills the calculator card; its border is `#e3e3e3`.
- Text on blue `#ffffffcc` (white at 80%) is the most common text colour by character count (836) because the blue sections carry a lot of copy; plain white `#ffffff` follows (817).
- Text blue tint `#b6cce2` (584) is used for secondary labels on blue.
- Ink muted `#999999` is the colour of field labels such as "Amount" and of disclaimer text.
- Nav link text `#000000e6` (black at 90%) is for the main navigation links.
- Also measured: #3281d1 as a lighter blue background area, #fafafa as a faint grey area.

Default Bootstrap variable colours exist in the root CSS (for example `--yellow: #ffc107`, `--success: #28a745`, `--danger: #dc3545`) but they are framework defaults, not brand colours, and are not documented as tokens.

## Typography

Three families are in use, all measured as loaded fonts: DB Heavent (regular, bold and Med 500), served as DBHeaventv3_2 and DBHeaventMedv3_2 files, plus IBM Plex Sans Var, and Font Awesome 5 Free for icons. DB Heavent is a Thai and Latin family from DB Design; the English page still uses it for headings, navigation and buttons. By character count IBM Plex Sans Var carries the most text (1450 characters), then DB Heavent (785) and DBHeaventMedv3_2 (747).

Scale as measured on desktop:

- Display: DB Heavent 24px, weight 700, line height 20px (the bold label style).
- Heading: DBHeaventMedv3_2 40px weight 400 on 48px (page and band titles).
- Subheading: DBHeaventMedv3_2 24px on 28.8px (the labels under the service icons, such as "TradeFinance").
- Body: IBM Plex Sans Var 16px on 24px.
- Button: DB Heavent 21px weight 400; secondary button 16px on 16px.
- Nav: DB Heavent 18px on 20px.
- Input: DBHeaventv3_2 30px weight 700 on 24px.

Frequent sizes by character count are 16px, 20px, 14px, 17px, 24px, 45px, 40px and 30px. DB Heavent is a condensed-looking humanist face with small x-height, which is why the nominal sizes are larger than usual. If it is unavailable the stylesheet falls back to generic sans-serif.

## Layout

The page is a single column of full-width bands inside a centred container. Measured spacing values are 4, 5, 7, 8, 10, 12, 12.6, 15, 20 and 25px.

Structure from top: (1) the gradient utility strip with eight text links, language switch and text-size controls; (2) a white main navigation bar with the EXIM logo and four menu items (Head Office, Branches, Overseas Representative Offices, Other Links) plus a search icon; (3) the hero banner; (4) the five-tile service band on the blue-to-red gradient; (5) "Service Introduction", a card carousel with circular previous and next arrows; (6) a two-column row with Exchange Rates on blue at the left and Calculating Tools on pale grey at the right; (7) a blue section with the statement "EXIM Thailand works alongside Thai entrepreneurs." beside a News and Notices tabbed list; (8) the footer, which starts with "EXIM BANK Contact 0 2169 9999". The scroll height at 1280px is 4146px.

## Elevation & Depth

Depth is mostly flat. The only measured shadow is an inset `rgba(0, 0, 0, 0.05) 0px 1px 1px 0px` on the calculator card. A slide-out mobile menu declares `--mm-shadow: 0 0 10px rgba(0, 0, 0, 0.3)` in the root CSS; it is a menu plugin variable and was not observed on screen. Separation comes from colour blocks (blue panel on white, white news card on blue background) and the thin `#e3e3e3` border on cards. The calculator card ends with a thin gradient rule at the bottom edge in the capture.

## Shapes

Corners are small. Measured radii: 4px for the secondary button, nav container and cards; 6px for the primary button; and 9999px (pill) for circular controls such as the carousel arrows and the swap-currency button. Text inputs have a 0px radius and use an underline style in the capture. Banner images and service cards are drawn with square corners. Currency flags are shown as small circles.

## Components

- Primary button: red `#ed1c24` fill, white text, DB Heavent 21px, padding 10px 30px, height 43px, radius 6px, 1px solid red border. Label measured: "Click here".
- Secondary button: transparent, red text, 1px red border, radius 4px, padding 7px 5px, height 32px, DB Heavent 16px. Label measured: "Read more".
- Navigation: main nav links DB Heavent 18px, text `#000000e6`, padding 15px, height 50px; the utility strip uses white text on the gradient.
- Service tile: icon above a two-line label in DBHeaventMedv3_2 24px, white on the gradient, tiles separated by thin vertical rules.
- Section title: DB Heavent 40px at the heading role, ink colour, preceded by a short vertical red bar.
- Exchange-rate table: blue `#034ea2` panel, white values, columns Currency, Buying, Selling, with a "More" link and arrow and a "Last update date" line.
- Calculator card: `#f7f9fb` fill, 4px radius, 10px 10px 27px padding, `#e3e3e3` border, two amount fields with currency dropdowns, and the label "1 AUD = 23.225 THB".
- Text input: white, 50px high, padding 4px 12px, DBHeaventv3_2.
- Cookie-consent and chat widgets visible in the capture are third-party or utility controls and are not part of the brand UI.

## Design System Architecture

No public design system or brand guideline was found: the home page https://www.exim.go.th/en/ (final URL https://www.exim.go.th/en/Home.aspx) was opened and contains no link to a design system, brand guideline, press kit or GitHub organisation, so none is cited. The de-facto system is a Bootstrap 4 based site: the root stylesheet exposes Bootstrap variables (`--light`, `--success`, `--danger`, `--gray-dark`) alongside the mmenu plugin variables (`--mm-shadow`, `--mm-color-button`, `--mm-color-text-dimmed`). Fonts are self-hosted DB Heavent files, with IBM Plex Sans Var for body copy and Font Awesome 5 Free for icons. Brand colours are applied directly rather than through named theme variables; the Bootstrap default colours in the root are not used as brand tokens.

## Do's and Don'ts

Do:
- Use navy `#034ea2` for large informational panels and red `#ed1c24` for the single action colour.
- Run the blue-to-red gradient only on strips and service bands.
- Precede section titles with the short red vertical bar.
- Keep buttons at a 4px or 6px radius, and use pill shapes only for circular icon controls.
- Offer language and text-size controls in the header.

Don't:
- Treat Bootstrap's `#ffc107` or `#28a745` root variables as brand colours.
- Put body text in `#999999` on white for essential content; it is the label and disclaimer grey.
- Use shadows beyond the faint inset on cards.
- Document cookie or chat widgets as brand components.

## Responsive Behavior

Measured with the 390px mobile pass: the h2 "Service Introduction" is DBHeaventMedv3_2 30px; the nav strip text "EN -A A A+" is DB Heavent 16px in `#003e92` on white at 54px high; the body paragraph role measured IBM Plex Sans Var 9px in `#ffffffcc`. The most frequent mobile font sizes by character count are 9px, 15px, 25px, 16px, 30px and 20px. Column order, menu behaviour and carousel changes at mobile width are not measured. The root CSS contains a slide-out menu plugin (mmenu) variables, which is a stylesheet declaration, not an observed mobile layout.

## Iteration Guide

1. Start with a white canvas and set large information areas in `#034ea2`.
2. Use `#ed1c24` only for the action button, the title bars and outlined secondary actions.
3. Set headings in DB Heavent Med 40px and body in IBM Plex Sans 16px on 24px.
4. Build service entry points as an icon-over-label band on the blue-to-red gradient.
5. Keep cards at a 4px radius with `#e3e3e3` borders and the inset 1px shadow.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=exim-thailand --url=https://www.exim.go.th/en/ --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=exim-thailand`.
