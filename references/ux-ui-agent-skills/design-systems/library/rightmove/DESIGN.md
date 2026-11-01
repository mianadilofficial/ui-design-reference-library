---
version: alpha
name: Rightmove
category: "Real Estate & PropTech"
description: "Rightmove (rightmove.co.uk), the UK property portal, pairs a deep navy #000433 with an electric mint-teal #2cdebe / #00deb6 accent on a white #ffffff page and #f2f3f4 footer. Everything is set in Dalton Maag's Effra at 400/500 with a +0.1px letter-spacing (hero 45px/500, headings 24px and 20px/500, body 16px/24px in #4e516b), controls are 8px-radius rectangles 48px tall, content cards are 16px-radius, and the hero search sits in a translucent navy 24px-radius panel over dusk aerial photography."

colors:
  primary: "#2cdebe"
  primary-hover: "#55e1c9"
  on-primary: "#000433"
  brand-teal: "#00deb6"
  brand-teal-bright: "#00f5c9"
  navy: "#000433"
  navy-panel: "#000433d1"
  navy-tint: "#0004330a"
  canvas: "#ffffff"
  surface-grey: "#f2f3f4"
  surface-light: "#f5f6f7"
  tab-hover: "#9bb9f714"
  ink: "#4e516b"
  ink-results: "#4f5064"
  ink-footer: "#66636e"
  ink-legal: "#53535f"
  ink-subtle: "#717184"
  ink-tab-inactive: "#bdbec5"
  link-teal: "#107a84"
  link-teal-alt: "#11828d"
  border: "#dadbdd"
  border-soft: "#dedee2"
  border-control: "#c3c4c9"
  border-strong: "#888a9a"
  footer-rule: "#707389"
  success-green: "#0c8852"
  success-deep: "#007054"
  error: "#de0000"

typography:
  display-hero:
    fontFamily: "Effra, Arial, sans-serif"
    fontSize: 45px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: 0.1px
  display-sub:
    fontFamily: "Effra, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: 0.1px
  display-hero-mobile:
    fontFamily: "Effra, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: 0.1px
  heading-lg:
    fontFamily: "Effra, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: 0.1px
  heading-md:
    fontFamily: "Effra, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: 0.1px
  body:
    fontFamily: "Effra, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.1px
  body-strong:
    fontFamily: "Effra, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.1px
  button:
    fontFamily: "Effra, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.016px
  results-body:
    fontFamily: "Effra, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
  small:
    fontFamily: "Effra, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  legal:
    fontFamily: "Effra, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400

rounded:
  xs: 4px
  control: 8px
  card: 16px
  panel: 24px
  round: 50px
  pill: 9999px

spacing:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  2xl: 32px
  input-icon: 48px
  section: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.control}"
    padding: 12px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-sign-in:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.navy}"
    typography: "{typography.button}"
    rounded: "{rounded.control}"
    height: 40px
    border: "2px solid #00deb6"
  button-sign-in-hover:
    backgroundColor: "{colors.brand-teal}"
  button-outline-navy:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.navy}"
    typography: "{typography.button}"
    rounded: "{rounded.control}"
    height: 48px
    border: "2px solid #000433"
  button-outline-navy-hover:
    backgroundColor: "{colors.navy-tint}"
  button-outline-teal:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.navy}"
    typography: "{typography.button}"
    rounded: "{rounded.control}"
    height: 48px
    border: "2px solid #00deb6"
  button-outline-teal-hover:
    backgroundColor: "{colors.brand-teal-bright}"
    borderColor: "{colors.brand-teal-bright}"
  button-dark:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.control}"
    height: 48px
  search-panel:
    backgroundColor: "{colors.navy-panel}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.panel}"
    padding: 32px 24px 24px
  search-tab:
    textColor: "{colors.ink-tab-inactive}"
    typography: "{typography.heading-md}"
    rounded: 16px 16px 0px 0px
    height: 56px
  search-tab-hover:
    backgroundColor: "{colors.tab-hover}"
    textColor: "{colors.canvas}"
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.navy}"
    typography: "{typography.body}"
    rounded: "{rounded.control}"
    padding: 12px 12px 12px 48px
    height: 48px
  promo-band:
    backgroundColor: "{colors.navy-tint}"
    textColor: "{colors.navy}"
    rounded: "{rounded.card}"
  content-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.navy}"
    typography: "{typography.body}"
    rounded: "{rounded.card}"
    padding: 0px
    height: 344px
  property-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-results}"
    typography: "{typography.results-body}"
    rounded: "{rounded.control}"
    border: "1px solid #dadbdd"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.navy}"
    typography: "{typography.body-strong}"
    height: 50px
  nav-link-hover:
    backgroundColor: "{colors.surface-grey}"
    rounded: "{rounded.control}"
    textDecoration: underline
  link:
    textColor: "{colors.navy}"
    typography: "{typography.body-strong}"
    textDecoration: underline
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink-footer}"
    typography: "{typography.body}"
---

## Overview

Rightmove's homepage (`https://www.rightmove.co.uk/`, measured October 2026) is a compact, utilitarian portal page
with one big emotional moment. A 50px white header carries the lowercase "rightmove" wordmark with its small teal
roof/house glyph at left and a row of navy navigation links (Buy, Rent, House Prices, Mortgages, Find Agent,
Commercial, Inspire, Overseas) ending in a white "Sign in" button outlined in 2px teal `#00deb6`.

Below sits the hero: a rounded photographic card showing a UK town at dusk from above, with the line
"**believe** in finding it" — "believe" picked out in mint-teal `#2cdebe`, the rest white — in Effra 45px/500
(`{typography.display-hero}`), and "with the UK's largest choice of homes" at 32px/500. Over the photo floats a
translucent navy search panel (`#000433d1`, 24px radius) with Buy / Rent / Sold tabs, a Classic / AI Search pill
toggle, a white 48px search field ("Bath, NW3, or Leeds station") and a mint-teal "Search" button.

Below the hero the page settles into a calm white grid: a light-tinted "Stay organised" band with a navy outlined
button; three editorial photo cards ("Free home valuation", first-time buyer scheme, homebuyer guides) with 20px/500
navy titles, grey body and underlined navy links; three tinted service tiles with teal-mint icon squares; then a
light-grey `#f2f3f4` footer with six columns, app-store badges and a navy "Rightmove Plus" button.

**Key Characteristics:**
- Two-colour brand: deep navy `#000433` (text, dark buttons, panel) and mint-teal (`#2cdebe` fill, `#00deb6` outlines).
- Effra everywhere, only weights 400 and 500, with a consistent +0.1px letter-spacing.
- Controls are rectangles with 8px radius; content cards 16px; the hero search panel 24px.
- Grey-violet body text (`#4e516b`) rather than black; navy for headings.
- Flat by default: no box-shadows on the homepage; depth comes from the photo + translucent navy panel.
- Underlined links in navy for "Take a look"-style calls to action.

## Colors

> **Sources:** homepage extraction and `https://www.rightmove.co.uk/property-for-sale/London.html` (search results),
> both measured with the extractor; type colours confirmed with a Playwright probe (see SOURCES.json `_probes`).

### Brand
- **Mint Teal** (`{colors.primary}` — `#2cdebe`): fill of the primary "Search" button and the "believe" highlight.
- **Mint Teal Hover** (`{colors.primary-hover}` — `#55e1c9`): measured hover fill of "Search" (computed as `color(srgb 0.331 0.882 0.786)`; `#55e1c9` is the matching value in the stylesheet).
- **Brand Teal** (`{colors.brand-teal}` — `#00deb6`): 2px outline of "Sign in" and of teal outline buttons; also the hover fill of "Sign in".
- **Brand Teal Bright** (`{colors.brand-teal-bright}` — `#00f5c9`): hover fill + border of teal outline buttons ("Get a Mortgage in Principle").
- **Navy** (`{colors.navy}` — `#000433`): headings, button labels, dark buttons ("Filters", "Rightmove Plus"); also `--background-gradient-start/end: rgb(0, 4, 51)`.
- **On Primary** (`{colors.on-primary}` — `#000433`): label colour on mint teal (navy, not white).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background.
- **Surface Grey** (`{colors.surface-grey}` — `#f2f3f4`): footer background and nav-link hover fill (largest background area on the homepage because of the tall footer).
- **Surface Light** (`{colors.surface-light}` — `#f5f6f7`).
- **Navy Tint** (`{colors.navy-tint}` — `#0004330a`): 4% navy wash of the "Stay organised" band and service tiles; also hover of white buttons.
- **Navy Panel** (`{colors.navy-panel}` — `#000433d1`): 82% navy search panel over the hero photo.
- **Tab Hover** (`{colors.tab-hover}` — `#9bb9f714`): hover wash of hero search tabs (`rgba(155, 185, 247, 0.08)`).

### Text
- **Ink** (`{colors.ink}` — `#4e516b`): body paragraphs on the homepage ("Save properties, create alerts…", card descriptions).
- **Ink Results** (`{colors.ink-results}` — `#4f5064`): the most-read text colour on the search-results page.
- **Ink Footer** (`{colors.ink-footer}` — `#66636e`): footer link text.
- **Ink Legal** (`{colors.ink-legal}` — `#53535f`): copyright line and `<body>` computed colour.
- **Ink Subtle** (`{colors.ink-subtle}` — `#717184`): mega-menu link text.
- **Ink Tab Inactive** (`{colors.ink-tab-inactive}` — `#bdbec5`): inactive Rent/Sold tabs on the navy panel.
- **Link Teal** (`{colors.link-teal}` — `#107a84`) / (`{colors.link-teal-alt}` — `#11828d`): utility links ("Map view", cookie links).

### Lines
- **Border** (`{colors.border}` — `#dadbdd`): 1px property-card outline.
- **Border Soft** (`{colors.border-soft}` — `#dedee2`): 1px outline of side-panel cards.
- **Border Control** (`{colors.border-control}` — `#c3c4c9`): filter control borders on search results.
- **Border Strong** (`{colors.border-strong}` — `#888a9a`): 1px outline of grey link tiles ("See properties to rent in London").
- **Footer Rule** (`{colors.footer-rule}` — `#707389`): the line along the top of the footer.

### Semantic (from stylesheet)
- **Success Green** (`{colors.success-green}` — `#0c8852`) and **Success Deep** (`{colors.success-deep}` — `#007054`): measured backgrounds on the results page and in focus/validation rings (`0 0 0 1px #007054`).
- **Error** (`{colors.error}` — `#de0000`): `0 0 0 1px #de0000` validation ring in the stylesheet.

## Typography

### Font Family
**Effra** is the only typeface (fonts loaded: Effra 400 and 500; `Effra-Regular` and `Effra-Medium` family names are
also used in the header mega-menu). Effra is a commercial Dalton Maag family ("Designed and developed 2008–2024")
licensed per desktop / web / app use ([daltonmaag.com](https://www.daltonmaag.com/font-library/effra.html)).

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.display-hero}` | 45px | 500 | 48px | 0.1px | Hero h1 "believe in finding it" |
| `{typography.display-sub}` | 32px | 500 | 40px | 0.1px | Hero h2 |
| `{typography.display-hero-mobile}` | 32px | 500 | 40px | 0.1px | Hero h1 at 390px |
| `{typography.heading-lg}` | 24px | 500 | 32px | 0.1px | Band title "Stay organised…" |
| `{typography.heading-md}` | 20px | 500 | 28px | 0.1px | Card titles, hero search tabs, mobile h2 |
| `{typography.body-strong}` | 16px | 500 | 24px | 0.1px | Card link labels, panel labels, nav |
| `{typography.body}` | 16px | 400 | 24px | 0.1px | Body paragraphs |
| `{typography.button}` | 16px | 500 | 24px | 0.016px | Button labels |
| `{typography.results-body}` | 15px | 400 | — | — | Property descriptions on search results |
| `{typography.small}` | 14px | 400 | 20px | — | Footer utility links |
| `{typography.legal}` | 14px | 400 | — | — | Copyright line |

The `+0.1px` tracking is applied on almost all Effra text at 14–45px (letter-spacing table: 16px/0.1px, 20px/0.1px,
24px/0.1px, 32px/0.1px, 45px/0.1px). Fields marked "—" were measured as `normal` and are omitted from the tokens.

### Principles
- Medium (500) for every heading and label; regular (400) for reading text. A 700 weight appears only in a few inline strongs.
- Headings are navy, body text is grey-violet: hierarchy comes from colour as much as from size.
- Sentence case everywhere; the wordmark itself is lowercase.

### Note on Font Substitutes
Effra is commercial. The site's own fallback stack is `Arial, sans-serif` — use it verbatim when Effra is not licensed.

## Layout

### Spacing System
- **Measured paddings (homepage):** 8px, 16px, 12px, 24px, 64px, 20px, 4px. Search results: 8px, 12px, 16px, 15px.
- **Measured gaps:** 16px, 12px, 32px, 24px, 8px, 64px.
- Tokens: `{spacing.xs}` 4 · `{spacing.sm}` 8 · `{spacing.md}` 12 · `{spacing.lg}` 16 · `{spacing.xl}` 24 · `{spacing.2xl}` 32 · `{spacing.input-icon}` 48 · `{spacing.section}` 64.
- The 4/8px rhythm is consistent; 48px left padding in the search input makes room for the magnifier icon.

### Grid & Container
- In the 1280px capture the header, hero, band and card rows all share the same left/right inset.
- Editorial cards and service tiles form 3-column rows with equal gutters.
- The footer runs full-bleed grey with a 6-column link grid (app badges, Resources, Search, Locations, Rightmove, Professional).
- Search results: a single listing column of property cards plus a right-hand column of 300px promo cards.

### Whitespace Philosophy
Sections are separated by roughly equal white gaps; within cards spacing is tight. The page is short (2039px
scroll height at 1280px) — Rightmove sends users into search quickly rather than scrolling a long marketing story.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | All homepage surfaces (no box-shadows measured) |
| Panel | `#000433d1` translucent navy over photography | Hero search panel |
| Tint | `#0004330a` 4% navy | Bands and service tiles |
| Results card | `rgba(0, 0, 0, 0.3) 0px 3px 3px -3px` | Search-results controls (25 occurrences) |
| Raised | `0 4px 24px rgba(0,4,51,.15)` (stylesheet) | Floating panels / dropdowns |
| Focus | `0 0 0 4px #00deb6` (stylesheet) | Teal focus ring |

Depth is mostly colour-based: tinted bands and a translucent navy panel, not shadows.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | Side-panel promo cards on results |
| `{rounded.control}` | 8px | Buttons, inputs, property cards, nav hover pill |
| `{rounded.card}` | 16px | Editorial cards, bands, hero image; tabs use `16px 16px 0px 0px` |
| `{rounded.panel}` | 24px | Hero search panel |
| `{rounded.round}` | 50px | Round icon buttons on results |
| `{rounded.pill}` | 9999px | Classic / AI Search toggle (measured 999px) |

No clip-paths or skewed shapes were measured. The brand glyph next to the wordmark is the only decorative shape.

## Components

### Buttons
**`button-primary`** — "Search": mint `#2cdebe`, navy label 16px, padding 12px 16px, 48px tall, 8px radius, 2px border in the same colour.
- Hover (measured): fill lightens to `#55e1c9`.

**`button-sign-in`** — white, navy label with a person icon, 2px `#00deb6` outline, 40px tall, 8px radius.
- Hover (measured): fill becomes `#00deb6`.

**`button-outline-navy`** — "Sign in or create an account": white, navy text, 2px navy border, 48px, 8px radius.
- Hover (measured): fill `rgba(0, 4, 51, 0.04)` (`#0004330a`).

**`button-outline-teal`** — "Get a Mortgage in Principle" (results page): white with `#00deb6` border.
- Hover (measured): fill and border `#00f5c9`.

**`button-dark`** — "Filters" (results page) / "Rightmove Plus" (footer): navy `#000433` fill, white text, 48px, 8px radius.
Hover measured as `color(srgb 0.0667 0.0804 0.2529)` — a slightly lighter navy.

### Hero Search
**`search-panel`** — `#000433d1`, 24px radius, padding 32px 24px 24px, 750px wide at 1280px.
**`search-tab`** — Buy / Rent / Sold, 20px/500, inactive `#bdbec5`, active white with an underline bar, 56px tall,
radius 16px 16px 0 0. Hover (measured): text and border → white, background `rgba(155, 185, 247, 0.08)`.
**`search-input`** — white, navy 16px/24px text, padding 12px 12px 12px 48px, 48px tall, 8px radius, magnifier icon at left.

### Cards
**`content-card`** — editorial card: white, 16px radius, padding 0, 344px tall; photo on top with 16px top corners,
then 20px/500 navy title, 16px grey body, underlined navy 16px/500 link ("Take a look").
**`promo-band`** — `#0004330a` fill, 16px radius, 24px/500 navy title, 16px grey sub-copy, outline-navy button right.
**`property-card`** (results page) — white, 8px radius, 1px `#dadbdd` border, 15px `#4f5064` description text.

### Navigation
**`nav`** — 50px white header; links 16px/500 navy. Hover (measured): background `#f2f3f4`, 8px radius, underline,
hit area grows from 19px to 43px tall.

### Links
**`link`** — navy 16px/500, underlined ("Get a free agent valuation", "Search now"). Utility links use teal `#107a84`.

### Footer
**`footer`** — `#f2f3f4`, 16px `#66636e` links, medium-weight navy column headings, bottom row of 14px navy utility
links separated by vertical rules, a grey "New updates" chip, social icons, and a 14px `#53535f` copyright line.

## Design System Architecture

Rightmove has **no public design system** site, token package or brand guideline that we could find.
Searches: "Rightmove design system Effra brand typeface", "Rightmove rebrand 2024 new brand identity 'believe in finding it' agency",
"Rightmove tech blog design system components frontend design tokens", "'Rightmove' 'design system' designer case study component library".
Official sources opened: the press release https://www.rightmove.co.uk/press-centre/?p=3973 says the current campaign
"is the next iteration of Rightmove's _Believe It_ brand platform which launched in 2023" and credits Neverland
(brand strategy & creative) and Wavemaker UK (media) — it gives no visual-identity specification. The typeface vendor page
https://www.daltonmaag.com/font-library/effra.html confirms Effra is a Dalton Maag family.

What is observable on the live site (the de-facto system):
- **Token architecture:** the homepage exposes almost no CSS custom properties (only `--background-gradient-start`
  and `--background-gradient-end`, both `rgb(0, 4, 51)`), so tokens are compiled into class styles rather than shipped as
  variables. The repeated values form a clear palette: navy `#000433` (628 stylesheet occurrences), white, mint
  `#2cdebe` (164), teal `#00deb6`, error `#de0000` / `#f08c8c`, and translucent navy / periwinkle washes
  (`#0004330a`, `#9bb9f714`).
- **Theming:** single light theme; the navy hero panel is the only inverted surface.
- **Type & spacing:** one family (Effra 400/500), +0.1px tracking, sizes 14/16/20/24/32/45px; spacing on a 4/8px rhythm.
- **Component model (observed):** primary mint button, teal and navy outline buttons, dark navy button, hero search
  panel with tabs and mode toggle, search input, editorial card, promo band, service tile with icon square,
  property card, filters bar, footer with link columns.
- **Accessibility:** no published rules; a "Skip to Content" button exists on the results page and the stylesheet
  defines a teal `0 0 0 4px #00deb6` focus ring and coloured validation rings.
- **Delivery:** not public.

## Do's and Don'ts

### Do
- Use navy `#000433` for headings, labels and dark buttons, and grey-violet `#4e516b` for body copy.
- Use mint `#2cdebe` for the single primary action (search) with a navy label.
- Outline secondary actions with 2px teal `#00deb6` or 2px navy borders.
- Keep buttons and inputs at 8px radius and 48px height (40px for header Sign in).
- Apply +0.1px letter-spacing to Effra text.
- Underline text links.

### Don't
- Don't put white text on mint teal; the label is navy.
- Don't add drop shadows to homepage cards.
- Don't use pure black for text.
- Don't use pill-shaped buttons (only the Classic/AI toggle is a pill).
- Don't use weights other than 400/500 for UI.

## Responsive Behavior

### Breakpoints
Measured at 1280px and 390px.

| Element | 1280px | 390px |
|---|---|---|
| Hero h1 | 45px / 48px | 32px / 40px |
| Hero h2 | 32px / 40px | 20px / 28px |
| Search button | 188px wide, 48px tall | 326px wide (full width), 48px tall |

### Touch Targets
Buttons and search input 48px tall; header Sign in 40px; nav links grow to 43px on hover.

### Collapsing Strategy

### Image Behavior
The hero photograph remains behind the navy panel with rounded corners; card photos keep 16px top corners.

## Iteration Guide

1. Start from white `{colors.canvas}`, headings in `{colors.navy}`, body in `{colors.ink}`.
2. One `button-primary` (mint, navy label) per search context; everything else outline or dark navy.
3. Type: `{typography.display-hero}` hero only; `{typography.heading-lg}` / `{typography.heading-md}` for sections and cards; `{typography.body}` for copy.
4. Radii: 8px controls, 16px cards, 24px for the one floating search panel.
5. Spacing on 4/8px; 48px control height.
6. Keep surfaces flat; use the 4% navy tint to group content.
