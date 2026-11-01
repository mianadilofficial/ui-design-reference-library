---
version: alpha
name: Ethan & Tom
category: "Portfolio"
description: "Ethan & Tom film-director portfolio: near-black #010101 stage, white #ffffff 8px to 9.6px type in Switzer and Geist Mono, a five-column grid of film stills with bracketed index captions, no radii, shadows or accent colors."
colors:
  canvas: "#010101"
  ink: "#ffffff"
  primary: "#ffffff"
typography:
  display:
    fontFamily: Switzer
    fontSize: 9.6px
    fontWeight: 600
    lineHeight: 12.8px
    letterSpacing: "-0.02px"
  display-mobile:
    fontFamily: Switzer
    fontSize: 12.48px
    fontWeight: 600
    lineHeight: 16.64px
    letterSpacing: "-0.02px"
  body:
    fontFamily: "\"Geist Mono\""
    fontSize: 8px
    fontWeight: 300
    lineHeight: 12.8px
    letterSpacing: 0.5px
    textTransform: uppercase
  link:
    fontFamily: Switzer
    fontSize: 8px
    fontWeight: 400
    lineHeight: 8px
rounded:
  none: 0px
spacing:
  s1: 7.2px
  s2: 12.8px
  s3: 14.4px
  s4: 25.6px
  s5: 51.2px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  footer:
    textColor: "{colors.ink}"
    padding: 14.4px
    transform: matrix(1, 0, 0, 1, 0, -39.375)
---

# Ethan & Tom

## Overview
The measured site, https://www.ethanandtom.com/, is the portfolio of "Ethan & Tom", a film-direction duo, and is titled "Ethan & Tom". The viewport is a black stage (`colors.canvas`, #010101) with a very small white interface: the wordmark "ethan&tom" at the top left, a centre navigation "Selects / Index / Photo" (the current item, Selects, underlined), an "Info" link and a live clock reading "05:37:34 (GMT)" at the top right. The page measured only 800px tall at 1280px width, so the work grid is the whole page.

The grid is five columns by three visible rows of 16:9 film stills. Each still is captioned above it with a bracketed index and a two-line credit: client in bold, project title in a monospaced face below. Examples read "[1] INSTAGRAM / WATCH WHILE", "[2] NSPCC / SHIFT CTRL", "[3] SONG FOR THE MUTE / ADIDAS ORIGINALS 007", "[6] LOUIS CULTURE / TAM", "[7] ETHAN P FLYNN / FATHER OF NINE", "[10] TOYOTA / CH-R", "[14] NIKE / PEGASUS PREMIUM". The stills are cinematic and varied: a burning house at dusk, a handshake, a road from a car, a bowling alley. The interface recedes so the footage carries all colour. The voice is a catalogue: terse, uppercase, numbered.

## Colors
The palette is deliberately two-value.
- **Canvas `#010101`** is the near-black ground, measured as the page background.
- **Ink `#ffffff`** is white and is the only measured text color (453 characters), also recorded as **primary** because there is no filled button or accent on the page; the white wordmark and underline are the actions.

The CSS corpus holds only black, white and transparent variants (#000000, #ffffff, #01010136, #fefefe36, #000000cc, #00000036) and one faint red tint (#ff00001a). No brand accent exists. Colour on the page comes entirely from the film stills, which are heavily graded (orange fire, teal night, monochrome portraits).

## Typography
Two families. **Switzer** (a neo-grotesque; weights 400, 500 and 600 are loaded) is used for the wordmark, nav and credit lines: `typography.display` is Switzer 9.6px / 600 / line-height 12.8px / letter-spacing -0.02px, `typography.link` is Switzer 8px / 400 / 8px, and the mobile pass measured `typography.display-mobile` at 12.48px / 600 / 16.64px. **Geist Mono** at weight 300 sets the project titles: `typography.body` is 8px / 300 / 12.8px with 0.5px letter spacing in uppercase.

Everything is tiny: the two measured sizes on desktop are 8px (416 characters) and 9.6px (37 characters). The scale is a deliberate understatement that makes the footage the largest thing on screen. Weights: 500 (242 characters), 300 (174) and 600 (37). Switzer is a commercial foundry face and Geist Mono is open source; Switzer can be substituted with a neutral grotesque.

## Layout
A five-column grid of equal stills with generous top space: the first caption row begins well below the header, leaving a large black field. Gaps measured are 14.4px (30 uses) and 25.6px (30 uses); spacing tokens run from `spacing.s1` 7.2px to `spacing.s5` 51.2px, with a 184px padding recorded once. Captions sit above each still and the stills are flush at equal width. The header is a single row distributed to the left, centre and right. The footer (`components.footer`) has 14.4px padding.

## Elevation & Depth
No box shadows, borders or gradients were measured. There is no elevation system: the page is flat black with images. Hierarchy comes from the image grid, the bracketed numerals and the contrast between bold sans client names and light mono titles.

## Shapes
No border radii were measured anywhere on the home page (the border-radius list is empty), so the rounded group in the tokens is empty. Visually, stills are plain rectangles with square corners and there are no pills, chips or buttons. The only graphic mark is the underline under the current nav item.

## Components
- **Wordmark**: "ethan&tom" in white Switzer at the top left.
- **Navigation** (`components.nav`): white text, with "Selects", "Index" and "Photo" separated by slashes; the active item underlined. "Info" and a GMT clock sit on the right.
- **Work tile**: a bracketed number, client in Switzer 9.6px bold, title in Geist Mono 8px uppercase, then the still.
- **Link** (`components.link`): white Switzer 8px.
- **Footer** (`components.footer`): white text with 14.4px padding; a transform of -39.375px on the Y axis was recorded.
- **Buttons and inputs**: none were detected on this page.

## Design System Architecture
No public design-system or brand-guideline documentation was located from the pages opened; the only page read was the home page, https://www.ethanandtom.com/, measured by the extractor. No CSS root custom properties were recorded (`rootVars` is empty). The de-facto system is minimal: two font-face families (Switzer, Geist Mono), black and white, and a handful of spacing values in tenths of pixels (7.2px, 12.8px, 14.4px, 25.6px, 51.2px), which suggest sizes scaled from a viewport-relative root. The measured values themselves are the system.

## Do's and Don'ts
- Do keep the ground at `#010101` and the text at `#ffffff`, nothing else.
- Do set interface text at 8px to 9.6px and let footage dominate.
- Do caption every tile with a bracketed index, a bold client name and an uppercase mono title.
- Do use an underline, not a fill, to mark the active item.
- Don't add accent colours, buttons, shadows or rounded corners; none exist on the measured page.
- Don't crop the stills to squares; the grid uses a wide frame.
- Don't enlarge the type to compete with the images.
- Don't use bold for the mono titles; they are weight 300.

## Responsive Behavior
The 390px mobile pass measured the first heading at 12.48px in Switzer (`typography.display-mobile`) and a character distribution of 10.4px (406 characters) and 12.48px (24 characters). Column counts, navigation changes and breakpoints were not measured, so none are described.

## Iteration Guide
1. Begin with `colors.canvas` and `colors.ink` and add nothing else.
2. Use `typography.display` for names and `typography.body` for titles; keep sizes under 10px on desktop.
3. Build new project tiles as an index, client, title and still in that order.
4. Verify with `node web/scripts/verify-designs.mjs --slug=ethan-tom`. The empty `rounded` group will fail the gate's required-group check, because no radius was measured and none may be invented.
5. Measure an inner page (Index, Photo, Info) with the extractor before adding tokens.
6. When extending, keep captions factual: client, title, year or format, as the home page does.
7. Reference credits visible in the capture, in order: [1] Instagram "Watch While", [2] NSPCC "Shift Ctrl", [3] Song For The Mute "Adidas Originals 007", [4] Flohio "Way 2", [5] Keepsakes "Nownness x V&A", [6] Louis Culture "Tam", [7] Ethan P Flynn "Father of Nine", [8] The North Face "Nse Alfie Kungu", [9] Song For The Mute "Adirun 02", [10] Toyota "CH-R", [11] Pink Pantheress "Illegal", [12] Adidas "Song For The Mute x Adirun 01", [13] Coldplay "Moon Music", [14] Nike "Pegasus Premium", [15] Geordie Greep "Holy Holy". The list shows a mix of commercial work for sportswear, automotive and charity clients and music videos for recording artists; new entries should follow the same two-line pattern, with the client first and the project name second.
8. The current tab (Selects) is the home view; "Index" and "Photo" are separate views whose layout was not measured, so do not assume they share the grid. The "Info" link and the clock are right-aligned and use the same 8px to 9.6px scale as the rest of the interface.
9. Imagery direction: each still is a frame from the film itself, cropped to the wide format without overlays, titles or rounded masks. Photographic variety in colour temperature across the grid is part of the look, and the interface should never tint or frame it.
