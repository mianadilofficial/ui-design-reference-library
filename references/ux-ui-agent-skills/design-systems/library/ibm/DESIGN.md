---
version: alpha
name: Carbon Design System
category: "Design Systems"
description: "Carbon is IBM's open-source design system: square-cornered (0px) controls, IBM Plex Sans and Plex Serif, a #f4f4f4 and #ffffff layered canvas, near-black #161616 ink, a single IBM Blue 60 (#0f62fe) action color, #393939 secondary and #da1e28 danger buttons 48px tall, built on an 8px mini-unit 2x grid and role-based color tokens."
colors:
  canvas: "#f4f4f4"
  ink: "#161616"
  primary: "#0f62fe"
  surface-white: "#ffffff"
  surface-hero-cyan: "#bae6ff"
  ink-hero-blue: "#002d9c"
  ink-secondary: "#525252"
  hairline: "#c6c6c6"
  on-primary: "#ffffff"
  blue-90: "#001d6c"
  button-secondary-bg: "#393939"
  danger: "#da1e28"
  text-placeholder: "#6f6f6f"
typography:
  display:
    fontFamily: "\"IBM Plex Serif\", system-ui, -apple-system, \"system-ui\", \".SFNSText-Regular\", serif"
    fontSize: 112px
    fontWeight: 200
    lineHeight: 123.2px
  display-mobile:
    fontFamily: "\"IBM Plex Serif\", system-ui, -apple-system, \"system-ui\", \".SFNSText-Regular\", serif"
    fontSize: 64px
    fontWeight: 200
    lineHeight: 64px
  heading:
    fontFamily: "\"IBM Plex Sans\", system-ui, -apple-system, \"system-ui\", \".SFNSText-Regular\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: "\"IBM Plex Sans\", system-ui, -apple-system, \"system-ui\", \".SFNSText-Regular\", sans-serif"
    fontSize: 31.871px
    fontWeight: 400
    lineHeight: 40.9771px
  button:
    fontFamily: "\"IBM Plex Sans\", system-ui, -apple-system, \"system-ui\", \".SFNSText-Regular\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.0001px
    letterSpacing: 0.16px
  nav:
    fontFamily: "\"IBM Plex Sans\", system-ui, -apple-system, \"system-ui\", \".SFNSText-Regular\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: 0.1px
  link:
    fontFamily: "\"IBM Plex Sans\", system-ui, -apple-system, \"system-ui\", \".SFNSText-Regular\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  input:
    fontFamily: "\"IBM Plex Sans\", system-ui, -apple-system, \"system-ui\", \".SFNSText-Regular\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.0001px
    letterSpacing: 0.16px
rounded:
  none: 0px
  xs: 8px
spacing:
  s1: 8px
  s2: 14px
  s3: 15px
  s4: 16px
  s5: 32px
  s6: 48px
  s7: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 63px 14px 15px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 63px 14px 15px
    height: 48px
  button-danger:
    backgroundColor: "{colors.danger}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 63px 14px 15px
    height: 48px
  link:
    backgroundColor: "{colors.surface-hero-cyan}"
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    padding: 16px
  nav:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 16px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 40px
  text-input-placeholder:
    textColor: "{colors.text-placeholder}"
    typography: "{typography.input}"
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 0px 32px
    height: 32px
  tile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 16px
  footer:
    textColor: "{colors.canvas}"
    padding: 32px 0px
---

## Overview

Carbon Design System is IBM's enterprise-ready, open-source design system, "shaped by the IBM Design Language" (the home page's own words). Its documentation site at carbondesignsystem.com is the first product demonstration: a slim white header (Carbon Design System wordmark, search, "Employee login", app-switcher grid), a left side navigation with a Find field and four collapsible groups (Getting started, Building blocks, Building experiences, Support), and a main area that opens with a large light-blue hero.

The hero (capture at `web/data/captures/carbon-design.jpg`) is a pale cyan field (`{colors.surface-hero-cyan}`) holding the headline "Let's make together" in IBM Plex Serif at weight 200 and 112px, an intro paragraph in deep blue (`{colors.ink-hero-blue}`), a line-art illustration of UI parts (pills, a pie chart tile, a tree table, a checkbox, an info notification) and a bottom row of two ruled cells ("Start designing", "Start developing") each with an arrow in the lower right. Below it the page continues on the grey canvas with "Carbon MCP" (AI tooling), "Building blocks" (Foundations, Components, Patterns, Data visualization shown as four ruled tiles with arrows) and "Building experiences" (the Universal Experiences framework).

Everything is built on right angles. Borders are 1px hairlines, tiles are separated by rules instead of gaps, controls have no rounding, and color is reserved for the single interactive blue. The effect is dense, engineered and calm, a deliberate contrast to consumer brands.

**Key characteristics**
- Square corners everywhere in components: the measured button, input and tile radius is 0px (`{rounded.none}`).
- One action color, IBM blue (`{colors.primary}`), used for primary buttons, links and focus.
- Layering by background step: white and Gray 10 (`{colors.canvas}`) alternate to show nested containers.
- IBM Plex Sans for UI and body; IBM Plex Serif (light, huge) only for the hero display line.
- 48px-tall large buttons with 16px left padding and wide right padding to host a trailing icon.
- Arrow glyphs in the bottom-right corner of every navigation tile.
- Illustrations are monoline, in blue on pale blue.

## Colors

Carbon defines color through role-based tokens, not hex values: Background, Layer, Field, Border, Text, Link, Icon, Support, Focus and Skeleton groups, over four default themes (White, Gray 10, Gray 90, Gray 100). The White theme's tokens as published at carbondesignsystem.com/elements/color/tokens: `$background` #ffffff, `$layer-01` and `$field-01` #f4f4f4, `$border-subtle-01` #c6c6c6, `$text-primary` #161616, `$text-secondary` #525252, `$link-primary`, `$button-primary` and `$focus` #0f62fe, `$button-secondary` #393939, `$button-danger-primary` #da1e28.

Measured on the docs site and docs component demos:
- **Canvas** `{colors.canvas}`: the grey page behind content (Gray 10).
- **White surface** `{colors.surface-white}`: header, side navigation and building-block tiles.
- **Ink** `{colors.ink}`: all primary text (Gray 100).
- **Ink secondary** `{colors.ink-secondary}`: captions and supportive copy (Gray 70).
- **Text placeholder** `{colors.text-placeholder}`: placeholder text in the text input demo.
- **Primary** `{colors.primary}`: Blue 60, links ("Learn about Carbon MCP", "Employee login"), primary button fill.
- **On-primary** `{colors.on-primary}`: white label on filled buttons.
- **Secondary button** `{colors.button-secondary-bg}`: Gray 80 fill.
- **Danger** `{colors.danger}`: Red 60 fill for destructive actions.
- **Hero cyan** `{colors.surface-hero-cyan}`: Cyan 20, the hero background.
- **Hero ink blue** `{colors.ink-hero-blue}`: deep blue text on the hero.
- **Blue 90** `{colors.blue-90}`: the dark blue band; published as `blue90` in the @carbon/colors package.
- **Hairline** `{colors.hairline}`: Gray 30 rules and borders.

### State logic (from the color docs)
- Hover shifts half a step on the IBM scale, active shifts two full steps, selected one step, disabled uses the gray family only.
- Focus is Blue 60 on light themes and White on dark, at 3:1 minimum contrast.
- Text contrast follows WCAG: 4.5:1 for small text, 3:1 for large text and graphics.
- Light themes alternate White and Gray 10 with each nested layer; dark themes get progressively lighter (Gray 100, 90, 80).

## Typography

Carbon uses IBM Plex across two type sets (carbondesignsystem.com/elements/typography/type-sets):
- **Productive** (suffix -01): condensed, fixed, 14px base, for product screens.
- **Expressive** (suffix -02): larger, responsive (fluid) styles, 16px base, for editorial and marketing.

Documented tokens include body-compact-01 (14px/18px, 0.16px tracking), body-01 (14px/20px), heading-01 (14px, 600), heading-02 (16px, 600), heading-03 (20px/28px), heading-06 (42px/50px, weight 300), fluid-display-01 (54px/64px, 300) and fluid-display-04 (92px/102px, -0.64px).

Measured on the docs home page and docs demos:

| Role | Family | Size / line | Weight | Notes |
|---|---|---|---|---|
| Display | IBM Plex Serif | 112px / 123.2px | 200 | hero "Let's make together" |
| Display mobile | IBM Plex Serif | 64px / 64px | 200 | at 390px |
| Heading | IBM Plex Sans | 16px / 24px | 600 | card and section labels |
| Body | IBM Plex Sans | 31.871px / 40.9771px | 400 | large fluid intro paragraphs |
| Nav | IBM Plex Sans | 14px / 20px | 600 | letter-spacing 0.1px |
| Link | IBM Plex Sans | 16px / 16px | 400 | |
| Input | IBM Plex Sans | 14px / 18.0001px | 400 | letter-spacing 0.16px |
| Button | IBM Plex Sans | 14px / 18.0001px | 400 | same as body-compact-01 |

The button doc says labels use sentence case ("only the first word in a phrase and any proper nouns capitalized") at 14px regular for standard and 16px for expressive.

**Font substitutes:** IBM Plex is open source (SIL OFL) and is loaded as a web font. If unavailable, the measured fallback chain is system-ui, -apple-system and ".SFNSText-Regular", then generic sans-serif or serif.

**Principles**
- Light weights (200-300) only at display sizes; 400 for reading; 600 for emphasis in compact UI.
- Letter-spacing is slightly positive at 14px (0.16px) and negative only at very large display (-0.64px at 92px).
- Serif is used once, for the brand-expressive hero; everything functional is Sans.

## Layout

- Carbon's 2x Grid has an 8px square "mini unit". Breakpoints: small 320px (4 columns), medium 672px (8), large 1056px (16), x-large 1312px (16), max 1584px (16). Margins are 0, 16, 16, 16 and 24px; gutters total 32px when present; padding is 16px at all standard breakpoints.
- The docs layout is a fixed left rail of navigation next to a content column; the content is wide, left-aligned and tiled in ruled rectangles.
- Measured paddings are 16px (most common), then 32px, 48px and 64px; gaps are 8px and 16px.
- The spacing scale (carbondesignsystem.com/elements/spacing/overview) is 2, 4, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96 and 160px for `$spacing-01` to `$spacing-13`; tokens in this file are `{spacing.s1}` 8px up to `{spacing.s7}` 64px.
- Fixed sizing scale in the docs: 8, 16, 24, 32, 48, 64, 80px.
- Aspect ratios recommended for imagery: 1:1, 2:1, 2:3, 3:2, 4:3, 16:9.

## Elevation & Depth

Carbon is flat. The home page measured a single shadow, a 1px right-edge line (`1px 0 0` in light grey) on the side navigation, i.e. a divider and not a drop shadow. Depth comes from background layering (White vs Gray 10), from 1px rules between tiles and from the hero's color field. There are no blurred shadows or gradients in the measured page.

## Shapes

- Components are square: `{rounded.none}` 0px on buttons, inputs and tiles.
- The only rounding measured on the home page is 8px (`{rounded.xs}`), on a few media elements.
- Illustrations use pill-shaped chips and circles, but those are artwork, not component tokens.
- Dividers are 1px lines in `{colors.hairline}` and often form a table-like grid of tiles.

## Components

### Buttons (measured on the Carbon React Storybook)
- **Primary**: `{colors.primary}` fill, `{colors.on-primary}` label, `{typography.button}`, padding 14px 63px 14px 15px, height 48px, radius 0. The documented spec is 16px left, 64px right padding for a standard button (equal 16px both sides when an icon is present).
- **Secondary**: `{colors.button-secondary-bg}` fill, same geometry. Secondary buttons only appear alongside a primary and usually carry the negative action such as Cancel or Back.
- **Danger**: `{colors.danger}` fill for destructive actions; danger also has tertiary and ghost styles.
- **Other kinds** (from the docs): tertiary (transparent with colored border and text) and ghost (transparent with link-primary text; always paired with an icon).
- **Sizes** (docs): extra small 24px, small 32px, medium 40px, large 48px, extra large 64px, 2XL 80px.
- **Rule**: one primary button per screen, excluding application header, modals and side panels.

### Text input
- Field background `{colors.canvas}` (Gray 10), text `{colors.ink}`, 14px type, padding 0 16px, height 40px, radius 0. Placeholder uses `{colors.text-placeholder}`.
- The docs-site Find field in the side nav is a compact version: height 32px, padding 0 32px (`search-input`).

### Tile
- Grey (Gray 10) rectangle with 16px padding; body text 14px and a blue link line. On the home page, tiles are white building-block cells separated by hairlines with an arrow in the bottom-right.

### Navigation
- Header is white with dark text; side nav items are 14px semibold with chevrons for expansion; nav link padding is 0 16px.
- Link rows have a pale-blue background (`{colors.surface-hero-cyan}`) behind blue text in the hero area.

### Footer
- Dark footer with Gray 10 text for Contact us, Privacy, Terms of use, Accessibility, IBM.com and Cookie, padding 32px vertical.

## Design System Architecture

Carbon is a design system, and its architecture is public. Sources opened for this file:
- **Color**: https://carbondesignsystem.com/elements/color/overview/ and https://carbondesignsystem.com/elements/color/tokens/ - four themes, role-based tokens, layering and state rules.
- **Palette values**: https://unpkg.com/@carbon/colors/lib/index.js - the `@carbon/colors` package exports the IBM palette (blue60 #0f62fe, blue90 #001d6c, cyan20 #bae6ff, gray10 #f4f4f4, gray30 #c6c6c6, gray60 #6f6f6f, gray70 #525252, gray80 #393939, gray100 #161616, red60 #da1e28, white #ffffff).
- **Typography**: https://carbondesignsystem.com/elements/typography/type-sets/ and the overview page - productive and expressive type sets in IBM Plex.
- **Spacing**: https://carbondesignsystem.com/elements/spacing/overview/ - the 13-step spacing token scale.
- **Grid**: https://carbondesignsystem.com/elements/2x-grid/overview/ - 8px mini unit, five breakpoints.
- **Buttons**: https://carbondesignsystem.com/components/button/style/ and the usage page - sizes, padding, tokens, rules.
- **Component implementation**: the React Storybook at https://react.carbondesignsystem.com, measured here for button, input and tile.

The system is delivered as packages (@carbon/colors, @carbon/themes, @carbon/layout, @carbon/type, @carbon/react) so that tokens are the single source of truth for hex values, spacing and type.

## Imagery, Voice and Density

### Imagery and art direction
- Illustration is monoline: thin blue strokes with pale-blue fills on the hero, grey strokes with a few blue accents on the Carbon MCP panel.
- The hero art depicts Carbon's own parts (tag pills with close icons, a pie-chart tile, a folder tree table, a checkbox, an info notification), so the illustration is also a component index.
- The MCP illustration is a dense collage of outlined components (tables, sliders, dials, clips) in light grey, with one saturated blue browser window and a seated figure as the focal point.
- No photography appears in the captured screens.
- Icons are simple line glyphs: search, chevrons, an external-link square, arrows pointing right.

### Microcopy voice
- Institutional, collaborative and plain: "Let's make together", "Start designing", "Start developing".
- Descriptions define scope in a sentence: "Carbon is IBM's enterprise-ready, open-source design system, shaped by the IBM Design Language. Get started, and make with us."
- Section eyebrows are small semibold labels above large light headings ("Carbon MCP", "Building blocks", "Building experiences").
- Large pull statements are set at 31.871px weight 400 so a paragraph reads like a headline: "Pre-built, reusable assets that enable teams to build consistent digital experiences faster."
- Links end with an arrow and sentence-case text: "Learn about Carbon MCP".

### Density
- The side navigation and header are compact (14px semibold, small chevrons), while the content column is spacious and uses very large type.
- Tiles are tall, mostly empty rectangles with a label at top-left and an arrow at bottom-right, a pattern that makes the whole tile feel like one click target.
- Whitespace is structural: grid cells are separated by 1px rules rather than gutters.

### Interaction cues
- Arrow in the lower-right corner of tiles signals navigation.
- External link icon at the end of the Feedback row.
- Side navigation groups expand with a chevron.
- Focus color is Blue 60 on light themes (docs), the same hue as links and the primary button.

## Component Anatomy Reference

| Component | Fill | Text | Radius | Padding | Height |
|---|---|---|---|---|---|
| Primary button | `{colors.primary}` | `{colors.on-primary}` | `{rounded.none}` | 14px 63px 14px 15px | 48px |
| Secondary button | `{colors.button-secondary-bg}` | `{colors.on-primary}` | `{rounded.none}` | 14px 63px 14px 15px | 48px |
| Danger button | `{colors.danger}` | `{colors.on-primary}` | `{rounded.none}` | 14px 63px 14px 15px | 48px |
| Text input | `{colors.canvas}` | `{colors.ink}` | `{rounded.none}` | 0 16px | 40px |
| Search input (docs nav) | `{colors.canvas}` | `{colors.ink}` | none | 0 32px | 32px |
| Tile | `{colors.canvas}` | `{colors.ink}` | none | 16px | content |

## Do's and Don'ts

**Do**
- Use role tokens (`$text-primary`, `$layer-01`) in product code; the hex values here are the White theme resolutions.
- Keep controls square and aligned to the 8px mini unit.
- Reserve the blue for interactive elements and focus.
- Use one primary button per screen and pair secondary with primary.
- Alternate White and Gray 10 for nested layers.
- Use sentence case on buttons.

**Don't**
- Don't round buttons, inputs or tiles.
- Don't use Plex Serif for UI text.
- Don't add drop shadows to separate content; use layers and rules.
- Don't use ghost buttons without an icon.
- Don't use light display weights below display sizes.

## Responsive Behavior

- The expressive type set is fluid: headings change size across breakpoints. The measured hero drops from 112px (desktop) to 64px (390px mobile) with a 1.0 line-height ratio.
- Grid columns go 4, 8, 16 as the viewport grows from small (320px) to medium (672px) to large (1056px); x-large (1312px) and max (1584px) stay at 16.
- Margins widen from 0px at small to 16px and 24px at max.
- Spacing tokens stay fixed, but designs may step up or down the scale at a breakpoint (for example `$spacing-05` on desktop and `$spacing-03` on tablet).
- The documentation site pairs the side nav with the content on wide screens.

## Iteration Guide

1. Set canvas Gray 10 and surface white, ink Gray 100, then add the one blue.
2. Build all controls at 0 radius and on the 8px grid; buttons at 48px tall by default.
3. Group with rules and layers, not shadows or gaps.
4. Use Plex Sans 14px for compact UI and 16px for expressive reading; reserve Plex Serif light for a single hero line.
5. Resolve every value through a token from @carbon/colors or the White theme table; avoid inventing a new neutral.
6. When extending, measure a real component on the Carbon Storybook before adding a token.
