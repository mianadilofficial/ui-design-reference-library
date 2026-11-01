---
version: alpha
name: Rakuten
category: "Retail & E-commerce"
description: "Rakuten is a cash-back shopping site: white canvas (#ffffff), grey ink (#575757) and charcoal (#252525), a purple primary (#8529cd, hover #9b50d6) on pill buttons 56px high with 9999px radius, Stag light serif headings at 46px weight 300, Rakuten Sans UI body at 20px, pastel tinted cards with 16px radius and a charcoal footer."
colors:
  purple-deep: "#480081"
  tint-lavender: "#f1effd"
  tint-sky: "#ecf5fb"
  canvas: "#ffffff"
  ink: "#575757"
  primary: "#8529cd"
  on-primary: "#ffffff"
  surface-2: "#252525"
  surface-3: "#ebfbda"
  ink-5: "#737373"
  ink-6: "#480081"
  primary-hover: "#9b50d6"
  text-input-text: "#000000"
  card-bg: "#fff1f5"
typography:
  display:
    fontFamily: Stag, Georgia, "Times New Roman", Times, serif
    fontSize: 46px
    fontWeight: 300
    lineHeight: 48px
  display-mobile:
    fontFamily: Stag, Georgia, "Times New Roman", Times, serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 44px
  body:
    fontFamily: "\"Rakuten Sans UI\", system-ui, Arial, Roboto, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Rakuten Sans UI\", system-ui, Arial, Roboto, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: "\"Rakuten Sans UI\", system-ui, Arial, Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 0px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 18px
  xl: 24px
  2xl: 30px
  3xl: 32px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 32px
    height: 56px
    boxShadow: rgba(10, 22, 70, 0.15) 0px 4px 8px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.surface-2}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 14px 16px
    height: 48px
    borderColor: "{colors.ink-5}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
---

## Overview

The page title is "Coupons, Promo Codes & Cash Back | Rakuten". The home page sells one idea, cash back on purchases, and does it with a friendly consumer tone: the h1 reads "Earn Cash Back when you eat out", the second heading "All your favorite brands. All here.", and a purple band says "Brands partner with us to send them shoppers. They pay us and we share that money with you. That's how we're free." A "Join for Free" pill button, an email field and a "Watch how Rakuten works" link make the hero; trust ratings (Trustpilot, App Store, Chrome Web Store) sit beneath it.

The look is clean and commerce-oriented: white canvas, a strong violet primary, a light serif (Stag) for headlines against a rounded humanist sans (Rakuten Sans UI), tiles of retailer logos in their own brand colors, and large soft rounded containers. A rainbow of retail logo tiles is the busiest part of the page; the interface chrome stays purple, white and charcoal.

## Colors

- **Canvas:** `#ffffff` (largest background area, 1725).
- **Ink:** `#575757`, the grey of body paragraphs (1578 characters); `#252525` is the heading and body-role color and the footer background (area 1271); `#737373` is the input border and a muted text.
- **Primary:** `#8529cd` fills the "Join for Free", "Learn More About Dining" and "Add the Extension" buttons with white text and is also the link-text color (1334 characters). Hover state recorded: `#9b50d6`.
- **Deep purple `#480081`:** the large "Brands partner with us" panel (area 360) and a link/text color.
- **Mint `#ebfbda`:** a pale green panel (area 918).
- **Tints:** `#fff1f5` pink (card), `#f1effd` lavender, `#ecf5fb` sky and `#f4f3fe` pale violet are the card backgrounds behind the three "Earn Cash Back" feature cards.
- **Text on dark purple:** `#cfc0ff` (18 characters) and `#7119b8` appear as text colors.

Retailer tiles use each retailer's own colors and are partner logos, not Rakuten tokens. The toast library color `#f1c40f` in the root variables is not a brand color.

## Typography

- **Display (h1):** Stag, Georgia, "Times New Roman", Times, serif; 46px, weight 300, line height 48px; 40px / 44px on mobile.
- **h2 / h3:** Stag 40px weight 300 line height 44px on desktop; the h2 is 32px / 36px on mobile.
- **Body:** "Rakuten Sans UI", system-ui, Arial, Roboto, sans-serif; 20px, weight 400, line height 24px (16px / 22px on mobile).
- **Button:** Rakuten Sans UI 18px, weight 600, line height 24px (a 16px variant exists on the header button).
- **Nav / links:** 14px, weight 400 (600 for the header nav labels); 12px with 1px letter spacing, uppercase, for footer headings.

By character count the sizes are 14px (2722), 12px (1625), 20px (862), 40px (381), 24px (219), 16px, 18px and 46px. Weights: 300, 400, 600, 700. Other faces loaded include Schibsted Grotesk, Lato-AudioEye and OpenDyslexic (from the accessibility widget) and icon fonts. Stag and Rakuten Sans UI are proprietary; Georgia is the declared serif fallback and system-ui the declared sans fallback.

## Layout

Desktop was measured at 1280px over a scroll height of 8405px. The header (81px high) holds the purple Rakuten logo, "Shop by Category", "Browser Extension", "Mobile App", "Sign In" and a small "Join for Free" pill. The hero is two columns: text and form at left (342px wide button and input), a rounded product mockup at right. Below: a ratings row, a centered headline over a four-row marquee of equal square logo tiles, a full-width rounded purple band, then "Rewards wherever you are" and three tinted feature cards (470px, 480px and 490px square). The footer is a 744px-high charcoal block.

Paddings recorded: 24px (112), 16px (104), 48px, 32px, 64px, 8px, 10px. Gaps: 4px (104), 8px, 12px, 24px, 32px, 40px. The root variables declare breakpoints including `--breakpoints-largeMd: 1600px` and `--breakpoints-smallLg: 400px`.

## Elevation & Depth

One shadow is used on buttons: `rgba(10, 22, 70, 0.15) 0px 4px 8px 0px` (7 elements); the same value appears in the CSS corpus as `0 4px 8px 0 rgba(10,22,70,.15)`. A `--shadows-default` variable exists. Cards and panels are flat, tinted fills rather than elevated surfaces.

## Shapes

Radii measured: 12px (92 elements, the most common), 9999px (17, pills), 16px (14, cards), 24px (8), and one each of 8px (inputs), 18px, 30px and 32px. Primary buttons are full pills; the email input is 8px; feature cards are 16px; the purple band and mockup use the larger values.

## Components

- **Primary button:** `#8529cd` fill, white text, Rakuten Sans UI 18px weight 600, padding `16px 32px`, height 56px, 9999px radius, shadow `rgba(10, 22, 70, 0.15) 0px 4px 8px 0px`; hover `#9b50d6`.
- **Header button:** same fill, 16px text, padding `10px 16px`, height 44px.
- **Text input:** white fill, black text, 1px solid `#737373` border, 8px radius, padding `14px 16px`, height 48px.
- **Feature card:** pastel fill (`#fff1f5`, `#f1effd`, `#ecf5fb`), 16px radius, small 12px footnote "Cash Back rates may vary."
- **Retailer tile:** rounded rectangle in the retailer's color with the cash-back rate beneath in small bold text.
- **Footer:** `#252525` background, white text, 12px uppercase headings with 1px tracking.

Imagery and voice: the hero pairs a soft-focus lifestyle mockup (a hotel door hanger and a stay card with cash-back pop-ups) with phrases highlighted in a pale lavender marker band behind the words "eat out" and "3,500+ brands". The microcopy is short, second-person and benefit-led: "Join for Free", "Watch how Rakuten works", "Rewards wherever you are", "Effortlessly shop and save across devices." Retailer tiles are a dense rhythm of equal squares, each with a tiny rate label ("12% Cash Back", "Up to 18% Cash Back"). Fine print sits centered in small grey text ("Eligible rates include an extra 10% Cash Back as your welcome reward"). The purple statement band carries thin curved line art over the deep violet fill, set with light Stag text.

## Design System Architecture

No public design-system documentation was opened for this review. The shipped CSS exposes a token system in its root variables: `--colors-light`, `--colors-state-selected: #8529cd`, `--fonts-buttonLarge`, `--fonts-buttonMedium`, `--fontWeights-h1-large: 300`, `--lineHeights-h2-medium: 36px`, `--sizes-paddingProportion-*`, `--breakpoints-*` and `--shadows-default`. The naming (`group-name-size`) is a themed token scheme. Values here are from `web/data/extracted/rakuten.json` for https://www.rakuten.com.

## Do's and Don'ts

- Do use `#8529cd` for every primary action and link, in pill buttons at 56px height.
- Do set headlines in Stag at weight 300 and body in Rakuten Sans UI.
- Do separate sections with large rounded panels in deep purple `#480081` or pastel tints.
- Don't use sharp-cornered primary buttons; the measured radius is 9999px.
- Don't add heavy shadows; only the 4px 8px soft shadow is measured.
- Don't treat retailer logo colors as Rakuten colors.
- Don't use the accessibility widget's purple floating button as a brand component.

## Responsive Behavior

The 390px pass measured: h1 Stag 40px / 44px; h2 32px / 36px; body 16px / 22px; primary button 304px wide and still 56px high with padding `16px 32px`; a header that shows a purple "Join for Free" text link, 61px high. Column counts, the marquee behavior and the menu pattern were not measured.

## Iteration Guide

1. Canvas `#ffffff`, text `#575757`, headings `#252525`.
2. Primary pill: `#8529cd`, 56px, `16px 32px`, 9999px, 18px weight 600.
3. Headlines in Stag 40-46px weight 300.
4. Feature cards at 16px radius with pastel fills; one big `#480081` brand statement panel.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=rakuten --url=https://www.rakuten.com --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=rakuten`.
