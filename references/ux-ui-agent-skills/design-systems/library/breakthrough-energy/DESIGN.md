---
version: alpha
name: Breakthrough Energy
category: "Tech & AI"
description: "Breakthrough Energy home page (breakthroughenergy.org) measured 2026-10-15: a cream #fafbf8 canvas with near-black #12110e ink, a full-bleed dark video hero carrying a 122.816px Saans 500 headline at -4.91264px tracking, a 12-column grid with 1rem gutters, and declared accents of yellow #dfff5c, warm grey #c3bdb8 and beige #ddd9d4."
colors:
  canvas: "#fafbf8"
  ink: "#12110e"
  primary: "#12110e"
  surface-grey: "#808080"
  ink-light: "#ffffff"
  ink-pure-black: "#000000"
  hairline: "#12110e4d"
  accent-yellow: "#dfff5c"
  warm-grey: "#c3bdb8"
  beige: "#ddd9d4"
typography:
  display:
    fontFamily: Saans, helvetica, arial, sans-serif
    fontSize: 122.816px
    fontWeight: 500
    lineHeight: 130.185px
    letterSpacing: "-4.91264px"
  display-mobile:
    fontFamily: Saans, helvetica, arial, sans-serif
    fontSize: 55.497px
    fontWeight: 500
    lineHeight: 53.8321px
    letterSpacing: "-2.21988px"
  subheading:
    fontFamily: Saans, helvetica, arial, sans-serif
    fontSize: 55.1925px
    fontWeight: 500
    lineHeight: 59.3109px
    letterSpacing: "-1.10385px"
  body:
    fontFamily: Saans, helvetica, arial, sans-serif
    fontSize: 15.6995px
    fontWeight: 400
    lineHeight: 18.5514px
  input:
    fontFamily: Saans, helvetica, arial, sans-serif
    fontSize: 29.8967px
    fontWeight: 500
    lineHeight: 50.8244px
    letterSpacing: "-0.597934px"
rounded:
  md: 9.6px
spacing:
  s1: 6px
  s2: 23.4px
  s3: 29.35px
  s4: 30.2px
  s5: 32px
components:
  nav:
    textColor: "{colors.ink}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 52px
---

## Overview

The measured page is the home page of Breakthrough Energy, `https://www.breakthroughenergy.org/` (title "Home", `lang` en), the clean-energy innovation platform. What the capture and extraction actually show is the opening screen: a full-bleed dark video hero in which a welder works in a workshop, a header strip with the two-line wordmark "Breakthrough Energy" at the left, a circular interlocking-loops symbol in the center and a menu icon at the right, and a very large headline set in three staggered lines: "Empowering innovators", "to build the future" and "of energy" (the last line right-aligned). A small "Scroll for more" prompt with a down arrow sits at the bottom left.

Everything below the hero appears as an empty cream field in the capture. The extraction recorded 232 visible elements and a 21,082px scroll height, so the lower sections were not rendered during the measurement and their styling was not measured. The brand's page text, read from the live site, lists these sections in order: the hero, "Energy is prosperity", "The opportunity AHEAD" (Affordable, Reliable, Clean Energy), a founder quote with an "Open video modal" button, "This is energy innovation on a global scale" with portfolio counts and a "Full Portfolio" link, "Investing in Opportunity" (DISCOVER, DEVELOP, DEPLOY) and a newsletter sign-up headed "No Noise. Just Breakthroughs." with "Your Full Name" and "Your Email" fields and a "Submit" button. This document describes the measured styling only for what the extraction recorded: the hero headline, the body text, the sign-up heading and its input.

The tone is confident and editorial: huge tightly tracked headlines, plain short copy, and a lot of cream space. The design relies on scale contrast between 122.816px display type and 15.6995px body text rather than on color or ornament.

## Colors

The measured palette is two neutrals, and the stylesheet declares a few quiet accents.

- **Canvas `#fafbf8`** (the root variable `--color-cream`) is the page background and the largest measured background area (weight 6,144).
- **Ink and primary `#12110e`** (`--color-black` and `--color-black-alt`, `rgb(18, 17, 14)`) is the most-read text color (407 characters). No button was detected, so `primary` carries the same near-black.
- **Grey `#808080`** (`--color-grey`, `rgb(128, 128, 128)`) is the second measured background (weight 668); cream `#fafbf8` text (59 characters) and white `#ffffff` text (38) are also measured, and `#000000` appears in 19 characters.
- **Hairline `#12110e4d`** is the root variable `--color-border` (`rgba(18, 17, 14, .3019607843)`) and the one measured border color.
- Declared in `:root` but not measured on a rendered element: **accent yellow `#dfff5c`** (`--color-yellow`), **warm grey `#c3bdb8`** (`--color-warm-grey`) and **beige `#ddd9d4`** (`--color-beige`). They are kept as tokens because the site publishes them as its own variables.

The h1 role reported `#12110e` although the capture shows light type over the dark video; both `#fafbf8` and `#ffffff` are among the measured text colors, and which one the hero headline uses was not isolated by the extraction. There are no gradients, and no hover or focus color was recorded.

## Typography

Two families are measured: **Saans** (492 characters) at weights 400 and 500, and **ItemsRegular** (31 characters, weight 400 loaded); the stylesheet declares only these two. The stack for Saans is `Saans, helvetica, arial, sans-serif`. No license or foundry page was opened, so treat both as proprietary.

| Role | Size / line height | Weight / tracking |
| --- | --- | --- |
| Display (hero headline) | 122.816px / 130.185px | 500, -4.91264px |
| Display at 390px | 55.497px / 53.8321px | 500, -2.21988px |
| Subheading ("No Noise. Just Breakthroughs.") | 55.1925px / 59.3109px | 500, -1.10385px |
| Body | 15.6995px / 18.5514px | 400 |
| Input | 29.8967px / 50.8244px | 500, -0.597934px |

Other measured sizes by characters: 31.3991px (49), 12px (31, tracked at 1.44px), 13.6995px (15). Weights are 400 (358 characters), 500 (116) and 700 (49). Sizes are non-integer values and change between the 1,280px and 390px measurements (display 122.816px to 55.497px; body 15.6995px to 14.0282px), so values must be read at the stated viewport. Tracking is strongly negative on large type (-4% of the size on the hero headline: -4.91264px on 122.816px) and loosens to -0.597934px on the 29.8967px input. **Font substitutes:** use a neutral grotesque with a Medium and a Regular weight, apply the measured negative tracking at large sizes, and keep body at 15.6995px with an 18.5514px line.

## Layout

The system is a documented 12-column grid. The root variables are `--grid-columns: 12`, `--grid-column-gap: 1rem`, `--grid-max-outer-width: 192rem` and `--grid-side-margin: min(calc((2rem) + (3.2 - 2) * (100vw - 37.5rem) / 106.5), 3.2rem)`, from which `--grid-width`, `--grid-max-width` and `--grid-column-width` are computed. The side margin therefore runs from 2rem at narrow widths up to a 3.2rem cap. Viewport-height helpers `--svh`, `--dvh`, `--lch` and `--dch` are also declared.

Measured spacing is small: gaps of 6px (twice) and 32px (once) and paddings of 30.1972px (5 times), 23.3991px (4) and 29.3474px (1). The hero headline measured 654px wide for its first word at the display size, and the newsletter heading block measured 594px wide by 227px high at desktop and 350px by 187px at 390px. The sign-up input measured 594px wide and 52px high.

## Elevation & Depth

The measured page has no box shadows and no gradients. Depth is created by the dark video hero against the cream canvas, and by overlaying light type on the video. The stylesheet declares only a cream ring shadow, `0 0 0 .4rem #fafbf8` (4 declarations), and an inset grey fill trick (`0 0 0 1000px grey inset`, once each in two spellings) in addition to `none!important` overrides. Where the ring is used was not measured.

## Shapes

No border radius was measured on any visible element. The one radius token, `md` 9.6px, is the most frequent radius declared in the stylesheet (9 declarations) and is not tied to a measured component. The stylesheet declares radii of 9.6px (9 declarations), 3px (8), 4.8px (4), 4px (3), 2.4px (3), 6px and 5px (2 each), 1.5px (2) and one each of 6.4px, 8px and 24px, none tied to a measured component. The visible shapes in the capture are the interlocking-loops circular symbol, thin line icons (a down arrow, a menu glyph) and large rectangular photography.

## Components

**Header.** Transparent over the hero: two-line wordmark at the left, circular symbol at the center, menu icon at the right. The DOM lists the label "Home" repeatedly with a "Toggle menu" control; it is the only navigation label on the page, as read from the live site.

**Hero headline.** Three lines of Saans 500 at 122.816px/130.185px with -4.91264px tracking, the third line right-aligned, over a dark workshop video.

**Scroll prompt.** A small down-arrow plus "Scroll for more" at the bottom left, set at the 12px tracked size.

**Newsletter block.** Heading "No Noise. Just Breakthroughs." (55.1925px/500), the line "Breaking Through is your shortcut to clean energy innovation..." at 15.6995px, and a text input at 29.8967px/500 with `#12110e` text and a 52px height. Its border and radius were not measured.

**Buttons and cards.** No primary or secondary button and no card were detected by the extraction, so no component tokens are declared beyond the nav and the input.

## Design System Architecture

No public Breakthrough Energy design system or brand-guideline page was found: the home page, read at https://www.breakthroughenergy.org/, contains no link to brand guidelines, a press kit, a design system or GitHub. The only publicly visible system is the stylesheet's own `:root`, which holds 22 variables: a color group (`--color-cream`, `--color-black`, `--color-black-alt`, `--color-grey`, `--color-yellow`, `--color-warm-grey`, `--color-beige`, `--color-border`, `--color-transparent`), the grid group (`--grid-*`) and viewport helpers. Fonts are declared as `Saans` and `ItemsRegular`. The extractor also flagged the footer as an overlay (`consentOverlaysHidden: ["TheFooter"]`) and hid it, so footer styling was not measured.

## Do's and Don'ts

**Do**
- Keep the canvas cream (`#fafbf8`) and the ink near-black (`#12110e`).
- Use very large Saans 500 headlines with strongly negative tracking and a line height only slightly above the font size.
- Lay content on the 12-column grid with a 1rem gutter and the fluid side margin.
- Reserve the yellow `#dfff5c` for small accents, as a declared variable, not as a background field.
- Let full-bleed documentary video carry the hero.

**Don't**
- Don't add shadows, gradients or rounded corners to hero or text blocks; none were measured.
- Don't use a heavy weight for headlines; the display is 500.
- Don't describe the lower page sections as styled in a particular way: they were not rendered in the measurement.
- Don't treat the grey `#808080` as a text color; it was measured only as a background area.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured values: the hero headline becomes 55.497px/53.8321px weight 500 with -2.21988px tracking (first word 297px wide, 54px high); body text is 14.0282px/16.2783px with `0 20px 0 0` padding and 280px wide; the newsletter heading block is 28.4507px/30.4465px, 350px wide and 187px high. The most-read mobile sizes are 14.0282px (312 characters), 55.497px (54), 28.0563px (47), 12px (31), 28.4507px (28) and 12.0282px (15). The grid's side margin formula in `:root` interpolates between 2rem and 3.2rem by viewport width. The mobile header and menu layout were not measured.

## Iteration Guide

1. Set canvas `#fafbf8`, ink `#12110e`, border `#12110e4d`, and add the declared accents `#dfff5c`, `#c3bdb8`, `#ddd9d4` only where needed.
2. Load Saans 400 and 500; apply the measured display, subheading, input and body sizes at 1,280px, and the 55.497px / 14.0282px values at 390px.
3. Build the 12-column grid from the `--grid-*` variables.
4. Create the hero: full-bleed dark video, three staggered lines of display type, a "Scroll for more" prompt.
5. Measure the lower sections first with `node web/scripts/extract-tokens.mjs --slug=breakthrough-energy--<page> --url=<url> --force --no-motion` after scrolling content into view; leave their styling out until then.
