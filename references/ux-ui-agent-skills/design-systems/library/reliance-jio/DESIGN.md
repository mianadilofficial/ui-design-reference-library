---
version: alpha
name: "Jio"
category: "Telecom"
description: "Jio consumer site (Reliance Jio): white canvas with #0f3cc9 blue actions, JioType Black 40px/900 headlines with -1.2px tracking, JioType Medium 16px body in translucent black #000000a6, rounded 24px photo cards, pill-shaped controls, and warm lifestyle photography."
colors:
  canvas: "#ffffff"
  ink: "#000000a6"
  primary: "#0f3cc9"
  on-primary: "#ffffff"
  surface-2: "#f5f5f5"
  ink-2: "#141414"
  ink-3: "#000000"
  ink-5: "#0a2885"
  hairline: "#b5b5b5"
  primary-hover: "#9fb6fa"
  on-primary-hover: "#04174f"
  card-border: "#e0e0e0"
typography:
  display:
    fontFamily: "\"JioType Black\""
    fontSize: 40px
    fontWeight: 900
    lineHeight: 40px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: "\"JioType Black\""
    fontSize: 24px
    fontWeight: 900
    lineHeight: 28px
    letterSpacing: "-0.72px"
  button:
    fontFamily: "\"JioType Bold\""
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.08px"
  nav:
    fontFamily: JioType, helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20.8px
    letterSpacing: "-0.08px"
  body-dominant:
    fontFamily: JioType Medium
    fontSize: 16px
    fontWeight: 500
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary-hover}"
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-3}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    rounded: "{rounded.lg}"
    padding: 40px
    borderColor: "{colors.card-border}"
---

## Overview

The measured page is jio.com (title "Jio | Prepaid, Postpaid, WiFi Plans & Mobile Apps"), the consumer front door of Reliance Jio. Reading the page with WebFetch and looking at the capture, the structure is: a white header with the logo and links (Mobile, Home, Business, Customer Care, Investor) plus search and account icons; a promotional carousel of large rounded photographic banners with a "3/3" pager; a "Recharge or pay bills" widget with Mobile and Home tabs, a +91 number field and a Proceed button; a row of five circular-icon quick actions (Get JioHome, Get Jio SIM, Port to Jio, VIP number, Support); then product cards under "It all starts with a connection" and a service list under "Keep the good times going with Jio" (JioPC, JioSaavn and others).

The voice is upbeat and direct: short imperative headlines ("Recharge or pay bills", "Rain or shine, stay connected with unstoppable 5G") and plain actions ("Recharge now", "Know more", "Explore plans", "Book now"). Offers are front-loaded with the benefit. Photography is warm, candid and people-first: friends laughing on a sofa, two men looking at a phone, a father and daughter at a table. Text over photography is white, bold and left-aligned inside a dark gradient.

## Colors

- canvas #ffffff is the dominant background (area weight 2474); surface-2 #f5f5f5 (1992) is the alternating section tint.
- primary #0f3cc9 is the Jio action blue: the fill of "Recharge now" and "Proceed", with white text (on-primary #ffffff).
- ink is #000000a6 (black at about 65 percent), the most-read text colour (2132 characters); ink-2 #141414 is used on cards, ink-3 #000000 on headlines and navigation links, and ink-5 #0a2885 (a deep navy) on outlined "Know more" buttons.
- primary-hover #9fb6fa with on-primary-hover #04174f is the measured hover pair for the primary button.
- hairline #b5b5b5 borders outlined buttons and inputs; card-border #e0e0e0 outlines cards.

Small accent areas also appear in the backgrounds: #0078ad (the "Explore plans" banner button), #0c5273, #4848f9, #853dd6, #1eccb0 and a pale #e7ebf8 (the peeking carousel slides). They cover little area and are not declared as UI tokens.

## Typography

The family is JioType, loaded in three weights: JioType Medium 500 (2228 characters), JioType Bold 700 (1115), JioType Black 900 (705) and a plain JioType (408) with helvetica, arial, sans-serif as its declared fallback stack.

Display: JioType Black, 40px, weight 900, line-height 40px, letter-spacing -1.2px (mobile: 24px, line-height 28px, letter-spacing -0.72px). Button: JioType Bold 16px, weight 700, line-height 24px, letter-spacing -0.08px. Navigation: JioType 16px weight 500, line-height 20.8px. Body dominant: JioType Medium 16px weight 500. Sizes by character count: 16px (1481), 18px (1347), 12px (905), 40px (509), 24px (147), 14px (53), 64px (14).

JioType is a proprietary family; substitutes are Helvetica or Arial for text and a heavy grotesque for the Black weight.

## Layout

The measured page is 1280px wide and 6269px tall. Content sits in a wide container with side margins that let the next and previous carousel slides peek at the edges. Two-column product cards share the row with a small gutter, section titles are centred, and the quick-action row is centred with five equally spaced items. Spacing tokens: 4px, 7px, 8px, 10px, 12px, 15px, 16px, 20px, 24px, 32px. Cards use 40px of internal padding.

## Elevation & Depth

No box shadows were measured (the list is empty). Depth is created by photography with a darkening gradient behind text, by pale tinted surfaces (#f5f5f5, #e7ebf8) and by thin borders (#b5b5b5 on controls, #e0e0e0 on cards, a translucent #ffffff87 on dark photo overlays).

## Shapes

Shape is a strong signature: 25000px (a pill) on 111 elements, 24px on 43 (photo cards and banners), 4px on 12, 16px on 11, 8px on one, 50% on one, and a pair of half-rounded segments (50px 0 0 50px and 0 50px 50px 0) that form the Mobile/Home segmented switch. The extractor's detected primary button measured 0px radius, which the generated token keeps (button-primary uses rounded.none); the secondary and outlined buttons are pills. Use the capture and the radius frequencies together: pills for controls, 24px for large cards.

## Components

- Primary button ("Recharge now"): #0f3cc9 fill, white JioType Bold 16px, height 40px; measured pill variants carry 8px 16px padding. Hover pair: #9fb6fa fill with #04174f text.
- Outlined button ("Know more"): transparent, #0a2885 text, 1px #b5b5b5 border, pill radius, padding 7px 15px.
- Banner button ("Explore plans"): #0078ad fill measured in the hover probe, white text, 40px tall, pill.
- Segmented switch: Mobile (filled blue) and Home (grey) tabs with half-rounded ends.
- Number field: +91 prefix, "Jio Number" placeholder, hairline border, paired with the blue Proceed button.
- Quick action: circular pale-blue icon above a 12px label.
- Card: white, 24px radius, 40px padding, 1px #e0e0e0 border, text #141414; photo cards place white headlines over the image.
- Carousel control: a white pill containing arrows and a "3/3" counter.

## Page rhythm

The capture reads as alternating bands. A promotional carousel sits directly under the header, followed by a white utility band (recharge widget and quick actions), then a pair of tall portrait photo cards under a centred section title, then a second centred title with one explanatory sentence ("Explore Jio services for 5G connectivity, TV and OTT entertainment, online shopping, music streaming, cloud computing, smart tracking, and everyday digital experiences.") above another pair of dark photo cards for JioPC and JioSaavn. Each card carries a small category label (Mobile, JioHome, JioPC, JioSaavn) above a bold three-line headline and, where relevant, a small blue pill button. The promotional banners listed in the fetched content cover a Canva Pro offer, a JioShield child-safety offer and a JioHome booking offer, each with "Recharge" and "Know more" buttons.

## Design System Architecture

No public design system or brand guideline is linked from the home page; the only references in the fetched content are image and asset CDN paths. The extraction recorded an empty rootVars object, so the site does not expose CSS custom properties on the root. The de-facto system is therefore the proprietary JioType family in three weights, one action blue, a grey-white surface pair, and a consistent set of pill and 24px radii.

## Do's and Don'ts

Do:
- Use #0f3cc9 with white text for the main action and pair it with an outlined navy secondary.
- Set headlines in JioType Black with tight negative tracking (-1.2px at 40px).
- Use pill shapes for buttons, chips and switches, and 24px for photo cards.
- Place white text on photography only behind a dark gradient.
- Write short, benefit-first imperative copy.

Don't:
- Do not add shadows; none were measured.
- Do not use the small accent hues (#4848f9, #853dd6, #1eccb0) as UI colours.
- Do not use light-weight type; the measured weights are 500, 700 and 900.
- Do not use the 0px radius on new controls: it is the measured value of the detected button only.

## Responsive Behavior

On the 390px mobile pass the display size drops from 40px to 24px (line-height 28px, letter-spacing -0.72px). The mobile size distribution is led by 16px (2275 characters), 12px (905), 14px (713), 24px (373), 32px (136), 18px (37) and 40px (14). Column changes, navigation collapse and breakpoints were not measured.

## Iteration Guide

1. Begin with {colors.canvas}, alternate sections with {colors.surface-2}.
2. Use {components.button-primary} and its hover pair for the single main action.
3. Headlines: {typography.display}; buttons: {typography.button}.
4. Cards: {rounded.lg} with 40px padding and a {colors.card-border} outline.
5. Validate with `node web/scripts/verify-designs.mjs --slug=reliance-jio`.
