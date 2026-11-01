---
version: alpha
name: IL CAPO PRODUCTION
category: "Portfolio"
description: "Il Capo Production (ilcapoproduction.com, 'Industrial Cinema 2.0') measured: a #000000 canvas with one brand red #d60001 for text and a full-bleed red footer, IvarDisplay serif in uppercase (120px titles, 30px nav) paired with HelveticaNeue 21px, a giant red ILCAPO wordmark over film footage and 0px radii."
colors:
  canvas: "#000000"
  ink: "#d60001"
  primary: "#d60001"
  link-scrim: "#00000033"
typography:
  display-mobile:
    fontFamily: HelveticaNeue, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 12px
    letterSpacing: 1.2px
    textTransform: uppercase
  subheading:
    fontFamily: IvarDisplay, serif
    fontSize: 120px
    fontWeight: 400
    lineHeight: 120px
    textTransform: uppercase
  body:
    fontFamily: HelveticaNeue, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 31.5px
    textTransform: uppercase
  nav:
    fontFamily: IvarDisplay, serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 30px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 1.6px
  s2: 2.1px
  s3: 3px
  s4: 4.8px
  s5: 5.25px
  s6: 6.3px
  s7: 6.4px
  s8: 7.5px
  s9: 12px
  s10: 16px
components:
  link:
    backgroundColor: "{colors.link-scrim}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 32px 48px
---

## Overview

Il Capo Production describes itself in the page title as "Industrial Cinema 2.0" (https://www.ilcapoproduction.com/). The first screen is a full-bleed film still, in the capture a pair of worn white ankle boots in a wooden crate printed with "fragile" and "this way up" labels, under a red heraldic logo (an eagle above a spotted leopard) centred at the top, with the word CONTACTS at top left and MENU at top right in thin red serif capitals, and a gigantic red sans wordmark "ILCAPO" spanning the entire bottom edge. Below the hero, project titles are set as very large red capitals on black (measured: "A TABI FILM" and "ICONIC SHOE MASTERP..." at 120px), each a link with a faint black scrim `#00000033` behind it. The page ends in a solid red footer with black text: "CONTACTS", an info email address at the production domain, and the line "©2026 - P.IVA 02793910395".

The extraction records the headings one letter at a time with every letter duplicated (for example "C C O O N N T T A A C C T T S S"), which is how the page's split-letter animation appears in the DOM; the visible words are the ones above. The voice is minimal: no sentences, only names of films and a fashion-craft subject, in capitals. The page is 2400px tall with an inner scroller of 4938px, so most content moves inside a scrolling container.

## Colors

The palette is exactly two colours, both declared as root variables.

- **Canvas** `#000000` (`--black`, `--color-black`; `--background` points to it) is the dominant fill (42183 area units).
- **Brand red** `#d60001` (`--brand-red`, `--color-brand-red`; `--foreground` points to it) is both the text colour (225 characters, ink and primary in the tokens) and the footer fill (25703 area units). On the red footer the text is black.
- **Link scrim** `#00000033` (18432 units) is a translucent black layer behind large title links.
- White is declared (`--color-white` `#fff`) but no white text or fill was measured.
- No greys, borders or accent colours were measured; the border list is empty.

Photography and film provide every other colour in the first screen: warm plywood tans, off-white, and blue-black label art.

## Typography

Two families: **IvarDisplay** (serif display, declared as `--font-ivar`) and **HelveticaNeue** (declared as `--font-helvetica`). Everything is uppercase.

| Role | Measured |
|---|---|
| Titles (subheading) | IvarDisplay 400, 120px / 120px, uppercase |
| Footer headings | IvarDisplay 400, 45px |
| Nav | IvarDisplay 400, 30px / 30px, uppercase; 21px at 390px |
| Body (footer legal) | HelveticaNeue 400, 21px / 31.5px, uppercase; 15px / 22.5px at 390px |
| Mobile label ("SCROLL") | HelveticaNeue 700, 12px / 12px, +1.2px, uppercase |

By characters: 21px (281), 120px (77), 30px (24), 45px (14). Only weight 400 is used on desktop (396 characters); the one bold use is the mobile "SCROLL" label. The giant "ILCAPO" wordmark at the bottom of the hero is rendered as a sans (heavy grotesque) in red; its font size was not recorded in the role data, so it is not given here.

## Layout

The desktop pass is 1280px wide. The hero is a single viewport-filling video or image with three fixed positions: CONTACTS top-left, the logo top-centre, MENU top-right, and the wordmark along the bottom edge. Project titles stack as full-width lines of 120px capitals on black. The footer is a full-width red band with padding 32px 48px. Spacing values measured: 1.6, 2.1, 3, 4.8, 5.25, 6.3, 6.4, 7.5, 12 and 16px (root `--spacing` is .25rem).

## Elevation & Depth

None. There are no shadows and no borders. Layering is achieved with the `#00000033` scrim over imagery and with the stark switch from black to red.

## Shapes

`borderRadii` is empty: every rendered element computes a 0px radius, so `rounded` is `none: 0px`. (A `--radius-lg: .5rem` variable is declared by the Tailwind layer, but no element uses it.) The logo, wordmark and photos are rectangles or free-form artwork.

## Components

The page has no buttons, inputs or cards detected by the extractor.

- **Navigation**: two text links (CONTACTS, MENU) in IvarDisplay 30px, red on the footage, no background.
- **Title link**: a 120px uppercase IvarDisplay red title over a `#00000033` scrim, used for each project.
- **Footer**: red `#d60001` fill, black text, padding 32px 48px, holding contacts, an email address and the legal line.
- **Scroll cue**: a small "SCROLL" label (mobile pass) in black HelveticaNeue 700 12px with 1.2px tracking.

## Design System Architecture

No public design-system or brand-guideline page was linked from https://www.ilcapoproduction.com/ and none was searched. The shipped CSS is a Tailwind v4 layer with 30 custom properties on `:root`: `--color-brand-red`, `--brand-red`, `--color-white`, `--black`, `--background`, `--foreground`, `--font-ivar`, `--font-helvetica`, `--tracking-widest` (.1em), `--leading-tight` (1.25), `--font-weight-bold` and `--radius-lg`. The semantic pair `--background: var(--black)` and `--foreground: var(--brand-red)` is the whole colour system: black ground, red ink.

The consequence for a rebuild is that the identity lives in contrast and scale rather than in components. A 120px serif title against a black field, a red wordmark as wide as the screen, and a flat red footer are the three gestures that define the page, and each can be reproduced from the values above without any component library. What cannot be reproduced from the measurements is the footage, the logo artwork and the split-letter animation timing: the extraction was run without motion recording, so durations and easing are not measured. Likewise the menu overlay behind the MENU link was not opened, and nothing is asserted about its contents or colours.

The measured copy is deliberately sparse: two project titles, two navigation words, a contact block and a legal line with a company VAT number. A page built from this specification should keep the same economy, with each project reduced to a name and a link, rather than adding descriptions, buttons or labels that the original does not show.

## Do's and Don'ts

- Do use only black and `#d60001`; invert to a red band with black text for the footer.
- Do set everything in uppercase IvarDisplay (titles, nav) or HelveticaNeue (small text).
- Do let film or photography fill the first screen and place the red wordmark at the bottom edge.
- Do keep corners square and the layout shadow-free.
- Don't add greys, gradients or additional hues; none were measured.
- Don't use mixed-case copy.
- Don't document the split-letter DOM duplication as content.

## Responsive Behavior

Measured at 390px: the nav falls to 21px IvarDisplay, footer and legal text to 15px / 22.5px HelveticaNeue, and the detected top label is "SCROLL" at 12px/700 with 1.2px tracking and black colour. The mobile font-size mix is 15px (281), 48px (77), 21px (24), 32px (14) and 12px (6): 48px appears on 77 characters (the count that is 120px on desktop) and 32px on 14 characters (the count that is 45px on desktop), but the roles behind those sizes were not recorded, so they are listed as measured sizes only. Menu behavior and layout changes beyond these values were not measured.

## Iteration Guide

1. Start with `canvas` #000000 and set `ink` #d60001 for all text.
2. Fill the first screen with footage; place CONTACTS and MENU at the top corners and the logo at top-centre.
3. Set titles in IvarDisplay uppercase at 120px (48px on mobile) and stack them full-width.
4. End with a `#d60001` footer, black text, padding 32px 48px.
5. Keep 0px radii and no shadows.
6. Verify values against the frontmatter; write "not measured" for anything else.
