---
version: alpha
name: DHL
category: "Logistics & Mobility"
description: "DHL's US homepage on dhl.com: a white #ffffff canvas with black #000000 text set entirely in the corporate typeface Delivery (800 for 36px/46.8px headlines, 300 for 28px and 20px intros, 400 for 16px/20.8px body), a 63px Postyellow #ffcc00 top bar with the red logo, and DHL Red #d40511 buttons with 12px corners (Track: 52px tall, 7px 15.4px padding; CTAs: 14px 32px) that darken to #9a0000 / #95040c on hover. Cards are white with a 0 1px 4px shadow, grey #f5f5f5 panels, 7px spacing steps."

colors:
  primary: "#d40511"
  primary-hover: "#95040c"
  primary-pressed: "#6e0309"
  red-600: "#9a0000"
  red-400: "#eb131e"
  on-primary: "#ffffff"
  postyellow: "#ffcc00"
  yellow-400: "#ffde59"
  yellow-300: "#fff0b2"
  canvas: "#ffffff"
  ink: "#000000"
  ink-secondary: "#666666"
  foreground-primary: "#191919"
  surface-grey: "#f5f5f5"
  border: "#e5e5e5"
  gray-100: "#ebebeb"
  gray-500: "#8c8c8c"
  neutral-600: "#6b6b6b"
  focus-blue: "#007acc"
  green-600: "#006443"
  green-500: "#76bd22"
  container-light-blue: "#edf5fc"
  container-cool-green: "#edf6f1"
  container-warm-green: "#f2f5e9"

typography:
  display:
    fontFamily: "Delivery, Verdana, sans-serif"
    fontSize: 36px
    fontWeight: 800
    lineHeight: 46.8px
  heading-stage:
    fontFamily: "Delivery, Verdana, sans-serif"
    fontSize: 28px
    fontWeight: 800
    lineHeight: 36.4px
  intro-lg:
    fontFamily: "Delivery, Verdana, sans-serif"
    fontSize: 28px
    fontWeight: 300
    lineHeight: 36.4px
  heading-4:
    fontFamily: "Delivery, Verdana, sans-serif"
    fontSize: 20px
    fontWeight: 800
    lineHeight: 26px
  intro:
    fontFamily: "Delivery, Verdana, sans-serif"
    fontSize: 20px
    fontWeight: 300
    lineHeight: 26px
  heading-5:
    fontFamily: "Delivery, Verdana, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20.8px
  body:
    fontFamily: "Delivery, Verdana, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  body-sm:
    fontFamily: "Delivery, Verdana, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  link-sm:
    fontFamily: "Delivery, Verdana, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  caption:
    fontFamily: "Delivery, Verdana, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: "Delivery, Verdana, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20.8px

rounded:
  none: 0px
  md: 12px

spacing:
  s7: 7px
  s14: 14px
  s21: 21px
  s28: 28px
  s32: 32px
  s42: 42px
  s84: 84px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    borderColor: "{colors.primary}"
    borderWidth: 1px
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 7px 15.4px
    height: 52px
  button-primary-hover:
    backgroundColor: "{colors.red-600}"
    borderColor: "{colors.red-600}"
  button-cta:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 14px 32px
    height: 49px
  button-cta-hover:
    backgroundColor: "{colors.primary-hover}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 18px 13px 0px
    height: 56px
  quicklink-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    boxShadow: "rgba(50, 50, 50, 0.5) 0px 1px 4px 0px"
  quicklink-card-hover:
    boxShadow: "rgba(94, 94, 94, 0.4) 0px 2px 30px 1px"
  content-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 28px
    boxShadow: "rgba(50, 50, 50, 0.5) 0px 1px 4px 0px"
  panel-grey:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink}"
    padding: 28px
  promo-band:
    backgroundColor: "{colors.postyellow}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  nav-top:
    backgroundColor: "{colors.postyellow}"
    textColor: "{colors.ink}"
    typography: "{typography.link-sm}"
    height: 63px
  nav-main:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link-sm}"
    height: 63px
  nav-link-hover:
    textColor: "{colors.red-600}"
  link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.link-sm}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.border}"
    typography: "{typography.link-sm}"
---

## Overview

DHL's US homepage (measured at https://www.dhl.com/us-en/home.html on a 1280px viewport) is a practical, service-first page: white canvas, black text, and the two brand colors used with discipline. Postyellow fills the top bar and one promo band; DHL Red marks every action.

The header is two 63px bars:
- a Postyellow `#ffcc00` bar with the red italic DHL logo at left and "Find a Service Point", "Search" and "United States of America" at right
- a white bar with the main menu (Track, Ship ▾, Enterprise Logistics Services ▾, Customer Service, and "Customer Portal Logins ▾" at the right)

The hero is a rounded photo stage (DHL couriers in red-and-yellow jackets on a ferry, by a fjord) with "Track Your Shipment" in white Delivery 800 over the photo. Below it sits a wide white tracking field with a red "Track" button inside its right edge. Three quick-link tiles straddle the bottom edge of the stage: "Ship Now", "Get a Quote" and "Request a Business Account" (the last raised, with a yellow corner flag). Each has a red pictogram, a bold label and a 12px grey subline.

Further down:
- a Postyellow promo band with rounded corners and a photo at the left: "Navigating Latest Tariff Developments" with a red "Explore Our U.S. Tariff Solutions" button
- alternating split sections: a white rounded card ("Document and Parcel Shipping / For All Shippers") with a grey "Services Available" panel of yellow-icon bullets and a full-width red "Explore DHL Express" button, next to a large photo of a courier handing over a yellow parcel
- a grey `#f5f5f5` band ("Retailer or Volume Shipping / Business Only") with stacked white link cards for DHL eCommerce and DHL Express
- a white footer with red column headings

**Key Characteristics:**
- White `#ffffff` canvas, black `#000000` text, grey `#666666` secondary text.
- One typeface, Delivery, in four weights: 800 headlines, 700 labels and buttons, 400 body, 300 intros.
- Postyellow `#ffcc00` for the top bar and promo bands; DHL Red `#d40511` for buttons, icons and footer headings.
- 12px corners on buttons, inputs, cards, photo stages and bands.
- Spacing in 7px steps (7, 14, 21, 28, 42, 84px).
- Soft card shadow `rgba(50,50,50,0.5) 0 1px 4px`, which grows to `rgba(94,94,94,0.4) 0 2px 30px 1px` on hover.

## Colors

> Source: computed styles and `:root` tokens on https://www.dhl.com/us-en/home.html (extraction + recorded probes). The Brand Hub (https://www.brandhub.dhl/en/guide/basics/colors) names the colors and their roles but publishes no hex values without sign-in.

### Brand
- **DHL Red** (`{colors.primary}` `#d40511`, token `--color-red-500`): buttons, pictograms, footer headings, the logo. The Brand Hub says interface elements in DHL Red "call users to action".
- **Red hover** (`{colors.primary-hover}` `#95040c`, `--color-button-red-hover`) and **pressed** (`{colors.primary-pressed}` `#6e0309`, `--color-button-red-pressed`): CTA button states.
- **Red 600** (`{colors.red-600}` `#9a0000`): the Track button's hover fill and the hover color of every nav link.
- **Red 400** (`{colors.red-400}` `#eb131e`): lighter red token.
- **Postyellow** (`{colors.postyellow}` `#ffcc00`, `--color-yellow-500`): top nav bar, promo bands, icon tiles. Lighter tokens: `#ffde59` (`--color-yellow-400`), `#fff0b2` (`--color-yellow-300`).

### Surface
- **Canvas** (`{colors.canvas}` `#ffffff`): page and card background. The Brand Hub calls white "the preferred color for background areas" next to Postyellow.
- **Light grey** (`{colors.surface-grey}` `#f5f5f5`, `--color-container-light-grey`): services panels and the business band.
- **Tinted containers** (tokens, not seen on the homepage): light blue `#edf5fc`, cool green `#edf6f1`, warm green `#f2f5e9`, each with a "strong" partner.
- **Border** (`{colors.border}` `#e5e5e5`, `--color-gray-200`): footer top rule.

### Text
- **Ink** (`{colors.ink}` `#000000`, `--color-black-500`): headlines and body. The Brand Hub: "Use black for text on light backgrounds and white for text on dark backgrounds."
- **Secondary** (`{colors.ink-secondary}` `#666666`, `--color-gray-600`): quick-link sublines, footer links, field labels.
- **Foreground primary** (`{colors.foreground-primary}` `#191919`): semantic foreground token.

### Functional
- **Focus blue** (`{colors.focus-blue}` `#007acc`, `--color-blue-400`): every focus ring (`--focus-box-shadow: 0 0 0 0.2rem var(--color-blue-400)`).
- **Green** (`#006443` `--color-green-600`, `#76bd22` `--color-green-500`): green tokens. The Brand Hub says "Dark green is reserved for sustainable themes".

## Typography

### Font Family
- **Delivery** (served as `Delivery, Verdana, sans-serif`; weights 300, 400, 700, 800 loaded), plus `Delivery Arabic` and `Delivery Vietnamese` faces and an icon font `dhlicons`. It is the only text face on the page.
- The Brand Hub calls Delivery "the DHL Group's tailor-made typeface" (https://www.brandhub.dhl/en/guide/basics/typography). It also says headlines are "Delivery Bold and sentence case" and that text "appears in black, bold, and mixed case".

### Hierarchy (measured)

| Token | Size | Weight | Line height | Example |
|---|---|---|---|---|
| `display` | 36px | 800 | 46.8px | "Document and Parcel Shipping", "Retailer or Volume Shipping" |
| `heading-stage` | 28px | 800 | 36.4px | "Track Your Shipment" (white on photo) |
| `intro-lg` | 28px | 300 | 36.4px | "For All Shippers", "Business Only" |
| `heading-4` | 20px | 800 | 26px | "Navigating Latest Tariff Developments" |
| `intro` | 20px | 300 | 26px | "Learn about DHL Express – the undisputed global leader…" |
| `heading-5` | 16px | 700 | 20.8px | "Services Available", card titles, quick-link labels, footer heads |
| `body` | 16px | 400 | 20.8px | list items, nav |
| `body-sm` | 14px | 400 | 21px | promo paragraph, card descriptions |
| `link-sm` | 14px | 400 | 18.2px | nav bar items, footer links |
| `caption` | 12px | 400 | 18px | quick-link sublines |
| `button` | 16px | 700 | 20.8px | "Track", "Explore DHL Express" |

No letter-spacing is applied anywhere (all `normal`). Line height is 1.3 for headings and body (`--size-line-height-xl`), 1.5 for 14px paragraphs and 12px captions.

The page's real `<h1>` ("DHL Home", 48px/800 desktop, 36px/800 mobile) is visually hidden (1×1px), so it is not a visual style; see `_roleOverrides` in SOURCES.json.

### Principles
- Pair a heavy 800 headline with a light 300 intro line of a smaller or equal size ("Document and Parcel Shipping" 36/800 over "For All Shippers" 28/300).
- Mixed case everywhere; no uppercase labels.
- Size tokens are in rem on a 10px root: `--size-font-sm` 1.4rem (14px), `--size-font-md` 1.6rem (16px), `--size-font-xl` 2rem (20px), `--size-font-4xl` 2.8rem (28px), `--size-font-8xl` 3.6rem (36px), `--size-font-11xl` 4.8rem (48px).

### Note on Font Substitutes
Delivery is proprietary to DHL Group, and its font files sit behind the Brand Hub sign-in. The site's own fallback is Verdana, then the system sans-serif. Verdana is wider than Delivery, which the Brand Hub describes as having "compact proportions", so expect longer lines when substituting.

## Layout

### Spacing System
- The measured paddings form a 7px scale: 7px (42 uses), 14px, 21px (47), 28px (32), 42px, 84px. There are also 10.5px half-steps and 32px button padding.
- Layout tokens: `--grid-col-gap` 2.1rem (21px), `--container-gutter-size` 2.1rem, `--component-wide-padding-s/m/l` 2.1 / 4.2 / 8.4rem (21 / 42 / 84px), `--masonry-layout-item-gap` 2.1rem.
- The Brand Hub layout guide is built on a "Base unit for sizes and distances". The logo guide gives a base unit of 20px on tablet/desktop and 16px on smartphones, used for logo size and clear space.

### Grid & Container
- 12-column grid: `--grid-col: calc((100% - var(--grid-col-gap-11))/12)` with `--grid-cols-1…12` spans.
- Max widths: `--width-page-max` 136.5rem (1365px), `--width-page-max-nopadding` 119.7rem (1197px), `--width-page-fullwidth` 192rem; the yellow promo band measures 1196px wide.
- Split sections put a 598px card or text column next to an equal photo.

### Section Recipes (as seen on the homepage)
- **Stage**: rounded photo, white 28px/800 headline, tracking field with an inline red button, three quick-link tiles overlapping the bottom edge.
- **Promo band**: Postyellow, 12px radius, photo at left, 20px/800 heading, 14px body, red CTA.
- **Split card**: white 12px card (top corners) with 36/800 + 28/300 + 20/300 text, a grey services panel with yellow icon bullets, and a full-width red button; a large photo beside it.
- **Grey band**: `#f5f5f5` area with heading and stacked white link cards (red pictogram, bold title, 14px text, chevron).
- **Footer**: white, `#e5e5e5` top rule, red 16px/700 column headings, grey 14px links.

### Whitespace Philosophy
Generous vertical gaps between sections, compact text blocks inside cards. Content is boxed: nearly everything sits in a rounded card, band or photo frame.

### Voice & Microcopy
- Task-first labels: "Track", "Ship Now", "Get a Quote", "Find a Service Point".
- Sublines say what you get: "Find the right service", "Estimate cost to share and compare", "Shipping regularly or frequently? Learn about volume discounts".
- Confident claims: "the undisputed global leader in international express shipping".
- Button text starts with "Explore …".

### Motion
- Hover transitions: `--transition-hover-duration` 300ms, `--transition-hover-easing` ease-in-out.
- Easing tokens: `--cubic-bezier-fly-in` cubic-bezier(0.19,0.2,0.13,0.99), `--cubic-bezier-quick` cubic-bezier(0.255,0.095,0.25,1.005).
- Measured hovers: buttons darken; nav links turn `#9a0000`; quick-link cards lift with a larger, softer shadow.

### Image Direction
Real DHL people in uniform (red-and-yellow jackets, yellow parcels), bright daylight, smiling, shallow depth of field. The Brand Hub calls this image style "Focus on you": "bright and energetic, with depth of field and vivid color contrasts".

## Elevation & Depth

| Level | Treatment | Token / Use |
|---|---|---|
| 0 | flat | bands, photo stages |
| Small | `rgba(50, 50, 50, 0.5) 0px 1px 4px 0px` | `--shadow-small`: quick links, content cards, grey panels |
| Hover lift | `rgba(94, 94, 94, 0.4) 0px 2px 30px 1px` | quick-link cards on hover |
| Medium | `0 0.2rem 0.7rem 0.1rem #5e5e5e80` | `--shadow-medium` |
| Large | `0 0.6rem 1.2rem 0.1rem #505050b3` | `--shadow-large` |
| Navigation | `0 0 0.1rem 0 #0000001a, 0 0.2rem 1.2rem 0 #0000001a, 0 0.1rem 0.2rem 0 #0000001a` | `--shadow-navigation-bar` |

### Decorative Depth
The quick-link tiles overlap the hero photo, and the "Request a Business Account" tile sits higher than its neighbours with a yellow folded-corner flag. That overlap is the main depth effect on the page.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.md}` | 12px | buttons, tracking field, cards, photo stages, promo band (64 elements) |
| `{rounded.none}` | 0px | nav bars, footer, inner list items |

Partial radii build composite shapes: `12px 12px 0px 0px` (card tops, 14 elements), `0px 0px 12px 12px` (card bottoms), `12px 0px 0px 12px` (first tile of the quick-link strip) and `12px 12px 12px 0px` (the raised third tile). `--focus-border-radius` is 1.2rem (12px), so focus rings follow the same corner.

### Clip Paths
- The raised quick-link tile uses `clipPath: polygon(0px -10%, 110% -10%, 110% 110%, 0px 110%)` so its shadow is cut on the left edge.
- Content cards use `clipPath: inset(-4px -4px 0px)` so the shadow does not show under the panel attached below.

## Components

### Buttons
- **Primary / Track** (`button-primary`): `#d40511` fill, 1px `#d40511` border, white Delivery 16px/700, padding `7px 15.4px`, 52px tall, 12px radius; sits inside the tracking field. Hover: fill and border `#9a0000`.
- **CTA** (`button-cta`): `#d40511` link button, white 16px/700, padding `14px 32px`, 49px tall, 12px radius, no border ("Explore Our U.S. Tariff Solutions", "Explore DHL Express", which stretches full width in cards). Hover: `#95040c`.
- Tokens also define neutral and tonal buttons: `--color-button-neutral-hover` `#00000094`, `--color-button-tonal-background` `#00000014` (hover `#0000002e`, pressed `#0000004a`). These were not seen on the homepage.

### Inputs & Forms
- **Tracking field** (`text-input`): white, 12px radius, 56px tall, padding `18px 13px 0px` (room for a floating label), Delivery 16px black. The label "Enter your tracking number(s)" is 16px `#666666` and sits inside the field.
- Focus: `--focus-box-shadow` `0 0 0 0.2rem #007acc` (2px blue ring), or `--focus-box-shadow-with-spacing` (2px white, then 2px blue).

### Cards & Containers
- **Quick-link card** (`quicklink-card`): white tiles with a red pictogram, 16px/700 label and 12px `#666666` subline, shadow `--shadow-small`. Hover: `rgba(94,94,94,0.4) 0 2px 30px 1px`. Together the three tiles form one strip with 12px outer corners.
- **Content card** (`content-card`): white, 12px top corners, 28px padding, `--shadow-small`; it continues into a grey panel and a white button footer.
- **Grey panel** (`panel-grey`): `#f5f5f5`, 28px padding, holds "Services Available" with 2×2 yellow-square icon bullets.
- **Promo band** (`promo-band`): `#ffcc00`, 12px radius, 246px tall, image at left (class `cmp-container--yellow-gradiant-horiz`).
- **Link card**: white rounded card with a red pictogram, a 16px/700 title, a 14px/21px description and a red chevron at right ("DHL eCommerce", "DHL Express").

### Navigation
- **Top bar** (`nav-top`): 63px Postyellow, red logo at left, utility links with icons at right (14px).
- **Main bar** (`nav-main`): 63px white, 14px links with chevrons for menus. Hover on any nav item turns text and icon `#9a0000` (`nav-link-hover`). Nav link spacing tokens: `--space-x-navigation-menu-link` 2rem, `--space-y-navigation-menu-link` 2.15rem.

### Links
Footer and utility links are `#666666` 14px/18.2px with a trailing icon (class `link link-light-grey has-icon`).

### Footer
`footer`: white, 667px tall, 1px `#e5e5e5` top border; red 16px/700 group headings ("Quick Links"), grey 14px links.

## Design System Architecture

DHL publishes its brand system on the DHL Brand Hub (https://www.brandhub.dhl/en), branded "Our Next Level Branding". It is a brand guideline platform, not a coded component library. No public npm package, GitHub repo or Figma kit was found (searches in SOURCES.json), and downloads and detailed specs need sign-in.

What the Brand Hub states publicly (https://www.brandhub.dhl/en/guide/basics/colors, https://www.brandhub.dhl/en/guide/basics/typography):
- **Building blocks**: "Our layouts are built from core design components and guided by simple principles … Text in our Delivery font appears in black, bold, and mixed case. Rounded corners add friendly appeal." The layout guide covers a "Base unit for sizes and distances", "Use areas to create structure", "Add boxes with rounded corners for focus" and "Add dynamic elements".
- **Color logic**: Postyellow and DHL Red are the signature, "complemented by black and white for text and backgrounds, neutral grays for structure and clarity, and subtle secondary colors". DHL Red is only accentuated in "buttons, icons or dynamic elements"; "Dark green is reserved for sustainable themes".
- **Typography**: Delivery, with Delivery Variable for apps and websites ("combining multiple font weights into a single, performance-optimized file") and approved fonts for non-Latin scripts.
- **Accessibility**: "Our user interface components are designed to be accessible and meet all WCAG requirements"; Delivery "meets the legibility requirements outlined in DIN 1450"; "Headlines are set in black and mixed case to ensure optimal readability".
- **Logo**: the DHL Express logo guide (https://www.dhlexpress.nl/sites/default/files/DHL_Express_Logo%20Guide_230706.pdf) sizes the logo at seven base units (base unit 20px on desktop, 16px on smartphones), with a minimum of 84px and clear space of at least one base unit.

What dhl.com exposes in code (`:root`, AEM-style class names):
- **Token architecture.** Two tiers.
  - Primitives: `--color-red-400/500/600`, `--color-yellow-300…600`, `--color-gray-50…700`, `--color-black-opacity-05…90`, `--color-white-opacity-20…80`.
  - Semantic/component tokens: `--color-button-red-hover`, `--color-button-red-pressed`, `--color-button-tonal-background`, `--color-foreground-primary`, `--color-stroke-secondary`, `--color-container-light-blue-subtle/strong`, `--focus-box-shadow`, `--shadow-small/medium/large`, `--height-navigation-bar`.
- **Theming.** No dark mode tokens. Containers switch background by modifier class (`cmp-container--light-grey`, `cmp-container--yellow-gradiant-horiz`), and the focus ring has a variant for black backgrounds (`--focus-box-shadow-on-black-bg`).
- **Type & spacing.**
  - Font sizes run from `--size-font-2xs` (1rem) to `--size-font-11xl` (4.8rem), plus `--size-font-campaign-level1-desktop-large` 7rem, on a 10px root.
  - Line heights: `--size-line-height-xs` 1 to `--size-line-height-5xl` 1.5.
  - The 12-column grid uses a 2.1rem gap; spacing is in multiples of 0.7rem.
- **Component model.** Adobe-AEM-core-style names (`cmp-title__text--level2`, `cmp-teaser__title`, `cmp-list__item-title`, `cmp-container`) plus DHL "voc" components (`c-voc-tracking-bar`, `c-voc-quicklink-subtext`, `c-voc-marketing-stage`, `c-voc-footer`). Title levels map to sizes: level2 36px, level4 20px, level5 16px.
- **Delivery.** Self-hosted Delivery webfonts and the `dhlicons` icon font. Media templates and fonts are distributed through the Brand Hub.

## Do's and Don'ts

### Do
- Keep the canvas white and text black, with `#666666` for secondary lines.
- Use Delivery for everything; headlines 800, labels 700, intros 300, mixed case.
- Use DHL Red `#d40511` for buttons, icons and key headings, and Postyellow `#ffcc00` for the top bar and promo bands.
- Round buttons, inputs, cards and photo stages to 12px.
- Space in 7px steps (14, 21, 28, 42px).
- Use the 2px `#007acc` focus ring.
- Show real DHL people and parcels in bright, shallow-focus photography.

### Don't
- Don't set red text on yellow for body copy; the Brand Hub reserves red for accents and uses black text on Postyellow.
- Don't uppercase headlines or labels.
- Don't use sharp-cornered buttons or cards.
- Don't use heavy shadows; cards use the light `0 1px 4px` shadow at rest.
- Don't introduce extra accent colors; green is for sustainability topics only.
- Don't substitute Verdana in final work if Delivery is available.

## Responsive Behavior

### Breakpoints
No breakpoint tokens in `:root`; tablet-specific tokens exist (`--media-tiles-tile-size-tablet` 27.3rem, `--component-csb-padding-tablet` 10rem). At 390px (measured):
- Body paragraphs stay 14px/21px.
- Most-set mobile sizes: 14px, 16px, 18px, 20px, 28px, 12px, 10px, 36px.
- The hidden h1 shrinks from 48px to 36px.

### Touch Targets
The Track button is 52px tall, CTAs 49px, nav items 63px.

### Collapsing Strategy
The mobile body column measures 292px wide at 390px. Mobile navigation and card stacking were not captured, so they are not specified.

### Image Behavior
Not measured at mobile width.

## Iteration Guide

1. White canvas, Delivery 16px/20.8px black body, 14px/21px for card text.
2. Header: 63px Postyellow bar (logo + utility links), then a 63px white menu bar; hover = `#9a0000`.
3. Stage: 12px-rounded photo, 28px/800 white headline, white 56px tracking field with an inline red 52px "Track" button, three overlapping quick-link tiles.
4. Sections: 36px/800 headline over a 28px/300 intro, then 20px/300 paragraph; card padding 28px.
5. Buttons: `#d40511`, 12px radius, 16px/700 white, `14px 32px`; hover `#95040c`.
6. Cards: white, 12px corners, `rgba(50,50,50,0.5) 0 1px 4px` shadow; grey `#f5f5f5` sub-panels.
7. One Postyellow promo band per page with a red CTA.
8. Footer: white, `#e5e5e5` top rule, red 16px/700 headings, grey 14px links.

### Common Mistakes When Recreating DHL
- Using a yellow page background; the page is white and yellow is a band.
- Making the red `#d2002e` or similar from third-party palettes; the site ships `#d40511`.
- Setting headlines in 700; section headlines are 800.
- Forgetting the light 300 intro line that follows each headline.
- Using 8px or 16px spacing; DHL's steps are multiples of 7px.
