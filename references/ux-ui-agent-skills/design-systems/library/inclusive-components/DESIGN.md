---
version: alpha
name: Inclusive Components
category: "Design Systems"
description: "Inclusive Components by Heydon Pickering: a blog-as-pattern-library in two values, off-white #fefefe and charcoal #222222, Miriam Libre 700 headings at 89.6px, Asap 19.04px body, #80b3ff focus ring, dashed rules and white plug illustrations."

colors:
  canvas: "#fefefe"
  page-largest: "#222222"
  ink: "#222222"
  primary: "#222222"
  focus-ring: "#80b3ff"
typography:
  display:
    fontFamily: "\"Miriam Libre\", serif"
    fontSize: 89.6px
    fontWeight: 700
    lineHeight: 89.6px
  display-mobile:
    fontFamily: "\"Miriam Libre\", serif"
    fontSize: 44.875px
    fontWeight: 700
    lineHeight: 44.875px
  heading:
    fontFamily: "\"Miriam Libre\", serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 30.8px
  subheading:
    fontFamily: "\"Miriam Libre\", serif"
    fontSize: 39.2px
    fontWeight: 700
    lineHeight: 43.12px
  body:
    fontFamily: Asap, sans-serif
    fontSize: 19.04px
    fontWeight: 400
    lineHeight: 28.56px
  nav:
    fontFamily: "\"Miriam Libre\", serif"
    fontSize: 17.92px
    fontWeight: 400
    lineHeight: 26.88px
rounded:
  dot: 50%
  tiny: 2px
spacing:
  s1: 16.8px
  s2: 33.6px
  s3: 47.04px
  s4: 62.72px
components:
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.page-largest}"
    padding: 62.72px 33.6px
---

# Inclusive Components

## Overview

Inclusive Components (https://inclusive-components.design) describes itself as "A blog trying to be a pattern library. All about designing inclusive web interfaces, piece by piece." It is written by Heydon Pickering; the about page says each post "explores a common interface component and comes up with a better, more robust and accessible version of it," and the site links to an Inclusive Components book that has "updated and improved" content and demos. The measured home page is therefore a publication, not a product site and not a published design system.

The page is austere and typographic. A full-width charcoal band (`page-largest` `#222222`) holds a small top navigation (the site name, "The components", "About the project"), the huge white title "Inclusive Components", the tagline, and a row of six white flat illustrations of cable and connector plugs, which are cropped by the bottom edge of the band so that they appear to plug into the page below. Underneath, the page flips to an off-white canvas (`#fefefe`) with dashed rules, a "Get the book!" panel with a dark book cover, and a vertical index of articles. Each entry in the index sits under a rule that carries a dot and a small notch, like a circuit trace, and shows a title in the heading face plus a dd/mm/yy date: Cards (04/06/18), Data Tables (31/03/18), Notifications (27/02/18), A Content Slider (22/11/17) and so on.

The voice is first-person, dry and practical. The visual metaphor, hardware plugs and wiring, runs through the whole page.

## Colors

The palette is effectively two values. `canvas` is `#fefefe`, the stylesheet's `html` background, and `ink` is `#222222`, the stylesheet's text colour and the only border colour measured. `primary` is also `#222222`: there is no accent colour on the page, links inherit the text colour and are marked by an underline rather than by hue. `page-largest` `#222222` is the large hero band and book-cover fill, in which the same value acts as a background and text flips to `canvas`.

One further colour appears in the stylesheet: `focus-ring` `#80b3ff`, used for a 4px outline with a 2px offset on `:focus` for every focusable element that is not tabindex -1. The measured text colours are `#222222` (most read) and `#fefefe` (hero and nav text). Because no brand hue exists, state, emphasis and hierarchy are handled by weight, size, rules and inversion, not colour.

The browser default blue and purple link colours are not used here: the stylesheet sets `a { color: inherit; }`.

## Typography

Two Google Fonts, both loaded by the page: Miriam Libre at weight 700 for headings and Asap at weight 400 (and 400 italic) for body. The page's `<link>` for Miriam Libre is subset to Latin letters and the ampersand, which tells us the headings are meant to be short.

Measured roles: `display` is Miriam Libre 700 at 89.6px on a 89.6px line-height, with a mobile value of 44.875px on 44.875px (`display-mobile`). The site-name h1 therefore has solid, un-leaded lines. `subheading` is 39.2px/43.12px (the article titles in the index), `heading` is 28px/30.8px (e.g. "Get the book!"), `body` is Asap 19.04px on 28.56px, and `nav` is Miriam Libre 400 at 17.92px on 26.88px. The stylesheet sets the root size to `calc(1em + 0.5vw)` and all type in rem, so sizes grow smoothly with the viewport; the pixel numbers are what the extractor resolved at 1280px and 390px. Headings are set with a 1.1 line-height; h3 is uppercase ("THE COMPONENTS:" in the capture). Both families are open Google Fonts and need no substitute.

## Layout

A single narrow reading column (the capture shows about two-thirds of a 960px-wide screenshot) centred on the page, with all content left-aligned to the same edge, apart from centred section labels. The stylesheet sets lists of components in a vertical stack with generous bottom padding. The rhythm is a global lobotomised-owl rule, `* + * { margin-top: 1.5rem; }`, which gives every sibling the same vertical gap, then overrides it for tight groups; this is how the page keeps a regular beat without per-element margins.

Spacing values measured: 16.8px, 33.6px, 47.04px and 62.72px (`s1` to `s4`), all derived from the rem rhythm. The footer uses padding 62.72px 33.6px.

## Elevation & Depth

There is no elevation at all: no box shadows and no gradients were measured. Separation uses inversion (charcoal band against off-white), 2px dashed horizontal rules around the book panel, a 3px solid top border on each article entry, and 2px solid borders on tables. The hero illustrations are solid white shapes on charcoal and appear to rise out of the band by being clipped at its lower edge.

## Shapes

Shapes are rectilinear. The only radii in the stylesheet are tiny: 2px (`tiny`) for small elements, 0.33rem for another, and 50% (`dot`) for the circular marker on each article entry's rule. The extractor measured no radius on content elements. The illustrations are blocky geometric plugs; the book cover is a plain dark rectangle with a thin white outline drawing of a lightbulb.

## Components

**Site header**: dark band; the site name in Miriam Libre at the left of a row of small underlined links ("The components", "About the project").

**Hero title and tagline**: white Miriam Libre 700 at 89.6px, followed by the tagline in Asap, over a row of six white plug illustrations.

**Book panel**: between two dashed rules, a heading "Get the book!", a short paragraph with an underlined link, and the book cover image at right.

**Component index**: a list with the heading "THE COMPONENTS:" and entries made of a 3px top rule, a dot, a Miriam Libre title and a date beneath it. Links have no colour of their own; they are inherited text with a 1px bottom border (the nav links), or no border on the index titles.

**Focus state**: a 4px solid `#80b3ff` outline with a 2px offset, and a "skip to main" link that slides into view on focus.

**Tables** (articles): 2px solid borders, 1em cell padding, 0.85rem text.

No button is present on the home page, so no button token is declared.

## Design System Architecture

No official, public design system exists for this site. The project is a blog about building accessible components, and its demonstrations belong to the individual articles and to the companion book at https://book.inclusive-components.design (linked from the home page, not opened). The site's own CSS is a single small stylesheet, https://inclusive-components.design/assets/css/styles.css, which holds a reset, the `* + *` spacing rule, typography by element selector, and ARIA-label-based selectors such as `[aria-label='components'] li` for the index. There are no CSS custom properties; the two colours are literal values. The `dsUrl` given for this slug is the same domain and is a blog, not a design-system documentation site, so nothing was taken from it as system tokens; values come from the page measurement and its shipped CSS.

## Do's and Don'ts

- Do limit colour to `#fefefe` and `#222222`, inverting rather than adding hues.
- Do mark links with an underline and keep their colour inherited.
- Do give every focusable element the 4px `#80b3ff` outline.
- Do set headings in Miriam Libre 700 with a 1.1 line-height and body in Asap at 19.04px/28.56px.
- Do use one consistent vertical rhythm and let rules, not shadows, separate sections.
- Don't add drop shadows, gradients or rounded cards.
- Don't use default browser blue links.
- Don't add a call-to-action button style that the site does not have.

## Responsive Behavior

The root font size is `calc(1em + 0.5vw)` and everything is in rem, so the page scales continuously. The measured h1 drops from 89.6px to 44.875px at the 390px viewport (`display-mobile`). The stylesheet uses a handful of width limits (max-width values of 32rem, 300px and 600px appear) to keep the reading column narrow, and illustrations are `width: 100%` with auto height, so the plug row scales with the band. Spacing in the footer is not changed in the captured data.

## Iteration Guide

1. Start from two values only: `#fefefe` for the page and `#222222` for text, rules and the hero band.
2. Set the title in Miriam Libre 700 at display size with a line-height equal to the size; set body in Asap 400.
3. Use a single margin rule for rhythm and add explicit overrides only for tight groups.
4. Separate sections with dashed or solid 2px to 3px rules and inverted bands.
5. Always provide the `#80b3ff` focus outline and a skip link.
6. Verify with `node web/scripts/verify-designs.mjs --slug=inclusive-components`.
