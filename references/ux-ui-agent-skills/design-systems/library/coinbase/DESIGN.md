---
version: alpha
name: Coinbase
category: "Fintech & Crypto"
description: "Coinbase's homepage uses a white canvas (#ffffff), a cool grey band (#eef0f3), near-black rounded panels (#0a0b0d), and one accent, Coinbase Blue (#0052ff), on 56px-radius pill buttons with CoinbaseDisplay headlines at 80px/400 and grey 13px CoinbaseText body."
colors:
  canvas: "#ffffff"
  ink: "#5b616e"
  primary: "#0052ff"
  on-primary: "#ffffff"
  surface-alt: "#eef0f3"
  near-black: "#0a0b0d"
  negative-on-dark: "#f0616d"
  ink-muted-on-dark: "#8a919e"
  hairline: "#5b616e33"
  link-on-dark: "#578bfa"
  primary-hover: "#0048e0e0"
  nav-black: "#000000"
  nav-link-blue: "#0667d0"
typography:
  display:
    fontFamily: CoinbaseDisplay, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
  display-mobile:
    fontFamily: CoinbaseDisplay, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 52px
    fontWeight: 400
    lineHeight: 52px
  heading:
    fontFamily: CoinbaseDisplay, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 44px
    fontWeight: 400
    lineHeight: 48px
  subheading:
    fontFamily: CoinbaseSans, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 36px
  body:
    fontFamily: CoinbaseText, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: CoinbaseSans, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 18.4px
  nav:
    fontFamily: CoinbaseSans, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 15px
  input:
    fontFamily: CoinbaseSans, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 24px
  xl: 40px
  2xl: 56px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 48px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 16px 32px
    height: 56px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 0px 24px
    height: 44px
    transform: matrix(1, 0, 0, 1, 0, 0)
  link-on-dark:
    textColor: "{colors.link-on-dark}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.nav-black}"
  nav-link:
    textColor: "{colors.nav-link-blue}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
  text-input:
    textColor: "{colors.near-black}"
    typography: "{typography.input}"
    padding: 16px
    height: 56px
  card:
    backgroundColor: "{colors.surface-alt}"
    textColor: "{colors.nav-black}"
    rounded: "{rounded.2xl}"
  footer:
    textColor: "{colors.nav-black}"
---

## Overview

Coinbase's homepage (measured at `https://www.coinbase.com/`, desktop 1280px and mobile 390px) is a white-and-black retail-finance page with exactly one chromatic color: Coinbase Blue (`{colors.primary}`). The page alternates three grounds: white (`{colors.canvas}`), a cool light grey (`{colors.surface-alt}`), and a near-black (`{colors.near-black}`) used for large rounded product panels. Headlines are very large and regular-weight in the custom CoinbaseDisplay face, buttons are big pills, and every media block is a rounded container with an oversized radius.

The capture shows: a sticky white navigation bar (the blue circular "C" logo, links Cryptocurrencies / Individuals / Businesses / Institutions / Developers / Company, two grey circular icon buttons for search and language, a grey "Sign in" pill and a blue "Sign up" pill); a hero with "It's time to take control" on the left and a "Learn more" blue pill, beside a black rounded panel with a dotted grid, a blue glow, and a "coinbase" wordmark chip; a grey band "Explore crypto like Bitcoin, Ethereum, and Dogecoin." with a black "See more assets" pill beside a black live-price card (tabs Tradable / Top gainers / New on Coinbase, rows for Bitcoin, Ethereum, Tether, BNB, XRP, USDC with prices in THB and red change figures); then "Powerful tools, designed for the advanced trader." with a black "Start trading" pill beside a black panel containing tablet and phone mock-ups; and the start of a "Coinbase One" section with an outlined chip.

**Key Characteristics:**
- Single accent: `{colors.primary}`, the same value as `blue60` in Coinbase's open-source design system theme.
- Pill buttons with very large radii (`{rounded.2xl}` 56px on the main CTA), 56px tall with `16px 32px` padding, label in CoinbaseSans 600 at 16px.
- Display type at 80px with line-height equal to font-size (`{typography.display}`), dropping to 52px on mobile (`{typography.display-mobile}`).
- Three-font system: CoinbaseDisplay (headlines), CoinbaseSans (UI), CoinbaseText (body), plus CoinbaseIcons.
- Large near-black rounded panels (`{colors.near-black}`) that hold product UI and prices, contrasting with the white page.
- Body copy is small (13px in `{typography.body}`) and set in a mid grey (`{colors.ink}`), so headlines do nearly all the talking.
- Positive/negative market changes use red (`{colors.negative-on-dark}`) on dark panels.

## Colors

The page values were measured on the live site (`web/data/extracted/coinbase.json`) and cross-checked against the default theme of Coinbase's open-source Coinbase Design System (CDS), `packages/web/src/themes/defaultTheme.ts` in https://github.com/coinbase/cds. In that file the light spectrum defines `blue60: '0,82,255'`, `gray10: '238,240,243'`, `gray60: '91,97,110'`, `gray100: '10,11,13'`, and the dark spectrum defines `gray60: '138,145,158'` and `red60: '240,97,109'` — the same RGB triples as the hex values below.

### Brand
- **Coinbase Blue** (`{colors.primary}`): CTA fill, logo, link-like emphasis. In CDS it is `bgPrimary` and `fgPrimary` in the light scheme.
- **On-primary** (`{colors.on-primary}`): white label on blue buttons.
- **Primary hover** (`{colors.primary-hover}`): measured hover fill, a slightly darker blue with alpha.
- **Link on dark** (`{colors.link-on-dark}`): a lighter blue used for the "Bitcoin" row link on the dark price card.
- **Nav link blue** (`{colors.nav-link-blue}`): a deeper blue measured on the navigation link element.

### Surfaces
- **Canvas** (`{colors.canvas}`): white page ground (CDS `bg`).
- **Surface alt** (`{colors.surface-alt}`): the cool grey band and card ground (CDS `bgAlternate`/`bgSecondary`, spectrum `gray10`).
- **Near-black** (`{colors.near-black}`): the dark panels and the heading text color (CDS `bgInverse`/`fg`, spectrum `gray100`).
- **Hairline** (`{colors.hairline}`): 20% alpha of the grey (CDS `bgLine` is `gray60` at 0.2).

### Text
- **Ink** (`{colors.ink}`): the muted grey for paragraphs (CDS `fgMuted`); the most-read text color on the page.
- **Near-black** also serves as heading color (measured on h1, h2, h3).
- **Nav black** (`{colors.nav-black}`): pure black on the nav container.
- **Ink muted on dark** (`{colors.ink-muted-on-dark}`): lighter grey for secondary text on dark panels (CDS dark `fgMuted`).

### Semantic
- **Negative on dark** (`{colors.negative-on-dark}`): the red for falling prices on the dark card (CDS dark `fgNegative`). The light-scheme CDS positive green and negative red are not used as large fills on this page.

### Usage rules
- Blue marks the primary action only; secondary actions on this page are black pills (`{colors.near-black}` with white labels) or grey pills.
- Grey and near-black do the structural work; never introduce a second hue for sections.
- Keep headlines in near-black, paragraphs in `{colors.ink}`.

## Typography

### Families
- **CoinbaseDisplay** (400): hero and section headlines.
- **CoinbaseSans** (400, 500 to 800 variable): UI, buttons, navigation, inputs, subheadings.
- **CoinbaseText** (400): body paragraphs.
- **CoinbaseIcons**: icon font.
Creative Review (5 April 2022) reports that the 2022 rebrand by Moniker included "a custom font, Coinbase Sans, inspired by 'forgotten blue collar' 20th century typefaces". The fallback stack on the site is `-apple-system, system-ui, Segoe UI, Roboto, Helvetica, Arial, sans-serif`.

### Scale (measured)
| Role | Token | Font | Size / line-height | Weight |
|---|---|---|---|---|
| Hero h1 | `display` | CoinbaseDisplay | 80px / 80px | 400 |
| Hero h1, mobile | `display-mobile` | CoinbaseDisplay | 52px / 52px | 400 |
| Section h2 | `heading` | CoinbaseDisplay | 44px / 48px | 400 |
| Feature h3 | `subheading` | CoinbaseSans | 32px / 36px | 400 |
| Body | `body` | CoinbaseText | 13px / 20px | 400 |
| Button | `button` | CoinbaseSans | 16px / 18.4px | 600 |
| Navigation | `nav` | CoinbaseSans | 16px / 15px | 400 |
| Input | `input` | CoinbaseSans | 16px / 24px | 400 |

### Principles
- Display and heading sizes are regular weight (400), never bold; the weight 600 appears on buttons.
- Headline line-height is 1.0 to 1.09 and wraps to two lines.
- Body is deliberately small and grey beneath a big headline.
- CDS's own scale (from `defaultTheme.ts`) is separate and smaller (display1 64px/72px, title1 28px/36px, body 16px/24px, caption 13px) and describes the product UI rather than this marketing page.

### Font substitutes
All three faces are proprietary. For display use a neo-grotesque with a regular weight, for example Inter or Helvetica Neue at 400 with line-height 1.0 for sizes above 40px; for UI and button text Inter at 600; for body Inter at 400 in the grey above.

## Layout

- Two-column hero and feature bands: text on one side (about 584px wide at a 1280px viewport, measured for the h1/h2 blocks) and a square rounded media panel on the other (the card measured 584px by 584px).
- Bands are full-bleed and alternate white, `{colors.surface-alt}`, white; the dark panels sit inside the bands rather than replacing them.
- Alternating sides: text left/media right in the first two bands, media left/text right in the third.
- The nav is sticky and overlaps content in the capture (it appears across the hero in the full-page screenshot).
- Spacing tokens: 4, 6, 8, 10, 12, 16, 24, 32, 48, 64px (`spacing.s1` to `spacing.s10`); CDS's own space scale in `defaultTheme.ts` runs 2px to 80px in steps tied to 8px.
- Section content is spacious: large vertical gaps between bands, small paragraphs, and a single button per block.

## Elevation & Depth

Depth is expressed with color-blocked panels, not with shadows: no box-shadow was measured on the measured cards or buttons. Dark panels lift off the white page by contrast; the grey band separates sections. The sticky nav is a white bar with a 1px hairline underline in the capture. The only gradient-like effect is the blue glow and dotted grid inside the hero panel, which is imagery.

## Shapes

- `{rounded.2xl}` 56px: primary and secondary CTA pills and the large square card.
- `{rounded.pill}`: nav links and icon buttons (a 100000px radius was measured; CDS defines `borderRadius 1000` as 1e5).
- `{rounded.xl}` 40px and `{rounded.lg}` 24px: large panels and mid-size containers.
- `{rounded.md}` 12px, `{rounded.sm}` 8px, `{rounded.xs}` 4px: inputs, chips, small elements. CDS defines the same steps (4, 8, 12, 16, 24, 32, 40, 48, 56) in its `borderRadius` scale.
- Product mock-ups sit inside panels with 40px or larger rounding, so the whole page reads as soft and friendly.

## Components

### Buttons
- **Primary** (`button-primary`): `{colors.primary}` fill, white label, CoinbaseSans 600 16px, 56px tall, `16px 32px`, 56px radius. Hover fill is `{colors.primary-hover}`.
- **Secondary (nav "Sign up")** (`button-secondary`): same blue, 44px tall, `0px 24px` padding, 56px radius.
- **Neutral pills**: "Sign in" is a grey pill on `{colors.surface-alt}`; hover goes to a slightly darker translucent grey (measured on the circular icon button).
- **Black pills**: "See more assets" and "Start trading" use `{colors.near-black}` with a white label on light bands.

### Navigation
- White bar with a blue circular logo, six links in CoinbaseSans 16px black, circular grey icon buttons, a grey "Sign in" pill and a blue "Sign up" pill. Nav items have a pill-shaped hit area.

### Inputs
- `text-input`: 56px tall, 16px padding, CoinbaseSans 16px, text in `{colors.near-black}`.

### Cards and panels
- `card`: `{colors.surface-alt}` ground, 56px radius, black text; large square panels hold imagery. Dark panels hold the live price list with tabs rendered as pills (selected tab has a dark-grey fill), asset icons, white prices and red percent changes.

### Chips
- Outlined pill chip with an icon and uppercase label ("COINBASE ONE").

### Footer
- Link columns (Company: About, Careers, Affiliates, Blog, Press, Security ...) in black text on white.

## Imagery & Art Direction

- **Dark hero panel**: a black rounded square with a regular dotted grid in blue, a soft blue glow orb and a "coinbase" wordmark chip with a "SYSTEM UPDAT..." status label — a motion graphic, cropped by the capture. It signals "always-on market" in the same register as Moniker's idea that "the cryptoeconomy is always open" (It's Nice That).
- **Live data as imagery**: the price card is real UI — asset icons (orange Bitcoin, blue-violet Ethereum, green Tether, yellow BNB, black XRP, blue USDC) in circular badges, large white asset names, prices at right.
- **Device mock-ups**: a tilted tablet and a phone showing the advanced-trading interface (candlestick chart, order book) on a black panel with blue edge lighting.
- **Product illustration**: a phone showing a white card and a blue starburst check icon in the Coinbase One section, on a light grey rounded frame.
- **Logo**: a blue circle with a notch, used as the nav logo and in the wordmark chip.
- There is no photography of people in the first screens of the capture.

## Microcopy Voice

- Empowering, plain-English imperatives: "It's time to take control", "Explore crypto like Bitcoin, Ethereum, and Dogecoin."
- Supporting copy promises ease and security in one sentence: "Simply and securely buy, sell, and manage hundreds of cryptocurrencies."
- Buttons are verb phrases of two to three words: "Learn more", "See more assets", "Start trading", "Sign up", "Sign in".
- Product framing is for advanced users too: "Powerful tools, designed for the advanced trader."
- Legal disclaimers sit in 13px grey: "Products and features may not be available in all regions."

## Interaction States

- Primary blue pill hover uses `{colors.primary-hover}`.
- Grey circular icon buttons shift from the base `{colors.surface-alt}` to a slightly darker translucent grey on hover (measured: from rgb(238, 240, 243) to rgba(229, 231, 234, 0.88)).
- CDS requires accessible color contrast (4.5:1 text, 3:1 non-text), so focus indicators and borders should meet 3:1.
- Disabled states were not visible on the page and are unspecified.

## CDS Token Reference (from `defaultTheme.ts`)

| CDS token | Light value | Dark value | Marketing-page counterpart |
|---|---|---|---|
| `bgPrimary` / `fgPrimary` | blue60 (0,82,255) | blue70 | `{colors.primary}` |
| `bg` | gray0 (white) | gray0 (10,11,13) | `{colors.canvas}` |
| `bgAlternate` / `bgSecondary` | gray10 (238,240,243) | gray5 / gray15 | `{colors.surface-alt}` |
| `bgInverse` / `fg` | gray100 (10,11,13) | gray100 (white) | `{colors.near-black}` |
| `fgMuted` | gray60 (91,97,110) | gray60 (138,145,158) | `{colors.ink}` and `{colors.ink-muted-on-dark}` |
| `fgNegative` | red60 (207,32,47) | red60 (240,97,109) | `{colors.negative-on-dark}` |
| `fgPositive` | green60 (9,133,81) | green60 (39,173,117) | not a measured page color |
| `bgLine` | gray60 at 20% | gray60 at 20% | `{colors.hairline}` |

CDS text styles (family `var(--defaultFont-sans)`): display1 64px/72px/400, display2 48px/56px/400, display3 40px/48px/400, title1 28px/36px/600, title3 20px/28px/600, headline 16px/24px/600, body 16px/24px/400, label1 14px/20px/600, caption 13px/16px/600, legal 13px/16px/400. The marketing site's 13px body matches CDS caption/legal size.

## Design System Architecture

Coinbase publishes its design system as open source: **CDS, the Coinbase Design System**, at https://github.com/coinbase/cds with documentation at https://cds.coinbase.com. The repository README lists four platform packages (web React, React Native, Android Compose, iOS SwiftUI) sharing one set of design tokens. The docs page https://cds.coinbase.com/getting-started/colors/ (read through its text export) says the default theme "ships two sets of color values: semantic color tokens (used by components) and the raw color spectrum (the underlying palette)", and names tokens such as `bgPrimary` and `fgMuted` that "automatically adapt to the active color scheme". It also requires WCAG AA: 4.5:1 for text and 3:1 for non-text contrast.

The default web theme file `packages/web/src/themes/defaultTheme.ts` (read raw) defines the spectrum (for example `blue60`, `gray10`, `gray60`, `gray100`), semantic color maps for light and dark, a space scale (2px to 80px), border widths, a border-radius scale (4px to 56px plus a full-round 1e5), font sizes, weights and line-heights per text style (display1 to legal) with `var(--defaultFont-sans)` as the family. The marketing page uses Coinbase's own CoinbaseDisplay/Sans/Text fonts while CDS styles are font-variable driven.

The 2022 identity was designed by the studio Moniker (Creative Review, https://www.creativereview.co.uk/monikersf-coinbase-rebrand/; It's Nice That, https://www.itsnicethat.com/news/moniker-coinbase-rebrand-graphic-design-250322), who describe a simple, clear system with expressive motion for marketing ("in product, the motion is subtle... in marketing, the motion flexes to become more engaging"). Coinbase's press page (https://www.coinbase.com/press) returned a bot challenge and was not read.

## Do's and Don'ts

### Do
- Use `{colors.primary}` for the primary action and the logo.
- Set headlines in regular weight at large sizes with tight line-height.
- Wrap product UI in near-black panels with very large radii.
- Pair every big headline with one short grey paragraph and one pill button.
- Use red `{colors.negative-on-dark}` for negative price movement on dark panels.
- Meet 4.5:1 text contrast as CDS requires.

### Don't
- Don't bold the display headlines.
- Don't put blue text on large areas; blue is for action and brand.
- Don't use small radii on CTAs; they are pills.
- Don't add drop shadows to cards; separation is by color.
- Don't introduce additional accent hues beyond blue plus semantic red/green for markets.
- Don't use the `{colors.ink}` grey for headings.

## Responsive Behavior

- Measured at 1280px and 390px: the hero h1 changes from 80px to 52px (`{typography.display}` to `{typography.display-mobile}`) with line-height equal to size at both widths.
- The two-column bands are side-by-side on desktop; mobile stacking was not captured and is left unspecified.
- CTA pills keep their height and radius; the nav pill buttons stay at 44px.
- On desktop the sticky nav carries the full link list; the mobile menu was not inspected.

## Iteration Guide

1. Lay out bands on `{colors.canvas}` and `{colors.surface-alt}`; add dark panels only for product UI.
2. Set the headline in 400 weight, line-height equal to size.
3. Add one 56px pill CTA in `{colors.primary}`; use a near-black pill for secondary actions on light bands.
4. Keep paragraphs 13px grey.
5. Round every media container to at least `{rounded.lg}`.
6. Verify tokens against CDS `defaultTheme.ts` when adding semantic colors: use its spectrum names rather than inventing new hexes.
