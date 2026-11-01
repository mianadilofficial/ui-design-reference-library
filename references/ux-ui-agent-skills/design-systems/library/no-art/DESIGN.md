---
version: alpha
name: "No Art"
category: "Retail & E-commerce"
description: "No Art (noartmusic.com): monochrome #000000 on #ffffff, all-caps Chivomono monospace at 10.6667px to 16px with Nue Haas Grotesk Text Pro 600 statement headings at 42.6667px and -1.44px tracking, square corners, a full-bleed video hero and illustrated poster strip."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#808080"
  hairline: "#00000033"
  card-border: "#909090"
  brand-red: "#ff2b29"
typography:
  display:
    fontFamily: "\"Nue Haas Grotesk Text Pro\", Arial, sans-serif"
    fontSize: 42.6667px
    fontWeight: 600
    lineHeight: 42.6667px
    letterSpacing: "-1.44px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Nue Haas Grotesk Text Pro\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: "-1.44px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Nue Haas Grotesk Text Pro\", Arial, sans-serif"
    fontSize: 42.6667px
    fontWeight: 600
    lineHeight: 42.6667px
    letterSpacing: "-1.44px"
    textTransform: uppercase
  body:
    fontFamily: Chivomono, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
    textTransform: uppercase
  nav:
    fontFamily: Chivomono, Arial, sans-serif
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 17.0667px
    textTransform: uppercase
  label:
    fontFamily: Chivomono, Arial, sans-serif
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 12.8px
    textTransform: uppercase
rounded:
  xs: 1.78px
  pill: 9999px
spacing:
  s1: 3.25px
  s2: 4.44px
  s3: 5.33px
  s4: 7.11px
  s5: 8.89px
  s6: 14.22px
  s7: 17.78px
  s8: 31.11px
  s9: 35.56px
  s10: 40px
components:
  link:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.primary}"
    typography: "{typography.label}"
    padding: 4.44444px 8.88889px 4.44444px 4.44444px
  nav:
    textColor: "{colors.canvas}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    borderColor: "{colors.card-border}"
  footer:
    textColor: "{colors.ink}"
---

# No Art

No Art (https://www.noartmusic.com/, page title "Broaden your mind | No Art") is an independent label and event organizer that programs art and music at unusual locations. The site is a full-bleed video hero followed by stark black-on-white editorial blocks set in an all-caps monospace, with hand-drawn event posters as the only color. This document records what was measured.

## Overview

The home page opens on a 600px-tall full-bleed video of a festival lawn seen through vertical mirror panels, with a hand-lettered "NoArt" wordmark at the centre, corner crop-marks, a tiny nav grid across the top (Events [0], Shop, Label, Gallery, About, Tickets, Music Week, Foundation) and a small "Next up" card at the lower right (No Art Lisbon, October 10, 2026). A short descriptor bottom-left reads "NO ART IS AN INDEPENDENT LABEL AND EVENT ORGANIZER CURATING UNCONVENTIONAL ART AND PIONEERING MUSIC AT UNIQUE LOCATIONS."

Below it the page is white with black type: a heading "AN EXPERIENCE WHERE MUSIC, ART AND PEOPLE UNITE" at left and two paragraphs of justified monospace copy at right, a horizontally scrolling strip of illustrated event posters (No Art Mumbai, Costa Rica, Buenos Aires with dates such as November 15, 2026) and a "DISCOVER THE WORLD OF NO ART AROUND THE GLOBE" block with a wireframe globe, a live local-time readout and ALL / UPCOMING filter links. The page is 3752px tall. The voice is brief, imperative and fully uppercase: "BROADEN YOUR MIND", "MORE ABOUT US".

## Colors

The palette is deliberately monochrome. `canvas` #ffffff and `ink` #000000 carry the page; the measured areas are #000000 (video and nav field, 2048), #00000080 (a 50% black overlay, 1024) and #ffffff (631). Text is #000000 on 1987 characters and #ffffff on 239 (the overlay nav and hero copy). `primary` #808080 is the measured grey used for link text and secondary labels (24 characters); `hairline` #00000033 (20% black) is the 1px border color (8 elements) and `card-border` #909090 a lone grey border.

The site's own Webflow variables define one saturated color: `--_colors---brand--100` is #ff2b29, plus `--_colors---grey--dark` #333, `--_colors---dark--80` #000c, `--_colors---dark--50` #00000080, `--_colors---light--50` #ffffff80 and `--_colors---light--20` #fff3. #ff2b29 is recorded as `brand-red` because it is the named brand color in the shipped CSS; the extraction did not measure any text or fill that uses it, so no component claims it. The `--swiper-theme-color` #007aff belongs to the carousel library, not the brand.

## Typography

Two families. `Chivomono` (a monospace, loaded at weights 400 and 500) is the working face: 2173 of 2250 measured characters. `Nue Haas Grotesk Text Pro` (weight 600 and 700 files) is used only for the big statement headings (77 characters). `JetBrains Mono` 400 is also loaded. The site variables name them `--_typography---fonts--primary-font` (Chivomono, Arial, sans-serif) and `--_typography---fonts--heading-font` (Nue Haas Grotesk Text Pro, Arial, sans-serif).

- `display`: the statement heading, 42.6667px / 42.6667px, weight 600, letter spacing -1.44px, uppercase. Mobile: 32px / 32px, weight 600, -1.44px.
- `label`: 10.6667px / 12.8px Chivomono uppercase, used for nav, tags and captions (1646 characters at this size). On mobile the nav-size text is 12px / 14.4px.
- `body`: 16px / 19.2px Chivomono uppercase (14px / 16.8px on mobile).
- `nav`: 14.2222px / 17.0667px Chivomono uppercase.

Everything is uppercase. Nue Haas Grotesk Text Pro is a commercial typeface, and Chivomono is distributed as a web font by the site; if either is unavailable, keep the Arial, sans-serif fallback from the site variables and the measured sizes.

## Layout

The site works on a fluid unit: `--size-unit` 16, `--size-container-ideal` 1440, `--size-container-min` 992px, `--size-container-max` 2560px, with `--size-container` computed as `clamp(min, 100vw, max)` and `--size-font` scaling the root size to the viewport. That explains the fractional pixel values (10.6667px is 0.75em at the 1440 reference scaled to the 1920px capture width). Global padding is `--padding-global--regular` 2.5em; gaps are `--gap-spacing--small` 1.5em, `--gap-spacing--regular` 3em and `--gap-spacing--large` 4em. The content grid is a two-column split (heading left, text right) with wide empty margins. Measured gaps: 5.33333px (132), 17.7778px (36), 8.88889px (36), 31.1111px, 35.5556px, 7.11111px, 4.44444px, 40px and 53.3333px.

## Elevation & Depth

No box shadow was measured on rendered elements. Depth in the hero comes from the video itself and a 50% black overlay (#00000080) behind the nav text; the "Next up" card is a dark translucent panel. The rest of the page is flat.

## Shapes

The shape language is square. The site variables set `--border-radius--regular`, `--border-radius--medium` and `--border-radius--large` to 0em and `--border-radius--small` to .125em, which computes to 1.77778px (18 elements). Measured pills: 1000px (3 elements) and 50% (1). Poster images in the strip are sharp-cornered rectangles; corner crop-marks (small L-shaped brackets) frame the hero wordmark and the globe.

## Components

- Nav: white text on the video, Chivomono uppercase at 10.6667px, arranged in four columns of two lines with small square bullets; a counter in brackets follows "Events".
- Text link: grey (#808080) uppercase label, padding 4.44444px 8.88889px 4.44444px 4.44444px, on a #00000033 tint, with a trailing arrow glyph ("MORE ABOUT US", "ALL").
- Event card: a poster image, a bracketed index ([04], [05], [06]), the event name and date in 10.6667px caps beneath. The card carries a #909090 border and a pill radius token measured on its small tag.
- Filter links: "ALL / UPCOMING", the active one underlined.
- Next-up card: dark translucent panel with a thumbnail, "NEXT UP" label, event name and date.

## Design System Architecture

No public design system or brand guideline was opened, and no link to one was found in the extraction. The site is a Webflow build, and its design system lives in Webflow variables on `:root` with a triple-dash naming convention: `--_colors---dark--100`, `--_colors---brand--100`, `--_colors---grey--100`, `--_typography---heading-size--large` (6em), `--_typography---heading-size--medium` (3em), `--_typography---body-size--large` (1.125em), `--_typography---button-size--regular` (1em), `--_typography---tag-size--small` (.625em), `--_typography---link-size--regular` (.75em), `--border-radius--*` and `--gap-spacing--*`. Sizes are in em against the fluid `--size-font` root, so the whole page scales with the viewport.

## Do's and Don'ts

- Do set everything in uppercase, mapping body and labels to the monospace face and statements to the grotesk at weight 600 with -1.44px tracking.
- Do keep the page black and white; let the posters and video supply color.
- Do use square corners (0 to 1.77778px) and bracketed indexes such as [04].
- Do frame hero elements with corner crop-marks.
- Don't add shadows or rounded buttons; none were measured.
- Don't use the library blue #007aff.
- Don't claim #ff2b29 on UI that was not measured with it.

## Responsive Behavior

Measured at the 390px mobile pass: the statement heading is 32px / 32px at weight 600 (desktop 42.6667px), body is 14px / 16.8px, and the nav-size text is 12px / 14.4px (the 12px size accounts for 1472 characters). The most common mobile sizes are 12px, 14px and 32px. How the nav grid, poster strip and globe re-flow was not measured.

## Iteration Guide

1. Start from the monochrome tokens; add #ff2b29 only where a source shows it in use.
2. Build the hero as a full-bleed video with a dark overlay and a four-column mini nav.
3. Follow with a two-column text block, a horizontal poster strip with bracketed indexes, and the globe block.
4. Keep everything uppercase, and keep the heading at 42.6667px / -1.44px.
5. Validate with the gate after any rename; do not edit measured values.

## Imagery and Voice

Photography is documentary and unretouched: the hero is moving footage of an actual event, seen through mirrored panels that distort the crowd. Illustration is the second voice: each city edition gets its own hand-drawn poster in saturated, folk-art colors, each carrying the same handwritten "NoArt" mark, so the strip reads as a series. Because the page itself is black and white, these posters are the only large color areas. Copy is short and declarative; the about text says the goal is "not just to organize events, but to broaden the minds of our attendees", and that every event has a professional lineup "that we don't reveal in advance". Dates are written in full capitals ("NOVEMBER 15, 2026"), and the footer-level utilities such as the live local-time readout ("LOCAL TIME", "TIME ZONE: GMT+7 (UTC+7)") are set in the same 10.6667px monospace as the nav, which keeps the interface feeling like a printed ticket or a technical readout.
