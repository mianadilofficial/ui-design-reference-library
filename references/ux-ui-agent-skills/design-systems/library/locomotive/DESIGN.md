---
version: alpha
name: Locomotive
category: "Agencies & Studios"
description: "Locomotive, the Montreal digital-first design agency, runs a strictly black #000000 on white #ffffff site with no rounded corners (0px everywhere), 2px black rules, PP Locomotive New at 70px/400 for display and Helvetica Now Display at 26px/400 for nearly all other text, plus a #312dfb full-screen menu colour declared in its CSS."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  menu-bg: "#312dfb"
typography:
  display:
    fontFamily: LocomotiveNew, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 70px
    fontWeight: 400
    lineHeight: 77px
  display-mobile:
    fontFamily: LocomotiveNew, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 39.6px
  body:
    fontFamily: HelveticaNowDisplay, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 31.2px
  body-mobile:
    fontFamily: HelveticaNowDisplay, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
rounded:
  none: 0px
spacing:
  s1: 5px
  s2: 7px
  s3: 8px
  s4: 9.78px
  s5: 10px
  s6: 20px
  s7: 40px
  s8: 133.33px
components:
  link-row:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 10px 0px
    height: 48px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 10px 0px
    borderColor: "{colors.ink}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 40px 20px
---

# Locomotive

## Overview

Locomotive (locomotive.ca, measured at https://locomotive.ca/en, page title "Locomotive | Montreal web agency") is an independent digital-first design agency based in Montréal, Quebec. Its Agency page says the studio was started in 2008 by three founders — "an ops guy, a designer and a dev" — and calls that combination its "Triforce" of operations, design and development. The same page lists capabilities from digital strategy and UX to brand identity, naming, design systems, motion design and video production, and introduces a design team of 10 and a development team of 11. The agency is also the publisher of the open-source Locomotive Scroll library.

The home page is an editorial, typographic composition in pure black and white. The capture opens on a full-bleed, dark-red pixelated photographic hero with the H1 "[U+1F536] Locomotive® Digital-first Design Agency[U+1F37A U+1F51E]" set in white PP Locomotive New at 70px, with small inline pictograms ("OPS / DES / DEV" badge, an asterisk-like glyph, a "LOCO" mark) embedded in the line. Below the hero everything is black type on white: a "Seven Years Running 2018–2024 / The dynasty" award block, a "Featured work" index of client names (Lightship, Wolverine Worldwide, The Drake Hotel, Dulcedo, Scout Motors, All Work) set as huge centred serif lines separated by black rules, a large manifesto paragraph ("Design and code are only tools of expression…"), an "Extras (13)" list of articles and culture trips, a store section with T-shirt and cap product shots, and a dense footer ending in a typographic address block.

The voice is confident and playful: emoji in headings, ® marks, "Freshness guaranteed.", "Always looking for top shelf talent".

## Colors

The page is measured as two colours only.

- **Canvas `#ffffff`** — the body background and the largest background area; `--color-bg: #FFFFFF` in the root CSS variables.
- **Ink `#000000`** — every measured readable text colour on white (1,812 of 1,899 measured characters), the 2px rules and the borders (`borderColors` contains only #000000); `--color: #000000` in the CSS.
- **Primary `#000000`** — the site has no filled call-to-action. Actions are black text links with black rules ("The dynasty →", "Agency →", "Careers →", "Buy now →"), so the action colour is the ink.
- **White on media** — over the photographic hero the nav, the "Let's talk" link and the H1 render in #ffffff, which is the canvas value reused as text.
- **Menu-bg `#312dfb`** — declared as `--menu-color-bg` with `--menu-color: #FFFFFF`. It is the background of the site's menu layer; the menu was closed in the measured state, so this blue did not render in the capture.

The black #000000 area measured on the page (199 units) comes from the dark media blocks such as the ring photograph and the walking-figure video still. Colour otherwise enters only through photography and product imagery (the red-printed "Pros de l'internet" T-shirt, the sand cap). The cookie-consent variables (`--cc-*`) and the slider library's `--swiper-theme-color` #007aff belong to third-party widgets and are not brand colours.

## Typography

Two self-hosted faces are loaded, both from https://locomotive.ca/assets/fonts/:

- **LocomotiveNew** — shipped as the file `PPLocomotiveNew-Light.woff2` and registered at weight 400. It sets the display type: the H1 at 70px/400 with a 77px line-height (`--font-size-h1` 4.6666666667rem), dropping to 36px/400 with a 39.6px line-height at 390px. The capture shows the same high-contrast, narrow serif on the "Featured work" names, the manifesto paragraph and the footer address block.
- **HelveticaNowDisplay** — file `HelveticaNowDisplay-Regular.woff2`, weight 400. It is the text face and the most-used family (1,432 measured characters versus 467 for LocomotiveNew). Nav links, section labels ("Featured work"), body copy, the "Extras" list and link rows are 26px/400/31.2px on desktop and 18px/400/21.6px on mobile.

Only weight 400 is measured anywhere. Hierarchy comes from size and face, never from bold. Measured desktop sizes are 26px, 70px, 64px, 15px and 97.7778px; the root declares `--font-size: 15px`, `--font-size-medium` and `--font-size-h2` 1.7333333333rem, `--font-size-h3` 1.4666666667rem, `--font-size-h4` 1.3333333333rem, `--font-size-h5` 1.2rem, `--font-size-h6` 1.0666666667rem and `--font-size-huge` 7.6388888889vw (97.7778px at the 1280px measurement width). Letter-spacing is `normal` throughout and nothing is uppercased.

Substitutes: when the self-hosted files are unavailable, use the site's own shipped fallback stack: `-apple-system, system-ui, avenir next, avenir, segoe ui, helvetica neue, helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif`.

## Layout

The CSS declares a 12-column grid (`--grid-columns: 12`) with a 20px gutter (`--grid-gutter: 20px`) and a `--grid-margin` of 2.6666666667rem. Content spans x = 40 to 1240 at 1280px (40px side margins, matching the 40px footer padding). The header height variable is 4rem.

Vertical rhythm is set by named spacing variables, unitless in the CSS: micro 14, tiny 20, small 30, medium 40, large 80, big 150, huge 200, enormous 250 on desktop, with mobile counterparts micro 8, tiny 20, small 30, medium 40, large 52, big 80, huge 100, enormous 140. Measured paddings include 7px, 20px, 9.77778px, 40px, 10px and 133.333px; the most common measured gap is 20px.

The composition alternates between full-width lists and asymmetric two-column blocks: the award block sits off-centre with small labels ("Seven Years", "Running", "2018-2024") floating around a single black image; the about block pairs a tall video still with a short paragraph and two link rows; "Extras" uses a two-column label/list table. `maxCardColumns` is 2. White space is generous between sections and tight inside lists.

## Elevation & Depth

There is no elevation. No box-shadow is measured anywhere on the page (`boxShadows` is empty) and no surface colour other than white and the black media blocks. Separation comes entirely from 2px black rules (`--border-size: 2px`, `--border: solid var(--border-size)`), from the full-width horizontal lines between "Featured work" items and "Extras" rows, and from photography. The hero is the only layered moment: white text over a darkened, pixelated photograph.

## Shapes

Everything is square. `borderRadii` in the extraction is empty — every rendered element computes a 0px radius — so the only radius token is `none: 0px`. Images, video stills, product cards, list rows and the hero all have hard corners. Lines are 2px solid black. The decorative shapes in the system are typographic: small boxed badges ("OPS / DES / DEV", "UNIT", the phone-number boxes in the footer), arrows (→, ↓, ↗) and pictogram glyphs set inline with the display serif.

## Components

- **Link row** — the agency's call-to-action pattern. "The dynasty", "Agency", "Careers", "Buy now": 26px/400 Helvetica Now Display in #000000, a 2px solid black rule, padding 10px 0px, 48px tall, with a right-pointing arrow at the far end and 0px radius.
- **Header nav** — "Work, Agency, Careers, Store" grouped as one comma-separated line, "Locomotive®" at the left and "Let's talk" at the right, all white 26px/400 over the hero. On hover the measured links keep their colour and gain an underline; there is no background change.
- **Featured work index** — full-width centred client names in the display serif, each separated by a black rule, ending in "All Work".
- **Extras list** — a two-column table: category label at left ("Articles", "Culture", "Store"), rule-separated item titles at right, with "(13)" set as a counter beside the section title.
- **Product card** — product photograph on a light ground, with name, price ("30 USD", "25 USD") and "Buy now →" beneath, square corners.
- **Footer** — 0px 40px 20px padding, four columns (Menu, Social, External), small black text, then a large typographic address block mixing the display serif with boxed numerals and coordinates.
- **Focus** — focused links show the browser's `1px auto` ring; that ring is browser default, not a brand colour.

## Design System Architecture

No public Locomotive design system or brand-guideline page was found on the pages opened (the Agency page https://locomotive.ca/en/agency and the GitHub organisation https://github.com/locomotivemtl). The GitHub organisation pins `locomotive-scroll` ("Detection of elements in viewport & smooth scrolling with parallax"), `astro-boilerplate` ("Astro project boilerplate by Locomotive"), `craft-boilerplate` and `front-end-helpers` ("A toolkit for enhancing front-end workflows"); none is a design system or token package.

The de-facto system is visible in the shipped root variables of https://locomotive.ca/assets/styles/main.css: a two-colour theme (`--color`, `--color-bg`, `--menu-color`, `--menu-color-bg`), a heading scale `--font-size-h1` to `--font-size-h6` in rem plus `--font-size-medium` and a viewport-relative `--font-size-huge`, a 12-column grid (`--grid-columns`, `--grid-gutter`, `--grid-margin`), a named spacing scale with separate `-mobile` values, and a single border definition (`--border-size`, `--border`). The stylesheet's most-used breakpoints are 699/700px and 1024/1025px, with further steps at 1199/1200, 1399, 1599/1600, 1999/2000 and 2399/2400px.

## Do's and Don'ts

**Do**
- Keep the palette to #000000 and #ffffff; let photography provide colour.
- Set display lines in PP Locomotive New at weight 400 and everything else in Helvetica Now Display at weight 400.
- Use 2px solid black rules to separate list items and to underline link rows.
- Keep every corner square (0px).
- Use arrows (→) and inline pictograms as the decorative vocabulary.
- Write with personality: emoji, ® marks, short witty labels.

**Don't**
- Don't introduce bold weights; no weight other than 400 is measured.
- Don't add drop shadows, cards with elevation or rounded corners.
- Don't use filled buttons; actions are ruled text links.
- Don't treat the cookie-widget or slider colours (`--cc-*`, #007aff) as brand colours.
- Don't show the #312dfb menu colour on the resting page; it is declared for the menu layer.

## Responsive Behavior

Measured at 390px wide:

- The H1 shrinks from 70px/77px to 36px/39.6px (PP Locomotive New, 400).
- Body copy and the "Featured work" label shrink from 26px/31.2px to 18px/21.6px (Helvetica Now Display, 400).
- Other measured mobile sizes are 35.685px, 15px and 40px.
- The header shows 1 visible link and a menu toggle labelled "Navigation mobile" (desktop: 6 header links visible).
- Content spans x = 20 to 370, so side margins drop from 40px to 20px.
- `maxCardColumns` stays at 2.

The stylesheet's media queries centre on `(max-width: 699px)`, `(min-width: 700px) and (max-width: 1024px)` and `(min-width: 1025px)`. The menu overlay's mobile appearance was not measured.

## Iteration Guide

1. Start with a white #ffffff page, black #000000 text, 40px side margins and a 12-column grid with 20px gutters.
2. Load PP Locomotive New (display) and Helvetica Now Display (text), both at weight 400 only.
3. Set the hero title at 70px/77px over full-bleed photography in white; set all other text at 26px/31.2px.
4. Build lists as full-width rows divided by 2px black rules; put calls to action in ruled rows with a trailing arrow.
5. Keep radius at 0px and add no shadows.
6. On mobile, scale display to 36px and text to 18px, and use 20px margins.
7. Use #312dfb only for the menu layer, with white menu text.
