---
version: alpha
name: Bitter Creek
category: "Portfolio"
description: "Monochrome production-studio portfolio for Bitter Creek (London): white #ffffff canvas with #000000 ink, two Unica 77 faces (Llsub sans at 112.083px for the mission line, Monollsub mono at 14px and 38.8096px for labels and project codes) with tight -0.03em tracking, a full-bleed film hero, a square 1px-outlined button, no shadows and no corner radius."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  ink-soft: "#222222"
  accent-lime: "#e3ff73"
  theme-border: "#3532331a"
typography:
  display:
    fontFamily: "\"Unica 77 Monollsub\", Arial, sans-serif"
    fontSize: 38.8096px
    fontWeight: 500
    lineHeight: 38.8096px
    letterSpacing: "-1.16429px"
  display-mobile:
    fontFamily: "\"Unica 77 Monollsub\", Arial, sans-serif"
    fontSize: 32.0456px
    fontWeight: 500
    lineHeight: 32.0456px
    letterSpacing: "-0.961368px"
  statement:
    fontFamily: "\"Unica 77 Llsub\", Arial, sans-serif"
    fontSize: 112.083px
    fontWeight: 400
    lineHeight: 100.875px
    letterSpacing: "-3.3625px"
  nav:
    fontFamily: "\"Unica 77 Llsub\", Arial, sans-serif"
    fontSize: 29.488px
    fontWeight: 400
    lineHeight: 26.5392px
    letterSpacing: "-1.76928px"
  project-code:
    fontFamily: "\"Unica 77 Monollsub\", Arial, sans-serif"
    fontSize: 38.8096px
    fontWeight: 400
    lineHeight: 38.8096px
    letterSpacing: "-1.55238px"
  button-label:
    fontFamily: "\"Unica 77 Monollsub\", Arial, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 19.2px
    letterSpacing: "-0.66px"
  link-title:
    fontFamily: "\"Unica 77 Monollsub\", Arial, sans-serif"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 22px
    letterSpacing: "-0.66px"
  lead:
    fontFamily: "\"Unica 77 Llsub\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.8px"
  meta:
    fontFamily: "\"Unica 77 Llsub\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
    letterSpacing: "-0.52px"
  body:
    fontFamily: "\"Unica 77 Monollsub\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
    letterSpacing: "-0.455px"
rounded:
  none: 0px
  small: 8px
  main: 16px
  pill: 9999px
spacing:
  s1: 1.4px
  s2: 1.6px
  s3: 2px
  s4: 5px
  s5: 6px
  s6: 10px
  s7: 12px
  s8: 18.51px
  s9: 24px
  s10: 31.4px
components:
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button-label}"
    rounded: "{rounded.none}"
    height: 46px
    borderColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  eyebrow:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  project-code:
    textColor: "{colors.ink}"
    typography: "{typography.project-code}"
---

## Overview

Bitter Creek is a London visual-production studio ("We're a visual production studio shaped by culture, built to influence", from the page's own meta description) that makes music videos, commercials, shortform and longform work, live sessions and show visuals, and lists the directors Niall Coffey, Simon Lane, Nick Carter and David Sheldrick. Its home page (`https://www.bittercreek.studio/`) is a Webflow site that behaves like a film index: a full-bleed black-and-white video hero with the white "bitter creek" wordmark top left, "menu" top right, a row of four project codes (GP02, LG01, CL01, AT01) laid along the lower third, the active one underlined with the director name ("Aaron Taylor-Johnson") and a "View Project" link, a small thumbnail at the lower right, and a footer line with "(C) 2026" and a live London time ("Lnd, UK_ 04:59:04").

Below the hero the page goes to plain white: a tiny mono "Our mission" eyebrow repeated at both edges, then the mission statement in huge light sans, staggered left and right, "We capture the culture that shapes the talent you work with", set in separate word elements (`home-squeeze_word`) with no spaces between them in the capture, then an outlined "more about us" button. "Featured projects" follows with image cards whose captions are tiny mono text in four columns (city, project and year, a large project code such as DM03 or GA01, and a category such as Music, Shortform or Commercial).

The voice is brief and editorial: lowercase navigation (studio, work, directors, contact), terse labels, and credits-style text. Imagery is the content: black-and-white footage in the hero, colorful stills in the cards, the layout itself staying monochrome so that film stills carry all the color.

## Colors

Measured color is almost entirely black and white: backgrounds `#ffffff` (3950 weighted units) and `#000000` (2928, the hero film area), text `#000000` (1080 weighted characters) and `#ffffff` (419).

- **Canvas `#ffffff`** and **ink `#000000`** are the page and its text. **Primary `#000000`** is the button outline and text color (the 1px border on "more about us" is `#000000`).
- **Ink soft `#222222`** (`--button--text`, `--button--border-hover` and `--button--background-hover` in the site's variables) is the declared dark for button states.
- **Accent lime `#e3ff73`** is declared as `--button--background`, `--button--border` and `--button-secondary--background-hover` / `--button-secondary--border-hover`. No measured element at rest on the home page uses it, and the hover pass recorded nothing, so treat it as a declared hover and button accent, not a visible surface.
- **Theme border `#3532331a`** (`--theme--border`, `--button-secondary--border`) is a translucent dark hairline declared for secondary components.
- Text over the hero film is `#ffffff`; the hero film area is dark grey in the capture.

No gradient, tint or brand hue is applied to interface chrome. The lime appears only in the variable set.

## Typography

Two self-hosted families, both declared in the Webflow stylesheet (`https://cdn.prod.website-files.com/673af1c2580878ef0a1178ee/css/bttc-dev.shared.639194ef0.css`) as WOFF2 files at weight 400 only: `Unica 77 Llsub` (`Unica77LLSub-Regular.woff2`) for the proportional sans and `Unica 77 Monollsub` (`Unica77MonoLLSub-Regular.woff2`) for the monospace, each with `web` and `low` variants (`Unica 77 Llweb`, `Unica 77 Monollweb`, `Unica 77 Monolowllsub`, `Unica 77 Monolowllweb`). Fallback is `Arial, sans-serif`. Because no 500 face is declared, the measured weight 500 on headings has no separate font file in the stylesheet.

Letter spacing is always negative: the site declares `--display--letter-spacing: -.03em`, `--text-main--letter-spacing: -.0325em` and the same for headings, and the measured values follow (-3.3625px at 112.083px, -1.76928px at 29.488px, -0.66px at 22px, -0.455px at 14px).

| Token | Family | Size / line | Weight | Tracking | Role |
|---|---|---|---|---|---|
| statement | Llsub | 112.083px / 100.875px | 400 | -3.3625px | mission line (h3) |
| display | Monollsub | 38.8096px / 38.8096px | 500 | -1.16429px | project code in hero (h2) |
| display-mobile | Monollsub | 32.0456px / 32.0456px | 500 | -0.961368px | same at 390px |
| project-code | Monollsub | 38.8096px / 38.8096px | 400 | -1.55238px | code in card captions |
| nav | Llsub | 29.488px / 26.5392px | 400 | -1.76928px | "menu", body base |
| button-label | Monollsub | 22px / 19.2px | 400 | -0.66px | "more about us" |
| link-title | Monollsub | 22px / 22px | 500 | -0.66px | "View Project", director name |
| lead | Llsub | 20px / 20px | 400 | -0.8px | short intro lines |
| meta | Llsub | 16px / 19.2px | 400 | -0.52px | copyright and time |
| body | Monollsub | 14px / 16.8px | 400 | -0.455px | eyebrows, captions, paragraphs |

By weighted characters the sizes are 14px (944), 22px (174), 29.488px (130), 38.8096px (111), 20px (69), 112.083px (49) and 16px (22); weights are 400 (1335) and 500 (164). Everything is set in sentence or lowercase; no text transform was measured.

Font substitutes: the Unica 77 files are the site's own. No license or substitute was found on the pages opened; if the files are not available, any neutral grotesque for Llsub and any monospace for Monollsub should be set at the same sizes and the same negative tracking.

## Layout

The Webflow stylesheet declares a `u-container` and `u-container-small` utility (the small one has `max-width: var(--column-width--10)`); the home page is 6008px tall at 1280px. Sections run full-bleed: eyebrows and labels sit at the extreme left and right (the "Our mission" and "Featured projects" eyebrows are duplicated, one pinned to each edge).

Measured gaps are 10px (28 uses), 46.2144px (22), 75.1488px (2), 31.4048px (2) and 53.232px (2); paddings 6px (13), 1.4px (8), 2px (5), 10px (5), 5px (5), 1.6px (4), 18.512px (2), 112.083px (2), 12px (1), 192.256px (1), 24px (1), 149.107px (1). The hero has four equal columns for project codes; the mission statement staggers its four lines alternately to the left and right edge; the project grid places three cards across with 4-column captions beneath each; further rows show a wide card at the left and a narrow card at the right.

## Elevation & Depth

There are no box shadows on any measured element. Depth is photographic: the hero film is darkened and the cards are full-bleed stills. The stylesheet contains shadows only for a Plyr video player (`--plyr-range-thumb-shadow` and similar: `0 1px 1px #23282f26, 0 0 0 1px #23282f33`) and a `0 1px 2px #00000026` rule; these belong to the embedded player, not to the site chrome, and were not measured on page elements.

The button label uses a text-shadow trick for its hover effect: `.btn-el_text` is white with `text-shadow: 0 1em 0 var(--theme--text)`, so a second copy of the label sits one line below, and the button's background layer (`.btn-bg`, `background-color: currentColor`) is a separate absolutely positioned element. The actual hover animation is not measured.

## Shapes

Everything on the measured page is square: the measured border radii list is empty and the outlined button has `border-radius: 0px`. The Webflow variable set declares `--radius--small: .5rem`, `--radius--main: 1rem` and `--radius--round: 100vw`, matching the `small`, `main` and `pill` tokens, but none is applied to a visible home-page element; the CSS corpus also lists 2.5px, 100px, 2px, 3px, 4px, 5px and 26px radii for embedded components.

Lines are thin: the measured button border is `1px solid #000000`, while the variable `--border-width--main` is declared as `.094rem`. Imagery is rectangular, edge to edge; the thumbnail in the hero is a small square-cornered still.

## Components

**Outlined button (`button-outlined`).** A full-width link (616px wide on desktop, 46px high, minimum height `--size--3rem`) with a 1px solid `#000000` border, transparent fill, square corners and a centred 22px monospace label, "more about us". The markup is `a.btn-el` with a `.btn-bg` layer and a `.btn-el_text` label.

**Wordmark and menu.** The white SVG wordmark "bitter creek" at the top left and the "menu" trigger at the top right in white 29.488px Llsub with -1.76928px tracking; the menu opens a dropdown with studio, work, directors and contact.

**Project codes (`display`).** Four codes in 38.8096px white mono at weight 500, the active one underlined and accompanied by a 22px director name and a "View Project" link in 22px / 500.

**Eyebrow (`eyebrow`).** A 14px mono label with -0.455px tracking in `#000000` ("Our mission", "Featured projects"), duplicated at both edges of the row.

**Project card caption.** Four columns of 14px mono text (city, title and year, category) with a 38.8096px project code (`project-code`) in the third column.

**Footer.** Services list (Branded Content, Commercials, Music Videos, Show Visuals, Live Streaming, Multicam, Live Session), team, directors, careers and the credit "Site by Malvah", with the copyright and time line in 16px Llsub.

## Design System Architecture

Bitter Creek publishes no public design system or brand guidelines; the home page links only to its own studio, work, directors, careers and contact pages, and no design-system or press page is linked. The system is a Webflow project with a variable-driven stylesheet: 234 custom properties on `:root`, named by role, such as `--display--font-family`, `--display--font-size: clamp(4rem, 2.908rem + 4.55vw, 8.365rem)`, `--h1--font-size` to `--h6--font-size` (fluid `clamp()` sizes for h1 to h4, 1.5rem for h5 and 1rem for h6), `--text-large--font-size: 1.25rem`, `--text-main--font-size: 1rem`, `--text-small--font-size: .875rem`, `--space--*`, `--size--*rem`, `--radius--*`, and `--button--*` and `--button-secondary--*` color variables.

Class names follow a utility-plus-component convention (`u-container`, `u-text_std-large`, `u-hflex-between-center`, `btn-el`, `btn-bg`, `home-squeeze_word`, `eyebrow-el`, `menu-item`), and interaction is attached with custom attributes (`b-hov`, `b-bg`, `b-text`, `h-ul`). Plyr (`https://cdn.plyr.io/3.7.8/plyr.css`) provides the video player controls and an additional stylesheet from `csb.app` is loaded; the measured tokens in this file are computed styles from the rendered page.

## Do's and Don'ts

Do
- Keep the interface black and white and let film stills provide color.
- Set labels and captions in the monospace face at 14px with -0.455px tracking and display words in Llsub with about -0.03em tracking.
- Use giant light-weight statements (112.083px) staggered across the width for the mission.
- Use a single 1px black outline, square button at full container width for the main call to action.
- Pin eyebrows to the left and right edges and use project codes as visual anchors.

Don't
- Do not add rounded corners, shadows or filled brand-color buttons to the measured chrome.
- Do not use the lime `#e3ff73` as a surface; it is declared only as a button and hover variable.
- Do not use positive letter spacing or uppercase.
- Do not copy the Plyr player controls as brand UI.
- Do not use numeric bold weights beyond the 500 measured on headings and link titles.

## Responsive Behavior

The Webflow stylesheet declares media queries at `max-width: 991px`, `max-width: 767px`, `max-width: 479px` and `min-width: 768px`. The 390px mobile pass measured: the hero project code at 32.0456px / 32.0456px weight 500 (73px wide), body text at 14px / 16.8px in a 185px-wide, 102px-high block, and a size distribution of 14px (631 weighted characters), 26.818px (130), 20px (69), 38.102px (49), 16px (48) and 32.0456px (24).

The mobile size list contains 38.102px with a weight of 49 characters, the same weight as the 49-character mission line at 112.083px on desktop, and 26.818px (130) against 29.488px (130) on desktop. Heading sizes are declared as `clamp()` values in the variable set. How the four-column hero, the project grid and the staggered statement reflow is not measured, and no mobile capture image exists.

## Iteration Guide

1. Start with `#ffffff` and `#000000` only. Place a darkened full-bleed film at the top with white type over it.
2. Load Unica 77 Llsub and Monollsub at weight 400; set headings with -0.03em tracking, labels in mono at 14px.
3. Write the mission as 112.083px / 100.875px Llsub, one word per element, staggered left and right.
4. Build the call to action as a 46px-high link with a 1px `#000000` border, no radius, full container width and a 22px mono label.
5. Caption each project with four mono columns (city, title and year, a 38.8096px code, category) under a full-bleed still.
6. Add motion and hover last; the declared variables list `#222222` and `#e3ff73` button states, which are not measured at rest.
