---
version: alpha
name: Perplexity
category: "AI"
description: "Perplexity's logged-out home screen: a near-white #fbfbfb canvas with a left sidebar, pplxSans type at weight 400, deep teal-black text #071f21, a teal #016a71 accent, a 24px 'What do you want to know?' heading, a white rounded search box and 8px to 16px radii with 9999px pills."
colors:
  canvas: "#fbfbfb"
  ink: "#0c3031a6"
  primary: "#016a71"
  surface-white: "#ffffff"
  surface-dark: "#27251e"
  ink-strong: "#071f21"
  ink-faint: "#10404480"
  hairline: "#ffc60024"
  nav-bg: "#ffff0009"
  nav-link-text: "#000000"
typography:
  display:
    fontFamily: >-
      pplxSans, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: >-
      pplxSans, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: >-
      pplxSans, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 6px
  sm: 8px
  md: 11px
  lg: 12px
  xl: 15px
  2xl: 16px
  pill: 9999px
spacing:
  s1: 0.5px
  s2: 1px
  s3: 2px
  s4: 3px
  s5: 4px
  s6: 6px
  s7: 8px
  s8: 12px
  s9: 16px
  s10: 32px
components:
  button-secondary:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 0px 12px 0px 8px
    height: 32px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
---

## Overview

The measured page is the signed-out home screen of Perplexity at https://www.perplexity.ai/ (title "Perplexity"), a single 1280 by 800 viewport that is the answer-engine app itself rather than a marketing page. On the left runs a narrow sidebar with the knot-shaped logo, search and collapse icons, then a vertical list: New, Computer, Automations, Artifacts, Customize, followed by collapsible "Projects" ("No projects") and "Sessions" ("No recent sessions") groups, a small "View plans" pill and a "Sign In" row with an avatar at the bottom. Two small outlined icon buttons sit at the top right of the main area.

The centre column starts with a tiny "Search" label and the heading "What do you want to know?", then a large white rounded input card with the placeholder "Ask anything...", a plus button, a "Search" mode pill with a chevron, a muted "Computer" pill, a "Model" selector, a microphone icon and a round near-black waveform button. Underneath are two tinted cards: "Search anything: Get fast and accurate answers from the most trusted sources." and "Get work done with Computer" with a small "NEW" tag and the line "Hand off your projects to get polished, reliable deliverables around the clock." The mood is quiet, spacious and tool-like: lots of empty canvas, small type and no photography.

## Colors

`canvas` is `#fbfbfb` (2624 area weight), a barely warm white. The sidebar sits on `nav-bg` `#ffff0009`, a nearly transparent yellow wash (255 area weight), which gives the sidebar a faint off-white tone against the canvas, and `surface-white` `#ffffff` fills the search card. Text is teal-tinted rather than neutral: `ink` `#0c3031a6` (the most-read colour, 175 characters, teal-black at about 65 percent opacity) for secondary labels, `ink-strong` `#071f21` for headings and active items, and `ink-faint` `#10404480` for placeholders and muted captions. The only saturated colour is `primary` `#016a71`, a deep teal used on the small "NEW" badge text (3 characters in the measurement). `surface-dark` `#27251e` is the near-black of the round submit button. `hairline` `#ffc60024` is a translucent amber border (six elements) used on the cards and controls, and `nav-link-text` is `#000000`.

The CSS carries a much larger palette of named colour ramps (the extraction found 400 root variables, including families such as `--sylph-light-600: #536300`, `--ifrit-dark-200: #f7abad`, `--titan-dark-600: #7c5209`, `--ramuh-light-300: #c18fed`, and a finance set with `--finance-negative-bg-strong: #a23544`) that serve dark mode, charts and article views. They were not rendered on this screen and so are not tokens here.

## Typography

One family renders everything measured: pplxSans (declared as "PPLX Sans Beta v2 VF" in the article variables), followed by a long system stack (`ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif`). The CSS also declares a serif family, "PPLX Serif Beta v2 VF", and a mono family, "PPLX Mono Beta v0 VF", for articles and code. These are Perplexity's own proprietary faces; the system stack is the declared fallback.

All measured weights are 400. `display` is 24px/32px ("What do you want to know?"), `body` is 16px/24px (sidebar items), and `button-secondary` is 14px/20px (pills and card text); the page body default is 14px/20px. By character count the sizes are 12px (172), 14px (153), 16px (48), 24px (20) and 11px (3). CSS variables declare larger sizes for other views: `--ui-heading-hero-size: 46px`, `--ui-heading-headline-size: 28px`, `--article-heading-display-serif-size: 36px` with -0.72px tracking, `--article-heading-section-sans-size: 18px` and `--article-text-caption-size: 12px`, together with intermediate weights such as 480, 560 and 635. Tracking on this screen is not set (0px).

## Layout

A fixed-width sidebar occupies the left edge (about the first sixth of the capture), with items 40px tall (nav link height) and 8px radius. The main area is empty except for a centred column roughly half the viewport wide, which stacks the label, heading, input card and a two-column row of option cards. Whitespace above and below the column is generous, so the content floats at the vertical centre. Spacing steps measured: 0.5, 1, 2, 3, 4, 6, 8, 12, 16 and 32px. The page itself does not scroll (scroll height 800px).

## Elevation & Depth

Depth is nearly absent. The search card is white on near-white with a very soft edge; the only box shadow measured is a fully transparent teal glow (`color(srgb 0.00392157 0.415686 0.443137 / 0) 0px 0px 36px 4px`), which is a focus-state placeholder with zero alpha. Cards use a translucent warm-brown fill (measured on hover as `color(srgb 0.152941 0.101961 0 / 0.035)`, about 3.5 percent) and a 14 percent border of the same hue, so they read as slightly shaded rather than elevated. Hover did not change the fill, border or shadow in the recorded pass; only the card height shifted by 1px (88px to 89px).

## Shapes

Radii measured: 8px (22 elements: sidebar items, icon buttons), 9999px (15 elements: pills and round buttons), 6px (4), 16px (4), 12px (2), 11px (2: the option cards) and `0px 0px 16px 16px` (1). The CSS defines `--radius-8: 8px` and `--radius-12: 12px`. Rule of thumb from the measurements: small controls at 6px to 8px, cards at 11px to 16px, and any mode toggle or action chip as a full pill.

## Components

**Search input card.** White fill, large radius (the capture shows a corner of about the 16px token), placeholder "Ask anything...", with a toolbar row below holding a plus icon, mode pills and the submit button.

**Mode pill.** `button-secondary`: 14px weight 400, `ink-strong` text, pill radius, 32px tall, padding 0px 12px 0px 8px (icon on the left), a 1px border in the muted hairline tone; the active pill is "Search" with a chevron, and "Computer" is the inactive muted variant.

**Option cards.** 88px tall buttons with an 11px radius, a translucent warm tint, a 1px 14 percent border, an icon plus 14px strong title and a two-line 12px description in muted ink.

**Sidebar item.** 40px tall, 8px radius, 16px text with a 16px outline icon at the left, text `#000000`.

**Icon buttons.** Square 8px-radius outlined buttons with hairline border at the top right.

**Submit button.** Round, `#27251e` fill, white waveform glyph.

## Design System Architecture

No public Perplexity design-system or brand-guideline page was opened for this document, so there is no official token source to cite. The shipped CSS shows a large, named token system exposed as root custom properties (400 of them in the extraction). They are grouped by purpose: `--ui-*` for application text (for example `--ui-heading-hero-size`, `--ui-text-body-md-normal`, `--ui-text-code-sm-lineheight: 16px`), `--article-*` for reading views (display, headline, section and subsection levels in sans and serif, with per-level family, size, weight, line height and tracking), `--font-weight-system-*`, `--font-weight-sans-*`, `--font-weight-serif-*` and `--font-weight-mono-*` scales, `--radius-8` and `--radius-12`, and colour ramps named after proper nouns (sylph, ifrit, titan, ramuh, garuda) with light and dark steps from 100 to 800, plus `--finance-*` action tokens that use relative colour syntax (`rgb(from #a23544 r g b / .2)`).

## Do's and Don'ts

- Do keep the canvas near white (`#fbfbfb`) and use teal-tinted text (`#071f21`, `#0c3031a6`) instead of pure black for content.
- Do use weight 400 for labels and headings on this screen and keep type small (12px to 16px) with one 24px heading.
- Do use 8px radii for sidebar and icon controls, 11px to 16px for cards and pills for mode toggles.
- Do separate surfaces with 1px translucent borders rather than shadows.
- Do write short, direct prompts ("Ask anything...", "What do you want to know?").
- Don't add saturated brand colour to large areas; teal `#016a71` is only a small accent.
- Don't use drop shadows or gradients on cards.
- Don't use photography or illustration on the input screen.

## Responsive Behavior

The 390px mobile pass measured type only: the h1 stays 24px/32px at weight 400 and body text stays 16px/24px. Sidebar behaviour, card stacking and any other layout change at mobile width are not measured.

## Iteration Guide

1. Start with `canvas` `#fbfbfb`, `ink-strong` `#071f21` text and a left sidebar on a faint warm wash.
2. Centre a 24px/32px heading above a white search card with a pill toolbar.
3. Use 14px pills (32px tall, pill radius) for modes and 8px-radius 40px rows for navigation.
4. Add two option cards at 11px radius with a 3.5 percent warm tint and a 14 percent border.
5. Reserve `#016a71` for tiny badges and keep the submit button near-black (`#27251e`).
6. Verify with `node web/scripts/verify-designs.mjs --slug=perplexity`.
