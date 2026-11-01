---
version: alpha
name: Bose
category: "Music & Audio"
description: "Bose home page (bose.com/home) measured 2026-10-15: a white and warm-gray (#f9f9f9, #f8f7f6) store with near-black #131317 ink and square 2px black uppercase buttons, a heavy condensed Bose Headline at weight 900 (96px display, 58px section titles) over Bose Text body at 16px with -0.36px tracking, and product photography on light tiles."
colors:
  canvas: "#ffffff"
  page-body: "#f9f9f9"
  ink: "#131317"
  primary: "#131317"
  on-primary: "#ffffff"
  surface-warm: "#f8f7f6"
  ink-muted: "#40464b"
  ink-field: "#3e474a"
  link-blue: "#005bff"
  ink-nav: "#444444"
  hairline: "#949494"
  text-input-bg: "#f1efee"
  card-border: "#13131720"
typography:
  display:
    fontFamily: "\"Bose Headline\", sans-serif"
    fontSize: 96px
    fontWeight: 900
    lineHeight: 84px
    letterSpacing: 1.44px
  display-mobile:
    fontFamily: "\"Bose Headline\", sans-serif"
    fontSize: 46px
    fontWeight: 700
    lineHeight: 41.008px
    letterSpacing: 1.38px
  heading:
    fontFamily: "\"Bose Headline\", sans-serif"
    fontSize: 58px
    fontWeight: 900
    lineHeight: 52.5789px
    letterSpacing: 1.2px
  subheading:
    fontFamily: "\"Bose Text\", \"sans-serif\""
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
  body:
    fontFamily: "\"Bose Text\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: "-0.36px"
  button:
    fontFamily: "\"Bose Text\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.8px
    textTransform: uppercase
  link:
    fontFamily: "\"Bose Text\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 3px
  md: 8px
  lg: 20px
  xl: 24px
  2xl: 88px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2.5px
  s3: 4px
  s4: 4.8px
  s5: 5px
  s6: 7.2px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.body}"
    clipPath: inset(50%)
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-field}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 8px 80.3906px 8px 16px
    height: 38px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 24px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

The measured page is `https://www.bose.com/home` (title "Headphones, Earbuds, Speakers, Soundbars, & More | Bose", `lang` en), the retail home page of the audio brand. It is a commerce page led by product photography and heavy typography. The capture shows an announcement strip at the very top, a header with three left links (Shop, Explore, Support), the italic BOSE wordmark in the center, a search field and account, wishlist and cart icons on the right, then a full-width hero carousel with a very large white headline ("Groove in a dreamy hue", the measured h1) and a short product line beneath it. A row of category tabs follows (Earbuds, Headphones, Speakers, Soundbars, with an arrow to scroll).

Below that, "Trending products" presents product cards on light warm-gray tiles: product cutout, a row of round color swatches with the selected color's name ("Color: Sky Pink"), an "Exclusive color" pill badge, name, star rating with blue count links, and price. Editorial tiles come next, "Sink into sound" over a full-width lifestyle photo with a black "SHOP" button, then two half-width tiles ("Savor your sound", "Sound never settles"), a "Sound is Power" row of vertical video thumbnails, a four-column "Why buy from Bose" block (30-day return policy, Price match promise, Complimentary shipping & returns, My Bose perks, each with a blue "Learn more" link), a "Bose Automotive" photo banner, and a recall notice. The page closes with the heading "Get 10% off your first purchase!" above a black "SIGN IN / JOIN MY BOSE" button, then a multi-column footer.

The voice is short and sensory: "Sink into sound", "Savor your sound", "Sound never settles", "True believers in the power of sound". The measured scroll height is 6,181px at a 1,280px viewport with 744 visible elements. A sign-up overlay appears over the capture of this page; it, its scrim and its close and sign-up controls are not treated as brand UI here.

## Colors

Color is nearly monochrome, so photography supplies hue.

- **Canvas `#ffffff`** is the largest background area (weight 6,942). **Page body `#f9f9f9`** is the body background (the root variable `--color-grey1` is `#f9f9f9`), and **warm surface `#f8f7f6`** (weight 755) and `#f8f8f8` (404) tint product and content bands.
- **Ink and primary `#131317`** are the same near-black: it is the most-read text color (1,795 characters), the fill of the filled buttons (background area weight 1,066) and the value of `--brand-primary` and `--color-text-black`.
- **Muted ink `#40464b`** (520 characters) and **field ink `#3e474a`** (192) are secondary text colors; **nav ink `#444444`** (77) matches `--color-grey6`. White text (354 characters) sits on photography and on black buttons.
- **Link blue `#005bff`** (149 characters) colors rating counts and "Learn more" links and matches `--spectrum-blue-chord`.
- **Hairline `#949494`** is the most common border color (17 elements); **card border `#13131720`** is a 12-percent-alpha ink hairline; **input fill `#f1efee`**.

The `:root` also carries two large color families used for product theming: `--spectrum-<hue>-<flat|minor|major|chord|sharp>` and `--product-<hue>-...` (for example `--product-purple-major: #9f4aff`, `--spectrum-green-major: #00e100`, `--spectrum-teal-minor: #007058`). These are product-color variables declared in the stylesheet; they were not measured on interface elements of this page apart from `#005bff`, so they are not tokens.

## Typography

Two Bose families carry the interface, with weights loaded as Bose Headline 400, 700 and 900 and Bose Text 300, 400, 400 italic, 500 and 500 italic, plus the `bose-icons` icon font. The stylesheet also declares Bose Display Slanted, Bose Display BackSlanted, Gotham Book and FontAwesome. By characters, Bose Text covers 2,805 and Bose Headline 283. The font files are served from the site itself (for example `/on/demandware.static/Sites-Bose_US-Site/-/en_US/.../fonts/bose/text/BoseText-Regular.woff2`), and no license page was opened, so treat both as proprietary.

| Role | Face | Size / line height | Weight / tracking |
| --- | --- | --- | --- |
| Display (h1) | Bose Headline | 96px / 84px | 900, 1.44px; 46px / 41.008px, 700, 1.38px at 390px |
| Heading (h2) | Bose Headline | 58px / 52.5789px | 900, 1.2px |
| Subheading (h3) | Bose Text | 24px / 36px | 500 |
| Body | Bose Text | 16px / 26px | 400, -0.36px |
| Button | Bose Text | 16px / 24px | 500, 0.8px, uppercase |
| Link / small | Bose Text | 12px / 16px | 400 |

Measured sizes by characters: 12px (1,046), 16px (858), 24px (389), 18px (260), 14px (233), 32px (84), 60px (82), 58px (48), 96px (37), 46px (32). Weights: 400 (2,024), 500 (864), 900 (167), 700 (32). The footer heading measured 60px/900/1.2px. Headlines use positive tracking and tight line heights (96px type on an 84px line), while body copy uses negative tracking of -0.36px at 16px and 18px.

**Font substitutes.** For Bose Headline, use a heavy condensed grotesque at weight 800 to 900; for Bose Text, a neutral humanist sans with 300, 400 and 500 weights. Keep the measured tracking values, since the contrast between loose headlines and tight body copy is part of the look.

## Layout

Root variables define the frame: `--inner-rail: 1440px`, `--header-height: 120px`, `--nav-header-height: 72px`, `--alert-banner-height: 48px` and `--spacing-large: 120px`. The measured header is 120px high, and the first bands in the extraction are the 48px announcement strip and a 72px nav row. The hero runs full-bleed behind the content rail; the product carousel has a two-dot pager and previous/next arrows.

Measured gaps are 16px (42 times), 8px (36), 10px (24), 12px (14) and 24px (7); paddings are 12px (29), 16px (22), 24px (19), 40px (18), 8px (15), 32px (13), 4px (10), 34px (8) and 48px (2). The desktop header exposed 7 visible links and a menu toggle labelled "Shop", and the widest card grid contained 15 columns. Spacing between major bands is generous, with 120px defined as the large spacing step.

## Elevation & Depth

Resting elevation is absent: no box shadow was measured on any visible element in the home page measurement. Cards use a 1px `#13131720` border and tonal fills (`#f8f7f6`, `#f8f8f8`) instead. The stylesheet defines a two-layer shadow, `0 3.2px 7.2px rgba(0,0,0,.132), 0 .6px 1.8px rgba(0,0,0,.108)`, used 25 times in the corpus, and Adyen checkout variables for payment fields; where that shadow applies on the home page was not measured. Hover and focus states were sampled only inside the excluded sign-up overlay, so they are not documented here.

## Shapes

The base shape is the near-square corner. Measured radii: 50% (41 elements; round swatches, icon buttons and carousel arrows), 2px (7; buttons), 3px (6; cards and the search field), 20px (3), 88px (2), 8px (2), 24px (1) and 100% (1). The tokens are `xs` 2px, `sm` 3px, `md` 8px, `lg` 20px, `xl` 24px, `2xl` 88px and `pill` 9999px. The stylesheet's most frequent radii are 2px (73 declarations) and 3px (39).

Buttons are rectangles with a 2px radius, so the contrast between hard-edged CTAs and the round swatches, hearts and arrow buttons is a signature of the page. Badges ("Exclusive color", "New color") are black pills; the search field is a rounded bar in the capture (the extraction measured the input itself at 3px).

## Components

**Primary button.** Fill `#131317`, white text, Bose Text 16px/500 uppercase with 0.8px tracking, 2px radius, 48px high; padding `16px 24px` for the "SIGN IN / JOIN MY BOSE" button (238px wide) and `12px 24px` for the "SHOP" buttons on editorial tiles (93px wide). On a mobile measurement a white-fill variant with `#131317` text appeared for "SHOP HEADPHONES" (208 by 40px, padding `8px 24px`).

**Outlined/ghost button.** Transparent with white text on photography, same type and radius ("SHOP EARBUDS" measured 191 by 51px, padding `12px 12px 12px 0px`).

**Text input.** `#f1efee` fill, `#3e474a` text, 16px/24px, 3px radius, 38px high, 268px wide, padding `8px 80.3906px 8px 16px` (room for the search icon).

**Product card.** Light warm tile, `#13131720` 1px border, 3px radius, product image, swatch row, name, rating, price. Card padding measured 24px.

**Badge.** Black pill with white text ("Exclusive color", "New color") in the capture; size not measured.

**Header and nav.** 120px high; navigation text in `#444444` or `#131317`; a skip-link block ("Skip to main content", "Skip to footer content", "Skip to Accessibility...") is the first content.

**Footer.** White background, `#131317` text, headline "Get 10% off your first purchase!" in Bose Headline 60px/900.

## Design System Architecture

No public Bose design system or brand-guideline page was found. The press room page opened at https://www.bose.com/pressroom contains no brand guidelines, press kit, typeface or color specifications; it lists a press contact and shows the logo only as an image.

The de-facto system is visible in the shipped code. The home page HTML references Salesforce Commerce Cloud static assets under `/on/demandware.static/Sites-Bose_US-Site/-/en_US/.../css/` (`global.css`, `homePageStyles.css`, `adyenCss.css`) and the Adyen checkout stylesheet `adyen.css` from `checkoutshopper-live-us.adyen.com` (SDK 6.30.0); `--adyen-sdk-*` variables belong to that third party. The brand's own `:root` variables include `--brand-primary: #131317`, a `--color-grey1` to `--color-grey7` neutral ramp, `--color-text-white` and `--color-text-black`, the `--spectrum-*` and `--product-*` hue families, and layout variables `--inner-rail`, `--header-height`, `--nav-header-height` and `--spacing-large`. The extraction recorded 290 root variables.

## Do's and Don'ts

**Do**
- Set display and section titles in Bose Headline 900 at the measured sizes with positive tracking (1.2px to 1.44px).
- Use `#131317` for filled buttons and text, with white uppercase 16px/500 labels and a 2px radius.
- Keep surfaces white or warm gray (`#f9f9f9`, `#f8f7f6`) and let product photos supply color.
- Use `#005bff` for inline links such as "Learn more".
- Use 50% radius for swatches and circular icon buttons.

**Don't**
- Don't give buttons pill radii; the measured button radius is 2px.
- Don't add resting shadows to cards.
- Don't treat the sign-up overlay, its scrim or its close control as part of the system.
- Don't use the `--spectrum-*` and `--product-*` hues as interface accents; they were not measured on page UI.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured values: the h1 and h2 are both 46px/41.008px at weight 700 with 1.38px tracking (down from 96px and 58px at weight 900); body text is 18px/27px; the header measured 390px wide and 110px high with 12px/16px text in `#131317`; the "SHOP HEADPHONES" button is white with `#131317` text, 2px radius, padding `8px 24px`, 208 by 40px. The mobile layout probe found 3 visible header links, a menu toggle labelled "Toggle navigation" and at most 9 card columns (desktop: 7 links, toggle labelled "Shop", 15 columns). The most-read mobile sizes are 16px (869 characters), 12px (667), 14px (508), 18px (438), 46px (117), 36px (82) and 24px (48). Other mobile layout changes were not measured.

## Iteration Guide

1. Set canvas `#ffffff`, page body `#f9f9f9`, ink and primary `#131317`, link `#005bff`.
2. Load Bose Headline (400/700/900) and Bose Text (300/400/500); apply the 96/58/24/16/12px scale and the tracking values.
3. Build the 120px header (three links, centered wordmark, search, icons), then a full-bleed hero with a 96px white 900 headline and square black uppercase buttons.
4. Add warm-gray product cards with 3px corners and `#13131720` borders, round swatches and black pill badges.
5. Verify mobile only against the measured values: 46px headline, 18px body, 390px header at 110px.
6. Measure any new component first with `node web/scripts/extract-tokens.mjs --slug=bose--<page> --url=<url> --force --no-motion`.
