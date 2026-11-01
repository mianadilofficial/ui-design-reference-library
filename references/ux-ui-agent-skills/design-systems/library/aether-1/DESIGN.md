---
version: alpha
name: Aether 1
category: "Tech & AI"
description: "Aether 1 Earbuds launch site: near-black navy #050d15 canvas, white Manrope 500 headlines at 48px, Azeret Mono 300 bracketed labels, #41a5ff blue glow edges, glass cards, pill buttons with 53.33px radius."
colors:
  canvas: "#050d15"
  page-largest: "#0a1a29"
  ink: "#ffffff"
  primary: "#0a1a29"
  on-primary: "#ffffff"
  surface-2: "#41a5ff"
  nav-bg: "#ffffff14"
typography:
  display:
    fontFamily: Manrope, Arial, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 57.6px
  display-mobile:
    fontFamily: Manrope, Arial, sans-serif
    fontSize: 22px
    fontWeight: 500
    lineHeight: 26.4px
  body:
    fontFamily: Manrope, Arial, sans-serif
    fontSize: 12.4444px
    fontWeight: 500
    lineHeight: 17.4222px
  button:
    fontFamily: Manrope, Arial, sans-serif
    fontSize: 8.88889px
    fontWeight: 400
    lineHeight: 10.6667px
  nav:
    fontFamily: Manrope, Arial, sans-serif
    fontSize: 37.3333px
    fontWeight: 400
    lineHeight: 48.5333px
  link:
    fontFamily: Manrope, Arial, sans-serif
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 12.8px
    textTransform: uppercase
rounded:
  xs: 13.33px
  sm: 53.33px
  cta: 53.33px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4.44px
  s3: 7.11px
  s4: 8.89px
  s5: 14.22px
  s6: 21.33px
  s7: 26.67px
  s8: 35.56px
  s9: 44.44px
  s10: 106.67px
components:
  button-primary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    height: 37px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    padding: 0px 14.2222px 17.7778px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    transform: matrix(1, 0, 0, 1, 0, -48.5156)
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    boxShadow: rgba(255, 255, 255, 0.2) 0px 1px 0px 0px, rgba(65, 165, 255, 0.1) 0px 1px 0px 0px inset
    transform: matrix3d(0.895852, 0.305453, 0.32272, 0, 0.32272, -0.946494, 0, 0, 0.305453, 0.104148, -0.946494, 0, 0, 0, 0, 1)
---

# Aether 1

## Overview
Aether 1 is a single-product launch site for a pair of premium earbuds, titled "Aether 1 Earbuds" and carrying the line "Sound Without Boundaries" with the subline "Elevate your senses through timeless resonance." The page credits "OFF+BRAND." as its contact line. The capture shows an almost black navy field (`{colors.canvas}` #050d15) with one centered 3D object: translucent, glassy ellipsoids with small glowing blue points, labeled around it with bracketed monospace tags such as [ NOISE CONTROL ], [ AI ASSISTANT ] and [ EQUALIZER ]. The page measures 4,000px tall at 1280px width, and most of that height is empty dark space in the capture, with the lower part of the capture empty. Everything in the measured frame is white or blue on dark navy.

The tone of the copy is poetic and minimal ("Experience every note as if it were born in silence"; "Its energy, eternal. No charging, no constraints."), with short evocative headings such as "Unrivalled audio quality", "Crafted for pure clarity.", "Intuitive Controls" and "Sub Alphatonic Power Core". Some body text on the page is still placeholder lorem ipsum, so copy tokens should not be taken as final.

### Imagery and art direction
The visible art direction is a single abstract hero object rather than photography: concentric translucent ellipses tilted at different angles, filled with a deep blue gradient and outlined with thin gray strokes, with three small bright blue points at the edges. A tiny bracketed counter, [ 100 ], sits at the far right edge of the frame, and the wordmark text "AETHER : 1" is present in the page text. There are no people, no product photographs and no stock imagery in the measured frame. The grid is not visible; the labels are positioned freely around the object. Density is extremely low: a handful of tiny labels on a field that is more than three thousand pixels tall in the capture.

## Colors
- **Canvas** `{colors.canvas}` #050d15: the brand/background variable (`--color-brand` and `--color-bg` are both #050D15 in the shipped CSS).
- **Elevated navy** `{colors.page-largest}` #0a1a29: the largest painted area and also the fill of the measured button, so `{colors.primary}` is the same value.
- **Ink** `{colors.ink}` #ffffff: the only text color measured (500 characters, all white); `{colors.on-primary}` is also #ffffff.
- **Glow blue** `{colors.surface-2}` #41a5ff: appears in the card shadows (`rgba(65, 165, 255, 0.1)` inset line and a `rgba(65, 165, 255, 0.7) 0px 0px 10px 2px` glow around the orbiting points).
- **Glass nav fill** `{colors.nav-bg}` #ffffff14: a translucent white used behind the nav.
- The root variables also publish `--color-blue: #2274ca`, `--color-light-blue: #EEF6FF`, `--color-white: #fff`, `--color-black: #000` and `--color-text: #fff`; they are present in CSS but not measured on visible elements in this capture.

## Typography
Two families. **Manrope** (weights 400 and 500) carries all headline, body and button copy; **Azeret Mono** (weight 300, uppercase) carries the bracketed labels, measured on the body role at 7.11px with 8.53px line-height. Sizes are viewport-scaled: the root defines `--vw: 12.8px` and `--vh: 8px`, and measured sizes are fractional multiples of that unit.

- `display` Manrope 48px / 500 / 57.6px: the h1 "Sound Without Boundaries".
- `display-mobile` Manrope 22px / 500 / 26.4px: the same h1 on the 390px pass.
- `body` Manrope 12.4444px / 500 / 17.4222px: descriptive paragraphs, the most used size (245 characters).
- `button` Manrope 8.88889px / 400 / 10.6667px.
- `nav` Manrope 37.3333px / 400 / 48.5333px: large navigation links (Home, Specs, Preorder).
- `link` Manrope 10.6667px / 500 / 12.8px, uppercase.
Manrope and Azeret Mono are open-source families; no substitute is documented.

Weight usage is narrow: weight 500 dominates headlines and body, 400 appears on buttons and the large nav, and 300 only on the monospace labels. Letter-spacing was measured as normal on the headline and body; the monospace labels are uppercase and use no extra tracking in the measured roles. The result is a typographic voice that is calm and technical: a large light-medium sans for statements and a tiny mono for annotations, with almost nothing in between.

## Layout
The shipped CSS publishes `--container-padding: 10rem`, `--grid-margin: 10rem`, `--inner-padding: 2rem`, `--outer-padding: 1rem` and `--grid-gutter: 2rem`. The hero is a centered stage with the object in the middle and labels placed around it by absolute position. Measured spacing values are 1, 4.44, 7.11, 8.89, 14.22, 21.33, 26.67, 35.56, 44.44 and 106.67px, again in viewport-scaled steps.

Because sizes scale with the viewport unit, a designer reproducing the page should compute lengths from the 12.8px `--vw` unit instead of fixed pixels: for example the 48px h1 equals 3.75 viewport units and the 12.4444px body equals about 0.972 units. The 10rem container and grid margins mean the content column is narrow at 1280px, leaving wide empty gutters that frame the hero object. Navigation sits in a translucent glass bar; its links are large type, 37.3333px, offset by a transform of `matrix(1, 0, 0, 1, 0, -48.5156)` in the measured state, that is a vertical translate of -48.5156px; what triggers it was not measured.

## Elevation & Depth
Depth is made with light, not with drop shadows. Cards carry `rgba(255, 255, 255, 0.2) 0px 1px 0px 0px, rgba(65, 165, 255, 0.1) 0px 1px 0px 0px inset`, a one-pixel white top edge plus a faint blue inner edge, and the 3D shell is a CSS `matrix3d` transform. Orbiting points use the blue glow `rgba(65, 165, 255, 0.7) 0px 0px 10px 2px`. The h1 has a `mask-image: linear-gradient(90deg, rgb(0, 0, 0) -100%, rgba(0, 0, 0, 0) 0%)`, a gradient mask on the heading.

## Shapes
Radii measured: 50% (8 elements, the orbiting dots), 53.3333px (2 elements, `{rounded.sm}` / `{rounded.cta}`), and 13.3333px (`{rounded.xs}`). The mobile CTA "Ask Aether" measured a 60px radius, a pill. Large ellipsoid forms are the signature shape.

## Components
- **button-primary** "Ask Aether": background `{colors.page-largest}` (#0a1a29), text `{colors.ink}`, `{typography.button}`, height 37px, pill radius (`{rounded.cta}`).
- **nav**: translucent `{colors.nav-bg}` fill, white text, padding 0px 14.2222px 17.7778px; nav links are the large 37.3333px `{typography.nav}`.
- **link**: white uppercase 10.6667px.
- **card**: the glass shape with the two-layer edge shadow above and a 3D transform.
No hover states were recorded (empty hover list).

## Design System Architecture
No public design system or brand guideline is linked from the page; its only links are Home, Specs and Preorder. The de-facto system is a small CSS-variable layer: `--color-bg`, `--color-brand`, `--color-text`, `--color-blue`, `--color-light-blue`, plus spacing variables (`--container-padding`, `--grid-margin`, `--grid-gutter`) and viewport units (`--vw`, `--vh`) that scale all sizes with the window.

## Do's and Don'ts
- Do keep the page dark (#050d15) with white text only; add color through the #41a5ff glow.
- Do label hardware features in bracketed uppercase monospace (Azeret Mono 300).
- Do use Manrope at weight 500 for headlines and body.
- Don't use opaque drop shadows; use the one-pixel light edge and blue glow.
- Don't ship the placeholder lorem ipsum as copy.
- Don't use pure black, which appears only as an unused variable.

## Responsive Behavior
Measured on the 390px pass: the h1 is 22px / 500 / 26.4px (down from 48px at 1280px) and the "Ask Aether" button is 10px / 400 with a 60px radius on #0a1a29. Layout changes, breakpoints and navigation behavior on mobile were not measured.

## Iteration Guide
1. Set the page to #050d15 and the one raised surface to #0a1a29.
2. Headline in Manrope 500 at 48px desktop and 22px mobile.
3. Add feature tags as `[ LABEL ]` in Azeret Mono 300 uppercase.
4. Express depth with the white 20% top edge and the blue 10% inner edge.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=aether-1 --force --no-motion` and re-run `node web/scripts/verify-designs.mjs --slug=aether-1`.
