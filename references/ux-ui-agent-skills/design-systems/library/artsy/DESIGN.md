---
version: alpha
name: Artsy
category: "Design Systems"
description: "Artsy's marketplace site and its open Palette system — a near-monochrome gallery wall in ll-unica77 (Helvetica Neue fallback) with black text on white, grey ramp #707070 to #f7f7f7, black 15px-radius pill buttons that turn Artsy blue #1023d7 on hover, and 3px-radius search inputs; the art supplies all the colour."
colors:
  canvas: "#ffffff"
  page-largest: "#e7e7e7"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-subtle: "#f7f7f7"
  ink-muted: "#707070"
  ink-on-image: "#ffffffb3"
  brand-blue: "#1023d7"
  text-input-border: "#c2c2c2"
  grey-15: "#d8d8d8"
  brand-blue-pressed: "#0A1C7B"
  brand-blue-deep: "#050e3e"
  blue-tint: "#E6E7F5"
  green: "#00674A"
  yellow: "#E2B929"
  orange: "#DA6722"
  red: "#D71023"
typography:
  display:
    fontFamily: ll-unica77, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-0.4px"
  display-mobile:
    fontFamily: ll-unica77, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.26px"
  body:
    fontFamily: ll-unica77, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: ll-unica77, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 13px
  nav:
    fontFamily: ll-unica77, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
rounded:
  xs: 3px
  sm: 15px
  md: 25px
  pill: 9999px
spacing:
  s1: 1px
  s2: 10px
  s3: 20px
  s4: 25px
  s5: 40px
  s6: 60px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 1px 25px
    height: 30px
    borderColor: "{colors.ink}"
  button-primary-hover:
    backgroundColor: "{colors.brand-blue}"
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 1px 25px
    height: 30px
    borderColor: "{colors.ink}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 0px 33px 0px 10px
    height: 40px
    borderColor: "{colors.text-input-border}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

Artsy.net behaves like a quiet gallery. The capture shows a white header with a square "A" logo mark, a long search field ("Search by artist, gallery, style, theme, tag, etc."), text links (Buy, Artsy for Galleries, Price Database, Editorial) and two small pills, an outlined "Log In" and a filled black "Sign Up". A second row lists the catalogue sections: What's New, Artists, Artworks, Auctions, Viewing Rooms, Galleries, Fairs & Events, Shows, Museums, Collecting 101.

The hero is a split panel: a cropped painting on the left half and, on the right, a pale grey field with the 40px headline "Fresh Picks for Fall", a grey subheading and an outlined "Shop Now" pill. Four segmented progress lines and two round arrows sit beneath it. Below follow content rails in a consistent rhythm: "Featured" (editorial cards with a tiny label like "News" or "Artsy Editorial", a large 26px headline and an image above), "Curators' Picks" (a horizontally scrolling rail of artworks with artist, italic title and year, gallery, and price, plus a heart icon) and "Artsy Editorial" (one large image and two cards).

The tone is neutral and respectful of the artwork. There is no brand colour in the surface; the only chromatic accent is Artsy blue (#1023d7), which appears on hover. Information hierarchy comes from scale and grey, not from decoration: black for titles, #707070 for artist and gallery details and subheadings. Imagery is full-bleed or on white mats, cropped inconsistently on purpose so the grid feels like a hang. Microcopy is short and direct ("Shop Now", "View All Works", "Explore Editorial").

## Colors

The palette is published in the open-source Palette tokens (https://raw.githubusercontent.com/artsy/palette/main/packages/palette-tokens/src/themes/v3.tsx), whose comments state the intended use of each swatch.

- **Mono ramp.** mono100 #000000 (text on mono10 and lighter), mono60 #707070 (text on mono5 and lighter), mono30 #C2C2C2 and mono15 #D8D8D8 and mono10 #E7E7E7 (background only), mono5 #F7F7F7 and mono0 #FFFFFF. On the page: canvas #ffffff, ink #000000, **ink-muted #707070**, **surface-subtle #f7f7f7** (the hero's right panel), **page-largest #e7e7e7** (the largest measured background area) and **text-input-border #c2c2c2** (input border).
- **Brand blue.** blue100 and the alias `brand` are #1023D7; blue150 #0A1C7B and blue200 #050e3e are the pressed states; blue10 #E6E7F5 and blue15 #cacdec are tints. On the live site the Sign Up pill turns from black to #1023d7 on hover and the "Buy" nav link text turns #1023d7.
- **Semantic.** green100 #00674A, yellow100 #E2B929, orange100 #DA6722, red100 #D71023 (and red50 #FF1023 for "importance/urgency indicators"), each with a darker hover or pressed value and a pale background tint.
- **Ink-on-image #ffffffb3** is white at 70% opacity for overlay captions on photographs.

Primary is #000000, not blue: the only measured primary CTA, Sign Up, is black with white text. In Palette's button tokens the `primaryBlack` variant is black, and its hover, focus and success states all go to blue100 (#1023D7) with an underline, while active goes to blue150.

## Typography

One family carries everything: ll-unica77 (Lineto's Unica77) with fallbacks "Helvetica Neue", Helvetica, Arial and sans-serif. Palette defines the font stack as `"ll-unica77", "Helvetica Neue", Helvetica, Arial, sans-serif` and a single `sans` font (https://raw.githubusercontent.com/artsy/palette/main/packages/palette-tokens/src/typography/v3.ts). The site loads regular, italic and bold faces; italics are used for artwork titles.

| Role | Size / line | Weight | Tracking |
|---|---|---|---|
| display (hero and rail titles) | 40px / 48px | 400 | -0.4px |
| display-mobile | 26px / 32px | 400 | -0.26px |
| body and nav | 16px / 26px | 400 | normal |
| button (small) | 13px / 13px | 400 | normal |

The page also uses 26px / 32px for card headlines and 13px / 20px for captions and labels. Palette's text variants are named xxxl (102px/108px), xxl (60px/70px), xl (40px/48px), lg (26px/40px), lg-display (26px/32px), md (20px/32px), sm (16px/26px), sm-display (16px/20px), xs (13px/20px), xxs (11px/14px) and bq (50px/60px), with -0.01em tracking on the large sizes. The measured 40px and 26px headlines carry -0.4px and -0.26px, which equals -0.01em. Weight is mostly 400; the footer uses 700 for its column headings. Palette's `TextTreatment` type allows only "normal" and "bold" weights.

**Font substitutes.** ll-unica77 is commercial. Helvetica Neue is the documented fallback; Inter or Arimo are near substitutes in open source.

## Layout

A consistent left margin holds all content on desktop (the header and the rails start at the same left edge), with a full-bleed hero. Horizontal rails scroll past the right margin, signalling more content, and show about six items at once in the capture. Palette defines its spacing scale as 5px (half), 10px, 20px, 40px, 60px and 120px (the `space` tokens in the same v3 theme file), and the page's measured gaps of 10px, 20px, 40px and 60px match. Breakpoints in the tokens are xs 767px, sm 768px, md 1280px and lg 1920px.

## Elevation & Depth

Almost flat. The extracted page shows no active box shadows. Palette nonetheless defines three: dropShadow `0 2px 10px 0 rgba(0, 0, 0, 0.08)`, innerShadow `1px 1px 2px 0 rgba(0, 0, 0, 0.1) inset` and flatShadow `0 1px 1px 0 rgba(0, 0, 0, 0.05)`, plus a text shadow `0 0 15px rgba(0, 0, 0, 0.25)` and an overlay gradient (black from 0% to 50%) to keep caption text legible over images, and a translucent backdrop `rgba(229, 229, 229, 0.5)` for dialogs. On the page, grey fields (#f7f7f7, #e7e7e7) and thin 1px borders do the separating work.

## Shapes

Containers and images are square: artworks must never be rounded or cropped by decoration. Controls are rounded: buttons are pills (15px radius at 30px height, 25px radius at 50px height) and the text input has a small 3px radius with a 1px #c2c2c2 border. The hero's "Shop Now" is an outlined pill. Carousel arrow buttons are circular. Progress indicators are thin lines, not dots.

## Components

**Button.** On artsy.net the Sign Up button is the small size: black fill, white 13px label, 30px tall, 15px radius, 1px/25px padding, 1px solid black border. Hover is #1023d7 with an underlined label. "Log In" is the secondary: transparent with a black border and black text. In the Palette Storybook the default large button measures 50px tall with a 25px radius, 16px label, and a 1px black border, with padding 1px 25px.

**Text input.** 40px tall on the site search (50px in Palette's story), white fill, 1px #c2c2c2 border, 3px radius, 10px left padding, a magnifier icon on the right, 16px text.

**Nav.** 16px / 26px black links, a 47px tall hit area, hover colour #1023d7.

**Artwork card.** Image on a white mat; below it the artist (black, 13 to 16px), the italic title and year in #707070, the gallery in #707070 and the price in black; a heart outline on the right.

**Editorial card.** 13px label, 26px headline, image above.

**Rail controls.** Two outlined circular arrows and a thin segmented progress bar.

**Footer.** Link columns (About us, Jobs, Press, Contact, Resources, Open Source) with bold 16px headings on white.

## Design System Architecture

Artsy's design system is Palette, "Artsy's Design System", an open-source React library at https://github.com/artsy/palette whose README describes it as "a collection of primitive, product-agnostic elements that help encapsulate Artsy's look and feel at base level" (https://raw.githubusercontent.com/artsy/palette/main/README.md, which I opened). The README says the older docs site is deprecated in favour of Storybook; the dsUrl https://palette.artsy.net serves that Storybook (title "storybook - Storybook"), and its published index lists Guides, Components and a Theme section (Colors, Spacing, Grid, Typography, Buttons, Inputs, Effects, Contrast ratios).

The monorepo contains the packages `palette`, `palette-tokens` and `palette-charts`. `palette-tokens` is described as "the design tokens that power Artsy's Palette" and is "not intended to be consumed directly". The tokens file defines breakpoints, a colour set (mono, blue, green, yellow, orange and red ramps whose comments state valid text/background pairings), effects and a space scale, plus a separate dark theme file. Button styles are defined in `tokens.ts` as a table of variants (primaryBlack, primaryWhite, primaryBlue, primaryGray, secondaryBlack, secondaryBlue, secondaryWhite, secondaryNeutral) by state (default, focus, hover, active, loading, disabled, success), where colours are referenced by token name.

I measured the Storybook with the extractor: the Button primary, Button secondary and Input stories, plus the Theme Colors and Typography pages (slugs artsy--button-primary, artsy--button-secondary, artsy--input, artsy--colors and artsy--typography). Those measurements gave the large button (50px, 25px radius, 16px type), the input (50px, 3px radius, #c2c2c2 border) and the type sizes 16, 26, 40, 50, 60 and 102px.

## Do's and Don'ts

Do
- Let artwork be the colour; keep chrome black, white and grey.
- Use #707070 for secondary information and keep the ink for titles and prices.
- Show hover and focus with blue (#1023d7) and an underline.
- Use pills for actions and square corners for images.
- Keep labels short and sentence-like: "Shop Now", "View All Works".

Don't
- Don't use blue as a resting fill for ordinary buttons; it is the interaction colour.
- Don't put text on mono30, mono15 or mono10 backgrounds in grey; Palette limits those swatches to backgrounds.
- Don't round artwork images.
- Don't add drop shadows to cards; use grey fields and thin borders.
- Don't set letter-spacing on small text; only the large sizes get -0.01em.

## Responsive Behavior

Palette defines four breakpoints: xs below 767px, sm 768 to 1279px, md 1280 to 1919px and lg 1920px and above (v3.tsx), and offers a responsive-size Button story. The measured mobile headline is 26px on a 32px line, down from 40px on a 48px line. On the homepage the card rails scroll horizontally; I did not capture a phone layout, so how the split hero reflows is not documented here. Touch targets in Palette's large button are 50px tall.

## Iteration Guide

1. Start with tokens: #ffffff, #000000, #707070, #f7f7f7, #1023d7.
2. Set ll-unica77 (or Helvetica Neue) at 40/48 for headlines, 16/26 for body, 13/20 for captions.
3. Build the pill button: 30px or 50px tall, radius half the height, 1px border, hover to #1023d7 with underline.
4. Build the artwork card: image, artist, italic title, gallery, price.
5. Compose rails with 20 to 40px gaps and a thin segmented progress bar.
6. Check pairings against Palette's stated text/background rules.
7. Run `node web/scripts/verify-designs.mjs --slug=artsy` after edits.
