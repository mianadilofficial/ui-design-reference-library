---
version: alpha
name: IDEO
category: "Agencies & Studios"
description: "IDEO's 2025 Webflow site is a dark-ink editorial system — near-black slate #151f27 page wrapper, a single acid-lime \"Alchemy\" accent #d9ff00 for headlines, links and the Say hello button, white #ffffff copy, and slate blues #7b92a5 / #536575 for the footer, menu and hairline card borders. Type is FH Oscar (served as \"Fhoscar\") at Light 300 for 80px display and 40px section heads, Medium 500 at 20px for UI and lede copy, with Manrope 18px for long-form case-study prose. Every corner is square (0px radius), cards are 1px outlined boxes, and there are no shadows."

colors:
  primary: "#d9ff00"
  ideo-alchemy: "#d9ff00"
  on-primary: "#151f27"
  canvas: "#151f27"
  surface-white: "#ffffff"
  ideo-darkest: "#151f27"
  ink: "#ffffff"
  ideo-bright: "#ffffff"
  ideo-dark: "#7b92a5"
  ideo-darker: "#536575"
  slate-link: "#76879d"
  slate-muted: "#6b7f8f"
  body-default: "#333333"
  optimistic-orange: "#ff7800"
  phone-booth: "#f64114"
  prototype-pink: "#f3d0ed"
  butter-dish: "#f8fa5b"
  post-it: "#fafabb"
  curiosity: "#c5f5ff"
  blue-sky: "#009cf3"
  shopping-cart: "#ccd3ff"
  intuition: "#328e23"
  the-lisa: "#dfd6c7"
  tim-brown: "#441f10"
  ambiguity: "#3b0304"
  deep-synthesis: "#2b320d"
  light-gray: "#efefef"
  dk-gray: "#45465e"
  black: "#181717"

typography:
  display-h1:
    fontFamily: "Fhoscar, Verdana, sans-serif"
    fontSize: 80px
    fontWeight: 300
    lineHeight: 78.2222px
    letterSpacing: normal
  display-h1-mobile:
    fontFamily: "Fhoscar, Verdana, sans-serif"
    fontSize: 56px
    fontWeight: 300
    lineHeight: 54.7556px
    letterSpacing: normal
  stat-h2:
    fontFamily: "Fhoscar, Verdana, sans-serif"
    fontSize: 43.2px
    fontWeight: 300
    lineHeight: 38.88px
  heading-h3:
    fontFamily: "Fhoscar, Verdana, sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 40px
    letterSpacing: normal
  subtitle:
    fontFamily: "Fhoscar, Verdana, sans-serif"
    fontSize: 28px
    fontWeight: 300
    lineHeight: 31.5px
    letterSpacing: normal
  cta-large-mobile:
    fontFamily: "Fhoscar, Verdana, sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 45px
  input:
    fontFamily: "Fhoscar, sans-serif"
    fontSize: 25px
    fontWeight: 400
  link-inline:
    fontFamily: "Fhoscar, Verdana, sans-serif"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 22.8px
  body-lede:
    fontFamily: "Fhoscar, Verdana, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 23.2px
    letterSpacing: normal
  button:
    fontFamily: "Fhoscar, Verdana, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: normal
  menu-link:
    fontFamily: "Fhoscar, Verdana, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  body-default:
    fontFamily: "Fhoscar, Verdana, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  prose-intro:
    fontFamily: "Manrope, sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 40px
  prose-body:
    fontFamily: "Manrope, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: 0.18px

rounded:
  none: 0px
  xs: 2px

spacing:
  px-1: 1px
  px-2: 2px
  xs: 8px
  sm: 10px
  md: 12px
  base: 16px
  button-x: 18px
  gutter: 20px
  card-lg: 24px
  section-gap: 30px
  page-x: 36px
  xl: 40px
  footer-y: 50px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 9px 18px 12px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.ideo-bright}"
    textColor: "{colors.on-primary}"
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.ideo-alchemy}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px
  link:
    textColor: "{colors.ideo-alchemy}"
    typography: "{typography.subtitle}"
  link-breadcrumb:
    textColor: "{colors.slate-link}"
    hoverTextColor: "{colors.ideo-darker}"
  card:
    backgroundColor: "{colors.ideo-darkest}"
    borderColor: "{colors.ideo-darker}"
    hoverBorderColor: "{colors.ideo-dark}"
    rounded: "{rounded.none}"
    padding: 20px
  nav:
    backgroundColor: "{colors.ideo-darkest}"
    padding: 20px 0px
  menu-panel:
    backgroundColor: "{colors.ideo-dark}"
    textColor: "{colors.ideo-darkest}"
    hoverTextColor: "{colors.ideo-alchemy}"
    typography: "{typography.menu-link}"
  footer:
    backgroundColor: "{colors.ideo-dark}"
    textColor: "{colors.ideo-darkest}"
    padding: 50px 0px
  text-input:
    backgroundColor: transparent
    textColor: "{colors.ideo-darkest}"
    borderColor: "{colors.ideo-darkest}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 10px 20px
    height: 57px
---

## Overview

IDEO is the human-centered design and innovation consultancy (studios in Cambridge, Chicago, London, San Francisco and Shanghai per [ideo.com/about](https://www.ideo.com/about)). Its current site — a Webflow build whose stylesheet is literally named `ideo-2025.webflow` — is a confident, almost nocturnal editorial interface: everything sits on a near-black slate wrapper (`#151f27`, the site's own `--ideo-darkest`), and a single electric lime called **Alchemy** (`#d9ff00`, `--ideo-alchemy`) does all of the shouting.

What the capture shows, top to bottom:

- A header with the stacked IDEO wordmark — the four letters I/D/E/O each boxed in a thin white square and staggered diagonally like a step chart — a three-line hamburger, and a lime "Say hello" button whose left and right ends are cut on a diagonal so the button reads as a parallelogram.
- A full-bleed hero photograph of a real workshop (people, posters, plants) overlaid with a thin white hexagon line pattern and a scatter of lime dots.
- A display headline in FH Oscar Light at 80px split in two colours: "Human-centered" in Alchemy and the rotating last word ("growth", "design", "breakthroughs", "futures") in white.
- A dotted grid texture behind the headline band — small grey dots at regular intervals.
- A two-column intro: white 20px Medium lede on the left, three lime 28px Light links stacked on the right.
- A "Latest" section headed in slate blue `#7b92a5` at 40px Light, followed by outlined cards (1px `#536575` hairline) holding an image, a lime headline, white description and a small lime "Read now →" text button.

The voice is short, declarative and optimistic ("We'd love to hear from you.", "Say hello", "Build your next era of growth"). Imagery is either documentary photography of IDEO teams at work or flat, graphic illustration in lime and black (hands, eyes, brains, flowers drawn in heavy outline) — the illustration style reuses the same Alchemy lime as the UI.

The system is deliberately small: one accent, one dark surface, two slate blues, white text, square corners, 1px lines. The rest of the variable palette (Optimistic Orange, Prototype Pink, Butter Dish, Post-it, Curiosity …) is declared in `:root` but was not seen rendered on the three pages measured — treat it as a reserve illustration palette, not UI colour.

## Colors

### Brand & Accent

- **Alchemy / primary** `#d9ff00` — the brand accent (`--ideo-alchemy`). Display headlines (h1, h2), inline links, card titles, the "Say hello" / "Contact" button fill, the `.button.is-text` text button, link-hover underline.
- **On-primary** `#151f27` — text on the lime button (same value as `--ideo-darkest`). Contrast `#d9ff00` on `#151f27` computes to 14.52:1.

### Surface

- **Canvas** `#151f27` — the page as it renders: `.main-wrapper` paints `var(--ideo-darkest)` across the whole viewport (largest background area on the homepage, `backgroundColorsByArea[0]`). The underlying `body` computes to `#ffffff` but is never visible on the homepage.
- **surface-white** `#ffffff` — used only where it can be seen: the case-study prose sections (`#ffffff` covered 2678 area units on the Moderna case study, Manrope text dark-on-white) and the lime button hover fill. It is not the page background.
- **ideo-darkest** `#151f27` — the same value as canvas (`--ideo-darkest`): sticky navbar background, card fill.
- **ideo-dark** `#7b92a5` — the slate-blue surface of the footer block and the opened menu panel (`.menu-color`).
- **ideo-darker** `#536575` — 1px hairline borders on `.line-global` cards; also the hover colour of breadcrumb links and the colour of the Manrope intro paragraph on case studies.

### Text

- **Ink** `#ffffff` — the most-read text colour on the homepage (13,384 chars). Body ledes, card descriptions, the second half of split headlines.
- **ideo-darkest** `#151f27` — text on light/slate surfaces (footer, menu, case-study white sections, input text).
- **slate-link** `#76879d` — breadcrumbs ("Home / Design services / Case studies") and `.ts-link` underlined body links. Contrast on `#151f27` computes to 4.55:1.
- **slate-muted** `#6b7f8f` — `.tc-d` secondary text measured on the case study.
- **ideo-dark** `#7b92a5` — section labels such as "Latest" and the "Article" card meta label.
- **body-default** `#333333` — the unstyled `body` colour inherited from Webflow; never visible on a styled surface but present as the root text colour.

### Reserve Palette (declared in `:root`, not observed rendered)

`--optimistic-orange #ff7800`, `--phone-booth #f64114`, `--prototype-pink #f3d0ed`, `--butter-dish #f8fa5b`, `--post-it #fafabb`, `--curiosity #c5f5ff`, `--blue-sky #009cf3`, `--shopping-cart #ccd3ff`, `--intuition #328e23`, `--the-lisa #dfd6c7`, `--tim-brown #441f10`, `--ambiguity #3b0304`, `--deep-synthesis #2b320d`, `--light-gray #efefef`, `--dk-gray #45465e`, `--black #181717`. The names are IDEO in-jokes and values (Tim Brown is IDEO's former CEO; Post-it, prototype, ambiguity, curiosity, intuition are culture words). Keep them for illustration and data accents only.

### Semantic

No error / success / warning colours are defined by IDEO. The only semantic colours in the stylesheet belong to third-party embeds (HubSpot form defaults, the Fides consent overlay) and must not be used as IDEO tokens.

## Typography

### Font Family

- **FH Oscar** — served as `Fhoscar` from self-hosted OTF files (`FHOscar-Light/Regular/Medium/Bold.otf`, weights 300/400/500/700). It carries every heading, link, button and lede. Fallback stack as served: `Fhoscar, Verdana, sans-serif`.
- **Manrope** — served as `Manrope` (weights 400 and 700 loaded). Used only for long-form rich text (`.text-rich-text`, `.rich p`) on case studies and articles: 18px, 400, line-height 1.4, letter-spacing .01em (measured 0.18px).
- **FH Phemister Display** — declared as `Fhphemisterdisplay` via `@font-face` (files named `FHPhemisterDisplayTest-*`, i.e. trial fonts) but not observed rendering on measured pages. Do not use.

### Hierarchy

| Token | Family | Size | Weight | Line height | Where |
|---|---|---|---|---|---|
| display-h1 | Fhoscar | 80px | 300 | 78.2222px | Hero h1 (`.ts-h1`, 5rem / .977778) |
| display-h1-mobile | Fhoscar | 56px | 300 | 54.7556px | h1 at 390px wide |
| stat-h2 | Fhoscar | 43.2px | 300 | 38.88px | "Ranked #1" stats on case studies |
| heading-h3 | Fhoscar | 40px | 300 | 40px | `.ts-h3`, card headlines, "Latest" |
| prose-intro | Manrope | 40px | 300 | 40px | Case-study intro paragraph |
| subtitle | Fhoscar | 28px | 300 | 31.5px | `.ts-subtitle`, lime link list, contact h3 |
| cta-large-mobile | Fhoscar | 30px | 400 | 45px | "Ask us for references" mobile CTA |
| input | Fhoscar | 25px | 400 | normal | Footer newsletter email field |
| link-inline | Fhoscar | 24px | 300 | 22.8px | Inline lime links in stat blocks |
| body-lede | Fhoscar | 20px | 500 | 23.2px | `.ts-subtitle--normal`, ledes, card copy |
| button | Fhoscar | 20px | 500 | 20px | `.button` |
| menu-link | Fhoscar | 20px | 400 | 20px | `.link-menu` in the opened menu |
| prose-body | Manrope | 18px | 400 | 25.2px | Rich-text paragraphs, 0.18px tracking |
| body-default | Fhoscar | 14px | 400 | 20px | Root body size |

### Principles

- Display is **light** (300), not bold. Size, colour (lime vs white) and tight leading (≈0.98 at 80px, 1.0 at 40px) create emphasis — never weight.
- UI text is **Medium 500** at 20px; this is the workhorse size of the site (6,803 chars on the homepage).
- Letter-spacing is `normal` everywhere in FH Oscar; only Manrope prose gets +0.18px.
- Split-colour headlines: the first phrase in Alchemy, the variable word in white.
- No uppercase display text; the stylesheet's `.ts-eyebrow` uppercase style is not used on measured pages.

### Note on Font Substitutes

FH Oscar is a commercial neo-grotesque by Fatih Hardal / Typografische (2020, seven weights Thin–Black with italics, inspired by Akzidenz Grotesk and Breite Grotesk, with softened corners — [typografische.com](https://www.typografische.com/typefaces/fh-oscar)). If unlicensed, substitute a grotesque with a true Light 300 and Medium 500 — e.g. Manrope itself (already in the stack, OFL, wght 200–800 per [Google Fonts metadata](https://raw.githubusercontent.com/google/fonts/main/ofl/manrope/METADATA.pb)) for a free option. Keep Verdana as the served system fallback. Substitution changes width; re-check that 80px headlines still break as "Human-centered / growth".

## Layout

### Spacing System

The site's spacing comes from a Webflow utility, `.spacer.is-<colour>`, a 23-step scale whose steps are named after colours rather than numbers: `is-amber` .125rem (2px), `is-blue` .25rem (4px), `is-cyan` .5rem (8px), `is-dust` .625rem (10px), `is-emerald` .75rem (12px), `is-fuchsia` .875rem (14px), base `.spacer` 1rem (16px), `is-gold` 1.125rem (18px), `is-indigo` 1.25rem (20px — the most used, 73 instances on the homepage), `is-jade` 1.5rem (24px), `is-kiwi` 2rem, `is-lavender` 2.5rem (40px), `is-mango` 3.125rem (50px), `is-navy` 3.5rem, `is-olive` 4rem, `is-paprika` 4.5rem, `is-quartz` 5rem, `is-red` 5.5rem, `is-salmon` 6rem, `is-teal` 6.25rem, `is-ultraviolet` 7.5rem, `is-vanilla` 8.75rem.

Measured frequencies confirm the rhythm: gaps 20px (68), 16px (29), 12px (25), 30px (24); paddings 20px (69), 24px (26), 36px (10). The frontmatter `spacing` tokens are those measured values.

### Grid & Container

- `.padding-global`: 36px (2.25rem) left/right on desktop, 20px (1.25rem) on small screens.
- `.container-large`: max-width 100rem (1600px), centred.
- `.latest-grid`: CSS grid, two equal columns, 20px gap (8px on mobile).
- Menu: five-column grid (`.menu-grid`, 20px gap) collapsing to two, then one.
- Intro block: two columns — lede left, link list right — with the right column starting at the page midpoint.

### Whitespace Philosophy

Generous vertical air between bands (the "Latest" heading sits ~120px below the intro) but tight internal spacing inside cards (20px padding, 20px gaps). Content is dense, the page is not.

## Elevation & Depth

There is no elevation. `desktop.frequencies.boxShadows` contains a single entry, `rgb(21, 31, 39) 0px 1px 0px 0px`, which is a 1px *underline* used on footer links — not a shadow. Depth is expressed only by:

- **Colour stepping** — `#151f27` page → `#7b92a5` footer/menu block → lime button.
- **Hairlines** — 1px `#536575` outlines around cards that brighten to `#7b92a5` on hover.
- **Photography** — full-bleed images provide all the visual depth.

### Decorative Depth

- Thin white hexagon line overlays and lime dot scatters on the hero photograph.
- A dotted grid texture behind the h1 band.
- Underline-as-shadow: `.tc-alchemy:hover` and `.button.is-text:hover` use `box-shadow: 0 2px 0 -1px var(--ideo-alchemy)` to draw a 1px lime underline.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Buttons, cards, inputs, images — everything |
| xs | 2px | Checkbox icons (`.form_checkbox-icon` .125rem) — only measured non-zero radius |

The primary CTA radius is 0px. The "Say hello" button is not rounded but *angled*: two absolutely-positioned SVG caps (`.btn-yellow-left`, `.btn-yellow-right`, 1.375rem wide, 3.2rem tall) extend the lime fill with diagonal ends, giving a parallelogram silhouette.

### Photography Geometry

Images are hard-edged rectangles: the hero is full-bleed at page width; card images are `object-fit: cover` at 25vw tall (max 400px). No masks, no rounded corners.

## Components

### Buttons

**Primary — "Say hello" / "Contact"** (`.button`)
- Background `#d9ff00`, text `#151f27`, FH Oscar 20px / 500 / line-height 20px.
- Padding 9px 18px 12px (asymmetric — extra bottom padding optically centres the Medium cap height), height 50px, radius 0px.
- Diagonal SVG caps on both ends (see Shapes).
- Hover (measured): background flips to `#ffffff`, text stays `#151f27`. Transition `background-color .1s`.

**Secondary — text button "Read now →"** (`.button.is-text`)
- Transparent background, text `#d9ff00`, 20px / 500, padding 0, 12px (.75rem) gap to a 16px arrow icon.
- Hover: 1px lime underline via `box-shadow: 0 2px 0 -1px #d9ff00`, transition .3s.
- IDEO has no filled secondary or outlined button on the measured pages.

**Mobile large CTA** — "Ask us for references": lime fill, 30px / 400 / 45px, padding 13.6px 18px, height 60px.

### Cards & Containers

**Latest card** (`.line-global`)
- Fill `#151f27`, border 1px solid `#536575`, padding 20px, radius 0.
- Image on top, then a two-column body: lime 40px Light headline left, white 20px Medium description right; footer row with "Read now →" left and slate "Article" label right.
- Hover (measured): border colour `#536575` → `#7b92a5`, transition .3s.

### Inputs & Forms

**Newsletter email field** (footer)
- Transparent background on the `#7b92a5` footer, text `#151f27`, FH Oscar 25px / 400.
- Border 1px solid `#151f27`, radius 0, padding 10px 20px (10px 48px 10px 20px where an arrow submit sits inside), height 57px.

Other form styles in the stylesheet (`.form_input` with `#a6b1bf` border and 4px radius, HubSpot defaults) belong to embedded third-party forms and were not observed — do not use them as IDEO inputs.

### Navigation

- `.navbar`: sticky top, background `#151f27`, 20px top/bottom padding, wordmark left, hamburger + "Say hello" right. No visible text links in the bar at any width.
- The hamburger opens `.menu-color`: a `#7b92a5` panel (max-width 90rem, 20px padding) holding a five-column grid of `.link-menu` items — 20px / 400 `#151f27`, hover and current state turn Alchemy `#d9ff00`.
- Breadcrumbs on interior pages: underlined `#76879d` links (20px line box measured), hover `#536575` (measured).

### Links

- Primary inline link: `#d9ff00`, 28px / 300 / 31.5px in the intro list; 24px / 300 / 22.8px inside stat blocks (underlined there).
- Hover: 1px lime underline drawn with box-shadow.
- Body links on light surfaces: `#76879d` underlined → `#536575`.

### Footer

`.footer`: a `#7b92a5` block inset 20px from the viewport edges (margin 20px, not full-bleed), 50px (3.125rem) vertical padding, `#151f27` text, footer links underline on hover with `0 1px 0 0 var(--ideo-darkest)`.

### Signature Components

- **Split-colour hero headline** — Alchemy phrase + white rotating word at 80px Light.
- **Stacked boxed wordmark** — I, D, E, O in outlined squares, staggered.
- **Angled lime button** — the only filled control on the site.
- **Outlined card grid** — 1px slate hairlines on dark.

## Design System Architecture

IDEO publishes **no public design system**: no brand portal, press kit, token package, component library or Figma kit was found. Searches (recorded in `SOURCES.json`): "IDEO design system style guide brand guidelines press kit logo", "github IDEO design tokens component library ideo.com webflow", "IDEO brand identity 2025 rebrand typeface Fhoscar", "IDEO new website brand refresh 2024 ideo.com Alchemy"; `ideo.com/style-guide`, `/styleguide`, `/brand` return 404; the [IDEO GitHub org](https://github.com/ideo) hosts prototyping tools, not a design system; [ideo.com/about](https://www.ideo.com/about) links no brand resources. What follows is the de-facto system read from IDEO's own production stylesheet, [ideo-2025.webflow.shared.css](https://cdn.prod.website-files.com/67cb2dd62d5110e2973d39d7/css/ideo-2025.webflow.shared.d28dd8e4a.min.css).

### Token architecture

- **One tier of primitives, no semantic tier.** All tokens are flat CSS custom properties on `:root`. Verbatim: `--ideo-alchemy:#d9ff00`, `--ideo-darkest:#151f27`, `--ideo-dark:#7b92a5`, `--ideo-darker:#536575`, `--ideo-bright:white`, `--white:white`, plus named culture colours `--tim-brown:#441f10`, `--optimistic-orange:#ff7800`, `--prototype-pink:#f3d0ed`, `--post-it:#fafabb`, `--ambiguity:#3b0304`.
- Naming convention: `--ideo-<role>` for the UI core (darkest → darker → dark → bright) and evocative names for the reserve palette.
- Components consume the primitives directly (`.button{background-color:var(--ideo-alchemy);color:var(--ideo-darkest)}`, `.button:hover{background-color:var(--ideo-bright)}`).
- Colour utilities `.tc-alchemy`, `.tc-white`, `.tc-dark`, `.tc-darker`, `.tc-darkest`, `.tc-d` apply text colour; type utilities `.ts-h1`, `.ts-h2`, `.ts-h3`, `.ts-subtitle`, `.ts-subtitle--normal`, `.ts-subtitle--small`, `.ts-p`, `.ts-p--big`, `.ts-eyebrow`, `.ts-link` apply type styles. One Webflow Variables mode reference (`---mode--collection-…`) appears on `.ts-h3`, showing Webflow's variable collections are in use but with a single mode.
- No sizing/spacing tokens as variables — spacing is encoded in classes (see below).

### Theming

- **Single dark theme.** There is no `prefers-color-scheme` media query, no theme class, no JS theme switch. Light sections (case-study prose on `#ffffff`, the `#7b92a5` footer/menu) are hard-coded per block, not themes.
- No high-contrast or density modes.

### Type & spacing systems

- Type is set in `rem` on a 16px root: `.ts-h1` 5rem/.977778/300, `.ts-h2` 3.75rem/.95, `.ts-h3` 2.5rem/1/300, `.ts-subtitle` 1.5rem→28px/1.125/300, `.ts-subtitle--normal` 1.25rem/1.16/500, `.ts-p` 1rem, `.ts-p--small` .875rem, `.ts-p--tiny` .75rem. No modular ratio — sizes are hand-picked. Responsive type: `.ts-h1` drops to 3.75rem at tablet and the rendered h1 is 56px at 390px width.
- Spacing: the colour-named `.spacer.is-*` scale (2px … 140px) listed in Layout, plus Webflow grid gaps. Base unit is effectively 4px with 2px fine steps.
- Layout skeleton follows [Finsweet Client-First](https://finsweet.com/client-first/docs/core-structure-strategy): `.main-wrapper`, `.padding-global`, `.container-large`, visibility utilities `.hide-mobile-landscape`, `.show-mobile-landscape`, `.hide-tablet`; variants use Client-First's `is-` combo-class convention (`.button.is-text`, `.button.is-nav`, `.line-global.is-hover`) and underscore custom classes (`.form_input`, `.sg_color-swatch`) per [Client-First class strategy](https://finsweet.com/client-first/docs/classes-strategy-1).

### Component model

- Inventory observable in the stylesheet and pages: `.navbar` + `.menu-color` / `.menu-grid` / `.link-menu` (menu), `.button` (+ `.is-text`, `.is-nav`, `.is-back`), `.button-arrow` (+ `.is-large`), `.line-global` (outlined card) with `.latest-grid` / `.latest-image`, `.footer`, `.form_*` (inputs, checkbox, radio, messages), `.ts-tag`, `swiper` sliders, Webflow `w-dropdown` filters.
- Anatomy is not documented; variants are combo classes. States are CSS `:hover` and Webflow's `.w--current` (current page). No size scale for buttons beyond the mobile 30px CTA.
- An internal style-guide page exists in the build (`.sg_section`, `.sg_color-swatch`, `.sg_color-hex`, `.sg_version`, Poppins-set `.ts-h5`/`.ts-h6` labels) but is not published.

### Accessibility

No accessibility rules are published. From the stylesheet: `:focus-visible` outlines of `2px solid #9b9b9b` with 4px offset (Webflow base) and `1px solid #76879d` with 2px offset on checkbox icons; `.w-input:focus` border `#3898ec` (Webflow default). Computed contrast: `#d9ff00` on `#151f27` 14.52:1, `#ffffff` on `#151f27` 16.7:1, `#7b92a5` on `#151f27` 5.17:1, `#76879d` on `#151f27` 4.55:1, `#536575` on `#151f27` 2.77:1 (hairlines only — never text on dark). No reduced-motion query. Button height 50px exceeds 44px targets.

### Delivery

Webflow-hosted CSS on `cdn.prod.website-files.com`, project ID `67cb2dd62d5110e2973d39d7`; fonts self-hosted as OTF (FH Oscar licensed from [Typografische](https://www.typografische.com/typefaces/fh-oscar); Manrope, OFL). No npm package, no versioned token export, no Figma community kit. Versioning is only the hashed stylesheet filename.

## Do's and Don'ts

### Do

- Put the page on `#151f27` and keep Alchemy `#d9ff00` as the *only* accent.
- Set display text in FH Oscar Light 300 — 80px h1, 40px section heads, 28px subtitles.
- Split headlines into a lime phrase and a white phrase.
- Use 20px Medium 500 for UI labels, ledes and buttons.
- Keep every corner square (0px); outline cards with 1px `#536575` and brighten to `#7b92a5` on hover.
- Flip the lime button to white on hover.
- Draw link hovers as a 1px lime underline (`box-shadow: 0 2px 0 -1px #d9ff00`).
- Use `#7b92a5` for the footer and opened-menu panels with `#151f27` text.
- Use Manrope 18px / 25.2px / 0.18px only for long-form prose on white.
- Pair UI with real workshop photography or heavy-outline lime/black illustration.

### Don't

- Don't add drop shadows, gradients or rounded corners.
- Don't bold headlines — weight above 500 is reserved for menu emphasis (`.is-weight-700`).
- Don't use `#536575` for text on the dark surface (2.77:1).
- Don't introduce the reserve palette (orange, pink, cyan …) as UI colours — they were not observed in the shipped UI.
- Don't use HubSpot/Fides/Webflow default colours (`#3898ec`, `#38a169`, `#e2e8f0`) — they are third-party.
- Don't add a filled secondary button; secondary actions are lime text with an arrow.
- Don't use FH Phemister Display (only trial files are deployed).
- Don't letter-space FH Oscar.

## Responsive Behavior

### Breakpoints

From the stylesheet (Webflow defaults plus large-screen additions): `max-width: 991px` (tablet), `767px` (mobile landscape), `479px` (mobile portrait); `min-width: 1280px`, `1440px`, `1920px` for large screens.

### Type scaling

- h1: 80px desktop → 56px at 390px (line-height 54.7556px).
- Section heads stay 40px; the case-study h2 stat is 43.2px.
- Body ledes stay 20px / 500.
- Mobile CTA grows to 30px / 400 / 45px ("Ask us for references").

### Touch Targets

The primary button is 50px tall; the large mobile CTA is 60px tall; the hamburger uses `.menu-button` with 1rem padding.

### Collapsing Strategy

- `.padding-global` 36px → 20px.
- Mobile layout of intro and card bodies was not measured.
- `.latest-grid` gap 20px → 8px; menu grid 5 → 2 → 1 columns.
- Footer keeps a 20px inset from the viewport edges.
- `hide-mobile-landscape` / `show-mobile-landscape` / `hide-tablet` swap content per breakpoint.

### Image Behavior

Hero image stays full-bleed; card images use `object-fit: cover` at 25vw height capped at 400px (fixed 400px on some breakpoints).

## Iteration Guide

1. Start with a `#151f27` page (canvas, via a full-height main wrapper); text `#ffffff`. White `#ffffff` surfaces appear only in case-study prose blocks.
2. Load FH Oscar (or the Manrope substitute) at 300/400/500/700; fallback `Verdana, sans-serif`.
3. Build the header: stacked boxed wordmark, hamburger, lime "Say hello" button (20px/500, padding 9px 18px 12px, 50px tall, 0px radius, angled caps, hover `#ffffff`).
4. Hero: full-bleed photo, then an 80px / 300 / 78.2222px headline in `#d9ff00` + white.
5. Intro: 20px / 500 white lede left; 28px / 300 lime links right.
6. Section heading "Latest" in `#7b92a5`, 40px / 300.
7. Cards: 1px `#536575` outline, 20px padding, lime 40px Light title, white 20px description, "Read now →" lime text button.
8. Footer: `#7b92a5` block, 20px inset, 50px vertical padding, `#151f27` text, 25px newsletter input with 1px `#151f27` border.
9. Verify: no radius, no shadow, only one accent colour, light display weights.
10. At 390px: h1 56px, gutters 20px, single column.
