---
version: alpha
name: Hut 8
category: "Product & SaaS"
description: "Hut 8 (hut8.com) measured: a #080808 off-black canvas over full-bleed industrial footage, ITC Franklin Gothic Std 400/500 with negative tracking (60px/-1.8px headings, 14px body), off-white #f8f8f8 text, a #b3ff00 bright-green accent, square corners and no shadows or borders."
colors:
  canvas: "#080808"
  ink: "#888888"
  primary: "#f8f8f8"
  accent-green: "#b3ff00"
  ink-faint: "#666666"
  black: "#000000"
  ink-translucent: "#f8f8f899"
  ink-light: "#e8e8e8"
typography:
  display:
    fontFamily: "\"ITC Franklin Gothic Std\", sans-serif"
    fontSize: 30px
    fontWeight: 500
    lineHeight: 30px
    letterSpacing: "-0.3px"
  display-mobile:
    fontFamily: "\"ITC Franklin Gothic Std\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: "-0.14px"
  heading:
    fontFamily: "\"ITC Franklin Gothic Std\", sans-serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 66px
    letterSpacing: "-1.8px"
  body:
    fontFamily: "\"ITC Franklin Gothic Std\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
    letterSpacing: "-0.28px"
  input:
    fontFamily: Arial
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.32px"
rounded:
  xs: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 15px
  s7: 17px
  s8: 24px
  s9: 25px
  s10: 48px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
  text-input:
    textColor: "{colors.primary}"
    typography: "{typography.input}"
    padding: 4px 16px 4px 0px
    height: 32px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 24px 0px 0px
---

## Overview

Hut 8 describes itself on the measured page as an "Energy Infrastructure Platform": "Hut 8 develops and operates an integrated portfolio of power, digital infrastructure, and compute assets purpose-built to fuel the world's most transformative technologies." The page is a long (35717px desktop scroll height), dark, cinematic scroll. The first screen is a full-bleed overhead video still of an industrial structure with a huge white radial mark (the logo) at upper left, the wordmark "Hut 8" at left, the headline "Where Power Unlocks Potential" at centre, a "Learn More" link with a down arrow at right, and a small white rounded menu control at top right showing "Hut 8" and a two-line hamburger. A hairline with a white tab marks the section edge.

The tone is corporate and engineering-led. Copy is declarative ("We take a power-first, innovation-driven approach to develop...", "We own, operate, and scale purpose-built businesses that acq...", "We acquire, develop, and manage critical energy..."), sections are labelled by business ("Power", then others), and the footer invites visitors to "Sign up for our latest announcements". A counter reading "100%" is the first text in the page; its role is not measured, so it is not documented as a component.

Below the first screen the capture shows only the #080808 canvas: lower sections were not rendered in the screenshot, so their imagery is not described.

## Colors

- **Canvas** `#080808` ("off-black", `--color-off-black`) is the dominant background by far (7545 area units).
- **Primary / ink-on-dark** `#f8f8f8` ("off-white", `--color-off-white`) is the colour of headline links and footer text (809 characters) and the fill of the white menu control (1801 background units).
- **Ink** `#888888` is the most-read text colour (858 characters), used for paragraphs on the dark ground (`--color-grey-400`).
- **Ink light** `#e8e8e8` (`--color-grey-100`) colours the h1-like wordmark, h2 and body element text.
- **Ink faint** `#666666` (402 characters, `--color-grey-600`) and `#a8a8a8` (`--color-grey-175`) are the other greys; `#f8f8f899` is a 60 percent off-white for secondary text.
- **Black** `#000000` text (358 characters) sits on the white menu control.
- **Accent green** `#b3ff00` (`--color-bright-green`, 545 background units; the lighter `--color-bright-green-lt` is `#baff1a`) is the only saturated colour in the data. Other declared accents are `--color-bright-blue` `#30f` and `--color-sage-green` `#bcbfb0`.
- The grey ramp is declared as `--color-grey-100` (#e8e8e8), 150 (#d8d8d8), 175 (#a8a8a8), 200 (#686868), 300 (#999), 400 (#888), 500 (#787878), 600 (#666), 700 (#454545).

Borders: none measured (the border colour list is empty). Contrast between the three text tones is the main hierarchy device: light `#e8e8e8` or `#f8f8f8` for titles and links, mid grey `#888888` for paragraphs, and darker `#666666` for the least important captions on the near-black ground, while the translucent `#f8f8f899` handles overlays on photography.

## Typography

One family: **ITC Franklin Gothic Std**, loaded at 400 and 500, declared as `--font-family-primary` with a sans-serif fallback. Form inputs fall back to Arial. Tracking is consistently negative and proportional (-0.01em on 30px = -0.3px; -0.03em on 60px = -1.8px; -0.02em on 14px = -0.28px).

| Role | Measured |
|---|---|
| Display (wordmark/h3) | 30px / 500 / 30px, -0.3px; 14px / 500 / 14px, -0.14px at 390px |
| Heading (h2) | 60px / 400 / 66px, -1.8px; 26px / 400 / 28.6px at 390px (-0.78px) |
| Body | 14px / 400 / 18.2px, -0.28px, colour #888888; 16px / 400 / 20.8px at 390px |
| Input | Arial 16px / 400 / 24px, -0.32px |
| Footer | 18px / 500 / 23.4px |

Declared scale tokens: `--font-size-heading-1` 130px (255px at the lg/md steps), `--font-size-heading-2` 60px (100px at lg/md), body steps from 60px down to 12px. By characters the page uses 14px (1826), 16px (514), 36px (98), 32px (84), 18px (70), 30px (38), 100px (38) and 44px (28). Weights: 400 (1641), 500 (1079).

## Layout

The desktop pass is 1280px wide. The header region sits over the hero with the logo at left and a compact menu control at right; the hero places wordmark, headline and link on one baseline row beneath a hairline, three columns across the full width, with a small paragraph block at lower left. Spacing tokens measured: 2, 4, 5, 8, 10, 15, 17, 24, 25 and 48px, and root variables include `--space-16` and `--space-196`, indicating a named spacing scale with a very large top step.

## Elevation & Depth

The measured data contains no elevation scale at all, so a faithful reproduction should keep every surface flat and let the footage do the layering. None measured: the box-shadow list is empty and there are no borders. Depth is optical: video behind the text, dark vignette in the circular opening, and a white menu control floating on the footage.

## Shapes

Radii measured: 50% (5 elements, circular dots and marks) and 50px (1 element, the menu control). The generated tokens keep `xs` 50px and `pill`. Everything else renders with a 0px radius, so photography and sections are full-bleed rectangles.

## Components

- **Menu control**: white (#f8f8f8) pill with black "Hut 8" text and a hamburger icon, at top right. Its overlay (the main navigation) was hidden by the extractor, listed as `consentOverlaysHidden: main-menu`; its contents were not measured.
- **Text link**: off-white, 30px/500 with -0.3px tracking for large section links; "Learn More" is a small bold link with an arrow.
- **Text input** (newsletter): Arial 16px, off-white text, padding 4px 16px 4px 0, height 32px, no border or radius.
- **Footer**: `#080808` background, off-white text, padding-top 24px, "Hut 8 Corporation" and "Sign up for our latest announcements".
- No filled button, card or tag was detected by the extractor.

## Design System Architecture

No public design-system or brand-guideline page was linked or searched. The shipped CSS holds a large named token layer (269 custom properties on `:root`) from https://www.hut8.com/, which is the de-facto system: `--color-*` (off-black, off-white, grey 100-700, bright green, bright blue, sage green), `--font-family-primary`, `--font-size-heading-N` and `--font-size-body-N` each with `-lg` and `-md` variants, `--letter-spacing-body-N` and `--letter-spacing-quote-N` (with -lg/-md variants), `--space-N`, and `--theme-color-accent`. The naming (heading/body/label/quote, each with responsive suffixes) shows a typography system authored as tokens with separate large-screen steps, though breakpoints themselves were not measured.

## Do's and Don'ts

- Do keep the page near-black (#080808) with off-white (#f8f8f8) and grey (#888) text.
- Do use ITC Franklin Gothic Std at 400/500 and apply negative tracking proportional to size.
- Do use imagery of real infrastructure at full bleed and place text directly on it.
- Do use `#b3ff00` sparingly as the single saturated accent.
- Don't add shadows, borders or rounded cards; none were measured.
- Don't introduce serif or display faces.
- Don't document the loading counter or menu overlay as page content.

## Responsive Behavior

Measured at 390px: wordmark 14px/500, h2 26px/400 with 28.6px line-height and -0.78px tracking, body 16px/400 with 20.8px line-height. Most-used mobile sizes are 16px (1159 characters), 14px (981), 12px (118), 24px (84), 60px (38) and 36px (36). No mobile primary button or nav was detected. Layout reflow and menu behavior beyond this were not measured.

## Iteration Guide

1. Start from `canvas` #080808 and set text in ITC Franklin Gothic Std; headings 60px/400 with -1.8px tracking.
2. Use `ink` #888888 for paragraphs at 14px/18.2px and `primary` #f8f8f8 for links and footer.
3. Put footage or industrial photography full-bleed under the first screen.
4. Use `accent-green` #b3ff00 as the only accent colour.
5. Use 0px radii except circular marks (50%) and the 50px menu control.
6. Add nothing that is not in the frontmatter, and mark unmeasured behaviors "not measured".
