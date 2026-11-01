---
version: alpha
name: Jason Bergh
category: "Portfolio"
description: "Director and cinematographer portfolio on pure black #000000 with lemon #ffeec8 type, an Editorial New 200 display at 84.48px (-1.6896px tracking), 6.4px Monument Grotesk Mono body labels, 9.728px uppercase Monument Grotesk nav, a #1e1e1c filter bar and 3px-radius thumbnails."
colors:
  canvas: "#000000"
  page-body: "#1e1e1c"
  ink: "#ffeec8"
  primary: "#ffeec8"
  ink-secondary: "#ffeec833"
  ink-light-70: "#fffbf2b3"
  ink-light: "#fffbf2"
typography:
  display:
    fontFamily: Editorialnew, Arial, sans-serif
    fontSize: 84.48px
    fontWeight: 200
    lineHeight: 89.5488px
    letterSpacing: "-1.6896px"
  display-mobile:
    fontFamily: Editorialnew, Arial, sans-serif
    fontSize: 53px
    fontWeight: 200
    lineHeight: 56.18px
    letterSpacing: "-1.06px"
  nav:
    fontFamily: Monumentgrotesk, Arial, sans-serif
    fontSize: 9.728px
    fontWeight: 500
    lineHeight: 9.728px
    textTransform: uppercase
  body-dominant:
    fontFamily: MonumentgroteskMono
    fontSize: 6.4px
    fontWeight: 400
rounded:
  xs: 3px
spacing:
  s1: 1.28px
  s2: 1.92px
  s3: 2.56px
  s4: 3.2px
  s5: 3.46px
  s6: 3.84px
  s7: 4.35px
  s8: 4.61px
  s9: 5.12px
  s10: 5.38px
components:
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink-light}"
    padding: 0px 0px 17.92px
---

## Overview

The measured page is `https://www.jasonbergh.com/`, titled "Jason Bergh | Director, Cinematographer, Producer" (language `en`). It is a single 1,280px by 868px screen: a black stage with a large cream-lemon wordmark, "JasonBergh", set in a light italic-and-roman serif in the middle of the frame, with the italic "n" and the "B" mixed within the name. Two thumbnails of film stills sit in opposite corners (top left, bottom right) and vertical strips of tiny sprocket-like marks run down the centre, evoking a film strip. A dark bar (`#1e1e1c`) is pinned to the bottom: "© 2026" at the left, a "SLIDER / LIST" view switch, a category list ("ALL (42)", "TV & FILM", "COMMERCIAL", "EDITORIAL"), a running timecode ("00:05:76") and "CREDITS" at the right.

According to the fetched page, the site shows a director, cinematographer and producer with intimate, character-driven documentary and fashion work: TV and film (docuseries and features, including projects for Amazon and Netflix), editorial (fashion films and magazine features) and commercial campaigns. The navigation names Work, Reportage, About, Archive and Contact, and a "creative mode" toggle. The footer credits BL/S®, Artycoders and serhii polyvanyi for the build. The tagline in the fetched text is "Intimate, Raw" and "Human Storytelling".

The role the extractor found as the h1 was the single fragment "lay" (a letter-split title in the project slider, in Editorial New 200 at 84.48px); the wordmark and the display style are the same typeface and size family, confirmed by 583 characters of the page being set at 84.48px. The first tokens are therefore the display style measured, not a literal heading.

## Colors

The palette is three warm lights on black.

- **Canvas `#000000`** (`colors.canvas`): the stage (2,048 area weight).
- **Page-body `#1e1e1c`** (`colors.page-body`): the bottom filter bar and panels (266 area weight).
- **Ink / primary `#ffeec8`** (`colors.ink`, `colors.primary`, root `--lemon`): the wordmark, nav and highlights (2,375 characters). The page has no saturated action color, so primary is the lemon.
- **Ink secondary `#ffeec833`** (`colors.ink-secondary`): lemon at 20% opacity, the color of the dominant 6.4px mono text (12,790 characters), which makes the tiny list text recede strongly.
- **Ink light 70 `#fffbf2b3`** (`colors.ink-light-70`) and **ink light `#fffbf2`** (`colors.ink-light`, root `--light`): bright off-white used for footer and secondary text (1,159 and 733 characters).
- Root `--grey` is `#bdbab3`; it was not measured on a rendered element, so no token is declared. Light overlays `#ffeec826` and `#d9d9d926` appear in the area list at near-zero weight.

## Typography

Eight font entries are loaded across four families:

- **Editorial New** (weights 200 and 400, plus italic 200 and 400): the display face (716 characters roman, 157 italic).
- **Monument Grotesk** (400 and 500): nav and labels (1,234 characters).
- **Monument Grotesk Mono** (400): the dominant face, 14,167 characters, in the tiny list text.
- **ABC Simon Mono** (400): 781 characters at 10.624px.

| Role | Font | Size / line-height | Tracking |
| --- | --- | --- | --- |
| Display | Editorial New 200 | 84.48px / 89.5488px | -1.6896px |
| Display, 390px | Editorial New 200 | 53px / 56.18px | -1.06px |
| Nav / footer labels | Monument Grotesk 500 uppercase | 9.728px / 9.728px | normal |
| Body-dominant list text | Monument Grotesk Mono 400 | 6.4px | normal |

Other sizes by characters: 6.4px (12,790), 9.728px (2,527), 10.624px (781), 84.48px (583), 66.56px (151), 33.28px (84), 14px (84), 46.08px (29). Weights: 400 (15,951 characters), 200 (863) and 500 (243). All of these are commercial foundry faces; no substitute is cited by the site.

## Layout

- Desktop 1,280px by 868px, a fixed stage with a 68px-high footer bar (the footer measured 68px by 1,280px with padding 0px 0px 17.92px).
- Measured gaps: 1.92px (82 uses), 294.4px (82 uses), 3.2px (24), 2.56px (6), 176px (4), 417.28px (2), 28.16px (2). Paddings: 1.28px (100), 5.12px (85), 11.52px (6), 6px (4).
- The wordmark is centred; thumbnails and the film-strip marks are placed symmetrically; the nav is a 300px wide cluster with 23px height.
- Spacing tokens are very small (1.28px to 5.38px), reflecting dense micro-typography in the list and timecode.

## Elevation & Depth

No box shadows and no border colors were measured (`boxShadows` and `borderColors` empty). Depth is a layering of dim thumbnails in the corners, the dark bar, and the light wordmark against black. Opacity is the main depth tool: secondary text is the lemon at 20%.

## Shapes

One radius: 3px on 109 elements (`rounded.xs`), the small thumbnails and list chips. Everything else is square. The view-switch and category markers are text only.

## Components

- **Nav (`nav`)**: Monument Grotesk 500 uppercase 9.728px, `#ffeec8`, a 300px by 23px cluster (WORK, REPORTAGE and others); each link is 28px wide, 10px high.
- **Footer / filter bar (`footer`)**: `#1e1e1c` bar with `#fffbf2` text at 9.728px weight 400 uppercase, containing the copyright, SLIDER / LIST toggle, category list with counts, timecode and CREDITS.
- **Thumbnails**: small film stills with 3px radius at the corners; the project slider cycles through them.
- **Wordmark**: Editorial New 200 at 84.48px, lemon, with mixed italic.
- No buttons, inputs or cards were detected by the extractor, so no `button-primary` token is declared.

## Design System Architecture

No public design system was found; the site's fetched text does not link one. The only root custom properties are three colors, `--lemon` `#ffeec8`, `--light` `#fffbf2` and `--grey` `#bdbab3`; everything else is component CSS. Type and spacing therefore come from measured computed styles. The site's own footer credits BL/S®, Artycoders and serhii polyvanyi for the build.

## Do's and Don'ts

- Do keep the stage black and the type lemon `#ffeec8` or off-white `#fffbf2`.
- Do use Editorial New at weight 200 with negative tracking for the name.
- Do set lists and credits in tiny Monument Grotesk Mono, dimmed with 20% lemon.
- Do round thumbnails only 3px.
- Don't add shadows or borders; none were measured.
- Don't use saturated accent colors; the palette is warm light on black.
- Don't set display type heavier than 200.

## Responsive Behavior

Measured at 390px: the first heading found is "Greatest" (a letter-split project title) at Editorial New 200, 53px / 56.18px, tracking -1.06px; no navigation, body text or call to action was detected on mobile. Mobile sizes by characters: 8px (12,790), 11px (1,708), 10px (1,238), 53px (539), 46px (151). Layout changes at other widths are not measured.

## Iteration Guide

1. Black canvas, lemon `#ffeec8` type, `#fffbf2` for bright small text, `#1e1e1c` for the bar.
2. Display: Editorial New 200, 84.48px / 89.5488px, -1.6896px tracking.
3. Labels: Monument Grotesk 500 uppercase at 9.728px; lists in Monument Grotesk Mono at 6.4px.
4. Radius 3px for thumbnails; no shadows.
5. Space with 1.28px to 5.12px micro-steps and wide 294.4px gaps.
6. Include a timecode and a SLIDER / LIST switch to echo the film-editing metaphor.

## Imagery and Microcopy

Imagery is cinematic stills: a dim, low-key portrait of a man in the top-left thumbnail and a daylight scene of a woman seated on a tow truck in the bottom-right thumbnail, each shown small against the black. The fetched page lists featured projects such as The Greatest Love Story Never Told (Amazon), Halftime (Netflix), Noted: Alicia Keys and Stand Up (Seattle Reign FC), with editorial work for fashion titles and commercial work for consumer brands. Microcopy is catalogue-like: "ALL (42)", category names in capitals, a running timecode, "SLIDER / LIST", "CREDITS" and a copyright line. The only prose is the two-part tagline "Intimate, Raw" and "Human Storytelling", so the film work carries the emotional weight and the interface stays nearly silent.
