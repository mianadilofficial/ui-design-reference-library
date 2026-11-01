---
version: alpha
name: "Nicola Romei"
category: "Portfolio"
description: "Nicola Romei's portfolio: a monochrome interactive artboard on a #f3f3f3 canvas with #202020 text, uppercase Host Grotesk 500 at 10px, a 56px Easegeometricb 700 title with -3.36px tracking, light nav chips, and 2.1px to 2.8px corners."
colors:
  canvas: "#f3f3f3"
  ink: "#202020"
  primary: "#f3f3f3"
  black: "#000000"
  ink-soft: "#e7e7e7"
  ink-grey: "#333333"
  hairline: "#ffffff24"
  card-border: "#ffffff1a"
  tech-red: "#ff564a"
typography:
  display:
    fontFamily: Easegeometricb, Impact, sans-serif
    fontSize: 56px
    fontWeight: 700
    lineHeight: 56px
    letterSpacing: "-3.36px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Easegeometricb, Impact, sans-serif
    fontSize: 35px
    fontWeight: 700
    lineHeight: 35px
    letterSpacing: "-2.1px"
    textTransform: uppercase
  body:
    fontFamily: "\"Host Grotesk\", sans-serif"
    fontSize: 10px
    fontWeight: 500
    lineHeight: 10px
    textTransform: uppercase
rounded:
  xs: 2.1px
  sm: 2.8px
spacing:
  s1: 2.8px
  s2: 3.5px
  s3: 4.9px
  s4: 5.6px
  s5: 7px
  s6: 14px
  s7: 28px
  s8: 42px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink-soft}"
    padding: 14px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
---

## Overview

Nicola Romei is a personal portfolio at https://www.nicolaromei.com/ (title "Nicola Romei | Digital Experience Designer", language `en`). The opened page identifies him as a "Digital Experience Designer and Awwwards Judge" based in Italy and working globally, and says the work is "immersive websites defined by strong visual direction, refined motion, and a distinct design signature". Expertise listed in the capture: Art Direction, Web Design + Dev, Webflow Development; social contacts: Awwwards, LinkedIn, Contacts.

The home page is a single full-viewport interactive "artboard": a grid of about 25 image tiles (the opened page lists them as links to /archive) over which the large title "THE ARTBOARD™" is set at the bottom left. Instructions on the page read "SCROLL / DRAG TO INTERACT W/ THE ARTBOARD or click on the grid to explore the archive." Two light chips at top right, "THE ARCHIVE" and "THE PROFILE", are the main navigation. A live local-time readout sits at top left. The measured scroll height is 2432px at 1280px wide, but the capture shows the artboard occupying the first screen and a flat `#f3f3f3` field beneath it.

An introductory dialog explaining the artboard, with a CLOSE control, overlays the lower right of the capture; it is a one-time instructional overlay, so its dark card, its 59px glow shadow and its border are not recorded as brand tokens. The imagery in the capture is monochrome and grainy: product mockups, a rocket illustration, a mountain valley, a vintage fashion magazine and a portrait. The tone is editorial, minimal and typographic, with everything set in small uppercase.

## Colors

The palette is strictly neutral.

- **Canvas `#f3f3f3`** is the body background and the measured largest background area (also the site's variable `--soft_grey`).
- **Ink `#202020`** is the body text color (36 characters) and the site's variable `--matte-black`.
- **Primary `#f3f3f3`** is the light fill of the nav chips and the color of nearly all text on the artboard (520 characters of `#f3f3f3` text over imagery); there is no saturated action color on the page.
- **`#e7e7e7`** (48 characters) and **`#333333`** (25 characters) are secondary text colors.
- **Black `#000000`** and the translucent `#00000054` appear as measured backgrounds on small areas.
- **Hairlines `#ffffff24`** and **`#ffffff1a`** are the thin borders measured on four elements (three at `#ffffff24`, one at `#ffffff1a`).
- **Tech red `#ff564a`** is declared as `--tech-red` among the site's root variables. Its use on a specific element was not measured, so it is recorded as an available accent only.

Because the capture is monochrome and every text color is light-on-image, there is no brand color beyond the declared red.

## Typography

Two families carry all measured text. `Host Grotesk` (500) sets 616 weighted characters at 10px with 10px line height in uppercase: navigation, descriptions, coordinates and captions. `Easegeometricb` (700, fallbacks Impact then sans-serif) sets the 56px h1 "THE ARTBOARD™" with line height 56px, letter spacing -3.36px and uppercase; on the 390px mobile pass it is 35px / 35px with -2.1px, and mobile body text is 12px / 12px. Letter spacing on the display is -6% of the size.

The font loader lists many more faces (Geist Mono 400/600/800, john-doe, prestige-elite-std, typeka, itc-avant-garde-gothic-pro, neue-haas-grotesk-display and -text, and Host Grotesk 300 to 700). Those are loaded for the archive imagery or other pages; none appears in the measured text. Easegeometricb is a custom display face; Impact is the declared fallback.

## Layout

The home page is an edge-to-edge canvas: a header row of four columns at the top (location and time, expertise, social contacts, the tagline) with the nav chips at top right, a tile grid with narrow white gutters filling the screen, and the display title anchored bottom-left. Measured gaps are 5.6px, 7px, 42px, 3.5px and 28px; paddings are 14px (nav), 3.5px, 2.8px and 4.9px. Everything is tightly packed at 10px type, so the page relies on the imagery for scale.

## Elevation & Depth

The only shadow measured is `rgba(255, 255, 255, 0.12) 0px 0px 59px 0px`, a soft white glow on the intro overlay card (not documented as a component). Depth otherwise comes from the images themselves, which show a vignetted, blurred edge treatment, and from translucent hairlines.

## Shapes

Radii are tiny: 2.8px (two elements), 2.1px (one) and 0% (one). The nav chips and tile frames are almost square-cornered; no pill or large radius was measured.

## Components

- **nav-link**: uppercase Host Grotesk 10px / 500 in `#f3f3f3`; the measured links carry a `#f3f3f3` before-shape used as an underline, and the nav container has 14px padding.
- **nav chips** ("THE ARCHIVE", "THE PROFILE"): light `#f3f3f3` fields with dark uppercase text at top right, as seen in the capture; their fill matches the primary token.
- **link**: the same 10px uppercase style, `#f3f3f3` on imagery.
- **title**: Easegeometricb 56px uppercase, -3.36px tracking.

No form input, button with a distinct action color, or card was measured outside the intro overlay.

## Content and Voice

The copy is sparse and declarative. Beyond the tagline, the opened page carries the statement "WHAT APPEARS HERE IS NOT A SHOWCASE, BUT THE TRACE OF A PRACTICE", a description of the artboard as a structured environment where creations, systems and design research are organized, preserved and continuously revisited, and a contact email with the subject line "New project together". Parenthesized uppercase group labels such as "(MY.EXPERTISE)" and "(SOCIAL.CONTACTS)" in the capture give the header a catalogue feel. Everything is lowercase-free: every measured text run is set in uppercase, and the registered-mark style "™" follows the title.

## Design System Architecture

No public design system, brand guide or press kit exists: the opened page https://www.nicolaromei.com/ links only to the archive, the profile, an Awwwards profile, LinkedIn and an email address, and states no fonts or colors. The de-facto system is the site's root variables: `--matte-black #202020`, `--soft_grey #f3f3f3`, `--tech-red #ff564a`, and a fluid spacing scale written with `clamp()` (for example `--_spacing---padding-xs: clamp(1em,.5em + 2.1vw,3em)`, `--_spacing---padding-small`, `--_spacing---padding-medium`, `--_spacing---padding-large`, `--padding-bottom-huge: 15vw`). The `--_spacing---` naming is the convention of a Webflow-built project, and the capture's own expertise line lists Webflow development, but the page itself does not state its build platform.

## Do's and Don'ts

- Do keep a flat `#f3f3f3` canvas with `#202020` text and light-on-image labels.
- Do set labels in uppercase Host Grotesk 500 at 10px and the display title in Easegeometricb 700 with heavy negative tracking.
- Do keep corners at 2.1px to 2.8px.
- Do let monochrome imagery carry the page.
- Don't document the intro overlay or its glow shadow as brand UI.
- Don't add saturated action colors; the declared `--tech-red` has no measured use.
- Don't use rounded pills or large radii.

## Responsive Behavior

The 390px mobile pass recorded the h1 at 35px / 35px with -2.1px letter spacing and body text at 12px / 12px, both uppercase. The page text also shows the message "SWITCH YOUR DEVICE FOR A BETTER EXPERIENCE", but how the artboard grid and header rearrange on mobile was not measured, and no breakpoints were captured.

## Iteration Guide

1. Start with `#f3f3f3`, text `#202020`, and everything uppercase.
2. Use Host Grotesk 500 at 10px for all labels; use the 56px Easegeometricb 700 title with -3.36px tracking only once.
3. Frame imagery as a tight tile grid with thin light gutters; keep it monochrome.
4. Use 2.1px to 2.8px corners and no shadows except for overlays.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=nicola-romeitm --force --no-motion`, regenerate with `node web/scripts/generate-frontmatter.mjs --slug=nicola-romeitm`, and gate with `node web/scripts/verify-designs.mjs --slug=nicola-romeitm`.
