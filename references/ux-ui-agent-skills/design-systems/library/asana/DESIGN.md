---
version: alpha
name: Asana
category: "Design Systems"
description: "asana.com home: white canvas, near-black #0d0d0d ink and pill buttons (100px radius), TWK Lausanne in light 300 weight at 102px with -2.55px tracking for the hero, 54px section headings, 20px body, and animated product-graph illustrations with a coral-to-fuchsia gradient on one hero phrase."
colors:
  canvas: "#ffffff"
  ink: "#0d0d0d"
  primary: "#0d0d0d"
  on-primary: "#ffffff"
  ink-secondary: "#3d3d3d"
  ink-muted: "#6e6e6e"
  surface-gray: "#f3f3f3"
  surface-soft: "#fafafa"
  hairline: "#e7e7e7"
  fuchsia-soft: "#ffc9ff"
typography:
  display:
    fontFamily: "\"TWK Lausanne\", \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 102px
    fontWeight: 300
    lineHeight: 91.8px
    letterSpacing: "-2.55px"
  display-mobile:
    fontFamily: "\"TWK Lausanne\", \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 48px
    fontWeight: 300
    lineHeight: 43.2px
    letterSpacing: "-0.96px"
  heading:
    fontFamily: "\"TWK Lausanne\", \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 54px
    fontWeight: 300
    lineHeight: 54px
    letterSpacing: "-1.08px"
  subheading:
    fontFamily: "\"TWK Lausanne\", \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  body:
    fontFamily: "\"TWK Lausanne\", \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 300
    lineHeight: 30px
    letterSpacing: 0.4px
  button:
    fontFamily: "\"TWK Lausanne\", \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  link:
    fontFamily: "\"TWK Lausanne\", \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 13px
    fontWeight: 300
    lineHeight: 19.5px
  button-secondary:
    fontFamily: "\"TWK Lausanne\", \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  input:
    fontFamily: "\"TWK Lausanne\", \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
rounded:
  xs: 3px
  sm: 4px
  md: 7px
  lg: 8px
  xl: 10px
  2xl: 16px
  3xl: 20px
  4xl: 64px
  cta: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 23px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 12px 32px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.ink-muted}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.cta}"
    height: 44px
    borderColor: "{colors.ink}"
  button-secondary-hover:
    backgroundColor: "{colors.surface-soft}"
  chip:
    backgroundColor: "{colors.fuchsia-soft}"
    textColor: "{colors.ink}"
    rounded: "{rounded.4xl}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 12px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.hairline}"
---

## Overview

The capture of https://asana.com leads with an oversized headline, "The OS for human-agent teams", in which the middle phrase "human-agent" is filled with a coral-to-magenta gradient while the rest is near-black (#0d0d0d) on white. Around it, small floating UI fragments (a speech bubble reading "Launch product in 4 weeks", a "Launch Planner" tag, an "Approve edits" pill, avatar dots) are joined by thin colored lines, suggesting a graph of people and agents. Below the headline sit two outlined sign-in pills (Google, Microsoft), an "or" divider, an email field with a black "Continue" pill and a small legal line.

A floating chat widget at the right ("Hey! What brings you to Asana today?" with Book a meeting, Request support and an input) overlaps the hero; it is a support overlay, not brand UI, and a stealth re-run of the extractor still showed it. A logo row follows the statement "85% of Fortune 100 companies choose Asana" with partner wordmarks (Amazon, Accenture, Johnson & Johnson, Dell, Merck), then a section "AI that works the way your team works" with a black rounded panel showing a node graph beside an accordion (Asana Work Graph, Multiplayer, Shared memory, Enterprise governance), and an "AI TEAMMATES" section: "Your team just got bigger".

The mood is confident and clean: lots of white, huge light-weight type with tight tracking, rounded pill controls, and a few saturated accents inside illustrations. Copy is short and declarative, heavy on "AI", "agents" and "teams".

## Colors

Canvas is #ffffff. Ink is #0d0d0d, the most-used text color, and the same value fills the primary buttons. Secondary body paragraphs are #3d3d3d, which also fills the dark panels measured over a large share of the page area. Muted text and the primary-button hover are #6e6e6e. Light surfaces are #fafafa (outlined button hover and logo tiles) and #f3f3f3; hairlines are #e7e7e7.

The only chromatic color measured as a surface is a soft fuchsia #ffc9ff, behind the "Agentic Work Management" chip. The page's root variables also define coral, bright-coral, fuchsia and chartreuse families (for example `--coral-4`, `--fuchsia-200`, `--chartreuse-200`) that appear in the hero gradient and illustrations; they are not promoted to tokens beyond the measured chip fill. Asana's brand page states that the symbol is always coral and the wordmark is black on light or white on dark backgrounds, and says not to use secondary brand colors as backgrounds, which matches the restrained neutral UI.

## Typography

One family: TWK Lausanne, with Helvetica Neue, Helvetica and generic sans-serif as fallbacks; weights 300, 400 and 500 are loaded. Display is 102px / 91.8px leading, weight 300, -2.55px tracking (48px / 43.2px / -0.96px on mobile). Section headings are 54px / 54px, weight 300, -1.08px. Subheadings are 20px / 30px at weight 400; body is 20px / 30px, weight 300, +0.4px tracking. Buttons use 16px / 24px weight 500 (14px / 21px for the compact secondary), small links are 13px / 19.5px weight 300 and form inputs 16px / 28px.

Leading below 1.0 on display type and negative tracking give the headlines a compressed, poster-like feel; body text goes the other way with slight positive tracking. TWK Lausanne is a commercial typeface; Helvetica Neue is the nearest listed fallback.

## Layout

Sections are centered or left-aligned within a wide container. The hero is centered and symmetrical. Later sections use a left-aligned heading and a two-column split (illustration panel left, accordion right). The page defines a generous section spacing scale in its root variables (16px, 24px, 32px, 48px, 64px up to 160px under `--spacing-*`); control internals use the small steps s1 to s10 (2px to 30px).

Density is low with large empty bands between sections; content is organized into single-idea blocks with one headline and one short paragraph.

## Elevation & Depth

Shadows are almost absent: the only box shadow measured is a 1px inset ring in #0d0d0d, used to draw the outline on "Contact sales". Separation relies on hairlines (#e7e7e7), thin dividers in the accordion, and the dark panel against white.

## Shapes

The key shape is the pill: buttons and nav controls use a 100px radius (rounded.cta). Large chips use 64px. Panels and cards use 8px and 16px; small controls 3px to 10px; avatars use 50% circles. The Asana root variables name `--border-radius` as 3px. The upper corners of images and panels frequently use 8px or 7px radii (top-only).

## Components

**Primary button.** #0d0d0d fill, white text at 16px / 500, 100px radius, 50px tall (44px in the header), 12px 32px padding. Hover lightens the fill to #6e6e6e.

**Outlined button.** White fill, #0d0d0d text and a 1px inset #0d0d0d ring, 44px high, 100px radius; hover tints to #fafafa. Used for "Contact sales" and "Learn more".

**Provider buttons.** "Google" and "Microsoft" sign-in tiles with brand glyphs, pill-shaped with a gray outline.

**Chip.** Fuchsia-soft #ffc9ff pill with dark text.

**Header.** White bar with the coral three-dot logo and black wordmark, nav labels with chevrons (Products, Solutions, Learning & support, Pricing), a globe icon, Log in, an outlined Contact sales and a black Get started.

**Accordion.** Large 20px-ish titles separated by thin rules with circular chevron toggles.

## Design System Architecture

Asana's public design resources are limited. The URL https://asana.design was opened and is the Asana design team's careers and culture site (jobs, links to articles, social links), not a documentation site for components or tokens, so it is described only and contributes no values. The brand page https://asana.com/brand sets logo rules (coral symbol, black or white wordmark, no shadows, no secondary brand colors as backgrounds) and links a brand-guidelines PDF that was too large to open.

The de-facto system is visible in asana.com's root custom properties: tonal families named `--coral-0` to `--coral-1000`, `--bright-coral-*`, `--fuchsia-*`, `--chartreuse-*` and many more colors; `--spacing-0` through `--spacing-10` (for example `--spacing-1` is 16px and `--spacing-4` is 64px); `--border-radius` (3px); and light-mode and dark-mode, glow, shadow, transition and z-index groups. Fonts are loaded as TWK Lausanne in three weights. Marketing components are built from these variables.

## Do's and Don'ts

- Do set headlines in TWK Lausanne 300 with negative tracking and tight leading.
- Do use #0d0d0d pills with white labels for the main action and an outlined pill for the second.
- Do keep the UI neutral and let illustration carry color.
- Do give the symbol its coral and the wordmark black on light backgrounds, as the brand page requires.
- Don't use secondary brand colors as page or section backgrounds.
- Don't add drop shadows to buttons or logos.
- Don't treat the chat widget or sign-in provider tiles as the brand's button style.

## Responsive Behavior

The extractor measured a mobile pass: the 102px display shrinks to 48px with leading 43.2px and -0.96px tracking. The remaining layout behavior was not inspected visually, so only the type change is recorded. Buttons stay 44px to 50px tall, comfortable for touch.

## Iteration Guide

1. White page, #0d0d0d text, TWK Lausanne 300 at 20px / 30px for paragraphs.
2. Headlines at 54px (sections) or 102px (hero) with tight leading and negative tracking.
3. Primary action: #0d0d0d pill, 100px radius, white 16px / 500 label; secondary: white pill with a 1px #0d0d0d ring.
4. Use #f3f3f3 / #fafafa for quiet surfaces and #e7e7e7 hairlines.
5. Put color in illustration (coral, fuchsia) and a single gradient headline phrase, not in surfaces.
