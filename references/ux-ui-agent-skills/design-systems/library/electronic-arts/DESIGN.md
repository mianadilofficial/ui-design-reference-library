---
version: alpha
name: Electronic Arts
category: "Gaming"
description: "Electronic Arts official site (ea.com): deep navy #00071f canvas with off-white #eaeaec text, electric blue #255af6 8px-radius CTAs (hover #1e4aca), slate #2b3044 game cards with #404557 borders and 12px corners, #151c32 footer. electronicartsdisplay 700 at 44px for headlines, electronicartstext 14–20px for everything else, no letter-spacing."
colors:
  canvas: "#00071f"
  ink: "#eaeaec"
  primary: "#255af6"
  on-primary: "#eaeaec"
  primary-hover: "#1e4aca"
  surface-white: "#ffffff"
  surface-card: "#2b3044"
  ink-muted: "#bfc1c7"
  border-outline: "#9598a2"
  nav-bg: "#171a29"
  nav-text: "#afafaf"
  card-border: "#404557"
  footer-bg: "#151c32"
typography:
  display:
    fontFamily: electronicartsdisplay, sans-serif
    fontSize: 44px
    fontWeight: 700
    lineHeight: 52.8px
    letterSpacing: 0%
  body:
    fontFamily: electronicartstext, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: 0%
  subheading:
    fontFamily: electronicartstext, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: 0%
  button:
    fontFamily: electronicartstext, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.border-outline}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.nav-text}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
---

# Electronic Arts

## Overview

This is the official Electronic Arts site (ea.com), measured on its home page. It is a dark, game-launcher-style
portal: a deep navy `#00071f` canvas, off-white `#eaeaec` text, full-bleed key art from EA's franchises, and a
single electric-blue `#255af6` action colour. The interface itself is quiet and utilitarian so that the game art —
Battlefield 6, EA Sports FC 27, Apex Legends, The Sims 4, Madden NFL 27 — supplies the drama.

The capture shows a thin dark global bar with "Electronic Arts" text, a navigation row with the round EA logo and
menu items (Games, Experiences, About, Commitments, Resources), then a full-screen hero for "Battlefield 6 | REDSEC —
Season 5" with an 18px description and two buttons (a blue "BATTLEFIELD 6" and an outlined "FREE TO PLAY
REDSEC"). A second hero, "Battlefield 6 PLAY LIST DROP", carries a blue "Join Now" button and a strip of three
thumbnail tabs. "Featured Games" is a 3×2 grid of slate cards with box art, small genre tags ("Base game",
"Sports", "Shooter") and titles, closed by a blue "See Latest Games" button. Then "Latest Updates" (a large
promotion card with a white text panel), "Latest EA News" (four white article cards with an arrow carousel),
"Players and Parents: Video game control is in your hands" with a small outlined button, a blue "Sustainability
Report 2026" feature, and a footer with social icons, a language selector, a "Back to top" button and legal rows.

Copy is product-forward and energetic: "Fight in high-intensity infantry combat. Rip through the skies in aerial
dogfights." Button labels are short and frequently uppercase game names.

## Colors

- **Canvas `#00071f`** — the deep navy page background, the largest measured area.
- **Ink `#eaeaec`** — off-white body and heading text on the dark surfaces, and the label colour on blue buttons.
- **Primary `#255af6`** — the electric-blue CTA fill ("BATTLEFIELD 6", "Join Now", "See Latest Games",
  "Play Now"). Measured hover: **`#1e4aca`**.
- **Surface card `#2b3044`** — the slate game-card fill, with a **`#404557`** 1px border. The same `#2b3044` is the
  most-read text colour by character count, because it is the text colour on the white news and update cards.
- **Surface white `#ffffff`** — news cards and the update card's text panel.
- **Ink muted `#bfc1c7`** — secondary text on dark.
- **Border outline `#9598a2`** — outline of secondary buttons ("FREE TO PLAY REDSEC", "Learn More").
- **Nav bg `#171a29`** with **nav text `#afafaf`** — the thin global bar at the top.
- **Footer bg `#151c32`** — the footer band.

The outlined "FREE TO PLAY REDSEC" button measured a hover fill of `rgba(255, 255, 255, 0.1)`. Overlay tabs on the
hero use translucent black fills (`#00000099`, `#0000004d`) over the art.

## Typography

EA serves two proprietary families:

- **electronicartsdisplay** (700) — headlines only: "PLAY LIST DROP", "Welcome to The World's Game." at 44px /
  52.8px. Other display sizes recorded on the page are 38px ("Featured Games"), 36px and 30px.
- **electronicartstext** (400, 700) — everything else and by far the dominant face: hero description 18px / 25.2px,
  card titles 20px / 700 / 24px, buttons 16px / 700 / 16px, and the bulk of the page at 14px and 12px; tags and
  legal text drop to 10px and 9px.

Letter-spacing is 0% at every size — EA's type is set tight and plain. Some text in the global bar computes to the
browser's Times face; that is an unstyled fallback, not a brand font, and is not tokenised. The hero's "SEASON 5"
lettering is part of the key art image, not live text (see `_roleOverrides`).

Substitutes: a condensed-leaning bold grotesque for electronicartsdisplay and a neutral grotesque for
electronicartstext.

## Layout

The desktop viewport measured 1280px and the page runs about four and a half screens. Two stacked full-bleed
heroes (together 1360px tall) open the page, followed by one long navy band holding Featured Games, Latest Updates
and Latest EA News, then the footer. The game grid is three columns; the news row four columns. The most frequent
gaps are 8px and 24px, with 4px, 12px and 16px for tighter groups and 64px between major blocks. Padding is mostly
16px and 4px inside components, 80px around sections. Headlines are centred over grids ("Featured Games") or
left-aligned in the heroes.

## Elevation & Depth

No box shadows were measured. Depth comes from layering: key art beneath translucent black overlays, slate cards
with a 1px lighter border on the navy canvas, white cards that pop forward on the dark page, and the slightly
lighter footer navy.

## Shapes

Radii are small and consistent: 12px on game and news cards (the most frequent radius), 8px on primary buttons and
hero tabs, 6px on the smaller "Learn More" button, 4px and 2px on genre tags and small controls. The round EA badge
and circular social icons are the only fully round elements.

## Components

- **Primary button** — `#255af6` fill, `#eaeaec` electronicartstext 16px / 700 label, 48px tall, 8px radius; hover
  `#1e4aca`. A smaller variant measured 38px tall with a 6px radius.
- **Outlined button** — transparent with a `#9598a2` outline, off-white label, same 8px radius; hover adds a 10%
  white fill.
- **Game card** — `#2b3044` fill, 1px `#404557` border, 12px radius, box art on top, small tag chips and a 20px bold
  title underneath; measured 395px wide by 527px tall in the grid.
- **News card** — white, 12px radius, thumbnail, "News Article" tag, date, bold title and a three-line excerpt in
  `#2b3044`.
- **Hero tab strip** — three translucent dark tabs with a thumbnail and label; the active tab has a blue outline.
- **Global bar and nav** — `#171a29` strip with `#afafaf` text, then the navigation row with logo and dropdown
  menus on the navy canvas.
- **Footer** — `#151c32`, round social icons, language select, "Back to top" button, link rows and legal text.

## Design System Architecture

EA publishes no public design system: the About page (https://www.ea.com/about) links only to a press portal
(https://www.eapressportal.com/), which returned a browser-compatibility notice and no brand assets. The shipped site
exposes almost no CSS variables (`--z-index-level-navigation`, `--z-index-level-popup`, `--vh`), so the de-facto
system lives in computed styles: two named families, one blue action colour with one darker hover, a navy surface
ladder (`#00071f` → `#151c32` → `#171a29` → `#2b3044`), a radius ladder of 2/4/6/8/12px, and zero letter-spacing.

## Do's and Don'ts

**Do**
- Keep the canvas deep navy and the text off-white `#eaeaec`, not pure white.
- Use electric blue `#255af6` only for primary actions.
- Let franchise key art fill heroes edge to edge; keep UI chrome small on top of it.
- Use 12px cards and 8px buttons consistently.
- Set headlines in electronicartsdisplay bold and everything else in electronicartstext.

**Don't**
- Don't add tracking; every measured size is 0%.
- Don't add drop shadows; separate surfaces by tone and 1px borders.
- Don't introduce extra accent colours into UI — colour belongs to the game art.
- Don't treat the browser Times fallback as part of the type system.

## Responsive Behavior

From the extraction's mobile pass:

- The "PLAY LIST DROP" headline drops from 44px / 52.8px to 36px / 43.2px.
- The hero description keeps 18px / 25.2px.
- The primary "BATTLEFIELD 6" button drops to a 12px / 700 label with a 4px radius.
- A menu toggle is visible on mobile and not on desktop.
- The widest card row measured 3 columns on mobile.
- The most-read mobile sizes were 14px, 16px and 12px; other display sizes measured 26px, 22px and 32px.

Breakpoints and grid reflow between widths were not measured.

## Iteration Guide

1. Set `#00071f` canvas, `#eaeaec` ink, and load both EA families.
2. Put key art in full-bleed heroes with a short 18px description and one blue plus one outlined button.
3. Present catalogues as 12px-radius slate cards with 1px `#404557` borders.
4. Use white cards with `#2b3044` text for editorial news.
5. Measure before adding: the site ships few tokens, so new values must come from computed styles.
