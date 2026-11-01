---
version: alpha
name: frog
category: "Agencies & Studios"
description: "frog (part of Capgemini Invent) runs a near-monochrome, cinematic system — pure #000000 canvas with #ffffff type, the self-hosted frogSerif at weight 300 for 60–180px editorial headlines, GT America (400/500/700) for everything else, square 0px buttons with a 3px border that invert on hover, a single 16px-radius region chip, and five Bootstrap-era highlight colors (--hl-green #4ee601 etc.) kept in reserve."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  canvas: "#000000"
  ink: "#ffffff"
  surface-light: "#ffffff"
  ink-on-light: "#000000"
  ink-muted: "#ffffff80"
  ink-muted-on-light: "#00000080"
  divider: "#ffffff80"
  hairline-on-light: "#0000001a"
  border-gray: "#929292"
  border-gray-soft: "#888888"
  dropdown-row-hover: "#f4f4f4"
  road-ahead-navy: "#070b2e"
  hl-green: "#4ee601"
  hl-blue: "#41acf7"
  hl-orange: "#fb6446"
  hl-yellow-light: "#feef86"
  hl-pink-light: "#e2c5e4"
  bootstrap-danger: "#dc3545"
  bootstrap-success: "#28a745"

typography:
  display-hero:
    fontFamily: "frogSerif, source-han-serif-sc, serif"
    fontSize: 180px
    fontWeight: 300
    lineHeight: 132px
  display-page:
    fontFamily: "frogSerif, source-han-serif-sc, serif"
    fontSize: 96px
    fontWeight: 300
    lineHeight: 96px
    letterSpacing: normal
  display-section:
    fontFamily: "frogSerif, source-han-serif-sc, serif"
    fontSize: 60px
    fontWeight: 300
    lineHeight: 60px
    letterSpacing: normal
  display-md:
    fontFamily: "frogSerif, source-han-serif-sc, serif"
    fontSize: 48px
    fontWeight: 300
    lineHeight: 54px
  display-mobile:
    fontFamily: "frogSerif, source-han-serif-sc, serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: normal
  display-hero-mobile:
    fontFamily: "frogSerif, source-han-serif-sc, serif"
    fontSize: 84px
    fontWeight: 300
    lineHeight: 80px
  quote:
    fontFamily: "\"GT America\", source-han-sans-simplified-c, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 56px
  heading:
    fontFamily: "\"GT America\", source-han-sans-simplified-c, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: normal
  body-xl:
    fontFamily: "\"GT America\", source-han-sans-simplified-c, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  body-lg:
    fontFamily: "\"GT America\", source-han-sans-simplified-c, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: normal
  nav-link:
    fontFamily: "\"GT America\", source-han-sans-simplified-c, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: normal
  body:
    fontFamily: "\"GT America\", source-han-sans-simplified-c, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: normal
  body-mobile:
    fontFamily: "\"GT America\", source-han-sans-simplified-c, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: normal
  cta-link:
    fontFamily: "\"GT America\", source-han-sans-simplified-c, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 26px
  button:
    fontFamily: "\"GT America\", source-han-sans-simplified-c, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: normal
  button-filter:
    fontFamily: "\"GT America\", source-han-sans-simplified-c, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: normal
  button-block:
    fontFamily: "\"GT America\", source-han-sans-simplified-c, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 1
  banner-title:
    fontFamily: "\"GT America\", source-han-sans-simplified-c, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px

rounded:
  none: 0px
  chip: 16px
  circle: 50%

spacing:
  hairline: 1px
  xxs: 3px
  xs: 4px
  sm: 8px
  md: 12px
  gutter: 15px
  lg: 16px
  xl: 24px
  xxl: 32px
  section-sm: 48px
  section-md: 56px
  section-lg: 64px
  section-xl: 104px
  section-xxl: 144px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 24.5px
    height: 48px
    border: 3px solid
  button-primary-hover:
    filter: invert(100%)
    transition: filter .3s
  button-filter:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-filter}"
    rounded: "{rounded.none}"
    padding: 12px 20px
    height: 52px
  button-block:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-block}"
    rounded: "{rounded.none}"
    height: 72px
    minWidth: 250px
    border: 3px solid
    hover: white gradient wipe left-to-right, text turns {colors.ink-on-light}, transition all .5s
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    rounded: "{rounded.chip}"
    padding: 3px 16px
    height: 32px
    border: "1px solid #ffffff"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
  cta-link:
    textColor: "{colors.ink}"
    typography: "{typography.cta-link}"
    hover: opacity .6 on label and icon, transition all .45s
  nav:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    maxWidth: 1140px
    itemGap: 32px
    hover: 2px underline grows left-to-right, transition right .3s ease-out
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    headline: "{typography.display-section}"
    divider: "{colors.divider}"
    padding: 64px 0
  cookie-banner:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink-on-light}"
    borderTop: "1px solid #000000"
    padding: 32px
    title: "{typography.banner-title}"
---

## Overview

frog's site is a dark screening room. The homepage opens on a full-viewport black hero (`{colors.canvas}` — `#000000`) holding a single rendered still of a glossy black frog lit from above, with the words "frog showreel" set in the house serif and a thin white circular play button laid over them. Everything after that is a slow sequence of full-bleed media bands: a desaturated grey product render (the "Designing Robots for Human Spaces" case study) with a five-segment progress pager beneath it, then a black studio section ("Welcome to the pond") with a dotted world map ghosted in the background. Colour is almost entirely withheld — the brand speaks through photography, video, and typographic contrast.

Measured on the live homepage, black fills 7,444 units of area against 1,575 of white, and white text (`{colors.ink}` — `#ffffff`) accounts for 4,065 characters against 925 in black. The only true white surface is the cookie banner and light-mode pages such as `/contact`, where the polarity flips to black-on-white. The site's action color is therefore black itself: the filled `{colors.primary}` button is a black block with white text and a 3px border, and on dark bands it reads as an outlined frame.

Typography is a two-family system. **frogSerif** — a self-hosted serif served from `/fonts/frogSerif/` in a single regular and italic cut, rendered at weight 300 — carries every editorial headline from 40px up to the 180px hero. **GT America** (Grilli Type, Standard width, 400/500/700) carries nav, body, captions, buttons, and the 40px pull-quotes in work hover cards. There is no letter-spacing anywhere (all measured `letterSpacing: normal`).

**Key Characteristics:**
- Black canvas (`#000000`) with white type; light pages invert to white canvas, black ink — never grey backgrounds.
- frogSerif weight 300 at large sizes (60px section headings, 96px page titles, 180px hero) with line-height equal to or tighter than the font size.
- GT America 400 for running text (16px / 22px), 18px / 24px for nav and links, 20px / 28px for lead text, 500 for 24px card titles.
- Square geometry: every button and image is 0px radius; the single exception is the 16px-radius "Global" region chip in the header.
- Hover states are inversions and wipes, not color shifts: `filter: invert(100%)`, a gradient wipe across 3px-bordered blocks, a 2px underline drawing in under nav items, opacity .6–.8 on links.
- Five highlight colours (`--hl-green`, `--hl-blue`, `--hl-orange`, `--hl-yellow-light`, `--hl-pink-light`) live in root vars for editorial highlighting, but none appeared on the measured homepage.

## Colors

> **Source pages:** home (`https://www.frog.co`), `/contact`, `/designmind`; plus frog.co's own served CSS (see SOURCES.json).

### Brand & Action
- **Primary / Black** (`{colors.primary}` — `#000000`): fill of the filled button (ButtonLite) and of the "Apply" filter button; the brand has no chromatic accent for actions.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): label color on black buttons.
- **Road Ahead Navy** (`{colors.road-ahead-navy}` — `#070b2e`): the only non-neutral surface in the components CSS — the wipe color of the `Button_theRoadAhead` variant used on a campaign theme.

### Surface
- **Canvas** (`{colors.canvas}` — `#000000`): page background of home and `/designmind`, the footer, and every media band.
- **Surface Light** (`{colors.surface-light}` — `#ffffff`): canvas of light pages (`/contact`), the cookie banner, the region dropdown.
- **Dropdown Row Hover** (`{colors.dropdown-row-hover}` — `#f4f4f4`): hover background of a row in the region dropdown table.

### Text
- **Ink** (`{colors.ink}` — `#ffffff`): the most-read text color on the homepage (4,065 chars).
- **Ink on Light** (`{colors.ink-on-light}` — `#000000`): body text on white pages and the cookie banner.
- **Ink Muted** (`{colors.ink-muted}` — `#ffffff80`): 50% white, used for secondary text on black.
- **Ink Muted on Light** (`{colors.ink-muted-on-light}` — `#00000080`): 50% black, measured on `/designmind` for meta text on white.

### Lines
- **Divider** (`{colors.divider}` — `#ffffff80`): the 1px footer `hr` (`rgba(255,255,255,.5)`).
- **Hairline on Light** (`{colors.hairline-on-light}` — `#0000001a`): 10% black borders on white surfaces.
- **Border Gray** (`{colors.border-gray}` — `#929292`) and **Border Gray Soft** (`{colors.border-gray-soft}` — `#888888`): measured border colors on the carousel pager segments.

### Highlights (root vars)
frog's root declares five highlight colors next to the Bootstrap defaults. They are used for editorial highlighting (`.table-hl-*` classes exist in the CSS) and are not seen in the homepage capture:
- **hl-green** (`{colors.hl-green}` — `#4ee601`)
- **hl-blue** (`{colors.hl-blue}` — `#41acf7`)
- **hl-orange** (`{colors.hl-orange}` — `#fb6446`)
- **hl-yellow-light** (`{colors.hl-yellow-light}` — `#feef86`)
- **hl-pink-light** (`{colors.hl-pink-light}` — `#e2c5e4`)

### Semantic
There is no frog-specific semantic palette. The served CSS bundles Bootstrap v4.6.2, which brings `--danger` (`{colors.bootstrap-danger}` — `#dc3545`) and `--success` (`{colors.bootstrap-success}` — `#28a745`) and the matching `.is-invalid` / `.is-valid` form styles. Treat these as inherited framework defaults, not brand colors; Bootstrap's `--primary: #007bff` is also present and is **not** frog's primary.

## Typography

### Font Family
- **frogSerif** (`frogSerif, source-han-serif-sc, serif`): self-hosted from `/fonts/frogSerif/frogSerif-Regular.woff2` and `-Italic.woff2`, `font-display: block`. Used for all editorial display type. Headline rules often turn on `font-feature-settings: "ss03" on` at desktop and `"pnum" on, "lnum" on` (proportional lining figures) at mobile.
- **GT America** (`"GT America", source-han-sans-simplified-c, sans-serif`): Grilli Type's grotesque, Standard width, three cuts self-hosted (Regular 400, Medium 500, Bold 700). The root fallback stack is `"GT America", -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif`.
- `source-han-sans-simplified-c` / `source-han-serif-sc` are CJK fallbacks for the China site.

### Hierarchy

| Token | Family | Size | Weight | Line Height | Use |
|---|---|---|---|---|---|
| `{typography.display-hero}` | frogSerif | 180px | 300 | 132px | HeroCover h1 at ≥1200px |
| `{typography.display-hero-mobile}` | frogSerif | 84px | 300 | 80px | HeroCover h1 on mobile |
| `{typography.display-page}` | frogSerif | 96px | 300 | 96px | Page h1 ("Views from the pond", contact headline) |
| `{typography.display-section}` | frogSerif | 60px | 300 | 60px | Section h2 ("Welcome to the pond"), footer headline |
| `{typography.display-md}` | frogSerif | 48px | 300 | 54px | TextVideo h3 |
| `{typography.display-mobile}` | frogSerif | 40px | 400 | 48px | Section h2 at 390px |
| `{typography.quote}` | GT America | 40px | 400 | 56px | Work hover-card pull-quote |
| `{typography.heading}` | GT America | 24px | 500 | 24px | Carousel card title (h3) |
| `{typography.body-xl}` | GT America | 24px | 400 | 32px | TextVideo paragraph |
| `{typography.body-lg}` | GT America | 20px | 400 | 28px | Section intros, footer subheadline |
| `{typography.cta-link}` | GT America | 20px | 500 | 26px | Arrow CTA label |
| `{typography.button}` | GT America | 20px | 400 | 28px | Filled button label |
| `{typography.button-filter}` | GT America | 22px | 400 | 28px | "Apply" filter button |
| `{typography.button-block}` | GT America | 24px | 500 | 1 | Full-width block button |
| `{typography.nav-link}` | GT America | 18px | 400 | 24px | Nav, inline links, region chip |
| `{typography.banner-title}` | GT America | 18px | 500 | 24px | Cookie banner title |
| `{typography.body}` | GT America | 16px | 400 | 22px | Running text |
| `{typography.body-mobile}` | GT America | 14px | 400 | 22px | Running text at 390px |

The measured font-size distribution on the homepage, by characters: 20px (1,780), 18px (1,266), 24px (721), 16px (538), 40px (494), 14px (91), 60px (80), 80px (26), 48px (11). Weights: 400 (3,979), 500 (840), 300 (173), 700 (15).

### Principles
- **Serif is thin and huge.** frogSerif appears only at 40px and above, at weight 300 on desktop. Line-height equals the size (60/60, 96/96) or goes tighter (180/132, 84/80).
- **The sans does the work.** GT America sets every functional string. Medium 500 marks titles; Regular 400 is everything else. Bold 700 only shows up in tiny amounts (15 chars), e.g. underlined links in the subscribe banner.
- **No tracking.** Every measured role has `letter-spacing: normal`. Do not add negative tracking to the serif.
- **Stepped, not fluid.** Sizes jump at Bootstrap breakpoints (`min-width: 768px`, `992px`, `1200px`); no `clamp()` was found.

### Note on Font Substitutes
Both faces are proprietary. GT America is a commercial Grilli Type family (Noël Leu with Seb McLauchlan, 2016). The frogSerif files are self-hosted under a custom family name. We found no public statement of which foundry design it is based on, so this file does not name one. As stand-ins: for GT America, use a neutral American grotesque such as **Inter** or **Public Sans** at 400/500. For frogSerif, use a high-contrast light text serif such as **Newsreader** or **Fraunces** at weight 300. Keep line-height equal to the size and tracking at 0. These are approximations, not measured matches.

## Layout

### Spacing System
- **Base:** Bootstrap's 15px gutter (`padding: 0 15px` is the most frequent padding, 31 occurrences) combined with an 8px rhythm: `{spacing.sm}` 8px, `{spacing.lg}` 16px, `{spacing.xl}` 24px, `{spacing.xxl}` 32px, `{spacing.section-sm}` 48px, `{spacing.section-md}` 56px, `{spacing.section-lg}` 64px.
- **Section padding:** stepped by breakpoint — e.g. ArticlesCarousel `64px 0 144px` → `104px 0` → `144px 0`; MainCarousel padding-bottom `104px` → `144px`; StudiosCarousel padding-top `80px` → `104px` → `144px`. Tokens: `{spacing.section-xl}` 104px, `{spacing.section-xxl}` 144px.
- **Small details:** `{spacing.xxs}` 3px (chip vertical padding), `{spacing.xs}` 4px, `{spacing.md}` 12px (CtaButton arrow gap, carousel text margin).
- **Only one flex gap** was measured: 8px (inside the region chip).

### Grid & Container
- Bootstrap 4 container: max 1140px at ≥1200px (`DesktopNavigation` is `max-width: 1140px; margin: auto`), 960px at ≥992px, 720px at ≥768px, with 15px gutters.
- The ArticlesCarousel breaks out to the right edge: `max-width: calc(100% - (100% - 1290px)); margin-left: calc((100% - 1140px)/2)`. Content aligns to the container's left edge while slides bleed off-screen right.
- Two-column splits: on the homepage carousel, the pager sits in the left half and the case-study title, description, and "Explore the work →" link in the right half (each column is 570px wide at 1280px).

### Whitespace Philosophy
Very low density. Each homepage band is close to a full viewport: the hero is `calc(100vh - 64px)`, and carousel media are 810px tall at desktop (432px mobile, 556px tablet). Text blocks are short, two lines at most, and sit in generous black space. Media carries the story; copy is captioning.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | Every surface on the site |
| 1 | `box-shadow: 12px 12px 16px rgba(0,0,0,.16)` | Region-selector dropdown (white table) |
| — | `inset 0 -2px 0 0 #ffffff` | Active carousel pager segment (measured), a drawn line rather than depth |

### Decorative Depth
Depth comes from imagery and light, not from shadows. The hero and footer each contain a `glareContainer`: an absolutely positioned light flare behind the content (the hero's is 140% × 140%, offset −20% / −75%). Photography is lit low-key with specular highlights on black. The studios section layers a dotted world map at `z-index: -1` behind its heading.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | All buttons, images, media, banners, cards |
| `{rounded.chip}` | 16px | "Global" region selector chip (32px tall, so it reads as a pill) |
| `{rounded.circle}` | 50% | Circular icon elements (measured on `/designmind`), the hero play ring |

### Photography Geometry
Media are full-bleed rectangles with `object-fit: cover; object-position: 50% 50%` and no rounding. Article lead images are 620px tall at desktop and 327px on mobile. Product renders are cool and desaturated (grey on grey); people photography appears inside case studies, not as hero decoration.

## Components

### Buttons
- **Filled button — ButtonLite** (`{components.button-primary}`): `{colors.primary}` fill, `{colors.on-primary}` label, `{typography.button}` (GT America 20px / 28px, 400), padding `10px 24.5px`, 48px tall, `{rounded.none}`, 3px solid border. Measured as the "Allow all Cookies" button. It is frog's own `ButtonLite` component, not a third-party consent widget.
- **Hover** (`{components.button-primary-hover}`): `filter: invert(100%)` with `transition: filter .3s`. Black becomes white and white becomes black, so the button flips polarity.
- **Filter button** (`{components.button-filter}`): the "Apply" button on `/designmind`. Black, white 22px / 28px label, padding `12px 20px`, 52px tall, 0px radius.
- **Block button** (`{components.button-block}`): `.Button_button`, full-width, 64px tall (72px from 768px), min-width 250px, GT America 24px / 500 / line-height 1, 3px border. Variants are `black`, `white`, `transparent`, and `theRoadAhead`. On hover, a 50/50 linear gradient slides across (`background-size: 200% 100%`, `background-position` 100% → 0) so the opposite color wipes in from the left over .5s, and the label inverts.
- **Secondary / region chip** (`{components.button-secondary}`): transparent, white 18px / 24px label, `1px solid #ffffff` border, `{rounded.chip}` 16px, padding `3px 16px`, 32px tall, `text-transform: capitalize`, with a chevron icon at 8px gap. On white pages the border and text become `#000000`.

### Links
- **Inline link** (`{components.link}`): `{typography.nav-link}` 18px / 24px in the current ink color, no underline. Hover lowers opacity to .8 (footer, region dropdown) or .6 (cookie banner).
- **Arrow CTA** (`{components.cta-link}`): "Explore the work ⟶". Label in GT America 500 (20px / 26px at desktop, 16px / 22px on mobile) with a 23px thin arrow 12px to its right. On hover, the label and icon fade to opacity .6 over .45s. A play-icon version prefixes video links.

### Navigation
- **Desktop nav** (`{components.nav}`): transparent bar over the hero, max-width 1140px. The frog + "Part of Capgemini Invent" logo lockup on the left is 170px wide with a 44px min-height. Items are GT America 18px / 24px, capitalized, with a 32px right margin at desktop (16px and 6px at smaller widths). Hover draws a 2px underline from left to right (`:before` right 100% → 0, .3s ease-out); the active item keeps a 2px bottom border. On white pages the nav gets a `white` modifier and the logo is inverted with `filter: invert(1)`.
- **Region dropdown:** a white table with 8px padding and `box-shadow: 12px 12px 16px rgba(0,0,0,.16)`. Rows are 16px / 22px, padded `7px 8px`, with `{colors.dropdown-row-hover}` on hover.
- **Mobile nav:** a hamburger opens a full-screen `MobileNavigation` panel.

### Carousel & Cards
- **Main carousel:** full-width media (810px desktop) with a figcaption below. The h3 is `{typography.heading}`, the paragraph 18px / 28px, then an arrow CTA. The pager is five horizontal segments, each 16.5% wide with 4.5% between them; the active segment is solid white and the rest are grey (`#929292` / `#888888`).
- **Work showcase hover card:** a black overlay that fades in (`opacity 0 → 1`, .5s) over a project tile, padded 32 / 48 / 64px by breakpoint. It holds a `{typography.quote}` pull-quote and a 24px / 32px line led by a 2px white rule 40–56px long.
- No elevated "card" component exists. Tiles are bare media with text.

### Footer
- **Footer** (`{components.footer}`): black, white text, padding `64px 0`. It opens with "Ready to make your mark?" in frogSerif at `{typography.display-section}` (60px / 60px, 300) and a 20px / 28px subheadline, then a `{colors.divider}` 1px rule. Navigation, social icons (which scale ×1.2 on hover), and legal links (opacity .8 on hover) follow. A background glare sits behind the footer.

### Cookie Banner
- **Banner** (`{components.cookie-banner}`): fixed to the bottom of the viewport, white, black text, `border-top: 1px solid #000000`, padding 32px. Title in `{typography.banner-title}`, copy in 16px / 22px, buttons in a container with 32px top padding.

### Inputs & Forms
No text input was rendered on the measured pages (`/contact` lists studio contacts and email links, not a form). The only form styles in the CSS are Bootstrap 4 `.form-control` defaults (focus ring `0 0 0 .2rem rgba(0,123,255,.25)`). Those are framework leftovers, not a frog component, so no input token is declared.

## Design System Architecture

**frog publishes no public design system.** We found no brand portal, token package, Storybook, or Figma kit. frog's GitHub account ([api.github.com/users/frogdesign](https://api.github.com/users/frogdesign)) has 0 public repositories. The brand-refresh article ([the-inspiration-for-our-new-brand](https://www.frog.co/designmind/the-inspiration-for-our-new-brand)) describes the brand as "curious, fearless, and inspiring" but gives no type, color, or component specifications. Searches for frog brand guidelines, design tokens, press kit, and the rebrand typeface returned nothing official (queries listed in SOURCES.json). Everything below is the de-facto system that ships in frog.co's own stylesheets: [2f097e44f3309819.css](https://www.frog.co/_next/static/css/2f097e44f3309819.css), [10cda735c084032a.css](https://www.frog.co/_next/static/css/10cda735c084032a.css), and [88d15d959c4eede6.css](https://www.frog.co/_next/static/css/88d15d959c4eede6.css).

### Token architecture
- **Two tiers, both thin.** The only CSS custom properties are on `:root`. Bootstrap v4.6.2 supplies the primitives and semantics (`--blue`, `--primary`, `--danger`, `--success`, `--gray-dark`, `--breakpoint-sm: 576px` … `--breakpoint-xl: 1200px`, `--font-family-sans-serif`). frog adds a short brand layer of highlight primitives, named verbatim: `--hl-green`, `--hl-blue`, `--hl-orange`, `--hl-yellow-light`, `--hl-pink-light`. frog also points the Bootstrap font variable at its own face (`--font-family-sans-serif: "GT America", -apple-system, …`).
- **No component tier in variables.** Component values are literals inside CSS Modules (`#000`, `#fff`, `rgba(255,255,255,.5)`, `16px`), repeated per component instead of referenced.

### Theming
- No dark/light mode switch and no `prefers-color-scheme` rules. Polarity is set **per component through class modifiers**: `Button_black` / `Button_white` / `Button_transparent`, `CtaButton_black` / `CtaButton_white`, `DesktopNavigation_white`, `RegionSelector_white`, `SubscribeBanner_black` / `SubscribeBanner_white`.
- One campaign theme exists as a modifier: `theRoadAhead` (`Button_theRoadAhead`, `DesktopNavigation_theRoadAhead`, `MobileNavigation_theRoadAhead`), with `#070b2e` as its wipe color.
- No density or high-contrast modes.

### Type & spacing systems
- Type is set per component, always as a full block (`font-family; font-style; font-weight; font-size; line-height`), with breakpoint overrides. The serif uses `font-feature-settings: "ss03" on` at desktop and `"pnum" on, "lnum" on` at mobile.
- Spacing follows Bootstrap's grid: 15px gutters and the container widths 720 / 960 / 1140px (per the carousel and nav rules). Section padding is stepped at 768 / 992 / 1200px (for example 64 → 104 → 144px). Media queries are mobile-first `min-width` (768px is used 135 times, 992px 52 times, 1200px 38 times), and there are 19 `prefers-reduced-motion: reduce` blocks.

### Component model
- **Next.js CSS Modules**, named `Component_element__hash` (e.g. `Footer_frogFooter__HdNTf`, `MainCarousel_pager__OPlOb`). Inventory found in the shipped CSS: `DesktopNavigation`, `MobileNavigation`, `RegionSelector`, `HeroCover`, `HeroDescription`, `MainCarousel`, `WorkShowcase`, `ArticlesCarousel`, `StudiosCarousel`, `TextVideo`, `SubscribeBanner`, `Banner` (cookie), `SettingsModal`, `Button`, `ButtonLite`, `CtaButton`, `Accordion`, `DetailsAccordion`, `DomainNameInfo`, `Footer`. The legacy `slick` carousel font and Bootstrap 3 `Glyphicons Halflings` are also bundled.
- Variants are color modifiers (`black`, `white`, `transparent`, `theRoadAhead`), plus size modifiers (`Button_large`, `CtaButton_large`) and icon-position modifiers (`CtaButton_left` / `_right`).
- States are hover only: invert, wipe, underline, and opacity. Focus outlines are removed (`outline: none`) on `ButtonLite` and `CtaButton`.

### Accessibility
No published accessibility mandate exists. In the CSS: white on black and black on white give a 21:1 contrast ratio. `prefers-reduced-motion` is honored in 19 places. However, `ButtonLite` and `CtaButton` set `outline: none` on `:focus`, so keyboard focus is not visibly styled on those components. Bootstrap's `button:focus:not(:focus-visible) { outline: 0 }` rule is also present. The region chip is 32px tall, below a 44px touch target.

### Delivery
The site is a Next.js app (`/_next/static/css/…`). Fonts are self-hosted under `/fonts/`. Bootstrap 4.6.2 is compiled into the global stylesheet. No npm package, versioned library, or Figma kit is published.

## Do's and Don'ts

### Do
- Put content on `{colors.canvas}` `#000000` with `{colors.ink}` `#ffffff`. Flip the whole page to white with black ink for utility pages; never use a mid-grey background.
- Set headlines in frogSerif weight 300 at 60px / 60px (sections) or 96px / 96px (page titles), with line-height no larger than the size.
- Use GT America 16px / 22px for body, 18px / 24px for nav and links, and 20px / 28px for intros.
- Keep buttons square (`{rounded.none}`) with a 3px border and a polarity flip on hover (`filter: invert(100%)` or the gradient wipe).
- Lead with full-bleed, low-key photography or video at near-viewport height. Let one line of copy caption it.
- Use the arrow CTA ("Explore the work ⟶") rather than a filled button for content navigation.
- Step sizes and section padding at 768 / 992 / 1200px.

### Don't
- Don't introduce a chromatic CTA. Bootstrap's `--primary #007bff` exists in the CSS but is not frog's color.
- Don't round buttons, cards or images. Only the region chip gets `{rounded.chip}` 16px.
- Don't add drop shadows to cards; the only shadow is on the region dropdown.
- Don't use frogSerif for small text or UI, and don't bold it. It stays at 300 (400 only on mobile).
- Don't add letter-spacing; every measured role is `normal`.
- Don't spray the `--hl-*` highlight colors as decoration. They are reserved and absent from the main pages.
- Don't remove keyboard focus visibility if you rebuild the components. The live site does, and you shouldn't copy that.

## Responsive Behavior

### Breakpoints

| Name | Width | Key changes |
|---|---|---|
| xs | < 576px | Single column; body 14px / 22px; section h2 40px / 48px (weight 400); hero h1 84px / 80px |
| sm | ≥ 576px | Bootstrap `--breakpoint-sm`; minor size steps |
| md | ≥ 768px | Container 720px; block button 72px tall; section padding steps up (e.g. 104px) |
| lg | ≥ 992px | Container 960px |
| xl | ≥ 1200px | Container 1140px; hero h1 180px / 132px; section padding 144px; carousel media 810px |

### Touch Targets
Filled buttons are 48px (ButtonLite) and 52px (Apply) tall, and block buttons 64–72px, which meets 44px. The region chip is 32px tall, below 44px. Carousel pager hit areas are 68px tall, larger than the visible 2px segment.

### Collapsing Strategy
- The desktop nav collapses to a hamburger with a full-screen `MobileNavigation` panel.
- Mobile carousel caption layout was not measured.
- Section h2 drops from 60px / 60px (300) to 40px / 48px (400). The serif gains weight on mobile to hold up at the smaller size.
- Running text drops from 16px to 14px; the mobile size table is led by 16px (2,112 chars), 20px, 14px, 18px.
- Section padding shrinks to 64–80px.

### Image Behavior
Media use `object-fit: cover` at fixed heights per breakpoint (carousel 432 / 556 / 810px; article lead 327 / 620px), centered. The hero is always `calc(100vh - 64px)` (104px offset at tablet).

## Iteration Guide

1. Start with a black `#000000` page and white `#ffffff` GT America 16px / 22px body text. If the result looks like a dark-mode app, add more black space and remove borders.
2. Add one full-bleed media band per idea, near viewport height, with a one- or two-line caption and an arrow CTA.
3. Set each section title in frogSerif 300 at 60px / 60px (or a substitute serif at weight 300). Check that it is the lightest, largest thing on screen.
4. Buttons: square, black, 3px border, 20px label, padding `10px 24.5px`, 48px tall, inverting on hover. If a button looks "designed", strip it back.
5. Header: logo lockup on the left; 18px nav items 32px apart with a 2px underline-on-hover; 16px-radius outlined "Global" chip on the far right.
6. Footer: black, frogSerif 60px "Ready to make your mark?", 20px subline, a 50%-white 1px divider, then small links.
7. Check responsive steps at 768 / 992 / 1200px. Sizes jump; they don't scale fluidly.
8. Before shipping, confirm that no color other than black, white, and their 50% alphas is visible, unless it is part of the photography.
