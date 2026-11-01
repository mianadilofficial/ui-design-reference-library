---
version: alpha
name: USAGov
category: "Government & Nonprofit"
description: "USA.gov (USAGov), the U.S. government's official guide to services, built with the U.S. Web Design System: Source Sans Pro Web body text at 18.08px/27.12px in #1b1b1b on #ffffff, Merriweather Web 700 headlines at 31.2px, navy #112f4e 4px-radius buttons that invert to white with a #0081a1 border on hover, #1a4480 links, a cyan #00bde3 search button and a pale #d2ebf1 topic grid of white cards with 2px #0081a1 borders."

colors:
  primary: "#112f4e"
  on-primary: "#ffffff"
  primary-hover-border: "#0081a1"
  link: "#1a4480"
  link-hover: "#162e51"
  canvas: "#ffffff"
  ink: "#1b1b1b"
  topic-band: "#d2ebf1"
  callout: "#ccecf2"
  alert-info: "#e7f6f8"
  banner: "#f0f0f0"
  back-to-top: "#e8f0f7"
  accent-cool: "#00bde3"
  accent-cool-hover: "#009ec1"
  focus: "#0186a2"
  card-border: "#0081a1"
  card-shadow: "#aaaaaa"
  secondary: "#d83933"
  input-border: "#565c65"
  border-light: "#dfe1e2"

typography:
  display:
    fontFamily: "\"Merriweather Web\", Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 31.2px
    fontWeight: 700
    lineHeight: 35.88px
  display-mobile:
    fontFamily: "\"Merriweather Web\", Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 31.2px
    fontWeight: 700
    lineHeight: 35.88px
  callout-heading:
    fontFamily: "\"Merriweather Web\", Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 31.2px
    fontWeight: 700
    lineHeight: 36.504px
    letterSpacing: -0.39px
  heading-sans:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 23.36px
    fontWeight: 700
    lineHeight: 26.864px
  card-title:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 18.08px
    fontWeight: 700
    lineHeight: 23.504px
  footer-heading:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 18.08px
    fontWeight: 700
    lineHeight: 21.696px
  body:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 18.08px
    fontWeight: 400
    lineHeight: 27.12px
  body-hero:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 16.96px
    fontWeight: 400
    lineHeight: 25.44px
  body-s:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-large:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 23.36px
    fontWeight: 600
    lineHeight: 21.024px
  button-small:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 14.88px
    fontWeight: 700
    lineHeight: 13.392px
  nav:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 14.88px
    fontWeight: 700
    lineHeight: 16.368px
  banner:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 13.92px
    fontWeight: 400
    lineHeight: 20.88px
  micro:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 12.8px
    fontWeight: 400

rounded:
  none: 0px
  button: 4px
  back-to-top: 25px

spacing:
  s4: 4px
  s8: 8px
  s11: 11.2px
  s12: 12px
  s15: 15px
  s16: 16px
  s20: 20px
  s24: 24px
  s32: 32px
  s50: 50px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.button}"
    padding: 24px
    height: 52px
    border: 2px solid transparent
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    borderColor: "{colors.primary-hover-border}"
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.button}"
    padding: 10px 20px
    height: 44px
  button-small-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    borderColor: "{colors.primary-hover-border}"
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.input-border}"
    borderWidth: 1px
    typography: "{typography.body-s}"
    rounded: "{rounded.none}"
    padding: 0px 8px
    height: 44px
  search-button:
    backgroundColor: "{colors.accent-cool}"
    textColor: "{colors.ink}"
    rounded: 0px 4px 4px 0px
    padding: 0px 12px
    height: 44px
  search-button-hover:
    backgroundColor: "{colors.accent-cool-hover}"
  focus-ring:
    outline: "4px solid {colors.focus}"
    boxShadow: "inset 0 0 0 2px {colors.canvas}"
  topic-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.card-border}"
    borderWidth: 2px
    rounded: "{rounded.none}"
    boxShadow: "1px 1px 7px 0px {colors.card-shadow}"
    typography: "{typography.body}"
  callout-box:
    backgroundColor: "{colors.callout}"
    textColor: "{colors.primary}"
    typography: "{typography.callout-heading}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    padding: 11.2px
    height: 44px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
    textDecoration: underline
  quick-link:
    textColor: "{colors.ink}"
    typography: "{typography.body-s}"
    borderLeft: "4px solid {colors.accent-cool}"
  quick-link-hover:
    textDecoration: underline
  gov-banner:
    backgroundColor: "{colors.banner}"
    textColor: "{colors.ink}"
    typography: "{typography.banner}"
  back-to-top:
    backgroundColor: "{colors.back-to-top}"
    textColor: "{colors.link}"
    rounded: 25px 0px 0px 25px
    padding: 0px 15px 0px 50px
    height: 50px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 32px 0px 0px
    typography: "{typography.body}"
  footer-contact:
    backgroundColor: "{colors.callout}"
    textColor: "{colors.ink}"
    padding: 20px 0px
---

## Overview

USA.gov (USAGov) is the official guide to U.S. government information and services;
GSA announced its 2023 redesign. Its homepage is a USWDS-style public service page with a
little more warmth than most federal sites: a patriotic flag photograph, a serif
headline, and a tiled grid of illustrated topic cards on a pale cyan band.

The page opens with the standard grey `#f0f0f0` "An official website of the United States
government — Here's how you know" banner, then a pale `#e7f6f8` alert strip with a cyan
left edge ("Visit vote.gov to learn how to register to vote…"). The header holds the round
navy "usa gov" logo, a navy "Español" button, "Call us at 1-844-USAGOV1", a search field
with a cyan `#00bde3` square search button, and a row of 14.88px bold `#1a4480` navigation
links (All topics and services, The U.S. and its government, Government benefits…).

The hero is a full-width flag photograph with a navy `#112f4e` text panel on the right:
"Making government services easier to find" in white Merriweather Web 700 at
31.2px/35.88px and a 16.96px description. A white "How do I …" box overlaps the hero with
four quick links, each marked by a 4px cyan left rule. Below it a navy band holds "Jump to
all topics and services" and a round cyan chevron, then a pale `#ccecf2` callout
"Government benefits and financial assistance" with a navy "Find benefits" button.

"All topics and services" is a red `#d83933` Merriweather heading over a thick red rule,
followed by a four-column grid of white topic cards on `#d2ebf1`: each card has a 2px
`#0081a1` border, a soft `1px 1px 7px 0px #aaaaaa` shadow, a navy-and-red line icon, a
dotted divider, a bold 18.08px title and an 18.08px description.

Microcopy is direct and service-oriented: "Find benefits", "Get or renew a passport",
"Learn about disaster assistance and find government benefits for other emergencies."

Key characteristics:
- Two typefaces: Source Sans Pro Web (UI and body) and Merriweather Web (display).
- Odd, computed sizes (18.08px, 16.96px, 23.36px, 31.2px) from the site's type scale.
- Navy `#112f4e` is the action colour; buttons invert to white on hover.
- Cyan `#00bde3` accents: search button, quick-link rules, chevrons.
- Red `#d83933` for the topic section heading and rule.
- Mostly square geometry; buttons get 4px.

## Colors

All values are measured on www.usa.gov (computed styles and stylesheet corpus; the site
exposes no CSS custom properties).

### Brand & Accent
- **Primary navy** (`#112f4e`): "Find benefits" and "Español" buttons, hero panel, navy band.
- **Hover border** (`#0081a1`): border that appears when buttons invert on hover; also the
  topic card border.
- **Accent cyan** (`#00bde3`): search button, quick-link left rules, round chevron; hover
  `#009ec1`.
- **Secondary red** (`#d83933`): "All topics and services" heading and rule.

### Surface
- **Canvas** (`#ffffff`): page body.
- **Topic band** (`#d2ebf1`): the large topic grid background (largest measured area).
- **Callout** (`#ccecf2`): benefits callout and the footer contact section.
- **Alert info** (`#e7f6f8`): vote.gov alert strip.
- **Gov banner** (`#f0f0f0`).
- **Back-to-top tab** (`#e8f0f7`).

### Text
- **Ink** (`#1b1b1b`): body text, most-read colour.
- **Link** (`#1a4480`): nav links and inline links; the "Here's how you know" button turns
  `#162e51` on hover.
- **Inverse** (`#ffffff`): text on navy.

### Lines & Focus
- **Input border** (`#565c65`), 1px.
- **Light border** (`#dfe1e2`).
- **Focus** (`#0186a2`): 4px solid outline with a 2px white inset shadow, measured on
  focused nav links and the search button.
- **Card shadow** (`#aaaaaa`).

## Typography

### Font Family
- **Source Sans Pro Web**, declared `"Source Sans Pro Web", "Helvetica Neue", Helvetica,
  Roboto, Arial, sans-serif` — weights 400, 600, 700 and 400 italic are loaded.
- **Merriweather Web**, declared `"Merriweather Web", Georgia, Cambria, "Times New Roman",
  Times, serif` — weight 700 loaded.
- Roboto Mono Web is declared in the CSS (@font-face) but not used on the homepage.

### Hierarchy

| Token | Family | Size | Weight | Line height | Where |
|---|---|---|---|---|---|
| display | Merriweather | 31.2px | 700 | 35.88px | Hero h1; "All topics and services" (red) |
| display-mobile | Merriweather | 31.2px | 700 | 35.88px | h1 at 390px (unchanged) |
| callout-heading | Merriweather | 31.2px | 700 | 36.504px, -0.39px | Benefits callout h2 |
| heading-sans | Source Sans | 23.36px | 700 | 26.864px | "How do I …" |
| button-large | Source Sans | 23.36px | 600 | 21.024px | "Find benefits" |
| card-title | Source Sans | 18.08px | 700 | 23.504px | Topic card titles |
| footer-heading | Source Sans | 18.08px | 700 | 21.696px | Footer column heads |
| body | Source Sans | 18.08px | 400 | 27.12px | Body, card descriptions |
| body-hero | Source Sans | 16.96px | 400 | 25.44px | Hero paragraph, "Jump to…" |
| body-s | Source Sans | 16px | 400 | 24px | Quick links, search input |
| button-small | Source Sans | 14.88px | 700 | 13.392px | "Español" |
| nav | Source Sans | 14.88px | 700 | 16.368px | Primary nav |
| banner | Source Sans | 13.92px | 400 | 20.88px | Gov banner |
| micro | Source Sans | 12.8px | 400 | — | Small labels |

### Principles
- Serif for the few big statements; sans for everything functional.
- Bold (700) for headings, titles and nav; 600 only on the large CTA.
- Only the callout heading uses negative tracking (-0.39px); everything else is normal.

### Note on Font Substitutes
Source Sans Pro, Merriweather and Roboto Mono are open-source typefaces bundled with USWDS
([designsystem.digital.gov/components/typography](https://designsystem.digital.gov/components/typography/)),
so no substitute is needed; the declared fallbacks are Helvetica Neue/Arial and
Georgia/Times.

## Layout

### Spacing System
Measured paddings: 15px (most common), 11.2px, 16px, 12px, 32px, 8px, 20px, 24px, 50px;
gaps 16px, 8px, 6.4px. USWDS spacing is expressed in units (`units(1)` = 1rem ≈ 16px,
[design-tokens](https://designsystem.digital.gov/design-tokens/)).

### Grid & Container
- Content width ~1124px (the section h2 measures 1124px wide at a 1280px viewport).
- Topic cards: four columns, each ~275px wide.
- Quick links: four columns inside the "How do I …" box.

### Whitespace Philosophy
Dense but orderly: colour bands (navy, pale cyan, white) separate sections; cards sit close
together with equal gutters.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| Flat | none | Bands, buttons, header |
| Card | `1px 1px 7px 0px #aaaaaa` | Topic cards |
| Floating | `0px 6px 6px 0px rgba(17, 47, 78, 0.4)` | One floating element (measured once) |

The "How do I …" box and hero panel overlap the photograph, creating layered depth without
heavy shadows.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| none | 0px | Cards, inputs, panels |
| button | 4px | Navy buttons; search button `0px 4px 4px 0px` |
| back-to-top | 25px | Back-to-top tab, `25px 0px 0px 25px` (left side only) |

Round elements: the logo disc and the cyan chevron circle.

## Components

### Buttons
**Primary ("Find benefits")**: `#112f4e`, white 23.36px/600, padding 24px, 52px tall,
4px radius, 2px transparent border. Hover: inverts to white `#ffffff` background,
`#112f4e` text, `#0081a1` border.
**Small ("Español")**: same colours, 14.88px/700, padding `10px 20px`, 44px tall, same
hover inversion.

### Inputs & Forms
**Search input**: white, 1px `#565c65` border, 0px radius, padding `0px 8px`, 44px tall,
16px text. **Search button**: `#00bde3`, `#1b1b1b` icon, radius `0px 4px 4px 0px`, 44px
square; hover `#009ec1`; focus 4px `#0186a2` outline + 2px white inset.

### Cards & Containers
**Topic card**: white, 2px `#0081a1` border, `1px 1px 7px 0px #aaaaaa`, square, ~289px
tall; icon, dotted divider, 18.08px/700 title, 18.08px/27.12px description.
**Callout**: `#ccecf2` box with a line illustration, navy Merriweather heading and a navy
button aligned right.

### Navigation
Primary nav links: 14.88px/700 `#1a4480`, padding 11.2px, 44px tall; focus ring as above.
Gov banner: `#f0f0f0`, 13.92px/20.88px.

### Links
Inline links `#1a4480`, underlined. Quick links in "How do I …" are `#1b1b1b` 16px with a
cyan left rule; they gain an underline on hover.

### Signature Components
- **Back-to-top tab**: right-edge tab, `#e8f0f7`, `#1a4480` "Top", radius
  `25px 0px 0px 25px`, padding `0px 15px 0px 50px`, 50px tall, with a circular arrow icon.
- **Hero panel**: navy box over the flag photo with Merriweather headline.

### Footer
White footer with 32px top padding, bold 18.08px column heads, then a `#ccecf2` "USAGov
Contact Center" section with `20px 0px` padding.

## Design System Architecture

USA.gov was "Developed using the GSA-led U.S. Web Design System"
([GSA blog, 2023](https://www.gsa.gov/blog/2023/04/14/gsa-unveils-upgrades-to-usagov-and-usagov-en-espanol-better-connecting-the-public-to-government-services)).
Its class names on the live page (`usa-banner`, `usa-card`, `usa-search`, `usa-footer`,
`usa-identifier`, `usa-nav`) are USWDS component classes. No USAGov-specific public design
system was found in two searches (see SOURCES.json); the architecture below is USWDS's, from its documentation.

**Token architecture.** USWDS defines token types for color, spacing units, font size,
font family, typesetting, flex, opacity, order, shadow and z-index; "Each token is a quoted
string or, with only the exceptions of `1px` and `2px`, a unitless number"
([design-tokens](https://designsystem.digital.gov/design-tokens/)). Colour is two-tier:
system tokens (e.g. `gray-90`, `blue-warm-70v`, `cyan-30v`, `red-50`) and theme tokens
that point at them — `ink: gray-90`, `base-darkest: gray-90`, `primary: blue-60v`,
`primary-dark: blue-warm-70v`, `primary-darker: blue-warm-80v`, `secondary: red-50`,
`accent-cool: cyan-30v`
([theme tokens](https://designsystem.digital.gov/design-tokens/color/theme-tokens/)).
Tokens are applied via functions (`color('red')`, `units(1)`), mixins
(`@include u-padding-x(2)`) and utility classes (`.padding-x-05`, `.font-sans-3xs`).

**Theming.** Themes are set at Sass compile time with `@use "uswds-core" with (...)`
settings such as `$theme-site-margins-width: 4`
([design-tokens](https://designsystem.digital.gov/design-tokens/)). USA.gov compiles its
theme into static CSS: the homepage has no CSS custom properties. No dark mode is present
on the site.

**Type & spacing systems.** Font roles sans/serif/mono/ui/heading/body; bundled
open-source faces Source Sans Pro, Merriweather, Public Sans, Roboto Mono
([typography](https://designsystem.digital.gov/components/typography/)). Spacing uses
units where `units(1)` = 1rem.

**Component model.** BEM-style `usa-` classes with modifiers. Official inventory
([components overview](https://designsystem.digital.gov/components/overview/)): Accordion,
Alert, Banner, Breadcrumb, Button, Button group, Card, Character count, Checkbox,
Collection, Combo box, Data visualizations, Date picker, Date range picker, File input,
Footer, Form, Header, Icon, Icon list, Identifier, In-page navigation, Input mask, Input
prefix/suffix, Language selector, Link, List, Memorable date, Modal, Pagination, Process
list, Prose, Radio buttons, Range slider, Search, Select, Side navigation, Site alert, Step
indicator, Summary box, Table, Tag, Text input, Time picker, Tooltip, Typography,
Validation.

**Accessibility.** USWDS targets "WCAG 2.1 AA", works toward WCAG 2.2, and complies with
Section 508; it provides "Colors with magic number contrast"
([accessibility](https://designsystem.digital.gov/documentation/accessibility/)). On
USA.gov the focus indicator is a 4px `#0186a2` outline with a 2px white inset.

**Delivery.** npm package `@uswds/uswds` (latest dist-tag 3.14.0 on the npm registry).

## Do's and Don'ts

### Do
- Use Source Sans Pro Web at 18.08px/27.12px for body and Merriweather Web 700 for the hero
  and section headlines.
- Use navy `#112f4e` for buttons, inverting to white with a `#0081a1` border on hover.
- Use `#1a4480` for links and nav.
- Use cyan `#00bde3` sparingly: search, quick-link rules, chevrons.
- Put topic cards on the pale `#d2ebf1` band with 2px `#0081a1` borders.
- Keep the official grey `#f0f0f0` gov banner at the very top.
- Keep the 4px `#0186a2` focus outline.

### Don't
- Don't round cards or inputs; only buttons (4px) and the back-to-top tab.
- Don't use Merriweather for body or UI text.
- Don't use red `#d83933` for buttons; it marks the section heading.
- Don't add heavy drop shadows beyond the soft card shadow.
- Don't drop the "Here's how you know" banner.

## Responsive Behavior

### Breakpoints
Not measured beyond the 1280px desktop and 390px mobile extractions.

### Type changes
At 390px the hero h1 keeps 31.2px/35.88px (wrapping to four lines); body stays 18.08px;
the hero paragraph keeps 16.96px.

### Touch Targets
Nav links, search, quick links and the small button are all 44px tall; the large CTA is
52px; the back-to-top tab 50px.

### Collapsing Strategy
Only the type sizes above were measured on mobile; layout behaviour beyond that is not
documented here.

### Image Behavior
The flag photo is a full-width hero image behind the navy panel; topic icons are small line
illustrations.

## Iteration Guide

1. Start with the `#f0f0f0` gov banner and a white page, Source Sans Pro Web 18.08px/27.12px
   in `#1b1b1b`.
2. Header: logo, navy "Español" button, phone line, search (cyan button), bold `#1a4480` nav.
3. Hero: full-width photo with a navy Merriweather panel; overlap a white quick-link box.
4. Callouts in `#ccecf2` with a navy 4px-radius button.
5. Topic grid: `#d2ebf1` band, four columns of white bordered cards with icons.
6. Footer: white columns, then the `#ccecf2` contact section.
7. Verify hover inversions and the `#0186a2` focus ring.
