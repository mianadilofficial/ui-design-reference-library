---
version: alpha
name: Blizzard Entertainment
category: "Gaming"
description: "Blizzard's portal is a dark navy (#131928) game showcase built from blz-* web components: a floating blurred nav bar, a full-bleed key-art carousel with 60px pill buttons (blue gradient #1888ef to #009fe9, or frosted rgba(208,217,251,.2)), and a 4-up grid of 4px-radius game cards. Headings are Poppins 600 (48px hero, 36px uppercase section titles), body and nav are Archivo at 20px/28px in 70% white."

colors:
  primary: "#1888ef"
  primary-90: "#1888efe6"
  primary-end: "#009fe9"
  on-primary: "#ffffff"
  canvas: "#131928"
  banner: "#323a48"
  surface-content: "#0a0d15"
  nav-bar: "#282d43cc"
  nav-download: "#060c11"
  icon-button: "#333b4b"
  frost: "#d0e9ff33"
  pill: "#5d719899"
  heading: "#ffffff"
  ink: "#ffffffb3"
  ink-description: "#ffffff80"
  ink-subtle: "#d0e9ff"
  link: "#38a8ff"
  link-hover: "#0592ff"
  border-subtle: "#ffffff26"
  border-input: "#ffffff4d"
  error: "#f31d77"
  success: "#00ff94"

typography:
  display-hero:
    fontFamily: "Poppins, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 57.6px
  display-hero-mobile:
    fontFamily: "Poppins, sans-serif"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 43.2px
  section-title:
    fontFamily: "Poppins, sans-serif"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 40px
    textTransform: uppercase
  section-title-mobile:
    fontFamily: "Poppins, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 26px
    textTransform: uppercase
  button-lg:
    fontFamily: "Poppins, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 26px
  card-title:
    fontFamily: "Poppins, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: "Archivo, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  nav-primary:
    fontFamily: "Archivo, helvetica, arial, sans-serif"
    fontSize: 20px
    fontWeight: 600
  footer-link:
    fontFamily: "Archivo, helvetica, arial, sans-serif"
    fontSize: 18px
    fontWeight: 600
  nav-secondary:
    fontFamily: "Archivo, helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
  pill-label:
    fontFamily: "Poppins, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 17px
    textTransform: uppercase
  card-genre:
    fontFamily: "Poppins, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 13px
    textTransform: uppercase
  badge:
    fontFamily: "Archivo, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 15px
    textTransform: uppercase
  legal-link:
    fontFamily: "Archivo, helvetica, arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
  card-genre-mobile:
    fontFamily: "Poppins, sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 13px
    textTransform: uppercase

rounded:
  sm: 4px
  md: 8px
  lg: 12px
  pill-filter: 20px
  button: 100px
  circle: 50%

spacing:
  xs: 5px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  xxl: 32px
  section: 40px
  block: 56px
  footer: 120px

components:
  button-primary:
    backgroundColor: "{colors.primary-90}"
    backgroundImage: "linear-gradient(rgba(24, 136, 239, 0.9) 0%, rgba(0, 159, 233, 0.9) 100%)"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.button}"
    padding: 10px 40px
    height: 60px
    border: 2px solid rgba(255, 255, 255, 0.15)
  button-primary-hover:
    backgroundImage: "linear-gradient(rgb(24, 136, 239) 0%, rgb(0, 159, 233) 100%)"
    border: 2px solid rgba(255, 255, 255, 0.5)
  button-secondary:
    backgroundColor: "{colors.frost}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.button}"
    padding: 10px 40px
    height: 60px
    border: 2px solid rgba(255, 255, 255, 0.15)
  button-secondary-hover:
    backgroundImage: "linear-gradient(0deg, rgba(255, 255, 255, 0.25), rgba(255, 255, 255, 0.25))"
    border: 2px solid rgba(255, 255, 255, 0.3)
  icon-button:
    backgroundColor: "{colors.icon-button}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.circle}"
    size: 48px
    boxShadow: "rgba(255, 255, 255, 0.15) 0px 0px 0px 2px inset"
  nav-bar:
    backgroundColor: "{colors.nav-bar}"
    textColor: "{colors.heading}"
    typography: "{typography.nav-primary}"
    rounded: "{rounded.md}"
    height: 72px
    backdropFilter: blur(20px)
  nav-link:
    textColor: "{colors.heading}"
    typography: "{typography.nav-primary}"
    rounded: "{rounded.md}"
    padding: 0px 8px
    height: 48px
  nav-download-button:
    backgroundColor: "{colors.nav-download}"
    textColor: "{colors.heading}"
    typography: "{typography.nav-secondary}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 48px
  filter-pill:
    backgroundColor: "{colors.pill}"
    textColor: "{colors.heading}"
    typography: "{typography.pill-label}"
    rounded: "{rounded.pill-filter}"
    height: 40px
    border: 2px solid transparent
  game-card:
    textColor: "{colors.heading}"
    typography: "{typography.card-title}"
    rounded: "{rounded.sm}"
    width: 276px
  badge:
    backgroundColor: "{colors.surface-content}"
    textColor: "{colors.heading}"
    typography: "{typography.badge}"
    rounded: "{rounded.sm}"
    padding: 6px 8px
    border: "2px solid #ffffff"
  carousel-dash:
    backgroundColor: "{colors.ink-description}"
    rounded: "{rounded.sm}"
    width: 40px
    height: 4px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  link-hover:
    textColor: "{colors.link-hover}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.footer-link}"
    padding: 120px 40px
  footer-legal-link:
    textColor: "{colors.ink}"
    typography: "{typography.legal-link}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
---

## Overview

Blizzard Entertainment's portal (`blizzard.com/en-us/`) is a franchise showcase: it exists to put Warcraft, Diablo, Overwatch, StarCraft and Hearthstone key art in front of the visitor and route them to a store page or Battle.net. The canvas is dark navy `{colors.canvas}` (`#131928`) washed with a large painted background image behind the game grid, and every surface above it is either key art or a translucent, frosted panel.

The page is three bands:
1. A **floating nav bar** — a 72px rounded bar (`rgba(40,45,67,.8)` + `backdrop-filter: blur(20px)`) inset from the viewport edges, with the blue BLIZZARD wordmark, franchise dropdowns (Warcraft, Diablo, Overwatch, Hearthstone, "…"), secondary links (About, Shop, Account) and a near-black **Download Battle.net** button.
2. A **key-art carousel** — 1034px-wide banners of painted game art with a franchise logo, a 48px Poppins headline ("Beta is live!", "Made to Suffer is now live"), a 20px Archivo description in 70% white, and a pair of 60px pill buttons: a blue gradient primary and a frosted secondary. Neighbouring slides peek at the edges; round 48px arrows and 40px dash indicators control it.
3. **FEATURED GAMES** — a 36px uppercase Poppins section title, PC / CONSOLE / MOBILE filter pills on the right, then a 4-column grid of portrait game cards (276px wide, 4px radius) with a corner badge (UPCOMING / NEW), a 20px title, a 14px uppercase genre line in pale blue `{colors.ink-subtle}` and platform icons.

The visual voice is "cinematic dark mode": art carries all the color, chrome is translucent white-on-navy, and the only saturated UI color is the Battle.net blue of the primary button.

**Key Characteristics:**
- Dark navy canvas `#131928`; text is white for headings and `rgba(255,255,255,.7)` for body.
- Two typefaces: **Poppins 600** for headings, buttons, pills and card text; **Archivo** for body, nav and footer.
- Large, soft pill buttons: 60px tall, 100px radius, 2px translucent white border, Poppins 24px/600.
- Primary action = vertical blue gradient `#1888ef → #009fe9` at 90% opacity that goes fully opaque on hover.
- Frosted secondary surfaces: `rgba(208,233,255,.2)` buttons, `rgba(93,113,152,.6)` pills, blurred nav.
- Game cards are tight 4px-radius portrait tiles — the art is the card.
- Built from `blz-*` custom elements (blz-nav, blz-banner, blz-button, blz-card, blz-game-tile, blz-badge, blz-pill …).

## Colors

> Source page: `https://www.blizzard.com/en-us/` (extraction + recorded probes). Token names in parentheses are the site's own CSS custom properties.

### Action
- **Battle.net Blue** (`{colors.primary}` — `#1888ef`): start stop of the primary button gradient, fully opaque on hover.
- **Blue 90%** (`{colors.primary-90}` — `#1888efe6`, `--blizzard-color-blizzard-550`): the default (90% alpha) start stop.
- **Blue End** (`{colors.primary-end}` — `#009fe9`): end stop of the gradient (`rgb(0,159,233)`).
- **On Primary** (`{colors.on-primary}` — `#ffffff`, `--button-color-text-secondary-default: #fff`).

### Surfaces
- **Canvas** (`{colors.canvas}` — `#131928`): computed `body` background.
- **Banner** (`{colors.banner}` — `#323a48`): the `blz-banner` fill behind key art — the largest measured background area.
- **Content** (`{colors.surface-content}` — `#0a0d15`, `--semantic-color-background-content-default`): badge fill.
- **Nav Bar** (`{colors.nav-bar}` — `#282d43cc`): floating bar, with 20px backdrop blur.
- **Nav Download** (`{colors.nav-download}` — `#060c11`): Download Battle.net button.
- **Icon Button** (`{colors.icon-button}` — `#333b4b`): carousel arrows.
- **Frost** (`{colors.frost}` — `#d0e9ff33`): secondary button fill.
- **Pill** (`{colors.pill}` — `#5d719899`, `--global-color-accent-600`): filter pills.

### Text
- **Heading** (`{colors.heading}` — `#ffffff`, `--semantic-color-text-heading: #fff`): headings, buttons, nav, card titles.
- **Ink** (`{colors.ink}` — `#ffffffb3`, `--global-color-content-700`): body text — the most-read text color on the page.
- **Description** (`{colors.ink-description}` — `#ffffff80`, `--semantic-color-text-description`): secondary copy, inactive carousel dashes.
- **Subtle Blue** (`{colors.ink-subtle}` — `#d0e9ff`): uppercase genre lines on game cards.
- **Link** (`{colors.link}` — `#38a8ff`) → **Link Hover** (`{colors.link-hover}` — `#0592ff`, `--semantic-color-text-link-default`): measured hover on every card link.

### Borders
- **Border Subtle** (`{colors.border-subtle}` — `#ffffff26`, `--semantic-color-border-action-primary-default`): 2px button borders.
- **Border Input** (`{colors.border-input}` — `#ffffff4d`, `--semantic-color-border-input-default`).

### Semantic (served variables, not visible on the homepage)
- **Error** (`{colors.error}` — `#f31d77`, `--semantic-color-content-error`).
- **Success** (`{colors.success}` — `#00ff94`, `--semantic-color-content-success`).

### Franchise palettes
The served variables also carry per-franchise palettes — `--wow-color-*`, `--diablo-d4-color-*`, `--diablo-d2r-color-*`, `--ow-color-*`, `--owr-color-*`, `--hearthstone-color-*`, `--blizzcon-color-*`, `--battle-net-color-*`, `--midnight-color-*`, `--rumble-color-*` (e.g. `--owr-color-primary-teal-500: #3fa`, `--wow-color-red-400: #561200`). These theme franchise pages; the portal itself uses only the Blizzard/semantic set above.

## Typography

### Font Families
- **Poppins** (served at 600) — headings, buttons, pills, card titles and genre lines. Open-source (OFL) by Indian Type Foundry, Jonny Pinhorn and Ninad Kale per the [Google Fonts metadata](https://raw.githubusercontent.com/google/fonts/main/ofl/poppins/METADATA.pb).
- **Archivo** — body copy (400), nav and footer (500/600). Open-source (OFL) by Omnibus-Type per the [Google Fonts metadata](https://raw.githubusercontent.com/google/fonts/main/ofl/archivo/METADATA.pb). Nav/footer stack: `Archivo, helvetica, arial, sans-serif`.

The stylesheet also declares franchise display faces (Blizzard, BlizzDisplay2026, Exocet, Belwe, Config, BigNoodleTooOblique, OWR Display …) used on franchise sites, not on the portal's visible text.

### Hierarchy

| Token | Family | Size | Weight | Line height | Use |
|---|---|---|---|---|---|
| `{typography.display-hero}` | Poppins | 48px | 600 | 57.6px | carousel headline (h1) |
| `{typography.display-hero-mobile}` | Poppins | 36px | 600 | 43.2px | h1 at 390px |
| `{typography.section-title}` | Poppins | 36px | 600 | 40px, uppercase | "FEATURED GAMES" |
| `{typography.section-title-mobile}` | Poppins | 24px | 600 | 26px, uppercase | section title at 390px |
| `{typography.button-lg}` | Poppins | 24px | 600 | 26px | pill button label (`--button-font-label-lg-desktop`) |
| `{typography.card-title}` | Poppins | 20px | 600 | 24px | game card title |
| `{typography.body}` | Archivo | 20px | 400 | 28px | body / carousel description |
| `{typography.nav-primary}` | Archivo | 20px | 600 | — | franchise nav labels |
| `{typography.footer-link}` | Archivo | 18px | 600 | — | footer top links |
| `{typography.nav-secondary}` | Archivo | 16px | 600 | — | About / Shop / Account / Download |
| `{typography.pill-label}` | Poppins | 16px | 600 | 17px, uppercase | filter pills |
| `{typography.card-genre}` | Poppins | 14px | 600 | 13px, uppercase | genre line |
| `{typography.badge}` | Archivo | 14px | 600 | 15px, uppercase | UPCOMING / NEW |
| `{typography.legal-link}` | Archivo | 14px | 500 | — | Privacy / Terms / Legal |
| `{typography.card-genre-mobile}` | Poppins | 12px | 600 | 13px, uppercase | genre at 390px |

### Principles
- **One weight for display.** Every Poppins role is 600; hierarchy comes from size and case.
- **Uppercase for labels and section titles** — section headers, pills, badges and genre lines; never for body.
- **Body is big.** Default body is 20px/28px Archivo — a living-room, lean-back reading size.
- **Letter spacing is zero** (`--global-font-letter-spacing-default: 0px`).

### Note on Font Substitutes
Both faces are free on Google Fonts, so no substitute is needed — load Poppins 600 and Archivo 400/500/600.

## Layout

### Spacing System
- Measured gaps: 8px (most common), 16px, 12px, 32px, 56px. Measured paddings: 24px, 16px, 40px, 5px, 120px.
- **Tokens**: `{spacing.xs}` 5px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.xl}` 24px · `{spacing.xxl}` 32px · `{spacing.section}` 40px · `{spacing.block}` 56px · `{spacing.footer}` 120px.
- Sections (`blz-section`) pad 40px; the footer pads 120px 40px; button groups sit 16px below copy (`padding: 16px 0 0`); buttons in a group are 8px apart.
- Button padding token: `--button-space-padding-lg: 10px 40px`.

### Grid & Container
- Content spans the 1280px viewport minus 40px gutters.
- Carousel slides are 1034px wide, centred, with neighbours peeking.
- Game grid: 4 columns of 276px cards; rows separated by generous vertical space (titles + icons below each image).
- Nav bar is inset 16px from the viewport and spans 1248px.

### Whitespace Philosophy
Dense key art, sparse chrome. The art fills edge-to-edge; text blocks are short (headline + one sentence + two buttons). The game grid is regular and calm so the art can be loud.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | `{colors.canvas}` + painted background image | page |
| 1 | `{colors.banner}` panel with art | carousel slides |
| Frost | translucent fill (`#d0e9ff33`, `#5d719899`, `#282d43cc`) | secondary buttons, pills, nav |
| Blur | `backdrop-filter: blur(20px)` | floating nav bar |
| Ring | `rgba(255,255,255,0.15) 0px 0px 0px 2px inset` | icon buttons |

Depth is created by translucency over art rather than drop shadows. The served variables include a shadow scale (`--semantic-shadow-xs-blur: 3px`, `--semantic-shadow-md-position-y: 5px`) used elsewhere.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 4px | game cards, badges, carousel dashes, footer links, banner bottom corners (`0 0 4px 4px`) |
| `{rounded.md}` | 8px | nav bar, nav links, Download button |
| `{rounded.lg}` | 12px | measured on page |
| `{rounded.pill-filter}` | 20px | PC / CONSOLE / MOBILE pills |
| `{rounded.button}` | 100px | all 60px pill buttons |
| `{rounded.circle}` | 50% | carousel arrows |

### Imagery
Game cards are portrait (276 × 368px media area) with the franchise logo painted into the art; carousel banners are wide cinematic paintings with characters on the right and copy on the left. No skewed or clipped shapes are used on the portal.

## Components

### Buttons
**`button-primary`** (`blz-button variant="primary" size="large"`) — Pre-purchase / Play Free Now / Buy Now.
- Gradient `linear-gradient(rgba(24,136,239,.9), rgba(0,159,233,.9))`, white `{typography.button-lg}` label, `{rounded.button}` 100px, 2px `rgba(255,255,255,.15)` border, 60px tall, padding `10px 40px`.
- **`button-primary-hover`**: gradient goes fully opaque (`#1888ef → #009fe9`) and border brightens to `rgba(255,255,255,.5)`.

**`button-secondary`** (`variant="secondary"`) — Learn More / Play Now.
- `{colors.frost}` fill, same geometry. **Hover** overlays `rgba(255,255,255,.25)` and border goes to `rgba(255,255,255,.3)`.

**`icon-button`** (`blz-icon-button variant="tertiary"`) — 48×48 circle, `{colors.icon-button}`, 2px inset white ring at 15%.

### Navigation
**`nav-bar`** (`blz-nav`) — floating `{colors.nav-bar}` bar, 72px tall, 8px radius, 20px backdrop blur.
**`nav-link`** — 48px hit area, 8px radius, `0 8px` padding; franchise labels 20px/600, secondary links 16px/600, dropdown chevrons.
**`nav-download-button`** — `{colors.nav-download}` fill, Battle.net icon + "Download Battle.net", 16px/600, `0 16px` padding, 48px, 8px radius.

### Filters
**`filter-pill`** (`blz-pill size="small"`) — `{colors.pill}` fill, 20px radius, 40px tall, 2px transparent border, `{typography.pill-label}`.

### Cards
**`game-card`** (`blz-card.product-card` + `blz-game-tile`) — 276px wide, 4px radius media, title `{typography.card-title}` white, genre `{typography.card-genre}` in `{colors.ink-subtle}`, platform icons below. Hover sets the card's link color from `#38a8ff` to `#0592ff` (measured) and marks the tile `active`.
**`badge`** (`blz-badge size="medium"`) — `{colors.surface-content}` fill, 2px white border, 4px radius, `6px 8px` padding, `{typography.badge}`.

### Carousel
`blz-carousel-beta` with `blz-banner` slides; **`carousel-dash`** (`blz-tab-control variant="dash"`) indicators 40×4px at 50% white, the active one 6px tall and solid white, hover 80% white.

### Links & Footer
**`link`** — `{colors.link}`, hover `{colors.link-hover}`.
**`footer`** (`blz-nav-footer`) — 120px 40px padding; top links (Careers, About …) `{typography.footer-link}` white; bottom legal links `{typography.legal-link}` in 70% white with `8px 12px` padding and 4px radius; locale selector and ratings block.

### State summary (all measured)

| Component | Default | Hover / Active |
|---|---|---|
| `button-primary` | gradient at 90% alpha, border 15% white | gradient opaque, border 50% white |
| `button-secondary` | `#d0e9ff33`, border 15% white | + 25% white overlay, border 30% white |
| `game-card` link | `#38a8ff` | `#0592ff`, tile gets `active` |
| `carousel-dash` | 50% white, 4px tall | hover 80% white; active solid white, 6px |

### Voice & Microcopy
Microcopy is short and launch-driven: headlines announce status ("Beta is live!", "Made to Suffer is now live"), descriptions are one sentence ("Start Azeroth's newest journey early when you pre-purchase the Skyborne Epic Pack."), and button labels are two-word imperatives — "Pre-purchase", "Learn More", "Play Free Now", "Buy Now", "Purchase Now". Badges are single uppercase words (UPCOMING, NEW); genre lines are uppercase category names (MMORPG, ACTION RPG, REAL-TIME STRATEGY, OPEN WORLD SHOOTER, MOBA, STRATEGY CARD GAME, TEAM-BASED ACTION).

## Design System Architecture

Blizzard Entertainment publishes **no public design-system documentation**: no docs site, token package, Figma kit or brand portal was found (searches recorded in `SOURCES.json`; a package named `@blzd-dev/uikit-v2` turned out to be unrelated). The only external sources are the font metadata for [Poppins](https://raw.githubusercontent.com/google/fonts/main/ofl/poppins/METADATA.pb) and [Archivo](https://raw.githubusercontent.com/google/fonts/main/ofl/archivo/METADATA.pb). What follows is the **de-facto system observable on blizzard.com**.

### Token architecture (as served)
- **Global tier** — `--global-*`: `--global-color-content-700: #ffffffb3`, `--global-color-accent-600: #5d719899`, `--global-size-200: 16px`, `--global-font-size-75: 10px`, `--global-font-line-height-tight: 110%`, `--global-font-scale-default: 1`.
- **Semantic tier** — `--semantic-*`: colors by role (`--semantic-color-background-action-primary-gradient-default: #0076d1`, `--semantic-color-background-action-primary-disabled: #00599e`, `--semantic-color-text-link-default: #0592ff`, `--semantic-color-border-input-focus: #ffffffb3`), text styles as shorthands (`--semantic-heading-text-xl: 600 24px/26px 'Poppins'`, `--semantic-body-text-md: 400 16px/22px 'Archivo'`, `--semantic-title-text-lg-desktop: 600 60px/66px 'Poppins'`), spacing (`--semantic-space-around-vertical-md-desktop: 20px`) and shadows.
- **Component tier** — per-component variables: `--button-font-label-lg-desktop`, `--button-space-padding-lg: 10px 40px`, `--button-color-border-primary-pressed`, `--badge-font-text: 600 14px/15px 'Poppins'`, `--input-height-md-desktop: 56px`, `--content-block-font-*`, `--header-heading-font-*`, `--price-font-*`, `--tooltip-font-*`.
- **Franchise tier** — parallel palettes and type per game (`--wow-*`, `--diablo-d4-*`, `--ow-*`, `--owr-typography-body-font-family: OWR Text`, `--diablo-d2r-typography-heading-font-family: Exocet Reaper`), which lets the same components re-skin per franchise.

### Theming
Components carry a `themed` class and franchise palettes exist as separate variable sets, but how a theme is switched is not documented publicly, so no mechanism is claimed here. Responsive values are expressed as `-desktop` / `-tablet` / `-mobile` suffixed variables (`--header-heading-font-sm-font-size-desktop: 24px` vs `-mobile: 20px`).

### Type & spacing
Type tokens bundle weight/size/line-height per breakpoint; sizes step 10 → 12 → 14 → 16 → 18 → 20 → 24 → 30 → 36 → 48 → 60px across variables and measured roles.

### Component model (observed inventory)
`blz-nav`, `blz-nav-dropdown`, `blz-nav-link`, `blz-carousel-beta`, `blz-banner`, `blz-content-block`, `blz-image`, `blz-button-group`, `blz-button` (variants primary/secondary, sizes), `blz-icon-button` (tertiary), `blz-tab-controls`/`blz-tab-control` (dash), `blz-section`, `blz-header`, `blz-pill`, `blz-card`, `blz-game-tile`, `blz-badge`, `blz-web-video`, `blz-icon`, `blz-nav-footer`, `blz-footer-link`, `blz-locale-selector`. Attributes (`variant`, `size`, `slot`) are the variant API.

### Accessibility
No published rules. Observed: tab controls are focusable (`tabindex=0`), nav links have 48px hit areas, white-on-navy headings are high contrast.

### Delivery
Delivered as custom elements on the page; no public npm package or versioning was found.

## Do's and Don'ts

### Do
- Keep the canvas dark navy (`{colors.canvas}`) with art doing the coloring.
- Use the blue gradient pill (`button-primary`) for the single purchase/play action per banner; pair it with a frosted `button-secondary`.
- Set headings in Poppins 600 and body in Archivo 400 at 20px/28px.
- Uppercase section titles, pills, badges and genre lines.
- Use translucent white borders (2px at 15%) on buttons and inset rings on icon buttons.
- Keep game cards at 4px radius and let the key art fill them.

### Don't
- Don't use flat blue for the primary — it is a vertical gradient that goes opaque on hover.
- Don't put body text in pure white; body is `rgba(255,255,255,.7)`.
- Don't round cards like buttons; cards are 4px, buttons 100px.
- Don't introduce franchise display fonts on portal chrome.
- Don't use drop shadows for depth — use translucency and blur.

## Responsive Behavior

### Measured at 390px
- Hero h1: 48px → 36px (line height 43.2px).
- Section title: 36px → 24px (line height 26px).
- Genre line: 14px → 12px.
- Served variables also define mobile values such as `--button-font-label-lg-font-size-mobile: 20px` and `--header-heading-font-sm-font-size-mobile: 20px`, and a tablet banner height `--banner-fixed-height-tablet: 400px`.

| Role | Desktop (1280px) | Mobile (390px) |
|---|---|---|
| h1 | 48px / 57.6px | 36px / 43.2px |
| section title | 36px / 40px | 24px / 26px |
| genre line | 14px / 13px | 12px / 13px |

### Touch Targets
Nav links 48px, icon buttons 48px, pills 40px, pill buttons 60px.

### Collapsing Strategy
Only the sizes above were measured at 390px; the mobile nav and grid layouts were not measured, so no column counts are specified here.

## Iteration Guide

1. Start from `{colors.canvas}` with a painted image; put chrome on translucent fills.
2. Buttons: 60px pills, Poppins 24px/600, 2px translucent border; primary = gradient, secondary = frost.
3. Headings Poppins 600, body Archivo 20px/28px at `{colors.ink}`.
4. Cards 276px wide, 4px radius, title 20px/600, uppercase 14px genre in `{colors.ink-subtle}`.
5. Use `blz-*` naming when mapping components.
6. Re-run `node web/scripts/verify-designs.mjs --slug=blizzard` after edits.
