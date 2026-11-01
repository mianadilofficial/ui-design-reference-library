---
version: alpha
name: dhk Architects
category: "Architecture & Interiors"
description: "dhk architects' home page (dhk.co.za): an all-black, white-type studio site in Helveticanowdisplay at weights 400 to 700, with 60.544px section headings, 16px/22.4px body, bracketed text buttons, a dark/light switch, square-edged architectural photography and no shadows, borders or filled buttons."
colors:
  canvas: "#000000"
  page-body: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-dark: "#232323"
  ink-muted: "#636363"
  ink-warm: "#efeeec"
typography:
  display:
    fontFamily: Helveticanowdisplay, Arial, sans-serif
    fontSize: 84px
    fontWeight: 700
    lineHeight: 100.8px
  display-mobile:
    fontFamily: Helveticanowdisplay, Arial, sans-serif
    fontSize: 54px
    fontWeight: 700
    lineHeight: 64.8px
  heading:
    fontFamily: Helveticanowdisplay, Arial, sans-serif
    fontSize: 60.544px
    fontWeight: 700
    lineHeight: 72.6528px
  statement:
    fontFamily: Helveticanowdisplay, Arial, sans-serif
    fontSize: 60.544px
    fontWeight: 500
    lineHeight: 66.5984px
  heading-mobile:
    fontFamily: Helveticanowdisplay, Arial, sans-serif
    fontSize: 41.498px
    fontWeight: 700
    lineHeight: 49.7976px
  statement-mobile:
    fontFamily: Helveticanowdisplay, Arial, sans-serif
    fontSize: 30.623px
    fontWeight: 500
    lineHeight: 33.6853px
  label:
    fontFamily: Helveticanowdisplay, Arial, sans-serif
    fontSize: 38px
    fontWeight: 700
    lineHeight: 38px
  body:
    fontFamily: Helveticanowdisplay, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  body-medium:
    fontFamily: Helveticanowdisplay, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
  nav:
    fontFamily: Helveticanowdisplay, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.4px
rounded:
  none: 0px
  small: 8px
  main: 16px
spacing:
  s1: 2px
  s2: 3.01px
  s3: 4.8px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-button:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
---

## Overview

This file documents the home page of dhk architects, https://www.dhk.co.za/ (page title "dhk"), a South African architecture, urban design and interior design studio with offices in Cape Town and Johannesburg. The page is black from edge to edge. A bold lowercase "dhk" wordmark sits in a black tile beside two photographs; below it a lowercase nav (home, projects, studio, journal, careers with a small arrow, a "dark / light" switch and "menu") runs across the top of a long scroll of statements, photographs and lists.

The tone is quiet and typographic. The first message is "we stay curious, always. collaborate. nurture talent. design for the future." in 60.544px type, followed by a small paragraph beginning "We're architects, urban designers and interior designers. We deliver buildings, public spaces and interiors that are contextually sensitive, environmentally responsible and technically resilient." Then a full-bleed aerial photograph of the V&A Waterfront area, "our story" copy beside an office photo, "featured projects" (Nobu at One&Only Cape Town, Longkloof Precinct + Public Realm, ONE&HUNDRED&Dunkeld, The Madison, Olympus Sandton) with years, an "awards" list, a "journal" grid, and a footer that links the "10° Collective" practices (dhk, FIA, Omrania, U+A, WW+P, 10 Design).

Everything is lowercase. Photography is large, uncropped-feeling and desaturated by the black page, so the buildings carry the colour. Interactions are bracketed text: "[ our story ]", "[ view all projects ]", "[ load more ]", "[ contact us ]".

Role notes. The extractor's h1 and body roles pointed at the "welcome to dhk" preloader text (38px) and a counter that precedes the page, so they are recorded as overrides and the real headings were probed. A cookie banner ("This website uses cookies. manage / accept", white bar) and a cookie preferences dialog are present; they are not documented as brand UI. The extractor found no filled button, so `primary` is the white used for all interactive text.

## Colors

Measured on the desktop pass at https://www.dhk.co.za/. Backgrounds by area: `#000000` (5456), `#ffffff` (1033, the cookie banner), `#00000099` (a 1024 overlay region) and `#232323` (413). Text by characters: `#ffffff` (3017), `#000000` (36, inside the white cookie banner and journal tags), `#636363` (6). The mobile body text role measures `#efeeec`.

- `canvas` / `page-body` `#000000`: the page.
- `ink` / `primary` `#ffffff`: all type and the wordmark.
- `on-primary` `#000000`: type on white surfaces such as the journal category tags.
- `surface-dark` `#232323`: a dark grey panel region (413 area).
- `ink-muted` `#636363`: dimmed labels (for example the inactive "light" in the dark/light switch in the capture).
- `ink-warm` `#efeeec`: mobile body text.

The Webflow variables `--theme--background`, `--theme--text`, `--theme--border` and related are all declared as `white` in `:root`; the "dark / light" switch changes the theme, but the light theme was not measured.

## Typography

One family: Helveticanowdisplay, with Arial as fallback. Loaded weights: 500 and 700; the CSS also references 400 and 600 through `--font--primary-regular` (400), `--font--primary-medium` (500), `--font--primary-medium-large` (600) and `--font--primary-bold` (700). All 3150 measured characters are this face. Weights by characters: 500 (1764), 400 (898), 700 (397).

Probed roles (SOURCES.json): the menu overlay items ("home,", "projects,", "journal,") are 84px/700 on a 100.8px line (54px/64.8px at 390px); section headings ("featured projects", "awards") are 60.544px/700 on 72.6528px (41.498px/49.7976px at 390px); the statement "we stay curious, always." is 60.544px/500 on 66.5984px (30.623px/33.6853px at 390px); body copy is 16px on a 22.4px line at weight 400 ("We're architects…") or 500 ("dhk architects was established…"); nav, buttons, project captions and footer text are 16px/700 on 22.4px. The hero label "welcome to dhk" is 16px/500 on 19.2px; the extractor measured a 38px/700 version of the same words in the loader.

Letter-spacing is `normal` on every probed element, and the `:root` declares `--letter-spacing--0-03em` (-.03em) among others. Text is lowercase in the source. Helveticanowdisplay is a commercial face served by the site; the stack falls back to Arial.

## Layout

The `:root` declares grid variables (`--site--column-count`, `--site--gutter`, `--site--margin`, `--container--main`); their resolved values were not measured. In the capture: the top tile row is a black wordmark tile plus two square photo tiles; the nav is a single row with items grouped left (home), centre (projects, studio, journal, careers), and right (dark/light, menu); body copy sits in a narrow column indented to about the middle of the page next to a left-aligned small label ("services", "our story"); project images form a staggered grid with year labels at the lower right of each tile; the awards list is a quiet two-column table of year, project and award; the footer is a grid of link columns beside the 10° Collective block.

Paddings measured: 10px (20 uses), 20px (11), 16px (6), 2px (5), 6px (5), 20.8px (4). Spacing variables include `--space--1` (.25rem), `--space--2` (0.5rem) and `--section-space--large` (`clamp(5.5rem, 4.214rem + 6.43vw, 10rem)`). The page measures 8192px tall at 1280px width.

## Elevation & Depth

None measured. The box-shadow frequency table is empty and no borders were measured. Depth is photographic: full-bleed images against black, and an overlay (`#00000099`) region used for the menu or scrim states. The white cookie bar is the only light surface on the first screen and is not part of the system.

## Shapes

No border radius was measured on any element (the radius frequency table is empty) and photography is rectangular. The shipped Webflow variables declare `--radius--small` .5rem (8px), `--radius--main` 1rem (16px) and `--radius--round` 100vw; no measured element uses them, so they are recorded only as declared values. Interactive elements are text in square brackets without a box.

## Components

Navigation. A single lowercase row in 16px/700 white; "careers" carries a small diagonal arrow; the right group holds "dark / light" (the inactive state in `#636363` in the capture) and "menu". Opening the menu shows list items in 84px/700.

Text button. A bracketed label ("[ our story ]", "[ view all projects ]", "[ load more ]", "[ contact us ]") in 16px/700 white, no fill, no border, no radius.

Project tile. Photograph with a 16px/700 caption at the lower left and the year at the lower right.

Awards row. Year, project and award columns in 16px/500 white.

Journal tile. Image with a small white tag (black 16px/500 text) naming the category (projects, events, studio, insights) and a 16px caption.

Newsletter and forms. A newsletter link and a contact form exist in the markup; their styling was not measured.

## Design System Architecture

No public design system or brand guideline was found. The opened home page (as text and rendered) links projects, studio, journal, careers, Instagram, LinkedIn, Facebook, Pinterest and Vimeo, and the 10° Collective group, but no design-system, brand or GitHub page. The site is built in Webflow (font-face list `webflow-icons`, `Helveticanowdisplay`) using a Client-First-style variable system: `--all-headings--heading-font-family`, `--h1--font-size` (`--size--7-75rem`), `--text-main--font-size` (`--size--1rem`), `--text-large--font-size` (`--size--1-13rem`), `--font--primary-family`, `--theme--*`, `--radius--*`, `--space--*`, `--size--*` fluid `clamp()` sizes, and utility classes such as `u-text-style-h2`, `u-text-style-h4`, `u-text-style-main` and `u-text-style-small`. Source: https://www.dhk.co.za/ as measured.

## Do's and Don'ts

Do keep the page black with white type; use opacity-free white and `#636363` for dimmed states.

Do set headings in Helveticanowdisplay 700 at 60.544px with 72.6528px lines, and statements at weight 500 with tighter 66.5984px lines.

Do write labels in lowercase and make actions bracketed text.

Do let large photographs carry colour and keep captions at 16px/700.

Don't add shadows, borders, radius or filled buttons; none were measured.

Don't document the cookie bar, cookie dialog or loader counter as brand UI.

Don't use more than the 400, 500 and 700 weights seen in the probes.

Don't use uppercase.

## Responsive Behavior

Measured at the 390px pass and by probes at that width: menu items are 54px/700 on a 64.8px line (84px on desktop); section headings are 41.498px/700 on 49.7976px (60.544px on desktop); statements are 30.623px/500 on 33.6853px; body text role is 16px/700 on 22.4px in `#efeeec`; journal tags stay 16px/500. Mobile sizes by characters: 16px (1927), 30.623px (72), 41.498px (30), 38px (14). Grid and nav reflow were not measured.

## Iteration Guide

1. Black canvas, white type, one grey (`#636363`) for dimmed states.
2. One face in four sizes: 84px menu, 60.544px headings, 16px body and nav, plus 38px loader label.
3. Lowercase everything; actions are bracketed text with no box.
4. Put photographs full-bleed or in a staggered grid with a 16px/700 caption and year.
5. No shadows, no borders, no radius. Re-measure before adding any.
