---
version: alpha
name: Material Minimal
category: "Design Systems"
description: "Material Minimal is MDBootstrap's own refinement of Google Material Design, shown on material-minimal.com as a white canvas with a pale blue-grey wash, Roboto throughout (56px bold display at -1.4px tracking, 16px body), a single cobalt blue primary #3b71ca, pill CTAs with a 160px radius and 12px uppercase labels, and soft layered shadows on 16px-radius cards."
colors:
  canvas: "#ffffff"
  page-largest: "#eff2f6"
  ink: "#757575"
  primary: "#3b71ca"
  on-primary: "#ffffff"
  surface-strip: "#dfe4ec"
  ink-strong: "#4f4f4f"
  ink-nav-muted: "#0000008c"
  primary-hover: "#386bc0"
  nav-link-text: "#000000e6"
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 56px
    fontWeight: 700
    lineHeight: 67.2px
    letterSpacing: "-1.4px"
  display-mobile:
    fontFamily: Roboto, sans-serif
    fontSize: 34.13px
    fontWeight: 700
    lineHeight: 40.956px
    letterSpacing: "-0.85325px"
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: Roboto, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
    textTransform: uppercase
  nav:
    fontFamily: Roboto, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
rounded:
  xs: 4px
  sm: 12px
  md: 16px
  lg: 160px
spacing:
  s1: 1px
  s2: 8px
  s3: 9px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 28px
  s9: 30px
  s10: 35px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 10px 24px 8px
    height: 36px
    boxShadow: rgb(59, 113, 202) 0px 4px 9px -4px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 24px 8px
    height: 36px
    boxShadow: rgb(59, 113, 202) 0px 4px 9px -4px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 24px 8px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav-muted}"
    padding: 9px 0px 8px
    boxShadow: rgba(0, 0, 0, 0.07) 0px 0px 3px 0px, rgba(0, 0, 0, 0.04) 0px 2px 2px 0px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 1px 0px 4.8px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.16) 0px 2px 15px -3px, rgba(0, 0, 0, 0.1) 0px 10px 20px -2px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
---

## Overview

Material Minimal is a design system published by MDBootstrap, whose footer credit on material-minimal.com reads "© 2023 Copyright: MDBootstrap.com". The site's own about page describes it as an improved version of Google's classic Material Design and as "a golden mean between the naturalness of the real world and the functionality necessary in the digital world". The homepage is therefore both a brand page and a manifesto: a tall white canvas whose upper-right corner is washed with a pale blue-grey curve (`{colors.page-largest}`), a bold blue title, and an argument that good design follows learnable rules.

The page opens with the product name set in `{colors.primary}` (cobalt blue) at 56px, weight 700, with a tight -1.4px tracking, and the tagline "Design less, impact more" set underneath in the muted grey `{colors.ink}`. Below it sits the signature demonstration: two bicycle-listing cards shown side by side separated by a bold "vs." — a flat, boxed table of specs on the left (the "ugly" version) against a rounded, airy card with a price, three small attribute icons and a seller row on the right (the "beautiful" version). Beside them a white rounded panel asks "What makes some designs ugly and others beautiful?" with the words "ugly" and "beautiful" highlighted in the primary blue, then closes with a single pill button, "START LEARNING".

**Key Characteristics:**
- One brand hue: cobalt `{colors.primary}` for the title, inline emphasis, links and every filled button.
- Roboto in every role; hierarchy comes from weight (700 title, 500 uppercase button) and size, not from a second family.
- Soft, layered shadows instead of borders: the nav bar, cards and buttons all float on diffuse blurred shadows.
- Generous whitespace, centred section headings and short, plain-language microcopy that talks to a learner.
- Three implementation tiles (Bootstrap, Tailwind, Figma) on pale blue-tinted rounded squares, each with a text link "GET STARTED".

## Colors

The palette is deliberately small. `{colors.canvas}` (#ffffff) is the page; `{colors.page-largest}` (#eff2f6) is the largest tinted area, seen as the curved wash behind the hero and as the newsletter band above the footer; `{colors.surface-strip}` (#dfe4ec) fills the copyright strip at the very bottom and the icon tiles are of the same pale blue family.

Text uses three greys plus the brand blue. `{colors.ink}` (#757575) is the most-read colour, used for the tagline and the implementation descriptions. `{colors.ink-strong}` (#4f4f4f) is the Material Minimal body colour for section headings and card text; it is also the value MDBootstrap's published stylesheet exposes as its dark grey. The navigation uses translucent black (`{colors.ink-nav-muted}` on the bar, `{colors.nav-link-text}` on links), so link contrast shifts with whatever sits behind it.

`{colors.primary}` (#3b71ca) is the only chromatic colour. The MDBootstrap documentation lists the same value as its Primary theme colour (alongside Secondary #9FA6B2, Success #14A44D, Danger #DC4C64, Warning #E4A11B, Info #54B4D3, Light #FBFBFB and Dark #332D2D), but the Material Minimal homepage itself uses only the primary. On hover a filled button darkens to `{colors.primary-hover}` (#386bc0), and in the docs the shadow also spreads wider.

## Typography

Roboto, with a generic sans-serif fallback, is the only family used on the homepage, so no substitute is needed.

- **Display** (`{typography.display}`): 56px / 67.2px, weight 700, letter-spacing -1.4px. It becomes 34.13px / 40.956px with -0.85325px tracking on a 390px mobile viewport, keeping the same -2.5% proportion.
- **Body** (`{typography.body}`): 16px / 25.6px (a 1.6 ratio), weight 400.
- **Button** (`{typography.button}`): 12px / 18px, weight 500, uppercase. All buttons and text links such as "GET STARTED" share it.
- **Nav** (`{typography.nav}`): 20px / 32px, weight 400, used for the top links Bootstrap, Tailwind, Figma and Learn.

Section headings such as "Material Minimal implementation" are bold, centred and set in the darker grey. Emphasis inside body copy is made by recolouring words to the primary blue rather than by italics.

## Layout

The page is a single centred column. The hero is left aligned: title and tagline hug the left margin, and the comparison row spreads three items (flat card, "vs.", rounded card, text panel) across the width. The implementation section switches to three equal centred columns, each stacking icon tile, bold name, two to three lines of grey description and a small link. A full-width newsletter band and a thinner copyright strip close the page.

The spacing scale in the tokens (`{spacing.s2}` 8px, `{spacing.s5}` 12px, `{spacing.s6}` 16px, `{spacing.s7}` 24px, `{spacing.s9}` 30px, `{spacing.s10}` 35px) is what the CSS actually uses; the button's 24px horizontal and 10px / 8px vertical padding is the most recurrent. Section gaps are large relative to content, which is the visible expression of the "needs to breathe" principle.

## Elevation & Depth

Depth is the system's defining effect and comes from shadows rather than strokes. The navbar uses a very faint two-layer shadow (`rgba(0, 0, 0, 0.07) 0px 0px 3px 0px` and `rgba(0, 0, 0, 0.04) 0px 2px 2px 0px`). Cards use a larger pair: `rgba(0, 0, 0, 0.16) 0px 2px 15px -3px` and `rgba(0, 0, 0, 0.1) 0px 10px 20px -2px`. Buttons carry a coloured shadow, `rgb(59, 113, 202) 0px 4px 9px -4px`, the same hue as their fill, which reads as a glow beneath the button.

On hover, MDBootstrap's measured primary button changes its shadow to `rgba(56, 107, 192, 0.3) 0px 8px 9px -4px, rgba(56, 107, 192, 0.2) 0px 4px 18px 0px`, lifting the control. The about page frames this as "natural" elements such as shadows and gradients, balanced against minimalism that leaves room for content.

## Shapes

Radii are tiered by role. `{rounded.xs}` (4px) is the Bootstrap default used on docs buttons and links; `{rounded.sm}` (12px) and `{rounded.md}` (16px) round cards and tiles; `{rounded.lg}` (160px) makes the hero and newsletter CTAs full pills. On the homepage the CTA is the pill; in the MDBootstrap docs the same primary button measures 4px, so the system supports both a pill and a soft-rectangle button.

## Components

**Primary button.** `{components.button-primary}`: `{colors.primary}` fill, white 12px uppercase label, 36px tall, `10px 24px 8px` padding, `{rounded.lg}` and a matching coloured shadow, often ending with a chevron glyph ("START LEARNING ›", "JOIN OUR MAILING LIST NOW »"). The hover state is `{components.button-primary-hover}`.

**Secondary button.** Identical colours and padding but `{rounded.xs}`, for denser contexts.

**Text link.** Primary-blue 12px uppercase label, no fill ("GET STARTED").

**Navigation.** A white bar with a tiny blue "M" logo at the left, four text links and a Twitter glyph separated by a thin vertical rule at the right.

**Card.** White, `{rounded.md}`, large layered shadow, `{colors.ink-strong}` text. The comparison card shows product imagery on top and a small grey metadata row below.

**Footer.** Tinted `{colors.page-largest}` band with a centred sentence and a primary pill, then the copyright strip.

## Design System Architecture

Material Minimal is distributed as a design language in three forms, which its homepage lists as Bootstrap ("The most popular component library for building responsive and mobile-first websites"), Tailwind ("Famous utility-first CSS framework that helps developers quickly build custom designs") and Figma ("Powerful, collaborative design tool for creating user interfaces, prototypes, and graphic assets"). Its [about page](https://material-minimal.com/learn/material-minimal/about/) links these to mdbootstrap.com, tw-elements.com and a Figma Community file. A DEV Community post by the author describes the Figma file as free and containing over 4,000 component variants.

The shipped CSS is MDBootstrap's: custom properties are prefixed `--mdb-` and include `--mdb-primary: #3b71ca`, `--mdb-body-bg: #fff`, `--mdb-font-roboto`, `--mdb-border-radius: 0.25rem`, `--mdb-border-radius-lg: 0.5rem`, `--mdb-border-radius-2xl: 2rem` and `--mdb-border-radius-pill: 50rem`. MDBootstrap's [colour documentation](https://mdbootstrap.com/docs/standard/content-styles/colors/) says the theme colours are also published as the Sass map `$theme-colors` in `scss/free/_variables.scss`, and that typography is driven by `$font-family-base`, `$font-size-base` and `$line-height-base`. Component CSS was measured on the MDBootstrap buttons documentation page, where the primary button matches the tokens here (12px, weight 500, uppercase, 36px, 4px radius).

## Do's and Don'ts

### Do
- Use `{colors.primary}` for the single most important action in a section and for emphasised words inside copy.
- Set buttons in 12px uppercase Roboto weight 500 with `10px 24px 8px` padding.
- Build depth with layered, low-opacity shadows, and give cards `{rounded.md}`.
- Keep copy short, conversational and instructional, in the voice of "You just need to know a few basic rules."
- Leave generous space around sections; let the product imagery carry the page.

### Don't
- Don't add a second brand colour next to cobalt on marketing surfaces.
- Don't outline cards with heavy borders; use a shadow.
- Don't use pure black body text; the system reads in `{colors.ink}` and `{colors.ink-strong}`.
- Don't mix pill and 4px buttons within the same row.
- Don't use display type below weight 700 or without its negative tracking.

## Responsive Behavior

MDBootstrap's documentation describes Bootstrap as a responsive, mobile-first library. The measured display heading steps down from 56px on a 1280px desktop to 34.13px at 390px width, with the tracking scaled to -0.85325px. Only the 1280px and 390px renders were measured, so the exact column collapse is not documented here. Buttons are 36px tall with 24px horizontal padding at both widths.

## Iteration Guide

1. Change one component at a time and reference tokens by name (`{colors.primary}`, `{rounded.lg}`, `{typography.button}`).
2. Start from Roboto and the 16px / 25.6px body; only the display and button sizes differ.
3. When adding a variant, derive hover as a slightly darker shade (`{colors.primary-hover}`) and widen the same-hue shadow.
4. Verify any new colour against the MDBootstrap theme palette before inventing one.
5. Re-run `node web/scripts/verify-designs.mjs --slug=material-minimal` after each edit.
