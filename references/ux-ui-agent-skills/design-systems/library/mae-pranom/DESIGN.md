---
version: alpha
name: "Maepranom"
category: "Thai Brands"
description: "Maepranom Thai sauces site: warm cream #fff6eb canvas, brand red #c72931 and gradient pills, dark red-brown ink #451611, Chonburi serif headings with DB Helvethaica X body, full-bleed red product chapters and 24px cards."
colors:
  canvas: "#fff6eb"
  ink: "#451611"
  primary: "#c72931"
  cta-gradient-top: "#d61f27"
  cta-gradient-bottom: "#b40d12"
  ink-body: "#383838"
  ink-black: "#000000"
  ink-slate: "#1c252e"
  card-bg: "#c7293133"
typography:
  display:
    fontFamily: "\"DB Helvethaica X\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22px
  display-mobile:
    fontFamily: Chonburi, "Chonburi Fallback", Chonburi, serif
    fontSize: 33.15px
    fontWeight: 400
    lineHeight: 41.4375px
  heading:
    fontFamily: Chonburi, "Chonburi Fallback", Chonburi, serif
    fontSize: 70.4px
    fontWeight: 400
    lineHeight: 88px
  subheading:
    fontFamily: Chonburi, "Chonburi Fallback", Chonburi, serif
    fontSize: 56.8889px
    fontWeight: 400
    lineHeight: 85.3333px
    letterSpacing: 1.28px
  body:
    fontFamily: "\"DB Helvethaica X\", sans-serif"
    fontSize: 28.16px
    fontWeight: 400
    lineHeight: 28.16px
  link:
    fontFamily: Chonburi, "Chonburi Fallback", Chonburi, serif
    fontSize: 28.16px
    fontWeight: 400
    lineHeight: 42.24px
rounded:
  xs: 12px
  sm: 16px
  md: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 34px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-slate}"
    typography: "{typography.display}"
    rounded: "{rounded.xs}"
    padding: 6px 10px
    height: 38px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 16px 34px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  button-primary:
    backgroundImage: "linear-gradient({colors.cta-gradient-top}, {colors.cta-gradient-bottom})"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 16px 34px
    height: 74px
---

## Overview

Maepranom (maepranom.com, measured at the /en path; the fetched page describes Phiboonchai Maepranom Thai Chili Paste Co., Ltd.) is a Thai food producer of chili pastes, dipping sauces, curry pastes, seasonings and ready-to-cook sets, with more than six decades of experience and exports to over 60 countries, according to its own page. Products are also sold on Shopee, Lazada, TikTok and LINE. The page is a warm, heritage-meets-appetite brand site: a full-bleed hero photograph of a shared Thai meal with the oval yellow "TRADE MARK SINCE 1959" portrait badge above a cream "MAEPRANOM" wordmark, a jar of Thai chili paste in the lower right, then a cream band with two red pill buttons ("Explore Our Products", "Where to Buy"), the headline "THAI TASTE, GLOBAL TRUST" in red serif capitals, a four-column trust row (Authentic Thai Taste, Premium Ingredients, Trusted Globally, International Standards) with red line icons, and deep-red product chapters, the first with a "No.1 Best Seller" medal beside the Thai heading "น้ำจิ้มไก่" and the English "DIPPING FOR CHICKEN". The page measures 5444px tall at 1280px. The identity is a confident, traditional red and cream palette with food photography doing the selling.

## Colors

`canvas` `#fff6eb` is a warm cream (area 8574) and the main page background. `ink` `#451611` is a very dark red-brown used for body headings and text (602 characters), `primary` `#c72931` is the brand red (text 472 characters, area 32) used for the large headings, icons, borders and the footer text. The primary buttons are a vertical gradient from `#d61f27` (`cta-gradient-top`) to `#b40d12` (`cta-gradient-bottom`) with cream text. `card-bg` `#c7293133` is the primary red at 20% alpha, the translucent fill of cards. Neutrals are `ink-body` `#383838` (320 characters, the body copy on cream), `ink-black` `#000000`, and `ink-slate` `#1c252e` for navigation labels and the language switch. Cream text `#fff6eb` (602 characters) sits on red and photographs. There is no blue or green in the interface; the Tailwind default ring color `rgb(59 130 246/0.5)` in the root variables is a framework default and not brand color.

## Typography

Two typographic voices. Chonburi (400), sets the major headings and the pill labels: 70.4px on an 88px line height for the section heading, 56.8889px on 85.3333px with 1.28px letter-spacing for the headline, 28.16px on 42.24px for button labels, and 33.15px on 41.4375px on the 390px mobile pass. DB Helvethaica X (weights 400 and 700, plus an Extended 400) sets body and navigation: 28.16px on 28.16px for lead copy, 22px for navigation and the language button, 17.92px (538 characters), 25.6px and 21.76px for supporting text, 14.08px for small notes. The most-read sizes are 28.16px (675 characters), 17.92px, 25.6px and 21.76px. The serif-on-cream pairing with a narrow humanist Thai sans gives a hand-lettered, label-like feeling that echoes the product jars. The page declares `Chonburi Fallback` as the fallback family for the serif.

## Layout

The page alternates cream bands and full-bleed red product chapters, each a two-column composition: Thai and English product name with a short description on one side, and a lifestyle photograph with the bottle on the other, mirrored on alternate chapters. The trust row is four equal columns separated by thin tan vertical rules. The root layout is Tailwind-style (`--tw-*` variables). Measured gaps are 8px (36 uses), 12px, 6px, 4px, 16px, 24px and 10px, with percentage gaps of 2%, 5% and 10%; paddings include 16px (17 uses), 20px, 8px, 40px and 64px. Navigation is a short row of labels (About Us, Products, Recipes, News & Events, Contact Us) with an "EN" language button.

## Elevation & Depth

One soft shadow family is measured, on three elements: `rgba(145, 158, 171, 0.12) 0px 12px 21px -4px, rgba(145, 158, 171, 0.2) 0px 0px 1.75px 0px`, a gentle blue-grey lift. Most depth is from the red full-bleed chapters with a textured gradient background in the capture, the hero photograph and the translucent `#c7293133` cards.

## Shapes

Radii: 9999px (17 elements, the pill buttons and badges), 24px (3, cards, `rounded.md`), 16px (3, `rounded.sm`), 16px 16px 0px 0px (2, image tops) and 12px (1, the language button, `rounded.xs`). Photographs in the product chapters have visibly rounded corners; the large call-to-action buttons are full pills.

## Components

- **Primary pill button:** "Explore Our Products" and "Where to Buy", Chonburi 28.16px on a 42.24px line height, cream text on the red gradient, 16px 34px padding, 74px tall (413px wide for the first), fully rounded.
- **Language button:** "EN", DB Helvethaica X 22px, `#1c252e` text on cream with a 2px solid `#c72931` border, 12px radius, 38px tall, 6px 10px padding.
- **Trust column:** a red line icon, a Chonburi title in two lines and a small DB Helvethaica description.
- **Product chapter:** red textured background, award medal ("No.1 BEST SELLER IN THAILAND"), Thai heading in cream Chonburi, English subtitle in capitals, three short lines of description.
- **Card:** `#c7293133` fill, 24px radius.
- **Footer:** cream background, red text at 17.92px on a 26.88px line height, listing About Us, Products, Recipes, Our Products, News & Events and Contact.

## Design System Architecture

No brand guidelines, design-system documentation or press kit exist on the site (source: https://www.maepranom.com/en); the fetched page links only to About, Our Story, Products, Recipes, News & Events, Contact, social profiles, marketplaces and policy PDFs. The de-facto system is a Tailwind build: the root variables are Tailwind utilities (`--tw-ring-color`, `--tw-shadow`, `--tw-ring-offset-width`) plus `--font-chonburi: "Chonburi","Chonburi Fallback"`. Brand values are therefore expressed in utility classes rather than named brand tokens.

## Do's and Don'ts

- Do keep the cream `#fff6eb` and brand red `#c72931` pairing, with `#451611` for dark text.
- Do set big headings in Chonburi and running text in DB Helvethaica X.
- Do use full pill buttons with the red gradient for the two main actions.
- Do use the Thai product name in large Chonburi beside an English descriptor.
- Don't add blues or greens, and don't use the Tailwind default ring blue.
- Don't use hard black shadows; the only measured shadow is a soft 12-20% blue-grey.
- Don't use thin weights for Thai text; the measured weights are 400 and 700.

## Responsive Behavior

The 390px mobile pass measured the main heading at 33.15px on a 41.4375px line height (desktop 70.4px on 88px), with padding `0px 16px` on the heading block. The mobile size list is 16px (720 characters), 18px, 20px, 13px, 28px, 22px, 21px, 32px and 33.15px. Column counts, image layout, navigation form and breakpoints on mobile are not measured.

## Iteration Guide

1. Start on `canvas` with `ink` text and `primary` headings.
2. Use Chonburi for headings and button labels, DB Helvethaica X for everything else.
3. Make the primary action a 74px-tall pill with the measured red gradient and cream label.
4. Alternate cream bands with full-bleed red product chapters.
5. Run `node web/scripts/verify-designs.mjs --slug=mae-pranom` after changes.

## Voice

Copy is warm, confident and appetizing, with short benefit lines in English and Thai headings: "THAI TASTE, GLOBAL TRUST", "Crafted from authentic Thai recipes", "Carefully selected herbs & spices", "Exported to 60+ countries", "Quality & safety certified", "Thai Flavour, Endless Possibilities.", "Rich and layered in every spoonful." Product chapters follow a pattern of Thai name, English name and a one-sentence serving suggestion ("Perfect for grilled or fried chicken, prawns, fish cakes, spring rolls, and sausages.").
