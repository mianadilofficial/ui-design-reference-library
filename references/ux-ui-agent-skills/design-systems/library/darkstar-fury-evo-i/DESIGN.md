---
version: alpha
name: "Darkstar Fury: Evo I"
category: "Culture & Events"
description: "Darkstar Fury: Evo I (darkstarfury.com), a browser synthwave space shooter by Patrick Heintzmann: a pure #000000 canvas, terminal-green #25ab6f Orbitron copy at 16px/32px with 1.6px tracking, red #ff3838 button labels inside mint #43ffc0 chamfered frames, a photosensitivity notice and a 40px-tall ENTER button."
colors:
  canvas: "#000000"
  ink: "#25ab6f"
  primary: "#ff3838"
  on-primary: "#ff3838"
  button-primary-bg: "#000000bf"
  accent-mint: "#43ffc0"
  primary-dim: "#dc3535"
  overlay-dark: "#0000004d"
typography:
  body:
    fontFamily: Orbitron, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: 1.6px
  button:
    fontFamily: Arial
    fontSize: 14px
    fontWeight: 600
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 20px
  s2: 30px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
    width: 102px
    transform: matrix(1, 0, 0, 1, 0, 0)
  notice:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 20px 30px
    height: 168px
    width: 504px
---

## Overview

Darkstar Fury: Evo I is a browser game, not a company site. The title is "Darkstar Fury: Evo I", the meta description reads "Lock 'n load lasers, crank up the Synthwave beats, and ride shotgun with space samurai Fury in this indie sci-fi game by Patrick Heintzmann, featuring music from Nightride.FM", and the page's own story text says that Earth faces annihilation by relentless alien invaders and that humanity's last hope is Fury, a lone space samurai, and his ship Darkstar. The footer reads "© 2025 Darkstar Fury and Patrick Heintzmann. Music by NightRideFM. All rights reserved."

What the live page shows first, and what the extractor and the capture measured, is the entry splash: a black screen filled with a glowing green, symmetrical, grid-dotted visual, a small rectangular notice in the middle ("This content may contain intense visual stimuli that could cause discomfort or seizures in individuals with photosensitive epilepsy. Viewer discretion is advised.") with red corner brackets, and below it a chamfered ENTER button with a red marker dot to its left. The page's server text lists the states that follow: a loading counter ("loading 000 %"), "skip" and "start" buttons, a top bar with "about" and "highscores" and a system readout (dsp, fps, date, time, log, sys, "evo: Alpha", "vers: 01.08.84"), and an about overlay with the sections Bushidō, Ken to Rei and Kyōdō. Only the splash was measured (26 visible elements); the later screens are described here only from the page's text and its published stylesheet at https://www.darkstarfury.com/style.css, which was opened and read.

The visual language is a retro-futuristic game HUD: neon-green text and frames on black, red labels with a soft red glow, thin angled borders, and a monospaced-looking geometric typeface (Orbitron) set with generous letter-spacing and tall line-height.

Re-measurement note: the URL is a splash (a photosensitivity warning) in front of the game. The home page was re-measured once with `node web/scripts/extract-tokens.mjs --slug=darkstar-fury-evo-i --url=https://www.darkstarfury.com/ --force --no-motion`; the second pass returned the same roles, so the measured tokens describe the splash and the entry button only.

## Colors

| Token | Value | Evidence |
|---|---|---|
| `canvas` | #000000 | Body background (area weight 3072) |
| `ink` | #25ab6f | Text on 162 characters; also `.menu-about-gameplay-controls-inner-copy` in the stylesheet |
| `primary` | #ff3838 | ENTER label color (5 characters); `.btn-copy` in the stylesheet |
| `on-primary` | #ff3838 | Button text color measured on the ENTER button (the button fill is dark, so label and accent are the same red) |
| `button-primary-bg` | #000000bf | ENTER button background, black at 75% (weight 88); `.btn-bg` |
| `accent-mint` | #43ffc0 | `.btn-border` fill and stroke in the stylesheet (button frame, with a 4px glow) |
| `primary-dim` | #dc3535 | `.btn-copy` color in another state in the stylesheet |
| `overlay-dark` | #0000004d | Black at 30%, `.menu-about-section-bg` in the stylesheet |

The root variable `--color-theme-green-copy` is declared as the string "#00ff00" and its on-screen use was not measured. The stylesheet also contains #00bcff, #ff7ffb, #fffe7e, #01fda7 and #01ffff, whose elements were not identified, so they are not tokens.

Color logic: three neon hues on black. Green carries reading text and labels (#25ab6f), mint outlines frame interactive controls (#43ffc0), and red (#ff3838) carries labels, markers and scores, with a drop-shadow glow of the same red. Button chrome uses black at 75% so the backdrop shows faintly through.

## Typography

One family: Orbitron, loaded as a variable font covering weights 400 to 900. By characters, Orbitron covers 162 and Arial 5 (the button label falls back to Arial). Weights measured are 500 on body copy and 600 on the button.

| Token | Family | Size / line-height | Weight | Tracking | Use |
|---|---|---|---|---|---|
| `body` | Orbitron | 16px / 32px | 500 | 1.6px | Notice text, justified |
| `button` | Arial | 14px | 600 | none | "ENTER", uppercase |

Body line-height is exactly twice the font size (32px on 16px) and tracking is 0.1em, which gives the notice a spaced, terminal feel. At the mobile pass the body becomes 14px / 28px with 1.4px tracking, the same proportions. The stylesheet defines further type treatments for the later screens, all in em units with uppercase transforms: buttons at 1.4em/600, section titles at 2em, sublines at 1.6em/600 with .05em tracking in red, and captions at .6em/800 with .2em tracking; those are declared in the CSS and were not measured on screen, so they have no tokens.

## Layout

The measured page is 2,400px tall (with an inner scroller of 3,631px) at 1280px wide. The splash is a centered column: the notice is a 504px-wide, 168px-tall box with padding 20px 30px, and the 102px by 40px ENTER button sits directly below it, centered. The rest of the viewport is the green visual. Spacing measured: padding 30px (3 elements) and 20px (1 element); no gaps were measured.

The later HUD, from the stylesheet, uses fixed bar sizes (`.hud-item-bar` 120px by 16px at the largest declared size, `.hud-life-bar` 40px by 16px, `.hud-joystick-img` as a circle) and flex rows; the about overlay uses 30px section padding and two-column control rows with a 30px gutter (`flex-basis: calc(50% - 30px)`). The item list uses 100px square image masks (80px at smaller sizes).

## Elevation & Depth

No box shadow was measured on any element. The stylesheet declares the glow vocabulary that gives the interface its depth: `drop-shadow(0px 0px 4px #43ffc0)` on button borders, `drop-shadow(0px 0px 1px #ff3838)` on red labels, `drop-shadow(0px 0px 2px #ff0000)` on markers, plus box shadows `0px 0px 6px 1px #ff3838` and inset 2px rings in #43ffc0 and #25ab6f. Depth is therefore light, not elevation: glowing outlines over a dark glassy panel (#000000bf) above the backdrop. The capture shows the notice panel slightly lighter than the black surround, with a soft green bloom behind the button.

## Shapes

No border radius was measured on the splash (the notice and the button are 0px). The stylesheet lists radii of 10px, 4px and 6px for other elements. Shape is expressed by chamfered, angled borders drawn with SVG on the button (cut corners and small diagonal ticks inside the frame) and by red corner brackets on the notice; the `.hud-joystick-img` uses a 100% radius for the circular touch joystick.

## Components

**ENTER button.** 102px wide and 40px tall, no radius, a black 75% background (#000000bf), a 14px/600 uppercase red (#ff3838) label, framed by a mint (#43ffc0) chamfered SVG border with a glow, and a red marker dot at the left (the stylesheet animates `.btn-marker` with `btnMarkerAnimation 1s`). The button label has a 1px red glow.

**Notice.** A 504px by 168px box with 20px 30px padding holding justified green Orbitron text; red corner brackets mark its corners in the capture.

**Skip and start buttons.** Same construction as ENTER, with an icon variant for skip (`.btn-skip-icon`, red fill).

**HUD.** Health, shield and life bars and numeric readouts with `mix-blend-mode: difference` red values, a score label at weight 800 with .2em tracking, and a Nightride FM marquee in red 1.4em/600. These are declared in the stylesheet.

**About overlay.** Sections titled Bushidō ("Way of the Warrior": keyboard and touch controls), Ken to Rei ("Swords and Spirits": three swords and three spirit power-ups) and Kyōdō (credits and contact) on a 30%-black panel, with a navigation list that carries a small red marker.

## Design System Architecture

No public design system, brand guideline or press kit is linked from the page; the opened pages link only to the developer's site (patrickheintzmann.com), Nightride.FM, logo and Blender credits (triangularboy.net, pebdesign.de), sound-effect contributors on Freesound, and a contact email. The de-facto system is a single hand-written stylesheet at https://www.darkstarfury.com/style.css (about 160KB) loaded with /index.js.

Naming follows a component-prefix convention (`.btn`, `.btn-bg`, `.btn-border`, `.btn-copy`, `.btn-marker`, `.hud-item-label`, `.hud-item-bar`, `.hud-score-copy`, `.menu-about-section-title`, `.menu-about-gameplay-controls`). States are expressed by re-declaring the same color roles per variant: border `#43ffc0`, label `#ff3838`, background `#000000bf`, text `#25ab6f`. Responsive sizes use `calc()` with viewport units for the score text (for example `calc(9px + 3 * (100vw - 1440px) / 160)`). The single root variable measured is `--color-theme-green-copy`.

## Do's and Don'ts

**Do**
- Keep the canvas pure #000000 with green (#25ab6f) reading text and red (#ff3838) labels.
- Frame interactive controls with mint (#43ffc0) chamfered borders and a soft glow instead of fills.
- Set all text in Orbitron with open tracking (1.6px at 16px) and double line-height.
- Use uppercase for buttons and captions.
- Give buttons a 75% black plate (#000000bf) so the backdrop shows through.

**Don't**
- Don't use rounded buttons; the measured button and notice have no radius.
- Don't add solid light surfaces; no light background was measured.
- Don't use a fourth hue for text; the extra hues in the stylesheet were not measured on screen.
- Don't skip the photosensitivity notice before entry: the page shows it first.

## Responsive Behavior

The extractor re-loaded the splash at 390px. Measured: body text is Orbitron 500 at 14px / 28px with 1.4px tracking, in a box 350px wide and 208px tall with padding 20px 30px (504px by 168px, 16px/32px at desktop). The ENTER button keeps its 102px by 40px size, 14px/600 type and red label. Character counts by size at that width: 14px (167). The page text mentions a "Device is not supported" notice and a "rotate device" prompt, and the stylesheet changes HUD bar widths across breakpoints (for example `.hud-item-bar` at 120px, 110px, 90px, 80px and 50px); the breakpoints themselves and the layout of the game screens at 390px were not measured.

## Iteration Guide

1. Start from the three measured colors: #000000, #25ab6f, #ff3838, plus #43ffc0 for frames.
2. Build the splash first: green backdrop, 504px notice with red corner brackets, 102px by 40px ENTER button with a chamfered mint frame.
3. Use Orbitron 500 at 16px/32px with 1.6px tracking for all reading text; Arial 600 uppercase only as the button fallback.
4. Study /style.css for the HUD and about-overlay rules before building later screens, and measure them if the game screens become reachable by the extractor.
5. Run `node web/scripts/verify-designs.mjs --slug=darkstar-fury-evo-i` after any token edit.
