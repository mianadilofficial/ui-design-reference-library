---
version: alpha
name: GoPro
category: "Consumer Electronics"
description: "GoPro's storefront system on gopro.com: white #ffffff pages with #f9f9f9 hero bands and #e7e9ea product cards, ink #111111 for text and for every primary CTA (8px radius, 2px border, 48px tall), Klim's Söhne Breit served as 'SohneBreit' at weight 900 in uppercase for 52px/40px/30px headlines with 0.25px tracking, Söhne ('Sohne') 400 at 16px/24px for body, cyan #36bcf2 'NEW' pill tags at 24px radius and 16px-radius product cards."

colors:
  primary: "#111111"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#111111"
  surface-hero: "#f9f9f9"
  surface-tertiary: "#e7e9ea"
  black: "#000000"
  prefooter: "#353535"
  ink-muted: "#c3c5c6"
  ink-legal: "#a0a1a2"
  ink-grey-0: "#585959"
  ink-subtle: "#7c7d7e"
  text-tertiary: "#323333"
  text-disabled: "#979899"
  border-disabled: "#c9cbcc"
  gopro-cyan: "#00a6e0"
  cyan-dark: "#0097d6"
  cyan-mid: "#00b4ea"
  cyan-bright: "#00d1ff"
  tag-cyan: "#36bcf2"
  brand-blue: "#0059c2"
  brand-blue-pressed: "#002f66"
  brand-blue-disabled: "#99c8ff"
  deals-lime: "#dafe00"
  hover-on-dark: "#e7e9ea"
  overlay-scrim: "#00000033"

typography:
  h1:
    fontFamily: "SohneBreit, \"SohneBreit Fallback Helvetica\", \"SohneBreit Fallback Arial\", sans-serif"
    fontSize: 40px
    fontWeight: 900
    lineHeight: 40px
    letterSpacing: 0.25px
  h1-mobile:
    fontFamily: "SohneBreit, \"SohneBreit Fallback Helvetica\", \"SohneBreit Fallback Arial\", sans-serif"
    fontSize: 28px
    fontWeight: 900
    lineHeight: 28px
    letterSpacing: 0.25px
  headline-2:
    fontFamily: "SohneBreit, \"SohneBreit Fallback Helvetica\", \"SohneBreit Fallback Arial\", sans-serif"
    fontSize: 52px
    fontWeight: 900
    lineHeight: 52px
    letterSpacing: 0.25px
  headline-2-mobile:
    fontFamily: "SohneBreit, \"SohneBreit Fallback Helvetica\", \"SohneBreit Fallback Arial\", sans-serif"
    fontSize: 32px
    fontWeight: 900
    lineHeight: 32px
    letterSpacing: 0.25px
  headline-4:
    fontFamily: "SohneBreit, \"SohneBreit Fallback Helvetica\", \"SohneBreit Fallback Arial\", sans-serif"
    fontSize: 30px
    fontWeight: 900
    lineHeight: 30px
    letterSpacing: 0.25px
  h3:
    fontFamily: "SohneBreit, \"SohneBreit Fallback Helvetica\", \"SohneBreit Fallback Arial\", sans-serif"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 38px
    letterSpacing: 0.25px
  button:
    fontFamily: "SohneBreit, \"SohneBreit Fallback Helvetica\", \"SohneBreit Fallback Arial\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
  button-mobile:
    fontFamily: "SohneBreit, \"SohneBreit Fallback Helvetica\", \"SohneBreit Fallback Arial\", sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 12px
  body-1:
    fontFamily: "Sohne, \"Sohne Fallback Helvetica\", \"Sohne Fallback Arial\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.25px
  price:
    fontFamily: "Sohne, \"Sohne Fallback Helvetica\", \"Sohne Fallback Arial\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.25px
  caption:
    fontFamily: "Sohne, \"Sohne Fallback Helvetica\", \"Sohne Fallback Arial\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.25px
  paragraph-tiny:
    fontFamily: "Sohne, \"Sohne Fallback Helvetica\", \"Sohne Fallback Arial\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.25px
  utility-menu:
    fontFamily: "Sohne, \"Sohne Fallback Helvetica\", \"Sohne Fallback Arial\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 0.25px
  overline-1:
    fontFamily: "SohneBreit, \"SohneBreit Fallback Helvetica\", \"SohneBreit Fallback Arial\", sans-serif"
    fontSize: 10px
    fontWeight: 900
    lineHeight: 14px
    letterSpacing: 0.25px
  input:
    fontFamily: "Arial"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 0.25px

rounded:
  none: 0px
  xs: 3px
  sm: 4px
  button: 8px
  card: 16px
  pill-tag: 24px
  circle: 50%

spacing:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 24px
  gutter: 30px
  section: 60px
  section-lg: 80px
  button-y: 15px
  button-x: 22px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    border: "2px solid #111111"
    padding: 15px 22px
    height: 48px
    textTransform: uppercase
  button-primary-mobile:
    typography: "{typography.button-mobile}"
    padding: 12px 18px
    height: 40px
  button-signup:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 12px 24px
    height: 48px
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    border: "2px solid #ffffff"
    padding: 15px 22px
    height: 48px
  button-outline-on-dark:
    backgroundColor: transparent
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    border: "2px solid #ffffff"
    padding: 15px 22px
    height: 48px
  button-outline:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    border: "2px solid #111111"
    padding: 15px 22px
    height: 48px
  tag-new:
    backgroundColor: "{colors.tag-cyan}"
    textColor: "{colors.on-primary}"
    typography: "{typography.overline-1}"
    rounded: "{rounded.pill-tag}"
    padding: 1px 8px 2px
    textTransform: uppercase
  product-card:
    backgroundColor: "{colors.surface-tertiary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    padding: 0px
    height: 600px
    width: 400px
  product-card-dark:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.card}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.black}"
    typography: "{typography.input}"
    rounded: "{rounded.button}"
    border: "1px solid #a0a1a2"
    padding: 13px 24px
    height: 48px
  utility-link-on-dark:
    textColor: "{colors.on-primary}"
  utility-link-on-dark-hover:
    textColor: "{colors.hover-on-dark}"
  utility-dropdown-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.utility-menu}"
  prefooter:
    backgroundColor: "{colors.prefooter}"
    padding: 36px 0px
    height: 168px
---

## Overview

GoPro's site sells action cameras the way an action-sports broadcast sells an event: loud, wide, uppercase
headlines over edge-to-edge footage, with the commerce furniture kept almost monochrome so the imagery and the
price do the shouting. The measured homepage (https://gopro.com/en/us/, desktop 1280px) and the camera
listing page (https://gopro.com/en/us/shop/cameras) share one vocabulary:

- **Two Söhne cuts.** Display and every button are `SohneBreit` (Klim's Söhne Breit, the wide cut), served at
  900 and 600. Running text, prices, legal and menus are `Sohne` at 400 (and 600). The site also declares
  `--font-sohne-mono-local` and `--font-sohne-schmal-local` stacks, but no measured text on these two pages
  renders in Mono or Schmal.
- **Ink, not colour, for actions.** The primary CTA is `#111111` with white `SohneBreit` 14px/600 uppercase
  text, an 8px radius and a 2px `#111111` border — 48px tall on desktop. There is no coloured "brand button" on
  the measured pages, even though the site's CSS variables define a full `brand` button family in `#0059c2`.
- **Pale grey stage.** Hero carousels sit on `#f9f9f9`; product cards are `#e7e9ea` with a 16px radius; the
  page itself is `#ffffff`.
- **Cyan accents.** The GoPro cyan family (`#00a6e0`, `#0097d6`, `#00b4ea`, `#00d1ff`) colours the "Deals"
  navigation entry and promotional text; `#36bcf2` fills the small "NEW" pill tags; a lime `#dafe00` block and
  eyebrow pill frame the "GoPro Deals Week" hero.
- **Tracking everywhere.** Almost every text run carries `letter-spacing: 0.25px` — 12px, 14px, 16px, 22px,
  30px, 40px and 52px alike (`desktop.frequencies.letterSpacingBySize`).

What the capture shows (top 2400px at 1280px, scaled to 960px):

1. A black `#111111` utility bar (News / Awards / Support / Gift Cards on the left, a cyan promo line in the
   centre, Account / EN / "Enable Accessibility" on the right).
2. A white main navigation with the GoPro logotype left, six category entries centred (Deals in cyan),
   search and cart icons right.
3. A dark grey geo banner ("Looks like you're in Thailand.").
4. A `#f9f9f9` hero carousel: lime eyebrow pill, a three-line 900-weight uppercase headline, a one-line
   price sentence with a struck-through price, a black "BUY NOW" button; product render on the right framed by
   a lime `#dafe00` offset block; arrow controls and a pause button.
5. A full-bleed cinematic photograph with an outlined "NEW" chip, centred 52px uppercase headline in white,
   and a white button plus an outlined-on-dark button side by side.
6. "OUR TOP ACCESSORIES" — a centred 52px headline, a 16px subline, and a carousel of 400×600 `#e7e9ea`
   cards with a cyan "NEW" tag top-left, a product render, a 30px uppercase product name, 12px description,
   14px price and a black "BUY NOW".

## Colors

### Brand & Accent

- `primary` `#111111` — CTA fill, CTA border, headline and body ink. Also `--theme-stk2-button-primary-default-background: #111`.
- `on-primary` `#ffffff` — CTA text, text on photography.
- `gopro-cyan` `#00a6e0` — highlighted nav item ("Deals") and promo text (95 measured characters).
- `cyan-dark` `#0097d6`, `cyan-mid` `#00b4ea`, `cyan-bright` `#00d1ff` — further cyan text runs in promos and
  product highlights (26 / 36 / 39 characters on the homepage).
- `tag-cyan` `#36bcf2` — fill of the `SolidPillTag` "NEW" chip.
- `deals-lime` `#dafe00` — hero eyebrow pill and offset image frame during the "Deals Week" campaign.
- `brand-blue` `#0059c2` — `--theme-stk2-text-brand`, `--theme-stk2-button-primary-brand-background`,
  and `--theme-stk2-default-outline-color` (focus outline). Pressed `#002f66`, disabled `#99c8ff` come from
  the same token set. Not rendered as a fill on the two measured pages.

### Surface

- `canvas` `#ffffff` — page background (body bg and the largest-area background; also `--theme-stk2-surface-primary`).
- `surface-hero` `#f9f9f9` — hero carousel band.
- `surface-tertiary` `#e7e9ea` — product cards; also `--theme-stk2-surface-tertiary` and skeleton background.
- `black` `#000000` — full-bleed video/photo bands.
- `prefooter` `#353535` — the `PreFooter` strip above the footer (168px tall, 36px vertical padding).
- `overlay-scrim` `#00000033` — 20% black scrim used over imagery.

### Text

- `ink` `#111111` — 3,080 of the measured homepage characters; the most-read colour.
- `ink-muted` `#c3c5c6` — dropdown/utility menu links on the black bar (12px/28px).
- `ink-legal` `#a0a1a2` — the trademark legal paragraph and the email input border.
- `ink-grey-0` `#585959` — `color-grey-0` tiny paragraphs in category details.
- `ink-subtle` `#7c7d7e`, `text-tertiary` `#323333` (`--theme-stk2-text-tertiary`).
- `text-disabled` `#979899` (`--theme-stk2-text-disabled`), `border-disabled` `#c9cbcc` (`--theme-stk2-border-disabled`).

### Semantic

No error / success colours were measured or found in an official source; none are declared.

## Typography

### Font Family

- **SohneBreit** — Söhne Breit by Kris Sowersby, Klim Type Foundry (2019), a commercial retail family of 8
  weights from Extraleicht (200) to Extrafett (900) ([klim.co.nz](https://klim.co.nz/fonts/soehne-breit)). The site
  loads `SohneBreit 600` and `SohneBreit 900` (`desktop.loadedFonts`). Stack:
  `SohneBreit, "SohneBreit Fallback Helvetica", "SohneBreit Fallback Arial", sans-serif`.
- **Sohne** — Söhne (Klim), loaded at 400 and 600. Stack:
  `Sohne, "Sohne Fallback Helvetica", "Sohne Fallback Arial", sans-serif`.
- The `Fallback` faces are `@font-face` aliases declared by the site to size-match Helvetica/Arial.
- The email input uses the browser's `Arial` (the input does not inherit the Söhne stack).

### Hierarchy

| Token | Family | Size / line | Weight | Tracking | Where |
|---|---|---|---|---|---|
| headline-2 | SohneBreit | 52px / 52px | 900 | 0.25px | Section and hero headlines ("OUR TOP ACCESSORIES"), class `headline-2-extrabold` |
| h1 | SohneBreit | 40px / 40px | 900 | 0.25px | Page `h1` ("GET THE MOST OUT OF YOUR GOPRO") |
| headline-4 | SohneBreit | 30px / 30px | 900 | 0.25px | Product card name, class `headline-4-extrabold` |
| h3 | SohneBreit | 30px / 38px | 600 | 0.25px | "Shop by Activity" |
| button | SohneBreit | 14px / 14px | 600 | — | All CTAs, uppercase copy |
| body-1 | Sohne | 16px / 24px | 400 | 0.25px | Sublines, class `body-1` |
| price | Sohne | 14px / 20px | 400 | 0.25px | Card prices |
| caption | Sohne | 12px / 18px | 400 | 0.25px | Legal paragraph |
| paragraph-tiny | Sohne | 12px / 16px | 400 | 0.25px | Card descriptions |
| utility-menu | Sohne | 12px / 28px | 400 | 0.25px | Black utility bar dropdown links |
| overline-1 | SohneBreit | 10px / 14px | 900 | 0.25px | "NEW" pill tag, class `overline-1-extrabold` |

Mobile (390px): `h1` drops to 28px/28px, `headline-2` to 32px/32px (both 900), buttons to 12px/12px.

### Principles

- Display text is always uppercase (`text-transform: uppercase` measured on h1/h2 and card names).
- The heaviest cut (900) is reserved for headlines and tags; buttons use 600.
- Line-height equals font-size for every display size (52/52, 40/40, 30/30) — set solid.
- The +0.25px tracking is global, including body copy.
- The class names expose the type scale naming: `headline-2-extrabold`, `headline-4-extrabold`,
  `overline-1-extrabold`, `body-1`.
- The site also declares `--theme-ty-display-font-weight: 800` (and light/dark variants at 800); no measured
  element renders at 800.

### Note on Font Substitutes

Söhne and Söhne Breit are commercial Klim fonts. If a licence is not available, the site's own fallbacks are
Helvetica then Arial (that is what `SohneBreit Fallback Helvetica` / `Arial` alias). Expect a wider set width
to be lost: Söhne Breit is a wide cut, so a Helvetica substitute will run noticeably narrower in the 52px
uppercase headlines. No metric values for a substitute were measured, so none are given.

## Layout

### Spacing System

Measured gap frequencies on the homepage: 16px (33), 8px (24), 12px (17), 20px (16), 24px (12). Padding
frequencies: 6px, 24px, 15px, 22px, 8px, 16px, 30px, 12px, 10px, 20px, 60px. On /shop/cameras: gaps 8px,
20px, 12px, 24px, 16px, 88px, 80px; paddings 24px, 20px, 8px, 15px, 22px, 30px, 12px, 60px, 40px.

- `xs` 8px — icon/text gaps.
- `sm` 12px, `md` 16px — card internal gaps.
- `lg` 20px, `xl` 24px — card padding and grid gaps.
- `gutter` 30px — horizontal page padding on section headers (`padding: 80px 30px 0` on the shop page h2).
- `section` 60px, `section-lg` 80px — vertical section breathing room.
- Button padding is 15px 22px (sign-up button 12px 24px).

### Grid & Container

- Content container measured at 1220px wide inside a 1280px viewport (nav header and section headers are
  1220px), i.e. 30px side gutters.
- Product carousels show three 400px cards per view with a peek of the fourth and circular arrow buttons
  overlapping the edges.
- Heroes are full-bleed (1280px).

### Whitespace Philosophy

Generous blank bands separate sections (the capture shows a clear white gap between the hero carousel and
the full-bleed photo band). Inside cards, the product render floats in a large `#e7e9ea` field with the text
stack pinned to the bottom.

## Elevation & Depth

- The only measured element shadow on the homepage is `rgba(0, 0, 0, 0.1) 0px 4px 12px 0px` (8 elements).
- The stylesheet corpus also contains `0 10px 24px rgba(0,0,0,.1)`, `0 2px 8px rgba(0,0,0,.15)` and a focus
  ring `0 0 0 2px #fff`, used by components not on screen during measurement.
- Depth is otherwise created by photography: product renders carry their own baked drop shadows, and the hero
  frames a photo with a flat lime offset block instead of a shadow.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Full-bleed bands, nav |
| xs | 3px | Small controls (7 homepage elements) |
| sm | 4px | Small controls (10 homepage elements) |
| button | 8px | Every CTA, the email input |
| card | 16px | Product cards |
| pill-tag | 24px | "NEW" pill tag |
| circle | 50% | Carousel arrows, carousel dots |

A `16px 0px` asymmetric radius appears 3 times on the homepage (corner-cut tag/label shapes on cards).
No clip-path, skew or notch was measured on buttons.

### Photography Geometry

Hero product renders are cut-outs on pale grey; lifestyle imagery is full-bleed, dark and high contrast;
card imagery is a product render on `#e7e9ea`, centred, with no frame.

## Components

### Buttons

- **button-primary** — `#111111` fill, `#ffffff` text, `SohneBreit` 14px/600, line-height 14px, uppercase
  copy ("SHOP DEALS", "BUY NOW", "COMPARE CAMERAS"), `border: 2px solid #111111`, radius 8px,
  padding 15px 22px, height 48px. On mobile: 12px/12px type, padding 12px 18px, height 40px.
- **button-signup** — same fill and type, padding 12px 24px, 48px tall (newsletter "SIGN UP").
- **button-light** — `#ffffff` fill, `#111111` text, `2px solid #ffffff` border; used on dark photography
  ("LEARN MORE").
- **button-outline-on-dark** — transparent with white text and a 2px white border ("BUY NOW" next to the light button).
- **button-outline** — transparent with `#111111` text and 2px `#111111` border ("COMPARE ALL SPECS" on /shop/cameras).
- Hover: probing the homepage CTAs with a real pointer hover produced no colour change on the buttons.
  The site's token set declares `--theme-stk2-button-primary-default-hover-background: rgba(17,17,17,0.7)` and
  `--theme-stk2-button-primary-default-pressed-background: #323333`, but these were not observed applied, so no
  hover component is declared.

### Cards & Containers

- **product-card** — 400×600, `#e7e9ea`, radius 16px, no padding on the shell; inside: "NEW" tag top-left,
  render, 30px/900 uppercase name, 12px/16px description, 14px/20px price, black button.
- **product-card-dark** — same shape in `#111111` on /shop/cameras (camera lineup cards).

### Inputs & Forms

- **text-input** (newsletter email) — white, `#000000` text, Arial 14px/22px with 0.25px tracking,
  `1px solid #a0a1a2`, radius 8px, padding 13px 24px, 48px tall, 339px wide, paired with the 48px "SIGN UP" button.

### Navigation

- Utility bar: black, white Sohne links; hovering "Account" / "Gift Cards" turns them `#e7e9ea` (measured),
  "EN" turns `#f9f9f9`. Dropdown items: Sohne 12px/28px `#c3c5c6`.
- Main nav: white, 96px header container, Sohne category labels, "Deals" in cyan, search/cart icons right.

### Pills, Tags, and Chips

- **tag-new** — `#36bcf2`, white `SohneBreit` 10px/900 uppercase, line-height 14px, padding `1px 8px 2px`,
  radius 24px (class `SolidPillTag`).
- Hero eyebrow pill ("GOPRO DEALS WEEK") — lime `#dafe00` capsule with black uppercase 900 text (seen in the
  capture; its exact box was not separately measured).

### Signature Components

- **Hero carousel** — `#f9f9f9` band, text left / render right, lime offset frame, arrow buttons and a pause
  control, small pagination capsules.
- **Pre-footer** — `#353535` strip, 168px tall, 36px vertical padding, grouped columns.

## Design System Architecture

GoPro publishes **no public design system documentation, token package or brand-guideline site**. Searches for
"GoPro brand guidelines typeface Söhne Breit design system" and "GoPro press kit brand assets logo" returned only
third-party write-ups (excluded per the brief) and the investor site's logo downloads. What follows is the
de-facto system observable on the live site.

- **Token architecture (observed).** The page root defines 73 theme variables in two families:
  `--theme-stk2-*` (colour/state tokens) and `--theme-ty-*` (type weights). Naming is
  `--theme-stk2-{component}-{variant}-{state}-{property}`, e.g. verbatim
  `--theme-stk2-button-primary-default-background: #111`,
  `--theme-stk2-button-primary-default-hover-background: rgba(17,17,17,0.7)`,
  `--theme-stk2-button-primary-brand-background: #0059C2`,
  `--theme-stk2-button-secondary-brand-pressed-border: #002F66`,
  `--theme-stk2-icon-button-default-disabled-color: #C9CBCC`. Semantic tokens sit beside them:
  `--theme-stk2-surface-primary: #FFF`, `--theme-stk2-surface-tertiary: #E7E9EA`, `--theme-stk2-text-brand: #0059C2`,
  `--theme-stk2-border-primary: #111`, `--theme-stk2-default-outline-color: #0059C2`. That is a two-tier
  semantic + component structure; no primitive palette variables are exposed.
- **Variants & states (observed in tokens).** Buttons: `primary` / `secondary` / `tertiary` × `default` / `brand`
  × `hover` / `pressed` / `focused` / `disabled`. Icon buttons: `default` / `brand` with the same states.
  Skeleton loaders: `--stk2-theme-skeleton-background-color` / `-highlight-color`.
- **Theming.** The `default` (ink) vs `brand` (blue `#0059c2`) axis is expressed as parallel token families; no
  dark-mode or high-contrast switch was found in the root variables.
- **Type system.** Font stacks are tokens (`--font-sohne-local`, `--font-sohne-breit-local`,
  `--font-sohne-breit-extrafett-local`, `--font-sohne-mono-local`, `--font-sohne-schmal-local`); utility classes name
  the scale (`headline-2-extrabold`, `headline-4-extrabold`, `overline-1-extrabold`, `body-1`).
- **Component model (observed).** CSS-module class names (`ProductCard_cardHeader__…`, `SolidPillTag_solidPillTag__…`,
  `PreFooter_preFooter__…`, `MobileMenu_menuEntry__…`) plus global utilities (`button`, `button-primary`,
  `button-compact`, `link-reset`). The served HTML is a Next.js app (`_next/static`, `__NEXT_DATA__`).
- **Accessibility.** The utility bar carries an "Enable Accessibility" link; focus outlines are tokenised
  in `#0059c2` (`--theme-stk2-*-focused-outline`). No published contrast or target-size policy was found.
- **Delivery.** No npm package, Figma kit or versioned library is public.
- **Typeface source.** Söhne Breit — Klim Type Foundry ([klim.co.nz/fonts/soehne-breit](https://klim.co.nz/fonts/soehne-breit)).

## Do's and Don'ts

### Do

- Set headlines in SohneBreit 900, uppercase, line-height = size, +0.25px tracking.
- Use `#111111` for primary CTAs with an 8px radius, a 2px same-colour border and 48px height.
- Keep 0.25px tracking on body copy too.
- Put products on `#e7e9ea` 16px-radius cards, 400×600, with the text stack at the bottom.
- Use cyan only as an accent: nav highlight, promo text, the `#36bcf2` NEW tag.
- Let full-bleed photography carry the emotion; overlay white headlines directly.
- Pair a white button with a white-outline button on dark imagery.

### Don't

- Don't fill primary buttons with GoPro cyan or `#0059c2` — the measured CTAs are ink.
- Don't use pill-shaped buttons; 8px is the button radius (pills are only for tags).
- Don't set headlines in mixed case or in Sohne (the narrow cut) — display is always the Breit cut.
- Don't add heavy shadows; one soft `0 4px 12px rgba(0,0,0,.1)` is the ceiling.
- Don't invent a footer or semantic palette beyond what is listed.
- Don't loosen display line-height; it is set solid.

## Responsive Behavior

### Breakpoints

Measured at 1280px and 390px only. At 390px:

- `h1` 40px → 28px; section headline 52px → 32px (both line-height = size).
- Buttons shrink to 12px/12px type, 12px 18px padding, 40px height, and stretch to full content width (350px).
- Body legal text stays 12px/18px.
- Top font sizes on mobile: 14px, 12px, 16px, 22px, 32px, 28px.

### Touch Targets

Desktop CTAs are 48px tall; mobile CTAs 40px tall but full-width.

### Collapsing Strategy

The six-item category nav collapses into a `MobileMenu` drawer of 52px-tall entries; carousels become
swipeable single-card views.

### Image Behavior

Hero and band photography remains full-bleed; product renders scale inside their cards.

## Iteration Guide

1. Start with a white page, a black utility bar and a white nav with six Sohne category labels (one in cyan `#00a6e0`).
2. Build the hero on `#f9f9f9`: SohneBreit 900 uppercase headline, 16px/24px Sohne subline, black 48px button.
3. Use `headline-2` (52/52/900) for section titles, centred, with a 16px/24px subline.
4. Product cards: `#e7e9ea`, 16px radius, `#36bcf2` NEW tag (10px/900, radius 24px), 30px/900 name.
5. Keep every text run at +0.25px tracking.
6. On dark imagery, pair `button-light` with `button-outline-on-dark`.
7. Check mobile: 28px h1, 32px section headline, 40px buttons.
8. Re-run `node web/scripts/verify-designs.mjs --slug=gopro`.
