---
version: alpha
name: Chakra UI
category: "Frontend Frameworks"
description: "Chakra UI is the accessible React component system: a white canvas, #52525b body copy and #09090b headings in Wix Madefor Text on the site (Inter in the library), a teal primary (#0d9488), 4px component radii with 6px cards, 1px #e4e4e7 outlines, 40px-tall 14px/500 buttons, and recipe-driven tokens built on Panda-style createSystem."
colors:
  canvas: "#ffffff"
  ink: "#52525b"
  primary: "#0d9488"
  on-primary: "#ffffff"
  ink-strong: "#09090b"
  surface-subtle: "#f4f4f5"
  code-string: "#ce9178"
  code-property: "#9cdcfe"
  hairline: "#e4e4e7"
  ink-gray-800: "#27272a"
  button-solid-gray: "#18181b"
  teal-subtle: "#ccfbf1"
  teal-fg: "#0c5d56"
  code-bg: "#1e1e1e"
  code-text: "#d4d4d4"
typography:
  display:
    fontFamily: "\"Wix Madefor Text\", \"Wix Madefor Text Fallback\""
    fontSize: 48px
    fontWeight: 600
    lineHeight: 60px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: "\"Wix Madefor Text\", \"Wix Madefor Text Fallback\""
    fontSize: 36px
    fontWeight: 600
    lineHeight: 44px
    letterSpacing: "-0.9px"
  heading:
    fontFamily: "\"Wix Madefor Text\", \"Wix Madefor Text Fallback\""
    fontSize: 20px
    fontWeight: 500
    lineHeight: 30px
  body:
    fontFamily: "\"Wix Madefor Text\", \"Wix Madefor Text Fallback\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Wix Madefor Text\", \"Wix Madefor Text Fallback\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: "\"Wix Madefor Text\", \"Wix Madefor Text Fallback\""
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  input:
    fontFamily: "\"Wix Madefor Text\", \"Wix Madefor Text Fallback\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  code:
    fontFamily: "SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 44px
  button-solid:
    backgroundColor: "{colors.button-solid-gray}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 40px
  button-subtle:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink-gray-800}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 4px 12px
    height: 36px
  badge:
    backgroundColor: "{colors.teal-subtle}"
    textColor: "{colors.teal-fg}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 12px
    height: 40px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
  code-panel:
    backgroundColor: "{colors.code-bg}"
    textColor: "{colors.code-text}"
    typography: "{typography.code}"
    rounded: "{rounded.sm}"
    padding: 28.8px
---

## Overview

Chakra UI is an open-source React component system with accessibility built in; its v3 theming layer is a token, semantic-token and recipe engine (`defineConfig`, `createSystem(defaultConfig, config)`). The marketing and documentation site at chakra-ui.com shows that system in use: a thin purple-to-teal announcement bar ("Build faster with Premium Chakra UI Components" and a Learn more chip), a white header with the chakra wordmark and links (Docs, Showcase, Spotlight, Blog, Guides, GitHub, theme toggle), and a pale hero with a faint teal lightning-bolt mark in the background.

The hero reads "Chakra UI is a component system for building products with speed", where "with speed" sits in a mint highlight with teal text and a blinking cursor after it. Under it is "Accessible React components for building high-quality web apps and design systems. Works with Next.js RSC", then a solid teal "Start Building" button next to a mono "npm i @chakra-ui/react" install chip. A strip of component tiles (Tabs, Menu, Switch) shows live components with mono labels, a logo wall of customers (Lattice, Trustpage, xata, Lyssna, Udacity, ethereum, Leonardo.Ai, Stately) is drawn as a ruled 4-by-2 grid, and a dark code panel with Tokens, Typography and Recipes tabs demonstrates `defineTokens`.

The page is airy and light, with one hue (teal) used for primary actions and highlight text, zinc greys for everything else, and 1px outlines that make each component look like a drawn specimen.

**Key characteristics**
- A teal primary (`{colors.primary}`) with a white label; teal highlight text on a minty fill for emphasized words.
- Zinc neutrals: headings `{colors.ink-strong}`, body copy `{colors.ink}`, outlines `{colors.hairline}`, subtle fills `{colors.surface-subtle}`.
- Small radii: 4px on controls (`{rounded.xs}`), 6px on cards, 8px on the code window, pills at 9999px.
- Buttons are 40px (docs md) or 44-48px (marketing) tall with 14-16px, weight 500 labels.
- Wix Madefor Text is the site font; the library's default font token is Inter.
- A dark code panel (`{colors.code-bg}`, VS Code-style syntax colors) appears beside nearly every component example.
- Component demos are surrounded by a 1px inset ring rather than shadows.

## Colors

Colors measured on the live site and on the docs component pages; palette names come from the official `colors.ts` in the chakra-ui/chakra-ui repository.

- **Canvas** `{colors.canvas}`: white page and card surface.
- **Ink** `{colors.ink}`: the most-read text color, body copy (the palette's gray 600, which Chakra's semantic token `fg.muted` uses in light mode).
- **Ink strong** `{colors.ink-strong}`: headings and nav text; this is the palette's black and also the dark code window background on the home page.
- **Ink gray 800** `{colors.ink-gray-800}`: label text in subtle buttons and card body text.
- **Primary teal** `{colors.primary}`: teal 600, the solid fill of primary buttons; in the semantic tokens `teal.solid` is teal 600 in both light and dark modes with a white contrast color.
- **On-primary** `{colors.on-primary}`: the white label on solid fills.
- **Teal subtle** `{colors.teal-subtle}` and **teal fg** `{colors.teal-fg}`: the mint fill and teal text of the badge and the highlighted headline word (teal 100 and teal 700 in the palette).
- **Solid gray** `{colors.button-solid-gray}`: the default solid button fill on the docs button page (gray 900; semantic `gray.solid` is gray 900 in light mode).
- **Surface subtle** `{colors.surface-subtle}`: gray 100, used for subtle buttons, tab tracks and search field.
- **Hairline** `{colors.hairline}`: gray 200, the 1px outline on inputs, cards and the logo grid (semantic `border` in light mode).
- **Code surface** `{colors.code-bg}` with text `{colors.code-text}`, string color `{colors.code-string}` and property color `{colors.code-property}` for the syntax-highlighted panels.

### Semantic layer (from the official source)
- `bg` is white in light mode and black in dark; `bg.solid` is white or gray 950.
- `fg` is black in light mode and gray 50 in dark; `fg.muted` is gray 600 or gray 400.
- `border` is gray 200 in light mode and gray 800 in dark.
- Each color palette (gray, teal, and the other hues) exposes `solid`, `contrast`, `subtle`, `muted`, `fg`, `emphasized` and `focusRing` roles; components reference them as `colorPalette.solid` and so on, so changing `colorPalette` re-colors a component.
- Other saturated colors seen on the button docs page (orange, blue, red, purple, pink, green) are palette demonstrations of `colorPalette`, not site brand colors.

## Typography

| Role | Family | Size / line | Weight | Notes |
|---|---|---|---|---|
| Display | Wix Madefor Text | 48px / 60px | 600 | letter-spacing -1.2px |
| Display mobile | Wix Madefor Text | 36px / 44px | 600 | letter-spacing -0.9px |
| Heading | Wix Madefor Text | 20px / 30px | 500 | |
| Body | Wix Madefor Text | 16px / 24px | 400 | |
| Button | Wix Madefor Text | 16px / 24px | 500 | marketing CTAs |
| Nav / docs button | Wix Madefor Text | 14px / 20px | 500 | |
| Input | Wix Madefor Text | 14px / 20px | 400 | |
| Code | SFMono-Regular stack | 14.4px / 18px | 400 | code panels |

The library's own font tokens (read from `theme/tokens/fonts.ts`) set heading and body to an Inter-first system stack (Inter, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif plus emoji faces) and mono to SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New. The website therefore deliberately uses a different face than the default theme, and a Chakra project should treat the font as a token to override.

**Font substitutes:** the page declares a fallback face named "Wix Madefor Text Fallback"; a project can use Inter, the library's own default font token, at the same weights.

**Principles**
- Display headings use negative tracking (-1.2px at 48px) and weight 600.
- Body copy is 16px/24px; compact controls and nav are 14px/20px at weight 500.
- Buttons use medium weight (the recipe sets `fontWeight: medium`, line-height 1.2).
- Mono text appears for install commands, component labels and code, set a little smaller than body.

## Layout

- A centered page with 24px-scale side padding; the hero is left-aligned, leaving the right side for the lightning-bolt graphic.
- The component strip is three equal outlined tiles; the logo wall is a 4 column by 2 row table with 1px dividers.
- Feature sections are two-column: copy on the left (eyebrow with an icon, heading with teal highlight, three icon-led bullet lines), live code on the right.
- Spacing tokens: `{spacing.s1}` 4px, `{spacing.s2}` 6px, `{spacing.s3}` 8px, `{spacing.s4}` 10px, `{spacing.s5}` 12px, `{spacing.s6}` 14px, `{spacing.s7}` 16px, `{spacing.s8}` 20px, `{spacing.s9}` 24px, `{spacing.s10}` 32px. Chakra's default scale is numeric, where one unit is 0.25rem (4px).

## Elevation & Depth

Depth is drawn with rings, not blur.
- **Inset ring**: `inset 0 0 0 1px` in gray 200 (`rgb(228,228,231)`) is the most common effect, used on preview boxes, tabs and buttons in the docs.
- **Faint inset ring**: `inset 0 0 0 1px` at 5% black on code panels and surfaces.
- **Soft lifts**: a two-layer shadow of 1px/2px at 10% plus a 1px ring at 20% (menus and popovers), and a larger 2px/4px at 10% plus 30% ring variant.
- **Color halo**: a 1px outer ring in a pale orange (`rgb(254,215,170)`) around an orange-subtle demo.

Backgrounds do the rest: white page, gray-100 wells, near-black code panels. There is no heavy drop shadow.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | buttons, inputs, badges (most frequent radius) |
| `{rounded.sm}` | 6px | cards, nav links, code blocks |
| `{rounded.md}` | 8px | the dark tokens panel |
| `{rounded.lg}` | 10px | feature panels |
| `{rounded.pill}` | 9999px | switches, avatars, pills |

The button recipe applies a theme radius token (`borderRadius: "l2"`), meaning corners follow the system's radius token rather than a literal pixel value; on the site that resolves to 4px.

## Components

### Buttons
- **Marketing primary** ("Start Building"): `{colors.primary}` fill, white label, `{typography.button}`, 4px radius, padding 0 20px, height 48px. "Explore Templates" and "Sponsor" are 44px tall with the same colors.
- **Docs solid (default md)**: `{colors.button-solid-gray}` fill, white label, 14px/500, padding 0 16px, height 40px, radius 4px.
- **Subtle**: `{colors.surface-subtle}` fill with `{colors.ink-gray-800}` text, height 36px, padding 4px 12px.
- **Recipe sizes** (official `recipes/button.ts`): 2xs height 6 (24px), xs 8 (32px), sm 9 (36px), md 10 (40px, default), lg 11 (44px), xl 12 (48px), 2xl 16 (64px), in spacing units of 4px, with horizontal padding 2, 2.5, 3.5, 4, 5, 5 and 7 units.
- **Recipe variants**: solid, subtle, surface, outline, ghost, plain; hover on solid is 90% opacity and on subtle moves to the muted shade.

### Badge
- `{colors.teal-subtle}` fill with `{colors.teal-fg}` text, 14px/500, 4px radius.

### Text input
- White, 1px `{colors.hairline}` outline, 4px radius, padding 0 12px, height 40px, text `{colors.ink-strong}`, 14px/400.

### Card
- White, 1px hairline border, 6px radius; header, body and footer slots (`Card.Root`, `Card.Header`, `Card.Body`, `Card.Footer`) as shown in the docs code.

### Navigation
- Header links are 14px/500 in `{colors.ink-strong}` with 12px horizontal padding and 6px radius on hover.
- Search field "Search... ⌘K" is a gray-100 button, 36px tall.

### Code panel
- `{colors.code-bg}` with `{colors.code-text}` text, 14.4px mono, padding 28.8px, 6px radius, VS Code-like syntax colors including `{colors.code-string}` and `{colors.code-property}`.

## Design System Architecture

Chakra UI documents and ships its system openly. Sources opened for this file:
- **Theme source**: https://raw.githubusercontent.com/chakra-ui/chakra-ui/main/packages/react/src/theme/tokens/colors.ts - palette values (teal and gray ramps, white, black).
- **Semantic tokens**: https://raw.githubusercontent.com/chakra-ui/chakra-ui/main/packages/react/src/theme/semantic-tokens/colors.ts - bg, fg, border, and per-palette solid/contrast/subtle/muted/fg roles in light and dark.
- **Button recipe**: https://raw.githubusercontent.com/chakra-ui/chakra-ui/main/packages/react/src/theme/recipes/button.ts - sizes, variants, base styles.
- **Fonts**: https://raw.githubusercontent.com/chakra-ui/chakra-ui/main/packages/react/src/theme/tokens/fonts.ts - Inter-first stacks.
- **Theming overview**: https://chakra-ui.com/docs/theming/overview - `defineConfig`, `createSystem`, tokens, semantic tokens, recipes and slot recipes, `cssVarsRoot`, `cssVarsPrefix`, `strictTokens`, and typegen via `@chakra-ui/cli`.
- **Component demos measured**: https://chakra-ui.com/docs/components/button, /input, /badge and /card.

The architecture is: raw tokens, then semantic tokens with light and dark conditions, then recipes (single element) and slot recipes (multi-part components). Components expose a `colorPalette` prop and variant props; the system compiles them to CSS variables, so swapping a palette or overriding a token re-themes everything.

## Imagery, Voice and Density

### Imagery and art direction
- A single brand graphic: a large, pale-teal lightning bolt (echoing the Chakra logo mark) fades in behind the hero and again behind the "Built for developers" section.
- Product is shown as real, interactive components (tabs, menu, switch) on outlined tiles, labeled in mono type underneath.
- Customer logos are monochrome and placed in a ruled grid so they read like table cells.
- Code is first-class imagery: the dark panel has file-tab chips (Tokens, Typography, Recipes) with small line icons.
- No photography and no gradients other than the announcement bar (purple into teal) and the faint hero wash.

### Microcopy voice
- Confident, short and developer-centric: "Start Building", "Explore Templates", "Meet DateInput", "Built for developers By developers".
- Support lines enumerate benefits with a bold lead-in: "Tokens. Streamline design decisions with semantic tokens", "Typography. Customise your font related properties in one place", "Recipes. Design components variants with ease".
- Social proof headline: "Built for modern product teams. From next-gen startups to established enterprises."
- The install command is shown literally as a button-sized chip: `npm i @chakra-ui/react`.

### Density
- Low-to-medium: one idea per section, two-column feature blocks and generous whitespace.
- The docs component pages are denser: dozens of 40px buttons, inputs and badges in rows of previews, each wrapped in a 1px ring.

### Interaction cues in the capture
- A trailing arrow in the "Meet DateInput" pill and a chevron-style arrow on promotional links.
- A text cursor beside highlighted words in headings.
- Tab selection is shown by a white raised segment on a gray-100 track.
- A switch control is shown in its off state on the tile.

## Component Anatomy Reference

| Component | Fill | Text | Radius | Padding | Height |
|---|---|---|---|---|---|
| Marketing button | `{colors.primary}` | `{colors.on-primary}` | `{rounded.xs}` | 0 20px | 48px |
| Docs solid button | `{colors.button-solid-gray}` | `{colors.on-primary}` | `{rounded.xs}` | 0 16px | 40px |
| Subtle button | `{colors.surface-subtle}` | `{colors.ink-gray-800}` | `{rounded.xs}` | 4px 12px | 36px |
| Badge | `{colors.teal-subtle}` | `{colors.teal-fg}` | `{rounded.xs}` | 6px 12px 6px 16px | 33px |
| Text input | `{colors.canvas}` | `{colors.ink-strong}` | `{rounded.xs}` | 0 12px | 40px |
| Card | `{colors.canvas}` | `{colors.ink-strong}` | `{rounded.sm}` | slot-based | content |
| Code panel | `{colors.code-bg}` | `{colors.code-text}` | `{rounded.sm}` | 28.8px | content |

## Do's and Don'ts

**Do**
- Use `colorPalette` plus semantic roles (`solid`, `subtle`, `fg`) instead of literal hex values.
- Keep control radii at the theme token (4px on the site) and cards one step larger.
- Use 1px inset rings for outlines on demo surfaces.
- Pair a solid primary with a subtle or outline secondary at the same height.
- Put live component previews next to a code panel.

**Don't**
- Don't introduce non-token greys; use the zinc ramp.
- Don't use heavy shadows; Chakra's elevation is ring-based with tiny blur.
- Don't use teal for large background fills; it is for actions and highlight text.
- Don't mix Wix Madefor Text with a second display face on the site.
- Don't treat the orange, purple or blue demo buttons as brand colors.

## Responsive Behavior

- Hero heading goes from 48px/60px (-1.2px tracking) to 36px/44px (-0.9px) at 390px.
- Only the h1 was measured at 390px; collapse behavior of grids is not asserted here.
- The theming system accepts custom `breakpoints` in the theme configuration.
- Controls keep their heights; sizes are chosen via the recipe `size` prop (2xs to 2xl) rather than scaling with viewport.
- A theme toggle in the header is present at desktop width; semantic tokens define light and dark values.

## Iteration Guide

1. Begin with white canvas, zinc-600 body, near-black headings and teal for the primary action.
2. Choose control size first: md is 40px with 16px horizontal padding and 14px/500 text.
3. Outline everything with 1px `{colors.hairline}`; fill wells with `{colors.surface-subtle}`.
4. Add a teal highlight to one phrase in the hero headline using `{colors.teal-subtle}` fill and `{colors.teal-fg}` text.
5. Show a code panel in `{colors.code-bg}` next to each live component.
6. When adding a new color, define it as a token and a semantic token pair for light and dark.
