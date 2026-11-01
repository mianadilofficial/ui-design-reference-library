---
version: alpha
name: "fromanother"
category: "Portfolio"
description: "fromanother (fromanother.love) is an artist-led creative studio site on deep navy #051236 with cream-yellow #fffde2 text, twkFont uppercase headlines at 73.3333px and -2.2px tracking, herbikFont italic captions, a glowing teal hero shape and one brand blue #1740a9 declared in the stylesheet."
colors:
  canvas: "#051236"
  ink: "#fffde2"
  primary: "#fffde2"
  sky-blue: "#d2e4f4"
  brand-blue: "#1740a9"
  ink-secondary: "#fffde299"
  ink-disabled: "#fffde24d"
typography:
  display:
    fontFamily: twkFont, "twkFont Fallback"
    fontSize: 73.3333px
    fontWeight: 600
    lineHeight: 66px
    letterSpacing: "-2.2px"
    textTransform: uppercase
  display-mobile:
    fontFamily: twkFont, "twkFont Fallback"
    fontSize: 41.6px
    fontWeight: 600
    lineHeight: 37.44px
    letterSpacing: "-1.248px"
    textTransform: uppercase
  heading:
    fontFamily: twkFont, "twkFont Fallback"
    fontSize: 58.6667px
    fontWeight: 700
    lineHeight: 58.6667px
    letterSpacing: "-1.76px"
  body:
    fontFamily: twkFont, "twkFont Fallback"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
    letterSpacing: "-0.24px"
  link:
    fontFamily: twkFont, "twkFont Fallback"
    fontSize: 9.33333px
    fontWeight: 550
    textTransform: uppercase
rounded:
  pill: 9999px
spacing:
  s1: 1.33px
  s2: 4px
  s3: 5.33px
  s4: 7.33px
  s5: 8px
  s6: 10.67px
  s7: 16px
  s8: 18.67px
  s9: 32px
  s10: 83.33px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
---

# fromanother

Measured from https://www.fromanother.love/ (page title "fromanother", lang en). The page is a long dark scroll (16837px) with a hero, an about statement, a numbered services index and further sections. A consent banner (`consent-banner-wrapper`) was detected and hidden by the extractor and is not documented as brand UI.

## Overview

The header shows a "Menu" control with a two-line icon at left, the lowercase wordmark "fromanother" centered in a light serif-like face, and "Let's chat →" at right. The hero headline is uppercase and loosely staggered: "WE ARE AN ARTIST — LED CREATIVE AGENCY STUDIO COLLECTIVE" in cream on the navy ground, set over a blurred teal-green loop shape that glows against the dark. Small italic notes sit beside it: language links "VN | CN | FR" and "Since 2020".

The second screen states "We craft work that defines the now and shapes what is next." with the supporting line "Driven by curiosity, not formula. We explore where creativity and technology collide — across brand, film, immersive spaces, and whatever medium the work demands next." in dimmed cream. A services index follows with numbered italic labels (01 Direction, 02 Digital, 03 Offline) at the left and a column of large service names (Art Direction, Design Concept, Commercials & CGI, Brand Identity) at the right.

The opened page lists these sections: About, What We Do, Featured work, Our team, They trust us, Awards and We are on. Navigation items: Home, Work, Lab, Jobs and "Let's chat". Calls to action: "Start a brief", "Contact us", "Let's chat" and "View all projects". The voice is declarative and artistic, framed as an artist-led collective rather than a vendor.

## Colors

The root variables name the palette: `--brand-dark-blue` #051236, `--brand-yellow` #fffde2, `--brand-blue` #1740a9, `--text-secondary` rgba(255,253,226,0.6) and `--text-disabled` rgba(255,253,226,0.3). Measured background areas: #051236 (weight 2048), #000000cc (1024, an overlay layer) and #d2e4f4 (1024, a pale sky-blue field). Text colors by characters: #fffde2 (598), #fffde299 (326) and #fffde24d (18).

- **canvas #051236**: the page background.
- **ink and primary #fffde2**: all text and the only action color (no filled button was detected).
- **ink-secondary #fffde299** (60% cream) for body copy; **ink-disabled #fffde24d** (30%) for inactive index items such as the dimmed "02 Digital" and "03 Offline".
- **sky-blue #d2e4f4**: a measured pale blue area on the page.
- **brand-blue #1740a9**: declared in the root as `--brand-blue`; it is not a measured area on the first screens, so it is kept as a declared brand color only.

The #000000cc area is the extractor's overlay layer and is not tokenized.

## Typography

Fonts loaded: twkFont (400, 600), and herbikFont (italic 400 and 500); the root also declares `--font-ivory` ("ivoryFont"), not loaded on the measured page. twkFont carries 804 characters and herbikFont 138. These are custom or commercial typefaces; the generic stand-ins are a neutral grotesque for twkFont and an italic serif for herbikFont.

- **display**: twkFont 73.3333px, weight 600, line-height 66px, letter-spacing -2.2px (-3%), uppercase: the hero h1.
- **display-mobile**: twkFont 41.6px, weight 600, line-height 37.44px, letter-spacing -1.248px, uppercase.
- **heading**: twkFont 58.6667px, weight 700, line-height 58.6667px, letter-spacing -1.76px (-3%): "We craft work that defines the now and shapes what is next."
- **body**: twkFont 12px, weight 400, line-height 16.8px, letter-spacing -0.24px (-2%).
- **link**: twkFont 9.33333px, weight 550, uppercase: "VIEW ALL PROJECTS".

Other measured sizes: 12px (436 characters), 58.6667px (117), 21.3333px (76), 9.33333px (72), 8px (67), 10.6667px (64), 73.3333px (47), 80px (26), 14.6667px (26) and 160px (11). The herbikFont italic is used at 10.6667px for the language switch (weight 500). Weights: 400 (565), 600 (153), 500 (108), 700 (82), 550. The type is a sharp contrast between giant tight-tracked headlines and micro-size labels.

## Layout

The root declares a 6-column grid with `--columns: 6`, `--gap-x` 1.6rem and `--padding-x` 1.6rem. Measured gaps: 16px (33 uses), 10.6667px (8), 5.33333px and 18.6667px (6 each), 8px (4); paddings: 32px (7), 16px (4), 8px (2). Sections are very tall with large empty navy bands between them; the headline text is centered in the about statement and left-aligned in the services list, which is split into a narrow index column and a wide name column. The spacing tokens are 1.33px, 4px, 5.33px, 7.33px, 8px, 10.67px, 16px, 18.67px, 32px and 83.33px.

## Elevation & Depth

No box shadows were measured. Depth is supplied by the glowing blurred hero shape and by the dark overlay layer (#000000cc); text sits directly on those fields. Opacity steps of the cream text (100%, 60% and 30%) provide the hierarchy in place of weight or color changes.

## Shapes

Only one radius was measured, 50% on three elements (small round markers such as the scroll indicator dot). Everything else is square. The hero shape is an image or canvas effect, not a CSS shape. The token set carries `pill: 9999px` for the round markers.

## Components

- **link**: twkFont 9.33333px, weight 550, uppercase, cream #fffde2 text, no fill or border: "VIEW ALL PROJECTS" (93px wide, 11px high).
- **nav (language switch)**: "VN | CN | FR" in herbikFont italic 10.6667px, weight 500, cream.
- **menu control**: an icon with the label "Menu", and a "Let's chat →" link at the right.
- **index list**: numbered italic labels with names; inactive names are dimmed to 30% cream and the active entry is full cream. The hover record shows pager buttons ("1") changing opacity from 0.32 to 1.

No button fill, card, input or footer role was detected.

## Design System Architecture

No public design system or brand guideline is linked on the opened page. The shipped CSS shows a custom-property system: brand colors `--brand-dark-blue`, `--brand-blue`, `--brand-yellow`; text tokens `--text-secondary` and `--text-disabled`; font tokens `--font-twk`, `--font-herbik`, `--font-ivory`; layout tokens `--columns`, `--gap-x`, `--padding-x`; easing tokens `--easeOutQuart` cubic-bezier(0.165,0.84,0.44,1), `--easeInOutQuart` cubic-bezier(0.76,0,0.24,1) and `--easeInOutCubic` cubic-bezier(0.65,0,0.35,1); and breakpoint tokens with a `--ck-` prefix. Source page: https://www.fromanother.love/.

## Do's and Don'ts

- Do keep the ground navy #051236 and all text cream #fffde2, using 60% and 30% cream for secondary and disabled text.
- Do set display type in twkFont 600 uppercase with -3% tracking and line-height under 1.0.
- Do use herbikFont italic only for tiny notes and indexes.
- Do leave large empty navy bands between statements.
- Don't add button fills, borders or shadows; none are measured.
- Don't introduce new accent colors: the brand blue #1740a9 is declared, not measured in use.
- Don't document the consent banner as a component.

## Responsive Behavior

The root declares breakpoint custom properties: `--ck-breakpoints-sm` 768px, `--ck-breakpoints-md` 1024px, `--ck-breakpoints-lg` 1200px, `--ck-breakpoints-xl` 1920px and `--ck-breakpoints-2xl` 2400px (the same values appear as `--ck-sizes-breakpoint-*`). The mobile pass recorded: h1 41.6px with line-height 37.44px and -1.248px tracking; h2 33.28px with line-height 33.28px and -0.9984px tracking; body 14.56px with line-height 20.384px and -0.2912px tracking; nav 10.4px. Mobile size frequencies: 14.56px (511 characters), 12.48px (153), 33.28px (135), 16.64px (76), 18.72px (76), 10.4px (50), 41.6px (47), 49.92px (25), 13.52px (20). Column behavior at each breakpoint was not measured.

## Iteration Guide

1. Canvas #051236; text #fffde2 with 60% and 30% steps.
2. Display text in twkFont 600 uppercase at 73.3333px/66px, -2.2px tracking; statements at 58.6667px/700.
3. Micro labels at 9.33333px uppercase with weight 550; italic herbikFont for notes.
4. Lay out on six columns with 1.6rem gutters.
5. Use one glowing generative image as the hero object; keep every corner square.
6. Measure new pages before adding tokens.
