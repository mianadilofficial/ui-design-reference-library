---
version: alpha
name: "Won J. You Studios"
category: "Culture & Events"
description: "Won J. You Studios: near-black design-mentorship portfolio (#0a0a0a body, #050505 rail) with coral #ef5143 uppercase avantt 800 headlines at 168.667px, cream #fee9ce navigation, orange #ffb261 connect tab, flat surfaces and zero shadows."
colors:
  canvas: "#050505"
  page-body: "#0a0a0a"
  ink: "#ef5143"
  primary: "#ef5143"
  ink-2: "#fee9ce"
  ink-3: "#4e4e4e"
  ink-4: "#ffb261"
  ink-5: "#ffffff"
  link: "#fff3e2"
typography:
  display:
    fontFamily: avantt, "avantt Fallback"
    fontSize: 168.667px
    fontWeight: 800
    lineHeight: 134.933px
    letterSpacing: "-6.74667px"
    textTransform: uppercase
  display-mobile:
    fontFamily: avantt, "avantt Fallback"
    fontSize: 61.6744px
    fontWeight: 800
    lineHeight: 49.3395px
    letterSpacing: "-2.46698px"
    textTransform: uppercase
  subheading:
    fontFamily: avantt, "avantt Fallback"
    fontSize: 173.333px
    fontWeight: 800
    lineHeight: 138.667px
    letterSpacing: "-6.93333px"
  body:
    fontFamily: avantt, "avantt Fallback"
    fontSize: 18.6667px
    fontWeight: 500
    lineHeight: 22.4px
    letterSpacing: "-0.186667px"
  nav:
    fontFamily: avantt, "avantt Fallback"
    fontSize: 10.6667px
    fontWeight: 700
    lineHeight: 12.8px
    letterSpacing: "-0.213333px"
  link:
    fontFamily: avantt, "avantt Fallback"
    fontSize: 6.66667px
    fontWeight: 500
rounded:
  pill: 9999px
spacing:
  s1: 0.67px
  s2: 0.8px
  s3: 2.67px
  s4: 4px
  s5: 5.33px
  s6: 6.67px
  s7: 8px
  s8: 10.67px
  s9: 13.33px
  s10: 16px
components:
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink-2}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink-3}"
---

# Won J. You Studios

## Overview

Won J. You Studios (https://wonjyou.studio/) is the personal studio site of designer and educator Won J. You, titled "Won J. You Studios | Design Coaching & Mentorship". The measured home page is a near-black, single-voice editorial page: a gigantic coral-red wordmark-style headline reads "EDUCATOR", then "COACH", "MENTOR" and "CONSULTANT", set in uppercase in the avantt typeface at 168.667px weight 800, over a dark monochrome portrait on the right edge. A short caption, "Design mentorship by Won J. You", sits beside the stacked words. The page is built as a numbered sequence (I. INTRO, II. MENTORSHIP, III. ABOUT, IV. BRAND EXPERIENCE and further roman-numeral entries) driven from a narrow vertical rail on the left, with a peach-orange "LET'S CONNECT" tab docked at the lower left. The total scroll height measured at 1280px width is 14636px, so the page is a long scrolling story rather than a short landing page.

The personality is confident, poster-like and tightly typeset: negative letter-spacing on every size, huge uppercase display lines, and a palette of only three warm hues on black. The capture shows almost no UI chrome beyond the rail, so the identity is carried by type scale and colour alone.

## Colors

The page runs on two near-blacks and a warm accent set. `canvas` is #050505, used by the navigation rail (the root variable `--bg-nav` is rgb(5,5,5)), and `page-body` is #0a0a0a, the body background that covers by far the largest area (11965 weight in the measured area ranking, versus 38 for #050505). The brand accent is coral red `primary` and `ink` #ef5143 (root variable `--coral-red`), which is also the most-read text colour (1884 characters) and sets the hero headline and body paragraphs. Secondary text is the warm cream `ink-2` #fee9ce (`--warm-sand` and `--c-activeNav`), used by the navigation, and `link` #fff3e2 (`--peach-cream`). Muted copy and the footer use the dark grey `ink-3` #4e4e4e (`--dark-grey`). The sunset orange `ink-4` #ffb261 (`--sunset-orange`) fills the "LET'S CONNECT" tab and appears as text in 123 characters. Pure white `ink-5` #ffffff appears in 63 characters.

Hairlines are drawn with low-alpha tokens published as root variables, `--black-008` and `--line-c-almost-black` at rgba(255,255,255,0.08), and `--border-social` at rgba(234,219,200,0.2); these are alpha values and not part of the hex palette above. The site has no measured box shadows and no measured border colours in its frequency tables.

## Typography

One family carries the entire site: avantt, loaded in three weights, 500, 700 and 800 (loadedFonts: "avantt 500 normal", "avantt 700 normal", "avantt 800 normal"), with a metric fallback named "avantt Fallback". The font is exposed as the root variable `--font-avantt`. Weight 500 covers 1847 characters, weight 700 covers 1027 and weight 800 covers 212, so body copy is medium, navigation is bold and the headlines are extra bold.

The `display` token is the hero line: 168.667px, weight 800, line-height 134.933px (a ratio of 0.8, matching the root variable `--font-line: 0.8`), letter-spacing -6.74667px, uppercase. The root variable `--font-factor: 0.06` is consistent with the measured tracking of -0.06em, and every measured size/letter-spacing pair shows that same tight tracking: 72px with -2.88px, 173.333px with -6.93333px, 250px with -10px, 18.6667px with -0.186667px and 16px with -0.16px. The `subheading` token is the 173.333px weight 800 line (the grey word "OVER", color #4e4e4e) at line-height 138.667px. `body` is 18.6667px, weight 500, line-height 22.4px, letter-spacing -0.186667px, in coral red. `nav` is 10.6667px, weight 700, line-height 12.8px, letter-spacing -0.213333px, and `link` is 6.66667px weight 500, which is the most frequent size on the page by character count (1496 characters). On a 390px mobile pass the hero token `display-mobile` measures 61.6744px at line-height 49.3395px and letter-spacing -2.46698px.

Font substitutes: avantt is a proprietary face. Where it is not available, use a geometric grotesque with a heavy 800 weight and keep the 0.8 line-height and -0.06em tracking; this substitution is a suggestion, not a measured site behaviour.

## Layout

Layout is defined by root variables. A 12-column grid is declared with `--layout-columns-count: 12`, a column gap and page margin of 1.0416666667vw (`--layout-columns-gap` and `--layout-margin`), and a fixed left header rail of `--header-width: 7.2rem`. The usable width is computed as `calc(100vw - (2 * var(--layout-margin) + var(--header-width)))`, and content is offset by `--paddingLeftWithHeader`. At the measured 1280px viewport the page is 14636px tall.

The spacing scale taken from measured paddings and gaps is small and fractional: 0.67px, 0.8px, 2.67px, 4px, 5.33px, 6.67px, 8px, 10.67px, 13.33px and 16px, plus larger section paddings measured at 21.3333px, 61.3333px, 108.148px, 200px and 240px. Gaps of 5.33333px (14 occurrences) and 6.66667px (8) dominate; wider gaps of 32px and 53.3333px appear twice each. The hero lines overlap vertically because line-height is 0.8, and the indented "COACH" line gives the stack a staggered rhythm against the left-aligned "EDUCATOR", "MENTOR" and "CONSULTANT".

## Elevation & Depth

The site is flat. No box shadows were measured (boxShadows is empty) and no border colours were measured. Depth comes from photography and tone: a monochrome portrait fades into the black on the right of the hero, and the coral headline sits directly on the dark field. Separation between rail items uses the 0.08-alpha white hairline variables listed under Colors. The motion easing is published as `--primary-ease: cubic-bezier(0.215,0.61,0.355,1)`; motion itself was not recorded in this extraction.

## Shapes

Rectilinear. The only non-zero computed radius in the extraction is a single 1280px value on one element (weight 1), which the token `rounded.pill` records as 9999px-equivalent; it is not a repeated component shape. Every other element computes 0px. The logo mark in the top-left of the capture is a small angular "W" glyph, and the rail is built from straight cells divided by hairlines.

## Components

The extractor found no primary CTA candidate (ctaCandidates is empty), so there is no `button` token. The measured components are:

- Navigation rail (`nav`): background #050505, text #fee9ce, 10.6667px bold uppercase labels in the form "I. INTRO", "II. MENTORSHIP", "III. ABOUT", "IV. BRAND EXPERIENCE". The labels are rotated to read vertically in the capture. On hover, an inactive item changes colour from rgb(78,78,78) to rgb(247,227,201) and its height grows from 55 to 89 in the measured hover pair for "II. MENTORSHIP".
- Link (`link`): colour #fff3e2, 6.66667px weight 500.
- Footer: text colour #4e4e4e.
- "LET'S CONNECT" tab: orange #ffb261 fill docked at the lower left of the rail; it is the only filled colour block visible above the fold, though the extractor did not classify it as a button.

## Design System Architecture

No public design system or brand guideline was found for this site; no link to one appears in the measured pages. The de-facto system is expressed in root CSS variables with descriptive colour names: `--coral-red`, `--peach-cream`, `--warm-sand`, `--sunset-orange`, `--almost-black`, `--dark-grey`, plus layout variables (`--layout-columns-count`, `--layout-columns-gap`, `--layout-margin`, `--header-width`) and a font variable `--font-avantt`. The source is the site itself at https://wonjyou.studio/ and the measurement file web/data/extracted/won-j-you-studios-2.json. Colour names are semantic-by-hue, not by role, so the repo's token keys (`ink-2`, `ink-4`) map back to those variable names as listed in Colors.

## Do's and Don'ts

- Do set headlines in uppercase avantt 800 with 0.8 line-height and -0.06em tracking.
- Do keep the page to near-black grounds (#0a0a0a, #050505) with coral #ef5143 as the dominant text colour.
- Do use cream #fee9ce / #fff3e2 for navigation and orange #ffb261 for the single connect tab.
- Do keep surfaces flat with hairline dividers at 0.08 white alpha.
- Don't add drop shadows, gradients on UI surfaces or rounded cards; none were measured.
- Don't introduce a second typeface; the entire measured page is avantt.
- Don't use pure white for body copy; white #ffffff covers only 63 characters.

## Responsive Behavior

A 390px mobile pass was recorded for type only. The hero `display-mobile` measures 61.6744px / 49.3395px / -2.46698px (uppercase, weight 800), the mobile body paragraph measures 16.3256px, and the mobile size ranking lists 9.06977px, 14.5116px, 16.3256px, 39.907px, 61.6744px and 72.5581px. The desktop-to-mobile type ratio is therefore about 0.37 for the hero. The layout variables use vw units for column gap and margin, which is documented in the root variables. Navigation behaviour, column changes, image crops and touch targets on mobile were not measured.

## Iteration Guide

1. Start from `canvas` #050505 and `page-body` #0a0a0a; place the hero headline in `primary` #ef5143 at the `display` token.
2. Keep line-height at 0.8 and tracking at -0.06em for any new display sizes; measured sizes include 72px, 173.333px and 250px.
3. Add secondary text in `ink-2` #fee9ce, muted text in `ink-3` #4e4e4e and a single orange accent #ffb261.
4. Use the 12-column grid with a 7.2rem left rail and 1.0416666667vw gutters.
5. Verify with `node web/scripts/verify-designs.mjs --slug=won-j-you-studios-2`; any new colour or size needs a measurement or a cited source first.
