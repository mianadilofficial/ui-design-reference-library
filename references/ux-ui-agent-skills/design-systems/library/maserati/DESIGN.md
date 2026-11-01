---
version: alpha
name: Maserati
category: "Luxury"
description: "Maserati global site: a white and near-black #02070d luxury canvas, one saffron-yellow #ffc845 square button (54px tall, 11px uppercase Everett Medium at +1px tracking), giant uppercase Everett Light headlines at 92px with -3.68px tracking, and cinematic full-bleed car video."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffc845"
  surface-night: "#02070d"
  surface-ui: "#0d0d0d"
  ink-label: "#757575"
typography:
  display:
    fontFamily: Everett-Light, sans-serif
    fontSize: 60px
    fontWeight: 500
    lineHeight: 64px
    letterSpacing: "-2px"
  display-mobile:
    fontFamily: Everett-Light, sans-serif
    fontSize: 35px
    fontWeight: 500
    lineHeight: 39px
    letterSpacing: "-1px"
  heading:
    fontFamily: Everett-Light, sans-serif
    fontSize: 92px
    fontWeight: 300
    lineHeight: 87.4px
    letterSpacing: "-3.68px"
    textTransform: uppercase
  body:
    fontFamily: Everett, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: 0.14px
  button:
    fontFamily: Everett-Medium, sans-serif
    fontSize: 11px
    fontWeight: 400
    lineHeight: 15px
    letterSpacing: 1px
    textTransform: uppercase
  link:
    fontFamily: Everett, sans-serif
    fontSize: 11px
    fontWeight: 500
    lineHeight: 15px
    letterSpacing: 1px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 2.5px
  md: 66.67px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 21px
  s10: 22px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 54px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.surface-night}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 24px 125.438px
---

## Overview

The Maserati global site (`https://www.maserati.com/global/en`, title "Official International Website | Maserati", measured 1280px wide and 8064px tall) is a cinematic luxury-automotive page. Its meta description reads: "Elegance, style, sportiness, and performance with a long and glorious heritage. Visit the official website and discover Maserati, a tradition of innovation." The structure is a sequence of big statements and big media: a hero carousel with circular white previous/next buttons and a saffron "BUILD YOUR OWN" button at the top right; a centered white-background statement "LUXURY, EVERY DAY" with the subline "THE ITALIAN GRAN TURISMO: EFFORTLESS LUXURY PERFORMANCE"; a full-bleed video of a teal car front with a "PLAY THE MOVIE" underlined link at left, a round pause button at right and an animated caption that begins with an italic serif "New" ("New Front Bumper and Gr..."); then another centered headline "AN EXTRAORDINARY MODEL RANGE" at 92px, followed by model cards.

In the stored capture the hero carousel area is blank white because its media did not load; nothing is documented about hero artwork beyond that. A model block titled "MCPURA" (60px white, weight 500) with the uppercase line "UNPRECEDENTED CUSTOMIZATION, FROM CONCEPT TO DELIVERY" appears on a dark photograph. Copy is concise, uppercase and aspirational: model names, short claims, and quiet functional labels.

The page alternates between two registers. The white statement bands are almost austere: one line of light uppercase type, one smaller subline and a great deal of empty space. The dark bands are immersive: the car fills the width, controls are reduced to a single underlined link and a round pause button, and captions animate over the footage. The yellow button appears at the top of the page and again inside model blocks, so the same call to action is available at the start of each major section.

## Colors

- **Canvas `#ffffff`**: statement sections (3226 weight).
- **Surface-night `#02070d`** (`--c-bg`, `--c-bg-surface`): the largest background area (5213), the dark editorial sections and the footer.
- **Surface-ui `#0d0d0d`** (`--c-ui-100`): dark UI panels and overlays; translucent variants `#0d0d0d66` and `#000000b3` (a 70% black gradient, declared `--gradient: rgba(0,0,0,0.7)`) sit over imagery.
- **Ink `#000000`** on white; white `#ffffff` text is the most-read text color (2094 character-weight) because most copy sits on photographs and dark bands.
- **Primary `#ffc845`** (`--c-accent`): the saffron-yellow of the "BUILD YOUR OWN" and "DISCOVER MORE" buttons and a thin progress rule under the hero (measured as a 45-weight background and 86-weight text color).
- **Ink-label `#757575`** (`--c-label`): declared label grey.

The stylesheet also contains the full Bootstrap 4 variable set (`--primary: #007bff`, `--danger: #dc3545`, `--yellow: #ffc107`, `--green`, `--indigo`, `--teal`, `--pink` and so on, plus 576/768/992/1200px breakpoints). Those are framework defaults and are not brand colors; the brand yellow is `#ffc845`, not Bootstrap's `#ffc107`.

## Typography

Three Everett faces are loaded as separate families: **Everett-Light** (headings), **Everett** (body and links) and **Everett-Medium** (buttons), with an `icomoon` icon font. All fall back to `sans-serif`.

- **Heading** (Everett-Light 300, 92px / 87.4px, -3.68px tracking, uppercase): "AN EXTRAORDINARY MODEL RANGE".
- **Display** (Everett-Light, 60px / 64px, -2px tracking; the computed weight is 500): model names such as "MCPURA"; 35px / 39px with -1px tracking on mobile.
- **Body** (Everett 400, 14px / 19.6px, +0.14px tracking).
- **Button** (Everett-Medium, 11px / 15px, +1px tracking, uppercase).
- **Link** (Everett 500, 11px / 15px, +1px tracking, uppercase).

Tracking is tight on large text (-4% of size) and loose on small uppercase labels (+1px at 11px), which creates the contrast between monumental headlines and fine-print controls. Everett is a commercial face; the declared fallback is the generic sans-serif.

## Layout

Layout is a succession of full-bleed bands, alternating white statements and dark or photographic bands, with centered text blocks and media that fill the viewport width. The spacing system is a named rem scale: `--s-5xs` 0.125rem, `--s-4xs` 0.25rem, `--s-3xs` 0.5rem, `--s-2xs` 0.75rem, `--s-xs` 1rem, `--s-2s` 1.25rem, `--s-s` 1.5rem, `--s-m` 2rem, `--s-ml` 2.5rem, `--s-l` 3rem, `--s-lxl` 3.5rem, `--s-xl` 4rem, `--s-2xl` 5rem, `--s-3xl` 7rem, `--s-4xl` 8rem, `--s-5xl` 10rem, `--s-6xl` 13rem and `--s-7xl` 18rem. Measured paddings were led by 24px (35 elements), then 10px, 16px, 21px, 5px, 1px and 6px; the footer has `24px 125.438px` padding.

## Elevation & Depth

Three shadows were measured: `rgba(0, 0, 0, 0.3) 1px 0px 20px 0px` (2 elements), `rgba(0, 0, 0, 0.08) 0px 10px 20px 0px` (2 elements, a soft drop under raised controls such as the circular arrows) and `rgba(0, 0, 0, 0.16) 0px 24px 70px 0px` (1 element, a large ambient shadow for an overlay). Elsewhere depth is photographic: video, gradient scrims (`rgba(0,0,0,0.7)`) and dark panels.

## Shapes

Buttons and links are square (`none 0px`). Measured radii: `50%` on 6 elements (the round arrow and pause buttons), `2.5px`, `66.67px` and `2px` on two elements each. Tokens: `none 0px`, `xs 2px`, `sm 2.5px`, `md 66.67px`, `pill 9999px`.

## Components

- **Primary button** ("BUILD YOUR OWN", "DISCOVER MORE"): saffron `#ffc845` fill, 54px tall (236px wide in the measured instance), 0px radius, 11px uppercase Everett-Medium with +1px tracking, no radius, no border. The text color of the measured instance was not captured, and the capture shows dark text on the yellow.
- **Round carousel buttons**: white circles with small chevrons and a soft shadow, left and right of the hero.
- **Progress rule**: a thin yellow line under the hero indicating slide progress.
- **Text link** ("PLAY THE MOVIE"): 11px uppercase white text with an underline.
- **Pause button**: a white circle at the lower right of the video.
- **Footer**: `#02070d` background, white text, padding `24px 125.438px`.

## Design System Architecture

No public design system, token package or brand guideline was found: the home page was the only page opened and it links to none. The shipped CSS is a Bootstrap 4 base (default color, breakpoint and font variables) extended with Maserati-specific variables: `--c-bg`, `--c-bg-surface`, `--c-ui-100`, `--c-accent`, `--c-label`, `--c-white`, the `--s-*` spacing scale, and the `--app-height*` viewport helpers. The extraction listed these in `:root`.

## Do's and Don'ts

Do:
- Use black, white and near-black `#02070d` as the base and saffron `#ffc845` only for the primary action and the progress rule.
- Set headlines in Everett Light uppercase with strongly negative tracking and small controls in 11px uppercase with +1px tracking.
- Keep buttons square.
- Let full-bleed car photography and video carry each section.

Don't:
- Don't use Bootstrap's default blue `#007bff` or yellow `#ffc107`.
- Don't round the main buttons.
- Don't add accent colors; only one was measured.
- Don't set long paragraphs: the page uses short uppercase statements.

## Responsive Behavior

On the mobile pass the display size dropped to 35px / 39px with -1px tracking (desktop 60px / 64px). Mobile font-size weights were led by 14px (974), 22px (539), 11px (411), 18px (187), 35px (157) and 24px (90). The CSS declares Bootstrap breakpoints at 576px, 768px, 992px and 1200px, but which ones this site's layout uses is not measured, and mobile layout and navigation are not measured.

## Iteration Guide

1. Start with a white canvas for statements and `#02070d` for dark bands.
2. Set statements in Everett Light uppercase at 92px / 87.4px with -3.68px tracking.
3. Make the one primary button saffron `#ffc845`, 54px tall, square, with 11px uppercase labels.
4. Use full-bleed video and photography, with a 70% black gradient where text overlaps.
5. Measure hover and focus before documenting; none was recorded on this page.
