---
version: alpha
name: SpaceX
category: "Media & Consumer Tech"
description: "SpaceX's homepage is a pure #000000 stage for full-bleed photography, with uppercase D-DIN-Bold headlines at 60px/54px (-1px tracking), 16px D-DIN body in #f0f0fa, and ghost buttons: 50px tall, 4px radius, a 50% black fill and a 1px #f0f0fa59 outline that fills solid #f0f0fa on hover."
colors:
  canvas: "#000000"
  ink: "#f0f0fa"
  primary: "#f0f0fa"
  on-primary: "#f0f0fa"
  ink-soft: "#f0f0fae6"
  hairline: "#f0f0fa59"
  scrim-black-50: "#00000080"
typography:
  display:
    fontFamily: D-DIN-Bold
    fontSize: 60px
    fontWeight: 400
    lineHeight: 54px
    letterSpacing: "-1px"
    textTransform: uppercase
  body:
    fontFamily: D-DIN
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: D-DIN, Arial, Verdana, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 4px
  s2: 10px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 30px
  s8: 36px
  s9: 40px
components:
  button-primary:
    backgroundColor: "{colors.scrim-black-50}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 50px
    borderColor: "{colors.hairline}"
  button-primary-hover:
    backgroundColor: "{colors.ink}"
  button-secondary:
    backgroundColor: "{colors.scrim-black-50}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 50px
    borderColor: "{colors.hairline}"
  nav:
    textColor: "{colors.ink}"
    padding: 24px 40px
  footer:
    textColor: "{colors.ink}"
---

## Overview

The SpaceX homepage in this capture is a sequence of full-viewport scenes on a pure black page. The first scene is almost empty: a thin wordmark and a row of uppercase nav links across the top, then, low on the screen, a monospaced date ("SEPTEMBER 28, 2026"), the headline "STARSHIP FLIGHT 14" and a single outlined button, "WATCH". The next scene is a photograph of Mars lit from one side on black, with the headline "MAKING LIFE MULTIPLANETARY", a three-line body paragraph and an "EXPLORE" button. The third is a daylight photograph of a rocket on a launch tower, with "REVOLUTIONIZING SPACE TECHNOLOGY" and a "LEARN MORE" button on a grey translucent scrim.

There is no accent color. The measured palette is black plus one slightly blue-tinted white, #f0f0fa, in a few opacities. Every bit of color on the page comes from the imagery. Text is set low and to the left, away from the subject of each picture, and the copy is declarative and short: "SpaceX was founded under the belief that a future where humanity is out exploring the stars is fundamentally more exciting than one where we are not."

**Key Characteristics:**
- Black (`{colors.canvas}`) background with full-bleed, cinematic photography; type sits beside the subject rather than over it.
- All-caps D-DIN-Bold headlines at 60px with tight line-height (54px, below the font size) and -1px tracking.
- One text color, `{colors.ink}` #f0f0fa, with an alpha ladder for secondary roles.
- Ghost buttons with arrow glyphs: dark translucent fill, thin light outline, 4px corners.
- Monospaced (Roboto Mono) date eyebrow above headlines.
- Nav of small uppercase links with a "Upcoming launches" dropdown at the right.

## Colors

The palette is deliberately tiny, and every value is measured.

- **Canvas** `{colors.canvas}` #000000 fills essentially the whole page (4,869 area weight versus 46 for the next background).
- **Ink** `{colors.ink}` #f0f0fa is the most-read text color (1,430 characters); `{colors.ink-soft}` #f0f0fae6 is the same color at about 90% for body paragraphs (253 characters).
- **Primary** `{colors.primary}` is the same #f0f0fa: the page has no hue-based call-to-action, so the "primary" is the light fill that appears when a button is hovered (the hover probe measured fill #f0f0fa on the WATCH button). `{colors.on-primary}` is also #f0f0fa because the extractor measured the label color as #f0f0fa in both states; label legibility on the solid hover fill was therefore not confirmed by measurement.
- **Hairline** `{colors.hairline}` #f0f0fa59 (about 35% opacity) is the 1px button outline.
- **Scrim** `{colors.scrim-black-50}` #00000080 is the translucent button fill, which lets photography show through.

The page's own custom properties are an alpha ladder rather than a palette: `--white-100` rgba(240,240,250,1) with 90, 80, 70, 60, 50, 35, 30, 25 (this one is pure white), 15 and 10 steps; `--black-50` and `--black-80`; and `--gray-40/60/80` built on rgb(37,38,40). The grey values were not observed as painted backgrounds in the capture.

## Typography

Two D-DIN faces and a monospace are loaded: **D-DIN** (regular, 400), **D-DIN-Bold** (declared at 400, used as the bold cut through its own family name) and **Roboto Mono** (400).

| Role | Family | Size / line | Weight | Case | Tracking |
|---|---|---|---|---|---|
| Display (h1, h2) | D-DIN-Bold | 60px / 54px | 400 | uppercase | -1px |
| Body | D-DIN | 16px / 24px | 400 | sentence | none |
| Button | D-DIN (Arial, Verdana fallback) | 16px / 24px | 400 | uppercase labels in markup | none |

Mobile at 390px measured the same 60px display size. The bold look comes from choosing the D-DIN-Bold family rather than from font-weight, which is a detail worth copying: set `font-family: D-DIN-Bold` and leave weight at 400 or the browser will synthesize a heavier face. The date eyebrow in the capture is set in a monospace face, consistent with the loaded Roboto Mono; its size was not extracted.

### Font substitutes
D-DIN is a commercial-looking DIN revival; its licensing was not verified from an opened page. A close open substitute is Barlow (Google Fonts), with Barlow Condensed SemiBold for the headlines, and Roboto Mono for the eyebrow. Keep uppercase, -1px tracking and a line-height smaller than the font size.

## Layout

The structure is a stack of full-screen sections. In the 960px-wide capture, the nav runs edge to edge with a 40px side inset (padding measured as 24px 40px), the first headline starts at about 45px from the left edge and the second scene's headline begins at about 75px, so text blocks are left-aligned to different inset lines per scene rather than to a rigid grid. Headline blocks hold three lines at most and body copy runs to about 300px wide. Spacing tokens measured are 4, 10, 12, 16, 20, 24, 30, 36 and 40px. Scenes are separated by color, not rules: the first two scenes are black, the third switches to a sky-colored photograph, and the transition is a hard edge.

## Elevation & Depth

There are no shadows in the extraction (the box-shadow list is empty). Depth comes from photography: a lit planet against black, a rocket against a dusk sky, atmospheric glow around engine flame. The only layering device is the `{colors.scrim-black-50}` button fill, and, in the third scene, a grey translucent scrim behind the "LEARN MORE" button and a darkening gradient to the right side of the image that supports the white copy. Do not add card shadows or glows to UI elements.

## Shapes

The shape language is nearly rectilinear. Buttons and the "Upcoming launches" dropdown use `{rounded.xs}` 4px (8 occurrences in the page's measured radii); the one other radius is 50% (a round control). A `{rounded.pill}` 9999px value is carried in the token set but has no measured use on this page. Imagery is full-bleed and unrounded.

## Components

**Ghost button.** `button-primary`: fill `{colors.scrim-black-50}`, text `{colors.ink}`, 16px D-DIN, 0 20px padding, 50px tall, `{rounded.xs}`, 1px `{colors.hairline}` outline, followed by a thin right-arrow glyph. Six uppercase labels appear in the measured set: WATCH, RESERVE YOUR RIDE, JOIN A MISSION, LEARN MORE, ORDER NOW and STARMIND. On hover the fill becomes solid `{colors.ink}`. In the capture the button labels look smaller than 16px (about 10 to 11px on the 960px-wide screenshot, scaled), so the 16px value reflects the 1280px-wide measurement.

**Navigation.** A transparent bar over black: a wide-tracked wordmark at left; VEHICLES, HUMAN SPACEFLIGHT, STARLINK, STARSHIELD, SPACEXAI, TERAFAB, COMPANY and SHOP as small uppercase links in a dimmed ink; and a bordered "UPCOMING LAUNCHES" dropdown at the right with a chevron.

**Scene block.** Eyebrow (monospace date), display headline, optional paragraph, then one ghost button. Each scene carries exactly one action.

**Footer.** Text in `{colors.ink}` on black; the footer was not studied beyond its text color.

## Design System Architecture

No public SpaceX design system, brand guideline or token package was found. The only official page opened was the media page (https://www.spacex.com/media/), whose retrieved text contained only the word "SpaceX", so it yielded nothing. Attempts to fetch a D-DIN foundry page returned 404 and the Roboto Mono page returned no usable content, so font provenance is unconfirmed. Web search was not available for this entry.

The de-facto system is a small set of CSS custom properties: white and black alpha ramps (`--white-10` to `--white-100`, `--black-50`, `--black-80`) and three translucent greys (`--gray-40`, `--gray-60`, `--gray-80`). Everything else, type and button geometry, is measured from rendered elements rather than named in variables.

## Do's and Don'ts

**Do**
- Keep the page black and let one strong photograph define each scene.
- Set headlines in uppercase D-DIN-Bold with -1px tracking and a line-height under the font size.
- Use a single ghost button per scene, 50px tall with a 4px radius.
- Use `{colors.ink}` and its alpha steps for all text.
- Keep copy brief and declarative.

**Don't**
- Don't introduce a brand accent color or gradient fill on UI; color belongs to the photography.
- Don't use drop shadows or rounded cards.
- Don't center-align hero text over the subject of the image.
- Don't use mixed-case headlines or weights other than the bold family.
- Don't pill-round buttons.

## Responsive Behavior

At 390px the h1 is measured at the same 60px, which suggests headlines are not scaled down for mobile; other mobile values were not extracted. The measured desktop viewport is 1280px. No breakpoints were extracted, so none are specified here. With 60px uppercase headlines, long words such as "MULTIPLANETARY" are the stress case for narrow screens and should be tested.

## Iteration Guide

1. Black canvas first; choose a full-bleed photograph with a dark side where text can sit.
2. Add the eyebrow, uppercase D-DIN-Bold headline at 60px/54px and -1px tracking.
3. Add one ghost button: `{colors.scrim-black-50}` fill, `{colors.hairline}` outline, 4px radius, 50px height.
4. Set body at 16px/24px in `{colors.ink-soft}`.
5. Verify hover turns the fill to `{colors.ink}` and check label contrast in that state.
6. Run `node web/scripts/verify-designs.mjs --slug=spacex`.
