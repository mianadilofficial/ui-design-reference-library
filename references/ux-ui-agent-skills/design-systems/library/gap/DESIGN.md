---
version: alpha
name: Gap
category: "Fashion & Apparel"
description: "Gap (gap.com) is a US apparel storefront set in Gap Sans v1 weight 400 (55.7333px hero, 14px body), with black #000000 and white #ffffff controls, 0px-radius rectangular buttons, a black 46px brand bar, full-bleed lifestyle photography with white headlines, and neutral greys #757575 and #ededed."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-hover: "#ededed"
  ink-muted: "#757575"
  ink-faint: "#999999"
  promo-blue: "#0714f2"
  hairline: "#e7e7e74d"
  link-bg: "#ffffffbf"
typography:
  display:
    fontFamily: "\"Gap Sans v1\""
    fontSize: 55.7333px
    fontWeight: 400
    lineHeight: 59.7333px
    letterSpacing: "-1.01714px"
  display-mobile:
    fontFamily: "\"Gap Sans v1\""
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44px
  subheading:
    fontFamily: "\"Gap Sans v1\""
    fontSize: 22px
    fontWeight: 400
    letterSpacing: 0.2px
  body:
    fontFamily: "\"Gap Sans v1\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: "\"Gap Sans v1\""
    fontSize: 16px
    fontWeight: 400
    letterSpacing: 0.32px
  nav:
    fontFamily: "\"Gap Sans v1\""
    fontSize: 12px
    fontWeight: 400
    letterSpacing: 0.2px
  link:
    fontFamily: "\"Gap Sans\", Helvetica, Arial, Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    textTransform: uppercase
  input:
    fontFamily: "\"Gap Sans v1\""
    fontSize: 12.8px
    fontWeight: 400
    letterSpacing: 0.32px
rounded:
  xs: 1.5px
  sm: 2px
  md: 2.5px
  none: 0px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 44px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 0px 16px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 0px 0px 0px 4px
    height: 16px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 0px 18px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

Gap's US home page (https://www.gap.com/, title "Gap Individual style for Women's, Men's, Baby & Kids' Clothing", measured at 1280px wide with a 4077px scroll height) is a promotion-led apparel storefront. A 46px black utility bar lists the sister brands Gap, Gap Factory, Old Navy, Banana Republic and Athleta with account and bag icons at the right. Beneath it a white header carries the Gap wordmark and the category links Women, Men, Girls, Boys, Baby & Toddler, Accessories and GapX plus a search field; a seasonal promotional strip with underlined text links ("Friends & Family, 40% off everything") sits above a two-panel full-bleed hero: lifestyle photography of children and apparel with a large white headline, short white supporting copy and white rectangular buttons.

The page then alternates full-bleed campaign bands (for example "50% off matching PJs", "Back in stock, The Hailey Jean.") with a four-up "For every generation." row (Women, Men, Kids, Baby & Toddler) and a footer carrying email sign-up, a Gap Good Rewards credit card, an app download QR code and link columns. The voice is upbeat and short: fragments such as "Color your sweats." and "Bright. Cozy. Made to match." The cookie notice visible in the capture is a third-party consent layer and is not brand UI.

## Colors

Gap's interface is neutral: `{colors.canvas}` (#ffffff) dominates background area (2177), `{colors.ink}` (#000000) is the main text colour (1362 characters) and `{colors.primary}` is also #000000 because the measured primary action is the black "Sign up" button with white text. White text (496) appears on photographs and the black utility bar. Secondary greys: `{colors.ink-muted}` (#757575, 367 characters, footer link text) and `{colors.ink-faint}` (#999999, 41). `{colors.surface-hover}` (#ededed) is the hover fill of the white hero buttons (measured on "Shop the CashSoft Collection": #ffffff to #ededed). `{colors.hairline}` (#e7e7e74d) is the one border colour and `{colors.link-bg}` (#ffffffbf) is the translucent white behind skip links.

`{colors.promo-blue}` (#0714f2) is the colour of the promotion heading text on the seasonal strip ("Friends & Family"), measured at 16 characters; the strip's background in the capture is a soft blue gradient that was not tokenised. #00008b (34 characters) belongs to links inside the consent dialog and is not a brand colour. Root variables also publish crossbrand colours (for example --crossbrand-color-text-sale #bc0712, --crossbrand-color-text-error #bc0712, --crossbrand-b1 #0466ca), but none was measured on rendered home-page elements, so they are not tokenised.

## Typography

Gap Sans v1 is the interface face (2020 characters) with Gap Sans for the skip links (171) and ui-sans-serif inside the consent dialog (322); both Gap Sans files are loaded as variable fonts (weight range 100 to 1000), but only weight 400 was measured, on all 2521 characters. Root variables declare `--font-family-font1` and `--font-family-font2` as Gap Sans, with `--font-weight-450` and `--font-weight-500` available. Gap Sans is proprietary; Helvetica or Arial (the stack used on the skip link: "Gap Sans", Helvetica, Arial, Roboto, sans-serif) is the closest declared fallback.

Scale: display 55.7333px/59.7333px with -1.01714px tracking (hero headline, white on photography), 40px/44px on mobile, subheading 22px with 0.2px tracking (footer section titles), a 27.0857px size for category headings, 16px with 0.32px tracking on buttons, 14px/18px body, 12px navigation with 0.2px tracking, 12.8px with 0.32px tracking in inputs, and 10px small labels. Skip links are uppercase 16px; everything else is sentence case.

## Layout

The utility bar is 46px tall and the header navigation links carry 0px 16px padding at 12px type. Measured gaps: 16px (46 occurrences), 8px (38), 12px, 32px, 4px, 64px and 6px; paddings 16px, 12px, 8px, 24px, 32px, 64px, 2px, 4px, 10px, 45px, 60px, 48px and 25px. The hero is split into two equal half-width photographic panels; campaign bands are full width with text anchored bottom-left; the generation row is four equal tiles with underlined text labels beneath.

## Imagery and Voice

Photography is studio-clean lifestyle imagery: children laughing in knitwear, families in matching pyjamas, a model seated in loose denim against a grey backdrop. Backgrounds are pale grey or white so garments carry the colour. Headlines are brief and conversational, supporting copy is one or two short sentences ("Our signature collection that feels cashmere-soft. Wear warmly. Wash easily."), and calls to action are plain verbs such as "Shop GapJeans", "Shop new arrivals" and "Explore the guide".

## Elevation & Depth

Almost flat. The only box shadow measured is `rgba(0, 0, 0, 0.2) 0px 0px 18px 0px`, on the consent dialog, so no product-surface shadow is documented. Depth comes from full-bleed photography with white text and white buttons laid over it.

## Shapes

Edges are square. The black Sign up button, the white hero buttons and the search input all have 0px radius. Small radii measured: 1.5px, 2px, 2.5px (the consent dialog) and a bottom-only `0px 0px 3px 3px`. Photographs are cropped to hard rectangles.

## Components

- Primary button ("Sign up"): black #000000 fill, white 16px text with 0.32px tracking, 0px radius, 0px 16px padding, 44px high, 81px wide.
- Hero buttons ("Shop GapSweats", "Shop new arrivals"): white fill, black text, 0px radius, with a chevron for menus; 42px high with 12px padding on mobile; the fill turns #ededed on hover.
- Utility nav: black bar, white 12px text, 0.2px tracking, 0px 16px padding per link.
- Text input: 12.8px text, 0.32px tracking, 16px high field with 4px left padding, in the header search and the email sign-up.
- Text links: underlined black 12px labels for sub-navigation and tile captions.
- Footer: white, 648px tall, with 22px section titles and grey link columns.

## Design System Architecture

No public design system or brand guideline page was found in the home page content (WebFetch listed navigation, sister brands and skip links only). The shipped CSS shows a token-driven system with Tailwind-style utility variables (--tw-ring-color) alongside numeric scales: --font-size-12/13/16/44/64/76/89/90, --spacing-200 (16px), --spacing-375 (30px), --border-radius-025 (2px), --border-radius-050 (4px), --border-radius-125 (10px), --border-radius-250 (20px), --font-letter-spacing-20/32 (.2px/.32px) and --font-weight-400, together with a crossbrand layer (--crossbrand-b1, --crossbrand-font-size-base-lg 18px) shared by the sister brands. Only the values used by the measured elements are tokenised here.

## Do's and Don'ts

- Do set text in Gap Sans at weight 400 with slight positive tracking (0.2px to 0.32px) at small sizes and negative tracking only for the hero.
- Do use black and white only for controls: black fill with white text, or white fill with black text.
- Do keep corners square and avoid shadows on product surfaces.
- Do lay white headlines and white buttons directly on edge-to-edge photography.
- Don't tokenise cookie-dialog colours (#00008b) or its shadow as brand tokens.
- Don't add accent colours to buttons; the accent appears only as promotional text colour.

## Responsive Behavior

At 390px the hero headline measured 40px/44px, black on the mobile layout; the second heading was 24px/25.6px; body text stayed 14px/18px; the utility bar was 92px tall with 10px type; and the black full-width button measured 358px wide by 44px with 0px 48px padding. Mobile font sizes by characters: 14px (977), 12px (389), 13.12px (322), 16px (267), 22px (95), 10px (65), 40px (51). Breakpoints and column collapse were not measured.

## Iteration Guide

1. Start with a white canvas, black text and Gap Sans 400; use photography for colour.
2. Build controls as 0px-radius rectangles: black with white text (44px high) or white with black text over images.
3. Keep headings short, sentence-case and punchy, with 55.7333px as the largest size.
4. Use #757575 for secondary text and #ededed for the hover fill of white buttons.
5. Treat anything not listed here (dark mode, sale colours, sticky header behavior) as not measured.
