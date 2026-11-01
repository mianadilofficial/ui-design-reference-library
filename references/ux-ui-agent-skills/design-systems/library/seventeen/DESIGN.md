---
version: alpha
name: Seventeen
category: "Culture & Events"
description: "Seventeen creative agency site: Webflow build in Bagosscondensed 400 with a 49.2727px headline on /about, slate #afaea7 and black #000000 bands on a white #ffffff canvas, white-highlight headline blocks, no shadows and no measured corner radius."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#afaea7"
  surface-black: "#000000"
  accent-red: "#c13437"
  swatch-light: "#ebebeb"
  swatch-dark: "#1f1d1e"
  brand-lime: "#c6fb50"
typography:
  display:
    fontFamily: Bagosscondensed, Arial, sans-serif
    fontSize: 17.697px
    fontWeight: 400
    lineHeight: 21.2364px
  display-mobile:
    fontFamily: Bagosscondensed, Arial, sans-serif
    fontSize: 16.0114px
    fontWeight: 400
    lineHeight: 19.2136px
  display-large:
    fontFamily: Bagosscondensed, Arial, sans-serif
    fontSize: 49.2727px
    fontWeight: 400
    lineHeight: 54.2px
  display-large-mobile:
    fontFamily: Bagosscondensed, Arial, sans-serif
    fontSize: 34.1023px
    fontWeight: 400
  link:
    fontFamily: Bagosscondensed, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 2.5px
  s4: 4.8px
  s5: 5px
  s6: 10px
  s7: 11.7px
  s8: 18.55px
components:
  link:
    backgroundColor: "{colors.accent-red}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
---

# Seventeen

## Overview
Seventeen (seventeenagency.com; page title "A Creative Agency.") is a creative agency whose site is a Webflow build with very little chrome. Two pages were measured: the home page and /about (extracted as an extra page). On the home page the measurement caught an intro state of flat grey (#afaea7) geometric shapes, a large circle at upper left and a rounded parallelogram near the bottom, on a white field; the home page source lists a small header with a logo plus About and Contact links, and a grid of case-study links (Tissot NBA, Michael Kors, Facetheory, OPN Festival, Viasat Kino, Elemis, Coca-Cola Dreamworld, Coca-Cola Ultimate, Hiroshige Outernet, Frontify, BBC Nordic). The home measurement itself is only 800px tall and its only measured text is placeholder copy ("This is some text inside of a div block."), so this document draws type and color roles from the home root variables and from the /about page, which is 6332px tall. /about opens on a slate-grey (#afaea7) field with a centered stack of words, "A collective of Odd Minds bringing new angles underpinned with meaning", each line set in black on a white highlight block, surrounded by black line-art icons (a noodle bowl, a cassette player, a waveform, a curtain). It then moves to a full black section with a ring of grey pictograms, a list of first names (Alex, Amelia, Aung, Chris, Christine, David, Ella, Elsa, Gabor, George, Gosia, Jade, Joe, Longbin, Mario, Nehanda, Reiss, Serhat), the line "Odd minds think unalike", a highlighted "A Creative Agency", and a footer with LinkedIn, Seventeen and Instagram links.

Voice and art direction: the agency describes itself through its people and its attitude rather than through service lists. Phrases such as "Odd minds think unalike" and "bringing new angles underpinned with meaning" set a playful but compact tone, and the icons (small, hand-drawn black object illustrations that also appear grey in a circular arrangement) supply the personality in place of photography. Density is very low: each viewport carries one statement or one cluster of objects, and large areas of flat color are left empty. The restrained palette makes any new color element conspicuous, which is why the lime swatch, if used, should be treated as a rare accent.

## Colors
- Canvas: #ffffff on the home page; the largest background on /about is #000000 (11265 weighted), then slate #afaea7 (2788).
- Primary: #afaea7, named `--swatch--slate` in the site's variables and used as the text-link color (`--_theme---text-link--text`). It is the second-largest background area on both pages.
- Ink: #000000 on light; #ffffff on black (469 characters on /about) with slate #afaea7 for footer links.
- Declared swatches: `--swatch--light-200: #ebebeb`, `--swatch--dark-900: #1f1d1e` (theme text), `--swatch--brand-500: #c6fb50` (a lime brand swatch). The lime was not observed in the measured text or large backgrounds, so it is recorded only as a declared value.
- Small colored areas in the home measurement (#c13437, #275d82, #049435, #a6f664, #936900, #00a4a8, each weight 13) belong to illustration elements, not to UI chrome; the red is retained as accent-red for completeness.

## Typography
One family: Bagosscondensed (400), with `Arial, sans-serif` as fallback; it is a condensed grotesque loaded as a webfont, and no substitute is named by the site.
- Home display: 17.697px / 21.2364px, weight 400 (mobile pass: 16.0114px / 19.2136px).
- Large display (/about h1 and headline stack): 49.2727px / 54.2px, weight 400, normal tracking (mobile pass: 34.1023px).
- Link and small text: 14px / 16.8px, weight 400 (574 to 586 characters on home, 504 on /about).
- Mid text: 20px (98 characters on /about).
The root defines a fluid scale between a 24 and a 90 viewport unit range: h1 from 2.125rem to 3.25rem, h2 from 2.5rem to 4rem, h3 from 2.25rem to 3rem, h5 from 1.375rem to 1.5rem, main text 0.875rem and large text from 1.25rem to 1.375rem.

## Layout
The site uses a 17-column grid (`--site--column-count: 17`) with fluid margins and a breakout grid (`full-start`, `content-start`, `content-end`, `full-end`). Maximum widths include `--max-width--small: 50rem`. On /about, content is a single centered column: headline stack, icon ring, name list, closing statements, each in its own tall full-width band that alternates slate and black. Spacing values: 1px, 2px, 2.5px, 4.8px, 5px, 10px, 11.7px and 18.55px; the root exposes fluid `--_spacing---space--1` through `--space--8` and section-space variables (`main`, `small`) as clamp() ranges.

## Elevation & Depth
The only layering device is the white highlight block behind headline words, which lifts black text off the slate field without any shadow. In the black section, grey pictograms are dimmed relative to the white text, creating a foreground and background without a depth effect in CSS.
No box shadows were recorded on either page. Depth is conveyed by color planes and by white highlight blocks behind headline words; the icons float over the planes without shadows.

## Shapes
No border radius was measured: the radius frequencies are empty and every measured element computes 0px. The preloader shapes on the home page are rounded geometric forms (a circle and a rounded parallelogram), which are graphic artwork and not component radii. The root declares `--radius--main: 1rem` and a `--dot-size: 20px`, but neither was tied to a measured element.

## Components
- **Header**: logo at upper left, "Menu" control at upper right on /about (white label on a small dark chip), About and Contact links in the source.
- **Headline block**: each line of the About headline is black text on a white rectangular background, with square corners.
- **Work item link**: a project tile link per case study on the home page.
- **Name list**: centered stack of first names in slate on black.
- **Footer**: three items (LinkedIn, Seventeen, Instagram) in 14px slate (#afaea7) text.
- **Link token**: black 14px text with an accent-red background as the generator measured; this reflects a small illustration element, so treat it with caution.

## Design System Architecture
No public design system or brand guideline was found; the sources read were the site's own home and /about pages. The page is built in Webflow with a Client-First style variable system: `--_typography---font--primary-family`, `--_text-style---font-size`, `--_theme---background`, `--_theme---text`, `--_theme---button-primary--*`, `--_theme---button-secondary--*`, `--swatch--*` colors (including `--swatch--slate`, `--swatch--light-200`, `--swatch--dark-900`, `--swatch--brand-500`), `--animation-ease: cubic-bezier(0.65, 0.06, 0.33, 0.89)` and `--transition-smooth: all 200ms cubic-bezier(0.32, 0.72, 0, 1)`. Swiper's `--swiper-theme-color: #007aff` is a library default and not a brand color.

## Do's and Don'ts
- Do keep a restrained palette: white, black, slate #afaea7.
- Do set text in Bagosscondensed at 400 with normal tracking.
- Do use white highlight blocks behind key headline words.
- Don't add shadows or rounded component corners; none were measured.
- Don't use #007aff.
- Don't treat the preloader shapes as UI components.

## Responsive Behavior
Scope: one desktop pass at 1280px and one mobile pass at 390px were measured on each page.
The mobile pass recorded the home first text at 16.0114px / 19.2136px and the /about h1 at 34.1023px. The root's fluid clamp() ranges show the intent to scale between a 24 and 90 viewport unit range, but layout reflow at specific breakpoints was not measured.

## Iteration Guide
1. Tokens: canvas #ffffff, ink #000000, primary #afaea7, black band #000000.
2. Type: Bagosscondensed 400; 49.2727px headline stack, 14px for links.
3. Build alternating slate and black bands with centered columns.
4. Use white highlight blocks behind headline words and line-art icons around them.
5. Run `node web/scripts/verify-designs.mjs --slug=seventeen`.
Not measured: hover states, project pages, menu overlay, motion of the intro shapes.
