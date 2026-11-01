---
version: alpha
name: Airbus
category: "Airlines"
description: "Airbus (airbus.com): navy #071a3d hero and #00205b headlines on white, Inter regular 48 to 52px headings, 700 weight 16px buttons with 3px radius, soft navy 0.15 shadows, awx- CSS variable system."
colors:
  canvas: "#ffffff"
  ink: "#070b11"
  primary: "#ffffff"
  on-primary: "#00205b"
  surface-2: "#071a3d"
  surface-3: "#010d24"
  ink-secondary: "#e5eaf2"
  ink-5: "#505d74"
  ink-6: "#a2acbd"
  hairline: "#ffffff40"
typography:
  display:
    fontFamily: InterVariable, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52.8px
  display-mobile:
    fontFamily: InterVariable, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
  heading:
    fontFamily: InterVariable, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif
    fontSize: 52px
    fontWeight: 400
    lineHeight: 62.4px
  subheading:
    fontFamily: InterVariable, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: InterVariable, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 48px
  nav:
    fontFamily: InterVariable, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 16px
  pill: 9999px
spacing:
  s1: 1.6px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 7px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 9.6px 14.4px
    height: 45px
    borderColor: "{colors.on-primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.canvas}"
    padding: 0px 20px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xs}"
  footer:
    textColor: "{colors.ink-5}"
    padding: 0px 0px 24px
---

# Airbus

## Overview
Airbus (airbus.com/en, titled "Pioneering sustainable aerospace | Airbus") presents itself in a confident, mission-driven corporate voice about safety, sustainability and people. The measured page is 6,718px tall at 1280px. It opens on a full-bleed dark hero in navy (`{colors.surface-2}` #071a3d) carrying the headline "Pioneering sustainable aerospace for a safe and united world" in 48px regular type over an image of a glowing engine on a platform, a circular "scroll down" button at the bottom and a small "Pause" control for the hero. A thin top bar holds the Menu button with a hamburger icon, the white AIRBUS wordmark and, at right, Careers, Investors, Suppliers, Newsroom and a Search control.

Below the hero the page switches to white: "AIRBUS STORIES" (an uppercase eyebrow) above "Our purpose in action" in navy 52px type with a short navy underline bar, a carousel of story cards with photographs (helicopter rescue, flood relief), small navy pill tags ("Web Story", "Helicopters") and dates with reading time ("29 September 2026 — 3 min read"); then "OUR MISSIONS / Discover what we achieve on a global scale" over four full-height photograph columns with white captions and plus icons; then a navy "JOIN US / Launch your career at Airbus" band with a white "Find out more" button; further sections are "Airbus Faces", "Our latest stories", the half-year financial results and "Let's stay in touch". Imagery is documentary photography of aircraft, helicopters, satellites and people at work, with a blue cast that agrees with the palette.

## Colors
Measured by painted area: white #ffffff (15,437), navy #071a3d (8,268), deep navy #010d24 (5,048), #011333 (2,770), pale blue-gray #f2f5f9 (2,666) and #c1c7d3 (673). Text by characters: #e5eaf2 (3,113, light text on navy), #070b11 (524, `{colors.ink}`), #00205b (322, `{colors.on-primary}`, the navy used for headlines and button labels), #ffffff (270), #505d74 (164, `{colors.ink-5}`), #a2acbd (38, `{colors.ink-6}`).
- `{colors.canvas}` #ffffff; `{colors.primary}` #ffffff, the fill of the measured primary button ("Find out more", "Discover more"), with `{colors.on-primary}` #00205b as its label.
- `{colors.surface-2}` #071a3d, `{colors.surface-3}` #010d24 for dark bands and cards.
- `{colors.ink-secondary}` #e5eaf2 for text on dark; `{colors.hairline}` #ffffff40 for borders on dark.
The shipped CSS publishes the named scale behind these: `--awx-color-primary-blue-10` #e5eaf2, `-30` #6f9bed, `-40` #457de5, `-80` #002466, `-90` #00205b, `-100` #001b4d, `-110` #071a3d, `-120` #011333; `--awx-color-link` rgb(0,32,91), `--awx-color-link-active` rgb(6,59,158); status colors success rgb(132,189,0), warning rgb(225,224,0); highlights pink #da1884, violet #a51890, blue #00aec7 and red #e4002b; and shadow tint `--awx-color-dominant-shadow: rgba(7,26,61,0.15)`.

## Typography
The measured stack is `InterVariable, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif` with Inter loaded at 400, 600 and the variable face up to 700. The Airbus Brand Centre (https://brand.airbus.com, opened) states that Neue Helvetica LT will no longer be used and is replaced by the Google font Inter, which matches the loaded font.
- `display` 48px / 400 / 52.8px: the hero h1; `display-mobile` 36px / 400 / 43.2px on the 390px pass.
- `heading` 52px / 400 / 62.4px: section headings ("Our purpose in action").
- `subheading` 20px / 400 / 28px; `nav` 16px / 400 / 24px; `button` 16px / 700 / 48px.
Measured size usage by characters: 16px (1,956), 20px (932), 14px (531), 18px (313), 24px (239), 52px (165), 12px (120), 22px (80), 32px (64), 48px (60). The body element is 16px / 500 / 24px in #003840.

## Layout
Page width 1280px, a left-aligned heading column of about a third of the width beside a carousel on the right, then full-bleed photograph strips. Spacing variables published: `--awx-sp-v0-5` 6px, `-v0-75` 9px, `-v1-25` 15px, `-v1-5` 18px, `-v2-25` 27px, `-v2-5` 30px, `-v3` 36px, `-v5` 60px, `-v8` 96px, and horizontal `-h1-25` 20px, `-h3` 48px, `-h4` 64px. Measured spacing tokens: 1.6, 2, 4, 5, 7, 10, 12, 14, 16 and 20px.

## Elevation & Depth
Soft, navy-tinted, wide shadows: `rgba(7, 26, 61, 0.15) 0px 0px 48px -3.2px` (18 elements), `... 0px 0px 42px -2.8px` (10) and `... 0px 0px 36px -2.4px` (10), plus `rgba(0, 0, 0, 0.05) 0px 1px 3px -5px, rgba(0, 0, 0, 0.1) 0px 6px 24px -5px`. They lift cards from white and dark backgrounds with a diffuse glow rather than a visible edge.

## Shapes
`--awx-border-radius: 3px` is the base: 3px on 125 elements (`{rounded.xs}`, buttons and cards). 16px on 20 elements (`{rounded.sm}`), 50% on 13 (the round carousel and scroll buttons), plus 4px bottom corners and a 3px left-side cap. Pill tags such as "Web Story" use fully rounded ends.

## Components
- **button-primary**: white fill, #00205b label, Inter 700 16px, radius 3px, padding 0px 20px, height 48px.
- **button-secondary**: white fill with #00205b border, padding 9.6px 14.4px, height 45px.
- **round buttons** ("scroll down", 48px, 50%): #071a3d with a 25% white border; hover fills rgb(0, 45, 128). The "Pause" control is 24px high, radius 3px, same hover.
- **nav / nav-link**: white wordmark bar and #00205b links on the white state; padding 0px 20px.
- **card**: #071a3d fill, radius 3px, light text.
- **link**: #070b11 text at 20px.
- **footer**: text #505d74, padding 0px 0px 24px.

### Motion controls and microcopy
The hero exposes its own controls as visible buttons: a labelled "Pause" button (24px high, with a pause glyph) and a circular "scroll down" button, so the autoplaying hero can be stopped by the visitor. Story cards pair a navy pill tag with a headline, a date and a reading-time estimate on one line separated by an em dash. Section eyebrows ("AIRBUS STORIES", "OUR MISSIONS", "JOIN US") are small uppercase labels set above each large heading, and each heading is followed by a short navy bar, a repeated signature of the layout. Carousel navigation uses two outlined circular arrow buttons.

## Design System Architecture
Airbus runs a branded web system with the `--awx-` prefix (colors, button tokens, spacing, easing `--awx-ease-in-out: cubic-bezier(0.5,0.075,0.115,0.95)`, font weights 500 and 700), shipped in the page CSS. Button tokens are named (`--awx-button-color`, `-hover`, `-border`, `-disabled`, `primary-color-*`). The Brand Centre at https://brand.airbus.com (opened) hosts the brand guidelines, templates and an asset library with Typography, Colours and logo sections; downloads are restricted to Airbus employees, and the page lists no color values, so the awx variables are the only color source used here. The footer also links the Media Centre at mediacentre.airbus.com (listed on the home page; not opened).

## Do's and Don'ts
- Do use navy #071a3d and #00205b with white, and #e5eaf2 for text on dark.
- Do use Inter, regular for headings and 700 for buttons.
- Do keep corners at 3px for buttons and cards; use circles only for icon controls.
- Do use wide, low-opacity navy shadows (0.15).
- Don't use pure black text; the ink is #070b11.
- Don't introduce highlight colors (pink, violet, red) as interface chrome; they are published variables but are not measured on the home page chrome.

## Responsive Behavior
Measured at 390px: h1 36px / 400 / 43.2px (from 48px); the "Discover more" button is white with #00205b text, Inter 700 16px. Menu behavior, column counts and breakpoints were not measured.

## Iteration Guide
1. Dark hero #071a3d, white sections, #00205b headings.
2. Inter 400 for headings (48 to 52px), 700 16px for buttons.
3. 3px radius, 48px high buttons, round 48px icon buttons.
4. Photography with a blue cast, pill tags in navy.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=airbus --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=airbus`.
