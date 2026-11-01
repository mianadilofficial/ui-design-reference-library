---
version: alpha
name: Octopus Energy
category: "Energy & Climate"
description: "Octopus Energy's UK site: a deep night-purple #100030 canvas with #180048 bands, pale 'azure' #f0ffff text, cyan #60f0f8 headlines and links, a hot-pink #f050f8 primary button (hover #fa98ff) with 12px corners and a 2px same-colour border, violet #5840ff secondary accents, huge 60px-radius panels, all set in the custom Chromatophore typeface (300/400/500/700/800)."

colors:
  primary: "#f050f8"
  primary-hover: "#fa98ff"
  on-primary: "#100030"
  canvas: "#100030"
  band: "#180048"
  surface-violet-dark: "#2d1a83"
  ink: "#f0ffff"
  cyan: "#60f0f8"
  cyan-hover: "#bdf2ff"
  violet: "#5840ff"
  lavender: "#a49fc8"
  sky: "#00c8f8"
  tile: "#f0ffff"
  header-scrim: "#100030e6"
  pink-ghost-hover: "#f050f81a"
  sky-tint: "#00c8f81a"
  error: "#ff3e68"
  success: "#0cb98d"
  orange: "#ec8243"

typography:
  h1:
    fontFamily: "Chromatophore, helvetica, arial, sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 54px
  h1-mobile:
    fontFamily: "Chromatophore, helvetica, arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
  page-title:
    fontFamily: "Chromatophore, helvetica, arial, sans-serif"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 53px
    letterSpacing: -1%
  page-title-mobile:
    fontFamily: "Chromatophore, helvetica, arial, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 47px
    letterSpacing: -1%
  h2:
    fontFamily: "Chromatophore, helvetica, arial, sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 54px
  tile-title:
    fontFamily: "Chromatophore, helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  body-lg:
    fontFamily: "Chromatophore, helvetica, arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 29px
  body:
    fontFamily: "Chromatophore, helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  nav-link:
    fontFamily: "Chromatophore, helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button-lg:
    fontFamily: "Chromatophore, helvetica, arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 19.998px
  button-md:
    fontFamily: "Chromatophore, helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 17.776px
  legal:
    fontFamily: "Chromatophore, helvetica, arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px

rounded:
  none: 0px
  control: 12px
  card: 16px
  tab: 13px
  pill-panel: 30px
  panel: 60px
  circle: 100%

spacing:
  xs: 4px
  sm: 8px
  md: 12px
  base: 16px
  lg: 20px
  xl: 24px
  panel-sm: 32px
  section: 48px
  panel: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.control}"
    border: "2px solid #f050f8"
    padding: 16px 20px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    border: "2px solid #fa98ff"
  button-primary-md:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.control}"
    border: "2px solid #f050f8"
    padding: 12px 16px
    height: 46px
  button-postcode:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "0px 12px 12px 0px"
    border: "2px solid #f050f8"
    padding: 16px 20px
    height: 60px
  button-violet:
    backgroundColor: "{colors.violet}"
    textColor: "{colors.ink}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.control}"
    border: "2px solid #5840ff"
    padding: 16px 20px
    height: 56px
  button-outline:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.control}"
    border: "2px solid #f050f8"
    padding: 12px 16px
    height: 46px
  button-outline-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  button-text:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.control}"
    height: 46px
  button-text-hover:
    backgroundColor: "{colors.pink-ghost-hover}"
  text-input-postcode:
    backgroundColor: "{colors.tile}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-lg}"
    rounded: "12px 0px 0px 12px"
    padding: 16px
    height: 60px
  quote-panel:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.panel}"
    padding: 64px
  product-tile:
    backgroundColor: "{colors.tile}"
    textColor: "{colors.on-primary}"
    typography: "{typography.tile-title}"
    rounded: "{rounded.panel}"
    padding: 32px
    width: 225px
    height: 225px
  tariff-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    border: "2px solid #5840ff"
  link:
    textColor: "{colors.cyan}"
    textDecoration: underline
  link-hover:
    textColor: "{colors.cyan-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    height: 54px
  nav-item-hover:
    textColor: "{colors.cyan-hover}"
    rounded: "{rounded.control}"
  footer:
    backgroundColor: "{colors.band}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

Octopus Energy's site is a dark, saturated, cartoon-friendly system: a night-purple page, glowing cyan
headlines, a hot-pink button, and the pink octopus mascot scattered through illustrations and
icons. Everything is set in one custom typeface, **Chromatophore**. Measured pages: the homepage
https://octopus.energy/ and the tariffs page https://octopus.energy/tariffs/ (desktop 1280px, mobile 390px).

What the capture shows (top 2400px at 1280px):

1. A slim `#100030` header: pink octopus logomark, four cream nav links (Energy, Heat pumps, Solar & battery,
   Electric vehicles), "Support" and "Log in" with a person icon on the right.
2. A row of trust badges (Which? Recommended Provider, Trustpilot 4.8 stars, Good Shopping Guide Ethical Best
   Buy) on the same purple.
3. A full-bleed family photograph with a `#100030` quote panel overlapping it at left: 60px radius on the panel,
   a cyan 36px/500 headline "Join the UK's most popular energy supplier", 18px body, and a postcode input fused
   to a pink "Get a quote" button (left half rounded 12px on the input, right half rounded 12px on the button).
4. A cookie banner outlined in violet `#5840ff`, with a pink "That's cool", a pink-outlined "Fine tune" and a
   pink text button "No thanks".
5. "Everything you need for a cheaper, greener home & car" — a centred cyan h2 above four 225×225 pale
   `#f0ffff` tiles with 60px radius, each holding a 3D product render and a 16px/500 dark label.
6. A `#180048` band: centred cyan headline, a 18px line with a bold "always", then large `#100030` panels with
   60px radius holding a bullet list with mascot icons, a pink "Get a quote today" button, and a collage of
   rounded photographs.

Character: playful, warm, confident; dark mode by default; strong neon accents; rounded, friendly
geometry (12px controls, 60px panels).

## Colors

### Brand & Accent

- `primary` `#f050f8` — hot pink; fill of every primary button and its 2px border. Text on it is `#100030`.
- `primary-hover` `#fa98ff` — measured hover fill (and border) of "Get a quote" / "That's cool".
- `cyan` `#60f0f8` — h1/h2 colour, active nav item ("Home", underlined), inline links.
- `cyan-hover` `#bdf2ff` — measured hover colour of links and nav items; nav items also gain a 20% tint of it
  as background (`color(srgb 0.741176 0.94902 1 / 0.2)`).
- `violet` `#5840ff` — secondary filled button ("Get an instant quote"), tariff card borders, cookie banner outline.
- `sky` `#00c8f8` — present in the root variables and as a 10% tint `#00c8f81a` on the tariffs page.
- `lavender` `#a49fc8` — muted text on the tariffs page.

### Surface

- `canvas` `#100030` — body background, header, quote panel, tariff cards.
- `band` `#180048` — alternating section band and the footer (the largest-area background).
- `surface-violet-dark` `#2d1a83` — darker violet blocks on the tariffs page.
- `tile` `#f0ffff` — product tiles and the postcode input.
- `header-scrim` `#100030e6` — 90% purple used on the sticky header/cookie overlay.

### Text

- `ink` `#f0ffff` — 7,322 measured homepage characters; all running text on purple.
- `cyan` `#60f0f8` — headlines (575 characters).
- `on-primary` `#100030` — text on pink buttons and on pale tiles.

### Semantic

From the live root variables (no public token documentation names them): `error` `#ff3e68` (also as 10%
`#ff3e681a`), `success` `#0cb98d`, `orange` `#ec8243` (warning-style, also at 10% / 30% alpha).

## Typography

### Font Family

- **Chromatophore** — the only text face. Loaded weights: 300, 400, 400 italic, 500, 800
  (`desktop.loadedFonts`), with 700 rendered on the tariffs h1. Stack:
  `Chromatophore, helvetica, arial, sans-serif` (lowercase fallbacks exactly as served).
- The name is a biological term for the pigment cells an octopus uses to change colour. Octopus Energy has not
  published who drew it, and no foundry page for it could be found.

### Hierarchy

| Token | Size / line | Weight | Tracking | Where |
|---|---|---|---|---|
| page-title | 44px / 53px | 700 | -1% | Tariffs page h1 |
| h1 | 36px / 54px | 500 | — | Homepage hero h1 (cyan) |
| h2 | 36px / 54px | 500 | — | Section headlines (cyan) |
| body-lg | 18px / 29px | 400 | — | Main paragraphs, inputs, list items |
| button-lg | 18px / 19.998px | 500 | — | Primary buttons |
| tile-title | 16px / 24px | 500 | — | Product tile labels (h3) |
| nav-link | 16px / 24px | 500 | — | Nav items, footer links |
| button-md | 16px / 17.776px | 500 | — | Medium buttons, "Log in" |
| body | 16px / 24px | 300 | — | Base text (body element, bullet copy) |
| legal | 12px / 18px | 400 | — | Footer company registration text |

Mobile (390px): homepage h1 24px / 36px; tariffs h1 36px / 47px; body stays 18px / 29px.

### Principles

- One family, contrast by weight and colour: cyan 500 headlines, cream 300/400 copy, 500 for interactive text.
- Line-heights are generous: 1.5 on headlines (36/54), ~1.6 on body (18/29).
- Large page titles tighten to -1% tracking; nothing else is tracked.
- Bold (700) is used inline for emphasis words ("**always**").

### Note on Font Substitutes

Chromatophore is proprietary to Octopus Energy and not available for licence as far as any source shows. The
site's own fallback is `helvetica, arial, sans-serif`; use that stack. Expect a loss of character: the custom
face has rounder, friendlier shapes than Helvetica.

## Layout

### Spacing System

Measured homepage gaps: 16px (166), 12px (146), 24px (50), 8px (34), 32px (18). Paddings: 16px (39), 48px (27),
32px (22), 20px (22), 24px (20), 40px (20), 64px (12), 12px, 28px. Tariffs page: gaps 12px / 16px / 8px / 24px;
paddings 16px / 8px / 32px / 20px / 28px.

- 4px / 8px / 12px / 16px for control internals; 20px button side padding.
- 32px inside product tiles; 64px inside the hero quote panel.
- 48px section padding.

The root variables also carry rem sizes (`1.2rem`, `1.6rem`, `3.2rem`, `4.8rem`, `6rem` …); only the
computed px values above are used in this file.

### Grid & Container

- 1280px canvas with the main content inside a content column (the footer legal paragraph measures 1108px wide).
- Product tiles: four 225px squares in a centred row with 16px gaps.
- Large rounded panels sit inside the column on `#180048` bands, with content split text-left / photos-right.

### Whitespace Philosophy

Dense but airy: bright neon elements need dark space around them; panels have big padding (32–64px) and
headlines get a 1.5 line-height.

## Elevation & Depth

- No box-shadows were measured on either page.
- Depth comes from colour layering: `#180048` band → `#100030` panel → `#f0ffff` tile.
- The stylesheet corpus contains a soft layered shadow built with `color-mix(...)` (5% steps), not seen on the
  measured screens.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Bands, header |
| control | 12px | Buttons, nav item hover background, inputs |
| tab | 13px 13px 0 0 | Tariff tabs (top-rounded, 15 on the tariffs page) |
| card | 16px | Tariff cards |
| pill-panel | 30px | Mid-size rounded blocks (17 on the homepage) |
| panel | 60px | Hero quote panel, product tiles, feature panels |
| circle | 100% | Icons, avatars |

Fused controls: the postcode input is `12px 0px 0px 12px` and its button `0px 12px 12px 0px`, forming one
60px-tall pill-ish bar. No clip-paths or skews.

### Photography Geometry

Photographs are cropped into rounded rectangles in panel collages; the hero photo is full-bleed.
Illustrations are glossy 3D renders on pale tiles plus flat mascot icons.

## Components

### Buttons

- **button-primary** — `#f050f8`, `#100030` text, Chromatophore 18px/500 (line 19.998px), 12px radius,
  `2px solid #f050f8`, padding 16px 20px, 56px tall. Hover → `#fa98ff` fill and border (measured).
- **button-primary-md** — 16px/500 (17.776px), padding 12px 16px, 46px tall ("That's cool").
- **button-postcode** — right half of the postcode bar: radius `0px 12px 12px 0px`, 60px tall.
- **button-violet** — `#5840ff` with `#f0ffff` text, same size as primary ("Get an instant quote").
- **button-outline** — transparent, pink text, `2px solid #f050f8`, 46px. Hover fills pink with `#100030`
  text (measured).
- **button-text** — pink text, no border ("No thanks"); hover adds `rgba(240, 80, 248, 0.1)` background (measured).

### Cards & Containers

- **quote-panel** — `#100030`, 60px radius, 64px padding, overlapping the hero photo.
- **product-tile** — `#f0ffff`, 60px radius, 32px padding, 225×225, render + 16px/500 `#100030` label.
- **tariff-card** — `#100030`, 16px radius, `2px solid #5840ff` (tariffs page; 526px or 348px wide).

### Inputs & Forms

- **text-input-postcode** — `#f0ffff`, `#100030` text, 18px/29px, padding 16px, radius `12px 0px 0px 12px`,
  60px tall, transparent 2px border; placeholder "Your postcode".

### Navigation

- **nav** — 54px header on `#100030`; items 16px/500 cream; active item cyan and underlined; hover → text
  `#bdf2ff` with a 20% `#bdf2ff` background on a 12px-radius, 46px-tall hit area (measured).

### Signature Components

- **Trust badge row** directly under the nav.
- **Cookie banner** — floating, violet 2px outline, pink buttons.
- **Footer** — `#180048`, link columns ("The Octoverse", "About us", "Blog", "Awards" …) in 16px/500 cream,
  12px/18px legal text.

## Design System Architecture

Octopus Energy publishes **no public design-system site or token package**. What it does publish is its
engineering conventions repository, [octoenergy/public-conventions](https://github.com/octoenergy/public-conventions),
whose [CSS guide](https://github.com/octoenergy/public-conventions/blob/master/conventions/css.md) states how the
front-end is built:

- **Naming.** "We use BEM (Block, element, modifier) for our class naming conventions".
- **Authoring rules.** SCSS over SASS, enforced with Stylelint in CI; lowercase longhand hex values; no units
  on zero; one declaration per line; a fixed declaration order (positioning → box model → …).
- **Theming via styled-components.** Theme logic lives in theme files; components never ask which theme is
  active. **Component mixins** "define the shape of a theme block" and act as the API of a theme-able component.
- **Token tiers.** The guide describes "a tiered naming system": "A designer calls a colour `skyBlue` / A theme
  calls it `accentPrimary` / A component calls it `backgroundColor`" — i.e. primitive → semantic → component.
  Example mixin fields: `color`, `backgroundColor`, `borderBottom`, `labelColor`, `helpTextColor`,
  `focusBorderBottom`, `validBorderBottomColor`.
- **Multiple brand themes.** The guide's example `${theme=='octopus' && …}` shows themes per brand, resolved
  through mixins in "the octopus theme file".

Observed on the live site (not from documentation):

- The root defines ~400 CSS custom properties with hashed names (`--gGMynG: #f050f8`, `--eqvlqX: #100030`,
  `--vYocf: #60f0f8`, `--doYyxP: #5840ff`, `--gHOUPi: #180048`, `--fvBZle: #fa98ff`) and hashed class names
  (`cxYASs eQUJZQ jagiWw`), so the readable token names are compiled away in production.
- The served page bundle registers a `CoralProvider` component and loads app-store icons from
  `static.octopuscdn.com/coral/`. Whether "Coral" is the name of the internal component library is not stated
  in any source we could open.
- The page is a Next.js app (`/_next/static/` chunks).
- Accessibility: no published contrast or target-size policy was found; measured interactive heights are 46–60px.
- Delivery: only `@krakentech/eslint-config` is public on npm ("A globally shareable ESLint config for Octopus
  Energy repositories"); no component or token package, no public Figma kit.

## Do's and Don'ts

### Do

- Keep the page dark: `#100030` canvas, `#180048` alternating bands and footer.
- Use `#f0ffff` for copy and `#60f0f8` for headlines and links.
- Make the main action pink `#f050f8` with dark `#100030` text and a 2px same-colour border; hover `#fa98ff`.
- Round controls 12px and big containers 60px.
- Use Chromatophore 500 for headings and interactive text, 300/400 for copy.
- Use 1.5 line-height on headlines.
- Fuse input + button into one bar with mirrored half-radii.

### Don't

- Don't put the page on white or grey; light surfaces are only tiles/inputs in `#f0ffff`.
- Don't use pink for text paragraphs or cyan for buttons.
- Don't add drop shadows.
- Don't use square corners on cards or panels.
- Don't track or uppercase headings.

## Responsive Behavior

### Breakpoints

Measured at 1280px and 390px. At 390px: homepage h1 36px → 24px (line 36px); tariffs h1 44px → 36px
(line 47px); body remains 18px/29px; the postcode bar and "Get a quote" keep 60px height and 18px type.
Top mobile sizes: 16px, 18px, 24px, 12px, 42px, 20px.

### Touch Targets

Primary buttons 56–60px tall; medium buttons and nav items 46px.

### Collapsing Strategy


### Image Behavior

Hero photograph stays full-bleed behind the quote panel; collages reflow.

## Iteration Guide

1. Set `#100030` as the page and header; `#180048` for alternate bands and the footer.
2. Hero: full-bleed photo, `#100030` 60px-radius panel, cyan 36px/500 headline, fused postcode bar.
3. Section headings: centred cyan 36px/500 with 54px line-height.
4. Tiles: `#f0ffff` 225×225, 60px radius, 16px/500 dark label.
5. Primary action pink with 2px pink border; hover `#fa98ff`.
6. Links cyan, underlined; hover `#bdf2ff`.
7. Re-run `node web/scripts/verify-designs.mjs --slug=octopus-energy`.
