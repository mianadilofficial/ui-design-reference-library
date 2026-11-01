---
version: alpha
name: Artefakt
category: "Portfolio"
description: "Artefakt (artefakt.mov): Frankfurt hybrid film production studio; pure black canvas #000000, white text, DrukWide 700 uppercase at 42.67px with -1.78px tracking, TronicaMono 10.67px uppercase body, square corners, ASCII-glyph hero."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  surface-dark: "#292929"
  ink-muted: "#ffffff85"
typography:
  display-mobile:
    fontFamily: TronicaMono, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 12.6px
    textTransform: uppercase
  heading:
    fontFamily: DrukWide, sans-serif
    fontSize: 42.6667px
    fontWeight: 700
    lineHeight: 42.6667px
    letterSpacing: "-1.77778px"
    textTransform: uppercase
  body:
    fontFamily: TronicaMono, sans-serif
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 11.7333px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 0.89px
  s2: 4.44px
  s3: 8.89px
  s4: 13.33px
  s5: 17.78px
  s6: 35.56px
  s7: 44.44px
  s8: 144px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 0px 17.7778px
---

## Overview

artefakt.mov is the website of Artefakt (written "artefakt.mov"), described on the page as "a hybrid production company fusing high-end commercial work with a drive to explore the unconventional", with the page title "Artefakt — Hybrid Production Frankfurt". The measured page is 1280px wide and 9394px tall. The header is a four-cell strip of small uppercase mono text: the italic wide logotype at the left, a "WORKS / ABOUT" stack, an "INSTAGRAM / INFO@ARTEFAKT.MOV" stack (the e-mail address is shown inverted, white on black text, in the capture) and "PRODUCTION STUDIO / FRANKFURT, GERMANY" at the right. The hero is a black field with a fine dot-grid texture and a wide band of animated ASCII glyphs that spells the studio's name; below it are the captions "FILM PRODUCTION. REIMAGINED." at left and the company description at center. The next section lists works as full-width rows: a bold wide title ("FUTURE STARS") at left and three mono columns (CLIENTS: EA X FC BAYERN, TYPE: COMMERCIAL, DATE: 2026) at right, with video loops (the HTML references mp4 loops for projects such as "comdirect" and "future-stars") that fill the row. The measured text "WE SHOOT. WE PRODUCE. WE FINISH. COMMERCIALS MADE FROM PASSI..." is a statement in the wide face.

The mood is that of a terminal crossed with a film credit sequence: pure black, white-only type, uppercase everywhere, and tiny system text set against giant wide-set display lines.

## Colors

There are only whites on black. `canvas` ({colors.canvas}, #000000) is the page and `ink` ({colors.ink}, #ffffff) the text color (859 measured characters); `primary` is also #ffffff since no filled call-to-action exists (the only button-like control is the "> Contact us" text link). `ink-muted` ({colors.ink-muted}, #ffffff85, white at about 52%) is the secondary text color (443 characters), used for column labels ("CLIENTS", "TYPE", "DATE"). `surface-dark` (#292929) is the only other measured background (weight 51). The Tailwind root declares the full default palette (purple, fuchsia, rose, sky, pink, orange and others in oklch); these are framework defaults, not measured on visible UI, and are not used.

## Typography

Two faces are loaded: DrukWide (700) and TronicaMono (400). TronicaMono carries 1162 measured characters and DrukWide 140.

- `heading`: DrukWide 700, 42.6667px, 42.6667px line height (line height equal to size), -1.77778px tracking, uppercase.
- `body`: TronicaMono 400, 10.6667px, 11.7333px line height, uppercase.
- `display-mobile`: TronicaMono 400, 14px, 12.6px line height, uppercase (the measured "MENU" label at 390px, which the extractor took as the h1).

A 74.6667px size (65 characters, same -1.77778px tracking) is also measured for DrukWide, and a 21.3333px size (12 characters); neither is part of the token set. The Tailwind root defines type sizes such as `--text-72: 7.2rem`, `--text-84: 8.4rem` and `--text-120: 12rem`, and sets `--font-body` to "TronicaMono", sans-serif. No lowercase text is used: all measured text is uppercase except the logotype.

## Layout

A full-width fluid layout with a 6.5rem header (`--header-height`) and four equal header cells aligned to the page grid. Work rows are full-bleed with the title anchored left and metadata columns aligned at roughly the page's center and right. The `--spacing` base is .1rem and the page measures spacing values of 0.89, 4.44, 8.89, 13.33, 17.78, 35.56, 44.44 and 144px (the last is a 144px padding used on 22 elements). Section content is divided by space, not by rules.

## Elevation & Depth

None. The CSS corpus lists no box shadows beyond Tailwind placeholders (`--shadow-xs: 0 1px 2px 0 #0000000d`, `--drop-shadow-lg: 0 4px 4px #00000026` are variables and are not applied to visible UI). Depth is created by video, by the dot-grid texture on the hero, and a scanline layer (`--z-index-over-scanline: 100`).

## Shapes

All corners are square (measured 0px). The token set has only `none` (0px). The Tailwind defaults for radius (`--radius-sm` .25rem to `--radius-4xl` 2rem) are declared but not applied to any measured element.

## Components

- `nav` / `nav-link`: white TronicaMono 10.6667px uppercase, stacked two per cell.
- `link`: same, with the e-mail shown as a highlighted (inverted) chip in the capture.
- Work row: title in DrukWide, metadata columns in TronicaMono with {colors.ink-muted} labels and white values.
- `footer`: white text with 17.7778px bottom padding.

There is no `button-primary`: the page has no filled button.

## Design System Architecture

No public design-system or brand-guideline page was found. The site is WordPress with a Tailwind v4 style root (`--color-*` in oklch, `--text-*`, `--radius-*`, `--container-*`, `--spacing`), with custom variables for `--font-body`, `--header-height`, and z-index layers (`--z-index-over-scanline`, `--z-index-transition: 110`). Its own look is defined by only two fonts, black and white, and uppercase. Source: [artefakt.mov](https://artefakt.mov/).

## Content and Imagery

Imagery is the studio's own commercial film work, shown as looping video and stills inside full-bleed 16:9 frames; the markup carries `data-loop` video sources and `data-image` stills for each project slug (for example "comdirect" and "future-stars"). Project metadata is terse: CLIENTS (such as "EA X FC BAYERN"), TYPE ("COMMERCIAL") and DATE ("2026"). Copy is set in short declarative sentences ("WE SHOOT. WE PRODUCE. WE FINISH.", "FILM PRODUCTION. REIMAGINED.") and the contact path is a single "> Contact us" link, written with a leading angle bracket like a command prompt. The hero's ASCII glyph band is a text-rendered animation: while it runs, the page's text content reads as scrambled characters (the extractor captured strings such as "+NPLK" and "FT++>" in place of "WORKS" and "ABOUT"), so the extracted body text contains scrambled strings.

## Page Rhythm

Reading order is strictly vertical and spare. The first viewport holds only the header strip, the glyph band and two captions; the second section is the project list; the closing section of the page is the footer with the same contact items repeated (Works, About, Instagram, the e-mail address and "> Contact us"). Between sections there are large empty black intervals rather than dividers, and in the capture the project rows below the first appear as empty black space until their video frames load. Every informational element is aligned to a column line shared with the header cells, so left, center and right text edges stay consistent from top to bottom.

## Interaction and Motion

The root defines easing and timing variables (`--ease-in: cubic-bezier(.4,0,1,1)`, `--default-transition-timing-function: cubic-bezier(.4,0,.2,1)`, `--animate-pulse: pulse 2s cubic-bezier(.4,0,.6,1) infinite`), perspective values (`--perspective-normal: 500px`, `--perspective-dramatic: 100px`) and layering variables for a scanline overlay and a page transition (`--z-index-over-scanline: 100`, `--z-index-transition: 110`). No hover states were recorded for this page, so link and row hover behavior is not measured.

## Do's and Don'ts

- Do set all text uppercase; use DrukWide for titles and TronicaMono for everything else.
- Do tighten DrukWide tracking to -1.77778px.
- Do use white on black with one secondary white at about 52%.
- Do keep corners square and avoid fills and shadows.
- Don't introduce an accent color.
- Don't use lowercase body copy.
- Don't treat the Tailwind default palette in the root as part of the brand.

## Responsive Behavior

Measured at 390px: the "WE SHOOT. WE PRODUCE. WE FINISH." statement is DrukWide 700 at 24px with 24px line height and 0px 20px padding, the description paragraph is 12px on a 13.2px line height (uppercase TronicaMono), and the extractor's mobile heading role is the "MENU" label (14px, uppercase). The page markup contains "Menu" and "Close" labels. Column behavior for the work rows at mobile width was not measured.

## Iteration Guide

1. Black ground, white text, white-at-52% labels.
2. Titles: DrukWide 700, 42.6667px, -1.77778px tracking, uppercase; body: TronicaMono 10.6667px uppercase.
3. Square corners; no fills; no shadows.
4. Keep metadata in labeled columns (CLIENTS / TYPE / DATE).
5. Run `node web/scripts/verify-designs.mjs --slug=artefakt` after edits.
