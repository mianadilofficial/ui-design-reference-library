---
version: alpha
name: Atelier San Rita
category: "Portfolio"
description: "Portfolio site of Atelier San Rita, a Canadian creative studio. A map-as-interface home on icy blue #dde2e4 with forest-green #2d3329 ink, adventure-yellow #e2ffcc highlights, F37 Stout compressed capitals at 56px over 10px bold monospace labels, and no rounded corners anywhere."
colors:
  canvas: "#dde2e4"
  page-body: "#ffffff"
  ink: "#2d3329"
  primary: "#e2ffcc"
  on-primary: "#2d3329"
  surface: "#84907f"
  deep-green: "#161b13"
typography:
  display:
    fontFamily: F37stout, "F37stout Fallback", ui-monospace, SFMono-Regular, Consolas, "Liberation Mono", Menlo, monospace
    fontSize: 56px
    fontWeight: 400
    lineHeight: 50.4px
    textTransform: uppercase
  display-mobile:
    fontFamily: F37stout, "F37stout Fallback", ui-monospace, SFMono-Regular, Consolas, "Liberation Mono", Menlo, monospace
    fontSize: 32px
    fontWeight: 400
    lineHeight: 28.8px
    textTransform: uppercase
  heading:
    fontFamily: mono, "mono Fallback", ui-monospace, SFMono-Regular, Consolas, "Liberation Mono", Menlo, monospace
    fontSize: 10px
    fontWeight: 700
    textTransform: uppercase
  subheading:
    fontFamily: F37stout, "F37stout Fallback", ui-monospace, SFMono-Regular, Consolas, "Liberation Mono", Menlo, monospace
    fontSize: 48px
    fontWeight: 400
    lineHeight: 43.2px
    textTransform: uppercase
  body:
    fontFamily: mono, "mono Fallback", ui-monospace, SFMono-Regular, Consolas, "Liberation Mono", Menlo, monospace
    fontSize: 10px
    fontWeight: 700
    textTransform: uppercase
  link:
    fontFamily: mono, "mono Fallback", ui-monospace, SFMono-Regular, Consolas, "Liberation Mono", Menlo, monospace
    fontSize: 12px
    fontWeight: 400
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 5px
  s2: 6px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 24px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 6px 0px
---

# Atelier San Rita

## Overview
The measured page is https://sanrita.ca/en, titled "San Rita | Designing Stories, Brands & Digital Worlds - Atelier San Rita - Creative Studio". The home is not a conventional page but a single 800px-tall viewport built as an interactive map. A satellite-style terrain image of orange rock and green forest fills the right two thirds, overlaid with a thin white trail line, circular waypoint markers, crosshair grid lines and tick labels ("72PX | 54PT", "16.1KM | 10MI", a clock reading "04:31:28 GMT", "EST.2024"). The headline "SCROLL TO ENTER OUR WORLD" sits over the map in pale green capitals. A dark inset card in the lower right shows "LATEST HOT SPOT ADDED" with the project name "PODIUM GLOBAL". The left column carries a vertical menu with pixel-style icons for Map, Projects, About, Playground, Contact, Instagram and LinkedIn, a legend for Road, Trail, Fishing spot and Viewpoint, and an EN/FR language switch. The big statement "A CREATIVE STUDIO WHERE BRANDS AND STORIES MOVE OFF-TRAILS" is set bottom-left. The metaphor is a hiking trail map, and every label follows it.

## Colors
The palette is declared as Tailwind-style theme variables on the root: `--color-icy-blue #dde2e4`, `--color-terrain-grey #84907f`, `--color-deep-green #161b13`, `--color-forest-green #2d3329` and `--color-adventure-yellow #e2ffcc`. The icy blue is the page canvas, forest green is the ink for headings, menu labels and link text, adventure yellow (a pale mint despite its name) is the highlight used for the map headline, the inset card text and the logotype in the capture, and terrain grey is the muted surface and mobile footer text. The deep green `#161b13` is the darkest value and is recorded as a token from the root variables. The body element itself measures `#84907f` background with `#2d3329` text; `#ffffff` is recorded as `page-body` because it is the measured computed page background. No gradient colors are documented.

## Typography
Two families do all the work. F37 Stout, in black and bold compressed cuts (loaded as `F37stout 900` and the compressed webfonts), sets the display lines: 56px with a 50.4px line height for the h1, 48px with 43.2px for the card title, and 32px with 28.8px on mobile. All display text is uppercase. A monospaced family (`mono` 400 and 700, along with the loaded Centra Mono book and bold files) sets every label: 10px bold uppercase for headings and body copy, 12px regular uppercase for menu links, and 8px for the smallest map annotations. Line height is `normal` for mono. The result reads like a topographic map legend, with 10px text as the base size.

## Layout
Desktop is measured at 1280px wide but only 800px tall; there is no scroll height beyond the viewport. The layout is a fixed three-zone composition: a left rail for menu and statement, a large framed map, and a thin outer frame of coordinate captions along top, bottom and sides (vertical text reads "DESIGN & DEVELOPMENT PURVEYORS" and "DIGITAL DESIGN REFUGE HAND-CRAFTED"). Spacing values measured are 5px, 6px, 10px, 12px, 16px and 24px, and the theme declares `--spacing-12: .75rem` and `--spacing-16: 1rem`. Menu links have 6px vertical padding.

## Imagery and Voice
Imagery is a single aerial terrain render in warm rust and forest tones, treated as a map rather than a photograph; the only people shown are inside the small hot-spot card, where a figure in a wide-brimmed hat appears on a dark gradient. The studio writes in the voice of an outdoor guide: "SCROLL TO ENTER OUR WORLD", "LATEST HOT SPOT ADDED", "VIEW MORE", and the legend entries "Road", "Trail", "Fishing spot" and "Viewpoint" stand in for site sections and content types. Peripheral captions read "GOLD IDEAS SEEKERS" and "REPUBLIC OF COLLABORATIVE MINDS", and the footer carries "©2026 - ATELIER SAN RITA INC.". A clock in GMT and the line "EST.2024" give the page a field-instrument feel. The measured meta title describes the work as designing stories, brands and digital worlds, and the body copy sampled by the extractor reads "VIDEO PRODUCTION STUDIO | DESIGN AND DEVELOPMENT". The language switch offers English and French, matching the `/en` path of the measured URL.

The frame around the map is itself content: each edge carries small mono captions, and the vertical captions on the left and right edges run rotated. Those captions, together with the legend and the zoom control, make the interface read as a surveyor's chart. Photography and type never compete, because the large F37 Stout lines sit in the left rail while the map keeps the center and right of the viewport.

## Elevation & Depth
No box shadows or border colors were measured (`boxShadows` and `borderColors` are empty). Depth comes from the photographic terrain, a dark inset card that overlaps the map corner, and zoom controls drawn as small dark squares. There are no drop shadows on UI elements.

## Shapes
`desktop.frequencies.borderRadii` is empty, so every rendered element computes a 0px radius. The tokens therefore declare `rounded.none: 0px`. The inset card, zoom buttons and map frame are all square-cornered.

## Components
**Menu link:** `#2d3329` mono 12px uppercase with 6px vertical padding; on hover the measured change is an underline appearing (the EN link goes from no decoration to underline) and the inactive FR link starts at the terrain-grey tone. **Map markers:** small circular pins joined by a pale trail line. **Zoom control:** two stacked dark squares with plus and minus. **Hot-spot card:** dark `#161b13`-family surface with pale green mono labels ("VIEW MORE", "LATEST HOT SPOT ADDED") and a 48px F37 Stout project title above a thumbnail. No primary button was detected by the extractor, so no `button-primary` token is declared.

## Design System Architecture
No public design system or brand guideline was found. The research record is `none: true`. The de-facto system is Tailwind CSS v4: root custom properties carry the `--tw-*` prefix and the theme variables `--color-*`, `--spacing-*`, `--breakpoint-mobile` and `--font-mono` appear in the measured rootVars. The one named breakpoint is `--breakpoint-mobile: 799.98px`. Source: https://sanrita.ca/en measured into web/data/extracted/san-rita.json.

## Do's and Don'ts
- Do set display text in F37 Stout capitals and all labels in monospace capitals.
- Do keep the palette to the five declared theme colors.
- Do express navigation as map legends, coordinates and waypoint markers.
- Do keep corners square; no radius was measured.
- Don't add shadows or borders; none were measured.
- Don't use mixed case in labels; every measured text role is uppercase.
- Don't introduce a conventional filled button; none exists on the measured page.

## Responsive Behavior
The theme declares a breakpoint variable `--breakpoint-mobile: 799.98px`, so layouts below 800px are governed by that value. The 390px mobile pass measured an h1 (a paragraph element in this page) at 32px F37 Stout with 28.8px line height in `#e2ffcc`, a 10px mono footer line "©2026 - ATELIER SAN RITA INC." in `#84907f`, and font sizes of 10px, 12px, 32px, 40px and 16px. Menu structure, map behavior and any stacking on mobile are not measured.

## Iteration Guide
1. Set canvas `#dde2e4`, ink `#2d3329`, highlight `#e2ffcc`, muted `#84907f`, dark `#161b13`.
2. Use F37 Stout uppercase at 56px/50.4px for page statements and mono 10px bold for labels.
3. Leave every corner at 0px.
4. Frame content with coordinate captions and legend icons rather than cards or buttons.
5. Keep motion and map interaction inside the viewport; the page measured only 800px tall.
6. Run `node web/scripts/verify-designs.mjs --slug=san-rita`.
