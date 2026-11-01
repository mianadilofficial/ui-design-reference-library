---
version: alpha
name: Beam
category: "Thai Brands"
description: "Beam payments site at beamcheckout.com: Stolzl 80px headlines with italic serif accents, #265bea buttons (hover #1d46d7) on a navy and #101010 dark hero, white sections, 16px-radius cards with 1px #ffffff1a borders and Inter 600 labels."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#265bea"
  on-primary: "#ffffff"
  surface-dark: "#101010"
  surface-grey: "#e9ecf0"
  ink-ui: "#212529"
  ink-grey: "#666d75"
  ink-light-grey: "#ced4da"
  hairline: "#ffffff1a"
  primary-hover: "#1d46d7"
typography:
  display:
    fontFamily: Stolzl, Helvetica, Arial, sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 100px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: Stolzl, Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 52px
    letterSpacing: "-1px"
  heading:
    fontFamily: Stolzl, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  subheading:
    fontFamily: Stolzl, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 7.5px
  s3: 8px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-ui}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.ink-light-grey}"
    rounded: "{rounded.none}"
    padding: 60px 0px
---

## Overview
The measured page is https://www.beamcheckout.com/ (title "Beam | In-store and Online Payments", lang en, scroll height 6532px), the marketing home page of Beam, a payments company listed in the Thai-brands queue. The first screen is a white header with the "Beam" wordmark, centred menu (Products, Resources, Pricing, Contact Us), a globe language icon, "Sign In", an outlined "Get Started" button and a filled blue "Buy Bolt+" button. Below it a full-bleed dark navy hero fades into a deep royal blue; the headline "We help businesses accept payments" is set at 80px in white with the second line in an italic serif ("accept payments"), followed by a short white paragraph, the two buttons and a product photograph card showing a QR payment terminal. A strip "Driving success for industry leaders" shows white merchant logos on the blue (Monowheel, Disaya, 137 Pillars, hdmall, iStudio, Hatari, Bo, Ravipa). The page continues with a white section "Seamless Payments everywhere you sell" (italic serif first words, sans second line), three square product tiles in light grey, lilac and bright blue (Beam Bolt storefronts, Beam Checkout for social media and websites, Beam Bridge for partner platforms) each with a title, product subtitle, a one-line description and an outlined "See how it works" button, then a dark teal-navy section "Everything you need, and more" with bordered translucent cards (Universal Payment Options; Free PromptPay, Cards starts at...). The voice is confident and plain, with a mixed sans-and-italic-serif headline device.

## Colors
Canvas is {colors.canvas} (#ffffff, area weight 4547); the hero and footer dark surface is #101010 (637), with the hero rendered as a vertical gradient from deep navy to royal blue (the extractor measured the page's solid colors only; the gradient stops were not measured). A soft grey surface is #e9ecf0 (200, also --color-surface-default-selected). Primary is #265bea, the fill of "Buy Bolt+" (and the declared --toggle-track-on-enabled); its hover fill is #1d46d7 (rgb 29,70,215, measured, equal to the declared --color-blue-700). Declared variables include --color-border-brand-pressed #1f3aae, --color-primary-blue-1000 #172254, --color-starlight-500 #deda16 and several teal/orange/red scales, which are present in the CSS but not measured as in-use surfaces except as listed. Text: white (965 characters), black (677), #212529 (379), grey #666d75 (256) and #ced4da (114). The outlined buttons use a 1px #ced4da border (measured) and cards on dark use a 1px #ffffff1a border. Dark and light schemes appear together on one page; a separate dark mode was not measured.

## Typography
Headlines use Stolzl (a proprietary geometric sans), with Noto Serif italic (weights 100 to 900) for accent words, and Inter (400, 600) for buttons and UI; the fallback stack is Helvetica, Arial, sans-serif. Sizes by character weight: 16px (1444), 14px (307), 20px (201), 48px (170), 24px (117), 40px (57). Weights: 400 (2093), 600 (224), 500 (74). Tokens: display 80px / 100px weight 400 with -1px letter-spacing (mobile 40px / 52px); heading 20px / 30px (the hero paragraph); subheading 16px / 24px; button Inter 16px / 24px weight 600; nav 16px / 24px in the system UI stack. Card titles measured 24px / 36px in Stolzl. Stolzl is a commercial face; the page's own fallbacks are Helvetica and Arial.

## Layout
Page width 1280px, with a left-aligned content column starting about 120px from the left edge (120px padding measured 11 times). The hero places text left and the product card right; the product section uses a header row with a headline left and an intro paragraph right, then three equal square tiles; the dark section uses two 500px by 400px bordered cards side by side. Measured paddings: 7.5px (26), 24px (18), 120px (11), 16px (9), 8px (9), 60px (8). The footer uses 60px vertical padding on #101010.

## Elevation & Depth
One drop shadow was measured: `0px 10px 15px -3px rgba(0,0,0,0.1), 0px 4px 6px -4px rgba(0,0,0,0.1)` (a Tailwind-style medium shadow). Cards on dark backgrounds carry a 1px #ffffff1a hairline rather than a shadow; product tiles sit flat on white. Depth is mainly through color blocking and the navy gradient.

## Shapes
Radii by weight: 16px (21, cards and mobile button), 8px (13), 12px (12, hover-state button and tabs), 24px (6), 50px (2) and a pill (2). Tokens: xs 8px, sm 12px, md 16px, lg 24px, xl 50px, none 0px, pill 9999px. The extractor's CTA record reports 0px radius at desktop, 12px in the hover record and 16px in the mobile record, so the corner radius of the "Buy Bolt+" button is recorded inconsistently; the token keeps the desktop role value, and the capture shows rounded corners.

## Components
Button-primary: #265bea fill, white Inter 16px weight 600 label, 56px high and 123px wide in the CTA record ("Buy Bolt+"); hover #1d46d7. Button outlined ("Get Started"): transparent, #212529 label at 14px weight 600, 1px #ced4da border, 12px radius, 44px high, 20px side padding. Nav: white bar with #212529 text. Card (dark): transparent over a dark gradient, white Stolzl 24px title, 16px radius, 1px #ffffff1a border, 500px by 400px. Footer: #101010 with #ced4da text and 60px vertical padding. Product tiles use pastel fills (grey, lilac, bright blue) behind device illustrations; their exact fills were not extracted as tokens.

## Design System Architecture
No public design system or brand guideline was found (no WebSearch was made; the page was measured through the extractor only). The shipped CSS defines a named token system with variables like --color-primary-blue-1000, --color-blue-700, --color-teal-400, --color-orange-800, --color-surface-default-selected, --color-icon-info #619ff9, --color-sementic-error-200 #fadbd9, component tokens (--tab-radius 12px, --modal-size-sm 335px, --radio-radio-input-padding 16px, --spacing-avatar-height-lg 56px, --spacing-gap-btw-image 16px) and a Joy-prefixed palette variable (--joy-palette-success-softDisabledBg). This is the de-facto system: semantic color scales plus component spacing tokens.

## Do's and Don'ts
Do pair white text on the navy and #101010 sections with #265bea actions. Do mix Stolzl with an italic serif accent in headlines. Do use pastel product tiles with an outlined "See how it works" button below. Do use 16px card radii and 1px #ffffff1a borders on dark. Don't use Bootstrap greys (#ced4da, #212529) as brand colors; they are measured UI neutrals. Don't claim the hero gradient stops: they were not measured. Don't use 12px and 16px button radii interchangeably without checking; they differ across records.

## Responsive Behavior
The 390px mobile pass measured: h1 40px / 52px weight 400 in Stolzl, white; the "Buy Bolt+" button 123px wide by 56px high with 16px radius and 0 24px padding; the nav-role item "Get Started" 14px weight 600 in #212529 on white, 68px high. Menu collapse and column changes were not otherwise measured.

## Iteration Guide
1. Canvas #ffffff, dark #101010, primary #265bea (hover #1d46d7), ink #000000 and #212529. 2. Stolzl 80px / 100px headline with -1px tracking and italic serif accent words; Inter 16px / 600 buttons. 3. Cards with 16px radius and #ffffff1a borders on dark. 4. Pastel product tiles in 3 columns. 5. Measure the gradient before reproducing it. 6. Dark-mode, focus states and exact button radius on desktop need re-measurement.

## Notes on Measurement Scope
Values come from one desktop pass at 1280px and one mobile pass at 390px of the home page. The extractor found no body-text, link or input role. Interior product, pricing and blog pages were not measured. Merchant logos in the strip are third-party artwork and contribute no tokens.

Hover was recorded for the header and hero buttons; the hover fill #1d46d7 for the primary button was measured, and no other interactive states were recorded.
