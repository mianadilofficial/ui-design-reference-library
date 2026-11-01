---
version: alpha
name: VoltAgent
category: "AI & LLM Platforms"
description: "VoltAgent marketing site: a near-black #050507 page with #101010 panels, emerald #10b981 and mint #2fd6a1 accents, warm grey #8a8380 body copy, Inter for body and a system-ui stack for 60px headlines at -0.65px tracking. Outlined buttons with 6px radius, 8px bordered cards, and code and product windows replace imagery."
colors:
  canvas: "#101010"
  page-body: "#050507"
  ink: "#8a8380"
  primary: "#10b981"
  nav-surface: "#020202"
  ink-strong: "#ffffff"
  syntax-string: "#a5d6ff"
  syntax-text: "#f0f6fc"
  ink-muted: "#9ca3af"
  ink-faint: "#ffffff66"
  hairline: "#3d3a39"
  link: "#2fd6a1"
  accent: "#00d992"
  badge-text: "#dcdcdc"
  nav-text: "#f2f2f2"
  footer-border: "#ffffff1a"
typography:
  display:
    fontFamily: >-
      system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-0.65px"
  display-mobile:
    fontFamily: >-
      system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-0.65px"
  heading:
    fontFamily: >-
      system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: "-0.6px"
  body:
    fontFamily: Inter, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
  link:
    fontFamily: >-
      system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.6px"
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 6.4px
  xl: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  github-badge:
    textColor: "{colors.badge-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 4px
    height: 38px
    borderColor: "{colors.badge-text}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-surface}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.nav-text}"
    rounded: "{rounded.xl}"
    padding: 24px
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.badge-text}"
    padding: 48px 0px
    borderColor: "{colors.footer-border}"
---

## Overview

The captured VoltAgent homepage is a dark, developer-tool page. A narrow green-tinted announcement bar ("We're open source - a GitHub star means a lot to us. Thank you for the support!") sits above a 64px-high navigation bar (`{colors.nav-surface}`, `#020202`) with the "voltagent" wordmark and a circular bolt logo in green, the links "Products", "Documentation", "Pricing", "Use Cases" and "Resources", a pill-shaped GitHub badge showing a star count, a Discord icon and a bordered "Try VoltOps" button.

The hero is two-sided. On the left, the small mint eyebrow "The end-to-end", the 60px headline "AI Agent Engineering" with the word "Platform" in italic mint (`{colors.link}`, `#2fd6a1`), a grey paragraph in which the words "development", "observability" and "deployment" are dimmer than the rest, an outlined "Get Started" button and a monospace command box (`$ npm create voltagent-app@latest`). On the right, a node diagram: a glowing circular bolt labelled "VoltAgent" connected to boxes for Airtable, GitHub, Slack and Gmail on one side and AI Resp., Automations, API Resp. and Webhooks on the other, with a row of round icon buttons below (Workflow, LLM, Memory, RAG, Tools).

Below the hero, a "THE PLATFORM" eyebrow introduces two side-by-side cards ("Core Framework", "VoltOps Console"), a tabbed code-and-console showcase and a wall of grey customer logos headed "USED AND TESTED BY DEVELOPERS AT".

**Key Characteristics:**
- A near-black base (`{colors.page-body}`, `#050507`) with panels one step lighter (`{colors.canvas}`, `#101010`).
- Green as the only chroma in the interface: `{colors.primary}` (`#10b981`), `{colors.link}` (`#2fd6a1`) and `{colors.accent}` (`#00d992`).
- Warm grey body copy (`{colors.ink}`, `#8a8380`) rather than neutral grey.
- Outlined (ghost) buttons and hairline-bordered cards instead of filled buttons.
- Real code and product UI as the main imagery, with a syntax-highlighted editor beside a console screenshot.
- Small pill tags ("Open Source", "Cloud", "Self-Hosted") and uppercase tracked eyebrows.

## Colors

- **Page** `{colors.page-body}` (`#050507`) is the body background and `{colors.canvas}` (`#101010`) is the next most common surface (the hero and card panels). `{colors.nav-surface}` (`#020202`) is the navigation bar.
- **Primary** `{colors.primary}` (`#10b981`) is the nav-link and hover accent colour; the Docusaurus `--ifm-link-hover-color` variable on the page has the same value. `{colors.accent}` (`#00d992`) is measured on the logo and many accent strokes (it is the second most frequent colour in the page's stylesheets), and `{colors.link}` (`#2fd6a1`) colours the "Platform" word, section links and the hover state of outlined buttons.
- **Ink** `{colors.ink}` (`#8a8380`) is the single most-read text colour (descriptive paragraphs). `{colors.ink-strong}` (`#ffffff`) is for headings and emphasis; `{colors.nav-text}` (`#f2f2f2`) for nav and card text; `{colors.ink-muted}` (`#9ca3af`) and `{colors.ink-faint}` (`#ffffff66`) for tertiary text.
- **Code window**: `{colors.syntax-string}` (`#a5d6ff`) and `{colors.syntax-text}` (`#f0f6fc`) are among the most-read text colours; in the capture the editor shows blue strings, white text, red/purple keywords, so these two are taken from that syntax theme.
- **Lines**: `{colors.hairline}` (`#3d3a39`) is the card border and `{colors.footer-border}` (`#ffffff1a`) is the 10% white footer rule. `{colors.badge-text}` (`#dcdcdc`) is the text and border of the GitHub star badge.

No brand colour is used as a large fill anywhere in the capture; green appears in text, outlines, icons and glows.

## Typography

Inter is the loaded web font (variable, weights 100-900) and carries body copy, navigation and the badge. The heading roles (`{typography.display}`, `{typography.heading}`, `{typography.link}`) were measured with a system stack beginning `system-ui, -apple-system, "Segoe UI", Roboto` - the page's heading font variable, which is not the Inter used for body copy. The stylesheet also references IBM Plex Sans and IBM Plex Mono, and the command and code boxes in the capture are monospaced.

| Role | Size / line-height | Weight | Tracking |
|---|---|---|---|
| `{typography.display}` | 60px / 60px | 400 | -0.65px |
| `{typography.display-mobile}` | 36px / 40px | 400 | -0.65px |
| `{typography.heading}` | 24px / 32px | 700 | -0.6px |
| `{typography.link}` | 24px / 32px | 400 | -0.6px |
| `{typography.body}` | 20px / 28px | 400 | normal |
| `{typography.nav}` | 16px / 26.4px | 400 | normal |

The display line uses a line-height equal to font-size, so the two-line headline is tightly stacked. The italic emphasis on "Platform" is the main typographic flourish.

## Layout

The page uses full-width dark bands with centred, constrained content. The hero is a two-column split, text left and diagram right. The platform section is a two-card row with a "+" between the cards. The tab strip (Framework, Observability, Evals, Triggers & Actions, RAG, Monitoring, Prompts, Guardrails, Deployment) runs across the width above a two-pane window: code on the left, console on the right. The logo wall is two rows of grey wordmarks on a dark band. Spacing tokens measured range from `{spacing.s1}` (2px) to `{spacing.s10}` (24px); cards use 24px padding and the footer 48px vertical padding.

## Elevation & Depth

Depth is created with tone and borders. Surfaces step from `{colors.nav-surface}` to `{colors.page-body}` to `{colors.canvas}`, and containers are outlined with `{colors.hairline}`. The only shadows found in the stylesheet are Tailwind ring and shadow variables plus Infima's global shadow variables; no heavy drop shadows appear in the capture. The hero diagram uses green glows around the central bolt to suggest light on a dark surface.

## Shapes

Radii in the tokens are `{rounded.xs}` (2px), `{rounded.sm}` (4px), `{rounded.md}` (6px), `{rounded.lg}` (6.4px), `{rounded.xl}` (8px) and `{rounded.pill}` (9999px). Cards use 8px (the most frequent radius on the page), buttons and the "Try VoltOps" control use 6px, and the GitHub star badge and tags are pills. Icons sit in circles (the hero's Workflow/LLM/Memory/RAG/Tools buttons) or small squares with rounded corners.

## Components

- **Outlined button**: transparent fill, `{colors.nav-text}` text, 1px outline, 6px radius; in the capture "Get Started" has a chevron and the neighbouring command box is monospaced. The extractor did not detect a filled primary button, so no `button-primary` is declared. On hover, "Try VoltOps" text moves to `{colors.link}` and its border lightens (measured).
- **github-badge**: a pill, 38px high, 4px padding, with a 3px `{colors.badge-text}` border; on hover its text turns `{colors.primary}`.
- **nav**: `{colors.nav-surface}` background, `{colors.nav-text}` text, 16px Inter; the wordmark is `{colors.primary}`.
- **link**: `{colors.link}` text, 24px.
- **card**: `{colors.page-body}` surface, 8px radius, 24px padding, `{colors.hairline}` border, holding a title, small pill tags and a green list of capabilities (Memory, RAG, Guardrails, Tools, MCP, Voice, Workflow).
- **tab strip**: 44px-high tabs with green active text.
- **footer**: `{colors.badge-text}` text, 48px vertical padding, a `{colors.footer-border}` top rule.

## Design System Architecture

No public design-system documentation for VoltAgent's marketing brand was found; the GitHub repository (https://github.com/VoltAgent/voltagent) describes the product as "an end-to-end AI Agent Engineering Platform", an MIT-licensed TypeScript framework plus a VoltOps Console, and gave no design tokens. The de-facto system is visible in the shipped CSS of https://voltagent.dev: Tailwind utility variables (`--tw-ring-color` and similar), Docusaurus Infima variables (`--ifm-*`, for example `--ifm-link-hover-color` and `--ifm-navbar-link-color`), a docsearch variable set, and a custom typography token family named by role, breakpoint and variant (`--typography-h2-d-medium-font-size`, `--typography-body-1-m-line-height`, `--typography-links-d-font-style`, with `d`/`m` for desktop and mobile). A colour variable such as `--color-primary-emerald-filter` shows an emerald brand colour is part of the token set. In short: Tailwind for components, Infima for docs pages, and a bespoke typography token layer.

## Do's and Don'ts

**Do**
- Keep the page `{colors.page-body}` and use `{colors.canvas}` for raised panels.
- Use green only for emphasis, links, outlines and glows.
- Write body copy in `{colors.ink}` and raise key words to `{colors.ink-strong}`.
- Show real code and console UI as imagery.

**Don't**
- Fill large areas with green or introduce a second hue.
- Use drop shadows; use borders (`{colors.hairline}`) instead.
- Use filled buttons on the marketing hero: the capture uses outlines.
- Set body copy in pure white; the measured body colour is a warm grey.

## Responsive Behavior

The 390px measurement shows the h1 dropping from 60px to 36px (line-height 40px) with the same -0.65px tracking. The stylesheet's typography variables are split by `m` and `d` (mobile and desktop) prefixes, confirming separate mobile and desktop sizes, though intermediate breakpoints were not measured. Tailwind and Infima define their own default breakpoints, but the specific ones this page uses were not recorded and are not asserted here.

## Iteration Guide

1. Start from `{colors.page-body}`, `{colors.canvas}`, `{colors.ink}` and `{colors.primary}`.
2. Use `{typography.display}` for the page headline with one italic mint word; body at `{typography.body}`.
3. Build buttons as outlines with a 6px radius; reserve pills for tags and badges.
4. Frame containers with `{colors.hairline}` and 8px radius.
5. Let code, terminals and product screenshots carry the visual weight.
6. Verify any new colour against the extraction before adding it.
