---
version: alpha
name: American Express
category: "Banking & Insurance"
description: "American Express's site runs on its internal DLS (Design Language System): a white #ffffff canvas, Bright Blue #006fcf actions and links, Deep Blue #00175a for the darkest brand moments, and a six-step gray ramp from #f7f8f9 to #333333 (body ink). Type pairs BentonSans light (300) for 30px display lines with Helvetica Neue for UI and reading text (15px/22px, 16px/24px, 20px/26px). Buttons are 50px tall with 4px corners and 13px 30px padding (the header sign-in is 48px with 8px corners); cards are flat white with a 0 1px 1px rgba(0,0,0,.1) shadow, and focus is a 1px dashed #53565a outline offset by 3px."

colors:
  primary: "#006fcf"
  primary-hover: "#0069c4"
  primary-active: "#0063b9"
  bright-blue-hover: "#0065bd"
  bright-blue-active: "#005aa8"
  secondary-hover-border: "#0061b6"
  secondary-hover-fill: "#f2f2f2"
  nav-link: "#0066be"
  deep-blue: "#00175a"
  bright-blue-60: "#66a9e2"
  bright-blue-20: "#cce2f5"
  canvas: "#ffffff"
  ink: "#333333"
  ink-heading: "#3d3d3d"
  gray-01: "#f7f8f9"
  gray-02: "#ecedee"
  gray-03: "#c8c9c7"
  gray-04: "#8e9092"
  gray-05: "#53565a"
  gray-06: "#333333"
  on-primary: "#ffffff"
  success: "#008767"
  warning: "#b42c01"
  moderate: "#ea700b"
  attention: "#fdb92d"
  gold: "#c1932f"

typography:
  display-guardian:
    fontFamily: "Guardian, Helvetica Neue, Helvetica, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 60px
  heading-6:
    fontFamily: "BentonSans, Helvetica Neue, Helvetica, sans-serif"
    fontSize: 38px
    fontWeight: 300
    lineHeight: 44px
  heading-5:
    fontFamily: "BentonSans, Helvetica Neue, Helvetica, sans-serif"
    fontSize: 30px
    fontWeight: 300
    lineHeight: 38px
  heading-4:
    fontFamily: "BentonSans, Helvetica Neue, Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  heading-3:
    fontFamily: "\"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  eyebrow:
    fontFamily: "BentonSans, Helvetica Neue, Helvetica, sans-serif"
    fontSize: 13px
    fontWeight: 600
    lineHeight: 18px
  body-lg:
    fontFamily: "\"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  body-3:
    fontFamily: "\"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-1:
    fontFamily: "\"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22px
  body-1-strong:
    fontFamily: "\"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 22px
  small:
    fontFamily: "\"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  button-sm:
    fontFamily: "\"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22px
  button-signin:
    fontFamily: "\"Helvetica Neue\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav-link:
    fontFamily: "\"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 21.8501px
  footer-link:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  footer-legal:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  mobile-body:
    fontFamily: "\"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px

rounded:
  xs: 3px
  sm: 4px
  md: 8px

spacing:
  s2: 2px
  s6: 6px
  s8: 8px
  s10: 10px
  s12: 12px
  s13: 13px
  s16: 16px
  s20: 20px
  s24: 24px
  s30: 30px
  s40: 40px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 13px 30px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-primary-active:
    backgroundColor: "{colors.primary-active}"
  button-signin:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    borderColor: "{colors.primary}"
    typography: "{typography.button-signin}"
    rounded: "{rounded.md}"
    padding: 11px 23px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    borderColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 13px 30px
    height: 50px
  button-secondary-hover:
    backgroundColor: "{colors.secondary-hover-fill}"
    textColor: "{colors.bright-blue-hover}"
    borderColor: "{colors.secondary-hover-border}"
  button-sm:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.xs}"
    padding: 8px 20px
  button-disabled:
    backgroundColor: "{colors.gray-01}"
    textColor: "{colors.gray-04}"
    borderColor: "{colors.gray-03}"
  text-input:
    backgroundColor: "{colors.gray-01}"
    textColor: "{colors.ink}"
    borderColor: "{colors.gray-04}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 10px
    height: 50px
  text-input-focus:
    borderColor: "{colors.primary}"
  card-product:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.gray-03}"
    typography: "{typography.body-1}"
    rounded: 4px 4px 0px 0px
    padding: 10px 20px
  offers-band:
    backgroundColor: "{colors.gray-02}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-5}"
  promo-tile-dark:
    backgroundColor: "{colors.gray-05}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-lg}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-link}"
    typography: "{typography.nav-link}"
    height: 64px
  link:
    textColor: "{colors.gray-05}"
    typography: "{typography.body-1}"
    textDecoration: underline
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading}"
    typography: "{typography.footer-link}"
    padding: 0px 0px 16px
---

## Overview

The extraction of https://www.americanexpress.com landed on the Thailand market homepage (`/th-th/`, geo-redirected), so the measured page is in Thai. It runs the same global Amex front end as the other markets: the DLS stylesheet `@americanexpress/dls` 6.23.1, the DLS icon font `dls-icons-2.27.0`, and `dls-fonts` 1.2.0 (BentonSans, Guardian).

The page is white, tidy and dense in the way of a bank portal, not a lifestyle site. A 64px white header carries the Blue Box logo at far left, then six blue menu labels (My Account, Our Cards, Points, Privileges, Insurance, Business Cards). At far right sit a search icon, a "Contact us" link and a solid Bright Blue "Log in" button with 8px corners. Below the header, a bordered notice box with an "i" icon gives a flood-relief message in gray `#53565a` text with an underlined inline link and a close "×".

The hero is a three-column mosaic rather than one big banner:
- **Left:** a stack of three white card tiles. Each shows small card art (Platinum, Platinum Credit, Gold) with a blue 16px/600 product name and a 13px gray description, divided by 1px `#c8c9c7` rules.
- **Center:** a tall underwater photograph (diver beside a whale shark, the Platinum card floating above). It carries a white BentonSans Light 30px/38px headline, a 15px/600 offer line and a white "Apply" button with blue text.
- **Right:** two stacked promo tiles. The top one is a photo over a `#53565a` gray text panel; the bottom one is a lavender-field photo over a `#ecedee` panel. Both use 20px/26px Helvetica Neue text.

Below, a `#ecedee` band titled in BentonSans Light 30px ("Latest offers and privileges from American Express") holds three photo cards with outlined blue buttons. A patterned light-gray band follows with three white icon cards ("Assistance", "Online fraud protection", "Compare cards"), each with a solid Bright Blue full-width button. The footer is white, with BentonSans 13px uppercase column heads, Bright Blue link lists, the "AMERICAN EXPRESS" wordmark, a country switcher with flag, and a row of legal links separated by vertical bars.

**Key Characteristics:**
- Bright Blue `#006fcf` is the brand color for the logo, every link, and every primary button. It is also the most-read text color on the page by characters, because so much of the page is links.
- Body ink is DLS gray-06 `#333333`, never black. Secondary text is gray-05 `#53565a`.
- Light 300-weight BentonSans for display and Helvetica Neue for reading and UI.
- Rectangular geometry: 4px button radius, 4px card corners, no pills.
- Flat white cards lifted by the DLS `shadow-1` (`0 1px 1px 0 rgba(0,0,0,.1)`).
- Generous 50px button height with `13px 30px` padding.
- Accessibility focus treatment: `outline: 1px dashed #53565a; outline-offset: 3px` on links, buttons and inputs.

## Colors

> Sources: computed styles on the measured homepage, plus the official DLS stylesheet served by the site, https://www.aexp-static.com/cdaas/one/statics/@americanexpress/dls/6.23.1/package/dist/6.23.1/styles/dls.min.css. DLS class names are in parentheses.

### Brand & Accent
- **Bright Blue** (`{colors.primary}` `#006fcf`, `.dls-bright-blue`): Primary buttons, links, the Blue Box logo, product names on card tiles.
- **Primary hover** (`{colors.primary-hover}` `#0069c4`): `.btn-primary:hover` in DLS, and measured as the hover fill of the blue content buttons.
- **Primary active** (`{colors.primary-active}` `#0063b9`): `.btn-primary:active`.
- **Bright Blue Hover / Active** (`{colors.bright-blue-hover}` `#0065bd`, `.dls-bright-blue-hover`; `{colors.bright-blue-active}` `#005aa8`, `.dls-bright-blue-active`): Text and icon color states. `#0065bd` is the measured text color of a hovered secondary button.
- **Secondary hover** (`{colors.secondary-hover-fill}` `#f2f2f2` fill, `{colors.secondary-hover-border}` `#0061b6` border): `.btn-secondary:hover`, matching the measured hover.
- **Nav blue** (`{colors.nav-link}` `#0066be`): Measured color of the header menu labels.
- **Deep Blue** (`{colors.deep-blue}` `#00175a`, `.dls-deep-blue`): The darker brand blue, used for focus-ring insets and selected states in CSS (`inset 0 -4px 0 0 #00175a` tab indicator).
- **Tints** (`{colors.bright-blue-60}` `#66a9e2`, `{colors.bright-blue-20}` `#cce2f5`): `.dls-bright-blue-60` / `-20`. DLS also defines `-40` `#99c5ec`, and deep-blue tints `#66749c`, `#99a2bd` and `#ccd1de`.

### Surface
- **Canvas** (`{colors.canvas}` `#ffffff`, `.dls-white`).
- **Gray 01** (`{colors.gray-01}` `#f7f8f9`): Input fill and disabled button fill.
- **Gray 02** (`{colors.gray-02}` `#ecedee`): The offers band and light promo tile; `.border` hairline color.
- **Gray 03** (`{colors.gray-03}` `#c8c9c7`): Card-tile borders, disabled borders.
- **Gray 04** (`{colors.gray-04}` `#8e9092`): Input border, disabled text, `.dls-color-neutral`.
- **Gray 05** (`{colors.gray-05}` `#53565a`): Dark promo tile fill, secondary text, focus outline color.

### Text
- **Ink** (`{colors.ink}` `#333333`, `.dls-gray-06`): Paragraph text (the measured `bodyText`, 20px/26px).
- **Heading ink** (`{colors.ink-heading}` `#3d3d3d`): Footer column heads and legal copy.
- **Secondary** (`{colors.gray-05}` `#53565a`): Notice text, inline links in notices, `.label-1`.
- **On primary** (`{colors.on-primary}` `#ffffff`).

### Semantic
From the DLS stylesheet (no semantic states are visible on the homepage):
- **Success** (`{colors.success}` `#008767`, `.dls-green`, `.dls-color-success-bg`).
- **Warning / error** (`{colors.warning}` `#b42c01`, `.dls-red`, `.dls-color-warning-bg`).
- **Moderate** (`{colors.moderate}` `#ea700b`, `.dls-orange`).
- **Attention** (`{colors.attention}` `#fdb92d`, `.dls-color-attention-bg`, `.dls-dark-yellow-bg`).
- **Gold** (`{colors.gold}` `#c1932f`, `.dls-gold-bg`): Card-tier accent.

## Typography

### Font Family
- **BentonSans** (loaded weights 300, 400, 700 from `dls-fonts`): Display and section headings. DLS sets `.heading-4`, `.heading-5` and `.heading-6` in `BentonSans, Helvetica Neue, Helvetica, sans-serif`.
- **Helvetica Neue** (system font): Body, buttons, card text, nav labels. DLS `.body-*`, `.heading-2`, `.heading-3` and `.label-*` use `Helvetica Neue, Helvetica, sans-serif`.
- **Guardian** (served by `dls-fonts/1.2.0/.../guardianregular.woff2`): The DLS `-g` heading variants (`.heading-7-g`, `.heading-5-g`); not rendered on the measured page.
- **System stack** (`-apple-system, "system-ui", "Segoe UI", Roboto, …`): The global header and footer partials.
- `amex-card-number` and `amex-card-name` faces exist for rendering card art; `dls-icons-2.27.0` is the icon font.

### Hierarchy

| Token | Family | Size | Weight | Line height | Source |
|---|---|---|---|---|---|
| `display-guardian` | Guardian | 48px | 400 | 60px | DLS `.heading-7-g` (cited) |
| `heading-6` | BentonSans | 38px | 300 | 44px | DLS `.heading-6` (cited) |
| `heading-5` | BentonSans | 30px | 300 | 38px | measured hero + offers title; DLS `.heading-5` |
| `heading-4` | BentonSans | 20px | 400 | 28px | measured; DLS `.heading-4` |
| `heading-3` | Helvetica Neue | 16px | 600 | 24px | measured h3; DLS `.heading-3` |
| `eyebrow` | BentonSans | 13px | 600 | 18px | measured footer h2 (uppercase) |
| `body-lg` | Helvetica Neue | 20px | 400 | 26px | measured promo copy (`bodyText`) |
| `body-3` | Helvetica Neue | 16px | 400 | 24px | DLS `.body-3`; mobile body |
| `body-1` | Helvetica Neue | 15px | 400 | 22px | measured; DLS `.body-1` |
| `body-1-strong` | Helvetica Neue | 15px | 600 | 22px | measured offer line; DLS `.body-2` |
| `small` | Helvetica Neue | 13px | 400 | 20px | measured card descriptions |
| `button` | Helvetica Neue | 16px | 400 | 22px | measured; DLS `.btn` |
| `button-sm` | Helvetica Neue | 15px | 400 | 22px | DLS `.btn-sm` (cited) |
| `button-signin` | Helvetica Neue | 16px | 500 | 24px | measured header button |
| `nav-link` | Helvetica Neue | 15px | 500 | 21.8501px | measured header menu |
| `footer-link` | system stack | 16px | 400 | 24px | measured |
| `footer-legal` | system stack | 14px | 400 | 22px | measured |
| `mobile-body` | Helvetica Neue | 16px | 400 | 24px | measured at 390px |

Note: the page's `<h1>` element itself computes to Helvetica Neue 30px/500 with a 22px line height. Its visible text is a child `<p>` set in BentonSans 30px/300/38px (the DLS `heading-5` look). The tokens follow the visible text, and the override is recorded in `SOURCES.json`.

### Principles
- Large type is light: 300 at 30px and 38px. Weight increases only as size drops (600 at 16px and below).
- No letter-spacing anywhere; none was measured.
- Uppercase is reserved for small eyebrows (`.heading-1` / `.label-1`: 13px/18px uppercase).
- DLS sizes are rem-based steps: 0.8125rem (13px), 0.9375rem (15px), 1rem, 1.25rem (20px), 1.875rem (30px), 2.375rem (38px), 3rem (48px).

### Note on Font Substitutes
BentonSans and Guardian are licensed commercial typefaces delivered only through Amex's own `dls-fonts` package (no foundry or license terms were confirmed from an official Amex source, so none are named here). The DLS stacks already define the fallback: `Helvetica Neue, Helvetica, sans-serif`. Keep weight 300 for display when substituting, because the light weight is the brand's look.

## Layout

### Spacing System
- DLS spacing utilities center on 20px (`.pad { padding: 1.25rem }`, `.pad-lr`, `.pad-tb`, …) with responsive container padding of 10px → 12px → 18px → 20px across breakpoints (`.container`, `.pad-responsive`).
- Measured paddings: 10px (34), 20px (28), 3px (16), 13px (13), 16px (11), 30px (10), 24px (8), 12px (7). Gaps: 8px (20), 16px (1).
- Buttons: `13px 30px` (DLS `.btn`: `.8125rem 1.875rem`); small buttons `8px 20px` (`.btn-sm`: `.5rem 1.25rem`).

### Grid & Container
- DLS ships a 12-column flex grid (`.col-md-6 { flex: 0 0 50%; max-width: 50% }`) with breakpoints at 375px, 768px, 1024px and 1280px.
- The measured homepage mosaic uses three columns (left tile stack, center hero, right promo stack) inside a container with about 24px side margins at 1280px.

### Whitespace Philosophy
Compact. Sections sit close together, with roughly 16–20px between bands in the capture, and the content is grouped into bordered or shaded boxes rather than separated by large empty space.

## Elevation & Depth

| Level | Shadow (DLS class) | Use |
|---|---|---|
| 0 | none | page, bands |
| 1 | `0 1px 1px 0 rgba(0,0,0,.1)` (`.shadow-1`, `.card`) | product and icon cards (measured) |
| 2 | `0 5px 10px 0 rgba(0,0,0,.1)` (`.shadow-2`) | dropdowns |
| 3 | `0 13px 26px 0 rgba(0,0,0,.1)` (`.shadow-3`; `.card-actionable:hover`) | actionable card hover, which also lifts the card with `translateY(-10px)` |

### Decorative Depth
The icon-card band sits on a very light gray background with a faint line-art pattern. The hero relies on photography (underwater, travel, home life) with the physical card composited into the scene.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 3px | small buttons (`.btn-sm` `.1875rem`), skip link |
| `{rounded.sm}` | 4px | standard buttons (`.btn` `.25rem`), inputs, card stacks (`4px 4px 0 0` top / `0 0 4px 4px` bottom) |
| `{rounded.md}` | 8px | header "Log in" button |

There are no pill buttons. Circles are used only for icons.

### Photography Geometry
Photos are full-bleed inside their tiles with square corners (the tile supplies the 4px radius). Card art is shown at a slight perspective in the hero and flat in the tile stack.

## Components

### Buttons
- **Primary** (`button-primary`): `#006fcf`, white 16px/400/22px text, radius 4px, padding `13px 30px`, 50px tall. DLS `.btn` also sets `min-width: 11.25rem` (180px) and `max-width: 17.5rem` (280px) with ellipsis overflow. Hover fill `#0069c4` (measured and DLS); active `#0063b9`.
- **Header sign-in** (`button-signin`): `#006fcf` with a 1px `#006fcf` border, 16px/500/24px, radius 8px, padding `11px 23px`, 48px tall. Hover only adds an underline.
- **Secondary** (`button-secondary`): white fill, `#006fcf` text and 1px border. Hover: `#f2f2f2` fill, `#0061b6` border, `#0065bd` text (DLS `.btn-secondary:hover`; measured).
- **On-image white** variant: white fill, blue text, white border ("Apply" in the hero); hover `#f2f2f2` fill with `#0065bd` text.
- **Small** (`button-sm`): 15px/22px, padding `8px 20px`, radius 3px, min 110px / max 260px (DLS `.btn-sm`).
- **Disabled** (`button-disabled`): `#f7f8f9` fill, `#c8c9c7` border, `#8e9092` text (DLS `.btn:disabled`).

### Cards & Containers
- **Product tile stack** (`card-product`): white tiles with 1px `#c8c9c7` borders; the top tile has `4px 4px 0 0` corners and the bottom tile `0 0 4px 4px`, so the stack reads as one rounded card. Each tile has `10px 20px` padding, card art, a 16px/600 blue product name and 13px/20px gray description. 
- **Offer card**: photo on top, 20px/28px BentonSans title, outlined blue button below, on white with `shadow-1`, inside a `#ecedee` band.
- **Icon card**: centered blue line icon, 16px/600 title, full-width solid blue button.
- **Promo tile** (`promo-tile-dark`): photo over a `#53565a` text panel with white 20px/26px copy; a light variant uses `#ecedee` with `#333333` text.

### Inputs & Forms
From the DLS stylesheet (no input on the homepage): `.form-control` has `#f7f8f9` fill, `.0625rem solid #8e9092` border, radius `.25rem`, `#333` text at 16px/22px, `min-height: 3.125rem` (50px), padding `0 .625rem`. Focus changes the border to `#006fcf`, and the placeholder is `#53565a`.

### Navigation
- **Header** (`nav`): 64px tall, white, logo + six 15px/500 `#0066be` menu labels, and on the right search / Contact us / Log in. A "Skip to content" link appears on focus (`#333333` fill, `0 0 3px 3px` radius).
- **Notice banner**: full-width bordered box with an info icon, `#53565a` 15px/22px copy and a close icon.

### Links
Inline links in body copy are `#53565a` and underlined in notices. Navigation and footer links are Bright Blue without underline; header links ("Contact us") gain an underline on hover (measured).

### Pills, Tags, and Chips
DLS ships `.tag`, `.badge` and `.label` components; none appear on the measured homepage.

### Signature Components
- **Card-art tiles**: the physical card image is the hero of every product mention. DLS includes card color classes (`.dls-card-gold`, `.dls-card-platinum`, `.dls-card-centurion`, `.dls-card-green`, …).
- **Blue Box logo**: the square Bright Blue logo with white "AMERICAN EXPRESS" lettering at top left; the footer uses the horizontal blue wordmark.

## Design System Architecture

American Express builds its web UI with the **DLS (Design Language System)**. Its documentation site is on an internal `americanexpress.com` host that refused connections from this environment, so nothing is cited from it. The architecture below comes from the official DLS assets the live site ships, which were opened directly:
- the page HTML of https://www.americanexpress.com/th-th/
- the stylesheet https://www.aexp-static.com/cdaas/one/statics/@americanexpress/dls/6.23.1/package/dist/6.23.1/styles/dls.min.css

**Token architecture.**
- *Classic DLS (v6)* exposes tokens as utility classes rather than CSS variables, named by hue and step:
  - text color: `.dls-bright-blue`, `.dls-deep-blue`, `.dls-gray-01` … `.dls-gray-06`, `.dls-bright-blue-hover`, `.dls-bright-blue-active`, `.dls-bright-blue-20/-40/-60`
  - background: the `-bg` suffix (`.dls-gray-02-bg`), with `-bg-hvr` for hover
  - semantic: `.dls-color-success`, `.dls-color-warning`, `.dls-color-attention`, `.dls-color-moderate`, `.dls-color-neutral`
  - card-product colors: `.dls-card-*`, `.dls-cobrand-*`
  - data-viz: `.dls-trend-*`, `.dls-fico-*`
- *Newer DLS* partials (the global header and footer, inlined in the HTML) use generated custom properties `--ds-0` … `--ds-1086`. These are primitive steps aliased into semantic slots, for example `--ds-1085: #00175a` and `--ds-1086: #0066be` in light mode.

**Theming.**
- The newer layer switches modes with data attributes: `[data-dls-mode=light]`, `[data-dls-mode=dark]` (deep-navy primitives such as `--ds-6: #00081f`), and `[data-dls-mode=system]` paired with `@media (prefers-color-scheme: dark)`.
- Surface layering uses `[data-dls-surface=base|foreground|fg-subtle]`, which remaps the same variables per surface.
- The measured homepage renders in light mode.

**Type & spacing.**
- Named type classes: `.heading-1` … `.heading-7` (with Guardian `-g` variants), `.body-1` … `.body-3`, `.label-1` … `.label-3`. All are rem-based, with sizes .8125 / .9375 / 1 / 1.25 / 1.875 / 2.375 / 3rem.
- Spacing centers on 1.25rem (`.pad`, `.pad-lr`, …), with responsive container gutters of 10 / 12 / 18 / 20px at breakpoints 375 / 768 / 1024 / 1280px.

**Component model.**
- The DLS stylesheet contains components for accordion, alert, badge, breadcrumb, buttons (`.btn`, `.btn-secondary`, `.btn-tertiary`, `.btn-sm`, `.btn-icon`, white variants), card (`.card`, `.card-actionable`), carousel, checkbox, form-control, hero, label, modal, nav, pagination, progress, radio, search, select, slider, stepper, switch, tabs, table, tag, toggle and tooltip.
- States are explicit classes and pseudo-classes: hover, active, disabled and focus.

**Accessibility.**
- DLS enforces a visible focus style everywhere: `:focus { outline: 1px dashed #53565a; outline-offset: 3px }`. White buttons on imagery use `outline: 1px dashed hsla(0,0%,100%,.92)`.
- A `prefers-reduced-motion` media query is present.
- Buttons are at least 50px tall (small variant excepted), and disabled styling uses gray fill plus gray text.

**Delivery.**
- Versioned npm-style packages served from Amex's CDN: `@americanexpress/dls` 6.23.1 (CSS + `dls.min.js`), `@americanexpress/dls-icons` 0.5.0, `dls-fonts` 1.2.0, and an icon font `dls-icons-2.27.0`.
- The homepage itself is the `@americanexpress/homepage-frontend` 3.17.9 package.
- These packages are not on the public npm registry (an npm search for "americanexpress dls" returned no Amex packages).

## Do's and Don'ts

### Do
- Use `#006fcf` for every action and link, and `#333333` for reading text.
- Set section headlines in BentonSans 300 at 30px/38px; set UI and body in Helvetica Neue.
- Make primary buttons 50px tall with `13px 30px` padding and 4px corners.
- Use the DLS hover values exactly: primary `#0069c4`; secondary `#f2f2f2` fill / `#0061b6` border / `#0065bd` text.
- Lift white cards with `0 1px 1px 0 rgba(0,0,0,.1)` only.
- Show the physical card art wherever a product is named.
- Keep the 1px dashed `#53565a` focus outline with 3px offset.

### Don't
- Don't use pill-shaped or heavily rounded buttons.
- Don't set display headlines in bold; Amex display is light.
- Don't use pure black body text.
- Don't introduce new blues; the DLS ramp is Bright Blue, Deep Blue and their 20/40/60 tints.
- Don't remove focus outlines or swap them for glows.
- Don't place Bright Blue text on Deep Blue or on photos without a white button container.

## Responsive Behavior

### Breakpoints
DLS breakpoints: 375px, 768px, 1024px, 1280px (`min-width` and `max-width` media queries in dls.min.css).

At 390px (measured):
- Body text goes from 20px/26px to 16px/24px (`mobile-body`).
- The h1 wrapper keeps 30px.
- The most-set sizes become 16px, 15px, 24px, 14px, 30px and 13px.
- The primary button becomes the 50px blue "Learn more" at 308px wide (full width minus gutters).

### Touch Targets
Standard buttons are 50px tall and the header sign-in is 48px.

### Collapsing Strategy
- Mobile header behaviour was not measured.
- Mobile hero mosaic layout was not measured.
- Card bands become single cards in a row.

### Image Behavior
Hero photography crops around the card art and keeps the white headline legible over its darkest region.

## Iteration Guide

1. White canvas, `#333333` Helvetica Neue body at 15px/22px or 16px/24px.
2. Header: 64px, Blue Box at left, 15px/500 `#0066be` menu labels, an 8px-radius blue "Log in" at right.
3. Section titles in BentonSans 300 30px/38px; small uppercase BentonSans 13px/600 eyebrows.
4. Buttons: 50px, 4px radius, `13px 30px`, Bright Blue or outlined; apply the exact DLS hover colors.
5. Cards: white, `shadow-1`, 4px corners, `#c8c9c7` dividers between stacked tiles.
6. Use `#ecedee` for tinted bands and `#53565a` for dark promo panels.
7. Add semantic colors only from DLS: success `#008767`, warning `#b42c01`, moderate `#ea700b`, attention `#fdb92d`.
8. Check focus: 1px dashed `#53565a`, 3px offset.
