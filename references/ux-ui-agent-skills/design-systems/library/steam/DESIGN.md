---
version: alpha
name: Steam
category: "Gaming"
description: "Valve's Steam store (store.steampowered.com): a dark slate UI — #0f1924 homepage body, #1b2838 product pages, #171d25 global header — set in Motiva Sans with #c6d4df soft text and #66c0f4/#67c1f5 links. Actions are Steam blue #1a9fff (current nav item, search submit) and the green Add to Cart gradient (#75b022 to #588a1b, 2px radius, 15px/30px label); discounts are lime #a1cd44 or #4c6b22/#beee11 blocks. Corners are tiny (1–4px), density is high, 12px is the dominant text size."

colors:
  primary: "#1a9fff"
  primary-light: "#66c0f4"
  tag-blue: "#67c1f5"
  tag-blue-fill: "#67c1f533"
  tag-blue-deep: "#417a9b"
  canvas: "#0f1924"
  canvas-app: "#1b2838"
  canvas-login: "#181a21"
  header: "#171d25"
  footer: "#0f1924e6"
  panel-blue: "#386483"
  surface-grey: "#3d4450"
  surface-darker: "#23262e"
  field: "#32353c"
  ink: "#ffffff"
  ink-white: "#ffffff"
  ink-soft: "#c6d4df"
  ink-body: "#acb2b8"
  ink-nav: "#dcdedf"
  ink-muted: "#8b929a"
  ink-price-old: "#848e94"
  purchase-green: "#75b022"
  purchase-green-end: "#588a1b"
  purchase-green-hover: "#8ed629"
  purchase-green-hover-end: "#6aa621"
  install-green: "#5c7e10"
  discount-lime: "#a1cd44"
  discount-dark: "#4c6b22"
  discount-text: "#beee11"
  price-panel: "#344654"
  price-old-app: "#738895"
  neutral-button: "#cccccc"
  login-blue: "#06bfff"
  login-blue-end: "#2d73ff"
  label-blue: "#1999ff"

typography:
  heading-about:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 45px
    fontWeight: 700
    lineHeight: 45px
  heading-search:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 34px
    fontWeight: 700
  heading-login:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 28px
    fontWeight: 800
  app-title:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 32px
  capsule-title:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
  purchase-heading:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 21px
    fontWeight: 400
    lineHeight: 23px
  section-title:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 20.65px
    fontWeight: 600
    lineHeight: 20.65px
  feature-title:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 700
  section-subtitle:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 17.7px
    fontWeight: 400
  nav-global:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  button-login:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
  button-purchase:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 600
  price-final:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
  discount-pct:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 15px
  discount-pct-large:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 25px
    fontWeight: 500
    lineHeight: 32px
  store-nav:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 13px
    fontWeight: 400
  footer-heading:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 13px
    fontWeight: 700
    lineHeight: 17px
  body:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 400
  body-description:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  label-caps:
    fontFamily: "\"Motiva Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 500
    letterSpacing: 0.24px
  tag:
    fontFamily: "Arial, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 19px
  legal:
    fontFamily: "\"Motiva Sans\", Twemoji"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 14px

rounded:
  none: 0px
  xs: 1px
  sm: 2px
  md: 3px
  lg: 4px
  xl: 6px
  2xl: 8px
  3xl: 10px

spacing:
  xxs: 2px
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 24px
  3xl: 32px
  4xl: 40px

components:
  button-purchase:
    backgroundColor: "{colors.purchase-green}"
    backgroundImage: "linear-gradient(to right, #75b022 5%, #588a1b 95%)"
    typography: "{typography.button-purchase}"
    rounded: "{rounded.sm}"
    padding: 0px 15px
    height: 30px
  button-purchase-hover:
    backgroundImage: "linear-gradient(to right, #8ed629 5%, #6aa621 95%)"
    textColor: "{colors.ink-white}"
  button-neutral:
    backgroundColor: "{colors.neutral-button}"
    textColor: "{colors.ink-white}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 12px
    height: 32px
  button-neutral-hover:
    backgroundColor: "{colors.ink-white}"
  button-blue-hoverfade:
    backgroundColor: "{colors.tag-blue-fill}"
    textColor: "{colors.tag-blue}"
    rounded: "{rounded.sm}"
    padding: 1px
    height: 32px
  button-blue-hoverfade-hover:
    backgroundImage: "linear-gradient(-60deg, #417a9b 5%, #67c1f5 95%)"
    textColor: "{colors.ink-white}"
  button-login:
    backgroundImage: "linear-gradient(90deg, #06bfff 0%, #2d73ff 100%)"
    textColor: "{colors.ink-white}"
    typography: "{typography.button-login}"
    rounded: "{rounded.sm}"
    padding: 12px
    height: 47px
  button-install:
    backgroundColor: "{colors.install-green}"
    textColor: "#e5e4dc"
    rounded: "{rounded.none}"
    padding: 0px 9px 0px 35px
    height: 24px
  search-input:
    textColor: "{colors.ink-white}"
    rounded: 2px 0px 0px 2px
    border: "1px solid #ffffff24"
    padding: 0px 10px
    height: 34px
  search-submit:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-white}"
    rounded: 0px 1px 1px 0px
    height: 34px
  text-input-login:
    backgroundColor: "{colors.field}"
    textColor: "{colors.ink-white}"
    rounded: "{rounded.sm}"
    border: "1px solid #32353c"
    padding: 10px
    height: 39px
  tag-app:
    backgroundColor: "{colors.tag-blue-fill}"
    textColor: "{colors.tag-blue}"
    typography: "{typography.tag}"
    rounded: "{rounded.sm}"
    padding: 0px 7px
    height: 19px
  tag-app-hover:
    backgroundImage: "linear-gradient(135deg, #67c1f5 0%, #417a9b 100%)"
    textColor: "{colors.ink-white}"
  discount-badge:
    backgroundColor: "{colors.discount-lime}"
    textColor: "#000000"
    typography: "{typography.discount-pct}"
    rounded: "{rounded.none}"
    padding: 0px 3px
    height: 28px
  discount-badge-large:
    backgroundColor: "{colors.discount-dark}"
    textColor: "{colors.discount-text}"
    typography: "{typography.discount-pct-large}"
    rounded: "{rounded.none}"
    padding: 0px 6px
    height: 32px
  purchase-box:
    backgroundImage: linear-gradient(-60deg, rgba(226, 244, 255, 0.3) 5%, rgba(84, 107, 115, 0.3) 95%)
    textColor: "{colors.ink-soft}"
    rounded: "{rounded.lg}"
    padding: 16px 16px 26px
  link:
    textColor: "{colors.primary-light}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.header}"
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav-global}"
    padding: 0px 16px
    height: 104px
  nav-hover:
    textColor: "{colors.ink-white}"
  footer:
    backgroundColor: "{colors.footer}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
    padding: 40px
---

## Overview

The Steam store is a dense, dark catalogue. A slate global header (`#171d25`, 104px) carries the
STEAM logo and four uppercase sections — STORE, COMMUNITY, ABOUT, SUPPORT — with the current one in
Steam blue `#1a9fff`. Below it, a 46px store menu ("Browse", "Recommendations", "Categories",
"Ways to Play", "Special Sections") sits next to a search field ending in a blue square button.

The homepage as currently measured carries no seasonal skin: a full-width game key-art banner, then
blue-slate panels on the `#0f1924` body. The earlier Autumn Sale theme (rust-red panels, tiled background)
is no longer on the site and its colours were dropped; the permanent blue-slate system is also what product
pages (`#1b2838`) show.

Content is game "capsules": key art with a discount badge and price strip glued to the bottom-right
corner — lime `#a1cd44` "-30%" with black text, struck old price in grey, final price in white.
Large carousels have side arrows and pagination dots; the grid below is four capsules per row.

Typography is Motiva Sans everywhere, mostly 12px. Hierarchy is modest: 24px/700 capsule titles,
20.65px/600 section titles, 26px/400 product names. Colour does more work than size: white for titles,
`#c6d4df` for text, `#66c0f4` for links and review summaries, green for purchase and discount.

**Key characteristics**
- Dark slate canvases: `#0f1924` (home body), `#1b2838` (product/search/about), `#181a21` (login).
- Motiva Sans at 12px for most text; Arial still used for tags and some legacy blocks.
- Steam blue `#1a9fff` for navigation state and search; `#66c0f4` / `#67c1f5` for links and tags.
- Green gradient purchase button with white label on hover.
- Discount language in lime/green: `#a1cd44`, `#4c6b22` + `#beee11`.
- Tiny radii (1px–4px) and translucent fills (`rgba(103,193,245,0.2)`).

## Colors

### Brand & Accent
- **Primary** `#1a9fff` (`--gpColor-Blue: #1A9FFF`): current global-nav item, search submit.
- **Primary light** `#66c0f4`: review summaries ("Overwhelmingly Positive"), text links.
- **Tag blue** `#67c1f5`, with fill `#67c1f533` (`rgba(103,193,245,0.2)`): app tags and the
  "Community Hub" button; hover gradients run to **tag blue deep** `#417a9b`.
- **Login blues** `#06bfff` → `#2d73ff`: the Sign in button gradient; field labels `#1999ff`.

### Purchase & discount
- **Purchase green** `#75b022` → `#588a1b` gradient (left to right); hover `#8ed629` → `#6aa621`.
- **Install green** `#5c7e10`: "Install Steam" in the header, label `#e5e4dc`.
- **Discount lime** `#a1cd44` with black text: homepage capsule badges.
- **Discount dark** `#4c6b22` with **discount text** `#beee11`: product-page discount block, next to
  a **price panel** `#344654` and old price `#738895`.

### Surface
- **Canvas** `#0f1924`: homepage `body` background.
- **Canvas app** `#1b2838`: product, search and about pages.
- **Canvas login** `#181a21`.
- **Header** `#171d25`; **footer** `#0f1924e6` (90% opaque).
- **Panel blue** `#386483`: blue panels lower on the homepage.
- **Surface grey** `#3d4450` (`--gpSystemDarkGrey`), **surface darker** `#23262e` (`--gpSystemDarkerGrey`).
- **Field** `#32353c`: login inputs.
- **Neutral button** `#cccccc`: the "See All" button.

### Text
- **Ink** `#ffffff`: titles and the most-read text colour on the homepage.
- **Ink soft** `#c6d4df`: default body colour on store pages.
- **Ink white** `#ffffff`: titles, prices, capsule names (the most frequent text colour on the sale homepage).
- **Ink body** `#acb2b8` (`--color-text-body-body`): descriptions and legal lines.
- **Ink nav** `#dcdedf` (`--gpSystemLightestGrey`): inactive global-nav items.
- **Ink muted** `#8b929a` (`--gpSystemLightGrey`): footer text.
- **Ink price old** `#848e94`: struck prices in capsules.

### Semantic (declared tokens)
`--gpColor-Green #5ba32b`, `--gpColor-Red #D94126`, `--gpColor-Orange #E35E1C`, `--gpColor-Yellow #FFC82C`,
`--color-text-green-body #00c400`, `--color-text-red-body #c40000`. Declared on `:root`; not tied to a
measured component here.

### Brand logo colours
Steam's brand guidelines specify the logo in black (RGB 0/0/0, CMYK 30/30/30/100, Pantone Black) for
light grounds and white (RGB 255/255/255) for dark grounds
(https://shared.fastly.steamstatic.com/community_assets/images/steamworks_docs/english/steam_brandGuidelines.pdf).

## Typography

### Font Family
- **Motiva Sans** — `--font-family: "Motiva Sans", Twemoji, "Noto Sans", Helvetica, sans-serif`;
  faces loaded: 300, 400, 500, bold, 900 and italic. Motiva Sans is a commercial family by Rodrigo
  Saiani published by Plau (https://www.myfonts.com/fonts/niramekko/motiva-sans).
- **Arial** — still used for app tags, the "Community Hub" button, some price blocks and the product
  page body wrapper.

### Hierarchy

| Token | Size | Weight | Line height | Where |
|---|---|---|---|---|
| heading-about | 45px | 700 | 45px | /about h1 "Features" |
| heading-search | 34px | 700 | — | /search h2 |
| heading-login | 28px | 800 | — | /login "Sign in" |
| app-title | 26px | 400 | 32px | product name |
| capsule-title | 24px | 700 | 28.8px | homepage spotlight capsule titles |
| purchase-heading | 21px | 400 | 23px | "Buy Stardew Valley" |
| section-title | 20.65px | 600 | 20.65px | "Featured Deep Discounts" |
| feature-title | 20px | 700 | — | /about h3 |
| section-subtitle | 17.7px | 400 | — | section subtitle, 70% white |
| nav-global | 16px | 500 | 16px | STORE / COMMUNITY (uppercase) |
| button-login | 16px | 400 | — | Sign in |
| button-purchase | 15px | 400 | 30px | Add to Cart |
| button | 14px | 600 | — | See All |
| price-final | 14px | 400 | 16px | final price |
| discount-pct | 14px | 700 | 15px | "-30%" capsule badge |
| discount-pct-large | 25px | 500 | 32px | product-page badge |
| store-nav | 13px | 400 | — | "Browse" |
| footer-heading | 13px | 700 | 17px | "STEAM" |
| body | 12px | 400 | — | default text |
| body-description | 12px | 400 | 18px | product description |
| label-caps | 12px | 500 | — | login labels, 0.24px tracking, uppercase |
| tag | 11px (Arial) | 400 | 19px | app tags |
| legal | 11px | 400 | 14px | © Valve footer paragraph |

The `:root` also declares text styles: `--gpText-BodyLarge: normal 400 16px/1.4`,
`--gpText-BodyMedium: 14px/1.4`, `--gpText-BodySmall: 12px/1.4`, `--gpText-HeadingMedium: 700 22px/1.4`,
`--gpText-HeadingSmall: 700 18px/1.4`, all "Motiva Sans", Arial, Sans-serif.

### Principles
- Small and dense: 12px body, 11px legal, 13px menus.
- Uppercase only for the global nav and form labels.
- Letter-spacing is normal except the login labels (0.24px) and a 16px/1.104px style on the sale page.

### Note on Font Substitutes
Motiva Sans is a retail font (Plau). Without a licence, the declared fallbacks are Twemoji, Noto Sans,
Helvetica, sans-serif — keep the measured sizes and weights.

## Layout

### Spacing System
- Gaps: 4px (dominant), 2px, 8px, 12px, 6px, 5px, 16px.
- Paddings: 3px, 8px, 5px, 1px, 12px, 15px; footer 40px.
- `--gpSpace-Gutter: calc(24px + 2vw)`; side panels `--gpSidePanelWidth: 340px`.

### Grid & Container
- The header content box is 1200px wide inside the 1280px viewport; homepage section panels
  measured 1180px.
- Spotlight carousel: three large capsules per frame; deep-discount carousel: three per frame.
- Below: four-column capsule grid with small gutters.

### Whitespace Philosophy
Compact. Sections are separated by tens of pixels, capsules by a few. Information density beats air.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| elevation-0 | `none` (`--box-shadow-elevation-0`) | flat lists |
| elevation-1 | `2px 2px 4px rgba(0, 0, 0, 0.25)` | `--box-shadow-elevation-1` |
| elevation-2 | `5px 5px 6px rgba(0, 0, 0, 0.25)` | `--box-shadow-elevation-2` |
| capsule | `rgba(0, 0, 0, 0.6) 2px 2px 10px 0px` | 20 homepage elements |
| glow | `rgb(0, 0, 0) 0px 0px 10px 0px` | 15 elements |
| gift-card hover | `rgba(13, 170, 243, 0.35) 0px 6px 24px 4px` | "Send a Gift Card" on hover |
| gp shadows | `--gpShadow-Small 0px 2px 2px 0px #0000003D` … `--gpShadow-XLarge 0px 24px 32px 0px #0000003D` | declared |

### Decorative Depth
Translucent gradient boxes (purchase box `linear-gradient(-60deg, rgba(226,244,255,0.3) 5%,
rgba(84,107,115,0.3) 95%)`) and blue gradient hovers give the UI its "glassy" feel.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| none | 0px | discount badges, Install Steam |
| xs | 1px | `--gpCorner-Small`; search submit right corners |
| sm | 2px | `--gpCorner-Medium`, `--radius-sm`; buttons, tags, inputs |
| md | 3px | `--gpCorner-Large`; capsule tags, gift-card button (most frequent on home) |
| lg | 4px | `--radius-md`; purchase box, login card |
| xl | 6px | 26 homepage elements |
| 2xl | 8px | `--radius-lg` |
| 3xl | 10px | 20 homepage elements |

The search field and submit form one unit: `2px 0px 0px 2px` + `0px 1px 1px 0px`.

### Photography Geometry
Capsule key art is landscape (roughly 2:1 on the home grid, larger spotlight capsules above) with
square corners; price strips overlap the bottom-right corner.

## Components

### Buttons
- **button-purchase** — label span with `linear-gradient(to right, #75b022 5%, #588a1b 95%)`,
  Motiva Sans 15px/30px, padding 0px 15px, radius 2px, 30px tall inside a 32px anchor
  (1px padding). Hover: gradient `#8ed629` → `#6aa621`, label white.
- **button-neutral** — "See All": `#cccccc` background, 14px/600, padding 6px 12px, 32px, radius 2px;
  hover background `#ffffff`.
- **button-blue-hoverfade** — "Community Hub": `#67c1f533` fill, `#67c1f5` text, radius 2px, 32px;
  hover `linear-gradient(-60deg, #417a9b 5%, #67c1f5 95%)` with white text.
- **button-login** — `linear-gradient(90deg, #06bfff 0%, #2d73ff 100%)`, white 16px, padding 12px,
  radius 2px, 270 × 47px.
- **button-install** — `#5c7e10` with a download icon at left (padding 0px 9px 0px 35px), 11px/24px
  `#e5e4dc`, 24px tall, square.

### Inputs & Forms
- **search-input** — transparent with `1px solid #ffffff24`, 446 × 34px, padding 0px 10px, white
  13.3333px text, radius `2px 0px 0px 2px`; joined to a 34 × 34 `#1a9fff` submit.
- **text-input-login** — `#32353c` fill and border, Arial 15px white, padding 10px, 39px tall, radius 2px.
- Login labels: 12px/500 uppercase, 0.24px tracking, `#1999ff`; help link 12px `#afafaf`.
- Login card: `#181a21`, 4px radius, padding 24px 32px.

### Tags & Badges
- **tag-app** — `#67c1f533` fill, `#67c1f5` Arial 11px/19px, padding 0px 7px, 19px tall, radius 2px;
  hover `linear-gradient(135deg, #67c1f5 0%, #417a9b 100%)` with white text.
- **discount-badge** — `#a1cd44`, black 14px/700 "-30%", padding 0px 3px, 28px tall, square.
- **discount-badge-large** — `#4c6b22` with `#beee11` 25px/500 text, 32px tall; price panel `#344654`,
  old price `#738895` 11px struck, final price `#beee11` 14px/16px.

### Cards & Containers
- **purchase-box** — translucent gradient, 4px radius, padding 16px 16px 26px, 21px/23px white heading.
- Spotlight capsule: key art + title 24px/700 white + review line 12px `#66c0f4` + tag chips (3px radius).
- Search filter panels: 1px `#ffffff1a` border, 2px radius (search page extraction).

### Navigation
- **Global header** — `#171d25`, 104px, padding 0px 16px; items 16px/500 uppercase with 45px top
  padding; current item `#1a9fff`, others `#dcdedf` → white on hover; "Install Steam", "sign in",
  "language" at top right.
- **Store menu** — 46px bar with 13px white items and chevrons, search at right.

### Footer
- `#0f1924e6`, padding 40px, 12px `#8b929a` text, 11px/14px `#acb2b8` legal paragraph, "STEAM" heading 13px/700/17px `#b8bcbf`.

### Signature Components
- Capsule price strip (lime badge + struck price + final price) glued to key art.
- Green gradient Add to Cart inside the translucent purchase box.
- Seasonal sale skins that recolour the homepage while keeping the component system.

## Design System Architecture

Valve publishes **no public web design system** for the Steam store — no documentation site,
component inventory or token package was found (searches recorded in `SOURCES.json`). The official
brand material covers the logo only: usage rules on the Steamworks branding page
(https://partner.steamgames.com/doc/marketing/branding) and the Brand Guidelines PDF (logo colours,
clear space = diameter of the "main locomotive crank").

### Token architecture (de facto, from the live `:root`)
The homepage exposes 400 custom properties in three recognisable families:
- **`--gp*` tokens** (named semantic set): `--gpColor-Blue #1A9FFF`, `--gpColor-Green #5ba32b`,
  `--gpSystemDarkGrey #3D4450`, `--gpSystemLightGrey #8B929A`, `--gpStoreLightestGrey #CCD8E3`,
  `--gpBackground-DarkHard #0e141bcc`, `--gpCorner-Small 1px` / `-Medium 2px` / `-Large 3px`,
  `--gpShadow-Small` … `-XLarge`, `--gpText-BodyLarge` … `--gpText-HeadingMedium`, `--gpSpace-Gutter`.
- **Numbered colour scales**: `--color-accent-1` … `--color-accent-12` (e.g. `--color-accent-9 #3b9eff`),
  plus 12-step ramps named gold, sage, ruby, iris, jade, tomato, storegreen, valveonly and others.
- **Primitive type/space/radius scales**: `--text-size-1 11px` … `--text-size-8 28px`,
  `--heading-size-*`, `--heading-line-height-*`, `--radius-sm 2px`, `--radius-md 4px`, `--radius-lg 8px`,
  `--box-shadow-elevation-0/1/2`, and text roles such as `--color-text-body-body #acb2b8`.

### Theming
Only the dark theme exists. Seasonal sales have re-skinned the homepage with background images and
tinted panels rather than switching tokens; none is active in the current measurement.

### Type & spacing systems
Motiva Sans with a short scale (11–28px in tokens, 45px on /about). Spacing values are small
(1–16px dominant); `--gpSpace-Gutter` is fluid (`calc(24px + 2vw)`).

### Component model
Measured inventory: purchase button, neutral button, blue hover-fade button, login button, install
button, search field + submit, login input, app tag, discount badges, price panel, purchase box,
capsules, carousel arrows, global header, store menu, footer.

### Accessibility
No published rules found. Observed: text sizes as small as 11px; `#c6d4df` on `#1b2838`.

### Delivery
No public packages or framework statements. Class names mix legacy BEM-like names
(`btn_green_steamui`, `game_area_purchase_game`) with hashed CSS-module classes (`_3PAP1PfUymQrLEveRsxQxP`).

## Do's and Don'ts

### Do
- Use the slate canvases (`#1b2838` product, `#0f1924` home) with `#c6d4df` 12px text.
- Reserve the green gradient for purchase; white label on hover.
- Show discounts as lime `#a1cd44` badges with black text, attached to the price.
- Use `#1a9fff` for navigation state and search, `#66c0f4` for links.
- Keep radii at 1–4px.
- Use translucent blue fills (`#67c1f533`) for tags and secondary buttons.

### Don't
- Don't use large rounded cards or pill buttons.
- Don't set body copy larger than 14px.
- Don't place the green purchase gradient on non-purchase actions.
- Don't treat seasonal sale colours (rust panels) as permanent brand colours.
- Don't alter or combine the Steam logo (Steamworks branding rules).

## Responsive Behavior

### Breakpoints
Not extracted; only 1280px and 390px were measured.

### Touch Targets
- Purchase button 32px, See All 32px, search 34px, login button 47px.

### Collapsing Strategy
- At 390px the most-used sizes are 12px, 10px and 20px (by characters; per-element mapping not measured).
- An "Advanced Search" button is shown full width (370 × 31px,
  `#a3bad333` fill, 13px `#f7f8f8`, radius 2px, padding 6px).

### Image Behavior
Not measured beyond the 390px size table above.

## Iteration Guide

1. Canvas `#1b2838` (or `#0f1924` on home), header `#171d25` 104px, footer `#0f1924e6`.
2. Motiva Sans 12px `#c6d4df` body; white titles; `#66c0f4` links.
3. Purchase: green gradient span, 15px/30px, 0px 15px, 2px radius; hover brighter gradient + white.
4. Discounts: `#a1cd44` + black (home) or `#4c6b22` + `#beee11` (product page).
5. Tags: `#67c1f533` / `#67c1f5`, 2px radius, 19px tall.
6. Inputs: `#32353c` fields (login) or a bordered search with a `#1a9fff` submit.
7. Keep shadows soft and dark; corners 1–4px.
