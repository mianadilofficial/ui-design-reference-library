---
version: alpha
name: "MyHealthPrac"
category: "Product & SaaS"
description: "MyHealthPrac (myhealthprac.com), a functional-medicine health analytics product, measured live: Neue Montreal at weight 500 with negative tracking, a warm grey #f1f1f1 canvas, #1f1f1f ink, a near-black #010101 pill button with a round arrow, a #c5b197 biege accent and full-bleed portrait photography."
colors:
  canvas: "#f1f1f1"
  page-body: "#010101"
  ink: "#1f1f1f"
  primary: "#010101"
  on-primary: "#f1f1f1"
  surface-2: "#d4d2cf"
  biege: "#c5b197"
  ink-3: "#f1f1f1e6"
  ink-4: "#f1f1f1a6"
  ink-5: "#f1f1f18c"
  hairline: "#1f1f1f40"
  text-input-border: "#f1f1f159"
typography:
  display:
    fontFamily: "\"Neue Montreal\", Arial, sans-serif"
    fontSize: 64px
    fontWeight: 500
    lineHeight: 67.2px
    letterSpacing: "-1.6px"
  display-mobile:
    fontFamily: "\"Neue Montreal\", Arial, sans-serif"
    fontSize: 44.85px
    fontWeight: 500
    lineHeight: 47.0925px
    letterSpacing: "-1.12125px"
  heading:
    fontFamily: "\"Neue Montreal\", Arial, sans-serif"
    fontSize: 38.4px
    fontWeight: 500
    lineHeight: 42.24px
    letterSpacing: "-0.384px"
  subheading:
    fontFamily: "\"Neue Montreal\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: "-0.8px"
  body:
    fontFamily: "\"Neue Montreal\", Arial, sans-serif"
    fontSize: 11.52px
    fontWeight: 500
    lineHeight: 16.128px
  button:
    fontFamily: "\"Neue Montreal\", Arial, sans-serif"
    fontSize: 10.24px
    fontWeight: 500
    lineHeight: 10.24px
    letterSpacing: 0.1024px
  link:
    fontFamily: "\"Neue Montreal\", Arial, sans-serif"
    fontSize: 14.08px
    fontWeight: 500
    lineHeight: 14.08px
    letterSpacing: "-0.256px"
  button-secondary:
    fontFamily: "\"Neue Montreal\", Arial, sans-serif"
    fontSize: 10.88px
    fontWeight: 500
    lineHeight: 10.88px
    letterSpacing: 0.1632px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5.12px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 18px
  s10: 19.2px
components:
  button-primary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 4px 4px 4px 20px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 4px 4px 4px 20px
    height: 52px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 8px 20px 8px 24px
    height: 38px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 28px
---

# MyHealthPrac

## Overview

MyHealthPrac presents itself as "Predictive, Personalised Health Powered by Functional Medicine" (the document title, with `lang` set to en-AU). The measured page is the home page at https://www.myhealthprac.com/, an unusually long scroll of 17,016px at 1280px width, built around full-bleed photography and large light-on-image type. The hero is a close-up of an eye in warm amber light with the headline "See Beyond. Unlock Your Health" in off-white 64px type at the top left, a three-item feature list at the lower left (Real-Time Analysis, Personalized Health Insights, Holistic Health Monitoring, each with a white line icon and a one-line description), and at the lower right the statement "Your body holds the answers — we help you see them." above a white pill button, "Join the Waitlist", with a dark circular arrow inside it. The top bar carries the text wordmark "MyHealthPrac", the navigation What's included, Health conditions, For you, For professionals and FAQ separated by small dots, and a black pill "Join Waitlist" with a white circular arrow.

After the hero the page turns to a flat warm-grey field with a small asterisk glyph and the line "READY TO SEE WHAT YOUR BODY'S BEEN TRYING TO TELL YOU?". A horizontal strip of tall portrait cards follows; each card is a photograph of a person in an outdoor setting with a large biomarker value overlaid in white (74 ng/mL Ferritin, 310 U/L Creatine Kinase, 6.2 % Omega-3 Index), a small rating of squares and a short explanatory line at the bottom. A four-column row of feature columns separated by dotted vertical rules comes next, each with a black icon and a title: "No Appointments. No Waiting.", "Smarter Than Guesswork", "Tailored to You" and "Always-On Awareness".

The voice is calm, clinical and confident; headlines are short sentences, and body copy is very small. The visual language is editorial and cinematic: warm natural light, real people, data numerals set large on photographs, and a palette that is only off-white, charcoal, grey and a sand tone. The page is addressed to both individuals and health professionals (the navigation has "For you" and "For professionals", and the introductory body text begins "MyHealthPrac is built for health profess...").

## Colors

The CSS declares a four-color palette as root variables: `--white: #f1f1f1`, `--black: #1f1f1f`, `--grey: #d4d2cf` and `--biege: #c5b197` (the spelling is the site's own). They map directly to the tokens: #f1f1f1 is `canvas` and the light text color, #1f1f1f is `ink` (13,925 characters), #d4d2cf is `surface-2` and #c5b197 is `biege`. The canvas is the largest measured background (area weight 8,160), with #d4d2cf at 2,312 and #c5b197 at 1,037.

A true near-black, #010101 (`page-body`, `primary`), is the fill of the "Join Waitlist" button and an area background (weight 1,672). Translucent blacks, #00000033 (weight 4,066) and #00000021 (weight 2,086), are overlays that darken photographs so that white type stays legible. Light text on photographs and dark areas comes in four opacities of #f1f1f1: full, #f1f1f1e6 (`ink-3`, 90%), #f1f1f1a6 (`ink-4`, 65%) and #f1f1f18c (`ink-5`, 55%).

Borders are alpha tints of the two main colors: #1f1f1f40 (`hairline`, 42 elements) on light areas, with #f1f1f173, #f1f1f159 (`text-input-border`) and #f1f1f140 on dark areas, and a lighter #1f1f1f33. No saturated color exists in the interface; warmth comes from the photographs. A small yellow-orange #ffb937 appears at zero area weight and is not used.

## Typography

One family, "Neue Montreal" with Arial and generic sans-serif as fallbacks, sets all 17,205 measured characters. It is loaded at weights 400, 500 and 700; weight 500 is used on 14,877 characters, 400 on 2,327 and 700 on one. The page is therefore almost entirely medium weight, with hierarchy built from size and tracking.

Measured roles:
- `display`: the hero h1 at 64px, weight 500, line-height 67.2px, letter-spacing -1.6px, in #f1f1f1.
- `display-mobile`: 44.85px, weight 500, line-height 47.0925px, letter-spacing -1.12125px.
- `heading`: 38.4px, weight 500, line-height 42.24px, letter-spacing -0.384px (the h2 "Your body holds the answers").
- `subheading`: 32px, weight 500, line-height 32px, letter-spacing -0.8px (the h3).
- `body`: 11.52px, weight 500, line-height 16.128px.
- `button`: 10.24px, weight 500, line-height 10.24px, letter-spacing 0.1024px.
- `button-secondary`: 10.88px, weight 500, letter-spacing 0.1632px.
- `link`: 14.08px, weight 500, letter-spacing -0.256px.

By character count the page is dominated by very small text: 11.52px (10,187 characters), 12.16px (1,605), 12.768px (1,186), 15.36px (933), 14.08px (861), 10.24px (310) and 10.88px (285). Large sizes are 38.4px (227), 57.6px (167), 47.36px (122), 51.2px (89) and 33.28px (75). Many of the sizes are non-integer values (11.52, 12.168, 14.08, 15.36), and how they are computed was not determined. Tracking is negative on large type and slightly positive on button labels.

## Layout

The layout is a full-bleed canvas with the wordmark and hero copy near the left edge, and text blocks that are placed in the left or right half of the viewport over photographs. After the hero the page uses wide open grey fields with very few elements, a horizontally scrolling card strip that bleeds off both edges, and a four-column row with dotted vertical dividers.

Gaps measured are 6px (48), 39px (38), 4px (29), 8px (25), 20px (22) and 1px (14), with larger gaps of 52px, 32px and 48px. Paddings include 16px (61), 12px (47), 5.12px and 19.2px (38 each), 20px (34) and 32px (20). Large padding values (76.8px, 152px) are used for hero and section spacing. The spacing tokens list 1, 4, 5.12, 6, 8, 10, 12, 16, 18 and 19.2px. Density alternates between airy (large grey fields with one line of text) and tight (portrait cards with a data overlay).

## Elevation & Depth

There are no box shadows. Depth comes from photography, translucent black overlays (#00000033 and #00000021) and thin alpha borders: 1px lines at 25% (#1f1f1f40) mark the dotted column rules and the card interiors, where thin white lines divide each card's value row from its photograph. Text over images relies on the overlays rather than text shadows.

## Shapes

Controls are fully round and surfaces are barely rounded. Buttons and inputs measure radii of 1024px, 1088px and 1560px, which are pill shapes (`rounded.pill`), and circles measure 100% or 50%. Surfaces use small radii: 2px (35 elements), 3px (19), 4px, 6px (`rounded.lg`, the card token) and 8px (15 elements). Section containers measure 1280px, 1152px and 1088px radii on 19, five and six elements, which were not identified element by element and are not tokenized beyond `pill`. The result is a contrast between sharp cards and pill controls with circular arrow buttons.

## Components

**Primary button** (`button-primary`): a #010101 pill with an #f1f1f1 label at 10.24px, weight 500 and 0.1024px tracking, padding 4px 4px 4px 20px and height 48px; a white circle with a dark diagonal arrow sits at its right end, within the 4px right padding.

**Secondary button** (`button-secondary`): the same pill inverted: #f1f1f1 fill, #1f1f1f label at 10.88px, height 52px, with a dark circular arrow; it is the "Join the Waitlist" call in the hero.

**Navigation**: off-white labels (#f1f1f1) over the hero separated by small dot separators; no hover color change was measured (hover colors equal the base color).

**Link** (`link`): #f1f1f1 at 14.08px weight 500 with -0.256px tracking (numerals in the pager were the measured sample).

**Text input** (`text-input`): a pill with an alpha #f1f1f159 border, #f1f1f1 text at 10.88px, padding 8px 20px 8px 24px, height 38px.

**Card** (`card`): #f1f1f1 background, #1f1f1f text, 6px radius and 28px padding. In the capture the biomarker cards are photographic with white overlay text, a large numeral, a unit label, a marker name and a short explanation.

No separate footer token was generated for this page.

## Design System Architecture

No public design system or brand guideline was found linked from the home page, and none was opened for this document. The shipped CSS defines the brand as four root variables, `--white`, `--black`, `--grey` and `--biege`, with no further named tokens, so color usage is by those names and alpha tints of them. Type is a single family, Neue Montreal, loaded at 400, 500 and 700. Sizes in the measured output are fractional, which the CSS corpus does not explain by variable. Source reviewed: https://www.myhealthprac.com/ only.

## Do's and Don'ts

Do build on the four variables: #f1f1f1, #1f1f1f, #d4d2cf and #c5b197.

Do set everything in Neue Montreal weight 500, large type with negative tracking and very small body text.

Do use pill buttons with a circular arrow at the right end, black on light or white on dark.

Do place large numerals and short statements directly on full-bleed photography under a translucent dark overlay.

Don't add saturated brand colors or drop shadows; the measured system has none.

Don't use bold weights; weight 700 measured on a single character.

Don't round cards beyond the small radii (2px to 8px); reserve pills for buttons and inputs.

## Responsive Behavior

Only the 390px mobile pass was recorded. In it the hero h1 is 44.85px, weight 500, line-height 47.0925px, in #f1f1f1 (width 358px); the h2 is 28.08px with line-height 33.696px; body text is 14.82px, weight 500, line-height 20.748px, in #1f1f1f; and the call-to-action "Full List (Upcoming)" measures 15.6px with a #1f1f1f fill, #f1f1f1 label, padding 4px 4px 4px 20px and a 1560px radius at 358px width. The sizes by character count on mobile are led by 14.82px (8,779), 15.6px (3,378), 15.015px (1,585) and 18.33px (1,086). Breakpoint values, the layout of the card strip and navigation on mobile were not measured.

## Iteration Guide

1. Start from `canvas` #f1f1f1, `ink` #1f1f1f, `primary` #010101, `surface-2` #d4d2cf and `biege` #c5b197.
2. Use Neue Montreal at weight 500; 64px with -1.6px tracking for the hero, 38.4px for statements, about 11.5px for body.
3. Build the order: transparent top bar with pill CTA, full-bleed photographic hero, one-line grey intro, scrolling portrait cards with biomarker values, four dotted-divider feature columns.
4. Make buttons pills with a circular arrow and no shadow; keep cards at 6px.
5. Run `node web/scripts/verify-designs.mjs --slug=myhealthprac` after edits.
6. Leave out anything not in the frontmatter or `web/data/extracted/myhealthprac.json`.
