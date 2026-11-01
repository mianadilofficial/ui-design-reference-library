---
version: alpha
name: "Base Web"
category: "Design Systems"
description: "Base Web is Uber's open-source React design system; its docs site is strictly monochrome: black #000000 ink and 48px black primary buttons with 8px radius on white, #f3f3f3 hairlines, UberMove 700 headings (28px/24px) over UberMoveText 16px/24px body, with accent blue #276ef1 and negative red #de1135 reserved for state."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  gray-50: "#f3f3f3"
  positive-ink: "#166c3b"
  accent: "#276ef1"
  negative: "#de1135"
  negative-ink: "#bb032a"
  positive: "#0e8345"
  gray-100: "#e8e8e8"
  gray-700: "#5e5e5e"
  gray-900: "#333333"
  warning-light: "#fdf2dc"
  positive-light: "#eaf6ed"
  negative-light: "#fff0ee"
typography:
  display:
    fontFamily: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 36px
  heading:
    fontFamily: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  body:
    fontFamily: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
  input:
    fontFamily: Arial
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
spacing:
  s1: 4px
  s2: 6px
  s3: 9px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 36px
components:
  button-negative:
    backgroundColor: "{colors.negative}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 14px 16px
    height: 48px
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 14px 16px
    height: 48px
  nav:
    textColor: "{colors.ink}"
    padding: 12px 24px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  search-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 9px 9px 9px 36px
    height: 42px
    borderColor: "{colors.gray-50}"
  docs-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.gray-50}"
  footer:
    backgroundColor: "{colors.gray-50}"
    textColor: "{colors.ink}"
    padding: 64px 0px
---

# Base Web

## Overview

Base Web is Uber's open-source React component library, released in 2018, "implementing the Base design language that acts as a device-agnostic foundation for quickly and easily creating web applications" (https://www.uber.com/blog/introducing-base-web). The product is the component library (and its themeable tokens); baseweb.design is its documentation site, captured here at version v18.2.0.

The documentation site is deliberately plain and black-and-white. A thin white header carries the "Base Web" diamond logo, a version dropdown (v18.2.0), the links Blog and Components, a search field ("Search documentation") and three icon buttons (GitHub, a menu, a light-bulb theme toggle). A fixed left sidebar lists the docs in small-caps group headings (GETTING STARTED, GUIDES, COMPONENTS, then INPUTS, PICKERS, DATE & TIME, NAVIGATION, CONTENT) with the current page, "Home", highlighted by a light grey block and a heavy black left edge. The content column is narrow: a small green "New" badge ("What's new in Base Web 16?"), the 28px bold page title "Base Web React UI framework", a one-line lede, two bordered cards (Setup Base Web, Learning Base Web) each ending in a full-width black button, then h2 sections (Components, Extensibility, Built-in accessibility, Performance, Figma Community, "Who is using Base Web?") of 16px body text with underlined links, and a 3 x 4 grid of customer logos (Uber, Broadcom, Metromile, Extensis, uptime, Streamlit, Everbase, CADRE, Sprinklr, Radity, Global CTO Forum).

Key characteristics:
- **Black and white.** Ink is #000000 on #ffffff; the primary button is solid black, and the only chroma on the page is a tiny green badge and customer logos.
- **Uber Move.** Headings in UberMove (700), body and UI in UberMoveText (400/500), with a system-ui and Helvetica Neue fallback chain.
- **Modest type.** 28px page titles, 24px section titles, 16px body, 14px inputs; no oversized display.
- **8px controls.** Buttons, inputs and selects use an 8px radius in the standard size (4px in mini), and cards in the docs use 12px.
- **Hairline-light surfaces.** The only grey is #f3f3f3 (gray50) for borders, search field and the footer.
- **No decoration.** No shadows on the homepage, no gradients, no illustrations.

## Colors

Measured on baseweb.design (homepage plus the Button, Input, Select, Tag and Card docs pages) and checked against the MIT-licensed token source in the repository: `src/tokens/color-primitive-tokens.ts`, `src/themes/light-theme/color-foundation-tokens.ts` and `color-semantic-tokens.ts` (https://github.com/uber/baseweb).

### Core
- **Canvas** `{colors.canvas}` (#ffffff): page background; semantic `backgroundPrimary` = foundation `primaryB`, which is white.
- **Ink** `{colors.ink}` (#000000): all body copy (2639 characters measured); `contentPrimary` = `primaryA`, black.
- **Primary** `{colors.primary}` (#000000): the primary button fill; `foundation.primary: '#000000'` in the source.
- **On primary** `{colors.on-primary}` (#ffffff): `contentInversePrimary`.

### Greys (primitive scale from the source)
- **Gray 50** `{colors.gray-50}` (#f3f3f3): `backgroundSecondary`, `borderOpaque`; the docs search border, footer and secondary surfaces.
- **Gray 100** `{colors.gray-100}` (#e8e8e8): `backgroundTertiary`; measured as a tag border.
- **Gray 700** `{colors.gray-700}` (#5e5e5e): `contentTertiary`; measured as a border on selected-state demos.
- **Gray 900** `{colors.gray-900}` (#333333): measured text on docs pages (mono900 / primary700 in the source).
- The full scale is gray50 #F3F3F3, gray100 #E8E8E8, gray200 #DDDDDD, gray300 #C6C6C6, gray400 #A6A6A6, gray500 #868686, gray600 #727272, gray700 #5E5E5E, gray800 #4B4B4B, gray900 #282828.

### Accent and status
- **Accent** `{colors.accent}` (#276ef1): the blue600 primitive, the foundation `accent` colour; measured as a selected border on the Button page.
- **Negative** `{colors.negative}` (#de1135): red600, `backgroundNegative`; the "DangerPrimary" button measured with this fill.
- **Negative ink** `{colors.negative-ink}` (#bb032a): red700, the red tag text (`tagRedContentSecondary`).
- **Positive** `{colors.positive}` (#0e8345): green600; measured as a valid-input border. **Positive ink** `{colors.positive-ink}` (#166c3b) is green700, the text of the green "New" badge.
- **Light tints:** `{colors.warning-light}` (#fdf2dc, yellow50), `{colors.positive-light}` (#eaf6ed, green50), `{colors.negative-light}` (#fff0ee, red50); the `backgroundWarningLight`, `backgroundPositiveLight` and `backgroundNegativeLight` semantic tokens.

Semantic roles in the source: `backgroundPrimary/Secondary/Tertiary`, `backgroundInverse*`, `contentPrimary/Secondary/Tertiary` (black, gray800, gray700), `borderOpaque` (gray50), `borderTransparent` (black at 8%), `borderSelected` (black), plus brand, accent, negative, warning and positive extensions and ten tag hues. Hover and pressed overlays: `hoverOverlayAlpha rgba(0, 0, 0, 0.04)`, `pressedOverlayAlpha rgba(0, 0, 0, 0.08)`.

## Typography

Source (https://github.com/uber/baseweb, `src/themes/shared/typography.ts`): primary family `UberMoveText, system-ui, Helvetica Neue, Helvetica, Arial, sans-serif`; secondary (headings) `UberMove, UberMoveText, ...`; mono `UberMoveMono, Lucida Console, Monaco, monospace`. The docs load UberMove 600, UberMoveText 400 and UberMoveText 500.

| Role | Token | Size / weight / line |
|---|---|---|
| Page title | `{typography.display}` | 28px / 700 / 36px (UberMove) |
| Section title | `{typography.heading}` | 24px / 700 / 32px (UberMove) |
| Body | `{typography.body}` | 16px / 400 / 24px |
| Button | `{typography.button}` | 16px / 500 / 20px |
| Input | `{typography.input}` | 14px / 400 / 20px |

The theme's full ladder (font token: size / weight / line height): font100 12/normal/20, font150 12/500/16, font200 14/normal/20, font250 14/500/16, font300 16/normal/24, font350 16/500/20, font400 18/normal/28, font450 18/500/24, font550 20/700/28, font650 24/700/32, font750 28/700/36, font850 32/700/40, font950 36/700/44, font1050 40/700/52, font1150 36/700/44, font1250 44/700/52, font1350 52/700/64, font1450 96/700/112. The measured docs use only 16px (2372 characters), 14px, 24px and 28px.

### Font substitutes
UberMove is Uber's proprietary typeface. Use the site's fallback chain (system-ui, Helvetica Neue, Helvetica, Arial); Inter or any neutral grotesque is a reasonable open stand-in.

## Layout

- Header about 67px tall with 12px 24px padding.
- Two-column docs layout: a sidebar of link text on the left (items indented in two levels) and a narrow content column with the lede and card pair at the top.
- The two cards sit side by side with a small gutter, each with title, paragraph and button.
- Sections stack with consistent vertical rhythm; headings 24px/32px, paragraphs 16px/24px.
- Customer logos sit in a 3-column grid.
- Footer: #f3f3f3, 64px vertical padding, 221px high, with links GitHub, Changelog, Blog.
- Spacing scale from `src/themes/shared/sizing.ts`: scale0 2px, scale100 4px, scale200 6px, scale300 8px, scale400 10px, scale500 12px, scale550 14px, scale600 16px, scale650 18px, scale700 20px, scale800 24px, scale900 32px, scale1000 40px, scale1200 48px, scale1600 64px (and larger up to scale4800 192px).

## Elevation & Depth

- The homepage has no shadows; surfaces are separated by 1px #f3f3f3 borders and the sidebar's highlight block.
- Shadow tokens (`src/themes/shared/lighting.ts`): shadow400 `0 1px 4px hsla(0, 0%, 0%, 0.16)`, shadow500 `0 2px 8px ...0.16`, shadow600 `0 4px 16px ...0.16`, shadow700 `0 8px 24px ...0.16`.
- Measured on the Button page: `rgba(0, 0, 0, 0.12) 0px 4px 16px 0px` (a popover) and a focus ring made of `rgb(255, 255, 255) 0px 0px 0px 2px inset, rgb(0, 0, 0) 0px 0px 0px 2px`.
- Border tokens border100 to border600 are black at 4% to 24% opacity, 1px solid.

## Shapes

Radius source (`src/themes/shared/borders.ts`): numeric radius100 to radius500 from 2px to 16px; component radii: buttons 4px (mini) and 8px (standard), inputs and selects 4px (mini) and 8px (standard), popovers and menus 8px, checkboxes 0px, cards, modals and toasts 0px, tags 24px.

Measured: 8px (buttons, inputs), 12px (docs cards, `{rounded.md}`), 4px (`{rounded.xs}`, mini sizes), 3px, 50% and 999px (circles and pills). The tokens here are `{rounded.xs}` 4px, `{rounded.sm}` 8px and `{rounded.md}` 12px.

## Components

### Buttons
- **Primary:** `{components.button-primary}`: black fill, white 16px/500 label, 48px high, padding 14px 16px, 8px radius ("Setup Base Web", "Learn more", "Click to focus").
- **Negative (DangerPrimary):** `{components.button-negative}`: #de1135 fill, same geometry.
- The Button docs enumerate kinds (primary, secondary, tertiary, minimal) and sizes (mini, compact, default, large); the exact heights beyond the default 48px were not measured.

### Search field
`{components.search-input}`: 42px high, 2px solid #f3f3f3 border, padding 9px 9px 9px 36px (room for the magnifier), 14px/20px text.

### Cards
`{components.docs-card}`: white, 12px radius, 1px #f3f3f3 border; the docs cards hold a 24px heading, 16px text and a full-width black button. (The library's own Card component uses a 0px radius per the source.)

### Tags
Tag colour tokens cover ten hues (gray, red, orange, yellow, green, blue, purple, magenta, teal, lime) with primary and secondary variants; the source gives tags a 24px radius. Measured on the Tag page: borders #dee9fe, #175bcc, #d3efda and text #bb032a, #845201, #166c3b on light tinted fills (#fff0ee, #eaf6ed, #fdf2dc).

### Navigation and footer
`{components.nav}`: 12px 24px padding, black text; `{components.nav-link}`: 16px/400 black. Sidebar group headings are small uppercase labels. `{components.footer}`: #f3f3f3 with 64px padding.

### Badge
The "New" badge is a small green-on-pale-green label (text #166c3b on #eaf6ed).

## Docs Anatomy and Imagery

- **Sidebar.** Group headings in uppercase 14px-class type (GETTING STARTED, GUIDES, COMPONENTS), sub-group labels in smaller uppercase (INPUTS, PICKERS, DATE & TIME, NAVIGATION, CONTENT), and items in regular weight. Components listed in the capture include Button, Button Dock, Button Group, Button Timed, Checkbox, Checkbox-v2, Combobox, Form Control, Input, Payment Card, Phone Input, Pin Code, Segmented Control, Radio, Slider, Sliding Button, Stepper, Switch, Textarea, File Uploader, Menu, Rating, Select, Datepicker, Time Picker, Timezone Picker, Bottom Navigation, Breadcrumbs, Navigation Bar, Header Navigation, Link, Mobile Header, Page Control, Pagination, Side Navigation, Tabs, Accordion, Avatar, Badge, Drag and Drop List, Layout Grid and Heading.
- **Guides.** Internationalization, Bidirectionality, Theming, Styling, Overrides, Colors, API Cheat Sheet.
- **Getting started.** Home, Setup, Learn Base Web.
- **Imagery.** None beyond logos: the "Who is using Base Web?" grid shows full-colour customer wordmarks at equal visual weight on white.
- **Links.** Inline links are black with an underline, in line with the monochrome palette.
- **Density.** Moderate: 16px/24px text, generous heading spacing, no card shadows.

## Microcopy Patterns

| Pattern | Example |
|---|---|
| Announcement badge | "New" + "What's new in Base Web 16?" |
| Page title | "Base Web React UI framework" |
| Lede | "Base Web is a foundation for initiating, evolving, and unifying web products." |
| Card heading + paragraph + action | "Setup Base Web" / explanation / "Setup Base Web" button |
| Section titles (noun phrases) | Components, Extensibility, Built-in accessibility, Performance, Figma Community |
| Footer links | GitHub, Changelog, Blog |

Voice: plain, engineering-focused, benefit-led sentences ("Base Web does the heavy lifting for you, components are built with accessibility being a first-class citizen").

## Measured Reference

| Item | Value |
|---|---|
| Canvas / ink | #ffffff / #000000 |
| Surface | #f3f3f3 |
| Page title | UberMove 28px / 700 / 36px |
| Section title | UberMove 24px / 700 / 32px |
| Body | UberMoveText 16px / 400 / 24px |
| Button | 16px / 500 / 20px, padding 14px 16px, 48px, radius 8px |
| Search field | 42px, 2px solid #f3f3f3, padding 9px 9px 9px 36px |
| Header | 67px high, padding 12px 24px |
| Footer | 221px high, padding 64px 0 |
| Font families by characters | UberMoveText 2515, UberMove 151 |
| Radii seen | 8px (8 uses), 12px (2), 4px (1) on the homepage |
| Docs-page radii | 8px, 12px, 4px, 3px, 50%, 999px |

## Component Size Tokens (from the source)

| Item | Value |
|---|---|
| Standard button / input / select radius | 8px |
| Mini button / input / select radius | 4px |
| Popover and menu radius | 8px |
| Tag radius | 24px |
| Card, modal, toast radius | 0px |
| Border width (border100 to border600) | 1px solid, black at 4% to 24% |

The docs site itself overrides some of these (for example 12px cards), so measured and source values are both listed.

## Design System Architecture

Base Web is a full public design system and component library:
- **Repository and licence:** https://github.com/uber/baseweb (MIT). Docs: https://baseweb.design.
- **Token layers (light theme):** primitives (`color-primitive-tokens.ts`: gray, red, orange, amber, yellow, lime, green, teal, blue, purple and more at steps 50 to 900), foundation colours (`color-foundation-tokens.ts`: primaryA black, primaryB white, accent #276ef1, negative #de1135, warning, positive and a monochrome ramp), semantic tokens (`color-semantic-tokens.ts`) and component tokens (`color-component-tokens.ts`).
- **Theming:** "a top level entry point to theme all design tokens, including colors, sizing, and typography" (Uber engineering blog); themes include light and dark.
- **Overrides API:** every component accepts overrides (object or function of `$theme` and component state) that are deep-merged with default styles, or replace sub-components entirely.
- **Styletron:** the CSS-in-JS engine that "generates atomic styling so that web applications can download as little content as possible"; the docs page cites its benchmarks.
- **Typography, sizing, borders, lighting:** shared theme files in `src/themes/shared/` hold font tokens (font100 to font1450), scale tokens (scale0 to scale4800), border and radius tokens, and shadow tokens (shadow400 to shadow700).
- **Figma:** the docs link a Figma Community file of all components.

## Do's and Don'ts

### Do
- Keep it black and white: black ink and primary button on white, grey #f3f3f3 for structure.
- Use UberMove 700 for headings and UberMoveText 400/500 for UI and body.
- Use 8px for standard controls and 4px for mini; 12px for docs-style cards.
- Reach for semantic tokens (`contentPrimary`, `borderOpaque`) rather than primitives.
- Customise through the theme object and the overrides API, not by forking styles.
- Reserve blue (#276ef1) and red (#de1135) for accent and negative states.

### Don't
- Don't add decorative gradients, illustrations or large shadows to the docs chrome.
- Don't use more than one solid black primary button per card or view.
- Don't introduce body text sizes beyond the 12 to 18px band for body copy.
- Don't style inline docs links in blue; in the capture they are black and underlined.
- Don't round cards beyond the library's own tokens unless it is the docs layout.

## Responsive Behavior

- The extraction recorded only the desktop layout for this page; mobile roles are limited to what the extractor reported, and the library's responsive utilities (Layout Grid, Mobile Header, Bottom Navigation, Side Navigation) appear in the sidebar component list.
- The docs sidebar lists "Mobile Header" and "Page Control" components, showing the library covers small screens.
- Sizing tokens are px-based, so layouts scale by changing component sizes (mini, compact, default, large) rather than by fluid type.

## Iteration Guide

1. Choose primitives: white, black and the gray50 to gray900 scale.
2. Map them to semantic tokens (backgroundPrimary white, contentPrimary black, borderOpaque gray50).
3. Set UberMove/UberMoveText (or a neutral fallback) and the 16/24 body, 28/36 title.
4. Build the 48px black button with an 8px radius, then inputs at 8px with a gray50 border.
5. Add the accent #276ef1 and negative #de1135 only for selected and error states.
6. Wire everything through a theme object so dark mode and brand variants are token swaps.
