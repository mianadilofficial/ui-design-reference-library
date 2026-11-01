---
version: alpha
name: Kajabi
category: "Design Systems"
description: "Kajabi's marketing homepage sets Haffer (400 to 600) in near-black #0a0a0a on a warm off-white #fdfdfc canvas, with a 56.5714px display headline at -1.13143px tracking, a square-cornered 2px black Start Free Trial button, and a full-width black product band whose muted warm-gray text is #bcb9ae."
colors:
  canvas: "#fdfdfc"
  page-body: "#ffffff"
  ink: "#0a0a0a"
  primary: "#0a0a0a"
  on-primary: "#ffffff"
  primary-hover: "#1f1f1e"
  ink-on-dark: "#bcb9ae"
  line-soft: "#e0dedc"
  ink-subtle: "#535250"
  nav-link-text: "#949189"
  text-input-text: "#333333"
  surface-band: "#e9e8e7"
  hairline: "#e0dedc1a"
  card-bg: "#ffffff10"
  card-border: "#ffffff26"
typography:
  display:
    fontFamily: Haffer, Arial, sans-serif
    fontSize: 56.5714px
    fontWeight: 600
    lineHeight: 62.2286px
    letterSpacing: "-1.13143px"
  display-mobile:
    fontFamily: Haffer, Arial, sans-serif
    fontSize: 37.5px
    fontWeight: 600
    lineHeight: 41.25px
    letterSpacing: "-0.75px"
  heading:
    fontFamily: Haffer, Arial, sans-serif
    fontSize: 38.5714px
    fontWeight: 600
    lineHeight: 42.4286px
    letterSpacing: "-0.771429px"
  subheading:
    fontFamily: Haffer, Arial, sans-serif
    fontSize: 27.4286px
    fontWeight: 600
    lineHeight: 32.9143px
    letterSpacing: "-0.548571px"
  body:
    fontFamily: Haffer, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Haffer, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  nav:
    fontFamily: Haffer, Arial, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
  link:
    fontFamily: Haffer, Arial, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
    letterSpacing: 5%
  input:
    fontFamily: Haffer, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 31.43px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 12px 16px
    height: 40px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
---

## Overview

Kajabi sells an all-in-one platform for experts who package knowledge into courses, coaching, communities, memberships, newsletters and podcasts. The captured homepage presents that as a confident, editorial software site rather than a playful creator tool. The first screen is a warm off-white canvas with a left-aligned four-line headline, "The all-in-one platform that turns what you know into what you earn," a one-sentence subline, an email field fused to a black "Start Free Trial" button, and three stats: $12B+ earned by experts, 100K+ businesses built, 75M+ customers served.

On the right of the hero is a tall portrait photograph of a customer with a caption line ("Justin Welsh | 8-Figure Earner", "Content Expert & Solopreneur"), overlapped by a small white product card titled "The Expert Operating System" listing lessons. A slide indicator under the photo implies a carousel of such testimonials. Above all of this runs a promotional banner with a dark teal-to-gold gradient, a "LIMITED TIME OFFER" pill, a green "See what's included" button and a four-box countdown (days, hours, minutes, seconds) set in a monospace face.

Further down the page flips polarity: a full-width near-black band holds a heading about six separate tools, tabs for product types (Newsletters, Podcasts and others) and large tinted product screenshots (a video call, a communities feed). The page ends on a light gray band with "See exactly how it works." and a second email-plus-button form with "Watch Demo".

The voice is plain and confident, built on contrast statements: "All-in-one. Because six separate tools isn't a business plan." Imagery is real people in studio portraits and UI mockups, never illustration. Black is used as both ink and action color; there is no saturated brand hue in the core UI beyond the promotional banner.

## Colors

`canvas` #fdfdfc is the page background and `ink` #0a0a0a the main text and, equally, the `primary` button fill. `page-body` #ffffff is the white used for button text, cards on dark and form fields. `on-primary` #ffffff is the label on the black button; its hover fill is `primary-hover` #1f1f1e.

On the black product band, text is `ink-on-dark` #bcb9ae, the single most-read text color in the extraction by character count, with `line-soft` #e0dedc for brighter labels. `ink-subtle` #535250 is secondary text on light, `nav-link-text` #949189 is for muted navigation and `text-input-text` #333333 is the input text color. `surface-band` #e9e8e7 is the gray background of the closing band. Dividers are `hairline` #e0dedc1a, a 10 percent warm light line, and cards over dark use `card-bg` #ffffff10 with `card-border` #ffffff26.

The site's own root variables define a neutral ladder named `--neutral--50` through `--neutral--950` (for example `--neutral--50` is #fdfdfc, `--neutral--950` is #0a0a0a) plus accent hues in blue, green, amber, gold and purple; they confirm that the canvas, ink and hover values above are the site's declared neutrals, not incidental renders. Browser default link colors (#0000ee, #551a8b) are not part of the palette.

## Typography

The family is Haffer, falling back to Arial and generic sans-serif. The page loads Haffer at 400, 500, 600 and 700, a Geist Mono face at 400 (visible in the countdown digits) and an icon font named webflow-icons. No foundry or license claim is made here because none was opened.

The scale is fluid. `display` is 56.5714px at weight 600, line height 62.2286px, letter spacing -1.13143px (the h1). `heading` is 38.5714px with -0.771429px tracking, `subheading` 27.4286px with -0.548571px, all at weight 600, so negative tracking tightens as size grows. On mobile `display-mobile` is 37.5px, line height 41.25px, tracking -0.75px. `body` is 16px at 400 with 24px line height. `button` is 16px at weight 500. `input` is 14px, `link` is 12px at 600 with 5% letter spacing, and `nav` is 10px at 400 as measured on small nav labels.

Font substitutes: Arial is the only declared fallback and is wider than Haffer, so tight display tracking should be reduced slightly if Haffer is missing.

## Layout

The layout is a wide, left-aligned grid. The header is a thin bar with the logo (a black square mark and the word "kajabi") at left, a centered nav (Products with chevron, Updates, Pricing) and Login plus a black Start Free Trial button at right. The hero uses two columns: copy on the left and a portrait on the right. Sections are separated by full-bleed background changes (off-white, black, light gray) rather than rules.

The root variables expose a 12-column system (`--column-width--1` through `--column-width--12`), site width, gutter and margin variables, and fluid `--size--*rem` steps built from `clamp()`. Measured spacing values are 4, 6, 8, 10, 12, 14, 16, 20, 24 and 31.43px.

## Elevation & Depth

Depth comes from contrast and layering, not shadow. The extractor measured no box shadow on buttons. The white "Expert Operating System" card floats over the portrait photograph, overlapping its left edge, which gives the hero its sense of stacked planes. Inside the black band, translucent cards use a faint white fill (`card-bg`) with a slightly stronger white border (`card-border`), and screenshots are dimmed with a dark scrim so the active tab stands out. The promotional banner uses a color gradient rather than elevation.

## Shapes

Shape language is sharp. The primary button radius is `xs` 2px, matching the site's `--radius--button` variable; cards use `sm` 4px, panels `md` 8px (`--radius--main` is .5rem), and `pill` 9999px is used for the "LIMITED TIME OFFER" tag. Product tabs in the dark band appear in the capture as small rectangular chips.

## Components

**button-primary**: black (#0a0a0a) rectangle, white 16px Haffer at weight 500, 12px by 24px padding, 40px tall, 2px radius, hover to #1f1f1e. It appears in the header, fused to the right end of the hero email field, and again beside the "Watch Demo" email field.

**text-input**: white field with a thin gray outline, 14px text, 12px by 16px padding, 40px tall, placeholder "Enter email...". **nav** is the canvas-colored bar with `ink` links; **nav-link** is the muted 10px label. **card** is the translucent dark-surface card. **footer** is `ink` black with white text. A "Learn More" secondary button inside the black band is a gray rectangle with dark text. The green promotional button and the countdown tiles are banner-specific and not part of the core button set.

## Design System Architecture

Kajabi publishes a design system called Sage at https://sage.kajabi.com, described on its site as the source of truth for building Kajabi experiences, with foundations, Rails and React components, layout tools and helpers. Its repository, https://github.com/Kajabi/sage-lib, is MIT licensed and ships packages `@kajabi/sage`, `@kajabi/sage-assets`, `@kajabi/sage-react`, `@kajabi/sage-system` and `@kajabi/sage-packs`.

The dsUrl is real but is not used by this marketing page: the extraction's CSS data contains no `sage-` class names, and the page's root variables follow a different convention (`--neutral--*`, `--accent--*`, `--radius--*`, `--_theme---*`, `--_button-style---*`, a `webflow-icons` font). Therefore no values were taken from Sage; this file documents the marketing site's own de-facto system, a variable-driven theme where `--_theme---button-primary--border` points at the neutral 950 value and `--_theme---button-primary--background-hover` at neutral 900. No public brand guideline for the marketing site was found to cite.

## Do's and Don'ts

Do keep the page on `canvas` #fdfdfc with black `ink` and a single black button style. Do use Haffer 600 with negative tracking for headlines. Do alternate light and near-black bands for rhythm, using `ink-on-dark` text on black. Do pair large claims with proof numbers and human portraits.

Don't round the primary button beyond 2px. Don't introduce a brand color for buttons; the promotional green belongs to the banner only. Don't add shadows to cards. Don't set light-mode `ink-subtle` text on the black band, or `ink-on-dark` on the off-white canvas. Don't treat browser default link blue as brand.

## Responsive Behavior

Typography is fluid: the h1 is built from a clamp between 2.25rem and 3.75rem in the site variables, and the extraction measured 56.5714px at the 1280px desktop width and 37.5px at 390px mobile. Section spacing uses clamp-based size variables up to 16rem. Beyond type, the mobile pass recorded no layout detail, so narrow-screen layout was not measured.

## Iteration Guide

1. Use `canvas` #fdfdfc and `ink` #0a0a0a; keep one black button.
2. Headlines in Haffer 600, tracking about -2 percent of size.
3. Buttons 40px tall, 2px radius, 12px by 24px padding.
4. Dark bands use `ink` as background and `ink-on-dark` for text.
5. Fuse the email field and the button into one outlined unit.
6. Use portraits with name, result and role captions as proof.
7. Reserve gradients and greens for time-limited promo banners.
