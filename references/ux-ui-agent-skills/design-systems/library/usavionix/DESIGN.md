---
version: alpha
name: USAvionix
category: "Tech & AI"
description: "USAvionix (usavionix.com) presents jet-drone ISR and defense systems on a #000000 canvas with Geist 600 headings (50px, -1.5px tracking), Geist Mono uppercase 13px labels, translucent #ffffff40 pill buttons, cyan #7aebff accents and white text at 80% opacity."
colors:
  canvas: "#000000"
  ink: "#ffffffcc"
  ink-strong: "#ffffff"
  primary: "#7aebff"
  on-primary: "#ffffff"
  accent-amber: "#ffcb47"
  accent-red: "#ff6666"
  ink-faint: "#ffffff33"
  ink-dim: "#ffffff59"
  button-primary-bg: "#ffffff40"
typography:
  display:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 50px
    fontWeight: 600
    lineHeight: 52px
    letterSpacing: "-1.5px"
  display-mobile:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 43px
    fontWeight: 600
    lineHeight: 38.7px
    letterSpacing: "-1.72px"
  mono-label:
    fontFamily: "\"Geist Mono\", \"Geist Mono Fallback\""
    fontSize: 13px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0.78px
    textTransform: uppercase
  body:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 19px
    fontWeight: 500
    lineHeight: 24px
  button:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 17px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 16px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 26px
  s9: 48px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 6px 16px
    height: 32px
  button-secondary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 44px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
  nav-label:
    textColor: "{colors.ink-strong}"
    typography: "{typography.mono-label}"
---

## Overview

USAvionix (`https://www.usavionix.com/`, page title "USAvionix | Advanced Jet Drone Systems for ISR & Defense") shows a defense-technology company with a cinematic, dark front page. The capture is a full-bleed 3D render of a dark flying-wing drone over green-grey mountain terrain, with the bold wordmark "USAvionix" at top left, a translucent "Contact" pill and a menu icon at top right, the headline "Securing the skies with autonomous intelligence" over the top left, and a short lead ("The first agent in the air, built with the speed, range, and onboard intelligence to search vast areas on its own.") lower right with a translucent "Scroll To Explore" pill containing a down arrow. Below the first screen the capture is solid black, so only the hero imagery was rendered at capture time.

The DOM contains more: a mono navigation (SPECS, SWARM, MISSION, SYNC, DETECTION, PHALANX AI, SYS ANALYSIS and more), the section heading "One platform, many missions." and mission copy such as "Delta drones rapidly detect ignition points, suppress advanc...". The tone is terse and technical, the layout dark and image-led, and all controls are translucent glass-like pills on top of photography.

The extraction found only 160 visible elements, so the measured values describe the hero, navigation and the first content heading rather than the full page.

## Colors

The canvas is `#000000` (body). The page's stylesheet also declares `--color-bg: #0f0f0f` and `--color-white: #fff`, but no area fills were measured except translucent white overlays: `#ffffff40` (the button fill, 21 area weight), `#ffffff1a`, `#ffffff80` and `#ffffff66`.

Text is white in opacities: `#ffffffcc` (593 characters, body and lead copy, 80% white) and `#ffffff` (402, headings and labels). Faint tints `#ffffff33` (20) and `#ffffff59` (11) mark disabled or tertiary text. The accent colors are cyan `#7aebff` (133 characters of text and also the hue of the one measured glow, `oklab(0.880685 -0.0918058 -0.0540343 / 0.2)`), amber `#ffcb47` (11 characters) and red `#ff6666` (30 characters). Cyan is used as the primary accent; amber and red appear on a few characters each, and their meaning was not recorded.

Buttons are neither filled nor bordered in solid colors; they use white at 25% (`oklab(0.999994 ... / 0.25)`, resolved as `#ffffff40`) with a hover value measured at 30%.

## Typography

Both families are variable fonts loaded from weight 100 to 900: **Geist** (933 characters) for headings, body and buttons, and **Geist Mono** (267) for uppercase technical labels.

- Display (measured heading): Geist 600, 50px / 52px, letter-spacing -1.5px ("One platform, many missions."); on the mobile pass the hero h1 is Geist 43px / 38.7px, -1.72px.
- Body: Geist 500, 19px / 24px, `#ffffffcc` (489 characters).
- Large body: 29px at -0.29px tracking (185 characters).
- Button and link: Geist 500, 17px / 20px.
- Mono label: Geist Mono 500, 13px / 16px, 0.78px tracking, uppercase (navigation); 12px with 0.72px for smaller labels; 10px with 2.8px tracking on 11 characters.

The stylesheet declares a named type scale in root variables: desktop `--text-d-h0: 5rem` and `--text-d-h1: 4.75rem` (the hero sizes; the desktop hero heading itself was not captured in the measured text), `--text-d-h0--letter-spacing: -.04em`, `--text-d-h2--line-height: 3.25rem`, `--text-d-h2--letter-spacing: -.03em`, and mobile `--text-m-h0: 2.6875rem` (43px), `--text-m-h2: 1.875rem` (30px), `--text-m-body-l: .875rem` (14px), `--text-m-mono--letter-spacing: .06em`. Weights measured: 500 (1,012 characters), 600 (177), 400 (11).

## Layout

The extractor recorded no band or column structure for this page, so grid details are not measured. What is measured: gaps of 4px (12 occurrences), 24px (8), 48px (6), 20px (4), 12px, 8px, 16px, 26px and 220px; paddings of 12px (12), 6px (7), 48px (4), 20px, 16px and 220px. The heading box is 1,184px wide and the lead paragraph 500px wide on a 1280px page. In the capture, the headline sits top left, the lead and button bottom right, and the header runs along the top edge with the logo at the far left and controls at the far right.

Spacing rhythm: the smallest recorded gap is 4px and the others step up through 8px, 12px, 16px, 20px, 24px and 48px, so layout spacing follows a 4px base unit with 24px and 48px as the main section-level steps. The 220px value appears on both a gap and a padding, once each at the page level, and is the only very large spacing value measured. Because the extraction saw few elements, additional paddings may exist further down the page and were not measured.

## Elevation & Depth

One shadow style was measured on 6 elements: four transparent layers followed by a cyan glow, `oklab(0.880685 -0.0918058 -0.0540343 / 0.2) 0px 0px 4px 4px`, a faint halo in the accent hue. Surface depth otherwise comes from translucency (`#ffffff40` buttons over imagery) and from the photograph itself. The stylesheet defines `--blur-xl: 24px` and `--z-index-info: 590`; where the blur is applied was not measured, so only its declaration is recorded.

## Shapes

Radii measured: a fully round value (`3.35544e+07px`, 3 elements, the pill buttons) and 16px (3 elements). Buttons are pills; the 16px radius belongs to rounded containers whose identity was not recorded. All other elements compute to 0px.

## Components

- **Contact pill**: `#ffffff40` fill, white 17px Geist 500 text, `6px 16px` padding, 32px tall, 96px wide, fully rounded; hover fill measured at 30% white (the border color stays `#ffffff`, the box-shadow stays none).
- **Request Access / Scroll To Explore pill**: same fill, `12px 20px` padding, 44px tall, 250px wide, fully rounded; the scroll pill carries a down-arrow glyph.
- **Text link**: Geist 500 17px white ("Notes"), 20px tall.
- **Navigation labels**: Geist Mono 500, 13px, 0.78px tracking, uppercase, white.
- **Wordmark**: bold "USAvionix" in the header (graphic; size not measured).
- **Cards**: none detected.

## Design System Architecture

No public or official USAvionix design system was found, and none was searched for. The stylesheet is a Tailwind-style build whose theme variables define the system: `--color-bg`, `--color-white`, a named responsive type scale (`--text-d-h0`, `--text-d-h1`, `--text-d-h2`, `--text-d-body-l`, `--text-d-body-s`, `--text-d-mono`, and `--text-m-*` counterparts, each with `--font-weight`, `--line-height` and `--letter-spacing` members), blur tokens (`--blur-xl: 24px`), and a z-index token (`--z-index-info: 590`). The `d` and `m` prefixes separate desktop and mobile values. Source: `https://www.usavionix.com/`, measured into `web/data/extracted/usavionix.json`.

## Do's and Don'ts

Do:
- Keep the canvas black and let a rich render carry the screen.
- Use translucent white pills (`#ffffff40`) for all actions.
- Set headings in Geist 600 with negative tracking and technical labels in uppercase Geist Mono.
- Use `#ffffffcc` for body copy and `#7aebff` for the occasional accent.

Don't:
- Don't use solid colored buttons; none were measured.
- Don't add hard borders or drop shadows; only a faint cyan glow was measured.
- Don't use more than one accent in a section.
- Don't use sharp corners on action buttons.

## Responsive Behavior

Measured at the 390px mobile pass: the hero h1 measures 43px, the h2 30px, body 14px (from 19px), the scroll pill measures 17px with the same `#ffffff40` fill and fully rounded radius, and the navigation labels stay at 13px Geist Mono. The mobile font table also lists 11px on 455 characters and 19px on 279. Layout, menu and column behavior on mobile were not measured.

## Iteration Guide

1. Black canvas with a full-bleed hero image.
2. Geist 600 headline with negative tracking; Geist Mono uppercase labels.
3. Body in `#ffffffcc` at 19px.
4. Actions as `#ffffff40` fully rounded pills.
5. One cyan `#7aebff` accent only.
6. Re-run `node web/scripts/verify-designs.mjs --slug=usavionix` after any rename.
