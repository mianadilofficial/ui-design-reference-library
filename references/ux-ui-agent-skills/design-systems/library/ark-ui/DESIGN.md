---
version: alpha
name: "Ark UI"
category: "Headless UI"
description: "Ark UI is Chakra Systems' headless component library (45+ components for React, Solid, Vue, Svelte on Zag.js). Its site uses Wix Madefor Text on a warm #fdfdfc canvas, warm greys (#21201c, #63635e, #e9e8e6), one coral accent #eb5e41 on 4px-radius buttons, 60px/700 hero type and a dark #191918 code panel."
colors:
  canvas: "#fdfdfc"
  page-largest: "#ffffff"
  ink: "#63635e"
  primary: "#eb5e41"
  on-primary: "#ffffff"
  code-panel: "#191918"
  ink-strong: "#21201c"
  code-ink: "#e6edf3"
  border-subtle: "#e9e8e6"
  border-default: "#cfceca"
  border-muted: "#dad9d6"
  border-error: "#e5484d"
  bg-subtle: "#f9f9f8"
  bg-muted: "#f1f0ef"
  ink-subtle: "#82827c"
  primary-text: "#c9453b"
  primary-tint: "#fff8f7"
  primary-tint-2: "#ffefef"
  park-border: "#d9d9d9"
  primary-hover: "#de5045"
typography:
  display:
    fontFamily: >-
      "Wix Madefor Text", "Wix Madefor Text Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 60px
    fontWeight: 700
    lineHeight: 72px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: >-
      "Wix Madefor Text", "Wix Madefor Text Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 44px
    letterSpacing: "-0.72px"
  heading:
    fontFamily: >-
      "Wix Madefor Text", "Wix Madefor Text Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 44px
    letterSpacing: "-0.72px"
  subheading:
    fontFamily: >-
      "Wix Madefor Text", "Wix Madefor Text Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
  body:
    fontFamily: >-
      "Wix Madefor Text", "Wix Madefor Text Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: >-
      "Wix Madefor Text", "Wix Madefor Text Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
  nav:
    fontFamily: >-
      "Wix Madefor Text", "Wix Madefor Text Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: >-
      "Wix Madefor Text", "Wix Madefor Text Fallback", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  code:
    fontFamily: '"Roboto Mono", "Roboto Mono Fallback", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace'
    fontSize: 13px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 28px
    height: 64px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 48px
  nav-bar:
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink-strong}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 28px
    height: 64px
    borderColor: "{colors.border-subtle}"
  showcase-card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.border-subtle}"
  code-panel:
    backgroundColor: "{colors.code-panel}"
    textColor: "{colors.code-ink}"
    typography: "{typography.code}"
    rounded: "{rounded.md}"
    borderColor: "{colors.border-subtle}"
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.xs}"
    padding: 0px 12px
    height: 40px
    borderColor: "{colors.park-border}"
---

# Ark UI

## Overview

Ark UI is a headless (unstyled) component library from Chakra Systems: "a headless component library that provides the foundation for building high-quality, accessible design systems and web applications", built on Zag.js state machines, with 45+ components that share one API across React, Solid, Vue and Svelte (README, https://github.com/chakra-ui/ark). Because the product ships no visual style, "the design" of Ark UI is the documentation and marketing site at ark-ui.com, plus the styled layer maintained alongside it, Park UI (built with Ark UI and Panda CSS, now part of the Chakra UI organisation).

The homepage (capture) is a warm, light, developer-product page: a faint peach wash fades from the top over a #fdfdfc canvas, with large translucent coral squares and a faint "A" monogram behind the hero. Left-aligned hero: a small pill banner "[New] Navigation Menu component →", then "Unstyled UI components for your Design System" at 60px/700 with "Unstyled" and "Design System" in coral (#eb5e41), a grey 18px description ("A headless library with 45+ accessible components. Bring your own styles and build a design system that works across React, Solid, Vue, and Svelte."), a solid coral "Get Started" button next to a white outlined "Show Components" button, and a row of four framework icons (React, Solid, Vue, Svelte). Below: a 2x2 feature grid (Truly Headless, Framework Agnostic, Accessible by Default, State Machine Powered) each with a small bordered icon tile, beside a dark code panel with framework tabs and a Slider example. Then a centred "Built with Ark UI / See What's Possible" section with a three-column grid of bordered showcase cards (Chakra UI, AdGuard, OVHcloud Design System, HASH, Pando Design System, NDLA), each with a screenshot and a two-line caption.

Key characteristics:
- **Warm neutrals, one coral accent.** A warm grey ramp (#21201c to #fdfdfc) plus coral #eb5e41 for CTAs, emphasis words and eyebrow labels.
- **Wix Madefor Text** for all UI text; Roboto Mono for code.
- **Tight display type.** 60px/700 with -1.2px tracking; section titles 36px/600 with -0.72px.
- **Small radii.** 4px buttons, 6px cards, 8px code panels.
- **Border-led depth.** 1px #e9e8e6 hairlines; shadows only on floating layers.
- **Product-first copy.** Short, capability-led headings ("Truly Headless", "Accessible by Default").

## Colors

All hexes come from the live site, whose `:root` exposes the Panda CSS / Park UI semantic tokens (`--colors-*`), for example `--colors-coral-9: #EB5E41` and `--colors-gray-light-12: #21201c`.

### Brand
- **Primary** `{colors.primary}` (#eb5e41): `--colors-coral-9` / `--colors-coral-default`; Get Started and Join Discord buttons, accent words, eyebrow labels.
- **On primary** `{colors.on-primary}` (#ffffff): `--colors-coral-fg: white`.
- **Primary hover** `{colors.primary-hover}` (#de5045): measured after hover; equals `--colors-coral-emphasized`.
- **Primary text** `{colors.primary-text}` (#c9453b): `--colors-coral-text` / coral-11, accessible coral for text on light.
- **Primary tint** `{colors.primary-tint}` (#fff8f7) and `{colors.primary-tint-2}` (#ffefef): coral-1 and coral-2, the peach wash.

### Neutrals
- **Canvas** `{colors.canvas}` (#fdfdfc): `--colors-bg-canvas` / gray-1; the page.
- **Page largest** `{colors.page-largest}` (#ffffff): `--colors-bg-default`; card and section fills (largest DOM area).
- **Bg subtle** `{colors.bg-subtle}` (#f9f9f8) and **bg muted** `{colors.bg-muted}` (#f1f0ef): gray-2 and gray-3.
- **Ink strong** `{colors.ink-strong}` (#21201c): `--colors-fg-default`, gray-12; headings.
- **Ink** `{colors.ink}` (#63635e): `--colors-fg-muted`, gray-11; body copy (1663 characters).
- **Ink subtle** `{colors.ink-subtle}` (#82827c): `--colors-fg-subtle`.
- **Border subtle** `{colors.border-subtle}` (#e9e8e6): `--colors-border-subtle`, the hairline on cards.
- **Border muted** `{colors.border-muted}` (#dad9d6), **border default** `{colors.border-default}` (#cfceca): stronger hairlines.
- **Border error** `{colors.border-error}` (#e5484d): `--colors-border-error`.

### Code panel
- **Code panel** `{colors.code-panel}` (#191918) with **code ink** `{colors.code-ink}` (#e6edf3): the dark editor card, with a GitHub-dark-like syntax palette (greens, blues, reds) used only inside code.

### Park UI reference
- **Park border** `{colors.park-border}` (#d9d9d9): the border of Park UI's default input (measured on park-ui.com, where the neutral pair of #202020 ink and #0090ff accent differs from Ark's coral). Park UI lets you pick one of 24 Radix accent colours and one of six greys (neutral, mauve, olive, sage, sand, slate). Ark's coral accent is therefore one configuration of that kind, not the system itself.

## Typography

| Role | Token | Size / weight / line | Letter-spacing |
|---|---|---|---|
| Hero headline | `{typography.display}` | 60px / 700 / 72px | -1.2px |
| Hero headline, mobile | `{typography.display-mobile}` | 36px / 700 / 44px | -0.72px |
| Section title | `{typography.heading}` | 36px / 600 / 44px | -0.72px |
| Card/feature title | `{typography.subheading}` | 24px / 600 / 32px | normal |
| Body | `{typography.body}` | 18px / 400 / 28px | normal |
| Large button | `{typography.button}` | 18px / 600 / 28px | normal |
| Small button | `{typography.button-secondary}` | 16px / 600 / 24px | normal |
| Nav link | `{typography.nav}` | 16px / 400 / 24px | normal |
| Code | `{typography.code}` | 13px / 400 | normal |

The family is `"Wix Madefor Text"` (with a generated fallback face, then `ui-sans-serif, system-ui` and the system stack); code is `"Roboto Mono"`. The docs pages use 36px/700/44px page titles, 16px/400/28px body and 14px/400/20px for reference text; Park UI's own site uses Outfit.

### Font substitutes
Wix Madefor Text is a free Google Font, so no substitute is needed; otherwise use `ui-sans-serif, system-ui`.

## Layout

- 72px-high header: ARK wordmark left in coral, centred links (Docs, Showcase, Blog, Plus with a coral spark icon), and right a 'Search ⌘K' field with GitHub and theme toggle icons.
- Hero content is left-aligned in a narrow column (headline wraps in two lines), with decorative squares to the right.
- Feature grid is two columns of two items on the left half; code panel (560px wide) fills the right.
- Showcase: three equal columns of cards, each 384px wide in the measurement.
- Breakpoints from the site's tokens: sm 640px, xl 1280px, 2xl 1536px.
- Spacing steps measured: 4, 6, 8, 10, 12, 16, 20, 24, 28 and 32px; Panda spacing tokens are rem multiples (`--sizes-1: 0.25rem`, `--spacing-12: 3rem`).

## Elevation & Depth

- Almost everything is flat: hairline borders (#e9e8e6) and tonal fills (#f9f9f8, #f1f0ef).
- The site's shadow tokens (rootVars) are: `xs 0px 1px 2px #1f180021, 0px 0px 1px #19140035`; `sm 0px 2px 4px #20100010, 0px 0px 1px #19140035`; `md 0px 4px 8px ...`; `lg 0px 8px 16px #20100010, 0px 0px 1px #19140035`; `xl 0px 16px 24px ...`; `2xl 0px 24px 40px ...`.
- Measured on the pages: `rgba(32, 16, 0, 0.063) 0px 8px 16px 0px, rgba(25, 20, 0, 0.208) 0px 0px 1px 0px` (matches the lg token) on the Dialog and Select docs pages, and `rgba(31, 24, 0, 0.13) 0px 1px 2px 0px, rgba(25, 20, 0, 0.208) 0px 0px 1px 0px` (matches xs) on the homepage.
- Docs buttons show a pressed look using inset borders: `rgb(218, 217, 214) 0px -2px 0px 0px inset, rgb(218, 217, 214) 0px 0px 0px 1px inset`.

## Shapes

- Radii tokens (site): `xs 0.125rem`, `sm 0.25rem` (4px), `md 0.375rem` (6px), `lg 0.5rem` (8px), `xl 0.75rem`, `2xl 1rem`, `3xl 1.5rem`, `full 9999px`, plus nested levels `l1 0.125rem`, `l2 0.25rem`, `l3 0.375rem` (Park UI's three nested radius levels).
- In use: buttons 4px `{rounded.xs}`; showcase cards 6px `{rounded.sm}`; code panel 8px `{rounded.md}`; pills and the announcement badge `{rounded.pill}`.

## Components

### Buttons
- **Primary:** `{components.button-primary}`: coral fill, white 18px/600 label, 64px high, padding 0 28px, 4px radius; hover #de5045.
- **Secondary:** `{components.button-secondary}`: 48px high, 16px/600, padding 0 20px (the "Join Discord" button).
- **Outline:** `{components.button-outline}`: white, 1px border (#19140035), ink label, 64px high; "Show Components".
- **Docs utility button:** "Copy Page": 32px high, 12px/600, padding 0 12px, radius 4px 0 0 4px as the left half of a split button, 1px #19140035 border.
- Park UI reference button: 40px high, padding 0 14px, 14px/600, radius 4px (measured at park-ui.com).

### Inputs
`{components.text-input}`: Park UI's default input, 40px high, 4px radius, 1px #d9d9d9 border, 16px/400, padding 0 12px (measured at park-ui.com/docs/components/input). The Ark site search field is a 36px compact field with a ⌘K hint. Park's documented component heights are xs 32, sm 36, md 40, lg 44, xl 48 and 2xl 64px.

### Cards
`{components.showcase-card}`: white, 1px #e9e8e6 border, 6px radius, image on top, 16px title and a one-line caption. `{components.code-panel}`: #191918, 8px radius, tabs row (React, Solid, Vue, Svelte) and a copy icon.

### Badge / announcement pill
An outlined pill (9999px) with a coral spark icon, small text and an arrow.

### Navigation and footer
`{components.nav-bar}`: 72px, links in ink-strong 16px/400. Footer text: "A project by Chakra Systems", then Docs, GitHub, Twitter, Discord.

## Art Direction and Imagery

- **Peach atmosphere.** A vertical gradient from coral-tinted peach at the top to the #fdfdfc canvas; floating translucent coral squares at different sizes and a large faint monogram "A" give depth without photography.
- **Real code as imagery.** The dark Slider example (`import { Slider } from '@ark-ui/react/slider'`, `useState`, `<Slider.Root min={-50} max={50} ...>`) is the hero's second focal point; code colours are red keywords, blue strings and green values on #191918.
- **Framework icons.** React, Solid, Vue and Svelte logos in their brand colours at about 20px, with 14px labels.
- **Feature icons.** Each feature has a small bordered tile with a coral line icon.
- **Showcase thumbnails.** Real third-party sites (Chakra UI, AdGuard, OVHcloud, HASH.dev, Pando, NDLA) shown as screenshots on white cards; some are dark, some bright photography, which contrasts with the quiet chrome.
- **Floating chat button.** A round coral button with a speech icon sits at the right edge.

## Microcopy Patterns

| Pattern | Example |
|---|---|
| Announcement | "[New] Navigation Menu component" |
| Hero headline with two coral phrases | "Unstyled UI components for your Design System" |
| Description sentence | "Bring your own styles and build a design system that works across React, Solid, Vue, and Svelte." |
| Feature title + two-line text | "Truly Headless: No default styles to fight. Bring your own CSS" |
| Eyebrow + title + lede | "Built with Ark UI / See What's Possible / Explore real-world applications ..." |
| Buttons | "Get Started", "Show Components", "Join Discord", "Copy Page" |
| Footer | "A project by Chakra Systems" |

Voice: direct, developer-to-developer, second-person ("Bring your own", "Write once, use everywhere" in the README), no marketing superlatives.

## Measured Reference

| Item | Value |
|---|---|
| Canvas | #fdfdfc (body); #ffffff largest area |
| Ink / body | #21201c / #63635e |
| Primary / hover | #eb5e41 / #de5045 |
| Hero CTA | 64px, padding 0 28px, 4px radius, 18px/600 |
| Join Discord CTA | 48px, padding 0 20px, 4px radius, 16px/600 |
| Docs page title | 36px / 700 / 44px |
| Docs body | 16px / 400 / 28px (14px / 20px in reference tables) |
| Header | 72px |
| Showcase card | 384px wide, 6px radius, 1px #e9e8e6 |
| Code panel | 560px wide, 8px radius, #191918 |
| Font sizes by characters | 14px (732), 16px (654), 13px (415), 20px (391), 18px (187), 24px (74), 36px (67), 60px (43) |
| Radii seen | 6px, 4px, 9999px, 8px (plus 3.5px and 2px inside docs demos) |

## Token Ladders (site `:root`)

| Group | Values |
|---|---|
| Font sizes | 2xs 0.5rem, xs 0.75rem, sm 0.875rem, md 1rem, xl 1.25rem, 3xl 1.875rem, 4xl 2.25rem, 5xl 3rem, 6xl 3.75rem, 8xl 6rem, 9xl 8rem |
| Radii | 2xs 0.0625rem, xs 0.125rem, sm 0.25rem, md 0.375rem, lg 0.5rem, xl 0.75rem, 2xl 1rem, 3xl 1.5rem, full 9999px |
| Gray (light) 1 to 6 | #fdfdfc, #f9f9f8, #f1f0ef, #e9e8e6, #e2e1de, #dad9d6 |
| Gray (light) 7 to 12 | #cfceca, #bcbbb5, #8d8d86, #82827c, #63635e, #21201c |
| Coral (light) 1 to 6 | #fff8f7, #ffefef, #ffe5e4, #ffdbda, #ffd2d1, #ffc9c8 |
| Coral 7 to 12 (light) | #ffbeb8, #ffb2a8, #eb5e41, #de5045, #c9453b, #762d25 |
| Fonts | sans Wix Madefor Text, mono Roboto Mono, serif ui-serif stack |

The docs pages use a 36px/700/44px page title and a grey 16px/28px lede; each page has a "Copy Page" split button (32px high).
The tables above are taken from the site's own custom properties, so they are the best statement of what the system defines; only a subset is visible on the homepage.

## Design System Architecture

- **Ark UI itself is headless.** Its components expose state and structure through data attributes: `data-scope` (e.g. `dialog`), `data-part` (e.g. `content`, `backdrop`) and `data-state` (`open`/`closed`), plus CSS variables such as `--layer-index` and `--nested-layer-count` (https://ark-ui.com/docs/components/dialog). You bring any styling solution (Tailwind, CSS-in-JS, plain CSS).
- **Park UI is the styled layer:** "Beautifully designed components built with Ark UI and Panda CSS" (https://park-ui.com). Theming picks one accent (24 Radix colours) and one grey (neutral, mauve, olive, sage, sand, slate), three nested radius levels (l1, l2, l3), shadows from xs to 2xl and component heights xs 32px to 2xl 64px (https://park-ui.com/docs/theming). Colours are Radix-style 12-step scales per mode, instead of Panda's 50 to 950.
- **The site is built on that stack.** Its `:root` exposes Panda tokens: `--colors-coral-1..12` (light and dark variants), `--colors-gray-light-1..12` and alpha steps, semantic roles (`--colors-bg-canvas`, `--colors-bg-subtle`, `--colors-fg-default`, `--colors-fg-muted`, `--colors-border-subtle`, `--colors-border-error`), `--radii-*`, `--shadows-*`, `--font-sizes-*`, `--fonts-sans`, `--fonts-mono`.
- Repository, MIT licence and component count: https://github.com/chakra-ui/ark.
- Engine: Zag.js finite state machines, giving the same behaviour across frameworks.

## Do's and Don'ts

### Do
- Keep surfaces white or #fdfdfc with #e9e8e6 hairlines, and use coral sparingly for the main CTA and one or two accent words in a headline.
- Use Wix Madefor Text at 700 with negative tracking for the hero, 600 for titles.
- Keep buttons at 4px radius; cards at 6px; code at 8px.
- Show real code next to marketing claims.
- Style Ark components through `[data-scope][data-part]` and `[data-state]` selectors.
- Use the warm grey ramp for text: #21201c, #63635e, #82827c.

### Don't
- Don't use pure black or a cool grey; the ramp is warm.
- Don't fill large areas with coral; the peach wash is faint (#fff8f7).
- Don't add heavy shadows; elevation is for popups only.
- Don't promise built-in styles: the library is unstyled by design.
- Don't mix Park UI's blue default accent into an Ark-branded page.

## Responsive Behavior

- The extractor recorded a mobile view where the hero headline reduces from 60px to 36px (line height 44px, tracking -0.72px).
- Site breakpoints: sm 640px, xl 1280px, 2xl 1536px (rootVars).
- The three-column showcase grid and the feature/code split are wide-layout patterns; their narrow behaviour was not captured.
- Buttons keep fixed heights (64, 48, 40, 32px).

## Iteration Guide

1. Start with Park UI's preset concept: choose one accent and one grey, then derive semantic roles (canvas, default/muted/subtle foreground, subtle/default borders).
2. Set the type: Wix Madefor Text, hero 60/72 at 700 with -1.2px tracking, body 18/28.
3. Build the button at 64px with a 4px radius, then the outline version with a 1px #19140035 border.
4. Add showcase cards (6px radius, #e9e8e6 border) and the dark code panel (8px radius).
5. Wire the headless behaviour with data-attribute selectors.
6. Verify contrast: coral text should use #c9453b rather than #eb5e41.
