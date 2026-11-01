---
version: alpha
name: Groq
category: "AI & LLM Platforms"
description: "Groq's home page for its fast-inference neocloud: a warm paper #f3f3ee canvas, espresso #302b28 ink, Groq orange #f43e01 for the logo, links and a 1000px-radius outline pill, esBuild 50.498px/-1.51px statement text, komuna 16.002px uppercase mono-style labels with 1.28px tracking, and a 119.69px uppercase footer slogan."
colors:
  canvas: "#f3f3ee"
  ink: "#302b28"
  primary: "#f43e01"
  on-primary: "#ffffff"
  primary-dark: "#c23101"
  ink-graphite: "#2d2f33"
  ink-soft: "#69695d"
  hairline: "#cecebf"
typography:
  display:
    fontFamily: esBuild, "esBuild Fallback", "system-ui", "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 50.498px
    fontWeight: 500
    lineHeight: 50.498px
    letterSpacing: "-1.51494px"
  display-mobile:
    fontFamily: esBuild, "esBuild Fallback", "system-ui", "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 30.642px
    fontWeight: 500
    lineHeight: 30.642px
    letterSpacing: "-0.91926px"
  slogan:
    fontFamily: esBuild, "esBuild Fallback", "system-ui", "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 119.69px
    fontWeight: 500
    lineHeight: 113.705px
    letterSpacing: "-1.1969px"
    textTransform: uppercase
  label:
    fontFamily: komuna, "komuna Fallback", georgia, "Times New Roman", serif
    fontSize: 16.002px
    fontWeight: 100
    lineHeight: 20.8026px
    letterSpacing: 1.28016px
    textTransform: uppercase
rounded:
  pill: 9999px
spacing:
  s1: 0.7px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 14px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 56px
components:
  button-outline:
    textColor: "{colors.primary}"
    typography: "{typography.label}"
    rounded: "{rounded.pill}"
    padding: 10px 14px
    height: 32px
    borderColor: "{colors.primary}"
  button-outline-hover:
    textColor: "{colors.canvas}"
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-soft}"
    typography: "{typography.label}"
    padding: 24px 32px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.slogan}"
    padding: 56px 32px 32px
    borderColor: "{colors.hairline}"
---

## Overview

Groq sells AI inference: its page title calls it "the premier neocloud for fast inference", and the home page says it "pioneered the LPU". The measured home page is strikingly minimal for an infrastructure company — 2,568px tall at a 1280px viewport with only 79 visible elements. There are no product screenshots, no feature cards, no customer logos and no filled buttons. Instead the page is a manifesto: a single column of short, large sentences ("Every customer served. Every product sold. Every commit merged. Every agent task completed. That's inference.") set in a warm grotesque on a paper-coloured background, with small orange pixel squares scattered around the margins like a dissolving bitmap.

The capture shows: a top bar with the orange "groq" logo (with its lightning-bolt mark) on the left and uppercase monospaced-looking nav links ("PLATFORM", "BLOG", "CAREERS", "CONTACT") plus an orange outlined "START BUILDING" pill on the right; a thin announcement strip ("GROQ CLOSES $350 MILLION SERIES A, BUILDING THE WORLD'S LEADING AI INFERENCE CLOUD — READ MORE >") between two hairlines; the manifesto column; and a footer with the logo, X and LinkedIn icons in orange, the giant uppercase slogan "PREMIER NEOCLOUD FOR FAST INFERENCE" spread across the full width, and the nav repeated at the bottom.

The voice is declarative and rhythmic, built from repetition and short lines: "Training creates the possibility. Inference creates the value."

## Colors

The palette is tiny — four text colours on one background — and every value is also a named variable in Groq's CSS.

- **Canvas `#f3f3ee`** (`--color-bg` light value, `--color-utility-95-yellow`) — a warm, slightly yellow off-white, the only background colour measured on the page (4,026 by area). Header and footer share it.
- **Ink `#302b28`** — a dark warm brown-black for the manifesto text (629 characters) and the footer slogan. Groq's CSS builds its body colour from it (`--color-body` = 80% of #302b28).
- **Ink graphite `#2d2f33`** (`--color-ink`, `--color-text-primary` light value) — the colour of the announcement strip text.
- **Ink soft `#69695d`** (`--color-text-soft`, `--color-blogart-neutral-pill`) — an olive grey for nav links.
- **Primary `#f43e01`** (`--color-orange-brand`, `--color-orange-base`, `--color-text-accent`, `--color-btn-primary-bg`) — Groq orange: the logo, the "START BUILDING" pill border and text, the "READ MORE" link, social icons and the pixel squares.
- **Primary dark `#c23101`** (`--color-orange-dark`, `--color-text-link-hover`) — the declared link-hover orange.
- **On primary `#ffffff`** (`--color-btn-primary-text`) — the declared text colour for filled primary buttons.
- **Hairline `#cecebf`** (`--color-utility-81-yellow`) — the footer top border and the rules around the announcement strip.

## Typography

Two typefaces split the work cleanly:

- **esBuild** (weights 400 and 500) — a warm geometric grotesque for everything meant to be read. The manifesto sentences are 50.498px with a line height of 1 and -1.51494px tracking (-3%), weight 500. The footer slogan is 119.69px/113.705px, uppercase, -1.1969px (-1%). Groq's CSS names esBuild in its `--type-display-1-ff`, `--type-display-2-ff` and `--type-display-3-ff` variables.
- **komuna** (a variable font loaded across weights 1 to 1000) — used at 16.002px, weight 100, uppercase, with +1.28016px tracking (+8%) for every label: navigation, the announcement strip, the "START BUILDING" pill and footer links. Its thin strokes and wide tracking give it a technical, terminal-like texture. The fallback stack is georgia, "Times New Roman", serif.

There is no small body text on the home page at all: the smallest reading size is the 50.498px statement, and the labels are the only small type. Both faces are custom webfonts; the shipped fallbacks are system-ui, Helvetica Neue, Helvetica and Arial for esBuild.

## Layout

The page is one band of #f3f3ee from top to bottom. The manifesto text sits in a single 732px-wide column that starts about 121px from the left edge (content left 121px, right 1234px across the band including decorations), so it reads left-aligned and slightly off-centre rather than centred. Each sentence group is separated by a blank line; there are no images or cards between them. The header is 80px tall with 24px 32px padding; the footer has 56px 32px 32px padding and a 1px #cecebf top border.

Measured gaps include 6, 8, 16, 24, 32, 40 and 56px, plus a fluid 59.8449px; paddings include 10, 14, 16, 24, 32, 56 and 192px. Groq's CSS declares a 12-column grid (`--space-columns` 12) and fluid outer spacing (`--space-outer` clamp(1.4285714286rem, 0.7368rem + 2.1053vw, 2.2857142857rem)).

## Elevation & Depth

Completely flat. No box shadows are measured, and there is only one background colour. Separation comes from thin #cecebf hairlines (around the announcement strip and above the footer) and from scale — the jump from 16px labels to 50px statements to the 119.69px slogan. The orange pixel squares in the margins sit on the same plane as the text.

## Shapes

Only one radius is measured: 1000px on the outlined "START BUILDING" pills (2 uses), which renders as a full pill. Everything else is square: the pixel squares, the hairlines, the text blocks. The logo's lightning bolt is the only diagonal form on the page.

## Components

- **Outline pill** — "START BUILDING": transparent fill, 1px #f43e01 border, #f43e01 komuna 16.002px uppercase text at weight 100 with 1.28016px tracking, 1000px radius, 10px 14px padding, 32px tall. On hover the measured text colour changes to #f3f3ee while the border stays orange and the element's own background stays transparent (the CSS names this `--color-btn-secondary-text-hover` #f3f3ee).
- **Header** — #f3f3ee, 80px tall, 24px 32px padding; logo left; nav links in #69695d komuna uppercase; outline pill at the far right.
- **Announcement strip** — a single line of komuna uppercase in #2d2f33 between two hairlines, ending with an orange "READ MORE >" link.
- **Manifesto block** — esBuild 50.498px/50.498px, 500, #302b28, -1.51494px tracking, 732px wide.
- **Footer** — #f3f3ee with a #cecebf top border, logo and orange social icons, the full-width 119.69px uppercase slogan, and a bottom row of komuna links with "TERMS AND POLICIES" on the left and the nav plus pill on the right.

## Design System Architecture

Groq publishes no public design system or brand guidelines that we could open (https://groq.com/brand returns 404; the home page at https://groq.com/ links to Platform, Blog, Careers, Contact and the developer console, but no brand kit). The shipped CSS, however, carries a large de-facto token set: 400 root variables. Colours are layered as primitives (`--color-orange-brand` #f43e01, `--color-orange-dark` #c23101, `--color-orange-deep` #e93b01, `--color-utility-95-yellow` #f3f3ee, `--color-utility-81-yellow` #cecebf), a "vibes" palette for illustrations (`--color-vibes-green-*`, `--color-vibes-indigo-*`, `--color-vibes-plum-*`, `--color-vibes-ocean-*`, `--color-vibes-berry-*`), a "fluorescent" set (`--color-fluorescent-green` #10e68d, `--color-fluorescent-blue` #5fc0ff, `--color-fluorescent-yellow` #fdeb20), "blogart" colours for blog category art, and semantic tokens written with CSS `light-dark()` — for example `--color-bg` light-dark(#f3f3ee, #26292e), `--color-text-primary` light-dark(#2d2f33, #fff), `--color-btn-primary-bg` light-dark(#f43e01, #f43e01) — so the system is built for both light and dark schemes. Typography tokens follow a `--type-{style}-{n}-{ff|fw|ls}` pattern (`--type-display-1-ff`, `--type-sans-9-ls` -0.045em, `--type-mono-0-fw` 100). Only the light scheme was measured.

## Do's and Don'ts

**Do**
- Use the warm #f3f3ee paper background everywhere; one background colour is the whole system on this page.
- Write in short, declarative lines and set them large in esBuild at 500 with -3% tracking and a line height of 1.
- Use komuna uppercase at 16.002px, weight 100, +1.28016px tracking for every small label.
- Keep orange #f43e01 for the logo, links, icons, pixel accents and the outline pill.
- Use 1px #cecebf hairlines as the only separators.
- Finish with an oversized uppercase slogan set edge to edge.

**Don't**
- Don't add product screenshots, cards or shadows to this home page style.
- Don't use pure white or pure black; the measured page has neither.
- Don't fill large areas with orange; it is a line and accent colour here.
- Don't set long paragraphs in small body text; the measured page has none.
- Don't round anything except pills.
- Don't mix in a third typeface.

## Responsive Behavior

The extractor's 390px mobile pass recorded:
- The manifesto text at esBuild 30.642px/30.642px with -0.91926px tracking (50.498px on desktop), 350px wide.
- Mobile font sizes of 30.642px, 14.183px and 34.4502px (desktop: 50.498px, 16.002px and 119.69px).
- A 60px header with 8px 20px padding (80px with 24px 32px on desktop).
- 1 visible header link and a visible menu toggle labelled "Open menu" (6 links and no toggle on desktop).
- Content between 20px and 370px.

Breakpoint values were not measured.

## Iteration Guide

1. Set the page background to #f3f3ee and remove every other surface colour.
2. Write the content as short statements and set them in esBuild (or a warm grotesque) at 50.498px/50.498px, 500, -1.51494px, #302b28, in a 732px column.
3. Set the header and all labels in komuna (or a thin monospace) at 16.002px, 100, uppercase, +1.28016px, #69695d.
4. Add one orange #f43e01 outline pill (1000px radius, 10px 14px, 32px tall) as the call to action.
5. Scatter a few small orange squares in the margins as the only decoration.
6. Close with a #cecebf hairline and a 119.69px uppercase slogan across the full width.
7. On mobile, use the measured 30.642px statements, a 60px header and the "Open menu" toggle.
