---
version: alpha
name: "Robot"
category: "Portfolio"
description: "Robot (therobot.tv) production company site: #e3e4d8 warm grey canvas, #000000 and white sections, #fe0000 red accent for bracketed links and a generative grid, OTMedium squeezed condensed typefaces up to 466.64px, 13px uppercase tracked labels, and every element with a 0px radius."
colors:
  canvas: "#e3e4d8"
  page-body: "#ffffff"
  ink: "#000000"
  primary: "#fe0000"
  ink-3: "#bbbbbb"
  ink-5: "#121212"
typography:
  display:
    fontFamily: OTMediumSemiSqueezed, Arial, sans-serif
    fontSize: 13px
    fontWeight: 500
    lineHeight: 11.44px
    letterSpacing: 2.47px
    textTransform: uppercase
  display-mobile:
    fontFamily: OTMediumSemiSqueezed, Arial, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
    letterSpacing: 2.28px
    textTransform: uppercase
  heading:
    fontFamily: OTMediumExtraSqueezed, Arial, sans-serif
    fontSize: 101.36px
    fontWeight: 500
    lineHeight: 77.0336px
    textTransform: uppercase
  subheading:
    fontFamily: OTMediumExtraSqueezed, Arial, sans-serif
    fontSize: 466.64px
    fontWeight: 500
    lineHeight: 349.98px
    textTransform: uppercase
  body:
    fontFamily: OTMediumSemiSqueezed, Arial, sans-serif
    fontSize: 22.64px
    fontWeight: 500
    lineHeight: 21.508px
rounded:
  none: 0px
spacing:
  s1: 8px
  s2: 13px
  s3: 19.36px
  s4: 38.64px
  s5: 94.64px
  s6: 118.64px
components:
  utility-label:
    textColor: "{colors.page-body}"
    typography: "{typography.display}"
---

## Overview

Robot (title "Robot", therobot.tv) is a film and commercial production company, and its home page is a showreel-first experience. The capture shows a full-bleed warm-toned fabric-and-straw backdrop with a small video window in the middle (a person in a denim jacket and cowboy hat seated at an upright piano in a field), a chrome-blue logotype "ROBOT" centred at the top, a live clock label "11:03 (GMT+2)" at the top left, "MENU" at the top right and "SCROLL" at the bottom. Below the hero the page changes to a flat warm grey field with a very large empty area, then a generative grid of red rectangles and hairlines, and at the left a statement: "WE DISRUPT. WE INSPIRE. WE CREATE. THIS IS ROBOT." with a red bracketed link "[ OUR DIRECTORS ]".

Other measured copy includes the section statement "WE'RE HERE FOR THE EXPERIENCE. POWERED B..." in 101.36px condensed uppercase and the body line "Trusted by top production companies and ...". The voice is declarative, uppercase and terse, in short triplets. Web research was unavailable (see SOURCES.json), so everything here comes from the extraction and capture.

## Colors

- canvas #e3e4d8 is the warm grey-green field of the content sections (5778 area weight). page-body #ffffff (3517) is the white section background.
- ink #000000 is the main text colour (972 characters) and the largest background by area (12,333), used for dark sections; #222222 (3350) and #333333 (1024) are dark grey section fills.
- primary #fe0000 is the signal red: red text for the bracketed link (38 characters) and the generated grid in the capture. ink-3 #bbbbbb is a light grey text (45 characters) and ink-5 #121212 (5 characters) a near-black.
- White text (251 characters) is used over video and dark sections.

No other chromatic accent was measured; the blue tint of the logotype and clock label comes from the media layer and was not recorded as a text colour.

## Typography

Three condensed, tightly spaced families from the same type system: OTMediumSemiSqueezed (1124 characters, weight 500), OTMediumExtraSqueezed (166 characters, weight 500) and OTBoldSemiSqueezed (21 characters, weight 700), each with an Arial, sans-serif fallback.

- display (labels): OTMediumSemiSqueezed 13px, weight 500, line-height 11.44px, letter-spacing 2.47px, uppercase (mobile 12px, line-height 12px, tracking 2.28px). This is the clock and menu label style.
- heading: OTMediumExtraSqueezed 101.36px, weight 500, line-height 77.0336px, uppercase.
- subheading (hero scale): OTMediumExtraSqueezed 466.64px, line-height 349.98px, uppercase, measured on 5 characters.
- body: OTMediumSemiSqueezed 22.64px, weight 500, line-height 21.508px.

Sizes by characters: 22.64px (537), 13px (440), 25.36px (168), 101.36px (161), 466.64px (5). Line-heights are below the font size (about 0.76 to 0.95), so lines are set solid and tight. These are custom faces; Arial is the only declared fallback, and a condensed grotesque is the nearest substitute.

## Layout

The page is 1280px wide and 11,307px tall, with long scroll distances and large empty fields between statements. A fixed row of three elements frames the top: clock at left, logo at centre, menu at right. The video window sits centred over the backdrop. Content blocks are anchored to the left edge while the generative grid occupies the centre column. Spacing tokens: 8px, 13px, 19.36px, 38.64px, 94.64px, 118.64px; the larger values reflect big vertical gaps.

## Elevation & Depth

No box shadows were measured. Depth is by layering: the video window floats over a full-bleed textured backdrop, and sections switch between black, #222222, #333333, #e3e4d8 and white as flat fields. The red grid uses lighter pink tints in the capture; those tints are part of the graphic, not tokens.

## Shapes

The extraction recorded no border radius: every rendered element computes 0px, so the video window, grid cells and fields are rectangular. The token rounded.none is 0px.

## Components

No buttons, inputs or cards were detected by the extraction. The only declared component is utility-label, the measured h1-role element (the clock text, white 13px uppercase OTMediumSemiSqueezed with 2.47px tracking) used for the clock and menu labels. Observed elements in the capture:
- Top bar: clock label, logotype, "MENU" word link, all in 13px uppercase tracked type.
- Video window: a centred rectangle over the backdrop.
- Statement block: left-aligned uppercase triplet and "THIS IS ROBOT.".
- Bracketed text link: "[ OUR DIRECTORS ]" in red, small tracked uppercase.
- Generative grid: red rectangles and hairlines on the warm grey field.
- "SCROLL" cue at the bottom of the hero.

## Design System Architecture

No public design system or brand guideline was opened. The stylesheet exposes a Webflow-style variable system: --display--font-family referencing --all-headings--heading-font-family, size tokens (--size--10rem as clamp(9.5rem, 9.251rem + 0.83vw, 10.498rem), --size--2rem as clamp(1.875rem, 1.812rem + 0.21vw, 2.126rem), --size--1-25rem, --size--0-25rem), space tokens (--space--2 referencing --size--0-5rem), --letter-spacing--normal, --h4--line-height and --h4--font-weight and font references such as --font--primary-regular. Sizes therefore use fluid clamp() values tied to viewport width.

## Do's and Don'ts

Do:
- Set statements in OTMediumExtraSqueezed uppercase with solid line-height.
- Use small uppercase labels with 2.47px tracking for utility text.
- Keep every shape rectangular (0px radius).
- Use red #fe0000 sparingly for links and generative graphics.

Don't:
- Do not round corners or add shadows; none were measured.
- Do not use lowercase for headings.
- Do not add more accent colours; none were measured.
- Do not invent buttons; none were detected.

## Responsive Behavior

On the 390px mobile pass the label size is 12px (desktop 13px) with tracking 2.28px. The mobile size distribution is 16px (537 characters), 12px (442), 56px (161), 22px (114), 13px (30) and 204px (5), so the 101.36px heading becomes 56px and the 466.64px display becomes 204px. Layout changes and menu behaviour were not measured.

## Iteration Guide

1. Alternate {colors.canvas}, {colors.page-body} and black fields; text is {colors.ink} on light and white on dark.
2. Use {typography.heading} for statements and {typography.display} for utility labels.
3. Use {colors.primary} for one bracketed link per view.
4. Keep {rounded.none} everywhere and use the spacing list for vertical gaps.
5. Validate with `node web/scripts/verify-designs.mjs --slug=robot`.

## Content and imagery

The home page leads with film: the video window shows a styled portrait of a performer, and the backdrop is a close-up of printed fabric on dry straw, giving the intro a warm, tactile palette against the cooler logotype. The company positions itself through repeated triplets ("We disrupt. We inspire. We create.") and a signature line ("This is Robot."). A navigation entry to directors is expressed as a bracketed red link, and a live local clock gives the site a studio-in-real-time feel. Large empty fields between modules are a deliberate pacing device, so reproductions should keep long vertical gaps rather than compress them.

The measured text colours support a simple contrast rule for reproduction: black text (972 characters) sits on the warm grey #e3e4d8 and white fields, while white text (251 characters) sits on the video backdrop and on the black, #222222 and #333333 sections. The four dark and light neutrals cover almost all measured area, and red appears only as text and as the generated graphic. Because no radius, shadow or border was recorded at all, the visual structure depends entirely on colour fields, scale contrast between 13px labels and the 101.36px and 466.64px condensed headings, and the placement of elements on the page.

Typographic reproduction notes: all three Robot families are measured as squeezed variants of one design, so mixing them is correct only in the measured roles. Use the semi-squeezed medium for labels and body, the extra-squeezed medium for large uppercase statements, and the semi-squeezed bold only for the few characters where bold was measured. Keep headings uppercase and set solid; keep body at 22.64px with 21.508px line-height.
