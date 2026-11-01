---
version: alpha
name: FWD Thailand
category: "Thai Brands"
description: "FWD Thailand (fwd.co.th/en) is a life insurance site built on the FWDCircularWeb typeface (300 body, 700 headings, 48px hero) with FWD orange #e87722 buttons and 2px outlines, cream #fef9f4 product cards with 16px radius and soft shadows, peach #fae4d3 promo bands, mint #6eceb2 discount badges and lifestyle photography."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#e87722"
  on-primary: "#ffffff"
  surface-cream: "#fef9f4"
  surface-peach: "#fae4d3"
  surface-grey: "#edeff0"
  accent-mint: "#6eceb2"
  ink-forest: "#183028"
  ink-body: "#212529"
  ink-muted: "#636566"
  text-input-text: "#000000de"
typography:
  display:
    fontFamily: FWDCircularWeb, NotoSansThai, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: FWDCircularWeb, NotoSansThai, sans-serif
    fontSize: 31px
    fontWeight: 700
    lineHeight: 39px
  body:
    fontFamily: FWDCircularWeb, NotoSansThai, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: FWDCircularWeb, NotoSansThai, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 0.6px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 16.2px
  4xl: 19.2px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-body}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 18.5px 14px
    height: 56px
  card:
    backgroundColor: "{colors.surface-cream}"
    textColor: "{colors.ink-forest}"
    rounded: "{rounded.2xl}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 4px 16px 0px
---

## Overview

The English home page of FWD Thailand (https://www.fwd.co.th/en/, title "FWD Thailand | Life Insurance Company in Thailand", measured at 1280px wide and 5689px tall) is a retail insurance storefront. It opens with a full-width photographic hero carousel carrying a white 48px bold headline ("Manage your FWD policy online via SCB EASY" in the capture, "New! Max Saver 15/7 with 20% cashback" in another slide), an orange call-to-action and a row of translucent service chips: Buy online, Submit online claim, Submit online loan request, Rewards, Easy payment via Omne. Beneath the hero the page moves to a pale canvas with "Find your best suitable plan" and five cream product-category cards, followed by a peach promotional band for a "10.10" campaign, a "Featured online products" carousel with mint discount badges, and "Most popular agent products" cards.

The look is friendly and consumer-facing rather than corporate: warm orange, cream and peach surfaces, real smiling people in orange clothing, and rounded white information panels that overlap photographs. Copy is plain English with benefit-first labels such as "Life and accident insurance", "Health insurance", "Critical illness insurance", "Investment linked insurance" and "Savings insurance", with bilingual Thai support in the chat prompt and a Thai font in the stack. The chat-assistant bubble visible in the capture is a third-party widget and is not documented as brand UI.

## Colors

`{colors.primary}` (#e87722) is the FWD orange: the filled button, the 2px outline on secondary buttons, the arrow circles on cards, carousel dots and the "Find out more" link text. It carries 1952 area weight among backgrounds. `{colors.canvas}` (#ffffff) is the main page background (3504), followed by `{colors.surface-cream}` (#fef9f4, 2833) used on cards and sections and `{colors.surface-peach}` (#fae4d3, 1076) used for campaign bands. `{colors.surface-grey}` (#edeff0) is a neutral section background and `{colors.accent-mint}` (#6eceb2) fills the small discount tags on product cards.

Text: `{colors.ink}` (#000000) leads by character count (2431), then `{colors.ink-forest}` (#183028, a deep green-black used for card titles and body, 2291), `{colors.ink-body}` (#212529, links, 1777), white (972) on photographs and buttons, orange (213) for emphasis and `{colors.ink-muted}` (#636566, 150). Input text is #000000de. Bootstrap root variables are present (for example --bs-primary #0d6efd) but are framework defaults and not brand colours. Border colours measured: #e87722, #dbdfe1, #ffffff and #0000003b.

## Typography

FWDCircularWeb is the only family by character count (7933), with NotoSansThai as the fallback for Thai script, then sans-serif. Loaded faces: FWDCircularWeb 300, 500 and 700, NotoSansThai 300 and 700; measured weights by characters are 300 (3860), 450 (1888), 700 (1862) and 500 (323). FWDCircularWeb is a proprietary face; Circular-like geometric sans-serifs such as Circular or a similar rounded grotesque are the nearest substitutes, with Noto Sans Thai for Thai text.

The scale: display 48px/56px bold (hero), 31px/39px bold on mobile, 20px/24px bold for card titles, 16px/24px weight 300 for body, 16px/20px bold with 0.6px tracking for buttons, 14px for secondary copy and 10px for small tags. Letter-spacing is normal except buttons (0.6px at 16px), 14px text (0.13132px) and 0.12px at 16px. Text is sentence case; no uppercase transform was measured on the hero or buttons.

## Layout

The header is 56px (`--header-height`) with links Products, Buy online, Claims, Support and Rewards. Content is laid out in a Bootstrap-derived container with wide gutters; the capture shows five equal cards in one row under "Find your best suitable plan", a two-column promo row (a wide campaign banner and a narrower "Online insurance promotion" tile), a peach block on the left holding "Featured online products" with a three-card carousel to the right, and a four-up grid of agent products. Measured gaps: 4px and 10px (56 each), 2px, 8px, 16px, 12px, 20px and 6px; paddings 16px (57), 12px (42), 2px, 10px, 8px, 4px, 32px, 40px and 64px.

## Elevation & Depth

Shadows are soft and frequent. Product cards use `rgba(0, 0, 0, 0.2) 0px 4px 16px 0px`. Other measured shadows: `rgba(24, 48, 40, 0.35) 0px 4px 12px 0px` (14), `rgba(255, 255, 255, 0.8) 0px 0px 8px 0px` (10), `rgba(24, 48, 40, 0.3) 0px 0px 4px 0px` and `rgba(24, 48, 40, 0.2) 0px 0px 4px 0px` (10 each), `rgba(0, 0, 0, 0.15) 0px 0px 8px 0px` and `rgba(0, 0, 0, 0.25) 0px 4px 20px 0px`. On hover, the primary button gains `rgba(0, 0, 0, 0.2) 0px 6px 8px 0px`. White information panels overlap photographs at the bottom of carousel cards, which creates the stacked, layered look.

## Shapes

Radii measured: 4px (47 elements, buttons and chips), 16px (30, cards), 50% (25, arrow circles and dots), 8px (20), `8px 8px 0px` (10, top-rounded tags), 40px (5), 5px, 10px, 12px, 25px, and the section corners `19.2px 19.2px 0px` and `16.2px 16.2px 0px`. The extractor's detected anchor CTA has a 0px radius, while the button-element variant ("Find out more") and the outlined "View all online products" are 4px; the token `button-primary` keeps the measured 0px for the anchor form.

## Components

- Primary button: orange #e87722 fill, white 16px bold text with 0.6px tracking, 40px high, with an arrow icon at the left in the capture. Measured variants: anchor 200px wide with 0px radius; button element with 8px 24px padding and 4px radius.
- Hover: the fill inverts to white, text and border become orange, and a shadow appears (measured on "See more details").
- Outlined button: 2px solid #e87722, orange text, 4px 16px padding, 56px high, 4px radius ("View all online products", "View all agent products").
- Category card: cream #fef9f4, 16px radius, icon illustration, 20px bold title, orange arrow circle; 222px wide and 241px high in the measured row.
- Product card: photograph with a mint discount badge, a white lower panel with a category label, a bold title and a truncated description.
- Text input: 56px high, 18.5px 14px padding, 16px weight 300 text in #000000de.
- Tag chips: orange-outlined small pills for "cash returns", "tax benefits", "loss of life", "health protection" and "cancer".

## Design System Architecture

No public design system or brand-guideline page was reached: the home page fetch returned only its title and no navigation or footer links, so none are cited. The de-facto system seen in shipped CSS is Bootstrap 5 (root variables like --bs-primary, --bs-border-radius .375rem and --bs-border-radius-2xl 2rem remain), Swiper for carousels (--swiper-theme-color #007aff) and JSS-generated classes (jss1, jss4) for the consent layer, plus FWD-specific variables such as --guru-panel-width 420px. FWD-specific tokens are expressed through component styles rather than root variables.

## Do's and Don'ts

- Do use #e87722 for the single primary action on each block and keep button text white and bold.
- Do place information on cream #fef9f4 or white cards with 16px radius and a soft shadow.
- Do pair photography of people with a white text panel.
- Do keep mint #6eceb2 for discount and highlight tags only.
- Don't use Bootstrap blue (#0d6efd) or link blue (#0a58ca); they are framework defaults.
- Don't document the chat widget, cookie or consent layers as brand UI.
- Don't set headings in uppercase; none was measured.

## Responsive Behavior

At the 390px mobile pass, the hero headline measured 31px/39px bold with 0px 16px padding across the full 390px width, body text 14px/24px, and the call-to-action 213px wide by 40px high. Mobile font sizes recorded by characters: 14px (4887), 16px (3623), 20px (1461), 10px (670), 31px (421), 12px (18) and 39px (13). Column counts, navigation collapse and carousel behavior on mobile were not measured.

## Iteration Guide

1. Start from white and cream surfaces with FWDCircularWeb: 300 for body, 700 for headings and buttons.
2. Use orange #e87722 only for actions, outlines, arrows and focus; invert it on hover.
3. Give product tiles 16px radius and the 0px 4px 16px shadow.
4. Reserve peach #fae4d3 for campaign bands and mint #6eceb2 for badges.
5. Anything not listed (dark mode, focus rings, desktop breakpoints) was not measured and should be checked before use.
