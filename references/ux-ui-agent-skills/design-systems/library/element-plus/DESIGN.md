---
version: alpha
name: Element Plus
category: "Frontend Frameworks"
description: "Element Plus is the Vue 3 component library whose docs site pairs Inter (with a Helvetica Neue / PingFang SC fallback stack) on a white #ffffff canvas, a bright #409eff primary, grey text ramps #303133 and #606266, 1px #dcdfe6 hairlines, and a 4px default radius (20px for round buttons)."

colors:
  canvas: "#ffffff"
  ink: "#606266"
  ink-strong: "#303133"
  ink-secondary: "#99a9bf"
  ink-info: "#909399"
  ink-placeholder: "#a8abb2"
  primary: "#409eff"
  primary-dark: "#337ecc"
  primary-light-3: "#79bbff"
  primary-light-5: "#a0cfff"
  primary-light-7: "#c6e2ff"
  primary-light-8: "#d9ecff"
  primary-tint: "#ecf5ff"
  on-primary: "#ffffff"
  success: "#67c23a"
  success-tint: "#f0f9eb"
  warning: "#e6a23c"
  warning-tint: "#fdf6ec"
  danger: "#f56c6c"
  danger-tint: "#fef0f0"
  surface-fill: "#f5f7fa"
  hairline: "#dcdfe6"
  hairline-light: "#e4e7ed"

typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 48px
    fontWeight: 800
    lineHeight: 60px
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 36px
    fontWeight: 800
    lineHeight: 45px
  heading:
    fontFamily: Inter, "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", 微软雅黑, Arial, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  subheading:
    fontFamily: Inter, "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", 微软雅黑, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 22.5px
  body:
    fontFamily: Inter, "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", 微软雅黑, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: Inter, "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", 微软雅黑, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
  tag:
    fontFamily: Inter, "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", 微软雅黑, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
  nav:
    fontFamily: Inter, "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", 微软雅黑, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px

rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 8px
  xl: 10px
  2xl: 20px
  pill: 9999px

spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 24px
  s10: 25px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 15px
    height: 32px
    borderColor: "{colors.primary}"
  button-primary-round:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 8px 15px
    height: 32px
  button-default:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 8px 15px
    height: 32px
    borderColor: "{colors.hairline}"
  button-danger:
    backgroundColor: "{colors.danger}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 15px
    height: 32px
  input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 1px 11px
    height: 32px
    borderColor: "{colors.hairline}"
  select:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 4px 12px
    height: 32px
    borderColor: "{colors.hairline}"
  tag:
    backgroundColor: "{colors.primary-tint}"
    textColor: "{colors.primary}"
    typography: "{typography.tag}"
    rounded: "{rounded.xs}"
    padding: 0px 9px
    height: 24px
    borderColor: "{colors.primary-light-8}"
  tag-dark:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.tag}"
    rounded: "{rounded.xs}"
    padding: 0px 9px
    height: 24px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.hairline-light}"
  card-home:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 0px 16px
  nav:
    textColor: "{colors.ink-strong}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    padding: 40px 0px
---

## Overview

Element Plus is the Vue 3 component library, and its documentation site is the clearest statement of its visual language: a white page (`{colors.canvas}` `#ffffff`), a single bright blue (`{colors.primary}` `#409eff`), and a stepped ramp of greys for text. The official color guide describes the palette in three groups — a "bright and friendly blue" main color, scene-specific secondary colors (for example a danger color "indicates dangerous operation"), and neutral colors for "text, background and border colors". The product is the component library; the marketing page is a thin skin over the same tokens.

The homepage capture is a quiet, centered, illustration-led layout. A single oversized title ("Element Plus", `{typography.display}` Inter 800 at 48px/60px) sits above a one-line tagline and a flat-vector illustration painted in light cobalt washes: a browser window with a blue title bar, floating tooltip cards, a sine-wave chart, a donut gauge and a figure with a laptop. Below it come sponsor tiers ("Platinum Sponsors", "Gold Sponsors") and a row of three outlined cards — Guide, Component, Resource — each with its own pastel illustration and a "View Detail" link in the primary blue.

**Key Characteristics:**
- One brand blue (`{colors.primary}` `#409eff`) carries every action, link and focus state; the five semantic colors (success, warning, danger, info plus primary) each come with a tint ramp.
- Text is never pure black: headings and primary text use `{colors.ink-strong}` (`#303133`), body copy uses `{colors.ink}` (`#606266`), muted copy `{colors.ink-info}` (`#909399`) and placeholders `{colors.ink-placeholder}` (`#a8abb2`).
- Containers are defined by 1px hairlines (`{colors.hairline}` `#dcdfe6`, `{colors.hairline-light}` `#e4e7ed`) rather than by fills or heavy shadows.
- A 4px default radius (`{rounded.xs}`) on buttons, inputs, selects, tags and cards; a 20px "round" variant (`{rounded.2xl}`) for pill-like buttons.
- Compact control density: the default component height is 32px, with 40px (large) and 24px (small) steps.
- A Chinese-aware font stack: Inter first, then Helvetica Neue, Helvetica, PingFang SC, Hiragino Sans GB, Microsoft YaHei, Arial.
- Everything is exposed as `--el-*` CSS custom properties so the whole palette can be re-themed at runtime.

### Imagery and Voice

- **Illustration style.** Flat vector, no outlines, built from the brand blue and its tints (`{colors.primary}`, `{colors.primary-light-5}`, `{colors.primary-tint}`) with small coral and green accents; the figure at the foot of the hero wears a blue top. Each feature card has its own circular pastel backdrop behind a simple folder, code window or screen.
- **Sponsor logos.** Shown in full color at small size in a two-column grid with a bold name and a one-line grey description; a "Become a Sponsor!" outlined button follows with a dark tooltip containing a contact address.
- **Microcopy.** Short and literal: "A Vue 3 based component library for designers and developers", "View Detail", "Made with [U+2764 U+FE0F] by Element Plus", "Released under the MIT License". Card descriptions are one to three sentences in `{colors.ink-secondary}`.
- **Density.** Airy at page level (large gaps between the hero, sponsors and cards) and compact at control level (32px controls, 14px text).

### Capture Observations

- The page background is almost entirely `{colors.canvas}`; the only other fills are the cards' white and the pale tints inside the illustration.
- Text on the homepage is overwhelmingly `{colors.ink-strong}` and `{colors.ink}`, with the blue appearing in links and the version badge.
- Hairlines are the single structural device: nav bottom border, card outlines, card-footer dividers, footer top border.

## Colors

> **Source pages:** home (`/`), `/en-US/component/button`, `/input`, `/tag`, `/card`, `/select` (measured); official `theme-chalk/src/common/var.scss` in the GitHub repository (values cited per token in SOURCES.json).

### Brand & Accent
- **Primary** (`{colors.primary}` — `#409eff`): The brand blue. Filled primary buttons, links, active tabs, dark tags, the "View Detail" links on the homepage cards. The SCSS source declares it as the `primary` base color.
- **Primary Dark** (`{colors.primary-dark}` — `#337ecc`): Published as `--el-color-primary-dark-2`; the pressed/darker step.
- **Primary Light 3** (`{colors.primary-light-3}` — `#79bbff`), **Light 5** (`{colors.primary-light-5}` — `#a0cfff`), **Light 7** (`{colors.primary-light-7}` — `#c6e2ff`), **Light 8** (`{colors.primary-light-8}` — `#d9ecff`): the lighter steps of the same blue, exposed as `--el-color-primary-light-N`. Light 8 is the border of a default tag; Light 7 is the hover border of outlined primary controls.
- **Primary Tint** (`{colors.primary-tint}` — `#ecf5ff`): `--el-color-primary-light-9`, the lightest blue — default tag fill and the hover fill of light buttons.

### Semantic
- **Success** (`{colors.success}` — `#67c23a`) with tint `{colors.success-tint}` (`#f0f9eb`).
- **Warning** (`{colors.warning}` — `#e6a23c`) with tint `{colors.warning-tint}` (`#fdf6ec`).
- **Danger** (`{colors.danger}` — `#f56c6c`) with tint `{colors.danger-tint}` (`#fef0f0`). The SCSS source also lists error as `#f56c6c`.
- **Info** (`{colors.ink-info}` — `#909399`): the info base color doubles as the muted text color.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): The page, cards, inputs and popovers.
- **Surface Fill** (`{colors.surface-fill}` — `#f5f7fa`): Light fill used for code blocks and section bands on the component pages.
- **Hairline** (`{colors.hairline}` — `#dcdfe6`): The standard border (`--el-border-color`); the inset ring of every input and select, and the border of default buttons.
- **Hairline Light** (`{colors.hairline-light}` — `#e4e7ed`): The lighter border used on `el-card`.

### Text
- **Ink Strong** (`{colors.ink-strong}` — `#303133`): Primary text, headings, nav, card titles.
- **Ink** (`{colors.ink}` — `#606266`): Regular text; the second most-read color on the homepage.
- **Ink Secondary** (`{colors.ink-secondary}` — `#99a9bf`): A blue-grey used for the descriptive text inside the three homepage cards.
- **Ink Info** (`{colors.ink-info}` — `#909399`) and **Ink Placeholder** (`{colors.ink-placeholder}` — `#a8abb2`): secondary and placeholder text.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): Text on the blue and on danger buttons.

### Dark mode
The docs state that dark mode is supported from version 2.2.0 by toggling a `dark` class on the `html` element and importing `element-plus/theme-chalk/dark/css-vars.css`. The values above describe the light theme only; no dark values are recorded here.

## Typography

### Font Family

The official typography page recommends the stack `Inter, 'Helvetica Neue', Helvetica, 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', '微软雅黑', Arial, sans-serif`. Inter is the first choice; the CJK families follow so Chinese text renders in the platform's native face (PingFang SC on macOS, Microsoft YaHei on Windows). The h1 of the homepage declares `Inter, sans-serif` only. Code on the docs pages uses JetBrains Mono (`--code-font-family`). The older SCSS source declares the same stack without Inter.

### Hierarchy

| Token | Size | Weight | Line height | Use |
|---|---|---|---|---|
| `{typography.display}` | 48px | 800 | 60px | Homepage h1 |
| `{typography.display-mobile}` | 36px | 800 | 45px | h1 at 390px viewport |
| `{typography.heading}` | 20px | 600 | 28px | Section titles ("Platinum Sponsors") |
| `{typography.subheading}` | 18px | 400 | 22.5px | Card titles (Guide, Component, Resource) |
| `{typography.body}` | 14px | 400 | 20px | Base body copy and form text |
| `{typography.button}` | 14px | 500 | 14px | Buttons |
| `{typography.tag}` | 12px | 400 | 12px | Tags |
| `{typography.nav}` | 16px | 500 | 22.4px | Top navigation links |

The SCSS source defines a six-step size scale: extra-large 20px, large 18px, medium 16px, base 14px, small 13px, extra-small 12px. The typography guide additionally lists four line-height options: 1.0, 1.3, 1.5 (regular) and 1.7 (loose).

### Principles
- **Base 14px.** The control and body text size is 14px (`--el-font-size-base`), smaller than the typical 16px web body; it keeps dense admin interfaces compact.
- **Weight carries hierarchy.** The only very heavy weight (800) is the homepage title; everything else steps between 400, 500 and 600.
- **No tracking games.** Letter-spacing is `normal` throughout.

### Note on Font Substitutes
Inter is an open-source family and is loaded by the docs site; no proprietary substitute is required. If it fails to load, Helvetica Neue / PingFang SC take over per the stack above.

## Layout

- **Grid.** The layout page documents a 24-column grid (`el-row` / `el-col`) with a `gutter` attribute (default 0), flex alignment options (start, center, end, space-between, space-around, space-evenly), and `offset`, `push`, `pull`.
- **Breakpoints.** xs below 768px, sm from 768px, md from 992px, lg from 1200px, xl from 1920px.
- **Homepage rhythm.** A centered 1200px-wide column; the hero illustration, sponsor tiers and the three feature cards are stacked with generous vertical white space. Cards sit in a three-up row that fills the page width.
- **Spacing scale (measured).** `{spacing.s2}` 4px, `{spacing.s5}` 8px, `{spacing.s6}` 12px, `{spacing.s7}` 15px, `{spacing.s8}` 16px, `{spacing.s9}` 24px. The 15px horizontal padding of buttons and the 11–12px padding of inputs are the recurring control paddings.
- **Navigation.** A 55px-high top bar (`--nav-height`) with the logo and version badge at left, a search button (`⌘ K`) centered, and links for Guide, Component, Resource, Playground followed by a theme switch, language and GitHub icons.
- **Footer.** Two link columns (Links, Community) and a centered MIT-license line with a 40px vertical padding.

## Elevation & Depth

Depth is mostly flat. Borders and inset rings do the structural work; shadows appear on floating layers.

| Level | Value | Use |
|---|---|---|
| Hairline ring | `inset 0 0 0 1px {colors.hairline}` | Inputs, selects, textareas (measured as an inset box-shadow, not a border) |
| Lighter | `0px 0px 6px rgba(0, 0, 0, .12)` | `--el-box-shadow-lighter` |
| Light | `0px 0px 12px rgba(0, 0, 0, .12)` | `--el-box-shadow-light`; the shadow on the `el-card` demo |
| Basic | `0px 12px 32px 4px rgba(0, 0, 0, .04), 0px 8px 20px rgba(0, 0, 0, .08)` | `--el-box-shadow`; dropdowns and popovers |
| Dark | `0px 16px 48px 16px rgba(0, 0, 0, .08), 0px 12px 32px rgba(0, 0, 0, .12), 0px 8px 16px -8px rgba(0, 0, 0, .16)` | `--el-box-shadow-dark`; dialogs and drawers |

The border page documents the same four shadow variables and two line styles: solid at 1px and dashed at 2px. The homepage illustration uses soft drop shadows on its floating white cards.

## Shapes

The border page exposes four radius options: none (`0px`), small (`--el-border-radius-small`, 2px), large/base (`--el-border-radius-base`, `{rounded.xs}` 4px), and round (`--el-border-radius-round`, `{rounded.2xl}` 20px). Measured values on the live pages:

- `{rounded.xs}` 4px — buttons, inputs, selects, tags, `el-card`.
- `{rounded.sm}` 5px — the three homepage feature cards.
- `{rounded.md}` 6px — link/nav hit areas.
- `{rounded.lg}` 8px — the docs search button.
- `{rounded.xl}` 10px — occasional containers.
- `{rounded.2xl}` 20px — "round" buttons, including the default and primary examples on the button page and the "Become a Sponsor!" button on the homepage.
- `{rounded.pill}` 9999px — round tags and badges, and avatar-like chips.
- `100%` / `50%` — circle buttons and avatars.

## Components

### Buttons
- **button-primary** — `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}` (14px/500), `{rounded.xs}` 4px, height 32px, padding `8px 15px`, 1px border of the same blue. Measured on the button demo page.
- **button-primary-round** — the same, with `{rounded.2xl}` 20px (the `round` prop).
- **button-default** — `{colors.canvas}` fill, `{colors.ink}` text, `{colors.hairline}` border, 20px radius as measured on the homepage "Become a Sponsor!" button; on hover the docs site tints the fill with `{colors.primary-tint}`, the text with `{colors.primary}` and the border with `{colors.primary-light-7}` (measured on the segmented docs buttons).
- **button-danger** — `{colors.danger}` fill, white text, same geometry. Warning (`{colors.warning}`), success and info siblings follow the same recipe.
- Sizes follow the component-size variables: large 40px, default 32px, small 24px.

### Inputs and Selects
- **input** — white fill, `{colors.ink-strong}` text, 14px, height 32px, `{rounded.xs}`, padding `1px 11px`. The border is drawn as an inset 1px ring in `{colors.hairline}`. Placeholder text uses `{colors.ink-placeholder}`.
- **select** — same recipe with padding `4px 12px`, 32px height, and a dropdown panel with the Basic shadow.
- **textarea** — same ring, padding `5px 26px 5px 11px`.

### Tags
- **tag** — `{colors.primary-tint}` fill, `{colors.primary}` text, `{colors.primary-light-8}` border, 12px type, height 24px, padding `0px 9px`, `{rounded.xs}`.
- **tag-dark** — `{colors.primary}` fill with white text.
- Success and danger tags use their tint fills (`{colors.success-tint}`, `{colors.danger-tint}`) with the saturated color as text.

### Cards
- **card** — white, `{colors.hairline-light}` border, `{rounded.xs}`, the Light shadow, header padding `18px 20px`, body padding `20px`.
- **card-home** — the homepage feature card: white, `{colors.hairline}` border, `{rounded.sm}`, a centered illustration, grey description text and a footer divider above a blue "View Detail" link.

### Navigation and Links
- **link** — `{colors.primary}`, `{typography.nav}`.
- **nav** — `{colors.ink-strong}` text on the white top bar.
- **footer** — white, 40px vertical padding, `{colors.ink-strong}` text.

## Design System Architecture

The product is the component library itself, so the architecture is public and documented.

- **Theme source.** The SCSS lives in `packages/theme-chalk` of the GitHub repository; the base variables are in [`common/var.scss`](https://raw.githubusercontent.com/element-plus/element-plus/dev/packages/theme-chalk/src/common/var.scss) (colors, text colors, border colors, fill colors, font sizes, radii, shadows, component sizes).
- **CSS variables.** The [theming guide](https://element-plus.org/en-US/guide/theming.html) documents the `--el-*` prefix (for example `--el-color-primary`, `--el-tag-bg-color`) and four ways to customize: SCSS `@forward` overrides of a `$colors` map, global CSS variables, scoped CSS variables, and inline styles on a component.
- **Color generation.** Each semantic color exposes light steps 3, 5, 7, 8 and 9 and a dark step 2 (`--el-color-primary-light-5`, `--el-color-primary-dark-2`), as seen in the live root variables.
- **Component sizing.** `--el-component-size-large` 40px, `--el-component-size` 32px, `--el-component-size-small` 24px.
- **Docs pages.** [Color](https://element-plus.org/en-US/component/color.html), [Typography](https://element-plus.org/en-US/component/typography.html), [Border](https://element-plus.org/en-US/component/border.html) and [Layout](https://element-plus.org/en-US/component/layout.html) document the foundations.
- **Dark mode.** Documented from 2.2.0 at [dark mode](https://element-plus.org/en-US/guide/dark-mode) via a `dark` class on `html`.
- **Design kits.** The [resource page](https://element-plus.org/en-US/resource/index) lists a 2024 MasterGo UI Kit, a 2023 Figma UI Kit with Light/Dark/Dark Alpha theme switching, 2023 Figma Variables, 2022 Figma and Sketch templates and 2022 Axure components.
- **Docs-site layer.** The live root variables on the docs site also carry `--vp-*` and `--docsearch-*` properties alongside the `--el-*` ones; those belong to the docs shell, not the component library.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the one main action per view and for links.
- Draw input and select borders as a 1px `{colors.hairline}` ring and keep controls at 32px unless a size variant is explicitly needed.
- Use `{colors.ink-strong}` for titles and `{colors.ink}` for body copy; keep muted text to `{colors.ink-info}` and `{colors.ink-placeholder}`.
- Use the semantic tints for status tags and alerts, with the saturated color for text.
- Use `{rounded.xs}` for rectangular controls and reserve `{rounded.2xl}` for explicitly round buttons.
- Customize through `--el-*` variables rather than overriding component CSS.

**Don't**
- Do not use pure black for text; the darkest documented text color is `#303133`.
- Do not add a second brand accent beside the blue; additional hues are reserved for success, warning, danger and info.
- Do not stack heavy shadows on cards; the card demo uses the single Light shadow.
- Do not mix the 20px round radius and the 4px base radius within the same control group unless the `round` prop is intended.
- Do not copy the docs-site search button (`#5a5e9a` text on a translucent white fill, 8px radius) as the primary button; it is a VitePress/DocSearch control.

## Responsive Behavior

- **Breakpoints.** xs `<768px`, sm `≥768px`, md `≥992px`, lg `≥1200px`, xl `≥1920px`; the grid offers responsive props for each and utility classes such as `hidden-sm-only` and `hidden-lg-and-up`.
- **Hero type.** The h1 drops from 48px/60px to 36px/45px at the 390px mobile viewport (`{typography.display-mobile}`); weight stays 800.
- **Touch size (guidance, not measured).** Default controls are 32px high and large controls 40px; use the large size on touch layouts.

## Iteration Guide

1. Start from `{colors.canvas}`, `{colors.ink}` and `{colors.primary}`; add semantic colors only when a status needs them.
2. Set base text to `{typography.body}` (14px/20px) and add `{typography.heading}` (20px/600) for section titles; reserve `{typography.display}` for one hero title.
3. Build controls at 32px with `{rounded.xs}`; draw the 1px `{colors.hairline}` ring for inputs and selects.
4. Add tints (`{colors.primary-tint}`, `{colors.success-tint}`, `{colors.warning-tint}`, `{colors.danger-tint}`) for tags, alerts and hover states.
5. Use the Light shadow for cards and the Basic shadow for popovers; stop there.
6. Re-theme through `--el-color-primary` and the generated light/dark steps rather than hand-picking new blues.
7. Before shipping, check text/background contrast of `{colors.ink}` on `{colors.canvas}` and of white on `{colors.primary}`; the lighter blue steps are for fills and borders, not for body text.
