---
version: alpha
name: Nike
category: "E-commerce & Retail"
description: "Nike Thailand storefront (nike.com/th): black #111111 and white pill buttons with 30px radius, #f5f5f5 neutral surfaces, #707072 secondary text, Helvetica Neue LT Thai Bold at 16px and 24px, flat photography-led layout with no shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink-secondary: "#707072"
  primary: "#111111"
  on-primary: "#ffffff"
  gray-200: "#e5e5e5"
  primary-hover: "#cacacb"
  ink: "#111111"
  link-blue: "#1151ff"
  critical: "#d30005"
  success: "#007d48"
typography:
  display:
    fontFamily: "\"Helvetica Neue LT Thai Bold\", Helvetica, Arial, Krungthep, กรุงเทพ, Thonburi, ธนบุรี, \"Leelawadee UI\", \"ลีลาวดี UI\", Tahoma, ทาโฮม่า, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 42px
  display-hero:
    fontFamily: AvenirNextThaiModern-XtraBd, "Helvetica Neue LT Thai Bold", Helvetica, Arial, Krungthep, กรุงเทพ, Thonburi, ธนบุรี, "Leelawadee UI", "ลีลาวดี UI", Tahoma, ทาโฮม่า, sans-serif
    fontSize: 76px
    fontWeight: 500
    lineHeight: 133px
    textTransform: uppercase
  body:
    fontFamily: "\"Helvetica Neue LT Thai\", Helvetica, Arial, Krungthep, กรุงเทพ, Thonburi, ธนบุรี, \"Leelawadee UI\", \"ลีลาวดี UI\", Tahoma, ทาโฮม่า, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: "\"Helvetica Neue LT Thai Bold\", Helvetica, Arial, Krungthep, กรุงเทพ, Thonburi, ธนบุรี, \"Leelawadee UI\", \"ลีลาวดี UI\", Tahoma, ทาโฮม่า, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: "\"Helvetica Neue LT Thai Bold\", Helvetica, Arial, Krungthep, กรุงเทพ, Thonburi, ธนบุรี, \"Leelawadee UI\", \"ลีลาวดี UI\", Tahoma, ทาโฮม่า, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 28px
  link:
    fontFamily: "\"Helvetica Neue LT Thai Bold\", Helvetica, Arial, Krungthep, กรุงเทพ, Thonburi, ธนบุรี, \"Leelawadee UI\", \"ลีลาวดี UI\", Tahoma, ทาโฮม่า, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 24px
  md: 30px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 16px
    height: 40px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 7px 0px 9px 2px
    height: 36px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 48px
  button-on-image:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 16px
    height: 40px
---

## Overview

This file describes the **Thai edition** of nike.com (`https://www.nike.com/th/`, page title "ร้านค้าอย่างเป็นทางการของ Nike | Nike TH", measured at 1280px width, page height 6114px). All copy, fonts and measurements below come from that edition; other country editions were not measured.

The page is an almost monochrome retail shell around photography. Interface colour is `{colors.ink}` (`#111111`) text on `{colors.canvas}` white, with `{colors.page-largest}` (`#f5f5f5`) as the large neutral surface and `{colors.ink-secondary}` (`#707072`) for secondary text. The only saturated colours in the UI layer are functional values defined in the page's CSS variables: blue for links (`{colors.link-blue}`), red for critical states (`{colors.critical}`), green for success (`{colors.success}`). Everything colourful on screen is photography: a full-bleed running hero, two large editorial cards, and a horizontally scrolling row of portrait product cards.

The capture shows, top to bottom: a thin light-gray utility bar (Jordan mark on the left; Thai links for store search, help, join us and sign in on the right); the main bar with the swoosh, centred category links (New & Featured, Men, Women, Kids, Sale, SNKRS, in Thai), a rounded gray search field and heart and bag icons; a one-line promo strip about a 15% member discount in the Nike app with underlined links; a full-bleed hero photograph with a centred white headline, a one-line description and two white pill buttons; then sections "สินค้าเด่น" (Featured), "กำลังฮิต" (Trending) and "สินค้าล่าสุด" (Latest), each headed by a 24px label.

**Key Characteristics:**
- Pill buttons with a 30px radius (`{rounded.md}`): black (`{colors.primary}`) fill with white text on light surfaces, and white fill with `#111111` text over photography; both go to `{colors.primary-hover}` (`#cacacb`) on hover (measured on the white variant, 5 of 5 sampled hover buttons).
- Photography-led layout: product and athlete photos carry the colour; text overlays on images are white.
- Section titles are small (24px) and plain; the loudest type is the 76px uppercase hero line measured on an image banner.
- Search is a gray pill: `{colors.page-largest}` fill, 24px radius, 36px high.
- Page CSS exposes two token families, `--pds-*` and `--podium-cds-*`, which define the colours, radii and button sizes used here.

## Colors

> **Source pages:** `/th/` homepage (measured on desktop and mobile); values marked "root variable" come from the CSS custom properties the page ships on `:root` (400 variables).

### Brand & Accent
- **Primary** (`{colors.primary}` - `#111111`): fill of the filled pill button; `--podium-cds-button-color-bg-primary` is the same value.
- **On Primary** (`{colors.on-primary}` - `#ffffff`): label colour on the black pill.
- **Primary Hover** (`{colors.primary-hover}` - `#cacacb`): measured hover fill of the white pill buttons; root variable `--podium-cds-button-color-bg-primary-hover-on-dark` is `#CACACB`.

### Surface
- **Canvas** (`{colors.canvas}` - `#ffffff`): page background, navigation, footer.
- **Page Largest** (`{colors.page-largest}` - `#f5f5f5`): the largest-area background in the measurement (image placeholders and neutral panels), search field fill and the utility bar tone in the capture.
- **Gray 200** (`{colors.gray-200}` - `#e5e5e5`): a 1px inset bottom line measured on a control; root variable `--pds-color-border-tertiary`.

### Text
- **Ink** (`{colors.ink}` - `#111111`): body, navigation and heading text (`body` computed colour; `--pds-color-text-primary`).
- **Ink Secondary** (`{colors.ink-secondary}` - `#707072`): the most-read text colour by character count, used for secondary lines; root variable `--pds-color-text-secondary`.

### Functional (root variables only)
- **Link Blue** (`{colors.link-blue}` - `#1151ff`): `--podium-cds-color-text-link`; also the focus border colour (`--pds-color-border-focused`).
- **Critical** (`{colors.critical}` - `#d30005`): `--pds-color-text-critical`.
- **Success** (`{colors.success}` - `#007d48`): `--pds-color-text-success`.
- The same variable set also names an orange and a red brand colour; they do not appear in the captured homepage UI and are not declared here.

## Typography

### Font Family
Loaded fonts on the Thai edition: Helvetica Neue LT Thai Bold (4237 characters measured), Helvetica Neue LT Thai (954) and AvenirNextThaiModern-XtraBd (136). The stacks end with Helvetica, Arial and a list of Thai system fonts (Krungthep, Thonburi, Leelawadee UI, Tahoma). The page's root variables also describe Latin-script type tokens ("Helvetica Now Text", "Helvetica Now Display Bold"); those fonts were not among the loaded fonts on this Thai page, so this file does not describe the Latin hierarchy as measured.

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display}` | 24px | 400 | 42px | Section headings (h1/h2 elements, Bold-face font) |
| `{typography.display-hero}` | 76px | 500 | 133px | Uppercase hero line on an image banner (AvenirNextThaiModern-XtraBd) |
| `{typography.body}` | 16px | 400 | 28px | Body, descriptions |
| `{typography.button}` | 16px | 400 | 28px | Button labels (Bold-face font) |
| `{typography.nav}` | 16px | 500 | 28px | Main navigation |
| `{typography.link}` | 12px | 500 | 24px | Underlined promo links |

Other sizes by character count: 12px (the most used), 14px, 20px.

### Principles
- Weight is expressed through which face is loaded (a Bold face at weight 400) rather than through the weight property.
- Thai line heights are generous (28px for 16px text).

### Note on Font Substitutes
The faces are loaded by the site. Declared fallbacks: Helvetica, Arial, then Thai system fonts. No open-source substitute is specified by Nike.

## Layout

- Desktop width 1280px. The footer measured 607px tall with 48px padding.
- Most frequent paddings: 6px, 36px, 16px, 12px, 48px. Most frequent gaps: 12px, 4px, 24px.
- The "Featured" section is a two-up grid of large portrait photo cards; "Trending" is a carousel with circular previous/next arrow buttons (one light, one darker in the capture); the hero is full-bleed.
- Overlay text on photos sits at the bottom-left of each card, small eyebrow above a larger title and a white pill button.

### Spacing System
Tokens are measured values: 2px, 4px, 5px, 6px, 7px, 8px, 10px, 12px, 16px, 24px.

## Elevation & Depth

Flat. The only shadow in the measurement is a 1px inset line `rgb(229,229,229) 0 -1px 0` (`{colors.gray-200}`). Depth comes from photography and from white-on-image text over a darkened gradient at the bottom of cards, not from drop shadows.

## Shapes

- `{rounded.md}` 30px: pill buttons (the most frequent radius on the page).
- `{rounded.sm}` 24px: search field and other rounded inputs.
- `{rounded.xs}` 4px: small elements.
- `{rounded.pill}` 9999px and 50%: circular icon and carousel buttons.
- Root variables also list 8px and 12px radii (`--pds-radius-8`, `--pds-radius-12`); photo cards in the capture have square corners.

## Components

### Buttons
- **button-primary**: `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}`, `{rounded.md}`, padding 6px 16px, height 40px.
- **button-on-image**: `{colors.canvas}` fill with `{colors.primary}` text, same geometry; hover `{colors.primary-hover}`.
- Root variables define button heights 34px (small), 46px (medium) and 58px (large), a 1.5px border width and a 30px radius.
- Text links with an arrow or play glyph ("รับชม") appear beside buttons.

### Inputs
**text-input** (search): `{colors.page-largest}` fill, `{rounded.sm}`, 36px high, padding 7px 0 9px 2px, placeholder in the secondary gray.

### Navigation
**nav**: white, 60px high at the measurement; **nav-link**: 16px/500 in `{colors.primary}`. Icons (heart, bag, search) are outline style.

### Footer
White, 48px padding, link columns in `{colors.primary}`.

## Design System Architecture

- No public Nike design system was found. The [Nike-Inc GitHub organization](https://github.com/Nike-Inc) (opened) lists backend and data tooling repositories (logging, JSON parsing, tracing, a microservice framework, Databricks workflows), and no design-system or UI-kit repository among those shown. [about.nike.com newsroom downloads](https://about.nike.com/en/newsroom/downloads) (opened) is a news page with no brand guidelines, colours or fonts.
- The de-facto system is visible in shipped CSS: 400 root variables in two families. `--pds-*` holds colours (`--pds-color-gray-100` `#F5F5F5`, `-gray-200` `#E5E5E5`, `-gray-300` `#CACACB`, `-gray-500` `#707072`, `-gray-700` `#39393B`, `-gray-900` `#1F1F21`, `--pds-color-black` `#111111`), radii (`--pds-radius-0`, `-4`, `-8`, `-12`, `-rounded`) and typography tokens. `--podium-cds-*` holds component-level tokens: button heights, paddings, border width and radius, scrim colours and semantic colours.
- Semantics are named by role and context, for example `text-primary-on-light`, `text-primary-on-dark`, `bg-primary-hover-on-dark`, which matches the two button variants seen in the capture.
- Whether these families correspond to a named internal system is not stated by any opened source; the names are quoted only as they appear in the CSS.

## Do's and Don'ts

### Do
- Keep UI chrome black, white and gray; let photography supply colour.
- Use 30px-radius pills for calls to action, white over images and black over white.
- Show hover as a step to `{colors.primary-hover}`.
- Set overlay text white on image cards.

### Don't
- Do not add brand-coloured buttons; saturated colours are reserved for links, errors and success.
- Do not add drop shadows to cards or buttons.
- Do not square the buttons off; the 4px radius belongs to small elements only.

## Responsive Behavior

A mobile viewport was also measured. Specific mobile values were not extracted into tokens beyond what the generator recorded (no `display-mobile` token was produced for this page). Layout behaviour on small screens should be confirmed by measurement before use.

## Iteration Guide

1. Start with white, `{colors.ink}` text and a single pill button.
2. Choose the button variant by background: black pill on light, white pill on imagery.
3. Add colour only through photography.
4. Verify any new Thai or Latin type setting against the loaded fonts before adopting tokens.
5. Re-run `node web/scripts/verify-designs.mjs --slug=nike`.
