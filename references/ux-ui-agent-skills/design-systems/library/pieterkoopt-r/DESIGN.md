---
version: alpha
name: "PieterKoopt®"
category: "Product & SaaS"
description: "PieterKoopt® (pieterkoopt.nl) is a Dutch painting-buying service: near-black green #171c1c canvas, beige #d4c6b9 text, sage green #7a8b69 call to action, Basic Grotesque uppercase with tight tracking and 2.67px button radius."
colors:
  canvas: "#171c1c"
  ink: "#d4c6b9"
  primary: "#7a8b69"
  on-primary: "#171c1c"
  surface-black: "#000000"
  ink-muted: "#706d66"
  surface-card: "#6e7d5f"
typography:
  display:
    fontFamily: "\"Basic Grotesque\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-1.2px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Basic Grotesque\", Arial, sans-serif"
    fontSize: 39.0814px
    fontWeight: 400
    lineHeight: 39.0814px
    letterSpacing: "-0.977036px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Basic Grotesque\", Arial, sans-serif"
    fontSize: 18.6667px
    fontWeight: 500
    lineHeight: 18.6667px
    letterSpacing: "-0.466667px"
    textTransform: uppercase
  subheading:
    fontFamily: "\"Basic Grotesque\", Arial, sans-serif"
    fontSize: 37.3333px
    fontWeight: 400
    lineHeight: 37.3333px
    letterSpacing: "-0.186667px"
    textTransform: uppercase
  body:
    fontFamily: "\"Basic Grotesque\", Arial, sans-serif"
    fontSize: 13.3333px
    fontWeight: 400
    lineHeight: 18.6667px
  button:
    fontFamily: "\"Basic Grotesque\", Arial, sans-serif"
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 10.6667px
    letterSpacing: 0.106667px
    textTransform: uppercase
rounded:
  xs: 2.67px
  sm: 4px
  md: 5.33px
  lg: 8px
  cta: 2.67px
  pill: 9999px
spacing:
  s1: 2.67px
  s2: 5.33px
  s3: 8px
  s4: 10.67px
  s5: 13.33px
  s6: 16px
  s7: 20px
  s8: 21.33px
  s9: 24px
  s10: 26.67px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 16px
    height: 37px
  button-audio:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 16px
    height: 37px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 16px
    borderColor: "{colors.ink-muted}"
  nav:
    textColor: "{colors.ink}"
    padding: 16px 16px 0px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.lg}"
    padding: 16px
    borderColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

PieterKoopt® (www.pieterkoopt.nl, title "Sell Your Painting Quickly & Safely | PieterKoopt®") is a Dutch service that buys paintings from private sellers. The English home page says: "Time changes everything. Except history." Section headlines read "Selling your painting? It starts here", "Selling paintings without the hassle", "Every painting has a Story" and the closing block "Selling a painting? Pieter arranges it." The process steps are "Upload your Artwork", "Review by Pieter" and "personal appointment". Navigation reads How it works, About us, Stories, City tour, Contact, with an EN / NL switch. The page repeats the CTA "Sell your painting" and also offers "Request offer", "Read more about Pieter Koopt", "See all stories" and a WhatsApp contact. The voice is warm and respectful, in short plain sentences with reassurances such as "You receive 100% of the offer." and "We come to you and arrange everything."

The site opens behind an audio gate: a centered line "For the best experience, we recommend turning on your sound." with two buttons, "WITHOUT AUDIO" and "WITH AUDIO". A Usercentrics-style privacy dialog ("Privacy Settings", Accept All, Save Settings, Deny) was present when the capture was taken. Both overlays are gating UI; the audio buttons were detected as call-to-action candidates by the extractor, but they are not documented here as brand tokens beyond their shared button geometry. The whole page is a very dark green-black field with beige type, and sage-green cards and buttons.

## Colors

Measured in `web/data/extracted/pieterkoopt-r.json`:

- **canvas `#171c1c`**: the near-black green body background (largest area, weight 4,242). The site's variables call it `--swatch--black` and eerie-black.
- **ink `#d4c6b9`**: the beige used for headings and most text (1,499 characters). Declared as `--swatch--beige`.
- **primary `#7a8b69`**: the sage green of the "SELL YOUR PAINTING" button (area 1,002). Declared as `--swatch--green`. The extractor first picked the beige audio-gate button as primary; because the real site call to action is the green "SELL YOUR PAINTING" button, primary is reassigned to the measured #7a8b69 and the beige is kept as `ink`.
- **on-primary `#171c1c`**: the dark label color on the green and beige buttons and cards.
- **surface-card `#6e7d5f`**: the slightly darker green card ("NO HIDDEN FEES", "You receive 100% of the offer.", area 348).
- **surface-black `#000000`**: area weight 1,024 (together with a translucent #0000004d layer of the same weight).
- **ink-muted `#706d66`**: muted taupe for outlines and small text (55 characters, button border color).

The root variables also declare `--swatch--night #121616`, `--swatch--platinum #dee2e6`, `--swatch--ash-grey #acb7c1`, `--swatch--anti-flash-white #eef0f2`, `--swatch--transparent-white #eef0f200` and `--swatch--black-60 #171c1c99`. #121616 and #ffffff were measured only in the privacy dialog, so they are not tokens here.

## Typography

- **Basic Grotesque** (weights 400 and 500, 1,538 characters) is the main family, with Arial as the fallback declared in the font stack. It carries uppercase headings and all UI text.
- **ivypresto-headline** (400 and 300 italic, 200 characters) is a serif loaded for accent headlines.
- **Geist Mono** (weights 300 to 700, 60 characters) is used for small supporting text such as the audio-gate sentence.
- Inter is loaded in weights 300 to 700; system-ui measured on 328 characters belongs to the privacy dialog.

Tokens: **display** (h1 "TIME CHANGES EVERYTHING. EXCEPT HISTORY.") Basic Grotesque 48px / 48px, weight 400, letter-spacing -1.2px, uppercase; mobile 39.0814px / 39.0814px, -0.977036px. **subheading** 37.3333px / 37.3333px, -0.186667px, uppercase ("NO HIDDEN FEES"). **heading** 18.6667px / 18.6667px weight 500, -0.466667px, uppercase. **body** 13.3333px / 18.6667px weight 400 (586 characters). **button** 10.6667px / 10.6667px weight 500, letter-spacing 0.106667px, uppercase (626 characters). Other measured sizes: 64px with -1.6px spacing (77 characters), 26.6667px with -0.133333px (56), 21.3333px (114) and 16px (126). The tight negative tracking at large sizes and the weight 400/500 pairing define the look. No font-license source was opened.

## Layout

Page width 1280px, scroll height 8,284px. The nav is 64px high with padding 16px 16px 0px. The Webflow-style variables set `--_layout---padding-global--page-padding: 1.5em` and a tablet grid gap of `1.5em`. Measured gaps: 10.6667px (16), 21.3333px (6), 40px (4), 8px (4), 213.333px (2), 13.3333px, 106.667px and 5.33333px. Paddings: 16px (25), 26.6667px (7), 24px (6), 20px (6), 32px (4), 42.6667px (3), 21.3333px (3) and 170.667px. The footer block is 550px high. The hero sits in a framed panel with a thin border (#706d66) and rounded corners; sections stack vertically as full-width bands, cards in green on the dark canvas.

## Elevation & Depth

One shadow was measured, `rgba(0, 0, 0, 0.3) 0px 32px 68px 0px`, on the privacy dialog, so it is not a brand token. Content has no measured shadows. Depth comes from the flat color blocks (green on near-black), the black and translucent black overlay layers (#000000 and #0000004d) and thin 1px borders in #706d66 (8 occurrences) and #171c1c (4).

## Shapes

Small, restrained corners. The radii measured: 2.66667px (22 elements; buttons, `cta`), 5.33333px (5), 8px (5; cards), 4px (3), 8px 8px 0px 0px (1), 100% (3) and 34px (3, from the privacy dialog). The tokens file keeps `xs 2.67px`, `sm 4px`, `md 5.33px`, `lg 8px`, `cta 2.67px` and `pill 9999px`.

## Components

- **button-primary**: sage `#7a8b69` fill, `#171c1c` label, Basic Grotesque 10.6667px weight 500 uppercase, padding 0px 16px, height 37px, width 176px for "SELL YOUR PAINTING", radius 2.66667px.
- **button-audio**: beige `#d4c6b9` fill, `#171c1c` label, same type and radius, height 37px, width 96px ("WITH AUDIO").
- **link / outlined button** ("WITHOUT AUDIO"): `#171c1c` fill, beige text, 1px solid `#706d66` border, padding 0px 16px, height 37px, width 120px.
- **card**: `#6e7d5f` fill, `#171c1c` text, padding 16px, radius 8px.
- **nav**: beige text, padding 16px 16px 0px, height 64px.
- **footer**: `#171c1c` background, beige text, 550px high, headline "SELLING A PAINTING? PIETER ARRANGES IT." with a "Request offer" action.

## Design System Architecture

No public design system or brand guideline was found; the opened home page links only to site pages, social profiles, a map and legal pages. The shipped CSS exposes a Webflow variable system: color swatches (`--swatch--beige`, `--swatch--green`, `--swatch--night`, `--swatch--black-60`), layered semantic variables (`--_theme---border`, `--_colors---swatch--grey`), paragraph and heading scales (`--_paragraphs---paragraph-regular--font-size`, `--_paragraphs---paragraph-xs--line-height: 1.3em`, `--_headings---heading-xs--font`) and layout variables (`--_layout---padding-global--page-padding`). Source: https://www.pieterkoopt.nl/ (measured with `web/scripts/extract-tokens.mjs`).

## Do's and Don'ts

- Do keep the near-black green #171c1c canvas with beige #d4c6b9 text.
- Do use sage #7a8b69 for the main "Sell your painting" action and #6e7d5f for cards.
- Do set Basic Grotesque uppercase with negative tracking at large sizes.
- Do keep button radius at 2.67px and height at 37px.
- Don't use the privacy dialog colors (#121616, #ffffff, system-ui) or its 34px radius as brand tokens.
- Don't add shadows to content.
- Don't use bold weights above 500 for UI text.

## Responsive Behavior

Measured on the 390px pass: h1 is 39.0814px / 39.0814px at weight 400 with -0.977036px spacing, and the h1 wraps into three lines ("TIME CHANGES / EVERYTHING. / EXCEPT HISTORY."). Body paragraphs measure 16.2839px; the most-read mobile sizes are 16.2839px (938 characters), 13.0271px (531), 14.994px (347), 32.5678px (158) and 45.595px (92). Nav and card behavior on mobile are not measured.

## Iteration Guide

1. Canvas #171c1c, ink #d4c6b9, action #7a8b69, card #6e7d5f.
2. Basic Grotesque, uppercase, 48px display and 10.6667px buttons.
3. Buttons 37px high, 0px 16px padding, 2.67px radius.
4. Add serif accents (ivypresto-headline) sparingly.
5. Run `node web/scripts/verify-designs.mjs --slug=pieterkoopt-r` after edits.

## Voice and Content Notes

Copy read on the opened home page is built from short reassurances: no commission, a response within 48 hours, and a visit to the seller's home. Recurring themes are simple, fast, transparent and hassle-free. Footer navigation repeats Home, Sell your painting, How it works, About us, Stories and Contact, and utility links include a link to the Dutch site and WhatsApp. A chat popup titled "WhatsApp us" offers a QR code to chat; it is a service widget rather than brand UI.
