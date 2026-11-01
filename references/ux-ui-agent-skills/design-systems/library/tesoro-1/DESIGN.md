---
version: alpha
name: Tesoro
category: "Tech & AI"
description: "Tesoro rewards platform for the gaming economy: charcoal canvas #222222, cream ink #fdf8f3, five saturated swatches (coral #ff6b4a, gold #ffb627, green #3ace67, teal #00b8a9, fuchsia #d464dc), Polymath Display 700 headlines over Systemia, chamfered translucent buttons."
colors:
  canvas: "#222222"
  ink: "#fdf8f3"
  primary: "#3ace67"
  on-primary: "#222222"
  green-dark: "#2a4935"
  black: "#000000"
  ink-soft: "#ffffffb3"
  ink-faint: "#ffffff80"
  hairline: "#ffffff1a"
  coral: "#ff6b4a"
  coral-light: "#ffc7bb"
  gold: "#ffb627"
  teal: "#00b8a9"
  fuchsia: "#d464dc"
typography:
  display:
    fontFamily: "\"Polymath Display\", Arial, sans-serif"
    fontSize: 38.2816px
    fontWeight: 700
    lineHeight: 36.3675px
  display-mobile:
    fontFamily: "\"Polymath Display\", Arial, sans-serif"
    fontSize: 28.7497px
    fontWeight: 700
    lineHeight: 27.3122px
  heading:
    fontFamily: "\"Polymath Display\", Arial, sans-serif"
    fontSize: 85.1552px
    fontWeight: 700
    lineHeight: 80.8974px
  subheading:
    fontFamily: "\"Polymath Display\", Arial, sans-serif"
    fontSize: 27.4368px
    fontWeight: 700
    lineHeight: 32.9242px
  body:
    fontFamily: Systemia, Arial, sans-serif
    fontSize: 23.4368px
    fontWeight: 400
    lineHeight: 30.4678px
  button:
    fontFamily: Systemia, Arial, sans-serif
    fontSize: 13.7184px
    fontWeight: 500
    lineHeight: 16.4621px
    letterSpacing: "-0.274368px"
    textTransform: uppercase
  nav:
    fontFamily: Systemia, Arial, sans-serif
    fontSize: 17.7184px
    fontWeight: 400
    lineHeight: 24.8058px
rounded:
  none: 0px
  xs: 4px
  sm: 8px
  md: 32px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
components:
  button-primary:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px
    height: 42px
  button-primary-hover:
    textColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 42px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.coral}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.coral-light}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

Tesoro (https://www.tesoroxp.com/, title "Tesoro - The Rewards Platform Powering the $125 Billion Gaming Economy") is a card-linked rewards platform that connects merchants, game studios and gamers. The page is 6,844px tall at 1280px. It opens on a full-bleed, warm-graded photo of a credit card being inserted into a terminal, over which sits a giant cream "TESORO" wordmark with a registered mark and the statement "The rewards platform built for the $125+ Billion gaming economy". The nav floats top right: MERCHANTS, GAME STUDIOS, GAMERS and a gradient "JOIN THE WAITLIST" pill that blends orange into green.

Below the hero the page is dark charcoal. The headline "Your brand. Their game. Everyone wins." appears with its second line in an orange-to-green gradient, followed by "Our patented system connects brands to gamers like never before." Then four rounded square tiles, staggered vertically, each a different saturated color with a black pictogram: Connect (coral), Activate (gold), Spend (green), Reward (teal). A hexagonal-ended chip labelled "FOR THE MERCHANT" leads into a new section titled "Connecting brands to gamers like never before." The voice is short, confident and playful; the aesthetic is game-UI meets fintech.

## Colors

The page is dark: `canvas` is `#222222` (`--swatch--dark-base`), the largest measured background (7,745), and `ink` is warm cream `#fdf8f3` (`--swatch--light-base`) for headlines and most copy (816 characters). Secondary copy is white at 70% (`#ffffffb3`, 355 characters) and 50% (`#ffffff80`). A cream section (`#fdf8f3`, weight 1,026) also exists as a light band, with dark `#222222` text (72 characters). A 10%-white fill `#ffffff1a` is the hairline and the nav chip fill.

The brand's color system is a named swatch set declared on `:root`, each with dark, base and light steps: coral `#ff6b4a` (light `#ffc7bb`, base `#fee0d7`, dark `#9c3123`), gold `#ffb627` (light `#ffdfa0`, base `#feebc9`, dark `#664910`), green `#3ace67` (light `#94ffb4`, base `#c8fbd4`, dark `#2a4935`), teal `#00b8a9` (light `#99e3dd`, base `#cbede8`, dark `#1c413e`) and fuchsia `#d464dc` (light `#f3a9f9`, base `#f8d0f6`, dark `#552858`). The four tiles use coral, gold, green and teal fills with light-step borders (`#ffc7bb`, `#ffdfa0`, `#94ffb4`, `#99e3dd`). Text selection uses the green swatch (`--_theme---selection--background`), so `primary` is set to green `#3ace67`; the extractor did not measure the gradient waitlist button, so its stops are not recorded. `#2a4935` (green-dark) was measured as text on green chips. Dark cards use `--swatch--dark-card` `#1b1b1b`.

## Typography

Two families: Polymath Display (weight 700 only) for headlines and the wordmark-scale statements, and Systemia (400 and 500) for everything else. The measured sizes are fluid, a fractional scale generated from a clamp: h2 85.1552px/80.8974px (47.0009px on mobile), h1 38.2816px/36.3675px (28.7497px mobile), h3 27.4368px/32.9242px, body 23.4368px/30.4678px (20.2506px on mobile), nav 17.7184px/24.8058px, button label 13.7184px weight 500 with -0.274368px tracking, uppercase, and 60px for the largest display. Headline line-height is under 1 (about 0.95), giving the tight stacked look. The root variables define text trims of `.35em` top and bottom (`.39em` for the display family) so cap-height aligns to the box edges.

## Layout

Single-column, centered sections on a 1280px viewport. The hero wordmark spans nearly the full width; the h2 statement is a 993px centered block; the four tiles sit in one row and step down 32px each (in the capture), creating a diagonal rhythm. Measured paddings are 16px (19 elements), 8px, 12px and 24px; large section paddings of 162.282px and 29.7184px are also recorded. The footer repeats Merchants, Game Studios, Gamers, About, FAQs and a newsletter sign-up.

## Elevation & Depth

One layered soft shadow is measured on 10 elements: four stacked `0.02 to 0.04` alpha shadows with y-offsets 4.43px, 8.86px, 13.29px and 17.72px and blurs 8.86px to 26.58px in near-black `#1b1b1b` (color(srgb 0.1059...)). It is a smooth, low-contrast lift used on the tiles and cards. Otherwise depth comes from photography, tile staggering and the saturated fills against charcoal.

## Shapes

Radii in the extraction: `1280px` full pills (19 elements), 32px (14, the tile and card radius, `--radius--large` 2rem), 8px (2) and 4px (2). The root defines `--radius--main` 1.5rem, `--radius--small` .5rem and `--radius--round` 100vw. Buttons are not rounded: they use CSS `clip-path` polygons, a stepped-corner (pixel-notch, 7px) shape on the primary chips and a hexagonal chamfer (12px points) on the nav chips.

## Components

**Nav chip.** 42px high, 10%-white fill, cream 13.7184px weight 500 uppercase text, `0px 16px` padding, chamfered ends via `clip-path: polygon(12px 0%, calc(100% - 12px) 0%, 100% 50%, ...)`; on hover the text goes from `#fdf8f3` to `#222222`. **Primary chip.** The same fill with a stepped-corner clip path (7px notches), 16px padding, 129px wide for "GAME STUDIOS". **Waitlist pill.** Gradient orange to green, full pill (not measured in detail). **Tiles.** 32px-radius squares in coral, gold, green and teal with a light border and a black octagon-and-line pictogram, a 27.4368px bold title below and small cream body text. **Section chip.** "FOR THE | MERCHANT" is a two-part chip with a hexagonal join. **Footer.** `#222222` with 17.7184px cream links.

## Content & Voice

Copy is brief and rhythmic: three-beat slogans ("Your brand. Their game. Everyone wins."), a four-step verb sequence for the product (Connect, Activate, Spend, Reward) with one explanatory sentence each, and audience labels (Merchants, Game Studios, Gamers) that repeat in the nav, the footer and the section chips. Claims are concrete: the hero cites a $125+ billion gaming economy and the body text mentions a patent and direct integrations with Visa and Mastercard. Imagery mixes real-world photography (a hand and a card terminal) with flat geometric pictograms inside the colored tiles, so the page speaks both to payments and to games. The gradient on the second line of the hero slogan is the single decorative flourish in the type.

## Design System Architecture

No public design system or brand guideline was found; the home page links to none. The site is built in Webflow, and its CSS variables reveal a structured token system: `--swatch--*` for color (base, light, dark and 20%-opacity mixes), `--_typography---font--primary-family` and `--secondary-family`, `--_typography---font-size--h1` as a clamp, `--radius--small/main/large/round`, and `--_theme---*` variables for background, nav and button states. Some theme variables carry a "deleted" suffix from the Webflow variable editor. Webflow icon font (`webflow-icons`) is present.

## Do's and Don'ts

Do build on charcoal `#222222` with cream `#fdf8f3` text. Do give each concept its own swatch hue (coral, gold, green, teal, fuchsia) and pair a fill with its light-step border. Do set headlines in Polymath Display 700 with tight sub-1 line-height. Do use clipped chamfered shapes for buttons and 32px radii for tiles.

Don't use pure white or pure black fills for surfaces; use the cream and charcoal. Don't use more than the one low-alpha layered shadow. Don't round the nav chips with border-radius; they are polygon-clipped.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 drops to 28.7497px/27.3122px (317px wide), the h2 to 47.0009px/44.6509px (356px wide), body to 20.2506px/26.3258px in a 356px column, and the nav chip text to 12.1253px. A "GAME STUDIO" chip is the mobile CTA candidate, with the same translucent fill. Menu behavior and other breakpoints were not recorded.

## Iteration Guide

1. Canvas `#222222`, ink `#fdf8f3`, with the five swatches for accent and tiles.
2. Headlines in Polymath Display 700 at line-height about 0.95; body in Systemia 400.
3. Build chips with `clip-path` instead of radius; tiles at 32px radius with light-step borders.
4. Add the single layered soft shadow to tiles only.
5. Use fluid type via clamp and keep the trim variables for optical alignment.
6. Re-measure merchant, studio and gamer sub-pages before documenting them.
