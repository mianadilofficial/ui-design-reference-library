---
version: alpha
name: INK Games
category: "Culture & Events"
description: "INK Games, a game studio and publisher, runs a near-black page (#0a0e11) with off-white text (#fafbfd), a full-bleed electric purple section (#c74fff) with deep violet type (#4c0070), huge uppercase RuderPlakatLL headlines up to 211.905px and PP Neue Montreal and Montreal Mono for 17px body and 15px buttons."
colors:
  canvas: "#0a0e11"
  ink: "#fafbfd"
  primary: "#272727"
  on-primary: "#fafbfd"
  accent-purple: "#c74fff"
  surface-white: "#ffffff"
  ink-black: "#000000"
  ink-on-purple: "#4c0070"
  hairline: "#efefef"
typography:
  display:
    fontFamily: RuderPlakatLL, "RuderPlakatLL Fallback"
    fontSize: 211.905px
    fontWeight: 400
    lineHeight: 186.476px
    letterSpacing: 6.35714px
    textTransform: uppercase
  display-mobile:
    fontFamily: RuderPlakatLL, "RuderPlakatLL Fallback"
    fontSize: 86px
    fontWeight: 400
    lineHeight: 75.68px
    letterSpacing: 2.58px
    textTransform: uppercase
  heading:
    fontFamily: RuderPlakatLL, "RuderPlakatLL Fallback"
    fontSize: 82.619px
    fontWeight: 400
    lineHeight: 74.3571px
    letterSpacing: 5.78333px
    textTransform: uppercase
  body:
    fontFamily: PPNeueMontreal, "PPNeueMontreal Fallback"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 22.61px
    letterSpacing: 0.17px
  button:
    fontFamily: PPNeueMontrealMono, "PPNeueMontrealMono Fallback"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 15px
    letterSpacing: "-0.105px"
    textTransform: uppercase
  nav:
    fontFamily: RuderPlakatLL, "RuderPlakatLL Fallback"
    fontSize: 10px
    fontWeight: 400
rounded:
  xs: 5px
  sm: 10px
  md: 50px
  none: 0px
spacing:
  s1: 5px
  s2: 7.5px
  s3: 8px
  s4: 8.5px
  s5: 9px
  s6: 10px
  s7: 20px
  s8: 57.62px
  s9: 109px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 35px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 35px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 10px 20px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, -92.7812, 0)
  footer:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.none}"
---

## Overview

INK Games (page title "INK Games") presents a studio, a games catalogue and an account system called INK ID. The first viewport is a black stage with the logo (an octopus-like mascot glyph plus "INK GAMES") at the left, three centered mono links (GAMES, STUDIO, SUPPORT) and two controls at the right: a white "LOGIN" button and a dark "SIGN UP" button with a small arrow. Behind and around a three-line headline, "JOIN THE NEW ERA OF GAMING", float colorful 3D game objects: gold coins, a blue cupid-like character with a bow, a pink arrow, a green card and a framed game screenshot. The headline is set in a condensed poster typeface so large that characters overlap the artwork.

The second chapter, "DEFINING THE NEXT GENERATION OF GAMING" with a small label "INKGAMES" and a dark "EXPLORE" button, overlaps a tilted rounded photograph of a man in a cap and green hoodie using a tablet. The third chapter is a full-bleed electric purple panel with deep violet type: "EXPLORE THE WORLD OF PRIZE KINGDOMS" and another "EXPLORE" button. Further down, news items are listed as link rows with a date, category and title (for example the date "05.14.25", the category "PARTNERSHIPS" and the title "INK Games Launches Revolutionary Monetization Features"), and a white footer closes the page with the "INKGAMES" mark and links (Games, INK HQ, Support).

The measured page is 5695px tall at 1280px wide. The voice is hype-driven and confident, all caps in headings, with mono microcopy for navigation and metadata, and 3D rendered game art for imagery.

## Colors

- **Night (#0a0e11, `canvas`)** is the page background (3905 area), a blue-tinted near-black.
- **Off-white (#fafbfd, `ink`, `on-primary`)** is the text on the dark page (870 characters) and on buttons.
- **Charcoal (#272727, `primary`)** fills the primary buttons ("EXPLORE", "CREATE YOUR INK ID", 21 area) with #fafbfd text.
- **Electric purple (#c74fff, `accent-purple`)** is the second largest background (1638), a full-bleed chapter panel.
- **Deep violet (#4c0070, `ink-on-purple`)** is the headline color on the purple panel (84 characters).
- **White (#ffffff, `surface-white`)** fills the footer (815) and the LOGIN button, with black (#000000, `ink-black`, 288 characters) text on it.
- **Hairlines:** #efefef (13 borders; also a 30-area fill) and #373737 (5 borders) on dark.

No shadows, hover colors or gradients were measured (shadows empty, hover list empty). The only root variable is `--vh: 8px`.

## Typography

Three families: RuderPlakatLL (400), PPNeueMontreal (400) and PPNeueMontrealMono (500), each with a "Fallback" companion face declared. By characters: RuderPlakatLL 430, PPNeueMontreal 412, PPNeueMontrealMono 400.

- **Display (h1):** RuderPlakatLL 211.905px / 186.476px, uppercase, 6.35714px letter spacing; 86px / 75.68px and 2.58px at 390px. A 138.095px size is also measured (100 characters).
- **Heading (h2):** RuderPlakatLL 82.619px / 74.3571px, uppercase, 5.78333px tracking; 55px / 49.5px and 3.85px at 390px.
- **Body:** PPNeueMontreal 17px / 22.61px, 0.17px tracking (15px / 19.95px at 390px).
- **Button:** PPNeueMontrealMono 15px / 15px, weight 500, uppercase, -0.105px tracking (14px at 390px).
- **Navigation:** RuderPlakatLL 10px for the skip link and the nav text, as measured; the capture renders navigation as mono uppercase links.
- **Other sizes:** 40.8571px (105 characters).

Line height is below font size on display and heading (about 0.88 of size), so headline lines overlap. RuderPlakatLL, PP Neue Montreal and its Mono companion are commercial faces; the stack names their generated fallbacks.

## Layout

Spacings measured are 5px, 7.5px, 8px, 8.5px, 9px, 10px, 20px, 57.62px and 109px. The page is built from full-width chapters: a centered hero, an offset text-over-image chapter with the text at the left edge and the photograph tilted at the right, a full-bleed purple panel with centered content, a news list, and a 635px-tall white footer. The header is a three-part bar with the logo, centered links and right-aligned buttons.

## Elevation & Depth

No box shadows or gradients were measured. Depth comes from overlap: the headline overlaps floating 3D objects, the type overlaps the photograph, sections stack like sheets (a `10px 10px 0px 0px` radius appears once and `0px 0px 10px 10px` twice; in the capture the dark chapter's lower corners are rounded where it meets the purple panel), and the photograph is tilted.

## Shapes

Radii measured: 5px (22 elements), 10px (4), `0px 0px 10px 10px` (2), 50px (2), and `10px 10px 0px 0px` (1). The primary and secondary button anchors compute 0px themselves; the footer 0px; the link rows 50px with a 1px border. In the capture the buttons look like small rounded rectangles; the 5px radius is the most common one on the page. Panels use 10px on one pair of corners.

## Components

- **EXPLORE button.** #272727 fill, #fafbfd PPNeueMontrealMono 500 15px uppercase label with a small arrow icon, 35px high and 98px wide (the "CREATE YOUR INK ID" variant is 196px wide).
- **LOGIN button.** White fill with black mono label; **SIGN UP** is a dark fill with arrow.
- **Navigation links.** Mono uppercase, centered in the header.
- **News row.** A 1240px-wide link row (45px high) with a 1px border, 50px radius, 10px 20px padding, a date, a category and a title in mono.
- **Footer.** White fill, black mono 15px text, 635px high.
- **Inputs and cards.** None measured.

- **Hero artwork.** The hero object set is rendered 3D: gold coins stamped with a character face, a blue armored ball, a red fuel can, a pink hexagon gem, a lime card and a framed key-art tile of a cheerful monster in front of a castle. Objects sit at different depths and sizes around the headline, some in front of the letters and some behind them.
- **Chapter labels.** Each chapter opens with a tiny square bullet and the mono label "INKGAMES" (in #4c0070 on the purple panel), then the headline, then one button, so every chapter follows the same label, headline, action pattern.
- **Auth controls.** LOGIN and SIGN UP sit together at the right of the header; on the 390px pass the header carries an "INK ID" button instead, with the GAMES and STUDIO entries in the navigation text.

## Design System Architecture

No public INK Games design system or brand guideline was found. The paths /brand, /press, /about and /design on https://inkgames.com all returned a 200 with the same response size as the home page (191316 bytes), so they are not separate pages, and the home page links to no design resources. The de-facto system is minimal: the stylesheet exposes a single root variable (`--vh: 8px`) and binds the three font families, each with a declared fallback face; colors, sizes and tracking are applied per component.

## Do's and Don'ts

- Do set headlines in RuderPlakatLL uppercase with positive tracking and line height under 1.
- Do alternate #0a0e11 night with a full-bleed #c74fff panel and #4c0070 type.
- Do use mono uppercase 15px labels for buttons, navigation and metadata.
- Do overlap type with 3D game art and tilted photography.
- Don't add shadows or gradients; none were measured.
- Don't use #272727 as a page background; it is the button fill.
- Don't use purple for body text.

## Responsive Behavior

The 390px pass measured: h1 86px / 75.68px with 2.58px tracking, h2 55px / 49.5px with 3.85px tracking, body 15px / 19.95px with 0.15px tracking, and the primary CTA labeled "INK ID" at 14px with a #272727 fill. The mobile navigation text includes "INK ID", "GAMES" and "STUDIO". Column counts and layout were not measured.

## Iteration Guide

1. Night background #0a0e11, off-white text #fafbfd.
2. Three-line RuderPlakatLL headline at 211.905px, line height 186.476px.
3. Place 3D art over and around the headline.
4. Add a tilted photograph chapter and a #c74fff panel with #4c0070 type.
5. Use #272727 mono buttons with arrows, 35px high.
6. Close with a white footer in mono.
