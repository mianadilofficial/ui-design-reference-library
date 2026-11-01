---
version: alpha
name: SolidJS
category: "Frontend Frameworks"
description: "SolidJS (solidjs.com) pairs a white #ffffff canvas with a blue gradient hero built from the repo's own solid palette — light #4f88c6, medium #446b9e, default #2c4f7c, dark #07254A — set in Gordita (36px/600 hero headline, 16px/28px body), with 8px-radius 48px-tall blue buttons that hover to #414042 and 24px-radius light-grey #f3f5f7 panels."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#4f88c6"
  on-primary: "#ffffff"
  surface-muted: "#f3f5f7"
  surface-tint: "#fcfdff"
  ink-code: "#24292e"
  solid-default: "#2c4f7c"
  ink-gray: "#4b5563"
  solid-medium: "#446b9e"
  hairline: "#e5e7eb"
  solid-gray: "#414042"
  solid-dark: "#07254a"
  accent: "#0cdc73"
typography:
  display:
    fontFamily: Gordita, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 40px
  display-mobile:
    fontFamily: Gordita, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 32px
  subheading:
    fontFamily: Gordita, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: Gordita, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: Gordita, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  code:
    fontFamily: Menlo, Monaco, "Courier New", monospace
    fontSize: 15px
    fontWeight: 400
    lineHeight: 23px
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 28px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 12px 20px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.solid-gray}"
  button-secondary:
    backgroundColor: "{colors.solid-medium}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 12px 20px
    height: 48px
  nav:
    textColor: "{colors.on-primary}"
  announcement-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    padding: 20px
  code-editor:
    typography: "{typography.code}"
    height: 23px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.25) 0px 25px 50px -12px
---

# SolidJS

## Overview

SolidJS describes itself in the page title as a "Reactive Javascript Library", and the hero headline reads "Simple and performant reactivity for building user interfaces." The home page at solidjs.com is light and friendly: a thin orange-to-red announcement strip at the top ("[U+1F6A8] Solid 2.0 Release Candidate is here! Read the announcement →"), then a full-width hero panel with a blue gradient, a glossy 3D Solid logomark, the spaced-out "SOLIDJS" wordmark, an "OSAwards 2022 Breakthrough of the Year" laurel and soft isometric white cubes floating in the background. Three buttons sit under the headline: "Get Started", "Intro to Solid (100 seconds)" and "Advanced intro (5 minutes)".

Below the hero a horizontal nav (Documentation, Tutorial, Ecosystem, Examples, SolidStart, Playground plus social icons and theme/language toggles) leads into a white page: a store banner ("Visit the Solid Store for stickers, t-shirts and more!"), four pillars — Performant, Powerful, Pragmatic, Productive — each with a line icon, a stats strip (7kb Minified + Gzipped, 32k+ GitHub stars, 5+ years in development, TypeScript support, Top Rated in performance, Astro & Vite support), a live code playground next to "Familiar and modern", a large illustration panel of the blue logomark halves among grey cubes, a benchmark bar chart beside "Performance focused on both client and server", a feature-chip panel "Fully loaded with all features", and a footer with a newsletter field and a sponsor wall.

The tone is plain and reassuring: "Solid stands on the shoulders of giants, particularly React and Knockout."

## Colors

The site's own Tailwind config (github.com/solidjs/solid-site) names a `solid` palette, and the measured page uses it directly:

- **primary #4f88c6** — `solid.light`; the "Intro to Solid" button fill and the left stop of the hero gradient.
- **solid-medium #446b9e** — `solid.medium`; the "Get Started" and "Register" button fill and a link colour.
- **solid-default #2c4f7c** — `solid.default`; the prose heading colour in the config, measured as text.
- **solid-dark #07254a** — `solid.dark`; the right end of the hero gradient (measured as `rgba(7, 37, 74, 0.8)`).
- **solid-gray #414042** — `solid.gray`; the measured hover fill of the blue buttons.
- **surface-muted #f3f5f7** — `solid.lightgray`; the second-largest background (feature panels and footer area).
- **accent #0cdc73** — `solid.accent` in the config. Green cubes appear in the section icons in the capture; their exact colour was not measured.

Text is mostly pure **ink #000000**, with **ink-code #24292e** for code, **ink-gray #4b5563** for secondary copy and **on-primary #ffffff** on blue. **surface-tint #fcfdff** and **hairline #e5e7eb** are the faint card backgrounds and borders. The announcement strip uses an orange-to-red gradient (`rgb(249, 115, 22)` to `rgb(239, 68, 68)`), and the hero header carries `linear-gradient(to right, rgb(79, 136, 198), rgba(68, 107, 158, 0.85), rgba(7, 37, 74, 0.8))`. Syntax colours in the playground include #d73a49 and #032f62.

## Typography

One brand face does everything: **Gordita** (loaded at normal, 600 and 700). The footer states "Gordita font copyright and licensed non-commercially from typeatelier.com", and the Tailwind typography plugin sets `fontFamily: 'Gordita'` for prose.

- **display** — Gordita 36px / 600 / 40px for the hero headline (the page has no h1; the extractor used the largest hero text, an h2). Mobile: 26px / 400 / 32px.
- **subheading** — Gordita 20px / 600 / 28px for the pillar titles (Performant, Powerful…).
- **body** — Gordita 16px / 400 / 28px. The 28px line height gives paragraphs a loose, readable rhythm. Button labels use the same 16px size with a 24px line.
- **nav** — Gordita 20px / 400 / 28px, measured on the header and announcement link.
- **code** — Menlo 15px / 400 / 23px in the playground editor.

Weights are only 400 (body), 600 (headings) and 700 (rare). Other measured sizes are 24px and 30px (larger headings) and 14px and 12px (small labels). Gordita is a commercial geometric sans; without a licence, a geometric sans with similar round forms is the substitute, and the site's own fallback stack is `ui-sans-serif, system-ui, sans-serif`.

## Layout

The page is 1280px wide and 4787px tall. The hero band is 721px tall with content from x=96 to x=973, left-aligned. The main white band holds content from x=80 to x=1200 and is where the four pillars, the six-item stats strip (the extractor recorded up to six columns) and the two-column playground/text pairs live. Sections alternate media and text left/right: playground left, copy right; chart left, copy right.

Paddings cluster at 12px and 20px (button padding 12px 20px), then 4px, 8px, 40px, 16px, 48px, 80px and 64px. Gaps are sparse: 8px, 32px, 48px, 64px and 128px. Spacing tokens run 1px to 48px. Density is moderate: generous white space around short paragraphs, and compact clusters for stats and feature chips.

## Elevation & Depth

Shadows are light and functional. The most common is a small all-around shadow `rgba(0, 0, 0, 0.35) 0px 0px 4px 0px` (11 uses), then a 1px inset line `rgb(239, 242, 246) 1px 0px 0px 0px inset` used as dividers (9 uses). The playground card uses the Tailwind 2xl shadow `0px 25px 50px -12px` at 25% black, which lifts it clearly off the page. The repo defines further shadows — `top-2xl` (`0 -25px 50px -12px rgba(0, 0, 0, 0.25)`) and `even-md-light`. Most depth comes from the 3D-rendered illustrations: glossy blue logomark pieces and white isometric cubes with soft shadows.

## Shapes

The largest panels are rounded at **xl 24px** (20 measured uses): the hero card has 24px bottom corners, the illustration and feature panels 24px. Buttons use **lg 8px**; "Register" uses **md 6px**; small chips use **sm 4px** and **xs 3px**. Pills (**pill 9999px**) were measured 11 times. One element has a single rounded 56px corner (0px 0px 56px). The overall feeling is soft but not bubbly.

## Components

- **Primary button** — "Intro to Solid (100 seconds)": #4f88c6 fill, white Gordita 16px/400, 8px radius, 12px 20px padding, 48px tall, with a play icon. "Advanced intro (5 minutes)" uses #4f88c680 (50% alpha).
- **Secondary button** — "Get Started": #446b9e fill, white text, same size and radius. Hover on both turns the fill #414042.
- **Register button** — newsletter submit: #446b9e, 14px text, 6px radius, 12px 20px padding, 44px tall.
- **Announcement link** — white Gordita on the orange-red gradient strip, 20px padding.
- **Pillar** — line icon, 20px/600 title, three short lines of body; four across with thin vertical dividers.
- **Stat strip** — bold figure ("7kb", "32k+") over a small grey label, six across in a bordered row.
- **Code playground** — white card with tabs ("main.jsx"), Menlo 15px/23px code with line numbers, Result/Output panes and the 25px/50px shadow.
- **Feature chip** — bordered small rectangles ("Fragments", "Portals", "Suspense", "Streaming") in a wrapping grid on #f3f5f7.
- **Benchmark chart** — horizontal bars, Solid's bar highlighted in blue.

## Design System Architecture

The website source is public at https://github.com/solidjs/solid-site, built with Solid, Vite and Tailwind. Its `tailwind.config.cjs` (https://raw.githubusercontent.com/solidjs/solid-site/main/tailwind.config.cjs) is the de-facto token file: `primary: '#4483c1'` and a `solid` colour group (`default #2c4f7c`, `light #4f88c6`, `medium #446b9e`, `dark #07254A`, `gray #414042`, `lightgray #f3f5f7`, `accent #0cdc73`, `secondaccent #0dfc85`, plus dark-mode values `darkbg #222222`, `darkdefault #b8d7ff`), custom shadows, and a prose theme that sets Gordita and uses `solid.default` for headings. The config sets `darkMode: 'class'`; dark mode was not measured on the live page. The measured CSS also contains UnoCSS-style `--un-*` variables and VS Code editor variables (`--vscode-sash-size`) from the embedded playground. No separate published design system or brand guideline page was found; the footer states that the SolidJS name and logo are trademarks of the SolidJS project and Core Team.

## Do's and Don'ts

**Do**
- Use the `solid` blues in order of weight: #4f88c6 for the main action, #446b9e for secondary actions, #2c4f7c for headings, #07254a only in gradients.
- Set everything in Gordita: 600 for headings, 400 for body with a 28px line height.
- Keep the page white with #f3f5f7 panels rounded at 24px.
- Use 3D isometric cubes and the glossy logomark for illustration.
- Hover buttons to #414042.

**Don't**
- Don't introduce a second typeface for UI text; Menlo is for code only.
- Don't use the orange-red gradient beyond the announcement strip.
- Don't use sharp corners on large panels or pills on primary buttons; buttons are 8px.
- Don't treat the green #0cdc73 as a button colour; no measured control uses it.
- Don't use the SolidJS logo in a way that implies endorsement; it is a trademark of the project.

## Responsive Behavior

Measured at 390px: the hero headline becomes Gordita 26px / 400 / 32px (from 36px / 600 / 40px); body stays 16px / 400 / 28px. The "Intro to Solid" button keeps its 8px radius and 12px 20px padding but measured 72px tall, since its label wraps onto two lines. One header link is visible and no menu toggle was detected. The maximum card columns measured is two (six on desktop). Content bands sit between x=24 and x=387 or x=40 and x=350, and a #f3f5f7 band was measured at y=3553. Intermediate breakpoints were not measured.

## Iteration Guide

1. Start with canvas #ffffff, ink #000000 and Gordita at 16px/28px.
2. Hero: blue gradient from #4f88c6 through #446b9e to #07254a, 24px bottom corners, white 36px/600 headline.
3. Buttons: 8px radius, 12px 20px padding, 48px tall; #4f88c6 primary, #446b9e secondary, hover #414042.
4. Panels: #f3f5f7, 24px radius; cards white with the 25px/50px soft shadow.
5. Take new colours from the repo's `solid` palette and cite them; don't invent new blues.
6. Check headings at 20px/600 for card titles and 24–30px for section titles.
