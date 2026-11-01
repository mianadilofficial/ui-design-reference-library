---
version: alpha
name: Meechok Plaza
category: "Thai Brands"
description: "Meechok Plaza Community Mall, Chiang Mai: a Wix-built site with a coral-to-crimson gradient hero, white Poppins display type, crimson #d9385b pill CTAs, navy #03264e text, aerial photography and a coral footer with yellow text."
colors:
  canvas: "#ffffff"
  ink: "#03264e"
  primary: "#d9385b"
  on-primary: "#ffffff"
  surface-gray: "#f0f0f0"
  accent-yellow: "#f1cd5f"
  ink-black: "#000000"
  ink-plum: "#23022e"
  ink-muted: "#5e5362"
  hairline-gray: "#dcdcdc"
  footer-coral: "#e69280"
  footer-yellow: "#ffc828"
typography:
  display-mobile:
    fontFamily: poppins-v2, sans-serif
    fontSize: 19.105px
    fontWeight: 700
    lineHeight: 19.105px
    letterSpacing: "-0.764202px"
  heading:
    fontFamily: poppins-v2, sans-serif
    fontSize: 101.186px
    fontWeight: 700
    lineHeight: 101.186px
    letterSpacing: "-4.04743px"
  subheading:
    fontFamily: poppins-v2, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 18px
  body:
    fontFamily: poppins-v2, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif
    fontSize: 16px
    fontWeight: 400
  button-secondary:
    fontFamily: poppins-v2, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 5px
  sm: 13px
  md: 16px
  lg: 20px
  xl: 40px
  2xl: 40px
  3xl: 40.47px
  4xl: 100px
  cta: 300px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 12.8px
  s8: 15px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 0px 0px 12px
    height: 60px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.4xl}"
    padding: 8px
    height: 55px
    boxShadow: rgba(240, 240, 240, 0.6) 1px 1px 4px 0px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink-plum}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    boxShadow: rgba(94, 83, 98, 0.6) -0.5px 2.02368px 17.2015px 1.01184px
  footer:
    backgroundColor: "{colors.footer-coral}"
    textColor: "{colors.footer-yellow}"
---

## Overview

Meechok Plaza (มีโชคพลาซ่า) is a community mall in Chiang Mai. The homepage text describes it as "Chiang Mai's very first community mall", serving locals since 2004, with over 35,000 sq.m. of retail space, over 150 shops and 500 market stalls, around 12,000 daily visitors and more than 1,000 parking slots. It sits at the Fa Ham intersection with access from the Superhighway. The menu offers About Us, Directory, Events, Space Rental and Visit Us, a Thai/English switch and a Contact button.

The capture is a brand-forward, poster-like page. A thin dark strip at the top scrolls the repeated text "Meechok Plaza Chiangmai" with yellow map-pin icons. A floating white pill-shaped header holds the logo, a serif navigation row, a round language flag button and a black "Contact" pill with an arrow circle. The hero is a full-width gradient from coral through crimson to pale pink, with the large hand-lettered "Mee Chok plaza" wordmark in white and yellow, black line illustrations (an egg tray, a net shopping bag, a shopping cart, a bowl) and the headline "Meechok Plaza where everyday moments mean more" in white Poppins with the words Meechok, moments and more highlighted in yellow. Below it a full-bleed aerial photograph of the mall at dusk, with its red ribbon facade, market tents and a McDonald's sign, carries a "Location & Community" label and a "View" control. Next comes a pale gray section headed "meechok plaza is:" in giant crimson bold lowercase type.

Voice is warm and neighbourly ("part of your routine", "everyday moments mean more"), written in English first with a Thai version.

## Colors

The canvas is white (#ffffff), with a light gray section color `surface-gray` #f0f0f0 used behind the "meechok plaza is:" block. Body ink is a deep navy `ink` #03264e; other text colors are `ink-black` #000000, a very dark plum `ink-plum` #23022e (the measured navigation link color) and a muted purple-gray `ink-muted` #5e5362. Hairlines are `hairline-gray` #dcdcdc.

The brand color is crimson `primary` #d9385b with white `on-primary` text. It fills the "More tenants!" call-to-action and the huge "meechok plaza is:" headline in the capture. `accent-yellow` #f1cd5f is a measured yellow, and the capture shows a brighter yellow on highlighted headline words and map pins; only the measured token is documented. The footer uses a coral `footer-coral` #e69280 background with `footer-yellow` #ffc828 text. The hero gradient sweeps from coral to crimson to pale pink; its stops are image/gradient values and are not tokenised.

The generated tokens contained #0000ee, a browser default link color, which is not a brand color and was dropped.

## Typography

The body stack is `poppins-v2, sans-serif`, a Wix-hosted build of Poppins, loaded at weights 400, 500 and 700 with italics. The primary button uses a different stack, `madefor-text` followed by Helvetica Neue fallbacks, which is the Wix Madefor font used for built-in Wix buttons. The navigation links in the capture are set in a serif; the extraction also loaded Libre Baskerville.

Measured styles: heading 101.186px at 700, line height 101.186px and letter spacing -4.04743px (the oversized lowercase crimson section title); display-mobile 19.105px at 700, line height 19.105px, letter spacing -0.764202px; subheading 18px at 500 and line height 18px; body 15px at 400 with 21px line height; button text 16px at 400; secondary button 16px at 400. Heads are tight and heavy, with negative tracking, which gives the poster feel. Substitute for Poppins is the Google Fonts Poppins itself, which is freely available.

## Layout

The site is built on Wix, with full-bleed sections stacked vertically: hero, aerial photo band, large title block, text and statistics blocks. The page uses a very wide hero rather than a narrow container; the white header pill floats above it with a rounded edge. Measured spacing steps are 2, 4, 6, 8, 10, 12, 12.8, 15, 24 and 30px, small increments typical of Wix editor placement; large vertical whitespace in the capture comes from section heights. Elements are often centred in the hero and left aligned in text sections.

## Elevation & Depth

Depth comes from layering and soft shadows. The card token carries a large soft shadow, `rgba(94, 83, 98, 0.6) -0.5px 2.02368px 17.2015px 1.01184px`, a diffuse purple-gray glow. The secondary button has a tiny, light shadow `rgba(240, 240, 240, 0.6) 1px 1px 4px 0px`. The floating header pill sits above the gradient hero, and the photography band carries a dark overlay behind its white label.

## Shapes

Radius tokens are 5px, 13px, 16px and 20px for smaller elements, 40px and 40.47px for large rounded blocks, 100px, and 300px and 9999px for pills. The primary CTA uses 300px, so it renders as a full pill; the secondary button uses 100px. The header container, the Contact button and the language button are all fully rounded, so rounded-pill geometry is the dominant shape language alongside the rounded photo and card blocks.

## Components

**Primary button** ("More tenants!"): crimson #d9385b fill, white text, 300px radius, 60px height, left padding 12px, 16px type in the Wix Madefor stack.

**Secondary button**: crimson fill with white text, 100px radius, 8px padding, 55px height, 16px type and the faint shadow described above.

**Navigation**: link color #23022e (plum) in the white pill header, with a nav surface in white. The header also holds a black Contact pill with an arrow, a design pattern not measured as a token.

**Card**: white background, black text, with the soft purple-gray shadow listed above.

**Footer**: coral #e69280 background with #ffc828 yellow text.

No separate text input style was recorded.

## Design System Architecture

No public design system, brand guideline or press kit is linked from the pages opened. The site is built with Wix: the root stylesheet exposes Wix theme variables such as --color_11, --color_12 (240,240,240), --color_37 (35,2,46), --wst-color-fill-background-primary, --wst-button-color-border-secondary-hover and font variables like --font_9, which map site colors and font styles to a palette of numbered slots. The de-facto system is therefore the Wix site theme: numbered color slots, named font styles and built-in button styles. Source: https://www.meechokplaza.com/ (homepage and stylesheet as measured by the extractor).

## Do's and Don'ts

Do use crimson #d9385b for high-impact headings and CTA pills, white text on gradient heroes, and yellow highlights on single words in headlines. Do use full-bleed photography of the mall and its markets, and black line illustrations for retail objects. Do keep the pill shape for buttons and the header.

Don't use browser-default blue links. Don't put dense body text over the gradient; body text uses navy #03264e on white or light gray. Don't treat the scroll-to-top control or the repeated ticker strip as reusable brand components. Don't mix yellow tokens: use the measured #f1cd5f or footer #ffc828 rather than invented values.

## Responsive Behavior

The extraction includes a mobile pass, which produced a display-mobile style of 19.105px; the desktop heading is 101.186px. Breakpoints and mobile layout are not measured.

## Iteration Guide

Use only the frontmatter values. Start sections full-bleed: coral-to-crimson gradient for the hero with white Poppins, light gray for the large title block, white elsewhere. Make CTAs crimson pills (60px high, 300px radius). Keep headings bold with negative tracking at large sizes. When adding a new component, measure it on the live site first; then re-run the gate.
