---
version: alpha
name: Byredo
category: "Beauty & Personal Care"
description: "Byredo's Next.js storefront is a near-silent black-and-white luxury system: full-bleed video and photography, a stencil BYREDO wordmark, and a single custom face, byredoSans, at weight 400 only — 24px/32px uppercase product titles with 0.6px tracking, 14px/20px body with 0.35px tracking, 12px/16px uppercase labels — over a #ffffff canvas with #000000 ink, #f5f5f5 product surfaces, square 0px black ADD TO CART buttons 44px tall and 4px-radius floating product cards."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  ink-soft: "#0a0a0a"
  ink-muted: "#767676"
  ink-dove: "#707070"
  footer-heading: "#4d564f"
  surface: "#f5f5f5"
  surface-grey: "#eeeeee"
  card-glass: "#ffffff80"
  border-silver: "#cccccc"
  border-tertiary: "#ababab"
  border-light: "#e5e7eb"
  danger: "#ec0909"
  petrol: "#216477"

typography:
  category-title:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 57.6px
    letterSpacing: 4.8px
  category-title-mobile:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: 0.5px
  banner-title:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
    letterSpacing: 1.2px
  product-title:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 0.6px
  product-title-mobile:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 0.5px
  section-title:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: 0.6px
  body-lg:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    letterSpacing: 0.4px
  body:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.35px
  body-sm:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 13px
    fontWeight: 400
    letterSpacing: 0.325px
  label:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.3px
  footer-heading:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 0.3px
  caption:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 10px
    fontWeight: 400
    letterSpacing: 0.25px
  legal:
    fontFamily: "byredoSans, \"byredoSans Fallback\", sans-serif"
    fontSize: 8px
    fontWeight: 400
    letterSpacing: 0.4px

rounded:
  none: 0px
  sm: 4px
  md: 6px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  header: 28px
  xl: 32px
  xxl: 44px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
    padding: 0px 32px
    height: 44px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.primary}"
  size-option:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.primary}"
  newsletter-input:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px 4px
    height: 40px
  product-card-floating:
    backgroundColor: "{colors.card-glass}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
  buy-box:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 32px
  product-gallery:
    backgroundColor: "{colors.surface}"
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    padding: 28px
    height: 84px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
---

## Overview

Byredo's storefront (`byredo.com/us_en`) behaves like a fashion-house lookbook. The homepage is essentially one full-viewport video (the capture shows a blurred, warm close-up of a Havana Tonka bottle against a speckled backdrop) with a huge white stencil **BYREDO** wordmark centred at the top, MENU and CART (0) in tiny uppercase at the corners, sound and pause controls bottom-left, a vertical progress indicator on the right, and a single translucent product card (`#ffffff80`, 4px corners) floating bottom-right: "PERFUME EXTRACT / HAVANA TONKA / $465 / SIZE 70 ML". Below the video, the footer starts immediately — a giant black stencil BYREDO, "STAY IN THE KNOW" newsletter, and three columns of uppercase links.

The interface typography is one custom face, **byredoSans**, used at weight 400 everywhere (1326 of 1326 weighted chars on the homepage; 3043 of 3043 on the product page). Hierarchy comes from size and case only: 24px uppercase product and section titles, 14px sentence-case body, 12px uppercase labels and navigation, and very small 8px uppercase legal copy. All sizes carry slight positive tracking (0.025em: 0.6px at 24px, 0.35px at 14px, 0.3px at 12px). The logotype is a separate stencil face (`--font-byredo-stencil: "byredoStencil"`).

Colour is strictly black `#000000`, white `#ffffff`, and greys (`#f5f5f5` surfaces, `#767676` secondary text, `#4d564f` footer headings). The only filled button is black, square, 44px tall. Imagery provides all warmth — amber glass, gold caps, smoky campaign films.

**Key Characteristics:**
- Full-bleed video/photography; UI is reduced to corner labels and floating cards.
- One custom sans (byredoSans) at weight 400 only; uppercase for titles and labels.
- Constant ~0.025em positive tracking.
- Pure black/white with `#f5f5f5` product surfaces.
- Square black 44px ADD TO CART; 4px-radius floating cards.
- Stencil BYREDO wordmark as the main graphic device.

### Art Direction (from captures)
- Campaign film: warm amber and smoky tones, shallow depth of field, grainy texture — the product appears as a blurred silhouette rather than a packshot.
- Packshots: bottle centred and upright on a seamless `#f5f5f5` background, gold cap catching soft top light; labels are crisp and readable.
- Editorial bands on the PDP use dark, abstract macro footage (e.g. brushed resin) with white uppercase titles ("TOP NOTES") and a list of notes.
- Product tiles carry a tiny uppercase tag top-left ("NEW", "TRY-IT-FIRST") and a line bag icon top-right.
- The wordmark is the only large graphic element on most screens; there are no illustrations or icons beyond thin line glyphs.
- Interaction cues are minimal: thin progress bars under images, chevrons for accordions, a bookmark icon for wishlist.

## Colors

### Brand & Accent
- **Black** (`{colors.primary}` / `{colors.ink}` — `#000000`): text, buttons, borders, the stencil logo in the footer. Tailwind name `secondary` (`bg-secondary`, `border-secondary`) and `text-primary` (both resolve to black in the bundle).
- **White** (`{colors.on-primary}` / `{colors.canvas}` — `#ffffff`): canvas, button text, logo over video. Tailwind `bg-primary` resolves to white.
- **Petrol** (`{colors.petrol}` — `#216477`): declared `--petrol` custom property; not seen in rendered UI.

### Surface
- **Surface** (`{colors.surface}` — `#f5f5f5`): `bg-white-smoke` / `bg-container`; product gallery background, newsletter input (1005 weighted area units on the product page).
- **Grey** (`{colors.surface-grey}` — `#eeeeee`): `bg-[#eeeeee]` placeholders.
- **Glass Card** (`{colors.card-glass}` — `#ffffff80`): floating product card on the homepage video.

### Text
- **Ink** (`{colors.ink}` — `#000000`): 1040 weighted chars on the homepage.
- **Ink Soft** (`{colors.ink-soft}` — `#0a0a0a`): newsletter description.
- **Muted** (`{colors.ink-muted}` — `#767676`): `text-boulder`; category labels ("PERFUME EXTRACT"), shipping notes, legal (418 chars on the product page).
- **Dove** (`{colors.ink-dove}` — `#707070`): `text-dove-gray`; copyright.
- **Footer Heading** (`{colors.footer-heading}` — `#4d564f`): "CUSTOMER SERVICES", "LEGAL", "EXCLUSIVE SERVICES".

### Borders & Semantic
- **Silver** (`{colors.border-silver}` — `#cccccc`): `border-silver` / `border-primary`.
- **Tertiary** (`{colors.border-tertiary}` — `#ababab`): `border-tertiary`.
- **Light** (`{colors.border-light}` — `#e5e7eb`): hairlines (Tailwind gray-200).
- **Danger** (`{colors.danger}` — `#ec0909`): `bg-red-ribbon`, `--pl-custom-error-message-color`.

## Typography

### Font Family
- **byredoSans** — served as `byredoSans` (self-hosted woff2 in `/_next/static/media/`, weights 300, 400, 700 declared; only 400 renders), with a generated `"byredoSans Fallback"`. Exposed as `--font-byredoSans`.
- **byredoStencil** — `--font-byredo-stencil: "byredoStencil","byredoStencil Fallback"`; the stencil wordmark (`.font-byredo-stencil`).
- The bundle also maps `.font-body` and `.font-headings` to `Inter,sans-serif`; Inter renders on 13 chars only.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.category-title}` | 48px | 400 | 57.6px | 4.8px | Collection h1 "PERFUME" (uppercase, 0.1em tracking) |
| `{typography.category-title-mobile}` | 20px | 400 | 30px | 0.5px | Collection h1 at 390px |
| `{typography.banner-title}` | 16px | 400 | 19.2px | 1.2px | White uppercase banner title ("FRAGRANCE FINDER") |
| `{typography.product-title}` | 24px | 400 | 32px | 0.6px | PDP h1 "HAVANA TONKA" (uppercase) |
| `{typography.product-title-mobile}` | 20px | 400 | 28px | 0.5px | PDP h1 at 390px |
| `{typography.section-title}` | 24px | 400 | 28.8px | 0.6px | "THE COLLECTION", "THE GIFTING EXPERIENCE", "TOP NOTES" |
| `{typography.body-lg}` | 16px | 400 | — | 0.4px | Larger copy (155 chars) |
| `{typography.body}` | 14px | 400 | 20px | 0.35px | Body, descriptions, product names on cards |
| `{typography.body-sm}` | 13px | 400 | — | 0.325px | Accordion copy (101 chars) |
| `{typography.label}` | 12px | 400 | 16px | 0.3px | Uppercase nav, buttons, accordions, category labels |
| `{typography.footer-heading}` | 12px | 400 | 28px | 0.3px | Uppercase footer column headings |
| `{typography.caption}` | 10px | 400 | — | 0.25px | Small labels |
| `{typography.legal}` | 8px | 400 | — | 0.4px | Uppercase consent/legal copy (525 chars at 0.4px) |

### Principles
- Never bold: 400 is the only rendered weight.
- Uppercase for every title, label, button and nav item; sentence case only for descriptive paragraphs.
- Tracking is proportional (≈0.025em) at most sizes; the collection title opens up to 0.1em (4.8px at 48px) and banner titles to 1.2px at 16px.

### Note on Font Substitutes
byredoSans and byredoStencil are proprietary, self-hosted brand fonts. Substitute a clean geometric/grotesque sans at weight 400 with 0.025em tracking for byredoSans; the stencil wordmark should be used as an image, not re-typeset.

## Layout

### Spacing System
Measured gaps: 12px (18), 8px (17), 6px, 4px, 20px; paddings: 28px (header, 9), 16px, 12px, 8px, 32px (buy box), 44px.
- `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 12px · `{spacing.md}` 16px · `{spacing.lg}` 20px · `{spacing.header}` 28px · `{spacing.xl}` 32px · `{spacing.xxl}` 44px.

### Grid & Container
- Header: 84px tall, 28px padding; MENU (with hamburger + search icon) left, logo centre, CART (n) right.
- PDP: full-width split — `#f5f5f5` image gallery left half; a 410px white buy box with 4px corners floating over a second image on the right; description column below on the right half.
- "THE COLLECTION": four product tiles on `#f5f5f5`, label top-left ("TRY-IT-FIRST"), bag icon top-right, progress bar under each image, category label in grey, name in uppercase, price.
- Footer: logo + newsletter left (≈40%), three link columns right.
- Breakpoints in the bundle: 376, 500, 769, 1025, 1441, 1536, 1921px.

### Whitespace Philosophy
Extreme: the homepage is one image; PDP sections are separated by large empty bands (the description sits alone on the right with the left column empty).

## Elevation & Depth

The site is flat. The homepage measurement found a single box-shadow value, `rgba(0, 0, 0, 0) 0px 0px 0px 0px` repeated three times, which is fully transparent, and no measured role carries a box-shadow. Depth comes from layering and tone, not shadows.

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | Header, footer, newsletter field, link columns |
| Overlay | Semi-transparent `#ffffff80` fill, no shadow | Product card floating over the hero video |

In the capture, the hero video fills the first viewport and the BYREDO wordmark, MENU and CART (0) sit directly on it. The Havana Tonka card at the lower right overlaps the video with a white image tile beside a translucent text panel, and it has no visible drop shadow. The footer below is a plain white block separated by a hairline rule.

The stylesheet corpus also lists utility and third-party values such as `0 0 4px 1px rgba(0,0,0,.08)`, `inset 0 1px 1px rgba(0,0,0,.1)` and `0 0 0 2pt #185abc`. None was measured on a rendered element, so do not use them as brand elevation.

## Shapes

### Border Radius Scale
- `{rounded.none}` 0px — buttons, inputs, size option.
- `{rounded.sm}` 4px — floating product card, buy box.
- `{rounded.md}` 6px — small UI elements (7 on the PDP).
- `{rounded.pill}` 9999px — `rounded-full` dots/progress and icon buttons.

### Photography Geometry
Packshots centred on `#f5f5f5`, softly lit, bottle at roughly a third of the tile height; campaign imagery is dark, grainy, close-up and full-bleed.

## Components

### Buttons
- **Primary** ("ADD TO CART"): `{colors.primary}` fill, white `{typography.label}` uppercase, padding 0 32px, 44px tall, 0px radius, full width of the buy box.
- **Secondary** (express pay): white with a 1px black border, square, full width under ADD TO CART (Apple Pay mark).
- Text links use `hover:underline`; underlined links in legal copy.
- Focus: `:focus, :focus-visible { outline-color: #000 !important }`, with `focus-visible:outline` and `focus-visible:outline-offset` utilities on links (89 uses on the homepage).

### Cards & Containers
- **Floating product card** (homepage): `#ffffff80`, 4px radius, 400×150px, packshot left on white, text right (grey category label, 14px uppercase name, price, size), bag icon top-right.
- **Buy box** (PDP): white, 4px radius, 32px padding: category label, 24px title, price, SIZE row with outlined "70 ML", ADD TO CART, express pay, shipping note, "TRY IT FIRST" sample add-on.
- **Collection tile**: `#f5f5f5` image, small label, bag icon, thin progress bar, text below.

### Inputs & Forms
- **Newsletter**: `{colors.surface}` fill, no border, 14px, padding 0 4px, 40px, arrow submit at right; legal copy below in 8px uppercase with underlined links.
- **Size option**: square, 1px black outline, 12px uppercase.

### Navigation
- Over video: white MENU / CART (0) and white logo; on content pages: black on white.
- The header text contains MENU twice, ACCOUNT, WISHLIST and CART (0); only MENU and CART are visible at 1280px.
- Footer: uppercase 12px links (LIVE CHAT ASSISTANCE, CONTACT, FAQ, SHIPPING …), headings in `#4d564f`, social links and locale "UNITED STATES ($USD) | ENGLISH" in the bottom bar.

### States
- Links: `hover:underline` (23 uses on the homepage) and `hover:no-underline` for already-underlined links.
- Menu/list items: `hover:bg-neutral-100`, `active:bg-neutral-200`, `hover:text-primary-800`, `active:text-primary-900` utilities appear in the homepage markup (17–21 uses each).
- These resolve through the `--colors-*` RGB-triplet variables (e.g. `--colors-neutral-100: 239 244 241`, `--colors-neutral-200: 217 226 220`), so hover tints are near-neutral greys.
- No hover colour was captured by the extractor on the homepage (it rendered no buttons).
- Focus: every focusable element gets a black outline (`outline-color: #000 !important`) with `focus-visible:outline-offset` and `focus-visible:rounded-sm`.
- The parcel-tracking widget's own button: black `#000000`, hover `#333333`, white text, 0px radius (`--pl-custom-button-*`).
- Video controls: separate mute and pause buttons bottom-left over the hero.

### Header Behaviour
- Over the homepage film the header is transparent with white MENU / CART (0) and a large white stencil logo.
- On content pages (PDP, collection) the header is white with a smaller black stencil logo centred and black labels.
- The header band is 84px with 28px padding at 1280px.

### Footer Detail
- Left block: stencil logo at display size, "STAY IN THE KNOW" (12px uppercase), one-line 14px pitch, `#f5f5f5` email field with arrow, then 8px uppercase consent copy with underlined links and a reCAPTCHA notice.
- Right block: three columns (CUSTOMER SERVICES, LEGAL, EXCLUSIVE SERVICES) of 12px uppercase links.
- Bottom bar: "© 2026 BYREDO", social links in uppercase, accessibility badge and the locale selector with flag.

### Signature Components
- Full-screen video hero with mute/pause controls and a floating glass product card.
- Stencil wordmark at hero and footer scale.
- "TRY IT FIRST" sample add-on in the buy box.

### Content Patterns
- Product naming: grey uppercase category ("PERFUME EXTRACT") above a black uppercase name ("HAVANA TONKA"), then price ("$465") and size ("SIZE 70 ML").
- PDP accordions: "DESCRIPTION" (open by default, with "More..." link), "NOTES & ACCORDS", "HOW TO USE", "INGREDIENTS" — 12px uppercase rows with chevrons.
- Buy box add-on: "TRY IT FIRST — Experience the fragrance first with a complimentary 2ml sample included with your full-size purchase." with a checkbox.
- Shipping reassurance under the buttons in grey: "Free shipping & 30 days free return".
- Collection pages open with a 48px uppercase title and a 14px intro paragraph ("Luxury designer perfume for modern women and men.").
- Footer services list: free shipping, 30 days free returns, free samples, try it first, gift wrapping, digital gift card, personalized message, secure payments.

## Design System Architecture

Byredo publishes **no public design system, token package or Figma kit** (WebSearch was unavailable for this brand during the session, so the search log is incomplete — see SOURCES.json). The structure below is read from Byredo's shipped site.

- **Brand source**: "Byredo was founded in Stockholm in 2006 by Ben Gorham. Born from a desire to translate memories and emotions into objects and experiences, Byredo takes a sensorial-led approach to creativity." ([About Byredo](https://www.byredo.com/us_en/about)).
- **Platform**: a Next.js site (`__NEXT_DATA__` payload, `/_next/static/css/f8846be0af7b5506.css`, fonts in `/_next/static/media/`). Page content is delivered as rich-text JSON nodes (`"nodeType":"heading-2"`, `"marks"`, `"value"`) inside the page payload.
- **Token architecture**: Tailwind (`--tw-*`) with named colours — `primary` (white bg / black text), `secondary` (black), `white-smoke` and `container` (`#f5f5f5`), `boulder` (`#767676`), `dove-gray` (`#707070`), `silver` (`#cccccc`), `tertiary` (`#ababab`), `red-ribbon` (`#ec0909`), `pumpkin` — plus a generic RGB-triplet scale exposed as CSS variables (`--colors-primary-50…900`, `--colors-secondary-*`, `--colors-neutral-*`, `--colors-negative-*`, `--colors-positive-*`, `--colors-warning-*`, `--colors-disabled-*`; e.g. `--colors-neutral-800: 37 43 39`) consumed as `rgb(var(--colors-…)/opacity)`. The resting storefront uses the black/white/grey names; the green `--colors-primary-*` scale does not appear in rendered colours, although some hover/active utilities in the markup reference it (`hover:text-primary-800`, `active:text-primary-900`, 21 uses each on the homepage). Fonts are tokens too: `--font-byredoSans`, `--font-byredo-stencil`.
- **Embedded modules**: a parcel-tracking widget themed through `--pl-custom-*` variables (`--pl-custom-button-background-color: #000000`, `--pl-custom-button-hover-background-color: #333333`, `--pl-custom-body-font-family-default: "Byredo Sans"`, `--pl-custom-border-radius: 0px`) — `#parcellab-track-and-trace` selectors in the same bundle; a date picker (`--rdp-*`), Swiper (`--swiper-*`) and OneTrust (`--ot-iframe-h`).
- **Naming convention**: utility-first Tailwind in markup (`uppercase`, `tracking-[0.6px]`, `leading-[120%]`, `!text-primary`, `hover:underline`, `focus-visible:outline-offset`), with `data-testid` hooks (`heading-with-text`, `media-wrap`, `row`).
- **Theming**: single light theme; over-video states invert header/logo to white.
- **Accessibility**: "Skip to content" link first; global black focus outline; video pause/mute controls; footer links to an Accessibility Statement and a "LEVEL ACCESS ACCESSIBILITY" entry; buttons 44px.
- **Delivery**: hashed Next.js assets only; no npm package, no public versioning.

## Do's and Don'ts

### Do
- Let full-bleed imagery or video carry the page; keep UI at the edges.
- Use byredoSans 400 with ~0.025em tracking; uppercase for titles, labels and buttons.
- Use black square 44px buttons and 1px black outlines for options.
- Put products on `#f5f5f5` with generous empty space.
- Float small white or glass cards (4px radius) over imagery.

### Don't
- Don't use bold or colour to create hierarchy.
- Don't add shadows, gradients or rounded buttons.
- Don't crowd the hero with headlines — the wordmark is the headline.
- Don't use the generic green `--colors-primary-*` scale in brand UI.

## Responsive Behavior

### Breakpoints
| Width | Change |
|---|---|
| < 376px | compact |
| 376–768px | PDP h1 20px/28px/0.5px |
| 769–1024px | tablet |
| ≥ 1025px | split PDP, four-up collection |
| ≥ 1441 / 1536 / 1921px | wider containers |

### Touch Targets
- ADD TO CART 44px; newsletter 40px; header 84px band.

### Collapsing Strategy
- Navigation is always behind MENU.

### Image Behavior
Hero video covers the viewport; product images keep a centred bottle on `#f5f5f5`.

### Motion
- Autoplaying hero film with explicit pause and mute buttons; slide progress indicator.
- Swiper carousels with 2px progress bars and 4px bullets (`--swiper-pagination-progressbar-size: 2px`, `--swiper-pagination-bullet-size: 4px`).

### Voice & Microcopy
- Sparse, uppercase, catalogue-like: "STAY IN THE KNOW", "THE COLLECTION", "TRY IT FIRST", "NOTES & ACCORDS", "HOW TO USE".
- Descriptions are sensorial prose: "captures the evocative sensuality of Havana's golden nights."

## Iteration Guide

1. White canvas, black byredoSans 14px/20px/0.35px.
2. 84px header with uppercase 12px MENU / CART and a centred stencil logo.
3. Full-bleed hero media; one floating glass product card (4px).
4. PDP: `#f5f5f5` gallery, white 4px buy box with 24px/32px uppercase title and black 44px ADD TO CART.
5. Footer: giant stencil logo, `#f5f5f5` newsletter field, three uppercase link columns with `#4d564f` headings, 8px legal.

### Measurement Notes
- The homepage has no rendered h1 and no detected primary CTA (it is a video page), so the gate's h1/CTA checks rely on no homepage role; the button and title values come from the product page (`byredo--product`).
- The capture's top area is video, so the visible "canvas" there is imagery; the page background behind content and footer is `#ffffff`.

### Prompting Checklist
- "Full-bleed video hero, white stencil BYREDO wordmark, tiny uppercase MENU / CART (0) corners."
- "byredoSans 400 only; 24px/32px uppercase titles with 0.6px tracking; 14px/20px body with 0.35px."
- "Collection titles 48px uppercase with 4.8px tracking."
- "Black square ADD TO CART, 44px, 12px uppercase label."
- "#f5f5f5 product backgrounds; white 4px buy box; glass #ffffff80 card over video."
- "Footer: giant black stencil logo, #f5f5f5 email field, #4d564f column headings, 8px uppercase legal."
- "No colour, no bold, no shadow."
