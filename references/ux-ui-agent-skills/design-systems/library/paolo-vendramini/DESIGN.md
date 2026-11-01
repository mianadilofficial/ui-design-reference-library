---
version: alpha
name: "Paolo Vendramini"
category: "Portfolio"
description: "Paolo Vendramini brand design portfolio measured live: white #ffffff and black #000000 with one pure blue accent #0000ff, NeueMontreal-Bold uppercase 12px captions, PPNikkeiMaru serif display, a 4-column 2rem-gutter grid, 16px radius and no shadows."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  accent: "#0000ff"
  bg-alt: "#f6f2f2"
  placeholder: "#f8f8f8"
typography:
  display:
    fontFamily: NeueMontreal-Bold, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    textTransform: uppercase
  display-mobile:
    fontFamily: PPNikkeiMaru-Medium, Helvetica, sans-serif
    fontSize: 70px
    fontWeight: 400
    lineHeight: 70px
    textTransform: uppercase
  nav:
    fontFamily: NeueMontreal-Bold, Helvetica, sans-serif
    fontSize: 28.16px
    fontWeight: 400
    lineHeight: 28.16px
    textTransform: uppercase
  link:
    fontFamily: NeueMontreal-Bold, Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
    textTransform: uppercase
rounded:
  xs: 16px
spacing:
  s1: 3.5px
  s2: 7.04px
  s3: 11.9px
  s4: 12.8px
  s5: 17.92px
  s6: 25.6px
  s7: 27.65px
  s8: 55.3px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 17.92px 0px
  nav:
    textColor: "{colors.canvas}"
    transform: matrix(1, 0, 0, 1, 0, -79.3438)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 25.6px
---

# Paolo Vendramini

## Overview

www.paolovendramini.com (title "Paolo Vendramini — Brand Designer") is the portfolio of a brand designer and art director, according to the fetched page copy. The home screen is a vertical sequence of full-bleed photographic and video panels with almost no interface: a small "P — V" monogram with a blue dot top left, a three-line list WORKS / ABOUT / CONTACT set in tiny white capitals at the left edge, and project panels in which a white card or huge italic serif lettering sits over the imagery (in the capture: a top-down glass of red drink over dark wood with a white card holding a small image of red tokens, a blue-sky shot of a woman in a terracotta sport top with giant white serif letters across it, and a close-up of a closed eye). The scroll height of 16000px in the extraction reflects a stack of full-viewport panels rather than text length. The tone is editorial and image-first; typography is a utility layer in uppercase Neue Montreal, with a contrasting display serif for large gestures. Project filters and labels on the page are All (19), Strategy, Branding, Pack and Adv, and the 19 projects range from Nidaba 1982 and nu3 to Heineken, Netflix and Hyundai work.

## Colors

The interface is black and white with one blue. Measured: canvas `#ffffff` (the white card and the page ground), text `#000000` (1298 characters) and `#ffffff` (59 characters, nav over imagery), and a `#000000c6` overlay area (weight 1024; it is a scrim over imagery and is not recorded as a token). The root variables name the system: `--c-bg: #fff`, `--c-bg-alt: #f6f2f2`, `--c-placeholder: #f8f8f8`, `--c-text: #000`, `--c-text-alt: #fff`, and `--c-accent: #00f`, the pure blue (`#0000ff`) of the dot in the monogram. The generated token `surface-2` (`#0000ff`) is renamed `accent`; `bg-alt` (`#f6f2f2`) and `placeholder` (`#f8f8f8`) are added from the variables. A cookie banner (iubenda) was hidden in the capture and is not part of the brand UI.

## Typography

Two or three faces: NeueMontreal-Bold (1334 characters, nearly all text, always uppercase at weight 400 as measured), NeueMontreal-Regular (23 characters) and PPNikkeiMaru-Medium, a high-contrast serif used for the large "WORKS" display on the 390px pass (70px / 70px); the giant italic serif lettering visible in the capture was not measured as a text run, and only the mobile h1 measurement confirms a size. Sizes by characters: 12px (1286), 25.6px (31), 14px (23), 28.16px (15), 102.4px (2). Roles: display (the h1 "WORKS") NeueMontreal-Bold 14px / 14px uppercase; nav 28.16px / 28.16px uppercase (the vertical "P A O L O V E N D R A M I N I" letter stack, 79px tall, 25.6px padding); link (project captions, e.g. "NIDABA 1982 STRATEGY BRANDING") 12px / 15.6px uppercase. No letter-spacing is measured. The Neue Montreal and PP Nikkei Maru font names are those the CSS loads; no substitute is declared beyond Helvetica and sans-serif.

## Layout

The grid is declared by variables: `--columns: 4`, `--gutter: 2rem`, `--width: 92vw`, 16 `--col-N` helper widths computed from them, `--offset` as the side margin ((100vw - width)/2), and `--height: 100lvh`, `--panel-height: 20svh`. A panel thumbnail clip is `--panel-thumb-clip: inset(10%,10%)`. In the capture each project occupies a full-width band: the hero panel, then bands that alternate between imagery and white. Captions are tiny compared with the imagery. Measured gaps: 7.04px, 11.9px, 3.5px, 55.296px and 27.648px; paddings 17.92px (23 elements), 25.6px, 12.8px. Spacing tokens: 3.5, 7.04, 11.9, 12.8, 17.92, 25.6, 27.65 and 55.3px.

## Elevation & Depth

No shadow or border was measured. The only layering is the white card over photography and the scrim (`#000000c6`) behind menu content. All depth is photographic.

## Shapes

One radius was measured, 16px (1 element), matching the root variable `--radius: 2rem`. Every other element computes to 0px, so the shape language is square: photographs, panels, the white card and the captions all have hard rectangular edges, and the single rounded element is the exception. The generated tokens carry only `xs: 16px`; no pill, button or input radius was measured because the page contains no such controls.

## Components

- **Menu list**: WORKS, ABOUT, CONTACT in white NeueMontreal-Bold uppercase, tiny, with a white dot marking the active item; a "Menu / Close" toggle also appears in the header per the fetched page.
- **Monogram**: "P — V" with a `#0000ff` dot, top left.
- **Project caption link**: black, 12px uppercase, 15.6px line height, 17.92px vertical padding, listing project name and discipline (for example "NIDABA 1982 / STRATEGY BRANDING").
- **Project card**: white panel with centred thumbnail over a full-bleed photo.
- **Scroll prompts** (copy only): "Keep Scrolling", "Click & Hold", "Scroll", "Discover".
- No buttons, inputs or forms were measured.

## Design System Architecture

No design system or brand guideline is published: the WebFetch of https://www.paolovendramini.com/ found none (only privacy and cookie policy links from iubenda and a "Credits" link to e-t.studio), and no search was run. The de-facto system is the set of 35 root variables: colors (`--c-bg`, `--c-bg-alt`, `--c-text`, `--c-text-alt`, `--c-accent`, `--c-placeholder`), radius (`--radius: 2rem`), a column grid helper family (`--col-1` to `--col-16`, `--gutter`, `--gutter-half`, `--gutter-double`, `--offset`, `--offset-half`, `--offset-double`) and viewport heights.

## Do's and Don'ts

- Do let photography fill the viewport and keep UI to tiny uppercase NeueMontreal.
- Do reserve the pure blue `#0000ff` for the dot in the monogram.
- Do use black `#000000` and white `#ffffff` only for type and cards.
- Do use the 16px radius only where a rounded element is needed.
- Don't add buttons, shadows or colored panels; none were measured.
- Don't treat the `#000000c6` overlay as a brand color.
- Don't document the cookie banner as UI.

## Responsive Behavior

Measured at 390px: the h1 "WORKS" becomes 70px / 70px in PPNikkeiMaru-Medium uppercase; sizes by characters were 12px (696), 25px (360), 18px (55), 14px (29), 22px (24), 16px (20) and 70px (17). Layout changes and breakpoints were not measured beyond those values.

## Iteration Guide

1. Canvas `#ffffff`, ink `#000000`, accent `#0000ff`, alt background `#f6f2f2`.
2. Set all UI text in NeueMontreal-Bold uppercase at 12px / 15.6px; reserve a serif display for large words.
3. Build the page as full-bleed panels on a 4-column, 2rem-gutter, 92vw grid.
4. Keep radius 0 except the 16px token.
5. Measure the serif display on desktop before reproducing it.

## Content and Imagery

Per the fetched page copy, the work list carries nineteen projects with discipline tags: Nidaba 1982 (Strategy, Branding); nu3 "Balance your health" (Strategy, Branding, Pack); La Viarte "Redefine Wine" (Strategy, Branding, Pack); Liende Collection; Zija; Sium; Coffee Foundation "Call Us Crazy" and its video manifesto; Desperados "The Beer With Latin Vibe" and its rebrand; Heineken "Social Off Socials"; Mechanical Body; Netflix "Stranger Things"; Gran Pavesi limited packaging; Olive Nostre; Licuori; Luppolina; Hyundai "Human"; and Enel X. The filter vocabulary is All, Strategy, Branding, Pack and Adv, and the interface copy is playful and instructional: "Keep Scrolling", "Click & Hold", "Looooading", "Scroll" and "Discover". The imagery in the capture is warm and saturated: terracotta, deep brown wood, sky blue and skin tones, shot close and cropped tightly, with little room for text. Type never competes with the pictures; it appears as tiny uppercase labels, or as oversized serif lettering used as a graphic element across a photograph. The pages beyond the home page (about, contact and the individual project pages under /works/) were not measured.
