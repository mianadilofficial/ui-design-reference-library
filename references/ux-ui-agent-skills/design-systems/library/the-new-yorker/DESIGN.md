---
version: alpha
name: The New Yorker
category: "News & Publishing"
description: "The New Yorker's site is a white #ffffff page with #333333 / #000000 text: IrvinHeadingPro 400 display headlines (36px/40px homepage hero, 42px article h1), TNYAdobeCaslonPro 400 body and promo headlines (21px/31.5px, 22px/28px, 17px/24px summaries), NeutrafaceNewYorker bylines, Graphik 12–13px interface type, a small #0879bf Subscribe button that hovers to #07588b, #db3334 rubrics, 48px pill Listen buttons and black #000000 full-width feature units."

colors:
  primary: "#0879bf"
  primary-hover: "#07588b"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#333333"
  ink-strong: "#000000"
  ink-byline: "#121212"
  ink-muted: "#666666"
  ink-subtle: "#a2a2a2"
  rubric: "#db3334"
  surface-black: "#000000"
  surface-footer: "#121212"
  surface-cream: "#f6f4ef"
  surface-light: "#f5f5f5"
  on-dark: "#f5f5f5"
  hairline: "#e5e5e5"
  game-green: "#5cd687"
  game-blue: "#84c9ff"
  game-sky: "#a5e8fd"
  game-yellow: "#ffe17d"
  game-lilac: "#ede8f8"
  game-cream: "#ffefb9"

typography:
  headline-article:
    fontFamily: "IrvinHeadingPro, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 42px
    fontWeight: 400
    lineHeight: 46.6667px
  headline-article-mobile:
    fontFamily: "IrvinHeadingPro, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 32px
  headline-hero:
    fontFamily: "IrvinHeadingPro, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 40px
  section-heading:
    fontFamily: "IrvinHeadingPro, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 32px
  section-heading-mobile:
    fontFamily: "IrvinHeadingPro, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24px
  newsletter-heading:
    fontFamily: "TNYAdobeCaslonPro, \"Times New Roman\", Times, serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  list-heading:
    fontFamily: "TNYAdobeCaslonPro, \"Times New Roman\", Times, serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 36px
  headline-promo:
    fontFamily: "TNYAdobeCaslonPro, \"Times New Roman\", Times, serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: "TNYAdobeCaslonPro, \"Times New Roman\", Times, serif"
    fontSize: 21px
    fontWeight: 400
    lineHeight: 31.5px
  dek-hero:
    fontFamily: "TNYAdobeCaslonPro, \"Times New Roman\", Times, serif"
    fontSize: 21px
    fontWeight: 400
    lineHeight: 28px
  summary:
    fontFamily: "TNYAdobeCaslonPro, \"Times New Roman\", Times, serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 24px
  byline-hero:
    fontFamily: "NeutrafaceNewYorker, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 22.8571px
  byline:
    fontFamily: "NeutrafaceNewYorker, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 17.1429px
  rubric:
    fontFamily: "IrvinText, IrvinHeadingPro, Georgia, \"Times New Roman\", Times, serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  nav-link:
    fontFamily: "Graphik, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 15.24px
    letterSpacing: -0.15px
  button:
    fontFamily: "Graphik, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: -0.1625px
  button-subscribe:
    fontFamily: "Graphik, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 15.24px
    letterSpacing: -0.12px
  promo-banner:
    fontFamily: "Graphik, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: -0.1625px
  input:
    fontFamily: "Graphik, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.96px
    letterSpacing: -0.2px
  footer-link:
    fontFamily: "Graphik, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 23.94px
    letterSpacing: -0.175px
  legal:
    fontFamily: "Graphik, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 10px
    fontWeight: 500
    lineHeight: 12.7px
    letterSpacing: -0.125px

rounded:
  none: 0px
  hairline: 1px
  sm: 4px
  md: 8px
  lg: 16px
  listen: 48px

spacing:
  xxs: 4px
  xs: 8px
  sm: 16px
  md: 24px
  lg: 32px
  xl: 48px
  xxl: 64px

components:
  button-subscribe:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-subscribe}"
    rounded: "{rounded.hairline}"
    padding: 4px 8px
    height: 23px
  button-subscribe-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 48px
    border: "2px solid #0879bf"
  button-black:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 48px
    border: "2px solid #000000"
  button-listen:
    backgroundColor: transparent
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.listen}"
    padding: 0px 16px
    height: 48px
    border: "1px solid #e5e5e5"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 8px 12px
    height: 48px
    border: "1px solid #e5e5e5"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav-link}"
  nav-link-hover:
    textDecoration: underline
  masthead:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    height: 64px
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.headline-promo}"
  rubric-link:
    textColor: "{colors.rubric}"
    typography: "{typography.rubric}"
  card-game:
    backgroundColor: "{colors.game-green}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.lg}"
    padding: 24px
  feature-unit-dark:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.on-primary}"
    typography: "{typography.headline-hero}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-subtle}"
    typography: "{typography.footer-link}"
---

## Overview

The New Yorker's website keeps the magazine's typographic personality intact. Under an ad slot, the capture shows a slim 64px white masthead: the stacked "THE / NEW YORKER" wordmark centred, and to its right **Newsletter**, **Sign In**, a tiny blue **Subscribe** button and a search icon. The homepage then opens on a split hero: on the left, a centred headline in the magazine's own display face — **IrvinHeadingPro** (`{typography.headline-hero}` 36px/40px), which renders as capitals in the capture ("WHY IS ILLNESS SO HARD TO WRITE ABOUT?") — over a centred Caslon dek in `{colors.ink}` (#333333), a byline in **NeutrafaceNewYorker**, and a pill-shaped **Listen** button; on the right, a full-height commissioned illustration (blue cross-hatched ink drawing) filling half the viewport.

A thin-ruled row of section links (The Latest, News, Books & Culture, Fiction & Poetry, Humor & Cartoons, Magazine, Puzzles & Games, Video, Podcasts, Goings On, Shop, Festival) follows, then a one-line subscription banner with a small cartoon spot, then "TODAY'S MIX" — a four-up grid of photo promos with Caslon headlines (22px/28px), Caslon summaries (17px/24px) and bold Neutraface bylines ("By David Remnick").

Further down, full-width **black feature units** (1152×648px, `{colors.surface-black}`) present a single story over a full-bleed image: small IrvinText rubric in #f5f5f5 ("PERSONAL HISTORY"), white IrvinHeading headline, Caslon dek, byline and a white-outlined Listen pill. Puzzles appear as pastel cards with 16px radius.

The tone is literary and quiet: white space, serif reading type, illustration and photography as art, color only in the small blue Subscribe and the red rubrics.

**Key Characteristics:**
- Four in-house/licensed faces with strict roles: Irvin (display + rubrics), Adobe Caslon (reading), Neutraface (bylines), Graphik (interface).
- Display headlines in IrvinHeadingPro weight 400 — never bold.
- Reading text in TNYAdobeCaslonPro 400 at 21px/31.5px (body), 17px/24px (summaries), colored #333333.
- Small, quiet blue `{colors.primary}` (#0879bf) Subscribe — 23px tall, 1px radius — hovering to #07588b.
- Red rubric `{colors.rubric}` (#db3334) labels above article headlines.
- Interface type is Graphik 12–14px weight 500 with slight negative tracking (-0.0125em).
- Full-bleed black feature units alternate with white grids down the homepage.

## Colors

> Source: measured on https://www.newyorker.com/ and a magazine article page, desktop 1280px.

### Brand & Action
- **New Yorker Blue** (`{colors.primary}` — #0879bf): Subscribe button in the masthead; "See Offers" paywall button on articles; links in subscription modules.
- **Blue Hover** (`{colors.primary-hover}` — #07588b): Measured hover background of the masthead Subscribe button.
- **On Primary** (`{colors.on-primary}` — #ffffff): Text on blue and black buttons and on dark feature units.
- **Rubric Red** (`{colors.rubric}` — #db3334): Rubric/section labels above article headlines ("A Critic at Large").

### Surface
- **Canvas** (`{colors.canvas}` — #ffffff): Page, masthead, promo grids.
- **Surface Black** (`{colors.surface-black}` — #000000): Full-width feature units ("Personal History", "The Political Scene", "Annals of Money", documentary and podcast units) — the largest background area by measured area.
- **Surface Footer** (`{colors.surface-footer}` — #121212): The 1280px-wide "Sections" footer band.
- **Surface Cream** (`{colors.surface-cream}` — #f6f4ef): A warm off-white module background (third-largest area).
- **Surface Light** (`{colors.surface-light}` — #f5f5f5): Light grey module background on article pages.

### Games palette (puzzle cards)
#5cd687 green (Catalogues), #84c9ff blue (The Crossword), #a5e8fd sky (The Mini), #ffe17d yellow, #ede8f8 lilac, #ffefb9 cream.

### Text
- **Ink** (`{colors.ink}` — #333333): The most-read color — summaries and decks.
- **Ink Strong** (`{colors.ink-strong}` — #000000): Headlines, nav, button labels.
- **Ink Byline** (`{colors.ink-byline}` — #121212): Bylines ("By Mosab Abu Toha").
- **Ink Muted** (`{colors.ink-muted}` — #666666): Input text.
- **Ink Subtle** (`{colors.ink-subtle}` — #a2a2a2): Footer links, legal text.
- **On Dark** (`{colors.on-dark}` — #f5f5f5): Rubrics inside black feature units.

### Lines
- **Hairline** (`{colors.hairline}` — #e5e5e5): The most common border color — section-nav rules, the Listen pill outline, input borders.

## Typography

### Font Family
Five self-hosted families render on the measured pages:
- **IrvinHeadingPro** (400) — display headlines; stack `IrvinHeadingPro, "Helvetica Neue", Helvetica, Arial, sans-serif`.
- **IrvinText** (400) — rubrics; stack `IrvinText, IrvinHeadingPro, Georgia, "Times New Roman", Times, serif`.
- **TNYAdobeCaslonPro** (400, 400 italic) — reading text and promo headlines; stack `TNYAdobeCaslonPro, "Times New Roman", Times, serif`. The most-used family (≈7,800 characters on the homepage).
- **NeutrafaceNewYorker** (600; 400 computed on the hero byline) — bylines.
- **Graphik** (400, 500 and italics) — interface.

### Hierarchy

| Token | Family | Size / Line | Weight | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.headline-article}` | IrvinHeadingPro | 42px / 46.6667px | 400 | normal | Article h1 (desktop) |
| `{typography.headline-article-mobile}` | IrvinHeadingPro | 30px / 32px | 400 | normal | Article h1 at 390px |
| `{typography.newsletter-heading}` | TNYAdobeCaslonPro | 40px / 48px | 400 | normal | Newsletter sign-up heading |
| `{typography.headline-hero}` | IrvinHeadingPro | 36px / 40px | 400 | normal | Homepage hero + dark feature units |
| `{typography.list-heading}` | TNYAdobeCaslonPro | 32px / 36px | 400 | normal | "New Yorker Favorites" list heading |
| `{typography.section-heading}` | IrvinHeadingPro | 28px / 32px | 400 | normal | "TODAY'S MIX" |
| `{typography.section-heading-mobile}` | IrvinHeadingPro | 22px / 24px | 400 | normal | Section heading at 390px |
| `{typography.headline-promo}` | TNYAdobeCaslonPro | 22px / 28px | 400 | normal | Grid promo headlines |
| `{typography.body}` | TNYAdobeCaslonPro | 21px / 31.5px | 400 | normal | Body base / paragraphs |
| `{typography.dek-hero}` | TNYAdobeCaslonPro | 21px / 28px | 400 | normal | Hero dek |
| `{typography.byline-hero}` | NeutrafaceNewYorker | 20px / 22.8571px | 400 | normal | Hero author name |
| `{typography.summary}` | TNYAdobeCaslonPro | 17px / 24px | 400 | normal | Promo summaries |
| `{typography.input}` | Graphik | 16px / 20.96px | 400 | -0.2px | Newsletter email input |
| `{typography.byline}` | NeutrafaceNewYorker | 15px / 17.1429px | 600 | normal | "By …" bylines |
| `{typography.footer-link}` | Graphik | 14px / 23.94px | 500 | -0.175px | Footer section links |
| `{typography.button}` | Graphik | 13px / 16px | 500 | -0.1625px | Listen, See Offers, Sign Up |
| `{typography.promo-banner}` | Graphik | 13px / 16px | 400 | -0.1625px | Subscription banner line |
| `{typography.nav-link}` | Graphik | 12px / 15.24px | 500 | -0.15px | Masthead + section nav |
| `{typography.button-subscribe}` | Graphik | 12px / 15.24px | 500 | -0.12px | Masthead Subscribe |
| `{typography.rubric}` | IrvinText | 12px / 16px | 400 | normal | Rubrics ("Personal History") |
| `{typography.legal}` | Graphik | 10px / 12.7px | 500 | -0.125px | Copyright line |

### Principles
- **Every serif and display weight is 400.** Emphasis comes from face changes (Irvin vs Caslon), not from weight.
- **Graphik tracking is -0.0125em** — the root variable `--tracking-utility-button-core: -0.0125em` matches every measured Graphik size (13px → -0.1625px, 12px → -0.15px, 14px → -0.175px, 16px → -0.2px).
- **Bylines are the only bold** — NeutrafaceNewYorker 600.
- **Generous leading on reading text** — 1.5 for body (21/31.5), ~1.41 for summaries (17/24); root variable `--size-discovery-description-core: 17px/1.411764705882353em`.

### Note on Font Substitutes
Irvin, TNYAdobeCaslonPro and NeutrafaceNewYorker are custom/licensed cuts served under New Yorker-specific names; Graphik is commercial. The site's own fallbacks are Helvetica Neue / Helvetica / Arial for Irvin and Neutraface, Times New Roman / Times for Caslon, and Georgia for IrvinText. No official open substitute is named; none is prescribed here.

## Layout

### Spacing System
- **Measured gaps:** 8px (most common), 32px, 16px. **Paddings:** 64px (most common), 32px, 16px, 24px, 48px, 8px.
- **Tokens:** `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 16px · `{spacing.md}` 24px · `{spacing.lg}` 32px · `{spacing.xl}` 48px · `{spacing.xxl}` 64px.

### Grid & Container
- Hero: 50/50 split — 500px text column centred on the left half, illustration filling the right half edge to edge.
- Content container 1152px (the black feature units and the "Today's Mix" grid share this width); the footer band is full 1280px.
- "Today's Mix": four columns of 264px promos separated by 32px gaps.
- Article: headline column 500px; text measured at 496–560px widths.

### Whitespace Philosophy
Spacious and symmetric: 64px is the dominant padding; headlines and decks on hero and feature units are centred. Thin #e5e5e5 rules separate the masthead, section nav and subscription banner.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | All editorial modules |
| 1 | `rgba(0, 0, 0, 0.1) 0px 2px 4px 0px` | One measured element on the article page (a floating module) |
| Inverted | `{colors.surface-black}` units | Contrast blocks, not elevation |

The homepage measures no box-shadows. Depth is created by full-bleed illustration/photography and the alternation of white grids with black feature units.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Images, inputs, black Sign Up button |
| `{rounded.hairline}` | 1px | Masthead Subscribe |
| `{rounded.sm}` | 4px | "See Offers" button; the most frequent radius on the homepage |
| `{rounded.md}` | 8px | Small rounded modules |
| `{rounded.lg}` | 16px | Puzzle/game cards |
| `{rounded.listen}` | 48px | Listen pill (48px tall, so it reads fully round-ended) |

### Imagery
Commissioned illustration is the signature — the hero is a hand-drawn ink illustration rather than a photo. The black feature units use full-bleed imagery with organic cut-out shapes inside the image itself (not CSS clip-paths). Promo photos are rectangular with a small headphone "listen" badge in the bottom-right corner.

## Components

### Buttons

**`button-subscribe`** — masthead Subscribe.
- Background `{colors.primary}` #0879bf, text #ffffff, Graphik 12px/15.24px 500 (-0.12px), padding 4px 8px, height 23px, radius 1px.
- **Hover** (`button-subscribe-hover`): background #07588b.

**`button-primary`** — "See Offers" (article paywall).
- Background #0879bf, 2px solid #0879bf border, text #ffffff, Graphik 13px/16px 500, padding 0px 16px, height 48px, radius 4px.

**`button-black`** — "SIGN UP" (newsletter).
- Background #000000, 2px solid #000000, text #ffffff, Graphik 13px/16px 500, padding 0px 16px, height 48px, radius 0px.

**`button-listen`** — audio pill.
- Transparent, 1px solid #e5e5e5 outline, headphone icon + "Listen" in Graphik 13px/16px 500, padding 0px 16px, height 48px, radius 48px. On black feature units the label is white.

### Inputs

**`text-input`** — newsletter email.
- White, text #666666, Graphik 16px/20.96px (-0.2px), padding 8px 12px, height 48px, 1px solid #e5e5e5, radius 0px.

### Navigation
- **`masthead`** — 64px white bar, centred wordmark, Graphik 12px/500 utility links right.
- **`nav-link`** — Graphik 12px/15.24px 500, black; **hover** adds underline (Newsletter/Sign In also shift to #333333).

### Promos
Photo (rectangular, listen badge) → `{typography.headline-promo}` black → `{typography.summary}` #333333 → `{typography.byline}` #121212.

### Rubrics
**`rubric-link`** — IrvinText 12px/16px in #db3334 above article headlines; #f5f5f5 on black units.

### Feature unit
**`feature-unit-dark`** — 1152×648px black block, full-bleed image, centred rubric, white IrvinHeading 36px/40px headline, Caslon dek, byline, outlined Listen pill.

### Cards
**`card-game`** — puzzles row: 244px wide, 326px tall, radius 16px, padding 24px, pastel fill from the games palette.

### Footer
**`footer`** — #121212 full-width band, "Sections" list in Graphik 14px/23.94px 500 #a2a2a2; legal line Graphik 10px/12.7px 500 #a2a2a2.

## Design System Architecture

The New Yorker publishes **no public design system documentation**. Searches for an official New Yorker or Condé Nast design system, brand guidelines and type history on newyorker.com returned only third-party coverage and DESIGN.md reconstructions, which were not used. What follows is the de-facto system measurable on the live site (https://www.newyorker.com/).

### Token architecture (measured)
The page exposes ~336 brand CSS custom properties on `:root` (excluding the consent-manager `--fides-*` set). Type tokens are organised by **context → role → variant**, with four parallel properties per token:
- `--size-{context}-{role}-{variant}` (shorthand size/line-height), e.g. `--size-consumption-editorial-body-core: 21px/1.5em`, `--size-discovery-hed-core-primary: 22px/1.2727272727272727em`, `--size-navigation-text-primary: 12px/1.33em`.
- `--font-…` (full font shorthand), e.g. `--font-consumption-editorial-hed-standard: normal 400 var(--size-consumption-editorial-hed-standard) IrvinHeadingPro,Helvetica Neue,Helvetica,Arial,sans-serif`.
- `--text-case-…`, e.g. `--text-case-commerce-call-to-action: uppercase`.
- `--tracking-…`, e.g. `--tracking-utility-button-core: -0.0125em`.
Contexts present: `consumption` (article reading), `discovery` (homepage/listing promos), `foundation`, `global-editorial`, `navigation`, `utility` (buttons, inputs), `commerce`, plus `--size-fluid-headline-*` tokens using `clamp()` with container-query units (e.g. `clamp(1.75rem, 3cqw, 2.25rem)/1.11em`).

### Theming
A `theme-inverted` class was measured on a black list module (`ListWrapper-… theme-inverted`), so dark modules are switched per component by class. No site-wide dark mode was observed.

### Type & spacing systems
Type sizes come from the token set above (e.g. body 21px/1.5, description 17px/1.41, hed-standard 30px/1.07, display-large 63px/1). Spacing is not exposed as variables; measured spacing clusters at 8/16/24/32/48/64px. Components are styled-components (`BaseWrap-sc-SkJtP`, `FocusUnitWrapper-…`, `RowWrapper-…`).

### Component model
Observable components: masthead, section nav, subscription banner, hero split, promo grid ("Today's Mix"), focus/feature unit, list module, puzzle cards, newsletter sign-up, paywall offer, footer "Sections" band. No official inventory is published.

### Accessibility
No published accessibility standard was found. Measured: a "Skip to main content" link exists; summary text #333333 on #ffffff and bylines #121212 on #ffffff are high-contrast.

### Delivery
Not published. Fonts are self-hosted @font-faces (Adobe Caslon/TNYAdobeCaslonPro, Graphik, Irvin Heading/IrvinHeadingPro, Irvin Text/IrvinText, Neutra Face/NeutrafaceNewYorker).

## Do's and Don'ts

### Do
- Use IrvinHeadingPro 400 for display headlines and section headings; TNYAdobeCaslonPro 400 for everything people read.
- Color summaries and decks #333333; keep headlines #000000.
- Put the byline in NeutrafaceNewYorker 600, prefixed "By".
- Keep Subscribe small and blue (#0879bf → #07588b on hover).
- Use 48px pill Listen buttons with a #e5e5e5 outline on audio-enabled stories.
- Alternate white promo grids with black full-width feature units.
- Lead with commissioned illustration where possible.

### Don't
- Don't bold headlines or body; weight 400 throughout except bylines.
- Don't add drop shadows or rounded promo cards (only puzzle cards are rounded).
- Don't set interface labels in serif or headlines in Graphik.
- Don't use the rubric red for buttons.
- Don't track Graphik positively — the system uses -0.0125em.

## Responsive Behavior

### Measured at 390px

| Element | Desktop | 390px |
|---|---|---|
| Article h1 | 42px / 46.6667px | 30px / 32px |
| Section heading ("Today's Mix") | 28px / 32px | 22px / 24px |
| Body | 21px / 31.5px | 21px / 31.5px |
| Most-used size | 17px | 17px |

Mobile font sizes measured: 17px, 22px, 14px, 13px, 21px, 12px, 10px, 28px, 18px, 20px, 16px. The mobile masthead holds an "Open Navigation Menu" control and Subscribe.

### Collapsing Strategy
Text columns measure 342px at 390px (article h1, body), i.e. a single column. The site also defines fluid headline tokens (`--size-fluid-headline-lg: clamp(1.75rem, 3.3vw, 2.25rem)/1.11em`) that scale between 28px and 36px.

### Touch Targets
Listen, See Offers, Sign Up and the input are 48px tall; the masthead Subscribe is 23px.

## Iteration Guide

1. White canvas, #000000 headlines, #333333 reading text.
2. Assign faces by role: Irvin = display/rubric, Caslon = reading, Neutraface = byline, Graphik = UI.
3. Keep every weight at 400 except bylines (600) and Graphik UI (500).
4. Apply -0.0125em tracking to Graphik.
5. One small blue Subscribe; black for secondary buttons.
6. Alternate white grids with black 1152px feature units.
7. Use the token naming pattern `--size-/--font-/--tracking-/--text-case-{context}-{role}-{variant}` when extending.
8. Re-run `node web/scripts/verify-designs.mjs --slug=the-new-yorker`.
