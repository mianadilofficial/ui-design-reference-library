---
version: alpha
name: The Stock Exchange of Thailand (SET)
category: "Thai Brands"
description: "SET home page: market-data portal with amber #fbb034 primary buttons and tabs, charcoal #1e1e21 and #2a2e34 modules on white #ffffff, DB Helvethaica X headings with Sarabun 14px body, pill search field, 0px-radius primary button, red #ff3c3c declines."
colors:
  canvas: "#ffffff"
  ink: "#1e1e21"
  primary: "#fbb034"
  on-primary: "#1e1e21"
  surface-2: "#2a2e34"
  ink-3: "#3f444a"
  ink-4: "#717478"
  ink-5: "#72767d"
  market-down: "#ff3c3c"
  hairline: "#f1f2f3"
  primary-hover: "#f39b0a"
  text-input-text: "#212529"
  text-input-border: "#424549"
  card-text: "#2d3748"
typography:
  display:
    fontFamily: "\"DB Helvethaica X\", sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: 0.5px
  display-mobile:
    fontFamily: "\"DB Helvethaica X\", sans-serif"
    fontSize: 31.5px
    fontWeight: 700
    lineHeight: 34.965px
    letterSpacing: 0.5px
  heading:
    fontFamily: "\"DB Helvethaica X 75 Bd\", sans-serif"
    fontSize: 62px
    fontWeight: 500
    lineHeight: 68.82px
  subheading:
    fontFamily: "\"DB Helvethaica X 65 Med\", sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 22.2px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 25.2px
  button:
    fontFamily: "\"DB Helvethaica X\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"DB Helvethaica X 65 Med\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 22.2px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 7px
  2xl: 26px
  3xl: 28px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 5.2px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 12px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7px 16px
    height: 62px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 5px 0px
    height: 32px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 4px 80px 4px 24px
    height: 40px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.card-text}"
    rounded: "{rounded.none}"
    padding: 24px 0px
    borderColor: "{colors.primary}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-4}"
    rounded: "{rounded.none}"
---

# The Stock Exchange of Thailand (SET)

## Overview
The measured page is the English home page of the Stock Exchange of Thailand (set.or.th/en/home), 1280px wide and 4560px tall. It is a dense market-data portal in a white, charcoal and amber palette. The capture shows a grayscale royal-memorial banner across the top ("In Remembrance of Her Majesty Queen Sirikit The Queen Mother ..."), which is a tribute overlay and is not treated as brand UI. Below it a SET100 index ticker row (status chip, last, change, value, volume, last update, EN language switch) and a red "Market Alerts" news ticker run across the page. The header shows the SET logo, a pill search field ("Search quote, news and content"), "Search Symbol / Factsheet", a grid icon and an amber "SET Member" button. The main menu lists Market Data, Issuer Services, Rules and Regulations, Services, Research and About SET. A gradient banner ("The Trusted Gateway to Inclusive Opportunities") leads into a large white market panel: an index table (SET, SET50, SET50FF, SET100, SET100FF, sSET, SETCLMV, SETHD, SETESG, SETWB), an intraday chart, a Trading Summary / Accumulated Trading Summary tab pair, investor-type net buy and sell figures, and a Top 5 stock strip. Further sections: a four-part black navigation strip (For Investors, For Institutional Investors, For Listed Companies, For Members), a Digital Roadshow banner, a dark news-and-calendar module, "In Focus" and facts, "Opportunity in Investing IPO" cards, and a dark footer.

Voice and imagery: copy is institutional and bilingual-aware (English interface with Thai e-learning promos in the earlier capture). Section titles are short noun phrases ("Top 5", "In Focus", "Opportunity in Investing IPO", "Digital Roadshow"), with the word IPO highlighted in amber inside a charcoal heading. Imagery is mostly promotional banners with SET's orange-gold swirl logo, a globe-and-network background for the roadshow, and company logos on IPO cards. Information density is high: tables, tickers, calendars and chips are packed into panels with small 12px to 14px type, balanced by wide white margins around the main modules.

## Colors
- Canvas: #ffffff (5342 weighted area). Charcoal surfaces: #2a2e34 (768) and #1e1e21 (622); light greys #f1f2f3 and #f2f3f4.
- Primary: #fbb034, SET amber (also `--bs-primary` in the site's Bootstrap variables). On-primary: #1e1e21. A darker hover amber #f39b0a is recorded.
- Ink: #1e1e21 (1182 characters), #3f444a, #717478 and #72767d for secondary text, #212529 for Bootstrap body text and text inputs, #2d3748 on cards.
- Market-down red: #ff3c3c (130 characters), used for negative changes; market-up values appear in green in the capture, but a green hex was not among the leading measured colors, so none is declared. Blue #3c6be4 (118 characters) is used for linked symbols in the capture.
- Other: #424549 input border, #ffd9d9 pale red for holiday/alert highlights, #757575 and a translucent #1e1e2180.
Bootstrap and Swiper defaults (`--bs-body-color: #212529`, `--swiper-theme-color: #007aff`) appear in the root; #007aff is a framework default and not a brand color.

## Typography
Two families: DB Helvethaica X (regular, "65 Med" and "75 Bd" as separate font files) for display, buttons and labels, and Sarabun (400, 500, 700) for Thai and English body text and nav. Both are web fonts with `sans-serif` fallback.
- Display: DB Helvethaica X 48px / 48px, weight 700, +0.5px tracking (index value "1,573.01"; mobile pass: 31.5px / 34.965px, +0.5px).
- Heading: DB Helvethaica X 75 Bd 62px / 68.82px (the "In Focus" title).
- Subheading: DB Helvethaica X 65 Med 20px / 22.2px.
- Body: Sarabun 14px / 25.2px. Nav: Sarabun 16px / 24px.
- Button: DB Helvethaica X 20px / 20px; secondary button 20px / 22.2px.
Character counts: Sarabun 1782, DB Helvethaica X 1251, 65 Med 492, 75 Bd 253. Sizes: 14px (1116), 20px (866), 12px (629), 24px (432), 18px (238), 30px (221).

## Layout
The page is a stack of data panels on a white page with full-width dark modules. The header zone is 116px tall (nav measurement). Panels are inset cards with soft shadows; the market panel splits into a left index table and a right trading summary column. The four-part black strip sits full width with plus-icon controls. The news module is two columns with a calendar on the right. Footer: #1e1e21 background, 221px tall, with #717478 legal text, social icons, and a bottom link row. Spacing values: 4px, 5px, 5.2px, 6px, 7px, 8px, 9px, 10px, 12px and 15px.

## Elevation & Depth
Use elevation sparingly and consistently: white panels float on a white page with the soft shadow, while charcoal modules (#1e1e21, #2a2e34) are separated by color only. The sticky ticker and header area sit above content without a separate shadow value in the measurement.
Shadows recorded: `rgba(0,0,0,0.11) -2px 9px 19px 0` (8 uses, panels), `rgba(0,0,0,0.15) 0 7px 10px 0` (1) and a 3.2px transparent ring. The market panel and IPO cards float on the page with the soft shadow; dark modules rely on color contrast.

## Shapes
Radii: 4px (87), 9999px (42, search field and chips), 2px (13), `4px 4px 0 0` (8, tabs), 7px (8), 100% and 50% (circles), `0 0 3px 3px` (4). Primary buttons are square (0px); tabs have rounded tops; the input is a pill.

## Components
- **Primary button (SET Member)**: #fbb034 fill with 1px #fbb034 border, #1e1e21 text, DB Helvethaica X 20px, 0px radius, 7px 16px padding, 62px high. Hover fill #f39b0a.
- **Tab button (Trading Summary)**: amber, 20px text, `4px 4px 0 0` radius, 32px high, 5px 0 padding.
- **Outlined button (More, SET50)**: transparent with 1px solid border, 4px radius, 42px high.
- **Search input**: white, pill radius, 40px high, padding 4px 80px 4px 24px, #424549 border.
- **Card**: white, #2d3748 text, 24px 0 padding, #fbb034 border color.
- **Nav links**: Sarabun 16px.
- **Data table**: 12px to 14px numerals, green up and #ff3c3c down indicators with triangle glyphs.
- **Footer**: #1e1e21 with #717478 text.

## Design System Architecture
The site is built on Bootstrap (root variables `--bs-primary: #fbb034`, `--bs-body-color: #212529`, `--bs-body-font-size: 1rem`, `--bs-body-font-family`) with Swiper for carousels, so the de-facto system is Bootstrap's theme overridden with SET's amber and two Thai-capable families. The home page was scanned for brand, press, design-system and guideline links and none were found; no public documentation was opened.

## Do's and Don'ts
Each rule here is limited to what the measurement and capture show.
- Do use amber #fbb034 for primary actions and tabs, with #1e1e21 text on it.
- Do pair DB Helvethaica X for headings and numerals with Sarabun for running text.
- Do use #ff3c3c for declines and keep numerals aligned in tables.
- Don't document the royal memorial banner or its grayscale treatment as brand UI.
- Don't use Swiper's #007aff.
- Don't round the primary button; it measures 0px.

## Responsive Behavior
Scope: one desktop pass at 1280px and one mobile pass at 390px were measured; nothing else was recorded.
Mobile pass at 390px: the first heading is "SET" at 31.5px / 38px high, weight 700. Nav collapse, panel stacking and table behavior were not measured.

## Iteration Guide
1. Tokens: canvas #ffffff, ink #1e1e21, primary #fbb034, surface #2a2e34, hairline #f1f2f3, market-down #ff3c3c.
2. Type: DB Helvethaica X for headings and numerals, Sarabun 14px body.
3. Build header with pill search and amber SET Member button, then the market panel with tab pair.
4. Add the black four-part navigation strip and dark news module.
5. Run `node web/scripts/verify-designs.mjs --slug=set-exchange`.
Not measured: dark mode, motion, green up-color hex.
