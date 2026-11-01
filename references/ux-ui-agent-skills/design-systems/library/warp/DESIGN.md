---
version: alpha
name: Warp
category: "Developer Tools & IDEs"
description: "Warp homepage: a white and #fbfdfd canvas with ink #1a1522, electric indigo #2a1eff accents, and a yellow #eef17c demo button, set almost entirely in Azeret Mono at 54px/-2px headlines. Uppercase 12px buttons with 4px radius, blueprint-style framed figures, and dotted data-grid illustrations."
colors:
  canvas: "#ffffff"
  page-body: "#fbfdfd"
  ink: "#1a15229e"
  primary: "#2a1eff"
  on-primary: "#ffffff"
  surface-tint: "#fbf9fe"
  surface-lavender: "#f6f5fb"
  ink-strong: "#1a1522"
  ink-faint: "#1a152266"
  ink-soft: "#1a1522c7"
  hairline: "#1a152229"
  on-dark: "#eef7fa"
  card-border: "#0000001a"
  accent-yellow: "#eef17c"
typography:
  display:
    fontFamily: azeretSemiMono, "azeretSemiMono Fallback", "Azeret SemiMono", ui-monospace, monospace
    fontSize: 54px
    fontWeight: 400
    lineHeight: 56.7px
    letterSpacing: "-2px"
  display-mobile:
    fontFamily: azeretSemiMono, "azeretSemiMono Fallback", "Azeret SemiMono", ui-monospace, monospace
    fontSize: 32px
    fontWeight: 400
    lineHeight: 33.6px
    letterSpacing: "-2px"
  heading:
    fontFamily: azeretSemiMono, "azeretSemiMono Fallback", "Azeret SemiMono", ui-monospace, monospace
    fontSize: 34px
    fontWeight: 400
    lineHeight: 56.1px
    letterSpacing: "-2px"
  subheading:
    fontFamily: theFuture, "theFuture Fallback", "The Future", system-ui, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 21.6px
  body:
    fontFamily: azeretSemiMono, "azeretSemiMono Fallback", "Azeret SemiMono", ui-monospace, monospace
    fontSize: 13px
    fontWeight: 400
    lineHeight: 21.45px
  button:
    fontFamily: azeretSemiMono, "azeretSemiMono Fallback", "Azeret SemiMono", ui-monospace, monospace
    fontSize: 11px
    fontWeight: 500
    lineHeight: 13.75px
  button-cta:
    fontFamily: azeretSemiMono, "azeretSemiMono Fallback", "Azeret SemiMono", ui-monospace, monospace
    fontSize: 12px
    fontWeight: 500
    lineHeight: 19.8px
    letterSpacing: 0.6px
    textTransform: uppercase
  link:
    fontFamily: Matter, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 1px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 12px
  2xl: 20px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-cta}"
    rounded: "{rounded.md}"
    padding: 6px 16px
    height: 34px
    borderColor: "{colors.ink-strong}"
  button-primary-hover:
    backgroundColor: "{colors.primary}"
  button-demo:
    backgroundColor: "{colors.accent-yellow}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button-cta}"
    rounded: "{rounded.md}"
    padding: 6px 16px
    height: 32px
  file-tree-selected:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 10px
    height: 36px
  tab-selected:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 18px
    height: 44px
  link:
    textColor: "{colors.on-dark}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.lg}"
    padding: 32px
    borderColor: "{colors.card-border}"
  footer:
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.none}"
    padding: 36px 0px 28px
---

## Overview

The captured Warp homepage is a technical-blueprint page: very light, almost white, covered in thin lines, monospaced type, small framed "figures" and a grid of dots and squares. A black announcement bar ("Live Oct 8: Moving from coding agents to software factories with Uber and Faire - Register") sits above a white header that holds the "warp" logo, the uppercase links "PRODUCTS", "SOLUTIONS", "RESOURCES", "ENTERPRISE" and "PRICING", a "SIGN IN" menu, a yellow "BOOK A DEMO" button and a dark "GET STARTED" button.

The hero headline, "Open infrastructure for cloud software factories", is set in a monospaced face at 54px with -2px tracking, followed by a grey one-line description, two buttons ("GET STARTED" in ink, "DOWNLOAD WARP TERMINAL" in white with a hairline outline) and a note that "Qualified teams get up to $10k in free factory usage" with the amount in indigo. Below is a double-framed figure captioned "[ fig. 1 - the factory ]": an 8-by-28 grid of small squares in grey, indigo and lavender, with a legend (QUEUED, WORKING, WAITING, SHIPPED) and a live-style counter ("224 TASKS - 44 ACTIVE - 1,422 PRS SHIPPED"). Vertical text on both sides reads "WARP - HOME - 2026". Then come a logo row ("trusted by 800k+ devs at" with Anthropic, OpenAI, Docker, Google, Stanford and others) and a "# CONFIGURATION [ONLINE]" section with the heading "Your software factory, defined in code." above a tabbed panel and a YAML file viewer.

**Key Characteristics:**
- Monospace-first typography: Azeret Mono-family type carries headlines, body copy and buttons (about 90% of measured characters).
- A single saturated accent, indigo `{colors.primary}` (`#2a1eff`), used for active tabs, selected rows, hover states and key numbers, on an otherwise near-white and ink palette.
- Near-black ink `{colors.ink-strong}` (`#1a1522`) with a violet undertone for text and for the main button.
- Blueprint furniture: bracketed captions, "fig." labels, double frames, tick marks, dotted grids, vertical margin labels.
- Sharp geometry: square tabs and frames, 4px radius on buttons.
- Product shown as data: squares in a grid and a YAML file, not screenshots.

## Colors

- **Canvas**: the capture is almost white. `{colors.canvas}` (`#ffffff`) covers the most area, `{colors.page-body}` (`#fbfdfd`) is the measured body background, and two faint lavender tints, `{colors.surface-tint}` (`#fbf9fe`) and `{colors.surface-lavender}` (`#f6f5fb`), tint sections and panels.
- **Ink**: `{colors.ink}` (`#1a15229e`, the ink colour at about 62% alpha) is the most-read text colour, used for descriptions and body copy. `{colors.ink-strong}` (`#1a1522`) is for headings, nav text and the main button; `{colors.ink-soft}` (`#1a1522c7`) and `{colors.ink-faint}` (`#1a152266`) are lighter steps used for captions and labels; `{colors.hairline}` (`#1a152229`) draws the thin rules and frames.
- **Primary** `{colors.primary}` (`#2a1eff`): the extractor's first CTA candidate, a tab button, used this indigo as its fill, and the same colour appears as the hover state of the "GET STARTED" buttons and as the active file in the YAML viewer. It is the brand's interactive accent. The resting "GET STARTED" button is `{colors.ink-strong}`, so primary is kept for the accent role and the resting button fill is named separately.
- **Accent yellow** `{colors.accent-yellow}` (`#eef17c`) fills the "BOOK A DEMO" button and turns indigo on hover.
- **Others**: `{colors.on-dark}` (`#eef7fa`) is pale text on dark panels; `{colors.card-border}` (`#0000001a`) is a card border.

The stylesheet also defines a set of "factory" status colours as custom properties (green, blue, pink with matching light backgrounds) for product UI; they do not appear in the captured area and are not tokenised here.

## Typography

Three families are loaded: `azeretSemiMono` (weights 400 and 500), `theFuture` (400, 500, 700) and `Matter` (400). The site defines `--font-mono` as a stack starting with "matterMono" and "Azeret Mono", and `--font-body` and `--font-sans` as "Matter". In practice the page is set almost entirely in the Azeret mono family, theFuture is used for small bold card titles (the case-study title measured 16px weight 600), and Matter for a few interface links. No source that was read describes these typefaces' licensing, so no substitutes are claimed.

| Role | Size / line-height | Weight | Tracking |
|---|---|---|---|
| `{typography.display}` (h1) | 54px / 56.7px | 400 | -2px |
| `{typography.display-mobile}` | 32px / 33.6px | 400 | -2px |
| `{typography.heading}` (h2) | 34px / 56.1px | 400 | -2px |
| `{typography.subheading}` | 16px / 21.6px | 600 | normal |
| `{typography.body}` | 13px / 21.45px | 400 | normal |
| `{typography.button-cta}` | 12px / 19.8px | 500 | 0.6px, uppercase |
| `{typography.button}` (tabs) | 11px / 13.75px | 500 | normal |
| `{typography.link}` | 14px / 21px | 400 | normal |

Small uppercase mono labels with positive tracking (measured around 0.45px to 1.98px at 9px to 12px) are used for captions, legends and eyebrows, while the large headings use negative tracking. Body copy is small (13px) for a marketing page, which gives the density of a technical manual.

## Layout

A centred container with a wide left and right margin carries the content, flanked by vertical margin labels. The hero is a left-aligned text block above a full-width framed figure. Below it a rule-bounded logo strip and then full-width sections each introduced by a bracketed eyebrow. The configuration section pairs a nine-tab row (Definition, Agents, Automations, Runners, Skills, Webhooks, Scorers, Benchmarks) with a two-pane viewer: a file tree (agents/, automations/, runners/, skills/, webhooks/, scorers/, benchmarks/, factory.yaml) and the YAML itself with line numbers. Tick marks at section borders reinforce a drafting-sheet grid. Spacing tokens measured on the page run from `{spacing.s1}` (1px) to `{spacing.s10}` (14px); cards use 32px padding and the footer 36px top and 28px bottom padding.

## Elevation & Depth

There is essentially no elevation: no measured box-shadows on the buttons, and depth is made of lines. Containers are outlined with `{colors.hairline}` or `{colors.card-border}`, figures use a double frame (an outer frame and an inner frame separated by a gap), and panels are distinguished by the faint lavender tints. The only layering effect is state colour: indigo squares and rows against grey ones.

## Shapes

Radii in the tokens: `{rounded.none}` (0px), `{rounded.xs}` (1px), `{rounded.sm}` (3px), `{rounded.md}` (4px), `{rounded.lg}` (6px), `{rounded.xl}` (12px), `{rounded.2xl}` (20px) and `{rounded.pill}` (9999px). The stylesheet's `--btn-radius` variable is 0rem, and tabs, file rows and frames are square; the CTA buttons ("GET STARTED", "BOOK A DEMO") measured a 4px radius. Card-like panels use 6px.

## Components

- **button-primary** (resting): `{colors.ink-strong}` fill and border, white 12px weight 500 uppercase label with 0.6px tracking, 34px high, 6px by 16px padding, 4px radius. Hover turns the fill to `{colors.primary}`. This is the "GET STARTED" button in the header and hero; the generated tokens had picked a tab as the CTA, so `_roleOverrides.ctaPrimary` points to this measured candidate.
- **button-demo**: `{colors.accent-yellow}` fill, `{colors.ink-strong}` text, 32px high, 4px radius; hover turns indigo with white text.
- **outlined button** ("DOWNLOAD WARP TERMINAL"): white fill, ink text, 1px border at 16% ink (hover: indigo text and border).
- **tab-selected**: `{colors.primary}` fill, white 11px label, 44px high, 18px horizontal padding, square corners; unselected tabs are plain on `{colors.canvas}` with hairline separators.
- **file-tree-selected**: `{colors.primary}` fill, white text, 36px high, 10px horizontal padding, square.
- **nav**: white header with `{colors.ink-strong}` 13px uppercase links.
- **link**: 14px Matter in `{colors.on-dark}` (measured on dark panels).
- **card**: `{colors.canvas}` surface, 6px radius, 32px padding and a `{colors.card-border}` outline.
- **footer**: `{colors.ink-strong}` text with 36px 0 28px padding.

## Design System Architecture

No public design-system documentation or brand guideline for the marketing site was found: the press page (https://www.warp.dev/press) offers logo and screenshot downloads but, per the page, no colour palette, typography specification or logo-usage rules, and https://www.warp.dev/brand returned 404. The product's open-source repository (https://github.com/warpdotdev/warp) is written in Rust and ships its own UI framework in the `warpui_core` and `warpui` crates, under an MIT licence, while the rest is AGPL v3; that framework is for the desktop application and was not read for tokens. The website's de-facto system is visible in the shipped CSS variables: a Tailwind v4 base (`--tw-*`, `--color-*`, `--radius-*`, `--tracking-*`), semantic variables such as `--btn-radius`, `--btn-font-family`, `--font-body`, `--font-mono`, `--space-section`, a "factory" status palette (`--color-factory-green`, `--color-factory-blue`, `--color-factory-pink` and `-bg` variants), and theme variables carried over from the terminal product (`--terminus-theme-purple-fg`, `--color-theme-accent`).

## Do's and Don'ts

**Do**
- Set headlines and body in the monospaced family, with -2px tracking on large sizes.
- Use `{colors.ink-strong}` for the main button and `{colors.primary}` for hover, active and selected states.
- Frame content with hairlines, bracketed captions and "fig." labels.
- Show product as data (a grid, a file) rather than a window screenshot.

**Don't**
- Round panels or tabs beyond a few pixels; keep square tabs and 4px buttons.
- Add shadows or gradients; depth is lines and tints.
- Use the yellow outside the demo call to action.
- Set labels in sentence case: buttons, tabs and eyebrows are uppercase.

## Responsive Behavior

On a 390px viewport the h1 measured 32px with 33.6px line-height and the same -2px tracking, a drop from 54px. Exact breakpoints were not measured. The capture's desktop header shows the full link row and two buttons; their mobile behaviour was not measured. Vertical margin labels and the double-framed figure are desktop furniture of the capture.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.ink-strong}` and `{colors.primary}`; use `{colors.ink}` for body text.
2. Set type in the mono family: `{typography.display}` for the page headline, `{typography.button-cta}` for uppercase buttons.
3. Build the main CTA as `button-primary`, and let hover swap the fill to `{colors.primary}`.
4. Draw panels with hairlines and 6px or square corners, with a lavender tint from `{colors.surface-tint}` or `{colors.surface-lavender}`.
5. Add bracketed captions and fig. labels as ornament, not decoration.
6. Measure any new component with the extractor before adding a token.
