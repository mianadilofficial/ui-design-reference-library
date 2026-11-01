---
version: alpha
name: Tremor
category: "Atomic CSS & Utilities"
description: "Tremor is an open-source React and Tailwind CSS kit for charts and dashboards; its site and components use Geist Sans, a white canvas, near-black #101828 headlines, a #2b7fff blue primary, 6px-radius controls with #d1d5dc borders, and soft layered card shadows."
colors:
  canvas: "#ffffff"
  ink: "#101828"
  ink-strong: "#4a5565"
  ink-secondary: "#364153"
  ink-muted: "#6a7282"
  ink-placeholder: "#99a1af"
  primary: "#2b7fff"
  primary-hover: "#155dfc"
  primary-disabled: "#8ec5ff"
  on-primary: "#ffffff"
  danger: "#e7000b"
  surface-dark: "#030712"
  surface-black: "#000000"
  surface-muted: "#f3f4f6"
  card-dark: "#090e1a"
  hairline: "#d1d5dc"
  hairline-card: "#e5e7eb"
  nav-bg: "#ffffffe6"
typography:
  display:
    fontFamily: __GeistSans_fb8f2c, __GeistSans_Fallback_fb8f2c
    fontSize: 60px
    fontWeight: 700
    lineHeight: 60px
    letterSpacing: "-2.1px"
  display-mobile:
    fontFamily: __GeistSans_fb8f2c, __GeistSans_Fallback_fb8f2c
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-1.26px"
  heading:
    fontFamily: __GeistSans_fb8f2c, __GeistSans_Fallback_fb8f2c
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.4px"
  subheading:
    fontFamily: __GeistSans_fb8f2c, __GeistSans_Fallback_fb8f2c
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  body:
    fontFamily: __GeistSans_fb8f2c, __GeistSans_Fallback_fb8f2c
    fontSize: 18px
    fontWeight: 500
    lineHeight: 32px
  button:
    fontFamily: __GeistSans_fb8f2c, __GeistSans_Fallback_fb8f2c
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  nav:
    fontFamily: __GeistSans_fb8f2c, __GeistSans_Fallback_fb8f2c
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: __GeistSans_fb8f2c, __GeistSans_Fallback_fb8f2c
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  code:
    fontFamily: ui-monospace
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 1px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.5px
  s3: 2px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 38px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-disabled:
    backgroundColor: "{colors.primary-disabled}"
    textColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
  button-destructive:
    backgroundColor: "{colors.danger}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 38px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.md}"
    padding: 8px 10px
    height: 38px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.hairline-card}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.surface-black}"
  footer:
    textColor: "{colors.surface-black}"
    padding: 40px 0px
    borderColor: "{colors.hairline-card}"
---

## Overview

Tremor's homepage, captured at 1280px, presents the library through its own output. A thin black announcement bar carries the Vercel mark and the line "Tremor is joining Vercel. Read more about our journey". Under it sits a white header with a lowercase "tremor" wordmark at left and five links at right (Components, Charts, Blocks & Templates, Docs, and a GitHub icon). The hero is centered and quiet: a tiny "BUILT FOR REACT / TAILWIND CSS" line with two logos, a 60px bold headline "React components to build charts and dashboards", a two-line explanation ("35+ fully open-source, accessible components for dashboards and charts. Built with React, Tailwind CSS and Radix UI."), and two buttons: a filled blue "Get started" and an outlined "Blocks & Templates" with an arrow.

The rest of the capture is a gallery of white cards on a white page, each holding a live component: a line chart of portfolio value in blue, cyan and fuchsia series, a stacked bar chart with an "Europe / North America" tab, a list of filters and a date-range picker, an uptime tracker built from many small blue bars, badges, radio cards, a segmented tab control, a storage progress bar, a sparkline, and a circular progress. Each card is captioned with a bold one-line title and a grey one-sentence description ("Beautiful defaults, and simple props for every component"). The product is demonstrated, not described; the interface is the illustration.

The voice is plain and developer-literal: feature names are nouns ("Advanced visualizations", "Accessible by design"), descriptions are single sentences, and buttons are short verbs. The overall mood is light, neutral and tidy, with blue as the only saturated hue besides the chart series.

## Colors

Measured from the live site and its docs pages:

- **Canvas #ffffff** is the page background (the largest area in the measurement); a dark band **#030712** further down the page is the second-largest background, and #000000 is the announcement bar.
- **Ink #101828** is the headline color (h1, headings in the nav). **Ink-strong #4a5565** is the most-read grey (1,393 characters, against 1,201 for #101828), used for descriptions and links. **Ink-secondary #364153** is the label color in outlined buttons and tabs. **Ink-muted #6a7282** and **ink-placeholder #99a1af** serve captions and input placeholders.
- **Primary #2b7fff** is the fill of "Get started" and of every primary button on the docs pages. It matches Tailwind's `blue-500` token, which the component source uses (`bg-blue-500`). Hover is **#155dfc**, the color of `blue-600`, and the disabled or loading fill measured on the docs button page is **#8ec5ff**.
- **Danger #e7000b** is the Destructive button fill measured on the docs button page; the source uses `bg-red-600`.
- **Hairline #d1d5dc** is the border of inputs and outlined buttons (`border-gray-300` in the source); **hairline-card #e5e7eb** is the card and footer border; **surface-muted #f3f4f6** is a light fill measured on a text input.
- **Card-dark #090e1a** is the dark-mode card background that the Card component source writes as `dark:bg-[#090E1A]`.
- Chart series use Tailwind palette tokens exposed as variables (`--color-blue-500`, `--color-cyan-500`, `--color-fuchsia-500` and others) as oklch values, so they are not repeated as hex here.

## Typography

One sans family, Geist Sans (served by Next.js font optimization under a hashed name, `__GeistSans_fb8f2c`, with a metric-matched fallback), covers all UI text, in a variable weight axis from 100 to 900. The monospace stack (`ui-monospace`, SFMono-Regular, Menlo ...) is the single most-used family by character count on the measured page because the page includes code listings (6,236 characters against 5,389 for Geist).

- **Display**: 60px/60px, weight 700, tracking -2.1px (36px/40px with -1.26px on mobile).
- **Heading**: 16px/24px, weight 600, tracking -0.4px, used for the card captions.
- **Subheading**: 14px/20px, weight 400, used for descriptions and input text.
- **Body**: 18px/32px, weight 500, the lead paragraph size.
- **Button**: 14px/20px, weight 500. **Nav**: 16px/24px, weight 400. **Link**: 16px/24px, weight 500.
- **Code**: ui-monospace 14px, weight 400.

Tight negative tracking is used only on the larger sizes; small text is untracked.

## Layout

The page is a single centered column. The hero text block is narrow, and the component gallery is a wide two-column masonry: one tall column of two cards at left next to a narrower stack at right, followed by full-width cards. Gutters are 16px and 32px (the most common gaps measured), inner padding is mostly 16px and 24px. Cards contain an inner bordered panel with the live component, then the caption below, which makes each card read as a framed specimen. The header is 113px tall in the docs measurement including the announcement bar, with a translucent white (#ffffffe6) background.

Docs pages group components under Visualizations, Inputs, UI and Utilities, and show component source in code blocks set in the monospace family.

## Elevation & Depth

Depth is soft and layered. Controls use a single hairline lift, `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` (Tailwind's `shadow-xs`), on buttons and inputs. Homepage cards use a larger two-part shadow measured as `oklab(0 0 0 / 0.05) 0px 20px 25px -5px, oklab(0 0 0 / 0.05) 0px 8px 10px -6px`, which gives the floating look in the capture. A third pattern in the stylesheet, `0 0 0 1px #00000008, 0 2px 4px #0000000d, 0 12px 24px #0000000d`, stacks a ring and two blurs. Borders in #e5e7eb are used with shadows on the cards; flat inputs use only the border.

## Shapes

Measured radii: 6px (50 elements, buttons, inputs and tabs), 1px (47, chart bars and thin elements), 12px (20, the homepage cards), 8px (18), 4px (14) and a full-round value for pills and the circular progress. The Card component source uses `rounded-lg` (8px) while the homepage showcase cards measure 12px; both are legitimate and this guide records both as `rounded.lg` and `rounded.xl`. The Tailwind radius variables confirm the scale: `--radius-xs` .125rem, `--radius-sm` .25rem, `--radius-md` .375rem, `--radius-lg` .5rem and `--radius-xl` .75rem.

## Components

Measured on the docs component pages and read from the Tremor source:

- **Button primary**: #2b7fff fill, white 14px/500 text, 8px 12px padding, 38px height, 6px radius, shadow-xs. Hover #155dfc, disabled/loading #8ec5ff. The source's base classes are `rounded-md border px-3 py-2 text-sm font-medium shadow-xs transition-all duration-100 ease-in-out`.
- **Button secondary**: white fill, #364153 text, 1px #d1d5dc border (source: `border-gray-300 text-gray-900 bg-white hover:bg-gray-50`).
- **Button destructive**: #e7000b fill, white text.
- **Input**: white fill, #101828 14px text, 1px #d1d5dc border, 6px radius, 8px 10px padding, 38px height.
- **Card**: white, 1px #e5e7eb border; the source root is `rounded-lg border p-6 shadow-xs` (padding 24px).
- **Badge, tabs, radio card, tracker, progress bar, spark chart, progress circle**: visible in the capture; the capture shows small blue-tinted badges and a tracker made of blue and grey cells.

## Design System Architecture

Tremor is itself a design system distributed by copy-and-paste. The [tremorlabs/tremor repository](https://github.com/tremorlabs/tremor) states it provides "35+ customizable, accessible React components" built on Tailwind CSS and Radix UI under the Apache 2.0 licence. Components live in `src/components/<Name>/<Name>.tsx`, each starting with a version comment such as `// Tremor Button [v1.0.0]`, and style themselves with Tailwind utility strings composed through `tailwind-variants` and a `cx()` helper, with `dark:` variants for every color (for example `dark:bg-[#090E1A]` on cards). The repository's `src/globals.css` is nearly trivial: it defines animation variables (`--animate-hide`, `--animate-dialog-overlay-show`, ...) and a body rule `bg-white dark:bg-gray-950`; there is no separate token file. The [installation docs](https://www.tremor.so/docs/getting-started/installation) say it requires React 18.2+ and Tailwind CSS v4, and list the components under Visualizations, Inputs, UI and Utilities (chartUtils, cx, focusInput, hasErrorInput, focusRing). The practical token layer is therefore Tailwind v4's theme variables, which the page exposes (for example `--color-blue-500`, `--radius-md`, `--font-weight-medium`).

## Do's and Don'ts

- Do use #2b7fff only for the primary action and for selected states; keep everything else grey and white.
- Do border inputs and secondary buttons with #d1d5dc and cards with #e5e7eb.
- Do pair each component specimen with a bold one-line caption and one grey sentence.
- Do express colors as Tailwind tokens (blue-500, gray-300) so dark variants stay consistent.
- Don't introduce a second brand hue; chart series colors are for data only.
- Don't round controls beyond 6px or cards beyond 12px.
- Don't use heavy shadows on inputs; they get only shadow-xs.
- Don't set body text in the monospace family; reserve it for code.

## Responsive Behavior

The headline drops from 60px/60px to 36px/40px (tracking -1.26px) on a 390px viewport, as measured. Tailwind v4 breakpoints are the system in use, but only the mobile headline was measured, so the exact reflow of the two-column gallery is not documented here. Controls keep their 38px height, which is touch-friendly.

## Iteration Guide

1. Build on white with #101828 for headings and #4a5565 for descriptions.
2. Add one blue primary per view using bg-blue-500, hover to blue-600.
3. Use 6px for controls and 12px for showcase cards; borders #d1d5dc and #e5e7eb.
4. Present each new component inside a bordered card with a bold caption and a one-sentence description.
5. Copy component source rather than importing a package, and keep dark variants in the same class string.
