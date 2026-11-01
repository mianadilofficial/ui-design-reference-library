---
version: alpha
name: Orage Studio
category: "Agencies & Studios"
description: "Orage studio's site (Directors and post-production studio, Paris) is a black canvas (#000000) with white PPSupplyMono text in 10.6667px uppercase, a translucent #00000033 title bar, zero border radius and full-bleed film stills framed like a terminal console."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#ffffff"
  button-primary-bg: "#00000033"
typography:
  display:
    fontFamily: PPSupplyMono, sans-serif
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 10.6667px
    textTransform: uppercase
  display-mobile:
    fontFamily: PPSupplyMono, sans-serif
    fontSize: 12.48px
    fontWeight: 400
    lineHeight: 12.48px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 1.78px
  s2: 2.67px
  s3: 4.44px
  s4: 8.89px
  s5: 13.33px
  s6: 17.78px
  s7: 37.33px
  s8: 44.44px
  s9: 62.22px
  s10: 133.33px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    height: 34px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 17.7778px 17.7778px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
---

## Overview

Orage (https://orage.studio/) describes itself in its page title as "Orage studio - Directors & post-production studio based in Paris". The page copy gives the facts behind that line: a "3D & Vfx Studio", founded 2021, a team of 10 people, located in Paris, offering VFX, 3D, motion design, grading and editing. The site presents all of this as an operating-system console. The first thing the extraction caught is a boot-style "CONSOLE SETUP" panel with a "LOAD" prompt and a numbered menu (001 Configure network interfaces, 002 Configure link aggregation, 003 Configure VLAN interface, 004 Configure default route, 005 Configure static routes, 006 Configure DNS, 007 Reset Root Password, 008 Reset Configuration to defaults, 009 Shell, 010 Reboot, 011 Shut Down). After loading, the home view is a window titled "C: \Orage \Home" showing one featured project, "JCOLE__THE_FALL_OF_IS_INEVITABLE", tagged "3D, COLOR GRADING, VFX", with a "NEXT" control and a "001 /009" counter.

The microcopy voice is machine-diagnostic: file-path titles, underscores in project names, "Parsing data" with a date, hour and "Loading projects: 109 / 109", and overlay readouts such as Video ID, Viewport, Current / Optimal Res, Volume / Normalized and Codecs. The capture confirms this: a black ground, a stacked collage of film stills with thin outlines and coordinate tags, the studio wordmark in the top centre, crosshair and corner marks, and a small data block bottom-right. The brand personality is the film work itself (stills are the only colour on the page) wrapped in a restrained monochrome interface.

## Colors

The interface is strictly black and white. The extraction measured one text colour, #ffffff, with a weight of 3272 characters, and the body background is #000000. The only other measured colour is #00000033, a 20% black overlay used behind the featured-project bar (background area weight 23). Tokens: canvas #000000, ink #ffffff, primary #ffffff (the detected call-to-action text is white), on-primary #ffffff and button-primary-bg #00000033.

The shipped CSS defines colour variables as space-separated RGB triplets: `--color-white` 255 255 255, `--color-black` 0 0 0, `--color-grey` 18 18 18, `--color-blue` 0 0 255 and `--color-grid` 255 0 0. Only black and white were measured on rendered text and backgrounds on the home view; grey, blue and red grid colours exist in the variables but their use was not measured. Colour in the visual experience comes entirely from the footage, which in the capture is warm brown and amber.

## Typography

One monospaced family, PPSupplyMono, loaded in weights 400 and 500. By character weight the page is 3272 characters in PPSupplyMono, 3267 of them at weight 400 and 5 at weight 700. All text is uppercase.

- **Micro text** 8.88889px (2961 characters, the console and readout text; body role).
- **Display token** 10.6667px / 10.6667px, weight 400, uppercase: the detected h1 role, the label "3D, COLOR GRADING, VFX", which is a span rather than a heading element; also the nav and the project title. 310 characters.
- **Display-mobile** 12.48px / 12.48px, weight 400, uppercase, measured at 390px.
- One 17.7778px element was measured (1 character).

The "display" token is therefore not a headline in the conventional sense; the site has no large type at all. Hierarchy comes from position, outlines and the contrast between white text and the footage. Letter-spacing was not measured as non-default (`letterSpacingBySize` is empty). PPSupplyMono is the font name as loaded by the page; its licensing was not confirmed on any page opened for this brief.

## Layout

The page is exactly the viewport: 1280px wide with a measured scroll height of 800px, so the home view does not scroll. Content is arranged on a 24-column grid on desktop and 6 columns on mobile, which the root variables express as `--column` (viewport/24 minus container padding and 23 gaps) and `--column-mobile` (viewport/6 minus padding and 5 gaps), with `--padding-container` 2rem and `--gap` 1rem. Measured spacing values: gaps of 1.77778px, 2.66667px, 4.44444px, 8.88889px, 44.4444px and 133.333px; paddings of 1.77778px, 13.3333px, 17.7778px, 37.3333px and 62.2222px. The header has padding 17.7778px 17.7778px 0px.

In the capture, stills are stacked at different sizes and offsets in the main field, each with a thin outline and a small coordinate tag in its upper-left corner, while the central window bar (path, project name, tag, NEXT, counter) is aligned on a horizontal axis through the middle of the screen. Corner marks (small L-shaped brackets) fix the four corners of the viewport.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty) and no border colours were measured on elements (`borderColors` is empty). Depth is created by overlapping stills at different sizes and by the 20% black layer (#00000033) behind the project bar. The root variables include Tailwind ring and shadow defaults (`--tw-shadow` 0 0 #0000, `--tw-ring-shadow` 0 0 #0000) which resolve to nothing.

## Shapes

`borderRadii` is empty in the extraction, so every rendered element computes to 0px; the token set records `none: 0px`. The primary bar is a 34px-high rectangle (40px at mobile width) with square corners. Frames around stills are rectangles; the capture also shows small square and circle glyph markers that are decoration, not controls.

## Components

- **Project title bar (button-primary)**: the extractor's primary call-to-action is the link "JCOLE__THE_FALL_OF_IS_INEVITABLE", white text on #00000033, PPSupplyMono 10.6667px uppercase, 229px wide and 34px high at desktop; at 390px it measures 268px by 40px at 12.48px.
- **Nav**: header text in white, 10.6667px uppercase; menu items listed by the page are Home, Works, About, Studio, Contact (Contact carries no link).
- **Pagination**: "NEXT" and a counter reading 001 /009 (the capture shows a 3-digit counter beside the bar).
- **Panels**: "Console setup", "Welcome to Orage", "Parsing data" (with Grab and Close buttons) and "Contact.txt" (Social, Address, For new project, Job, Infos, with an "Apply here" call).
- **Footer links**: Legals and Credits.

## Design System Architecture

No public design system, brand guideline or press kit is linked from the page (home page opened at https://orage.studio/; the only external links besides socials are Legals at https://orage.studio/legals/ and Credits at https://beaucoup.studio). The de-facto system is visible in the CSS root variables: Tailwind-style utility variables (`--tw-ring-*`, `--tw-shadow*`), custom easing curves (`--ease-out` cubic-bezier(0.23,1,0.32,1), `--ease-in` cubic-bezier(0.12,0,0.39,0), `--ease-in-out` cubic-bezier(0.86,0,0.07,1), `--ease-out-back` cubic-bezier(0.175,0.885,0.32,1.275)), viewport helpers (`--vw`, `--vh`, `--vh-dynamic`), a type-scale multiplier `--font-size-scaler` (1), and the 24-column / 6-column grid variables. Motion was not recorded for this brief (`--no-motion`).

## Do's and Don'ts

- Do keep the ground pure black (#000000) and text pure white (#ffffff).
- Do set interface text in PPSupplyMono, uppercase, 10.6667px.
- Do name things like files and system paths (C: \Orage \Home, JCOLE__THE_FALL_OF_IS_INEVITABLE).
- Do let footage carry all the colour.
- Don't round corners: measured radius is 0px.
- Don't add shadows; none were measured.
- Don't use large display type; the largest measured text is 17.7778px.
- Don't style the overlay bar as a solid fill; it is a 20% black layer.

## Responsive Behavior

The 390px mobile pass measured: the label "3D, COLOR GRADING, VFX" at 12.48px / 12.48px (163px wide), the project bar at 268px by 40px with 12.48px text, and a header with padding 20.8px 20.8px 0px. The root variables define a 6-column mobile grid (`--column-mobile`). Other breakpoints, menu behaviour and what happens to the panels on mobile were not measured.

## Iteration Guide

1. Begin with black canvas, white ink, PPSupplyMono uppercase at 10.6667px.
2. Build screens as windows: a path-style title, a tag line, a counter.
3. Keep everything square-cornered and flat; use the #00000033 layer only to lift text over footage.
4. Add new project names in UPPER_SNAKE style, as the site does.
5. Before adding colours or sizes, measure a page with the extractor (`--slug=orage--page --url=<url> --force --no-motion`); the grey, blue and red grid variables have no measured on-screen use.
