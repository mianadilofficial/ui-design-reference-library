---
version: alpha
name: DICH™ Fashion
category: "Fashion & Apparel"
description: "DICH Fashion concept site (dich-fashion.webflow.io): a black #070707 intro with a pink-violet-peach gradient ring, then a peach #ffdfc4 page, ultra-large uppercase T 012 display type (253.293px), tiny 10.0928px Nbarchitektstd terminal-style labels, hairline grid lines, no shadows and no filled buttons."
colors:
  canvas: "#070707"
  page-body: "#ffdfc4"
  ink: "#fef6f1"
  ink-dark: "#070707"
  primary: "#ffebb0"
  surface-3: "#39322d"
  light-black: "#141414"
  dark-coral: "#5c2c45"
  dark-green: "#444241"
  pastel-pink-100: "#fef6f1"
  lemon: "#ffff82"
  purple: "#cfb8ff"
  violet: "#e8a5f3"
  blue: "#c5c4ff"
  yellow-soft: "#ffffcc"
typography:
  display:
    fontFamily: "\"T 012\", Verdana, sans-serif"
    fontSize: 253.293px
    fontWeight: 400
    lineHeight: 157.042px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"T 012\", Verdana, sans-serif"
    fontSize: 80.9913px
    fontWeight: 400
    lineHeight: 50.2146px
    textTransform: uppercase
  heading:
    fontFamily: "\"T 012\", Verdana, sans-serif"
    fontSize: 126.586px
    fontWeight: 400
    lineHeight: 78.4831px
    textTransform: uppercase
  body:
    fontFamily: Nbarchitektstd, Verdana, sans-serif
    fontSize: 10.0928px
    fontWeight: 400
    lineHeight: 10.0928px
  body-mobile:
    fontFamily: Nbarchitektstd, Verdana, sans-serif
    fontSize: 10.8556px
    fontWeight: 400
    lineHeight: 13.0268px
  nav:
    fontFamily: Nbarchitektstd, Verdana, sans-serif
    fontSize: 9.2416px
    fontWeight: 400
    lineHeight: 9.2416px
    letterSpacing: 0.277248px
  nav-mobile:
    fontFamily: Nbarchitektstd, Verdana, sans-serif
    fontSize: 12.8193px
    fontWeight: 400
    lineHeight: 12.8193px
rounded:
  pill: 9999px
spacing:
  s1: 1px
  s2: 2.43px
  s3: 3.28px
  s4: 3.46px
  s5: 6.14px
  s6: 8px
  s7: 12.17px
  s8: 12.67px
  s9: 13.51px
  s10: 16px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 12.1702px 0px 7.67053px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 12.1702px 0px 7.67053px
  discover-disc:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.pill}"
---

## Overview

This file documents https://dich-fashion.webflow.io/ (page title "DICH™ Fashion | A New Era of Futuristic Fashion"), a Webflow-hosted concept fashion site. Text in the opened markup credits "SITE BY: Serhii polyvanyi", "BL/S®", "project: New Era of dich", "MASTERCLASS BY: NICCOLO MIRANDA" and an Awwwards badge, and the legal line reads "©2024-2045". It is a showcase experience, not a retail store: the content is manifesto copy, three "series" (Oraniths, Anturax and a case-study pairing), a mission block, a "drop" table of a star (Sirius, Alpha Canis Majoris) and an "Inspire Our Next Collection" form.

The measured first screen is the entry stage. A black field with a thin grid of hairlines holds a gradient ring (pink and violet on the left half, peach on the right) around a dark disc labelled "<<< DISCOVER >>>", flanked by two terminal-style blocks: "C://SYSTEM_FILES ...PROTOCOL_BL/S /////...2045 <ACCESS GRANTED>" at left and "D://DATA_CORE ...D!CH /////...2045 <FILE DECRYPTED>" at right, and the line "TURN UP THE VOLUME, BABY. THE FUTURE WON'T WAIT." Below it, in the capture, the page is flat peach. The markup also has a percentage loader ("1 0 0 %"), an "OFF / ON" sound toggle, a "MENU" and "CLOSE" control, and X / Y coordinate read-outs ("X . 0124", "Y . 1367").

The voice is cyber-playful: "SHIFT THE VISION", "EVOLVE", "TOUCH THE VOID", "TRANSCEND", "DARE_TO_DISRUPT", "ENERGY-PULSE: VIBRANT ORANGE", "STYLE-DNA: FUTURE-PLAYFUL", "CODE-ESSENCE: CREATIVE CHAOS". Copy mixes code syntax (`<BODY {`, `<META CHARSET=...>`) with fashion claims.

Role notes. Only the intro stage and a thin slice of the page were measurable: the extraction recorded 264 characters of Nbarchitektstd and 120 of T 012. Content below the intro was not painted in the capture, so only the measured values are tokens. No button was found; `primary` is the peach `#ffebb0` used for the DISCOVER label.

## Colors

Measured on the desktop pass: backgrounds by area `#070707` (1131), `#ffdfc4` (1024), `#39322d` (4) and `#000000` (1). Text by characters: `#070707` (172), `#fef6f1` (106), `#ffdfc4` (91), `#ffebb0` (16).

- `canvas` `#070707` (`--black`, `--color`): the intro stage and the near-black of the page.
- `page-body` `#ffdfc4` (`--pastel-pink-main`): the peach page field below the intro. Display type on it is `#070707` (`ink-dark`).
- `ink` `#fef6f1` (`--pastel-pink-100`): text on black.
- `primary` `#ffebb0` (`--peach`): the DISCOVER label and accents.
- `surface-3` `#39322d` (`--brown`) and `dark-green` `#444241`, `light-black` `#141414`, `dark-coral` `#5c2c45`: dark neutrals declared in `:root`.
- `lemon` `#ffff82`, `yellow-soft` `#ffffcc`, `purple` `#cfb8ff`, `violet` `#e8a5f3`, `blue` `#c5c4ff`: the pastel accents declared in `:root`, matching the pink-to-violet gradient ring in the capture; per-element use was not measured.

Webflow template leftovers declared as `<deleted|variable-…>` (a `#2d62ff` blue, a `#dd23bb` pink, error and warning tints) and Swiper's `#007aff` are not part of the visible design.

## Typography

Five faces are loaded: `T 012` (400), `Nbarchitektstd` (400), `Fkrastergrotesktrial Rounded` (400), `Spacegrotesk` (300) and `Drukwide` (900). Measured characters: Nbarchitektstd 264, T 012 120, Spacegrotesk 1.

T 012 is the display face, uppercase and at extreme size: the H1 "FUTURE MODE OF DICH" is 253.293px on a 157.042px line (a line-height below 0.62), and the H2 stack of letters is 126.586px on 78.4831px. The mobile H1 is 80.9913px on 50.2146px. The H1 box measures 2421px wide at the 1280px viewport.

Nbarchitektstd is a technical, monospace-flavoured sans for everything else: body and labels 10.0928px/10.0928px, nav 9.2416px with 0.277248px letter-spacing; at 390px body measures 10.8556px/13.0268px and nav 12.8193px. Text is largely uppercase through the copy itself. Letter-spacing elsewhere is `normal`.

All faces are commercial or custom fonts served by the site (the stack falls back to Verdana and generic sans-serif); no substitute is documented.

## Layout

In the capture, hairline guides divide the intro into a central column and two side gutters, with horizontal lines framing the ring and small square corner marks where lines cross; their positions were not measured. The nav is a thin strip with items (OFF/ON toggle, a "dich" mark, MENU, coordinates "X . 0124 // Y . 1367"). Section stacks in the markup are numbered ("00. index", "01. Oraniths", "02. Anturax", ".001", ".002", ".003").

Measured paddings: 67.488px, 27.0222px, 12.1702px, 1px, 192px, 13.5111px, 26.9952px and 8px; the page measures 6665px tall at 1280px width. The `:root` declares section padding variables in em units: `--section-vertical-paddings--desktop` 4.44em, `--tablet` 8.33em, `--mobile-all` 12.8em, and horizontal paddings 5.55em (desktop), 7.55em (tablet), 3.4em (mobile landscape) and 5.6em (mobile portrait).

## Elevation & Depth

Flat. No box-shadow was measured. Depth is created with light: the gradient ring (a thin concentric-line texture), black-on-peach colour blocking, and hairline grids. The page is otherwise a flat two-colour field.

## Shapes

Round and rectilinear together. The only measured radius is `50%` (2 uses), the circular DISCOVER disc and its ring, recorded as `pill`. Everything else is square: hairline boxes, corner marks and text blocks have no radius.

## Components

Discover disc. A dark circle (`#070707`) inside the gradient ring with a peach `#ffebb0` "<<< DISCOVER >>>" label in Nbarchitektstd.

Terminal blocks. Left and right text blocks of four short lines in 10.0928px Nbarchitektstd, left-aligned at the left and right-aligned at the right, in `#fef6f1`.

Nav strip. Nbarchitektstd 9.2416px with 0.277248px tracking, item padding `12.1702px 0px 7.67053px`, 32px tall links (the "OFF" link measures 71px wide).

Display headline. T 012 uppercase at 253.293px in `#070707` on peach.

Form. "Inspire Our Next Collection" with fields Name, Email and World and a "SEND SIGNAL" action; styling was not measured.

## Design System Architecture

No public design system, brand guideline or GitHub repository was found; the opened page links none. It is a Webflow project: the HTML links `https://cdn.prod.website-files.com/675835c7f4ae1fa1a79b3733/css/dich-fashion.webflow.shared.dea704d43.min.css` and Swiper 11 (`https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css`). The `:root` mixes a named palette (`--peach`, `--lemon`, `--black`, `--light-black`, `--dark-coral`, `--dark-green`, `--pastel-pink-main`, `--pastel-pink-100`, `--purple`, `--brown`, `--violet`, `--blue`, `--yellow-soft`) with the Webflow starter's deleted variable groups (`--text-color--*`, `--background-color--*`, `--base-color-neutral--*`, `--global-horizontal-paddings--*`, `--section-vertical-paddings--*`). Source: https://dich-fashion.webflow.io/ as measured and opened.

## Do's and Don'ts

Do pair a near-black `#070707` stage with a flat peach `#ffdfc4` page and set headlines in huge uppercase T 012.

Do use Nbarchitektstd at about 10px for all labels, code-like captions and nav.

Do keep decoration to hairline grids, corner marks and the pastel gradient ring.

Do write microcopy in a terminal and sci-fi idiom.

Don't use shadows, filled buttons or rounded rectangles; none were measured.

Don't use the Webflow starter blues and pinks (`#2d62ff`, `#dd23bb`) as brand colours.

Don't set long reading text in Nbarchitektstd at 9 to 10px; the measured sizes are for labels.

Don't claim colours or sections that were not painted in the capture.

## Responsive Behavior

Measured at 390px: the H1 is 80.9913px on a 50.2146px line (253.293px on desktop), 363px wide and 151px tall; body text is 10.8556px on 13.0268px in `#ffdfc4`; the nav measures 12.8193px, 49px tall. Mobile sizes by characters: 10.8556px (113), 80.9913px (19), 12.8193px (11), 12.96px and 13px (8 each). Layout reflow was not measured.

## Iteration Guide

1. Two stages: `#070707` intro, `#ffdfc4` page; peach `#ffebb0` for the call to enter.
2. T 012 uppercase for headings at extreme sizes with sub-1 line-height; Nbarchitektstd 9 to 10px for everything else.
3. Add pastel accents (`#cfb8ff`, `#e8a5f3`, `#c5c4ff`, `#ffff82`) only in gradients and illustration.
4. Frame content with hairlines and corner marks; no shadows or radius except circles.
5. Re-measure after the entry stage is passed before documenting inner sections.
