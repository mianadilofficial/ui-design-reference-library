---
version: alpha
name: Studio Alphonse
category: "Culture & Events"
description: "French production studio site: #e5e2d6 warm canvas, #292f33 blue-black ink, #c29230 dark yellow, #4f52be purple and #ba4f5e red accents, set in Transducer Vf variable (400 to 900) with a 44.8px uppercase hero and 6px card radius."
colors:
  canvas: "#e5e2d6"
  ink: "#292f33"
  primary: "#c29230"
  surface-purple: "#4f52be"
  accent-red: "#ba4f5e"
typography:
  display:
    fontFamily: "\"Transducer Vf\", Arial, sans-serif"
    fontSize: 44.8px
    fontWeight: 400
    lineHeight: 53.76px
    letterSpacing: "-0.896px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Transducer Vf\", Arial, sans-serif"
    fontSize: 25.6px
    fontWeight: 400
    lineHeight: 30.4px
    letterSpacing: "-0.512px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Transducer Vf\", Arial, sans-serif"
    fontSize: 256px
    fontWeight: 900
    lineHeight: 256px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Transducer Vf\", Arial, sans-serif"
    fontSize: 23.04px
    fontWeight: 400
    lineHeight: 23.04px
    textTransform: uppercase
  body:
    fontFamily: "\"Transducer Vf\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  link:
    fontFamily: "\"Transducer Vf\", Arial, sans-serif"
    fontSize: 19.68px
    fontWeight: 400
    lineHeight: 15.744px
rounded:
  xs: 2px
  sm: 3.84px
  md: 6px
  lg: 6.4px
  xl: 20px
  pill: 9999px
spacing:
  s1: 0.8px
  s2: 1.6px
  s3: 2.8px
  s4: 3.2px
  s5: 3.6px
  s6: 4.8px
  s7: 6.4px
  s8: 6.45px
  s9: 8px
  s10: 8.16px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-purple}"
    rounded: "{rounded.md}"
---

## Overview

Studio Alphonse (studioalphonse.com) is the French-language site of an audiovisual and cinema production studio and post-production lab based in La Réunion. The hero headline reads "STUDIO DE PRODUCTION AUDIOVISUELLE & CINÉMA, & LABO DE POST-PRODUCTION BASÉ À LA RÉUNION", with a "scroller pour découvrir" prompt. The page is long (measured scrollHeight 9810 on a 1280px viewport) and the document language is fr. A loading screen reads "Bienvenue sur studioalphonse.com", "chargement en cours ..." and a percentage counter.

Opened page sections: Expertises (Production audiovisuelle & cinéma; Labo de post-production; Production de service, which rents editing and grading rooms), Prods en cours (six featured cards with status labels such as "En production" and "En salle"), Toutes nos productions (an archive by year from 2017 to 2025), Clients (a logo grid including Orange, EDF, Volkswagen, E.Leclerc, KFC, Danone) and a footer with a copy-email control and Vimeo, Facebook and Instagram links. The voice is warm and direct, in lowercase French for navigation and uppercase for headlines. Sticker-style illustrations (a clapperboard, a drone, a bearded character) give it a playful, handmade tone against the otherwise austere palette.

## Colors

The root variables name the palette: `--white-smoke` #e5e2d6, `--black` #292f33, `--purple` #4f52be, `--red` #ba4f5e, `--yellow` #ddab45 and `--yellow-dark` #c29230. A second set of `--invert-*` variables (`--invert-yellow` #083791, `--invert-black` #bcb3a4, `--invert-purple` #969018, `--invert-red` #2b9378) is declared; their use was not measured on the home page.

- **Canvas #e5e2d6**: the warm off-white page background, by far the largest area (16299).
- **Ink #292f33**: a blue-black used for most text (1036 characters weighted) and for the dark sections (area 4416) and the hairline rules (border color, 39 elements).
- **Primary #c29230**: the dark yellow accent (23 characters weighted); no button was detected, so it is the accent, not a CTA fill.
- **surface-3 #4f52be**: the purple, used for the giant "EXPERTISES" heading (114 characters weighted).
- **ink-5 #ba4f5e**: the red, used for the character illustration and 21 text characters.

Translucent canvas overlays #e5e2d61a and #e5e2d699 are also measured as backgrounds on dark sections.

## Typography

One variable font does everything: Transducer Vf, loaded with the weight range 100 to 900 and an Arial fallback. It is a wide, heavy extended grotesque in the capture.

- **display**: 44.8px / 53.76px, weight 400, letter-spacing -0.896px, uppercase (the h1).
- **display-mobile**: 25.6px / 30.4px, letter-spacing -0.512px (390px pass).
- **heading**: 256px / 256px, weight 900, uppercase (the h2 "EXPERTISES").
- **subheading**: 23.04px / 23.04px uppercase.
- **body**: 16px / 19.2px.
- **link**: 19.68px / 15.744px (the STUDIO ALPHONSE wordmark link).

Other sizes measured by character weight are 15.36px, 102.4px, 20.4px, 13.6px and 19.04px. Weights in use are 400 (1468 characters), 900 (38) and 300 (18). The h1 size is `--size-font-hero: 3.5vw`, which is 44.8px at 1280px. Transducer is a commercial family; the license is not stated on the page opened.

## Layout

Section rhythm uses `--espacement-section: 12vh`. Measured paddings are 8px (95 uses), 25.6px (59), 51.2px (52), 12.8px, 6.4512px and 9.52px; gaps are 8px, 16px, 6.4px, 25.6px, 4.8px and 3.2px. A hairline rule (border color #292f33, 2px per `--border-2`) runs under the header, with the logo at left and "MENU" at right. The hero headline is centered on the canvas; the lower sections use very large type (102.4px and 256px) that spans the container. Project cards and the client grid follow, then the footer.

## Elevation & Depth

Almost flat. A single hairline shadow was measured, `rgba(229, 226, 214, 0.1) 1px -1px 0px 0px` on one element. Depth comes from color blocking (canvas against the dark #292f33 sections), translucent overlays and a fine grain texture visible in the capture header band. Do not add soft drop shadows.

## Shapes

Radii measured: 6px (67 elements, also `--radius`), 3.84px (26), 6.4px (26), 2px (8, also `--border-radius-big`), 50% (5, circles) and 20px (1). Cards and tags use 6px; the circle is used for small round markers. The sticker illustrations are die-cut shapes rather than CSS radii.

## Components

- **link**: Transducer Vf 19.68px in ink #292f33, used for the logo link and navigation.
- **card**: a canvas-colored panel with a 6px radius and purple text for the production cards (token `card`), carrying a title, category and status label such as "En production", "En salle" or "En développement".
- **Menu toggle**: the word MENU at the top right with a small dash marker, opening Home, Production, Labo de post-production, Production de service, à propos and contact.
- **Learn more**: text on the canvas color (#e5e2d6, 16px) on a dark block in the Expertises section.
- **Archive list**: year-grouped rows of client and project names.
- **Client logo grid** and **footer** with a "copier" (copy) email button.

Buttons, inputs and hover states were not measured (hover list empty).

## Design System Architecture

No public design system or brand guideline exists that the opened page links: https://www.studioalphonse.com/ names no typeface, palette or style document, and the footer credits the site "by Michaël Bernard" (michaelbernard.fr). The de-facto system is a small set of root variables: six named colors plus an inverted set, `--radius` 6px, `--border-radius-big` 2px, `--border-2` 2px, `--espacement-section` 12vh, `--size-font-hero` 3.5vw, `--studio-logo` .82em and `--studio-small` .934em. Seventeen root variables were recorded. Source: https://www.studioalphonse.com/ (measured rootVars).

## Do's and Don'ts

Do:
- Keep the canvas #e5e2d6 and ink #292f33 as the base pair and bring in purple #4f52be, red #ba4f5e and yellow #c29230 as accents only.
- Set headlines in uppercase Transducer Vf with negative tracking and use weight 900 only for the huge section titles.
- Write in French, in the studio's direct voice.
- Use 6px radii for cards.

Don't:
- Add soft shadows or gradients.
- Use the `--invert-*` colors without measuring them in context.
- Mix a second typeface.

## Responsive Behavior

The 390px pass measured the h1 at 25.6px / 30.4px with -0.512px tracking, and the most-read sizes 14.4px (258 characters weighted), 56px (151), 24px (141) and 16px (87). The capture of the mobile pass shows the header, the centered headline and a long empty canvas region before the first illustration, which is the state at capture time. Breakpoint rules and the mobile menu behavior were not measured.

## Iteration Guide

1. Set canvas #e5e2d6 and ink #292f33; add the accents sparingly.
2. Load Transducer Vf as a variable font from 100 to 900.
3. Set the hero at 3.5vw (44.8px on 1280px), uppercase, tracking -0.896px.
4. Use 6px radius for cards and 2px hairlines.
5. Hover not measured; do not specify it.
6. Re-run `node web/scripts/verify-designs.mjs --slug=studio-alphonse`.

## Content Notes for Reproduction

The featured productions listed on the opened page are FIRMIN (fiction, in production), Le Coruskan (fiction, in cinemas), a documentary in development, "Kaz sou bibe, la maison aux araignés" (in progress) and "Le temps écrasé" (2025). The archive runs from 2017 (PARABOLE) to 2025 (Le Coruskan) and is dominated by advertising work for clients such as ORANGE, EDF, E.LECLERC, VOGUE and VOLKSWAGEN, each listed as "CLIENT - title". Each row therefore reads as an uppercase client name, a dash and a short title. The clients grid shows thirteen logos: AUSTRALINE, CILAM, CITALIS, DANONE, EDF, E.LECLERC, FORD, GAÏA, KFC, ORANGE, RÉUNION-1ÈRE, VOLKSWAGEN and YOPLAIT. The footer reads "Studio Alphonse © 2023". When rebuilding, keep the language French, keep navigation labels lowercase (à propos, contact) and keep headline labels uppercase, as measured in the text-transform of the h1 and h2.

The expertises copy lists services in sequence: writing, development, pre-production, production and post-production for the audiovisual arm, and image editing, VFX, grading, motion design, titles, subtitling and Master/DCP/PAD deliverables for the lab. Keep these as plain text rows under the giant purple section title.
