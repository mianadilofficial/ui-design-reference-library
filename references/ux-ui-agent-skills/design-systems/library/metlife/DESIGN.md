---
version: alpha
name: MetLife
category: "Banking & Insurance"
description: "MetLife.com home (Global Employee Group Benefits): white canvas with warm #fbfaf8 bands, ink #2d2d2d, deep navy-teal #003652 primary buttons and headings, ivypresto-text serif 68px display with Inter body, 4px buttons, 12px cards and 999px outline pills."
colors:
  canvas: "#ffffff"
  ink: "#2d2d2d"
  primary: "#003652"
  on-primary: "#ffffff"
  surface-warm: "#fbfaf8"
  hairline: "#003652b3"
  primary-hover: "#226587"
  surface-teal-deep: "#154865"
typography:
  display:
    fontFamily: ivypresto-text, Georgia, "serif"
    fontSize: 68px
    fontWeight: 400
    lineHeight: 81.6px
  display-mobile:
    fontFamily: ivypresto-text, Georgia, "serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 57.6px
  heading:
    fontFamily: ivypresto-text, Georgia, "serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 67.2px
  subheading:
    fontFamily: Inter, Roboto, "Open Sans", Arial, "sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 33.8px
  body:
    fontFamily: Inter, Roboto, "Open Sans", Arial, "sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: Inter, Roboto, "Open Sans", Arial, "sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: Inter, Roboto, "Open Sans", Arial, "sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 1.2px
rounded:
  xs: 4px
  sm: 12px
  md: 16px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 30px
  s8: 32px
  s9: 48px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-teal-deep}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 24px
  footer:
    textColor: "{colors.canvas}"
---

# MetLife

Measured from https://www.metlife.com/ (final URL identical; title "Global Employee Group Benefits Provider - MetLife"; `lang en`; the page path in the site's own data layer is `/content/metlife/us/homepage`), 1280px desktop pass (page height 9,723px) and 390px mobile pass. A large insurer's group-benefits home.

## Overview

Calm, editorial and trustworthy. A thin utility bar above the masthead lists "ABOUT METLIFE GLOBAL", "METLIFE MOMENTS" and "METLIFE INVESTMENT MANAGEMENT" in small, letter-spaced uppercase, with a search icon. The masthead has the MetLife logo (a green-and-teal fold mark), an "INDIVIDUALS" outlined pill selector, nav items (Products & Solutions, Support, Resources) and two outlined pills (LOGIN and a USA flag selector). The hero is typographic: the 68px serif "Protect what matters most" in deep teal-navy on white, centered, with a 26px lead ("MetLife offers group benefits for every stage of life, helping you protect the life you've built and the people you built it for."). A full-width photograph of a family in a kitchen follows, then a filled "Log in to MyBenefits" button. "Coverage for real life" introduces an accordion list (Enhance your health coverage, Safeguard your valuables, Secure your family's future, Protect your finances, Reach your financial goals, Find more solutions, Get coverage as a federal employee) beside a rounded portrait of a couple with a dog; the open item lists Dental, Vision and Pet insurance links with arrows. Deeper down, dark teal stat cards read "TOP BENEFITS PROVIDER / #1 provider".

Measured background areas: `#ffffff` (4,594), `#fbfaf8` (3,932), `#003652` (2,344), `#154865` (1,401), `#effbff` (495). Photography is warm, candid and domestic.

## Colors

- **Canvas `#ffffff`** and warm band `#fbfaf8`; pale blue `#effbff` (the outlined pill's hover fill, `rgb(239, 251, 255)`).
- **Ink `#2d2d2d`**: body text, 15,665 characters; the most used color by far.
- **Primary `#003652`**: deep navy-teal for headings, nav, links and the "Log in to MyBenefits" button fill, white text on it. Hover `#226587`. Border `#003652b3`.
- **Card fill `#154865`**: lighter navy-teal on stat cards, with white text.
- `#c4beb5` and `#eae7e1` appear as measured warm greys (a background of weight 0 and one border).
- White text `#ffffff` (1,480 characters) sits on the two navy fills.
The Osano cookie-consent widget declares its own variables (`--osano-*`, e.g. `#1475b4`); they are third-party and excluded.

## Typography

Two families. **ivypresto-text** (400; fallback `Georgia, serif`) is the editorial display serif, used for H1, H2 and large statements (292 characters). **Inter** (variable 100-900, normal and italic; fallback `Roboto, "Open Sans", Arial`) carries everything else (18,109 characters). Ivypresto is a commercial typeface served by the site; Source Serif 4 or Georgia are stand-ins.

Scale: display 68px/81.6px weight 400 (48px/57.6px on mobile), heading 56px/67.2px weight 400 (42px on mobile), lead 26px/33.8px, 30px (179 characters), 18px, button 16px/24px weight 600, body 14px/21px weight 400 (15,707 characters, the main text size), nav 12px/18px with `1.2px` letter spacing, uppercase. Weights: 400 (16,677), 700 (1,024), 600 (700). Serif is reserved for headings; every control is Inter.

## Layout

The hero text is centered; the accordion and photograph form a two-column split lower down. Measured paddings: 16px (55), 24px (19), 8px, 80px (6), 32px, 4px; gaps 16px (37), 4px (28), 8px (16), 24px (14). Headings carry `0px 16px` side padding (also on mobile). The footer is 936px tall with white 12px/600 links on a dark fill. A full-bleed photograph band separates the hero from the first content block.

## Elevation & Depth

Flat: the box-shadow list is empty. Cards and buttons are separated by fill (`#154865` and `#003652` on white) or a 1px `#003652b3` outline. The warm `#fbfaf8` band separates sections.

## Shapes

Radii measured: `12px` (8 elements, stat cards), `999px` (3, the outlined pills for INDIVIDUALS, LOGIN, USA), `4px` (2, buttons) and `16px` (1, the portrait image). Tokens: `xs` 4px, `sm` 12px, `md` 16px, `pill`.

## Components

- **Primary button:** `#003652` fill, white Inter 16px weight 600, padding `12px 24px`, height 48px, radius 4px; hover fill `#226587` ("Log in to MyBenefits").
- **Outlined pill:** transparent or `#effbff` fill, 1px `#003652b3` border (full `#003652` on hover), `#003652` 12px uppercase text with a chevron, radius 999px, 26px tall.
- **Text link with arrow:** `#003652` Inter 16px weight 600 followed by an arrow ("Dental insurance →").
- **Accordion row:** 26px Inter heading in `#003652` with a chevron, content in 14px.
- **Stat card:** `#154865` fill, white text, 12px uppercase label over a large statistic, radius 12px, padding 24px, 336px by 281px.
- **Nav:** white bar, `#003652` 12px letter-spaced items with chevrons; height 126px including the utility bar.

## Content and Voice

The home page is organized by audience and need rather than by product list. Three audience blocks are introduced with "View MetLife's products and solutions tailored just for you": individuals ("managing their insurance, benefits and financial security needs"), Employers & Benefits Brokers ("professionals creating, managing or advising on employee benefit programs"), and Retirement & Income Solutions ("plan sponsors, financial advisors and brokers supporting retirement and income solutions"). Need-based groups contain the actual products: Identity & Fraud Protection, Group Variable Universal Life, Group Universal Life Insurance, Accidental Death & Dismemberment, Health Savings and Spending Accounts, Total Control Account (TCA), Employer-Sponsored Retirement Plans, Ethics & Fraud HelpLine, Accident & Health Insurance and the Retirement Lifetime Income Hub. Story teasers read "See how we're bringing our purpose to life through our benefits, coverage and support", "MetLife Pet and The Animal Foundation are helping new pet parents in Las Vegas start off right" and "Our new oral health library makes it easy to understand your dental benefits and protect your smile with confidence". The voice is reassuring, second person ("your income, your belongings and your family's future") and plain.

## Design System Architecture

No public MetLife design-system site or brand guideline was linked from the home page (https://www.metlife.com/ was opened; its inline script exposes only analytics data such as `pagePath`, `pageTemplateType: /conf/globalmarketingplatform/settings/wcm/templates/generic-content`). The shipped CSS shows a de-facto system: two typefaces, one navy-teal primary, a warm neutral, 4px/12px/16px/999px radii and a 4px spacing base (4, 8, 16, 24, 32, 48, 64 in the tokens).

## Do's and Don'ts

- Do set headlines in the serif at 56px to 68px weight 400 in `#003652`, and everything else in Inter.
- Do use `#003652` for primary actions and text links, with white text on filled buttons.
- Do use warm `#fbfaf8` for alternate bands and keep surfaces flat.
- Do use 999px outlined pills for utility selectors and 4px radii for filled buttons.
- Don't add drop shadows; none were measured.
- Don't set body text above 16px; the body size is 14px.
- Don't use the cookie widget's blue as a brand color.

## Responsive Behavior

Measured at 390px: H1 48px/57.6px weight 400 with `0px 16px` padding (358px wide; desktop 68px/81.6px), H2 42px/50.4px (374px wide; desktop 56px), and the "Log in to MyBenefits" CTA at 16px weight 600, `#ffffff` on `#003652`. Layout changes (column counts, nav collapse, accordion arrangement) were not measured.

## Iteration Guide

1. White and `#fbfaf8` canvas; ink `#2d2d2d`; primary `#003652`.
2. Serif display 68px/400; Inter 14px body, 16px/600 controls, 12px letter-spaced uppercase nav.
3. Filled 4px-radius buttons 48px tall; outlined 999px pills 26px tall.
4. Stat cards `#154865`, 12px radius, 24px padding.
5. Run `node web/scripts/verify-designs.mjs --slug=metlife`.
