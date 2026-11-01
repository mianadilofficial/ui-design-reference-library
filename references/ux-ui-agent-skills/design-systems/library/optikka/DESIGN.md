---
version: alpha
name: Optikka
category: "Business & Corporate"
description: "Optikka's single-page product site is a warm sand canvas (#e6d9cc, with a lighter #ece6df largest area) carrying espresso text (#443218) in PPNeueMontreal 500, a 99.5555px tracked-tight hero, and one vivid ember accent (#fd4319) with zero measured border radius."
colors:
  canvas: "#e6d9cc"
  page-largest: "#ece6df"
  ink: "#443218"
  primary: "#fd4319"
  ink-muted: "#63523a"
typography:
  display:
    fontFamily: PPNeueMontreal, sans-serif
    fontSize: 99.5555px
    fontWeight: 500
    lineHeight: 106.667px
    letterSpacing: "-2.98667px"
  display-mobile:
    fontFamily: PPNeueMontreal, sans-serif
    fontSize: 54.08px
    fontWeight: 500
    lineHeight: 124.8px
    letterSpacing: "-1.6224px"
  body:
    fontFamily: PPNeueMontreal, sans-serif
    fontSize: 31.1111px
    fontWeight: 500
    lineHeight: 39.1111px
  nav:
    fontFamily: PPNeueMontreal, sans-serif
    fontSize: 26.6667px
    fontWeight: 400
    lineHeight: 26.6667px
rounded:
  none: 0px
spacing:
  s1: 3.56px
  s2: 17.78px
  s3: 49.78px
  s4: 64px
components:
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-link-hover:
    textColor: "{colors.primary}"
---

## Overview

Optikka (https://optikka.com/) markets a "Design-as-Code" platform for scaling creative production, and its site is a single long page whose whole identity is carried by three decisions: a sand-coloured ground, one typeface, and one hot orange-red. The measured page is 1280px wide and 11550px tall. The visible copy reads "Meet Optikka", "Creativity Powered by Code", "How it works" with three numbered steps ("01. Pipeline", "02. Scale", "03. Render"), "Unlocks Creative Intelligence with Design as Code" and a "Contact Us" call. The tone is declarative and product-led: short noun phrases, sentence-case headlines, and a hero statement that ends on the accent-coloured phrase "revenue potential".

The capture shows a hairline column grid drawn over the sand ground, small uppercase nav labels at the top edge ("ABILITIES", "HOW IT WORKS", "STAY CONNECTED"), a tiny two-line caption "CREATIVITY POWERED BY CODE" bottom-left of the first screen, "SCROLL DOWN" at the right, and a generative ring object in orange-to-grey striations as the single illustration. There are no photographs in the first screen and no buttons were detected by the extractor, so the page reads as an editorial poster rather than a conventional SaaS landing page. The only link treatment that shows up in the measurements is a colour change on hover.

## Colors

The palette is small and warm. The extraction measured two background areas: #ece6df (area weight 1024) and #e6d9cc (weight 93); the body role background is #e6d9cc, so that is the canvas token and #ece6df is kept as page-largest. Text colours by character count are #443218 (weight 316), #63523a (77) and #fd4319 (71).

- **Canvas #e6d9cc and page-largest #ece6df**: the sand ground. The site's own CSS variables name them `--color-soft-sand` (#E6D9CC) and `--color-curtain` (#ECE6DF).
- **Ink #443218**: espresso brown used for the headline, body and nav text; the CSS variable is `--color-espresso`.
- **Ink-muted #63523a**: the second text tone, used for the continuation of the hero paragraph in the capture; the variable is `--color-walnut`.
- **Primary #fd4319**: the accent, named `--color-vivid-ember` in the root variables. It colours the phrase "revenue potential", the mobile "How it works" heading, and is the hover colour of the nav links (measured hover: nav text changes from rgb(68, 50, 24) to rgb(253, 67, 25)).

Other root variables exist (`--color-vivid-black` #1A1715, `--color-dark-light` #8A846E, `--color-soft-sand-2` #FAF1C6, and a dark #222524 background used by the 404 and no-script states) but they are not part of the measured home-page composition and are not promoted to tokens. The extractor's navLink colour of #0000ee is the browser default link colour and is not a brand colour; it was dropped.

## Typography

One family does everything: PPNeueMontreal, weight 500 for display and body, weight 400 for the nav role. The loaded fonts list also contains JetBrainsMono 400, which the mobile body paragraph uses (15.6px, #8a846e, letter-spacing -0.936px). The font files are loaded by the site itself; licensing and foundry were not confirmed on any page opened for this brief.

- **Display** 99.5555px / 106.667px, weight 500, letter-spacing -2.98667px: "Meet Optikka". The root variable `--font-size-h1` is 1.12rem and `--letter-spacing-h1` is -.0336rem, which is the same ratio scaled by the site's fluid root size.
- **Display-mobile** 54.08px / 124.8px, letter-spacing -1.6224px, measured at the 390px mobile pass.
- **Body** 31.1111px / 39.1111px, weight 500: the hero paragraph "Optikka redefines design workflows, empowering you to scale creative, protect what matters, and launch faster". This is the largest body size by character weight (383), far above the 11.5556px uppercase labels (69) and the headline (12).
- **Nav** 26.6667px / 26.6667px, weight 400 is the measured nav-link role; the visible header labels measure 11.5556px, weight 500, uppercase.

The type system is therefore two poles: very large tight headline and generous paragraph on one side, tiny uppercase micro-labels on the other, with nothing in between measured on the home page.

## Layout

The page is a full-bleed canvas with a visible hairline grid: vertical rules at roughly a third and a half of the width and horizontal rules every screen-section. The header is 50px high, full width (1280px), with the logo at the left and three labels distributed across the columns. The hero pairs the display headline in the left columns with the paragraph in the right columns. Measured spacing values are 3.55556px, 17.7778px, 49.7778px and 64px for paddings and gaps, plus a 266.667px gap between the two largest items. The spacing tokens s1 to s4 record these. Scroll height of 11550px against a 1280px viewport shows a long-scroll narrative of numbered sections rather than a multi-page layout.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty) and no borders on elements (`borderColors` is empty). Depth comes from the generative ring illustration and from tonal difference between #ece6df and #e6d9cc, not from shadow. The only layer-like objects in the CSS are named z-index variables for the canvas (100), anchors (100), the mobile menu (102) and a preloader (103); these describe stacking order, not a visual elevation system.

## Shapes

`borderRadii` is empty in the extraction, so every rendered element computes to 0px. The token set records `none: 0px`. Shape language is therefore rectilinear: hairline grid, flat text blocks, and a single organic object (the ring) that is artwork rather than UI chrome.

## Components

The extractor found no primary button, input or card (`ctaPrimary` is null, `cards` is empty). What exists:

- **Nav**: header 50px high, text in ink, uppercase 11.5556px labels ("ABILITIES", "HOW IT WORKS", "STAY CONNECTED"), no background fill.
- **Nav link hover**: colour and border colour switch from #443218 to #fd4319; no underline, no background, no shadow, opacity stays 1, height 14px.
- **Inline accent**: a phrase in the hero paragraph is coloured #fd4319 to mark the value proposition.
- **Contact call**: the page text offers "CONTACT US" and "Stay connected", both linking to an external contact form; their styling was not measured as a button.

## Design System Architecture

No public design system, brand guideline or press page is linked from the home page (the page was opened at https://optikka.com/ and none of those links were present). The de-facto system is visible in the shipped CSS root variables: colours are named by material metaphor (`--color-espresso`, `--color-walnut`, `--color-soft-sand`, `--color-vivid-ember`), type sizes are rem-based variables (`--font-size-h1`, `--font-size-h2` .35rem, `--font-size-h3` .25rem, `--font-size-nav` .13rem), and `--main-font` is "PPNeueMontreal", sans-serif. The rem values are small because the site sets a fluid root size, so they are not px values and were not converted. The theme is single-scheme on the home page; dark-mode behaviour was not measured.

## Do's and Don'ts

- Do keep the sand ground (#e6d9cc / #ece6df) and espresso ink (#443218) as the base pair.
- Do reserve #fd4319 for one phrase, hover states and a single heading, as the site does.
- Do set display text at weight 500 with strongly negative tracking (-2.98667px at 99.5555px).
- Do keep corners square: the measured radius is 0px.
- Don't add shadows, borders or gradients to UI; none were measured.
- Don't use the browser-default #0000ee for links.
- Don't place more than one orange emphasis per paragraph.
- Don't introduce a second sans family; JetBrainsMono appears only in the mobile paragraph.

## Responsive Behavior

Only the 390px mobile pass was recorded, and it measured text roles only. The h1 is 54.08px with 124.8px line-height and -1.6224px tracking; an h2 "How it works" measures 24.96px / 31.2px in #fd4319; the body paragraph measures JetBrainsMono 15.6px / 20.592px in #8a846e with -0.936px tracking, and the h1 box is 294px wide. Navigation behaviour, grid changes, menu patterns and breakpoints were not measured. The root variables include a mobile-menu z-index (102), which shows a mobile menu exists in the CSS but does not describe its layout.

## Iteration Guide

1. Start from canvas #e6d9cc, ink #443218, accent #fd4319, then add #63523a for secondary text.
2. Set the headline at display tokens and verify the -2.98667px tracking; without it the look flattens.
3. Add numbered sections ("01.", "02.", "03.") with a short sentence each, in body size.
4. Keep radius at 0px and avoid shadows.
5. When extending, measure new pages with the extractor (`--slug=optikka--page --url=<url> --force --no-motion`) before adding tokens; hover, dark mode and tablet behaviour are not measured.
