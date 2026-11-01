---
version: alpha
name: Lemon Squeezy
category: "Product & SaaS"
description: "Lemon Squeezy pairs an electric purple #5423e7 hero and a yellow #ffc233 announcement bar with Circular Pro Book headlines (80px, -3.2px tracking) and Inter body text in #121217 / #6c6c89, white 40px-radius pill buttons that warm to #ffd266 on hover, and pastel/saturated colour-block feature panels."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f7f8"
  ink: "#121217"
  ink-muted: "#6c6c89"
  primary: "#5423e7"
  on-primary: "#ffffff"
  white-90: "#ffffffe6"
  ink-on-dark-muted: "#ffffff99"
  violet: "#7047eb"
  yellow: "#ffc233"
  yellow-light: "#ffd266"
  red-700: "#d50b3e"
  red-500: "#f53d6b"
  pink-200-panel: "#fbb1c4"
  pink-50: "#feecfb"
  blue-500: "#00acff"
  blue-200: "#ade4ff"
  green-500: "#2dca72"
  green-200: "#b2eecc"
  orange-500: "#ff7d52"
  orange-200: "#ffcdbd"
  orchid: "#cf75ff"
  orchid-50: "#cf75ff80"
  black: "#000000"
typography:
  display:
    fontFamily: "\"Circularpro book\", sans-serif"
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
    letterSpacing: "-3.2px"
  display-mobile:
    fontFamily: "\"Circularpro book\", sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-1.6px"
  subheading:
    fontFamily: "\"Circularpro book\", sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 31.72px
    letterSpacing: "-0.52px"
  eyebrow:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.8px
    letterSpacing: 2px
    textTransform: uppercase
  body:
    fontFamily: Inter, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 30.6px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-0.15px"
  button-large:
    fontFamily: Inter, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 25.2px
    letterSpacing: "-0.18px"
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 20px
  md: 32px
  lg: 40px
  xl: 48px
spacing:
  s1: 1.6px
  s2: 2.4px
  s3: 4px
  s4: 4.8px
  s5: 6px
  s6: 6.4px
  s7: 8px
  s8: 9px
  s9: 9.6px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 20px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.yellow-light}"
    textColor: "{colors.ink}"
  button-hero:
    backgroundColor: "{colors.white-90}"
    textColor: "{colors.ink}"
    typography: "{typography.button-large}"
    rounded: "{rounded.lg}"
    height: 57px
  button-tinted:
    backgroundColor: "{colors.orchid-50}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.lg}"
    height: 46px
  announcement-bar:
    backgroundColor: "{colors.yellow}"
    textColor: "{colors.ink}"
    height: 70px
  accordion-item:
    textColor: "{colors.violet}"
    rounded: "{rounded.xs}"
    padding: 9px 30px
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-on-dark-muted}"
    typography: "{typography.nav}"
    padding: 32px 8px 32px 16px
---

# Lemon Squeezy

## Overview

Lemon Squeezy (https://www.lemonsqueezy.com/) is a merchant-of-record platform for software companies; the page title is "Payments, tax & subscriptions for software companies • Lemon Squeezy". The header logo file is named `ls-logo-stripe-company.svg`, and the capture shows "a stripe company" under the wordmark; a yellow banner at the very top reads "2026 Update: Lemon Squeezy + Stripe Managed Payments" with a white "Read more" pill.

Below the banner, the hero is a full-width electric purple #5423e7 block. On the left: the 80px Circular Pro Book headline "Payments, tax & subscriptions for software companies" in white, a muted white subline ("Selling digital downloads, subscriptions, and software licenses has never been easier, faster, or more secure.") and a white "Get started →" pill. On the right: a tilted iPad showing the Lemon Squeezy dashboard with revenue charts. A "TRUSTED BY THOUSANDS OF COMPANIES GLOBALLY" eyebrow sits beside a row of white customer logos at the hero's foot.

The body then alternates between white and #f7f7f8 sections. Each section opens with a small coloured uppercase eyebrow ("WHY LEMON SQUEEZY?" in violet, "ECOMMERCE" in red, "MARKETING" in blue), a large Circular headline, and a muted Inter paragraph with key phrases set in the darker ink. Feature showcases are split colour-block panels: a saturated half and a pastel half side by side (red #f53d6b with pink #fbb1c4, blue #00acff with #ade4ff, green #2dca72 with #b2eecc, orange #ff7d52 with #ffcdbd, orchid #cf75ff with #e5b5fe), each holding product screenshots such as checkout forms, storefronts and email campaigns. Three-column feature grids with labels like "E/1", "E/2" follow each showcase.

The tone is upbeat and informal for a payments company: "We make running your software business easy peasy", "It really is easy-peasy". The page is long (18,946px measured) and highly visual.

## Colors

The site exposes its palette as CSS custom properties with numbered scales (`--purple-500`, `--green-700`, `--orange-200`…). The tokens below are the ones rendered on the home page.

**Core**
- **canvas #ffffff** — the default page background.
- **page-largest #f7f7f8** — `--grey-50`; the light grey of alternating sections, the colour covering the largest measured area.
- **ink #121217** — `--black-2`; headlines and emphasised phrases (3,913 measured characters).
- **ink-muted #6c6c89** — `--gray-500`; paragraph text (3,797 characters). Sections mix the two: muted sentences with darker bold fragments.
- **primary #5423e7** — the hero and header purple, declared as `--blue: #5423e7`. This is the brand's signature surface colour. It covers 3,018 measured units of background.
- **on-primary #ffffff** — white headline and logo colour on the purple hero.
- **ink-on-dark-muted #ffffff99** — `--light-white`; navigation links, hero subline and the "Trusted by" eyebrow on purple.
- **yellow #ffc233** — `--ls-color-yellow`; the announcement bar.
- **yellow-light #ffd266** — `--ls-color-yellow-lighter`; the hover fill of the white "Get started" pills.
- **white-90 #ffffffe6** — `--button-primary-light`; the 90% white hero CTA.

**Eyebrow and accent text**
- **violet #7047eb** — `--purple-500`; "WHY LEMON SQUEEZY?" eyebrow and the 01–06 numbers in the feature accordion.
- **red-700 #d50b3e** — "ECOMMERCE" eyebrow and "E/1" labels. Other eyebrow colours measured are #0075ad (`--blue-700`), #1e874c (`--green-700`), #db0bb9 (`--pink-700`) and #eb3a00 (`--orange-700`).

**Panel pairs** (saturated / pastel)
- **red-500 #f53d6b** with **pink-200-panel #fbb1c4**
- **blue-500 #00acff** with **blue-200 #ade4ff**
- **green-500 #2dca72** with **green-200 #b2eecc**
- **orange-500 #ff7d52** with **orange-200 #ffcdbd**
- **orchid #cf75ff** (`--orchid`, `--plum-500`) with #e5b5fe
- **pink-50 #feecfb** — the pale pink behind the "Merchant of Record" diagram.
- **orchid-50 #cf75ff80** — the half-transparent orchid fill of "Explore the API" / "Read the docs" buttons on dark panels.
- **black #000000** — the developer section's dark panels.

## Typography

Two families are loaded: **Circular Pro Book** (CSS name "Circularpro book", weight 400) for headlines and **Inter** (400 and 500) for everything else. Inter carries most of the text (7,322 characters against 1,411 for Circular). Circular Pro is a licensed commercial typeface; when it is unavailable, a geometric sans at regular weight with tight negative tracking keeps the character, and Inter is open source.

- **display** — Circular Pro Book 80px / 80px, weight 400, letter-spacing -3.2px (-0.04em). The hero headline is regular weight, not bold.
- **display-mobile** — 40px / 40px, -1.6px.
- **subheading** — Circular Pro Book 26px / 31.72px, -0.52px (feature titles such as "Global tax compliance").
- **eyebrow** — Inter 14px / 23.8px, weight 400, letter-spacing 2px, uppercase.
- **body** — Inter 18px / 30.6px, weight 400. The most-read size on the page (6,258 characters).
- **button** — Inter 15px / 24px, weight 500, -0.15px.
- **button-large** — Inter 18px / 25.2px, weight 500, -0.18px (the hero CTA).
- **nav** — Inter 15px / 24px, weight 400.

Section headlines were measured at 56px (-1.68px), 48px (-1.44px), 38.4px (-0.768px) and 36px (-0.72px). Every large size carries negative tracking of roughly -0.02em to -0.04em; the uppercase eyebrows are the only positively tracked text.

## Layout

The desktop capture is 1,280px wide. The announcement bar is 70px tall (yellow); the purple header and hero follow, with hero content in two columns starting at x 64. The header shows the logo on the left, five visible links (Platform, Resources, Pricing, Wedges, Help) in the centre with dropdown chevrons on the first two, and "Sign in" plus the white "Get started" pill on the right.

Sections use a two-column editorial pattern: headline on the left, paragraph on the right, both above a full-width colour-block showcase split into two halves. Feature grids run three columns; the extraction reports a maximum of four card columns. The "Why Lemon Squeezy" block pairs a numbered accordion (01–06) on the left with a diagram on a pink-50 panel on the right.

Spacing tokens are fine-grained: 1.6px, 2.4px, 4px, 4.8px, 6px, 6.4px, 8px, 9px, 9.6px and 12px; the fractional values come from em-based spacing in the stylesheet. Larger measured values: gaps of 24px (30 uses), 16px, 80px; paddings of 40px (72 uses), 32px, 24px, 120px and 160px (section padding). Density is airy: long sections with large headlines and short paragraphs.

## Elevation & Depth

No box-shadows were recorded in the extraction's computed styles for the home page's DOM. Depth comes from the product imagery: screenshots and device mockups (iPad, iPhone, checkout cards, email previews) are photographed or rendered with their own soft shadows inside the images, sitting on flat colour panels. Interface elements themselves are flat. Do not add CSS shadows to buttons or section panels.

## Shapes

The radius scale is 8px, 20px, 32px, 40px and 48px. The 40px radius (15 elements) makes every button a pill at its measured heights (40px, 46px, 54px, 57px). 8px is the most frequent (25 elements), used on accordion rows and small surfaces. 32px and 48px round the larger media panels; 20px appears once. Section bands and colour-block panels are square-edged and full-width.

## Components

**Announcement bar.** Full-width #ffc233, 70px tall, centred #121217 Inter text with a white "Read more" pill. On hover the bar's opacity drops to 0.8.

**Header.** Sits on #5423e7; links in Inter 15px #ffffff99 with 32px vertical padding; logo with "a stripe company" lock-up on the left.

**Primary button.** White #ffffff pill (40px radius), #121217 Inter 500 15px text, 8px 20px padding, 40px tall, with a → arrow. Hover changes the fill to #ffd266.

**Hero button.** 90% white #ffffffe6 pill, Inter 500 18px / 25.2px, 57px tall; hover fill #ffd266.

**Tinted button.** On dark panels: #cf75ff80 (orchid at 50%) pill, white Inter 500 16px, 46px tall ("Explore the API", "Read the docs"). A #ff571f26 orange-tinted variant ("Read the case study") was also measured.

**Eyebrow.** Inter 14px uppercase, 2px tracking, colour-coded by section.

**Feature accordion.** Numbered rows (01–06) with a violet #7047eb number, a title, thin dividers, 8px radius and 9px 30px padding; the open row shows a muted paragraph with bold emphasis and an arrow.

**Feature grid item.** "E/1"-style coloured label, Circular title, Inter muted paragraph with bold fragments.

**Colour-block showcase.** Two adjacent full-height panels (saturated + pastel) holding product screenshots.

## Design System Architecture

Lemon Squeezy publishes a brand assets page (https://www.lemonsqueezy.com/brand) with downloadable logos, "Powered by"/"Payments by" badges and product images. Its rules: logos must not be "modified, altered, or distorted in any way" (including colour, proportion and typography), provided files must be used rather than recreations, and clear space must surround logos and badges. It publishes no colour values, typefaces or UI components, and there is no public web design system.

The de-facto system is the site's CSS custom properties. They define numbered colour ramps per hue — purple (`--purple-50-501` … `--purple-900`), blue, green, orange, pink, red, yellow and grey — plus semantic names (`--black-2: #121217`, `--gray-500: #6c6c89`, `--border-color: #d1d1db`, `--button-primary-light: #ffffffe6`, `--ls-color-yellow: #ffc233`, `--ls-color-yellow-lighter: #ffd266`, `--light-white: #fff9`, `--dark-mode-bg-lighter: #141414`) and the hero purple as `--blue: #5423e7`. Each feature section picks one hue ramp and uses its 500 step as the saturated panel, its 200 step as the pastel panel and its 700 step for the eyebrow text. Site assets (logo, fonts) are served from cdn.prod.website-files.com.

## Do's and Don'ts

**Do**
- Open with the #5423e7 purple hero and white Circular Pro Book headline at regular weight with tight tracking.
- Use white pill buttons on purple and let them warm to #ffd266 on hover.
- Colour-code sections: one hue ramp per section, 500 for the saturated panel, 200 for the pastel panel, 700 for the eyebrow.
- Write body copy in muted #6c6c89 with key phrases in #121217.
- Keep headlines in Circular and everything else in Inter.
- Show real product UI in device mockups.

**Don't**
- Don't bold the headlines; the display face is Circular Pro Book at 400.
- Don't use square buttons; every measured button is a 40px-radius pill.
- Don't add CSS shadows to panels.
- Don't mix two hue ramps inside one showcase.
- Don't alter or recreate the logo; the brand page forbids it.

## Responsive Behavior

At 390px the mobile pass measured the hero headline at 40px / 40px with -1.6px tracking (half the desktop 80px), body text at 16px / 25.6px (desktop 18px / 30.6px) and the eyebrow unchanged at 14px with 2px tracking. The yellow announcement bar stays 70px tall at full width with 13px text, and the purple hero band measured 590px tall. A "menu" toggle was visible and no header links were visible; the maximum card column count dropped from four to two.

The mobile capture shows the hero headline above the dashboard mockup and the feature grids in a single column.

The stylesheet declares `max-width` breakpoints at 991px, 767px and 479px (plus single rules at 1280px, 768px, 480px and 390px). Behaviour at widths other than 390px and 1,280px was not measured.

## Iteration Guide

1. Put the 70px #ffc233 announcement bar and the #5423e7 hero in place first; they carry the brand.
2. Load Circular Pro Book (or a regular-weight geometric substitute) for headlines and Inter 400/500 for the rest.
3. Set display at 80px / 80px / -3.2px and display-mobile at 40px / 40px / -1.6px.
4. Make buttons 40px-radius pills: white on purple, hover #ffd266; tinted orchid on dark panels.
5. Build each feature section as eyebrow + headline + muted paragraph, then a saturated/pastel colour-block pair from one hue ramp.
6. Use 40px padding inside components and 120px–160px between sections.
7. Check against the captures at 1,280px and 390px. Dark mode, hover states other than the CTAs and intermediate widths were not measured.
