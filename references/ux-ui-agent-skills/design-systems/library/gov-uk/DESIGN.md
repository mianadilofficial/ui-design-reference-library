---
version: alpha
name: GOV.UK
category: "Government & Nonprofit"
description: "GOV.UK, the UK government's single website, built on the GOV.UK Design System (govuk-frontend): GDS Transport at 19px/25px body and 55px/66px bold hero on a #1d70b8 brand-blue masthead, #0b0c0c text on a #ffffff body inside a #f4f8fb template, underlined #1a65a6 links, square 0px-radius green #0f7a52 buttons with a 2px #083d29 bottom shadow and a #ffdd00 yellow focus state."

colors:
  primary: "#0f7a52"
  primary-hover: "#0b5c3e"
  primary-shadow: "#083d29"
  on-primary: "#ffffff"
  brand: "#1d70b8"
  brand-tint: "#d2e2f1"
  canvas: "#ffffff"
  template: "#f4f8fb"
  ink: "#0b0c0c"
  ink-print: "#000000"
  secondary-text: "#484949"
  link: "#1a65a6"
  link-hover: "#0f385c"
  link-visited: "#54319f"
  focus: "#ffdd00"
  border: "#cecece"
  surface-border: "#8eb8dc"
  secondary-button: "#f3f3f3"
  secondary-button-hover: "#cecece"
  secondary-button-shadow: "#858686"
  error: "#ca3535"
  error-hover: "#982828"
  error-shadow: "#651b1b"

typography:
  display-hero:
    fontFamily: "\"GDS Transport\", arial, sans-serif"
    fontSize: 55px
    fontWeight: 700
    lineHeight: 66px
  display-hero-mobile:
    fontFamily: "\"GDS Transport\", arial, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  heading-xl:
    fontFamily: "\"GDS Transport\", arial, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 50px
  heading-l:
    fontFamily: "\"GDS Transport\", arial, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
  heading-m:
    fontFamily: "\"GDS Transport\", arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  heading-s:
    fontFamily: "\"GDS Transport\", arial, sans-serif"
    fontSize: 19px
    fontWeight: 700
    lineHeight: 25px
  body:
    fontFamily: "\"GDS Transport\", arial, sans-serif"
    fontSize: 19px
    fontWeight: 400
    lineHeight: 25px
  body-s:
    fontFamily: "\"GDS Transport\", arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"GDS Transport\", arial, sans-serif"
    fontSize: 19px
    fontWeight: 400
    lineHeight: 19px
  header-menu:
    fontFamily: "\"GDS Transport\", arial, sans-serif"
    fontSize: 16px
    fontWeight: 700

rounded:
  none: 0px
  tag: 1px

spacing:
  s1: 5px
  s2: 10px
  s3: 15px
  s4: 20px
  s5: 25px
  s6: 30px
  s7: 40px
  s8: 50px
  s9: 60px
  gutter: 30px
  page-width: 960px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 10px 7px
    height: 38px
    border: 2px solid transparent
    boxShadow: "0 2px 0 {colors.primary-shadow}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-focused:
    backgroundColor: "{colors.focus}"
    textColor: "{colors.ink}"
    borderColor: "{colors.focus}"
    boxShadow: "0 2px 0 {colors.ink}"
  button-secondary:
    backgroundColor: "{colors.secondary-button}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 10px 7px
    height: 38px
    boxShadow: "0 2px 0 {colors.secondary-button-shadow}"
  button-secondary-hover:
    backgroundColor: "{colors.secondary-button-hover}"
  button-warning:
    backgroundColor: "{colors.error}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 10px 7px
    height: 38px
    boxShadow: "0 2px 0 {colors.error-shadow}"
  button-warning-hover:
    backgroundColor: "{colors.error-hover}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-print}"
    borderColor: "{colors.ink}"
    borderWidth: 2px
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 5px
    height: 40px
  text-input-focused:
    outline: "3px solid {colors.focus}"
    boxShadow: "inset 0 0 0 2px {colors.ink}"
  tag:
    backgroundColor: "{colors.brand-tint}"
    textColor: "{colors.link-hover}"
    typography: "{typography.body}"
    rounded: "{rounded.tag}"
    padding: 2px 8px 3px
    height: 30px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
    textDecoration: underline
  link-hover:
    textColor: "{colors.link-hover}"
  masthead:
    backgroundColor: "{colors.brand}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display-hero}"
  search-button:
    backgroundColor: "{colors.brand-tint}"
    textColor: "{colors.brand}"
    rounded: "{rounded.none}"
    height: 50px
  search-button-hover:
    backgroundColor: "{colors.template}"
  footer:
    backgroundColor: "{colors.template}"
    textColor: "{colors.ink}"
    borderTop: "10px solid {colors.brand}"
    padding: 40px 0px 25px
    typography: "{typography.body}"
---

## Overview

GOV.UK is the single website of the UK government, and its homepage is the canonical
showcase of the GOV.UK Design System. Nothing on the page is decorative: it is a
column of text, links and two coloured slabs. The top of the page (when cookies have been
rejected) is a pale `#f4f8fb` cookie confirmation band with a green "Hide cookie message"
button; directly under it a full-bleed brand-blue `#1d70b8` masthead carries the crown
logotype "GOV.UK", a "Menu" toggle and a search icon, then the hero heading
"The best place to find government services and information" in white GDS Transport bold
at 55px/66px, and a white search field with a pale blue `#d2e2f1` square search button.

Below the masthead the canvas is plain white `#ffffff`. "Popular on GOV.UK" lists six
bold underlined links in a three-column grid, each preceded by a circular arrow icon. A
thick blue rule separates it from "Services and information" (a two-thirds column of
topic links, each an underlined `#1a65a6` link above a 19px description in `#0b0c0c`,
separated by `#cecece` keylines with a chevron at the right) and "Featured" (a one-third
column of square illustrated tiles next to link + description pairs). The footer returns
to `#f4f8fb` with a 10px `#1d70b8` top border.

The voice is plain English, imperative and short: "Find a job", "Check your State
Pension forecast", "Search and apply for jobs in England, Scotland and Wales." No
marketing language, no photography, no gradients, no rounded corners, no shadows except
the hard 2px "bottom edge" under buttons.

Key characteristics:
- One typeface everywhere: GDS Transport, regular 400 and bold 700 only.
- A large 19px body size (the GOV.UK default), 25px line-height.
- Links are always underlined and blue `#1a65a6`, turning `#0f385c` on hover.
- Square everything: buttons, inputs, panels and the search field are 0px radius.
- The green `#0f7a52` button is the single primary action colour.
- Keyboard focus is a loud yellow `#ffdd00` with a black `#0b0c0c` bar.
- Content is constrained to a 960px page width with 30px gutters.

## Colors

All colours below were read from the live site (computed styles, the site's CSS custom
properties and its stylesheet corpus). They correspond 1:1 to the functional colours
published on the Design System colour page
([design-system.service.gov.uk/styles/colour](https://design-system.service.gov.uk/styles/colour/)).

### Brand & Accent
- **Primary / button green** (`#0f7a52`): default button background; the functional
  colour `success` and the CSS variable `--govuk-success-colour`.
- **Primary hover** (`#0b5c3e`): measured button background on hover.
- **Primary shadow** (`#083d29`): the 2px hard bottom shadow under green buttons.
- **Brand blue** (`#1d70b8`): `--govuk-brand-colour`; the masthead, the 10px footer top
  border and the thick section rule.
- **Brand tint** (`#d2e2f1`): the square search button in the masthead, also the default
  tag background.

### Surface
- **Canvas** (`#ffffff`): `--govuk-body-background-colour`; the main white content area
  the reader sees (68% of the captured viewport).
- **Template** (`#f4f8fb`): `--govuk-template-background-colour` and
  `--govuk-surface-background-colour`; the cookie banner, the footer and the html
  element behind the page. It is the largest background by measured area because the
  footer is tall, but visually the page reads as white.

### Text
- **Ink** (`#0b0c0c`): `--govuk-text-colour`, the body text colour (most-read colour on
  the page).
- **Print ink** (`#000000`): `--govuk-print-text-colour`; also the computed text colour
  inside text inputs.
- **Secondary text** (`#484949`): `--govuk-secondary-text-colour`, hint and muted text.
- **Link** (`#1a65a6`), **link hover** (`#0f385c`), **link visited** (`#54319f`); link
  active is `#0b0c0c`.
- **Inverse text** (`#ffffff`): text on the masthead and on green/red buttons.

### Lines
- **Border** (`#cecece`): `--govuk-border-colour`; keylines between topic rows.
- **Surface border** (`#8eb8dc`): `--govuk-surface-border-colour`; the 1px rule under
  footer headings and visible section breaks.
- **Input border**: `#0b0c0c`, 2px.

### Semantic
- **Error** (`#ca3535`): `--govuk-error-colour`; warning button background, error
  messages and error borders. Warning button hover is `#982828`, its shadow `#651b1b`.
- **Focus** (`#ffdd00`): `--govuk-focus-colour`, paired with focus text `#0b0c0c`.
- **Secondary button** (`#f3f3f3`), hover `#cecece`, shadow `#858686`.

## Typography

### Font Family
GDS Transport is the only typeface, declared exactly as
`"GDS Transport", arial, sans-serif` (the govuk-frontend setting `$govuk-font-family`,
[_typography-font.scss](https://github.com/alphagov/govuk-frontend/blob/main/packages/govuk-frontend/src/govuk/settings/_typography-font.scss)).
Two weights exist: `$govuk-font-weight-regular: 400` and `$govuk-font-weight-bold: 700`.
The homepage loads "GDS Transport normal" and "GDS Transport bold" only.

### Hierarchy

| Token | Size | Weight | Line height | Where |
|---|---|---|---|---|
| display-hero | 55px | 700 | 66px | Homepage masthead h1 (white) |
| display-hero-mobile | 40px | 700 | 48px | Same h1 at 390px wide |
| heading-xl | 48px | 700 | 50px | `govuk-heading-xl` (type scale) |
| heading-l | 36px | 700 | 40px | "Popular on GOV.UK", "Services and information" |
| heading-m | 24px | 700 | 30px | Footer column headings |
| heading-s | 19px | 700 | 25px | Topic h3s, bold popular links |
| body | 19px | 400 | 25px | Paragraphs, links, inputs, tags |
| body-s | 16px | 400 | 20px | "Is this page useful?" feedback, small print |
| button | 19px | 400 | 19px | Every `govuk-button` |
| header-menu | 16px | 700 | — | "Menu" toggle in the masthead |

The homepage hero at 55px/66px is a homepage-specific size; the published type scale
([design-system.service.gov.uk/styles/type-scale](https://design-system.service.gov.uk/styles/type-scale/))
lists 80, 48, 36, 27, 24, 19 and 16 with these large-screen pairs: 80/80, 48/50, 36/40,
27/30, 24/30, 19/25, 16/20. On small screens 48 becomes 32/35, 36 becomes 27/30, and 24
becomes 21/25; 19 and 16 do not change.

### Principles
- 19px is the body default, not 16px. Smaller text is reserved for secondary content.
- Headings are bold, sentence case, never uppercase, never letter-spaced (letter-spacing
  is `normal` everywhere).
- Only two weights; emphasis is done with bold, not colour.
- Line-heights come in fixed pairs from the scale rather than a ratio.

### Note on Font Substitutes
GDS Transport is restricted: "If your service is on the service.gov.uk subdomain you
must use the GDS Transport font"
([design-system.service.gov.uk/styles/typeface](https://design-system.service.gov.uk/styles/typeface/)),
and services outside GOV.UK are not meant to use it. The system's own declared fallback
is `arial, sans-serif`; that is the substitute to use when GDS Transport is not
available.

## Layout

### Spacing System
The Design System publishes a responsive and a static spacing scale
([design-system.service.gov.uk/styles/spacing](https://design-system.service.gov.uk/styles/spacing/)).
Static scale: 0, 5, 10, 15, 20, 25, 30, 40, 50, 60px (units 0–9). The responsive scale
uses the same large-screen values and shrinks on small screens (unit 4 = 15/20px,
unit 6 = 20/30px, unit 9 = 40/60px). Measured paddings on the homepage are 5, 10, 15, 19,
20, 30, 40 and 60px, and gaps 15px and 30px — all on that scale except the 19px.

### Grid & Container
- Page width `$govuk-page-width: 960px`, gutter `$govuk-gutter: 30px`
  ([_measurements.scss](https://github.com/alphagov/govuk-frontend/blob/main/packages/govuk-frontend/src/govuk/settings/_measurements.scss)).
- The homepage uses a two-thirds / one-third split for "Services and information"
  and "Featured", and a three-column grid for "Popular on GOV.UK".
- Measured: the content column h2 is 960px wide; topic rows are 580px wide.

### Whitespace Philosophy
Generous vertical rhythm with no decoration: sections are separated by space and a single
rule, not by cards or backgrounds. Each topic row is link + one-line description +
keyline, repeated.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| Flat | none | All content, panels, inputs |
| Button edge | `0 2px 0 #083d29` | Green button bottom edge |
| Secondary edge | `0 2px 0 #858686` | Grey secondary button |
| Warning edge | `0 2px 0 #651b1b` | Red warning button |
| Focus | yellow `#ffdd00` fill/outline + `#0b0c0c` bar | Keyboard focus |

There are no blurred drop shadows in page content. The only "depth" is the hard 2px
offset under buttons, which reads as a physical key edge.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| none | 0px | Buttons, inputs, search, panels — everything |
| tag | 1px | `govuk-tag` (measured on the Design System tag example) |

No clip-path, skew or notch shapes are used. Circular arrow icons in "Popular on GOV.UK"
are icons, not components with radius tokens.

### Borders
- Form elements: 2px (`$govuk-border-width-form-element`).
- Standard border: 5px; wide border: 10px (the footer top edge); focus width 3px.

## Components

### Buttons
**Primary (`govuk-button`)**: background `#0f7a52`, text `#ffffff`, 19px/19px GDS
Transport regular, padding `8px 10px 7px`, height 38px, 0px radius, 2px transparent
border, box-shadow `0 2px 0 #083d29`. Hover: background `#0b5c3e`. Focus: background
`#ffdd00`, text `#0b0c0c`, border `#ffdd00`, shadow `0 2px 0 #0b0c0c`.

**Secondary (`govuk-button--secondary`)**: background `#f3f3f3`, text `#0b0c0c`,
same metrics, shadow `0 2px 0 #858686`; hover background `#cecece`.

**Warning (`govuk-button--warning`)**: background `#ca3535`, text `#ffffff`, shadow
`0 2px 0 #651b1b`; hover `#982828`.

The Design System also documents Start (with arrow icon), Inverse (white on dark) and
disabled buttons
([design-system.service.gov.uk/components/button](https://design-system.service.gov.uk/components/button/));
these were not measured here, so no tokens are declared for them.

### Inputs & Forms
**Text input (`govuk-input`)**: white background, `#000000` text, 2px `#0b0c0c` border,
0px radius, padding 5px, height 40px, 19px/25px. Focus: 3px `#ffdd00` outline plus an
inset `0 0 0 2px #0b0c0c` shadow that thickens the border. The homepage search input is a
larger variant (50px tall, 6px padding, 19px/28px).

### Tags
**Tag (`govuk-tag`)**: background `#d2e2f1`, text `#0f385c`, 19px/25px regular,
padding `2px 8px 3px`, height 30px, 1px radius.

### Navigation
The masthead is a 62px tall brand-blue `#1d70b8` header with the white "GOV.UK"
logotype, a 16px bold white "Menu" toggle and a search toggle separated by a thin white
divider. The homepage search button is a 50px square, background `#d2e2f1` with a
`#1d70b8` magnifier; on hover it lightens to `#f4f8fb`.

### Links
`#1a65a6`, underlined (1px thickness, ~3px offset), hover `#0f385c`, visited `#54319f`.
Links in "Popular on GOV.UK" are bold 19px.

### Footer
Background `#f4f8fb`, top border 10px `#1d70b8`, padding `40px 0px 25px`. Column
headings are 24px/30px bold with a 1px `#8eb8dc` bottom rule and 20px bottom padding;
links are 19px/25px `#1a65a6`.

### Signature Components
- **Topic list row**: underlined link (19px) over a 19px description, a right-aligned
  chevron and a `#cecece` keyline below.
- **Featured tile**: a square pastel illustration next to a link + description.
- **Feedback strip**: "Is this page useful?" with outlined 16px buttons (1px `#0b0c0c`
  border, `0 3px 0 #0b0c0c` shadow, padding `8px 10px 7px`).

## Design System Architecture

GOV.UK is built with the **GOV.UK Design System**
([design-system.service.gov.uk](https://design-system.service.gov.uk/)) and its code
package **GOV.UK Frontend** ([github.com/alphagov/govuk-frontend](https://github.com/alphagov/govuk-frontend)).

**Token architecture.** Colours are two-tier. A palette of named colours with tint/shade
variants lives in `_colours-palette--internal.scss`; functional colours in
[`_colours-functional.scss`](https://github.com/alphagov/govuk-frontend/blob/main/packages/govuk-frontend/src/govuk/settings/_colours-functional.scss)
map roles to palette entries, e.g. `"brand": (name: "blue")`,
`"link": (name: "blue", variant: "shade-10")`, `"link-hover": (name: "blue", variant: "shade-50")`,
`"template-background": (name: "blue", variant: "tint-95")`, `"border": (name: "black", variant: "tint-80")`.
They are read with the Sass function `govuk-functional-colour("brand")` and emitted as CSS
custom properties (setting `$govuk-output-custom-properties: true`), which is exactly what
the live homepage exposes: `--govuk-brand-colour`, `--govuk-text-colour`,
`--govuk-link-colour`, `--govuk-focus-colour`, `--govuk-error-colour`,
`--govuk-success-colour`, `--govuk-border-colour`. The colour page instructs: "Do not copy
the specific hexadecimal (hex) colour values. For example, use
`govuk-functional-colour("brand")` rather than `#1d70b8`"
([styles/colour](https://design-system.service.gov.uk/styles/colour/)). Other settings
files include `_spacing.scss`, `_measurements.scss`, `_media-queries.scss`,
`_typography-font.scss` and `_typography-responsive.scss`.

**Theming.** There is one light theme. No dark or density mode is documented. The
settings folder also contains `_colours-organisations.scss`. Theme values are switched at Sass compile time and
exposed as CSS custom properties.

**Type & spacing systems.** Type scale points 80/48/36/27/24/19/16 with fixed
line-heights, responsive below the tablet breakpoint
([styles/type-scale](https://design-system.service.gov.uk/styles/type-scale/)); mixins
`govuk-font($size: 19)` and `govuk-font-size()`. Spacing units 0–9 on a 5px step up to
30px, then 40/50/60
([styles/spacing](https://design-system.service.gov.uk/styles/spacing/)), via
`govuk-spacing(n)` and override classes like `govuk-!-padding-right-5`. Breakpoints:
mobile 320px, tablet 641px, desktop 769px
([_media-queries.scss](https://github.com/alphagov/govuk-frontend/blob/main/packages/govuk-frontend/src/govuk/settings/_media-queries.scss)).

**Component model.** BEM-style classes prefixed `govuk-` with modifiers
(`govuk-button--secondary`, `govuk-button--warning`, `govuk-button--start`,
`govuk-button--inverse`). The official inventory
([components](https://design-system.service.gov.uk/components/)): Accordion, Back link,
Breadcrumbs, Button, Character count, Checkboxes, Cookie banner, Date input, Details,
Error message, Error summary, Exit this page, Feedback, Fieldset, File upload, Generic
header, GOV.UK footer, GOV.UK header, Inset text, Language navigation, Notification banner,
Pagination, Panel, Password input, Phase banner, Radios, Select, Service navigation, Skip
link, Summary list, Table, Tabs, Tag, Task list, Text input, Textarea, Warning text. The
homepage itself also uses components from GOV.UK's publishing component library (class
prefix `gem-c-`, e.g. `gem-c-search__submit`).

**Accessibility.** Contrast "must" meet WCAG 2.2 SC 1.4.3 level AA
([styles/colour](https://design-system.service.gov.uk/styles/colour/)). Focus states use
a yellow background with a black bottom border for links, and a yellow outline with a
thick black border for form inputs, meeting WCAG 2.2 SC 1.4.11
([get-started/focus-states](https://design-system.service.gov.uk/get-started/focus-states/));
`$govuk-focus-width: 3px`. The button guidance says to avoid multiple default buttons per
page and not to rely on red alone for warning buttons.

**Delivery.** npm package `govuk-frontend` (latest on the npm registry: 6.5.1; the live
homepage reports `--govuk-frontend-version: "6.1.0"`). Browser support grades A–X are documented in the repo README. Content is
published under the Open Government Licence v3.0.

## Do's and Don'ts

### Do
- Use GDS Transport (fallback `arial, sans-serif`) at 19px/25px for body text.
- Use `#0f7a52` for the one primary button per page, with the `0 2px 0 #083d29` edge.
- Underline every link and colour it `#1a65a6`; hover `#0f385c`.
- Keep every corner square (0px).
- Use the yellow `#ffdd00` + `#0b0c0c` focus treatment on every interactive element.
- Separate sections with whitespace and a single rule (`#cecece` or `#1d70b8`).
- Constrain content to 960px with 30px gutters.
- Write in plain, short, sentence-case English.

### Don't
- Don't round buttons, inputs or panels.
- Don't use blurred drop shadows, gradients or photography as decoration.
- Don't use a third font weight or letter-spacing.
- Don't set body text at 16px by default; 16px is for secondary content.
- Don't remove link underlines or use colour alone to indicate a link.
- Don't put more than one green primary button on a page.
- Don't use `#1d70b8` brand blue as a button colour — it is the masthead.

## Responsive Behavior

### Breakpoints
| Name | Min width |
|---|---|
| mobile | 320px |
| tablet | 641px (`40.0625rem`) |
| desktop | 769px (`48.0625rem`) |

### Type changes
The hero h1 drops from 55px/66px to 40px/48px at 390px wide. Body text stays 19px/25px.
Measured mobile sizes include 32px and 21px, consistent with the small-screen type scale
(48→32, 24→21).

### Touch Targets
Buttons are 38px tall plus the 2px edge; the homepage search control is 50px tall; the
masthead "Menu" toggle is 61px tall.

### Collapsing Strategy
- The mobile extraction keeps body text at 19px while headings step down (40px hero,
  32px and 21px headings).
- Responsive spacing units shrink on small screens per the published scale (e.g. unit 9:
  60px → 40px).

### Image Behavior
Images are limited to small square illustrations in "Featured" and the app icon; they
scale within their column and never go full bleed.

## Iteration Guide

1. Start with a white `#ffffff` page inside a `#f4f8fb` template, text `#0b0c0c`,
   GDS Transport 19px/25px.
2. Add the 62px `#1d70b8` masthead; homepage-style pages place a white 55px/66px bold
   h1 and a search field inside it.
3. Build sections with 36px/40px bold headings and lists of underlined `#1a65a6` links.
4. Use the green `#0f7a52` square button (`8px 10px 7px`, 38px tall) for the main action.
5. Apply the yellow focus state before anything else in interaction work.
6. Close with the `#f4f8fb` footer and its 10px `#1d70b8` top border.
7. Check every colour against the functional palette; never invent tints.
