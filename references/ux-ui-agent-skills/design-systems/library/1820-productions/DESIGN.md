---
version: alpha
name: 1820 Productions
category: "Portfolio"
description: "1820 Productions (Irving, Texas video production company) site: near-black #0a0a0a canvas with #f7f7f7 text, 72px weight 600 Suisseintl Condensed headlines, Suisseintl 24px weight 300 body, uppercase 12.5px nav labels, 2.08px radius and full-bleed film stills."
colors:
  canvas: "#0a0a0a"
  ink: "#f7f7f7"
  primary: "#f7f7f7"
  surface-footer: "#0f0f0f"
  ink-muted: "#ffffff66"
typography:
  display:
    fontFamily: "\"Suisseintl Condensed\", Arial, sans-serif"
    fontSize: 72px
    fontWeight: 600
    lineHeight: 72px
    letterSpacing: "-1.44px"
  display-mobile:
    fontFamily: "\"Suisseintl Condensed\", Arial, sans-serif"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 30px
    letterSpacing: "-0.6px"
  body:
    fontFamily: Suisseintl, Arial, sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 28.8px
    letterSpacing: "-0.48px"
  body-mobile:
    fontFamily: Suisseintl, Arial, sans-serif
    fontSize: 22.5px
    fontWeight: 300
    lineHeight: 27px
    letterSpacing: "-0.45px"
  eyebrow:
    fontFamily: Suisseintl, Arial, sans-serif
    fontSize: 12.5px
    fontWeight: 300
    lineHeight: 12.5px
    letterSpacing: "-0.125px"
    textTransform: uppercase
  nav:
    fontFamily: Suisseintl, Arial, sans-serif
    fontSize: 12.5px
    fontWeight: 500
    lineHeight: 12.5px
    letterSpacing: "-0.125px"
  link:
    fontFamily: "\"Suisseintl Condensed\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-0.16px"
rounded:
  xs: 2.08px
spacing:
  s1: 2.08px
  s2: 4.96px
  s3: 8px
  s4: 9.6px
  s5: 16px
  s6: 18px
  s7: 18.08px
  s8: 24px
  s9: 36px
  s10: 48px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 16px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    padding: 200px 0px 44.8px
---

## Overview

1820 Productions presents itself as a video production and media company. The page fetched from the live site lists an Irving, Texas address (although the page title says "Dallas"), a "Work" section of client films (Haggar "Hidden Seams", Dave's Killer Bread "Sit Ups", Veterans Land Board "Don't Ignore"), a "Services" section headed "Stuff we're really good at" with the line "Stylish production. Seamless execution.", a "Clients and Partners" section titled "Brands who swiped right.", and the About line "We're not a cult. But people do keep coming back."

The measured home page (1280px wide, 7,434px tall, 1,192 visible elements) is a stack of full-bleed film stills and video frames separated by thin horizontal rules with a "+" at each end and a centred label (WORK, OUR SERVICES). In the capture, the first screen is a close shot of hands at a piano with the title "VETERANS LAND BOARD" and the sub-line "Don't Ignore", a slide counter "03 | | ▭ 03", and a logo lockup of "1820 PRODUCTIONS" at the top centre. A second panel shows the large line "WE LISTEN. WE CRAFT. WE DELIVER." over a commercial still with a bracketed "[EXPLORE MORE WORK]" link. A third panel shows "STYLISH PRODUCTION. SEAMLESS EXECUTION." over a stunt still.

The interface is deliberately minimal so that the footage carries the colour. Copy is playful and confident ("Got a vision? We've got caffeine and emotional availability."). The only interface colours are near-black and off-white.

## Colors

- **Canvas `#0a0a0a`**: body background and largest background by area (20,912 weight). Root variable `--_color---swatch--dark--base` is `oklch(.1448 0 0)`.
- **Ink `#f7f7f7`**: 772 of 830 measured text characters. Root variable `--_color---swatch--light--base` is `oklch(.9761 0 0)`.
- **Primary `#f7f7f7`**: no filled call-to-action was detected, so the interface accent is the ink colour itself, used for links and the nav.
- **Footer surface `#0f0f0f`**: the footer background.
- **Muted text `#ffffff66`**: secondary text at 40% white (54 characters).
- **Translucent surfaces** `#32323233` (3,159 area weight) and `#19191966` appear as backgrounds over imagery. They are overlay tints, not brand colours.

The root variables also define a grey ramp in OKLCH (gray-300 `oklch(.872 0 0)` to gray-900 `oklch(.21 0 0)`), dark and light opacity steps from 5% to 80%, and a brand colour `--_color---swatch--brand: oklch(.6504 .2355 26.83)`, a saturated red. The brand variable is declared, but no element on the measured home page displayed it as a computed colour, so it is not given a hex token.

## Typography

Two families from one superfamily: **Suisseintl** (469 characters; loaded at weights 400 and 500) and **Suisseintl Condensed** (361 characters; loaded at 500 and 600). Root variables map `--_font---primary-font--font` to the condensed face and `--_font---secondary-font--font` to the regular, both with an Arial fallback, plus a mono face, "Geistmono Variablefont Wght".

- **Display, Suisseintl Condensed 72px / 600 / 72px, -1.44px**: the section headlines ("WE LISTEN. WE CRAFT. WE DELIVER.") in capitals. The extractor mistook a "VIEW" label for the h1; the real headline role is the h2.
- **Body, Suisseintl 24px / 300 / 28.8px, -0.48px**: the large intro lines.
- **Eyebrow, Suisseintl 12.5px / 300, uppercase, -0.125px**: small labels such as "VIEW".
- **Nav, Suisseintl 12.5px / 500, -0.125px**: WORK, SERVICES, ABOUT, BTS, HOME, LET'S TALK, MENU.
- **Link, Suisseintl Condensed 16px / 400, -0.16px**: client titles such as "HAGGAR".
- Also measured: 14px (227 characters, tracking -0.14px).

Every size carries negative tracking close to -2% of the size (for example 72px with -1.44px, 24px with -0.48px, 16px with -0.16px). The root variables define a size ladder (`--_typography---size--h1` 4.5rem, h2 3.8rem, h3 2.5rem, display 6rem up to display-3xl 12rem), of which only 72px was seen on the home page. No foundry pages were opened, so no licence statement is made.

## Layout

The container is declared as `clamp(992px, 100vw, 1920px)` with 12 columns (`--root--columns: 12`) and a gutter of 0.6rem (`--root--gutter`). The page is full-bleed: images and video span 1280px, and text is centred. The nav bar is 107px high on desktop with 16px vertical padding; the work list shows the numbered counter and a centred title over the image. The footer is 732px high with padding `200px 0px 44.8px`. Measured gaps are 2.08px, 9.6px, 24px and 18.08px, with larger gaps of 192px and 240px between sections; paddings include 16px (18 uses), 48px, 128px, 144px, 200px, 240px and 368px. The ten spacing tokens are the smaller of these steps. Space between sections is very large compared with the type size, in keeping with a cinematic pace.

## Elevation & Depth

No box shadows were measured. Depth comes from photography and video frames; text sits directly on the footage with a darkening tint (`#19191966`, `#32323233` backgrounds). Section rules are 1px lines in off-white (`#f7f7f7` border, 3 uses; `#ffffff14` border, 2 uses). There are no cards or elevated surfaces.

## Shapes

One radius was measured: `2.08px` (4 uses), a near-square edge that matches the small bracketed and boxed controls such as the slide indicator and the "LET'S TALK" and "MENU" labels in the top bar. Everything else, including the full-bleed stills, is rectangular. There are no pills or circles in the measurements.

## Components

- **Top bar**: the logo lockup "1820 PRODUCTIONS" centred; WORK, SERVICES, ABOUT and BTS at top left in 12.5px; "LET'S TALK" and "MENU" at top right in small boxes. The measured header is 1,280px wide and 107px tall, text `#f7f7f7`.
- **Hero slider**: full-bleed footage, a condensed capital title, a small sub-line, and a counter "03 | | ▭ 03".
- **Section divider**: a hairline with "+" at both ends and a centred small-caps label.
- **Text link**: condensed capitals, `#f7f7f7`, in brackets for "EXPLORE MORE WORK".
- **Footer**: `#0f0f0f` background, the large 24px line "Got a vision? We've got caffeine and emotional availability.", contact details and social links.

Hover states: not recorded.

## Design System Architecture

No public design system or brand guidelines were found. The site's home page (https://www.1820productions.com/) shows only social profile links (Instagram, Vimeo, LinkedIn, Facebook) and no press or brand section. The de-facto system lives in root CSS variables with a structured naming scheme: `--_color---swatch--*` (dark, light, gray and brand ramps), `--_typography---size--*` (xs to display-3xl), `--_typography---spacing--*` (letter-spacing values such as -.04em), `--_spacing---spacing--*` (xxxs .125rem to 3xl 5rem), `--_font---*` (weight maps for primary, secondary and mono fonts), `--root--*` (container, gutter, columns) and easing curves (`--quart-out: cubic-bezier(0.25, 1, 0.5, 1)`, `--quart-in-out: cubic-bezier(0.78, 0, 0.22, 1)`).

## Do's and Don'ts

- Do keep the page near-black (`#0a0a0a`) with `#f7f7f7` text and let film stills supply colour.
- Do set headlines in condensed capitals at weight 600 with negative tracking.
- Do use hairline rules with a "+" and a small-caps label to divide sections.
- Do write short, wry copy.
- Don't add filled buttons or accent colours; none were measured on the page.
- Don't use rounded corners above 2.08px.
- Don't add shadows or card surfaces.
- Don't use the `oklch(.6504 .2355 26.83)` brand variable as a measured on-page colour; it was not seen as a computed style.

## Responsive Behavior

The mobile pass (390px wide) recorded: the h2 at 30px / 600 with 30px line height and -0.6px tracking (72px on desktop); body at 22.5px / 300 with 27px line height (24px on desktop); nav labels at 16px with a header 68px high (107px on desktop), showing HOME, LET'S TALK and MENU only; the eyebrow label at 11.7188px / 500. Mobile character-weighted sizes were 30px, 13.125px, 11.7188px, 16px and 22.5px. The container variable has a 992px minimum. Behaviour of the footage and divider sections on mobile was not measured.

## Iteration Guide

1. Start with `#0a0a0a`, `#f7f7f7` and one muted white `#ffffff66`.
2. Headlines: Suisseintl Condensed 72px / 600, capitals, -1.44px tracking; body Suisseintl 24px / 300.
3. Keep corners at 2.08px or square.
4. Put UI over footage with a dark tint; no shadows.
5. If you need the red brand accent, measure it on a rendered element first.
6. Run `node web/scripts/verify-designs.mjs --slug=1820-productions` after edits.
