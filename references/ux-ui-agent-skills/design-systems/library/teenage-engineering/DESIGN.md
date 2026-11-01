---
version: alpha
name: teenage engineering
category: "Music & Audio"
description: "teenage engineering's site is a scaling, 980px-based layout set in its own te-20 / te-40 faces at weights 100 and 300 (plus TechnoType on product pages) — near-black #0f0e12 lowercase text on white #ffffff, full-bleed black product photography, light-grey #f6f8f7 product tiles, link blue #0071bb, and tiny dark 3.91837px-radius \"add to bag\" pills."

colors:
  primary: "#0071bb"
  canvas: "#ffffff"
  ink: "#0f0e12"
  black: "#000000"
  te-white: "#f5f5f5"
  grey-100: "#e5e5e5"
  grey-200: "#cccccc"
  grey-300: "#b2b2b2"
  grey-500: "#a1a7af"
  grey-600: "#767676"
  grey-700: "#7f7f7f"
  grey-900: "#4d4d4d"
  grey-1000: "#272727"
  tile: "#f6f8f7"
  product-canvas: "#f9faf9"
  product-nav: "#abb5ba"
  orange: "#f05a24"
  red: "#b81d13"
  yellow: "#fab413"
  green: "#006837"
  error: "#c0262c"
  ko-orange: "#ff5000"
  ko-grey: "#989fa5"

typography:
  nav-label:
    fontFamily: '"te-20", "Unicode", sans-serif'
    fontSize: 19.5px
    fontWeight: 100
    lineHeight: 29.25px
  nav-sub:
    fontFamily: '"te-20", "Unicode", sans-serif'
    fontSize: 9px
    fontWeight: 100
    lineHeight: 13.5px
  body:
    fontFamily: '"te-20", "Unicode", sans-serif'
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  fs-15:
    fontFamily: '"te-20", "Unicode", sans-serif'
    fontSize: 16.9796px
    fontWeight: 300
    lineHeight: 19.5918px
  fs-15-thin:
    fontFamily: '"te-20", "Unicode", sans-serif'
    fontSize: 16.9796px
    fontWeight: 100
    lineHeight: 19.5918px
  fs-10:
    fontFamily: '"te-20", "Unicode", sans-serif'
    fontSize: 11.7551px
    fontWeight: 300
    lineHeight: 13.0612px
  display-link:
    fontFamily: '"te-40", "Unicode", sans-serif'
    fontSize: 35.2653px
    fontWeight: 300
    lineHeight: 39.1837px
  techno-display:
    fontFamily: "TechnoType, Unicode, sans-serif"
    fontSize: 47.0204px
    fontWeight: 700
    lineHeight: 52.2449px
  techno-lead:
    fontFamily: "TechnoType, Unicode, sans-serif"
    fontSize: 23.5102px
    fontWeight: 500
    lineHeight: 26.1224px
  techno-body:
    fontFamily: "TechnoType, Unicode, sans-serif"
    fontSize: 16.9796px
    fontWeight: 500
    lineHeight: 19.5918px
  techno-label:
    fontFamily: "TechnoType, Unicode, sans-serif"
    fontSize: 11.7551px
    fontWeight: 700
    lineHeight: 13.0612px
  mobile-button:
    fontFamily: '"te-20", "Unicode", sans-serif'
    fontSize: 21.4898px
    fontWeight: 300
    lineHeight: 23.8776px

rounded:
  pill-buy: 3.91837px
  panel-sm: 6.53061px
  panel: 7.83673px
  panel-lg: 13.0612px
  card: 19.5918px
  mobile-button: 7.9592px
  round: 9999px

spacing:
  xs: 6.53061px
  sm: 13.0612px
  md: 19.5918px
  lg: 29.3878px
  xl: 58.7756px

components:
  button-buy:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.grey-100}"
    typography: "{typography.techno-label}"
    rounded: "{rounded.pill-buy}"
    height: 27.42px
    width: 82.28px
  button-newsletter-mobile:
    backgroundColor: "{colors.grey-300}"
    textColor: "{colors.ink}"
    typography: "{typography.mobile-button}"
    rounded: "{rounded.mobile-button}"
    padding: 7.9592px 21.4898px
    height: 52px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.fs-10}"
  link-discreet-dark:
    textColor: "{colors.grey-100}"
    typography: "{typography.display-link}"
  badge-reduced:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.fs-10}"
    rounded: "{rounded.round}"
    padding: 5.87755px 8.81632px
  product-tile:
    backgroundColor: "{colors.tile}"
    textColor: "{colors.black}"
    typography: "{typography.fs-10}"
  store-tile:
    backgroundColor: "{colors.te-white}"
    textColor: "{colors.black}"
    typography: "{typography.fs-15}"
  product-card:
    backgroundColor: "{colors.grey-100}"
    textColor: "{colors.black}"
    rounded: "{rounded.card}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-label}"
    height: 104px
  explore-band:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.grey-100}"
    typography: "{typography.display-link}"
    padding: 0px 58.7755px
    height: 94px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.grey-100}"
    typography: "{typography.fs-15}"
    padding: 29.3878px 58.7756px
    height: 85px
---

## Overview

teenage engineering (the brand writes its name in lowercase) builds a site that behaves like one of its devices' manuals: everything is
small, thin, lowercase and exact, and the products are photographed like museum objects. The capture of `https://teenage.engineering/`
shows a white header row with five icon-plus-word modules ("teenage engineering", products, store, latest, finder), a Japanese text
block, and the bold "to" logotype. Below it is a full-width black-and-white illustrated campaign ("DAILY LIFE OF MR. UPDATE",
EP-series update), and then a long sequence of **full-bleed black photographic panels**. Each panel shows a single product (the APC-2
turntable, a record, the EP-133 K.O. II) lit from above on pure black, with a tiny 11.76px caption in the bottom-left corner.

Between the black panels sit rows of **light-grey product tiles** (`#f6f8f7`) in a 3-up grid, each holding a product cut-out, its name and a
blue "buy now" link. The page is 13,540px tall; about 49% of the captured pixels are near-black and 32% white.

**Key characteristics**

- **Everything scales with the viewport.** The root declares `--base-design-width: 980` and `--client-width: 100vw`. Every font size, line height, space and radius is `calc(<ratio> * var(--client-width))`. At the measured 1280px width, one design pixel is 1.30612px, which is why the values look like `16.9796px` (13 design px) and `58.7756px` (45 design px). Treat those as exact.
- **Own typefaces.** te-20 and te-40 are served from teenage engineering's own `/assets/TE20T`, `TE20L`, `TE40T`, `TE40L` woff2 files, at weights 100 (thin) and 300 (light) only. TechnoType (400/500/700) appears on product story pages.
- **Lowercase voice.** Nav ("products", "store", "latest", "finder"), links ("buy now", "add to bag", "explore all products"), footer ("country or region", "newsletter"). Product names keep their model capitals (EP–133 K.O. II, APC–2).
- **Near-black, not black, for type.** `--te-black: #0f0e12` is the ink and the dark-surface colour. Pure `#000000` is used for photo panels and product text.
- **One link colour.** `--te-blue: #0071bb` ("buy now").
- **Hardware accents.** `--te-orange #f05a24`, `--te-red #b81d13`, `--te-yellow #fab413`, `--te-green #006837` echo the colours on the devices themselves. The EP-133 page adds `#ff5000`.

### Imagery & art direction (from the captures)
- **Product photography**: single objects on pure black, lit from directly above with a soft pool of light on the floor. There are no props and no people, and the product sits at the centre of the frame.
- **Cut-outs on grey**: in tile rows the same products appear as clean cut-outs on `#f6f8f7`, shot straight-on or at a slight top-down angle.
- **Illustration**: campaign art such as "DAILY LIFE OF MR. UPDATE" is black ink line drawing on white with a single orange accent (the "BUSY" sign, the cigarette smoke), set with heavy condensed display lettering.
- **Pictograms**: header icons are flat black glyphs (a fan for products, a bag for store, an empty square for latest, a compound glyph for finder) at the same height as the 19.5px labels.
- **Microcopy**: terse and lowercase. "buy now", "add to bag", "explore all products", "reduced price", "country or region".
- **Motion**: none was measured. Link and pill hovers produced no computed change; only the button module's 0.7-opacity hover is declared.

### Density
The homepage runs one product per panel, three per tile row. The store page shows 131 products ("131 products" counter) in a dense
2-up image grid with names and prices directly beneath each image; it has no descriptions.

## Colors

> Sources: `web/data/extracted/teenage-engineering.json` (home), `teenage-engineering--store.json` (`/store`),
> `teenage-engineering--product.json` (`/products/ep-133`), and the `--te-*` custom properties in the site's stylesheet.

### Core
- **Primary / te-blue** (`{colors.primary}` — `#0071bb`): `--te-blue`. "buy now" links (161 chars on the homepage), the `color-blue` button variant, and the `0 0 0 2px inset var(--te-blue)` focus ring.
- **Canvas** (`{colors.canvas}` — `#ffffff`): `--theme-body-bc: #fff`; header and campaign area.
- **Ink / te-black** (`{colors.ink}` — `#0f0e12`): `--te-black`; nav text, the "explore all products" band, footer, the "add to bag" pill, and the default button background.
- **Black** (`{colors.black}` — `#000000`): the photo-panel background (`box boximg`, 1280×1032) and product-tile text.
- **te-white** (`{colors.te-white}` — `#f5f5f5`): `--te-white`; default button text, field background, and store tile background.

### Grey ramp (declared)
`--te-grey-100 #e5e5e5` (`{colors.grey-100}`, text on dark), `-200 #ccc`, `-300 #b2b2b2` (grid dividers, disabled button, mobile newsletter
button), `-500 #a1a7af`, `-600 #767676` (inactive store filter), `-700 #7f7f7f` (field placeholder), `-900 #4d4d4d` (grey-button text),
`-1000 #272727`.

### Surfaces
- **Tile** (`{colors.tile}` — `#f6f8f7`): the largest-area background on the homepage (`box boximg` 1280×1110 rows of product tiles).
- **Product Canvas** (`{colors.product-canvas}` — `#f9faf9`): body background on `/products/ep-133`, where the nav text turns `{colors.product-nav}` `#abb5ba`.

### Accents
- `--te-orange` `#f05a24` (`{colors.orange}`, "visit the guide" link and campaign illustration smoke), `--te-red` `#b81d13`, `--te-yellow` `#fab413`, `--te-green` `#006837` (`--success`), `--error` `#c0262c`.
- **KO Orange** (`{colors.ko-orange}` — `#ff5000`) and **KO Grey** (`{colors.ko-grey}` — `#989fa5`): EP-133 K.O. II page panels and its price colour.

## Typography

### Font Families
- **te-20** (`--te-20: "te-20", "Unicode", sans-serif`): the UI face. 990 of 1,010 homepage characters. Faces are `TE20T` (weight 100) and `TE20L` (weight 300), with `font-feature-settings: "kern" 1, "liga" 1, "dlig" 0`.
- **te-40** (`--te-40`): the wider display companion, `TE40T` (100) and `TE40L` (300). Used for "explore all products".
- **TechnoType** (400 / 500 / 700): the product-story face on `/products/ep-133` (6,738 of 7,186 chars there).
- **Unicode**: a local fallback that maps to Hiragino Sans / Meiryo / MS PGothic for Japanese text.
- The corpus also declares `@font-face` families named `UniversTE20T`, `UniversTE40L`, plus campaign display faces (`franxurter`, `swingus`, `riddim`, `riddimscript`).

### Hierarchy (values at a 1280px viewport)

| Token | Size | Weight | Line height | Design px (÷1.30612) | Use |
|---|---|---|---|---|---|
| `{typography.techno-display}` | 47.0204px | 700 | 52.2449px | 36 | EP-133 story headline "no. 1 champion" |
| `{typography.display-link}` | 35.2653px | 300 | 39.1837px | 27 | "explore all products" (te-40) |
| `{typography.techno-lead}` | 23.5102px | 500 | 26.1224px | 18 | Product story lead, price "299 USD" |
| `{typography.nav-label}` | 19.5px | 100 | 29.25px | — (SVG) | Header module labels "products", "store" |
| `{typography.fs-15}` | 16.9796px | 300 | 19.5918px | 13 | Store product names, prices, footer country select |
| `{typography.fs-15-thin}` | 16.9796px | 100 | 19.5918px | 13 | "©2026 teenage engineering", "newsletter" |
| `{typography.techno-body}` | 16.9796px | 500 | 19.5918px | 13 | Product feature lists |
| `{typography.body}` | 16px | 300 | 24px | — | Computed body default |
| `{typography.fs-10}` | 11.7551px | 300 | 13.0612px | 9 | Photo captions, tile names, "buy now" |
| `{typography.techno-label}` | 11.7551px | 700 | 13.0612px | 9 | "add to bag", "visit the guide" |
| `{typography.nav-sub}` | 9px | 100 | 13.5px | — (SVG) | Header sub-links "instruments / audio / designs" |
| `{typography.mobile-button}` | 21.4898px | 300 | 23.8776px | — | Mobile "join our newsletter" button |

The stylesheet's type utilities are `.fs-10, .fs-15, .fs-20, .fs-25, .fs-30` (te-20, weight 300) and `.fs-40` (te-40). They resolve to
9 / 13 / 18 / 23 / 27 / 36 design px on desktop (`--fs-20: calc(.0183673 * var(--client-width))`). Below 768px each one doubles its
ratio (`--fs-20: calc(.0367347 * var(--client-width))`). Classes can be swapped per breakpoint, e.g. `fs-20 fs-15:md`.

Letter-spacing is `normal` on every measured element. The homepage and store page have no visible h1. The store page has a clipped
(`inset(50%)`) 1×1 h1 for screen readers only.

### Note on Font Substitutes
te-20 / te-40 are teenage engineering's own files, served from its domain. There is no published licence or public download, and no
official substitute is named. Any stand-in should be a light, wide-aperture grotesque available in a weight-100 cut; the site's own
fallback is the system sans.

## Layout

### Spacing System (viewport-relative)

| Token | Variable | Ratio | At 1280px |
|---|---|---|---|
| `{spacing.xs}` | `--space-xs` | .00510204 (5 dp) | 6.53061px |
| `{spacing.sm}` | `--space-sm` | .0102041 (10 dp) | 13.0612px |
| `{spacing.md}` | `--space-md` | .0153061 (15 dp) | 19.5918px |
| `{spacing.lg}` | `--space-lg` | .0229592 (22.5 dp) | 29.3878px |
| `{spacing.xl}` | `--space-xl` | .0459184 (45 dp) | 58.7756px |

These are the desktop ratios. Below 768px the variables double (e.g. `--space-xl: calc(.0918367 * var(--client-width))`). Measured gaps
and paddings land exactly on these values (6.53061, 13.0612, 19.5918, 29.3878, 58.7756px).

### Grid & Container
- Full-bleed rows: photo panels and tile rows span 1280px; inner content has `0 58.7755px` side padding (`{spacing.xl}`).
- Homepage product tiles sit 3-up; the store page shows 575px-wide image tiles 2-up (`_image_1ta1k_18`, 575×340) on `#f5f5f5`.
- The EP-133 page lays its "related products" cards out 477×509 with `{rounded.card}` corners.
- Breakpoints in the stylesheet: `width>=768px` (53 rules), `width<=767px` (22), `width>=480px`, `width>=1200px`.

### Whitespace
Black panels are tall (one measured 1280×1032px) with the product small in the centre. That amount of negative space is the
brand's main layout gesture. Text never fills a panel; it sits as a 9-design-px caption in a corner.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Every measured surface (`boxShadows` table empty) |
| Lighting | Studio photography on `#000000` | Depth comes from the photographs, not CSS |
| Focus | `0 0 0 2px inset var(--te-blue)` | Focus ring in the corpus |

The corpus declares some viewport-relative shadows for overlays (e.g. `#00000080 0 calc(.00408163 * var(--client-width)) calc(.0163265 * var(--client-width))`).
None appeared on the sampled pages at rest.

## Shapes

| Token | Value | Design px | Use |
|---|---|---|---|
| `{rounded.pill-buy}` | 3.91837px | 3 | "add to bag" pill (82×27) |
| `{rounded.panel-sm}` | 6.53061px | 5 | EP-133 coloured headline plates (`#ff5000`, `#989fa5`) |
| `{rounded.panel}` | 7.83673px | 6 | EP-133 inset image boxes |
| `{rounded.panel-lg}` | 13.0612px | 10 | EP-133 grey feature panel (967×477) |
| `{rounded.card}` | 19.5918px | 15 | Related-product cards (477×509, `#e5e5e5`) |
| `{rounded.mobile-button}` | 7.9592px | — | Mobile newsletter button |
| `{rounded.round}` | 9999px | — | "reduced price" badge (`--round: 9999px`) |

Radii scale with the viewport too: the root declares `--field-border-radius: calc(.0204082 * var(--client-width))` (buttons and fields
use it) and `--tile-border-radius: calc(.0255102 * var(--client-width))`. Homepage photo panels and tiles are square-cornered.

## Components

### Buttons
The stylesheet's button module (`button.*.css`) defines the system button:
- Default `--button-background: var(--te-black)` / `--button-text: var(--te-white)`. Width 100%, flex-centred, `padding: 0 1em`, `border-radius: var(--field-border-radius)`.
- Heights `--button-height-sm/md/lg` = 35 / 50 / 65 design px on desktop (`calc(.0357143 / .0510204 / .0663265 * var(--client-width))`), doubled ratios on mobile.
- Sizes: sm → `--fs-15`, md → `--fs-20`, lg → `--fs-30`.
- Colour variants: `color-black`, `color-blue` (te-blue / te-white), `color-grey` (grey-100 / grey-900), `color-success`, `color-error`.
- **Hover**: `opacity: .7`. **Disabled**: background `--te-grey-300`, text te-white. **as-link**: te-blue text, transparent, hover underline.

**`button-buy`**: measured on `/products/ep-133`. Related-product cards carry an 82.28×27.42px `#0f0e12` pill with `{rounded.pill-buy}`
corners, holding "add to bag" / "buy now" in TechnoType 11.7551px / 700, `#e5e5e5`. A hover probe recorded no computed change on the
pill itself.

**`button-newsletter-mobile`**: at 390px the homepage shows "join our newsletter" as a 354×52 `{colors.grey-300}` button with
`{colors.ink}` text, 21.4898px / 300, padding `7.9592px 21.4898px`, radius 7.9592px.

### Button states (from the button module)

| State | Background | Text |
|---|---|---|
| Default (`color-black`) | `--te-black` `#0f0e12` | `--te-white` `#f5f5f5` |
| Blue (`color-blue`) | `--te-blue` `#0071bb` | `--te-white` |
| Grey (`color-grey`) | `--te-grey-100` `#e5e5e5` | `--te-grey-900` `#4d4d4d` |
| Hover | unchanged, `opacity: .7` | unchanged |
| Disabled | `--te-grey-300` `#b2b2b2` | `--te-white` |

### Links
- **`link`**: "buy now" under tiles, te-blue `#0071bb`, 11.7551px / 300 (`lnk discreet`). No hover change measured.
- **`link-discreet-dark`**: "explore all products", te-40 35.2653px / 300 in `#e5e5e5` on the `#0f0e12` band.

### Badges
**`badge-reduced`**: "reduced price" on the store page. `#0f0e12` with white 11.7551px / 300 text, padding `5.87755px 8.81632px`, 9999px radius.

### Tiles & cards
- **`product-tile`** (home): `#f6f8f7` field, product cut-out centred, name + "buy now" in 11.7551px captions below.
- **`store-tile`** (/store): `#f5f5f5` image well 575×340; name (h2 `fs-20 fs-15:md`, 16.9796px / 300 black) and price ("59 USD", same style) beneath; store filter text "all products" in ink with inactive filters ("pocket operators") in `#767676`.
- **`product-card`** (product page): `#e5e5e5`, 19.5918px radius, 477×509, with a name in TechnoType 11.7551px / 400, a price, and the buy pill.

### Navigation
**`nav`**: 104px tall, white. Five modules, each an SVG with a pictogram (fan, shopping bag, square, finder glyph), a 19.5px / 100
label, and 9px / 100 sub-links: products → instruments / audio / designs; store → visit store / cart & checkout / deals; latest →
newsletter / instagram / now; finder → guides & downloads / support / search. On the right are a Japanese mission paragraph and the
"to" mark. A screen-reader-only "teenage engineering" span labels the logo.

### Footer
**`footer`**: 85px, `#0f0e12` (black `#000000` on the product page), padding `29.3878px 58.7756px`. It holds a lowercase country/region
select ("thailand"), "newsletter", and "©2026 teenage engineering" in 16.9796px te-20 thin/light `#e5e5e5`. The **`explore-band`** above
it is a 94px `#0f0e12` strip with "explore all products".

### Forms (declared)
Field tokens: `--field-background: var(--te-white)`, `--field-placeholder: var(--te-grey-700)`, `--field-font-size: var(--fs-20)`,
`--field-line-height: 1.5em`, `--field-border-radius: calc(.0204082 * var(--client-width))`, disabled background `--te-grey-100` and
text `--te-grey-300`. `--btn-min-click-area: 48px`.

## Design System Architecture

**teenage engineering publishes no public design system, brand guideline, press kit or token package.** Searches for "teenage
engineering press kit brand guidelines logo", "teenage engineering typeface Univers website font", "teenage.engineering official brand
assets media download logo usage" and "teenage engineering design system web components tokens github" returned retailers, job posts and
unofficial third-party write-ups only (ignored). The system below is read from the site's own stylesheets, e.g.
[button.B8x4Racb.css](https://teenage.engineering/assets/button.B8x4Racb.css) and the `:root` variables captured in the extraction.

- **Token architecture.** Primitives are `--te-*` (`--te-black #0f0e12`, `--te-white #f5f5f5`, `--te-blue #0071bb`, `--te-orange #f05a24`, `--te-red #b81d13`, `--te-yellow #fab413`, `--te-green #006837`, `--te-grey-100 … --te-grey-1000`). Semantic aliases include `--success: var(--te-green)`, `--error: #c0262c`, `--grid-divider-color: var(--te-grey-300)`, `--field-placeholder: var(--te-grey-700)`. Component tokens are scoped to CSS-module classes: `--button-background`, `--button-height-md`, `--field-size`, `--tile-border-radius`, `--icon-size`.
- **Theming.** `--theme-*` variables (`--theme-body-bc`, `--theme-fc`, `--theme-mc`, `--theme-mobile-cart`, `--theme-c1…c11`) are re-set per page. That is how the EP-133 page turns the nav `#abb5ba` and the body `#f9faf9`. No user-selectable dark mode was found.
- **Scale logic.** A single fluid system based on `--base-design-width: 980`. Every type, line-height, space, radius and icon size is a ratio of `--client-width` (100vw). Under 768px the ratios double, so mobile renders the same design at twice the relative size. Type steps are named by design-px-ish numbers (`fs-10 … fs-40`); spaces by t-shirt size (`--space-xs … --space-xl`).
- **Component model.** React/CSS-module components with hashed class names (`_button_1gnhu_1`, `_size-md_1gnhu_50`, `_color-blue_1gnhu_89`, `_as-link_1gnhu_110`). Responsive variants use a `:md` suffix (`_size-sm:md`, `fs-15:md`). The CSS bundle splits into `button`, `container`, `flex`, `form`, `grid`, `image`, `layout`, `block` modules.
- **Accessibility.** `--btn-min-click-area: 48px`, an inset 2px te-blue focus ring, `sr-only` labels (logo text, "in cart", "country or region"), and a visually clipped h1 on the store page. No published contrast policy was found.
- **Delivery.** Hashed assets under `/assets/`. No npm package, Figma kit or public versioning.

## Do's and Don'ts

### Do
- Write UI copy in lowercase; keep product model names in their own capitals.
- Use te-20 at weight 100 or 300 only, and don't add bold except in TechnoType product stories.
- Size everything as a ratio of the viewport from a 980px design; at 1280px use the exact values here (16.9796px, 58.7756px …).
- Put products on pure black full-bleed panels with a single tiny caption in the bottom-left corner.
- Use `#0f0e12` for UI type and dark bands; keep `#0071bb` for links.
- Keep homepage panels and tiles square; use small radii (3.9–19.6px) only on product-page pills, plates and cards.
- Make buttons dim to 70% opacity on hover, as the button module does.

### Don't
- Don't use heavy weights or large headlines in te-20; the brand's headlines are thin.
- Don't use a coloured brand fill for buttons; the default button is te-black on te-white.
- Don't add drop shadows or gradients to UI chrome.
- Don't fill photo panels with copy.
- Don't round photography on the homepage.
- Don't use letter-spacing or uppercase transforms.

## Responsive Behavior

| Width | Behaviour |
|---|---|
| ≥ 1200px | Extra rules in the stylesheet |
| ≥ 768px | Desktop ratios (`fs-20` = .0183673 × width); 104px header with five modules |
| < 768px | All type, space and button ratios double; "join our newsletter" renders as a 354×52px button |

At 390px the most-used sizes are 21.4898px, 10.3469px, 14.3265px and 13.2807px. These are the same design steps expressed against a
390px client width with doubled ratios. Touch targets follow `--btn-min-click-area: 48px`; the mobile newsletter button measures 52px.

## Iteration Guide

1. Set `--client-width: 100vw` and derive every size as `calc(<design px / 980> * var(--client-width))`; double the ratio below 768px.
2. Start with white `#ffffff`, `#0f0e12` text in te-20 300, lowercase.
3. Reference tokens by name: `{colors.ink}`, `{typography.fs-15}`, `{spacing.xl}`, `{rounded.pill-buy}`.
4. Add product moments as full-bleed `#000000` photo panels; captions use `{typography.fs-10}`.
5. Use the button module's variants (black, blue, grey, success, error) and its 0.7-opacity hover. Don't invent new button colours.
6. Use hardware accents (orange, red, yellow, green) only in illustrations, product pages and small links.
