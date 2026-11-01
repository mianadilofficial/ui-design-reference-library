---
version: alpha
name: "Stability AI"
category: "AI"
description: "Stability AI (stability.ai), the generative-media company's marketing site: Archivo 18px body and 61px/700 hero headline with -0.61px tracking, Figtree 600 buttons, a #1e1e1e charcoal canvas, #a381ff violet pill buttons with 300px radius and 1px bordered 8px-radius content cards."
colors:
  canvas: "#1e1e1e"
  ink: "#e5e7e6"
  primary: "#a381ff"
  on-primary: "#1e1e1e"
  surface-2: "#ffffff"
  surface-3: "#ede5e1"
  ink-3: "#ffffffb3"
  ink-5: "#000000"
  ink-6: "#1f1f1f"
  nav-text: "#b6a9c6"
  card-border: "#606060"
typography:
  body:
    fontFamily: Archivo
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.02px
  button:
    fontFamily: Figtree
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16.8px
  display:
    fontFamily: Archivo
    fontSize: 61px
    fontWeight: 700
    lineHeight: 57.95px
    letterSpacing: "-0.61px"
  display-mobile:
    fontFamily: Archivo
    fontSize: 40px
    fontWeight: 700
    lineHeight: 38px
    letterSpacing: "-0.4px"
  subheading:
    fontFamily: Archivo
    fontSize: 18px
    fontWeight: 700
    lineHeight: 17.64px
  nav:
    fontFamily: Archivo
    fontSize: 14px
    fontWeight: 600
    lineHeight: 17.5px
  button-secondary:
    fontFamily: Archivo, sans-serif
    fontSize: 14px
    fontWeight: 600
  input:
    fontFamily: Archivo
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 8px
  sm: 8.5px
  md: 8.97px
  lg: 11px
  xl: 15px
  2xl: 42.5px
  3xl: 90.51px
  4xl: 99px
  cta: 300px
  pill: 9999px
spacing:
  s1: 1.75px
  s2: 8px
  s3: 8.98px
  s4: 10px
  s5: 11px
  s6: 11.31px
  s7: 11.52px
  s8: 12px
  s9: 15px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 11px 22px
    height: 41px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.cta}"
    padding: 10px 22px
    height: 39px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.surface-2}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.surface-2}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.surface-2}"
    typography: "{typography.input}"
    rounded: "{rounded.4xl}"
    padding: 12px 10px
    height: 43px
    borderColor: "{colors.surface-2}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 0px 0px 363.656px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-3}"
---

# Stability AI

The measured page is `https://stability.ai/` (queued as `www.stability.ai`), titled "Stability AI", English (en-US), 5,815px tall with 680 visible elements. The footer states "Stability AI is unlocking the power of open-source ..." and the page is a dark marketing home for the company's generative-media products. The first screen in the capture promotes Stable Audio: an announcement strip ("A new way to work with Stable Audio is here. Try the beta"), a header with the "stability.ai" wordmark and links (Stable Audio, Models, Deployment, Solutions, Learn, News, Company) with a violet "Get in touch" pill, a hero photograph of a woman beside a lit train, and the headline "Shape the sound you're after." followed by "Create and ideate with the audio toolkit and commercially-safe models built for your process." and two buttons, "Learn more" and "Start creating".

## Overview

The page is dark, photographic and rounded. After the hero come a statement line ("Trusted by the world's most innovative businesses.") above a scrolling logo row (arm, Amazon and others), a centered section "We'll help you make it like nobody's business." in which "you make it" is set in muted grey, three tall photo cards (Marketing, Gaming, Entertainment) that each pair an image with a heading, a short rule and a two-to-four-line description on a purple-tinted gradient, and a News section with a "View all news" link. Product UI fragments (labels such as "Soundscape", "Ethereal", "ISOLATE SFX", a dashed selection frame and a circular "CLICK TO EXPERIENCE SOUND" play ring) float over the hero image. Voice is confident and direct, with short imperative sentences ("Create and ideate...", "Build immersive worlds with our 3D and 4D video models...").

The News section in the capture shows three cards: a cream announcement graphic with circular lettering, a near-black video still, and a close-up portrait with headphones and the word TUNE IT. Each card has the same thin border and rounded corner as the content cards, so news and product cards share one component.

## Colors

Background areas: `#1e1e1e` (area weight 13,567), `#ffffff` (1,946), `#ede5e1` (817), `#a381ff` (40), `#141414` (29). Text by characters: `#e5e7e6` (748), `#1e1e1e` (711), `#ffffffb3` (611), `#ffffff` (398), `#000000` (387), `#1f1f1f` (374).

- `canvas` `#1e1e1e`; `ink` `#e5e7e6` primary text on dark; `ink-3` `#ffffffb3` (70% white) footer and secondary text.
- `primary` `#a381ff`: violet. Fill of "Learn more", "Get started", "Read more" and "Get in touch" pills; border and text of the outlined "Start creating". `on-primary` `#1e1e1e`: text on the violet fill.
- `surface-2` `#ffffff`, `surface-3` `#ede5e1`: light sections and tiles (the `#ede5e1` cream appears behind a News thumbnail).
- `nav-text` `#b6a9c6`: the announcement strip text (a violet-grey); `card-border` `#606060`; `ink-5` `#000000`, `ink-6` `#1f1f1f` for text on light sections.

Hover on the filled pills inverts them: measured `rgb(30, 30, 30)` text on `rgb(163, 129, 255)` becomes `rgb(163, 129, 255)` text on `rgb(30, 30, 30)` (the `button-primary-hover` component).

## Typography

Archivo (400 and 700) carries 3,741 characters; Figtree 600 is used for button labels (63 characters); Inter appears for 43.

- `display`: Archivo 61px, weight 700, line-height 57.95px, -0.61px tracking (the hero h2, rendered with a text background-clip gradient so the headline fades from white to lilac). `display-mobile`: 40px, 38px line-height, -0.4px, from the mobile pass.
- `body`: Archivo 18px, weight 400, line-height 25.02px (hero lede; 18px is the most-used size, 1,537 characters).
- `subheading`: Archivo 18px, weight 700, line-height 17.64px ("Trusted by the world's most innovative businesses.").
- `button`: Figtree 14px, weight 600, line-height 16.8px. `button-secondary`: Archivo 14px, 600.
- `nav`: Archivo 14px, weight 600, line-height 17.5px.
- `input`: Archivo 16px, 400.

Other measured sizes: 13px (653 characters, footer), 20px (477), 32px (348, section titles) and 17.536px (219, card text). Letter-spacing is `normal` except the 61px headline and small uppercase labels at 11.222px with 0.5611px tracking.

## Layout

The header is a full-width bar over the hero; section content is centered with generous vertical gaps. Measured gaps: 20px (8 elements), 11px (6), 22px (2), 8.978px, 11.313px and 18px. Paddings: 22px (11, the pill's horizontal padding), 20px (9), 10px (7), 12px (7). The three-card section is a joined row of tall cards with no gutters between them in the capture; the News section is a three-up row with a heading at the left and "View all news" at the right. The footer measures 748px high.

## Elevation & Depth

Shadows measured are glass-like inset highlights: `rgba(255, 255, 255, 0.38) 0px 0px 1.5px 0.5px inset, rgba(255, 255, 255, 0.07) 0px 0px 12px 3px inset` (2 elements) and, on one element, an `oklch` white inset pair plus an outer `rgba(0, 0, 0, 0.3) 0px 8px 30px 0px`. These style the floating UI fragments over the hero. Cards use a `1px solid #606060` border and a purple gradient overlay, not shadows.

## Shapes

Radii measured: `300px` (11 elements, the pill buttons), `50%` (7, circular controls), `11px` (4), `700px` (4), `8px` (3, content cards), `90.512px` (2). The input uses `99px`. Tokens include `cta: 300px`, `xs: 8px`, `lg: 11px`, `4xl: 99px`. Pills for actions and a modest 8px radius for content cards are the two shape families.

## Components

- **Primary pill** (`button-primary`): `#a381ff` fill and 1px `#a381ff` border, `#1e1e1e` Figtree 14px/600 text, padding `11px 22px`, 41px high, radius 300px. The "Get started" variant has a 2px border, padding `10px 22px`, 39px high.
- **Outlined pill**: transparent fill, 2px `#a381ff` border and `#a381ff` text, 43px high ("Start creating").
- **Input**: white text, `1px solid #ffffff`, radius 99px, padding `12px 10px`, 43px high.
- **Content card**: 8px radius, `1px solid #606060`; padding with a bottom value of 363.656px (an aspect-ratio box) and 366px height.
- **Announcement strip**: `#1e1e1e` with `#b6a9c6` 14px/600 text and an underlined white "Try the beta →" link.
- **Inline link**: violet underlined "Work with us."

## Design System Architecture

No public design-system or brand-guideline page was opened; `_research` records none. The page is built on a site-builder stylesheet: its `:root` declares many generated block variables (for example `--tertiary-button-font-*`, `--product-basic-item-*`, `--quote-block-text-font-font-family: "Archivo"`, `--portfolio-grid-overlay-title-*`, `--tweak-summary-block-background-color`). Those variable names are template-generated, so the brand layer is the Archivo and Figtree faces, the charcoal and violet pair, and the pill and card shapes.

## Do's and Don'ts

Do set headlines in Archivo bold with tight tracking and let gradients fade the headline. Do use violet `#a381ff` pills with `#1e1e1e` text for actions, inverting them on hover. Do use 8px-radius bordered cards over photography with a purple gradient. Do keep the page charcoal.

Don't use pill radius on content cards (8px is the measured card radius). Don't put white text on the violet fill; the measured text is `#1e1e1e`. Don't use heavy shadows; depth is inset glass highlights and borders.

## Responsive Behavior

Mobile pass: hero headline 40px, line-height 38px, -0.4px tracking (61px on desktop); body 16px with 21.6px line-height (18px on desktop); the "Learn more" pill is unchanged at 14px/600, `11px 22px` padding and 41px height. Mobile font sizes by characters: 16px (1,141), 13px (746), 28.1536px (348), 24px (252), 18px (225). Column counts and navigation behavior are not measured.

## Iteration Guide

1. Charcoal `#1e1e1e` canvas, `#e5e7e6` text, violet `#a381ff` pills with dark text.
2. Archivo for text (18px body, 61px/700 headline), Figtree 14px/600 for buttons.
3. Photo cards with 8px radius, `#606060` borders and gradient overlays; glass inset highlights for UI fragments.
4. Verify with `node web/scripts/verify-designs.mjs --slug=stability-ai`.
