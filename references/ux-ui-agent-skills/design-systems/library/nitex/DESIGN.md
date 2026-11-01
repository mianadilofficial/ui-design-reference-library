---
version: alpha
name: "NITEX"
category: "Fashion & Apparel"
description: "NITEX, a real-time fashion supply chain: acid neon #d7ff00 against black #000000 and white #ffffff, a 68px uppercase RightGrotesk headline, PPNeueMontreal 15px body, Fragment Mono 12px uppercase labels, 0px radius everywhere and slanted shapes."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#d7ff00"
  surface-grey: "#e6e6e6"
  on-primary: "#000000"
typography:
  display:
    fontFamily: PPNeueMontreal, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 23.4px
  heading:
    fontFamily: "\"Fragment Mono\", monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
    letterSpacing: "-0.14px"
    textTransform: uppercase
  subheading:
    fontFamily: RightGrotesk, "Century Gothic", sans-serif
    fontSize: 68px
    fontWeight: 400
    lineHeight: 61.2px
    textTransform: uppercase
  body:
    fontFamily: PPNeueMontreal, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
  nav:
    fontFamily: "\"Fragment Mono\", monospace"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 28px
  s8: 64px
  s9: 80px
  s10: 120px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 20px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    padding: 120px 0px 64px
---

## Overview

NITEX is a fashion supply-chain and design company, and its site at https://nitex.com/ is titled "Nitex | Helping Brands Thrive With Real-Time Fashion | nitex" (language `en`). The opened page positions it as a design-driven supply chain that helps brands launch faster, keep up with trends and sell ready-to-buy designs, with trend forecasting, in-house prototyping, fit validation, global delivery, flexible MOQs and real-time order tracking. The capture's hero line reads "We power real-time fashion with exclusive, ready-to-buy designs, helping brands move faster, stay on trend, and grow without compromise." and the about text names teams from Dhaka to London, Barcelona and New York and certified factories in Bangladesh. The page is 10353px tall at 1280px wide.

The first screen in the capture is a split-screen photograph: at left a model in a white bucket hat against a blue sky, at right indigo-dyed fabrics hanging in a dark shed, with two giant neon-yellow letters ("N" and "X") framing the center, a centered neon sentence and a neon "INSIDE NITEX" button. Top-left is the slanted NITEX logo in neon, and at the top right are two mono-labelled buttons, "MEET NITEX" (neon fill) and "GET STARTED" (translucent grey). Below, a white section shows the oversized black headline "FROM VISION TO GLOBAL IMPACT" with a small slanted portrait photo inserted between words, and a neon-yellow side panel with the company story and a text link "INSIDE NITEX".

The personality is loud and young: acid neon on black and white, enormous extended grotesque headlines, mono-spaced uppercase microcopy, and slanted parallelogram shapes. The remainder of the capture below the first screens is blank white.

## Colors

- **Neon `#d7ff00`** is the signature primary: the logo, the giant letters, hero copy, buttons, the story panel and the footer text (233 characters; 685 background units). The site's own variable `--color-neon-yellow-60` is `#d7ff0099`, the same hue at 60% opacity. A translucent `#ffff00b3` fill is also measured on a small area.
- **Black `#000000`** is both the ink (2560 characters) and the body background (8072 units, the largest area) and footer fill.
- **White `#ffffff`** is the canvas of the headline section and text on dark photos (195 characters).
- **Grey `#e6e6e6`** is a large measured background area (5352 units).
- **`#00000099`** is a translucent black fill on a small area.

There is no secondary hue; photography supplies blue, and every interface element is black, white or neon.

## Typography

Three families, each with a role:

- **PPNeueMontreal** (2312 weighted characters; weight 400) for body copy and the hero line: body 15px / 21px, hero sentence 18px / 23.4px; most text at 18px (1244 characters) and 16px (766).
- **Fragment Mono** (330 characters) for labels: nav and buttons at 12px / 15.6px uppercase; section tags at 14px / 18.2px with -0.14px tracking uppercase.
- **RightGrotesk**, with `Century Gothic` and sans-serif fallbacks, for display: 68px / 61.2px uppercase (the headline's line height is smaller than its size), a 20px / 21px uppercase footer style, and a 150px size (25 characters) for the giant letters.

Everything is weight 400; weight is expressed through the typeface (an extended heavy grotesque). The three faces are loaded webfonts; their commercial licensing was not checked.

## Layout

The layout is full-bleed and asymmetric: a 50/50 split hero, an oversized headline that deliberately runs beneath a floating panel, and a side panel docked to the right edge. Measured gaps: 8px (40 uses), 20px (22), 80px (16), 16px, 28px and 24px (the site declares `--spacing-gap: 20px`); paddings: 16px (16 uses), 12px, 28px, 8px, 20px, 24px, 4px and 128px. The header has `0px 20px` padding, the footer `120px 0px 64px`.

## Elevation & Depth

No box shadows or borders other than a 2-element `#d7ff00` border were measured. Depth is created by overlap (the neon panel sits over the headline, giant letters sit over the photo) and by full-bleed photography, not by shadows. The h2 label carries a measured `clip-path` of `polygon(-100% 0%, 0% 0%, -5% 100%, -100% 100%)`, a slanted edge used in its reveal.

## Shapes

`borderRadii` is empty: every rendered element computes a radius of 0px. The brand's shape language is the slanted parallelogram instead (the logo mark, the inline portrait crop and the clip-path), not rounding. Tokens carry `none: 0px`.

## Components

- **hero buttons**: rectangular mono-label buttons ("MEET NITEX" in neon, "GET STARTED" in translucent grey), black Fragment Mono 12px uppercase.
- **neon button/link**: `#d7ff00` fill with black mono uppercase text and a slanted icon ("INSIDE NITEX").
- **nav**: header with `0px 20px` padding and black 12px mono uppercase links.
- **headline**: RightGrotesk 68px uppercase black.
- **story panel**: neon `#d7ff00` block with black PPNeueMontreal text.
- **footer**: black fill, neon RightGrotesk uppercase 20px text, `120px 0px 64px` padding.

## Content and Voice

The voice is confident and compressed. Headlines are short imperatives or slogans ("FROM VISION TO GLOBAL IMPACT", "Helping Brands Thrive With Real-Time Fashion"); the story copy uses plain, claim-led sentences about reinventing the fashion supply chain, working across continents and redefining how brands design, sample and ship seasonal collections, with the words excellence, speed and transparency. The opened page organizes its story into Our story, What we do, What we believe in, How we help and Your needs, split by audience (talent, brands and partners), and its navigation is a short list of verbs and nouns: Meet Nitex, Get started, Inside Nitex, Join us, Contact, Blog and Login. Button labels are in mono uppercase and repeat the brand name ("INSIDE NITEX") rather than using generic verbs, which keeps the interface typographically consistent with the logo.

Imagery in the capture mixes fashion portraiture with factory and fabric-dyeing scenes, so the supply chain is shown as craft as well as technology; the same blue tones in both photographs make the neon read as the only added color.

## Design System Architecture

No public design system, brand guideline or press kit is linked: the opened page https://nitex.com/ lists navigation, key pages, social profiles and legal pages and none for brand assets. Its shipped CSS has Tailwind-style root variables (`--text-2xl: 2rem`, `--text-lg: 1.125rem`, `--text-7xl: 9.375rem` which equals the 150px display size, `--spacing: .25rem`, `--spacing-gap: 20px`, `--color-zinc-100`, `--color-neon-yellow-60`, and the easing `--ease-in-out-quint: cubic-bezier(.83,0,.17,1)`). The de-facto system is three fonts, one neon, black and white, no radius.

## Do's and Don'ts

- Do use `#d7ff00` as the only accent, on black or over photography.
- Do set extended headlines in uppercase 68px RightGrotesk and tiny labels in Fragment Mono uppercase.
- Do overlap panels with type; use slanted edges and parallelogram crops.
- Don't round corners; every measured radius is 0px.
- Don't use shadows.
- Don't add a second accent hue.

## Responsive Behavior

The 390px mobile pass recorded the hero sentence at 18px / 23.4px in neon and the h2 label at 14px / 18.2px with the same clip-path, both unchanged from desktop. Layout reflow of the split hero, the giant headline and the neon panel was not measured, and no breakpoint values were captured.

## Iteration Guide

1. Start with black and white fields and `#d7ff00` for highlights.
2. Use RightGrotesk 68px uppercase for headlines, PPNeueMontreal 15px / 21px for paragraphs and Fragment Mono 12px uppercase for labels.
3. Keep every corner at 0px, using a slant for shape.
4. Dock a neon story panel to the right edge and overlap it with the headline.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=nitex --url=https://nitex.com/ --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=nitex`.
