---
version: alpha
name: "The House of Wonders (Audemars Piguet 150 years)"
category: "Business & Corporate"
description: "Audemars Piguet 150th-anniversary interactive microsite: black #000000 canvas, white Helvetica Neue at weights 100 and 300, Times Now italic accents, outlined 9999px pills, 8px cream #fefdf5 panel and five dark room tints."
colors:
  canvas: "#000000"
  page-largest: "#fefdf5"
  ink: "#ffffff"
  primary: "#fefdf5"
typography:
  display:
    fontFamily: "\"Helvetica Neue\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 22px
    fontWeight: 100
    lineHeight: 24.64px
    textTransform: uppercase
  body:
    fontFamily: "\"Helvetica Neue\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
rounded:
  xs: 8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 28.44px
  s8: 32px
  s9: 35.56px
  s10: 40px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xs}"
---

## Overview

The House of Wonders (150years.audemarspiguet.com) is the interactive anniversary microsite of the Swiss watchmaker Audemars Piguet; its title is "150 years of Audemars Piguet - The House of Wonders" and the measured URL is the "Mechanical Secrets" room (en#/rooms/mechanical_secrets). It is separate from the brand's main site at audemarspiguet.com, which has its own design file in this library. The experience is a virtual house of themed rooms (the measured variables name mechanical, library, design, astronomy and talent), each a full-screen, slow-moving 3D scene of watch movements and objects with a thin DOM interface laid over it: a "150 years" logo at top left, a menu button, the centred "AUDEMARS PIGUET Le Brassus" wordmark, a "SURPRISE ME" outlined pill and a collection counter at the right, a vertical room label at the left ("MECHANICAL SECRETS"), round up and down arrow buttons under a centred room title, and circular hotspot markers around the scene.

At first load an onboarding panel in cream ("WELCOME TO THE House of Wonders", an illustration of the Maison facade, a "LOG IN TO SAVE YOUR JOURNEY" outlined pill and an underlined "TIME TO EXPLORE!" link) covers the centre of the scene. The mood is luxurious and quiet: dark canvas, copper and bronze lighting, thin light type, and generous empty space around a rotating object.

## Colors

The canvas is pure black (#000000) with white (#ffffff) text and icons. The only DOM surface fill measured is a warm cream, #fefdf5, which is the onboarding panel and the generated primary and card color; the remainder of the page is a canvas scene whose colors are not measurable as DOM styles. Because this cream is measured only on the welcome panel, it is documented here as the panel color rather than as a brand-wide fill.

Each room has a published theme color in the site's variables (as RGB triples): mechanical 99, 50, 33 (a rust brown), library 60, 75, 56 (forest green), design 59, 79, 96 (slate blue), astronomy 19, 40, 64 (deep navy) and talent 135, 73, 78 (muted rose). The same names carry "menu-from", "menu-to" and "menu-panel" gradient stops, for example mechanical menu from 99, 50, 33 to 122, 62, 41, and astronomy from 19, 40, 64 to 28, 46, 74. Every room's "secondary" is white (255, 255, 255). Together they form a set of dark, desaturated jewel tones, each one tinting a room's overlay and menu while the interface text stays white.

- Base: #000000 with #ffffff text.
- Panel: #fefdf5 with #000000 text.
- Rooms: five dark tints, one per room, applied to menu panels.

## Typography

The site's body and heading families are both Helvetica Neue (variables --fonts-body and --fonts-heading), loaded at weights 100, 300, 400 and 500, with ui-sans-serif and system fallbacks. A serif, Times Now (loaded at 200 italic), is the --fonts-serif face and is used for italic emphasis words such as "House of Wonders" and "SECRETS". Cormorant Garamond and Myriad Pro are also declared as variables, and Noto Sans TC, KR, SC and JP are declared for Asian-language versions.

Measured sizes: the room title (h1 role) is 22px, weight 100, line height 24.64px, uppercase, the same at the 390px mobile pass. Body text is 16px, weight 300, line height 24px, on both desktop and mobile. The very light weights (100 and 300) give the overlay text a watch-dial delicacy; italics in the serif face add a calligraphic accent.

## Layout

The page is a single full-viewport stage with fixed overlays. A top bar holds the logo, menu and wordmark in a row, with controls at the right; side labels run along the left edge; navigation arrows and the room title are centred at the bottom; hotspots are positioned over scene objects. There is no scrolling page: rooms change by arrow, menu or "Surprise me". The spacing scale measured on the DOM is 4px, 8px, 12px, 16px, 20px, 24px, 28.44px, 32px, 35.56px and 40px. The measured DOM contains 181 visible elements.

## Elevation & Depth

No shadows were measured. Depth is created by the 3D scene itself, with copper lighting, vignette gradients toward black at the screen edges, and the cream panel floating above the scene. The panel has a notched top edge, like a building roof, as its only structural flourish.

## Shapes

Measured radii: 9999px (18 elements: all pills and circular buttons) and 8px (the panel and cards). The surprise-me pill, login pill, collection button, arrow buttons and hotspot rings are all full pills or circles; the panel uses 8px corners. Outlines are thin, 1px-class lines in white on dark and black on cream.

## Components

- Pill link or button: outlined, transparent fill, white text on dark and black text on the cream panel, 16px weight 300, uppercase, full pill radius (examples: SURPRISE ME, LOG IN TO SAVE YOUR JOURNEY).
- Circular icon button: outlined ring with an arrow or counter badge.
- Onboarding panel: #fefdf5 fill, #000000 text, 8px radius, notched header with a facade line illustration, centred copy.
- Room label: vertical or centred uppercase text in Helvetica Neue 100 with an italic Times Now accent word.
- Menu: icon button with two lines; panels tinted by the room color.
- Hotspot: thin circle with a plus mark, over the scene.

## Design System Architecture

No public design system or brand guideline for this microsite was found. The page's markup and variables show that it is built from the Audemars Piguet commons microsite templates (the Adobe data layer on the page names an "ap-commons/ui/microsites" template) and a themed variable system: --colors-THEME-COLORS-{room}-primary, -secondary and -primary-menu-from/to/panel, --fonts-* variables for each family and Tailwind-style utility variables (--tw-ring-shadow). The brand's main site is a separate system and its design file is kept separately.

The microcopy voice is courteous and invitational. The welcome panel speaks in the first person plural, defining watchmaking as "a passion that grows with time" and inviting visitors to explore 150 years of horological mastery, bold design, passion and free-spirit, then offers a clear choice between saving the journey by logging in and simply exploring. Room names are short noun phrases in capitals (Mechanical Secrets, Astronomical Observatory) with a single italic word, and controls are labelled in plain verbs such as "Surprise me". The art direction treats each watch movement as sculpture: single objects rotate slowly against a dark, gradient-lit backdrop with a fine ring hotspot marking each point of interest.

## Do's and Don'ts

- Do set text in thin Helvetica Neue (100 to 300) in white on black.
- Do add a single italic serif word for emphasis.
- Do use outlined pills and rings; fill buttons are not part of the measured UI.
- Do tint each room with its own dark theme color.
- Don't use shadows or bright accents; copper light comes from the scene.
- Don't use heavy weights.
- Don't treat the onboarding panel's cream as a global page fill.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 stays 22px with a 24.64px line height in a 132px box; body text stays 16px with a 24px line height in a 294px box. Layout changes, hotspot behavior and menu behavior at small widths were not measured.

## Iteration Guide

1. Black #000000 canvas, white #ffffff text, Helvetica Neue 100 and 300.
2. Outlined 9999px pills, 8px panels, no shadows.
3. Room tints from the published theme variables.
4. Use Times Now italic sparingly.
5. Hover, focus and the in-scene lighting are not measured.
