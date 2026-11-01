---
version: alpha
name: Qualcomm
category: "Consumer Electronics"
description: "Qualcomm's marketing homepage measured at www.qualcomm.com: a white and pale-grey canvas (#ffffff, #f5f6f7), Alfabet display headlines at 48px/400 with +0.48px tracking, Roboto Flex body at 14px, a 4px-radius blue button (#2849d2) and a saturated Snapdragon red (#e71324) product card with 16px corners."

colors:
  canvas: "#ffffff"
  ink: "#717171"
  primary: "#2849d2"
  on-primary: "#ffffff"
  surface-dark: "#151516"
  surface-soft: "#f5f6f7"
  on-dark-muted: "#ffffffcc"
  ink-nav: "#151515"
  ink-scrim: "#0000008c"
  black: "#000000"
  hairline: "#bbbbbb"
  primary-hover: "#1b3391"
  brand-red: "#e71324"
typography:
  display:
    fontFamily: Alfabet
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52.8px
    letterSpacing: 0.48px
  display-mobile:
    fontFamily: Alfabet
    fontSize: 36px
    fontWeight: 400
    lineHeight: 39.6px
    letterSpacing: 0.36px
  body:
    fontFamily: "\"Roboto Flex\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: "\"Roboto Flex\""
    fontSize: 17px
    fontWeight: 520
    lineHeight: 20.4px
  nav:
    fontFamily: QualcommNext, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 14px
  xl: 16px
  2xl: 28px
  3xl: 90px
  4xl: 360px
spacing:
  s1: 4px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 13px
  s7: 16px
  s8: 24px
  s9: 25px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 40px
  button-primary-hover:
    textColor: "{colors.primary-hover}"
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 52px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.brand-red}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xl}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 48px 64px
---

## Overview

The Qualcomm homepage reads as a light, photographic technology catalogue. The page sits on a white canvas (`{colors.canvas}`, #ffffff) with a pale cool-grey band (`{colors.surface-soft}`, #f5f6f7) behind the main value-proposition section. The top of the captured page is a rounded-corner carousel tile ("Googlebook powered by Snapdragon") whose pale product render shows a laptop and a gold-traced chip; a row of short horizontal progress bars and a pause control sit beneath it. Below that the sticky navigation shows the blue Qualcomm wordmark followed by five dropdown items (Products, Applications, Developer, Support, Company) and, on the right, search, account and a cube icon separated by thin vertical rules.

The headline "We bring intelligent computing everywhere." is set large and centred, black on the grey band, with the last word in a brighter blue. Beneath it three photo cards (Computing, AI, Connectivity) each pair a rounded image with a small line icon, a grey one-sentence description and a blue text link with a chevron ("Explore products", "View solutions by industry", "See the 6G Roadmap"). The next band, "Explore our product brands", uses a pill-shaped tab switcher where the active tab (Snapdragon) is filled red, followed by a large red card with a white Snapdragon mark, a white headline, and an outlined button. Next to it a full-height photograph of a person in red clothing continues the red story. A grid of vertical entries (XR, Gaming, Compute, Wearables, Mobile, Audio, Auto) closes the visible area, each with a small red line icon and a chevron.

**Key Characteristics:**
- Two brand colors do different jobs: blue (`{colors.primary}`, #2849d2) for actions and the wordmark; red (`{colors.brand-red}`, #e71324) for the Snapdragon product-family surfaces.
- Generous rounded containers: cards use `{rounded.xl}` (16px), pill tabs use much larger radii, while the measured button is a restrained `{rounded.sm}` (4px).
- Photography is people-centred and bright; product renders are on pale backgrounds; the AI card shows dark server racks lit in blue.
- Text is mostly mid-grey (`{colors.ink}`, #717171) on white, with black (`{colors.black}`, #000000) reserved for headlines.
- Floating utilities (an accessibility button, a "Feedback" tab on the right edge and a round back-to-top control) overlay the page. They are utilities, not brand calls to action.

## Colors

All values below come from the live-page measurement (`web/data/extracted/qualcomm.json`).

### Brand and action
- **Qualcomm blue** (`{colors.primary}`, #2849d2): fill of the measured "Learn more" button (white text, `{colors.on-primary}` #ffffff) and the link/chevron color seen in the capture. Its measured hover value is `{colors.primary-hover}` (#1b3391).
- **Snapdragon red** (`{colors.brand-red}`, #e71324): background of the product-brand card, the active tab pill and the small icons in the vertical list.

### Text and surfaces
- **Mid grey** (`{colors.ink}`, #717171) is the most-read text color by character count and is used for descriptions and footer text.
- **Near-black** (`{colors.ink-nav}`, #151515) colors navigation labels. **Black** (`{colors.black}`, #000000) colors the large headline.
- **Translucent black** (`{colors.ink-scrim}`, #0000008c) appears for secondary text and overlays.
- **White 80%** (`{colors.on-dark-muted}`, #ffffffcc) is body copy placed on dark or saturated panels, such as the red card.
- **Dark surface** (`{colors.surface-dark}`, #151516) is the dark panel and footer base; **soft grey** (`{colors.surface-soft}`, #f5f6f7) is the pale band.
- **Hairline** (`{colors.hairline}`, #bbbbbb) is the measured border color.

The browser-default link colors are not part of this palette.

## Typography

Three families appear in the measurement. **Alfabet** is the display face: the headline is 48px, weight 400, line-height 52.8px and letter-spacing 0.48px on desktop, dropping to 36px/39.6px/0.36px on a 390px viewport (`{typography.display}`, `{typography.display-mobile}`). **Roboto Flex** is used for running text (`{typography.body}`: 14px, weight 400, line-height 21px) and for buttons (`{typography.button}`: 17px, weight 520, line-height 20.4px). **QualcommNext** (with Arial and sans-serif fallbacks) is declared for navigation links at 16px (`{typography.nav}`); the site's own CSS names it as its brand font variable.

Alfabet and QualcommNext are proprietary-looking web-font files loaded by the page; no license or download page was confirmed, so treat them as unavailable. Plausible substitutes are a geometric sans such as Poppins for Alfabet and Roboto Flex for the body. The headline tracking is slightly positive (0.48px).

## Layout

The page uses a centered container with a measured 24px side padding variable (the CSS root declares a grid-container side padding of 24px) and wide full-width media tiles. Spacing tokens measured on the page are 4, 7, 8, 10, 12, 13, 16, 24, 25 and 32px (`{spacing.s1}` to `{spacing.s10}`), so the rhythm is an 8px base with occasional off-grid values. Sections alternate between white and pale grey; large cards sit in a three-column grid on desktop, and the vertical list is a three-column grid of rows divided by thin rules. The footer measured padding is 0px 48px 64px.

## Elevation & Depth

Depth is mostly flat. Cards are distinguished by color blocks (red or photographic) rather than shadows. The extraction recorded no shadow on the primary button. Floating utilities such as the round back-to-top control have a light grey fill and sit above the content. Layering comes from photography, from dark server imagery against pale grey bands, and from the carousel's partial neighbors peeking at both edges.

## Shapes

The measured radius scale is `{rounded.xs}` 2px, `{rounded.sm}` 4px, `{rounded.md}` 8px, `{rounded.lg}` 14px, `{rounded.xl}` 16px, `{rounded.2xl}` 28px, `{rounded.3xl}` 90px and `{rounded.4xl}` 360px. In practice: the button is 4px, photo cards and the red card are 16px, tab tracks and pills use the large pill-style values. Icons are thin line glyphs with a consistent stroke, colored red or black depending on context.

## Components

- **Button primary**: `{colors.primary}` fill, white text, 17px/520 Roboto Flex, 4px radius, padding 8px 16px, height 40px. Hover changes to `{colors.primary-hover}`.
- **Button secondary**: outlined with white text on the red card, 4px radius, padding 16px 24px, height 52px.
- **Link**: a chevron-suffixed text link, the commonest call to action in the cards.
- **Navigation**: white bar, `{colors.ink-nav}` labels at 16px with dropdown chevrons; icon buttons on the right.
- **Card**: `{colors.brand-red}` fill, white text, 16px radius; photo cards have a rounded image over text on grey.
- **Tab pills**: a pale track with the active segment filled red; inactive labels are grey.

## Design System Architecture

Qualcomm publishes a developer-facing design system called QUI, with React and Angular documentation at https://react.qui.qualcomm.com/components/overview. The overview page I opened describes it as reusable, standardized building blocks for Qualcomm's UI engineering efforts and mentions internal-only tooling, so it is aimed at internal product teams. I did not find evidence that www.qualcomm.com is built from it, so no values were taken from it. The homepage's own CSS shows a de-facto system: CSS custom properties such as `--font-family-roboto`, `--font-familiy-brand` (sic), `--grid-container-side-padding`, Tailwind utility variables (`--tw-*`) and a set of `--atomic-*` variables (primary, background, border-radius, spacing) (the `--atomic-*` set carries its own blue, #1372ec, which differs from the measured button blue and was not used). Brand fonts are loaded as web fonts (Alfabet, Roboto Flex, QualcommNext).

## Do's and Don'ts

**Do**
- Use blue for actions and red only for Snapdragon-family surfaces.
- Keep headlines in Alfabet with slightly positive tracking.
- Use rounded photo cards with a single grey sentence and a chevron link.
- Keep the 4px radius for buttons.

**Don't**
- Don't treat the back-to-top, feedback or accessibility controls as primary calls to action.
- Don't mix red and blue fills inside one card.
- Don't use the browser-default link blue or purple.
- Don't add heavy shadows; the page is flat and photographic.

## Responsive Behavior

The extraction measured both a desktop and a 390px viewport. The only measured change is the display headline, which steps down from 48px to 36px with proportionally reduced line-height and tracking (`{typography.display-mobile}`). No other mobile layout values were recorded, so column and menu behaviour on mobile are not measured.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.surface-soft}` bands; add color only through photography and the two brand colors.
2. Set headlines in Alfabet 48px/400 (36px on phones); body in Roboto Flex 14px/21px.
3. Make the primary button `{colors.primary}`, 4px radius, 40px high.
4. Use `{rounded.xl}` for cards; keep link calls to action as text plus chevron.
5. Re-run `node web/scripts/verify-designs.mjs --slug=qualcomm` after any change.
