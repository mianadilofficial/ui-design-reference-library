---
version: alpha
name: Inkfish
category: "Agencies & Studios"
description: "Inkfish, a New York commercial production company, uses a white page (#ffffff) and pure black (#000000) with a near-black stage (#010101), setting 142.222px uppercase NT Dapper display words with -5.68889px tracking and 10.6667px uppercase Martian Mono labels, with square corners and no color accents."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-stage: "#010101"
typography:
  display:
    fontFamily: "\"NT Dapper\", sans-serif"
    fontSize: 142.222px
    fontWeight: 400
    lineHeight: 120.889px
    letterSpacing: "-5.68889px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"NT Dapper\", sans-serif"
    fontSize: 29.12px
    fontWeight: 400
    lineHeight: 29.12px
    letterSpacing: "-1.1648px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Martian Mono\", monospace"
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 12.8px
    letterSpacing: "-0.426667px"
    textTransform: uppercase
  body:
    fontFamily: "\"NT Dapper\", sans-serif"
    fontSize: 35.5556px
    fontWeight: 400
    lineHeight: 35.5556px
    letterSpacing: "-1.42222px"
    textTransform: uppercase
rounded:
  xs: 88px
  none: 0px
spacing:
  s1: 1.78px
  s2: 7.11px
  s3: 10.67px
  s4: 14.22px
  s5: 17.78px
  s6: 21.33px
  s7: 46.22px
  s8: 53.33px
  s9: 71.11px
  s10: 106.67px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    height: 28px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.surface-stage}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 0px 17.7778px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
---

## Overview

Inkfish (page title "Inkfish"; the about page identifies the company as "Inkfish Productions - Only the strong evolve", at 7 East 14th St, New York) is a production company that makes film, campaign and brand content. The home page is built like an index card file. The first viewport is a black screen showing the "inkfish" logotype at the top left, a small navigation (HOME, WORK [17], ABOUT, CONTACT), the tagline "ONLY THE STRONG EVOLVE" at the right, and a two-column monospace list of all seventeen projects: clients on the left (TOYOTA, ASICS, NISSAN, PFIZER, LIDL, DAZN, VISTAPRINT, PETSAFE, LAND ROVER, MCDONALD'S, THERABODY, SOWETO GOLD X JAMESON, IKEA and others) and numbered titles on the right ("[01] RAV4 THE WALL", "[02] MIND GAMES", "[03] NO LAZY HORSES", "[04] SCIENCE WILL WIN", "[05] SUSPICIOUSLY LOW-PRICED GROCERIES" and so on). The active row is highlighted as a white bar with black text, with a barcode-like strip of bars next to it and a "VIEW TOYOTA" play link at the lower left.

Scrolling reveals a white section headed "LATEST WORK" with a huge "LATEST [11]" and a right-aligned "ALL WORK" link, followed by a mosaic of film stills with no gutters. Each tile has a mono caption above it: title and client at the left, the format and duration at the right ("CAMPAIGN 04:00", "FILM 00:30", "DOCUMENTARY 01:00", "RE-BRAND 01:00", "COLLABORATION 02:00"). The measured text includes "BIG AGENCY THINKING, SMALL AGENCY ATTITUDE", "KEEP UP WITH THE LATEST CAMPAIGNS FROM INKFISH ..." and the footer line "BOOK A CALL / ONLY THE STRONG EVOLVE / INKFISH LLC. ©2023".

The about page (opened at https://inkfishnyc.com/about) structures the offer as numbered sections "[S.01] What we do" and "[S.02] How it works", with bracketed sub-headings [Thinking] and [Making] and lists such as Creative Platforms, Manifestos, Brand Development, Campaign Ideas, Online Video, Broadcast Film, Long Form Content, Short Form Content, Digital, Out-of-home and Visual Identities. It says the company builds "a fresh team for each project" and that its leadership has "50+ years of combined experience".

The measured home page is 5251px tall at 1280px wide with 664 visible elements. A cookie banner ("THIS WEBSITE USES COOKIES. MANAGE ACCEPT") appeared at the lower right of the first capture; the page was re-extracted and the banner is not documented as brand UI. The voice is clipped, uppercase, and filmmaker-direct.

## Colors

The palette is strictly monochrome and measured as three values.

- **White (#ffffff, `canvas`)** is the dominant background (4673 area), used for the "LATEST WORK" section and the film-still grid.
- **Black (#000000, `ink` and `primary`)** is the text on white (1136 characters), the fill of the "MORE ABOUT US" button, and the text color of captions.
- **Near-black stage (#010101, `surface-stage`)** is the first-screen background and the header/nav fill (1024 area).
- **White text (#ffffff, `on-primary`)** appears on black (882 characters).

All color on the page comes from the film stills (red rock walls, blue sky, orange sunsets) rather than from the interface. No accent, hover or focus color was measured (hover list empty, shadows and borders empty).

## Typography

Two families: NT Dapper (400) and Martian Mono (variable, weights 200 to 900 loaded). By characters: Martian Mono 1868, NT Dapper 188.

- **Display:** NT Dapper 142.222px / 120.889px, uppercase, -5.68889px letter spacing (the "LATEST" word and the "BIG AGENCY THINKING" statement); 29.12px / 29.12px and -1.1648px at 390px.
- **Body statement:** NT Dapper 35.5556px / 35.5556px, uppercase, -1.42222px tracking (130 characters), used for the intro paragraph and the "ALL WORK" link; 24.96px at 390px.
- **Heading / labels:** Martian Mono 400, 10.6667px / 12.8px, uppercase, -0.426667px tracking (1868 characters, effectively all captions and navigation); 12.48px / 14.976px at 390px.

Display tracking is -4% of size (-5.68889 / 142.222) and the line height is 0.85 of size. There are only three sizes on the page, so hierarchy is created by the 13x jump between the mono caption and the display word. Martian Mono is declared as a variable font (200 to 900) in the loaded fonts list.

## Layout

The layout is edge to edge. Spacings measured are 1.78px, 7.11px, 10.67px, 14.22px, 17.78px, 21.33px, 46.22px, 53.33px, 71.11px and 106.67px (the stylesheet declares one root variable, `--gfs: 14.4`). The nav bar has 17.7778px horizontal padding. The work grid is a tight mosaic: two large tiles in the first row, three in the second, four in the third and two again, with captions above each tile in a row of mono text and no borders or gutters between images.

## Elevation & Depth

No shadows, borders or gradients were measured. The page is flat; depth comes from the contrast between the black index screen and the white work section, and from the highlighted row bar and the barcode strip on the index screen.

## Shapes

Radii: 88px on 2 elements (small round controls) and none elsewhere; every other element computes 0px. The tokens are `none: 0px` and `xs: 88px`. Images are full-bleed rectangles.

## Components

- **Index list.** A two-column mono list on #010101; the selected row inverts to a white bar with black text.
- **Button ("MORE ABOUT US").** #000000 fill, #ffffff Martian Mono 10.6667px uppercase label, 0px radius, 28px high.
- **Navigation.** The #010101 header with 17.7778px side padding and mono uppercase links; the mobile pass shows TOYOTA, ONLY THE STRONG EVOLVE and SCROLL in a #1c1c1c header.
- **Work tile caption.** Title (regular) over client (bold mono), format and runtime at the right edge.
- **Section header.** "LATEST WORK" in mono at the left and "[S.01]" at the right above a giant display word with a bracketed count ("LATEST [11]").
- **Cookie banner.** Excluded; it is a consent control.

## Design System Architecture

No public Inkfish design system or brand guideline was found: https://inkfishnyc.com/brand, /press and /design returned 404, and the about page at https://inkfishnyc.com/about describes services, process and contact details but no design resources. The de-facto system is a tiny set of conventions in the shipped CSS: one root variable (`--gfs: 14.4`, a global font scale), two font families, three sizes, and a black-and-white palette, applied with bracketed numbering ([01], [S.01], [17]) as a recurring typographic motif.

## Do's and Don'ts

- Do use black and white only and let film stills carry the color.
- Do set captions in 10.6667px uppercase mono with -0.426667px tracking.
- Do number everything in square brackets ([01], [S.01], [11]).
- Do keep imagery edge to edge with no gutters or borders.
- Don't add accent colors, shadows or rounded corners.
- Don't document the cookie bar as part of the interface.
- Don't set display words in lowercase.

## Responsive Behavior

The 390px pass measured: display "SCROLL" at 29.12px / 29.12px with -1.1648px tracking, the "LATEST WORK" label at 12.48px / 14.976px mono, the statement paragraph at 24.96px with -0.9984px tracking, the "MORE ABOUT US" button at 12.48px, and a #1c1c1c header containing TOYOTA, ONLY THE STRONG EVOLVE and SCROLL. How the tile mosaic reflows was not measured.

## Iteration Guide

1. White page, black text; the first screen is a #010101 index of projects.
2. Use Martian Mono 10.6667px uppercase for all captions and nav.
3. Use a 142.222px NT Dapper uppercase word with -5.68889px tracking as the section title.
4. Lay stills in an edge-to-edge mosaic with a caption row above each.
5. Number items in brackets.
6. Keep every corner square.
