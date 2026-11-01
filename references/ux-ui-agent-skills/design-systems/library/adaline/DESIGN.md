---
version: alpha
name: Adaline
category: "Tech & AI"
description: "AI agent platform homepage measured at adaline.ai: pale green-white #f8f9f5 canvas, forest-green ink #2b390a and #203b14 pill buttons, light Akkurat headlines at 53px with -2.12px tracking, Fragment Mono caps for controls, and a painterly landscape behind a product window."
colors:
  canvas: "#f8f9f5"
  page-body: "#fbfdf6"
  page-largest: "#eff2e8"
  ink: "#2b390a"
  primary: "#203b14"
  on-primary: "#fbfdf6"
  surface-dark: "#2a332a"
  ink-soft: "#2e4320"
  ink-soft-alpha: "#2e4320b3"
  ink-muted: "#6b7860"
  ink-faint: "#2e432066"
  ink-strong: "#0a1d08"
  hairline: "#2e43201a"
  accent-teal: "#2b6b5e"
  accent-brown: "#4a3212"
  accent-deep-blue: "#16364a"
  accent-green: "#4a6d47"
  terminal-dark: "#050e11"
  surface-night: "#1d2226"
  link-bg: "#ecf2df"
  nav-bg: "#ffffffd9"
  nav-text: "#0d2209d9"
  card-bg: "#e1e6df"
typography:
  display:
    fontFamily: >-
      akkurat, "akkurat Fallback", Inter, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 53px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-2.12px"
  display-mobile:
    fontFamily: >-
      akkurat, "akkurat Fallback", Inter, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 34px
    fontWeight: 400
    lineHeight: 46px
    letterSpacing: "-1.36px"
  heading:
    fontFamily: >-
      akkurat, "akkurat Fallback", Inter, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 34.7px
    letterSpacing: "-0.6px"
  subheading:
    fontFamily: >-
      fragmentMono, "fragmentMono Fallback", SFMono-Regular, "SF Mono", "JetBrains Mono", "Fira Code", "Cascadia Code", "Source Code Pro", ui-monospace, Menlo, Monaco, Consolas, "Liberation Mono",
      "Courier New", monospace
    fontSize: 11px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 1.1px
    textTransform: uppercase
  body:
    fontFamily: >-
      akkurat, "akkurat Fallback", Inter, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: >-
      fragmentMono, "fragmentMono Fallback", SFMono-Regular, "SF Mono", "JetBrains Mono", "Fira Code", "Cascadia Code", "Source Code Pro", ui-monospace, Menlo, Monaco, Consolas, "Liberation Mono",
      "Courier New", monospace
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 0.28px
  input:
    fontFamily: "\"Fragment Mono\", ui-monospace, monospace"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 0.22px
rounded:
  xs: 1.5px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 8px
  2xl: 10px
  3xl: 12px
  4xl: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 0px 24px
    height: 40px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 6px 12px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.ink-soft}"
    typography: "{typography.input}"
    height: 14px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
  footer:
    textColor: "{colors.page-body}"
---

## Overview
Adaline (title "Adaline | Ship Agents That Self-Improve") is a platform that helps AI teams improve their agents autonomously. Top navigation is Docs, Blog and a dark green "Get Started" pill, with "The Self-Improving Agent" as a further nav item; homepage tabs are Trace, Behaviors, Evals & Data and Improve. The footer groups Company (The Self-Improving Agent, Labs, Applied, Blog, Careers), Resources (Documentation, API reference, DPA, Privacy policy, Terms of service, Report vulnerability) and Connect (Github, Newsletter, LinkedIn, X, YouTube).

The capture is calm, earthy and technical. The page is a pale green-white (`{colors.canvas}`, #f8f9f5) with a forest-green ink. At the top left sits the small italic-slash mark and "Adaline" wordmark; at the right, "DOCS", "BLOG" and the pill "GET STARTED" in mono caps. The hero starts with a pill tag "THE SELF-IMPROVING AGENT" (pale green with an arrow), then the h1 "Never stop learning" in light-weight Akkurat, a grey-green paragraph, and two buttons: a dark green filled "GET STARTED" and an outlined "READ DOCS". Below are a "TRUSTED BY" row of grayscale customer logos, an h2 "Truly understand your agents" and a large painterly landscape illustration (cliffs, a river, soft lavender sky) with a product window floating over it showing traces and a behavior map. The mock product UI uses monospace log lines and soft coloured bubbles.

## Colors
The main background areas are `{colors.page-largest}` (#eff2e8, 4005 units), `{colors.canvas}` (#f8f9f5, 3082), `{colors.surface-dark}` (#2a332a, 1401), `{colors.card-bg}` (#e1e6df, 1201), `{colors.surface-night}` (#1d2226, 578) and `{colors.terminal-dark}` (#050e11, 492). `{colors.page-body}` (#fbfdf6) is the body background. Text colours are all green-tinted: `{colors.ink}` (#2b390a), `{colors.ink-soft}` (#2e4320) and its 70 percent form `{colors.ink-soft-alpha}` (#2e4320b3), `{colors.ink-muted}` (#6b7860), `{colors.ink-faint}` (#2e432066), and headline `{colors.ink-strong}` (#0a1d08). Mock-UI accent text colours measured are `{colors.accent-teal}` (#2b6b5e), `{colors.accent-brown}` (#4a3212), `{colors.accent-deep-blue}` (#16364a) and `{colors.accent-green}` (#4a6d47).

`{colors.primary}` (#203b14) is the dark forest green of the primary button, with `{colors.on-primary}` (#fbfdf6) text. The measured hover shows the fill moving from rgb(32, 59, 20) to a 90 percent-opacity green (oklab 0.32 -0.052 0.049 / 0.9). The tag link uses `{colors.link-bg}` (#ecf2df). Navigation is `{colors.nav-bg}` (#ffffffd9) with `{colors.nav-text}` (#0d2209d9), and `{colors.hairline}` (#2e43201a) draws rules. Other variables in the stylesheet include Tailwind oklch scales and Material-like names (`--color-outline` #e1e6df, `--color-on-error` #fcf0f3, `--color-aux-accent-4-container` #f9f2d9, `--color-aux-accent-10-container` #ffebff), which are listed but not declared.

## Typography
Three families: Akkurat (400, 400 italic, 700) for display, headings and body; Fragment Mono (400) for buttons, tags, nav and inputs; and Instrument Serif 400 and Newsreader 300 are also loaded, with Newsreader named 19 times in the stylesheet. The Akkurat stack falls back to Inter and system fonts.

- `{typography.display}`: Akkurat 400 at 53px / 64px, -2.12px tracking. Mobile: 34px / 46px, -1.36px.
- `{typography.heading}`: Akkurat 400 at 30px / 34.7px, -0.6px. Mobile h2 is 26px / 30px, -0.78px.
- `{typography.body}`: Akkurat 400 at 18px / 26px.
- `{typography.subheading}`: Fragment Mono 400 at 11px / 14px, 1.1px tracking, uppercase, for tag pills and kickers.
- `{typography.button}`: Fragment Mono 400 at 14px / 14px, 0.28px tracking.
- `{typography.input}`: Fragment Mono 400 at 11px / 14px, 0.22px tracking.

Headings are light (weight 400) with strong negative tracking, about -0.04em on the display size, which gives the page its quiet look. Font substitutes: Akkurat is commercial; the site's own fallback is Inter. Fragment Mono is open source.

## Layout
Desktop width is 1280px and the page is 12453px tall. Text blocks start at the left of a wide content column and hold to a narrow measure (h1 box 640px) beside empty right space; the product window is a full-width rounded frame with the illustration inside. Spacing steps are 1, 2, 3, 4, 6, 8, 10, 12, 14 and 16px. Sections are separated by generous whitespace rather than rules.

## Elevation & Depth
The role-level shadows are none; the stylesheet shows only Tailwind shadow variable chains. Depth comes from the product window overlapping the illustration, from translucent navigation (`{colors.nav-bg}`) and from tinted surfaces. Do not add drop shadows.

## Shapes
Radii measured on elements: pill 9999px (210 elements), 1.5px (48), 3px (36), 4px (26), 10px (19), 20px (5), 8px (5), 6px (5) and 12px (2). Buttons use 20px (`{rounded.4xl}`), the tag link uses the pill, cards use 10px (`{rounded.2xl}`), and tiny 1.5px to 4px radii are used inside the product mock.

## Components
**Primary button**: `{colors.primary}` fill, `{colors.page-body}` Fragment Mono text at 14px with caps, 20px radius, 24px horizontal padding, 40px tall in the stylesheet; the header instance is 32px tall.

**Outlined button** ("READ DOCS"): transparent with a thin green border, same radius, same mono text.

**Tag link**: pill in `{colors.link-bg}` with `{colors.primary}` 11px caps text and a small arrow, 6px 12px padding.

**Card**: `{colors.card-bg}`, 10px radius, `{colors.ink}` text; used inside the product window.

**Input**: Fragment Mono 11px, `{colors.ink-soft}` text.

## Design System Architecture
No brand guideline or design system is linked on the homepage that was opened (https://www.adaline.ai/). The shipped CSS shows a Tailwind v4 base (`--blur-lg: 16px`, `--ease-in: cubic-bezier(.4,0,1,1)`, oklch colour scales) together with a Material-style semantic layer: `--color-outline`, `--color-on-surface-low-subtle` (#243b1bb3), `--color-on-error`, and auxiliary `--color-aux-accent-N-container` colours. Fonts are exposed as `--font-akkurat`, `--font-fragment-mono` and `--font-mono`.

Imagery and voice: the hero text is conversational and confident ("Adaline helps AI teams improve their agents autonomously, so you can find fires before they happen, ship fixes in minutes, and feel confidence in their agents - for the first time."). The h2 "Truly understand your agents" is followed by one line describing the product mechanism ("Adaline ingests production traces and groups recurring agent patterns into behavior maps your team can inspect."). The customer strip sits under a small mono caps label, "TRUSTED BY", and shows the logos of Salesforce, DoorDash, Reforge and HubSpot in a single muted tone.

The product mock inside the illustration is a useful reference for data-dense UI in this palette. It has a header with the address "adaline.ai/behaviors", a bar chart row in sage green, two panes titled TRACES and BEHAVIORS each tagged LIVE, log lines in Fragment Mono with timestamps and costs at the right, an ERR badge in pink, bubbles of different sizes in pink, blue and grey on a pale field, and a dark terminal strip at the bottom with INFO output. Row colours stay within the tinted-green family; alerts are the only saturated colour.

The hover states measured are limited to the primary button (fill to 90 percent opacity). Link underline, focus and active states were not measured, so they are left undeclared.

## Do's and Don'ts
- Do keep text a green-tinted near-black; never pure black.
- Do pair a light Akkurat headline with Fragment Mono caps for controls and kickers.
- Do use a dark green filled button next to an outlined one.
- Do place a product window on soft painterly artwork.
- Don't add heavy borders or drop shadows.
- Don't use bold headlines; the display is weight 400.
- Don't use the Tailwind default colours for accents.

## Responsive Behavior
Measured at 390px: h1 34px / 46px (box 358px wide), h2 26px / 30px, and the paragraph in the mock UI is 11px. Navigation changes, product window scaling and button sizes at mobile were not measured.

## Iteration Guide
1. Canvas `{colors.canvas}`, ink `{colors.ink-strong}` for headlines and `{colors.ink-soft}` for body.
2. Display 53px weight 400 with -2.12px tracking; mono caps 11px kickers.
3. Dark green pill buttons, 20px radius, plus an outlined sibling.
4. Use a soft landscape illustration as the stage for the product window.
5. Tinted dark surfaces (`{colors.surface-dark}`, `{colors.terminal-dark}`) for terminal and footer areas.
6. Dark mode and other hover states are not measured.
