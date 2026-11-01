---
version: alpha
name: The Guardian
category: "News & Publishing"
description: "The Guardian's news front built on its open-source Source Design System: a white (#ffffff) page under a Guardian blue (#052962) masthead, GH Guardian Headline serif at 500/700 (28px/32.2px section and lead headlines, 34px article headlines), GuardianTextEgyptian 17px/23.8px body, GuardianTextSans UI, pillar colours (news #c70000, opinion #c74600, lifestyle #bb3b80), yellow #ffe500 nav hover and pill buttons with radius equal to height (44px / 36px)."

colors:
  primary: "#052962"
  primary-hover: "#03183a"
  brand-300: "#041f4a"
  brand-500: "#0077b6"
  brand-600: "#506991"
  brand-800: "#c1d8fc"
  brand-800-hover: "#9ec1fa"
  tertiary-hover: "#0529621a"
  brand-alt: "#ffe500"
  canvas: "#ffffff"
  canvas-hover-on-brand: "#e6e6e6"
  ink: "#121212"
  ink-10: "#1a1a1a"
  neutral-20: "#333333"
  neutral-38: "#545454"
  neutral-46: "#707070"
  neutral-73: "#bababa"
  neutral-86: "#dcdcdc"
  neutral-93: "#ededed"
  neutral-97: "#f6f6f6"
  news: "#c70000"
  news-dark: "#8b0000"
  news-tint: "#fff4f2"
  opinion: "#c74600"
  opinion-tint: "#fef9f5"
  lifestyle: "#bb3b80"
  lifestyle-tint: "#fef1f8"
  culture: "#866d50"
  success: "#22874d"
  focus: "#0077b6"

typography:
  headline-section:
    fontFamily: "\"GH Guardian Headline\", \"Guardian Egyptian Web\", Georgia, serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 32.2px
  headline-article:
    fontFamily: "\"GH Guardian Headline\", \"Guardian Egyptian Web\", Georgia, serif"
    fontSize: 34px
    fontWeight: 500
    lineHeight: 39.1px
  headline-lead:
    fontFamily: "\"GH Guardian Headline\", \"Guardian Egyptian Web\", Georgia, serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 32.2px
  headline-article-mobile:
    fontFamily: "\"GH Guardian Headline\", \"Guardian Egyptian Web\", Georgia, serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 32.2px
  pillar-nav:
    fontFamily: "\"GH Guardian Headline\", \"Guardian Egyptian Web\", Georgia, serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 27.6px
  headline-24:
    fontFamily: "\"GH Guardian Headline\", \"Guardian Egyptian Web\", Georgia, serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 27.6px
  headline-20:
    fontFamily: "\"GH Guardian Headline\", \"Guardian Egyptian Web\", Georgia, serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 1.15
  headline-17:
    fontFamily: "\"GH Guardian Headline\", \"Guardian Egyptian Web\", Georgia, serif"
    fontSize: 17px
    fontWeight: 500
    lineHeight: 19.55px
  headline-bold-17:
    fontFamily: "\"GH Guardian Headline\", \"Guardian Egyptian Web\", Georgia, serif"
    fontSize: 17px
    fontWeight: 700
    lineHeight: 19.55px
  article-body:
    fontFamily: "GuardianTextEgyptian, \"Guardian Text Egyptian Web\", Georgia, serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 23.8px
  text-sans-bold-17:
    fontFamily: "GuardianTextSans, \"Guardian Text Sans Web\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 17px
    fontWeight: 700
    lineHeight: 22.1px
  text-sans-17:
    fontFamily: "GuardianTextSans, \"Guardian Text Sans Web\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 22.1px
  text-sans-14:
    fontFamily: "GuardianTextSans, \"Guardian Text Sans Web\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  text-sans-bold-12:
    fontFamily: "GuardianTextSans, \"Guardian Text Sans Web\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 15.6px
  text-sans-12:
    fontFamily: "GuardianTextSans, \"Guardian Text Sans Web\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px

rounded:
  input: 4px
  card: 12px
  cta-small: 36px
  cta: 44px
  circle: 50%

spacing:
  space-0: 2px
  space-1: 4px
  space-2: 8px
  space-3: 12px
  space-4: 16px
  space-5: 20px
  space-6: 24px
  gap-10: 10px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.text-sans-bold-17}"
    rounded: "{rounded.cta}"
    padding: 0px 20px 2px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-focused:
    outline: "5px solid #0077b6"
    outlineOffset: 3px
  button-secondary:
    backgroundColor: "{colors.brand-800}"
    textColor: "{colors.primary}"
    typography: "{typography.text-sans-bold-17}"
    rounded: "{rounded.cta}"
    padding: 0px 20px 2px
    height: 44px
  button-secondary-hover:
    backgroundColor: "{colors.brand-800-hover}"
  button-tertiary:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    border: "1px solid #052962"
    typography: "{typography.text-sans-bold-17}"
    rounded: "{rounded.cta}"
    padding: 0px 20px 2px
    height: 44px
  button-tertiary-hover:
    backgroundColor: "{colors.tertiary-hover}"
  button-on-brand-small:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.text-sans-bold-17}"
    rounded: "{rounded.cta-small}"
    padding: 0px 16px 2px
    height: 36px
  button-on-brand-hover:
    backgroundColor: "{colors.canvas-hover-on-brand}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid #707070"
    typography: "{typography.text-sans-17}"
    rounded: "{rounded.input}"
    padding: 0px 8px
    height: 44px
  text-input-focused:
    boxShadow: "0 0 0 3px #0077b6"
  link:
    textColor: "{colors.brand-500}"
    typography: "{typography.text-sans-17}"
    textDecoration: underline
  masthead-top-bar:
    backgroundColor: "{colors.brand-300}"
    textColor: "{colors.canvas}"
    typography: "{typography.text-sans-bold-17}"
  nav-pillar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.pillar-nav}"
    padding: 0px 8px 0px 6px
    height: 52px
  nav-subnav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.text-sans-14}"
  nav-subnav-link-hover:
    textColor: "{colors.brand-alt}"
    textDecoration: underline
  card-headline:
    textColor: "{colors.ink}"
    typography: "{typography.headline-17}"
  card-kicker:
    textColor: "{colors.news}"
    typography: "{typography.text-sans-14}"
  card-age:
    textColor: "{colors.neutral-46}"
    typography: "{typography.text-sans-bold-12}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.text-sans-17}"
---

## Overview

The Guardian's international front (`theguardian.com/international`) is a dense, image-led newspaper grid framed by Guardian blue. The capture shows a three-layer masthead: a deep-blue top bar (`{colors.brand-300}` `#041f4a`) with "Print subscriptions", "Search jobs" and "Sign in" in white GuardianTextSans bold; a white highlights strip of three tinted cards (pink news tint, lilac lifestyle tint, pink again) each with a circular photo; and the main blue band (`{colors.primary}` `#052962`) carrying the "The Guardian" titlepiece on the right, five pillar links on the left — News, Opinion, Sport, Culture, Lifestyle — set in 24px bold headline serif, a round yellow (`{colors.brand-alt}` `#ffe500`) menu button, and a row of 14px sans sub-sections beneath.

Below the masthead the page is plain `{colors.canvas}` white organised into named containers. Each container opens with a 28px/700 serif title on the left ("News") and a grid of story cards on the right, separated by thin `{colors.neutral-86}` rules. Cards are typographic first: a coloured **kicker** ("Tennessee", "South Sudan") in the pillar colour, then a GH Guardian Headline headline in `{colors.ink}` `#121212`, a grey standfirst, a bold 12px age stamp ("12h ago") in `{colors.neutral-46}`, and a photograph. Opinion headlines turn `{colors.opinion}` orange; lifestyle uses `{colors.lifestyle}` magenta.

Colour on the Guardian is semantic, not decorative. The blue is the brand; the pillar colours (news red `#c70000`, opinion orange `#c74600`, sport blue `#0077b6`, culture brown `#866d50`, lifestyle magenta `#bb3b80`) tell the reader which section a story belongs to. Everything is generated from the open-source **Source Design System** (`@guardian/source`).

**Key Characteristics:**
- White page under a three-tier blue masthead (`#041f4a` top bar, `#052962` pillar band) and a blue `#052962` footer.
- GH Guardian Headline (500 and 700) for every headline; GuardianTextEgyptian for article body; GuardianTextSans for UI.
- Pillar colour system on kickers and headlines: news `#c70000`, opinion `#c74600`, lifestyle `#bb3b80`, culture `#866d50`.
- Yellow `#ffe500` as the hover colour on blue navigation, and as the round menu button.
- Pill buttons whose radius equals their height (44px or 36px), label 17px bold sans with 2px extra bottom padding.
- Hairline `#dcdcdc` rules instead of card boxes; no shadows.
- Dense, multi-column grid at 1280px with a left-hand container title column.

### Imagery
Photography is reportage: news-agency and staff photographs cropped as plain rectangles — a courtroom portrait for the lead story, a crowded hospital ward, political figures at podiums, a street scene. There are no illustrations, gradients or overlays on the front; the image is always beside or below the headline, never behind it.

### Voice & Microcopy
Headlines are full sentences with British spelling and single quotation marks for quoted speech ("Christa Pike 'angry, confused' …"). Kickers are one or two words naming a place or topic ("Tennessee", "South Sudan", "Exclusive"). Ages are relative ("27m ago", "12h ago"). Interface labels are short and plain: "Print subscriptions", "Search jobs", "Sign in", "Sign up for our email".

## Colors

> **Sources:** live homepage + article page (computed styles) and the Source palette ([palette.ts](https://github.com/guardian/csnx/blob/main/libs/@guardian/source/src/foundations/__generated__/palette.ts)). Token names in brackets are the Source palette names.

### Brand
- **Guardian Blue** (`{colors.primary}` — `#052962`, `brand.400`): the pillar band, footer, primary button fill, newsletter-card badge (`--newsletter-card-badge-background`).
- **Primary Hover** (`{colors.primary-hover}` — `#03183a`): measured hover of the primary Source button.
- **Brand 300** (`{colors.brand-300}` — `#041f4a`): top bar (`--masthead-top-bar-background`).
- **Brand 500** (`{colors.brand-500}` — `#0077b6`): links; also `focus.400` and `sport.400`.
- **Brand 600** (`{colors.brand-600}` — `#506991`): borders on blue.
- **Brand 800** (`{colors.brand-800}` — `#c1d8fc`): secondary button fill; hover `{colors.brand-800-hover}` `#9ec1fa`.
- **Brand Alt** (`{colors.brand-alt}` — `#ffe500`, `brandAlt.400`): hover text on masthead links (`--masthead-nav-link-text-hover`), menu button, callout highlight, star ratings.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): the page.
- **Neutral 97** (`{colors.neutral-97}` — `#f6f6f6`): ad slots (`--ad-background`).
- **Neutral 93** (`{colors.neutral-93}` — `#ededed`): secondary surfaces.
- **Tints**: `{colors.news-tint}` `#fff4f2`, `{colors.lifestyle-tint}` `#fef1f8`, `{colors.opinion-tint}` `#fef9f5` — the highlights strip cards.

### Text
- **Ink** (`{colors.ink}` — `#121212`, `neutral.7`): headlines and body (`--headline-colour`, `--card-headline`). 11081 measured characters.
- **Ink 10** (`{colors.ink-10}` — `#1a1a1a`): the "Share stories with the Guardian securely" line.
- **Neutral 46** (`{colors.neutral-46}` — `#707070`): ages, standfirsts, meta (`--sub-meta-label-text`).
- **Neutral 38** (`{colors.neutral-38}` — `#545454`), **Neutral 20** (`{colors.neutral-20}` — `#333333`, `--section-border-primary`).

### Pillars
- **News** (`{colors.news}` — `#c70000`): news kickers, comment counts, caption links. **News Dark** (`{colors.news-dark}` — `#8b0000`): feature headline colour on the measured article page.
- **Opinion** (`{colors.opinion}` — `#c74600`).
- **Lifestyle** (`{colors.lifestyle}` — `#bb3b80`).
- **Culture** (`{colors.culture}` — `#866d50`).

### Lines
- **Neutral 86** (`{colors.neutral-86}` — `#dcdcdc`): container and card rules, carousel borders.
- **Neutral 73** (`{colors.neutral-73}` — `#bababa`): carousel chevron borders.

### Semantic
- **Error** = `{colors.news}` `#c70000` (`error.400`), **Success** (`{colors.success}` — `#22874d`, `success.400`), **Focus** (`{colors.focus}` — `#0077b6`, `focus.400`) per the Source palette.

## Typography

### Font Family
Three proprietary Guardian families are served: **GH Guardian Headline** (weights 500 and 700 loaded), **GuardianTextEgyptian** (article body serif) and **GuardianTextSans** (400 and 700 loaded). The Source presets declare the fallbacks: `"Guardian Egyptian Web", Georgia, serif` for the serifs and `"Guardian Text Sans Web", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif` for the sans ([typography.ts](https://github.com/guardian/csnx/blob/main/libs/@guardian/source/src/foundations/__generated__/typography.ts)).

### Hierarchy

| Token | Family | Size | Weight | Line Height | Use |
|---|---|---|---|---|---|
| `{typography.headline-article}` | Headline | 34px | 500 | 39.1px | Article h1 (desktop) |
| `{typography.headline-section}` | Headline | 28px | 700 | 32.2px | Container titles ("News") |
| `{typography.headline-lead}` | Headline | 28px | 500 | 32.2px | Lead card headlines, article h2 |
| `{typography.headline-article-mobile}` | Headline | 28px | 500 | 32.2px | Article h1 at 390px |
| `{typography.pillar-nav}` | Headline | 24px | 700 | 27.6px | Pillar navigation |
| `{typography.headline-24}` | Headline | 24px | 500 | 27.6px | Callout lines |
| `{typography.headline-20}` | Headline | 20px | 500 | 1.15 | Mid-size card headlines |
| `{typography.headline-17}` | Headline | 17px | 500 | 19.55px | Small card headlines |
| `{typography.headline-bold-17}` | Headline | 17px | 700 | 19.55px | "Most viewed" labels |
| `{typography.article-body}` | TextEgyptian | 17px | 400 | 23.8px | Article paragraphs |
| `{typography.text-sans-bold-17}` | TextSans | 17px | 700 | 22.1px | Buttons, top-bar links, labels |
| `{typography.text-sans-17}` | TextSans | 17px | 400 | 22.1px | Inputs, links, footer |
| `{typography.text-sans-14}` | TextSans | 14px | 400 | 18.2px | Sub-nav, kickers, sublinks |
| `{typography.text-sans-bold-12}` | TextSans | 12px | 700 | 15.6px | Card age |
| `{typography.text-sans-12}` | TextSans | 12px | 400 | 15.6px | Comment counts |

### Principles
- **Line-height ratios are fixed per family** in Source: headlines 1.15 (28px → 32.2px, 17px → 19.55px), article text 1.4 (17px → 23.8px), sans 1.3 (17px → 22.1px, 14px → 18.2px).
- **Sizes are a fixed set**: 12, 14, 15, 17, 20, 24, 28, 34, 42, 50, 64 (and 70 for titlepiece). Do not interpolate.
- **Headline weight carries hierarchy**: 700 for navigation and container titles, 500 for story headlines.
- **Serif for journalism, sans for interface.** Buttons, labels, navigation sub-links and metadata are GuardianTextSans.

### Note on Font Substitutes
All three faces are proprietary Guardian fonts. Use the declared fallback chains: Georgia for GH Guardian Headline and GuardianTextEgyptian, and Helvetica Neue / Helvetica / Arial for GuardianTextSans. Keep the Source line-height ratios (1.15 / 1.4 / 1.3) so the rhythm survives the substitution.

## Layout

### Spacing System
- **Source space scale** ([space.ts](https://github.com/guardian/csnx/blob/main/libs/@guardian/source/src/foundations/__generated__/space.ts)): 2, 4, 8, 12, 16, 20, 24, 32, 36, 40, 48, 56, 64, 72, 96px (`space[0]`…`space[24]`).
- **Tokens used here**: `{spacing.space-0}` 2px · `{spacing.space-1}` 4px · `{spacing.space-2}` 8px · `{spacing.space-3}` 12px · `{spacing.space-4}` 16px · `{spacing.space-5}` 20px · `{spacing.space-6}` 24px · `{spacing.gap-10}` 10px.
- **Most frequent measured gaps**: 10px (138), 20px (102), 4px (86), 8px (63), 12px (58).

### Grid & Container
- Source breakpoints ([breakpoints.ts](https://github.com/guardian/csnx/blob/main/libs/@guardian/source/src/foundations/__generated__/breakpoints.ts)): mobile 320, mobileMedium 375, mobileLandscape 480, phablet 660, tablet 740, desktop 980, leftCol 1140, wide 1300.
- At 1280px (between leftCol and wide) the front shows a left column for container titles and a content area of cards; the footer's inner container measures 1140px.
- Containers stack vertically, each separated by a top rule.

### Whitespace Philosophy
Density over air. Cards sit 10–20px apart; text blocks have little padding. Rhythm comes from rules and from the consistent headline/kicker/age stack in every card, not from large margins.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Everything on the front |
| Focus | `0 0 0 3px #0077b6` (focusHalo) or `outline: 5px solid #0077b6; outline-offset: 3px` (focusHaloSpaced) | Keyboard focus ([focus-halo.ts](https://github.com/guardian/csnx/blob/main/libs/@guardian/source/src/foundations/accessibility/focus-halo.ts)) |

The homepage extraction has no box-shadows. Depth is expressed with colour bands (blue masthead and footer, tinted highlight cards) and hairline rules.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.input}` | 4px | Text inputs |
| `{rounded.card}` | 12px | Rounded containers (5 occurrences) |
| `{rounded.cta-small}` | 36px | Small buttons (36px tall) |
| `{rounded.cta}` | 44px | Default buttons (44px tall) |
| `{rounded.circle}` | 50% | Highlight-card thumbnails, menu button, carousel arrows |

### Photography Geometry
Story images are square-cornered rectangles (landscape for lead and grid cards). The highlights strip uses circular photo crops. The yellow menu button and the carousel next arrow are circles.

## Components

### Buttons
Source buttons ([button/styles.ts](https://github.com/guardian/csnx/blob/main/libs/@guardian/source/src/react-components/button/styles.ts)), measured in the Source Storybook iframes.

**`button-primary`** — `{colors.primary}` fill, white text, `{typography.text-sans-bold-17}`, height 44px, padding `0px 20px 2px`, radius `{rounded.cta}` 44px. Hover `{colors.primary-hover}` `#03183a`. Focus `button-primary-focused`: 5px `#0077b6` outline, 3px offset.

**`button-secondary`** — `{colors.brand-800}` `#c1d8fc` fill, `{colors.primary}` text; hover `#9ec1fa`.

**`button-tertiary`** — transparent, `1px solid #052962` border, `{colors.primary}` text; hover fill `rgba(5,41,98,0.1)`.

**`button-on-brand-small`** — the "Sign up for our email" button on the homepage: white fill, `{colors.primary}` text, 36px tall, padding `0px 16px 2px`, radius 36px (Source small size, brand theme). The brand-theme hover measured in Storybook is `#e6e6e6`.

**Subdued** priority (documented in Source): no fill, underlined text with 4px offset, thickness 4px on hover, radius 0.

### Inputs & Forms
**`text-input`** — white, `1px solid #707070`, radius 4px, padding `0px 8px`, height 44px, `{typography.text-sans-17}` in `{colors.ink}`. Label above in 17px/700. Focus `0 0 0 3px #0077b6`. Error and success states use a 2px border in `#c70000` / `#22874d` ([text-input/styles.ts](https://github.com/guardian/csnx/blob/main/libs/@guardian/source/src/react-components/text-input/styles.ts)).

### Links
**`link`** — `{colors.brand-500}` `#0077b6`, 17px/400 sans, underlined (Source Link primary).

### Navigation
- **`masthead-top-bar`** — `#041f4a`, white 17px/700/22.1px links with 4px padding, 64px tall hit areas; hover underline.
- **`nav-pillar`** — on `#052962`, white 24px/700/27.6px headline serif, padding `0px 8px 0px 6px`, 52px tall, separated by thin vertical rules; the active pillar carries a coloured underline bar in its pillar colour (red under "News" in the capture).
- **`nav-subnav-link`** — white 14px/400/18.2px sans; hover `{colors.brand-alt}` + underline.
- **Edition switch** ("Int") — white sans with a chevron, top right of the band.

### Cards
- **Highlights card** — tinted rectangle (`#fff4f2` / `#fef1f8`), kicker in ink, headline 17px/500 in the pillar colour, circular image on the right.
- **Story card** — kicker (`{colors.news}` 14px sans), headline (`{typography.headline-lead}` for lead cards, `{typography.headline-20}`/`{typography.headline-17}` for smaller), grey standfirst, age stamp `{typography.text-sans-bold-12}` in `#707070`, image. Opinion headlines use `{colors.opinion}`.
- **Sublinks** — 14px sans, kicker word in red followed by the headline in ink, beneath a short rule.

### Footer
**`footer`** — `{colors.primary}` `#052962` band (516px tall at 1280px), repeats the pillar links in 24px/700 headline serif, then 17px/400 white sans link columns.

## Design System Architecture

The Guardian publishes the **Source Design System** ([theguardian.design](https://theguardian.design)) as open source in the [guardian/csnx](https://github.com/guardian/csnx/tree/main/libs/@guardian/source) monorepo.

### Token architecture
- A single source file, `design-tokens/tokens.json`, generates TypeScript foundations (`__generated__/palette.ts`, `typography.ts`, `space.ts`, `breakpoints.ts`, `size.ts`) and a `variables.css` — every generated file starts "DO NOT EDIT THIS FILE DIRECTLY! … Update design-tokens/tokens.json".
- **Primitive palette** is grouped by role or pillar with numeric lightness stops: `palette.brand['400']`, `palette.neutral['7']`, `palette.news['400']`, `palette.opinion['400']`, `palette.lifestyle['400']`, `palette.sport['400']`, `palette.culture['400']`, `palette.error['400']`, `palette.success['400']`, `palette.focus['400']` ([palette.ts](https://github.com/guardian/csnx/blob/main/libs/@guardian/source/src/foundations/__generated__/palette.ts)).
- **Semantic/component layer** on the live site is a large set of CSS custom properties named by component and role, e.g. `--headline-colour`, `--card-headline`, `--masthead-top-bar-background`, `--masthead-nav-link-text-hover`, `--newsletter-card-badge-background`, `--product-button-primary-background-hover`, `--section-border-primary`, `--ad-background` (measured in `:root`).
- **Typography presets** are named family+weight+size: `headlineMedium28`, `headlineBold28`, `textSansBold17`, `article17`, `textEgyptian17`, `titlepiece70`.

### Theming
Components take a `theme` prop (e.g. `themeButton`, `themeButtonBrand`, `themeButtonBrandAlt`, reader-revenue themes) that swaps the colour set; the brand theme inverts the primary button to white on blue backgrounds ([button/theme.ts](https://github.com/guardian/csnx/blob/main/libs/@guardian/source/src/react-components/button/theme.ts)). On the site, theming is applied through the CSS custom properties above.

### Type & spacing systems
Fixed type scale per family (14–64 headline, 12–42 sans, 15/17 article) with fixed line-height ratios (1.15 headline, 1.4 article, 1.3 sans). Space scale 2–96px indexed `space[0..24]`; `remSpace` mirrors it in rem.

### Component model
React components (Emotion CSS) exported from `@guardian/source/react-components`: accordion, brand, button (and LinkButton), checkbox, choice-card, columns, container, footer, hide, icons, inline, label, link, radio, select, spinner, stack, text-area, text-input, tiles, user-feedback ([react-components](https://github.com/guardian/csnx/tree/main/libs/@guardian/source/src/react-components)). Buttons have priorities primary / secondary / tertiary / subdued and sizes default (44px) / small (36px) / xsmall (24px), with icon-left/right, icon-only and loading states.

### Accessibility
`size.medium` 44px is documented as meeting "WCAG 2.1 AAA compliance for touch targets" ([size.ts](https://github.com/guardian/csnx/blob/main/libs/@guardian/source/src/foundations/__generated__/size.ts)). Focus is a 3px `#0077b6` halo (or 5px outline + 3px offset), suppressed for mouse users via the `src-focus-disabled` class managed by a focus-style manager. Helpers include `visuallyHidden` and `descriptionId` for `aria-describedby`.

### Delivery
npm `@guardian/source` (v14.0.0, Apache-2.0), React + `@emotion/react`; documentation in the Source Storybook (guardian.github.io/storybooks) and on theguardian.design.

## Do's and Don'ts

### Do
- Use `{colors.primary}` `#052962` for the masthead band, footer and primary buttons.
- Colour kickers (and, for opinion/lifestyle, headlines) with the story's pillar colour.
- Set all headlines in GH Guardian Headline with 1.15 line-height; body copy in GuardianTextEgyptian 17px/23.8px.
- Make button radius equal to button height (44px or 36px) and add the 2px bottom padding to the label.
- Separate containers and cards with `#dcdcdc` hairlines.
- Use `#ffe500` for hover on blue navigation.

### Don't
- Don't use pillar colours decoratively — they encode sections.
- Don't add shadows or rounded card boxes to story cards.
- Don't use sizes outside the Source scale (e.g. 18px or 22px headlines).
- Don't set UI controls in the serif; buttons, labels and metadata are GuardianTextSans.
- Don't use pure black text; ink is `#121212`.
- Don't remove the focus halo.

## Responsive Behavior

### Breakpoints

| Name | Min width |
|---|---|
| mobile | 320px |
| mobileMedium | 375px |
| mobileLandscape | 480px |
| phablet | 660px |
| tablet | 740px |
| desktop | 980px |
| leftCol | 1140px |
| wide | 1300px |

### Measured changes at 390px
- Article h1 34px/39.1px → 28px/32.2px.
- Article body stays 17px/23.8px.
- The "Share stories" line drops 24px → 16px (18.4px line-height).
- The small "Sign up for our email" button keeps 36px height and 36px radius.

### Touch Targets
Source sizes: buttons and inputs 44px (medium), 36px (small), 24px (xsmall); the masthead top-bar links are 64px tall.

### Collapsing Strategy
Containers keep their title-then-cards structure; at narrower widths the left title column folds above the cards (leftCol breakpoint 1140px) and card grids reduce columns.

## Iteration Guide

1. Start from the Source palette names; map `{colors.primary}` to `brand.400`.
2. Headlines: pick from `headlineMedium{17,20,24,28,34}` / `headlineBold{17,24,28}`; keep line-height 1.15.
3. Article text: `{typography.article-body}` 17px/23.8px.
4. Buttons: Source sizes only (44/36/24px), radius = height, label `{typography.text-sans-bold-17}`.
5. Kickers in the pillar colour; ages in `#707070` 12px bold sans.
6. Rules, not boxes, between cards.
7. Run `node web/scripts/verify-designs.mjs --slug=the-guardian` after edits.
