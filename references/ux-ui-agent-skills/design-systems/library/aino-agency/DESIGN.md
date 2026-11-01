---
version: alpha
name: Aino
category: "Portfolio"
description: "Aino (aino.agency), Scandinavian e-commerce design agency: warm #f5f5f0 canvas, #181818 ink, ABC Plus weight 720 36.8px statements, 12.27px uppercase labels, coded portfolio captions, no radius or shadow."
colors:
  canvas: "#f5f5f0"
  ink: "#181818"
  primary: "#181818"
typography:
  display:
    fontFamily: abcplus, helvetica, sans-serif
    fontSize: 36.8062px
    fontWeight: 720
    lineHeight: 37.9259px
    letterSpacing: "-1.10419px"
  display-mobile:
    fontFamily: abcplus, helvetica, sans-serif
    fontSize: 27.8117px
    fontWeight: 720
    lineHeight: 29.25px
    letterSpacing: "-0.83435px"
  heading:
    fontFamily: abcplus, helvetica, sans-serif
    fontSize: 12.2687px
    fontWeight: 500
    lineHeight: 17.0667px
    letterSpacing: 0.54px
    textTransform: uppercase
  body:
    fontFamily: abcplus, helvetica, sans-serif
    fontSize: 22.0837px
    fontWeight: 500
    lineHeight: 25.284px
    letterSpacing: "-0.441674px"
  nav:
    fontFamily: abcplus, helvetica, sans-serif
    fontSize: 12.2687px
    fontWeight: 400
    lineHeight: 15.8025px
    letterSpacing: 0.54px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 7.9px
  s2: 15.8px
  s3: 31.6px
  s4: 47.41px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
  nav:
    textColor: "{colors.ink}"
    padding: 15.8025px 0px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    padding: 31.6049px 15.8025px 0px
---

# Aino

## Overview
Aino (aino.agency, titled "Aino — Design & Technology Agency") is a Scandinavian agency, based in Gothenburg and Oslo per the home page, that "designs and builds online stores for fashion and lifestyle brands." The measured home page is a warm off-white canvas (`{colors.canvas}` #f5f5f0) with near-black ink (`{colors.ink}` #181818). The top row is a monospace-looking uppercase navigation (AINO, WORK, SERVICES, ABOUT, PLAY, SETTINGS, CONTACT) spread across the width. Below it, a two-column portfolio grid of tall photographic tiles, each captioned with a catalog code and client name in small uppercase ("A002 SANDISK", "A004 SAMSØE SAMSØE", "A001 NUDIE JEANS", "A020 EMMA S"). Between rows a 36.8px statement reads "A design and technology agency in Scandinavia. We design and build online stores for fashion and lifestyle brands.", followed by two light-gray buttons, "ALL WORK" and "OUR SERVICES".

Imagery is client work shown as product and campaign photography and as website mock-ups inset in full-bleed images (a store page floating over a close-up of sunglasses, a navigation menu over a soft abstract photo). The grid is irregular: some tiles fill a column, others are small and offset to the right. The page copy is confident and concise ("Scandinavian design with engineering underneath"). Services listed on the page include Centra Accelerator, Centra Agency, Fashion E-commerce, Brink Commerce, Replatforming, Shopify Accelerator, Shopify Liquid Themes, Design Studio, Intelligence Layer and Slash Portal. The page measured 6,110px tall at 1280px.

## Colors
The palette is two values. Canvas `{colors.canvas}` #f5f5f0 covers 4,994 units of painted area and is the only background; text is `{colors.ink}` #181818 for all 786 measured characters. `{colors.primary}` is also #181818. The shipped CSS publishes them as RGB triplets: `--light: 245, 245, 240` and `--dark: 24, 24, 24`, plus `--pure-white: #fff` and `--pure-black: #000`. On the 390px pass the "OUR SERVICES" button measured a translucent fill #1818181a (ink at 10% alpha) with #181818 text. Photographic tiles bring all the color on the page; the interface itself stays neutral.

## Typography
One family, **ABC Plus** (loaded as `abcplus`, with `abc`, weights 100 to 800), stack `abcplus, helvetica, sans-serif`. The root defines `--mono: mono, monospace`, `--font-size: 12.433px`, `--letter-spacing: .54px` and a 16px line unit.
- `display` 36.8062px / 720 / 37.9259px, letter-spacing -1.10419px: the agency statement (h1).
- `display-mobile` 27.8117px / 720 / 29.25px, letter-spacing -0.83435px.
- `body` 22.0837px / 500 / 25.284px, letter-spacing -0.441674px.
- `heading` 12.2687px / 500 / 17.0667px, letter-spacing 0.54px, uppercase: section labels such as "FIND OUT MORE".
- `nav` 12.2687px / 400 / 15.8025px, letter-spacing 0.54px, uppercase.
The weight 720 on the display is a variable-font value. Small text is uppercase with positive tracking; large text is mixed case with negative tracking.

### Measured type distribution
Three sizes cover the page: 12.2687px (455 characters), 22.0837px (217 characters) and 36.8062px (114 characters). Weights are 500 (569 characters), 720 (115) and 400 (102). Letter-spacing pairs measured are 12.2687px with 0.54px (284 characters, the uppercase labels), 22.0837px with -0.441674px (217), 12.2687px with 0.02px (171, the caption text) and 36.8062px with -1.10419px (114). The tracking is about -3% on the display, -2% on the body and +4.4% on the uppercase labels, which are computed from those measured pairs.

### Content structure
The home page is a catalogue: each tile carries a sequence code (A001, A002, A004, A020) and the client name in uppercase, which presents the agency's work like an index of releases. Statements are short, declarative and set at the 36.8px size, then followed by two buttons. Journal and Careers links, a closing call "Join us in building the future of digital commerce." and social links (LinkedIn, Instagram) are on the page as text. Gaps between elements are measured as 15.8025px (34 elements) and 7.90123px (2).

## Layout
The shipped CSS defines a strip-based grid: `--cols: 162`, `--col: 42`, `--ch: 8`, strips `--strip-1` 20 through `--strip-8` 174 in 22px steps, and `--screen-height: 800`. Spacing tokens measured are 7.9px, 15.8px, 31.6px and 47.41px (multiples of 7.9). The nav uses padding 15.8025px 0px 0px and the footer 31.6049px 15.8025px 0px. Portfolio tiles sit in two equal columns with a small gutter and tall aspect ratios, captions below the image.

## Elevation & Depth
None measured: no box-shadow (`boxShadows` is empty), no recorded gradients and no overlays in the CSS frequencies. The page is a flat sheet of #f5f5f0 on which photographs sit directly with no frame, border or shadow. Mock-up screenshots inside the tiles supply their own depth within the photographs: a browser-like card over a blurred photo, and a white menu card over an abstract image. Hierarchy comes from size and weight only. There is no stacking of surfaces, no sticky translucent header was recorded, and no focus or hover elevation was measured.

The home page text also links the agency's offer in a service list and ends with a recruiting line, so the layout closes on text rather than on imagery: the capture ends mid-grid with two more tiles (one grey, one dark brown photograph with an inset store page labelled Gulled), and the footer holds the Journal, Careers, LinkedIn and Instagram links. Rows alternate between a full pair of equal tiles and an asymmetric row that places one large tile at the left and one small tile at the right edge, which keeps the grid from reading as a template.

## Shapes
No radius measured on interface elements (`borderRadii` empty), although the root defines `--border-radius: calc(var(--char) * .4)`; where it applies, it was not measured on a visible element. Image tiles are rectangular.

## Components
- **nav-link / link**: ink, uppercase 12.2687px with 0.54px tracking; on hover the measured link text scrambles (for example "WORK" shows "WEÖÉ"), with no change of color, background or border.
- **buttons** "ALL WORK", "OUR SERVICES": pale gray rectangles with small uppercase labels, the 10%-alpha ink fill measured on mobile.
- **portfolio tile**: image plus caption "A### CLIENT" in uppercase.
- **footer**: ink text, padding 31.6049px 15.8025px 0px.

## Design System Architecture
Aino's home page links no public brand guideline or design system. The shipped CSS is a custom system: rgb-triplet color variables (`--black-rgb`, `--white-rgb` resolved into `--black` and `--white`), a character-based unit (`--ch`, `--char`) that drives radius and spacing, 162-column strip variables, and a mono font alias. Sources opened: https://aino.agency (page text and shipped CSS).

## Do's and Don'ts
- Do keep the interface to #f5f5f0 and #181818 and let client imagery carry color.
- Do set labels in uppercase 12.2687px with 0.54px tracking.
- Do set statements in ABC Plus weight 720 with negative tracking.
- Do caption every tile with a code and client name.
- Don't add shadows, gradients or radius.
- Don't use pure black or pure white for the interface; they are defined but the measured surfaces use #181818 and #f5f5f0.

## Responsive Behavior
Measured at 390px: the h1 is 27.8117px / 720 / 29.25px with letter-spacing -0.83435px, and the "OUR SERVICES" button uses a 12.6417px uppercase label with a #1818181a fill. Column counts, breakpoints and navigation on mobile were not measured.

## Iteration Guide
Start from the measured facts: canvas #f5f5f0, ink #181818, one family (ABC Plus) in weights 400, 500 and 720, three sizes (12.2687px, 22.0837px, 36.8062px) with their paired tracking, spacing in multiples of 7.9px (7.9, 15.8, 31.6, 47.41) and no radius, shadow or border recorded. Add imagery before adding decoration: the page has no interface ornament, so every visual accent comes from client photography and the mock-ups inside it.
1. Canvas #f5f5f0, ink #181818.
2. Headline 36.8062px weight 720; labels 12.2687px uppercase.
3. Two-column tile grid with coded captions.
4. Hover text effect only, no fills.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=aino-agency --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=aino-agency`.
