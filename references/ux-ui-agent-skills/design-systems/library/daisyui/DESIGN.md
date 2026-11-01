---
version: alpha
name: daisyUI
category: "Frontend Frameworks"
description: "daisyUI is the Tailwind CSS component library: a white canvas (#ffffff), zinc ink (#18181b), a neutral black pill CTA (#09090b), indigo theme primary (#422ad5), 4px field and 8px box radii, Outfit headlines (44.8px/72px) and a system-UI stack for components."
colors:
  canvas: "#ffffff"
  ink: "#222226b3"
  primary: "#09090b"
  on-primary: "#e4e4e7"
  base-200: "#f8f8f8"
  base-content: "#18181b"
  highlight-rose: "#ec003f"
  ink-muted: "#26262d99"
  ink-black: "#000000"
  ink-on-dark-muted: "#ffffff99"
  hairline: "#7d7d7d33"
  neutral-border: "#08080a"
  text-input-text: "#27272a"
  text-input-border: "#d4d4d8"
  theme-primary: "#422ad5"
  theme-primary-content: "#e0e7ff"
  theme-secondary: "#f43098"
  theme-accent: "#00d3bb"
  theme-accent-content: "#084d49"
  theme-info: "#00bafe"
  theme-success: "#00d390"
  theme-warning: "#fcb700"
  theme-error: "#ff637d"
  base-300: "#eeeeee"
typography:
  display:
    fontFamily: Outfit, "Noto Sans JP", "Noto Sans", Vazirmatn, sans-serif
    fontSize: 44.8px
    fontWeight: 400
    lineHeight: 49.28px
  display-mobile:
    fontFamily: Outfit, "Noto Sans JP", "Noto Sans", Vazirmatn, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 26.4px
  heading:
    fontFamily: Outfit, "Noto Sans JP", "Noto Sans", Vazirmatn, sans-serif
    fontSize: 72px
    fontWeight: 700
    lineHeight: 72px
  subheading:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Vazirmatn, Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  body:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Vazirmatn, Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Vazirmatn, Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
  nav:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Vazirmatn, Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: system-ui, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button-md:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Vazirmatn, Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
rounded:
  xs: 1px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 11px
  2xl: 12px
  3xl: 16px
  4xl: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 11px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 48px
    borderColor: "{colors.neutral-border}"
    boxShadow: oklch(1 0 0 / 0.06) 0px 0.5px 0px 0.5px inset, oklab(0.14 0.00136333 -0.00481054 / 0.3) 0px 3px 2px -2px, oklab(0.14 0.00136333 -0.00481054 / 0.3) 0px 4px 3px -2px
  link:
    textColor: "{colors.base-content}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.base-content}"
    padding: 0px 8px
  nav-link:
    textColor: "{colors.base-content}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.subheading}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
    height: 38px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.base-content}"
  footer:
    textColor: "{colors.base-content}"
    padding: 80px 16px
  button-brand:
    backgroundColor: "{colors.theme-primary}"
    textColor: "{colors.theme-primary-content}"
    typography: "{typography.button-md}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 40px
  select:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.base-content}"
    typography: "{typography.subheading}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
    height: 40px
    borderColor: "{colors.hairline}"
  badge:
    backgroundColor: "{colors.base-300}"
    textColor: "{colors.base-content}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 0px 9px
    height: 20px
  badge-primary:
    backgroundColor: "{colors.theme-primary}"
    textColor: "{colors.theme-primary-content}"
    typography: "{typography.subheading}"
    rounded: "{rounded.lg}"
    padding: 0px 11px
    height: 24px
  card-body:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.base-content}"
    typography: "{typography.subheading}"
    rounded: "{rounded.lg}"
    padding: 24px
---

## Overview

daisyUI is a component library, not just a brand: it is "The Tailwind CSS Component Library" (package description, https://github.com/saadeghi/daisyui, version 5.7.47 at the time of measurement, MIT-licensed), a Tailwind CSS plugin that ships semantic, theme-aware class names (`btn`, `card`, `badge`, `input`, `select`, `toggle`) built on CSS variables. The product is therefore the component system and its 35 built-in themes. The marketing site (`https://daisyui.com/`, measured at 1280px and 390px) wears the default light theme: a white canvas (`{colors.canvas}`), near-black zinc ink (`{colors.base-content}`), a neutral black pill CTA (`{colors.primary}`), soft grey elevations (`{colors.base-200}`) and tightly rounded (4px to 8px) controls.

To describe the system faithfully this document combines three measurements: the homepage; five docs demo pages measured with the extractor (button, input, select, badge, card at `https://daisyui.com/components/<name>/`); and the official default light theme file `packages/daisyui/src/themes/light.css` in the repository.

The capture of the homepage shows: a thin announcement strip in mono ("Stop generating AI slop. Use BLUEPRINT MCP server" with an arrow, "BLUEPRINT" in blue); a white header with the daisy logo, "daisyUI" wordmark, a "5.7.47" version selector, centered ghost links (Docs, Components, Templates, MCP, More) with small icons, a search box with a keyboard hint, a theme switcher, a language globe and a GitHub star count; a left-aligned hero starting with a mono "npx skills add saadeghi/daisyui" chip, the headline "Faster, cleaner, easier Tailwind CSS development" (first line bold, second line light), a three-line paragraph, an outlined "Official MCP Server" pill and a black "How to use? →" pill, and the caption "Trending on GitHub with 42,000 stars"; on the right a tilted isometric illustration of component panels (toggles, check sizes xs to xl, semantic-color tiles labeled primary, secondary, accent, info, success, warning); a Carbon ad block; then very large statements: "don't re-invent the wheel every time" in heavy Outfit with a yawning-face emoji, and "instead of writing 100 class names" with "100 class names" in a hot pink.

**Key Characteristics:**
- Semantic color names (primary, secondary, accent, neutral, info, success, warning, error, plus base-100/200/300) that every theme re-defines; components never hardcode hues.
- Default-light theme values in OKLCH (for example `--color-primary: oklch(45% 0.24 277.023)`), measured on screen as `{colors.theme-primary}` and friends.
- Small, consistent radii controlled by three variables: `--radius-selector` 0.5rem, `--radius-field` 0.25rem, `--radius-box` 0.5rem in the default light theme.
- Buttons are 40px tall at the default size, 14px semibold text, 16px side padding, 4px radius (`{rounded.sm}`), with a subtle inset highlight and a short soft drop shadow (the "depth" effect).
- The homepage hero uses a pill-shaped neutral button instead (`{rounded.pill}`, 48px tall, 18px semibold).
- Headlines in Outfit; component text in the system UI stack.
- Playful voice and emoji in headlines; extremely large type for the story sections.

## Colors

Hex values were measured on the live pages (`web/data/extracted/daisyui.json` and the `daisyui--button/input/card/badge/select` extractions). The official default light theme source (https://raw.githubusercontent.com/saadeghi/daisyui/master/packages/daisyui/src/themes/light.css) gives the same colors as OKLCH variables; the OKLCH values listed below are quoted from that file.

### Semantic theme colors (default light)
| Name | Source value | Measured hex | Token |
|---|---|---|---|
| base-100 | `oklch(100% 0 0)` | `#ffffff` | `{colors.canvas}` |
| base-200 | `oklch(98% 0 0)` | `#f8f8f8` | `{colors.base-200}` |
| base-300 | `oklch(95% 0 0)` | `#eeeeee` | `{colors.base-300}` |
| base-content | `oklch(21% 0.006 285.885)` | `#18181b` | `{colors.base-content}` |
| primary | `oklch(45% 0.24 277.023)` | `#422ad5` | `{colors.theme-primary}` |
| primary-content | `oklch(93% 0.034 272.788)` | `#e0e7ff` | `{colors.theme-primary-content}` |
| secondary | `oklch(65% 0.241 354.308)` | `#f43098` | `{colors.theme-secondary}` |
| accent | `oklch(77% 0.152 181.912)` | `#00d3bb` | `{colors.theme-accent}` |
| accent-content | `oklch(38% 0.063 188.416)` | `#084d49` | `{colors.theme-accent-content}` |
| neutral | `oklch(14% 0.005 285.823)` | `#09090b` | `{colors.primary}` (the CTA fill on the homepage) |
| neutral-content | `oklch(92% 0.004 286.32)` | `#e4e4e7` | `{colors.on-primary}` |
| info | `oklch(74% 0.16 232.661)` | `#00bafe` | `{colors.theme-info}` |
| success | `oklch(76% 0.177 163.223)` | `#00d390` | `{colors.theme-success}` |
| warning | `oklch(82% 0.189 84.429)` | `#fcb700` | `{colors.theme-warning}` |
| error | `oklch(71% 0.194 13.428)` | `#ff637d` | `{colors.theme-error}` |

The docs define each color's purpose (https://daisyui.com/docs/colors/): primary is the "primary brand color, The main color of your brand"; secondary and accent are optional brand colors; neutral is the "neutral dark color, For not-saturated parts of UI"; base-100 is the "base surface color of page, used for blank backgrounds"; base-200 and base-300 are darker shades "to create elevations"; info, success, warning and error carry their literal meaning; every color has a `-content` partner for foreground text.

### Site-level usage
- **Primary on the homepage** (`{colors.primary}`): the neutral near-black, because the hero CTA uses the neutral color. Its border is `{colors.neutral-border}`.
- **Ink** (`{colors.ink}`): the paragraph color, 70% of base-content (`#222226b3`), the most-read text color on the page.
- **Base content** (`{colors.base-content}`): headings and labels.
- **Ink muted** (`{colors.ink-muted}`): 60% content for placeholders and captions.
- **Highlight rose** (`{colors.highlight-rose}`): the hot pink of "100 class names" in the story section.
- **Hairline** (`{colors.hairline}`): `#7d7d7d33`, a 20% grey border used on inputs and selects.
- **Text input border** (`{colors.text-input-border}`) and **text** (`{colors.text-input-text}`): the homepage search/input measurement.
- Tokens `{colors.ink-black}` and `{colors.ink-on-dark-muted}`: pure black and 60% white for dark-on-light and on-dark labels.

### Usage rules (from the docs)
- Use semantic color classes (`bg-primary`, `text-base-content`, `border-base-300`) instead of constant color utilities; the docs call hardcoded names a source of "high maintenance cost".
- Make muted text with opacity modifiers on base-content (`text-base-content/70`, `/50`, `/30`), which "gives a constant result on all themes".
- Pair each color with its `-content` color; never place white on a color without checking its content token.

## Typography

### Families
- **Outfit** (loaded weights 300 and 600): the hero h1 (44.8px) and the story-section headings (72px, 700). It is a Google-hosted face loaded by the site.
- **UI font stack**: `ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Vazirmatn, Arial, "Noto Sans", sans-serif, ...emoji faces`: all component text (buttons, inputs, badges, card body).
- **Monospace** for code chips and the announcement strip.

### Scale (measured)
| Role | Token | Font | Size / line-height | Weight |
|---|---|---|---|---|
| Hero h1 | `display` | Outfit | 44.8px / 49.28px | 400 |
| Hero h1, mobile | `display-mobile` | Outfit | 24px / 26.4px | 400 |
| Story heading (h2) | `heading` | Outfit | 72px / 72px | 700 |
| Feature label (h3) / select / card body | `subheading` | UI stack | 14px / 21px | 400 |
| Small body | `body` | UI stack | 12px / 21px | 400 |
| Large button | `button` | UI stack | 18px / 27px | 600 |
| Default button (`btn`) | `button-md` | UI stack | 14px / 21px | 600 |
| Navigation | `nav` | UI stack | 16px / 24px | 400 |
| Small link | `link` | system-ui | 12px / 18px | 400 |

Measured component text sizes on the docs pages: `btn-xs` 11px, `btn-sm` 12px, default 14px, `btn-lg` 18px, all weight 600; `badge` 12px at default size and 14px at the larger size; card title 18px/600 in Outfit.

### Principles
- Sizes step through the component size modifiers (xs, sm, md, lg, xl) rather than a fluid scale.
- The hero headline mixes weights inside one h1 (first line semibold, second line light), a daisyUI signature.
- Story-section statements are huge (72px) and heavy; the surrounding paragraphs are 70% content color.

### Font substitutes
Outfit is on Google Fonts; use it directly. Component text relies on the system UI stack, so there is nothing to substitute.

## Layout

- The homepage is a single left column of content (about 400px wide copy) with a large illustration on the right on desktop; story sections stack as left-aligned large statements.
- Docs component pages use a left sidebar, a content column and demo "stages" for each variant; the measured cards on them are 24px padded (`card-body`).
- Footer padding is `80px 16px`.
- Spacing tokens are small (1px to 12px in the generated list) because they come from component internals; the component sizes are multiples of 4px (`--size-field` and `--size-selector` are 0.25rem).

## Elevation & Depth

- daisyUI's "depth" effect (`--depth: 1` in the default light theme) gives buttons a 0.5px inset white highlight at 6% and two short drop shadows (3px and 4px offsets with -2px spread) tinted with the button color at 30%: measured on `btn-primary` as `oklch(1 0 0 / 0.06) 0px 0.5px 0px 0.5px inset` plus colored shadows. Inputs and selects have a 1px inset top shadow at 2% and a 1px bottom inset white at 10%.
- `--noise: 0` in the default light theme; other themes can turn on a noise texture (the measured button background-image carries an SVG fractal-noise layer that is hidden when noise is 0).
- Cards on the docs pages are flat with no visible shadow (the measured box-shadow is fully transparent); elevation comes from base-200/base-300 shades.
- The hero illustration shows layered, tilted panels with large soft shadows; it is artwork, not a UI pattern.

## Shapes

- `{rounded.sm}` 4px: `btn`, `input`, `select`, `toggle` thumbs — the `--radius-field` of 0.25rem.
- `{rounded.lg}` 8px: `card` and `badge` — `--radius-box` and `--radius-selector` of 0.5rem.
- `{rounded.2xl}` 12px: the `toggle` track (measured 12px on a 24px-tall toggle).
- `{rounded.pill}`: the homepage hero buttons and some chips.
- `{rounded.3xl}` 16px, `{rounded.4xl}` 20px and larger values appear on homepage panels and illustration.
- Rule of three: fields 4px, boxes and selectors 8px, pills for hero actions. Themes can change these by overriding the three radius variables.

## Components

### Button (`btn`)
- **Default** (`button-brand` for `btn-primary`): `{colors.theme-primary}` fill, `{colors.theme-primary-content}` text, 40px tall, `0px 16px` padding, 14px/600, 4px radius, 1px border, inset highlight and soft colored shadow.
- **Secondary** (`btn-secondary`): same geometry with `{colors.theme-secondary}`.
- **Outline** (`btn-outline`): transparent fill, 1px border and text in base-content.
- **Ghost** (`btn-ghost`): transparent, no border until hover.
- **Sizes**: xs 24px tall (11px text, 8px padding), sm 32px (12px, 12px padding), md 40px (14px, 16px), lg 48px (18px, 20px).
- **Homepage hero button** (`button-primary`): `{colors.primary}` fill, `{colors.on-primary}` text, pill, 48px, 18px/600, `0px 20px`.

### Input and select
- `text-input`: white, 1px `{colors.text-input-border}`, 4px radius, 38px tall in the homepage measurement, `8px 12px` padding.
- `select`: white, 1px hairline, 4px radius, 40px tall, 14px text, `0px 12px` padding (measured on the select docs page).
- On the docs pages the default `input` measured 24px tall at its smallest demo size (11px text).

### Badge
- `badge`: 20px tall, 12px text, 8px radius, `base-300`-like fill, 9px side padding; `badge-primary` is 24px tall with 14px text and 11px padding in the larger demo; `badge-outline` is transparent with a 1px primary border.

### Card
- `card`: white (base-100), 8px radius, no border or shadow by default; `card-body` has 24px padding and 14px text; `card-title` is 18px/600 in Outfit.

### Toggle
- 40px by 24px track, 12px radius, 3px inner padding, 1px border in base-content.

### Navigation
- White header, 16px links with small leading icons in zinc ink; a keyboard-hint search field, language and theme dropdowns, and a GitHub star count.

### Footer
- Plain, `80px 16px` padding; tagline "Free Component library For utility first CSS frameworks".

## Imagery & Art Direction

- **Isometric component sheet**: the hero illustration is a tilted stack of white panels showing real component states: a tabbed "Features" list with colored toggles (indigo, pink, teal, teal, dark), a "Design system" panel with check circles in five sizes (xs to xl), and a "Semantic colors" panel with rotated square swatches labeled primary, secondary, accent, info, success, warning. It is built from the theme's own semantic colors, so the art is a proof of the system.
- **Emoji as illustration**: a yawning-face emoji ends "every time" in the story heading; emoji are part of the voice.
- **Ad slot**: a Carbon ad block ("design.dev — Design & Dev Tools For Creators") sits under the hero, labeled "ads via Carbon"; it is third-party content and should not be copied into the system.
- **Logo**: a smiling daisy flower in yellow and orange with a lowercase "daisyUI" wordmark (visible in the header of the capture).
- **Backgrounds** are white; the first screens use no photography.

## Microcopy Voice

- Short, direct and a little cheeky: "don't re-invent the wheel every time", "instead of writing 100 class names".
- Benefit-first statements: "Faster, cleaner, easier Tailwind CSS development"; supporting lines ("Pure CSS. No JS dependency", "Works on all frameworks") appear as tiny labels in the illustration.
- Social proof is quantified and light: "Trending on GitHub with 42,000 stars".
- Calls to action are questions or product names: "How to use?", "Official MCP Server".
- Developer commands are shown verbatim in a mono chip: `npx skills add saadeghi/daisyui`.

## Interaction States

- Components expose state through modifier classes and measured styles: the default `btn` carries an inset highlight and short colored shadow at rest; ghost and outline buttons have transparent fills at rest.
- Hover behavior on the homepage's announcement link was measured: white fill and a light grey border (`oklch(0.95 0 0)`) with no shadow at rest.
- Focus and disabled styles are provided by the component CSS (not captured on screen) and are left unspecified here.
- Theme switching is part of the product: the header carries a theme dropdown, and every component re-renders through the same variables.

## Design System Architecture

daisyUI is itself a published design system: the repository https://github.com/saadeghi/daisyui (package `daisyui`, "The Tailwind CSS Component Library") with documentation at https://daisyui.com. It is a Tailwind CSS plugin (`@plugin "daisyui"`), pure CSS with no JavaScript dependency, whose components and themes are driven by CSS custom properties.

**Tokens.** Each theme is a small set of variables defined in `packages/daisyui/src/themes/*.css` (35 built-in themes per https://daisyui.com/docs/themes/): 8 semantic colors with `-content` partners, three base colors (`--color-base-100/200/300`) plus `--color-base-content`, three radius variables (`--radius-selector`, `--radius-field`, `--radius-box`), two size variables (`--size-selector`, `--size-field`), and `--border`, `--depth`, `--noise`. The default light theme sets `--radius-selector: 0.5rem; --radius-field: 0.25rem; --radius-box: 0.5rem; --size-selector: 0.25rem; --size-field: 0.25rem; --border: 1px; --depth: 1; --noise: 0`. The dark theme changes the base colors (`oklch(25.33% 0.016 252.42)` for base-100), a brighter primary (`oklch(58% 0.233 277.117)`) and keeps the rest.

**Theming API.** Themes are enabled with `@plugin "daisyui" { themes: light --default, dark --prefersdark; }`; a section can opt into a theme with `data-theme="NAME"` and themes can be nested; custom themes are declared with `@plugin "daisyui/theme" { name: "mytheme"; --color-primary: ...; }` (https://daisyui.com/docs/themes/).

**Color rules.** Semantic names instead of constant colors, opacity modifiers for muted text, `-content` partners for foreground (https://daisyui.com/docs/colors/).

**Component pattern.** A component class (`btn`, `card`, `badge`) plus modifier classes for color (`btn-primary`), size (`btn-sm`) and style (`btn-outline`), each documented on its page under https://daisyui.com/components/. A theme generator at https://daisyui.com/theme-generator/ and an official MCP server and Figma library are linked from the site's navigation.

## Do's and Don'ts

### Do
- Use semantic color names and `-content` pairs; let the theme supply the values.
- Use the 4px field radius for controls and the 8px box radius for cards and badges.
- Use opacity of base-content for muted text (70%, 60%, 50%).
- Use the five size steps (xs, sm, md, lg, xl) for controls instead of custom heights.
- Keep the hero CTA a neutral dark pill and use theme primary inside demos.
- Let large Outfit statements carry the story sections.

### Don't
- Don't hardcode hex colors in components; they break theming.
- Don't mix field and box radii inside a single control.
- Don't hand-write shadows for buttons; the depth effect is a theme variable (`--depth`).
- Don't use pure black borders; the hairline is a 20% grey.
- Don't treat the neutral black pill as `primary`; in the theme, primary is the indigo.

## Responsive Behavior

- Measured at 1280px and 390px: the hero h1 goes from 44.8px to 24px (`{typography.display}` to `{typography.display-mobile}`).
- Control sizes do not change across breakpoints; instead there are explicit size modifiers and Tailwind responsive prefixes (for example `sm:btn-lg`).
- The hero illustration is positioned to the right on desktop; its mobile arrangement was not captured.
- Mobile navigation was not inspected and is unspecified.

## Iteration Guide

1. Pick a theme (light, dark or a custom one) and define its semantic colors and three radii first.
2. Build controls from the component classes: a 40px `btn` with a 4px radius, a 40px `select`, a 20px to 24px `badge`, a card with a 24px body.
3. Use `{colors.theme-primary}` for brand actions inside the product and the neutral pill for marketing CTAs.
4. Set body copy at 70% of `{colors.base-content}`; headings at full `{colors.base-content}`.
5. For marketing statements, set Outfit at 72px/700 with generous whitespace and one pink highlight phrase.
6. Verify each color has its `-content` partner and each radius comes from the three variables.
