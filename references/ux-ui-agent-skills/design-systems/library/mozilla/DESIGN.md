---
version: alpha
name: Mozilla
category: "Government & Nonprofit"
description: "Mozilla.org's 2024 \"m24\" identity as shipped on mozilla.org — Mozilla Headline (600) display type at 80px with -0.8px tracking over Mozilla Text body copy at 18px, a near-monochrome palette of #000000 ink on #ffffff and full-bleed #161616 off-black bands, the #00d230 pixel-M green, pale pink #fff1f8 and mint #d6ffcd section tints, and square 0px corners on every button, input and panel."

colors:
  primary: "#00d230"
  canvas: "#ffffff"
  ink: "#000000"
  off-black: "#161616"
  off-white: "#fafafa"
  dark-gray: "#414141"
  dark-mid-gray: "#6d6d6d"
  mid-gray: "#b3b3b3"
  light-mid-gray: "#e8e8e8"
  light-green: "#d6ffcd"
  dark-green: "#022611"
  pink: "#ff97e2"
  light-pink: "#fff1f8"
  dark-pink: "#210340"
  orange: "#ff9456"
  light-orange: "#faf0e6"
  dark-orange: "#330505"
  on-dark: "#ffffff"

typography:
  display-2xl:
    fontFamily: "'Mozilla Headline', 'Helvetica Neue', Arial, X-LocaleSpecific, sans-serif"
    fontSize: 80px
    fontWeight: 600
    lineHeight: 80px
    letterSpacing: -0.8px
  display-xl:
    fontFamily: "'Mozilla Headline', 'Helvetica Neue', Arial, X-LocaleSpecific, sans-serif"
    fontSize: 64px
    fontWeight: 600
    lineHeight: 64px
    letterSpacing: -0.64px
  display-mobile:
    fontFamily: "'Mozilla Headline', 'Helvetica Neue', Arial, X-LocaleSpecific, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 48px
    letterSpacing: -0.48px
  heading-lg:
    fontFamily: "'Mozilla Headline', 'Helvetica Neue', Arial, X-LocaleSpecific, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 35.2px
    letterSpacing: -0.32px
  link-display:
    fontFamily: "'Mozilla Headline', 'Helvetica Neue', Arial, X-LocaleSpecific, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 26.4px
  body-xl:
    fontFamily: "'Mozilla Text', 'Helvetica Neue', Arial, X-LocaleSpecific, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 30px
  body-lg:
    fontFamily: "'Mozilla Text', 'Helvetica Neue', Arial, X-LocaleSpecific, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 22.5px
  body-md:
    fontFamily: "'Mozilla Text', 'Helvetica Neue', Arial, X-LocaleSpecific, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  body-sm:
    fontFamily: "'Mozilla Text', 'Helvetica Neue', Arial, X-LocaleSpecific, sans-serif"
    fontSize: 14px
    fontWeight: 400
  button:
    fontFamily: "'Mozilla Text', 'Helvetica Neue', Arial, X-LocaleSpecific, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
  label:
    fontFamily: "'Mozilla Text', 'Helvetica Neue', Arial, X-LocaleSpecific, sans-serif"
    fontSize: 12px
    fontWeight: 600

rounded:
  none: 0px
  sm: 4px
  lg: 16px

spacing:
  2xs: 4px
  xs: 8px
  gutter: 12px
  md: 16px
  lg: 24px
  xl: 32px
  section: 48px
  2xl: 64px
  3xl: 80px

components:
  button-primary:
    backgroundColor: "{colors.off-black}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 24px
    height: 40px
    border: "2px solid #ffffff"
  button-ghost-small:
    backgroundColor: "{colors.off-black}"
    textColor: "{colors.on-dark}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
    padding: 8px
    height: 32px
    border: "1px solid #414141"
  button-ghost-small-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid #ffffff"
  link-display:
    textColor: "{colors.on-dark}"
    typography: "{typography.link-display}"
    backgroundImage: "linear-gradient(to right, rgb(255, 255, 255) 0px, rgb(255, 255, 255) 33%, rgba(0, 0, 0, 0) 33%, rgba(0, 0, 0, 0) 66%, rgb(255, 255, 255) 66%, rgb(255, 255, 255) 100%)"
    padding: 0px
  link-inline:
    textColor: "{colors.ink}"
    typography: "{typography.body-lg}"
    textDecoration: underline
  link-inline-hover:
    textDecoration: none
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link-hover:
    textColor: "{colors.dark-green}"
  product-row-hover:
    backgroundColor: "{colors.off-white}"
    textColor: "{colors.ink}"
  text-input-on-dark:
    backgroundColor: "{colors.dark-gray}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body-md}"
    rounded: "{rounded.none}"
    padding: 8px
    height: 40px
    border: "2px solid #ffffff"
  select-on-dark:
    backgroundColor: "{colors.off-black}"
    textColor: "{colors.off-white}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 40px 8px 36px
    height: 40px
    border: "2px solid #fafafa"
  footer:
    backgroundColor: "{colors.off-black}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body-md}"
    padding: 64px 0px 0px
---

## Overview

Mozilla.org is a black-and-white site with one loud colour. The capture of the US homepage opens on a thin
white header bar (the "Mozilla" wordmark with the pixel "M" glyph at left, "Products" and "About us" centred),
then drops straight into a full-bleed `{colors.off-black}` (`#161616`) hero. Inside it sit a white
`{typography.display-2xl}` headline — "Welcome to Mozilla", Mozilla Headline 80px / 600 with -0.8px
tracking — a two-line `{typography.body-xl}` deck, a white "Learn about us" display link, and on the right a
large pixel-built "M" drawn in `{colors.primary}` (`#00d230`). That green is the only saturated colour above
the fold.

The second thing you notice is the edge. The dark hero does not end in a straight line: its bottom edge steps
down in rectangular blocks, like pixels of a low-resolution bitmap, before the white section begins. The same
stepped edge repeats where the pale-pink donation band (`{colors.light-pink}` `#fff1f8`) gives way to the next
dark band. This stepped, pixel-grid geometry is the identity's main graphic device; there are no curves, no
gradients and no shadows anywhere in the capture.

Below the hero, the "Love the internet again" section is a plain white editorial list: seven product rows
(Firefox, Thunderbird, Mozilla VPN, Mozilla Monitor, Firefox Relay, 0DIN, Tabstack), each a product icon plus
bold name on the left, a one-line `{typography.body-sm}` description in the middle, and an arrow at the far right,
separated by hairlines. Hovering a row fills it with `{colors.off-white}` (`#fafafa`). Then a pink donation
band with a collage of event photography, then another `#161616` band ("Join the movement: AI for the
people") holding product cards with small black "Product" chips.

The voice is direct and slogan-like: "Love the internet again", "Join the movement", "We're proudly
non-profit. Will you donate to Mozilla today?". Calls to action are underlined text links far more often
than buttons.

**Key Characteristics:**
- Near-monochrome: `{colors.ink}` `#000000` on `{colors.canvas}` `#ffffff`, alternating with full-bleed `{colors.off-black}` `#161616` bands.
- One signature accent, `{colors.primary}` `#00d230`, used for the pixel "M" mark — not for buttons.
- Pastel section tints from the m24 palette: `{colors.light-pink}` `#fff1f8`, `{colors.light-green}` `#d6ffcd`.
- Mozilla Headline (600) for every heading, always with -0.01em tracking (-0.8px at 80px, -0.64px at 64px, -0.32px at 32px).
- Mozilla Text for everything else: 18px body on desktop, 16px on mobile.
- Square corners: every measured button, input, select, row and band has `border-radius: 0px`.
- Stepped "pixel" edges between colour bands instead of straight or curved dividers.
- Links are the primary CTA form: display links with a custom drawn underline, inline links underlined until hover.

## Colors

> **Source pages:** homepage `https://www.mozilla.org/en-US/` and `https://www.mozilla.org/en-US/about/`
> (both measured with the extractor). Token names below are the site's own CSS custom properties
> (`--m24-*`), read from the live `:root`, and match the `@mozilla-protocol/tokens` aliases.

### Brand & Accent
- **Green** (`{colors.primary}` — `#00d230`, `--m24-green`): the pixel "M" in the hero; the brand's single signature hue. It is an identity colour, not an action colour — no measured button uses it.
- **Light Green** (`{colors.light-green}` — `#d6ffcd`, `--m24-light-green`): section tint (`.m24-t-green`); also the inverse link-hover colour (`--link-color-hover-inverse`).
- **Dark Green** (`{colors.dark-green}` — `#022611`, `--m24-dark-green`): link hover colour on light surfaces (`--link-color-hover`). Measured: nav links "Products" / "About us" go from `#000000` to `#022611` on hover.
- **Pink** (`{colors.pink}` — `#ff97e2`, `--m24-pink`), **Light Pink** (`{colors.light-pink}` — `#fff1f8`), **Dark Pink** (`{colors.dark-pink}` — `#210340`).
- **Orange** (`{colors.orange}` — `#ff9456`), **Light Orange** (`{colors.light-orange}` — `#faf0e6`, served as the CSS keyword `linen`), **Dark Orange** (`{colors.dark-orange}` — `#330505`).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`, `--m24-white`): body background and the white editorial sections.
- **Off-Black** (`{colors.off-black}` — `#161616`, `--m24-off-black`): full-bleed hero, movement band and footer. By area it is the largest background on the homepage (weight 5382 vs 1376 for white).
- **Off-White** (`{colors.off-white}` — `#fafafa`, `--m24-off-white` / `--m24-light-gray`): product-row hover fill and the `.m24-t-alt` / gray band background.
- **Light Pink** (`{colors.light-pink}` — `#fff1f8`): donation band on the homepage; the largest tinted area on /about/.
- **Light Green** (`{colors.light-green}` — `#d6ffcd`): second-largest tinted area on /about/.

### Text
- **Ink** (`{colors.ink}` — `#000000`, `--m24-black`, `--body-text-color`): all body and heading text on light surfaces.
- **On-Dark** (`{colors.on-dark}` — `#ffffff`): text on `#161616` bands (`--body-text-color-inverse`).
- **Dark Gray** (`{colors.dark-gray}` — `#414141`, `--m24-dark-gray`): secondary text (`--body-text-color-secondary`), the third most-read text colour on the homepage; also the newsletter input fill and the ghost-button border.
- **Dark Mid Gray** (`{colors.dark-mid-gray}` — `#6d6d6d`), **Mid Gray** (`{colors.mid-gray}` — `#b3b3b3`), **Light Mid Gray** (`{colors.light-mid-gray}` — `#e8e8e8`): the gray ramp.

### Dark mode
There is no prefers-color-scheme dark mode. "Dark" is a section theme: the bedrock mixin `invert-colors`
swaps the values of the `--m24-*` variables (white ↔ black, off-white ↔ off-black, light ↔ dark grays), and
`.m24-t-dark` applies it to a band. See Design System Architecture.

## Typography

### Font Family
Two families, both served from mozilla.org as web fonts (loaded faces measured: `Mozilla Headline 600`,
`Mozilla Text 400`, `Mozilla Text 600`, `Mozilla Text 700`):

- **Mozilla Headline** — every h1/h2/h3 and the display links. Stack:
  `"Mozilla Headline", "Helvetica Neue", Arial, X-LocaleSpecific, sans-serif` (`--title-font-family`).
  Weight 600 (`--title-font-weight: 600`), tracking `--title-letter-spacing: -0.01em`.
- **Mozilla Text** — body, nav, buttons, inputs. Stack:
  `"Mozilla Text", "Helvetica Neue", Arial, X-LocaleSpecific, sans-serif` (`--body-font-family`,
  `--button-font-family`).

By characters on the homepage, Mozilla Text carries 4237 vs 453 for Mozilla Headline. Both have
`--body-font-ligatures: none` / `--title-font-ligatures: none`.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Measured on |
|---|---|---|---|---|---|---|
| `{typography.display-2xl}` | Mozilla Headline | 80px | 600 | 80px | -0.8px | h1 "Welcome to Mozilla" / "Guard the Open Internet" |
| `{typography.display-xl}` | Mozilla Headline | 64px | 600 | 64px | -0.64px | h2 "Love the internet again" |
| `{typography.display-mobile}` | Mozilla Headline | 48px | 600 | 48px | -0.48px | h1 at 390px wide |
| `{typography.heading-lg}` | Mozilla Headline | 32px | 600 | 35.2px | -0.32px | h3 "Mozilla Data Collective" |
| `{typography.link-display}` | Mozilla Headline | 24px | 600 | 26.4px | — | "Learn about us", "Read our manifesto" |
| `{typography.body-xl}` | Mozilla Text | 24px | 500 | 30px | — | section deck under h2 |
| `{typography.body-lg}` | Mozilla Text | 18px | 400 | 22.5px | — | body paragraphs (desktop) |
| `{typography.body-md}` | Mozilla Text | 16px | 400 | 20px | — | base body, inputs, footer |
| `{typography.body-sm}` | Mozilla Text | 14px | 400 | — | — | product-row descriptions |
| `{typography.button}` | Mozilla Text | 16px | 600 | 20px | — | "Donate" button, language select |
| `{typography.label}` | Mozilla Text | 12px | 600 | — | — | "Play animation" control |

On /about/ the same 18px paragraph renders with a 27px line-height (1.5, `--text-body-line-height`); the
homepage paragraph measured 22.5px (1.25, `--body-line-height`). Both ratios exist in the site's variables.

### Principles
- Headings are always Mozilla Headline 600 with -0.01em tracking — the measured pairs (80/-0.8, 64/-0.64,
  48/-0.48, 32/-0.32, 16/-0.16) are exactly -1% of the size.
- Display line-height is tight: 1.0 for 80px and 64px, 1.1 for 32px.
- Body copy steps 18px (desktop) → 16px (mobile).
- Weight carries hierarchy inside body copy: 400 for prose, 500 for decks, 600 for buttons and labels, 700 for bold product names.

### Note on Font Substitutes
Both faces are open source. Google Fonts lists **Mozilla Headline** (variable, `wdth` 75–125, `wght` 200–700)
and **Mozilla Text** (`wght` axis), designer "Studio DRAMA", license OFL, added 2025-06-30, sourced from
`github.com/mozilla/mozilla-headline-type`. Use them directly — no substitute is needed. The site's own
fallback is Helvetica Neue, then Arial.

## Layout

### Spacing System
The site's spacers (`--spacer-*`) are responsive. Values read from the live `:root` at the measured width
and in the bedrock source:

| Token | Value | Variable |
|---|---|---|
| `{spacing.2xs}` | 4px | `--spacer-2xs` |
| `{spacing.xs}` | 8px | `--spacer-xs`, `--spacer-sm` (mobile) |
| `{spacing.gutter}` | 12px | most frequent flex/grid gap on the homepage |
| `{spacing.md}` | 16px | `--spacer-md` (mobile), `--container-padding` (mobile) |
| `{spacing.lg}` | 24px | `--spacer-lg` (mobile); most frequent padding |
| `{spacing.xl}` | 32px | `--spacer-xl` (mobile), `--group-spacing` (mobile) |
| `{spacing.section}` | 48px | `--section-spacing` (mobile) |
| `{spacing.2xl}` | 64px | `--spacer-2xl` (mobile); footer top padding |
| `{spacing.3xl}` | 80px | `--spacer-3xl` (mobile) |

Measured frequencies on the homepage: paddings 24px (39), 8px (16), 16px (13), 64px (9), 48px (7);
gaps 12px (22), 32px (12), 4px (7).

### Grid & Container
- 12-column grid (`$grid-columns: 12`) with `--grid-margin` and `--grid-gutter` that grow by breakpoint
  (16/8px base → 24/12px at md → 32/16px at xl, per bedrock `root.scss`).
- At 1280px the content runs 1232px wide (24px margins each side): the h2, the nav header and the footer all
  measured 1232px wide.
- Two-up splits are common: hero text vs. green mark, donation copy (610px) vs. photo collage.

### Whitespace Philosophy
Sections are generous and flat: big headline, short deck, then content, then a right-aligned underlined
link ("Explore our products", "Donate"). The product list is dense — 76px-tall link rows (measured) with hairline separators —
in contrast with the airy headline zones.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | Everything measured on the homepage and /about/ (no box-shadows found) |
| Band | Colour change `#ffffff` → `#161616` / `#fff1f8` | Depth is expressed only by alternating full-bleed bands |

The stylesheet corpus contains Protocol shadows (e.g. `0 0 0 2px rgba(0,144,237,.5)` focus rings and
`0 5px 16px 2px rgba(29,17,51,.25)`), but none rendered on the measured m24 pages. Do not add shadows.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Every measured button, input, select, row, card and band |
| `{rounded.sm}` | 4px | Present in the stylesheet corpus (Protocol components), not seen on m24 surfaces |
| `{rounded.lg}` | 16px | Present once in the stylesheet corpus |

### Pixel geometry
- Band edges are stepped: the bottom of the dark hero descends in rectangular blocks (visible in the capture
  at the hero/white and pink/dark transitions). Reproduce with stacked rectangles or a polygon, never a curve.
- The logo "M" and the large hero mark are built from square pixels.
- Photography in the donation collage is cropped into rectangles that themselves step at their edges.

## Components

### Buttons

**`button-primary`** — the "Donate" button in the /about/ header (measured).
- Background `{colors.off-black}` `#161616`, text `{colors.on-dark}` `#ffffff`, border `2px solid #ffffff`.
- Type `{typography.button}` (Mozilla Text 16px / 600 / 20px), padding `8px 24px`, height 40px,
  radius `{rounded.none}` 0px.

**`button-ghost-small`** — the "Play animation" toggle in the hero (measured).
- Background `#161616`, text `#ffffff`, border `1px solid #414141`, type `{typography.label}` 12px / 600,
  padding 8px, height 32px, radius 0px.
- Hover `button-ghost-small-hover` (measured): background `{colors.canvas}` `#ffffff`, text `{colors.ink}`
  `#000000`, border `#ffffff` — a full inversion.

The bedrock source class `.m24-c-button` follows the same inversion logic: black background, white text,
hover/active/focus swap to white background with black text; `.m24-t-alt` starts white and hovers to black.

### Links

**`link-display`** — "Learn about us", "Read our manifesto" (measured).
- Mozilla Headline 24px / 600 / 26.4px, white on dark bands.
- The underline is not `text-decoration`: it is a `background-image` of
  `linear-gradient(to right, rgb(255,255,255) 0px, rgb(255,255,255) 33%, rgba(0,0,0,0) 33%, rgba(0,0,0,0) 66%, rgb(255,255,255) 66%, rgb(255,255,255) 100%)`
  — a drawn line with a gap in the middle third, matching the pixel motif.

**`link-inline`** — links inside /about/ prose ("Mozilla Foundation", "MZLA") (measured).
- Ink `#000000`, `text-decoration: underline`; on hover the underline is removed (`link-inline-hover`).

### Navigation

**`nav`** — white top bar with the wordmark at left and two centred items ("Products", "About us").
- Background `{colors.canvas}`, text `{colors.ink}`.
- Hover `nav-link-hover` (measured): text and border colour go `#000000` → `{colors.dark-green}` `#022611`.

### Lists

**`product-row-hover`** — the seven product rows under "Love the internet again".
- Each row is a link (76px tall in the measured hover set). At rest transparent; on hover the background
  becomes `{colors.off-white}` `#fafafa` (measured), text stays `#000000`.

### Inputs & Forms

**`text-input-on-dark`** — homepage newsletter email field (measured).
- Background `{colors.dark-gray}` `#414141`, text `#ffffff`, border `2px solid #ffffff`, padding 8px,
  height 40px, type `{typography.body-md}`, radius 0px.

**`select-on-dark`** — footer language selector on /about/ (measured).
- Background `#161616`, text `{colors.off-white}` `#fafafa`, border `2px solid #fafafa`,
  padding `8px 40px 8px 36px` (room for a globe icon left and a white caret right), height 40px,
  type Mozilla Text 16px / 600, radius 0px.

### Footer

**`footer`** — measured on /about/.
- Background `{colors.off-black}` `#161616`, text `#ffffff`, type `{typography.body-md}`, padding
  `64px 0px 0px`. Column groups ("Company", "Leadership", "Press Center", "Careers", "Merch Store",
  "Contact" …) and the language select.

### Signature Components
- **Stepped band edge** — the pixel-step transition between colour bands.
- **Pixel "M" mark** — `#00d230` on `#161616`, large, right side of the hero.
- **Product list** — icon + name + description + arrow rows with hairline dividers and `#fafafa` hover.
- **Photo collage** — three portraits butted together into a single stepped rectangle.

## Design System Architecture

mozilla.org is built with **Protocol**, Mozilla's public design system, plus a site-specific "m24" layer in
the bedrock repository.

- **Protocol** ([protocol.mozilla.org](https://protocol.mozilla.org/)) describes itself as "a design system
  for Mozilla and Firefox websites"; npm package `@mozilla-protocol/core`, repo
  [github.com/mozilla/protocol](https://github.com/mozilla/protocol) (package version 22.0.0).
- **Tokens** live in a separate package, `@mozilla-protocol/tokens` 7.0.0
  ([github.com/mozilla/protocol-tokens](https://github.com/mozilla/protocol-tokens)). The primitive tier is
  [`tokens/_aliases.yml`](https://github.com/mozilla/protocol-tokens/blob/main/tokens/_aliases.yml), with
  verbatim names such as `color-moz-black: '#161616'`, `color-moz-black-strong: '#000000'`,
  `color-moz-white: '#fafafa'`, `color-moz-green: '#00d230'`, `color-moz-green-dark: '#022611'`,
  `color-moz-pink-light: '#fff1f8'`, `color-moz-gray-dark: '#414141'`. Category files (`colors.yml`,
  `border-radius.yml`, `box-shadow.yml`, `font-stack.yml`, `media-queries.yml`, `units.yml`) expose them.
- **m24 tier (bedrock)**: [`media/css/m24/vars/_color.scss`](https://github.com/mozilla/bedrock/blob/main/media/css/m24/vars/_color.scss)
  maps Protocol primitives to `$token-color-*` ("do not reference these directly"), then exposes
  `$m24-color-*` Sass variables that point at CSS custom properties (`$m24-color-black: var(--m24-black)`).
  [`media/css/m24/root.scss`](https://github.com/mozilla/bedrock/blob/main/media/css/m24/root.scss) sets
  those properties on `:root` (`--m24-white`, `--m24-off-black`, `--m24-green` …) together with
  `--spacer-*`, `--grid-margin`, `--grid-gutter`, `--text-title-*`, `--text-body-*`, `--text-button-*`,
  `--text-label`. A source comment notes gray names "seem to have shifted" relative to the final colours.
- **Theming**: the [Protocol themes doc](https://github.com/mozilla/protocol/blob/main/docs/01-fundamentals/02-themes.md)
  says Protocol supports two brands, Mozilla and Firefox — "The Mozilla brand is distinguished by the Mozilla
  Headline and Mozilla Text typefaces and a limited color palette, mostly black and white"; Firefox uses
  Metropolis. Themes are switched by CSS custom properties on `:root` and the Sass variable
  `$brand-theme: 'mozilla' | 'firefox'`. In bedrock, section themes are classes in
  [`theme.scss`](https://github.com/mozilla/bedrock/blob/main/media/css/m24/theme.scss): `.m24-t-alt`,
  `.m24-t-dark` (applies the `invert-colors` mixin), `.m24-t-green`, `.m24-t-orange`, `.m24-t-pink`, `.m24-t-gray`.
- **Type & spacing**: `root.scss` defines mobile values first and overrides at `$mq-md` and `$mq-xl`
  (e.g. `--text-title-2xl` 48px → 80px at md; `--spacer-2xl` 64px → 80px → 128px; `--grid-margin`
  16 → 24 → 32px). Protocol's [`_aliases.yml`](https://github.com/mozilla/protocol-tokens/blob/main/tokens/_aliases.yml)
  sets the breakpoints: `screen-xs 320px`, `screen-sm 480px`, `screen-md 768px`, `screen-lg 1024px`,
  `screen-xl 1312px`, `content-max 1440px`. Grid: 12 columns (`_grid.scss`).
- **Component model**: Protocol's component folders include article, billboard, branding, breadcrumb,
  button, callout, card, cta-link, details, download-button, emphasis-box, footer, forms, language-switcher,
  menu-list, modal, navigation, newsletter, notification-bar, picto, section-heading, sidebar-menu, split,
  sticky-promo and video ([components/](https://github.com/mozilla/protocol/tree/main/components)). Classes
  use a BEM-like prefix scheme: `mzp-c-*` in Protocol, `m24-c-*` (component) and `m24-t-*` (theme) in bedrock
  — e.g. [`.m24-c-button`](https://github.com/mozilla/bedrock/blob/main/media/css/m24/button.scss).
- **Accessibility**: Protocol's principles page lists "Accessible to all" — "welcome the widest possible
  audience, free of obstacles" ([01-principles.md](https://github.com/mozilla/protocol/blob/main/docs/01-fundamentals/01-principles.md)).
  No numeric contrast target or touch-target size was found in the pages opened.
- **Delivery**: npm `@mozilla-protocol/core` (Sass + compiled CSS), `@mozilla-protocol/tokens`; fonts on
  Google Fonts under OFL ([Mozilla Headline](https://fonts.google.com/specimen/Mozilla+Headline); metadata in
  [google/fonts ofl/mozillaheadline/METADATA.pb](https://github.com/google/fonts/blob/main/ofl/mozillaheadline/METADATA.pb)).
  No Figma kit was found in the sources opened.

## Do's and Don'ts

### Do
- Keep surfaces black, white and `#161616`; use pastel tints (`#fff1f8`, `#d6ffcd`) for whole bands only.
- Use `#00d230` for the pixel mark and identity moments.
- Set every heading in Mozilla Headline 600 with -0.01em tracking and line-height 1.0 at display sizes.
- Use 0px corners on all controls.
- Make transitions between bands stepped, in rectangular blocks.
- Prefer underlined text links as CTAs; use a 2px white-bordered `#161616` button only for primary actions like "Donate".
- Invert colours on hover (dark → white background, black text).

### Don't
- Don't round corners or use pill buttons.
- Don't use the green as a button fill or body text colour.
- Don't add drop shadows, gradients or glassmorphism.
- Don't set headings in Mozilla Text or body in Mozilla Headline.
- Don't use curved or diagonal section dividers.
- Don't use the Firefox brand palette or Metropolis on Mozilla pages — Protocol keeps them as separate themes.

## Responsive Behavior

### Breakpoints (Protocol tokens)

| Name | Min width | Key changes on m24 pages |
|---|---|---|
| base | 0 | 16px margins / 8px gutters; h1 48px; body 16px |
| md | 768px | margins 24px / gutters 12px; title and body scales step up |
| lg | 1024px | — |
| xl | 1312px | margins 32px / gutters 16px; `--spacer-3xl` 200px |
| max | 1440px | content max |

### Measured at 390px
- h1 "Welcome to Mozilla": 48px / 600 / 48px, -0.48px (`{typography.display-mobile}`).
- Body paragraph: 16px / 20px (homepage), 16px / 24px (/about/).
- Most frequent mobile sizes: 14px, 18px, 16px, 12px, 24px, 32px, 48px.

### Touch Targets
Measured controls: primary button 40px tall, input 40px, select 40px, ghost button 32px.

### Collapsing Strategy
- Product rows keep icon + name + arrow; descriptions wrap below.
- The stepped band edges remain.

## Iteration Guide

1. Start every page with white header + full-bleed `#161616` hero + `{typography.display-2xl}` white headline.
2. Reference tokens by name: `{colors.off-black}`, `{typography.display-xl}`, `{rounded.none}`.
3. Alternate bands: white → pink/green tint → `#161616`; join them with stepped edges.
4. Body copy: `{typography.body-lg}` on desktop, `{typography.body-md}` on mobile.
5. Hover = inversion for buttons, `#022611` for nav links, `#fafafa` fill for list rows, underline removal for inline links.
6. Keep shadows at zero and corners at 0px.
7. When unsure about a value, read the `--m24-*` variable from `root.scss` rather than inventing one.
