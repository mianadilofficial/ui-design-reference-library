---
version: alpha
name: "Relats"
category: "Tech & AI"
description: "Relats Top Tier site: near-black #0a0a0a canvas with white ink, Roobert (400/500) for text and DM Mono for labels, a white pill button with #1d1d1d text and 13.34px radius, an #eae4df warm card surface, and full-bleed video and product photography of protective sleeving."
colors:
  canvas: "#0a0a0a"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#1d1d1d"
  surface-3: "#eae4df"
  ink-3: "#757474"
  link-border: "#00000033"
typography:
  display:
    fontFamily: Roobert, Helvetica, Arial, sans-serif
    fontSize: 14.2208px
    fontWeight: 400
    lineHeight: 14.2208px
  display-mobile:
    fontFamily: Roobert, Helvetica, Arial, sans-serif
    fontSize: 14.001px
    fontWeight: 500
    lineHeight: 39.9984px
  body:
    fontFamily: Roobert, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23.04px
    letterSpacing: "-0.32px"
  button:
    fontFamily: Roobert, Helvetica, Arial, sans-serif
    fontSize: 13.3376px
    fontWeight: 500
    lineHeight: 42.6624px
  button-secondary:
    fontFamily: Roobert, Helvetica, Arial, sans-serif
    fontSize: 13.3376px
    fontWeight: 400
    lineHeight: 35.5584px
rounded:
  xs: 7.12px
  sm: 8.88px
  md: 13.34px
  lg: 14.22px
  xl: 16.88px
  2xl: 17.78px
  3xl: 29.34px
  4xl: 60px
  cta: 13.34px
spacing:
  s1: 3.56px
  s2: 5.34px
  s3: 7.12px
  s4: 8.88px
  s5: 15.12px
  s6: 16px
  s7: 17.78px
  s8: 21.34px
  s9: 23.12px
  s10: 24.88px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    padding: 0px 28.4416px
    height: 43px
    borderColor: "{colors.ink}"
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    padding: 0px 28.4416px
    height: 36px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    padding: 0px 28.4416px
    borderColor: "{colors.link-border}"
  nav:
    textColor: "{colors.ink}"
    padding: 15.1168px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  card:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.on-primary}"
  footer:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    padding: 26.6624px 0px
---

## Overview

Relats Top Tier (toptier.relats.com, page title "Relats | Top tier solutions") is a single-page scrolling showcase for Relats, a maker of protective sleeving for electromobility, transport and industrial use. The page opened in WebFetch lists the sections in order: a video hero with the headline "Protection sleeves for the mobility of tomorrow", a product showcase with spec icons, industry carousels, a "Where power meets protection" filter block, a battery thermal-management banner, a sustainability commitment, company statistics and a closing "Join the ride" call to action with "Browse catalog" and "Request information" buttons.

The capture shows the visual register: a dark, cinematic canvas where full-bleed imagery (an orange woven sleeve in close-up, then an aerial road through green hills) does the work, and the interface is reduced to a small floating pill header with the logo, a dark "Full view" chip and a faint "Overview" link. Copy is confident and short ("Top tier solutions", "Join the ride"), with technical claims stated plainly.

Microcopy observed on the page is aspirational and brief: taglines such as "Top tier solutions" and "Ahead of the curve, everywhere it counts", with a casual call to action ("Join the ride"). The copy is not fully consistent: degree symbols appear both as "ºC" and "°C" and product names vary in capitalisation, so treat spelling as something to normalise when reproducing the page.

## Colors

- canvas #0a0a0a is the page background (5583 area weight); #1d1d1d is the largest measured background (10245) and is used as on-primary and the footer fill.
- ink #ffffff is the most-read text colour (2794 characters); #1d1d1d (1997 characters) is the text on light surfaces and on the white button.
- primary #ffffff is the fill of the detected primary button ("Browse catalog") with a 1px solid #ffffff border.
- surface-3 #eae4df is a warm light surface used for cards (5440 area weight).
- ink-3 #757474 is a muted grey text colour (34 characters); link-border #00000033 is the translucent border of the outlined link button.

Small saturated swatches (#ff5710, #42ec8b, #3131ff) appear as product colour swatches in the backgrounds and borders; each covers a few pixels of area and they are not declared as UI tokens. The extraction also recorded translucent white fills (#ffffff26, #ffffff33) for glass surfaces such as the header pill.

## Typography

Roobert carries 4230 characters in weights 400 and 500, with a Helvetica, Arial, sans-serif fallback; DM Mono (400 and 500, 615 characters) is used for small technical labels. Font Awesome 6 Pro is loaded for icons.

The generated display token (14.2208px, weight 400) is the "Scroll down" label that the extractor picked as h1; it is not the hero headline, whose size was not captured as an h1 (the size distribution includes 71.1168px, 151.117px and 222.221px, but the extraction does not assign them to the headline). Body is 16px, weight 400, line-height 23.04px, letter-spacing -0.32px. Buttons are 13.3376px at weight 500 (primary) and 400 (secondary). Other sizes by character count: 10.6624px (549, the mono labels), 21.3376px, 30.2208px, 12.4416px, 44.4416px.

Roobert is a commercial typeface; Helvetica or Arial is the declared fallback.

## Layout

The measured page is 1280px wide and 54,412px tall: a long scroll of full-width sections rather than a grid-heavy layout. Navigation is a floating pill near the top centre rather than a header bar; its container pads 15.1168px vertically. Spacing tokens measured: 3.56px, 5.34px, 7.12px, 8.88px, 15.12px, 16px, 17.78px, 21.34px, 23.12px, 24.88px. Buttons use 28.4416px horizontal padding; the footer pads 26.6624px vertically.

## Elevation & Depth

No box shadows were measured on rendered elements (the boxShadows frequency list is empty). The site's WordPress theme declares an "outlined" shadow preset in its CSS variables ("6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0)"), but no element was measured using it. Depth comes from translucent white glass fills over video, tonal steps between #0a0a0a, #1d1d1d and #eae4df, and imagery.

## Shapes

The radius scale is large and soft: 7.12px, 8.88px, 13.34px, 14.22px, 16.88px, 17.78px, 29.34px and 60px. The buttons use 13.34px (token cta). 16.88px (38 elements), 17.78px (25) and 14.22px (22) are the most common radii, used on cards and media frames; 60px appears once, as a fully rounded pill.

## Components

- Primary button ("Browse catalog"): white fill, #1d1d1d text, Roobert 13.3376px weight 500, height 43px, padding 0 28.4416px, 13.34px radius, 1px white border.
- Secondary button ("Full view"): transparent, white text, weight 400, height 36px, same padding and radius.
- Outlined link ("Explore BPM"): #1d1d1d text, weight 500, 1px #00000033 border, for use on light surfaces.
- Header pill: logo plus two links; in the hover probe the "Overview" link was measured at opacity 0.6 with a 13.34px radius.
- Card: #eae4df surface with #1d1d1d text.
- Footer: #1d1d1d background, white text, 26.66px vertical padding.
- Product showcase: three featured products (Revitex WSX45, VSC25, VSCTF) each shown with small spec icons for temperature, flammability and thermal runaway; copy gives the numbers and standards references directly.
- Industry carousels: tabbed rows split into mobility sectors (construction, hybrid and electric, buses and trucks, railway, agriculture) and other sectors (ovens, heat, electricity, robotics), each with specs or a short pitch.
- Solution filters: the "Where power meets protection" block uses tags such as electrical insulation, EMI shielding, fire protection and noise reduction.
- Battery banner: a "New Launch" promotion for battery thermal-management materials with an "Explore" button.
- Sustainability block: the Movera commitment states 2030 targets for recycled packaging, sustainable materials and carbon footprint.
- Overlays (not base UI): a floating sidebar linking the digital catalog, a "Be the First to Explore" early-access form, and product modals that list solutions, applications, materials, colours, temperature range and flammability, each with an inquiry form.
- Closing call to action: "Join the ride" with "Browse catalog" and "Request information".

## Design System Architecture

No public design system or brand guideline was found; the page links none. The de-facto system is a WordPress theme (the extraction found `--wp--preset--*` variables) with project variables such as --light #f3f3f3, --white #fff, --bg-dark #1c1c1c, --bg-dark-alt2 #333, --overlay #18181a, --border-dark2 rgba(0,0,0,.1) and --vho 8px. Icons come from Font Awesome 6 Pro. Product modals and floating sidebars are layered on top of the scroll page.

## Do's and Don'ts

Do:
- Keep the canvas near-black and let video or product imagery fill the viewport.
- Use the white pill button with dark #1d1d1d text for the main action.
- Round everything: use the 13.34px button radius and 14 to 18px card radii.
- Keep headlines tight and confident, and technical claims numeric.

Don't:
- Do not use the product swatch colours (#ff5710, #42ec8b, #3131ff) as UI accents.
- Do not use the browser-default link colours; none were measured as brand colours.
- Do not add drop shadows; none were measured.
- Do not document the early-access form or product modals as base UI; they are overlays.

## Responsive Behavior

On the 390px mobile pass the label-sized display text measured 14.001px at weight 500 with line-height 39.9984px. The mobile size distribution is led by 15.84px (590 characters), 14.001px, 17.9985px, 13.2px, 29.9988px, 19.9992px, 12.32px, 9.9996px and 39.9984px. Breakpoints, layout changes and navigation behaviour on mobile were not measured.

## Iteration Guide

1. Start from {colors.canvas} with {colors.ink} text; use {colors.surface-3} for light cards.
2. Use {components.button-primary} for the single main action per view.
3. Set body in Roobert 16px with -0.32px tracking; keep DM Mono for small labels.
4. Pick radii from the measured scale; the button uses {rounded.cta}.
5. Re-run `node web/scripts/verify-designs.mjs --slug=relats` after any edit.
