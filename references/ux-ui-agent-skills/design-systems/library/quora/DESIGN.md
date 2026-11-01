---
version: alpha
name: Quora
category: "Media & Consumer Tech"
description: "Quora's logged-out home: a single white #ffffff login card with a 3px radius and #dee0e1 border over a full-bleed illustrated mural, system-UI type (-apple-system stack) at 13px and 15px, #636466 grey copy, #195faa links and a #2e69ff pill Login button."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f7f8"
  ink: "#636466"
  ink-strong: "#282829"
  link: "#195faa"
  ink-muted: "#808080"
  primary: "#2e69ff"
  on-primary: "#ffffff"
  hairline: "#dee0e1"
typography:
  display:
    fontFamily: "-apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, \"Noto Sans\", Ubuntu, Cantarell, \"Helvetica Neue\", Oxygen-Sans, sans-serif"
    fontSize: 15px
    fontWeight: 700
    lineHeight: 21px
  body:
    fontFamily: "-apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, \"Noto Sans\", Ubuntu, Cantarell, \"Helvetica Neue\", Oxygen-Sans, sans-serif"
    fontSize: 13px
    fontWeight: 400
  button:
    fontFamily: "-apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, \"Noto Sans\", Ubuntu, Cantarell, \"Helvetica Neue\", Oxygen-Sans, sans-serif"
    fontSize: 14px
    fontWeight: 500
  input:
    fontFamily: "-apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, \"Noto Sans\", Ubuntu, Cantarell, \"Helvetica Neue\", Oxygen-Sans, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 3px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 16px
  s5: 20px
  s6: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 38px
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.input}"
    height: 21px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.04) 0px 1px 1px 0px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
---

# Quora

## Overview

The measured page is `https://www.quora.com/`, titled "Quora - A place to share knowledge and better understand the world", language `en`. For a visitor who is not signed in, Quora's home page is a sign-in gate: there is no feed, only a single white card centred over a full-bleed illustrated mural. That gate is Quora's real front door, so it is the surface documented here.

The capture shows the composition plainly. Behind everything is a dense, hand-painted illustration — people of many skin tones floating, reaching, reading and climbing across rainbow ribbons, globes, books and stars, painted with visible grain in saturated yellows, blues, purples, greens and pinks over a dusty blue-grey ground. In front sits one rectangular white card with the red serif "Quora" wordmark at the top, the grey tagline "A place to share knowledge and better understand the world" beneath it, and then two columns separated by a thin vertical rule: on the left, the consent sentence and social sign-in buttons ("Continue with Google", "Continue with Facebook", "Sign up with email"); on the right, the "Login" form with Email and Password fields, "Show password", "Forgot password?" and the blue Login pill. A footer row inside the card lists About · Careers · Privacy · Terms · Contact · Languages · Your Ad Choices · Press · © Quora, Inc. 2026.

The personality is a contrast between a warm, crowded, humane illustration and a quiet, utilitarian form. The interface itself is restrained: system fonts, greys, one blue. The only expressive brand element inside the card is the wordmark.

## Colors

All colors were measured on the live page.

- **canvas `#ffffff`** — the body background and the login card surface; the most common color on screen in the capture's pixel analysis.
- **page-largest `#f7f7f8`** — the largest background by DOM area, the full-page layer behind the mural image.
- **ink `#636466`** — the most-read text color: the tagline, the consent copy, the footer links and labels. It is a mid grey, deliberately softer than black.
- **ink-strong `#282829`** — the second most-read text color: input values and the "Login", "Email" and "Password" headings.
- **link `#195faa`** — inline links "Terms of Service" and "Privacy Policy". The hover probe recorded the same color with `text-decoration: underline` added on hover, and a 1px border color of the same blue.
- **ink-muted `#808080`** — a lighter grey for minor text.
- **primary `#2e69ff`** — the Login button fill, and the border color of the focused Email field (one measured `#2e69ff` border).
- **on-primary `#ffffff`** — the Login label.
- **hairline `#dee0e1`** — the 1px border of the login card, inputs and dividers.

One more measured color lives in a shadow: `rgb(235, 240, 255) 0px 0px 0px 2px`, a pale blue 2px ring around the focused Email field, which the capture shows as a soft halo around the blue border. The red of the "Quora" wordmark is part of a logo image and was not measured as a CSS color; do not invent a hex for it.

## Typography

Quora's gate uses no web fonts — the loaded-font list is empty. Every element is set in the system stack `-apple-system, system-ui, "system-ui", "Segoe UI", Roboto, "Noto Sans", Ubuntu, Cantarell, "Helvetica Neue", Oxygen-Sans, sans-serif`, so the page renders in San Francisco on Apple devices, Segoe UI on Windows and Roboto on Android. The wordmark is the only serif on the page, and it is artwork, not text.

- **display** — 15px / 700 / 21px. The tagline, the largest text on the page and the element the extractor promoted to the headline.
- **body** — 13px / 400. The most-read size (220 measured characters): consent copy, social button labels, "Forgot password?", footer links.
- **button** — 14px / 500. The Login button label.
- **input** — 15px / 400 / 21px. Typed values and placeholders ("Your email", "Your password").

Only three sizes were measured (13px, 15px, 14px) and three weights (400, 700, 500). There is no large display type; the hierarchy is carried by weight and colour, not size. The extractor recorded a root variable `--dynamic-font-scale: 1`, which shows the type is wired to a scale multiplier.

## Layout

At 1280px the page is a single 800px-tall viewport — the scroll height equals the window. The extractor saw one band covered by media (the mural) with a content area from x=290 to x=990, i.e. a 700px-wide card centred in the window, and two columns inside it. The capture confirms: a centred card, a 50/50 split between the social sign-in column and the email login column, and a shared footer row.

Measured spacing values are few and regular: paddings of 8px (9 uses), 16px (3), 24px (2), 10px and 20px; one 4px gap. The Login button pads `0px 20px`. Generous whitespace sits around the wordmark and tagline above the columns, and the columns themselves are compact, with each control stacked closely beneath its label.

## Elevation & Depth

The card floats over the illustration with very little shadow. The measured shadows are:

- `rgba(0, 0, 0, 0.04) 0px 1px 1px 0px` — the login card's shadow, a barely visible 1px drop.
- `rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset` — a 5% inset ring on one element.
- `rgb(235, 240, 255) 0px 0px 0px 2px` — the focus halo on the active input.

Separation from the busy background comes from the solid white fill and the `#dee0e1` border, not from a heavy shadow. There is no blur or scrim behind the card; the mural runs at full saturation.

## Shapes

Two radii were measured. `3px` (5 elements) on the card, the inputs and the social buttons — nearly square corners that read as practical and newspaper-like. `1000px` (2 elements) on the Login button, a full pill; it is stored as `pill: 9999px` because any radius that large renders identically. The contrast is intentional: everything structural is squared off, and the single action is round.

## Components

- **button-primary (Login)** — `#2e69ff` fill, `#ffffff` 14px/500 label, `0px 20px` padding, 38px tall, full pill. In the capture it appears pale blue before the fields are filled in; its disabled styling was not measured separately.
- **social sign-in buttons** — white rectangles with the `#dee0e1` hairline and 3px corners, each with a brand icon at left and a 13px grey label ("Continue with Google", "Continue with Facebook").
- **text-input** — 15px/400/21px `#282829` value, placeholder in grey, `#dee0e1` border and 3px corners at rest; the focused field shows a `#2e69ff` border with the 2px `rgb(235, 240, 255)` ring.
- **card** — `#ffffff`, 1px `#dee0e1` border, 3px radius, `rgba(0, 0, 0, 0.04) 0px 1px 1px 0px` shadow.
- **link** — `#195faa`, no underline at rest, underline on hover (measured).
- **footer row** — 13px grey links separated by middle dots, centred inside the card under a hairline.

## Design System Architecture

No public design system, token package or brand guideline from Quora was found. The company pages tried — https://www.quora.com/about and https://www.quora.com/press — returned HTTP 403 to the fetch tool, and the measured home page links to no design or brand resource.

The de-facto system visible in the shipped page is minimal: one root custom property (`--dynamic-font-scale: 1`), a native system font stack instead of a brand typeface, a grey text ramp (`#282829`, `#636466`, `#808080`), one action blue (`#2e69ff`), one link blue (`#195faa`), one border grey (`#dee0e1`) and two radii (3px and pill). The illustration does the brand work; the components stay generic.

## Do's and Don'ts

**Do**
- Centre a single white card with a 3px radius and a `#dee0e1` border over full-bleed artwork for entry screens.
- Use the system font stack; keep sizes between 13px and 15px for forms.
- Reserve `#2e69ff` and the pill shape for the one primary action.
- Use `#195faa` for inline text links and underline them on hover.
- Give focused inputs the `#2e69ff` border plus the pale `rgb(235, 240, 255)` 2px ring.
- Let the illustration be colourful and crowded; keep the interface calm.

**Don't**
- Don't round the card or inputs beyond 3px; only the primary button is a pill.
- Don't add heavy shadows or a dark scrim over the mural.
- Don't use pure black for copy; the measured inks are `#282829` and `#636466`.
- Don't introduce a web font for UI text; the gate uses none.
- Don't recolour the wordmark from the blue palette; it is a separate artwork asset.

## Responsive Behavior

The extractor's mobile pass at 390px recorded the same three text sizes (13px, 15px, 14px), the tagline still the largest text at 15px/700/21px in `#636466`, zero visible header links and no menu toggle, and a maximum of two card columns. The mobile bands measured a thin 3px `#83999a` strip, a 168px media band (the mural), then a 564px white band running from x=12 to x=376 — the login card nearly edge to edge — followed by another media band. The internal arrangement of the two columns at 390px was not measured.

## Iteration Guide

1. Start from the gate: full-bleed illustration, one white `#ffffff` card, 1px `#dee0e1` border, 3px radius, `rgba(0, 0, 0, 0.04) 0px 1px 1px 0px` shadow.
2. Set every UI string in the system stack. Tagline 15px/700, controls 14–15px, small print 13px.
3. Colour copy `#636466`, strong labels and values `#282829`, links `#195faa`.
4. Make the Login button a `#2e69ff` pill, 38px tall with `0px 20px` padding and a white 14px/500 label.
5. Use 8px, 16px and 24px as the spacing rhythm inside the card.
6. On focus, swap the input border to `#2e69ff` and add the 2px `rgb(235, 240, 255)` ring.
7. Check against the capture: the page should read as artwork first and a quiet form second.
