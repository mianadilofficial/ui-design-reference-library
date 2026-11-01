---
version: alpha
name: Cartier
category: "Luxury"
description: "Cartier's US site (cartier.com/en-us) pairs two bespoke Yorgo&Co typefaces — Brilliant Cut, a wide uppercase sans (21.049px/600 titles, 12px/400 nav at 0.8px tracking), and Fancy Cut, a serif for prose (16px/400/24px at 0.5px) — on a white #ffffff canvas with warm-black #1d1c1c ink, square #1d1c1c buttons that invert to white on hover, white-outlined CTAs over full-bleed video, #f9f9f9 product wells and a 3px Cartier red #d50032 underline that slides in under menu items."

colors:
  primary: "#1d1c1c"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#1d1c1c"
  accent: "#d50032"
  surface-soft: "#f9f9f9"
  media-backdrop: "#000000"
  label-muted: "#8c8c8c"
  border: "#e6e6e6"
  media-control: "#00000066"

typography:
  hero-title:
    fontFamily: "\"Brilliant Cut\", Almarai, Helvetica, Arial, sans-serif"
    fontSize: 21.049px
    fontWeight: 600
    lineHeight: 31.5734px
    letterSpacing: 0.4px
    textTransform: uppercase
  hero-title-large:
    fontFamily: "\"Brilliant Cut\", Almarai, Helvetica, Arial, sans-serif"
    fontSize: 29.049px
    fontWeight: 600
    lineHeight: 43.5734px
    letterSpacing: 0.4px
    textTransform: uppercase
  hero-title-mobile:
    fontFamily: "\"Brilliant Cut\", Almarai, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
    letterSpacing: 0.4px
    textTransform: uppercase
  section-heading:
    fontFamily: "\"Brilliant Cut\", Almarai, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 0.5px
    textTransform: uppercase
  body:
    fontFamily: "\"Fancy Cut\", Almarai, Times, serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.5px
  body-sans:
    fontFamily: "\"Brilliant Cut\", Almarai, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.5px
  input:
    fontFamily: "\"Brilliant Cut\", Almarai, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 18.4px
  input-label:
    fontFamily: "\"Fancy Cut\", Almarai, Times, serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: 0.5px
  product-name:
    fontFamily: "\"Brilliant Cut\", Almarai, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 23.1px
    letterSpacing: 0.4px
    textTransform: uppercase
  price:
    fontFamily: "\"Brilliant Cut\", Almarai, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 23.1px
    letterSpacing: 0.5px
  button:
    fontFamily: "\"Brilliant Cut\", Almarai, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
    letterSpacing: 0.4px
    textTransform: uppercase
  nav:
    fontFamily: "\"Brilliant Cut\", Almarai, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.8px
    textTransform: uppercase
  utility:
    fontFamily: "\"Brilliant Cut\", Almarai, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.5px
    textTransform: uppercase

rounded:
  none: 0px
  panel: 4px
  circle: 50%

spacing:
  xs: 5px
  sm: 9px
  md: 12px
  base: 15px
  lg: 20px
  xl: 24px
  xxl: 32px
  section: 40px
  section-lg: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    border: "1px solid #1d1c1c"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 9px 0px
    height: 38px
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    transition: "opacity, color 0.5s cubic-bezier(0.4, 0.9, 0.3, 1)"
  button-outlined-on-media:
    backgroundColor: transparent
    textColor: "{colors.on-primary}"
    border: "1px solid #ffffff"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 9px 22.2px
    height: 38px
  button-quick-add:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    border: "1px solid #1d1c1c"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 5.4px 12px
    height: 38px
  text-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    underline: "background-image linear-gradient(#1d1c1c, #1d1c1c), size 100% 1px, at 0 100%"
    padding: 0px 0px 4px
  utility-link:
    textColor: "{colors.ink}"
    typography: "{typography.utility}"
    padding: 0px 0px 3px
    underline: "background-size 0px 1px"
  utility-link-hover:
    underline: "background-size 100% 1px"
    opacity: 0.6
  nav-item:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 20px 15px 30.8px
    indicator: "::after 3px {colors.accent}, width 0"
  nav-item-hover:
    indicator: "::after width = label width"
  header:
    backgroundColor: "{colors.canvas}"
    height: 154px
    shadow: "rgba(0, 0, 0, 0.15) 0px 1px 0px 0px"
  product-tile:
    mediaBackground: "{colors.surface-soft}"
    mediaSize: 276px
    rounded: "{rounded.none}"
    nameTypography: "{typography.product-name}"
    materialTypography: "{typography.body}"
    priceTypography: "{typography.price}"
  quick-add-panel:
    backgroundColor: "{colors.canvas}"
    border: "1px solid #1d1c1c"
    rounded: "{rounded.panel}"
    shadow: "rgba(0, 0, 0, 0.25) 0px 4px 12px 0px"
    padding: 16px
  text-input:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 35px
  input-label:
    textColor: "{colors.label-muted}"
    typography: "{typography.input-label}"
  media-control:
    backgroundColor: "{colors.media-control}"
    rounded: "{rounded.circle}"
    size: 42px
  footer-heading:
    textColor: "{colors.ink}"
    typography: "{typography.section-heading}"
---

## Overview

Cartier's US site is a white, typographic jewel box. Everything structural is uppercase **Brilliant Cut** — a wide,
geometric sans — while everything you read as prose is **Fancy Cut**, a sharp serif. Ink is a warm near-black
`#1d1c1c`, not pure black. The only colour in the chrome is **Cartier red `#d50032`**, and it appears only as a
3px underline sliding under a menu item on hover.

What the capture shows, top to bottom:

- A **154px white header** with a hairline shadow: utility links at top left ("UNITED STATES", "CONTACT US",
  "SERVICES"), the script **Cartier** logotype centred, wishlist / account / boutique / bag icons at right, and a
  second row of uppercase category links ("HIGH JEWELRY", "JEWELRY", "WATCHES", "BAGS AND ACCESSORIES",
  "FRAGRANCES", "HOME & STATIONERY", "NEWS", "LA MAISON") with a search icon after a vertical rule.
- A **full-bleed 1280×731 hero video** — a gold LOVE Unlimited bracelet threading through a giant black letterform —
  with a round translucent mute button, the white title "ENDLESS LOVE" (21.049px/600), a white Fancy Cut
  sentence, and a white-outlined CTA "DISCOVER THE SELECTION".
- A **two-up editorial row** on white: portrait photographs (Tank, Roadster watches on models) with centred
  uppercase titles, a serif sentence each, and an underlined serif "Shop the collection" link.
- Another **full-bleed hero** ("CLASH DE CARTIER BAGS", 29.049px/600) with a white-outlined "SHOP THE COLLECTION".
- Below: carousels of **product tiles** on `#f9f9f9`, services ("Complimentary Delivery", "Easy Return or Exchange",
  "Free Gift Wrapping"), a newsletter band, and a footer with uppercase headings.

Microcopy is formal and descriptive ("The shaped watch with vertical brancards.", "With a streamlined design, the
Roadster makes a comeback on the watchmaking scene after its original launch in 2002."). Titles are short
uppercase nouns.

## Colors

### Brand & Accent

- **Primary `#1d1c1c`** — fill of every filled button (Subscribe, Search, Add to bag, skip link); all ink.
  Hover inverts the button: white fill, `#1d1c1c` text.
- **Cartier red `#d50032`** — 3px menu underline (`::after`) on hover; nothing else in the chrome.

### Surface

- **Canvas `#ffffff`** — page, header, editorial rows, footer.
- **Surface soft `#f9f9f9`** — product-tile media wells.
- **Media backdrop `#000000`** — the hero video element behind loading frames.
- **Media control `#00000066`** — the 42px round mute button on video.
- **Border `#e6e6e6`** — light borders.

### Text

- **Ink `#1d1c1c`** — headings, serif prose, links, nav, prices.
- **Label muted `#8c8c8c`** — the floating "Email" label in the newsletter form.
- **On primary `#ffffff`** — titles and text over video and photography, button labels.

## Typography

### Font Family

Cartier uses two bespoke families. In an [interview with Typeroom](https://typeroom.eu/precious-cuts-of-type-yorgo-tloupas-cartier-bespoke-fonts-yorgo-and-co),
designer Yorgo Tloupas explains that Yorgo&Co (Yorgo Tloupas and Martin Pasquier) drew **Fancy Cut** (serif) and
**Brilliant Cut** (sans) for Cartier in 2020, to replace the mix of fonts its divisions had used; both run from
hairline to black, Fancy Cut is based on the lettering of watch dials, and lowercase sans characters exist but are
listed as a "don't" in the guidelines — which matches the site, where Brilliant Cut is almost always uppercase.

Served names and stacks:

- `"Brilliant Cut", Almarai, Helvetica, Arial, sans-serif` — loaded weights 300, 400, 600, 700.
- `"Fancy Cut", Almarai, Times, serif` — loaded weights 300, 400.
- `Brilliant Cut Pro` / `Fancy Cut Pro` (400, 700) — used by the cookie banner.
- Almarai is the Arabic-script fallback. Stylesheets also declare `CartierLogos`, `Sackers`, `Celeste`,
  `Kuenstler Script`, `Script-412` and `Avant Garde` (not in measured homepage text).

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Case | Use |
|---|---|---|---|---|---|---|---|
| hero-title-large | Brilliant Cut | 29.049px | 600 | 43.5734px | 0.4px | upper | "Clash de Cartier Bags" |
| hero-title | Brilliant Cut | 21.049px | 600 | 31.5734px | 0.4px | upper | "Endless love", "Tank", "Roadster" |
| section-heading | Brilliant Cut | 16px | 600 | 24px | 0.5px | upper | Footer headings, newsletter title |
| body | Fancy Cut | 16px | 400 | 24px | 0.5px | sentence | Hero and tile descriptions, links |
| body-sans | Brilliant Cut | 16px | 400 | 24px | 0.5px | — | Base text, service links (uppercase) |
| input | Brilliant Cut | 16px | 300 | 18.4px | — | — | E-mail field |
| input-label | Fancy Cut | 16px | 300 | 24px | 0.5px | sentence | "Email" floating label |
| product-name | Brilliant Cut | 14px | 600 | 23.1px | 0.4px | upper | Product tile names |
| price | Brilliant Cut | 14px | 600 | 23.1px | 0.5px | — | "$23,100" |
| button | Brilliant Cut | 12px | 600 | 18px | 0.4px | upper | All button labels |
| nav | Brilliant Cut | 12px | 400 | 18px | 0.8px | upper | Category menu |
| utility | Brilliant Cut | 12px | 400 | 18px | 0.5px | upper | Country, Contact us, badges, copyright |

The page's h1 ("homepage", 32px/700/48px) is visually hidden.

Mobile (390px): hero and tile titles 18px/600/27px; body sizes stay 16px.

### Principles

- **Sans for naming, serif for telling.** Titles, buttons, nav, prices: uppercase Brilliant Cut. Descriptions and
  inline links: Fancy Cut sentence case.
- **Tracking is always positive**: 0.4px on 600-weight caps, 0.5px on text, 0.8px on the category menu.
- Display sizes are fractional (21.049px, 29.049px) — keep them exact.
- Weight 600 for titles and buttons, 400 for navigation and prose, 300 for form text.

### Note on Font Substitutes

Brilliant Cut and Fancy Cut are proprietary to Cartier and not distributed. The site's own fallbacks are Helvetica
/ Arial (sans) and Times (serif). Keep the uppercase + positive-tracking rules and exact sizes when substituting.

## Layout

### Spacing System

Measured paddings: 5, 9, 12, 15, 20, 22.2, 24, 25.6, 32, 36, 40, 53.6, 80px. Buttons pad `9px 0px` (fixed-width
primary) or `9px 22.2px` (outlined); quick-add `5.4px 12px`; nav items `20px 15px 30.8px`; the search form
`32px 32px 0px`.

### Grid & Container

- Header: two rows inside 154px; logo centred.
- Heroes: full bleed (1280×731).
- Editorial row: two 596px columns (about 32px outer margins and a 24px gutter at 1280px, read from the capture).
- Product carousels: 276px tiles (286px with 5px padding), slick arrows 38px round.

### Whitespace Philosophy

Generous white margins around editorial pairs; text blocks are short and centred under images.

## Elevation & Depth

- Header: `rgba(0, 0, 0, 0.15) 0px 1px 0px 0px` — a hairline, not a shadow.
- Mini-cart drawer: `rgba(0, 0, 0, 0.05) 0px 8px 32px 0px`.
- Quick-add panel: `rgba(0, 0, 0, 0.25) 0px 4px 12px 0px`.

Everything else is flat; video and photography provide depth.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Buttons, inputs, tiles, images, header |
| panel | 4px | Quick-add panel |
| circle | 50% | Carousel arrows (38px), wishlist button (30px), mute button (42px, 100%) |

### Motion as Shape

Underlines are drawn, not decorated: utility links grow a 1px `background-size` underline from 0 to 100% (0.5s
ease-out); category items grow a 3px red `::after` bar to full label width.

## Components

### Buttons

- **Primary** (`button--primary`): `#1d1c1c` fill, white 12px/600/18px uppercase label at 0.4px, 1px `#1d1c1c`
  border, 0px radius, `9px 0px` padding (fixed width, 129.77px for Subscribe), 38px tall. Hover: white fill,
  `#1d1c1c` text, transition 0.5s `cubic-bezier(0.4, 0.9, 0.3, 1)`.
- **Outlined on media**: transparent, white label, 1px `#ffffff` border, `9px 22.2px`, 38px. No hover change was
  measured.
- **Quick add** ("Add to bag"): `#1d1c1c`, `5.4px 12px`, 276×38, rendered at opacity 0 at rest inside the tile.

### Cards & Containers

- **Product tile**: 276×276 `#f9f9f9` media, white "NEW" badge (5px padding, 12px uppercase), 30px round white
  wishlist button; name 14px/600/23.1px uppercase; material line in Fancy Cut 16px; price 14px/600.
- **Editorial tile**: photograph, centred 21.049px/600 uppercase title, Fancy Cut sentence, underlined serif link.
- **Quick-add panel**: white, 1px `#1d1c1c` border, 4px radius, `rgba(0,0,0,0.25) 0 4px 12px` shadow, 16px padding.

### Inputs & Forms

- **E-mail field**: transparent, Brilliant Cut 16px/300/18.4px `#1d1c1c`, 35px tall, 0px radius, colour and
  border-colour transitions 0.3s ease-in; floating label "Email" in Fancy Cut 16px/300 `#8c8c8c`.

### Navigation

- **Utility links**: 12px/400 uppercase, 0.5px; hover underline grows to 100% and opacity drops to 0.6.
- **Category menu**: 12px/400 uppercase, 0.8px, 68.8px tall hit area; hover reveals the 3px `#d50032` bar.

### Footer

White; headings Brilliant Cut 16px/600/24px uppercase 0.5px; copyright 12px/400 uppercase.

### Signature Components

- **Red hover bar** under menu items — the only use of Cartier red in the interface.
- **Serif link with drawn underline** ("Shop the collection").
- **White-outlined CTA over full-bleed video**.

## Design System Architecture

Cartier publishes **no public design system**, token package or downloadable brand guideline. Searches ("Cartier
design system digital brand guidelines", "cartier.com frontend github npm design tokens component library",
"Cartier press kit brand portal logo download") found only third-party aggregators. The typefaces are documented by
their designer ([Typeroom interview](https://typeroom.eu/precious-cuts-of-type-yorgo-tloupas-cartier-bespoke-fonts-yorgo-and-co)),
which also mentions that brand guidelines exist internally (with a "don'ts" section). What follows is the de-facto
system measurable on cartier.com.

### Token architecture

No CSS custom properties are exposed on `:root`. Styling is expressed through utility and modifier classes, e.g.
`set--w-100`, `set--motion-complete`, `set--motion-opacity`, `text-transform--uppercase`, `body-type--centi`,
`body-type--deka`, `body-type--deci`, `heading-type`, `component-copy__title--regular` / `--large`,
`remove--border-right-…`. The `body-type--{deci,centi,deka}` names indicate a named type scale.

### Theming

No dark mode or theme switch was observed. A third-party accessibility widget ("Enable accessibility for low
vision", `uw-sl__*` classes) is present.

### Type & spacing systems

Two families with strict roles; titles at 21.049px and 29.049px (mobile 18px); text at 16 / 14 / 12px.

### Component model

BEM-style components: `header-flyout__anchor`, `header__country-selector-anchor`, `hero__title`,
`hero__description`, `content-tile__title`, `component-actions__cta`, `product-tile__media`,
`product-tile__quickadd-trigger`, `product-tile__quickadd-panel`, `product-badge--novelty`,
`subscription-banner__action`, `subscription-banner__field`, `footer-links__heading`; buttons combine
`button button--primary button--fluid`. Carousels use Slick (`slick-arrow`), video uses Video.js.

### Accessibility

A visible "Skip to main content" button-style link (`#1d1c1c`, 233×36, `6.3px 14px`), a hidden h1, and the
accessibility widget. No published contrast or focus policy was found.

### Delivery

No npm package, Figma kit or versioning is public.

## Do's and Don'ts

### Do

- Use `#1d1c1c` for ink and fills, not pure black.
- Set titles, buttons and navigation in uppercase Brilliant Cut with positive tracking (0.4–0.8px).
- Set descriptions and inline links in Fancy Cut 16px/24px, 0.5px.
- Keep buttons square; invert to white on hover.
- Draw underlines as growing lines (1px for links, 3px red for menu items).
- Use `#d50032` only for the menu hover bar.

### Don't

- Don't use lowercase Brilliant Cut.
- Don't use red as a button fill or text colour.
- Don't round buttons or images.
- Don't add drop shadows to tiles; keep the header shadow a 1px hairline.
- Don't round the display sizes (21.049px, 29.049px).

## Responsive Behavior

### Breakpoints

Measured at 1280px and 390px.

### Mobile (390px)

- Hero and tile titles: 21.049px → 18px/600/27px.
- Subscribe button: 120px wide, 38px tall, same padding.
- Footer headings become accordion buttons at 16px/600/24px uppercase.
- Body text stays 16px.

### Touch Targets

Buttons 38px tall; menu items 68.8px tall; mute button 42px; carousel arrows 38px.

### Image Behavior

Mobile behaviour of hero video, editorial pairs and carousels was not measured.

## Iteration Guide

1. White canvas, `#1d1c1c` ink; load Brilliant Cut (sans) and Fancy Cut (serif) or their fallbacks.
2. Header: 154px, hairline shadow, utility row (12px caps), centred logo, category row (12px caps, 0.8px).
3. Add the 3px `#d50032` `::after` bar that grows to label width on hover.
4. Hero: full-bleed video, white 21.049px/600 caps title, Fancy Cut 16px sentence, white 1px outlined CTA
   (`9px 22.2px`, 38px).
5. Editorial pair: two portraits, centred caps title, serif sentence, serif link with 1px drawn underline.
6. Product tiles: 276px `#f9f9f9` wells, 14px/600 caps names, serif material line, 14px/600 price.
7. Primary buttons: `#1d1c1c`, 38px, square; hover white with `#1d1c1c` text.
8. Footer: 16px/600 caps headings, 12px caps legal.
9. Check: red only on menu hover, no radius on buttons, all caps text tracked.
