---
version: alpha
name: Carnegie Mellon University
category: "Education"
description: "Carnegie Mellon University (cmu.edu): white canvas with black utility bar and Carnegie Red #c41230 wordmark plate, Source Serif Pro 600 headlines at 56px and Open Sans 16px/27px body, square 0px corners, flat surfaces with no card shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f2f2"
  ink: "#000000"
  primary: "#c41230"
  on-primary: "#ffffff"
  gray-dark: "#222222"
  gray-medium: "#948f8f"
  iron-gray: "#6d6e71"
  steel-gray: "#e0e0e0"
typography:
  display:
    fontFamily: source-serif-pro, serif
    fontSize: 56px
    fontWeight: 600
    lineHeight: 67.2px
  display-mobile:
    fontFamily: source-serif-pro, serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
  heading:
    fontFamily: source-serif-pro, serif
    fontSize: 44px
    fontWeight: 600
    lineHeight: 55px
  subheading:
    fontFamily: open-sans, sans-serif
    fontSize: 28px
    fontWeight: 600
    lineHeight: 42px
  body:
    fontFamily: open-sans, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27px
  link:
    fontFamily: open-sans, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16.604px
    letterSpacing: "-0.14px"
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 20px
  s8: 22px
  s9: 24px
  s10: 32px
components:
  button-outline-light:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 12px 20px
    height: 43px
    borderColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  button-outline-dark:
    textColor: "{colors.ink}"
    height: 43px
    borderColor: "{colors.ink}"
    rounded: "{rounded.none}"
  hero-arrow-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    padding: 12px 20px 12px 63px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    padding: 0px 0px 1px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
---

## Overview

The Carnegie Mellon University home page (cmu.edu) reads as an editorial university site rather than an application. The measured page is 1280px wide and 6976px tall, with the document language set to English and the title "Carnegie Mellon University | CMU". The first screen is a dark, full-width photographic hero carrying a Source Serif Pro headline ("A Transformational New Chapter for CMU") at 56px weight 600, followed directly by a black utility and navigation band, then a white reading area where long paragraphs of Open Sans body copy run in two columns. Below that sit an embedded YouTube video and a row of three photographic story tiles.

The identity is built from three flat decisions: pure black for structure, pure white for reading surfaces, and a single saturated red, Carnegie Red `#c41230`, for the wordmark plate, the search box and the arrow marker on the hero link. Nothing on the measured page has a rounded corner (the declared radius variable is `0` and every measured button reports `0px`), and the desktop frequency pass found no box shadows and no border radii at all. The result is a rectilinear, institutional look: hard edges, thin 1px outlines, and large type.

The voice in the capture is formal and announcement-driven: a $3 billion gift, a renamed School of Computer Science, a new Miami campus. Calls to action are short noun phrases ("A Historic $3 Billion Gift", "Learn More About CMU Miami") rather than imperative marketing verbs, and the utility links ("Current Students", "Faculty & Staff", "Alumni", "Office Directory") are audience labels. Imagery is documentary photography of students and events, not illustration, with the exception of poster-style tiles for campus events.

## Colors

The generated measurement found three text colors by character count, in this order: `#000000` (3836 characters), `#ffffff` (752) and `#c41230` (68). By painted area the backgrounds rank `#f2f2f2` (3082), `#000000` (2572), `#ffffff` (958), `#c41230` (84) and `#222222` (78). The canvas for reading is `#ffffff`; `{colors.page-largest}` `#f2f2f2` is the largest background area measured and is the footer fill.

- **Carnegie Red `#c41230`** is the only brand hue. The site declares it as `--carnegie-red` and aliases `--accent` to it. It appears as the wordmark plate behind "Carnegie Mellon University", the search button box, the arrow square on the hero link, and a 1px border on that link. The official brand page lists it as Carnegie Red, HEX #C41230, RGB 196, 18, 48, Pantone 187C.
- **Black `#000000`** fills the utility and primary navigation header and is the dominant text color. The page also declares `--black-75` through `--black-10` as alpha steps of black for overlays and rules.
- **White `#ffffff`** is the canvas and the text color on black, on the red plate and over the hero photograph.
- **Gray dark `#222222`** is a measured background (78 units of area) and the declared `--gray-dark`. **Gray medium `#948f8f`** and **gray light `#f2f2f2`** are declared as `--gray-medium` and `--gray-light`.
- **Iron Gray `#6d6e71`** and **Steel Gray `#e0e0e0`** are published core colors on brand.cmu.edu (see SOURCES.json) and are kept as tokens even though the home page measurement relies on black, white and the f2f2f2 gray.

The official guidance says external materials must use the core palette, that Carnegie Red "should be a standout color", and that core colors must dominate by volume or by attention. Secondary palettes (Tartan: Scots Rose, Gold Thread, Green Thread, Teal Thread, Blue Thread, Highlands Sky Blue; Campus: Machinery Hall Tan, Kittanning Brick Beige, Hornbostel Teal, Palladian Green, Weaver Blue, Skibo Red) are published for internal-community communications and were not measured on the home page, so they are not tokens here.

## Typography

Two families carry the site: Source Serif Pro for headlines and Open Sans for everything functional. By character count, Open Sans accounts for 4139 characters and Source Serif Pro for 517. The loaded faces are Open Sans 400, 600, 700 and 400 italic, and Source Serif Pro 600 and 700; Font Awesome 6 supplies icons. The CSS declares them as `open-sans` and `source-serif-pro`.

- **Display** (h1): Source Serif Pro 600, 56px on a 67.2px line. The declared variable is `--h1: 600 clamp(2.5rem,7vw,3.5rem) / 1.2`. In the mobile pass at 390px the h1 measures 40px on 48px (`display-mobile`).
- **Heading** (h2): Source Serif Pro 600, 44px on 55px, set white-on-dark or black-on-white depending on the section. Declared as `--h2: 600 clamp(2.25rem,5vw,2.75rem) / 1.25`; the mobile pass measures 36px on 45px.
- **Subheading** (h3): Open Sans 600, 28px on 42px.
- **Body**: Open Sans 400, 16px on 27px, declared `--body: 400 1rem / 1.6875`.
- **Link / button label**: Open Sans 600, 14px with letter-spacing -0.14px (declared `--text-button: 600 .875rem / 1.186`). The frequency pass also found 14px / -0.25px on 42 characters.

The page also declares a quote style (`--text-quote`, Source Serif 600), an intro style (`--text-intro`, Source Serif 600), an eyebrow (`--text-eyebrow`, Open Sans 600 .875rem), a stat style (`--text-stat`, Source Serif 700, 3.3125rem, line-height 1) and h3 to h6 variables. Measured sizes by character count are 16px (2935), 14px (793), 30px (304), 24px (209), 18px (163), 44px (122), 26px (53), 56px (38), 28px (24) and 20px (15).

Font substitutes: brand.cmu.edu names Open Sans and Source Serif Pro as the two primary typefaces and says to substitute Helvetica for Open Sans and Times for Source Serif Pro when the faces are unavailable (for example when sharing a live document outside the university).

## Layout

The layout is a wide editorial grid with generous gutters, driven by custom properties rather than fixed breakpoints in the measured data. The declared variables are `--gutter: clamp(1.5rem,6vw,4rem)`, `--gap: clamp(1.5rem,6vw,3rem)`, `--gap-sm: clamp(1.5rem,6vw,2rem)`, `--panel: clamp(3.5rem,10vw,4.5rem)`, `--wrap: max(var(--gutter),(100% - 78rem) / 2)` and `--wrap-sm: max(var(--gutter),(100% - 44rem) / 2)`. In other words, content is held to a 78rem wrapper (and a 44rem narrow wrapper) centered with a minimum gutter.

On the 1280px desktop capture the hero is a full-bleed photograph with the headline and the arrow link aligned to a left margin. In the full-page capture the header appears below the hero as a black band: a utility row (Current Students, Faculty & Staff, Alumni, Office Directory plus the outlined Visit and Give buttons) above a primary row with the red wordmark plate on the left and the menu items (About, Academics, Admission, Campus Life, Research) and a red search box on the right. Below it, body copy runs in two text columns, a full-width video embed follows, then a three-up tile row.

Measured gaps are dominated by 32px (48 occurrences), then 16px, 8px, 24px, 48px and 64px. Measured paddings include 14px (24 occurrences), 48px, 12px, 32px, 20px and 64px. The spacing tokens in the frontmatter list the measured values from 4px to 32px.

## Elevation & Depth

The site is flat. The desktop measurement found no box shadows and no border radii. Depth comes from color blocks (black header band, red plate, f2f2f2 footer), photography, and 1px outlines in white, black or Carnegie Red.

A single shadow is declared as a variable: `--shadow: 0 0 .75rem #00000040`. The only measured live shadow is on the mobile header at 390px, `rgba(0, 0, 0, 0.25) 0px 0px 12px 0px`, where the 60px black header sits over content. No text shadow was measured on the hero headline. Transitions are declared as `--transition: .4s ease`, `--transition-short: .2s ease` and `--transition-cubic: .4s cubic-bezier(.4,0,.2,1)`.

The YouTube player embedded in the capture and the play control on the hero are third-party or media controls and are not part of the CMU token set.

## Shapes

Every measured CMU control has square corners: the declared `--radius` is `0`, the Visit, Give and "Learn More About CMU Miami" buttons all report a `0px` border radius, and the hero arrow link reports `0px`. The shape vocabulary is therefore rectangles with 1px borders. The red wordmark plate and the red search box are rectangles, and the hero link is a rectangle whose left end holds an arrow glyph (the measured pseudo-element transform is `matrix(0.707107, -0.707107, 0.707107, 0.707107, 0, 0)`).

The CSS corpus also contains other radii (2px, 3px, 4px, 8px, 12px, 16px, 18px, 24px, 28px) alongside YouTube player rules (the font-family list includes "YouTube Noto"); no measured CMU control reports any of them, so only `none: 0px` is kept as a rounded token.

Photographs and video are cropped to hard rectangles. The three story tiles at the bottom of the capture are rectangular crops, one of them a poster-style graphic with heavy condensed lettering, which belongs to that event rather than to the global type system.

## Components

**Outlined buttons on dark (Visit, Give).** Text `#ffffff`, Open Sans 600 14px, 1px solid `#ffffff` border, padding 12px 20px, 43px tall, 0px radius, transparent fill on the black header. On hover the text color changes from `#ffffff` to `#000000` while the border stays `#ffffff`. The element carries a `::before` layer with a `#ffffff` background, recorded at rest with the transform `matrix(1, 0, 0, 1, 0, 44.5938)`.

**Outlined button on light ("Learn More About CMU Miami").** Text `#000000`, 1px solid `#000000` border, 43px tall, 0px radius. On hover the text changes from `#000000` to `#ffffff`; the border stays `#000000`.

**Hero arrow link ("A Historic $3 Billion Gift").** Text `#ffffff`, Open Sans 600 14px, letter-spacing -0.14px, padding 12px 20px 12px 63px, 1px border `#c41230`, 240px by 45px. A Carnegie Red square on the leading edge holds a white arrow in the capture; the measured background image is `linear-gradient(rgb(196, 18, 48))`.

**Header.** A black (`#000000`) band 112px tall on desktop with white text. The primary row has a wordmark plate in Carnegie Red, five menu items with caret indicators, and a Carnegie Red search box. Nav link text is Open Sans 400 16px, white, with a measured 1px bottom padding and a white `linear-gradient` background image.

**Footer.** Background `#f2f2f2`, text `#000000`, Open Sans 400 14px on a 23.625px line, 634px tall, starting with the postal address (5000 Forbes Avenue, Pittsburgh, PA 15213) and telephone number.

**Cards.** The extractor found no card role. Story tiles are image-led with no measured border, radius or shadow.

## Design System Architecture

Carnegie Mellon publishes its visual identity at https://brand.cmu.edu/ (the old /brand path on www.cmu.edu redirects there). The Visual Identity section defines "four core colors and two typefaces", lists the core and secondary palettes with HEX, RGB, CMYK and Pantone values at https://brand.cmu.edu/visual-identity/colors, and the two typefaces (Open Sans and Source Serif Pro, with Helvetica and Times as fallbacks) at https://brand.cmu.edu/visual-identity/typefaces. A downloadable Brand Quick Guide is linked from the brand home page. No public design-system site, component library or token package was linked from the brand pages I opened.

The de-facto system on cmu.edu is a set of CSS custom properties on the root: color names (`--carnegie-red`, `--accent`, `--black`, `--white`, `--gray-dark`, `--gray-medium`, `--gray-light`, alpha steps `--black-10` to `--black-90` and `--white-20`, `--white-40`), type shorthands (`--h1` to `--h6`, `--body`, `--link`, `--text-title`, `--text-intro`, `--text-quote`, `--text-eyebrow`, `--text-label`, `--text-small`, `--text-button`, `--text-stat`, `--meta`), font stacks (`--open-sans`, `--source-serif`), layout (`--gutter`, `--gap`, `--gap-sm`, `--panel`, `--wrap`, `--wrap-sm`), plus `--radius`, `--shadow` and three transition timings. Each type variable is a full CSS font shorthand, so a component sets `font: var(--h2)` and gets weight, fluid size, line-height and family together.

## Do's and Don'ts

**Do**
- Use Carnegie Red `#c41230` as the standout color: wordmark plate, search box, arrow marker and 1px accent borders.
- Keep corners square (0px) and surfaces flat.
- Set headlines in Source Serif Pro 600 and everything else in Open Sans.
- Use outlined buttons with 1px borders that invert text color on hover.
- Put white text on black or on photography; put black text on white or `#f2f2f2`.

**Don't**
- Don't round corners or add card shadows; the desktop measurement found no radii and no shadows.
- Don't use the Tartan or Campus secondary palettes as the dominant color. The official guidance says secondary colors are accents and must never overshadow the core palette.
- Don't treat the YouTube player, its controls, or the hero play icon as CMU components.
- Don't substitute other serifs when Source Serif Pro is unavailable; the brand page names Times as the fallback.

## Responsive Behavior

Only one mobile pass was recorded, at a 390px viewport. Measured at 390px: the h1 is 40px on a 48px line (desktop 56px on 67.2px) and 342px wide; the h2 is 36px on 45px (desktop 44px on 55px); body text stays 16px on 27px; the header is 60px tall (desktop 112px), black, with a `rgba(0, 0, 0, 0.25) 0px 0px 12px 0px` shadow, and measures 390px wide. The primary CTA role was not detected at that width.

The type sizes are declared fluidly with `clamp()` (for example `--h1: 600 clamp(2.5rem,7vw,3.5rem) / 1.2`), and the gutter, gap and panel variables are also `clamp()` values, so spacing and type are declared to scale with the viewport. How the menu, the utility links, the two text columns and the three-up tiles reflow at 390px was not measured, and no breakpoint widths were recorded. Hover behavior on touch devices and dark-mode theming were not measured.

## Iteration Guide

1. Start from the frontmatter tokens. Canvas `#ffffff`, ink `#000000`, primary `#c41230`; do not introduce another saturated hue unless it comes from the official Tartan or Campus palettes and is used as an accent.
2. Build headings with Source Serif Pro 600 (56px display, 44px heading) and body with Open Sans 400 at 16px/27px. Reduce display to 40px/48px and heading to 36px/45px for the 390px case, since those are the measured mobile values.
3. Compose the header as a black band with white text: a utility row with two outlined 43px buttons, then a primary row with a Carnegie Red wordmark plate and a red search box.
4. Use 1px outlines for buttons (`#ffffff` on dark, `#000000` on light) with a text-color inversion on hover, 0px radius, Open Sans 600 14px labels.
5. Keep surfaces flat; use `#f2f2f2` for the footer and quiet panels, and let photography supply depth.
6. To extend the system, reuse the site's own variable pattern: full font shorthands per type role, `clamp()` for fluid size, and a shared gutter/wrap pair for horizontal rhythm.
