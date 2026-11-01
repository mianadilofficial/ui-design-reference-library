---
version: alpha
name: Lufthansa
category: "Airlines"
description: "Lufthansa's web system — LH Deep Blue #05164d (official Pantone 4146, RGB 5/22/77) as header, ink and brand colour on white; LH Yellow #ffad00 (Pantone 2010) reserved for the one functional action, the 'Search flights' button (hover #ffbd32) with deep-blue text; the proprietary LufthansaHead (Bold/Light, fluid sizes ~17.7–46.2px) for headlines over LufthansaText (14/18px); 4px buttons, 8px cards with a blue-tinted rgba(5,22,77,.1) shadow, and maui-* web components."

colors:
  primary: "#ffad00"
  primary-hover: "#ffbd32"
  deep-blue: "#05164d"
  canvas: "#ffffff"
  ink: "#05164d"
  ink-secondary: "#52627c"
  ink-secondary-hover: "#414e63"
  ink-muted: "#666666"
  ink-disabled: "#b4b4b4"
  on-deep-blue: "#ebebeb"
  on-deep-blue-hover: "#ffffff"
  surface: "#f5f5f5"
  border: "#dcdcdc"
  border-strong: "#cccccc"
  focus: "#0968f6"
  error: "#cc0000"
  success: "#417505"

typography:
  display-promo:
    fontFamily: "LufthansaHead, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 46.1972px
    fontWeight: 700
  headline-l:
    fontFamily: "LufthansaHead, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 34.7981px
    fontWeight: 300
    lineHeight: 38.2779px
  headline-l-mobile:
    fontFamily: "LufthansaHead, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 28.1127px
    fontWeight: 300
    lineHeight: 30.9239px
  headline-fixed:
    fontFamily: "LufthansaHead, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 39.6px
  headline-m:
    fontFamily: "LufthansaHead, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 27.0986px
    fontWeight: 700
  headline-s:
    fontFamily: "LufthansaHead, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 23.3991px
    fontWeight: 700
  headline-xs:
    fontFamily: "LufthansaHead, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 17.6995px
    fontWeight: 700
  kicker:
    fontFamily: "LufthansaHead, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 17.6995px
    fontWeight: 300
  body-lg:
    fontFamily: "LufthansaText, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  body-lg-bold:
    fontFamily: "LufthansaText, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
  button:
    fontFamily: "LufthansaText, Arial, Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: "LufthansaText, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  body-bold:
    fontFamily: "LufthansaText, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
  label:
    fontFamily: "LufthansaText, Arial, Helvetica, MAMMilesSymbol, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px

rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 8px
  pill: 9999px

spacing:
  xxs: 5px
  xs: 6px
  sm: 10px
  md: 12px
  lg: 16px
  xl: 20px
  xxl: 32px
  xxxl: 40px
  section-sm: 48px
  section: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.deep-blue}"
    borderColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 30px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.deep-blue}"
    borderColor: "{colors.primary-hover}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 30px
    height: 50px
  trip-type-select:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.body-lg-bold}"
    rounded: "{rounded.sm}"
    height: 30px
  trip-type-select-hover:
    textColor: "{colors.ink-secondary-hover}"
    typography: "{typography.body-lg-bold}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body-lg}"
    padding: 6px 0px
    height: 39px
  input-label:
    textColor: "{colors.ink-muted}"
    typography: "{typography.label}"
  card-teaser:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    borderColor: "{colors.border}"
    typography: "{typography.body-lg-bold}"
    rounded: "{rounded.lg}"
    padding: 0px
  card-teaser-hover:
    textColor: "{colors.ink-secondary-hover}"
    borderColor: "{colors.ink-secondary-hover}"
  card-service-tile:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-secondary}"
    borderColor: "{colors.border}"
    typography: "{typography.body-lg-bold}"
    rounded: "{rounded.lg}"
    padding: 20px
  card-promo:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.display-promo}"
    rounded: "{rounded.lg}"
    padding: 40px 48px
  nav:
    backgroundColor: "{colors.deep-blue}"
    textColor: "{colors.on-deep-blue}"
    typography: "{typography.body-bold}"
    height: 122px
  nav-link-hover:
    textColor: "{colors.on-deep-blue-hover}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

Lufthansa's site is deep blue, white, and one stroke of yellow. The US homepage capture opens with
a slim **LH Deep Blue** header — the white crane-in-circle logo with the Lufthansa word mark, then
Book · My flights · Check-in · Flight status in light grey, help/Login/menu icons on the right.
Below it, on plain white, sits the flight search: "Round trip" and "Economy, 1 Traveller" selectors,
underlined From/To/date fields, and a single **LH Yellow** "Search flights" button. Nothing else on the
page is yellow.

Next comes a full-bleed photo (a smiling traveller in warm red, a Miles & More card) with a white
promo card overlapping it: a light kicker line and a heavy 46px LufthansaHead Bold headline —
"Earn 70,000 miles. See terms." — then an arrow link "→ Learn more". "Current topics and news" (34.8px
LufthansaHead Light) introduces a carousel of white cards with a thin grey border and a faint blue
shadow; "Flight offers from Albany" adds pill toggles (Round trip / One way) and tall destination
photography (a Lufthansa tail fin against blue sky).

The brand's official guidelines explain the restraint: "Blue is Lufthansa's leading color … The color
yellow takes on a context-related functional and emotional role" and "Yellow serves as an active appeal
that supports a feature or prompts an action. Yellow indicates functional controls"
([Lufthansa Brand Guidelines — Color](https://frontify.lufthansa.com/d/jKOh3AHXtyml/en/guidelines)).

**Key Characteristics:**
- LH Deep Blue `#05164d` — header, ink, headline colour (1,282 weighted chars) and logo.
- LH Yellow `#ffad00` only on the primary action, with deep-blue (not white) text; hover `#ffbd32`.
- Bold/Light contrast: LufthansaHead 700 for promotional headlines, 300 for section titles.
- Fluid headline sizes (34.7981px, 46.1972px …) driven by `--desy-font-factor: 1.6`.
- Arrow links ("→ Learn more") instead of secondary buttons.
- 8px cards with `rgba(5, 22, 77, 0.1) 0 2px 4px` — a shadow tinted with the brand blue.
- Underlined, borderless form fields with small grey labels.

## Colors

> Sources: `web/data/extracted/lufthansa.json` (https://www.lufthansa.com/us/en/homepage) and the official Lufthansa Brand Guidelines (Color, Typeface). Lufthansa's `:root` exposes almost no colour variables; values come from computed styles and the CSS corpus.

### Brand
- **LH Deep Blue** (`{colors.deep-blue}` / `{colors.ink}` — `#05164d`): official primary colour, "PANTONE (PMS): 4146 C … RGB: 5, 22, 77 · HEX: #05164D · RAL 5013 (Cobalt blue)". Header background (largest coloured area, 998), headline and body ink.
- **LH Yellow** (`{colors.primary}` — `#ffad00`): official "PANTONE (PMS): 2010 C … RGB: 255, 173, 0 · HEX: #FFAD00 · RAL 1028 (Melon yellow)". The Search flights button.
- **Yellow Hover** (`{colors.primary-hover}` — `#ffbd32`): measured hover background and border of the yellow button.
- **LH White** (`{colors.canvas}` — `#ffffff`): "White is the base color of Lufthansa".

### Text
- **Ink** `#05164d`.
- **Secondary** (`{colors.ink-secondary}` — `#52627c`): card titles, selectors, arrow links (369 chars); hover darkens to `#414e63` (`{colors.ink-secondary-hover}`, measured on every teaser card and the trip selector).
- **Muted** (`{colors.ink-muted}` — `#666666`): field labels ("From"), helper text.
- **Disabled/placeholder** (`{colors.ink-disabled}` — `#b4b4b4`).
- **On Deep Blue** (`{colors.on-deep-blue}` — `#ebebeb`): header nav text (1,192 chars); hover `#ffffff` (measured on "Login").

### Surface & lines
- **Surface** (`{colors.surface}` — `#f5f5f5`): service tiles (Hotels, Rental car, Parking …).
- **Border** (`{colors.border}` — `#dcdcdc`): card outlines (11 measured).
- **Border strong** (`{colors.border-strong}` — `#cccccc`).

### Functional
- **Focus** (`{colors.focus}` — `#0968f6`): focus ring `0 0 0 .2rem #0968f6` (CSS corpus).
- **Error** (`{colors.error}` — `#cc0000`): error glow `0 0 .6rem .1rem #c00`.
- **Success** (`{colors.success}` — `#417505`).

### Colour rules from the brand guidelines
- "Blue and yellow surfaces are not placed next to each other or over each other. Yellow primarily appears in isolation, surrounded by neutral colors like grey and white."
- Don'ts listed: "Yellow deployed as a warning color", "Inflationary use of yellow", "Yellow used as a font color", "Yellow in 'color blocking' with blue", "Yellow deployed decoratively without function".
- "Blue can be shaped in digital by a linear, vertical gradient" — the "Blue Breeze", always horizontal or vertical, never diagonal.

## Typography

### Font Family
Two proprietary families, loaded as `LufthansaHead` (normal + bold) and `LufthansaText` (300/400/700),
plus `MAMMilesSymbol` / `LufthansaMamSymbolText` for the Miles & More symbol and `lh-iconfont` icons.
Fallback stack: `Arial, Helvetica, sans-serif`. The brand guidelines state: "The Lufthansa typeface
system consists of 4 different typefaces: Lufthansa Head, Lufthansa Text, Lufthansa Logo and Lufthansa
Registration … For communications, Lufthansa Head and Lufthansa Text are employed exclusively."

### Hierarchy

| Token | Family | Size | Weight | Line height | Measured on |
|---|---|---|---|---|---|
| `{typography.display-promo}` | Head | 46.1972px | 700 | — (≈1.1×) | "Earn 70,000 miles. See terms." |
| `{typography.headline-l}` | Head | 34.7981px | 300 | 38.2779px | section titles ("Current topics and news"), hidden h1 |
| `{typography.headline-l-mobile}` | Head | 28.1127px | 300 | 30.9239px | same at 375px |
| `{typography.headline-fixed}` | Head | 36px | 400 | 39.6px | "Flight offers from Albany" |
| `{typography.headline-m}` | Head | 27.0986px | 700 | — | feature headline ("Surf, watch videos…") |
| `{typography.headline-s}` | Head | 23.3991px | 700 | — | h4 in menus ("Payment options") |
| `{typography.headline-xs}` | Head | 17.6995px | 700 | — | tile titles ("Hotels") |
| `{typography.kicker}` | Head | 17.6995px | 300 | — | kicker ("Miles & More World Elite Mastercard") |
| `{typography.body-lg}` | Text | 18px | 400 | 27px | field values, link lists |
| `{typography.body-lg-bold}` | Text | 18px | 700 | 27px | card titles (h4), arrow links |
| `{typography.button}` | Text | 18px | 700 | 24px | Search flights |
| `{typography.body}` | Text | 14px | 400 | 21px | card body copy |
| `{typography.body-bold}` | Text | 14px | 700 | 21px | footer/menu link lists (most frequent size) |
| `{typography.label}` | Text | 12px | 400 | 18px | field labels |

Headline line height is consistently 1.1× size (38.2779 / 34.7981; 39.6 / 36).

### Principles (from the brand guidelines)
- "Lufthansa Head is mainly available in two weights: Lufthansa Head Bold and Lufthansa Head Light."
- Headline Bold / Subline Light at line spacing 105%; long text in Lufthansa Text at 120%.
- "Lufthansa Text, optimized for small type sizes, is only used for … paragraph texts, tables and footnotes."
- "The Lufthansa Head Light must always be deployed in combination with the Lufthansa Head Bold."
- "Within long text passages, the combination of Lufthansa Text and Lufthansa Head are not permitted."
- "For reasons of compatibility, 'Arial' is used as the correspondence font."

### Note on Font Substitutes
LufthansaHead and LufthansaText are corporate typefaces "developed and optimised" for Lufthansa and
distributed only through the brand portal. The site's own fallback is **Arial**, which the guidelines
also name as the compatibility font. Keep the Bold/Light pairing when substituting.

## Layout

### Spacing System
- **Measured paddings:** 10px (16), 80px (13), 32px (13), 20px (12), 12px (10), 6px, 14px, 7px, 25px, 40px, 5px, 48px.
- **Measured gaps:** 20px (7), 5px, 16px.
- **Tokens:** `{spacing.xxs}` 5 · `{spacing.xs}` 6 · `{spacing.sm}` 10 · `{spacing.md}` 12 · `{spacing.lg}` 16 · `{spacing.xl}` 20 · `{spacing.xxl}` 32 · `{spacing.xxxl}` 40 · `{spacing.section-sm}` 48 · `{spacing.section}` 80.
- Section rhythm: 80px vertical paddings; card interior 20px; promo card 40px 48px.

### Grid & Container
- `--container-offset: 8rem`; header height `--header-height: 122px` (and `--sticky-header-nav-height: 122px`).
- Search row: four fields + button in one line; promo card overlaps the right half of a full-bleed photo.
- Teaser carousel: 3 visible cards (~296px) with partial cards peeking at both edges.
- Text aligns to a left edge ~60px in from the viewport.

### Whitespace Philosophy
White space is the brand's "visual generosity and sovereignty" (guidelines on white). The search sits
on open white with no panel; sections breathe with 80px gaps.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | header, search, footer |
| 1 | `rgba(5, 22, 77, 0.1) 0px 2px 4px 0px` + 1px `#dcdcdc` border | teaser cards, service tiles (11 measured) |
| 2 | `var(--maui-effect-elevation-1)` / `-2` | maui component overlays |
| Overlay | `0 4px 24px rgba(0,0,0,.15)`, `0 1px 20px 1px #0003` | flyouts (CSS corpus) |
| Focus | `0 0 0 .2rem #0968f6` | keyboard focus |

The shadow is tinted with LH Deep Blue (5, 22, 77), never neutral black, on brand surfaces.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 3px | small controls |
| `{rounded.sm}` | 4px | buttons, trip selectors, carousel arrows |
| `{rounded.md}` | 6px | tab tops (`6px 6px 0 0`, 14 measured) |
| `{rounded.lg}` | 8px | cards, tiles, promo card (most frequent) |
| `{rounded.pill}` | 9999px | toggle chips (Round trip / One way) |

Card bottoms also appear as `0 0 8px 8px` when an image sits on top.

### Photography Geometry
Warm, natural photography of travellers and aircraft details (the crane tail fin), cropped to fill;
card images are full-bleed on top with square top corners inside the 8px card.

## Components

### Buttons
**`button-primary`** — "Search flights": `#ffad00` fill and 2px border, `#05164d` 18px/700/24px text, padding 10px 30px, 50px tall, 4px radius. Hover `#ffbd32` (measured). Per the guidelines, yellow marks "functional controls" — use it once per view.
**Arrow link** — "→ Learn more": 18px/700 `#52627c` (or `#05164d` on promo cards), arrow icon from `lh-iconfont`; hover `#414e63`.
**`trip-type-select`** — "Round trip ⌄": 18px/700 `#52627c`, 4px radius, 30px tall, transparent; hover `#414e63`.
**Toggle chips** — "Round trip / One way": pill; selected deep-blue fill with white text, unselected white with grey outline.

### Inputs & Forms
**`text-input`** — borderless with an underline, transparent, 18px/400/27px `#05164d`, padding 6px 0, 39px tall. **`input-label`** — 12px/400/18px `#666666` above the field ("From"). Swap icon between From and To; calendar icon at the end of the date field.

### Navigation
**`nav`** — `#05164d`, 122px (`--header-height`), logo left, 14px/700 `#ebebeb` items (Book · My flights · Check-in · Flight status), hover `#ffffff`. Mobile header measures 144px.
Skip links: "Go to navigation", "Go to flight search", "Go to footer".

### Cards
**`card-teaser`** — white, 1px `#dcdcdc`, 8px radius, blue-tinted shadow, image top, 18px/700 title, 14px body, arrow link at bottom; whole card is a link (hover → `#414e63`).
**`card-service-tile`** — `#f5f5f5`, same border/shadow, padding 20px, icon + 17.7px/700 title.
**`card-promo`** — white, 8px, padding 40px 48px, kicker + 46px/700 headline + arrow link, overlapping a photo.

### Footer
**`footer`** — white, `#05164d` text, link lists in 14px/700, search field ("Search the page").

## Design System Architecture

**Official sources.** Lufthansa publishes public brand guidelines on Frontify
([Lufthansa Brand Guidelines](https://frontify.lufthansa.com/d/jKOh3AHXtyml/en/guidelines)) covering Logo,
Color, Typeface, Typography, Visual imagery, Icons, 3D, Digital and Motion. Its "Digital" chapter states:
"there is an additional Corporate Design Guideline for digital applications … it also contains a pattern
library, applications, resources and downloads, and a selection of icons that have been optimized for
different sizes", linked as "Lufthansa Digital Guidelines" — that hub ([frontify.lufthansa.com/hub/46](https://frontify.lufthansa.com/hub/46))
requires a Lufthansa/agency login, so the pattern library and any token files are **not public**.

**Token architecture (observed).** The live site exposes only six root variables
(`--header-height: 122px`, `--sticky-header-nav-height`, `--container-offset: 8rem`,
`--desy-font-factor: 1.6`, two Swiper vars). Component styles reference a namespaced set inside the
web components: `var(--maui-font-family-headline)`, `var(--maui-effect-elevation-1)`,
`var(--maui-effect-elevation-2)`. Custom elements such as `<maui-navigation-link>` and
`<maui-link-mimic>` render the links — i.e. the site is built from a **"maui"** web-component library
with scoped tokens, while colours themselves are hard-coded per component (`#05164d`, `#52627c`, `#dcdcdc`).
Brand-level colour definitions are the official Pantone/RGB/HEX table: LH Deep Blue `#05164D`,
LH Yellow `#FFAD00`, LH White `#FFFFFF`, plus secondary grey and silver.

**Theming.** One light theme on the web; inverse contexts (white text on deep blue in the header, on
photography) are handled per component. The guidelines' "Blue Breeze" gradient system defines
atmospheric blue surfaces (horizontal/vertical only).

**Type & spacing.** Headline sizes are fluid — computed values like 34.7981px at 1265px and 34.6854px
at 1280px wide, 28.1127px at 375px — scaled through `--desy-font-factor`. Line height 1.1× on headlines
and 1.5× on text (18/27, 14/21). The guidelines prescribe 105% (headline) and 120% (long text) line
spacing for communications.

**Component model (observed).** Search form (selectors, underlined inputs, swap, date picker, yellow
action), teaser carousel with arrow navigation (50×50 `#ebebeb` square buttons, 4px), service tiles,
promo stage, pill toggles, arrow links, header with flyout menus, consent manager (13px/700 uppercase
LufthansaHead buttons with 1.2px tracking).

**Accessibility.** Three skip links; `#0968f6` 0.2rem focus ring; hidden semantic headings ("Main
content", "Search the page") for screen readers; yellow carries deep-blue text, never white (the
guidelines forbid yellow as a font colour).

**Delivery.** Web components (maui-*) and global CSS in the AEM-rendered site; brand assets and fonts via
the Frontify portal's Downloads section; no public npm or Figma kit.

## Do's and Don'ts

### Do
- Use LH Deep Blue `#05164d` for header, headlines and text; white as the base.
- Use LH Yellow `#ffad00` only for the primary functional control, with `#05164d` text; hover `#ffbd32`.
- Pair LufthansaHead Bold headlines with Light sublines; set long text in LufthansaText.
- Use arrow links for secondary actions.
- Tint shadows with deep blue: `rgba(5,22,77,.1) 0 2px 4px`.
- Keep cards at 8px and buttons at 4px radius.

### Don't
- Don't place blue and yellow surfaces next to or on top of each other.
- Don't use yellow as a text colour, warning colour or decoration.
- Don't set long text in LufthansaHead or headlines in LufthansaText.
- Don't use more than one yellow element per view ("inflationary use of yellow").
- Don't use diagonal or radial blue gradients.

## Responsive Behavior

### Breakpoints
Measured at 1265px (desktop, with scrollbar) and 375px (mobile).

| Element | Desktop | Mobile |
|---|---|---|
| Header | 122px | 144px |
| Section headline | 34.7981px/300/38.2779px | 28.1127px/300/30.9239px |
| Body/link sizes | 18px, 14px | 18px, 14px |

### Touch Targets
Primary button 50px; carousel arrows 50×50px; input rows 39px plus 12px label.

### Collapsing Strategy
- Headline sizes scale fluidly with viewport (mobile set: 28.1127, 22.0845, 20.0563, 16.0282, 36.169px).
- Teaser carousel becomes a swipeable single-card row.

### Image Behavior

## Iteration Guide

1. Start with white canvas, a `#05164d` 122px header and a white, panel-less search row.
2. Add exactly one `#ffad00` button with deep-blue 18px/700 text.
3. Headlines: LufthansaHead 300 for sections, 700 for promotions; line height 1.1×.
4. Cards: 8px, 1px `#dcdcdc`, `rgba(5,22,77,.1)` shadow, arrow link footer.
5. Check the guideline rules (no blue/yellow adjacency, no yellow text).
6. Re-run `node web/scripts/verify-designs.mjs --slug=lufthansa` after edits.
