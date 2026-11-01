---
version: alpha
name: Anthropic
category: "AI"
description: "Anthropic home: ivory canvas #faf9f5 with oat page band #f0eee6, near-black ink #141413, Anthropic Sans 700 headlines at 57.7px, Anthropic Serif body and 71px display, oat #e3dacc cards with 24px radius, dark pill buttons."
colors:
  canvas: "#faf9f5"
  page-body: "#f0eee6"
  ink: "#141413"
  primary: "#141413"
  on-primary: "#faf9f5"
  primary-hover: "#3d3d3a"
  ink-faint: "#b0aea5"
  ink-hover: "#5e5d59"
  surface-card: "#e3dacc"
  ink-meta: "#21211e99"
  hairline: "#1414131a"
typography:
  display:
    fontFamily: "\"Anthropic Sans\", Arial, sans-serif"
    fontSize: 57.7306px
    fontWeight: 700
    lineHeight: 63.5037px
  display-mobile:
    fontFamily: "\"Anthropic Sans\", Arial, sans-serif"
    fontSize: 40.2939px
    fontWeight: 700
    lineHeight: 44.3233px
  heading:
    fontFamily: "\"Anthropic Serif\", Georgia, sans-serif"
    fontSize: 71.04px
    fontWeight: 400
    lineHeight: 82.1933px
    letterSpacing: "-1.0656px"
  subheading:
    fontFamily: "\"Anthropic Sans\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 31.2px
  body:
    fontFamily: "\"Anthropic Serif\", Georgia, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  link:
    fontFamily: "\"Anthropic Serif\", Georgia, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 25.2px
rounded:
  xs: 8px
  sm: 16px
  md: 24px
spacing:
  s1: 4px
  s2: 8px
  s3: 9.95px
  s4: 12px
  s5: 16px
  s6: 22.4px
  s7: 28px
  s8: 30.96px
  s9: 44.87px
  s10: 71.64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xs}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

anthropic.com presents Anthropic's research and products with the restraint of a publication. The measured page is 1280px wide and 3130px tall. A top bar carries the logo mark, a menu (Research, Policy, Commitments, Learn, News) and a split dark "Try Claude" button with a dropdown segment. The hero is an oat-colored band with the headline "AI research and products that put safety at the frontier" in bold sans at left (the words "research" and "products" are underlined) and a serif paragraph at right: "AI will have a vast impact on the world. Anthropic is a public benefit corporation dedicated to securing its benefits and mitigating its risks." Below it comes an ivory feature block announcing a model release in a large serif title with a hand-drawn-looking arc beneath it and a dark "Read more" pill; then "Latest releases" as three oat cards, each with a serif title, a short paragraph, a three-row mono-labelled metadata table (DATE, CATEGORY, DETAILS) and a dark "Read announcement" button; then a statement ("At Anthropic, we build AI to serve humanity's long-term well-being.") beside a ruled list of articles with category labels at right; then a near-black footer with a logo and four link columns (Products, Solutions, Resources, Company).

The overall voice is editorial and calm: generous whitespace, warm neutrals, no gradients, no stock illustration. Product names are set large in serif, supporting metadata in small monospace.

## Colors

The palette is warm paper-and-ink. `canvas` is {colors.canvas} (#faf9f5, called ivory-light in the page's swatch variables) and `page-body` is {colors.page-body} (#f0eee6, ivory-medium), which covers the largest background area (weight 4093). `surface-card` is #e3dacc (the page's "oat" swatch) and fills the release cards. `ink` is {colors.ink} (#141413, "slate-dark") for headlines and body; it is also the footer background and the button fill. `ink-hover` is #5e5d59 (slate-light), the measured hover color of text links, which also underline. `ink-faint` is #b0aea5 (cloud-medium, named `--swatch--text-agate`), the most frequent text color by characters (weight 1228), used for footer links and quiet labels. `ink-meta` is #21211e99 and `hairline` is #1414131a (slate-faded-10, the theme border), the 10% ink line that separates list rows and metadata rows.

Primary is reassigned from the generated gray to the dark button fill. The page's own theme variables, read from the root, define the button roles directly: `--_color-theme---button-primary--background` is slate-dark #141413, its text is ivory-light #faf9f5, and its hover background and border are slate-medium #3d3d3a. These are recorded as `primary`, `on-primary` and `primary-hover`. The generated value #b0aea5 is kept as `ink-faint`.

The stylesheet also declares a broad family of named swatches (clay #d97757, accent #c6613f, kraft #d4a27f, fig #c46686, plum #827dbd, olive #788c5d, mineral #629987, sky #6a9bcc, poppy #de6262, pencil #f0ac54 and pastel tints). They are part of the shipped palette but are not seen on this home page, so they are not promoted to tokens here.

## Typography

Three proprietary families are loaded as variable fonts (weights 300 to 800): Anthropic Sans (the most-used by characters, weight 2119), Anthropic Serif (592) and Anthropic Mono (57). The fallbacks measured in the stacks are Arial for sans and Georgia for serif.

- `display` (h1): Anthropic Sans 700, 57.7306px, 63.5037px line height.
- `heading`: Anthropic Serif 400, 71.04px, 82.1933px line height, -1.0656px tracking (the release title).
- `subheading`: Anthropic Sans 600, 24px, 31.2px line height.
- `body`: Anthropic Serif 400, 18px, 25.2px line height.
- `link`: Anthropic Serif 600, 18px.

The size distribution by characters is 12px (1331, the monospace metadata), 16px, 18px, 24px, 15px, 57.7306px, 22.4px, 71.04px and 20px. The three families are loaded as the site's own font files. As substitutes use a geometric grotesque such as Inter or Arial for Sans, Georgia for Serif and a standard monospace for Mono, which are the fallbacks the page itself declares for the first two.

## Layout

The layout is a wide single column with an asymmetrical two-column opening (headline left, paragraph right), a centered feature block, a three-column card row and a two-column statement-plus-list block. The root carries a spacing scale of `--size--*` and `--_spacing---space--*` variables (rem values and clamp() formulas, for example `--size--2rem` is clamp(1.75rem, ..., 2rem)). Measured spacing values are 4, 8, 9.95, 12, 16, 22.4, 28, 30.96, 44.87 and 71.64px. Sections alternate between the oat band, the ivory block and the near-black footer rather than being separated by lines, and the card row sits on the oat band.

## Elevation & Depth

Cards are flat; depth comes from tonal contrast (oat card on a lighter oat band, ivory block between oat bands). The CSS contains very soft layered shadows, `0 2px 2px #00000003, 0 4px 4px #00000005, 0 16px 24px #0000000a` (8 uses) and a taller stack of low-alpha shadows from 4px to 150px blur; the largest alpha is #0000000d. Neither is visible as an obvious edge in the capture, and `none` is also present. Dividers are the 10% ink hairline.

## Shapes

The measured radii are 24px (4 uses), 3px, 2px, 1600px (2 uses), 4px, 12px and 8px. The tokens keep `xs` 8px, `sm` 16px and `md` 24px. The split "Try Claude" button has an 8px radius on its left corners (reported as `8px 0px 0px 8px`); release cards use the 24px radius; the dark action buttons in the capture have fully rounded ends.

## Components

- `button-primary`: {colors.primary} fill, {colors.on-primary} text, {colors.primary-hover} on hover, 8px radius token (measured on the split nav button). The "Read more" and "Read announcement" buttons carry an arrow glyph after the label.
- `card`: {colors.surface-card} fill, 24px radius, a serif title, serif paragraph and a three-row mono-labelled table with hairline rules.
- Text links: serif 18px, {colors.ink} underlined, shifting to {colors.ink-hover} on hover (measured on "research" and "products" in the headline).
- Article list: rows ruled with the hairline, a bold sans title at left, a gray category label at right.
- `footer`: {colors.ink} background, {colors.canvas} text, link columns in muted type.

Generated link, nav and nav-link tokens were dropped: they came from a skip link with a transform and from the h1, and did not describe real components.

## Design System Architecture

No public brand-guidelines or design-system page was readable: /brand returned 404 and the press-kit page returned HTML with no readable guideline text in the response (the page is rendered client-side). The shipped site is a Next.js build. Its CSS exposes a layered theme system: raw swatches (`--swatch--slate-dark`, `--swatch--ivory-light`, ...) are mapped to semantic theme variables (`--_color-theme---background`, `---text`, `---border`, `---card`, `---link--text`, `---button-primary--background`, and secondary and tertiary button variants, each with `-hover` states), and to type and spacing variables (`--_typography---*`, `--_text-style---*`, `--_spacing---*`, `--size--*`). Source: the page at [anthropic.com](https://www.anthropic.com/). Button variants in the variable set are primary (dark fill), secondary (transparent with dark border, dark fill on hover) and tertiary (transparent, border on hover).

## Do's and Don'ts

- Do set headlines in bold sans and product titles and reading text in serif.
- Do keep the surface colors to ivory, oat and near-black, and use the 10% ink hairline for dividers.
- Do use dark pill buttons with ivory text for primary actions.
- Do put metadata in small monospace with uppercase labels.
- Don't use saturated brand swatches (clay, poppy, sky and the others) as page fills on this style of page.
- Don't add heavy shadows; cards are flat tonal blocks.
- Don't use the generated gray #b0aea5 as a button fill.

## Responsive Behavior

Measured at 390px: the h1 drops from 57.7306px to 40.2939px (line height 44.3233px, weight 700), and the serif release title drops from 71.04px to 47.94px (line height 50.337px, tracking -0.7191px). The extractor recorded no mobile navigation or column data for this page, so menu behavior and the card row at narrow width are not measured.

## Iteration Guide

1. Set the page ground to #faf9f5 with #f0eee6 bands and #141413 ink.
2. Headlines: sans 700 at 57.7306px / 63.5037px; product titles: serif 400 at 71.04px / 82.1933px, -1.0656px tracking.
3. Buttons are #141413 with #faf9f5 text and #3d3d3a on hover.
4. Cards are #e3dacc with a 24px radius and hairline rules at #1414131a.
5. Run `node web/scripts/verify-designs.mjs --slug=anthropic` after changes.
