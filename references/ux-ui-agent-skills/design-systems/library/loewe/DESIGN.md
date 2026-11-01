---
version: alpha
name: LOEWE
category: "Luxury"
description: "Loewe's international homepage measured at www.loewe.com/int/en/home: white canvas (#ffffff), pure black text (#000000), the proprietary Avus typeface at 14px body and 22px headings, square corners (0px radius), and a mustard accent (#f2ca56) taken from the site's own --lw-* token set."

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  accent-yellow: "#f2ca56"
typography:
  display:
    fontFamily: Avus
    fontSize: 22px
    fontWeight: 400
    lineHeight: 20px
  display-mobile:
    fontFamily: Avus
    fontSize: 18px
    fontWeight: 400
    lineHeight: 23px
  body:
    fontFamily: Avus
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  nav:
    fontFamily: Avus, "Yu Gothic", "Hiragino Kaku Gothic Pro", Meiryo, sans-serif
    fontSize: 14px
    fontWeight: 400
rounded:
  none: 0px
spacing:
  s1: 3.41px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 48px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The Loewe international homepage is a quiet, gallery-like page: white background, black text, no filled buttons, and large photographic panels. In the capture a cookie-consent dialog sits over the top of the page; it dims the header and a hero panel that holds a huge cropped LOEWE wordmark over a close shot of a mustard suede Puzzle bag on black. A second extraction with stealth enabled still showed the dialog, so the top of the page could only be read from measured CSS and from the parts of the capture that are visible. The dialog's black "Accept All" button and "Privacy Preference Center" link belong to the consent tool, are not brand UI, and are not documented as components.

Under the hero, the page reads as a sequence of editorial modules. "Fresh classics" is a heading in Avus 22px with a two-line description ("Supple leather, exacting craft, expressive colours. The latest expression of House icons.") and three small links marked with tiny triangles: Women's bags, Puzzle, Amazona. A product mosaic follows: one tall cell with a Small Featherlight Puzzle bag in suede and four square cells with other bags (a shearling top-handle bag, a black structured bag, a mustard drawstring pouch, a dark brown knotted bag), each on a pale grey gradient ground. A caption sits under the tall cell. "New knits" repeats the module, with links Women's knitwear and Men's knitwear, then a full-width photograph of a person in a patterned black-and-white knit and orange trousers.

The header is a single row of small black text links (Women, Men, Gifts, Art & Craft, Stories) at the left, and a search field with an underline plus three icons (a store or pin icon, a bookmark and a bag) at the right.

**Key Characteristics:**
- White canvas (`{colors.canvas}`) with black ink (`{colors.ink}`); almost no other interface colour.
- One typeface, Avus, in two loaded weights (400 and 500) at a few sizes.
- Square geometry: the site's CSS declares its border-radius token as 0.
- Modules are text-led: heading, short sentence, a small list of links, then imagery.
- Product images sit on a pale grey gradient rather than flat white.

## Colors

Values come from `web/data/extracted/loewe.json`, including the page's own `--lw-*` custom properties.

- **Canvas** (`{colors.canvas}`, #ffffff): the page background; matches `--lw-color-background-primary`.
- **Ink** (`{colors.ink}`, #000000): 1,186 of the roughly 1,190 measured text characters; matches `--lw-color-text-primary`.
- **Primary** (`{colors.primary}`, #000000): no coloured button or link accent is measured, so black is the action colour, as for text links, the search underline and icons. Black is also the CSS value for `--lw-color-border-primary`.
- **Accent yellow** (`{colors.accent-yellow}`, #f2ca56): appears as a measured background on a small area and in the CSS as `--lw-color-yellow` assigned to `--lw-color-background-accent`.

The CSS also declares white at 50% opacity for inverse secondary text, a grey scale built from black at several opacities, a light grey #f8f8f8, an orange, a red (#AE3433) for errors and a green for success. Only values present in the measured text, background and border tables were kept in the tokens, so these status colours are listed here for context but are not tokens.

## Typography

**Avus** is the only family measured (1,191 characters), loaded in weights 400 and 500. Headings such as "Fresh classics" and "New knits" are 22px, weight 400, with a line-height of 20px (`{typography.display}`); on a 390px viewport the measured heading is 18px with 23px line-height (`{typography.display-mobile}`). Body copy and captions are 14px, weight 400, line-height 19.6px (`{typography.body}`). Navigation uses the same 14px size with Japanese-style fallbacks (Yu Gothic, Hiragino Kaku Gothic Pro, Meiryo) before generic sans-serif (`{typography.nav}`). Other sizes measured are 12px and 28px. Avus appears to be a proprietary face; a clean, slightly humanist sans is the nearest open stand-in, which is a suggestion and not a measurement.

## Layout

The container has roughly 18px of margin to the viewport edge in the capture. Text modules are narrow (a two-line description in a column about a quarter of the page width) and left-aligned, while images span full width. The product mosaic has a tall cell on the left and four square cells to its right with narrow gutters. Spacing tokens are `{spacing.s1}` 3.41px, 4px, 8px, 12px, 16px, 24px, 32px and 48px; the site's CSS root defines the same spacing family as `--lw-spacing-100` 4px, 200 8px, 300 12px, 400 16px, 600 24px, 800 32px, 1200 48px, 2000 80px, 3200 128px and 4000 160px.

## Elevation & Depth

Flat. No shadows and no radii were measured. Depth comes from the photographs: a deep black hero, studio cut-outs on pale grey, and colour-blocked fashion photography. The consent dialog is a white rectangle with a thin black border above a grey scrim, which the CSS lists as the overlay colour (`--lw-color-background-overlay`, black at 30% opacity).

## Shapes

All corners are square (`{rounded.none}`, 0px, matching `--lw-border-radius-0`). The only outlined rectangle in the capture is the cookie dialog. Icons are thin black line glyphs, and the search field is defined by an underline only.

## Components

- **Navigation link**: Avus 14px, black on the white page, white when the header sits over the dark hero.
- **Search field**: transparent with an underline in black.
- **Module heading**: Avus 22px/400.
- **Text list link**: 14px with a small leading triangle marker; no button fill.
- **Product cell**: image on a pale grey gradient (the CSS names it `--lw-color-product-image-background`), with a caption below in 14px.
- **Footer**: black text on white.

## Design System Architecture

No public Loewe design-system documentation was opened for this entry; the web search budget ran out before any official source could be read, so none is cited. The shipped page, however, exposes a clear internal token system under the `--lw-` prefix: colour tokens (`--lw-color-black`, `--lw-color-white`, `--lw-color-yellow`, grey steps from 100 to 500), semantic aliases (`--lw-color-text-primary`, `--lw-color-text-secondary`, `--lw-color-text-inverse`, `--lw-color-border-primary`, `--lw-color-background-primary`, `--lw-color-background-subtle`, `--lw-color-background-accent`, `--lw-color-background-inverse`, `--lw-color-icon-primary`, utility error/warning), a spacing scale (`--lw-spacing-*`), a border-radius token and motion easing tokens (for example `--lw-motion-easing-ease-in`). That naming reveals a two-layer system of raw colours plus semantic roles.

## Do's and Don'ts

**Do**
- Keep pages white and black; let product and campaign photography carry colour.
- Use Avus at 14px for text and 22px for module titles.
- Present navigation as small text links with minimal icons.
- Keep corners square.

**Don't**
- Don't add filled coloured buttons; none were measured.
- Don't document or imitate the cookie dialog's black button as a brand component.
- Don't round images or cards.
- Don't use heavy shadows.

## Responsive Behavior

The measurement tool loaded both a desktop viewport and a 390px phone viewport. The only difference derived for this entry is typographic: the module heading shrinks from 22px to 18px and its line-height grows from 20px to 23px, which gives the heading slightly more air at phone width. Nothing is claimed about how the product mosaic reflows, whether the header collapses into a menu, or how the hero wordmark scales, because those values were not recorded. Anyone extending this entry should measure a phone capture first and record it before describing breakpoints.

On a 390px viewport the measured heading drops from 22px to 18px with line-height 23px. No other mobile values were derived for this entry, so grid and navigation behaviour at phone widths is not described.

## Iteration Guide

1. Begin with white `{colors.canvas}` and black `{colors.ink}`.
2. Set headings in Avus 22px/400 and text at 14px/19.6px.
3. Compose modules as heading, short sentence, links with triangle markers, then image.
4. Show products on a pale grey gradient; keep corners at 0px.
5. Run `node web/scripts/verify-designs.mjs --slug=loewe` after edits.
