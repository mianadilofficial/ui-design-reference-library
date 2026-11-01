---
version: alpha
name: "Effortel"
category: "Tech & AI"
description: "Effortel, an MVNE telecom platform: dark slate #22282a ground, cyan #66e8fa buttons with #22282a text, Satoshi Variable 800 at 58.368px for headlines, Et Mono uppercase buttons, 9.19px button radius."
colors:
  canvas: "#92a6b0"
  page-body: "#e4edf1"
  page-largest: "#22282a"
  ink: "#22282a"
  primary: "#66e8fa"
  on-primary: "#22282a"
  surface-2: "#000000"
  ink-secondary: "#394247"
  ink-2: "#b1c5ce"
  ink-3: "#5f6f77"
  ink-5: "#d5e1e7"
  ink-6: "#f5fcff"
  on-primary-hover: "#a9bcc5"
  card-bg: "#3b4144e6"
typography:
  display:
    fontFamily: "\"Satoshi Variable\", sans-serif"
    fontSize: 58.368px
    fontWeight: 800
    lineHeight: 64.2048px
    letterSpacing: "-1.75104px"
  display-mobile:
    fontFamily: "\"Satoshi Variable\", sans-serif"
    fontSize: 36px
    fontWeight: 800
    lineHeight: 39.6px
    letterSpacing: "-1.08px"
  subheading:
    fontFamily: "\"Satoshi Variable\", sans-serif"
    fontSize: 25.536px
    fontWeight: 800
    lineHeight: 28.0896px
    letterSpacing: "-1.02144px"
  body:
    fontFamily: "\"Satoshi Variable\", sans-serif"
    fontSize: 18.24px
    fontWeight: 400
    lineHeight: 27.36px
  button:
    fontFamily: "\"Et Mono\", Impact, sans-serif"
    fontSize: 13.8624px
    fontWeight: 400
    lineHeight: 13.8624px
    letterSpacing: "-0.415872px"
    textTransform: uppercase
rounded:
  xs: 6.57px
  sm: 6.93px
  md: 8.17px
  lg: 9.19px
  xl: 10.8px
  2xl: 10.94px
  3xl: 14.59px
  4xl: 18.24px
  cta: 9.19px
spacing:
  s1: 1px
  s2: 1.46px
  s3: 1.9px
  s4: 2.77px
  s5: 3.65px
  s6: 4.85px
  s7: 5.11px
  s8: 5.54px
  s9: 5.84px
  s10: 7.3px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    padding: 1px 53.9904px 1px 14.592px
    height: 41px
    borderColor: "{colors.primary}"
  button-primary-hover:
    textColor: "{colors.on-primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    padding: 1px 14.592px
    height: 36px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-2}"
    typography: "{typography.button}"
    padding: 1px 53.9904px 1px 14.592px
    borderColor: "{colors.page-largest}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-3}"
---

# Effortel

## Overview

Effortel (https://www.effortel.com/, page title "Effortel: Drive Telecom Revenue Growth | MVNE Solutions & Platforms") is a telecom software company selling an MVNE platform, the "Effortel Mobile Suite", with BSS/OSS capabilities. The 1280px capture is a dark slate page (`#22282a`) with a pale cyan accent. The top bar holds a square cyan logo tile and the lowercase wordmark "effortel", centred mono menu items (PRODUCTS +, SOLUTIONS +, RESOURCES +, SERVICES) and a cyan "GET IN TOUCH" button at the right. The hero is centred: a tiny bracketed mono kicker "[ RECOGNIZED AS THE BEST MVNE GLOBALLY ]", the headline "Streamline Operations, Skyrocket Revenue, and Delight Customers" in heavy sans, and two pill-rounded buttons (SERVICES outlined on dark, PRODUCT filled cyan), each with a square arrow tab. Beneath, a curved horizon of soft light, a "TRUSTED BY 100+ OF THE LARGEST COMPANIES" strip with customer logos, then a large blue-grey rounded panel (`#92a6b0`) headed "Unparalleled BSS/OSS Capabilities", with four tabs (BILLING, CHARGING, CATALOG, EVENTS), each with a pastel icon chip, above an illustrated product mock-up of tariff cards (an add-ons card with streaming service icons, a "TOTAL UNLIMITED" plan card, prices such as € 14.50 / month). Another section follows: "Intuitive Interface and Effortless Self-Management". The page is 8651px tall.

The voice is promotional and outcome-led, with mono bracketed kickers that give an engineering-console feel. Imagery is a mix of UI illustration in pale tones and real customer logos.

## Colors

Slate-and-ice neutrals, with one cyan accent. Values map to the site's own swatch variables.

- `page-largest` and `ink` `#22282a` (swatch n-800): the dominant background by area (11410) and also the text colour on light surfaces and on cyan buttons.
- `canvas` `#92a6b0` (n-500): the large rounded section panel.
- `page-body` `#e4edf1` (n-200): light surface; `ink-5` `#d5e1e7` (n-300): the h1 colour on dark; `ink-6` `#f5fcff` (n-100): the h2 colour on the dark panel; `ink-2` `#b1c5ce` (n-400): body text on dark; `ink-3` `#5f6f77` (n-600); `ink-secondary` `#394247` (n-700): most-read text colour on light areas (803 characters) and a background (1517).
- `surface-2` `#000000`: pure black areas (5120).
- Primary `#66e8fa` (a-400, a cyan): the fill of the "GET IN TOUCH" and PRODUCT buttons, with `#22282a` text. Hover on the cyan button lightens the fill to `rgb(156, 240, 252)` (`#9cf0fc`, a-200) and, for the PRODUCT button, changes the text to `#a9bcc5` (`on-primary-hover`).
- `card-bg` `#3b4144e6`: a translucent dark card fill.

The stylesheet also declares pastel category swatches: red `#fbcdcd`/`#fc9c9c`, yellow `#fee09f`/`#f7b430`, green `#e3ffd1`/`#b8fd83`, purple `#e2c9fb`/`#c38bfb`, blue `#9bf7ff`/`#6dadd6`, indigo `#d4ecf8`/`#97d1ef`/`#1f6086`, negative `#efcdd6`/`#d23356`/`#7e1137`, and teal `#dcf7fd`/`#68d4e3`/`#54a1ab`. These pastels colour the tab icon chips in the capture.

## Typography

Two families: Satoshi Variable (weights 300 to 900 loaded) for display and body, and Et Mono (400) for buttons, menu items and kickers. Satoshi covers 1685 measured characters and Et Mono 486.

- `display`: Satoshi Variable 800, 58.368px/64.2048px, letter-spacing -1.75104px. Mobile 36px/39.6px, -1.08px.
- `subheading` (h3): 800, 25.536px/28.0896px, -1.02144px.
- `body`: 400, 18.24px/27.36px (mobile 18px/27px). The root variables set body at weight 400 and line-height 1.5.
- `button`: Et Mono 400, 13.8624px, -0.415872px, uppercase; the stylesheet's mobile and tablet button size is 14px.
- Small text: 14.592px (734 characters), 16.489px (588), 11.6736px (194), with weights 450 and 700 in use.

Letter-spacing is slightly negative everywhere (variable `--letter-spacing--3`), and headings in the system are defined by variables such as `--h1--font-size-tablet: 56px`, `--h1--font-size-mobile: 36px`, `--h2--font-size-mobile: 36px`.

## Layout

Centred, section-stacked layout with contained panels. Container variables (`--container--small`, with tablet and mobile variants of `--common-used--size-6` and `16px`) set the side gutters; the h1 block is 708px wide on desktop. The product panel is a full-width rounded block inset from the viewport edges. Gap values measured include 7.296px (32 instances), 4.85184px (32), 29.184px (28), 16px (22) and 10.944px, so spacing is based on a fractional em scale (29.184px is twice 14.592px). Header content sits in a single row with logo left, links centred and CTA right.

## Elevation & Depth

No box-shadows were measured. Depth is made by tone: dark slate page, lighter blue-grey panel, still lighter inner card, and translucent `#3b4144e6` cards. The hero ends in a curved light-and-dark horizon (a gradient arc) that separates it from the next section. Borders are 1px solid in the fill colour (`#66e8fa` for cyan buttons, `#22282a` for dark ones), so they only define edges.

## Shapes

Radii are many but belong to one scale: 6.5664px, 6.9312px, 8.17152px, 9.19296px (the CTA radius, `cta`), 10.7981px, 10.944px, 14.592px (23 instances, cards), 18.24px, 20.137px, 21.888px (panels) and 72.96px. These correspond to the fractional em variables (`--border-radius--0-25`, `--0-5`, `--0-75`, `--1`, `--1-5`, `--2`) plus `--border-radius--size: 1000px` for fully round shapes. Buttons are 9.19296px to 10.7981px radius with a square arrow tab at the right edge; icon chips and tabs are rounded rectangles.

## Components

- Primary button: Et Mono 13.8624px uppercase, fill `#66e8fa`, text `#22282a`, border 1px solid `#66e8fa`, radius 9.19296px, height 41px, padding `1px 53.9904px 1px 14.592px` (room for the arrow tab), 126px wide. A second variant "GET IN TOUCH" is 36px high with padding `1px 14.592px`.
- Outlined/dark button: SERVICES, text `#b1c5ce` on `#22282a`, radius 10.7981px, height 42px, 134px wide.
- Menu items: Et Mono uppercase with a plus sign for dropdown items.
- Kicker: bracketed Et Mono caption above each headline.
- Tab chip: pastel icon square plus mono label (BILLING, CHARGING, CATALOG, EVENTS).
- Card: `#3b4144e6` fill and 14.592px radius (332px by 629px) on dark; `#22282a` cards at 20.137px radius (429px by 572px).

## Design System Architecture

No public design system, brand guideline or token package was found linked from the site. The CSS exposes a structured, token-like variable system (256 root variables) with a collection-style naming pattern: `--swatch--n-100` to `n-900` (neutrals), `a-*` (accent cyan), `i-*`, `p-*`, plus named hues; text presets `--h1--*`, `--h2--*`, `--p-body--*`, `--button-text--*` each with `-tablet` and `-mobile` size variants; `--font-family--display`, `--font-family--body`, `--font-family--monospaced`; radii `--border-radius--*`; containers `--container--small*`; and `--common-used--size-*` em sizes. Source: the root variables in the extraction of https://www.effortel.com/.

## Do's and Don'ts

Do:
- Use `#22282a` as the main ground with `#b1c5ce` body text and `#d5e1e7` headlines.
- Reserve cyan `#66e8fa` for primary actions and keep its text `#22282a`.
- Use Et Mono uppercase for buttons, menu and bracketed kickers.
- Round buttons about 9px and cards about 14.6px to 21.9px.
- Keep headings at weight 800 with negative tracking.

Don't:
- Do not use shadows; none were measured.
- Do not fill large areas with cyan.
- Do not set body text in Et Mono.
- Do not use pastel swatches for text; they colour icon chips.

## Responsive Behavior

The 390px pass measured: h1 36px/39.6px with -1.08px tracking (358px wide), h2 36px (342px wide), body 18px/27px (358px wide), and a PRODUCT CTA still present in the mobile extraction. Variables declare tablet sizes (h1 and h2 56px, button 14px) and mobile sizes (36px headings, 18px body, 14px buttons). Mobile character sizes recorded include 16px, 18px, 20px, 13px, 36px, 15.2px and 24px. Menu layout on mobile and breakpoints widths were not measured.

## Iteration Guide

1. Ground `#22282a`; panels `#92a6b0`; light surface `#e4edf1`; accent `#66e8fa`.
2. Satoshi Variable 800 for headings (58.368px desktop, 36px mobile), 400 at 18.24px for body; Et Mono 13.8624px uppercase for buttons.
3. Buttons: 9.19px radius, 41px high, arrow tab at right.
4. Pastel icon chips for tabs; kickers in brackets.
5. Run `node web/scripts/verify-designs.mjs --slug=effortel`.
