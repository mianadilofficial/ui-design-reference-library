---
version: alpha
name: UNESCO Virtual Museum of Stolen Cultural Objects
category: "Culture & Events"
description: "UNESCO Virtual Museum of Stolen Cultural Objects (museum.unesco.org), measured as its entry screen: a pale cloud-photograph canvas (#ece2db), dark brown #442d26 text, a salmon-pink #cb8d79 title line, Unbounded 40px display type with -2px tracking, Inter 16px body, and a pill-shaped Visit now button."
colors:
  canvas: "#ece2db"
  page-body: "#442d26"
  ink: "#442d26"
  primary: "#cb8d79"
  beige: "#f7ebdb"
  ink-dark: "#26211f"
typography:
  display:
    fontFamily: Unbounded, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 36.4px
    letterSpacing: "-2px"
  display-mobile:
    fontFamily: Unbounded, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 22.8px
    letterSpacing: "-1.2px"
  body:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20.8px
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: "-0.96px"
rounded:
  card: 48px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5.6px
  s3: 8px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 32px
  s8: 40px
components:
  nav:
    textColor: "{colors.ink-dark}"
    padding: 20px 0px 0px
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.page-body}"
    padding: 0px 0px 20px
---

## Overview

This file documents the entry screen of the UNESCO Virtual Museum of Stolen Cultural Objects exactly as re-measured on 2026-10-16 at `https://museum.unesco.org/` (1280px wide, a single 800px viewport with no scroll, 90 visible elements, the bottom cookie banner hidden before measurement). The measured page is a splash: a full-screen soft cloud photograph in peach, cream and pale grey-blue, with a small glowing object floating at the centre. At the top centre sits the UNESCO logo lockup (a dark brown temple-pillar square beside the lowercase wordmark "unesco"). The title "UNESCO Virtual Museum of Stolen Cultural Objects" is set over two lines, the second line in salmon pink; under it is the line "Explore a unique museum - a digital space to learn, connect with and share the stories of stolen cultural heritage." followed by a dark brown pill button "Visit now" with a cream circle holding a chevron. At the lower left a headset icon with the text "This website is also available with a VR Headset."; at the lower right a language selector ("English" with a chevron) and a small sound-bars icon.

Because only this entry screen is measured, nothing about the museum's interior rooms is documented. The tone is calm, invitational and plain: short declarative sentences and one clear action.

## Colors

The measured palette is warm and small. Background by area: #ece2db (1024, the page), #442d26 (23, the dark brown body and button area) and #f7ebdb (3). Text by characters: #442d26 (211), salmon pink #cb8d79 (23), cream #f7ebdb (18) and #26211f (8).

- **canvas #ece2db**: the pale cloud-toned page color.
- **ink and page-body #442d26**: dark brown for the title, copy and nav; also the body element's background color.
- **primary #cb8d79**: salmon pink on the second title line.
- **beige #f7ebdb**: cream used on the button's inner circle and for text on dark brown.
- **ink-dark #26211f**: the darkest brown, used on the header area.

The stylesheet declares the same family as RGB triplets (`--colors-brown: 68,45,38`, `--colors-pink: 203,141,121`, `--colors-beige: 247,235,219`, `--colors-dark-brown: 38,33,31`, `--colors-dark-beige: 229,214,199`, plus black and white). No cool or saturated accent was measured on the rendered screen.

## Typography

Two variable fonts are served from `/assets/fonts/`: **Unbounded** (42 characters, the title) and **Inter** (218 characters, everything else).

- **display**: Unbounded 40px, weight 400, line-height 36.4px, letter-spacing -2px (the h1, 823px wide, 73px tall for two lines). Mobile (390px): 24px / 22.8px, letter-spacing -1.2px.
- **body**: Inter 16px, weight 500, line-height 20.8px; the intro paragraph has 0px 32px padding.
- **nav**: Inter 24px, weight 400, line-height 36px, letter-spacing -0.96px.
- Other measured pairs: 12px with -0.48px tracking (22 characters, the small labels and the language selector). Weights by characters: 500 (164), 400 (56), 600 (40).

Font substitutes: both families are open variable fonts served by the site; the declared fallback is sans-serif.

## Layout

The screen is a single centred column over a full-bleed photograph. A 10-column grid is declared (`--container-nb-columns: 10`, `--container-margin: 4.27vw`, gutter 0.625rem, max width 91.47vw). Content blocks are centred: logo at the top, title and button in the lower-centre, utility controls pinned to the lower left and lower right. Gaps are 16px (9), 20px (5), 40px, 8px and 4px; paddings are 5.6px (7), 20px (3), 24px and 32px. The header has 20px top padding and the footer area 20px bottom padding.

## Elevation & Depth

No box shadows and no borders were measured. Depth comes entirely from the cloud photography, the soft glow around the floating object, and the contrast between the dark brown button and the pale sky. The logo lockup has a thin outline in the capture, which the extraction did not record as a border.

## Shapes

Measured radii: 48px (5 elements) and a full pill (3 elements). The Visit now button is a pill with a circular chevron holder; other containers in the stylesheet use 16px, 24px, 40px, 56px and 64px radii that were not rendered on this screen. The logo block is square-cornered.

## Components

- **Visit now button**: a long dark brown (#442d26) pill with cream text and a cream circular chevron holder; no button was detected by the extractor (`ctaCandidates` is empty), so no pixel measurements are claimed for it.
- **Language selector**: "English" with a down chevron, 12px Inter.
- **VR notice**: headset icon with the text "This website is also available with a VR Headset."
- **Sound toggle**: a small bars icon at the lower right.
- **Nav link**: #442d26, Inter 24px, with 20px top padding on the nav block.

## Design System Architecture

No public design-system site for this museum was opened; the system is read from the shipped CSS. Colors are stored as space-separated RGB triplets in `--colors-*` variables so they can be composed with alpha (the stylesheet contains #442d2666, #442d264d and #442d2633 translucencies). Layout uses CSS custom properties for the container (`--container-max-width`, `--container-margin`, `--container-column-width`, `--container-gutter-width`) and a viewport-height variable `--vh`. Utility classes follow Tailwind naming (`--tw-ring-*`, `--tw-shadow`). Motion durations are 150ms (11), 500ms (8), 300ms (7) and 1000ms (4), with `ease` (14) most used and custom cubic-beziers such as `cubic-bezier(.88,.14,.12,.86)`. Breakpoints: min-width 640px, 768px, 1024px (5), 1280px, 1400px and 1536px.

## Do's and Don'ts

- Do keep the surface in the pale warm range (#ece2db) and the text dark brown (#442d26).
- Do use salmon pink (#cb8d79) sparingly for one emphasised phrase.
- Do set titles in Unbounded with tight negative tracking and body in Inter 500.
- Do pair a single pill action with a short descriptive line.
- Don't introduce saturated or cool accent colors; none were measured.
- Don't add shadows or borders to the button area.
- Don't document the cookie banner as brand UI.

## Responsive Behavior

Measured at 390px: the title drops to 24px (line-height 22.8px, tracking -1.2px); the type set seen is 12px (138 characters), 24px (56) and 16px (18); the header shows 1 link and no menu toggle; card columns measured 4. Further mobile layout is not measured. The stylesheet declares media queries at min-width 640px, 768px, 1024px, 1280px, 1400px and 1536px.

## Iteration Guide

1. Start from canvas #ece2db, ink #442d26, accent #cb8d79.
2. Title: Unbounded 40px with -2px tracking; body: Inter 16px/500.
3. Keep one pill action; use #f7ebdb for the inner chevron holder.
4. This file covers the entry screen only; re-measure the interior pages (the "Visit now" destination) before adding tokens.
5. Keep every number equal to the frontmatter and to `web/data/extracted/unesco-stolen-objects-museum.json`.

### Measured notes for implementers

The page scroll height equals the viewport (800px), so this entry screen does not scroll. The body element reads Inter 16px at weight 500 with line-height 20.8px and a dark brown background (#442d26) behind the photograph layer; the visible page color #ece2db comes from the photograph and its container, which is why both browns and the pale tone appear in the measurements. The first body paragraph begins "Explore a unique museum" and is the measured body-text role. The accessibility skip target at the top of the document reads "Homepage" and then "UNESCO", and the notice "This website is also available with a VR Headset" is part of the first text in the page. Motion on this page includes long durations (1000ms four times, 2000ms twice and 10000ms twice), consistent with slow ambient animation of the sky and object; the specific animation was not recorded here because the motion pass was skipped. Hover and focus states were not captured (the hover list is empty).
