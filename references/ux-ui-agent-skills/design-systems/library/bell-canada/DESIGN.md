---
version: alpha
name: Bell Canada
category: "Telecom"
description: "Bell Canada's consumer site (bell.ca): a warm off-white #f9f8f6 and white page with Bell blue #0070ce pill buttons, deep navy #003778 footer, a #00549a header, Satoshi variable text at weights 450 and 550, the BellSlimRev Heavy display face with -1.5px tracking, and white 10px-radius offer cards outlined in #eeece5."
colors:
  canvas: "#f9f8f6"
  page-largest: "#ffffff"
  ink: "#555555"
  ink-strong: "#111111"
  ink-muted: "#666666"
  ink-navy: "#003078"
  ink-link: "#00549a"
  ink-on-navy: "#c2cedf"
  ink-on-blue: "#a8cdff"
  primary: "#0070ce"
  on-primary: "#ffffff"
  surface-navy: "#003778"
  surface-blue: "#00549a"
  surface-vellum: "#eeece5"
  surface-pale-blue: "#f5f8fb"
  hairline: "#11111129"
  border-grey: "#e1e1e1"
  skip-link-bg: "#2d2e33"
  success-green: "#1e7c02"
typography:
  display:
    fontFamily: satoshi-variable
    fontSize: 22px
    fontWeight: 550
    lineHeight: 30.8px
  display-mobile:
    fontFamily: satoshi-variable
    fontSize: 20px
    fontWeight: 550
    lineHeight: 30.8px
  display-brand:
    fontFamily: "\"BellSlimRev Heavy\""
    fontSize: 40px
    fontWeight: 700
    letterSpacing: "-1.5px"
  heading:
    fontFamily: satoshi-variable
    fontSize: 16px
    fontWeight: 550
    lineHeight: 19.6px
  body:
    fontFamily: satoshi-variable
    fontSize: 16px
    fontWeight: 450
    lineHeight: 22.4px
  button:
    fontFamily: satoshi-variable
    fontSize: 16px
    fontWeight: 550
    lineHeight: 22.8571px
  button-small:
    fontFamily: satoshi-variable
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17px
  nav:
    fontFamily: satoshi-variable, Helvetica, Arial, sans-serif
    fontSize: 11px
    fontWeight: 400
    lineHeight: 15.7143px
    textTransform: uppercase
  link:
    fontFamily: satoshi-variable
    fontSize: 12px
    fontWeight: 450
    lineHeight: 12px
  footer:
    fontFamily: satoshi-variable
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.5714px
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 16px
  xl: 20px
  2xl: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 9px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 20px
    height: 41px
    borderColor: "{colors.primary}"
  button-tab:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 32px
    height: 58px
    borderColor: "{colors.border-grey}"
  button-outline-header:
    textColor: "{colors.page-largest}"
    typography: "{typography.button-small}"
    rounded: "{rounded.xl}"
    padding: 7px 20px 8px
    height: 36px
    borderColor: "{colors.page-largest}"
  link:
    textColor: "{colors.ink-link}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.surface-blue}"
    textColor: "{colors.page-largest}"
    height: 119px
  skip-link:
    backgroundColor: "{colors.skip-link-bg}"
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
    padding: 9px 12px
    height: 34px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
    borderColor: "{colors.surface-vellum}"
    height: 630px
  footer:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.page-largest}"
    typography: "{typography.footer}"
    padding: 30px 0px
    height: 421px
---

## Overview

`https://www.bell.ca/` (title "Bell | Wireless, Internet and TV Service Provider in Canada") is the consumer storefront of Bell Canada, 4,762px tall at 1280px wide. It is a promotional, card-driven retail page: a blue utility-and-main header (the "Bell" wordmark, audience links Personal, Business and Bell for Better, utility links Find a store, Accessibility and a language switch, then the nav Mobility, Internet, TV & streaming, Bundles, Home phone, Deals, Support with search, cart and an outlined "Log in" button); a row of five pill shortcuts (Mobility plans, Internet, Phones, TV, Streaming) beside "Already a Bell customer? Log in to MyBell"; a two-by-two grid of large white offer cards ("Hello, hello.", "Your home will thank you.", "Get 100 GB for only $60/mo.", "Pure fibre Internet, Fibe TV and Crave."); an "Offer spotlight" carousel of three product cards; a blue gradient brand banner ("Connection is everything"); a beige awards band; a "Shop Bell services" tile grid (Mobility plans, Phones, Internet, Streaming, Smartwatches, Tablets, TV, Home phone); and a navy footer with columns "About us", "Customer resources" and "Get in touch".

Offers lead with a small blue category label ("Mobility", "Internet + TV"), a large headline, price copy ("From $105/mo."), a "BONUS" tag where one applies, one or two pill buttons and a product or lifestyle photograph at the lower right. Superscript footnote markers run through the copy and open a footnote drawer; that drawer and a dismissible region notice ("Your current region: Ontario") overlay the capture and are excluded as overlays. The first capture of this page showed a different hero (a blue panel with a large white headline about an iPhone), so the hero varies between loads and its sizes are not part of the current measurement.

## Colors

- **Surfaces:** `page-largest` `#ffffff` (4,251 area units) holds cards; `surface-navy` `#003778` (1,002) is the footer; `surface-vellum` `#eeece5` (942, declared `--border-color-vellum` and `--lightgrey-bg`) is the beige awards band and the card border; `surface-blue` `#00549a` (862, declared `--blue-bg`) is the header; `canvas` `#f9f8f6` (570, `--color-light-vellum`) is the page background; `surface-pale-blue` `#f5f8fb` is a small measured tint.
- **Text:** `ink` `#555555` (1,625 characters, body copy, declared `--text-color-grey`), `ink-strong` `#111111` (854, headings), white (775), `ink-muted` `#666666` (530), `ink-link` `#00549a` (433, links and footnote markers), `primary` `#0070ce` (115, category labels and tab text), `ink-navy` `#003078` (85, declared `--color-dark-blue`), `ink-on-navy` `#c2cedf` (67) and `ink-on-blue` `#a8cdff` (59) on dark surfaces.
- **Action:** `primary` `#0070ce` (declared `--color-online-blue` and `--text-color-blue`) fills pill buttons with white text and a 1px same-colour border. Tab pills invert it: white fill, `primary` text, 1px `border-grey` `#e1e1e1` border. On hover the tab pills take a wash of `rgba(0, 84, 153, 0.08)` while the text stays `rgb(0, 112, 206)`.
- **Lines:** `hairline` `#11111129` (10 uses), `border-grey` `#e1e1e1` (8), `surface-vellum` `#eeece5` (4).
- **Utility:** `skip-link-bg` `#2d2e33` is the fill of the "SKIP TO MAIN CONTENT" link; `success-green` `#1e7c02` is declared as `--color-green` (no use was identified on the page).

The stylesheet also declares `--primary-bg` `#4f46e5`; it is not a measured background or text colour and is not a brand token.

## Typography

Two loaded families: satoshi-variable (weights 300 to 900, 4,536 measured characters) for nearly all text and BellSlimRev Heavy (117 characters) for display headings. Satoshi's declared fallback in the nav stack is `Helvetica, Arial, sans-serif`; the BellSlimRev face declares none in the measured rule. Both are licensed or custom faces, so only declared fallbacks are documented.

- `display` Satoshi 22px / 550 / 30.8px (the measured h1 role, a card headline such as "Hello, hello."); `display-mobile` 20px / 550 / 30.8px.
- `display-brand` BellSlimRev Heavy 40px, weight 700, with -1.5px tracking: section titles like "Offer spotlight". In the current measurement 40px with -1.5px is recorded on 108 characters; the 700 weight and the section-title attribution come from this page's first extraction, before the re-measure.
- `heading` 16px / 550 / 19.6px for the blue category labels; `body` 16px / 450 / 22.4px; `button` 16px / 550 / 22.8571px; `button-small` 14px / 400 / 17px for the header "Log in".
- `nav` 11px / 400 / 15.7143px uppercase (the page's `body` style); `link` 12px / 450 / 12px for footnote markers; `footer` 13px / 400 / 18.5714px.

Sizes by characters: 16px (2,239), 12px (913), 18px (701), 13px (209), 14px (197), 40px (108), 22px (104), 8px (48), 10px (27), 7.2px (27), 15px (24) and 11px (20). Weights: 450 (2,096), 550 (1,280), 400 (1,099), 700 (123), 650 (38), 800 (9) and 750 (8). The only letter-spacing measured is -1.5px at 40px.

## Layout

The declared `--max-container-width` is 1920px. The header is 119px tall (utility row plus main row). Below it the page uses two content widths: shortcut pills and offer cards run inside a left and right page margin (paddings of 64px were measured 13 times), and full-bleed bands (the beige awards band, the navy footer) run edge to edge. Offer cards are 566px by 630px and sit in a two-column grid in the capture. Measured gaps are 20px (8 uses), 8px (14), 4px (6), 19px (4) and 30px (4). The "Shop Bell services" grid is four tiles per row with a light border and product art. The footer is 421px tall with `30px 0px` padding and three link columns, an "Accessibility centre" outlined button, social icons and the line "© Bell Canada, 2026. All rights reserved."

Measured paddings: 32px (31 uses), 10px (29), 12px (14), 64px (13), 20px (10), 8px (9), 17px (9), 9px (8), 15px, 16px, 3px and 5px.

## Elevation & Depth

Cards are flat with a 1px `{colors.surface-vellum}` border; depth is mostly tonal (white cards on `#f9f8f6`, a beige band, a navy footer). One shadow was measured, `rgba(17, 17, 17, 0.16) 0px 12px 24px 0px`; the element carrying it was not identified, and the capture's footnote drawer overlay (excluded) also shows a shadow. No shadow was measured on cards or buttons.

## Shapes

Pills dominate: the measured radii by frequency are 1000px (19 elements: the pill buttons and shortcut pills), 16px (16 elements), 10px (4: offer cards), 50% (3), 4px (2), `0px 0px 8px` and `0px 0px 8px 8px` (2 each; the first is the skip link), 20px (2, the "Log in" button), 8px (1) and two top-rounded values, `16px 16px 0px 0px` and `24px 24px 0px 0px` (1 each). Buttons use `rounded.pill`, cards `rounded.md`, the header "Log in" `rounded.xl`.

## Components

- **Primary pill ("Learn more", "Shop plans", "Shop now"):** `{colors.primary}` fill, white Satoshi 16px / 550 label, 1px primary border, `8px 20px` padding, 41px tall, 115px to 125px wide.
- **Shortcut tab pill ("Mobility plans", "Phones"):** white fill, `{colors.primary}` 16px / 550 text, 1px `{colors.border-grey}` border, `16px 32px` padding, 58px tall (188px and 177px wide) with a line icon; hover adds the 8% blue wash.
- **Secondary outline pill ("Call 1 877 852-8224"):** white fill with a thin outline and `{colors.ink-link}` text; hover adds the same wash.
- **Header "Log in":** transparent with a 2px white border, white 14px text, 20px radius, `7px 20px 8px` padding, 82px by 36px.
- **Offer card:** white, 10px radius, 1px `{colors.surface-vellum}` border, 566px by 630px, blue category label (`{typography.heading}`), 22px headline, body copy in `{colors.ink}`, pill buttons and an image.
- **Bonus tag:** a small label reading "BONUS" in white 12px / 550 text on a dark-blue fill (fill not measured).
- **Footer:** `{colors.surface-navy}` with 13px white and `{colors.ink-on-navy}` text.

## Design System Architecture

No public design-system or brand-guideline page was found: the home page lists no brand guidelines, press kit, design system, developer portal or GitHub link (its footer links are About us, Customer resources and Get in touch groups, including "Bell Media" and "Bell for Better"). The de-facto system is a small set of 27 `:root` custom properties: named colours (`--color-online-blue` `#0070CE`, `--color-blue2` `#00549A`, `--color-blue3` `#003778`, `--color-dark-blue` `#003078`, `--color-green` `#1E7C02`, `--color-light-vellum` `#F9F8F6`, `--border-color-vellum` `#EEECE5`, `--color-lightgrey` `#E1E1E1`, `--color-darkgrey` `#555`, `--color-black` `#111111`), text colours (`--text-color-grey`, `--text-color-black`, `--text-color-blue`, `--text-color-white`), background aliases (`--blue-bg`, `--lightgrey-bg`, `--lightgrey-bg-secondary`), font families (`--font-family-title` for the BellSlim heavy face, `--font-family-primary` and `--font-family-variable` for Satoshi) and `--max-container-width`. There is no spacing, radius or type-scale variable; those values are applied directly.

## Do's and Don'ts

- Do use Bell blue `{colors.primary}` pills for every action and white pills with blue text for shortcuts.
- Do set offers on white 10px-radius cards with a 1px vellum border and a small blue category label.
- Do use BellSlimRev Heavy with -1.5px tracking for large titles and Satoshi at weights 450 and 550 for everything else.
- Do alternate the warm `#f9f8f6` page, white cards, a beige band and a navy footer.
- Don't add shadows to cards or buttons.
- Don't document the footnote drawer, the region notice or other overlays as brand components.
- Don't use the declared `#4f46e5` as a brand colour.

## Responsive Behavior

Measured at 390px: the h1 role is 20px / 550 / 30.8px (276px by 31px) against 22px on desktop; the h2 role is 16px / 550 / 19.6px (276px wide); body copy stays 16px / 450 / 22.4px (342px by 291px); the primary pill keeps its 16px type and `8px 20px` padding (125px by 41px); the header is 390px by 54px (1280px by 119px on desktop). By characters the mobile sizes are 16px (2,123), 12px (886), 18px (656), 14px (191), 28px (110), 20px (104), 8px (48), 10px (27), 7.2px (27) and 11px (20), against 40px (108) and 22px (104) among the desktop sizes. Breakpoint values, card column counts and the mobile navigation presentation are not measured.

## Iteration Guide

1. Set `canvas` `#f9f8f6`, `page-largest` `#ffffff`, `ink` `#555555`, `ink-strong` `#111111`, `primary` `#0070ce` and `surface-navy` `#003778`.
2. Load Satoshi variable (450 and 550 are the working weights) and the BellSlimRev Heavy display face with -1.5px tracking.
3. Build a blue header with 11px uppercase utility links, a main nav and an outlined "Log in".
4. Add five white shortcut pills, then a two-column grid of 566px by 630px white cards with 10px radius and 1px `#eeece5` borders, each with a blue label, a headline, price copy and 41px pills.
5. Close with a beige band, a service-tile grid and a navy footer.
6. Check mobile against the 390px values above; everything else is not measured.
