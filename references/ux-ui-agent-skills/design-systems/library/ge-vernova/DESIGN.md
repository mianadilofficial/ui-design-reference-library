---
version: alpha
name: GE Vernova
category: "Energy & Climate"
description: "GE Vernova (gevernova.com), the energy-equipment company spun off from GE: white #ffffff pages, deep evergreen #012d2f video hero and #212121 footer, Evergreen #005e60 as the dominant text and link colour, and Urgency Green #c8ff08 for pill-shaped CTAs (30px radius, 56px tall, 16px/600 ge-inter-semibold label in #005e60; hover fills #05625e with #f9fbfb text). Display type is the condensed ge-sons-condensed-extrabold, uppercase at 92px/74.52px; body is ge-inter-regular 18px/28px with -0.54px tracking. Story cards are white with 8px corners on an #e4f1f1 band."

colors:
  primary: "#c8ff08"
  primary-hover: "#05625e"
  on-primary: "#005e60"
  on-primary-hover: "#f9fbfb"
  control-hover: "#dafe5e"
  canvas: "#ffffff"
  ink: "#005e60"
  evergreen-900: "#004746"
  evergreen-1100: "#012d2f"
  light-evergreen: "#287f82"
  evergreen-600: "#519595"
  evergreen-400: "#acd2d2"
  evergreen-tint-3: "#c7dbdb"
  evergreen-300: "#cde4e4"
  evergreen-200: "#e4f1f1"
  evergreen-100: "#f5fbfb"
  night: "#212121"
  neutral-600: "#737373"
  gray-text: "#999999"
  neutral-300: "#d7dbdb"
  neutral-100: "#fafafa"
  disabled-bg: "#e7eeee"
  disabled-text: "#b2cccc"
  link-green: "#40cd24"
  link-green-hover: "#12a141"
  sky: "#59c3c9"
  forest: "#75ca64"
  earth: "#bfa682"
  alert: "#ec642b"
  red-600: "#bd3228"
  blue-600: "#2288c3"

typography:
  display-hero:
    fontFamily: "ge-sons-condensed-extrabold, sans-serif"
    fontSize: 92px
    fontWeight: 400
    lineHeight: 74.52px
    textTransform: uppercase
  display-page:
    fontFamily: "ge-sons-condensed-extrabold, sans-serif"
    fontSize: 136px
    fontWeight: 400
    lineHeight: 112px
    textTransform: uppercase
  heading-lg:
    fontFamily: "ge-inter-medium, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: -0.96px
  heading-md:
    fontFamily: "ge-inter-medium, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  menu-title:
    fontFamily: "ge-inter-medium, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: -0.72px
  body-lg:
    fontFamily: "ge-inter-regular, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: -0.54px
  menu-link:
    fontFamily: "ge-inter-medium, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.5408px
  body:
    fontFamily: "ge-inter-regular, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "ge-inter-semibold, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  link-cta:
    fontFamily: "ge-inter-semibold, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  tab:
    fontFamily: "ge-inter-semibold, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: -0.42px
  eyebrow:
    fontFamily: "ge-inter-regular, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  small:
    fontFamily: "ge-inter-regular, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: -0.42px
  nav-item:
    fontFamily: "ge-inter-medium, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  mobile-display:
    fontFamily: "ge-sons-condensed-extrabold, sans-serif"
    fontSize: 68px
    fontWeight: 400
    lineHeight: 56px
    textTransform: uppercase

rounded:
  tab: 4px
  card: 8px
  button: 30px
  circle: 50%

spacing:
  xs: 4px
  sm: 10px
  md: 16px
  lg: 20px
  xl: 30px
  2xl: 32px
  3xl: 64px
  4xl: 80px
  5xl: 96px
  section: 120px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    border: "2px solid {colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 4px 88px 4px 32px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary-hover}"
    border: "2px solid {colors.primary-hover}"
  button-tag-selected:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    border: "2px solid {colors.ink}"
    typography: "{typography.tab}"
    rounded: "{rounded.tab}"
    padding: 17.6px 22px
    height: 56px
  link-cta:
    textColor: "{colors.ink}"
    typography: "{typography.link-cta}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-item}"
    padding: 0px 80px
    height: 83px
  mega-menu-link:
    textColor: "{colors.ink}"
    typography: "{typography.menu-link}"
  mega-menu-link-hover:
    backgroundColor: "{colors.evergreen-100}"
  card-story:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.neutral-600}"
    border: "4px solid {colors.canvas}"
    rounded: "{rounded.card}"
  hero:
    backgroundColor: "{colors.evergreen-1100}"
    textColor: "{colors.canvas}"
    typography: "{typography.display-hero}"
  footer:
    backgroundColor: "{colors.night}"
    textColor: "{colors.canvas}"
    typography: "{typography.body-lg}"
    padding: 120px 0px 44px
---

## Overview

GE Vernova's homepage (measured at `https://www.gevernova.com/`, title "GE Vernova | The Energy of
Change") is a corporate energy site with an engineered, teal-and-lime personality. Its signature is a
contrast between deep **evergreen** surfaces (`#012d2f` hero, `#005e60` text and selected states)
and a vivid **Urgency Green** `#c8ff08` used for pill-shaped calls to action and small accents (a lime
bullet before the active mega-menu title, lime underlines under card links).

The capture was taken with the "Investors" mega-menu open, so its top third shows the white
83px header (GE monogram + "GE VERNOVA" wordmark, seven 14px menu items, search icon) and a white
three-column menu panel: a large `#005e60` "Investors" title with a lime dot at left, then two columns
of 18px `#005e60` links separated by thin vertical rules. Behind it the dark evergreen video hero
(with a circular play control) is dimmed by a grey overlay. Below: a pale `#e4f1f1` band with a
32px "Feature Stories" heading and a horizontal carousel of white 8px-radius cards (photo, grey
uppercase category, 24px title, 18px description, teal link with lime underline and ↗ icon), a
progress bar and circular prev/next controls. Then "Our Mission" — a 32px heading left, an 18px grey
paragraph and a lime "Learn more about us" pill right — and "Latest Announcements", three news
tiles with photos, grey dates and 16px teal headlines.

The hero headline (hidden by the menu in the capture) is "ENERGY OF CHANGE" in the condensed
ge-sons-condensed-extrabold at 92px, uppercase, white. The page's `h1` element ("GE Vernova",
ge-inter-medium 68px) measures 1px wide — it is visually hidden — so the visible hero h2 is the
display token here (see `_roleOverrides` in SOURCES.json).

**Key characteristics**
- CTA: `#c8ff08` pill (30px radius, 56px tall, 2px same-colour border), `#005e60` 16px/600 label,
  trailing white icon circle; hover fills `#05625e` with `#f9fbfb` text.
- Most-read text colour is Evergreen `#005e60` (menu links, news headlines, card links).
- Body copy ge-inter-regular 18px/28px with −0.54px tracking in `#737373` or `#212121`.
- Display: ge-sons-condensed-extrabold, uppercase, line height below font size (92/74.52).
- Pale evergreen bands (`#e4f1f1`, `#cde4e4`) separate sections; `#212121` footer.
- Bootstrap-based CSS (`--bs-*` variables) underneath a full `--ge-*` token layer.

## Colors

Values from computed styles and the site's `--ge-*` custom properties.

### Action
| Token | Hex | Live variable | Use |
|---|---|---|---|
| primary | `#c8ff08` | `--ge-urgency-green`, `--ge-button-primary-bg` | CTA fill and border |
| on-primary | `#005e60` | `--ge-button-primary-text` | CTA label |
| primary-hover | `#05625e` | — (measured; token `--ge-button-primary-bg-hover: #005e60`) | CTA hover fill |
| on-primary-hover | `#f9fbfb` | — (measured; token `--ge-button-primary-text-hover: #fff`) | CTA hover label |
| control-hover | `#dafe5e` | `--ge-control-default-bg-hover`, `--ge-light-urgency-green` | circular control hover |

### Evergreen ramp
| Token | Hex | Live variable | Use |
|---|---|---|---|
| ink | `#005e60` | `--ge-evergreen`, `--ge-evergreen-800` | most-read text (969 weighted chars), links, selected tabs |
| evergreen-900 | `#004746` | `--ge-evergreen-900` | pressed/active controls |
| evergreen-1100 | `#012d2f` | `--ge-evergreen-1100` | hero video band (largest background by area) |
| light-evergreen | `#287f82` | `--ge-light-evergreen` | control icon hover |
| evergreen-600 | `#519595` | `--ge-evergreen-600` | tag borders |
| evergreen-400 | `#acd2d2` | `--ge-evergreen-400` | light tag borders |
| evergreen-tint-3 | `#c7dbdb` | `--ge-evergreen-tint-3` | contact-page borders |
| evergreen-300 | `#cde4e4` | `--ge-evergreen-300` | contact-page band |
| evergreen-200 | `#e4f1f1` | `--ge-evergreen-200` | Feature Stories band |
| evergreen-100 | `#f5fbfb` | `--ge-evergreen-100` | mega-menu link hover |

### Neutrals
| Token | Hex | Live variable | Use |
|---|---|---|---|
| canvas | `#ffffff` | `--ge-white` | page (body bg; 58% of the capture) |
| night | `#212121` | `--ge-night`, `--ge-neutral-900` | footer, headings, card body |
| neutral-600 | `#737373` | `--ge-neutral-600` | body paragraphs, dates |
| gray-text | `#999999` | — | footer links, legal |
| neutral-300 | `#d7dbdb` | `--ge-neutral-300` | dividers |
| neutral-100 | `#fafafa` | `--ge-neutral-100` | disabled control bg, contact form area |
| disabled-bg | `#e7eeee` | `--ge-button-primary-bg-disabled` | disabled CTA |
| disabled-text | `#b2cccc` | `--ge-button-primary-text-disabled` | disabled label |

### Secondary palette (variables)
link-green `#40cd24` (`--ge-link-color`, measured on 20px nav-panel links) with hover `#12a141`;
sky `#59c3c9`, forest `#75ca64`, earth `#bfa682`, alert `#ec642b` (`--ge-alert-1`), red-600 `#bd3228`,
blue-600 `#2288c3`. These come from the token layer; only link-green was measured as rendered text.

## Typography

### Families (as served)
Each weight is its own family name: `ge-inter-regular` (2,204 weighted chars), `ge-inter-medium`
(899), `ge-inter-semibold` (124) and `ge-sons-condensed-extrabold` (57). The `@font-face` list also
includes `ge-inter-thin … ge-inter-extrabold` with italics and `ge-sons-condensed-semibold`. The
site maps them through variables: `--ge-font-regular: ge-inter-regular`, `--ge-font-medium`,
`--ge-font-semibold`, `--ge-font-header-extrabold: ge-sons-condensed-extrabold`,
`--ge-font-header-semibold: ge-sons-condensed-semibold`. Because the weight lives in the family,
computed `font-weight` can read 400 for "medium" text (e.g. menu links).

### Scale (measured)
| Token | Family | Size | Weight | Line height | Tracking | Example |
|---|---|---|---|---|---|---|
| display-page | ge-sons-condensed-extrabold | 136px | 400 | 112px | — | contact page "CONNECT WITH US" (`#005e60`) |
| display-hero | ge-sons-condensed-extrabold | 92px | 400 | 74.52px | — | "ENERGY OF CHANGE" (white, uppercase) |
| heading-lg | ge-inter-medium | 32px | 500 | 48px | −0.96px | "Our Mission" |
| heading-md | ge-inter-medium | 24px | 500 | 32px | — | card titles (h5) |
| menu-title | ge-inter-medium | 24px | 400 | 32px | −0.72px | mega-menu title "Investors"/"Power" |
| body-lg | ge-inter-regular | 18px | 400 | 28px | −0.54px | paragraphs, footer links |
| menu-link | ge-inter-medium | 18px | 400 | 24px | −0.5408px | mega-menu links |
| body | ge-inter-regular | 16px | 400 | 24px | — | news headlines, dates |
| button | ge-inter-semibold | 16px | 600 | 16px | — | CTA pills |
| link-cta | ge-inter-semibold | 16px | 600 | 24px | — | "Find Out More", "Read the Story" |
| tab | ge-inter-semibold | 14px | 600 | 20px | −0.42px | contact-page topic tabs |
| eyebrow | ge-inter-regular | 14px | 500 | 20px | — | card category ("INNOVATION") in `#737373` |
| small | ge-inter-regular | 14px | 400 | 20px | −0.42px | legal links |
| nav-item | ge-inter-medium | 14px | 500 | 20px | — | header menu |
| mobile-display | ge-sons-condensed-extrabold | 68px | 400 | 56px | — | hero at 390px |

Tracking is −3% of size on text from 14px to 32px (−0.42 @14, −0.54 @18, −0.72 @24, −0.96 @32).
The condensed display face is set with line height ≈ 0.81× size.

### Note on Font Substitutes
The served faces are custom-named webfonts; no official source opened during research states their
origin or licensing, so this file names them only as served. Use a condensed extra-bold grotesque for
`ge-sons-condensed-extrabold` and a neutral grotesque for `ge-inter-*` only as a last resort.

## Layout

- **Header:** 83px, white, `0px 80px` padding; logo left, menu centred, search right.
- **Mega menu:** full-width white panel, left title column + two link columns with vertical rules.
- **Container:** content starts 80px from the viewport edge at 1280px (nav padding), sections use
  `120px` top padding (footer `120px 0 44px`).
- **Card carousel:** 448px-wide cards (574px tall) with a visible third card cropped at the edge, a
  progress track below and a circular arrow control pair at right.
- **Mission row:** heading in a narrow left column, text + CTA in a wider right column.
- **Measured paddings:** 32px (32×), 16px (29×), 10px (14×), 20px, 80px (8×), 64px (8×), 30px, 120px, 96px.
- **Bootstrap layer:** `--bs-border-radius: 0.375rem`, `--bs-border-radius-sm: 0.25rem`,
  `--bs-border-radius-2xl: 2rem` are present from the framework.

## Elevation & Depth

No box shadows were measured on rendered homepage elements. Depth comes from:
- the dark video hero vs white page,
- pale evergreen bands (`#e4f1f1`) carrying white cards with a 4px white border,
- a translucent grey overlay when the mega menu is open (visible in the capture).

Stylesheet shadows exist (e.g. `0 0 4px 1px rgba(0,0,0,.08)`, `0 .0625rem .625rem rgba(var(--ge-rgb-black),.1)`,
Bootstrap focus rings `0 0 0 .25rem rgba(13,110,253,.25)`) but were not observed on visible elements.

## Shapes

| Token | Value | Where |
|---|---|---|
| tab | 4px | contact-page topic tabs (tag buttons) |
| card | 8px | story cards, news images (9×) |
| button | 30px | CTA pills, 56px tall (9×) — reads as a full pill |
| circle | 50% | play button, carousel arrows, icon circles inside CTAs (8×) |

Other measured radii: 25px (2×), 32px, 56px. The card `::before` carries a scale-0 transform
(`matrix(1, 0, 0, 0, 0, 0)`) — a hidden reveal layer, not a visible shape.

## Components

### Buttons
- **button-primary** — `#c8ff08` fill, 2px `#c8ff08` border, `#005e60` ge-inter-semibold 16px/600,
  30px radius, 56px tall; the label sits in a link with `4px 88px 4px 32px` padding (measured
  `4px 88.192px 4px 32px`), leaving room for a circular icon at the right. Hover (measured): fill and
  border `#05625e`, label `#f9fbfb`. Disabled (tokens): bg `#e7eeee`, text `#b2cccc`.
- **button-tag-selected** — `#005e60` fill and 2px border, white 14px/600/20px (−0.42px), 4px radius,
  `17.6px 22px`, 56px (contact page "General"). Token set: `--ge-button-tag-border-color: #519595`,
  `--ge-button-tag-bg-selected: #005e60`, `--ge-button-tag-text: #005e60`.
- **Secondary / tertiary** (tokens, not observed rendered): secondary = transparent with `#005e60`
  border → hover `#005e60` fill and white text; tertiary = `#c8ff08` border only.

### Links
- **link-cta** — ge-inter-semibold 16px/600/24px `#005e60` with a lime underline and ↗ icon.
- Mega-menu links: 18px `#005e60`; hover (measured) background `#f5fbfb`.

### Cards
- **card-story** — white, 8px radius, 4px white border, 448 × 574px; image top, 14px/500 grey
  category, 24px/500/32px `#212121` title, 18px/28px description, link-cta.
- **News tile** — image (no card chrome), 16px grey date, 16px/24px `#005e60` headline.

### Navigation
White 83px header with 14px menu items in `#005e60`; active item underlined (visible on "Investors").

### Footer
`#212121`, `120px 0 44px` padding, "Follow us on" + social icons, link columns at 18px/28px
(−0.54px) in `#999999`, legal at 14px.

### Not declared
No text input was detected on the homepage or `/contact`.

## Design System Architecture

**No public GE Vernova design system or brand guidelines were found.** Searches (listed in
SOURCES.json) returned no official brand portal, token package, Storybook or Figma kit; GE Vernova
job postings mention an internal design system but publish no documentation, and the only gevernova.com
page surfaced by brand searches was a legal page
([forward-looking statements](https://www.gevernova.com/node/10367)) with no brand guidance. What
follows is the de-facto system measurable on the live site.

**Token architecture (live CSS).** The site defines a large `--ge-*` token layer on `:root`
alongside Bootstrap's `--bs-*` variables:
- *Primitives* — colour ramps named by hue and step: `--ge-evergreen-100 … -1100`,
  `--ge-urgency-green-100 … -800`, `--ge-neutral-0 … -1100`, `--ge-blue-500/600/700`,
  `--ge-green-500/700/800`, `--ge-red-500/600/700`, named colours (`--ge-sky`, `--ge-forest`,
  `--ge-earth`, `--ge-night`, `--ge-day`) and RGB triplets for alpha use (`--ge-rgb-evergreen: 0,94,96`).
- *Semantic* — `--ge-primary-dark-bg: #005e60`, `--ge-primary-light-bg: #f5f5f5`,
  `--ge-link-color`, `--ge-link-hover-color`, `--ge-alert-1 … -5`.
- *Component* — exhaustive state tokens per button type and surface, verbatim e.g.
  `--ge-button-primary-bg`, `--ge-button-primary-bg-hover`, `--ge-button-primary-text-disabled`,
  `--ge-button-primary-light-bg-hover: #fff`, `--ge-button-secondary-border`,
  `--ge-button-tertiary-light-icon-color`, `--ge-button-tag-bg-selected`,
  `--ge-button-cir-bg-hover`, `--ge-control-default-bg-hover`, `--ge-control-primary-icon-active`.
Naming pattern: `--ge-{component}-{variant}[-light]-{property}[-{state}]`, states `hover`, `focus`,
`disabled`, `selected`, `active`.

**Theming.** Rather than a global dark mode, every component token has a `-light` twin for use on
dark surfaces (e.g. `--ge-button-primary-light-bg-hover: #fff` vs `--ge-button-primary-bg-hover:
#005e60`), switched per section by component variant.

**Type & spacing systems.** Weight-specific font families mapped by `--ge-font-*` variables; sizes
observed 14/16/18/24/32px for text and 68/92/136px for condensed display; −3% tracking on Inter
sizes. Spacing values cluster on 16/32/64/80/120px.

**Component model (observed).** Button types primary / secondary / tertiary / tag / circular
("cir"), each with default and light variants and full state sets; controls (default, primary);
mega menu; story-card carousel with progress track; news tiles; footer.

**Accessibility.** The page loads an accessibility widget (an "Accessibility Screen-Reader Guide,
Feedback, and Issue Reporting" link is the first body text, and a floating accessibility button is
visible in the capture). No published contrast or focus rules were found.

**Delivery.** Bootstrap CSS variables (`--bs-*`), Font Awesome 5/6 icon fonts, a custom `ge-corporate-icons`
icon font and `icomoon`, Slick carousel. No versioned public package.

## Do's and Don'ts

**Do**
- Use `#c8ff08` only for CTA pills and small accents (bullets, underlines), with `#005e60` text.
- Set big statements in uppercase ge-sons-condensed-extrabold with tight leading (~0.81×).
- Use `#005e60` for links and interactive text; `#737373`/`#212121` for paragraphs.
- Separate sections with pale evergreen bands (`#e4f1f1`) and white 8px cards.
- Apply −3% tracking to Inter text from 14px to 32px.
- Use the `-light` component variants on dark evergreen surfaces.

**Don't**
- Don't use lime as a large background or as text on white.
- Don't set the condensed display face in lowercase or at body sizes.
- Don't add drop shadows to cards.
- Don't mix the Bootstrap default blue (`#0d6efd`) into the brand UI.
- Don't square off the CTA — it is a 30px-radius pill.

## Responsive Behavior

Measured at 390px:
- Hero display 92px/74.52px → **68px/56px**.
- Body stays 18px/28px (−0.54px); most frequent mobile sizes 16px, 14px, 18px, 20px, 68px.
- CTA pills keep their desktop spec (56px, 30px radius, `#c8ff08`).
- Header becomes 64px with `12px 20px` padding; the menu collapses.
- Card carousel shows one card plus a peek; text column 350px wide.

## Iteration Guide

1. White page, 83px white header with 14px teal menu items.
2. Hero: `#012d2f` video/image band with white uppercase condensed 92px display and a lime pill CTA.
3. Content sections on white or `#e4f1f1`; headings ge-inter-medium 32px/48px (−0.96px).
4. Paragraphs ge-inter-regular 18px/28px (−0.54px) in `#737373`.
5. Cards white, 8px, image-led; links teal with lime underline.
6. Footer `#212121` with grey `#999999` links.
7. Use only the `--ge-*` values listed here; verify hover states against the measured ones.
