---
version: alpha
name: Preline UI
category: "Frontend Frameworks"
description: 'Preline UI, the open-source Tailwind CSS component library, as measured on preline.co and in its live component previews: a stone-grey page (#f5f5f4 canvas, #292524 ink), one electric blue #155dfc for solid buttons and links, 8px-radius 46px buttons and fields, 12px cards, the system-ui font stack, and a gray-toned demo palette (#e5e7eb borders, #1e2939 text) inside the previews.'

colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f4"
  ink: "#292524"
  primary: "#155dfc"
  on-primary: "#ffffff"
  secondary: "#101828"
  on-secondary: "#ffffff"
  soft-blue: "#dbeafe"
  on-soft-blue: "#193cb8"
  surface-subtle: "#fafaf9"
  ink-muted: "#79716b"
  ink-secondary: "#57534d"
  ink-faint: "#a6a09b"
  hairline: "#e7e5e4"
  nav-bg: "#ffffffbf"
  nav-text: "#000000"
  gray-ink: "#1e2939"
  gray-muted: "#6a7282"
  gray-border: "#e5e7eb"
  teal: "#00bba7"
  danger: "#fb2c36"
  warning: "#f0b100"
typography:
  display:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 48px
    fontWeight: 700
    lineHeight: 60px
  display-mobile:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
  heading:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  subheading:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 29.25px
  button:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  input-demo:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16px
  input:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 16px
    height: 46px
  button-primary-sm:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 38px
  button-primary-lg:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 16px
    height: 54px
  button-dark:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.on-secondary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 16px
    height: 46px
  button-soft:
    backgroundColor: "{colors.soft-blue}"
    textColor: "{colors.on-soft-blue}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 16px
    height: 46px
  button-outline:
    textColor: "{colors.gray-muted}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 16px
    height: 46px
    borderColor: "{colors.gray-border}"
  button-white:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.gray-ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 16px
    height: 46px
    borderColor: "{colors.gray-border}"
  button-nav-cta:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 8px 6px 12px
    height: 34px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.nav-text}"
    padding: 12px 0px
  nav-link:
    textColor: "{colors.nav-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.gray-ink}"
    typography: "{typography.input-demo}"
    rounded: "{rounded.md}"
    padding: 10px 16px
    height: 46px
    borderColor: "{colors.gray-border}"
  text-input-site:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 46px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.nav-text}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.page-largest}"
  footer:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.nav-text}"
    borderColor: "{colors.hairline}"
---

## Overview

Preline UI is an open-source component library built on Tailwind CSS. Its own site (`https://preline.co`) is both the marketing page and the documentation, so this file describes two surfaces that were measured separately:

1. **The site chrome and marketing page**, captured and measured by the extractor on `https://preline.co/` (1280px and 390px), and on the docs pages `https://preline.co/docs/buttons.html` and `https://preline.co/docs/input.html`. These use a stone-grey neutral set: `{colors.ink}` (`#292524`), `{colors.ink-muted}` (`#79716b`), `{colors.hairline}` (`#e7e5e4`) and a `{colors.page-largest}` (`#f5f5f4`) page background.
2. **The live component previews** inside the docs, which render in `about:srcdoc` iframes the extractor cannot see. A Playwright probe read their computed styles (colors converted to sRGB through a canvas) and the values are recorded in `SOURCES.json` under `_probes`. The previews use a gray-toned set: `{colors.gray-ink}` (`#1e2939`), `{colors.gray-muted}` (`#6a7282`) and `{colors.gray-border}` (`#e5e7eb`).

The Preline docs say components use "standard Tailwind utility classes" and the library avoids proprietary abstractions; that matches the class names seen in the probe (`py-2`, `px-3`, `rounded-lg`, `text-stone-800`).

The capture of the home page shows, from top to bottom: a slim announcement bar with a green dot ("Update v5.0 - Preline MCP, AI Prompts, Animated Icons and more. Visit Changelog") and a GitHub star badge; a translucent white header with the preline logo, a rounded search field with a keyboard hint, text links (Docs, Blocks, Templates, Plugins, Preline AI, Design, Pro, Pricing), "Sign in" and a solid blue "Get all access" button; a hero with the headline "Preline UI, crafted with Tailwind CSS" (the first two words in blue), a "BUILT WITH" row of HTML, JavaScript and TypeScript icons, a paragraph, a blue "Get started" button and a monospace `$ npm i preline` copy box, and on the right an isometric illustration of UI cards on a dotted background; three icon-led feature columns; a centered "Build with AI" section with three bordered cards; a "Works with your agent" icon row with two buttons; and a "Supercharge your Tailwind CSS projects" band with three cards (one showing a large blue "972").

**Key Characteristics**
- One saturated color: `{colors.primary}` (`#155dfc`) for solid buttons, link text, highlighted headline words and large numerals.
- Stone neutrals on the site and gray neutrals in the previews.
- 8px radius on buttons and fields, 12px on cards, fully round (pill) for icon buttons and toggles.
- The system font stack with no custom webfont (no fonts were reported as loaded).
- Very light shadows (`0 1px 3px` and `0 1px 2px`) and 1px hairline borders instead of heavy elevation.
- Dense, utility-driven spacing in multiples of 4px.

## Colors

### Site (measured on the home page)
- **Primary** (`{colors.primary}`, `#155dfc`) with **on primary** (`{colors.on-primary}`, `#ffffff`): "Get started" and "Get all access" fills; 86 area-weight units of fill, and 294 characters of text in this color (links, highlighted words). The hover record for "Get all access" lists its fill as `oklch(0.546 0.245 262.881)`.
- **Ink** (`{colors.ink}`, `#292524`): the most-read text color (3192 characters).
- **Ink muted** (`{colors.ink-muted}`, `#79716b`, 2946 characters), **ink secondary** (`{colors.ink-secondary}`, `#57534d`, 1243) and **ink faint** (`{colors.ink-faint}`, `#a6a09b`, 325).
- **Canvas** (`{colors.canvas}`, `#ffffff`), **page largest** (`{colors.page-largest}`, `#f5f5f4`, area weight 3488, the largest background), **surface subtle** (`{colors.surface-subtle}`, `#fafaf9`, 1213).
- **Hairline** (`{colors.hairline}`, `#e7e5e4`): the most common border (28 elements).
- **Nav** background `{colors.nav-bg}` (`#ffffffbf`, white at 75% opacity) and text `{colors.nav-text}` (`#000000`).
- Other values measured on the page: `#cbfbf1` and `#005f5a` (a teal soft badge or tag), `#00a63e` (green text and border; the element was not identified), `#2b7fff` and `#1970f0` (lighter blues), and `#05df72`, `#ff6467`, `#ffb900`, `#00c950` at zero area weight (elements not identified).

### Component previews (measured by the probe)
| Variant | Fill | Text | Border |
|---|---|---|---|
| Solid (primary) | `{colors.primary}` | `{colors.on-primary}` | none |
| Solid dark | `{colors.secondary}` `#101828` | `{colors.on-secondary}` | none |
| Solid gray | `{colors.gray-muted}` `#6a7282` | white | none |
| Solid teal / red / yellow | `{colors.teal}` `#00bba7`, `{colors.danger}` `#fb2c36`, `{colors.warning}` `#f0b100` | white | none |
| Soft blue | `{colors.soft-blue}` `#dbeafe` | `{colors.on-soft-blue}` `#193cb8` | none |
| Soft teal / red / yellow / gray | `#cbfbf1` / `#ffe2e2` / `#fef9c2` / `#f3f4f6` | `#005f5a` / `#9f0712` / `#894b00` / `#1e2939` | none |
| Outline | transparent | the variant color (`#6a7282`, `#155dfc`, ...) | 1px in the variant color; the default outline is `{colors.gray-border}` |
| White | `{colors.canvas}` | `{colors.gray-ink}` | 1px `{colors.gray-border}`, shadow `0 1px 0 rgba(0,0,0,0.05)` |
| Ghost / link | transparent | the variant color | none |

Only the first seven rows' key colors are promoted to tokens; the soft tints other than blue are listed here for reference. Inputs: fill `{colors.canvas}`, 1px `{colors.gray-border}` border, text `{colors.gray-ink}`; a filled variant uses `#f3f4f6`.

### Theme tokens (official source)
The Preline docs (https://preline.co/docs/themes.html) say themes are semantic CSS variables such as `--primary`, `--background`, `--foreground` and `--border`, grouped as Brand, Background, Foreground, Surface, Navbar and Card, and show default light values `--background: var(--color-white)`, `--foreground: var(--color-stone-800)`, `--primary: var(--color-primary-600)` and `--border: var(--color-stone-200)`. The repository's `css/themes/theme.css` (a raw file read for this document) defines the same variables with a `:root` block in which `--foreground` is `var(--color-gray-800)`, `--primary` is `var(--color-primary-600)` mapped to `var(--color-blue-600)`, `--primary-hover` is `--color-primary-700`, `--secondary` is `--color-gray-900`, `--border` is `--color-gray-200`, and `--destructive` is `--color-red-500`. The two sources differ in the neutral (stone in the docs sample, gray in the repo file); the measured site uses stone-like values for its chrome and gray-like values in the previews, and this file reports both as measured. The theme file also defines four custom palettes named `preline-khaki`, `preline-mauve`, `preline-avocado` and `preline-avocado-soft`, written in `oklch()`.

## Typography

### Font family
The computed stack is `-apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"`; `ui-monospace` is used for code (152 characters). No webfont was reported as loaded, so the text renders in the viewer's system font. The theme file defines optional custom font variables (`--font-custom-serif` with "Domine", `--font-custom-mono` with "Kode Mono") that are not in use on the measured pages.

### Font substitutes
None needed: the stack is already system fonts.

### Hierarchy

| Token | Size | Weight | Line height | Where measured |
|---|---|---|---|---|
| `{typography.display}` | 48px | 700 | 60px | hero h1 |
| `{typography.display-mobile}` | 30px | 700 | 36px | h1 at 390px |
| `{typography.subheading}` | 20px | 600 | 28px | card titles |
| `{typography.heading}` | 16px | 600 | 24px | h2 sample |
| `{typography.body}` | 18px | 400 | 29.25px | hero paragraph |
| `{typography.nav}` | 16px | 400 | 24px | navigation |
| `{typography.input-demo}` | 16px | 400 | 24px | input previews |
| `{typography.input}` | 14px | 400 | 20px | site search field |
| `{typography.button}` | 14px | 500 | 20px | all buttons |
| `{typography.link}` | 12px | 600 | 16px | announcement link |

Other sizes in the character tally: 16px (2998 chars), 14px (2102), 18px (1823), 15px (411), 12px (305), 30px (248), 20px (203), 13px (66), 24px (66), 48px (48), 10px (26), 11px (15), 9px (7), 72px (3). Weights: 400 (6381), 500 (1153), 600 (727), 700 (60). Letter-spacing: only `0.7px` at 14px (21 characters, an uppercase label such as "BUILT WITH" or "WORKS WITH YOUR AGENT").

### Principles seen on the page
- Headlines are bold (700) and tight; the highlighted words ("Preline UI,", "AI", "Tailwind CSS") switch to `{colors.primary}`.
- Buttons are medium weight 14px; link buttons are semibold 14px.
- Uppercase eyebrows use 0.7px tracking.

## Layout

- **Header**: 60px tall, `12px 0px` padding, translucent white (`#ffffffbf`). The announcement bar sits above it.
- **Container**: content spans about 24px to 936px of the 960px-wide capture (a 24px gutter at that scale), in a three-column grid for features and cards.
- **Hero**: two columns, text left, illustration right.
- **Docs pages**: a left rail of grouped links (Resources, Customization, Layout & Content), a center column about 450px wide in the capture, and a right "On this page" list; each example is a rounded "Preview / HTML" tabbed box with a "Copy Code" button.
- **Spacing**: measured gaps are 12px (42 uses), 8px (35), 4px (27), 24px (22), 20px (20), 32px (18), 16px (17), 6px (9), 36px, 48px and 40px; paddings are 16px (70), 8px (54), 32px (52), 12px (25), 14px (25), 24px (23).
- **Page length**: 12654px for the home page.

## Elevation & Depth

Measured shadows on the home page, most common first: `0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -4px rgba(0,0,0,0.1)` (30 elements), `0 4px 6px -1px / 0 2px 4px -2px` at 10% (15), `0 1px 2px 0 rgba(0,0,0,0.05)` (8). On the docs pages: `0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px -1px rgba(0,0,0,0.1)` (17 elements) and `0 1px 0 0 rgba(0,0,0,0.05)` (the white button).

| Level | Treatment | Use |
|---|---|---|
| 0 | flat with 1px `{colors.hairline}` | footer border; cards in the capture |
| 1 | `0 1px 2px / 0 1px 3px` | white buttons, small controls |
| 2 | `0 4px 6px -1px` | use not identified |
| 3 | `0 10px 15px -3px` | most common on the home page (30 elements) |

## Shapes

Measured radii on the home page: 12px (110 elements), 8px (79), fully round (41; reported as `3.35544e+07px`), `12px 12px 0 0` (29, card tops), `0 0 12px 12px` (25), 6px (9), 16px (9), 4px (4).

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | 4 elements on the home page; 102 on the buttons docs page |
| `{rounded.sm}` | 6px | the header "Get all access" button |
| `{rounded.md}` | 8px | buttons, inputs |
| `{rounded.lg}` | 12px | cards |
| `{rounded.xl}` | 16px | large panels |
| `{rounded.pill}` | 9999px | icon buttons, toggles, pill inputs |

## Components

### Buttons
Measured in the previews (`https://preline.co/docs/buttons.html`):
- **`button-primary`**: `{colors.primary}` fill, white text, 14px/500, 8px radius, `12px 16px` padding, 46px tall. **`button-primary-sm`**: `8px 12px`, 38px tall. **`button-primary-lg`**: `16px`, 54px tall.
- **`button-dark`**: `{colors.secondary}` fill. **`button-soft`**: `{colors.soft-blue}` fill, `{colors.on-soft-blue}` text. **`button-outline`**: transparent, 1px `{colors.gray-border}`, text `{colors.gray-muted}`. **`button-white`**: `{colors.canvas}` fill, text `{colors.gray-ink}`, 1px `{colors.gray-border}`.
- Link buttons ("Dark link", "Muted link", "Primary link") are 14px/600 with no padding.
- **`button-nav-cta`**: the header "Get all access": `{colors.primary}` fill and border, 6px radius, `6px 8px 6px 12px` padding, 34px tall, shadow `0 1px 0 rgba(0,0,0,0.05)`. The "Get started" hero button is the 46px version.
- The docs showcase six color families for solid, outline, ghost, soft, white and link styles: dark, gray, teal, blue, red and yellow.

### Inputs
- **`text-input`** (previews): `{colors.canvas}` fill, 1px `{colors.gray-border}`, text `{colors.gray-ink}` 16px/400, 8px radius, `10px 16px` padding, 46px tall; other sizes measured at 38px (`6px 12px`), 54px (`14px`) and 58px (`16px`, floating-label variants); a filled variant (`#f3f4f6`) and a pill variant exist. Labels are 14px/500 in `{colors.gray-ink}`.
- **`text-input-site`**: the search field on the site, 46px tall, `8px 12px`, 1px `{colors.hairline}`, 14px/400, text `{colors.ink}`.

### Cards
- **`card`**: 12px radius, 1px hairline border, `{colors.surface-subtle}` as measured on the card role. In the capture the cards are white with a hairline border, an illustration panel on top (a light-grey area with product mockups), a bold title, grey body copy and a blue "Explore ... >" link at the bottom.

### Navigation and footer
- **`nav`**: `{colors.nav-bg}`, `{colors.nav-text}`, padding `12px 0px`; **`nav-link`**: 16px/400 with a 6px radius. **`footer`**: `{colors.surface-subtle}` with a 1px `{colors.hairline}` border; the measured footer begins with a "Subscribe" block and counters ("640+ Components", "972 Blocks", "22 Templates", "27 ..."), which are the page's own numbers.

## Design System Architecture

Preline publishes its system openly:
- **Repository**: https://github.com/htmlstreamofficial/preline describes Preline UI as "an open-source set of prebuilt UI components based on the utility-first Tailwind CSS framework", with MIT license plus a Preline UI Fair Use License, and folders `src`, `dist`, `css/themes`, `templates`, `skills` and `scripts`.
- **Docs**: https://preline.co/docs/about.html says it includes 640+ components, 27 headless unstyled Tailwind JavaScript plugins, templates, optional themes, a Figma design system, built-in dark mode and accessibility features (ARIA roles, keyboard support), and that components use standard Tailwind utility classes that can be copied into a project. https://preline.co/docs/index.html says to install with `npm i preline`, to add the Tailwind CSS Forms plugin, to import the Preline variants, theme CSS (`@import "./themes/theme.css";`) and the script `./node_modules/preline/dist/preline.js`.
- **Themes**: https://preline.co/docs/themes.html (semantic tokens, `data-theme="theme-harvest"` activation on the `<html>` element for predefined themes, the base theme imported once).
- **Colors**: https://preline.co/docs/colors.html lists the standard Tailwind palettes plus the custom `preline-khaki`, `preline-mauve` and `preline-avocado` sets, each with 50 to 950 shades.
- **Dark mode**: https://preline.co/docs/dark-mode.html says the variant is `dark:`, applied when the `dark` class is on `<html>`, set up with `@custom-variant dark (&:where(.dark, .dark *));`, with the preference stored in `localStorage` (`hs_theme`) and switch attributes `data-hs-theme-switch` and `data-hs-theme-click-value`.
- **Figma**: a Figma design system is named by the repository and the docs; its contents were not opened.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the one primary action in a view; use dark, soft, outline or white buttons for secondary actions.
- Keep controls at 8px radius and 46px height at the default size; use 38px and 54px for small and large.
- Use a 1px hairline border and a light shadow for cards at 12px radius.
- Override semantic tokens (`--primary`, `--background`, `--border`) when theming instead of rewriting Tailwind mappings, as the theme docs describe.
- Highlight key words in a headline with `{colors.primary}`.

**Don't**
- Do not mix the site's stone neutrals and the previews' gray neutrals in one product without choosing one; they are different values.
- Do not add heavy shadows; the measured elevation is subtle.
- Do not rely on a webfont; the measured pages use the system stack.
- Do not use more than one solid color family in a single action group.

## Responsive Behavior

Two viewports were measured. At 390px the extractor recorded the hero h1 at 30px/700 (36px line height) instead of 48px/60px (`{typography.display-mobile}`). The docs pages use Tailwind's responsive prefixes (the probe shows classes such as `lg:px-2` and `lg:gap-x-1` on header links), which indicates a `lg` breakpoint for the header layout; the breakpoint pixel value was not measured and is not stated here. Card and feature grids collapse from three columns, but the column counts at narrower widths were not captured.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.ink}`; use stone neutrals for the site and gray neutrals for components, consistently within a product.
2. Build buttons at 46px with `12px 16px` padding, 14px/500 text and an 8px radius; fill with `{colors.primary}` for the primary action.
3. Cards: 12px radius, 1px `{colors.hairline}`, `0 1px 2px` shadow.
4. Theme by overriding the semantic CSS variables; import the base theme once.
5. For any value not in the frontmatter, measure it (including inside preview iframes) before adding it, and record probes in `SOURCES.json`.
