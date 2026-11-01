---
version: alpha
name: "Eduard Bodak — Portfolio"
category: "Portfolio"
description: "Portfolio of Eduard Bodak, designer and developer from Cologne: beige #f9f4ec and black grounds, one hot-pink #ff47e7 accent, a heavy compressed sans at 84.8095px with -6.78476px tracking, 20px-radius cards."
colors:
  canvas: "#000000"
  page-body: "#f9f4ec"
  ink: "#f9f4ec"
  primary: "#ff47e7"
  surface-3: "#ede8de"
  ink-2: "#ffffff73"
  ink-5: "#ffffff66"
  ink-6: "#00000066"
  hairline: "#ffffff8c"
typography:
  display:
    fontFamily: "Sans-fb7711f11465baf0, \"Sans-fb7711f11465baf0 fallback: Arial\", sans-serif"
    fontSize: 84.8095px
    fontWeight: 600
    lineHeight: 84.8095px
    letterSpacing: "-6.78476px"
  display-mobile:
    fontFamily: "Sans-fb7711f11465baf0, \"Sans-fb7711f11465baf0 fallback: Arial\", sans-serif"
    fontSize: 56px
    fontWeight: 600
    lineHeight: 56px
    letterSpacing: "-4.48px"
  heading:
    fontFamily: "Sans-fb7711f11465baf0, \"Sans-fb7711f11465baf0 fallback: Arial\", sans-serif"
    fontSize: 48.9466px
    fontWeight: 600
    lineHeight: 48.9466px
    letterSpacing: "-3.42626px"
  subheading:
    fontFamily: "Sans-fb7711f11465baf0, \"Sans-fb7711f11465baf0 fallback: Arial\", sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: "-1px"
  body:
    fontFamily: "Sans-fb7711f11465baf0, \"Sans-fb7711f11465baf0 fallback: Arial\", sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-1.2px"
  nav:
    fontFamily: "Sans-fb7711f11465baf0, \"Sans-fb7711f11465baf0 fallback: Arial\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
    letterSpacing: "-0.7px"
  link:
    fontFamily: "Sans-fb7711f11465baf0, \"Sans-fb7711f11465baf0 fallback: Arial\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-1px"
rounded:
  xs: 3px
  sm: 4px
  md: 20px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 5.5px
  s5: 12px
  s6: 14.78px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 21px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    padding: 20px 22.7792px 0px
  nav-link:
    backgroundColor: "{colors.surface-3}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    padding: 91.1141px 22.7792px 24px
---

# Eduard Bodak — Portfolio

## Overview

The site at https://www.eduardbodak.com/ is titled "Eduard Bodak · Designer & Developer from Cologne" and is the portfolio of a freelance web designer and developer. The 1280px capture opens on a warm off-white page with a very large, tightly tracked headline, "Crafting Websites that Feel Good", centred at the top; a small grey credit line, "Eduard Bodak · Designer & Developer"; and a vertical stack of three project thumbnails on black plates (one reading "BOLD WEBSITES", one a dark blue case-study screen, one a flat indigo rectangle). Beside the stack a row reads "Aardvark", a pink right arrow and the word "View" in large type, which labels the project currently in focus. Below the fold the page flips to a black section with the statement "Every project includes strategy, design, development and motion." where the words strategy and design are bright and the rest grey, followed by tilted playing-card-like cards titled "Website Design" and "Website Development" with printed corner glyphs and mirrored text at the bottom, and a patterned card back. The page measures 4563px tall.

The mood is playful but disciplined: a two-tone beige and black system, one hot-pink accent, and a single sans family set heavy and compressed. The h2 role in the extraction is the project title "Filmbot", and the h3 role is "Website Design". The page has language toggles EN and DE at the top right of the capture. Microcopy is short, confident and benefit-oriented ("For brands that believe every detail matters.").

## Colors

All values below come from the live measurement or its root variables.

- Beige `#f9f4ec` (`--beige`, `--color-background`, hsl(39 50% 95%)): the page-body background, largest area by weight (5596). It doubles as the text colour on black (`ink` token) and as the card fill.
- Black `#000000` (`--black`, `--color`): the `canvas` token. It is the footer and the dark statement section, 4317 by area weight, and it is the default text colour on beige (630 characters).
- Pink `#ff47e7` (`--pink`, `--color-accent`, hsl(308 100% 64%)): the `primary` token, used for the arrow in the project row and 84 measured characters. It is the only saturated colour.
- Beige dark `#ede8de` (`--beige-dark`, `--color-surface`, `surface-3`): the background of the active navigation pill.
- Translucent whites on black: `#ffffff73` (`ink-2`, the dim words in the statement), `#ffffff66` (`ink-5`) and `#ffffff8c` (`hairline`, the only border colour). `#00000066` (`ink-6`) is black at 40% alpha for muted text on beige; the stylesheet defines `--color-muted` as the text colour mixed 60% transparent.

There are no gradients or shadows in the measured data; any colour in the project thumbnails belongs to the client work shown, not to the site's palette.

## Typography

One sans family is loaded as a hashed web font, `Sans-fb7711f11465baf0` (weight 600, with an Arial fallback face), plus a mono face `Mono-7ce404b71f1bf59f` (weight 500) for micro labels (93 characters at 11px). Neither font's public name was found, so substitutes are not named; a tightly spaced geometric grotesque at weight 600 is the closest description of the capture.

The signature is negative tracking with line-height 1 across the scale:
- Display: 84.8095px at 1280px, tracking -6.78476px (the `display` token). The root variable `--font-size-display` is a clamp from 4.5rem to 10rem, and a 146.564px size with -11.7251px tracking was measured on four characters.
- Heading (`h2`): 48.9466px, tracking -3.42626px.
- Body (`p`): 24px at 600, tracking -1.2px. 20px at 600 with -1px tracking is the subheading and card text; weight 400 at 20px is the link style.
- Nav: 14px, 600, tracking -0.7px. A 13.9227px size appears on 42 characters.
- Mono micro: 11px at -0.33px (`--font-size-f1: .6875rem`).

Tracking variables are `--font-ls-display: -.08em`, `--font-ls-h1: -.08em`, `--font-ls-h2: -.07em`, `--font-ls-h3`, `--font-ls-h4` and `--font-ls-p1` at -.05em, and `--font-ls-f1: -.03em`. Weights used: 600 (785 characters), 400 (201) and 500 (93).

## Layout

The layout uses an 8-column grid (`--grid-columns: 8`) with fluid margin and gutter: `--grid-margin: clamp(1rem, .8129770992rem + .7634vi, 1.5rem)` and `--grid-gutter: clamp(.5rem, .3129770992rem + .7634vi, 1rem)`. Content is centred; the headline block is 706px wide at 1280px. The header is 43px tall with padding `20px 22.7792px 0px`, holding Service, Work and Connect on the left and the language switch on the right. The footer is 659px tall with padding `91.1141px 22.7792px 24px` on a black ground and contains a Sitemap column group (Service, Work, Connect). Measured gaps include 14.7792px (12 instances), 4px, 2px, 24px and 80px; padding 4px and 5px are the most frequent (44 each). The case-study row pairs a left title with a right "View" label across the full width and the thumbnails in a centred column.

## Elevation & Depth

No box-shadows were measured. Depth comes from colour blocks (beige page, black section), thin translucent borders `#ffffff8c` and from 3D transforms: the capture shows the service cards tilted and rotated, with card faces and backs visible. The `--z-index-header: 1000` and `--z-index-cursor: 2000` variables define layering of the header and a custom cursor layer.

## Shapes

Measured radii: 4px (16 elements, `sm`), 20px (6 elements, `md`, the service cards), 3px (`xs`) and 50% or a full pill (`9999px` token). Cards are 243px wide by 452px tall with a 20px radius and the beige fill. The navigation item is a small 4px-radius pill. Thumbnails sit on black plates with square corners in the capture; their radius was not measured.

## Components

- Navigation link: 14px, 600, tracking -0.7px, background `#ede8de` when active, height 23px.
- Language switch: EN and DE at the top right; the active one has a light pill background.
- Headline: display style, black on beige.
- Project row: large title (such as "Aardvark"), pink arrow, "View".
- Service card: `#f9f4ec` fill, black text, 20px radius, 243px by 452px, title and one-sentence blurb ("Crafting thoughtful interfaces people enjoy using. Quality first.").
- Footer: black, beige text, sitemap.
- Button: no filled button was detected; the call to action is the pink arrow with "View".

## Design System Architecture

No public design system, brand guideline or token package was found; the page links none. The de-facto system is exposed in custom properties: colours `--beige`, `--beige-dark`, `--pink`, `--black`, `--color`, `--color-background`, `--color-surface`, `--color-accent`, `--color-muted`; type `--font-size-display`, `--font-size-h1` to `--font-size-h4`, `--font-size-p1`, `--font-size-p2`, `--font-size-f1`, with matching `--font-lh-*` (all 1) and `--font-ls-*`; layout `--grid-*`; motion `--ease-expo-out: cubic-bezier(.5, .6, 0, 1)` and `--ease-overshoot-in: cubic-bezier(.55, -.4, .4, 1)`. Source: root variables in the extraction of https://www.eduardbodak.com/.

## Do's and Don'ts

Do:
- Use beige `#f9f4ec` and black as the two grounds and flip between them by section.
- Keep tracking strongly negative and line-height at 1.
- Reserve pink `#ff47e7` for the single arrow or action.
- Use 20px radius for cards and 4px for small chips.
- Write short, concrete copy.

Don't:
- Do not add shadows; none were measured.
- Do not use pink for large fills or body text.
- Do not loosen the tracking or raise the line-height above 1.
- Do not document the client thumbnails' colours as brand colours.

## Responsive Behavior

The 390px pass measured: the h1 at 56px with line-height 56px and tracking -4.48px (358px wide, 168px tall), the h2 at 20px, and body text at 32px with -2.24px tracking (358px wide). Other mobile sizes recorded were 14px, 20px, 11px, 13.0781px and 72px. The fluid clamp variables above give the desktop and mobile ranges. Navigation layout, card behaviour and breakpoints on mobile were not measured.

## Iteration Guide

1. Set beige `#f9f4ec` as the page ground and black `#000000` for dark sections and text.
2. Use one sans at weight 600 with line-height 1 and tracking from -0.03em to -0.08em; display 84.8095px.
3. Add pink `#ff47e7` only for the arrow.
4. Build cards at 20px radius; keep gaps in the measured set (2, 4, 14.7792, 24px).
5. Run `node web/scripts/verify-designs.mjs --slug=eduard-bodak-portfolio`.
