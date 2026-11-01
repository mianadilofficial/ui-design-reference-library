---
version: alpha
name: Ørsted
category: "Energy & Climate"
description: "Ørsted's corporate site is a calm Scandinavian system set entirely in the bespoke Orsted Sans: 44px/500 headlines over full-bleed offshore-wind photography, 16px/25.6px body on a #ffffff canvas with #000000 ink, a single #007acc blue for actions and links, deep #001142 navy bands, #f2f2f2 subtle surfaces, 8px-radius 44px-tall bold buttons, 12px-radius hairline (#d8dbdd) cards and 40px-radius search fields."

colors:
  primary: "#007acc"
  on-primary: "#ffffff"
  link-hover: "#004c80"
  primary-utility-hover: "#005c99"
  secondary: "#001142"
  tertiary: "#d6f1ff"
  canvas: "#ffffff"
  subtle: "#f2f2f2"
  ink: "#000000"
  ink-soft: "#222222"
  ink-muted: "#4d4d4d"
  ink-grey: "#666666"
  meta-grey: "#808080"
  hairline: "#d8dbdd"
  green-text: "#00855d"
  red: "#e85757"
  input-focus-border: "#4db7ff"

typography:
  display-h1:
    fontFamily: "\"Orsted Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 44px
    fontWeight: 500
    lineHeight: 50.6px
  display-h1-mobile:
    fontFamily: "\"Orsted Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 43.2px
  banner-title:
    fontFamily: "\"Orsted Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 45px
  section-title:
    fontFamily: "\"Orsted Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  section-title-inner:
    fontFamily: "\"Orsted Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 41.6px
  section-title-mobile:
    fontFamily: "\"Orsted Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 35.9999px
  card-title:
    fontFamily: "\"Orsted Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 33.6px
  body-lg:
    fontFamily: "\"Orsted Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: "\"Orsted Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  body-sm:
    fontFamily: "\"Orsted Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.992px
  breadcrumb:
    fontFamily: "\"Orsted Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: "\"Orsted Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: 0.2px

rounded:
  none: 0px
  button: 8px
  card: 12px
  search: 40px
  circle: 50%

spacing:
  xxs: 3px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 32px
  xxl: 40px
  section-sm: 60px
  footer-top: 80px
  section: 120px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 10px 32px
    height: 44px
  button-white:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 10px 32px
    height: 44px
  button-blue-white:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 10px 32px
    height: 44px
  button-focused:
    outline: "2px solid {colors.secondary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  text-link:
    textColor: "{colors.ink}"
    typography: "{typography.breadcrumb}"
  text-link-hover:
    textColor: "{colors.link-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 91px
  nav-link-hover:
    textColor: "{colors.primary}"
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.search}"
    border: "1px solid {colors.secondary}"
    padding: 10px 24px 10px 48px
    height: 44px
  card-news:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.card}"
    border: "1px solid {colors.hairline}"
    padding: 24px
  news-list-item-hover:
    backgroundColor: "{colors.subtle}"
    textColor: "{colors.link-hover}"
  band-secondary:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.banner-title}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-sm}"
    border: "1px solid {colors.hairline}"
    padding: 80px 0px 50px
---

# Ørsted

## Overview

Ørsted (orsted.com) presents itself as "the world's leading offshore wind company", and the site behaves
like a corporate annual report that has been given room to breathe: very large photographs, a single
custom typeface, white space, and exactly one action colour. Every glyph on the measured pages is
**Orsted Sans** — the extraction's `fontFamiliesByChars` table contains that family and nothing else
(4654 of 4654 weighted characters on the homepage).

What the viewer sees in the 960px capture, top to bottom:

- A full-bleed hero photograph (a technician in a white helmet looking up, shot from below, cool
  daylight), darkened enough for a white `display-h1` headline — "The world's leading offshore wind
  company" — set at 44px / weight 500 / 50.6px line height, left-aligned in the left half.
- A white 8px-radius button under the headline with blue text ("Learn more about who we are").
- A white sticky header: the blue Ørsted wordmark on the left, seven plain text nav items in black
  (Offshore wind, Other energy, News & media, Investors, Careers, About, Contact), a globe icon with
  "All sites" and a search magnifier on the right. The measured header is 91px tall (`--nav: 90.8594px`).
- A large lead paragraph in black on white, with the final clause ("a world that runs entirely on
  green energy.") picked out in `#007acc` blue — colour emphasis instead of bold.
- A full-width deep navy (`#001142`) band announcing the interim report: white 36px/500 title, white
  body, a white 8px-radius button with black bold text, and a rounded photograph on the right.
- A horizontal teaser carousel ("An end-to-end partner for offshore wind projects") with a small
  tracked counter ("1-3 OF 6"), photo-topped teasers, black titles, short body copy and blue bold
  arrow links ("Explore offshore wind →"), plus a round arrow button floating over the last image.
- A "News" section: 32px/500 title, a 16px intro line, then three white 12px-radius cards with a
  1px `#d8dbdd` hairline, each opening with a small grey date block (day number over month).

The mood is Danish modern: functional, unadorned, generous. There are no gradients, no drop
shadows on the measured cards (`boxShadow` is the transparent `rgba(0, 0, 0, 0) 0px 0px 0px 0px`),
and no decorative illustration on the homepage — photography of turbines, sea, vessels and people
carries all of the emotion.

**Key characteristics**

- One typeface, one action colour (`#007acc`), black ink, white canvas.
- Navy `#001142` as the only dark surface — used for full-width "moment" bands.
- 8px button corners, 12px card corners, 40px search-field corners: three radii, clearly separated.
- Bold (700) only on buttons and arrow links; headings are a softer 500.
- Hover is expressed by colour change, not by shadow or lift.

## Colors

All values below were measured on the live site (computed styles) or come from its own CSS custom
properties (`:root { --text-color:#000; --primary-color:#007acc; --secondary-color:#001142;
--tertiary-color:#d6f1ff; --subtle-color:#f2f2f2; --max-width:1440px }`).

### Brand & Accent

- **Primary blue** `#007acc` (`--primary-color`) — filled buttons ("Any questions? Go to global
  locations", "Create job alert", "Sign up here" on inner pages), arrow links, coloured emphasis in
  lead text, nav-hover colour, the wordmark. It is the third most-read text colour on the homepage
  (278 weighted chars) and the second largest background area (1002).
- **Link hover** `#004c80` — the computed colour of breadcrumb, inline and list links after hover
  (`a:focus,a:hover{color:#004c80;text-decoration:underline}` in the shipped CSS).
- **Utility hover** `#005c99` — used only by `a.bg-primary:hover` / `a.text-primary:hover`
  utility classes in the CSS; not observed on a primary button.
- **Secondary navy** `#001142` (`--secondary-color`; utility classes call it `.text-aubergine` /
  `.bg-aubergine`) — the full-width interim-report band, search-field borders, button focus outline.
- **Tertiary** `#d6f1ff` (`--tertiary-color`, utility class `.text-aqua`) — declared as a root token;
  used by `.link-arrow-green` and blockquote footers in the CSS. Not visible in the capture.
- **Red** `#e85757` — the `.theme-base-5` background and the `site-theme-red` login header in CSS.
  Not visible on the measured pages.

### Surface

- **Canvas** `#ffffff` — the page background the viewer sees (largest background area, 9532). Note
  that the `<body>` element itself is `#f2f2f2`; white content sections cover it, and only a thin
  strip above the hero shows it in the capture.
- **Subtle** `#f2f2f2` (`--subtle-color`) — body background, news-date blocks, and the hover fill of
  news-list rows (measured: list row bg goes to `rgb(242, 242, 242)` on hover).
- **Navy band** `#001142` — the only dark surface.
- **Hairline** `#d8dbdd` — 1px card borders and the footer's top rule.

### Text

- **Ink** `#000000` (`--text-color`) — the most-read text colour (3510 weighted chars on the
  homepage, 8559 on the vacancies page). Headings and body are pure black.
- **On dark** `#ffffff` — hero headline and everything inside the navy band.
- **Ink soft** `#222222`, **ink grey** `#666666` — child colours inside `<body>`.
- **Ink muted** `#4d4d4d` — small text on vacancies and news pages.
- **Meta grey** `#808080` — measured on the news listing (74 chars; dates/metadata).
- **Green text** `#00855d` — 30 measured characters on the homepage; also in the CSS corpus.

### Semantic

The site publishes no semantic palette. The only measured state colour is the form-control focus
border `#4db7ff` in the shipped CSS (`.form-control:focus{border-color:#4db7ff}`). Error/success
colours are not documented publicly and are omitted.

## Typography

### Font Family

**Orsted Sans** is Ørsted's bespoke typeface. Kontrapunkt, the agency behind the 2017 identity,
describes it as "inspired by early 20th-century modernist typefaces. It is geometric and
approachable, with curly details and shapes inspired by wind", and as present "from the Ørsted logo
on the windmills to the app on your smartphone"
([Kontrapunkt journal](https://kontrapunkt.com/journal/the-talent-of-encouraging-others-to-give-up)).

As served: `font-family: "Orsted Sans", "Helvetica Neue", Arial, sans-serif`, self-hosted at
`/Assets_/dist/fonts/OrstedSans-*.woff2` with `font-display: fallback`. The `Orsted Sans` family
declares faces for the default (Regular), 300 (Light), 600 (SemiBoldText), 700 (Bold) and 900
(Black). There is no `@font-face` for 500, although headings compute to `font-weight: 500`
(`h1…h6{font-weight:500}` in the CSS); the browser resolves that to the nearest declared face.
Legacy single-weight family names (`OrstedSansRegular`, `OrstedSansLight`, `OrstedSansBold`,
`OrstedSansBlack`, `OrstedSansItalic`) are also declared, plus `Noto Sans TC/KR/Japanese` for CJK
locales.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Where measured |
|---|---|---|---|---|---|
| `display-h1` | 44px | 500 | 50.6px | normal | h1 on home, contact, vacancies, news |
| `display-h1-mobile` | 36px | 500 | 43.2px | normal | h1 at 390px |
| `banner-title` | 36px | 500 | 45px | normal | navy band h3 on home |
| `section-title` | 32px | 500 | 40px | normal | "News" h2 on home |
| `section-title-inner` | 32px | 500 | 41.6px | normal | h2 on inner pages |
| `section-title-mobile` | 28px | 500 | 35.9999px | normal | h2 at 390px |
| `card-title` | 24px | 500 | 33.6px | normal | h3 on contact/news |
| `body-lg` | 20px | 400 | 28px | normal | measured body-text role on the current homepage |
| `body` | 16px | 400 | 25.6px | normal | body, nav, cards |
| `body-sm` | 14px | 400 | 19.992px | normal | paragraph role, footer |
| `breadcrumb` | 14px | 400 | 22px | normal | breadcrumb links |
| `button` | 16px | 700 | 24px | 0.2px | every `.btn` |

Other measured sizes without a confirmed weight (kept out of the token table): 60px (41 chars on the
homepage), 64px, 40px, 30px, 20px and 18px. A 14px style with 1.4px tracking (`14px/1.4px` in
`letterSpacingBySize`, 234 chars on the news page) and 18px/1.8px also occur — wide-tracked small
labels. The shipped CSS sets `.link-arrow` / `.btn-text` at `1.1875rem` (19px), 700, 0.2px.

### Principles

- One family for everything; hierarchy comes from size and the 400 → 500 → 700 steps.
- Headings are medium (500), never bold. Bold (700) is reserved for actions.
- Line heights are generous: body 1.6 (25.6/16), headings ~1.15–1.3.
- Tracking is `normal` everywhere except buttons (+0.2px) and small tracked labels.
- Emphasis inside running text is colour (`#007acc`), not weight.

### Note on Font Substitutes

Orsted Sans is proprietary and not distributed for third-party use. The site's own fallback stack is
`"Helvetica Neue", Arial, sans-serif` — use that stack if the face is unavailable. No official
substitute recommendation was found in public sources.

## Layout

### Spacing System

Measured gaps: 16px (most common), 8px, 3px, 32px, 24px, 5px. Measured paddings: 24px (cards),
60px, 120px (section rhythm), 12px, 10px (button vertical), 32px (button horizontal), 56px, 40px,
48px, 80px (footer top). The spacing tokens use these values only: 3 / 8 / 12 / 16 / 24 / 32 / 40 /
60 / 80 / 120px. Buttons carry `margin: 3px 20px 3px 3px` in CSS, so adjacent buttons sit 20px+ apart.

### Grid & Container

- `--max-width: 1440px` caps content.
- Breakpoints in the CSS follow 576 / 768–769 / 991–992 / 1199–1200 / 1400px.
- The header is a single row: logo left, centred nav, utilities right; 91px tall.
- The news grid is three equal cards (334px wide at the 1280px viewport) with 24px padding.
- The teaser carousel shows three full items plus a peeking fourth, signalling horizontal scroll.

### Whitespace Philosophy

Sections are separated by large empty bands (60–120px padding) rather than rules. The only rules
on the page are the 1px `#d8dbdd` card borders and footer top border. Text blocks are kept
narrow (the lead paragraph runs to roughly two-thirds of the container).

## Elevation & Depth

The system is flat. Cards declare `box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px` — a transparent
shadow that exists only so it can transition. The CSS corpus contains a few shadows used by
overlays and widgets (`0 4px 8px 0 rgba(0,0,0,.15)`, `0 8px 24px 0 rgba(0,0,0,.2)`,
`0 0 10px 0 rgba(0,0,0,.2)`), but none were measured on the visible homepage components.

Depth instead comes from:

- photography (the hero image bleeds edge to edge under the header),
- the navy band, which reads as a recessed "stage",
- the round white carousel arrow (48px slider button, `--btn-slider-size: 48px`, background
  `hsla(0,0%,100%,.75)`, arrow colour `#001142`) floating over imagery.

### Decorative Depth

No gradients, glows or glass effects were measured. The hero photograph is visibly darkened to
carry white type; the overlay value was not measured and is not declared.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `none` | 0px | headings, nav, footer |
| `button` | 8px | every `.btn` (primary, white, blue-white) |
| `card` | 12px | news cards, teaser cards |
| `search` | 40px | search inputs, social circles |
| `circle` | 50% | round icon buttons, date/pagination circles |

A one-corner shape `0px 50% 0px 0px` (only the top-right corner rounded) is also measured on every
page — a single quarter-round element. Its role was not identified, so it is not given a token.

### Photography Geometry

The photograph in the navy band has visibly rounded corners in the capture; the carousel teaser
images are square-cornered rectangles. Photography is cool, natural daylight:
sea, sky, turbines, vessels, people in PPE.

### Button pseudo-element

`ctaPrimary` carries a `::before` with `transform: matrix(1, 0, 0, 1, -3, 0)` (a 3px leftward
shift) and the `.btn` rule transitions `padding .2s cubic-bezier(.165,.84,.26,.98)` — the button is
built for a small padding/arrow motion. The hover end values were not captured, so no hover state
is declared for buttons.

## Components

### Buttons

**`button-primary`** — the filled action.
- Background `{colors.primary}` `#007acc`, text `{colors.on-primary}` `#ffffff`.
- Type `{typography.button}`: Orsted Sans 16px / 700 / 24px, letter-spacing 0.2px.
- Padding 10px 32px, height 44px, radius `{rounded.button}` 8px, no border, no shadow.
- Measured on contact, vacancies and news pages (`.btn.btn-blue`).

**`button-white`** — used on photography and the navy band.
- Background `#ffffff`, text `#000000`, same geometry. Measured on the homepage
  ("View Q2 2026 interim report") and on vacancies ("Learn more").

**`button-blue-white`** — white button with blue text, same geometry.
- Measured on the homepage hero ("Learn more about who we are": color `#007acc`, bg `#ffffff`),
  matching the CSS class `.btn-blue-white`.

**`button-focused`** — `.btn:focus{outline:2px solid var(--secondary-color)}`, i.e. a 2px
`#001142` outline.

CSS variants also exist for `.btn-white-red` (`#e85757` text), `.btn-white-secondary` (navy text)
and `.btn-secondary-1` (navy fill); these were not seen on measured pages.

### Links

- **Arrow link** (`link`): `#007acc`, 16px/700, with a trailing arrow ("Explore offshore wind →").
- **Text link** (`text-link`): black 14px/22px breadcrumb and inline links; on hover the computed
  colour becomes `#004c80` (`text-link-hover`).
- **Nav link hover** (`nav-link-hover`): main navigation items go from `#000000` to `#007acc`.

### Cards & Containers

**`card-news`** — white, 1px `#d8dbdd` border, 12px radius, 24px padding, no shadow. Inside: a
`#f2f2f2` date block (large day number, small month), a small blue "News" category label, and a
black headline. On the news listing, list rows change to a `#f2f2f2` background and `#004c80` text
on hover (`news-list-item-hover`).

**`band-secondary`** — full-width `#001142` section; white `banner-title` (36px/500/45px), white
body, white button, photo on the right.

### Inputs & Forms

**`search-input`** — measured on vacancies and news: white background, 1px solid `#001142` border,
radius 40px, padding 10px 24px 10px 48px (left space for the magnifier icon), height 44px, text
16px / 400 / 25.6px black. CSS transitions `border .15s, box-shadow .15s`.

Bootstrap-style `.form-control` fields in the CSS take a `#4db7ff` border on focus. Form fields
other than search were not measured.

### Navigation

**`nav`** — white header, 91px tall, black 16px/400 links, no underline, no background on hover;
hover = colour shift to `#007acc`. Logo on the left in blue; "All sites" with a globe icon and a
search icon at the right. The mobile header keeps 91px height.

### Footer

**`footer`** — white, 1px `#d8dbdd` top border, padding 80px 0 50px, 14px/19.992px black text,
company address block ("Ørsted A/S, Kraftværksvej 53, Skærbæk, 7000 Fredericia, Denmark").

### Signature Components

- **Teaser carousel** (`.multiteaser`) with a tracked counter ("1-3 OF 6") and a 48px round
  translucent white arrow button.
- **Colour-emphasised lead paragraph** — large black sentence ending in blue.
- **Navy announcement band** pairing white type with a rounded photo.

## Design System Architecture

Ørsted has **no public design system**: no documentation site, component library or token package
was found. Its brand guide lives at [brandguide.orsted.com](https://brandguide.orsted.com/), which
is login-gated (opened: only a login form, contact GlobalBrand@orsted.com). The public
[press kit](https://orsted.com/en/media/press-kit) states that "Ørsted's trademarks may be used
only by Ørsted and by 100% owned Ørsted companies" and points to that brand guide for design
elements. The 2017 identity was introduced with the name change: "a new logo and brand identity …
inspired by the Danish design tradition in being simple, functional and human", with "a full
spectrum of colours, inspired by Scandinavian nature and the Danish 20th century artist Vilhelm
Lundstrøm" ([Ørsted newsroom, 2017](https://orsted.com/en/media/newsroom/news/2017/10/we-are-changing-our-company-name-to-orsted)).
Kontrapunkt's case study lists the deliverables — "a digital brand centre through to signage
systems, way-finding, ship and vehicle livery, numerous publications, sound and animation styles,
bespoke typography and iconography" ([Kontrapunkt](https://kontrapunkt.dk/work/a-global-energy-company-goes-green)).

What follows describes only what is measurable in the site's shipped CSS
(`cdn.orsted.com/Assets_/dist/css/app.css` and `components.css`) — the de-facto system.

**Token architecture.** A single flat tier of six CSS custom properties on `:root`:
`--text-color`, `--primary-color`, `--secondary-color`, `--tertiary-color`, `--subtle-color`,
`--max-width`, plus component variables for the slider (`--btn-slider-size`,
`--btn-slider-background-color`, `--btn-slider-color`, `--btn-slider-arrow-size`). Components
reference them (`.link-arrow{color:var(--primary-color)}`, `.btn:focus{outline:2px solid
var(--secondary-color)}`). Many colours are still hard-coded hex values.

**Theming.** Sections are themed by class: `.theme-blue`, `.theme-secondary`, `.theme-base`,
`.theme-base-2` … `.theme-base-5`, `.theme-subtle`, `.theme-tertiary-2/3`, `.theme-blue-white`,
`.theme-dark-blue-opacity`, each mapping helper classes such as `.theme-base-color-background`,
`.theme-color-primary`, `.theme-accent-border-color` to a colour (e.g. `.theme-base-2
.theme-base-color-background{background-color:var(--primary-color)}`, `.theme-base-5 …
{background-color:#e85757}`). Site-level `.site-theme-blue` / `.site-theme-red` classes exist. No
dark mode or density mode was found.

**Type & spacing systems.** One family; headings set globally to 500; buttons and arrow links
16–19px/700 with 0.2px tracking. Spacing values are mostly multiples of 8 (8, 16, 24, 32, 40, 48,
56, 80, 120) with button padding in rem (`.625rem 2rem`). Mobile reduces h1 44→36px and h2 32→28px.

**Component model.** BEM-style block/element/modifier naming: `.news-list-teaser__item-link`,
`.news-list-filter__filter-result-btn`, `.multiteaser--4-items`, `.nav-utilities__search-form`,
`.counter__container`, `.main-navigation__submenu-content-cta`. Buttons are `.btn` + colour
modifiers (`.btn-blue`, `.btn-white`, `.btn-blue-white`, `.btn-white-red`, `.btn-white-secondary`).
The CSS starts with `normalize.css v5.0.0` and also contains grid/utility class names such as
`.form-control`, `.page-link`, `.btn-group`.

**Accessibility.** The [accessibility statement](https://orsted.com/en/accessibility-statement)
says the websites are "partially conformant with WCAG 2.2 level AA", relying on HTML, WAI-ARIA and
CSS, and supporting keyboard interaction and zoom. Measured: a "Skip navigation" link is the first
element; buttons are 44px tall; `.btn:focus` draws a 2px navy outline; accordion triggers use
`outline:2px solid var(--primary-color); outline-offset:2px`.

**Delivery.** No npm package, GitHub repository or public Figma kit was found. Fonts and CSS are
served from `cdn.orsted.com/Assets_/dist/`.

## Do's and Don'ts

### Do

- Set everything in Orsted Sans (fallback `"Helvetica Neue", Arial, sans-serif`).
- Use `#007acc` for every action and link; keep it the only saturated colour on a page.
- Use pure black `#000000` ink on `#ffffff`.
- Use 500 for headings, 700 only for buttons and arrow links.
- Give buttons 8px corners, 10px 32px padding, 44px height, 0.2px tracking.
- Give cards 12px corners, a 1px `#d8dbdd` border and no shadow.
- Use the `#001142` navy for full-width announcement bands with white type and white buttons.
- Show hover as a colour change (`#007acc` in nav, `#004c80` on text links, `#f2f2f2` row fill).
- Lead with large, real photography of offshore wind, sea and people.

### Don't

- Don't use bold headings or all-caps headlines.
- Don't add drop shadows or gradients to cards or buttons.
- Don't introduce extra accent colours (the red `#e85757` is a theme reserved in CSS, not a
  page accent).
- Don't make buttons pill-shaped — only search fields use the 40px radius.
- Don't use grey body text; body is black.
- Don't put the navy band behind long-form reading text.

## Responsive Behavior

### Breakpoints

| Name | Width | Source |
|---|---|---|
| sm | 576px | `@media(min-width:576px)` |
| md | 768 / 769px | `@media(max-width:768px)` / `(min-width:769px)` — the most used query |
| lg | 991 / 992px | `@media(max-width:991px)` / `(min-width:992px)` |
| xl | 1199 / 1200px | `@media(min-width:1200px)` |
| xxl | 1400px | `@media(min-width:1400px)` |

### Touch Targets

Buttons and search inputs are 44px tall at every width; the mobile CTA keeps 10px 32px padding and
44px height (measured at 390px).

### Collapsing Strategy

- h1 drops from 44px/50.6px to 36px/43.2px; h2 from 32px to 28px/36px.
- Body (16px) and paragraph (14px/19.992px) sizes stay the same.
- The header container stays 91px tall at 390px (its inner mobile layout was not measured).
- Mobile font-size table: 16px, 14px, 20px, 24px, 28px, 60px, 40px, 30px (by characters).

### Image Behavior

Hero photography is full-bleed in the capture; card and band images sit inside their containers.

## Iteration Guide

1. Start with `canvas` `#ffffff`, `ink` `#000000`, and Orsted Sans at 16px/25.6px.
2. Add one `display-h1` (44px/500/50.6px), white over a darkened full-bleed photo.
3. Add a white `button-blue-white` under it; elsewhere use the blue `button-primary`.
4. Build sections with 60–120px vertical padding and 32px/500 section titles.
5. Use `card-news` (12px radius, `#d8dbdd` hairline, 24px padding) for listings.
6. Break the page once with a `band-secondary` navy block.
7. Check that `#007acc` is the only accent and that no shadow has crept in.
8. At 390px, switch to `display-h1-mobile` and `section-title-mobile`.
