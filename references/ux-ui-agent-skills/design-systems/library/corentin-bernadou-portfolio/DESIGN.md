---
version: alpha
name: Corentin Bernadou Portfolio
category: "Portfolio"
description: "Near-black portfolio (#070304) of a freelance developer, set entirely in one variable grotesque named H at tiny 11.85px / 600 grey (#767676) with a #ff4401 orange accent that appears as a measured link hover colour, a WebGL image cube, and zero border radius."
colors:
  canvas: "#070304"
  ink: "#767676"
  ink-muted: "#6d6d6d"
  ink-strong: "#858585"
  primary: "#ff4401"
  cross-mark: "#cacaca"
typography:
  display:
    fontFamily: H, HelveticaNeue, Helvetica, sans-serif
    fontSize: 11.8519px
    fontWeight: 600
    lineHeight: 15.4074px
    letterSpacing: "-0.203175px"
  display-mobile:
    fontFamily: H, HelveticaNeue, Helvetica, sans-serif
    fontSize: 17.55px
    fontWeight: 600
    lineHeight: 22.815px
    letterSpacing: "-0.234px"
  nav:
    fontFamily: H, HelveticaNeue, Helvetica, sans-serif
    fontSize: 10.1587px
    fontWeight: 600
    lineHeight: 13.2064px
    letterSpacing: "-0.203175px"
rounded:
  none: 0px
  declared-sm: 6.4px
  declared-md: 9.6px
  declared-lg: 12.8px
spacing:
  s1: 2px
  s2: 2.96px
  s3: 4.23px
  s4: 21.16px
  s5: 29.63px
  s6: 42.33px
  s7: 108.36px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    padding: 2.96296px 0px
    rounded: "{rounded.none}"
  link-hover:
    textColor: "{colors.primary}"
  nav:
    textColor: "{colors.ink-strong}"
    padding: 42.328px
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
---

## Overview

Corentin Bernadou Portfolio is the personal site of a freelance developer, titled "Corentin Bernadou · Freelance Developer" in the page head. It is a one-screen editorial object rather than a conventional portfolio grid. A near-black field (`#070304`) carries a very large orange wordmark-like shape and a rotating cube of fashion and portrait photographs, both drawn in a canvas, while the only DOM text is set tiny and grey: three navigation links, an availability note, two catalogue-style reference labels and a long vertical list of project names.

The voice borrows from print. The header carries "Issue N°003 / Coll. 2026" and "Ref. EDI-032026-R02", and the hero lines read "Corentin Bernadou" and "Freelance Developer". A progress indicator reads "0%" and the page offers "Copy email?", which becomes "Email copied!" once used. The navigation reads "Featured Works," "Archive," and "About", with trailing commas on the first two, so the set reads as one sentence. The availability note says "Available Q4, 2026".

The site names six projects, each linking to its own page under `/work/`: "Moving Portraits", "Issey Miyake SS25", "Studies in Motion", "Ruby Campbell", "Shaped by Earth" and "Echoes in Light". The same six names repeat down the right-hand side of the page in the capture, forming a long ticker-like column that is the main text mass on the page. The about page describes a creative developer born in 1995 in France with a design background, lists Awwwards, FWA and Codrops recognition, gives a Bordeaux location, and links six social profiles.

The effect is a gallery wall where the type is a caption and the imagery is the content. Nothing on the page is a button, card or form; the interface is text links on black.

## Colors

The palette is one dark canvas, three greys and one accent. All values below were read from the live page or its shipped CSS.

- **Canvas `#070304`** is the document background; the site declares it as the root variable `--document-background-color: #070304`. A very slightly warm black rather than pure `#000000`.
- **Ink `#767676`** is the most-read text colour by character count (2,869 characters) and the colour of every project-list link.
- **Ink muted `#6d6d6d`** colours the navigation links (121 characters).
- **Ink strong `#858585`** colours the header container text and the body default (14 characters). It is the lightest text grey measured.
- **Primary `#ff4401`** is the accent. It is the colour a project link switches to on hover: the measured hover state moves the text from `rgb(118, 118, 118)` to `rgb(255, 68, 1)` while the border colour stays grey. It is also the most-used colour in the shipped stylesheet (16 occurrences) and matches the orange of the large shape in the capture. The extractor's automatic pick for primary was the grey `#767676`, because the page has no filled button; the grey is kept as `ink`.
- **Cross mark `#cacaca`** is declared as `--cross-color` in the root variables. Its use was not isolated by the extraction, so it is listed as a declared value only.

Other values in the stylesheet that were measured but not attributed to a visible element: `#f1f1f1`, `#ffffff`, `#727272`, a pure-red tint `#ff00001a` (the only entry in the background-by-area table, weight 882), and grey tints with alpha (`#85858599`, `#85858526`, `#8585851a`).

The contrast between the greys and the canvas is intentionally low; reading the page is a matter of scale and position rather than colour. Orange is reserved for the active state and for the large graphic, so it behaves as a signal rather than decoration.

## Typography

The whole site uses one family, `H`, loaded as a web font whose measured face range is weights 100 to 900, style normal. The fallback chain declared is `HelveticaNeue, Helvetica, sans-serif`. `H` accounts for 3,004 of the measured characters, effectively all of them. The family name is not a public foundry name that the page discloses, and no foundry link was found on the pages opened, so this document does not name one.

Measured sizes at the 1280px desktop pass:

- **Display / project links: 11.8519px**, weight 600, line-height 15.4074px, letter-spacing -0.203175px. This is the largest DOM text on the page, 2,790 characters.
- **Navigation: 10.1587px**, weight 600, line-height 13.2064px, letter-spacing -0.203175px.
- **9.31217px** (11 characters) and **5.92593px** with -0.118519px tracking (64 characters, weight 700) were also measured; which elements carry them was not isolated.

At the 390px mobile pass the display size is 17.55px with line-height 22.815px and letter-spacing -0.234px, and the navigation is 11.7px with line-height 15.21px. The root variables `--fs-mobile: 2.5vw`, `--fs-tablet: calc(100vw / 768 * 10)` and `--fs-laptop: calc(100vw / 1512 * 10)` show that type is sized in viewport-relative units, so the pixel values above are specific to the 1280px and 390px measurement widths and will differ at other widths.

Weight is uniform: 600 for everything on the page except the 64 characters at 700. There is no italic, no uppercase transform (measured `text-transform: none`), and negative tracking throughout. The giant orange letters in the capture are not DOM text in the extraction, so they have no measured font size.

**Substitutes.** `H` is the site's own file. When it is unavailable the declared stack falls to Helvetica Neue and Helvetica. Keep the measured weight 600 and the measured negative letter-spacing in pixels when substituting.

## Layout

The page uses a full-viewport, canvas-first layout. A root variable sets `--gutter: 3rem`, and the desktop header measures 98px high with 42.328px padding. The top edge carries a measuring ruler of tick marks, and the left of the header reads "1280px × 800px", a literal viewport readout in the page text. The three navigation links sit centred in the header, with "Available Q4, 2026" at the right edge.

Below the header the hero is composed of three layers: two small reference labels at left ("Corentin Bernadou / Freelance Developer" and "Issue N°003 / Coll. 2026 / Ref. EDI-032026-R02"), an oversized orange graphic spanning roughly the left half, and a photograph cube to its right. The project list occupies a narrow column at the right edge and runs far below the hero, repeating the six titles, which makes the document 2,718px tall at desktop width.

Spacing values measured on elements: 2px and 2.96296px paddings around list links (180 and 42 elements), 4.2328px and 29.6296px gaps, a 108.36px gap, and 21.164px and 42.328px paddings. The very small base type with generous empty black space between blocks is the layout's character; most of the page is empty canvas.

## Elevation & Depth

There is no elevation system. No box shadows were measured (the shadow table is empty) and the border-colour table is empty. Depth comes from the WebGL cube, whose faces carry photographs at perspective angles against the flat black field, and from the scale contrast between the giant orange shape and the 11.85px captions. Do not add shadows, blurs or layered surfaces to the DOM interface.

## Shapes

Every measured DOM element has `border-radius: 0px`. There are no pills, cards or buttons. The stylesheet declares three radii, 6.4px, 9.6px and 12.8px, but the extraction did not attach them to a visible element, so they are carried in the tokens as declared-only values. The photograph tiles on the cube are square-cornered in the capture.

## Components

- **Project link.** A text link in `H` 11.8519px / 600, colour `#767676`, padding 2.96296px 0, zero radius. On hover it turns `#ff4401`. This is the only measured hover behaviour; transition timing was not recorded.
- **Navigation.** A header element with 42.328px padding and `#858585` text; each link is 10.1587px / 600 in `#6d6d6d`. The first two labels carry a trailing comma in their text.
- **Availability note and email control.** "Available Q4, 2026" and "Copy email?" are plain text; the copy control changes its text to "Email copied!" on use.
- **Reference labels.** "Issue N°003 / Coll. 2026" and "Ref. EDI-032026-R02" are small grey text blocks with no container.
- **Progress counter.** A "0%" readout appears in the page text of both the home page and the about page.
- **Image cube.** A canvas element of photograph tiles; its construction is not measurable from computed styles, so only the visual description is recorded.

There is no primary button, input or card on this page.

## Design System Architecture

No public design system, token package or brand guideline is published for this site; the homepage and about page link only to internal pages, an email address and social profiles. The de-facto system is declared in the root variables measured on the page: `--document-background-color: #070304`, `--cross-color: #CACACA`, `--gutter: 3rem`, `--vh: 100vh`, `--vw: 100vw`, `--canvas-z-index: 1`, and the three font-scale variables `--fs-mobile`, `--fs-tablet` and `--fs-laptop`. Naming is plain CSS custom properties with kebab-case names and no component prefix. Sources opened: https://corentinbernadou.com/ and https://corentinbernadou.com/about.

## Do's and Don'ts

- Do keep the canvas at `#070304` and set text in the three greys; do not use pure white for body text.
- Do reserve `#ff4401` for hover and one large graphic; do not use it as a button fill, which the site does not have.
- Do set all text in one variable grotesque at weight 600 with slightly negative tracking.
- Do keep corners square; the measured radius on every DOM element is 0px.
- Do let imagery carry the page and keep captions tiny, with catalogue-style labels such as "Issue N°003 / Coll. 2026".
- Don't add shadows, gradients or cards; none were measured.
- Don't treat the three declared radii as brand shapes; no element was measured with them.
- Don't introduce a larger DOM type size at desktop width without measuring it first; the largest measured DOM text is 11.8519px.

## Responsive Behavior

Measured at 390px: the project link grows to 17.55px / 22.815px with -0.234px tracking, the navigation text is 11.7px / 15.21px, and the header is 74px high with 29.25px padding (desktop: 98px and 42.328px). The root variables declare viewport-relative font scales for mobile, tablet and laptop, but the breakpoints that select between them were not measured. Layout changes of the hero, cube and list column at mobile width are not measured; no mobile capture was reviewed.

## Iteration Guide

1. Start from `canvas` `#070304` and `ink` `#767676`; add `primary` `#ff4401` only for the hover state.
2. Set every string in `H` (fallback Helvetica Neue) at 600 with the display or nav token and the matching negative tracking.
3. Keep paddings from the spacing scale (2px, 2.96px, 4.23px, 21.16px, 29.63px, 42.33px, 108.36px).
4. Rebuild the hero in the order measured: header with nav, labels, large orange graphic, image cube, project list column.
5. To extend the system, measure a new page with the extractor before adding a token; the about page is a good next measurement because its list and paragraph styles were not extracted.
