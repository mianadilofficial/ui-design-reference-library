---
version: alpha
name: "Nine To Five Studio"
category: "Architecture & Interiors"
description: "Nine To Five Studio (9to5), an Italian BIM architecture studio: an acid yellow #ffff02 field with pure black PPNeueMontreal type, a 36px bold uppercase wordmark, a 36px regular statement, 12px labels, a #ffffff canvas and 0px corners throughout."
colors:
  canvas: "#ffffff"
  primary: "#ffff02"
  ink: "#000000"
  on-primary: "#000000"
typography:
  display:
    fontFamily: PPNeueMontreal, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 36px
    textTransform: uppercase
  display-mobile:
    fontFamily: PPNeueMontreal, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 20px
    textTransform: uppercase
  body:
    fontFamily: PPNeueMontreal, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 39px
  link:
    fontFamily: PPNeueMontreal, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
rounded:
  none: 0px
spacing:
  s1: 15px
  s2: 24px
  s3: 114px
  s4: 120px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 15px 0px
---

## Overview

Nine To Five Studio (9to5) is an architecture and design studio specialized in BIM (building information modeling), and its site at https://www.9to5studio.it/ is titled "Nine To Five Studio | Nine To Five Studio" with the language attribute `en`, although the opening statement is written in Italian: "Se dovessimo definirci banalmente diremmo che siamo uno studio di architettura e progettazione specializzato in BIM." The opened page describes the team as young, outspoken, creative, stubborn, sometimes decisive and mostly ambitious, and ends with "Insieme siamo 9to5." The page is 6496px tall at 1280px wide. A cookie banner (`iubenda-cs-banner`) was hidden before measurement and is not documented.

The first screen in the capture is a flat field of saturated yellow with a wide-spaced black wordmark across the top (NINE, TO, FIVE, STUDIO spread to the grid), a small square photograph of a drain cover on a yellow road marking at the center, the long Italian statement set large at the bottom, and a tiny "SCROLL & DISCOVER" label at lower right. Below the first screen the capture is blank white; the opened page lists seven numbered project links (/work/pegaso-quattro, /work/eco, /work/h, /work/Borders, /work/project-z, /work/approdo, /work/boulder) and the navigation items Menu and Contacts.

The personality is blunt and poster-like: one acid yellow, pure black type, no ornament, no rounded corners, and a single industrial photograph that echoes the yellow in its road marking.

## Colors

Three colors cover the whole page: `#ffff02` (the yellow field, the largest measured background area, 1012 units), `#ffffff` (the body canvas, 752) and `#000000` (69 units of background, and 754 characters of text).

- **Canvas `#ffffff`** is the body and below-the-fold background.
- **Yellow `#ffff02`** is the hero field and the brand's signature color; it is assigned to `primary`, and the generator's black `primary` is kept as `ink`.
- **Ink `#000000`** is the only text color apart from white; black is also used as a small background fill.
- **White text `#ffffff`** appears on 12 characters over dark areas.

No gradients, shadows, borders or tints were measured. The Tailwind-style root variables declare `--colors-white: #fff` and a red (`--colors-red-DEFAULT`, in oklch), but no rendered element was measured with the red, so it is not a token.

## Typography

A single family, `PPNeueMontreal` (loaded at weights 400, 500 and 700), carries every character (766 weighted), with a long system-sans fallback stack. Three sizes dominate: 36px (318 characters), 12px (431) and 9px (17). The wordmark h1 is 36px, weight 700, line height 36px, uppercase; the large statement paragraph is 36px, weight 400, line height 39px; links and labels are 12px, weight 500, line height 18px; the body default is 12px / 18px. On the 390px mobile pass the h1 is 20px / 20px, weight 700, uppercase. The typeface name `PP Neue Montreal` is a commercial foundry face; if unavailable, use a neutral grotesque such as Helvetica or Arial from the declared fallbacks.

## Layout

The layout is a wide, loose grid: the wordmark words sit on four separate columns across the top of the screen, and the hero text block is left-aligned on the first column and spans about two thirds of the width. Measured paddings are 15px (15 uses), 24px and 120px, and gaps are 114px (twice) and 15px. Links carry `15px 0px` padding. White space is deliberate and generous, with wide empty margins between the wordmark, the image and the statement: the photograph is small and centered with large empty areas around it.

## Elevation & Depth

The page is entirely flat. No box shadows, borders or overlays were measured. Hierarchy comes from size (36px against 12px) and from the contrast between the yellow field, white canvas and black type.

## Shapes

`borderRadii` is empty in the extraction: every rendered element computes a radius of 0px. The tokens therefore carry `none: 0px`. The photograph, bands and links are all rectangular.

## Components

- **wordmark**: "NINE TO FIVE STUDIO" in uppercase 36px / 700 black, spread across the top.
- **statement**: 36px / 400 / 39px black paragraph on the yellow field.
- **link**: 12px / 500 / 18px black, `15px 0px` padding (Menu, Contacts, project links, "Scroll & Discover").
- **photo**: a small square image with sharp corners.

No buttons, form inputs, cards or footer were detected.

## Content and Voice

The voice is first-person plural, self-deprecating and direct. The opening statement in the capture says that if the studio had to define itself in a banal way it would say it is an architecture and design studio specialized in BIM, then adds that it wants to do better: "siamo giovani, polemici, creativi, testardi, a giorni alterni risoluti e per lo più ambiziosi." The closing line, "Insieme siamo 9to5.", plays on the studio name. Project entries on the opened page are numbered with two digits and short names (01 Pegaso Quattro, 02 Eco, 03 -H, 05 Project Z, 06 Approdo, 07 Boulder), and the navigation is reduced to two words, Menu and Contacts. The English-language attribute with Italian copy means the site's text is not translated in the measured page.

The only photograph in the capture is a close crop of a metal drain cover set into a yellow painted road line, so the image repeats the page color rather than introducing a second one. Imagery is therefore documentary and urban, and any new image should either echo the yellow or sit on the white canvas without extra framing.

## Design System Architecture

No public design system, brand guide or press kit exists. The opened page https://www.9to5studio.it/ links only to the menu, contacts and its project pages, with images served from the studio's own admin subdomain. The extracted root variables (`--font-sans`, `--fontWeight-normal` 400, `--fontWeight-medium` 500, `--fontWeight-semibold` 600, `--fontWeight-bold` 700, `--text-2xl-fontSize` 1.5rem, `--text-3xl-fontSize` 1.875rem, `--leading-none`, `--tracking-wide` .025em, and a set of named easing curves such as `--ease-in-out-sharp: cubic-bezier(.83,0,.17,1)` and `--ease-out-back: cubic-bezier(0,0,.85,1.25)`) show a utility-class framework with a few custom easings, so the de-facto system is: one typeface, three sizes, three colors, and zero radius.

## Do's and Don'ts

- Do use `#ffff02` as a full-bleed field behind black type.
- Do set big statements at 36px regular and the wordmark at 36px bold uppercase.
- Do keep supporting labels tiny: 12px at weight 500.
- Do keep corners square.
- Don't add gradients, shadows or borders; none were measured.
- Don't add colors beyond yellow, white and black.
- Don't document the cookie banner as part of the design; it was hidden for measurement.

## Responsive Behavior

The 390px mobile pass recorded the h1 at 20px / 20px, weight 700, uppercase. The mobile pass also recorded body text at 16px / 24px weight 500, with 16px (432 characters), 20px (314) and 12px (17) as the most-used sizes. How the wide-spaced wordmark, the project list and the menu rearrange on mobile was not measured; no breakpoints were captured.

## Iteration Guide

1. Fill the first screen with `#ffff02` and set everything in black PPNeueMontreal.
2. Spread the uppercase 36px / 700 wordmark across the full width.
3. Put the statement at 36px / 400 with 39px line height, and label text at 12px / 500.
4. Keep every corner at 0px and add no effects.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=nine-to-five --url=https://www.9to5studio.it/ --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=nine-to-five`.
