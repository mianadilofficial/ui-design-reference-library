---
version: alpha
name: Unsplash
category: "Design & Creative Tools"
description: "Unsplash's photo-first interface is a strict monochrome system: white #ffffff canvas, Black #111111 ink and fills, Grey #767676 for secondary links and quiet controls, rendered in the platform's own UI sans stack (ui-sans-serif, system-ui) with a 40px/700 wordmark headline, 15px/500 body, 8px button radius and 32px compact buttons, so the masonry grid of photographs carries all of the colour."
colors:
  canvas: "#ffffff"
  page-largest: "#f3f3f3"
  ink: "#111111"
  primary: "#111111"
  on-primary: "#ffffff"
  ink-muted: "#767676"
  ink-on-media-muted: "#d1d1d1"
  photo-placeholder-light: "#d9d9d9"
  photo-placeholder-mid: "#c0c0c0"
  hairline: "#eeeeee"
  gray-100: "#f5f5f5"
  gray-600: "#aaaaaa"
  gray-800: "#555555"
  blue: "#007fff"
  green: "#3cb46e"
  red: "#e25c3d"
typography:
  display:
    fontFamily: ui-sans-serif, system-ui, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  display-mobile:
    fontFamily: ui-sans-serif, system-ui, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 23.9999px
  body:
    fontFamily: ui-sans-serif, system-ui, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: ui-sans-serif, system-ui, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: ui-sans-serif, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 30px
  input:
    fontFamily: ui-sans-serif, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 8px
  md: 24px
  lg: 56px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 11px 0px 10px
    height: 32px
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 11px
    height: 32px
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 1px 2px 2px 10px
    height: 38px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 20px
---

# Unsplash

## Overview

Unsplash (unsplash.com) is a photography platform that, in its own words on the About page, began because its founders struggled to find good imagery, and now serves millions of images from a community of hundreds of thousands of contributors under the Unsplash License. The home page measured for this document is titled "Beautiful Free Images & Pictures | Unsplash" and is almost entirely photographs.

The interface is designed to disappear. The capture shows a white page with a thin left icon rail, a top search bar ("Search photos and illustrations"), a row of topic tabs (Featured, Animals, Architecture, Experimental, Fashion & Beauty, Film, Nature, People, Travel, 3D Renders), and then a three-column masonry grid of photographs that runs for the whole scroll. Above the grid sits a small hero: the word "Unsplash" set at 40px/700 in #111111, the line "The internet's source for visuals. Powered by creators everywhere.", and a second search field; to its right a dark promotional tile ("Unsplash Awards 2026 — Now accepting submissions to the 10th edition of the Unsplash Awards") and a "Collections" list with "See all".

There is no brand hue anywhere in the chrome. Unsplash's own press page (unsplash.com/press, "Unsplash Brand Assets and Guidelines") lists its primary colors as White #FFFFFF, Black #111111 and Grey #767676 — exactly the three values the extractor measured as canvas, ink and secondary link color. Colour on the page comes only from the photographs and from the per-photo placeholder fills (#f3f3f3, #d9d9d9, #c0c0c0 and dozens of tinted values) painted behind each image while it loads.

## Colors

The system is three official colours plus a short grey ramp declared as CSS custom properties on the root.

- **Canvas `#ffffff`** — the body background and the background of cards such as the Collections panel. The press page names it White #FFFFFF.
- **Ink `#111111`** — the most-read readable text colour on white: the "Unsplash" headline, the active topic tab, nav text, input text. The root variable `--color-black` is `#111`, and the press page names it Black #111111.
- **Primary `#111111`** — the solid action fill. On the mobile pass the extractor recorded the primary CTA ("Download") as a #111111 button with #ffffff text, so primary and ink are the same black. **On-primary `#ffffff`** is that button's label colour.
- **Ink-muted `#767676`** — Grey #767676 in the press guidelines and `--color-gray-700` in the CSS. It colours the "See all" link, the idle topic tabs, "Log in" and the idle "Submit an image" label; hover turns each of these to #111111.
- **Ink-on-media-muted `#d1d1d1`** — `--color-gray-400`; the supporting paragraph inside the dark Awards tile and the border of the outlined "Submit an image" button.
- **Hairline `#eeeeee`** — `--color-gray-200`; the measured border colour and the background of the focused icon link in the rail.
- **Gray-100 `#f5f5f5`, gray-600 `#aaaaaa`, gray-800 `#555555`** — the rest of the declared grey ramp (`--color-gray-100`, `--color-gray-600`, `--color-gray-800`).
- **Page-largest `#f3f3f3`, photo-placeholder-light `#d9d9d9`, photo-placeholder-mid `#c0c0c0`** — the three largest background areas measured on the page. They belong to image placeholders in the masonry grid (other measured placeholder fills include #d9f3f3, #260c0c and #262626), not to page chrome.
- **Blue `#007fff`, green `#3cb46e`, red `#e25c3d`** — declared root variables (`--color-blue`, `--color-green`, `--color-red`, with darker variants `--color-blue-dark` #006aff, `--color-green-dark` #37a866, `--color-red-dark` #df4927). None appeared as a rendered colour in the measured home-page viewport; social colours such as `--color-facebook` #1877f2 and `--color-pinterest` #e60023 are share-button tokens and are not brand colours.

## Typography

Every measured element renders in one family stack: `ui-sans-serif, system-ui, sans-serif`. No web font is loaded (`loadedFonts` is empty and the CSS has no `@font-face`). The interface therefore takes the operating system's UI face. This matches the press guidelines, which name SF Pro for macOS apps, Segoe UI for Windows apps and Inter for print and marketing collateral — so Inter is the official substitute when a fixed, cross-platform face is needed.

Measured roles:

- **Display** — the "Unsplash" hero word: 40px, weight 700, line-height 48px. The root variable `--heading-l-font-size` is 40px with `--heading-l-font-weight` 700.
- **Display-mobile** — on the 390px pass the largest heading is the Awards title at 18px/600, line-height 23.9999px (`--heading-xxs-font-size` 18px, weight 600).
- **Body** — 15px, weight 500, line-height 24px; 15px is also the most-read size on the page.
- **Nav** — 15px/400/24px, used by "See all" and the topic tabs.
- **Button** — 14px/500 with a 30px line-height, used by "Get Unsplash+" and the mobile "Download" button.
- **Input** — 14px/400/20px in the search field.

The rest of the measured size distribution is 12px (photo credits and metadata, with 0.12px letter-spacing) and 18px. The CSS declares a full heading ladder that this page does not use in its viewport: `--heading-xxl` 72px/700, `--heading-xl` 48px/700, `--heading-m` 28px/700, `--heading-s` 24px/600, `--heading-xs` 20px/600, plus text sizes `--text-m` 14px, `--text-s` 13px and `--text-xs` 12px. Weights are restrained: 500 and 400 dominate, 600 for small headings, 700 only for the hero word.

## Layout

The desktop page (1280px measurement width) is a single white band containing a fixed chrome and an endless grid. Root variables define the frame: `--nav-height` 56px, `--sidebar-width` 64px for the left icon rail, `--grid-container-inline-padding` 24px, `--nav-block-padding` 8px and `--spacing-unit` 4px. The measured content spans x = 88 to 1256, which places the grid to the right of the rail.

The hero row is three equal columns — wordmark and search, Awards promotion, Collections panel — and the photo grid below keeps the same three columns (`maxCardColumns` 3). Columns are masonry: images keep their native aspect ratios, so portrait and landscape tiles interleave and column bottoms never align. The most common measured gap is 8px and the most common padding is 20px (the Collections card). The spacing tokens (1, 2, 4, 8, 10, 11, 12, 16, 20, 24px) are all measured values; 4px is the declared spacing unit.

Density is high but calm: no section headings interrupt the grid, there are no full-width colour bands, and text appears only as small white credits laid over the photographs (for example "Portraits of Modern Dairy" and the sponsor "Sandisk"). Sponsored tiles sit in the same grid as editorial ones.

## Elevation & Depth

Depth is almost absent. The extractor recorded only three shadows on the page: `rgba(0, 0, 0, 0.08) 0px 1px 1px 0px` on the outlined "Submit an image" button, which becomes `rgba(0, 0, 0, 0.1) 0px 1px 2px 0px` on hover; `rgba(0, 0, 0, 0.12) 0px 1px 0px 0px`, a one-pixel bottom rule; and `rgb(17, 17, 17) 0px -2px 0px 0px inset`, the 2px underline that marks the active topic tab. The mobile "Download" button adds a subtle top highlight with `linear-gradient(to top, rgba(0, 0, 0, 0) 50%, rgba(255, 255, 255, 0.1) 100%)` over its #111111 fill.

The CSS also declares `--color-backdrop-bg` #0006 (a 40% black backdrop) and a stacking order for the top nav, sticky sub-nav, mobile sidebar, drawers and photo zoom (`--root-stacking-context-*` 1–6). Layering is handled by z-order and backdrops rather than by heavy shadows.

## Shapes

Measured radii, by frequency: 8px (14 elements), 50% (7 — avatars and round icons), 4px (4), 24px (1) and 56px (1). The CSS variable `--button-border-radius` is 8px, which is why both the "Get Unsplash+" and "Submit an image" buttons, the mobile "Download" button and the Collections card all share `rounded.sm` 8px. Photographs in the grid are not rounded in the capture. The 24px and 56px values each appear on a single element and are kept as measured tokens; the 50% avatar circles map to `pill`.

## Components

- **Primary button** — measured on mobile as "Download": #111111 fill, #ffffff 14px/500 text, 8px radius, 32px tall, padding 0px 11px 0px 10px, with the 1px `rgba(0, 0, 0, 0.08)` shadow and a soft white top gradient.
- **Secondary / outlined button** — "Get Unsplash+": #111111 text, 1px border, 8px radius, 32px tall, padding 0px 11px. "Submit an image" is the quieter variant: white fill, #767676 text, #d1d1d1 border; on hover the text becomes #111111 and the border #767676.
- **Ghost link** — "Log in": #767676 text with no fill, 32px tall, 8px radius, turning #111111 on hover.
- **Topic tabs** — 64px-tall links in #767676; hover and the active state turn the text and bottom border #111111.
- **Search input** — two instances: the top bar and the hero field. The measured field is 38px tall, 730px wide on desktop, with 14px/400 #111111 text and padding 1px 2px 2px 10px; the capture shows a pale grey rounded container with a magnifier and a visual-search icon.
- **Collections card** — a white panel with 8px radius and 20px padding, a 15px/600 "Collections" header with a "See all" link, and rows of square thumbnails with title and image count.
- **Photo tile** — image only, with creator credit overlaid in white at 90% opacity that rises to full opacity on hover.
- **Promo tile** — the Awards tile: a dark photographic background with an 18px/600 white title and #d1d1d1 body copy, centred.
- **Focus** — focused controls show the browser's `1px auto` focus ring (rgb(0, 95, 204)) with a 1px or 4px offset; that ring is the browser default, not a brand colour.

## Design System Architecture

No public Unsplash design system is published; the official brand reference is the press page at https://unsplash.com/press ("Unsplash Brand Assets and Guidelines"), which supplies logo downloads (symbol, logotype, stacked logotype), the three primary colours (White #FFFFFF, Black #111111, Grey #767676), the typeface list (SF Pro, Segoe UI, Inter) and the instruction not to alter the logo. The logo measured on the page is a 32×32 SVG symbol.

The shipped CSS shows the de-facto system: a token layer of root custom properties — a grey ramp (`--color-gray-100` to `--color-gray-800`), named hues with dark variants (`--color-blue`, `--color-green`, `--color-red`, `--color-pink`), a named heading scale (`--heading-xxs` … `--heading-xxl`, size and weight pairs), text sizes (`--text-xs/s/m`), layout constants (`--nav-height`, `--sidebar-width`, `--grid-container-inline-padding`), `--button-border-radius`, `--spacing-unit` 4px, `--transition-speed-base` .1s and a stacking-context ladder. Component classes are hashed CSS-module names (for example `logo-Owwpah`, `icon-HRKfSD`), so the token variables are the stable public surface. The stylesheet has two breakpoints: `max-width: 767px` and `min-width: 768px`.

## Do's and Don'ts

**Do**
- Keep the chrome black, white and grey: #111111, #ffffff, #767676, with the declared grey ramp for borders and fills.
- Let photographs carry all colour; paint a flat placeholder colour behind each image while it loads.
- Use the system UI sans stack, or Inter where a fixed face is required, at 14–15px for UI and 500 weight for body.
- Keep buttons compact: 32px high, 8px radius, 14px/500 labels.
- Mark the active tab with the 2px #111111 inset underline rather than a fill.
- Keep idle secondary controls at #767676 and darken them to #111111 on hover.

**Don't**
- Don't introduce a brand accent hue for buttons or links; the official palette has none.
- Don't round or frame the photographs, or add shadows to tiles.
- Don't use the social-network colours (#1877f2, #e60023) outside share controls.
- Don't load a decorative display face; the only large type is the 40px/700 wordmark headline.
- Don't alter the logo — the press page asks users not to.

## Responsive Behavior

Measured at 390px wide:

- The header shows 2 visible links instead of 5, and a menu toggle labelled "Select asset type" is visible.
- The grid shows at most 2 card columns (desktop: 3).
- The largest heading becomes the Awards title at 18px/600 (the 40px "Unsplash" hero word was not the largest visible heading on mobile).
- Body copy stays 15px/500/24px; the most-read sizes are 15px, 14px, 12px and 18px.
- A primary "Download" button appears: #111111 fill, white 14px/500 label, 8px radius, 32px tall.
- Content bands start at x = 12–16px from the edge.

The stylesheet declares breakpoints at `max-width: 767px` and `min-width: 768px`. Tablet widths, sidebar behaviour and drawer behaviour were not measured.

## Iteration Guide

1. Start from a white #ffffff page with #111111 text and the `ui-sans-serif, system-ui, sans-serif` stack (Inter as the fixed fallback).
2. Build the frame from the root constants: 56px top nav, 64px icon rail, 24px inline padding, 4px spacing unit.
3. Put content in a three-column masonry grid with 8px gaps; give each image a flat placeholder fill.
4. Use #767676 for every secondary link, tab and quiet button label, with #111111 on hover and for active states.
5. Make every button 32px tall with 8px radius and 14px/500 labels; the only solid fill is #111111 with white text.
6. Use the 2px inset #111111 underline for the selected tab.
7. Reserve 40px/700 for a single hero word; section titles stay at 15–18px, weight 600.
8. Verify any new colour against the press palette (White, Black, Grey) before adding it.
