---
version: alpha
name: Casper
category: "Home & Furniture"
description: "Casper (casper.com) mattress store: white canvas, navy #012169 / #1e306e text and pill buttons with 32px radius, a red #cb372a sale accent, NewKansas serif headlines and Calibre 20px/300 body, soft blue-tinted card sections with 0 18px 50px shadows."
colors:
  canvas: "#ffffff"
  ink: "#012169"
  primary: "#1e306e"
  on-primary: "#ffffff"
  primary-hover: "#1e306ed9"
  sale: "#cb372a"
  sale-hover: "#cb372ad9"
  surface-gray: "#e6e6e6"
  surface-tint: "#f3f6fd"
  surface-tint-alt: "#f5f7fd"
  surface-sky: "#d7ecf7"
  ink-neutral: "#151515"
  ink-navy-alt: "#1e3063"
  ink-blue: "#526699"
  blue-mid: "#3c619e"
  blue-bright: "#3159a6"
  hairline: "#899ac7"
  price-teal: "#00706f"
typography:
  display:
    fontFamily: NewKansas-Medium, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
    letterSpacing: "-0.4px"
  display-mobile:
    fontFamily: NewKansas-Medium, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: "-0.32px"
  subheading:
    fontFamily: Calibre, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: "-0.18px"
  body:
    fontFamily: Calibre, sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 32px
  button:
    fontFamily: Calibre, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 25.6px
  nav:
    fontFamily: NewKansas-Medium, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28.8px
    letterSpacing: "-0.18px"
  link:
    fontFamily: Calibre, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 23.8px
  card-title:
    fontFamily: Calibre, sans-serif
    fontSize: 36px
    fontWeight: 800
    lineHeight: 36px
    letterSpacing: "0.2px"
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 20px
  3xl: 24px
  4xl: 32px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 12px 24px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-sale:
    backgroundColor: "{colors.sale}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 12px 24px
    height: 50px
  button-sale-hover:
    backgroundColor: "{colors.sale-hover}"
  button-on-image:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.4xl}"
    height: 57px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.lg}"
    padding: 16px 20px 0px
    height: 60px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.surface-gray}"
    textColor: "{colors.canvas}"
    typography: "{typography.card-title}"
    rounded: "{rounded.md}"
---

## Overview

Casper's home page (casper.com, title "The Best Bed for Better Sleep | Casper Online Mattress Store") is a warm, reassuring retail page built from navy ink on a white canvas. The measured page is 1280px wide and 9939px tall with 1324 visible elements. The top of the capture shows a navy utility bar (Find a store, a rotating "Connect with a Sleep Specialist" message with previous/next arrows, Refer a friend), a white header with the Casper wordmark and the menu Mattresses, Bundles, Pillows, Furniture, Bedding, Accessories, Explore and a red "Sale", then a pale-blue promotional band announcing a "Friends & Family Sale".

Below the promotion the page alternates large rounded photographic cards and tinted panels: a hero card with the white serif headline "Discover the Casper difference." and a white pill button "Take the quiz", a four-up reassurance strip (100-Night Risk-Free Trial, 10-Year Limited Warranty, Free Mattress Delivery, 110,000+ 5 Star Reviews) with thin line icons, a review panel on light blue with a white inner card, and a product row (The Foams, The Hybrids, The Maxes). The voice is plain and friendly ("We make sleep easy.", "What's keeping you up at night?", "There's a Casper for everyone."). The About page uses the same register: "We give gimmicks a rest." and "We believe you can always be cozier."

The look is built from three decisions: a single navy family for text and action, generous radii (32px pill buttons, 6px to 24px cards), and a serif display face paired with a light humanist sans for body copy. Red is reserved for sale messaging.

## Colors

By character count the text colors are `#012169` (2807), `#1e306e` (2557), `#151515` (2257), `#ffffff` (1876), `#1e3063` (1040), `#526699` (215), `#00706f` (16) and `#cb372a` (13). By area the backgrounds are `#ffffff` (16003), `#e6e6e6` (3494), `#f3f6fd` (3158), `#1e306e` (1268), `#f5f7fd` (635), `#d7ecf7` (442), `#526699`, `#012169`, `#3c619e`, `#cb372a`, `#3159a6` and `#84b8e0` (6; the chat widget button).

- **Ink `#012169`** is the most-read text color and is declared by the theme as `--accent`, `--header-text` and `--button-background-primary` (RGB triplet `1 33 105`).
- **Primary `#1e306e`** is the fill of the measured pill buttons "Shop mattresses", "See all reviews" and the role text/h2/nav color. The theme declares it as `--text-primary` (`30 48 110`), `--color-blue-blue-1` and `--footer-background`. The extractor picked the red "Shop sale" pill as the primary CTA; the capture and the hover pairs show navy as the dominant button color, so navy is primary here and red is kept as `sale`.
- **Sale `#cb372a`** fills "Shop sale" and is declared as `--on-sale-label-color` and `--button-background-danger`. The nav item "Sale" is red in the capture.
- **Neutrals and tints:** `#e6e6e6` (the measured card-role background), `#f3f6fd` and `#f5f7fd` (panel tints; the reassurance strip in the capture is a pale blue panel), `#d7ecf7` (promotion/review panels), `#151515` (product-card text, declared `--product-card-text`), `#526699` (`--color-text-blue`, `--text-muted`), `#899ac7` (input border).
- **Accents:** `#3c619e` (declared `--button-background-secondary`), `#3159a6` (the "Take our pillow quiz" button fill), `#00706f` (price/on-sale teal, declared `--on-sale-text` as `0 112 110`).

Hover states are measured: navy buttons go from `#1e306e` to 85% alpha (`#1e306ed9`), red from `#cb372a` to `#cb372ad9`, and the white "Take the quiz" pill from `#ffffff` to 85% white. Ink on `#ffffff` is the main reading pair.

## Typography

Two families carry the page. **Calibre** carries 9907 characters (loaded at 300, 400, 500, 700 and 400 italic) and is declared as `--text-font-family`. **NewKansas** headlines are loaded as `NewKansas-Medium` (500), `New Kansas TRIAL` (600) and a face named "Copyright Klim Type Foundry-Not Licensed for Desktop Use" (400); the theme declares `--heading-font-family-kansas-m: NewKansas-Medium, sans-serif` and `--heading-font-family-kansas-sb: NewKansas-SemiBold, sans-serif`. The loaded face names are recorded exactly as the page reports them.

- **Display:** NewKansas-Medium 500, 40px on 44px, letter-spacing -0.4px (hero card headline, white).
- **Display mobile / section headline:** NewKansas-Medium 600, 32px on 32px, letter-spacing -0.32px. The desktop h2 ("Save up to 25% on mattresses.*") measures the same 32px/600 values.
- **Body:** Calibre 300, 20px on 32px (review text and long copy). The body element itself measures Calibre 400 18px on 28.8px.
- **Subheading:** Calibre 400, 18px on 18px, -0.18px.
- **Nav:** NewKansas-Medium 500, 18px on 28.8px, -0.18px; the menu items are serif, not sans.
- **Button:** Calibre 500, 16px on 25.6px.
- **Link:** Calibre 700, 14px on 23.8px.
- **Card title:** Calibre 800, 36px on 36px, +0.2px (measured on the card-role tiles).

The frequency pass shows 16px with +0.6px letter-spacing on 1285 characters and 14px with +0.6px on 289 characters. The theme sets `--heading-font-weight: 600`, `--heading-letter-spacing: -0.01em` and `--text-letter-spacing: 0.0em`. Measured sizes by character count: 18px (5548), 16px (2130), 20px (638), 36px (574), 14px (539), 32px (430), 26px (320), 24px (227), 12px (113), 56px (83), 40px (77).

Font substitutes: NewKansas and Calibre are commercial faces (the page's own face name credits Klim Type Foundry). Without a licence use a serif with similar weight contrast for headlines and a light humanist sans for body, and keep the measured sizes and letter-spacing.

## Layout

The theme declares `--container-max-width: 1600px`, `--container-narrow-max-width: 1350px`, `--header-height: 89px` and `--announcement-bar-height: 53px`; the desktop header measures 89px tall. Gutters come from spacing variables (`--container-gutter` and `--grid-gutter` both reference `--spacing-5`, 1.25rem). Section spacing uses `--spacing-8` (2rem) for block stacks and product-list gaps.

On the 1280px capture, content sits in a centered column with large rounded cards at both side margins: the promo band spans the full width, the hero card and the reassurance strip follow with equal side margins, then a review panel and a three-column product grid. Measured gaps by frequency: 16px (165), 4px (139), 8px (64), 24px (56), 18px (44), 32px (41), 12px (38), 40px (15), 48px (13). Measured paddings: 20px (44), 24px (28), 12px (20), 48px (17), 8px, 32px, 5px, 90px, 14px, 16px, 40px.

The hero is a text-over-photo card: headline and copy are left-aligned, the white pill button sits below the copy, and the photograph fills the right side. Product tiles put the image first with the name in navy serif below and a short Calibre description.

## Elevation & Depth

Soft, blue-tinted shadows replace borders. The most frequent measured shadow is `rgba(30, 48, 110, 0.1) 0px 18px 50px 0px` (4 occurrences), declared as `--shadow-block: 0px 18px 50px rgb(var(--text-primary) / 0.1)`. A hairline ring `rgba(30, 48, 110, 0.12) 0px 0px 0px 1px` appears 4 times and matches `--border-color`. Other measured shadows are `rgba(0, 0, 0, 0.15) 0px 2px 12px 0px`, `rgba(0, 0, 0, 0.15) 0px 8px 15px 0px`, `rgba(0, 0, 0, 0.106) 0px 0px 10px 0px` and `rgba(0, 0, 0, 0.1) 0px 3px 16px 0px`.

The theme also declares `--shadow-sm: 0 2px 8px rgb(var(--text-primary) / 0.1)`, `--shadow-md: 0 5px 30px rgb(var(--text-primary) / 0.1)` and `--shadow: 0 5px 15px rgb(var(--text-primary) / 0.1)`. A custom easing `--curve: cubic-bezier(0.25, 0.1, 0.25, 1)` and a `--time-faster: 0.1s` duration are declared. The chat button in the capture (a pale-blue pill reading "Chat") has its own `0 10px 15px -3px` shadow and uses a system font stack instead of Calibre, so it is not treated as a Casper component.

## Shapes

Radii are large and varied. By frequency: 32px (26), 6px (18), 12px (12), 50% (12), 24px (11), 8px (11), 9999px (8), 4px (7), 2px (2), 20px (1). Buttons use 32px (declared `--rounded-button: 2.0rem`), so every measured button is a pill. Inputs use 8px (`--rounded-input: 0.5rem`), the card-role tiles 6px, and the large photo and panel cards in the capture have visibly generous corners. The theme also declares `--rounded-xs: 0.25rem`, `--rounded-sm: 0.375rem`, `--rounded: 0.75rem`, `--rounded-lg: 1.5rem` and `--rounded-full: 9999px`.

The circular "Friends & Family Sale" badge in the promo band, the round header icons, and the 50% radii belong to the circular vocabulary; the thin line icons in the reassurance strip are outline drawings rather than filled glyphs. The `pill` token (9999px) is measured on the chat widget and on the theme's full-radius variable, and is kept for completeness.

## Components

**Primary button (navy pill).** Fill `#1e306e`, white Calibre 500 16px text, padding 12px 24px, height 50px, radius 32px; hover fill `#1e306ed9`. Examples: "Shop mattresses", "See all reviews". The "Find a store" and "Explore financing options" pills measure fill `#012169` with the same radius; "Explore financing options" and "Take our pillow quiz" are 18px/500 with padding 14px 32px and 57px height.

**Sale button (red pill).** Fill `#cb372a`, white text, same 12px 24px / 50px / 32px geometry; hover `#cb372ad9`.

**On-image button.** White fill, `#1e306e` text, 57px tall, 32px radius ("Take the quiz"); hover 85% white.

**Header.** White, 89px tall on desktop, navy text, serif nav items (NewKansas-Medium 500 18px), with search, account and cart icons at the right in the capture.

**Text input.** White fill, `#1e306e` text, Calibre 400 18px, 2px solid `#899ac7` border, 8px radius, padding 16px 20px 0px, 60px tall (measured padding 16px 20px 0px).

**Card-role tiles.** Background `#e6e6e6` behind imagery, 6px radius, 389px by 499px, white 36px/800 Calibre text ("Save up to 25% on mattresses", "Save 30% on bundles", "Save up to 30% on furniture").

**Footer.** The measured footer element reports `#ffffff` for both background and text, which is unreadable and is not tokenised; the theme declares `--footer-background: 30 48 110` and `--footer-text: 255 255 255`.

## Design System Architecture

No public design system, brand guidelines or press kit is linked from casper.com or from https://casper.com/pages/why-casper, the two pages I opened (the footer links cover About, Blog, Stores, Trade, Jobs, a Code of Conduct, California Transparency and Accessibility). The de-facto system is a theme of CSS custom properties on the root, measured in the extraction.

Color is layered. Raw palette names (`--color-blue-blue-1: #1E306E`, `--color-seafoam-100: #00706E`, `--color-light-gray: #E4E6EE`, `--color-light-gray-2: #F5F7FD`, `--color-medium-blue: #4977BB`, `--color-greyscale-black-60: #6D6E71`, `--color-ui-colors-text-100: #101820`) sit beside semantic roles stored as space-separated RGB triplets (`--text-primary: 30 48 110`, `--accent: 1 33 105`, `--button-background-primary: 1 33 105`, `--button-background-secondary: 60 97 158`, `--button-background-danger: 203 55 42`, `--header-text`, `--footer-background`, `--product-card-text: 21 21 21`), consumed as `rgb(var(--text-primary) / 0.1)`. A third family names tokens by component, property, state and mode (`--color-component-button-primary-bg-default-neutral-inverse-resting`, `...-hover`, `--size-component-button-minWidth-medium: 48px`). Spacing is a numeric scale (`--spacing-1` 0.25rem through `--spacing-96`) plus `--components-spacing-*`. Assets are served from `/cdn/shop/t/1959/assets/` (the path recorded in `--cursor-close-svg-url`). The root also carries consent-overlay variables prefixed `--fides-overlay-`, which belong to a consent banner and are excluded from the tokens.

## Do's and Don'ts

**Do**
- Use navy (`#012169` / `#1e306e`) for text and primary buttons on a white canvas.
- Make buttons full pills (32px radius) with 12px 24px padding and 50px height.
- Set headlines and nav items in the NewKansas serif; set body copy in Calibre 300 at 20px.
- Use soft navy-tinted shadows (`0 18px 50px` at 10% navy) and pale blue panels for grouping.
- Reserve `#cb372a` for sale and urgency messaging.

**Don't**
- Don't use pure black for text; the measured neutral is `#151515` and the main ink is navy.
- Don't use sharp corners on buttons; no measured button has less than 32px radius.
- Don't treat the consent-overlay variables (`--fides-overlay-*`) or the pale-blue "Chat" button (system font stack) as brand components.
- Don't let red become the default action color; navy pills are the measured default.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured at 390px: the headline role measures 32px on 32px at weight 600 (NewKansas-Medium); body copy stays 20px/300 on 32px and its measured box is 286px wide and 192px tall (613px wide and 96px tall at desktop); the red "Shop sale" button measures 14px on 22.4px with padding 10px 20px, 42px tall and 160px wide (16px, 12px 24px, 50px tall and 109px wide at desktop); the header measures 126px tall (89px on desktop), and its recorded text includes the labels "Open navigation menu", "Open search" and "cart empty".

Measured sizes by character count at 390px are 16px (4324), 18px (678), 32px (611), 20px (414), 24px (375), 22px (320), 14px (257). Breakpoint widths, the number of columns in the product grid, and how the promo band and hero card reflow were not measured.

## Iteration Guide

1. Start with canvas `#ffffff`, ink `#012169`, primary `#1e306e`; add red `#cb372a` only for sale content.
2. Build buttons as pills: 32px radius, 12px 24px padding, Calibre 500 16px, white text, hover to 85% alpha of the fill.
3. Set headlines in the NewKansas serif (40px/44px with -0.4px at the hero, 32px/32px with -0.32px for section headlines) and body in Calibre 300 20px/32px.
4. Group content in cards with 6px to 24px radii; use `#f3f6fd` or `#d7ecf7` panel tints and `0 18px 50px rgba(30, 48, 110, 0.1)` for lifted cards.
5. Keep the header white at 89px with serif navy nav items and icon buttons at the right.
6. When adding tokens, follow the page's three-layer naming: raw palette, semantic RGB triplets, then component-state tokens.
