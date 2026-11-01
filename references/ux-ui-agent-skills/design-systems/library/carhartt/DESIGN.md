---
version: alpha
name: Carhartt
category: "Fashion & Apparel"
description: "Carhartt (carhartt.com, measured on the EU edition en-eu): workwear storefront in Carhartt gold #feb913, black and charcoal #3a3a3a on white, Tungsten condensed uppercase headlines at 52px/700 with TradeGothicNextLTPro text, 5px-radius gold buttons, hairline-bordered 10px-radius product cards and full-bleed workwear photography."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#feb913"
  on-primary: "#000000"
  surface-charcoal: "#3a3a3a"
  ink-navy: "#14293a"
  ink-light: "#d1d1d1"
  ink-meta: "#979797"
  hairline: "#d7d5cf"
typography:
  display:
    fontFamily: Tungsten
    fontSize: 52px
    fontWeight: 700
    lineHeight: 52px
  display-mobile:
    fontFamily: Tungsten
    fontSize: 41.925px
    fontWeight: 700
    lineHeight: 44.0213px
  title-lg:
    fontFamily: Tungsten
    fontSize: 70px
    fontWeight: 400
    lineHeight: 63px
    letterSpacing: 1.75px
    textTransform: uppercase
  title-mobile:
    fontFamily: Tungsten
    fontSize: 31.2px
    fontWeight: 400
    lineHeight: 28.08px
  heading:
    fontFamily: Tungsten, Oswald, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: 1.75px
    textTransform: uppercase
  heading-mobile:
    fontFamily: Tungsten, Oswald, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 25.2px
  subheading:
    fontFamily: TradeGothicNextLTPro, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 25.6px
    letterSpacing: 0.06px
  body:
    fontFamily: TradeGothicNextLTPro-Rg, "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: Arial, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
  nav:
    fontFamily: Tungsten, Oswald, sans-serif
    fontSize: 15px
    fontWeight: 350
    lineHeight: 15px
    letterSpacing: 2px
    textTransform: uppercase
  link:
    fontFamily: TradeGothicNextLTPro-BdCn, sans-serif
    fontSize: 19px
    fontWeight: 400
    lineHeight: 27.36px
    letterSpacing: 0.93px
rounded:
  xs: 5px
  md: 10px
  xl: 20px
  2xl: 50px
  3xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 18px 30px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.surface-charcoal}"
    textColor: "{colors.canvas}"
  button-primary-mobile:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 20px
    height: 50px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-charcoal}"
  nav-link:
    textColor: "{colors.surface-charcoal}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-meta}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-charcoal}"
    textColor: "{colors.canvas}"
---

## Overview

Carhartt's home page was measured at https://www.carhartt.com/en-eu/ (the carhartt.com address redirected there; title "Homepage | Carhartt", prices in euros), so this file documents the EU storefront of the brand. It is a workwear shop built around big photography, condensed uppercase type and one gold. The text pages of the site answer bots with HTTP 403, so everything below comes from the extraction and the rendered capture; no brand text was read from the server.

The page opens with a slim #f7f7f7 bar ("CARHARTT FOR BUSINESS"), a black strip in gold text ("Sign up to our mailing list. Get 10% off your first order."), a utility row (LOGIN, a region flag, ORDER LOOKUP, FIND A RETAILER, a chat icon) and a 70px main header: the round gold Carhartt mark at left, eight uppercase labels (NEW, FEATURED, MEN, WOMEN, FOOTWEAR, ACCESSORIES, SALE, DISCOVER) in the centre, and a circular outlined search button and a cart icon with a count at the right. The 506px hero is a full-bleed workwear photograph with the h1 "BUILT TO WORK, BUILT TO LAST." in white condensed capitals, the line "Since 1889, we've been making workwear that set the standard. Still here, still the same." and a gold "EXPLORE ICONS" button. The capture also shows a Trusted Shops "Buyer Protection" badge at the lower left, a round chat button at the right and a pause control for the background video; they are third-party widgets and controls, not brand UI, and are excluded from every token.

A row of four white product cards (SN code, rating stars, name such as "Iconic J01 Duck Detroit Jacket", price such as "169,99 €") leads into the seasonal line "IT'S CARHARTT SEASON." flanked by gold rules and the sub-line "We make the durable fall gear. You make it possible.". Three photo tiles follow (MEN, BEST SELLERS, WOMEN) with centred white labels over a dark gradient, then a large rounded panel "EVERYDAY LAYERS FOR FALL" (gold-underlined eyebrow "LAYER UP", gold "EXPLORE LAYERS") overlapped by four product cards, two promo tiles ("NEW BALTIMORE TROUSERS", "WOMEN'S FALL LAYERS"), a wide banner "THE ORIGINAL CARHARTT ACTIVE JAC..." with the line "True icons don't disappear; they evolve." and a gold "READ MORE", a "JUST ADDED" product row, a black sign-up strip ("SIGN UP FOR EXCLUSIVE NEWS & OFFERS", an email field, a gold "SUBMIT", gold-ringed social icons) and a charcoal footer with the columns ABOUT, HELP, SHOP and GLOBAL BRANDS. The voice is short, proud and blue-collar: "BUILT TO WORK, BUILT TO LAST.".

## Colors

The shell is white, black and charcoal with one gold.

- `{colors.canvas}` #ffffff is the page and the card white (the largest area, weight 2651). `{colors.surface-charcoal}` #3a3a3a is the footer fill (weight 1283), the hover fill of the gold button and the color of nav text.
- `{colors.ink}` #000000 is the main text color (401 characters) and the label color on gold buttons. White text is the largest share (1119 characters).
- `{colors.primary}` #feb913 is Carhartt gold: the "EXPLORE ICONS" and "READ MORE" fills, the strip text and the rules around the seasonal line. The stylesheet repeats it as `--brand-gold`, `--yellow-500` and `--cx-color-primary`, and also holds `--brand-brown` #C37C13 and `--off-brand-gold` #FDB913.
- `{colors.on-primary}` #000000 is the label on gold.
- `{colors.ink-navy}` #14293a is a dark navy text color (212 characters). `{colors.ink-light}` #d1d1d1 is a light text color (52 characters). `{colors.ink-meta}` #979797 is the grey of product SN codes and style numbers (measured on product cards in the hover pass).
- `{colors.hairline}` #d7d5cf is the 1px border of product cards (4 measurements).

The stylesheet also declares a blue (`--cx-color-primary-accent` #055f9f, `--blue-600` #1B7CB8), a red (`--btn-link-hover` #FE0B0B, `--d2c-red` #FF0000), a green (`--green` #0F8112) and several tans (`--tan` #F3EFE8, `--ccg-light-tan` #F6F1E8); none of these was measured on a visible element of the home page. An orange (#ed704a) appears as a small background area (weight 4); the element was not isolated.

## Typography

Two custom families carry the site, both loaded from the site: Tungsten (weights 400 and 700, 329 characters) for headlines, navigation and the footer headings, and TradeGothicNextLTPro in several cuts (Rg 1229 characters, plain 259, Cn 101, Bd 70, BdCn 58) for body, names and links. Arial sets the gold button label (13 characters). Oswald follows Tungsten in the declared stacks. No substitute is measured.

- `{typography.display}`: Tungsten 52px, weight 700, line height 52px; the hero h1. `{typography.display-mobile}` is 41.925px/700 with 44.0213px line height.
- `{typography.title-lg}`: Tungsten 70px, weight 400, line height 63px, letter spacing 1.75px, uppercase; "IT'S CARHARTT SEASON." with the word CARHARTT in bold between light words in the capture. Band headings measured at 80px/700 ("EVERYDAY LAYERS FOR FALL"), 50px/700 ("NEW BALTIMORE TROUSERS", "JUST ADDED") and 30px/700 (footer "ABOUT") complete the display scale; their font families were not recorded.
- `{typography.heading}`: Tungsten (then Oswald) 40px, 700, line height 36px, 1.75px tracking, uppercase; the banner h2.
- `{typography.subheading}`: TradeGothicNextLTPro 16px, 700, line height 25.6px; product names. `{typography.body}`: TradeGothicNextLTPro-Rg 16px/400, line height 25.6px.
- `{typography.nav}`: Tungsten 15px, weight 350, 2px tracking, uppercase; the utility links and the "CARHARTT FOR BUSINESS" label. `{typography.link}`: TradeGothicNextLTPro-BdCn 19px, 0.93px tracking; the gold sign-up strip text.
- `{typography.button}`: Arial 14px, 700, line height 14px.

Character-weighted sizes are 16px (756), 14px (423), 12px (280), 20px (231), 24px (70), 19px (58), 50px (41), 40px (32), 52px (28), 18px (28), 30px (26) and 80px (24). Weights by characters are 400 (1349), 700 (380), 350 (41) and 100 (28).

## Layout

The page is a 1280px frame, 4700px tall, built from stacked full-width bands: the 40px slim bar, a 93px band (the black strip and utility row), the 70px header, the 506px hero (text inside x 35 to 579), a 43px band, a 409px product-card band, a 220px seasonal-line band, a 198px tile band, a 75px band, a 533px large-panel band, a 405px product-card band, a 787px promo band, a 53px band, a 153px band, a 599px product band and a 696px footer band whose heading "ABOUT" is 30px. The layout probe recorded 12 visible header links and at most 4 card columns on desktop.

Spacing is compact: paddings of 21px (12 uses), 80px (9), 15px, 17px, 8px and 40px, gaps of 20px (8), 14px, 7px and 10px; the root declares `--cx-page-width-max` 1140px for the storefront content width. Photography runs edge to edge, while product cards sit in four equal columns. Density is high in the header and utility rows, low in the heroes.

## Elevation & Depth

Almost flat. Two shadows were measured, `rgba(0,0,0,0.1) 0 10px 10px 0` and `rgb(51,51,51) 2px 2px 10px 0`, each on one element. Product cards are separated from the page by a 1px `{colors.hairline}` border rather than a shadow, and the category tiles use a dark gradient behind white labels. The overlap of four product cards onto the lower edge of the large rounded panel creates the only layered composition. The corpus declares focus rings such as `0 0 0 .2rem #1f7bc040` (5 rules) that were not measured on visible elements.

## Shapes

Gold buttons are 5px (`{rounded.xs}`, 15 measurements, 14px label); product cards use 10px (`{rounded.md}`, 5 elements, plus `10px 10px 0 0` on 4); the large rounded panels measure 20px (`{rounded.xl}`, 2 elements) and 50px (`{rounded.2xl}`, 1); and 50% (5 elements); the capture shows a circular search button and circular social icons. The stylesheet's button radius variable is `--cx-buttons-border-radius` 2rem, which is not what the home-page button measures (5px), so the 5px value is used.

## Components

- Gold button (`{components.button-primary}`): `{colors.primary}` fill, black Arial 14px bold uppercase label, 50px high, padding 18px 30px, 5px radius; hover turns the fill `{colors.surface-charcoal}` and the label white. On mobile: padding 16px 20px, 155px wide.
- Header: a 70px bar with eight uppercase labels in Tungsten and a circular outlined search button; nav text is `{colors.surface-charcoal}`.
- Utility row and slim bar: 15px Tungsten uppercase labels with 2px tracking and small line icons.
- Promo strip: black, with the gold 19px BdCn text.
- Product card (`{components.card}`): white, 10px top radius, 1px `{colors.hairline}` border, a product photograph on white, an `{colors.ink-meta}` SN code, rating stars, the name (16px/700) and a euro price.
- Photo tile: a photograph with a centred white uppercase label on a dark gradient.
- Feature panel: a large rounded full-width photograph with a gold-underlined eyebrow, a big white condensed headline, a short paragraph and a gold button.
- Sign-up strip: black, an email field, a gold "SUBMIT" button and gold-ringed social icons.
- Footer (`{components.footer}`): `{colors.surface-charcoal}` fill, white 30px/700 column headings in Tungsten, small white links.

## Design System Architecture

No public or official Carhartt design system, brand guideline or press kit could be opened: the EU storefront answers with HTTP 403 to every request except the browser extraction, so no link is cited. The de-facto system is visible in the shipped CSS: 400 root variables, with storefront variables prefixed `--cx-` (for example `--cx-color-primary` #FEB913, `--cx-color-background` #f4f4f4, `--cx-page-width-max` 1140px, `--cx-buttons-border-radius` 2rem, `--cx-buttons-border-width` 3px, `--cx-font-weight-light` 300 and `--cx-font-weight-bold` 700), many component variables prefixed `--mat-` from a Material component library, a named palette (`--grey-810` #333333, `--grey-600` #6C6C6C, `--grey-140` #DDDDDD, `--yellow-500` #FEB913, `--blue-600` #1B7CB8, `--green` #0F8112, `--orange-500` #FF7903), brand names (`--brand-gold`, `--brand-brown`) and third-party payment colors. Font Awesome 5 and 7 provide icons.

## Do's and Don'ts

- Do use gold `{colors.primary}` only for calls to action, rules and small accents; keep everything else white, black and charcoal.
- Do set headlines in Tungsten uppercase with 1.75px tracking and let one word be bold inside a light line.
- Do run full-bleed workwear photography and overlap cards onto large rounded panels.
- Do keep body and product copy in TradeGothicNextLTPro at 16px.
- Don't use the stylesheet's blue, red or tan variables as brand colors.
- Don't use the rounded 2rem button radius; the home-page button is 5px.
- Don't treat the Trusted Shops badge, chat bubble or video-pause control as components.
- Don't round product cards beyond 10px.

## Responsive Behavior

Measured at the 390px mobile pass. The h1 is `{typography.display-mobile}` (41.925px, 700, line height 44.0213px, 311px wide), the h2 is `{typography.heading-mobile}` (28px, 700, line height 25.2px), the seasonal title is `{typography.title-mobile}` (31.2px, 400, line height 28.08px, 375px wide) and the gold button is `{components.button-primary-mobile}` (155px by 50px, padding 16px 20px). The layout probe recorded 2 visible header links and a menu toggle labelled "Menu" on mobile (12 visible links and no toggle on desktop), and at most 4 card columns on both. The mobile band list is a 72px header, a 50px strip, a 1217px media band, a 2686px white band with two columns (content x 16 to 368), and 376px, 279px and 1050px lower bands. Mobile character-weighted sizes are 16px (375), 12px (309), 14px (107), 15px (58), 50px (41), 28px (32) and 41.925px (28). What the menu toggle opens is not measured.

## Iteration Guide

1. Open with a black promo strip and a white header; set the hero h1 in `{typography.display}` over a full-bleed photograph with one gold button.
2. Put a row of four `{components.card}` product cards directly under the hero.
3. Add a seasonal title in `{typography.title-lg}` between two gold rules.
4. Build the feature panel with 20px-50px corners and overlap cards onto its lower edge.
5. Close with a black sign-up strip and a `{colors.surface-charcoal}` footer.
6. Re-measure the widgets-free page at several widths before adding responsive tokens.
