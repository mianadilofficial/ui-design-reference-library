---
version: alpha
name: Canada.ca
category: "Government & Nonprofit"
description: "Canada.ca, the Government of Canada's main website, following the Canada.ca design system: Lato headings (41px/500 white hero title, 29px/700 #333333 section heads) over Noto Sans body at 17-20px, #333333 text on #ffffff with #f5f5f5 bands, underlined #284162 links that hover to #0535d2, square #26374a navy buttons that hover to #444444, a 4px-radius 2px outlined 'All services' button and a #26374a footer."

colors:
  primary: "#26374a"
  on-primary: "#ffffff"
  primary-hover: "#444444"
  primary-hover-border: "#091c2d"
  link: "#284162"
  link-hover: "#0535d2"
  link-visited: "#7834bc"
  canvas: "#ffffff"
  band: "#f5f5f5"
  sub-footer: "#f8f8f8"
  promo-band: "#000000"
  ink: "#333333"
  input-text: "#5c5c5c"
  input-border: "#e0e0e0"
  well-border: "#e3e3e3"
  border-default: "#7d828b"
  error: "#d3080c"
  title-bar: "#a62a1e"
  focus: "#0535d2"
  gcds-button-hover: "#2b4380"

typography:
  hero-title:
    fontFamily: "Lato, \"Noto Sans\", \"Noto Sans Canadian Aboriginal\", sans-serif"
    fontSize: 41px
    fontWeight: 500
    lineHeight: 47.97px
  hero-title-mobile:
    fontFamily: "Lato, \"Noto Sans\", \"Noto Sans Canadian Aboriginal\", sans-serif"
    fontSize: 37px
    fontWeight: 500
    lineHeight: 44.03px
  h2:
    fontFamily: "Lato, \"Noto Sans\", \"Noto Sans Canadian Aboriginal\", sans-serif"
    fontSize: 29px
    fontWeight: 700
    lineHeight: 35.67px
  h3-feature:
    fontFamily: "Lato, \"Noto Sans\", \"Noto Sans Canadian Aboriginal\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32.88px
  h3-topic:
    fontFamily: "Lato, \"Noto Sans\", \"Noto Sans Canadian Aboriginal\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 27.4px
  promo-link:
    fontFamily: "Lato, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 32px
  hero-text:
    fontFamily: "\"Noto Sans\", \"Noto Sans Canadian Aboriginal\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  body-link:
    fontFamily: "\"Noto Sans\", \"Noto Sans Canadian Aboriginal\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.875px
  body:
    fontFamily: "\"Noto Sans\", \"Noto Sans Canadian Aboriginal\", sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25.5px
  ui:
    fontFamily: "\"Noto Sans\", \"Noto Sans Canadian Aboriginal\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23px
  button:
    fontFamily: "Lato, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23px
  button-outline:
    fontFamily: "Lato, sans-serif"
    fontSize: 19.8px
    fontWeight: 700
    lineHeight: 28.4625px
  menu:
    fontFamily: "\"Noto Sans\", \"Noto Sans Canadian Aboriginal\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28.75px
    textTransform: uppercase

rounded:
  none: 0px
  well: 3px
  button-outline: 4px

spacing:
  s5: 5px
  s9: 9px
  s10: 10px
  s14: 14px
  s15: 15px
  s19: 19px
  s20: 20px
  s28: 28px
  s36: 36px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 14px
    height: 45px
    border: "1px outset {colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    borderColor: "{colors.primary-hover-border}"
  button-outline:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    borderColor: "{colors.primary}"
    borderWidth: 2px
    typography: "{typography.button-outline}"
    rounded: "{rounded.button-outline}"
    padding: 12.87px 21.78px
    height: 58.2px
  button-outline-hover:
    textDecoration: underline
  menu-button:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link}"
    typography: "{typography.menu}"
    rounded: "{rounded.none}"
    padding: 10px 20px
    height: 51px
  menu-button-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.input-text}"
    borderColor: "{colors.input-border}"
    borderWidth: 1px
    typography: "{typography.ui}"
    rounded: "{rounded.none}"
    padding: 10px 14px
    height: 45px
  search-button:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 10px 14px
    height: 45px
  search-button-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.body-link}"
    textDecoration: underline
  link-hover:
    textColor: "{colors.link-hover}"
  hero-panel:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.hero-text}"
    padding: 19px
  feature-card:
    backgroundColor: "{colors.band}"
    textColor: "{colors.ink}"
    borderColor: "{colors.well-border}"
    borderWidth: 1px
    padding: 9px
    boxShadow: "inset 0 1px 1px 0 rgba(0, 0, 0, 0.05)"
  promo-band:
    backgroundColor: "{colors.promo-band}"
    opacity: 0.9
    textColor: "{colors.on-primary}"
    typography: "{typography.promo-link}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.ui}"
    padding: 36px 0px 12px
  sub-footer:
    backgroundColor: "{colors.sub-footer}"
    textColor: "{colors.ink}"
    padding: 28px 0px 36px
---

## Overview

Canada.ca is the Government of Canada's main website, and its English homepage follows the
Canada.ca design system ([design.canada.ca](https://design.canada.ca/)). It is bilingual
by construction (a "Français" toggle top right, the dual-language "Government of Canada /
Gouvernement du Canada" signature with the red flag symbol top left), and visually
restrained: white page, grey bands, navy accents, and underlined dark-blue links.

The header is white: signature on the left, "Français" and a search field with a square
navy `#26374a` magnifier button on the right. A thin rule separates a second row with an
uppercase "MENU" toggle and a navy "Sign in" button. The hero is a wide photograph (on the
captured day, an astronaut over Earth) with a navy `#26374a` panel on
the left: "Canada.ca" in white Lato 41px/500 with a short white bar under it, and "The
official website of the Government of Canada" in 20px Noto Sans. A near-black band
(`#000000` at 0.9 opacity) below it carries one underlined white promotional link.

Content follows in bands: a `#f5f5f5` "Most requested" band with four columns of underlined
18px links; a white topic grid of nine Lato 20px/700 underlined headings, each with a one-line
Noto Sans description; an outlined "All services" button with 4px radius; a `#f5f5f5`
"Your government" band beside a Parliament photograph; then "Features" as four grey
`#f5f5f5` well cards with photos, 24px Lato headings and descriptions. "Date modified"
closes the main content. The footer is navy `#26374a` with white links, then a `#f8f8f8`
corporate sub-footer.

Voice: neutral, task-first, comma-separated keyword descriptions ("Find a job, training,
hiring programs, work permits, Social Insurance Number (SIN)").

Key characteristics:
- Lato for headings and buttons; Noto Sans for body and UI.
- Navy `#26374a` as the single accent (buttons, hero panel, footer).
- Links `#284162` underlined, hover `#0535d2`.
- `#333333` text; never pure black body text.
- Square buttons; only the outlined "All services" button is rounded (4px).
- Generous 15px gutters and full-width grey/white bands.

## Colors

Measured on www.canada.ca/en.html (computed styles, `--gcds-` custom properties loaded on
the page, stylesheet corpus) and confirmed against the Canada.ca colour page
([design.canada.ca/styles/colours](https://design.canada.ca/styles/colours.html)).

### Brand & Accent
- **Primary navy** (`#26374a`): "Main accent colour" per the colour page; Sign in and search
  buttons, hero panel, footer; also `--gcds-bg-primary` and
  `--gcds-button-primary-default-background`.
- **Primary hover** (`#444444`): measured hover of Sign in, search and MENU; Sign in's
  border turns `#091c2d`.
- **GCDS button hover** (`#2b4380`): `--gcds-button-primary-hover-background`, the GC Design
  System button token; not observed on the homepage's buttons.
- **Title bar red** (`#a62a1e`): the red bar under H1s on content pages per the typography
  page; also `--gcds-danger-text`.

### Surface
- **Canvas** (`#ffffff`): "Default page background".
- **Band** (`#f5f5f5`): "Most requested", "Your government" and feature wells — the largest
  measured background area.
- **Sub-footer** (`#f8f8f8`).
- **Promo band** (`#000000` at 0.9 opacity).

### Text
- **Ink** (`#333333`): "Primary text colour (dark grey)".
- **Link** (`#284162`), **hover/focus** (`#0535d2`), **visited** (`#7834bc`).
- **Input text** (`#5c5c5c`).

### Lines & Semantic
- **Input border** (`#e0e0e0`); **well border** (`#e3e3e3`); **GCDS default border**
  (`#7d828b`).
- **Error** (`#d3080c`): "Form error/required indicator".
- **Focus** (`#0535d2`): `--gcds-focus-border`.

## Typography

### Font Family
- **Lato**: headings, buttons; declared `Lato, "Noto Sans", "Noto Sans Canadian Aboriginal",
  sans-serif` (buttons use `Lato, sans-serif`). Loaded weights 400 and 700.
- **Noto Sans**: body and UI; declared `"Noto Sans", "Noto Sans Canadian Aboriginal",
  sans-serif`. Loaded weights 400 and 700.
- The typography page: "Use a combination of Lato for headings, and Noto Sans for body text"
  ([design.canada.ca/styles/typography](https://design.canada.ca/styles/typography.html)).

### Hierarchy

| Token | Family | Size | Weight | Line height | Where |
|---|---|---|---|---|---|
| hero-title | Lato | 41px | 500 | 47.97px | "Canada.ca" h1 (white) |
| hero-title-mobile | Lato | 37px | 500 | 44.03px | h1 at 390px |
| h2 | Lato | 29px | 700 | 35.67px | "Most requested", "Features" |
| h3-feature | Lato | 24px | 700 | 32.88px | Feature card headings |
| h3-topic | Lato | 20px | 700 | 27.4px | Topic grid headings (links) |
| promo-link | Lato | 20px | 700 | 32px | Promo band link |
| hero-text | Noto Sans | 20px | 400 | 32px | Hero subtitle |
| button-outline | Lato | 19.8px | 700 | 28.4625px | "All services" |
| menu | Noto Sans | 20px | 400 | 28.75px | "MENU", uppercase |
| body-link | Noto Sans | 18px | 400 | 25.875px | Most-requested links |
| body | Noto Sans | 17px | 400 | 25.5px | Descriptions |
| ui | Noto Sans | 16px | 400 | 23px | Header, footer, inputs |
| button | Lato | 16px | 400 | 23px | "Sign in" |

The published spec sets desktop headings H1 41px, H2 39px, H3 29px, H4 27px, H5 24px, H6
22px (bold) and body 20px; smaller devices H1 37px, H2 35px, H3 26px and body 18px; 16px is
"the smallest size recommended on Canada.ca for readable text". The homepage differs: its h1
is weight 500 (not bold), section h2s are 29px, and descriptions are 17px. The live values
are used here.

### Principles
- "Constrain text line length to 65 characters."
- Underline links "using an underline style that skips descenders."
- Headings are sentence case; only the MENU toggle is uppercase.

### Note on Font Substitutes
Both Lato and Noto Sans are served as web fonts by the site itself (@font-face in its CSS);
the declared fallback is `sans-serif`. No licensing statement was found on the pages consulted.

## Layout

### Spacing System
Measured paddings: 15px (most common — column gutters), 9px, 5px, 10px, 14px, 20px, 19px,
28px and 36px. The GC Design System uses a 20px base ("All spacing sizes are relative to a
base size of 1.25rem (20px)") with tokens `--gcds-spacing-0` … `--gcds-spacing-1250` in
2px steps ([styles/spacing](https://design-system.canada.ca/en/styles/spacing/)).

### Grid & Container
- Content container 1140px wide (section h2s measure 1140px at a 1280px viewport).
- Most requested: 4 columns; topics: 3 columns; Your government: 2 link columns + image;
  Features: 2 columns.

### Whitespace Philosophy
Bands alternate white and `#f5f5f5`; content inside is evenly gridded with no decorative
dividers other than the header rule.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| Flat | none | Most surfaces |
| Well | `inset 0 1px 1px 0 rgba(0, 0, 0, 0.05)` + 1px `#e3e3e3` | Feature cards, hero panel |
| Overlay | `#000000` at 0.9 opacity | Promo band |

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| none | 0px | Buttons, inputs, panels |
| well | 3px | Measured twice on the page |
| button-outline | 4px | "All services" outlined button |

### Accents
The hero h1 carries a 7px white bottom border, visible as a short bar under "Canada.ca";
on content pages the spec places a red `#a62a1e` bar, 72px wide and 6px thick, 0.2em below
the H1.

## Components

### Buttons
**Primary (Sign in)**: `#26374a`, white Lato 16px/23px, padding `10px 14px`, 45px tall,
0px radius, `1px outset #26374a`. Hover: `#444444`, border `#091c2d`.
**Outlined (All services)**: transparent, `#26374a` text and 2px border, Lato
19.8px/700, padding `12.87px 21.78px`, 58.2px tall, 4px radius; hover adds underline.
**MENU toggle**: white, `#284162` uppercase Noto Sans 20px, padding `10px 20px`, 51px tall;
hover `#444444` with white text.

### Inputs & Forms
**Search input**: white, 1px `#e0e0e0` border, `#5c5c5c` text, Noto Sans 16px, padding
`10px 14px`, 45px tall, square. **Search button**: 45px navy square, hover `#444444`.

### Cards & Containers
**Feature well**: `#f5f5f5`, 1px `#e3e3e3` border, inset 1px shadow, padding 9px; photo
on top, 24px/32.88px Lato heading link, 17px description.
**Hero panel**: `#26374a`, padding 19px, white text.

### Navigation
"Français" link 16px `#284162` underlined (hover `#0535d2`); MENU dropdown; dual-language
signature.

### Links
`#284162`, underlined; hover/focus `#0535d2`; visited `#7834bc`. Topic headings and
"Your government" links are bold (18px/700 for the latter).

### Footer
Main footer `#26374a`, white 16px/23px links, padding `36px 0px 12px`; sub-footer
`#f8f8f8`, padding `28px 0px 36px` with corporate links.

## Design System Architecture

Two official systems are relevant:

1. **Canada.ca design system** ([design.canada.ca](https://design.canada.ca/)) — guidance on
   "Mandatory elements for Canada.ca, writing principles, how to organize your content",
   plus the Canada.ca Specifications. Its style pages define the colours
   ([colours](https://design.canada.ca/styles/colours.html)) and type
   ([typography](https://design.canada.ca/styles/typography.html)) used above. The homepage
   markup uses classes and IDs such as `wb-srch-sub`, `gc-featured-link`, `gc-sub-footer`.
2. **GC Design System** ([design-system.canada.ca](https://design-system.canada.ca/en/styles/))
   — reusable web components and tokens; the homepage loads its custom properties (400
   `--gcds-*` variables).

**Token architecture (GC Design System).** Three tiers: component tokens ("component-specific.
Using them elsewhere can cause you problems"), global tokens ("made to be used by component
tokens and by you") and base tokens ("for you to use when you've run out of global token
options"). Names follow prefix–category–role–state–property–scale, e.g.
`--gcds-button-primary-default-background`, `--gcds-text-primary`, `--gcds-focus-text`,
`--gcds-grayscale-100`
([design tokens](https://design-system.canada.ca/en/styles/design-tokens/)). Values seen on
the homepage: `--gcds-link-default: #284162`, `--gcds-bg-primary: #26374a`,
`--gcds-focus-border: #0535d2`, `--gcds-font-h1: 700 2.5625rem/117% "Lato",sans-serif`,
`--gcds-font-text: 400 1.25rem/160% "Noto Sans",sans-serif`.

**Theming.** Tokens are delivered as CSS custom properties; the Canada.ca signature and
branding are "Mandatory branding elements for Canada.ca" in the Figma libraries. No dark
mode is present on the homepage.

**Type & spacing systems.** 20px base for spacing and type; spacing tokens 0–1250 in 2px
steps ([spacing](https://design-system.canada.ca/en/styles/spacing/)). Responsive type pairs
desktop/mobile (e.g. `--gcds-font-h5-mobile: 700 1.375rem/127%`).

**Component model.** GC Design System components (from its components index): alert,
breadcrumbs, button, card, checkboxes, container, date-input, date-modified, details,
error-message, error-summary, fieldset, file-uploader, footer, grid, header, heading, icon,
input, language-toggle, link, notice, pagination, radios, screenreader-only, search, select,
side-navigation, signature, stepper, table, text, textarea, theme-and-topic-menu,
top-navigation. CSS shortcut utilities are also documented.

**Accessibility.** The Canada.ca colour page requires contrast meeting "WCAG success
criterion 1.4.6: Contrast (Enhanced) (Level AAA)" when using other background colours.
GCDS focus tokens: `--gcds-focus-border: #0535d2`, `--gcds-focus-text: #fff`,
`--gcds-link-focus-outline-width: 0.25rem`.

**Delivery.** GC Design System components are "Tech-agnostic", with npm support for web
components, React, Vue and Angular, CDN use, and independence "from the Web Experience
Toolkit (WET) and GCWeb" ([start to use](https://design-system.canada.ca/en/start-to-use/)).
npm packages: `@gcds-core/components` and `@gcds-core/tokens` (both 1.6.0 latest);
earlier `@cdssnc/gcds-components` (0.47.0) and `@cdssnc/gcds-tokens` (2.14.0). Figma
libraries exist in English and French.

## Do's and Don'ts

### Do
- Use Lato for headings and buttons, Noto Sans for body text.
- Keep text `#333333` on `#ffffff` or `#f5f5f5`.
- Underline links in `#284162`; hover `#0535d2`.
- Use navy `#26374a` for primary buttons, hero panels and the footer.
- Keep primary buttons square; hover to `#444444`.
- Keep the bilingual signature and "Français" toggle.
- Limit line length to about 65 characters.

### Don't
- Don't use pure black for body text.
- Don't round primary buttons; only the outlined "All services" style has 4px.
- Don't introduce other accent colours on the homepage.
- Don't go below 16px for readable text.
- Don't remove link underlines.

## Responsive Behavior

### Breakpoints
Not measured beyond the 1280px and 390px extractions.

### Type changes
At 390px the h1 drops from 41px/47.97px to 37px/44.03px (matching the spec's mobile H1
37px); body descriptions stay 17px/25.5px; measured mobile sizes include 26px, 19px, 22px
and 19.8px.

### Touch Targets
Buttons and search are 45px tall; MENU 51px; outlined button 58.2px.

### Collapsing Strategy
Not measured beyond type sizes.

### Image Behavior
Hero and "Your government" photos are full-bleed to their column; feature cards use
landscape photos at the top of each well.

## Iteration Guide

1. White page, `#333333` Noto Sans text; Lato for headings.
2. Header: bilingual signature, Français, search with square navy button; MENU + Sign in row.
3. Hero: photo with a `#26374a` panel and white Lato 41px/500 title with its short bar.
4. Alternate `#f5f5f5` and white bands; use underlined `#284162` links in grids.
5. Use square navy buttons; use the 4px outlined style for "see all" actions.
6. Footer: navy `#26374a` main footer, `#f8f8f8` sub-footer.
7. Check link hover `#0535d2` and the visited `#7834bc`.
