---
version: alpha
name: Omise
category: "Thai Brands"
description: "Omise payments home page (omise.co/en, queued as Opn): near-black #05080d hero with mint #80ffbf buttons at 6px radius, Outfit weight 300 uppercase display at 140px, DM Sans for body, light #f5f7fa solution cards with blue #3333ff caption tabs, two shadow stacks."
colors:
  canvas: "#05080d"
  ink: "#ffffff"
  primary: "#80ffbf"
  on-primary: "#0a0f1a"
  surface-panel: "#f5f7fa"
  ink-muted: "#69758c"
  ink-soft: "#b8bfcc"
  accent-yellow: "#ffe566"
  hairline: "#0048ff80"
typography:
  display:
    fontFamily: Outfit, sans-serif
    fontSize: 140px
    fontWeight: 300
    lineHeight: 168px
    textTransform: uppercase
  display-mobile:
    fontFamily: Outfit, sans-serif
    fontSize: 64px
    fontWeight: 300
    lineHeight: 76.8px
    textTransform: uppercase
  body:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 30px
  button-secondary:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  lg: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 40px
    height: 64px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 16px 40px
    height: 59px
  card:
    backgroundColor: "{colors.surface-panel}"
    textColor: "{colors.on-primary}"
    padding: 24px
---

## Overview

This file documents the site measured at https://omise.co/en, the home page of Omise (Omise Co., Ltd., copyright 2013-2026), a payment-technology company. The queued entry was "Opn (Omise)" at https://www.opn.ooo/; that address answers with a 302 redirect to https://omise.co/, so the measured site and the name used here are Omise. Its pages state that its software and APIs let businesses accept payments and let financial institutions and platforms build payment products. The title is "Omise - Payment Solution for Your Business".

The home page opens on a near-black field (`#05080d`) with the wordmark at the left, five navigation items (Products, Company, Resources, Documentation, Help center) and an outlined "Sign in" button at the right. The hero is a very large light-weight uppercase headline, "PAYMENT TECH" with a blue-to-mint gradient across the letters, over "FOR YOUR BUSINESS" in white, then the line "Seamless software and APIs that enable businesses to accept payments and financial institutions to innovate at scale", a mint "Contact sales" button and an outlined "Get started" button. A strip of customer logos (SCG, Grand Hyatt, DKSH, Allianz Ayudhya, DHL, 7-Eleven, McDonald's, BMW, Coway, Bumrungrad, King Power, dtac, True, Minor International) scrolls under it. The page then turns white and light grey for "SOLUTIONS", three cards: "ACCEPT PAYMENTS", "MANAGE AT A TOUCH" and "BUILT WITH SCALABILITY", each with a blue caption tab ("For your customer", "For your operation team", "For your tech team"). The voice is confident and benefit-focused.

## Colors

- **Canvas `#05080d`**: the hero and header background (3451 area units) and the root variable `--_core---color--neutral--black`. White `#ffffff` (3070 units) and the light panel **`#f5f7fa`** (2801) cover the lower sections; **`#0a0f1a`** (805) is the dark label color and the text on the mint button.
- **Primary `#80ffbf`**, a mint, fills the main buttons ("Contact sales", "Try for free") and is the text color on mint-tinted chips (`#57d9a340` fill, "Charge"). It is the root variable `--_core---color--mint--300` and also `--_semantic---brand`. **On-primary `#0a0f1a`** is the label color on mint.
- **Ink `#ffffff`** is the text on dark areas (5827 characters). **Ink-muted `#69758c`** (569 characters, `--_core---color--gray--500`) and **ink-soft `#b8bfcc`** (116) are the secondary text tones. **Accent-yellow `#ffe566`** (100 characters) is a small highlight text color.
- A saturated blue `#3333ff` (694 units, `--_core---color--blue--500`) fills the caption tabs; text colors `#0048ff` (92 characters), `#bfb2ff` and `#99bbff` also appear. **Hairline `#0048ff80`** is the translucent blue border color measured four times.
- The stylesheet declares full core scales: mint 50 to 900, blue 50 to 900, purple 50 to 900, yellow, red and gray scales, plus semantic aliases (`--_semantic---brand`, `--_semantic---text--tertiary`, `--_semantic---white-subtel: #ffffff26`).

## Typography

Two families: **Outfit** (weight 300) for display headings and card titles, and **DM Sans** (weights 300, 400, 500, 600) for interface and body text. DM Sans carries 6716 characters, Outfit 249. Root variables name them `--_lang---herder: Outfit,sans-serif` and `--_lang---body: "DM Sans",sans-serif`.

- **Display (H1 "PAYMENT TECH"):** Outfit 140px, weight 300, line-height 168px, uppercase (mobile 64px, line-height 76.8px). Declared sizes: `--fontsize--xl: 120px`, `--fontsize--xxl: 256px`, `--fontsize--h1: 72px`, `--fontsize--h2: 56px`, `--fontsize--h3: 48px`, `--fontsize--h4: 40px`, `--fontsize--h6: 24px`.
- **Card titles:** Outfit 40px, weight 300, line-height 48px, uppercase.
- **Body:** DM Sans 16px, weight 300, line-height 24px (declared `--linehight--body: 150%`). The most-used size is 18px (4896 characters), then 16px (760), 20px (442), 24px (340) and 14px (205).
- **Button:** DM Sans 20px, weight 500, line-height 30px; the secondary button is 18px, line-height 27px; the outlined sign-in button is 14px, weight 500.

Weights by character: 300 (6413), 500 (555), 400 (76), 600 (9). The only letter-spacing measured is 0.24px on 24px text (40 characters).

## Layout

The page is 7738px tall at 1280px. Sections run full width with a declared maximum content width of 966px (`--max-w`) and a 120px vertical section padding (`--py-section: 120px`). The solutions area is a three-column row of cards with image tops and caption tabs. Gaps: 12px (88 occurrences), 8px (30), 16px (28), 6px (20), 40px (14), 48px (12), 24px (10). Paddings: 40px (45), 24px (19), 5px (18), 16px (14), 120px (7). Button padding is 16px 40px.

## Elevation & Depth

Two shadow stacks were measured, one each: `rgba(0,0,0,0.08) 0px 3px 12px 0px, rgba(0,0,0,0.3) 0px 28px 56px -12px` (a large lifted panel) and `rgba(0,0,0,0.1) 0px 4px 6px -4px, rgba(0,0,0,0.1) 0px 10px 15px -3px` (a menu-style panel). Separation elsewhere comes from the dark-to-light section change, the `#f5f7fa` card fill and the blue caption tabs.

## Shapes

The base radius is 6px (70 elements), declared as `--radius: 6px`, and it applies to buttons, chips and the card bottom corners (`0px 0px 6px 6px`; the top is the image or tab with `6px 6px 0px 0px`). Pills appear on 999px (20 elements) and 9999px (4). Single occurrences: 8px, 12px, 50px and 50%.

## Components

- **Button primary:** mint `#80ffbf` fill, `#0a0f1a` text, DM Sans 20px weight 500, radius 6px, padding 16px 40px, height 64px, border 1px solid `#80ffbf` ("Contact sales").
- **Button secondary:** mint fill, same text color, DM Sans 18px weight 500, radius 6px, padding 16px 40px, height 59px ("Try for free"). In the capture the second hero button is outlined mint with mint text ("Get started").
- **Outlined sign-in button:** transparent, white text and 1px white border, 14px weight 500, radius 6px, padding 9px 15px.
- **Card:** `#f5f7fa` fill, Outfit 40px uppercase title, padding 24px, with a check-list of DM Sans features.
- **Navigation:** white text on dark; on hover the item color changes from `#ffffff` to mint `#80ffbf` with no background change.

## Design System Architecture

Omise's home page does not link to brand guidelines, a press kit or a design system (the page opened at https://omise.co/en shows Products, Company, Resources, Documentation at docs.omise.co and Help center links only). The stylesheet nonetheless exposes a Webflow-style two-tier variable system: `--_core---color--*` primitives (for example `--_core---color--mint--300: #80ffbf`, `--_core---color--gray--900: #0a0f1a`) and `--_semantic---*` aliases that point at them (`--_semantic---brand: var(--_core---color--mint--300)`, `--_semantic---text--tertiary`), plus a type-size scale (`--fontsize--b2: 18px`, `--fontsize--b3: 16px`, `--fontsize--b4: 14px`) and spacing variables (`--px-section: 0px`, `--py-section: 120px`). No official public documentation of this system was found.

## Do's and Don'ts

- Do use mint `#80ffbf` with `#0a0f1a` text for the main action, 6px radius, 64px height on large buttons.
- Do set hero headlines in Outfit 300 uppercase, very large, with the blue-to-mint gradient on the first line only.
- Do keep dark sections on `#05080d` and light sections on `#ffffff` or `#f5f7fa`.
- Do use the `#3333ff` blue for caption tabs that label the audience.
- Don't use heavy font weights for display; the page's display and most body text is weight 300.
- Don't add extra shadow stacks; only two were measured.
- Don't treat declared scale colors (purple, red, yellow 50 to 900) as used until measured on a page.

## Responsive Behavior

Measured at 390px: the H1 is Outfit 64px (line-height 76.8px), body is DM Sans 16px weight 300, and the primary button text is 18px with the same 16px 40px padding, radius 6px and mint fill. The measured mobile text sizes by character are 16px (5563), 18px (742), 36px (163), 12px (150), 22px (51) and 24px (40). Navigation layout, column counts and breakpoints were not measured.

## Iteration Guide

1. Start with `#05080d` and white text, then mint `#80ffbf` for the one primary action.
2. Use Outfit 300 uppercase for display and DM Sans 300 for body.
3. Keep radius at 6px and padding at 16px 40px for large buttons.
4. Use the light `#f5f7fa` panel for feature cards on white.
5. Record any new measurement in SOURCES.json before adding tokens.
