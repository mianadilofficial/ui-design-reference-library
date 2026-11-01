---
version: alpha
name: "Glitch&Grit"
category: "Portfolio"
description: "Glitch&Grit creative studio portfolio: pure #000000 canvas, #fffbf6 warm white, brand green #9be187 and a cyan #99f8ff, elza at weight 900 uppercase 140.274px with -7.0137px tracking, 14px weight 600 nav, 4.38px radius and full-bleed project showcases."
colors:
  canvas: "#000000"
  ink: "#9be187"
  primary: "#99f8ff"
  light: "#fffbf6"
typography:
  display:
    fontFamily: elza, sans-serif
    fontSize: 140.274px
    fontWeight: 900
    lineHeight: 112.219px
    letterSpacing: "-7.0137px"
    textTransform: uppercase
  display-mobile:
    fontFamily: elza, sans-serif
    fontSize: 48.6068px
    fontWeight: 900
    lineHeight: 38.8855px
    letterSpacing: "-2.43034px"
    textTransform: uppercase
  nav:
    fontFamily: elza, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 15.75px
    letterSpacing: "-0.49px"
rounded:
  xs: 4.38px
spacing:
  s1: 2.19px
  s2: 4.38px
  s3: 6.58px
  s4: 8.77px
  s5: 13.15px
  s6: 16px
  s7: 26.3px
components:
  nav:
    textColor: "{colors.light}"
  nav-link:
    textColor: "{colors.light}"
    typography: "{typography.nav}"
---

## Overview

Glitch&Grit (glitchandgrit.com, page title "Home | Glitch&Grit") is a creative studio whose home page is a full-screen project showcase. The measured capture shows a black screen with a three-item top bar (WORK at the left, INFO at the center, CONTACT US at the right), a cut-out grey flower silhouette at the left, a cluster of small photographs scattered at the right, and a gigantic centered headline "FLOWERS FULL-SERVICE" in bright green. Small uppercase labels sit above and below it: "BRAND & IDENTITY" and "CONTENT & MARKETING" above, a "VIEW FULL PROJECT" link with an arrow below. A footer-style bar at the bottom of the first screen reads GLITCH, "&" and GRIT, spread across the width. Below the showcase, the capture shows a large black area and a block of warm white `#fffbf6` filling the right half, which is content that had not rendered yet when the page was captured.

The mood is bold, poster-like and playful. Everything is pushed to extremes: type at 140.274px, tight tracking, full-bleed black, a single neon-like green. The copy is minimal and title-driven: project name, discipline tags, and a link.

## Colors

The page's theme variables expose the palette directly.

- **Canvas** `#000000`, named `--swatch--dark` (`#000`), is the dominant background, covering 9216 area units.
- **Warm white** `#fffbf6`, named `--swatch--light`, is the second background (3072 units) and the nav text color (40 characters).
- **Brand green** `#9be187`, named `--swatch--brand`, is the measured text color of the hero headline (178 characters) and is the ink token.
- **Cyan** `#99f8ff` is a measured text color on 156 characters and is the primary token. The extractor does not tie it to one labeled component, so it is recorded as a measured accent.
- **Card** `#f5f4f2` is `--_theme---card--color`; borders in the theme are `--swatch--dark-faded`, a 10 percent mix of the dark swatch (`color-mix(in srgb, var(--swatch--dark) 10%, transparent)`), and `--swatch--light-faded` is the same mix of the light swatch.

The theme assigns background to the light swatch and text to the dark swatch by default (`--_theme---background` and `--_theme---text`); the measured home page inverts this to white-on-black and green-on-black.

## Typography

Only one family is measured: **elza**, loaded at 400 and 700 in normal and italic, with weights 900 (278 characters) and 600 (96 characters) in use.

- **Display**: 140.274px, weight 900, line height 112.219px, letter spacing -7.0137px, uppercase. This is the h1 "FLOWERS FULL-SERVICE". On the 390px mobile pass it is 48.6068px, weight 900, line height 38.8855px, tracking -2.43034px.
- **Nav**: 14px, weight 600, line height 15.75px, letter spacing -0.49px (the WORK / INFO / CONTACT US labels).
- **Labels**: 12px (200 characters), used for discipline tags and project links.

The root variables use fluid `clamp()` sizes, for example `--size--14rem` is `clamp(7rem, 5.409090909090909rem + 7.954545454545454vw, 14rem)` and `--size--10rem` is `clamp(5.5rem, 4.4772727272727275rem + 5.113636363636364vw, 10rem)`, so the largest type is defined fluidly. The fallback is `sans-serif`; elza is a commercial typeface and its substitution was not measured.

## Layout

The desktop capture is 1280px wide and 11600px tall. The first screen is a centered composition: the headline sits in the middle of the viewport, discipline tags center above and below, and the images scatter to the right at different sizes with rough overlap. The three-item top bar spreads to left, center and right edges, mirrored by the GLITCH & GRIT bar at the bottom of the screen. Measured spacing steps are 2.19px, 4.38px, 6.58px, 8.77px, 13.15px, 16px and 26.3px. The theme defines a scale of size variables from `--size--0-25rem` (`.25rem`) through `--size--1-25rem` (`1.25rem`) to the fluid values above.

## Elevation & Depth

No shadows or borders were measured: `boxShadows` and `borderColors` are empty. Depth is created by overlap: photographs are layered over the grey cut-out and under the giant headline, and the headline's color separates it from imagery. The hover probe returned no states.

## Shapes

One radius is measured, 4.38356px (two uses), kept as `xs` 4.38px. The photographs in the capture are cropped as rectangles and the flower silhouette is an irregular cut-out shape, an image rather than a CSS radius.

## Components

- **Navigation**: three uppercase labels in `#fffbf6`, elza 14px weight 600, spread across the top edge.
- **Hero headline**: elza 900 uppercase at 140.274px, centered, two lines.
- **Discipline tags and project link**: 12px uppercase labels with a small arrow in the link.
- **Photo cluster**: small rectangular images with 4.38px corners, scattered at varied sizes.
- **Buttons**: the theme defines primary and secondary button variables (primary uses the text color as background and the background color as text; secondary is transparent with a text-colored border, and both swap on hover), but the extractor detected no rendered button on the home page, so no button token is declared.

## Design System Architecture

No public design system or brand guideline was found; the measured page links to none. The root shows a Webflow-style class and variable convention (181 variables with prefixes like `--_theme---`, `--_button-style---`, `--_typography---` and `--swatch--`): a three-layer system of raw swatches, theme roles (background, text, border, card, button primary and secondary with hover states), and component styles (button style, text style). Sizes use named steps (`--size--2rem`, `--size--10rem`, `--size--14rem`, `--size--15rem`) with fluid clamp values. This is a de-facto system documented in the shipped CSS.

## Do's and Don'ts

- Do use `#000000` as the stage and `#9be187` for the loudest text.
- Do set display type in elza 900 uppercase with strongly negative tracking.
- Do keep nav and labels small (12px to 14px) so the headline dominates.
- Do use `#fffbf6` for text over black and as the alternate light surface.
- Don't add shadows or borders; none are measured.
- Don't round images beyond 4.38px.
- Don't invent button styles beyond the theme's variable definitions without measuring a rendered button.

## Responsive Behavior

The mobile pass at 390px recorded the h1 "FLOWERS FULL-SERVICE" at 48.6068px, weight 900, line height 38.8855px, with the same elza family. The mobile pass recorded no other roles. Column behavior, menu changes and breakpoints beyond the h1 size are not measured, although the root's `clamp()` sizes show that large type is defined fluidly.

## Iteration Guide

1. Begin with `{colors.canvas}` black and place centered `{typography.display}` text in `{colors.ink}`.
2. Keep the nav at `{typography.nav}` in `{colors.light}`.
3. Layer small photographs under the headline with `{rounded.xs}` corners.
4. Reuse the three-layer variable approach: swatches, theme roles, then components.
5. Re-capture after the content below the first screen has rendered before documenting the lower page.

## Theme Variable Reference

The measured root variables give an exact map of how the theme layers resolve. Raw swatches: `--swatch--dark` `#000`, `--swatch--light` `#fffbf6`, `--swatch--brand` `#9be187`. Theme roles: `--_theme---background` points to the light swatch, `--_theme---text` points to the dark swatch, `--_theme---border` points to `--swatch--dark-faded`, and `--_theme---card--color` is `#f5f4f2`. Primary button roles: background is the theme text color, text is the theme background, border follows the background, and on hover the background becomes the theme background, the text becomes the theme text and the border becomes the theme text. Secondary button roles: a transparent background, text and border in the theme text color, and on hover the background becomes the theme text while the text and border become the theme background. A card tag uses the faded dark swatch.

Spacing and sizing variables: `--size--0-25rem` is `.25rem`, `--size--1-25rem` is `1.25rem`, `--size--2rem` clamps between 1.75rem and 2rem, `--size--10rem` between 5.5rem and 10rem, `--size--14rem` between 7rem and 14rem and `--size--15rem` between 7.5rem and 15rem. A letter-spacing variable `--_typography---letter-spacing--0em` is `0em`. These values describe the theme definition and are not proof that a given element on the home page uses them.
