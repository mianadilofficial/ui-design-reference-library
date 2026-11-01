---
version: alpha
name: Ableton
category: "Music & Audio"
description: "Ableton's site is a flat, square-cornered editorial grid set entirely in futura-pt (Futura PT, ParaType) at weights 400 and 700 — black #000000 type on a white #ffffff canvas, one pure electric blue #0000ff for every link and buy button, a light grey #eeeeee (\"dolphin\") for inputs and bands, and saturated category swatches like tiffany #00d2be and salmon #ff8389. Every radius is 0px."

colors:
  primary: "#0000ff"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  body-gutter: "#f3f3f3"
  ink: "#000000"
  dolphin: "#eeeeee"
  disabled-text: "#666666"
  placeholder: "#999999"
  error: "#ed0000"
  focus-glow: "#0000ff80"
  tiffany: "#00d2be"
  salmon: "#ff8389"
  lemonade: "#fbffa7"
  live12-periwinkle: "#92a7ff"
  live12-teal-lighter: "#8efbd8"
  live12-suite: "#22242c"
  desert: "#d34312"

typography:
  display-product:
    fontFamily: 'futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 90px
    fontWeight: 700
    lineHeight: 108px
  display-hero:
    fontFamily: 'futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 60px
    fontWeight: 700
    lineHeight: 66px
  heading-section:
    fontFamily: 'futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  heading-teaser:
    fontFamily: 'futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 30px
    fontWeight: 700
    lineHeight: 42px
  link-large:
    fontFamily: 'futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
  title-card:
    fontFamily: 'futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  body-large:
    fontFamily: 'futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  body:
    fontFamily: 'futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav-link:
    fontFamily: 'futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  small-bold:
    fontFamily: 'futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
  small:
    fontFamily: 'futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  mobile-h1:
    fontFamily: 'futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px

rounded:
  none: 0px

spacing:
  2xs: 5px
  xs: 10px
  s: 20px
  m: 30px
  l: 40px
  xl: 60px
  2xl: 80px
  3xl: 100px
  4xl: 120px
  grid-unit: 106.667px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.title-card}"
    rounded: "{rounded.none}"
    padding: 7px 30px
    height: 42px
  button-buy:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.title-card}"
    rounded: "{rounded.none}"
    padding: 6.5px 30px
    border: 2px solid transparent
  button-scroll:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    width: 60px
    height: 60px
  link-nav-cta:
    textColor: "{colors.primary}"
    typography: "{typography.title-card}"
  link-filter:
    textColor: "{colors.primary}"
    typography: "{typography.link-large}"
  link-teaser-cta:
    textColor: "{colors.ink}"
    typography: "{typography.title-card}"
    textDecoration: underline
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    padding: 20px 0px 0px
    height: 69px
  promo-strip:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.title-card}"
    padding: 20px 106.667px
    height: 70px
  tag-category:
    backgroundColor: "{colors.tiffany}"
    textColor: "{colors.ink}"
    typography: "{typography.small-bold}"
    rounded: "{rounded.none}"
    padding: 1.96px 11.9px
    height: 25px
  tag-category-downloads:
    backgroundColor: "{colors.salmon}"
  text-input:
    backgroundColor: "{colors.dolphin}"
    textColor: "{colors.ink}"
    typography: "{typography.body-large}"
    rounded: "{rounded.none}"
    padding: 8px 15px
    height: 42px
  select:
    backgroundColor: "{colors.dolphin}"
    textColor: "{colors.ink}"
    typography: "{typography.small-bold}"
    rounded: "{rounded.none}"
    padding: 4.9px 50px 4.9px 10.5px
    height: 30px
  card-blog-teaser:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.title-card}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-large}"
  footer-secondary-link:
    textColor: "{colors.ink}"
    typography: "{typography.small-bold}"
---

## Overview

Ableton's website looks like a printed music magazine laid on a strict grid. The capture of `https://www.ableton.com/en/` opens with a
collage of rectangular teasers that overlap each other: a large dark product photograph with a 60px white headline, a lemon-and-cyan
striped graphic panel carrying a black 30px headline, and a smaller photo tile offset below them. Nothing is rounded, nothing casts a
shadow, nothing is outlined. Depth comes only from rectangles overlapping and from colour.

Everything is set in one family: **futura-pt** (Futura PT), loaded in two styles only — `futura-pt normal normal` and
`futura-pt bold normal` (the extractor's `loadedFonts`). Futura's geometric circles, sharp apexes and tall ascenders are the brand's
whole typographic voice. Headings are bold 700; reading text sits at 400.

Colour is reduced to a clear hierarchy:

- **Black `#000000`** (`{colors.ink}`) is the text colour for 1,178 of 1,466 measured characters on the homepage.
- **White `#ffffff`** (`{colors.canvas}`) is the visible page. The main wrapper `div.main` paints `#ffffff`; the `body` beneath it is `#f3f3f3` (`{colors.body-gutter}`), which you only see outside the wrapper.
- **Electric blue `#0000ff`** (`{colors.primary}`, the CSS keyword `blue` in Ableton's stylesheet) is the only interactive colour: nav "Try Live 12 for free", the blog filter links, the 60×60 scroll-down square, "Add to cart", and "Sign up".
- **Dolphin grey `#eeeeee`** (`{colors.dolphin}`, named `.abl-cl-dolphin` in the CSS) fills inputs, selects, image placeholders and the "More:" band at the bottom of the homepage.
- A big library of **named swatches** (tiffany, salmon, lemonade, periwinkle and many more) colours category tags and campaign art. It never colours buttons.

**Key characteristics**

- Square corners everywhere: the only radius in the whole stylesheet corpus is a single `2px`. Every measured button, input, select, tag and image is `0px`.
- One typeface, two weights, sizes on a short ladder: 90 / 60 / 40 / 30 / 24 / 20 / 16 / 14px.
- One action colour, pure RGB blue `#0000ff`, used for links and filled buttons alike. Link text is not underlined; teaser CTAs are underlined spans with an arrow (`has-arrow is-underlined`).
- Layout runs on a viewport-relative 12-column unit: `.abl-ph-1u` = `8.33333vw` (106.667px at 1280px). That is why paddings like `106.667px`, `53.3334px` and `26.6666px` show up in the measurements.
- Saturated, flat colour fields (lemon `#fbffa7`, teal `#8efbd8`, periwinkle `#92a7ff`) sit right next to warm photographs of musicians in their studios.

## Colors

> Source: `web/data/extracted/ableton.json` (homepage) plus `ableton--shop.json` (`/en/shop/live/`), and the named classes in
> Ableton's production stylesheet
> ([output.a8652eafb45a.css](https://cdn-resources.ableton.com/80bA26cPQ1hEJDFjpUKntxfqdmG3ZykO/static/CACHE/css/output.a8652eafb45a.css)).

### Action
- **Blue** (`{colors.primary}` — `#0000ff`): CSS classes `.abl-cl-blue`, `.abl-cl-link`, `.abl-bg-blue` and `.abl-cl-form-focus` all resolve to `blue`. It is the second most-read text colour on the homepage (139 chars) and the fill of every filled button measured.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): label colour on blue buttons ("Add to cart", "Sign up") and on the black promo strip.
- **Focus Glow** (`{colors.focus-glow}` — `#0000ff80`): `.abl-cl-form-focus-glow` = `rgba(0,0,255,0.5)`. The corpus includes the shadow `0 0 .1875rem rgba(0,0,255,0.5)` (a 3px blue glow).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): the main wrapper, the footer, and most of the capture.
- **Body Gutter** (`{colors.body-gutter}` — `#f3f3f3`): computed `body` background, hidden under the white wrapper at desktop widths.
- **Dolphin** (`{colors.dolphin}` — `#eeeeee`): inputs, selects, the `blog-teaser__media` placeholder behind lazy-loaded images, and the full-width "More:" filter band.
- **Live 12 Suite** (`{colors.live12-suite}` — `#22242c`): dark panel behind the Suite edition on the shop page (`.abl-cl-live12-suite`).

### Text
- **Ink** (`{colors.ink}` — `#000000`): all headings, body and nav text.
- **Disabled Text** (`{colors.disabled-text}` — `#666666`): `.abl-cl-disabled-text`.
- **Placeholder** (`{colors.placeholder}` — `#999999`): `.abl-cl-form-placeholder`.
- **Error** (`{colors.error}` — `#ed0000`): `.abl-cl-error`.
- **Desert** (`{colors.desert}` — `#d34312`): a warm orange-red that appears as small text on the shop page (8 chars measured; `.abl-cl-desert`).

### Category & campaign swatches
Ableton names its colours after things rather than roles. Each one below was measured on a live page:
- **Tiffany** (`{colors.tiffany}` — `#00d2be`): "Tutorials" category tag.
- **Salmon** (`{colors.salmon}` — `#ff8389`): "Downloads" category tag.
- **Lemonade** (`{colors.lemonade}` — `#fbffa7`): shop edition panel fill.
- **Live 12 Periwinkle** (`{colors.live12-periwinkle}` — `#92a7ff`) and **Live 12 Teal Lighter** (`{colors.live12-teal-lighter}` — `#8efbd8`): edition panels on `/en/shop/live/`.

The stylesheet holds many more named swatches that are not tokenised here because no measured element used them on the pages
sampled, for example `.abl-cl-cobalt` `#4200ff`, `.abl-cl-flamingo` `#ff00c2`, `.abl-cl-goldfish` `#fed134`, `.abl-cl-acid-yellow` `#e1ff8a`.

## Typography

### Font Family
**futura-pt** is the only family on the site (1,466 of 1,466 measured characters on the homepage, 3,160 of 3,160 on the shop page).
The served stack is `futura-pt, Avenir, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif`.
Only two faces load: regular (400) and bold (700). The corpus also lists `Monaco` for code samples.

Futura PT is published by ParaType on Adobe Fonts (designers listed: Paul Renner, Vladimir Yefimov, Isabella Chaeva, Vladimir Andrich —
[fonts.adobe.com/fonts/futura-pt](https://fonts.adobe.com/fonts/futura-pt)).

### Hierarchy

| Token | Size | Weight | Line Height | Where measured |
|---|---|---|---|---|
| `{typography.display-product}` | 90px | 700 | 108px | "Live" h1 on `/en/shop/live/` |
| `{typography.display-hero}` | 60px | 700 | 66px | Homepage h1 "Live 12.4 is out now…" |
| `{typography.heading-section}` | 40px | 700 | 48px | h2 "The latest from Ableton" |
| `{typography.heading-teaser}` | 30px | 700 | 42px | Secondary teaser headlines ("Spread the cost of Live 12 Suite…") |
| `{typography.link-large}` | 24px | 700 | 36px | "See what's new", blog filter links ("All posts", "News"…) |
| `{typography.title-card}` | 20px | 700 | 30px | Blog teaser headlines, teaser CTAs, footer h3, button labels |
| `{typography.body-large}` | 20px | 400 | 30px | Footer link lists, newsletter label, input text |
| `{typography.body}` | 16px | 400 | 24px | Body default (computed on `body`) |
| `{typography.nav-link}` | 16px | 700 | 24px | Header nav "Live / Push / Move / Note…", "Log in or register" |
| `{typography.small-bold}` | 14px | 700 | 21px | Category tags, footer secondary links, selects |
| `{typography.small}` | 14px | 400 | 21px | Mobile teaser body text |
| `{typography.mobile-h1}` | 20px | 700 | 30px | Homepage h1 at 390px wide |

Letter-spacing is `normal` on every measured element; no letter-spacing table entries were recorded. Text-transform is `none`, so there
are no all-caps labels.

### Principles
- **Bold carries the voice.** 1,112 of 1,466 homepage characters are 700. Headlines, card titles, nav links and CTAs are all bold; only long reading text and footer link lists drop to 400.
- **20px is the working size.** It is the most-used size on the homepage (761 chars) and on the shop page. Card titles, footer copy, button labels and input values all sit at 20px.
- **Line heights are 1.1–1.5×.** 60/66 (1.1), 40/48 (1.2), 30/42 (1.4), 24/36, 20/30, 16/24, 14/21 (1.5). The stylesheet declares a ladder of `--abl-line-height` values (1.1, 1.111, 1.125, 1.167, 1.2 … 1.5, 1.637).
- **No tracking tricks.** Futura's own spacing is left alone.

### Note on Font Substitutes
Futura PT is a commercial ParaType font served through Adobe Fonts. If you cannot license it, the site's own fallback is **Avenir**, then
system fonts. Any substitute should be a geometric sans with circular bowls and pointed apexes; check the 60px headline and the 14px tag
text, because those show the differences most clearly. This file does not name an open-source equivalent, because no Ableton source
recommends one.

## Layout

### Spacing System
Ableton declares its spacing as CSS custom properties on `:root` (measured in `rootVars` at 1280px wide):

| Token | CSS variable | Value |
|---|---|---|
| `{spacing.2xs}` | `--abl-spacing-2xs` | .3125rem = 5px |
| `{spacing.xs}` | `--abl-spacing-xs` | .625rem = 10px |
| `{spacing.s}` | `--abl-spacing-s` | 1.25rem = 20px |
| `{spacing.m}` | `--abl-spacing-m` | 1.875rem = 30px |
| `{spacing.l}` | `--abl-spacing-l` | 2.5rem = 40px |
| `{spacing.xl}` | `--abl-spacing-xl` | 3.75rem = 60px |
| `{spacing.2xl}` | `--abl-spacing-2xl` | 5rem = 80px |
| `{spacing.3xl}` | `--abl-spacing-3xl` | 6.25rem = 100px |
| `{spacing.4xl}` | `--abl-spacing-4xl` | 7.5rem = 120px |

The stylesheet redefines these variables at different breakpoints. For example `--abl-spacing-2xl` takes 2.5rem, 3.75rem and 5rem, and
`--abl-spacing-l` takes 1.25rem, 1.875rem and 2.5rem. So the scale shrinks on smaller screens instead of using separate tokens.

### Grid & Container
- **The "u" unit.** Utility classes like `.abl-ph-1u` / `.abl-mh-1u` resolve to `8.33333vw`, which is one twelfth of the viewport. At 1280px that is `{spacing.grid-unit}` 106.667px. Measured paddings of `106.667px`, `53.3334px` (½u) and `26.6666px` (¼u) all come from this unit.
- The homepage blog grid sits inside a 1u margin on both sides and shows three 320px-wide teasers per row with 180px-tall image wells.
- The shop promo strip runs edge to edge with `20px 106.667px` padding.
- The hero collage puts its tiles on the same 12-column grid. The main teaser is 747px wide (7u), the secondary tiles are 427px (4u), and they overlap.

### Whitespace Philosophy
Sections are separated by large empty white areas rather than rules or background changes. The capture shows wide empty bands between the
"latest", "Tutorial videos" and "One Thing videos" rows (exact section gaps were not measured). Inside a teaser, the text block
uses ½u (53.333px) padding on the large tile and ¼u (26.667px) on the small ones.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | Every surface measured: `boxShadows` frequency table is empty |
| Focus | `0 0 .1875rem rgba(0,0,255,0.5)` | Form focus glow from the stylesheet corpus |

Ableton creates depth only by **overlapping flat rectangles**: in the hero collage the photo tile sits half over the larger teaser and
half over white space. There are no shadows, gradients or blur on any measured surface. When you need more emphasis, use a filled colour
field (lemonade, teal, periwinkle, black) instead of elevation.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Every button, input, select, tag, card and image |

The stylesheet corpus has exactly one radius, `2px`, used once. No measured element used it, so it is not a token. Do not add rounding.

### Other geometry
- The scroll-down control is a perfect 60×60 blue square with a white chevron.
- Teaser CTAs end with a `›` arrow glyph (`has-arrow`) and an underline.
- The hamburger-style logo mark (vertical bars plus horizontal lines) sits top left at 60×28px.
- Photography fills the frame edge to edge (`abl-object-fit-cover`, `abl-ratio-fill`) with no frames or radii.
- No clip-paths, skews or masks were measured.

## Components

### Buttons

**`button-primary`**: the filled blue button, measured on the footer newsletter "Sign up".
- Background `{colors.primary}` `#0000ff`, label `{colors.on-primary}` `#ffffff`, `{typography.title-card}` (20px / 700), padding `7px 30px`, height `42px`, radius `{rounded.none}`.
- Hover: a Playwright hover recorded **no change** in any computed property. The site does not declare a visible hover state on this button.

**`button-buy`**: "Add to cart" in the shop buy panel (`input.btn.js_add_to_cart_btn`).
- Same blue/white/20px bold styling, padding `6.5px 30px`, `2px solid` transparent border, radius 0. In the buy panel it stretches to the cell height (77px measured).
- Hover: no computed change measured.

**`button-scroll`**: the homepage "Scroll down" anchor, a 60×60 `{colors.primary}` square with a chevron icon.

### Links
- **`link-nav-cta`**: "Try Live 12 for free" in the header, `{colors.primary}`, 20px / 700, no underline.
- **`link-filter`**: blog filter row ("All posts · Artists · News · Downloads · Tutorials · Videos · Loop"), `{colors.primary}`, 24px / 700 / 36px, no underline. The "More:" band at the bottom repeats it on `{colors.dolphin}`.
- **`link-teaser-cta`**: "See what's new ›", "Learn more ›", "Watch the series ›". Underlined text in the teaser's text colour (white, black or `#eeeeee`) with a trailing arrow. 24px / 700 on the main teaser and 20px / 700 on the smaller ones.
- Hovering these links changed no computed colour or decoration in the probe.

### Navigation
**`nav`**: a white header, `padding: 20px 0px 0px`, 69px tall. From left: the logo mark, then the product nav (Live, Push, Move, Note,
Link, Shop, Packs, Help, More +) in `{typography.nav-link}` 16px / 700 black. On the right are "Try Live 12 for free" in blue and
"Log in or register" in black 16px / 700. On the shop page the header grows to 139px because a sub-nav is added.

**`promo-strip`**: on `/en/shop/live/` a full-width black (`{colors.ink}`) bar under the header holds white 20px / 700 text
("Rent-to-own Live Suite over 24 affordable monthly payments."), padding `20px 106.667px`, 70px tall.

### Tags
**`tag-category`**: the label above each blog teaser image. 14px / 700 / 21px black text on a swatch background, padding
`1.96px 11.9px`, 25px tall, radius 0. Tutorials = `{colors.tiffany}` `#00d2be`, Downloads = `{colors.salmon}` `#ff8389`.

### Inputs & Forms
**`text-input`**: the newsletter email field. `{colors.dolphin}` fill, no border, 20px / 400 black text, padding `8px 15px`,
42px tall, radius 0. It sits flush against the 42px blue "Sign up" button.
**`select`**: language and country choosers in the footer. `{colors.dolphin}`, 14px / 700, padding `4.9px 50px 4.9px 10.5px`
(room for the arrow), 30px tall, radius 0.
Focus uses blue (`.abl-cl-form-focus`) with the 3px `rgba(0,0,255,0.5)` glow. Placeholder text is `#999999`.

### Cards
**`card-blog-teaser`**: no box, no background, no border. A 320×180 image (with `{colors.dolphin}` showing while it loads), a
category tag, then a 20px / 700 / 30px black headline. Video teasers in the "One Thing" row overlay the artist's name in coloured text
in the lower-left corner of the image.

### Footer
**`footer`**: white, black text. Starts with the newsletter block ("Sign up to our newsletter", 20px / 400 label), then link columns
with 20px / 700 h3 headings (Education, Community, Language and Location) and 20px / 400 links. Social icons and the
`{typography.small-bold}` 14px / 700 secondary legal row ("Contact Us", …) sit at the bottom.

## Design System Architecture

**Ableton publishes no public design system, component library, token package or brand guideline.** Searches for "Ableton brand guidelines
logo typeface Futura press kit", "Ableton press resources logos download official", "Ableton design system component library website
tokens" and "Ableton website redesign Futura PT design team blog" found no such resource. The official
[press page](https://www.ableton.com/en/press/) offers product press kits and a press contact only; it has no colour, type or logo-usage
specification. What follows is the **de-facto system** visible in the production stylesheet
([output.a8652eafb45a.css](https://cdn-resources.ableton.com/80bA26cPQ1hEJDFjpUKntxfqdmG3ZykO/static/CACHE/css/output.a8652eafb45a.css)).

- **Token architecture.** Ableton uses an `abl-` prefixed, utility-first convention. Colours are single-purpose classes named after objects rather than roles: `.abl-cl-dolphin{color:#eee}`, `.abl-cl-tiffany{color:#00d2be}`, `.abl-cl-salmon{color:#ff8389}`, `.abl-cl-goldfish{color:#fed134}`, `.abl-cl-razzmatazz{color:#ff0956}`. A few role aliases sit beside them: `.abl-cl-link` (blue), `.abl-cl-error` (#ed0000), `.abl-cl-disabled-text` (#666), `.abl-cl-form-focus` (blue), `.abl-cl-form-placeholder` (#999). Product campaigns get their own namespaced sets: `.abl-cl-live12-coral`, `.abl-cl-live12-periwinkle`, `.abl-cl-note-chartreuse`, `.abl-cl-note-mint`. Background variants use `.abl-bg-*` (`.abl-bg-blue`, `.abl-bg-suite` #1E2120, `.abl-bg-intro` #24FBC8). There is no visible primitive-to-semantic tier beyond these aliases.
- **Spacing tokens.** These are CSS custom properties `--abl-spacing-2xs … --abl-spacing-4xl` (see Layout), redefined per breakpoint so one name scales responsively. Margin and padding utilities use a compact axis grammar: `.abl-ph-10` (padding horizontal .625rem), `.abl-mv-20`, `.abl-mh-1u`, `.abl-mh-n1u` (negative).
- **Grid.** The `1u` unit is `8.33333vw` (1/12 viewport). A `--abl-desktop-breakpoint:1024` variable is declared.
- **Type.** A single family, futura-pt, with a `--abl-line-height` ladder (1.1 → 1.637). Type sizes are applied per component; no public type-scale tokens were found.
- **Theming.** No dark mode or theme switch was observed. Contextual text colour is set with classes such as `text-white`, `text-black`, `text-dolphin` on teaser wrappers, and with variables like `--abl-cl-text` / `--abl-cl-banner` / `--abl-cl-banner-background` for campaign banners.
- **Breakpoints.** The most frequent media queries are `min-width:48em` (768px), `64em` (1024px), `70.25em`, `80em` (1280px) and `100em` (1600px), plus `36em` and `45em`.
- **Components.** BEM-style block classes: `homepage-teaser__primary-headline`, `homepage-teaser__cta`, `blog-teaser__category`, `blog-teaser__headline`, `main-footer__h3`, `main-footer__button`, `abl-buy-panel__product-cell__button`. No public inventory exists.
- **Accessibility.** A `.abl-visually-hidden` utility hides labels such as "Language" and "View posts in category:" for screen readers. Form focus is a blue glow. No published contrast or target-size policy was found.
- **Delivery.** Compiled, hashed CSS from `cdn-resources.ableton.com`. No npm package, Figma kit or versioned design system is public.

## Do's and Don'ts

### Do
- Use `#0000ff` for every link and every filled button. It is both the link colour and the button colour.
- Keep every corner at `0px`: buttons, inputs, tags, images, panels.
- Set everything in futura-pt, bold 700 for headings, titles, nav and CTAs; 400 only for long reading text and footer link lists.
- Size working text at 20px / 30px; reserve 60px / 66px for the hero and 90px / 108px for product names.
- Fill inputs and selects with `#eeeeee` and no border.
- Use the named swatches (tiffany, salmon, lemonade, periwinkle…) as flat colour fields and category tags, with black text on top.
- Build layouts on the 1/12-viewport unit and let tiles overlap in hero collages.
- End teaser CTAs with an underline and a `›` arrow.

### Don't
- Don't round anything, and don't add drop shadows. The system has none.
- Don't add a second action colour; swatches never colour buttons.
- Don't use letter-spacing or uppercase labels; none were measured.
- Don't invent hover colours. The live buttons and links measured no hover change.
- Don't put text on dolphin grey in anything but black.
- Don't use a grey page background for the visible canvas; the reader sees white `#ffffff`.

## Responsive Behavior

### Breakpoints

| Name | Width | Key changes |
|---|---|---|
| Small | < 48em (768px) | Header becomes "Menu" toggle; h1 drops to 20px / 30px; body teaser copy 14px / 21px |
| Medium | ≥ 48em (768px) | Multi-column grids begin; most layout rules switch on here |
| Desktop | ≥ 64em (1024px) | `--abl-desktop-breakpoint:1024`; full nav row |
| Large | ≥ 80em (1280px) | Measured layout (60px hero, 3-up blog grid) |
| Wide | ≥ 100em (1600px) | Further scale-up of spacing variables |

### Mobile (390px measured)
- h1 "Live 12.4 is out now…" renders at `{typography.mobile-h1}` 20px / 700 / 30px, down from 60px. Ableton shrinks headlines hard rather than gradually.
- h2 "The latest from Ableton" also renders at 20px / 700 / 30px.
- Teaser body copy is 14px / 400 / 21px, white over imagery.
- The header keeps `padding: 20px 0px 0px` and 69px height, with a "Menu" control replacing the nav row.
- The most-used sizes at mobile are 16px, 14px and 20px.

### Touch targets
The 42px newsletter input/button pair and the 60px scroll square are the largest measured targets. No published minimum target size was found.

### Collapsing strategy
Spacing variables shrink at each breakpoint. Viewport-unit margins (`1u` = 8.333vw) scale continuously, so gutters narrow on their own.

## Iteration Guide

1. Start with a white `#ffffff` page, black `#000000` futura-pt text, and nothing else; then add blue `#0000ff` only where something is clickable.
2. Reference tokens by name: `{colors.primary}`, `{typography.title-card}`, `{rounded.none}`, `{spacing.grid-unit}`.
3. Keep the type ladder: 90 / 60 / 40 / 30 / 24 / 20 / 16 / 14px. Don't add in-between sizes.
4. Check every new component for 0px radius and no shadow before anything else.
5. For emphasis, place a flat swatch rectangle (lemonade, teal, periwinkle, black) behind content instead of elevating it.
6. Leave hover states unstyled unless you measure one; the live site shows none on its buttons and links.
7. At mobile widths, drop display headlines to 20px / 30px as the live site does.
