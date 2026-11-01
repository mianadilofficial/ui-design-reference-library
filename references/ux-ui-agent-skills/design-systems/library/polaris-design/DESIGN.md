---
version: alpha
name: Shopify Polaris
category: "Design Systems"
description: 'Polaris, the Shopify UI framework now shipped as s-* web components, measured on the shopify.dev docs and in its live component previews: Inter at a 13px/450 base, near-black #303030 primary buttons and text, 8px-radius controls 28px (buttons) or 32px (fields) tall, 12px-radius sections, pale tone fills for badges and banners, and a docs shell in cool blue-greys.'

colors:
  canvas: "#ffffff"
  ink: "#303030"
  primary: "#303030"
  on-primary: "#ffffff"
  ink-muted: "#616161"
  ink-disabled: "#b5b5b5"
  surface-field: "#fdfdfd"
  border-field: "#8a8a8a"
  critical: "#c70a24"
  on-critical: "#fffafb"
  critical-text: "#8e0b21"
  critical-surface: "#fee8eb"
  badge-info-bg: "#d5ebff"
  badge-info-text: "#003a5a"
  badge-success-bg: "#affebf"
  badge-success-text: "#014b40"
  badge-caution-bg: "#ffeb78"
  badge-caution-text: "#4f4700"
  badge-warning-bg: "#ffd6a4"
  badge-warning-text: "#5e4200"
  badge-critical-bg: "#fed1d7"
  banner-info: "#91d0ff"
  banner-success: "#047b5d"
  docs-ink: "#44474a"
  docs-button-fill: "#eef3f7"
  docs-button-hover: "#e6eff5"
  docs-button-border: "#96c6dd"
  docs-link: "#475f91"
  docs-border: "#d2d5d8"
  docs-surface: "#fafbfb"

typography:
  display:
    fontFamily: Inter, -apple-system, "system-ui", "San Francisco", "Segoe UI", Roboto, "Helvetica Neue", sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 40px
  display-mobile:
    fontFamily: Inter, -apple-system, "system-ui", "San Francisco", "Segoe UI", Roboto, "Helvetica Neue", sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28px
  subheading:
    fontFamily: Inter, -apple-system, "system-ui", "San Francisco", "Segoe UI", Roboto, "Helvetica Neue", sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16px
  body:
    fontFamily: Inter, -apple-system, "system-ui", "San Francisco", "Segoe UI", Roboto, "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, -apple-system, "system-ui", "San Francisco", "Segoe UI", Roboto, "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  component-body:
    fontFamily: "'Inter', -apple-system, BlinkMacSystemFont, 'San Francisco', 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif"
    fontSize: 13px
    fontWeight: 450
  component-label:
    fontFamily: "'Inter', -apple-system, BlinkMacSystemFont, 'San Francisco', 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif"
    fontSize: 12px
    fontWeight: 550

rounded:
  xs: 3px
  sm: 4px
  md: 8px
  xl: 12px
  lg: 16px

spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 40px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.component-label}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 28px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.component-label}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 28px
  button-critical:
    backgroundColor: "{colors.critical}"
    textColor: "{colors.on-critical}"
    typography: "{typography.component-label}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 28px
  button-disabled:
    textColor: "{colors.ink-disabled}"
    typography: "{typography.component-label}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 28px
  text-field:
    backgroundColor: "{colors.surface-field}"
    textColor: "{colors.ink}"
    typography: "{typography.component-body}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 32px
  text-field-error:
    backgroundColor: "{colors.critical-surface}"
    textColor: "{colors.ink}"
    typography: "{typography.component-body}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 32px
  badge-info:
    backgroundColor: "{colors.badge-info-bg}"
    textColor: "{colors.badge-info-text}"
    typography: "{typography.component-label}"
    rounded: "{rounded.md}"
    padding: 2px 8px
    height: 20px
  badge-success:
    backgroundColor: "{colors.badge-success-bg}"
    textColor: "{colors.badge-success-text}"
    typography: "{typography.component-label}"
    rounded: "{rounded.md}"
    padding: 2px 8px
    height: 20px
  badge-caution:
    backgroundColor: "{colors.badge-caution-bg}"
    textColor: "{colors.badge-caution-text}"
    typography: "{typography.component-label}"
    rounded: "{rounded.md}"
    padding: 2px 8px
    height: 20px
  badge-warning:
    backgroundColor: "{colors.badge-warning-bg}"
    textColor: "{colors.badge-warning-text}"
    typography: "{typography.component-label}"
    rounded: "{rounded.md}"
    padding: 2px 8px
    height: 20px
  badge-critical:
    backgroundColor: "{colors.badge-critical-bg}"
    textColor: "{colors.critical-text}"
    typography: "{typography.component-label}"
    rounded: "{rounded.md}"
    padding: 2px 8px
    height: 20px
  section:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.component-body}"
    rounded: "{rounded.xl}"
    padding: 16px
  docs-button:
    backgroundColor: "{colors.docs-button-fill}"
    textColor: "{colors.docs-ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 8px
    height: 34px
    borderColor: "{colors.docs-button-border}"
  docs-button-hover:
    backgroundColor: "{colors.docs-button-hover}"
  docs-link:
    textColor: "{colors.docs-link}"
    typography: "{typography.body}"
  docs-nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.docs-ink}"
  docs-card:
    backgroundColor: "{colors.docs-surface}"
    textColor: "{colors.docs-link}"
    rounded: "{rounded.md}"
    padding: 12px
    borderColor: "{colors.docs-border}"
  docs-footer:
    backgroundColor: "{colors.docs-surface}"
    textColor: "{colors.docs-ink}"
    rounded: "{rounded.md}"
    padding: 40px 40px 32px
---

## Overview

Polaris is Shopify's UI framework for apps that run inside the Shopify admin and other Shopify surfaces. Its Polaris React library is deprecated and its repository archived; the current implementation is a set of `s-*` web components documented on shopify.dev. This file describes the system on two levels, and keeps them apart because they look different:

1. **The components**, measured in the live preview frames on the shopify.dev component pages (button, text-field, badge, banner, section). Those frames are `about:srcdoc` iframes, so the standard extractor cannot see them; a Playwright probe read computed styles through the shadow roots and the values are recorded in `SOURCES.json` under `_probes`.
2. **The docs shell** around them (`https://shopify.dev/docs/api/polaris`, which is where `polaris.shopify.com` now redirects), measured by the standard extractor on that page and on `/docs/api/app-home/polaris-web-components/actions/button`. The shell is a separate set of cool blue-grey colors (`{colors.docs-ink}`, `{colors.docs-button-fill}`, `{colors.docs-link}`) and is tokenized with a `docs-` prefix so it is not mistaken for the component style.

The capture of the measured page shows the docs shell: a thin white header with a green "dev docs" logo, a left sidebar toggle, a title "Polaris references" at 32px semibold, running text in `{colors.docs-ink}` with underlined blue-violet links, two columns of pale cards with pixel-style illustrations, and a light footer with four link columns. The components themselves are plainer: near-black primary buttons, white secondary buttons, tiny 12px labels and 13px body text.

**Key Characteristics**
- One typeface, Inter, with variable-looking weights (450 regular, 550 medium) at the component level, and 400/600 in the docs shell.
- A near-black primary: `{colors.primary}` (`#303030`) is both the primary button fill and the text color.
- Everything is 8px: buttons, text fields and badges all measure an 8px radius; sections use 12px.
- Compact controls: 28px buttons, 32px fields, 20px badges.
- Tone colors are pale fills with dark text of the same hue family (info, success, caution, warning, critical).
- Depth is made of inset hairlines and very light shadows rather than outer borders.

## Colors

### Component palette (measured in preview frames)

**Action**
- **Primary / ink** (`{colors.primary}`, `{colors.ink}`, `#303030`): fill of `s-button variant=primary` and the default text color of every component (`rgb(48, 48, 48)`). The same value is `gray[15]` in the archived `polaris-tokens` source, where `color-bg-fill-brand`, `color-text` are defined as `colors.gray[15]`.
- **On primary** (`{colors.on-primary}`, `#ffffff`): primary button text.
- **Secondary button**: white fill, `{colors.ink}` text.
- **Disabled** (`{colors.ink-disabled}`, `#b5b5b5`): text on a disabled button and a disabled field; fill is `rgba(0,0,0,0.05)`. In the token source `#b5b5b5` is `gray[11]`.

**Text and fields**
- **Ink muted** (`{colors.ink-muted}`, `#616161`): read-only field text and default badge text; `gray[13]`, the value behind `color-text-secondary`.
- **Field surface** (`{colors.surface-field}`, `#fdfdfd`): the text-field fill (`gray[2]`).
- **Field border** (`{colors.border-field}`, `#8a8a8a`): an inset 0.66px ring around the field (`gray[12]`).

**Critical**
- **Critical** (`{colors.critical}`, `#c70a24`) with **on critical** (`{colors.on-critical}`, `#fffafb`): `s-button variant=primary tone=critical`.
- **Critical text** (`{colors.critical-text}`, `#8e0b21`): text of a `tone=critical` secondary button, the error ring on an invalid field, and critical badge text.
- **Critical surface** (`{colors.critical-surface}`, `#fee8eb`): the fill of a text field with an `error` message.

**Badge tones** (fill and text, both measured)
| Tone | Fill | Text |
|---|---|---|
| default | `rgba(0,0,0,0.06)` | `{colors.ink-muted}` |
| info | `{colors.badge-info-bg}` `#d5ebff` | `{colors.badge-info-text}` `#003a5a` |
| success | `{colors.badge-success-bg}` `#affebf` | `{colors.badge-success-text}` `#014b40` |
| caution | `{colors.badge-caution-bg}` `#ffeb78` | `{colors.badge-caution-text}` `#4f4700` |
| warning | `{colors.badge-warning-bg}` `#ffd6a4` | `{colors.badge-warning-text}` `#5e4200` |
| critical | `{colors.badge-critical-bg}` `#fed1d7` | `{colors.critical-text}` |

**Banner**: the banner's colored header strip measured `#91d0ff` for info (`{colors.banner-info}`) with text `#002133`, `#ffb800` for warning with text `#251a00`, `#c70a24` for critical, and `#047b5d` for success (`{colors.banner-success}`) with near-white text (`rgb(250, 255, 251)`). Only the info and success strips are promoted to tokens.

### Docs shell palette (measured by the extractor)
- **Docs ink** (`{colors.docs-ink}`, `#44474a`): the most-read text color on the page (1801 characters) and the text color of the docs buttons.
- **Docs button fill** (`{colors.docs-button-fill}`, `#eef3f7`), **hover** (`{colors.docs-button-hover}`, `#e6eff5`) and **border** (`{colors.docs-button-border}`, `#96c6dd`): the "Ask assistant" button in the header; the extractor chose it as the primary CTA. It is part of the docs site, not of Polaris.
- **Docs link** (`{colors.docs-link}`, `#475f91`): link text and the text inside cards.
- **Docs border** (`{colors.docs-border}`, `#d2d5d8`) and **docs surface** (`{colors.docs-surface}`, `#fafbfb`): card and footer treatment.
- Other docs text colors measured: `#202223` (headings), `#6d7175` (secondary). The code preview panels use a dark teal (`#304b4f`) with syntax colors, none of which are tokens.

### Official token source
The archived repository's `polaris-tokens` package defines the neutral scale used above: `gray[1]` `#ffffff`, `gray[2]` `#fdfdfd`, `gray[11]` `#b5b5b5`, `gray[12]` `#8a8a8a`, `gray[13]` `#616161`, `gray[14]` `#4a4a4a`, `gray[15]` `#303030`, `gray[16]` `#1a1a1a` (all written as `rgba(r, g, b, 1)` in `colors.ts`). Semantic names include `color-bg` (`gray[6]`), `color-bg-surface` (`gray[1]`), `color-bg-fill-brand` (`gray[15]`), `color-text` (`gray[15]`), `color-text-secondary` (`gray[13]`), `color-text-link` (`blue[13]`, `#005bd3`) and `color-border` (`gray[8]`). These are Polaris React values; the web-component previews agree with them for the primary fill, text, secondary text and field colors above.

## Typography

### Font family
Inter. The Polaris React token `font-family-sans` is `'Inter', -apple-system, BlinkMacSystemFont, 'San Francisco', 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif` and `font-family-mono` is `ui-monospace, SFMono-Regular, 'SF Mono', Consolas, 'Liberation Mono', Menlo, monospace`. In the web-component previews the computed family begins `Inter, "Noto Sans Arabic", "Noto Sans He...` (truncated in the probe), i.e. Inter with additional script fallbacks. The docs shell loads Inter 400 and 600 and JetBrains Mono 400 and 700 (for code).

Inter is an open-source family; no substitute is needed.

### Weights
The token source defines `font-weight-regular` 450, `-medium` 550, `-semibold` 650 and `-bold` 700, and the previews measured 450 for body and 550 for button, badge and label text. The docs shell instead measured 400 and 600.

### Letter spacing and size scale
The token source lists letter-spacings `-0.54px` (densest), `-0.3px`, `-0.2px` and `0px`, and font sizes at 11, 12, 13, 14, 16, 18, 20, 22, 24, 30, 32, 36 and 40px (scale names 275 to 1000). The previews measured 12px (buttons, badges), 13px (body, fields, banner and section text) and 13px 550 on the large badge.

### Hierarchy

| Token | Size | Weight | Line height | Where measured |
|---|---|---|---|---|
| `{typography.component-body}` | 13px | 450 | not recorded | text-field, section, banner text in previews |
| `{typography.component-label}` | 12px | 550 | not recorded | buttons and badges in previews |
| `{typography.display}` | 32px | 600 | 40px | docs page title |
| `{typography.display-mobile}` | 24px | 600 | 28px | docs title at 390px |
| `{typography.subheading}` | 12px | 600 | 16px | docs sub-label |
| `{typography.body}` | 16px | 400 | 24px | docs running text |
| `{typography.button}` | 14px | 400 | 20px | docs button |

Docs-shell character tally by size: 14px (1146 chars), 16px (1009), 24px (92), 12px (35), 32px (18). On the button page: 14px (12215), 20px (932), 12px (781).

## Layout

- **Docs shell**: 48px header; a collapsible left rail of about 40px; content column about 600px wide with a second column ("Use cases" panel) on the button page; footer in four link columns padded `40px 40px 32px`.
- **Preview frames**: components sit centered in a white iframe; a code panel with the HTML sits next to it (`<s-button>Save</s-button>`).
- **Component spacing in previews**: section padding 16px, field horizontal padding 12px, button padding `6px 12px` (`4px 12px 4px 6px` when an icon leads), badge `2px 8px` (`4px 8px` for the large badge), banner strip padding `12px 8px 12px 12px` inside a 12px-radius container.
- **Spacing scale**: the token source defines `space-025` 1px, `050` 2px, `100` 4px, `150` 6px, `200` 8px, `300` 12px, `400` 16px, `500` 20px, `600` 24px, `800` 32px, `1000` 40px, `1200` 48px, `1600` 64px up to `3200` 128px, plus aliases `space-card-gap` and `space-card-padding` (16px) and `space-button-group-gap` (8px). The frontmatter spacing group lists the values measured on the docs page (2, 3, 4, 6, 8, 12, 16, 20, 40px).
- **Breakpoints** in the token source: sm 490px, md 768px, lg 1040px, xl 1440px.
- **Page length**: the references page scrolls 1867px; the button page 9634px.

## Elevation & Depth

Measured shadows in the previews:

| Element | Treatment |
|---|---|
| secondary button | `rgb(181,181,181) 0 -1px 0 0 inset, rgba(0,0,0,0.1) 0 0 0 1px inset, rgb(255,255,255) 0 0.5px 0 1.5px inset` |
| primary button | `rgba(0,0,0,0.8) 0 -1px 0 1px inset, rgb(48,48,48) 0 0 0 1px inset, rgba(255,255,255,0.25) 0 0.5px 0 1.5px inset` |
| text field | `rgb(138,138,138) 0 0 0 0.66px inset`; error: `rgb(142,11,33) 0 0 0 1px inset` |
| section | `rgba(0,0,0,0.03) 0 5px 5px -2.5px, rgba(0,0,0,0.02) 0 3px 3px -1.5px, ...` (layered, very light) |
| banner | `rgba(0,0,0,0.08) 0 8px 10px -5px, rgba(0,0,0,0.03) 0 5px 5px -2.5px, ...` |

Docs-shell shadows: `rgba(0,0,0,0.1) 0 1px 0 0` (cards, weight 24) and the header button's two-layer inset (`rgba(0,0,0,0.2) 0 -2px 0 0 inset, rgba(255,255,255,0.75) 0 2px 0 0 inset`). The token source's elevation scale begins `shadow-100: 0px 1px 0px 0px rgba(26, 26, 26, 0.07)`, `shadow-200: 0px 3px 1px -1px rgba(26, 26, 26, 0.07)` and `shadow-300: 0px 4px 6px -2px rgba(26, 26, 26, 0.20)`.

## Shapes

| Token | Value | Measured use |
|---|---|---|
| `{rounded.xs}` | 3px | docs shell, 1 element |
| `{rounded.sm}` | 4px | docs shell, 159 elements on the button page |
| `{rounded.md}` | 8px | buttons, text fields, badges in previews; docs cards and buttons |
| `{rounded.xl}` | 12px | sections and banners in previews |
| `{rounded.lg}` | 16px | one docs element |

The archived token source's border radii are 0, 2, 4, 6, 8, 12, 16, 20 and 30px plus `full` (9999px).

## Components

All values below were read from the live previews unless noted.

### Buttons (`s-button`)
Documented properties (https://shopify.dev/docs/api/app-home/polaris-web-components/actions/button): `variant` is `auto`, `primary`, `secondary` or `tertiary`; `tone` is `auto`, `neutral` or `critical`; `inlineSize` is `auto`, `fill` or `fit-content`; there are also `loading`, `disabled`, `icon`, `href`, `command` and `commandFor`. The page's guidance is to use primary buttons for main actions, secondary for supporting actions and tertiary for supplementary ones, to reserve the critical tone for destructive actions, and to use action-oriented verb labels.
- **`button-primary`**: fill `{colors.primary}`, text `{colors.on-primary}`, 8px radius, `6px 12px`, 28px tall, 12px/550.
- **`button-secondary`**: white fill, `{colors.ink}` text, same geometry; this is also what `variant=auto` and `tone=neutral` rendered.
- **`button-critical`**: `variant=primary tone=critical`, fill `{colors.critical}`, text `{colors.on-critical}`.
- **`button-disabled`**: text `{colors.ink-disabled}`, fill `rgba(0,0,0,0.05)`.
- **Loading** state: the label color becomes transparent and the fill `rgba(0,0,0,0.17)` (primary) or `rgba(0,0,0,0.05)` (secondary).
- Tertiary buttons rendered with no box (no background or border) in the probe.
- **`docs-button`**: the docs-shell header button, 34px tall, `6px 8px`, 14px/400, `{colors.docs-button-fill}`, 1px `{colors.docs-button-border}`; hover `{colors.docs-button-hover}`.

### Text fields (`s-text-field`)
- **`text-field`**: fill `{colors.surface-field}`, 8px radius, `0px 12px` padding, 32px tall, 13px/450, 0.66px inset ring `{colors.border-field}`. Read-only: text `{colors.ink-muted}`, fill `rgba(0,0,0,0.05)`. Disabled: text `{colors.ink-disabled}`. Error: **`text-field-error`**, fill `{colors.critical-surface}` with a 1px `{colors.critical-text}` ring.

### Badges (`s-badge`)
- 20px tall, `2px 8px`, 8px radius, 12px/550. Large size: 28px tall, `4px 8px`, 13px/550. Tone colors in the table above.

### Sections and banners
- **`section`** (`s-section`): white fill, 12px radius, 16px padding, layered light shadow.
- **Banner**: a white rounded container (12px) with a colored strip in the tone color carrying text in a darker tone color.

### Docs-shell pieces
- **`docs-card`**: fill `{colors.docs-surface}`, 8px radius, 12px padding, 1px `{colors.docs-border}` border, shadow `rgba(0,0,0,0.1) 0 2px 0 0` on the references page. **`docs-footer`**: same fill, 8px radius, padding `40px 40px 32px`. **`docs-link`**: `{colors.docs-link}`, underlined in the capture. **`docs-nav`**: white, text `{colors.docs-ink}`.

## Design System Architecture

Polaris is a public, documented design system. What was opened and confirmed:

- **Web components (current)**: https://shopify.dev/docs/api/app-home/polaris-web-components groups components into seven categories: Actions, Feedback and Status Indicators, Forms, Layout and Structure, Media and Visuals, Overlays, and Typography and Content. It says the components "follow Shopify's design system". The page opened did not describe theming, tokens or a dark mode, so none is claimed here. The https://shopify.dev/docs/api/polaris page describes Polaris as "Shopify's unified UI framework built on web components".
- **Polaris React (archived)**: https://github.com/Shopify/polaris (now `Shopify/polaris-react-archive`, an archived repository described as "Shopify's Polaris Design System - React implementation (Deprecated)"). The README says Polaris React is deprecated, recommends migrating to Polaris web components, and lists the packages `polaris-react`, `polaris-tokens`, `polaris-icons`, `polaris-for-vscode`, `stylelint-polaris` and a `polaris.shopify.com` documentation site.
- **Tokens**: the `polaris-tokens` package source (`src/colors.ts`, `src/size.ts`, `src/themes/base/{color,font,space,border,shadow,breakpoints}.ts`, raw files from https://raw.githubusercontent.com/Shopify/polaris-react-archive/main/polaris-tokens/src/) is the official token source. It defines a 16-step color scale per hue, a size scale in px (`size[100]` is 4px), and semantic tokens (`color-bg-fill-brand`, `color-text`, `border-radius-200`, `space-400`, `font-weight-medium`, and so on). Whether the web components consume these exact tokens was not verified; the matching values noted above are from comparing measurements, not from source code of the web components.
- **Migration**: Shopify publishes migration guides from Polaris React to web components under https://shopify.dev/docs/apps/build/app-home/migrate-from-polaris-react/; the pages were not opened for this file, so no detail is given.

The web components are used in markup as `<s-button>`, `<s-text-field>`, `<s-badge>`, `<s-banner>` and `<s-section>`, and their internals live in shadow roots, which is why the probe had to read through them.

## Do's and Don'ts

**Do**
- Use `variant=primary` once per surface for the main action; use secondary for supporting actions and tertiary for the least important.
- Keep tone colors for meaning: critical only for destructive or error states.
- Use 8px radius for controls and 12px for sections.
- Pair each pale tone fill with its dark same-family text color from the badge table.
- Keep text at 13px/450 in components and labels at 12px/550.

**Don't**
- Do not apply the docs-shell blue-greys (`{colors.docs-ink}`, `{colors.docs-button-fill}`) to product UI; they belong to the documentation site.
- Do not use the critical tone for decoration.
- Do not draw outer borders on fields; the measured field uses an inset ring.
- Do not assume Polaris React token names carry over to the web components; this was not verified.

## Responsive Behavior

- **Docs shell at 390px**: the extractor measured the title at 24px/600 with 28px line height (`{typography.display-mobile}`) instead of 32px/600.
- **Token source breakpoints**: 490px, 768px, 1040px and 1440px (`breakpoints-sm` to `-xl`).
- **Component sizing**: the button property `inlineSize` offers `auto`, `fill` and `fit-content`.
- Column counts and menu behavior of the docs shell at small widths were not captured and are not described.

## Iteration Guide

1. For product UI, start from `{colors.canvas}` surfaces, `{colors.ink}` text and 13px/450 Inter.
2. Add one `{colors.primary}` button per area; make the rest secondary.
3. Use 8px radius, 28px buttons and 32px fields; wrap content in 12px-radius sections with 16px padding.
4. Choose badge and banner tones from the table; keep the fill pale and the text dark.
5. If you need a value that is not here, probe the live component (shadow roots included) before adding it, and record it under `_probes` in `SOURCES.json`.
6. Treat everything prefixed `docs-` as documentation chrome only.
