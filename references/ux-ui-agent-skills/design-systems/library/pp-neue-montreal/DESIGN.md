---
version: alpha
name: PP Neue Montreal
category: "Business & Corporate"
description: "Specimen site (neuemontreal.com) for Pangram Pangram's PP Neue Montreal grotesque: a #1a1a1a dark canvas with cream #f0e7d4 type, an #ff4000 orange-red signature, a #d82f2f red hero, multicolour display words in green, yellow, blue and pink, and pill-shaped controls (999px to 1000px) set in the typeface itself."
colors:
  canvas: "#1a1a1a"
  ink: "#f0e7d4"
  primary: "#ff4000"
  surface-black: "#000000"
  ink-secondary: "#252525"
  ink-light: "#ebebeb"
  hero-red: "#d82f2f"
  tag-orange: "#ff6e3e"
  accent-green: "#18bc42"
  accent-blue: "#4365ff"
  accent-yellow: "#efc21e"
  accent-pink: "#dc3c84"
  accent-lime: "#bdd116"
  neutral-grey: "#b5b5b5"
typography:
  display:
    fontFamily: "\"PP Neue Montreal Text Regular\", \"PP Neue Montreal Text Regular Placeholder\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.72px"
  display-mobile:
    fontFamily: "\"PP Neue Montreal Bold\", \"PP Neue Montreal Bold Placeholder\", sans-serif"
    fontSize: 29.6px
    fontWeight: 700
    lineHeight: 26.64px
  heading:
    fontFamily: "\"PP Neue Montreal Bold\", \"PP Neue Montreal Bold Placeholder\", sans-serif"
    fontSize: 59.2px
    fontWeight: 700
    lineHeight: 53.28px
  body:
    fontFamily: "\"PP Neue Montreal Text Regular\", \"PP Neue Montreal Text Regular Placeholder\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-0.16px"
  link:
    fontFamily: "\"PP Neue Montreal Text Regular\", \"PP Neue Montreal Text Regular Placeholder\", sans-serif"
    fontSize: 14.08px
    fontWeight: 400
    lineHeight: 14.08px
    letterSpacing: "-0.5632px"
rounded:
  xs: 6px
  sm: 10px
  md: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 26px
  s9: 32px
  s10: 40px
components:
  link:
    textColor: "{colors.surface-black}"
    typography: "{typography.link}"
    padding: 8px
  nav:
    backgroundColor: "{colors.hero-red}"
    textColor: "{colors.ink-light}"
---

## Overview

`https://neuemontreal.com/` ("PP Neue Montreal – Grotesque Font by Pangram Pangram", lang en-CA) is the type specimen and sales page for PP Neue Montreal, a typeface from the foundry Pangram Pangram. The page is a long scroll (21,180px at a 1280px viewport, 1,360 visible elements) that behaves like a travel brochure: a hero titled "Official Travel Guide - Everything you need to know to experience PP Neue Montreal to its fullest", then sections for Story, In use, Weights, Ligatures, Languages, Accents and Variants. Postcards, a "Welcome to Neue Montreal" image of Montreal's modular Habitat housing complex, and stamp-like graphics carry the Montreal-travel conceit.

The first screen is red with the words "Neue Montreal" in giant black bold grotesque spanning the full width, thin black rules above and below, a pill-shaped nav of section names in a pale capsule, a circular "NM" mark at the left and a black pill button "Get PP Neue Montreal" at the right. The second screen drops to near-black with the line "Refined, Reworked, Reintroduced." in cream and then a giant staggered statement, "Out with the old, in with the Neue.", where words are individually coloured (green, cream, grey, yellow, red, blue, orange). The page is, in other words, a demonstration that the typeface can hold a layout alone.

Voice: confident, slightly wry, brochure-style. Sentences are short and fragmentary; section tags are plain nouns.

## Colors

Colours come from the stylesheet's token variables (published in the root as unnamed `--token-…` custom properties) and match the measured fills.

- **canvas `#1a1a1a`** is the body background and the largest area (weight 20,316). **ink `#f0e7d4`** is the cream used for large display words and "Story"-style headings; it is also a large background area (12,168), used as the light panel colour.
- **primary `#ff4000`** is an orange-red variable (`--token-b00d…`); it is the signature action/accent colour, measured on 23 text characters.
- **hero-red `#d82f2f`** is measured as the background of the header/hero element (the capture shows a grain-textured red over it), with `#ebebeb` (`ink-light`) as its text colour.
- **tag-orange `#ff6e3e`** (1,528 area) is a second orange fill. **surface-black `#000000`** is the black used for link text (314 characters) and the black pill button.
- **ink-secondary `#252525`** is the most-read text colour by characters (5,652), the dark body copy on cream panels.
- Accent set published as tokens: green `#18bc42` (23 characters, 895 area), blue `#4365ff` (20 characters), yellow `#efc21e`, pink `#dc3c84`, lime `#bdd116`, neutral grey `#b5b5b5` (1,147 area). Two more measured fills, a violet `#6157bd` and a yellow `#ebe23e`, appear in the background list but are not tokenised here.

The palette is saturated and multi-hued on purpose: the specimen uses colour per word to show the weights and variants rather than to encode meaning.

## Typography

The site sets everything in its own product. Loaded faces include PP Neue Montreal in Hairline 100, Extralight 150, Thin 250, Light 300, Book 350, Regular 400, Medium 500, Semibold 600, Bold 700, Extrabold 800 and Black 900, Extrabold Italic, the Text family (Thin, Light Italic, Regular, Italic, Medium, Semibold) and variable builds. By characters: Text Regular 6,529, Text Variable 735, Bold 82, Text Semibold 81, Black 75.

- **body**: PP Neue Montreal Text Regular, 16px/16px, -0.16px tracking (5,776 characters at 16px).
- **display** (h1 and h3-style subtitles such as "Story"): Text Regular 24px/24px, -0.72px tracking.
- **heading** (the "Official Travel Guide" h2): PP Neue Montreal Bold 59.2px/53.28px.
- **link** (e.g. "Neue Montreal Text"): Text Regular 14.08px, -0.5632px tracking.
- **display-mobile**: Bold 29.6px/26.64px; the mobile measure of the h2.

Other measured display sizes by characters: 19.2px (523), 48px (176), 40px (116), 64px (73), 160px (66), 83px (62) and 96px (52). The giant hero lettering belongs to the 160px and above range; those sizes' exact families are not attributed here. Line-height is set equal to or below font-size throughout and tracking is negative: a tight, poster-like setting. Weights by characters: 400 (7,391), 600 (103), 900 (80), 700 (77), 800 (59), 250 (54), 500 (37), 300 (23).

## Layout

The page is a stack of full-width bands. The header holds a circular logo at the left, a centred capsule nav (Story, In use, Weights, Ligatures, Languages, Accents, Variants) and the black "Get PP Neue Montreal" pill at the right. The hero band uses the full viewport width for the two-line wordmark. Thin one-pixel rules divide the introduction from the lead line. Below, the dark band carries the staggered colour statement; later bands hold postcard images centred in a narrow column, then specimen grids.

Measured spacing values: 2, 4, 8, 10, 12, 16, 24, 26, 32 and 40px. Footer text is `#1a1a1a` at 16px on the cream panel, with a measured vertical translate of 50px (`matrix(1, 0, 0, 1, 0, 50)`) recorded on the footer. Footer height measured: 520px.

## Elevation & Depth

No box-shadow was measured. Depth comes from colour blocking, grain texture on the red hero, rules, overlapping text (the "Official Travel Guide" heading overlaps the lead line in the capture) and imagery that sits as flat postcards. The nav capsule is a pale `#ebebeb` pill on the red band, distinguished only by its fill.

## Shapes

Radii measured: 1000px (9 elements), 10px (3), 6px (2), 999px (2), 100px (1). The per-element assignment of each radius was not recorded; in the capture the nav capsule, the "NM" mark and the black button are pill or circle shapes and the postcards have small rounded corners. Pills are the signature shape: controls look like capsules and labels like stickers.

## Components

- **Capsule nav**: pale `#ebebeb` pill with dark 14px labels of the typeface's Text Regular and negative tracking.
- **"Get PP Neue Montreal" button**: black pill, light 14px label, at the top right. Hover measured on this element: its text went from `#ebebeb` to `#1a1a1a` and its background stayed `#1a1a1a` (as recorded by the hover probe).
- **Link**: black `#000000` text, 14.08px, 8px padding.
- **Postcards**: framed images with small rounded corners (the 6px and 10px radii were measured on the page), centred in the dark band.
- **Rotating badge**: a circular wavy-text ring at the top right of the hero, beside a small thumbnail photo.
- **Giant word statement**: per-word colour changes in cream, green, grey, yellow, red, blue, orange.

## Design System Architecture

No public design-system documentation was opened for this site, so none is cited. Colours are published as UUID-named custom properties (`--token-175c2ec0-…` for `#d82f2f`, `--token-6a306414-…` for `#1a1a1a`, `--token-b00d0b12-…` for `#ff4000`, and so on), and the font stacks use auto-generated "Placeholder" fallback families (for example "PP Neue Montreal Text Regular Placeholder") named in the loaded-font list. The de-facto system is therefore: ten or so named colour tokens, one typeface family used at every weight, pill radii and negative tracking. Measured from `https://neuemontreal.com/`.

## Do's and Don'ts

- Do set everything in PP Neue Montreal; vary weight (250 to 900) and size rather than switching families.
- Do keep tracking negative (-0.16px at 16px, -0.72px at 24px) and line-height at or below font-size.
- Do use `#1a1a1a` and `#f0e7d4` as the base pair and bring in `#ff4000`, `#d82f2f` and the accent set as colour blocks.
- Do use pill shapes (999px or above) for controls.
- Don't add shadows or gradients; none were measured.
- Don't colour display words by meaning; colour is a specimen device.
- Don't use the dark `#252525` ink on the dark canvas; it is the copy colour for cream panels.
- Don't drop the thin rules that organise the hero.

## Responsive Behavior

The mobile pass recorded type only. The h2 changed from 59.2px/53.28px to 29.6px/26.64px (Bold, `#ebebeb`). The mobile size distribution was 15px (791 characters), 10px (479), 13px (468), 12px (291), 23px (159) and 25px (133). Mobile nav shape, column counts and breakpoints were not measured.

## Iteration Guide

1. Start from `canvas #1a1a1a`, `ink #f0e7d4`, `primary #ff4000`.
2. Use PP Neue Montreal Text Regular at 16px/16px with -0.16px tracking for body; Bold at 59.2px/53.28px for section headings.
3. Make controls capsules (radius 999px+), small text, with the nav in `#ebebeb`.
4. Use `hero-red #d82f2f` for the opening band; use the accent tokens for per-word colour demonstrations only.
5. Keep layout to full-width bands divided by 1px rules.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=pp-neue-montreal --url=https://neuemontreal.com/ --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=pp-neue-montreal`.
