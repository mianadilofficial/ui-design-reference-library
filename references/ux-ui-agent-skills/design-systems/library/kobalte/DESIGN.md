---
version: alpha
name: Kobalte
category: "Headless UI"
description: 'Kobalte''s documentation site for its unstyled SolidJS component toolkit: white canvas, zinc text #3f3f46 with #18181b headings, Lexend Variable titles over Inter Variable body, a sky-blue #027dbb link accent, 6px-radius demo buttons in #0284c5, and soft tinted callouts.'
colors:
  canvas: "#ffffff"
  ink: "#3f3f46"
  primary: "#027dbb"
  ink-heading: "#18181b"
  ink-muted: "#575760b9"
  demo-primary: "#0284c5"
  primary-hover: "#0369a0"
  primary-active: "#075783"
  surface-code: "#fafafa"
  surface-soft: "#f7f7f7"
  highlight-bg: "#e6f5fe"
  link-underline: "#7ed4fc"
  decoration: "#848490"
  info-bg: "#f0f6ff"
  info-text: "#1e3fae"
  tip-bg: "#f2fdf5"
  tip-text: "#166434"
  warning-bg: "#fffbeb"
  warning-text: "#9c5326"
  danger-bg: "#fef1f1"
  danger-text: "#981b1b"
  important-bg: "#f7f5ff"
  important-text: "#5a21b5"
typography:
  display:
    fontFamily: "\"Lexend Variable\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 39.96px
  heading:
    fontFamily: "\"Lexend Variable\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 14.4px
    fontWeight: 500
    lineHeight: 21.6px
  subheading:
    fontFamily: "\"Lexend Variable\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: "\"Inter Variable\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"Lexend Variable\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 17.5px
    fontWeight: 400
    lineHeight: 26.25px
  button-small:
    fontFamily: "\"Inter Variable\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  button:
    fontFamily: "\"Inter Variable\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
  code:
    fontFamily: "\"JetBrains Mono Variable\", Menlo, Consolas, monospace"
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 21.6px
rounded:
  xs: 4px
  sm: 4.5px
  md: 6px
  lg: 8px
spacing:
  s1: 1px
  s2: 1.6px
  s3: 2px
  s4: 3.2px
  s5: 4px
  s6: 5.6px
  s7: 6px
  s8: 6.4px
  s9: 7.2px
  s10: 8px
components:
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button-small}"
    rounded: "{rounded.lg}"
    padding: 0px 10px 0px 12px
    height: 40px
  nav-link:
    textColor: "{colors.ink-heading}"
    typography: "{typography.nav}"
  button-primary:
    backgroundColor: "{colors.demo-primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-active:
    backgroundColor: "{colors.primary-active}"
---

# Kobalte

## Overview

Kobalte (https://kobalte.dev) is "a UI toolkit for building accessible web apps and design systems with SolidJS", providing "a set of low-level UI components and primitives which can be the foundation for your design system implementation". Its three stated qualities are accessible (WAI-ARIA Authoring Practices, ARIA attributes, focus management, keyboard navigation), composable (granular access to each component part) and unstyled ("zero styles ... bring your preferred styling solution"). The current docs version at capture is v0.13.14.

Because the library ships no visual design, the website is a plain documentation reader and its appearance is the closest thing to a house style. The capture is the "Introduction" page at 1280px:
- A 56px top bar on white: a small blue dot logo mark and a "v0.13.14" grey badge at left; at right a Search field with a command-key shortcut chip (cmd + K), a "Components" link in blue (the active section), a "Changelog" link and a light/dark sun toggle.
- A left sidebar with two groups: "Overview" (Introduction active in blue, Getting Started, Styling, Animation, Polymorphism, SSR) and "Components" (Accordion, Alert Dialog, Alert, Badge, Breadcrumbs, Button, Checkbox, Collapsible, Color Area, Color Channel Field).
- A centre column with a 36px "Introduction" h1 and a "Copy page" outlined button, a lead paragraph, "Key features" with three sub-sections (Accessible, Composable, Unstyled), an "Acknowledgment" list of five linked projects, a "Last updated" stamp with an "Edit this page on GitHub" link, a Next-page link ("Getting Started") and a footer.
- A right "On This Page" outline with the current heading in blue.
- A footer with the logo, a one-line description, a "Community" label with GitHub and Discord icons, and "Powered by Netlify" and "Built with SolidBase" links.

**Key characteristics**
- White `{colors.canvas}` page, zinc text: `{colors.ink}` (#3f3f46) body and `{colors.ink-heading}` (#18181b) headings.
- One accent hue, sky blue: `{colors.primary}` (#027dbb) for active navigation, with `{colors.demo-primary}` (#0284c5) for demo buttons.
- Lexend Variable for titles and navigation, Inter Variable for text, JetBrains Mono Variable for code.
- Light weights (400) and a quiet scale; the largest text is a 36px h1.
- 6px corner radius as the base, 8px on outlined chrome buttons.
- Links are underlined with a sky-blue rule (`{colors.link-underline}`) rather than coloured text.

### Imagery, art direction and voice
- There is no photography or illustration on the page: the only graphics are the small blue-dot logo mark, line icons (copy, search, sun, GitHub, Discord) and code.
- Voice is instructional and compact: short declarative sentences ("Components are shipped with zero styles ..."), feature names as titles (Accessible, Composable, Unstyled) and a plain list of credited projects with their URLs.
- Reading density is low and comfortable: 24px line height on 16px text, wide gaps between sections, one idea per heading.
- Metadata is treated as quiet UI: a version chip, a last-updated stamp and an edit-on-GitHub link, all in the muted grey.
- Navigation vocabulary mirrors the code: component names exactly as exported (Alert Dialog, Color Area, Color Channel Field).

## Colors

All values are measured on the home / introduction page, on the Button docs page (`web/data/extracted/kobalte--button.json`) or named in the site's shipped CSS (the `--sb-*` variables of the SolidBase docs theme).

### Surfaces
| Token | Hex | Role |
|---|---|---|
| `canvas` | #ffffff | page, nav bar (`--sb-background-color`) |
| `surface-code` | #fafafa | code blocks and demo areas (the largest area on the Button page) |
| `surface-soft` | #f7f7f7 | secondary soft panels |
| `highlight-bg` | #e6f5fe | highlighted rows and callouts (`--sb-highlight-background-color`) |

### Text
| Token | Hex | Role |
|---|---|---|
| `ink` | #3f3f46 | body text, nav (most-read colour, about 1,570 characters) |
| `ink-heading` | #18181b | headings and sidebar headings (`--sb-heading-color`) |
| `ink-muted` | #575760b9 | "Last updated", captions (72% alpha) |
| `decoration` | #848490 | link decoration and strong borders (`--sb-decoration-color`) |
| `primary` | #027dbb | active link colour (`--sb-active-link-color`) |
| `link-underline` | #7ed4fc | the underline rule under inline links (`--sb-link-underline-color`) |

### Demo action
- `demo-primary` #0284c5: the "Click me" demo button on the Button page, which the docs define as `hsl(200 98% 39%)`.
- `primary-hover` #0369a0: the demo's `:hover` colour, `hsl(201 96% 32%)` in the page's example CSS.
- `primary-active` #075783: the demo's `:active` colour, `hsl(201 90% 27%)`; it equals `--sb-code-text-color`.
- Focus is a 2px solid outline in the base blue with a 2px offset (`outline: 2px solid hsl(200 98% 39%); outline-offset: 2px`).

### Callouts (from the theme's variables)
| Kind | Background | Text |
|---|---|---|
| Info | #f0f6ff | #1e3fae |
| Tip | #f2fdf5 | #166434 |
| Warning | #fffbeb | #9c5326 |
| Danger | #fef1f1 | #981b1b |
| Important | #f7f5ff | #5a21b5 |

### Code colours
Syntax highlighting on the docs pages uses a GitHub-like set (#032f62, #24292e, #075783, #bf3441, #616972). They are code colours, not brand colours.

### Colour rules
- Keep chrome neutral (zinc and white); the sky blue marks the active location and actions.
- Use the tinted callout pairs only inside content.
- Show links with an underline rule in `link-underline`, not by recolouring text.

## Typography

| Token | Font | Size | Weight | Line height |
|---|---|---|---|---|
| `display` | Lexend Variable | 36px | 400 | 39.96px |
| `subheading` | Lexend Variable | 20px | 400 | 32px |
| `heading` | Lexend Variable | 14.4px | 500 | 21.6px |
| `nav` | Lexend Variable | 17.5px | 400 | 26.25px |
| `body` | Inter Variable | 16px | 400 | 24px |
| `button-small` | Inter Variable | 14px | 500 | 21px |
| `button` | Inter Variable | 16px | 400 | n/a |
| `code` | JetBrains Mono Variable | 14.4px | 400 | 21.6px |

- The shipped variables name the stacks: `--sb-font-headings` Lexend Variable, `--sb-font-text` Inter Variable, `--sb-font-mono` JetBrains Mono Variable, all with Segoe UI / Roboto fallbacks.
- Inter carries about 1,830 characters on the page and Lexend about 110, so display type is a small accent.
- Measured sizes: 16px (most), 13.6px, 14.4px, 20px, 14px, 24px, 21.6px, 36px, 13px, 11.2px, 12px.
- Weights: 400 (about 1,870 characters), 500 (66) and 600 (6). Headings are not bold: hierarchy comes from Lexend's wide forms and size.
- The sidebar section titles ("Overview", "Components") use the 14.4px/500 `heading` style; page-level h2s such as "Key features" are larger (24px appears in the size list).
- The h1 stays at 36px on mobile (measured at 390px).

### Font substitutes
Lexend, Inter and JetBrains Mono are open-source families (fontsource variable builds), so no substitute is needed. Fallbacks are `"Segoe UI", Roboto, sans-serif` per the theme.

## Layout

- Desktop width 1280px with a three-column docs layout: left sidebar, a centre reading column and a right "On This Page" outline.
- Header height is `--sb-header-height: 3.5rem` (56px), with 24px horizontal padding.
- Sidebar items stack with small gaps; sub-items in the outline are indented one step.
- Paddings measured: 8px (very common, 120 uses), 6px, 16px, 32px, 12px, 24px. Gaps: 16px (11), 8px, 10.4px, 14.4px, 7.2px, 12px.
- Footer: 32px vertical padding, description left, "Community" with icon buttons right, and a centred row of two credit links under it.
- The spacing ladder in the front matter uses 1px to 8px steps (including em-based values such as 1.6px and 3.2px), which belong to inline code and keycap details.
- The theme's content radius token is `--sb-border-radius: .375rem` (6px).

## Elevation & Depth

- The docs site is essentially flat: separation comes from whitespace, 1px rules and tinted backgrounds.
- Measured box-shadows are only inset 2px bottom rules: `rgb(126, 212, 252) 0px -2px 0px 0px inset` (the sky-blue link underline, 8 uses) and a zinc version at 25% alpha (`0 -2px 0 0 inset`) for other links.
- Buttons have no shadow; the outlined chrome buttons ("Copy page", "Source") are bordered with a 14% grey line which darkens to 70% grey on hover while the fill turns transparent (measured hover probe).
- The search modal (Algolia DocSearch variables are present) uses a drop shadow `inset 1px 1px 0 0 #ffffff80, 0 3px 8px 0 #555a64`.
- Nothing floats over the content except modals, so no elevation scale is needed.

## Shapes

| Token | Value | Use |
|---|---|---|
| `xs` | 4px | small keycaps and joined-segment ends |
| `sm` | 4.5px | tiny inline chips |
| `md` | 6px | the base radius: demo buttons, code blocks, cards (76 uses on the Button page) |
| `lg` | 8px | outlined chrome buttons such as "Copy page" and the search box |

Corners are small and consistent; there are no pills or large radii. Joined controls use partial radii (for example 4px on the outer ends of a segmented pair).

## Components

### Demo button (button-primary)
The Button docs example: `{colors.demo-primary}` fill, white text, Inter 16px/400, radius 6px, padding 0 16px, height 40px, `display: inline-flex`, no border. States from the page's CSS: hover `{colors.primary-hover}`, active `{colors.primary-active}`, focus-visible a 2px outline in the base blue offset by 2px; disabled exposes `data-disabled`.

### Chrome buttons (button-outline)
"Copy page", "Source" and the "Search" trigger: transparent or white fill, 1px border at 14% grey, `{colors.ink}` text, Inter 14px/500, radius 8px, padding 0 10px 0 12px, 40px high on the Search trigger (31px for Copy page and Source).

### Navigation
White 56px bar, Lexend links at 17.5px in `{colors.ink-heading}`; the active section link is `{colors.primary}`. A grey pill badge shows the version.

### Sidebar and outline
Plain text links, Inter 14px-ish at 13.6px, grey by default, blue and slightly bolder for the active page; group titles in the 14.4px/500 heading style.

### Links in prose
Text keeps its colour and gains a 2px sky-blue inset underline.

### Callouts
Rounded 6px blocks with a tinted background and matching text colour for info, tip, warning, danger and important.

### Code
Fenced blocks on `{colors.surface-code}` with a filename tab ("index.tsx", 14.4px mono, 4px 8px padding) and GitHub-like syntax colours.

### Page chrome
"Last updated: 7/18/26, 5:04 AM" in `{colors.ink-muted}`, an "Edit this page on GitHub" underlined link, and a "Next" card at the page end with a small label and a large Lexend title.

## Design System Architecture

Kobalte is a component library, so the "system" is a behaviour layer plus guidance for styling it. Source: the monorepo at https://github.com/kobaltedev/kobalte (MIT licence; created by Fabien Marie-Louise and sponsored by SolidJS) with `apps/docs`, `packages` and `templates`, and the packages `@kobalte/core` (unstyled components and primitives), `@kobalte/tailwindcss` and `@kobalte/vanilla-extract`.

How styling is meant to work (https://kobalte.dev/docs/core/overview/styling):
- Components accept a `class` prop and expose state through `data-*` attributes such as `data-expanded`, `data-disabled`, `data-checked` and `data-readonly`.
- The `@kobalte/tailwindcss` plugin adds `ui-expanded:*` style modifiers (built into Tailwind v3, optional in v4 where data attributes work natively); `@kobalte/vanilla-extract` offers a `componentStateStyles` helper; the community maintains an UnoCSS preset.
- There are no official tokens: the colours here belong to the documentation theme (SolidBase, credited in the footer: "Built with SolidBase"), whose variables are `--sb-text-color`, `--sb-heading-color`, `--sb-active-link-color`, `--sb-code-background-color`, the callout `--sb-*-background-color` / `--sb-*-text-color` pairs, `--sb-border-radius` and `--sb-header-height`.
- Component demos on the docs pages ship small hand-written CSS (for example the Button demo with its hsl() colours and 2px focus outline) as the reference of how a styled component might look; the docs state that Kobalte's own components ship with zero styles (https://kobalte.dev/docs/core/overview/introduction).
- The library acknowledges Ariakit, Radix UI, React Aria, Zag and corvu as prior art.

## Do's and Don'ts

**Do**
- Keep the page white with zinc text and one sky-blue accent.
- Use Lexend for titles and navigation and Inter for reading text.
- Underline inline links with the sky-blue inset rule.
- Use 6px radii for content blocks and 8px for outlined chrome buttons.
- Show component state through `data-*` attributes in examples.
- Show a 2px offset focus outline in the base blue.
- Use tinted callout pairs for notes, tips, warnings and dangers.

**Don't**
- Don't add shadows to cards or buttons; the system is flat.
- Don't use bold weights for headings; stay at 400 and 500.
- Don't recolour link text; underline instead.
- Don't use pills or radii above 8px.
- Don't present demo styles as a part of the library: Kobalte itself is unstyled.
- Don't use the syntax-highlight colours for UI.

## Responsive Behavior

- Only the h1 was measured at 390px (it stays 36px); the rest is guidance for implementers.
- Mobile layout of the three-column page was not measured; the bar is 56px.
- The Search trigger shrinks to its icon on small screens; the version badge and theme toggle stay.
- Code blocks scroll horizontally rather than wrap.
- Touch targets: chrome buttons are 31 to 40px high; use 40px where possible.
- Mobile footer column layout was not measured.

## Iteration Guide

1. Start with `canvas`, `ink` and `ink-heading`; add `primary` only for the active location and links' underline.
2. Set h1 in Lexend 400 at 36px/39.96px and body in Inter 16px/24px.
3. Build components with 6px radius, 40px height and 0 16px padding; use `demo-primary` for the example button and wire hover and active to the two darker blues.
4. Show states through `data-*` attributes and a 2px offset focus ring.
5. Add callouts from the tinted pairs and code blocks on `surface-code`.
6. Keep the layout three-column: sidebar, reading column, outline.
7. Re-measure with `node web/scripts/extract-tokens.mjs --slug=kobalte--button --url=https://kobalte.dev/docs/core/components/button --force`.
8. Run `node web/scripts/verify-designs.mjs --slug=kobalte`.
