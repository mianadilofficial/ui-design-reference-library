---
version: alpha
name: Mikki Sindhunata
category: "Culture & Events"
description: "Mikki Sindhunata portfolio (mikkisindhunata.com) measured: full-bleed dark film still over #000000 with #e8e8e8 text, Anton SC uppercase display at 64px, B612 Mono 9.6px uppercase labels, outlined 24px-radius nav buttons 36px tall, pill play control."
colors:
  canvas: "#1e1e1e"
  page-largest: "#000000"
  ink: "#e8e8e8"
  primary: "#e8e8e8"
typography:
  display:
    fontFamily: "\"Anton SC\", sans-serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 58.88px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Anton SC\", sans-serif"
    fontSize: 47.0691px
    fontWeight: 400
    lineHeight: 43.3036px
    textTransform: uppercase
  link:
    fontFamily: "\"B612 Mono\", monospace"
    fontSize: 9.6px
    fontWeight: 400
    lineHeight: 12px
    textTransform: uppercase
rounded:
  xs: 24px
  sm: 25.6px
  md: 28px
  pill: 9999px
spacing:
  s1: 8px
  s2: 16px
  s3: 24px
  s4: 32px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 36px
    borderColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  footer:
    textColor: "{colors.ink}"
---

# Mikki Sindhunata

## Overview

This file documents the home page measured at `https://mikkisindhunata.com/`, titled "Mikki Sindhunata" (language `en-US`), the portfolio of a director who, in the site's own words, is "rooted in the dance world" and has "developed a sensitive directing style and a performative film language. Moving beyond dance as pure form to embrace its power as a narrative tool." The page is one full-screen film stage: a looping dark still or video of a group of dancers in a warehouse fills the viewport; the director's name is set in two halves, "MIKKI" at the top left and "SINDHUNATA" at the top right, with a small "MI KKI" monogram at the top center. Pill buttons "Home", "Works" and "Archive" sit at the top left and "About" and "Contact" at the top right. A text block at the left reads "DIRECTOR" next to the biography paragraph and a "READ MORE" link. At the center is a concentric outlined "PLAY" control; at the right is a slide indicator "01 – 04 ECCO LEATHER – EL3 MOTION" with a progress bar and previous/next round arrows. The footer line reads "©2026 MIKKI SINDHUNATA" next to two overlapping white circles and a "COOKIES" link.

The design is a monochrome, cinema-first interface. Chrome is intentionally minimal: a tiny uppercase monospace label size, white outlines, and a heavy condensed display face for the name. All color comes from the footage, which is dark, desaturated and slightly cool, with a blue floor marking visible in the capture.

## Colors

The measured palette has only four values:

- `{colors.page-largest}` #000000: the dominant background by area (weight 2,048) behind and around the media.
- `{colors.canvas}` #1e1e1e: the declared page color; it measured at zero area because the media layer covers it, and it is also the text color of 4 characters (dark label text on the light "Home" pill).
- `{colors.ink}` #e8e8e8: text, outlines and fills (321 characters; the light pill background has weight 45), also assigned as `{colors.primary}` because the interface has no separate accent. The only action color is the same off-white.
- A translucent white (#ffffff33) appears as a background (weight 12) for the round arrow controls.

The theme root variables belong to WordPress presets and a consent plugin (`--wp--preset--color--vivid-purple` #9b51e0 and so on, `--cmplz_*` sizes); they are framework defaults, not brand colors, and are not tokenized.

## Typography

Three faces are loaded: `Anton SC` (400; the display), `B612 Mono` (400; all small labels and the paragraph, 297 characters) and `Poppins` (900 and 500; 13 characters), plus an `icomoon` icon font. No foundry or license page was opened.

`{typography.display}` is Anton SC 64px, weight 400, line-height 58.88px, uppercase, for the name halves; on the 390px mobile pass it is 47.0691px with 43.3036px line-height (`{typography.display-mobile}`). `{typography.link}` is B612 Mono 9.6px/12px, uppercase, for navigation labels, the "READ MORE" link, the slide caption and the biography text. Character-weighted desktop sizes: 9.6px (310) and 64px (15). Weights: 400 (303), 900 (13), 500 (9). No letter-spacing was measured.

## Layout

The layout is a fixed 1280-wide by about 600px-tall stage with elements pinned to edges and centered media. Top row: left cluster of three pill buttons, centered monogram, right cluster of two pill buttons. Directly beneath it the two halves of the name align to the left and right edges. A narrow information block sits at the left, vertically near the middle, with a bold role label ("DIRECTOR") and the biography paragraph to its right. The slide counter and progress bar sit at the right edge at the same vertical position as the text block, mirroring it. The footer line is pinned to the bottom left.

The spacing tokens are `{spacing.s1}` 8px, `{spacing.s2}` 16px, `{spacing.s3}` 24px and `{spacing.s4}` 32px. Measured paddings by frequency: 16px (11), 24px (5), 8px (2), 32px (1). The pill buttons have `0 16px` padding.

## Elevation & Depth

No box shadows were measured (the shadow list is empty). Depth comes entirely from the footage and from layered translucency: dark scrim-like grading over the video, outlined controls, and a translucent white (#ffffff33) fill for small arrow buttons. The WordPress preset `--wp--preset--shadow--outlined` exists in the root variables but is a framework default and no element was recorded using it.

## Shapes

Radii measured: 24px (6 elements), 28px (6), 50% (6), 25.6px (2). Tokens: `{rounded.xs}` 24px, `{rounded.sm}` 25.6px, `{rounded.md}` 28px and `{rounded.pill}` 9999px. In practice every control is a pill or a circle: nav buttons at 24px radius on a 36px-tall box, the concentric play ring, the round arrow buttons and the two white circles in the footer. Nothing on the page is a sharp-cornered box except the media itself.

## Components

- **Navigation button** (`button-secondary`): outlined pill, 36px tall, `0 16px` padding, 24px radius, 1px solid `{colors.ink}` border, `{colors.ink}` text in `{typography.link}` (B612 Mono 9.6px uppercase). The "Home" pill in the capture is filled with the light color and has dark text (`{colors.canvas}`), indicating the current page; the other pills are outline-only. A transform matrix(1,0,0,1,0,0) (identity) was recorded on the button; no motion was measured.
- **Link** (`link`): "READ MORE" in `{colors.ink}`, 9.6px/12px uppercase monospace.
- **Play control**: concentric outlined pills around the word "PLAY"; shape from the capture only.
- **Slide counter**: "01 – 04", a caption, a thin progress bar and two circular arrow buttons.
- **Footer** (`footer`): `{colors.ink}` text over the media, copyright plus a COOKIES link; the cookie link and consent plugin are not brand UI.

No primary filled CTA was detected and none is declared.

## Design System Architecture

No public design system or brand guideline exists on the site. The home page links to `/about/` and to the WordPress theme stylesheet `wp-content/themes/mikki/style.css`; the about page was opened and returned only WordPress preset variables and no brand guidance. The de-facto system is a custom WordPress theme named "mikki" with core block-editor presets (`--wp--preset--font-size--large` 36px and the default preset colors and gradients), a Complianz consent plugin (`--cmplz_*` variables), and three font families. The identity itself is defined by only a few rules: two display and mono families, one off-white, black behind everything, pills and circles for controls.

## Do's and Don'ts

- Do let full-bleed footage fill the viewport and keep UI to outlines and tiny uppercase mono labels.
- Do set the name in Anton SC uppercase at 64px (`{typography.display}`), split to opposite corners.
- Do use `{colors.ink}` for all outlines, text and active fills over `{colors.page-largest}`.
- Do use pills (24px radius at 36px height) and circles for every control.
- Don't add colors; the measured palette has none besides the off-white, the near-black and black.
- Don't add drop shadows; none were measured.
- Don't document the WordPress preset colors (purple, pink and gradients) or the cookie controls as brand tokens.
- Don't enlarge label text; the entire interface runs at 9.6px.

## Responsive Behavior

At 390px wide the name is Anton SC 47.0691px/43.3036px uppercase (`{typography.display-mobile}`) in a block 350px wide and 43px tall. Character-weighted sizes at that width: 13.4472px (49), 60.5163px (28), 9.4146px (22) and 47.0691px (15), so the small label size drops from 9.6px to 9.4146px and a 60.5163px element appears that was not on desktop (its role was not identified). Navigation arrangement, the play control and the media crop on mobile were not measured.

## Iteration Guide

1. Put full-bleed media on `{colors.page-largest}`; overlay text in `{colors.ink}`.
2. Use `{typography.display}` for the name and `{typography.link}` for every other string.
3. Make controls from `{rounded.xs}` pills with a 1px `{colors.ink}` outline; fill the active one with `{colors.ink}` and dark text.
4. Keep spacing on `{spacing.s1}` to `{spacing.s4}` (8, 16, 24, 32px).
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=mikki-sindhunata --url=https://mikkisindhunata.com --force --no-motion` before changing values; if motion detail is needed, run the extractor without `--no-motion`.
