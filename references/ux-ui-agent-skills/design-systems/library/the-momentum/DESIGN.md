---
version: alpha
name: The Momentum
category: "Thai Brands"
description: "Thai long-form magazine (themomentum.co). White canvas, black ink and one pure-blue #0000ff kicker accent; wide-tracked uppercase Wolpe Pegasus labels (24px, 2px tracking), Martini Thai Neue Slab Black story titles (30px), Thongterm body, 9999px circular controls and almost no shadows."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0000ff"
  surface-input: "#333333"
  ink-muted: "#cccccc"
  surface-soft: "#f2f2f2"
  hairline: "#e5e5e5"
typography:
  display:
    fontFamily: wolpe_pegasusbold, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 10px
    letterSpacing: 2px
    textTransform: uppercase
  display-mobile:
    fontFamily: wolpe_pegasusbold, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 10px
    letterSpacing: 2px
    textTransform: uppercase
  heading:
    fontFamily: wolpe_pegasusitalic, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: 0.3px
  subheading:
    fontFamily: martinithai_neue_slabblack, sans-serif
    fontSize: 30px
    fontWeight: 700
    letterSpacing: 0.3px
  link:
    fontFamily: wolpe_pegasusbold, sans-serif
    fontSize: 13px
    fontWeight: 700
    letterSpacing: 0.3px
    textTransform: uppercase
  input:
    fontFamily: "\"DB Helvethaica X\", \"Helvetica Neue\", Thonburi, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
rounded:
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 15px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  text-input:
    backgroundColor: "{colors.surface-input}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 5px 25px 5px 10px
    height: 37px
---

## Overview

The Momentum (page title "The Momentum", `lang="th"`) is a Thai-language magazine of long-form reporting, interviews and culture writing. The measured home page reads like a print magazine translated to the web: a centered serif masthead ("The MOMENTUM"), a single row of uppercase section links (REPORT, LIFE, LIFESTYLE, CULTURE, PEOPLE, THOUGHT, SERIES, VIDEO), a tall full-width photographic hero with a white caption, a boxed "MAIN SELECTION" label, and then rows of story cards separated by thin vertical and horizontal rules.

The mood is editorial and bookish rather than app-like. Photography is large, real and documentary (portraits, archival black-and-white, collage illustration); the interface stays out of the way with black text on white and a single saturated blue used for category kickers ("THE FRAME", "FEATURE", "CLOSE-UP", "LIFE, ACTUALLY").

## Colors

- **Canvas `#ffffff`** and **ink `#000000`**. The extraction weighs black text at 5,669 characters, far ahead of every other text color.
- **Primary `#0000ff`** is pure blue. It is measured as text color on 410 characters (the kicker labels above each story) and as the color navigation links take on hover (text and border go from black to `rgb(0, 0, 255)`). It is deliberately set by the site, not the browser default link color, and appears on no button fill.
- **Surface-input `#333333`** is the dark fill of the search input. **Ink-muted `#cccccc`** (106 characters) and **surface-soft `#f2f2f2`** (5 characters) are small supporting grays. **Hairline `#e5e5e5`** is the measured border color used by the rules between stories.
- The by-area background ranking lists `#000000` at the top (the hero and image regions), `#ffffff` second and `#333333` third.

## Typography

Six families are measured by character count: **Martini Thai Neue Slab Black** (3,219 characters, story titles and card headings), **Thongterm** (2,142, Thai body text and deck copy), **Wolpe Pegasus Bold** (597, uppercase navigation and labels), **IBM Plex Sans Thai** (303), **Wolpe Pegasus Italic** (21, the hero tagline) and **DB Helvethaica X** (11, form input).

- **Display** is Wolpe Pegasus Bold 700, 24px, uppercase, 2px letter-spacing (the "MAIN SELECTION" label); 20px on the 390px mobile pass. The measured line height of 10px is the site's own value for this boxed label.
- **Heading** is Wolpe Pegasus Italic 400 at 40px (the hero tagline "Stay curious, be open", white on the photograph).
- **Subheading** is Martini Thai Neue Slab Black at 30px, weight 700, 0.3px tracking; the card title ladder is 18px (3,164 characters) and 16px (2,165).
- **Link** is Wolpe Pegasus Bold 13px uppercase with 0.3px tracking. Body letter-spacing is 0.3px at 18px, 16px, 14px and 13px; kickers and the masthead labels use 2px at 12px and 24px.
- **Input** is DB Helvethaica X 400 at 18px, line height 27px.

Wolpe Pegasus, Martini Thai Neue and Thongterm are proprietary or custom-loaded web fonts (loaded files: thongterm 400/700, DB Helvethaica X 400/400 italic, wolpe_pegasusbold 700, wolpe_pegasusitalic 400, martinithai_neue_slabblack 400, FontAwesome). A substitute needs a Thai-capable slab-weight black face for titles and a wide-tracked serif capital for labels.

## Layout

The page is a single centered column about 1,110px wide (the hero tagline element measures 1,110px). Sections stack: masthead and nav; full-bleed hero (the capture shows a gray masthead strip then a photograph); the boxed MAIN SELECTION label; one wide feature (text left, image right); a three-column row of feature cards separated by vertical hairlines; a four-column row of smaller cards. Each card is image, blue kicker, black slab title, optional deck, and a "โดย ..." byline in small bold caps. Common paddings are 15px (56 occurrences), 24px (34) and 25px (15).

## Elevation & Depth

No box shadows are measured and no elevation is used. Separation is by hairlines (`#e5e5e5`), whitespace and the contrast between the photographic blocks and the white page. The MAIN SELECTION label has an offset double outline rather than a shadow.

## Shapes

Only one radius is measured: **50%** (4 occurrences), i.e. circular elements such as round icon buttons. Everything else, including photographs and cards, has a computed radius of 0px and square corners. The token `pill: 9999px` carries that circular shape.

## Components

- **Masthead and nav.** Serif wordmark, uppercase Wolpe labels at 2px tracking; on hover each link's text and border turn `#0000ff`. A circular search control sits at the far right.
- **Section label.** "MAIN SELECTION" in Wolpe Pegasus Bold 24px, padded 15px 35px, in an outlined box.
- **Story card.** Square image, blue 12px kicker, slab title, deck in Thongterm, bold byline.
- **Search input.** `#333333` fill, white text, DB Helvethaica X 18px, height 37px, padding 5px 25px 5px 10px.
- **Hero.** Full-width photograph with centered white caption; the tagline uses Wolpe Pegasus Italic 40px.

No filled primary button was detected by the extractor (the mobile `ctaPrimary` is null), so none is documented here.

## Design System Architecture

No public design system, token package or brand guideline was found on the pages opened; the research log in SOURCES.json lists the single page opened (the home page, measured by the extractor). The de-facto system is a few web-font families, a black/white/blue palette and a card pattern repeated at 3-up and 4-up. The root variables record no brand-specific custom properties beyond defaults.

## Do's and Don'ts

- Do keep the page white and the text black; reserve `#0000ff` for kickers and hover states.
- Do set labels in uppercase with 2px letter-spacing and titles in a heavy slab at 30px/18px.
- Do use large documentary photography with square corners.
- Do separate story rows with `#e5e5e5` hairlines instead of cards with shadows.
- Don't introduce rounded corners on photographs or cards; only circular controls (50%) are measured.
- Don't use blue as a button fill; no blue button is measured.
- Don't add drop shadows (none measured).

## Responsive Behavior

Measured at the 390px mobile pass only: the MAIN SELECTION label drops from 24px to 20px (padding 10px 30px, 282px wide, 30px tall). The mobile size histogram is 16px (5,043 characters), 18px (3,993), 12px, 14px, 20px, 13px, 15px. The mobile pass found no body text role or CTA. Column counts, breakpoints and navigation behavior on mobile were not measured.

## Iteration Guide

1. Start with a white page, black text and no shadows.
2. Add blue `#0000ff` only to category kickers and hover states.
3. Use Wolpe Pegasus Bold uppercase 24px/2px for section labels (20px on mobile), slab black 30px for lead titles, 18px/16px for body text.
4. Build cards as image, kicker, title, deck, byline, divided by `#e5e5e5` rules; corners stay square.
5. Round only the circular controls (50%).
6. Do not claim hover, tablet or dark-mode behavior beyond the measured link hover to blue.

## Content and Voice

Copy on the measured page is Thai with English section vocabulary. Kickers are English phrases in capitals (THE FRAME, FEATURE, THE TIDE TURNS, CLOSE-UP, LIFE ACTUALLY, KNOWLEDGE & WISDOM, OUT AND ABOUT), which act as named series rather than generic categories. Headlines are full sentences in Thai with quoted names and specific figures, followed by a deck of two to four lines and a byline beginning "โดย". The hero caption is a two-line Thai statement set in white over the photograph. The only English tagline measured is "Stay curious, be open", set in the italic Wolpe face. Image art direction mixes color portraits, archival monochrome, and cut-paper collage illustration, so no single illustration style defines the brand; the type system and the blue kicker do.
