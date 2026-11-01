---
version: alpha
name: L.I.S.A. by Locomotive
category: "Architecture & Interiors"
description: "L.I.S.A. (lisa.locomotive.ca), the Locomotive agency's interactive assistant: a black-on-white interface in HelveticaNowDisplay at 26px, a 3D CRT-headed character as the only imagery, 12-column grid with 20px gutter, a #312DFB menu color and 999px black pill buttons on mobile."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  menu-blue: "#312DFB"
typography:
  display:
    fontFamily: HelveticaNowDisplay, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 31.2px
  display-mobile:
    fontFamily: HelveticaNowDisplay, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
  button-mobile:
    fontFamily: HelveticaNowDisplay, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 12px
    fontWeight: 400
rounded:
  xs: 40px
  pill: 999px
spacing:
  s1: 20px
  s2: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-mobile}"
    rounded: "{rounded.pill}"
    padding: 6px 18px
    height: 29px
---

## Overview

lisa.locomotive.ca is L.I.S.A., described in its own on-page greeting as "Hi there, I am L.I.S.A, Locomotive's Interactive Super Assistant." It is a microsite of Locomotive, the Montreal web agency whose home page (https://locomotive.ca/en) is titled "Locomotive | Montreal web agency". The page's title in the measurement is simply "Locomotive". The measured document is 1280px wide and only 800px tall: it is a single full-viewport experience, not a scrolling page.

The composition: a thin top bar with the wordmark "Locomotive®" at the left, a small star-shaped glyph beside it, and the link "Let's talk" at the right; a 3D-rendered figure with a vintage CRT monitor for a head, wired with cables and headphones, wearing a knit turtleneck, standing in a soft grey studio; a left-hand text column with the assistant's lines in black ("There you are! I've been waiting and these heels are killing me. What can I do for you?"), with the previous line blurred above it; at the bottom left a circular black back/replay button; at the bottom right a pill-shaped sound toggle with on and off speaker icons. A thin black progress line runs along the very bottom edge.

The voice is playful and personal, written in first person, with a joking aside rather than corporate copy. The imagery is a single hero character on a neutral gradient, with an orange-red glitch image on the monitor screen as the one saturated area.

## Colors

The measured palette is deliberately tiny.

- **Canvas #ffffff**: `--color-bg: #FFFFFF` in the root variables. The 3D scene paints a soft grey studio gradient over this; the gradient is rendered by the canvas and its values were not measured.
- **Ink #000000**: all 94 measured text characters, the border color and the black UI shapes (`--color: #000000`). The back button and sound toggle are black.
- **Primary #000000** with **#ffffff** text: the measured mobile primary button ("Discover our culture") is a black pill with white 12px text.
- **Menu blue #312DFB**: `--menu-color-bg` in the root variables, paired with `--menu-color: #FFFFFF`. This is the background of the site's overlay menu, defined in the shipped CSS; it does not appear in the entry-state capture.

The root variables also include a cookie-consent theme (`--cc-*`, with an overlay `rgba(0,0,0,.65)`); that belongs to the consent widget and is not documented as brand UI. `--swiper-theme-color: #007aff` is a carousel library default, not a brand color.

## Typography

Two faces were loaded: **HelveticaNowDisplay** (400) for all text, and **LocomotiveNew** (400); the elements that use LocomotiveNew were not separately measured. The stack after HelveticaNowDisplay is the system sans ladder (-apple-system, system-ui, avenir next, avenir, segoe ui, helvetica neue, helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif).

- Display / dialogue: 26px on 31.2px line-height, weight 400 (77 characters). Mobile: 18px on 21.6px.
- Small text: 15px (17 characters), matching the root variable `--font-size: 15px`.
- Button label on mobile: 12px, weight 400.
- Root scale in rem (base 15px): h1 4.6667rem, h2 1.7333rem, h3 1.4667rem, h4 1.3333rem, h5 1.2rem, h6 1.0667rem, medium 1.7333rem, huge 7.6389vw.
- Weight is always 400; no bold was measured.

HelveticaNowDisplay is a commercial typeface from Monotype's Helvetica Now family; Helvetica Neue or Arial is the fallback in the stack itself.

The page has no scroll, so hierarchy is expressed through position and blur rather than size: the active line is crisp and the earlier line fades out of focus. The only strong color on the screen is the orange-red glow on the monitor, which draws the eye to the character's face before the text.

## Layout

The shipped CSS declares a 12-column grid (`--grid-columns: 12`) with a 20px gutter (`--grid-gutter`) and a 2.6667rem outer margin (`--grid-margin`), a 4rem header height and a 2px border size. The entry layout places text on the left third of the screen and the figure on the right half, overlapping slightly. Measured gaps are 20px (4 elements) and paddings 40px (4) and 400px (1; the offset that pushes the dialogue block into position).

A vertical spacing scale exists in root variables, desktop value and mobile value: micro 14 / 8, tiny 20 / 20, small 30 / 30, medium 40 / 40, large 80 / 52, big 150 / 80, huge 200 / 100, enormous 250 / 140.

## Elevation & Depth

No box shadows were measured. Depth is entirely three-dimensional rendering: the figure has realistic lighting, soft shading on the sweater and a floor/backdrop gradient. UI controls (buttons, sound toggle) are flat black shapes with white icons.

## Shapes

One element has a 40px radius (the pill-shaped sound toggle at the bottom right). The mobile pass records a 999px radius on the primary button. Everything else computes a 0px radius, including the text links. The back button is a circle.

## Components

- **Top bar**: transparent over the scene, black 26px text; "Let's talk" is a text link that gains an underline on hover (measured: text-decoration none to underline, no color change).
- **Dialogue block**: left-aligned black 26px text, the previous message blurred above the current one.
- **Primary button (mobile pass)**: black fill, white 12px label, 999px radius, 6px 18px padding, 29px tall.
- **Sound toggle**: black pill with a white speaker icon (on) and a muted-speaker icon (off), 40px radius.
- **Back/replay**: circular black button with a white arrow icon.
- **Progress line**: thin black bar along the bottom edge.

## Design System Architecture

There is no public design system document, but the parent agency's site exposes its tokens as root variables, which this brand shares: `--spacing-*` and `--spacing-*-mobile` scales, `--font-size-h1…h6`, `--grid-columns`, `--grid-gutter`, `--grid-margin`, `--border-size`, `--header-height`, `--color`, `--color-bg`, `--menu-color` and `--menu-color-bg`. The research pages opened were: https://locomotive.ca/en and https://locomotive.ca/en/agency (both 200, agency marketing pages with no design-system or brand-guideline section). The system is a lean variables-first CSS foundation: one font, black on white, one blue for the menu, unit-less spacing numbers split into desktop and mobile variants.

## Do's and Don'ts

- Do keep the interface black on white and let the 3D figure carry the color.
- Do set text in HelveticaNowDisplay at weight 400 only.
- Do use pill shapes (40px or 999px radius) for controls and a circle for the back button.
- Do write copy in first person with a light, playful tone.
- Don't add shadows or gradients to UI controls.
- Don't use the cookie-widget colors or `--swiper-theme-color` as brand colors.
- Don't use bold weights: none were measured.
- Don't place color fills behind the dialogue; it sits directly on the scene.

## Responsive Behavior

The 390px pass measured: display text 18px on 21.6px, the primary button "Discover our culture" at 12px with 6px 18px padding, 29px height and a 999px radius (black fill, white text), and the most common mobile type sizes 22px (126 characters), 12px (92), 15px and 18px. The desktop 12-column grid has mobile spacing variants in the root variables (listed under Layout). Positioning of the figure and layout reflow on mobile were not measured.

## Iteration Guide

1. Use black on white, HelveticaNowDisplay 400, and the two-value spacing scale from the frontmatter.
2. A new control is a black pill with white text; icons are white on black.
3. When a menu or overlay is needed, use #312DFB with white text from the root variables.
4. Add no value that is not in `web/data/extracted/l-i-s-a.json`.
5. Run `node web/scripts/verify-designs.mjs --slug=l-i-s-a`.
