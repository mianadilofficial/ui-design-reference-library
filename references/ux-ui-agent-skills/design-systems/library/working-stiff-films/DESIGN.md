---
version: alpha
name: "Working Stiff Films"
category: "Culture & Events"
description: "Working Stiff Films: comedic commercial-production studio site with a cream #f0ecd9 and slate #282d35 palette, red #d93535 accent, Grand Bold uppercase display at 71.104px, PP Neue Montreal text, 5px corners and a toothy mascot illustration."
colors:
  canvas: "#f0ecd9"
  ink: "#282d35"
  primary: "#d93535"
  surface-3: "#121418"
typography:
  display:
    fontFamily: "\"Grand Bold\", sans-serif"
    fontSize: 71.104px
    fontWeight: 400
    lineHeight: 65.4157px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Grand Bold\", sans-serif"
    fontSize: 39px
    fontWeight: 400
    lineHeight: 35.88px
    textTransform: uppercase
  heading:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 17.7766px
    fontWeight: 400
    lineHeight: 25.7761px
    textTransform: uppercase
  subheading:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 21.3248px
    fontWeight: 400
    lineHeight: 23.7985px
    textTransform: uppercase
  link:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 17.7766px
    fontWeight: 600
    lineHeight: 25.7761px
    textTransform: uppercase
rounded:
  xs: 5px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8.96px
  s3: 17.92px
  s4: 30px
  s5: 80px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 0px 30px
    borderColor: "{colors.canvas}"
  nav:
    textColor: "{colors.canvas}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 17.92px 17.92px 66.6662px
    transform: matrix(1, 0, 0, 1, 0, 0)
---

# Working Stiff Films

## Overview

Working Stiff Films (https://stiff.madebybuzzworthy.com/) presents itself in its page title as "Bold, Cinematic Commercial & Branded Content". The measured home page opens on a charcoal hero field (#282d35) with a stacked, uppercase headline in the Grand Bold typeface: "WE MAKE", then "LAUGHS" in red #d93535, then "THAT LOOK DAMN" and a final "GO" and "OD" split around an illustrated chattering-teeth mascot with a gold tooth. The joke is carried by type and illustration: the word "GOOD" is physically pulled apart by the cartoon. On the right of the hero, a column of cream rounded cards presents film work with a still image, a client name in small uppercase (for example "RE/MAX") and a red display title. A script-style "Stiff" logo sits at the top-left inside a thin outlined navigation bar whose links read WORK, NEWS, ABOUT, CAPABILITIES and CONTACT.

The page below the hero is a warm cream (#f0ecd9) with a faint paper-like grain visible in the capture. The measured scroll height at 1280px is 7345px. The voice is comedic, irreverent and poster-bold; the mobile-measured intro paragraph begins "Creative conspirer. Born of a Charm City paint salesman."

## Colors

The palette has four measured values. `canvas` is a cream #f0ecd9, the largest background area (weight 2677) and also the colour of the navigation text, the card fill and the oversized "GO / OD" letters. `ink` is the dark slate #282d35, the most-read text colour (943 characters) and also the hero background (weight 1110 in the background-area ranking). `surface-3` is a deeper near-black #121418 (weight 1020), measured as a large background region. `primary` is a strong red #d93535, used for the "LAUGHS" word and for the card titles; it covers only 50 text characters and 6 units of background area, so it is a spot accent and not a fill colour. The only measured border colour is the cream #f0ecd9 (4 occurrences), which draws the outline of the navigation bar.

No root custom properties were found (rootVars is empty), so there are no named colour tokens to cite from the site. The palette is therefore taken directly from measured computed values.

## Typography

Two families are loaded. Grand Bold (loaded as "Grand Bold bold normal") is the display face: the `display` token measures 71.104px, weight 400, line-height 65.4157px, uppercase, and the hero uses larger measured sizes in the same face: 106.662px, 160px and 213.325px appear in the size ranking, with 71.104px and 53.3325px as further display steps. Grand Bold covers 91 characters on the page. PP Neue Montreal is the text face (loaded in normal, bold, 600 italic and normal italic variants), covering 1077 characters. The `heading` token is PP Neue Montreal 17.7766px weight 400 with line-height 25.7761px, uppercase. The `subheading` token is 21.3248px weight 400 with line-height 23.7985px, uppercase; 21.3248px is the most frequent size by characters (504). The `link` token is 17.7766px, weight 600, line-height 25.7761px, uppercase, which is how the navigation links read. Other sizes measured on desktop are 16px (211 characters), 14px (201) and 48px (34). Weights in use are 400 (922 characters) and 600 (246).

On the 390px mobile pass the hero measures 39px with line-height 35.88px (`display-mobile`, Grand Bold, uppercase), and the mobile intro paragraph measures 14px with line-height 20.3px in PP Neue Montreal. No letter-spacing values were recorded on desktop (letterSpacingBySize is empty), and the extractor reports normal tracking for the mobile h1. Grand Bold and PP Neue Montreal are commercial faces; substitutes are not measured on the site.

## Layout

The page is built as a large framed hero followed by cream content blocks. The navigation is a full-width bar inset from the viewport edges, outlined in 1px cream. In the hero, the left two thirds hold the typographic composition and the right third holds a vertical stack of work cards that bleeds off the right edge of the capture. Measured paddings are 17.92px (22 occurrences, the card inner padding), 8.96px (4), 80px (2), 5px (2) and 30px (1). The spacing tokens `s1` to `s5` record 5px, 8.96px, 17.92px, 30px and 80px. No gap values were measured (gaps is empty). The card token measures padding of 17.92px 17.92px 66.6662px, leaving a taller bottom area under the thumbnail for the client label and title.

## Elevation & Depth

Depth is conveyed by layering flat colour planes, not shadows: the extraction recorded no box shadows (boxShadows is empty). Cream cards sit on the charcoal hero, the nav bar is an outlined rectangle drawn with a 1px cream border, and the mascot illustration overlaps the huge "GO" and "OD" letters. A subtle grain texture is visible on both the slate and cream fields in the capture; it is an image treatment and was not measured as a token.

## Shapes

Radii are small and consistent. The extraction measured 5px on 34 elements (cards, thumbnails and the nav frame), a single 50% radius (a circular element), and a single asymmetric radius of 5px 0px 0px 5px. The token `rounded.xs` is 5px and `rounded.pill` is 9999px (used for fully round items). Everything else is a right angle. The brand's illustrative language, a toothy mascot with limbs, boots and a gold tooth, provides the curved, playful contrast to the rectilinear frame.

## Components

- Navigation bar (`nav`): cream text (#f0ecd9) on the slate hero, links in PP Neue Montreal 17.7766px weight 600 uppercase, cream 1px border. On hover the measured "WORK" link changes colour from rgb(240,236,217) to rgb(241,244,224), a very small shift, and its height stays 26.
- Link (`link`): cream text, 5px radius, padding 0px 30px, cream border.
- Work card (`card`): cream fill (#f0ecd9), slate text (#282d35), 5px radius, padding 17.92px 17.92px 66.6662px. Content order: still image, small uppercase client name, red Grand Bold title.
- Primary button: none was detected by the extractor (ctaCandidates is empty), so no `button` token is declared.
- Mascot illustration: a character art asset used in the hero, not a UI control.

## Design System Architecture

No public design system or brand guidelines were found for this site. The page is hosted on a subdomain of madebybuzzworthy.com (https://stiff.madebybuzzworthy.com/), which is the page measured. The de-facto system is a two-typeface pairing (Grand Bold for display, PP Neue Montreal for text), a four-colour palette (cream #f0ecd9, slate #282d35, near-black #121418, red #d93535) and a 5px corner radius. The site declares no CSS custom properties on the root, so the design language is carried by element-level styles instead of named tokens.

## Do's and Don'ts

- Do set headlines in Grand Bold uppercase at 71.104px or larger, and reserve red #d93535 for one emphasised word or a card title.
- Do pair cream #f0ecd9 with slate #282d35 for contrast; use #121418 for the deepest regions.
- Do keep corners at 5px for cards and frames.
- Do use PP Neue Montreal uppercase for navigation and labels.
- Don't use red as a button or background fill; its measured use is text only.
- Don't add shadows; none were measured.
- Don't swap the character illustration for stock icons; the mascot is part of the identity.

## Responsive Behavior

Only type was recorded in the 390px mobile pass. The hero `display-mobile` measures 39px at line-height 35.88px (desktop 71.104px), the mobile text sizes are 14px (541 characters), 20px (504), 28px (102), 36px (45), 39px (18, the hero), 16px (17), 78px, 50px and 101.4px. How the card column, the navigation bar and the hero composition rearrange on narrow screens was not measured.

## Iteration Guide

1. Begin with the cream `canvas` #f0ecd9 and the slate `ink` #282d35; use `surface-3` #121418 for dark bands.
2. Set the hero in Grand Bold uppercase at the `display` token and mark a single word in `primary` #d93535.
3. Use PP Neue Montreal uppercase at 17.7766px for navigation and 21.3248px for sub-headings.
4. Build cards with 5px radius and 17.92px padding, a still image first, then client label and red title.
5. Re-run `node web/scripts/verify-designs.mjs --slug=working-stiff-films` after each edit; add new values only with a measurement or a cited source.
