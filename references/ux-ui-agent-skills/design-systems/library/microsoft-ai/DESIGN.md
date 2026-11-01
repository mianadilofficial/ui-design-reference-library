---
version: alpha
name: Microsoft AI
category: "Tech & AI"
description: "Microsoft AI (MAI) home page measured: warm cream #fef9ed canvas, brown-grey ink #5d524b, Bradford LL serif at 111.111px with -4.44444px tracking for the Humanist Superintelligence hero, Red Hat Mono labels at 13.3333px, square-cornered pale-tan #fbf0dc model chips, coral-to-peach #fbd3be imagery."
colors:
  canvas: "#fef9ed"
  ink: "#5d524b"
  primary: "#fbf0dc"
  on-primary: "#5d524b"
  surface-2: "#fbd3be"
  surface-3: "#f7f1e3"
  ink-3: "#f7ecd9"
typography:
  display:
    fontFamily: "\"Bradford LL\""
    fontSize: 111.111px
    fontWeight: 450
    lineHeight: 111.111px
    letterSpacing: "-4.44444px"
  display-mobile:
    fontFamily: "\"Bradford LL\""
    fontSize: 48.5075px
    fontWeight: 450
    lineHeight: 55.7836px
    letterSpacing: "-1.45522px"
  heading:
    fontFamily: "\"Red Hat Mono\""
    fontSize: 13.3333px
    fontWeight: 500
    lineHeight: 13.3333px
    letterSpacing: "-0.213333px"
  body:
    fontFamily: "\"Bradford LL\""
    fontSize: 21.3333px
    fontWeight: 450
    lineHeight: 26.6667px
    letterSpacing: "-0.213333px"
  nav:
    fontFamily: "\"Bradford LL\""
    fontSize: 0px
    fontWeight: 450
    lineHeight: 0px
    letterSpacing: "-0.213333px"
  link:
    fontFamily: "\"Bradford LL\""
    fontSize: 37.3333px
    fontWeight: 450
    lineHeight: 37.3333px
    letterSpacing: "-0.746667px"
rounded:
  xs: 2px
  sm: 2.22px
  md: 2.96px
  lg: 3.7px
  xl: 5px
  2xl: 6px
  3xl: 28.44px
  4xl: 50px
  none: 0px
spacing:
  s1: 4px
  s2: 4.44px
  s3: 5px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 10.37px
  s8: 11.11px
  s9: 12px
  s10: 14.22px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    padding: 4.44444px 13.3333px 4.44444px 4.44444px
    height: 49px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    padding: 4.44444px 13.3333px 4.44444px 4.44444px
    height: 49px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 0px 16.2963px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 16.2963px 0px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 19.2593px
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 0px 27px
---

# Microsoft AI

## Overview

This file documents the page measured at `https://microsoft.ai/`, titled "Home | Microsoft AI" (language `en-US`), the public site of Microsoft's AI group, whose logo reads "MAI". The hero is a full-width blurred coral and peach image carrying the headline "Humanist Superintelligence" (the first word in italic) and the line "Responsible AI to empower humanity". Below it a large rounded feature image (blue with pink comma shapes) carries a white caption card, "Our first streaming transcription model debuts at no. 1 on Artificial Analysis", tagged "models" and "5 min read", followed by a horizontally scrolling row of model cards with abstract green and ink-wash artwork and a pair of small arrow buttons. Navigation items are Models, Blog, Careers, Code of Conduct and a link "THE HUMANIST REVIEW OF AI". An "Accessibility Mode" toggle sits at the bottom left of the hero.

The visual language is editorial and warm rather than technical. Everything sits on a cream canvas (`{colors.canvas}` #fef9ed) with one text color (`{colors.ink}` #5d524b, a brown-grey), a serif display face, and a monospace face for labels and chips. Imagery is soft-focus, grainy and painterly (blurred sunlight, motion-blurred punctuation, glowing code braces). There are no bright accent colors in the interface; the color arrives through the artwork.

## Colors

All measured from the page:

- `{colors.canvas}` #fef9ed: the page background (area weight 7,823).
- `{colors.ink}` #5d524b: the text color of nearly all characters (3,793) and the on-color of chips.
- `{colors.surface-3}` #f7f1e3: slightly darker cream panels behind model cards (970).
- `{colors.primary}` #fbf0dc: pale tan fill of the model chips such as "MAI-Code-1.1-Flash" and "MAI-Voice-2.1". It is the detected action fill, but it is a quiet tint, not an accent.
- `{colors.ink-3}` #f7ecd9: light text color on dark chips (10 characters), also the mobile "All models" button text.
- `{colors.surface-2}` #fbd3be: the peach tone of the hero artwork area (1,024).

The measurement also recorded #0000ee text on 20 characters; that is the browser default link color and is not a brand color, so it is dropped. A single shadow, `rgba(93, 82, 75, 0.3) 0 4px 40px 0`, uses the ink color at 30%.

## Typography

Fonts loaded: `Bradford LL` at weight 450 (normal and italic) and `Red Hat Mono` at 400 and 500. By characters: Bradford LL 2,270, Red Hat Mono 1,616. Bradford is a commercial typeface from Lineto; no license or substitution page was opened for this file, so no substitute is asserted.

The scale is fluid: values are fractional because sizes are computed from the viewport (a root variable `--radius-3fx` is `calc(3 * calc(100vw / 1728))`, showing the 1728px design width). Tokens: `{typography.display}` Bradford LL 111.111px, weight 450, line-height 111.111px, letter-spacing -4.44444px; `{typography.display-mobile}` 48.5075px/55.7836px with -1.45522px; `{typography.body}` 21.3333px/26.6667px with -0.213333px; `{typography.link}` 37.3333px/37.3333px with -0.746667px for headline links ("Our first streaming transcription model..."); `{typography.heading}` Red Hat Mono 13.3333px weight 500 for chips and labels. The `nav` role measured 0px because the nav text is rendered in a child element; the nav items in the capture are small monospace. Sizes by characters include 21.3333px (1,211), 11.5556px (728), 10.6667px (342), 13.3333px (336), 37.3333px (310), 32px, 14.2222px, 28.4444px, 56.8889px, 48px. Weights: 450 (2,119), 500 (1,145), 400 (643).

## Layout

Layout is full-bleed bands: the hero spans the viewport, then a feature image sits inside a centered column with generous side margins, with its caption card overlapping the image's lower left; model cards run in a horizontal strip that bleeds off the right edge. The navigation is a floating cream bar inset from the edges, with a 5px radius. Measured paddings are fractional and viewport-relative: 11.1111px (91 elements), 4.44444px (14), 10.3704px, 14.8148px, 22.2222px, 14.2222px, 42.6667px, 19.2593px, 16.2963px. The card has 19.2593px padding, the nav 0 16.2963px, the footer 0 0 27px. The generated spacing tokens are `{spacing.s1}` 4px, 4.44px, 5px, 8px, 9px, 10px, 10.37px, 11.11px, 12px and `{spacing.s10}` 14.22px.

## Elevation & Depth

Flat by default. The only measured shadow (1 element) is `0 4px 40px` in 30% brown ink, a wide, soft glow. Separation is made by tone: cream canvas, slightly darker cream panel, and image areas. The caption card sits over its image without a border, using the canvas color for contrast.

## Shapes

Radii measured: 2px (18 elements), 28.4444px (7), 3.7037px (6), 2.96296px (4), 5px (3), 50px (3), 2.22222px (2), 6px (1). Interface elements are nearly square: chips and buttons compute to 0px radius in the component roles, small controls use 2px to 6px, and the large feature images and the pill toggle use 28.4444px and 50px. Tokens: `{rounded.none}` 0px for chips and buttons, `{rounded.xs}` 2px, `{rounded.sm}` 2.22px, `{rounded.md}` 2.96px, `{rounded.lg}` 3.7px, `{rounded.xl}` 5px for nav and card, `{rounded.2xl}` 6px, `{rounded.3xl}` 28.44px, `{rounded.4xl}` 50px.

## Components

- **Model chip button** (`button-primary`, `button-secondary`): `{colors.primary}` fill, `{colors.ink}` text, Red Hat Mono 13.3333px/500, 49px tall, padding `4.44444px 13.3333px 4.44444px 4.44444px` (a small square thumbnail sits at the left), 0 radius. On mobile the "All models" button is 36px tall, 141px wide, `{colors.ink}` fill with `{colors.ink-3}` text at 12px/500 and 24px radius.
- **Headline link** (`link`): Bradford LL 37.3333px in `{colors.ink}`.
- **Navigation** (`nav`, `nav-link`): cream bar, 5px radius, `0 16.2963px` padding; links in `{colors.ink}`.
- **Card** (`card`): `{colors.canvas}` fill, 5px radius, 19.2593px padding.
- **Footer** (`footer`): `{colors.ink}` text, `0 0 27px` padding.

## Design System Architecture

No public design system or brand guideline was reached. A request to the home page with curl returned HTTP 403 with only Cloudflare error stylesheets (`/cdn-cgi/styles/cf.errors.css`), so no links to brand or press pages could be listed; the browser-driven extraction did succeed and is the source for every value. The de-facto system is Tailwind CSS v4 (`--tw-*` variables, `--color-red-900` in OKLCH, easing alias `--alias-easeOutCubic` cubic-bezier(.215, .61, .355, 1)) on top of WordPress block-editor presets (`--wp--preset--font-size--large` 36px, `--wp--preset--shadow--deep`). Sizes are viewport-relative against a 1728px reference, which explains the fractional pixel values.

## Do's and Don'ts

- Do set text in `{colors.ink}` on `{colors.canvas}`; keep the palette to creams and the one brown-grey.
- Do pair a tightly tracked serif display (`{typography.display}`) with monospace labels.
- Do let soft-focus imagery bring color.
- Don't add bright accent fills or saturated buttons; chips are pale tan.
- Don't round interface controls beyond a few pixels; reserve the large radii for images and the pill toggle.
- Don't use hard shadows; the only shadow is a wide 40px blur at 30% ink.
- Don't use #0000ee; it is a browser default, not a brand color.

## Responsive Behavior

Measured at 390px: the h1 is Bradford LL 48.5075px/55.7836px (`{typography.display-mobile}`), the h2 26.194px/30.1231px, body 17.4627px/23.2254px, and the nav block 16px/28.8px, 5px radius, with 21.3433px padding. The "All models" button is 36px tall. Character-weighted sizes at 390px: 17.4627px (1,369), 26.194px (377), 12px (361), 11.6418px (342), 29.1045px, 48.5075px. Breakpoint widths and the card strip's mobile behavior were not measured.

## Iteration Guide

1. Begin with `{colors.canvas}` and `{colors.ink}`, no other text color.
2. Use `{typography.display}` for the hero with an italic first word, `{typography.body}` for lead text, and `{typography.heading}` (monospace) for chips and metadata.
3. Build chips with `{colors.primary}` and `{rounded.none}`.
4. Scale type by viewport against the 1728px reference rather than fixed breakpoints.
5. Re-run `node web/scripts/extract-tokens.mjs --slug=microsoft-ai --url=https://microsoft.ai/ --force --no-motion` and compare before editing.
