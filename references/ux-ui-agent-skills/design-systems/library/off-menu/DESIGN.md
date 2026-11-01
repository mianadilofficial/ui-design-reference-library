---
version: alpha
name: Off Menu
category: "Portfolio"
description: "Off Menu studio site (offmenu.design) measured live: near-white #fdfdfc canvas, near-black #12110d ink, Neue Montreal at weight 500 with a 36px/40px project title and 16px/20px body, pill and 8px to 40px radii, and circular project thumbnails on an empty field."
colors:
  canvas: "#fdfdfc"
  ink: "#12110d"
  primary: "#12110d"
typography:
  display:
    fontFamily: "\"Neue Montreal\", sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 40px
  body:
    fontFamily: "\"Neue Montreal\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
  nav:
    fontFamily: "\"Neue Montreal\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 12px
  md: 40px
  pill: 9999px
spacing:
  s1: 2.4px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 48px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
    padding: 16px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

# Off Menu

## Overview

The measured page is https://www.offmenu.design/ (title "Off Menu — AI-Native Studio for Agentic Interfaces"), 186 visible elements, the site of a studio that describes itself as building "brands and web experiences for high-growth startups". The first screen is almost empty on purpose: an off-white field, a bold black "O/M" logotype at the top left, two small marks at the top right (a solid dot and a 3 by 3 grid of dots, the menu control), and in the middle a centred two-line statement "AI-native studio building brands and web experiences for high-growth startups". Around the statement, nine small circular thumbnails (each a device mockup on a coloured or photographic background: laptops, a monitor, a phone, a green poster) are scattered along an arc, each one a project. At the lower left a dark pill with a dotted-circle icon says "Let’s work together", and at the lower right a ring of dots acts as a loader or indicator. The rest of the captured page is blank canvas.

The opened page text lists the navigation (Work, Services, Pricing, Approach, "Book a Call"), a resources row (Writing, Twitter/X, LinkedIn, Terms of Service) and the nine project names (Resonant, Control Tower, Ditto, Hanover Park, Superintelligent, Tenacity, Utility, Flex, ClosetNow). An assistant named Remi greets visitors in a chat widget with prompts such as "What do you do?" and "Where should I start?". The tone is minimal, confident and startup-oriented. The chat widget and its buttons are chat controls and are not documented as brand UI.

## Colors

Background area: `#fdfdfc` (1031), `#12110d` (232), `#ffffff1a` (8), `#edecec` (5). Text by characters: `#12110d` (169), `#edecec` (83), `#ffffff80` (35), `#24241c80` (9), `#fdfdfc` (8).

- `canvas` #fdfdfc: the page (root variable `--color-background`).
- `ink` / `primary` #12110d: near-black for the logotype, text and the dark pill.

The translucent whites (#ffffff1a, #ffffff80) and light grey (#edecec) were measured on the chat widget's greeting and prompt button, and #24241c80 on 9 characters of unidentified small text; none is documented as a brand token. The role detection chose the chat prompt "What do you do?" as the primary CTA and the chat greeting as body text; both were overridden in SOURCES.json `_roleOverrides` with reasons. The root declares 106 Tailwind 4 variables, including `--color-border: #0000001a`, `--color-halo: #ffffff4d` and lab-based gray, zinc and blue steps; these were not seen on the measured surfaces.

## Typography

One family, Neue Montreal (a variable font loaded for weights 100 to 900), carries all 304 measured characters. Weight 500 covers 276 of them, 400 covers 19 and 600 covers 9. Sizes by characters: 16px (132), 14px (113), 24px (38), 10px (9), 36px (8), 12px (4).

- `display` 36px / 40px, weight 500: project titles (for example "Resonant").
- `body` 16px / 20px, weight 500.
- `nav` 16px / 24px, weight 400; the header menu element measured 24px / 24px weight 500 with the labels Work, Services, Pricing, Approach and Book a Call in #12110d.

The mobile pass measured the same 36px / 40px title, so type size does not change at 390px in the measurement. The fallback is `"Neue Montreal", sans-serif`.

## Layout

The layout is a centred composition: the statement is centred in a narrow measure and the project thumbnails are placed on an arc around it, rather than in a grid. Measured spacing values are 2.4px (10 uses), 12px (8), 8px (7), 16px (6), 32px (3), 48px (1) and 4px (1). The Tailwind variable `--container-md: 28rem` and `--breakpoint-xl: 80rem` are declared in the root. Only the first 600px of the 1280px-wide capture contain content; the rest of the captured page is empty canvas.

## Elevation & Depth

No box shadows were measured. The root has transparent Tailwind shadow variables only. Depth comes from the circular thumbnails (photographic mockups with their own shading) floating on the flat canvas.

## Shapes

Measured radii: 3.35544e+07px (17 elements, fully round: pills and circular thumbnails), 12px (2), 8px (2) and 40px (1). Tokens: `xs` 8px, `sm` 12px, `md` 40px and `pill` 9999px. Thumbnails are circles; the "Let’s work together" button is a capsule; the root also defines `--radius-sm` .25rem, `--radius-lg` .5rem, `--radius-2xl` 1rem, `--radius-3xl` 1.5rem and `--radius-4xl` 2rem.

## Components

- **nav / nav-link**: text in #12110d at 16px weight 400 in the header; the menu in the capture is a 3 by 3 dot grid icon and a dot at the top right.
- **logotype**: heavy black "O/M".
- **dark pill**: #12110d capsule with a dotted icon and white "Let’s work together" in the capture; its exact component values were not measured separately, so no token is declared for it.
- **project thumbnail**: a round image of a device mockup.

No primary button, card or input is declared from this page because the only detected candidates were chat controls.

## Design System Architecture

No public brand guideline or design system link appears on https://www.offmenu.design/ (the opened page links to Writing, Twitter/X, LinkedIn and Terms of Service). The de-facto system is Tailwind CSS 4: root variables like `--color-background`, `--color-border`, `--color-halo`, `--radius-*`, `--text-*`, `--breakpoint-xl`, `--container-md` and `--ease-in`. Source: `web/data/extracted/off-menu.json`.

## Do's and Don'ts

- Do keep the canvas almost empty and let one statement and the circular thumbnails carry the page.
- Do use #12110d on #fdfdfc with Neue Montreal at weight 500.
- Do make thumbnails circular and calls capsule-shaped.
- Don't style the Remi chat widget or its prompt buttons as the studio's primary button.
- Don't add shadows or additional accent colors; none were measured.
- Don't use bold display weights; the measured titles are 500.

## Responsive Behavior

The 390px pass measured the project title at 36px / 40px weight 500 (identical to desktop) in a 149px wide box. Layout changes, the thumbnail arc and navigation behavior at that width are not measured.

## Iteration Guide

1. Off-white #fdfdfc, near-black #12110d.
2. One family at weight 500: 36px titles, 16px body.
3. Circular thumbnails; capsule buttons; sparse composition.
4. Add no color accents unless measured.
5. Gate: `node web/scripts/verify-designs.mjs --slug=off-menu`.

### Content and imagery notes

Imagery is product mockup photography cropped to circles: a laptop on a warm wooden desk, a laptop in dark grey stripes, a monitor on a light desk, a phone on a brown surface displaying a green interface, a laptop floating above clouds and greenery, a dark monitor with data panels, a monitor with a dark green interface, and a green poster reading "Flex". The thumbnails have no captions in the first screen; names appear only in the page text. The statement line is a single sentence without punctuation, set centred in 16px, so the whole first screen reads as a quiet poster with the studio description as its only text.

### Why the first screen is mostly blank

The measurement shows 186 visible elements and a page whose rendered content ends within the first screen height, with a canvas of #fdfdfc below it. The extraction therefore reports few measured fonts sizes (six distinct sizes in total) and a single family. This limited surface means the system documented here is deliberately small: two colors, one family, one weight family around 500, circular imagery, and capsule controls. Anything beyond those, such as the project detail pages, pricing or service pages named in the navigation, was not opened and is not documented.
