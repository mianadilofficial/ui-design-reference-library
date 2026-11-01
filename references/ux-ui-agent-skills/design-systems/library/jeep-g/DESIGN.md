---
version: alpha
name: Jeep
category: "Automotive"
description: "Jeep.com, the official US Jeep site: white #ffffff canvas with black #000000 header and footer, #212121 headings, deep forest green #1e4544 brand buttons and a lighter #487f70 'VIEW INCENTIVES' button (hover #3a675b), 2px corners, uppercase Roboto 14px/700 labels with 0.7px tracking, and Roboto 700 headlines at 33px and 56px."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  heading: "#212121"
  ink-secondary: "#636363"
  ink-subdued: "#3e3e3e"
  primary: "#487f70"
  primary-hover: "#3a675b"
  on-primary: "#ffffff"
  brand-green: "#1e4544"
  brand-green-hover: "#0f2623"
  surface-dark: "#000000"
  surface-secondary: "#ebebeb"
  surface-graphite: "#4c4c4c"
  line: "#bfbfbf"
  neutral-mid: "#999999"
  error: "#aa0c0c"
  warning: "#b34400"
  positive: "#137703"
typography:
  display:
    fontFamily: Roboto
    fontSize: 33px
    fontWeight: 700
    lineHeight: 33px
  display-mobile:
    fontFamily: Roboto
    fontSize: 26px
    fontWeight: 700
    lineHeight: 26px
  heading:
    fontFamily: Roboto
    fontSize: 56px
    fontWeight: 700
    lineHeight: 56px
  title:
    fontFamily: Roboto
    fontSize: 40px
    fontWeight: 700
  subheading:
    fontFamily: Roboto
    fontSize: 25px
    fontWeight: 700
    lineHeight: 25px
  model-name:
    fontFamily: Roboto
    fontSize: 23px
    fontWeight: 700
  body:
    fontFamily: Roboto
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20.02px
  button:
    fontFamily: Roboto
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: 0.7px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 4.06px
  s3: 5px
  s4: 6px
  s5: 6.61px
  s6: 8px
  s7: 9.14px
  s8: 9.72px
  s9: 10px
  s10: 10.06px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 13px 42px 13px 25px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-brand:
    backgroundColor: "{colors.brand-green}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 13px 42px 13px 25px
    height: 40px
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    border: "3px solid #1e4544"
    padding: 10px 42px 10px 25px
    height: 40px
  header:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
---

## Overview

The measured page is the official US Jeep site (finalUrl `https://www.jeep.com/`, title "Jeep® SUVs, Crossovers & Trucks - Official Jeep Site"). A thin `#ebebeb` utility bar ("Sign In / Create an Account") sits above an 80px black header with the Jeep wordmark at left, eleven visible links and menus (VEHICLES, SHOPPING TOOLS, JEEP 4xe, ELECTRIFICATION, JEEP LIFE and more), and Find a Dealer / Shop Online / Build & Price icons at right.

The page reads like a showroom brochure. A hero carousel carries large incentive figures ("0% APR", "$5,500") over a vehicle photograph. A green promotional panel follows ("Time to Pass Go", a 56px white headline, with a Monopoly at McDonald's tie-in). The vehicle lineup ("Your Passport to Adventure", the h1 at 33px) shows filter tabs (ALL VEHICLES, ELECTRIC & HYBRID, LIMITED EDITIONS, TWELVE 4 TWELVE) and a four-across grid of cut-out vehicle photos with uppercase model names (COMPASS, CHEROKEE, WRANGLER, GRAND CHEROKEE, GLADIATOR, GRAND WAGONEER, WAGONEER S, JEEP RECON) and "Starting at MSRP" prices.

Further down: the Wrangler Switchback launch with two buttons, the Twelve 4 Twelve limited-edition cards, a full-bleed off-road photograph with the heavy display slogan "WE PLEDGE ALLEGIANCE TO ADVENTURE" and torn-paper edges, "A World of Adventure" and the "Jeep Life" community section, partner promotions (a Vineyard Vines apparel collection, a Jeep Mastercard), shopping shortcuts, a graphite `#4c4c4c` locale strip and a dense black footer with many link columns.

The mood is rugged and outdoorsy: mud, sand, forest and desert photography; uppercase, tracked button labels; forest-green actions; black frames at top and bottom.

## Colors

The page carries a token set with the `--gcss-` prefix; names in brackets are its own.

- **canvas `#ffffff`** (`--gcss-colors-background-primary`): the main content background, the largest measured area.
- **ink `#000000`** (`--gcss-colors-text-body-primary`): body text and model names.
- **heading `#212121`** (`--gcss-colors-text-heading`): the h1 colour.
- **ink-secondary `#636363`** (`--gcss-colors-text-body-secondary`) and **ink-subdued `#3e3e3e`** (`--gcss-colors-text-body-subdued-dark`): secondary copy, incentive text and disclosure bubbles.
- **primary `#487f70`** (`--gcss-colors-element-accent_dark`): the lighter green of the measured primary button "VIEW INCENTIVES"; hover darkens to **primary-hover `#3a675b`**.
- **brand-green `#1e4544`** (`--gcss-colors-brand-primary`, `--gcss-colors-element-primary`): the deep forest green of most buttons ("EXPLORE WRANGLER SWITCHBACK", "SIGN UP FOR UPDATES"), active tabs and accent lines. Its hover token is **brand-green-hover `#0f2623`** (`--gcss-colors-element-primary-hover`).
- **on-primary `#ffffff`**: text on green and on black.
- **surface-dark `#000000`**: header and footer.
- **surface-secondary `#ebebeb`** (`--gcss-colors-background-secondary`): the utility bar.
- **surface-graphite `#4c4c4c`** (`--gcss-colors-background-secondary_dark`): the strip above the footer.
- **line `#bfbfbf`** (`--gcss-colors-line-primary`) and **neutral-mid `#999999`**: dividers and inactive elements.
- **error `#aa0c0c`**, **warning `#b34400`**, **positive `#137703`**: status colours from the token set.

## Typography

The page renders entirely in Roboto (all 7398 measured characters), loaded at 400, 500, 700 and 400 italic, plus an icon font ("GCSS Icons").

- **display**: 33px/33px, weight 700, the h1 "Your Passport to Adventure" (centred).
- **heading**: 56px/56px, weight 700, the promo headline "Time to Pass Go".
- **title**: 40px, weight 700, section titles such as "Welcome Home" and "Jeep® Life".
- **subheading**: 25px/25px, weight 700, card titles ("2026 Jeep® Wrangler Willys 392").
- **model-name**: 23px, weight 700, uppercase model names in the lineup.
- **body**: 14px/20.02px, weight 400; 14px is the dominant size (4410 characters).
- **button**: 14px/14px, weight 700, uppercase, 0.7px letter-spacing.

Small sizes are frequent (10px on 1185 characters, 11px on 652, 12px on 399) for prices, disclaimers and footer links; 12px labels also carry 0.7px tracking. Line heights equal font size on headings (1.0), which keeps stacked headlines tight. The token set sizes type in rem against a 14px root (`--gcss-typography-label-10-size: 1rem`).

## Layout

At 1280px the page is 9125px tall. Recorded bands: a 30px `#ebebeb` utility bar, an 80px black header, a 564px media hero, a 3263px white band with content from x=27 to x=1251 in up to three columns, a 1212px media band, a 2150px off-white `#fffefd` band, a 94px `#4c4c4c` strip and a 1611px black footer in four columns. The vehicle grid runs four across in the capture, and the extraction counted up to four card columns.

The spacing tokens (`--stla-spacing-*`) are named in pixels on a 14px rem base (`--stla-spacing-16: 1.1428571428571428rem` equals 16px), which is why fractional paddings such as 4.06px, 6.61px, 9.14px and 9.72px appear in the measurement. The most frequent gap is 15px; the most frequent paddings are 10px, 20px, 6px, 25px and 15px.

## Elevation & Depth

No box-shadows are recorded on the page. Depth comes from cut-out vehicle photography on white, full-bleed off-road imagery, torn-paper edges on the slogan section, and translucent overlays (`#00000080`, `#00000099`, `#ffffff99`) on carousel controls and captions. The page is framed by black at the top and bottom.

## Shapes

Shapes are nearly square. The dominant radius is 2px (11 uses) on all buttons. Circles (`100%`) appear on carousel dots and icon buttons, and one 24px radius is recorded. Cards, photos and bands have square corners. Button shape is consistent: a 40px-tall rectangle with asymmetric padding (`13px 42px 13px 25px`), leaving room for an arrow icon at the right.

## Components

- **Primary button** ("VIEW INCENTIVES"): `#487f70` fill, white Roboto 14px/700 uppercase label with 0.7px tracking, 2px corners, `13px 42px 13px 25px` padding, 40px tall; hover fill `#3a675b`.
- **Brand button** ("EXPLORE WRANGLER SWITCHBACK", "SIGN UP FOR UPDATES", "EXPLORE"): the same geometry in `#1e4544`.
- **Outlined button** ("LAUNCH VIDEO"): transparent, black label, 3px solid `#1e4544` border, `10px 42px 10px 25px` padding.
- **Header**: black, 80px, uppercase menu labels in white, utility icons at right; the "Sign In / Create an Account" link underlines on hover.
- **Vehicle tile**: cut-out vehicle on white, uppercase model name, "Starting at MSRP" and price, small badges under some vehicles.
- **Filter tabs**: uppercase text tabs (ALL VEHICLES, ELECTRIC & HYBRID, LIMITED EDITIONS, TWELVE 4 TWELVE); tab tokens set the active tab to `#1e4544` and inactive to `#000000`.
- **Footer**: black, many columns of small white links with uppercase column headings, social icons.

## Design System Architecture

No public Jeep or Stellantis design-system documentation was reached; jeep.com's history page returned HTTP 403. The shipped CSS shows a shared, themeable token layer: 373 root variables, mostly `--gcss-*` ("GCSS" also names the icon font) organised as colours by category and role (`--gcss-colors-brand-*`, `--gcss-colors-element-*`, `--gcss-colors-text-*`, `--gcss-colors-line-*`, `--gcss-colors-background-*`) with `_light` / `_dark` variants and `-rgb` triplets for alpha use, typography tokens by family of use (`--gcss-typography-brand-heading-*`, `--gcss-typography-utility-heading-*`, `--gcss-typography-label-*`, `--gcss-typography-responsive-copy-*`), plus `--stla-spacing-*` spacing tokens. The `stla` prefix and the brand-neutral GCSS naming show a multi-brand system in which Jeep supplies the brand values (forest green, Roboto). Rebuild by keeping semantic role tokens separate from the brand values.

## Do's and Don'ts

**Do**
- Use forest green `#1e4544` for brand actions and tabs, and `#487f70` for the lighter incentive button.
- Set button labels in uppercase Roboto 14px/700 with 0.7px tracking.
- Keep buttons rectangular at 2px corners and 40px tall.
- Frame the page with black header and footer and let off-road photography fill the middle.
- Use tight 1.0 line heights on bold headlines.

**Don't**
- Don't round buttons into pills.
- Don't add drop shadows; depth comes from imagery.
- Don't treat the "Choose your site" country selector in the capture as brand UI.
- Don't use the browser-default `#0000ee` link colour recorded on a few elements as a brand colour.

## Responsive Behavior

The extractor's mobile pass recorded: the h1 drops from 33px to 26px (line height equal to size); the promo h2 drops from 56px to 32px; body text stays 14px/20.02px; the primary button keeps its 40px height, 2px corners and padding. Header links visible fall from eleven to none, and a toggle labelled "Vehicles" is visible. Mobile bands start with a 45px black header and run as single-column white and media bands with content between roughly x=6 and x=378, ending in a two-column `#4c4c4c` strip and a two-column black footer. The extraction counted up to four card columns in both passes.

The stylesheet's breakpoints are mostly `max-width 1004px` (822 rules), `min-width 700px` (706), `max-width 699px` (622), `min-width 1005px` (539) and `max-width 509px` (294). Grid behaviour between breakpoints is not measured.

## Iteration Guide

1. Start with white content between a black header and footer.
2. Use Roboto for everything: 700 for headings with line height equal to size, 400 for 14px body.
3. Build actions as 40px rectangles with 2px corners and uppercase tracked labels, filled `#1e4544` or `#487f70`.
4. Present vehicles as cut-outs on white in a four-column grid with uppercase names and prices.
5. Use the `--gcss-*` role names when adding colours; keep status colours to the token values.
6. Measure the build-and-price configurator before adding tokens for forms, swatches or trim tables.
