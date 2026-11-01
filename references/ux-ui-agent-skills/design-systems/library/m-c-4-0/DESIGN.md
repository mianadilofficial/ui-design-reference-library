---
version: alpha
name: "Mallard & Claret"
category: "Agencies & Studios"
description: "Mallard & Claret (M&C) is a London and Brisbane web agency site: coral #fb4d4d hero band, charcoal #262626 ink, FK Grotesk Neue in 400 and 500 with strongly negative tracking, a single 20px pill radius and full-bleed project media."
colors:
  canvas: "#ffffff"
  ink: "#262626"
  white: "#ffffff"
  primary: "#fb4d4d"
typography:
  display:
    fontFamily: "\"FK Grotesk Neue\", helvetica, arial"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22.22px
    letterSpacing: "-1.32px"
  display-mobile:
    fontFamily: "\"FK Grotesk Neue\", helvetica, arial"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20.64px
    letterSpacing: "-0.48px"
  subheading:
    fontFamily: "\"FK Grotesk Neue\", helvetica, arial"
    fontSize: 33.7778px
    fontWeight: 400
    lineHeight: 35.8044px
    letterSpacing: "-2.02667px"
  body:
    fontFamily: "\"FK Grotesk Neue\", helvetica, arial"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.06px
    letterSpacing: "-0.42px"
  nav:
    fontFamily: "\"FK Grotesk Neue\", helvetica, arial"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.06px
    letterSpacing: "-0.42px"
  input:
    fontFamily: "\"FK Grotesk Neue\", helvetica, arial"
    fontSize: 26.6667px
    fontWeight: 400
    lineHeight: 28.5333px
    letterSpacing: "-1.6px"
rounded:
  xs: 20px
spacing:
  s1: 2.5px
  s2: 5px
  s3: 7px
  s4: 7.5px
  s5: 9px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 20px
  s10: 25.6px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 25.6px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    textColor: "{colors.ink}"
    padding: 25.6px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 12px 0px
    height: 60px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 25.6px
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.white}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    height: 22px
---

## Overview

Mallard & Claret ("M&C", mallardandclaret.com) is a digital agency with offices in London and Brisbane. The fetched home page positions it as a builder of "highly bespoke websites for ambitious brands" with the tagline "From pixels to possibilities" and the line "Impactful digital products & experiences to propel ambitious brands." The page opens on a flat coral band (`#fb4d4d`, the measured body background) carrying a gigantic "M&C" wordmark in dark charcoal, two live clocks (London and Brisbane) and a small black video tile in the corner. Below the band, full-bleed project films and photographs follow one another with tiny white captions and rounded pill tags ("CHARITY", "2025", "#2025 #CHARITY"). The feeling is editorial and confident: one saturated color, one typeface, huge negative-tracked type, and the client work doing the decorating. The measured page is 11266px tall at 1280px.

## Colors

The palette is deliberately small. `ink` `#262626` is the most-read text color (4645 characters) and also the largest measured background by area (13319), used for the dark project sections. `canvas` `#ffffff` is the page background taken by the role detector, and white text (`#ffffff`, 900 characters) sits on the dark sections and over imagery. `primary` `#fb4d4d` is the coral of the hero band and is the body element's computed background. A pure `#000000` background was also measured (589 area units) for the video tile. There are no grays beyond the charcoal, no gradients in CSS and no measured shadows. The WordPress preset palette in the root variables (vivid cyan `#0693e3`, vivid purple `#9b51e0`, pale pink `#f78da7`, and others) is the CMS default and does not appear in the measured page colors, so it is not brand color.

## Typography

One family carries everything: FK Grotesk Neue, loaded in weights 400 and 500, with `helvetica, arial` fallbacks. Letter-spacing is always negative and scales with size: 14px text is tracked at -0.42px (that is -3%), 22px at -1.32px, 26.6667px at -1.6px, 33.7778px at -2.02667px, 53.3333px at -3.2px, 80px at -3.2px and the 191.111px wordmark at -12.16px. Sizes measured by character count are 14px (4564 characters, the body and nav size), 33.7778px, 53.3333px, 26.6667px, 11px, 22px, 191.111px and 80px. The h2 hero line is 22px on a 22.22px line height at weight 400; the "Our mission" h3 is 33.7778px on 35.8044px; the contact-form input is 26.6667px on 28.5333px. Nav items are 14px at weight 500. The only substitutes the page itself declares are the system fallbacks `helvetica` and `arial`.

## Layout

The grid is a plain full-width canvas with a 63px header (`--header-height`) and a fluid spacer variable `--spacer: 2vw`. Header padding and footer padding both measure 25.6px, which is also the most common padding (20 uses). Typical gaps are 20px (33 uses), 25.6px, 10px, 5px and 7px, with big section gaps of 60px, 120px and 180px. Navigation is a row of underlined text links (Work, Services, Products, Agency, Latest) plus a pill "CONTACT US" button. Project blocks are full-bleed, and captions overlay the lower-left corner of the media in white 14px type.

## Elevation & Depth

No box-shadow was measured on rendered elements. The WordPress preset shadows exist as root variables (for instance `--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2)` and `--wp--preset--shadow--deep`) but they are the theme.json defaults and none renders on the measured page. Depth comes from stacking flat colored sections and from imagery.

## Shapes

Only one radius was measured: 20px (13 elements). It is the pill radius of the "CONTACT US" button (22px tall) and the small tag chips. Everything else, including images and sections, is square-cornered. `rounded.xs` is therefore the single shape token.

## Components

- **Button primary:** "CONTACT US", charcoal `#262626` fill, white text, 20px radius, 22px tall. On hover it was measured turning transparent with charcoal text and a charcoal border: it inverts to an outline.
- **Nav links:** FK Grotesk Neue 500 at 14px with -0.42px tracking, charcoal on the coral band, underlined in the capture.
- **Text input:** 60px tall, 26.6667px type, 12px vertical padding and no radius or fill token; it is an underline-style field in the contact block.
- **Tag chips:** small 20px-radius pills over imagery, for example the "CHARITY" and "2025" tags.
- **Footer:** white background, charcoal text, 25.6px padding.
- **Clocks:** London and Brisbane local times shown beside the hero statement, in 14px type.

## Design System Architecture

No public design system or brand guideline exists for M&C: the home page lists "Design Systems" only as a service it sells and links to award profiles (Awwwards, FWA, CSS Design Awards) and social profiles. The de-facto system is a WordPress theme. Root variables carry the `--wp--preset--*` naming for default palette, spacing (`--wp--preset--spacing--30` 0.67rem through `--80` 5.06rem), font sizes (small 13px, large 36px) and shadows, alongside the site's own `--header-height` and `--spacer`. Source page: https://mallardandclaret.com/.

## Do's and Don'ts

- Do use one typeface with strictly negative letter-spacing that grows with size.
- Do let the coral `#fb4d4d` appear as a full-bleed band, not as a button fill.
- Do use charcoal `#262626` for text and for dark project sections.
- Do keep corners square except for 20px pills.
- Don't introduce the WordPress preset colors or shadows.
- Don't add gradients or drop shadows; none were measured.
- Don't use positive tracking on display type.

## Responsive Behavior

The 390px mobile pass recorded: the header brand link at 16px weight 500 on a 20.64px line height with -0.48px tracking, the hero h2 at 16px/400, and body text at 16px. Other measured mobile sizes are 30px, 42px, 26px, 14px, 106.2px and 60px, replacing desktop 33.7778px, 53.3333px, 26.6667px, 11px, 191.111px and 80px respectively in order of frequency. Navigation layout, image behavior and breakpoints on mobile are not measured.

## Iteration Guide

1. Start with a coral `primary` band and a wordmark sized in the hundreds of pixels with tracking near -6.4% of the size (the measured 191.111px at -12.16px).
2. Set all running text at 14px/18.06px, tracking -0.42px.
3. Reserve `ink` for dark sections and the single button.
4. Use `rounded.xs` (20px) only for pills.
5. Re-run `node web/scripts/verify-designs.mjs --slug=m-c-4-0` after any token change.

## Services and Voice

The fetched home page splits the offer in two. Creative design and strategy covers creative direction, UX and UI, wireframes and prototypes, design systems, motion design, 3D and WebGL, content strategy and SEO copywriting, and AI workflow consultancy. Development and support covers creative front-end development, eCommerce, WordPress, Webflow, headless CMS (Contentful, Prismic, Sanity), React and Next.js, performance and accessibility optimisation, hosting and maintenance. Named clients include Adidas, Unilever, Westfield and the BBC. The voice is confident and design-led: "Award-winning websites for global brands", "At M&C time zones work in your favour", "Partner with us and give your brand the competitive edge", and the footer line "Bespoke digital experiences for ambitious brands." Copy is short, in sentence case, with uppercase reserved for the button label and tags. Imagery is real client work shown full-bleed: a charity family portrait under blossom, a fashion film with spaced-out green lettering, and a glass-like 3D render; the site lets each project set its own color and keeps its own chrome to charcoal, white and one coral.

Measured text colors are only two (charcoal and white), so contrast pairs are charcoal on coral or white, and white on charcoal or imagery; the hover state of the contact button swaps between those same two.
