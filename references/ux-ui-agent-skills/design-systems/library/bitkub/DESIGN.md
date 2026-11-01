---
version: alpha
name: Bitkub Exchange
category: "Thai Brands"
description: "Thailand's crypto exchange site on a published --bk-* token system: Graphik TH at 14px body and 40px/600 hero, Bitkub green #00b359 buttons with #00994d hover, #0c0e0c ink and #6b7b70 secondary text on #ffffff and #f5f5f5, 4px button radius, 16px-radius white stat cards with soft layered shadows, red #f04542 for losses and a green stats band."
colors:
  canvas: "#ffffff"
  page-body: "#f5f5f5"
  ink: "#0c0e0c"
  ink-secondary: "#6b7b70"
  ink-on-gray: "#5f6d64"
  ink-placeholder: "#a0aca4"
  primary: "#00b359"
  on-primary: "#ffffff"
  primary-pressed: "#008040"
  green-deep: "#00994d"
  surface-positive: "#e5fff2"
  chip-hover: "#ccffe5"
  negative: "#f04542"
  negative-bg: "#fde8e7"
  warning: "#f9b806"
  info: "#38b3fa"
  surface-gray: "#f1f3f2"
  hairline: "#e4e7e5"
  border-secondary: "#bbc4be"
typography:
  hero:
    fontFamily: "\"Graphik TH\""
    fontSize: 40px
    fontWeight: 600
    lineHeight: 60px
  display:
    fontFamily: "\"Graphik TH\""
    fontSize: 28px
    fontWeight: 600
    lineHeight: 44px
  subheading:
    fontFamily: "\"Graphik TH\""
    fontSize: 20px
    fontWeight: 500
    lineHeight: 32px
  lead:
    fontFamily: "\"Graphik TH\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  body:
    fontFamily: "\"Graphik TH\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Graphik TH\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 18px
  button-secondary:
    fontFamily: "\"Graphik TH\""
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
  chip:
    fontFamily: "\"Graphik TH\""
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 16px
  xl: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 20px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.green-deep}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 8px
    height: 32px
  button-outlined:
    textColor: "{colors.green-deep}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 8px
    height: 34px
    borderColor: "{colors.primary}"
  chip:
    backgroundColor: "{colors.surface-positive}"
    textColor: "{colors.green-deep}"
    typography: "{typography.chip}"
    rounded: "{rounded.sm}"
    padding: 4px 8px
    height: 26px
  chip-hover:
    backgroundColor: "{colors.chip-hover}"
    textColor: "{colors.green-deep}"
  badge-notice:
    backgroundColor: "{colors.warning}"
    textColor: "{colors.canvas}"
    typography: "{typography.chip}"
    rounded: "{rounded.xl}"
    padding: 2px 8px
    height: 21px
  card-stats:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    padding: 48px 160px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 8px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.04) 0px 4px 8px 2px, rgba(0, 0, 0, 0.02) 0px -1px 8px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 8px
  nav-link-hover:
    textColor: "{colors.green-deep}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 32px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 40px 0px 32px
---

## Overview

Bitkub.com is the Thai cryptocurrency exchange run by Bitkub Online Co., Ltd. Its English home page (`https://www.bitkub.com/en`, titled "Bitkub.com | Thailand's Cryptocurrency Exchange | Buy bitcoin") is a trading-product landing page with a live market table: a white header with the "bitkub EXCHANGE" wordmark, an apps-grid icon and the links Market, Auto DCA (with a blue "New" tag), Referral, Rewards, News, Help Center and Privilege, then on the right a green text "Log in", a green "Sign up" button and phone, globe and theme icons; a pale green notice strip with a yellow "Notice" pill and a one-line announcement; a hero with "Buy & Sell Crypto with Bitkub Exchange", a grey subtitle, a green "Sign up for free" button and a large green Bitcoin coin illustration; a row of four rounded promotional banner cards; a green band holding a white stats card ("450M" legally registered capital in baht, "356" cryptocurrencies, "5M+" registered users); a "Market Prices" section with tabs (All, Top Gainer, Top Loser, 24 hrs Vol.), pair filters and a table of currencies with price, 24-hour change in red, volume, a sparkline and an outlined "Trade" button; a "News" section on `#f5f5f5` with article cards; and a footer of service and policy links.

The feel is a regulated fintech, not a speculative dark terminal: a white and light-grey page, one saturated green, restrained shadows, and dense but calm tables. Copy is bilingual, English labels in the interface with Thai article and notice text beneath them ("แคมเปญ Deposit USDTO on STABLE รับ USDT..."). The voice is functional ("Buy & Sell Crypto with Bitkub Exchange", "Sign up for free") with trust figures in the stats card rather than hype.

Two floating support controls appear in the capture (a "Chatbox" pill at the left and a round green chat button at the right). They are support overlays, not part of the brand's UI, and are not documented as components.

## Colors

The palette is Bitkub's own and is published as CSS custom properties on `:root`, so every value below is both measured on rendered elements and named in the page's token set.

- **Primary `#00b359`** (`--bk-color-bg-bitkub`, `--bk-color-button-contained-buy-bg-default`) fills "Sign up" and "Sign up for free" and borders the "Trade" buttons; text on it is `#ffffff`. On hover the fill becomes `#00994d` (`green-deep`, measured on both Sign up buttons) and on press `#008040` (`--bk-color-button-contained-buy-bg-pressed`).
- **Green text `#00994d`** colors "Log in", "See all", the "All Pairs" chip text and the big stat figures (the figure "450M" measured at that color), and is the hover color of every nav link.
- **Ink `#0c0e0c`** is headings, nav links and primary body text. **Secondary ink `#6b7b70`** is the most-read text color (13,549 weighted characters): subtitles, table text and tab labels; **`#5f6d64`** is the text on grey components, and **`#a0aca4`** is placeholder and tertiary text.
- **Surfaces:** `#ffffff` is the header, cards and footer; `#f5f5f5` is the body background behind the News section; `#e5fff2` is the pale green fill of the active filter chip (`--bk-color-bg-positive`); `#ccffe5` is the chip hover fill; `#f1f3f2` is hover and disabled grey; `#e4e7e5` is the hairline and `#bbc4be` the secondary border.
- **Market status:** `#f04542` is negative price change (1706 weighted characters), with `#fde8e7` as the negative background; the positive text color is the same `#00994d`. Status colors `#f9b806` (warning, the "Notice" pill) and `#38b3fa` (info, the "New" tag) are also declared.
- **Banner colors** in the token set include a green-to-yellow gradient (`linear-gradient(90deg, #00b259 0%, #ffff19 100%)`), `#adee2b` and `#ffff1a`; they belong to campaign art, not the base interface. A `#02d767` neon glow shadow (`0 0 10px` and `0 0 5px`) was measured on one element.

Contrast is conventional: dark ink on white, white on `#00b359` for buttons.

## Typography

One family carries the whole interface: `"Graphik TH"`, self-hosted as `graphikth_regular`, `graphikth_regular_italic`, `graphikth_medium` and `graphikth_semibold` woff2 files under `/_next/static/media/` (preloaded in the HTML head), plus a second family declared as `Graphik TH Loop` for article body and serif roles. The measured weights are 400 (16,663 weighted characters), 500 (6,108) and 600 (262). Thai and Latin text use the same family.

| Token | Size / line | Weight | Used for |
|---|---|---|---|
| hero | 40px / 60px | 600 | "Buy & Sell Crypto with Bitkub Exchange", stat figures |
| display | 28px / 44px | 600 | section titles ("Market Prices", "News") |
| subheading | 20px / 32px | 500 | "Latest News" and card headings |
| lead | 16px / 26px | 400 | hero subtitle, stat captions (`#6b7b70`) |
| body | 14px / 24px | 400 | nav, tables, article copy |
| button | 16px / 18px | 500 | large buttons ("Sign up for free") |
| button-secondary | 14px / 16px | 500 | compact buttons ("Sign up", "Trade") |
| chip | 12px / 16px | 500 | filter chips, badges |

By weighted characters the page is 14px (20,658), 12px (1,021), 16px (741), 20px (300), 28px (214), 10px (51) and 40px (48). Letter spacing is `normal` and text transform is `none` throughout; the token set declares only `-.12px` for "remark" styles. The rem-style scale is `calc(16px*N)` with sizes of .625, .875, 1.25, 1.5 and 2.5 times 16px (for example `--bk-font-size-base-sans-4xl: calc(16px*2.5)` equals the 40px hero, with `--bk-line-height-base-sans-4xl: 60px`).

Font substitutes: the Graphik TH files are served by Bitkub itself and no license page was found; the CSS falls back to `graphikth Fallback` and `ui-sans-serif, system-ui, sans-serif` on the mobile header. Use those system fonts only if the files are unavailable to you.

## Layout

The page is 7,450px tall at 1280px. Content sits in a centred container whose widths are declared as `--bk-sizing-container-width-xs: 568px`, `-sm: 720px` and `-md: 992px`, with container gutters of `16px` (`sm`) and `24px` (`xl`); the stats card measures 1216px wide at the 1280px viewport and the hero heading block 438px wide. Breakpoints are declared as `--bk-breakpoint-xs: 568px`, `sm: 720px`, `lg: 1216px` and `xl: 1608px`.

Sections follow a vertical rhythm of full-width bands: header (64px high), notice strip, hero, banner cards, green band with an overlapping white stats card (padding `48px 160px`), market table, news cards on `#f5f5f5`, footer (padding `40px 0px 32px`, 721px high). Measured paddings: 16px (2,204 uses), 24px (1,836), 8px (1,156), 4px (46), 40px (29), 12px (10), 80px (6), 20px (6). Gaps: 4px (1,526), 8px (44), 16px (16), 30px (8), 40px (8), 24px (7), 20px (6), 32px (4). The token set also lists `--bk-global-space-3: 12px`, `-4: 16px`, `-10: 40px`, `-11: 44px`, `-15: 64px` and `-16: 72px`.

Market rows are table-like grids: a currency cell with a round coin icon, the pair code and the coin name in grey, then right-aligned price, change and volume columns, a mini chart and a right-aligned "Trade" button. News is a three-part arrangement in the capture: one large card at the left, two stacked image cards in the middle and two text-led articles at the right.

## Elevation & Depth

Shadows are soft and layered, from the token set: `--bk-shadow-base-dropdown: 0px 4px 8px 2px #0000000a, 0px -1px 8px 0px #00000005` (the header, measured as `rgba(0, 0, 0, 0.04) 0px 4px 8px 2px, rgba(0, 0, 0, 0.02) 0px -1px 8px 0px`), `--bk-shadow-base-raise-modal: 0px 4px 8px 2px #0000001a, 0px -1px 8px 0px #0000001a`, and `--bk-shadow-base-section-lg: 0px 16px 32px 8px #0000001a, 0px -1px 12px 0px #0000001a` (measured on the stats card, `rgba(0, 0, 0, 0.1) 0px 16px 32px 8px`). Buttons and chips have no shadow.

Depth comes from three layers: the white stats card floating over the green band, the header's faint lift, and the full-bleed hero art. The rest of the page is flat with hairlines (`#e4e7e5`, `#f1f3f2`). Focus rings declared in the CSS corpus (`--slds-g-shadow-outset-focus-1: 0 0 3px #0176d3` and Tailwind ring variables) were not measured on the home page and are not brand tokens. Blur is declared as `--bk-blur-base-bg-transparency: 10px`.

## Shapes

Radii come from `--bk-border-radius-*` and `--bk-global-border-radius-*`: 2px (`xs`), 4px (`sm`, and the button radius), 8px (`md`, 38 elements), 16px (`lg`, the stats card and `--bk-border-radius-component-sheet`), 100px (badges), 9999px and 50% for round icons. The most common radius is 4px, measured on 414 elements: all buttons, chips and inputs. Coin icons and avatars are circles. Promo banner cards are rounded rectangles.

Buttons are compact rectangles with a 4px radius and fixed heights from `--bk-sizing-button-height-base-*`: 24px (xs), 32px (sm) and 48px (lg). Icons are thin outlined line glyphs in grey or ink; the logo is a green interlocking mark with the wordmark "bitkub" and "EXCHANGE" in small tracked capitals.

## Components

**Primary button (`button-primary`, `button-primary-hover`).** `#00b359` fill, white Graphik TH 16px / 500, padding `12px 20px`, 48px high, 4px radius; hover `#00994d`. Used for "Sign up for free".

**Compact button (`button-secondary`).** The same green with 14px / 500 text, padding 8px, 32px high ("Sign up" in the header).

**Outlined button (`button-outlined`).** Transparent fill, 1px `#00b359` border, `#00994d` 14px / 500 text, padding 8px, 34px high, 4px radius: the "Trade" button in every market row.

**Filter chip (`chip`, `chip-hover`).** `#e5fff2` fill, `#00994d` 12px / 500 text, padding `4px 8px`, 26px high, 4px radius for the active chip ("All Pairs", "All Categories"); inactive chips are text in `#6b7b70` that take `#ccffe5` on hover.

**Notice badge (`badge-notice`).** `#f9b806` fill, white 12px / 500 text, padding `2px 8px`, 21px high, 100px radius.

**Stats card (`card-stats`).** White, 16px radius, padding `48px 160px`, large shadow; three centred figures in 40px / 600 green over 16px grey captions.

**Navigation (`nav`, `nav-link`, `nav-link-hover`).** White 64px header with the soft shadow, 14px ink links with 8px padding (each 40px high), turning `#00994d` on hover; "Log in" is green text that turns `#00b359` on hover.

**Tabs.** "All", "Top Gainer", "Top Loser", "24 hrs Vol." in 14px; the active tab is ink with a green underline, inactive tabs `#6b7b70` that turn ink on hover.

**Inputs (`text-input`).** 32px high, 14px text, used for the currency search box.

**Footer (`footer`).** White, 14px weight-500 links in grouped columns (the first is headed Our Services), padding `40px 0px 32px`.

## Design System Architecture

Bitkub does not link a public design-system site or brand guidelines from its home page, `/en/about` or `/th/content/press` (all opened); the system is the one shipped in the page. The `:root` of `https://www.bitkub.com/en` declares 400 custom properties, 381 of them prefixed `--bk-`, organised as a design-token tree:

- **Global colors** (`--bk-global-color-*`, 76 values): gray, green, red, yellow and blue ramps from 100 to 1800 (for example green-1400 `#00994d`, green-1500 `#008040`, gray-1100 `#6b7b70`, red-800 `#f04542`), transparent variants, and banner colors.
- **Semantic colors:** `--bk-color-bg-*`, `--bk-color-text-icon-*`, `--bk-color-border-*`, `--bk-color-link-*`, `--bk-color-component-*`, `--bk-color-button-*` (41 values across contained, outlined and texted variants for buy, sell, standard, subsidiary, danger and white) and `--bk-color-state-*` (38 hover and pressed states).
- **Typography:** `--bk-font-family-*` (38), `--bk-font-size-*` (25), `--bk-line-height-*` (31), `--bk-font-weight-*` (15), split by breakpoint and role (display, article, remark, button, link).
- **Sizing and spacing:** button heights, icon sizes (`--bk-sizing-base-icon-*`), container widths, gutters, dialog and button paddings (`--bk-padding-button-base-*`, `--bk-padding-dialog-*`) and `--bk-global-space-*`.
- **Shape and effect:** `--bk-border-radius-*`, `--bk-shadow-base-*`, `--bk-blur-base-bg-transparency`.

Alongside the tokens the page loads `/static/css/bootstrap-grid.min.css`, Font Awesome, slick-carousel from jsDelivr, `/static/css/bitkub.css`, and a Next.js chunk (`/_next/static/chunks/0u4-azs0tm_f4.css`), and carries Tailwind (`--tw-*`), react-toastify (`--toastify-*`) and Swiper variables. Components therefore combine the `--bk-*` semantic tokens with utility classes; the front matter mirrors the semantic names (primary, green-deep, surface-positive, negative, hairline).

## Do's and Don'ts

Do
- Use `#00b359` for the one primary action per view and darken to `#00994d` on hover and `#008040` when pressed.
- Keep ink at `#0c0e0c` and secondary text at `#6b7b70`; use `#00994d` for positive figures and `#f04542` for losses.
- Use 4px radii on buttons, chips and inputs, 16px on large cards, and keep buttons at 24px, 32px or 48px high.
- Put important figures in 40px / 600 Graphik TH over short grey captions.
- Keep shadows soft and layered, and reserve the large one for floating section cards.

Don't
- Do not introduce a second brand hue: banner gradients and the neon `#02d767` glow belong to campaign art.
- Do not copy the Chatbox pill, floating chat button, cookie or consent controls as components.
- Do not use hard black borders; hairlines are `#e4e7e5`, `#f1f3f2` or `#bbc4be`.
- Do not use uppercase or tracked labels; transform is `none` throughout.
- Do not round buttons into pills; the 100px radius is for badges only.

## Responsive Behavior

The token set declares `--bk-breakpoint-xs: 568px`, `sm: 720px`, `lg: 1216px` and `xl: 1608px`, container widths of 568px, 720px and 992px, and gutters of 16px (`sm`) and 24px (`xl`); the token names also split typography by `breakpoint-sm`, `-md` and `-lg`.

The 390px mobile pass measured: the page title "Market Prices" stays 28px / 44px at weight 600 (358px wide); body text stays 14px / 24px (a paragraph 342px wide); the primary button stays 16px / 500 with padding `12px 20px`, 158px wide and 48px high; and the header is 390px wide and 64px high on `#ffffff`, with the font family named `graphikth, "graphikth Fallback"`. The size distribution at 390px is 14px (14,688 weighted characters), 12px (3,994), 16px (761), 28px (214), 10px (81), 32px (48) and 20px (3); the 40px hero size is not present there, and 32px is. How the hero, stats card, table and news grid reflow is not measured, and no mobile capture image exists.

## Iteration Guide

1. Set the page on `#ffffff` with a `#f5f5f5` section for news, Graphik TH at 14px / 24px, ink `#0c0e0c` and secondary text `#6b7b70`.
2. Make one `#00b359` button style with white text, 4px radius and sizes 48px (16px text, `12px 20px`) or 32px (14px text, 8px padding); hover `#00994d`, pressed `#008040`.
3. Build market rows as a table: coin icon, pair in semibold, grey name, right-aligned figures, red `#f04542` negative changes, a sparkline, and an outlined `#00b359` "Trade" button.
4. Add filter chips (`#e5fff2` with `#00994d` text, 4px radius, 26px high) and badges (`#f9b806`, 100px radius).
5. Float white 16px-radius stat cards over a green band with the section shadow `0px 16px 32px 8px` at 10% black.
6. Prefer the published `--bk-*` token names when adding new values, and verify each against `web/data/extracted/bitkub.json` before use.
