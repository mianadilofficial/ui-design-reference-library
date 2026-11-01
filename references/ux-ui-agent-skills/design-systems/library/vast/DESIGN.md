---
version: alpha
name: Vast
category: "Tech & AI"
description: 'Vast (vastspace.com): space-station maker styled as an engineering firm: Owners 500 display at 76px/65.36px, Owners Text body, Phonic labels, meteorite-black #2a2c2f on warm-white #fdfcf4, moon-rock #b3aba3 bands, single solar-orange #ff5623 accent, square 0px corners, no visible shadows.'
colors:
  canvas: '#fdfcf4'
  page-body: '#ffffff'
  ink: '#2a2c2f'
  primary: '#2a2c2f'
  on-primary: '#ffffff'
  warm-gray: '#ece8e3'
  asteroid-dust: '#897f75'
  solar-orange: '#ff5623'
  hairline: '#b3aba366'
  footer-bg: '#000000'
  moon-rock: '#b3aba3'
  green: '#2da046'
typography:
  display:
    fontFamily: Owners, sans-serif
    fontSize: 76px
    fontWeight: 500
    lineHeight: 65.36px
  display-mobile:
    fontFamily: Owners, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 42.24px
  subheading:
    fontFamily: Owners, sans-serif
    fontSize: 19px
    fontWeight: 500
    lineHeight: 19.76px
    letterSpacing: 0.57px
  body:
    fontFamily: '"Owners Text", sans-serif'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 21.76px
  nav:
    fontFamily: '"Owners Text", sans-serif'
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.47px
  s3: 4px
  s4: 5px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13.8px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: '{colors.ink}'
    textColor: '{colors.page-body}'
    typography: '{typography.body}'
    rounded: '{rounded.none}'
    padding: 0px 20px
    height: 45px
  button-secondary:
    backgroundColor: '{colors.ink}'
    textColor: '{colors.page-body}'
    typography: '{typography.body}'
    rounded: '{rounded.none}'
    padding: 0px 20px
    height: 56px
  link:
    textColor: '{colors.page-body}'
    typography: '{typography.nav}'
    rounded: '{rounded.none}'
    padding: 10px
  nav:
    textColor: '{colors.ink}'
    rounded: '{rounded.none}'
  nav-link:
    textColor: '{colors.page-body}'
    typography: '{typography.nav}'
    rounded: '{rounded.none}'
    padding: 10px
  text-input:
    backgroundColor: '{colors.page-body}'
    textColor: '{colors.ink}'
    typography: '{typography.body}'
    rounded: '{rounded.none}'
    padding: 0px 24px
    height: 80px
    borderColor: '{colors.page-body}'
  footer:
    backgroundColor: '{colors.footer-bg}'
    textColor: '{colors.ink}'
    rounded: '{rounded.none}'
---

# Vast

## Overview
Vast (vastspace.com, measured at `https://www.vastspace.com/`, page title "Vast – Building Next-Generation Space Infrastructure") presents a commercial space-station company as an engineering firm, not a sci-fi brand. The extractor found 1488 visible elements on a 1280px-wide, 6662px-tall page. The capture opens on a full-bleed film of a white cleanroom in which technicians in hooded suits work around a large white cylindrical hull, with a white 76px headline, "Building next-generation space infrastructure", set over it. The top bar carries the VAST wordmark, links "Stations", "Satellites", "Updates", "About us", "Shop", and a white rectangular "Create your mission" button.

Below the hero the page shifts to flat warm-neutral planes: a moon-rock gray band holding a large muted statement ("Vast is developing next-generation space stations and space infrastructure using an incremental, hardware-rich and low-cost approach.") framed by thin plus-sign registration marks at its four corners, then a warm-white section for the Haven-1 station. Haven-1 appears as an oversized ghost wordmark in pale warm gray, behind a thin circular tick-mark dial, with a small spec readout at the right (CREW, HEIGHT, HABITABLE VOLUME, PRESSURIZED VOLUME, MASS, POWER, ORBIT) and a "LAUNCHING 2027" label in orange at the left. The voice is declarative and technical: "The world's first commercial space station", "Haven-1 hardware development".

## Colors
The site declares its palette as named CSS custom properties, which the extractor read from `:root`, so every color below carries the company's own name:
- `canvas` #fdfcf4, "warm-white", the light page ground of the Haven-1 section.
- `page-body` #ffffff, "white".
- `ink` #2a2c2f, "meteorite-black", the text color on light grounds (6697 weighted characters) and the fill of the measured buttons. `primary` is the same value.
- `on-primary` #ffffff, the text on those buttons and the dominant text color on the dark film (11264 weighted characters).
- `warm-gray` #ece8e3 (`--color--primary--warm-gray`), used for the ghost "Haven-1" wordmark area and light surfaces.
- `moon-rock` #b3aba3 (`--color--primary--moon-rock`), the measured background of the statement band.
- `asteroid-dust` #897f75 (`--color--secondary--asteroid-dust`), the muted statement text.
- `solar-orange` #ff5623 (`--color--accent--solar-orange`), the single accent, used for the "LAUNCHING 2027" label and the dial's vertical tick (14 weighted characters of text).
- `green` #2da046 (`--color--secondary--green`), declared in the variables; not seen on the measured screen.
- `hairline` #b3aba366, the one measured border color (moon-rock at 40% alpha).
- `footer-bg` #000000, the footer ("Sign up for updates") background.

The background-area ranking is led by #2a2c2f (the film and dark panels), then #2a2c2f45, #ece8e3, #fdfcf4 and #000000. The orange is rationed: it never fills an area larger than a label.

## Typography
Three families are loaded, recorded by the extractor as Owners 500, Owners Text 400 and Phonic 400.
- **Owners** (display), weight 500: `display` 76px with line-height 65.36px (0.86 of the size), `subheading` 19px/19.76px with 0.57px tracking, and the 48px section statement with 0.48px tracking. Headlines are set tight, with line-height below the font size.
- **Owners Text**, weight 400: `body` 16px/21.76px, `nav` 14px/21px, and a 20px size (5753 weighted characters, 0.6px tracking) that is the second most-read size. The primary nav block measures 18px/23.76px.
- **Phonic**, weight 400: the small spec labels, measured among 12px (0.12px tracking) and 10px (0.1px tracking) sizes. The tracking at every size is 1% of the font size.

`display-mobile` (48px/42.24px) is the h1 measured at the mobile viewport. Owners and Phonic are commercial faces; Owners falls back to `sans-serif` in the declared stack, and the stack names no other fallback.

## Layout
The page is a stack of full-width bands; each has its own ground color (film, moon rock, warm white, footer black). Content aligns to a left gutter that is visible in the capture: the hero headline and spec labels start at the same left edge, with the statement text slightly more indented. Measured gaps include 16px (170 uses), 8px, 96px (112 uses), 4px, 12px, 24px, 40px, 25px, 2px, 32px, 60px and 64px; measured paddings include 20px (228 uses), 48px, 60px, 40px and 16px. The site's own variables give the gap scale names (`--gap-xs` .8rem, `--gap-s` 1.6rem, `--gap-sm` 2rem, `--gap-ml` 3.2rem, `--gap-xxl` 6.4rem) and button sizes (`--btn-size-s` 3.6rem, `--btn-size-m` 4.6rem, `--btn-size-l` 5.6rem). The measured buttons are 45px and 56px tall, close to the m and l sizes.

The statement band uses large vertical padding and a four-corner plus-mark frame; the Haven-1 section lays out a centered ghost wordmark with corner-anchored data readouts. Spacing tokens `s1`-`s10` in the frontmatter record measured gap/padding values.

## Elevation & Depth
Depth comes from photography and tonal planes, not shadows. The only box shadow measured is `rgba(42, 44, 47, 0) 0px 16px 24px 0px`, a fully transparent value, so no rendered element casts a visible shadow. Layering is flat: text sits directly over the film with no scrim measured, and the "Watch full video" and pause controls sit over the film as translucent gray rectangles. Hairlines are the moon-rock color at alpha 0x66.

## Shapes
Everything is rectangular. Generated radius tokens are `none: 0px` (computed on the buttons, input, nav and links) and `pill: 9999px`; the extraction's border-radius list contains `1000px` four times, a fully rounded shape that is not tied to a measured button. The measured input is a white 80px-tall field with a 1px white border and 24px horizontal padding. The thin dial and plus-sign marks are line art in the page, not UI shapes.

## Components
- **Primary button** (`button-primary`): "More updates", 138x45, background #2a2c2f, text #ffffff, Owners Text 16px, padding 0 20px, radius 0.
- **Secondary button** (`button-secondary`): "Sign up", 94x56, the same fill and text, padding 0 20px, radius 0. Both measured buttons share the dark fill; the nav "Create your mission" button appears white on the film in the capture.
- **Nav** and **nav-link**: Owners Text 14px, white on the film; on hover the measured nav item color changes from rgb(255, 255, 255) to rgb(46, 48, 51), recorded for "Stations".
- **Text input** (`text-input`): white fill, #2a2c2f text, 16px, 0 24px padding, 80px high, 1px white border, used in the footer sign-up form.
- **Footer**: black (#000000) with the "Sign up for updates" heading in Owners 19px.
- **Media controls**: a pause button and "Watch full video" with a chevron over the hero film.

## Design System Architecture
Vast has no public design system or brand guidelines among the pages opened for this document; none is cited. The de-facto system is visible in the shipped CSS: named color variables with the `--color--primary--`, `--color--secondary--` and `--color--accent--` prefixes, gap and button-size variables, `--animation-duration-primary` 0.65s and `--animation-duration-primary-fast` 0.5s, and custom easings `--motion-ease-vast` (cubic-bezier(0.4, 1.35, 0.5, 0.97)) and `--motion-ease-spring`. Tailwind's `--tw-*` variables are also present, showing the stylesheet is built on Tailwind. A `--css-mobile-mockup-width` of 393 is declared. Source: measured page https://www.vastspace.com/ via `web/data/extracted/vast.json`.

## Do's and Don'ts
Do
- Use the named palette: warm-white ground, meteorite-black text, and orange only for small labels.
- Set display type in Owners 500 with a line-height below 1.
- Put real photography of hardware at full bleed behind the headline.
- Keep corners at 0 and buttons dark and rectangular.
- Use Phonic at 10-12px for specification readouts.

Don't
- Don't add shadows; the only measured one is transparent.
- Don't fill large areas with solar orange.
- Don't use rounded buttons; the 1000px radius is not on a measured button.
- Don't use the Tailwind ring color rgb(59 130 246 / .5); it is a framework default.

## Responsive Behavior
The extractor's mobile pass (390px-wide nav) recorded: h1 48px/500 with 42.24px line-height in a 358px-wide box; the statement h2 32px with 30.72px line-height and 0.32px tracking (desktop 48px/48px); body 16px/21.76px unchanged in a 272px-wide box; the primary button text 14px/18.2px (desktop 16px/20.8px) at 126x45; and an 80px-high nav bar. The mobile size ranking is led by 16px, then 18px, 12px, 14px, 32px and 48px. Breakpoints, menu behavior and image cropping are not measured.

## Iteration Guide
1. Set canvas #fdfcf4, ink #2a2c2f, primary #2a2c2f, accent #ff5623.
2. Build the hero from a full-bleed film with a 76px Owners 500 headline in white.
3. Add a moon-rock #b3aba3 statement band with #897f75 48px text and plus-mark corners.
4. Add dark rectangular buttons 45px or 56px tall with 0 20px padding and 16px Owners Text.
5. Use Phonic 10-12px for data labels, and keep the footer #000000.
6. Run `node web/scripts/verify-designs.mjs --slug=vast`.
