---
version: alpha
name: Mantine
category: "Frontend Frameworks"
description: Mantine, the React component library — a white, light-gray surface system with a single blue action color (#228be6, blue shade 6), 8px default radius, system-font UI at 14 to 16px with 600-weight buttons, a 10-step color ramp per hue, and a docs site that sets headlines in Outfit at 450 weight (72px / 79.2px on the home page).
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#228be6"
  on-primary: "#ffffff"
  primary-hover: "#1c7ed6"
  primary-light-bg: "#e7f5ff"
  primary-light-text: "#1971c2"
  gray-9: "#212529"
  dark-7: "#242424"
  surface-subtle: "#f8f9fa"
  ink-secondary: "#495057"
  ink-muted: "#868e96"
  hairline: "#ced4da"
  card-border: "#e9ecef"
  nav-bg: "#ffffffd9"
typography:
  display:
    fontFamily: Outfit, sans-serif
    fontSize: 72px
    fontWeight: 450
    lineHeight: 79.2px
  display-mobile:
    fontFamily: Outfit, sans-serif
    fontSize: 36px
    fontWeight: 450
    lineHeight: 39.6px
  heading:
    fontFamily: Outfit, sans-serif
    fontSize: 54px
    fontWeight: 450
    lineHeight: 59.4px
  page-title:
    fontFamily: Outfit, sans-serif
    fontSize: 44px
    fontWeight: 600
    lineHeight: 57.2px
  subheading:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27.9px
  body:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24.8px
  button:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
  button-lg:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  input:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 34px
rounded:
  sm: 4px
  md: 8px
  lg: 16px
  xl: 32px
  pill: 9999px
spacing:
  xs: 10px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 18px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 36px
  button-primary-lg:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.md}"
    padding: 0px 22px
    height: 42px
  button-hero-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.md}"
    padding: 3px 20px 0px
    height: 60px
  button-hero-dark:
    backgroundColor: "{colors.dark-7}"
    textColor: "{colors.on-primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.md}"
    padding: 3px 20px 0px
    height: 60px
  button-dark:
    backgroundColor: "{colors.gray-9}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.md}"
    padding: 10px 20px 10px 12px
    height: 42px
  button-light:
    backgroundColor: "{colors.primary-light-bg}"
    textColor: "{colors.primary-light-text}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 34px
  link:
    textColor: "{colors.gray-9}"
    typography: "{typography.input}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 36px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 0px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

Mantine is a React component library, so this file describes two things that sit side by side: the **library** (its default theme, which is what applications built on it look like) and the **docs and marketing site** at mantine.dev (which adds the Outfit display type and a layout of its own). The values for tokens come from three places, and the prose says which: Mantine's source files on GitHub (`default-theme.ts`, `default-colors.ts`, `default-css-variables.css`), the live Button, TextInput and Card docs pages measured in a browser, and the homepage.

The look is clean and neutral. Surfaces are white (`{colors.canvas}`) and a very light gray (`{colors.surface-subtle}`, `#f8f9fa`), text is black or a mid-gray, borders are thin gray lines (`{colors.hairline}`, `{colors.card-border}`), and one saturated color carries every action: blue shade 6, `{colors.primary}` (`#228be6`). Components are rounded at 8px (`defaultRadius: 'md'`), set in a system font at 14 to 16px, with 600-weight button labels.

The homepage in the capture opens with a very large Outfit headline, `A fully featured React components library` (72px), a paragraph that says it includes "more than 120 customizable components and 70 hooks", then two large buttons: a blue `Get Started` with an arrow and a dark `GitHub` with the GitHub mark. Behind the right half of the hero, faded sample UI (a contact form, KPI cards) is shown at low opacity. A `Sponsored by` strip of square logo tiles, a section titled `Built for the AI-assisted workflow` with a docs/skills/MCP tab group and a code block, and a `120+ components` section follow.

**Key Characteristics:**
- One action color: blue shade 6 (`{colors.primary}`), darker blue 7 (`{colors.primary-hover}`) on hover.
- Every hue has ten shades, indexed 0 (lightest) to 9 (darkest); components pick shade 6 in light mode and 8 in dark mode by default.
- 8px default radius, 16px and 32px for larger surfaces, 4px for small ones.
- Buttons are 36px high by default with 18px side padding and a 14px / 600 label; larger sizes go to 42px.
- Inputs are 36px high with a 1px `{colors.hairline}` border and 12px side padding.
- Soft layered shadows (`xs` to `xl`) built from three low-opacity layers.
- The docs site uses Outfit at weight 450 for large headings, an unusual in-between weight.
- Dark mode is built in (a moon toggle sits in the header).

## Colors

> **Source pages:** home (`/`), `/core/button/`, `/core/text-input/`, `/core/card/` (measured); `default-colors.ts` and `default-css-variables.css` (official source).

### Action
- **Primary** (`{colors.primary}` — `#228be6`): `blue[6]` in `default-colors.ts`; `primaryShade` is `{ light: 6, dark: 8 }`, `primaryColor` is `blue`. It measures as the fill of the filled Button on the Button page and of the homepage `Get Started` button in the capture.
- **Primary hover** (`{colors.primary-hover}` — `#1c7ed6`): `blue[7]`; the variable `--mantine-primary-color-filled-hover`.
- **Primary light** (`{colors.primary-light-bg}` — `#e7f5ff`, text `{colors.primary-light-text}` — `#1971c2`): measured on the active table-of-contents row and on the `TextInput` tab chip; it is the "light" variant style (blue 0 background, blue 8 text).
- **Blue ramp** (`blue[0]` to `blue[9]`): `#e7f5ff`, `#d0ebff`, `#a5d8ff`, `#74c0fc`, `#4dabf7`, `#339af0`, `#228be6`, `#1c7ed6`, `#1971c2`, `#1864ab`.

### Dark buttons
- **Dark 7** (`{colors.dark-7}` — `#242424`): fill of the homepage `GitHub` and `Follow Mantine on X` buttons; `dark[7]`.
- **Gray 9** (`{colors.gray-9}` — `#212529`): fill of the `Documentation` button on docs pages and text of the `View source code` link; `gray[9]`.

### Surfaces and lines
- **Canvas** (`{colors.canvas}` — `#ffffff`): Page and card fill.
- **Surface subtle** (`{colors.surface-subtle}` — `#f8f9fa`): `gray[0]`; the second-largest surface on the home page (9406 weight), used for sections and code blocks.
- **Hairline** (`{colors.hairline}` — `#ced4da`): `gray[4]`; input and select borders.
- **Card border** (`{colors.card-border}` — `#e9ecef`): `gray[2]`; demo container borders.
- **Nav background** (`{colors.nav-bg}` — `#ffffffd9`): the sticky header, white at 85%.
- **Other grays measured:** `#f1f3f5` (`gray[1]`), `#dee2e6` (`gray[3]`, the version button border).

### Text
- **Ink** (`{colors.ink}` — `#000000`): Headlines and primary text (4773 characters).
- **Ink secondary** (`{colors.ink-secondary}` — `#495057`): `gray[7]`; descriptions (3778 characters).
- **Ink muted** (`{colors.ink-muted}` — `#868e96`): `gray[6]`; hints and placeholders.
- **On primary** (`{colors.on-primary}` — `#ffffff`): Label on filled buttons.

### Third-party and code colors
The home page carries a Discord button fill (`#5865f2`) and code-block colors in a GitHub-like palette (`#1f2328`, `#0a3069`, `#0550ae`, a red `#cf222e` for strings). They belong to a social button and syntax highlighting, not to the library's palette, so they are not tokenised.

### Ramps in the library
`default-colors.ts` defines fourteen ramps of ten shades: dark, gray, red, pink, grape, violet, indigo, blue, cyan, teal, green, lime, yellow, orange. The site also defines a custom `ocean-blue` ramp and an `oklch-blue` ramp for its own examples (`--mantine-color-ocean-blue-*`, `--mantine-color-oklch-blue-*`); the Button demo's color picker shows twelve swatches.

## Typography

### Families
- **System UI stack** (`--mantine-font-family`): `-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji`. Used for body, buttons and inputs.
- **Monospace** (`fontFamilyMonospace`): `ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace`.
- **Outfit** (docs site only, loaded at weights 100 to 900): headlines on the docs pages. It is not part of the library's default theme.

### Hierarchy
| Token | Size | Line | Weight | Role |
|---|---|---|---|---|
| `{typography.display}` | 72px | 79.2px | 450 | Home hero h1 (Outfit) |
| `{typography.display-mobile}` | 36px | 39.6px | 450 | Same h1 at 390px |
| `{typography.heading}` | 54px | 59.4px | 450 | Home section h2 (Outfit) |
| `{typography.page-title}` | 44px | 57.2px | 600 | Docs page h1, `Button` (Outfit) |
| `{typography.subheading}` | 18px | 27.9px | 600 | Large buttons and card titles |
| `{typography.body}` | 16px | 24.8px | 400 | Paragraphs |
| `{typography.button}` | 14px | 14px | 600 | Default button |
| `{typography.button-lg}` | 16px | 16px | 600 | Large button |
| `{typography.input}` | 14px | 34px | 400 | Input and select text |

### Library theme scale (from `default-theme.ts`)
- **Font sizes:** xs 0.75rem, sm 0.875rem, md 1rem, lg 1.125rem, xl 1.25rem.
- **Line heights:** xs 1.4, sm 1.45, md 1.55, lg 1.6, xl 1.65.
- **Headings:** weight 700; h1 2.125rem / 1.3, h2 1.625rem / 1.35, h3 1.375rem / 1.4, h4 1.125rem / 1.45, h5 1rem / 1.5, h6 0.875rem / 1.5.
- **Weights:** regular 400, medium 600, bold 700.

The docs site's own headings (Outfit, 44 to 72px) are larger and lighter than the library's default 700-weight headings.

### Principles
- Use size tokens (`xs` to `xl`) rather than pixel values; the `scale` setting multiplies all of them.
- Buttons and field labels are 600; paragraphs are 400.
- The 450 weight is specific to the docs site's Outfit headlines; do not carry it into application UI.

### Font substitutes
Outfit is an open-licensed family loaded as a webfont; use it directly. Library components need no webfont since they use the system stack.

## Layout

- **Header:** 1280px-wide sticky bar with the logo and `Mantine` wordmark, links `Mantine UI`, `FAQ`, `Colors generator`, then a mono `v9.7.1` version menu, a `Search` field with `Ctrl + K`, and square icon buttons (Discord, a red heart, GitHub, a menu icon, a color-scheme toggle). Second row on docs pages: `Get started`, `Theming & Styles`, `Hooks`, `Form`, `Components` (active, underlined), `Extensions`.
- **Home hero:** left-aligned, headline across about two thirds of the width, paragraph below, two 60px buttons in a row, then a `Sponsored by` row of square logo tiles.
- **Docs page:** a left rail of component names grouped by `Layout`, `Inputs`, and so on; a central column with title, subtitle, a metadata list (`Source`, `LLM docs`, `Docs`, `Package`), three segmented buttons (`Documentation`, `Props`, `Styles API`), then `Usage` with an interactive demo and a controls panel; a right rail table of contents.
- **Spacing scale (library):** xs 10px, sm 12px, md 16px, lg 20px, xl 32px (`{spacing.xs}` to `{spacing.xl}`).
- **Breakpoints:** xs 36em, sm 48em, md 62em, lg 75em, xl 88em.
- **Demo container:** 662px wide in the docs column with an 8px radius and a `{colors.card-border}` border.

## Elevation & Depth

Library shadows (`default-theme.ts`), all built from soft black layers:
- **xs:** `0 1px 3px rgba(0,0,0,0.05), 0 1px 2px rgba(0,0,0,0.1)`.
- **sm:** `0 1px 3px 0.05, 0 10px 15px -5px 0.05, 0 7px 7px -5px 0.04`.
- **md:** `0 1px 3px 0.05, 0 20px 25px -5px 0.05, 0 10px 10px -5px 0.04`.
- **lg:** `0 1px 3px 0.05, 0 28px 23px -7px 0.05, 0 12px 12px -7px 0.04`.
- **xl:** `0 1px 3px 0.05, 0 36px 28px -7px 0.05, 0 17px 17px -7px 0.04`.

Measured on the docs and home pages: the sm and md shadows on raised cards, `0 0 15px 2px` of blue at 20% (`#228be6` glow) around the hero `Get Started` button, and `inset 0 0 0 1px rgba(0,0,0,0.1), inset 0 0 4px rgba(0,0,0,0.15)` on color-picker swatches. The hero preview cards are faded with opacity, not shadows.

Most surfaces rely on borders: demo containers and inputs use 1px gray lines, with shadows reserved for popovers and floating cards.

## Shapes

- **Default radius** `md` = 8px (`{rounded.md}`): buttons, inputs, selects, cards, demo containers (the most common value on every page).
- **Small** `sm` = 4px (`{rounded.sm}`): small controls, table-of-contents row ends, the `Usage` chip's right corners.
- **Large** `lg` = 16px (`{rounded.lg}`): bigger cards; **extra large** `xl` = 32px (`{rounded.xl}`): the left end of the split `Send files` button and large panels.
- **Smallest** `xs` = 2px in the library theme; not used by the measured pages.
- **Pill:** `{rounded.pill}` stands for fully rounded elements such as badges and avatars (a 1000px radius is measured on a few elements).
- **Asymmetric radii** appear in grouped controls: `0 4px 4px 0`, `0 0 0 8px`, `7px 7px 0 0` for tab-like and attached elements.
- **Icons:** thin-stroke icons (Phosphor icons in the demos), 14px in buttons; filled square icon tiles with rounded corners in the `Built for the AI-assisted workflow` list.

## Components

### Buttons (measured on `/core/button/`)
- **`button-primary`** — `{colors.primary}`, white label, `{typography.button}` (14px / 600), 36px high, `0px 18px` padding, `{rounded.md}`. The "filled" variant. Hover `{colors.primary-hover}`.
- **`button-primary-lg`** — `16px / 600`, 42px high, `0px 22px` padding (the "Regular md" demo).
- **`button-dark`** — `{colors.gray-9}` fill, `{typography.button-lg}`, 42px high, padding `10px 20px 10px 12px` (icon at the left): the `Documentation` segmented button.
- **Hero buttons** (home): `button-hero-primary` (`Get Started`, blue, arrow icon, blue glow shadow) and `button-hero-dark` (`GitHub`, `{colors.dark-7}` fill, mark icon); both 60px high, `{typography.subheading}`, `3px 20px 0px` padding, `{rounded.md}`. The blue fill of `Get Started` is read from the capture and the blue glow from the measured link shadow.
- **`button-light`** — `{colors.primary-light-bg}` fill, `{colors.primary-light-text}` text; measured on a 34px chip.
- **Other variants named on the page:** `Default`, `Filled`, `Light`, `Outline`, `Subtle`, `Transparent`, `White`, plus a gradient variant. They differ by fill, border and text color on the same shape.
- **Sections:** `leftSection` and `rightSection` add icons; padding on that side shrinks.

### Inputs (measured on `/core/text-input/`)
- **`text-input`** — white fill, black text, `{typography.input}` (14px), 36px high, `0px 12px` padding, `{rounded.md}`, 1px `{colors.hairline}` border. A `Variant` select on the demo panel measures 36px high with 34px right padding for the chevron. The home page's search field is taller (50px) with 18px text.
- Labels sit above fields at 600 weight with a gray description line below (`Input label`, `Input description`).

### Cards (measured on `/core/card/`)
- **`card`** — white, `{rounded.md}`, 1px `{colors.card-border}`; the demo card shows an image, a title (`Norway Fjord Adventures`), a red `ON SALE` badge and a full-width blue `Book classic tour now` button.
- **Sponsor tile** on the home page: a square white tile with a logo and caption and a thin gray border (size and radius not separately measured).

### Navigation
- **`nav`** — `{colors.nav-bg}`; links in `{typography.body}` (`Mantine UI`, `FAQ`, `Colors generator`). The active section on docs (`Components`) is underlined in the capture.
- **Tabs** on the home page: `Documentation` (filled blue, selected), `Skills`, `MCP server` as plain text; `Inputs` (filled blue), `Overlays`, `Navigation` in the components section.
- **Version button:** `v9.7.1` in a mono 13px / 700 label, 34px high, 1px `#dee2e6` border, 8px radius.

### Code blocks
Light gray (`{colors.surface-subtle}`) rounded panels with a mono font, a `Demo.tsx` file chip and a copy button; syntax colors are red (strings), blue (attributes), purple (keywords).

### Footer
`footer` — white, black text; welcome text and link columns (not inspected in detail).

## Design System Architecture

Mantine's own source is the system; the references below were opened.
- **Theme object** (`default-theme.ts`, docs [Theme object](https://mantine.dev/theming/theme-object/)): `scale` 1, `primaryColor` blue, `primaryShade` `{light: 6, dark: 8}`, `defaultRadius` md, `focusRing` auto, `autoContrast` false with `luminanceThreshold` 0.3, `defaultGradient` blue to cyan at 45deg, `fontSmoothing` true, `respectReducedMotion` false, `cursorType` default, plus `components` for default props and `other` for custom values.
- **Colors** (`default-colors.ts`): each key holds a 10-element array. The Mantine "colors generator" tool, linked in the header, produces ten shades from one value.
- **CSS variables** (`default-css-variables.css`): `--mantine-color-{name}-{0..9}`, `--mantine-color-{name}-filled`, `-filled-hover`, `-light`, `-light-hover`, `-light-color`, `-outline-hover`, `--mantine-primary-color-*`, `--mantine-spacing-*`, `--mantine-radius-*`, `--mantine-font-size-*`, `--mantine-line-height-*`, `--mantine-shadow-*`, `--mantine-breakpoint-*`, `--mantine-h1-font-size` to `h6`, `--mantine-heading-font-weight`, z-index variables (`--mantine-z-index-app` 100, `-modal` 200, `-popover` 300, `-overlay` 400, `-max` 9999). Sizes are written as `calc(Nrem * var(--mantine-scale))`, so one `scale` value resizes everything.
- **Styles API** ([docs](https://mantine.dev/styles/styles-api/)): each component exposes named selectors (such as `root`, `label`, `inner`), accepts `classNames` and `styles`, takes CSS variable overrides through `vars`, and ships static classes of the form `.mantine-{Component}-{selector}`.
- **Variants:** Button variants are `default`, `filled`, `light`, `outline`, `subtle`, `transparent`, `white` and gradient; the same variant set applies across many components via the variant color resolver (`variantColorResolver` in the theme).
- **Packaging:** components come from `@mantine/core` (the Button page lists it as the package); the docs also advertise LLM-oriented files (`llms.txt`, `llms-full.txt`), skills for AI agents and an MCP server.
- **Styling approach:** the shipped components use CSS variables and classes; the project's own docs describe the Styles API above. Claims about the v7 move away from CSS-in-JS were not confirmed from a page opened here.

## Do's and Don'ts

### Do
- Use theme tokens: `{spacing.md}`, `{rounded.md}`, `{colors.primary}`, instead of literal values.
- Use one filled blue button per area and `default`, `light` or `subtle` variants for the rest.
- Keep inputs 36px high with `{rounded.md}` and a 1px `{colors.hairline}` border.
- Use 600 for button and label text, 400 for body.
- Use ten-shade ramps and pick shade 6 (light mode) or 8 (dark mode) for fills.
- Set `autoContrast` or check text contrast on custom colors, because the default is off.
- Put shadows only on floating surfaces; draw static card edges with borders.

### Don't
- Don't apply Outfit's 450 weight to application UI; it is a docs-site choice.
- Don't hard-code the blue; override `primaryColor` and the ramp.
- Don't mix radii inside one control group unless attached (the asymmetric corners are for joined controls).
- Don't use the Discord purple or code-block colors as brand colors.
- Don't assume the v7 CSS architecture details; they were not confirmed here.

## Responsive Behavior

- **Hero headline:** 72px / 79.2px to 36px / 39.6px at 390px (`{typography.display-mobile}`).
- **Breakpoints:** `xs` 36em, `sm` 48em, `md` 62em, `lg` 75em, `xl` 88em; components accept responsive props through the style-props system and the `useMatches` hook exists in the provider source.
- **Docs layout:** at desktop the page shows three columns (component list, content, table of contents); the narrow layout of these columns was not inspected.
- **Header:** the menu icon next to the color-scheme toggle in the capture was not measured for behaviour.
- **Targets:** buttons 36px and 42px high, 60px in the hero.

## Iteration Guide

1. Start from `{colors.canvas}`, text in `{colors.ink}` and `{colors.ink-secondary}`.
2. Pick the primary hue (default blue) and use shade 6; shade 7 on hover.
3. Round at `{rounded.md}`; 16px for large cards.
4. Use the spacing scale `{spacing.xs}` to `{spacing.xl}` and the font-size scale `xs` to `xl`.
5. Make buttons 36px high with 18px side padding and 14px / 600 labels.
6. Separate surfaces with `{colors.card-border}` lines, then add `sm` or `md` shadows only for floating elements.
7. Set docs-style headlines in Outfit at 450 only on marketing pages.
8. Validate: `node web/scripts/verify-designs.mjs --slug=mantine`.

### Open questions
- The homepage footer and narrow-width layouts were not inspected.
- Dark mode values were not measured (only the default light scheme).
- The Get Started button's fill was read from the capture; its exact CSS was not separately recorded.
