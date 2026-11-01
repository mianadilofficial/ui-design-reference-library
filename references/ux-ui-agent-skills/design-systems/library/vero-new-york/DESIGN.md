---
version: alpha
name: Vero
category: "Retail & E-commerce"
description: 'Vero (verostudio.com): luxury fine-art wedding-dress sculpture studio with a cinematic film hero over warm beige #f3f0ed, near-black #181615 text, Louize Display serif capitals with Beausite Classic 500 sans, 2px corners, no shadows, very sparse editorial layout.'
colors:
  canvas: '#f3f0ed'
  ink: '#181615'
  primary: '#f3f0ed'
  grey-600: '#979696'
  grey-100: '#f8f8f8'
  white: '#ffffff'
  hairline: '#d9d9d9'
  beige-300: '#e6d8cc'
  red: '#9d1414'
  orange: '#e97e00'
typography:
  display:
    fontFamily: '"Louize Display", Georgia, "Times New Roman", Garamond, "Palatino Linotype", "Book Antiqua", serif'
    fontSize: 21px
    fontWeight: 400
    lineHeight: 21px
    textTransform: uppercase
  display-mobile:
    fontFamily: '"Louize Display", Georgia, "Times New Roman", Garamond, "Palatino Linotype", "Book Antiqua", serif'
    fontSize: 46px
    fontWeight: 400
    lineHeight: 50.6px
    letterSpacing: 0.46px
    textTransform: uppercase
  heading:
    fontFamily: '"Beausite Classic", Roboto, "Helvetica Neue", Helvetica, Arial, "Segoe UI", sans-serif'
    fontSize: 30px
    fontWeight: 500
    lineHeight: 31.8px
    letterSpacing: '-0.6px'
  nav:
    fontFamily: '"Beausite Classic", Roboto, "Helvetica Neue", Helvetica, Arial, "Segoe UI", sans-serif'
    fontSize: 15px
    fontWeight: 500
    lineHeight: 22.5px
    letterSpacing: 0.6px
  link:
    fontFamily: '"Louize Display", Georgia, "Times New Roman", Garamond, "Palatino Linotype", "Book Antiqua", serif'
    fontSize: 15px
    fontWeight: 400
    lineHeight: 15px
    letterSpacing: 0.9px
  input:
    fontFamily: '"Beausite Classic", Roboto, "Helvetica Neue", Helvetica, Arial, "Segoe UI", sans-serif'
    fontSize: 15px
    fontWeight: 400
    lineHeight: 15px
    letterSpacing: 0.3px
rounded:
  xs: 2px
spacing:
  s1: 2px
  s2: 2.4px
  s3: 3px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  link:
    textColor: '{colors.ink}'
    typography: '{typography.link}'
    padding: 10px
  nav:
    textColor: '{colors.ink}'
  nav-link:
    textColor: '{colors.ink}'
    typography: '{typography.nav}'
  text-input:
    textColor: '{colors.ink}'
    typography: '{typography.input}'
    rounded: '{rounded.xs}'
    padding: 8px 0px
    height: 34px
  footer:
    textColor: '{colors.ink}'
    padding: 30px 0px 16px
    borderColor: '{colors.hairline}'
---

# Vero

## Overview
This file documents the site measured at `https://www.verostudio.com/` (queued as "Vero New-York"; the page title is "Vero"). Vero describes itself in its own copy as "a luxury fine-art studio that transforms your wedding dress" into a sculpture; the hero headline reads "Custom SCULPTURE of your WEDDING DRESS." and the nav carries "Home", "Order", "Process", "About", "Gallery", with a "Start your COMMISSION" link. The extraction found 673 visible elements on a 1280px-wide, 14017px-tall page: a very long, slow scroll page.

The capture opens with a full-bleed film frame: a woman in a lace wedding bodice rests her hand on a plinth that holds a small sculpted copy of a gown, against a burnished orange plaster wall. The color story is warm, low-key and cinematic, and it is the only saturated area of the first screen. Below the film the page falls to a flat, warm beige ground (#f3f0ed) with near-black text (#181615). The editorial voice mixes serif display type in capitals with lowercase sans body ("Technology often pulls us away from what's real. Vero does..."). It is quiet, reverent and slow-paced; it reads like a gallery, not a shop.

## Colors
The site declares its palette in `:root`, so the names below are the studio's own:
- `canvas` and `primary` #f3f0ed (`--color-beige-100`, `--color-background-primary`): the page ground. In the hero the headline text also uses this color on the film (#f3f0ed text, 22 weighted characters).
- `ink` #181615 (`--color-grey-900`): the dominant text color (2661 weighted characters) and the only measured background fill (7 weighted area).
- `grey-600` #979696 (`--color-grey-600`): secondary text, 202 weighted characters.
- `grey-100` #f8f8f8 (`--color-grey-100`), and `white` #ffffff: light text on dark and film areas.
- `hairline` #d9d9d9 (`--color-grey-300`): the one measured border color, on the footer top rule.
- `beige-300` #e6d8cc (`--color-beige-300`, `--color-background-secondary`): the declared secondary ground.
- `red` #9d1414 (`--color-red`, mapped to `--color-error`) and `orange` #e97e00 (`--color-orange`): declared in the variables; not seen in the measured text.

All hues are warm neutrals; the only intense color on the page is carried by the photographed film.

## Typography
Two families pair a display serif with a humanist sans (loaded: Louize Display 400 normal and italic, Beausite Classic 400 and 500).
- **Louize Display** (serif; the stack continues Georgia, Times New Roman, Garamond, Palatino Linotype, Book Antiqua) carries display and links: `display` is 21px/21px uppercase on the h1 line measured on the page, `link` 15px/15px with 0.9px tracking ("Start your COMMISSION"). The site's variable `--font-header` is `clamp(46px, 5vw, 120px) / 1` and the page shows 120px and 141.334px sizes (249 and 85 weighted characters). Other variables: `--font-display-1` 2.875rem/1.1, `--font-display-2` 2.1875rem/1, `--font-display-3` 1.5625rem/1.3.
- **Beausite Classic** (sans; fallback Roboto, Helvetica Neue, Helvetica, Arial, Segoe UI) carries reading text: `heading` 30px/500 with 31.8px line-height and -0.6px tracking (the h2 and the quote), `nav` 15px/500, 22.5px, 0.6px tracking, `input` 15px/400 with 0.3px tracking.
The most-read sizes are 16px (1033 weighted, 0.64px tracking), 18px (545, 0.36px), 30px, 15px and 120px. `display-mobile` is 46px/50.6px uppercase with 0.46px tracking, the h1 measured at the mobile viewport. Louize Display and Beausite Classic are commercial faces.

## Layout
The site uses a 2-column grid (`--grid-columns` 2) with a 10px gap (`--grid-gap`). Content is sparse and offset: in the measured boxes the h2 is 450px wide and the quote paragraph 393px wide on a 1280px page, meaning narrow text blocks floating in large empty beige fields. Gaps measured: 15px (18 uses), 32px (12), 10px, 2px, 4px, 6px, 18px, 36px, 16px, 64px, 30px, 45px, 70px, 20px. Paddings: 18px (42 uses), 2.4px (40), 17.3334px, 10px, 3px, 16px, 12px, 20px, 32px, 36px, 172px, 304.8px, 44px, 30px. The footer has 30px top and 16px bottom padding with a 1px #d9d9d9 rule. The vertical rhythm is very loose; the full-width film opens the page and the beige below it holds spaced editorial blocks.

## Elevation & Depth
None. The extraction found no box shadows and no cards. Hierarchy comes from scale (120px to 141px display type against 15px labels), from serif-versus-sans contrast, and from the cinematic film at the top. The only border is the 1px #d9d9d9 footer rule.

## Shapes
Corners are almost entirely square. The only measured radius is 2px (2 elements: the form field), recorded as `xs`. Imagery is full-bleed rectangles; the film is edge-to-edge.

## Components
- **Nav / nav-link**: Beausite Classic 15px/500, 22.5px line-height, 0.6px tracking, #181615. Each label is rendered twice in the DOM ("Home Home", "Order Order") (the text is duplicated in the DOM); the measured box is 45x23 for "Home".
- **Commission link** (`link`): "Start your COMMISSION" in Louize Display 15px, 0.9px tracking, 10px padding, 226x45, text only, no fill or border: a text link rather than a filled button.
- **Text input** (`text-input`): Beausite Classic 15px/400, 0.3px tracking, radius 2px, padding 8px 0, 34px high (328px wide); it has no fill and no border in the measurement, an underline-style field.
- **Footer**: repeats the nav links in the same type, with 30px top padding and a 1px #d9d9d9 top border, 807px tall.
- **Scroll cue**: a small chevron at the bottom of the hero film.

No filled primary CTA was detected (`ctaCandidates` is empty), so no `button` token is declared.

## Design System Architecture
No public design system or brand guidelines for Vero were found among the pages opened for this document; none is cited. The shipped CSS has a clear private token layer on `:root`: `--color-*` palettes (beige-100, beige-300, grey-100, grey-300, grey-600, grey-900, red, orange, white, black), named type presets (`--font-display-1` to `--font-display-5`, `--font-body`, `--font-label-1`, `--font-label-2`, `--font-button`, `--font-tiny-1`, `--font-tiny-2`, `--font-label-form`, `--font-header`), a set of named easings (quad, cubic, quart, quint, sine, expo, circ in each direction, plus `--ease-custom-1`) and `--grid-columns`/`--grid-gap`. Source: measured page https://www.verostudio.com/ via `web/data/extracted/vero-new-york.json`.

## Do's and Don'ts
Do
- Keep the ground warm beige #f3f0ed and the text #181615.
- Pair a capitals serif (Louize Display) for display and links with a medium-weight sans for reading.
- Open with a full-bleed cinematic film in a single saturated hue.
- Keep links as bare text with letter-spacing; leave fields unfilled with a 2px radius.
- Leave large empty fields; set text in narrow blocks.

Don't
- Don't add shadows, cards or filled buttons; none were measured.
- Don't introduce bright accent colors; the red and orange are declared but not measured in use.
- Don't set body text in the display serif; it is used for display and links.
- Don't use a heavier weight than 500.

## Responsive Behavior
The mobile pass recorded: h1 46px/400 uppercase in Louize Display with 50.6px line-height and 0.46px tracking in a 253px-wide box; the h2 and quote at 20px/500 with 23px line-height and -0.4px tracking in 350px-wide boxes (desktop 30px/31.8px); the nav at 18px/500 with 27px line-height and 0.72px tracking, measuring 170px by 151px. The mobile size ranking is led by 18px (1719 weighted), then 20px, 15px, 46px, 19.0687px and 25px. Breakpoints and menu behavior are not measured.

## Iteration Guide
1. Set canvas #f3f0ed, ink #181615, hairline #d9d9d9.
2. Open with a full-bleed film and a Louize Display uppercase headline.
3. Set reading text in Beausite Classic 500 at 30px/31.8px with -0.6px tracking.
4. Write links as 15px Louize Display with 0.9px tracking and no fill.
5. Keep corners at 2px and avoid shadows.
6. Run `node web/scripts/verify-designs.mjs --slug=vero-new-york`.
