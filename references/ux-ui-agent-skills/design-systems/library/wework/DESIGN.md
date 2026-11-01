---
version: alpha
name: WeWork
category: "Real Estate & PropTech"
description: "WeWork (wework.com) runs a black-and-white editorial system: white #ffffff page, #000000 ink with #444444 secondary text, a custom webfont served as \"Serif\" at weight 400 for every headline (56px/61.6px hero, 36px/40px sections, 24px/32px card titles), Apercu 400/600 for UI and body (16px/25.888px, the 1.618 golden-ratio line height), and a soft periwinkle brand blue #678fff for 8px-radius CTAs that hover to #3b5bbe with white text; cards are 12px-radius with a 1px #e6e6e6 border and a 20px grey glow."

colors:
  primary: "#678fff"
  primary-hover: "#3b5bbe"
  on-primary: "#000000"
  on-primary-hover: "#ffffff"
  blue-light: "#a9c4ff"
  blue-ultralight: "#e1e9ff"
  link: "#3b5bbe"
  ray-blue: "#0000ff"
  canvas: "#ffffff"
  surface-grey: "#f0f0f0"
  surface-mid: "#e3e3e3"
  surface-soft: "#f7f7f7"
  ink: "#000000"
  ink-secondary: "#444444"
  gray-medium: "#7d7d7d"
  gray-light: "#b7b7b7"
  border-card: "#e6e6e6"
  border-control: "#cecece"
  border-strong: "#666666"
  yellow-functional: "#e6c416"

typography:
  display-hero:
    fontFamily: 'Serif, ui-serif, georgia, cambria, "Times New Roman", times, serif'
    fontSize: 56px
    fontWeight: 400
    lineHeight: 61.6px
  display-stat:
    fontFamily: 'Serif, ui-serif, georgia, cambria, "Times New Roman", times, serif'
    fontSize: 44px
    fontWeight: 400
    lineHeight: 48.4px
  heading-lg:
    fontFamily: 'Serif, ui-serif, georgia, cambria, "Times New Roman", times, serif'
    fontSize: 36px
    fontWeight: 400
    lineHeight: 40px
  statement:
    fontFamily: 'Serif, ui-serif, georgia, cambria, "Times New Roman", times, serif'
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
  heading-md:
    fontFamily: 'Serif, ui-serif, georgia, cambria, "Times New Roman", times, serif'
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  display-hero-mobile:
    fontFamily: 'Serif, ui-serif, georgia, cambria, "Times New Roman", times, serif'
    fontSize: 32px
    fontWeight: 400
    lineHeight: 35.2px
  heading-lg-mobile:
    fontFamily: 'Serif, ui-serif, georgia, cambria, "Times New Roman", times, serif'
    fontSize: 28px
    fontWeight: 400
    lineHeight: 35px
  heading-sm:
    fontFamily: 'Serif, ui-serif, georgia, cambria, "Times New Roman", times, serif'
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  article-title:
    fontFamily: 'Serif, ui-serif, georgia, cambria, "Times New Roman", times, serif'
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  section-label:
    fontFamily: 'Apercu, avenir, -apple-system, blinkmacsystemfont, "Helvetica Neue", helvetica, Calibri, Roboto, arial, sans-serif'
    fontSize: 20px
    fontWeight: 600
    lineHeight: 26px
  lead:
    fontFamily: 'Apercu, avenir, -apple-system, blinkmacsystemfont, "Helvetica Neue", helvetica, Calibri, Roboto, arial, sans-serif'
    fontSize: 18px
    fontWeight: 400
    lineHeight: 23.4px
  select:
    fontFamily: 'Apercu, avenir, -apple-system, blinkmacsystemfont, "Helvetica Neue", helvetica, Calibri, Roboto, arial, sans-serif'
    fontSize: 18px
    fontWeight: 400
    lineHeight: 40px
  body:
    fontFamily: 'Apercu, avenir, -apple-system, blinkmacsystemfont, "Helvetica Neue", helvetica, Calibri, Roboto, arial, sans-serif'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.888px
  body-relaxed:
    fontFamily: 'Apercu, avenir, -apple-system, blinkmacsystemfont, "Helvetica Neue", helvetica, Calibri, Roboto, arial, sans-serif'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: 'Apercu, avenir, -apple-system, blinkmacsystemfont, "Helvetica Neue", helvetica, Calibri, Roboto, arial, sans-serif'
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22.4px
  nav:
    fontFamily: 'Apercu, avenir, -apple-system, blinkmacsystemfont, "Helvetica Neue", helvetica, Calibri, Roboto, arial, sans-serif'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  small:
    fontFamily: 'Apercu, avenir, -apple-system, blinkmacsystemfont, "Helvetica Neue", helvetica, Calibri, Roboto, arial, sans-serif'
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  choice-label:
    fontFamily: 'Apercu, avenir, -apple-system, blinkmacsystemfont, "Helvetica Neue", helvetica, Calibri, Roboto, arial, sans-serif'
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  caption:
    fontFamily: 'Apercu, avenir, -apple-system, blinkmacsystemfont, "Helvetica Neue", helvetica, Calibri, Roboto, arial, sans-serif'
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
  eyebrow-mono:
    fontFamily: '"Apercu Mono", sfmono-regular, menlo, monaco, consolas, "Liberation Mono", "Courier New", monospace'
    fontSize: 12px
    fontWeight: 200
    lineHeight: 20px

rounded:
  ray: 4px
  sm: 6px
  control: 8px
  card: 12px
  pill: 9999px

spacing:
  hair: 2px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  2xl: 32px
  3xl: 40px
  4xl: 48px
  5xl: 64px
  6xl: 80px
  grid-margin: 60px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.control}"
    padding: 7px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary-hover}"
    borderColor: "{colors.primary-hover}"
  button-search:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.control}"
    padding: 7px 24px
    height: 48px
    border: "1px solid #678fff"
  button-search-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.control}"
    padding: 7px 16px
    height: 40px
    border: "1px solid #678fff"
  button-secondary-hover:
    backgroundColor: "{colors.blue-ultralight}"
  button-ghost:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.control}"
    height: 40px
  button-ghost-hover:
    backgroundColor: "{colors.surface-grey}"
  button-form-submit:
    backgroundColor: "{colors.ray-blue}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.ray}"
    padding: 14px 24px
    height: 54px
    border: "1px solid #0000ff"
  hero-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    padding: 32px
  location-select:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink}"
    typography: "{typography.select}"
    rounded: "{rounded.control}"
    padding: 4px 36px 0px
    height: 46px
  solution-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.card}"
    padding: 0px
    width: 270px
    height: 460px
    border: "1px solid #e6e6e6"
    boxShadow: "rgba(184, 184, 184, 0.16) 0px 0px 20px 0px"
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
    textDecoration: underline
    rounded: "{rounded.control}"
    padding: 4px 2px
  link-hover:
    textDecoration: underline
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 72px
    boxShadow: "rgba(184, 184, 184, 0.16) 0px 0px 20px 0px"
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 64px 0px
---

## Overview

WeWork's homepage (`https://www.wework.com/`, measured October 2026) is calm, editorial and almost monochrome.
A 72px white header holds the lowercase black "wework" wordmark, four plain nav items (Locations, Who we serve,
Workspace solutions, Resources), a globe "English (US)" switcher, a periwinkle "Find space" button and a white
"Log in" button outlined in the same periwinkle.

The hero is a full-width architectural photograph (a glazed atrium in "The Link, Johannesburg, South Africa", per its
caption with carousel arrows) with a white 12px-radius card floating on the left. The card holds the headline
"Discover a smarter way to work" in WeWork's serif webfont at 56px (`{typography.display-hero}`), a grey 16px intro,
two choice tiles (Private Office — selected, filled `#e1e9ff` with a periwinkle border — and Coworking) and a grey
`#f0f0f0` location select ("Bangkok") with a periwinkle "Search" button.

Below, sections are white and generously spaced: a serif 36px title "Find the perfect real estate solution to fit
your needs" with a "View all solutions" link, four solution cards (icon, serif 24px title, grey body, underlined
"Learn more", photo at the bottom), a "Trusted by the world's top companies" logo strip, then alternating
photo/text blocks ("Workspace made simple", "Enterprise-grade solutions…") with candid people-at-work photography.

**Key Characteristics:**
- Serif-led editorial voice: every heading is the regular-weight serif; no bold headlines.
- Black ink on white; `#444444` for supporting copy.
- One soft brand blue `#678fff` for CTAs (black label), darkening to `#3b5bbe` with a white label on hover.
- Apercu for UI and body, with the golden-ratio 1.618 line height (16px → 25.888px).
- 8px-radius controls, 12px-radius cards with a 1px `#e6e6e6` border and a soft 20px grey glow.
- Uppercase Apercu Mono at weight 200 for small editorial eyebrows ("RESEARCH AND INSIGHTS", "Ideas by WeWork").

## Colors

> **Sources:** homepage extraction (`desktop.roles`, frequencies, `rootVars`), a computed-style probe of the same page
> (SOURCES.json `_probes`), the official Ray design system source (`_colors.scss`, `_variables.scss`) and WeWork's
> brand-evolution newsroom post.

### Brand & Action
- **Brand Blue** (`{colors.primary}` — `#678fff`): `--ww-blue-brand`; "Find space" and "Search" fill, "Log in" outline, selected choice-tile border.
- **Blue Dark** (`{colors.primary-hover}` — `#3b5bbe`): `--ww-blue-dark`; measured hover fill of "Find space"/"Search" (label turns white) and the link colour.
- **On Primary** (`{colors.on-primary}` — `#000000`): CTA labels are black at rest.
- **On Primary Hover** (`{colors.on-primary-hover}` — `#ffffff`).
- **Blue Light** (`{colors.blue-light}` — `#a9c4ff`): `--ww-blue-light`.
- **Blue Ultralight** (`{colors.blue-ultralight}` — `#e1e9ff`): `--ww-blue-ultralight`; selected choice tile fill and "Log in" hover fill.
- **Ray Blue** (`{colors.ray-blue}` — `#0000ff`): pure blue of the lead-form "Submit" button and cookie links; identical to Ray's `$ray-color-blue-50` = `hsl(240, 100%, 50%)` and the site's `--ww-blue-1: 0 0 255`.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page and card background.
- **Surface Grey** (`{colors.surface-grey}` — `#f0f0f0`): `--ww-gray-background`; footer, location select, ghost-button hover.
- **Surface Mid** (`{colors.surface-mid}` — `#e3e3e3`): third-largest background area (`--ww-gray-5: 227 227 227`).
- **Surface Soft** (`{colors.surface-soft}` — `#f7f7f7`): `--ww-gray-3: 247 247 247`.

### Text
- **Ink** (`{colors.ink}` — `#000000`): headings and most body text (3,182 weighted characters).
- **Ink Secondary** (`{colors.ink-secondary}` — `#444444`): `--ww-gray-dark`; card descriptions, intro copy, legal lines.
- **Gray Medium** (`{colors.gray-medium}` — `#7d7d7d`) and **Gray Light** (`{colors.gray-light}` — `#b7b7b7`): `--ww-gray-medium`, `--ww-gray-light`.

### Lines
- **Border Card** (`{colors.border-card}` — `#e6e6e6`): 1px solution-card border (`--ww-gray-4: 230 230 230`).
- **Border Control** (`{colors.border-control}` — `#cecece`): `--ww-gray-ultralight`; the most frequent border colour (unselected choice tiles, fields).
- **Border Strong** (`{colors.border-strong}` — `#666666`): `--ww-gray-1: 102 102 102`.

### Functional
- **Yellow Functional** (`{colors.yellow-functional}` — `#e6c416`): `--ww-yellow-functional-medium`.
- The 2023 brand evolution introduced "a new focused set of secondary colors" ([WeWork newsroom](https://www.wework.com/newsroom/weworks-brand-evolution)); the post gives no hex values, so none are listed here beyond what the site's CSS exposes.

## Typography

### Font Family
- **Serif** — the headline face is served under the family name `Serif` (loaded 400 normal and 400 italic) with the
  fallback stack `ui-serif, georgia, cambria, "Times New Roman", times, serif` (`--ff-serif`). WeWork's newsroom states
  its primary typeface is "'WeWork Serif' – developed by A+ in collaboration with Franklyn"
  ([source](https://www.wework.com/newsroom/weworks-brand-evolution)); the CSS family name does not say "WeWork Serif",
  so the match is not confirmed.
- **Apercu** — UI and body (loaded 400 and 600), `--ff-base`. The newsroom names "Aperçu Pro for body copy"; Ray
  documents "Ray's primary fonts are Apercu and Apercu Mono", loaded from `//www-static.wework.com/apercu/apercu.css`
  ([Ray fonts](https://ray.wework.com/foundations/fonts/)).
- **Apercu Mono** — weight 200 uppercase eyebrows (`--ff-mono`).

### Hierarchy

| Token | Family | Size | Weight | Line height | Use |
|---|---|---|---|---|---|
| `{typography.display-hero}` | Serif | 56px | 400 | 61.6px | Hero h1 |
| `{typography.display-stat}` | Serif | 44px | 400 | 48.4px | Stats ("34", "600+") |
| `{typography.heading-lg}` | Serif | 36px | 400 | 40px | Section h2 |
| `{typography.statement}` | Serif | 36px | 400 | 43.2px | Statement paragraph |
| `{typography.heading-md}` | Serif | 32px | 400 | 40px | Article / form headings |
| `{typography.display-hero-mobile}` | Serif | 32px | 400 | 35.2px | Hero h1 at 390px |
| `{typography.heading-lg-mobile}` | Serif | 28px | 400 | 35px | Section h2 at 390px |
| `{typography.heading-sm}` | Serif | 24px | 400 | 32px | Card titles, testimonial quote |
| `{typography.article-title}` | Serif | 20px | 400 | 28px | Article link titles |
| `{typography.section-label}` | Apercu | 20px | 600 | 26px | "Trusted by the world's top companies" |
| `{typography.lead}` | Apercu | 18px | 400 | 23.4px | Stat labels |
| `{typography.select}` | Apercu | 18px | 400 | 40px | Hero location select |
| `{typography.body}` | Apercu | 16px | 400 | 25.888px | Body (1.618 ratio) |
| `{typography.body-relaxed}` | Apercu | 16px | 400 | 28px | Feature-block paragraphs |
| `{typography.button}` | Apercu | 16px | 600 | 22.4px | CTA labels |
| `{typography.nav}` | Apercu | 16px | 400 | 22.4px | Nav items, Log in |
| `{typography.small}` | Apercu | 14px | 400 | 19.6px | Testimonial attributions |
| `{typography.choice-label}` | Apercu | 14px | 600 | 21px | Choice tiles |
| `{typography.caption}` | Apercu | 12px | 400 | 16.8px | Legal/copyright |
| `{typography.eyebrow-mono}` | Apercu Mono | 12px | 200 | 20px | Uppercase eyebrows |

Letter-spacing is `normal` on all measured text, so no tracking is declared.

### Principles
- Headlines are always the serif at 400 — hierarchy comes from size, never weight.
- Apercu 600 is reserved for actions and short labels.
- Body copy keeps the 1.618 line height inherited from Ray (`$ray-base-line-height: 1.618`).

### Note on Font Substitutes
Both brand faces are proprietary. Use the site's own fallback stacks verbatim: `ui-serif, georgia, cambria, "Times New Roman", times, serif`
for headlines and `avenir, -apple-system, blinkmacsystemfont, "Helvetica Neue", helvetica, Calibri, Roboto, arial, sans-serif` for body.

## Layout

### Spacing System
- Ray's documented scale: "Most common building blocks: 6rem (96px), 4rem (64px), 2rem (32px), 1rem (16px), 0.5rem (8px)";
  less common 48/24/4px; least common 40/20/12px; "The base unit is 8pt" ([Ray spacing](https://ray.wework.com/foundations/spacing/)).
- **Measured gaps:** 4px, 24px, 8px, 32px, 16px, 80px, 40px, 2px, 12px, 48px, 56px, 160px.
- **Measured paddings:** 4px, 2px, 32px, 16px, 12px, 24px, 64px.
- Tokens: `{spacing.hair}` 2 · `{spacing.xs}` 4 · `{spacing.sm}` 8 · `{spacing.md}` 12 · `{spacing.lg}` 16 · `{spacing.xl}` 24 ·
  `{spacing.2xl}` 32 · `{spacing.3xl}` 40 · `{spacing.4xl}` 48 · `{spacing.5xl}` 64 · `{spacing.6xl}` 80 · `{spacing.grid-margin}` 60.

### Grid & Container
The live CSS still carries Ray's grid variables: `--ray-layout-grid-columns-desktop: 12`, `-tablet: 8`, `-phone: 4`;
gutters 24px / 24px / 16px; margins 60px / 48px / 16px; column width 72px. Ray's source sets breakpoints
`desktop: 1195px, tablet: 600px, phone: 0px` and a desktop max width of 1440px
([`_variables.scss`](https://github.com/wework/ray/blob/master/packages/core/src/global/_variables.scss)).
In the capture, sections align to a centred column with matching left/right margins; solution cards run 4-up;
feature blocks are 2-column photo/text splits that alternate sides.

### Whitespace Philosophy
Large vertical gaps (80px and 160px measured) separate sections; each section has one serif headline, short grey
copy and one link. Density is low; photography carries the warmth.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Sections, footer |
| Glow | `rgba(184, 184, 184, 0.16) 0px 0px 20px 0px` | Header, solution cards |
| Hairline | 1px `#e6e6e6` / `#cecece` borders | Cards, choice tiles |
| Floating card | white 12px card over full-bleed photo | Hero |
| Focus (Ray) | `0 0 0 rem(3px) transparentize($ray-color-blue-50, 0.75)`; stylesheet `0 0 0 .1875rem rgba(0,0,255,.25)` | Focus ring |

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.ray}` | 4px | Ray components (`$ray-border-radius: 0.25rem`), lead-form Submit |
| `{rounded.sm}` | 6px | Small elements (also `6px 6px 0 0` / `0 0 6px 6px` split corners) |
| `{rounded.control}` | 8px | Buttons, select, choice tiles, link focus area |
| `{rounded.card}` | 12px | Hero card, solution cards (`0 0 12px 12px` on card photos) |
| `{rounded.pill}` | 9999px | Round carousel arrows |

No clip-paths or skews were measured; the wordmark and hand-drawn icons supply the only organic shapes.

## Components

### Buttons
**`button-primary`** — "Find space": `#678fff` fill, black 16px/600 label, padding 7px 16px, 40px tall, 8px radius.
- Hover (measured): fill and border `#3b5bbe`, label `#ffffff`.

**`button-search`** — hero "Search": same colours, padding 7px 24px, 48px tall, 1px `#678fff` border; same hover.

**`button-secondary`** — "Log in": white, black 16px/400 label with an icon, 1px `#678fff` border, padding 7px 16px, 40px, 8px radius.
- Hover (measured): fill `#e1e9ff`.

**`button-ghost`** — "English (US)" language switcher: white, 40px, 8px radius; hover (measured) fill `#f0f0f0`.

**`button-form-submit`** — lead-form "Submit" (section "Let us find a solution that works for you"): `#0000ff`, white 16px label,
padding 14px 24px, 54px tall, 4px radius — the older Ray button styling (Ray blue-50, `$ray-border-radius`).

### Hero Search
**`hero-card`** — white, 12px radius, padding 32px, floated over the photo.
Choice tiles — 14px/600 labels with icons; the selected tile is `#e1e9ff` with a `#678fff` border, unselected tiles white with a light border.
**`location-select`** — `#f0f0f0`, 18px/40px text, padding 4px 36px 0, 46px tall, 8px radius, pin icon left, chevron right.

### Cards
**`solution-card`** — 270×460px, white, 1px `#e6e6e6`, 12px radius, 20px grey glow; icon, serif 24px title,
`#444444` 16px body, underlined `#3b5bbe` "Learn more", photo flush to the bottom with `0 0 12px 12px` corners.
The fourth ("Enterprise solutions") card has a light grey tinted fill with a building photo (capture).

### Links
**`link`** — `#3b5bbe`, 16px, underlined in the capture ("Learn more", "View all solutions" with a chevron), padding 4px 2px, 8px focus radius.
- Hover (measured on "View all solutions"): `text-decoration` none → underline.

### Navigation
**`nav`** — 72px white header (64px at 390px) with the 20px grey glow; items 16px/400 black.

### Footer
**`footer`** — `#f0f0f0`, padding 64px 0, black 16px links in columns ("Company: Global locations, About us, Inclusion,
Careers, Newsroom…"), 12px `#444444` legal line ("© 2026 WeWork. The WeWork trademark and…").

## Design System Architecture

WeWork published an open-source design system, **Ray** — "a user-interface library for WeWork.com and auxiliary properties"
([ray.wework.com/faq](https://ray.wework.com/faq/), repo [github.com/wework/ray](https://github.com/wework/ray), Apache-2.0).
Its npm package `@wework/ray-core` is marked deprecated on the registry ("Package no longer supported", latest 1.16.9,
published 2021-04-05; [registry](https://registry.npmjs.org/@wework/ray-core)), and the GitHub repo was last pushed in
January 2023. The live site still carries Ray grid variables alongside newer `--ww-*` brand tokens, and the
2023 brand evolution (custom serif, Aperçu Pro, new secondary colours, hand-drawn illustration, agency Franklyn)
is documented in the [newsroom](https://www.wework.com/newsroom/weworks-brand-evolution).

- **Token architecture (Ray source):** SCSS primitives named `$ray-color-{hue}-{lightness}` defined in HSL by lightness
  step — e.g. `$ray-color-blue-50: hsl(240, 100%, 100% - 50%)`, `$ray-color-gray-30`, `$ray-color-red-60`,
  `$ray-color-green-80` ([`_colors.scss`](https://github.com/wework/ray/blob/master/packages/core/src/global/_colors.scss)).
  Semantic aliases in `_variables.scss`: `$ray-link-color: $ray-color-blue-50`, `$ray-color-text-dark: $ray-color-black`,
  `$ray-color-text-medium: $ray-color-gray-60`, `$ray-box-shadow-focus-state`. Component tokens:
  `$ray-button-h-spacing: rem(24px) - $ray-border-width`, `$ray-field-height: rem(56px)`, `$ray-field-height-compact: rem(40px)`.
  Ray's colour page states: "The system functions around having one primary color be used for positive actions and major
  affordances, while stark black, white, and supporting grays all help as a supporting cast"
  ([Ray colors](https://ray.wework.com/foundations/colors/)).
- **Live tokens (current site):** CSS custom properties `--ww-blue-brand`, `--ww-blue-dark`, `--ww-blue-light`,
  `--ww-blue-ultralight`, `--ww-gray-dark`, `--ww-gray-background`, `--ww-yellow-functional-medium`, plus channel triplets
  `--ww-blue-1: 0 0 255`, `--ww-green-brand: 198 182 40`, `--ww-orange-ultralight: 255 233 226`; font stacks `--ff-base`, `--ff-serif`, `--ff-mono`;
  Tailwind utilities (`--tw-ring-*`, `--tw-shadow`) are also present.
- **Theming:** light only; no dark mode documented or measured.
- **Type & spacing:** Ray typography classes `ray-text--display-1/2`, `ray-text--h1`…`h6`, `ray-text--body`, `-body-large`,
  `-body-small`, `-body-x-small`; Ray limits weights to regular and bold, and its fonts page sets bold as `font-weight: 600`
  ([Ray typography](https://ray.wework.com/foundations/typography/)); base `rem(16px)`, line height 1.618; 8pt spacing base.
- **Component inventory (Ray docs):** Breadcrumb, Button, Card, Checkbox, Chip, Dropdown, Fieldset, Grid, Image, Radio,
  Select, Table, Tag, Text Field. Ray describes itself as "completely framework-agnostic and unopinionated technically".
- **Accessibility (Ray):** "Text and interactive elements should maintain a color contrast ratio of at least 4.5:1";
  "Do not remove focus states from elements unless you implement a suitable replacement"; avoid adjacent red/green
  ([Ray accessibility](https://ray.wework.com/foundations/accessibility/)).
- **Delivery:** `@wework/ray-core` (CSS + JS, Lerna monorepo, Gatsby docs site + Storybook); deprecated on npm.
  The current site's newer tokens are not published as a package.

Note: the live site and Ray disagree in places (live CTAs use `#678fff` with 8px radius; Ray buttons use `#0000ff` with 4px).
The live site wins in this file; Ray values appear only where the live page still renders them (lead-form Submit).

## Do's and Don'ts

### Do
- Set every headline in the serif at weight 400; scale by size only.
- Use black ink on white, with `#444444` for supporting text.
- Use `#678fff` for the main CTA with a black label; hover to `#3b5bbe` with a white label.
- Keep body text at 16px with the 25.888px (1.618) line height.
- Use 8px radius for controls and 12px for cards; give cards a 1px `#e6e6e6` border plus the soft 20px glow.
- Underline text links in `#3b5bbe`.
- Pair sections with candid photography of people in WeWork spaces.

### Don't
- Don't bold serif headlines.
- Don't use the pure `#0000ff` Ray blue for new primary CTAs; it survives only on legacy form buttons.
- Don't add heavy drop shadows; elevation is a faint grey glow.
- Don't introduce saturated accent colours beyond the blues; the site's palette is achromatic plus blue.
- Don't use letter-spacing on body text.

## Responsive Behavior

### Breakpoints
Ray: phone 0px, tablet 600px, desktop 1195px (12/8/4 columns; 60/48/16px margins; 24/24/16px gutters).

| Element | 1280px | 390px |
|---|---|---|
| Hero h1 | 56px / 61.6px | 32px / 35.2px |
| Section h2 | 36px / 40px | 28px / 35px |
| Header | 72px | 64px, "Find space" stays visible |
| Testimonial quote | 24px / 32px | 24px / 32px |

### Touch Targets
Header buttons 40px; hero Search 48px; select 46px; lead-form Submit 54px. Ray specifies field heights of 56px (40px compact).

### Collapsing Strategy

### Image Behavior
The hero photo is full-bleed with the white card overlaid; card photos sit flush at the card bottom with rounded bottom corners.

## Iteration Guide

1. White `{colors.canvas}`, black `{colors.ink}`, grey `{colors.ink-secondary}` for support copy.
2. Headline in `{typography.display-hero}` / `{typography.heading-lg}` / `{typography.heading-sm}` — serif, 400.
3. Body `{typography.body}`; buttons `{typography.button}`.
4. Primary action `button-primary` (`#678fff`); secondary `button-secondary` (white with periwinkle outline).
5. Cards `solution-card`: 12px radius, `#e6e6e6` hairline, 20px glow.
6. Spacing on the 8pt scale (8/16/32/64/96 most common).
7. Respect Ray's accessibility rules: 4.5:1 contrast, never remove focus states.
