---
version: alpha
name: Faint Film
category: "Business & Corporate"
description: "Faint Film (faint-film.com), a developer's personal black-and-white photography site: white #ffffff and #f2f2f2 split screen, charcoal #222222 text, PP Neue Montreal Medium only, a 32px year display, a 4 by 5 thumbnail grid and a dark pill Grid and Slider toggle."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#222222"
  surface-gallery: "#f2f2f2"
  system-white: "#eeeeee"
  ink-muted: "#696969"
  hairline: "#555555"
  toggle-bg: "#000000b3"
typography:
  display:
    fontFamily: "\"PP Neue Montreal Medium\""
    fontSize: 32px
    fontWeight: 400
    lineHeight: 36.8px
    letterSpacing: 0.187408px
  display-mobile:
    fontFamily: "\"PP Neue Montreal Medium\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20.7px
    letterSpacing: 0.208px
  nav:
    fontFamily: "\"PP Neue Montreal Medium\""
    fontSize: 16px
    fontWeight: 600
    lineHeight: 18.4px
    letterSpacing: 0.187408px
  link:
    fontFamily: "\"PP Neue Montreal Medium\""
    fontSize: 10px
    fontWeight: 400
    lineHeight: 11.5px
    letterSpacing: 0.187408px
rounded:
  pill: 9999px
spacing:
  s1: 3px
  s2: 10px
  s3: 20px
  s4: 40px
  s5: 70px
  s6: 80.77px
  s7: 80.78px
  s8: 100px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 20px
---

## Overview

Faint Film (https://www.faint-film.com/) is a one-screen photography portfolio. The header text reads "Faint Film" and "Developer tomoya's photo site. Uses SigmaFP." The page copy, taken from the HTML, includes the line "Even after time passes, a single photo can faintly bring back the moment. Photography is wonderful." and the navigation "Home, Bio, Contact", an "SNS X" link and a "Thought" section. The footer reads "© 2025 Faint Film" and there is a "↓ ScrollDown" cue. There is no commercial component: no buttons, forms or calls to action, just a gallery.

The capture shows the whole concept. The screen is split in two halves. The left half, on white, holds a four-column grid of eighteen small numbered black-and-white photographs (numbers 1 to 18 in 10px type above each image), with the site title top left and the descriptor beside it. The right half, on light grey `#f2f2f2`, shows one featured colour photograph centred (a view up between two glass towers) with a line "2024 ——— 2025" below it that acts as a date range, and white leaf-shaped decorations drifting around the photograph. At the bottom centre is a dark pill toggle with two options, Grid and Slider. The overall feel is a contact-sheet: monochrome thumbnails, small numerals and a great deal of white space.

Because the interface is nearly invisible, the design is defined by restraint: a single family, a single ink colour, one grey panel, no shadow and no accent colour.

## Colors

- Canvas `#ffffff` is the page background and the largest area (weight 1882).
- Ink `#222222` is the text colour for every role (232 characters), and the same colour is declared as `--system-color`. Primary equals ink because the interface has no accent: links, titles and numerals are all charcoal.
- Surface gallery `#f2f2f2` is the right-hand pane (area 627).
- System white `#eeeeee` is declared as `--system-white` and measured as a light text colour (6 characters) and a very small area.
- Ink muted `#696969` (20 characters) is the colour of secondary text.
- Hairline `#555555` is the rule drawn between "2024" and "2025".
- Toggle background `#000000b3` (black at 70%) is the fill of the Grid and Slider pill.
- Declared root variables: `--system-color: #222222`, `--system-white: #eeeeee` and `--system-background-color: #ffffff`.

The photographs themselves are the only colour source (the featured image is in colour while the thumbnails are black and white).

## Typography

One typeface: PP Neue Montreal Medium, loaded as a single face with no other weights; the measurements record weights 400 and 600 on it. It accounts for all 258 measured characters.

Measured scale (desktop):

- Display: 32px, weight 400, line height 36.8px, letter spacing 0.187408px (the "2024" and "2025" labels).
- Nav: 16px, weight 600, line height 18.4px, letter spacing 0.187408px (the "Faint Film" title).
- Link / index: 10px, weight 400, line height 11.5px, letter spacing 0.187408px (the numerals 1 to 18 and the footer line).
- Body: 18px at weight 400 on the mobile pass (see Responsive Behavior); the desktop frequency list shows 18px, 12px, 10px, 13px, 16px and 32px.

Letter spacing is a constant 0.187408px on desktop, which gives a slightly open, mechanical texture. PP Neue Montreal is a commercial grotesque; no substitute is declared in the CSS (the family has no fallback stack in the measured rule).

## Layout

The layout is a fixed 50/50 split with the page height equal to the viewport (scroll height 980 with an inner scroller also 980). Left: header row (title plus descriptor), then the thumbnail grid in four columns and five rows (the last row holds two items). Right: the featured image and the year range, vertically centred. The footer copyright sits at the bottom-right in 10px type with 20px horizontal padding. Measured spacing values: 3, 10, 20, 40, 70, 80.77, 80.78 and 100px. The thumbnails are a mix of landscape and portrait frames with the number above the top-left corner; the grid cells align their images to a regular column rhythm.

## Elevation & Depth

None. No box shadows, borders or gradients are measured on any role. The only layering is the dark translucent pill (`#000000b3`) that floats above the bottom-centre of the screen and the decorative leaf shapes that float over the grey pane. Separation between the two halves is done purely by background colour (`#ffffff` versus `#f2f2f2`).

## Shapes

Images are square-cornered rectangles. The only rounded element is the pill toggle at the bottom (9999px radius token), with a lighter inner pill for the active choice. Decorative leaf shapes on the right pane are white organic forms. The date range uses a straight hairline.

## Components

- Header: the title "Faint Film" in 16px weight 600 and the descriptor in a smaller light line; no logo mark.
- Thumbnail index: numerals in 10px beside each photograph, in `#222222`.
- Featured image: a single portrait photograph centred in the grey pane.
- Date range: "2024" and "2025" in 32px with a hairline between.
- Mode toggle: a pill with two labels, "Grid" and "Slider", on a `#000000b3` background with white text; the active label has a light pill behind it.
- Footer: "© 2025 Faint Film", 10px, padding 0px 20px.
- Menu: a two-line glyph button at the top right; the navigation text (Home, Bio, Contact) is in the page markup. Menu behaviour is not measured.

## Design System Architecture

No public design system or brand guideline was found: the page https://www.faint-film.com/ was opened and has no link to a design system, brand guideline, press kit or GitHub organisation, so none is cited. The de-facto system is minimal. The stylesheet declares nine root custom properties, three of them colours (`--system-color`, `--system-white`, `--system-background-color`), so every surface and text colour is one of three tokens. Typography is a single family at three or four sizes with a shared letter spacing. The site is a personal project by a developer who credits "tomoya" and the descriptor adds "Uses SigmaFP.".

## Do's and Don'ts

Do:
- Keep to `#222222` text on `#ffffff` and `#f2f2f2` and let the photographs carry colour.
- Set all text in a single grotesque with a constant small letter spacing.
- Number the thumbnails and keep the numerals at 10px.
- Offer a Grid and Slider toggle in a dark pill.

Don't:
- Add accent colours, buttons or shadows; none are measured.
- Use the pill radius on anything except the toggle.
- Frame the photographs with borders.
- Add more than one typeface.

## Responsive Behavior

Measured with the 390px mobile pass: body text "Even after time passes, a single photo can faintly bring back the moment…" is PP Neue Montreal Medium 18px at weight 400 in `#222222`; the first link role (the "Home," nav entry) is 18px; the nav title "Faint Film" is 16px weight 600; frequent mobile font sizes by character count are 18px, 10px, 13px, 16px and 12px. How the split screen, the grid and the toggle reflow at mobile width is not measured.

## Iteration Guide

1. Use white and `#f2f2f2` panels with `#222222` text and no other colour.
2. Set everything in PP Neue Montreal Medium: 16px title, 32px year labels, 10px indices, 0.187408px letter spacing.
3. Build the left half as a numbered four-column thumbnail grid and the right half as one featured photograph.
4. Add a dark pill toggle with two labels at the bottom centre.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=faint-film --url=https://www.faint-film.com/ --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=faint-film`.
