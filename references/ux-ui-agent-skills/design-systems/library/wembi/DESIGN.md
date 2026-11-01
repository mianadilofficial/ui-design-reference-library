---
version: alpha
name: Wembi
category: "Tech & AI"
description: "Wembi, an industrial IoT digital-twin company, uses a warm #ede8e8 canvas with black HaasUnicaSH type, a #c0dfe9 pale-blue stage, a #beff8b lime accent with a lime display wordmark in the ductile face, an 86.6667px headline and tab-shaped N° buttons with 6.67px top corners."
colors:
  canvas: "#ede8e8"
  ink: "#000000"
  primary: "#beff8b"
  on-primary: "#000000"
  surface-stage: "#c0dfe9"
  surface-white: "#ffffff"
  accent-lilac: "#d5bafb"
  bg-brand: "#9dbbc5"
typography:
  display:
    fontFamily: HaasUnicaSH-Medium, Helvetica, sans-serif
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 9.6px
  display-mobile:
    fontFamily: HaasUnicaSH-Regular, Helvetica, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 33px
  heading:
    fontFamily: HaasUnicaSH-Regular, Helvetica, sans-serif
    fontSize: 86.6667px
    fontWeight: 400
    lineHeight: 86.6667px
  body:
    fontFamily: HaasUnicaSH-Regular, Helvetica, sans-serif
    fontSize: 33.3333px
    fontWeight: 400
    lineHeight: 36.6667px
rounded:
  xs: 3.33px
  sm: 6.67px
  md: 9.33px
  lg: 20px
  xl: 100px
  2xl: 133.33px
  cta: 6.67px
spacing:
  s1: 1.6px
  s2: 3.33px
  s3: 4.27px
  s4: 5.33px
  s5: 6.67px
  s6: 9.78px
  s7: 10px
  s8: 13.33px
  s9: 16.29px
  s10: 16.67px
components:
  button-tab:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 53px
    borderColor: "{colors.ink}"
  button-tab-active:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 53px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
  nav:
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.surface-stage}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The measured page is https://www.wembi.ai/en, titled "Wembi • Instant Digital Twin of Everything". The meta description (in Italian) says Wembi turns machinery and IoT assets into intelligent Digital Twins with real-time monitoring, remote control and advanced plant management. The page is very long, 18,932px at a 1280px viewport, and the extraction hid an Iubenda cookie banner before measuring.

The capture opens on a rounded full-width stage: a pale blue-grey gradient with two overlapping frosted-glass discs and the word "WEMBI" set across the full width in a rounded, monoline lime display face. Small pills sit at the left ("What") and right ("Overview", "Recap", a black "Login", and a lime "Contact") over the stage. Under the stage a row of tiny labels reads "N.001 / WHAT / N.001" above a thin black rule. The section list measured in the body is What, How, Why, Where, with Overview, Recap, Login and Contact as utilities, and the page includes a headline "Digital Twin" at 86.6667px, a statement ("Real-time conversion of the equipment's physical b..."), numbered tab buttons "N°01" to "N°05", a "FAQ" heading and a footer with the headquarters address (Via Cotonificio, 45, 33010 Feletto Umberto). An Awwwards "Site of the Day" tab at the right edge is a third-party badge and not part of the brand UI.

The voice is spare and numbered, like a technical catalogue, with sparse uppercase labels and large statements.

## Colors

The canvas is a warm grey `#ede8e8` (the body background). The largest measured area is the stage blue `#c0dfe9` (11,938 weighted units, named `--c-placeholder` in the stylesheet), followed by white `#ffffff` (1,431). The accent is lime `#beff8b` (`--c-accent`; 63 area units, and the text color of 172 characters such as the wordmark), the secondary is lilac `#d5bafb` (`--c-secondary`; 13 units) and the brand stage tone is `#9dbbc5` (`--c-bg-brand`). Text is `#000000` (1,739 characters; `--c-text` and `--c-dark`).

The extractor's detected CTA fill was the canvas color (the N° tab buttons), so it would have set `primary` to `#ede8e8`; here `primary` is the lime `#beff8b` because it is the brand action color on the "Contact" and "Read answer" buttons (the mobile pass measured the "Read answer" button with a `#beff8b` fill and black text). Other colors found in the stylesheet (`#7700ff`, `#1cc691`, `#ffd24d`, `#0073ce`, `#70b3ff`) were not measured on rendered elements and are not tokens.

## Typography

Two families from the same type foundry family: HaasUnicaSH-Regular and HaasUnicaSH-Medium (all 1,911 measured characters are weight 400, the Medium cut being a separate face), plus `ductile` for the display wordmark. Measured roles: nav labels in Medium at 10.6667px on 9.6px; the "Digital Twin" h2 at 86.6667px on 86.6667px (the FAQ h3 uses a 95.3333px line height); body statements at 33.3333px on 36.6667px; and the tab buttons also at 33.3333px. Other sizes are 46.6667px (214 characters) and 26.6667px (203). Letter spacing is default.

The stylesheet defines `--size: 390`, so sizes are authored on a 390px design width and scaled to the viewport, which is why the desktop values are fractional (for example 10.6667px, 33.3333px and 86.6667px). The mobile pass shows 30px for the h1 (lime on the stage, "Wembi instantly..."), 30px for the h2, 25px on 27.5px for body and 12px on 13.2px for the button and nav labels.

Font substitutes: HaasUnicaSH is a licensed face; use Helvetica or Inter. The `ductile` wordmark face has no free substitute and is artwork-like.

## Layout

The page is a grid of columns declared by variables (`--col`, `--col-1` to `--col-6`, `--gutter: 1rem`, `--width: calc(100vw - 2rem)`), so content spans the viewport minus 1rem on each side. Measured paddings include 40px (12 uses), 13.3333px, 20px, 53.3333px, 80px, 16.2921px, 16.6667px and 33.3333px; gaps include 3.33333px, 100.667px, 26.6667px, 10px, 5.33333px and 4.26667px. Sections open with a tiny numbered label row and a full-width black hairline. The footer is 362px tall.

## Elevation & Depth

No box shadows were measured. The hero stage is a flat-looking gradient with 3D frosted glass discs rendered in the image; interface layers are separated by 1px black borders and by translucent white (`#ffffff66`) navigation pills.

## Shapes

Radii measured: 9.33333px (12 elements, the stage and cards), 100px (5, pills), `6.66667px 6.66667px 0px 0px` (5, tab buttons with square bottoms), 133.333px (4, rounded pills), 3.33333px (3), 20px (1) and `0px 6.66667px 6.66667px` (1). Tokens: `xs` 3.33px, `sm` 6.67px, `md` 9.33px, `lg` 20px, `xl` 100px, `2xl` 133.33px and `cta` 6.67px. The stylesheet also declares `--radius: 1.4rem` and `--radius-s: 1rem`.

## Components

**Tab button (N°01 to N°05):** 53px tall, 1px black border, black 33.3333px text, top corners rounded 6.67px and bottom corners square; N°01 measured a white `#ffffff` fill while N°02 to N°05 measured the canvas color; their state logic was not measured. Their shape (rounded top, square bottom) reads as a folder tab.

**Navigation pills:** small floating capsules over the hero in Medium 10.6667px; on mobile the nav is a 60px capsule with `#ffffff66` fill, 100px radius and 10px padding ("What / Menu / Login / Contact").

**Lime button:** `#beff8b` fill with black Medium 12px text, 5px radius, `0px 20px` padding, 40px tall (mobile measurement, "Read answer").

**Stage card:** a `#c0dfe9` rounded block (9.33px radius, 570px tall) used for media and illustration.

**Display wordmark:** "WEMBI" in lime across the hero.

## Design System Architecture

No public design system or brand guideline was found: the home page HTML contains no such link. The shipped styles are a compact variable set: colors `--c-bg`, `--c-text`, `--c-accent`, `--c-secondary`, `--c-bg-brand`, `--c-placeholder`, `--c-light`, `--c-dark`; shapes `--radius` and `--radius-s`; layout `--gutter`, `--width`, `--col-1` to `--col-6`, `--header-height` and `--size`. Tokens in this file come from live measurement of https://www.wembi.ai/en and these variables. Media queries in the HTML are `screen` at `min-width:768px` (23 rules), `max-width:767.8px` (16), `min-width:1024px` (13) and `max-width:1023.8px` (5).

## Do's and Don'ts

- Do use lime `#beff8b` for the brand wordmark and primary action on the pale-blue stage.
- Do number sections with "N°" labels and thin black rules.
- Do round tabs on the top corners only.
- Do keep type to the regular and medium cuts of one grotesque.
- Don't add shadows; none were measured.
- Don't use the unmeasured stylesheet colors as fills.
- Don't document the cookie banner or the "Site of the Day" badge as brand UI.

## Responsive Behavior

The mobile pass measured: h1 30px on 33px in lime, h2 30px on 30px, body 25px on 27.5px, lime button 12px on 13.2px with 5px radius and 40px height, and a navigation capsule 60px tall with 100px radius. Media queries are declared at 768px and 1024px breakpoints (min and max pairs). Other layout changes are not measured.

## Iteration Guide

1. Start with `#ede8e8`, black and the lime `#beff8b`; add `#c0dfe9` for the stage and `#d5bafb` as a rare second accent.
2. Author sizes on a 390px base and scale with viewport width.
3. Use folder-tab buttons with top-only 6.67px radius for navigation between numbered sections.
4. Keep every layer flat; use borders and translucency instead of shadows.
5. Re-measure after the cookie banner is dismissed if new overlays appear.
6. Keep numbered labels in the Medium cut at the small 10.6667px size and reserve the 86.6667px size for section titles such as "Digital Twin" and "FAQ".
7. When composing a section, pair a large title with a 33.3333px statement and a row of tab buttons; these are the three text sizes that carry most of the measured characters.
8. Treat lime as a signal color: it is the wordmark, the Contact button and the mobile answer button, and appears in about sixty area units against nearly twelve thousand of stage blue.
