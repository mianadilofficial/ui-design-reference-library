---
version: alpha
name: OpenCode
category: "AI & LLM Platforms"
description: "OpenCode (opencode.ai) is a monospace-only, terminal-flavored product site - warm off-white canvas (#fdfcfc), near-black ink (#201d1d) and mid-gray body text (#646262), a Berkeley Mono / IBM Plex Mono stack at 16px, 38px bold headline, 4px-radius solid dark buttons, 6px inputs and tabs, hairline borders, and no shadows or gradients."

colors:
  canvas: "#fdfcfc"
  ink: "#646262"
  primary: "#201d1d"
  on-primary: "#fdfcfc"
  surface-weak: "#f8f7f7"
  ink-weak: "#9a9898"
  icon: "#8d8b8b"
  hairline: "#0f00001f"
  primary-hover: "#302c2c"

typography:
  display:
    fontFamily: "\"Berkeley Mono\", \"IBM Plex Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 38px
    fontWeight: 700
    lineHeight: 57px
  display-mobile:
    fontFamily: "\"Berkeley Mono\", \"IBM Plex Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 33px
  subheading:
    fontFamily: "\"Berkeley Mono\", \"IBM Plex Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: "\"Berkeley Mono\", \"IBM Plex Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: "\"Berkeley Mono\", \"IBM Plex Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px

rounded:
  xs: 4px
  sm: 6px

spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 16px 8px 10px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-docs:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 12px 8px 20px
    height: 40px
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 12px 8px 20px
    height: 42px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.surface-weak}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 20px
    height: 66px
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
---

## Overview

OpenCode's site (https://opencode.ai, captured in light mode at 1280px) presents an open-source AI coding agent as if it were a terminal session. Everything is set in a monospace font, the layout is a single centered column inside thin vertical hairlines, and features are written as a `[*]` bullet list. The palette is a warm off-white, one near-black, and two or three grays; there is no accent hue on the page. The only imagery is a dark screenshot/video of the agent's own TUI and three tiny halftone-style "Fig" illustrations.

The page flows: header (pixel-style OpenCode wordmark at left; GitHub, Docs, Data, Zen, Go, Enterprise links; a dark "Download" button) -> headline "The open source AI coding agent" -> a sub-line about free models and any provider -> an install box with tabs (curl, npm, bun, brew, paru, yay) showing `curl -fsSL https://opencode.ai/v2/install | bash` -> a full-bleed dark product video -> "What is OpenCode?" with seven `[*]` features and a "Read docs" button -> a stats paragraph with three "Fig" figures (208K GitHub Stars, 950 Contributors, 16M Monthly Devs) -> privacy statement -> FAQ -> a Zen product call-out with an outlined button -> waitlist email form -> footer.

**Key Characteristics:**
- One typeface family in monospace for everything: headline, body, nav, buttons, even FAQ and form fields.
- Warm neutrals: canvas `{colors.canvas}` (#fdfcfc), strong ink/primary `{colors.primary}` (#201d1d), body copy `{colors.ink}` (#646262), weak text `{colors.ink-weak}` (#9a9898).
- Flat: no box-shadows measured, no gradients; structure is drawn with 1px `{colors.hairline}` rules.
- Small, square-ish corners: `{rounded.xs}` 4px on buttons, `{rounded.sm}` 6px on inputs and the install panel.
- Generous line-height on body copy (32px on 16px text) that gives the "terminal log" airiness.
- Product-as-hero: the most visually dense element is a real screenshot of the TUI on a near-black background.
- Playful technical microcopy: `[*]` bullets, "Fig 1." captions, "Be the first to know..." waitlist.

## Colors

> Source: measured on https://opencode.ai; values cross-checked with the site's own CSS (`/_build/assets/index-C1kvjbTM.css`, `[data-page="opencode"]` custom properties).

### Brand & Accent
- **Primary** (`{colors.primary}` - `#201d1d`): `--color-background-strong` / `--color-text-strong` in the page's CSS (`hsl(0, 5%, 12%)`). Fill of the Download and Read docs buttons and the heading color. The page has no chromatic brand color.
- **Primary Hover** (`{colors.primary-hover}` - `#302c2c`): `hsl(0, 5%, 18%)`, the measured hover fill of the Download button.
- **On Primary** (`{colors.on-primary}` - `#fdfcfc`): button label.

### Surface
- **Canvas** (`{colors.canvas}` - `#fdfcfc`): `--color-background` `hsl(0, 20%, 99%)`; the page and header.
- **Surface Weak** (`{colors.surface-weak}` - `#f8f7f7`): `--color-background-weak` `hsl(0, 8%, 97%)`; the waitlist input and the install-box panel body.
- **Hairline** (`{colors.hairline}` - `#0f00001f`): `--color-border-weak` `hsla(0, 100%, 3%, 0.12)`; all rules, the outline button border and the input border.

### Text
- **Ink** (`{colors.ink}` - `#646262`): `--color-text` `hsl(0, 1%, 39%)`; body paragraphs, nav container and footer text (the most-read color on the page).
- **Ink Weak** (`{colors.ink-weak}` - `#9a9898`): `--color-text-weak` `hsl(0, 1%, 60%)`; footer links and inactive tabs.
- **Icon** (`{colors.icon}` - `#8d8b8b`): `--color-icon` `hsl(0, 1%, 55%)`; copy icon and decorative marks.

### Dark scheme
The same stylesheet redefines these variables under `prefers-color-scheme: dark` (for example `--color-background: hsl(0, 9%, 7%)`, `--color-text-strong: hsl(0, 15%, 94%)`), so the site follows the OS theme. Only the light values were captured and are tokens here.

### Selection color
`::selection` uses `--color-background-interactive`, `hsl(62, 84%, 88%)` in light mode, a pale yellow-green; it is not otherwise used on the page.

### Semantic
`:root` also declares a separate `--color-*` set (accent `#007aff`, danger `#ff3b30`, success `#30d158`, warning `#ff9f0a`, and a light/dark neutral ramp). Their origin was not determined and they were not visible in the captured page, so they are not tokens here.

## Typography

### Font Family
The stack on `:root` is `--font-mono: "Berkeley Mono", "IBM Plex Mono", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace`, and `--font-sans` is set to the same variable, so every text role resolves to monospace. Only IBM Plex Mono (weights 400, 500, 700) was reported as a loaded web font on the page; Berkeley Mono is first in the stack and applies where it is installed on the viewer's machine. Berkeley Mono is a commercial typeface from U.S. Graphics Company (https://usgraphics.com/products/berkeley-mono lists licensing tiers; the page itself returned an access error in this session, so only the search description supports that).

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display}` | 38px | 700 | 57px | Hero h1 |
| `{typography.display-mobile}` | 22px | 700 | 33px | h1 at 390px |
| `{typography.subheading}` | 16px | 700 | 24px | "What is OpenCode?" and section titles |
| `{typography.body}` | 16px | 400 | 32px | Paragraphs, nav, links |
| `{typography.button}` | 16px | 500 | 24px | Buttons |

A 14px size is also measured (64 characters, small text) and 13px/14px appear in the site CSS; they are not separate tokens here.

### Principles
- Three weights: 400 (body), 500 (buttons), 700 (headings and bold feature names).
- No letter-spacing adjustments were measured; monospace spacing does the rhythm.
- Bold is used inline for emphasis (feature names like "LSP enabled", the figures "208,000", "950", "13,000", "16M").

### Font substitutes
If neither Berkeley Mono nor IBM Plex Mono is available, the stack falls through to platform monospace fonts (SFMono, Menlo, Consolas ...). IBM Plex Mono is open-source and is the practical match for the page as loaded.

## Layout

- **Frame.** One centered column; the capture shows full-height hairlines at the left and right edges of the column. The CSS declares page padding of 5rem on desktop (`--padding: 5rem`), dropping to 1.5rem at narrow widths (`max-width: 60rem` breakpoint).
- **Header.** 40px tall bar content with the wordmark, links and a Download button; separated from the page by a hairline.
- **Hero.** Left-aligned headline, sub-line, then a full-width install box.
- **Install box.** A tab row (curl, npm, bun, brew, paru, yay) over a command line, in a bordered box; the active tab has a 2px underline in the strong color.
- **Product video.** A full-bleed, near-black band of the TUI.
- **Content sections.** Section titles, `[*]`-prefixed paragraphs, and a two-column definition feel (bold term, then description).
- **Figures.** Three equal columns with small illustrations and captions "Fig 1." to "Fig 3.".
- **Spacing.** Measured gaps: 12px, 16px, 24px, 10px, 64px, 32px, 8px, 40px; paddings: 80px, 16px, 20px, 64px, 8px, 32px. They are recorded as the `{spacing.s1}` to `{spacing.s10}` ladder (4px to 64px).

## Elevation & Depth

There is none. The measured box-shadow list is empty and the page uses no gradients. Depth is expressed with:

- 1px `{colors.hairline}` borders on inputs, the install box and the outline button.
- A background shift from `{colors.canvas}` to `{colors.surface-weak}` inside panels.
- A full-bleed black band for the product video, the single high-contrast moment.
- A 2px underline on the active tab.

## Shapes

- `{rounded.xs}` (4px): buttons (Download, Read docs, Learn about Zen).
- `{rounded.sm}` (6px): the waitlist input and the install box's panel (square on top where it meets the tabs, 6px at the bottom corners per the CSS).
- No pills, no circles in the UI chrome. The wordmark and the figure illustrations are pixel-grid drawings.

## Components

### Download button
`{components.button-primary}`: `{colors.primary}` fill, `{colors.canvas}` label, 16px/500, `{rounded.xs}`, padding 8px 16px 8px 10px (an icon sits at the left), 40px tall. Hover swaps the fill to `{colors.primary-hover}` (`{components.button-primary-hover}`); no other change measured.

### Read docs button
`{components.button-docs}`: same fill, padding 8px 12px 8px 20px, trailing arrow icon, 40px tall (the measured element was 40px).

### Outline button
`{components.button-outline}`: `{colors.canvas}` fill, `{colors.primary}` text, 1px `{colors.hairline}` border, 42px tall, used for "Learn about Zen".

### Nav links
`{components.nav-link}`: `{colors.primary}` 16px regular, underline on hover (measured on GitHub, Docs and others).

### Install tabs and command box
Tabs are transparent buttons with `{colors.ink-weak}` text and 16px vertical padding; selected is the strong color with a 2px bottom border. The panel body is `{colors.surface-weak}` with a hairline border and 16px padding; the command is monospace with a copy icon at right.

### Feature list
`[*]` marker in a muted color, a bold term in `{colors.primary}`, then a description in `{colors.ink}`.

### Waitlist form
`{components.text-input}`: `{colors.surface-weak}` fill, 1px hairline border, `{rounded.sm}`, 20px padding, 66px tall and wide as the column (918px in the capture), with a "Subscribe" button.

### FAQ
Eight FAQ items with plus/minus icons (data-slot `faq-item`, `faq-icon-plus`, `faq-icon-minus` in the markup): questions such as "What is OpenCode?" and "How much does OpenCode cost?"

### Footer
`{components.footer}`: GitHub with a star count ("208K" in brackets), Docs, Changelog, Discord, X; "© 2026 Anomaly", Brand, Privacy, Terms and a language picker. Link text in `{colors.ink-weak}`.

## Design System Architecture

OpenCode publishes a brand page and a theming system, not a component library.

- **Brand guidelines.** https://opencode.ai/brand ("Brand guidelines - Resources and assets to help you work with the OpenCode brand") offers a "Download all assets" package and PNG/SVG downloads for eight logo variants. The page text lists no color or type specifications.
- **Site CSS.** The landing page defines its tokens as scoped custom properties on `[data-page="opencode"]` with semantic names (`--color-background`, `--color-background-weak`, `--color-background-strong`, `--color-text`, `--color-text-weak`, `--color-text-weaker`, `--color-text-strong`, `--color-text-inverted`, `--color-border`, `--color-border-weak`, `--color-icon`) in HSL, with a dark variant. Components are addressed by `data-slot` and `data-component` attributes (for example `data-slot="tab"`, `data-slot="faq-item"`, `[data-component="button"]`). Fonts are `--font-mono` and `--font-sans` (aliased to mono).
- **App theming.** The product's TUI themes are documented at https://opencode.ai/docs/themes: built-in themes (system, tokyonight, everforest, ayu, catppuccin, gruvbox, kanagawa, nord, matrix, one-dark and others), a JSON format, and a theme hierarchy that loads from user config and project `.opencode/themes` directories. By default OpenCode uses "our own opencode theme", per that page.
- **Source.** https://github.com/anomalyco/opencode (the GitHub link on the site's own homepage; the repo page was reachable but its contents were not read in detail here).
- **Build.** The site is a bundled web app (assets under `/_build/assets/`).

## Do's and Don'ts

### Do
- Do set everything in monospace at 16px with 32px line-height for body copy.
- Do keep the palette to `{colors.canvas}`, `{colors.primary}`, `{colors.ink}` and `{colors.ink-weak}`.
- Do draw structure with 1px `{colors.hairline}` borders.
- Do use `{rounded.xs}` for buttons and `{rounded.sm}` for inputs and panels.
- Do write features as `[*]` lines and label figures "Fig N.".
- Do let the product screenshot be the only dark, dense element.

### Don't
- Don't add shadows or gradients; none were measured.
- Don't introduce a color accent; the site has none in this view.
- Don't use sans-serif or italic text; the stack is monospace.
- Don't round buttons into pills.
- Don't use weights beyond 400, 500 and 700.

## Responsive Behavior

- **Headline.** 38px (`{typography.display}`) at 1280px, 22px (`{typography.display-mobile}`) at 390px.
- **Padding.** The CSS switches `--padding` from 5rem to 1.5rem and `--vertical-padding` from 4rem to 3rem at `max-width: 60rem`.
- **Line breaks.** `data-slot="br"` elements are hidden below the 60rem breakpoint, so manual line breaks in copy collapse.
- **Other breakpoints** in the CSS include 65rem, 55rem, 50rem, 48rem, 40rem, 35rem, 30rem and 550px, used for sections such as the figures and FAQ.
- **Theme.** Follows `prefers-color-scheme`.
- **Touch targets.** Buttons are 40-42px tall.

## Iteration Guide

1. Canvas `{colors.canvas}`; body in `{typography.body}` with `{colors.ink}`; headings in `{colors.primary}` bold.
2. One solid dark button (`{components.button-primary}`), optionally an outline twin (`{components.button-outline}`).
3. Section titles at `{typography.subheading}`; page title `{typography.display}`.
4. Panels: `{colors.surface-weak}` with 1px `{colors.hairline}` and `{rounded.sm}`.
5. Show real code or a real product capture instead of illustration.
6. Voice: direct technical statements with concrete numbers (208,000 stars, 950 contributors, 75+ providers), bracketed bullets, and short imperative CTAs ("Download", "Read docs", "Subscribe").
