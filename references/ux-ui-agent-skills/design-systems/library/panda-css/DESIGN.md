---
version: alpha
name: Panda CSS
category: "CSS-in-JS"
description: "Panda CSS (panda-css.com) is a build-time, type-safe CSS-in-JS library whose marketing site is a loud neo-brutalist page - a #fde047 yellow hero, black and white bands, Onest at weight 700 with tight negative tracking (210px wordmark headline), Geist Mono for code and eyebrows, yellow #facc15 accents, and 3px black borders with hard 4px offset black shadows."

colors:
  canvas: "#000000"
  page-body: "#ffffff"
  brand-yellow: "#fde047"
  ink: "#ffffff"
  primary: "#facc15"
  on-primary: "#000000"
  ink-strong: "#171717"
  ink-subtle: "#525252"
  code-text: "#ebdbb2"
  code-green: "#b8bb26"
  code-muted: "#a89984"
  ink-eyebrow: "#212121b3"
  surface-card: "#fafafa"
  hairline: "#e5e5e5"

typography:
  display:
    fontFamily: Onest, "Onest Fallback", sans-serif
    fontSize: 210px
    fontWeight: 700
    lineHeight: 199.5px
    letterSpacing: "-10.5px"
  display-mobile:
    fontFamily: Onest, "Onest Fallback", sans-serif
    fontSize: 105px
    fontWeight: 700
    lineHeight: 99.75px
    letterSpacing: "-5.25px"
  heading:
    fontFamily: Onest, "Onest Fallback", sans-serif
    fontSize: 45px
    fontWeight: 600
    lineHeight: 54px
    letterSpacing: "-1.125px"
  subheading:
    fontFamily: Onest, "Onest Fallback", sans-serif
    fontSize: 33.75px
    fontWeight: 700
    lineHeight: 40.5px
    letterSpacing: "-0.84375px"
  body:
    fontFamily: Onest, "Onest Fallback", sans-serif
    fontSize: 18.75px
    fontWeight: 500
    lineHeight: 28.125px
    letterSpacing: "-0.46875px"
  button:
    fontFamily: Onest, "Onest Fallback", sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 22.5px
  nav:
    fontFamily: Onest, "Onest Fallback", sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  eyebrow:
    fontFamily: "\"Geist Mono\", \"Geist Mono Fallback\", Menlo, monospace"
    fontSize: 11.25px
    fontWeight: 500
    lineHeight: 11.25px
    letterSpacing: 0.9px
    textTransform: uppercase
  button-large:
    fontFamily: Onest, "Onest Fallback", sans-serif
    fontSize: 22.5px
    fontWeight: 600
    lineHeight: 29.9999px

rounded:
  sm: 3.75px
  md: 5.63px
  lg: 7.5px
  xl: 10px
  card: 11.25px
  button-large: 13px
  pill: 9999px

spacing:
  s1: 3.75px
  s2: 5.63px
  s3: 7.5px
  s4: 8px
  s5: 9.38px
  s6: 11.25px
  s7: 15px
  s8: 18.75px
  s9: 22.5px
  s10: 30px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 11.25px 0px
    height: 45px
  button-large-dark:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button-large}"
    rounded: "{rounded.button-large}"
    padding: 11.25px 22.5px
    height: 58px
    borderColor: "{colors.canvas}"
    boxShadow: rgb(0, 0, 0) 4px 4px 0px 0px
  link:
    textColor: "{colors.ink-eyebrow}"
    typography: "{typography.eyebrow}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.card}"
    padding: 18.75px 22.5px
    borderColor: "{colors.canvas}"
    boxShadow: rgb(0, 0, 0) 4px 4px 0px 0px
  footer:
    textColor: "{colors.ink-strong}"
    borderColor: "{colors.hairline}"
---

## Overview

The Panda CSS home page (https://panda-css.com, 1280px capture) is a stack of full-width color bands: a black announcement strip ("Want to skip the docs? Check out pandamastery.com - the best way to learn Panda CSS"), a white header bar, a saturated yellow hero, a scrolling white ticker of feature names, a black section with an interactive code card, and further bands below including a cream "Panda Mastery" promo with yellow radiating lines, testimonial cards and a footer. The hero shows the word "panda" as a huge bold headline at 210px with a cartoon panda mascot (blue cap, bubble tea, skateboard) at right.

The home page is energetic and sticker-like: heavy type, flat yellow, black outlines, and offset "hard" shadows on buttons and cards. The documentation pages (measured separately at /docs/overview/getting-started, "Why Panda") calm the same system down into a white, neutral, three-column docs layout with a yellow accent in the banner and the active nav marker.

**Key Characteristics:**
- Yellow is the brand: `{colors.brand-yellow}` (#fde047) fills the hero; `{colors.primary}` (#facc15) is the accent on black and on active tabs. Both equal the `yellow.300` and `yellow.400` values in Panda's own preset (`@pandacss/preset-panda` colors).
- Neo-brutalist effects: 3px solid black borders and `rgb(0, 0, 0) 4px 4px 0px 0px` offset shadows on the large buttons and testimonial cards.
- Display type is Onest at weight 700 with strongly negative tracking (-10.5px at 210px, which is -0.05em).
- Geist Mono for code, the small uppercase eyebrow ("NEW PANDA CSS V2.0 RELEASED") and "ON THIS PAGE".
- Light/dark banding: white and yellow bands alternate with a full black code section.
- Mascot illustration plus a panda emoji in headlines ("Styling library you'll enjoy using").
- Syntax-highlighted code in a warm retro palette on a dark panel.

## Colors

> Sources: measured on https://panda-css.com and /docs/overview/getting-started; yellow values cross-checked against `packages/preset-panda/src/colors.ts` in https://github.com/chakra-ui/panda.

### Brand & Accent
- **Brand Yellow** (`{colors.brand-yellow}` - `#fde047`): the hero band, the largest-area background measured. Equals `yellow.300` in the Panda preset.
- **Primary** (`{colors.primary}` - `#facc15`): the active code tab ("style-functions.tsx") and the highlighted words in "you'll enjoy". Equals `yellow.400` in the preset. Its label color is `{colors.on-primary}` (black).

### Surface
- **Canvas** (`{colors.canvas}` - `#000000`): the dark section, banner strip, "Browse Guides" button and card borders.
- **Page Body** (`{colors.page-body}` - `#ffffff`): header, ticker band, Get Started button, footer.
- **Surface Card** (`{colors.surface-card}` - `#fafafa`): testimonial cards.
- **Hairline** (`{colors.hairline}` - `#e5e5e5`): footer top border and docs dividers.

### Text
- **Ink** (`{colors.ink}` - `#ffffff`): headings and body on the black section.
- **Ink Strong** (`{colors.ink-strong}` - `#171717`): the most-read color overall (copy on white and yellow bands, nav).
- **Ink Subtle** (`{colors.ink-subtle}` - `#525252`): secondary copy (equals `fg.muted` in the site's custom properties).
- **Ink Eyebrow** (`{colors.ink-eyebrow}` - `#212121b3`): the small uppercase release badge text.

### Code
Code panels on the black section use three measured syntax colors: **Code Text** `{colors.code-text}` (#ebdbb2), **Code Green** `{colors.code-green}` (#b8bb26) and **Code Muted** `{colors.code-muted}` (#a89984); the capture also shows red/orange keywords and yellow function names on a dark gray (#282828) panel.

### Semantic
The site's `:root` exposes the full Panda color ramps (for example `--colors-red-800` `#991b1b`, `--colors-blue-600` `#2563eb`) as CSS variables because the site is built with Panda; they are the library's default palette, not site UI colors.

## Typography

### Font Family
- **Onest** (variable, weights 100-900) for all headings, body and buttons, with an `Onest Fallback` metric-matched face then `sans-serif`.
- **Geist Mono** (variable) with `Geist Mono Fallback`, then Menlo, for code, the eyebrow and "On this page". The site's own variable is `--font-mono: "Geist Mono", "Geist Mono Fallback"`.
- Both are loaded web fonts (reported in the page's loaded fonts). Search results describe both as SIL OFL 1.1 fonts; the license files themselves were not opened.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 210px | 700 | 199.5px | -10.5px | "panda" wordmark headline (h1) |
| `{typography.display-mobile}` | 105px | 700 | 99.75px | -5.25px | h1 at 390px |
| `{typography.heading}` | 45px | 600 | 54px | -1.125px | "Styling library you'll enjoy using" |
| `{typography.subheading}` | 33.75px | 700 | 40.5px | -0.84375px | Feature headings, docs h1 |
| `{typography.body}` | 18.75px | 500 | 28.125px | -0.46875px | Hero paragraph |
| `{typography.button-large}` | 22.5px | 600 | 29.9999px | normal | "Get Started" / "Browse Guides" |
| `{typography.button}` | 15px | 500 | 22.5px | normal | Code tabs and small buttons |
| `{typography.nav}` | 15px | 400 | 22.5px | normal | Nav and banner |
| `{typography.eyebrow}` | 11.25px | 500 | 11.25px | 0.9px | Uppercase mono labels |

### Principles
- Tracking is a fixed -0.025em to -0.05em on large text (for example -0.5625px at 22.5px, -1.40625px at 56.25px, as measured).
- Mono labels are uppercase with positive tracking (0.9px).
- The odd decimal sizes (18.75, 22.5, 33.75, 11.25) are consistent with a 15px root font size: each is a Panda rem step (`0.75rem`, `1.25rem`, `1.5rem`, `2.25rem`, `1.125rem`) multiplied by 15. That is an observation from the numbers, not a documented setting.

### Font substitutes
Both fonts are loaded from the site; if unavailable, Inter or system-ui sans for Onest and ui-monospace for Geist Mono are practical stand-ins (a suggestion, not site policy).

## Layout

- **Banner and header.** A black 1-line banner, then a white header: logo (yellow rounded square with a black "p" mark plus "panda" wordmark), a version dropdown ("v2"), Docs, Blog, Showcase, a wide search field ("Search docs..." with a K shortcut), a black "Playground" button, GitHub and theme icons.
- **Hero.** Left-aligned text block (release eyebrow, "Write type-safe styles with ease using", the huge "panda", paragraph, two large buttons, an `npm i -D @pandacss/dev` line) and the mascot illustration on the right, on yellow.
- **Ticker.** A single-row marquee on white listing "Style props, TypeScript based, Design Tokens, Cascade Layers, Utility Classes, Recipes, Just-in-Time, Variants" separated by bullets.
- **Code section.** Centered headline, a three-tab code card (style-functions.tsx, style-props.tsx, style-recipes.ts), then a centered statement and a three-column feature row (Zero runtime, Type safe, Amazing DX).
- **Further bands.** Generated-CSS and design-token explainers, a recipes block, an official-course promo ("Panda Mastery"), testimonials and a footer ("Build modern websites with build-time, type-safe CSS-in-JS.").
- **Docs pages.** Left sidebar, centered article column with a "Copy Page" split button, right "On this page" rail; top tab bar (Get Started, Styling, Recipes, Theming, Design Systems, Reference, Community, Sponsor).
- **Spacing.** Measured gaps cluster on 8px, 15px, 11.25px and 30px; paddings on 15px, 11.25px, 22.5px, 30px. They are listed as `{spacing.s1}` to `{spacing.s10}`.

## Elevation & Depth

Depth is graphic, not atmospheric:
- **Hard offset shadow:** `rgb(0, 0, 0) 4px 4px 0px 0px` on "Browse Guides" and testimonial cards (17 occurrences), plus one `rgb(250, 250, 250) 4px 4px 0px 0px` variant. No blur.
- **3px solid black borders** on those same elements (the black border color is measured 19 times).
- **Flat fills** for everything else; the docs pages measured no box-shadows at all and use `#e5e5e5` or 4%-black hairlines.
- Band changes (yellow, white, black, cream `#fdfcf0`) create the page rhythm.
The preset's own shadow scale (`@pandacss/preset-panda`: `xs` to `2xl`, with `md` as `0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)`) exists as variables on the site but the marketing chrome uses the hard offset instead.

## Shapes

- `{rounded.xl}` (10px): the small code-tab buttons.
- `{rounded.button-large}` (13px): the large hero buttons.
- `{rounded.card}` (11.25px): testimonial cards.
- `{rounded.lg}` (7.5px): the docs search field.
- `{rounded.md}` (5.63px): the Playground button; docs sidebar links round their right-hand corners with it and docs code panels round their top corners with it.
- `{rounded.sm}` (3.75px): tiny elements, the left half of the "Copy Page" split button.
- `{rounded.pill}` (9999px): measured on three elements (round icons).
These match Panda's radii scale at a 15px rem (`sm` 0.25rem, `md` 0.375rem, `lg` 0.5rem, `xl` 0.75rem in `preset-panda`).

## Components

### Large buttons
`{components.button-large-dark}` ("Browse Guides"): black fill, white 22.5px/600 label, 3px black border, `{rounded.button-large}`, 58px tall, 4px hard shadow. "Get Started" next to it is white with a black border and black hard shadow (as seen in the capture).

### Code tab button
`{components.button-primary}`: `{colors.primary}` fill, black label (15px/500), `{rounded.xl}`, 45px tall, zero horizontal padding. Inactive tabs are dark with light text.

### Playground button
On the header (both home and docs): black fill, white 13.125px/600 label, 5.63px radius.

### Eyebrow badge
`{components.link}`: uppercase 11.25px mono text in `{colors.ink-eyebrow}` preceded by a black "NEW" chip, plus an arrow.

### Nav
`{components.nav}` and `{components.nav-link}`: white bar, `{colors.ink-strong}` 15px text; active docs nav markers use a yellow vertical rule (seen in the docs capture).

### Code card
Dark gray panel (#282828) with rounded corners, three tabs, monospace text using `{colors.code-text}`, `{colors.code-green}`, `{colors.code-muted}` and warm red/yellow keywords.

### Testimonial card
`{components.card}`: `{colors.surface-card}` fill, 3px black border, `{rounded.card}`, 18.75px 22.5px padding, hard shadow; avatar, name, handle and quote.

### Docs code block
Light gray (`#f5f5f5`) panel with 5.63px radius, a copy icon at top right and tab headers ("css function", "Style props", "Patterns", "Recipes") with an underline marking the active tab.

### Footer
`{components.footer}`: top border `{colors.hairline}`, tagline, "Copyright (c) 2026, Proudly made by the Chakra team" per the docs page text.

## Design System Architecture

Panda CSS is itself a design-token and styling system, and the site is built with it.

- **Tokens.** Panda's token format follows the W3C Design Tokens spec: each token is an object with a `value` (https://panda-css.com/docs/theming/tokens). Core tokens live under `theme.tokens`; semantic tokens (e.g. `danger`, `success`, `muted`) reference core tokens and can have `_dark` values.
- **Default preset.** `@pandacss/preset-panda` supplies default colors (Tailwind-like ramps including `yellow.50` to `yellow.950`), radii (`xs` 0.125rem to `4xl` 2rem and `full` 9999px), shadows, durations, easings, blurs, spacing, sizes, font sizes (`2xs` 0.5rem to `9xl` 8rem), weights, letter-spacings and line-heights (source: https://github.com/chakra-ui/panda/tree/main/packages/preset-panda/src).
- **Output.** Static atomic CSS in cascade layers (`reset, base, tokens, recipes, utilities`), with class names like `.mt_2` and variables like `--space-2`, `--fontSizes-sm`, `--color-gray-600`, as shown on the home page.
- **Authoring styles.** `css()` functions, style props via a generated JSX package, patterns (`stack`, `circle`), and `cva`/recipes for variants (https://panda-css.com).
- **This site.** `:root` on panda-css.com exposes `--colors-*`, `--radii-*`, `--shadows-*`, `--spacing-*`, `--font-sizes-*`, `--breakpoints-*` and `--font-mono`, i.e. the generated token variables; a semantic `bg.emphasized` / `fg.muted` style naming also appears (`--colors-fg-muted` is `#525252`).
- **Governance.** Maintained by the Chakra team (footer: "Proudly made by the Chakra team"); repository https://github.com/chakra-ui/panda.
- **Component library.** Panda is a styling engine rather than a component kit; there is no component set to document here.

## Do's and Don'ts

### Do
- Do use yellow (`{colors.brand-yellow}`, `{colors.primary}`) as the single accent hue and black/white for everything else.
- Do pair 3px black borders with hard 4px offset black shadows on emphasized buttons and cards.
- Do set display text in Onest 700 with tracking about -0.05em.
- Do use Geist Mono for code and uppercase eyebrows with 0.9px tracking.
- Do alternate yellow, white and black bands.
- Do reference real tokens (`yellow.300`, `gray.600`) in code samples.

### Don't
- Don't blur the shadow; the signature is a zero-blur offset.
- Don't introduce a second accent color on the marketing page.
- Don't round buttons into pills; button radii are 10-13px.
- Don't use light weights for headings; measured heading weights are 600-700.
- Don't carry the hard-shadow style into the docs pages, which are flat.

## Responsive Behavior

- **Headline.** 210px at 1280px and 105px at 390px (`{typography.display-mobile}`), a straight halving with matching tracking (-10.5px to -5.25px).
- **Hero.** The mascot and text share the row on desktop; at mobile width the capture was not inspected beyond the typography numbers.
- **Docs layout.** Three columns on desktop (sidebar, article, on-this-page rail). Panda's own breakpoints are exposed as variables (`--breakpoints-sm` 640px, `--breakpoints-xl` 1280px, `--sizes-breakpoint-2xl` 1536px).
- **Ticker.** Continuously scrolling and clipped by the viewport.
- **Touch targets.** Large buttons are 58px tall; tab buttons 45px.

## Iteration Guide

1. Choose a band color: `{colors.brand-yellow}` for hero, `{colors.canvas}` for code sections, `{colors.page-body}` for content.
2. Headline in `{typography.display}`; support copy in `{typography.body}`.
3. Primary actions: `{components.button-large-dark}` plus a white twin with the same border and shadow.
4. Code in Geist Mono on a dark panel using `{colors.code-text}`, `{colors.code-green}`, `{colors.code-muted}` and `{colors.primary}` for the active tab.
5. Cards: `{components.card}` with border and hard shadow.
6. For documentation UI, drop shadows and use `{colors.hairline}`, `{colors.ink-strong}` text and `{rounded.md}`.
7. Voice: upbeat, plain and confident ("Styling library you'll enjoy using", "Zero runtime", "Amazing DX"), with an emoji or two.
