---
version: alpha
name: Xbox
category: "Gaming"
description: "Xbox.com (Microsoft) runs a full-bleed, image-led storefront on a black #000000 canvas with white #ffffff Segoe UI type, square 0px-radius CTAs set in SegoeProBlack 15px/900 uppercase, a Game Pass lime #9bf00b button with dark-green #054b16 label on its evergreen pages, heritage Xbox green #107c10 as the --brandColorPrimary token, campaign takeovers that recolour CTAs (currently red #f00000), and a light-grey #f2f2f2 Microsoft footer in #616161 11px text."

colors:
  primary: "#9bf00b"
  primary-hover: "#8bd80a"
  on-primary: "#054b16"
  brand-green: "#107c10"
  brand-green-hover: "#007738"
  brand-green-deep: "#0a4f0a"
  campaign-red: "#f00000"
  on-campaign: "#ffffff"
  canvas: "#000000"
  surface-hero: "#171717"
  surface-tile: "#1a1b1e"
  surface-raised: "#333333"
  surface-light: "#e6e6e6"
  ink: "#ffffff"
  ink-inverse: "#000000"
  footer-bg: "#f2f2f2"
  footer-ink: "#616161"
  store-tile: "#f9f9f9"
  store-tile-hover: "#d5d4d2"
  store-ink: "#3d465a"
  flipper: "#cccccc"
  tier-blue: "#007db5"
  tier-pink: "#d03a70"
  tier-purple: "#665ca6"
  warning: "#ffb900"
  danger: "#dc3545"

typography:
  display-hero:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 62px
    fontWeight: 700
    lineHeight: 68.2px
    letterSpacing: -0.62px
  display-hero-black:
    fontFamily: "SegoeProBlack, \"Segoe UI\", SegoeUI, Helvetica, Arial, sans-serif"
    fontSize: 62px
    fontWeight: 700
    lineHeight: 60px
    letterSpacing: -0.62px
  display-hero-mobile:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 26px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: -0.26px
  heading-xl:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 46px
    fontWeight: 700
    lineHeight: 56px
    letterSpacing: -0.46px
  page-title-black:
    fontFamily: "SegoeProBlack, \"Segoe UI\", SegoeUI, Helvetica, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: -0.36px
  heading-lg:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 34px
    fontWeight: 700
    lineHeight: 40px
  heading-store:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 40px
  tile-title:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 34px
    letterSpacing: -0.3px
  tile-title-sm:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
  title-sm:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  body-sm:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  store-body:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
  cta:
    fontFamily: "SegoeProBlack, \"Segoe UI\", SegoeUI, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 900
    lineHeight: 19.5px
  icon-label:
    fontFamily: "SegoeProBlack, \"Segoe UI\", SegoeUI, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 23px
  badge:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 700
    letterSpacing: 0.975px
  link-sm:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 600
    lineHeight: 16px
  nav-item:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  footer-heading:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 20px
  footer:
    fontFamily: "\"Segoe UI\", SegoeUI, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16.5px

rounded:
  none: 0px
  store-tile: 4px
  game-tile: 8px
  launcher: 28px
  circle: 50%

spacing:
  xxs: 2px
  xs: 4px
  badge-x: 7px
  sm: 8px
  md: 12px
  lg: 16px
  cta-x: 20px
  xl: 24px
  xxl: 36px
  gutter: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.cta}"
    rounded: "{rounded.none}"
    padding: 5px 20px 5px 22px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-campaign:
    backgroundColor: "{colors.campaign-red}"
    textColor: "{colors.on-campaign}"
    typography: "{typography.cta}"
    rounded: "{rounded.none}"
    padding: 5px 20px 5px 22px
    height: 32px
  button-tier:
    backgroundColor: "{colors.tier-blue}"
    textColor: "{colors.ink}"
    typography: "{typography.cta}"
    rounded: "{rounded.none}"
    padding: 5px 20px 5px 22px
    height: 32px
  button-outline-primary:
    backgroundColor: "transparent"
    textColor: "{colors.primary}"
    typography: "{typography.cta}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.primary}"
    padding: 5px 20px 5px 22px
    height: 32px
  link-cta:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.cta}"
    rounded: "{rounded.none}"
    padding: 10px 43px 7px 25px
    height: 41px
  link-cta-hover:
    textColor: "{colors.primary}"
  link-inline:
    textColor: "{colors.primary}"
    typography: "{typography.link-sm}"
  badge-highlight:
    backgroundColor: "{colors.campaign-red}"
    textColor: "{colors.ink}"
    typography: "{typography.badge}"
    rounded: "{rounded.none}"
    padding: 0px 7px 1px
  nav:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.nav-item}"
    padding: 0px 64px
    height: 54px
  nav-item:
    textColor: "{colors.ink}"
    typography: "{typography.nav-item}"
    padding: 1px 8px
    height: 54px
  avatar-button:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    rounded: "{rounded.circle}"
    border: "1px solid {colors.ink}"
    size: 36px
  card-game-tile:
    backgroundColor: "{colors.surface-tile}"
    textColor: "{colors.ink}"
    rounded: "{rounded.game-tile}"
    padding: 0px
  card-store-product:
    backgroundColor: "{colors.store-tile}"
    textColor: "{colors.store-ink}"
    typography: "{typography.store-body}"
    rounded: "{rounded.store-tile}"
    shadow: "rgba(0, 0, 0, 0.11) 0px 1px 2px 0px, rgba(0, 0, 0, 0.13) 0px 3px 7px 0px"
  card-store-product-hover:
    backgroundColor: "{colors.store-tile-hover}"
  support-launcher:
    rounded: "{rounded.launcher}"
    width: 148px
    height: 56px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.footer-ink}"
    typography: "{typography.footer}"
    padding: 0px 64px
---

## Overview

Xbox.com is Microsoft's storefront and brand hub for Xbox consoles, games and Game Pass. What a visitor sees is
almost entirely **art**: full-bleed key art from the current flagship game fills the hero and every tile of the
mosaic below it, and the interface itself is reduced to white Segoe UI type, square-cornered uppercase buttons and
a slim transparent header laid directly over the imagery. The page reads as black (`{colors.canvas}` — `#000000`)
because the dark art and black blades cover the body's white `#ffffff` background from the header to the footer.

The capture measured on 2026-10-07 shows a **campaign takeover**: the *Gears of War: E-Day* launch recolours the
homepage. Every filled CTA ("JOIN GAME PASS", "SHOP CONSOLES"), the "NOW AVAILABLE" badge and the icon-row labels
are red `{colors.campaign-red}` (`#f00000`) on black and blood-red art. On the evergreen pages measured the next day
(`/xbox-game-pass`, `/consoles`) the same button component is filled with Game Pass lime `{colors.primary}`
(`#9bf00b`) and labelled in dark green `{colors.on-primary}` (`#054b16`). The site's own token
`--brandColorPrimary` (and `--primary`, `--success`, `--green`) is heritage Xbox green `#107c10`
(`{colors.brand-green}`). So: green is the brand constant, lime is the evergreen action colour, and campaign colours
temporarily replace the CTA fill.

The type voice is loud and short. Headlines are Segoe UI Bold at 62px with tight negative tracking; every CTA is
SegoeProBlack at weight 900, 15px, set in capitals with a chevron glyph ("JOIN GAME PASS ›"). Microcopy is
imperative and terse — "GET IT NOW", "LEARN MORE", "SHOP CONSOLES" — and the hero subline is a three-word tag
("Emergence begins.").

**Key Characteristics:**
- Black, image-filled canvas; the UI floats on art rather than on panels.
- Square corners everywhere that matters: CTAs, badges and hero blades are `{rounded.none}` 0px.
- One filled CTA per block, followed by a borderless chevron text-CTA in white.
- SegoeProBlack 900 for every button label; Segoe UI 400/600/700 for everything else.
- CTA colour follows context: lime `#9bf00b` evergreen, red `#f00000` during the Gears launch, tier colours on Game Pass plan cards.
- A standard Microsoft "UHF" header and light-grey footer (`#f2f2f2`, `#616161`, 11px) frame every page.
- Six large outline icons with uppercase labels (Game Pass, Games, Devices, Accessories, Play, Sign in) form a quick-nav blade under the hero.

## Colors

> **Source pages:** `/en-US` (homepage, extraction + recorded probes), `/en-US/xbox-game-pass`, `/en-US/consoles`,
> `/en-US/search/results?q=halo` (extra extractions in `web/data/extracted/xbox--*.json`).

### Action
- **Game Pass Lime** (`{colors.primary}` — `#9bf00b`): filled CTA background on `/xbox-game-pass` and `/consoles`; also the colour of inline links (`terms.`) and of outline/text CTAs on dark sections there.
- **Lime Hover** (`{colors.primary-hover}` — `#8bd80a`): measured hover background of the lime CTA (`rgb(139, 216, 10)`).
- **On Primary** (`{colors.on-primary}` — `#054b16`): label colour on lime. Also `--entryGradientEnd` in the root variables.
- **Campaign Red** (`{colors.campaign-red}` — `#f00000`): homepage CTA fill, badge fill and icon-label colour during the *Gears of War: E-Day* takeover.
- **On Campaign** (`{colors.on-campaign}` — `#ffffff`): label colour on red.

### Brand green
- **Xbox Green** (`{colors.brand-green}` — `#107c10`): the root variables `--brandColorPrimary`, `--primary`, `--success`, `--green` and `--xboxProgressA`. Seen as a section background on `/consoles`, as text colour on Game Pass, and as the 2px ring of the support launcher icon.
- **Green Hover** (`{colors.brand-green-hover}` — `#007738`): `--brandColorPrimaryHover`, `--colorBrandBackgroundHover`.
- **Deep Green** (`{colors.brand-green-deep}` — `#0a4f0a`): `--entryGradientStart`; used as text colour on Game Pass.

### Plan tiers (Game Pass)
The four "SELECT" buttons on the Game Pass plan cards share the CTA component but each carries its tier colour:
`{colors.tier-blue}` `#007db5`, `{colors.tier-pink}` `#d03a70`, `{colors.brand-green}` `#107c10`,
`{colors.tier-purple}` `#665ca6`, all with white labels.

### Surfaces
- **Canvas** (`{colors.canvas}` — `#000000`): what the viewer sees behind the homepage; the largest-area background.
- **Hero Surface** (`{colors.surface-hero}` — `#171717`): `--pd-hero-bg`; the dominant dark band on `/consoles` and `/xbox-game-pass`.
- **Tile** (`{colors.surface-tile}` — `#1a1b1e`): Game Pass game-art tiles (radius 8px).
- **Raised** (`{colors.surface-raised}` — `#333333`): second-largest dark area on the homepage and `/consoles`.
- **Light Band** (`{colors.surface-light}` — `#e6e6e6`): light section background on `/consoles`.
- **Flipper** (`{colors.flipper}` — `#cccccc`): carousel previous/next circle buttons.

### Text
- **Ink** (`{colors.ink}` — `#ffffff`): the most-read text colour on the homepage (headlines, body, nav) — white on art.
- **Ink Inverse** (`{colors.ink-inverse}` — `#000000`): text on the white store/search pages and light bands.
- **Store Ink** (`{colors.store-ink}` — `#3d465a`): product-tile text on search results.
- **Footer Ink** (`{colors.footer-ink}` — `#616161`): all footer text, on `{colors.footer-bg}` `#f2f2f2`.

### Store tiles
- **Store Tile** (`{colors.store-tile}` — `#f9f9f9`) with hover `{colors.store-tile-hover}` (`#d5d4d2`), measured on search results.

### Semantic
The root variables carry a Bootstrap-style palette alongside the Xbox tokens. Two are listed here because they are
the only explicit status colours: `--warning` / `--yellow` `{colors.warning}` `#ffb900` and `--danger` / `--red`
`{colors.danger}` `#dc3545`. Success is the brand green (`--success: #107c10`).

## Typography

### Font Family
Two families carry the whole site, both served as web fonts (`loadedFonts`: `Segoe UI` 400/600, `SegoeUI` 700,
`SegoeProBlack` 900):

- **Segoe UI** — stack `"Segoe UI", SegoeUI, "Helvetica Neue", Helvetica, Arial, sans-serif` (also the
  `--uhf-font-family` variable). Microsoft documents Segoe UI as the on-screen version of its branding typeface
  Segoe, designed by Steve Matteson, shipped only with Microsoft products
  ([Microsoft Learn](https://learn.microsoft.com/en-us/typography/font-list/segoe-ui)).
- **SegoeProBlack** — stack `SegoeProBlack, "Segoe UI", SegoeUI, Helvetica, Arial, sans-serif`. Used for every
  CTA label, the icon-row labels and the black-weight page titles on `/consoles` and `/xbox-game-pass`.

The stylesheets also declare `@font-face` rules for Bahnschrift (all widths), Segoe Sans Variable (Small/Text/Display)
and icon fonts `MWF-MDL2`, `MWFMDL2-Xbox` and `FabricMDL2Icons`; none of the Bahnschrift or Segoe Sans faces were
loaded on the measured pages.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Measured on |
|---|---|---|---|---|---|---|
| `{typography.display-hero}` | Segoe UI | 62px | 700 | 68.2px | -0.62px | Homepage hero h2 |
| `{typography.display-hero-black}` | SegoeProBlack | 62px | 700 | 60px | -0.62px | `/consoles` h1 |
| `{typography.display-hero-mobile}` | Segoe UI | 26px | 700 | 36px | -0.26px | Homepage hero at 390px |
| `{typography.heading-xl}` | Segoe UI | 46px | 700 | 56px | -0.46px | `/consoles` h3 |
| `{typography.page-title-black}` | SegoeProBlack | 36px | 700 | 36px | -0.36px | `/xbox-game-pass` h1 |
| `{typography.heading-lg}` | Segoe UI | 34px | 700 | 40px | — | `/consoles` h2 |
| `{typography.heading-store}` | Segoe UI | 32px | 600 | 40px | — | Search results h2 |
| `{typography.tile-title}` | Segoe UI | 30px | 700 | 34px | -0.3px | Homepage mosaic `h2.c-heading-2` |
| `{typography.tile-title-sm}` | Segoe UI | 24px | 700 | 30px | — | Homepage mosaic `h2.c-heading-3` |
| `{typography.subheading}` | Segoe UI | 24px | 400 | 30px | — | Hero subline `p.c-subheading-1` |
| `{typography.title-sm}` | Segoe UI | 20px | 600 | 24px | — | Search results h1 |
| `{typography.body}` | Segoe UI | 15px | 400 | 24px | — | Hero/tile paragraphs |
| `{typography.store-body}` | Segoe UI | 14px | 400 | 18px | — | Store product tiles |
| `{typography.body-sm}` | Segoe UI | 13px | 400 | 19.5px | — | Game Pass legal/body |
| `{typography.cta}` | SegoeProBlack | 15px | 900 | 19.5px | — | All CTAs |
| `{typography.icon-label}` | SegoeProBlack | 15px | 600 | 23px | — | Icon-row labels |
| `{typography.badge}` | Segoe UI | 13px | 700 | — | 0.975px | "NOW AVAILABLE" badge |
| `{typography.link-sm}` | Segoe UI | 13px | 600 | 16px | — | Inline links on Game Pass |
| `{typography.nav-item}` | Segoe UI | 13px | 400 | 19.5px | — | Header nav items |
| `{typography.footer-heading}` | Segoe UI | 15px | 600 | 20px | — | Footer group headings |
| `{typography.footer}` | Segoe UI | 11px | 400 | 16.5px | — | Footer links/body |

### Principles
- **Tracking is -1% of size on big headlines**: -0.62px at 62px, -0.46px at 46px, -0.36px at 36px, -0.3px at 30px, -0.26px at 26px. Sizes 24px and below use `normal`.
- **Black for actions, Bold for headlines.** Button labels never use Segoe UI; headlines never use weight 900.
- **Capitals are typed, not transformed**: CTA text is authored uppercase (`text-transform: none` was measured).
- **The badge is the only positively tracked text** (+0.975px at 13px).

### Note on Font Substitutes
Segoe UI is not downloadable and is licensed for web use only through Monotype
([Microsoft Learn](https://learn.microsoft.com/en-us/typography/font-list/segoe-ui)). The site's own fallback chain
is `"Helvetica Neue", Helvetica, Arial, sans-serif`; keep that chain rather than inventing a substitute. No official
source for SegoeProBlack's licensing was found; its declared fallback is `"Segoe UI"` and then Helvetica/Arial — on a
fallback, set the label in the heaviest available weight so the 900 voice survives.

## Layout

### Spacing System
- **Tokens (measured gaps/paddings):** `{spacing.xxs}` 2px · `{spacing.xs}` 4px · `{spacing.badge-x}` 7px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.cta-x}` 20px · `{spacing.xl}` 24px · `{spacing.xxl}` 36px · `{spacing.gutter}` 64px.
- **Page gutter:** header and footer both use `padding: 0px 64px` at 1280px.
- **Paragraph rhythm:** body paragraphs carry `padding: 24px 0px 4px` — a 24px gap after the headline, 4px before the CTA row.
- **Footer group heading:** 36px top padding.
- **CTA padding:** `5px 20px 5px 22px` (filled), `10px 43px 7px 25px` (text CTA with chevron).

### Grid & Container
- Header: 54px tall, logo + 8 nav items left, "All Microsoft", search, cart and the 36px avatar right.
- Hero: full-bleed key art (~713px tall at 1280px) with the text block right-aligned over the art's dark area.
- Icon blade: six equal columns of outline icons with uppercase labels on black.
- Mosaic: a two-column grid of image tiles of unequal height (one tall tile left, two stacked tiles right, then a wide pair), separated by thin black seams; each tile holds headline, paragraph and a text-CTA bottom-left.
- Breakpoint variables declared in `:root`: `--breakpoint-sm` 540px, `--breakpoint-md` 860px, `--breakpoint-lg` 1084px, `--breakpoint-xl` 1400px.

### Whitespace Philosophy
Generous space comes from the art, not from padding: text blocks are small and sit in the darkest region of each
image, leaving most of every tile to the picture. Copy blocks are narrow (≈240–525px wide).

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Hero, blades, mosaic tiles, CTAs |
| CTA rest | `rgba(0, 0, 0, 0) 0px 4px 8px 0px` | Declared on CTAs; transparent, so visually flat. Hover sets `box-shadow: none`. |
| Store tile | `rgba(0, 0, 0, 0.11) 0px 1px 2px 0px, rgba(0, 0, 0, 0.13) 0px 3px 7px 0px` | Search-result product tiles |
| Game Pass glow | `rgba(50, 50, 50, 0.39) 0px 0px 25px 1.35px` | Measured on `/xbox-game-pass` |

Depth on marketing pages comes from the imagery itself: dark vignettes, smoke, light flares and the torn/ragged
edge where the hero art meets the black blade. Elevation shadows are a store-UI concern only.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | All CTAs, badges, hero and mosaic tiles, header |
| `{rounded.store-tile}` | 4px | Store/search product tiles (also `--border-radius-medium`) |
| `{rounded.game-tile}` | 8px | Game Pass game-art tiles |
| `{rounded.launcher}` | 28px | "Need help? Let's chat" support launcher (148×56px) |
| `{rounded.circle}` | 50% | Avatar button (36px), carousel flippers, launcher icon ring |

### Other shape cues
- No clip-path, transform or mask shapes were measured; corners are simply square.
- The chevron "›" after each CTA label is part of the button.
- Campaign art supplies its own organic edges (ragged burn line at the bottom of the Gears hero).

## Components

### Buttons

**`button-primary`** — filled CTA (evergreen pages).
- Background `{colors.primary}` `#9bf00b`, label `{colors.on-primary}` `#054b16`, `{typography.cta}` (SegoeProBlack 15px/900, line-height 19.5px), padding `5px 20px 5px 22px`, height 32px, radius 0px.
- Hover `button-primary-hover`: background `{colors.primary-hover}` `#8bd80a` (measured).

**`button-campaign`** — same component during a takeover.
- Background `{colors.campaign-red}` `#f00000`, label `#ffffff`; identical geometry (5px 20px 5px 22px, 32px, 0px). Measured on the homepage "JOIN GAME PASS" and "SHOP CONSOLES". Its hover only removes the transparent shadow (measured).

**`button-tier`** — Game Pass plan "SELECT" button: same geometry with the tier colour (`#007db5`, `#d03a70`, `#107c10`, `#665ca6`) and white label.

**`button-outline-primary`** — measured on `/xbox-game-pass`: transparent, 1px solid `#9bf00b` border, lime label, same padding and 32px height.

**`link-cta`** — the secondary text-CTA ("GET IT NOW ›", "LEARN MORE ›").
- Transparent, white `{typography.cta}` label, padding `10px 43px 7px 25px`, height 41px.
- Hover `link-cta-hover`: label turns `{colors.primary}` `#9bf00b` (measured on the homepage).
- On dark evergreen sections the label is lime at rest (measured on `/consoles`).

### Links
**`link-inline`** — lime `#9bf00b`, Segoe UI 13px/600, line-height 16px (Game Pass terms links).

### Badges
**`badge-highlight`** — `strong.c-badge.f-small.f-highlight`: background `#f00000` during the campaign, white Segoe UI 13px/700 with 0.975px tracking, padding `0px 7px 1px`, square corners. Sits above the hero headline ("NOW AVAILABLE", "XBOX EXCLUSIVE").

### Navigation
**`nav`** — the header (`header`, 54px desktop, 88px at 390px), transparent over the hero, white text, `padding: 0px 64px`.
- **`nav-item`** — `button.uhf-nav-item`: Segoe UI 13px/400, line-height 19.5px, padding `1px 8px`, height 54px. Hover adds `text-decoration: underline` (measured on every item); no colour change.
- **`avatar-button`** — 36px circle, 1px solid white border, transparent fill, initials inside.

### Cards & Tiles
**Mosaic tile** (homepage) — full-bleed art, square corners, white headline (`{typography.tile-title}` or `{typography.tile-title-sm}`), `{typography.body}` paragraph, then a `link-cta`.

**`card-game-tile`** — Game Pass game art: `{colors.surface-tile}` `#1a1b1e`, radius 8px, no padding.

**`card-store-product`** — search results: `#f9f9f9`, radius 4px, store shadow, `{colors.store-ink}` 14px/400 text; hover background `#d5d4d2` (measured).

### Icon blade
Six outline icons with `{typography.icon-label}` (SegoeProBlack 15px/600, line-height 23px) labels; icon and label take the campaign colour (`#f00000` measured) on black.

### Support launcher
**`support-launcher`** — fixed bottom-right pill, 148×56px, radius 28px, "Need help? Let's chat" in Segoe UI 14px/400 white, with a circular Xbox-sphere icon ringed in 2px `#107c10`.

### Footer
**`footer`** — `{colors.footer-bg}` `#f2f2f2`, `{colors.footer-ink}` `#616161`, `padding: 0px 64px`, 365px tall at 1280px. Group headings Segoe UI 15px/600 (line-height 20px, 36px top padding); links 11px/400 (line-height 16px).

## Design System Architecture

Microsoft publishes **no public design system, token package or component documentation for Xbox.com**. Searches
for an official system, brand portal or token repository (listed in `SOURCES.json`) found only:
- the IDSA award page for the **Xbox Design Language** by the Xbox Design Team at Microsoft, which says it spans
  "software user interface, print and digital media, packaging graphics and hardware industrial design" but publishes
  no tokens ([IDSA](https://www.idsa.org/?p=10268));
- Microsoft's general trademark rules, which forbid using its logos and designs without a licence
  ([Microsoft trademarks](https://www.microsoft.com/en-us/legal/intellectualproperty/trademarks/usage/general)),
  and the **Xbox Fansite Guidelines**, which forbid altering Xbox logos' size, proportions or colours
  ([Xbox Fansite Guidelines](https://www.xbox.com/en-US/legal/fansiteguidelines));
- Microsoft's typography documentation for Segoe UI
  ([Microsoft Learn](https://learn.microsoft.com/en-us/typography/font-list/segoe-ui)).

What follows is therefore the **de-facto system measurable on the site**, not documentation.

### Token architecture (observed)
`:root` exposes 185 custom properties in several naming families that co-exist:
- **Brand semantic tokens** in camelCase: `--brandColorPrimary: #107c10`, `--brandColorPrimaryHover: #007738`,
  `--brandColorPrimaryAlt: #044e2a`, `--colorBrandBackgroundHover: #007738`, `--colorNeutralBackground1Hover: #007738`,
  `--xboxProgressA/B/C` (`#107c10`, `#65c914`, `#44b01c`), `--entryGradientStart/Mid/End`.
- **A `gds` typographic and component ramp**: `--gds-fontramp-{display1|display2|section1–3|title1–4|subtitle1–3|body|caption|cta|action|label|legal}-{fontSize|lineHeight|fontFamily}`,
  `--gds-button-{xsmall|small|medium|large}-{minWidth|height}`, `--gds-hero-button-*-border-radius`,
  `--gds-icon-size-{xxsmall…xxxlarge}`, `--gds-focus-{borderRadius|borderWidth|boxShadow}`. At `:root` each one
  points at a `--gds-mobile-*` counterpart (e.g. `--gds-fontramp-body-fontSize: var(--gds-mobile-fontramp-body-fontSize)`),
  i.e. the ramp is switched per breakpoint by remapping variables.
- **Bootstrap-style utilities**: `--primary`, `--secondary`, `--success`, `--warning`, `--danger`, `--blue`, `--teal`,
  `--breakpoint-xs…xl`, `--font-family-sans-serif`, plus Tailwind `--tw-*` ring/shadow variables.
- **Page-module tokens**: `--pd-hero-bg: #171717`, `--pd-hero-text: #fff`, `--pd-hero-alert-bg: #ffd800`, `--header-height: 64px`.

### Theming (observed)
Pages switch colour context with classes on content blocks — e.g. `div.theme-green` on a homepage tile and
`div.high-contrast` around the hero badge. The campaign recolouring of CTAs, badge and icon labels to `#f00000` on
the homepage, while `/xbox-game-pass` and `/consoles` keep lime `#9bf00b`, shows that CTA colour is set per page or
module rather than globally. No dark/light mode switch was observed.

### Type & spacing (observed)
Large headings use a -1% tracking rule (see Typography). Spacing values cluster on 4/8/12/16/24/36/64px with
component-specific exceptions (5px/20px/22px button padding, 7px badge padding).

### Component model (observed)
Class names follow a `c-` component prefix with `f-` modifiers — `c-badge f-small f-highlight`, `c-heading-2`,
`c-heading-3`, `c-paragraph-1`, `c-subheading-1`, `c-flipper f-previous` — and the shared Microsoft header/footer
uses a `uhf-` prefix (`uhf-nav-item`, `uhf-footer-link`, `uhf-footer-nav-group-heading`). Components measured: filled CTA, outline CTA, text CTA, badge, nav item, avatar
button, carousel flipper, mosaic tile, game tile, store product tile, support launcher, footer.

### Accessibility (observed)
A visually hidden `h1` ("Welcome to XBOX Home Page") is present for screen readers; a "Skip to main content" link
opens the body. Focus styling is routed through `--gds-focus-boxShadow`; its resolved value was not measured. No
published contrast or target-size rules were found.

### Delivery
No npm package, Figma kit or versioned release of the Xbox.com system is publicly documented.

## Do's and Don'ts

### Do
- Put the UI on top of full-bleed art; let black `#000000` show only where the art ends.
- Use square 0px corners on every CTA and badge.
- Set CTA labels in SegoeProBlack 15px/900, uppercase, with a trailing chevron.
- Use lime `#9bf00b` with `#054b16` label for filled CTAs on evergreen pages; hover to `#8bd80a`.
- Pair one filled CTA with one white text-CTA (`10px 43px 7px 25px`) that turns lime on hover.
- Track big headlines at -1% of their size (-0.62px at 62px).
- Keep the Microsoft footer light: `#f2f2f2` with `#616161` 11px text.
- Use `#107c10` for brand/success moments (progress, icons, ring of the support launcher).

### Don't
- Don't round the CTAs or badges — radii appear only on store tiles (4px), Game Pass tiles (8px), the launcher (28px) and circles.
- Don't set button labels in Segoe UI, or headlines in weight 900.
- Don't treat the campaign red as permanent — on the measured evergreen pages the same CTA is lime.
- Don't put text in boxes over art; text sits directly on the darkest area of the image.
- Don't add visible drop shadows to marketing CTAs (their declared shadow is transparent).
- Don't alter the Xbox logo's proportions or colours ([Xbox Fansite Guidelines](https://www.xbox.com/en-US/legal/fansiteguidelines)).

## Responsive Behavior

### Breakpoints
Declared in `:root`: `--breakpoint-sm` 540px, `--breakpoint-md` 860px, `--breakpoint-lg` 1084px,
`--breakpoint-xl` 1400px. Measurements were taken at 1280px and 390px.

| Element | 1280px | 390px |
|---|---|---|
| Hero headline | 62px/700, line-height 68.2px, -0.62px | 26px/700, line-height 36px, -0.26px |
| Body paragraph | 15px, line-height 24px | 15px, line-height 20px |
| Primary CTA | 32px tall, `5px 20px 5px 22px` | unchanged |
| Header | 54px, `padding: 0px 64px`, full nav | 88px, `padding: 0px 15px` |

### Touch Targets
The filled CTA stays 32px tall on mobile; the text-CTA is 41px; nav items are 54px tall. No official target-size
rule was found.

### Collapsing Strategy
- The `gds` ramp maps `--gds-fontramp-*` and `--gds-button-*` onto `--gds-mobile-*` variables (as read at `:root`).
- At 390px the header is 88px tall with `padding: 0px 15px`; its visible text is reduced to the account initials.
- At 390px the hero headline drops from 62px to 26px and the paragraph line-height from 24px to 20px; the CTA keeps its 32px height and padding.
- Layout changes of the mosaic at mobile width were not measured; do not assume a specific stacking order.

### Image Behavior
At desktop, every hero and tile places its text over the darkest region of the art (capture). Mobile art crops were not measured.

## Iteration Guide

1. Start from the canvas: black `#000000` plus full-bleed art; add white `{typography.display-hero}` headline.
2. Add the CTA row: `button-primary` (or `button-campaign` for a takeover) followed by `link-cta`.
3. Use `{typography.body}` 15px/24px for paragraphs and `{typography.cta}` for all labels.
4. Keep `{rounded.none}` on all marketing components; only store tiles, Game Pass tiles, the launcher and circles are rounded.
5. Use `{colors.brand-green}` for brand/success, never for the main evergreen CTA fill (that is lime).
6. Footer: `{colors.footer-bg}` / `{colors.footer-ink}` with `{typography.footer}`.
7. Re-measure the homepage before reusing its CTA colour — campaigns change it.
