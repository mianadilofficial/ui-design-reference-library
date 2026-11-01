---
version: alpha
name: Ravi Klaassens (R—K Design & Code)
category: "Portfolio"
description: "Ravi Klaassens (R—K Design & Code) is a design-and-code studio portfolio: warm grey canvas (#e0dedd) with pure black ink (#000000), a single oxblood accent (#891a20), ReplicaLL 26.6667px weight 500 headings with -1.06667px tracking, Suisse Intl Book labels at 10.6667px, near-square corners of 2.13px to 5.33px and a black footer."
colors:
  canvas: "#e0dedd"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#e0dedd"
  surface-3: "#891a20"
  hairline: "#0000001f"
typography:
  display:
    fontFamily: ReplicaLL, Arial, sans-serif
    fontSize: 26.6667px
    fontWeight: 500
    lineHeight: 27.7333px
    letterSpacing: "-1.06667px"
  display-mobile:
    fontFamily: ReplicaLL, Arial, sans-serif
    fontSize: 29.3111px
    fontWeight: 500
    lineHeight: 28.1386px
    letterSpacing: "-1.17244px"
  body:
    fontFamily: ReplicaLL, Arial, sans-serif
    fontSize: 21.3333px
    fontWeight: 500
    lineHeight: 21.3333px
    letterSpacing: "-0.853333px"
  button:
    fontFamily: ReplicaLL, Arial, sans-serif
    fontSize: 13.3333px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: "-0.533333px"
  nav:
    fontFamily: "\"Suisse Intl Book\", Arial, sans-serif"
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 13.8667px
    letterSpacing: "-0.426667px"
rounded:
  xs: 2.13px
  sm: 2.67px
  md: 5.33px
  none: 0px
spacing:
  s1: 2.67px
  s2: 4.27px
  s3: 4.4px
  s4: 5.33px
  s5: 6.4px
  s6: 6.67px
  s7: 8px
  s8: 8.53px
  s9: 10.67px
  s10: 13.33px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 43px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 0px 0px 10.6667px
  nav-link:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 44)
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

The page title is "R—K Design & Code" and the h1 reads "Ravi Klaassens. Design & Code for those who refuse to settle." with the date line "2024—Future". The site is the portfolio of an independent designer and developer working "for agencies, freelancers & brands" (the measured body copy begins "Building for agencies | freelancers & brands"). The manifesto block on the grey canvas says: "Design shapes the world not as decoration, but as a force that leaves a mark. It defines how your brand is perceived and how it's experienced. Leave yours." A works section is introduced with "Settling is easy the work here isn't built for that" and a footer carries a phone number and an e-mail contact.

The design is gallery-like: a full-bleed dark hero with a glitch-distorted red portrait, a grey paper canvas for text, and image tiles that sit edge to edge with tiny captions. Type is tight and small, all in one grotesque, and nearly everything is black on grey or grey on black.

## Colors

- **Canvas:** `#e0dedd`, a warm light grey (area weight 4873). It is also the text color on dark areas, so the page is effectively two-tone.
- **Ink / primary:** `#000000`. Text in black measured 955 characters; the footer, the "Read info" button and the dark hero use `#000000` as fill (area 3014). `on-primary` is `#e0dedd`.
- **Accent:** `#891a20`, an oxblood red, used as the background of the "For Agencies" navigation tile (area 239). The hero image and several work images are tinted in a similar red, but those are photography.
- **Hairline:** `#0000001f` (black at about 12% alpha) is the measured border color on dividing lines; a white translucent `#ffffff66` is also in the data.

The CSS variables confirm a swatch system: `--_colors---swatch--black`, `--_theme---border` pointing at `black-24`, and a deleted `eerie-black #171c1c` variable. Only `#e0dedd`, `#000000` and `#891a20` are used in rendered text and surfaces.

## Typography

- **Display (h1, h2, h3):** ReplicaLL, Arial, sans-serif; 26.6667px, weight 500, line height 27.7333px, letter spacing -1.06667px. On mobile 29.3111px / 28.1386px with -1.17244px.
- **Body:** ReplicaLL 21.3333px, weight 500, line height 21.3333px, letter spacing -0.853333px; mobile 26.0543px.
- **Button:** ReplicaLL 13.3333px, weight 500, line height 16px, letter spacing -0.533333px.
- **Nav / eyebrow:** "Suisse Intl Book", Arial, sans-serif; 10.6667px, weight 500, line height 13.8667px, letter spacing -0.426667px; mobile 13.0271px.

By character count Suisse Intl Book dominates (782), then ReplicaLL (588), with a little Reckless Neue (14 characters, the serif word "Settling"). Sizes: 16px (562 characters, letter spacing -0.4px), 26.6667px (436), 13.3333px, 21.3333px, 8px, 10.6667px and 9.33333px. Weights: 500 (1253) and 400 (131). Tracking is always negative and proportional to size (about -0.04em). ReplicaLL (Lineto), Suisse Intl and Reckless Neue are commercial typefaces; Arial is the declared fallback.

## Layout

The desktop pass measured 1280px width and a 5352px scroll height. The top of the hero holds a horse-and-rider emblem at left and a four-column navigation set in tiny type: "Repertoire" (Works, Insights), "Narrative" (About, Brand story, Connect), "Liaison" (For Brands, For Agencies) and a clock label, each group with a small geometric glyph (triangle, circle, square). The hero copy is centered at the lower part; a "Get in touch →" boxed button with four tiny corner dots sits at the left edge.

Below the hero a centered manifesto is flanked by small black square markers. The works grid starts at the left edge with narrow paired columns: three image tiles flush against each other (identity and art direction, film exploration, a web build for a bag brand), captions in two lines ("R—K / Identity + Art Direction"). Measured gaps: 2.66667px (24), 10.6667px (20), 6.4px (18), 32px (16), 4.26667px, 5.33333px, 42.6667px, 64px. Paddings: 6.66667px, 16px, 5.33333px, 4.4px, 13.3333px, 26.6667px.

## Elevation & Depth

No box shadows were measured on rendered elements. The CSS corpus lists a `0 0 0 .25rem var(--_colors---swatch--black)` focus ring and a standard `0 0 0 1px #0000001a,0 1px 3px #0000001a` shadow from a form element. Depth in the design comes from the full-bleed hero image against the grey canvas, not from shadows.

## Shapes

Corners are almost square. Radii measured: 2.13333px (8 elements), 2.66667px (4) and 5.33333px (3); the primary button reports 0px. Image tiles in the capture are rectangular and flush; thin hairlines (`#0000001f`) separate sections.

## Components

- **Primary button ("Read info →"):** black `#000000` fill, `#e0dedd` text, ReplicaLL 13.3333px, height 43px, width 91px, radius 0px.
- **"Get in touch →" box:** black fill with tiny corner dots, over the hero image.
- **Nav tile:** "For Agencies" in `#e0dedd` on `#891a20`, 84px by 84px, Suisse Intl Book 10.6667px, with an offset transform of 44px in the measured state.
- **Link:** black Suisse Intl Book 10.6667px, underlined in the navigation.
- **Work tile:** image plus two-line caption (title and discipline).
- **Footer:** black fill, `#e0dedd` text, ReplicaLL 26.6667px, 745px tall, with the phone number and e-mail as large links.

Imagery and voice: the hero is a dark vignette portrait whose face is smeared into vertical red pixel streaks, an art-directed glitch treatment that sets the red-and-black palette for the whole portfolio. Work imagery follows it: close-up cosmetics, a glossy black panther figurine behind a burgundy-and-cream leather bag on a red carpet, a perfume bottle held in a hand, and warm beige interiors with plants and vases. The copy is declarative and confident, in short sentences ("Leave yours."), with small-caps-free sentence case throughout. The navigation vocabulary is conceptual rather than literal (Repertoire, Narrative, Liaison), and a live clock label with a time zone abbreviation sits in the top bar. Small black square bullets mark the corners of the centered manifesto text, echoing the corner dots on the "Get in touch" box.

Captions are set in the same ReplicaLL face as the headings, kept to two short lines per tile, which makes the grid read like a printed index of projects rather than a marketing page.

## Design System Architecture

No public design system or brand guideline for this site was opened; the site is a Webflow build (the font-face list includes `webflow-icons`). Its variables follow a structured token scheme: `--_headings---heading-m--font`, `--_headings---heading-l--font`, `--_headings---heading-xl--font`, `--_paragraphs---paragraph-regular--font-size: 1em`, `--_paragraphs---paragraph-m--letter-spacing: -.025em`, `--_paragraphs---paragraph-s--line-height: 1.3em`, `--_fonts---fonts--eyebrow`, `--spacing--tablet-96px: 5em`, `--spacing--tablet-48px: 2.5em` and `--_theme---border`. All measurements come from `web/data/extracted/ravi-klaassens.json` for https://www.raviklaassens.com.

## Do's and Don'ts

- Do keep the page two-tone: `#e0dedd` and `#000000`, with `#891a20` only for a single navigation accent.
- Do set every heading in one grotesque at weight 500 with negative tracking near -0.04em.
- Do keep corners at 0px to 5.33px.
- Do caption work tiles with a short two-line label.
- Don't add shadows or gradients to interface elements.
- Don't use more than three type sizes in a single block.
- Don't use bright UI colors; the red belongs to the photography and one nav tile.

## Responsive Behavior

The 390px pass measured: h1 and h2 at 29.3111px with line height 28.1386px and -1.17244px tracking; body at 26.0543px; navigation labels at 13.0271px with bottom padding 45.595px in an 844px-high nav block; the "Read info" button was not detected. Layout reflow of the work grid and the menu pattern were not measured.

## Iteration Guide

1. Canvas `#e0dedd`, ink `#000000`, accent `#891a20` once.
2. Headings 26.6667px weight 500, tracking -1.06667px, in a grotesque.
3. Labels 10.6667px with -0.426667px tracking.
4. Buttons: black, 43px high, 0px radius.
5. Tiles flush with 2.67px gaps and tiny captions.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=ravi-klaassens --url=https://www.raviklaassens.com/ --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=ravi-klaassens`.
