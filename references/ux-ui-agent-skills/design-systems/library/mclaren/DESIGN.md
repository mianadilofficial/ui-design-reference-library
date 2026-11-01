---
version: alpha
name: "McLaren Automotive"
category: "Luxury"
description: "McLaren Automotive global site measured live: white and black bands with #f0f0f0 grey, black 65 percent text, McLaren orange #ff8000 on hover, McLaren Sans Display and Text, sharp 0px corners and 46px white rectangular buttons."
colors:
  canvas: "#ffffff"
  ink: "#000000a6"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-3: "#f0f0f0"
  hairline: "#0000001a"
  primary-hover: "#ff8000"
  button-secondary-bg: "#0000001f"
typography:
  display:
    fontFamily: "\"McLaren Sans Display\", sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 36px
  display-mobile:
    fontFamily: "\"McLaren Sans Display\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
  subheading:
    fontFamily: "\"McLaren Sans Text\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
  body:
    fontFamily: "\"McLaren Sans Text\", sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 40px
  button:
    fontFamily: "\"McLaren Sans Display\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14px
    textTransform: uppercase
  nav:
    fontFamily: "\"McLaren Sans Text\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "\"McLaren Sans Text\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 48px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 46px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 46px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 44px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 32px 0px
---

# McLaren Automotive

## Overview
cars.mclaren.com resolves to mclaren.com/cars/gl_en, titled "McLaren Automotive - Official Global Website". It is the global site of the British supercar maker, and its design is spare, engineering-led and photographic. The measured page is 1280px wide and 3474px tall. A full-height hero film (in the capture, a close-up of a drill bit on rust-toned material) carries a transparent header: a hamburger icon at left, the spaced-letter "McLAREN" wordmark centred, and "FIND A RETAILER" at right. The headline "McLAREN NEVER STANDS STILL" sits bottom-left in white Display capitals with a white square "OUR CARS" button and a pause control at the right. Below is an eyebrow label "McLAREN AUTOMOTIVE" and a large statement paragraph ("McLaren never stands still. Fearless engineering, uncompromising innovation..."), then "EXPLORE OUR PURSUIT OF PERFECTION" with a horizontally scrolling row of story cards (a black-and-white petrol station photograph, a red McL 6GT concept, a portrait) each with a caption, grey description and a "DISCOVER NOW" arrow link, a thin progress line with arrow controls, and a light-grey "McLAREN SPECIAL OPERATIONS" band with a centred paragraph and a grey "DISCOVER MSO" button.

The voice is confident and plain: short declarative sentences, uppercase eyebrows, wide-set geometric type, no ornament. The interface stays white, black and light grey, and the only colour accent in the system is McLaren orange (#ff8000), which appears on hover and active states rather than as a resting fill.

## Colors
Measured values:
- `canvas` #ffffff is the main background (2087 area weight); the black of the hero film overlay and footer area measured 1786; `surface-3` #f0f0f0 is the light-grey band behind the MSO block (541).
- `ink` #000000a6 is black at 65 percent opacity: the most-read text colour (1096 characters weight), used for the long statement and descriptions; pure black #000000 text measured 716 characters weight. `on-primary` #000000 is the label colour on buttons.
- `primary` #ffffff is the measured primary button fill (a white rectangle on the hero).
- `primary-hover` #ff8000 is the McLaren orange that the primary button turns on hover (measured on "OUR CARS": the fill goes from white to rgb 255, 128, 0 with black text).
- `button-secondary-bg` #0000001f is black at 12 percent opacity, the translucent grey of the "DISCOVER MSO" button; `hairline` #0000001a is black at 10 percent for rules and borders.
The stylesheet exposes a large named token set (400 root variables). Selected brand values: `--color-component-button-primary-hover` #ff8000, `--color-component-icon-active` #ff8000, `--mclaren-grey-500` #9da8ae, `--color-mclaren-grey-700` #78838a, `--color-mclaren-grey-900` #363f44, `--color-mclaren-bg-light` #eff2f5, `--color-mclaren-text-secondary` #9da8ae, `--color-neutral-100` #ebebeb, `--color-neutral-300` #aaa, `--color-neutral-600` #444, `--color-neutral-900` #111, `--color-component-input-fields-default` #ffffff4d, `--color-component-input-fields-error` #e53e3e and state colours such as `--token-success-state-400` #48bb78 and `--token-warning-state-400` #ed8936.

## Typography
Two custom families do all the work.
- **McLaren Sans Display** (300 and 400; 382 characters weight) is the headline, button and navigation face, a wide geometric sans. Tokens: `display` 32px, weight 400, line height 36px (hero headline, uppercase usage on the page); `display-mobile` 24px with 28px line height; `button` 12px, weight 400, line height 14px, uppercase.
- **McLaren Sans Text** (400; 1494 characters weight) is the text face. `body` 28px, weight 400, line height 40px (the large statement paragraph); `subheading` 12px with line height 20px (eyebrow labels); `nav` 16px with 24px line height; `input` 14px with 22px line height.
Measured sizes by character weight: 14px (890, the description text), 12px (421), 28px (189), 24px (164), 16px (163) and 32px (49). The system also publishes responsive type tokens (`--token-desktop-*`, `--token-tablet-*`, `--token-mobile-*`) such as desktop nav link 16px, desktop body-sm line height 22px, mobile body-sm 12px, mobile caption 11px and mobile button-sm 10px.

Font substitutes: both faces are proprietary McLaren fonts; the declared fallback is the generic `sans-serif`.

## Layout
The page is a left-aligned editorial column on a wide canvas: content starts at the same left margin as the header, text blocks are held to a narrow measure (the statement paragraph wraps at about two thirds of the width), and cards run in a horizontal row that bleeds off the right edge. The MSO band switches to centred alignment. The root variables define device gutters (for example `--token-tablet-gutter` 16px and `--token-mobile-padding-sm` 12px).

Gaps measured: 4px (24), 16px (22), 24px (14), 8px, 12px, 48px, 64px, 6px, 20px and 32px; paddings 32px (7), 48px, 20px, 80px and 64px. Spacing tokens s1 4px through s10 64px: 4, 6, 8, 12, 16, 20, 24, 32, 48, 64.

## Elevation & Depth
No shadows were measured. Depth is photographic (the hero film, the car on a coastal drive) and tonal (white, #f0f0f0 and black bands). Translucent black overlays dim the hero for legibility. Cards are images with captions beneath them and no elevation.

## Shapes
No border radius was measured: `borderRadii` is empty, so every element computes 0px, recorded as `rounded.none`. Buttons are sharp rectangles, cards are rectangular, and the only curved elements are inside photographs and icons. A square-cornered look is a defining trait of the system.

## Components
- **button-primary** ("OUR CARS"): white `{colors.canvas}` fill, `{colors.on-primary}` label, `{typography.button}` (12px uppercase), radius `{rounded.none}`, padding 0px 20px, height 46px. Hover (measured): fill `{colors.primary-hover}` (#ff8000).
- **button-secondary** ("DISCOVER MSO"): `{colors.button-secondary-bg}` fill, black label, same type, padding and height, sharp corners.
- **link** and **nav-link**: `{typography.nav}` (16px); the card links ("DISCOVER NOW >") are uppercase text links with a chevron.
- **text-input**: black text, `{typography.input}`, height 44px, sharp corners (the root variable default fill is #ffffff4d).
- **footer**: white `{colors.canvas}` background with black text, padding 32px 0px; link groups include Careers, Media and McLaren Group.
- **Hero controls**: a dark pause button and thin progress line with arrow controls under the card row.

## Design System Architecture
No public design system or brand guideline page was opened, and no search was run; the page opened was https://www.mclaren.com/cars/gl_en. The site ships its own token layer as 400 CSS custom properties with a clear naming scheme: `--color-component-*` for component states (button primary, secondary and tertiary states, hover, focused and disabled label and icon colours, input fields, tags stroke, anchor links), `--color-mclaren-*` and `--mclaren-grey-*` for brand greys, `--color-neutral-*` for a neutral ramp, `--token-{desktop|tablet|mobile}-*` for responsive typography and spacing (heading 1 to 6, body, body-sm, body-lg, caption, eyebrow, button, nav link), and state colours (success, warning, neutral). This is a de-facto design system shipped in the stylesheet, with typography defined per breakpoint.

## Do's and Don'ts
Do:
- Use sharp rectangles (`{rounded.none}`) for buttons, cards and fields.
- Use white buttons on dark imagery and a translucent grey button on the light band; turn them McLaren orange (`{colors.primary-hover}`) on hover.
- Set eyebrows and buttons in uppercase Display at 12px and statements in Text at 28px.
- Use black at 65 percent (`{colors.ink}`) for long text.

Don't:
- Do not use orange as a resting fill; the measurement shows it only on hover and active states.
- Do not round corners or add shadows; neither was measured.
- Do not use the template error and warning colours as brand colours.

## Responsive Behavior
At 390px the extraction measured: h1 24px, weight 400, line height 28px (McLaren Sans Display); body text 20px with a 30px line height (McLaren Sans Text); the primary CTA 10px with a 12px line height; and navigation 10px with a 12px line height. The published mobile tokens include body-sm 12px and caption 11px. Layout reflow (card row, hero, footer) at mobile width was not measured.

## Iteration Guide
1. Start from a full-height hero with a white square button and `{typography.display}` headline in white.
2. Add a statement paragraph in `{typography.body}` with `{colors.ink}` and a `{typography.subheading}` eyebrow above it.
3. Build story cards as images with a caption, grey description and an uppercase link.
4. Use a `{colors.surface-3}` band for the special-operations block.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=mclaren --url=https://www.mclaren.com/cars/gl_en --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=mclaren`.
