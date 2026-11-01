---
version: alpha
name: Bun
category: "Developer Tools & IDEs"
description: "Bun's site is a dense white technical page: Archivo 800 headlines (64px, -1.28px, with the word fast in #ff1f8f pink), system ui-sans-serif 17.28px/28.08px body in #525252, Martian Mono code and uppercase labels, square 0px-radius buttons with a 7px clipped corner, #0a0a0a dark buttons, #f6f6f6 code cards with 4px radius and #e2e2e2 hairlines."
colors:
  canvas: "#ffffff"
  ink: "#525252"
  primary: "#ff1f8f"
  on-primary: "#ffffff"
  surface-dark: "#0d0a0c"
  surface-subtle: "#f6f6f6"
  ink-strong: "#0a0a0a"
  ink-muted: "#707070"
  accent-strong: "#d60066"
  code-text: "#24211d"
  hairline: "#e2e2e2"
  terminal-bg: "#0c0c0c"
  footer-bg: "#f6f6f699"
  accent-bright: "#ff2e97"
  surface-off: "#fafafa"
  brand-cream: "#fbf0df"
  brand-pink: "#f472b6"
  brand-ink: "#14151a"
  brand-blush: "#febbd0"
typography:
  display:
    fontFamily: Archivo, ui-sans-serif, system-ui, sans-serif
    fontSize: 64px
    fontWeight: 800
    lineHeight: 58.88px
    letterSpacing: "-1.28px"
  display-mobile:
    fontFamily: Archivo, ui-sans-serif, system-ui, sans-serif
    fontSize: 40px
    fontWeight: 800
    lineHeight: 36.8px
    letterSpacing: "-0.8px"
  heading:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 16.8px
    fontWeight: 700
    lineHeight: 25.2px
    letterSpacing: "-0.168px"
  subheading:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 16.8px
    fontWeight: 600
    lineHeight: 25.2px
    letterSpacing: "-0.336px"
  body:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 17.28px
    fontWeight: 400
    lineHeight: 28.08px
  button:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 13.5px
    fontWeight: 600
    lineHeight: 20.25px
    letterSpacing: "-0.0675px"
  nav:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-lg:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.08px"
  eyebrow:
    fontFamily: "\"Martian Mono\", ui-monospace, SFMono-Regular, Menlo, Consolas, monospace"
    fontSize: 10px
    fontWeight: 500
    lineHeight: 10px
    letterSpacing: 0.44px
    textTransform: uppercase
  button-secondary:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 13px
    fontWeight: 600
    lineHeight: 19.5px
rounded:
  xs: 3px
  sm: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.14px
  s3: 1.28px
  s4: 2px
  s5: 3px
  s6: 4px
  s7: 4.12px
  s8: 6px
  s9: 8px
  s10: 10px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 14px
    height: 36px
    clipPath: polygon(0px 0px, calc(100% - 7px) 0px, 100% 7px, 100% 100%, 0px 100%)
  button-dark:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 14px
    height: 36px
  button-large:
    backgroundColor: "{colors.accent-bright}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.none}"
    padding: 0px 24px
    height: 52px
  search-field:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "1px solid #e2e2e2"
    padding: 0px 12px
    height: 36px
  terminal-tab:
    backgroundColor: "{colors.terminal-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 12px 10px
    height: 45px
  release-link:
    textColor: "{colors.canvas}"
    typography: "{typography.eyebrow}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.accent-strong}"
    rounded: "{rounded.sm}"
    padding: 12px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    borderColor: "{colors.hairline}"
---

# Bun

## Overview

Bun's home page (bun.sh, title "Bun — A fast all-in-one JavaScript runtime") is a long, dense, engineering-document style page on white. A 38px black strip at the very top ("Bun has joined Anthropic — and Anthropic is betting on Bun…") sits above a 65px white header with the bun logo, Docs, Guides, Reference, Blog, a wide bordered search field ("Search docs, APIs, guides… /") and a black "Install" button that turns pink on hover.

The hero is split. On the left: a small mono release link ("NEW · BUN V1.4.3 RELEASED →"), the headline "Bun is a fast JavaScript runtime & toolkit. All in one." in heavy Archivo 800 at 64px with "fast" in hot pink and "&" in grey, a paragraph, an install command block (`curl -fsSL https://bun.sh/install | bash` with OS tabs) and links. On the right: a benchmark panel with tabs (Express, Postgres, WebSockets) and horizontal bars comparing Bun with other tools, plus a logo row of companies using Bun.

The rest of the page reads like annotated documentation: "Four tools, designed together. Adopt one, or all of them." with four tool cards (Runtime, Package manager, Test runner, Bundler) each labelled "REPLACES NODE.JS / NPM / JEST / VITE"; "One binary for the whole workflow." with a numbered step list and a black terminal; "bun check: a TypeScript type checker built into Bun." with stats (3x, 2.2x, 100%, 89%); "Bun in production" with video cards; "The fastest install in every situation you actually hit." with a grid of benchmark charts; "Everything built in. Nothing weighing it down."; "The APIs you need, baked in." with a code explorer; "Full speed, full-stack"; and "Bun is a complete toolkit." — a long comparison table. The closing band is black with a huge 115.2px headline "Try it on the repo you have open right now." in light grey and pink, followed by a #fafafa footer.

The voice is blunt and benchmark-led; pink is used like a highlighter.

## Colors

- **Canvas #ffffff** — the page background (77% of the captured screen).
- **Ink #525252** — the most-read text (4,889 characters). **Ink-strong #0a0a0a** — headings, nav links and dark buttons (2,880). **Ink-muted #707070** — secondary text and the "&" in the headline (2,081).
- **Primary #ff1f8f** — the Bun accent, exposed in CSS as `--c-accent: 255 31 143`: "fast" in the headline, the "Deploy on Railway" button, the "Install" hover state, and the 2px focus outline.
- **Accent-strong #d60066** — `--c-accent-strong: 214 0 102`, pink text in mono labels and code (268 characters); the link hover color.
- **Accent-bright #ff2e97** — the large "Quickstart" button and the pink words in the closing headline.
- **On-primary #ffffff**.
- **Surface-subtle #f6f6f6** — code cards and tool cards; hovered nav links. **Footer-bg #f6f6f699** and **surface-off #fafafa** — the footer band.
- **Surface-dark #0d0a0c** — the closing band and black panels; **terminal-bg #0c0c0c** — terminal tab buttons.
- **Hairline #e2e2e2** — 64 of the measured borders: cards, table rows, the search field.
- **Code-text #24211d** — `--sk-text`, the syntax-highlighting base; keywords use `--sk-keyword: #c41a68`, strings `--sk-string: #4d7c1b`.

Bun's press kit (https://bun.sh/press-kit) lists the brand colors **Cream #FBF0DF** (brand-cream), **Pink #F472B6** (brand-pink), **Ink #14151A** (brand-ink) and **Blush #FEBBD0** (brand-blush). The website's UI uses the stronger #ff1f8f pink rather than the logo pink.

## Typography

Loaded fonts: **Archivo** (variable 100–900, `--font-display`) and **Martian Mono** (variable 100–800, `--font-mono`). Body text uses the system stack `ui-sans-serif, system-ui, -apple-system, …` (`--font-sans`), which carries most of the page (8,428 characters).

- **Display** — Archivo 64px/58.88px, 800, -1.28px — the hero. Section headings are larger: 76px at -1.52px (280 characters), and the closing headline is 115.2px weight 900. Line heights below 1.0 make headlines dense blocks.
- **Heading / subheading** — system sans 16.8px/25.2px, 700 and 600 (small card and step titles).
- **Body** — system sans 17.28px/28.08px, 400.
- **Nav** — 16px/24px, 400.
- **Button** — 13.5px/20.25px, 600, -0.0675px; **button-secondary** 13px/19.5px, 600; **button-lg** 16px/24px, 600.
- **Eyebrow** — Martian Mono 10px/10px, 500, uppercase, +0.44px ("NEW", "REPLACES"); 11px Martian Mono labels use +1.32px to +1.54px tracking.

Martian Mono carries 2,616 characters — all code, terminals, labels and table data. The type system is a deliberate contrast: ultra-heavy condensed-feeling Archivo headlines, neutral system text, and a wide monospace for everything technical.

## Layout

Measured at 1280px (1,265px content). The CSS sets `--container: 76rem` (1,216px) and `--header-h: 64px`; content runs from x=65 to x=1201. The hero is 2 columns (headline column 515px wide, benchmarks on the right); tool cards and chart grids are 4 columns; most other sections are 2 columns (text plus code or terminal).

Gaps: 12px (151 times), 10px, 6px, 16px, 8px, 4px, 24px, 64px, 48px. Paddings: 1px (114 — bordered cells), 14px, 24px, 8px, 16px, 12px, 20px, 10px, 40px, 112px (section padding). `--vertical-padding: 4rem`. The page is 11,520px tall and very dense: small type, many tables and charts, little decorative whitespace.

## Elevation & Depth

Flat by design: the CSS sets `--shadow-xs`, `--shadow-sm`, `--shadow-md` and `--shadow-lg` all to `none`. Measured shadows are only 1px rings — `rgba(0, 0, 0, 0.1) 0px 0px 0px 1px` (4 elements) and `rgba(255, 255, 255, 0.06) 0px 0px 0px 1px` on the dark terminal. Depth comes from #f6f6f6 fills, #e2e2e2 hairlines, black terminals and the black closing band. Hover states lighten fills (tool cards to `rgba(246, 246, 246, 0.7)`) or invert them (terminal tabs go #0a0a0a with white text).

## Shapes

Mostly square with small radii: 3px (`--radius`, 49 elements), 4px (`--radius-lg`, 19 — cards and terminals), 2px (`--radius-sm`), 6px (`--radius-xl`), and 9999px pills (66 — badges and dots). Buttons are 0px radius, and the primary pink button has a clipped top-right corner: `clip-path: polygon(0px 0px, calc(100% - 7px) 0px, 100% 7px, 100% 100%, 0px 100%)`; the CSS also defines `--cut: 10px`. The clipped corner is the brand's signature shape detail.

## Components

- **Primary button** — #ff1f8f, white 13.5px/600, 0px radius with a 7px clipped corner, 36px tall, 0px 14px padding ("Deploy on Railway").
- **Dark button** — #0a0a0a, same metrics ("Install", "Bun's WebSocket server"); "Install" turns #ff1f8f on hover.
- **Large button** — #ff2e97, 16px/600, 52px tall, 0px 24px ("Quickstart"); 44px #0a0a0a "Read the release notes" at 15px.
- **Search field** — white with `1px solid #e2e2e2`, #707070 placeholder, 36px tall, 416px wide, a "/" shortcut hint; border darkens to #181818 on hover.
- **Terminal tab** — #0c0c0c with white 13px/600 text, 45px tall ("bun install").
- **Tool card** — #f6f6f6, 4px radius, 12px padding, Martian Mono label in #d60066, title, description, command chip.
- **Terminal** — #111114, 4px radius, `1px solid #000000cc`, Martian Mono 11.5px/17.25px.
- **Code card** — #f6f6f6, 4px radius, `1px solid #e2e2e2`, filename tab, syntax colors from `--sk-*`.
- **Benchmark bars** — black/pink horizontal bars with mono labels.
- **Footer** — #f6f6f699 with a #e2e2e2 top border, logo and tagline, link columns.

## Design System Architecture

Bun's press kit (https://bun.sh/press-kit) provides a downloadable zip (`/presskit.zip`), the logo, wordmark and icon (for small sizes), four named brand colors (Cream #FBF0DF, Pink #F472B6, Ink #14151A, Blush #FEBBD0), and the rule not to stretch, recolor or add accessories to the logo without asking. https://bun.sh/brand returned HTTP 404. No component library is published. The site CSS shows a small hand-written token layer on top of Tailwind: RGB-triplet accent tokens (`--c-accent`, `--c-accent-strong`, `--c-accent-soft: 255 235 245`) used through `rgb(var(--c-accent))`, a pink scale (`--pink-50` … `--pink-950`), a gray scale (`--gray-50 #f9fafb` … `--gray-950 #0d0e11`), radius tokens (`--radius-sm 2px`, `--radius 3px`, `--radius-lg 4px`, `--radius-xl 6px`), `--cut: 10px`, shadow tokens set to none, font tokens (`--font-display`, `--font-sans`, `--font-mono`) and syntax tokens (`--sk-*`). Breakpoints are Tailwind defaults (640, 768, 1024, 1280, 1536px) plus 580px.

## Do's and Don'ts

**Do**
- Set the hero headline in Archivo 800 with tight line height (below 1.0) and negative tracking; highlight one word in #ff1f8f.
- Use the system sans for prose and Martian Mono for code, labels and data.
- Keep buttons square, with the clipped 7px corner on the pink primary.
- Prove claims with benchmark charts and tables.
- Use #f6f6f6 cards with #e2e2e2 hairlines and 3–4px radii.
- Follow the press kit: don't stretch, recolor or decorate the logo.

**Don't**
- Don't add drop shadows; the shadow tokens are all `none`.
- Don't round buttons.
- Don't use pink for body text.
- Don't swap the logo's cream/pink/ink palette for the UI pink.
- Don't loosen the density with large decorative imagery.

## Responsive Behavior

Measured at a 375px viewport: the h1 drops from 64px/58.88px to 40px/36.8px with -0.8px tracking; the h2 stays 16.8px/25.2px. Body drops from 17.28px/28.08px to 16.32px/26.52px. The header stays 65px with 1 visible header link and a visible "Open menu" toggle, as recorded by the mobile pass; the top announcement strip grows from 38px to 57px. Content runs from x=20 to x=385 in 1–2 columns, and the mobile page is about 14,420px tall versus 11,520px on desktop. Chart and table behaviour on mobile were not measured.

## Iteration Guide

1. White canvas, #525252 system-sans body at 17.28px/28.08px, #0a0a0a headings in Archivo 800.
2. Hero: 64px headline with one #ff1f8f word, an install command block and a benchmark panel.
3. Buttons: square, 36px, #0a0a0a or #ff1f8f with the 7px clipped corner.
4. Build sections from #f6f6f6 cards, Martian Mono labels and black terminals.
5. Use 76px section headings at -1.52px tracking (the measured size; their family was not separately recorded).
6. Close with a black band and a 115.2px headline in grey and pink.
7. Re-run the gate after edits.
