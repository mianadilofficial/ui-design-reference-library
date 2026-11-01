---
version: alpha
name: PX PUSH
category: "Portfolio"
description: "PX PUSH is a retro-tech design subscription site: SemiSqueezed display type at 153.6px with -1.28px tracking, Mono 14px captions, ink #111111 and silver #bababa on #71737d and #1a1a1a, electric blue #03049c panels, a #00ff00 status dot and 6.4-12px radii with no shadows."
colors:
  canvas: "#71737d"
  page-body: "#1a1a1a"
  ink: "#ffffff"
  primary: "#00ff00"
  surface: "#03049c"
  surface-black: "#111111"
  ink-secondary: "#bababa"
  ink-white-70: "#ffffffb3"
  ink-light: "#d9d9d9"
  surface-pure-black: "#000000"
typography:
  display:
    fontFamily: SemiSqueezed, sans-serif
    fontSize: 153.6px
    fontWeight: 400
    lineHeight: 147.456px
    letterSpacing: "-1.28px"
  display-mobile:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 78px
    fontWeight: 400
    lineHeight: 74.88px
    letterSpacing: "-0.39px"
  body:
    fontFamily: SemiSqueezed, serif
    fontSize: 35.84px
    fontWeight: 400
    lineHeight: 35.84px
  nav:
    fontFamily: Graphik, sans-serif
    fontSize: 20px
    fontWeight: 400
  link:
    fontFamily: Mono
    fontSize: 14px
    fontWeight: 600
    letterSpacing: "-0.64px"
  button-secondary:
    fontFamily: Mono
    fontSize: 14px
    fontWeight: 400
    letterSpacing: "-0.64px"
rounded:
  xs: 6.4px
  sm: 12px
  pill: 9999px
spacing:
  s1: 2.56px
  s2: 3.84px
  s3: 6.4px
  s4: 7.04px
  s5: 7.68px
  s6: 8.96px
  s7: 10px
  s8: 10.24px
  s9: 12.8px
  s10: 17.92px
components:
  button-secondary:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.button-secondary}"
    padding: 6.4px 0px
    height: 36px
    borderColor: "{colors.ink-secondary}"
  link:
    textColor: "{colors.surface-black}"
    typography: "{typography.link}"
    padding: 12.8px 0px
    borderColor: "{colors.surface-black}"
  nav:
    textColor: "{colors.ink-light}"
  nav-link:
    textColor: "{colors.ink-light}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-pure-black}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.xs}"
    clipPath: inset(100% 0% 0% round 6.4px)
---

## Overview
Measured from https://pxpush.com/ (document title "PX PUSH — Design subscription service", scroll height 10058px). The page presents PX PUSH as an "On–Demand Design Department": per the opened page, a retained creative team on a flat monthly rate, with Works (branding, web, interface, performance creative), Benefits (async workflow, fixed pricing, 72-hour average delivery, shared workspace, flexible scaling), Packages (Standard and Pro) and a four-week Brand Sprint. The top navigation reads Index, About, Journal and "Get started" followed by a green dot.

The aesthetic imitates a vintage computer or CRT interface: the hero is a rounded, scan-lined screen with a chrome "px" oval logo floating over a cloud photograph, a giant marquee line "...ent ● On–Demand Design" in a condensed grotesque, and tiny monospaced terminal copy at the lower right ("V.02 ---- WELCOME TO PX PUSH ---- //", "THE DEPARTMENT IS OPEN. WE OPERATE AS A RETAINED CREATIVE DEPARTMENT ... AT SPEED."). A small thumbnail and "SCROLL DOWN TO ACCESS DEPARTMENT" sit at the lower left. Below the hero the capture shows large flat panels in grey (#71737d) and near-black (#1a1a1a) with arrow rows and thin rules; much content is not painted in the still capture (animated reveals), so layout facts are limited to measured values. The voice is confident and sales-led with retro-tech labels (Nº001, v.02).

## Colors
The site's root variables publish its palette: `--primarycolor: #bababa`, `--bgcolor: #1a1a1a`, `--green: #0f0`, `--lightgrey: #71737d`, `--grey: #bababa`, `--pink: #a7849d`, `--black: #111`, `--blue: #03049c`, `--lightblue: #9fe4f3`, `--cream: #bab5a6`, `--red: #ff001a`. Measured backgrounds by area: `surface` #03049c (9955, by far the largest area, the electric blue panels), `surface-black` #111111 (2711), `canvas` #71737d (1869), `page-body` #1a1a1a (1833), #bababa (86), `surface-pure-black` #000000 (82).

Text colors by characters: `ink-secondary` #bababa (1965), `ink-white-70` #ffffffb3 (1022, the hero microcopy), #111111 (962), `ink-light` #d9d9d9 (921, nav), `ink` #ffffff (280), #03049c (26, blue text on silver buttons), #1a1a1a (22), and `primary` #00ff00 (1, the status dot beside "Get started"). Borders: #ffffffb3 (10), #bababa (2), #111111 (1); `--border: 1px solid hsla(0,0%,100%,.7)` is the site's declared hairline.

## Typography
Three loaded faces: "SemiSqueezed" (1993 chars; a condensed grotesque used for display and the 35.84px body), "Mono" (3184 chars; captions, links, buttons) and "Graphik" (navigation). "obviously" (13 chars) and Arial (9 chars) appear marginally. All are loaded at weight 400 only; the 600 weight on 23 chars is synthesized. No foundry pages were opened.

Roles: `display` SemiSqueezed 153.6px/147.456px, letter-spacing -1.28px ("● PX PUSH", 224 chars); `body` SemiSqueezed 35.84px/35.84px (the "Do you need top-tier creative talent..." paragraph); `nav` Graphik 20px; `link` and `button-secondary` Mono 14px with -0.64px tracking. The mobile pass uses Arial 78px/74.88px for the h1 "● On–Demand Design Department". Sizes by characters: 14px (1736), 35.84px (1580), 10px (1448, tiny mono labels), 153.6px (224), 52px (84), 76.8px (51), 42px (28), 20px (27), 21px (13), 9.6px (7). Tracking is negative almost everywhere (-0.64px on 14px and 10px mono).

## Layout
A 70px header, a hero of 170vh (`--bannerHeight: 170vh`), then stacked full-width panels on a 20-column grid (`--columns: 20`). Large paddings: 25.6px (35 uses), 6.4px (31), 38.4px (27), 12.8px (16), 19.2px (14), 3.84px, 10.24px, 8.96px, 160px; gaps 7.68px (6) and 32px (2). Many values are multiples of 1.28 (12.8, 25.6, 38.4, 153.6). Header link counts and card columns are not recorded for this site.

## Elevation & Depth
No box shadows are measured. Depth is created with full-bleed color blocks, thin white rules at 50-70% alpha (`--borderFade: 1px solid hsla(0,0%,100%,.5)`), a scan-line texture and vignette over the hero screen, and clip-path reveals on cards (`clip-path: inset(100% 0% 0% round 6.4px)` measured before reveal).

## Shapes
Radii by weight: 12px (30), 6.4px (8), 999px (1). The hero screen and thumbnails use 12px corners; chips and reveal cards use 6.4px; one pill. The overall shape language is a rounded screen frame with sharp interior elements and 1px rules.

## Components
- **button-secondary** ("LinkedIn ↗"): transparent, #bababa text and 1px #bababa border, Mono 14px/400 with -0.64px tracking, padding 6.4px 0, height 36px, no radius.
- **link**: Mono 14px/600, padding 12.8px 0, #111111 underline border on light panels.
- **nav / nav-link**: Graphik 20px #d9d9d9 text, 70px header; on hover the text scrambles (the measured hover swaps "About" for "@*%qv") without a color change.
- **card**: #000000 background, 6.4px radius, clip-path reveal.
- A mobile call to action "Get started with Brand Sprint ↗" is #03049c text on a #bababa fill, Mono 14px, padding 10px, 350 x 42px at 390px width (mobile pass only).

## Design System Architecture
No public design system exists on https://pxpush.com/: no brand guidelines, design system or credit links are on the opened page ("Brand Guidelines" appears only as a Brand Sprint deliverable; other links are About, Journal, Terms, Privacy and social profiles). The de-facto system is a 16-variable stylesheet: named colors (blue, green, pink, cream, red, lightblue, greys), `--columns: 20`, `--bannerHeight: 170vh`, and two border shorthands. Many measured sizes are multiples of 1.28.

## Do's and Don'ts
- Do use #03049c blue panels, #1a1a1a and #111111 darks and #bababa silver text.
- Do set display lines in SemiSqueezed at huge sizes with negative tracking.
- Do set captions in 10-14px Mono with -0.64px tracking.
- Don't use the #00ff00 green for anything except a single status dot or similar signal.
- Don't add drop shadows.
- Don't set body text in Mono; the intro paragraph is 35.84px SemiSqueezed.

## Responsive Behavior
At the 390px mobile pass the h1 becomes Arial 78px/74.88px with -0.39px tracking (from SemiSqueezed 153.6px), body text drops to 30px/30px in a 350px column, and the call to action is a full-width 350px silver button. Mobile size frequencies: 14px (1736 chars), 30px (1597), 10px (1408), 78px (224), 24px (67), 39px (51). Navigation behavior on mobile is not measured.

## Iteration Guide
1. Fill with #1a1a1a, #111111 and one #03049c panel per section; silver #bababa text.
2. Giant SemiSqueezed lines with -1.28px tracking; Mono captions.
3. Round hero screens at 12px; use 1px #ffffffb3 rules.
4. Keep the single green dot as the only #00ff00 usage.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=px-push --url=https://pxpush.com/ --force --no-motion` after changes.

## Imagery and Content Notes
The hero uses a single photographic cloudscape in teal-to-white tones, treated with horizontal scan lines and a dark rounded vignette so it reads as a screen. Over it sits a chrome, bevelled "px" oval emblem. The marquee headline is cropped by the frame edges at both sides. Sub-sections the capture shows after the hero are flat and typographic: a bullet marker at the left, a right arrow, a long hairline-separated list whose rows end in diagonal arrows, and a black footer band that repeats the bullet and arrow pattern. Section markers use numerals (Nº001) and version labels (v.02) in small Mono capitals. Pricing and package facts come from the opened page: Standard from ,500 a month with one request at a time, Pro at ,500 a month with two requests and Framer or Webflow development, and a Brand Sprint of four weeks from ,000. The text voice repeats "without the headaches" and promises async work with a 72-hour average delivery time.
The three-line statement of the product, "Do you need top-tier creative talent...", is set at the 35.84px body size in dark #111111 on the grey panel, which makes the largest running text on the page nearly as tall as a headline on most sites. Monospaced labels at 10px dominate the character count (1448 chars at 10px against 1580 at 35.84px), so the page alternates between very large and very small type with little in between: only 52px, 76.8px, 42px and 20px appear in the middle range.
