---
version: alpha
name: West Elm
category: "Home & Furniture"
description: "West Elm's storefront is a white (#ffffff) editorial canvas with near-black #212121 ink, Commercial Type's Sanomat serif at weight 300 for display (48px/60px hero with 0.96px tracking, 28px section titles) and Grilli Type's GT Eesti Text at weights 300 and 375 for everything else, with tracked uppercase labels. Actions are square-cornered (0px radius) #212121 rectangles with white uppercase 14px text and 1.4px tracking, a white twin on photography, and a #f4f4f4 footer."

colors:
  primary: "#212121"
  on-primary: "#ffffff"
  primary-hover: "#7e7e7e"
  canvas: "#ffffff"
  surface-footer: "#f4f4f4"
  surface-sand: "#e7e5e1"
  ink: "#212121"
  ink-secondary: "#646464"
  ink-black: "#000000"
  ink-label: "#666666"
  ink-utility: "#363636"
  link-blue: "#3c79b9"
  sale: "#af1a31"
  kids-teal: "#467e8b"
  subbrand-bronze: "#8d764b"
  hairline-input: "#c8c8c8"
  hairline-grey: "#808080"
  hairline-light: "#d9d9d9"
  input-border-black: "#010101"
  control-dark: "#2e2e2e"
  search-button: "#4d4d4d"
  scrim: "#00000066"

typography:
  display-hero:
    fontFamily: "Sanomat, Georgia, Times, serif"
    fontSize: 48px
    fontWeight: 300
    lineHeight: 60px
    letterSpacing: 0.96px
  display-hero-mobile:
    fontFamily: "Sanomat, Georgia, Times, serif"
    fontSize: 32px
    fontWeight: 300
    lineHeight: 40px
    letterSpacing: 0.64px
  display-modal:
    fontFamily: "Sanomat, Georgia, Times, serif"
    fontSize: 36px
    fontWeight: 300
    lineHeight: 45px
    letterSpacing: 0.72px
  heading-section:
    fontFamily: "Sanomat, Georgia, Times, serif"
    fontSize: 28px
    fontWeight: 300
    lineHeight: 35px
    letterSpacing: 0.56px
  heading-card:
    fontFamily: "Sanomat, Georgia, Times, serif"
    fontSize: 20px
    fontWeight: 300
    lineHeight: 26px
    letterSpacing: 0.4px
  body-lead:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 23.4px
    letterSpacing: 0.54px
  body-md:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 20.8px
    letterSpacing: 0.48px
  body:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 18.2px
    letterSpacing: 0.42px
  input-floating:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 300
    lineHeight: 19.5px
    letterSpacing: 0.48px
  body-sm:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 18px
    letterSpacing: 0.36px
  caption:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 15.6px
    letterSpacing: 0.36px
  body-mobile:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 15.6px
    letterSpacing: 0.48px
  button:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 375
    lineHeight: 16.8px
    letterSpacing: 1.4px
  button-form:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 18.2px
    letterSpacing: 1.4px
  link-cta:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 375
    lineHeight: 23.4px
    letterSpacing: 1.8px
  category-label:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 375
    lineHeight: 20.8px
    letterSpacing: 1.6px
  link-inline:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
    letterSpacing: 0.42px
  nav-category:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 10px
    fontWeight: 300
    lineHeight: 40px
    letterSpacing: 0.4px
  brand-bar:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.24px
  footer-heading:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 15.6px
    letterSpacing: 1.2px
  legal-link:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 10px
    fontWeight: 375
    lineHeight: 13px
    letterSpacing: 1px
  utility-label:
    fontFamily: "\"GT Eesti Text\", Helvetica, Arial, sans-serif"
    fontSize: 9px
    fontWeight: 375
    lineHeight: 11.7px
    letterSpacing: 0.72px

rounded:
  none: 0px
  circle: 50%

spacing:
  xxs: 4px
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 20px
  xxl: 24px
  section-sm: 40px
  section-md: 64px
  section-lg: 84px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 24px
    height: 43px
    border: "1px solid #212121"
    textTransform: uppercase
  button-primary-form:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-form}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 42px
    border: "1px solid #212121"
    textTransform: uppercase
  button-primary-form-hover:
    backgroundColor: "{colors.primary-hover}"
    border: "1px solid #7e7e7e"
  button-on-image:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 24px
    height: 43px
    border: "1px solid #ffffff"
    textTransform: uppercase
  button-text:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.button-form}"
    textTransform: uppercase
    textDecoration: underline
  link-cta:
    textColor: "{colors.ink}"
    typography: "{typography.link-cta}"
    textTransform: uppercase
  link-inline:
    textColor: "{colors.link-blue}"
    typography: "{typography.link-inline}"
    textDecoration: underline
  search-input:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 6px 35px 6px 16px
    height: 36px
    border: "1px solid #c8c8c8"
  text-input-floating:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input-floating}"
    rounded: "{rounded.none}"
    padding: 28px 16px 8px
    height: 58px
    border: "1px solid #212121"
  nav-brand-bar:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.brand-bar}"
  nav-category-bar:
    textColor: "{colors.ink}"
    typography: "{typography.nav-category}"
    padding: 0px 20px
    height: 42px
    textTransform: uppercase
  nav-sale-link:
    textColor: "{colors.sale}"
    typography: "{typography.nav-category}"
  category-tile-label:
    textColor: "{colors.ink}"
    typography: "{typography.category-label}"
    textTransform: uppercase
  chat-launcher:
    backgroundColor: "{colors.control-dark}"
    rounded: "{rounded.circle}"
    size: 56px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    typography: "{typography.body-sm}"
    padding: 0px 20px 20px
  footer-link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.caption}"
    textTransform: capitalize
---

## Overview

West Elm (part of Williams-Sonoma, Inc. — the footer reads "© All Rights Reserved, 2026 Williams-Son…") presents its homepage as a quiet print-catalog spread. The page is white (`{colors.canvas}` — `#ffffff`, the single colour that covers about a third of the captured pixels) and almost everything that is not photography is near-black `{colors.ink}` (`#212121`). There is no brand accent hue in the UI chrome: the "colour" of the brand comes from its photography — warm wood, cream upholstery, brass, candlelight, seasonal styling — which runs full-bleed in large hero panels and in a four-up "More to Explore" rail.

Typography carries the identity. Display headlines ("A Seasonal Shift", "The Christmas Shop", "More to Explore", "Delivered in 1–4 Weeks") are set in **Sanomat** at the Light weight (300), with a small positive tracking that scales with size (0.96px at 48px, 0.56px at 28px, 0.4px at 20px). Everything else — nav, body, buttons, footer, legal — is **GT Eesti Text**, mostly at weight 300 with an intermediate 375 weight reserved for button labels, category labels and arrow links.

Buttons are flat, square-cornered rectangles: `{colors.primary}` (`#212121`) fill with white uppercase 14px GT Eesti Text and 1.4px tracking, 12px 24px padding, 43px tall. On photography the same button flips to a white fill with `#212121` text. Hovering the form button lightens it to `{colors.primary-hover}` (`#7e7e7e`). There are no shadows on the storefront UI apart from a single 11px blur (measured once) and no rounded corners except the circular chat launcher.

**Key Characteristics:**
- White canvas, `#212121` ink — no saturated brand colour in the interface; red `#af1a31` appears only on the "Sale" nav item.
- Sanomat Light (300) serif for every display line; GT Eesti Text Light (300) for everything else.
- Uppercase, widely tracked labels: buttons 1.4px at 14px, category labels 1.6px at 16px, arrow links 1.8px at 18px.
- 0px radius on buttons, inputs and image tiles — the grid is rectilinear.
- Full-bleed lifestyle photography with headline + subline + button overlaid directly on the image (no card behind the text).
- A three-tier header: sibling-brand bar (west elm / office / kids / Pottery Barn / Williams Sonoma …), a search + utility row, and an uppercase 10px category bar.
- A `#f4f4f4` footer with uppercase 12px column headings and `#646464` links.

### Imagery & Art Direction
- Photography is warm, low-key and styled like an interiors magazine: wood grain, brass, ceramics, linen, candlelight and seasonal props (antlers, ornaments, a Christmas tree at the edge of a dining room).
- Images are cropped edge-to-edge with no frame, border or radius; two-up splits sit flush against each other with no gutter.
- Headline blocks are placed in the calmest part of the photograph (a pale wall or window) and right- or centre-aligned rather than boxed.
- The rail tiles are portrait crops of still lifes and styled rooms, each a self-contained vignette.

### Voice of Microcopy
- Headlines are short and seasonal: "A Seasonal Shift", "The Christmas Shop", "More to Explore", "Delivered in 1–4 Weeks".
- Sublines are a single sentence in sentence case: "Richer layers and warmer tones set the mood."
- Actions are imperative and uppercase: "SHOP NEW ARRIVALS", "SHOP NOW", "EXPLORE THE COLLABORATION", "LEARN MORE →".
- Rail labels are uppercase nouns followed by an arrow: "HALLOWEEN →", "THANKSGIVING →".
- Loyalty copy is explicit about value: "Earn 10% in rewards", "Earn 2% back on every purchase →".

## Colors

> Source: `web/data/extracted/west-elm.json` (homepage, 1280px and 390px) plus recorded `_probes` from the same page. No official West Elm colour specification was found (see SOURCES.json `_research`).

### Brand & Action
- **Primary** (`{colors.primary}` — `#212121`): Fill of every primary button ("SHOP NEW ARRIVALS", "SIGN UP NOW") and the default text colour of the site. The brand's action colour is its ink.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): Text on `#212121` buttons.
- **Primary Hover** (`{colors.primary-hover}` — `#7e7e7e`): Measured hover state of the "SIGN UP NOW" button: background and border both go from `#212121` to `#7e7e7e`; text stays white.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): Body background and the background covering the largest area of the page.
- **Footer Surface** (`{colors.surface-footer}` — `#f4f4f4`): Footer background.
- **Sand** (`{colors.surface-sand}` — `#e7e5e1`): A warm grey measured as a background by area on the homepage (fourth-largest background).
- **Scrim** (`{colors.scrim}` — `#00000066`): The 40%-black overlay behind the email-capture modal.
- **Control Dark** (`{colors.control-dark}` — `#2e2e2e`): Fill of the round 56px chat launcher.
- **Search Button** (`{colors.search-button}` — `#4d4d4d`): Fill measured on the header search submit control.

### Text
- **Ink** (`{colors.ink}` — `#212121`): The most-read text colour (headlines, body, nav, footer headings).
- **Ink Secondary** (`{colors.ink-secondary}` — `#646464`): Second most-read colour — footer links, the "Room Inspiration" sub-nav, sibling-brand links, legal copy.
- **Ink Black** (`{colors.ink-black}` — `#000000`): Pure black, used for the modal's body copy and legal text.
- **Ink Label** (`{colors.ink-label}` — `#666666`): Floating input labels ("Enter your email address*").
- **Ink Utility** (`{colors.ink-utility}` — `#363636`): "Choose Store" utility text and the modal email field text.
- **Link Blue** (`{colors.link-blue}` — `#3c79b9`): Inline legal links ("Terms & Conditions", "Privacy Policy") — the only blue on the page.
- **Sale** (`{colors.sale}` — `#af1a31`): The "Sale" item in the category bar.
- **Kids Teal** (`{colors.kids-teal}` — `#467e8b`) and **Sub-brand Bronze** (`{colors.subbrand-bronze}` — `#8d764b`): word colours inside the sibling-brand wordmarks in the top bar ("west elm **kids**" is `#467e8b`; "office" is `#646464`).

### Lines
- **Hairline Input** (`{colors.hairline-input}` — `#c8c8c8`): 1px border of the header search field.
- **Hairline Grey** (`{colors.hairline-grey}` — `#808080`) and **Hairline Light** (`{colors.hairline-light}` — `#d9d9d9`): measured border colours on the page.
- **Input Border Black** (`{colors.input-border-black}` — `#010101`): 1px border on the footer email field (the companion phone field uses `#212121`).

### Semantic
No success / warning / error colours were observed on the measured page and no official palette was found, so none are declared. Do not invent them.

### Contrast Notes (computed from the measured hexes)
| Foreground | Background | Ratio |
|---|---|---|
| `#212121` ink | `#ffffff` canvas | 16.10:1 |
| `#646464` secondary | `#ffffff` canvas | 5.92:1 |
| `#646464` secondary | `#f4f4f4` footer | 5.38:1 |
| `#666666` label | `#ffffff` | 5.74:1 |
| `#3c79b9` link | `#ffffff` | 4.54:1 |
| `#af1a31` sale | `#ffffff` | 6.97:1 |
| `#ffffff` text | `#7e7e7e` hover fill | 4.06:1 — below 4.5:1 for 14px text |

## Typography

### Font Families
- **Sanomat** — served as `Sanomat, Georgia, Times, serif`, loaded at weight 300 only (`loadedFonts`: "Sanomat 300 normal"). Sanomat is a Commercial Type family by Paul Barnes, drawn in 2013 for the Helsingin Sanomat newspaper redesign; it is sold commercially in Light through Black weights ([commercialtype.com/catalog/sanomat](https://commercialtype.com/catalog/sanomat)).
- **GT Eesti Text** — served as `"GT Eesti Text", Helvetica, Arial, sans-serif`, loaded at 300, 375, 400 and 500. GT Eesti is by Reto Moser, published by Grilli Type in 2016, available in Text and Display subfamilies ([grillitype.com/typeface/gt-eesti](https://www.grillitype.com/typeface/gt-eesti)). The 375 weight suggests a variable or custom instance — it is what the browser reports; use it as measured.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display-hero}` | Sanomat | 48px | 300 | 60px | 0.96px | Hero h1 ("A Seasonal Shift") |
| `{typography.display-hero-mobile}` | Sanomat | 32px | 300 | 40px | 0.64px | Hero h1 at 390px |
| `{typography.display-modal}` | Sanomat | 36px | 300 | 45px | 0.72px | Email modal headline |
| `{typography.heading-section}` | Sanomat | 28px | 300 | 35px | 0.56px | "More to Explore", "Delivered in 1–4 Weeks" |
| `{typography.heading-card}` | Sanomat | 20px | 300 | 26px | 0.4px | "Key Rewards" card titles |
| `{typography.body-lead}` | GT Eesti Text | 18px | 300 | 23.4px | 0.54px | Hero sublines, modal intro |
| `{typography.body-md}` | GT Eesti Text | 16px | 300 | 20.8px | 0.48px | Promo body |
| `{typography.body}` | GT Eesti Text | 14px | 300 | 18.2px | 0.42px | Default paragraph |
| `{typography.input-floating}` | GT Eesti Text | 15px | 300 | 19.5px | 0.48px | Footer floating-label inputs |
| `{typography.body-sm}` | GT Eesti Text | 12px | 300 | 18px | 0.36px | Footer base |
| `{typography.caption}` | GT Eesti Text | 12px | 300 | 15.6px | 0.36px | Footer links, legal |
| `{typography.body-mobile}` | GT Eesti Text | 12px | 300 | 15.6px | 0.48px | Body at 390px |
| `{typography.button}` | GT Eesti Text | 14px | 375 | 16.8px | 1.4px | Button labels, uppercase |
| `{typography.button-form}` | GT Eesti Text | 14px | 300 | 18.2px | 1.4px | Form button labels, uppercase |
| `{typography.link-cta}` | GT Eesti Text | 18px | 375 | 23.4px | 1.8px | "LEARN MORE →" |
| `{typography.category-label}` | GT Eesti Text | 16px | 375 | 20.8px | 1.6px | "SOFAS & SECTIONALS" tile labels |
| `{typography.link-inline}` | GT Eesti Text | 14px | 400 | 18.2px | 0.42px | Blue legal links |
| `{typography.nav-category}` | GT Eesti Text | 10px | 300 | 40px | 0.4px | Category bar, uppercase |
| `{typography.brand-bar}` | GT Eesti Text | 12px | 400 | 20px | 0.24px | Sibling-brand wordmarks |
| `{typography.footer-heading}` | GT Eesti Text | 12px | 300 | 15.6px | 1.2px | Footer column headings, uppercase |
| `{typography.legal-link}` | GT Eesti Text | 10px | 375 | 13px | 1px | Bottom legal links, uppercase |
| `{typography.utility-label}` | GT Eesti Text | 9px | 375 | 11.7px | 0.72px | "ACCOUNT", "TRACK ORDER" icon labels |

### Principles
- **Light is the default weight.** 300 accounts for most rendered characters; 375 is the "emphasis" weight; 400 appears only in the sibling-brand bar and blue links; 700 is effectively absent.
- **Positive tracking everywhere.** Even 48px display copy is tracked +0.96px (0.02em). Uppercase labels are tracked 0.1em (1.4px at 14px, 1.6px at 16px, 1.8px at 18px).
- **Uppercase is for actions and labels, never for headlines.** Sanomat headlines are always sentence/title case.
- **Line height ≈ 1.25–1.3 for display, 1.3 for body** (60/48, 35/28, 23.4/18, 18.2/14).

### Note on Font Substitutes
Both families are commercial (Sanomat from Commercial Type, GT Eesti from Grilli Type) and the site's own fallbacks are `Georgia, Times, serif` and `Helvetica, Arial, sans-serif`. Those stated fallbacks are the only substitutes the site itself declares; if you need a licensed face, buy the originals rather than approximating — no substitute is endorsed by West Elm.

## Layout

### Spacing
- Measured gaps: 24px (dominant) and 4px. Measured paddings: 16px (most frequent), 20px, 6px, 12px, 24px, 8px, 84px, 64px, 40px, 28px, 18px.
- Tokens: `{spacing.xxs}` 4px · `{spacing.xs}` 6px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.xl}` 20px · `{spacing.xxl}` 24px · `{spacing.section-sm}` 40px · `{spacing.section-md}` 64px · `{spacing.section-lg}` 84px.
- Header rows and the category nav are padded `0px 20px`; the footer `0px 20px 20px`.

### Grid & Container
- The measured viewport is 1280px; the h1 spans 1216px (32px side margins).
- The hero zone directly under the nav is a two-up split of photographs, each with a white `button-on-image` centred near its bottom edge ("SHOP THE COLLECTION", "EXPLORE THE COLLABORATION").
- Feature heroes are full-bleed photographs with the headline block right-aligned over the image ("A Seasonal Shift" + subline + `button-primary`).
- "More to Explore" is a four-up rail of portrait image tiles with an uppercase label + arrow under each and a square white arrow button at the right edge.

### Whitespace Philosophy
Sections are separated by plain white bands rather than rules or colour blocks. Text never sits in boxes; it sits on the photograph or on white.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Everything on the storefront |
| 1 | `rgba(0, 0, 0, 0.16) 0px 0px 11px 0px` | The one box-shadow measured on the homepage |
| Overlay | `{colors.scrim}` `#00000066` | Behind the email-capture modal |

Depth comes from photography (shadowed interiors, candlelight) rather than UI chrome.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Buttons, inputs, image tiles, modal |
| `{rounded.circle}` | 50% | The 56px chat launcher |

The stylesheets contain many other radii (4px, 8px, 2px, 12px …), but the only radii rendered on the measured homepage are 0 and 50%. No clip-paths, skews or notches were observed.

## Components

### Buttons

**`button-primary`** — "SHOP NEW ARRIVALS", "SHOP NOW".
- `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}` uppercase, padding 12px 24px, 43px tall, 1px solid `#212121` border, 0px radius.

**`button-primary-form`** — "SIGN UP NOW" in the modal and footer.
- Same colours with `{typography.button-form}` (weight 300, 18.2px line height), padding 8px 16px (8px in the footer), 42px tall.
- **Hover** (`button-primary-form-hover`): background and border become `{colors.primary-hover}` `#7e7e7e`. This is the only hover state measured; the anchor version was not measured on hover.

**`button-on-image`** — "SHOP NOW" on dark photography.
- `{colors.canvas}` fill, `{colors.ink}` text, `{typography.button}`, padding 12px 24px, 43px, 1px solid `#ffffff` border.

**`button-text`** — "NO THANKS" in the modal: transparent, `{colors.ink}`, uppercase `{typography.button-form}`, underlined in the capture.

### Links
- **`link-cta`** — "LEARN MORE →": uppercase 18px/375 with 1.8px tracking, followed by an arrow glyph in the same style.
- **`link-inline`** — legal links in `{colors.link-blue}` `#3c79b9`, 14px/400, underlined.

### Inputs
- **`search-input`** — header search: transparent, 1px solid `#c8c8c8`, 0px radius, padding 6px 35px 6px 16px, 36px tall, `{typography.body}`, placeholder "Search".
- **`text-input-floating`** — footer email / phone: white, 1px solid border (`#010101` / `#212121`), padding 28px 16px 8px, 58px tall, `{typography.input-floating}`; the label ("Enter your email address*") sits inside at 15px in `{colors.ink-label}` `#666666` with 18px 16px padding.
- The email modal uses 56px-tall fields with a 1px `#212121` border and 0px 16px padding; their text is rendered in Arial 14px/400 `#363636`, as measured.

### Navigation
- **Brand bar** (`nav-brand-bar`): a row of sibling-brand wordmarks at the very top — "west elm", "west elm office", "west elm kids", "b2b", then 10px/300 `#646464` links to Pottery Barn, PB Kids, PB Teen, Williams Sonoma, etc. "Earn 10% in rewards" sits right-aligned.
- **Utility row**: logo wordmark centred, search field left, icon + 9px uppercase label (TRACK ORDER, MY STORE, FAVORITES, CART) right.
- **Category bar** (`nav-category-bar`): 10px/300 uppercase links with 40px line height, 0.4px tracking — NEW, FURNITURE, OUTDOOR, OFFICE … BABY & KIDS — with "SALE" in `{colors.sale}`.

### Cards & Tiles
- **Category tiles**: square/portrait photographs with no border, no radius, no shadow, and an uppercase label under the image (`{typography.category-label}` for the "Sofas & Sectionals" grid; 12px uppercase with "→" in the "More to Explore" rail).
- **Key Rewards cards**: Sanomat 20px title over a 14px GT Eesti line ending in "→".

### Modal
The email-capture modal is a white, square-cornered panel over `{colors.scrim}` with a centred "west elm" wordmark, a `{typography.display-modal}` headline, an 18px lead, two stacked inputs, `button-primary-form`, `button-text` and 12px legal copy. A thin square close button sits top-right.

### Footer
`{colors.surface-footer}` `#f4f4f4`, padding 0px 20px 20px. Columns with `{typography.footer-heading}` uppercase headings ("CUSTOMER SERVICE") and `{colors.ink-secondary}` capitalised 12px links; a sign-up column with floating-label inputs and `button-primary-form`; a legal row with `{typography.legal-link}` uppercase links and "© All Rights Reserved, 2026 Williams-Sonoma…".

### Composition Recipes
- **Feature hero**: full-bleed photograph · right-aligned `{typography.display-hero}` headline · `{typography.body-lead}` subline · `button-primary` beneath, all in `{colors.ink}` over a pale area of the image.
- **Dark-image hero**: the same stack in white, with `button-on-image`.
- **Explore rail**: `{typography.heading-section}` title, four portrait tiles, uppercase label + arrow under each, square white arrow button floating at the right edge.
- **Rewards strip**: repeated `{typography.heading-card}` titles over one-line `{typography.body}` offers ending in "→".
- **Sign-up block**: `{typography.body}` prompt, two `text-input-floating` fields, `button-primary-form`, 12px legal copy with blue inline links.

## Design System Architecture

There is **no public West Elm design system**, token package or brand portal. Searches for "west elm design system OR brand guidelines OR press kit logo", "West Elm brand identity typeface Sanomat GT Eesti", and "Williams-Sonoma Inc engineering design system component library github west elm" returned only third-party style aggregators (ignored per brief), store listings and job posts. The parent company's brand page URL tried (`williams-sonomainc.com/our-brands/`) returned 404. So this section describes only what is measurable on the site — its de-facto system.

- **Token architecture**: none is exposed. The page's `:root` carries only four custom properties, all for a support widget: `--eswIconFontSize: 16px`, `--eswButtonRight: 30px`, `--eswIconFillColor: #FFF`, `--eswButtonBottom: 25px`. The stylesheet corpus also contains `--slds-g-shadow-outset-focus-1`, `--slds-g-color-brand-base-20` and similar `--slds-*` names, but none of those colours (e.g. `#0176d3`) render on the measured brand UI. Brand values (`#212121`, `#646464`, 0px corners) are hard-coded per component.
- **Theming**: no dark mode, high-contrast mode or density switch was observed.
- **Type & spacing**: two families with a tracking rule of roughly +0.02em on text and +0.1em on uppercase labels; spacing values cluster on 4 / 8 / 12 / 16 / 20 / 24px with section paddings of 40, 64 and 84px.
- **Component model**: a small set of recurring patterns — filled square button, white-on-image button, uppercase arrow link, floating-label input, image tile with uppercase label, Sanomat headline + GT Eesti subline overlay.
- **Accessibility**: the page has "Skip to Content" as its first link. No published accessibility standard for the brand was found. Computed from measured hexes, the `#646464` footer links on `#f4f4f4` reach 5.38:1; the white label on the `#7e7e7e` hover fill only 4.06:1.
- **Delivery**: no npm package, Figma kit or public repo found. The typefaces are licensed from Commercial Type ([Sanomat](https://commercialtype.com/catalog/sanomat)) and Grilli Type ([GT Eesti](https://www.grillitype.com/typeface/gt-eesti)).

## Do's and Don'ts

### Do
- Use `#212121` for text and for the primary button fill; keep `#000000` for small legal copy only.
- Set every headline in Sanomat weight 300 with the measured positive tracking.
- Set buttons uppercase, 14px, tracked 1.4px, on 0px-radius rectangles.
- Put headline, subline and button directly on photography; switch to `button-on-image` (white) on dark images.
- Keep the page white and let photography supply colour.
- Use the 10px uppercase category bar and the multi-brand top bar for navigation.

### Don't
- Don't round buttons, inputs or images — the only round element is the chat launcher.
- Don't bold the serif. Sanomat is loaded at 300 only.
- Don't introduce an accent colour for CTAs; red `#af1a31` is reserved for "Sale".
- Don't add drop shadows to cards; the storefront is flat.
- Don't use negative tracking — every measured letter-spacing is positive.
- Don't use the blue `#3c79b9` for anything other than inline legal links.

## Responsive Behavior

Measured at 390px:
- The hero h1 drops from 48px/60px to `{typography.display-hero-mobile}` 32px/40px with 0.64px tracking.
- Body copy in the modal drops to 12px/15.6px with 0.48px tracking (`{typography.body-mobile}`).
- The form button stays 14px/300 uppercase, 42px tall, with 8px padding, at full column width (350px).
- The header shrinks from 177px to 95px tall.
- Most-used mobile sizes: 14px, 12px, 18px, 10px, 32px, 24px, 16px.

Breakpoint values were not measured; do not assume specific ones.

## Iteration Guide

1. Start with `{colors.canvas}` white and `{colors.ink}` `#212121`; add `#646464` for secondary text.
2. Set headlines with `{typography.display-hero}` / `{typography.heading-section}` (Sanomat 300) and body with `{typography.body}` (GT Eesti Text 300, 14px/18.2px, 0.42px).
3. Build CTAs as `button-primary` (12px 24px, 43px, 0px radius, uppercase 1.4px tracking); on images use `button-on-image`.
4. For forms use `button-primary-form` and its `#7e7e7e` hover; inputs are square with 1px dark borders.
5. Lay pages out as full-bleed photographs with overlaid text, separated by white bands, and four-up image rails with uppercase labels.
6. Close with a `#f4f4f4` footer, uppercase 12px headings tracked 1.2px, `#646464` links.
7. Verify every new value against `web/data/extracted/west-elm.json` or a recorded probe before adding it.
