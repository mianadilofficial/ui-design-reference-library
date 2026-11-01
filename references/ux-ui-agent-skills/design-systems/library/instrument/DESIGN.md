---
version: alpha
name: Instrument
category: "Agencies & Studios"
description: "Instrument (Portland digital agency) runs a monochrome editorial system — near-black #070708 on white #ffffff, a giant black masthead wordmark, the agency's own open-source Instrument Sans (variable, wdth 80–100) and condensed Instrument Serif at 60–285px, 999px pill buttons with 12% shade fills, 24px-rounded square media cards and fluid type that scales with the viewport (22.5px body at 1280px)."

colors:
  primary: "#070708"
  primary-hover: "#070708bf"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#070708"
  ink-neutral: "#07070880"
  ink-shade: "#0707081f"
  ink-muted: "#808080"
  surface-dark: "#070708"
  on-dark: "#ffffff"
  on-dark-faded: "#ffffffbf"
  on-dark-neutral: "#ffffff80"
  on-dark-shade: "#ffffff1f"
  dark-foreground: "#e8e8e9"
  contact-canvas: "#efad41"
  contact-ink: "#1f2021"

typography:
  display-mega-serif:
    fontFamily: "Instrument-Serif, Times, serif"
    fontSize: 285px
    fontWeight: 400
    lineHeight: 226.25px
    letterSpacing: -14.25px
  display-mega-sans:
    fontFamily: "Instrument-Sans, Helvetica, sans-serif"
    fontSize: 285px
    fontWeight: 400
    lineHeight: 226.25px
    letterSpacing: -14.25px
  display-mega-italic:
    fontFamily: "Instrument-Serif-Italic, Times, serif"
    fontSize: 285px
    fontWeight: 400
    lineHeight: 226.25px
    letterSpacing: -14.25px
  display-page:
    fontFamily: "Instrument-Serif, Times, serif"
    fontSize: 160px
    fontWeight: 400
    lineHeight: 160px
    letterSpacing: -1.6px
  display-page-mobile:
    fontFamily: "Instrument-Serif, Times, serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: -0.64px
  display-tout:
    fontFamily: "Instrument-Serif, Times, serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 70px
    letterSpacing: -0.6px
  headline-3:
    fontFamily: "Instrument-Sans, Helvetica, sans-serif"
    fontSize: 35px
    fontWeight: 400
    fontVariation: "'wdth' 100, 'wght' 500"
    lineHeight: 40px
    letterSpacing: -0.35px
  headline-2:
    fontFamily: "Instrument-Sans, Helvetica, sans-serif"
    fontSize: 28.75px
    fontWeight: 400
    fontVariation: "'wdth' 100, 'wght' 500"
    lineHeight: 35px
    letterSpacing: -0.14375px
  headline-1:
    fontFamily: "Instrument-Sans, Helvetica, sans-serif"
    fontSize: 23.75px
    fontWeight: 400
    fontVariation: "'wdth' 100, 'wght' 500"
    lineHeight: 30px
    letterSpacing: 0.11875px
  body-2:
    fontFamily: "Instrument-Sans, Helvetica, sans-serif"
    fontSize: 22.5px
    fontWeight: 400
    fontVariation: "'wdth' 100, 'wght' 400"
    lineHeight: 35px
    letterSpacing: 0.45px
  body-1:
    fontFamily: "Instrument-Sans, Helvetica, sans-serif"
    fontSize: 18.75px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: 0.5625px
  button-large:
    fontFamily: "Instrument-Sans, Helvetica, sans-serif"
    fontSize: 18.75px
    fontWeight: 400
    lineHeight: 18.75px
    letterSpacing: 0.5625px
  base:
    fontFamily: "Instrument-Sans, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  overline-1:
    fontFamily: "Instrument-Sans, Helvetica, sans-serif"
    fontSize: 15px
    fontWeight: 400
    fontVariation: "'wdth' 80, 'wght' 400"
    lineHeight: 20px
    letterSpacing: 1.65px
    textTransform: uppercase
  legal:
    fontFamily: "Instrument-Sans, Helvetica, sans-serif"
    fontSize: 13.75px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.6875px
  body-2-mobile:
    fontFamily: "Instrument-Sans, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.4px
  overline-1-mobile:
    fontFamily: "Instrument-Sans, Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 1.32px
    textTransform: uppercase

rounded:
  pill: 9999px
  media: 24px
  banner: 16px
  control: 32px
  circle: 50%

spacing:
  space-6: 7.5px
  space-8: 10px
  space-12: 15px
  space-16: 20px
  space-20: 25px
  space-24: 30px
  side: 60px
  space-64: 80px
  space-96: 120px
  grid-gap: 8px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-2}"
    rounded: "{rounded.pill}"
    padding: 10px 25px
    height: 59px
    border: 2px solid transparent
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-2}"
    rounded: "{rounded.pill}"
    padding: 10px 25px
  button-inverted:
    backgroundColor: "{colors.on-dark}"
    textColor: "{colors.ink}"
    typography: "{typography.button-large}"
    rounded: "{rounded.pill}"
    padding: 10px 25px
    height: 43px
  button-inverted-hover:
    backgroundColor: "{colors.on-dark-faded}"
    textColor: "{colors.ink}"
    typography: "{typography.button-large}"
    rounded: "{rounded.pill}"
    padding: 10px 25px
  button-secondary-abacus:
    backgroundColor: "{colors.ink-shade}"
    textColor: "{colors.ink}"
    typography: "{typography.overline-1}"
    rounded: "{rounded.pill}"
    padding: 3.75px 12.5px
    height: 31px
  filter-chip-active:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.overline-1}"
    rounded: "{rounded.media}"
    padding: 3.75px 12.5px
  tag-pill-shade:
    backgroundColor: "{colors.ink-shade}"
    textColor: "{colors.ink}"
    typography: "{typography.overline-1}"
    rounded: "{rounded.pill}"
    padding: 4px 10px
    height: 28px
  work-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.headline-1}"
    rounded: "{rounded.media}"
    padding: 0px
  link:
    textColor: "{colors.ink-neutral}"
    typography: "{typography.overline-1}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.overline-1}"
    height: 61px
  cookie-banner:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body-1}"
    rounded: "{rounded.banner}"
    padding: 15px 15px 15px 30px
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body-1}"
    padding: 60px
---

# Instrument

## Overview

Instrument is a Portland, Oregon digital agency ("A technology-led brand, product, & marketing agency" per its
page title). Its site at instrument.com is a black-and-white editorial machine: a pure white `#ffffff` canvas,
one near-black `#070708` used for every piece of text, every primary button, the sliding filter indicator, the
cookie banner and the full-bleed footer, and no hue at all in the chrome. Colour arrives only through the work —
full-bleed case-study video and square project thumbnails (yellow/black "Build Week", lime-on-black
"Playspace", red and sand product shots).

The capture reads top-down like a magazine cover:

1. A row of small uppercase grey pills (`WORK`, `SERVICES`, `ABOUT` left; `CAREERS`, `LATEST`, `CONTACT`
   right) with a single line of uppercase news ticker between them ("MEET PLAYSPACE: INSTRUMENT'S ARCHIVE OF
   CREATIVE EXPERIMENTS. PLAY NOW →") whose link is set at 50% ink.
2. A gigantic black wordmark "INSTRUMENT" spanning the full content width (1160px at a 1280px viewport) — an
   SVG masthead, which the rebrand article calls "Bold, it's chunky" and "magazine masthead" style.
3. An edge-to-edge 16:9 video with 24px rounded corners and a 91px black circular play button.
4. A centred serif statement — "We're a digital-first design agency where creativity meets technology." — in
   condensed Instrument Serif at 60px, followed by a black pill CTA "View All Work →".
5. A hairline, then `RECENT WORK` overline plus a pill filter row (`ALL` active in black, `BRAND`,
   `MARKETING`, `PRODUCT` in 12% shade), then a two-up grid of 576×576 square cards with 24px radius,
   a 23.75px title and a 50%-ink `# PRODUCT` hashtag.

Further down the page alternates: a client-logo rotator, a two-column "diptych" (35px headline + 18.75px
copy + pill CTA beside a 24px-radius slideshow), a 285px tri-font headline "Shape a better future." in which
each line switches between Instrument Serif, Instrument Sans and Instrument Serif Italic, values copy at
22.5px, news cards, and a black footer with the newsletter "Liner Notes".

The personality is **polarity**: the JD Hooge rebrand article says "Polarity plays a key role in our color
palette as well. We've chosen pairings that offer plenty of contrast"
([source](https://www.instrument.com/latest/from-old-to-bold-instrument-rebrand-signals-energetic-shift)).
Serif against sans, enormous against tiny, black against white. Everything is weight 400 in CSS; hierarchy
comes from size, width axis and family, never from bold.

## Colors

The site has exactly one ink and one paper; every other "colour" is that ink at a fixed alpha. The production
stylesheet defines four alpha steps for each theme role — solid, `-faded` (.75), `-neutral` (.5) and
`-shade` (.12) ([entry.css](https://www.instrument.com/_nuxt/entry.ee029dff.css)).

### Brand & Accent
- **primary `#070708`** — `--theme-accent-background` in the light theme. Fill of the primary pill button, the
  active filter bead, the play button, the cookie banner and the footer.
- **primary-hover `#070708bf`** — `--theme-accent-background-faded` (rgba(7,7,8,.75)); the primary pill's
  hover fill per `.button-x-large:not([disabled]):hover .shape`.
- **on-primary `#ffffff`** — label colour on black pills.

### Surface
- **canvas `#ffffff`** — `--theme-background` (light theme), measured canvas of the homepage.
- **surface-dark `#070708`** — the footer and the floating cookie banner.
- **ink-shade `#0707081f`** — 12% ink: fill of the nav pills, filter chips and `tag--pill-shade`, and the
  colour of the hairline border above "Recent work" (the most frequent measured border colour).

### Text
- **ink `#070708`** — 2022 measured characters, the most-read colour; headings, body, labels.
- **ink-neutral `#07070880`** — 50% ink: the ticker's "PLAY NOW" link, card hashtags (`# PRODUCT`), icons
  inside pills (`.button-abacus .icon{color:var(--theme-foreground-neutral)}`).
- **ink-muted `#808080`** — the grey second sentence inside news-card titles ("Recognized for Experimental…").
- **on-dark `#ffffff`**, **on-dark-neutral `#ffffff80`** (footer links, cookie copy "View our … for
  details", copyright), **on-dark-shade `#ffffff1f`** (footer hairlines), **on-dark-faded `#ffffffbf`**
  (hover of inverted white pills).

### Themes
- **dark-foreground `#e8e8e9`** — the `[data-theme=dark]` foreground/accent; dark theme background is the
  same `#070708`.
- **contact-canvas `#efad41`** / **contact-ink `#1f2021`** — the Contact page ships a per-page custom theme
  (amber paper, graphite ink), measured in `instrument--contact.json` and set inline on `<body data-theme="custom">`.

There are no semantic success/warning/error colours on the marketing site. Do not invent them.

## Typography

### Font Family
All four faces are Instrument's own, served as self-hosted woff2 with `font-display: block`:

| CSS family (exact) | File | Role |
|---|---|---|
| `Instrument-Sans` | InstrumentSansVF.woff2 (variable) | everything functional — nav, body, headlines, buttons |
| `Instrument-Serif` | InstrumentSerif-Regular.woff2 | statement touts, page titles, mega display |
| `Instrument-Serif-Italic` | InstrumentSerif-Italic.woff2 | the italic line of the mega display |
| `Instrument-Mono` | InstrumentSansMono-Regular.woff2 | declared (`--text-mono`), not seen on the homepage |

Stacks are tokenised: `--text-sans: "Instrument-Sans",Helvetica,sans-serif`, `--text-serif:
"Instrument-Serif",Times,serif`, `--text-serif-italic`, `--text-mono: "Instrument-Mono",Courier,monospace`.

Instrument Sans is "a variable sans-serif which balances an abundance of precision with subtle notes of
playfulness" with axes wdth 75–100 and wght 400–700 and 12 stylistic sets
([GitHub](https://github.com/Instrument/instrument-sans)). Instrument Serif is "a condensed, display serif"
([GitHub](https://github.com/Instrument/instrument-serif)). Both are by Rodrigo Fuenzalida and SIL OFL 1.1.

### Weight is set through the variable axes, not font-weight
Computed `font-weight` is 400 on every measured element, but the type tokens push the variable axes through
`font-variation-settings`:
- headlines (`t-headline-*`, card titles, footer newsletter line): `'wdth' 100, 'wght' 500`
- overlines and small pill labels (`t-overline-1`, `.button-small`): `'wdth' 80, 'wght' 400` — slightly condensed
- body copy and big buttons: `'wdth' 100, 'wght' 400`

Font features: body copy uses `"liga" on, "ss12" on`; headlines and overlines turn `ss12` off.

### Hierarchy (measured at 1280px)

| Token | Family | Size / line-height | Tracking | Where |
|---|---|---|---|---|
| display-mega-* | Serif / Sans / Serif-Italic | 285px / 226.25px | -14.25px | "Shape a better future." tri-font lines |
| display-page | Serif | 160px / 160px | -1.6px | Contact h1 "Contact Us" |
| display-tout | Serif | 60px / 70px | -0.6px | centred statement touts |
| headline-3 | Sans, wght 500 | 35px / 40px | -0.35px | diptych title, closing tout |
| headline-2 | Sans, wght 500 | 28.75px / 35px | -0.14375px | footer newsletter line, Contact h2 |
| headline-1 | Sans, wght 500 | 23.75px / 30px | 0.11875px | work and news card titles |
| body-2 | Sans | 22.5px / 35px | 0.45px | long body copy, x-large button label |
| body-1 | Sans | 18.75px / 30px | 0.5625px | diptych copy, cookie text, footer links |
| button-large | Sans | 18.75px / 18.75px | 0.5625px | footer "Subscribe on LinkedIn" |
| base | Sans | 16px / 16px | normal | body default |
| overline-1 | Sans, wdth 80, UPPERCASE | 15px / 20px | 1.65px | nav pills, section labels, hashtags, ticker |
| legal | Sans | 13.75px / 20px | 0.6875px | sitemap / copyright |

Mobile (390px): body copy 16px / 24px / 0.4px, overline 12px / 16px / 1.32px, Contact h1 64px / 64px.

### Principles
- No bold anywhere. Emphasis = scale jump or family switch (sans → condensed serif).
- Display tracking is tight and proportional (−0.01em on touts, −0.05em on the 285px mega line); small type is
  tracked open (+0.11em on overlines, +0.03em on body-1).
- Line-heights are multiples of the 8-unit baseline in the source (`calc(var(--baseline)*3.5)` etc.), then
  scaled with the viewport.
- The masthead wordmark is an SVG (variable version per the rebrand article), never live text.

### Note on Font Substitutes
No substitute is needed: Instrument Sans and Instrument Serif are free on Google Fonts and GitHub under OFL.
Load the variable Instrument Sans (to keep the wdth 80 overline and wght 500 headline axes) and Instrument
Serif Regular + Italic. If the variable file is unavailable, use Instrument Sans Medium for headlines and
Regular elsewhere; the condensed overline look then needs the `wdth` axis and cannot be faked with tracking.

## Layout

### Spacing System
`--baseline: 8`. Every space token is `--space-{n} = baseline × n/8` unitless, then converted to a fluid
length: below 640px it is `n/390 × 100vw`, then `/640`, `/1024`, `/1440`, `/1920`
([entry.css](https://www.instrument.com/_nuxt/entry.ee029dff.css)). At a 1280px viewport that yields the
measured values: space-6 = 7.5px, space-8 = 10px, space-12 = 15px, space-16 = 20px, space-20 = 25px,
space-24 = 30px, space-48 = 60px, space-64 = 80px, space-96 = 120px. Token names in this file keep the
source's `space-{n}` numbering.

### Grid & Container
- Side gutter `--side-spacing`: space-24 on mobile, space-32 from 40rem, space-48 from 64rem — 60px measured
  at 1280px (content width 1160px).
- `--grid-gap: 8px` (fixed, not fluid): the two 576px work cards sit 8px apart.
- `.card-grid` columns come from `--card-grid-columns-{small|medium|large|xlarge|max}` switched at 40rem,
  64rem, 90rem, 120rem; row gap space-48 → space-64 from 64rem.
- Header height `--header-height: 60px` (61px measured).

### Whitespace Philosophy
Sections are separated by large empty fields (space-96 = 120px) rather than rules or background bands; the only
hairline is the 12% ink line above "Recent work". Touts are centred, narrow (≈835px) and float in white.

## Elevation & Depth

The site is flat. Measured box-shadows on the homepage: none. The single exception is the floating cookie
banner (`.gdpr`), which uses a `filter: drop-shadow(0 37px 80px rgba(0,0,0,.22)) drop-shadow(0 4.63297px
10.0172px rgba(0,0,0,.11))` from the homepage's inline CSS. Depth otherwise comes from imagery (video, product
photography) and from the sticky header, which gains `background-color: var(--theme-background)` when stuck
and a `global-header--hide` modifier slides it out with `translateY(-100%)`.

### Decorative Depth
Media inside cards is scaled to 1.05 and settles to 1 on hover (`transform .25s`), only under
`prefers-reduced-motion: no-preference`. Neighbouring cards dim to 50% opacity while one is hovered.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| pill | 9999px (the site's literal is 999px) | every button shape, nav pill, tag |
| media | 24px (`--border-radius`) | video, work/news card media, slideshow, active filter bead |
| control | 32px | 32×32 white pause/play controls on video |
| banner | 16px | cookie banner |
| circle | 50% | 91px play icon |

### Photography Geometry
Work and news media are 1:1 squares (`aspect-ratio:1/1`); hero video is 16:9 bleeding to the viewport edge
with the 24px radius still applied. No borders or frames on images.

## Components

### Buttons
Every button is the same anatomy: `<a class="button-{size} [variant]"><span class="shape"><span
class="label">…</span><span class="icon">…</span></span></a>`. The outer link has no fill; the `.shape` carries
`background: var(--theme-accent-background)`, `border: 2px solid transparent`, `border-radius: 999px`, padding
from `--padding-block`/`--padding-inline`, and transitions background-color and color over .25s.

Sizes (from the stylesheet): `button-small` (space-3 × space-10, overline-1 type, uppercase), `button-medium`
(space-4 × space-12, overline-2), `button-large` (space-8 × space-20, body-1), `button-x-large` (space-8 ×
space-20, body-2, 24px icon), `button-xx-large` (as x-large, full width).

- **Primary (x-large)** — "View All Work →": `#070708` fill, white label 22.5px/35px, 10px 25px padding,
  59px tall incl. the 2px transparent border, trailing 24px arrow at 50% white.
  Hover: fill `#070708bf`. Active: back to solid and `transform: scale(.975)`.
- **Inverted (large)** — footer "Subscribe on LinkedIn": white `#ffffff` fill, `#070708` label 18.75px,
  10px 25px, 43px tall. Hover: `#ffffffbf`.
- **Abacus / shade (small)** — nav and filter pills: `#0707081f` fill, `#070708` uppercase 15px label at
  wdth 80, 3.75px 12.5px padding, 31px visible pill inside a 61px-tall hit area. Hover keeps the 12% shade.
- **Outline (`storyblok__outline`)** — appears as a CMS variant on "Learn more about us"; computed styles were
  not separately measured, so do not specify it beyond "same pill geometry".

### Filter Bar ("abacus")
`RECENT WORK` overline followed by small shade pills. The active state is not a recolour of the pill — a
separate black `.bead` (radius 24px, `#070708`) slides beneath the active pill and its label turns white. This
sliding-bead behaviour is a signature interaction.

### Cards & Containers
- **Work card**: 576×576 media with 24px radius, then 20px gap (space-16), title 23.75px headline-1, then
  `# PRODUCT` hashtag in overline-1 at 50% ink. No card background, border or shadow — the image is the card.
- **News (latest) card**: same media, `PRESS` tag pill (`tag--pill-shade`: `#0707081f`, 999px, 4px 10px,
  28px tall), title in headline-1 with the dek in `#808080` running on in the same line, read-time overline.

### Inputs & Forms
No input exists on the homepage, Work or Contact pages (all three measured). The stylesheet defines form focus
as `outline: 2px solid var(--theme-accent-background); outline-offset: 2px`, but field geometry is not
measured, so no text-input token is declared.

### Navigation
A 61px header with no background on the light page; left group `WORK / SERVICES / ABOUT`, ticker in the centre,
right group `CAREERS / LATEST / CONTACT`, all as small abacus pills. The wordmark sits beneath as the
page masthead (1160×121 SVG). On mobile the nav collapses to a logo and an "Open Menu" control (measured mobile
nav text "Skip Navigation / Open Menu"). A visually hidden "Skip Navigation" link (black, white text, 0 20px
padding) slides in on focus.

### Pills, Tags, and Chips
Tags are hashtag links (`#` in a 2px-padded span, then the word) in overline-1 at 50% ink, or `tag--pill`
variants: `pill` (accent fill), `pill-inverted`, `pill-shade` (12% fill — the one measured).

### Signature Components
- **Masthead wordmark** — full-width black SVG; never shrink it into a small logo on desktop.
- **Text tout** — centred Instrument Serif 60px statement with a single black pill CTA beneath.
- **Tri-font mega headline** — 285px lines, each in a different Instrument face, tracking −14.25px, tight
  226.25px line-height so lines nearly touch.
- **Cookie banner** — floating black slab, 16px radius, 15px 15px 15px 30px padding, 18.75px white copy with
  50% white secondary text, two small white pills `ENABLE COOKIES` / `DISABLE COOKIES`.
- **Footer** — full-bleed `#070708`, 28.75px newsletter line, white inverted pill, column headings in
  overline-1 with 60px top / 30px bottom padding, links 18.75px at 50% white, 13.75px legal row.

## Design System Architecture

Instrument publishes **no public design system** — no documentation site, component library, npm token package
or Figma community kit. Its public GitHub org lists the two typeface repos, a Figma text-style audit plugin and
older client experiments only ([GitHub org listing](https://api.github.com/orgs/Instrument/repos?per_page=100&sort=pushed)).
What it does publish are the typefaces and the brand rationale; the rest below is read from the production
stylesheet ([entry.css](https://www.instrument.com/_nuxt/entry.ee029dff.css)) and page HTML
([instrument.com](https://www.instrument.com/)), i.e. the de-facto system.

### Brand intent (official)
The rebrand article describes "a custom suite of serif, sans, and monospaced typefaces" made "with independent
Chilean type designer Rodrigo Fuenzalida and the Google Fonts team", a variable wordmark "that lets us make
optical adjustments", and a palette system "created with accessibility in mind" that "leverages the perceptual
uniform color space to ensure our colors guarantee sufficient contrast across our brand surfaces". The aim:
"a toolkit everyone at Instrument could engage with and participate in"
([rebrand article](https://www.instrument.com/latest/from-old-to-bold-instrument-rebrand-signals-energetic-shift)).

### Token architecture
Two tiers in plain CSS custom properties, no component tier:
- **Primitive/scale**: `--baseline: 8`; `--space-{n}-unitless: calc(var(--baseline)*n/8)` and
  `--space-{n}` (fluid length); type primitives per role and step, named
  `--t-{role}-{step}-{property}` — verbatim examples `--t-body-2-size`, `--t-body-2-line-height`,
  `--t-headline-3-letter-spacing`, `--t-overline-1-width`, `--t-caption-1-weight`, `--t-display-2-size`.
  Roles: `display-1..3`, `headline-1..7`, `body-1..3`, `overline-1..2`, `caption-1..2`.
  Family primitives `--text-sans`, `--text-serif`, `--text-serif-italic`, `--text-mono`; plus
  `--border-radius: 24px`, `--grid-gap: 8px`, `--header-height: 60px`, `--easing: cubic-bezier(.73,.24,.68,.82)`,
  `--timing: .3s`.
- **Semantic/theme**: `--theme-foreground`, `--theme-background`, `--theme-accent-foreground`,
  `--theme-accent-background`, each with `-faded`, `-neutral`, `-shade` alpha siblings (.75 / .5 / .12).
  Components only ever reference these — never a hex.
Utility classes `.t-body-2`, `.t-headline-3`, `.t-overline-1` apply a full type token (family, fluid size,
variation axes, tracking, line-height, feature settings).

### Theming
Themes are switched by a `data-theme` attribute on `<body>`: `[data-theme=light]` (`#070708` on `#fff`),
`[data-theme=dark]` (`#e8e8e9` on `#070708`), and `data-theme="custom"`, where the CMS writes all 16 theme
variables inline — the Contact page sets `--theme-background: #EFAD41` and `--theme-foreground: #1F2021`
([contact page](https://www.instrument.com/contact)). `[data-theme]` transitions background and colour over
.35s, so palette changes animate between pages. No density or high-contrast modes exist.

### Type & spacing systems
8-unit baseline; line-heights are baseline multiples. Type sizes are stepped per breakpoint by redefining the
`:root` tokens at 64rem (e.g. body-2 16 → 18, headline-1 15 → 19) and then made fluid by dividing by the
design width of the active band: `font-size: calc(var(--t-body-2-size)/1024*100vw)` from 1024px,
`/1440` from 1440px, `/1920` from 1920px, `/390` below 640px. This is why measured sizes are fractional
(18 / 1024 × 1280 = 22.5px). Spacing scales identically.

### Component model
Vue single-file components rendered by Nuxt (`#__nuxt`, `/_nuxt/` bundles) with content from Storyblok
(`storyblok__*` classes). Inventory visible in markup: global-header / global-nav, buttons in five sizes ×
variants (`button-regular`, `button-inverted`, `button-abacus`, `button-shade`, `button-shade-inverted`,
`storyblok__outline`), abacus filter with bead, tag (`tag--pill`, `--pill-inverted`, `--pill-shade`,
`--medium`), work-card, latest-card, card-grid, text-tout, diptych-text, video-clip / video-feature with
play-icon, swiper slideshow with pagination, client-list-rotator, gdpr banner, global-footer. States are
`:hover` (only under `(hover:hover) and (pointer:fine)`), `:active` (scale .975), `.currentHover`,
`[disabled]` (cursor default).

### Accessibility rules
- Skip link `#skip-navigation` as the first focusable element.
- `:focus-visible { outline: 5px auto -webkit-focus-ring-color }` globally, `:focus:not(:focus-visible)`
  suppressed; buttons move focus styling to the pill (`:focus-visible > .shape` mirrors hover); form fields
  get `outline: 2px solid var(--theme-accent-background); outline-offset: 2px`.
- Motion: hover zooms and card dimming are wrapped in `prefers-reduced-motion: no-preference`.
- Visually hidden text for card tags ("This is tagged with: product") and for the mega headline (a hidden
  h3 carries "Shape a better future.").
- Contrast is a stated brand goal (perceptual colour space, per the rebrand article); no numeric target or
  touch-target minimum is published. The small nav pill is 31px tall visually but sits in a 61px hit area.

### Delivery
No package or Figma kit is distributed. The fonts are the only shipped artefacts: GitHub
`Instrument/instrument-sans` and `Instrument/instrument-serif` (OFL 1.1), also on Google Fonts. Internally
Instrument maintains a Figma plugin to audit text styles
([figma-text-style-scraper](https://github.com/Instrument/figma-text-style-scraper)). CSS assets are
content-hashed (`entry.ee029dff.css`); there is no public versioning.

## Do's and Don'ts

### Do
- Keep the chrome strictly `#070708` on `#ffffff`; let project imagery supply all colour.
- Express every tint as ink at .75 / .5 / .12 alpha (`#070708bf`, `#07070880`, `#0707081f`).
- Use pills (999px) for every interactive control and 24px radius for every media surface.
- Set small labels in uppercase Instrument Sans at wdth 80 with +0.11em tracking (15px / 1.65px at 1280px).
- Pair a condensed Instrument Serif statement with a single black pill CTA.
- Scale type and spacing with the viewport using the size / design-width × 100vw formula.
- Put the full-width masthead wordmark above the first fold.
- Use weight through the variable axis (`'wght' 500` for headlines) rather than `font-weight: bold`.

### Don't
- Don't add a brand colour, gradient or semantic palette to the marketing UI.
- Don't use drop shadows on cards; the only shadow is the floating cookie banner.
- Don't use square or slightly rounded buttons — the shape is always a full pill.
- Don't set body copy below 16px or headlines in bold weights.
- Don't put borders or backgrounds on work cards; the image is the card.
- Don't recolour the active filter pill — slide the black bead under it.
- Don't substitute another grotesk; the fonts are free and are the identity.
- Don't use the serif for UI labels or the sans for statement touts.

## Responsive Behavior

### Breakpoints
From the stylesheet: 640px / 40rem (tablet: side spacing space-32, card grid medium), 1024px / 64rem (desktop:
type tokens step up, side spacing space-48, desktop nav), 1440px / 90rem and 1920px / 120rem (only the fluid
divisor and grid column count change). Header switches from small nav to `global-nav-large` at 64rem.

### Touch Targets
Nav pills keep a 61px-tall link box on desktop and 53px header on mobile (measured), though the visible pill is
only 31px. Primary pill CTA is 59px tall at 1280px.

### Collapsing Strategy
- Nav shows masthead + "Open Menu" below 64rem (breakpoint recorded in the data; layout not otherwise measured).
- Body copy steps from 22.5px (1280px) to 16px / 24px (390px); overlines 15px → 12px; Contact h1 160px → 64px.
- Card grid drops to fewer columns per `--card-grid-columns-*`; work-card hashtags are hidden below 40rem.
- The cookie banner becomes a full-width bottom sheet below 40rem (radius applied from 40rem).

### Image Behavior
Square media keeps `aspect-ratio: 1/1` at all sizes; hero video stays 16:9, full-bleed, with the 24px radius.

## Iteration Guide

1. Start with `#ffffff` canvas and `#070708` ink; define the four alpha steps before any component.
2. Load Instrument Sans (variable) and Instrument Serif (+ Italic); wire `--text-sans` / `--text-serif`.
3. Build the type tokens as role/step sets and apply the fluid formula; verify body-2 = 22.5px at 1280px.
4. Build one pill `.shape` and derive all button sizes from padding variables (10px 25px for x-large at 1280px).
5. Add the abacus filter with its sliding black bead before styling individual chips.
6. Make media squares with 24px radius and no chrome; add the 1.05 → 1 hover zoom behind reduced-motion.
7. Compose the homepage rhythm: pill nav → masthead → rounded video → serif tout + CTA → filtered grid.
8. Finish with the black footer (inverted white pill) and the floating 16px-radius cookie banner.
9. To theme a page, override the 16 `--theme-*` variables on `<body data-theme="custom">` — never restyle components.
