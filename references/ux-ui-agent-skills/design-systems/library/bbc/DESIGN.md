---
version: alpha
name: BBC
category: "News & Publishing"
description: "BBC.com news front: a white #ffffff page with #202224 ink, headlines and summaries set in the BBC's own BBC Reith Serif (28px/32px weight 500 lead headline with -0.56px tracking, 14px/18px summaries) and navigation, labels and buttons in BBC Reith Sans; square 0px corners everywhere, a solid black #000000 Register button that hovers to #3a3c3e, #e6e8ea nav-hover tiles, #545658 meta text and a #141618 dark video band."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  primary-hover: "#3a3c3e"
  canvas: "#ffffff"
  ink: "#202224"
  ink-strong: "#000000"
  ink-meta: "#545658"
  ink-faint: "#afb1b4"
  surface-ad: "#f6f6f6"
  surface-dark: "#141618"
  surface-subtle: "#e6e8ea"
  on-dark: "#e6e8ea"
  hairline: "#e6e8ea"
  border-avatar: "#d2d4d6"
  border-mid: "#8a8c8e"

typography:
  headline-article:
    fontFamily: "\"BBC Reith Serif\", BBCReithSerif-fallback, serif"
    fontSize: 38px
    fontWeight: 500
    lineHeight: 44px
    letterSpacing: -0.76px
  headline-article-mobile:
    fontFamily: "\"BBC Reith Serif\", BBCReithSerif-fallback, serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 34px
    letterSpacing: -0.56px
  headline-lead:
    fontFamily: "\"BBC Reith Serif\", BBCReithSerif-fallback, serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: -0.56px
  headline-lead-mobile:
    fontFamily: "\"BBC Reith Serif\", BBCReithSerif-fallback, serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: -0.48px
  headline-promo:
    fontFamily: "\"BBC Reith Serif\", BBCReithSerif-fallback, serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 22px
    letterSpacing: -0.36px
  headline-small:
    fontFamily: "\"BBC Reith Serif\", BBCReithSerif-fallback, serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: -0.28px
  body-article:
    fontFamily: "\"BBC Reith Serif\", BBCReithSerif-fallback, serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: -0.36px
  body-summary:
    fontFamily: "\"BBC Reith Serif\", BBCReithSerif-fallback, serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
  section-label:
    fontFamily: "\"BBC Reith Sans\", BBCReithSans-fallback, sans-serif"
    fontSize: 15px
    fontWeight: 800
    lineHeight: 20px
    letterSpacing: 0.75px
  button:
    fontFamily: "\"BBC Reith Sans\", BBCReithSans-fallback, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 18px
  nav-link:
    fontFamily: "\"BBC Reith Sans\", BBCReithSans-fallback, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18px
  nav-link-active:
    fontFamily: "\"BBC Reith Sans\", BBCReithSans-fallback, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
  meta:
    fontFamily: "\"BBC Reith Sans\", BBCReithSans-fallback, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: -0.12px
  footer-link:
    fontFamily: "\"BBC Reith Sans\", BBCReithSans-fallback, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px

rounded:
  none: 0px
  circle: 50%

spacing:
  xxs: 4px
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  xxl: 32px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    height: 34px
    border: "2px solid #000000"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    border: "2px solid #3a3c3e"
  button-ghost:
    backgroundColor: transparent
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    height: 34px
    border: 2px solid transparent
  button-ghost-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-secondary:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    height: 44px
  skip-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 12px
    height: 38px
    border: "2px solid #000000"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav-link}"
    padding: 12px 8px
    height: 42px
  nav-link-hover:
    backgroundColor: "{colors.surface-subtle}"
  masthead:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    height: 81px
  section-label:
    textColor: "{colors.ink}"
    typography: "{typography.section-label}"
    textTransform: uppercase
  link:
    textColor: "{colors.ink}"
    typography: "{typography.headline-promo}"
  promo-meta:
    textColor: "{colors.ink-meta}"
    typography: "{typography.meta}"
  video-band:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-dark}"
    padding: 24px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.footer-link}"
    padding: 0px 16px
    borderTop: "1px solid #e6e8ea"
---

## Overview

BBC.com is a newspaper front page rebuilt for the screen. The capture opens on a pure white `{colors.canvas}` (#ffffff) masthead: a hamburger-plus-search glyph on the left, the three black BBC blocks centred, and a black **Register** button with a quiet **Sign In** text button on the right. Directly under it runs a single horizontal row of section links (Home, News, Sport, Business, Technology, Health, Culture, Arts, Travel, Earth, Audio, Video, Live), the active one underlined with a black bar.

Below the masthead the page is a dense, three-column editorial grid. A large lead photograph sits in the centre column with its headline in `{typography.headline-lead}` (BBC Reith Serif 28px/32px, weight 500, -0.56px). Left and right columns stack smaller promos: a photograph (left column) or text-only items (right column), each a serif headline, a two-to-four-line serif summary and a tiny sans meta line ("37 mins ago | UK"). There are no cards, no shadows, no rounded corners — the structure is made entirely from whitespace, typographic weight and thin rules.

Full-width grey `{colors.surface-ad}` (#f6f6f6) slots break the page between editorial bands (advertising placeholders in the capture), and further down a near-black `{colors.surface-dark}` (#141618) "MUST WATCH" band flips the scheme for video. Section titles such as "ONLY FROM THE BBC" and "RECOMMENDED AUDIO" are set in heavy uppercase sans (`{typography.section-label}`, 15px, weight 800, +0.75px tracking) under a black rule.

The visual voice is calm authority: black, white and neutral greys, photography doing all the colour work, and two in-house typefaces — **BBC Reith Serif** for journalism, **BBC Reith Sans** for interface.

**Key Characteristics:**
- White `{colors.canvas}` page; body ink `{colors.ink}` (#202224), interface black `{colors.ink-strong}` (#000000).
- Serif for content (headlines, summaries, article body), sans for chrome (nav, buttons, labels, meta).
- Negative tracking on every serif headline and on article body: -2% of the font size (28px → -0.56px, 18px → -0.36px, 14px → -0.28px, 38px → -0.76px).
- Zero radius everywhere except circular avatars/icons (`{rounded.circle}` 50%).
- One filled button style: black `{colors.primary}`, hovering to `{colors.primary-hover}` (#3a3c3e).
- Hover on nav links is a solid `{colors.surface-subtle}` (#e6e8ea) tile, not an underline or color shift.
- Meta lines in `{colors.ink-meta}` (#545658) at 12px with a thin vertical divider between time and section.

## Colors

> Source: measured on https://www.bbc.com/ (homepage) and a news article page, desktop 1280px.

### Brand & Action
- **Primary / Black** (`{colors.primary}` — #000000): Register button fill and border, interface text in the masthead, nav links, footer links. The BBC blocks logo is also black on white.
- **On Primary** (`{colors.on-primary}` — #ffffff): Text on black buttons and on hovered ghost buttons.
- **Primary Hover** (`{colors.primary-hover}` — #3a3c3e): Measured hover state for both Register (fill + border) and Sign In (fill, text turns white).

### Surface
- **Canvas** (`{colors.canvas}` — #ffffff): The page and masthead background; covers the largest area of the page.
- **Surface Ad** (`{colors.surface-ad}` — #f6f6f6): Full-width neutral slots between bands (the second-largest area in the capture).
- **Surface Dark** (`{colors.surface-dark}` — #141618): The "MUST WATCH" video section — a 1280px-wide band with 24px top/bottom padding.
- **Surface Subtle** (`{colors.surface-subtle}` — #e6e8ea): Hover tile on nav links and the fill of the "BBC in other languages" button.

### Text
- **Ink** (`{colors.ink}` — #202224): The most-read text color — headlines, summaries, article body.
- **Ink Strong** (`{colors.ink-strong}` — #000000): Nav, masthead buttons, footer links.
- **Ink Meta** (`{colors.ink-meta}` — #545658): Timestamps and section tags under promos.
- **Ink Faint** (`{colors.ink-faint}` — #afb1b4): Low-emphasis text (measured among top text colors, used sparingly).
- **On Dark** (`{colors.on-dark}` — #e6e8ea): Headlines and labels inside the dark video band.

### Lines
- **Hairline** (`{colors.hairline}` — #e6e8ea): 1px top border of the footer's "Follow BBC on" row.
- **Border Avatar** (`{colors.border-avatar}` — #d2d4d6): Borders around circular (50%) elements.
- **Border Mid** (`{colors.border-mid}` — #8a8c8e): A mid-grey border measured on the article page.

### Semantic
No success/warning/error palette is exposed on the measured pages; none is declared here.

## Typography

### Font Family
BBC.com serves two in-house families, both loaded as web fonts:
- **BBC Reith Serif** (weights 400, 500 served) with a metric-matched local fallback `BBCReithSerif-fallback`, then `serif`.
- **BBC Reith Sans** (weights 400, 500, 700, 900 served; 800 is the computed weight of section labels) with `BBCReithSans-fallback`, then `sans-serif`.

The GEL Typography guideline states that "The BBC has its own typeface 'BBC Reith' which must be used on everything that we do", that the family consists of a serif, sans serif and condensed sans serif, and offers Latin and Cyrillic. The BBC's GEL article "Introducing Reith – the new face of the BBC" says the family was commissioned from type designers Dalton Maag, is named after founder John Reith, and is "a contemporary humanist typeface".

Character counts on the homepage: Reith Serif ≈ 12,664 characters vs Reith Sans ≈ 1,790 — the page is overwhelmingly serif.

### Hierarchy

| Token | Family | Size / Line | Weight | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.headline-article}` | Reith Serif | 38px / 44px | 500 | -0.76px | Article h1 (desktop) |
| `{typography.headline-article-mobile}` | Reith Serif | 28px / 34px | 500 | -0.56px | Article h1 at 390px |
| `{typography.headline-lead}` | Reith Serif | 28px / 32px | 500 | -0.56px | Homepage lead story |
| `{typography.headline-lead-mobile}` | Reith Serif | 24px / 28px | 500 | -0.48px | Lead story at 390px |
| `{typography.headline-promo}` | Reith Serif | 18px / 22px | 500 | -0.36px | Standard promo headline |
| `{typography.headline-small}` | Reith Serif | 14px / 18px | 500 | -0.28px | Compact promo headline |
| `{typography.body-article}` | Reith Serif | 18px / 26px | 400 | -0.36px | Article body paragraphs |
| `{typography.body-summary}` | Reith Serif | 14px / 18px | 400 | normal | Promo summaries |
| `{typography.section-label}` | Reith Sans | 15px / 20px | 800 | 0.75px | Uppercase section titles |
| `{typography.button}` | Reith Sans | 16px / 18px | 500 | normal | Register / Sign In |
| `{typography.nav-link}` | Reith Sans | 14px / 18px | 500 | normal | Section nav links |
| `{typography.nav-link-active}` | Reith Sans | 14px / 18px | 700 | normal | Active nav link ("Home") |
| `{typography.meta}` | Reith Sans | 12px / 14px | 400 | -0.12px | Time ago, section tag |
| `{typography.footer-link}` | Reith Sans | 12px / 16px | 400 | normal | Footer links, copyright |

### Principles
- **Serif carries the journalism.** Every headline and summary is Reith Serif; the sans is reserved for UI and metadata.
- **Medium, not bold, headlines.** All measured serif headlines are weight 500; bold appears only in the sans (active nav 700, section labels 800).
- **Tight, proportional tracking.** The live site sets letter-spacing at -2% of the font size on serif headlines and article body (and -1% on 12px meta). Note: the GEL Typography guideline (updated 7 Aug 2017) says "it is important to not adjust the tracking" of BBC Reith; the live site ships negative tracking, and the live values are used here.
- **Uppercase with positive tracking only for labels** — 15px/800 with +0.75px (5%).

### GEL type scale (official)
GEL names its sizes after traditional type sizes and specifies size/line-height per breakpoint group (Group D = 600px+ without touch): Canon 44/48, Trafalgar 32/36, Paragon 28/32, Double Pica 24/28, Great Primer 20/24, Body Copy 16/22, Pica 16/20, Long Primer 14/18, Brevier 13/16, Minion 12/16. The live homepage's 28/32 lead headline equals GEL Paragon and its 14/18 summaries equal GEL Long Primer; the 18px article body and 18/22 promo headlines do not match the Group D values (they match Group C sizes), so the measured values are what this file declares.

### Note on Font Substitutes
BBC Reith is BBC-owned and not licensed for outside use. When it is unavailable, GEL's own documented stacks fall back to Helvetica, then Arial ("Sans serif: BBC-Reith-sans, Helvetica, Arial, sans-serif"; "Serif: BBC-Reith-serif, Helvetica, Arial, sans-serif"). The live site instead ships local metric fallbacks named `BBCReithSerif-fallback` / `BBCReithSans-fallback` followed by generic `serif` / `sans-serif`. No specific open-source substitute is named by the BBC; none is prescribed here.

## Layout

### Spacing System
- **Measured gaps:** 8px (most common), 12px, 6px, 16px, 24px, 32px. **Measured paddings:** 12px, 8px, 16px, 6px.
- **Tokens:** `{spacing.xxs}` 4px · `{spacing.xs}` 6px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.xl}` 24px · `{spacing.xxl}` 32px.
- **Official basis:** GEL "Spacing Units" defines 15 units — 4, 8, 12, 16, 20, 24, 32, 40, 48, 56, 64, 72, 80, 120, 160px — "the majority of these spacing units are multiples of 8px", with 4/12/20 reserved for component spacing only. The 6px button padding measured on the site is not in that table.

### Grid & Container
- The GEL Grid guideline: percentage-based columns with fixed margins and gutters (8px on small screens, 16px on larger); maximum width 1280px "giving a content area of 1248px"; breakpoint groups at 0–399, 400–599, 600–899, 900–1007, 1008+ and 1280+.
- Live homepage: 1280px viewport, 16px side padding on the footer (`0px 16px`) and the video band's inner wrapper, footer copyright line 1248px wide — consistent with GEL's 1248px content area.
- The top story band is three columns: narrow left (~25%), wide centre (~50%) for the lead, narrow right (~25%) text-only list; thin vertical rules separate columns in some bands.
- "Only from the BBC" is a two-up band of large landscape images; "Recommended audio" is a horizontal carousel of square tiles with prev/next chevrons.

### Whitespace Philosophy
Density is high but orderly: promos are separated by 8–16px gaps, columns by thin rules. Large empty areas in the capture are the #f6f6f6 ad slots, not decorative whitespace.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | Every surface on the homepage and article page |
| Dark band | `{colors.surface-dark}` (#141618) fill | Video section — contrast, not elevation |

No box-shadows were measured on the homepage or article page. The stylesheet corpus contains `0 0 10px rgba(28,37,68,.15)` and similar, but no rendered element was measured using them, so they are not declared as tokens. Depth comes entirely from photography and the black/white/grey value structure.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Buttons, inputs, images, nav tiles — everything rectangular |
| `{rounded.circle}` | 50% | Circular avatars / icon frames (24 measured elements) |

There are no skewed, clipped or notched shapes. The BBC logo is three square black blocks with white letters — the square is the brand's shape.

### Photography Geometry
Images are full-bleed within their column with square corners. Audio tiles are square artworks with the BBC blocks in their top edge.

## Components

### Buttons

**`button-primary`** — Register.
- Background `{colors.primary}` #000000, text `{colors.on-primary}` #ffffff, `{typography.button}` (Reith Sans 16px/18px 500), padding 6px 12px, height 34px, 2px solid #000000 border, radius 0px.
- **Hover** (`button-primary-hover`): background and border both #3a3c3e.

**`button-ghost`** — Sign In.
- Transparent background, 2px transparent border, text #000000, same type, padding and height as primary.
- **Hover** (`button-ghost-hover`): fills #3a3c3e and the text turns #ffffff — identical to the primary hover.

**`button-secondary`** — "BBC in other languages".
- Background `{colors.surface-subtle}` #e6e8ea, text `{colors.ink}` #202224, Reith Sans 14px/18px 500, padding 6px 12px, height 44px, radius 0px.

**`skip-link`** — "Skip to content" (appears on focus).
- White, black text, 2px solid #000000 border, padding 8px 12px, height 38px.

### Navigation

**`masthead`** — 81px tall white header (49px on mobile), logo centred, menu/search left, Register + Sign In right.

**`nav-link`** — horizontal section nav.
- Reith Sans 14px/18px 500 in #000000, padding 12px 8px, height 42px; the active item ("Home") is weight 700 with a black underline bar.
- **Hover** (`nav-link-hover`): background becomes #e6e8ea; text color and decoration unchanged.

### Promos (story units)
Not boxed cards — a vertical stack of:
1. Image (optional), square corners.
2. Headline: `{typography.headline-lead}` for the lead, `{typography.headline-promo}` for standard promos, `{typography.headline-small}` for compact lists; color `{colors.ink}`.
3. Summary: `{typography.body-summary}` in `{colors.ink}`.
4. Meta (`promo-meta`): `{typography.meta}` in `{colors.ink-meta}`, "3 hrs ago | World" with a thin vertical divider.

### Section Header
**`section-label`** — "ONLY FROM THE BBC", "RECOMMENDED AUDIO", "MUST WATCH": Reith Sans 15px/20px weight 800, +0.75px, uppercase, `{colors.ink}` (or `{colors.on-dark}` inside the dark band), sitting under a full-width black rule. Linked labels end in a chevron.

### Video Band
**`video-band`** — 1280px full-bleed `{colors.surface-dark}` section with 24px vertical padding; promos inside keep the 18px/22px 500 serif headline in `{colors.on-dark}`.

### Footer
**`footer`** — white, 16px side padding; repeats the section links, then a 1px #e6e8ea rule above "Follow BBC on:" social icons, then the legal row (Terms of Use, About the BBC, Privacy Policy, Cookies…) in Reith Sans 12px/16px #000000 and "Copyright 2026 BBC. All rights reserved."

### Links
**`link`** — headline links take the headline style in `{colors.ink}` with no underline at rest.

### Not declared
Inputs, tabs, tags and modals were not present on the measured pages. GEL documents an "Inputs" pattern (v1, 10 Aug 2020), but its values were not opened/measured, so no input component is declared.

## Design System Architecture

The BBC publishes its design system as **GEL — Global Experience Language**, hosted by BBC UX&D at [bbc.co.uk/gel](https://www.bbc.co.uk/gel). It is a guideline site (foundations, design patterns, how-tos, articles), not a public token package.

### Token architecture
GEL defines foundations as named scales rather than a primitive→semantic→component token tree:
- **Type:** named sizes from traditional typography — "Canon", "Trafalgar", "Paragon", "Double Pica", "Great Primer", "Body Copy", "Pica", "Long Primer", "Brevier", "Minion", plus display sizes "Atlas", "Elephant", "Imperial", "Royal", "Foolscap" ([GEL Typography](https://www.bbc.co.uk/gel/guidelines/typography)). The guideline explains the names "help us easily communicate type choices in the development process, bridging the gap between designers and developers."
- **Space:** "Spacing Units" 1 SU (4px) to 15 SU (160px); developers express them in rem ([GEL Spacing Units](https://www.bbc.co.uk/gel/features/spacing-units)). The page notes "Spacing units are part of the WebCore platform."
- **Color:** GEL publishes no public color token list on the pages opened. The live site exposes no CSS custom properties on `:root` (0 measured); colors are compiled into styled-components classes (e.g. `Section-styles__SectionOuterStyled-sc-…`, `Edinburgh-styles__…`, `Texas-styles__…`).

### Theming
No light/dark switch or brand-theme mechanism is documented on the GEL pages opened, and none was observed on the live site. The dark video band is a section-level inversion, not a theme.

### Type & spacing systems
- Four type breakpoint groups: A 0–319, B 320–599, C 600+, D 600+ without touch ([GEL Typography](https://www.bbc.co.uk/gel/guidelines/typography)).
- Body copy: "try not to have more than 60 characters per line."
- Spacing: multiples of 8px for layout; 4/12/20px only inside components; "One space = One spacing unit" — don't stack units ([GEL Spacing Units](https://www.bbc.co.uk/gel/features/spacing-units)).
- Grid: percentage columns, fixed 8px/16px margins and gutters, max 1280px / 1248px content, groups at 400/600/900/1008/1280px; "Spacing between components and elements should always be at least 8px - this is our baseline" ([GEL Grid](https://www.bbc.co.uk/gel/guidelines/grid)).

### Component model
GEL "Design Patterns" lists, among others: Accordion, Account in apps, App information, Autoplay, Bottom navigation, Cards, Carousel, Comments, Confirmation and error messages, Content utilities, External linking, Filter, Games framework, Global search, Information panel, Inputs, Launch screen, Local search, Location settings, Masthead, Numbered pagination, Onboarding, Pocket ([GEL Design Patterns](https://www.bbc.co.uk/gel/guidelines/category/design-patterns)). Each pattern is versioned (e.g. "Inputs v1 10 Aug 2020", "Masthead v1 7 Aug 2015"). Foundations: GEL Icons (Reith Suite), Grid, Motion Design Principles, Spacing Units, Typography ([GEL Foundations](https://www.bbc.co.uk/gel/guidelines/category/foundations)).

### Accessibility
GEL Typography: "All text and background colour combinations must be WCAG 2.0 AA compliant" — 4.5:1 for normal text, 3:1 for large text (14pt bold / 18pt). Spacing in rem is chosen so sites stay "compatible with browser text resizing." BBC Reith itself was commissioned "to improve legibility" on screens ([Introducing Reith](https://www.bbc.co.uk/gel/features/introducing-bbc-reith)). Measured: ink #202224 on #ffffff is well above 4.5:1; the site provides a visible 2px-bordered skip link.

### Delivery
GEL offers downloadable assets (the Grid page links "Ai & Sketch files"; the Spacing Units page mentions a Sketch library with spacing chips). No public npm token package was found. Typography and spacing are implemented on BBC's WebCore platform per the Spacing Units page.

## Do's and Don'ts

### Do
- Set headlines and summaries in BBC Reith Serif at weight 500 / 400, with letter-spacing at -2% of size as measured.
- Use BBC Reith Sans for every interface element: nav, buttons, labels, meta.
- Keep every corner square (0px); reserve 50% only for circular avatars/icons.
- Use black `{colors.primary}` for the single filled button and #3a3c3e for its hover.
- Show nav hover as a flat #e6e8ea tile.
- Put a meta line (12px #545658, time | section) under every promo.
- Introduce sections with an uppercase 15px/800 label under a full-width black rule.
- Let photography supply color; keep the chrome monochrome.

### Don't
- Don't add drop shadows, rounded cards or gradients — none exist on the measured pages.
- Don't bold serif headlines to 700; measured headlines are 500.
- Don't introduce a brand accent color for buttons or links; links are ink-colored.
- Don't set summaries in sans or nav in serif — the serif/sans split is the system.
- Don't stack spacing units into off-scale values (GEL rule).
- Don't let body lines exceed ~60 characters (GEL rule).

## Responsive Behavior

### Breakpoints (GEL)

| Group | Width | Margins / Gutters (GEL Grid) |
|---|---|---|
| 1 | 0–399px | 8px / 8px |
| 2 | 400–599px | 16px / 8px |
| 3 | 600–899px | 16px / 16px |
| 4 | 900–1007px | not captured |
| 5 | 1008px+ | fixed 1008px until 1280 |
| 6 | 1280px+ | max 1280px, 1248px content |

### Measured at 390px
- Masthead shrinks from 81px to 49px.
- Lead headline steps from 28px/32px to 24px/28px (-0.48px); article h1 from 38px/44px to 28px/34px.
- Summaries stay 14px/18px; article body stays 18px; meta stays 12px.
- The "BBC in other languages" button (44px tall) is the most prominent button on mobile.

### Collapsing Strategy
At 390px the measured headline and body widths are 358px (390px minus 16px each side), and column counts were not measured.

### Touch Targets
Nav links are 42px tall; the language button 44px; Register/Sign In 34px.

## Iteration Guide

1. Start from white `{colors.canvas}` and `{colors.ink}` text; add black only for chrome and the one filled button.
2. Choose the family by role: content → Reith Serif, interface → Reith Sans.
3. Apply -2% tracking to serif headline/body sizes; never to sans buttons.
4. Keep radius 0 everywhere unless the element is a circle.
5. Build promos as image + headline + summary + meta with no container.
6. Use GEL spacing units (multiples of 8px for layout, 4/12/20 inside components).
7. Section breaks: black rule + uppercase 15px/800 label.
8. Check contrast against WCAG 2.0 AA as GEL requires.
9. Re-run `node web/scripts/verify-designs.mjs --slug=bbc` after edits.
