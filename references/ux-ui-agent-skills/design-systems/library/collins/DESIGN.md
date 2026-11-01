---
version: alpha
name: COLLINS
category: "Agencies & Studios"
description: "COLLINS (wearecollins.com), the brand-and-design agency site. Warm off-white #f8f8f7 canvas with espresso-black #140700 ink, Portrait Text serif at 72px/400 for headlines and Graphik for interface text, pill buttons at 96px radius and 16px image cards."
colors:
  canvas: "#f8f8f7"
  ink: "#140700"
  primary: "#140700"
  on-primary: "#f8f8f7"
  white: "#ffffff"
  glass: "#ffffff66"
  ink-muted: "#5e5855"
  ink-input: "#d0d0c8"
  grey-80: "#cccccc"
  hairline: "#514c49"
  grey-97: "#f7f7f7"
  grey-60: "#7a7a7a"
  grey-30: "#4c4c4c"
  grey-10: "#1d1d1d"
  accent-orange: "#ff7600"
typography:
  display:
    fontFamily: "\"Portrait Text\", serif"
    fontSize: 72px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: "-1.44px"
  display-mobile:
    fontFamily: "\"Portrait Text\", serif"
    fontSize: 36.8px
    fontWeight: 400
    lineHeight: 36.8px
    letterSpacing: "-0.736px"
  heading:
    fontFamily: Graphik, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
    letterSpacing: "-0.16px"
  body:
    fontFamily: "\"Portrait Text\", serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 37.8px
    letterSpacing: "-0.72px"
  button:
    fontFamily: Graphik, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: "-0.16px"
  list-title:
    fontFamily: Graphik, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 29.4px
rounded:
  xs: 4px
  sm: 16px
  md: 96px
  lg: 160px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 12.8px
  s7: 16px
  s8: 18px
  s9: 24px
  s10: 28.8px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 24px
    height: 45px
  button-light:
    backgroundColor: "{colors.white}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 45px
  button-glass:
    backgroundColor: "{colors.glass}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 24px
    height: 45px
  program-row:
    textColor: "{colors.ink}"
    typography: "{typography.list-title}"
    padding: 32px 0px
  text-input:
    textColor: "{colors.ink-input}"
    typography: "{typography.heading}"
    height: 20px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.white}"
    padding: 128px 144px
---

## Overview

COLLINS is a brand and design agency, and its home page is a quiet editorial page that sells a position rather than a portfolio grid. The meta description reads "Make your company as valuable as it is unignorable." and the first thing on the page is a single centered serif headline, "Rewrite your worth.", on a warm off-white field (`#f8f8f7`) with the tracked uppercase wordmark "COLLINS" at the top left and a small two-line menu icon at the top right. A large rounded panel holds a hand-drawn yellow waving-hand illustration with a heavy black outline (an image, so its yellow is not a CSS token). The page then lists awards ("8x Agency of the Year" with AdAge laurels for 2019, 2020, 2021, 2023, 2024, 2025 and 2026 and a D&AD laurel for 2021), a "Programs" section ("Eleven ways we help brands find and command their unique premium."), case studies ("Design a future so irresistible, it becomes inevitable."), an "Arts & Culture" section ("Learning to see.") and a footer with a "Work with us" button and the address info@wearecollins.com.

The look is restrained: one warm near-black ink, two greys, a serif for statements and a clean grotesque for everything functional. Almost no color is spent on interface; imagery and illustration carry the color. The measured page is 1280px wide and 5102px tall, and every character on it is set in weight 400.

The tone is confident and compact: every program has a one-line slogan ("Stay Relevant. Stay Valuable.", "Don't Become the Best. Become the Only.", "Enter New Markets with an Edge.", "Make Your Next Move Your Turning Point."). The four programs listed on the home page are Brand Refresh, Reposition, Expansion and Turnaround; a link reads "All Programs (11)".

## Colors

The page declares its colors as root variables, which the extractor read back.

- **Canvas — `#f8f8f7`** (`--color-off-white`, `--color-html`, `--color-background`). The page background and the largest area by weight (6111). It is also the label color on the dark buttons.
- **Ink and primary — `#140700`** (`--color-off-black`, `--color-foreground`). A warm espresso black, the color of the headline, the statements, the primary buttons and the footer fill (area weight 2071). It is the most-read text color (296 weighted characters). The generated primary is the same value, because the page's call-to-action is a solid ink pill.
- **Muted ink — `#5e5855`** (`--color-mid-black`, `--color-mid`). The "Programs" eyebrow and the program slogans (179 characters).
- **White — `#ffffff`** (`--color-white`). Text on the dark footer (103 characters) and the fill of the light "Work with us" and "Explore" pills. A translucent white, `#ffffff66`, is the fill of the glass pill "The House of Belonging".
- **Input text — `#d0d0c8`** (`--color-mid-white`), the text color of the page's text input.
- **Greys.** `--color-grey-80: #ccc` (area weight 870), `--color-grey-97: #f7f7f7`, `--color-grey-60: #7a7a7a`, `--color-grey-30: #4c4c4c` and `--color-grey-10: #1d1d1d`. Only `#cccccc` and `#514c49` (the single measured border color) appear in a measured role.
- **Accent — `#ff7600`**, declared as `--color-brian-orange`. It appears in the stylesheet corpus (4 times) but not in any measured role on the home page, so it is documented as a declared token only.

The stylesheet also declares a focus ring, `inset 0 0 0 2px rgb(27 127 204 / .9)`, from a media-player component; it is not a brand color.

## Typography

Two self-hosted families, each loaded in a single weight. **Portrait Text** (`/fonts/portrait-text-400.woff2`, weight 400) is the voice: headline, statements and the footer links. **Graphik** (`/fonts/graphik-400.woff2`, weight 400) is the interface: eyebrows, buttons, list rows and form fields. Measured weight is 400 on all 643 weighted characters; hierarchy comes from size, family and tracking, never from bold. The root variables name the families `--font-family-primary: "Portrait Text",serif` and `--font-family-secondary: "Graphik",sans-serif`. Both are commercial faces served from the site; no substitute is documented, and the declared fallbacks are the generic `serif` and `sans-serif`.

Measured roles:

- **Display** — Portrait Text 72px / 400, line-height 72px, letter-spacing -1.44px (-0.02em): the h1 "Rewrite your worth.", also the footer's large links. On a 390px viewport it is 36.8px, line-height 36.8px, letter-spacing -0.736px.
- **Statement (`body`)** — Portrait Text 36px / 400, line-height 37.8px, letter-spacing -0.72px: "Eleven ways we help brands find and command their unique premium." On mobile it measures 29px, line-height 30.45px.
- **Eyebrow / heading** — Graphik 16px / 400, line-height 20.8px, letter-spacing -0.16px, `#5e5855` ("Programs").
- **List title** — Graphik 28px / 400, line-height 29.4px ("Brand Refresh", "Reposition").
- **Button** — Graphik 14px / 400, line-height 14px, letter-spacing -0.16px.
- **Meta** — 12px with -0.64px tracking (100 weighted characters).

The root variables give the underlying scale in rem: `--font-size-primary: 1.8125rem`, `--font-size-xl: 3rem`, `--font-size-title-lg: 1.5rem`, `--font-size-title-sm: 1.12rem`, `--font-size-paragraph: 1.12rem`, `--font-size-eyebrow: 1rem`, `--font-size-cta: .875rem` and `--font-size-meta: .75rem`, with line-heights from 1 to 1.35 and letter-spacing tokens such as `-.02em` and `-.01rem`.

## Layout

A four-column grid declared in the CSS: `--columns: 4`, `--gutter-width: 1rem`, `--grid-padding-min: 1.5rem`, `--max-width: 768px`, `--section-gap: 1.5rem` and `--section-padding: 3rem`. The grid padding is computed as `max(var(--grid-padding-min), calc((100vw - var(--max-width))/2))`. Breakpoints are `--bp-md: 768px` and `--bp-lg: 960px`. The measured header is 74px tall.

Composition: the hero is a lot of empty space around a single centered headline; the illustration panel is centered and inset from the page edges; the program list is a two-column table with the title at the left (28px) and the slogan in a second column, with a thin rule between rows and 32px of vertical padding per row. The footer is an 800px-tall dark block with 128px vertical and 144px horizontal padding, measured at 72px Portrait Text, listing Case Studies, Programs, Arts & Culture, Work with us, Team and Careers. Measured spacing values are 1px, 4px, 6px, 8px, 12px, 12.8px, 16px, 18px, 24px and 28.8px, plus gaps of 32px, 56px and 64px and paddings of 96px, 120px, 128px and 144px.

Density is low and rhythm is slow; the whole home page is a handful of full-width sections separated by space.

## Elevation & Depth

The home page is flat. The extractor recorded no box-shadow on any rendered element, and borders are limited to one measured `#514c49` border, with thin rules between list rows in the capture. The stylesheet declares shadows (`--shadow-sm: 0px 21px 13px 0px rgba(0,0,0,.06),0px 9px 9px 0px rgba(0,0,0,.1),0px 2px 5px 0px rgba(0,0,0,.11)` and a larger `--shadow-lg`) and drop-shadow variants, but their use on the home page was not measured. A `--grounding-border: .5px solid #eaeaea` is also declared. Depth on the page comes from the tonal contrast between the off-white canvas, the slightly darker beige illustration panel and the espresso footer.

## Shapes

Two shapes dominate. Buttons are full pills with 96px radius (5 measured), and images and panels use 16px (10 measured; the root variable `--border-radius: 1rem` equals it). Smaller radii are 4px (4 measured) and a single 160px radius. The generated tokens keep `xs` 4px, `sm` 16px, `md` 96px and `lg` 160px. The wordmark, rules and list rows have no radius.

## Components

- **Primary button (`button-primary`).** "Explore Programs": `#140700` fill, `#f8f8f7` Graphik 14px / 400 label, 96px radius, 0px 24px padding, 45px tall, 163px wide. The shorter "Explore" is 98px wide, otherwise identical.
- **Light button (`button-light`).** "Work with us" and a second "Explore" pill: `#ffffff` fill, `#140700` label, 96px radius, 45px tall (132px and 98px wide).
- **Glass button (`button-glass`).** "The House of Belonging": `#ffffff66` fill with white text, 96px radius, 45px tall, 227px wide, 0px 24px padding.
- **Program row (`program-row`).** Title in Graphik 28px / 400 on the left, slogan in `#5e5855` on the right, separated by thin rules; 32px vertical padding and a 1244px-wide row.
- **Text input.** Graphik 16px / 400 with `#d0d0c8` text, 185px wide and 20px tall.
- **Header.** 74px tall; the "COLLINS" wordmark and a menu icon, no visible text links in the measured header.
- **Footer.** `#140700` fill, white 72px Portrait Text links, 128px 144px padding, 800px tall.

Motion is declared in root variables: spring easings with durations of 0.667s (`--spring-common-duration`, `--spring-fast-duration`), 0.833s, 1s, 1.167s and 0.58171s, a `--view-transition-easing: cubic-bezier(.5,.3,0,1)`, and a full set of named cubic-bezier easings.

## Design System Architecture

No public brand-guideline or design-system documentation is linked from the pages opened (https://wearecollins.com/ and its entry stylesheet), so no official design system is documented. The site is a Nuxt application (assets under `/_nuxt/`, with per-component stylesheet chunks such as `MuxVideoPlayer`, `Close`, `HeadGroup`, `List` and `Card`), and its system lives in root custom properties in https://wearecollins.com/_nuxt/entry.C-olITwu.css: colors named by value (`--color-off-white`, `--color-off-black`, `--color-mid-black`, `--color-mid-white`, `--color-grey-10` to `--color-grey-97`), semantic aliases (`--color-background`, `--color-foreground`, `--color-button-background`, `--color-button-foreground`), a rem type scale with matching line-height and letter-spacing tokens per role (primary, xl, title-lg, title-sm, paragraph, eyebrow, cta, meta), grid and section-spacing tokens, shadow tokens and a large easing and spring library. The HTML root also sets `--color-background:#f8f8f7` and `--color-foreground:#140700` inline. One token carries a person's name (`--color-brian-orange`), so names do not always describe role.

## Do's and Don'ts

Do:
- Keep the canvas `#f8f8f7` and ink `#140700`; use `#5e5855` for secondary text.
- Set statements in Portrait Text 400 with tight negative tracking and Graphik 400 for everything functional.
- Use full pill buttons (96px radius, 45px tall) and 16px radius for images.
- Let space and illustration carry the page; keep sections full-width and unboxed.
- Write short, declarative slogans.

Don't:
- Don't use bold: the measured weight is 400 everywhere.
- Don't add drop shadows to components; none are measured on the home page.
- Don't use the orange `#ff7600` as an interface color: it is declared but not measured in any role.
- Don't treat the browser-default "Times" measured in the header as a brand face.
- Don't use the 2px blue focus ring from the media player as brand color.

## Responsive Behavior

Measured at 390px wide: the headline is 36.8px / 400 (line-height 36.8px, letter-spacing -0.736px) in a 342px-wide, 37px-tall block; the statement paragraph is 29px (line-height 30.45px) in a 342px-wide, 91px-tall block; the "Explore Programs" button keeps its `#140700` fill, 14px Graphik label, 96px radius, 163px width and 45px height; the header is 82px tall. Character-weighted sizes on mobile are 16px, 29px, 14px, 24px, 48px, 12px and 36.8px.

Declared in the entry stylesheet: `@media (width >= 768px)` (15 rules), `@media (width < 768px)` (9 rules) and `@media (width >= 960px)` (3 rules), plus `any-pointer: fine` and `any-pointer: coarse` blocks (9 each); the root variables `--bp-md: 768px` and `--bp-lg: 960px` use the same two widths. How the menu opens on mobile and tablet layouts were not measured. Dark mode was not measured; the page declares `--color-key: light`.

## Iteration Guide

1. Set the page to `#f8f8f7` with `#140700` text and use `#5e5855` for slogans and eyebrows.
2. Use Portrait Text at 72px / 400 with -1.44px tracking for the single hero headline (36.8px on a 390px viewport) and 36px for statements.
3. Build buttons as 96px pills, 45px tall, Graphik 14px / 400, in ink on canvas, white on dark, or translucent white over imagery.
4. Compose program lists as two columns with 28px Graphik titles, 32px row padding and thin rules.
5. Keep shadows out of components; use the declared 16px radius for images.
6. Verify with `node web/scripts/verify-designs.mjs --slug=collins`.
