---
version: alpha
name: Work & Co
category: "Agencies & Studios"
description: "Work & Co (part of Accenture Song) runs a near-monochrome editorial system — pure #ffffff canvas, #000000 ink, and a single red signal in two shades (#ff3029 logo/top bar, #db2223 links). Headlines are Monotype's HelveticaNowDisplay at weight 500 with tight negative tracking (56px/56px/-1.12px h1), body copy is Adobe Garamond Pro (adobe-garamond-pro) at 20px/30px, the only filled button is a black 50px-radius pill (10px 25px, 47px tall), and everything else is hairline dividers (#dddddd) on a 12-column, 750/1100/1800px breakpoint grid with zero shadows and square imagery."

colors:
  primary: "#db2223"
  brand-red: "#ff3029"
  canvas: "#ffffff"
  ink: "#000000"
  on-primary: "#ffffff"
  hairline: "#dddddd"
  hairline-soft: "#ededed"
  theme-blue: "#0071eb"
  theme-ai-blue: "#126fe0"
  theme-yellow: "#ffcb01"
  theme-purple: "#4a3dd2"
  theme-expertise-red: "#e72200"
  theme-gray-dark: "#767676"
  newsletter-blue: "#2749ff"

typography:
  display-h1:
    fontFamily: "HelveticaNowDisplay, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 56px
    fontWeight: 500
    lineHeight: 56px
    letterSpacing: -1.12px
  display-h1-mobile:
    fontFamily: "HelveticaNowDisplay, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38px
    letterSpacing: -0.64px
  heading-index:
    fontFamily: "HelveticaNowDisplay, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: -0.72px
  heading-index-mobile:
    fontFamily: "HelveticaNowDisplay, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 34px
  heading-client:
    fontFamily: "HelveticaNowDisplay, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 30px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: -0.75px
  heading-section:
    fontFamily: "HelveticaNowDisplay, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 21px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: -0.21px
  heading-section-mobile:
    fontFamily: "HelveticaNowDisplay, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: -0.18px
  body-serif:
    fontFamily: "adobe-garamond-pro, serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: -0.2px
  body-serif-mobile:
    fontFamily: "adobe-garamond-pro, serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: -0.18px
  body-serif-article:
    fontFamily: "adobe-garamond-pro, serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: -0.25px
  body-sans:
    fontFamily: "HelveticaNowDisplay, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: -0.25px
  button:
    fontFamily: "HelveticaNowDisplay, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
    letterSpacing: -0.18px
  button-mobile:
    fontFamily: "HelveticaNowDisplay, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 27px
    letterSpacing: -0.14px
  newsletter-display:
    fontFamily: "Helvetica, \"Trebuchet MS\", Arial, sans-serif"
    fontSize: 72px
    fontWeight: 400
    lineHeight: 100.8px
    letterSpacing: -1.44px
  newsletter-body:
    fontFamily: "Helvetica, \"Trebuchet MS\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: -0.5px
  newsletter-button:
    fontFamily: "Helvetica, \"Trebuchet MS\", Arial, sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 26px

rounded:
  none: 0px
  button: 50px

spacing:
  xs: 10px
  sm: 12px
  md: 16px
  lg: 20px
  button-x: 25px
  xl: 30px
  xxl: 60px
  section: 70px
  hero: 100px

components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 10px 25px
    height: 47px
  button-primary-mobile:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-mobile}"
    rounded: "{rounded.button}"
    padding: 10px 25px
    height: 47px
  button-secondary-outline-on-blue:
    backgroundColor: "{colors.newsletter-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.newsletter-button}"
    rounded: "{rounded.button}"
    border: "2px solid #ffffff"
    padding: 10px 20px
    height: 50px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body-serif}"
    rounded: "{rounded.none}"
    padding: 0px
    underline: "inset box-shadow 0 -1px #ffffff, 0 -2px #db2223"
  link-hover:
    textColor: "{colors.ink}"
    typography: "{typography.body-serif}"
    rounded: "{rounded.none}"
    padding: 0px
  link-inline-sans:
    textColor: "{colors.ink}"
    typography: "{typography.body-sans}"
    rounded: "{rounded.none}"
    padding: 0px
  link-inline-sans-hover:
    textColor: "{colors.primary}"
    typography: "{typography.body-sans}"
    rounded: "{rounded.none}"
    padding: 0px
  text-input-on-blue:
    backgroundColor: "{colors.newsletter-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.newsletter-body}"
    rounded: "{rounded.none}"
    padding: 12px 0px
    height: 51px
  index-row:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-index}"
    rounded: "{rounded.none}"
    borderBottom: "1px solid #dddddd"
  update-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-serif}"
    rounded: "{rounded.none}"
    padding: 0px
  section-divider:
    backgroundColor: "{colors.hairline}"
    height: 1px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-sans}"
    rounded: "{rounded.none}"
    borderTop: "1px solid #000000"
    padding: 70px 30px
---

## Overview

Work & Co is a digital product company founded in Brooklyn in 2013 and, since January 2024, part of
Accenture Song (the lock-up "Part of Accenture Song" sits beside the logo in the top-left of the homepage).
Its own site is the opposite of a showreel: a quiet, typographic, almost newspaper-like page in which the
client work — screenshots of JW Anderson, Pfizer, Celanese — carries all the colour, while the chrome is
black text on white.

The system is built from very few ingredients:

- A pure white canvas (`#ffffff`) and pure black ink (`#000000`). There is no off-white, no grey body text.
- One red, used in two shades. `#ff3029` is the brand red of the logo tile and the thin bar across the top
  of the homepage. `#db2223` is the slightly deeper red used for every inline link ("Learn more", "See the
  work", "Discover now", "View case study").
- Two typefaces with strict jobs. HelveticaNowDisplay at weight 500 sets every headline and label;
  Adobe Garamond Pro (`adobe-garamond-pro`) at weight 400 sets every running sentence. The contrast of a
  tight grotesk headline over a bookish serif paragraph is the brand's signature.
- One filled button — a black pill with 50px radius ("Subscribe") — and otherwise only text links.
- Hairline rules (`#dddddd`) that slice the page into labelled bands: "Latest", "Updates", "Index".

The layout is a two-column editorial grid: a narrow left column holds the band label in 21px Helvetica,
the wide right column holds content. The h1 ("We solve complex problems through design & technology")
is set at 56px with line-height equal to its size (56px) and -1.12px tracking, so three lines lock into a
dense block. Under it, a Fast Company pull quote sits in 20px Garamond with a red underlined "Learn more".

Imagery is flat and rectangular, never rounded and never shadowed. Case-study thumbnails are product
screenshots framed on a dark or brand-coloured matte — the image itself is the
colour accent. There is no gradient, no glassmorphism, no illustration system on the chrome.

Voice of the microcopy: declarative and modest. "We solve complex problems through design & technology."
"See the work." "Learn more." Labels are single nouns ("Latest", "Updates", "Index", "Select Clients").
Sentences end with a full stop even in links ("Learn more.").

Motion is minimal: links cross-fade their colour (`transition: color .25s` is the most repeated
transition in the stylesheet), the fixed NavBar fades its opacity (`.3s`), and nothing bounces.

## Colors

### Brand & Accent

- **primary — `#db2223`**: link red. Every inline call to action is this colour with a 2px underline
  drawn as an inset box-shadow (`0 -1px #fff inset, 0 -2px #db2223 inset`). On hover it turns black
  (`#000000`) — measured in `desktop.hover` for "Learn more", "Learn more." and "Discover now".
- **brand-red — `#ff3029`**: the logo tile ("WORK &CO" in white on red) and the thin top bar. The
  stylesheet uses the same value for `.Header1--red`, `.CareersHeroText--red` and the red page theme.
- **on-primary — `#ffffff`**: text on the black pill and on red/blue fields.

### Surface

- **canvas — `#ffffff`**: the whole page. Measured as `desktop.roles.canvas` and as 8752/9000+ of the
  background area on the homepage.
- **ink — `#000000`** as a surface: the "Subscribe" pill and the "MENU" square on interior pages.
- **newsletter-blue — `#2749ff`**: the full-bleed background of the `/newsletter-opt-in/` landing page
  (`.NewsletterOptInPage{background:#2749ff}`), the only page measured that leaves the white canvas.

### Text

- **ink — `#000000`**: 1403 of ~1525 measured characters on the homepage, 6623 on /clients/. Headlines,
  body, labels — all pure black.
- Link red `#db2223` is the only other text colour in the first-party chrome (66 chars on the homepage).
- The `#004dff` blue and the `#f2f2f2` grey measured on every page belong to the third-party OneTrust
  cookie banner, not to the brand system — do not use them.

### Lines

- **hairline — `#dddddd`**: section dividers and the rules between Index rows.
- **hairline-soft — `#ededed`**: lighter borders (6 measured border uses on the homepage); also the
  `grayLight` theme link colour.

### Page themes (from the stylesheet)

Case-study and practice pages are themed by a `Page-themeColor--{name}` class on the page wrapper, which
recolours `.Link` and titles. The values are in the site's CSS corpus:

| theme class | link colour |
|---|---|
| `Page-themeColor--black` | `#db2223` |
| `Page-themeColor--red` | `#ff3029` (link), `#db2223` on some surfaces |
| `Page-themeColor--blue` | `#0071eb` |
| `Page-themeColor--ai-blue` | `#126fe0` |
| `Page-themeColor--yellow` | `#ffcb01` |
| `Page-themeColor--purple` | `#4a3dd2` |
| `Page-themeColor--expertise-red` | `#e72200` |
| `Page-themeColor--grayDark` | `#767676` |
| `Page-themeColor--grayLight` | `#ededed` |

These are page accents, not a general palette. A given page uses exactly one.

### Semantic

The marketing site has no published error/success/warning colours, and none were measured. Do not
invent them; if a form needs an error state, keep it black text with a red (`#db2223`) message.

## Typography

### Font Family

- **HelveticaNowDisplay** — served as a self-hosted webfont with the stack
  `HelveticaNowDisplay, "Helvetica Neue", Helvetica, Arial, sans-serif`. Loaded weights: 400, 500, 700.
  Helvetica Now is Monotype's 2019 redraw of Helvetica in Micro, Text and Display optical sizes; the site
  uses the Display cut. It is the dominant family by characters (952 vs 573 on the homepage).
- **adobe-garamond-pro** — Robert Slimbach's 1989 Adobe Original, served from Adobe Fonts (Typekit kit
  `use.typekit.net/mxp0chg.css`). Loaded weight: 400. Used for all running text, quotes and links in text.
- The newsletter landing page is an exception and uses `Helvetica, "Trebuchet MS", Arial, sans-serif`.

### Hierarchy

| token | family | size | weight | line-height | tracking | where |
|---|---|---|---|---|---|---|
| display-h1 | HelveticaNowDisplay | 56px | 500 | 56px | -1.12px | homepage h1, article h1 |
| display-h1-mobile | HelveticaNowDisplay | 32px | 500 | 38px | -0.64px | homepage h1 at 390px |
| heading-index | HelveticaNowDisplay | 36px | 500 | 40px | -0.72px | Index rows ("Select Clients", "Process") |
| heading-index-mobile | HelveticaNowDisplay | 28px | 500 | 34px | — | Index rows on mobile |
| heading-client | HelveticaNowDisplay | 30px | 500 | 40px | -0.75px | client names on /clients/ ("IKEA") |
| heading-section | HelveticaNowDisplay | 21px | 500 | 28px | -0.21px | band labels and card titles |
| heading-section-mobile | HelveticaNowDisplay | 18px | 500 | 24px | -0.18px | same, at 390px |
| body-serif | adobe-garamond-pro | 20px | 400 | 30px | -0.2px | homepage paragraphs, links |
| body-serif-mobile | adobe-garamond-pro | 18px | 400 | 27px | -0.18px | same, at 390px |
| body-serif-article | adobe-garamond-pro | 24px | 400 | 36px | -0.25px | news article body |
| body-sans | HelveticaNowDisplay | 16px | 400 | 28px | -0.25px | /clients/ descriptions |
| button | HelveticaNowDisplay | 18px | 500 | 27px | -0.18px | "Subscribe" pill |
| button-mobile | HelveticaNowDisplay | 14px | 500 | 27px | -0.14px | pill at 390px |

Band labels inside cards also appear at 21px with -0.5px tracking (56 chars measured at `21px/-0.5px`).
The stylesheet calls these classes `Header1`, `Header2Homepage`, `Header3Homepage`, `BodySerifHomepage`,
`BodySerifMD`, `BodySerifLG` — semantic names, each with its own media-query ladder.

### Principles

- Sans for naming things, serif for saying things. A heading is never Garamond; a paragraph is never
  Helvetica on the homepage or in articles. (The /clients/ grid is the exception: short descriptions in
  16px Helvetica.)
- Weight 500 is the headline weight. 700 appears only for bold inline text; there is no 300 or 800.
- Tracking is always negative on Helvetica and scales with size: -0.02em on the 36px index rows
  (-0.72px), -1.12px on the 56px h1.
- Line-height on display type is tight (1.0 on the h1); on serif body it is open (1.5: 20/30, 24/36).
- Sentence case everywhere. No uppercase labels except the "MENU" button.

### Note on Font Substitutes

Both faces are commercial. HelveticaNowDisplay is licensed from Monotype; Adobe Garamond Pro is
licensed through Adobe Fonts. If you cannot license them:

- HelveticaNowDisplay → `"Helvetica Neue", Helvetica, Arial, sans-serif` (the site's own fallback stack).
  Keep weight 500 and the negative tracking; Arial at 500 synthesises poorly, so prefer Helvetica Neue.
- adobe-garamond-pro → `serif` is the site's own fallback. The closest free face is EB Garamond (also a
  Garamond revival); match size and line-height and it reads very close. This substitution is a
  suggestion, not something Work & Co publishes.

## Layout

### Spacing System

The stylesheet sets `html{font-size:10px}`, so every rem in the CSS is a round pixel number
(`1.8rem` = 18px). Spacing is therefore authored in tens: measured paddings cluster on 10px (24 uses),
30px, 60px, 70px and 100px, with 25px for the button and 12px/16px/20px for tight form gaps.

| token | value | measured use |
|---|---|---|
| xs | 10px | most frequent padding (Index rows, pill vertical) |
| sm | 12px | input vertical padding, newsletter form gap |
| md | 16px | small inner gap |
| lg | 20px | newsletter gaps, outline button horizontal |
| button-x | 25px | pill horizontal padding |
| xl | 30px | footer side padding, card gaps |
| xxl | 60px | band vertical spacing |
| section | 70px | footer top padding |
| hero | 100px | top-of-page spacing |

### Grid & Container

- `.Container` is a centred, percentage-width box: `width:85.33%` on mobile, then 84.63%, 73.61% and
  74.22% at larger breakpoints. At 1280px the content column is therefore ~940px wide, centred.
- Columns are SUIT-style classes: `.Col--sm-{0-4}` (4-column mobile), `.Col--md-{0-9}` (9-column tablet),
  `.Col--lg-{0-12}` and `.Col--xl-{0-12}` (12-column desktop), with matching `.Offset--*` classes.
- The homepage uses a 1/3 + 2/3 split: label column (≈301px wide h2) and content column (621px wide h1
  and body). Update cards sit two-up inside the content column.
- /clients/ is a three-column grid of text-only client entries.

### Whitespace Philosophy

The page breathes vertically, not horizontally. Bands are separated by generous air (60px paddings measured) above and below a
1px `#dddddd` rule. Inside a band, text sits directly under the image with only a small gap. There is no
background tinting to separate sections — only whitespace and hairlines.

## Elevation & Depth

- Flat. The first-party page uses no shadows at all on cards, images or buttons.
- The only shadows measured belong to the cookie banner (`rgba(0, 0, 0, 0.2) 0px 0px 18px 0px`) and
  to the link underline, which is technically an inset box-shadow
  (`0 -1px #fff inset, 0 -2px #db2223 inset`), used instead of `text-decoration` so the line sits 2px
  below the baseline at a fixed weight.
- Depth inside thumbnails comes from the client screenshots, not from the frame.
- The NavBar is `position:fixed` with `z-index:8`; on mobile when scrolled it gains a 20% black hairline
  (`.NavBar--scrolledFromTop:after{background-color:rgba(0,0,0,.2)}`).

### Decorative Depth

None. No gradients on chrome, no blur, no glows.

## Shapes

### Border Radius Scale

| token | value | use |
|---|---|---|
| none | 0px | images, cards, inputs, dividers, MENU square |
| button | 50px | the black "Subscribe" pill and the newsletter outline button |

That is the entire first-party scale on the measured pages. (The 2px radius in the frequency table is the
OneTrust cookie button.) The stylesheet corpus contains other radii (8px, 4px, 12px…) used inside
specific case-study modules; they are not part of the global chrome.

### Photography Geometry

Thumbnails are hard-edged rectangles: the "Latest" hero image fills the 621px content column at roughly
16:9; "Updates" cards are two-up at roughly 16:9 each. Product UI inside them is often centred on a dark
or brand-colour matte.

## Components

### Buttons

**button-primary** — the only filled button.
- Background `#000000`, text `#ffffff`.
- HelveticaNowDisplay 18px / 500 / 27px line-height / -0.18px tracking.
- Radius 50px, padding 10px 25px, height 47px (129px wide for "Subscribe").
- On mobile the label drops to 14px (button-mobile) with the same 10px 25px padding and 47px height.
- The stylesheet transitions `background .25s ease-in, border-color .25s ease-in` on `.Subscribe-button`.
  No hover colour was captured in the measurements, so none is declared.

**button-secondary-outline-on-blue** — newsletter landing page only.
- Transparent on `#2749ff`, text `#ffffff`, `2px solid #ffffff` border.
- Helvetica 26px / 400 / 26px. Radius 50px, padding 10px 20px, height 50px.

### Links

**link** — the main CTA pattern of the site.
- Text `#db2223` in the surrounding serif (20px/30px, -0.2px on the homepage; 24px/36px in articles).
- Underline drawn with `box-shadow: 0 -1px #fff inset, 0 -2px #db2223 inset`.
- Hover: text turns `#000000` (measured), with `transition: color .25s`.
- Keyboard focus: `outline: 1px dotted #000; outline-offset: -.1rem` (stylesheet, `[data-whatinput=keyboard]`).

**link-inline-sans** — on /clients/, inline links inside 16px Helvetica descriptions are black with a light
underline and turn `#db2223` on hover (measured: "Ongoing transformation", "first e-commerce app").

### Cards & Containers

**update-card** (homepage "Updates") — no box at all.
- Image (rectangle, no radius) → title in heading-section (21px/500) → one or two sentences of body-serif
  ending with a red link.
- Two cards per row inside the content column.

**index-row** (homepage "Index") — a list of large links.
- Each row: heading-index (36px / 500 / 40px / -0.72px) in black, separated by `#dddddd` 1px rules,
  10px padding.

**section-divider** — 1px `#dddddd` rule spanning the container width between bands.

### Inputs & Forms

**text-input-on-blue** (newsletter landing page): no box, white text on `#2749ff`, Helvetica 18px / 500 /
26px, padding 12px 0, height 51px, 472px wide.

The homepage footer subscribe form (`.Subscribe-input`) is defined in the stylesheet as borderless with a
`1px solid #000` bottom border and 32px height — an underline-only field, consistent with the newsletter
page.

### Navigation

- Homepage: no visible nav bar; the logo tile and "Part of Accenture Song" lock-up sit top-left, and the
  Index band at the bottom of the page *is* the navigation.
- Interior pages: a black square "MENU" button top-left (visible in the /clients/ and news captures) on
  a fixed NavBar; a breadcrumb label ("News & Insights", "Select Clients") occupies the left column.

### Footer

`.Footer{border-top: thin solid #000}` with generous top/bottom padding (measured 70px 30px on the
newsletter page). Content is a short list: `press@work.co`, `newbiz@work.co`, Cookie Policy, Privacy
Statement. Black text on white, no columns of sitemap links.

### Signature Components

- **The red top bar** — a thin full-width `#ff3029` strip at the very top of the homepage.
- **The logo tile** — white "WORK &CO" set tight inside a `#ff3029` rectangle, next to "Part of /
  Accenture Song" in small black Helvetica.
- **Label column** — every band starts with a single 21px word in the left third.

## Design System Architecture

**Work & Co publishes no public design system.** There is no official design-system site, brand portal,
token package or public GitHub organisation for the company's own brand. Searches run (all returned
nothing official): "Work & Co agency design system brand guidelines typeface Helvetica Now";
"\"Work & Co\" github open source design tokens"; "work.co github organization Work & Co developers open
source"; "Work & Co logo brand identity press kit Accenture Song"; "\"Work & Co\" own website design
system storybook components work.co redesign". The GitHub API returns 404 for an org named `workco`.
Corporate context is confirmed by Accenture's newsroom
(https://newsroom.accenture.com/news/2024/accenture-completes-acquisition-of-global-digital-product-company-work-and-co).

What follows is the de-facto system, read from the site's own production stylesheet
(https://work.co/assets/index-CIFUAEmo.css) and the measured pages.

### Token architecture

- There are **no CSS custom properties** for design tokens. `:root` exposes only `--vh`, `--vw` and
  `--reach-menu-button` (layout helpers). Colours and sizes are hard-coded per rule — this is a
  compiled-Sass / CSS-modules style codebase, not a token pipeline.
- The tiers exist as **class names** instead of variables:
  - Typographic roles: `.Header1`, `.Header2`, `.Header3`, `.Header4`, `.Header2Homepage`,
    `.Header3Homepage`, `.BodySerifSM`, `.BodySerifMD`, `.BodySerifLG`, `.BodySerifXL`,
    `.BodySerifHomepage`, `.BodySmallSerifHomepage`, `.Quote`.
  - Colour modifiers: `.Header1--red{color:#ff3029}`, `.CareersHeroText--blue`, `.FooterTitle--yellow`.
  - Page themes: `.Page-themeColor--black|red|blue|ai-blue|yellow|purple|expertise-red|grayDark|grayLight|white`.
- Naming follows **SUIT CSS** conventions: `ComponentName`, `ComponentName-descendant`,
  `ComponentName--modifier` (e.g. `NavBar--scrolledFromTop`, `Subscribe-input`, `Col--lg-6`).

### Theming

- One light theme; no dark mode, no high-contrast mode, no density modes.
- Per-page brand theming is switched by a wrapper class (`Page-themeColor--{name}`) plus flags
  `Page--hasBGColor`, `Page-hasDarkOverlay`, `Page-hasLightOverlay`, which recolour `.Link`,
  `.FooterTitle` and headers via descendant selectors.

### Type & spacing systems

- Root size `html{font-size:10px}` → 1rem = 10px, so the scale is authored in round pixels.
- Each type class carries a 4-step responsive ladder: base, `min-width:750px`, `min-width:1100px`,
  `min-width:1800px`. Example `.Header1`: 29px → 40px → 56px → 100px. `.Header2Homepage`: 28px → 32px
  → 36px → 70px. At ≥1800px the type roughly doubles — large-screen display is a deliberate mode.
- Layout grid: 4 columns (`Col--sm`), 9 columns (`Col--md`), 12 columns (`Col--lg`, `Col--xl`) inside a
  percentage `.Container`.

### Component model

Component inventory visible in the stylesheet (by class root, most-used first): `Page`, `Header`,
`Footer`, `Link`, `QuoteBlock`, `ArticleNav`, `AIHubNav`, `NavBar`, `ColoredClientHeader`,
`FormFileInputField`, `Back`, `Breadcrumbs`, `FormInputField`, `Subscribe`, `InfoBlock`, `LogoCard`,
`AccordionItem`, `RoleItem`, `NewsletterOptInPage`, `NewsletterForm`, `CaseStudies`,
`StatisticsBlockItem`, `Events`, `ArticleHeader`, `AIHubSection`, `OfficeHeader`. These are page-building
components for a content site; there is no documented variant/size matrix.

### Accessibility rules

- Focus is handled with `what-input`: `[data-whatinput=keyboard] .Link:focus{outline:1px dotted #000;
  outline-offset:-.1rem}`; mouse/touch focus outlines are removed. Breadcrumbs turn `#db2223` on keyboard
  focus.
- Contrast: `#000000` on `#ffffff` is 21:1; `#db2223` on `#ffffff` is 4.9:1 (passes WCAG AA for normal text).
- No published touch-target or contrast policy.

### Delivery

- A single-page-app build (hashed `index-*.css` asset) with a WordPress back end
  (`workco.wpenginepowered.com` is preconnected) and Adobe Fonts kit `mxp0chg`.
- No npm package, no Figma community kit, no versioned releases. HelveticaNowDisplay is licensed from
  Monotype (https://www.monotype.com/fonts/helvetica-now); Adobe Garamond Pro from Adobe Fonts
  (https://fonts.adobe.com/fonts/adobe-garamond).

## Do's and Don'ts

### Do

- Use `#ffffff` canvas and `#000000` ink for everything; let photography bring the colour.
- Set headlines in HelveticaNowDisplay 500 with negative tracking (h1 56px/56px/-1.12px).
- Set paragraphs in adobe-garamond-pro 400, 20px/30px with -0.2px tracking.
- Make calls to action red text links (`#db2223`) with a 2px inset underline, turning black on hover.
- Reserve the black 50px-radius pill (10px 25px, 47px tall) for the one form action on a page.
- Separate bands with a 1px `#dddddd` rule and a one-word 21px label in the left column.
- Keep images as hard rectangles with no radius and no shadow.
- Use `#ff3029` only for the logo tile and the top bar (or a page's red theme).

### Don't

- Don't add grey body text, tinted section backgrounds or card boxes.
- Don't round images or add drop shadows.
- Don't use filled coloured buttons — the only filled button is black.
- Don't set headlines in Garamond or paragraphs in Helvetica on editorial pages.
- Don't mix two page-theme colours on one page.
- Don't use the cookie banner's `#004dff` blue or `#f2f2f2` grey as brand colours.
- Don't use positive tracking or uppercase labels (except the "MENU" button).

## Responsive Behavior

### Breakpoints

From the stylesheet media queries (by frequency):

| name | query | notes |
|---|---|---|
| mobile | `max-width:749px` | single column, `Col--sm` 4-column grid |
| tablet | `min-width:750px` | `Col--md` 9-column grid |
| desktop | `min-width:1100px` | `Col--lg` 12-column, label/content split |
| large | `min-width:1800px` | type roughly doubles (h1 100px) |

Height-based queries (`min-width:1100px and max-height:799px`) trim vertical spacing on short laptop
screens.

### Measured at 390px

- h1: 32px / 500 / 38px / -0.64px (desktop 56px).
- Band labels: 18px / 500 / 24px / -0.18px (desktop 21px).
- Body serif: 18px / 400 / 27px / -0.18px (desktop 20px).
- Index rows: 28px (desktop 36px).
- "Subscribe" pill: 14px label, same 10px 25px padding, 47px height, 50px radius.

### Touch Targets

The pill is 47px tall on mobile. Text links are only as tall as their line (25px measured) — keep
generous line spacing around them.

### Collapsing Strategy

Mobile layout behaviour beyond the stylesheet media queries above was not measured.

### Image Behavior

Thumbnails scale to the column width and keep their aspect ratio; no art-direction crops were observed.

## Iteration Guide

1. Start with white `#ffffff`, black `#000000`, and nothing else. Add `#db2223` only to links.
2. Build the two-column band: 21px/500 HelveticaNowDisplay label on the left third, content on the right
   two thirds, 1px `#dddddd` rule above.
3. Set the h1 at 56px/56px/500/-1.12px; check it locks into a dense block of 2–3 lines.
4. Set body in adobe-garamond-pro 20px/30px/-0.2px; end paragraphs with a red underlined link.
5. Only if there is a form, add the black pill: 18px/500 label, 10px 25px padding, 50px radius, 47px tall.
6. Images: rectangles, no radius, no shadow; let the screenshot provide the colour.
7. At ≤749px, drop to h1 32px/38px, labels 18px, body 18px/27px, pill label 14px.
8. If a page needs a theme, pick exactly one `Page-themeColor` value (e.g. `#0071eb` blue) and apply it
   only to links and titles.
9. Check: no grey text, no shadow, no rounded image, only one filled button. If any appears, remove it.
