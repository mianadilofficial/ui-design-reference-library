---
version: alpha
name: Meer Mohsin
category: "Agencies & Studios"
description: "Meer Mohsin portfolio: pure black #000000 canvas, white text, blood-red #d60407 headline and #990000 secondary red, 170.66px uppercase light-font display, ruthie script at 202.66px, Neue Montreal preloaded, pill radii and a flame-footer."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#d60407"
  blood-red: "#990000"
  surface-near-black: "#090909"
  ink-soft: "#f5f5f5"
  ink-dim: "#ffffff65"
  hairline: "#ffffff71"
typography:
  display:
    fontFamily: light-font
    fontSize: 170.66px
    fontWeight: 700
    lineHeight: 136.528px
    textTransform: uppercase
  display-mobile:
    fontFamily: regular-font
    fontSize: 48.7481px
    fontWeight: 100
    lineHeight: 48.7481px
  heading:
    fontFamily: regular-font
    fontSize: 138.661px
    fontWeight: 100
    lineHeight: 117.862px
  body:
    fontFamily: light-font
    fontSize: 26.6656px
    fontWeight: 400
    textTransform: uppercase
  nav:
    fontFamily: light-font
    fontSize: 12.7995px
    fontWeight: 200
    lineHeight: 12.7995px
  input:
    fontFamily: light-font
    fontSize: 12.7995px
    fontWeight: 400
    textTransform: uppercase
rounded:
  xs: 319.99px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 2.56px
  s4: 3.2px
  s5: 5.33px
  s6: 6px
  s7: 6.4px
  s8: 10.67px
  s9: 21.33px
  s10: 32px
components:
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink-soft}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink-soft}"
    typography: "{typography.input}"
    padding: 1px 2px 5.33312px
    height: 24px
  footer:
    textColor: "{colors.blood-red}"
---

# Meer Mohsin

Measured from https://www.meermohsin.me/ (final URL identical; title "Meer Mohsin | Front-End Developer, UI/UX Designer & 3D Web Developer"), 1280px desktop pass (page height 25,042px) and 390px mobile pass. A creative developer's immersive portfolio.

## Overview

The site is a cinematic black-and-red poster. The first screen is a photographic portrait of the author with a red tribal-ornament mask over the eyes, a white oversized marquee line behind and across the head ("IT WAS ALWAYS GOING TO BE THIS WAY."), small white captions at the corners ("Visual Storyteller / UI/UX Designer / 3D Web Developer"), and a row of three labels separated by plus marks: TENSION, IMMERSION, IMPACT. The background goes from `#d60407` red at the top right to black. Below, the headline "THIS WILL FEEL DIFFERENT" is set in `#d60407` uppercase light-font, with the word FEEL in a swashed script (the `ruthie` face) laid across the lines. A paragraph in red uppercase follows ("I don't just build websites, I create experiences that people enjoy exploring..."), then a band of red flame illustrations. Further down: "AWARDS & RECOGNIZATIONS" in `#990000` at 138.661px, a contact form ("Get in touch") and a footer repeating the marquee line in giant script.

Structured data embedded in the page describes the author as "Creative developer specializing in immersive, cinematic web experiences using Three.js, GSAP, WebGL, and modern front-end technologies." The HTML includes a `three-container` element for the 3D layer.

## Colors

The palette is two reds on black and white.

- **Canvas `#000000`**; near-black panel `#090909`; `#222222` and `#ffffff10` as faint panels.
- **Ink `#ffffff`**; softer `#f5f5f5` (nav links, form text), `#f1f1f1` (body element), and `#ffffff65` for dimmed text; hairlines `#ffffff71`.
- **Primary `#d60407`**: bright red. It colors the H1 ("THIS WILL FEEL DIFFERENT"), the body paragraph and the top-right gradient stop; it is the largest-weight saturated text color (212 characters).
- **Blood red `#990000`**: the most-used text color by characters (812, e.g. "AWARDS & RECOGNIZATIONS") and the largest background area (3,028); it is the secondary brand red.
- `#99000010` and `#ee2929` appear in backgroundColorsByArea (the latter with weight 0), and are not assigned roles.

Measured backgrounds by area: `#990000` (3,028), `#000000` (1,080), `#090909` (1,024), `#222222` (696), `#99000010` (693), `#ffffff10` (14).

## Typography

Three loaded font families, named in the CSS as `light-font`, `regular-font` and `ruthie`. The HTML head preloads `/fonts/NeueMontreal.woff2`; the extraction itself reports only the family names above, so the mapping of those names to that file is not asserted. `ruthie` is the script face (134 characters) used for the swashed word and the footer; `regular-font` covers 1,165 characters and `light-font` 552.

Scale: display 170.66px/136.528px weight 700 uppercase (H1), heading 138.661px/117.862px weight 100 (section headings), a 202.659px script size (footer, 140 characters), body 26.6656px weight 400 uppercase (red paragraph), 15.9994px (532 characters, the most common), nav 12.7995px/12.7995px weight 200, inputs 12.7995px uppercase, small 10.6662px. Mobile: display 48.7481px weight 100 ("GET IN TOUCH", regular-font), section heading 42.2483px/35.9111px.

Weight 100 and 200 carry the large display and nav text; 400 carries 1,566 characters. The style is hair-thin enormous type against thin small captions.

## Layout

A long single page (25,042px) of full-width sections. Measured paddings: 31.9987px (13), 21.3325px (7), 2px, 1px, 10.6662px; gaps 3.19987px (22), 10.6662px, 5.33312px, 2px. Text blocks span nearly the full width (the red paragraph 1,152px wide), and headings span the 1280px width. The menu lists HOME, ABOUT, SERVICES, WORK, BLOG, CONTACT, followed by a social list (Instagram, Behance, TikTok) and a "MY E-MAIL" link.

## Elevation & Depth

Depth is atmospheric: red-to-black gradients, a masked portrait and an illustrated flame band, not shadows. The only measured shadow is `rgba(17, 17, 17, 0.05) 0px 0px 0px 7.42603px`, a faint 7.4px ring. Borders: `#ffffff71` (3), `#ffffff14`, `#f3f3f3`, `#000000`.

## Shapes

Radii measured: `533.312px` (4 elements), `319.987px` (1) and `746.637px` (1), all large enough to render as full pills or circles. Tokens: `xs` 319.99px and `pill` 9999px. No rounded rectangles were measured; images and text blocks are square.

## Components

- **Marquee headline:** white, very large, scrolling behind the hero portrait.
- **Hero captions:** small white 12.8px uppercase labels in corners.
- **Three-step label row:** TENSION, IMMERSION, IMPACT with plus marks between.
- **Nav links:** light-font 12.7995px weight 200 `#f5f5f5`; the menu is a panel with a close icon (an X drawn in `#E6E6E6`).
- **Text input:** `#f5f5f5` text, light-font 12.7995px uppercase, 512px wide, 24px tall, padding `1px 2px 5.33312px`, no border fill; the form's inputs are name, phone, email and a message textarea with placeholders "Your Good Name", "Your Number", "Your Email" and "Please type your concern here!", ending in a "Submit" input.
- **Footer:** an 800px-tall block whose background is a gradient from `rgb(214, 4, 7)` to `rgb(0, 0, 0)` at 50%, with the ruthie marquee in `#990000`.
No filled button or card was detected, so none is declared.

## Content and Voice

Copy is read from the home page HTML. The hero says "I create digital experiences that aren't just seen, they're felt. From the first impression to the smallest interaction, I focus on making every experience clear, immersive, and memorable." The marquee phrase "It Was Always Going to Be This Way." is repeated so it can loop. A middle block reads "Each one different. Each one demanding something sharper. Each one pushed beyond the obvious." followed by "Learning fast. Moving faster." and "Design attracts attention. Development brings it to life." A section is labeled "LEGACY". A prompt near the top reads "CLICK ANYWHERE TO ACTIVATE THE EXPERIENCE" with a "000" counter, which signals an interactive entry layer. The tone is declarative, short-sentenced and slightly theatrical; every label is uppercase.

Imagery is delivered as lazy-loaded AVIF files at 1200 by 800 (a face portrait, six service images named SERVICES-1 through SERVICES-6). Image alt text and the visible "lorem ipsum" block show that part of the page still contains placeholder text.

## Design System Architecture

No public design system or brand guide exists for this portfolio; the pages opened (https://www.meermohsin.me/) link only to social profiles (Instagram, TikTok, Behance). The :root exposes no custom properties (rootVars is empty), so the system is bespoke CSS with three font-face names, absolute color values and a Three.js container. The embedded JSON-LD lists the author's stack: JavaScript, HTML, CSS, SCSS, Three.js, GSAP, WebGL.

## Do's and Don'ts

- Do keep the page black with white text and use `#d60407` for the single loudest statement per screen; use `#990000` for secondary headings.
- Do mix hair-thin giant sans with the ruthie script for one emphasized word.
- Do use uppercase for body copy and captions.
- Don't use rounded rectangles; only pill/circle radii were measured.
- Don't add drop shadows; depth comes from gradients and imagery.
- Don't use filled buttons: none were measured.
- Don't treat the lorem ipsum placeholder paragraph in the mobile body role as brand copy.

## Responsive Behavior

Measured at 390px: H1-class heading "GET IN TOUCH" 48.7481px/48.7481px weight 100 in regular-font (390px wide), the "AWARDS & RECOGNIZATIONS" heading 42.2483px/35.9111px weight 100 in `#990000`. The mobile body role captured placeholder "Lorem ipsum" text. Column and menu behavior at mobile width were not measured.

## Iteration Guide

1. Black canvas, white ink, `#d60407` and `#990000` as the only chromatic colors.
2. Display in a hair-weight grotesque at 138px to 170px, uppercase; script accent at 202px.
3. Apply gradients from `#d60407` to black for atmosphere; no shadows.
4. Use only pill/circle radii.
5. Run `node web/scripts/verify-designs.mjs --slug=meer-mohsin`.
