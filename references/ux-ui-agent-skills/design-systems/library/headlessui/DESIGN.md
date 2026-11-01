---
version: alpha
name: Headless UI
category: "Headless UI"
description: 'Headless UI by Tailwind Labs: a pure-black #000000 docs site in Inter var (48px/600 headline, -1.2px tracking) with 12px uppercase monospace labels, white text at 50% and 40% alpha, 5-13% white-alpha card fills, hairline grids, and 16px to 40px rounded panels around dark component previews.'
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-mid: "#404040"
  ink-muted: "#ffffff80"
  ink-faint: "#ffffff66"
  hairline: "#ffffff13"
  control-bg: "#ffffff1a"
  card-bg: "#ffffff0d"
  ink-docs: "#a3a3a3"
  ink-code: "#e5e7eb"
  accent-sky: "#00bcff"
  accent-pink: "#fb64b6"
  accent-violet: "#c27aff"
typography:
  display:
    fontFamily: "\"Inter var\", sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 60px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: "\"Inter var\", sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: "-0.6px"
  heading:
    fontFamily: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: 1.2px
    textTransform: uppercase
  button:
    fontFamily: "\"Inter var\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Inter var\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: "\"Inter var\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  version-select:
    backgroundColor: "{colors.control-bg}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 2px 6px 2px 12px
    height: 28px
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 4px 12px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 3px
    borderColor: "{colors.card-bg}"
  footer:
    textColor: "{colors.ink}"
    padding: 48px 0px
---

# Headless UI

## Overview

Headless UI (https://headlessui.com) is Tailwind Labs' library of "completely unstyled, fully accessible UI components, designed to integrate beautifully with Tailwind CSS", for React and Vue. The product is a behaviour layer: it ships keyboard navigation, focus management and ARIA wiring and deliberately no visual design. The documentation site therefore has two jobs: demonstrate that the same unstyled parts can look polished, and stay out of the way. The result is a restrained, pure-black stage.

The captured home page (desktop, 1280px) opens on a black field with a faint violet-blue nebula glow bleeding in from the top-left and top-right. A slim header holds a rounded cyan-and-blue gem logomark, the wordmark "HeadlessUI", a "v2.1" version selector pill and a GitHub glyph at the far right. Below it sits the 48px headline "Completely unstyled, fully accessible UI components, designed to integrate beautifully with Tailwind CSS." in white Inter, then a very large rounded panel (40px top corners) that contains the content: React and Vue switch tabs, followed by a grid of component preview cells with a text label under each.

The grid is the signature. Hairline lines (white at about 7% alpha) run both vertically and horizontally through the page and past the panel, so the previews read as cells on a blueprint. Inside each cell is a miniature dark-mode demo of the component (menu, disclosure, dialog, popover, tabs, transition, button, checkbox, combobox, fieldset, input, listbox, radio group, select, switch) sitting on a soft radial lift. A small monospace uppercase label ("FORMS") separates the Navigation group from the Forms group.

**Key characteristics**
- Pure black canvas `{colors.canvas}` with translucent white layers instead of grey fills.
- White is the "primary": `{colors.primary}` #ffffff for emphasis, text at 50% (`{colors.ink-muted}`) and 40% (`{colors.ink-faint}`) for hierarchy.
- Inter var for everything except 12px uppercase monospace section labels with 1.2px tracking.
- Large radii: 16px controls, 40px panel, 8px to 12px cards.
- Almost no colour in the chrome; the only chroma is the top glow, the logomark and the syntax-style accents on documentation pages.
- Tight display tracking: -1.2px at 48px, -0.6px at 24px mobile.

### Imagery, art direction and voice
- Imagery is entirely product UI: tiny dark-mode scenes of the real components, each framed in its own cell with a faint radial lift. There is no photography, illustration or stock art.
- Preview content is realistic and gently humorous microcopy: "What is your refund policy?", "Payment successful ... Got it, thanks!", "Shipping details", a country select showing "Canada", a combobox typing "Jo" with Jocelyn, Jonathan and Josh, a listbox of John, George, Paul, Ringo, a status select (Active, Paused, Delayed, Cancelled), and radio plans Startup, Business, Enterprise.
- Labels under each preview are the plain component names ("Dropdown Menu", "Disclosure", "Radio Group"), set in short sentence-case title form.
- The voice of the headline is declarative and benefit-led: one sentence, two adjectives ("unstyled", "accessible"), and a named partner (Tailwind CSS).
- Density is low: sixteen listed components in a regular grid with generous empty space inside each cell.

## Colors

All values are measured on the live site (home page plus the Button docs page, `web/data/extracted/headlessui--button.json`).

### Surfaces
| Token | Value | Role |
|---|---|---|
| `canvas` | #000000 | page background (screen pixels sample #020202 and #0b0b0b because of the glow) |
| `surface-mid` | #404040 | opaque mid grey seen in the measured backgrounds |
| `card-bg` | #ffffff0d | white at 5%: menu, disclosure and dialog preview cards |
| `control-bg` | #ffffff1a | white at 10%: version selector pill and the active tab |
| `hairline` | #ffffff13 | white at about 7.5%: grid lines and card borders |

On the Button docs page the dominant backgrounds are #000000cc (black at 80%, the page body), #ffffff0d (5%) and #ffffff1a (10%) in the measured data. The pattern is consistent: layering white alpha on black rather than choosing grey values.

### Text
| Token | Value | Role |
|---|---|---|
| `ink` | #ffffff | headline, labels, active text |
| `ink-muted` | #ffffff80 | inactive tabs, section labels ("FORMS", "Vue") |
| `ink-faint` | #ffffff66 | tertiary text in previews |
| `ink-docs` | #a3a3a3 | body copy on documentation pages (most-read colour there) |
| `ink-code` | #e5e7eb | code and secondary light text on documentation pages |

### Accents (documentation pages only)
`accent-sky` #00bcff, `accent-pink` #fb64b6 and `accent-violet` #c27aff appear in the Button docs page's text colours (roughly 300 to 480 characters each), consistent with syntax-highlighted code samples. They are not used as UI action colours.

### Action colour
There is no saturated CTA on the site. `primary` is white with `on-primary` black, used where emphasis is needed (the active selection in demo menus, the checked checkbox in the Forms group). The extractor picked the "v2.1" version selector as the primary CTA; that is a mis-detection (it is a 10% white pill), recorded in SOURCES.json `_roleOverrides`.

### Colour rules
- Express every neutral as white at a stated alpha over black.
- Never introduce a coloured button fill into the chrome; colour comes from demos.
- Keep text at three levels: 100%, 50%, 40% (60% and 80% appear only inside previews).

## Typography

One sans family and one monospace.

| Token | Font | Size | Weight | Line height | Tracking |
|---|---|---|---|---|---|
| `display` | Inter var | 48px | 600 | 60px | -1.2px |
| `display-mobile` | Inter var | 24px | 600 | 32px | -0.6px |
| `heading` | system monospace stack | 12px | 600 | 16px | 1.2px, uppercase |
| `body` | Inter var | 14px | 400 | 24px | normal |
| `button` | Inter var | 16px | 400 | 24px | normal |
| `link` | Inter var | 14px | 600 | 24px | normal |

- The site loads a single variable face, "Inter var", with a 100 to 900 weight range, and sets the OpenType feature `cv11` (single-storey a) as its default font-feature-settings in the shipped CSS.
- Inter is a free, open-source family under the SIL Open Font License 1.1, with a variable build, a `cv11` single-storey a and optical sizes (https://rsms.me/inter/).
- Measured sizes on the docs page: 14px (about 2,700 characters), 13px, 12px, 16px, 12.25px, 20px, 18px and 24px. The monospace face accounts for roughly 1,400 characters, mostly code.
- Weights in use: 400, 500, 600. Hierarchy is carried by size, alpha and weight 600, never by bold 700.
- Display lines are set tight (line height 1.25) with negative tracking; body is a loose 24px.
- Section labels are monospace, uppercase, 12px, widely tracked: the only place a second family appears in the UI.

### Font substitutes
Inter is open source, so no substitute is needed; use Inter Variable with `font-feature-settings: "cv11"`. If it cannot load, the stack falls back to `sans-serif` and the 48px headline should be reduced to avoid a third line.

## Layout

- Desktop width is 1280px. The header is 80px tall with 24px horizontal padding.
- The main panel is a full-width rounded sheet with a 40px top radius, sitting on the black page; its content is the tab row and a three-column grid.
- Grid cells are one third of the panel width each, with a preview area (about a quarter-screen square) above a semibold label. Columns are divided by hairlines, not gaps.
- Vertical and horizontal hairlines continue beyond the panel edges, forming a page-level frame.
- Measured gaps are small: 16px (most), 20px, 14px, 4px, 2px. Measured paddings are 12px, 8px, 16px, 4px, 24px, 28px, 32px, 48px and 64px.
- Footer: 48px vertical padding, 14px text "(c) 2026 Tailwind Labs Inc. All rights reserved." in `{colors.ink}`.
- The React / Vue switch sits at the top-left of the panel, above the first row of cells, so the framework choice is the first interaction.
- Group labels ("FORMS") occupy a full-width row of their own between grid sections.
- Content is left-aligned from the logomark edge; nothing is centred except the contents of preview cells.
- The spacing ladder in the front matter (2px to 20px) matches component internals (menu rows, tab pills), while sections use 48 and 64px.

## Elevation & Depth

- There are no conventional drop shadows. The only measured box-shadow is a 1px inset ring: `oklab(...) / 0.05` inset 0 0 0 1px, i.e. a 5% white inner border on the preview imagery.
- Depth is built from alpha layering: 5% white card on black, 10% white pill, hairline borders at about 7.5%.
- A radial glow lifts each preview cell from within; the page top carries a blurred violet-blue light field. Treat both as imagery, not tokens.
- Overlays in demos (menus, dialogs) are cards with `{colors.card-bg}` plus the hairline and a 12px radius; the Dialog docs example dims the page with `bg-black/30`.
- Never stack more than two translucent layers; contrast falls off quickly.

## Shapes

| Token | Value | Use |
|---|---|---|
| `xs` | 6px | small buttons inside previews |
| `sm` | 8px | menu card (measured 8px on the dropdown card) |
| `md` | 12px | disclosure card (measured 12px) |
| `lg` | 16px | version selector, image frames |
| `xl` | 40px | the main content panel's corners |
| `pill` | 9999px | React/Vue tabs (measured 3.35544e+07px, i.e. fully round) |

Shapes are generously rounded and soft; no square corners appear in chrome. Rounding nests: 40px panel, 16px frame, 8 to 12px card, 6px item.

## Components

The site itself is a showcase; its own chrome uses few components. The values below are measured; demo styling in the previews is Tailwind utility styling that the library does not impose.

### Version selector (extractor's "button")
`control-bg` (#ffffff1a) fill, radius 16px, 28px high, padding 2px 6px 2px 12px, Inter var 16px/400. On hover it lifts from 10% to 15% white (measured in the hover probe). The label is white in the capture; the extractor reported #000000 for the element, which is why no text colour is declared.

### Tabs (React / Vue)
Pill links: Inter var 14px/600, `{colors.ink-muted}` text, padding 4px 12px, fully round, height 32px. The active tab takes a `control-bg` fill and white text.

### Cards (previews)
Fill `{colors.card-bg}`, 1px border in the same 5% white, radius 8px (menu) or 12px (disclosure), padding 3px on the menu card, internal text 11px. Menu rows highlight with a 10% white fill.

### Section label
Monospace 12px/600 uppercase, 1.2px tracking, `{colors.ink-muted}`.

### Footer
48px vertical padding, 14px `{colors.ink}` text.

### Preview scenes (from the capture)
- **Dropdown Menu**: an "Options" trigger, then a card with Edit, Duplicate (with a command-key shortcut), Archive and Delete rows and small line icons; the hovered row has a lifted fill.
- **Disclosure**: two stacked questions inside one rounded card with chevrons; the open one reveals grey explanatory copy.
- **Dialog**: a small card with a title, one description line, a close glyph and a compact grey button.
- **Popover**: a navigation strip (Products, Solutions, Pricing) with a small caret panel listing Insights, Automations, Reports, Documentation.
- **Tabs**: a pill group (Recent, Popular, Trending) with the active pill filled.
- **Transition**: four overlapping circles stepping from dark grey to white.
- **Checkbox and Switch**: a white square with a check mark; a pill toggle with a white knob.
- **Combobox, Listbox, Select**: a trigger with a chevron over a menu card; the selected row carries a check mark and a lifted fill.
- **Input and Fieldset**: a label above a dark rounded input with no visible border at rest.

### Demo vocabulary
The Button docs page demonstrates the library's styling contract: state is exposed through `data-hover`, `data-active`, `data-focus` and `data-disabled`, and the sample is `rounded bg-sky-600 px-4 py-2 text-sm text-white data-active:bg-sky-700 data-hover:bg-sky-500` (https://headlessui.com/react/button). The Dialog docs add `data-closed:opacity-0 data-closed:scale-95`, `transition duration-300 ease-out` and a `bg-black/30` backdrop (https://headlessui.com/react/dialog).

## Design System Architecture

Headless UI is itself a component library rather than a visual system. It is published by Tailwind Labs as a monorepo at https://github.com/tailwindlabs/headlessui containing `@headlessui/react`, `@headlessui/vue` and `@headlessui/tailwindcss` (the Tailwind plugin), under the MIT licence, with playgrounds, scripts and tests alongside.

- Philosophy (https://tailwindcss.com/blog/headless-ui-unstyled-accessible-ui-components): the library supplies behaviour, keyboard navigation, ARIA attributes and focus trapping, and no CSS, because styled libraries "come tightly coupled with their own provided styles". Styling is done with Tailwind utility classes.
- State hooks: each component exposes `data-*` attributes (`data-hover`, `data-active`, `data-focus`, `data-disabled`, `data-open`, `data-closed`, `data-enter`, `data-leave`), so any CSS approach can style states; render props are the alternative.
- Component set (from https://headlessui.com): Dropdown Menu, Disclosure, Dialog, Popover, Tabs, Transition, Button, Checkbox, Combobox, Fieldset, Input, Listbox, Radio Group, Select, Switch, Textarea.
- There is no published token package or visual spec, by design. The only tokens in play are Tailwind's own scale: the docs site's shipped CSS contains Tailwind v4 variables (for example `--container-md: 28rem`, `--color-blue-100`), and the colours above are Tailwind-style neutrals and alpha whites.
- Because the library ships no theme, the design recorded here describes the documentation site's presentation, which is the reference for how the parts look when styled with Tailwind.

## Do's and Don'ts

**Do**
- Build on `{colors.canvas}` and layer white alpha (5%, 10%, 7.5%) for surfaces.
- Put hierarchy in text alpha: 100%, 50%, 40%.
- Use Inter var with tight negative tracking on large headings (-1.2px at 48px).
- Use monospace 12px uppercase with 1.2px tracking for group labels only.
- Round generously and nest radii (40, 16, 12, 8, 6).
- Style component state through `data-*` attributes.
- Show components in context, inside a miniature scene with a soft radial lift.

**Don't**
- Don't add colour to chrome; keep sky, pink and violet for code samples.
- Don't use drop shadows; use inset 1px alpha rings and hairlines.
- Don't use weights above 600.
- Don't use opaque grey fills where alpha white would do.
- Don't use sharp corners.
- Don't treat the version selector as a call to action.

## Responsive Behavior

- Measured at 1280px and 390px. The display heading steps from 48px/60px with -1.2px tracking to 24px/32px with -0.6px tracking on mobile (exactly half).
- Narrow-screen layout of the three-column preview grid was not measured.
- The 40px panel corner and 16px control radius do not scale down.
- The header keeps logo, version selector and GitHub link; content padding shrinks from 24px.
- Preview scenes are fixed-size illustrations that centre in their cell.
- Tap targets: tabs are 32px high and the version selector 28px high on desktop; enlarge hit areas to 44px on touch without changing the visual size.

## Iteration Guide

1. Start with black, white, and the two alpha text levels; resist adding a brand colour.
2. Set the headline in Inter var 600 with -1.2px tracking at 48px, then body at 14px/24px.
3. Build cards as `card-bg` over canvas, with a hairline and an 8px or 12px radius.
4. Add state through `data-*` attributes (hover to 15% white, active to a deeper fill).
5. Frame content with a large 40px rounded panel and a hairline grid.
6. Add colour only inside demos, using Tailwind scale values such as sky-600 for samples.
7. Re-measure with `node web/scripts/extract-tokens.mjs --slug=headlessui--button --url=https://headlessui.com/react/button --force` after site changes.
8. Run `node web/scripts/verify-designs.mjs --slug=headlessui` before committing.
