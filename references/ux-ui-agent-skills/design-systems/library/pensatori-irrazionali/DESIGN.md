---
version: alpha
name: Pensatori Irrazionali
category: "Portfolio"
description: "Pensatori Irrazionali, a European creative house: light grey #f5f5f5 canvas, black and #434343 helveticaNow type at weight 400, 60px display with -1.5px tracking, uppercase 12px LEARN MORE buttons on #434343 with 0px corners, and neon #2bff00, #f669e4, #ff0066, #adf800 swatches."
colors:
  canvas: "#f5f5f5"
  ink: "#000000"
  primary: "#434343"
  on-primary: "#ffffff"
  accent-green: "#2bff00"
  accent-pink: "#f669e4"
  accent-red: "#ff0066"
  accent-lime: "#adf800"
  ink-gray: "#5e5e5e"
  ink-light: "#b9b9b9"
  ink-heading: "#5b5b5b"
  hairline: "#ffffff1a"
  nav-bg: "#000000b3"
typography:
  display:
    fontFamily: helveticaNow, "helveticaNow Fallback"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-1.5px"
  display-mobile:
    fontFamily: helveticaNow, "helveticaNow Fallback"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-0.9px"
  button:
    fontFamily: helveticaNow, "helveticaNow Fallback"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-0.3px"
    textTransform: uppercase
  link:
    fontFamily: helveticaNow, "helveticaNow Fallback"
    fontSize: 60.8px
    fontWeight: 400
    lineHeight: 45.6px
    letterSpacing: "-0.8px"
rounded:
  xs: 16px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 19.2px
  s7: 24px
  s8: 28px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 32px
    height: 32px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 40px 48px 0px
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

Pensatori Irrazionali presents itself as "a creative house based in Europe, operating worldwide", and its site at https://pensatori-irrazionali.com/ (page title "Pensatori Irrazionali", 12901px tall at 1280px wide) is a showcase of brand work for sports, music, technology and consumer names. The opening screen is a pale grey field with a small crest logo (a lion above the name and an Italian flag stripe) at the top left, two small square menu buttons at the top right, and a spectacular 3D cluster of fabric ribbons printed with client logos such as Uber, Twitch, LEGO, Star Wars, Binance and boohoo sweeping in from the right. Below it a short manifesto in tight, large Helvetica reads "A creative house based in Europe, operating worldwide. We shape experiences where depth, elegance, and essence are felt, not explained."

The page then moves to a calligraphic "Works" set against an engraved angel figure, a two-column list of clients (Mayweather, FaZe Clan, Neymar Jr., Cadillac, Vodafone, SOHub), each tagged "Corporate" with a small logo and arrow; a "Trusted by" block with a ten-cell logo grid (XO, TikTok, Stadium Goods, Nokia, Whop, Dove, Diadora, Justin Bieber, Snoop Dogg); and later sections with map silhouettes and "From Los ... To Tokyo" lines. Small bracketed labels such as "(Atelier)", "(Trusted by)" and "(01)" annotate sections. The mood is quiet and gallery-like on a light ground, with the loud colour supplied by the client work.

## Colors

`canvas` is `#f5f5f5` (7832 area weight, far above any other background). `ink` is `#000000`, the most-read text colour (3252 characters), with `primary` `#434343` for the secondary text, the large client names and the LEARN MORE button fill; `on-primary` is `#ffffff`. Additional text greys are measured: `ink-gray` `#5e5e5e` (995 characters), `ink-light` `#b9b9b9` and `ink-heading` `#5b5b5b`. `hairline` `#ffffff1a` is the thin translucent border used on dark controls, and `nav-bg` `#000000b3` is the translucent black of the full-screen menu overlay, which is hidden at first load.

Four saturated swatches appear as backgrounds, each at equal weight (46): `accent-green` `#2bff00`, `accent-pink` `#f669e4`, `accent-red` `#ff0066` and `accent-lime` `#adf800`. They are measured elements on the page rather than interface fills; the capture shows the page chrome staying grey, black and white and colour coming from the ribbon artwork. Treat them as an accent set to use sparingly.

## Typography

The site is set in a custom family named helveticaNow (with a "helveticaNow Fallback" face), by far the dominant font by characters (5928), at weight 400 throughout the measured roles. Two further faces appear on few characters: `ballet` (111 characters), a flourished script used for the large word "Works", and `ppEditorial` (11 characters). The CSS also declares `--font-helvetica-now`, `--font-pp-editorial` and `--font-some-type-mono`. These are commercial fonts; the declared fallback is the "helveticaNow Fallback" face, and any neo-grotesque sans is the closest stand-in for the body, with a formal copperplate-style script for the flourish.

Measured display roles: `display` 60px/60px with -1.5px tracking (-2.5 percent) and `display-mobile` 36px/40px with -0.9px tracking. Hero manifesto text is 36px/36px at weight 400 in `#434343`. Client names in the list are 60.8px/45.6px with -0.8px tracking. Buttons are 12px uppercase with -0.3px tracking. Common sizes measured by character count: 14px (3529), 16px (1266), 36px, 160px, 60.8px, 256px and 30px. The 160px and 256px sizes occur on very large decorative words; which element carries each size was not attributed in the extraction.

## Layout

The grid is a two-column and five-column system on a light ground with thin horizontal rules. The client list is two columns of three rows; each row is a name at 60.8px, a small "Corporate" label, a logo and an arrow, separated by hairline rules. The "Trusted by" logos are five columns by two rows of outlined square cells. Text blocks are left-aligned and set to a narrow measure (the manifesto spans under half the width). The measured nav overlay has padding 40px 48px 0px. Spacing steps recorded are 2, 4, 8, 12, 16, 19.2, 24, 28, 32 and 40px. Imagery is used at very large scale and cropped by the viewport edge (ribbons run off the right, "Works" runs off the left).

## Elevation & Depth

No box shadows were measured. Depth is created by 3D-rendered artwork (the ribbons), the overlap of large words and illustrations, and by the translucent black menu overlay (`#000000b3`) with a `#262626cc` dark panel fill. Components themselves are flat.

## Shapes

Radius values measured are 16px (three elements) and a full-round value (four elements, shown as 3.35544e+07px, a pill or circle used on small round buttons and icon cells). Everything else computes 0px, including the LEARN MORE button, which is square-cornered. Logo cells in the trusted grid have thin 1px outlines with square corners in the capture.

## Components

**Primary button.** "LEARN MORE": `#434343` fill, white 12px uppercase text, 0px radius, padding 8px 32px, 32px height. The label is stacked twice in the DOM, which is the hover text-swap animation.

**Client link rows.** Large 60.8px names in `#434343`; on hover the measured text scrambles (the "after" state shows partly replaced letters) rather than changing colour; the border stays `#000000` with no underline.

**Menu buttons.** Small dark square buttons at top right (an up chevron and a hamburger) with a `#ffffff1a` border.

**Menu overlay.** A full-height `#000000b3` panel with 20px weight-600 white text, listing Home, Clients, Work, Universe and Contact Us; the same list appears in the footer in 20px black text.

**Logo grid.** Ten outlined cells of equal size with centred client logos.

**Footer.** A 777px block with "Menu", links and contact details in 20px black type on the canvas.

## Design System Architecture

No public Pensatori Irrazionali design system or brand-guideline page was opened for this document, so there is no official token source to cite. The shipped CSS shows a Tailwind v4 foundation: variables such as `--text-2xl: 1.5rem`, `--text-9xl: 8rem`, `--tracking-tighter: -.05em`, `--leading-snug: 1.375`, `--blur-lg: 16px`, `--container-5xl: 64rem` and the `--tw-ring-*` set, plus font variables for helveticaNow, PP Editorial and Some Type Mono and a `--_number-flow-dx` variable from a number-animation library. Tight tracking (-.05em) is a declared utility and matches the -1.5px / 60px display measurement.

## Do's and Don'ts

- Do keep the ground light grey (`#f5f5f5`) and let client artwork provide colour.
- Do set large text in helveticaNow at weight 400 with negative tracking.
- Do use square corners on buttons and thin rules between list rows.
- Do label sections with small bracketed captions such as "(Atelier)".
- Do keep copy short and assured, as in "felt, not explained".
- Don't add shadows or gradient fills to controls.
- Don't use the four neon swatches as large UI backgrounds.
- Don't bold the headlines; weight 400 is measured everywhere.

## Responsive Behavior

The 390px mobile pass measured type only: the h1 is 36px/40px at weight 400, body text 24px/24px, and the primary button text 14px/20px. Layout, navigation and grid behaviour at mobile width are not measured.

## Iteration Guide

1. Start with `canvas` `#f5f5f5`, `ink` `#000000` and `primary` `#434343`.
2. Write a large 36px opening statement in helveticaNow weight 400 with tight leading.
3. Add one oversized script or display word per section, partly cropped by the viewport.
4. Build lists as hairline-ruled rows with a 60.8px name, a small tag and a logo.
5. Use 12px uppercase square buttons on `#434343` with 8px 32px padding.
6. Run `node web/scripts/verify-designs.mjs --slug=pensatori-irrazionali`.
