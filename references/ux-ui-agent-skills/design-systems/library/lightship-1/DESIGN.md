---
version: alpha
name: "Lightship"
category: "Architecture & Interiors"
description: "Lightship (all-electric travel trailers, lightshiprv.com): F37Bolton at weight 400 with tight negative tracking, a warm cream page tone #faf6ef under black ink #000000, a coral accent #fa5c40, 20px and 100px radii, full-bleed photography."
colors:
  canvas: "#ffffff"
  page-largest: "#faf6ef"
  ink: "#000000"
  accent-coral: "#fa5c40"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-3: "#f2efea"
  ink-3: "#00000066"
  ink-4: "#a1a1a1"
  hairline: "#d9d9d9"
typography:
  display:
    fontFamily: F37Bolton, sans-serif
    fontSize: 67.1434px
    fontWeight: 400
    lineHeight: 67.1434px
    letterSpacing: "-3.35717px"
  display-mobile:
    fontFamily: F37Bolton, sans-serif
    fontSize: 40.1256px
    fontWeight: 400
    lineHeight: 40.1256px
    letterSpacing: "-2.00628px"
  heading:
    fontFamily: F37Bolton, sans-serif
    fontSize: 32.5715px
    fontWeight: 400
    lineHeight: 39.0858px
    letterSpacing: "-1.62858px"
  subheading:
    fontFamily: F37Bolton, sans-serif
    fontSize: 23.7149px
    fontWeight: 400
    lineHeight: 29.6436px
    letterSpacing: "-0.711446px"
  body:
    fontFamily: F37Bolton, sans-serif
    fontSize: 15.7149px
    fontWeight: 400
    lineHeight: 19.6436px
  button:
    fontFamily: F37Bolton, sans-serif
    fontSize: 13.7149px
    fontWeight: 400
    lineHeight: 17.1436px
rounded:
  xs: 20px
  sm: 100px
spacing:
  s1: 4px
  s2: 8px
  s3: 8.36px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 28.57px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    height: 40px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    height: 28px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    padding: 0px 16px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 24px
    height: 48px
  footer:
    textColor: "{colors.ink}"
    padding: 0px 108.572px
---

## Overview

Lightship is the marketing site for a company that builds all-electric travel trailers; the capture shows the AE.1 trailer towed behind a pickup across a meadow, and the page copy reads "Born for Adventure. Built in America." The site is image-led. A full-width hero photograph with rounded corners opens the page, a thin announcement bar sits above it, and the headline is set in white directly over the footage. Below the hero the page changes to a pale, warm cream field (#faf6ef, the largest background area measured) where a short grey paragraph and a very large black "This is the AE.1" statement carry the story, followed by tall portrait photographs inset from the page edges.

The voice is short and declarative: "Go further, stay longer and share it with those who matter most." Typography does almost all the brand work. There is a single family, F37Bolton, loaded at weights 400 and 700, but 400 accounts for 3432 of the measured character weight versus 124 for 700. The look is therefore large, light, tightly tracked display type over photography, with very little ornament.

## Colors

The measured palette is small and warm. The page canvas is white (#ffffff) at the top of the document, while the largest background area is a cream, #faf6ef, which is what the long middle of the page shows. A second, slightly darker warm tone, #f2efea, is used for secondary panels. Text is black (#000000, the most-read color with 2207 measured characters), white on photography (532), a 40 percent black (#00000066) for the grey introductory paragraphs, and a neutral grey #a1a1a1. The only measured border color is #d9d9d9.

The extractor's primary call-to-action was the "Access to main content" skip link, filled with a coral red-orange, #fa5c40, with white text. The same coral fills the "Skip Carousel" controls. That coral covers a very small share of the page area (18 against 3719 for the cream), so it is documented here as an accent named accent-coral rather than as the primary button. The role override in SOURCES.json points primary at the "Register" button, which is filled black (#000000) with white text and a 20px radius. The announcement strip uses a dark teal, #29525e, which appears in the candidate list but is not promoted to a token.

- Canvas: #ffffff; page-largest: #faf6ef; surface-3: #f2efea.
- Ink: #000000; muted ink-3: #00000066; ink-4: #a1a1a1.
- Primary action: #000000 on #ffffff text; accent-coral: #fa5c40.
- Hairline: #d9d9d9.

## Typography

F37Bolton, sans-serif is the only family measured (3556 characters). Sizes are fractional because the site scales type fluidly: the h1 is 67.1434px at line-height 67.1434px with letter-spacing -3.35717px, so lines are set solid and tight. The h2 is 32.5715px on 39.0858px with -1.62858px tracking, the h3 is 23.7149px on 29.6436px with -0.711446px, body copy is 15.7149px on 19.6436px, and the button face is 13.7149px on 17.1436px. The statement "This is the AE.1" in the capture is larger again; the measured size list includes 69.8566px, and the most common sizes by character are 15.7149px, 11.7149px, 23.7149px, 21.4285px and 13.7149px.

Tracking tightens as size rises, which is the identifying habit of the system: roughly -5 percent of the font size on the display sizes. Weight stays at 400 almost everywhere; 700 is held for small labels such as "Freedom, Reimagined." in the capture. F37Bolton is a commercial typeface; the extraction recorded it as loaded from the site, and no substitute is specified by the brand. When it is unavailable, any neutral grotesque at weight 400 with the same negative tracking is the closest working stand-in, but this is a design judgement and not a brand statement.

## Layout

Measured at a 1280px viewport the document is 9928px tall. The hero photograph is inset from the viewport edge with a small gutter and rounded corners, and headline fragments sit at the left and right extremes of the frame ("Born for Adventure." left, "Built in America." right). Below it, copy blocks are narrow, centred or offset in a narrow column, and photographs are tall portrait crops that sit in the centre third of the page with a text label to their left. The most common measured gaps are 16px, 8px, 24px, 40px and 28px; the most common paddings are 24px, 108.572px, 16px, 8px and 12px. The footer carries 108.572px horizontal padding.

Density is low. Large white and cream areas separate each statement from the next, and there are no card grids on the home page capture. Navigation is split: a menu toggle and the links AE.1, Technology and Specs on the left, a centred wordmark, and Experience and a build call-to-action on the right, all overlaid on the hero in white.

## Elevation & Depth

No box shadows were measured on the page (the boxShadows list is empty). Depth comes from photography and from layering: white navigation text over video, a translucent header background (#ffffff99 on the mobile pass) and the contrast between the cream page and the inset images. Borders are rare; the single measured border color is #d9d9d9 with a weight of 5.

## Shapes

Two radii are measured: 20px on buttons, pills and image frames, and 100px on the text input, which renders as a full pill. The hero photograph and the tall portrait photographs show the same soft 20px corner. Everything else, including the type blocks and cream panels, has square edges.

## Components

- **Button primary**: black fill (#000000), white text, F37Bolton 13.7149px, 20px radius, 40px tall (the "Register" button, ctaCandidates index 4).
- **Button secondary**: white fill, black text, 20px radius, 28px tall; this is the "See the AE.1 in person" pill in the announcement bar.
- **Skip and carousel controls**: coral #fa5c40 fill, white text, 20px radius, 40px tall.
- **Link**: black text at the 23.7149px subheading size.
- **Nav**: white text over the hero, 13.7149px, 16px horizontal padding per link.
- **Text input**: black text, 100px radius, 48px tall, 24px horizontal padding.
- **Footer**: black text on the light page, 108.572px horizontal padding.

## Design System Architecture

No public design system or brand guideline for Lightship was found on the pages opened. The de-facto system is a stylesheet whose measured root variables include names such as --color-zinc-200, --color-orange-600, --breakpoint-xs (500px), --blur-lg (16px) and easing tokens like --ease-power1-out. These names are colour-scale and easing names, not brand tokens. Brand values therefore live in component styles, not in named tokens, and the generated frontmatter above is the extracted record. Source page: https://www.lightshiprv.com/.

## Do's and Don'ts

- Do set headlines in F37Bolton at weight 400 with negative tracking close to -5 percent of the size.
- Do let photography carry the page and put headline text directly over it in white.
- Do use cream #faf6ef for long reading sections and keep text black on it.
- Do round buttons and image frames at 20px and inputs at 100px.
- Don't add drop shadows; none are measured.
- Don't use bold for display text; 700 is rare.
- Don't treat the coral skip-link fill as a primary brand button.
- Don't add third-party newsletter modals to the system; one was hidden during capture.

## Responsive Behavior

The extraction's mobile pass at 390px recorded type sizes only. The h1 falls to 40.1256px with line-height 40.1256px and -2.00628px tracking; the h2 is 24.6247px on 29.5497px with -1.23124px; body copy is 14.1253px on 17.6567px; the button is 12.1253px. The mobile navigation text lists "Open / Close menu", "AE.1", "Homepage" and "Build yours", with a translucent header background of #ffffff99. The mobile pass did not record layout, column changes, image crops or breakpoints for the page, so those are not measured. The stylesheet declares a breakpoint variable --breakpoint-xs of 500px.

## Iteration Guide

1. Start from the cream page tone #faf6ef and black ink; add white only where text sits on photography.
2. Pick F37Bolton 400 and set tracking as measured for each size before choosing colors.
3. Keep corners at 20px for buttons and frames and 100px for inputs.
4. Use coral #fa5c40 sparingly as an accent; the primary button is black.
5. Verify with the gate: node web/scripts/verify-designs.mjs --slug=lightship-1.
