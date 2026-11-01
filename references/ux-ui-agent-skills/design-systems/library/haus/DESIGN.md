---
version: alpha
name: haus
category: "Design Systems"
description: "haus, the hipuku portfolio's token-first, light-mode React design system documented in a Storybook: Manrope throughout (30px bold display with -0.9px tracking, 14px body on 24px lines), a dusty-plum brand action #7653ab with white labels on 8px-radius controls, near-black ink #2e3338, cool-cream surfaces #f6f9fc and #f5f4f9, and 12px-radius cards, with every value routed through four CSS layers."
colors:
  canvas: "#ffffff"
  page-body: "#f6f9fc"
  ink: "#2e3338"
  primary: "#7653ab"
  on-primary: "#ffffff"
  primary-deep: "#492b6b"
  primary-strong: "#623a8f"
  primary-tint: "#623a8f12"
  ink-muted: "#5c6570"
  ink-strong: "#111113"
  ink-body: "#3f3f43"
  surface-subtle: "#f5f4f9"
  border-default: "#e7e7ed"
  success: "#006a1b"
  info: "#3665e4"
  warning: "#8e4400"
  error: "#d73431"
typography:
  display:
    fontFamily: Manrope, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 700
  display-mobile:
    fontFamily: Manrope, system-ui, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 12px
  input:
    fontFamily: Manrope, system-ui, sans-serif
    fontSize: 13px
    fontWeight: 400
  title:
    fontFamily: Manrope, system-ui, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 34.5px
    letterSpacing: "-0.9px"
  heading:
    fontFamily: Manrope, system-ui, sans-serif
    fontSize: 24px
    fontWeight: 700
  body:
    fontFamily: Manrope, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Manrope, system-ui, sans-serif
    fontSize: 13px
    fontWeight: 500
    lineHeight: 18.2px
rounded:
  xs: 3px
  sm: 4px
  md: 10px
  lg: 8px
  xl: 12px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 9px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    height: 36px
    borderColor: "{colors.primary}"
  button-tint:
    backgroundColor: "{colors.primary-tint}"
    textColor: "{colors.primary-deep}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.sm}"
    padding: 0px 7px
    height: 28px
  button-tint-hover:
    textColor: "{colors.primary-strong}"
  button-critical:
    backgroundColor: "{colors.error}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    height: 36px
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.xs}"
    padding: 2px 3px
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.input}"
    height: 36px
    padding: 8px 0px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.xl}"
    padding: 20px
    borderColor: "{colors.border-default}"
---

## Overview

haus is an open-source, token-first React design system from the hipuku portfolio, and the page measured here (https://haus.hipuku.dev) is its Storybook: the documentation is the product surface. The capture shows the Storybook shell with the Getting started / Introduction page open. At the left a narrow sidebar carries the plum "haus." wordmark, a search field ("Find components", with a keyboard shortcut chip) and a tree: GETTING STARTED (Introduction, Installation, Composition), TOKENS (Colours, Typography, Spacing, Elevation, Motion, Layout) and COMPONENTS (Avatar, Badge, Button, Callout, Card, Checkbox, Divider, EmptyState, IconButton, Input, Modal and more). The selected row (Introduction) is filled with a strong plum and white text. At the right, the docs pane shows a bold "haus" title, a two-line description, and sections titled "What this is" and "The four layers", where a small definition list pairs uppercase micro-labels (PRIMITIVES, BRAND, SEMANTICS, COMPONENTS) with one-sentence explanations.

The look is quiet, light and typographic: white pages, a cool cream tint (#f6f9fc, #f5f4f9) behind secondary regions, near-black text, a single dusty-plum accent, and no imagery at all. The voice is reasoned and slightly argumentative: "It is deliberately not a general-purpose kit", "the argument it makes is adoption rather than surface", "The gaps in haus were found by measuring it against those products, not by guessing". It describes itself as "a token-first, light-mode, OKLCH design system: four cascade layers, a brand map split from the roles, and twenty React components built on top."

Because the sidebar and toolbar belong to Storybook's own shell, the measured extraction of the top-level page captured shell chrome (including a small toolbar tab, "Surface (default)", that the extractor first mistook for a primary button). The real brand components were measured separately from the story frames (the Introduction docs page, a Button story, an Input story and a Card story), and the tokens below use those measurements for the system itself.

## Colors

haus's tokens are authored in OKLCH, with hex only a display concern; the values here are the computed colors the browser reported on the live pages.

- **Canvas #ffffff** is the page and card ground. **Page-body #f6f9fc** is the cool cream used for the Storybook page body behind regions, and **surface-subtle #f5f4f9** is the cool-cream surface measured on component frames (the tint behind a subtle-weight button).
- **Ink #2e3338** is the docs body and heading color; **ink-strong #111113** is the near-black used for the title and in the input; **ink-body #3f3f43** is the story-frame body; **ink-muted #5c6570** is the quieter secondary text.
- **Primary #7653ab**, the dusty plum ("Aronia"), is the brand action color and link color; **on-primary #ffffff** is the label on it. **Primary-strong #623a8f** and **primary-deep #492b6b** are deeper plums measured in the shell (the selected-row fill and its text on a tinted background), and **primary-tint #623a8f12** is the 7 percent plum tint behind subtle buttons.
- **Border-default #e7e7ed** is the 1px cool-gray border on cards.
- Feedback tones, measured as solid button fills: **success #006a1b** (green), **info #3665e4** (indigo), **warning #8e4400** (amber-brown) and **error #d73431** (red). Each has a subtle background tint and a darker emphasis text color in the system's source.

The source file defines these through named ramps: Aronia (dusty purple, hue 300), Damson (cool neutral, hue 290, very low chroma), Elderberry (indigo, hue 265), Greengage (green, hue 148) and further families for the other feedback tones. Primary text is the Damson 900 step, the default primary is Aronia 500, and the hover step is Aronia 600.

## Typography

Manrope is the UI family, a variable font with weights 200 to 800 loaded in one file, and Fira Code is the mono family; both are on Google Fonts. The Storybook shell additionally loads Nunito Sans, which is not part of haus's token set. System-ui is the declared fallback.

The scale is made of roles, not heading levels, and each role defines size, weight, line height and tracking together.

- **Title 30px / 34.5px**, weight 700, letter-spacing -0.9px, for the page title "haus" (the source's `display` role).
- **Heading 24px**, weight 700, for section headings such as "What this is".
- **Body 14px / 24px**, weight 400, for documentation paragraphs.
- **Button 13px / 18.2px**, weight 500, for buttons; **input 13px**, weight 400.
- **Display 14px**, weight 700 (and **12px / 12px** on small screens or compact controls) is the label style measured on the Storybook navigation chrome.

Tracking tightens as size grows (tightest on the 30px title) and widens on uppercase micro-labels such as the layer names. Manrope's long weight range means one font load covers the whole scale. A serif display face was tried and rejected, according to the repository's decision record.

## Layout

The documentation shell is a fixed-width sidebar and a fluid reading pane. In the reading pane, the content column is narrow and left-aligned, with generous vertical space between sections and a hairline rule under each H2. Definition lists use a two-column layout: uppercase label on the left, sentence on the right.

Measured spacing in the shell runs 2, 3, 4, 5, 6, 7, 8, 9, 10 and 12px, a dense scale for toolbar and sidebar chrome. The component stories show the system's real rhythm: a button pads 8px by 16px and stands 36px tall, an input is 36px tall with 8px of vertical padding, and a card pads 20px. The system's source documents a space ladder in steps of 4px (4, 8, 12, 16, 20, 24, 32 and up) and control heights of 24, 28, 36 and 44px for extra-small, small, medium and large controls, with 36px the default for Button, Input and Select.

## Elevation & Depth

Elevation is expressed through shadows, never through color: the source says surfaces are "white cards on a subtle page, always", and a raised surface changes only its shadow. Roles are named for how high something sits rather than how big the shadow is: raised (the toggle knob), floating (cards and toasts) and overlay (modals). The primitive ramp runs from none through small (a barely visible 1px lift, used on form inputs and subtle card lifts), medium (dropdowns and select menus), large (modals and dialogs) and extra-large (full-page overlays), each a tinted near-black at 6 to 10 percent opacity. In the measured Card story the card has a 1px #e7e7ed border and no visible shadow.

## Shapes

Control corners are 8px: the measured Button radius is 8px, the same step the source names as the control radius for Button, Input, Select and Textarea. Surfaces are rounder, with a 12px radius on cards and toasts; overlay radii are larger still; pill (9999px) is for badges and toggle tracks. The shell's own chrome uses small 3px and 4px corners on toolbar tabs and nav items. The scale in the source is none, small (4px), medium (8px), large (12px), extra-large (16px), 2xl (24px) and full. This yields a clear two-tier look: tidy 8px controls inside softer 12px surfaces, with pills for status chips.

## Components

haus ships twenty React components (CSS Modules): Avatar, Badge, Button, Callout, Card, Checkbox, Divider, EmptyState, IconButton, Input, Modal, Popover, Radio, Select, Spinner, Tabs, Textarea, Toast, Toggle and Tooltip. The ones measured:

**Button.** Props separate variant (visual weight), tone (neutral, info, success, warning, error) and behavior. The solid brand button is #7653ab with a white 13px/500 label, 8px radius, 8px by 16px padding and 36px height with a 1px border in its own color. The critical tone fills #d73431; the success, info and warning tones fill #006a1b, #3665e4 and #8e4400; subtle variants use a pale tint with dark text. Hover deepens the fill (the brand step goes from Aronia 500 to 600).

**Tinted button.** A subtle-weight shell button with a 7 percent plum tint (#623a8f12), #492b6b text, 4px radius, 7px horizontal padding and 28px height; hover darkens its text to #623a8f.

**Input.** 36px tall, 13px Manrope in #111113, with hint, error, required, disabled and adornment states.

**Card.** White fill, 1px #e7e7ed border, 12px radius, 20px padding; variants and a list-item mode.

**Badge.** Pill-shaped chips reading the semantic tone roles; the Introduction page uses three badges (TOKENS, COMPONENTS, PUBLISHED TO NPM) to show them.

**Focus.** A single double ring on :focus-visible only, drawn as box-shadow, with a forced-colors fallback.

## Design System Architecture

haus is itself the design system, and it states its architecture plainly. Its documentation (https://haus.hipuku.dev) and its GitHub repository (https://github.com/hipuku/haus, MIT licensed) describe four cascade layers: primitives (raw values with no meaning, such as `--haus-aronia-500` and `--haus-space-4`), brand (which primitive each role takes; the one file a consumer replaces, with `brands/vault.css` as a complete second brand), semantics (role names such as `--haus-color-surface-default` and `--haus-type-heading-tracking`) and components (the twenty React components, which read the semantic roles and nothing below). Roles are declared on `:root, [data-haus-theme]`, so a brand can apply to a subtree and nest.

Five packages sit in a pnpm workspace: `haus-tokens` (CSS custom properties and W3C Design Tokens JSON), `haus-components`, `haus-colour-utils`, `haus-style-probe` and `haus-colour-names`. Tokens are OKLCH; every surface token has an `on-*` text pair; each type role defines size, weight, line height and tracking; and a hardcoded value fails the stylelint gate. Decisions already settled are light mode only, brand as a layer rather than a theme toggle, separate props for variant, tone and behavior, and one focus mechanism. Because haus's own site is its Storybook, its shell borrows Storybook chrome, and the measurements used here come from the component story frames.

## Do's and Don'ts

- Do read semantic role tokens in components; never read a primitive or a raw number.
- Do keep surfaces light: white cards on a subtle page, with elevation by shadow rather than color.
- Do use plum #7653ab for the primary action and links, and tone colors only for meaning.
- Do set type by role with all four properties (size, weight, line height, tracking).
- Do pair every surface token with its `on-*` text token.
- Don't ship a dark theme; polarity is fixed by the contract.
- Don't hardcode color, spacing, radius, z-index or shadow values.
- Don't use a tone for decoration; neutral, info, success, warning and error carry meaning.
- Don't read the Storybook toolbar tab as a button spec.
- Don't use a serif display face; it was tried and rejected.

## Responsive Behavior

The system's own layout tokens define breakpoints (documented under Tokens / Layout in the Storybook); how the shell itself reflows was not captured. The extractor recorded the shell's compact label at 12px with a 12px line height on a 390px viewport, down from 14px on desktop, while the component specimens (buttons, inputs, cards) were not measured at a mobile width. Control heights come from a fixed ladder (24, 28, 36 and 44px), so touch targets are chosen by size prop rather than by breakpoint, and the 44px large size is named in the source as the minimum target size of Apple's guidelines.

## Iteration Guide

1. Start with canvas #ffffff, ink #2e3338, primary #7653ab with white labels and page-body #f6f9fc.
2. Set Manrope at 14px/24px body, 24px headings and a 30px/34.5px title with -0.9px tracking.
3. Build buttons at 36px, 8px by 16px padding, 8px radius, 13px weight-500 labels; use tone fills for meaning only.
4. Put content in white cards with a #e7e7ed border, 12px radius and 20px padding.
5. Express height with shadow and keep surfaces light; no dark mode.
6. Extend by adding a brand map entry and reading roles, not by adding raw values.
