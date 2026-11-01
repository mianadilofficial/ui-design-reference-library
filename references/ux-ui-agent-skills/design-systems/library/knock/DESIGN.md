---
version: alpha
name: Knock
category: "Developer Tools & IDEs"
description: "Knock's marketing site sits on a warm off-white #fbfaf7 canvas with #1c2024 ink, PP Neue Montreal 500 headlines (60px/64px, -1.2px), Inter body text, a coral #ff6c52 'Get started' button (4px radius, hover #e33a1e), white 12px-radius cards with a 1px #e6e4de inset ring, and Telegraph design-system variables (--tgph-*)."
colors:
  canvas: "#fbfaf7"
  page-body: "#ffffff"
  ink: "#1c2024"
  primary: "#ff6c52"
  on-primary: "#fafafa"
  primary-hover: "#e33a1e"
  accent-9: "#ff573a"
  nav-hover: "#f45b58"
  surface-peach: "#f8efe7"
  ink-muted: "#60646c"
  ink-ui: "#1d2023"
  ink-subtle: "#6e717a"
  ink-gray-11: "#60646a"
  ink-black: "#000000"
  nav-bg: "#ffffffcc"
  nav-text: "#222222"
  border: "#cdced6"
  card-ring: "#e6e4de"
  link-blue: "#3569e0"
typography:
  display:
    fontFamily: 'ppNeueMontreal, "ppNeueMontreal Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 60px
    fontWeight: 500
    lineHeight: 64px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: 'ppNeueMontreal, "ppNeueMontreal Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 36px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: "-0.72px"
  heading:
    fontFamily: 'ppNeueMontreal, "ppNeueMontreal Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 40px
    fontWeight: 500
    lineHeight: 46px
    letterSpacing: "-0.8px"
  subheading:
    fontFamily: 'ppNeueMontreal, "ppNeueMontreal Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 28px
    fontWeight: 500
    lineHeight: 34px
  body:
    fontFamily: 'Inter, "Inter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: 'Inter, "Inter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  button-secondary:
    fontFamily: 'Inter, "Inter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  eyebrow:
    fontFamily: 'Inter, "Inter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 12px
    fontWeight: 400
    letterSpacing: 0.24px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 8px
  2xl: 10px
  3xl: 12px
  4xl: 16px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-login:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-black}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 38px
    border: "1px solid #cdced6"
  button-login-hover:
    textColor: "{colors.primary-hover}"
  button-outline:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 8px 12px
    height: 38px
    border: "1px solid #cdced6"
  button-outline-hover:
    backgroundColor: "{colors.canvas}"
    borderColor: "{colors.ink-muted}"
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.lg}"
    padding: 0px 14px
    height: 36px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.nav-text}"
  nav-link-hover:
    textColor: "{colors.nav-hover}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
    padding: 16px 20px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgb(230, 228, 222) 0px 0px 0px 1px inset
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    padding: 96px 0px 0px
---

# Knock

## Overview

Knock (knock.app, measured 2026-10 at 1280px; title "Knock | Customer engagement infrastructure", en-US) sells messaging and notification infrastructure, and the site has a calm, editorial product feel: a warm off-white page, near-black type in PP Neue Montreal, small coral buttons and a lot of product UI drawn in fine grey lines.

The translucent white header holds the knock wordmark, Product, Solutions, Developers, Resources, Pricing, an outlined "Log in" and a coral "Sign up". The hero is left-aligned: "Agentic customer engagement to grow faster." at 60px, a short paragraph ("Ship lifecycle and transactional messaging from your favorite agent. Start with a prompt, scale to millions of customers."), a coral "Get started" and an outlined "Book a demo", and a row of agent icons ("Start with your agent"). To the right, a dense coral-and-pink particle cluster with small monospaced labels illustrates messages fanning out. A customer logo grid (Vercel, Zapier, Webflow, Granola, Medium, Clay, Profound, Amplitude, Headway, Unify) follows.

The capture continues with "Orchestrate beautiful, cross-channel messaging" (a peach-backed workflow builder screenshot over four product cards: Workflows, Broadcasts, In-app guides, Templates), "Launch messaging flows with a prompt" (an agent picker and a prompt box), "Unlock customer engagement that runs itself" (Build, Run, Improve with an isometric line drawing), "Unify product, CDP, and warehouse data", "Built for visibility and control", "Messaging infrastructure you can trust" (99.99% uptime, compliance badges), "Trusted in production at" with a Vercel quote, and a footer that opens with "Agentic customer engagement for growth". A cookie notice over the hero and a round coral widget at the right edge are overlays, not part of the brand system.

## Colors

- **Canvas `#fbfaf7`**: the warm off-white page and footer (the largest measured area). White `#ffffff` is used for cards and panels.
- **Ink `#1c2024`**: headings and most text (17,174 weighted characters); also the dark "Build in Knock" button fill.
- **Muted `#60646c`**: paragraphs (2,663); `#60646a` (`--tgph-gray-11`), `#6e717a` for secondary UI, `#1d2023` inside product mocks.
- **Primary `#ff6c52`**: "Get started" and "Sign up" fills with an off-white `#fafafa` label; hover `#e33a1e` (also the "Log in" hover text). Header links turn `#f45b58` on hover.
- **Telegraph accent**: the design system's accent scale peaks at `--tgph-accent-9: #ff573a`, with tints such as `--tgph-accent-2: #fff5f2` and `--tgph-accent-6: #ffb7a6`.
- **Peach surface `#f8efe7`**: the backdrop behind the workflow-builder screenshot.
- **Lines**: `#cdced6` on outlined buttons, `#efede8` dividers, and `rgb(230, 228, 222)` (`#e6e4de`) as the 1px inset ring of cards.
- **Header glass `#ffffffcc`** with `#222222` link text.
- **Small accents**: `#3569e0` (blue links in product mocks), `#6148d0`, `#00834f`, `#cf2038` as status and tag colors.

## Typography

- **PP Neue Montreal** (`ppNeueMontreal`, weight 500 only) for display and section headings: h1 60px / 64px at -1.2px; h2 40px / 46px at -0.8px; h3 28px / 34px ("Build", "Run", "Improve").
- **Inter** (13,805 weighted characters, variable 100 to 900) for everything else: 16px / 24px body (the most-read size, 15,794), 18px lead text, 14px / 20px buttons (600 on coral buttons, 500 on outlined), 12px labels tracked +0.24px or +0.72px.
- **Monospace**: `ui-monospace` (5,858) and **Inconsolata** (1,085) for code, workflow step names and the small labels around the hero illustration.

Headings are tracked -2% and never bolder than 500; bold weights (600, 700) are limited to button labels and small UI. PP Neue Montreal is self-hosted as a web font; the declared fallback is the system UI stack.

## Layout

The desktop page is 1280px wide and 9,738px tall, with content between x 96 and 1198. The hero splits into a text column (h1 520px wide) and an illustration; later sections centre a heading and paragraph above a wide product screenshot or a row of four cards. Logo grids run five or six columns. Section rhythm is set by 96px and 128px vertical paddings; inside components the spacing is tight (gaps of 12px, 6px and 8px; paddings of 4px, 12px, 16px and 8px). Telegraph exposes the spacing scale as `--tgph-spacing-*` (for example `--tgph-spacing-3: .75rem`, `--tgph-spacing-8: 2rem`).

## Elevation & Depth

Depth is mostly line work. Cards use a 1px inset ring, `rgb(230, 228, 222) 0px 0px 0px 1px inset` (17 elements). Product panels use layered, soft shadows: `rgba(0, 0, 0, 0.06) 0px 0px 0px 1px, rgba(0, 0, 0, 0.04) 0px 1px 2px 0px, rgba(0, 0, 0, 0.05) 0px 4px 8px -2px` (8 elements), and floating mock windows add a warm drop, `rgba(70, 58, 40, 0.22) 0px 16px 32px -16px`. Hairline rings at `rgba(28, 32, 36, 0.06)` and `0.08` outline smaller controls. The header is a translucent white bar (`#ffffffcc`).

## Shapes

The radii follow Telegraph's rounded scale (`--tgph-rounded-1: .125rem` through `--tgph-rounded-6: 1rem`, plus full):

- **9999px** (53 elements): pills, tags and avatars.
- **2px** (47) and **4px** (40): small controls; the coral buttons are 4px.
- **6px** and **8px** (20 each): outlined and dark buttons, inputs.
- **12px** (16): cards; tabbed panels round only the top corners (`12px 12px 0px 0px`).
- **16px** (5): large screenshots.

## Components

- **Primary button**: `#ff6c52`, `#fafafa` Inter 14px / 20px weight 600, padding 8px 12px, 36px tall, 4px radius; hover `#e33a1e`. Focus draws an `rgb(255, 86, 54)` outline with a 4px offset.
- **Log in**: white, 1px `#cdced6` border, black 14px weight 500 label, 38px tall, 4px radius; hover turns the label `#e33a1e`.
- **Book a demo**: white, 1px `#cdced6` border, `#1c2024` label, 6px radius; hover fills `#fbfaf7` and darkens the border to `#60646c`; focus is a 2px solid `rgb(233, 87, 68)` outline.
- **Dark button**: `#1c2024` fill, white 14px label, 36px tall, 6px radius ("Build in Knock").
- **Product card**: white, 12px radius, padding 16px 20px, 1px `#e6e4de` inset ring; title, two-line description and a row of small monospace tags.
- **Agent picker chips**: pill-shaped toggles with brand icons (ChatGPT, Claude, Cursor...); hover adds a white fill and a 0.5px inset ring.
- **Header**: 65px, `#ffffffcc`, `#222222` Inter 14px weight 500 links.
- **Footer**: `#fbfaf7`, a 40px PP Neue Montreal headline with coral and outlined buttons, then six link columns.

## Design System Architecture

Knock builds its UI on **Telegraph**, "An open source React component library built by @knocklabs" (https://github.com/knocklabs/telegraph, Storybook at https://telegraph-storybook.vercel.app). Its token package defines the scales the marketing site ships as `--tgph-*` root variables: colors in light and dark pairs (https://github.com/knocklabs/telegraph/blob/main/packages/tokens/src/tokens/color.ts, for example `accent` 9 `#FF573A`, `beige` 12 `#21201E`), the rounded scale (`rounded.ts`: 0, 0.125rem, 0.25rem, 0.375rem, 0.5rem, 0.75rem, 1rem, 9999px), spacing, text sizes, leading, tracking, shadows, breakpoints (`--tgph-breakpoint-sm: 640px`, `-md: 768px`, `-2xl: 1536px`) and font families (`family.ts`: Inter for sans, Menlo/Consolas for mono). The marketing site layers PP Neue Montreal headlines, Inconsolata code and its own coral `#ff6c52` CTA on top of these tokens, using Tailwind utilities (`--tw-*`).

## Do's and Don'ts

- Do keep the page on warm `#fbfaf7` with white cards; never pure grey backgrounds.
- Do set headings in PP Neue Montreal 500 with -2% tracking and body in Inter.
- Do use coral `#ff6c52` only for the main action; pair it with an outlined white button.
- Do outline cards with the 1px `#e6e4de` inset ring and 12px radius.
- Do illustrate with real product UI and fine line drawings.
- Don't use heavy shadows; keep elevation to hairline rings and soft layered drops.
- Don't bold headlines beyond 500.
- Don't document the cookie banner's black "Accept" button or the floating widget as brand components.

## Responsive Behavior

Measured at a 390px mobile viewport: the h1 drops from 60px / 64px to 36px / 40px (-0.72px), section h2s from 40px / 46px to 28px / 34px (-0.56px), and the hero paragraph from 16px / 24px to 14px / 21px. The first mobile CTA is the coral "Sign up" (14px weight 600, 36px tall, 4px radius). The header switches to a `#fffffff2` fill with a "Menu" toggle and four header links visible. Up to three card columns were recorded. The most-read mobile size stays 16px. Breakpoints are declared in Telegraph (`640px`, `768px`, `1536px`); layouts between 390px and 1280px were not measured.

## Iteration Guide

1. Canvas `#fbfaf7`, ink `#1c2024`, paragraphs `#60646c`.
2. Headings in PP Neue Montreal 500 (60px / 64px hero, 40px / 46px sections); body in Inter 16px / 24px.
3. Coral 36px button with 4px radius next to a white outlined 38px button.
4. White 12px cards with the 1px `#e6e4de` inset ring, arranged in rows of four.
5. Use 96px to 128px between sections and 12px gaps inside.
6. Pull further values from Telegraph's token files rather than inventing them.
