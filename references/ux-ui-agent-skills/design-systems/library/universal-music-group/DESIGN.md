---
version: alpha
name: Universal Music Group
category: "Music & Audio"
description: "Universal Music Group (universalmusic.com) presents its artist roster as a dark, full-bleed photographic carousel on a #222222 canvas, with light-weight uppercase Lato names in sky blue #2ab3e2, Glegoo serif navigation on a #000000 bar, square corners throughout and a 40px dark search input."
colors:
  canvas: "#222222"
  ink: "#ffffff"
  primary: "#2ab3e2"
  surface-black: "#000000"
  surface-2: "#2d2d2d"
  surface-3: "#333333"
  ink-muted: "#999999"
  text-input-bg: "#00000099"
  text-input-text: "#c0c0c0"
  text-input-border: "#696969"
typography:
  display:
    fontFamily: Lato, "Josefin Sans", sans-serif
    fontSize: 35.36px
    fontWeight: 300
    lineHeight: 42.432px
    textTransform: uppercase
  display-mobile:
    fontFamily: Lato, "Josefin Sans", sans-serif
    fontSize: 20.8px
    fontWeight: 300
    lineHeight: 24.96px
    textTransform: uppercase
  body:
    fontFamily: Glegoo, sans-serif
    fontSize: 14.4px
    fontWeight: 400
  nav:
    fontFamily: Glegoo, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
    textTransform: uppercase
  input:
    fontFamily: Lato, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 33.6px
rounded:
  xs: 7px
  pill: 9999px
spacing:
  s1: 1.6px
  s2: 2.4px
  s3: 3.83px
  s4: 4.8px
  s5: 7.72px
  s6: 8px
  s7: 12.8px
  s8: 16px
  s9: 24px
  s10: 30.33px
components:
  nav:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.ink}"
    padding: 36.8px 0px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  artist-name:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 2.4px 7.71875px
    height: 40px
    borderColor: "{colors.text-input-border}"
---

## Overview

The Universal Music Group home page (`https://www.universalmusic.com/`, page title "Universal Music Group, the world's leading music company | Home Page - UMG") is built around one idea: the artist is the hero. The capture shows a full-viewport, black-and-white portrait of a single artist (Lil Baby at capture time) with his name set in light-weight sky-blue capitals near the bottom, a Universal globe logo and a letterspaced "UNIVERSAL MUSIC GROUP" wordmark centered at the top, and square black controls at the edges: a blue menu square top left, a black "NEWS" tab top right, previous and next arrows on the right edge, and a black bar of five square icon buttons (Facebook, X, Instagram, email, search) centered at the bottom.

The roster text in the DOM reads COCO JONES, BAD GYAL, ARIANA GRANDE, REBA MCENTIRE, LIL BABY and more, one `h2` per slide, each in uppercase. The main navigation (HOME, UMG, OUR LABELS & BRANDS, GLOBAL IMPACT, DIGITAL INNOVATION and further items) lives in a black panel and is set in uppercase Glegoo. The measured page is a single 1280 by 800 screen (`scrollHeight` 800): there is no long scroll on the home page, the carousel is the page.

The mood is cinematic and quiet. Nothing on the page competes with the photograph: there are no cards, no shadows and no rounded buttons, and the only saturated color is one cyan-leaning blue used for artist names and the menu control. The extractor hid a footer-base and an email-modal overlay before measuring; neither is documented here.

## Colors

The canvas is `#222222`, the measured body background, with pure black `#000000` as the largest area fill (1,517 area weight), used for the navigation panel and the edge controls. Two close grays, `#2d2d2d` (335) and `#333333` (311), fill secondary panels, and the measured border color on dividers is also `#333333` (6 occurrences).

Text is white `#ffffff` (1,740 characters) on the dark surfaces. The only chromatic color is `#2ab3e2` (881 characters as text and 20 area weight as a fill), the color of every artist name, and it is the brand accent, so it is the `primary` token. Secondary text is gray `#999999` (180 characters, 12px). The search field uses a translucent black fill `#00000099`, light gray text `#c0c0c0` and a 1px solid `#696969` border. A lighter translucent black `#0000004d` was measured as an area fill (221 weight), a translucent black fill; which element carries it was not recorded.

The photographs on the page are monochrome by art direction; the CSS itself carries the blue as its only hue. The page declares no CSS gradients that were measured, and there is no light theme in the extraction (light and dark theme variants were not measured).

## Typography

Two families carry the page. **Glegoo** (a slab serif, loaded at 400 and 700) is the dominant family by character count (1,918 characters) and sets navigation and body copy. **Lato** (loaded at 300 italic, 400 italic and 400 normal; the display text is measured at weight 300) sets the artist names and the input (881 characters). `PT Sans Narrow` and `dashicons` also appear among loaded fonts, the latter an icon font.

- Display: Lato 300, 35.36px / 42.432px, uppercase, color `#2ab3e2` (desktop artist names).
- Display on mobile: the same Lato 300 uppercase at 20.8px / 24.96px.
- Navigation: Glegoo 400, 16px / 20px, uppercase, white.
- Body: Glegoo 400 at 14.4px (1,594 characters, the most-used size).
- Input: Lato 400, 24px / 33.6px.
- Small text: 12px in `#999999`; 18.72px, 13.28px and 18.4px each appear on a few characters.

Letter spacing was not recorded in the frequency data. The logo lockup is a graphic, so its letterspacing is not a type token. The pairing is a thin geometric sans for names over photography and a sturdy slab for reading text.

## Layout

The home page is a single viewport with a centered header and edge-anchored controls rather than a grid. Header content is centered (logo and wordmark); controls sit flush against the left, right and bottom edges of the screen. Paddings measured on the page are 16px and 32px (16 elements each), 24px (9), 1.6px (9), plus 36.8px top padding on the navigation panel and a few values from 2.4px up to 57.6px. No flex or grid gap values were recorded (`gaps` is empty).

The navigation panel is a black full-width block with 36.8px top padding and links of 28px height. The layout metadata for this page records no card columns and no CTAs. The artist name sits on a 1171px wide line in the measured heading box, centered under the portrait.

## Elevation & Depth

There are no measured box-shadows (`boxShadows` is empty) and no measured gradients. Depth is created by photography and translucency: the measured translucent fills are `#0000004d` and the search field uses `#00000099`. The WordPress shadow presets in the root variables (for example `6px 6px 9px rgba(0, 0, 0, 0.2)`) belong to the platform defaults and were not found on rendered elements, so they are not brand tokens.

Layering in the capture: photograph at the back, a darker band across the top behind the logo and wordmark, then square controls on top. Controls do not use elevation to separate from the image; they use opaque black or blue fills.

## Shapes

The shape language is square. Measured radii are only `50%` (2 elements; which elements was not recorded) and `7px` (1 element). Every other measured element has a radius of 0px, including the navigation, the artist heading and the search input. Rectangular black blocks (the NEWS tab, the arrows, the social bar and the blue menu square) are hard-edged and sit directly against the viewport edge.

Borders are hairline: `#333333` dividers and the `#696969` border on the input, both 1px solid.

## Components

- **Navigation panel**: `#000000` background, white uppercase Glegoo 16px / 20px links, 36.8px top padding, 28px link height.
- **Artist name**: `h2`, Lato 300 uppercase, 35.36px, `#2ab3e2`, one per slide.
- **Search input**: 40px tall, `#00000099` fill, `#c0c0c0` text in Lato 24px, 1px solid `#696969` border, 0px radius, padding `2.4px 7.71875px`.
- **Menu button**: a blue square at top left (capture), the only filled blue control; its numeric styling was not measured as a separate role.
- **Edge controls**: black squares with white glyphs for NEWS, previous and next, and the five-icon share and search bar; sizes were not measured.
- **Primary CTA**: none detected (`ctaCandidates` is empty), so no button token is declared.

## Design System Architecture

No public or official Universal Music Group design system was found, and this document did not search for one. The site is a WordPress build (root variables include the `--wp--preset--*` set and `--wp-admin-theme-color-*`), and no brand custom properties (colors, spacing or radii) were declared on `:root`. The system is therefore expressed directly in rendered CSS: black, `#222222` and `#333333` surfaces, one accent `#2ab3e2`, Glegoo and Lato, and 0px corners. All values are measured from `https://www.universalmusic.com/`; see `web/data/extracted/universal-music-group.json`.

## Do's and Don'ts

Do:
- Let the photograph fill the screen and place the artist name in uppercase Lato 300 `#2ab3e2` near the bottom.
- Keep corners square and controls black or blue with white glyphs.
- Use Glegoo for navigation and reading text and Lato for names and inputs.
- Keep the canvas dark (`#222222` or `#000000`) behind white text.

Don't:
- Don't add rounded buttons, cards or drop shadows; none were measured.
- Don't introduce a second accent hue next to `#2ab3e2`.
- Don't set artist names in bold weights; the measured weight is 300.
- Don't document the email modal or footer-base overlay hidden during measurement as brand UI.

## Responsive Behavior

Measured at the mobile pass: the artist heading drops from 35.36px to 20.8px (Lato 300 uppercase, `#2ab3e2`), the navigation grows from 16px to 16.88px, and the body size drops from 14.4px to 12.24px; the 12px small text becomes 10.2px. The nav panel remains black with white text (`#000000` and `#ffffff`). Breakpoints, menu behavior and layout changes on mobile were not measured, so none are described here.

## Iteration Guide

1. Start with a `#222222` canvas and a full-bleed monochrome photograph.
2. Set the artist name in Lato 300, uppercase, 35.36px, `#2ab3e2`.
3. Build navigation as a `#000000` panel with 16px uppercase Glegoo in white.
4. Keep every corner at 0px; if a circular control is needed, use 50%.
5. For forms, copy the measured search field: `#00000099` fill, `#696969` border, 40px height.
6. Re-run `node web/scripts/verify-designs.mjs --slug=universal-music-group` after any rename.
