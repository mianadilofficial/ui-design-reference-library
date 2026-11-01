---
version: alpha
name: The Ordinary
category: "Beauty & Personal Care"
description: "The Ordinary (DECIEM) runs a clinical, near-monochrome Salesforce Commerce Cloud storefront: white #ffffff canvas, #333333 body ink, Raleway at 16px/24px for copy and 36px/700 for section headlines, Geologica 12px/700 uppercase for button labels, square 0px buttons (black #000000 48px modal CTA, #e1ded9-outlined 44px Add To Cart) beside 110px pill outlines, #f8f8f8 product tiles, a black promo bar and a DECIEM brand-switcher strip above the header."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#333333"
  ink-body: "#212529"
  ink-muted: "#757575"
  ink-link: "#22121f"
  ink-brandbar: "#221e1f"
  link-magenta: "#dc049b"
  surface-tile: "#f8f8f8"
  surface-grey: "#e5e5e5"
  surface-pink: "#fce9f5"
  surface-dark: "#2e2e2e"
  brandbar-active: "#75757533"
  hairline: "#e1ded9"
  footer-rule: "#00000040"
  danger: "#e83f42"
  success: "#1d8734"

typography:
  display:
    fontFamily: "Raleway, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43.2px
  display-mobile:
    fontFamily: "Raleway, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 33.6px
  heading:
    fontFamily: "Raleway, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 33.6px
  heading-sm:
    fontFamily: "Raleway, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
  subheading:
    fontFamily: "Raleway, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: "Raleway, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-sm:
    fontFamily: "Raleway, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  benefit:
    fontFamily: "Raleway, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  button:
    fontFamily: "Geologica, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: 0.06px
  input:
    fontFamily: "Geologica, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  input-newsletter:
    fontFamily: "Geologica, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 150
    lineHeight: 19px
  brandbar:
    fontFamily: "Arial, Helvetica, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 11px

rounded:
  none: 0px
  sm: 4px
  md: 20px
  pill: 110px
  circle: 50%

spacing:
  xxs: 4px
  sm: 8px
  md: 12px
  base: 16px
  lg: 22px
  gutter: 24px
  xl: 32px
  xxl: 40px
  section: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 15px 30px
    height: 48px
    border: "1px solid {colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.ink-muted}"
  button-pill-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 15px 30px
    height: 48px
    border: "1px solid {colors.primary}"
  button-pill-outline-hover:
    backgroundColor: "{colors.primary}"
    rounded: "{rounded.pill}"
    border: "1px solid {colors.primary}"
  button-add-to-cart:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-body}"
    rounded: "{rounded.none}"
    height: 44px
    border: "1px solid {colors.hairline}"
  button-add-to-cart-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.hairline}"
  brand-switcher-tab:
    backgroundColor: "{colors.brandbar-active}"
    textColor: "{colors.ink-brandbar}"
    typography: "{typography.brandbar}"
    rounded: "{rounded.none}"
    padding: 2px 10px 2px 14px
    height: 37px
  promo-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  promo-bar-link-hover:
    textColor: "{colors.ink-muted}"
  search-input:
    backgroundColor: "{colors.surface-tile}"
    textColor: "{colors.primary}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 6px 0px 6px 30px
    height: 40px
  newsletter-input:
    textColor: "{colors.primary}"
    typography: "{typography.input-newsletter}"
    rounded: "{rounded.none}"
    padding: 10px 40px 10px 0px
    height: 40px
  popover-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 24px
    border: "1px solid {colors.hairline}"
    shadow: "rgba(0, 0, 0, 0.15) 0px 4px 20px 0px"
  product-tile:
    backgroundColor: "{colors.surface-tile}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  link:
    textColor: "{colors.ink-link}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-body}"
    typography: "{typography.body}"
    height: 139px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    padding: 45px 0px 15px
    border: "1px solid {colors.footer-rule} (top)"
---

## Overview

The Ordinary's storefront (`theordinary.com/en-us`, part of DECIEM's multi-brand Salesforce Commerce Cloud site) mirrors its packaging: white, clinical, information-dense, almost colourless. The page is white `#ffffff`; copy is `#333333` (the most-read colour, 1930 weighted chars on the homepage) and Bootstrap's `#212529`; actions are black `#000000`. Colour arrives only through product photography (amber and frosted glass droppers on light grey `#f8f8f8` tiles) and an occasional soft campaign band.

Two Google-licensed families do all the work. **Raleway** carries headlines and copy — 36px/700 for homepage section headlines ("Targeted Support for Signs of Aging."), 28px/700 for section titles ("Overview", "Bestsellers"), 16px/24px for paragraphs. **Geologica** carries interface labels — 12px/700 uppercase with 0.06px tracking on buttons, light 300 (and an ultra-light variable 150) in inputs. A third, Arial 10px uppercase, appears only in the DECIEM brand-switcher strip.

The page stacks several distinctive bars at the top: a black promo bar ("COMPLIMENTARY SHIPPING FROM OCT 6-19. T&CS APPLY.") with arrows and a white account icon, then a **brand switcher** listing DECIEM's brands (THE ORDINARY, NIOD, LOOPHA, THE CHEMISTRY BRAND, DECIEM) with the active one shaded `#75757533`, then the header with "The Ordinary." wordmark and category links (For You, Bestsellers, New & Featured, Skincare, Body + Hair, Sets & Collections, The O. Library) plus a pill "Build My Regimen" button. The capture also shows the search overlay open and a geo "WELCOME" modal — both real site components.

Buttons follow two shapes: square (the black modal CTA, the outlined Add To Cart) and pill (110px radius: "GOT IT!", "Build My Regimen", "Explore Now"). Product tiles are flat grey with a small "Trending"/"Bestseller" label and a wishlist heart; below the image, name, star rating with count, a short benefit line in grey, a hairline rule, the price in USD and underlined size options, then a full-width outlined "Add To Cart".

**Key Characteristics:**
- White canvas, `#333333` ink, black actions — no brand accent colour in the UI.
- Raleway for content (700 headlines, 400 body), Geologica for UI labels (12px/700 uppercase).
- Square Add To Cart buttons outlined in warm grey `#e1ded9`, 44px tall.
- Pill (110px) outline buttons for secondary actions; black fill on hover.
- `#f8f8f8` product tiles; clinical, centred product photography.
- DECIEM brand-switcher strip above the header.
- Hover feedback on dark bars is a fade to `#757575`.

### Art Direction (from the capture)
- Products are photographed individually, upright and centred, on a light grey sweep — amber and frosted droppers, white tubes, black-and-white labels.
- Badges on photos are small circular medallions (e.g. "TEAM FAVOURITE" ring, eczema-association seal) rather than coloured ribbons.
- The campaign band uses a pale, blurred product-texture photograph (cream swirls) with dark centred text.
- "Common Concerns" uses tight, unretouched-looking skin and eye crops in squares.
- Iconography is thin-line (search, account, heart, close) at small sizes.
- The page reads as a catalogue: repeated identical tiles, aligned baselines, rules between rows.

## Colors

### Brand & Accent
- **Black** (`{colors.primary}` — `#000000`): Bootstrap `--primary: #000`; filled buttons, pill outlines, promo bar, active brand tab underline (`4px solid #000`).
- **On Primary** (`{colors.on-primary}` — `#ffffff`).
- **Magenta Link** (`{colors.link-magenta}` — `#dc049b`): the only saturated text colour — country-selector "edit" links and newsletter-description links (118 chars).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page, header, footer, buttons.
- **Tile** (`{colors.surface-tile}` — `#f8f8f8`): product image tiles and the search field.
- **Grey** (`{colors.surface-grey}` — `#e5e5e5`): product-page panels.
- **Pink** (`{colors.surface-pink}` — `#fce9f5`): small promotional fills.
- **Dark** (`{colors.surface-dark}` — `#2e2e2e`): small dark controls.
- **Brand-bar Active** (`{colors.brandbar-active}` — `#75757533`): the selected brand in the DECIEM switcher (`hsla(0,0%,46%,.2)`).

### Text
- **Ink** (`{colors.ink}` — `#333333`): headings and copy on product content.
- **Ink Body** (`{colors.ink-body}` — `#212529`): Bootstrap body colour; Add To Cart label; homepage headline.
- **Muted** (`{colors.ink-muted}` — `#757575`): benefit lines, legal text, hover colour on dark-bar links.
- **Link** (`{colors.ink-link}` — `#22121f`): in-text links ("T&Cs Apply.").
- **Brand-bar Text** (`{colors.ink-brandbar}` — `#221e1f`).

### Borders
- **Hairline** (`{colors.hairline}` — `#e1ded9`): Add To Cart outline, popovers, nav-drawer separators (`.5px solid #e1ded9`).
- **Footer Rule** (`{colors.footer-rule}` — `#00000040`): footer top border.

### Semantic
- **Danger** (`{colors.danger}` — `#e83f42`): Bootstrap `--danger`; `.invalid-feedback`, invalid input borders.
- **Success** (`{colors.success}` — `#1d8734`): Bootstrap `--success`; `.valid-feedback`, valid input borders.

## Typography

### Font Family
- **Raleway** — served as `Raleway` (variable, 100–800 loaded); declared as `--brand-font-family--secondary: "Raleway","Helvetica Neue",Helvetica,Arial,sans-serif`. 5799 weighted chars on the homepage.
- **Geologica** — served as `Geologica` (variable, 100–800 loaded); declared as `--brand-font-family--tertiary: "Geologica","Helvetica Neue",Helvetica,Arial,sans-serif`. 750 chars (buttons, inputs, labels).
- **Arial** — brand-switcher strip only.

Both families are open-source (OFL) Google Fonts: Raleway by Matt McInerney, Pablo Impallari and Rodrigo Fuenzalida (wght 100–900); Geologica by Monokrom, Sindre Bremnes and Frode Helland (with extra `CRSV` and `SHRP` axes).

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display}` | Raleway | 36px | 700 | 43.2px | — | Homepage feature headline |
| `{typography.display-mobile}` | Raleway | 28px | 700 | 33.6px | — | Same at 390px |
| `{typography.heading}` | Raleway | 28px | 700 | 33.6px | — | Section titles ("Overview", "Bestsellers") |
| `{typography.heading-sm}` | Raleway | 18px | 600 | 27px | — | Modal titles ("Promotional Terms & Conditions") |
| `{typography.subheading}` | Raleway | 16px | 600 | 24px | — | Product-page h3 |
| `{typography.body}` | Raleway | 16px | 400 | 24px | — | Paragraphs, links |
| `{typography.body-sm}` | Raleway | 14px | 400 | 21px | — | Mobile body, small copy |
| `{typography.benefit}` | Raleway | 14px | 600 | 21px | — | Capitalised benefit line ("Oil Control, Brightens, Smooths") |
| `{typography.button}` | Geologica | 12px | 700 | 14px | 0.06px | Uppercase button labels |
| `{typography.input}` | Geologica | 16px | 300 | 24px | — | Search field |
| `{typography.input-newsletter}` | Geologica | 13px | 150 | 19px | — | Footer email field |
| `{typography.brandbar}` | Arial | 10px | 400 | 11px | — | DECIEM brand switcher |

### Principles
- Headlines are short sentences with a full stop ("Targeted Support for Signs of Aging.", "Stay In Touch.").
- Raleway 700 for headlines, 600 for sub-labels, 400 for copy; Geologica only for UI.
- Uppercase is reserved for Geologica buttons, the promo bar and the brand switcher.
- Most-used sizes on the homepage: 16px (2301 chars), 18px (1575), 14px (900), 12px (621).

### Note on Font Substitutes
Raleway and Geologica are free (OFL) and should be used as-is. Geologica's variable weight axis is used below 300 (150) in the newsletter field — keep a variable build to reproduce it.

## Layout

### Spacing System
Measured gaps: 22px (16), 16px (12), 12px (12), 24px (8), 40px; paddings: 16px (45), 15px (26), 4px, 32px, 10px, 8px, 20px, 80px, 40px. The theme sets `--page-gutter: 24px`.
- `{spacing.xxs}` 4px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.base}` 16px · `{spacing.lg}` 22px · `{spacing.gutter}` 24px · `{spacing.xl}` 32px · `{spacing.xxl}` 40px · `{spacing.section}` 80px.

### Grid & Container
- Content is inset about 80px from the viewport edges at 1280px in the capture (60px in the 960px-wide image); product carousels show four tiles with 22px gaps.
- Breakpoints exposed as custom properties: `--breakpoint-xs 0`, `--breakpoint-mobilemd 375px`, `--breakpoint-sm 544px`, `--breakpoint-md 768px`, `--breakpoint-lg 1024px`, `--breakpoint-mdpi 1280px`, `--breakpoint-xl 1366px`, `--breakpoint-hdpi 1440px`, `--breakpoint-fullhd 1660px`, `--breakpoint-maxwidth 1920px`.
- "Common Concerns" row: six square portrait crops in a single row.

### Whitespace Philosophy
Clinical and orderly: thin hairline rules separate rows (above prices, below sections), and the scrollbar-style progress line under carousels (thick black segment over a light rail) signals position.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Tiles, buttons, sections |
| 1 | `rgba(0, 0, 0, 0.1) 0px 0px 18px 0px` | 8 elements on the homepage (floating panels) |
| 2 | `rgba(0, 0, 0, 0.15) 0px 4px 20px 0px` | "NEW! Log in right from this menu!" popover |
| 3 | `rgba(0, 0, 0, 0.12) 0px 4px 28px 0px` | 1 element (modal) |

Shadows exist only on floating layers (popovers, modals, the sticky add-to-cart bar `0 2px 10px rgba(0,0,0,.2)` on mobile product pages). Page content is flat.

## Shapes

### Border Radius Scale
- `{rounded.none}` 0px — primary CTA, Add To Cart, inputs, tiles.
- `{rounded.sm}` 4px — popovers.
- `{rounded.md}` 20px — 18 measured elements (rounded labels/controls).
- `{rounded.pill}` 110px — pill outline buttons ("GOT IT!", "Build My Regimen", "Explore Now").
- `{rounded.circle}` 50% — icon buttons, chat bubble, rating/badge medallions.

The theme's base `.btn` rule sets `border-radius: 32px` and `height: 32px` for sign-in-modal buttons; storefront pills measure 110px.

### Photography Geometry
Packshots are centred, front-facing, shot on light grey with soft shadows; the "Common Concerns" row uses tight face crops (eyes, skin texture) in squares.

## Components

### Buttons
- **Primary (modal)**: `{colors.primary}` fill, white Geologica 12px/700 uppercase, 0.06px tracking, padding 15px 30px, 48px tall, square, 1px black border. Hover (measured): white fill, black text, `#757575` border.
- **Secondary (modal)**: same geometry, white fill, black border ("CONTINUE TO UNITED STATES SITE").
- **Pill outline** ("GOT IT!", "Build My Regimen", "Explore Now"): white fill, 1px black border, 110px radius, Geologica 12px/700 uppercase for "GOT IT!" (48px tall, 15px 30px); header "Build My Regimen" is 37px tall. Hover (measured): black fill.
- **Add To Cart / Select Shade**: white, 1px `{colors.hairline}` border, square, 44px, label `{colors.ink-body}` → `{colors.primary}` on hover (measured).
- Sign-in modal submit (`.btn-primary.js-signin-modal-submit`): `#333` fill, 32px radius, 32px tall, Geologica 12px/700 uppercase, hover opacity .8, disabled `#757575` at .5 opacity.

### Cards & Containers
- **Product tile**: `{colors.surface-tile}` image area, top-left label ("Trending", "Bestseller"), heart icon top-right; name (Raleway, ink), stars + "4.3 (1299)", benefit line in `{colors.ink-muted}`, hairline, price "$24.00 USD" + underlined size options ("30ml", "60ml"), Add To Cart.
- **Popover**: white, 1px `#e1ded9`, 4px radius, 24px padding, `rgba(0,0,0,.15) 0 4px 20px` shadow, pill "GOT IT!".
- **Campaign band**: full-width soft photographic background, centred bold Raleway headline, short paragraph, pill "Explore Now".

### Inputs & Forms
- **Search**: `{colors.surface-tile}` fill, Geologica 16px/300, padding 6px 0 6px 30px (icon on the left), 40px tall; overlay shows "Recommended For You" product rows.
- **Newsletter**: borderless, Geologica 13px/150, padding 10px 40px 10px 0, 40px tall, with "Subscribe" action.
- Validation: Bootstrap `.is-invalid` `#e83f42` / `.is-valid` `#1d8734` borders and icons.

### Navigation
- **Promo bar**: black, white uppercase text, chevrons; links fade to `#757575` on hover (measured).
- **Brand switcher**: Arial 10px uppercase, brand logos as small square icons, active tab `#75757533` with a 4px black underline.
- **Header**: 139px total stack; wordmark left, Raleway category links, pill "Build My Regimen".

### Signature Components
- **Regimen Builder** entry point (pill in the header).
- **DECIEM brand switcher**.
- **Geo welcome modal** with black/white square buttons.

### Measurement Notes
- The capture caught the search overlay open and the geo "WELCOME" modal; both are genuine site components and are documented, but they hide the hero area.
- The extractor's homepage `h1` was a closed promotional-terms modal heading; `_roleOverrides.h1` points the h1 check at the visible 36px/700 headline. The 18px/600 modal title is kept as `{typography.heading-sm}`.
- The measured primary CTA is the geo modal's black button — the only filled button rendered; product-listing actions are the outlined Add To Cart.
- The Add To Cart label size was not isolated by the extractor, so its typography token is intentionally omitted.

## Design System Architecture

The Ordinary publishes **no public design system, token package, Storybook or Figma kit**. Searches for a DECIEM/The Ordinary design system, GitHub/npm packages and an official press kit found only agency case studies, retailer pages and an unofficial brand-book upload. The system below is what DECIEM's shipped storefront exposes.

- **Platform**: Salesforce Commerce Cloud — DECIEM moved from a "monolithic homegrown commerce solution" to Salesforce Commerce Cloud with Valtech, with a "UX and design overhaul to be more unified across brands" and a custom Regimen Builder ([Valtech case study](https://valtech.com/work/deciem)). Asset paths confirm it: `/on/demandware.static/Sites-deciem-us-Site/-/en_US/v1791327681596/css/…`.
- **Multi-brand structure**: one DECIEM site (`Sites-deciem-us-Site`) with shared CSS (`css/home/bootstrap.css`, `css/icons-font.css`, shared-library `deciem/css/styles.css`) plus a per-brand folder: `css/brands/theordinary/global.css` and `css/brands/theordinary/homePage.css`. The brand switcher strip links the sibling brands (THE ORDINARY, NIOD, LOOPHA, THE CHEMISTRY BRAND, DECIEM).
- **Token architecture**: Bootstrap 4 root variables provide primitives and semantic roles — `--primary: #000`, `--secondary: #6c757d`, `--danger: #e83f42`, `--success: #1d8734`, `--warning: #ffc107`, `--light: #f8f9fa`, `--dark: #343a40`. Brand typography is a separate tier: `--brand-base-font-family`, `--brand-font-family--secondary` (Raleway), `--brand-font-family--tertiary` (Geologica); `global.css` contains alternative `--brand-base-font-family` definitions (`"PlusJakartaSans","Century Gothic",…` and `"Raleway",…`) for different brand scopes. Component-level variables exist for newer modules, e.g. `--product-step-badge-gradient: linear-gradient(244deg,#183899 39.65%,#285eff 99.82%)`, `--product-step-badge-font-size: 0.625rem`, `--page-gutter: 24px`, `--tile-height: 220px`.
- **Naming convention**: Bootstrap utility/component classes (`.btn`, `.btn-primary`, `.btn-outline-primary`, `.form-control`, `.custom-select`, `.invalid-feedback`) mixed with BEM-style brand classes (`.page_footer-newsletter_input`, `.page_footer-heading_toggle-btn`, `.brands-item--active`, `.sign-in-modal__form`, `.header__top`). Salesforce SLDS tokens (`--slds-g-shadow-outset-focus-1`, `--slds-g-color-brand-base-20`) arrive with the embedded Salesforce chat widget (`--eswButtonBottom`, `--eswIconFontSize`).
- **Theming**: light only; no dark or high-contrast mode. Each brand has its own stylesheet folder; no runtime theme switch is exposed.
- **Type & spacing**: Raleway/Geologica variable fonts; 16px base with Bootstrap's 1.5 line-height (24px); spacing mostly 4px multiples with 22px/15px exceptions; ten named breakpoints as custom properties.
- **Accessibility**: "Skip to main content" and "Skip to footer content" links are the first elements; footer links get `outline: 2px solid #757575; outline-offset: 3px` on `:focus-visible`; Add To Cart buttons are 44px tall and primary modal buttons 48px. No published contrast policy.
- **Delivery**: compiled CSS/JS served from Commerce Cloud's static path with a version segment (`v1791327681596`); no npm package or public versioning. Fonts from Google Fonts' open-source library ([Raleway METADATA](https://raw.githubusercontent.com/google/fonts/main/ofl/raleway/METADATA.pb), [Geologica METADATA](https://raw.githubusercontent.com/google/fonts/main/ofl/geologica/METADATA.pb)).

## Do's and Don'ts

### Do
- Keep the UI white and black; let packshots supply colour.
- Use Raleway 700 sentence-style headlines with a full stop.
- Use Geologica 12px/700 uppercase for button labels.
- Use square, hairline-outlined Add To Cart buttons (44px) and black square primary buttons (48px).
- Use 110px pill outlines for secondary/utility actions, filling black on hover.
- Place product photos on `#f8f8f8` tiles with small text labels.

### Don't
- Don't introduce a brand accent colour into buttons; magenta `#dc049b` is only for small inline links.
- Don't round the Add To Cart or primary buttons.
- Don't use Geologica for paragraphs or Raleway for button labels.
- Don't add shadows to tiles; shadows are for floating layers only.
- Don't use decorative illustrations; imagery is product or skin close-ups.

## Responsive Behavior

### Breakpoints
| Name | Width | Key changes |
|---|---|---|
| Mobile | 375–543px | headline 28px/33.6px; body 14px/21px; header 86px |
| Small | 544px | — |
| Tablet | 768px | two-up tiles |
| Laptop | 1024px | full category nav |
| Desktop | 1280px (`--breakpoint-mdpi`) | four-up carousels |
| Large | 1366 / 1440 / 1660px | wider gutters |
| Max | 1920px | max width |

### Touch Targets
- Primary modal button 48px; Add To Cart 44px; header pill 37px; search 40px.

### Collapsing Strategy
- Category nav moves to a left drawer (`.menu-toggleable-left`) with account options separated by `#e1ded9` hairlines.
- Product page add-to-cart becomes a fixed bottom bar (`.prices-add-to-cart-actions`, white at 95% with `0 2px 10px rgba(0,0,0,.2)`).
- Carousels show a progress rail instead of dots.

### Image Behavior
Product images stay centred on grey tiles; campaign images crop to full width.

### Motion
- Sign-in submit button transitions `all .2s ease`; hover lowers opacity to .8.
- Carousel progress bar animates position; no decorative motion.

### Voice & Microcopy
- Plain and factual, with full stops: "Stay In Touch.", "Targeted Support for Signs of Aging.", "Boring rules make some products only available in certain locations."
- Title-case buttons in content ("Add To Cart", "Explore Now", "View All →") and uppercase in modals ("GO TO THAILAND SITE").

## Iteration Guide

1. White canvas, Raleway 16px/24px `#333333` copy.
2. Black promo bar → DECIEM brand strip (Arial 10px uppercase) → header with wordmark and Raleway nav.
3. Section titles Raleway 28px/700; feature headlines 36px/700/43.2px.
4. Product tiles on `#f8f8f8` with label, heart, stars, grey benefit, hairline, price + sizes, Add To Cart (44px, `#e1ded9` outline).
5. Buttons: Geologica 12px/700 uppercase; black square 48px primary; 110px pill outlines.
6. Footer white with `#00000040` top rule, 45px 0 15px padding, newsletter field in Geologica 13px/150.

### Prompting Checklist
- "Clinical white UI, black actions, #333333 copy, no accent colour."
- "Raleway headlines with full stops; Geologica uppercase button labels."
- "Square hairline Add To Cart, 110px pill secondary buttons."
- "Grey #f8f8f8 product tiles with tiny labels."
- "Black promo bar, then an Arial 10px uppercase DECIEM brand switcher with a 4px black underline on the active brand."
- "Search field on #f8f8f8 with Geologica 16px/300 text and a left icon."
- "Prices as '$24.00 USD' with underlined size options beside them."
- "Hairline #e1ded9 rules and popover borders; footer rule #00000040."
- "Error #e83f42, success #1d8734 only in forms."
- "Focus: 2px solid #757575 outline, 3px offset, on footer links."
