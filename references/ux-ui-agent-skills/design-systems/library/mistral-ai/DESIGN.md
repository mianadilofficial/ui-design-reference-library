---
version: alpha
name: Mistral AI
category: "AI & LLM Platforms"
description: >-
  Mistral AI's homepage is a warm-cream (#fbfbf8 and #f5f4ef) page ruled into cells by thin #e4e3de lines, with ALTMistral display type at 96px/500 and -1.92px tracking over Inter 16px UI text, square-cornered black buttons (#09090b, 48px tall) beside 6px-radius gray buttons, a dark #151524 testimonial band, and pixel-art illustrations in orange, amber and red blocks echoing the pixel-cat logo.

colors:
  canvas: "#f5f4ef"
  page-body: "#fbfbf8"
  ink: "#18181b"
  primary: "#09090b"
  on-primary: "#ffffff"
  surface-invert: "#151524"
  ink-secondary: "#27272a"
  ink-light: "#e4e4e7"
  ink-muted: "#71717b"
  ink-tertiary: "#3f3f47"
  hairline: "#e4e3de"
  button-secondary-bg: "#f4f4f5"
  brand-orange: "#ff5229"
  brand-amber: "#ff8204"
  brand-red: "#e51300"
  brand-crimson: "#c4001d"
typography:
  display:
    fontFamily: ALTMistral, sans-serif
    fontSize: 96px
    fontWeight: 500
    lineHeight: 96px
    letterSpacing: "-1.92px"
  display-mobile:
    fontFamily: ALTMistral, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: "-0.8px"
  heading:
    fontFamily: ALTMistral, sans-serif
    fontSize: 56px
    fontWeight: 500
    lineHeight: 60px
    letterSpacing: "-0.56px"
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: ALTMistral, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.16px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 40px
  s7: 48px
  s8: 80px
  s9: 128px
  s10: 160px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 8px
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    borderColor: "{colors.hairline}"
---

## Overview

Mistral AI's homepage (`https://mistral.ai/`, measured at 1280px desktop and 390px mobile) reads like a printed grid: a warm off-white page divided by hairlines into cells, giant tightly tracked headlines, small Inter UI text, and playful pixel-art illustrations that stand out against the otherwise austere layout. The brand page says the emblem is an abstract pixel cat and that model illustrations are "pixelated illustrations rendered in vibrant colors," which matches the capture.

What the capture shows:

- A 49px cream header split into bordered cells: the pixel `M` mark with `Mistral` wordmark at the left, cells for `Research`, `Sovereign AI`, `Cloud`, `Customers`, `Company`, and at the right a `Get in touch` cell and a flush black `Login` block with a chevron (`Login`, `Studio`, `Vibe` are in the same measured button element).
- The headline `Mistral is #1 in Sovereign AI.` in two lines at 96px, with a small pixel-art flag icon inline between words. Pixel-art figures and large solid blocks in orange, amber and red sit at the right edge, one block turned into a diamond. A cookie-consent dialog from a third-party widget (Axeptio) covers the left part of the capture; it is not part of Mistral's design system and its amber color is not tokenized.
- A bordered chip `Introducing Mistral Large 4 ›` with a small orange pixel icon.
- A row of customer logos in a grid of ruled cells (`snowflake`, `CMA CGM`, `HSBC`, `Ericsson` and others).
- A band on a slightly darker cream (`{colors.canvas}`) with the line `No one else should hold the strings to your` and faint diagonal line art that looks like wires or strings (the sentence is cut in the capture).
- A centered headline `Mistral lets you decide how AI works in your organization.` and below it a three-column module: a left list of tabs (`Frontier open models` selected with an arrow, then `Proprietary intelligence`, `AI operations`, `Flexible compute`), a center text block (`We make the models. You keep them.` plus a paragraph and a `Discover Research` button), and at the right a large pixel-art panel in green with floating sticker-like icons.
- Further down the DOM (measured, not visible in the capture) there is a dark band (`{colors.surface-invert}`) with white testimonial text at 32px and a footer with links `Build with us`, `Customers`, `Partners`, `Brand`, `Pricing`.

Character: confident, engineering-minded and a little retro. The grid is strict; the illustrations are playful.

**Key characteristics**
- Cream page `{colors.page-body}` with `{colors.canvas}` bands and hairline rules (`{colors.hairline}`, 79 measured borders).
- Square-cornered primary button (`{rounded.none}`), 48px tall, black `{colors.primary}`.
- Secondary buttons at 6px radius on `{colors.button-secondary-bg}`.
- ALTMistral for headings and large text, Inter for UI, weights 400 and 500 only.
- Hot-color blocks: `{colors.brand-orange}`, `{colors.brand-amber}`, `{colors.brand-red}`, `{colors.brand-crimson}`.
- No shadows.

## Colors

### Measured
- **Page body** `{colors.page-body}` (#fbfbf8): the largest background area, the header and card fill.
- **Canvas** `{colors.canvas}` (#f5f4ef): the slightly darker cream bands (and the on-screen dominant tint in the capture).
- **Ink** `{colors.ink}` (#18181b): headings and most text (1537 characters).
- **Ink secondary** `{colors.ink-secondary}` (#27272a): 542 characters; the CSS names this tone `--color-text-secondary` (given there as an oklch value).
- **Ink tertiary** `{colors.ink-tertiary}` (#3f3f47): footer headings (`Build with us`); CSS `--color-text-tertiary`.
- **Ink muted** `{colors.ink-muted}` (#71717b): 186 characters.
- **Ink light** `{colors.ink-light}` (#e4e4e7): 322 characters, light text on the dark band.
- **Primary** `{colors.primary}` (#09090b): the black button fill; **on primary** `{colors.on-primary}` (#ffffff). Hover (measured on the `Login` button) lightens the fill to an oklch near #27272a, which is close to `{colors.ink-secondary}`.
- **Surface invert** `{colors.surface-invert}` (#151524): the dark band; the CSS names it `--color-surface-invert`.
- **Hairline** `{colors.hairline}` (#e4e3de): borders, 79 occurrences.
- **Button secondary** `{colors.button-secondary-bg}` (#f4f4f5): fill of `Discover Inference`, `Discover Compute`, `Discover Research`, `Discover Vibe`.

### Brand blocks
The largest saturated fills measured are `{colors.brand-orange}` (#ff5229), `{colors.brand-amber}` (#ff8204), `{colors.brand-red}` (#e51300) and `{colors.brand-crimson}` (#c4001d); they match the orange, amber and red blocks and the diamond at the top-right of the capture. The root CSS variables also contain a named orange (`--color-orange-600` #fa500f), a tangerine (`--color-tangerine-500` #ff8204), a yellow (`--color-yellow-400` #fec63a), a green (`--color-green-500` #44ba82), a blue (`--color-blue-700` #0262bf), plus steel and navy neutrals (`--color-steel-600` #55555e, `--color-navy-800` #343446) and a cream (`--color-cream-300` #e4e2d6). These show the shipped palette but I did not see each applied, so only the measured block fills are tokens.

The [brand page](https://mistral.ai/brand) states no hex values or typefaces, so no colors are taken from it.

### Usage in practice
Color is rare and spatial: neutrals for almost all UI, hot colors for illustration blocks, never for text or buttons.

## Typography

Loaded fonts: ALTMistral (400, 500, 600), Inter (variable 100-900), and several Axeptio font names that belong to the cookie widget. By character count ALTMistral carries 2560 and Inter 1052.

| Role | Family | Size / line | Weight | Tracking |
|---|---|---|---|---|
| Display (h1) | ALTMistral | 96px / 96px | 500 | -1.92px |
| Display, mobile (390px) | ALTMistral | 40px / 48px | 500 | -0.8px |
| Heading (h2) | ALTMistral | 56px / 60px | 500 | -0.56px |
| Body (large quote) | ALTMistral | 32px / 40px | 500 | normal |
| Subheading, nav, links | Inter | 16px / 24px | 400 | normal |
| Button | Inter | 16px / 24px | 500 | 0.16px |

Notes:
- Display tracking is -2% of the size (-1.92px at 96px); the 56px heading uses -1% and the 44px runs use -0.44px.
- Other sizes measured: 24px (672 characters), 20px (152, -0.4px), 14px (40, +0.28px), 13px and 44px.
- Weights are only 500 (2633 characters) and 400 (979); there is no bold.
- Small UI text carries slight positive tracking (16px at +0.16px, 14px at +0.28px) while 16px body text elsewhere uses -0.16px.
- The CSS defines semantic type steps (`--text-display` 6rem, `--text-h1--letter-spacing` -.02em, `--text-h3--letter-spacing` -.01em, `--text-eyebrow`, `--text-body-small`, `--text-button-small`) and a mono family `Space Mono` (`--font-mono`).

### Note on font substitutes
ALTMistral is a custom face loaded by the site; I found no public description of it, so no claims are made about its design or license. A substitute is a grotesque with tight spacing such as Inter at weight 500 with the same tracking.

## Layout

- The header is 49px tall and the full 1280px wide, divided into bordered cells.
- The page is organized as a ruled grid: the logo wall is a row of equal bordered cells, and vertical rules run down the page edges (visible as thin lines at left and right in the capture).
- Headlines are centered and wide (the h2 box is 1024px wide, the h1 628px).
- The product module is three columns: tab list (about 200px), copy, and a large square-ish illustration.
- Gaps: 8px (82 occurrences), 16px (68), 40px (42), 24px, 4px, 12px, 128px (8). Paddings: 16px (81), 40px (39), 24px (35), 8px (27), 160px (3).
- Spacing tokens `{spacing.s1}`..`{spacing.s10}`: 4, 8, 12, 16, 24, 40, 48, 80, 128 and 160px.
- Sections are separated by a change of cream tone or a hairline, with 128-160px vertical bands in the largest spots.

## Elevation & Depth

No box shadows were measured. Depth is created with:
1. Cell borders `{colors.hairline}` instead of drop shadows.
2. Tone steps between `{colors.page-body}`, `{colors.canvas}` and the dark `{colors.surface-invert}` band.
3. Pixel-art illustrations that overlap cell borders.

The only hover behavior recorded is a fill change on the black `Login` button.

## Shapes

Radii measured by frequency: 6px (15), 4px (3), 8px (2), a bottom-only 8px, a very large value (a fully round control), 12px (1) and a `50% 0 0` shape on a 512px art element.

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | primary button, nav, links, footer |
| `{rounded.xs}` | 4px | |
| `{rounded.sm}` | 6px | secondary buttons, language selector |
| `{rounded.md}` | 8px | |
| `{rounded.lg}` | 12px | the module card |
| `{rounded.pill}` | 9999px | fully round control |

The main shape language is square and gridded; the 6px corner is the softest everyday radius.

## Components

### Primary button (`button-primary`)
`{colors.primary}` fill, white text, Inter 16px/500 with 0.16px tracking, 0 radius, padding `0px 16px`, 48px tall. The measured element holds `Login`, `Studio` and `Vibe` (a menu-like block flush to the right edge of the header).

### Secondary button (`button-secondary`)
`{colors.button-secondary-bg}` fill, `{colors.ink}` text, Inter 16px/400, `{rounded.sm}`, padding `8px 16px`, 48px tall (`Discover Inference`, `Discover Compute`, `Discover Research`, `Discover Vibe`). One variant (`Learn about our customers`) uses a 5%-alpha black fill instead (`#07070b0d`). Each carries a small right-pointing arrow in the capture.

### Language select
Outlined with a 1px `{colors.hairline}` border, 6px radius, 38px tall (`English`).

### Navigation (`nav`, `nav-link`)
Cream bar (`{colors.page-body}`), Inter 16px/400, `{colors.ink}` text, square cells with ruled dividers.

### Announcement chip (`link`)
`Introducing Mistral Large 4`: Inter 16px, `{colors.ink}`, padding 8px, 48px tall, with a small orange icon and a chevron; bordered.

### Tab list
Stacked rows in a rounded bordered container; the selected row has an arrow and darker text, the others use `{colors.ink-muted}`-like gray.

### Card (`card`)
`{colors.page-body}` fill, `{rounded.lg}`, 1px `{colors.hairline}` border, no shadow; the measured module was 228px wide and 213px tall.

### Footer (`footer`)
Top border `{colors.hairline}`, Inter 16px links, a 611px-tall block with columns (`Build with us`, `Customers`, `Partners`, `Brand`, `Pricing`, `Dive deeper`...).

### Illustrations
Pixel-art sprites (a flag, lifebuoy figure, castle, hot-air balloon, stickers, a green board with `M`-marked icons) and big solid color blocks. They are the main use of the brand colors.

## Design System Architecture

Sources opened:

- [Mistral brand page](https://mistral.ai/brand): logo rules (respect clearspace, prefer the gradient version, use monochrome on busy backgrounds; do not stretch, deform, rotate, recolor, frame or place on colored backgrounds), logo variants (gradient, inverted gradient, black, white), the pixel-cat emblem description, model icons as pixelated illustrations "designed to shine at small scale," and downloadable brand-kit and wallpapers. It gives no hex values or typefaces.
- No public design-token package, component library or GitHub design system for the marketing site was found. Searches for a Mistral design system returned only third-party aggregator pages, which are not used here.

The de-facto system is visible in the shipped CSS: a Tailwind-based custom-property palette with named hues (`steel`, `navy`, `cream`, `tangerine`, `orange`, `yellow`, `green`, `blue`) and semantic names (`--color-text-secondary`, `--color-text-tertiary`, `--color-surface-invert`, `--color-text-brand-9` #0082e6), type tokens (`--text-display`, `--text-h1`..`--text-h6`, `--text-eyebrow`, `--text-body-small`, `--text-button-small`) and radii (`--radius-4xl` 2rem), plus `Space Mono` as a mono font.

## Do's and Don'ts

### Do
- Keep the page cream and divide it with hairlines; let borders do the work shadows would.
- Use square-cornered black for the primary action and 6px-radius light gray for secondary links.
- Set headlines in the display face at weight 500 with -2% tracking.
- Put the hot colors into pixel-art blocks and illustrations.
- Follow the logo rules on the brand page (clearspace, no recoloring, no framing).

### Don't
- Do not add shadows; none are measured.
- Do not use bold; the page uses only 400 and 500.
- Do not use orange for buttons or text; it appears only in illustration blocks.
- Do not round the primary button.
- Do not put the logo on colored backgrounds (brand page rule).

## Responsive Behavior

Measured at 390px: the h1 drops from 96px/96px (-1.92px) to 40px/48px (-0.8px), still weight 500. Other mobile layout behavior (header collapse, grid reflow) was not recorded, so none is claimed. The desktop DOM had 1928 visible elements.

### Touch targets
Buttons are 48px tall; the language selector is 38px tall.

## Iteration Guide

1. Start with `{colors.page-body}` and draw the structure with 1px `{colors.hairline}` cells.
2. Put a 96px/500 headline at -2% tracking at the top, with one pixel-art accent beside it.
3. Add a bordered announcement chip, then a ruled logo row.
4. Alternate cream bands (`{colors.canvas}`) with one dark `{colors.surface-invert}` band for testimonials.
5. Use black square buttons for primary actions; 6px light-gray buttons with arrows for `Discover ...` links.
6. Keep Inter for UI at 16px and use ALTMistral for anything 24px or larger.
7. Use `{colors.brand-orange}`, `{colors.brand-amber}`, `{colors.brand-red}` only in illustration.
