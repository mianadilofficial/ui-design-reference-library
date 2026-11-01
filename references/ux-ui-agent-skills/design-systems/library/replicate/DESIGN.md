---
version: alpha
name: Replicate
category: "AI & LLM Platforms"
description: Replicate's homepage sets a white canvas (#ffffff) against a hot magenta-to-yellow gradient hero, with 72px rb-freigeist-neue headlines at weight 700, basier-square body, JetBrains Mono code, square black buttons (#000000, 0px radius) and pill-shaped filter chips. It reads as a developer tool dressed in a print-poster palette.

colors:
  canvas: "#ffffff"
  page-largest: "#fcfcfc"
  ink: "#202020"
  ink-muted: "#646464"
  primary: "#000000"
  on-primary: "#ffffff"
  primary-hover: "#0000009b"
  surface-tint: "#fffcfc"
  signal-red: "#ea2804"
  accent-red-text: "#dd4425"
  text-input-bg: "#ffffff1a"
typography:
  display:
    fontFamily: basier-square, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  display-mobile:
    fontFamily: basier-square, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  heading:
    fontFamily: rb-freigeist-neue, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 72px
    fontWeight: 700
    lineHeight: 72px
    letterSpacing: "-1.8px"
  subheading:
    fontFamily: rb-freigeist-neue, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 36px
  body:
    fontFamily: basier-square, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: basier-square, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: basier-square, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: jetbrains-mono, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: basier-square, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 16px
    height: 54px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 8px 12px
    height: 42px
    borderColor: "{colors.primary}"
  button-tint:
    backgroundColor: "{colors.surface-tint}"
    textColor: "{colors.accent-red-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    height: 42px
  chip-active:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.pill}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 6px 56px 6px 28px
    height: 34px
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

Replicate is a hosted API for running machine-learning models, and the homepage speaks to developers first. The capture begins with a thin announcement bar ("Wan 3.0 is 30% off this week", with a close icon), then a header with the Replicate wordmark, a search field ("Search 'best image models' or 'text to image'" with a cmd+k hint), links Explore, Pricing, Enterprise, Docs, Blog, Sign in and a dark "Try for free" button. The hero is a saturated gradient field that runs from magenta and pink through orange to acid yellow at the bottom right, overlaid with a halftone dot texture. On it, in white, is the headline "Run AI with an API." in two lines, the sub-line "Run and fine-tune models. Deploy custom models. All with one line of code.", and a square black button, "Get started for free".

Directly beneath is a code card with tabs Node, Python and HTTP: a short script that imports Replicate, calls `replicate.run("black-forest-labs/flux-2-pro", ...)` with a prompt about a poolside patio at sunset, and beside it the generated photograph of the patio. A white panel overlaps the bottom of the gradient with the label "With Replicate you can" and a row of pill chips (Generate images, Generate speech, Generate music, Restore images, Generate videos from images, Caption images, Large Language Models (LLMs)), the first one filled dark. Rows of model cards follow, each with a thumbnail, an owner/name pair (such as openai / gpt-image-1.5), a one-line description, a red run count and an "Official" badge. Further down, circular avatars with gradient rings are joined by dotted red lines, a large headline "Thousands of models contributed by our community" in a lighter weight, and two buttons, "Explore models" (black) and "Push a model" (outlined).

The tone is direct and practical: "Run AI with an API", "Make it real by pushing it to Replicate." There is little decoration beyond the gradient; model artwork supplies the rest of the colour.

## Colors

The measured palette is almost monochrome, apart from the hero gradient and one red.

- **Canvas.** `{colors.canvas}` is the document background. `{colors.page-largest}` (`#fcfcfc`) is the single largest-area surface, a hair off white, used for cards and panels.
- **Ink.** `{colors.ink}` (`#202020`) is the main heading and interface colour; `{colors.ink-muted}` (`#646464`) is the most frequently set text colour, used for descriptions and metadata. I reassigned `ink` from the generator's `#646464` to `#202020` because the capture shows headings and chips in the darker value and the lighter one carries secondary text.
- **Primary.** Solid buttons are pure black `{colors.primary}` with white `{colors.on-primary}` labels. Hover drops the fill to black at roughly 60% opacity (`{colors.primary-hover}`), measured on the hero button.
- **Red.** `{colors.signal-red}` (`#ea2804`) is the colour of run counts ("490.5k runs"); the dotted connectors in the community illustration are also red, though I did not measure their exact value. `{colors.accent-red-text}` (`#dd4425`) on the tint `{colors.surface-tint}` (`#fffcfc`) is the label colour of outlined buttons such as "Fine-tune image models".
- **Gradient.** The hero is imagery, not a token: magenta, orange and yellow blend with a dot texture.
- **Code.** The code card uses a GitHub-like syntax palette (blue, red, navy) that is confined to the snippet and is not part of the interface tokens.

## Typography

Three families, listed in the page's loaded fonts: rb-freigeist-neue (weights 400, 600, 700) for display, basier-square (400, 600) for interface and body, and jetbrains-mono (400) for code. They are custom webfonts served by the site; I found no public Replicate brand or typography page to confirm their licensing or origin, so none is stated here. The declared fallback is `ui-sans-serif, system-ui, sans-serif` for the two sans families and `ui-monospace, SFMono-Regular, Menlo, ...` for the monospace.

Roles: `{typography.heading}` is 72px, weight 700, line-height 72px with -1.8px tracking for the hero headline (sizes of 128px and 48px also appear in the measured set); `{typography.subheading}` is 30px/600; `{typography.display}` (24px, 400, 32px line-height) is the hero sub-line and `{typography.display-mobile}` (20px/28px) its mobile size; `{typography.body}` is 20px/28px; `{typography.button}` is 18px; `{typography.nav}` is 16px; `{typography.link}` and `{typography.input}` are 14px/20px. Tight leading (line-height equal to size at 72px) and negative tracking make the headline dense and poster-like.

## Layout

The page is a centred container on a wide canvas, with sections stacked vertically. The hero's gradient is full-bleed, with the code card and the "With Replicate you can" panel sitting inside the container and overlapping the gradient's lower edge. Model cards are horizontal strips that bleed off the viewport edge in two staggered rows, signalling a scrollable catalogue, and the avatar rows are placed in a loose staggered grid. Spacing in the frontmatter runs from `{spacing.s5}` 8px to `{spacing.s10}` 28px for the compact controls inside chips, cards and inputs; section gaps are far larger and were not tokenised.

## Elevation & Depth

Almost flat. The measured roles carry no box shadows. Panels are defined by white fills against the gradient and thin 1px dark outlines (the model cards, the code card and the outlined "Push a model" button all show a visible thin border). The only translucency is the header search field's white-at-10% fill (`{colors.text-input-bg}`) and the hover darkening of the primary button. The depth in the page comes from the saturated gradient behind white panels.

## Shapes

Shape is the signature contrast. Interactive primary controls are square: `{rounded.none}` (0px) on buttons, inputs, nav and footer. Chips and tags are full pills, `{rounded.pill}` (9999px), and avatars are circles. A single small radius, `{rounded.xs}` (4px, on top corners only), is measured on top corners only (`4px 4px 0px 0px`); I did not confirm which element carries it. Cards are rectangular. Mixing square buttons with pill chips gives the page an engineered, slightly retro feel.

## Components

- **Primary button.** `{components.button-primary}`: black, white 18px label, 54px tall, `12px 16px` padding, square, 1px black border. Hover uses `{components.button-primary-hover}`.
- **Secondary button.** `{components.button-secondary}`: same black treatment at 42px tall with 16px label ("Explore models", "Get started").
- **Tint button.** `{components.button-tint}`: off-white fill with red label, 42px tall, for outlined actions ("Learn more", "Fine-tune image models").
- **Chips.** Pill-shaped with a thin outline; the active chip is filled with `{colors.ink}` and white text (`{components.chip-active}`).
- **Header search.** `{components.text-input}`: 34px tall, 14px text, generous right padding for the shortcut hint.
- **Model card.** Thumbnail on the left, owner/model name, description, red run count and "Official" badge.
- **Code card.** Tabs, a monospace script and an output image.

## Design System Architecture

No public design-system documentation for Replicate was found. I opened the company's about page (https://replicate.com/about) and its docs home (https://replicate.com/docs): the first contains no brand or visual-identity statements and the second no brand-asset or press-kit section. A web search surfaced third-party summaries of the site, which are not treated as sources. The de-facto system is utility-driven: the page root carries Tailwind-style variables (`--tw-ring-color`, `--tw-ring-shadow`) and Radix-style colour scales (`--gray-*`, `--tomato-*`, `--yellow-*`, `--green-*`, `--indigo-*`, with alpha variants), and fonts are declared through three font families. That is consistent with a component layer built from utility classes on top of a published colour scale, but I did not open any repository to confirm it.

## Do's and Don'ts

Do keep the interface white and let the gradient and model artwork provide colour. Do use square black buttons for commitments and pill chips for filters. Do set the hero headline at 72px with tight leading and -1.8px tracking. Do show real code and real model output beside claims. Do keep red for counts and secondary actions.

Don't round the black buttons. Don't use shadows. Don't put the headline on a flat white field; it belongs on the gradient. Don't use more than one saturated hue family outside imagery. Don't set body text in the display face.

## Responsive Behavior

The extraction measured a 390px viewport, where the hero sub-line steps down from 24px to `{typography.display-mobile}` (20px, 28px line-height). Other mobile behaviour (header, card strips, chip wrapping) was not measured in this pass. In the desktop capture the chip row already wraps onto a second line ("Large Language Models (LLMs)"), which shows chips are designed to wrap rather than scroll.

## Iteration Guide

Start from white, black and the two reds. Reuse the square-button recipe for new actions and the pill for any new filter or tag. For new headlines, apply the 72px/700 recipe with -1.8px tracking, and place them on the gradient. Add a new colour only if it is measured on a page; re-run the extractor on component pages before adding tokens.
