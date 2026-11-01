---
version: alpha
name: "Pictoric"
category: "Portfolio"
description: "Pictoric (pictoric.com.ua) is a Ukrainian illustration studio site: grey #f6f6f6 canvas, chocolate brown #411f15 ink, yellow #ffe515 stickers, GTAmericaLCGV uppercase at weights 700 and 900, 14.22px card radius."
colors:
  canvas: "#f6f6f6"
  page-largest: "#f4f3ef"
  ink: "#411f15"
  primary: "#411f15"
  surface-yellow: "#ffe515"
  surface-black: "#000000"
  ink-faint: "#411f1533"
  white: "#ffffff"
  hairline: "#00000008"
typography:
  display:
    fontFamily: GTAmericaLCGV
    fontSize: 13.3333px
    fontWeight: 700
    lineHeight: 13.3333px
    letterSpacing: "-0.133333px"
    textTransform: uppercase
  display-mobile:
    fontFamily: GTAmericaLCGV
    fontSize: 14.56px
    fontWeight: 700
    lineHeight: 14.56px
    letterSpacing: "-0.1456px"
    textTransform: uppercase
  heading:
    fontFamily: GTAmericaLCGV
    fontSize: 188.444px
    fontWeight: 900
    lineHeight: 150.756px
    letterSpacing: "-5.65333px"
    textTransform: uppercase
  body:
    fontFamily: GTAmericaLCGV
    fontSize: 10.6667px
    fontWeight: 700
    lineHeight: 10.6667px
    letterSpacing: "-0.106667px"
    textTransform: uppercase
  nav:
    fontFamily: GTAmericaLCGV
    fontSize: 14.2222px
    fontWeight: 400
  link:
    fontFamily: GTAmericaLCGV
    fontSize: 21.3333px
    fontWeight: 900
    lineHeight: 17.0667px
    letterSpacing: "-0.64px"
    textTransform: uppercase
rounded:
  xs: 14.22px
  sm: 53.33px
  md: 62.22px
  lg: 88.89px
  pill: 9999px
spacing:
  s1: 1.78px
  s2: 2.67px
  s3: 3.56px
  s4: 5.33px
  s5: 7.11px
  s6: 14.22px
  s7: 21.33px
  s8: 24px
  s9: 24.89px
  s10: 28.44px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    transform: matrix(1, 0, 0, 1, -67.2578, 0)
  nav:
    textColor: "{colors.ink}"
    padding: 0px 35.5556px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  text-input:
    backgroundColor: "{colors.white}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 0px 41.7778px 0px 22.2222px
    height: 36px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 14.2222px
    transform: matrix(0.85, 0, 0, 0.85, -745.809, -261.688)
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 42.6667px 35.5556px 21.3333px
---

## Overview

Pictoric (pictoric.com.ua, title "The world of illustrations, where ideas become art reality") is a Ukrainian illustration studio and boutique. Its home page headline reads "A world where illustration speaks up", followed by the line "We create illustration and design projects, organize exhibitions and workshops." The page is bilingual (an ENG | УКР switch at top left) and links to Projects, About us, Contest and Boutique, with the Instagram handle @pictoric.ua beside the nav. Section headlines on the page include "our heritage", "about us", "pictoric land", a boutique block ("Limited collections of Ukrainian illustrators. We transform your homes and work spaces") and a contest block ("Calling all"). CTA labels read "Browse projects", "More info", "Take part", "subscribe" and "open". The microcopy is warm and first-person plural, for example "Think you're up for it? Let's see what you've got :)" and "We love illustration, and illustration loves us back!".

The measured capture is a pale grey field covered with large white circles, two yellow star-shaped sticker links reading "ABOUT US" and "PROJECTS" in curved text, a huge brown uppercase headline, and at the bottom a fanned row of illustrated book covers around a closed book with a yellow bookmark labelled "OPEN". A thin blue and yellow line runs along the top edge of the viewport. The extraction recorded a cookie overlay as hidden (`consentOverlaysHidden: cookies-wrapper`), and no cookie UI is documented here.

## Colors

All values from `web/data/extracted/pictoric.json`.

- **canvas `#f6f6f6`**: the body background (`--c-grey`).
- **page-largest `#f4f3ef`**: the warm off-white of the largest measured area (weight 4,113), used for the book and card surfaces.
- **ink / primary `#411f15`**: a deep chocolate brown that colors almost all text (870 characters) and is the extractor's primary. There is no separate filled CTA color.
- **surface-yellow `#ffe515`**: the sticker and bookmark yellow (area weight 2,744).
- **surface-black `#000000`**: area weight 1,318.
- **ink-faint `#411f1533`**: the 20% brown used as a faint text and border color.
- **white `#ffffff`** (10 characters) and **hairline `#00000008`** (12 border occurrences).

The shipped CSS root variables add: `--c-red #f52019`, `--c-light-blue #bbdef0`, `--c-dark-blue #418dff`, `--c-light-brown #e5d8d4`, `--c-cream #fffcdf`, `--c-yellow-main-90 #ffe515e5`, `--c-brown-50 #411f157f`, `--c-brown-40 #411f1566`, `--c-brown-20 #411f1533`, `--c-brown-text-50 #66514b80`, `--c-pure-black #000`, `--c-pure-white-70 #ffffffb3`, and a theme color `#007aff`. The exact hexes of the blue and yellow top-edge line are not recorded in the extraction. Illustration thumbnails bring in many additional colors that are artwork, not UI.

## Typography

A single family carries everything: GTAmericaLCGV, loaded at weights 500, 700 and 900. Every measured character is weight 700 (503 characters) or 900 (461 characters), and text is uppercase with negative letter-spacing.

- **heading**: 188.444px / 150.756px, weight 900, letter-spacing -5.65333px, color #f6f6f6 on the "PICTORIC LAND" band (mobile: 90.48px / 72.384px, -2.7144px).
- **display** (the extractor's h1 is the "ENG" language link): 13.3333px / 13.3333px, weight 700, letter-spacing -0.133333px.
- **display-mobile**: 14.56px / 14.56px, weight 700, letter-spacing -0.1456px.
- **body**: 10.6667px / 10.6667px, weight 700, letter-spacing -0.106667px (397 characters, the most common size).
- **link** ("MORE INFO"): 21.3333px / 17.0667px, weight 900, letter-spacing -0.64px.
- **nav**: 14.2222px, weight 400.

Other measured sizes by character count: 48.8889px with -1.46667px spacing (188 characters), 105.778px with -3.17333px (70 characters, the page headline scale), 13.3333px (94), 23.1884px with positive 2.31884px spacing (27), and 39.1111px with -1.17333px (25). Line-height is tightly set at or below the font size on most roles. The hero lines "A WORLD WHERE ILLUSTRATION SPEAKS UP" are heavy, condensed-looking uppercase in the brown ink. Mobile body measures 22.88px / 18.304px weight 900, and the most-read mobile sizes are 14.56px, 34.32px, 28.08px and 46.8px. No font-license source was opened.

## Layout

The page is 1280px wide at desktop with a scroll height of 10,384px. The header is 65px high with 35.5556px horizontal padding; the root variables declare `--viewport 1440` and an offset scale `--offset-16 1rem`, `--offset-32 2rem`, `--offset-40 2.5rem`, `--offset-48 3rem`, `--offset-64 4rem`, `--offset-80 5rem` and `--offset-120 7.5rem`. Measured gaps: 7.11111px (12), 21.3333px (6), 14.2222px (4), 24px (2) and 169.813px (2). Measured paddings: 14.2222px (44), 7.11111px (10), 2.66667px, 366.188px, 35.5556px, 5.33333px, 230.222px and 28.4444px. The hero is a generous empty space dominated by one centered headline and a short caption; the footer has padding 42.6667px 35.5556px 21.3333px and reads "©2026. PICTORIC".

## Elevation & Depth

One shadow was measured: `rgba(0, 0, 0, 0.2) 0px 16px 32px 0px`. Border colors measured are `#00000008` (12), `#411f15` (2), `#411f1533` (2) and `#411f151a` (2), so edges are near invisible hairlines. The visual depth comes from layering the translucent white circles, the sticker links, and the overlapping fan of book covers; z-index variables declare `--z-bg -1`, `--z-base 1`, `--z-mobile-menu 20`, `--z-cursor 50`, `--z-modal 200` and `--z-preloader 300`.

## Shapes

Round and soft. The measured radii are 14.2222px (32 elements, the card and book radius), `50%` (8), `0px 14.2222px 14.2222px 0px` (6) and `14.2222px 0px 0px 14.2222px` (6) for paired book pages, `100%` (5), 62.2222px (3), 88.8889px (2) and 53.3333px (1, the search input). The tokens record `xs 14.22px`, `sm 53.33px`, `md 62.22px`, `lg 88.89px` and `pill 9999px`. Star-shaped stickers and circles are shape motifs of the identity.

## Components

- **text-input**: white `#ffffff` fill, brown text, 10.6667px uppercase body type, padding 0px 41.7778px 0px 22.2222px, height 36px, width 292px, radius 53.3333px.
- **card**: `#f4f3ef` background, brown text, padding 14.2222px, radius 14.2222px (the book-cover and project cards).
- **link**: brown, 21.3333px weight 900 uppercase ("MORE INFO").
- **nav**: header 65px high, padding 0px 35.5556px; nav-link text 14.2222px weight 400.
- **footer**: `#f6f6f6` background, brown text, padding 42.6667px 35.5556px 21.3333px.
- **Sticker links and bookmark**: yellow #ffe515 shapes with curved or short uppercase labels ("ABOUT US", "PROJECTS", "OPEN"). Not tokenised because the extractor recorded no CTA candidates.

The mobile pass found a filled brown button labelled "ABOUT US" with white text, 14.56px, padding 16.64px, height 48px, width 174px, radius 62.4px; this is recorded only for mobile.

## Design System Architecture

No public design system, brand guideline or press kit exists on the opened home page; the only external link is an agency credit. The de-facto system is in the shipped CSS variables on `:root`: a `--font` variable, color variables prefixed `--c-` (brown alpha steps 20/40/50, yellow, greys, blues, red, cream), spacing variables prefixed `--offset-`, z-index layers prefixed `--z-`, and transition variables (`--default-ease`, `--smooth-ease cubic-bezier(0.65,0,0.35,1)`, `--transition 0.2s`, `--transition-fast 0.3s ease-in-out`, `--transition-slow 0.8s ease-in-out`). Source: https://pictoric.com.ua/ (measured with `web/scripts/extract-tokens.mjs`).

## Do's and Don'ts

- Do keep text in chocolate brown #411f15 on #f6f6f6, with #ffe515 as the single accent for stickers and bookmarks.
- Do set GTAmericaLCGV uppercase at weight 700 or 900 with negative tracking.
- Do round cards at 14.2222px and inputs near full pill.
- Do keep copy friendly and first-person plural, with the occasional emoticon.
- Don't use regular-weight body copy; measured text is 700 or 900 apart from the 14.2222px nav-link.
- Don't use heavy shadows; only one soft shadow was measured.
- Don't use the cookie overlay or third-party widgets as brand UI.

## Responsive Behavior

Measured on the 390px pass: the PICTORIC LAND heading is 90.48px / 72.384px with -2.7144px spacing; the extractor's mobile h1 is the filled "ABOUT US" button at 14.56px; body paragraphs measure 22.88px / 18.304px at weight 900; and the most-read sizes are 14.56px (333 characters), 34.32px (188), 28.08px (113), 46.8px (70) and 90.48px (26). A `--z-mobile-menu 20` variable exists in the CSS. How the nav and book carousel change on mobile is not measured.

## Iteration Guide

1. Set canvas #f6f6f6, surfaces #f4f3ef, ink #411f15, accent #ffe515.
2. Use GTAmericaLCGV uppercase; weights 700 and 900 only; apply the measured negative letter-spacing per size.
3. Compose the hero as a single centered mega-headline over white circles, with yellow sticker links.
4. Round cards at 14.2222px, inputs at 53.3333px.
5. Re-run `node web/scripts/verify-designs.mjs --slug=pictoric` after edits; never alter measured values.
