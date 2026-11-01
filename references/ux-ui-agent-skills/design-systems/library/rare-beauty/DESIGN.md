---
version: alpha
name: Rare Beauty
category: "Beauty & Personal Care"
description: "Rare Beauty (Selena Gomez) runs a warm editorial Shopify storefront on a cream #fdfbf8 canvas with blush #fdf6f0 bands, set in \"Ogg Regular\" serif headlines at weight 400 (48px section titles, 56px hero) over \"Neue Hass Unica Regular\" body copy, with deep burgundy #6f0936 as both the brand ink and action colour — square 0px buttons 36px tall with tiny 10–12px uppercase labels tracked 4–5px, outlined by default and filling burgundy on hover — plus round 50% portrait crops and navy #000914 text."

colors:
  primary: "#6f0936"
  on-primary: "#ffffff"
  canvas: "#fdfbf8"
  ink: "#6f0936"
  ink-navy: "#000914"
  ink-hero: "#191919"
  ink-muted: "#6a6c77"
  plum: "#7f2649"
  surface-blush: "#fdf6f0"
  surface-sage: "#edeee9"
  button-default: "#464545"
  border-chip: "#6f0936cc"
  border-taupe: "#c0bbb4"
  cream-text: "#fff7e7"
  play-sage: "#9dafa9"
  black: "#000000"

typography:
  hero:
    fontFamily: "\"Ogg Regular\""
    fontSize: 56px
    fontWeight: 400
    lineHeight: 53px
  hero-mobile:
    fontFamily: "\"Ogg Regular\""
    fontSize: 32px
    fontWeight: 400
    lineHeight: 34px
  display-section:
    fontFamily: "\"Ogg Regular\""
    fontSize: 48px
    fontWeight: 400
    lineHeight: 53px
    letterSpacing: 0.5px
  display-section-mobile:
    fontFamily: "\"Ogg Regular\""
    fontSize: 30px
    fontWeight: 400
    lineHeight: 34px
  product-title:
    fontFamily: "\"Ogg Regular\""
    fontSize: 38px
    fontWeight: 400
    lineHeight: 50px
  product-title-mobile:
    fontFamily: "\"Ogg Regular\""
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26px
  heading-sm:
    fontFamily: "\"Ogg Regular\""
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22px
  card-title:
    fontFamily: "\"Ogg Regular\""
    fontSize: 17px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.5px
  search-input:
    fontFamily: "\"Ogg Regular\""
    fontSize: 30px
    fontWeight: 400
    lineHeight: 46px
  body-lg:
    fontFamily: "\"Neue Hass Unica Regular\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 29px
  body-lg-mobile:
    fontFamily: "\"Neue Hass Unica Regular\""
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.85px
  body:
    fontFamily: "\"Neue Hass Unica Regular\""
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 1px
  body-base:
    fontFamily: "\"Neue Hass Unica Regular\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  eyebrow:
    fontFamily: "\"Neue Hass Unica Regular\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.88px
    letterSpacing: 3px
  nav-link:
    fontFamily: "\"Neue Hass Unica Regular\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15px
    letterSpacing: 3px
  caption:
    fontFamily: "\"Neue Hass Unica Regular\""
    fontSize: 11px
    fontWeight: 400
    letterSpacing: 1.5px
  button:
    fontFamily: "\"Neue Hass Unica Regular\""
    fontSize: 10px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 5px
  button-bag:
    fontFamily: "\"Neue Hass Unica Regular\""
    fontSize: 12px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: 4px
  chip:
    fontFamily: "\"Neue Hass Unica Regular\""
    fontSize: 9px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 2px

rounded:
  none: 0px
  sm: 4px
  circle: 50%

spacing:
  xxs: 4px
  xs: 6px
  sm: 8px
  md: 10px
  lg: 15px
  xl: 20px
  xxl: 34px
  section: 60px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-bag}"
    rounded: "{rounded.none}"
    padding: 7px 70px 9px
    height: 36px
    border: "1px solid {colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
    typography: "{typography.button-bag}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.primary}"
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7px 34px 9px
    height: 36px
    border: "1px solid {colors.border-chip}"
  button-outlined-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.primary}"
  button-hero:
    textColor: "{colors.black}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7px 34px 9px
    height: 36px
    border: "1px solid {colors.black}"
  button-link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    border: "1px {colors.primary} underline (::after, 97% width)"
  chip-filter:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.chip}"
    rounded: "{rounded.none}"
    padding: 5px 10px 6px
    height: 31px
    border: "1px solid {colors.border-chip}"
  chip-filter-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
  search-input:
    textColor: "{colors.primary}"
    typography: "{typography.search-input}"
    rounded: "{rounded.none}"
    padding: 7px 18px 0px
    height: 54px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.nav-link}"
    padding: 23px 0px 3px
    height: 62px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  product-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-navy}"
    typography: "{typography.card-title}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.surface-blush}"
    textColor: "{colors.ink-navy}"
    typography: "{typography.body-base}"
    padding: 60px 0px
---

## Overview

Rare Beauty's storefront (`rarebeauty.com`) feels like a soft-focus beauty magazine: a warm cream `#fdfbf8` page, blush `#fdf6f0` content bands and footer, a high-contrast serif for every headline, and tiny, widely-tracked uppercase sans labels for everything you click. The single brand colour is a deep burgundy, `#6f0936`, which is simultaneously the most-read text colour (navigation, links, labels — 1744 weighted chars on the homepage), the border of every outlined button, and the fill of the add-to-bag button.

Headlines use **Ogg** (served as `"Ogg Regular"`) at weight 400 only — 56px in the hero, 48px for section titles ("Bestsellers", "Soft Pinch Liquid Blush"), 38px on product pages, 17px on product cards. Its sharp, calligraphic contrast is the brand's editorial voice. Everything else is **Neue Haas Unica** (served as `"Neue Hass Unica Regular"`, with Medium and Bold faces): 20px/29px for feature paragraphs, 15px/22px with 1px tracking on product pages, and very small uppercase labels with very wide tracking (10px at 5px tracking for buttons, 12px at 3px for nav, 9px at 2px for chips). A custom **Rare Script** face appears for hand-written accents.

The capture shows: a thin announcement bar with burgundy uppercase text and a burgundy underline rule, a 62px cream header (SHOP / SHADE FINDER / RARE IMPACT on the left, the burgundy "Rare Beauty" wordmark centred, small line icons on the right), a full-bleed campaign portrait with a right-aligned serif headline and a black-outlined "SHOP NOW", a "Bestsellers" carousel on a blush band with product photos on warm beige backgrounds and outlined "ADD TO BAG · $28" buttons, a circular-cropped portrait (50% radius) beside a 48px serif headline and 20px paragraph with an underlined "SHOP SOFT PINCH" link, and a "Foundation Shade Finder" section with script lettering.

**Key Characteristics:**
- Cream `#fdfbf8` canvas + blush `#fdf6f0` bands; no pure white surfaces.
- Burgundy `#6f0936` for text links, labels, borders and the only filled button.
- Ogg 400 serif headlines, never bold.
- Neue Haas Unica uppercase micro-labels with 2–5px tracking.
- Square 36px buttons, outlined by default; hover swaps fill and text colours.
- Circular (50%) portrait crops — 50 elements on the homepage use `50%` radius.
- Warm, natural-light beauty photography; Selena Gomez and community faces close-up.

### Art Direction (from the capture)
- Campaign hero: Selena Gomez close-up, warm mauve studio backdrop, product held to the face; headline set on the empty side of the frame.
- Product photography: single products centred on a warm beige sweep with a soft floor shadow, shot straight-on.
- Lifestyle crops: tight beauty portraits in circles on a cream page, product held at cheek height.
- Palette in imagery: mauve, rose, peach, gold caps — echoing the burgundy UI without adding new UI colours.
- Script lettering ("Rare Script") appears as a handwritten flourish over serif headings in the Shade Finder module.
- Density: one idea per band — a headline, one paragraph, one link — separated by wide cream space.
- Floating utilities: a round dark-green cookie-preferences button bottom-left and a round burgundy chat button bottom-right.

## Colors

### Brand & Accent
- **Burgundy** (`{colors.primary}` — `#6f0936`): `.btn--secondary` fill, `.btn--primary` text and border, `.btn-link` text and underline, nav links, announcement text. Also `{colors.ink}`.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): text on burgundy buttons.
- **Plum** (`{colors.plum}` — `#7f2649`): secondary burgundy text (36 chars).
- **Border Chip** (`{colors.border-chip}` — `#6f0936cc`): 80% burgundy border on outlined buttons and filter chips (`rgba(111,9,54,.8)`).

### Surface
- **Canvas** (`{colors.canvas}` — `#fdfbf8`): `body`, header, chips.
- **Blush** (`{colors.surface-blush}` — `#fdf6f0`): `.footer` and full-width content bands — the largest background area on the homepage (4369 weighted units).
- **Sage** (`{colors.surface-sage}` — `#edeee9`): small neutral panels.
- **Button Default** (`{colors.button-default}` — `#464545`): base `.btn` fill before a variant class is applied.
- **Play Sage** (`{colors.play-sage}` — `#9dafa9`): circular video play button (`.btn--play`).

### Text
- **Ink / Burgundy** (`{colors.ink}` — `#6f0936`): the most-read colour.
- **Navy** (`{colors.ink-navy}` — `#000914`): headings, paragraphs, product names (1295 chars on the homepage, 2905 on the product page).
- **Hero Ink** (`{colors.ink-hero}` — `#191919`): hero headline over photography.
- **Muted** (`{colors.ink-muted}` — `#6a6c77`): secondary metadata.
- **Cream Text** (`{colors.cream-text}` — `#fff7e7`): footnotes over UGC imagery (`.ugc-module__ir .footnote`).
- **Black** (`{colors.black}` — `#000000`): hero CTA text/border on light photography.

### Borders
- **Taupe** (`{colors.border-taupe}` — `#c0bbb4`): neutral hairlines.

## Typography

### Font Family
- **Ogg** — served as `"Ogg Regular"` (400), with `"Ogg Medium"` and `"Ogg Roman"` faces also declared in the theme CSS. Display serif.
- **Neue Haas Unica** — served as `"Neue Hass Unica Regular"` (400), `"Neue Hass Unica Medium"` (500), `"Neue Hass Unica Bold"` (700) — note the theme's spelling "Hass". 2902 of the homepage's weighted chars.
- **Rare Script** — served as `"Rare Script"` (400); custom script for accents (38 chars).

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.hero}` | Ogg | 56px | 400 | 53px | — | Hero headline |
| `{typography.hero-mobile}` | Ogg | 32px | 400 | 34px | — | Hero at 390px |
| `{typography.display-section}` | Ogg | 48px | 400 | 53px | 0.5px | Section titles; homepage h1 |
| `{typography.display-section-mobile}` | Ogg | 30px | 400 | 34px | — | Homepage h1 at 390px; collection h1 |
| `{typography.product-title}` | Ogg | 38px | 400 | 50px | — | Product page h1 |
| `{typography.product-title-mobile}` | Ogg | 22px | 400 | 26px | — | Product h1 at 390px |
| `{typography.heading-sm}` | Ogg | 22px | 400 | 22px | — | Shade name ("No. Hope") |
| `{typography.card-title}` | Ogg | 17px | 400 | 20px | 0.5px | Product card names |
| `{typography.search-input}` | Ogg | 30px | 400 | 46px | — | Search overlay field |
| `{typography.body-lg}` | Unica | 20px | 400 | 29px | — | Feature paragraphs |
| `{typography.body-lg-mobile}` | Unica | 13px | 400 | 18.85px | — | Same at 390px |
| `{typography.body}` | Unica | 15px | 400 | 22px | 1px | Product descriptions |
| `{typography.body-base}` | Unica | 16px | 400 | 18.4px | — | `body` default, footer |
| `{typography.eyebrow}` | Unica | 14px | 400 | 19.88px | 3px | Uppercase section labels ("CATEGORIES", "NEW") |
| `{typography.nav-link}` | Unica | 12px | 400 | 15px | 3px | Uppercase header links |
| `{typography.caption}` | Unica | 11px | 400 | — | 1.5px | Most frequent size on the homepage (1035 chars) |
| `{typography.button}` | Unica | 10px | 400 | 18px | 5px | `.btn` uppercase labels |
| `{typography.button-bag}` | Unica | 12px | 700 | 18px | 4px | Add-to-bag labels |
| `{typography.chip}` | Unica | 9px | 400 | 18px | 2px | Collection filter chips |

### Principles
- Serif = voice (always 400); sans = interface (almost always 400, uppercase, widely tracked).
- Tracking grows as size shrinks: 0.5px at 17–48px serif, 1px at 15px body, 3px at 12–14px, 4–5px at 10–12px buttons.
- The homepage `h1` ("Rare Beauty") is visually hidden (1×1px) but styled as the 48px section serif.

### Note on Font Substitutes
Ogg is a commercial display serif by Lucas Sharp (Sharp Type), "a fashion magazine typeface inspired by the hand lettering of" calligrapher Oscar Ogg; Neue Haas Unica is a licensed commercial grotesque self-hosted by the theme. If unavailable, use a high-contrast editorial serif at weight 400 for headlines and a neutral grotesque for labels, keeping the exact sizes and the wide uppercase tracking — the tracking matters more than the exact face.

## Layout

### Spacing System
Measured gaps: 6px (24), 4px (8), 16px; paddings: 7px, 10px, 15px, 8px, 20px, 34px, 48px, 100px; footer 60px top/bottom. Button padding `.4375rem 2.125rem .5625rem` (7px 34px 9px).
- `{spacing.xxs}` 4px · `{spacing.xs}` 6px · `{spacing.sm}` 8px · `{spacing.md}` 10px · `{spacing.lg}` 15px · `{spacing.xl}` 20px · `{spacing.xxl}` 34px · `{spacing.section}` 60px.

### Grid & Container
- `.container`: `max-width: 1440px`, `padding: 0 1.875rem` (30px), widening to asymmetric `1.9375rem / 2.75rem` and `0 / 4rem` paddings at larger breakpoints.
- Bestsellers carousel: four-and-a-bit product cards visible at 1280px, overflowing to the right edge to signal scroll.
- Feature module: a large circular image on the left half, serif headline + paragraph + underlined link on the right.

### Whitespace Philosophy
Generous: large vertical gaps between modules (the capture shows ~100px breaks), centred-left text columns ~375px wide, and lots of cream space around serif headlines.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Cards, buttons, sections |
| 1 | `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` | 2 elements on the homepage |
| 2 | `rgba(0, 0, 0, 0.15) 0px 4px 12px 0px` | 1 element on the homepage |

Only three shadowed elements render on the homepage; in the capture the only raised-looking elements are the floating round cookie and chat buttons. Brand components are flat; depth comes from cream vs blush bands.

## Shapes

### Border Radius Scale
- `{rounded.none}` 0px — every button, chip, input and card.
- `{rounded.sm}` 4px — small media placeholders on product pages.
- `{rounded.circle}` 50% — portrait crops, swatches, icon buttons, the play button (`border-radius: 100%`).

### Photography Geometry
Product shots sit on warm beige/cream sweeps in tall rectangles; lifestyle portraits are tight beauty close-ups with soft natural light and warm skin tones, frequently cropped to a circle.

## Components

### Buttons
- **Add to bag** (`.btn--secondary` on product pages): `{colors.primary}` fill, white `{typography.button-bag}` (12px/700, 4px tracking), padding 7px 70px 9px, 36px tall, 1px burgundy border. Hover (measured): white fill, burgundy text and border.
- **Outlined** (`.btn--primary`): transparent/cream fill, 1px `rgba(111,9,54,.8)` border, burgundy 10px text with 5px tracking, padding 7px 34px 9px, 36px tall. Hover (theme CSS): burgundy fill, white text.
- **Hero CTA** (`.hero-static__cta`): colours set per slide via CSS variables (`--cta-bg-d-hover`, `--cta-text-d-hover`, `--cta-bg-m-hover`, `--cta-text-m-hover`); on the measured hero it is black text with a 1px black border.
- **Tertiary** (`.btn--tertiary`): transparent, 1px `#000914` border, 8px text with 3px tracking, padding 0 7px.
- **Quaternary** (`.btn--quaternary`): cream fill, burgundy text, full width up to 20rem.
- **Text link** (`.btn-link`): burgundy 10px uppercase, 5px tracking, with a 1px burgundy underline drawn by `::after` at 97% width; hover switches to font-weight 700.
- Transitions: `background-color, border, color, font-size, padding .4s ease-in-out`.

### Cards & Containers
- **Product card**: tall image on a beige photo background, optional "50 mL" size label, `{typography.card-title}` name in navy, small burgundy star row with underlined review count, size toggles ("50 mL" / "10 mL" small outlined boxes), then a full-width outlined "ADD TO BAG · $price" button; sale prices show the original struck through.
- **Feature module**: circular image + serif headline + 20px paragraph + `.btn-link`.

### Inputs & Forms
- **Search overlay input**: Ogg 30px/46px burgundy text, padding 7px 18px 0, 54px tall, no visible box.

### Navigation
- Announcement bar: cream, uppercase burgundy micro-text, with a burgundy rule beneath and a close "×".
- Header: `{colors.canvas}`, 62px, padding 23px 0 3px; nav links `{typography.nav-link}` in burgundy; centred burgundy wordmark; right-side search, account, bag and flag icons.
- Mobile header: 48px, hamburger + account left, wordmark centre, search + bag right.

### Pills, Tags, and Chips
- **Filter chip** (collection pages): cream fill, 1px `#6f0936cc` border, burgundy 9px text with 2px tracking, padding 5px 10px 6px, 31px tall, square. Hover (measured): burgundy fill, white text.

### Signature Components
- **Circle-crop portrait module**.
- **Wide-tracked uppercase micro-buttons** (10px / 5px tracking).
- **"ADD TO BAG · $price" buttons** combining action and price with a middle dot.

### Content Patterns
- Section header pattern: Ogg 48px title, then a `.btn-link` "SHOP NOW" directly underneath, left-aligned to the same column.
- Hero pattern: small uppercase eyebrow ("NEW", 14px with 3px tracking), 56px serif headline right-aligned, 20px/29px sentence, outlined CTA.
- Product pattern: price is inside the button label after a middle dot ("ADD TO BAG · $78"); sale shows the original price struck through inside the same label.
- Reviews: five small burgundy stars plus an underlined uppercase review count ("72 REVIEWS").
- Size selectors: small square outlined boxes ("50 mL", "10 mL") with the active one outlined darker.

### Measurement Notes
- The homepage has no filled primary CTA (the extractor's `ctaPrimary` is empty); the filled burgundy button and its hover come from the product-page measurement.
- The homepage `h1` is a 1×1px visually hidden heading; its styles equal the 48px section serif, so no role override was needed.
- `"Neue Hass Unica Regular"` is reported with computed weight 700 on add-to-bag labels (the theme applies `font-weight: 700` to the Regular family name).

## Design System Architecture

Rare Beauty publishes **no public design system, component library, token package or brand portal**. Searches for an official system, agency case study, press kit and typeface documentation returned the agency attribution (below), retailer pages and third-party scraped "DESIGN.md" aggregators (ignored). What follows is the de-facto system in Rare Beauty's shipped theme.

- **Origin**: Established, a NYC agency founded in 2007 by Sam O'Donahue and Rebecca Jones, shaped Rare Beauty's "brand identity, packaging and positioning"; its packaging is "very, very simple cylinders, circles and squares" ([Beauty Independent](https://www.beautyindependent.com/established-creative-agency-reale-actives-rare-beauty-builds-successful-beauty-brands/); [The Dieline](https://thedieline.com/blog/2020/9/3/selena-gomez-unveils-rare-beauty-makeup) also credits Established). Neither source says who built the website or documents a web design system.
- **Platform**: a Shopify theme declared as `Shopify.theme = {"name":"RareBeauty/SDG: Production 2","schema_name":"SDG Shopify Skeleton","schema_version":"1.10.0"}` on `rarebeauty.com`; styles ship as compiled Sass: `https://www.rarebeauty.com/cdn/shop/t/127/assets/critical.scss.css`, `index.scss.css`, `style.scss.css`.
- **Token architecture**: no CSS custom-property token layer — the homepage exposes only three `:root` variables, all from the ReCharge widget (`--rc-color`, `--rc-active-color`, `--rc-active-bg`). Colours and sizes are compiled Sass values (`#6f0936`, `#fdfbf8`, `#fdf6f0`, `.625rem`, `.3125rem`). The only runtime variables are per-hero CTA colours (`--cta-bg-d-hover`, `--cta-text-m-hover`, …) injected by the CMS so each campaign slide can theme its button.
- **Naming convention**: BEM — `btn`, `btn--primary`, `btn--secondary`, `btn--tertiary`, `btn--quaternary`, `btn--full`, `btn--play`, `btn__label`, `btn-link`, `btn-link--small`, `hero-static__cta`, `hero-static__toggle`, `home-hero__pause`, `ugc-module__copy-wrapper`, `nav__image`. Icons come from a sprite addressed by modifiers such as `--arrow-right-white`, `--accordion-plus-purple`, `--bag-light`.
- **Theming**: a single light theme; no dark mode or density modes. Campaign-specific colour is handled per hero via the injected CTA variables.
- **Type & spacing system**: rem-based from a 16px root (`.625rem` = 10px buttons, `.4375rem/.5625rem` vertical button padding, `2.125rem` horizontal); two families (Ogg serif, Neue Haas Unica sans) plus Rare Script. Breakpoints: 413, 767/768, 980, 1024/1025, 1281, 1441px.
- **Component model**: button variants listed above; hero static/carousel with pause toggle; UGC module; product card; filter chips; footer with email/SMS sign-up and "SCROLL TO TOP".
- **Accessibility**: a "Skip to Main" link is the first element; hero pause/toggle controls get `outline: #fff solid 2px; outline-offset: 2px` on `:focus-visible`; hero CTAs mirror their hover colours on focus. No published contrast or touch-target policy; measured buttons are 36px tall.
- **Delivery**: compiled theme assets on the Shopify CDN only; no npm package, Figma kit or public versioning.

## Do's and Don'ts

### Do
- Use cream `#fdfbf8` as the page and blush `#fdf6f0` for bands and the footer.
- Set headlines in Ogg 400 — 56px hero, 48px sections, 38px product titles, 17px card names.
- Set all interface labels in uppercase Neue Haas Unica with wide tracking (10px/5px, 12px/3px, 9px/2px).
- Use burgundy `#6f0936` for links, labels, borders and the add-to-bag fill.
- Keep buttons square and 36px tall; swap fill/text colours on hover.
- Crop portraits into circles.

### Don't
- Don't use pure white page backgrounds or grey UI.
- Don't bold the serif.
- Don't round buttons or chips.
- Don't introduce a second accent colour; burgundy carries every interactive state.
- Don't set sans labels in sentence case or with default tracking.
- Don't add drop shadows to cards.

## Responsive Behavior

### Breakpoints
| Name | Width | Key changes |
|---|---|---|
| Small | ≤ 413px | tighter type |
| Mobile | ≤ 767px | header 48px; hero 32px/34px; section h1 30px; body-lg 13px/18.85px |
| Tablet | 768–1024px | two-column modules |
| Desktop | ≥ 1025px | full nav row |
| Large | ≥ 1281 / 1441px | container max 1440px with wider side padding |

### Touch Targets
- Buttons are 36px tall on desktop and mobile; filter chips 31px. These are below 44px.

### Collapsing Strategy
- Container padding transitions with `padding .4s ease-in-out`.

### Image Behavior
Hero portraits crop to keep the face visible; circular crops stay circular at every width.

### Motion
- Buttons animate colour, border, font-size and padding over `.4s ease-in-out`.
- `.btn__label` scales from `.9` and fades in over `.2s` for add-to-bag state changes.
- Footer transitions `transform .4s ease-in-out`; the hero has an explicit pause control.

### Voice & Microcopy
- Uppercase, short and warm: "SHOP NOW", "ADD TO BAG · $28", "SHOP SOFT PINCH", "SCROLL TO TOP".
- Paragraph copy is friendly and specific: "Meet our award-winning bestseller that's sold every four seconds."

## Iteration Guide

1. Cream canvas `#fdfbf8`, navy `#000914` paragraphs, burgundy `#6f0936` labels.
2. Header 62px with 12px/3px uppercase burgundy nav and centred wordmark.
3. Headlines in Ogg 400 at 56/48/38/17px with the measured line-heights.
4. Buttons: square, 36px, 10px/5px uppercase; outlined burgundy (80%) by default, filled on hover; add-to-bag filled burgundy 12px/700/4px.
5. Blush `#fdf6f0` bands for carousels and footer (60px padding).
6. Circular portrait crops beside 20px/29px paragraphs and an underlined `.btn-link`.
7. Verify: no white, no rounded rectangles, no bold serif.

### Prompting Checklist
- "Ogg Regular 400 serif headlines; Neue Haas Unica uppercase labels tracked 3–5px."
- "Cream #fdfbf8 page, blush #fdf6f0 bands, burgundy #6f0936 for every action."
- "Square 36px buttons, outlined, hover fills burgundy."
- "Circle-cropped beauty portraits."
- "Burgundy #6f0936 underline links (1px, 97% width) that turn bold on hover."
- "Navy #000914 for paragraphs and product names."
- "Footer on #fdf6f0 with 60px vertical padding."
