---
version: alpha
name: Affirm
category: "Banking & Insurance"
description: "Affirm (affirm.com), pay-over-time lender: dark #13131f canvas, light-weight 80px Axiforma headlines, white 96px-radius pill buttons with #9cadfc hover, 24px cards with a faint periwinkle inset ring."
colors:
  canvas: "#13131f"
  ink: "#9f9f9f"
  primary: "#ffffff"
  on-primary: "#0c0c14"
  ink-4: "#a8a9fc"
  ink-5: "#f7f7f8"
  primary-hover: "#9cadfc"
  text-input-text: "#000000"
  card-text: "#101820"
typography:
  display:
    fontFamily: "\"Axiforma for Affirm\", Axiforma, Calibre, sans-serif"
    fontSize: 80px
    fontWeight: 300
    lineHeight: 88px
    letterSpacing: "-3.2px"
  display-mobile:
    fontFamily: "\"Axiforma for Affirm\", Axiforma, Calibre, sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 44px
    letterSpacing: "-4%"
  heading:
    fontFamily: "\"Axiforma for Affirm\", Axiforma, Calibre, sans-serif"
    fontSize: 48px
    fontWeight: 300
    lineHeight: 52.8px
  subheading:
    fontFamily: "\"Axiforma for Affirm\""
    fontSize: 30px
    fontWeight: 400
  body:
    fontFamily: Calibre, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"Axiforma for Affirm\", Axiforma, Calibre, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  nav:
    fontFamily: "\"Axiforma for Affirm\", Axiforma, Calibre, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
  input:
    fontFamily: Arial
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.06px
rounded:
  xs: 10px
  sm: 16px
  md: 24px
  lg: 25px
  xl: 25.22px
  2xl: 36px
  3xl: 96px
spacing:
  s1: 1px
  s2: 1.5px
  s3: 2px
  s4: 4px
  s5: 8px
  s6: 9.82px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 14px 23px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 14px 23px
    height: 44px
    boxShadow: rgb(12, 12, 20) 0px 0px 0px 1px inset
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 14px 23px
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 14px 4px
  text-input:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.2xl}"
    padding: 20px 104px 20px 54px
    height: 54px
    borderColor: "{colors.on-primary}"
  card:
    textColor: "{colors.card-text}"
    rounded: "{rounded.md}"
    padding: 1.5px
    boxShadow: rgba(156, 173, 252, 0.1) 0px 0px 0px 1.5px inset
---

# Affirm

## Overview
Affirm is a pay-over-time (buy now, pay later) lender and card issuer. The measured home page (title "Affirm | Pay over time with flexible payment plans and no fees") is a dark-mode marketing page: a deep indigo-black canvas (`{colors.canvas}` #13131f), an 80px light-weight headline "Flexible plans for every purchase", a white pill button "See plans", then a hero image of a phone held in a hand with floating product tiles (homeware, fashion, travel, electronics, luxury) that tilt on a purple-to-teal radial glow. Further down, a second 48px light headline "Pay how you want, wherever you want" introduces large rounded panels such as "Pay with Affirm wherever you go" with a short paragraph, an "Explore the Affirm Card" pill button and a blue-violet gradient card image of a Visa debit card.

The header is a thin utility strip ("For shoppers", "For businesses") above a rounded glass navigation bar holding the logo, Discover, Shop and Help Center menus, a search icon, a language globe, "Log in", a white "Sign up" pill and a ghost pill "Check my purchasing power". The page text says the product names are Affirm Card, Affirm Money Account, Affirm Pay in 4 and the browser extension. The copy voice is friendly and direct, opening with "We're glad you're here!" and favoring "shop" and "pay over time". The page measured 6,833px tall at 1280px.

## Colors
Measured from the rendered page:
- **Canvas** `{colors.canvas}` #13131f, also published as `--color-ui-colors-background-dark`.
- **Primary** `{colors.primary}` #ffffff: the fill of the primary pill buttons, with `{colors.on-primary}` #0c0c14 as label color (`--color-ui-text-dark` is #0c0c14).
- **Primary hover** `{colors.primary-hover}` #9cadfc: measured on hover for "Sign up" and "See plans"; the ghost button "Check my purchasing power" changes its text and border from white to #9cadfc.
- **Ink** `{colors.ink}` #9f9f9f is the most-read text color (1,780 characters), with white (#ffffff, 1,665 characters) for headlines; `{colors.ink-4}` #a8a9fc tints labels and chips and `{colors.ink-5}` #f7f7f8 is the inverse text used by the h2.
- **Card text** `{colors.card-text}` #101820 and **text-input-text** `{colors.text-input-text}` #000000 are used on light cards and inside the search field.
- The shipped CSS publishes a fuller palette as root variables: `--color-primary-base` #4a4af4, `--color-primary-darkest` #212189, `--color-primary-light` #a8a9fc, neutral backgrounds #f4f3f2, #f0f5f7, #ede9e6 and #d3e3ea, success greens #0a894c / #105432 / #97e8b8 / #e8f9ef, warning #ffca61 and #ffe98f, destructive #ff6d50 and #feaa97, plus `--glass-background-color: #1b1b30cc` and a hero radial gradient `radial-gradient(44.05% 43.36% at 52.67% 56.72%,#9cadfc 0%,#296a7d 54.81%,#13131f 100%)`. These are published but only some appear on the measured home frame.
- `--swiper-theme-color: #007aff` is a carousel-library default, not a brand color.

## Typography
The measured body font stack is `"Axiforma for Affirm", Axiforma, Calibre, sans-serif`, with Calibre (400, 600) as the body face (`--font-family-body: "Calibre", sans-serif`). Loaded weights for Axiforma for Affirm are 300, 400, 500 and 600.
- `display` 80px / 300 / 88px, letter-spacing -3.2px: the h1.
- `display-mobile` 40px / 300 / 44px, letter-spacing -4%: the h1 at 390px.
- `heading` 48px / 300 / 52.8px: section headlines such as "Pay how you want, wherever you want".
- `subheading` 30px / 400.
- `body` Calibre 14px / 400 / 20px.
- `button` 14px / 400 / 14px.
- `nav` 12px / 400 / 14.4px.
- `input` Arial 18px / 400 / 21.06px: the search input uses a system font.
The character of the page is large, light and tightly tracked headlines against small functional text. Axiforma is a commercial typeface (licensed to Affirm as a custom cut); where it is unavailable, a geometric sans at weight 300 is the closest generic choice, but the measured stack itself lists only Axiforma and Calibre then `sans-serif`.

## Layout
The page is 1280px wide with a 64px header (`--header-height: 64px`). The hero is centered: headline, a two-line centered paragraph, a single pill, then the phone image spanning the full width and bleeding off both edges. Lower sections are large rounded panels with a text column on the left and a media card on the right. Measured spacing values are 1, 1.5, 2, 4, 8, 9.82, 10, 12, 14 and 15px for small steps. Vertical rhythm is generous: the capture shows a large empty band between the hero image and the next headline.

## Elevation & Depth
Depth comes from glow and hairlines, not shadow. The only shadows measured are `rgba(156, 173, 252, 0.1) 0px 0px 0px 1.5px inset` (15 elements, a faint periwinkle ring on cards and the nav) and `rgb(12, 12, 20) 0px 0px 0px 1px inset` (an inner outline on the secondary button). Translucent glass is used for navigation (`--glass-background-color: #1b1b30cc`) and the hero uses a radial gradient from #9cadfc through #296a7d to the canvas.

## Shapes
Rounded everywhere: 24px for cards and panels (43 elements, `{rounded.md}`), 96px pills for buttons (12 elements, `{rounded.3xl}`), 16px top corners on media (`{rounded.sm}`), 25px and 25.22px top corners on large cards (`{rounded.lg}`, `{rounded.xl}`), 10px (`{rounded.xs}`) and 36px for the text input (`{rounded.2xl}`). The base radius variable is `--border-radius-base: 8px`.

## Components
- **button-primary**: white background, #0c0c14 text, 14px, 96px radius, padding 14px 23px, height 44px. Hover swaps the fill to `{colors.primary-hover}`.
- **button-secondary**: same as primary with a 1px inner outline `rgb(12, 12, 20) 0px 0px 0px 1px inset`.
- **ghost button** ("Check my purchasing power"): transparent fill, white text and border, 96px radius, 44px high; hover turns text and border #9cadfc.
- **text-input**: white background, black Arial 18px, 36px radius, padding 20px 104px 20px 54px, height 54px.
- **card**: 24px radius, 1.5px padding, periwinkle inset ring.
- **nav-link**: white 12px links with padding 14px 4px.

## Design System Architecture
Sources opened: https://www.affirm.com/ (home page and its shipped CSS). Affirm does not link a public brand guideline or design system from its home page; the page links "Press" to its investor newsroom and "For developers" documentation. The de-facto system is the root variable set measured in the page CSS: semantic names such as `--color-ui-colors-background`, `--color-ui-colors-text-inverse`, `--color-primary-base`, `--color-greyscale-grey-60`, status scales (success, warning, destructive, each with lightest/light/base/dark/darkest), type-scale variables like `--line-height-xxxs: 14px` and `--line-height-base-xl: 31px`, and layout variables such as `--cardHeight: 756px`.

The practical consequence for anyone rebuilding the page is that color and type choices should be taken from these named variables rather than re-sampled from screenshots. The semantic split is clear: `ui-colors` names (background, background-dark, text-inverse, caption, border-neutral) describe roles, `primary`, `success`, `warning` and `destructive` are ramps, and `greyscale` carries numbered greys from black-5 through black-80 and grey-50 through grey-90.

## Do's and Don'ts
- Do pair white pill buttons (96px radius) with #0c0c14 text on the #13131f canvas.
- Do set headlines in Axiforma weight 300 with tight tracking (-3.2px at 80px).
- Do use #9cadfc for hover and glow accents.
- Do keep cards at 24px radius with the faint periwinkle ring.
- Don't use heavy drop shadows; the system uses rings and glow.
- Don't use bold headlines; the measured headlines are weight 300.
- Don't treat the Swiper default #007aff as a brand blue.

## Responsive Behavior
Measured at 390px: the h1 drops from 80px to 40px (line-height 44px, letter-spacing -4%), and the "See plans" button stays a white 14px label on #0c0c14 text. Column counts, breakpoints and menu collapse on mobile were not measured.

## Iteration Guide
1. Canvas #13131f, white pill actions, text #9f9f9f for secondary copy.
2. Headlines 80/48px in weight 300; mobile h1 40px.
3. Round everything: 24px cards, 96px pills.
4. Add one periwinkle (#9cadfc) accent for hover and glows.
5. Re-run `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=affirm --force --no-motion` after site changes, then `node web/scripts/verify-designs.mjs --slug=affirm`.
