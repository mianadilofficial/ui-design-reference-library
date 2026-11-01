---
version: alpha
name: Nothing
category: "Consumer Electronics"
description: "Nothing's US Shopify store (assets on Shopify's Oxygen CDN) is a greyscale, type-led system on a #f4f4f4 canvas with #040404 ink: NType82-Regular headlines at 48px/32px weight 400 (and a 100-weight 'title' cut), the Ndot-Regular dot-matrix face for category and logo labels, LatteraMonoLL 11px uppercase for every nav label and callout, Geist Variable for long-form copy, black 4px-radius buttons (12px 16px, 40px tall), 8px-radius product tiles, and a single #ffc700 yellow accent."

colors:
  primary: "#040404"
  on-primary: "#ffffff"
  canvas: "#f4f4f4"
  canvas-dark: "#181818"
  canvas-black: "#000000"
  ink: "#040404"
  ink-pure: "#000000"
  ink-inverse: "#ffffff"
  ink-muted: "#595a5a"
  ink-subtle: "#9b9d9d"
  grey-200: "#d8d9d9"
  grey-default: "#b1b3b3"
  grey-700: "#858787"
  grey-1000: "#3c3c3c"
  accent-yellow: "#ffc700"
  accent-red: "#c8102e"
  accent-blue: "#002f6c"
  glass-light: "#ffffffcc"
  glass-field: "#3c3c3c99"
  tile-tint: "#595a5a0d"
  tile-tint-dark: "#f4f4f41a"
  footer-tile: "#ffffff0d"
  scrim: "#d8d9d980"
  account-surface: "#eeeeee"
  account-border: "#c8c8c8"
  account-hover: "#1c1c1c"
  account-muted: "#929292"
  account-link: "#323232"
  account-submit-text: "#f2f2f2"

typography:
  display-xl:
    fontFamily: "NType82-Regular, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
  heading-xl:
    fontFamily: "NType82-Regular, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
  heading-xl-mobile:
    fontFamily: "NType82-Regular, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 26.4px
  title-thin:
    fontFamily: "NType82-Regular, sans-serif"
    fontSize: 32px
    fontWeight: 100
    lineHeight: 35.2px
  headline-thin:
    fontFamily: "NType82-Regular, sans-serif"
    fontSize: 24px
    fontWeight: 100
    lineHeight: 26.4px
  category:
    fontFamily: "Ndot-Regular, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
  logo:
    fontFamily: "Ndot-Regular, sans-serif"
    fontSize: 20px
    fontWeight: 55
    lineHeight: 21.6px
  body:
    fontFamily: "NType82-Regular, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  body-geist:
    fontFamily: "\"Geist Variable\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  body-geist-sm:
    fontFamily: "\"Geist Variable\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  cta-label:
    fontFamily: "LatteraMonoLL, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  callout:
    fontFamily: "LatteraMonoLL, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 12.1px
  mono-field:
    fontFamily: "\"Geist Mono Variable\", monospace"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15px
  account-heading:
    fontFamily: "NType82, \"space mono\""
    fontSize: 32px
    fontWeight: 100
    lineHeight: 32px
  account-body:
    fontFamily: "Inter-Regular, \"Inter Variable\", \"space grotesk\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  account-fine:
    fontFamily: "Inter-Regular, \"Inter Variable\", \"space grotesk\""
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16px

rounded:
  none: 0px
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  account-field: 11px
  pill: 9999px

spacing:
  hair: 2px
  xxs: 4px
  xs: 8px
  sm: 10px
  md: 12px
  base: 16px
  lg: 20px
  xl: 24px
  xxl: 32px
  section-sm: 40px
  section: 80px
  section-lg: 96px
  footer-top: 112px
  hero: 144px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 12px 16px
    height: 40px
  button-accent:
    backgroundColor: "{colors.accent-yellow}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 12px 16px
    height: 40px
  button-on-dark:
    backgroundColor: "{colors.ink-inverse}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 12px 16px
    height: 40px
  button-on-dark-compact:
    backgroundColor: "{colors.ink-inverse}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
    height: 32px
  button-modal:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.cta-label}"
    rounded: "{rounded.lg}"
    padding: 20px 40px
    height: 60px
  text-button:
    backgroundColor: "transparent"
    textColor: "{colors.ink-muted}"
    typography: "{typography.callout}"
    rounded: "{rounded.none}"
  text-button-hover:
    opacity: 0.5
  chip-link:
    backgroundColor: "{colors.tile-tint}"
    textColor: "{colors.ink-pure}"
    typography: "{typography.callout}"
    rounded: "{rounded.lg}"
    padding: 4px 8px
    height: 20px
  nav:
    backgroundColor: "transparent"
    textColor: "{colors.ink-pure}"
    typography: "{typography.body}"
    padding: 8px
    height: 80px
  nav-link:
    textColor: "{colors.ink-pure}"
    typography: "{typography.callout}"
    padding: 8px 16px
  text-input:
    backgroundColor: "{colors.glass-field}"
    textColor: "{colors.ink-inverse}"
    typography: "{typography.mono-field}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 48px
  card-category-tile:
    backgroundColor: "{colors.tile-tint}"
    rounded: "{rounded.lg}"
    padding: 0px
  card-dark-tile:
    backgroundColor: "{colors.tile-tint-dark}"
    rounded: "{rounded.lg}"
    padding: 0px
  card-glass:
    backgroundColor: "{colors.glass-light}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 16px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-inverse}"
    typography: "{typography.body}"
    padding: 112px 32px 32px
  footer-accordion:
    backgroundColor: "{colors.footer-tile}"
    textColor: "{colors.ink-inverse}"
    typography: "{typography.callout}"
    rounded: "{rounded.md}"
    padding: 16px
    height: 48px
  account-input:
    backgroundColor: "transparent"
    textColor: "{colors.ink-pure}"
    typography: "{typography.account-body}"
    rounded: "{rounded.account-field}"
    border: "1px solid {colors.account-border}"
    padding: 8px 13px
    height: 41px
  account-button-secondary:
    backgroundColor: "{colors.account-surface}"
    textColor: "{colors.ink-pure}"
    typography: "{typography.account-body}"
    rounded: "{rounded.pill}"
    height: 41px
  account-button-secondary-hover:
    backgroundColor: "{colors.account-hover}"
    textColor: "{colors.ink-inverse}"
  account-submit-idle:
    backgroundColor: "{colors.account-border}"
    textColor: "{colors.account-submit-text}"
    typography: "{typography.account-body}"
    rounded: "{rounded.pill}"
    padding: 8px 10.4px
    height: 41px
---

## Overview

Nothing's US store (`us.nothing.tech`, whose assets are served from Shopify's Oxygen CDN, `cdn.shopify.com/oxygen-v2/`) is a
greyscale, typography-first retail site. Almost every surface is one of three neutrals: a cool off-white
canvas `{colors.canvas}` (`#f4f4f4`), a near-black `{colors.primary}` (`#040404`) used for buttons,
footer and full-bleed product bands, and pure white for text on dark. Colour appears only in product
photography (yellow earbud stems, a red-orange CMF watch strap, pink phone backs) and in one accent:
`{colors.accent-yellow}` (`#ffc700`), which fills the mobile newsletter "SIGN UP" button and the
"EXPLORE ALL AUDIO" button on product pages.

What makes the system recognisable is its type stack. Three faces carry brand voice:
- **NType82-Regular** — a serif-flavoured grotesk used for headlines ("Your package has arrived",
  "Shop by category", "Studio-level precision for our most advanced headphone ever.") and default UI text.
- **Ndot-Regular / Ndot-Bold** — a dot-matrix face, used for the "STORE LOCATOR" logo label, collection
  titles like "PHONES", and product eyebrows such as "HEADPHONE (1) PRO".
- **LatteraMonoLL** — an uppercase monospace for nav links, callouts, the "GO TO: THAILAND" modal
  button and footer accordion headers.

Long-form copy (product body, sale blurbs) switches to **Geist Variable**, and form fields use
**Geist Mono Variable**.

The capture of the homepage opens with a full-screen geo-redirect interstitial: a blurred photographic
backdrop, a translucent `{colors.glass-light}` card with a dot-matrix pin icon, mono callouts ("LOOKS
LIKE YOU'RE IN:"), NType82 country names, and a 60px-tall black `button-modal`. Below it the page
settles into `#f4f4f4` editorial bands — a "FALL SALE" two-column block, a four-up "Shop by category"
tile row — and then a full-bleed black product band (Headphone (1) Pro) with centred white headline and
a small white "DISCOVER" button.

**Key Characteristics:**
- Greyscale first: `#f4f4f4` canvas, `#040404` ink and fills, `#595a5a` secondary text, `#ffffff` on dark.
- One chromatic accent in UI chrome: `#ffc700` yellow (CSS variable `--accent-yellow: 255 199 0`).
- Three-voice typography: NType82 headlines, Ndot dot-matrix labels, LatteraMonoLL uppercase mono callouts.
- Small radii: 4px on buttons and fields, 8px on tiles, cards and the modal button, 6px on footer accordions.
- No decorative shadows on the measured surfaces; depth comes from translucent glass and full-bleed photo.
- Headlines at weight 400 for display and weight 100 for "title" cuts; no bold headlines.
- Product photography on near-white tiles (`#595a5a0d`, a 5% grey tint) — objects floating, no props.

## Colors

> **Source pages:** home (`/`), `/products/headphone-1-pro`, `/collections/phones`, `account.nothing.tech` login.
> Token names in this section mirror the site's own CSS variables (`--greyscale-*`, `--accent-*`) where they exist.

### Brand & Accent
- **Nothing Black** (`{colors.primary}` — `#040404`): CSS `--greyscale-black: 4 4 4`. Primary button fill,
  footer background, the geo-modal button. It is the action colour of the system.
- **Accent Yellow** (`{colors.accent-yellow}` — `#ffc700`): `--accent-yellow: 255 199 0`. Filled CTA on
  mobile ("SIGN UP") and product pages ("EXPLORE ALL AUDIO"); also the `:focus-visible` border colour.
- **Accent Red** (`{colors.accent-red}` — `#c8102e`): `--accent-red: 200 16 46` in the shipped CSS
  (`.text-accent-red`, `.border-accent-red`). Not visible in the captured viewport.
- **Accent Blue** (`{colors.accent-blue}` — `#002f6c`): `--accent-blue: 0 47 108`. Declared, not seen in the capture.

### Surface
- **Canvas** (`{colors.canvas}` — `#f4f4f4`): `--greyscale-100`. Body background of home and collections.
- **Canvas Dark** (`{colors.canvas-dark}` — `#181818`): `--greyscale-dm-light: 24 24 24`. Body background of
  the Headphone (1) Pro product page (dark mode page).
- **Canvas Black** (`{colors.canvas-black}` — `#000000`): full-bleed product sections on the product page.
- **Glass Light** (`{colors.glass-light}` — `#ffffffcc`): the geo-modal card and the sale card on collections.
- **Tile Tint** (`{colors.tile-tint}` — `#595a5a0d`): category tiles and the mono chip-link background.
- **Tile Tint Dark** (`{colors.tile-tint-dark}` — `#f4f4f41a`): media tiles on the dark product page.
- **Footer Tile** (`{colors.footer-tile}` — `#ffffff0d`): footer accordion rows on black.
- **Scrim** (`{colors.scrim}` — `#d8d9d980`): measured semi-transparent grey layer on the homepage.

### Text
- **Ink** (`{colors.ink}` — `#040404`): headline and button text on the light canvas.
- **Ink Pure** (`{colors.ink-pure}` — `#000000`): header, nav links and body default colour.
- **Ink Muted** (`{colors.ink-muted}` — `#595a5a`): `--greyscale-900`. Sale blurb paragraph and "STAY ON" text button.
- **Ink Subtle** (`{colors.ink-subtle}` — `#9b9d9d`): `--greyscale-600`. The most-read colour on the product page (footnotes, spec copy on `#181818`).
- **Ink Inverse** (`{colors.ink-inverse}` — `#ffffff`): text on black bands and footer. On the homepage it
  edges out `#040404` in measured character count (408 vs 404) because the footer is long; on the
  light canvas the reading colour is `#040404`.

### Greyscale ramp (shipped CSS variables)
| Token | CSS var | Hex |
|---|---|---|
| `{colors.canvas}` | `--greyscale-100` | `#f4f4f4` |
| `{colors.grey-200}` | `--greyscale-200` | `#d8d9d9` |
| `{colors.grey-default}` | `--greyscale-default` | `#b1b3b3` |
| `{colors.ink-subtle}` | `--greyscale-600` | `#9b9d9d` |
| `{colors.grey-700}` | `--greyscale-700` | `#858787` |
| `{colors.ink-muted}` | `--greyscale-900` | `#595a5a` |
| `{colors.grey-1000}` | `--greyscale-1000` | `#3c3c3c` |
| `{colors.canvas-dark}` | `--greyscale-dm-light` | `#181818` |
| `{colors.primary}` | `--greyscale-black` / `--greyscale-dm-dark` | `#040404` |

`--greyscale-300` (`203 204 204`), `--greyscale-400` (`190 192 192`) and `--greyscale-800` (`111 112 112`)
also exist in the CSS; they are not declared as tokens here because no measured element used them.

### Account sub-site
`account.nothing.tech` (the sign-in flow linked from the store) uses its own palette: `{colors.account-surface}`
`#eeeeee` secondary pill, `{colors.account-border}` `#c8c8c8` field border, hover fill `{colors.account-hover}`
`#1c1c1c`, muted legal text `{colors.account-muted}` `#929292`, link `{colors.account-link}` `#323232`.

## Typography

### Font Family
- **NType82-Regular** — served by the store; `@font-face` also declares `NType82-Headline` (not observed rendering).
- **Ndot-Regular** (face weight 55) and **Ndot-Bold** (face weight 57) — dot-matrix display.
- **LatteraMonoLL** — uppercase monospace for labels and buttons.
- **Geist Variable** and **Geist Mono Variable** (weight axis 100–900) — copy and fields.
- Account sub-site: `NType82, "space mono"` for the heading and `Inter-Regular, "Inter Variable", "space grotesk"` for UI.

### Hierarchy

| Token | Family | Size | Weight | Line height | Where measured |
|---|---|---|---|---|---|
| `{typography.display-xl}` | NType82-Regular | 48px | 400 | 48px | product h1 "Hear more details with three drivers" |
| `{typography.heading-xl}` | NType82-Regular | 32px | 400 | 32px | home h2 "Your package has arrived" |
| `{typography.heading-xl-mobile}` | NType82-Regular | 24px | 400 | 26.4px | home h2 at 390px |
| `{typography.title-thin}` | NType82-Regular | 32px | 100 | 35.2px | collections h2 "Fall Sale" |
| `{typography.headline-thin}` | NType82-Regular | 24px | 100 | 26.4px | `.type-headline` (1.5rem/100/1.65rem) |
| `{typography.category}` | Ndot-Regular | 40px | 400 | 40px | collections h1 "PHONES" (uppercase) |
| `{typography.logo}` | Ndot-Regular | 20px | 55 | 21.6px | "STORE LOCATOR" h3 (uppercase) |
| `{typography.body}` | NType82-Regular | 16px | 400 | 22.4px | body default, buttons |
| `{typography.body-geist}` | Geist Variable | 16px | 400 | 20.8px | home sale paragraph |
| `{typography.body-geist-sm}` | Geist Variable | 14px | 400 | 19.6px | product page copy |
| `{typography.cta-label}` | LatteraMonoLL | 14px | 400 | 20px | geo-modal button (uppercase) |
| `{typography.callout}` | LatteraMonoLL | 11px | 400 | 12.1px | nav links, footer rows (uppercase) |
| `{typography.mono-field}` | Geist Mono Variable | 12px | 400 | 15px | newsletter input (uppercase) |
| `{typography.account-heading}` | NType82 | 32px | 100 | 32px | account "Sign in" |
| `{typography.account-body}` | Inter-Regular | 14px | 400 | 20px | account input |
| `{typography.account-fine}` | Inter-Regular | 11px | 400 | 16px | account legal line |

The mobile product h1 renders at 32px / 400 / 32px — use `{typography.heading-xl}` at 390px.

### The store's own type classes
The shipped stylesheet names its scale explicitly; these are the brand's real token names:
- NType scale: `.text-ntype-display-xxl` 3.75rem/400/1, `.text-ntype-display-xl` 3rem/400/1, `.text-ntype-display-lg`
  2.5rem/400/1, `.text-ntype-heading-xl` 2rem/400/1, `.text-ntype-heading-lg` 1.5rem/400/1.1, `.text-ntype-heading-md`
  1.25rem/400/1.2, `.text-ntype-subheading-lg|md|sm` 1.125/1/.875rem at 400/1.4.
- Ndot scale: `.text-ndot-display-xxxl` 3.75rem/55, `.text-ndot-display-xxl` 2.5rem/55, `.text-ndot-display-xl`
  1.875rem/57, `.text-ndot-heading-lg|md|sm|xs` 1.25/1.125/1/.875rem at 57, all line-height 1.
- Mono scale: `.text-mono-lg|md|sm|xs` 1/.875/.75/.6875rem at 400/1.25.
- Semantic composites: `.type-title` (NType82 2rem/100/2.2rem), `.type-headline` (NType82 1.5rem/100/1.65rem),
  `.type-body` (NType82 1rem/400/1.4rem), `.type-callout` (LatteraMonoLL .6875rem uppercase), `.type-category`
  (Ndot 2.5rem uppercase), `.type-logo` (Ndot 1.25rem/55 uppercase), `.type-product-name` (Ndot 1.25rem/55 lowercase),
  `.type-text-field` (LatteraMonoLL 1rem, letter-spacing -.04em). Each has a `-cs` variant without the case transform.

### Principles
- Display headlines never go bold: 400 for display, 100 for "title"/"headline" cuts.
- Line heights are tight (1.0–1.1) on display, 1.4 on NType body (22.4px at 16px), 1.3 on Geist body.
- Uppercase belongs to the mono and dot faces; NType82 headlines stay sentence case.
- Letter-spacing is `normal` on every role measured; the only tracked text is 12px at -0.48px and 14px at -0.56px (both -0.04em, the `.type-text-field` value).

### Note on Font Substitutes
NType82 and Ndot are Nothing's own typefaces; our searches found no public web licence for them. LatteraMonoLL
is served under Lineto's "LL" naming; [Lettera](https://typewolf.com/lettera) is a commercial Lineto monospace by
Kobi Benezri (2008). Geist and Geist Mono are open-source (OFL) from Vercel and are free to
use. When the proprietary faces are unavailable:
- keep Geist for body copy exactly as the site does;
- for LatteraMonoLL use Geist Mono Variable (already loaded by the site) at the same 11px uppercase;
- for NType82 and Ndot no metric-compatible free substitute is documented by Nothing — keep the fallback the
  site itself declares (`sans-serif`) rather than inventing a pairing, and do not fake dot-matrix with effects.

## Layout

### Spacing System
- **Base unit:** 8px with a 2px/4px micro step. Most frequent measured gaps: 8px, 16px, 10px, 40px, 28px;
  paddings: 8px, 16px, 32px, 12px.
- **Tokens:** `{spacing.hair}` 2px · `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 10px ·
  `{spacing.md}` 12px · `{spacing.base}` 16px · `{spacing.lg}` 20px · `{spacing.xl}` 24px · `{spacing.xxl}` 32px ·
  `{spacing.section-sm}` 40px · `{spacing.section}` 80px · `{spacing.section-lg}` 96px · `{spacing.footer-top}` 112px ·
  `{spacing.hero}` 144px.
- **Header:** 80px tall, 8px padding; CSS variable `--header-height: 64px`.
- **Footer:** `112px 32px 32px` padding.

### Grid & Container
- Desktop content inset is roughly 85px each side at 1280px in the capture (category row spans ~1110px).
- The "FALL SALE" block is a two-column split: eyebrow left, headline + Geist paragraph + button right.
- "Shop by category" is a four-up row of square 257px tiles separated by 8px gaps, each with a mono
  underlined label and chevron below.
- Product pages use 522px media tiles in a two-column composition (CSS `--grid-item-width: 355px` and
  `--cell-size` variables also drive product grids).

### Whitespace Philosophy
Sections breathe with large empty bands (80–144px) on the flat `#f4f4f4` canvas. Content density is
low: one headline, one paragraph, one small button per band. The full-bleed black product band is the
only place imagery takes over the viewport.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat `#f4f4f4` | Page canvas, editorial bands |
| 1 | `#595a5a0d` tint | Category tiles |
| 2 | `#ffffffcc` glass | Geo modal, sale card on collections |
| 3 | `#3c3c3c99` glass | Newsletter field on black |
| Ring | `rgba(255,255,255,0.2) 0 0 0 1px` | Selector chips on dark product page |

Measured box-shadows on the homepage are empty. The CSS corpus contains a soft `0 20px 50px rgba(0, 0, 0, 0.1)`
and `0 -3px 10px -2px rgba(0,0,0,.1)` but no measured element on the captured pages used them, so they are not tokens.
Depth is created by translucency over photography (the blurred backdrop behind the geo modal) and by
the black product band, not by drop shadows.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | header, footer, text buttons |
| `{rounded.xs}` | 2px | small elements on product page (`.rounded-sm`) |
| `{rounded.sm}` | 4px | primary/accent/on-dark buttons, newsletter input |
| `{rounded.md}` | 6px | footer accordion rows |
| `{rounded.lg}` | 8px | tiles, cards, geo-modal button, chip-link |
| `{rounded.account-field}` | 11px | account sign-in input |
| `{rounded.pill}` | 9999px | swatches on product page; account buttons render 800px |

### Other shapes
- The geo-modal card uses `clip-path: inset(0px)` (a plain clip, no notch).
- No skewed, angled or notched buttons; every control is a plain rectangle with a small radius.
- The chevron "›" after "SHOP SALE", "DISCOVER" and category labels is an icon, not a shape.

## Components

### Buttons
**`button-primary`** — the default action on the light canvas ("SHOP SALE", "LEARN MORE").
- Background `{colors.primary}` (`#040404`), text `{colors.on-primary}` (`#ffffff`)
- Radius `{rounded.sm}` 4px, padding 12px 16px, height 40px
- Element font is `{typography.body}` (NType82 16px); in the capture the visible label renders as a small
  uppercase mono label followed by a chevron.

**`button-accent`** — `{colors.accent-yellow}` `#ffc700` fill with `#040404` text, same 4px / 12px 16px / 40px
geometry. Used for "SIGN UP" (mobile newsletter) and "EXPLORE ALL AUDIO" (product page).

**`button-on-dark`** — white `#ffffff` fill, `#040404` text, 4px, 12px 16px, 40px ("ADD TO BAG", "WATCH",
"DISCOVER"). **`button-on-dark-compact`** is the 32px variant with 8px 12px padding ("EXPLORE EAR (OPEN)").

**`button-modal`** — the store-locator interstitial button: `#040404`, 8px radius, 20px 40px padding,
60px tall, LatteraMonoLL 14px/20px uppercase.

**`text-button`** — "STAY ON UNITED STATES": transparent, `#595a5a` text with matching underline border.
Measured hover: only `opacity` changes, 1 → 0.5 (`text-button-hover`).

### Links & Chips
**`chip-link`** — on collections, "SHOP SALE" renders as LatteraMonoLL 11px uppercase, `#000000` on
`#595a5a0d`, 8px radius, 4px 8px padding, 20px tall.
Category labels under tiles are mono uppercase, underlined, followed by a chevron.

### Navigation
**`nav`** — 80px header, 8px padding, transparent over the canvas; text `#000000` (white on the dark product page).
**`nav-link`** — LatteraMonoLL 11px/12.1px uppercase, 8px 16px padding ("EXPLORE", "OFFERS", "LEARN MORE").
The "STORE LOCATOR" label above the modal uses `{typography.logo}` (Ndot 20px/55).

### Inputs
**`text-input`** — newsletter field in the footer region: `#3c3c3c99` glass, white text, Geist Mono 12px/15px
uppercase, 4px radius, 8px 16px padding, 48px tall. The site's focus rule sets
`:focus-visible { border-color: rgb(var(--accent-yellow)) }` and `:focus { border-color: rgb(var(--greyscale-900)) }`.

**`account-input`** (account.nothing.tech) — 1px `#c8c8c8` border, 11px radius, 8px 13px padding, 41px,
Inter 14px/20px `#000000`.

### Cards & Tiles
**`card-category-tile`** — 257×257 square, `#595a5a0d`, 8px radius, product shot centred, no padding.
**`card-dark-tile`** — product-page media tile, `#f4f4f41a` on `#181818`, 8px radius.
**`card-glass`** — `#ffffffcc` translucent card, 8px radius, 16px padding (8px for the geo modal).

### Footer
**`footer`** — `#040404` background, white text, padding 112px 32px 32px, 1016px tall at desktop.
**`footer-accordion`** — "SUPPORT", "NEWSLETTER", "BUSINESS SALES ENQUIRIES": `#ffffff0d` rows, 6px radius,
16px padding, 48px tall, LatteraMonoLL 11px uppercase white.

### Account flow
**`account-button-secondary`** — "Create an account": `#eeeeee` pill, `#000000` text, 41px. Measured hover:
background → `#1c1c1c`, text → `#ffffff` (`account-button-secondary-hover`).
**`account-submit-idle`** — "Sign in" as rendered before any input: `#c8c8c8` pill with `#f2f2f2` text,
padding 8px 10.4px, 41px.

## Design System Architecture

**Nothing publishes no public design system, component library or token package for its website.** Searches
for an official design system, brand guidelines, press kit and token package returned only third-party and
community material (listed in SOURCES.json). Nothing's own [About page](https://us.nothing.tech/about)
describes the design intent ("bold, beautiful and unusual designs", "transparent in appearance and ethos")
but publishes no specifications. Everything below is the de-facto system readable from the shipped store.

### Token architecture
- The store's shipped stylesheet uses Tailwind-style utilities (`--tw-*` variables); the stylesheet
  ([BsZ0VNqg.css](https://cdn.shopify.com/oxygen-v2/44146/39452/83037/4669499/assets/BsZ0VNqg.css)) declares
  primitives on `:root` as space-separated RGB triplets, verbatim: `--greyscale-100:244 244 244`,
  `--greyscale-900:89 90 90`, `--greyscale-black:4 4 4`, `--greyscale-dm-light:24 24 24`,
  `--accent-yellow:255 199 0`, `--accent-red:200 16 46`, `--accent-blue:0 47 108`.
- Utility classes consume them with an opacity slot: `.bg-greyscale-100{background-color:rgb(var(--greyscale-100) / var(--tw-bg-opacity,1))}`.
- Semantic aliases sit on top of the primitives: `.text-grey-official` → `--greyscale-default`, `.bg-pure-black` →
  `--greyscale-black`, `.bg-grey-darker` → `--greyscale-900`, `.bg-grey-lighter` → `--greyscale-200`.
- Two tiers only (primitive variable → utility/alias); there is no component-token tier in the CSS.
- Root variables measured on the page: `--color-dark:#000`, `--color-light:#fff`, `--header-height:64px`,
  `--aside-width:400px`, `--grid-item-width:355px`.

### Theming
- Light and dark appear per page, not per user preference: home and collections use `#f4f4f4` body, the
  Headphone (1) Pro page uses `#181818` (`--greyscale-dm-light`) with `--greyscale-dm-dark` black bands.
- The `dm-` prefix in the variable names marks the dark-mode pair. No `prefers-color-scheme` switch was observed.

### Type & spacing systems
- Type is a named, face-specific scale (`text-ntype-*`, `text-ndot-*`, `text-mono-*`) plus semantic composites
  (`type-title`, `type-headline`, `type-body`, `type-callout`, `type-category`, `type-logo`, `type-product-name`).
- Spacing follows Tailwind's 4px scale; measured values cluster on 8 / 16 / 32px with 2px micro gaps.
- Breakpoints in the CSS: 400, 640, 768, 914, 1024, 1280, 1536, 1792px (`@media (width>=…)`).

### Component model
Not documented publicly. Observed components: header with mono nav, geo-redirect modal, editorial
two-column promo, category tile row, full-bleed product band, product media grid, newsletter field,
footer accordions, and a separate account sign-in app (`account.nothing.tech`) with its own Inter-based pills.

### Accessibility
No published accessibility rules beyond the store's accessibility statement link in the footer. Observed in CSS:
`:focus{outline:2px solid #0000; outline-offset:2px}` with a border-colour change, and `:focus-visible` borders
in `--accent-yellow`. The `#595a5a` on `#f4f4f4` muted text is the lowest-contrast reading pair on the light canvas.

### Delivery
CSS, JS and fonts are served from Shopify's Oxygen CDN (`cdn.shopify.com/oxygen-v2/...`); fonts self-hosted as
WOFF2 there. No npm token package, Figma kit or versioned design-system release is published.

## Do's and Don'ts

### Do
- Keep surfaces greyscale: `#f4f4f4` canvas, `#040404` fills, `#ffffff` on dark.
- Use NType82 at weight 400 for display headlines and weight 100 for "title" cuts.
- Set nav, callouts and labels in LatteraMonoLL 11px uppercase.
- Use Ndot only for short labels — category names, product eyebrows, the store-locator mark.
- Use 4px radius on buttons and fields, 8px on tiles and cards.
- Reserve `#ffc700` for a single accent action per view.
- Let product photography carry colour; place it on `#595a5a0d` tiles or full-bleed black.
- Use opacity (1 → 0.5) for text-button hover, as the site does.

### Don't
- Don't bold headlines or add letter-spacing to NType82.
- Don't introduce new hues; red and blue exist as variables but were not seen on the captured pages.
- Don't add drop shadows to tiles or buttons.
- Don't use pills on store buttons (pills belong to the separate account app).
- Don't set long paragraphs in Ndot or LatteraMonoLL.
- Don't put `#595a5a` text on `#181818`; dark pages use `#9b9d9d` / `#d8d9d9` / `#ffffff`.

## Responsive Behavior

### Breakpoints
| Name | Width | Source |
|---|---|---|
| xs | 400px | `@media (width>=400px)` |
| sm | 640px | `@media (width>=640px)` |
| md | 768px | `@media (width>=768px)` |
| — | 914px | `@media (width>=914px)` |
| lg | 1024px | `@media (width>=1024px)` |
| xl | 1280px | `@media (width>=1280px)` |
| 2xl | 1536px | `@media (width>=1536px)` |
| 3xl | 1792px | `@media (width>=1792px)` |

### Measured mobile changes (390px)
- Home h2 drops from 32px/32px to 24px/26.4px (`{typography.heading-xl-mobile}`).
- Product h1 drops from 48px/48px to 32px/32px.
- Collection h1 "PHONES" stays 40px/40px Ndot; "Fall Sale" title stays 32px/35.2px weight 100.
- Body copy stays 16px (NType82 22.4px / Geist 20.8px).
- The primary mobile CTA becomes the yellow `button-accent` "SIGN UP", full width (342px), 40px tall.
- Header keeps its 80px height and 8px padding.

### Touch targets
Buttons are 40px tall (32px compact), footer accordion rows 48px, input 48px, account controls 41px.

## Iteration Guide

1. Start every screen on `{colors.canvas}` `#f4f4f4` with `{colors.ink}` `#040404` text.
2. Headline in `{typography.heading-xl}` (32px) or `{typography.display-xl}` (48px) NType82, weight 400, sentence case.
3. Eyebrows, nav and labels in `{typography.callout}` LatteraMonoLL 11px uppercase.
4. Paragraphs in `{typography.body-geist}` Geist 16px/20.8px, `{colors.ink-muted}` `#595a5a` on light.
5. One `button-primary` (black, 4px, 12px 16px, 40px) per band; on black bands use `button-on-dark`.
6. Use `button-accent` yellow only for the single most important action.
7. Product grids: square `card-category-tile` with 8px radius and 8px gaps, mono underlined label below.
8. Product hero: full-bleed black, centred Ndot eyebrow + white NType82 headline + small white button.
9. Dark product pages: `{colors.canvas-dark}` `#181818`, copy in `#9b9d9d`, tiles `#f4f4f41a`.
10. Footer: `#040404`, padding 112px 32px 32px, `footer-accordion` rows at 6px radius.
11. Never add shadows, gradients or extra colours; keep radius ≤ 8px on store UI.
12. Check every number against this file: 4 / 6 / 8px radii, 40px buttons, 80px header, 11 / 14 / 16 / 24 / 32 / 40 / 48px type.
