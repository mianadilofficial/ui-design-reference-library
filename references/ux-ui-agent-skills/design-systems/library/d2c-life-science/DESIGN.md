---
version: alpha
name: D2C Life Science
category: "Tech & AI"
description: "D2C Life Science (d2c-lifescience.com) is a one-page GMP consultancy site built as a dark olive field (#717f71) with pale mint text (#e6f6ed), Atipla ND 700 uppercase headlines at 40px/41.6px, PP Fraktion Mono 12px uppercase body copy, 4px-radius mint buttons and a rotating 3D cube hero."
colors:
  canvas: "#717f71"
  body-root-white: "#ffffff"
  ink: "#e6f6ed"
  primary: "#e6f6ed"
  on-primary: "#717f71"
  ink-secondary: "#e6f6ed99"
  ink-muted: "#e6f6ed80"
  button-secondary-bg: "#e6f6ed1a"
  deep-green: "#2a2f2a"
  forest-green: "#2e3c2e"
typography:
  display:
    fontFamily: "\"Atipla ND\""
    fontSize: 40px
    fontWeight: 700
    lineHeight: 41.6px
    textTransform: uppercase
  subheading:
    fontFamily: "\"PP Fraktion Mono\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    textTransform: uppercase
  body:
    fontFamily: "\"PP Fraktion Mono\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
    textTransform: uppercase
  button:
    fontFamily: "\"PP Fraktion Mono\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: -0.56px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 6px
  md: 12px
spacing:
  s1: 3px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 19px
  s9: 24px
  s10: 33px
  margin-s: 12px
  margin-m: 24px
  margin-l: 48px
  margin-xl: 72px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 24px
    height: 48px
    border: "1px solid #e6f6ed"
  button-compact:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 34px
    border: "1px solid #e6f6ed"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
---

## Overview

D2C Life Science is a Good Manufacturing Practice (GMP) consultancy, and its site at https://www.d2c-lifescience.com/ presents itself the way a lab instrument panel would: a single dark olive-green field, pale mint type set entirely in capitals, and a large rendered 3D cube covered in pictogram tiles at the centre of the first screen. The document title is "D2C Life Science | Data Driven GMP" and the meta description reads "Through data-driven insights and hands-on leadership, we empower organizations to move beyond compliance, optimize operations, and create lasting impact."

The first viewport in the capture shows the whole composition. A square mint logo tile with the "D2C·Life science" wordmark sits top left; a single "CONTACT US" button with a small chevron sits top right. Between them the cube floats over a radial gradient that is lighter behind the cube and darker toward the corners. A thin horizontal hairline crosses the page at cube height with "ROSHEIM - FRANCE" and the coordinates "48.5 ... 7.46667" on the left and "SCROLL TO DISCOVER" with a double chevron on the right. Three small outlined glyph boxes (pixel-grid and hatch patterns) sit above the headline "DATA DRIVEN GMP. MEANINGFUL IMPACT." in the lower left, and a paragraph beginning "* WE DRIVE GMP EXCELLENCE BASED ON RISKS MANAGEMENT" sits lower right.

The voice is short, declarative and technical. Copy measured on the page includes "PRECISION IN DATA, IMPACT IN CULTURE", "EFFICIENT AND SECURE MANAGEMENT BASED ON A PROVEN METHODOLOG..." (the extractor truncates the string), "LET'S GET IN TOUCH!" and "EMAIL" as a field label next to the address CONTACT@D2C-LIFESCIENCE.COM. Everything is uppercase through `text-transform: uppercase`, which the extraction recorded on the h1, h2, h3, body and button roles.

Two measurement notes matter for anyone rebuilding the page. First, the extractor recorded the body root canvas as #ffffff, and the lower part of the 960px-wide capture (below the hero) renders white; that region was not explained by the measurement, so #ffffff is kept as `body-root-white` rather than discarded. Second, by DOM area the dominant background is #717f71 (weight 1024, against 105 for the next background, #e6f6ed1a), and by character count the dominant text color is #e6f6ed (11,283 characters, against 184 for #e6f6ed99). This document therefore treats `canvas` as #717f71 and `ink` as #e6f6ed, the pairing a visitor sees in the hero.

## Colors

The palette is one hue family: a mid olive green and its mint tint, plus alpha steps of the mint. Every color below is measured; hexes are verbatim from the extraction.

| Token | Value | Evidence |
|---|---|---|
| `canvas` | #717f71 | Largest background by DOM area (weight 1024) |
| `ink` / `primary` | #e6f6ed | Text on 11,283 characters; also the fill of the primary button and the border color of outlined buttons |
| `on-primary` | #717f71 | Text color inside the "OUR STORY" button (the olive returns as the text color on the mint button) |
| `ink-secondary` | #e6f6ed99 | Mint at 60% alpha on 184 characters |
| `ink-muted` | #e6f6ed80 | Mint at 50% alpha on 23 characters; the "EMAIL" label color |
| `button-secondary-bg` | #e6f6ed1a | Mint at 10% alpha, the background of "THE FOUNDERS" and "BACK TO THE PILLARS" buttons |
| `deep-green` | #2a2f2a | Appears 5 times in the shipped CSS; its on-screen role was not measured |
| `forest-green` | #2e3c2e | Appears 4 times in the shipped CSS; its on-screen role was not measured |
| `body-root-white` | #ffffff | Body root canvas recorded by the extractor; also present in the CSS |

Because the system is a single hue, hierarchy comes from alpha rather than from new colors: full mint for headings and body, 60% for secondary text, 50% for labels, 10% for button fills and 5% (#e6f6ed0d, weight 11 in background area) for faint panels. Border colors measured are #e6f6ed (22 elements) and #e6f6ed80 (6 elements). The shipped CSS also contains a cool grey family (#bbbcc4 and alpha variants, #28292e) and red alphas (#ff000040, #ff00001a); their on-screen use was not measured, and they are not part of the tokens.

The primary button inverts the page: mint fill with olive text, so the call to action is the one place where the light tone becomes a surface instead of a text color.

## Typography

Two typefaces carry the entire site, both loaded as web fonts: Atipla ND (700 normal) for display and PP Fraktion Mono (400 normal, 700 normal and 400 italic). The CSS font-face list also names "Atipla ND Book". By character count, PP Fraktion Mono covers 11,088 characters and Atipla ND 410.

| Role | Family | Size / line-height | Weight | Notes |
|---|---|---|---|---|
| h1 and h2 (`display`) | Atipla ND | 40px / 41.6px | 700 | Uppercase; "DATA DRIVEN GMP. MEANINGFUL IMPACT." and "LET'S GET IN TOUCH!" |
| h3 (`subheading`) | PP Fraktion Mono | 14px / 19.6px | 400 | Uppercase; "EMAIL" label |
| Body (`body`) | PP Fraktion Mono | 12px / 16.8px | 400 | Uppercase; paragraphs |
| Button (`button`) | PP Fraktion Mono | 14px / 14px | 400 | Uppercase; letter-spacing -0.56px (115 characters) |

Other measured sizes by character count are 30px (315 characters), 80px (24 characters), 11px (31 characters, letter-spacing 1.1px) and 9px (2 characters). The 12px body size also appears with a 0.48px letter-spacing on 22 characters. The family and element for the 30px and 80px sizes were not recorded, so they are not tokenized. Weight 700 covers 2,313 characters and weight 400 covers 9,185.

Headlines are set tight (line-height 41.6px on 40px type, a ratio of 1.04) in the bold display face, while body copy is monospace at a very small size, which gives the page its technical-readout texture. Both faces are commercial typefaces and no font files are redistributed here. If the licensed files are unavailable, use any bold sans-serif for the display role and any monospace for the rest, keep `text-transform: uppercase`, and keep the measured sizes and line-heights; no substitute was measured against the site.

## Layout

The desktop pass ran at 1280px wide and found a document 30,184px tall, so the page is a long scroll with the hero occupying the first viewport. The shipped CSS exposes a small set of root variables: `--margin-s: 12px`, `--margin-m: 24px`, `--margin-l: 48px` and `--margin-xl: 72px`, plus `--gridCell`, `--gridGap` and `--gridMargin` all resolved to 0px. The page-level margins are therefore a four-step scale rather than a column grid.

Measured `gap` values, with the number of elements using them: 24px (46), 12px (19), 16px (16), 8px (13), 10px (12), 6px (12), 4px (9), 48px (4), 19px (2), 40px (2) and 33px (1). Measured paddings: 24px (19), 8px (14), 12px (12), 16px (8), 3px (7), 10px (6), 40px (3), 4px (2) and 128px (1). The spacing tokens `s1` to `s10` list the small values and the `margin-*` tokens carry the root variables.

In the capture, the hero is edge to edge: the logo sits top left and the contact button top right, the headline is bottom-left and the paragraph bottom-right, so text hangs from the two lower corners while the cube holds the centre. Hairlines run from the cube to both edges and carry the location and scroll labels. Density is low in the hero and high in labels: small mono captions, coordinate readouts and glyph boxes are placed as instrument annotations around one large object.

## Elevation & Depth

Depth on this site comes from imagery and gradient, not from box shadows. The extraction found no box shadow on any visible element (`boxShadows` is empty). The shipped CSS contains two shadow declarations, "0 0 2px rgba(0,0,0,.1)" and "0 2px 4px var(--bs-sh)", and the extraction did not link either to a visible element, so neither is documented as a component shadow.

The hero uses a radial gradient that is lighter behind the cube and darker toward the corners (colors in the gradient were not measured), and the cube itself is a rendered object with its own lighting and tile relief. Translucent mint fills (#e6f6ed1a and #e6f6ed0d) separate buttons and panels from the olive field without any shadow. Outlined elements use a 1px mint border. Hover states were not measured: the hover list in the extraction is empty.

## Shapes

Radius is small and consistent. The measured border radii are 4px (24 elements), 6px (6 elements) and 12px (2 elements); the tokens map them to `xs`, `sm` and `md`. Every button measured uses 4px, and the shipped CSS also lists 8px, 2px and 1px radii whose elements were not measured on screen. The logo tile in the capture is a square and the glyph boxes above the headline are rectangles with a thin outline; no pill shapes were measured.

The outlined glyph boxes, the thin hairlines and the 1px mint borders (22 elements) give the page a draughting-table look: shape is expressed through line weight and alpha rather than fill.

## Components

**Primary button.** "OUR STORY": mint (#e6f6ed) fill, olive (#717f71) text, PP Fraktion Mono 14px uppercase with letter-spacing -0.56px, 16px 24px padding, 48px tall, 4px radius. Measured width 119px on desktop. No border.

**Secondary button.** "THE FOUNDERS": #e6f6ed1a fill, mint text, 1px solid #e6f6ed border, same 16px 24px padding, 48px tall and 4px radius. Measured width 144px.

**Compact button.** "BACK TO THE PILLARS": same fill, text, border and radius as the secondary button but with 8px 16px padding and a 34px height; measured width 199px.

**Header contact trigger.** "CONTACT US" at top right in the capture is a button with a trailing chevron; the HTML markup names it `header__contact-trigger` with `state--closed` and `state--opened` variants whose label changes between "Contact us" and "Close". This is the only navigation item present in the server-rendered HTML.

**Link.** The email address CONTACT@D2C-LIFESCIENCE.COM is mint, 14px / 19.6px PP Fraktion Mono, uppercase, with no measured underline.

**Logo.** A square mint tile holding a "DC" monogram, with a two-line "D2C·Life science" wordmark beside it; neither was measured as a token.

**Hero object.** A rendered 3D cube of tiles with pictograms; this is imagery, not a UI component, and it should be reproduced as a rendered asset.

## Design System Architecture

No public design system, token package or brand guideline was found for D2C Life Science: the homepage links to none, and the opened pages show only the contact control. The de-facto system can be read from the shipped markup and CSS at https://www.d2c-lifescience.com/.

The site is built with Astro: the stylesheet is served from `/_astro/index.qaWjSi-_.css` and the markup contains `astro-island` and `astro-slot` elements. Class names follow a block-element-modifier convention (`header__logo`, `header__contact-trigger`, `trigger__label`, `trigger__icon`, `state--closed`, `state--opened`, `preloader__bar-container`, `bar__fill`), and the markup includes a preloader with a progress bar. Headline and button text is wrapped in per-character `chars` elements in the markup; motion was not recorded in this extraction (run with `--no-motion`).

Spacing is driven by root custom properties (`--margin-s`, `--margin-m`, `--margin-l`, `--margin-xl`, `--gridCell`, `--gridGap`, `--gridMargin`), and the CSS also references Bootstrap-style variables (`--bs-ff`, `--bs-sh`). Fonts are self-hosted (`Atipla ND`, `Atipla ND Book`, `PP Fraktion Mono`). The system is small enough to rebuild from the tokens in this file.

## Do's and Don'ts

**Do**
- Set every line of text in capitals, with Atipla ND 700 for headlines and PP Fraktion Mono for everything else.
- Keep one hue: #717f71 as the field and #e6f6ed as text, with alpha steps (#e6f6ed99, #e6f6ed80, #e6f6ed1a) for hierarchy.
- Use the 4px radius on all buttons and a 1px #e6f6ed border for outlined variants.
- Place small mono annotations (location, coordinates, "SCROLL TO DISCOVER") around a single large hero object.
- Invert the primary button: #e6f6ed fill with #717f71 text.

**Don't**
- Don't add a second accent hue; none was measured.
- Don't use drop shadows on buttons or panels; none were measured on visible elements.
- Don't set body copy larger than the measured 12px / 16.8px on desktop without a new measurement.
- Don't use pill-shaped buttons: the measured radii are 4px, 6px and 12px.
- Don't present the white lower area of the capture as a designed surface; its cause was not measured.

## Responsive Behavior

The extractor re-loaded the page at a 390px-wide viewport. Only five roles were recorded, so most responsive behavior is not measured: layout changes of the header, cube and grid are not measured.

What was measured at 390px: the h1 stays Atipla ND 700 at 40px / 41.6px, and its box is 366px wide and 166px tall (83px tall on desktop at 588px wide). The h2 is also 40px / 41.6px, 366px wide and 83px tall. Body text becomes 13.65px / 19.11px (desktop 12px / 16.8px), in a 366px-wide, 363px-tall paragraph block. The primary button keeps its 14px type, 16px 24px padding, 48px height and 4px radius, and measures 170px wide (119px on desktop). Mobile character counts by size are 13.65px (10,904 characters), 31.9672px (138), 38.3607px (84), 14px (135) and 10.6557px (29), which means some mobile sizes are fractional.

The navigation role was null on mobile as well as on desktop. Breakpoints, media queries and touch behavior were not measured.

## Iteration Guide

1. Start from the tokens: canvas #717f71, ink #e6f6ed, primary #e6f6ed with on-primary #717f71. Re-measure with `node web/scripts/extract-tokens.mjs --slug=d2c-life-science --url=https://www.d2c-lifescience.com/ --force --no-motion` if the palette appears to have changed.
2. Build the hero first: dark-to-light radial gradient, centered cube asset, bottom-left display headline at 40px / 41.6px, bottom-right 12px mono paragraph, hairlines with location and scroll labels.
3. Add the three button variants from the Components section and check heights (48px, 48px, 34px) and the 4px radius.
4. Use the `margin-*` scale (12, 24, 48, 72px) for outer spacing and the `s1`-`s10` values for internal gaps.
5. Capture below the hero is unexplained white; scroll the live page and record a probe before documenting any lower-page sections.
6. Run `node web/scripts/verify-designs.mjs --slug=d2c-life-science` after any token edit.
