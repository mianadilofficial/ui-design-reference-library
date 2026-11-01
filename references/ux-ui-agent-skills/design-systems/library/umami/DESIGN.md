---
version: alpha
name: Umami
category: "Product & SaaS"
description: "Umami's open-source analytics site: a #fafafa page with white 6px-radius cards and #e5e5e5 borders, Inter throughout (72px/700 headline at -1.8px tracking, 18px/28px grey #838383 body), #202020 and #0a0a0a ink, and a single blue #2b7fff for buttons with 8.4px corners, tracked eyebrows and charts."
colors:
  canvas: "#fafafa"
  page-largest: "#ffffff"
  ink: "#0a0a0a"
  primary: "#2b7fff"
  on-primary: "#fafafa"
  ink-secondary: "#838383"
  ink-strong: "#202020"
  muted: "#f5f5f5"
  hover-subtle: "#f9f9f9"
  hairline: "#e5e5e5"
typography:
  display:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 72px
    fontWeight: 700
    lineHeight: 72px
    letterSpacing: "-1.8px"
  display-mobile:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: "-1.2px"
  heading:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: "-1.2px"
  heading-mobile:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-0.9px"
  subheading:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: "-0.75px"
  body:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
    letterSpacing: "-0.45px"
  link:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  button-small:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
rounded:
  xs: 6px
  sm: 8.4px
  md: 10.8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 48px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px
      1px 2px -1px
  button-primary-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-small}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 40px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px
      1px 2px -1px
  button-outline:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 40px
    border: "1px solid #e5e5e5"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    height: 70px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  nav-link-hover:
    backgroundColor: "{colors.muted}"
    rounded: "{rounded.xs}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 32px
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink-strong}"
    padding: 32px 0px
    borderColor: "{colors.hairline}"
---

# Umami

## Overview

Umami (umami.is) is an open-source, privacy-first web and product analytics platform. The GitHub repository describes it as covering "Traffic, campaigns, behavior, conversions, and revenue in one place — no cookies, no surveillance, self-hosted or in the cloud." The marketing home page was measured at 1280px (11139px tall) and 390px. It is a near-monochrome, documentation-like page on a #fafafa canvas. Everything is set in Inter, and the only color is a clear blue (#2b7fff) used for buttons, tracked eyebrows and the chart bars in product screenshots.

From the top: a 70px header with the "umami" wordmark, Product, Use Cases, Resources, Docs and Pricing, a GitHub star count ("39K"), "Log in" and a small blue "Sign up" button. The hero is centered: a blue tracked eyebrow, the 72px headline "The complete picture of your website", a grey paragraph, a blue "Get started for free" button, and a large dashboard screenshot in a white frame. Then a "Trusted by thousands of companies" logo row (Intel, Hulu, VSP, AMD), "Web and product analytics in one platform." with four white cards (Acquisition, Behavior, Conversion and retention, Revenue), and a run of feature chapters, each opened by an eyebrow and a 48px heading: "Where your traffic actually comes from", "What people do once they arrive", "Where you lose people, and who comes back", "What your traffic is actually worth". Each chapter alternates text and screenshot in two columns. Later sections cover the AI assistant via MCP ("Query your analytics from your AI assistant"), privacy ("Privacy by default. No cookies, no personal data." with three cards), open source ("Built in the open" with three large stats: 30M+, 39K+, 400+), a closing "Try Umami now." and a footer.

The voice is short and factual, and every claim sits next to a product screenshot. There is no illustration or photography; the product UI is the imagery.

## Colors

- **Canvas — #fafafa.** The `body` and header background (the CSS names it `--sidebar` and `--primary-foreground`).
- **Page largest — #ffffff.** The largest painted area: cards, screenshot frames, outline buttons (`--card`, `--background`).
- **Ink — #0a0a0a.** h2/h3 headings, card titles and links (`--foreground`, `--card-foreground`).
- **Ink strong — #202020.** The h1, the nav, the footer and outline-button text (`--color-font`, `--base-color-12`).
- **Ink secondary — #838383.** Body paragraphs, the most-read text color (4017 characters; `--color-font-muted`, `--base-color-10`).
- **Primary — #2b7fff.** Button fills and the eyebrow text (108 characters). The CSS declares `--primary: #3080ff` and the chart ramp `--chart-1` … `--chart-5` (#90c5ff, #3080ff, #155dfc, #1447e6, #193cb8). The rendered color measured #2b7fff. Hover keeps the hue at 90% opacity.
- **On primary — #fafafa.** Button text.
- **Muted — #f5f5f5.** Nav item hover background (`--muted`, `--accent`, `--secondary`).
- **Hover subtle — #f9f9f9.** The hover fill of "Log in" and the GitHub star link (`--base-color-2`).
- **Hairline — #e5e5e5.** Every card and outline-button border (`--border`, `--input`).

The neutral ramp `--base-color-1` (#fcfcfc) to `--base-color-12` (#202020) is the full grey scale. `--destructive: #e40014` exists in the CSS but was not measured on the page.

## Typography

**Inter** is the only measured family (5452 characters), loaded at 400, 500, 600 and 700, with the fallback `-apple-system, system-ui, sans-serif`. The monospace stack (`ui-monospace, SFMono-Regular, Menlo, …`) is declared but was not measured on visible text.

Measured roles:

| Role | Size / line height | Weight | Tracking |
|---|---|---|---|
| Display (h1) | 72px / 72px | 700 | -1.8px |
| Heading (h2) | 48px / 48px | 700 | -1.2px |
| Subheading (h3) | 30px / 36px | 700 | -0.75px |
| Body | 18px / 28px | 400 | — |
| Nav / wordmark | 18px / 28px | 700 | -0.45px |
| Button | 16px / 24px | 600 | — |
| Small button | 14px / 20px | 600 | — |
| Link | 16px / 26px | 400 | — |

Eyebrows are 14px with wide 3.36px tracking in blue (108 characters). One 60px element uses -3px tracking, and 36px text uses -0.9px. Every heading size gets negative tracking of about -2.5% of its size. Weights by characters: 400 (4344), 700 (889), 600 (157). The CSS line-height helpers are `--leading-tight: 1.25`, `--leading-snug: 1.375` and `--leading-relaxed: 1.625`.

## Layout

The page is one #fafafa band from 92px to 1216px wide. The hero is centered with an 800px-wide h1. Feature chapters use a two-column grid of text (444px wide paragraphs) beside a screenshot, alternating sides. The four-card row ("Acquisition" to "Revenue") uses 4 columns of 220px cards, and the privacy cards and stats use 3 columns.

Vertical rhythm is generous. Gaps of 64px (30 uses), 128px (8), 100px, 160px and 256px separate chapters. Inside components, gaps are 8px, 12px and 20px. Card padding is 32px (21 uses). The spacing unit is `--spacing: .25rem`.

## Elevation & Depth

The page is flat and depth is light. Buttons carry a small utility shadow, `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px` (written as a long layered value with transparent ring slots). Screenshot frames use the larger `rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.1) 0px 8px 10px -6px` (8 elements). Cards rely on the 1px #e5e5e5 border instead of a shadow. Faint borders at 5% and 10% black (#0000000d, #0000001a) outline the screenshots.

The focus state is a ring drawn as a box shadow: the primary blue at 30% opacity, 2px, on buttons, and a 3px grey ring at 50% on nav items.

## Shapes

Three radii carry the whole page: **6px** (19 elements — cards and nav hover areas; `--radius: .375rem`), **8.4px** (12 — every button) and **10.8px** (8 — screenshot frames). Full pills (4) are used for small badges. The look is crisp, slightly rounded rectangles.

## Components

- **Primary button.** #2b7fff with #fafafa Inter 16px/24px weight 600, 8.4px radius, padding `0px 20px`, 48px tall, small shadow. Hover shows the same blue at 90% opacity. Focus adds a 2px blue ring at 30%.
- **Small primary.** "Sign up" in the header: 14px/20px/600, padding `0px 16px`, 40px tall.
- **Outline button.** "Explore product analytics", "Explore the platform", "View the source": white, `1px solid #e5e5e5`, #202020 16px/600 text, 8.4px radius, 40px tall.
- **Nav item.** #202020 Inter 18px/700 with -0.45px tracking. Hover adds a #f5f5f5 background with a 6px radius.
- **Eyebrow.** 14px uppercase blue label with 3.36px tracking above each chapter heading.
- **Feature card.** White, `1px solid #e5e5e5`, 6px radius, 32px padding, 220px wide. An 18px/28px weight-700 #0a0a0a title over grey body.
- **Inline link.** "Learn how to analyze website traffic →": #0a0a0a 16px/26px with an arrow.
- **Screenshot frame.** White, 10.8px radius, faint border and the large soft shadow.
- **Footer.** Bordered with #e5e5e5 and padded `32px 0px`. The wordmark sits on the left, with link columns (Product, Resources, Company) on the right.

## Design System Architecture

Umami's design system is public: **Zen** (https://github.com/umami-software/zen), described in its README as "the design system and React component collection used by Umami". It provides "the design tokens, layout primitives, controls, and interface patterns used across Umami products." Per the README, the components follow shadcn conventions, use Base UI primitives for interactive behavior, and are styled with Tailwind CSS and CSS custom properties. Tokens cover "color, typography, spacing, borders, and shadows". It installs as `@umami/react-zen`, Tailwind v4 users import a preset plus `@umami/react-zen/styles.css`, and the docs live at https://zen.umami.is/docs.

The marketing site's CSS (110 custom properties) matches that architecture:
- **Semantic shadcn-style pairs**: `--background`/`--foreground`, `--card`/`--card-foreground`, `--primary: #3080ff`/`--primary-foreground: #fafafa`, `--secondary`, `--muted`/`--muted-foreground: #737373`, `--accent`, `--destructive: #e40014`, `--border`/`--input: #e5e5e5`, `--ring: #a1a1a1`, `--radius: .375rem`, and a `--sidebar-*` set.
- **Zen base ramp**: `--base-color-1` … `--base-color-12` with aliases `--font-color`, `--font-color-muted`, `--border-color`, `--primary-color`.
- **Chart ramp**: `--chart-1` … `--chart-5` in blue.
- **Tailwind v4 theme variables**: `--text-*` sizes (e.g. `--text-7xl: 4.5rem`), `--font-weight-*`, `--leading-*`, `--spacing: .25rem`, `--blur-*` and the `--tw-*` shadow plumbing.

## Do's and Don'ts

**Do**
- Use Inter only, with bold (700) headings at negative tracking and 400 grey body text at 18px/28px.
- Keep the palette monochrome (#fafafa, #ffffff, #e5e5e5, #838383, #202020, #0a0a0a) with one blue.
- Use #2b7fff for primary buttons, eyebrows and chart data only.
- Put content in white cards with 1px #e5e5e5 borders and 6px corners, and give buttons 8.4px.
- Show real product screenshots beside every claim, alternating sides chapter by chapter.
- Pair every primary button with an outline secondary.
- Build with Zen tokens (`@umami/react-zen`) when making Umami UI.

**Don't**
- Don't add gradients, illustrations or photography.
- Don't use a second accent color; red exists only as `--destructive`.
- Don't use heavy shadows on cards; borders do that job.
- Don't set body copy in black; the measured body color is #838383.

## Responsive Behavior

Measured at 390px:

- h1 drops from 72px/72px (-1.8px) to **48px/48px** (-1.2px).
- h2 drops from 48px/48px to **36px/40px** (-0.9px).
- Body stays **18px/28px** #838383.
- The primary button keeps 16px/600 text, the 8.4px radius and the #2b7fff fill.
- The header stays 70px tall on #fafafa. It shows 1 visible link (6 on desktop) and a menu toggle labelled "Open menu".
- Content is inset 16px on each side (16px to 374px). Card grids measured at most 2 columns. The page grows to 15537px tall.
- Most frequent mobile sizes by characters: 16px, 18px, 14px, 24px, 36px and 20px.

Breakpoint values were not measured.

## Iteration Guide

1. Set `body` to #fafafa, use white cards with #e5e5e5 borders, and load Inter at 400/500/600/700.
2. Build the heading ladder at weight 700: 72/72 (-1.8px), 48/48 (-1.2px), 30/36 (-0.75px). Use 18/28 #838383 for body.
3. Add the #2b7fff primary button (48px and 40px sizes, 8.4px radius) and the white outline button.
4. Lay out chapters with a blue tracked eyebrow, a 48px heading, a grey paragraph and an arrow link, beside a screenshot in a 10.8px-radius frame with the soft shadow.
5. Use the Zen variables (`--base-color-*`, `--primary`, `--border`, `--radius`) instead of new hex values.
6. Check each new component against https://zen.umami.is/docs and the live site before adding tokens.
